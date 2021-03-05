<?php

function deserialize_RetailCrm_Api_Model_Entity_Tasks_AbstractCustomer(array $jsonData): RetailCrm\Api\Model\Entity\Tasks\AbstractCustomer
{
    
$model = new RetailCrm\Api\Model\Entity\Tasks\AbstractCustomer();
if (isset($jsonData['type'])) {
    $model->type = $jsonData['type'];

}
if (isset($jsonData['id'])) {
    $model->id = $jsonData['id'];

}
if (isset($jsonData['externalId'])) {
    $model->externalId = $jsonData['externalId'];

}
if (isset($jsonData['site'])) {
    $model->site = $jsonData['site'];

}



    return $model;
}
