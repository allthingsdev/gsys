# gsys

id db is postgres the in pg_hba.conf make all auth. md5 (incl. for ipv6)
# Install Doctrine and other dependencies ..run from root folder**/
php config/composer.phar install -d lib/

# Generating entities in Doctrine..run from root folder**/
php lib/vendor/bin/doctrine orm:generate-entities app/

## Generating entities in Doctrine..run from root folder**/
php vendor/bin/doctrine orm:schema-tool:update --force
