<?php

function deserialize_RetailCrm_Api_Model_Response_Delivery_DeliveryShipmentsResponse(array $jsonData): RetailCrm\Api\Model\Response\Delivery\DeliveryShipmentsResponse
{
    
$model = new RetailCrm\Api\Model\Response\Delivery\DeliveryShipmentsResponse();
if (isset($jsonData['success'])) {
    $model->success = $jsonData['success'];

}
if (isset($jsonData['pagination'])) {
    
$model->pagination = new RetailCrm\Api\Model\Entity\Pagination();
if (isset($jsonData['pagination']['limit'])) {
    $model->pagination->limit = $jsonData['pagination']['limit'];

}
if (isset($jsonData['pagination']['totalCount'])) {
    $model->pagination->totalCount = $jsonData['pagination']['totalCount'];

}
if (isset($jsonData['pagination']['currentPage'])) {
    $model->pagination->currentPage = $jsonData['pagination']['currentPage'];

}
if (isset($jsonData['pagination']['totalPageCount'])) {
    $model->pagination->totalPageCount = $jsonData['pagination']['totalPageCount'];

}


}
if (isset($jsonData['deliveryShipments'])) {
    $model->deliveryShipments = [];
foreach (array_keys($jsonData['deliveryShipments']) as $index30) {
    
$model->deliveryShipments[$index30] = new RetailCrm\Api\Model\Entity\Delivery\DeliveryShipment();
if (isset($jsonData['deliveryShipments'][$index30]['integrationCode'])) {
    $model->deliveryShipments[$index30]->integrationCode = $jsonData['deliveryShipments'][$index30]['integrationCode'];

}
if (isset($jsonData['deliveryShipments'][$index30]['id'])) {
    $model->deliveryShipments[$index30]->id = $jsonData['deliveryShipments'][$index30]['id'];

}
if (isset($jsonData['deliveryShipments'][$index30]['externalId'])) {
    $model->deliveryShipments[$index30]->externalId = $jsonData['deliveryShipments'][$index30]['externalId'];

}
if (isset($jsonData['deliveryShipments'][$index30]['deliveryType'])) {
    $model->deliveryShipments[$index30]->deliveryType = $jsonData['deliveryShipments'][$index30]['deliveryType'];

}
if (isset($jsonData['deliveryShipments'][$index30]['store'])) {
    $model->deliveryShipments[$index30]->store = $jsonData['deliveryShipments'][$index30]['store'];

}
if (isset($jsonData['deliveryShipments'][$index30]['managerId'])) {
    $model->deliveryShipments[$index30]->managerId = $jsonData['deliveryShipments'][$index30]['managerId'];

}
if (isset($jsonData['deliveryShipments'][$index30]['status'])) {
    $model->deliveryShipments[$index30]->status = $jsonData['deliveryShipments'][$index30]['status'];

}
if (isset($jsonData['deliveryShipments'][$index30]['date'])) {
    $model->deliveryShipments[$index30]->date = \DateTime::createFromFormat('Y-m-d', $jsonData['deliveryShipments'][$index30]['date']);

}
if (isset($jsonData['deliveryShipments'][$index30]['time'])) {
    
$model->deliveryShipments[$index30]->time = new RetailCrm\Api\Model\Entity\Delivery\TimeInterval();
if (isset($jsonData['deliveryShipments'][$index30]['time']['from'])) {
    $model->deliveryShipments[$index30]->time->from = \DateTime::createFromFormat('H:i', $jsonData['deliveryShipments'][$index30]['time']['from']);

}
if (isset($jsonData['deliveryShipments'][$index30]['time']['to'])) {
    $model->deliveryShipments[$index30]->time->to = \DateTime::createFromFormat('H:i', $jsonData['deliveryShipments'][$index30]['time']['to']);

}
if (isset($jsonData['deliveryShipments'][$index30]['time']['custom'])) {
    $model->deliveryShipments[$index30]->time->custom = $jsonData['deliveryShipments'][$index30]['time']['custom'];

}


}
if (isset($jsonData['deliveryShipments'][$index30]['comment'])) {
    $model->deliveryShipments[$index30]->comment = $jsonData['deliveryShipments'][$index30]['comment'];

}
if (isset($jsonData['deliveryShipments'][$index30]['orders'])) {
    $model->deliveryShipments[$index30]->orders = [];
foreach (array_keys($jsonData['deliveryShipments'][$index30]['orders']) as $index50) {
    
$model->deliveryShipments[$index30]->orders[$index50] = new RetailCrm\Api\Model\Entity\Delivery\SerializedEntityOrder();
if (isset($jsonData['deliveryShipments'][$index30]['orders'][$index50]['id'])) {
    $model->deliveryShipments[$index30]->orders[$index50]->id = $jsonData['deliveryShipments'][$index30]['orders'][$index50]['id'];

}
if (isset($jsonData['deliveryShipments'][$index30]['orders'][$index50]['externalId'])) {
    $model->deliveryShipments[$index30]->orders[$index50]->externalId = $jsonData['deliveryShipments'][$index30]['orders'][$index50]['externalId'];

}
if (isset($jsonData['deliveryShipments'][$index30]['orders'][$index50]['number'])) {
    $model->deliveryShipments[$index30]->orders[$index50]->number = $jsonData['deliveryShipments'][$index30]['orders'][$index50]['number'];

}


}

}
if (isset($jsonData['deliveryShipments'][$index30]['extraData'])) {
    $model->deliveryShipments[$index30]->extraData = [];
foreach (array_keys($jsonData['deliveryShipments'][$index30]['extraData']) as $index53) {
    $model->deliveryShipments[$index30]->extraData[$index53] = $jsonData['deliveryShipments'][$index30]['extraData'][$index53];

}

}
if (isset($jsonData['deliveryShipments'][$index30]['lunchTime'])) {
    
$model->deliveryShipments[$index30]->lunchTime = new RetailCrm\Api\Model\Entity\Delivery\TimeInterval();
if (isset($jsonData['deliveryShipments'][$index30]['lunchTime']['from'])) {
    $model->deliveryShipments[$index30]->lunchTime->from = \DateTime::createFromFormat('H:i', $jsonData['deliveryShipments'][$index30]['lunchTime']['from']);

}
if (isset($jsonData['deliveryShipments'][$index30]['lunchTime']['to'])) {
    $model->deliveryShipments[$index30]->lunchTime->to = \DateTime::createFromFormat('H:i', $jsonData['deliveryShipments'][$index30]['lunchTime']['to']);

}
if (isset($jsonData['deliveryShipments'][$index30]['lunchTime']['custom'])) {
    $model->deliveryShipments[$index30]->lunchTime->custom = $jsonData['deliveryShipments'][$index30]['lunchTime']['custom'];

}


}


}

}



    return $model;
}
