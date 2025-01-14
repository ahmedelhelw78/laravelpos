<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Account_types;

class Account_types_controller extends Controller
{
    public function index()
    {
        $data=get_cols(new Account_types(),array("*"),'id','ASC');
        return view('admin.account_types.index', ['data' => $data]);
    }

}
