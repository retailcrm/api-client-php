<?php

function deserialize_RetailCrm_Api_Model_Callback_Entity_Delivery_Tariff(array $jsonData): RetailCrm\Api\Model\Callback\Entity\Delivery\Tariff
{
    
$model = new RetailCrm\Api\Model\Callback\Entity\Delivery\Tariff();
if (isset($jsonData['code'])) {
    $model->code = $jsonData['code'];

}
if (isset($jsonData['name'])) {
    $model->name = $jsonData['name'];

}
if (isset($jsonData['description'])) {
    $model->description = $jsonData['description'];

}
if (isset($jsonData['type'])) {
    $model->type = $jsonData['type'];

}



    return $model;
}
