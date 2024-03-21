<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;

class CompanyCRUDController extends Controller
{
    //
    public function index(){
        $data['car']=Company::orderBy('id','ASC')->paginate(5);
        return view('dasboard',$data);
    }

    public function stock(){
        return view('companies.stock');
    }



    



    
    
}
