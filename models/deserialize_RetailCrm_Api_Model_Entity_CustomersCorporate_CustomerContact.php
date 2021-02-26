<?php

function deserialize_RetailCrm_Api_Model_Entity_CustomersCorporate_CustomerContact(array $jsonData): RetailCrm\Api\Model\Entity\CustomersCorporate\CustomerContact
{
    
$model = new RetailCrm\Api\Model\Entity\CustomersCorporate\CustomerContact();
if (isset($jsonData['id'])) {
    $model->id = $jsonData['id'];

}
if (isset($jsonData['isMain'])) {
    $model->isMain = $jsonData['isMain'];

}
if (isset($jsonData['customer'])) {
    
$model->customer = new RetailCrm\Api\Model\Entity\CustomersCorporate\SerializedRelationAbstractCustomer();
if (isset($jsonData['customer']['id'])) {
    $model->customer->id = $jsonData['customer']['id'];

}
if (isset($jsonData['customer']['externalId'])) {
    $model->customer->externalId = $jsonData['customer']['externalId'];

}
if (isset($jsonData['customer']['browserId'])) {
    $model->customer->browserId = $jsonData['customer']['browserId'];

}
if (isset($jsonData['customer']['site'])) {
    $model->customer->site = $jsonData['customer']['site'];

}
if (isset($jsonData['customer']['companies'])) {
    $model->customer->companies = [];
foreach (array_keys($jsonData['customer']['companies']) as $index34) {
    
$model->customer->companies[$index34] = new RetailCrm\Api\Model\Entity\CustomersCorporate\CustomerContactCompany();
if (isset($jsonData['customer']['companies'][$index34]['id'])) {
    $model->customer->companies[$index34]->id = $jsonData['customer']['companies'][$index34]['id'];

}
if (isset($jsonData['customer']['companies'][$index34]['externalId'])) {
    $model->customer->companies[$index34]->externalId = $jsonData['customer']['companies'][$index34]['externalId'];

}
if (isset($jsonData['customer']['companies'][$index34]['company'])) {
    
$model->customer->companies[$index34]->company = new RetailCrm\Api\Model\Entity\CustomersCorporate\EntityWithExternalIdNameOutput();
if (isset($jsonData['customer']['companies'][$index34]['company']['id'])) {
    $model->customer->companies[$index34]->company->id = $jsonData['customer']['companies'][$index34]['company']['id'];

}
if (isset($jsonData['customer']['companies'][$index34]['company']['externalId'])) {
    $model->customer->companies[$index34]->company->externalId = $jsonData['customer']['companies'][$index34]['company']['externalId'];

}
if (isset($jsonData['customer']['companies'][$index34]['company']['name'])) {
    $model->customer->companies[$index34]->company->name = $jsonData['customer']['companies'][$index34]['company']['name'];

}


}


}

}


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
