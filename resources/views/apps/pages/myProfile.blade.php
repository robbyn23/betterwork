@extends('apps.layouts.main')
@section('header.title')
Better Work Indonesia | Update My Profile Data
@endsection
@section('content')
<section class="content-header">
	<div class="container-fluid">
      	<div class="row mb-2">
       		<div class="col-sm-6">
          		<h1>Update My Profile Data</h1>
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
					<div class="col-md-6"> 
					{!! Form::model($data, ['method' => 'POST','route' => ['employee.update', $data->id],'files'=> 'true']) !!}
                  	@csrf
		            <div class="form-group">
			    		<label for="firstName">First Name</label>
			    		{!! Form::text('first_name', null, array('placeholder' => 'First Name','class' => 'form-control','readonly')) !!}
			    	</div>
			    	<div class="form-group">
			    		<label for="lastName">Last Name</label>
			    		{!! Form::text('last_name', null, array('placeholder' => 'Last Name','class' => 'form-control','readonly')) !!}
			    	</div>
			    	<div class="form-group">
			    		<label for="placeOb">Place Of Birth</label>
			    		{!! Form::text('place_of_birth', null, array('placeholder' => 'Last Name','class' => 'form-control')) !!}
			    	</div>
			    	<div class="form-group">
			    		<label for="dateOb">Date Of Birth</label>
			    		{!! Form::date('date_of_birth', old('date_of_birth'), array('id' => 'datepicker','class' => 'form-control')) !!}
			    	</div>
			    	<div class="form-group">
			    		<label for="idCard">ID Card (KTP)</label>
			    		{!! Form::text('id_card', null, array('placeholder' => 'ID Card (KTP)','class' => 'form-control')) !!}
			    	</div>
			    	<div class="form-group">
			    		<label for="sex">Tax Category</label>
			    		<select name="tax_category" class="form-control">
                    		<option value="0" {{ old('tax_category',$data->tax_category)=='0' ? 'selected' : ''  }}>Please Select</option>
					        <option value="1" {{ old('tax_category',$data->tax_category)=='1' ? 'selected' : ''  }}>S0</option>
					        <option value="2" {{ old('tax_category',$data->tax_category)=='2' ? 'selected' : ''  }}>S1</option>
					        <option value="3" {{ old('tax_category',$data->tax_category)=='3' ? 'selected' : ''  }}>S2</option>
					        <option value="4" {{ old('tax_category',$data->tax_category)=='4' ? 'selected' : ''  }}>S3</option>
					        <option value="5" {{ old('tax_category',$data->tax_category)=='5' ? 'selected' : ''  }}>M0</option>
					        <option value="6" {{ old('tax_category',$data->tax_category)=='6' ? 'selected' : ''  }}>M1</option>
					        <option value="7" {{ old('tax_category',$data->tax_category)=='7' ? 'selected' : ''  }}>M2</option>
					        <option value="8" {{ old('tax_category',$data->tax_category)=='8' ? 'selected' : ''  }}>M3</option>
					    </select>
			    	</div>
			    	<div class="form-group">
			    		<label for="idCard">Tax No</label>
			    		{!! Form::text('tax_no', null, array('placeholder' => 'Tax No','class' => 'form-control')) !!}
			    	</div>
			    	<div class="form-group">
			    		<label for="sex">Gender</label>
			    		<select name="sex" class="form-control">
                			<option value="0" {{ old('sex',$data->sex)=='0' ? 'selected' : ''  }}>Please Select</option>
				            <option value="1" {{ old('sex',$data->sex)=='1' ? 'selected' : ''  }}>Male</option>
				            <option value="2" {{ old('sex',$data->sex)=='2' ? 'selected' : ''  }}>Female</option>
				        </select>
			    	</div>
			    	<div class="form-group">
			    		<label for="maritalStatus">Marital Status</label>
			    		<select name="marital_status" class="form-control">
                			<option value="0" {{ old('sex',$data->marital_status)=='0' ? 'selected' : ''  }}>Please Select</option>
				            <option value="1" {{ old('sex',$data->marital_status)=='1' ? 'selected' : ''  }}>Single</option>
				            <option value="2" {{ old('sex',$data->marital_status)=='2' ? 'selected' : ''  }}>Married</option>
				            <option value="3" {{ old('sex',$data->marital_status)=='3' ? 'selected' : ''  }}>Divorce</option>
				            <option value="4" {{ old('sex',$data->marital_status)=='4' ? 'selected' : ''  }}>Widower</option>
				        </select>
			    	</div>
			    </div>
			    <div class="col-md-6">
			    	<div class="form-group">
			    		<label for="address">Address</label>
			    		{!! Form::textarea('address', null, array('id' => 'address','class' => 'form-control')) !!}
			    	</div>
			    	<div class="form-group">
			    		<label for="phone">Phone Number</label>
			    		{!! Form::text('phone', null, array('placeholder' => 'Phone Number','class' => 'form-control')) !!}
			    	</div>
			    	<div class="form-group">
			    		<label for="mobile">Mobile Number</label>
			    		{!! Form::text('mobile', null, array('placeholder' => 'Mobile Number','class' => 'form-control')) !!}
			    	</div>
			    	<div class="form-group">
			    		<label for="inputName">Email</label>
			    		{!! Form::text('email', null, array('placeholder' => 'Email','class' => 'form-control','readonly')) !!}
			    	</div>
			    	<div class="form-group">
			    		<label for="inputName">Photo</label>
			    		<div class="input-group">
						   	<div class="custom-file">
	               				<input type="file" class="custom-file-input" id="picture" name="picture">
	               				<label class="custom-file-label" for="picture">Choose Photo</label>
	            			</div>
	            		</div>
			    	</div>
			    	<div class="form-group">
			    		<button name="profile" type="submit" class="btn btn-sm btn-success">Save changes</button>
	            		<a button type="button" class="btn btn-sm btn-danger" href="{{ route('userHome.index') }}">Cancel</a>
	            	</div>
	            	{!! Form::close() !!}
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