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
            new Company(request()->all())
        );

        return redirect('/companies');
    }


    public function show(Company $company, $slug)
    {
        $company = $company->where('slug', $slug)->first();

        return view('companies.show', compact('company'));
    }


    public function edit(Company $company, $slug)
    {
        $company = $company->where('slug', $slug)->first();

        return view('companies.edit', compact('company'));
    }


    public function update(Request $request, Company $company, $slug)
    {
        $company = $company->where('slug', $slug)->first();
        $company->fill(request()->all())->save();

        return view('companies.show', compact('company'));
    }


    public function destroy(Company $company)
    {
        //
    }
}
