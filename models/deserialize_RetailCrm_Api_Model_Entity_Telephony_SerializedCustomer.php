<?php

function deserialize_RetailCrm_Api_Model_Entity_Telephony_SerializedCustomer(array $jsonData): RetailCrm\Api\Model\Entity\Telephony\SerializedCustomer
{
    
$model = new RetailCrm\Api\Model\Entity\Telephony\SerializedCustomer();
if (isset($jsonData['id'])) {
    $model->id = $jsonData['id'];

}
if (isset($jsonData['externalId'])) {
    $model->externalId = $jsonData['externalId'];

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
if (isset($jsonData['phones'])) {
    $model->phones = [];
foreach (array_keys($jsonData['phones']) as $index19) {
    
$model->phones[$index19] = new RetailCrm\Api\Model\Entity\Customers\CustomerPhone();
if (isset($jsonData['phones'][$index19]['number'])) {
    $model->phones[$index19]->number = $jsonData['phones'][$index19]['number'];

}


}

}



    return $model;
}
