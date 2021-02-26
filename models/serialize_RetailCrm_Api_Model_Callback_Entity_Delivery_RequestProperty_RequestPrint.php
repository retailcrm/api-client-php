<?php

function serialize_RetailCrm_Api_Model_Callback_Entity_Delivery_RequestProperty_RequestPrint(RetailCrm\Api\Model\Callback\Entity\Delivery\RequestProperty\RequestPrint $model, bool $useStdClass = true)
{
    $emptyHashmap = $useStdClass ? new \stdClass() : [];
    $emptyObject = $useStdClass ? new \stdClass() : [];

    $jsonData = [];
if (null !== $model->entityType) {
    $jsonData["entityType"] = $model->entityType;
}
if (null !== $model->type) {
    $jsonData["type"] = $model->type;
}
if (null !== $model->deliveryIds) {
    $jsonData["deliveryIds"] = $model->deliveryIds;
}

if (0 === \count($jsonData)) {
    $jsonData = $emptyObject;
}


    return $jsonData;
}
