<?php

function deserialize_RetailCrm_Api_Model_Entity_References_GeoHierarchyRow(array $jsonData): RetailCrm\Api\Model\Entity\References\GeoHierarchyRow
{
    
$model = new RetailCrm\Api\Model\Entity\References\GeoHierarchyRow();
if (isset($jsonData['country'])) {
    $model->country = $jsonData['country'];

}
if (isset($jsonData['regionId'])) {
    $model->regionId = $jsonData['regionId'];

}
if (isset($jsonData['region'])) {
    $model->region = $jsonData['region'];

}
if (isset($jsonData['cityId'])) {
    $model->cityId = $jsonData['cityId'];

}
if (isset($jsonData['city'])) {
    $model->city = $jsonData['city'];

}



    return $model;
}
