<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;


class MemberController extends Controller
{
    public function show(){
        $data=Member::all();
        //dd($data);
        return view('list',['members'=>$data]);
    }
}
