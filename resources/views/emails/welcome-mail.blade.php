<div class="p-4 bg-white rounded shadow">
    <h1 class="mb-4 text-2xl font-bold">Welcome to our site, {{ $user->name ?? 'Username' }}</h1>
    <p class="mb-2">Hi, this is a test email.</p>
    <p class="mb-2">Thanks for using Laravel Jetstream Demo.</p>
    <p class="mb-2">Here is your login information:</p>
    <p class="mb-2">Email: {{ $user->email ?? 'user@user.com' }}</p>
    <p class="mb-2">Password: {{ $password ?? 'password' }}</p>
    <p class="mb-2">Click <a href="{{ route('login') }}" class="text-blue-500">here</a> to login.</p>
    <p class="mt-4">Thanks, <br> {{ config('app.name') }}</p>
</div>
</div>
