@extends('apps.layouts.main')
@section('header.title')
Better Work Indonesia | Home
@endsection
@section('content')
<section class="content-header">
	<div class="container-fluid">
      	<div class="row mb-2">
       		<div class="col-sm-6">
          		<h1>User Profile</h1>
       		</div>
       	</div>
    </div>
</section>
<section class="content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-3">
				<div class="card card-primary card-outline">
					<div class="card-body box-profile">
						<div class="text-center">
                  			<img class="profile-user-img img-fluid img-circle"
                       			src="http://betterwork.iteos.tech/public/employees/{{$getEmployee->picture}}"
                       			alt="User profile picture">
                		</div>
                		<h3 class="profile-username text-center">{{{ isset(Auth::user()->name) ? Auth::user()->name : Auth::user()->email }}}</h3>
                		<p class="text-muted text-center">@foreach($getEmployee->Services as $service)
                      {{$service->grade}}
                      @endforeach</p>
                		<ul class="list-group list-group-unbordered mb-3">
                  			<li class="list-group-item">
                    			<b>Days In Company</b> <a class="float-right">{{$totalDays}}</a>
                  			</li>
                  			<li class="list-group-item">
                    			<b>This Year Leave (Days)</b> <a class="float-right">{{$getEmployee->leave_amount}}</a>
                  			</li>
                  			<li class="list-group-item">
                    			<b>This Year Leave Taken (Days)</b> <a class="float-right">{{$getRemaining->leave_usage}}</a>
                  			</li>
                		</ul>
                	</div>
                </div>
                <div class="card card-danger">
                	<div class="card-header">
                		<h3 class="card-title">Attendance</h3>
              		</div>
              		<div class="card-body">
              			<div class="row">
	              			<div class="col-md-4">
                        @if(($getAttendance) == null)
                        {!! Form::open(['method' => 'POST','route' => ['attendanceIn.store']]) !!}
                        {!! Form::button('<img src="https://img.icons8.com/flat_round/64/000000/youtube-play.png">',['type'=>'submit','class' => 'btn']) !!}
                        {!! Form::close() !!}
                        @endif
                        @if(($getAttendance) != null)
                        @if(($getAttendance->status_id) != 'f4f23f41-0588-4111-a881-a043cf355831')
                        {!! Form::open(['method' => 'POST','route' => ['attendanceIn.store']]) !!}
                        {!! Form::button('<img src="https://img.icons8.com/flat_round/64/000000/youtube-play.png">',['type'=>'submit','class' => 'btn']) !!}
                        {!! Form::close() !!} 
	              				@else
                        <a class="btn" data-toggle="modal" data-target="#modal-lg"><img src="https://img.icons8.com/dotty/80/000000/home-button.png">Clock Out</a>
                        @endif
                        @endif
                        <div class="modal fade" id="modal-lg">
                          <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h4 class="modal-title">Attendance Out Note</h4>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                              </div>
                              <div class="modal-body">
                                {!! Form::open(array('route' => 'attendanceOut.store','method'=>'POST', 'class' => 'form-horizontal')) !!}
                                @csrf
                                <div class="form-group row">
                                  <label for="inputEmail" class="col-sm-2 col-form-label">Note</label>
                                  <div class="col-sm-10">
                                    {!! Form::textarea('notes', null, array('placeholder' => 'Attendance Note','class' => 'form-control')) !!}
                                  </div>
                                  {!! Form::hidden('employee_id', $getEmployee->id, array('placeholder' => 'Attendance Note','class' => 'form-control')) !!}
                                </div>
                              </div>
                              <div class="modal-footer justify-content-between">
                                <button type="close" class="btn btn-default" data-dismiss="modal">Close</button>
                                <button id="register" type="submit" class="btn btn-primary">Clock Out</button>
                              </div>
                              {!! Form::close() !!}
                            </div>
                          </div>
                        </div>
	              			</div>
	              			<div class="col-md-8">
                        @isset($getAttendance)
                        @foreach($getAttendance->Activity as $act)
	              				<p> In : @if(!empty($act->clock_in)){{date("d F Y H:i",strtotime($act->clock_in)) }}@endif</p>
	              				<p> Out : @if(!empty($act->clock_out)){{date("d F Y H:i",strtotime($act->clock_out)) }}@endif</p>
                        @endforeach
                        @if(!empty($getAttendance->working_hour))<p> Worked For <span class="badge badge-danger">{{$getAttendance->working_hour}}</span> Hour Today</p>@endif
                        @endisset
	              			</div>
	              		</div>
                    
              		</div>
              	</div>
            </div>
            <div class="col-md-9">
            	<div class="card">
            		<div class="card-header p-2">
                		<ul class="nav nav-pills">
                  			<li class="nav-item"><a class="nav-link active" href="#overview" data-toggle="tab">Overview</a></li>
                        <li class="nav-item"><a class="nav-link" href="#organization" data-toggle="tab">Organization</a></li>
                        <li class="nav-item"><a class="nav-link" href="#family" data-toggle="tab">Family</a></li>
                  			<li class="nav-item"><a class="nav-link" href="#salary" data-toggle="tab">Salary Slips</a></li>
                        <li class="nav-item"><a class="nav-link" href="#historical" data-toggle="tab">Service History</a></li>
                  			<li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">Change Password</a></li>
                		</ul>
              		</div>
              		<div class="card-body">
              			<div class="tab-content">
              				<div class="active tab-pane" id="overview">
                        <strong><i class="fas fa-calendar-check mr-1"></i> Birthday</strong>
                        <p class="text-muted">
                            {{date("d F Y",strtotime($getEmployee->date_of_birth)) }}
                        </p>
              					<strong><i class="fas fa-book mr-1"></i> Education</strong>
              					<p class="text-muted">
                  					@foreach($getEmployee->Educations as $education)
                              {{$education->grade}} in {{$education->major}} from {{$education->institution_name}}
                            @endforeach
                				</p>
                				<hr>
                				<strong><i class="fas fa-map-marker-alt mr-1"></i> Home Address</strong>
                				<p class="text-muted">{{ $getEmployee->address }}</p>
                				<hr>
                				<strong><i class="fas fa-pencil-alt mr-1"></i> Training & Certification</strong>
                				<p class="text-muted">
                          @foreach($getEmployee->Trainings as $training)
                  					<span class="tag tag-danger">{{$training->training_title}}</span>
                  				@endforeach
                				</p>
                				<hr>
                        <strong><i class="fas fa-pencil-alt mr-1"></i> Contract Download</strong>
              				</div>
                      <div class="tab-pane" id="organization">
                        <strong><i class="fas fa-id-badge mr-1"></i> Employee ID</strong>
                        <p class="text-muted">
                            {{ $getEmployee->employee_no }}
                        </p>
                        <strong><i class="fas fa-calendar-check mr-1"></i> Join Date</strong>
                        <p class="text-muted">
                            {{date("d F Y",strtotime($getServices->from)) }}
                        </p>
                        <strong><i class="fas fa-file-signature mr-1"></i> Employment Type</strong>
                        <p class="text-muted">
                            {{ $getEmployee->Contracts->name }}
                        </p>
                        <strong><i class="fas fa-clipboard-check mr-1"></i> Current Position</strong>
                        <p class="text-muted">
                            {{ $getServices->grade}}
                        </p>
                        <strong><i class="fas fa-user-tie mr-1"></i> Direct Supervisor</strong>
                        <p class="text-muted">
                          @isset($getServices->report_to)
                          {{ $getServices->Reporting->first_name}} {{ $getServices->Reporting->last_name}}
                          @endisset
                        </p>
                        <strong><i class="fas fa-user-friends mr-1"></i> Direct Subordinate</strong>
                        <table class="table table-bordered">
                          <thead>
                            <tr>
                              <th style="width: 10px">#</th>
                              <th>Avatar</th>
                              <th>Name</th>
                              <th>Position</th>
                            </tr>
                          </thead>
                          <tbody>
                            @foreach($getSubordinate as $key=>$value)
                            <tr>
                              <td>{{ $key+1 }}</td>
                              <td><img src="http://betterwork.iteos.tech/public/employees/{{ $value->Parent->picture }}" class="img-circle elevation-2" alt="User Image" style="width: 50px; height: 
50px;"></td>
                              <td>{{ $value->Parent->first_name}} {{ $value->Parent->last_name}}</td>
                              <td>{{ $value->grade }}</td>
                            </tr>
                            @endforeach
                          </tbody>
                        </table>
                      </div>
                      <div class="tab-pane" id="family">
                        <table class="table table-bordered">
                          <thead>
                            <tr>
                              <th style="width: 10px">#</th>
                              <th>Name</th>
                              <th>Relation</th>
                              <th>Address</th>
                              <th>Phone</th>
                              <th>Mobile</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
              				<div class="tab-pane" id="salary">
              					<table class="table table-bordered">
              						<thead>
              							<tr>
              								<th style="width: 10px">#</th>
              								<th>Period</th>
              								<th>Slip</th>
              							</tr>
              						</thead>
              						<tbody>
              							<tr>
              								<td>1</td>
              								<td>December 2019</td>
              								<td>
                                <button type="button" class="btn btn-block bg-gradient-primary btn-sm">Download</button>
                              </td>
              							</tr>
                            <tr>
                              <td>2</td>
                              <td>November 2019</td>
                              <td>
                                <button type="button" class="btn btn-block bg-gradient-primary btn-sm">Download</button>
                              </td>
                            </tr>
              						</tbody>
              					</table>
              				</div>
                      <div class="tab-pane" id="historical">
                        <table class="table table-bordered">
                          <thead>
                            <tr>
                              <th>Position</th>
                              <th>Department</th>
                              <th>From</th>
                              <th>To</th>
                              <th>Supervisor</th>
                            </tr>
                          </thead>
                          <tbody>
                            @foreach($getEmployee->Services as $service)
                            <tr>
                              <td>{{$service->grade}}</td>
                              <td></td>
                              <td>{{date("d F Y",strtotime($service->from)) }}</td>
                              <td></td>
                              <td></td>
                            </tr>
                            @endforeach
                          </tbody>
                        </table>
                      </div>
              				<div class="tab-pane" id="settings">
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
              					{!! Form::open(array('route' => 'userPassword.update','method'=>'POST', 'class' => 'form-horizontal')) !!}
                        @csrf
              					<div class="form-group row">
                          <label for="inputEmail" class="col-sm-2 col-form-label">New Password</label>
                        		<div class="col-sm-10">
                            	{!! Form::password('password', array('placeholder' => 'Password','class' => 'form-control')) !!}
                        		</div>
                      	</div>
                      	<div class="form-group row">
                        	<label for="inputEmail" class="col-sm-2 col-form-label">Confirm New Password</label>
                        		<div class="col-sm-10">
                        			{!! Form::password('confirm-password', array('placeholder' => 'Confirm Password','class' => 'form-control')) !!}
                        		</div>
                      	</div>
                      	<div class="form-group row">
                        	<div class="offset-sm-2 col-sm-10">
                        		<button type="submit" class="btn btn-danger">Submit</button>
                        	</div>
                      	</div>
                      			</form>
                      		</div>
                        {!! Form::close() !!}
              			</div>
              		</div>
              	</div>
				<div class="row">
					<div class="col-md-6">
						<div class="card card-info">
							<div class="card-header">
								<h3 class="card-title">Bulletin Board</h3>
							</div>
							<div class="card-body">
								<div class="card-body table-responsive p-0" style="height: 300px;">
									<table class="table table-head-fixed text-nowrap">
										<thead>
											<tr>
												<th style="width: 10px;">No</th>
												<th>Title</th>
												<th style="width: 10px;"></th>
											</tr>
										</thead>
										<tbody>
											@foreach($getBulletin as $key=>$bulletin)
											<tr>
												<td style="width: 10px;">{{$key+1}}</td>
												<td><strong>{{$bulletin->title}}</strong></td>
												<td style="width: 10px;">
													<a class="btn btn-xs btn-success" href="" title="Read Article" ><i class="fa fa-search"></i></a>
												</td>
											</tr>
											@endforeach
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="card card-success">
							<div class="card-header">
								<h3 class="card-title">Knowledge Base</h3>
							</div>
							<div class="card-body">
							</div>
						</div>
					</div>
				</div>
            </div>
        </div>
    </div>
</section>
@endsection
