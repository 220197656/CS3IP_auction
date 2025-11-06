@extends('layouts.app')

@section('title', 'Register')

@section('content')
<section class="project-container">
    <article class="project-card">
        <header class="project-header">
            <h1>Register (Demo)</h1>
            <p class="muted">Create an account to participate in auctions (demo form; no backend).</p>
        </header>

        <section class="project-section">
            <form class="space-y-4">
                <div>
                    <label class="block text-sm font-medium">Name</label>
                    <input type="text" class="w-full border rounded px-3 py-2 mt-1" placeholder="Your name">
                </div>

                <div>
                    <label class="block text-sm font-medium">Email</label>
                    <input type="email" class="w-full border rounded px-3 py-2 mt-1" placeholder="you@example.com">
                </div>

                <div>
                    <label class="block text-sm font-medium">Password</label>
                    <input type="password" class="w-full border rounded px-3 py-2 mt-1" placeholder="Choose a password">
                </div>

                <div>
                    <button class="bg-blue-600 text-white px-4 py-2 rounded">Create account</button>
                </div>
            </form>
        </section>
    </article>
</section>

@endsection
