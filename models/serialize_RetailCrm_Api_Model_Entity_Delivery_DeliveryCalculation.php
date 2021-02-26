<?php

function serialize_RetailCrm_Api_Model_Entity_Delivery_DeliveryCalculation(RetailCrm\Api\Model\Entity\Delivery\DeliveryCalculation $model, bool $useStdClass = true)
{
    $emptyHashmap = $useStdClass ? new \stdClass() : [];
    $emptyObject = $useStdClass ? new \stdClass() : [];

    $jsonData = [];
if (null !== $model->code) {
    $jsonData["code"] = $model->code;
}
if (null !== $model->available) {
    $jsonData["available"] = $model->available;
}
if (null !== $model->vatRate) {
    $jsonData["vatRate"] = $model->vatRate;
}
if (null !== $model->cost) {
    $jsonData["cost"] = $model->cost;
}

if (0 === \count($jsonData)) {
    $jsonData = $emptyObject;
}


    return $jsonData;
}
