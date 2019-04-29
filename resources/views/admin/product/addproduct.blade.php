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
            <li><a href="#">Product-Add</a></li>
        </ul>
        @if(session('mesage'))
            <div class="alert alert-success" role="alert">
                {{session('mesage')}}
            </div>
        @endif
        @if(session('messg'))
            <div class="alert alert-success" role="alert">
                {{session('messg')}}
            </div>
        @endif
        <div>
            <form class="form-horizontal" role="form" action="{{route('insert_product')}}" method="post" enctype="multipart/form-data">
                    @csrf
                <fieldset>
                    <div class="control-group">
                        <label class="control-label" for="focusedInput">product Name</label>
                        <div class="controls">
                            <input class="input-xlarge focused" name="product_name" id="focusedInput" type="text">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="selectError3">category name</label>
                        <div class="controls">
                            <select id="selectError3" name="category_id">
                                <option>select category name</option>
                                @php
                                    $Category= App\Category::all();
                                @endphp
                                @foreach($Category as $Categor)
                                    <option value="{{$Categor->category_id}}">{{$Categor->cat_name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="selectError3">Manufactures name</label>
                        <div class="controls">
                            <select id="selectError3" name="manufactures_id">
                                <option>select manufacture name</option>
                                @php
                                    $Manufacture= App\Manufacture::all();
                                @endphp
                                @foreach($Manufacture as $Manufact)
                                    <option value="{{$Manufact->manufactures_id}}">{{$Manufact->manufactures_name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="control-group hidden-phone">
                        <label class="control-label" for="textarea2">Product Short Description</label>
                        <div class="controls">
                            <textarea class="cleditor" name="product_short_description" id="textarea2" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="control-group hidden-phone">
                        <label class="control-label" for="textarea2">Product Long Description</label>
                        <div class="controls">
                            <textarea class="cleditor" name="product_long_description" id="textarea2" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="control-group hidden-phone">
                        <label class="control-label" for="textarea2">Product Price</label>
                        <div class="controls">
                            <input class="input-xlarge focused" name="product_price" id="focusedInput" type="text">

                        </div>
                    </div>
                    <div class="control-group hidden-phone">
                        <label class="control-label" for="textarea2">Product Size</label>
                        <div class="controls">
                            <input class="input-xlarge focused" name="product_size" id="focusedInput" type="text">

                        </div>
                    </div>
                    <div class="control-group hidden-phone">
                        <label class="control-label" for="textarea2">Product Color</label>
                        <div class="controls">
                            <input class="input-xlarge focused" name="product_color" id="focusedInput" type="text">

                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="fileInput">File input</label>
                        <div class="controls">
                            <input class="input-file uniform_on" name="product_image" id="fileInput" type="file">
                        </div>
                    </div>
                    <div class="control-group hidden-phone">
                        <label class="control-label" for="textarea2">publication Status</label>
                        <div class="controls">
                            <input type="checkbox" name="product_status" value="1">
                        </div>
                    </div>

                    <div class="form-actions">
                        <button type="submit" class="btn btn-primary">Add Category</button>
                        <button class="btn">Cancel</button>
                    </div>
                </fieldset>
            </form>

        </div>
        <div class="box-content" style="margin-top:180px">

        </div>
    </div>

@endsection

@push('js')
@endpush