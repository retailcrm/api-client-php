<?php

function serialize_RetailCrm_Api_Model_Entity_Loyalty_OrderProductPriceItem(RetailCrm\Api\Model\Entity\Loyalty\OrderProductPriceItem $model, bool $useStdClass = true)
{
    $emptyHashmap = $useStdClass ? new \stdClass() : [];
    $emptyObject = $useStdClass ? new \stdClass() : [];

    $jsonData = [];
if (null !== $model->price) {
    $jsonData["price"] = $model->price;
}
if (null !== $model->quantity) {
    $jsonData["quantity"] = $model->quantity;
}

if (0 === \count($jsonData)) {
    $jsonData = $emptyObject;
}


    return $jsonData;
}
