<?php

function serialize_RetailCrm_Api_Model_Entity_References_SerializedUnit(RetailCrm\Api\Model\Entity\References\SerializedUnit $model, bool $useStdClass = true)
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
if (null !== $model->sym) {
    $jsonData["sym"] = $model->sym;
}
if (null !== $model->default) {
    $jsonData["default"] = $model->default;
}
if (null !== $model->active) {
    $jsonData["active"] = $model->active;
}

if (0 === \count($jsonData)) {
    $jsonData = $emptyObject;
}


    return $jsonData;
}
