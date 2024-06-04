@props(['job'])

<div class="h-56 p-3 bg-gray-300 rounded-md flex flex-col">
    <h2 class="text-xl font-semibold">
        <a href="#company_url">{{ $job->employer->name }}</a>
    </h2>
    <p class="text-sm">{{ $job->position }}</p>
    <p class="text-sm text-gray-700">{{ $job->salary }}</p>

    <div class="mt-auto flex flex-row justify-between">
        <a class="self-end" href="{{ $job->url }}">Click here to see more</a>
        <img class="rounded-md w-24" src="{{ asset($job->employer->logo_path) }}" alt="">
    </div>
</div>

