<?php

function serialize_RetailCrm_Api_Model_Response_Orders_OrdersStatusesResponse(RetailCrm\Api\Model\Response\Orders\OrdersStatusesResponse $model, bool $useStdClass = true)
{
    $emptyHashmap = $useStdClass ? new \stdClass() : [];
    $emptyObject = $useStdClass ? new \stdClass() : [];

    $jsonData = [];
if (null !== $model->success) {
    $jsonData["success"] = $model->success;
}
if (null !== $model->orders) {
    $jsonData["orders"] = [];
foreach (array_keys($model->orders) as $index10) {
    $jsonData["orders"][$index10] = [];
if (null !== $model->orders[$index10]->id) {
    $jsonData["orders"][$index10]["id"] = $model->orders[$index10]->id;
}
if (null !== $model->orders[$index10]->externalId) {
    $jsonData["orders"][$index10]["externalId"] = $model->orders[$index10]->externalId;
}
if (null !== $model->orders[$index10]->status) {
    $jsonData["orders"][$index10]["status"] = $model->orders[$index10]->status;
}
if (null !== $model->orders[$index10]->group) {
    $jsonData["orders"][$index10]["group"] = $model->orders[$index10]->group;
}

if (0 === \count($jsonData["orders"][$index10])) {
    $jsonData["orders"][$index10] = $emptyObject;
}

}

}

if (0 === \count($jsonData)) {
    $jsonData = $emptyObject;
}


    return $jsonData;
}
