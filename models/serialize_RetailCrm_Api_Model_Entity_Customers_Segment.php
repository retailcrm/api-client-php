<?php

function serialize_RetailCrm_Api_Model_Entity_Customers_Segment(RetailCrm\Api\Model\Entity\Customers\Segment $model, bool $useStdClass = true)
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
if (null !== $model->createdAt) {
    $jsonData["createdAt"] = $model->createdAt->format('Y-m-d H:i:s');;
}
if (null !== $model->isDynamic) {
    $jsonData["isDynamic"] = $model->isDynamic;
}
if (null !== $model->customersCount) {
    $jsonData["customersCount"] = $model->customersCount;
}
if (null !== $model->active) {
    $jsonData["active"] = $model->active;
}

if (0 === \count($jsonData)) {
    $jsonData = $emptyObject;
}


    return $jsonData;
}
