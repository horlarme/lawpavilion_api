#Law Pavilion

## Installation
```shell
composer install
```
Copy and configure environment
```shell
cp .env.example .env
```
Link storage to public folder
```shell
cp .env.example .env
```
Run application
```shell
php artisan serve
```
Run Scheduler for profile reminder and other jobs/commands assigned
```shell
php artisan schedule:run
```
