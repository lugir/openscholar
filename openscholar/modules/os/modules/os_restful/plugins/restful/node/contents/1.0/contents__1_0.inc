<?php

$plugin = array(
  'label' => t('Contents'),
  'resource' => 'contents',
  'name' => 'contents__1_0',
  'entity_type' => 'node',
  'bundle' => FALSE,
  'description' => t('Expose all bundles except personal'),
  'class' => 'ContentsRestfulBase',
  'authentication_types' => TRUE,
  'authentication_optional' => TRUE,
);
