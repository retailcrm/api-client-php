<?php

function serialize_RetailCrm_Api_Model_Response_CustomFields_CustomFieldsDictionariesResponse(RetailCrm\Api\Model\Response\CustomFields\CustomFieldsDictionariesResponse $model, bool $useStdClass = true)
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
if (null !== $model->customDictionaries) {
    $jsonData["customDictionaries"] = [];
foreach (array_keys($model->customDictionaries) as $index22) {
    $jsonData["customDictionaries"][$index22] = [];
if (null !== $model->customDictionaries[$index22]->name) {
    $jsonData["customDictionaries"][$index22]["name"] = $model->customDictionaries[$index22]->name;
}
if (null !== $model->customDictionaries[$index22]->code) {
    $jsonData["customDictionaries"][$index22]["code"] = $model->customDictionaries[$index22]->code;
}
if (null !== $model->customDictionaries[$index22]->elements) {
    $jsonData["customDictionaries"][$index22]["elements"] = [];
foreach (array_keys($model->customDictionaries[$index22]->elements) as $index44) {
    $jsonData["customDictionaries"][$index22]["elements"][$index44] = [];
if (null !== $model->customDictionaries[$index22]->elements[$index44]->name) {
    $jsonData["customDictionaries"][$index22]["elements"][$index44]["name"] = $model->customDictionaries[$index22]->elements[$index44]->name;
}
if (null !== $model->customDictionaries[$index22]->elements[$index44]->code) {
    $jsonData["customDictionaries"][$index22]["elements"][$index44]["code"] = $model->customDictionaries[$index22]->elements[$index44]->code;
}
if (null !== $model->customDictionaries[$index22]->elements[$index44]->ordering) {
    $jsonData["customDictionaries"][$index22]["elements"][$index44]["ordering"] = $model->customDictionaries[$index22]->elements[$index44]->ordering;
}

if (0 === \count($jsonData["customDictionaries"][$index22]["elements"][$index44])) {
    $jsonData["customDictionaries"][$index22]["elements"][$index44] = $emptyObject;
}

}

}

if (0 === \count($jsonData["customDictionaries"][$index22])) {
    $jsonData["customDictionaries"][$index22] = $emptyObject;
}

}

}

if (0 === \count($jsonData)) {
    $jsonData = $emptyObject;
}


    return $jsonData;
}
