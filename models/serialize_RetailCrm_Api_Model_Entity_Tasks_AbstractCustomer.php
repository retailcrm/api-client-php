<?php

function serialize_RetailCrm_Api_Model_Entity_Tasks_AbstractCustomer(RetailCrm\Api\Model\Entity\Tasks\AbstractCustomer $model, bool $useStdClass = true)
{
    $emptyHashmap = $useStdClass ? new \stdClass() : [];
    $emptyObject = $useStdClass ? new \stdClass() : [];

    $jsonData = [];
if (null !== $model->type) {
    $jsonData["type"] = $model->type;
}
if (null !== $model->id) {
    $jsonData["id"] = $model->id;
}
if (null !== $model->externalId) {
    $jsonData["externalId"] = $model->externalId;
}
if (null !== $model->site) {
    $jsonData["site"] = $model->site;
}

if (0 === \count($jsonData)) {
    $jsonData = $emptyObject;
}


    return $jsonData;
}
