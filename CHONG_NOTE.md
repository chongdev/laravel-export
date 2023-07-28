

``` sh
# https://docs.laravel-excel.com/3.1/getting-started/installation.html
composer require maatwebsite/excel
php artisan vendor:publish --provider="Maatwebsite\Excel\ExcelServiceProvider" --tag=config

# https://laravel-livewire.com/docs/2.x/installation
composer require livewire/livewire
php artisan livewire:publish --config     
php artisan livewire:publish --assets

# Job Batching
php artisan queue:batches-table