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
<div class="card card-custom">
	<div class="card-header">
		<div class="card-title">
            <span class="card-icon">
                <i class="flaticon2-chart text-primary"></i>
            </span>
			<h3 class="card-label">
				List
			</h3>
		</div>
		<div class="card-toolbar">
            <a href="{{url('subjects/create')}}" class="btn btn-sm btn-success font-weight-bold">
				<i class="la la-plus"></i>
				Add New
			</a>
		</div>
	</div>
	<div class="card-body">
        <table class="table table-separate table-head-custom table-checkable" id="kt_datatable">
			<thead>
				<tr>
					<th>#</th>
					<th>Name</th>
					<th>Description</th>
					<th>Image</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				@foreach($subjects as $sbj)
				<tr>
                    <td>{{$loop->iteration}}</td>
					<td>{{$sbj->name}}</td>
					<td>{{$sbj->description}}</td>
					<td>
						<img src="{{Storage::url("admin/subject/".$sbj->image)}}"  width="100px" height="80px" />
					</td>
					<td >
                        <div style="display: flex;" class="justify-content-center">
                            <form action="subjects/{{$sbj->id}}" method="post">
                                @csrf
                                @method('delete')
                                <button class="btn btn-sm btn-clean btn-icon btn-icon-md" title="Delete">
									<i class="la la-trash"></i>
								</button>
                            </form>
							<a href="{{url('subjects/'.$sbj->id.'/edit')}}" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="Edit">
								<i class="la la-edit"></i>
                            </a>
                    	</div>
                    </td>
            	</tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection
@section('js')
<!--begin::Page Vendors(used by this page)-->
<script src="assets/plugins/custom/datatables/datatables.bundle.js"></script>
<!--end::Page Vendors-->
<!--begin::Page Scripts(used by this page)-->
<script src="assets/js/pages/crud/datatables/basic/paginations.js"></script>
<!--end::Page Scripts-->
@endsection
@section('css')
	<!--begin::Page Vendors Styles(used by this page)-->
	<link href="assets/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" />
	<!--end::Page Vendors Styles-->
@endsection