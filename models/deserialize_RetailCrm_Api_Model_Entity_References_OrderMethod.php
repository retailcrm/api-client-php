<?php

function deserialize_RetailCrm_Api_Model_Entity_References_OrderMethod(array $jsonData): RetailCrm\Api\Model\Entity\References\OrderMethod
{
    
$model = new RetailCrm\Api\Model\Entity\References\OrderMethod();
if (isset($jsonData['name'])) {
    $model->name = $jsonData['name'];

}
if (isset($jsonData['code'])) {
    $model->code = $jsonData['code'];

}
if (isset($jsonData['active'])) {
    $model->active = $jsonData['active'];

}
if (isset($jsonData['defaultForCrm'])) {
    $model->defaultForCrm = $jsonData['defaultForCrm'];

}
if (isset($jsonData['defaultForApi'])) {
    $model->defaultForApi = $jsonData['defaultForApi'];

}
if (isset($jsonData['isFromPos'])) {
    $model->isFromPos = $jsonData['isFromPos'];

}



    return $model;
}
