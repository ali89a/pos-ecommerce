@extends('layouts.front-app')

@section('front-content')

<div id="account-register" class="container">
    <ul class="breadcrumb">
        <li><a href="https://opencart.opencartworks.com/themes/so_emarket/layout4/index.php?route=common/home"><i
                    class="fa fa-home"></i></a></li>
        <li><a
                href="https://opencart.opencartworks.com/themes/so_emarket/layout4/index.php?route=account/account">Account</a>
        </li>
        <li><a
                href="https://opencart.opencartworks.com/themes/so_emarket/layout4/index.php?route=account/register">Register</a>
        </li>
    </ul>
    <div class="row">
        <div id="content" class="col-sm-9">
            <h1>Register Account</h1>
            <p>If you already have an account with us, please login at the <a
                    href="https://opencart.opencartworks.com/themes/so_emarket/layout4/index.php?route=account/login">login
                    page</a>.</p>
            <form action="https://opencart.opencartworks.com/themes/so_emarket/layout4/index.php?route=account/register"
                method="post" enctype="multipart/form-data" class="form-horizontal">
                <fieldset id="account">
                    <legend>Your Personal Details</legend>
                    <div class="form-group required" style="display:  none ;">
                        <label class="col-sm-2 control-label">Customer Group</label>
                        <div class="col-sm-10">
                            <div class="radio">
                                <label>
                                    <input type="radio" name="customer_group_id" value="1" checked="checked">
                                    Default</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group required">
                        <label class="col-sm-2 control-label" for="input-firstname">First Name</label>
                        <div class="col-sm-10">
                            <input type="text" name="firstname" value="" placeholder="First Name" id="input-firstname"
                                class="form-control">
                        </div>
                    </div>
                    <div class="form-group required">
                        <label class="col-sm-2 control-label" for="input-lastname">Last Name</label>
                        <div class="col-sm-10">
                            <input type="text" name="lastname" value="" placeholder="Last Name" id="input-lastname"
                                class="form-control">
                        </div>
                    </div>
                    <div class="form-group required">
                        <label class="col-sm-2 control-label" for="input-email">E-Mail</label>
                        <div class="col-sm-10">
                            <input type="email" name="email" value="" placeholder="E-Mail" id="input-email"
                                class="form-control">
                        </div>
                    </div>
                    <div class="form-group required">
                        <label class="col-sm-2 control-label" for="input-telephone">Telephone</label>
                        <div class="col-sm-10">
                            <input type="tel" name="telephone" value="" placeholder="Telephone" id="input-telephone"
                                class="form-control">
                        </div>
                    </div>
                </fieldset>
                <fieldset>
                    <legend>Your Password</legend>
                    <div class="form-group required">
                        <label class="col-sm-2 control-label" for="input-password">Password</label>
                        <div class="col-sm-10">
                            <input type="password" name="password" value="" placeholder="Password" id="input-password"
                                class="form-control">
                        </div>
                    </div>
                    <div class="form-group required">
                        <label class="col-sm-2 control-label" for="input-confirm">Password Confirm</label>
                        <div class="col-sm-10">
                            <input type="password" name="confirm" value="" placeholder="Password Confirm"
                                id="input-confirm" class="form-control">
                        </div>
                    </div>
                </fieldset>
                <fieldset>
                    <legend>Newsletter</legend>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Subscribe</label>
                        <div class="col-sm-10"> <label class="radio-inline">
                                <input type="radio" name="newsletter" value="1">
                                Yes</label>
                            <label class="radio-inline">
                                <input type="radio" name="newsletter" value="0" checked="checked">
                                No</label>
                        </div>
                    </div>
                </fieldset>

                <div class="buttons">
                    <div class="pull-right">
                        <input type="submit" value="Continue" class="btn btn-primary">
                    </div>
                </div>
            </form>
        </div>
        <aside class="col-md-3 col-sm-4 col-xs-12 content-aside right_column sidebar-offcanvas">
            <span id="close-sidebar" class="fa fa-times"></span>

            <div class="list-group">
                <a href="https://opencart.opencartworks.com/themes/so_emarket/layout4/index.php?route=account/login"
                    class="list-group-item">Login</a> <a
                    href="https://opencart.opencartworks.com/themes/so_emarket/layout4/index.php?route=account/register"
                    class="list-group-item">Register</a> <a
                    href="https://opencart.opencartworks.com/themes/so_emarket/layout4/index.php?route=account/forgotten"
                    class="list-group-item">Forgotten Password</a>
                <a href="https://opencart.opencartworks.com/themes/so_emarket/layout4/index.php?route=account/account"
                    class="list-group-item">My Account</a>
                <a href="https://opencart.opencartworks.com/themes/so_emarket/layout4/index.php?route=account/address"
                    class="list-group-item">Address Book</a> <a
                    href="https://opencart.opencartworks.com/themes/so_emarket/layout4/index.php?route=account/wishlist"
                    class="list-group-item">Wish List</a> <a
                    href="https://opencart.opencartworks.com/themes/so_emarket/layout4/index.php?route=account/order"
                    class="list-group-item">Order History</a> <a
                    href="https://opencart.opencartworks.com/themes/so_emarket/layout4/index.php?route=account/download"
                    class="list-group-item">Downloads</a><a
                    href="https://opencart.opencartworks.com/themes/so_emarket/layout4/index.php?route=account/recurring"
                    class="list-group-item">Recurring payments</a> <a
                    href="https://opencart.opencartworks.com/themes/so_emarket/layout4/index.php?route=account/reward"
                    class="list-group-item">Reward Points</a> <a
                    href="https://opencart.opencartworks.com/themes/so_emarket/layout4/index.php?route=account/return"
                    class="list-group-item">Returns</a> <a
                    href="https://opencart.opencartworks.com/themes/so_emarket/layout4/index.php?route=account/transaction"
                    class="list-group-item">Transactions</a> <a
                    href="https://opencart.opencartworks.com/themes/so_emarket/layout4/index.php?route=account/newsletter"
                    class="list-group-item">Newsletter</a>
            </div>

        </aside>
    </div>
</div>
   
@endsection