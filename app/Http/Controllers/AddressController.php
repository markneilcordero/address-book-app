<?php

namespace App\Http\Controllers;

use App\Models\Address;
use App\Http\Requests\StoreAddressRequest;
use App\Http\Requests\UpdateAddressRequest;

class AddressController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('addressbook.index', ['addresses' => Address::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('addressbook.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAddressRequest $request)
    {
        $validated = $request->validated();
        $model = new Address;
        $model->name = $request->input('name');
        $model->address = $request->input('address');
        $model->phone_number = $request->input('phone_number');
        $model->save();
        return redirect()->route('address.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Address $address)
    {
        return view('addressbook.show', ['id' => $address->id, 'name' => $address->name, 'address' => $address->address, 'phone_number' => $address->phone_number]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Address $address)
    {
        return view('addressbook.edit', ['id' => $address->id, 'name' => $address->name, 'address' => $address->address, 'phone_number' => $address->phone_number]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAddressRequest $request, Address $address)
    {
        $validated = $request->validated();
        $address->update([
            'name' => $request->input('name'),
            'address' => $request->input('address'),
            'phone_number' => $request->input('phone_number'),
        ]);
        return redirect()->route('address.show', [$address->id]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Address $address)
    {
        $address->delete();
        return redirect()->route('address.index');
    }
}
