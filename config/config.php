<?php
$CONFIG = array (
  'dbtype' => 'mysql',
  'dbname' => getenv('MYSQL_DATABASE'),
  'dbhost' => getenv('MYSQL_HOST'),
  'dbuser' => getenv('MYSQL_USER'),
  'dbpassword' => getenv('MYSQL_PASSWORD'),
  'dbtableprefix' => 'oc_',
  'installed' => true,

  // S3 설정
  'objectstore' => array(
    'class' => 'OC\\Files\\ObjectStore\\S3',
    'arguments' => array(
      'bucket' => getenv('S3_BUCKET_NAME'),
      'autocreate' => true,
      'key'    => getenv('AWS_ACCESS_KEY_ID'),
      'secret' => getenv('AWS_SECRET_ACCESS_KEY'),
      'region' => 'ap-northeast-2',
      'use_ssl' => true,
      'use_path_style' => true,
      'hostname' => 's3.ap-northeast-2.amazonaws.com'
    ),
  ),
);

