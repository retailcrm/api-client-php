<?php

function deserialize_RetailCrm_Api_Model_Response_Customers_CustomersResponse(array $jsonData): RetailCrm\Api\Model\Response\Customers\CustomersResponse
{
    
$model = new RetailCrm\Api\Model\Response\Customers\CustomersResponse();
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
if (isset($jsonData['customers'])) {
    $model->customers = [];
foreach (array_keys($jsonData['customers']) as $index22) {
    
$model->customers[$index22] = new RetailCrm\Api\Model\Entity\Customers\Customer();
if (isset($jsonData['customers'][$index22]['type'])) {
    $model->customers[$index22]->type = $jsonData['customers'][$index22]['type'];

}
if (isset($jsonData['customers'][$index22]['id'])) {
    $model->customers[$index22]->id = $jsonData['customers'][$index22]['id'];

}
if (isset($jsonData['customers'][$index22]['externalId'])) {
    $model->customers[$index22]->externalId = $jsonData['customers'][$index22]['externalId'];

}
if (isset($jsonData['customers'][$index22]['isContact'])) {
    $model->customers[$index22]->isContact = $jsonData['customers'][$index22]['isContact'];

}
if (isset($jsonData['customers'][$index22]['createdAt'])) {
    $model->customers[$index22]->createdAt = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['customers'][$index22]['createdAt']);

}
if (isset($jsonData['customers'][$index22]['managerId'])) {
    $model->customers[$index22]->managerId = $jsonData['customers'][$index22]['managerId'];

}
if (isset($jsonData['customers'][$index22]['vip'])) {
    $model->customers[$index22]->vip = $jsonData['customers'][$index22]['vip'];

}
if (isset($jsonData['customers'][$index22]['bad'])) {
    $model->customers[$index22]->bad = $jsonData['customers'][$index22]['bad'];

}
if (isset($jsonData['customers'][$index22]['browserId'])) {
    $model->customers[$index22]->browserId = $jsonData['customers'][$index22]['browserId'];

}
if (isset($jsonData['customers'][$index22]['site'])) {
    $model->customers[$index22]->site = $jsonData['customers'][$index22]['site'];

}
if (isset($jsonData['customers'][$index22]['contragent'])) {
    
$model->customers[$index22]->contragent = new RetailCrm\Api\Model\Entity\Customers\CustomerContragent();
if (isset($jsonData['customers'][$index22]['contragent']['contragentType'])) {
    $model->customers[$index22]->contragent->contragentType = $jsonData['customers'][$index22]['contragent']['contragentType'];

}
if (isset($jsonData['customers'][$index22]['contragent']['legalName'])) {
    $model->customers[$index22]->contragent->legalName = $jsonData['customers'][$index22]['contragent']['legalName'];

}
if (isset($jsonData['customers'][$index22]['contragent']['legalAddress'])) {
    $model->customers[$index22]->contragent->legalAddress = $jsonData['customers'][$index22]['contragent']['legalAddress'];

}
if (isset($jsonData['customers'][$index22]['contragent']['INN'])) {
    $model->customers[$index22]->contragent->INN = $jsonData['customers'][$index22]['contragent']['INN'];

}
if (isset($jsonData['customers'][$index22]['contragent']['OKPO'])) {
    $model->customers[$index22]->contragent->OKPO = $jsonData['customers'][$index22]['contragent']['OKPO'];

}
if (isset($jsonData['customers'][$index22]['contragent']['KPP'])) {
    $model->customers[$index22]->contragent->KPP = $jsonData['customers'][$index22]['contragent']['KPP'];

}
if (isset($jsonData['customers'][$index22]['contragent']['OGRN'])) {
    $model->customers[$index22]->contragent->OGRN = $jsonData['customers'][$index22]['contragent']['OGRN'];

}
if (isset($jsonData['customers'][$index22]['contragent']['OGRNIP'])) {
    $model->customers[$index22]->contragent->OGRNIP = $jsonData['customers'][$index22]['contragent']['OGRNIP'];

}
if (isset($jsonData['customers'][$index22]['contragent']['certificateNumber'])) {
    $model->customers[$index22]->contragent->certificateNumber = $jsonData['customers'][$index22]['contragent']['certificateNumber'];

}
if (isset($jsonData['customers'][$index22]['contragent']['certificateDate'])) {
    $model->customers[$index22]->contragent->certificateDate = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['customers'][$index22]['contragent']['certificateDate']);

}
if (isset($jsonData['customers'][$index22]['contragent']['BIK'])) {
    $model->customers[$index22]->contragent->BIK = $jsonData['customers'][$index22]['contragent']['BIK'];

}
if (isset($jsonData['customers'][$index22]['contragent']['bank'])) {
    $model->customers[$index22]->contragent->bank = $jsonData['customers'][$index22]['contragent']['bank'];

}
if (isset($jsonData['customers'][$index22]['contragent']['bankAddress'])) {
    $model->customers[$index22]->contragent->bankAddress = $jsonData['customers'][$index22]['contragent']['bankAddress'];

}
if (isset($jsonData['customers'][$index22]['contragent']['corrAccount'])) {
    $model->customers[$index22]->contragent->corrAccount = $jsonData['customers'][$index22]['contragent']['corrAccount'];

}
if (isset($jsonData['customers'][$index22]['contragent']['bankAccount'])) {
    $model->customers[$index22]->contragent->bankAccount = $jsonData['customers'][$index22]['contragent']['bankAccount'];

}


}
if (isset($jsonData['customers'][$index22]['tags'])) {
    $model->customers[$index22]->tags = [];
foreach (array_keys($jsonData['customers'][$index22]['tags']) as $index40) {
    
$model->customers[$index22]->tags[$index40] = new RetailCrm\Api\Model\Entity\Customers\CustomerTag();
if (isset($jsonData['customers'][$index22]['tags'][$index40]['name'])) {
    $model->customers[$index22]->tags[$index40]->name = $jsonData['customers'][$index22]['tags'][$index40]['name'];

}
if (isset($jsonData['customers'][$index22]['tags'][$index40]['color'])) {
    $model->customers[$index22]->tags[$index40]->color = $jsonData['customers'][$index22]['tags'][$index40]['color'];

}
if (isset($jsonData['customers'][$index22]['tags'][$index40]['attached'])) {
    $model->customers[$index22]->tags[$index40]->attached = $jsonData['customers'][$index22]['tags'][$index40]['attached'];

}


}

}
if (isset($jsonData['customers'][$index22]['avgMarginSumm'])) {
    $model->customers[$index22]->avgMarginSumm = (float) $jsonData['customers'][$index22]['avgMarginSumm'];

}
if (isset($jsonData['customers'][$index22]['marginSumm'])) {
    $model->customers[$index22]->marginSumm = (float) $jsonData['customers'][$index22]['marginSumm'];

}
if (isset($jsonData['customers'][$index22]['totalSumm'])) {
    $model->customers[$index22]->totalSumm = (float) $jsonData['customers'][$index22]['totalSumm'];

}
if (isset($jsonData['customers'][$index22]['averageSumm'])) {
    $model->customers[$index22]->averageSumm = (float) $jsonData['customers'][$index22]['averageSumm'];

}
if (isset($jsonData['customers'][$index22]['ordersCount'])) {
    $model->customers[$index22]->ordersCount = $jsonData['customers'][$index22]['ordersCount'];

}
if (isset($jsonData['customers'][$index22]['costSumm'])) {
    $model->customers[$index22]->costSumm = (float) $jsonData['customers'][$index22]['costSumm'];

}
if (isset($jsonData['customers'][$index22]['customFields'])) {
    $model->customers[$index22]->customFields = [];
foreach (array_keys($jsonData['customers'][$index22]['customFields']) as $index48) {
    $model->customers[$index22]->customFields[$index48] = $jsonData['customers'][$index22]['customFields'][$index48];

}

}
if (isset($jsonData['customers'][$index22]['personalDiscount'])) {
    $model->customers[$index22]->personalDiscount = (float) $jsonData['customers'][$index22]['personalDiscount'];

}
if (isset($jsonData['customers'][$index22]['cumulativeDiscount'])) {
    $model->customers[$index22]->cumulativeDiscount = (float) $jsonData['customers'][$index22]['cumulativeDiscount'];

}
if (isset($jsonData['customers'][$index22]['discountCardNumber'])) {
    $model->customers[$index22]->discountCardNumber = $jsonData['customers'][$index22]['discountCardNumber'];

}
if (isset($jsonData['customers'][$index22]['firstClientId'])) {
    $model->customers[$index22]->firstClientId = $jsonData['customers'][$index22]['firstClientId'];

}
if (isset($jsonData['customers'][$index22]['lastClientId'])) {
    $model->customers[$index22]->lastClientId = $jsonData['customers'][$index22]['lastClientId'];

}
if (isset($jsonData['customers'][$index22]['address'])) {
    
$model->customers[$index22]->address = new RetailCrm\Api\Model\Entity\Customers\CustomerAddress();
if (isset($jsonData['customers'][$index22]['address']['id'])) {
    $model->customers[$index22]->address->id = $jsonData['customers'][$index22]['address']['id'];

}
if (isset($jsonData['customers'][$index22]['address']['name'])) {
    $model->customers[$index22]->address->name = $jsonData['customers'][$index22]['address']['name'];

}
if (isset($jsonData['customers'][$index22]['address']['isMain'])) {
    $model->customers[$index22]->address->isMain = $jsonData['customers'][$index22]['address']['isMain'];

}
if (isset($jsonData['customers'][$index22]['address']['index'])) {
    $model->customers[$index22]->address->index = $jsonData['customers'][$index22]['address']['index'];

}
if (isset($jsonData['customers'][$index22]['address']['countryIso'])) {
    $model->customers[$index22]->address->countryIso = $jsonData['customers'][$index22]['address']['countryIso'];

}
if (isset($jsonData['customers'][$index22]['address']['region'])) {
    $model->customers[$index22]->address->region = $jsonData['customers'][$index22]['address']['region'];

}
if (isset($jsonData['customers'][$index22]['address']['regionId'])) {
    $model->customers[$index22]->address->regionId = $jsonData['customers'][$index22]['address']['regionId'];

}
if (isset($jsonData['customers'][$index22]['address']['city'])) {
    $model->customers[$index22]->address->city = $jsonData['customers'][$index22]['address']['city'];

}
if (isset($jsonData['customers'][$index22]['address']['cityId'])) {
    $model->customers[$index22]->address->cityId = $jsonData['customers'][$index22]['address']['cityId'];

}
if (isset($jsonData['customers'][$index22]['address']['cityType'])) {
    $model->customers[$index22]->address->cityType = $jsonData['customers'][$index22]['address']['cityType'];

}
if (isset($jsonData['customers'][$index22]['address']['street'])) {
    $model->customers[$index22]->address->street = $jsonData['customers'][$index22]['address']['street'];

}
if (isset($jsonData['customers'][$index22]['address']['streetId'])) {
    $model->customers[$index22]->address->streetId = $jsonData['customers'][$index22]['address']['streetId'];

}
if (isset($jsonData['customers'][$index22]['address']['streetType'])) {
    $model->customers[$index22]->address->streetType = $jsonData['customers'][$index22]['address']['streetType'];

}
if (isset($jsonData['customers'][$index22]['address']['building'])) {
    $model->customers[$index22]->address->building = $jsonData['customers'][$index22]['address']['building'];

}
if (isset($jsonData['customers'][$index22]['address']['flat'])) {
    $model->customers[$index22]->address->flat = $jsonData['customers'][$index22]['address']['flat'];

}
if (isset($jsonData['customers'][$index22]['address']['floor'])) {
    $model->customers[$index22]->address->floor = $jsonData['customers'][$index22]['address']['floor'];

}
if (isset($jsonData['customers'][$index22]['address']['block'])) {
    $model->customers[$index22]->address->block = $jsonData['customers'][$index22]['address']['block'];

}
if (isset($jsonData['customers'][$index22]['address']['house'])) {
    $model->customers[$index22]->address->house = $jsonData['customers'][$index22]['address']['house'];

}
if (isset($jsonData['customers'][$index22]['address']['housing'])) {
    $model->customers[$index22]->address->housing = $jsonData['customers'][$index22]['address']['housing'];

}
if (isset($jsonData['customers'][$index22]['address']['metro'])) {
    $model->customers[$index22]->address->metro = $jsonData['customers'][$index22]['address']['metro'];

}
if (isset($jsonData['customers'][$index22]['address']['notes'])) {
    $model->customers[$index22]->address->notes = $jsonData['customers'][$index22]['address']['notes'];

}
if (isset($jsonData['customers'][$index22]['address']['text'])) {
    $model->customers[$index22]->address->text = $jsonData['customers'][$index22]['address']['text'];

}
if (isset($jsonData['customers'][$index22]['address']['externalId'])) {
    $model->customers[$index22]->address->externalId = $jsonData['customers'][$index22]['address']['externalId'];

}


}
if (isset($jsonData['customers'][$index22]['segments'])) {
    $model->customers[$index22]->segments = [];
foreach (array_keys($jsonData['customers'][$index22]['segments']) as $index44) {
    
$model->customers[$index22]->segments[$index44] = new RetailCrm\Api\Model\Entity\Customers\Segment();
if (isset($jsonData['customers'][$index22]['segments'][$index44]['id'])) {
    $model->customers[$index22]->segments[$index44]->id = $jsonData['customers'][$index22]['segments'][$index44]['id'];

}
if (isset($jsonData['customers'][$index22]['segments'][$index44]['code'])) {
    $model->customers[$index22]->segments[$index44]->code = $jsonData['customers'][$index22]['segments'][$index44]['code'];

}
if (isset($jsonData['customers'][$index22]['segments'][$index44]['name'])) {
    $model->customers[$index22]->segments[$index44]->name = $jsonData['customers'][$index22]['segments'][$index44]['name'];

}
if (isset($jsonData['customers'][$index22]['segments'][$index44]['createdAt'])) {
    $model->customers[$index22]->segments[$index44]->createdAt = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['customers'][$index22]['segments'][$index44]['createdAt']);

}
if (isset($jsonData['customers'][$index22]['segments'][$index44]['isDynamic'])) {
    $model->customers[$index22]->segments[$index44]->isDynamic = $jsonData['customers'][$index22]['segments'][$index44]['isDynamic'];

}
if (isset($jsonData['customers'][$index22]['segments'][$index44]['customersCount'])) {
    $model->customers[$index22]->segments[$index44]->customersCount = $jsonData['customers'][$index22]['segments'][$index44]['customersCount'];

}
if (isset($jsonData['customers'][$index22]['segments'][$index44]['active'])) {
    $model->customers[$index22]->segments[$index44]->active = $jsonData['customers'][$index22]['segments'][$index44]['active'];

}


}

}
if (isset($jsonData['customers'][$index22]['maturationTime'])) {
    $model->customers[$index22]->maturationTime = $jsonData['customers'][$index22]['maturationTime'];

}
if (isset($jsonData['customers'][$index22]['firstName'])) {
    $model->customers[$index22]->firstName = $jsonData['customers'][$index22]['firstName'];

}
if (isset($jsonData['customers'][$index22]['lastName'])) {
    $model->customers[$index22]->lastName = $jsonData['customers'][$index22]['lastName'];

}
if (isset($jsonData['customers'][$index22]['patronymic'])) {
    $model->customers[$index22]->patronymic = $jsonData['customers'][$index22]['patronymic'];

}
if (isset($jsonData['customers'][$index22]['sex'])) {
    $model->customers[$index22]->sex = $jsonData['customers'][$index22]['sex'];

}
if (isset($jsonData['customers'][$index22]['presumableSex'])) {
    $model->customers[$index22]->presumableSex = $jsonData['customers'][$index22]['presumableSex'];

}
if (isset($jsonData['customers'][$index22]['email'])) {
    $model->customers[$index22]->email = $jsonData['customers'][$index22]['email'];

}
if (isset($jsonData['customers'][$index22]['emailMarketingUnsubscribedAt'])) {
    $model->customers[$index22]->emailMarketingUnsubscribedAt = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['customers'][$index22]['emailMarketingUnsubscribedAt']);

}
if (isset($jsonData['customers'][$index22]['phones'])) {
    $model->customers[$index22]->phones = [];
foreach (array_keys($jsonData['customers'][$index22]['phones']) as $index42) {
    
$model->customers[$index22]->phones[$index42] = new RetailCrm\Api\Model\Entity\Customers\CustomerPhone();
if (isset($jsonData['customers'][$index22]['phones'][$index42]['number'])) {
    $model->customers[$index22]->phones[$index42]->number = $jsonData['customers'][$index22]['phones'][$index42]['number'];

}


}

}
if (isset($jsonData['customers'][$index22]['birthday'])) {
    $model->customers[$index22]->birthday = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['customers'][$index22]['birthday']);

}
if (isset($jsonData['customers'][$index22]['source'])) {
    
$model->customers[$index22]->source = new RetailCrm\Api\Model\Entity\Source();
if (isset($jsonData['customers'][$index22]['source']['source'])) {
    $model->customers[$index22]->source->source = $jsonData['customers'][$index22]['source']['source'];

}
if (isset($jsonData['customers'][$index22]['source']['medium'])) {
    $model->customers[$index22]->source->medium = $jsonData['customers'][$index22]['source']['medium'];

}
if (isset($jsonData['customers'][$index22]['source']['campaign'])) {
    $model->customers[$index22]->source->campaign = $jsonData['customers'][$index22]['source']['campaign'];

}
if (isset($jsonData['customers'][$index22]['source']['keyword'])) {
    $model->customers[$index22]->source->keyword = $jsonData['customers'][$index22]['source']['keyword'];

}
if (isset($jsonData['customers'][$index22]['source']['content'])) {
    $model->customers[$index22]->source->content = $jsonData['customers'][$index22]['source']['content'];

}


}
if (isset($jsonData['customers'][$index22]['photoUrl'])) {
    $model->customers[$index22]->photoUrl = $jsonData['customers'][$index22]['photoUrl'];

}
if (isset($jsonData['customers'][$index22]['mgCustomerId'])) {
    $model->customers[$index22]->mgCustomerId = $jsonData['customers'][$index22]['mgCustomerId'];

}
if (isset($jsonData['customers'][$index22]['subscribed'])) {
    $model->customers[$index22]->subscribed = $jsonData['customers'][$index22]['subscribed'];

}


}

}



    return $model;
}
