<nav class="flex justify-between items-center px-6 py-4 border-b-2 border-black/10 text-nowrap">
    <div>
        <a href="/">
            <x-logo />
        </a>
    </div>

    <div class="space-x-6 font-bold">
        <a href="/">Jobs</a>
        <a href="#">Salaries</a>
        <a href="#">Companies</a>
    </div>

    @auth
        <div class="space-x-6 font-bold flex">
            <a href="/jobs/create">Post a Job</a>

            <form method="POST" action="/logout">
                @csrf
                @method('DELETE')

                <button>Log Out</button>
            </form>
        </div>
    @endauth

    @guest
        <div class="space-x-6 font-bold">
            <a href="/register">Sign Up</a>
            <a href="/login">Log In</a>
        </div>
    @endguest
</nav>
