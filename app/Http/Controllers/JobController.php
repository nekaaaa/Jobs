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
            ->with('employer')
            ->where('featured', true)
            ->latest()
            ->limit(16)
            ->get();

        if ($q) {
            $jobs = Job::with('employer')->where('position', 'LIKE', '%' . $q . '%')->latest()->get();
        } else {
            $jobs = Job::with('employer')->latest()->get();
        }

        return view('jobs.index', compact('jobs', 'featuredJobs', 'q'));
    }

    public function store(Request $request)
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

        auth()->user()->employer->jobs()->create($validated);

        return redirect('/');
    }
}
