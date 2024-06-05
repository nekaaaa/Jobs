<x-app>

    <div class="text-center mb-8">
        <h1 class="text-3xl font-semibold">Jobs</h1>
        <p class="text-gray-700 text-lg">A place to find job listings.</p>
    </div>
    <div>
        <h2 class="text-xl font-semibold">Highlighted Jobs</h2>
        <p class="text-sm text-gray-600">Companies can pay an extra fee to get their jobs listed here.</p>

        <div class="mt-4 gap-3 grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3">
            @foreach($jobs as $job)
                <x-job-card :$job />
            @endforeach
        </div>
    </div>

    <div class="rounded-md pt-2 mt-6 flex flex-col gap-y-4">
        <h3 class="text-lg font-semibold">Recent Jobs</h3>

        <x-job-card-wide />
    </div>

</x-app>
