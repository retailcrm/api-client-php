<?php

function deserialize_RetailCrm_Api_Model_Entity_Inventories_PriceUploadPricesInput(array $jsonData): RetailCrm\Api\Model\Entity\Inventories\PriceUploadPricesInput
{
    
$model = new RetailCrm\Api\Model\Entity\Inventories\PriceUploadPricesInput();
if (isset($jsonData['code'])) {
    $model->code = $jsonData['code'];

}
if (isset($jsonData['price'])) {
    $model->price = (float) $jsonData['price'];

}
if (isset($jsonData['remove'])) {
    $model->remove = $jsonData['remove'];

}



    return $model;
}
