<?php

function serialize_RetailCrm_Api_Model_Entity_Loyalty_SerializedLoyalty(RetailCrm\Api\Model\Entity\Loyalty\SerializedLoyalty $model, bool $useStdClass = true)
{
    $emptyHashmap = $useStdClass ? new \stdClass() : [];
    $emptyObject = $useStdClass ? new \stdClass() : [];

    $jsonData = [];
if (null !== $model->name) {
    $jsonData["name"] = $model->name;
}
if (null !== $model->chargeRate) {
    $jsonData["chargeRate"] = $model->chargeRate;
}

if (0 === \count($jsonData)) {
    $jsonData = $emptyObject;
}


    return $jsonData;
}
