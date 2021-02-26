<?php

function serialize_RetailCrm_Api_Model_Entity_Loyalty_SerializedOrderProductOffer(RetailCrm\Api\Model\Entity\Loyalty\SerializedOrderProductOffer $model, bool $useStdClass = true)
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
if (null !== $model->xmlId) {
    $jsonData["xmlId"] = $model->xmlId;
}

if (0 === \count($jsonData)) {
    $jsonData = $emptyObject;
}


    return $jsonData;
}
