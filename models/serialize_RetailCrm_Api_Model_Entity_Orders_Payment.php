<?php

function serialize_RetailCrm_Api_Model_Entity_Orders_Payment(RetailCrm\Api\Model\Entity\Orders\Payment $model, bool $useStdClass = true)
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

if (0 === \count($jsonData)) {
    $jsonData = $emptyObject;
}


    return $jsonData;
}
