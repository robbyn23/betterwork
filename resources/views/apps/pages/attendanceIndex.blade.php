@extends('apps.layouts.main')
@section('header.title')
Better Work Indonesia | Employee Attendance
@endsection
@section('header.plugins')
<link rel="stylesheet" href="{{ asset('bower_components/admin-lte/plugins/datatables-bs4/css/dataTables.bootstrap4.css') }}">
<link rel="stylesheet" href="{{ asset('bower_components/admin-lte/plugins/daterangepicker/daterangepicker.css') }}">
@endsection
@section('content')
<section class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1>Employee Attendance</h1>
			</div>
		</div>
	</div>
</section>
<section class="content">
	<div class="row">
		<div class="col-12">
			<div class="card card-info card-outline">
				<div class="card-header">
					{!! Form::open(array('route' => 'attendance.search','method'=>'POST')) !!}
					@csrf
					<div class="row">
						<div class="col-2">
							<input type="text" class="form-control" id="empolyeeID" name="employee_id" placeholder="Employee ID">
						</div>
						<div class="col-2">
							<input type="text" class="form-control" id="employeeFirstName" name="first_name" placeholder="Employee First Name">
						</div>
						<div class="col-2">
							<input type="text" class="form-control" id="employeeLastName" name="last_name" placeholder="Employee Last Name">
						</div>
						<div class="col-3">
							<div class="input-group">
								<div class="input-group-prepend">
									<span class="input-group-text">
										<i class="far fa-calendar-alt"></i>
									</span>
								</div>
								<input type="text" name="date_range" class="form-control float-right" id="reservation">
							</div>
						</div>
						<div class="col-3">
							<button type="submit" class="btn btn-sm btn-primary">Search</button>
							<a button type="button" class="btn btn-sm btn-danger" href="{{ route('attendance.index') }}">Cancel</a>
						</div>
					</div>
					{!! Form::close() !!}
				</div>
				<div class="card-body">
					<table id="example2" class="table table-bordered table-hover">
						<thead>
							<tr>
								<th>No</th>
								<th>Employee ID</th>
								<th>Employee Name</th>
								<th>Date</th>
								<th>Clock In</th>
								<th>Clock Out</th>
								<th>Notes</th>
								<th>Status</th>
							</tr>
						</thead>
						<tbody>
							@foreach($data as $key=>$value)
							<tr>
								<td>{{ $key+1 }}</td>
								<td>{{ $value->employee_no }}</td>
								<td>{{ $value->first_name }} {{ $value->last_name }}</td>
								<td>{{date("d F Y",strtotime($value->created_at)) }}</td>
								<td>{{date("H:i",strtotime($value->clock_in)) }}</td>
								<td>
									@if(!empty($value->clock_out))
									{{date("H:i",strtotime($value->clock_out)) }}
									@endif
								</td>
								<td>{{ $value->notes }}</td>
								<td>
									@if(($value->status_id) == 'f4f23f41-0588-4111-a881-a043cf355831')
									<span class="badge badge-danger">{{ $value->Statuses->name }}</span>
									@else
									<span class="badge badge-success">{{ $value->Statuses->name }}</span>
									@endif
								</td>
							</tr>
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection
@section('footer.scripts')
<script src="{{ asset('bower_components/admin-lte/plugins/datatables/jquery.dataTables.js') }}"></script>
<script src="{{ asset('bower_components/admin-lte/plugins/datatables-bs4/js/dataTables.bootstrap4.js') }}"></script>
<script src="{{ asset('bower_components/admin-lte/plugins/moment/moment.min.js') }}"></script>
<script src="{{ asset('bower_components/admin-lte/plugins/daterangepicker/daterangepicker.js') }}"></script>
<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": true,
    });
    $('#reservation').daterangepicker()
  });
</script>
@endsection