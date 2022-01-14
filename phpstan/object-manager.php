<?php declare(strict_types=1);

$config = new \Doctrine\ORM\Configuration();
$config->setProxyDir(__DIR__ . '/proxies');
$config->setProxyNamespace('Proxies');
$config->setAutoGenerateProxyClasses(true);
$config->setMetadataDriverImpl(new \Doctrine\ORM\Mapping\Driver\AttributeDriver([__DIR__ . '/src/Entity']));

$connection = [
    'driver' => 'pdo_sqlite',
    'memory' => true,
];

return \Doctrine\ORM\EntityManager::create($connection, $config);
