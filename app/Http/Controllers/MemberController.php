<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;
Use Illuminate\Support\Facades\Session;


class MemberController extends Controller
{
    public function show(){
        //$data=Member::all();
        //$data=Member::paginate(4);
        $data=Member::simplePaginate(4);
        //dd($data);
        return view('list',['members'=>$data]);
    }
    public function adddata(){
        return view('add-member');
    }

    public function storeData(Request $request){
        $member=new Member();
        $member->name=$request->names;
        $member->email=$request->email;
        $member->address=$request->address;
        $member->save();
        //dd($$member);
        Session::Flash('msg','Data successfully Added');
        return redirect('/list');

    }
}
