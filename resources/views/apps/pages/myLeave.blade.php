@extends('apps.layouts.main')
@section('header.title')
Better Work Indonesia | My Leave Request
@endsection
@section('header.plugins')
<link rel="stylesheet" href="{{ asset('public/bower_components/admin-lte/plugins/datatables-bs4/css/dataTables.bootstrap4.css') }}">
<link rel="stylesheet" href="{{ asset('public/bower_components/admin-lte/plugins/daterangepicker/daterangepicker.css') }}">
@endsection
@section('content')
<section class="content-header">
	<div class="container-fluid">
      	<div class="row mb-2">
       		<div class="col-sm-6">
          		<h1>My Leave Request</h1>
       		</div>
       	</div>
    </div>
</section>
<section class="content">
	<div class="row">
		<div class="col-12">
			<div class="card">
				<div class="card-header"> 
       		<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-lg">
         		Add New
         	</button>
         	<div class="modal fade" id="modal-lg">
  	        <div class="modal-dialog modal-lg">
	          	<div class="modal-content">
	            	<div class="modal-header">
	             		<h4 class="modal-title">New Request</h4>
	              		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
	                		<span aria-hidden="true">&times;</span>
                		</button>
	            	</div>
	            	<div class="modal-body">
                  {!! Form::open(array('route' => 'myLeave.store','method'=>'POST', 'class' => 'form-horizontal')) !!}
                  @csrf
             	  	<label for="inputEmail" class="col-sm-12 col-form-label">Request Type</label>
           				  <div class="col-sm-12">
           					  {!! Form::select('request_type', [null=>'Please Select'] + $types,[], array('class' => 'form-control')) !!}
           				  </div>
                  <label for="inputEmail" class="col-sm-12 col-form-label">Request Period</label>
                    <div class="col-sm-12">
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text">
                            <i class="far fa-calendar-alt"></i>
                          </span>
                        </div>
                        <input type="text" name="request_period" class="form-control float-right" id="reservationtime">
                      </div>
                    </div>
                  <label for="inputEmail" class="col-sm-12 col-form-label">Note</label>
                    <div class="col-sm-12">
                      {!! Form::textarea('notes', null, array('placeholder' => 'Position Name','class' => 'form-control')) !!}
                    </div>
                    {!! Form::hidden('employee_id', $getEmployee->id, array('class' => 'form-control')) !!}
            	  </div>
            	  <div class="modal-footer justify-content-between">
             		  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
             		  <button id="register" type="submit" class="btn btn-primary">Save changes</button>
            	  </div>
                {!! Form::close() !!}
          	  </div>
            </div>
		      </div>
        </div>
        <div class="card-body">
        @if (count($errors) > 0) 
          <div class="alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <h5><i class="icon fas fa-ban"></i> Alert!</h5>
            <ul>
              @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
              @endforeach
            </ul>
          </div>
        @endif
        <table id="example1" class="table table-bordered table-hover">
          <thead>
          	<tr>
          		<th>No</th>
          		<th>Leave Start</th>
              <th>Leave End</th>
              <th>Status</th>
              <th>Created At</th>
          		<th>Updated At</th>
          	</tr>
          </thead>
          <tbody>
            @foreach($data as $key=>$value)
          	<tr>
          		<td>{{ $key+1 }}</td>
          		<td>{{date("d F Y H:i",strtotime($value->leave_start)) }}</td>
              <td>{{date("d F Y H:i",strtotime($value->leave_end)) }}</td>
            	<td>{{ $value->Statuses->name }}</td>
            	<td>{{date("d F Y H:i",strtotime($value->created_at)) }}</td>
              <td>{{date("d F Y H:i",strtotime($value->updated_at)) }}</td>
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
<script src="{{ asset('public/bower_components/admin-lte/plugins/datatables/jquery.dataTables.js') }}"></script>
<script src="{{ asset('public/bower_components/admin-lte/plugins/datatables-bs4/js/dataTables.bootstrap4.js') }}"></script>
<script src="{{ asset('public/bower_components/admin-lte/plugins/moment/moment.min.js') }}"></script>
<script src="{{ asset('public/bower_components/admin-lte/plugins/daterangepicker/daterangepicker.js') }}"></script>
<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
    });
  });
  $('#reservationtime').daterangepicker({
      timePicker: true,
      timePickerIncrement: 1,
      locale: {
        format: 'MM/DD/YYYY HH:mm'
      }
    })
</script>
<script>
    function ConfirmDelete()
    {
    var x = confirm("Data Delete?");
    if (x)
        return true;
    else
        return false;
    }
</script>
@endsection