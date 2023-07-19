<?php

namespace App\Http\Controllers;

use App\Models\Device;
use Illuminate\Http\Request;

class DeviceController extends Controller
{
    public function index()
    {
        $devices = Device::all();
        return view('device.index', compact('devices'));
    }

    public function create()
    {
        return view('device.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'product_name' => 'required',
            'amount' => 'required',
            'money' => 'required',
            'department' => 'required',
            'status' => 'required',
            'purchase_date' => 'required',
            'delivery_date' => 'required',
            'person_delivery_id' => 'required',
            'depreciation_rate' => 'required'
        ]);
        $device = new Device();
        $device->product_name = $request->product_name  ;
        $device->amount = $request->amount;
        $device->money = $request->money;
        $device->department = $request->department;
        $device->status = $request->status;
        $device->purchase_date = $request->purchase_date;
        $device->delivery_date = $request->delivery_date;
        $device->person_delivery_id = $request->person_delivery_id;
        $device->depreciation_rate = $request->depreciation_rate;
        $device->save();

        return redirect()->route('devices.index')->with('success', 'Suggest created success');
    }

    public function show(Device $device)
    {
        return view('device.show', compact('device'));
    }

    public function edit(Device $device)
    {
        return view('device.edit', compact('device'));
    }

    public function update(Request $request, Device $device)
    {
        $request->validate([
            'product_name' => 'required',
            'amount' => 'required',
            'money' => 'required',
            'department' => 'required',
            'status' => 'required',
            'purchase_date' => 'required',
            'delivery_date' => 'required',
            'person_delivery_id' => 'required',
            'depreciation_rate' => 'required'
        ]);
        $device->product_name = $request->product_name;
        $device->amount = $request->amount;
        $device->money = $request->money;
        $device->department = $request->department;
        $device->status = $request->status;
        $device->purchase_date = $request->purchase_date;
        $device->delivery_date = $request->delivery_date;
        $device->person_delivery_id = $request->person_delivery_id;
        $device->depreciation_rate = $request->depreciation_rate;
        $device->save();
        return redirect()->route('devices.index')->with('success', 'Product updated success');
    }

    public function destroy(Device $device)
    {
        $device->delete();
        return redirect()->route('devices.index')->with('success', 'Product deleted success');
    }
}
