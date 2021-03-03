<?php

function deserialize_RetailCrm_Api_Model_Entity_References_CostGroup(array $jsonData): RetailCrm\Api\Model\Entity\References\CostGroup
{
    
$model = new RetailCrm\Api\Model\Entity\References\CostGroup();
if (isset($jsonData['code'])) {
    $model->code = $jsonData['code'];

}
if (isset($jsonData['name'])) {
    $model->name = $jsonData['name'];

}
if (isset($jsonData['ordering'])) {
    $model->ordering = $jsonData['ordering'];

}
if (isset($jsonData['active'])) {
    $model->active = $jsonData['active'];

}
if (isset($jsonData['color'])) {
    $model->color = $jsonData['color'];

}



    return $model;
}
