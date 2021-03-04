<?php

function serialize_RetailCrm_Api_Model_Response_Segments_SegmentsResponse(RetailCrm\Api\Model\Response\Segments\SegmentsResponse $model, bool $useStdClass = true)
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
if (null !== $model->segments) {
    $jsonData["segments"] = [];
foreach (array_keys($model->segments) as $index12) {
    $jsonData["segments"][$index12] = [];
if (null !== $model->segments[$index12]->id) {
    $jsonData["segments"][$index12]["id"] = $model->segments[$index12]->id;
}
if (null !== $model->segments[$index12]->code) {
    $jsonData["segments"][$index12]["code"] = $model->segments[$index12]->code;
}
if (null !== $model->segments[$index12]->name) {
    $jsonData["segments"][$index12]["name"] = $model->segments[$index12]->name;
}
if (null !== $model->segments[$index12]->createdAt) {
    $jsonData["segments"][$index12]["createdAt"] = $model->segments[$index12]->createdAt->format('Y-m-d H:i:s');;
}
if (null !== $model->segments[$index12]->isDynamic) {
    $jsonData["segments"][$index12]["isDynamic"] = $model->segments[$index12]->isDynamic;
}
if (null !== $model->segments[$index12]->customersCount) {
    $jsonData["segments"][$index12]["customersCount"] = $model->segments[$index12]->customersCount;
}
if (null !== $model->segments[$index12]->active) {
    $jsonData["segments"][$index12]["active"] = $model->segments[$index12]->active;
}

if (0 === \count($jsonData["segments"][$index12])) {
    $jsonData["segments"][$index12] = $emptyObject;
}

}

}

if (0 === \count($jsonData)) {
    $jsonData = $emptyObject;
}


    return $jsonData;
}
