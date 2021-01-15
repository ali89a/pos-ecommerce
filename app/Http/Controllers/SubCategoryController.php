<?php

namespace App\Http\Controllers;

use App\Model\SubCategory;
use Illuminate\Http\Request;

class SubCategoryController extends Controller
{
    protected function path(string $suffix)
    {
        return "admin.country.{$suffix}";
    }
    public function index()
    {
        $data = [
            'countries' => SubCategory::all(),
        ];
        return view($this->path('index'), $data);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = [
            'model' => new SubCategory,
        ];

        return view($this->path('create'), $data);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());

        $request->validate([
            'name' => 'required|unique:countries',
        ]);

        $con = new SubCategory();
        $con->name = $request->name;
        $con->save();

        \Toastr::success('Country Created Successfully!.', '', ["progressbar" => true]);
        return redirect()->route('country.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Country  $country
     * @return \Illuminate\Http\Response
     */
    public function show(SubCategory $country)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Country  $country
     * @return \Illuminate\Http\Response
     */
    public function edit(SubCategory $country)
    {
        $data = [
            'model' => $country,
        ];

        return view($this->path('edit'), $data);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Country  $country
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Country $country)
    {
       $request->validate([
    'name' => 'required|unique:countries',
]);

$country->name = $request->name;
$country->save();

\Toastr::success('Country Updated Successfully!.', '', ["progressbar" => true]);
return redirect()->route('country.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Country  $country
     * @return \Illuminate\Http\Response
     */
    public function destroy(Country $country)
    {
        //
    }
}
