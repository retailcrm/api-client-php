<?php

function deserialize_RetailCrm_Api_Model_Response_CustomersCorporate_CustomersCorporateHistoryResponse(array $jsonData): RetailCrm\Api\Model\Response\CustomersCorporate\CustomersCorporateHistoryResponse
{
    
$model = new RetailCrm\Api\Model\Response\CustomersCorporate\CustomersCorporateHistoryResponse();
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
if (isset($jsonData['generatedAt'])) {
    $model->generatedAt = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['generatedAt']);

}
if (isset($jsonData['history'])) {
    $model->history = [];
foreach (array_keys($jsonData['history']) as $index20) {
    
$model->history[$index20] = new RetailCrm\Api\Model\Entity\CustomersCorporate\CustomerCorporateHistory();
if (isset($jsonData['history'][$index20]['id'])) {
    $model->history[$index20]->id = $jsonData['history'][$index20]['id'];

}
if (isset($jsonData['history'][$index20]['createdAt'])) {
    $model->history[$index20]->createdAt = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['history'][$index20]['createdAt']);

}
if (isset($jsonData['history'][$index20]['created'])) {
    $model->history[$index20]->created = $jsonData['history'][$index20]['created'];

}
if (isset($jsonData['history'][$index20]['deleted'])) {
    $model->history[$index20]->deleted = $jsonData['history'][$index20]['deleted'];

}
if (isset($jsonData['history'][$index20]['source'])) {
    $model->history[$index20]->source = $jsonData['history'][$index20]['source'];

}
if (isset($jsonData['history'][$index20]['user'])) {
    
$model->history[$index20]->user = new RetailCrm\Api\Model\Entity\HistoryUser();
if (isset($jsonData['history'][$index20]['user']['id'])) {
    $model->history[$index20]->user->id = $jsonData['history'][$index20]['user']['id'];

}


}
if (isset($jsonData['history'][$index20]['field'])) {
    $model->history[$index20]->field = $jsonData['history'][$index20]['field'];

}
if (isset($jsonData['history'][$index20]['oldValue'])) {
    $model->history[$index20]->oldValue = $jsonData['history'][$index20]['oldValue'];

}
if (isset($jsonData['history'][$index20]['newValue'])) {
    $model->history[$index20]->newValue = $jsonData['history'][$index20]['newValue'];

}
if (isset($jsonData['history'][$index20]['apiKey'])) {
    
$model->history[$index20]->apiKey = new RetailCrm\Api\Model\Entity\HistoryApiKey();
if (isset($jsonData['history'][$index20]['apiKey']['current'])) {
    $model->history[$index20]->apiKey->current = $jsonData['history'][$index20]['apiKey']['current'];

}


}
if (isset($jsonData['history'][$index20]['customer'])) {
    
$model->history[$index20]->customer = new RetailCrm\Api\Model\Entity\CustomersCorporate\CustomerCorporate();
if (isset($jsonData['history'][$index20]['customer']['type'])) {
    $model->history[$index20]->customer->type = $jsonData['history'][$index20]['customer']['type'];

}
if (isset($jsonData['history'][$index20]['customer']['id'])) {
    $model->history[$index20]->customer->id = $jsonData['history'][$index20]['customer']['id'];

}
if (isset($jsonData['history'][$index20]['customer']['externalId'])) {
    $model->history[$index20]->customer->externalId = $jsonData['history'][$index20]['customer']['externalId'];

}
if (isset($jsonData['history'][$index20]['customer']['nickName'])) {
    $model->history[$index20]->customer->nickName = $jsonData['history'][$index20]['customer']['nickName'];

}
if (isset($jsonData['history'][$index20]['customer']['mainAddress'])) {
    
$model->history[$index20]->customer->mainAddress = new RetailCrm\Api\Model\Entity\CustomersCorporate\EntityWithExternalIdNameOutput();
if (isset($jsonData['history'][$index20]['customer']['mainAddress']['id'])) {
    $model->history[$index20]->customer->mainAddress->id = $jsonData['history'][$index20]['customer']['mainAddress']['id'];

}
if (isset($jsonData['history'][$index20]['customer']['mainAddress']['externalId'])) {
    $model->history[$index20]->customer->mainAddress->externalId = $jsonData['history'][$index20]['customer']['mainAddress']['externalId'];

}
if (isset($jsonData['history'][$index20]['customer']['mainAddress']['name'])) {
    $model->history[$index20]->customer->mainAddress->name = $jsonData['history'][$index20]['customer']['mainAddress']['name'];

}


}
if (isset($jsonData['history'][$index20]['customer']['createdAt'])) {
    $model->history[$index20]->customer->createdAt = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['history'][$index20]['customer']['createdAt']);

}
if (isset($jsonData['history'][$index20]['customer']['managerId'])) {
    $model->history[$index20]->customer->managerId = $jsonData['history'][$index20]['customer']['managerId'];

}
if (isset($jsonData['history'][$index20]['customer']['source'])) {
    
$model->history[$index20]->customer->source = new RetailCrm\Api\Model\Entity\Source();
if (isset($jsonData['history'][$index20]['customer']['source']['source'])) {
    $model->history[$index20]->customer->source->source = $jsonData['history'][$index20]['customer']['source']['source'];

}
if (isset($jsonData['history'][$index20]['customer']['source']['medium'])) {
    $model->history[$index20]->customer->source->medium = $jsonData['history'][$index20]['customer']['source']['medium'];

}
if (isset($jsonData['history'][$index20]['customer']['source']['campaign'])) {
    $model->history[$index20]->customer->source->campaign = $jsonData['history'][$index20]['customer']['source']['campaign'];

}
if (isset($jsonData['history'][$index20]['customer']['source']['keyword'])) {
    $model->history[$index20]->customer->source->keyword = $jsonData['history'][$index20]['customer']['source']['keyword'];

}
if (isset($jsonData['history'][$index20]['customer']['source']['content'])) {
    $model->history[$index20]->customer->source->content = $jsonData['history'][$index20]['customer']['source']['content'];

}


}
if (isset($jsonData['history'][$index20]['customer']['customerContacts'])) {
    $model->history[$index20]->customer->customerContacts = [];
foreach (array_keys($jsonData['history'][$index20]['customer']['customerContacts']) as $index62) {
    
$model->history[$index20]->customer->customerContacts[$index62] = new RetailCrm\Api\Model\Entity\CustomersCorporate\CustomerContact();
if (isset($jsonData['history'][$index20]['customer']['customerContacts'][$index62]['id'])) {
    $model->history[$index20]->customer->customerContacts[$index62]->id = $jsonData['history'][$index20]['customer']['customerContacts'][$index62]['id'];

}
if (isset($jsonData['history'][$index20]['customer']['customerContacts'][$index62]['isMain'])) {
    $model->history[$index20]->customer->customerContacts[$index62]->isMain = $jsonData['history'][$index20]['customer']['customerContacts'][$index62]['isMain'];

}
if (isset($jsonData['history'][$index20]['customer']['customerContacts'][$index62]['customer'])) {
    
$model->history[$index20]->customer->customerContacts[$index62]->customer = new RetailCrm\Api\Model\Entity\CustomersCorporate\SerializedRelationAbstractCustomer();
if (isset($jsonData['history'][$index20]['customer']['customerContacts'][$index62]['customer']['id'])) {
    $model->history[$index20]->customer->customerContacts[$index62]->customer->id = $jsonData['history'][$index20]['customer']['customerContacts'][$index62]['customer']['id'];

}
if (isset($jsonData['history'][$index20]['customer']['customerContacts'][$index62]['customer']['externalId'])) {
    $model->history[$index20]->customer->customerContacts[$index62]->customer->externalId = $jsonData['history'][$index20]['customer']['customerContacts'][$index62]['customer']['externalId'];

}
if (isset($jsonData['history'][$index20]['customer']['customerContacts'][$index62]['customer']['browserId'])) {
    $model->history[$index20]->customer->customerContacts[$index62]->customer->browserId = $jsonData['history'][$index20]['customer']['customerContacts'][$index62]['customer']['browserId'];

}
if (isset($jsonData['history'][$index20]['customer']['customerContacts'][$index62]['customer']['site'])) {
    $model->history[$index20]->customer->customerContacts[$index62]->customer->site = $jsonData['history'][$index20]['customer']['customerContacts'][$index62]['customer']['site'];

}
if (isset($jsonData['history'][$index20]['customer']['customerContacts'][$index62]['customer']['companies'])) {
    $model->history[$index20]->customer->customerContacts[$index62]->customer->companies = [];
foreach (array_keys($jsonData['history'][$index20]['customer']['customerContacts'][$index62]['customer']['companies']) as $index97) {
    
$model->history[$index20]->customer->customerContacts[$index62]->customer->companies[$index97] = new RetailCrm\Api\Model\Entity\CustomersCorporate\CustomerContactCompany();
if (isset($jsonData['history'][$index20]['customer']['customerContacts'][$index62]['customer']['companies'][$index97]['id'])) {
    $model->history[$index20]->customer->customerContacts[$index62]->customer->companies[$index97]->id = $jsonData['history'][$index20]['customer']['customerContacts'][$index62]['customer']['companies'][$index97]['id'];

}
if (isset($jsonData['history'][$index20]['customer']['customerContacts'][$index62]['customer']['companies'][$index97]['externalId'])) {
    $model->history[$index20]->customer->customerContacts[$index62]->customer->companies[$index97]->externalId = $jsonData['history'][$index20]['customer']['customerContacts'][$index62]['customer']['companies'][$index97]['externalId'];

}
if (isset($jsonData['history'][$index20]['customer']['customerContacts'][$index62]['customer']['companies'][$index97]['company'])) {
    
$model->history[$index20]->customer->customerContacts[$index62]->customer->companies[$index97]->company = new RetailCrm\Api\Model\Entity\CustomersCorporate\EntityWithExternalIdNameOutput();
if (isset($jsonData['history'][$index20]['customer']['customerContacts'][$index62]['customer']['companies'][$index97]['company']['id'])) {
    $model->history[$index20]->customer->customerContacts[$index62]->customer->companies[$index97]->company->id = $jsonData['history'][$index20]['customer']['customerContacts'][$index62]['customer']['companies'][$index97]['company']['id'];

}
if (isset($jsonData['history'][$index20]['customer']['customerContacts'][$index62]['customer']['companies'][$index97]['company']['externalId'])) {
    $model->history[$index20]->customer->customerContacts[$index62]->customer->companies[$index97]->company->externalId = $jsonData['history'][$index20]['customer']['customerContacts'][$index62]['customer']['companies'][$index97]['company']['externalId'];

}
if (isset($jsonData['history'][$index20]['customer']['customerContacts'][$index62]['customer']['companies'][$index97]['company']['name'])) {
    $model->history[$index20]->customer->customerContacts[$index62]->customer->companies[$index97]->company->name = $jsonData['history'][$index20]['customer']['customerContacts'][$index62]['customer']['companies'][$index97]['company']['name'];

}


}


}

}


}
if (isset($jsonData['history'][$index20]['customer']['customerContacts'][$index62]['companies'])) {
    $model->history[$index20]->customer->customerContacts[$index62]->companies = [];
foreach (array_keys($jsonData['history'][$index20]['customer']['customerContacts'][$index62]['companies']) as $index85) {
    
$model->history[$index20]->customer->customerContacts[$index62]->companies[$index85] = new RetailCrm\Api\Model\Entity\CustomersCorporate\CustomerContactCompany();
if (isset($jsonData['history'][$index20]['customer']['customerContacts'][$index62]['companies'][$index85]['id'])) {
    $model->history[$index20]->customer->customerContacts[$index62]->companies[$index85]->id = $jsonData['history'][$index20]['customer']['customerContacts'][$index62]['companies'][$index85]['id'];

}
if (isset($jsonData['history'][$index20]['customer']['customerContacts'][$index62]['companies'][$index85]['externalId'])) {
    $model->history[$index20]->customer->customerContacts[$index62]->companies[$index85]->externalId = $jsonData['history'][$index20]['customer']['customerContacts'][$index62]['companies'][$index85]['externalId'];

}
if (isset($jsonData['history'][$index20]['customer']['customerContacts'][$index62]['companies'][$index85]['company'])) {
    
$model->history[$index20]->customer->customerContacts[$index62]->companies[$index85]->company = new RetailCrm\Api\Model\Entity\CustomersCorporate\EntityWithExternalIdNameOutput();
if (isset($jsonData['history'][$index20]['customer']['customerContacts'][$index62]['companies'][$index85]['company']['id'])) {
    $model->history[$index20]->customer->customerContacts[$index62]->companies[$index85]->company->id = $jsonData['history'][$index20]['customer']['customerContacts'][$index62]['companies'][$index85]['company']['id'];

}
if (isset($jsonData['history'][$index20]['customer']['customerContacts'][$index62]['companies'][$index85]['company']['externalId'])) {
    $model->history[$index20]->customer->customerContacts[$index62]->companies[$index85]->company->externalId = $jsonData['history'][$index20]['customer']['customerContacts'][$index62]['companies'][$index85]['company']['externalId'];

}
if (isset($jsonData['history'][$index20]['customer']['customerContacts'][$index62]['companies'][$index85]['company']['name'])) {
    $model->history[$index20]->customer->customerContacts[$index62]->companies[$index85]->company->name = $jsonData['history'][$index20]['customer']['customerContacts'][$index62]['companies'][$index85]['company']['name'];

}


}


}

}


}

}
if (isset($jsonData['history'][$index20]['customer']['companies'])) {
    $model->history[$index20]->customer->companies = [];
foreach (array_keys($jsonData['history'][$index20]['customer']['companies']) as $index55) {
    
$model->history[$index20]->customer->companies[$index55] = new RetailCrm\Api\Model\Entity\CustomersCorporate\Company();
if (isset($jsonData['history'][$index20]['customer']['companies'][$index55]['id'])) {
    $model->history[$index20]->customer->companies[$index55]->id = $jsonData['history'][$index20]['customer']['companies'][$index55]['id'];

}
if (isset($jsonData['history'][$index20]['customer']['companies'][$index55]['isMain'])) {
    $model->history[$index20]->customer->companies[$index55]->isMain = $jsonData['history'][$index20]['customer']['companies'][$index55]['isMain'];

}
if (isset($jsonData['history'][$index20]['customer']['companies'][$index55]['externalId'])) {
    $model->history[$index20]->customer->companies[$index55]->externalId = $jsonData['history'][$index20]['customer']['companies'][$index55]['externalId'];

}
if (isset($jsonData['history'][$index20]['customer']['companies'][$index55]['active'])) {
    $model->history[$index20]->customer->companies[$index55]->active = $jsonData['history'][$index20]['customer']['companies'][$index55]['active'];

}
if (isset($jsonData['history'][$index20]['customer']['companies'][$index55]['name'])) {
    $model->history[$index20]->customer->companies[$index55]->name = $jsonData['history'][$index20]['customer']['companies'][$index55]['name'];

}
if (isset($jsonData['history'][$index20]['customer']['companies'][$index55]['brand'])) {
    $model->history[$index20]->customer->companies[$index55]->brand = $jsonData['history'][$index20]['customer']['companies'][$index55]['brand'];

}
if (isset($jsonData['history'][$index20]['customer']['companies'][$index55]['site'])) {
    $model->history[$index20]->customer->companies[$index55]->site = $jsonData['history'][$index20]['customer']['companies'][$index55]['site'];

}
if (isset($jsonData['history'][$index20]['customer']['companies'][$index55]['createdAt'])) {
    $model->history[$index20]->customer->companies[$index55]->createdAt = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['history'][$index20]['customer']['companies'][$index55]['createdAt']);

}
if (isset($jsonData['history'][$index20]['customer']['companies'][$index55]['customer'])) {
    
$model->history[$index20]->customer->companies[$index55]->customer = new RetailCrm\Api\Model\Entity\CustomersCorporate\SerializedEntityCustomer();
if (isset($jsonData['history'][$index20]['customer']['companies'][$index55]['customer']['site'])) {
    $model->history[$index20]->customer->companies[$index55]->customer->site = $jsonData['history'][$index20]['customer']['companies'][$index55]['customer']['site'];

}
if (isset($jsonData['history'][$index20]['customer']['companies'][$index55]['customer']['id'])) {
    $model->history[$index20]->customer->companies[$index55]->customer->id = $jsonData['history'][$index20]['customer']['companies'][$index55]['customer']['id'];

}
if (isset($jsonData['history'][$index20]['customer']['companies'][$index55]['customer']['externalId'])) {
    $model->history[$index20]->customer->companies[$index55]->customer->externalId = $jsonData['history'][$index20]['customer']['companies'][$index55]['customer']['externalId'];

}
if (isset($jsonData['history'][$index20]['customer']['companies'][$index55]['customer']['type'])) {
    $model->history[$index20]->customer->companies[$index55]->customer->type = $jsonData['history'][$index20]['customer']['companies'][$index55]['customer']['type'];

}


}
if (isset($jsonData['history'][$index20]['customer']['companies'][$index55]['contragent'])) {
    
$model->history[$index20]->customer->companies[$index55]->contragent = new RetailCrm\Api\Model\Entity\Customers\CustomerContragent();
if (isset($jsonData['history'][$index20]['customer']['companies'][$index55]['contragent']['contragentType'])) {
    $model->history[$index20]->customer->companies[$index55]->contragent->contragentType = $jsonData['history'][$index20]['customer']['companies'][$index55]['contragent']['contragentType'];

}
if (isset($jsonData['history'][$index20]['customer']['companies'][$index55]['contragent']['legalName'])) {
    $model->history[$index20]->customer->companies[$index55]->contragent->legalName = $jsonData['history'][$index20]['customer']['companies'][$index55]['contragent']['legalName'];

}
if (isset($jsonData['history'][$index20]['customer']['companies'][$index55]['contragent']['legalAddress'])) {
    $model->history[$index20]->customer->companies[$index55]->contragent->legalAddress = $jsonData['history'][$index20]['customer']['companies'][$index55]['contragent']['legalAddress'];

}
if (isset($jsonData['history'][$index20]['customer']['companies'][$index55]['contragent']['INN'])) {
    $model->history[$index20]->customer->companies[$index55]->contragent->INN = $jsonData['history'][$index20]['customer']['companies'][$index55]['contragent']['INN'];

}
if (isset($jsonData['history'][$index20]['customer']['companies'][$index55]['contragent']['OKPO'])) {
    $model->history[$index20]->customer->companies[$index55]->contragent->OKPO = $jsonData['history'][$index20]['customer']['companies'][$index55]['contragent']['OKPO'];

}
if (isset($jsonData['history'][$index20]['customer']['companies'][$index55]['contragent']['KPP'])) {
    $model->history[$index20]->customer->companies[$index55]->contragent->KPP = $jsonData['history'][$index20]['customer']['companies'][$index55]['contragent']['KPP'];

}
if (isset($jsonData['history'][$index20]['customer']['companies'][$index55]['contragent']['OGRN'])) {
    $model->history[$index20]->customer->companies[$index55]->contragent->OGRN = $jsonData['history'][$index20]['customer']['companies'][$index55]['contragent']['OGRN'];

}
if (isset($jsonData['history'][$index20]['customer']['companies'][$index55]['contragent']['OGRNIP'])) {
    $model->history[$index20]->customer->companies[$index55]->contragent->OGRNIP = $jsonData['history'][$index20]['customer']['companies'][$index55]['contragent']['OGRNIP'];

}
if (isset($jsonData['history'][$index20]['customer']['companies'][$index55]['contragent']['certificateNumber'])) {
    $model->history[$index20]->customer->companies[$index55]->contragent->certificateNumber = $jsonData['history'][$index20]['customer']['companies'][$index55]['contragent']['certificateNumber'];

}
if (isset($jsonData['history'][$index20]['customer']['companies'][$index55]['contragent']['certificateDate'])) {
    $model->history[$index20]->customer->companies[$index55]->contragent->certificateDate = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['history'][$index20]['customer']['companies'][$index55]['contragent']['certificateDate']);

}
if (isset($jsonData['history'][$index20]['customer']['companies'][$index55]['contragent']['BIK'])) {
    $model->history[$index20]->customer->companies[$index55]->contragent->BIK = $jsonData['history'][$index20]['customer']['companies'][$index55]['contragent']['BIK'];

}
if (isset($jsonData['history'][$index20]['customer']['companies'][$index55]['contragent']['bank'])) {
    $model->history[$index20]->customer->companies[$index55]->contragent->bank = $jsonData['history'][$index20]['customer']['companies'][$index55]['contragent']['bank'];

}
if (isset($jsonData['history'][$index20]['customer']['companies'][$index55]['contragent']['bankAddress'])) {
    $model->history[$index20]->customer->companies[$index55]->contragent->bankAddress = $jsonData['history'][$index20]['customer']['companies'][$index55]['contragent']['bankAddress'];

}
if (isset($jsonData['history'][$index20]['customer']['companies'][$index55]['contragent']['corrAccount'])) {
    $model->history[$index20]->customer->companies[$index55]->contragent->corrAccount = $jsonData['history'][$index20]['customer']['companies'][$index55]['contragent']['corrAccount'];

}
if (isset($jsonData['history'][$index20]['customer']['companies'][$index55]['contragent']['bankAccount'])) {
    $model->history[$index20]->customer->companies[$index55]->contragent->bankAccount = $jsonData['history'][$index20]['customer']['companies'][$index55]['contragent']['bankAccount'];

}


}
if (isset($jsonData['history'][$index20]['customer']['companies'][$index55]['address'])) {
    
$model->history[$index20]->customer->companies[$index55]->address = new RetailCrm\Api\Model\Entity\Customers\CustomerAddress();
if (isset($jsonData['history'][$index20]['customer']['companies'][$index55]['address']['id'])) {
    $model->history[$index20]->customer->companies[$index55]->address->id = $jsonData['history'][$index20]['customer']['companies'][$index55]['address']['id'];

}
if (isset($jsonData['history'][$index20]['customer']['companies'][$index55]['address']['name'])) {
    $model->history[$index20]->customer->companies[$index55]->address->name = $jsonData['history'][$index20]['customer']['companies'][$index55]['address']['name'];

}
if (isset($jsonData['history'][$index20]['customer']['companies'][$index55]['address']['isMain'])) {
    $model->history[$index20]->customer->companies[$index55]->address->isMain = $jsonData['history'][$index20]['customer']['companies'][$index55]['address']['isMain'];

}
if (isset($jsonData['history'][$index20]['customer']['companies'][$index55]['address']['index'])) {
    $model->history[$index20]->customer->companies[$index55]->address->index = $jsonData['history'][$index20]['customer']['companies'][$index55]['address']['index'];

}
if (isset($jsonData['history'][$index20]['customer']['companies'][$index55]['address']['countryIso'])) {
    $model->history[$index20]->customer->companies[$index55]->address->countryIso = $jsonData['history'][$index20]['customer']['companies'][$index55]['address']['countryIso'];

}
if (isset($jsonData['history'][$index20]['customer']['companies'][$index55]['address']['region'])) {
    $model->history[$index20]->customer->companies[$index55]->address->region = $jsonData['history'][$index20]['customer']['companies'][$index55]['address']['region'];

}
if (isset($jsonData['history'][$index20]['customer']['companies'][$index55]['address']['regionId'])) {
    $model->history[$index20]->customer->companies[$index55]->address->regionId = $jsonData['history'][$index20]['customer']['companies'][$index55]['address']['regionId'];

}
if (isset($jsonData['history'][$index20]['customer']['companies'][$index55]['address']['city'])) {
    $model->history[$index20]->customer->companies[$index55]->address->city = $jsonData['history'][$index20]['customer']['companies'][$index55]['address']['city'];

}
if (isset($jsonData['history'][$index20]['customer']['companies'][$index55]['address']['cityId'])) {
    $model->history[$index20]->customer->companies[$index55]->address->cityId = $jsonData['history'][$index20]['customer']['companies'][$index55]['address']['cityId'];

}
if (isset($jsonData['history'][$index20]['customer']['companies'][$index55]['address']['cityType'])) {
    $model->history[$index20]->customer->companies[$index55]->address->cityType = $jsonData['history'][$index20]['customer']['companies'][$index55]['address']['cityType'];

}
if (isset($jsonData['history'][$index20]['customer']['companies'][$index55]['address']['street'])) {
    $model->history[$index20]->customer->companies[$index55]->address->street = $jsonData['history'][$index20]['customer']['companies'][$index55]['address']['street'];

}
if (isset($jsonData['history'][$index20]['customer']['companies'][$index55]['address']['streetId'])) {
    $model->history[$index20]->customer->companies[$index55]->address->streetId = $jsonData['history'][$index20]['customer']['companies'][$index55]['address']['streetId'];

}
if (isset($jsonData['history'][$index20]['customer']['companies'][$index55]['address']['streetType'])) {
    $model->history[$index20]->customer->companies[$index55]->address->streetType = $jsonData['history'][$index20]['customer']['companies'][$index55]['address']['streetType'];

}
if (isset($jsonData['history'][$index20]['customer']['companies'][$index55]['address']['building'])) {
    $model->history[$index20]->customer->companies[$index55]->address->building = $jsonData['history'][$index20]['customer']['companies'][$index55]['address']['building'];

}
if (isset($jsonData['history'][$index20]['customer']['companies'][$index55]['address']['flat'])) {
    $model->history[$index20]->customer->companies[$index55]->address->flat = $jsonData['history'][$index20]['customer']['companies'][$index55]['address']['flat'];

}
if (isset($jsonData['history'][$index20]['customer']['companies'][$index55]['address']['floor'])) {
    $model->history[$index20]->customer->companies[$index55]->address->floor = $jsonData['history'][$index20]['customer']['companies'][$index55]['address']['floor'];

}
if (isset($jsonData['history'][$index20]['customer']['companies'][$index55]['address']['block'])) {
    $model->history[$index20]->customer->companies[$index55]->address->block = $jsonData['history'][$index20]['customer']['companies'][$index55]['address']['block'];

}
if (isset($jsonData['history'][$index20]['customer']['companies'][$index55]['address']['house'])) {
    $model->history[$index20]->customer->companies[$index55]->address->house = $jsonData['history'][$index20]['customer']['companies'][$index55]['address']['house'];

}
if (isset($jsonData['history'][$index20]['customer']['companies'][$index55]['address']['housing'])) {
    $model->history[$index20]->customer->companies[$index55]->address->housing = $jsonData['history'][$index20]['customer']['companies'][$index55]['address']['housing'];

}
if (isset($jsonData['history'][$index20]['customer']['companies'][$index55]['address']['metro'])) {
    $model->history[$index20]->customer->companies[$index55]->address->metro = $jsonData['history'][$index20]['customer']['companies'][$index55]['address']['metro'];

}
if (isset($jsonData['history'][$index20]['customer']['companies'][$index55]['address']['notes'])) {
    $model->history[$index20]->customer->companies[$index55]->address->notes = $jsonData['history'][$index20]['customer']['companies'][$index55]['address']['notes'];

}
if (isset($jsonData['history'][$index20]['customer']['companies'][$index55]['address']['text'])) {
    $model->history[$index20]->customer->companies[$index55]->address->text = $jsonData['history'][$index20]['customer']['companies'][$index55]['address']['text'];

}
if (isset($jsonData['history'][$index20]['customer']['companies'][$index55]['address']['externalId'])) {
    $model->history[$index20]->customer->companies[$index55]->address->externalId = $jsonData['history'][$index20]['customer']['companies'][$index55]['address']['externalId'];

}


}
if (isset($jsonData['history'][$index20]['customer']['companies'][$index55]['customFields'])) {
    $model->history[$index20]->customer->companies[$index55]->customFields = [];
foreach (array_keys($jsonData['history'][$index20]['customer']['companies'][$index55]['customFields']) as $index81) {
    $model->history[$index20]->customer->companies[$index55]->customFields[$index81] = $jsonData['history'][$index20]['customer']['companies'][$index55]['customFields'][$index81];

}

}
if (isset($jsonData['history'][$index20]['customer']['companies'][$index55]['marginSumm'])) {
    $model->history[$index20]->customer->companies[$index55]->marginSumm = (float) $jsonData['history'][$index20]['customer']['companies'][$index55]['marginSumm'];

}
if (isset($jsonData['history'][$index20]['customer']['companies'][$index55]['totalSumm'])) {
    $model->history[$index20]->customer->companies[$index55]->totalSumm = (float) $jsonData['history'][$index20]['customer']['companies'][$index55]['totalSumm'];

}
if (isset($jsonData['history'][$index20]['customer']['companies'][$index55]['averageSumm'])) {
    $model->history[$index20]->customer->companies[$index55]->averageSumm = (float) $jsonData['history'][$index20]['customer']['companies'][$index55]['averageSumm'];

}
if (isset($jsonData['history'][$index20]['customer']['companies'][$index55]['ordersCount'])) {
    $model->history[$index20]->customer->companies[$index55]->ordersCount = $jsonData['history'][$index20]['customer']['companies'][$index55]['ordersCount'];

}
if (isset($jsonData['history'][$index20]['customer']['companies'][$index55]['costSumm'])) {
    $model->history[$index20]->customer->companies[$index55]->costSumm = (float) $jsonData['history'][$index20]['customer']['companies'][$index55]['costSumm'];

}


}

}
if (isset($jsonData['history'][$index20]['customer']['addresses'])) {
    $model->history[$index20]->customer->addresses = [];
foreach (array_keys($jsonData['history'][$index20]['customer']['addresses']) as $index55) {
    
$model->history[$index20]->customer->addresses[$index55] = new RetailCrm\Api\Model\Entity\Customers\CustomerAddress();
if (isset($jsonData['history'][$index20]['customer']['addresses'][$index55]['id'])) {
    $model->history[$index20]->customer->addresses[$index55]->id = $jsonData['history'][$index20]['customer']['addresses'][$index55]['id'];

}
if (isset($jsonData['history'][$index20]['customer']['addresses'][$index55]['name'])) {
    $model->history[$index20]->customer->addresses[$index55]->name = $jsonData['history'][$index20]['customer']['addresses'][$index55]['name'];

}
if (isset($jsonData['history'][$index20]['customer']['addresses'][$index55]['isMain'])) {
    $model->history[$index20]->customer->addresses[$index55]->isMain = $jsonData['history'][$index20]['customer']['addresses'][$index55]['isMain'];

}
if (isset($jsonData['history'][$index20]['customer']['addresses'][$index55]['index'])) {
    $model->history[$index20]->customer->addresses[$index55]->index = $jsonData['history'][$index20]['customer']['addresses'][$index55]['index'];

}
if (isset($jsonData['history'][$index20]['customer']['addresses'][$index55]['countryIso'])) {
    $model->history[$index20]->customer->addresses[$index55]->countryIso = $jsonData['history'][$index20]['customer']['addresses'][$index55]['countryIso'];

}
if (isset($jsonData['history'][$index20]['customer']['addresses'][$index55]['region'])) {
    $model->history[$index20]->customer->addresses[$index55]->region = $jsonData['history'][$index20]['customer']['addresses'][$index55]['region'];

}
if (isset($jsonData['history'][$index20]['customer']['addresses'][$index55]['regionId'])) {
    $model->history[$index20]->customer->addresses[$index55]->regionId = $jsonData['history'][$index20]['customer']['addresses'][$index55]['regionId'];

}
if (isset($jsonData['history'][$index20]['customer']['addresses'][$index55]['city'])) {
    $model->history[$index20]->customer->addresses[$index55]->city = $jsonData['history'][$index20]['customer']['addresses'][$index55]['city'];

}
if (isset($jsonData['history'][$index20]['customer']['addresses'][$index55]['cityId'])) {
    $model->history[$index20]->customer->addresses[$index55]->cityId = $jsonData['history'][$index20]['customer']['addresses'][$index55]['cityId'];

}
if (isset($jsonData['history'][$index20]['customer']['addresses'][$index55]['cityType'])) {
    $model->history[$index20]->customer->addresses[$index55]->cityType = $jsonData['history'][$index20]['customer']['addresses'][$index55]['cityType'];

}
if (isset($jsonData['history'][$index20]['customer']['addresses'][$index55]['street'])) {
    $model->history[$index20]->customer->addresses[$index55]->street = $jsonData['history'][$index20]['customer']['addresses'][$index55]['street'];

}
if (isset($jsonData['history'][$index20]['customer']['addresses'][$index55]['streetId'])) {
    $model->history[$index20]->customer->addresses[$index55]->streetId = $jsonData['history'][$index20]['customer']['addresses'][$index55]['streetId'];

}
if (isset($jsonData['history'][$index20]['customer']['addresses'][$index55]['streetType'])) {
    $model->history[$index20]->customer->addresses[$index55]->streetType = $jsonData['history'][$index20]['customer']['addresses'][$index55]['streetType'];

}
if (isset($jsonData['history'][$index20]['customer']['addresses'][$index55]['building'])) {
    $model->history[$index20]->customer->addresses[$index55]->building = $jsonData['history'][$index20]['customer']['addresses'][$index55]['building'];

}
if (isset($jsonData['history'][$index20]['customer']['addresses'][$index55]['flat'])) {
    $model->history[$index20]->customer->addresses[$index55]->flat = $jsonData['history'][$index20]['customer']['addresses'][$index55]['flat'];

}
if (isset($jsonData['history'][$index20]['customer']['addresses'][$index55]['floor'])) {
    $model->history[$index20]->customer->addresses[$index55]->floor = $jsonData['history'][$index20]['customer']['addresses'][$index55]['floor'];

}
if (isset($jsonData['history'][$index20]['customer']['addresses'][$index55]['block'])) {
    $model->history[$index20]->customer->addresses[$index55]->block = $jsonData['history'][$index20]['customer']['addresses'][$index55]['block'];

}
if (isset($jsonData['history'][$index20]['customer']['addresses'][$index55]['house'])) {
    $model->history[$index20]->customer->addresses[$index55]->house = $jsonData['history'][$index20]['customer']['addresses'][$index55]['house'];

}
if (isset($jsonData['history'][$index20]['customer']['addresses'][$index55]['housing'])) {
    $model->history[$index20]->customer->addresses[$index55]->housing = $jsonData['history'][$index20]['customer']['addresses'][$index55]['housing'];

}
if (isset($jsonData['history'][$index20]['customer']['addresses'][$index55]['metro'])) {
    $model->history[$index20]->customer->addresses[$index55]->metro = $jsonData['history'][$index20]['customer']['addresses'][$index55]['metro'];

}
if (isset($jsonData['history'][$index20]['customer']['addresses'][$index55]['notes'])) {
    $model->history[$index20]->customer->addresses[$index55]->notes = $jsonData['history'][$index20]['customer']['addresses'][$index55]['notes'];

}
if (isset($jsonData['history'][$index20]['customer']['addresses'][$index55]['text'])) {
    $model->history[$index20]->customer->addresses[$index55]->text = $jsonData['history'][$index20]['customer']['addresses'][$index55]['text'];

}
if (isset($jsonData['history'][$index20]['customer']['addresses'][$index55]['externalId'])) {
    $model->history[$index20]->customer->addresses[$index55]->externalId = $jsonData['history'][$index20]['customer']['addresses'][$index55]['externalId'];

}


}

}
if (isset($jsonData['history'][$index20]['customer']['vip'])) {
    $model->history[$index20]->customer->vip = $jsonData['history'][$index20]['customer']['vip'];

}
if (isset($jsonData['history'][$index20]['customer']['bad'])) {
    $model->history[$index20]->customer->bad = $jsonData['history'][$index20]['customer']['bad'];

}
if (isset($jsonData['history'][$index20]['customer']['site'])) {
    $model->history[$index20]->customer->site = $jsonData['history'][$index20]['customer']['site'];

}
if (isset($jsonData['history'][$index20]['customer']['tags'])) {
    $model->history[$index20]->customer->tags = [];
foreach (array_keys($jsonData['history'][$index20]['customer']['tags']) as $index50) {
    
$model->history[$index20]->customer->tags[$index50] = new RetailCrm\Api\Model\Entity\Customers\CustomerTag();
if (isset($jsonData['history'][$index20]['customer']['tags'][$index50]['name'])) {
    $model->history[$index20]->customer->tags[$index50]->name = $jsonData['history'][$index20]['customer']['tags'][$index50]['name'];

}
if (isset($jsonData['history'][$index20]['customer']['tags'][$index50]['color'])) {
    $model->history[$index20]->customer->tags[$index50]->color = $jsonData['history'][$index20]['customer']['tags'][$index50]['color'];

}
if (isset($jsonData['history'][$index20]['customer']['tags'][$index50]['attached'])) {
    $model->history[$index20]->customer->tags[$index50]->attached = $jsonData['history'][$index20]['customer']['tags'][$index50]['attached'];

}


}

}
if (isset($jsonData['history'][$index20]['customer']['avgMarginSumm'])) {
    $model->history[$index20]->customer->avgMarginSumm = (float) $jsonData['history'][$index20]['customer']['avgMarginSumm'];

}
if (isset($jsonData['history'][$index20]['customer']['marginSumm'])) {
    $model->history[$index20]->customer->marginSumm = (float) $jsonData['history'][$index20]['customer']['marginSumm'];

}
if (isset($jsonData['history'][$index20]['customer']['totalSumm'])) {
    $model->history[$index20]->customer->totalSumm = (float) $jsonData['history'][$index20]['customer']['totalSumm'];

}
if (isset($jsonData['history'][$index20]['customer']['averageSumm'])) {
    $model->history[$index20]->customer->averageSumm = (float) $jsonData['history'][$index20]['customer']['averageSumm'];

}
if (isset($jsonData['history'][$index20]['customer']['ordersCount'])) {
    $model->history[$index20]->customer->ordersCount = $jsonData['history'][$index20]['customer']['ordersCount'];

}
if (isset($jsonData['history'][$index20]['customer']['costSumm'])) {
    $model->history[$index20]->customer->costSumm = (float) $jsonData['history'][$index20]['customer']['costSumm'];

}
if (isset($jsonData['history'][$index20]['customer']['customFields'])) {
    $model->history[$index20]->customer->customFields = [];
foreach (array_keys($jsonData['history'][$index20]['customer']['customFields']) as $index58) {
    $model->history[$index20]->customer->customFields[$index58] = $jsonData['history'][$index20]['customer']['customFields'][$index58];

}

}
if (isset($jsonData['history'][$index20]['customer']['personalDiscount'])) {
    $model->history[$index20]->customer->personalDiscount = (float) $jsonData['history'][$index20]['customer']['personalDiscount'];

}
if (isset($jsonData['history'][$index20]['customer']['cumulativeDiscount'])) {
    $model->history[$index20]->customer->cumulativeDiscount = (float) $jsonData['history'][$index20]['customer']['cumulativeDiscount'];

}
if (isset($jsonData['history'][$index20]['customer']['discountCardNumber'])) {
    $model->history[$index20]->customer->discountCardNumber = $jsonData['history'][$index20]['customer']['discountCardNumber'];

}
if (isset($jsonData['history'][$index20]['customer']['firstClientId'])) {
    $model->history[$index20]->customer->firstClientId = $jsonData['history'][$index20]['customer']['firstClientId'];

}
if (isset($jsonData['history'][$index20]['customer']['lastClientId'])) {
    $model->history[$index20]->customer->lastClientId = $jsonData['history'][$index20]['customer']['lastClientId'];

}
if (isset($jsonData['history'][$index20]['customer']['mainCustomerContact'])) {
    
$model->history[$index20]->customer->mainCustomerContact = new RetailCrm\Api\Model\Entity\CustomersCorporate\CustomerContact();
if (isset($jsonData['history'][$index20]['customer']['mainCustomerContact']['id'])) {
    $model->history[$index20]->customer->mainCustomerContact->id = $jsonData['history'][$index20]['customer']['mainCustomerContact']['id'];

}
if (isset($jsonData['history'][$index20]['customer']['mainCustomerContact']['isMain'])) {
    $model->history[$index20]->customer->mainCustomerContact->isMain = $jsonData['history'][$index20]['customer']['mainCustomerContact']['isMain'];

}
if (isset($jsonData['history'][$index20]['customer']['mainCustomerContact']['customer'])) {
    
$model->history[$index20]->customer->mainCustomerContact->customer = new RetailCrm\Api\Model\Entity\CustomersCorporate\SerializedRelationAbstractCustomer();
if (isset($jsonData['history'][$index20]['customer']['mainCustomerContact']['customer']['id'])) {
    $model->history[$index20]->customer->mainCustomerContact->customer->id = $jsonData['history'][$index20]['customer']['mainCustomerContact']['customer']['id'];

}
if (isset($jsonData['history'][$index20]['customer']['mainCustomerContact']['customer']['externalId'])) {
    $model->history[$index20]->customer->mainCustomerContact->customer->externalId = $jsonData['history'][$index20]['customer']['mainCustomerContact']['customer']['externalId'];

}
if (isset($jsonData['history'][$index20]['customer']['mainCustomerContact']['customer']['browserId'])) {
    $model->history[$index20]->customer->mainCustomerContact->customer->browserId = $jsonData['history'][$index20]['customer']['mainCustomerContact']['customer']['browserId'];

}
if (isset($jsonData['history'][$index20]['customer']['mainCustomerContact']['customer']['site'])) {
    $model->history[$index20]->customer->mainCustomerContact->customer->site = $jsonData['history'][$index20]['customer']['mainCustomerContact']['customer']['site'];

}
if (isset($jsonData['history'][$index20]['customer']['mainCustomerContact']['customer']['companies'])) {
    $model->history[$index20]->customer->mainCustomerContact->customer->companies = [];
foreach (array_keys($jsonData['history'][$index20]['customer']['mainCustomerContact']['customer']['companies']) as $index90) {
    
$model->history[$index20]->customer->mainCustomerContact->customer->companies[$index90] = new RetailCrm\Api\Model\Entity\CustomersCorporate\CustomerContactCompany();
if (isset($jsonData['history'][$index20]['customer']['mainCustomerContact']['customer']['companies'][$index90]['id'])) {
    $model->history[$index20]->customer->mainCustomerContact->customer->companies[$index90]->id = $jsonData['history'][$index20]['customer']['mainCustomerContact']['customer']['companies'][$index90]['id'];

}
if (isset($jsonData['history'][$index20]['customer']['mainCustomerContact']['customer']['companies'][$index90]['externalId'])) {
    $model->history[$index20]->customer->mainCustomerContact->customer->companies[$index90]->externalId = $jsonData['history'][$index20]['customer']['mainCustomerContact']['customer']['companies'][$index90]['externalId'];

}
if (isset($jsonData['history'][$index20]['customer']['mainCustomerContact']['customer']['companies'][$index90]['company'])) {
    
$model->history[$index20]->customer->mainCustomerContact->customer->companies[$index90]->company = new RetailCrm\Api\Model\Entity\CustomersCorporate\EntityWithExternalIdNameOutput();
if (isset($jsonData['history'][$index20]['customer']['mainCustomerContact']['customer']['companies'][$index90]['company']['id'])) {
    $model->history[$index20]->customer->mainCustomerContact->customer->companies[$index90]->company->id = $jsonData['history'][$index20]['customer']['mainCustomerContact']['customer']['companies'][$index90]['company']['id'];

}
if (isset($jsonData['history'][$index20]['customer']['mainCustomerContact']['customer']['companies'][$index90]['company']['externalId'])) {
    $model->history[$index20]->customer->mainCustomerContact->customer->companies[$index90]->company->externalId = $jsonData['history'][$index20]['customer']['mainCustomerContact']['customer']['companies'][$index90]['company']['externalId'];

}
if (isset($jsonData['history'][$index20]['customer']['mainCustomerContact']['customer']['companies'][$index90]['company']['name'])) {
    $model->history[$index20]->customer->mainCustomerContact->customer->companies[$index90]->company->name = $jsonData['history'][$index20]['customer']['mainCustomerContact']['customer']['companies'][$index90]['company']['name'];

}


}


}

}


}
if (isset($jsonData['history'][$index20]['customer']['mainCustomerContact']['companies'])) {
    $model->history[$index20]->customer->mainCustomerContact->companies = [];
foreach (array_keys($jsonData['history'][$index20]['customer']['mainCustomerContact']['companies']) as $index78) {
    
$model->history[$index20]->customer->mainCustomerContact->companies[$index78] = new RetailCrm\Api\Model\Entity\CustomersCorporate\CustomerContactCompany();
if (isset($jsonData['history'][$index20]['customer']['mainCustomerContact']['companies'][$index78]['id'])) {
    $model->history[$index20]->customer->mainCustomerContact->companies[$index78]->id = $jsonData['history'][$index20]['customer']['mainCustomerContact']['companies'][$index78]['id'];

}
if (isset($jsonData['history'][$index20]['customer']['mainCustomerContact']['companies'][$index78]['externalId'])) {
    $model->history[$index20]->customer->mainCustomerContact->companies[$index78]->externalId = $jsonData['history'][$index20]['customer']['mainCustomerContact']['companies'][$index78]['externalId'];

}
if (isset($jsonData['history'][$index20]['customer']['mainCustomerContact']['companies'][$index78]['company'])) {
    
$model->history[$index20]->customer->mainCustomerContact->companies[$index78]->company = new RetailCrm\Api\Model\Entity\CustomersCorporate\EntityWithExternalIdNameOutput();
if (isset($jsonData['history'][$index20]['customer']['mainCustomerContact']['companies'][$index78]['company']['id'])) {
    $model->history[$index20]->customer->mainCustomerContact->companies[$index78]->company->id = $jsonData['history'][$index20]['customer']['mainCustomerContact']['companies'][$index78]['company']['id'];

}
if (isset($jsonData['history'][$index20]['customer']['mainCustomerContact']['companies'][$index78]['company']['externalId'])) {
    $model->history[$index20]->customer->mainCustomerContact->companies[$index78]->company->externalId = $jsonData['history'][$index20]['customer']['mainCustomerContact']['companies'][$index78]['company']['externalId'];

}
if (isset($jsonData['history'][$index20]['customer']['mainCustomerContact']['companies'][$index78]['company']['name'])) {
    $model->history[$index20]->customer->mainCustomerContact->companies[$index78]->company->name = $jsonData['history'][$index20]['customer']['mainCustomerContact']['companies'][$index78]['company']['name'];

}


}


}

}


}
if (isset($jsonData['history'][$index20]['customer']['mainCompany'])) {
    
$model->history[$index20]->customer->mainCompany = new RetailCrm\Api\Model\Entity\CustomersCorporate\EntityWithExternalIdNameOutput();
if (isset($jsonData['history'][$index20]['customer']['mainCompany']['id'])) {
    $model->history[$index20]->customer->mainCompany->id = $jsonData['history'][$index20]['customer']['mainCompany']['id'];

}
if (isset($jsonData['history'][$index20]['customer']['mainCompany']['externalId'])) {
    $model->history[$index20]->customer->mainCompany->externalId = $jsonData['history'][$index20]['customer']['mainCompany']['externalId'];

}
if (isset($jsonData['history'][$index20]['customer']['mainCompany']['name'])) {
    $model->history[$index20]->customer->mainCompany->name = $jsonData['history'][$index20]['customer']['mainCompany']['name'];

}


}


}
if (isset($jsonData['history'][$index20]['address'])) {
    
$model->history[$index20]->address = new RetailCrm\Api\Model\Entity\Customers\CustomerAddress();
if (isset($jsonData['history'][$index20]['address']['id'])) {
    $model->history[$index20]->address->id = $jsonData['history'][$index20]['address']['id'];

}
if (isset($jsonData['history'][$index20]['address']['name'])) {
    $model->history[$index20]->address->name = $jsonData['history'][$index20]['address']['name'];

}
if (isset($jsonData['history'][$index20]['address']['isMain'])) {
    $model->history[$index20]->address->isMain = $jsonData['history'][$index20]['address']['isMain'];

}
if (isset($jsonData['history'][$index20]['address']['index'])) {
    $model->history[$index20]->address->index = $jsonData['history'][$index20]['address']['index'];

}
if (isset($jsonData['history'][$index20]['address']['countryIso'])) {
    $model->history[$index20]->address->countryIso = $jsonData['history'][$index20]['address']['countryIso'];

}
if (isset($jsonData['history'][$index20]['address']['region'])) {
    $model->history[$index20]->address->region = $jsonData['history'][$index20]['address']['region'];

}
if (isset($jsonData['history'][$index20]['address']['regionId'])) {
    $model->history[$index20]->address->regionId = $jsonData['history'][$index20]['address']['regionId'];

}
if (isset($jsonData['history'][$index20]['address']['city'])) {
    $model->history[$index20]->address->city = $jsonData['history'][$index20]['address']['city'];

}
if (isset($jsonData['history'][$index20]['address']['cityId'])) {
    $model->history[$index20]->address->cityId = $jsonData['history'][$index20]['address']['cityId'];

}
if (isset($jsonData['history'][$index20]['address']['cityType'])) {
    $model->history[$index20]->address->cityType = $jsonData['history'][$index20]['address']['cityType'];

}
if (isset($jsonData['history'][$index20]['address']['street'])) {
    $model->history[$index20]->address->street = $jsonData['history'][$index20]['address']['street'];

}
if (isset($jsonData['history'][$index20]['address']['streetId'])) {
    $model->history[$index20]->address->streetId = $jsonData['history'][$index20]['address']['streetId'];

}
if (isset($jsonData['history'][$index20]['address']['streetType'])) {
    $model->history[$index20]->address->streetType = $jsonData['history'][$index20]['address']['streetType'];

}
if (isset($jsonData['history'][$index20]['address']['building'])) {
    $model->history[$index20]->address->building = $jsonData['history'][$index20]['address']['building'];

}
if (isset($jsonData['history'][$index20]['address']['flat'])) {
    $model->history[$index20]->address->flat = $jsonData['history'][$index20]['address']['flat'];

}
if (isset($jsonData['history'][$index20]['address']['floor'])) {
    $model->history[$index20]->address->floor = $jsonData['history'][$index20]['address']['floor'];

}
if (isset($jsonData['history'][$index20]['address']['block'])) {
    $model->history[$index20]->address->block = $jsonData['history'][$index20]['address']['block'];

}
if (isset($jsonData['history'][$index20]['address']['house'])) {
    $model->history[$index20]->address->house = $jsonData['history'][$index20]['address']['house'];

}
if (isset($jsonData['history'][$index20]['address']['housing'])) {
    $model->history[$index20]->address->housing = $jsonData['history'][$index20]['address']['housing'];

}
if (isset($jsonData['history'][$index20]['address']['metro'])) {
    $model->history[$index20]->address->metro = $jsonData['history'][$index20]['address']['metro'];

}
if (isset($jsonData['history'][$index20]['address']['notes'])) {
    $model->history[$index20]->address->notes = $jsonData['history'][$index20]['address']['notes'];

}
if (isset($jsonData['history'][$index20]['address']['text'])) {
    $model->history[$index20]->address->text = $jsonData['history'][$index20]['address']['text'];

}
if (isset($jsonData['history'][$index20]['address']['externalId'])) {
    $model->history[$index20]->address->externalId = $jsonData['history'][$index20]['address']['externalId'];

}


}
if (isset($jsonData['history'][$index20]['combinedTo'])) {
    
$model->history[$index20]->combinedTo = new RetailCrm\Api\Model\Entity\CustomersCorporate\CustomerCorporate();
if (isset($jsonData['history'][$index20]['combinedTo']['type'])) {
    $model->history[$index20]->combinedTo->type = $jsonData['history'][$index20]['combinedTo']['type'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['id'])) {
    $model->history[$index20]->combinedTo->id = $jsonData['history'][$index20]['combinedTo']['id'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['externalId'])) {
    $model->history[$index20]->combinedTo->externalId = $jsonData['history'][$index20]['combinedTo']['externalId'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['nickName'])) {
    $model->history[$index20]->combinedTo->nickName = $jsonData['history'][$index20]['combinedTo']['nickName'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['mainAddress'])) {
    
$model->history[$index20]->combinedTo->mainAddress = new RetailCrm\Api\Model\Entity\CustomersCorporate\EntityWithExternalIdNameOutput();
if (isset($jsonData['history'][$index20]['combinedTo']['mainAddress']['id'])) {
    $model->history[$index20]->combinedTo->mainAddress->id = $jsonData['history'][$index20]['combinedTo']['mainAddress']['id'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['mainAddress']['externalId'])) {
    $model->history[$index20]->combinedTo->mainAddress->externalId = $jsonData['history'][$index20]['combinedTo']['mainAddress']['externalId'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['mainAddress']['name'])) {
    $model->history[$index20]->combinedTo->mainAddress->name = $jsonData['history'][$index20]['combinedTo']['mainAddress']['name'];

}


}
if (isset($jsonData['history'][$index20]['combinedTo']['createdAt'])) {
    $model->history[$index20]->combinedTo->createdAt = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['history'][$index20]['combinedTo']['createdAt']);

}
if (isset($jsonData['history'][$index20]['combinedTo']['managerId'])) {
    $model->history[$index20]->combinedTo->managerId = $jsonData['history'][$index20]['combinedTo']['managerId'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['source'])) {
    
$model->history[$index20]->combinedTo->source = new RetailCrm\Api\Model\Entity\Source();
if (isset($jsonData['history'][$index20]['combinedTo']['source']['source'])) {
    $model->history[$index20]->combinedTo->source->source = $jsonData['history'][$index20]['combinedTo']['source']['source'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['source']['medium'])) {
    $model->history[$index20]->combinedTo->source->medium = $jsonData['history'][$index20]['combinedTo']['source']['medium'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['source']['campaign'])) {
    $model->history[$index20]->combinedTo->source->campaign = $jsonData['history'][$index20]['combinedTo']['source']['campaign'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['source']['keyword'])) {
    $model->history[$index20]->combinedTo->source->keyword = $jsonData['history'][$index20]['combinedTo']['source']['keyword'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['source']['content'])) {
    $model->history[$index20]->combinedTo->source->content = $jsonData['history'][$index20]['combinedTo']['source']['content'];

}


}
if (isset($jsonData['history'][$index20]['combinedTo']['customerContacts'])) {
    $model->history[$index20]->combinedTo->customerContacts = [];
foreach (array_keys($jsonData['history'][$index20]['combinedTo']['customerContacts']) as $index64) {
    
$model->history[$index20]->combinedTo->customerContacts[$index64] = new RetailCrm\Api\Model\Entity\CustomersCorporate\CustomerContact();
if (isset($jsonData['history'][$index20]['combinedTo']['customerContacts'][$index64]['id'])) {
    $model->history[$index20]->combinedTo->customerContacts[$index64]->id = $jsonData['history'][$index20]['combinedTo']['customerContacts'][$index64]['id'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['customerContacts'][$index64]['isMain'])) {
    $model->history[$index20]->combinedTo->customerContacts[$index64]->isMain = $jsonData['history'][$index20]['combinedTo']['customerContacts'][$index64]['isMain'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['customerContacts'][$index64]['customer'])) {
    
$model->history[$index20]->combinedTo->customerContacts[$index64]->customer = new RetailCrm\Api\Model\Entity\CustomersCorporate\SerializedRelationAbstractCustomer();
if (isset($jsonData['history'][$index20]['combinedTo']['customerContacts'][$index64]['customer']['id'])) {
    $model->history[$index20]->combinedTo->customerContacts[$index64]->customer->id = $jsonData['history'][$index20]['combinedTo']['customerContacts'][$index64]['customer']['id'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['customerContacts'][$index64]['customer']['externalId'])) {
    $model->history[$index20]->combinedTo->customerContacts[$index64]->customer->externalId = $jsonData['history'][$index20]['combinedTo']['customerContacts'][$index64]['customer']['externalId'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['customerContacts'][$index64]['customer']['browserId'])) {
    $model->history[$index20]->combinedTo->customerContacts[$index64]->customer->browserId = $jsonData['history'][$index20]['combinedTo']['customerContacts'][$index64]['customer']['browserId'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['customerContacts'][$index64]['customer']['site'])) {
    $model->history[$index20]->combinedTo->customerContacts[$index64]->customer->site = $jsonData['history'][$index20]['combinedTo']['customerContacts'][$index64]['customer']['site'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['customerContacts'][$index64]['customer']['companies'])) {
    $model->history[$index20]->combinedTo->customerContacts[$index64]->customer->companies = [];
foreach (array_keys($jsonData['history'][$index20]['combinedTo']['customerContacts'][$index64]['customer']['companies']) as $index99) {
    
$model->history[$index20]->combinedTo->customerContacts[$index64]->customer->companies[$index99] = new RetailCrm\Api\Model\Entity\CustomersCorporate\CustomerContactCompany();
if (isset($jsonData['history'][$index20]['combinedTo']['customerContacts'][$index64]['customer']['companies'][$index99]['id'])) {
    $model->history[$index20]->combinedTo->customerContacts[$index64]->customer->companies[$index99]->id = $jsonData['history'][$index20]['combinedTo']['customerContacts'][$index64]['customer']['companies'][$index99]['id'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['customerContacts'][$index64]['customer']['companies'][$index99]['externalId'])) {
    $model->history[$index20]->combinedTo->customerContacts[$index64]->customer->companies[$index99]->externalId = $jsonData['history'][$index20]['combinedTo']['customerContacts'][$index64]['customer']['companies'][$index99]['externalId'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['customerContacts'][$index64]['customer']['companies'][$index99]['company'])) {
    
$model->history[$index20]->combinedTo->customerContacts[$index64]->customer->companies[$index99]->company = new RetailCrm\Api\Model\Entity\CustomersCorporate\EntityWithExternalIdNameOutput();
if (isset($jsonData['history'][$index20]['combinedTo']['customerContacts'][$index64]['customer']['companies'][$index99]['company']['id'])) {
    $model->history[$index20]->combinedTo->customerContacts[$index64]->customer->companies[$index99]->company->id = $jsonData['history'][$index20]['combinedTo']['customerContacts'][$index64]['customer']['companies'][$index99]['company']['id'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['customerContacts'][$index64]['customer']['companies'][$index99]['company']['externalId'])) {
    $model->history[$index20]->combinedTo->customerContacts[$index64]->customer->companies[$index99]->company->externalId = $jsonData['history'][$index20]['combinedTo']['customerContacts'][$index64]['customer']['companies'][$index99]['company']['externalId'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['customerContacts'][$index64]['customer']['companies'][$index99]['company']['name'])) {
    $model->history[$index20]->combinedTo->customerContacts[$index64]->customer->companies[$index99]->company->name = $jsonData['history'][$index20]['combinedTo']['customerContacts'][$index64]['customer']['companies'][$index99]['company']['name'];

}


}


}

}


}
if (isset($jsonData['history'][$index20]['combinedTo']['customerContacts'][$index64]['companies'])) {
    $model->history[$index20]->combinedTo->customerContacts[$index64]->companies = [];
foreach (array_keys($jsonData['history'][$index20]['combinedTo']['customerContacts'][$index64]['companies']) as $index87) {
    
$model->history[$index20]->combinedTo->customerContacts[$index64]->companies[$index87] = new RetailCrm\Api\Model\Entity\CustomersCorporate\CustomerContactCompany();
if (isset($jsonData['history'][$index20]['combinedTo']['customerContacts'][$index64]['companies'][$index87]['id'])) {
    $model->history[$index20]->combinedTo->customerContacts[$index64]->companies[$index87]->id = $jsonData['history'][$index20]['combinedTo']['customerContacts'][$index64]['companies'][$index87]['id'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['customerContacts'][$index64]['companies'][$index87]['externalId'])) {
    $model->history[$index20]->combinedTo->customerContacts[$index64]->companies[$index87]->externalId = $jsonData['history'][$index20]['combinedTo']['customerContacts'][$index64]['companies'][$index87]['externalId'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['customerContacts'][$index64]['companies'][$index87]['company'])) {
    
$model->history[$index20]->combinedTo->customerContacts[$index64]->companies[$index87]->company = new RetailCrm\Api\Model\Entity\CustomersCorporate\EntityWithExternalIdNameOutput();
if (isset($jsonData['history'][$index20]['combinedTo']['customerContacts'][$index64]['companies'][$index87]['company']['id'])) {
    $model->history[$index20]->combinedTo->customerContacts[$index64]->companies[$index87]->company->id = $jsonData['history'][$index20]['combinedTo']['customerContacts'][$index64]['companies'][$index87]['company']['id'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['customerContacts'][$index64]['companies'][$index87]['company']['externalId'])) {
    $model->history[$index20]->combinedTo->customerContacts[$index64]->companies[$index87]->company->externalId = $jsonData['history'][$index20]['combinedTo']['customerContacts'][$index64]['companies'][$index87]['company']['externalId'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['customerContacts'][$index64]['companies'][$index87]['company']['name'])) {
    $model->history[$index20]->combinedTo->customerContacts[$index64]->companies[$index87]->company->name = $jsonData['history'][$index20]['combinedTo']['customerContacts'][$index64]['companies'][$index87]['company']['name'];

}


}


}

}


}

}
if (isset($jsonData['history'][$index20]['combinedTo']['companies'])) {
    $model->history[$index20]->combinedTo->companies = [];
foreach (array_keys($jsonData['history'][$index20]['combinedTo']['companies']) as $index57) {
    
$model->history[$index20]->combinedTo->companies[$index57] = new RetailCrm\Api\Model\Entity\CustomersCorporate\Company();
if (isset($jsonData['history'][$index20]['combinedTo']['companies'][$index57]['id'])) {
    $model->history[$index20]->combinedTo->companies[$index57]->id = $jsonData['history'][$index20]['combinedTo']['companies'][$index57]['id'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['companies'][$index57]['isMain'])) {
    $model->history[$index20]->combinedTo->companies[$index57]->isMain = $jsonData['history'][$index20]['combinedTo']['companies'][$index57]['isMain'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['companies'][$index57]['externalId'])) {
    $model->history[$index20]->combinedTo->companies[$index57]->externalId = $jsonData['history'][$index20]['combinedTo']['companies'][$index57]['externalId'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['companies'][$index57]['active'])) {
    $model->history[$index20]->combinedTo->companies[$index57]->active = $jsonData['history'][$index20]['combinedTo']['companies'][$index57]['active'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['companies'][$index57]['name'])) {
    $model->history[$index20]->combinedTo->companies[$index57]->name = $jsonData['history'][$index20]['combinedTo']['companies'][$index57]['name'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['companies'][$index57]['brand'])) {
    $model->history[$index20]->combinedTo->companies[$index57]->brand = $jsonData['history'][$index20]['combinedTo']['companies'][$index57]['brand'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['companies'][$index57]['site'])) {
    $model->history[$index20]->combinedTo->companies[$index57]->site = $jsonData['history'][$index20]['combinedTo']['companies'][$index57]['site'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['companies'][$index57]['createdAt'])) {
    $model->history[$index20]->combinedTo->companies[$index57]->createdAt = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['history'][$index20]['combinedTo']['companies'][$index57]['createdAt']);

}
if (isset($jsonData['history'][$index20]['combinedTo']['companies'][$index57]['customer'])) {
    
$model->history[$index20]->combinedTo->companies[$index57]->customer = new RetailCrm\Api\Model\Entity\CustomersCorporate\SerializedEntityCustomer();
if (isset($jsonData['history'][$index20]['combinedTo']['companies'][$index57]['customer']['site'])) {
    $model->history[$index20]->combinedTo->companies[$index57]->customer->site = $jsonData['history'][$index20]['combinedTo']['companies'][$index57]['customer']['site'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['companies'][$index57]['customer']['id'])) {
    $model->history[$index20]->combinedTo->companies[$index57]->customer->id = $jsonData['history'][$index20]['combinedTo']['companies'][$index57]['customer']['id'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['companies'][$index57]['customer']['externalId'])) {
    $model->history[$index20]->combinedTo->companies[$index57]->customer->externalId = $jsonData['history'][$index20]['combinedTo']['companies'][$index57]['customer']['externalId'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['companies'][$index57]['customer']['type'])) {
    $model->history[$index20]->combinedTo->companies[$index57]->customer->type = $jsonData['history'][$index20]['combinedTo']['companies'][$index57]['customer']['type'];

}


}
if (isset($jsonData['history'][$index20]['combinedTo']['companies'][$index57]['contragent'])) {
    
$model->history[$index20]->combinedTo->companies[$index57]->contragent = new RetailCrm\Api\Model\Entity\Customers\CustomerContragent();
if (isset($jsonData['history'][$index20]['combinedTo']['companies'][$index57]['contragent']['contragentType'])) {
    $model->history[$index20]->combinedTo->companies[$index57]->contragent->contragentType = $jsonData['history'][$index20]['combinedTo']['companies'][$index57]['contragent']['contragentType'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['companies'][$index57]['contragent']['legalName'])) {
    $model->history[$index20]->combinedTo->companies[$index57]->contragent->legalName = $jsonData['history'][$index20]['combinedTo']['companies'][$index57]['contragent']['legalName'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['companies'][$index57]['contragent']['legalAddress'])) {
    $model->history[$index20]->combinedTo->companies[$index57]->contragent->legalAddress = $jsonData['history'][$index20]['combinedTo']['companies'][$index57]['contragent']['legalAddress'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['companies'][$index57]['contragent']['INN'])) {
    $model->history[$index20]->combinedTo->companies[$index57]->contragent->INN = $jsonData['history'][$index20]['combinedTo']['companies'][$index57]['contragent']['INN'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['companies'][$index57]['contragent']['OKPO'])) {
    $model->history[$index20]->combinedTo->companies[$index57]->contragent->OKPO = $jsonData['history'][$index20]['combinedTo']['companies'][$index57]['contragent']['OKPO'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['companies'][$index57]['contragent']['KPP'])) {
    $model->history[$index20]->combinedTo->companies[$index57]->contragent->KPP = $jsonData['history'][$index20]['combinedTo']['companies'][$index57]['contragent']['KPP'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['companies'][$index57]['contragent']['OGRN'])) {
    $model->history[$index20]->combinedTo->companies[$index57]->contragent->OGRN = $jsonData['history'][$index20]['combinedTo']['companies'][$index57]['contragent']['OGRN'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['companies'][$index57]['contragent']['OGRNIP'])) {
    $model->history[$index20]->combinedTo->companies[$index57]->contragent->OGRNIP = $jsonData['history'][$index20]['combinedTo']['companies'][$index57]['contragent']['OGRNIP'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['companies'][$index57]['contragent']['certificateNumber'])) {
    $model->history[$index20]->combinedTo->companies[$index57]->contragent->certificateNumber = $jsonData['history'][$index20]['combinedTo']['companies'][$index57]['contragent']['certificateNumber'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['companies'][$index57]['contragent']['certificateDate'])) {
    $model->history[$index20]->combinedTo->companies[$index57]->contragent->certificateDate = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['history'][$index20]['combinedTo']['companies'][$index57]['contragent']['certificateDate']);

}
if (isset($jsonData['history'][$index20]['combinedTo']['companies'][$index57]['contragent']['BIK'])) {
    $model->history[$index20]->combinedTo->companies[$index57]->contragent->BIK = $jsonData['history'][$index20]['combinedTo']['companies'][$index57]['contragent']['BIK'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['companies'][$index57]['contragent']['bank'])) {
    $model->history[$index20]->combinedTo->companies[$index57]->contragent->bank = $jsonData['history'][$index20]['combinedTo']['companies'][$index57]['contragent']['bank'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['companies'][$index57]['contragent']['bankAddress'])) {
    $model->history[$index20]->combinedTo->companies[$index57]->contragent->bankAddress = $jsonData['history'][$index20]['combinedTo']['companies'][$index57]['contragent']['bankAddress'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['companies'][$index57]['contragent']['corrAccount'])) {
    $model->history[$index20]->combinedTo->companies[$index57]->contragent->corrAccount = $jsonData['history'][$index20]['combinedTo']['companies'][$index57]['contragent']['corrAccount'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['companies'][$index57]['contragent']['bankAccount'])) {
    $model->history[$index20]->combinedTo->companies[$index57]->contragent->bankAccount = $jsonData['history'][$index20]['combinedTo']['companies'][$index57]['contragent']['bankAccount'];

}


}
if (isset($jsonData['history'][$index20]['combinedTo']['companies'][$index57]['address'])) {
    
$model->history[$index20]->combinedTo->companies[$index57]->address = new RetailCrm\Api\Model\Entity\Customers\CustomerAddress();
if (isset($jsonData['history'][$index20]['combinedTo']['companies'][$index57]['address']['id'])) {
    $model->history[$index20]->combinedTo->companies[$index57]->address->id = $jsonData['history'][$index20]['combinedTo']['companies'][$index57]['address']['id'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['companies'][$index57]['address']['name'])) {
    $model->history[$index20]->combinedTo->companies[$index57]->address->name = $jsonData['history'][$index20]['combinedTo']['companies'][$index57]['address']['name'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['companies'][$index57]['address']['isMain'])) {
    $model->history[$index20]->combinedTo->companies[$index57]->address->isMain = $jsonData['history'][$index20]['combinedTo']['companies'][$index57]['address']['isMain'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['companies'][$index57]['address']['index'])) {
    $model->history[$index20]->combinedTo->companies[$index57]->address->index = $jsonData['history'][$index20]['combinedTo']['companies'][$index57]['address']['index'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['companies'][$index57]['address']['countryIso'])) {
    $model->history[$index20]->combinedTo->companies[$index57]->address->countryIso = $jsonData['history'][$index20]['combinedTo']['companies'][$index57]['address']['countryIso'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['companies'][$index57]['address']['region'])) {
    $model->history[$index20]->combinedTo->companies[$index57]->address->region = $jsonData['history'][$index20]['combinedTo']['companies'][$index57]['address']['region'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['companies'][$index57]['address']['regionId'])) {
    $model->history[$index20]->combinedTo->companies[$index57]->address->regionId = $jsonData['history'][$index20]['combinedTo']['companies'][$index57]['address']['regionId'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['companies'][$index57]['address']['city'])) {
    $model->history[$index20]->combinedTo->companies[$index57]->address->city = $jsonData['history'][$index20]['combinedTo']['companies'][$index57]['address']['city'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['companies'][$index57]['address']['cityId'])) {
    $model->history[$index20]->combinedTo->companies[$index57]->address->cityId = $jsonData['history'][$index20]['combinedTo']['companies'][$index57]['address']['cityId'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['companies'][$index57]['address']['cityType'])) {
    $model->history[$index20]->combinedTo->companies[$index57]->address->cityType = $jsonData['history'][$index20]['combinedTo']['companies'][$index57]['address']['cityType'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['companies'][$index57]['address']['street'])) {
    $model->history[$index20]->combinedTo->companies[$index57]->address->street = $jsonData['history'][$index20]['combinedTo']['companies'][$index57]['address']['street'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['companies'][$index57]['address']['streetId'])) {
    $model->history[$index20]->combinedTo->companies[$index57]->address->streetId = $jsonData['history'][$index20]['combinedTo']['companies'][$index57]['address']['streetId'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['companies'][$index57]['address']['streetType'])) {
    $model->history[$index20]->combinedTo->companies[$index57]->address->streetType = $jsonData['history'][$index20]['combinedTo']['companies'][$index57]['address']['streetType'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['companies'][$index57]['address']['building'])) {
    $model->history[$index20]->combinedTo->companies[$index57]->address->building = $jsonData['history'][$index20]['combinedTo']['companies'][$index57]['address']['building'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['companies'][$index57]['address']['flat'])) {
    $model->history[$index20]->combinedTo->companies[$index57]->address->flat = $jsonData['history'][$index20]['combinedTo']['companies'][$index57]['address']['flat'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['companies'][$index57]['address']['floor'])) {
    $model->history[$index20]->combinedTo->companies[$index57]->address->floor = $jsonData['history'][$index20]['combinedTo']['companies'][$index57]['address']['floor'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['companies'][$index57]['address']['block'])) {
    $model->history[$index20]->combinedTo->companies[$index57]->address->block = $jsonData['history'][$index20]['combinedTo']['companies'][$index57]['address']['block'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['companies'][$index57]['address']['house'])) {
    $model->history[$index20]->combinedTo->companies[$index57]->address->house = $jsonData['history'][$index20]['combinedTo']['companies'][$index57]['address']['house'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['companies'][$index57]['address']['housing'])) {
    $model->history[$index20]->combinedTo->companies[$index57]->address->housing = $jsonData['history'][$index20]['combinedTo']['companies'][$index57]['address']['housing'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['companies'][$index57]['address']['metro'])) {
    $model->history[$index20]->combinedTo->companies[$index57]->address->metro = $jsonData['history'][$index20]['combinedTo']['companies'][$index57]['address']['metro'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['companies'][$index57]['address']['notes'])) {
    $model->history[$index20]->combinedTo->companies[$index57]->address->notes = $jsonData['history'][$index20]['combinedTo']['companies'][$index57]['address']['notes'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['companies'][$index57]['address']['text'])) {
    $model->history[$index20]->combinedTo->companies[$index57]->address->text = $jsonData['history'][$index20]['combinedTo']['companies'][$index57]['address']['text'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['companies'][$index57]['address']['externalId'])) {
    $model->history[$index20]->combinedTo->companies[$index57]->address->externalId = $jsonData['history'][$index20]['combinedTo']['companies'][$index57]['address']['externalId'];

}


}
if (isset($jsonData['history'][$index20]['combinedTo']['companies'][$index57]['customFields'])) {
    $model->history[$index20]->combinedTo->companies[$index57]->customFields = [];
foreach (array_keys($jsonData['history'][$index20]['combinedTo']['companies'][$index57]['customFields']) as $index83) {
    $model->history[$index20]->combinedTo->companies[$index57]->customFields[$index83] = $jsonData['history'][$index20]['combinedTo']['companies'][$index57]['customFields'][$index83];

}

}
if (isset($jsonData['history'][$index20]['combinedTo']['companies'][$index57]['marginSumm'])) {
    $model->history[$index20]->combinedTo->companies[$index57]->marginSumm = (float) $jsonData['history'][$index20]['combinedTo']['companies'][$index57]['marginSumm'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['companies'][$index57]['totalSumm'])) {
    $model->history[$index20]->combinedTo->companies[$index57]->totalSumm = (float) $jsonData['history'][$index20]['combinedTo']['companies'][$index57]['totalSumm'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['companies'][$index57]['averageSumm'])) {
    $model->history[$index20]->combinedTo->companies[$index57]->averageSumm = (float) $jsonData['history'][$index20]['combinedTo']['companies'][$index57]['averageSumm'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['companies'][$index57]['ordersCount'])) {
    $model->history[$index20]->combinedTo->companies[$index57]->ordersCount = $jsonData['history'][$index20]['combinedTo']['companies'][$index57]['ordersCount'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['companies'][$index57]['costSumm'])) {
    $model->history[$index20]->combinedTo->companies[$index57]->costSumm = (float) $jsonData['history'][$index20]['combinedTo']['companies'][$index57]['costSumm'];

}


}

}
if (isset($jsonData['history'][$index20]['combinedTo']['addresses'])) {
    $model->history[$index20]->combinedTo->addresses = [];
foreach (array_keys($jsonData['history'][$index20]['combinedTo']['addresses']) as $index57) {
    
$model->history[$index20]->combinedTo->addresses[$index57] = new RetailCrm\Api\Model\Entity\Customers\CustomerAddress();
if (isset($jsonData['history'][$index20]['combinedTo']['addresses'][$index57]['id'])) {
    $model->history[$index20]->combinedTo->addresses[$index57]->id = $jsonData['history'][$index20]['combinedTo']['addresses'][$index57]['id'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['addresses'][$index57]['name'])) {
    $model->history[$index20]->combinedTo->addresses[$index57]->name = $jsonData['history'][$index20]['combinedTo']['addresses'][$index57]['name'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['addresses'][$index57]['isMain'])) {
    $model->history[$index20]->combinedTo->addresses[$index57]->isMain = $jsonData['history'][$index20]['combinedTo']['addresses'][$index57]['isMain'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['addresses'][$index57]['index'])) {
    $model->history[$index20]->combinedTo->addresses[$index57]->index = $jsonData['history'][$index20]['combinedTo']['addresses'][$index57]['index'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['addresses'][$index57]['countryIso'])) {
    $model->history[$index20]->combinedTo->addresses[$index57]->countryIso = $jsonData['history'][$index20]['combinedTo']['addresses'][$index57]['countryIso'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['addresses'][$index57]['region'])) {
    $model->history[$index20]->combinedTo->addresses[$index57]->region = $jsonData['history'][$index20]['combinedTo']['addresses'][$index57]['region'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['addresses'][$index57]['regionId'])) {
    $model->history[$index20]->combinedTo->addresses[$index57]->regionId = $jsonData['history'][$index20]['combinedTo']['addresses'][$index57]['regionId'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['addresses'][$index57]['city'])) {
    $model->history[$index20]->combinedTo->addresses[$index57]->city = $jsonData['history'][$index20]['combinedTo']['addresses'][$index57]['city'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['addresses'][$index57]['cityId'])) {
    $model->history[$index20]->combinedTo->addresses[$index57]->cityId = $jsonData['history'][$index20]['combinedTo']['addresses'][$index57]['cityId'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['addresses'][$index57]['cityType'])) {
    $model->history[$index20]->combinedTo->addresses[$index57]->cityType = $jsonData['history'][$index20]['combinedTo']['addresses'][$index57]['cityType'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['addresses'][$index57]['street'])) {
    $model->history[$index20]->combinedTo->addresses[$index57]->street = $jsonData['history'][$index20]['combinedTo']['addresses'][$index57]['street'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['addresses'][$index57]['streetId'])) {
    $model->history[$index20]->combinedTo->addresses[$index57]->streetId = $jsonData['history'][$index20]['combinedTo']['addresses'][$index57]['streetId'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['addresses'][$index57]['streetType'])) {
    $model->history[$index20]->combinedTo->addresses[$index57]->streetType = $jsonData['history'][$index20]['combinedTo']['addresses'][$index57]['streetType'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['addresses'][$index57]['building'])) {
    $model->history[$index20]->combinedTo->addresses[$index57]->building = $jsonData['history'][$index20]['combinedTo']['addresses'][$index57]['building'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['addresses'][$index57]['flat'])) {
    $model->history[$index20]->combinedTo->addresses[$index57]->flat = $jsonData['history'][$index20]['combinedTo']['addresses'][$index57]['flat'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['addresses'][$index57]['floor'])) {
    $model->history[$index20]->combinedTo->addresses[$index57]->floor = $jsonData['history'][$index20]['combinedTo']['addresses'][$index57]['floor'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['addresses'][$index57]['block'])) {
    $model->history[$index20]->combinedTo->addresses[$index57]->block = $jsonData['history'][$index20]['combinedTo']['addresses'][$index57]['block'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['addresses'][$index57]['house'])) {
    $model->history[$index20]->combinedTo->addresses[$index57]->house = $jsonData['history'][$index20]['combinedTo']['addresses'][$index57]['house'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['addresses'][$index57]['housing'])) {
    $model->history[$index20]->combinedTo->addresses[$index57]->housing = $jsonData['history'][$index20]['combinedTo']['addresses'][$index57]['housing'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['addresses'][$index57]['metro'])) {
    $model->history[$index20]->combinedTo->addresses[$index57]->metro = $jsonData['history'][$index20]['combinedTo']['addresses'][$index57]['metro'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['addresses'][$index57]['notes'])) {
    $model->history[$index20]->combinedTo->addresses[$index57]->notes = $jsonData['history'][$index20]['combinedTo']['addresses'][$index57]['notes'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['addresses'][$index57]['text'])) {
    $model->history[$index20]->combinedTo->addresses[$index57]->text = $jsonData['history'][$index20]['combinedTo']['addresses'][$index57]['text'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['addresses'][$index57]['externalId'])) {
    $model->history[$index20]->combinedTo->addresses[$index57]->externalId = $jsonData['history'][$index20]['combinedTo']['addresses'][$index57]['externalId'];

}


}

}
if (isset($jsonData['history'][$index20]['combinedTo']['vip'])) {
    $model->history[$index20]->combinedTo->vip = $jsonData['history'][$index20]['combinedTo']['vip'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['bad'])) {
    $model->history[$index20]->combinedTo->bad = $jsonData['history'][$index20]['combinedTo']['bad'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['site'])) {
    $model->history[$index20]->combinedTo->site = $jsonData['history'][$index20]['combinedTo']['site'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['tags'])) {
    $model->history[$index20]->combinedTo->tags = [];
foreach (array_keys($jsonData['history'][$index20]['combinedTo']['tags']) as $index52) {
    
$model->history[$index20]->combinedTo->tags[$index52] = new RetailCrm\Api\Model\Entity\Customers\CustomerTag();
if (isset($jsonData['history'][$index20]['combinedTo']['tags'][$index52]['name'])) {
    $model->history[$index20]->combinedTo->tags[$index52]->name = $jsonData['history'][$index20]['combinedTo']['tags'][$index52]['name'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['tags'][$index52]['color'])) {
    $model->history[$index20]->combinedTo->tags[$index52]->color = $jsonData['history'][$index20]['combinedTo']['tags'][$index52]['color'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['tags'][$index52]['attached'])) {
    $model->history[$index20]->combinedTo->tags[$index52]->attached = $jsonData['history'][$index20]['combinedTo']['tags'][$index52]['attached'];

}


}

}
if (isset($jsonData['history'][$index20]['combinedTo']['avgMarginSumm'])) {
    $model->history[$index20]->combinedTo->avgMarginSumm = (float) $jsonData['history'][$index20]['combinedTo']['avgMarginSumm'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['marginSumm'])) {
    $model->history[$index20]->combinedTo->marginSumm = (float) $jsonData['history'][$index20]['combinedTo']['marginSumm'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['totalSumm'])) {
    $model->history[$index20]->combinedTo->totalSumm = (float) $jsonData['history'][$index20]['combinedTo']['totalSumm'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['averageSumm'])) {
    $model->history[$index20]->combinedTo->averageSumm = (float) $jsonData['history'][$index20]['combinedTo']['averageSumm'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['ordersCount'])) {
    $model->history[$index20]->combinedTo->ordersCount = $jsonData['history'][$index20]['combinedTo']['ordersCount'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['costSumm'])) {
    $model->history[$index20]->combinedTo->costSumm = (float) $jsonData['history'][$index20]['combinedTo']['costSumm'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['customFields'])) {
    $model->history[$index20]->combinedTo->customFields = [];
foreach (array_keys($jsonData['history'][$index20]['combinedTo']['customFields']) as $index60) {
    $model->history[$index20]->combinedTo->customFields[$index60] = $jsonData['history'][$index20]['combinedTo']['customFields'][$index60];

}

}
if (isset($jsonData['history'][$index20]['combinedTo']['personalDiscount'])) {
    $model->history[$index20]->combinedTo->personalDiscount = (float) $jsonData['history'][$index20]['combinedTo']['personalDiscount'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['cumulativeDiscount'])) {
    $model->history[$index20]->combinedTo->cumulativeDiscount = (float) $jsonData['history'][$index20]['combinedTo']['cumulativeDiscount'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['discountCardNumber'])) {
    $model->history[$index20]->combinedTo->discountCardNumber = $jsonData['history'][$index20]['combinedTo']['discountCardNumber'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['firstClientId'])) {
    $model->history[$index20]->combinedTo->firstClientId = $jsonData['history'][$index20]['combinedTo']['firstClientId'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['lastClientId'])) {
    $model->history[$index20]->combinedTo->lastClientId = $jsonData['history'][$index20]['combinedTo']['lastClientId'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['mainCustomerContact'])) {
    
$model->history[$index20]->combinedTo->mainCustomerContact = new RetailCrm\Api\Model\Entity\CustomersCorporate\CustomerContact();
if (isset($jsonData['history'][$index20]['combinedTo']['mainCustomerContact']['id'])) {
    $model->history[$index20]->combinedTo->mainCustomerContact->id = $jsonData['history'][$index20]['combinedTo']['mainCustomerContact']['id'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['mainCustomerContact']['isMain'])) {
    $model->history[$index20]->combinedTo->mainCustomerContact->isMain = $jsonData['history'][$index20]['combinedTo']['mainCustomerContact']['isMain'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['mainCustomerContact']['customer'])) {
    
$model->history[$index20]->combinedTo->mainCustomerContact->customer = new RetailCrm\Api\Model\Entity\CustomersCorporate\SerializedRelationAbstractCustomer();
if (isset($jsonData['history'][$index20]['combinedTo']['mainCustomerContact']['customer']['id'])) {
    $model->history[$index20]->combinedTo->mainCustomerContact->customer->id = $jsonData['history'][$index20]['combinedTo']['mainCustomerContact']['customer']['id'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['mainCustomerContact']['customer']['externalId'])) {
    $model->history[$index20]->combinedTo->mainCustomerContact->customer->externalId = $jsonData['history'][$index20]['combinedTo']['mainCustomerContact']['customer']['externalId'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['mainCustomerContact']['customer']['browserId'])) {
    $model->history[$index20]->combinedTo->mainCustomerContact->customer->browserId = $jsonData['history'][$index20]['combinedTo']['mainCustomerContact']['customer']['browserId'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['mainCustomerContact']['customer']['site'])) {
    $model->history[$index20]->combinedTo->mainCustomerContact->customer->site = $jsonData['history'][$index20]['combinedTo']['mainCustomerContact']['customer']['site'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['mainCustomerContact']['customer']['companies'])) {
    $model->history[$index20]->combinedTo->mainCustomerContact->customer->companies = [];
foreach (array_keys($jsonData['history'][$index20]['combinedTo']['mainCustomerContact']['customer']['companies']) as $index92) {
    
$model->history[$index20]->combinedTo->mainCustomerContact->customer->companies[$index92] = new RetailCrm\Api\Model\Entity\CustomersCorporate\CustomerContactCompany();
if (isset($jsonData['history'][$index20]['combinedTo']['mainCustomerContact']['customer']['companies'][$index92]['id'])) {
    $model->history[$index20]->combinedTo->mainCustomerContact->customer->companies[$index92]->id = $jsonData['history'][$index20]['combinedTo']['mainCustomerContact']['customer']['companies'][$index92]['id'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['mainCustomerContact']['customer']['companies'][$index92]['externalId'])) {
    $model->history[$index20]->combinedTo->mainCustomerContact->customer->companies[$index92]->externalId = $jsonData['history'][$index20]['combinedTo']['mainCustomerContact']['customer']['companies'][$index92]['externalId'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['mainCustomerContact']['customer']['companies'][$index92]['company'])) {
    
$model->history[$index20]->combinedTo->mainCustomerContact->customer->companies[$index92]->company = new RetailCrm\Api\Model\Entity\CustomersCorporate\EntityWithExternalIdNameOutput();
if (isset($jsonData['history'][$index20]['combinedTo']['mainCustomerContact']['customer']['companies'][$index92]['company']['id'])) {
    $model->history[$index20]->combinedTo->mainCustomerContact->customer->companies[$index92]->company->id = $jsonData['history'][$index20]['combinedTo']['mainCustomerContact']['customer']['companies'][$index92]['company']['id'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['mainCustomerContact']['customer']['companies'][$index92]['company']['externalId'])) {
    $model->history[$index20]->combinedTo->mainCustomerContact->customer->companies[$index92]->company->externalId = $jsonData['history'][$index20]['combinedTo']['mainCustomerContact']['customer']['companies'][$index92]['company']['externalId'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['mainCustomerContact']['customer']['companies'][$index92]['company']['name'])) {
    $model->history[$index20]->combinedTo->mainCustomerContact->customer->companies[$index92]->company->name = $jsonData['history'][$index20]['combinedTo']['mainCustomerContact']['customer']['companies'][$index92]['company']['name'];

}


}


}

}


}
if (isset($jsonData['history'][$index20]['combinedTo']['mainCustomerContact']['companies'])) {
    $model->history[$index20]->combinedTo->mainCustomerContact->companies = [];
foreach (array_keys($jsonData['history'][$index20]['combinedTo']['mainCustomerContact']['companies']) as $index80) {
    
$model->history[$index20]->combinedTo->mainCustomerContact->companies[$index80] = new RetailCrm\Api\Model\Entity\CustomersCorporate\CustomerContactCompany();
if (isset($jsonData['history'][$index20]['combinedTo']['mainCustomerContact']['companies'][$index80]['id'])) {
    $model->history[$index20]->combinedTo->mainCustomerContact->companies[$index80]->id = $jsonData['history'][$index20]['combinedTo']['mainCustomerContact']['companies'][$index80]['id'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['mainCustomerContact']['companies'][$index80]['externalId'])) {
    $model->history[$index20]->combinedTo->mainCustomerContact->companies[$index80]->externalId = $jsonData['history'][$index20]['combinedTo']['mainCustomerContact']['companies'][$index80]['externalId'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['mainCustomerContact']['companies'][$index80]['company'])) {
    
$model->history[$index20]->combinedTo->mainCustomerContact->companies[$index80]->company = new RetailCrm\Api\Model\Entity\CustomersCorporate\EntityWithExternalIdNameOutput();
if (isset($jsonData['history'][$index20]['combinedTo']['mainCustomerContact']['companies'][$index80]['company']['id'])) {
    $model->history[$index20]->combinedTo->mainCustomerContact->companies[$index80]->company->id = $jsonData['history'][$index20]['combinedTo']['mainCustomerContact']['companies'][$index80]['company']['id'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['mainCustomerContact']['companies'][$index80]['company']['externalId'])) {
    $model->history[$index20]->combinedTo->mainCustomerContact->companies[$index80]->company->externalId = $jsonData['history'][$index20]['combinedTo']['mainCustomerContact']['companies'][$index80]['company']['externalId'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['mainCustomerContact']['companies'][$index80]['company']['name'])) {
    $model->history[$index20]->combinedTo->mainCustomerContact->companies[$index80]->company->name = $jsonData['history'][$index20]['combinedTo']['mainCustomerContact']['companies'][$index80]['company']['name'];

}


}


}

}


}
if (isset($jsonData['history'][$index20]['combinedTo']['mainCompany'])) {
    
$model->history[$index20]->combinedTo->mainCompany = new RetailCrm\Api\Model\Entity\CustomersCorporate\EntityWithExternalIdNameOutput();
if (isset($jsonData['history'][$index20]['combinedTo']['mainCompany']['id'])) {
    $model->history[$index20]->combinedTo->mainCompany->id = $jsonData['history'][$index20]['combinedTo']['mainCompany']['id'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['mainCompany']['externalId'])) {
    $model->history[$index20]->combinedTo->mainCompany->externalId = $jsonData['history'][$index20]['combinedTo']['mainCompany']['externalId'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['mainCompany']['name'])) {
    $model->history[$index20]->combinedTo->mainCompany->name = $jsonData['history'][$index20]['combinedTo']['mainCompany']['name'];

}


}


}
if (isset($jsonData['history'][$index20]['customerContact'])) {
    
$model->history[$index20]->customerContact = new RetailCrm\Api\Model\Entity\CustomersCorporate\CustomerContact();
if (isset($jsonData['history'][$index20]['customerContact']['id'])) {
    $model->history[$index20]->customerContact->id = $jsonData['history'][$index20]['customerContact']['id'];

}
if (isset($jsonData['history'][$index20]['customerContact']['isMain'])) {
    $model->history[$index20]->customerContact->isMain = $jsonData['history'][$index20]['customerContact']['isMain'];

}
if (isset($jsonData['history'][$index20]['customerContact']['customer'])) {
    
$model->history[$index20]->customerContact->customer = new RetailCrm\Api\Model\Entity\CustomersCorporate\SerializedRelationAbstractCustomer();
if (isset($jsonData['history'][$index20]['customerContact']['customer']['id'])) {
    $model->history[$index20]->customerContact->customer->id = $jsonData['history'][$index20]['customerContact']['customer']['id'];

}
if (isset($jsonData['history'][$index20]['customerContact']['customer']['externalId'])) {
    $model->history[$index20]->customerContact->customer->externalId = $jsonData['history'][$index20]['customerContact']['customer']['externalId'];

}
if (isset($jsonData['history'][$index20]['customerContact']['customer']['browserId'])) {
    $model->history[$index20]->customerContact->customer->browserId = $jsonData['history'][$index20]['customerContact']['customer']['browserId'];

}
if (isset($jsonData['history'][$index20]['customerContact']['customer']['site'])) {
    $model->history[$index20]->customerContact->customer->site = $jsonData['history'][$index20]['customerContact']['customer']['site'];

}
if (isset($jsonData['history'][$index20]['customerContact']['customer']['companies'])) {
    $model->history[$index20]->customerContact->customer->companies = [];
foreach (array_keys($jsonData['history'][$index20]['customerContact']['customer']['companies']) as $index74) {
    
$model->history[$index20]->customerContact->customer->companies[$index74] = new RetailCrm\Api\Model\Entity\CustomersCorporate\CustomerContactCompany();
if (isset($jsonData['history'][$index20]['customerContact']['customer']['companies'][$index74]['id'])) {
    $model->history[$index20]->customerContact->customer->companies[$index74]->id = $jsonData['history'][$index20]['customerContact']['customer']['companies'][$index74]['id'];

}
if (isset($jsonData['history'][$index20]['customerContact']['customer']['companies'][$index74]['externalId'])) {
    $model->history[$index20]->customerContact->customer->companies[$index74]->externalId = $jsonData['history'][$index20]['customerContact']['customer']['companies'][$index74]['externalId'];

}
if (isset($jsonData['history'][$index20]['customerContact']['customer']['companies'][$index74]['company'])) {
    
$model->history[$index20]->customerContact->customer->companies[$index74]->company = new RetailCrm\Api\Model\Entity\CustomersCorporate\EntityWithExternalIdNameOutput();
if (isset($jsonData['history'][$index20]['customerContact']['customer']['companies'][$index74]['company']['id'])) {
    $model->history[$index20]->customerContact->customer->companies[$index74]->company->id = $jsonData['history'][$index20]['customerContact']['customer']['companies'][$index74]['company']['id'];

}
if (isset($jsonData['history'][$index20]['customerContact']['customer']['companies'][$index74]['company']['externalId'])) {
    $model->history[$index20]->customerContact->customer->companies[$index74]->company->externalId = $jsonData['history'][$index20]['customerContact']['customer']['companies'][$index74]['company']['externalId'];

}
if (isset($jsonData['history'][$index20]['customerContact']['customer']['companies'][$index74]['company']['name'])) {
    $model->history[$index20]->customerContact->customer->companies[$index74]->company->name = $jsonData['history'][$index20]['customerContact']['customer']['companies'][$index74]['company']['name'];

}


}


}

}


}
if (isset($jsonData['history'][$index20]['customerContact']['companies'])) {
    $model->history[$index20]->customerContact->companies = [];
foreach (array_keys($jsonData['history'][$index20]['customerContact']['companies']) as $index62) {
    
$model->history[$index20]->customerContact->companies[$index62] = new RetailCrm\Api\Model\Entity\CustomersCorporate\CustomerContactCompany();
if (isset($jsonData['history'][$index20]['customerContact']['companies'][$index62]['id'])) {
    $model->history[$index20]->customerContact->companies[$index62]->id = $jsonData['history'][$index20]['customerContact']['companies'][$index62]['id'];

}
if (isset($jsonData['history'][$index20]['customerContact']['companies'][$index62]['externalId'])) {
    $model->history[$index20]->customerContact->companies[$index62]->externalId = $jsonData['history'][$index20]['customerContact']['companies'][$index62]['externalId'];

}
if (isset($jsonData['history'][$index20]['customerContact']['companies'][$index62]['company'])) {
    
$model->history[$index20]->customerContact->companies[$index62]->company = new RetailCrm\Api\Model\Entity\CustomersCorporate\EntityWithExternalIdNameOutput();
if (isset($jsonData['history'][$index20]['customerContact']['companies'][$index62]['company']['id'])) {
    $model->history[$index20]->customerContact->companies[$index62]->company->id = $jsonData['history'][$index20]['customerContact']['companies'][$index62]['company']['id'];

}
if (isset($jsonData['history'][$index20]['customerContact']['companies'][$index62]['company']['externalId'])) {
    $model->history[$index20]->customerContact->companies[$index62]->company->externalId = $jsonData['history'][$index20]['customerContact']['companies'][$index62]['company']['externalId'];

}
if (isset($jsonData['history'][$index20]['customerContact']['companies'][$index62]['company']['name'])) {
    $model->history[$index20]->customerContact->companies[$index62]->company->name = $jsonData['history'][$index20]['customerContact']['companies'][$index62]['company']['name'];

}


}


}

}


}
if (isset($jsonData['history'][$index20]['company'])) {
    
$model->history[$index20]->company = new RetailCrm\Api\Model\Entity\CustomersCorporate\Company();
if (isset($jsonData['history'][$index20]['company']['id'])) {
    $model->history[$index20]->company->id = $jsonData['history'][$index20]['company']['id'];

}
if (isset($jsonData['history'][$index20]['company']['isMain'])) {
    $model->history[$index20]->company->isMain = $jsonData['history'][$index20]['company']['isMain'];

}
if (isset($jsonData['history'][$index20]['company']['externalId'])) {
    $model->history[$index20]->company->externalId = $jsonData['history'][$index20]['company']['externalId'];

}
if (isset($jsonData['history'][$index20]['company']['active'])) {
    $model->history[$index20]->company->active = $jsonData['history'][$index20]['company']['active'];

}
if (isset($jsonData['history'][$index20]['company']['name'])) {
    $model->history[$index20]->company->name = $jsonData['history'][$index20]['company']['name'];

}
if (isset($jsonData['history'][$index20]['company']['brand'])) {
    $model->history[$index20]->company->brand = $jsonData['history'][$index20]['company']['brand'];

}
if (isset($jsonData['history'][$index20]['company']['site'])) {
    $model->history[$index20]->company->site = $jsonData['history'][$index20]['company']['site'];

}
if (isset($jsonData['history'][$index20]['company']['createdAt'])) {
    $model->history[$index20]->company->createdAt = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['history'][$index20]['company']['createdAt']);

}
if (isset($jsonData['history'][$index20]['company']['customer'])) {
    
$model->history[$index20]->company->customer = new RetailCrm\Api\Model\Entity\CustomersCorporate\SerializedEntityCustomer();
if (isset($jsonData['history'][$index20]['company']['customer']['site'])) {
    $model->history[$index20]->company->customer->site = $jsonData['history'][$index20]['company']['customer']['site'];

}
if (isset($jsonData['history'][$index20]['company']['customer']['id'])) {
    $model->history[$index20]->company->customer->id = $jsonData['history'][$index20]['company']['customer']['id'];

}
if (isset($jsonData['history'][$index20]['company']['customer']['externalId'])) {
    $model->history[$index20]->company->customer->externalId = $jsonData['history'][$index20]['company']['customer']['externalId'];

}
if (isset($jsonData['history'][$index20]['company']['customer']['type'])) {
    $model->history[$index20]->company->customer->type = $jsonData['history'][$index20]['company']['customer']['type'];

}


}
if (isset($jsonData['history'][$index20]['company']['contragent'])) {
    
$model->history[$index20]->company->contragent = new RetailCrm\Api\Model\Entity\Customers\CustomerContragent();
if (isset($jsonData['history'][$index20]['company']['contragent']['contragentType'])) {
    $model->history[$index20]->company->contragent->contragentType = $jsonData['history'][$index20]['company']['contragent']['contragentType'];

}
if (isset($jsonData['history'][$index20]['company']['contragent']['legalName'])) {
    $model->history[$index20]->company->contragent->legalName = $jsonData['history'][$index20]['company']['contragent']['legalName'];

}
if (isset($jsonData['history'][$index20]['company']['contragent']['legalAddress'])) {
    $model->history[$index20]->company->contragent->legalAddress = $jsonData['history'][$index20]['company']['contragent']['legalAddress'];

}
if (isset($jsonData['history'][$index20]['company']['contragent']['INN'])) {
    $model->history[$index20]->company->contragent->INN = $jsonData['history'][$index20]['company']['contragent']['INN'];

}
if (isset($jsonData['history'][$index20]['company']['contragent']['OKPO'])) {
    $model->history[$index20]->company->contragent->OKPO = $jsonData['history'][$index20]['company']['contragent']['OKPO'];

}
if (isset($jsonData['history'][$index20]['company']['contragent']['KPP'])) {
    $model->history[$index20]->company->contragent->KPP = $jsonData['history'][$index20]['company']['contragent']['KPP'];

}
if (isset($jsonData['history'][$index20]['company']['contragent']['OGRN'])) {
    $model->history[$index20]->company->contragent->OGRN = $jsonData['history'][$index20]['company']['contragent']['OGRN'];

}
if (isset($jsonData['history'][$index20]['company']['contragent']['OGRNIP'])) {
    $model->history[$index20]->company->contragent->OGRNIP = $jsonData['history'][$index20]['company']['contragent']['OGRNIP'];

}
if (isset($jsonData['history'][$index20]['company']['contragent']['certificateNumber'])) {
    $model->history[$index20]->company->contragent->certificateNumber = $jsonData['history'][$index20]['company']['contragent']['certificateNumber'];

}
if (isset($jsonData['history'][$index20]['company']['contragent']['certificateDate'])) {
    $model->history[$index20]->company->contragent->certificateDate = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['history'][$index20]['company']['contragent']['certificateDate']);

}
if (isset($jsonData['history'][$index20]['company']['contragent']['BIK'])) {
    $model->history[$index20]->company->contragent->BIK = $jsonData['history'][$index20]['company']['contragent']['BIK'];

}
if (isset($jsonData['history'][$index20]['company']['contragent']['bank'])) {
    $model->history[$index20]->company->contragent->bank = $jsonData['history'][$index20]['company']['contragent']['bank'];

}
if (isset($jsonData['history'][$index20]['company']['contragent']['bankAddress'])) {
    $model->history[$index20]->company->contragent->bankAddress = $jsonData['history'][$index20]['company']['contragent']['bankAddress'];

}
if (isset($jsonData['history'][$index20]['company']['contragent']['corrAccount'])) {
    $model->history[$index20]->company->contragent->corrAccount = $jsonData['history'][$index20]['company']['contragent']['corrAccount'];

}
if (isset($jsonData['history'][$index20]['company']['contragent']['bankAccount'])) {
    $model->history[$index20]->company->contragent->bankAccount = $jsonData['history'][$index20]['company']['contragent']['bankAccount'];

}


}
if (isset($jsonData['history'][$index20]['company']['address'])) {
    
$model->history[$index20]->company->address = new RetailCrm\Api\Model\Entity\Customers\CustomerAddress();
if (isset($jsonData['history'][$index20]['company']['address']['id'])) {
    $model->history[$index20]->company->address->id = $jsonData['history'][$index20]['company']['address']['id'];

}
if (isset($jsonData['history'][$index20]['company']['address']['name'])) {
    $model->history[$index20]->company->address->name = $jsonData['history'][$index20]['company']['address']['name'];

}
if (isset($jsonData['history'][$index20]['company']['address']['isMain'])) {
    $model->history[$index20]->company->address->isMain = $jsonData['history'][$index20]['company']['address']['isMain'];

}
if (isset($jsonData['history'][$index20]['company']['address']['index'])) {
    $model->history[$index20]->company->address->index = $jsonData['history'][$index20]['company']['address']['index'];

}
if (isset($jsonData['history'][$index20]['company']['address']['countryIso'])) {
    $model->history[$index20]->company->address->countryIso = $jsonData['history'][$index20]['company']['address']['countryIso'];

}
if (isset($jsonData['history'][$index20]['company']['address']['region'])) {
    $model->history[$index20]->company->address->region = $jsonData['history'][$index20]['company']['address']['region'];

}
if (isset($jsonData['history'][$index20]['company']['address']['regionId'])) {
    $model->history[$index20]->company->address->regionId = $jsonData['history'][$index20]['company']['address']['regionId'];

}
if (isset($jsonData['history'][$index20]['company']['address']['city'])) {
    $model->history[$index20]->company->address->city = $jsonData['history'][$index20]['company']['address']['city'];

}
if (isset($jsonData['history'][$index20]['company']['address']['cityId'])) {
    $model->history[$index20]->company->address->cityId = $jsonData['history'][$index20]['company']['address']['cityId'];

}
if (isset($jsonData['history'][$index20]['company']['address']['cityType'])) {
    $model->history[$index20]->company->address->cityType = $jsonData['history'][$index20]['company']['address']['cityType'];

}
if (isset($jsonData['history'][$index20]['company']['address']['street'])) {
    $model->history[$index20]->company->address->street = $jsonData['history'][$index20]['company']['address']['street'];

}
if (isset($jsonData['history'][$index20]['company']['address']['streetId'])) {
    $model->history[$index20]->company->address->streetId = $jsonData['history'][$index20]['company']['address']['streetId'];

}
if (isset($jsonData['history'][$index20]['company']['address']['streetType'])) {
    $model->history[$index20]->company->address->streetType = $jsonData['history'][$index20]['company']['address']['streetType'];

}
if (isset($jsonData['history'][$index20]['company']['address']['building'])) {
    $model->history[$index20]->company->address->building = $jsonData['history'][$index20]['company']['address']['building'];

}
if (isset($jsonData['history'][$index20]['company']['address']['flat'])) {
    $model->history[$index20]->company->address->flat = $jsonData['history'][$index20]['company']['address']['flat'];

}
if (isset($jsonData['history'][$index20]['company']['address']['floor'])) {
    $model->history[$index20]->company->address->floor = $jsonData['history'][$index20]['company']['address']['floor'];

}
if (isset($jsonData['history'][$index20]['company']['address']['block'])) {
    $model->history[$index20]->company->address->block = $jsonData['history'][$index20]['company']['address']['block'];

}
if (isset($jsonData['history'][$index20]['company']['address']['house'])) {
    $model->history[$index20]->company->address->house = $jsonData['history'][$index20]['company']['address']['house'];

}
if (isset($jsonData['history'][$index20]['company']['address']['housing'])) {
    $model->history[$index20]->company->address->housing = $jsonData['history'][$index20]['company']['address']['housing'];

}
if (isset($jsonData['history'][$index20]['company']['address']['metro'])) {
    $model->history[$index20]->company->address->metro = $jsonData['history'][$index20]['company']['address']['metro'];

}
if (isset($jsonData['history'][$index20]['company']['address']['notes'])) {
    $model->history[$index20]->company->address->notes = $jsonData['history'][$index20]['company']['address']['notes'];

}
if (isset($jsonData['history'][$index20]['company']['address']['text'])) {
    $model->history[$index20]->company->address->text = $jsonData['history'][$index20]['company']['address']['text'];

}
if (isset($jsonData['history'][$index20]['company']['address']['externalId'])) {
    $model->history[$index20]->company->address->externalId = $jsonData['history'][$index20]['company']['address']['externalId'];

}


}
if (isset($jsonData['history'][$index20]['company']['customFields'])) {
    $model->history[$index20]->company->customFields = [];
foreach (array_keys($jsonData['history'][$index20]['company']['customFields']) as $index57) {
    $model->history[$index20]->company->customFields[$index57] = $jsonData['history'][$index20]['company']['customFields'][$index57];

}

}
if (isset($jsonData['history'][$index20]['company']['marginSumm'])) {
    $model->history[$index20]->company->marginSumm = (float) $jsonData['history'][$index20]['company']['marginSumm'];

}
if (isset($jsonData['history'][$index20]['company']['totalSumm'])) {
    $model->history[$index20]->company->totalSumm = (float) $jsonData['history'][$index20]['company']['totalSumm'];

}
if (isset($jsonData['history'][$index20]['company']['averageSumm'])) {
    $model->history[$index20]->company->averageSumm = (float) $jsonData['history'][$index20]['company']['averageSumm'];

}
if (isset($jsonData['history'][$index20]['company']['ordersCount'])) {
    $model->history[$index20]->company->ordersCount = $jsonData['history'][$index20]['company']['ordersCount'];

}
if (isset($jsonData['history'][$index20]['company']['costSumm'])) {
    $model->history[$index20]->company->costSumm = (float) $jsonData['history'][$index20]['company']['costSumm'];

}


}


}

}



    return $model;
}
