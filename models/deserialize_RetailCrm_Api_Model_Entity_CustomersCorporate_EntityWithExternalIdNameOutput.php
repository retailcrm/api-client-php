<?php

function deserialize_RetailCrm_Api_Model_Entity_CustomersCorporate_EntityWithExternalIdNameOutput(array $jsonData): RetailCrm\Api\Model\Entity\CustomersCorporate\EntityWithExternalIdNameOutput
{
    
$model = new RetailCrm\Api\Model\Entity\CustomersCorporate\EntityWithExternalIdNameOutput();
if (isset($jsonData['id'])) {
    $model->id = $jsonData['id'];

}
if (isset($jsonData['externalId'])) {
    $model->externalId = $jsonData['externalId'];

}
if (isset($jsonData['name'])) {
    $model->name = $jsonData['name'];

}



    return $model;
}
