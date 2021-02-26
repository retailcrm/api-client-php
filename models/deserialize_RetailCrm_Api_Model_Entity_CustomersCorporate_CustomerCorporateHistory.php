<?php

function deserialize_RetailCrm_Api_Model_Entity_CustomersCorporate_CustomerCorporateHistory(array $jsonData): RetailCrm\Api\Model\Entity\CustomersCorporate\CustomerCorporateHistory
{
    
$model = new RetailCrm\Api\Model\Entity\CustomersCorporate\CustomerCorporateHistory();
if (isset($jsonData['id'])) {
    $model->id = $jsonData['id'];

}
if (isset($jsonData['createdAt'])) {
    $model->createdAt = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['createdAt']);

}
if (isset($jsonData['created'])) {
    $model->created = $jsonData['created'];

}
if (isset($jsonData['deleted'])) {
    $model->deleted = $jsonData['deleted'];

}
if (isset($jsonData['source'])) {
    $model->source = $jsonData['source'];

}
if (isset($jsonData['user'])) {
    
$model->user = new RetailCrm\Api\Model\Entity\HistoryUser();
if (isset($jsonData['user']['id'])) {
    $model->user->id = $jsonData['user']['id'];

}


}
if (isset($jsonData['field'])) {
    $model->field = $jsonData['field'];

}
if (isset($jsonData['oldValue'])) {
    $model->oldValue = $jsonData['oldValue'];

}
if (isset($jsonData['newValue'])) {
    $model->newValue = $jsonData['newValue'];

}
if (isset($jsonData['apiKey'])) {
    
$model->apiKey = new RetailCrm\Api\Model\Entity\HistoryApiKey();
if (isset($jsonData['apiKey']['current'])) {
    $model->apiKey->current = $jsonData['apiKey']['current'];

}


}
if (isset($jsonData['customer'])) {
    
$model->customer = new RetailCrm\Api\Model\Entity\CustomersCorporate\CustomerCorporate();
if (isset($jsonData['customer']['type'])) {
    $model->customer->type = $jsonData['customer']['type'];

}
if (isset($jsonData['customer']['id'])) {
    $model->customer->id = $jsonData['customer']['id'];

}
if (isset($jsonData['customer']['externalId'])) {
    $model->customer->externalId = $jsonData['customer']['externalId'];

}
if (isset($jsonData['customer']['nickName'])) {
    $model->customer->nickName = $jsonData['customer']['nickName'];

}
if (isset($jsonData['customer']['mainAddress'])) {
    
$model->customer->mainAddress = new RetailCrm\Api\Model\Entity\CustomersCorporate\EntityWithExternalIdNameOutput();
if (isset($jsonData['customer']['mainAddress']['id'])) {
    $model->customer->mainAddress->id = $jsonData['customer']['mainAddress']['id'];

}
if (isset($jsonData['customer']['mainAddress']['externalId'])) {
    $model->customer->mainAddress->externalId = $jsonData['customer']['mainAddress']['externalId'];

}
if (isset($jsonData['customer']['mainAddress']['name'])) {
    $model->customer->mainAddress->name = $jsonData['customer']['mainAddress']['name'];

}


}
if (isset($jsonData['customer']['createdAt'])) {
    $model->customer->createdAt = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['customer']['createdAt']);

}
if (isset($jsonData['customer']['managerId'])) {
    $model->customer->managerId = $jsonData['customer']['managerId'];

}
if (isset($jsonData['customer']['source'])) {
    
$model->customer->source = new RetailCrm\Api\Model\Entity\Source();
if (isset($jsonData['customer']['source']['source'])) {
    $model->customer->source->source = $jsonData['customer']['source']['source'];

}
if (isset($jsonData['customer']['source']['medium'])) {
    $model->customer->source->medium = $jsonData['customer']['source']['medium'];

}
if (isset($jsonData['customer']['source']['campaign'])) {
    $model->customer->source->campaign = $jsonData['customer']['source']['campaign'];

}
if (isset($jsonData['customer']['source']['keyword'])) {
    $model->customer->source->keyword = $jsonData['customer']['source']['keyword'];

}
if (isset($jsonData['customer']['source']['content'])) {
    $model->customer->source->content = $jsonData['customer']['source']['content'];

}


}
if (isset($jsonData['customer']['customerContacts'])) {
    $model->customer->customerContacts = [];
foreach (array_keys($jsonData['customer']['customerContacts']) as $index41) {
    
$model->customer->customerContacts[$index41] = new RetailCrm\Api\Model\Entity\CustomersCorporate\CustomerContact();
if (isset($jsonData['customer']['customerContacts'][$index41]['id'])) {
    $model->customer->customerContacts[$index41]->id = $jsonData['customer']['customerContacts'][$index41]['id'];

}
if (isset($jsonData['customer']['customerContacts'][$index41]['isMain'])) {
    $model->customer->customerContacts[$index41]->isMain = $jsonData['customer']['customerContacts'][$index41]['isMain'];

}
if (isset($jsonData['customer']['customerContacts'][$index41]['customer'])) {
    
$model->customer->customerContacts[$index41]->customer = new RetailCrm\Api\Model\Entity\CustomersCorporate\SerializedRelationAbstractCustomer();
if (isset($jsonData['customer']['customerContacts'][$index41]['customer']['id'])) {
    $model->customer->customerContacts[$index41]->customer->id = $jsonData['customer']['customerContacts'][$index41]['customer']['id'];

}
if (isset($jsonData['customer']['customerContacts'][$index41]['customer']['externalId'])) {
    $model->customer->customerContacts[$index41]->customer->externalId = $jsonData['customer']['customerContacts'][$index41]['customer']['externalId'];

}
if (isset($jsonData['customer']['customerContacts'][$index41]['customer']['browserId'])) {
    $model->customer->customerContacts[$index41]->customer->browserId = $jsonData['customer']['customerContacts'][$index41]['customer']['browserId'];

}
if (isset($jsonData['customer']['customerContacts'][$index41]['customer']['site'])) {
    $model->customer->customerContacts[$index41]->customer->site = $jsonData['customer']['customerContacts'][$index41]['customer']['site'];

}
if (isset($jsonData['customer']['customerContacts'][$index41]['customer']['companies'])) {
    $model->customer->customerContacts[$index41]->customer->companies = [];
foreach (array_keys($jsonData['customer']['customerContacts'][$index41]['customer']['companies']) as $index76) {
    
$model->customer->customerContacts[$index41]->customer->companies[$index76] = new RetailCrm\Api\Model\Entity\CustomersCorporate\CustomerContactCompany();
if (isset($jsonData['customer']['customerContacts'][$index41]['customer']['companies'][$index76]['id'])) {
    $model->customer->customerContacts[$index41]->customer->companies[$index76]->id = $jsonData['customer']['customerContacts'][$index41]['customer']['companies'][$index76]['id'];

}
if (isset($jsonData['customer']['customerContacts'][$index41]['customer']['companies'][$index76]['externalId'])) {
    $model->customer->customerContacts[$index41]->customer->companies[$index76]->externalId = $jsonData['customer']['customerContacts'][$index41]['customer']['companies'][$index76]['externalId'];

}
if (isset($jsonData['customer']['customerContacts'][$index41]['customer']['companies'][$index76]['company'])) {
    
$model->customer->customerContacts[$index41]->customer->companies[$index76]->company = new RetailCrm\Api\Model\Entity\CustomersCorporate\EntityWithExternalIdNameOutput();
if (isset($jsonData['customer']['customerContacts'][$index41]['customer']['companies'][$index76]['company']['id'])) {
    $model->customer->customerContacts[$index41]->customer->companies[$index76]->company->id = $jsonData['customer']['customerContacts'][$index41]['customer']['companies'][$index76]['company']['id'];

}
if (isset($jsonData['customer']['customerContacts'][$index41]['customer']['companies'][$index76]['company']['externalId'])) {
    $model->customer->customerContacts[$index41]->customer->companies[$index76]->company->externalId = $jsonData['customer']['customerContacts'][$index41]['customer']['companies'][$index76]['company']['externalId'];

}
if (isset($jsonData['customer']['customerContacts'][$index41]['customer']['companies'][$index76]['company']['name'])) {
    $model->customer->customerContacts[$index41]->customer->companies[$index76]->company->name = $jsonData['customer']['customerContacts'][$index41]['customer']['companies'][$index76]['company']['name'];

}


}


}

}


}
if (isset($jsonData['customer']['customerContacts'][$index41]['companies'])) {
    $model->customer->customerContacts[$index41]->companies = [];
foreach (array_keys($jsonData['customer']['customerContacts'][$index41]['companies']) as $index64) {
    
$model->customer->customerContacts[$index41]->companies[$index64] = new RetailCrm\Api\Model\Entity\CustomersCorporate\CustomerContactCompany();
if (isset($jsonData['customer']['customerContacts'][$index41]['companies'][$index64]['id'])) {
    $model->customer->customerContacts[$index41]->companies[$index64]->id = $jsonData['customer']['customerContacts'][$index41]['companies'][$index64]['id'];

}
if (isset($jsonData['customer']['customerContacts'][$index41]['companies'][$index64]['externalId'])) {
    $model->customer->customerContacts[$index41]->companies[$index64]->externalId = $jsonData['customer']['customerContacts'][$index41]['companies'][$index64]['externalId'];

}
if (isset($jsonData['customer']['customerContacts'][$index41]['companies'][$index64]['company'])) {
    
$model->customer->customerContacts[$index41]->companies[$index64]->company = new RetailCrm\Api\Model\Entity\CustomersCorporate\EntityWithExternalIdNameOutput();
if (isset($jsonData['customer']['customerContacts'][$index41]['companies'][$index64]['company']['id'])) {
    $model->customer->customerContacts[$index41]->companies[$index64]->company->id = $jsonData['customer']['customerContacts'][$index41]['companies'][$index64]['company']['id'];

}
if (isset($jsonData['customer']['customerContacts'][$index41]['companies'][$index64]['company']['externalId'])) {
    $model->customer->customerContacts[$index41]->companies[$index64]->company->externalId = $jsonData['customer']['customerContacts'][$index41]['companies'][$index64]['company']['externalId'];

}
if (isset($jsonData['customer']['customerContacts'][$index41]['companies'][$index64]['company']['name'])) {
    $model->customer->customerContacts[$index41]->companies[$index64]->company->name = $jsonData['customer']['customerContacts'][$index41]['companies'][$index64]['company']['name'];

}


}


}

}


}

}
if (isset($jsonData['customer']['companies'])) {
    $model->customer->companies = [];
foreach (array_keys($jsonData['customer']['companies']) as $index34) {
    
$model->customer->companies[$index34] = new RetailCrm\Api\Model\Entity\CustomersCorporate\Company();
if (isset($jsonData['customer']['companies'][$index34]['id'])) {
    $model->customer->companies[$index34]->id = $jsonData['customer']['companies'][$index34]['id'];

}
if (isset($jsonData['customer']['companies'][$index34]['isMain'])) {
    $model->customer->companies[$index34]->isMain = $jsonData['customer']['companies'][$index34]['isMain'];

}
if (isset($jsonData['customer']['companies'][$index34]['externalId'])) {
    $model->customer->companies[$index34]->externalId = $jsonData['customer']['companies'][$index34]['externalId'];

}
if (isset($jsonData['customer']['companies'][$index34]['active'])) {
    $model->customer->companies[$index34]->active = $jsonData['customer']['companies'][$index34]['active'];

}
if (isset($jsonData['customer']['companies'][$index34]['name'])) {
    $model->customer->companies[$index34]->name = $jsonData['customer']['companies'][$index34]['name'];

}
if (isset($jsonData['customer']['companies'][$index34]['brand'])) {
    $model->customer->companies[$index34]->brand = $jsonData['customer']['companies'][$index34]['brand'];

}
if (isset($jsonData['customer']['companies'][$index34]['site'])) {
    $model->customer->companies[$index34]->site = $jsonData['customer']['companies'][$index34]['site'];

}
if (isset($jsonData['customer']['companies'][$index34]['createdAt'])) {
    $model->customer->companies[$index34]->createdAt = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['customer']['companies'][$index34]['createdAt']);

}
if (isset($jsonData['customer']['companies'][$index34]['customer'])) {
    
$model->customer->companies[$index34]->customer = new RetailCrm\Api\Model\Entity\CustomersCorporate\SerializedEntityCustomer();
if (isset($jsonData['customer']['companies'][$index34]['customer']['site'])) {
    $model->customer->companies[$index34]->customer->site = $jsonData['customer']['companies'][$index34]['customer']['site'];

}
if (isset($jsonData['customer']['companies'][$index34]['customer']['id'])) {
    $model->customer->companies[$index34]->customer->id = $jsonData['customer']['companies'][$index34]['customer']['id'];

}
if (isset($jsonData['customer']['companies'][$index34]['customer']['externalId'])) {
    $model->customer->companies[$index34]->customer->externalId = $jsonData['customer']['companies'][$index34]['customer']['externalId'];

}
if (isset($jsonData['customer']['companies'][$index34]['customer']['type'])) {
    $model->customer->companies[$index34]->customer->type = $jsonData['customer']['companies'][$index34]['customer']['type'];

}


}
if (isset($jsonData['customer']['companies'][$index34]['contragent'])) {
    
$model->customer->companies[$index34]->contragent = new RetailCrm\Api\Model\Entity\Customers\CustomerContragent();
if (isset($jsonData['customer']['companies'][$index34]['contragent']['contragentType'])) {
    $model->customer->companies[$index34]->contragent->contragentType = $jsonData['customer']['companies'][$index34]['contragent']['contragentType'];

}
if (isset($jsonData['customer']['companies'][$index34]['contragent']['legalName'])) {
    $model->customer->companies[$index34]->contragent->legalName = $jsonData['customer']['companies'][$index34]['contragent']['legalName'];

}
if (isset($jsonData['customer']['companies'][$index34]['contragent']['legalAddress'])) {
    $model->customer->companies[$index34]->contragent->legalAddress = $jsonData['customer']['companies'][$index34]['contragent']['legalAddress'];

}
if (isset($jsonData['customer']['companies'][$index34]['contragent']['INN'])) {
    $model->customer->companies[$index34]->contragent->INN = $jsonData['customer']['companies'][$index34]['contragent']['INN'];

}
if (isset($jsonData['customer']['companies'][$index34]['contragent']['OKPO'])) {
    $model->customer->companies[$index34]->contragent->OKPO = $jsonData['customer']['companies'][$index34]['contragent']['OKPO'];

}
if (isset($jsonData['customer']['companies'][$index34]['contragent']['KPP'])) {
    $model->customer->companies[$index34]->contragent->KPP = $jsonData['customer']['companies'][$index34]['contragent']['KPP'];

}
if (isset($jsonData['customer']['companies'][$index34]['contragent']['OGRN'])) {
    $model->customer->companies[$index34]->contragent->OGRN = $jsonData['customer']['companies'][$index34]['contragent']['OGRN'];

}
if (isset($jsonData['customer']['companies'][$index34]['contragent']['OGRNIP'])) {
    $model->customer->companies[$index34]->contragent->OGRNIP = $jsonData['customer']['companies'][$index34]['contragent']['OGRNIP'];

}
if (isset($jsonData['customer']['companies'][$index34]['contragent']['certificateNumber'])) {
    $model->customer->companies[$index34]->contragent->certificateNumber = $jsonData['customer']['companies'][$index34]['contragent']['certificateNumber'];

}
if (isset($jsonData['customer']['companies'][$index34]['contragent']['certificateDate'])) {
    $model->customer->companies[$index34]->contragent->certificateDate = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['customer']['companies'][$index34]['contragent']['certificateDate']);

}
if (isset($jsonData['customer']['companies'][$index34]['contragent']['BIK'])) {
    $model->customer->companies[$index34]->contragent->BIK = $jsonData['customer']['companies'][$index34]['contragent']['BIK'];

}
if (isset($jsonData['customer']['companies'][$index34]['contragent']['bank'])) {
    $model->customer->companies[$index34]->contragent->bank = $jsonData['customer']['companies'][$index34]['contragent']['bank'];

}
if (isset($jsonData['customer']['companies'][$index34]['contragent']['bankAddress'])) {
    $model->customer->companies[$index34]->contragent->bankAddress = $jsonData['customer']['companies'][$index34]['contragent']['bankAddress'];

}
if (isset($jsonData['customer']['companies'][$index34]['contragent']['corrAccount'])) {
    $model->customer->companies[$index34]->contragent->corrAccount = $jsonData['customer']['companies'][$index34]['contragent']['corrAccount'];

}
if (isset($jsonData['customer']['companies'][$index34]['contragent']['bankAccount'])) {
    $model->customer->companies[$index34]->contragent->bankAccount = $jsonData['customer']['companies'][$index34]['contragent']['bankAccount'];

}


}
if (isset($jsonData['customer']['companies'][$index34]['address'])) {
    
$model->customer->companies[$index34]->address = new RetailCrm\Api\Model\Entity\Customers\CustomerAddress();
if (isset($jsonData['customer']['companies'][$index34]['address']['id'])) {
    $model->customer->companies[$index34]->address->id = $jsonData['customer']['companies'][$index34]['address']['id'];

}
if (isset($jsonData['customer']['companies'][$index34]['address']['name'])) {
    $model->customer->companies[$index34]->address->name = $jsonData['customer']['companies'][$index34]['address']['name'];

}
if (isset($jsonData['customer']['companies'][$index34]['address']['isMain'])) {
    $model->customer->companies[$index34]->address->isMain = $jsonData['customer']['companies'][$index34]['address']['isMain'];

}
if (isset($jsonData['customer']['companies'][$index34]['address']['index'])) {
    $model->customer->companies[$index34]->address->index = $jsonData['customer']['companies'][$index34]['address']['index'];

}
if (isset($jsonData['customer']['companies'][$index34]['address']['countryIso'])) {
    $model->customer->companies[$index34]->address->countryIso = $jsonData['customer']['companies'][$index34]['address']['countryIso'];

}
if (isset($jsonData['customer']['companies'][$index34]['address']['region'])) {
    $model->customer->companies[$index34]->address->region = $jsonData['customer']['companies'][$index34]['address']['region'];

}
if (isset($jsonData['customer']['companies'][$index34]['address']['regionId'])) {
    $model->customer->companies[$index34]->address->regionId = $jsonData['customer']['companies'][$index34]['address']['regionId'];

}
if (isset($jsonData['customer']['companies'][$index34]['address']['city'])) {
    $model->customer->companies[$index34]->address->city = $jsonData['customer']['companies'][$index34]['address']['city'];

}
if (isset($jsonData['customer']['companies'][$index34]['address']['cityId'])) {
    $model->customer->companies[$index34]->address->cityId = $jsonData['customer']['companies'][$index34]['address']['cityId'];

}
if (isset($jsonData['customer']['companies'][$index34]['address']['cityType'])) {
    $model->customer->companies[$index34]->address->cityType = $jsonData['customer']['companies'][$index34]['address']['cityType'];

}
if (isset($jsonData['customer']['companies'][$index34]['address']['street'])) {
    $model->customer->companies[$index34]->address->street = $jsonData['customer']['companies'][$index34]['address']['street'];

}
if (isset($jsonData['customer']['companies'][$index34]['address']['streetId'])) {
    $model->customer->companies[$index34]->address->streetId = $jsonData['customer']['companies'][$index34]['address']['streetId'];

}
if (isset($jsonData['customer']['companies'][$index34]['address']['streetType'])) {
    $model->customer->companies[$index34]->address->streetType = $jsonData['customer']['companies'][$index34]['address']['streetType'];

}
if (isset($jsonData['customer']['companies'][$index34]['address']['building'])) {
    $model->customer->companies[$index34]->address->building = $jsonData['customer']['companies'][$index34]['address']['building'];

}
if (isset($jsonData['customer']['companies'][$index34]['address']['flat'])) {
    $model->customer->companies[$index34]->address->flat = $jsonData['customer']['companies'][$index34]['address']['flat'];

}
if (isset($jsonData['customer']['companies'][$index34]['address']['floor'])) {
    $model->customer->companies[$index34]->address->floor = $jsonData['customer']['companies'][$index34]['address']['floor'];

}
if (isset($jsonData['customer']['companies'][$index34]['address']['block'])) {
    $model->customer->companies[$index34]->address->block = $jsonData['customer']['companies'][$index34]['address']['block'];

}
if (isset($jsonData['customer']['companies'][$index34]['address']['house'])) {
    $model->customer->companies[$index34]->address->house = $jsonData['customer']['companies'][$index34]['address']['house'];

}
if (isset($jsonData['customer']['companies'][$index34]['address']['housing'])) {
    $model->customer->companies[$index34]->address->housing = $jsonData['customer']['companies'][$index34]['address']['housing'];

}
if (isset($jsonData['customer']['companies'][$index34]['address']['metro'])) {
    $model->customer->companies[$index34]->address->metro = $jsonData['customer']['companies'][$index34]['address']['metro'];

}
if (isset($jsonData['customer']['companies'][$index34]['address']['notes'])) {
    $model->customer->companies[$index34]->address->notes = $jsonData['customer']['companies'][$index34]['address']['notes'];

}
if (isset($jsonData['customer']['companies'][$index34]['address']['text'])) {
    $model->customer->companies[$index34]->address->text = $jsonData['customer']['companies'][$index34]['address']['text'];

}
if (isset($jsonData['customer']['companies'][$index34]['address']['externalId'])) {
    $model->customer->companies[$index34]->address->externalId = $jsonData['customer']['companies'][$index34]['address']['externalId'];

}


}
if (isset($jsonData['customer']['companies'][$index34]['customFields'])) {
    $model->customer->companies[$index34]->customFields = [];
foreach (array_keys($jsonData['customer']['companies'][$index34]['customFields']) as $index60) {
    $model->customer->companies[$index34]->customFields[$index60] = $jsonData['customer']['companies'][$index34]['customFields'][$index60];

}

}
if (isset($jsonData['customer']['companies'][$index34]['marginSumm'])) {
    $model->customer->companies[$index34]->marginSumm = (float) $jsonData['customer']['companies'][$index34]['marginSumm'];

}
if (isset($jsonData['customer']['companies'][$index34]['totalSumm'])) {
    $model->customer->companies[$index34]->totalSumm = (float) $jsonData['customer']['companies'][$index34]['totalSumm'];

}
if (isset($jsonData['customer']['companies'][$index34]['averageSumm'])) {
    $model->customer->companies[$index34]->averageSumm = (float) $jsonData['customer']['companies'][$index34]['averageSumm'];

}
if (isset($jsonData['customer']['companies'][$index34]['ordersCount'])) {
    $model->customer->companies[$index34]->ordersCount = $jsonData['customer']['companies'][$index34]['ordersCount'];

}
if (isset($jsonData['customer']['companies'][$index34]['costSumm'])) {
    $model->customer->companies[$index34]->costSumm = (float) $jsonData['customer']['companies'][$index34]['costSumm'];

}


}

}
if (isset($jsonData['customer']['addresses'])) {
    $model->customer->addresses = [];
foreach (array_keys($jsonData['customer']['addresses']) as $index34) {
    
$model->customer->addresses[$index34] = new RetailCrm\Api\Model\Entity\Customers\CustomerAddress();
if (isset($jsonData['customer']['addresses'][$index34]['id'])) {
    $model->customer->addresses[$index34]->id = $jsonData['customer']['addresses'][$index34]['id'];

}
if (isset($jsonData['customer']['addresses'][$index34]['name'])) {
    $model->customer->addresses[$index34]->name = $jsonData['customer']['addresses'][$index34]['name'];

}
if (isset($jsonData['customer']['addresses'][$index34]['isMain'])) {
    $model->customer->addresses[$index34]->isMain = $jsonData['customer']['addresses'][$index34]['isMain'];

}
if (isset($jsonData['customer']['addresses'][$index34]['index'])) {
    $model->customer->addresses[$index34]->index = $jsonData['customer']['addresses'][$index34]['index'];

}
if (isset($jsonData['customer']['addresses'][$index34]['countryIso'])) {
    $model->customer->addresses[$index34]->countryIso = $jsonData['customer']['addresses'][$index34]['countryIso'];

}
if (isset($jsonData['customer']['addresses'][$index34]['region'])) {
    $model->customer->addresses[$index34]->region = $jsonData['customer']['addresses'][$index34]['region'];

}
if (isset($jsonData['customer']['addresses'][$index34]['regionId'])) {
    $model->customer->addresses[$index34]->regionId = $jsonData['customer']['addresses'][$index34]['regionId'];

}
if (isset($jsonData['customer']['addresses'][$index34]['city'])) {
    $model->customer->addresses[$index34]->city = $jsonData['customer']['addresses'][$index34]['city'];

}
if (isset($jsonData['customer']['addresses'][$index34]['cityId'])) {
    $model->customer->addresses[$index34]->cityId = $jsonData['customer']['addresses'][$index34]['cityId'];

}
if (isset($jsonData['customer']['addresses'][$index34]['cityType'])) {
    $model->customer->addresses[$index34]->cityType = $jsonData['customer']['addresses'][$index34]['cityType'];

}
if (isset($jsonData['customer']['addresses'][$index34]['street'])) {
    $model->customer->addresses[$index34]->street = $jsonData['customer']['addresses'][$index34]['street'];

}
if (isset($jsonData['customer']['addresses'][$index34]['streetId'])) {
    $model->customer->addresses[$index34]->streetId = $jsonData['customer']['addresses'][$index34]['streetId'];

}
if (isset($jsonData['customer']['addresses'][$index34]['streetType'])) {
    $model->customer->addresses[$index34]->streetType = $jsonData['customer']['addresses'][$index34]['streetType'];

}
if (isset($jsonData['customer']['addresses'][$index34]['building'])) {
    $model->customer->addresses[$index34]->building = $jsonData['customer']['addresses'][$index34]['building'];

}
if (isset($jsonData['customer']['addresses'][$index34]['flat'])) {
    $model->customer->addresses[$index34]->flat = $jsonData['customer']['addresses'][$index34]['flat'];

}
if (isset($jsonData['customer']['addresses'][$index34]['floor'])) {
    $model->customer->addresses[$index34]->floor = $jsonData['customer']['addresses'][$index34]['floor'];

}
if (isset($jsonData['customer']['addresses'][$index34]['block'])) {
    $model->customer->addresses[$index34]->block = $jsonData['customer']['addresses'][$index34]['block'];

}
if (isset($jsonData['customer']['addresses'][$index34]['house'])) {
    $model->customer->addresses[$index34]->house = $jsonData['customer']['addresses'][$index34]['house'];

}
if (isset($jsonData['customer']['addresses'][$index34]['housing'])) {
    $model->customer->addresses[$index34]->housing = $jsonData['customer']['addresses'][$index34]['housing'];

}
if (isset($jsonData['customer']['addresses'][$index34]['metro'])) {
    $model->customer->addresses[$index34]->metro = $jsonData['customer']['addresses'][$index34]['metro'];

}
if (isset($jsonData['customer']['addresses'][$index34]['notes'])) {
    $model->customer->addresses[$index34]->notes = $jsonData['customer']['addresses'][$index34]['notes'];

}
if (isset($jsonData['customer']['addresses'][$index34]['text'])) {
    $model->customer->addresses[$index34]->text = $jsonData['customer']['addresses'][$index34]['text'];

}
if (isset($jsonData['customer']['addresses'][$index34]['externalId'])) {
    $model->customer->addresses[$index34]->externalId = $jsonData['customer']['addresses'][$index34]['externalId'];

}


}

}
if (isset($jsonData['customer']['vip'])) {
    $model->customer->vip = $jsonData['customer']['vip'];

}
if (isset($jsonData['customer']['bad'])) {
    $model->customer->bad = $jsonData['customer']['bad'];

}
if (isset($jsonData['customer']['site'])) {
    $model->customer->site = $jsonData['customer']['site'];

}
if (isset($jsonData['customer']['tags'])) {
    $model->customer->tags = [];
foreach (array_keys($jsonData['customer']['tags']) as $index29) {
    
$model->customer->tags[$index29] = new RetailCrm\Api\Model\Entity\Customers\CustomerTag();
if (isset($jsonData['customer']['tags'][$index29]['name'])) {
    $model->customer->tags[$index29]->name = $jsonData['customer']['tags'][$index29]['name'];

}
if (isset($jsonData['customer']['tags'][$index29]['color'])) {
    $model->customer->tags[$index29]->color = $jsonData['customer']['tags'][$index29]['color'];

}
if (isset($jsonData['customer']['tags'][$index29]['attached'])) {
    $model->customer->tags[$index29]->attached = $jsonData['customer']['tags'][$index29]['attached'];

}


}

}
if (isset($jsonData['customer']['avgMarginSumm'])) {
    $model->customer->avgMarginSumm = (float) $jsonData['customer']['avgMarginSumm'];

}
if (isset($jsonData['customer']['marginSumm'])) {
    $model->customer->marginSumm = (float) $jsonData['customer']['marginSumm'];

}
if (isset($jsonData['customer']['totalSumm'])) {
    $model->customer->totalSumm = (float) $jsonData['customer']['totalSumm'];

}
if (isset($jsonData['customer']['averageSumm'])) {
    $model->customer->averageSumm = (float) $jsonData['customer']['averageSumm'];

}
if (isset($jsonData['customer']['ordersCount'])) {
    $model->customer->ordersCount = $jsonData['customer']['ordersCount'];

}
if (isset($jsonData['customer']['costSumm'])) {
    $model->customer->costSumm = (float) $jsonData['customer']['costSumm'];

}
if (isset($jsonData['customer']['customFields'])) {
    $model->customer->customFields = [];
foreach (array_keys($jsonData['customer']['customFields']) as $index37) {
    $model->customer->customFields[$index37] = $jsonData['customer']['customFields'][$index37];

}

}
if (isset($jsonData['customer']['personalDiscount'])) {
    $model->customer->personalDiscount = (float) $jsonData['customer']['personalDiscount'];

}
if (isset($jsonData['customer']['cumulativeDiscount'])) {
    $model->customer->cumulativeDiscount = (float) $jsonData['customer']['cumulativeDiscount'];

}
if (isset($jsonData['customer']['discountCardNumber'])) {
    $model->customer->discountCardNumber = $jsonData['customer']['discountCardNumber'];

}
if (isset($jsonData['customer']['firstClientId'])) {
    $model->customer->firstClientId = $jsonData['customer']['firstClientId'];

}
if (isset($jsonData['customer']['lastClientId'])) {
    $model->customer->lastClientId = $jsonData['customer']['lastClientId'];

}
if (isset($jsonData['customer']['mainCustomerContact'])) {
    
$model->customer->mainCustomerContact = new RetailCrm\Api\Model\Entity\CustomersCorporate\CustomerContact();
if (isset($jsonData['customer']['mainCustomerContact']['id'])) {
    $model->customer->mainCustomerContact->id = $jsonData['customer']['mainCustomerContact']['id'];

}
if (isset($jsonData['customer']['mainCustomerContact']['isMain'])) {
    $model->customer->mainCustomerContact->isMain = $jsonData['customer']['mainCustomerContact']['isMain'];

}
if (isset($jsonData['customer']['mainCustomerContact']['customer'])) {
    
$model->customer->mainCustomerContact->customer = new RetailCrm\Api\Model\Entity\CustomersCorporate\SerializedRelationAbstractCustomer();
if (isset($jsonData['customer']['mainCustomerContact']['customer']['id'])) {
    $model->customer->mainCustomerContact->customer->id = $jsonData['customer']['mainCustomerContact']['customer']['id'];

}
if (isset($jsonData['customer']['mainCustomerContact']['customer']['externalId'])) {
    $model->customer->mainCustomerContact->customer->externalId = $jsonData['customer']['mainCustomerContact']['customer']['externalId'];

}
if (isset($jsonData['customer']['mainCustomerContact']['customer']['browserId'])) {
    $model->customer->mainCustomerContact->customer->browserId = $jsonData['customer']['mainCustomerContact']['customer']['browserId'];

}
if (isset($jsonData['customer']['mainCustomerContact']['customer']['site'])) {
    $model->customer->mainCustomerContact->customer->site = $jsonData['customer']['mainCustomerContact']['customer']['site'];

}
if (isset($jsonData['customer']['mainCustomerContact']['customer']['companies'])) {
    $model->customer->mainCustomerContact->customer->companies = [];
foreach (array_keys($jsonData['customer']['mainCustomerContact']['customer']['companies']) as $index69) {
    
$model->customer->mainCustomerContact->customer->companies[$index69] = new RetailCrm\Api\Model\Entity\CustomersCorporate\CustomerContactCompany();
if (isset($jsonData['customer']['mainCustomerContact']['customer']['companies'][$index69]['id'])) {
    $model->customer->mainCustomerContact->customer->companies[$index69]->id = $jsonData['customer']['mainCustomerContact']['customer']['companies'][$index69]['id'];

}
if (isset($jsonData['customer']['mainCustomerContact']['customer']['companies'][$index69]['externalId'])) {
    $model->customer->mainCustomerContact->customer->companies[$index69]->externalId = $jsonData['customer']['mainCustomerContact']['customer']['companies'][$index69]['externalId'];

}
if (isset($jsonData['customer']['mainCustomerContact']['customer']['companies'][$index69]['company'])) {
    
$model->customer->mainCustomerContact->customer->companies[$index69]->company = new RetailCrm\Api\Model\Entity\CustomersCorporate\EntityWithExternalIdNameOutput();
if (isset($jsonData['customer']['mainCustomerContact']['customer']['companies'][$index69]['company']['id'])) {
    $model->customer->mainCustomerContact->customer->companies[$index69]->company->id = $jsonData['customer']['mainCustomerContact']['customer']['companies'][$index69]['company']['id'];

}
if (isset($jsonData['customer']['mainCustomerContact']['customer']['companies'][$index69]['company']['externalId'])) {
    $model->customer->mainCustomerContact->customer->companies[$index69]->company->externalId = $jsonData['customer']['mainCustomerContact']['customer']['companies'][$index69]['company']['externalId'];

}
if (isset($jsonData['customer']['mainCustomerContact']['customer']['companies'][$index69]['company']['name'])) {
    $model->customer->mainCustomerContact->customer->companies[$index69]->company->name = $jsonData['customer']['mainCustomerContact']['customer']['companies'][$index69]['company']['name'];

}


}


}

}


}
if (isset($jsonData['customer']['mainCustomerContact']['companies'])) {
    $model->customer->mainCustomerContact->companies = [];
foreach (array_keys($jsonData['customer']['mainCustomerContact']['companies']) as $index57) {
    
$model->customer->mainCustomerContact->companies[$index57] = new RetailCrm\Api\Model\Entity\CustomersCorporate\CustomerContactCompany();
if (isset($jsonData['customer']['mainCustomerContact']['companies'][$index57]['id'])) {
    $model->customer->mainCustomerContact->companies[$index57]->id = $jsonData['customer']['mainCustomerContact']['companies'][$index57]['id'];

}
if (isset($jsonData['customer']['mainCustomerContact']['companies'][$index57]['externalId'])) {
    $model->customer->mainCustomerContact->companies[$index57]->externalId = $jsonData['customer']['mainCustomerContact']['companies'][$index57]['externalId'];

}
if (isset($jsonData['customer']['mainCustomerContact']['companies'][$index57]['company'])) {
    
$model->customer->mainCustomerContact->companies[$index57]->company = new RetailCrm\Api\Model\Entity\CustomersCorporate\EntityWithExternalIdNameOutput();
if (isset($jsonData['customer']['mainCustomerContact']['companies'][$index57]['company']['id'])) {
    $model->customer->mainCustomerContact->companies[$index57]->company->id = $jsonData['customer']['mainCustomerContact']['companies'][$index57]['company']['id'];

}
if (isset($jsonData['customer']['mainCustomerContact']['companies'][$index57]['company']['externalId'])) {
    $model->customer->mainCustomerContact->companies[$index57]->company->externalId = $jsonData['customer']['mainCustomerContact']['companies'][$index57]['company']['externalId'];

}
if (isset($jsonData['customer']['mainCustomerContact']['companies'][$index57]['company']['name'])) {
    $model->customer->mainCustomerContact->companies[$index57]->company->name = $jsonData['customer']['mainCustomerContact']['companies'][$index57]['company']['name'];

}


}


}

}


}
if (isset($jsonData['customer']['mainCompany'])) {
    
$model->customer->mainCompany = new RetailCrm\Api\Model\Entity\CustomersCorporate\EntityWithExternalIdNameOutput();
if (isset($jsonData['customer']['mainCompany']['id'])) {
    $model->customer->mainCompany->id = $jsonData['customer']['mainCompany']['id'];

}
if (isset($jsonData['customer']['mainCompany']['externalId'])) {
    $model->customer->mainCompany->externalId = $jsonData['customer']['mainCompany']['externalId'];

}
if (isset($jsonData['customer']['mainCompany']['name'])) {
    $model->customer->mainCompany->name = $jsonData['customer']['mainCompany']['name'];

}


}


}
if (isset($jsonData['address'])) {
    
$model->address = new RetailCrm\Api\Model\Entity\Customers\CustomerAddress();
if (isset($jsonData['address']['id'])) {
    $model->address->id = $jsonData['address']['id'];

}
if (isset($jsonData['address']['name'])) {
    $model->address->name = $jsonData['address']['name'];

}
if (isset($jsonData['address']['isMain'])) {
    $model->address->isMain = $jsonData['address']['isMain'];

}
if (isset($jsonData['address']['index'])) {
    $model->address->index = $jsonData['address']['index'];

}
if (isset($jsonData['address']['countryIso'])) {
    $model->address->countryIso = $jsonData['address']['countryIso'];

}
if (isset($jsonData['address']['region'])) {
    $model->address->region = $jsonData['address']['region'];

}
if (isset($jsonData['address']['regionId'])) {
    $model->address->regionId = $jsonData['address']['regionId'];

}
if (isset($jsonData['address']['city'])) {
    $model->address->city = $jsonData['address']['city'];

}
if (isset($jsonData['address']['cityId'])) {
    $model->address->cityId = $jsonData['address']['cityId'];

}
if (isset($jsonData['address']['cityType'])) {
    $model->address->cityType = $jsonData['address']['cityType'];

}
if (isset($jsonData['address']['street'])) {
    $model->address->street = $jsonData['address']['street'];

}
if (isset($jsonData['address']['streetId'])) {
    $model->address->streetId = $jsonData['address']['streetId'];

}
if (isset($jsonData['address']['streetType'])) {
    $model->address->streetType = $jsonData['address']['streetType'];

}
if (isset($jsonData['address']['building'])) {
    $model->address->building = $jsonData['address']['building'];

}
if (isset($jsonData['address']['flat'])) {
    $model->address->flat = $jsonData['address']['flat'];

}
if (isset($jsonData['address']['floor'])) {
    $model->address->floor = $jsonData['address']['floor'];

}
if (isset($jsonData['address']['block'])) {
    $model->address->block = $jsonData['address']['block'];

}
if (isset($jsonData['address']['house'])) {
    $model->address->house = $jsonData['address']['house'];

}
if (isset($jsonData['address']['housing'])) {
    $model->address->housing = $jsonData['address']['housing'];

}
if (isset($jsonData['address']['metro'])) {
    $model->address->metro = $jsonData['address']['metro'];

}
if (isset($jsonData['address']['notes'])) {
    $model->address->notes = $jsonData['address']['notes'];

}
if (isset($jsonData['address']['text'])) {
    $model->address->text = $jsonData['address']['text'];

}
if (isset($jsonData['address']['externalId'])) {
    $model->address->externalId = $jsonData['address']['externalId'];

}


}
if (isset($jsonData['combinedTo'])) {
    
$model->combinedTo = new RetailCrm\Api\Model\Entity\CustomersCorporate\CustomerCorporate();
if (isset($jsonData['combinedTo']['type'])) {
    $model->combinedTo->type = $jsonData['combinedTo']['type'];

}
if (isset($jsonData['combinedTo']['id'])) {
    $model->combinedTo->id = $jsonData['combinedTo']['id'];

}
if (isset($jsonData['combinedTo']['externalId'])) {
    $model->combinedTo->externalId = $jsonData['combinedTo']['externalId'];

}
if (isset($jsonData['combinedTo']['nickName'])) {
    $model->combinedTo->nickName = $jsonData['combinedTo']['nickName'];

}
if (isset($jsonData['combinedTo']['mainAddress'])) {
    
$model->combinedTo->mainAddress = new RetailCrm\Api\Model\Entity\CustomersCorporate\EntityWithExternalIdNameOutput();
if (isset($jsonData['combinedTo']['mainAddress']['id'])) {
    $model->combinedTo->mainAddress->id = $jsonData['combinedTo']['mainAddress']['id'];

}
if (isset($jsonData['combinedTo']['mainAddress']['externalId'])) {
    $model->combinedTo->mainAddress->externalId = $jsonData['combinedTo']['mainAddress']['externalId'];

}
if (isset($jsonData['combinedTo']['mainAddress']['name'])) {
    $model->combinedTo->mainAddress->name = $jsonData['combinedTo']['mainAddress']['name'];

}


}
if (isset($jsonData['combinedTo']['createdAt'])) {
    $model->combinedTo->createdAt = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['combinedTo']['createdAt']);

}
if (isset($jsonData['combinedTo']['managerId'])) {
    $model->combinedTo->managerId = $jsonData['combinedTo']['managerId'];

}
if (isset($jsonData['combinedTo']['source'])) {
    
$model->combinedTo->source = new RetailCrm\Api\Model\Entity\Source();
if (isset($jsonData['combinedTo']['source']['source'])) {
    $model->combinedTo->source->source = $jsonData['combinedTo']['source']['source'];

}
if (isset($jsonData['combinedTo']['source']['medium'])) {
    $model->combinedTo->source->medium = $jsonData['combinedTo']['source']['medium'];

}
if (isset($jsonData['combinedTo']['source']['campaign'])) {
    $model->combinedTo->source->campaign = $jsonData['combinedTo']['source']['campaign'];

}
if (isset($jsonData['combinedTo']['source']['keyword'])) {
    $model->combinedTo->source->keyword = $jsonData['combinedTo']['source']['keyword'];

}
if (isset($jsonData['combinedTo']['source']['content'])) {
    $model->combinedTo->source->content = $jsonData['combinedTo']['source']['content'];

}


}
if (isset($jsonData['combinedTo']['customerContacts'])) {
    $model->combinedTo->customerContacts = [];
foreach (array_keys($jsonData['combinedTo']['customerContacts']) as $index43) {
    
$model->combinedTo->customerContacts[$index43] = new RetailCrm\Api\Model\Entity\CustomersCorporate\CustomerContact();
if (isset($jsonData['combinedTo']['customerContacts'][$index43]['id'])) {
    $model->combinedTo->customerContacts[$index43]->id = $jsonData['combinedTo']['customerContacts'][$index43]['id'];

}
if (isset($jsonData['combinedTo']['customerContacts'][$index43]['isMain'])) {
    $model->combinedTo->customerContacts[$index43]->isMain = $jsonData['combinedTo']['customerContacts'][$index43]['isMain'];

}
if (isset($jsonData['combinedTo']['customerContacts'][$index43]['customer'])) {
    
$model->combinedTo->customerContacts[$index43]->customer = new RetailCrm\Api\Model\Entity\CustomersCorporate\SerializedRelationAbstractCustomer();
if (isset($jsonData['combinedTo']['customerContacts'][$index43]['customer']['id'])) {
    $model->combinedTo->customerContacts[$index43]->customer->id = $jsonData['combinedTo']['customerContacts'][$index43]['customer']['id'];

}
if (isset($jsonData['combinedTo']['customerContacts'][$index43]['customer']['externalId'])) {
    $model->combinedTo->customerContacts[$index43]->customer->externalId = $jsonData['combinedTo']['customerContacts'][$index43]['customer']['externalId'];

}
if (isset($jsonData['combinedTo']['customerContacts'][$index43]['customer']['browserId'])) {
    $model->combinedTo->customerContacts[$index43]->customer->browserId = $jsonData['combinedTo']['customerContacts'][$index43]['customer']['browserId'];

}
if (isset($jsonData['combinedTo']['customerContacts'][$index43]['customer']['site'])) {
    $model->combinedTo->customerContacts[$index43]->customer->site = $jsonData['combinedTo']['customerContacts'][$index43]['customer']['site'];

}
if (isset($jsonData['combinedTo']['customerContacts'][$index43]['customer']['companies'])) {
    $model->combinedTo->customerContacts[$index43]->customer->companies = [];
foreach (array_keys($jsonData['combinedTo']['customerContacts'][$index43]['customer']['companies']) as $index78) {
    
$model->combinedTo->customerContacts[$index43]->customer->companies[$index78] = new RetailCrm\Api\Model\Entity\CustomersCorporate\CustomerContactCompany();
if (isset($jsonData['combinedTo']['customerContacts'][$index43]['customer']['companies'][$index78]['id'])) {
    $model->combinedTo->customerContacts[$index43]->customer->companies[$index78]->id = $jsonData['combinedTo']['customerContacts'][$index43]['customer']['companies'][$index78]['id'];

}
if (isset($jsonData['combinedTo']['customerContacts'][$index43]['customer']['companies'][$index78]['externalId'])) {
    $model->combinedTo->customerContacts[$index43]->customer->companies[$index78]->externalId = $jsonData['combinedTo']['customerContacts'][$index43]['customer']['companies'][$index78]['externalId'];

}
if (isset($jsonData['combinedTo']['customerContacts'][$index43]['customer']['companies'][$index78]['company'])) {
    
$model->combinedTo->customerContacts[$index43]->customer->companies[$index78]->company = new RetailCrm\Api\Model\Entity\CustomersCorporate\EntityWithExternalIdNameOutput();
if (isset($jsonData['combinedTo']['customerContacts'][$index43]['customer']['companies'][$index78]['company']['id'])) {
    $model->combinedTo->customerContacts[$index43]->customer->companies[$index78]->company->id = $jsonData['combinedTo']['customerContacts'][$index43]['customer']['companies'][$index78]['company']['id'];

}
if (isset($jsonData['combinedTo']['customerContacts'][$index43]['customer']['companies'][$index78]['company']['externalId'])) {
    $model->combinedTo->customerContacts[$index43]->customer->companies[$index78]->company->externalId = $jsonData['combinedTo']['customerContacts'][$index43]['customer']['companies'][$index78]['company']['externalId'];

}
if (isset($jsonData['combinedTo']['customerContacts'][$index43]['customer']['companies'][$index78]['company']['name'])) {
    $model->combinedTo->customerContacts[$index43]->customer->companies[$index78]->company->name = $jsonData['combinedTo']['customerContacts'][$index43]['customer']['companies'][$index78]['company']['name'];

}


}


}

}


}
if (isset($jsonData['combinedTo']['customerContacts'][$index43]['companies'])) {
    $model->combinedTo->customerContacts[$index43]->companies = [];
foreach (array_keys($jsonData['combinedTo']['customerContacts'][$index43]['companies']) as $index66) {
    
$model->combinedTo->customerContacts[$index43]->companies[$index66] = new RetailCrm\Api\Model\Entity\CustomersCorporate\CustomerContactCompany();
if (isset($jsonData['combinedTo']['customerContacts'][$index43]['companies'][$index66]['id'])) {
    $model->combinedTo->customerContacts[$index43]->companies[$index66]->id = $jsonData['combinedTo']['customerContacts'][$index43]['companies'][$index66]['id'];

}
if (isset($jsonData['combinedTo']['customerContacts'][$index43]['companies'][$index66]['externalId'])) {
    $model->combinedTo->customerContacts[$index43]->companies[$index66]->externalId = $jsonData['combinedTo']['customerContacts'][$index43]['companies'][$index66]['externalId'];

}
if (isset($jsonData['combinedTo']['customerContacts'][$index43]['companies'][$index66]['company'])) {
    
$model->combinedTo->customerContacts[$index43]->companies[$index66]->company = new RetailCrm\Api\Model\Entity\CustomersCorporate\EntityWithExternalIdNameOutput();
if (isset($jsonData['combinedTo']['customerContacts'][$index43]['companies'][$index66]['company']['id'])) {
    $model->combinedTo->customerContacts[$index43]->companies[$index66]->company->id = $jsonData['combinedTo']['customerContacts'][$index43]['companies'][$index66]['company']['id'];

}
if (isset($jsonData['combinedTo']['customerContacts'][$index43]['companies'][$index66]['company']['externalId'])) {
    $model->combinedTo->customerContacts[$index43]->companies[$index66]->company->externalId = $jsonData['combinedTo']['customerContacts'][$index43]['companies'][$index66]['company']['externalId'];

}
if (isset($jsonData['combinedTo']['customerContacts'][$index43]['companies'][$index66]['company']['name'])) {
    $model->combinedTo->customerContacts[$index43]->companies[$index66]->company->name = $jsonData['combinedTo']['customerContacts'][$index43]['companies'][$index66]['company']['name'];

}


}


}

}


}

}
if (isset($jsonData['combinedTo']['companies'])) {
    $model->combinedTo->companies = [];
foreach (array_keys($jsonData['combinedTo']['companies']) as $index36) {
    
$model->combinedTo->companies[$index36] = new RetailCrm\Api\Model\Entity\CustomersCorporate\Company();
if (isset($jsonData['combinedTo']['companies'][$index36]['id'])) {
    $model->combinedTo->companies[$index36]->id = $jsonData['combinedTo']['companies'][$index36]['id'];

}
if (isset($jsonData['combinedTo']['companies'][$index36]['isMain'])) {
    $model->combinedTo->companies[$index36]->isMain = $jsonData['combinedTo']['companies'][$index36]['isMain'];

}
if (isset($jsonData['combinedTo']['companies'][$index36]['externalId'])) {
    $model->combinedTo->companies[$index36]->externalId = $jsonData['combinedTo']['companies'][$index36]['externalId'];

}
if (isset($jsonData['combinedTo']['companies'][$index36]['active'])) {
    $model->combinedTo->companies[$index36]->active = $jsonData['combinedTo']['companies'][$index36]['active'];

}
if (isset($jsonData['combinedTo']['companies'][$index36]['name'])) {
    $model->combinedTo->companies[$index36]->name = $jsonData['combinedTo']['companies'][$index36]['name'];

}
if (isset($jsonData['combinedTo']['companies'][$index36]['brand'])) {
    $model->combinedTo->companies[$index36]->brand = $jsonData['combinedTo']['companies'][$index36]['brand'];

}
if (isset($jsonData['combinedTo']['companies'][$index36]['site'])) {
    $model->combinedTo->companies[$index36]->site = $jsonData['combinedTo']['companies'][$index36]['site'];

}
if (isset($jsonData['combinedTo']['companies'][$index36]['createdAt'])) {
    $model->combinedTo->companies[$index36]->createdAt = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['combinedTo']['companies'][$index36]['createdAt']);

}
if (isset($jsonData['combinedTo']['companies'][$index36]['customer'])) {
    
$model->combinedTo->companies[$index36]->customer = new RetailCrm\Api\Model\Entity\CustomersCorporate\SerializedEntityCustomer();
if (isset($jsonData['combinedTo']['companies'][$index36]['customer']['site'])) {
    $model->combinedTo->companies[$index36]->customer->site = $jsonData['combinedTo']['companies'][$index36]['customer']['site'];

}
if (isset($jsonData['combinedTo']['companies'][$index36]['customer']['id'])) {
    $model->combinedTo->companies[$index36]->customer->id = $jsonData['combinedTo']['companies'][$index36]['customer']['id'];

}
if (isset($jsonData['combinedTo']['companies'][$index36]['customer']['externalId'])) {
    $model->combinedTo->companies[$index36]->customer->externalId = $jsonData['combinedTo']['companies'][$index36]['customer']['externalId'];

}
if (isset($jsonData['combinedTo']['companies'][$index36]['customer']['type'])) {
    $model->combinedTo->companies[$index36]->customer->type = $jsonData['combinedTo']['companies'][$index36]['customer']['type'];

}


}
if (isset($jsonData['combinedTo']['companies'][$index36]['contragent'])) {
    
$model->combinedTo->companies[$index36]->contragent = new RetailCrm\Api\Model\Entity\Customers\CustomerContragent();
if (isset($jsonData['combinedTo']['companies'][$index36]['contragent']['contragentType'])) {
    $model->combinedTo->companies[$index36]->contragent->contragentType = $jsonData['combinedTo']['companies'][$index36]['contragent']['contragentType'];

}
if (isset($jsonData['combinedTo']['companies'][$index36]['contragent']['legalName'])) {
    $model->combinedTo->companies[$index36]->contragent->legalName = $jsonData['combinedTo']['companies'][$index36]['contragent']['legalName'];

}
if (isset($jsonData['combinedTo']['companies'][$index36]['contragent']['legalAddress'])) {
    $model->combinedTo->companies[$index36]->contragent->legalAddress = $jsonData['combinedTo']['companies'][$index36]['contragent']['legalAddress'];

}
if (isset($jsonData['combinedTo']['companies'][$index36]['contragent']['INN'])) {
    $model->combinedTo->companies[$index36]->contragent->INN = $jsonData['combinedTo']['companies'][$index36]['contragent']['INN'];

}
if (isset($jsonData['combinedTo']['companies'][$index36]['contragent']['OKPO'])) {
    $model->combinedTo->companies[$index36]->contragent->OKPO = $jsonData['combinedTo']['companies'][$index36]['contragent']['OKPO'];

}
if (isset($jsonData['combinedTo']['companies'][$index36]['contragent']['KPP'])) {
    $model->combinedTo->companies[$index36]->contragent->KPP = $jsonData['combinedTo']['companies'][$index36]['contragent']['KPP'];

}
if (isset($jsonData['combinedTo']['companies'][$index36]['contragent']['OGRN'])) {
    $model->combinedTo->companies[$index36]->contragent->OGRN = $jsonData['combinedTo']['companies'][$index36]['contragent']['OGRN'];

}
if (isset($jsonData['combinedTo']['companies'][$index36]['contragent']['OGRNIP'])) {
    $model->combinedTo->companies[$index36]->contragent->OGRNIP = $jsonData['combinedTo']['companies'][$index36]['contragent']['OGRNIP'];

}
if (isset($jsonData['combinedTo']['companies'][$index36]['contragent']['certificateNumber'])) {
    $model->combinedTo->companies[$index36]->contragent->certificateNumber = $jsonData['combinedTo']['companies'][$index36]['contragent']['certificateNumber'];

}
if (isset($jsonData['combinedTo']['companies'][$index36]['contragent']['certificateDate'])) {
    $model->combinedTo->companies[$index36]->contragent->certificateDate = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['combinedTo']['companies'][$index36]['contragent']['certificateDate']);

}
if (isset($jsonData['combinedTo']['companies'][$index36]['contragent']['BIK'])) {
    $model->combinedTo->companies[$index36]->contragent->BIK = $jsonData['combinedTo']['companies'][$index36]['contragent']['BIK'];

}
if (isset($jsonData['combinedTo']['companies'][$index36]['contragent']['bank'])) {
    $model->combinedTo->companies[$index36]->contragent->bank = $jsonData['combinedTo']['companies'][$index36]['contragent']['bank'];

}
if (isset($jsonData['combinedTo']['companies'][$index36]['contragent']['bankAddress'])) {
    $model->combinedTo->companies[$index36]->contragent->bankAddress = $jsonData['combinedTo']['companies'][$index36]['contragent']['bankAddress'];

}
if (isset($jsonData['combinedTo']['companies'][$index36]['contragent']['corrAccount'])) {
    $model->combinedTo->companies[$index36]->contragent->corrAccount = $jsonData['combinedTo']['companies'][$index36]['contragent']['corrAccount'];

}
if (isset($jsonData['combinedTo']['companies'][$index36]['contragent']['bankAccount'])) {
    $model->combinedTo->companies[$index36]->contragent->bankAccount = $jsonData['combinedTo']['companies'][$index36]['contragent']['bankAccount'];

}


}
if (isset($jsonData['combinedTo']['companies'][$index36]['address'])) {
    
$model->combinedTo->companies[$index36]->address = new RetailCrm\Api\Model\Entity\Customers\CustomerAddress();
if (isset($jsonData['combinedTo']['companies'][$index36]['address']['id'])) {
    $model->combinedTo->companies[$index36]->address->id = $jsonData['combinedTo']['companies'][$index36]['address']['id'];

}
if (isset($jsonData['combinedTo']['companies'][$index36]['address']['name'])) {
    $model->combinedTo->companies[$index36]->address->name = $jsonData['combinedTo']['companies'][$index36]['address']['name'];

}
if (isset($jsonData['combinedTo']['companies'][$index36]['address']['isMain'])) {
    $model->combinedTo->companies[$index36]->address->isMain = $jsonData['combinedTo']['companies'][$index36]['address']['isMain'];

}
if (isset($jsonData['combinedTo']['companies'][$index36]['address']['index'])) {
    $model->combinedTo->companies[$index36]->address->index = $jsonData['combinedTo']['companies'][$index36]['address']['index'];

}
if (isset($jsonData['combinedTo']['companies'][$index36]['address']['countryIso'])) {
    $model->combinedTo->companies[$index36]->address->countryIso = $jsonData['combinedTo']['companies'][$index36]['address']['countryIso'];

}
if (isset($jsonData['combinedTo']['companies'][$index36]['address']['region'])) {
    $model->combinedTo->companies[$index36]->address->region = $jsonData['combinedTo']['companies'][$index36]['address']['region'];

}
if (isset($jsonData['combinedTo']['companies'][$index36]['address']['regionId'])) {
    $model->combinedTo->companies[$index36]->address->regionId = $jsonData['combinedTo']['companies'][$index36]['address']['regionId'];

}
if (isset($jsonData['combinedTo']['companies'][$index36]['address']['city'])) {
    $model->combinedTo->companies[$index36]->address->city = $jsonData['combinedTo']['companies'][$index36]['address']['city'];

}
if (isset($jsonData['combinedTo']['companies'][$index36]['address']['cityId'])) {
    $model->combinedTo->companies[$index36]->address->cityId = $jsonData['combinedTo']['companies'][$index36]['address']['cityId'];

}
if (isset($jsonData['combinedTo']['companies'][$index36]['address']['cityType'])) {
    $model->combinedTo->companies[$index36]->address->cityType = $jsonData['combinedTo']['companies'][$index36]['address']['cityType'];

}
if (isset($jsonData['combinedTo']['companies'][$index36]['address']['street'])) {
    $model->combinedTo->companies[$index36]->address->street = $jsonData['combinedTo']['companies'][$index36]['address']['street'];

}
if (isset($jsonData['combinedTo']['companies'][$index36]['address']['streetId'])) {
    $model->combinedTo->companies[$index36]->address->streetId = $jsonData['combinedTo']['companies'][$index36]['address']['streetId'];

}
if (isset($jsonData['combinedTo']['companies'][$index36]['address']['streetType'])) {
    $model->combinedTo->companies[$index36]->address->streetType = $jsonData['combinedTo']['companies'][$index36]['address']['streetType'];

}
if (isset($jsonData['combinedTo']['companies'][$index36]['address']['building'])) {
    $model->combinedTo->companies[$index36]->address->building = $jsonData['combinedTo']['companies'][$index36]['address']['building'];

}
if (isset($jsonData['combinedTo']['companies'][$index36]['address']['flat'])) {
    $model->combinedTo->companies[$index36]->address->flat = $jsonData['combinedTo']['companies'][$index36]['address']['flat'];

}
if (isset($jsonData['combinedTo']['companies'][$index36]['address']['floor'])) {
    $model->combinedTo->companies[$index36]->address->floor = $jsonData['combinedTo']['companies'][$index36]['address']['floor'];

}
if (isset($jsonData['combinedTo']['companies'][$index36]['address']['block'])) {
    $model->combinedTo->companies[$index36]->address->block = $jsonData['combinedTo']['companies'][$index36]['address']['block'];

}
if (isset($jsonData['combinedTo']['companies'][$index36]['address']['house'])) {
    $model->combinedTo->companies[$index36]->address->house = $jsonData['combinedTo']['companies'][$index36]['address']['house'];

}
if (isset($jsonData['combinedTo']['companies'][$index36]['address']['housing'])) {
    $model->combinedTo->companies[$index36]->address->housing = $jsonData['combinedTo']['companies'][$index36]['address']['housing'];

}
if (isset($jsonData['combinedTo']['companies'][$index36]['address']['metro'])) {
    $model->combinedTo->companies[$index36]->address->metro = $jsonData['combinedTo']['companies'][$index36]['address']['metro'];

}
if (isset($jsonData['combinedTo']['companies'][$index36]['address']['notes'])) {
    $model->combinedTo->companies[$index36]->address->notes = $jsonData['combinedTo']['companies'][$index36]['address']['notes'];

}
if (isset($jsonData['combinedTo']['companies'][$index36]['address']['text'])) {
    $model->combinedTo->companies[$index36]->address->text = $jsonData['combinedTo']['companies'][$index36]['address']['text'];

}
if (isset($jsonData['combinedTo']['companies'][$index36]['address']['externalId'])) {
    $model->combinedTo->companies[$index36]->address->externalId = $jsonData['combinedTo']['companies'][$index36]['address']['externalId'];

}


}
if (isset($jsonData['combinedTo']['companies'][$index36]['customFields'])) {
    $model->combinedTo->companies[$index36]->customFields = [];
foreach (array_keys($jsonData['combinedTo']['companies'][$index36]['customFields']) as $index62) {
    $model->combinedTo->companies[$index36]->customFields[$index62] = $jsonData['combinedTo']['companies'][$index36]['customFields'][$index62];

}

}
if (isset($jsonData['combinedTo']['companies'][$index36]['marginSumm'])) {
    $model->combinedTo->companies[$index36]->marginSumm = (float) $jsonData['combinedTo']['companies'][$index36]['marginSumm'];

}
if (isset($jsonData['combinedTo']['companies'][$index36]['totalSumm'])) {
    $model->combinedTo->companies[$index36]->totalSumm = (float) $jsonData['combinedTo']['companies'][$index36]['totalSumm'];

}
if (isset($jsonData['combinedTo']['companies'][$index36]['averageSumm'])) {
    $model->combinedTo->companies[$index36]->averageSumm = (float) $jsonData['combinedTo']['companies'][$index36]['averageSumm'];

}
if (isset($jsonData['combinedTo']['companies'][$index36]['ordersCount'])) {
    $model->combinedTo->companies[$index36]->ordersCount = $jsonData['combinedTo']['companies'][$index36]['ordersCount'];

}
if (isset($jsonData['combinedTo']['companies'][$index36]['costSumm'])) {
    $model->combinedTo->companies[$index36]->costSumm = (float) $jsonData['combinedTo']['companies'][$index36]['costSumm'];

}


}

}
if (isset($jsonData['combinedTo']['addresses'])) {
    $model->combinedTo->addresses = [];
foreach (array_keys($jsonData['combinedTo']['addresses']) as $index36) {
    
$model->combinedTo->addresses[$index36] = new RetailCrm\Api\Model\Entity\Customers\CustomerAddress();
if (isset($jsonData['combinedTo']['addresses'][$index36]['id'])) {
    $model->combinedTo->addresses[$index36]->id = $jsonData['combinedTo']['addresses'][$index36]['id'];

}
if (isset($jsonData['combinedTo']['addresses'][$index36]['name'])) {
    $model->combinedTo->addresses[$index36]->name = $jsonData['combinedTo']['addresses'][$index36]['name'];

}
if (isset($jsonData['combinedTo']['addresses'][$index36]['isMain'])) {
    $model->combinedTo->addresses[$index36]->isMain = $jsonData['combinedTo']['addresses'][$index36]['isMain'];

}
if (isset($jsonData['combinedTo']['addresses'][$index36]['index'])) {
    $model->combinedTo->addresses[$index36]->index = $jsonData['combinedTo']['addresses'][$index36]['index'];

}
if (isset($jsonData['combinedTo']['addresses'][$index36]['countryIso'])) {
    $model->combinedTo->addresses[$index36]->countryIso = $jsonData['combinedTo']['addresses'][$index36]['countryIso'];

}
if (isset($jsonData['combinedTo']['addresses'][$index36]['region'])) {
    $model->combinedTo->addresses[$index36]->region = $jsonData['combinedTo']['addresses'][$index36]['region'];

}
if (isset($jsonData['combinedTo']['addresses'][$index36]['regionId'])) {
    $model->combinedTo->addresses[$index36]->regionId = $jsonData['combinedTo']['addresses'][$index36]['regionId'];

}
if (isset($jsonData['combinedTo']['addresses'][$index36]['city'])) {
    $model->combinedTo->addresses[$index36]->city = $jsonData['combinedTo']['addresses'][$index36]['city'];

}
if (isset($jsonData['combinedTo']['addresses'][$index36]['cityId'])) {
    $model->combinedTo->addresses[$index36]->cityId = $jsonData['combinedTo']['addresses'][$index36]['cityId'];

}
if (isset($jsonData['combinedTo']['addresses'][$index36]['cityType'])) {
    $model->combinedTo->addresses[$index36]->cityType = $jsonData['combinedTo']['addresses'][$index36]['cityType'];

}
if (isset($jsonData['combinedTo']['addresses'][$index36]['street'])) {
    $model->combinedTo->addresses[$index36]->street = $jsonData['combinedTo']['addresses'][$index36]['street'];

}
if (isset($jsonData['combinedTo']['addresses'][$index36]['streetId'])) {
    $model->combinedTo->addresses[$index36]->streetId = $jsonData['combinedTo']['addresses'][$index36]['streetId'];

}
if (isset($jsonData['combinedTo']['addresses'][$index36]['streetType'])) {
    $model->combinedTo->addresses[$index36]->streetType = $jsonData['combinedTo']['addresses'][$index36]['streetType'];

}
if (isset($jsonData['combinedTo']['addresses'][$index36]['building'])) {
    $model->combinedTo->addresses[$index36]->building = $jsonData['combinedTo']['addresses'][$index36]['building'];

}
if (isset($jsonData['combinedTo']['addresses'][$index36]['flat'])) {
    $model->combinedTo->addresses[$index36]->flat = $jsonData['combinedTo']['addresses'][$index36]['flat'];

}
if (isset($jsonData['combinedTo']['addresses'][$index36]['floor'])) {
    $model->combinedTo->addresses[$index36]->floor = $jsonData['combinedTo']['addresses'][$index36]['floor'];

}
if (isset($jsonData['combinedTo']['addresses'][$index36]['block'])) {
    $model->combinedTo->addresses[$index36]->block = $jsonData['combinedTo']['addresses'][$index36]['block'];

}
if (isset($jsonData['combinedTo']['addresses'][$index36]['house'])) {
    $model->combinedTo->addresses[$index36]->house = $jsonData['combinedTo']['addresses'][$index36]['house'];

}
if (isset($jsonData['combinedTo']['addresses'][$index36]['housing'])) {
    $model->combinedTo->addresses[$index36]->housing = $jsonData['combinedTo']['addresses'][$index36]['housing'];

}
if (isset($jsonData['combinedTo']['addresses'][$index36]['metro'])) {
    $model->combinedTo->addresses[$index36]->metro = $jsonData['combinedTo']['addresses'][$index36]['metro'];

}
if (isset($jsonData['combinedTo']['addresses'][$index36]['notes'])) {
    $model->combinedTo->addresses[$index36]->notes = $jsonData['combinedTo']['addresses'][$index36]['notes'];

}
if (isset($jsonData['combinedTo']['addresses'][$index36]['text'])) {
    $model->combinedTo->addresses[$index36]->text = $jsonData['combinedTo']['addresses'][$index36]['text'];

}
if (isset($jsonData['combinedTo']['addresses'][$index36]['externalId'])) {
    $model->combinedTo->addresses[$index36]->externalId = $jsonData['combinedTo']['addresses'][$index36]['externalId'];

}


}

}
if (isset($jsonData['combinedTo']['vip'])) {
    $model->combinedTo->vip = $jsonData['combinedTo']['vip'];

}
if (isset($jsonData['combinedTo']['bad'])) {
    $model->combinedTo->bad = $jsonData['combinedTo']['bad'];

}
if (isset($jsonData['combinedTo']['site'])) {
    $model->combinedTo->site = $jsonData['combinedTo']['site'];

}
if (isset($jsonData['combinedTo']['tags'])) {
    $model->combinedTo->tags = [];
foreach (array_keys($jsonData['combinedTo']['tags']) as $index31) {
    
$model->combinedTo->tags[$index31] = new RetailCrm\Api\Model\Entity\Customers\CustomerTag();
if (isset($jsonData['combinedTo']['tags'][$index31]['name'])) {
    $model->combinedTo->tags[$index31]->name = $jsonData['combinedTo']['tags'][$index31]['name'];

}
if (isset($jsonData['combinedTo']['tags'][$index31]['color'])) {
    $model->combinedTo->tags[$index31]->color = $jsonData['combinedTo']['tags'][$index31]['color'];

}
if (isset($jsonData['combinedTo']['tags'][$index31]['attached'])) {
    $model->combinedTo->tags[$index31]->attached = $jsonData['combinedTo']['tags'][$index31]['attached'];

}


}

}
if (isset($jsonData['combinedTo']['avgMarginSumm'])) {
    $model->combinedTo->avgMarginSumm = (float) $jsonData['combinedTo']['avgMarginSumm'];

}
if (isset($jsonData['combinedTo']['marginSumm'])) {
    $model->combinedTo->marginSumm = (float) $jsonData['combinedTo']['marginSumm'];

}
if (isset($jsonData['combinedTo']['totalSumm'])) {
    $model->combinedTo->totalSumm = (float) $jsonData['combinedTo']['totalSumm'];

}
if (isset($jsonData['combinedTo']['averageSumm'])) {
    $model->combinedTo->averageSumm = (float) $jsonData['combinedTo']['averageSumm'];

}
if (isset($jsonData['combinedTo']['ordersCount'])) {
    $model->combinedTo->ordersCount = $jsonData['combinedTo']['ordersCount'];

}
if (isset($jsonData['combinedTo']['costSumm'])) {
    $model->combinedTo->costSumm = (float) $jsonData['combinedTo']['costSumm'];

}
if (isset($jsonData['combinedTo']['customFields'])) {
    $model->combinedTo->customFields = [];
foreach (array_keys($jsonData['combinedTo']['customFields']) as $index39) {
    $model->combinedTo->customFields[$index39] = $jsonData['combinedTo']['customFields'][$index39];

}

}
if (isset($jsonData['combinedTo']['personalDiscount'])) {
    $model->combinedTo->personalDiscount = (float) $jsonData['combinedTo']['personalDiscount'];

}
if (isset($jsonData['combinedTo']['cumulativeDiscount'])) {
    $model->combinedTo->cumulativeDiscount = (float) $jsonData['combinedTo']['cumulativeDiscount'];

}
if (isset($jsonData['combinedTo']['discountCardNumber'])) {
    $model->combinedTo->discountCardNumber = $jsonData['combinedTo']['discountCardNumber'];

}
if (isset($jsonData['combinedTo']['firstClientId'])) {
    $model->combinedTo->firstClientId = $jsonData['combinedTo']['firstClientId'];

}
if (isset($jsonData['combinedTo']['lastClientId'])) {
    $model->combinedTo->lastClientId = $jsonData['combinedTo']['lastClientId'];

}
if (isset($jsonData['combinedTo']['mainCustomerContact'])) {
    
$model->combinedTo->mainCustomerContact = new RetailCrm\Api\Model\Entity\CustomersCorporate\CustomerContact();
if (isset($jsonData['combinedTo']['mainCustomerContact']['id'])) {
    $model->combinedTo->mainCustomerContact->id = $jsonData['combinedTo']['mainCustomerContact']['id'];

}
if (isset($jsonData['combinedTo']['mainCustomerContact']['isMain'])) {
    $model->combinedTo->mainCustomerContact->isMain = $jsonData['combinedTo']['mainCustomerContact']['isMain'];

}
if (isset($jsonData['combinedTo']['mainCustomerContact']['customer'])) {
    
$model->combinedTo->mainCustomerContact->customer = new RetailCrm\Api\Model\Entity\CustomersCorporate\SerializedRelationAbstractCustomer();
if (isset($jsonData['combinedTo']['mainCustomerContact']['customer']['id'])) {
    $model->combinedTo->mainCustomerContact->customer->id = $jsonData['combinedTo']['mainCustomerContact']['customer']['id'];

}
if (isset($jsonData['combinedTo']['mainCustomerContact']['customer']['externalId'])) {
    $model->combinedTo->mainCustomerContact->customer->externalId = $jsonData['combinedTo']['mainCustomerContact']['customer']['externalId'];

}
if (isset($jsonData['combinedTo']['mainCustomerContact']['customer']['browserId'])) {
    $model->combinedTo->mainCustomerContact->customer->browserId = $jsonData['combinedTo']['mainCustomerContact']['customer']['browserId'];

}
if (isset($jsonData['combinedTo']['mainCustomerContact']['customer']['site'])) {
    $model->combinedTo->mainCustomerContact->customer->site = $jsonData['combinedTo']['mainCustomerContact']['customer']['site'];

}
if (isset($jsonData['combinedTo']['mainCustomerContact']['customer']['companies'])) {
    $model->combinedTo->mainCustomerContact->customer->companies = [];
foreach (array_keys($jsonData['combinedTo']['mainCustomerContact']['customer']['companies']) as $index71) {
    
$model->combinedTo->mainCustomerContact->customer->companies[$index71] = new RetailCrm\Api\Model\Entity\CustomersCorporate\CustomerContactCompany();
if (isset($jsonData['combinedTo']['mainCustomerContact']['customer']['companies'][$index71]['id'])) {
    $model->combinedTo->mainCustomerContact->customer->companies[$index71]->id = $jsonData['combinedTo']['mainCustomerContact']['customer']['companies'][$index71]['id'];

}
if (isset($jsonData['combinedTo']['mainCustomerContact']['customer']['companies'][$index71]['externalId'])) {
    $model->combinedTo->mainCustomerContact->customer->companies[$index71]->externalId = $jsonData['combinedTo']['mainCustomerContact']['customer']['companies'][$index71]['externalId'];

}
if (isset($jsonData['combinedTo']['mainCustomerContact']['customer']['companies'][$index71]['company'])) {
    
$model->combinedTo->mainCustomerContact->customer->companies[$index71]->company = new RetailCrm\Api\Model\Entity\CustomersCorporate\EntityWithExternalIdNameOutput();
if (isset($jsonData['combinedTo']['mainCustomerContact']['customer']['companies'][$index71]['company']['id'])) {
    $model->combinedTo->mainCustomerContact->customer->companies[$index71]->company->id = $jsonData['combinedTo']['mainCustomerContact']['customer']['companies'][$index71]['company']['id'];

}
if (isset($jsonData['combinedTo']['mainCustomerContact']['customer']['companies'][$index71]['company']['externalId'])) {
    $model->combinedTo->mainCustomerContact->customer->companies[$index71]->company->externalId = $jsonData['combinedTo']['mainCustomerContact']['customer']['companies'][$index71]['company']['externalId'];

}
if (isset($jsonData['combinedTo']['mainCustomerContact']['customer']['companies'][$index71]['company']['name'])) {
    $model->combinedTo->mainCustomerContact->customer->companies[$index71]->company->name = $jsonData['combinedTo']['mainCustomerContact']['customer']['companies'][$index71]['company']['name'];

}


}


}

}


}
if (isset($jsonData['combinedTo']['mainCustomerContact']['companies'])) {
    $model->combinedTo->mainCustomerContact->companies = [];
foreach (array_keys($jsonData['combinedTo']['mainCustomerContact']['companies']) as $index59) {
    
$model->combinedTo->mainCustomerContact->companies[$index59] = new RetailCrm\Api\Model\Entity\CustomersCorporate\CustomerContactCompany();
if (isset($jsonData['combinedTo']['mainCustomerContact']['companies'][$index59]['id'])) {
    $model->combinedTo->mainCustomerContact->companies[$index59]->id = $jsonData['combinedTo']['mainCustomerContact']['companies'][$index59]['id'];

}
if (isset($jsonData['combinedTo']['mainCustomerContact']['companies'][$index59]['externalId'])) {
    $model->combinedTo->mainCustomerContact->companies[$index59]->externalId = $jsonData['combinedTo']['mainCustomerContact']['companies'][$index59]['externalId'];

}
if (isset($jsonData['combinedTo']['mainCustomerContact']['companies'][$index59]['company'])) {
    
$model->combinedTo->mainCustomerContact->companies[$index59]->company = new RetailCrm\Api\Model\Entity\CustomersCorporate\EntityWithExternalIdNameOutput();
if (isset($jsonData['combinedTo']['mainCustomerContact']['companies'][$index59]['company']['id'])) {
    $model->combinedTo->mainCustomerContact->companies[$index59]->company->id = $jsonData['combinedTo']['mainCustomerContact']['companies'][$index59]['company']['id'];

}
if (isset($jsonData['combinedTo']['mainCustomerContact']['companies'][$index59]['company']['externalId'])) {
    $model->combinedTo->mainCustomerContact->companies[$index59]->company->externalId = $jsonData['combinedTo']['mainCustomerContact']['companies'][$index59]['company']['externalId'];

}
if (isset($jsonData['combinedTo']['mainCustomerContact']['companies'][$index59]['company']['name'])) {
    $model->combinedTo->mainCustomerContact->companies[$index59]->company->name = $jsonData['combinedTo']['mainCustomerContact']['companies'][$index59]['company']['name'];

}


}


}

}


}
if (isset($jsonData['combinedTo']['mainCompany'])) {
    
$model->combinedTo->mainCompany = new RetailCrm\Api\Model\Entity\CustomersCorporate\EntityWithExternalIdNameOutput();
if (isset($jsonData['combinedTo']['mainCompany']['id'])) {
    $model->combinedTo->mainCompany->id = $jsonData['combinedTo']['mainCompany']['id'];

}
if (isset($jsonData['combinedTo']['mainCompany']['externalId'])) {
    $model->combinedTo->mainCompany->externalId = $jsonData['combinedTo']['mainCompany']['externalId'];

}
if (isset($jsonData['combinedTo']['mainCompany']['name'])) {
    $model->combinedTo->mainCompany->name = $jsonData['combinedTo']['mainCompany']['name'];

}


}


}
if (isset($jsonData['customerContact'])) {
    
$model->customerContact = new RetailCrm\Api\Model\Entity\CustomersCorporate\CustomerContact();
if (isset($jsonData['customerContact']['id'])) {
    $model->customerContact->id = $jsonData['customerContact']['id'];

}
if (isset($jsonData['customerContact']['isMain'])) {
    $model->customerContact->isMain = $jsonData['customerContact']['isMain'];

}
if (isset($jsonData['customerContact']['customer'])) {
    
$model->customerContact->customer = new RetailCrm\Api\Model\Entity\CustomersCorporate\SerializedRelationAbstractCustomer();
if (isset($jsonData['customerContact']['customer']['id'])) {
    $model->customerContact->customer->id = $jsonData['customerContact']['customer']['id'];

}
if (isset($jsonData['customerContact']['customer']['externalId'])) {
    $model->customerContact->customer->externalId = $jsonData['customerContact']['customer']['externalId'];

}
if (isset($jsonData['customerContact']['customer']['browserId'])) {
    $model->customerContact->customer->browserId = $jsonData['customerContact']['customer']['browserId'];

}
if (isset($jsonData['customerContact']['customer']['site'])) {
    $model->customerContact->customer->site = $jsonData['customerContact']['customer']['site'];

}
if (isset($jsonData['customerContact']['customer']['companies'])) {
    $model->customerContact->customer->companies = [];
foreach (array_keys($jsonData['customerContact']['customer']['companies']) as $index53) {
    
$model->customerContact->customer->companies[$index53] = new RetailCrm\Api\Model\Entity\CustomersCorporate\CustomerContactCompany();
if (isset($jsonData['customerContact']['customer']['companies'][$index53]['id'])) {
    $model->customerContact->customer->companies[$index53]->id = $jsonData['customerContact']['customer']['companies'][$index53]['id'];

}
if (isset($jsonData['customerContact']['customer']['companies'][$index53]['externalId'])) {
    $model->customerContact->customer->companies[$index53]->externalId = $jsonData['customerContact']['customer']['companies'][$index53]['externalId'];

}
if (isset($jsonData['customerContact']['customer']['companies'][$index53]['company'])) {
    
$model->customerContact->customer->companies[$index53]->company = new RetailCrm\Api\Model\Entity\CustomersCorporate\EntityWithExternalIdNameOutput();
if (isset($jsonData['customerContact']['customer']['companies'][$index53]['company']['id'])) {
    $model->customerContact->customer->companies[$index53]->company->id = $jsonData['customerContact']['customer']['companies'][$index53]['company']['id'];

}
if (isset($jsonData['customerContact']['customer']['companies'][$index53]['company']['externalId'])) {
    $model->customerContact->customer->companies[$index53]->company->externalId = $jsonData['customerContact']['customer']['companies'][$index53]['company']['externalId'];

}
if (isset($jsonData['customerContact']['customer']['companies'][$index53]['company']['name'])) {
    $model->customerContact->customer->companies[$index53]->company->name = $jsonData['customerContact']['customer']['companies'][$index53]['company']['name'];

}


}


}

}


}
if (isset($jsonData['customerContact']['companies'])) {
    $model->customerContact->companies = [];
foreach (array_keys($jsonData['customerContact']['companies']) as $index41) {
    
$model->customerContact->companies[$index41] = new RetailCrm\Api\Model\Entity\CustomersCorporate\CustomerContactCompany();
if (isset($jsonData['customerContact']['companies'][$index41]['id'])) {
    $model->customerContact->companies[$index41]->id = $jsonData['customerContact']['companies'][$index41]['id'];

}
if (isset($jsonData['customerContact']['companies'][$index41]['externalId'])) {
    $model->customerContact->companies[$index41]->externalId = $jsonData['customerContact']['companies'][$index41]['externalId'];

}
if (isset($jsonData['customerContact']['companies'][$index41]['company'])) {
    
$model->customerContact->companies[$index41]->company = new RetailCrm\Api\Model\Entity\CustomersCorporate\EntityWithExternalIdNameOutput();
if (isset($jsonData['customerContact']['companies'][$index41]['company']['id'])) {
    $model->customerContact->companies[$index41]->company->id = $jsonData['customerContact']['companies'][$index41]['company']['id'];

}
if (isset($jsonData['customerContact']['companies'][$index41]['company']['externalId'])) {
    $model->customerContact->companies[$index41]->company->externalId = $jsonData['customerContact']['companies'][$index41]['company']['externalId'];

}
if (isset($jsonData['customerContact']['companies'][$index41]['company']['name'])) {
    $model->customerContact->companies[$index41]->company->name = $jsonData['customerContact']['companies'][$index41]['company']['name'];

}


}


}

}


}
if (isset($jsonData['company'])) {
    
$model->company = new RetailCrm\Api\Model\Entity\CustomersCorporate\Company();
if (isset($jsonData['company']['id'])) {
    $model->company->id = $jsonData['company']['id'];

}
if (isset($jsonData['company']['isMain'])) {
    $model->company->isMain = $jsonData['company']['isMain'];

}
if (isset($jsonData['company']['externalId'])) {
    $model->company->externalId = $jsonData['company']['externalId'];

}
if (isset($jsonData['company']['active'])) {
    $model->company->active = $jsonData['company']['active'];

}
if (isset($jsonData['company']['name'])) {
    $model->company->name = $jsonData['company']['name'];

}
if (isset($jsonData['company']['brand'])) {
    $model->company->brand = $jsonData['company']['brand'];

}
if (isset($jsonData['company']['site'])) {
    $model->company->site = $jsonData['company']['site'];

}
if (isset($jsonData['company']['createdAt'])) {
    $model->company->createdAt = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['company']['createdAt']);

}
if (isset($jsonData['company']['customer'])) {
    
$model->company->customer = new RetailCrm\Api\Model\Entity\CustomersCorporate\SerializedEntityCustomer();
if (isset($jsonData['company']['customer']['site'])) {
    $model->company->customer->site = $jsonData['company']['customer']['site'];

}
if (isset($jsonData['company']['customer']['id'])) {
    $model->company->customer->id = $jsonData['company']['customer']['id'];

}
if (isset($jsonData['company']['customer']['externalId'])) {
    $model->company->customer->externalId = $jsonData['company']['customer']['externalId'];

}
if (isset($jsonData['company']['customer']['type'])) {
    $model->company->customer->type = $jsonData['company']['customer']['type'];

}


}
if (isset($jsonData['company']['contragent'])) {
    
$model->company->contragent = new RetailCrm\Api\Model\Entity\Customers\CustomerContragent();
if (isset($jsonData['company']['contragent']['contragentType'])) {
    $model->company->contragent->contragentType = $jsonData['company']['contragent']['contragentType'];

}
if (isset($jsonData['company']['contragent']['legalName'])) {
    $model->company->contragent->legalName = $jsonData['company']['contragent']['legalName'];

}
if (isset($jsonData['company']['contragent']['legalAddress'])) {
    $model->company->contragent->legalAddress = $jsonData['company']['contragent']['legalAddress'];

}
if (isset($jsonData['company']['contragent']['INN'])) {
    $model->company->contragent->INN = $jsonData['company']['contragent']['INN'];

}
if (isset($jsonData['company']['contragent']['OKPO'])) {
    $model->company->contragent->OKPO = $jsonData['company']['contragent']['OKPO'];

}
if (isset($jsonData['company']['contragent']['KPP'])) {
    $model->company->contragent->KPP = $jsonData['company']['contragent']['KPP'];

}
if (isset($jsonData['company']['contragent']['OGRN'])) {
    $model->company->contragent->OGRN = $jsonData['company']['contragent']['OGRN'];

}
if (isset($jsonData['company']['contragent']['OGRNIP'])) {
    $model->company->contragent->OGRNIP = $jsonData['company']['contragent']['OGRNIP'];

}
if (isset($jsonData['company']['contragent']['certificateNumber'])) {
    $model->company->contragent->certificateNumber = $jsonData['company']['contragent']['certificateNumber'];

}
if (isset($jsonData['company']['contragent']['certificateDate'])) {
    $model->company->contragent->certificateDate = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['company']['contragent']['certificateDate']);

}
if (isset($jsonData['company']['contragent']['BIK'])) {
    $model->company->contragent->BIK = $jsonData['company']['contragent']['BIK'];

}
if (isset($jsonData['company']['contragent']['bank'])) {
    $model->company->contragent->bank = $jsonData['company']['contragent']['bank'];

}
if (isset($jsonData['company']['contragent']['bankAddress'])) {
    $model->company->contragent->bankAddress = $jsonData['company']['contragent']['bankAddress'];

}
if (isset($jsonData['company']['contragent']['corrAccount'])) {
    $model->company->contragent->corrAccount = $jsonData['company']['contragent']['corrAccount'];

}
if (isset($jsonData['company']['contragent']['bankAccount'])) {
    $model->company->contragent->bankAccount = $jsonData['company']['contragent']['bankAccount'];

}


}
if (isset($jsonData['company']['address'])) {
    
$model->company->address = new RetailCrm\Api\Model\Entity\Customers\CustomerAddress();
if (isset($jsonData['company']['address']['id'])) {
    $model->company->address->id = $jsonData['company']['address']['id'];

}
if (isset($jsonData['company']['address']['name'])) {
    $model->company->address->name = $jsonData['company']['address']['name'];

}
if (isset($jsonData['company']['address']['isMain'])) {
    $model->company->address->isMain = $jsonData['company']['address']['isMain'];

}
if (isset($jsonData['company']['address']['index'])) {
    $model->company->address->index = $jsonData['company']['address']['index'];

}
if (isset($jsonData['company']['address']['countryIso'])) {
    $model->company->address->countryIso = $jsonData['company']['address']['countryIso'];

}
if (isset($jsonData['company']['address']['region'])) {
    $model->company->address->region = $jsonData['company']['address']['region'];

}
if (isset($jsonData['company']['address']['regionId'])) {
    $model->company->address->regionId = $jsonData['company']['address']['regionId'];

}
if (isset($jsonData['company']['address']['city'])) {
    $model->company->address->city = $jsonData['company']['address']['city'];

}
if (isset($jsonData['company']['address']['cityId'])) {
    $model->company->address->cityId = $jsonData['company']['address']['cityId'];

}
if (isset($jsonData['company']['address']['cityType'])) {
    $model->company->address->cityType = $jsonData['company']['address']['cityType'];

}
if (isset($jsonData['company']['address']['street'])) {
    $model->company->address->street = $jsonData['company']['address']['street'];

}
if (isset($jsonData['company']['address']['streetId'])) {
    $model->company->address->streetId = $jsonData['company']['address']['streetId'];

}
if (isset($jsonData['company']['address']['streetType'])) {
    $model->company->address->streetType = $jsonData['company']['address']['streetType'];

}
if (isset($jsonData['company']['address']['building'])) {
    $model->company->address->building = $jsonData['company']['address']['building'];

}
if (isset($jsonData['company']['address']['flat'])) {
    $model->company->address->flat = $jsonData['company']['address']['flat'];

}
if (isset($jsonData['company']['address']['floor'])) {
    $model->company->address->floor = $jsonData['company']['address']['floor'];

}
if (isset($jsonData['company']['address']['block'])) {
    $model->company->address->block = $jsonData['company']['address']['block'];

}
if (isset($jsonData['company']['address']['house'])) {
    $model->company->address->house = $jsonData['company']['address']['house'];

}
if (isset($jsonData['company']['address']['housing'])) {
    $model->company->address->housing = $jsonData['company']['address']['housing'];

}
if (isset($jsonData['company']['address']['metro'])) {
    $model->company->address->metro = $jsonData['company']['address']['metro'];

}
if (isset($jsonData['company']['address']['notes'])) {
    $model->company->address->notes = $jsonData['company']['address']['notes'];

}
if (isset($jsonData['company']['address']['text'])) {
    $model->company->address->text = $jsonData['company']['address']['text'];

}
if (isset($jsonData['company']['address']['externalId'])) {
    $model->company->address->externalId = $jsonData['company']['address']['externalId'];

}


}
if (isset($jsonData['company']['customFields'])) {
    $model->company->customFields = [];
foreach (array_keys($jsonData['company']['customFields']) as $index36) {
    $model->company->customFields[$index36] = $jsonData['company']['customFields'][$index36];

}

}
if (isset($jsonData['company']['marginSumm'])) {
    $model->company->marginSumm = (float) $jsonData['company']['marginSumm'];

}
if (isset($jsonData['company']['totalSumm'])) {
    $model->company->totalSumm = (float) $jsonData['company']['totalSumm'];

}
if (isset($jsonData['company']['averageSumm'])) {
    $model->company->averageSumm = (float) $jsonData['company']['averageSumm'];

}
if (isset($jsonData['company']['ordersCount'])) {
    $model->company->ordersCount = $jsonData['company']['ordersCount'];

}
if (isset($jsonData['company']['costSumm'])) {
    $model->company->costSumm = (float) $jsonData['company']['costSumm'];

}


}



    return $model;
}
