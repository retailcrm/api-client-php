<?php

function deserialize_RetailCrm_Api_Model_Entity_CustomersCorporate_CustomerCorporate(array $jsonData): RetailCrm\Api\Model\Entity\CustomersCorporate\CustomerCorporate
{
    
$model = new RetailCrm\Api\Model\Entity\CustomersCorporate\CustomerCorporate();
if (isset($jsonData['type'])) {
    $model->type = $jsonData['type'];

}
if (isset($jsonData['id'])) {
    $model->id = $jsonData['id'];

}
if (isset($jsonData['externalId'])) {
    $model->externalId = $jsonData['externalId'];

}
if (isset($jsonData['nickName'])) {
    $model->nickName = $jsonData['nickName'];

}
if (isset($jsonData['mainAddress'])) {
    
$model->mainAddress = new RetailCrm\Api\Model\Entity\CustomersCorporate\EntityWithExternalIdNameOutput();
if (isset($jsonData['mainAddress']['id'])) {
    $model->mainAddress->id = $jsonData['mainAddress']['id'];

}
if (isset($jsonData['mainAddress']['externalId'])) {
    $model->mainAddress->externalId = $jsonData['mainAddress']['externalId'];

}
if (isset($jsonData['mainAddress']['name'])) {
    $model->mainAddress->name = $jsonData['mainAddress']['name'];

}


}
if (isset($jsonData['createdAt'])) {
    $model->createdAt = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['createdAt']);

}
if (isset($jsonData['managerId'])) {
    $model->managerId = $jsonData['managerId'];

}
if (isset($jsonData['source'])) {
    
$model->source = new RetailCrm\Api\Model\Entity\Source();
if (isset($jsonData['source']['source'])) {
    $model->source->source = $jsonData['source']['source'];

}
if (isset($jsonData['source']['medium'])) {
    $model->source->medium = $jsonData['source']['medium'];

}
if (isset($jsonData['source']['campaign'])) {
    $model->source->campaign = $jsonData['source']['campaign'];

}
if (isset($jsonData['source']['keyword'])) {
    $model->source->keyword = $jsonData['source']['keyword'];

}
if (isset($jsonData['source']['content'])) {
    $model->source->content = $jsonData['source']['content'];

}


}
if (isset($jsonData['customerContacts'])) {
    $model->customerContacts = [];
foreach (array_keys($jsonData['customerContacts']) as $index29) {
    
$model->customerContacts[$index29] = new RetailCrm\Api\Model\Entity\CustomersCorporate\CustomerContact();
if (isset($jsonData['customerContacts'][$index29]['id'])) {
    $model->customerContacts[$index29]->id = $jsonData['customerContacts'][$index29]['id'];

}
if (isset($jsonData['customerContacts'][$index29]['isMain'])) {
    $model->customerContacts[$index29]->isMain = $jsonData['customerContacts'][$index29]['isMain'];

}
if (isset($jsonData['customerContacts'][$index29]['customer'])) {
    
$model->customerContacts[$index29]->customer = new RetailCrm\Api\Model\Entity\CustomersCorporate\SerializedRelationAbstractCustomer();
if (isset($jsonData['customerContacts'][$index29]['customer']['id'])) {
    $model->customerContacts[$index29]->customer->id = $jsonData['customerContacts'][$index29]['customer']['id'];

}
if (isset($jsonData['customerContacts'][$index29]['customer']['externalId'])) {
    $model->customerContacts[$index29]->customer->externalId = $jsonData['customerContacts'][$index29]['customer']['externalId'];

}
if (isset($jsonData['customerContacts'][$index29]['customer']['browserId'])) {
    $model->customerContacts[$index29]->customer->browserId = $jsonData['customerContacts'][$index29]['customer']['browserId'];

}
if (isset($jsonData['customerContacts'][$index29]['customer']['site'])) {
    $model->customerContacts[$index29]->customer->site = $jsonData['customerContacts'][$index29]['customer']['site'];

}
if (isset($jsonData['customerContacts'][$index29]['customer']['companies'])) {
    $model->customerContacts[$index29]->customer->companies = [];
foreach (array_keys($jsonData['customerContacts'][$index29]['customer']['companies']) as $index64) {
    
$model->customerContacts[$index29]->customer->companies[$index64] = new RetailCrm\Api\Model\Entity\CustomersCorporate\CustomerContactCompany();
if (isset($jsonData['customerContacts'][$index29]['customer']['companies'][$index64]['id'])) {
    $model->customerContacts[$index29]->customer->companies[$index64]->id = $jsonData['customerContacts'][$index29]['customer']['companies'][$index64]['id'];

}
if (isset($jsonData['customerContacts'][$index29]['customer']['companies'][$index64]['externalId'])) {
    $model->customerContacts[$index29]->customer->companies[$index64]->externalId = $jsonData['customerContacts'][$index29]['customer']['companies'][$index64]['externalId'];

}
if (isset($jsonData['customerContacts'][$index29]['customer']['companies'][$index64]['company'])) {
    
$model->customerContacts[$index29]->customer->companies[$index64]->company = new RetailCrm\Api\Model\Entity\CustomersCorporate\EntityWithExternalIdNameOutput();
if (isset($jsonData['customerContacts'][$index29]['customer']['companies'][$index64]['company']['id'])) {
    $model->customerContacts[$index29]->customer->companies[$index64]->company->id = $jsonData['customerContacts'][$index29]['customer']['companies'][$index64]['company']['id'];

}
if (isset($jsonData['customerContacts'][$index29]['customer']['companies'][$index64]['company']['externalId'])) {
    $model->customerContacts[$index29]->customer->companies[$index64]->company->externalId = $jsonData['customerContacts'][$index29]['customer']['companies'][$index64]['company']['externalId'];

}
if (isset($jsonData['customerContacts'][$index29]['customer']['companies'][$index64]['company']['name'])) {
    $model->customerContacts[$index29]->customer->companies[$index64]->company->name = $jsonData['customerContacts'][$index29]['customer']['companies'][$index64]['company']['name'];

}


}


}

}


}
if (isset($jsonData['customerContacts'][$index29]['companies'])) {
    $model->customerContacts[$index29]->companies = [];
foreach (array_keys($jsonData['customerContacts'][$index29]['companies']) as $index52) {
    
$model->customerContacts[$index29]->companies[$index52] = new RetailCrm\Api\Model\Entity\CustomersCorporate\CustomerContactCompany();
if (isset($jsonData['customerContacts'][$index29]['companies'][$index52]['id'])) {
    $model->customerContacts[$index29]->companies[$index52]->id = $jsonData['customerContacts'][$index29]['companies'][$index52]['id'];

}
if (isset($jsonData['customerContacts'][$index29]['companies'][$index52]['externalId'])) {
    $model->customerContacts[$index29]->companies[$index52]->externalId = $jsonData['customerContacts'][$index29]['companies'][$index52]['externalId'];

}
if (isset($jsonData['customerContacts'][$index29]['companies'][$index52]['company'])) {
    
$model->customerContacts[$index29]->companies[$index52]->company = new RetailCrm\Api\Model\Entity\CustomersCorporate\EntityWithExternalIdNameOutput();
if (isset($jsonData['customerContacts'][$index29]['companies'][$index52]['company']['id'])) {
    $model->customerContacts[$index29]->companies[$index52]->company->id = $jsonData['customerContacts'][$index29]['companies'][$index52]['company']['id'];

}
if (isset($jsonData['customerContacts'][$index29]['companies'][$index52]['company']['externalId'])) {
    $model->customerContacts[$index29]->companies[$index52]->company->externalId = $jsonData['customerContacts'][$index29]['companies'][$index52]['company']['externalId'];

}
if (isset($jsonData['customerContacts'][$index29]['companies'][$index52]['company']['name'])) {
    $model->customerContacts[$index29]->companies[$index52]->company->name = $jsonData['customerContacts'][$index29]['companies'][$index52]['company']['name'];

}


}


}

}


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
if (isset($jsonData['addresses'])) {
    $model->addresses = [];
foreach (array_keys($jsonData['addresses']) as $index22) {
    
$model->addresses[$index22] = new RetailCrm\Api\Model\Entity\Customers\CustomerAddress();
if (isset($jsonData['addresses'][$index22]['id'])) {
    $model->addresses[$index22]->id = $jsonData['addresses'][$index22]['id'];

}
if (isset($jsonData['addresses'][$index22]['name'])) {
    $model->addresses[$index22]->name = $jsonData['addresses'][$index22]['name'];

}
if (isset($jsonData['addresses'][$index22]['isMain'])) {
    $model->addresses[$index22]->isMain = $jsonData['addresses'][$index22]['isMain'];

}
if (isset($jsonData['addresses'][$index22]['index'])) {
    $model->addresses[$index22]->index = $jsonData['addresses'][$index22]['index'];

}
if (isset($jsonData['addresses'][$index22]['countryIso'])) {
    $model->addresses[$index22]->countryIso = $jsonData['addresses'][$index22]['countryIso'];

}
if (isset($jsonData['addresses'][$index22]['region'])) {
    $model->addresses[$index22]->region = $jsonData['addresses'][$index22]['region'];

}
if (isset($jsonData['addresses'][$index22]['regionId'])) {
    $model->addresses[$index22]->regionId = $jsonData['addresses'][$index22]['regionId'];

}
if (isset($jsonData['addresses'][$index22]['city'])) {
    $model->addresses[$index22]->city = $jsonData['addresses'][$index22]['city'];

}
if (isset($jsonData['addresses'][$index22]['cityId'])) {
    $model->addresses[$index22]->cityId = $jsonData['addresses'][$index22]['cityId'];

}
if (isset($jsonData['addresses'][$index22]['cityType'])) {
    $model->addresses[$index22]->cityType = $jsonData['addresses'][$index22]['cityType'];

}
if (isset($jsonData['addresses'][$index22]['street'])) {
    $model->addresses[$index22]->street = $jsonData['addresses'][$index22]['street'];

}
if (isset($jsonData['addresses'][$index22]['streetId'])) {
    $model->addresses[$index22]->streetId = $jsonData['addresses'][$index22]['streetId'];

}
if (isset($jsonData['addresses'][$index22]['streetType'])) {
    $model->addresses[$index22]->streetType = $jsonData['addresses'][$index22]['streetType'];

}
if (isset($jsonData['addresses'][$index22]['building'])) {
    $model->addresses[$index22]->building = $jsonData['addresses'][$index22]['building'];

}
if (isset($jsonData['addresses'][$index22]['flat'])) {
    $model->addresses[$index22]->flat = $jsonData['addresses'][$index22]['flat'];

}
if (isset($jsonData['addresses'][$index22]['floor'])) {
    $model->addresses[$index22]->floor = $jsonData['addresses'][$index22]['floor'];

}
if (isset($jsonData['addresses'][$index22]['block'])) {
    $model->addresses[$index22]->block = $jsonData['addresses'][$index22]['block'];

}
if (isset($jsonData['addresses'][$index22]['house'])) {
    $model->addresses[$index22]->house = $jsonData['addresses'][$index22]['house'];

}
if (isset($jsonData['addresses'][$index22]['housing'])) {
    $model->addresses[$index22]->housing = $jsonData['addresses'][$index22]['housing'];

}
if (isset($jsonData['addresses'][$index22]['metro'])) {
    $model->addresses[$index22]->metro = $jsonData['addresses'][$index22]['metro'];

}
if (isset($jsonData['addresses'][$index22]['notes'])) {
    $model->addresses[$index22]->notes = $jsonData['addresses'][$index22]['notes'];

}
if (isset($jsonData['addresses'][$index22]['text'])) {
    $model->addresses[$index22]->text = $jsonData['addresses'][$index22]['text'];

}
if (isset($jsonData['addresses'][$index22]['externalId'])) {
    $model->addresses[$index22]->externalId = $jsonData['addresses'][$index22]['externalId'];

}


}

}
if (isset($jsonData['vip'])) {
    $model->vip = $jsonData['vip'];

}
if (isset($jsonData['bad'])) {
    $model->bad = $jsonData['bad'];

}
if (isset($jsonData['site'])) {
    $model->site = $jsonData['site'];

}
if (isset($jsonData['tags'])) {
    $model->tags = [];
foreach (array_keys($jsonData['tags']) as $index17) {
    
$model->tags[$index17] = new RetailCrm\Api\Model\Entity\Customers\CustomerTag();
if (isset($jsonData['tags'][$index17]['name'])) {
    $model->tags[$index17]->name = $jsonData['tags'][$index17]['name'];

}
if (isset($jsonData['tags'][$index17]['color'])) {
    $model->tags[$index17]->color = $jsonData['tags'][$index17]['color'];

}
if (isset($jsonData['tags'][$index17]['attached'])) {
    $model->tags[$index17]->attached = $jsonData['tags'][$index17]['attached'];

}


}

}
if (isset($jsonData['avgMarginSumm'])) {
    $model->avgMarginSumm = (float) $jsonData['avgMarginSumm'];

}
if (isset($jsonData['marginSumm'])) {
    $model->marginSumm = (float) $jsonData['marginSumm'];

}
if (isset($jsonData['totalSumm'])) {
    $model->totalSumm = (float) $jsonData['totalSumm'];

}
if (isset($jsonData['averageSumm'])) {
    $model->averageSumm = (float) $jsonData['averageSumm'];

}
if (isset($jsonData['ordersCount'])) {
    $model->ordersCount = $jsonData['ordersCount'];

}
if (isset($jsonData['costSumm'])) {
    $model->costSumm = (float) $jsonData['costSumm'];

}
if (isset($jsonData['customFields'])) {
    $model->customFields = [];
foreach (array_keys($jsonData['customFields']) as $index25) {
    $model->customFields[$index25] = $jsonData['customFields'][$index25];

}

}
if (isset($jsonData['personalDiscount'])) {
    $model->personalDiscount = (float) $jsonData['personalDiscount'];

}
if (isset($jsonData['cumulativeDiscount'])) {
    $model->cumulativeDiscount = (float) $jsonData['cumulativeDiscount'];

}
if (isset($jsonData['discountCardNumber'])) {
    $model->discountCardNumber = $jsonData['discountCardNumber'];

}
if (isset($jsonData['firstClientId'])) {
    $model->firstClientId = $jsonData['firstClientId'];

}
if (isset($jsonData['lastClientId'])) {
    $model->lastClientId = $jsonData['lastClientId'];

}
if (isset($jsonData['mainCustomerContact'])) {
    
$model->mainCustomerContact = new RetailCrm\Api\Model\Entity\CustomersCorporate\CustomerContact();
if (isset($jsonData['mainCustomerContact']['id'])) {
    $model->mainCustomerContact->id = $jsonData['mainCustomerContact']['id'];

}
if (isset($jsonData['mainCustomerContact']['isMain'])) {
    $model->mainCustomerContact->isMain = $jsonData['mainCustomerContact']['isMain'];

}
if (isset($jsonData['mainCustomerContact']['customer'])) {
    
$model->mainCustomerContact->customer = new RetailCrm\Api\Model\Entity\CustomersCorporate\SerializedRelationAbstractCustomer();
if (isset($jsonData['mainCustomerContact']['customer']['id'])) {
    $model->mainCustomerContact->customer->id = $jsonData['mainCustomerContact']['customer']['id'];

}
if (isset($jsonData['mainCustomerContact']['customer']['externalId'])) {
    $model->mainCustomerContact->customer->externalId = $jsonData['mainCustomerContact']['customer']['externalId'];

}
if (isset($jsonData['mainCustomerContact']['customer']['browserId'])) {
    $model->mainCustomerContact->customer->browserId = $jsonData['mainCustomerContact']['customer']['browserId'];

}
if (isset($jsonData['mainCustomerContact']['customer']['site'])) {
    $model->mainCustomerContact->customer->site = $jsonData['mainCustomerContact']['customer']['site'];

}
if (isset($jsonData['mainCustomerContact']['customer']['companies'])) {
    $model->mainCustomerContact->customer->companies = [];
foreach (array_keys($jsonData['mainCustomerContact']['customer']['companies']) as $index57) {
    
$model->mainCustomerContact->customer->companies[$index57] = new RetailCrm\Api\Model\Entity\CustomersCorporate\CustomerContactCompany();
if (isset($jsonData['mainCustomerContact']['customer']['companies'][$index57]['id'])) {
    $model->mainCustomerContact->customer->companies[$index57]->id = $jsonData['mainCustomerContact']['customer']['companies'][$index57]['id'];

}
if (isset($jsonData['mainCustomerContact']['customer']['companies'][$index57]['externalId'])) {
    $model->mainCustomerContact->customer->companies[$index57]->externalId = $jsonData['mainCustomerContact']['customer']['companies'][$index57]['externalId'];

}
if (isset($jsonData['mainCustomerContact']['customer']['companies'][$index57]['company'])) {
    
$model->mainCustomerContact->customer->companies[$index57]->company = new RetailCrm\Api\Model\Entity\CustomersCorporate\EntityWithExternalIdNameOutput();
if (isset($jsonData['mainCustomerContact']['customer']['companies'][$index57]['company']['id'])) {
    $model->mainCustomerContact->customer->companies[$index57]->company->id = $jsonData['mainCustomerContact']['customer']['companies'][$index57]['company']['id'];

}
if (isset($jsonData['mainCustomerContact']['customer']['companies'][$index57]['company']['externalId'])) {
    $model->mainCustomerContact->customer->companies[$index57]->company->externalId = $jsonData['mainCustomerContact']['customer']['companies'][$index57]['company']['externalId'];

}
if (isset($jsonData['mainCustomerContact']['customer']['companies'][$index57]['company']['name'])) {
    $model->mainCustomerContact->customer->companies[$index57]->company->name = $jsonData['mainCustomerContact']['customer']['companies'][$index57]['company']['name'];

}


}


}

}


}
if (isset($jsonData['mainCustomerContact']['companies'])) {
    $model->mainCustomerContact->companies = [];
foreach (array_keys($jsonData['mainCustomerContact']['companies']) as $index45) {
    
$model->mainCustomerContact->companies[$index45] = new RetailCrm\Api\Model\Entity\CustomersCorporate\CustomerContactCompany();
if (isset($jsonData['mainCustomerContact']['companies'][$index45]['id'])) {
    $model->mainCustomerContact->companies[$index45]->id = $jsonData['mainCustomerContact']['companies'][$index45]['id'];

}
if (isset($jsonData['mainCustomerContact']['companies'][$index45]['externalId'])) {
    $model->mainCustomerContact->companies[$index45]->externalId = $jsonData['mainCustomerContact']['companies'][$index45]['externalId'];

}
if (isset($jsonData['mainCustomerContact']['companies'][$index45]['company'])) {
    
$model->mainCustomerContact->companies[$index45]->company = new RetailCrm\Api\Model\Entity\CustomersCorporate\EntityWithExternalIdNameOutput();
if (isset($jsonData['mainCustomerContact']['companies'][$index45]['company']['id'])) {
    $model->mainCustomerContact->companies[$index45]->company->id = $jsonData['mainCustomerContact']['companies'][$index45]['company']['id'];

}
if (isset($jsonData['mainCustomerContact']['companies'][$index45]['company']['externalId'])) {
    $model->mainCustomerContact->companies[$index45]->company->externalId = $jsonData['mainCustomerContact']['companies'][$index45]['company']['externalId'];

}
if (isset($jsonData['mainCustomerContact']['companies'][$index45]['company']['name'])) {
    $model->mainCustomerContact->companies[$index45]->company->name = $jsonData['mainCustomerContact']['companies'][$index45]['company']['name'];

}


}


}

}


}
if (isset($jsonData['mainCompany'])) {
    
$model->mainCompany = new RetailCrm\Api\Model\Entity\CustomersCorporate\EntityWithExternalIdNameOutput();
if (isset($jsonData['mainCompany']['id'])) {
    $model->mainCompany->id = $jsonData['mainCompany']['id'];

}
if (isset($jsonData['mainCompany']['externalId'])) {
    $model->mainCompany->externalId = $jsonData['mainCompany']['externalId'];

}
if (isset($jsonData['mainCompany']['name'])) {
    $model->mainCompany->name = $jsonData['mainCompany']['name'];

}


}



    return $model;
}
