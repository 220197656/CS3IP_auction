@extends('layouts.app')

@section('title', 'Contact')

@section('content')
<section class="project-container">
    <article class="project-card">
        <header class="project-header">
            <h1>Contact</h1>
            <p class="muted">Get in touch about the Accessible Auction Website project.</p>
        </header>

        <section class="project-section">
            <p>Email: <a href="mailto:dummyemail@notarealemail.hi" class="text-blue-600">support@accessibleauctions.test</a></p>
            <p class="muted">This is a demo contact page. In a full application add a secured contact form and CSRF protection.</p>
        </section>
    </article>
</section>

@endsection
