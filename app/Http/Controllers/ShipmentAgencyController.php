<?php

namespace App\Http\Controllers;

use App\Models\ShipmentAgency;
use Illuminate\Http\Request;
use Inertia\Inertia;

class ShipmentAgencyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Inertia::render('ShipmentAgency/Index', [
            'shipment_agencies' => ShipmentAgency::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return Inertia::render('ShipmentAgency/Create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // TODO: Implement store() method.
    }

    /**
     * Display the specified resource.
     */
    public function show(ShipmentAgency $shipmentAgency)
    {
        return Inertia::render('ShipmentAgency/Show', [
            'shipment_agency' => $shipmentAgency,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ShipmentAgency $shipmentAgency)
    {
        return Inertia::render('ShipmentAgency/Edit', [
            'shipment_agency' => $shipmentAgency,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ShipmentAgency $shipmentAgency)
    {
        // TODO: Implement update() method.
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ShipmentAgency $shipmentAgency)
    {
        $shipmentAgency->delete();

        return redirect()->route('shipment_agencies.index')->with('success', 'Shipment agency deleted.');
    }
}
