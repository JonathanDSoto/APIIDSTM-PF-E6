<?php

namespace App\Http\Controllers;

use App\Models\ShippingCompany;
use Illuminate\Http\Request;
use Illuminate\Session\Store;
use Inertia\Inertia;
use App\Http\Requests\ShippingCompany\StoreShippingCompanyRequest;
use App\Http\Requests\ShippingCompany\UpdateShippingCompanyRequest;

class ShippingCompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Inertia::render('ShippingCompany/Index', [
            'shipping_companies' => ShippingCompany::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return Inertia::render('ShippingCompany/Create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreShippingCompanyRequest $request)
    {
        $validated = $request->validated();

        $shippingCompany = ShippingCompany::create($validated);

        return to_route('shipping-companies.index')->with('success', 'Shipping company created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(ShippingCompany $shippingCompany)
    {
        $shippingCompany->load('create_author', 'update_author');

        return Inertia::render('ShippingCompany/Show', [
            'shipping_company' => $shippingCompany,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ShippingCompany $shippingCompany)
    {
        return Inertia::render('ShippingCompany/Edit', [
            'shipping_company' => $shippingCompany,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateShippingCompanyRequest $request, ShippingCompany $shippingCompany)
    {
        $validated = $request->validated();

        $shippingCompany->update($validated);

        return to_route('shipping-companies.show', $shippingCompany)->with('success', 'Shipping company updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ShippingCompany $shippingCompany)
    {
        $shippingCompany->delete();

        return to_route('shipping-companies.index')->with('success', 'Shipping company deleted.');
    }
}
