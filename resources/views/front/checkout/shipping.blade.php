@extends('layouts.front-app')

@section('front-content')

    <div class="container">
        <div class="row">
            <div class="col-md-12 well text-center text-success">
              Dear {{ Session::get('customerName') }}. You have to give us product shipping info to complete your valuable order. If your billing info & shipping info are same then just press on save shipping info button.
            </div>
        </div>
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <br/>
                <h3>Shipping Info goes here...</h3>
                <br/>
                {{-- {{ Form::open([ 'route'=>'new-shipping', 'method'=>'POST']) }} --}}
            <form action="{{route('new-shipping')}}" method="post">
            {{ csrf_field() }}
                <div class="form-group">
                    <input type="text" value="{{ $customer->name.' '.$customer->short_name }}" name="full_name" class="form-control " placeholder="First Name">
                </div>
                <div class="form-group">
                    <input type="email" value="{{ $customer->email }}" name="email" class="form-control " placeholder="example@gmail.com">
                </div>
                <div class="form-group">
                    <input type="text" value="{{ $customer->mobile }}" name="mobile" class="form-control " placeholder="Phone Number">
                </div>
                <div class="form-group">
                    <textarea name="address" placeholder="Address" class="form-control">{{ $customer->address }}</textarea>
                </div>
                <div class="form-group">
                    <input type="submit" name="btn" class="form-control  btn btn-info" value="Save Shipping Info">
                </div>
            </form>
                {{-- {{Form::close()}} --}}
            </div>
        </div>
    </div>

@endsection