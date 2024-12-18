<?php
$CONFIG = array (
  'apps_paths' => 
  array (
    0 => 
    array (
      'path' => '/snap/nextcloud/current/htdocs/apps',
      'url' => '/apps',
      'writable' => false,
    ),
    1 => 
    array (
      'path' => '/var/snap/nextcloud/current/nextcloud/extra-apps',
      'url' => '/extra-apps',
      'writable' => true,
    ),
  ),
  'supportedDatabases' => 
  array (
    0 => 'mysql',
  ),
  'memcache.locking' => '\\OC\\Memcache\\Redis',
  'memcache.local' => '\\OC\\Memcache\\Redis',
  'redis' => 
  array (
    'host' => '/tmp/sockets/redis.sock',
    'port' => 0,
  ),
  'log_type' => 'file',
  'logfile' => '/var/snap/nextcloud/current/logs/nextcloud.log',
  'logfilemode' => 416,
  'maintenance_window_start' => 1,
  'instanceid' => 'oczsr46wpms6',
  'passwordsalt' => 'LUZCCfgvqQS/wtITB1s9LO8Tc6AzvU',
  'secret' => 'AdTGccXYNhMasg1wf50dMTTLUxbkPEZETTPLPwdXJ17cXqpI',
  'trusted_domains' => 
  array (
    0 => 'cloud.recursosldc.es',
    1 => '192.168.0.31',
    2 => '168.119.165.188',
  ),
  'trusted_proxies' => ['168.119.165.188'],
  'datadirectory' => '/var/snap/nextcloud/common/nextcloud/data',
  'dbtype' => 'mysql',
  'version' => '30.0.4.1',
  'overwrite.cli.url' => 'https://cloud.recursosldc.es',
  'dbname' => 'nextcloud',
  'dbhost' => 'localhost:/tmp/sockets/mysql.sock',
  'dbport' => '',
  'dbtableprefix' => 'oc_',
  'mysql.utf8mb4' => true,
  'dbuser' => 'nextcloud',
  'dbpassword' => 'JP16n7EHMO5pR5spPTJ0kbLpoOyFoemnPh0h34P8Ftmit3s_gWq3ZqygKC8tmZqh',
  'installed' => true,
  'maintenance' => false,
  'loglevel' => 2,
  'overwriteprotocol' => 'https',
  'overwritehost' => 'cloud.recursosldc.es',
  'overwritecondaddr' => '^168\.119\.165\.188$',
);
