<?php

function deserialize_RetailCrm_Api_Model_Callback_Entity_Delivery_Store(array $jsonData): RetailCrm\Api\Model\Callback\Entity\Delivery\Store
{
    
$model = new RetailCrm\Api\Model\Callback\Entity\Delivery\Store();
if (isset($jsonData['code'])) {
    $model->code = $jsonData['code'];

}
if (isset($jsonData['name'])) {
    $model->name = $jsonData['name'];

}



    return $model;
}
