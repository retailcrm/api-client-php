<?php

function deserialize_RetailCrm_Api_Model_Entity_Store_Inventory(array $jsonData): RetailCrm\Api\Model\Entity\Store\Inventory
{
    
$model = new RetailCrm\Api\Model\Entity\Store\Inventory();
if (isset($jsonData['quantity'])) {
    $model->quantity = (float) $jsonData['quantity'];

}
if (isset($jsonData['purchasePrice'])) {
    $model->purchasePrice = (float) $jsonData['purchasePrice'];

}
if (isset($jsonData['store'])) {
    $model->store = $jsonData['store'];

}
if (isset($jsonData['code'])) {
    $model->code = $jsonData['code'];

}
if (isset($jsonData['available'])) {
    $model->available = (float) $jsonData['available'];

}



    return $model;
}
