<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Model\Sale;
use App\Model\SaleItem;
use Illuminate\Http\Request;
use App\Model\ProductCategory;
use Illuminate\Support\Facades\DB;
use Brian2694\Toastr\Facades\Toastr;
use niklasravnsborg\LaravelPdf\Facades\Pdf;

class SaleController extends Controller
{
    protected function path(string $suffix)
    {
        return "admin.sale.{$suffix}";
    }
    public function index()
    {
        $data = [
            'sales' => Sale::all(),
        ];
        return view($this->path('index'), $data);
    }

    public function create()
    {
        $data = [
            'model' => new Sale(),
            'categories' => ProductCategory::pluck('name', 'id'),
        ];

        return view($this->path('create'), $data);
    }

    public function store(Request $request)
    {

        $request->validate([
            'products' => 'array',
            'description' => 'nullable',
        ]);
        \DB::beginTransaction();

        // dd( $request->all());

        $sale = new Sale();
        $sale->invoice_number = \App\Classes\SaleNumber::serial_number();

        $sale->subtotal = $request->subtotal;
        $sale->discount = $request->discount;
        $sale->grandtotal = $request->grandtotal;
        $sale->receive_amount = $request->receive_amount;
        $sale->change_amount = $request->change_amount;
        $sale->date = Carbon::now()->format('Y-m-d');
        $sale->remark = $request->remark;
        $sale->creator_user_id = \Auth::id();
        $sale->save();
        $products = $request->get('products');

        foreach ($products as $row) {

            $sale_item = new SaleItem();
            $sale_item->product_id = $row['product_id'];
            $sale_item->sale_price = $row['sale_price'];
            $sale_item->discount = $row['discount'] ?? 0;
            $sale_item->quantity = $row['quantity'];
            $sale_item->sale_id = $sale->id;
            $sale_item->save();

            $sale->stock_out_items()->create($row);
        }



        DB::commit();

        Toastr::success('Sale Order Successful!.', '', ["progressBar" => true]);
        return redirect()->route('sale.index');
    }

    public function pdf($id)
    {
        $data = [
            'model' => Sale::find($id),

        ];

        $pdf = PDF::loadView(
            'admin.sale.pdf',
            $data,
            [],
            [
                'format' => 'A4-P',
                'orientation' => 'P',
                'margin-left' => 1,

                '', // mode - default ''
                '', // format - A4, for example, default ''
                0, // font size - default 0
                '', // default font family
                1, // margin_left
                1, // margin right
                1, // margin top
                1, // margin bottom
                1, // margin header
                1, // margin footer
                'L', // L - landscape, P - portrait

            ]
        );
        $name = \Carbon\Carbon::now()->format('d-m-Y');

        return $pdf->stream($name . '.pdf');
    }
    public function pdfDownload($id)
    {
        $data = [
            'model' => Sale::find($id),

        ];

        $pdf = PDF::loadView(
            'admin.sale.pdf',
            $data,
            [],
            [
                'format' => 'A4-P',
                'orientation' => 'P',
                'margin-left' => 1,

                '', // mode - default ''
                '', // format - A4, for example, default ''
                0, // font size - default 0
                '', // default font family
                1, // margin_left
                1, // margin right
                1, // margin top
                1, // margin bottom
                1, // margin header
                1, // margin footer
                'L', // L - landscape, P - portrait

            ]
        );
        $name = \Carbon\Carbon::now()->format('d-m-Y');

        return $pdf->download($name . '.pdf');
    }
    public function show(Sale $sale)
    {
        $data = [
            'model' => $sale,

        ];

        return view($this->path('show'), $data);
    }

    public function edit(Sale $sale)
    {
        //
    }

    public function update(Request $request, Sale $sale)
    {
        //
    }

    public function destroy(Sale $sale)
    {
        //
    }
}
