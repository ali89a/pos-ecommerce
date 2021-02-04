@extends('layouts.admin-app')
@section('title')
POS
@endsection

@section('style')

@endsection

@section('css-bottom')

@endsection

@section('content')
<!-- Content Header (Page header) -->

<section class="content-header">
        <div class="container-fluid">
            <div class="row mb-1">

            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
            <div class="col-5">
            <div class="card">
                <div class="card-body">

                <form>
                    <div class="form-group">
                    <div class="input-group">
                        <select class="custom-select" id="inputGroupSelect04">
                        <option selected disabled>Select Customer</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                        </select>
                        <div class="input-group-append">
                        <button class="btn btn-outline-secondary" type="button" data-toggle="modal" data-target="#exampleModalCenter"><i class="fa fa-plus-circle" aria-hidden="true"></i></button>
                        </div>
                    </div>
                    </div>
                    <div class="form-group">
                    <input type="text" class="form-control" placeholder="Enter Product Name">
                    </div>
                    <!-- <div class="form-group">
                    <input type="text" class="form-control" placeholder="Another input">
                    </div> -->
                    <table class="table table-hover table-sm">
                    <thead>
                        <tr class="table-success">
                        <th scope="col" class="text-left">Product</th>
                        <th scope="col" class="text-center">Rate</th>
                        <th scope="col" class="text-center">Qty</th>
                        <th scope="col" class="text-right">Price</th>
                        <th scope="col" class="text-right"><i class="fa fa-trash" aria-hidden="true"></i></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <td class="text-left">Mark</td>
                        <td class="text-center">120.00</td>
                        <td class="text-center"><input type="number" name="" value="01" style="max-width:50px"></td>
                        <td class="text-right">120.00</td>
                        <td class="text-right"><button class="btn btn-sm btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></button></td>
                        </tr>
                        <tr>
                        <td class="text-left">Milk</td>
                        <td class="text-center">80.00</td>
                        <td class="text-center"><input type="number" name="" value="01" style="max-width:50px"></td>
                        <td class="text-right">80.00</td>
                        <td class="text-right"><button class="btn btn-sm btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></button></td>
                        </tr>
                        <tr>
                        <td class="text-right" colspan="3">Sub Total</td>
                        <td class="text-right">200.00</td>
                        <td></td>
                        </tr>
                        <tr>
                        <td class="text-right" colspan="3">Discount</td>
                        <td class="text-right"><input type="number" name="" value="20" style="max-width:50px"></td>
                        <td></td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr class="table-success">
                        <th scope="col" class="text-right" colspan="3">Total Price</th>
                        <th scope="col" class="text-right">495.00</th>
                        <td></td>
                        </tr>
                        <tr class="table-info">
                        <th scope="col" class="text-right" colspan="3">Total Price</th>
                        <th scope="col" class="text-right">495.00</th>
                        <td></td>
                        </tr>
                    </tfoot>
                    </table>
                </form>
                </div>
            </div>
            </div>
            <div class="col-7">
            <div class="card">
                <div class="card-body">
                <div class="row">
                    <div class="col-3">
                    <div class="card">
                        <img class="card-img-top" src="img/1.png" alt="Card image cap">
                        <div class="card-body">
                        <p class="card-text">Some quick</p>
                        </div>
                    </div>
                    </div>
                    <div class="col-3">
                    <div class="card">
                        <img class="card-img-top" src="img/2.png" alt="Card image cap">
                        <div class="card-body">
                        <p class="card-text">Some quick</p>
                        </div>
                    </div>
                    </div>
                    <div class="col-3">
                    <div class="card">
                        <img class="card-img-top" src="img/1.png" alt="Card image cap">
                        <div class="card-body">
                        <p class="card-text">Some quick</p>
                        </div>
                    </div>
                    </div>
                    <div class="col-3">
                    <div class="card">
                        <img class="card-img-top" src="img/2.png" alt="Card image cap">
                        <div class="card-body">
                        <p class="card-text">Some quick</p>
                        </div>
                    </div>
                    </div>

                </div>
                </div>
            </div>
            </div>
            <!-- start add new customer model -->
            <!-- Modal -->
            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Create a Custoemr</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                    <input type="text" class="form-control" placeholder="Name">
                    </div>
                    <div class="form-group">
                    <input type="number" class="form-control" placeholder="Mobile Number">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Create Custoemr</button>
                </div>
                </div>
            </div>
            </div>

            <!-- end new customer model -->
        </div>
        </div>
    </section>
    <!-- / .min content  -->
</section>
@endsection

@push('script-bottom')

@endpush