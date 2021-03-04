<?php

function deserialize_RetailCrm_Api_Model_Entity_Inventories_OfferPrice(array $jsonData): RetailCrm\Api\Model\Entity\Inventories\OfferPrice
{
    
$model = new RetailCrm\Api\Model\Entity\Inventories\OfferPrice();
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
