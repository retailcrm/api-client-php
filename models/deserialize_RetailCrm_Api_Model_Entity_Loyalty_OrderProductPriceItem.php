<?php

function deserialize_RetailCrm_Api_Model_Entity_Loyalty_OrderProductPriceItem(array $jsonData): RetailCrm\Api\Model\Entity\Loyalty\OrderProductPriceItem
{
    
$model = new RetailCrm\Api\Model\Entity\Loyalty\OrderProductPriceItem();
if (isset($jsonData['price'])) {
    $model->price = (float) $jsonData['price'];

}
if (isset($jsonData['quantity'])) {
    $model->quantity = (float) $jsonData['quantity'];

}



    return $model;
}
