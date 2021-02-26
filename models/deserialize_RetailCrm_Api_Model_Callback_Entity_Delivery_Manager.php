<?php

function deserialize_RetailCrm_Api_Model_Callback_Entity_Delivery_Manager(array $jsonData): RetailCrm\Api\Model\Callback\Entity\Delivery\Manager
{
    
$model = new RetailCrm\Api\Model\Callback\Entity\Delivery\Manager();
if (isset($jsonData['id'])) {
    $model->id = $jsonData['id'];

}
if (isset($jsonData['lastName'])) {
    $model->lastName = $jsonData['lastName'];

}
if (isset($jsonData['firstName'])) {
    $model->firstName = $jsonData['firstName'];

}
if (isset($jsonData['patronymic'])) {
    $model->patronymic = $jsonData['patronymic'];

}
if (isset($jsonData['phone'])) {
    $model->phone = $jsonData['phone'];

}
if (isset($jsonData['email'])) {
    $model->email = $jsonData['email'];

}



    return $model;
}
