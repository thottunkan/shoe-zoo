@extends('adminlayout')
@section('content')
<script src="/js/plugins/jquery-3.4.1.min.js"></script>
<script src="/js/plugins/parallax.min.js"></script>
<script src="/js/plugins/moment.js"></script>
<script src="/js/plugins/bootstrap.js"></script>
    <div class="container" style="margin-top: 200px;">
        <div class="row">
           <h3 class="display-4 text-danger">All Customer Cart</h3>
            <div class="col">
                    <table class="table table-striped table-hover bg-light shadow">
                        <th>
                            <td><b>Image</b></td>
                            <td><b>Company Name</b></td>
                            <td><b>Model Name</b></td>
                            <td><b>Price</b></td>
                            <td><b>Customer Name</b></td>
                            <td><b>Customer Username</b></td>
                        </th>
                    
                    @foreach ($cartsdata as $data)
                        <tr>
                            <td></td>
                            <td><img class="rounded-circle img-fluid" width="50" height="50" src={{$data->image}} alt=""  ></td>
                            <td>{{$data->company_name}}</td>
                            <td>{{$data->model_name}}</td>
                            <td>{{$data->price}}</td>
                            <td>{{$data->name}}</td>
                            <td>{{$data->username}}</td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
    
@endsection