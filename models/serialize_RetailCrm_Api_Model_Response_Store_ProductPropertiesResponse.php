<?php

function serialize_RetailCrm_Api_Model_Response_Store_ProductPropertiesResponse(RetailCrm\Api\Model\Response\Store\ProductPropertiesResponse $model, bool $useStdClass = true)
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
if (null !== $model->properties) {
    $jsonData["properties"] = [];
foreach (array_keys($model->properties) as $index14) {
    $jsonData["properties"][$index14] = [];
if (null !== $model->properties[$index14]->sites) {
    $jsonData["properties"][$index14]["sites"] = $model->properties[$index14]->sites;
}
if (null !== $model->properties[$index14]->groups) {
    $jsonData["properties"][$index14]["groups"] = [];
foreach (array_keys($model->properties[$index14]->groups) as $index34) {
    $jsonData["properties"][$index14]["groups"][$index34] = [];
if (null !== $model->properties[$index14]->groups[$index34]->id) {
    $jsonData["properties"][$index14]["groups"][$index34]["id"] = $model->properties[$index14]->groups[$index34]->id;
}
if (null !== $model->properties[$index14]->groups[$index34]->name) {
    $jsonData["properties"][$index14]["groups"][$index34]["name"] = $model->properties[$index14]->groups[$index34]->name;
}

if (0 === \count($jsonData["properties"][$index14]["groups"][$index34])) {
    $jsonData["properties"][$index14]["groups"][$index34] = $emptyObject;
}

}

}
if (null !== $model->properties[$index14]->code) {
    $jsonData["properties"][$index14]["code"] = $model->properties[$index14]->code;
}
if (null !== $model->properties[$index14]->name) {
    $jsonData["properties"][$index14]["name"] = $model->properties[$index14]->name;
}
if (null !== $model->properties[$index14]->isNumeric) {
    $jsonData["properties"][$index14]["isNumeric"] = $model->properties[$index14]->isNumeric;
}

if (0 === \count($jsonData["properties"][$index14])) {
    $jsonData["properties"][$index14] = $emptyObject;
}

}

}

if (0 === \count($jsonData)) {
    $jsonData = $emptyObject;
}


    return $jsonData;
}
