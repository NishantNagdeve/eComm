@extends('master')
@section('content')
<div class="container custom-login">
<div class="row justify-content-center">
        <h3>Add Product</h3>
    </div><br />
    <div class="row justify-content-center">
        <div class="col-sm-4">
            <form method="post" action="product-add">
            @csrf
                <div class="form-group">
                    <label for="Email">Email</label>
                    <input type="email" name="email" class="form-control" placeholder="Enter email">
                </div>
                <div class="form-group">
                    <label for="Password">Password</label>
                    <input type="Password" name="password" class="form-control" placeholder="Enter Password">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection