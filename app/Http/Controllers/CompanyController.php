<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Company;
use DB;


class CompanyController extends Controller
{
    //
    public function index()
    {
    	$data=array();
    	return view('test',compact('data'));
    }

    public function addinfo(Request $request)
    {
    	//return $request->all();
    	if ($request->has('logo')) {
    		//return 'yes';
    		$filenameWithext= $request->file('logo')->getClientOriginalName();
    		$filename=pathinfo($filenameWithext,PATHINFO_FILENAME);
    		$extension=$request->file('logo')->getClientOriginalExtension();
    		$filenameforstore=$filename.'.'.$extension;
    		$path=$request->file('logo')->storeAs('public/upload',$filenameforstore);

    		$add= new Company([
    			'country_name' =>$request->get('country'),
    			'name' =>$request->get('name'),
    			'email' =>$request->get('email'),
    			'phone' =>$request->get('phone'),
    			'fax' =>$request->get('fax'),
    			'web_url' =>$request->get('web_url'),
    			'date' =>$request->get('date'),
    			'logo' =>$filenameforstore
    		]);
    		$add->save();
    		echo "<script> alert('Successfully Added')</script>";
    		echo "<script> window.open('test','_self')</script>";
    	}
    }

    public function find_info(Request $request)
    {
    	//return $request->all();
    	$country=$request->country;

    	$data=DB::table('companies')->where('country_name','=',$country)->get();
    	return view('test',compact('data'));


    }

    public function view_details($id)
    {
    	$data=DB::table('companies')->where('id','=',$id)->get();
    	return view('view',compact('data'));
    }
     public function edit($id)
    {
    	$data=DB::table('companies')->where('id','=',$id)->get();
    	return view('edit',compact('data'));
    }
    public function update(Request $request)
    {
    	if ($request->has('logo')) {
    		//return 'yes';
    		$filenameWithext= $request->file('logo')->getClientOriginalName();
    		$filename=pathinfo($filenameWithext,PATHINFO_FILENAME);
    		$extension=$request->file('logo')->getClientOriginalExtension();
    		$filenameforstore=$filename.'.'.$extension;
    		$path=$request->file('logo')->storeAs('public/upload',$filenameforstore);

    		$id=$request->id;

    		$add = Company::find($id);
	        $add->country_name = $request->get('country');
	        $add->email = $request->get('email');
	        $add->phone = $request->get('phone');
	        $add->fax = $request->get('fax');
	        $add->web_url = $request->get('web_url');
	        $add->date = $request->get('date');
	        $add->logo = $filenameforstore;
	       
    		$add->save();
    		echo "<script> alert('Successfully Update')</script>";
    		echo "<script> window.open('test','_self')</script>";
    	}
    }

    

}
