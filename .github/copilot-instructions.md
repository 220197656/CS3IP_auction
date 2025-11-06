## Project snapshot

- Framework: Laravel (app/), PHP ^8.2 (see `composer.json`).
- Frontend: Vite + Tailwind (see `package.json`, `resources/js`, `resources/css`).
- Tests: Pest / PHPUnit via `php artisan test` (see `phpunit.xml`).

## High-level architecture (what matters to an AI coder)

- Single monolithic Laravel app. Web routes live in `routes/web.php` (root renders `resources/views/home.blade.php`).
- Eloquent models in `app/Models` (example: `User.php`). Migrations are in `database/migrations` and seeders in `database/seeders`.
- Service providers live in `app/Providers` (most are standard; `AppServiceProvider.php` is present but empty). Customize there for app-wide bindings.
- Controllers live under `app/Http/Controllers` (thin by convention; there's a base `Controller.php`).
- Frontend assets use Vite; the app expects JS/CSS under `resources/js` and `resources/css` and uses the `laravel-vite-plugin`.

## Developer workflows & exact commands

Use these exact commands for typical tasks (run from the repo root):

Install and setup (creates `.env` and runs migrations + builds assets):
```bash
composer run setup
```

Run full local dev (server + queue worker + logs + vite):
```bash
composer run dev
```
This uses `concurrently` to run `php artisan serve`, `php artisan queue:listen`, `php artisan pail` and `npm run dev` — so expect multiple background processes.

Run only the frontend dev server (Vite):
```bash
npm run dev
```

Run tests (Pest/PHPUnit via Artisan):
```bash
composer run test
```
Note: `phpunit.xml` config uses an in-memory SQLite database for tests, so tests should not require an external DB once composer dependencies are installed.

Build production assets:
```bash
npm run build
```

Quick artisan shortcuts (useful in patches):
- `php artisan migrate` — apply migrations
- `php artisan migrate:fresh --seed` — reset DB and seed (use for reproducible local state)

## Project-specific patterns and examples

- Blade-first UI: Templates are under `resources/views`. Example: the home page is `resources/views/home.blade.php` and is wired from `routes/web.php`.
- Minimal controller surface: Controllers folder may be sparse; many pages render views directly from routes for this skeleton app.
- Model casting: `app/Models/User.php` uses typed casts (see `casts()` method). Follow this style when adding models.
- Composer scripts are used to orchestrate dev processes — prefer adding new dev orchestration there instead of ad-hoc scripts.

## Integration points & external expectations

- Environment: The app relies on `.env` values (typical Laravel). Composer scripts create `.env` from `.env.example` when missing.
- Queues: Development runs `php artisan queue:listen` in `composer dev`; background jobs are expected to work with the configured queue connection.
- No external API keys or cloud providers are visible in the repo — if adding integrations, add configuration to `config/*.php` and document new `.env` variables.

## What to keep in mind when editing code

- Small, focused changes preferred. Update migrations/seeders when changing the database schema.
- When adding routes, put them in `routes/web.php` (or `routes/api.php` if you add an API surface).
- When adding frontend assets, register them via Vite and place entry points under `resources/js`.

## Files to reference when coding or reviewing

- `composer.json` — exact PHP and package constraints and task scripts
- `package.json` — Vite/Tailwind setup and npm scripts
- `phpunit.xml` — test environment (sqlite in-memory)
- `routes/web.php` — routing entry points
- `resources/views/*.blade.php` — UI templates
- `app/Models/*`, `database/migrations/*`, `database/seeders/*` — data model and persistence

If anything looks incomplete or you need more examples (e.g., a representative controller, API routes, or existing tests), tell me which area to expand and I will update this guidance.
