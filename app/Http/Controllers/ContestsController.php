<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

use App\Contest;
use App\Company;

class ContestsController extends Controller
{

    public function index()
    {
        $contests = Contest::latest()->get();
        return view('contests.index', compact('contests'));
    }


    public function create($companyId)
    {return view('contests.create')->with('company_id', $companyId);
    }


    public function store()
    {
        $this->validate(request(),[
            'title' => 'required',
            'body' => 'required'
        ]);


        Contest::create(request(['title','body','slug', 'company_id', 'date_ini', 'date_end', 'published_at', 'user_id']));

        return redirect()->route('company', ['id' => request('company_id')]);
    }


    public function show(Contests $contest)
    {
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
