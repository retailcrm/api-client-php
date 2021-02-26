<?php

function deserialize_RetailCrm_Api_Model_Response_Delivery_DeliveryShipmentsGetResponse(array $jsonData): RetailCrm\Api\Model\Response\Delivery\DeliveryShipmentsGetResponse
{
    
$model = new RetailCrm\Api\Model\Response\Delivery\DeliveryShipmentsGetResponse();
if (isset($jsonData['success'])) {
    $model->success = $jsonData['success'];

}
if (isset($jsonData['deliveryShipment'])) {
    
$model->deliveryShipment = new RetailCrm\Api\Model\Entity\Delivery\DeliveryShipment();
if (isset($jsonData['deliveryShipment']['integrationCode'])) {
    $model->deliveryShipment->integrationCode = $jsonData['deliveryShipment']['integrationCode'];

}
if (isset($jsonData['deliveryShipment']['id'])) {
    $model->deliveryShipment->id = $jsonData['deliveryShipment']['id'];

}
if (isset($jsonData['deliveryShipment']['externalId'])) {
    $model->deliveryShipment->externalId = $jsonData['deliveryShipment']['externalId'];

}
if (isset($jsonData['deliveryShipment']['deliveryType'])) {
    $model->deliveryShipment->deliveryType = $jsonData['deliveryShipment']['deliveryType'];

}
if (isset($jsonData['deliveryShipment']['store'])) {
    $model->deliveryShipment->store = $jsonData['deliveryShipment']['store'];

}
if (isset($jsonData['deliveryShipment']['managerId'])) {
    $model->deliveryShipment->managerId = $jsonData['deliveryShipment']['managerId'];

}
if (isset($jsonData['deliveryShipment']['status'])) {
    $model->deliveryShipment->status = $jsonData['deliveryShipment']['status'];

}
if (isset($jsonData['deliveryShipment']['date'])) {
    $model->deliveryShipment->date = \DateTime::createFromFormat('Y-m-d', $jsonData['deliveryShipment']['date']);

}
if (isset($jsonData['deliveryShipment']['time'])) {
    
$model->deliveryShipment->time = new RetailCrm\Api\Model\Entity\Delivery\TimeInterval();
if (isset($jsonData['deliveryShipment']['time']['from'])) {
    $model->deliveryShipment->time->from = \DateTime::createFromFormat('H:i', $jsonData['deliveryShipment']['time']['from']);

}
if (isset($jsonData['deliveryShipment']['time']['to'])) {
    $model->deliveryShipment->time->to = \DateTime::createFromFormat('H:i', $jsonData['deliveryShipment']['time']['to']);

}
if (isset($jsonData['deliveryShipment']['time']['custom'])) {
    $model->deliveryShipment->time->custom = $jsonData['deliveryShipment']['time']['custom'];

}


}
if (isset($jsonData['deliveryShipment']['comment'])) {
    $model->deliveryShipment->comment = $jsonData['deliveryShipment']['comment'];

}
if (isset($jsonData['deliveryShipment']['orders'])) {
    $model->deliveryShipment->orders = [];
foreach (array_keys($jsonData['deliveryShipment']['orders']) as $index39) {
    
$model->deliveryShipment->orders[$index39] = new RetailCrm\Api\Model\Entity\Delivery\SerializedEntityOrder();
if (isset($jsonData['deliveryShipment']['orders'][$index39]['id'])) {
    $model->deliveryShipment->orders[$index39]->id = $jsonData['deliveryShipment']['orders'][$index39]['id'];

}
if (isset($jsonData['deliveryShipment']['orders'][$index39]['externalId'])) {
    $model->deliveryShipment->orders[$index39]->externalId = $jsonData['deliveryShipment']['orders'][$index39]['externalId'];

}
if (isset($jsonData['deliveryShipment']['orders'][$index39]['number'])) {
    $model->deliveryShipment->orders[$index39]->number = $jsonData['deliveryShipment']['orders'][$index39]['number'];

}


}

}
if (isset($jsonData['deliveryShipment']['extraData'])) {
    $model->deliveryShipment->extraData = [];
foreach (array_keys($jsonData['deliveryShipment']['extraData']) as $index42) {
    $model->deliveryShipment->extraData[$index42] = $jsonData['deliveryShipment']['extraData'][$index42];

}

}
if (isset($jsonData['deliveryShipment']['lunchTime'])) {
    
$model->deliveryShipment->lunchTime = new RetailCrm\Api\Model\Entity\Delivery\TimeInterval();
if (isset($jsonData['deliveryShipment']['lunchTime']['from'])) {
    $model->deliveryShipment->lunchTime->from = \DateTime::createFromFormat('H:i', $jsonData['deliveryShipment']['lunchTime']['from']);

}
if (isset($jsonData['deliveryShipment']['lunchTime']['to'])) {
    $model->deliveryShipment->lunchTime->to = \DateTime::createFromFormat('H:i', $jsonData['deliveryShipment']['lunchTime']['to']);

}
if (isset($jsonData['deliveryShipment']['lunchTime']['custom'])) {
    $model->deliveryShipment->lunchTime->custom = $jsonData['deliveryShipment']['lunchTime']['custom'];

}


}


}



    return $model;
}
