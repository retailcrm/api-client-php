<?php

function serialize_RetailCrm_Api_Model_Response_References_StatusesResponse(RetailCrm\Api\Model\Response\References\StatusesResponse $model, bool $useStdClass = true)
{
    $emptyHashmap = $useStdClass ? new \stdClass() : [];
    $emptyObject = $useStdClass ? new \stdClass() : [];

    $jsonData = [];
if (null !== $model->success) {
    $jsonData["success"] = $model->success;
}
if (null !== $model->statuses) {
    $jsonData["statuses"] = [];
foreach (array_keys($model->statuses) as $index12) {
    $jsonData["statuses"][$index12] = [];
if (null !== $model->statuses[$index12]->name) {
    $jsonData["statuses"][$index12]["name"] = $model->statuses[$index12]->name;
}
if (null !== $model->statuses[$index12]->code) {
    $jsonData["statuses"][$index12]["code"] = $model->statuses[$index12]->code;
}
if (null !== $model->statuses[$index12]->active) {
    $jsonData["statuses"][$index12]["active"] = $model->statuses[$index12]->active;
}
if (null !== $model->statuses[$index12]->ordering) {
    $jsonData["statuses"][$index12]["ordering"] = $model->statuses[$index12]->ordering;
}
if (null !== $model->statuses[$index12]->group) {
    $jsonData["statuses"][$index12]["group"] = $model->statuses[$index12]->group;
}

if (0 === \count($jsonData["statuses"][$index12])) {
    $jsonData["statuses"][$index12] = $emptyObject;
}

}

}

if (0 === \count($jsonData)) {
    $jsonData = $emptyObject;
}


    return $jsonData;
}
