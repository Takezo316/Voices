<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

use App\Company;

class CompaniesController extends Controller
{
    public function __construct()
    {

        $this->middleware('auth')->except(['index','show']);

    }

    public function index()
    {

        $companies = Company::latest()->get();
        return view('companies.index', compact('companies'));

    }


    public function create()
    {

        return view('companies.create');

    }


    public function store()
    {
        $this->validate(request(),[
            'name' => 'required',
            'about' => 'required'
        ]);

        auth()->user()->company_create(

            new Company(request(['name','about']))

        );

        return redirect('/companies');
        
    }


    public function show(Company $company)
    {

        return view('companies.show', compact('company'));

    }


    public function edit(Company $company)
    {
        //
    }


    public function update(Request $request, Company $company)
    {
        //
    }


    public function destroy(Company $company)
    {
        //
    }
}
