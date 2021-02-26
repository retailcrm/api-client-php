<?php

function serialize_RetailCrm_Api_Model_Callback_Response_Delivery_ShipmentSaveResponse(RetailCrm\Api\Model\Callback\Response\Delivery\ShipmentSaveResponse $model, bool $useStdClass = true)
{
    $emptyHashmap = $useStdClass ? new \stdClass() : [];
    $emptyObject = $useStdClass ? new \stdClass() : [];

    $jsonData = [];
if (null !== $model->success) {
    $jsonData["success"] = $model->success;
}
if (null !== $model->result) {
    $jsonData["result"] = [];
if (null !== $model->result->shipmentId) {
    $jsonData["result"]["shipmentId"] = $model->result->shipmentId;
}
if (null !== $model->result->extraData) {
    $jsonData["result"]["extraData"] = [];
foreach (array_keys($model->result->extraData) as $index23) {
    $jsonData["result"]["extraData"] = $model->result->extraData;
}

}

if (0 === \count($jsonData["result"])) {
    $jsonData["result"] = $emptyObject;
}

}

if (0 === \count($jsonData)) {
    $jsonData = $emptyObject;
}


    return $jsonData;
}
