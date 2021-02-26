<?php

function deserialize_RetailCrm_Api_Model_Entity_CustomersCorporate_SerializedEntityCustomer(array $jsonData): RetailCrm\Api\Model\Entity\CustomersCorporate\SerializedEntityCustomer
{
    
$model = new RetailCrm\Api\Model\Entity\CustomersCorporate\SerializedEntityCustomer();
if (isset($jsonData['site'])) {
    $model->site = $jsonData['site'];

}
if (isset($jsonData['id'])) {
    $model->id = $jsonData['id'];

}
if (isset($jsonData['externalId'])) {
    $model->externalId = $jsonData['externalId'];

}
if (isset($jsonData['type'])) {
    $model->type = $jsonData['type'];

}



    return $model;
}
