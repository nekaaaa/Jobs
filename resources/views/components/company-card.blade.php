@props(['company'])
<div class="h-32 p-3 bg-gray-300 rounded-md flex flex-col w-full">
    <div class="flex items-center"> <!-- Container for company logo and name -->
        <img class="w-24 h-24 rounded-full border-2 border-gray-500" src="{{ $company->logo_url }}" alt="{{ $company->name }} Logo">
        <h2 class="text-xl font-semibold ml-3">
            <a target="_blank">{{ $company->name }}</a>
        </h2>
    </div>
    <p class="text-sm">{{ $company->description }}</p>
    <div class="flex justify-end"> <!-- Aligns the link to the right -->
        <div class="mb-4"> <!-- Apply margin to this div -->
            <a class="self-end hover:underline" href="/companies/{{ $company->id }}">Click here to see more</a>
        </div>
    </div>
</div>


