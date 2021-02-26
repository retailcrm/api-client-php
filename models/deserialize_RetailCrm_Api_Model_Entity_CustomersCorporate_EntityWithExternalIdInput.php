<?php

function deserialize_RetailCrm_Api_Model_Entity_CustomersCorporate_EntityWithExternalIdInput(array $jsonData): RetailCrm\Api\Model\Entity\CustomersCorporate\EntityWithExternalIdInput
{
    
$model = new RetailCrm\Api\Model\Entity\CustomersCorporate\EntityWithExternalIdInput();
if (isset($jsonData['id'])) {
    $model->id = $jsonData['id'];

}
if (isset($jsonData['externalId'])) {
    $model->externalId = $jsonData['externalId'];

}



    return $model;
}
