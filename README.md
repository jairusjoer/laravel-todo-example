# Laravel Todo Example

> [Jairus Joer](mailto:hello@jairusjoer.com), 2024

> The texts in this README were partially generated by
> artificial intelligence and corrected and revised.

## Setup

> ***To skip the whole setup process, just run `npm run quickstart` 🚀***

### 1. Environment

Create a copy of the `.env.example` file and rename it to `.env`.

Configure the application settings in the
`.env` file to match your requirements.

### 2. Dependencies

Install the necessary dependencies to run the project locally
using the package managers of your choice:

```bash
npm install
```

```bash
composer require
```

### 3. Artisan

Add an application encryption key to your project's `.env` file by èxecuting the `key:generate` Artisan command:

```bash
php artisan key:generate
```

To run all outstanding migrations, execute the `migrate` Artisan command:

```bash
php artisan migrate
```

To seed the database, execute the `db:seed` Artisan command:

```bash
php artisan db:seed
```

## Develop

To start the development server, simply run the following commands:

```bash
npm run dev
```

```bash
php artisan serve
```

## Commands

| Command                   | Action                                           |
| :------------------------ | :----------------------------------------------- |
| `npm run quickstart`      | *Performs all setup and migration steps*         |
| `npm run dev`             | *Starts local development server*                |
| `npm run build`           | *Builds your production site*                    |
| `npm run prettier`        | *Format files witihn `resources/`*               |

## Resources

Please feel free to refer to the following documentation
for more information and guidance:

-   [TailwindCSS](https://tailwindcss.com/docs/utility-first)
-   [Alpine.js](https://alpinejs.dev/start-here)
-   [Laravel](https://laravel.com/docs)
    -   [Folio](https://laravel.com/docs/11.x/folio)
-   [Livewire](https://livewire.laravel.com/docs)
    -   [Volt](https://livewire.laravel.com/docs/volt)
