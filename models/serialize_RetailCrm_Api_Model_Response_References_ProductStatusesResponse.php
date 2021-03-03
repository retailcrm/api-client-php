<?php

function serialize_RetailCrm_Api_Model_Response_References_ProductStatusesResponse(RetailCrm\Api\Model\Response\References\ProductStatusesResponse $model, bool $useStdClass = true)
{
    $emptyHashmap = $useStdClass ? new \stdClass() : [];
    $emptyObject = $useStdClass ? new \stdClass() : [];

    $jsonData = [];
if (null !== $model->success) {
    $jsonData["success"] = $model->success;
}
if (null !== $model->productStatuses) {
    $jsonData["productStatuses"] = [];
foreach (array_keys($model->productStatuses) as $index19) {
    $jsonData["productStatuses"][$index19] = [];
if (null !== $model->productStatuses[$index19]->code) {
    $jsonData["productStatuses"][$index19]["code"] = $model->productStatuses[$index19]->code;
}
if (null !== $model->productStatuses[$index19]->ordering) {
    $jsonData["productStatuses"][$index19]["ordering"] = $model->productStatuses[$index19]->ordering;
}
if (null !== $model->productStatuses[$index19]->active) {
    $jsonData["productStatuses"][$index19]["active"] = $model->productStatuses[$index19]->active;
}
if (null !== $model->productStatuses[$index19]->createdAt) {
    $jsonData["productStatuses"][$index19]["createdAt"] = $model->productStatuses[$index19]->createdAt->format('Y-m-d H:i:s');;
}
if (null !== $model->productStatuses[$index19]->orderStatusByProductStatus) {
    $jsonData["productStatuses"][$index19]["orderStatusByProductStatus"] = $model->productStatuses[$index19]->orderStatusByProductStatus;
}
if (null !== $model->productStatuses[$index19]->orderStatusForProductStatus) {
    $jsonData["productStatuses"][$index19]["orderStatusForProductStatus"] = $model->productStatuses[$index19]->orderStatusForProductStatus;
}
if (null !== $model->productStatuses[$index19]->cancelStatus) {
    $jsonData["productStatuses"][$index19]["cancelStatus"] = $model->productStatuses[$index19]->cancelStatus;
}
if (null !== $model->productStatuses[$index19]->name) {
    $jsonData["productStatuses"][$index19]["name"] = $model->productStatuses[$index19]->name;
}

if (0 === \count($jsonData["productStatuses"][$index19])) {
    $jsonData["productStatuses"][$index19] = $emptyObject;
}

}

}

if (0 === \count($jsonData)) {
    $jsonData = $emptyObject;
}


    return $jsonData;
}
