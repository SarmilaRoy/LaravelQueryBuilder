<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;


class MemberController extends Controller
{
    public function show(){
        //$data=Member::all();
        //$data=Member::paginate(4);
        $data=Member::simplePaginate(4);
        //dd($data);
        return view('list',['members'=>$data]);
    }
}
