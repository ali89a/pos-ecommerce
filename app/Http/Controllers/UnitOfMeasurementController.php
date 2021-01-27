<?php

namespace App\Http\Controllers;

use App\Model\UnitOfMeasurement;
use Illuminate\Http\Request;

class UnitOfMeasurementController extends Controller
{
    protected function path(string $suffix)
    {
        return "admin.unit.{$suffix}";
    }
    public function index()
    {
        $data = [
            'units' => UnitOfMeasurement::all(),
        ];
        return view($this->path('index'), $data);

    }
    public function create()
    {
        $data = [
            'model' => new UnitOfMeasurement,
        ];

        return view($this->path('create'), $data);

    }

    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required',
        ]);

        $unit = new UnitOfMeasurement();
        $unit->name = $request->name;
        $unit->save();

        \Toastr::success('Unit Created Successfully!.', '', ["progressbar" => true]);
        return redirect()->route('unit.index');

    }
    public function show(UnitOfMeasurement $unitOfMeasurement)
    {
        //
    }

    public function edit($id)
    {
       
        $data = [
            'model' => UnitOfMeasurement::find($id),
        ];

        return view($this->path('edit'), $data);
    }
    public function update(Request $request,$id)
    {
        $request->validate([
            'name' => 'required',
        ]);
        $unitOfMeasurement=UnitOfMeasurement::find($id);
        $unitOfMeasurement->name = $request->name;
        $unitOfMeasurement->update();

        \Toastr::success('Unit Updated Successfully!.', '', ["progressbar" => true]);
        return redirect()->route('unit.index');
    }
    public function destroy(UnitOfMeasurement $unitOfMeasurement)
    {
        //
    }
}
