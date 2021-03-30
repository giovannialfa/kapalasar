@extends('layouts.app')
@section('content')
<div class="container" style="margin: 0; max-width: 100%;">
    <div class="row">
        <div class="col-md-3 nopadding">
            <img src="{{ asset('image/merchant-signup.png') }}" style="height:100vh" alt="">
        </div>
        <div class="col-md-9">
        <div class="container h-100">
    <div class="row h-100 justify-content-center align-items-center">
        <div class="col-10 col-md-8 col-lg-6">
            <!-- Form -->
            <form class="form-example" action="" method="post">
                <p class="title-signin">Masuk Akun Merchant Kapalasar</p>
                <!-- Input fields -->
                <div class="form-group">
                    <label for="username">Email</label>
                    <input type="text" class="form-control username" id="username"name="username">
                </div>
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" class="form-control password" id="password"name="password">
                </div>
                <button type="submit" class="btn btn-signin btn-customized">Masuk</button>
                <p>Belum jadi Merchant Kapalasar?</p>
                <button type="submit" class="btn btn-signup btn-customized">Masuk</button>
                <!-- End input fields -->
            </form>
            <!-- Form end -->
        </div>
    </div>
</div>    
        <!-- <div class="container h-100">
                <div class="row h-100 justify-content-center align-items-center">
                    <form class="col-12">
                        <p>Masuk Akun Merchant Kapalasar</p>
                        <div class="form-group justify-content-center">
                            <label for="formGroupExampleInput">Email</label>
                            <input style="width: 555px;height: 40px;" type="text" class="form-control" id="formGroupExampleInput" >
                        </div>
                        <div class="form-group justify-content-center">
                            <label for="formGroupExampleInput2">Password</label>
                            <input style="width: 555px;height:40px" type="password" class="form-control" id="formGroupExampleInput2">
                        </div>
                    </form>   
                </div>
            </div> -->
        </div>
    </div>
</div>
@endsection