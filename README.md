# Earthquake Tracker

A Laravel 10 web application for recording and tracking earthquake and disaster damage reports across human casualties, infrastructure, and livestock.

## Features

- **Authentication & User Profiles**: Built with Laravel Breeze (registration, login, password reset, email verification, and profile management).
- **Disaster Damage CRUD**: Create, view, edit, and soft-delete incident reports.
- **Categorized Impact Tracking**:
  - **Incident Details**: Disaster type, incident count, incident date, and remarks.
  - **Human Impact**: Male, female, and other casualties/affected individuals with aggregated totals.
  - **Infrastructure Damage**: Houses, hospitals, schools, office buildings, and other structures.
  - **Livestock Losses**: Cows, buffaloes, goats/sheep, and hens/chickens.
- **Responsive UI**: Styled with Tailwind CSS, Alpine.js, and Blade components (with dark mode support).
- **Docker Ready**: Includes a `Dockerfile` (`nginx-php-fpm`) and deployment script for containerized hosting (e.g., Render).

## Tech Stack

- **Backend**: PHP 8.1+, Laravel 10
- **Frontend**: Blade, Tailwind CSS, Alpine.js, Vite
- **Auth**: Laravel Breeze & Sanctum
- **Database**: MySQL / PostgreSQL / SQLite (via Eloquent ORM)

## Getting Started

```bash
# 1. Clone the repository
git clone https://github.com/SafalFrom2050/earthquake-tracker.git
cd earthquake-tracker

# 2. Install PHP & JS dependencies
composer install
npm install

# 3. Configure environment
cp .env.example .env
php artisan key:generate

# 4. Run migrations and seed sample data
php artisan migrate --seed

# 5. Start the development servers
php artisan serve
npm run dev
```

### Default Seeded Test User

Running `php artisan db:seed` creates 50 sample earthquake records and a test account:

- **Email**: `aa@aa.aa`
- **Password**: `password`

## License

Open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
