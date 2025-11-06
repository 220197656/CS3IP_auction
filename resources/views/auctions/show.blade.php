@extends('layouts.app')

@section('title', 'Auction Details')

@section('content')
<section class="project-container">
    <article class="project-card">
        <header class="project-header">
            <h1>Auction detail — Lot #{{ $id }}</h1>
            <p class="muted">This is a static example page for a single auction. Replace with dynamic data later.</p>
        </header>

        <section class="project-section">
            <h2>Item summary</h2>
            <p><strong>Lot {{ $id }} — Example Items</strong></p>
            <p class="muted">Starting price: £250 · Closing: 2025-12-01</p>
        </section>

        <section class="project-section">
            <h2>Bidding & Fees</h2>
            <p>Current bid: <strong>£350</strong></p>
            <p class="muted">Fee breakdown will be shown here (commission, VAT, collection costs).</p>
            <div class="mt-4">
                <button class="bg-blue-600 text-white px-4 py-2 rounded">Place bid (demo)</button>
            </div>
        </section>

        <section class="project-section">
            <h2>Collection & Payment</h2>
            <p class="muted">Clear instructions for collection and payment will appear here once implemented.</p>
        </section>

    </article>
</section>

@endsection
