<?php

function serialize_RetailCrm_Api_Model_Entity_Store_Inventory(RetailCrm\Api\Model\Entity\Store\Inventory $model, bool $useStdClass = true)
{
    $emptyHashmap = $useStdClass ? new \stdClass() : [];
    $emptyObject = $useStdClass ? new \stdClass() : [];

    $jsonData = [];
if (null !== $model->quantity) {
    $jsonData["quantity"] = $model->quantity;
}
if (null !== $model->purchasePrice) {
    $jsonData["purchasePrice"] = $model->purchasePrice;
}
if (null !== $model->store) {
    $jsonData["store"] = $model->store;
}
if (null !== $model->code) {
    $jsonData["code"] = $model->code;
}
if (null !== $model->available) {
    $jsonData["available"] = $model->available;
}

if (0 === \count($jsonData)) {
    $jsonData = $emptyObject;
}


    return $jsonData;
}
