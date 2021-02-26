<?php

function deserialize_RetailCrm_Api_Model_Response_CustomersCorporate_CustomersCorporateContactsResponse(array $jsonData): RetailCrm\Api\Model\Response\CustomersCorporate\CustomersCorporateContactsResponse
{
    
$model = new RetailCrm\Api\Model\Response\CustomersCorporate\CustomersCorporateContactsResponse();
if (isset($jsonData['success'])) {
    $model->success = $jsonData['success'];

}
if (isset($jsonData['pagination'])) {
    
$model->pagination = new RetailCrm\Api\Model\Entity\Pagination();
if (isset($jsonData['pagination']['limit'])) {
    $model->pagination->limit = $jsonData['pagination']['limit'];

}
if (isset($jsonData['pagination']['totalCount'])) {
    $model->pagination->totalCount = $jsonData['pagination']['totalCount'];

}
if (isset($jsonData['pagination']['currentPage'])) {
    $model->pagination->currentPage = $jsonData['pagination']['currentPage'];

}
if (isset($jsonData['pagination']['totalPageCount'])) {
    $model->pagination->totalPageCount = $jsonData['pagination']['totalPageCount'];

}


}
if (isset($jsonData['contacts'])) {
    $model->contacts = [];
foreach (array_keys($jsonData['contacts']) as $index21) {
    
$model->contacts[$index21] = new RetailCrm\Api\Model\Entity\CustomersCorporate\CustomerContact();
if (isset($jsonData['contacts'][$index21]['id'])) {
    $model->contacts[$index21]->id = $jsonData['contacts'][$index21]['id'];

}
if (isset($jsonData['contacts'][$index21]['isMain'])) {
    $model->contacts[$index21]->isMain = $jsonData['contacts'][$index21]['isMain'];

}
if (isset($jsonData['contacts'][$index21]['customer'])) {
    
$model->contacts[$index21]->customer = new RetailCrm\Api\Model\Entity\CustomersCorporate\SerializedRelationAbstractCustomer();
if (isset($jsonData['contacts'][$index21]['customer']['id'])) {
    $model->contacts[$index21]->customer->id = $jsonData['contacts'][$index21]['customer']['id'];

}
if (isset($jsonData['contacts'][$index21]['customer']['externalId'])) {
    $model->contacts[$index21]->customer->externalId = $jsonData['contacts'][$index21]['customer']['externalId'];

}
if (isset($jsonData['contacts'][$index21]['customer']['browserId'])) {
    $model->contacts[$index21]->customer->browserId = $jsonData['contacts'][$index21]['customer']['browserId'];

}
if (isset($jsonData['contacts'][$index21]['customer']['site'])) {
    $model->contacts[$index21]->customer->site = $jsonData['contacts'][$index21]['customer']['site'];

}
if (isset($jsonData['contacts'][$index21]['customer']['companies'])) {
    $model->contacts[$index21]->customer->companies = [];
foreach (array_keys($jsonData['contacts'][$index21]['customer']['companies']) as $index56) {
    
$model->contacts[$index21]->customer->companies[$index56] = new RetailCrm\Api\Model\Entity\CustomersCorporate\CustomerContactCompany();
if (isset($jsonData['contacts'][$index21]['customer']['companies'][$index56]['id'])) {
    $model->contacts[$index21]->customer->companies[$index56]->id = $jsonData['contacts'][$index21]['customer']['companies'][$index56]['id'];

}
if (isset($jsonData['contacts'][$index21]['customer']['companies'][$index56]['externalId'])) {
    $model->contacts[$index21]->customer->companies[$index56]->externalId = $jsonData['contacts'][$index21]['customer']['companies'][$index56]['externalId'];

}
if (isset($jsonData['contacts'][$index21]['customer']['companies'][$index56]['company'])) {
    
$model->contacts[$index21]->customer->companies[$index56]->company = new RetailCrm\Api\Model\Entity\CustomersCorporate\EntityWithExternalIdNameOutput();
if (isset($jsonData['contacts'][$index21]['customer']['companies'][$index56]['company']['id'])) {
    $model->contacts[$index21]->customer->companies[$index56]->company->id = $jsonData['contacts'][$index21]['customer']['companies'][$index56]['company']['id'];

}
if (isset($jsonData['contacts'][$index21]['customer']['companies'][$index56]['company']['externalId'])) {
    $model->contacts[$index21]->customer->companies[$index56]->company->externalId = $jsonData['contacts'][$index21]['customer']['companies'][$index56]['company']['externalId'];

}
if (isset($jsonData['contacts'][$index21]['customer']['companies'][$index56]['company']['name'])) {
    $model->contacts[$index21]->customer->companies[$index56]->company->name = $jsonData['contacts'][$index21]['customer']['companies'][$index56]['company']['name'];

}


}


}

}


}
if (isset($jsonData['contacts'][$index21]['companies'])) {
    $model->contacts[$index21]->companies = [];
foreach (array_keys($jsonData['contacts'][$index21]['companies']) as $index44) {
    
$model->contacts[$index21]->companies[$index44] = new RetailCrm\Api\Model\Entity\CustomersCorporate\CustomerContactCompany();
if (isset($jsonData['contacts'][$index21]['companies'][$index44]['id'])) {
    $model->contacts[$index21]->companies[$index44]->id = $jsonData['contacts'][$index21]['companies'][$index44]['id'];

}
if (isset($jsonData['contacts'][$index21]['companies'][$index44]['externalId'])) {
    $model->contacts[$index21]->companies[$index44]->externalId = $jsonData['contacts'][$index21]['companies'][$index44]['externalId'];

}
if (isset($jsonData['contacts'][$index21]['companies'][$index44]['company'])) {
    
$model->contacts[$index21]->companies[$index44]->company = new RetailCrm\Api\Model\Entity\CustomersCorporate\EntityWithExternalIdNameOutput();
if (isset($jsonData['contacts'][$index21]['companies'][$index44]['company']['id'])) {
    $model->contacts[$index21]->companies[$index44]->company->id = $jsonData['contacts'][$index21]['companies'][$index44]['company']['id'];

}
if (isset($jsonData['contacts'][$index21]['companies'][$index44]['company']['externalId'])) {
    $model->contacts[$index21]->companies[$index44]->company->externalId = $jsonData['contacts'][$index21]['companies'][$index44]['company']['externalId'];

}
if (isset($jsonData['contacts'][$index21]['companies'][$index44]['company']['name'])) {
    $model->contacts[$index21]->companies[$index44]->company->name = $jsonData['contacts'][$index21]['companies'][$index44]['company']['name'];

}


}


}

}


}

}



    return $model;
}
