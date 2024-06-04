<x-app>
    <h1 class="text-3xl font-semibold text-center my-6">Login</h1>

    <form action="/login" method="POST">
        @csrf

        <div class="space-y-4">
            <x-forms.input name="email" label="Email" placeholder="jamesbrooks@gmail.com" />

            <x-forms.input name="password" label="Password" placeholder="••••••" type="password" />
        </div>

        <x-forms.button class="mt-4">Login</x-forms.button>
    </form>
</x-app>
