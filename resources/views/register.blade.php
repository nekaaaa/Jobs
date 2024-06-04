<x-app>
    <h1 class="text-center font-semibold text-3xl mt-8">Register</h1>


    <form action="/register" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="space-y-4">
            <h2 class="text-xl font-semibold">Person Information</h2>
            <x-forms.input name="name" label="Name" placeholder="James Brooks"/>

            <x-forms.input name="email" label="Email" placeholder="jamesbrooks@gmail.com"/>

            <x-forms.input name="password" label="Password" placeholder="••••••" type="password"/>
            <x-forms.input name="password_confirmation" label="Password Confirmation" placeholder="••••••" type="password"/>
        </div>

        <hr class="h-px my-8 bg-gray-400 border-0">

        <div class="space-y-4">
            <h2 class="text-xl font-semibold">Employer Information</h2>

            <x-forms.input name="employer_name" label="Employer Name" placeholder="Bureau ZigZag"/>

            <x-forms.input name="employer_logo" label="Employer Logo" type="file"/>
        </div>

        <x-forms.button class="mt-4">Register</x-forms.button>

    </form>
</x-app>
