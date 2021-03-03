<?php

function serialize_RetailCrm_Api_Model_Entity_Payments_ModuleRefund(RetailCrm\Api\Model\Entity\Payments\ModuleRefund $model, bool $useStdClass = true)
{
    $emptyHashmap = $useStdClass ? new \stdClass() : [];
    $emptyObject = $useStdClass ? new \stdClass() : [];

    $jsonData = [];
if (null !== $model->status) {
    $jsonData["status"] = $model->status;
}
if (null !== $model->id) {
    $jsonData["id"] = $model->id;
}
if (null !== $model->comment) {
    $jsonData["comment"] = $model->comment;
}
if (null !== $model->amount) {
    $jsonData["amount"] = $model->amount;
}

if (0 === \count($jsonData)) {
    $jsonData = $emptyObject;
}


    return $jsonData;
}
