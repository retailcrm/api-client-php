<?php

function serialize_RetailCrm_Api_Model_Entity_References_MGChannel(RetailCrm\Api\Model\Entity\References\MGChannel $model, bool $useStdClass = true)
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
if (null !== $model->type) {
    $jsonData["type"] = $model->type;
}
if (null !== $model->active) {
    $jsonData["active"] = $model->active;
}
if (null !== $model->name) {
    $jsonData["name"] = $model->name;
}

if (0 === \count($jsonData)) {
    $jsonData = $emptyObject;
}


    return $jsonData;
}
