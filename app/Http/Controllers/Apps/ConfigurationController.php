<?php

namespace iteos\Http\Controllers\Apps;

use Illuminate\Http\Request;
use iteos\Http\Controllers\Controller;
use iteos\Models\User;

class ConfigurationController extends Controller
{
    public function index()
    {
    	return view('apps.pages.configurationPage');
    }

    public function applicationIndex()
    {
    	return view('apps.pages.applicationSetting');
    }

    public function positionIndex()
    {
    	return view('apps.pages.employeePosition');
    }

    public function positionStore(Request $request)
    {

    }

    public function leaveTypeIndex()
    {
    	return view('apps.pages.leaveType');
    }

    public function reimbursTypeIndex()
    {
    	return view('apps.pages.reimbursType');
    }

    public function documentCategoryIndex()
    {
    	return view('apps.pages.documentCategory');
    }

    public function grievanceCategoryIndex()
    {
    	return view('apps.pages.grievanceCategory');
    }

    public function coaCategoryIndex()
    {
    	return view('apps.pages.coaCategory');
    }

    public function assetCategoryIndex()
    {
    	return view('apps.pages.assetCategory');
    }

    public function userIndex()
    {
        $data = User::orderBy('id','ASC')->get();

        return view('apps.pages.users',compact('data'));
    }

    public function roleIndex()
    {
        return view('apps.pages.roles');
    }

    public function logActivity()
    {
        return view('apps.pages.logActivity');
    }
}
