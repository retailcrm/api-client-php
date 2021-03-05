<?php

function deserialize_RetailCrm_Api_Model_Entity_Store_ProductGroup(array $jsonData): RetailCrm\Api\Model\Entity\Store\ProductGroup
{
    
$model = new RetailCrm\Api\Model\Entity\Store\ProductGroup();
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
