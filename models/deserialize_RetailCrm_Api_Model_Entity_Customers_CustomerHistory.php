<?php

function deserialize_RetailCrm_Api_Model_Entity_Customers_CustomerHistory(array $jsonData): RetailCrm\Api\Model\Entity\Customers\CustomerHistory
{
    
$model = new RetailCrm\Api\Model\Entity\Customers\CustomerHistory();
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
    
$model->customer = new RetailCrm\Api\Model\Entity\Customers\Customer();
if (isset($jsonData['customer']['type'])) {
    $model->customer->type = $jsonData['customer']['type'];

}
if (isset($jsonData['customer']['id'])) {
    $model->customer->id = $jsonData['customer']['id'];

}
if (isset($jsonData['customer']['externalId'])) {
    $model->customer->externalId = $jsonData['customer']['externalId'];

}
if (isset($jsonData['customer']['isContact'])) {
    $model->customer->isContact = $jsonData['customer']['isContact'];

}
if (isset($jsonData['customer']['createdAt'])) {
    $model->customer->createdAt = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['customer']['createdAt']);

}
if (isset($jsonData['customer']['managerId'])) {
    $model->customer->managerId = $jsonData['customer']['managerId'];

}
if (isset($jsonData['customer']['vip'])) {
    $model->customer->vip = $jsonData['customer']['vip'];

}
if (isset($jsonData['customer']['bad'])) {
    $model->customer->bad = $jsonData['customer']['bad'];

}
if (isset($jsonData['customer']['browserId'])) {
    $model->customer->browserId = $jsonData['customer']['browserId'];

}
if (isset($jsonData['customer']['site'])) {
    $model->customer->site = $jsonData['customer']['site'];

}
if (isset($jsonData['customer']['contragent'])) {
    
$model->customer->contragent = new RetailCrm\Api\Model\Entity\Customers\CustomerContragent();
if (isset($jsonData['customer']['contragent']['contragentType'])) {
    $model->customer->contragent->contragentType = $jsonData['customer']['contragent']['contragentType'];

}
if (isset($jsonData['customer']['contragent']['legalName'])) {
    $model->customer->contragent->legalName = $jsonData['customer']['contragent']['legalName'];

}
if (isset($jsonData['customer']['contragent']['legalAddress'])) {
    $model->customer->contragent->legalAddress = $jsonData['customer']['contragent']['legalAddress'];

}
if (isset($jsonData['customer']['contragent']['INN'])) {
    $model->customer->contragent->INN = $jsonData['customer']['contragent']['INN'];

}
if (isset($jsonData['customer']['contragent']['OKPO'])) {
    $model->customer->contragent->OKPO = $jsonData['customer']['contragent']['OKPO'];

}
if (isset($jsonData['customer']['contragent']['KPP'])) {
    $model->customer->contragent->KPP = $jsonData['customer']['contragent']['KPP'];

}
if (isset($jsonData['customer']['contragent']['OGRN'])) {
    $model->customer->contragent->OGRN = $jsonData['customer']['contragent']['OGRN'];

}
if (isset($jsonData['customer']['contragent']['OGRNIP'])) {
    $model->customer->contragent->OGRNIP = $jsonData['customer']['contragent']['OGRNIP'];

}
if (isset($jsonData['customer']['contragent']['certificateNumber'])) {
    $model->customer->contragent->certificateNumber = $jsonData['customer']['contragent']['certificateNumber'];

}
if (isset($jsonData['customer']['contragent']['certificateDate'])) {
    $model->customer->contragent->certificateDate = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['customer']['contragent']['certificateDate']);

}
if (isset($jsonData['customer']['contragent']['BIK'])) {
    $model->customer->contragent->BIK = $jsonData['customer']['contragent']['BIK'];

}
if (isset($jsonData['customer']['contragent']['bank'])) {
    $model->customer->contragent->bank = $jsonData['customer']['contragent']['bank'];

}
if (isset($jsonData['customer']['contragent']['bankAddress'])) {
    $model->customer->contragent->bankAddress = $jsonData['customer']['contragent']['bankAddress'];

}
if (isset($jsonData['customer']['contragent']['corrAccount'])) {
    $model->customer->contragent->corrAccount = $jsonData['customer']['contragent']['corrAccount'];

}
if (isset($jsonData['customer']['contragent']['bankAccount'])) {
    $model->customer->contragent->bankAccount = $jsonData['customer']['contragent']['bankAccount'];

}


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
if (isset($jsonData['customer']['address'])) {
    
$model->customer->address = new RetailCrm\Api\Model\Entity\Customers\CustomerAddress();
if (isset($jsonData['customer']['address']['id'])) {
    $model->customer->address->id = $jsonData['customer']['address']['id'];

}
if (isset($jsonData['customer']['address']['name'])) {
    $model->customer->address->name = $jsonData['customer']['address']['name'];

}
if (isset($jsonData['customer']['address']['isMain'])) {
    $model->customer->address->isMain = $jsonData['customer']['address']['isMain'];

}
if (isset($jsonData['customer']['address']['index'])) {
    $model->customer->address->index = $jsonData['customer']['address']['index'];

}
if (isset($jsonData['customer']['address']['countryIso'])) {
    $model->customer->address->countryIso = $jsonData['customer']['address']['countryIso'];

}
if (isset($jsonData['customer']['address']['region'])) {
    $model->customer->address->region = $jsonData['customer']['address']['region'];

}
if (isset($jsonData['customer']['address']['regionId'])) {
    $model->customer->address->regionId = $jsonData['customer']['address']['regionId'];

}
if (isset($jsonData['customer']['address']['city'])) {
    $model->customer->address->city = $jsonData['customer']['address']['city'];

}
if (isset($jsonData['customer']['address']['cityId'])) {
    $model->customer->address->cityId = $jsonData['customer']['address']['cityId'];

}
if (isset($jsonData['customer']['address']['cityType'])) {
    $model->customer->address->cityType = $jsonData['customer']['address']['cityType'];

}
if (isset($jsonData['customer']['address']['street'])) {
    $model->customer->address->street = $jsonData['customer']['address']['street'];

}
if (isset($jsonData['customer']['address']['streetId'])) {
    $model->customer->address->streetId = $jsonData['customer']['address']['streetId'];

}
if (isset($jsonData['customer']['address']['streetType'])) {
    $model->customer->address->streetType = $jsonData['customer']['address']['streetType'];

}
if (isset($jsonData['customer']['address']['building'])) {
    $model->customer->address->building = $jsonData['customer']['address']['building'];

}
if (isset($jsonData['customer']['address']['flat'])) {
    $model->customer->address->flat = $jsonData['customer']['address']['flat'];

}
if (isset($jsonData['customer']['address']['floor'])) {
    $model->customer->address->floor = $jsonData['customer']['address']['floor'];

}
if (isset($jsonData['customer']['address']['block'])) {
    $model->customer->address->block = $jsonData['customer']['address']['block'];

}
if (isset($jsonData['customer']['address']['house'])) {
    $model->customer->address->house = $jsonData['customer']['address']['house'];

}
if (isset($jsonData['customer']['address']['housing'])) {
    $model->customer->address->housing = $jsonData['customer']['address']['housing'];

}
if (isset($jsonData['customer']['address']['metro'])) {
    $model->customer->address->metro = $jsonData['customer']['address']['metro'];

}
if (isset($jsonData['customer']['address']['notes'])) {
    $model->customer->address->notes = $jsonData['customer']['address']['notes'];

}
if (isset($jsonData['customer']['address']['text'])) {
    $model->customer->address->text = $jsonData['customer']['address']['text'];

}
if (isset($jsonData['customer']['address']['externalId'])) {
    $model->customer->address->externalId = $jsonData['customer']['address']['externalId'];

}


}
if (isset($jsonData['customer']['segments'])) {
    $model->customer->segments = [];
foreach (array_keys($jsonData['customer']['segments']) as $index33) {
    
$model->customer->segments[$index33] = new RetailCrm\Api\Model\Entity\Customers\Segment();
if (isset($jsonData['customer']['segments'][$index33]['id'])) {
    $model->customer->segments[$index33]->id = $jsonData['customer']['segments'][$index33]['id'];

}
if (isset($jsonData['customer']['segments'][$index33]['code'])) {
    $model->customer->segments[$index33]->code = $jsonData['customer']['segments'][$index33]['code'];

}
if (isset($jsonData['customer']['segments'][$index33]['name'])) {
    $model->customer->segments[$index33]->name = $jsonData['customer']['segments'][$index33]['name'];

}
if (isset($jsonData['customer']['segments'][$index33]['createdAt'])) {
    $model->customer->segments[$index33]->createdAt = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['customer']['segments'][$index33]['createdAt']);

}
if (isset($jsonData['customer']['segments'][$index33]['isDynamic'])) {
    $model->customer->segments[$index33]->isDynamic = $jsonData['customer']['segments'][$index33]['isDynamic'];

}
if (isset($jsonData['customer']['segments'][$index33]['customersCount'])) {
    $model->customer->segments[$index33]->customersCount = $jsonData['customer']['segments'][$index33]['customersCount'];

}
if (isset($jsonData['customer']['segments'][$index33]['active'])) {
    $model->customer->segments[$index33]->active = $jsonData['customer']['segments'][$index33]['active'];

}


}

}
if (isset($jsonData['customer']['maturationTime'])) {
    $model->customer->maturationTime = $jsonData['customer']['maturationTime'];

}
if (isset($jsonData['customer']['firstName'])) {
    $model->customer->firstName = $jsonData['customer']['firstName'];

}
if (isset($jsonData['customer']['lastName'])) {
    $model->customer->lastName = $jsonData['customer']['lastName'];

}
if (isset($jsonData['customer']['patronymic'])) {
    $model->customer->patronymic = $jsonData['customer']['patronymic'];

}
if (isset($jsonData['customer']['sex'])) {
    $model->customer->sex = $jsonData['customer']['sex'];

}
if (isset($jsonData['customer']['presumableSex'])) {
    $model->customer->presumableSex = $jsonData['customer']['presumableSex'];

}
if (isset($jsonData['customer']['email'])) {
    $model->customer->email = $jsonData['customer']['email'];

}
if (isset($jsonData['customer']['emailMarketingUnsubscribedAt'])) {
    $model->customer->emailMarketingUnsubscribedAt = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['customer']['emailMarketingUnsubscribedAt']);

}
if (isset($jsonData['customer']['phones'])) {
    $model->customer->phones = [];
foreach (array_keys($jsonData['customer']['phones']) as $index31) {
    
$model->customer->phones[$index31] = new RetailCrm\Api\Model\Entity\Customers\CustomerPhone();
if (isset($jsonData['customer']['phones'][$index31]['number'])) {
    $model->customer->phones[$index31]->number = $jsonData['customer']['phones'][$index31]['number'];

}


}

}
if (isset($jsonData['customer']['birthday'])) {
    $model->customer->birthday = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['customer']['birthday']);

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
if (isset($jsonData['customer']['photoUrl'])) {
    $model->customer->photoUrl = $jsonData['customer']['photoUrl'];

}
if (isset($jsonData['customer']['mgCustomerId'])) {
    $model->customer->mgCustomerId = $jsonData['customer']['mgCustomerId'];

}
if (isset($jsonData['customer']['subscribed'])) {
    $model->customer->subscribed = $jsonData['customer']['subscribed'];

}


}
if (isset($jsonData['address'])) {
    
$model->address = new RetailCrm\Api\Model\Entity\Customers\HistoryAddress();
if (isset($jsonData['address']['id'])) {
    $model->address->id = $jsonData['address']['id'];

}
if (isset($jsonData['address']['externalId'])) {
    $model->address->externalId = $jsonData['address']['externalId'];

}
if (isset($jsonData['address']['name'])) {
    $model->address->name = $jsonData['address']['name'];

}
if (isset($jsonData['address']['isMain'])) {
    $model->address->isMain = $jsonData['address']['isMain'];

}


}
if (isset($jsonData['combinedTo'])) {
    
$model->combinedTo = new RetailCrm\Api\Model\Entity\Customers\Customer();
if (isset($jsonData['combinedTo']['type'])) {
    $model->combinedTo->type = $jsonData['combinedTo']['type'];

}
if (isset($jsonData['combinedTo']['id'])) {
    $model->combinedTo->id = $jsonData['combinedTo']['id'];

}
if (isset($jsonData['combinedTo']['externalId'])) {
    $model->combinedTo->externalId = $jsonData['combinedTo']['externalId'];

}
if (isset($jsonData['combinedTo']['isContact'])) {
    $model->combinedTo->isContact = $jsonData['combinedTo']['isContact'];

}
if (isset($jsonData['combinedTo']['createdAt'])) {
    $model->combinedTo->createdAt = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['combinedTo']['createdAt']);

}
if (isset($jsonData['combinedTo']['managerId'])) {
    $model->combinedTo->managerId = $jsonData['combinedTo']['managerId'];

}
if (isset($jsonData['combinedTo']['vip'])) {
    $model->combinedTo->vip = $jsonData['combinedTo']['vip'];

}
if (isset($jsonData['combinedTo']['bad'])) {
    $model->combinedTo->bad = $jsonData['combinedTo']['bad'];

}
if (isset($jsonData['combinedTo']['browserId'])) {
    $model->combinedTo->browserId = $jsonData['combinedTo']['browserId'];

}
if (isset($jsonData['combinedTo']['site'])) {
    $model->combinedTo->site = $jsonData['combinedTo']['site'];

}
if (isset($jsonData['combinedTo']['contragent'])) {
    
$model->combinedTo->contragent = new RetailCrm\Api\Model\Entity\Customers\CustomerContragent();
if (isset($jsonData['combinedTo']['contragent']['contragentType'])) {
    $model->combinedTo->contragent->contragentType = $jsonData['combinedTo']['contragent']['contragentType'];

}
if (isset($jsonData['combinedTo']['contragent']['legalName'])) {
    $model->combinedTo->contragent->legalName = $jsonData['combinedTo']['contragent']['legalName'];

}
if (isset($jsonData['combinedTo']['contragent']['legalAddress'])) {
    $model->combinedTo->contragent->legalAddress = $jsonData['combinedTo']['contragent']['legalAddress'];

}
if (isset($jsonData['combinedTo']['contragent']['INN'])) {
    $model->combinedTo->contragent->INN = $jsonData['combinedTo']['contragent']['INN'];

}
if (isset($jsonData['combinedTo']['contragent']['OKPO'])) {
    $model->combinedTo->contragent->OKPO = $jsonData['combinedTo']['contragent']['OKPO'];

}
if (isset($jsonData['combinedTo']['contragent']['KPP'])) {
    $model->combinedTo->contragent->KPP = $jsonData['combinedTo']['contragent']['KPP'];

}
if (isset($jsonData['combinedTo']['contragent']['OGRN'])) {
    $model->combinedTo->contragent->OGRN = $jsonData['combinedTo']['contragent']['OGRN'];

}
if (isset($jsonData['combinedTo']['contragent']['OGRNIP'])) {
    $model->combinedTo->contragent->OGRNIP = $jsonData['combinedTo']['contragent']['OGRNIP'];

}
if (isset($jsonData['combinedTo']['contragent']['certificateNumber'])) {
    $model->combinedTo->contragent->certificateNumber = $jsonData['combinedTo']['contragent']['certificateNumber'];

}
if (isset($jsonData['combinedTo']['contragent']['certificateDate'])) {
    $model->combinedTo->contragent->certificateDate = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['combinedTo']['contragent']['certificateDate']);

}
if (isset($jsonData['combinedTo']['contragent']['BIK'])) {
    $model->combinedTo->contragent->BIK = $jsonData['combinedTo']['contragent']['BIK'];

}
if (isset($jsonData['combinedTo']['contragent']['bank'])) {
    $model->combinedTo->contragent->bank = $jsonData['combinedTo']['contragent']['bank'];

}
if (isset($jsonData['combinedTo']['contragent']['bankAddress'])) {
    $model->combinedTo->contragent->bankAddress = $jsonData['combinedTo']['contragent']['bankAddress'];

}
if (isset($jsonData['combinedTo']['contragent']['corrAccount'])) {
    $model->combinedTo->contragent->corrAccount = $jsonData['combinedTo']['contragent']['corrAccount'];

}
if (isset($jsonData['combinedTo']['contragent']['bankAccount'])) {
    $model->combinedTo->contragent->bankAccount = $jsonData['combinedTo']['contragent']['bankAccount'];

}


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
if (isset($jsonData['combinedTo']['address'])) {
    
$model->combinedTo->address = new RetailCrm\Api\Model\Entity\Customers\CustomerAddress();
if (isset($jsonData['combinedTo']['address']['id'])) {
    $model->combinedTo->address->id = $jsonData['combinedTo']['address']['id'];

}
if (isset($jsonData['combinedTo']['address']['name'])) {
    $model->combinedTo->address->name = $jsonData['combinedTo']['address']['name'];

}
if (isset($jsonData['combinedTo']['address']['isMain'])) {
    $model->combinedTo->address->isMain = $jsonData['combinedTo']['address']['isMain'];

}
if (isset($jsonData['combinedTo']['address']['index'])) {
    $model->combinedTo->address->index = $jsonData['combinedTo']['address']['index'];

}
if (isset($jsonData['combinedTo']['address']['countryIso'])) {
    $model->combinedTo->address->countryIso = $jsonData['combinedTo']['address']['countryIso'];

}
if (isset($jsonData['combinedTo']['address']['region'])) {
    $model->combinedTo->address->region = $jsonData['combinedTo']['address']['region'];

}
if (isset($jsonData['combinedTo']['address']['regionId'])) {
    $model->combinedTo->address->regionId = $jsonData['combinedTo']['address']['regionId'];

}
if (isset($jsonData['combinedTo']['address']['city'])) {
    $model->combinedTo->address->city = $jsonData['combinedTo']['address']['city'];

}
if (isset($jsonData['combinedTo']['address']['cityId'])) {
    $model->combinedTo->address->cityId = $jsonData['combinedTo']['address']['cityId'];

}
if (isset($jsonData['combinedTo']['address']['cityType'])) {
    $model->combinedTo->address->cityType = $jsonData['combinedTo']['address']['cityType'];

}
if (isset($jsonData['combinedTo']['address']['street'])) {
    $model->combinedTo->address->street = $jsonData['combinedTo']['address']['street'];

}
if (isset($jsonData['combinedTo']['address']['streetId'])) {
    $model->combinedTo->address->streetId = $jsonData['combinedTo']['address']['streetId'];

}
if (isset($jsonData['combinedTo']['address']['streetType'])) {
    $model->combinedTo->address->streetType = $jsonData['combinedTo']['address']['streetType'];

}
if (isset($jsonData['combinedTo']['address']['building'])) {
    $model->combinedTo->address->building = $jsonData['combinedTo']['address']['building'];

}
if (isset($jsonData['combinedTo']['address']['flat'])) {
    $model->combinedTo->address->flat = $jsonData['combinedTo']['address']['flat'];

}
if (isset($jsonData['combinedTo']['address']['floor'])) {
    $model->combinedTo->address->floor = $jsonData['combinedTo']['address']['floor'];

}
if (isset($jsonData['combinedTo']['address']['block'])) {
    $model->combinedTo->address->block = $jsonData['combinedTo']['address']['block'];

}
if (isset($jsonData['combinedTo']['address']['house'])) {
    $model->combinedTo->address->house = $jsonData['combinedTo']['address']['house'];

}
if (isset($jsonData['combinedTo']['address']['housing'])) {
    $model->combinedTo->address->housing = $jsonData['combinedTo']['address']['housing'];

}
if (isset($jsonData['combinedTo']['address']['metro'])) {
    $model->combinedTo->address->metro = $jsonData['combinedTo']['address']['metro'];

}
if (isset($jsonData['combinedTo']['address']['notes'])) {
    $model->combinedTo->address->notes = $jsonData['combinedTo']['address']['notes'];

}
if (isset($jsonData['combinedTo']['address']['text'])) {
    $model->combinedTo->address->text = $jsonData['combinedTo']['address']['text'];

}
if (isset($jsonData['combinedTo']['address']['externalId'])) {
    $model->combinedTo->address->externalId = $jsonData['combinedTo']['address']['externalId'];

}


}
if (isset($jsonData['combinedTo']['segments'])) {
    $model->combinedTo->segments = [];
foreach (array_keys($jsonData['combinedTo']['segments']) as $index35) {
    
$model->combinedTo->segments[$index35] = new RetailCrm\Api\Model\Entity\Customers\Segment();
if (isset($jsonData['combinedTo']['segments'][$index35]['id'])) {
    $model->combinedTo->segments[$index35]->id = $jsonData['combinedTo']['segments'][$index35]['id'];

}
if (isset($jsonData['combinedTo']['segments'][$index35]['code'])) {
    $model->combinedTo->segments[$index35]->code = $jsonData['combinedTo']['segments'][$index35]['code'];

}
if (isset($jsonData['combinedTo']['segments'][$index35]['name'])) {
    $model->combinedTo->segments[$index35]->name = $jsonData['combinedTo']['segments'][$index35]['name'];

}
if (isset($jsonData['combinedTo']['segments'][$index35]['createdAt'])) {
    $model->combinedTo->segments[$index35]->createdAt = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['combinedTo']['segments'][$index35]['createdAt']);

}
if (isset($jsonData['combinedTo']['segments'][$index35]['isDynamic'])) {
    $model->combinedTo->segments[$index35]->isDynamic = $jsonData['combinedTo']['segments'][$index35]['isDynamic'];

}
if (isset($jsonData['combinedTo']['segments'][$index35]['customersCount'])) {
    $model->combinedTo->segments[$index35]->customersCount = $jsonData['combinedTo']['segments'][$index35]['customersCount'];

}
if (isset($jsonData['combinedTo']['segments'][$index35]['active'])) {
    $model->combinedTo->segments[$index35]->active = $jsonData['combinedTo']['segments'][$index35]['active'];

}


}

}
if (isset($jsonData['combinedTo']['maturationTime'])) {
    $model->combinedTo->maturationTime = $jsonData['combinedTo']['maturationTime'];

}
if (isset($jsonData['combinedTo']['firstName'])) {
    $model->combinedTo->firstName = $jsonData['combinedTo']['firstName'];

}
if (isset($jsonData['combinedTo']['lastName'])) {
    $model->combinedTo->lastName = $jsonData['combinedTo']['lastName'];

}
if (isset($jsonData['combinedTo']['patronymic'])) {
    $model->combinedTo->patronymic = $jsonData['combinedTo']['patronymic'];

}
if (isset($jsonData['combinedTo']['sex'])) {
    $model->combinedTo->sex = $jsonData['combinedTo']['sex'];

}
if (isset($jsonData['combinedTo']['presumableSex'])) {
    $model->combinedTo->presumableSex = $jsonData['combinedTo']['presumableSex'];

}
if (isset($jsonData['combinedTo']['email'])) {
    $model->combinedTo->email = $jsonData['combinedTo']['email'];

}
if (isset($jsonData['combinedTo']['emailMarketingUnsubscribedAt'])) {
    $model->combinedTo->emailMarketingUnsubscribedAt = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['combinedTo']['emailMarketingUnsubscribedAt']);

}
if (isset($jsonData['combinedTo']['phones'])) {
    $model->combinedTo->phones = [];
foreach (array_keys($jsonData['combinedTo']['phones']) as $index33) {
    
$model->combinedTo->phones[$index33] = new RetailCrm\Api\Model\Entity\Customers\CustomerPhone();
if (isset($jsonData['combinedTo']['phones'][$index33]['number'])) {
    $model->combinedTo->phones[$index33]->number = $jsonData['combinedTo']['phones'][$index33]['number'];

}


}

}
if (isset($jsonData['combinedTo']['birthday'])) {
    $model->combinedTo->birthday = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['combinedTo']['birthday']);

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
if (isset($jsonData['combinedTo']['photoUrl'])) {
    $model->combinedTo->photoUrl = $jsonData['combinedTo']['photoUrl'];

}
if (isset($jsonData['combinedTo']['mgCustomerId'])) {
    $model->combinedTo->mgCustomerId = $jsonData['combinedTo']['mgCustomerId'];

}
if (isset($jsonData['combinedTo']['subscribed'])) {
    $model->combinedTo->subscribed = $jsonData['combinedTo']['subscribed'];

}


}



    return $model;
}
