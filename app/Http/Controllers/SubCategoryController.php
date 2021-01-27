<?php

namespace App\Http\Controllers;

use App\Model\SubCategory;
use Illuminate\Http\Request;

class SubCategoryController extends Controller
{
    protected function path(string $suffix)
    {
        return "admin.sub-category.{$suffix}";
    }
    public function index()
    {
        $data = [
            'sub_categories' => SubCategory::all(),
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
            'categories' => \App\Model\ProductCategory::pluck('name', 'id'),
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
            'name' => 'required|unique:sub_categories',
        ]);

        $con = new SubCategory();
        $con->category_id = $request->category_id;
        $con->name = $request->name;
        $con->save();

        \Toastr::success('Sub Category Created Successfully!.', '', ["progressbar" => true]);
        return redirect()->route('sub-category.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Country  $country
     * @return \Illuminate\Http\Response
     */
    public function show(SubCategory $sub_category)
    {
        //
    }
    public function edit(SubCategory $sub_category)
    {
        $data = [
            'categories' => \App\Model\ProductCategory::pluck('name', 'id'),
            'model' => $sub_category,
        ];

        return view($this->path('edit'), $data);
    }
    public function update(Request $request, SubCategory $sub_category)
    {
        $request->validate([
            'name' => 'required|unique:sub_categories',
        ]);

        $sub_category->category_id = $request->category_id;
        $sub_category->name = $request->name;
        $sub_category->save();

        \Toastr::success('Sub Category Updated Successfully!.', '', ["progressbar" => true]);
        return redirect()->route('sub-category.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Country  $country
     * @return \Illuminate\Http\Response
     */
    public function destroy(SubCategory $sub_category)
    {
        //
    }
}
