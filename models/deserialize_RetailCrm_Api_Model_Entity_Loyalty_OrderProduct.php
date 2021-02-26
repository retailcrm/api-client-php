<?php

function deserialize_RetailCrm_Api_Model_Entity_Loyalty_OrderProduct(array $jsonData): RetailCrm\Api\Model\Entity\Loyalty\OrderProduct
{
    
$model = new RetailCrm\Api\Model\Entity\Loyalty\OrderProduct();
if (isset($jsonData['bonusesChargeTotal'])) {
    $model->bonusesChargeTotal = (float) $jsonData['bonusesChargeTotal'];

}
if (isset($jsonData['bonusesCreditTotal'])) {
    $model->bonusesCreditTotal = (float) $jsonData['bonusesCreditTotal'];

}
if (isset($jsonData['priceType'])) {
    
$model->priceType = new RetailCrm\Api\Model\Entity\Loyalty\PriceType();
if (isset($jsonData['priceType']['code'])) {
    $model->priceType->code = $jsonData['priceType']['code'];

}


}
if (isset($jsonData['initialPrice'])) {
    $model->initialPrice = (float) $jsonData['initialPrice'];

}
if (isset($jsonData['discountTotal'])) {
    $model->discountTotal = (float) $jsonData['discountTotal'];

}
if (isset($jsonData['prices'])) {
    $model->prices = [];
foreach (array_keys($jsonData['prices']) as $index19) {
    
$model->prices[$index19] = new RetailCrm\Api\Model\Entity\Loyalty\OrderProductPriceItem();
if (isset($jsonData['prices'][$index19]['price'])) {
    $model->prices[$index19]->price = (float) $jsonData['prices'][$index19]['price'];

}
if (isset($jsonData['prices'][$index19]['quantity'])) {
    $model->prices[$index19]->quantity = (float) $jsonData['prices'][$index19]['quantity'];

}


}

}
if (isset($jsonData['vatRate'])) {
    $model->vatRate = $jsonData['vatRate'];

}
if (isset($jsonData['quantity'])) {
    $model->quantity = (float) $jsonData['quantity'];

}



    return $model;
}
