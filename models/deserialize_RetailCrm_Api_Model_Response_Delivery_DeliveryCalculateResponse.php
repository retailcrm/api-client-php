<?php

function deserialize_RetailCrm_Api_Model_Response_Delivery_DeliveryCalculateResponse(array $jsonData): RetailCrm\Api\Model\Response\Delivery\DeliveryCalculateResponse
{
    
$model = new RetailCrm\Api\Model\Response\Delivery\DeliveryCalculateResponse();
if (isset($jsonData['success'])) {
    $model->success = $jsonData['success'];

}
if (isset($jsonData['calculations'])) {
    $model->calculations = [];
foreach (array_keys($jsonData['calculations']) as $index25) {
    
$model->calculations[$index25] = new RetailCrm\Api\Model\Entity\Delivery\DeliveryCalculation();
if (isset($jsonData['calculations'][$index25]['code'])) {
    $model->calculations[$index25]->code = $jsonData['calculations'][$index25]['code'];

}
if (isset($jsonData['calculations'][$index25]['available'])) {
    $model->calculations[$index25]->available = $jsonData['calculations'][$index25]['available'];

}
if (isset($jsonData['calculations'][$index25]['vatRate'])) {
    $model->calculations[$index25]->vatRate = $jsonData['calculations'][$index25]['vatRate'];

}
if (isset($jsonData['calculations'][$index25]['cost'])) {
    $model->calculations[$index25]->cost = (float) $jsonData['calculations'][$index25]['cost'];

}


}

}



    return $model;
}
