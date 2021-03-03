<?php

function deserialize_RetailCrm_Api_Model_Response_References_CouriersResponse(array $jsonData): RetailCrm\Api\Model\Response\References\CouriersResponse
{
    
$model = new RetailCrm\Api\Model\Response\References\CouriersResponse();
if (isset($jsonData['success'])) {
    $model->success = $jsonData['success'];

}
if (isset($jsonData['couriers'])) {
    $model->couriers = [];
foreach (array_keys($jsonData['couriers']) as $index21) {
    
$model->couriers[$index21] = new RetailCrm\Api\Model\Entity\References\Courier();
if (isset($jsonData['couriers'][$index21]['id'])) {
    $model->couriers[$index21]->id = $jsonData['couriers'][$index21]['id'];

}
if (isset($jsonData['couriers'][$index21]['firstName'])) {
    $model->couriers[$index21]->firstName = $jsonData['couriers'][$index21]['firstName'];

}
if (isset($jsonData['couriers'][$index21]['lastName'])) {
    $model->couriers[$index21]->lastName = $jsonData['couriers'][$index21]['lastName'];

}
if (isset($jsonData['couriers'][$index21]['patronymic'])) {
    $model->couriers[$index21]->patronymic = $jsonData['couriers'][$index21]['patronymic'];

}
if (isset($jsonData['couriers'][$index21]['active'])) {
    $model->couriers[$index21]->active = $jsonData['couriers'][$index21]['active'];

}
if (isset($jsonData['couriers'][$index21]['email'])) {
    $model->couriers[$index21]->email = $jsonData['couriers'][$index21]['email'];

}
if (isset($jsonData['couriers'][$index21]['phone'])) {
    
$model->couriers[$index21]->phone = new RetailCrm\Api\Model\Entity\Orders\Delivery\CourierPhone();
if (isset($jsonData['couriers'][$index21]['phone']['number'])) {
    $model->couriers[$index21]->phone->number = $jsonData['couriers'][$index21]['phone']['number'];

}


}
if (isset($jsonData['couriers'][$index21]['description'])) {
    $model->couriers[$index21]->description = $jsonData['couriers'][$index21]['description'];

}


}

}



    return $model;
}
