<?php

function serialize_RetailCrm_Api_Model_Callback_Entity_Delivery_ResponseProperty_ResponseShipmentSave(RetailCrm\Api\Model\Callback\Entity\Delivery\ResponseProperty\ResponseShipmentSave $model, bool $useStdClass = true)
{
    $emptyHashmap = $useStdClass ? new \stdClass() : [];
    $emptyObject = $useStdClass ? new \stdClass() : [];

    $jsonData = [];
if (null !== $model->shipmentId) {
    $jsonData["shipmentId"] = $model->shipmentId;
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
