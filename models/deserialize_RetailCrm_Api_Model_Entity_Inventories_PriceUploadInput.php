<?php

function deserialize_RetailCrm_Api_Model_Entity_Inventories_PriceUploadInput(array $jsonData): RetailCrm\Api\Model\Entity\Inventories\PriceUploadInput
{
    
$model = new RetailCrm\Api\Model\Entity\Inventories\PriceUploadInput();
if (isset($jsonData['externalId'])) {
    $model->externalId = $jsonData['externalId'];

}
if (isset($jsonData['xmlId'])) {
    $model->xmlId = $jsonData['xmlId'];

}
if (isset($jsonData['id'])) {
    $model->id = $jsonData['id'];

}
if (isset($jsonData['site'])) {
    $model->site = $jsonData['site'];

}
if (isset($jsonData['prices'])) {
    $model->prices = [];
foreach (array_keys($jsonData['prices']) as $index19) {
    
$model->prices[$index19] = new RetailCrm\Api\Model\Entity\Inventories\PriceUploadPricesInput();
if (isset($jsonData['prices'][$index19]['code'])) {
    $model->prices[$index19]->code = $jsonData['prices'][$index19]['code'];

}
if (isset($jsonData['prices'][$index19]['price'])) {
    $model->prices[$index19]->price = (float) $jsonData['prices'][$index19]['price'];

}
if (isset($jsonData['prices'][$index19]['remove'])) {
    $model->prices[$index19]->remove = $jsonData['prices'][$index19]['remove'];

}


}

}



    return $model;
}
