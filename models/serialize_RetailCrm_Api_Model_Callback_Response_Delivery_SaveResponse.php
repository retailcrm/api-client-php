<?php

function serialize_RetailCrm_Api_Model_Callback_Response_Delivery_SaveResponse(RetailCrm\Api\Model\Callback\Response\Delivery\SaveResponse $model, bool $useStdClass = true)
{
    $emptyHashmap = $useStdClass ? new \stdClass() : [];
    $emptyObject = $useStdClass ? new \stdClass() : [];

    $jsonData = [];
if (null !== $model->success) {
    $jsonData["success"] = $model->success;
}
if (null !== $model->result) {
    $jsonData["result"] = [];
if (null !== $model->result->deliveryId) {
    $jsonData["result"]["deliveryId"] = $model->result->deliveryId;
}
if (null !== $model->result->trackNumber) {
    $jsonData["result"]["trackNumber"] = $model->result->trackNumber;
}
if (null !== $model->result->cost) {
    $jsonData["result"]["cost"] = $model->result->cost;
}
if (null !== $model->result->status) {
    $jsonData["result"]["status"] = $model->result->status;
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
