@props(['company'])

<div class="h-32 p-3 bg-gray-300 rounded-md flex flex-col w-96">
    <h2 class="text-xl font-semibold">
        <a target="_blank">{{ $company->name }}</a>
    </h2>
    <p class="text-sm">{{ $company->description }}</p>

    <div class="mt-auto flex flex-row justify-between">
        <a class="self-end hover:underline" href="/companies/{{ $company->id }}">Click here to see more</a>
    </div>
</div>
