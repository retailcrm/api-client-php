<?php

function serialize_RetailCrm_Api_Model_Response_References_CostGroupsResponse(RetailCrm\Api\Model\Response\References\CostGroupsResponse $model, bool $useStdClass = true)
{
    $emptyHashmap = $useStdClass ? new \stdClass() : [];
    $emptyObject = $useStdClass ? new \stdClass() : [];

    $jsonData = [];
if (null !== $model->success) {
    $jsonData["success"] = $model->success;
}
if (null !== $model->costGroups) {
    $jsonData["costGroups"] = [];
foreach (array_keys($model->costGroups) as $index14) {
    $jsonData["costGroups"][$index14] = [];
if (null !== $model->costGroups[$index14]->code) {
    $jsonData["costGroups"][$index14]["code"] = $model->costGroups[$index14]->code;
}
if (null !== $model->costGroups[$index14]->name) {
    $jsonData["costGroups"][$index14]["name"] = $model->costGroups[$index14]->name;
}
if (null !== $model->costGroups[$index14]->ordering) {
    $jsonData["costGroups"][$index14]["ordering"] = $model->costGroups[$index14]->ordering;
}
if (null !== $model->costGroups[$index14]->active) {
    $jsonData["costGroups"][$index14]["active"] = $model->costGroups[$index14]->active;
}
if (null !== $model->costGroups[$index14]->color) {
    $jsonData["costGroups"][$index14]["color"] = $model->costGroups[$index14]->color;
}

if (0 === \count($jsonData["costGroups"][$index14])) {
    $jsonData["costGroups"][$index14] = $emptyObject;
}

}

}

if (0 === \count($jsonData)) {
    $jsonData = $emptyObject;
}


    return $jsonData;
}
