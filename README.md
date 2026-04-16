# ORCA -- ORCASIA Website

Official Repository: https://github.com/drona-shetty/ORCA

------------------------------------------------------------------------

## 📌 Overview

This repository contains the Laravel-based codebase for the official
ORCA (Organisation for Research on China and Asia) website.\
The platform powers research publications, articles, and dynamic content
for ORCASIA.org.

------------------------------------------------------------------------

## 🧱 Tech Stack

-   Backend: Laravel (PHP Framework)
-   Frontend: Blade Templating Engine
-   Database: MySQL / MariaDB
-   Asset Bundling: Laravel Mix / Vite
-   Server: Apache / Nginx
-   Deployment: AWS EC2 (Production)
-   Version Control: Git

------------------------------------------------------------------------

## 📂 Project Structure

app/ → Application logic (Controllers, Models, Middleware)\
bootstrap/ → Framework bootstrap files\
config/ → Configuration files\
database/ → Migrations & seeders\
public/ → Public assets (images, CSS, JS)\
resources/views/ → Blade templates\
routes/ → Web & API routes\
storage/ → Logs & cache\
tests/ → Unit & feature tests

------------------------------------------------------------------------

## 🚀 Installation Guide

### 1️⃣ Clone Repository

git clone https://github.com/drona-shetty/ORCA.git\
cd ORCA

### 2️⃣ Install Dependencies

composer install\
npm install

### 3️⃣ Setup Environment

cp .env.example .env

Update database and app configuration inside `.env`.

### 4️⃣ Generate Application Key

php artisan key:generate

### 5️⃣ Run Migrations

php artisan migrate

(Optional)

php artisan db:seed

### 6️⃣ Build Assets

npm run dev

For production:

npm run build

### 7️⃣ Run Application

php artisan serve

Visit: http://127.0.0.1:8000

------------------------------------------------------------------------

## ⚙️ Optimization Commands

php artisan optimize:clear\
php artisan config:cache\
php artisan route:cache\
php artisan view:cache

------------------------------------------------------------------------

## 🔐 Environment Variables Example

APP_NAME=ORCA\
APP_ENV=production\
APP_DEBUG=false\
APP_URL=https://orcasia.org

DB_CONNECTION=mysql\
DB_HOST=127.0.0.1\
DB_PORT=3306\
DB_DATABASE=orca\
DB_USERNAME=root\
DB_PASSWORD=

------------------------------------------------------------------------

## 🖼️ Media Handling

-   Images stored in `public/images/`
-   WebP optimization supported
-   Large PDFs should be stored in cloud storage (e.g., AWS S3)

------------------------------------------------------------------------

## 🧪 Testing

Run PHPUnit tests:

vendor/bin/phpunit

------------------------------------------------------------------------

## 📦 Deployment Notes

1.  Pull latest code on server\
2.  Install optimized dependencies:

composer install --no-dev --optimize-autoloader

3.  Cache configuration:

php artisan optimize

4.  Ensure `storage/` and `bootstrap/cache/` are writable.

------------------------------------------------------------------------

## 👨‍💻 Maintainer

Rakesh\
Web Developer

------------------------------------------------------------------------

## 📄 License

This project is proprietary and maintained by ORCA.\
Unauthorized distribution is prohibited.
