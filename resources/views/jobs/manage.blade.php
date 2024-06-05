<x-app>
    <div class="container mx-auto px-4 mt-8 text-center">
        <h1 class="text-2xl font-bold mb-4">Manage Jobs</h1>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
            @if(count($jobs) != 0)
                @foreach($jobs as $job)
                    <x-job-card :job="$job" />
        </div>
        @endforeach
        @else
            <div class="w-full flex flex-col justify-center text-center ml-96">
                <div class="ml-60 mt-40">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                         stroke="currentColor" class="mx-auto mb-4 w-24 h-24">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="M12 9v3.75m9-.75a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9 3.75h.008v.008H12v-.008Z" />
                    </svg>

                    <p class="mx-auto text-xl text-gray-500 ">You have not created any jobs yet.</p>
                </div>
            </div>
        @endif
    </div>
</x-app>
