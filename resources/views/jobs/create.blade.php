<x-app>
    <div class="px-8">
        <h1 class="text-3xl font-semibold text-center my-6">Create a Job Listing</h1>

        <form action="/jobs" method="POST">
            @csrf
            <div class="flex flex-col gap-y-4">
                <x-forms.input name="position" label="Position" placeholder="Junior Developer" />

                <x-forms.input name="salary" label="Salary" placeholder="$90,000" />

                <x-forms.input name="description" label="Description" placeholder="Job Description" />

                <x-forms.select name="schedule" label="Schedule">
                    <option value="Full Time">Full Time</option>
                    <option value="Part Time">Part Time</option>
                </x-forms.select>

                <x-forms.input name="url" label="Website Url" placeholder="https://example.com/work" />

                <x-forms.checkbox name="featured" label="Highlight your listing" />

                <x-forms.button>Create Job Listing</x-forms.button>
            </div>
        </form>
    </div>
</x-app>
