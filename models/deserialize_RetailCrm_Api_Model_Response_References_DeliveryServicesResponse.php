<?php

function deserialize_RetailCrm_Api_Model_Response_References_DeliveryServicesResponse(array $jsonData): RetailCrm\Api\Model\Response\References\DeliveryServicesResponse
{
    
$model = new RetailCrm\Api\Model\Response\References\DeliveryServicesResponse();
if (isset($jsonData['success'])) {
    $model->success = $jsonData['success'];

}
if (isset($jsonData['deliveryServices'])) {
    $model->deliveryServices = [];
foreach (array_keys($jsonData['deliveryServices']) as $index29) {
    
$model->deliveryServices[$index29] = new RetailCrm\Api\Model\Entity\References\DeliveryService();
if (isset($jsonData['deliveryServices'][$index29]['name'])) {
    $model->deliveryServices[$index29]->name = $jsonData['deliveryServices'][$index29]['name'];

}
if (isset($jsonData['deliveryServices'][$index29]['code'])) {
    $model->deliveryServices[$index29]->code = $jsonData['deliveryServices'][$index29]['code'];

}
if (isset($jsonData['deliveryServices'][$index29]['active'])) {
    $model->deliveryServices[$index29]->active = $jsonData['deliveryServices'][$index29]['active'];

}


}

}



    return $model;
}
