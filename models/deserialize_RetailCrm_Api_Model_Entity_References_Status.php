<?php

function deserialize_RetailCrm_Api_Model_Entity_References_Status(array $jsonData): RetailCrm\Api\Model\Entity\References\Status
{
    
$model = new RetailCrm\Api\Model\Entity\References\Status();
if (isset($jsonData['name'])) {
    $model->name = $jsonData['name'];

}
if (isset($jsonData['code'])) {
    $model->code = $jsonData['code'];

}
if (isset($jsonData['active'])) {
    $model->active = $jsonData['active'];

}
if (isset($jsonData['ordering'])) {
    $model->ordering = $jsonData['ordering'];

}
if (isset($jsonData['group'])) {
    $model->group = $jsonData['group'];

}



    return $model;
}
