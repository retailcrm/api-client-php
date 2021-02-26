<?php

function deserialize_RetailCrm_Api_Model_Entity_CustomersCorporate_CustomerContactCompany(array $jsonData): RetailCrm\Api\Model\Entity\CustomersCorporate\CustomerContactCompany
{
    
$model = new RetailCrm\Api\Model\Entity\CustomersCorporate\CustomerContactCompany();
if (isset($jsonData['id'])) {
    $model->id = $jsonData['id'];

}
if (isset($jsonData['externalId'])) {
    $model->externalId = $jsonData['externalId'];

}
if (isset($jsonData['company'])) {
    
$model->company = new RetailCrm\Api\Model\Entity\CustomersCorporate\EntityWithExternalIdNameOutput();
if (isset($jsonData['company']['id'])) {
    $model->company->id = $jsonData['company']['id'];

}
if (isset($jsonData['company']['externalId'])) {
    $model->company->externalId = $jsonData['company']['externalId'];

}
if (isset($jsonData['company']['name'])) {
    $model->company->name = $jsonData['company']['name'];

}


}



    return $model;
}
