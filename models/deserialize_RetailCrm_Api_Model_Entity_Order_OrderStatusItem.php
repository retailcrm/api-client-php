<?php

function deserialize_RetailCrm_Api_Model_Entity_Order_OrderStatusItem(array $jsonData): RetailCrm\Api\Model\Entity\Order\OrderStatusItem
{
    
$model = new RetailCrm\Api\Model\Entity\Order\OrderStatusItem();
if (isset($jsonData['id'])) {
    $model->id = $jsonData['id'];

}
if (isset($jsonData['externalId'])) {
    $model->externalId = $jsonData['externalId'];

}
if (isset($jsonData['status'])) {
    $model->status = $jsonData['status'];

}
if (isset($jsonData['group'])) {
    $model->group = $jsonData['group'];

}



    return $model;
}
