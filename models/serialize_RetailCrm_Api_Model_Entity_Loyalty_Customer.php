<?php

function serialize_RetailCrm_Api_Model_Entity_Loyalty_Customer(RetailCrm\Api\Model\Entity\Loyalty\Customer $model, bool $useStdClass = true)
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
if (null !== $model->personalDiscount) {
    $jsonData["personalDiscount"] = $model->personalDiscount;
}

if (0 === \count($jsonData)) {
    $jsonData = $emptyObject;
}


    return $jsonData;
}
