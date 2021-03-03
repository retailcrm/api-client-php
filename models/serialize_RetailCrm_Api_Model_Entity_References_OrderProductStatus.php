<?php

function serialize_RetailCrm_Api_Model_Entity_References_OrderProductStatus(RetailCrm\Api\Model\Entity\References\OrderProductStatus $model, bool $useStdClass = true)
{
    $emptyHashmap = $useStdClass ? new \stdClass() : [];
    $emptyObject = $useStdClass ? new \stdClass() : [];

    $jsonData = [];
if (null !== $model->code) {
    $jsonData["code"] = $model->code;
}
if (null !== $model->ordering) {
    $jsonData["ordering"] = $model->ordering;
}
if (null !== $model->active) {
    $jsonData["active"] = $model->active;
}
if (null !== $model->createdAt) {
    $jsonData["createdAt"] = $model->createdAt->format('Y-m-d H:i:s');;
}
if (null !== $model->orderStatusByProductStatus) {
    $jsonData["orderStatusByProductStatus"] = $model->orderStatusByProductStatus;
}
if (null !== $model->orderStatusForProductStatus) {
    $jsonData["orderStatusForProductStatus"] = $model->orderStatusForProductStatus;
}
if (null !== $model->cancelStatus) {
    $jsonData["cancelStatus"] = $model->cancelStatus;
}
if (null !== $model->name) {
    $jsonData["name"] = $model->name;
}

if (0 === \count($jsonData)) {
    $jsonData = $emptyObject;
}


    return $jsonData;
}
