<?php
$CONFIG = array (
  'htaccess.RewriteBase' => '/',
  'memcache.local' => '\\OC\\Memcache\\APCu',
  'apps_paths' => 
  array (
    0 => 
    array (
      'path' => '/var/www/html/apps',
      'url' => '/apps',
      'writable' => false,
    ),
    1 => 
    array (
      'path' => '/var/www/html/custom_apps',
      'url' => '/custom_apps',
      'writable' => true,
    ),
  ),
  'memcache.distributed' => '\\OC\\Memcache\\Redis',
  'memcache.locking' => '\\OC\\Memcache\\Redis',
  'redis' => 
  array (
    'host' => 'redis',
    'password' => '',
    'port' => 6379,
  ),
  'passwordsalt' => 'niX0YS0eMGttRVyEch0YRf+gl0G9Wl',
  'secret' => '1G9Un99h4wSEgoVfnWAXPL9kwF/7aIIAk8i8AxCwfQVxMjjM',
  'trusted_domains' => 
  array (
    0 => 'localhost',
    1 => 'cloud.bdura.me',
  ),
  'datadirectory' => '/var/www/html/data',
  'dbtype' => 'pgsql',
  'version' => '22.2.0.2',
  'overwrite.cli.url' => 'http://localhost',
  'dbname' => 'nextcloud',
  'dbhost' => 'database:5432',
  'dbport' => '',
  'dbtableprefix' => 'oc_',
  'dbuser' => 'nextcloud',
  'dbpassword' => 'nextcloud-postgres',
  'installed' => true,
  'instanceid' => 'och0pdfl5ekg',
  'overwrite.cli.url' => 'https://cloud.bdura.me',
  'overwriteprotocol' => 'https',
  'overwritehost' => 'cloud.bdura.me',
);