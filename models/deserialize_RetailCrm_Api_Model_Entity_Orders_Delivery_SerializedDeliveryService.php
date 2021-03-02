<?php

function deserialize_RetailCrm_Api_Model_Entity_Orders_Delivery_SerializedDeliveryService(array $jsonData): RetailCrm\Api\Model\Entity\Orders\Delivery\SerializedDeliveryService
{
    
$model = new RetailCrm\Api\Model\Entity\Orders\Delivery\SerializedDeliveryService();
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
