<?php

function deserialize_RetailCrm_Api_Model_Callback_Entity_Delivery_Unit(array $jsonData): RetailCrm\Api\Model\Callback\Entity\Delivery\Unit
{
    
$model = new RetailCrm\Api\Model\Callback\Entity\Delivery\Unit();
if (isset($jsonData['code'])) {
    $model->code = $jsonData['code'];

}
if (isset($jsonData['name'])) {
    $model->name = $jsonData['name'];

}
if (isset($jsonData['sym'])) {
    $model->sym = $jsonData['sym'];

}



    return $model;
}
