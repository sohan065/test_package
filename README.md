### Installation

To install this package, use the following command:

```bash
composer require sohan065/crud

```

To published the package assets in the Laravel project :

```bash
php artisan vendor:publish --tag=public --force

```

### Database Migration

Then run the database migration command to create the tables.

```bash
php artisan migrate
```

Run the server.

```bash
php artisan serve
```

It will serve the app on `http://127.0.0.1:8000` by default.

### Dashboard Access

Then add `dashboard` after your localhost `http://127.0.0.1:8000`

```bash
http://127.0.0.1:8000/dashboard
```
