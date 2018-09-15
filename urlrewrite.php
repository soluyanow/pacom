<?php
$arUrlRewrite=array (
  0 => 
  array (
    'CONDITION' => '#^/online/([\\.\\-0-9a-zA-Z]+)(/?)([^/]*)#',
    'RULE' => 'alias=$1',
    'ID' => '',
    'PATH' => '/desktop_app/router.php',
    'SORT' => 100,
  ),
  1 => 
  array (
    'CONDITION' => '#^/bitrix/services/ymarket/#',
    'RULE' => '',
    'ID' => '',
    'PATH' => '/bitrix/services/ymarket/index.php',
    'SORT' => 100,
  ),
  2 => 
  array (
    'CONDITION' => '#^/online/(/?)([^/]*)#',
    'RULE' => '',
    'ID' => '',
    'PATH' => '/desktop_app/router.php',
    'SORT' => 100,
  ),
  3 => 
  array (
    'CONDITION' => '#^/personal/order/#',
    'RULE' => '',
    'ID' => 'bitrix:sale.personal.order',
    'PATH' => '/personal/order/index.php',
    'SORT' => 100,
  ),
  4 => 
  array (
    'CONDITION' => '#^/collection/#',
    'RULE' => '',
    'ID' => 'bitrix:news',
    'PATH' => '/collection/index.php',
    'SORT' => 100,
  ),
  5 => 
  array (
    'CONDITION' => '#^/services/#',
    'RULE' => '',
    'ID' => 'bitrix:news',
    'PATH' => '/services/index.php',
    'SORT' => 100,
  ),
  6 => 
  array (
    'CONDITION' => '#^/catalog/#',
    'RULE' => '',
    'ID' => 'bitrix:catalog',
    'PATH' => '/catalog/index.php',
    'SORT' => 100,
  ),
  7 => 
  array (
    'CONDITION' => '#^/stores/#',
    'RULE' => '',
    'ID' => 'bitrix:catalog.store',
    'PATH' => '/stores/index.php',
    'SORT' => 100,
  ),
  8 => 
  array (
    'CONDITION' => '#^/survey/#',
    'RULE' => '',
    'ID' => 'bitrix:news',
    'PATH' => '/survey/index.php',
    'SORT' => 100,
  ),
  9 => 
  array (
    'CONDITION' => '#^/brands/#',
    'RULE' => '',
    'ID' => 'bitrix:news',
    'PATH' => '/brands/index.php',
    'SORT' => 100,
  ),
  10 => 
  array (
    'CONDITION' => '#^/store/#',
    'RULE' => '',
    'ID' => 'bitrix:catalog.store',
    'PATH' => '/store/index.php',
    'SORT' => 100,
  ),
  11 => 
  array (
    'CONDITION' => '#^/stock/#',
    'RULE' => '',
    'ID' => 'bitrix:news',
    'PATH' => '/stock/index.php',
    'SORT' => 100,
  ),
  12 => 
  array (
    'CONDITION' => '#^/news/#',
    'RULE' => '',
    'ID' => 'bitrix:news',
    'PATH' => '/news/index.php',
    'SORT' => 100,
  ),
);
