<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class JobController extends Controller
{
    public function index(Request $request)
    {
        $q = $request->q;

        $featuredJobs = Job::query()
            ->with('company')
            ->where('featured', true)
            ->latest()
            ->limit(16)
            ->get();

        if ($q) {
            $jobs = Job::with('company')->where('position', 'LIKE', '%' . $q . '%')->latest()->get();
        } else {
            $jobs = Job::with('company')->latest()->get();
        }

        return view('jobs.index', compact('jobs', 'featuredJobs', 'q'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'position' => 'required',
            'salary' => 'required',
            'description' => 'sometimes',
            'url' => 'active_url|required',
            'schedule' => [
                'required',
                Rule::in(['Full Time', 'Part Time'])
            ],
        ]);

        $validated['featured'] = $request->has('featured');

        auth()->user()->company->jobs()->create($validated);

        return redirect('/');
    }
    public function edit(Request $request, Job $job)
    {
        $validated = $request->validate([
            'position' => 'required',
            'salary' => 'required',
            'url' => 'active_url|required',
            'schedule' => [
                'required',
                Rule::in(['Full Time', 'Part Time'])
            ],
        ]);

        $validated['featured'] = $request->has('featured');

        $job->update($validated);

        return redirect('/');
    }

    public function delete(Request $request, Job $job)
    {
        $job->delete();

        return redirect('/');
    }
    public function manage()
    {
        if (auth()->user()->company) {
            $jobs = auth()->user()->company->jobs;
        } else {
            $jobs = collect();
        }

        return view('jobs.manage', compact('jobs'));
    }
}
