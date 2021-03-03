<?php

function serialize_RetailCrm_Api_Model_Response_References_OrderTypesResponse(RetailCrm\Api\Model\Response\References\OrderTypesResponse $model, bool $useStdClass = true)
{
    $emptyHashmap = $useStdClass ? new \stdClass() : [];
    $emptyObject = $useStdClass ? new \stdClass() : [];

    $jsonData = [];
if (null !== $model->success) {
    $jsonData["success"] = $model->success;
}
if (null !== $model->orderTypes) {
    $jsonData["orderTypes"] = [];
foreach (array_keys($model->orderTypes) as $index14) {
    $jsonData["orderTypes"][$index14] = [];
if (null !== $model->orderTypes[$index14]->name) {
    $jsonData["orderTypes"][$index14]["name"] = $model->orderTypes[$index14]->name;
}
if (null !== $model->orderTypes[$index14]->code) {
    $jsonData["orderTypes"][$index14]["code"] = $model->orderTypes[$index14]->code;
}
if (null !== $model->orderTypes[$index14]->active) {
    $jsonData["orderTypes"][$index14]["active"] = $model->orderTypes[$index14]->active;
}
if (null !== $model->orderTypes[$index14]->defaultForCrm) {
    $jsonData["orderTypes"][$index14]["defaultForCrm"] = $model->orderTypes[$index14]->defaultForCrm;
}
if (null !== $model->orderTypes[$index14]->defaultForApi) {
    $jsonData["orderTypes"][$index14]["defaultForApi"] = $model->orderTypes[$index14]->defaultForApi;
}
if (null !== $model->orderTypes[$index14]->ordering) {
    $jsonData["orderTypes"][$index14]["ordering"] = $model->orderTypes[$index14]->ordering;
}

if (0 === \count($jsonData["orderTypes"][$index14])) {
    $jsonData["orderTypes"][$index14] = $emptyObject;
}

}

}

if (0 === \count($jsonData)) {
    $jsonData = $emptyObject;
}


    return $jsonData;
}
