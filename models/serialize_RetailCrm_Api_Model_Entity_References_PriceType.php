<?php

function serialize_RetailCrm_Api_Model_Entity_References_PriceType(RetailCrm\Api\Model\Entity\References\PriceType $model, bool $useStdClass = true)
{
    $emptyHashmap = $useStdClass ? new \stdClass() : [];
    $emptyObject = $useStdClass ? new \stdClass() : [];

    $jsonData = [];
if (null !== $model->id) {
    $jsonData["id"] = $model->id;
}
if (null !== $model->code) {
    $jsonData["code"] = $model->code;
}
if (null !== $model->name) {
    $jsonData["name"] = $model->name;
}
if (null !== $model->active) {
    $jsonData["active"] = $model->active;
}
if (null !== $model->default) {
    $jsonData["default"] = $model->default;
}
if (null !== $model->description) {
    $jsonData["description"] = $model->description;
}
if (null !== $model->filterExpression) {
    $jsonData["filterExpression"] = $model->filterExpression;
}
if (null !== $model->geo) {
    $jsonData["geo"] = [];
foreach (array_keys($model->geo) as $index7) {
    $jsonData["geo"][$index7] = [];
if (null !== $model->geo[$index7]->country) {
    $jsonData["geo"][$index7]["country"] = $model->geo[$index7]->country;
}
if (null !== $model->geo[$index7]->regionId) {
    $jsonData["geo"][$index7]["regionId"] = $model->geo[$index7]->regionId;
}
if (null !== $model->geo[$index7]->region) {
    $jsonData["geo"][$index7]["region"] = $model->geo[$index7]->region;
}
if (null !== $model->geo[$index7]->cityId) {
    $jsonData["geo"][$index7]["cityId"] = $model->geo[$index7]->cityId;
}
if (null !== $model->geo[$index7]->city) {
    $jsonData["geo"][$index7]["city"] = $model->geo[$index7]->city;
}

if (0 === \count($jsonData["geo"][$index7])) {
    $jsonData["geo"][$index7] = $emptyObject;
}

}

}
if (null !== $model->groups) {
    $jsonData["groups"] = [];
foreach (array_keys($model->groups) as $index10) {
    $jsonData["groups"] = $model->groups;
}

}
if (null !== $model->ordering) {
    $jsonData["ordering"] = $model->ordering;
}

if (0 === \count($jsonData)) {
    $jsonData = $emptyObject;
}


    return $jsonData;
}
