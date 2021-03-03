<?php

function serialize_RetailCrm_Api_Model_Entity_References_StatusGroup(RetailCrm\Api\Model\Entity\References\StatusGroup $model, bool $useStdClass = true)
{
    $emptyHashmap = $useStdClass ? new \stdClass() : [];
    $emptyObject = $useStdClass ? new \stdClass() : [];

    $jsonData = [];
if (null !== $model->name) {
    $jsonData["name"] = $model->name;
}
if (null !== $model->code) {
    $jsonData["code"] = $model->code;
}
if (null !== $model->active) {
    $jsonData["active"] = $model->active;
}
if (null !== $model->ordering) {
    $jsonData["ordering"] = $model->ordering;
}
if (null !== $model->process) {
    $jsonData["process"] = $model->process;
}
if (null !== $model->statuses) {
    $jsonData["statuses"] = [];
foreach (array_keys($model->statuses) as $index12) {
    $jsonData["statuses"] = $model->statuses;
}

}

if (0 === \count($jsonData)) {
    $jsonData = $emptyObject;
}


    return $jsonData;
}
