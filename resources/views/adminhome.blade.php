@extends('adminlayout')
@section('content')
<script src="/js/plugins/jquery-3.4.1.min.js"></script>
<script src="/js/plugins/parallax.min.js"></script>
<script src="/js/plugins/moment.js"></script>
<script src="/js/plugins/bootstrap.js"></script>
<style>
    
</style>
    <div class="container" style="margin-top: 300px;" >
        <div class="row text-center" >
            
            <div class="col-md-6 pt-5" >
                <a href="allcustomercart" class="btn btn-warning form-control p-5">All Cutomer Cart</a>
            </div>
            <div class="col-md-6 pt-5" >
                <a href="saledproducts" class="btn btn-warning form-control p-5">All Sold Products</a>
            </div>
            
        </div>
        <div class="row text-center">
            <div class="col-md-6 pt-5" >
                <a href="alluserdetails" class="btn btn-warning form-control p-5">All User Details</a>
            </div><br>
            <div class="col-md-6 pt-5" >
                <a href="addproduct" class="btn btn-warning form-control p-5">Add Product</a>
            </div>
        </div>
    </div>
@endsection