<?php

function serialize_RetailCrm_Api_Model_Entity_CustomFields_CustomField(RetailCrm\Api\Model\Entity\CustomFields\CustomField $model, bool $useStdClass = true)
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
if (null !== $model->required) {
    $jsonData["required"] = $model->required;
}
if (null !== $model->inFilter) {
    $jsonData["inFilter"] = $model->inFilter;
}
if (null !== $model->inList) {
    $jsonData["inList"] = $model->inList;
}
if (null !== $model->inGroupActions) {
    $jsonData["inGroupActions"] = $model->inGroupActions;
}
if (null !== $model->type) {
    $jsonData["type"] = $model->type;
}
if (null !== $model->entity) {
    $jsonData["entity"] = $model->entity;
}
if (null !== $model->default) {
    $jsonData["default"] = $model->default;
}
if (null !== $model->ordering) {
    $jsonData["ordering"] = $model->ordering;
}
if (null !== $model->displayArea) {
    $jsonData["displayArea"] = $model->displayArea;
}
if (null !== $model->viewMode) {
    $jsonData["viewMode"] = $model->viewMode;
}
if (null !== $model->dictionary) {
    $jsonData["dictionary"] = $model->dictionary;
}

if (0 === \count($jsonData)) {
    $jsonData = $emptyObject;
}


    return $jsonData;
}
