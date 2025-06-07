# Overview

Quality Portal is a full-stack web application developed for Qualitest Engenharia, a engineering company. The project aims to streamline content management, provide secure client access to documents, and offer a responsive, user-friendly experience for both administrators and users.

This website is operated by Qualitest Engenharia and is available at: [qualitestengenharia.com.br](https://qualitestengenharia.com.br).

# Features

- User authentication (login, logout, password reset)
- Admin dashboard with Filament
- CRUD for institutional content and pages
- Secure document upload and sharing for clients
- Responsive design for mobile and desktop
- Blog/news section

# Tools

- Laravel 11
- Livewire
- Filament Admin Panel
- Tailwind CSS
- Alpine JS
- PHP

# Setup

Follow the steps:

```bash
# Clone the repository
git clone https://github.com/gatemoose/qualitest

# Navigate into the directory
cd qualitest

# Install dependencies
composer install
npm install && npm run dev

# Configure environment variables
cp .env.example .env
php artisan key:generate

# Using SQLite as database by default
# You don't need to provide credentials in the .env file

# Run migrations
php artisan migrate

# Start the local server
php artisan serve
```

# Usage

Go to `http://127.0.0.1:8000` to view the website.

To access the Filament Admin Panel, run `php artisan make:filament-user` and follow the steps. Then go to `http://127.0.0.1:8000/admin` and enter your credentials.

# License

This project is distributed under the MIT License.
