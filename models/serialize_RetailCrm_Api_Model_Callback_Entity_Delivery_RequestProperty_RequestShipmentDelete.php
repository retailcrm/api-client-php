<?php

function serialize_RetailCrm_Api_Model_Callback_Entity_Delivery_RequestProperty_RequestShipmentDelete(RetailCrm\Api\Model\Callback\Entity\Delivery\RequestProperty\RequestShipmentDelete $model, bool $useStdClass = true)
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
