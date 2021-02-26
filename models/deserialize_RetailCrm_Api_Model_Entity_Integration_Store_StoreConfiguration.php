<?php

function deserialize_RetailCrm_Api_Model_Entity_Integration_Store_StoreConfiguration(array $jsonData): RetailCrm\Api\Model\Entity\Integration\Store\StoreConfiguration
{
    
$model = new RetailCrm\Api\Model\Entity\Integration\Store\StoreConfiguration();
if (isset($jsonData['actions'])) {
    $model->actions = [];
foreach (array_keys($jsonData['actions']) as $index20) {
    
$model->actions[$index20] = new RetailCrm\Api\Model\Entity\Integration\Store\Action();
if (isset($jsonData['actions'][$index20]['code'])) {
    $model->actions[$index20]->code = $jsonData['actions'][$index20]['code'];

}
if (isset($jsonData['actions'][$index20]['url'])) {
    $model->actions[$index20]->url = $jsonData['actions'][$index20]['url'];

}
if (isset($jsonData['actions'][$index20]['callPoints'])) {
    $model->actions[$index20]->callPoints = $jsonData['actions'][$index20]['callPoints'];

}


}

}



    return $model;
}
