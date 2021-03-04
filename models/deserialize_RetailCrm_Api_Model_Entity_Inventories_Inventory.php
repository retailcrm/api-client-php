<?php

function deserialize_RetailCrm_Api_Model_Entity_Inventories_Inventory(array $jsonData): RetailCrm\Api\Model\Entity\Inventories\Inventory
{
    
$model = new RetailCrm\Api\Model\Entity\Inventories\Inventory();
if (isset($jsonData['quantity'])) {
    $model->quantity = (float) $jsonData['quantity'];

}
if (isset($jsonData['purchasePrice'])) {
    $model->purchasePrice = (float) $jsonData['purchasePrice'];

}
if (isset($jsonData['store'])) {
    $model->store = $jsonData['store'];

}



    return $model;
}
