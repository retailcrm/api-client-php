<?php

function deserialize_RetailCrm_Api_Model_Entity_References_PriceType(array $jsonData): RetailCrm\Api\Model\Entity\References\PriceType
{
    
$model = new RetailCrm\Api\Model\Entity\References\PriceType();
if (isset($jsonData['id'])) {
    $model->id = $jsonData['id'];

}
if (isset($jsonData['code'])) {
    $model->code = $jsonData['code'];

}
if (isset($jsonData['name'])) {
    $model->name = $jsonData['name'];

}
if (isset($jsonData['active'])) {
    $model->active = $jsonData['active'];

}
if (isset($jsonData['default'])) {
    $model->default = $jsonData['default'];

}
if (isset($jsonData['description'])) {
    $model->description = $jsonData['description'];

}
if (isset($jsonData['filterExpression'])) {
    $model->filterExpression = $jsonData['filterExpression'];

}
if (isset($jsonData['geo'])) {
    $model->geo = [];
foreach (array_keys($jsonData['geo']) as $index16) {
    
$model->geo[$index16] = new RetailCrm\Api\Model\Entity\References\GeoHierarchyRow();
if (isset($jsonData['geo'][$index16]['country'])) {
    $model->geo[$index16]->country = $jsonData['geo'][$index16]['country'];

}
if (isset($jsonData['geo'][$index16]['regionId'])) {
    $model->geo[$index16]->regionId = $jsonData['geo'][$index16]['regionId'];

}
if (isset($jsonData['geo'][$index16]['region'])) {
    $model->geo[$index16]->region = $jsonData['geo'][$index16]['region'];

}
if (isset($jsonData['geo'][$index16]['cityId'])) {
    $model->geo[$index16]->cityId = $jsonData['geo'][$index16]['cityId'];

}
if (isset($jsonData['geo'][$index16]['city'])) {
    $model->geo[$index16]->city = $jsonData['geo'][$index16]['city'];

}


}

}
if (isset($jsonData['groups'])) {
    $model->groups = [];
foreach (array_keys($jsonData['groups']) as $index19) {
    $model->groups[$index19] = $jsonData['groups'][$index19];

}

}
if (isset($jsonData['ordering'])) {
    $model->ordering = $jsonData['ordering'];

}



    return $model;
}
