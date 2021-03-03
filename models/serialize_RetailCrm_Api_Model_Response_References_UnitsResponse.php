<?php

function serialize_RetailCrm_Api_Model_Response_References_UnitsResponse(RetailCrm\Api\Model\Response\References\UnitsResponse $model, bool $useStdClass = true)
{
    $emptyHashmap = $useStdClass ? new \stdClass() : [];
    $emptyObject = $useStdClass ? new \stdClass() : [];

    $jsonData = [];
if (null !== $model->success) {
    $jsonData["success"] = $model->success;
}
if (null !== $model->units) {
    $jsonData["units"] = [];
foreach (array_keys($model->units) as $index9) {
    $jsonData["units"][$index9] = [];
if (null !== $model->units[$index9]->code) {
    $jsonData["units"][$index9]["code"] = $model->units[$index9]->code;
}
if (null !== $model->units[$index9]->name) {
    $jsonData["units"][$index9]["name"] = $model->units[$index9]->name;
}
if (null !== $model->units[$index9]->sym) {
    $jsonData["units"][$index9]["sym"] = $model->units[$index9]->sym;
}
if (null !== $model->units[$index9]->default) {
    $jsonData["units"][$index9]["default"] = $model->units[$index9]->default;
}
if (null !== $model->units[$index9]->active) {
    $jsonData["units"][$index9]["active"] = $model->units[$index9]->active;
}

if (0 === \count($jsonData["units"][$index9])) {
    $jsonData["units"][$index9] = $emptyObject;
}

}

}

if (0 === \count($jsonData)) {
    $jsonData = $emptyObject;
}


    return $jsonData;
}
