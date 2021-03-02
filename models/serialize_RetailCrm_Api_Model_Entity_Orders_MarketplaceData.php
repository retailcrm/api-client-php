<?php

function serialize_RetailCrm_Api_Model_Entity_Orders_MarketplaceData(RetailCrm\Api\Model\Entity\Orders\MarketplaceData $model, bool $useStdClass = true)
{
    $emptyHashmap = $useStdClass ? new \stdClass() : [];
    $emptyObject = $useStdClass ? new \stdClass() : [];

    $jsonData = [];
if (null !== $model->code) {
    $jsonData["code"] = $model->code;
}
if (null !== $model->orderId) {
    $jsonData["orderId"] = $model->orderId;
}

if (0 === \count($jsonData)) {
    $jsonData = $emptyObject;
}


    return $jsonData;
}
