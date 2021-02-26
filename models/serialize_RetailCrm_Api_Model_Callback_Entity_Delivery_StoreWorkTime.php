<?php

function serialize_RetailCrm_Api_Model_Callback_Entity_Delivery_StoreWorkTime(RetailCrm\Api\Model\Callback\Entity\Delivery\StoreWorkTime $model, bool $useStdClass = true)
{
    $emptyHashmap = $useStdClass ? new \stdClass() : [];
    $emptyObject = $useStdClass ? new \stdClass() : [];

    $jsonData = [];
if (null !== $model->startTime) {
    $jsonData["startTime"] = $model->startTime;
}
if (null !== $model->endTime) {
    $jsonData["endTime"] = $model->endTime;
}
if (null !== $model->lunchStartTime) {
    $jsonData["lunchStartTime"] = $model->lunchStartTime;
}
if (null !== $model->lunchEndTime) {
    $jsonData["lunchEndTime"] = $model->lunchEndTime;
}

if (0 === \count($jsonData)) {
    $jsonData = $emptyObject;
}


    return $jsonData;
}
