<?php

function deserialize_RetailCrm_Api_Model_Response_Customers_CustomerNotesResponse(array $jsonData): RetailCrm\Api\Model\Response\Customers\CustomerNotesResponse
{
    
$model = new RetailCrm\Api\Model\Response\Customers\CustomerNotesResponse();
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
if (isset($jsonData['notes'])) {
    $model->notes = [];
foreach (array_keys($jsonData['notes']) as $index18) {
    
$model->notes[$index18] = new RetailCrm\Api\Model\Entity\Customers\CustomerNote();
if (isset($jsonData['notes'][$index18]['customer'])) {
    
$model->notes[$index18]->customer = new RetailCrm\Api\Model\Entity\Customers\Customer();
if (isset($jsonData['notes'][$index18]['customer']['type'])) {
    $model->notes[$index18]->customer->type = $jsonData['notes'][$index18]['customer']['type'];

}
if (isset($jsonData['notes'][$index18]['customer']['id'])) {
    $model->notes[$index18]->customer->id = $jsonData['notes'][$index18]['customer']['id'];

}
if (isset($jsonData['notes'][$index18]['customer']['externalId'])) {
    $model->notes[$index18]->customer->externalId = $jsonData['notes'][$index18]['customer']['externalId'];

}
if (isset($jsonData['notes'][$index18]['customer']['isContact'])) {
    $model->notes[$index18]->customer->isContact = $jsonData['notes'][$index18]['customer']['isContact'];

}
if (isset($jsonData['notes'][$index18]['customer']['createdAt'])) {
    $model->notes[$index18]->customer->createdAt = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['notes'][$index18]['customer']['createdAt']);

}
if (isset($jsonData['notes'][$index18]['customer']['managerId'])) {
    $model->notes[$index18]->customer->managerId = $jsonData['notes'][$index18]['customer']['managerId'];

}
if (isset($jsonData['notes'][$index18]['customer']['vip'])) {
    $model->notes[$index18]->customer->vip = $jsonData['notes'][$index18]['customer']['vip'];

}
if (isset($jsonData['notes'][$index18]['customer']['bad'])) {
    $model->notes[$index18]->customer->bad = $jsonData['notes'][$index18]['customer']['bad'];

}
if (isset($jsonData['notes'][$index18]['customer']['browserId'])) {
    $model->notes[$index18]->customer->browserId = $jsonData['notes'][$index18]['customer']['browserId'];

}
if (isset($jsonData['notes'][$index18]['customer']['site'])) {
    $model->notes[$index18]->customer->site = $jsonData['notes'][$index18]['customer']['site'];

}
if (isset($jsonData['notes'][$index18]['customer']['contragent'])) {
    
$model->notes[$index18]->customer->contragent = new RetailCrm\Api\Model\Entity\Customers\CustomerContragent();
if (isset($jsonData['notes'][$index18]['customer']['contragent']['contragentType'])) {
    $model->notes[$index18]->customer->contragent->contragentType = $jsonData['notes'][$index18]['customer']['contragent']['contragentType'];

}
if (isset($jsonData['notes'][$index18]['customer']['contragent']['legalName'])) {
    $model->notes[$index18]->customer->contragent->legalName = $jsonData['notes'][$index18]['customer']['contragent']['legalName'];

}
if (isset($jsonData['notes'][$index18]['customer']['contragent']['legalAddress'])) {
    $model->notes[$index18]->customer->contragent->legalAddress = $jsonData['notes'][$index18]['customer']['contragent']['legalAddress'];

}
if (isset($jsonData['notes'][$index18]['customer']['contragent']['INN'])) {
    $model->notes[$index18]->customer->contragent->INN = $jsonData['notes'][$index18]['customer']['contragent']['INN'];

}
if (isset($jsonData['notes'][$index18]['customer']['contragent']['OKPO'])) {
    $model->notes[$index18]->customer->contragent->OKPO = $jsonData['notes'][$index18]['customer']['contragent']['OKPO'];

}
if (isset($jsonData['notes'][$index18]['customer']['contragent']['KPP'])) {
    $model->notes[$index18]->customer->contragent->KPP = $jsonData['notes'][$index18]['customer']['contragent']['KPP'];

}
if (isset($jsonData['notes'][$index18]['customer']['contragent']['OGRN'])) {
    $model->notes[$index18]->customer->contragent->OGRN = $jsonData['notes'][$index18]['customer']['contragent']['OGRN'];

}
if (isset($jsonData['notes'][$index18]['customer']['contragent']['OGRNIP'])) {
    $model->notes[$index18]->customer->contragent->OGRNIP = $jsonData['notes'][$index18]['customer']['contragent']['OGRNIP'];

}
if (isset($jsonData['notes'][$index18]['customer']['contragent']['certificateNumber'])) {
    $model->notes[$index18]->customer->contragent->certificateNumber = $jsonData['notes'][$index18]['customer']['contragent']['certificateNumber'];

}
if (isset($jsonData['notes'][$index18]['customer']['contragent']['certificateDate'])) {
    $model->notes[$index18]->customer->contragent->certificateDate = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['notes'][$index18]['customer']['contragent']['certificateDate']);

}
if (isset($jsonData['notes'][$index18]['customer']['contragent']['BIK'])) {
    $model->notes[$index18]->customer->contragent->BIK = $jsonData['notes'][$index18]['customer']['contragent']['BIK'];

}
if (isset($jsonData['notes'][$index18]['customer']['contragent']['bank'])) {
    $model->notes[$index18]->customer->contragent->bank = $jsonData['notes'][$index18]['customer']['contragent']['bank'];

}
if (isset($jsonData['notes'][$index18]['customer']['contragent']['bankAddress'])) {
    $model->notes[$index18]->customer->contragent->bankAddress = $jsonData['notes'][$index18]['customer']['contragent']['bankAddress'];

}
if (isset($jsonData['notes'][$index18]['customer']['contragent']['corrAccount'])) {
    $model->notes[$index18]->customer->contragent->corrAccount = $jsonData['notes'][$index18]['customer']['contragent']['corrAccount'];

}
if (isset($jsonData['notes'][$index18]['customer']['contragent']['bankAccount'])) {
    $model->notes[$index18]->customer->contragent->bankAccount = $jsonData['notes'][$index18]['customer']['contragent']['bankAccount'];

}


}
if (isset($jsonData['notes'][$index18]['customer']['tags'])) {
    $model->notes[$index18]->customer->tags = [];
foreach (array_keys($jsonData['notes'][$index18]['customer']['tags']) as $index48) {
    
$model->notes[$index18]->customer->tags[$index48] = new RetailCrm\Api\Model\Entity\Customers\CustomerTag();
if (isset($jsonData['notes'][$index18]['customer']['tags'][$index48]['name'])) {
    $model->notes[$index18]->customer->tags[$index48]->name = $jsonData['notes'][$index18]['customer']['tags'][$index48]['name'];

}
if (isset($jsonData['notes'][$index18]['customer']['tags'][$index48]['color'])) {
    $model->notes[$index18]->customer->tags[$index48]->color = $jsonData['notes'][$index18]['customer']['tags'][$index48]['color'];

}
if (isset($jsonData['notes'][$index18]['customer']['tags'][$index48]['attached'])) {
    $model->notes[$index18]->customer->tags[$index48]->attached = $jsonData['notes'][$index18]['customer']['tags'][$index48]['attached'];

}


}

}
if (isset($jsonData['notes'][$index18]['customer']['avgMarginSumm'])) {
    $model->notes[$index18]->customer->avgMarginSumm = (float) $jsonData['notes'][$index18]['customer']['avgMarginSumm'];

}
if (isset($jsonData['notes'][$index18]['customer']['marginSumm'])) {
    $model->notes[$index18]->customer->marginSumm = (float) $jsonData['notes'][$index18]['customer']['marginSumm'];

}
if (isset($jsonData['notes'][$index18]['customer']['totalSumm'])) {
    $model->notes[$index18]->customer->totalSumm = (float) $jsonData['notes'][$index18]['customer']['totalSumm'];

}
if (isset($jsonData['notes'][$index18]['customer']['averageSumm'])) {
    $model->notes[$index18]->customer->averageSumm = (float) $jsonData['notes'][$index18]['customer']['averageSumm'];

}
if (isset($jsonData['notes'][$index18]['customer']['ordersCount'])) {
    $model->notes[$index18]->customer->ordersCount = $jsonData['notes'][$index18]['customer']['ordersCount'];

}
if (isset($jsonData['notes'][$index18]['customer']['costSumm'])) {
    $model->notes[$index18]->customer->costSumm = (float) $jsonData['notes'][$index18]['customer']['costSumm'];

}
if (isset($jsonData['notes'][$index18]['customer']['customFields'])) {
    $model->notes[$index18]->customer->customFields = [];
foreach (array_keys($jsonData['notes'][$index18]['customer']['customFields']) as $index56) {
    $model->notes[$index18]->customer->customFields[$index56] = $jsonData['notes'][$index18]['customer']['customFields'][$index56];

}

}
if (isset($jsonData['notes'][$index18]['customer']['personalDiscount'])) {
    $model->notes[$index18]->customer->personalDiscount = (float) $jsonData['notes'][$index18]['customer']['personalDiscount'];

}
if (isset($jsonData['notes'][$index18]['customer']['cumulativeDiscount'])) {
    $model->notes[$index18]->customer->cumulativeDiscount = (float) $jsonData['notes'][$index18]['customer']['cumulativeDiscount'];

}
if (isset($jsonData['notes'][$index18]['customer']['discountCardNumber'])) {
    $model->notes[$index18]->customer->discountCardNumber = $jsonData['notes'][$index18]['customer']['discountCardNumber'];

}
if (isset($jsonData['notes'][$index18]['customer']['firstClientId'])) {
    $model->notes[$index18]->customer->firstClientId = $jsonData['notes'][$index18]['customer']['firstClientId'];

}
if (isset($jsonData['notes'][$index18]['customer']['lastClientId'])) {
    $model->notes[$index18]->customer->lastClientId = $jsonData['notes'][$index18]['customer']['lastClientId'];

}
if (isset($jsonData['notes'][$index18]['customer']['address'])) {
    
$model->notes[$index18]->customer->address = new RetailCrm\Api\Model\Entity\Customers\CustomerAddress();
if (isset($jsonData['notes'][$index18]['customer']['address']['id'])) {
    $model->notes[$index18]->customer->address->id = $jsonData['notes'][$index18]['customer']['address']['id'];

}
if (isset($jsonData['notes'][$index18]['customer']['address']['name'])) {
    $model->notes[$index18]->customer->address->name = $jsonData['notes'][$index18]['customer']['address']['name'];

}
if (isset($jsonData['notes'][$index18]['customer']['address']['isMain'])) {
    $model->notes[$index18]->customer->address->isMain = $jsonData['notes'][$index18]['customer']['address']['isMain'];

}
if (isset($jsonData['notes'][$index18]['customer']['address']['index'])) {
    $model->notes[$index18]->customer->address->index = $jsonData['notes'][$index18]['customer']['address']['index'];

}
if (isset($jsonData['notes'][$index18]['customer']['address']['countryIso'])) {
    $model->notes[$index18]->customer->address->countryIso = $jsonData['notes'][$index18]['customer']['address']['countryIso'];

}
if (isset($jsonData['notes'][$index18]['customer']['address']['region'])) {
    $model->notes[$index18]->customer->address->region = $jsonData['notes'][$index18]['customer']['address']['region'];

}
if (isset($jsonData['notes'][$index18]['customer']['address']['regionId'])) {
    $model->notes[$index18]->customer->address->regionId = $jsonData['notes'][$index18]['customer']['address']['regionId'];

}
if (isset($jsonData['notes'][$index18]['customer']['address']['city'])) {
    $model->notes[$index18]->customer->address->city = $jsonData['notes'][$index18]['customer']['address']['city'];

}
if (isset($jsonData['notes'][$index18]['customer']['address']['cityId'])) {
    $model->notes[$index18]->customer->address->cityId = $jsonData['notes'][$index18]['customer']['address']['cityId'];

}
if (isset($jsonData['notes'][$index18]['customer']['address']['cityType'])) {
    $model->notes[$index18]->customer->address->cityType = $jsonData['notes'][$index18]['customer']['address']['cityType'];

}
if (isset($jsonData['notes'][$index18]['customer']['address']['street'])) {
    $model->notes[$index18]->customer->address->street = $jsonData['notes'][$index18]['customer']['address']['street'];

}
if (isset($jsonData['notes'][$index18]['customer']['address']['streetId'])) {
    $model->notes[$index18]->customer->address->streetId = $jsonData['notes'][$index18]['customer']['address']['streetId'];

}
if (isset($jsonData['notes'][$index18]['customer']['address']['streetType'])) {
    $model->notes[$index18]->customer->address->streetType = $jsonData['notes'][$index18]['customer']['address']['streetType'];

}
if (isset($jsonData['notes'][$index18]['customer']['address']['building'])) {
    $model->notes[$index18]->customer->address->building = $jsonData['notes'][$index18]['customer']['address']['building'];

}
if (isset($jsonData['notes'][$index18]['customer']['address']['flat'])) {
    $model->notes[$index18]->customer->address->flat = $jsonData['notes'][$index18]['customer']['address']['flat'];

}
if (isset($jsonData['notes'][$index18]['customer']['address']['floor'])) {
    $model->notes[$index18]->customer->address->floor = $jsonData['notes'][$index18]['customer']['address']['floor'];

}
if (isset($jsonData['notes'][$index18]['customer']['address']['block'])) {
    $model->notes[$index18]->customer->address->block = $jsonData['notes'][$index18]['customer']['address']['block'];

}
if (isset($jsonData['notes'][$index18]['customer']['address']['house'])) {
    $model->notes[$index18]->customer->address->house = $jsonData['notes'][$index18]['customer']['address']['house'];

}
if (isset($jsonData['notes'][$index18]['customer']['address']['housing'])) {
    $model->notes[$index18]->customer->address->housing = $jsonData['notes'][$index18]['customer']['address']['housing'];

}
if (isset($jsonData['notes'][$index18]['customer']['address']['metro'])) {
    $model->notes[$index18]->customer->address->metro = $jsonData['notes'][$index18]['customer']['address']['metro'];

}
if (isset($jsonData['notes'][$index18]['customer']['address']['notes'])) {
    $model->notes[$index18]->customer->address->notes = $jsonData['notes'][$index18]['customer']['address']['notes'];

}
if (isset($jsonData['notes'][$index18]['customer']['address']['text'])) {
    $model->notes[$index18]->customer->address->text = $jsonData['notes'][$index18]['customer']['address']['text'];

}
if (isset($jsonData['notes'][$index18]['customer']['address']['externalId'])) {
    $model->notes[$index18]->customer->address->externalId = $jsonData['notes'][$index18]['customer']['address']['externalId'];

}


}
if (isset($jsonData['notes'][$index18]['customer']['segments'])) {
    $model->notes[$index18]->customer->segments = [];
foreach (array_keys($jsonData['notes'][$index18]['customer']['segments']) as $index52) {
    
$model->notes[$index18]->customer->segments[$index52] = new RetailCrm\Api\Model\Entity\Customers\Segment();
if (isset($jsonData['notes'][$index18]['customer']['segments'][$index52]['id'])) {
    $model->notes[$index18]->customer->segments[$index52]->id = $jsonData['notes'][$index18]['customer']['segments'][$index52]['id'];

}
if (isset($jsonData['notes'][$index18]['customer']['segments'][$index52]['code'])) {
    $model->notes[$index18]->customer->segments[$index52]->code = $jsonData['notes'][$index18]['customer']['segments'][$index52]['code'];

}
if (isset($jsonData['notes'][$index18]['customer']['segments'][$index52]['name'])) {
    $model->notes[$index18]->customer->segments[$index52]->name = $jsonData['notes'][$index18]['customer']['segments'][$index52]['name'];

}
if (isset($jsonData['notes'][$index18]['customer']['segments'][$index52]['createdAt'])) {
    $model->notes[$index18]->customer->segments[$index52]->createdAt = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['notes'][$index18]['customer']['segments'][$index52]['createdAt']);

}
if (isset($jsonData['notes'][$index18]['customer']['segments'][$index52]['isDynamic'])) {
    $model->notes[$index18]->customer->segments[$index52]->isDynamic = $jsonData['notes'][$index18]['customer']['segments'][$index52]['isDynamic'];

}
if (isset($jsonData['notes'][$index18]['customer']['segments'][$index52]['customersCount'])) {
    $model->notes[$index18]->customer->segments[$index52]->customersCount = $jsonData['notes'][$index18]['customer']['segments'][$index52]['customersCount'];

}
if (isset($jsonData['notes'][$index18]['customer']['segments'][$index52]['active'])) {
    $model->notes[$index18]->customer->segments[$index52]->active = $jsonData['notes'][$index18]['customer']['segments'][$index52]['active'];

}


}

}
if (isset($jsonData['notes'][$index18]['customer']['maturationTime'])) {
    $model->notes[$index18]->customer->maturationTime = $jsonData['notes'][$index18]['customer']['maturationTime'];

}
if (isset($jsonData['notes'][$index18]['customer']['firstName'])) {
    $model->notes[$index18]->customer->firstName = $jsonData['notes'][$index18]['customer']['firstName'];

}
if (isset($jsonData['notes'][$index18]['customer']['lastName'])) {
    $model->notes[$index18]->customer->lastName = $jsonData['notes'][$index18]['customer']['lastName'];

}
if (isset($jsonData['notes'][$index18]['customer']['patronymic'])) {
    $model->notes[$index18]->customer->patronymic = $jsonData['notes'][$index18]['customer']['patronymic'];

}
if (isset($jsonData['notes'][$index18]['customer']['sex'])) {
    $model->notes[$index18]->customer->sex = $jsonData['notes'][$index18]['customer']['sex'];

}
if (isset($jsonData['notes'][$index18]['customer']['presumableSex'])) {
    $model->notes[$index18]->customer->presumableSex = $jsonData['notes'][$index18]['customer']['presumableSex'];

}
if (isset($jsonData['notes'][$index18]['customer']['email'])) {
    $model->notes[$index18]->customer->email = $jsonData['notes'][$index18]['customer']['email'];

}
if (isset($jsonData['notes'][$index18]['customer']['emailMarketingUnsubscribedAt'])) {
    $model->notes[$index18]->customer->emailMarketingUnsubscribedAt = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['notes'][$index18]['customer']['emailMarketingUnsubscribedAt']);

}
if (isset($jsonData['notes'][$index18]['customer']['phones'])) {
    $model->notes[$index18]->customer->phones = [];
foreach (array_keys($jsonData['notes'][$index18]['customer']['phones']) as $index50) {
    
$model->notes[$index18]->customer->phones[$index50] = new RetailCrm\Api\Model\Entity\Customers\CustomerPhone();
if (isset($jsonData['notes'][$index18]['customer']['phones'][$index50]['number'])) {
    $model->notes[$index18]->customer->phones[$index50]->number = $jsonData['notes'][$index18]['customer']['phones'][$index50]['number'];

}


}

}
if (isset($jsonData['notes'][$index18]['customer']['birthday'])) {
    $model->notes[$index18]->customer->birthday = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['notes'][$index18]['customer']['birthday']);

}
if (isset($jsonData['notes'][$index18]['customer']['source'])) {
    
$model->notes[$index18]->customer->source = new RetailCrm\Api\Model\Entity\Source();
if (isset($jsonData['notes'][$index18]['customer']['source']['source'])) {
    $model->notes[$index18]->customer->source->source = $jsonData['notes'][$index18]['customer']['source']['source'];

}
if (isset($jsonData['notes'][$index18]['customer']['source']['medium'])) {
    $model->notes[$index18]->customer->source->medium = $jsonData['notes'][$index18]['customer']['source']['medium'];

}
if (isset($jsonData['notes'][$index18]['customer']['source']['campaign'])) {
    $model->notes[$index18]->customer->source->campaign = $jsonData['notes'][$index18]['customer']['source']['campaign'];

}
if (isset($jsonData['notes'][$index18]['customer']['source']['keyword'])) {
    $model->notes[$index18]->customer->source->keyword = $jsonData['notes'][$index18]['customer']['source']['keyword'];

}
if (isset($jsonData['notes'][$index18]['customer']['source']['content'])) {
    $model->notes[$index18]->customer->source->content = $jsonData['notes'][$index18]['customer']['source']['content'];

}


}
if (isset($jsonData['notes'][$index18]['customer']['photoUrl'])) {
    $model->notes[$index18]->customer->photoUrl = $jsonData['notes'][$index18]['customer']['photoUrl'];

}
if (isset($jsonData['notes'][$index18]['customer']['mgCustomerId'])) {
    $model->notes[$index18]->customer->mgCustomerId = $jsonData['notes'][$index18]['customer']['mgCustomerId'];

}
if (isset($jsonData['notes'][$index18]['customer']['subscribed'])) {
    $model->notes[$index18]->customer->subscribed = $jsonData['notes'][$index18]['customer']['subscribed'];

}


}
if (isset($jsonData['notes'][$index18]['managerId'])) {
    $model->notes[$index18]->managerId = $jsonData['notes'][$index18]['managerId'];

}
if (isset($jsonData['notes'][$index18]['id'])) {
    $model->notes[$index18]->id = $jsonData['notes'][$index18]['id'];

}
if (isset($jsonData['notes'][$index18]['text'])) {
    $model->notes[$index18]->text = $jsonData['notes'][$index18]['text'];

}
if (isset($jsonData['notes'][$index18]['createdAt'])) {
    $model->notes[$index18]->createdAt = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['notes'][$index18]['createdAt']);

}


}

}



    return $model;
}
