<?php

function deserialize_RetailCrm_Api_Model_Entity_Order_Items_ItemProperty(array $jsonData): RetailCrm\Api\Model\Entity\Order\Items\ItemProperty
{
    
$model = new RetailCrm\Api\Model\Entity\Order\Items\ItemProperty();
if (isset($jsonData['code'])) {
    $model->code = $jsonData['code'];

}
if (isset($jsonData['name'])) {
    $model->name = $jsonData['name'];

}
if (isset($jsonData['value'])) {
    $model->value = $jsonData['value'];

}



    return $model;
}
