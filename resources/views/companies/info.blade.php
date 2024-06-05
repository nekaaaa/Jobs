<x-app>
    <div class="bg-gray-100 min-h-screen flex flex-col">
        <div class="container mx-auto bg-white rounded-lg shadow-lg p-8 flex-grow">
            <div class="flex items-center mb-6">
                <img src="{{ $company->logo_url }}" alt="{{ $company->name }} Logo" class="h-24 w-24 mr-6 rounded-full">
                <h1 class="text-4xl font-semibold text-gray-800">
                    {{ $company->name }}
                </h1>
            </div>
            <div class="text-gray-700 mb-8">
                <p class="mb-4">
                    Information about <a class="font-bold text-blue-500">{{ $company->name }}</a>:
                </p>
                <p class="mb-2">
                    The company's website is: <a href="{{ $company->url }}" class="text-blue-500 hover:underline">{{ $company->url }}</a>.
                </p>
                <p class="mb-2">
                    You can also email the company at: <a href="mailto:{{ $company->email }}" class="text-blue-500 hover:underline">{{ $company->email }}</a>.
                </p>
                <p class="mt-4 text-center">
                    {{ $company->description }}
                </p>
            </div>

            <!-- Job Listings -->
            <div class="space-y-4">
                <h2 class="text-2xl font-semibold text-gray-800 text-center">Job Listings</h2>
                @foreach($company->jobs as $job)
                    <x-job-card :job="$job"/>
                @endforeach
            </div>
        </div>
    </div>
</x-app>
