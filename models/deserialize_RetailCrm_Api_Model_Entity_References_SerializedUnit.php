<?php

function deserialize_RetailCrm_Api_Model_Entity_References_SerializedUnit(array $jsonData): RetailCrm\Api\Model\Entity\References\SerializedUnit
{
    
$model = new RetailCrm\Api\Model\Entity\References\SerializedUnit();
if (isset($jsonData['code'])) {
    $model->code = $jsonData['code'];

}
if (isset($jsonData['name'])) {
    $model->name = $jsonData['name'];

}
if (isset($jsonData['sym'])) {
    $model->sym = $jsonData['sym'];

}
if (isset($jsonData['default'])) {
    $model->default = $jsonData['default'];

}
if (isset($jsonData['active'])) {
    $model->active = $jsonData['active'];

}



    return $model;
}
