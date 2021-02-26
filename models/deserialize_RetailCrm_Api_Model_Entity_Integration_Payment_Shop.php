<?php

function deserialize_RetailCrm_Api_Model_Entity_Integration_Payment_Shop(array $jsonData): RetailCrm\Api\Model\Entity\Integration\Payment\Shop
{
    
$model = new RetailCrm\Api\Model\Entity\Integration\Payment\Shop();
if (isset($jsonData['code'])) {
    $model->code = $jsonData['code'];

}
if (isset($jsonData['name'])) {
    $model->name = $jsonData['name'];

}
if (isset($jsonData['active'])) {
    $model->active = $jsonData['active'];

}



    return $model;
}
