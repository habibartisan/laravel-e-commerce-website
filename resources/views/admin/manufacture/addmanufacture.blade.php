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
            <li><a href="#">manufactures-Add</a></li>
        </ul>

        <div>
            <form class="form-horizontal" role="form" action="{{route('insert_Manufacture')}}" method="post">
                    @csrf
                <fieldset>
                    <div class="control-group">
                        <label class="control-label" for="focusedInput">Manufacture Name</label>
                        <div class="controls">
                            <input class="input-xlarge focused" name="manufactures_name" id="focusedInput" type="text">
                        </div>
                    </div>
                    <div class="control-group hidden-phone">
                        <label class="control-label" for="textarea2">Manufacture Desc:</label>
                        <div class="controls">
                            <textarea class="cleditor" name="manufactures_description" id="textarea2" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="control-group hidden-phone">
                        <label class="control-label" for="textarea2">publication Status</label>
                        <div class="controls">
                            <input type="checkbox" name="manufactures_status" value="1">
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