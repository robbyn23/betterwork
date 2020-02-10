<aside class="main-sidebar sidebar-dark-primary elevation-4">
	<a href="index3.html" class="brand-link">
		<img src="{{ asset('public/assets/img/logo_resize.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
		<span class="brand-text font-weight-light"><img src="{{ asset('public/assets/img/logo.png') }}" style="opacity: .8"></span>
	</a>
    <div class="sidebar">
    	<div class="user-panel mt-3 pb-3 mb-3 d-flex">
	        <div class="image">
	           <img src="http://betterwork.iteos.tech/public/employees/{{Auth::user()->avatar}}" class="img-circle elevation-2" alt="User Image">
	        </div>
	        <div class="info">
	           <a href="{{ route('userHome.index') }}" class="d-block">{{{ isset(Auth::user()->name) ? Auth::user()->name : Auth::user()->email }}}</a>
	        </div>
	    </div>
	    <nav class="mt-2">
	    	<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
			@if(\Route::is(['userHome.index','myLeave.index','myReimburs.index','myGrievance.index','myGrievance.create','myGrievance.edit','myGrievance.show','myAppraisal.index','myAppraisal.create',
			'myAppraisal.detail','myDevelopment.create','myAppraisal.show','myAppraisal.edit','myTraining.index','profile.edit','myAttendance.index','myBulletin.index','myKnowledge.index','myAttendance.search']))
			<li class="nav-item {{set_open('userHome.index') }}">
	    		<a href="{{ route('userHome.index') }}" class="nav-link {{set_active('userHome.index') }}">
					<i class="nav-icon fas fa-tachometer-alt"></i>
					<p>
						User Dashboard
					</p>
				</a>
			</li>
			<li class="nav-item has-treeview {{set_open(['myLeave.index','myReimburs.index','myGrievance.index','myGrievance.create','myGrievance.edit','myGrievance.show','myAppraisal.index',
			'myAppraisal.create','myAppraisal.detail','myDevelopment.create','myAppraisal.edit','myAppraisal.show','myAppraisal.edit','myTraining.index','profile.edit']) }}">
				<a href="#" class="nav-link {{set_active(['myLeave.index','myReimburs.index','myGrievance.index','myGrievance.create','myGrievance.edit','myGrievance.show','myAppraisal.index',
				'myAppraisal.create','myAppraisal.detail','myDevelopment.create','myAppraisal.show','myAppraisal.edit','myTraining.index','profile.edit']) }}">
					<i class="nav-icon fas fa-user"></i>
					<p>
						My Menu
						<i class="right fas fa-angle-left"></i>
					</p>
				</a>
				<ul class="nav nav-treeview ">
					<li class="nav-item">
						<a href="{{ route('profile.edit') }}" class="nav-link {{set_active('profile.edit') }}">
							<i class="far fa-circle nav-icon"></i>
							<p>Update Data</p>
						</a>
					</li>
					<li class="nav-item">
						<a href="{{ route('myLeave.index') }}" class="nav-link {{set_active('myLeave.index') }}">
							<i class="far fa-circle nav-icon"></i>
							<p>Leave Request</p>
						</a>
					</li>
					<li class="nav-item">
						<a href="{{ route('myGrievance.index') }}" class="nav-link {{set_active(['myGrievance.index','myGrievance.create','myGrievance.edit','myGrievance.show']) }}">
							<i class="far fa-circle nav-icon"></i>
							<p>Grievance</p>
						</a>
					</li>
					<li class="nav-item">
						<a href="{{ route('myAppraisal.index') }}" class="nav-link {{set_active(['myAppraisal.index','myAppraisal.create','myAppraisal.detail','myDevelopment.create','myAppraisal.show','myAppraisal.edit']) }}">
							<i class="far fa-circle nav-icon"></i>
							<p>Appraisal</p>
						</a>
					</li>
					<li class="nav-item">
						<a href="{{ route('myTraining.index') }}" class="nav-link {{set_active('myTraining.index') }}">
							<i class="far fa-circle nav-icon"></i>
							<p>Training</p>
						</a>
					</li>
					<li class="nav-item">
						<a href="{{ route('myReimburs.index') }}" class="nav-link {{set_active('myReimburs.index') }}">
							<i class="far fa-circle nav-icon"></i>
							<p>Reimbursment</p>
						</a>
					</li>
				</ul>
			</li>
			<li class="nav-item has-treeview {{set_open(['myBulletin.index','myKnowledge.index','myAttendance.index','myAttendance.search']) }}">
				<a href="#" class="nav-link {{set_active(['myBulletin.index','myKnowledge.index','myAttendance.index','myAttendance.search']) }}">
					<i class="nav-icon fas fa-database"></i>
					<p>
						My Data
						<i class="right fas fa-angle-left"></i>
					</p>
				</a>
				<ul class="nav nav-treeview">
					<li class="nav-item">
						<a href="{{ route('myAttendance.index') }}" class="nav-link {{set_active(['myAttendance.index','myAttendance.search']) }}">
							<i class="far fa-circle nav-icon"></i>
							<p>My Attendance</p>
						</a>
					</li>
					<li class="nav-item">
						<a href="{{ route('myBulletin.index') }}" class="nav-link {{set_active('myBulletin.index') }}">
							<i class="far fa-circle nav-icon"></i>
							<p>Bulletin</p>
						</a>
					</li>
					<li class="nav-item">
						<a href="{{ route('myKnowledge.index') }}" class="nav-link {{set_active('myKnowledge.index') }}">
							<i class="far fa-circle nav-icon"></i>
							<p>Knowledge Base</p>
						</a>
					</li>
					<li class="nav-item">
						<a href="{{ route('myLeave.index') }}" class="nav-link {{set_active('myLeave.index') }}">
							<i class="far fa-circle nav-icon"></i>
							<p>Published Grievance</p>
						</a>
					</li>
					<li class="nav-item">
						<a href="{{ route('myLeave.index') }}" class="nav-link {{set_active('myLeave.index') }}">
							<i class="far fa-circle nav-icon"></i>
							<p>Payroll</p>
						</a>
					</li>
				</ul>
			</li>
			@endif
			@can('Access Configuration')
			@if(\Route::is(['application.index','config.index','position.index','leaveType.index','reimbursType.index','docCat.index','grievCat.index','coaCat.index','assetCat.index','user.index','logs.index','role.index','role.create']))
			@can('Create Application Setting')
			<li class="nav-item">
				<a href="{{ route('application.index') }}" class="nav-link {{set_active('application.index') }}">
					<i class="nav-icon fas fa-cog"></i>
					<p>
						Application
					</p>
				</a>
			</li>
			@endcan
			<li class="nav-item has-treeview {{set_open(['user.index','logs.index','role.index','role.create']) }}">
				<a href="#" class="nav-link {{set_active(['user.index','logs.index','role.index','role.create']) }}">
					<i class="nav-icon fas fa-users"></i>
					<p>
						User Management
						<i class="right fas fa-angle-left"></i>
					</p>
				</a>
				<ul class="nav nav-treeview">
					@can('Create User')
					<li class="nav-item">
						<a href="{{ route('user.index') }}" class="nav-link {{set_active('user.index') }}">
							<i class="far fa-circle nav-icon"></i>
							<p>User Database</p>
						</a>
					</li>
					@endcan
					@can('Create Role')
					<li class="nav-item">
						<a href="{{ route('role.index') }}" class="nav-link {{set_active(['role.index','role.create']) }}">
							<i class="far fa-circle nav-icon"></i>
							<p>Access Roles</p>
						</a>
					</li>
					@endcan
					<li class="nav-item">
						<a href="{{ route('logs.index') }}" class="nav-link {{set_active('logs.index') }}">
							<i class="far fa-circle nav-icon"></i>
							<p>Activity Log</p>
						</a>
					</li>
				</ul>
			</li>
			@can('Create HR Master Data')
			<li class="nav-item has-treeview {{set_open(['position.index','leaveType.index','reimbursType.index','docCat.index','grievCat.index']) }}">
				<a href="#" class="nav-link {{set_active(['position.index','leaveType.index','reimbursType.index','docCat.index','grievCat.index']) }}">
					<i class="nav-icon fas fa-users"></i>
					<p>
						Human Resources
						<i class="right fas fa-angle-left"></i>
					</p>
				</a>
				<ul class="nav nav-treeview">
					<li class="nav-item">
						<a href="{{ route('position.index') }}" class="nav-link {{set_active('position.index') }}">
							<i class="far fa-circle nav-icon"></i>
							<p>Employee Position</p>
						</a>
					</li>
					<li class="nav-item">
						<a href="{{ route('leaveType.index') }}" class="nav-link {{set_active('leaveType.index') }}">
							<i class="far fa-circle nav-icon"></i>
							<p>Leave Type</p>
						</a>
					</li>
					<li class="nav-item">
						<a href="{{ route('reimbursType.index') }}" class="nav-link {{set_active('reimbursType.index') }}">
							<i class="far fa-circle nav-icon"></i>
							<p>Reimbursment Type</p>
						</a>
					</li>
					<li class="nav-item">
						<a href="{{ route('docCat.index') }}" class="nav-link {{set_active('docCat.index') }}">
							<i class="far fa-circle nav-icon"></i>
							<p>Document Category</p>
						</a>
					</li>
					<li class="nav-item">
						<a href="{{ route('grievCat.index') }}" class="nav-link {{set_active('grievCat.index') }}">
							<i class="far fa-circle nav-icon"></i>
							<p>Grievance Category</p>
						</a>
					</li>
				</ul>
			</li>
			@endcan
			@can('Create Accounting Master Data')
			<li class="nav-item has-treeview {{set_open(['coaCat.index','assetCat.index']) }}">
				<a href="#" class="nav-link {{set_active(['coaCat.index','assetCat.index']) }}">
					<i class="nav-icon fas fa-calculator"></i>
					<p>
						Accounting
						<i class="right fas fa-angle-left"></i>
					</p>
				</a>
				<ul class="nav nav-treeview">
					<li class="nav-item">
						<a href="{{ route('coaCat.index') }}" class="nav-link {{set_active('coaCat.index') }}">
							<i class="far fa-circle nav-icon"></i>
							<p>Chart of Account</p>
						</a>
					</li>
					<li class="nav-item">
						<a href="{{ route('assetCat.index') }}" class="nav-link {{set_active('assetCat.index') }}">
							<i class="far fa-circle nav-icon"></i>
							<p>Asset Category</p>
						</a>
					</li>
				</ul>
			</li>
			@endcan
			@endif
			@endcan
			@can('Access Human Resources')
			@if(\Route::is(['hr.index','employee.index','employee.create','employee.edit','attendance.index','request.index','appraisal.index','appraisal.show','salary.index','bulletin.index','knowledge.index',
			'bulletin.create','bulletin.edit','bulletin.show','knowledge.create','knowledge.edit','knowledge.show','attendance.search','employeeLeave.index','appraisal.edit','training.index','attReport.index'
			,'reimburs.index','salary.show','appraisal.close']))
			@can('Create Employee')
			<li class="nav-item {{set_open(['employee.index','employee.create','employee.edit']) }}">
				<a href="{{ route('employee.index') }}" class="nav-link {{set_active(['employee.index','employee.create','employee.edit']) }}">
					<i class="nav-icon fas fa-users-cog"></i>
					<p>
						Employee Database
					</p>
				</a>
			</li>
			@endcan
			@can('Access Employee Attendance')
			<li class="nav-item has-treeview {{set_open(['attendance.index','request.index','attendance.search','employeeLeave.index']) }}">
				<a href="#" class="nav-link {{set_active(['attendance.index','request.index','attendance.search','employeeLeave.index']) }}">
					<i class="nav-icon fas fa-user-clock"></i>
					<p>
						Attendance
						<i class="right fas fa-angle-left"></i>
					</p>
				</a>
				<ul class="nav nav-treeview">
					<li class="nav-item {{set_open(['attendance.index']) }}">
						<a href="{{ route('attendance.index') }}" class="nav-link {{set_active(['attendance.index','attendance.search']) }}">
							<i class="far fa-circle nav-icon"></i>
							<p>Employee Attendance</p>
						</a>
					</li>
					@can('Process Request')
					<li class="nav-item {{set_open(['request.index']) }}">
						<a href="{{ route('request.index') }}" class="nav-link {{set_active('request.index') }}">
							<i class="far fa-circle nav-icon"></i>
							<p>Request Approval</p>
						</a>
					</li>
					@endcan
					<li class="nav-item {{set_open(['employeeLeave.index']) }}">
						<a href="{{ route('employeeLeave.index') }}" class="nav-link {{set_active('employeeLeave.index') }}">
							<i class="far fa-circle nav-icon"></i>
							<p>Employee Leave</p>
						</a>
					</li>
				</ul>
			</li>
			@endcan
			<li class="nav-item {{set_open(['training.index']) }}">
				<a href="{{ route('training.index') }}" class="nav-link {{set_active(['training.index']) }}">
					<i class="nav-icon fas fa-certificate"></i>
					<p>
						Training
					</p>
				</a>
			</li>
			@can('Process Appraisal')
			<li class="nav-item {{set_open(['appraisal.index','appraisal.show','appraisal.edit','appraisal.close']) }}">
				<a href="{{ route('appraisal.index') }}" class="nav-link {{set_active(['appraisal.index','appraisal.show','appraisal.edit','appraisal.close']) }}">
					<i class="nav-icon fas fa-clipboard-check"></i>
					<p>
						Appraisal
					</p>
				</a>
			</li>
			@endcan
			@can('Create Payroll')
			<li class="nav-item has-treeview {{set_open(['salary.index','salary.create','reimburs.index','salary.show']) }}">
				<a href="#" class="nav-link {{set_active(['salary.index','salary.create','reimburs.index','salary.show']) }}">
					<i class="nav-icon fas fa-calculator"></i>
					<p>
						HR Finance
						<i class="right fas fa-angle-left"></i>
					</p>
				</a>
				<ul class="nav nav-treeview">
					<li class="nav-item {{set_open(['salary.index','salary.show']) }}">
						<a href="{{ route('salary.index') }}" class="nav-link {{set_active(['salary.index','salary.show']) }}">
							<i class="far fa-circle nav-icon"></i>
							<p>Payroll Process</p>
						</a>
					</li>
					<li class="nav-item {{set_open(['reimburs.index']) }}">
						<a href="{{ route('reimburs.index') }}" class="nav-link {{set_active(['reimburs.index']) }}">
							<i class="far fa-circle nav-icon"></i>
							<p>Reimbursment</p>
						</a>
					</li>
				</ul>
			</li>
			@endcan
			<li class="nav-item has-treeview {{set_open(['bulletin.index','knowledge.index','bulletin.create','bulletin.edit','bulletin.show','knowledge.create','knowledge.edit','knowledge.show']) }}">
				<a href="#" class="nav-link {{set_active(['bulletin.index','knowledge.index','bulletin.create','bulletin.edit','bulletin.show','knowledge.create','knowledge.edit','knowledge.show']) }}">
					<i class="nav-icon fas fa-file-alt"></i>
					<p>
						Bulletin Board
						<i class="right fas fa-angle-left"></i>
					</p>
				</a>
				<ul class="nav nav-treeview">
					<li class="nav-item {{set_open(['bulletin.index','bulletin.create','bulletin.edit','bulletin.show']) }}">
						<a href="{{ route('bulletin.index') }}" class="nav-link {{set_active(['bulletin.index','bulletin.create','bulletin.edit','bulletin.show']) }}">
							<i class="far fa-circle nav-icon"></i>
							<p>Employee Bulletin</p>
						</a>
					</li>
					<li class="nav-item {{set_open(['knowledge.index','knowledge.create','knowledge.edit','knowledge.show']) }}">
						<a href="{{ route('knowledge.index') }}" class="nav-link {{set_active(['knowledge.index','knowledge.create','knowledge.edit','knowledge.show']) }}">
							<i class="far fa-circle nav-icon"></i>
							<p>Knowledge Base</p>
						</a>
					</li>
				</ul>
			</li>
			<li class="nav-item has-treeview {{set_open(['attReport.index']) }}">
				<a href="#" class="nav-link {{set_active(['attReport.index']) }}">
					<i class="nav-icon fas fa-chart-line"></i>
					<p>
						Reports
						<i class="right fas fa-angle-left"></i>
					</p>
				</a>
				<ul class="nav nav-treeview">
					<li class="nav-item {{set_open(['attReport.index']) }}">
						<a href="{{ route('attReport.index') }}" class="nav-link {{set_active(['attReport.index']) }}">
							<i class="far fa-circle nav-icon"></i>
							<p>Employee Attendance</p>
						</a>
					</li>
					<li class="nav-item">
						<a href="#" class="nav-link">
							<i class="far fa-circle nav-icon"></i>
							<p>Employee Leave</p>
						</a>
					</li>
					<li class="nav-item">
						<a href="#" class="nav-link">
							<i class="far fa-circle nav-icon"></i>
							<p>HR Finance</p>
						</a>
					</li>
				</ul>
			</li>
			@endif
			@endcan
			@can('Access Grievance')
			@if(\Route::is(['grievance.index','grievanceData.index','managementGrievance.index','grievanceData.edit','grievanceData.show','managementGrievance.show','grievanceData.create']))
			<li class="nav-item">
				<a href="{{ route('grievanceData.create') }}" class="nav-link {{set_active(['grievanceData.create']) }}">
					<i class="nav-icon fas fa-edit"></i>
					<p>
						Manual Input
					</p>
				</a>
			</li>
			<li class="nav-item has-treeview {{set_open(['grievanceData.index','managementGrievance.index','grievanceData.edit','grievanceData.show','managementGrievance.show']) }}">
				<a href="#" class="nav-link {{set_active(['grievanceData.index','managementGrievance.index','grievanceData.edit','grievanceData.show','managementGrievance.show']) }}">
					<i class="nav-icon fas fa-user-shield"></i>
					<p>
						Grievance Process
						<i class="right fas fa-angle-left"></i>
					</p>
				</a>
				<ul class="nav nav-treeview">
					<li class="nav-item">
						<a href="{{ route('grievanceData.index') }}" class="nav-link {{set_active(['grievanceData.index','grievanceData.edit','grievanceData.show']) }}">
							<i class="far fa-circle nav-icon"></i>
							<p>Database</p>
						</a>
					</li>
					<li class="nav-item">
						<a href="{{ route('managementGrievance.index') }}" class="nav-link {{set_active(['managementGrievance.index','managementGrievance.show']) }}">
							<i class="far fa-circle nav-icon"></i>
							<p>Management Respond</p>
						</a>
					</li>
				</ul>
			</li>
			<li class="nav-item has-treeview">
				<a href="#" class="nav-link">
					<i class="nav-icon fas fa-chart-line"></i>
					<p>
						Reports
						<i class="right fas fa-angle-left"></i>
					</p>
				</a>
				<ul class="nav nav-treeview">
					<li class="nav-item">
						<a href="#" class="nav-link">
							<i class="far fa-circle nav-icon"></i>
							<p>Published Grievance</p>
						</a>
					</li>
				</ul>
			</li>
			@endif
			@endcan
			@can('Access Accounting')
			@if(\Route::is(['accounting.index','bank.index']))
			<li class="nav-item {{set_open('bank.index') }}">
				<a href="{{ route('bank.index') }}" class="nav-link {{set_active('bank.index') }}">
					<i class="nav-icon fas fa-money-check-alt"></i>
					<p>
						Bank Statement
					</p>
				</a>
			</li>
			<li class="nav-item">
				<a href="#" class="nav-link">
					<i class="nav-icon fas fa-wallet"></i>
					<p>
						Transaction
					</p>
				</a>
			</li>
			<li class="nav-item">
				<a href="#" class="nav-link">
					<i class="nav-icon fas fa-clipboard-list"></i>
					<p>
						Asset Management
					</p>
				</a>
			</li>
			<li class="nav-item">
				<a href="#" class="nav-link">
					<i class="nav-icon fas fa-file-invoice"></i>
					<p>
						Budget Manager
					</p>
				</a>
			</li>
			<li class="nav-item">
				<a href="#" class="nav-link">
					<i class="nav-icon fas fa-chart-line"></i>
					<p>
						Reports
					</p>
				</a>
			</li>
			@endif
			@endcan
			</ul>
		</nav>
    </div>
</aside>

            	
