<?php

function serialize_RetailCrm_Api_Model_Entity_Costs_CostOrder(RetailCrm\Api\Model\Entity\Costs\CostOrder $model, bool $useStdClass = true)
{
    $emptyHashmap = $useStdClass ? new \stdClass() : [];
    $emptyObject = $useStdClass ? new \stdClass() : [];

    $jsonData = [];
if (null !== $model->id) {
    $jsonData["id"] = $model->id;
}
if (null !== $model->number) {
    $jsonData["number"] = $model->number;
}
if (null !== $model->externalId) {
    $jsonData["externalId"] = $model->externalId;
}

if (0 === \count($jsonData)) {
    $jsonData = $emptyObject;
}


    return $jsonData;
}
