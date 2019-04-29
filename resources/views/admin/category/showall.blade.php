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
            <li><a href="#">Category-Add</a></li>
        </ul>
        @if(session('successMsg'))
            <div class="alert alert-success" role="alert">
                {{session('successMsg')}}
            </div>
        @endif
        <div class="row-fluid sortable">
            <div class="box span12">
                <div class="box-content">
                    <table class="table table-striped table-bordered bootstrap-datatable datatable">
                        <thead>
                        <tr>
                            <th>Category Name</th>
                            <th>Description</th>
                            <th>Created At</th>
                            <th>Updated At</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($Category as $Categ)
                            <tr>
                                <td>{{$Categ->cat_name}}</td>
                                <td>{{$Categ->cat_description}}</td>
                                <td>{{$Categ->created_at}}</td>
                                <td>{{$Categ->updated_at}}</td>
                                <td class="center">
                                    @if($Categ->public_status==0)
                                        <span class="label label-danger">unActive</span>
                                    @else
                                        <span class="label label-success">Active</span>
                                    @endif                                </td>
                                <td class="center">
                                    @if($Categ->public_status==0)
                                        <a class="btn btn-danger" href="{{route('unactive',$Categ->category_id)}}">
                                            <i class="icon-eye-open"></i>
                                        </a>
                                    @else
                                        <a class="btn btn-success" href="{{route('active',$Categ->category_id)}}">
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