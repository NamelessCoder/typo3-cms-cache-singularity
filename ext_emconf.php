<?php
$EM_CONF[$_EXTKEY] = array (
  'title' => 'Cache Singularity',
  'description' => 'Squashes all cache flushing items into one single menu item - useful for development, in particular since TYPO3 triggers cache flushing without a popup menu if there is only a single item in the menu.',
  'category' => 'misc',
  'author' => 'Claus Due',
  'author_email' => 'claus@namelesscoder.net',
  'author_company' => '',
  'shy' => '',
  'dependencies' => '',
  'conflicts' => '',
  'priority' => 'bottom',
  'module' => '',
  'state' => 'stable',
  'internal' => '',
  'uploadfolder' => 0,
  'createDirs' => '',
  'modify_tables' => '',
  'clearCacheOnLoad' => 0,
  'lockType' => '',
  'version' => '1.1.0',
  'constraints' =>
  array (
    'depends' =>
    array (
      'php' => '7.0.0-7.1.99',
      'typo3' => '8.5.0-8.6.99',
    ),
    'conflicts' =>
    array (
    ),
    'suggests' =>
    array (
    ),
  ),
  'suggests' =>
  array (
  ),
  '_md5_values_when_last_written' => '',
);
