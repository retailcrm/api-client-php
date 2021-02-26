<?php

function deserialize_RetailCrm_Api_Model_Response_CustomersCorporate_CustomersCorporateGetResponse(array $jsonData): RetailCrm\Api\Model\Response\CustomersCorporate\CustomersCorporateGetResponse
{
    
$model = new RetailCrm\Api\Model\Response\CustomersCorporate\CustomersCorporateGetResponse();
if (isset($jsonData['success'])) {
    $model->success = $jsonData['success'];

}
if (isset($jsonData['customerCorporate'])) {
    
$model->customerCorporate = new RetailCrm\Api\Model\Entity\CustomersCorporate\CustomerCorporate();
if (isset($jsonData['customerCorporate']['type'])) {
    $model->customerCorporate->type = $jsonData['customerCorporate']['type'];

}
if (isset($jsonData['customerCorporate']['id'])) {
    $model->customerCorporate->id = $jsonData['customerCorporate']['id'];

}
if (isset($jsonData['customerCorporate']['externalId'])) {
    $model->customerCorporate->externalId = $jsonData['customerCorporate']['externalId'];

}
if (isset($jsonData['customerCorporate']['nickName'])) {
    $model->customerCorporate->nickName = $jsonData['customerCorporate']['nickName'];

}
if (isset($jsonData['customerCorporate']['mainAddress'])) {
    
$model->customerCorporate->mainAddress = new RetailCrm\Api\Model\Entity\CustomersCorporate\EntityWithExternalIdNameOutput();
if (isset($jsonData['customerCorporate']['mainAddress']['id'])) {
    $model->customerCorporate->mainAddress->id = $jsonData['customerCorporate']['mainAddress']['id'];

}
if (isset($jsonData['customerCorporate']['mainAddress']['externalId'])) {
    $model->customerCorporate->mainAddress->externalId = $jsonData['customerCorporate']['mainAddress']['externalId'];

}
if (isset($jsonData['customerCorporate']['mainAddress']['name'])) {
    $model->customerCorporate->mainAddress->name = $jsonData['customerCorporate']['mainAddress']['name'];

}


}
if (isset($jsonData['customerCorporate']['createdAt'])) {
    $model->customerCorporate->createdAt = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['customerCorporate']['createdAt']);

}
if (isset($jsonData['customerCorporate']['managerId'])) {
    $model->customerCorporate->managerId = $jsonData['customerCorporate']['managerId'];

}
if (isset($jsonData['customerCorporate']['source'])) {
    
$model->customerCorporate->source = new RetailCrm\Api\Model\Entity\Source();
if (isset($jsonData['customerCorporate']['source']['source'])) {
    $model->customerCorporate->source->source = $jsonData['customerCorporate']['source']['source'];

}
if (isset($jsonData['customerCorporate']['source']['medium'])) {
    $model->customerCorporate->source->medium = $jsonData['customerCorporate']['source']['medium'];

}
if (isset($jsonData['customerCorporate']['source']['campaign'])) {
    $model->customerCorporate->source->campaign = $jsonData['customerCorporate']['source']['campaign'];

}
if (isset($jsonData['customerCorporate']['source']['keyword'])) {
    $model->customerCorporate->source->keyword = $jsonData['customerCorporate']['source']['keyword'];

}
if (isset($jsonData['customerCorporate']['source']['content'])) {
    $model->customerCorporate->source->content = $jsonData['customerCorporate']['source']['content'];

}


}
if (isset($jsonData['customerCorporate']['customerContacts'])) {
    $model->customerCorporate->customerContacts = [];
foreach (array_keys($jsonData['customerCorporate']['customerContacts']) as $index50) {
    
$model->customerCorporate->customerContacts[$index50] = new RetailCrm\Api\Model\Entity\CustomersCorporate\CustomerContact();
if (isset($jsonData['customerCorporate']['customerContacts'][$index50]['id'])) {
    $model->customerCorporate->customerContacts[$index50]->id = $jsonData['customerCorporate']['customerContacts'][$index50]['id'];

}
if (isset($jsonData['customerCorporate']['customerContacts'][$index50]['isMain'])) {
    $model->customerCorporate->customerContacts[$index50]->isMain = $jsonData['customerCorporate']['customerContacts'][$index50]['isMain'];

}
if (isset($jsonData['customerCorporate']['customerContacts'][$index50]['customer'])) {
    
$model->customerCorporate->customerContacts[$index50]->customer = new RetailCrm\Api\Model\Entity\CustomersCorporate\SerializedRelationAbstractCustomer();
if (isset($jsonData['customerCorporate']['customerContacts'][$index50]['customer']['id'])) {
    $model->customerCorporate->customerContacts[$index50]->customer->id = $jsonData['customerCorporate']['customerContacts'][$index50]['customer']['id'];

}
if (isset($jsonData['customerCorporate']['customerContacts'][$index50]['customer']['externalId'])) {
    $model->customerCorporate->customerContacts[$index50]->customer->externalId = $jsonData['customerCorporate']['customerContacts'][$index50]['customer']['externalId'];

}
if (isset($jsonData['customerCorporate']['customerContacts'][$index50]['customer']['browserId'])) {
    $model->customerCorporate->customerContacts[$index50]->customer->browserId = $jsonData['customerCorporate']['customerContacts'][$index50]['customer']['browserId'];

}
if (isset($jsonData['customerCorporate']['customerContacts'][$index50]['customer']['site'])) {
    $model->customerCorporate->customerContacts[$index50]->customer->site = $jsonData['customerCorporate']['customerContacts'][$index50]['customer']['site'];

}
if (isset($jsonData['customerCorporate']['customerContacts'][$index50]['customer']['companies'])) {
    $model->customerCorporate->customerContacts[$index50]->customer->companies = [];
foreach (array_keys($jsonData['customerCorporate']['customerContacts'][$index50]['customer']['companies']) as $index85) {
    
$model->customerCorporate->customerContacts[$index50]->customer->companies[$index85] = new RetailCrm\Api\Model\Entity\CustomersCorporate\CustomerContactCompany();
if (isset($jsonData['customerCorporate']['customerContacts'][$index50]['customer']['companies'][$index85]['id'])) {
    $model->customerCorporate->customerContacts[$index50]->customer->companies[$index85]->id = $jsonData['customerCorporate']['customerContacts'][$index50]['customer']['companies'][$index85]['id'];

}
if (isset($jsonData['customerCorporate']['customerContacts'][$index50]['customer']['companies'][$index85]['externalId'])) {
    $model->customerCorporate->customerContacts[$index50]->customer->companies[$index85]->externalId = $jsonData['customerCorporate']['customerContacts'][$index50]['customer']['companies'][$index85]['externalId'];

}
if (isset($jsonData['customerCorporate']['customerContacts'][$index50]['customer']['companies'][$index85]['company'])) {
    
$model->customerCorporate->customerContacts[$index50]->customer->companies[$index85]->company = new RetailCrm\Api\Model\Entity\CustomersCorporate\EntityWithExternalIdNameOutput();
if (isset($jsonData['customerCorporate']['customerContacts'][$index50]['customer']['companies'][$index85]['company']['id'])) {
    $model->customerCorporate->customerContacts[$index50]->customer->companies[$index85]->company->id = $jsonData['customerCorporate']['customerContacts'][$index50]['customer']['companies'][$index85]['company']['id'];

}
if (isset($jsonData['customerCorporate']['customerContacts'][$index50]['customer']['companies'][$index85]['company']['externalId'])) {
    $model->customerCorporate->customerContacts[$index50]->customer->companies[$index85]->company->externalId = $jsonData['customerCorporate']['customerContacts'][$index50]['customer']['companies'][$index85]['company']['externalId'];

}
if (isset($jsonData['customerCorporate']['customerContacts'][$index50]['customer']['companies'][$index85]['company']['name'])) {
    $model->customerCorporate->customerContacts[$index50]->customer->companies[$index85]->company->name = $jsonData['customerCorporate']['customerContacts'][$index50]['customer']['companies'][$index85]['company']['name'];

}


}


}

}


}
if (isset($jsonData['customerCorporate']['customerContacts'][$index50]['companies'])) {
    $model->customerCorporate->customerContacts[$index50]->companies = [];
foreach (array_keys($jsonData['customerCorporate']['customerContacts'][$index50]['companies']) as $index73) {
    
$model->customerCorporate->customerContacts[$index50]->companies[$index73] = new RetailCrm\Api\Model\Entity\CustomersCorporate\CustomerContactCompany();
if (isset($jsonData['customerCorporate']['customerContacts'][$index50]['companies'][$index73]['id'])) {
    $model->customerCorporate->customerContacts[$index50]->companies[$index73]->id = $jsonData['customerCorporate']['customerContacts'][$index50]['companies'][$index73]['id'];

}
if (isset($jsonData['customerCorporate']['customerContacts'][$index50]['companies'][$index73]['externalId'])) {
    $model->customerCorporate->customerContacts[$index50]->companies[$index73]->externalId = $jsonData['customerCorporate']['customerContacts'][$index50]['companies'][$index73]['externalId'];

}
if (isset($jsonData['customerCorporate']['customerContacts'][$index50]['companies'][$index73]['company'])) {
    
$model->customerCorporate->customerContacts[$index50]->companies[$index73]->company = new RetailCrm\Api\Model\Entity\CustomersCorporate\EntityWithExternalIdNameOutput();
if (isset($jsonData['customerCorporate']['customerContacts'][$index50]['companies'][$index73]['company']['id'])) {
    $model->customerCorporate->customerContacts[$index50]->companies[$index73]->company->id = $jsonData['customerCorporate']['customerContacts'][$index50]['companies'][$index73]['company']['id'];

}
if (isset($jsonData['customerCorporate']['customerContacts'][$index50]['companies'][$index73]['company']['externalId'])) {
    $model->customerCorporate->customerContacts[$index50]->companies[$index73]->company->externalId = $jsonData['customerCorporate']['customerContacts'][$index50]['companies'][$index73]['company']['externalId'];

}
if (isset($jsonData['customerCorporate']['customerContacts'][$index50]['companies'][$index73]['company']['name'])) {
    $model->customerCorporate->customerContacts[$index50]->companies[$index73]->company->name = $jsonData['customerCorporate']['customerContacts'][$index50]['companies'][$index73]['company']['name'];

}


}


}

}


}

}
if (isset($jsonData['customerCorporate']['companies'])) {
    $model->customerCorporate->companies = [];
foreach (array_keys($jsonData['customerCorporate']['companies']) as $index43) {
    
$model->customerCorporate->companies[$index43] = new RetailCrm\Api\Model\Entity\CustomersCorporate\Company();
if (isset($jsonData['customerCorporate']['companies'][$index43]['id'])) {
    $model->customerCorporate->companies[$index43]->id = $jsonData['customerCorporate']['companies'][$index43]['id'];

}
if (isset($jsonData['customerCorporate']['companies'][$index43]['isMain'])) {
    $model->customerCorporate->companies[$index43]->isMain = $jsonData['customerCorporate']['companies'][$index43]['isMain'];

}
if (isset($jsonData['customerCorporate']['companies'][$index43]['externalId'])) {
    $model->customerCorporate->companies[$index43]->externalId = $jsonData['customerCorporate']['companies'][$index43]['externalId'];

}
if (isset($jsonData['customerCorporate']['companies'][$index43]['active'])) {
    $model->customerCorporate->companies[$index43]->active = $jsonData['customerCorporate']['companies'][$index43]['active'];

}
if (isset($jsonData['customerCorporate']['companies'][$index43]['name'])) {
    $model->customerCorporate->companies[$index43]->name = $jsonData['customerCorporate']['companies'][$index43]['name'];

}
if (isset($jsonData['customerCorporate']['companies'][$index43]['brand'])) {
    $model->customerCorporate->companies[$index43]->brand = $jsonData['customerCorporate']['companies'][$index43]['brand'];

}
if (isset($jsonData['customerCorporate']['companies'][$index43]['site'])) {
    $model->customerCorporate->companies[$index43]->site = $jsonData['customerCorporate']['companies'][$index43]['site'];

}
if (isset($jsonData['customerCorporate']['companies'][$index43]['createdAt'])) {
    $model->customerCorporate->companies[$index43]->createdAt = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['customerCorporate']['companies'][$index43]['createdAt']);

}
if (isset($jsonData['customerCorporate']['companies'][$index43]['customer'])) {
    
$model->customerCorporate->companies[$index43]->customer = new RetailCrm\Api\Model\Entity\CustomersCorporate\SerializedEntityCustomer();
if (isset($jsonData['customerCorporate']['companies'][$index43]['customer']['site'])) {
    $model->customerCorporate->companies[$index43]->customer->site = $jsonData['customerCorporate']['companies'][$index43]['customer']['site'];

}
if (isset($jsonData['customerCorporate']['companies'][$index43]['customer']['id'])) {
    $model->customerCorporate->companies[$index43]->customer->id = $jsonData['customerCorporate']['companies'][$index43]['customer']['id'];

}
if (isset($jsonData['customerCorporate']['companies'][$index43]['customer']['externalId'])) {
    $model->customerCorporate->companies[$index43]->customer->externalId = $jsonData['customerCorporate']['companies'][$index43]['customer']['externalId'];

}
if (isset($jsonData['customerCorporate']['companies'][$index43]['customer']['type'])) {
    $model->customerCorporate->companies[$index43]->customer->type = $jsonData['customerCorporate']['companies'][$index43]['customer']['type'];

}


}
if (isset($jsonData['customerCorporate']['companies'][$index43]['contragent'])) {
    
$model->customerCorporate->companies[$index43]->contragent = new RetailCrm\Api\Model\Entity\Customers\CustomerContragent();
if (isset($jsonData['customerCorporate']['companies'][$index43]['contragent']['contragentType'])) {
    $model->customerCorporate->companies[$index43]->contragent->contragentType = $jsonData['customerCorporate']['companies'][$index43]['contragent']['contragentType'];

}
if (isset($jsonData['customerCorporate']['companies'][$index43]['contragent']['legalName'])) {
    $model->customerCorporate->companies[$index43]->contragent->legalName = $jsonData['customerCorporate']['companies'][$index43]['contragent']['legalName'];

}
if (isset($jsonData['customerCorporate']['companies'][$index43]['contragent']['legalAddress'])) {
    $model->customerCorporate->companies[$index43]->contragent->legalAddress = $jsonData['customerCorporate']['companies'][$index43]['contragent']['legalAddress'];

}
if (isset($jsonData['customerCorporate']['companies'][$index43]['contragent']['INN'])) {
    $model->customerCorporate->companies[$index43]->contragent->INN = $jsonData['customerCorporate']['companies'][$index43]['contragent']['INN'];

}
if (isset($jsonData['customerCorporate']['companies'][$index43]['contragent']['OKPO'])) {
    $model->customerCorporate->companies[$index43]->contragent->OKPO = $jsonData['customerCorporate']['companies'][$index43]['contragent']['OKPO'];

}
if (isset($jsonData['customerCorporate']['companies'][$index43]['contragent']['KPP'])) {
    $model->customerCorporate->companies[$index43]->contragent->KPP = $jsonData['customerCorporate']['companies'][$index43]['contragent']['KPP'];

}
if (isset($jsonData['customerCorporate']['companies'][$index43]['contragent']['OGRN'])) {
    $model->customerCorporate->companies[$index43]->contragent->OGRN = $jsonData['customerCorporate']['companies'][$index43]['contragent']['OGRN'];

}
if (isset($jsonData['customerCorporate']['companies'][$index43]['contragent']['OGRNIP'])) {
    $model->customerCorporate->companies[$index43]->contragent->OGRNIP = $jsonData['customerCorporate']['companies'][$index43]['contragent']['OGRNIP'];

}
if (isset($jsonData['customerCorporate']['companies'][$index43]['contragent']['certificateNumber'])) {
    $model->customerCorporate->companies[$index43]->contragent->certificateNumber = $jsonData['customerCorporate']['companies'][$index43]['contragent']['certificateNumber'];

}
if (isset($jsonData['customerCorporate']['companies'][$index43]['contragent']['certificateDate'])) {
    $model->customerCorporate->companies[$index43]->contragent->certificateDate = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['customerCorporate']['companies'][$index43]['contragent']['certificateDate']);

}
if (isset($jsonData['customerCorporate']['companies'][$index43]['contragent']['BIK'])) {
    $model->customerCorporate->companies[$index43]->contragent->BIK = $jsonData['customerCorporate']['companies'][$index43]['contragent']['BIK'];

}
if (isset($jsonData['customerCorporate']['companies'][$index43]['contragent']['bank'])) {
    $model->customerCorporate->companies[$index43]->contragent->bank = $jsonData['customerCorporate']['companies'][$index43]['contragent']['bank'];

}
if (isset($jsonData['customerCorporate']['companies'][$index43]['contragent']['bankAddress'])) {
    $model->customerCorporate->companies[$index43]->contragent->bankAddress = $jsonData['customerCorporate']['companies'][$index43]['contragent']['bankAddress'];

}
if (isset($jsonData['customerCorporate']['companies'][$index43]['contragent']['corrAccount'])) {
    $model->customerCorporate->companies[$index43]->contragent->corrAccount = $jsonData['customerCorporate']['companies'][$index43]['contragent']['corrAccount'];

}
if (isset($jsonData['customerCorporate']['companies'][$index43]['contragent']['bankAccount'])) {
    $model->customerCorporate->companies[$index43]->contragent->bankAccount = $jsonData['customerCorporate']['companies'][$index43]['contragent']['bankAccount'];

}


}
if (isset($jsonData['customerCorporate']['companies'][$index43]['address'])) {
    
$model->customerCorporate->companies[$index43]->address = new RetailCrm\Api\Model\Entity\Customers\CustomerAddress();
if (isset($jsonData['customerCorporate']['companies'][$index43]['address']['id'])) {
    $model->customerCorporate->companies[$index43]->address->id = $jsonData['customerCorporate']['companies'][$index43]['address']['id'];

}
if (isset($jsonData['customerCorporate']['companies'][$index43]['address']['name'])) {
    $model->customerCorporate->companies[$index43]->address->name = $jsonData['customerCorporate']['companies'][$index43]['address']['name'];

}
if (isset($jsonData['customerCorporate']['companies'][$index43]['address']['isMain'])) {
    $model->customerCorporate->companies[$index43]->address->isMain = $jsonData['customerCorporate']['companies'][$index43]['address']['isMain'];

}
if (isset($jsonData['customerCorporate']['companies'][$index43]['address']['index'])) {
    $model->customerCorporate->companies[$index43]->address->index = $jsonData['customerCorporate']['companies'][$index43]['address']['index'];

}
if (isset($jsonData['customerCorporate']['companies'][$index43]['address']['countryIso'])) {
    $model->customerCorporate->companies[$index43]->address->countryIso = $jsonData['customerCorporate']['companies'][$index43]['address']['countryIso'];

}
if (isset($jsonData['customerCorporate']['companies'][$index43]['address']['region'])) {
    $model->customerCorporate->companies[$index43]->address->region = $jsonData['customerCorporate']['companies'][$index43]['address']['region'];

}
if (isset($jsonData['customerCorporate']['companies'][$index43]['address']['regionId'])) {
    $model->customerCorporate->companies[$index43]->address->regionId = $jsonData['customerCorporate']['companies'][$index43]['address']['regionId'];

}
if (isset($jsonData['customerCorporate']['companies'][$index43]['address']['city'])) {
    $model->customerCorporate->companies[$index43]->address->city = $jsonData['customerCorporate']['companies'][$index43]['address']['city'];

}
if (isset($jsonData['customerCorporate']['companies'][$index43]['address']['cityId'])) {
    $model->customerCorporate->companies[$index43]->address->cityId = $jsonData['customerCorporate']['companies'][$index43]['address']['cityId'];

}
if (isset($jsonData['customerCorporate']['companies'][$index43]['address']['cityType'])) {
    $model->customerCorporate->companies[$index43]->address->cityType = $jsonData['customerCorporate']['companies'][$index43]['address']['cityType'];

}
if (isset($jsonData['customerCorporate']['companies'][$index43]['address']['street'])) {
    $model->customerCorporate->companies[$index43]->address->street = $jsonData['customerCorporate']['companies'][$index43]['address']['street'];

}
if (isset($jsonData['customerCorporate']['companies'][$index43]['address']['streetId'])) {
    $model->customerCorporate->companies[$index43]->address->streetId = $jsonData['customerCorporate']['companies'][$index43]['address']['streetId'];

}
if (isset($jsonData['customerCorporate']['companies'][$index43]['address']['streetType'])) {
    $model->customerCorporate->companies[$index43]->address->streetType = $jsonData['customerCorporate']['companies'][$index43]['address']['streetType'];

}
if (isset($jsonData['customerCorporate']['companies'][$index43]['address']['building'])) {
    $model->customerCorporate->companies[$index43]->address->building = $jsonData['customerCorporate']['companies'][$index43]['address']['building'];

}
if (isset($jsonData['customerCorporate']['companies'][$index43]['address']['flat'])) {
    $model->customerCorporate->companies[$index43]->address->flat = $jsonData['customerCorporate']['companies'][$index43]['address']['flat'];

}
if (isset($jsonData['customerCorporate']['companies'][$index43]['address']['floor'])) {
    $model->customerCorporate->companies[$index43]->address->floor = $jsonData['customerCorporate']['companies'][$index43]['address']['floor'];

}
if (isset($jsonData['customerCorporate']['companies'][$index43]['address']['block'])) {
    $model->customerCorporate->companies[$index43]->address->block = $jsonData['customerCorporate']['companies'][$index43]['address']['block'];

}
if (isset($jsonData['customerCorporate']['companies'][$index43]['address']['house'])) {
    $model->customerCorporate->companies[$index43]->address->house = $jsonData['customerCorporate']['companies'][$index43]['address']['house'];

}
if (isset($jsonData['customerCorporate']['companies'][$index43]['address']['housing'])) {
    $model->customerCorporate->companies[$index43]->address->housing = $jsonData['customerCorporate']['companies'][$index43]['address']['housing'];

}
if (isset($jsonData['customerCorporate']['companies'][$index43]['address']['metro'])) {
    $model->customerCorporate->companies[$index43]->address->metro = $jsonData['customerCorporate']['companies'][$index43]['address']['metro'];

}
if (isset($jsonData['customerCorporate']['companies'][$index43]['address']['notes'])) {
    $model->customerCorporate->companies[$index43]->address->notes = $jsonData['customerCorporate']['companies'][$index43]['address']['notes'];

}
if (isset($jsonData['customerCorporate']['companies'][$index43]['address']['text'])) {
    $model->customerCorporate->companies[$index43]->address->text = $jsonData['customerCorporate']['companies'][$index43]['address']['text'];

}
if (isset($jsonData['customerCorporate']['companies'][$index43]['address']['externalId'])) {
    $model->customerCorporate->companies[$index43]->address->externalId = $jsonData['customerCorporate']['companies'][$index43]['address']['externalId'];

}


}
if (isset($jsonData['customerCorporate']['companies'][$index43]['customFields'])) {
    $model->customerCorporate->companies[$index43]->customFields = [];
foreach (array_keys($jsonData['customerCorporate']['companies'][$index43]['customFields']) as $index69) {
    $model->customerCorporate->companies[$index43]->customFields[$index69] = $jsonData['customerCorporate']['companies'][$index43]['customFields'][$index69];

}

}
if (isset($jsonData['customerCorporate']['companies'][$index43]['marginSumm'])) {
    $model->customerCorporate->companies[$index43]->marginSumm = (float) $jsonData['customerCorporate']['companies'][$index43]['marginSumm'];

}
if (isset($jsonData['customerCorporate']['companies'][$index43]['totalSumm'])) {
    $model->customerCorporate->companies[$index43]->totalSumm = (float) $jsonData['customerCorporate']['companies'][$index43]['totalSumm'];

}
if (isset($jsonData['customerCorporate']['companies'][$index43]['averageSumm'])) {
    $model->customerCorporate->companies[$index43]->averageSumm = (float) $jsonData['customerCorporate']['companies'][$index43]['averageSumm'];

}
if (isset($jsonData['customerCorporate']['companies'][$index43]['ordersCount'])) {
    $model->customerCorporate->companies[$index43]->ordersCount = $jsonData['customerCorporate']['companies'][$index43]['ordersCount'];

}
if (isset($jsonData['customerCorporate']['companies'][$index43]['costSumm'])) {
    $model->customerCorporate->companies[$index43]->costSumm = (float) $jsonData['customerCorporate']['companies'][$index43]['costSumm'];

}


}

}
if (isset($jsonData['customerCorporate']['addresses'])) {
    $model->customerCorporate->addresses = [];
foreach (array_keys($jsonData['customerCorporate']['addresses']) as $index43) {
    
$model->customerCorporate->addresses[$index43] = new RetailCrm\Api\Model\Entity\Customers\CustomerAddress();
if (isset($jsonData['customerCorporate']['addresses'][$index43]['id'])) {
    $model->customerCorporate->addresses[$index43]->id = $jsonData['customerCorporate']['addresses'][$index43]['id'];

}
if (isset($jsonData['customerCorporate']['addresses'][$index43]['name'])) {
    $model->customerCorporate->addresses[$index43]->name = $jsonData['customerCorporate']['addresses'][$index43]['name'];

}
if (isset($jsonData['customerCorporate']['addresses'][$index43]['isMain'])) {
    $model->customerCorporate->addresses[$index43]->isMain = $jsonData['customerCorporate']['addresses'][$index43]['isMain'];

}
if (isset($jsonData['customerCorporate']['addresses'][$index43]['index'])) {
    $model->customerCorporate->addresses[$index43]->index = $jsonData['customerCorporate']['addresses'][$index43]['index'];

}
if (isset($jsonData['customerCorporate']['addresses'][$index43]['countryIso'])) {
    $model->customerCorporate->addresses[$index43]->countryIso = $jsonData['customerCorporate']['addresses'][$index43]['countryIso'];

}
if (isset($jsonData['customerCorporate']['addresses'][$index43]['region'])) {
    $model->customerCorporate->addresses[$index43]->region = $jsonData['customerCorporate']['addresses'][$index43]['region'];

}
if (isset($jsonData['customerCorporate']['addresses'][$index43]['regionId'])) {
    $model->customerCorporate->addresses[$index43]->regionId = $jsonData['customerCorporate']['addresses'][$index43]['regionId'];

}
if (isset($jsonData['customerCorporate']['addresses'][$index43]['city'])) {
    $model->customerCorporate->addresses[$index43]->city = $jsonData['customerCorporate']['addresses'][$index43]['city'];

}
if (isset($jsonData['customerCorporate']['addresses'][$index43]['cityId'])) {
    $model->customerCorporate->addresses[$index43]->cityId = $jsonData['customerCorporate']['addresses'][$index43]['cityId'];

}
if (isset($jsonData['customerCorporate']['addresses'][$index43]['cityType'])) {
    $model->customerCorporate->addresses[$index43]->cityType = $jsonData['customerCorporate']['addresses'][$index43]['cityType'];

}
if (isset($jsonData['customerCorporate']['addresses'][$index43]['street'])) {
    $model->customerCorporate->addresses[$index43]->street = $jsonData['customerCorporate']['addresses'][$index43]['street'];

}
if (isset($jsonData['customerCorporate']['addresses'][$index43]['streetId'])) {
    $model->customerCorporate->addresses[$index43]->streetId = $jsonData['customerCorporate']['addresses'][$index43]['streetId'];

}
if (isset($jsonData['customerCorporate']['addresses'][$index43]['streetType'])) {
    $model->customerCorporate->addresses[$index43]->streetType = $jsonData['customerCorporate']['addresses'][$index43]['streetType'];

}
if (isset($jsonData['customerCorporate']['addresses'][$index43]['building'])) {
    $model->customerCorporate->addresses[$index43]->building = $jsonData['customerCorporate']['addresses'][$index43]['building'];

}
if (isset($jsonData['customerCorporate']['addresses'][$index43]['flat'])) {
    $model->customerCorporate->addresses[$index43]->flat = $jsonData['customerCorporate']['addresses'][$index43]['flat'];

}
if (isset($jsonData['customerCorporate']['addresses'][$index43]['floor'])) {
    $model->customerCorporate->addresses[$index43]->floor = $jsonData['customerCorporate']['addresses'][$index43]['floor'];

}
if (isset($jsonData['customerCorporate']['addresses'][$index43]['block'])) {
    $model->customerCorporate->addresses[$index43]->block = $jsonData['customerCorporate']['addresses'][$index43]['block'];

}
if (isset($jsonData['customerCorporate']['addresses'][$index43]['house'])) {
    $model->customerCorporate->addresses[$index43]->house = $jsonData['customerCorporate']['addresses'][$index43]['house'];

}
if (isset($jsonData['customerCorporate']['addresses'][$index43]['housing'])) {
    $model->customerCorporate->addresses[$index43]->housing = $jsonData['customerCorporate']['addresses'][$index43]['housing'];

}
if (isset($jsonData['customerCorporate']['addresses'][$index43]['metro'])) {
    $model->customerCorporate->addresses[$index43]->metro = $jsonData['customerCorporate']['addresses'][$index43]['metro'];

}
if (isset($jsonData['customerCorporate']['addresses'][$index43]['notes'])) {
    $model->customerCorporate->addresses[$index43]->notes = $jsonData['customerCorporate']['addresses'][$index43]['notes'];

}
if (isset($jsonData['customerCorporate']['addresses'][$index43]['text'])) {
    $model->customerCorporate->addresses[$index43]->text = $jsonData['customerCorporate']['addresses'][$index43]['text'];

}
if (isset($jsonData['customerCorporate']['addresses'][$index43]['externalId'])) {
    $model->customerCorporate->addresses[$index43]->externalId = $jsonData['customerCorporate']['addresses'][$index43]['externalId'];

}


}

}
if (isset($jsonData['customerCorporate']['vip'])) {
    $model->customerCorporate->vip = $jsonData['customerCorporate']['vip'];

}
if (isset($jsonData['customerCorporate']['bad'])) {
    $model->customerCorporate->bad = $jsonData['customerCorporate']['bad'];

}
if (isset($jsonData['customerCorporate']['site'])) {
    $model->customerCorporate->site = $jsonData['customerCorporate']['site'];

}
if (isset($jsonData['customerCorporate']['tags'])) {
    $model->customerCorporate->tags = [];
foreach (array_keys($jsonData['customerCorporate']['tags']) as $index38) {
    
$model->customerCorporate->tags[$index38] = new RetailCrm\Api\Model\Entity\Customers\CustomerTag();
if (isset($jsonData['customerCorporate']['tags'][$index38]['name'])) {
    $model->customerCorporate->tags[$index38]->name = $jsonData['customerCorporate']['tags'][$index38]['name'];

}
if (isset($jsonData['customerCorporate']['tags'][$index38]['color'])) {
    $model->customerCorporate->tags[$index38]->color = $jsonData['customerCorporate']['tags'][$index38]['color'];

}
if (isset($jsonData['customerCorporate']['tags'][$index38]['attached'])) {
    $model->customerCorporate->tags[$index38]->attached = $jsonData['customerCorporate']['tags'][$index38]['attached'];

}


}

}
if (isset($jsonData['customerCorporate']['avgMarginSumm'])) {
    $model->customerCorporate->avgMarginSumm = (float) $jsonData['customerCorporate']['avgMarginSumm'];

}
if (isset($jsonData['customerCorporate']['marginSumm'])) {
    $model->customerCorporate->marginSumm = (float) $jsonData['customerCorporate']['marginSumm'];

}
if (isset($jsonData['customerCorporate']['totalSumm'])) {
    $model->customerCorporate->totalSumm = (float) $jsonData['customerCorporate']['totalSumm'];

}
if (isset($jsonData['customerCorporate']['averageSumm'])) {
    $model->customerCorporate->averageSumm = (float) $jsonData['customerCorporate']['averageSumm'];

}
if (isset($jsonData['customerCorporate']['ordersCount'])) {
    $model->customerCorporate->ordersCount = $jsonData['customerCorporate']['ordersCount'];

}
if (isset($jsonData['customerCorporate']['costSumm'])) {
    $model->customerCorporate->costSumm = (float) $jsonData['customerCorporate']['costSumm'];

}
if (isset($jsonData['customerCorporate']['customFields'])) {
    $model->customerCorporate->customFields = [];
foreach (array_keys($jsonData['customerCorporate']['customFields']) as $index46) {
    $model->customerCorporate->customFields[$index46] = $jsonData['customerCorporate']['customFields'][$index46];

}

}
if (isset($jsonData['customerCorporate']['personalDiscount'])) {
    $model->customerCorporate->personalDiscount = (float) $jsonData['customerCorporate']['personalDiscount'];

}
if (isset($jsonData['customerCorporate']['cumulativeDiscount'])) {
    $model->customerCorporate->cumulativeDiscount = (float) $jsonData['customerCorporate']['cumulativeDiscount'];

}
if (isset($jsonData['customerCorporate']['discountCardNumber'])) {
    $model->customerCorporate->discountCardNumber = $jsonData['customerCorporate']['discountCardNumber'];

}
if (isset($jsonData['customerCorporate']['firstClientId'])) {
    $model->customerCorporate->firstClientId = $jsonData['customerCorporate']['firstClientId'];

}
if (isset($jsonData['customerCorporate']['lastClientId'])) {
    $model->customerCorporate->lastClientId = $jsonData['customerCorporate']['lastClientId'];

}
if (isset($jsonData['customerCorporate']['mainCustomerContact'])) {
    
$model->customerCorporate->mainCustomerContact = new RetailCrm\Api\Model\Entity\CustomersCorporate\CustomerContact();
if (isset($jsonData['customerCorporate']['mainCustomerContact']['id'])) {
    $model->customerCorporate->mainCustomerContact->id = $jsonData['customerCorporate']['mainCustomerContact']['id'];

}
if (isset($jsonData['customerCorporate']['mainCustomerContact']['isMain'])) {
    $model->customerCorporate->mainCustomerContact->isMain = $jsonData['customerCorporate']['mainCustomerContact']['isMain'];

}
if (isset($jsonData['customerCorporate']['mainCustomerContact']['customer'])) {
    
$model->customerCorporate->mainCustomerContact->customer = new RetailCrm\Api\Model\Entity\CustomersCorporate\SerializedRelationAbstractCustomer();
if (isset($jsonData['customerCorporate']['mainCustomerContact']['customer']['id'])) {
    $model->customerCorporate->mainCustomerContact->customer->id = $jsonData['customerCorporate']['mainCustomerContact']['customer']['id'];

}
if (isset($jsonData['customerCorporate']['mainCustomerContact']['customer']['externalId'])) {
    $model->customerCorporate->mainCustomerContact->customer->externalId = $jsonData['customerCorporate']['mainCustomerContact']['customer']['externalId'];

}
if (isset($jsonData['customerCorporate']['mainCustomerContact']['customer']['browserId'])) {
    $model->customerCorporate->mainCustomerContact->customer->browserId = $jsonData['customerCorporate']['mainCustomerContact']['customer']['browserId'];

}
if (isset($jsonData['customerCorporate']['mainCustomerContact']['customer']['site'])) {
    $model->customerCorporate->mainCustomerContact->customer->site = $jsonData['customerCorporate']['mainCustomerContact']['customer']['site'];

}
if (isset($jsonData['customerCorporate']['mainCustomerContact']['customer']['companies'])) {
    $model->customerCorporate->mainCustomerContact->customer->companies = [];
foreach (array_keys($jsonData['customerCorporate']['mainCustomerContact']['customer']['companies']) as $index78) {
    
$model->customerCorporate->mainCustomerContact->customer->companies[$index78] = new RetailCrm\Api\Model\Entity\CustomersCorporate\CustomerContactCompany();
if (isset($jsonData['customerCorporate']['mainCustomerContact']['customer']['companies'][$index78]['id'])) {
    $model->customerCorporate->mainCustomerContact->customer->companies[$index78]->id = $jsonData['customerCorporate']['mainCustomerContact']['customer']['companies'][$index78]['id'];

}
if (isset($jsonData['customerCorporate']['mainCustomerContact']['customer']['companies'][$index78]['externalId'])) {
    $model->customerCorporate->mainCustomerContact->customer->companies[$index78]->externalId = $jsonData['customerCorporate']['mainCustomerContact']['customer']['companies'][$index78]['externalId'];

}
if (isset($jsonData['customerCorporate']['mainCustomerContact']['customer']['companies'][$index78]['company'])) {
    
$model->customerCorporate->mainCustomerContact->customer->companies[$index78]->company = new RetailCrm\Api\Model\Entity\CustomersCorporate\EntityWithExternalIdNameOutput();
if (isset($jsonData['customerCorporate']['mainCustomerContact']['customer']['companies'][$index78]['company']['id'])) {
    $model->customerCorporate->mainCustomerContact->customer->companies[$index78]->company->id = $jsonData['customerCorporate']['mainCustomerContact']['customer']['companies'][$index78]['company']['id'];

}
if (isset($jsonData['customerCorporate']['mainCustomerContact']['customer']['companies'][$index78]['company']['externalId'])) {
    $model->customerCorporate->mainCustomerContact->customer->companies[$index78]->company->externalId = $jsonData['customerCorporate']['mainCustomerContact']['customer']['companies'][$index78]['company']['externalId'];

}
if (isset($jsonData['customerCorporate']['mainCustomerContact']['customer']['companies'][$index78]['company']['name'])) {
    $model->customerCorporate->mainCustomerContact->customer->companies[$index78]->company->name = $jsonData['customerCorporate']['mainCustomerContact']['customer']['companies'][$index78]['company']['name'];

}


}


}

}


}
if (isset($jsonData['customerCorporate']['mainCustomerContact']['companies'])) {
    $model->customerCorporate->mainCustomerContact->companies = [];
foreach (array_keys($jsonData['customerCorporate']['mainCustomerContact']['companies']) as $index66) {
    
$model->customerCorporate->mainCustomerContact->companies[$index66] = new RetailCrm\Api\Model\Entity\CustomersCorporate\CustomerContactCompany();
if (isset($jsonData['customerCorporate']['mainCustomerContact']['companies'][$index66]['id'])) {
    $model->customerCorporate->mainCustomerContact->companies[$index66]->id = $jsonData['customerCorporate']['mainCustomerContact']['companies'][$index66]['id'];

}
if (isset($jsonData['customerCorporate']['mainCustomerContact']['companies'][$index66]['externalId'])) {
    $model->customerCorporate->mainCustomerContact->companies[$index66]->externalId = $jsonData['customerCorporate']['mainCustomerContact']['companies'][$index66]['externalId'];

}
if (isset($jsonData['customerCorporate']['mainCustomerContact']['companies'][$index66]['company'])) {
    
$model->customerCorporate->mainCustomerContact->companies[$index66]->company = new RetailCrm\Api\Model\Entity\CustomersCorporate\EntityWithExternalIdNameOutput();
if (isset($jsonData['customerCorporate']['mainCustomerContact']['companies'][$index66]['company']['id'])) {
    $model->customerCorporate->mainCustomerContact->companies[$index66]->company->id = $jsonData['customerCorporate']['mainCustomerContact']['companies'][$index66]['company']['id'];

}
if (isset($jsonData['customerCorporate']['mainCustomerContact']['companies'][$index66]['company']['externalId'])) {
    $model->customerCorporate->mainCustomerContact->companies[$index66]->company->externalId = $jsonData['customerCorporate']['mainCustomerContact']['companies'][$index66]['company']['externalId'];

}
if (isset($jsonData['customerCorporate']['mainCustomerContact']['companies'][$index66]['company']['name'])) {
    $model->customerCorporate->mainCustomerContact->companies[$index66]->company->name = $jsonData['customerCorporate']['mainCustomerContact']['companies'][$index66]['company']['name'];

}


}


}

}


}
if (isset($jsonData['customerCorporate']['mainCompany'])) {
    
$model->customerCorporate->mainCompany = new RetailCrm\Api\Model\Entity\CustomersCorporate\EntityWithExternalIdNameOutput();
if (isset($jsonData['customerCorporate']['mainCompany']['id'])) {
    $model->customerCorporate->mainCompany->id = $jsonData['customerCorporate']['mainCompany']['id'];

}
if (isset($jsonData['customerCorporate']['mainCompany']['externalId'])) {
    $model->customerCorporate->mainCompany->externalId = $jsonData['customerCorporate']['mainCompany']['externalId'];

}
if (isset($jsonData['customerCorporate']['mainCompany']['name'])) {
    $model->customerCorporate->mainCompany->name = $jsonData['customerCorporate']['mainCompany']['name'];

}


}


}



    return $model;
}
