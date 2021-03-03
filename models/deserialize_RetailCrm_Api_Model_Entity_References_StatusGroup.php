<?php

function deserialize_RetailCrm_Api_Model_Entity_References_StatusGroup(array $jsonData): RetailCrm\Api\Model\Entity\References\StatusGroup
{
    
$model = new RetailCrm\Api\Model\Entity\References\StatusGroup();
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
if (isset($jsonData['process'])) {
    $model->process = $jsonData['process'];

}
if (isset($jsonData['statuses'])) {
    $model->statuses = [];
foreach (array_keys($jsonData['statuses']) as $index21) {
    $model->statuses[$index21] = $jsonData['statuses'][$index21];

}

}



    return $model;
}
