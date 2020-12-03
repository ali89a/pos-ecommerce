<?php

namespace App\Http\Controllers;

use App\Model\Expense;
use Illuminate\Http\Request;

class ExpenseController extends Controller
{
    protected function path(string $suffix)
    {
        return "admin.expense.{$suffix}";
    }
    public function index()
    {
        $data = [
            'expenses' => Expense::all(),
        ];
        return view($this->path('index'), $data);
    }

    public function create()
    {
        $data = [
            'model' => new Expense,
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
            'name' => 'required',
            'amount' => 'required',
        ]);

        $con = new Expense();
        $con->name = $request->name;
        $con->amount = $request->amount;
        $con->save();

        \Toastr::success('Expense Created Successfully!.', '', ["progressbar" => true]);
        return redirect()->route('expense.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\Expense  $expense
     * @return \Illuminate\Http\Response
     */
    public function show(Expense $expense)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Expense  $expense
     * @return \Illuminate\Http\Response
     */
    public function edit(Expense $expense)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Expense  $expense
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Expense $expense)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Expense  $expense
     * @return \Illuminate\Http\Response
     */
    public function destroy(Expense $expense)
    {
        //
    }
}
