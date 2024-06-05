<x-app>
    <h1 class="text-center font-semibold text-3xl mt-8">Register</h1>
    <div class="px-8">
        <form action="/register" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="space-y-4">
                <h2 class="text-xl font-semibold">Person Information</h2>
                <x-forms.input name="name" label="Name" placeholder="James Brooks"/>

                <x-forms.input name="email" label="Email" placeholder="jamesbrooks@gmail.com"/>

                <x-forms.input name="password" label="Password" placeholder="••••••••" type="password"/>
                <x-forms.input name="password_confirmation" label="Password Confirmation" placeholder="••••••••" type="password"/>
                <a class="hover:underline" href="/login">Already have an account?</a>
            </div>
            <x-forms.button class="mt-4">Register</x-forms.button>

        </form>
    </div>
</x-app>
