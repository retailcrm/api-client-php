<?php

function serialize_RetailCrm_Api_Model_Entity_Integration_Delivery_ShipmentPoint(RetailCrm\Api\Model\Entity\Integration\Delivery\ShipmentPoint $model, bool $useStdClass = true)
{
    $emptyHashmap = $useStdClass ? new \stdClass() : [];
    $emptyObject = $useStdClass ? new \stdClass() : [];

    $jsonData = [];
if (null !== $model->code) {
    $jsonData["code"] = $model->code;
}
if (null !== $model->shipmentPointId) {
    $jsonData["shipmentPointId"] = $model->shipmentPointId;
}
if (null !== $model->shipmentPointLabel) {
    $jsonData["shipmentPointLabel"] = $model->shipmentPointLabel;
}

if (0 === \count($jsonData)) {
    $jsonData = $emptyObject;
}


    return $jsonData;
}
