@extends('layouts.app')

@section('title', 'Login')

@section('content')
<section class="project-container">
    <article class="project-card">
        <header class="project-header">
            <h1>Login (Demo)</h1>
            <p class="muted">Sign in to your account (demo form; no backend).</p>
        </header>

        <section class="project-section">
            <form method="POST" action="{{ url('/login') }}" class="space-y-4">
                @csrf

                <div>
                    <label class="block text-sm font-medium">Email</label>
                    <input name="email" type="email" value="{{ old('email') }}" required class="w-full border rounded px-3 py-2 mt-1" placeholder="you@example.com">
                    @error('email')<p class="text-red-600 text-sm mt-1">{{ $message }}</p>@enderror
                </div>

                <div>
                    <label class="block text-sm font-medium">Password</label>
                    <input name="password" type="password" required class="w-full border rounded px-3 py-2 mt-1" placeholder="Password">
                </div>

                <div class="flex items-center gap-4">
                    <label class="inline-flex items-center"><input type="checkbox" name="remember" class="mr-2"> Remember me</label>
                    <button class="bg-blue-600 text-white px-4 py-2 rounded">Sign in</button>
                </div>
            </form>
            @if(app()->environment('local') || config('app.debug'))
                <p class="muted small mt-3">Demo credentials: <strong>admin@example.com</strong> / <strong>password</strong></p>
            @endif
        </section>
    </article>
</section>

@endsection
