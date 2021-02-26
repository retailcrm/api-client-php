<?php

function deserialize_RetailCrm_Api_Model_Callback_Entity_Delivery_RequestProperty_RequestShipmentDelete(array $jsonData): RetailCrm\Api\Model\Callback\Entity\Delivery\RequestProperty\RequestShipmentDelete
{
    
$model = new RetailCrm\Api\Model\Callback\Entity\Delivery\RequestProperty\RequestShipmentDelete();
if (isset($jsonData['shipmentId'])) {
    $model->shipmentId = $jsonData['shipmentId'];

}
if (isset($jsonData['extraData'])) {
    $model->extraData = [];
foreach (array_keys($jsonData['extraData']) as $index22) {
    $model->extraData[$index22] = $jsonData['extraData'][$index22];

}

}



    return $model;
}
