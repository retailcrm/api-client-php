<?php

function serialize_RetailCrm_Api_Model_Entity_Loyalty_SerializedOrderDelivery(RetailCrm\Api\Model\Entity\Loyalty\SerializedOrderDelivery $model, bool $useStdClass = true)
{
    $emptyHashmap = $useStdClass ? new \stdClass() : [];
    $emptyObject = $useStdClass ? new \stdClass() : [];

    $jsonData = [];
if (null !== $model->cost) {
    $jsonData["cost"] = $model->cost;
}

if (0 === \count($jsonData)) {
    $jsonData = $emptyObject;
}


    return $jsonData;
}
