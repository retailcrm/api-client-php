<?php

function deserialize_RetailCrm_Api_Model_Response_Customers_CustomersHistoryResponse(array $jsonData): RetailCrm\Api\Model\Response\Customers\CustomersHistoryResponse
{
    
$model = new RetailCrm\Api\Model\Response\Customers\CustomersHistoryResponse();
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
    
$model->history[$index20] = new RetailCrm\Api\Model\Entity\Customers\CustomerHistory();
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
    
$model->history[$index20]->customer = new RetailCrm\Api\Model\Entity\Customers\Customer();
if (isset($jsonData['history'][$index20]['customer']['type'])) {
    $model->history[$index20]->customer->type = $jsonData['history'][$index20]['customer']['type'];

}
if (isset($jsonData['history'][$index20]['customer']['id'])) {
    $model->history[$index20]->customer->id = $jsonData['history'][$index20]['customer']['id'];

}
if (isset($jsonData['history'][$index20]['customer']['externalId'])) {
    $model->history[$index20]->customer->externalId = $jsonData['history'][$index20]['customer']['externalId'];

}
if (isset($jsonData['history'][$index20]['customer']['isContact'])) {
    $model->history[$index20]->customer->isContact = $jsonData['history'][$index20]['customer']['isContact'];

}
if (isset($jsonData['history'][$index20]['customer']['createdAt'])) {
    $model->history[$index20]->customer->createdAt = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['history'][$index20]['customer']['createdAt']);

}
if (isset($jsonData['history'][$index20]['customer']['managerId'])) {
    $model->history[$index20]->customer->managerId = $jsonData['history'][$index20]['customer']['managerId'];

}
if (isset($jsonData['history'][$index20]['customer']['vip'])) {
    $model->history[$index20]->customer->vip = $jsonData['history'][$index20]['customer']['vip'];

}
if (isset($jsonData['history'][$index20]['customer']['bad'])) {
    $model->history[$index20]->customer->bad = $jsonData['history'][$index20]['customer']['bad'];

}
if (isset($jsonData['history'][$index20]['customer']['browserId'])) {
    $model->history[$index20]->customer->browserId = $jsonData['history'][$index20]['customer']['browserId'];

}
if (isset($jsonData['history'][$index20]['customer']['site'])) {
    $model->history[$index20]->customer->site = $jsonData['history'][$index20]['customer']['site'];

}
if (isset($jsonData['history'][$index20]['customer']['contragent'])) {
    
$model->history[$index20]->customer->contragent = new RetailCrm\Api\Model\Entity\Customers\CustomerContragent();
if (isset($jsonData['history'][$index20]['customer']['contragent']['contragentType'])) {
    $model->history[$index20]->customer->contragent->contragentType = $jsonData['history'][$index20]['customer']['contragent']['contragentType'];

}
if (isset($jsonData['history'][$index20]['customer']['contragent']['legalName'])) {
    $model->history[$index20]->customer->contragent->legalName = $jsonData['history'][$index20]['customer']['contragent']['legalName'];

}
if (isset($jsonData['history'][$index20]['customer']['contragent']['legalAddress'])) {
    $model->history[$index20]->customer->contragent->legalAddress = $jsonData['history'][$index20]['customer']['contragent']['legalAddress'];

}
if (isset($jsonData['history'][$index20]['customer']['contragent']['INN'])) {
    $model->history[$index20]->customer->contragent->INN = $jsonData['history'][$index20]['customer']['contragent']['INN'];

}
if (isset($jsonData['history'][$index20]['customer']['contragent']['OKPO'])) {
    $model->history[$index20]->customer->contragent->OKPO = $jsonData['history'][$index20]['customer']['contragent']['OKPO'];

}
if (isset($jsonData['history'][$index20]['customer']['contragent']['KPP'])) {
    $model->history[$index20]->customer->contragent->KPP = $jsonData['history'][$index20]['customer']['contragent']['KPP'];

}
if (isset($jsonData['history'][$index20]['customer']['contragent']['OGRN'])) {
    $model->history[$index20]->customer->contragent->OGRN = $jsonData['history'][$index20]['customer']['contragent']['OGRN'];

}
if (isset($jsonData['history'][$index20]['customer']['contragent']['OGRNIP'])) {
    $model->history[$index20]->customer->contragent->OGRNIP = $jsonData['history'][$index20]['customer']['contragent']['OGRNIP'];

}
if (isset($jsonData['history'][$index20]['customer']['contragent']['certificateNumber'])) {
    $model->history[$index20]->customer->contragent->certificateNumber = $jsonData['history'][$index20]['customer']['contragent']['certificateNumber'];

}
if (isset($jsonData['history'][$index20]['customer']['contragent']['certificateDate'])) {
    $model->history[$index20]->customer->contragent->certificateDate = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['history'][$index20]['customer']['contragent']['certificateDate']);

}
if (isset($jsonData['history'][$index20]['customer']['contragent']['BIK'])) {
    $model->history[$index20]->customer->contragent->BIK = $jsonData['history'][$index20]['customer']['contragent']['BIK'];

}
if (isset($jsonData['history'][$index20]['customer']['contragent']['bank'])) {
    $model->history[$index20]->customer->contragent->bank = $jsonData['history'][$index20]['customer']['contragent']['bank'];

}
if (isset($jsonData['history'][$index20]['customer']['contragent']['bankAddress'])) {
    $model->history[$index20]->customer->contragent->bankAddress = $jsonData['history'][$index20]['customer']['contragent']['bankAddress'];

}
if (isset($jsonData['history'][$index20]['customer']['contragent']['corrAccount'])) {
    $model->history[$index20]->customer->contragent->corrAccount = $jsonData['history'][$index20]['customer']['contragent']['corrAccount'];

}
if (isset($jsonData['history'][$index20]['customer']['contragent']['bankAccount'])) {
    $model->history[$index20]->customer->contragent->bankAccount = $jsonData['history'][$index20]['customer']['contragent']['bankAccount'];

}


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
if (isset($jsonData['history'][$index20]['customer']['address'])) {
    
$model->history[$index20]->customer->address = new RetailCrm\Api\Model\Entity\Customers\CustomerAddress();
if (isset($jsonData['history'][$index20]['customer']['address']['id'])) {
    $model->history[$index20]->customer->address->id = $jsonData['history'][$index20]['customer']['address']['id'];

}
if (isset($jsonData['history'][$index20]['customer']['address']['name'])) {
    $model->history[$index20]->customer->address->name = $jsonData['history'][$index20]['customer']['address']['name'];

}
if (isset($jsonData['history'][$index20]['customer']['address']['isMain'])) {
    $model->history[$index20]->customer->address->isMain = $jsonData['history'][$index20]['customer']['address']['isMain'];

}
if (isset($jsonData['history'][$index20]['customer']['address']['index'])) {
    $model->history[$index20]->customer->address->index = $jsonData['history'][$index20]['customer']['address']['index'];

}
if (isset($jsonData['history'][$index20]['customer']['address']['countryIso'])) {
    $model->history[$index20]->customer->address->countryIso = $jsonData['history'][$index20]['customer']['address']['countryIso'];

}
if (isset($jsonData['history'][$index20]['customer']['address']['region'])) {
    $model->history[$index20]->customer->address->region = $jsonData['history'][$index20]['customer']['address']['region'];

}
if (isset($jsonData['history'][$index20]['customer']['address']['regionId'])) {
    $model->history[$index20]->customer->address->regionId = $jsonData['history'][$index20]['customer']['address']['regionId'];

}
if (isset($jsonData['history'][$index20]['customer']['address']['city'])) {
    $model->history[$index20]->customer->address->city = $jsonData['history'][$index20]['customer']['address']['city'];

}
if (isset($jsonData['history'][$index20]['customer']['address']['cityId'])) {
    $model->history[$index20]->customer->address->cityId = $jsonData['history'][$index20]['customer']['address']['cityId'];

}
if (isset($jsonData['history'][$index20]['customer']['address']['cityType'])) {
    $model->history[$index20]->customer->address->cityType = $jsonData['history'][$index20]['customer']['address']['cityType'];

}
if (isset($jsonData['history'][$index20]['customer']['address']['street'])) {
    $model->history[$index20]->customer->address->street = $jsonData['history'][$index20]['customer']['address']['street'];

}
if (isset($jsonData['history'][$index20]['customer']['address']['streetId'])) {
    $model->history[$index20]->customer->address->streetId = $jsonData['history'][$index20]['customer']['address']['streetId'];

}
if (isset($jsonData['history'][$index20]['customer']['address']['streetType'])) {
    $model->history[$index20]->customer->address->streetType = $jsonData['history'][$index20]['customer']['address']['streetType'];

}
if (isset($jsonData['history'][$index20]['customer']['address']['building'])) {
    $model->history[$index20]->customer->address->building = $jsonData['history'][$index20]['customer']['address']['building'];

}
if (isset($jsonData['history'][$index20]['customer']['address']['flat'])) {
    $model->history[$index20]->customer->address->flat = $jsonData['history'][$index20]['customer']['address']['flat'];

}
if (isset($jsonData['history'][$index20]['customer']['address']['floor'])) {
    $model->history[$index20]->customer->address->floor = $jsonData['history'][$index20]['customer']['address']['floor'];

}
if (isset($jsonData['history'][$index20]['customer']['address']['block'])) {
    $model->history[$index20]->customer->address->block = $jsonData['history'][$index20]['customer']['address']['block'];

}
if (isset($jsonData['history'][$index20]['customer']['address']['house'])) {
    $model->history[$index20]->customer->address->house = $jsonData['history'][$index20]['customer']['address']['house'];

}
if (isset($jsonData['history'][$index20]['customer']['address']['housing'])) {
    $model->history[$index20]->customer->address->housing = $jsonData['history'][$index20]['customer']['address']['housing'];

}
if (isset($jsonData['history'][$index20]['customer']['address']['metro'])) {
    $model->history[$index20]->customer->address->metro = $jsonData['history'][$index20]['customer']['address']['metro'];

}
if (isset($jsonData['history'][$index20]['customer']['address']['notes'])) {
    $model->history[$index20]->customer->address->notes = $jsonData['history'][$index20]['customer']['address']['notes'];

}
if (isset($jsonData['history'][$index20]['customer']['address']['text'])) {
    $model->history[$index20]->customer->address->text = $jsonData['history'][$index20]['customer']['address']['text'];

}
if (isset($jsonData['history'][$index20]['customer']['address']['externalId'])) {
    $model->history[$index20]->customer->address->externalId = $jsonData['history'][$index20]['customer']['address']['externalId'];

}


}
if (isset($jsonData['history'][$index20]['customer']['segments'])) {
    $model->history[$index20]->customer->segments = [];
foreach (array_keys($jsonData['history'][$index20]['customer']['segments']) as $index54) {
    
$model->history[$index20]->customer->segments[$index54] = new RetailCrm\Api\Model\Entity\Customers\Segment();
if (isset($jsonData['history'][$index20]['customer']['segments'][$index54]['id'])) {
    $model->history[$index20]->customer->segments[$index54]->id = $jsonData['history'][$index20]['customer']['segments'][$index54]['id'];

}
if (isset($jsonData['history'][$index20]['customer']['segments'][$index54]['code'])) {
    $model->history[$index20]->customer->segments[$index54]->code = $jsonData['history'][$index20]['customer']['segments'][$index54]['code'];

}
if (isset($jsonData['history'][$index20]['customer']['segments'][$index54]['name'])) {
    $model->history[$index20]->customer->segments[$index54]->name = $jsonData['history'][$index20]['customer']['segments'][$index54]['name'];

}
if (isset($jsonData['history'][$index20]['customer']['segments'][$index54]['createdAt'])) {
    $model->history[$index20]->customer->segments[$index54]->createdAt = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['history'][$index20]['customer']['segments'][$index54]['createdAt']);

}
if (isset($jsonData['history'][$index20]['customer']['segments'][$index54]['isDynamic'])) {
    $model->history[$index20]->customer->segments[$index54]->isDynamic = $jsonData['history'][$index20]['customer']['segments'][$index54]['isDynamic'];

}
if (isset($jsonData['history'][$index20]['customer']['segments'][$index54]['customersCount'])) {
    $model->history[$index20]->customer->segments[$index54]->customersCount = $jsonData['history'][$index20]['customer']['segments'][$index54]['customersCount'];

}
if (isset($jsonData['history'][$index20]['customer']['segments'][$index54]['active'])) {
    $model->history[$index20]->customer->segments[$index54]->active = $jsonData['history'][$index20]['customer']['segments'][$index54]['active'];

}


}

}
if (isset($jsonData['history'][$index20]['customer']['maturationTime'])) {
    $model->history[$index20]->customer->maturationTime = $jsonData['history'][$index20]['customer']['maturationTime'];

}
if (isset($jsonData['history'][$index20]['customer']['firstName'])) {
    $model->history[$index20]->customer->firstName = $jsonData['history'][$index20]['customer']['firstName'];

}
if (isset($jsonData['history'][$index20]['customer']['lastName'])) {
    $model->history[$index20]->customer->lastName = $jsonData['history'][$index20]['customer']['lastName'];

}
if (isset($jsonData['history'][$index20]['customer']['patronymic'])) {
    $model->history[$index20]->customer->patronymic = $jsonData['history'][$index20]['customer']['patronymic'];

}
if (isset($jsonData['history'][$index20]['customer']['sex'])) {
    $model->history[$index20]->customer->sex = $jsonData['history'][$index20]['customer']['sex'];

}
if (isset($jsonData['history'][$index20]['customer']['presumableSex'])) {
    $model->history[$index20]->customer->presumableSex = $jsonData['history'][$index20]['customer']['presumableSex'];

}
if (isset($jsonData['history'][$index20]['customer']['email'])) {
    $model->history[$index20]->customer->email = $jsonData['history'][$index20]['customer']['email'];

}
if (isset($jsonData['history'][$index20]['customer']['emailMarketingUnsubscribedAt'])) {
    $model->history[$index20]->customer->emailMarketingUnsubscribedAt = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['history'][$index20]['customer']['emailMarketingUnsubscribedAt']);

}
if (isset($jsonData['history'][$index20]['customer']['phones'])) {
    $model->history[$index20]->customer->phones = [];
foreach (array_keys($jsonData['history'][$index20]['customer']['phones']) as $index52) {
    
$model->history[$index20]->customer->phones[$index52] = new RetailCrm\Api\Model\Entity\Customers\CustomerPhone();
if (isset($jsonData['history'][$index20]['customer']['phones'][$index52]['number'])) {
    $model->history[$index20]->customer->phones[$index52]->number = $jsonData['history'][$index20]['customer']['phones'][$index52]['number'];

}


}

}
if (isset($jsonData['history'][$index20]['customer']['birthday'])) {
    $model->history[$index20]->customer->birthday = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['history'][$index20]['customer']['birthday']);

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
if (isset($jsonData['history'][$index20]['customer']['photoUrl'])) {
    $model->history[$index20]->customer->photoUrl = $jsonData['history'][$index20]['customer']['photoUrl'];

}
if (isset($jsonData['history'][$index20]['customer']['mgCustomerId'])) {
    $model->history[$index20]->customer->mgCustomerId = $jsonData['history'][$index20]['customer']['mgCustomerId'];

}
if (isset($jsonData['history'][$index20]['customer']['subscribed'])) {
    $model->history[$index20]->customer->subscribed = $jsonData['history'][$index20]['customer']['subscribed'];

}


}
if (isset($jsonData['history'][$index20]['address'])) {
    
$model->history[$index20]->address = new RetailCrm\Api\Model\Entity\Customers\HistoryAddress();
if (isset($jsonData['history'][$index20]['address']['id'])) {
    $model->history[$index20]->address->id = $jsonData['history'][$index20]['address']['id'];

}
if (isset($jsonData['history'][$index20]['address']['externalId'])) {
    $model->history[$index20]->address->externalId = $jsonData['history'][$index20]['address']['externalId'];

}
if (isset($jsonData['history'][$index20]['address']['name'])) {
    $model->history[$index20]->address->name = $jsonData['history'][$index20]['address']['name'];

}
if (isset($jsonData['history'][$index20]['address']['isMain'])) {
    $model->history[$index20]->address->isMain = $jsonData['history'][$index20]['address']['isMain'];

}


}
if (isset($jsonData['history'][$index20]['combinedTo'])) {
    
$model->history[$index20]->combinedTo = new RetailCrm\Api\Model\Entity\Customers\Customer();
if (isset($jsonData['history'][$index20]['combinedTo']['type'])) {
    $model->history[$index20]->combinedTo->type = $jsonData['history'][$index20]['combinedTo']['type'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['id'])) {
    $model->history[$index20]->combinedTo->id = $jsonData['history'][$index20]['combinedTo']['id'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['externalId'])) {
    $model->history[$index20]->combinedTo->externalId = $jsonData['history'][$index20]['combinedTo']['externalId'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['isContact'])) {
    $model->history[$index20]->combinedTo->isContact = $jsonData['history'][$index20]['combinedTo']['isContact'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['createdAt'])) {
    $model->history[$index20]->combinedTo->createdAt = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['history'][$index20]['combinedTo']['createdAt']);

}
if (isset($jsonData['history'][$index20]['combinedTo']['managerId'])) {
    $model->history[$index20]->combinedTo->managerId = $jsonData['history'][$index20]['combinedTo']['managerId'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['vip'])) {
    $model->history[$index20]->combinedTo->vip = $jsonData['history'][$index20]['combinedTo']['vip'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['bad'])) {
    $model->history[$index20]->combinedTo->bad = $jsonData['history'][$index20]['combinedTo']['bad'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['browserId'])) {
    $model->history[$index20]->combinedTo->browserId = $jsonData['history'][$index20]['combinedTo']['browserId'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['site'])) {
    $model->history[$index20]->combinedTo->site = $jsonData['history'][$index20]['combinedTo']['site'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['contragent'])) {
    
$model->history[$index20]->combinedTo->contragent = new RetailCrm\Api\Model\Entity\Customers\CustomerContragent();
if (isset($jsonData['history'][$index20]['combinedTo']['contragent']['contragentType'])) {
    $model->history[$index20]->combinedTo->contragent->contragentType = $jsonData['history'][$index20]['combinedTo']['contragent']['contragentType'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['contragent']['legalName'])) {
    $model->history[$index20]->combinedTo->contragent->legalName = $jsonData['history'][$index20]['combinedTo']['contragent']['legalName'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['contragent']['legalAddress'])) {
    $model->history[$index20]->combinedTo->contragent->legalAddress = $jsonData['history'][$index20]['combinedTo']['contragent']['legalAddress'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['contragent']['INN'])) {
    $model->history[$index20]->combinedTo->contragent->INN = $jsonData['history'][$index20]['combinedTo']['contragent']['INN'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['contragent']['OKPO'])) {
    $model->history[$index20]->combinedTo->contragent->OKPO = $jsonData['history'][$index20]['combinedTo']['contragent']['OKPO'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['contragent']['KPP'])) {
    $model->history[$index20]->combinedTo->contragent->KPP = $jsonData['history'][$index20]['combinedTo']['contragent']['KPP'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['contragent']['OGRN'])) {
    $model->history[$index20]->combinedTo->contragent->OGRN = $jsonData['history'][$index20]['combinedTo']['contragent']['OGRN'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['contragent']['OGRNIP'])) {
    $model->history[$index20]->combinedTo->contragent->OGRNIP = $jsonData['history'][$index20]['combinedTo']['contragent']['OGRNIP'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['contragent']['certificateNumber'])) {
    $model->history[$index20]->combinedTo->contragent->certificateNumber = $jsonData['history'][$index20]['combinedTo']['contragent']['certificateNumber'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['contragent']['certificateDate'])) {
    $model->history[$index20]->combinedTo->contragent->certificateDate = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['history'][$index20]['combinedTo']['contragent']['certificateDate']);

}
if (isset($jsonData['history'][$index20]['combinedTo']['contragent']['BIK'])) {
    $model->history[$index20]->combinedTo->contragent->BIK = $jsonData['history'][$index20]['combinedTo']['contragent']['BIK'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['contragent']['bank'])) {
    $model->history[$index20]->combinedTo->contragent->bank = $jsonData['history'][$index20]['combinedTo']['contragent']['bank'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['contragent']['bankAddress'])) {
    $model->history[$index20]->combinedTo->contragent->bankAddress = $jsonData['history'][$index20]['combinedTo']['contragent']['bankAddress'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['contragent']['corrAccount'])) {
    $model->history[$index20]->combinedTo->contragent->corrAccount = $jsonData['history'][$index20]['combinedTo']['contragent']['corrAccount'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['contragent']['bankAccount'])) {
    $model->history[$index20]->combinedTo->contragent->bankAccount = $jsonData['history'][$index20]['combinedTo']['contragent']['bankAccount'];

}


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
if (isset($jsonData['history'][$index20]['combinedTo']['address'])) {
    
$model->history[$index20]->combinedTo->address = new RetailCrm\Api\Model\Entity\Customers\CustomerAddress();
if (isset($jsonData['history'][$index20]['combinedTo']['address']['id'])) {
    $model->history[$index20]->combinedTo->address->id = $jsonData['history'][$index20]['combinedTo']['address']['id'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['address']['name'])) {
    $model->history[$index20]->combinedTo->address->name = $jsonData['history'][$index20]['combinedTo']['address']['name'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['address']['isMain'])) {
    $model->history[$index20]->combinedTo->address->isMain = $jsonData['history'][$index20]['combinedTo']['address']['isMain'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['address']['index'])) {
    $model->history[$index20]->combinedTo->address->index = $jsonData['history'][$index20]['combinedTo']['address']['index'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['address']['countryIso'])) {
    $model->history[$index20]->combinedTo->address->countryIso = $jsonData['history'][$index20]['combinedTo']['address']['countryIso'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['address']['region'])) {
    $model->history[$index20]->combinedTo->address->region = $jsonData['history'][$index20]['combinedTo']['address']['region'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['address']['regionId'])) {
    $model->history[$index20]->combinedTo->address->regionId = $jsonData['history'][$index20]['combinedTo']['address']['regionId'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['address']['city'])) {
    $model->history[$index20]->combinedTo->address->city = $jsonData['history'][$index20]['combinedTo']['address']['city'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['address']['cityId'])) {
    $model->history[$index20]->combinedTo->address->cityId = $jsonData['history'][$index20]['combinedTo']['address']['cityId'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['address']['cityType'])) {
    $model->history[$index20]->combinedTo->address->cityType = $jsonData['history'][$index20]['combinedTo']['address']['cityType'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['address']['street'])) {
    $model->history[$index20]->combinedTo->address->street = $jsonData['history'][$index20]['combinedTo']['address']['street'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['address']['streetId'])) {
    $model->history[$index20]->combinedTo->address->streetId = $jsonData['history'][$index20]['combinedTo']['address']['streetId'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['address']['streetType'])) {
    $model->history[$index20]->combinedTo->address->streetType = $jsonData['history'][$index20]['combinedTo']['address']['streetType'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['address']['building'])) {
    $model->history[$index20]->combinedTo->address->building = $jsonData['history'][$index20]['combinedTo']['address']['building'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['address']['flat'])) {
    $model->history[$index20]->combinedTo->address->flat = $jsonData['history'][$index20]['combinedTo']['address']['flat'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['address']['floor'])) {
    $model->history[$index20]->combinedTo->address->floor = $jsonData['history'][$index20]['combinedTo']['address']['floor'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['address']['block'])) {
    $model->history[$index20]->combinedTo->address->block = $jsonData['history'][$index20]['combinedTo']['address']['block'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['address']['house'])) {
    $model->history[$index20]->combinedTo->address->house = $jsonData['history'][$index20]['combinedTo']['address']['house'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['address']['housing'])) {
    $model->history[$index20]->combinedTo->address->housing = $jsonData['history'][$index20]['combinedTo']['address']['housing'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['address']['metro'])) {
    $model->history[$index20]->combinedTo->address->metro = $jsonData['history'][$index20]['combinedTo']['address']['metro'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['address']['notes'])) {
    $model->history[$index20]->combinedTo->address->notes = $jsonData['history'][$index20]['combinedTo']['address']['notes'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['address']['text'])) {
    $model->history[$index20]->combinedTo->address->text = $jsonData['history'][$index20]['combinedTo']['address']['text'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['address']['externalId'])) {
    $model->history[$index20]->combinedTo->address->externalId = $jsonData['history'][$index20]['combinedTo']['address']['externalId'];

}


}
if (isset($jsonData['history'][$index20]['combinedTo']['segments'])) {
    $model->history[$index20]->combinedTo->segments = [];
foreach (array_keys($jsonData['history'][$index20]['combinedTo']['segments']) as $index56) {
    
$model->history[$index20]->combinedTo->segments[$index56] = new RetailCrm\Api\Model\Entity\Customers\Segment();
if (isset($jsonData['history'][$index20]['combinedTo']['segments'][$index56]['id'])) {
    $model->history[$index20]->combinedTo->segments[$index56]->id = $jsonData['history'][$index20]['combinedTo']['segments'][$index56]['id'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['segments'][$index56]['code'])) {
    $model->history[$index20]->combinedTo->segments[$index56]->code = $jsonData['history'][$index20]['combinedTo']['segments'][$index56]['code'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['segments'][$index56]['name'])) {
    $model->history[$index20]->combinedTo->segments[$index56]->name = $jsonData['history'][$index20]['combinedTo']['segments'][$index56]['name'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['segments'][$index56]['createdAt'])) {
    $model->history[$index20]->combinedTo->segments[$index56]->createdAt = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['history'][$index20]['combinedTo']['segments'][$index56]['createdAt']);

}
if (isset($jsonData['history'][$index20]['combinedTo']['segments'][$index56]['isDynamic'])) {
    $model->history[$index20]->combinedTo->segments[$index56]->isDynamic = $jsonData['history'][$index20]['combinedTo']['segments'][$index56]['isDynamic'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['segments'][$index56]['customersCount'])) {
    $model->history[$index20]->combinedTo->segments[$index56]->customersCount = $jsonData['history'][$index20]['combinedTo']['segments'][$index56]['customersCount'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['segments'][$index56]['active'])) {
    $model->history[$index20]->combinedTo->segments[$index56]->active = $jsonData['history'][$index20]['combinedTo']['segments'][$index56]['active'];

}


}

}
if (isset($jsonData['history'][$index20]['combinedTo']['maturationTime'])) {
    $model->history[$index20]->combinedTo->maturationTime = $jsonData['history'][$index20]['combinedTo']['maturationTime'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['firstName'])) {
    $model->history[$index20]->combinedTo->firstName = $jsonData['history'][$index20]['combinedTo']['firstName'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['lastName'])) {
    $model->history[$index20]->combinedTo->lastName = $jsonData['history'][$index20]['combinedTo']['lastName'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['patronymic'])) {
    $model->history[$index20]->combinedTo->patronymic = $jsonData['history'][$index20]['combinedTo']['patronymic'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['sex'])) {
    $model->history[$index20]->combinedTo->sex = $jsonData['history'][$index20]['combinedTo']['sex'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['presumableSex'])) {
    $model->history[$index20]->combinedTo->presumableSex = $jsonData['history'][$index20]['combinedTo']['presumableSex'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['email'])) {
    $model->history[$index20]->combinedTo->email = $jsonData['history'][$index20]['combinedTo']['email'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['emailMarketingUnsubscribedAt'])) {
    $model->history[$index20]->combinedTo->emailMarketingUnsubscribedAt = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['history'][$index20]['combinedTo']['emailMarketingUnsubscribedAt']);

}
if (isset($jsonData['history'][$index20]['combinedTo']['phones'])) {
    $model->history[$index20]->combinedTo->phones = [];
foreach (array_keys($jsonData['history'][$index20]['combinedTo']['phones']) as $index54) {
    
$model->history[$index20]->combinedTo->phones[$index54] = new RetailCrm\Api\Model\Entity\Customers\CustomerPhone();
if (isset($jsonData['history'][$index20]['combinedTo']['phones'][$index54]['number'])) {
    $model->history[$index20]->combinedTo->phones[$index54]->number = $jsonData['history'][$index20]['combinedTo']['phones'][$index54]['number'];

}


}

}
if (isset($jsonData['history'][$index20]['combinedTo']['birthday'])) {
    $model->history[$index20]->combinedTo->birthday = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['history'][$index20]['combinedTo']['birthday']);

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
if (isset($jsonData['history'][$index20]['combinedTo']['photoUrl'])) {
    $model->history[$index20]->combinedTo->photoUrl = $jsonData['history'][$index20]['combinedTo']['photoUrl'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['mgCustomerId'])) {
    $model->history[$index20]->combinedTo->mgCustomerId = $jsonData['history'][$index20]['combinedTo']['mgCustomerId'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['subscribed'])) {
    $model->history[$index20]->combinedTo->subscribed = $jsonData['history'][$index20]['combinedTo']['subscribed'];

}


}


}

}



    return $model;
}
