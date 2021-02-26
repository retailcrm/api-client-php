<?php

function deserialize_RetailCrm_Api_Model_Response_CustomersCorporate_CustomersCorporateCompaniesResponse(array $jsonData): RetailCrm\Api\Model\Response\CustomersCorporate\CustomersCorporateCompaniesResponse
{
    
$model = new RetailCrm\Api\Model\Response\CustomersCorporate\CustomersCorporateCompaniesResponse();
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
if (isset($jsonData['companies'])) {
    $model->companies = [];
foreach (array_keys($jsonData['companies']) as $index22) {
    
$model->companies[$index22] = new RetailCrm\Api\Model\Entity\CustomersCorporate\Company();
if (isset($jsonData['companies'][$index22]['id'])) {
    $model->companies[$index22]->id = $jsonData['companies'][$index22]['id'];

}
if (isset($jsonData['companies'][$index22]['isMain'])) {
    $model->companies[$index22]->isMain = $jsonData['companies'][$index22]['isMain'];

}
if (isset($jsonData['companies'][$index22]['externalId'])) {
    $model->companies[$index22]->externalId = $jsonData['companies'][$index22]['externalId'];

}
if (isset($jsonData['companies'][$index22]['active'])) {
    $model->companies[$index22]->active = $jsonData['companies'][$index22]['active'];

}
if (isset($jsonData['companies'][$index22]['name'])) {
    $model->companies[$index22]->name = $jsonData['companies'][$index22]['name'];

}
if (isset($jsonData['companies'][$index22]['brand'])) {
    $model->companies[$index22]->brand = $jsonData['companies'][$index22]['brand'];

}
if (isset($jsonData['companies'][$index22]['site'])) {
    $model->companies[$index22]->site = $jsonData['companies'][$index22]['site'];

}
if (isset($jsonData['companies'][$index22]['createdAt'])) {
    $model->companies[$index22]->createdAt = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['companies'][$index22]['createdAt']);

}
if (isset($jsonData['companies'][$index22]['customer'])) {
    
$model->companies[$index22]->customer = new RetailCrm\Api\Model\Entity\CustomersCorporate\SerializedEntityCustomer();
if (isset($jsonData['companies'][$index22]['customer']['site'])) {
    $model->companies[$index22]->customer->site = $jsonData['companies'][$index22]['customer']['site'];

}
if (isset($jsonData['companies'][$index22]['customer']['id'])) {
    $model->companies[$index22]->customer->id = $jsonData['companies'][$index22]['customer']['id'];

}
if (isset($jsonData['companies'][$index22]['customer']['externalId'])) {
    $model->companies[$index22]->customer->externalId = $jsonData['companies'][$index22]['customer']['externalId'];

}
if (isset($jsonData['companies'][$index22]['customer']['type'])) {
    $model->companies[$index22]->customer->type = $jsonData['companies'][$index22]['customer']['type'];

}


}
if (isset($jsonData['companies'][$index22]['contragent'])) {
    
$model->companies[$index22]->contragent = new RetailCrm\Api\Model\Entity\Customers\CustomerContragent();
if (isset($jsonData['companies'][$index22]['contragent']['contragentType'])) {
    $model->companies[$index22]->contragent->contragentType = $jsonData['companies'][$index22]['contragent']['contragentType'];

}
if (isset($jsonData['companies'][$index22]['contragent']['legalName'])) {
    $model->companies[$index22]->contragent->legalName = $jsonData['companies'][$index22]['contragent']['legalName'];

}
if (isset($jsonData['companies'][$index22]['contragent']['legalAddress'])) {
    $model->companies[$index22]->contragent->legalAddress = $jsonData['companies'][$index22]['contragent']['legalAddress'];

}
if (isset($jsonData['companies'][$index22]['contragent']['INN'])) {
    $model->companies[$index22]->contragent->INN = $jsonData['companies'][$index22]['contragent']['INN'];

}
if (isset($jsonData['companies'][$index22]['contragent']['OKPO'])) {
    $model->companies[$index22]->contragent->OKPO = $jsonData['companies'][$index22]['contragent']['OKPO'];

}
if (isset($jsonData['companies'][$index22]['contragent']['KPP'])) {
    $model->companies[$index22]->contragent->KPP = $jsonData['companies'][$index22]['contragent']['KPP'];

}
if (isset($jsonData['companies'][$index22]['contragent']['OGRN'])) {
    $model->companies[$index22]->contragent->OGRN = $jsonData['companies'][$index22]['contragent']['OGRN'];

}
if (isset($jsonData['companies'][$index22]['contragent']['OGRNIP'])) {
    $model->companies[$index22]->contragent->OGRNIP = $jsonData['companies'][$index22]['contragent']['OGRNIP'];

}
if (isset($jsonData['companies'][$index22]['contragent']['certificateNumber'])) {
    $model->companies[$index22]->contragent->certificateNumber = $jsonData['companies'][$index22]['contragent']['certificateNumber'];

}
if (isset($jsonData['companies'][$index22]['contragent']['certificateDate'])) {
    $model->companies[$index22]->contragent->certificateDate = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['companies'][$index22]['contragent']['certificateDate']);

}
if (isset($jsonData['companies'][$index22]['contragent']['BIK'])) {
    $model->companies[$index22]->contragent->BIK = $jsonData['companies'][$index22]['contragent']['BIK'];

}
if (isset($jsonData['companies'][$index22]['contragent']['bank'])) {
    $model->companies[$index22]->contragent->bank = $jsonData['companies'][$index22]['contragent']['bank'];

}
if (isset($jsonData['companies'][$index22]['contragent']['bankAddress'])) {
    $model->companies[$index22]->contragent->bankAddress = $jsonData['companies'][$index22]['contragent']['bankAddress'];

}
if (isset($jsonData['companies'][$index22]['contragent']['corrAccount'])) {
    $model->companies[$index22]->contragent->corrAccount = $jsonData['companies'][$index22]['contragent']['corrAccount'];

}
if (isset($jsonData['companies'][$index22]['contragent']['bankAccount'])) {
    $model->companies[$index22]->contragent->bankAccount = $jsonData['companies'][$index22]['contragent']['bankAccount'];

}


}
if (isset($jsonData['companies'][$index22]['address'])) {
    
$model->companies[$index22]->address = new RetailCrm\Api\Model\Entity\Customers\CustomerAddress();
if (isset($jsonData['companies'][$index22]['address']['id'])) {
    $model->companies[$index22]->address->id = $jsonData['companies'][$index22]['address']['id'];

}
if (isset($jsonData['companies'][$index22]['address']['name'])) {
    $model->companies[$index22]->address->name = $jsonData['companies'][$index22]['address']['name'];

}
if (isset($jsonData['companies'][$index22]['address']['isMain'])) {
    $model->companies[$index22]->address->isMain = $jsonData['companies'][$index22]['address']['isMain'];

}
if (isset($jsonData['companies'][$index22]['address']['index'])) {
    $model->companies[$index22]->address->index = $jsonData['companies'][$index22]['address']['index'];

}
if (isset($jsonData['companies'][$index22]['address']['countryIso'])) {
    $model->companies[$index22]->address->countryIso = $jsonData['companies'][$index22]['address']['countryIso'];

}
if (isset($jsonData['companies'][$index22]['address']['region'])) {
    $model->companies[$index22]->address->region = $jsonData['companies'][$index22]['address']['region'];

}
if (isset($jsonData['companies'][$index22]['address']['regionId'])) {
    $model->companies[$index22]->address->regionId = $jsonData['companies'][$index22]['address']['regionId'];

}
if (isset($jsonData['companies'][$index22]['address']['city'])) {
    $model->companies[$index22]->address->city = $jsonData['companies'][$index22]['address']['city'];

}
if (isset($jsonData['companies'][$index22]['address']['cityId'])) {
    $model->companies[$index22]->address->cityId = $jsonData['companies'][$index22]['address']['cityId'];

}
if (isset($jsonData['companies'][$index22]['address']['cityType'])) {
    $model->companies[$index22]->address->cityType = $jsonData['companies'][$index22]['address']['cityType'];

}
if (isset($jsonData['companies'][$index22]['address']['street'])) {
    $model->companies[$index22]->address->street = $jsonData['companies'][$index22]['address']['street'];

}
if (isset($jsonData['companies'][$index22]['address']['streetId'])) {
    $model->companies[$index22]->address->streetId = $jsonData['companies'][$index22]['address']['streetId'];

}
if (isset($jsonData['companies'][$index22]['address']['streetType'])) {
    $model->companies[$index22]->address->streetType = $jsonData['companies'][$index22]['address']['streetType'];

}
if (isset($jsonData['companies'][$index22]['address']['building'])) {
    $model->companies[$index22]->address->building = $jsonData['companies'][$index22]['address']['building'];

}
if (isset($jsonData['companies'][$index22]['address']['flat'])) {
    $model->companies[$index22]->address->flat = $jsonData['companies'][$index22]['address']['flat'];

}
if (isset($jsonData['companies'][$index22]['address']['floor'])) {
    $model->companies[$index22]->address->floor = $jsonData['companies'][$index22]['address']['floor'];

}
if (isset($jsonData['companies'][$index22]['address']['block'])) {
    $model->companies[$index22]->address->block = $jsonData['companies'][$index22]['address']['block'];

}
if (isset($jsonData['companies'][$index22]['address']['house'])) {
    $model->companies[$index22]->address->house = $jsonData['companies'][$index22]['address']['house'];

}
if (isset($jsonData['companies'][$index22]['address']['housing'])) {
    $model->companies[$index22]->address->housing = $jsonData['companies'][$index22]['address']['housing'];

}
if (isset($jsonData['companies'][$index22]['address']['metro'])) {
    $model->companies[$index22]->address->metro = $jsonData['companies'][$index22]['address']['metro'];

}
if (isset($jsonData['companies'][$index22]['address']['notes'])) {
    $model->companies[$index22]->address->notes = $jsonData['companies'][$index22]['address']['notes'];

}
if (isset($jsonData['companies'][$index22]['address']['text'])) {
    $model->companies[$index22]->address->text = $jsonData['companies'][$index22]['address']['text'];

}
if (isset($jsonData['companies'][$index22]['address']['externalId'])) {
    $model->companies[$index22]->address->externalId = $jsonData['companies'][$index22]['address']['externalId'];

}


}
if (isset($jsonData['companies'][$index22]['customFields'])) {
    $model->companies[$index22]->customFields = [];
foreach (array_keys($jsonData['companies'][$index22]['customFields']) as $index48) {
    $model->companies[$index22]->customFields[$index48] = $jsonData['companies'][$index22]['customFields'][$index48];

}

}
if (isset($jsonData['companies'][$index22]['marginSumm'])) {
    $model->companies[$index22]->marginSumm = (float) $jsonData['companies'][$index22]['marginSumm'];

}
if (isset($jsonData['companies'][$index22]['totalSumm'])) {
    $model->companies[$index22]->totalSumm = (float) $jsonData['companies'][$index22]['totalSumm'];

}
if (isset($jsonData['companies'][$index22]['averageSumm'])) {
    $model->companies[$index22]->averageSumm = (float) $jsonData['companies'][$index22]['averageSumm'];

}
if (isset($jsonData['companies'][$index22]['ordersCount'])) {
    $model->companies[$index22]->ordersCount = $jsonData['companies'][$index22]['ordersCount'];

}
if (isset($jsonData['companies'][$index22]['costSumm'])) {
    $model->companies[$index22]->costSumm = (float) $jsonData['companies'][$index22]['costSumm'];

}


}

}



    return $model;
}
