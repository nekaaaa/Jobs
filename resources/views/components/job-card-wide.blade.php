@props(['job'])
<div class="bg-gray-300 rounded-md p-4 flex flex-row">
    <img class="w-28 aspect-square rounded-lg" src="{{ asset($job->employer->logo_path) }}" alt="Company Photo">

    <div class="ml-3 flex flex-col">
        <h2 class="text-lg -my-0.5 font-semibold text-nowrap">
            <a href="{{ $job->url }}" target="_blank">{{ $job->employer->name }}</a>
        </h2>
        <p class="text-md">{{ $job->position }}</p>

        <p class="text-md">{{ $job->salary }}</p>
    </div>


</div>
