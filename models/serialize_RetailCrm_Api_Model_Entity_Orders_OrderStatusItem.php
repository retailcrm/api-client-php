<?php

function serialize_RetailCrm_Api_Model_Entity_Orders_OrderStatusItem(RetailCrm\Api\Model\Entity\Orders\OrderStatusItem $model, bool $useStdClass = true)
{
    $emptyHashmap = $useStdClass ? new \stdClass() : [];
    $emptyObject = $useStdClass ? new \stdClass() : [];

    $jsonData = [];
if (null !== $model->id) {
    $jsonData["id"] = $model->id;
}
if (null !== $model->externalId) {
    $jsonData["externalId"] = $model->externalId;
}
if (null !== $model->status) {
    $jsonData["status"] = $model->status;
}
if (null !== $model->group) {
    $jsonData["group"] = $model->group;
}

if (0 === \count($jsonData)) {
    $jsonData = $emptyObject;
}


    return $jsonData;
}
