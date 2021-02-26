<?php

function serialize_RetailCrm_Api_Model_Response_CustomFields_CustomFieldsGetResponse(RetailCrm\Api\Model\Response\CustomFields\CustomFieldsGetResponse $model, bool $useStdClass = true)
{
    $emptyHashmap = $useStdClass ? new \stdClass() : [];
    $emptyObject = $useStdClass ? new \stdClass() : [];

    $jsonData = [];
if (null !== $model->success) {
    $jsonData["success"] = $model->success;
}
if (null !== $model->customField) {
    $jsonData["customField"] = [];
if (null !== $model->customField->name) {
    $jsonData["customField"]["name"] = $model->customField->name;
}
if (null !== $model->customField->code) {
    $jsonData["customField"]["code"] = $model->customField->code;
}
if (null !== $model->customField->required) {
    $jsonData["customField"]["required"] = $model->customField->required;
}
if (null !== $model->customField->inFilter) {
    $jsonData["customField"]["inFilter"] = $model->customField->inFilter;
}
if (null !== $model->customField->inList) {
    $jsonData["customField"]["inList"] = $model->customField->inList;
}
if (null !== $model->customField->inGroupActions) {
    $jsonData["customField"]["inGroupActions"] = $model->customField->inGroupActions;
}
if (null !== $model->customField->type) {
    $jsonData["customField"]["type"] = $model->customField->type;
}
if (null !== $model->customField->entity) {
    $jsonData["customField"]["entity"] = $model->customField->entity;
}
if (null !== $model->customField->default) {
    $jsonData["customField"]["default"] = $model->customField->default;
}
if (null !== $model->customField->ordering) {
    $jsonData["customField"]["ordering"] = $model->customField->ordering;
}
if (null !== $model->customField->displayArea) {
    $jsonData["customField"]["displayArea"] = $model->customField->displayArea;
}
if (null !== $model->customField->viewMode) {
    $jsonData["customField"]["viewMode"] = $model->customField->viewMode;
}
if (null !== $model->customField->dictionary) {
    $jsonData["customField"]["dictionary"] = $model->customField->dictionary;
}

if (0 === \count($jsonData["customField"])) {
    $jsonData["customField"] = $emptyObject;
}

}

if (0 === \count($jsonData)) {
    $jsonData = $emptyObject;
}


    return $jsonData;
}
