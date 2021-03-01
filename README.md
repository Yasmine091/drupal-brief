# Drupal starter

## Requirements

1. Install [Composer](https://getcomposer.org/doc/00-intro.md#installation-linux-unix-osx).

2. Install [Drush Launcher](https://github.com/drush-ops/drush-launcher)

## Install

1. Run command : `composer install`
2. Replace `web/sites/default/settings.php` file content with `web/sites/default/settings.example.php` file content
3. Copy `.env.example` file and rename it to `.env`
4. Add your database credentials and your project URL to this .env file (you can leave MYSQL_PORT empty)
5. Run the follwing command :  `drush sql-cli < data/base.sql`