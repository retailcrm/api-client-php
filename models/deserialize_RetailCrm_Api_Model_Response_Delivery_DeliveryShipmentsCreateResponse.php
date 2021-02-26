<?php

function deserialize_RetailCrm_Api_Model_Response_Delivery_DeliveryShipmentsCreateResponse(array $jsonData): RetailCrm\Api\Model\Response\Delivery\DeliveryShipmentsCreateResponse
{
    
$model = new RetailCrm\Api\Model\Response\Delivery\DeliveryShipmentsCreateResponse();
if (isset($jsonData['success'])) {
    $model->success = $jsonData['success'];

}
if (isset($jsonData['id'])) {
    $model->id = $jsonData['id'];

}
if (isset($jsonData['status'])) {
    $model->status = $jsonData['status'];

}



    return $model;
}
