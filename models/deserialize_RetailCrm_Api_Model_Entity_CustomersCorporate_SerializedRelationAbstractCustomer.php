<?php

function deserialize_RetailCrm_Api_Model_Entity_CustomersCorporate_SerializedRelationAbstractCustomer(array $jsonData): RetailCrm\Api\Model\Entity\CustomersCorporate\SerializedRelationAbstractCustomer
{
    
$model = new RetailCrm\Api\Model\Entity\CustomersCorporate\SerializedRelationAbstractCustomer();
if (isset($jsonData['id'])) {
    $model->id = $jsonData['id'];

}
if (isset($jsonData['externalId'])) {
    $model->externalId = $jsonData['externalId'];

}
if (isset($jsonData['browserId'])) {
    $model->browserId = $jsonData['browserId'];

}
if (isset($jsonData['site'])) {
    $model->site = $jsonData['site'];

}
if (isset($jsonData['companies'])) {
    $model->companies = [];
foreach (array_keys($jsonData['companies']) as $index22) {
    
$model->companies[$index22] = new RetailCrm\Api\Model\Entity\CustomersCorporate\CustomerContactCompany();
if (isset($jsonData['companies'][$index22]['id'])) {
    $model->companies[$index22]->id = $jsonData['companies'][$index22]['id'];

}
if (isset($jsonData['companies'][$index22]['externalId'])) {
    $model->companies[$index22]->externalId = $jsonData['companies'][$index22]['externalId'];

}
if (isset($jsonData['companies'][$index22]['company'])) {
    
$model->companies[$index22]->company = new RetailCrm\Api\Model\Entity\CustomersCorporate\EntityWithExternalIdNameOutput();
if (isset($jsonData['companies'][$index22]['company']['id'])) {
    $model->companies[$index22]->company->id = $jsonData['companies'][$index22]['company']['id'];

}
if (isset($jsonData['companies'][$index22]['company']['externalId'])) {
    $model->companies[$index22]->company->externalId = $jsonData['companies'][$index22]['company']['externalId'];

}
if (isset($jsonData['companies'][$index22]['company']['name'])) {
    $model->companies[$index22]->company->name = $jsonData['companies'][$index22]['company']['name'];

}


}


}

}



    return $model;
}
