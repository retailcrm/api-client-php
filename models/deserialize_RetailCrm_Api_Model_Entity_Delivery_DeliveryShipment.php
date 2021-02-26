<?php

function deserialize_RetailCrm_Api_Model_Entity_Delivery_DeliveryShipment(array $jsonData): RetailCrm\Api\Model\Entity\Delivery\DeliveryShipment
{
    
$model = new RetailCrm\Api\Model\Entity\Delivery\DeliveryShipment();
if (isset($jsonData['integrationCode'])) {
    $model->integrationCode = $jsonData['integrationCode'];

}
if (isset($jsonData['id'])) {
    $model->id = $jsonData['id'];

}
if (isset($jsonData['externalId'])) {
    $model->externalId = $jsonData['externalId'];

}
if (isset($jsonData['deliveryType'])) {
    $model->deliveryType = $jsonData['deliveryType'];

}
if (isset($jsonData['store'])) {
    $model->store = $jsonData['store'];

}
if (isset($jsonData['managerId'])) {
    $model->managerId = $jsonData['managerId'];

}
if (isset($jsonData['status'])) {
    $model->status = $jsonData['status'];

}
if (isset($jsonData['date'])) {
    $model->date = \DateTime::createFromFormat('Y-m-d', $jsonData['date']);

}
if (isset($jsonData['time'])) {
    
$model->time = new RetailCrm\Api\Model\Entity\Delivery\TimeInterval();
if (isset($jsonData['time']['from'])) {
    $model->time->from = \DateTime::createFromFormat('H:i', $jsonData['time']['from']);

}
if (isset($jsonData['time']['to'])) {
    $model->time->to = \DateTime::createFromFormat('H:i', $jsonData['time']['to']);

}
if (isset($jsonData['time']['custom'])) {
    $model->time->custom = $jsonData['time']['custom'];

}


}
if (isset($jsonData['comment'])) {
    $model->comment = $jsonData['comment'];

}
if (isset($jsonData['orders'])) {
    $model->orders = [];
foreach (array_keys($jsonData['orders']) as $index19) {
    
$model->orders[$index19] = new RetailCrm\Api\Model\Entity\Delivery\SerializedEntityOrder();
if (isset($jsonData['orders'][$index19]['id'])) {
    $model->orders[$index19]->id = $jsonData['orders'][$index19]['id'];

}
if (isset($jsonData['orders'][$index19]['externalId'])) {
    $model->orders[$index19]->externalId = $jsonData['orders'][$index19]['externalId'];

}
if (isset($jsonData['orders'][$index19]['number'])) {
    $model->orders[$index19]->number = $jsonData['orders'][$index19]['number'];

}


}

}
if (isset($jsonData['extraData'])) {
    $model->extraData = [];
foreach (array_keys($jsonData['extraData']) as $index22) {
    $model->extraData[$index22] = $jsonData['extraData'][$index22];

}

}
if (isset($jsonData['lunchTime'])) {
    
$model->lunchTime = new RetailCrm\Api\Model\Entity\Delivery\TimeInterval();
if (isset($jsonData['lunchTime']['from'])) {
    $model->lunchTime->from = \DateTime::createFromFormat('H:i', $jsonData['lunchTime']['from']);

}
if (isset($jsonData['lunchTime']['to'])) {
    $model->lunchTime->to = \DateTime::createFromFormat('H:i', $jsonData['lunchTime']['to']);

}
if (isset($jsonData['lunchTime']['custom'])) {
    $model->lunchTime->custom = $jsonData['lunchTime']['custom'];

}


}



    return $model;
}
