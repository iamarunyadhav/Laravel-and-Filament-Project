# Filament Project

## 📌 Introduction
This is a Laravel-based project utilizing Filament for building an admin panel with Livewire, Alpine.js, and Tailwind CSS. It includes CRUD functionalities, API integration.

## ⚙️ System Requirements
Before setting up the project, ensure your system meets the following requirements:

- **PHP:** 8.3 or higher
- **Composer:** Latest version
- **Laravel:** 11+
- **Database:** SQLite/MySQL/PostgreSQL
- **Node.js & NPM:** Required for frontend asset compilation

## 🛠️ Getting Started
These instructions will guide you through setting up and running the project on your local machine for development and testing purposes.

### 📌 Prerequisites
Ensure you have the following installed:

- Git
- PHP (>= 8.3)
- Composer
- SQLite/MySQL/PostgreSQL
- Node.js & NPM (for asset compilation)

### 💚 Cloning the Repository
Clone this repository to your local machine and navigate into the project directory:

```sh
git clone https://github.com/your-username/filament-project.git
cd filament-project
```

### ⚙️ Project Setup

#### 1️⃣ Configure the Database
- If using SQLite:
  ```sh
  touch database/database.sqlite
  ```
- If using MySQL/PostgreSQL, create a database manually.

#### 2️⃣ Set Up Environment Variables
Copy the `.env.example` file and rename it to `.env`:

```sh
cp .env.example .env
```
Open `.env` and update the database credentials:

```env
DB_CONNECTION=mysql  # Change to sqlite, pgsql if necessary
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=filament_project  # Replace with your database name
DB_USERNAME=root   # Your MySQL username
DB_PASSWORD=       # Your MySQL password (leave blank if no password)
```

#### 3️⃣ Install Dependencies
```sh
composer install
npm install && npm run build
```

#### 4️⃣ Generate Application Key
```sh
php artisan key:generate
```

#### 5️⃣ Migrate the Database
```sh
php artisan migrate
or
php artisan migrate:fresh
```

#### 6️⃣ Seed Sample Data (Optional)
```sh
php artisan db:seed
```

## 🚀 Running the Application
Start the Laravel Server:
```sh
php artisan serve
```
By default, the application will be available at:
check in local
[http://127.0.0.1:8000/admin/login](http://127.0.0.1:8000/admin/login)

https://filament-app-main-qz4ucw.laravel.cloud/admin/login (ongoing deployment with some fixing)

### 🛠️ Setting Up Filament
If you haven’t installed Filament yet, run:
```sh
php artisan make:filament-user
```

#### 📌 Customizing Theme
To install a custom theme:
```sh
php artisan filament:install
npm install && npm run build
```


## 📄 Useful Artisan Commands
| Command | Description |
|---------|-------------|
| `php artisan migrate:refresh` | Refresh migrations (drop & re-run) |
| `php artisan optimize:clear` | Clear cache, config, routes, and views |
| `php artisan cache:clear` | Clear application cache |
| `php artisan make:filament-user` | Create an admin user for Filament |


## 📜 API Documentation
For API endpoints and usage instructions, refer to Postman documentation or OpenAPI specs.

## 👨‍💻 Author
**Arunpragash Alwar**

---

_This README was auto-generated for Filament project setup and deployment._

