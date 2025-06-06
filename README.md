# Quality Portal

![Laravel](https://img.shields.io/badge/Laravel-11.x-red?logo=laravel)
![Filament](https://img.shields.io/badge/Filament-3.x-yellow?logo=laravel)
![Tailwind CSS](https://img.shields.io/badge/Tailwind_CSS-3.x-38B2AC?logo=tailwind-css)
![Status](https://img.shields.io/badge/status-active-brightgreen)

## 📌 About

**Quality Portal** is a full-stack web application developed for **Qualitest Engenharia**, a local engineering company in my hometown. The project aims to streamline content management, provide secure client access to documents, and offer a responsive, user-friendly experience for both administrators and users.

The system includes:

- Public-facing informational pages
- A powerful admin panel built with **Filament**
- User authentication and management
- Document uploads for authenticated clients
- Fully responsive layout with **Tailwind CSS**

---

## 🚀 Tools

- [Laravel 10](https://laravel.com/)
- [Filament Admin Panel](https://filamentphp.com/)
- [Tailwind CSS](https://tailwindcss.com/)
- Alpine.js
- PHP 8.2+

---

## ⚙️ Features

- ☑️ User authentication (login, logout, password reset)
- ☑️ Admin dashboard with Filament
- ☑️ CRUD for institutional content and pages
- ☑️ Secure document upload and sharing for clients
- ☑️ Responsive design for mobile and desktop
- ☑️ Blog/news section

---

## 🧪 Setup

```bash
# Clone the repository
git clone https://github.com/your-username/quality-portal.git

# Navigate into the directory
cd quality-portal

# Install backend dependencies
composer install

# Install frontend dependencies
npm install && npm run dev

# Copy and configure environment variables
cp .env.example .env
php artisan key:generate

# Set up your database credentials in the .env file

# Run migrations
php artisan migrate

# Start the local server
php artisan serve
