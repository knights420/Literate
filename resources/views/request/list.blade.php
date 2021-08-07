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
        <table class="table table-separate table-head-custom table-checkable" id="kt_datatable1">
			<thead>
				<tr>
					<th>#</th>
					<th>Name</th>
					<th>Email</th>
					<th>Mobile</th>
                    <th>School Name</th>
					<th>Status</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				@foreach($request as $req)
				<tr>
                    <td>{{$loop->iteration}}</td>
					<td>{{$req->name}}</td>
					<td>{{$req->email}}</td>
					<td>{{$req->mobile}}</td>
					<td>{{$req->school_name}}</td>
					<td>
						@if ($req->status == 1)
						<a href="/request/status/2/{{$req->id}}" class="btn btn-success btn-sm">Accept</a>	
						<a href="/request/status/0/{{$req->id}}" class="btn btn-danger btn-sm">Reject</a>	
						@elseif($req->status == 2)
						<button class="btn btn-success btn-sm">Accepted</button>
						@elseif($req->status == 0)
						<button class="btn btn-danger btn-sm">Rejected</button>
						@endif
						
					</td>
					<td nowrap>
                        <div style="display: flex;" class="justify-content-center">
                            <form action="request/{{$req->id}}" method="post">
                                @csrf
                                @method('delete')
                                <button class="btn btn-sm btn-clean btn-icon btn-icon-md" title="Delete">
									<i class="la la-trash"></i>
								</button>
                            </form>
                    	</div>
                    </td>
            	</tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection