<?php

function serialize_RetailCrm_Api_Model_Callback_Entity_Delivery_ResponseProperty_ResponseSave(RetailCrm\Api\Model\Callback\Entity\Delivery\ResponseProperty\ResponseSave $model, bool $useStdClass = true)
{
    $emptyHashmap = $useStdClass ? new \stdClass() : [];
    $emptyObject = $useStdClass ? new \stdClass() : [];

    $jsonData = [];
if (null !== $model->deliveryId) {
    $jsonData["deliveryId"] = $model->deliveryId;
}
if (null !== $model->trackNumber) {
    $jsonData["trackNumber"] = $model->trackNumber;
}
if (null !== $model->cost) {
    $jsonData["cost"] = $model->cost;
}
if (null !== $model->status) {
    $jsonData["status"] = $model->status;
}
if (null !== $model->extraData) {
    $jsonData["extraData"] = [];
foreach (array_keys($model->extraData) as $index13) {
    $jsonData["extraData"] = $model->extraData;
}

}

if (0 === \count($jsonData)) {
    $jsonData = $emptyObject;
}


    return $jsonData;
}
