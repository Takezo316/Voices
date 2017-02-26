<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

use App\Contest;
use App\Company;

class ContestsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['index','show']);
    }

    public function index()
    {
        $contests = Contest::latest()->get();
        return view('contests.index', compact('contests'));
    }


    public function create($companyId)
    {
        return view('contests.create')->with('company_id', $companyId);
    }


    public function store()
    {
        $this->validate(request(),[
            'title' => 'required',
            'body' => 'required',
            'slug' => 'required'
        ]);

        $company = DB::table('companies')->where('slug', request('company_id'))->value('id');

        Contest::create([
            'title' => request('title'),
            'body' => request('body'),
            'slug' => request('slug'),
            'company_id' => $company,
            'date_ini' => request('date_ini'),
            'date_end' => request('date_end')
        ]);

        return redirect()->route('company', ['id' => request('company_id')]);
    }


    public function show($slugc, $slug)
    {
        $contest = Contest::where('slug', $slug)->first();
        return view('contests.show', compact('contest'));
    }


    public function edit(Contests $contests)
    {
        //
    }


    public function update(Request $request, Contests $contests)
    {
        //
    }


    public function destroy(Contests $contests)
    {
        //
    }
}
