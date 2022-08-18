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

    public function deleteData($id){
        $data=Member::find($id);
        //dd($data);
        $data->delete();
        Session::Flash('msg','Data successfully Deleted');
        return redirect('/list');


    }

      //edit display data
      public function editData($id=null){
        $editData=Member::find($id);
        return view('edit-data',compact('editData'));
    }


     //update

    //  public function updateData(Request $request,$id){
    //     $updateData=Member::find($id);
    //     $updateData->name=$request->names;
    //     $updateData->email=$request->email;
    //     $updateData->address=$request->address;
    //     $updateData->save();
    //     Session::Flash('msg','Data successfully Updated');
    //     return redirect('/list');
    // }
    public function updateData(Request $request){
        $updateData=Member::find($request->id);
        $updateData->name=$request->names;
        $updateData->email=$request->email;
        $updateData->address=$request->address;
        $updateData->save();
        Session::Flash('msg','Data successfully Updated');
        return redirect('/list');
    }
}
