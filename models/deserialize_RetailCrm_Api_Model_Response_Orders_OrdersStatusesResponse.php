<?php

function deserialize_RetailCrm_Api_Model_Response_Orders_OrdersStatusesResponse(array $jsonData): RetailCrm\Api\Model\Response\Orders\OrdersStatusesResponse
{
    
$model = new RetailCrm\Api\Model\Response\Orders\OrdersStatusesResponse();
if (isset($jsonData['success'])) {
    $model->success = $jsonData['success'];

}
if (isset($jsonData['orders'])) {
    $model->orders = [];
foreach (array_keys($jsonData['orders']) as $index19) {
    
$model->orders[$index19] = new RetailCrm\Api\Model\Entity\Order\OrderStatusItem();
if (isset($jsonData['orders'][$index19]['id'])) {
    $model->orders[$index19]->id = $jsonData['orders'][$index19]['id'];

}
if (isset($jsonData['orders'][$index19]['externalId'])) {
    $model->orders[$index19]->externalId = $jsonData['orders'][$index19]['externalId'];

}
if (isset($jsonData['orders'][$index19]['status'])) {
    $model->orders[$index19]->status = $jsonData['orders'][$index19]['status'];

}
if (isset($jsonData['orders'][$index19]['group'])) {
    $model->orders[$index19]->group = $jsonData['orders'][$index19]['group'];

}


}

}



    return $model;
}
