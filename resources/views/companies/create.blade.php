<x-app>
    <h1 class="text-3xl font-semibold text-center my-6">Register a Company</h1>
    <form class="px-8" enctype="multipart/form-data" action="/companies/make" method="POST">
        @csrf
        <div class="flex flex-col gap-y-4">
            <p class="text-red-700">{{ $errors->first('error') }}</p>
            <x-forms.input name="name" label="Company Name" placeholder="Example: Job Inc." />

            <x-forms.input name="url" label="Website Url" placeholder="https://example.com/work" />

            <x-forms.input name="email" label="Email" placeholder="company@example.com" />

            <x-forms.input name="description" label="Description" placeholder="Company Description" />
            <div>
                <label for="logo" class="block text-sm font-medium text-gray-700">Logo</label>
                <input type="file" id="logo" name="logo" accept="image/*" class="mt-1 block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-violet-50 file:text-violet-700 hover:file:bg-violet-100">
                <div id="preview-container" class="mt-4">
                    <img id="logo-preview" src="" alt="Logo Preview" class="hidden rounded-lg max-w-xs max-h-48">
                </div>
            </div>
            <button class="bg-black rounded-md text-white px-6 py-2 hover:bg-gray-600 font-semibold">Register Company</button>
        </div>
    </form>
</x-app>
@dd($errors->all())
