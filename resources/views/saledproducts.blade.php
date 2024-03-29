@extends('adminlayout')
@section('content')
<script src="/js/plugins/jquery-3.4.1.min.js"></script>
<script src="/js/plugins/parallax.min.js"></script>
<script src="/js/plugins/moment.js"></script>
<script src="/js/plugins/bootstrap.js"></script>
<script>
    function calculateTotalPrice(){
        
        var date = document.getElementById('date').value;
        var formdata = new FormData();
        formdata.append("date",date);
      //  alert(date);
        var xhr = new XMLHttpRequest();
        xhr.open("GET","totalPrice/"+date);
        xhr.send(formdata);
        xhr.addEventListener("load",function(event){
           // alert(event.target.responseText);
            document.getElementById('totalpriceparticulardate').innerHTML = "Total Purchase in "+date +" is "+ event.target.responseText+"$";
        });
    }
</script>
    <div class="container" style="margin-top: 200px;">
        <div class="row">
           <h3 class="display-4 text-danger ">Sold Products</h3>
            <div class="col">
            <h4 id="totalpriceparticulardate"></h4>
            <div class="row">
                <div class="col-md-2">
                    <input type="date" name="date" class="form-control" width="200" id="date">
                </div>
                <div class="col-md-6">
                    <button class="btn btn-warning" onclick="calculateTotalPrice()">Calulate Total Price</button>
                </div>
            </div><br>
           
                    <table class="table table-striped bg-light shadow table-hover">
                        <th>
                            <td><b>Image</b></td>
                            <td><b>Company Name</b></td>
                            <td><b>Model Name</b></td>
                            <td><b>Price</b></td>
                            <td><b>Customer Name</b></td>
                            <td><b>Customer Username</b></td>
                            <td><b>Purchase date</b></td>
                        </th>
                    
                    @foreach ($salesdata as $data)
                        <tr>
                            <td></td>
                            <td><img class="rounded-circle img-fluid" width="50" height="50" src={{$data->image}} alt=""  ></td>
                            <td>{{$data->company_name}}</td>
                            <td>{{$data->model_name}}</td>
                            <td>{{$data->price}}</td>
                            <td>{{$data->name}}</td>
                            <td>{{$data->username}}</td>
                            <td>{{$data->purchase_date}}</td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
    
@endsection