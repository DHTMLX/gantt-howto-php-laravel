# dhtmlxGantt with Laravel backend

Implementing backend for dhtmlxGantt using [Laravel](https://laravel.com/) framework.

### Requirements

- PHP 8.2 or higher
- [Composer](https://getcomposer.org/)
- MySQL 5.7+

### Setup

1. Install dependencies: `composer install`
2. Copy `.env.example` to `.env` (if not exists)
3. Create database and update connection settings in `.env`:
   ```
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=your_database_name
   DB_USERNAME=your_username
   DB_PASSWORD=your_password
   ```
4. Generate application key: `php artisan key:generate`
5. Create and populate tables: `php artisan migrate --seed`

### Run

- Start development server: `php artisan serve`
- Open browser at `http://127.0.0.1:8000`

### Related resources

[Complete tutorial](https://docs.dhtmlx.com/gantt/integrations/php/howtostart-php-laravel/)

[DHTMLX Gantt product page](https://dhtmlx.com/docs/products/dhtmlxGantt/)

[Documentation](https://docs.dhtmlx.com/gantt/)

[Blog](https://dhtmlx.com/blog/)

[Forum](https://forum.dhtmlx.com/)
