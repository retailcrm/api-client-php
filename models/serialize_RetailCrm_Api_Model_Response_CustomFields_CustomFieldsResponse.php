<?php

function serialize_RetailCrm_Api_Model_Response_CustomFields_CustomFieldsResponse(RetailCrm\Api\Model\Response\CustomFields\CustomFieldsResponse $model, bool $useStdClass = true)
{
    $emptyHashmap = $useStdClass ? new \stdClass() : [];
    $emptyObject = $useStdClass ? new \stdClass() : [];

    $jsonData = [];
if (null !== $model->success) {
    $jsonData["success"] = $model->success;
}
if (null !== $model->pagination) {
    $jsonData["pagination"] = [];
if (null !== $model->pagination->limit) {
    $jsonData["pagination"]["limit"] = $model->pagination->limit;
}
if (null !== $model->pagination->totalCount) {
    $jsonData["pagination"]["totalCount"] = $model->pagination->totalCount;
}
if (null !== $model->pagination->currentPage) {
    $jsonData["pagination"]["currentPage"] = $model->pagination->currentPage;
}
if (null !== $model->pagination->totalPageCount) {
    $jsonData["pagination"]["totalPageCount"] = $model->pagination->totalPageCount;
}

if (0 === \count($jsonData["pagination"])) {
    $jsonData["pagination"] = $emptyObject;
}

}
if (null !== $model->customFields) {
    $jsonData["customFields"] = [];
foreach (array_keys($model->customFields) as $index16) {
    $jsonData["customFields"][$index16] = [];
if (null !== $model->customFields[$index16]->name) {
    $jsonData["customFields"][$index16]["name"] = $model->customFields[$index16]->name;
}
if (null !== $model->customFields[$index16]->code) {
    $jsonData["customFields"][$index16]["code"] = $model->customFields[$index16]->code;
}
if (null !== $model->customFields[$index16]->required) {
    $jsonData["customFields"][$index16]["required"] = $model->customFields[$index16]->required;
}
if (null !== $model->customFields[$index16]->inFilter) {
    $jsonData["customFields"][$index16]["inFilter"] = $model->customFields[$index16]->inFilter;
}
if (null !== $model->customFields[$index16]->inList) {
    $jsonData["customFields"][$index16]["inList"] = $model->customFields[$index16]->inList;
}
if (null !== $model->customFields[$index16]->inGroupActions) {
    $jsonData["customFields"][$index16]["inGroupActions"] = $model->customFields[$index16]->inGroupActions;
}
if (null !== $model->customFields[$index16]->type) {
    $jsonData["customFields"][$index16]["type"] = $model->customFields[$index16]->type;
}
if (null !== $model->customFields[$index16]->entity) {
    $jsonData["customFields"][$index16]["entity"] = $model->customFields[$index16]->entity;
}
if (null !== $model->customFields[$index16]->default) {
    $jsonData["customFields"][$index16]["default"] = $model->customFields[$index16]->default;
}
if (null !== $model->customFields[$index16]->ordering) {
    $jsonData["customFields"][$index16]["ordering"] = $model->customFields[$index16]->ordering;
}
if (null !== $model->customFields[$index16]->displayArea) {
    $jsonData["customFields"][$index16]["displayArea"] = $model->customFields[$index16]->displayArea;
}
if (null !== $model->customFields[$index16]->viewMode) {
    $jsonData["customFields"][$index16]["viewMode"] = $model->customFields[$index16]->viewMode;
}
if (null !== $model->customFields[$index16]->dictionary) {
    $jsonData["customFields"][$index16]["dictionary"] = $model->customFields[$index16]->dictionary;
}

if (0 === \count($jsonData["customFields"][$index16])) {
    $jsonData["customFields"][$index16] = $emptyObject;
}

}

}

if (0 === \count($jsonData)) {
    $jsonData = $emptyObject;
}


    return $jsonData;
}
