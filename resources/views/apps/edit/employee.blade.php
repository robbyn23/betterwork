@extends('apps.layouts.main')
@section('header.title')
Better Work Indonesia | Update Employee
@endsection
@section('header.plugins')
<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
@endsection
@section('content')
<section class="content-header">
	<div class="container-fluid">
      	<div class="row mb-2">
       		<div class="col-sm-6">
          		<h1>Update Employee</h1>
       		</div>
			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
					<li class="breadcrumb-item"><a href="{{ route('employee.index') }}">Employee</a></li>
					<li class="breadcrumb-item active">Edit Employee</li>
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
		<div class="card card-success card-outline">
			<div class="card-body">
				<div class="row">
					<div class="col-2 col-sm-2">
		                <div class="nav flex-column nav-tabs h-100" id="vert-tabs-tab" role="tablist" aria-orientation="vertical">
		                	<a class="nav-link active" id="vert-tabs-profile-tab" data-toggle="pill" href="#vert-tabs-profile" role="tab" aria-controls="vert-tabs-profile" aria-selected="true"><strong>Profile</strong></a>
		                	<a class="nav-link" id="vert-tabs-family-tab" data-toggle="pill" href="#vert-tabs-family" role="tab" aria-controls="vert-tabs-family" aria-selected="false"><strong>Family</strong></a>
		                	<a class="nav-link" id="vert-tabs-education-tab" data-toggle="pill" href="#vert-tabs-education" role="tab" aria-controls="vert-tabs-education" aria-selected="false"><strong>Education</strong></a>
		                	<a class="nav-link" id="vert-tabs-training-tab" data-toggle="pill" href="#vert-tabs-training" role="tab" aria-controls="vert-tabs-training" aria-selected="false"><strong>Training</strong></a>
		                	<a class="nav-link" id="vert-tabs-services-tab" data-toggle="pill" href="#vert-tabs-services" role="tab" aria-controls="vert-tabs-services" aria-selected="false"><strong>Services</strong></a>
		                </div>
		            </div>
		            <div class="col-10 col-sm-10">
		            	<div class="tab-content" id="vert-tabs-tabContent">
		            		<div class="tab-pane text-left fade show active" id="vert-tabs-profile" id="profile" role="tabpanel" aria-labelledby="vert-tabs-profile-tab">
		            			{!! Form::model($data, ['method' => 'POST','route' => ['employee.update', $data->id],'files'=> 'true']) !!}
                  				@csrf
                  				<div class="form-group">
			    					<label for="employeeID">Employee ID</label>
			    					{!! Form::text('employee_no', null, array('placeholder' => 'Employee ID','class' => 'form-control')) !!}
			    				</div>
			    				<div class="form-group">
			    					<label for="sex">Employee Status</label>
			    					<select name="contract_status" class="form-control">
                          				<option value="0" {{ old('contract_status',$data->contract_status)=='0' ? 'selected' : ''  }}>Please Select</option>
						                <option value="c0bfb25c-b965-4972-95fd-ed5803318d93" {{ old('contract_status',$data->contract_status)=='c0bfb25c-b965-4972-95fd-ed5803318d93' ? 'selected' : ''  }}>Contract</option>
						                <option value="2e9731fd-6544-44a1-b832-aab293e8804a" {{ old('contract_status',$data->contract_status)=='2e9731fd-6544-44a1-b832-aab293e8804a' ? 'selected' : ''  }}>Permanent</option>
						                <option value="1f698ac5-9340-4223-a870-a79e6562fb5b" {{ old('contract_status',$data->contract_status)=='1f698ac5-9340-4223-a870-a79e6562fb5b' ? 'selected' : ''  }}>Resign</option>
						            </select>
			    				</div>
			    				<div class="form-group">
			    					<label>Leave Amount</label>
			    					{!! Form::number('leave_amount', null, array('placeholder' => 'Leave','class' => 'form-control')) !!}
			    				</div>
			    				<div class="form-group">
			    					<label for="firstName">First Name</label>
			    					{!! Form::text('first_name', null, array('placeholder' => 'First Name','class' => 'form-control')) !!}
			    				</div>
			    				<div class="form-group">
			    					<label for="lastName">Last Name</label>
			    					{!! Form::text('last_name', null, array('placeholder' => 'Last Name','class' => 'form-control')) !!}
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
			    					<label for="sex">Sex</label>
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
			    					<button name="profile" type="submit" class="btn btn-sm btn-success">Update</button>
	                  				<a button type="button" class="btn btn-sm btn-danger" href="{{ route('employee.index') }}">Cancel</a>
	                  			</div>
	                  			{!! Form::close() !!}
			    			</div>
			    			<div class="tab-pane fade" id="vert-tabs-family" role="tabpanel" aria-labelledby="vert-tabs-family-tab">
			    				<div class="row">
			    					<button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#family">
         								Add Data
         							</button>
         							<div class="modal fade" id="family">
         								<div class="modal-dialog modal-lg">
         									<div class="modal-content">
         										{!! Form::open(array('route' => 'employeeFamily.store','method'=>'POST', 'class' => 'form-horizontal')) !!}
                  								@csrf
                  								{!! Form::hidden('employee_id',$data->id) !!}
         										<div class="modal-header">
								             		<h4 class="modal-title">New Data</h4>
								              		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								                		<span aria-hidden="true">&times;</span>
								              		</button>
								            	</div>
								            	<div class="modal-body">
                  									<input type="hidden" name="family" value="">
								            		<div class="form-group row">
								                      	<label for="inputEmail" class="col-sm-2 col-form-label">First Name</label>
								                        <div class="col-sm-10">
								                          	<input type="text" name="first_name" placeholder="First Name" class="form-control">
								                        </div>
								                    </div>
								                    <div class="form-group row">
								                      	<label for="inputEmail" class="col-sm-2 col-form-label">Last Name</label>
								                        <div class="col-sm-10">
								                          	<input type="text" name="last_name" placeholder="Last Name" class="form-control">
								                        </div>
								                    </div>
								                    <div class="form-group row">
								                      	<label for="inputEmail" class="col-sm-2 col-form-label">Relations</label>
								                        <div class="col-sm-10">
								                          	<select name="relations" class="form-control">
						                          				<option value="0">Please Select</option>
												                <option value="1">Husband</option>
												                <option value="2">Wife</option>
												                <option value="3">Parent</option>
												                <option value="4">Sibling</option>
												            </select>
								                        </div>
								                    </div>
								                    <div class="form-group row">
								                      	<label for="inputEmail" class="col-sm-2 col-form-label">Address</label>
								                        <div class="col-sm-10">
								                          	{!! Form::textarea('address', null, array('placeholder' => 'Address','class' => 'form-control')) !!}
								                        </div>
								                    </div>
								                    <div class="form-group row">
								                      	<label for="inputEmail" class="col-sm-2 col-form-label">Phone</label>
								                        <div class="col-sm-10">
								                          	<input type="text" name="phone" placeholder="Phone" class="form-control">
								                        </div>
								                    </div>
								                    <div class="form-group row">
								                      	<label for="inputEmail" class="col-sm-2 col-form-label">Mobile</label>
								                        <div class="col-sm-10">
								                          	<input type="text" name="mobile" placeholder="Mobile" class="form-control">
								                        </div>
								                    </div>
								                </div>
								                <div class="modal-footer">
								              		<button type="close" class="btn btn-sm btn-danger" data-dismiss="modal">Close</button>
								              		<button name="family" type="submit" class="btn btn-sm btn-success">Submit</button>
								            	</div>
								            	{!! Form::close() !!}
								            </div>
								        </div>
								    </div>
         						</div>
         						<br>
         						<div class="row">
				            		<table id="family" class="table table-bordered table-hover">
				            			<thead>
					            			<tr>
					            				<th>First Name</th>
					            				<th>Last Name</th>
					            				<th>Relationship</th>
					            				<th>Address</th>
					            				<th>Phone</th>
					            				<th>Mobile</th>
					            				<th></th>
					            			</tr>
					            		</thead>
					            		<tbody>
					            			@foreach($data->Child as $child)
					            			<tr>
					            				<td>{{ $child->first_name}}</td>
					            				<td>{{ $child->last_name}}</td>
					            				<td>
					            					@if(($child->relations) == '1')
					            					Husband
					            					@elseif(($child->relations) == '2')
					            					Wife
					            					@elseif(($child->relations) == '3')
					            					Parent
					            					@elseif(($child->relations) == '4')
					            					Sibling
					            					@else
					            					No Relation
					            					@endif
					            				</td>
					            				<td>{{ $child->address}}</td>
					            				<td>{{ $child->phone}}</td>
					            				<td>{{ $child->mobile}}</td>
					            				<td>
					            					<a class="btn btn-xs btn-success modalLg" href="#" title="Edit Data" value="{{ action('Apps\HumanResourcesController@familyEdit',['id'=>$child->id]) }}" data-toggle="modal" data-target="#modalLg"><i class="fa fa-edit"></i></a>
					            				</td>
					            			</tr>
					            			@endforeach
					            		</tbody>
					            	</table>
					            </div>
				            </div>
				            <div class="tab-pane fade" id="vert-tabs-education" role="tabpanel" aria-labelledby="vert-tabs-education-tab">
				            	<div class="row">
			    					<button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#education">
         								Add Data
         							</button>
         							<div class="modal fade" id="education">
         								<div class="modal-dialog modal-lg">
         									<div class="modal-content">
         										{!! Form::open(array('route' => 'employeeEducation.store','method'=>'POST', 'class' => 'form-horizontal')) !!}
                  								@csrf
                  								{!! Form::hidden('employee_id',$data->id) !!}
         										<div class="modal-header">
								             		<h4 class="modal-title">New Data</h4>
								              		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								                		<span aria-hidden="true">&times;</span>
								              		</button>
								            	</div>
								            	<div class="modal-body">
													<div class="form-group row">
								                      	<label for="inputEmail" class="col-sm-2 col-form-label">Insitution Name</label>
								                        <div class="col-sm-10">
								                          	<input type="text" name="institution_name" placeholder="Insitution Name" class="form-control">
								                        </div>
								                    </div>
													<div class="form-group row">
								                      	<label for="inputEmail" class="col-sm-2 col-form-label">Graduate On</label>
								                        <div class="col-sm-10">
								                          	{!! Form::date('date_of_graduate', '', array('id' => 'datepicker','class' => 'form-control')) !!}
								                        </div>
								                    </div>
								                    <div class="form-group row">
								                      	<label for="inputEmail" class="col-sm-2 col-form-label">Degree</label>
								                        <div class="col-sm-10"> 
								                        	{!! Form::select('degree', [null=>'Please Select'] + $degrees,[], array('class' => 'form-control')) !!}
								                        </div>
								                    </div>
								                    <div class="form-group row">
								                      	<label for="inputEmail" class="col-sm-2 col-form-label">Major</label>
								                        <div class="col-sm-10">
								                        	<input type="text" name="major" placeholder="Major" class="form-control">
								                        </div>
								                    </div>
								                    <div class="form-group row">
								                      	<label for="inputEmail" class="col-sm-2 col-form-label">GPA</label>
								                        <div class="col-sm-10">
								                        	<input type="text" name="gpa" placeholder="GPA" class="form-control">
								                        </div>
								                    </div>
								                </div>
								                <div class="modal-footer">
								              		<button type="close" class="btn btn-sm btn-danger" data-dismiss="modal">Close</button>
								              		<button name="family" type="submit" class="btn btn-sm btn-success">Submit</button>
								            	</div>
								            	{!! Form::close() !!}
								            </div>
								        </div>
								    </div>
         						</div>
         						<br>
         						<div class="row">
				            		<table id="education" class="table table-bordered table-hover">
				            			<thead>
					            			<tr>
					            				<th>Insitution</th>
					            				<th>Grade</th>
					            				<th>Major</th>
					            				<th>GPA</th>
												<th>Graduate On</th>
					            				<th></th>
					            			</tr>
					            		</thead>
					            		<tbody>
					            			@foreach($data->Educations as $value)
					            			<tr>
					            				<td>{{ $value->institution_name }}</td>
					            				<td>{{ $value->degree }}</td>
					            				<td>{{ $value->major }}</td>
					            				<td>{{ $value->gpa }}</td>
												<td>
													@if(!empty($value->date_of_graduate))
													{{date("d F Y",strtotime($value->date_of_graduate)) }}
													@endif
												</td>
					            				<td>
					            					<a class="btn btn-xs btn-success modalLg" href="#" title="Edit Data" value="{{ action('Apps\HumanResourcesController@educationEdit',['id'=>$value->id]) }}" data-toggle="modal" data-target="#modalLg"><i class="fa fa-edit"></i></a>
					            				</td>
					            			</tr>
					            			@endforeach
					            		</tbody>
					            	</table>
					            </div>
				            </div>
				            <div class="tab-pane fade" id="vert-tabs-training" role="tabpanel" aria-labelledby="vert-tabs-training-tab">
				            	<div class="row">
			    					<button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#training">
         								Add Training
         							</button>
         							<div class="modal fade" id="training">
         								<div class="modal-dialog modal-lg">
         									<div class="modal-content">
         										{!! Form::open(array('route' => 'employeeTraining.store','method'=>'POST', 'class' => 'form-horizontal','files'=> 'true')) !!}
         										@csrf
                  								{!! Form::hidden('employee_id',$data->id) !!}
         										<div class="modal-header">
								             		<h4 class="modal-title">New Training</h4>
								              		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								                		<span aria-hidden="true">&times;</span>
								              		</button>
								            	</div>
								            	<div class="modal-body">
								               		<div class="form-group row">
								                      	<label for="inputEmail" class="col-sm-2 col-form-label">Training Provider</label>
								                        <div class="col-sm-10">
								                        	<input type="text" name="training_provider" placeholder="Training Provider" class="form-control">
								                        </div>
								                    </div>
								                    <div class="form-group row">
								                      	<label for="inputEmail" class="col-sm-2 col-form-label">Training Title</label>
								                        <div class="col-sm-10">
								                        	<input type="text" name="training_title" placeholder="Training Title" class="form-control">
								                        </div>
								                    </div>
								                    <div class="form-group row">
								                      	<label for="inputEmail" class="col-sm-2 col-form-label">Location</label>
								                        <div class="col-sm-10">
								                        	<input type="text" name="location" placeholder="Location" class="form-control">
								                        </div>
								                    </div>
								                    <div class="form-group row">
								                      	<label for="inputEmail" class="col-sm-2 col-form-label">From</label>
								                        <div class="col-sm-10">
								                        	{!! Form::date('training_start', '', array('id' => 'training_start','class' => 'form-control')) !!}
								                        </div>
								                    </div>
								                    <div class="form-group row">
								                      	<label for="inputEmail" class="col-sm-2 col-form-label">To</label>
								                        <div class="col-sm-10">
								                        	{!! Form::date('training_end', '', array('id' => 'training_end','class' => 'form-control')) !!}
								                        </div>
								                    </div>
								                    <div class="form-group row">
								                      	<label for="inputEmail" class="col-sm-2 col-form-label">Status</label>
								                        <div class="col-sm-10">
								                        	<select name="status" class="form-control">
						                          				<option value="0">Please Select</option>
												                <option value="c64ca24c-78c6-4026-ac65-e6dc3de288ac">Proposed</option>
												                <option value="c0c2bde9-b149-489c-9e0d-a10e4d2fd661">On Going</option>
												                <option value="97904ce7-87e2-4c61-b16e-c52a3c9f8b6d">Complete</option>
												            </select>
								                        </div>
								                    </div>
								                </div>
								                <div class="modal-footer">
								              		<button type="close" class="btn btn-sm btn-danger" data-dismiss="modal">Close</button>
								              		<button name="family" type="submit" class="btn btn-sm btn-primary">Submit</button>
								            	</div>
								            	{!! Form::close() !!}
								            </div>
								        </div>
								    </div>
         						</div>
         						<br>
         						<div class="row">
				            		<table id="example2" class="table table-bordered table-hover">
				            			<thead>
					            			<tr>
					            				<th>Training Provider</th>
					            				<th>Training Title</th>
					            				<th>Location</th>
					            				<th>From</th>
					            				<th>To</th>
					            				<th>Status</th>
					            				<th>Documentation</th>
					            				<th></th>
					            			</tr>
					            		</thead>
					            		<tbody>
					            			@foreach($data->Trainings as $value)
					            			<tr>
					            				<td>{{ $value->training_provider }}</td>
					            				<td>{{ $value->training_title }}</td>
					            				<td>{{ $value->location }}</td>
					            				<td>{{date("d F Y H:i",strtotime($value->from)) }}</td>
					            				<td>{{date("d F Y H:i",strtotime($value->to)) }}</td>
					            				<td>{{ $value->Statuses->name }}</td>
					            				<td>
					            					<ul>
					            						<li>Certificate : <a href="http://betterwork.local/public/storage/{{$value->certification}}">{{$value->certification}}</a></li>
					            						<li><a href="">Reports : <a href="http://betterwork.local/public/storage/{{$value->reports}}">{{$value->reports}}</a></li>
					            						<li><a href="">Materials : <a href="http://betterwork.local/public/storage/{{$value->materials}}">{{$value->materials}}</a></li>
					            					</ul>
					            				</td>
					            				<td>
					            					<a class="btn btn-xs btn-success modalLg" href="#" title="Edit Data" value="{{ action('Apps\HumanResourcesController@trainingEdit',['id'=>$value->id]) }}" data-toggle="modal" data-target="#modalLg"><i class="fa fa-edit"></i></a>
					            				</td>
					            			</tr>
					            			@endforeach
					            		</tbody>
					            	</table>
					            </div>
				            </div>
				            <div class="tab-pane fade" id="vert-tabs-services" role="tabpanel" aria-labelledby="vert-tabs-services-tab">
				            	<div class="row">
			    					<button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#services">
         								Add Data
         							</button>
         							<div class="modal fade" id="services">
         								<div class="modal-dialog modal-lg">
         									<div class="modal-content">
         										{!! Form::open(array('route' => 'employeeService.store','method'=>'POST', 'class' => 'form-horizontal')) !!}
                  								@csrf
                  								{!! Form::hidden('employee_id',$data->id) !!}
         										<div class="modal-header">
								             		<h4 class="modal-title">New Record</h4>
								              		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								                		<span aria-hidden="true">&times;</span>
								              		</button>
								            	</div> 
								            	<div class="modal-body">
								            		<div class="form-group row">
								                      	<label class="col-sm-2 col-form-label">Grade</label>
								                        <div class="col-sm-10">
								                          {!! Form::select('position', [null=>'Please Select'] + $grades,[], array('class' => 'form-control')) !!}
								                        </div>
								                    </div>
								                    <div class="form-group row">
								                      	<label for="inputEmail" class="col-sm-2 col-form-label">Report To</label>
								                        <div class="col-sm-10">
								                          {!! Form::select('report_to', [null=>'Please Select'] + $employees,[], array('class' => 'form-control')) !!}
								                        </div>
								                    </div>
								                    <div class="form-group row">
								                      	<label for="inputEmail" class="col-sm-2 col-form-label">Position</label>
								                        <div class="col-sm-10">
								                          {!! Form::text('job_title', null, array('placeholder' => 'Job Title','class' => 'form-control')) !!}
								                        </div>
								                    </div>
								                    <div class="form-group row">
								                      	<label for="inputEmail" class="col-sm-2 col-form-label">Division</label>
								                        <div class="col-sm-10">
								                          {!! Form::select('division_id', [null=>'Please Select'] + $divisions,[], array('class' => 'form-control')) !!}
								                        </div>
								                    </div>
													<div class="form-group row">
								                      	<label for="inputEmail" class="col-sm-2 col-form-label">Organization</label>
								                        <div class="col-sm-10">
								                          {!! Form::select('org_id', [null=>'Please Select'] + $organizations,[], array('class' => 'form-control')) !!}
								                        </div>
								                    </div>
													<div class="form-group row">
								                      	<label for="inputEmail" class="col-sm-2 col-form-label">Office</label>
								                        <div class="col-sm-10">
								                          {!! Form::select('offices', [null=>'Please Select'] + $offices,[], array('class' => 'form-control')) !!}
								                        </div>
								                    </div>
								                    <div class="form-group row">
								                      	<label for="inputEmail" class="col-sm-2 col-form-label">From</label>
								                        <div class="col-sm-10">
								                          {!! Form::date('from', null, array('id' => 'datepicker','class' => 'form-control')) !!}
								                        </div>
								                    </div>
								                    <div class="form-group row">
								                      	<label for="inputEmail" class="col-sm-2 col-form-label">To</label>
								                        <div class="col-sm-10">
								                          {!! Form::date('to', null, array('id' => 'datepicker','class' => 'form-control')) !!}
								                        </div>
								                    </div>
								                    <div class="form-group row">
								                      	<label for="inputEmail" class="col-sm-2 col-form-label">Net Salary</label>
								                        <div class="col-sm-10">
								                          {!! Form::number('salary', null, array('placeholder' => 'Salary','class' => 'form-control')) !!}
								                        </div>
								                    </div>
								                    <div class="form-group row">
								                      	<label for="inputEmail" class="col-sm-2 col-form-label">Contract</label>
								                        <div class="col-sm-10">								                       
									    					<div class="input-group">
															   	<div class="custom-file">
							                        				<input type="file" class="custom-file-input" id="contract" name="contract">
							                        				<label class="custom-file-label" for="contract">Choose Contract</label>
							                      				</div>
							                      			</div>
								                        </div>
								                    </div>
								                </div>
								                <div class="modal-footer">
								              		<button type="close" class="btn btn-sm btn-danger" data-dismiss="modal">Close</button>
								              		<button name="family" type="submit" class="btn btn-sm btn-success">Submit</button>
								            	</div>
								            	{!! Form::close() !!}
								            </div>
								        </div>
								    </div>
         						</div>
         						<br>
         						<div class="row">
				            		<table id="example2" class="table table-bordered table-hover">
				            			<thead>
					            			<tr>
					            				<th>Grade</th>
					            				<th>Report To</th>
					            				<th>Position</th>
					            				<th>Division</th>
					            				<th>From</th>
					            				<th>To</th>
					            				<th>Net Salary</th>
					            				<th>Contract</th>
					            				<th></th>
					            			</tr>
					            		</thead>
					            		<tbody>
					            			@foreach($data->Services as $value)
					            			<tr>
					            				<td>{{$value->grade}}</td>
					            				<td>
					            					@if(!empty($value->report_to))
					            					{{$value->Reporting->first_name}}
					            					@endif
					            				</td>
					            				<td>{{$value->position}}</td>
					            				<td>
					            					@if(($value->division_id) != 0)
					            					{{$value->Divisions->division_name}}
					            					@endif
					            				</td>
					            				<td>{{date("d F Y",strtotime($value->from)) }}</td>
					            				<td>
					            					@if(!empty($value->to))
					            					{{date("d F Y",strtotime($value->to)) }}
					            					@else
													Current
													@endif
					            				</td>
					            				<td>{{ number_format($value->salary,2,',','.')}}</td>
					            				<td>{{$value->contract}}</td>
					            				<td>
					            					<a class="btn btn-xs btn-success modalLg" href="#" title="Edit Data" value="{{ action('Apps\HumanResourcesController@serviceEdit',['id'=>$value->id]) }}" data-toggle="modal" data-target="#modalLg"><i class="fa fa-edit"></i></a>
					            				</td>
					            			</tr>
					            			@endforeach
					            		</tbody>
					            	</table>
					            </div>
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