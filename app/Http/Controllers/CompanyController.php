<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Job;
use Illuminate\Http\Request;


class CompanyController extends Controller
{
    public function index()
    {
        $companies = Company::all();
        return view('companies.index', ['companies' => $companies]);
    }
    public function show(Company $company)
    {
        $company = Company::find($company->id);
        $jobs = $company->jobs;
        return view('companies.info', ['company' => $company], ['jobs' => $jobs]);
    }
    public function store(Request $request)
    {
        if (auth()->user()->company_id) {
            $validator = validator()->make([], [])->errors()->add('error', 'Je hebt al een bedrijf neef.');

            return redirect('/companies/create')->withErrors($validator);
        }
        $validated = $request->validate([
            'name' => 'required',
            'description' => 'sometimes',
            'email' => 'email|sometimes',
            'url' => 'active_url|required',
            'logo' => 'image',
        ]);

        $validated['featured'] = $request->has('featured');
        $company = auth()->user()->company()->create($validated);

        $user = auth()->user();
        $user->company_id = $company->id;

        $user->save();

        return redirect('/companies');
    }
    public function create()
{
    return view('companies.create');
}
}
