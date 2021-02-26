<?php

function deserialize_RetailCrm_Api_Model_Entity_Integration_Delivery_ShipmentPoint(array $jsonData): RetailCrm\Api\Model\Entity\Integration\Delivery\ShipmentPoint
{
    
$model = new RetailCrm\Api\Model\Entity\Integration\Delivery\ShipmentPoint();
if (isset($jsonData['code'])) {
    $model->code = $jsonData['code'];

}
if (isset($jsonData['shipmentPointId'])) {
    $model->shipmentPointId = $jsonData['shipmentPointId'];

}
if (isset($jsonData['shipmentPointLabel'])) {
    $model->shipmentPointLabel = $jsonData['shipmentPointLabel'];

}



    return $model;
}
