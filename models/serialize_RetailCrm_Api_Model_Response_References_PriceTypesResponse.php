<?php

function serialize_RetailCrm_Api_Model_Response_References_PriceTypesResponse(RetailCrm\Api\Model\Response\References\PriceTypesResponse $model, bool $useStdClass = true)
{
    $emptyHashmap = $useStdClass ? new \stdClass() : [];
    $emptyObject = $useStdClass ? new \stdClass() : [];

    $jsonData = [];
if (null !== $model->success) {
    $jsonData["success"] = $model->success;
}
if (null !== $model->priceTypes) {
    $jsonData["priceTypes"] = [];
foreach (array_keys($model->priceTypes) as $index14) {
    $jsonData["priceTypes"][$index14] = [];
if (null !== $model->priceTypes[$index14]->id) {
    $jsonData["priceTypes"][$index14]["id"] = $model->priceTypes[$index14]->id;
}
if (null !== $model->priceTypes[$index14]->code) {
    $jsonData["priceTypes"][$index14]["code"] = $model->priceTypes[$index14]->code;
}
if (null !== $model->priceTypes[$index14]->name) {
    $jsonData["priceTypes"][$index14]["name"] = $model->priceTypes[$index14]->name;
}
if (null !== $model->priceTypes[$index14]->active) {
    $jsonData["priceTypes"][$index14]["active"] = $model->priceTypes[$index14]->active;
}
if (null !== $model->priceTypes[$index14]->default) {
    $jsonData["priceTypes"][$index14]["default"] = $model->priceTypes[$index14]->default;
}
if (null !== $model->priceTypes[$index14]->description) {
    $jsonData["priceTypes"][$index14]["description"] = $model->priceTypes[$index14]->description;
}
if (null !== $model->priceTypes[$index14]->filterExpression) {
    $jsonData["priceTypes"][$index14]["filterExpression"] = $model->priceTypes[$index14]->filterExpression;
}
if (null !== $model->priceTypes[$index14]->geo) {
    $jsonData["priceTypes"][$index14]["geo"] = [];
foreach (array_keys($model->priceTypes[$index14]->geo) as $index31) {
    $jsonData["priceTypes"][$index14]["geo"][$index31] = [];
if (null !== $model->priceTypes[$index14]->geo[$index31]->country) {
    $jsonData["priceTypes"][$index14]["geo"][$index31]["country"] = $model->priceTypes[$index14]->geo[$index31]->country;
}
if (null !== $model->priceTypes[$index14]->geo[$index31]->regionId) {
    $jsonData["priceTypes"][$index14]["geo"][$index31]["regionId"] = $model->priceTypes[$index14]->geo[$index31]->regionId;
}
if (null !== $model->priceTypes[$index14]->geo[$index31]->region) {
    $jsonData["priceTypes"][$index14]["geo"][$index31]["region"] = $model->priceTypes[$index14]->geo[$index31]->region;
}
if (null !== $model->priceTypes[$index14]->geo[$index31]->cityId) {
    $jsonData["priceTypes"][$index14]["geo"][$index31]["cityId"] = $model->priceTypes[$index14]->geo[$index31]->cityId;
}
if (null !== $model->priceTypes[$index14]->geo[$index31]->city) {
    $jsonData["priceTypes"][$index14]["geo"][$index31]["city"] = $model->priceTypes[$index14]->geo[$index31]->city;
}

if (0 === \count($jsonData["priceTypes"][$index14]["geo"][$index31])) {
    $jsonData["priceTypes"][$index14]["geo"][$index31] = $emptyObject;
}

}

}
if (null !== $model->priceTypes[$index14]->groups) {
    $jsonData["priceTypes"][$index14]["groups"] = [];
foreach (array_keys($model->priceTypes[$index14]->groups) as $index34) {
    $jsonData["priceTypes"][$index14]["groups"] = $model->priceTypes[$index14]->groups;
}

}
if (null !== $model->priceTypes[$index14]->ordering) {
    $jsonData["priceTypes"][$index14]["ordering"] = $model->priceTypes[$index14]->ordering;
}

if (0 === \count($jsonData["priceTypes"][$index14])) {
    $jsonData["priceTypes"][$index14] = $emptyObject;
}

}

}

if (0 === \count($jsonData)) {
    $jsonData = $emptyObject;
}


    return $jsonData;
}
