@extends('layouts.app')

@section('title', 'Browse Auctions')

@section('content')
<section class="project-container">
    <article class="project-card">
        <header class="project-header">
            <h1>Browse Auctions</h1>
            <p class="muted">A curated list of example auctions (static demo).</p>
        </header>

        <section class="project-section">
            <div class="grid md:grid-cols-2 gap-6">
                <div class="auction-card p-4 bg-white rounded-lg border">
                    <h3 class="text-lg font-semibold">Lot 101 — Bulk Electronics</h3>
                    <p class="muted">Closing: 2025-11-30 · Ex-VAT starting price: £500</p>
                    <div class="mt-3 flex gap-3">
                        <a href="{{ url('/auctions/101') }}" class="text-blue-600 font-medium">View</a>
                        <a href="#" class="text-gray-600">Quick info</a>
                    </div>
                </div>

                <div class="auction-card p-4 bg-white rounded-lg border">
                    <h3 class="text-lg font-semibold">Lot 202 — Office Furniture</h3>
                    <p class="muted">Closing: 2025-12-07 · Ex-VAT starting price: £300</p>
                    <div class="mt-3 flex gap-3">
                        <a href="{{ url('/auctions/202') }}" class="text-blue-600 font-medium">View</a>
                        <a href="#" class="text-gray-600">Quick info</a>
                    </div>
                </div>
            </div>
        </section>
    </article>
</section>

@endsection
