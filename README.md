# Drupal starter

## Requirements

1. Install [Composer](https://getcomposer.org/doc/00-intro.md#installation-linux-unix-osx).

2. Install [Drush Launcher](https://github.com/drush-ops/drush-launcher)

## Install

1. Copy `web/sites/default/settings.example.php` file and rename it to `web/sites/default/settings.php`
2. Copy `.env.example` file and rename it to `.env`
3. Add your database credentials and your project URL
4. Run the follwing command :  
`drush sql-cli < data/base.sql`