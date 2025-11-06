@extends('layouts.app')

@section('title', 'OpenLot — Accessible Auctions')

@section('content')
<!-- Hero -->
<section class="hero bg-white">
    <div class="project-container">
        <div class="hero-inner project-card">
            <div class="hero-left">
                <h1 class="hero-title">OpenLot</h1>
                <p class="hero-slogan">Transparent, simple auctions for everyone — clear fees, clear outcomes.</p>

                <ul class="why-list">
                    <li><strong>Easy for newcomers</strong> — simple UI and step-by-step bidding guidance.</li>
                    <li><strong>Transparent fees</strong> — price breakdowns shown before you bid.</li>
                    <li><strong>Accessible</strong> — high-contrast, keyboard-friendly layouts and clear instructions.</li>
                    <li><strong>Seller tools</strong> — bulk listing and promotion options for business sellers.</li>
                </ul>

                <div class="mt-4">
                    <a href="{{ url('/auctions') }}" class="cta-btn">Browse live auctions</a>
                </div>
            </div>

            <div class="hero-right">
                <div class="stats">
                    <div>
                        <div class="stat-num">120+</div>
                        <div class="stat-label">Active lots</div>
                    </div>
                    <div>
                        <div class="stat-num">5k+</div>
                        <div class="stat-label">Registered users</div>
                    </div>
                    <div>
                        <div class="stat-num">£12M</div>
                        <div class="stat-label">Total sales</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Featured auctions -->
<section class="project-container">
    <h2 class="section-title">Featured auctions</h2>
    <p class="muted">Example listings — end dates and current prices are for demo purposes.</p>

    <div class="auction-grid">
        <article class="auction-card">
            <figure class="auction-thumb" role="img" aria-label="Bulk Electronics thumbnail">
                <!-- Inline SVG placeholder -->
                <svg width="400" height="240" viewBox="0 0 400 240" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                    <rect width="400" height="240" fill="#e6f0ff" />
                    <text x="50%" y="50%" dominant-baseline="middle" text-anchor="middle" fill="#1e3a8a" font-size="20">Lot 101</text>
                </svg>
            </figure>
            <div class="auction-body">
                <h3 class="auction-title">Lot 101 — Bulk Electronics</h3>
                <p class="muted">A mixed lot of refurbished consumer electronics — ideal for resellers.</p>
                <div class="auction-meta">
                    <span class="end-date">Ends: 2025-11-30</span>
                    <span class="price">Current: <strong>£1,250</strong></span>
                </div>
                <div class="mt-3"><a href="{{ url('/auctions/101') }}" class="text-blue-600">View auction</a></div>
            </div>
        </article>

        <article class="auction-card">
            <figure class="auction-thumb" role="img" aria-label="Office Furniture thumbnail">
                <svg width="400" height="240" viewBox="0 0 400 240" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                    <rect width="400" height="240" fill="#fff7ed" />
                    <text x="50%" y="50%" dominant-baseline="middle" text-anchor="middle" fill="#b45309" font-size="20">Lot 202</text>
                </svg>
            </figure>
            <div class="auction-body">
                <h3 class="auction-title">Lot 202 — Office Furniture</h3>
                <p class="muted">Pallets of desks, chairs and storage units. Collection only.</p>
                <div class="auction-meta">
                    <span class="end-date">Ends: 2025-12-07</span>
                    <span class="price">Current: <strong>£420</strong></span>
                </div>
                <div class="mt-3"><a href="{{ url('/auctions/202') }}" class="text-blue-600">View auction</a></div>
            </div>
        </article>

        <article class="auction-card">
            <figure class="auction-thumb" role="img" aria-label="Commercial Kitchen thumbnail">
                <svg width="400" height="240" viewBox="0 0 400 240" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                    <rect width="400" height="240" fill="#ecfccb" />
                    <text x="50%" y="50%" dominant-baseline="middle" text-anchor="middle" fill="#365314" font-size="20">Lot 303</text>
                </svg>
            </figure>
            <div class="auction-body">
                <h3 class="auction-title">Lot 303 — Commercial Kitchen</h3>
                <p class="muted">Ovens, fridges and prep tables — sold as seen.</p>
                <div class="auction-meta">
                    <span class="end-date">Ends: 2025-12-15</span>
                    <span class="price">Current: <strong>£3,400</strong></span>
                </div>
                <div class="mt-3"><a href="{{ url('/auctions/303') }}" class="text-blue-600">View auction</a></div>
            </div>
        </article>
    </div>
</section>

<!-- Accessibility & How it helps -->
<section class="project-container">
    <div class="project-card">
        <h2 class="section-title">Accessible by design</h2>
        <p class="muted">OpenLot is built with accessibility in mind: clear language, visible fee breakdowns, high-contrast color choices and keyboard-friendly controls to help new users bid with confidence.</p>

        <div class="grid-features">
            <div>
                <h4>Guided bidding</h4>
                <p class="muted">Step-by-step guidance helps first-time bidders place their first bid without confusion.</p>
            </div>
            <div>
                <h4>Fee transparency</h4>
                <p class="muted">We show exact commission and additional costs before you confirm a bid.</p>
            </div>
            <div>
                <h4>Clear collection instructions</h4>
                <p class="muted">Collection windows, contact details and pickup instructions are shown on every lot.</p>
            </div>
        </div>
    </div>
</section>

@endsection
