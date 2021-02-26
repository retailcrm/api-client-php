<?php

function deserialize_RetailCrm_Api_Model_Callback_Response_Delivery_TariffListResponse(array $jsonData): RetailCrm\Api\Model\Callback\Response\Delivery\TariffListResponse
{
    
$model = new RetailCrm\Api\Model\Callback\Response\Delivery\TariffListResponse();
if (isset($jsonData['result'])) {
    $model->result = [];
foreach (array_keys($jsonData['result']) as $index19) {
    
$model->result[$index19] = new RetailCrm\Api\Model\Callback\Entity\Delivery\Tariff();
if (isset($jsonData['result'][$index19]['code'])) {
    $model->result[$index19]->code = $jsonData['result'][$index19]['code'];

}
if (isset($jsonData['result'][$index19]['name'])) {
    $model->result[$index19]->name = $jsonData['result'][$index19]['name'];

}
if (isset($jsonData['result'][$index19]['description'])) {
    $model->result[$index19]->description = $jsonData['result'][$index19]['description'];

}
if (isset($jsonData['result'][$index19]['type'])) {
    $model->result[$index19]->type = $jsonData['result'][$index19]['type'];

}


}

}



    return $model;
}
