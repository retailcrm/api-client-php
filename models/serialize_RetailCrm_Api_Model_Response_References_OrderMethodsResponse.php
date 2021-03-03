<?php

function serialize_RetailCrm_Api_Model_Response_References_OrderMethodsResponse(RetailCrm\Api\Model\Response\References\OrderMethodsResponse $model, bool $useStdClass = true)
{
    $emptyHashmap = $useStdClass ? new \stdClass() : [];
    $emptyObject = $useStdClass ? new \stdClass() : [];

    $jsonData = [];
if (null !== $model->success) {
    $jsonData["success"] = $model->success;
}
if (null !== $model->orderMethods) {
    $jsonData["orderMethods"] = [];
foreach (array_keys($model->orderMethods) as $index16) {
    $jsonData["orderMethods"][$index16] = [];
if (null !== $model->orderMethods[$index16]->name) {
    $jsonData["orderMethods"][$index16]["name"] = $model->orderMethods[$index16]->name;
}
if (null !== $model->orderMethods[$index16]->code) {
    $jsonData["orderMethods"][$index16]["code"] = $model->orderMethods[$index16]->code;
}
if (null !== $model->orderMethods[$index16]->active) {
    $jsonData["orderMethods"][$index16]["active"] = $model->orderMethods[$index16]->active;
}
if (null !== $model->orderMethods[$index16]->defaultForCrm) {
    $jsonData["orderMethods"][$index16]["defaultForCrm"] = $model->orderMethods[$index16]->defaultForCrm;
}
if (null !== $model->orderMethods[$index16]->defaultForApi) {
    $jsonData["orderMethods"][$index16]["defaultForApi"] = $model->orderMethods[$index16]->defaultForApi;
}
if (null !== $model->orderMethods[$index16]->isFromPos) {
    $jsonData["orderMethods"][$index16]["isFromPos"] = $model->orderMethods[$index16]->isFromPos;
}

if (0 === \count($jsonData["orderMethods"][$index16])) {
    $jsonData["orderMethods"][$index16] = $emptyObject;
}

}

}

if (0 === \count($jsonData)) {
    $jsonData = $emptyObject;
}


    return $jsonData;
}
