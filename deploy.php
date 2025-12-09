<?php

namespace Hypernode\DeployConfiguration;

$configuration = new ApplicationTemplate\Magento2(['en_US']);

$productionStage = $configuration->addStage('production', 'test');
$productionStage->addServer('hntestjvisser3.hypernode.io');

return $configuration;
