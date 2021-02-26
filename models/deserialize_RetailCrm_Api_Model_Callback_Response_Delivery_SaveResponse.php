<?php

function deserialize_RetailCrm_Api_Model_Callback_Response_Delivery_SaveResponse(array $jsonData): RetailCrm\Api\Model\Callback\Response\Delivery\SaveResponse
{
    
$model = new RetailCrm\Api\Model\Callback\Response\Delivery\SaveResponse();
if (isset($jsonData['success'])) {
    $model->success = $jsonData['success'];

}
if (isset($jsonData['result'])) {
    
$model->result = new RetailCrm\Api\Model\Callback\Entity\Delivery\ResponseProperty\ResponseSave();
if (isset($jsonData['result']['deliveryId'])) {
    $model->result->deliveryId = $jsonData['result']['deliveryId'];

}
if (isset($jsonData['result']['trackNumber'])) {
    $model->result->trackNumber = $jsonData['result']['trackNumber'];

}
if (isset($jsonData['result']['cost'])) {
    $model->result->cost = (float) $jsonData['result']['cost'];

}
if (isset($jsonData['result']['status'])) {
    $model->result->status = $jsonData['result']['status'];

}
if (isset($jsonData['result']['extraData'])) {
    $model->result->extraData = [];
foreach (array_keys($jsonData['result']['extraData']) as $index32) {
    $model->result->extraData[$index32] = $jsonData['result']['extraData'][$index32];

}

}


}



    return $model;
}
