# Disclaimer
Trying to redo the Reception system I created 2 years ago now using Laravel.
I chose to use tailwind to learn (I'm getting my ass kicked).

# Laravel Project Setup

This guide will help you set up a Laravel project with Tailwind CSS and Vite for development. Follow the steps below to get started.

## Prerequisites

Ensure you have the following installed on your system:

- PHP (>= 8.2)
- Composer
- Node.js (>= 14.x)
- NPM (comes with Node.js)

## Installation Steps

1. **Clone the Repository**

   ```bash
   git clone <repository-url>
   cd <repository-directory>
   ```

2. **Install PHP Dependencies**

   Use Composer to install the necessary PHP dependencies:

   ```bash
   composer install
   ```

3. **Create Environment File**

   Copy the example environment file and generate an application key:

   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

4. **Configure the Environment**

   Update the `.env` file with your database and other environment-specific configurations.

5. **Install NPM Dependencies**

   Use NPM to install the necessary Node.js dependencies:

   ```bash
   npm install
   ```

6. **Build Assets**

   Compile your CSS and JavaScript assets for development:

   ```bash
   npm run dev
   ```

   For production builds, use:

   ```bash
   npm run build
   ```

7. **Run Migrations**

   Set up your database by running the migrations:

   ```bash
   php artisan migrate
   ```

8. **Start the Development Server**

   Use Artisan to start the development server:

   ```bash
   php artisan serve
   ```

   Your application should now be accessible at `http://localhost:8000`.

## Using Tailwind CSS

Tailwind CSS is already configured with Vite. You can add your custom styles in `resources/css/app.css` and they will be automatically compiled.

## Running in Development

To continuously compile your assets while developing, keep the following command running in your terminal:

```bash
npm run dev
```

## Conclusion

You're all set! You can now start developing your Laravel application with Tailwind CSS. If you encounter any issues, refer to the Laravel and Tailwind CSS documentation for additional guidance.

