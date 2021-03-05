<?php

function deserialize_RetailCrm_Api_Model_Entity_Telephony_SerializedManager(array $jsonData): RetailCrm\Api\Model\Entity\Telephony\SerializedManager
{
    
$model = new RetailCrm\Api\Model\Entity\Telephony\SerializedManager();
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
if (isset($jsonData['email'])) {
    $model->email = $jsonData['email'];

}
if (isset($jsonData['code'])) {
    $model->code = $jsonData['code'];

}



    return $model;
}
