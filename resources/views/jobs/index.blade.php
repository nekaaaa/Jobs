<x-app>

    <div class="text-center mb-8">
        <h1 class="text-6xl font-semibold mb-8">Let's find your next job.</h1>

        <form action="/">
            <x-forms.input name="q" :label="false" placeholder="Web Developer..." class="w-2/3"/>
        </form>
    </div>

    <div class>
        <h2 class="text-xl font-semibold">Highlighted Jobs</h2>
        <p class="text-sm text-gray-600">Companies can pay an extra fee to get their jobs listed here.</p>

        <div class="mt-4 gap-3 grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3">
            @foreach($featuredJobs as $job)
                <x-job-card :$job/>
            @endforeach
        </div>
    </div>

    <div class="rounded-md pt-2 mt-6 flex flex-col gap-y-4">
        @if($q)
            <h3 class="text-lg font-semibold">Results for "{{ $q }}"</h3>
        @else
            <h3 class="text-lg font-semibold">Recent Jobs</h3>
        @endif

        @forelse($jobs as $job)
            <x-job-card-wide :$job/>
        @empty
            @if($q !== null)
                <div class="w-full flex flex-col justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                         stroke="currentColor" class="mx-auto mb-4 w-24 h-24">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="M12 9v3.75m9-.75a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9 3.75h.008v.008H12v-.008Z"/>
                    </svg>

                    <p class="mx-auto text-xl text-gray-500 ">No jobs found for "{{ $q }}"</p>
                </div>
            @else
                <div class="w-full flex flex-col justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                         stroke="currentColor" class="mx-auto mb-4 w-24 h-24">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="M12 9v3.75m9-.75a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9 3.75h.008v.008H12v-.008Z"/>
                    </svg>

                    <p class="mx-auto text-xl text-gray-500 ">No jobs listings are available</p>
                </div>
            @endif
        @endforelse
    </div>

</x-app>
