<?php

function deserialize_RetailCrm_Api_Model_Entity_References_OrderProductStatus(array $jsonData): RetailCrm\Api\Model\Entity\References\OrderProductStatus
{
    
$model = new RetailCrm\Api\Model\Entity\References\OrderProductStatus();
if (isset($jsonData['code'])) {
    $model->code = $jsonData['code'];

}
if (isset($jsonData['ordering'])) {
    $model->ordering = $jsonData['ordering'];

}
if (isset($jsonData['active'])) {
    $model->active = $jsonData['active'];

}
if (isset($jsonData['createdAt'])) {
    $model->createdAt = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['createdAt']);

}
if (isset($jsonData['orderStatusByProductStatus'])) {
    $model->orderStatusByProductStatus = $jsonData['orderStatusByProductStatus'];

}
if (isset($jsonData['orderStatusForProductStatus'])) {
    $model->orderStatusForProductStatus = $jsonData['orderStatusForProductStatus'];

}
if (isset($jsonData['cancelStatus'])) {
    $model->cancelStatus = $jsonData['cancelStatus'];

}
if (isset($jsonData['name'])) {
    $model->name = $jsonData['name'];

}



    return $model;
}
