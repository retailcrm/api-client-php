<?php

function serialize_RetailCrm_Api_Model_Response_Store_ProductGroupsResponse(RetailCrm\Api\Model\Response\Store\ProductGroupsResponse $model, bool $useStdClass = true)
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
if (null !== $model->productGroup) {
    $jsonData["productGroup"] = [];
foreach (array_keys($model->productGroup) as $index16) {
    $jsonData["productGroup"][$index16] = [];
if (null !== $model->productGroup[$index16]->parentId) {
    $jsonData["productGroup"][$index16]["parentId"] = $model->productGroup[$index16]->parentId;
}
if (null !== $model->productGroup[$index16]->site) {
    $jsonData["productGroup"][$index16]["site"] = $model->productGroup[$index16]->site;
}
if (null !== $model->productGroup[$index16]->id) {
    $jsonData["productGroup"][$index16]["id"] = $model->productGroup[$index16]->id;
}
if (null !== $model->productGroup[$index16]->name) {
    $jsonData["productGroup"][$index16]["name"] = $model->productGroup[$index16]->name;
}
if (null !== $model->productGroup[$index16]->externalId) {
    $jsonData["productGroup"][$index16]["externalId"] = $model->productGroup[$index16]->externalId;
}
if (null !== $model->productGroup[$index16]->active) {
    $jsonData["productGroup"][$index16]["active"] = $model->productGroup[$index16]->active;
}

if (0 === \count($jsonData["productGroup"][$index16])) {
    $jsonData["productGroup"][$index16] = $emptyObject;
}

}

}

if (0 === \count($jsonData)) {
    $jsonData = $emptyObject;
}


    return $jsonData;
}
