<?php
$CONFIG = array (
  'dbtype' => 'mysql',
  'dbname' => '<DB_NAME>',
  'dbhost' => '<RDS_ENDPOINT>',
  'dbport' => '',
  'dbtableprefix' => 'oc_',
  'mysql.utf8mb4' => true,
  'dbuser' => '<DB_USER>',
  'dbpassword' => '<DB_PASSWORD>',
  'installed' => true,
  'objectstore' => array(
    'class' => 'OC\\Files\\ObjectStore\\S3',
    'arguments' => array(
      'bucket' => '<S3_BUCKET_NAME>',
      'autocreate' => true,
      'key'    => '<AWS_ACCESS_KEY>',
      'secret' => '<AWS_SECRET_KEY>',
      'region' => 'ap-northeast-2',
      'use_ssl' => true,
      'use_path_style' => true,
    ),
  ),
);

