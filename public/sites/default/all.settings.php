<?php

/**
 * @file
 * Contains site specific overrides.
 */
$config['openid_connect.client.tunnistamo']['settings']['ad_roles'] = [
  [
    'ad_role' => 'Drupal_Helfi_kaupunkitaso_paakayttajat',
    'roles' => ['admin'],
  ],
  [
    'ad_role' => 'Drupal_Helfi_Asuminen_sisallontuottajat_laaja',
    'roles' => ['editor'],
  ],
  [
    'ad_role' => 'Drupal_Helfi_Asuminen_sisallontuottajat_suppea',
    'roles' => ['content_producer'],
  ],
];

$additionalEnvVars = [
  'AZURE_BLOB_STORAGE_SAS_TOKEN|BLOBSTORAGE_SAS_TOKEN',
  'AZURE_BLOB_STORAGE_NAME',
  'AZURE_BLOB_STORAGE_CONTAINER',
  'DRUPAL_VARNISH_HOST',
  'DRUPAL_VARNISH_PORT',
  'PROJECT_NAME',
  'DRUPAL_API_ACCOUNTS',
  'DRUPAL_VAULT_ACCOUNTS',
  'REDIS_HOST',
  'REDIS_PORT',
  'REDIS_PASSWORD',
  'TUNNISTAMO_CLIENT_ID',
  'TUNNISTAMO_CLIENT_SECRET',
  'TUNNISTAMO_ENVIRONMENT_URL',
  'SENTRY_DSN',
  'SENTRY_ENVIRONMENT',
];

foreach ($additionalEnvVars as $var) {
  $preflight_checks['environmentVariables'][] = $var;
}
