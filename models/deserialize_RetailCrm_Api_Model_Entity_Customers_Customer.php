<?php

function deserialize_RetailCrm_Api_Model_Entity_Customers_Customer(array $jsonData): RetailCrm\Api\Model\Entity\Customers\Customer
{
    
$model = new RetailCrm\Api\Model\Entity\Customers\Customer();
if (isset($jsonData['type'])) {
    $model->type = $jsonData['type'];

}
if (isset($jsonData['id'])) {
    $model->id = $jsonData['id'];

}
if (isset($jsonData['externalId'])) {
    $model->externalId = $jsonData['externalId'];

}
if (isset($jsonData['isContact'])) {
    $model->isContact = $jsonData['isContact'];

}
if (isset($jsonData['createdAt'])) {
    $model->createdAt = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['createdAt']);

}
if (isset($jsonData['managerId'])) {
    $model->managerId = $jsonData['managerId'];

}
if (isset($jsonData['vip'])) {
    $model->vip = $jsonData['vip'];

}
if (isset($jsonData['bad'])) {
    $model->bad = $jsonData['bad'];

}
if (isset($jsonData['browserId'])) {
    $model->browserId = $jsonData['browserId'];

}
if (isset($jsonData['site'])) {
    $model->site = $jsonData['site'];

}
if (isset($jsonData['contragent'])) {
    
$model->contragent = new RetailCrm\Api\Model\Entity\Customers\CustomerContragent();
if (isset($jsonData['contragent']['contragentType'])) {
    $model->contragent->contragentType = $jsonData['contragent']['contragentType'];

}
if (isset($jsonData['contragent']['legalName'])) {
    $model->contragent->legalName = $jsonData['contragent']['legalName'];

}
if (isset($jsonData['contragent']['legalAddress'])) {
    $model->contragent->legalAddress = $jsonData['contragent']['legalAddress'];

}
if (isset($jsonData['contragent']['INN'])) {
    $model->contragent->INN = $jsonData['contragent']['INN'];

}
if (isset($jsonData['contragent']['OKPO'])) {
    $model->contragent->OKPO = $jsonData['contragent']['OKPO'];

}
if (isset($jsonData['contragent']['KPP'])) {
    $model->contragent->KPP = $jsonData['contragent']['KPP'];

}
if (isset($jsonData['contragent']['OGRN'])) {
    $model->contragent->OGRN = $jsonData['contragent']['OGRN'];

}
if (isset($jsonData['contragent']['OGRNIP'])) {
    $model->contragent->OGRNIP = $jsonData['contragent']['OGRNIP'];

}
if (isset($jsonData['contragent']['certificateNumber'])) {
    $model->contragent->certificateNumber = $jsonData['contragent']['certificateNumber'];

}
if (isset($jsonData['contragent']['certificateDate'])) {
    $model->contragent->certificateDate = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['contragent']['certificateDate']);

}
if (isset($jsonData['contragent']['BIK'])) {
    $model->contragent->BIK = $jsonData['contragent']['BIK'];

}
if (isset($jsonData['contragent']['bank'])) {
    $model->contragent->bank = $jsonData['contragent']['bank'];

}
if (isset($jsonData['contragent']['bankAddress'])) {
    $model->contragent->bankAddress = $jsonData['contragent']['bankAddress'];

}
if (isset($jsonData['contragent']['corrAccount'])) {
    $model->contragent->corrAccount = $jsonData['contragent']['corrAccount'];

}
if (isset($jsonData['contragent']['bankAccount'])) {
    $model->contragent->bankAccount = $jsonData['contragent']['bankAccount'];

}


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
if (isset($jsonData['segments'])) {
    $model->segments = [];
foreach (array_keys($jsonData['segments']) as $index21) {
    
$model->segments[$index21] = new RetailCrm\Api\Model\Entity\Customers\Segment();
if (isset($jsonData['segments'][$index21]['id'])) {
    $model->segments[$index21]->id = $jsonData['segments'][$index21]['id'];

}
if (isset($jsonData['segments'][$index21]['code'])) {
    $model->segments[$index21]->code = $jsonData['segments'][$index21]['code'];

}
if (isset($jsonData['segments'][$index21]['name'])) {
    $model->segments[$index21]->name = $jsonData['segments'][$index21]['name'];

}
if (isset($jsonData['segments'][$index21]['createdAt'])) {
    $model->segments[$index21]->createdAt = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['segments'][$index21]['createdAt']);

}
if (isset($jsonData['segments'][$index21]['isDynamic'])) {
    $model->segments[$index21]->isDynamic = $jsonData['segments'][$index21]['isDynamic'];

}
if (isset($jsonData['segments'][$index21]['customersCount'])) {
    $model->segments[$index21]->customersCount = $jsonData['segments'][$index21]['customersCount'];

}
if (isset($jsonData['segments'][$index21]['active'])) {
    $model->segments[$index21]->active = $jsonData['segments'][$index21]['active'];

}


}

}
if (isset($jsonData['maturationTime'])) {
    $model->maturationTime = $jsonData['maturationTime'];

}
if (isset($jsonData['firstName'])) {
    $model->firstName = $jsonData['firstName'];

}
if (isset($jsonData['lastName'])) {
    $model->lastName = $jsonData['lastName'];

}
if (isset($jsonData['patronymic'])) {
    $model->patronymic = $jsonData['patronymic'];

}
if (isset($jsonData['sex'])) {
    $model->sex = $jsonData['sex'];

}
if (isset($jsonData['presumableSex'])) {
    $model->presumableSex = $jsonData['presumableSex'];

}
if (isset($jsonData['email'])) {
    $model->email = $jsonData['email'];

}
if (isset($jsonData['emailMarketingUnsubscribedAt'])) {
    $model->emailMarketingUnsubscribedAt = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['emailMarketingUnsubscribedAt']);

}
if (isset($jsonData['phones'])) {
    $model->phones = [];
foreach (array_keys($jsonData['phones']) as $index19) {
    
$model->phones[$index19] = new RetailCrm\Api\Model\Entity\Customers\CustomerPhone();
if (isset($jsonData['phones'][$index19]['number'])) {
    $model->phones[$index19]->number = $jsonData['phones'][$index19]['number'];

}


}

}
if (isset($jsonData['birthday'])) {
    $model->birthday = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['birthday']);

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
if (isset($jsonData['photoUrl'])) {
    $model->photoUrl = $jsonData['photoUrl'];

}
if (isset($jsonData['mgCustomerId'])) {
    $model->mgCustomerId = $jsonData['mgCustomerId'];

}
if (isset($jsonData['subscribed'])) {
    $model->subscribed = $jsonData['subscribed'];

}



    return $model;
}
