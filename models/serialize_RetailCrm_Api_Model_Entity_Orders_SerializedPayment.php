<?php

function serialize_RetailCrm_Api_Model_Entity_Orders_SerializedPayment(RetailCrm\Api\Model\Entity\Orders\SerializedPayment $model, bool $useStdClass = true)
{
    $emptyHashmap = $useStdClass ? new \stdClass() : [];
    $emptyObject = $useStdClass ? new \stdClass() : [];

    $jsonData = [];
if (null !== $model->id) {
    $jsonData["id"] = $model->id;
}
if (null !== $model->status) {
    $jsonData["status"] = $model->status;
}
if (null !== $model->type) {
    $jsonData["type"] = $model->type;
}
if (null !== $model->externalId) {
    $jsonData["externalId"] = $model->externalId;
}
if (null !== $model->amount) {
    $jsonData["amount"] = $model->amount;
}
if (null !== $model->paidAt) {
    $jsonData["paidAt"] = $model->paidAt->format('Y-m-d H:i:s');;
}
if (null !== $model->comment) {
    $jsonData["comment"] = $model->comment;
}
if (null !== $model->order) {
    $jsonData["order"] = [];
if (null !== $model->order->id) {
    $jsonData["order"]["id"] = $model->order->id;
}
if (null !== $model->order->externalId) {
    $jsonData["order"]["externalId"] = $model->order->externalId;
}
if (null !== $model->order->number) {
    $jsonData["order"]["number"] = $model->order->number;
}

if (0 === \count($jsonData["order"])) {
    $jsonData["order"] = $emptyObject;
}

}

if (0 === \count($jsonData)) {
    $jsonData = $emptyObject;
}


    return $jsonData;
}
