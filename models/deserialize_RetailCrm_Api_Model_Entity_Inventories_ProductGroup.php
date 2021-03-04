<?php

function deserialize_RetailCrm_Api_Model_Entity_Inventories_ProductGroup(array $jsonData): RetailCrm\Api\Model\Entity\Inventories\ProductGroup
{
    
$model = new RetailCrm\Api\Model\Entity\Inventories\ProductGroup();
if (isset($jsonData['parentId'])) {
    $model->parentId = $jsonData['parentId'];

}
if (isset($jsonData['site'])) {
    $model->site = $jsonData['site'];

}
if (isset($jsonData['id'])) {
    $model->id = $jsonData['id'];

}
if (isset($jsonData['name'])) {
    $model->name = $jsonData['name'];

}
if (isset($jsonData['externalId'])) {
    $model->externalId = $jsonData['externalId'];

}
if (isset($jsonData['active'])) {
    $model->active = $jsonData['active'];

}



    return $model;
}
