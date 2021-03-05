<?php

function serialize_RetailCrm_Api_Model_Entity_Store_ProductGroup(RetailCrm\Api\Model\Entity\Store\ProductGroup $model, bool $useStdClass = true)
{
    $emptyHashmap = $useStdClass ? new \stdClass() : [];
    $emptyObject = $useStdClass ? new \stdClass() : [];

    $jsonData = [];
if (null !== $model->parentId) {
    $jsonData["parentId"] = $model->parentId;
}
if (null !== $model->site) {
    $jsonData["site"] = $model->site;
}
if (null !== $model->id) {
    $jsonData["id"] = $model->id;
}
if (null !== $model->name) {
    $jsonData["name"] = $model->name;
}
if (null !== $model->externalId) {
    $jsonData["externalId"] = $model->externalId;
}
if (null !== $model->active) {
    $jsonData["active"] = $model->active;
}

if (0 === \count($jsonData)) {
    $jsonData = $emptyObject;
}


    return $jsonData;
}
