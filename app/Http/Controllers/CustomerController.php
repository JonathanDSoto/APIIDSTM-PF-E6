<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Inertia\Inertia;
use App\Http\Requests\Customer\StoreCustomerRequest;
use App\Http\Requests\Customer\UpdateCustomerRequest;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $customers = Customer::all();

        return Inertia::render('Customer/Index', [
            'customers' => $customers,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return Inertia::render('Customer/Create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCustomerRequest $request)
    {
        $validated = $request->validated();

        $validated['password'] = Hash::make($validated['password']);

        if (isset($validated['profile_photo'])) {
            $profile_photo = $request->file('profile_photo');
            $profile_photo_file_name = time() . '_' . $profile_photo->getClientOriginalName();
            $profile_photo->move(public_path('images'), $profile_photo_file_name);
            $validated['profile_photo_file_name'] = $profile_photo_file_name;
        }

        Customer::create($validated);

        return to_route('customers.index')->with('success', 'Customer created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Customer $customer)
    {
        $customer->load('create_author', 'update_author');

        return Inertia::render('Customer/Show', [
            'customer' => $customer,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Customer $customer)
    {
        return Inertia::render('Customer/Edit', [
            'customer' => $customer,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Customer $customer)
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255', 'min:1'],
            'last_name' => ['required', 'string', 'max:255', 'min:1'],
            'email' => ['required', 'email', 'max:255', 'unique:customers,email,' . $customer->id],
        ]);

//        $validated = $request->validated();
        if (isset($validated['profile_photo'])) {
            if ($customer->profile_photo_file_name) {
                unlink(public_path('images/' . $customer->profile_photo_file_name));
            }

            $profile_photo = $request->file('profile_photo');
            $profile_photo_file_name = time() . '_' . $profile_photo->getClientOriginalName();
            $profile_photo->move(public_path('images'), $profile_photo_file_name);
            $validated['profile_photo_file_name'] = $profile_photo_file_name;
        }
        $customer->update($validated);

        return to_route('customers.show', $customer)->with('success', 'Customer updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Customer $customer)
    {
        $customer->delete();

        return to_route('customers.index')->with('success', 'Customer deleted successfully!');
    }
}
