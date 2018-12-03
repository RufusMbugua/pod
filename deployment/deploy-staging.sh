#!/bin/sh
# SSH into ther server
ssh rufusmbugua.com

# Change Directory
cd /var/www/icarus

# Update Codebase
git pull origin develop

# Update Dependencies
composer install