@extends('apps.layouts.main')
@section('header.title')
Better Work Indonesia | Create New Employee
@endsection
@section('content')
<section class="content-header">
	<div class="container-fluid">
      	<div class="row mb-2">
       		<div class="col-sm-6">
          		<h1>Create New Employee</h1>
       		</div>
			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
					<li class="breadcrumb-item"><a href="{{ route('employee.index') }}">Employee</a></li>
					<li class="breadcrumb-item active">Create Employee</li>
				</ol>
			</div>
       	</div>
    </div>
</section>
<section class="content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
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
		    </div>
		</div>
		<div class="card card-danger card-outline">
			<div class="card-body">
				<div class="row">
					<div class="col-2 col-sm-2">
		                <div class="nav flex-column nav-tabs h-100" id="vert-tabs-tab" role="tablist" aria-orientation="vertical">
		                	<a class="nav-link active" id="vert-tabs-profile-tab" data-toggle="pill" href="#vert-tabs-profile" role="tab" aria-controls="vert-tabs-profile" aria-selected="true"><strong>Profile</strong></a>
		                </div>
		            </div>
		            <div class="col-10 col-sm-10">
		            	<div class="tab-content" id="vert-tabs-tabContent">
		            		<div class="tab-pane text-left fade show active" id="vert-tabs-profile" role="tabpanel" aria-labelledby="vert-tabs-profile-tab">
		            			{!! Form::open(array('route' => 'employee.store','method'=>'POST','files'=>'true')) !!}
                  				@csrf
		            			<div class="form-group">
			    					<label for="employeeID">Employee ID *</label>
			    					{!! Form::text('employee_no', null, array('placeholder' => 'Employee ID','class' => 'form-control')) !!}
			    				</div>
			    				<div class="form-group">
			    					<label for="maritalStatus">Employee Status *</label>
			    					<select name="contract_status" class="form-control">
                          				<option value="0">Please Select</option>
						                <option value="c0bfb25c-b965-4972-95fd-ed5803318d93">Contract</option>
						                <option value="2e9731fd-6544-44a1-b832-aab293e8804a">Permanent</option>
						            </select>
			    				</div>
			    				<div class="form-group">
			    					<label for="firstName">First Name *</label>
			    					{!! Form::text('first_name', null, array('placeholder' => 'First Name','class' => 'form-control')) !!}
			    				</div>
			    				<div class="form-group">
			    					<label for="lastName">Last Name *</label>
			    					{!! Form::text('last_name', null, array('placeholder' => 'Last Name','class' => 'form-control')) !!}
			    				</div>
			    				<div class="form-group">
			    					<label for="placeOb">Place Of Birth *</label>
			    					{!! Form::text('place_of_birth', null, array('placeholder' => 'Place of Birth','class' => 'form-control')) !!}
								</div>
			    				<div class="form-group">
			    					<label for="dateOb">Date Of Birth *</label>
			    					{!! Form::date('date_of_birth', '', array('id' => 'datepicker','class' => 'form-control')) !!}
			    				</div>
			    				<div class="form-group">
			    					<label for="idCard">ID Card *</label>
			    					{!! Form::text('id_card', null, array('placeholder' => 'ID Card (KTP)','class' => 'form-control')) !!}
			    				</div>
			    				<div class="form-group">
			    					<label for="sex">Tax Category *</label>
			    					<select name="tax_category" class="form-control">
                          				<option value="0">Please Select</option>
						                <option value="1">S0</option>
						                <option value="2">S1</option>
						                <option value="3">S2</option>
						                <option value="4">S3</option>
						                <option value="5">M0</option>
						                <option value="6">M1</option>
						                <option value="7">M2</option>
						                <option value="8">M3</option>
						            </select>
			    				</div>
			    				<div class="form-group">
			    					<label for="idCard">Tax No *</label>
			    					{!! Form::text('tax_no', null, array('placeholder' => 'Tax (NPWP)','class' => 'form-control')) !!}
			    				</div>
			    				<div class="form-group">
			    					<label for="sex">Gender *</label>
			    					<select name="sex" class="form-control">
                          				<option value="0">Please Select</option>
						                <option value="1">Male</option>
						                <option value="2">Female</option>
						            </select>
			    				</div>
			    				<div class="form-group">
			    					<label for="maritalStatus">Marital Status</label>
			    					<select name="marital_status" class="form-control">
                          				<option value="0">Please Select</option>
						                <option value="1">Single</option>
						                <option value="2">Married</option>
						                <option value="3">Divorce</option>
						                <option value="4">Widower</option>
						            </select>
			    				</div>
			    				<div class="form-group">
			    					<label for="address">Address *</label>
			    					{!! Form::textarea('address', null, array('id' => 'address','class' => 'form-control')) !!}
			    				</div>
			    				<div class="form-group">
			    					<label for="phone">Phone Number</label>
			    					{!! Form::text('phone', null, array('placeholder' => 'Phone Number','class' => 'form-control')) !!}
			    				</div>
			    				<div class="form-group">
			    					<label for="mobile">Mobile Number *</label>
			    					{!! Form::text('mobile', null, array('placeholder' => 'Mobile Number','class' => 'form-control')) !!}
			    				</div>
			    				<div class="form-group">
			    					<label for="inputName">Email *</label>
			    					{!! Form::text('email', null, array('placeholder' => 'Email','class' => 'form-control')) !!}
			    				</div>
			    				<div class="form-group">
			    					<label for="inputName">Photo *</label>
			    					<div class="input-group">
									   	<div class="custom-file">
	                        				<input type="file" class="custom-file-input" id="picture" name="picture">
	                        				<label class="custom-file-label" for="picture">Choose Photo</label>
	                      				</div>
	                      			</div>
			    				</div>
			    				<div class="form-group">
			    					<button type="submit" name="profile" class="btn btn-sm btn-info">Submit</button>
	                  				<a button type="button" class="btn btn-sm btn-danger" href="{{ route('employee.index') }}">Cancel</a>
	                  			</div>
	                  			{!! Form::close() !!}
			    			</div>
		            	</div>
		            </div>
		        </div>
		    </div>
		</div>
	</div>
</section>
@endsection
@section('footer.scripts')
<script src="{{ asset('bower_components/admin-lte/plugins/bs-custom-file-input/bs-custom-file-input.min.js') }}"></script>
<script type="text/javascript">
$(document).ready(function () {
  	bsCustomFileInput.init();
});
</script>
@endsection