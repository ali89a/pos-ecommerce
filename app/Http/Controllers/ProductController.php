<?php

namespace App\Http\Controllers;

use App\Http\Resources\ProductResource;
use App\Model\Product;
use Illuminate\Http\Request;
use Picqer;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    protected function path(string $suffix)
    {
        return "admin.product.{$suffix}";
    }

    public function index()
    {
        $data = [
            'products' => Product::all(),
        ];
        return view($this->path('index'), $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function fetch_product($id)
    {

        return Product::with('unit_of_measurement')->findOrFail($id);
    }
    public function fetch_product_sale($id)
    {

        $product = Product::with('unit_of_measurement')->findOrFail($id);
        $data = [
            'product_name' => $product->name,
            'unit' => $product->unit_of_measurement->name,
            'sale_price' => $product->selling_price,
            'product_id' => $id,
            'stock' => \App\Classes\AvailableProductCalculation::product_id($id),
        ];
        return $data;
    }
    public function fetch_products_by_cat_id($id)
    {

        $products = Product::where(['product_status' => 'active', 'product_category_id' => $id])->get();

        $data = [

            'products' => $products,
        ];

        return $data;
    }
    public function create()
    {
        $data = [
            'model' => new Product,
            'categories' => \App\Model\ProductCategory::pluck('name', 'id'),
            'sub_categories' => \App\Model\SubCategory::pluck('name', 'id'),
            'units' => \App\Model\UnitOfMeasurement::pluck('name', 'id'),
        ];

        return view($this->path('create'), $data);
    }

    public function store(Request $request)
    {

        //   dd($request->all());
        $request->validate([
            'name' => 'required',
        ]);
        $pro = new Product();

        $pro->product_category_id = $request->product_category_id;
        $pro->sub_category_id = $request->sub_category_id;
        $pro->unit_of_measurement_id = $request->unit_of_measurement_id;
        $pro->status = $request->status;
        $pro->best_seller = $request->best_seller;
        $pro->feature = $request->feature;
        $pro->name = $request->name;
        $pro->slug = Str::slug($request->name, '-');
        $pro->alert_quantity = $request->alert_quantity;
        $pro->selling_price = $request->selling_price;
        $pro->code = \App\Classes\ProductCode::serial_number();
        $pro->creator_user_id = \Auth::id();

        $label = \App\Classes\ProductCode::serial_number();

        $redColor = [0, 0, 0];
        $barcode_generator = new Picqer\Barcode\BarcodeGeneratorPNG();
        $barcode = $barcode_generator->getBarcode($label, $barcode_generator::TYPE_CODE_128, 3, 50, $redColor);
        $path = storage_path("app/public/barcode/$label.png");
        file_put_contents($path, $barcode);
        //Storage::disk('local')->put($path,  $barcode);

        //   $path =$barcode->store('public/attach_documents');

        $pro->barcode_path = "barcode/$label.png";

        if ($request->img_url != null) {
            $fileName = time() . '.' . $request->img_url->extension();
            $request->img_url->move(storage_path('app/public'), $fileName);
            $pro->img_url = $fileName;
        }

        $pro->save();

        \Toastr::success('Product Created Successfully!.', '', ["progressBar" => true]);
        return redirect()->route('product.index');
    }

    public function show(Product $product)
    {
        $data = [
            'model' => $product,
        ];

        return view($this->path('show'), $data);
    }

    public function edit(Product $product)
    {
        $data = [
            'model' => $product,
            'categories' => \App\Model\ProductCategory::pluck('name', 'id'),
            'sub_categories' => \App\Model\SubCategory::pluck('name', 'id'),
            'units' => \App\Model\UnitOfMeasurement::pluck('name', 'id'),
        ];

        return view($this->path('create'), $data);
    }

    public function update(Request $request, Product $product)
    {
        $request->validate([
            'name' => 'required',
        ]);

        $product->product_category_id = $request->product_category_id;
        $product->sub_category_id = $request->sub_category_id;
        $product->unit_of_measurement_id = $request->unit_of_measurement_id;
        $product->status = $request->status;
        $product->best_seller = $request->best_seller;
        $product->feature = $request->feature;
        $product->name = $request->name;
        $product->alert_quantity = $request->alert_quantity;
        $product->selling_price = $request->selling_price;
        $product->updator_user_id = \Auth::id();
        if ($request->img_url != null) {
            $fileName = time() . '.' . $request->img_url->extension();
            $request->img_url->move(storage_path('app/public'), $fileName);
            $product->img_url = $fileName;
        }

        $product->save();

        \Toastr::success('Product Updated Successfully!.', '', ["progressBar" => true]);
        return redirect()->route('product.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return new ProductResource($product);
    }

    public function fetch_category_wise_product($id)
    {

        $products = Product::where(['product_category_id' => $id])->get();

        $data = [

            'products' => $products,
        ];

        return $data;
    }
}
