<?php

function serialize_RetailCrm_Api_Model_Entity_Customers_HistoryAddress(RetailCrm\Api\Model\Entity\Customers\HistoryAddress $model, bool $useStdClass = true)
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
if (null !== $model->name) {
    $jsonData["name"] = $model->name;
}
if (null !== $model->isMain) {
    $jsonData["isMain"] = $model->isMain;
}

if (0 === \count($jsonData)) {
    $jsonData = $emptyObject;
}


    return $jsonData;
}
