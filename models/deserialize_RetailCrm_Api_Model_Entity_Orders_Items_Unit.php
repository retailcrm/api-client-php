<?php

function deserialize_RetailCrm_Api_Model_Entity_Orders_Items_Unit(array $jsonData): RetailCrm\Api\Model\Entity\Orders\Items\Unit
{
    
$model = new RetailCrm\Api\Model\Entity\Orders\Items\Unit();
if (isset($jsonData['code'])) {
    $model->code = $jsonData['code'];

}
if (isset($jsonData['name'])) {
    $model->name = $jsonData['name'];

}
if (isset($jsonData['sym'])) {
    $model->sym = $jsonData['sym'];

}



    return $model;
}
