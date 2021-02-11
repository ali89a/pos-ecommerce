@extends('layouts.front-app')

@section('front-content')

{{-- @section('title')
CustomerPage
@endsection --}}

@section('front-content')
<div class="container">
    <div class="row">

        <div class="col-lg-12">


            <h3 class="text-center text-success">
                 {{Session::get('message')}}  
            </h3>
            <hr/>


            <div class="well lead text-center text-success">
                <h1>You are welcomed to submit your order</h1>

            </div>

        </div>

    </div>
</div>
@endsection