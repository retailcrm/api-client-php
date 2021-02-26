<?php

function deserialize_RetailCrm_Api_Model_Callback_Entity_Delivery_ResponseProperty_ResponseSave(array $jsonData): RetailCrm\Api\Model\Callback\Entity\Delivery\ResponseProperty\ResponseSave
{
    
$model = new RetailCrm\Api\Model\Callback\Entity\Delivery\ResponseProperty\ResponseSave();
if (isset($jsonData['deliveryId'])) {
    $model->deliveryId = $jsonData['deliveryId'];

}
if (isset($jsonData['trackNumber'])) {
    $model->trackNumber = $jsonData['trackNumber'];

}
if (isset($jsonData['cost'])) {
    $model->cost = (float) $jsonData['cost'];

}
if (isset($jsonData['status'])) {
    $model->status = $jsonData['status'];

}
if (isset($jsonData['extraData'])) {
    $model->extraData = [];
foreach (array_keys($jsonData['extraData']) as $index22) {
    $model->extraData[$index22] = $jsonData['extraData'][$index22];

}

}



    return $model;
}
