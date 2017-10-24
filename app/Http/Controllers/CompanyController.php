<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Company;

class CompanyController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $companies=Company::all();
        return view('companies.index',['companies'=>$companies]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('companies.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request,[
            'companyname'=>'required',
            'companymail'=>'required',
            'companydescription'=>'required',
            'companyaddress'=>'required',
            'companyphone'=>'required',
//            'companylogo'=>''
        ]);
        //create a new company instance
        $company = new Company();
        if($file=$request->hasFile('companylogo')){
            $file = $request->file('companylogo') ;
            $fileName = $file->getClientOriginalName();
            $destinationPath = public_path().'/images/' ;
            $file->move($destinationPath,$fileName);
        }
        $company->name=$request->companyname;
        $company->address=$request->companyaddress;
        $company->phone=$request->companyphone;
        $company->email=$request->companymail;
        $company->logo=$fileName;
        $company->description=$request->companydescription;
        $company->status=true;
        $company->save();
        return Redirect('/companies/create')->with('message', 'New Company created Successfully');
    }
    public function showUserForm(){
        return view('users.other');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
