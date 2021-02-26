<?php

function deserialize_RetailCrm_Api_Model_Callback_Entity_Delivery_StoreWorkTime(array $jsonData): RetailCrm\Api\Model\Callback\Entity\Delivery\StoreWorkTime
{
    
$model = new RetailCrm\Api\Model\Callback\Entity\Delivery\StoreWorkTime();
if (isset($jsonData['startTime'])) {
    $model->startTime = $jsonData['startTime'];

}
if (isset($jsonData['endTime'])) {
    $model->endTime = $jsonData['endTime'];

}
if (isset($jsonData['lunchStartTime'])) {
    $model->lunchStartTime = $jsonData['lunchStartTime'];

}
if (isset($jsonData['lunchEndTime'])) {
    $model->lunchEndTime = $jsonData['lunchEndTime'];

}



    return $model;
}
