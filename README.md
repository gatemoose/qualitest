# Overview

Quality Portal is a full-stack web application developed for Qualitest Engenharia, a engineering company. The project aims to streamline content management, provide secure client access to documents, and offer a responsive, user-friendly experience for both administrators and users.

This website is operated by Qualitest Engenharia and is available at: [qualitestengenharia.com.br](https://qualitestengenharia.com.br).

# Features

- User auth for both admin and clients, including login, logout, password reset
- Admin dashboard with Filament
- User-friendly CMS (Content Management System)
- Secure document sharing with clients
- Responsive design for mobile and desktop
- Acessible blog/news section

# Tools

- Laravel 11
- Livewire (for SPA-like feel) 
- Filament Admin Panel
- Tailwind CSS

# Setup

Follow the steps:

```bash
# Clone the repository
git clone https://github.com/gatemoose/qualitest.git
cd qualitest

# Install dependencies
composer install
npm install && npm run dev

# Configure environment
cp .env.example .env
php artisan key:generate

# Using SQLite DB by default

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
