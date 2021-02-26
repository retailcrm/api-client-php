<?php

function deserialize_RetailCrm_Api_Model_Entity_Customers_Segment(array $jsonData): RetailCrm\Api\Model\Entity\Customers\Segment
{
    
$model = new RetailCrm\Api\Model\Entity\Customers\Segment();
if (isset($jsonData['id'])) {
    $model->id = $jsonData['id'];

}
if (isset($jsonData['code'])) {
    $model->code = $jsonData['code'];

}
if (isset($jsonData['name'])) {
    $model->name = $jsonData['name'];

}
if (isset($jsonData['createdAt'])) {
    $model->createdAt = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['createdAt']);

}
if (isset($jsonData['isDynamic'])) {
    $model->isDynamic = $jsonData['isDynamic'];

}
if (isset($jsonData['customersCount'])) {
    $model->customersCount = $jsonData['customersCount'];

}
if (isset($jsonData['active'])) {
    $model->active = $jsonData['active'];

}



    return $model;
}
