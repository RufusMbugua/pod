#!/bin/sh

# Change Directory
cd /var/www/icarus

# Update Codebase
git pull origin develop

# Update Dependencies
composer install