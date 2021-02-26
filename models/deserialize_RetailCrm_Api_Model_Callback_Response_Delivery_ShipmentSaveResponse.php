<?php

function deserialize_RetailCrm_Api_Model_Callback_Response_Delivery_ShipmentSaveResponse(array $jsonData): RetailCrm\Api\Model\Callback\Response\Delivery\ShipmentSaveResponse
{
    
$model = new RetailCrm\Api\Model\Callback\Response\Delivery\ShipmentSaveResponse();
if (isset($jsonData['success'])) {
    $model->success = $jsonData['success'];

}
if (isset($jsonData['result'])) {
    
$model->result = new RetailCrm\Api\Model\Callback\Entity\Delivery\ResponseProperty\ResponseShipmentSave();
if (isset($jsonData['result']['shipmentId'])) {
    $model->result->shipmentId = $jsonData['result']['shipmentId'];

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
