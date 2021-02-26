<?php

namespace App\Http\Controllers\AccessControl;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Slider;
use Picqer;
use Illuminate\Support\Str;
//use App\Http\Resources\SliderResource;



class SliderController extends Controller
{
    protected function path(string $suffix)
    {
        return "admin.access_control.slider.{$suffix}";
    }

    public function index()
    {
        $data = [
            'sliders' => Slider::all()
        ];
        return view($this->path('index'), $data);
    }

    public function create()
    {
        $data = [
            'model' => new Slider()
        ];
        return view($this->path('create'), $data);
    }

    public function store(Request $request)
    {

        //   dd($request->all());
         $request->validate([
            'img_url' => 'required',
         ]);
        // $pro = new Slider();

        // if ($request->img_url != null) {
        //    // $fileName = time() . '.' . $request->img_url->getClientOriginalName();
        //     $fileName = time() . '.' . $request->img_url->extension();
        //     $request->img_url->move(storage_path('app/public'), $fileName);
        //     $pro->img_url = $fileName;
        // }

        // $pro->save();

        //dd($request->all());
        $slider = new Slider();

        $productFile = $request->file('img_url');
        if ($productFile != null) {
            $fileName = $productFile->getClientOriginalName();
            $uploadPath = 'sliderFile/';
            $productFile->move($uploadPath, $fileName);
            $fileUrl = $uploadPath . $fileName;
            $slider->img_url = $fileUrl;
            $slider->save();
        }
        \Toastr::success('Product Created Successfully!.', '', ["progressBar" => true]);
        return redirect()->route('slider.index');
    }

    public function show(Slider $slider)
    {
        $data = [
            'model' => $slider
        ];
        return view($this->path('show'), $data);
    }

    public function edit(Slider $slider)
    {
        $data = [
            'model' => $slider
        ];
        return view($this->path('create'), $data);
    }

    public function update(Request $request, Slider $slider)
    {
        $productById = Slider::where('id', $request->id)->first();
        $productImage = $request->file('img_url');
        if ($productImage) {
            unlink($productById->img_url);
            $imageName = $productImage->getClientOriginalName();
            $uploadPath = 'product-images/';
            $productImage->move($uploadPath, $imageName);
            $imageUrl = $uploadPath . $imageName;
        } else {
            $imageUrl = $productById->img_url;
        }
        return $imageUrl;

        // if ($request->img_url != null) {
        //     $fileName = time() . '.' . $request->img_url->extension();
        //     $request->img_url->move(storage_path('app/public'), $fileName);
        //     $slider->img_url = $fileName;
        //     $slider->save();
        // }
       

        // \Toastr::success('Product Updated Successfully!.', '', ["progressBar" => true]);
        // return redirect()->route('slider.index');
    }

    
    public function destroy(Slider $slider)
    {
       $slider->delete();
      // return new SliderResource($slider);
      return redirect()->route('slider.index');
    }

  
}
