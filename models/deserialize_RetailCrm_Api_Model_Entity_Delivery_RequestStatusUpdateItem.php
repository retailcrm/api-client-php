<?php

function deserialize_RetailCrm_Api_Model_Entity_Delivery_RequestStatusUpdateItem(array $jsonData): RetailCrm\Api\Model\Entity\Delivery\RequestStatusUpdateItem
{
    
$model = new RetailCrm\Api\Model\Entity\Delivery\RequestStatusUpdateItem();
if (isset($jsonData['deliveryId'])) {
    $model->deliveryId = $jsonData['deliveryId'];

}
if (isset($jsonData['history'])) {
    $model->history = [];
foreach (array_keys($jsonData['history']) as $index20) {
    
$model->history[$index20] = new RetailCrm\Api\Model\Entity\Delivery\StatusInfo();
if (isset($jsonData['history'][$index20]['code'])) {
    $model->history[$index20]->code = $jsonData['history'][$index20]['code'];

}
if (isset($jsonData['history'][$index20]['updatedAt'])) {
    $model->history[$index20]->updatedAt = \DateTime::createFromFormat('Y-m-d\TH:i:sP', $jsonData['history'][$index20]['updatedAt']);

}
if (isset($jsonData['history'][$index20]['comment'])) {
    $model->history[$index20]->comment = $jsonData['history'][$index20]['comment'];

}


}

}
if (isset($jsonData['trackNumber'])) {
    $model->trackNumber = $jsonData['trackNumber'];

}
if (isset($jsonData['cost'])) {
    $model->cost = (float) $jsonData['cost'];

}
if (isset($jsonData['extraData'])) {
    $model->extraData = $jsonData['extraData'];

}



    return $model;
}
