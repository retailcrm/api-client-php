<?php

function deserialize_RetailCrm_Api_Model_Entity_Store_OfferPrice(array $jsonData): RetailCrm\Api\Model\Entity\Store\OfferPrice
{
    
$model = new RetailCrm\Api\Model\Entity\Store\OfferPrice();
if (isset($jsonData['priceType'])) {
    $model->priceType = $jsonData['priceType'];

}
if (isset($jsonData['price'])) {
    $model->price = (float) $jsonData['price'];

}
if (isset($jsonData['ordering'])) {
    $model->ordering = $jsonData['ordering'];

}



    return $model;
}
