@extends('layouts.app')
@section('bredcrum')
<!--begin::Page Title-->
<h5 class="text-dark font-weight-bold my-1 mr-5">Master</h5>
<!--end::Page Title-->
<!--begin::Breadcrumb-->
<ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
    <li class="breadcrumb-item">
        <a href="" class="text-muted">Subject</a>
    </li>
    <li class="breadcrumb-item">
        <a href="" class="text-muted">Create</a>
    </li>
</ul>
<!--end::Breadcrumb-->
@endsection
@section('content')
<div class="flex-row-fluid ml-lg-8 m-5">
    <!--begin::Card-->
    <div class="card card-custom card-stretch">
        <!--begin::Header-->
        <div class="card-header py-3">
            <div class="card-title align-items-start flex-column">
                <h3 class="card-label font-weight-bolder text-dark">Subject</h3>
            </div>
        </div>
        <form class="form" action="/subjects/{{$subject->id}}" method="post" enctype="multipart/form-data">
            @method('patch')
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label>Name:</label>
                    <input type="text" class="form-control form-control-solid" name="name" placeholder="Enter Subject name" value="{{$subject->name}}"/>
                </div>
                <div class="form-group">
                    <label>Description:</label>
                    <textarea name="description" id="" cols="30" rows="10" class="form-control form-control-solid">{{$subject->description}}</textarea>
                </div>
                <div class="form-group">
                    <label>Image:</label>
                    <input type="file" name="image" class="form-control form-control-solid"/>
                    <span class="form-text text-muted">Only Choose PNG, JPEG, JPG</span>
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary mr-2">Submit</button>
                <button type="reset" class="btn btn-secondary">Cancel</button>
            </div>
        </form>
    </div>
</div>
@endsection