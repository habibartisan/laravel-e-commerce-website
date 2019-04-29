@extends('layouts.backend.app')

@section('title','')

@push('css')
@endpush



@section('content')
    <div id="content" class="span10">
        <ul class="breadcrumb">
            <li>
                <i class="icon-home"></i>
                <a href="index.html">Home</a>
                <i class="icon-angle-right"></i>
            </li>
            <li><a href="#">Product-Show</a></li>
        </ul>
        <div class="row-fluid sortable">
            <div class="box span12">
                <div class="box-content">
                    <table class="table table-striped table-bordered bootstrap-datatable datatable">
                        <thead>
                        <tr>
                            <th>Product Name</th>
                            <th>Category Name</th>
                            <th>Manufacture Name</th>
                            <th>Price</th>
                            <th>Image</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($Product as $Prod)
                            <tr>
                                <td>{{$Prod->product_name}}</td>
                                <td>{{$Prod->cat_name}}</td>
                                <td>{{$Prod->manufactures_name}}</td>
                                <td>{{$Prod->product_price}}</td>
                                <td><img src="{{$Prod->product_image}}" alt="" height="60px" width="60px"></td>
                                <td class="center">
                                    @if($Prod->product_status==0)
                                        <span class="label label-danger">unActive</span>
                                    @else
                                        <span class="label label-success">Active</span>
                                    @endif                                </td>
                                <td class="center">
                                    @if($Prod->product_status==0)
                                        <a class="btn btn-danger" href="{{route('unactiveproduct',$Prod->product_id)}}">
                                            <i class="icon-eye-open"></i>
                                        </a>
                                    @else
                                        <a class="btn btn-success" href="{{route('activeproduct',$Prod->product_id)}}">
                                            <i class="icon-eye-open"></i>
                                        </a>
                                    @endif
                                    <a class="btn btn-info" href="#">
                                        <i class="halflings-icon eye-off">Edit</i>
                                    </a>
                                    <a class="btn btn-danger" href="#" style="width: 50px; margin-right: 10px">
                                        <i class=" halflings-icon list">Delete</i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div><!--/span-->
        </div>
        <div class="box-content" style="margin-top:250px">

        </div>
@endsection

@push('js')
@endpush