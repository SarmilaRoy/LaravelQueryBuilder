<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EmployeeController extends Controller
{
    public function getData(){
        // return DB::table('employees')
        // ->join('companies','employees.id','=','companies.employee_id')
        // ->select('companies.*','employees.*')
        // ->get();

        // return DB::table('employees')
        // ->join('companies','employees.id','=','companies.employee_id')
        // ->select('companies.*','employees.*')
        // ->where('employees.name','shawon')
        // ->get();

        
        // return DB::table('employees')
        // ->join('companies','employees.id','=','companies.employee_id')
        // ->select('companies.*','employees.*')
        // ->where('employees.id',1)
        // ->get();

        
        return DB::table('employees')
        ->join('companies','employees.id','=','companies.employee_id')
        ->where('employees.id',1)
        ->select('companies.name','employees.name')
        ->get();
    }
}
