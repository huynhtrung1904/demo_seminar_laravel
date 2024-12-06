# Laravel Project - Demo Guide

This README provides a comprehensive guide for setting up, running, and demonstrating key Laravel features including MVC architecture, routing, Blade templates, authentication, session handling, migrations, and form validation.

---

## Prerequisites

1. **System Requirements**:
   - PHP >= 8.1
   - Composer
   - Node.js and npm
   - Database (e.g., MySQL or SQLite)

2. **Laravel Installation**:
   Ensure Laravel is installed globally:
   ```bash
   composer global require laravel/installer
   ```

---

## Installation

1. Clone the repository:
   ```bash
   git clone <repository_url>
   cd <project_directory>
   ```

2. Install PHP dependencies:
   ```bash
   composer install
   ```

3. Install Node.js dependencies:
   ```bash
   npm install
   ```

4. Configure `.env` file:
   - Copy the example environment file:
     ```bash
     cp .env.example .env
     ```
   - Set database credentials and other environment-specific configurations in the `.env` file.

5. Generate application key:
   ```bash
   php artisan key:generate
   ```

6. Run migrations:
   ```bash
   php artisan migrate
   ```

---

## Running the Application

1. Start the development server:
   ```bash
   php artisan serve
   ```

2. Compile frontend assets:
   ```bash
   npm run dev
   ```

3. Access the application in your browser at:
   ```
   http://localhost:8000
   ```

---

## Demonstration Highlights

### 1. **MVC Architecture**
   - **Model**: Interacts with the database (e.g., `User` model).
   - **View**: Blade templates for rendering UI.
   - **Controller**: Handles logic (e.g., `AuthController` for authentication).

   Example:
   ```php
   Route::get('/', [HomeController::class, 'index']);
   ```

### 2. **Routing**
   - **Basic Route**:
     ```php
     Route::get('/welcome', function () {
         return view('welcome');
     });
     ```
   - **Route Group**:
     ```php
     Route::middleware('auth')->group(function () {
         Route::get('/dashboard', [DashboardController::class, 'index']);
     });
     ```
   - **Middleware**:
     Protect routes with middleware (e.g., `auth` for authentication).

### 3. **Blade Templates**
   - Extend layouts:
     ```php
     @extends('layouts.app')
     @section('content')
         <h1>Welcome</h1>
     @endsection
     ```
   - Use components and slots.

### 4. **Authentication and Authorization**
   - Install Laravel Breeze:
     ```bash
     composer require laravel/breeze --dev
     php artisan breeze:install
     npm install && npm run dev
     php artisan migrate
     ```
   - Demo features:
     - Login and Register.
     - Route protection using middleware `auth`.

### 5. **Session Handling**
   - Demonstrate session usage for storing temporary data:
     ```php
     session(['key' => 'value']);
     $value = session('key');
     ```

### 6. **Migration**
   - Create and run migrations:
     ```bash
     php artisan make:migration create_posts_table
     php artisan migrate
     ```
   - Rollback migrations:
     ```bash
     php artisan migrate:rollback
     ```

   - Query examples:
     ```php
     $users = User::all();
     $user = User::find(1);
     User::where('email', 'like', '%@example.com')->get();
     ```

### 7. **Form Handling and Validation**
   - Create a form:
     ```html
     <form method="POST" action="{{ route('submit') }}">
         @csrf
         <input type="text" name="name" required>
         <button type="submit">Submit</button>
     </form>
     ```
   - Validate data in a controller:
     ```php
     $request->validate([
         'name' => 'required|string|max:255',
     ]);
     ```

---

## Additional Commands

- Clear application cache:
  ```bash
  php artisan cache:clear
  ```
- Reset database:
  ```bash
  php artisan migrate:fresh
  ```

---

## Notes

- Use `php artisan` commands to explore available functionalities.
- Refer to Laravel documentation for deeper insights.

---

## Conclusion
This project demonstrates core Laravel features in a structured, MVC-compliant way. Follow the steps above to set up and showcase the functionality effectively.
