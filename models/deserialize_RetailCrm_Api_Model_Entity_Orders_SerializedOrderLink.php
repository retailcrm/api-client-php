<?php

function deserialize_RetailCrm_Api_Model_Entity_Orders_SerializedOrderLink(array $jsonData): RetailCrm\Api\Model\Entity\Orders\SerializedOrderLink
{
    
$model = new RetailCrm\Api\Model\Entity\Orders\SerializedOrderLink();
if (isset($jsonData['comment'])) {
    $model->comment = $jsonData['comment'];

}
if (isset($jsonData['orders'])) {
    $model->orders = [];
foreach (array_keys($jsonData['orders']) as $index19) {
    
$model->orders[$index19] = new RetailCrm\Api\Model\Entity\Delivery\SerializedEntityOrder();
if (isset($jsonData['orders'][$index19]['id'])) {
    $model->orders[$index19]->id = $jsonData['orders'][$index19]['id'];

}
if (isset($jsonData['orders'][$index19]['externalId'])) {
    $model->orders[$index19]->externalId = $jsonData['orders'][$index19]['externalId'];

}
if (isset($jsonData['orders'][$index19]['number'])) {
    $model->orders[$index19]->number = $jsonData['orders'][$index19]['number'];

}


}

}



    return $model;
}
