<?php

function deserialize_RetailCrm_Api_Model_Entity_Delivery_DeliveryCalculation(array $jsonData): RetailCrm\Api\Model\Entity\Delivery\DeliveryCalculation
{
    
$model = new RetailCrm\Api\Model\Entity\Delivery\DeliveryCalculation();
if (isset($jsonData['code'])) {
    $model->code = $jsonData['code'];

}
if (isset($jsonData['available'])) {
    $model->available = $jsonData['available'];

}
if (isset($jsonData['vatRate'])) {
    $model->vatRate = $jsonData['vatRate'];

}
if (isset($jsonData['cost'])) {
    $model->cost = (float) $jsonData['cost'];

}



    return $model;
}
