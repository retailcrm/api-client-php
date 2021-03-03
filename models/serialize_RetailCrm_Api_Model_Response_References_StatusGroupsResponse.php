<?php

function serialize_RetailCrm_Api_Model_Response_References_StatusGroupsResponse(RetailCrm\Api\Model\Response\References\StatusGroupsResponse $model, bool $useStdClass = true)
{
    $emptyHashmap = $useStdClass ? new \stdClass() : [];
    $emptyObject = $useStdClass ? new \stdClass() : [];

    $jsonData = [];
if (null !== $model->success) {
    $jsonData["success"] = $model->success;
}
if (null !== $model->statusGroups) {
    $jsonData["statusGroups"] = [];
foreach (array_keys($model->statusGroups) as $index16) {
    $jsonData["statusGroups"][$index16] = [];
if (null !== $model->statusGroups[$index16]->name) {
    $jsonData["statusGroups"][$index16]["name"] = $model->statusGroups[$index16]->name;
}
if (null !== $model->statusGroups[$index16]->code) {
    $jsonData["statusGroups"][$index16]["code"] = $model->statusGroups[$index16]->code;
}
if (null !== $model->statusGroups[$index16]->active) {
    $jsonData["statusGroups"][$index16]["active"] = $model->statusGroups[$index16]->active;
}
if (null !== $model->statusGroups[$index16]->ordering) {
    $jsonData["statusGroups"][$index16]["ordering"] = $model->statusGroups[$index16]->ordering;
}
if (null !== $model->statusGroups[$index16]->process) {
    $jsonData["statusGroups"][$index16]["process"] = $model->statusGroups[$index16]->process;
}
if (null !== $model->statusGroups[$index16]->statuses) {
    $jsonData["statusGroups"][$index16]["statuses"] = [];
foreach (array_keys($model->statusGroups[$index16]->statuses) as $index38) {
    $jsonData["statusGroups"][$index16]["statuses"] = $model->statusGroups[$index16]->statuses;
}

}

if (0 === \count($jsonData["statusGroups"][$index16])) {
    $jsonData["statusGroups"][$index16] = $emptyObject;
}

}

}

if (0 === \count($jsonData)) {
    $jsonData = $emptyObject;
}


    return $jsonData;
}
