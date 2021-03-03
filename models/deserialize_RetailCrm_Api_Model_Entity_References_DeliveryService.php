<?php

function deserialize_RetailCrm_Api_Model_Entity_References_DeliveryService(array $jsonData): RetailCrm\Api\Model\Entity\References\DeliveryService
{
    
$model = new RetailCrm\Api\Model\Entity\References\DeliveryService();
if (isset($jsonData['name'])) {
    $model->name = $jsonData['name'];

}
if (isset($jsonData['code'])) {
    $model->code = $jsonData['code'];

}
if (isset($jsonData['active'])) {
    $model->active = $jsonData['active'];

}



    return $model;
}
