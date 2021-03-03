<?php

function serialize_RetailCrm_Api_Model_Entity_References_CostGroup(RetailCrm\Api\Model\Entity\References\CostGroup $model, bool $useStdClass = true)
{
    $emptyHashmap = $useStdClass ? new \stdClass() : [];
    $emptyObject = $useStdClass ? new \stdClass() : [];

    $jsonData = [];
if (null !== $model->code) {
    $jsonData["code"] = $model->code;
}
if (null !== $model->name) {
    $jsonData["name"] = $model->name;
}
if (null !== $model->ordering) {
    $jsonData["ordering"] = $model->ordering;
}
if (null !== $model->active) {
    $jsonData["active"] = $model->active;
}
if (null !== $model->color) {
    $jsonData["color"] = $model->color;
}

if (0 === \count($jsonData)) {
    $jsonData = $emptyObject;
}


    return $jsonData;
}
