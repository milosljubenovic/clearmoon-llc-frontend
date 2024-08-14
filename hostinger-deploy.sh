
# Update the composer if .lock file is not present otherwise install the dependencies
if [ ! -f composer.lock ]; then
    php ~/composer.phar update
else
    php ~/composer.phar install
fi

php artisan key:generate --ansi
php artisan storage:link

# link the storage folder
php artisan storage:link

# public_html symlink
ln -s public public_html

ls -la