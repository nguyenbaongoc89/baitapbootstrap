@extends('layouts.master')
<style>
    .tbl-1 th, .tbl-1 td{
        height: 30px;
        padding: 5px !important;
        
    }
    .tbl-1 td{
        font-size: 12px;
        font-weight: normal;
    }
    
    .tbl-1 .btn{
        padding: 0 5px !important;
        font-size: 12px;
    }
    .group-search{
        margin-bottom: 5px;
    }
    .page-item.active .page-link {
        z-index: 3;
        color: #fff;
        background-color: #343a40 !important;
        border-color: #343a40 !important;
    }
    
</style>
@section('content')
    <h3>Product Manage</h3>
    <div class="input-group group-search" >
        <input class="form-control" type="text" name="" placeholder="Search Product by name" aria-label="Recipient's ">
        <div class="input-group-append">
            <span class="input-group-text">Search</span>
        </div>
    </div>
    
    <table class="table tbl-1">
        <thead class="thead-dark">
          <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Price</th>
            <th scope="col">Quantity</th>
            <th scope="col">Desciption</th>
            <th scope="col">Expired</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($products as $key=>$row)
                <tr>
                    <td scope="row">{{$key+1}}</td>
                        <td><a href="#">{{$row->name}}</a></td>
                        <td>{{$row->price}}</td>
                        <td>500</td>
                        <td>Bánh đậu xanh Hải Dương</td>
                        <td>{{date_format(date_create($row->expired), 'd-m-Y')}}</td>
                        <td>

                            <button class="btn btn-success" type="button">Edit</button>
                            <button class="btn btn-danger" type="button">Delete</button>
                        </td>
                    </tr>
            @endforeach 
                
            
        </tbody>
      </table>
      {{ $products->links() }}

@endsection
