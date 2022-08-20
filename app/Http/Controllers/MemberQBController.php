<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MemberQBController extends Controller
{
    public function oparation(){
        // $data=DB::table('member_q_b_s')->get();
        // return view('listQB',['data'=>$data]);
        // $data=DB::table('member_q_b_s')
        // ->where('id',4)
        // ->get();
        // return view('listQB',['data'=>$data]);

        //return DB::table('member_q_b_s')->where('name', 'sarmila')->value('email');
        // return DB::table('member_q_b_s')->find(3);
        // return DB::table('member_q_b_s')->count();
        // return DB::table('member_q_b_s')
        // ->insert([
        //     'name'=>'anil',
        //     'email'=>'anil@gmail.com',
        //     'address'=>'adress'
        // ]);

        // return DB::table('member_q_b_s')
        // ->where('id',3)
        // ->update([
        //     'name'=>'Sarmila',
        //     'email'=>'Sarmila@gmail.com',
        //     'address'=>'USA'
        // ]);

        return DB::table('member_q_b_s')
        ->where('id',2)
        ->delete();
       
       
       
    }
   
}
