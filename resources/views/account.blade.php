@extends('layouts.app')

@section('title', 'Account')

@section('content')
<section class="project-container">
    <article class="project-card">
        <header class="project-header">
            <h1>Account Settings</h1>
            <p class="muted">Manage your profile and preferences.</p>
        </header>

        <section class="project-section">
            <p>Name: <strong>{{ auth()->user()->name }}</strong></p>
            <p>Email: <strong>{{ auth()->user()->email }}</strong></p>
            <p class="muted">This page is a placeholder. Implement profile edit forms and security settings here.</p>
        </section>
    </article>
</section>

@endsection
