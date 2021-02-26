<?php

function deserialize_RetailCrm_Api_Model_Entity_Customers_CustomerTag(array $jsonData): RetailCrm\Api\Model\Entity\Customers\CustomerTag
{
    
$model = new RetailCrm\Api\Model\Entity\Customers\CustomerTag();
if (isset($jsonData['name'])) {
    $model->name = $jsonData['name'];

}
if (isset($jsonData['color'])) {
    $model->color = $jsonData['color'];

}
if (isset($jsonData['attached'])) {
    $model->attached = $jsonData['attached'];

}



    return $model;
}
