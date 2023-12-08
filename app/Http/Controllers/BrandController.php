<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Http\Requests\Brand\StoreBrandRequest;
use App\Http\Requests\Brand\UpdateBrandRequest;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $brands = Brand::with(['phone_numbers', 'websites'])->get();

        return Inertia::render('Brand/Index', [
            'brands' => $brands,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return Inertia::render('Brand/Create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBrandRequest $request)
    {
        $validated = $request->validated();

        if (isset($validated['logo'])) {
            $logo = $request->file('logo');
            $logo_name = time() . '_' . $logo->getClientOriginalName();
            $logo->move(public_path('images'), $logo_name);
            $validated['logo_file_name'] = $logo_name;
        }

        $brand = Brand::create($validated);

        if (isset($validated['website'])) {
            $brand->websites()->create([
                'website' => $validated['website'],
            ]);
        }

        if (isset($validated['phone_number'])) {
            $brand->phone_numbers()->create([
                'phone_number' => $validated['phone_number'],
            ]);
        }

        if (isset($validated['email'])) {
            $brand->emails()->create([
                'email' => $validated['email'],
            ]);
        }

        return to_route('brands.index')->with('success', 'Brand created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Brand $brand)
    {
        $brand->load([
            'create_author',
            'update_author',
            'emails',
            'phone_numbers',
            'websites',
        ]);

        return Inertia::render('Brand/Show', [
            'brand' => $brand
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Brand $brand)
    {
        $brand->load([
            'emails',
            'phone_numbers',
            'websites',
        ]);

        return Inertia::render('Brand/Edit', [
            'brand' => $brand,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBrandRequest $request, Brand $brand)
    {
        $validated = $request->validated();

        if (isset($validated['logo'])) {
            if ($brand->logo_file_name) {
                unlink(public_path('images/' . $brand->logo_file_name));
            }

            $logo = $validated->file('logo');
            $logo_name = time() . '_' . $logo->getClientOriginalName();
            $logo->move(public_path('images'), $logo_name);
            $validated['logo_file_name'] = $logo_name;
        }

        if (isset($validated['website'])) {
            $brand->websites()->delete();
            $brand->websites()->create([
                'website' => $validated['website'],
            ]);
        }

        if (isset($validated['phone_number'])) {
            $brand->phone_numbers()->delete();
            $brand->phone_numbers()->create([
                'phone_number' => $validated['phone_number'],
            ]);
        }

        if (isset($validated['email'])) {
            $brand->emails()->delete();
            $brand->emails()->create([
                'email' => $validated['email'],
            ]);
        }

        $brand->update($validated);

        return to_route('brands.show', $brand)->with('success', 'Brand updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Brand $brand)
    {
        $brand->delete();

        return to_route('brands.index')->with('success', 'Brand deleted successfully!');
    }
}
