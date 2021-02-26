<?php

function deserialize_RetailCrm_Api_Model_Response_CustomersCorporate_CustomersCorporateResponse(array $jsonData): RetailCrm\Api\Model\Response\CustomersCorporate\CustomersCorporateResponse
{
    
$model = new RetailCrm\Api\Model\Response\CustomersCorporate\CustomersCorporateResponse();
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
if (isset($jsonData['customersCorporate'])) {
    $model->customersCorporate = [];
foreach (array_keys($jsonData['customersCorporate']) as $index31) {
    
$model->customersCorporate[$index31] = new RetailCrm\Api\Model\Entity\CustomersCorporate\CustomerCorporate();
if (isset($jsonData['customersCorporate'][$index31]['type'])) {
    $model->customersCorporate[$index31]->type = $jsonData['customersCorporate'][$index31]['type'];

}
if (isset($jsonData['customersCorporate'][$index31]['id'])) {
    $model->customersCorporate[$index31]->id = $jsonData['customersCorporate'][$index31]['id'];

}
if (isset($jsonData['customersCorporate'][$index31]['externalId'])) {
    $model->customersCorporate[$index31]->externalId = $jsonData['customersCorporate'][$index31]['externalId'];

}
if (isset($jsonData['customersCorporate'][$index31]['nickName'])) {
    $model->customersCorporate[$index31]->nickName = $jsonData['customersCorporate'][$index31]['nickName'];

}
if (isset($jsonData['customersCorporate'][$index31]['mainAddress'])) {
    
$model->customersCorporate[$index31]->mainAddress = new RetailCrm\Api\Model\Entity\CustomersCorporate\EntityWithExternalIdNameOutput();
if (isset($jsonData['customersCorporate'][$index31]['mainAddress']['id'])) {
    $model->customersCorporate[$index31]->mainAddress->id = $jsonData['customersCorporate'][$index31]['mainAddress']['id'];

}
if (isset($jsonData['customersCorporate'][$index31]['mainAddress']['externalId'])) {
    $model->customersCorporate[$index31]->mainAddress->externalId = $jsonData['customersCorporate'][$index31]['mainAddress']['externalId'];

}
if (isset($jsonData['customersCorporate'][$index31]['mainAddress']['name'])) {
    $model->customersCorporate[$index31]->mainAddress->name = $jsonData['customersCorporate'][$index31]['mainAddress']['name'];

}


}
if (isset($jsonData['customersCorporate'][$index31]['createdAt'])) {
    $model->customersCorporate[$index31]->createdAt = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['customersCorporate'][$index31]['createdAt']);

}
if (isset($jsonData['customersCorporate'][$index31]['managerId'])) {
    $model->customersCorporate[$index31]->managerId = $jsonData['customersCorporate'][$index31]['managerId'];

}
if (isset($jsonData['customersCorporate'][$index31]['source'])) {
    
$model->customersCorporate[$index31]->source = new RetailCrm\Api\Model\Entity\Source();
if (isset($jsonData['customersCorporate'][$index31]['source']['source'])) {
    $model->customersCorporate[$index31]->source->source = $jsonData['customersCorporate'][$index31]['source']['source'];

}
if (isset($jsonData['customersCorporate'][$index31]['source']['medium'])) {
    $model->customersCorporate[$index31]->source->medium = $jsonData['customersCorporate'][$index31]['source']['medium'];

}
if (isset($jsonData['customersCorporate'][$index31]['source']['campaign'])) {
    $model->customersCorporate[$index31]->source->campaign = $jsonData['customersCorporate'][$index31]['source']['campaign'];

}
if (isset($jsonData['customersCorporate'][$index31]['source']['keyword'])) {
    $model->customersCorporate[$index31]->source->keyword = $jsonData['customersCorporate'][$index31]['source']['keyword'];

}
if (isset($jsonData['customersCorporate'][$index31]['source']['content'])) {
    $model->customersCorporate[$index31]->source->content = $jsonData['customersCorporate'][$index31]['source']['content'];

}


}
if (isset($jsonData['customersCorporate'][$index31]['customerContacts'])) {
    $model->customersCorporate[$index31]->customerContacts = [];
foreach (array_keys($jsonData['customersCorporate'][$index31]['customerContacts']) as $index61) {
    
$model->customersCorporate[$index31]->customerContacts[$index61] = new RetailCrm\Api\Model\Entity\CustomersCorporate\CustomerContact();
if (isset($jsonData['customersCorporate'][$index31]['customerContacts'][$index61]['id'])) {
    $model->customersCorporate[$index31]->customerContacts[$index61]->id = $jsonData['customersCorporate'][$index31]['customerContacts'][$index61]['id'];

}
if (isset($jsonData['customersCorporate'][$index31]['customerContacts'][$index61]['isMain'])) {
    $model->customersCorporate[$index31]->customerContacts[$index61]->isMain = $jsonData['customersCorporate'][$index31]['customerContacts'][$index61]['isMain'];

}
if (isset($jsonData['customersCorporate'][$index31]['customerContacts'][$index61]['customer'])) {
    
$model->customersCorporate[$index31]->customerContacts[$index61]->customer = new RetailCrm\Api\Model\Entity\CustomersCorporate\SerializedRelationAbstractCustomer();
if (isset($jsonData['customersCorporate'][$index31]['customerContacts'][$index61]['customer']['id'])) {
    $model->customersCorporate[$index31]->customerContacts[$index61]->customer->id = $jsonData['customersCorporate'][$index31]['customerContacts'][$index61]['customer']['id'];

}
if (isset($jsonData['customersCorporate'][$index31]['customerContacts'][$index61]['customer']['externalId'])) {
    $model->customersCorporate[$index31]->customerContacts[$index61]->customer->externalId = $jsonData['customersCorporate'][$index31]['customerContacts'][$index61]['customer']['externalId'];

}
if (isset($jsonData['customersCorporate'][$index31]['customerContacts'][$index61]['customer']['browserId'])) {
    $model->customersCorporate[$index31]->customerContacts[$index61]->customer->browserId = $jsonData['customersCorporate'][$index31]['customerContacts'][$index61]['customer']['browserId'];

}
if (isset($jsonData['customersCorporate'][$index31]['customerContacts'][$index61]['customer']['site'])) {
    $model->customersCorporate[$index31]->customerContacts[$index61]->customer->site = $jsonData['customersCorporate'][$index31]['customerContacts'][$index61]['customer']['site'];

}
if (isset($jsonData['customersCorporate'][$index31]['customerContacts'][$index61]['customer']['companies'])) {
    $model->customersCorporate[$index31]->customerContacts[$index61]->customer->companies = [];
foreach (array_keys($jsonData['customersCorporate'][$index31]['customerContacts'][$index61]['customer']['companies']) as $index96) {
    
$model->customersCorporate[$index31]->customerContacts[$index61]->customer->companies[$index96] = new RetailCrm\Api\Model\Entity\CustomersCorporate\CustomerContactCompany();
if (isset($jsonData['customersCorporate'][$index31]['customerContacts'][$index61]['customer']['companies'][$index96]['id'])) {
    $model->customersCorporate[$index31]->customerContacts[$index61]->customer->companies[$index96]->id = $jsonData['customersCorporate'][$index31]['customerContacts'][$index61]['customer']['companies'][$index96]['id'];

}
if (isset($jsonData['customersCorporate'][$index31]['customerContacts'][$index61]['customer']['companies'][$index96]['externalId'])) {
    $model->customersCorporate[$index31]->customerContacts[$index61]->customer->companies[$index96]->externalId = $jsonData['customersCorporate'][$index31]['customerContacts'][$index61]['customer']['companies'][$index96]['externalId'];

}
if (isset($jsonData['customersCorporate'][$index31]['customerContacts'][$index61]['customer']['companies'][$index96]['company'])) {
    
$model->customersCorporate[$index31]->customerContacts[$index61]->customer->companies[$index96]->company = new RetailCrm\Api\Model\Entity\CustomersCorporate\EntityWithExternalIdNameOutput();
if (isset($jsonData['customersCorporate'][$index31]['customerContacts'][$index61]['customer']['companies'][$index96]['company']['id'])) {
    $model->customersCorporate[$index31]->customerContacts[$index61]->customer->companies[$index96]->company->id = $jsonData['customersCorporate'][$index31]['customerContacts'][$index61]['customer']['companies'][$index96]['company']['id'];

}
if (isset($jsonData['customersCorporate'][$index31]['customerContacts'][$index61]['customer']['companies'][$index96]['company']['externalId'])) {
    $model->customersCorporate[$index31]->customerContacts[$index61]->customer->companies[$index96]->company->externalId = $jsonData['customersCorporate'][$index31]['customerContacts'][$index61]['customer']['companies'][$index96]['company']['externalId'];

}
if (isset($jsonData['customersCorporate'][$index31]['customerContacts'][$index61]['customer']['companies'][$index96]['company']['name'])) {
    $model->customersCorporate[$index31]->customerContacts[$index61]->customer->companies[$index96]->company->name = $jsonData['customersCorporate'][$index31]['customerContacts'][$index61]['customer']['companies'][$index96]['company']['name'];

}


}


}

}


}
if (isset($jsonData['customersCorporate'][$index31]['customerContacts'][$index61]['companies'])) {
    $model->customersCorporate[$index31]->customerContacts[$index61]->companies = [];
foreach (array_keys($jsonData['customersCorporate'][$index31]['customerContacts'][$index61]['companies']) as $index84) {
    
$model->customersCorporate[$index31]->customerContacts[$index61]->companies[$index84] = new RetailCrm\Api\Model\Entity\CustomersCorporate\CustomerContactCompany();
if (isset($jsonData['customersCorporate'][$index31]['customerContacts'][$index61]['companies'][$index84]['id'])) {
    $model->customersCorporate[$index31]->customerContacts[$index61]->companies[$index84]->id = $jsonData['customersCorporate'][$index31]['customerContacts'][$index61]['companies'][$index84]['id'];

}
if (isset($jsonData['customersCorporate'][$index31]['customerContacts'][$index61]['companies'][$index84]['externalId'])) {
    $model->customersCorporate[$index31]->customerContacts[$index61]->companies[$index84]->externalId = $jsonData['customersCorporate'][$index31]['customerContacts'][$index61]['companies'][$index84]['externalId'];

}
if (isset($jsonData['customersCorporate'][$index31]['customerContacts'][$index61]['companies'][$index84]['company'])) {
    
$model->customersCorporate[$index31]->customerContacts[$index61]->companies[$index84]->company = new RetailCrm\Api\Model\Entity\CustomersCorporate\EntityWithExternalIdNameOutput();
if (isset($jsonData['customersCorporate'][$index31]['customerContacts'][$index61]['companies'][$index84]['company']['id'])) {
    $model->customersCorporate[$index31]->customerContacts[$index61]->companies[$index84]->company->id = $jsonData['customersCorporate'][$index31]['customerContacts'][$index61]['companies'][$index84]['company']['id'];

}
if (isset($jsonData['customersCorporate'][$index31]['customerContacts'][$index61]['companies'][$index84]['company']['externalId'])) {
    $model->customersCorporate[$index31]->customerContacts[$index61]->companies[$index84]->company->externalId = $jsonData['customersCorporate'][$index31]['customerContacts'][$index61]['companies'][$index84]['company']['externalId'];

}
if (isset($jsonData['customersCorporate'][$index31]['customerContacts'][$index61]['companies'][$index84]['company']['name'])) {
    $model->customersCorporate[$index31]->customerContacts[$index61]->companies[$index84]->company->name = $jsonData['customersCorporate'][$index31]['customerContacts'][$index61]['companies'][$index84]['company']['name'];

}


}


}

}


}

}
if (isset($jsonData['customersCorporate'][$index31]['companies'])) {
    $model->customersCorporate[$index31]->companies = [];
foreach (array_keys($jsonData['customersCorporate'][$index31]['companies']) as $index54) {
    
$model->customersCorporate[$index31]->companies[$index54] = new RetailCrm\Api\Model\Entity\CustomersCorporate\Company();
if (isset($jsonData['customersCorporate'][$index31]['companies'][$index54]['id'])) {
    $model->customersCorporate[$index31]->companies[$index54]->id = $jsonData['customersCorporate'][$index31]['companies'][$index54]['id'];

}
if (isset($jsonData['customersCorporate'][$index31]['companies'][$index54]['isMain'])) {
    $model->customersCorporate[$index31]->companies[$index54]->isMain = $jsonData['customersCorporate'][$index31]['companies'][$index54]['isMain'];

}
if (isset($jsonData['customersCorporate'][$index31]['companies'][$index54]['externalId'])) {
    $model->customersCorporate[$index31]->companies[$index54]->externalId = $jsonData['customersCorporate'][$index31]['companies'][$index54]['externalId'];

}
if (isset($jsonData['customersCorporate'][$index31]['companies'][$index54]['active'])) {
    $model->customersCorporate[$index31]->companies[$index54]->active = $jsonData['customersCorporate'][$index31]['companies'][$index54]['active'];

}
if (isset($jsonData['customersCorporate'][$index31]['companies'][$index54]['name'])) {
    $model->customersCorporate[$index31]->companies[$index54]->name = $jsonData['customersCorporate'][$index31]['companies'][$index54]['name'];

}
if (isset($jsonData['customersCorporate'][$index31]['companies'][$index54]['brand'])) {
    $model->customersCorporate[$index31]->companies[$index54]->brand = $jsonData['customersCorporate'][$index31]['companies'][$index54]['brand'];

}
if (isset($jsonData['customersCorporate'][$index31]['companies'][$index54]['site'])) {
    $model->customersCorporate[$index31]->companies[$index54]->site = $jsonData['customersCorporate'][$index31]['companies'][$index54]['site'];

}
if (isset($jsonData['customersCorporate'][$index31]['companies'][$index54]['createdAt'])) {
    $model->customersCorporate[$index31]->companies[$index54]->createdAt = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['customersCorporate'][$index31]['companies'][$index54]['createdAt']);

}
if (isset($jsonData['customersCorporate'][$index31]['companies'][$index54]['customer'])) {
    
$model->customersCorporate[$index31]->companies[$index54]->customer = new RetailCrm\Api\Model\Entity\CustomersCorporate\SerializedEntityCustomer();
if (isset($jsonData['customersCorporate'][$index31]['companies'][$index54]['customer']['site'])) {
    $model->customersCorporate[$index31]->companies[$index54]->customer->site = $jsonData['customersCorporate'][$index31]['companies'][$index54]['customer']['site'];

}
if (isset($jsonData['customersCorporate'][$index31]['companies'][$index54]['customer']['id'])) {
    $model->customersCorporate[$index31]->companies[$index54]->customer->id = $jsonData['customersCorporate'][$index31]['companies'][$index54]['customer']['id'];

}
if (isset($jsonData['customersCorporate'][$index31]['companies'][$index54]['customer']['externalId'])) {
    $model->customersCorporate[$index31]->companies[$index54]->customer->externalId = $jsonData['customersCorporate'][$index31]['companies'][$index54]['customer']['externalId'];

}
if (isset($jsonData['customersCorporate'][$index31]['companies'][$index54]['customer']['type'])) {
    $model->customersCorporate[$index31]->companies[$index54]->customer->type = $jsonData['customersCorporate'][$index31]['companies'][$index54]['customer']['type'];

}


}
if (isset($jsonData['customersCorporate'][$index31]['companies'][$index54]['contragent'])) {
    
$model->customersCorporate[$index31]->companies[$index54]->contragent = new RetailCrm\Api\Model\Entity\Customers\CustomerContragent();
if (isset($jsonData['customersCorporate'][$index31]['companies'][$index54]['contragent']['contragentType'])) {
    $model->customersCorporate[$index31]->companies[$index54]->contragent->contragentType = $jsonData['customersCorporate'][$index31]['companies'][$index54]['contragent']['contragentType'];

}
if (isset($jsonData['customersCorporate'][$index31]['companies'][$index54]['contragent']['legalName'])) {
    $model->customersCorporate[$index31]->companies[$index54]->contragent->legalName = $jsonData['customersCorporate'][$index31]['companies'][$index54]['contragent']['legalName'];

}
if (isset($jsonData['customersCorporate'][$index31]['companies'][$index54]['contragent']['legalAddress'])) {
    $model->customersCorporate[$index31]->companies[$index54]->contragent->legalAddress = $jsonData['customersCorporate'][$index31]['companies'][$index54]['contragent']['legalAddress'];

}
if (isset($jsonData['customersCorporate'][$index31]['companies'][$index54]['contragent']['INN'])) {
    $model->customersCorporate[$index31]->companies[$index54]->contragent->INN = $jsonData['customersCorporate'][$index31]['companies'][$index54]['contragent']['INN'];

}
if (isset($jsonData['customersCorporate'][$index31]['companies'][$index54]['contragent']['OKPO'])) {
    $model->customersCorporate[$index31]->companies[$index54]->contragent->OKPO = $jsonData['customersCorporate'][$index31]['companies'][$index54]['contragent']['OKPO'];

}
if (isset($jsonData['customersCorporate'][$index31]['companies'][$index54]['contragent']['KPP'])) {
    $model->customersCorporate[$index31]->companies[$index54]->contragent->KPP = $jsonData['customersCorporate'][$index31]['companies'][$index54]['contragent']['KPP'];

}
if (isset($jsonData['customersCorporate'][$index31]['companies'][$index54]['contragent']['OGRN'])) {
    $model->customersCorporate[$index31]->companies[$index54]->contragent->OGRN = $jsonData['customersCorporate'][$index31]['companies'][$index54]['contragent']['OGRN'];

}
if (isset($jsonData['customersCorporate'][$index31]['companies'][$index54]['contragent']['OGRNIP'])) {
    $model->customersCorporate[$index31]->companies[$index54]->contragent->OGRNIP = $jsonData['customersCorporate'][$index31]['companies'][$index54]['contragent']['OGRNIP'];

}
if (isset($jsonData['customersCorporate'][$index31]['companies'][$index54]['contragent']['certificateNumber'])) {
    $model->customersCorporate[$index31]->companies[$index54]->contragent->certificateNumber = $jsonData['customersCorporate'][$index31]['companies'][$index54]['contragent']['certificateNumber'];

}
if (isset($jsonData['customersCorporate'][$index31]['companies'][$index54]['contragent']['certificateDate'])) {
    $model->customersCorporate[$index31]->companies[$index54]->contragent->certificateDate = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['customersCorporate'][$index31]['companies'][$index54]['contragent']['certificateDate']);

}
if (isset($jsonData['customersCorporate'][$index31]['companies'][$index54]['contragent']['BIK'])) {
    $model->customersCorporate[$index31]->companies[$index54]->contragent->BIK = $jsonData['customersCorporate'][$index31]['companies'][$index54]['contragent']['BIK'];

}
if (isset($jsonData['customersCorporate'][$index31]['companies'][$index54]['contragent']['bank'])) {
    $model->customersCorporate[$index31]->companies[$index54]->contragent->bank = $jsonData['customersCorporate'][$index31]['companies'][$index54]['contragent']['bank'];

}
if (isset($jsonData['customersCorporate'][$index31]['companies'][$index54]['contragent']['bankAddress'])) {
    $model->customersCorporate[$index31]->companies[$index54]->contragent->bankAddress = $jsonData['customersCorporate'][$index31]['companies'][$index54]['contragent']['bankAddress'];

}
if (isset($jsonData['customersCorporate'][$index31]['companies'][$index54]['contragent']['corrAccount'])) {
    $model->customersCorporate[$index31]->companies[$index54]->contragent->corrAccount = $jsonData['customersCorporate'][$index31]['companies'][$index54]['contragent']['corrAccount'];

}
if (isset($jsonData['customersCorporate'][$index31]['companies'][$index54]['contragent']['bankAccount'])) {
    $model->customersCorporate[$index31]->companies[$index54]->contragent->bankAccount = $jsonData['customersCorporate'][$index31]['companies'][$index54]['contragent']['bankAccount'];

}


}
if (isset($jsonData['customersCorporate'][$index31]['companies'][$index54]['address'])) {
    
$model->customersCorporate[$index31]->companies[$index54]->address = new RetailCrm\Api\Model\Entity\Customers\CustomerAddress();
if (isset($jsonData['customersCorporate'][$index31]['companies'][$index54]['address']['id'])) {
    $model->customersCorporate[$index31]->companies[$index54]->address->id = $jsonData['customersCorporate'][$index31]['companies'][$index54]['address']['id'];

}
if (isset($jsonData['customersCorporate'][$index31]['companies'][$index54]['address']['name'])) {
    $model->customersCorporate[$index31]->companies[$index54]->address->name = $jsonData['customersCorporate'][$index31]['companies'][$index54]['address']['name'];

}
if (isset($jsonData['customersCorporate'][$index31]['companies'][$index54]['address']['isMain'])) {
    $model->customersCorporate[$index31]->companies[$index54]->address->isMain = $jsonData['customersCorporate'][$index31]['companies'][$index54]['address']['isMain'];

}
if (isset($jsonData['customersCorporate'][$index31]['companies'][$index54]['address']['index'])) {
    $model->customersCorporate[$index31]->companies[$index54]->address->index = $jsonData['customersCorporate'][$index31]['companies'][$index54]['address']['index'];

}
if (isset($jsonData['customersCorporate'][$index31]['companies'][$index54]['address']['countryIso'])) {
    $model->customersCorporate[$index31]->companies[$index54]->address->countryIso = $jsonData['customersCorporate'][$index31]['companies'][$index54]['address']['countryIso'];

}
if (isset($jsonData['customersCorporate'][$index31]['companies'][$index54]['address']['region'])) {
    $model->customersCorporate[$index31]->companies[$index54]->address->region = $jsonData['customersCorporate'][$index31]['companies'][$index54]['address']['region'];

}
if (isset($jsonData['customersCorporate'][$index31]['companies'][$index54]['address']['regionId'])) {
    $model->customersCorporate[$index31]->companies[$index54]->address->regionId = $jsonData['customersCorporate'][$index31]['companies'][$index54]['address']['regionId'];

}
if (isset($jsonData['customersCorporate'][$index31]['companies'][$index54]['address']['city'])) {
    $model->customersCorporate[$index31]->companies[$index54]->address->city = $jsonData['customersCorporate'][$index31]['companies'][$index54]['address']['city'];

}
if (isset($jsonData['customersCorporate'][$index31]['companies'][$index54]['address']['cityId'])) {
    $model->customersCorporate[$index31]->companies[$index54]->address->cityId = $jsonData['customersCorporate'][$index31]['companies'][$index54]['address']['cityId'];

}
if (isset($jsonData['customersCorporate'][$index31]['companies'][$index54]['address']['cityType'])) {
    $model->customersCorporate[$index31]->companies[$index54]->address->cityType = $jsonData['customersCorporate'][$index31]['companies'][$index54]['address']['cityType'];

}
if (isset($jsonData['customersCorporate'][$index31]['companies'][$index54]['address']['street'])) {
    $model->customersCorporate[$index31]->companies[$index54]->address->street = $jsonData['customersCorporate'][$index31]['companies'][$index54]['address']['street'];

}
if (isset($jsonData['customersCorporate'][$index31]['companies'][$index54]['address']['streetId'])) {
    $model->customersCorporate[$index31]->companies[$index54]->address->streetId = $jsonData['customersCorporate'][$index31]['companies'][$index54]['address']['streetId'];

}
if (isset($jsonData['customersCorporate'][$index31]['companies'][$index54]['address']['streetType'])) {
    $model->customersCorporate[$index31]->companies[$index54]->address->streetType = $jsonData['customersCorporate'][$index31]['companies'][$index54]['address']['streetType'];

}
if (isset($jsonData['customersCorporate'][$index31]['companies'][$index54]['address']['building'])) {
    $model->customersCorporate[$index31]->companies[$index54]->address->building = $jsonData['customersCorporate'][$index31]['companies'][$index54]['address']['building'];

}
if (isset($jsonData['customersCorporate'][$index31]['companies'][$index54]['address']['flat'])) {
    $model->customersCorporate[$index31]->companies[$index54]->address->flat = $jsonData['customersCorporate'][$index31]['companies'][$index54]['address']['flat'];

}
if (isset($jsonData['customersCorporate'][$index31]['companies'][$index54]['address']['floor'])) {
    $model->customersCorporate[$index31]->companies[$index54]->address->floor = $jsonData['customersCorporate'][$index31]['companies'][$index54]['address']['floor'];

}
if (isset($jsonData['customersCorporate'][$index31]['companies'][$index54]['address']['block'])) {
    $model->customersCorporate[$index31]->companies[$index54]->address->block = $jsonData['customersCorporate'][$index31]['companies'][$index54]['address']['block'];

}
if (isset($jsonData['customersCorporate'][$index31]['companies'][$index54]['address']['house'])) {
    $model->customersCorporate[$index31]->companies[$index54]->address->house = $jsonData['customersCorporate'][$index31]['companies'][$index54]['address']['house'];

}
if (isset($jsonData['customersCorporate'][$index31]['companies'][$index54]['address']['housing'])) {
    $model->customersCorporate[$index31]->companies[$index54]->address->housing = $jsonData['customersCorporate'][$index31]['companies'][$index54]['address']['housing'];

}
if (isset($jsonData['customersCorporate'][$index31]['companies'][$index54]['address']['metro'])) {
    $model->customersCorporate[$index31]->companies[$index54]->address->metro = $jsonData['customersCorporate'][$index31]['companies'][$index54]['address']['metro'];

}
if (isset($jsonData['customersCorporate'][$index31]['companies'][$index54]['address']['notes'])) {
    $model->customersCorporate[$index31]->companies[$index54]->address->notes = $jsonData['customersCorporate'][$index31]['companies'][$index54]['address']['notes'];

}
if (isset($jsonData['customersCorporate'][$index31]['companies'][$index54]['address']['text'])) {
    $model->customersCorporate[$index31]->companies[$index54]->address->text = $jsonData['customersCorporate'][$index31]['companies'][$index54]['address']['text'];

}
if (isset($jsonData['customersCorporate'][$index31]['companies'][$index54]['address']['externalId'])) {
    $model->customersCorporate[$index31]->companies[$index54]->address->externalId = $jsonData['customersCorporate'][$index31]['companies'][$index54]['address']['externalId'];

}


}
if (isset($jsonData['customersCorporate'][$index31]['companies'][$index54]['customFields'])) {
    $model->customersCorporate[$index31]->companies[$index54]->customFields = [];
foreach (array_keys($jsonData['customersCorporate'][$index31]['companies'][$index54]['customFields']) as $index80) {
    $model->customersCorporate[$index31]->companies[$index54]->customFields[$index80] = $jsonData['customersCorporate'][$index31]['companies'][$index54]['customFields'][$index80];

}

}
if (isset($jsonData['customersCorporate'][$index31]['companies'][$index54]['marginSumm'])) {
    $model->customersCorporate[$index31]->companies[$index54]->marginSumm = (float) $jsonData['customersCorporate'][$index31]['companies'][$index54]['marginSumm'];

}
if (isset($jsonData['customersCorporate'][$index31]['companies'][$index54]['totalSumm'])) {
    $model->customersCorporate[$index31]->companies[$index54]->totalSumm = (float) $jsonData['customersCorporate'][$index31]['companies'][$index54]['totalSumm'];

}
if (isset($jsonData['customersCorporate'][$index31]['companies'][$index54]['averageSumm'])) {
    $model->customersCorporate[$index31]->companies[$index54]->averageSumm = (float) $jsonData['customersCorporate'][$index31]['companies'][$index54]['averageSumm'];

}
if (isset($jsonData['customersCorporate'][$index31]['companies'][$index54]['ordersCount'])) {
    $model->customersCorporate[$index31]->companies[$index54]->ordersCount = $jsonData['customersCorporate'][$index31]['companies'][$index54]['ordersCount'];

}
if (isset($jsonData['customersCorporate'][$index31]['companies'][$index54]['costSumm'])) {
    $model->customersCorporate[$index31]->companies[$index54]->costSumm = (float) $jsonData['customersCorporate'][$index31]['companies'][$index54]['costSumm'];

}


}

}
if (isset($jsonData['customersCorporate'][$index31]['addresses'])) {
    $model->customersCorporate[$index31]->addresses = [];
foreach (array_keys($jsonData['customersCorporate'][$index31]['addresses']) as $index54) {
    
$model->customersCorporate[$index31]->addresses[$index54] = new RetailCrm\Api\Model\Entity\Customers\CustomerAddress();
if (isset($jsonData['customersCorporate'][$index31]['addresses'][$index54]['id'])) {
    $model->customersCorporate[$index31]->addresses[$index54]->id = $jsonData['customersCorporate'][$index31]['addresses'][$index54]['id'];

}
if (isset($jsonData['customersCorporate'][$index31]['addresses'][$index54]['name'])) {
    $model->customersCorporate[$index31]->addresses[$index54]->name = $jsonData['customersCorporate'][$index31]['addresses'][$index54]['name'];

}
if (isset($jsonData['customersCorporate'][$index31]['addresses'][$index54]['isMain'])) {
    $model->customersCorporate[$index31]->addresses[$index54]->isMain = $jsonData['customersCorporate'][$index31]['addresses'][$index54]['isMain'];

}
if (isset($jsonData['customersCorporate'][$index31]['addresses'][$index54]['index'])) {
    $model->customersCorporate[$index31]->addresses[$index54]->index = $jsonData['customersCorporate'][$index31]['addresses'][$index54]['index'];

}
if (isset($jsonData['customersCorporate'][$index31]['addresses'][$index54]['countryIso'])) {
    $model->customersCorporate[$index31]->addresses[$index54]->countryIso = $jsonData['customersCorporate'][$index31]['addresses'][$index54]['countryIso'];

}
if (isset($jsonData['customersCorporate'][$index31]['addresses'][$index54]['region'])) {
    $model->customersCorporate[$index31]->addresses[$index54]->region = $jsonData['customersCorporate'][$index31]['addresses'][$index54]['region'];

}
if (isset($jsonData['customersCorporate'][$index31]['addresses'][$index54]['regionId'])) {
    $model->customersCorporate[$index31]->addresses[$index54]->regionId = $jsonData['customersCorporate'][$index31]['addresses'][$index54]['regionId'];

}
if (isset($jsonData['customersCorporate'][$index31]['addresses'][$index54]['city'])) {
    $model->customersCorporate[$index31]->addresses[$index54]->city = $jsonData['customersCorporate'][$index31]['addresses'][$index54]['city'];

}
if (isset($jsonData['customersCorporate'][$index31]['addresses'][$index54]['cityId'])) {
    $model->customersCorporate[$index31]->addresses[$index54]->cityId = $jsonData['customersCorporate'][$index31]['addresses'][$index54]['cityId'];

}
if (isset($jsonData['customersCorporate'][$index31]['addresses'][$index54]['cityType'])) {
    $model->customersCorporate[$index31]->addresses[$index54]->cityType = $jsonData['customersCorporate'][$index31]['addresses'][$index54]['cityType'];

}
if (isset($jsonData['customersCorporate'][$index31]['addresses'][$index54]['street'])) {
    $model->customersCorporate[$index31]->addresses[$index54]->street = $jsonData['customersCorporate'][$index31]['addresses'][$index54]['street'];

}
if (isset($jsonData['customersCorporate'][$index31]['addresses'][$index54]['streetId'])) {
    $model->customersCorporate[$index31]->addresses[$index54]->streetId = $jsonData['customersCorporate'][$index31]['addresses'][$index54]['streetId'];

}
if (isset($jsonData['customersCorporate'][$index31]['addresses'][$index54]['streetType'])) {
    $model->customersCorporate[$index31]->addresses[$index54]->streetType = $jsonData['customersCorporate'][$index31]['addresses'][$index54]['streetType'];

}
if (isset($jsonData['customersCorporate'][$index31]['addresses'][$index54]['building'])) {
    $model->customersCorporate[$index31]->addresses[$index54]->building = $jsonData['customersCorporate'][$index31]['addresses'][$index54]['building'];

}
if (isset($jsonData['customersCorporate'][$index31]['addresses'][$index54]['flat'])) {
    $model->customersCorporate[$index31]->addresses[$index54]->flat = $jsonData['customersCorporate'][$index31]['addresses'][$index54]['flat'];

}
if (isset($jsonData['customersCorporate'][$index31]['addresses'][$index54]['floor'])) {
    $model->customersCorporate[$index31]->addresses[$index54]->floor = $jsonData['customersCorporate'][$index31]['addresses'][$index54]['floor'];

}
if (isset($jsonData['customersCorporate'][$index31]['addresses'][$index54]['block'])) {
    $model->customersCorporate[$index31]->addresses[$index54]->block = $jsonData['customersCorporate'][$index31]['addresses'][$index54]['block'];

}
if (isset($jsonData['customersCorporate'][$index31]['addresses'][$index54]['house'])) {
    $model->customersCorporate[$index31]->addresses[$index54]->house = $jsonData['customersCorporate'][$index31]['addresses'][$index54]['house'];

}
if (isset($jsonData['customersCorporate'][$index31]['addresses'][$index54]['housing'])) {
    $model->customersCorporate[$index31]->addresses[$index54]->housing = $jsonData['customersCorporate'][$index31]['addresses'][$index54]['housing'];

}
if (isset($jsonData['customersCorporate'][$index31]['addresses'][$index54]['metro'])) {
    $model->customersCorporate[$index31]->addresses[$index54]->metro = $jsonData['customersCorporate'][$index31]['addresses'][$index54]['metro'];

}
if (isset($jsonData['customersCorporate'][$index31]['addresses'][$index54]['notes'])) {
    $model->customersCorporate[$index31]->addresses[$index54]->notes = $jsonData['customersCorporate'][$index31]['addresses'][$index54]['notes'];

}
if (isset($jsonData['customersCorporate'][$index31]['addresses'][$index54]['text'])) {
    $model->customersCorporate[$index31]->addresses[$index54]->text = $jsonData['customersCorporate'][$index31]['addresses'][$index54]['text'];

}
if (isset($jsonData['customersCorporate'][$index31]['addresses'][$index54]['externalId'])) {
    $model->customersCorporate[$index31]->addresses[$index54]->externalId = $jsonData['customersCorporate'][$index31]['addresses'][$index54]['externalId'];

}


}

}
if (isset($jsonData['customersCorporate'][$index31]['vip'])) {
    $model->customersCorporate[$index31]->vip = $jsonData['customersCorporate'][$index31]['vip'];

}
if (isset($jsonData['customersCorporate'][$index31]['bad'])) {
    $model->customersCorporate[$index31]->bad = $jsonData['customersCorporate'][$index31]['bad'];

}
if (isset($jsonData['customersCorporate'][$index31]['site'])) {
    $model->customersCorporate[$index31]->site = $jsonData['customersCorporate'][$index31]['site'];

}
if (isset($jsonData['customersCorporate'][$index31]['tags'])) {
    $model->customersCorporate[$index31]->tags = [];
foreach (array_keys($jsonData['customersCorporate'][$index31]['tags']) as $index49) {
    
$model->customersCorporate[$index31]->tags[$index49] = new RetailCrm\Api\Model\Entity\Customers\CustomerTag();
if (isset($jsonData['customersCorporate'][$index31]['tags'][$index49]['name'])) {
    $model->customersCorporate[$index31]->tags[$index49]->name = $jsonData['customersCorporate'][$index31]['tags'][$index49]['name'];

}
if (isset($jsonData['customersCorporate'][$index31]['tags'][$index49]['color'])) {
    $model->customersCorporate[$index31]->tags[$index49]->color = $jsonData['customersCorporate'][$index31]['tags'][$index49]['color'];

}
if (isset($jsonData['customersCorporate'][$index31]['tags'][$index49]['attached'])) {
    $model->customersCorporate[$index31]->tags[$index49]->attached = $jsonData['customersCorporate'][$index31]['tags'][$index49]['attached'];

}


}

}
if (isset($jsonData['customersCorporate'][$index31]['avgMarginSumm'])) {
    $model->customersCorporate[$index31]->avgMarginSumm = (float) $jsonData['customersCorporate'][$index31]['avgMarginSumm'];

}
if (isset($jsonData['customersCorporate'][$index31]['marginSumm'])) {
    $model->customersCorporate[$index31]->marginSumm = (float) $jsonData['customersCorporate'][$index31]['marginSumm'];

}
if (isset($jsonData['customersCorporate'][$index31]['totalSumm'])) {
    $model->customersCorporate[$index31]->totalSumm = (float) $jsonData['customersCorporate'][$index31]['totalSumm'];

}
if (isset($jsonData['customersCorporate'][$index31]['averageSumm'])) {
    $model->customersCorporate[$index31]->averageSumm = (float) $jsonData['customersCorporate'][$index31]['averageSumm'];

}
if (isset($jsonData['customersCorporate'][$index31]['ordersCount'])) {
    $model->customersCorporate[$index31]->ordersCount = $jsonData['customersCorporate'][$index31]['ordersCount'];

}
if (isset($jsonData['customersCorporate'][$index31]['costSumm'])) {
    $model->customersCorporate[$index31]->costSumm = (float) $jsonData['customersCorporate'][$index31]['costSumm'];

}
if (isset($jsonData['customersCorporate'][$index31]['customFields'])) {
    $model->customersCorporate[$index31]->customFields = [];
foreach (array_keys($jsonData['customersCorporate'][$index31]['customFields']) as $index57) {
    $model->customersCorporate[$index31]->customFields[$index57] = $jsonData['customersCorporate'][$index31]['customFields'][$index57];

}

}
if (isset($jsonData['customersCorporate'][$index31]['personalDiscount'])) {
    $model->customersCorporate[$index31]->personalDiscount = (float) $jsonData['customersCorporate'][$index31]['personalDiscount'];

}
if (isset($jsonData['customersCorporate'][$index31]['cumulativeDiscount'])) {
    $model->customersCorporate[$index31]->cumulativeDiscount = (float) $jsonData['customersCorporate'][$index31]['cumulativeDiscount'];

}
if (isset($jsonData['customersCorporate'][$index31]['discountCardNumber'])) {
    $model->customersCorporate[$index31]->discountCardNumber = $jsonData['customersCorporate'][$index31]['discountCardNumber'];

}
if (isset($jsonData['customersCorporate'][$index31]['firstClientId'])) {
    $model->customersCorporate[$index31]->firstClientId = $jsonData['customersCorporate'][$index31]['firstClientId'];

}
if (isset($jsonData['customersCorporate'][$index31]['lastClientId'])) {
    $model->customersCorporate[$index31]->lastClientId = $jsonData['customersCorporate'][$index31]['lastClientId'];

}
if (isset($jsonData['customersCorporate'][$index31]['mainCustomerContact'])) {
    
$model->customersCorporate[$index31]->mainCustomerContact = new RetailCrm\Api\Model\Entity\CustomersCorporate\CustomerContact();
if (isset($jsonData['customersCorporate'][$index31]['mainCustomerContact']['id'])) {
    $model->customersCorporate[$index31]->mainCustomerContact->id = $jsonData['customersCorporate'][$index31]['mainCustomerContact']['id'];

}
if (isset($jsonData['customersCorporate'][$index31]['mainCustomerContact']['isMain'])) {
    $model->customersCorporate[$index31]->mainCustomerContact->isMain = $jsonData['customersCorporate'][$index31]['mainCustomerContact']['isMain'];

}
if (isset($jsonData['customersCorporate'][$index31]['mainCustomerContact']['customer'])) {
    
$model->customersCorporate[$index31]->mainCustomerContact->customer = new RetailCrm\Api\Model\Entity\CustomersCorporate\SerializedRelationAbstractCustomer();
if (isset($jsonData['customersCorporate'][$index31]['mainCustomerContact']['customer']['id'])) {
    $model->customersCorporate[$index31]->mainCustomerContact->customer->id = $jsonData['customersCorporate'][$index31]['mainCustomerContact']['customer']['id'];

}
if (isset($jsonData['customersCorporate'][$index31]['mainCustomerContact']['customer']['externalId'])) {
    $model->customersCorporate[$index31]->mainCustomerContact->customer->externalId = $jsonData['customersCorporate'][$index31]['mainCustomerContact']['customer']['externalId'];

}
if (isset($jsonData['customersCorporate'][$index31]['mainCustomerContact']['customer']['browserId'])) {
    $model->customersCorporate[$index31]->mainCustomerContact->customer->browserId = $jsonData['customersCorporate'][$index31]['mainCustomerContact']['customer']['browserId'];

}
if (isset($jsonData['customersCorporate'][$index31]['mainCustomerContact']['customer']['site'])) {
    $model->customersCorporate[$index31]->mainCustomerContact->customer->site = $jsonData['customersCorporate'][$index31]['mainCustomerContact']['customer']['site'];

}
if (isset($jsonData['customersCorporate'][$index31]['mainCustomerContact']['customer']['companies'])) {
    $model->customersCorporate[$index31]->mainCustomerContact->customer->companies = [];
foreach (array_keys($jsonData['customersCorporate'][$index31]['mainCustomerContact']['customer']['companies']) as $index89) {
    
$model->customersCorporate[$index31]->mainCustomerContact->customer->companies[$index89] = new RetailCrm\Api\Model\Entity\CustomersCorporate\CustomerContactCompany();
if (isset($jsonData['customersCorporate'][$index31]['mainCustomerContact']['customer']['companies'][$index89]['id'])) {
    $model->customersCorporate[$index31]->mainCustomerContact->customer->companies[$index89]->id = $jsonData['customersCorporate'][$index31]['mainCustomerContact']['customer']['companies'][$index89]['id'];

}
if (isset($jsonData['customersCorporate'][$index31]['mainCustomerContact']['customer']['companies'][$index89]['externalId'])) {
    $model->customersCorporate[$index31]->mainCustomerContact->customer->companies[$index89]->externalId = $jsonData['customersCorporate'][$index31]['mainCustomerContact']['customer']['companies'][$index89]['externalId'];

}
if (isset($jsonData['customersCorporate'][$index31]['mainCustomerContact']['customer']['companies'][$index89]['company'])) {
    
$model->customersCorporate[$index31]->mainCustomerContact->customer->companies[$index89]->company = new RetailCrm\Api\Model\Entity\CustomersCorporate\EntityWithExternalIdNameOutput();
if (isset($jsonData['customersCorporate'][$index31]['mainCustomerContact']['customer']['companies'][$index89]['company']['id'])) {
    $model->customersCorporate[$index31]->mainCustomerContact->customer->companies[$index89]->company->id = $jsonData['customersCorporate'][$index31]['mainCustomerContact']['customer']['companies'][$index89]['company']['id'];

}
if (isset($jsonData['customersCorporate'][$index31]['mainCustomerContact']['customer']['companies'][$index89]['company']['externalId'])) {
    $model->customersCorporate[$index31]->mainCustomerContact->customer->companies[$index89]->company->externalId = $jsonData['customersCorporate'][$index31]['mainCustomerContact']['customer']['companies'][$index89]['company']['externalId'];

}
if (isset($jsonData['customersCorporate'][$index31]['mainCustomerContact']['customer']['companies'][$index89]['company']['name'])) {
    $model->customersCorporate[$index31]->mainCustomerContact->customer->companies[$index89]->company->name = $jsonData['customersCorporate'][$index31]['mainCustomerContact']['customer']['companies'][$index89]['company']['name'];

}


}


}

}


}
if (isset($jsonData['customersCorporate'][$index31]['mainCustomerContact']['companies'])) {
    $model->customersCorporate[$index31]->mainCustomerContact->companies = [];
foreach (array_keys($jsonData['customersCorporate'][$index31]['mainCustomerContact']['companies']) as $index77) {
    
$model->customersCorporate[$index31]->mainCustomerContact->companies[$index77] = new RetailCrm\Api\Model\Entity\CustomersCorporate\CustomerContactCompany();
if (isset($jsonData['customersCorporate'][$index31]['mainCustomerContact']['companies'][$index77]['id'])) {
    $model->customersCorporate[$index31]->mainCustomerContact->companies[$index77]->id = $jsonData['customersCorporate'][$index31]['mainCustomerContact']['companies'][$index77]['id'];

}
if (isset($jsonData['customersCorporate'][$index31]['mainCustomerContact']['companies'][$index77]['externalId'])) {
    $model->customersCorporate[$index31]->mainCustomerContact->companies[$index77]->externalId = $jsonData['customersCorporate'][$index31]['mainCustomerContact']['companies'][$index77]['externalId'];

}
if (isset($jsonData['customersCorporate'][$index31]['mainCustomerContact']['companies'][$index77]['company'])) {
    
$model->customersCorporate[$index31]->mainCustomerContact->companies[$index77]->company = new RetailCrm\Api\Model\Entity\CustomersCorporate\EntityWithExternalIdNameOutput();
if (isset($jsonData['customersCorporate'][$index31]['mainCustomerContact']['companies'][$index77]['company']['id'])) {
    $model->customersCorporate[$index31]->mainCustomerContact->companies[$index77]->company->id = $jsonData['customersCorporate'][$index31]['mainCustomerContact']['companies'][$index77]['company']['id'];

}
if (isset($jsonData['customersCorporate'][$index31]['mainCustomerContact']['companies'][$index77]['company']['externalId'])) {
    $model->customersCorporate[$index31]->mainCustomerContact->companies[$index77]->company->externalId = $jsonData['customersCorporate'][$index31]['mainCustomerContact']['companies'][$index77]['company']['externalId'];

}
if (isset($jsonData['customersCorporate'][$index31]['mainCustomerContact']['companies'][$index77]['company']['name'])) {
    $model->customersCorporate[$index31]->mainCustomerContact->companies[$index77]->company->name = $jsonData['customersCorporate'][$index31]['mainCustomerContact']['companies'][$index77]['company']['name'];

}


}


}

}


}
if (isset($jsonData['customersCorporate'][$index31]['mainCompany'])) {
    
$model->customersCorporate[$index31]->mainCompany = new RetailCrm\Api\Model\Entity\CustomersCorporate\EntityWithExternalIdNameOutput();
if (isset($jsonData['customersCorporate'][$index31]['mainCompany']['id'])) {
    $model->customersCorporate[$index31]->mainCompany->id = $jsonData['customersCorporate'][$index31]['mainCompany']['id'];

}
if (isset($jsonData['customersCorporate'][$index31]['mainCompany']['externalId'])) {
    $model->customersCorporate[$index31]->mainCompany->externalId = $jsonData['customersCorporate'][$index31]['mainCompany']['externalId'];

}
if (isset($jsonData['customersCorporate'][$index31]['mainCompany']['name'])) {
    $model->customersCorporate[$index31]->mainCompany->name = $jsonData['customersCorporate'][$index31]['mainCompany']['name'];

}


}


}

}



    return $model;
}
