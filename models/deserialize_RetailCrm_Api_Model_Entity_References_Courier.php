<?php

function deserialize_RetailCrm_Api_Model_Entity_References_Courier(array $jsonData): RetailCrm\Api\Model\Entity\References\Courier
{
    
$model = new RetailCrm\Api\Model\Entity\References\Courier();
if (isset($jsonData['id'])) {
    $model->id = $jsonData['id'];

}
if (isset($jsonData['firstName'])) {
    $model->firstName = $jsonData['firstName'];

}
if (isset($jsonData['lastName'])) {
    $model->lastName = $jsonData['lastName'];

}
if (isset($jsonData['patronymic'])) {
    $model->patronymic = $jsonData['patronymic'];

}
if (isset($jsonData['active'])) {
    $model->active = $jsonData['active'];

}
if (isset($jsonData['email'])) {
    $model->email = $jsonData['email'];

}
if (isset($jsonData['phone'])) {
    
$model->phone = new RetailCrm\Api\Model\Entity\Orders\Delivery\CourierPhone();
if (isset($jsonData['phone']['number'])) {
    $model->phone->number = $jsonData['phone']['number'];

}


}
if (isset($jsonData['description'])) {
    $model->description = $jsonData['description'];

}



    return $model;
}
