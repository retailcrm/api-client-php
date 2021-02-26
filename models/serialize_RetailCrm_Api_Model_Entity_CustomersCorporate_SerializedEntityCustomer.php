<?php

function serialize_RetailCrm_Api_Model_Entity_CustomersCorporate_SerializedEntityCustomer(RetailCrm\Api\Model\Entity\CustomersCorporate\SerializedEntityCustomer $model, bool $useStdClass = true)
{
    $emptyHashmap = $useStdClass ? new \stdClass() : [];
    $emptyObject = $useStdClass ? new \stdClass() : [];

    $jsonData = [];
if (null !== $model->site) {
    $jsonData["site"] = $model->site;
}
if (null !== $model->id) {
    $jsonData["id"] = $model->id;
}
if (null !== $model->externalId) {
    $jsonData["externalId"] = $model->externalId;
}
if (null !== $model->type) {
    $jsonData["type"] = $model->type;
}

if (0 === \count($jsonData)) {
    $jsonData = $emptyObject;
}


    return $jsonData;
}
