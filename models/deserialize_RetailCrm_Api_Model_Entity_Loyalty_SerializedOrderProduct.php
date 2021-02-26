<?php

function deserialize_RetailCrm_Api_Model_Entity_Loyalty_SerializedOrderProduct(array $jsonData): RetailCrm\Api\Model\Entity\Loyalty\SerializedOrderProduct
{
    
$model = new RetailCrm\Api\Model\Entity\Loyalty\SerializedOrderProduct();
if (isset($jsonData['initialPrice'])) {
    $model->initialPrice = (float) $jsonData['initialPrice'];

}
if (isset($jsonData['discountManualAmount'])) {
    $model->discountManualAmount = (float) $jsonData['discountManualAmount'];

}
if (isset($jsonData['discountManualPercent'])) {
    $model->discountManualPercent = (float) $jsonData['discountManualPercent'];

}
if (isset($jsonData['quantity'])) {
    $model->quantity = (float) $jsonData['quantity'];

}
if (isset($jsonData['offer'])) {
    
$model->offer = new RetailCrm\Api\Model\Entity\Loyalty\SerializedOrderProductOffer();
if (isset($jsonData['offer']['id'])) {
    $model->offer->id = $jsonData['offer']['id'];

}
if (isset($jsonData['offer']['externalId'])) {
    $model->offer->externalId = $jsonData['offer']['externalId'];

}
if (isset($jsonData['offer']['xmlId'])) {
    $model->offer->xmlId = $jsonData['offer']['xmlId'];

}


}
if (isset($jsonData['priceType'])) {
    
$model->priceType = new RetailCrm\Api\Model\Entity\Loyalty\PriceType();
if (isset($jsonData['priceType']['code'])) {
    $model->priceType->code = $jsonData['priceType']['code'];

}


}



    return $model;
}
