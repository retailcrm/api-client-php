<?php

function serialize_RetailCrm_Api_Model_Entity_Loyalty_LoyaltyLevel(RetailCrm\Api\Model\Entity\Loyalty\LoyaltyLevel $model, bool $useStdClass = true)
{
    $emptyHashmap = $useStdClass ? new \stdClass() : [];
    $emptyObject = $useStdClass ? new \stdClass() : [];

    $jsonData = [];
if (null !== $model->id) {
    $jsonData["id"] = $model->id;
}
if (null !== $model->name) {
    $jsonData["name"] = $model->name;
}

if (0 === \count($jsonData)) {
    $jsonData = $emptyObject;
}


    return $jsonData;
}
