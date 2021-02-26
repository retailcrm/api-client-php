<?php

function deserialize_RetailCrm_Api_Model_Callback_Entity_Delivery_RequestProperty_RequestSave(array $jsonData): RetailCrm\Api\Model\Callback\Entity\Delivery\RequestProperty\RequestSave
{
    
$model = new RetailCrm\Api\Model\Callback\Entity\Delivery\RequestProperty\RequestSave();
if (isset($jsonData['deliveryId'])) {
    $model->deliveryId = $jsonData['deliveryId'];

}
if (isset($jsonData['order'])) {
    $model->order = $jsonData['order'];

}
if (isset($jsonData['orderNumber'])) {
    $model->orderNumber = $jsonData['orderNumber'];

}
if (isset($jsonData['site'])) {
    $model->site = $jsonData['site'];

}
if (isset($jsonData['siteName'])) {
    $model->siteName = $jsonData['siteName'];

}
if (isset($jsonData['store'])) {
    
$model->store = new RetailCrm\Api\Model\Callback\Entity\Delivery\Store();
if (isset($jsonData['store']['code'])) {
    $model->store->code = $jsonData['store']['code'];

}
if (isset($jsonData['store']['name'])) {
    $model->store->name = $jsonData['store']['name'];

}


}
if (isset($jsonData['storeworkTime'])) {
    
$model->storeworkTime = new RetailCrm\Api\Model\Callback\Entity\Delivery\SerializedStoreWeekOpeningHours();
if (isset($jsonData['storeworkTime']['mo'])) {
    $model->storeworkTime->mo = [];
foreach (array_keys($jsonData['storeworkTime']['mo']) as $index32) {
    
$model->storeworkTime->mo[$index32] = new RetailCrm\Api\Model\Callback\Entity\Delivery\StoreWorkTime();
if (isset($jsonData['storeworkTime']['mo'][$index32]['startTime'])) {
    $model->storeworkTime->mo[$index32]->startTime = $jsonData['storeworkTime']['mo'][$index32]['startTime'];

}
if (isset($jsonData['storeworkTime']['mo'][$index32]['endTime'])) {
    $model->storeworkTime->mo[$index32]->endTime = $jsonData['storeworkTime']['mo'][$index32]['endTime'];

}
if (isset($jsonData['storeworkTime']['mo'][$index32]['lunchStartTime'])) {
    $model->storeworkTime->mo[$index32]->lunchStartTime = $jsonData['storeworkTime']['mo'][$index32]['lunchStartTime'];

}
if (isset($jsonData['storeworkTime']['mo'][$index32]['lunchEndTime'])) {
    $model->storeworkTime->mo[$index32]->lunchEndTime = $jsonData['storeworkTime']['mo'][$index32]['lunchEndTime'];

}


}

}
if (isset($jsonData['storeworkTime']['tu'])) {
    $model->storeworkTime->tu = [];
foreach (array_keys($jsonData['storeworkTime']['tu']) as $index32) {
    
$model->storeworkTime->tu[$index32] = new RetailCrm\Api\Model\Callback\Entity\Delivery\StoreWorkTime();
if (isset($jsonData['storeworkTime']['tu'][$index32]['startTime'])) {
    $model->storeworkTime->tu[$index32]->startTime = $jsonData['storeworkTime']['tu'][$index32]['startTime'];

}
if (isset($jsonData['storeworkTime']['tu'][$index32]['endTime'])) {
    $model->storeworkTime->tu[$index32]->endTime = $jsonData['storeworkTime']['tu'][$index32]['endTime'];

}
if (isset($jsonData['storeworkTime']['tu'][$index32]['lunchStartTime'])) {
    $model->storeworkTime->tu[$index32]->lunchStartTime = $jsonData['storeworkTime']['tu'][$index32]['lunchStartTime'];

}
if (isset($jsonData['storeworkTime']['tu'][$index32]['lunchEndTime'])) {
    $model->storeworkTime->tu[$index32]->lunchEndTime = $jsonData['storeworkTime']['tu'][$index32]['lunchEndTime'];

}


}

}
if (isset($jsonData['storeworkTime']['we'])) {
    $model->storeworkTime->we = [];
foreach (array_keys($jsonData['storeworkTime']['we']) as $index32) {
    
$model->storeworkTime->we[$index32] = new RetailCrm\Api\Model\Callback\Entity\Delivery\StoreWorkTime();
if (isset($jsonData['storeworkTime']['we'][$index32]['startTime'])) {
    $model->storeworkTime->we[$index32]->startTime = $jsonData['storeworkTime']['we'][$index32]['startTime'];

}
if (isset($jsonData['storeworkTime']['we'][$index32]['endTime'])) {
    $model->storeworkTime->we[$index32]->endTime = $jsonData['storeworkTime']['we'][$index32]['endTime'];

}
if (isset($jsonData['storeworkTime']['we'][$index32]['lunchStartTime'])) {
    $model->storeworkTime->we[$index32]->lunchStartTime = $jsonData['storeworkTime']['we'][$index32]['lunchStartTime'];

}
if (isset($jsonData['storeworkTime']['we'][$index32]['lunchEndTime'])) {
    $model->storeworkTime->we[$index32]->lunchEndTime = $jsonData['storeworkTime']['we'][$index32]['lunchEndTime'];

}


}

}
if (isset($jsonData['storeworkTime']['th'])) {
    $model->storeworkTime->th = [];
foreach (array_keys($jsonData['storeworkTime']['th']) as $index32) {
    
$model->storeworkTime->th[$index32] = new RetailCrm\Api\Model\Callback\Entity\Delivery\StoreWorkTime();
if (isset($jsonData['storeworkTime']['th'][$index32]['startTime'])) {
    $model->storeworkTime->th[$index32]->startTime = $jsonData['storeworkTime']['th'][$index32]['startTime'];

}
if (isset($jsonData['storeworkTime']['th'][$index32]['endTime'])) {
    $model->storeworkTime->th[$index32]->endTime = $jsonData['storeworkTime']['th'][$index32]['endTime'];

}
if (isset($jsonData['storeworkTime']['th'][$index32]['lunchStartTime'])) {
    $model->storeworkTime->th[$index32]->lunchStartTime = $jsonData['storeworkTime']['th'][$index32]['lunchStartTime'];

}
if (isset($jsonData['storeworkTime']['th'][$index32]['lunchEndTime'])) {
    $model->storeworkTime->th[$index32]->lunchEndTime = $jsonData['storeworkTime']['th'][$index32]['lunchEndTime'];

}


}

}
if (isset($jsonData['storeworkTime']['fr'])) {
    $model->storeworkTime->fr = [];
foreach (array_keys($jsonData['storeworkTime']['fr']) as $index32) {
    
$model->storeworkTime->fr[$index32] = new RetailCrm\Api\Model\Callback\Entity\Delivery\StoreWorkTime();
if (isset($jsonData['storeworkTime']['fr'][$index32]['startTime'])) {
    $model->storeworkTime->fr[$index32]->startTime = $jsonData['storeworkTime']['fr'][$index32]['startTime'];

}
if (isset($jsonData['storeworkTime']['fr'][$index32]['endTime'])) {
    $model->storeworkTime->fr[$index32]->endTime = $jsonData['storeworkTime']['fr'][$index32]['endTime'];

}
if (isset($jsonData['storeworkTime']['fr'][$index32]['lunchStartTime'])) {
    $model->storeworkTime->fr[$index32]->lunchStartTime = $jsonData['storeworkTime']['fr'][$index32]['lunchStartTime'];

}
if (isset($jsonData['storeworkTime']['fr'][$index32]['lunchEndTime'])) {
    $model->storeworkTime->fr[$index32]->lunchEndTime = $jsonData['storeworkTime']['fr'][$index32]['lunchEndTime'];

}


}

}
if (isset($jsonData['storeworkTime']['sa'])) {
    $model->storeworkTime->sa = [];
foreach (array_keys($jsonData['storeworkTime']['sa']) as $index32) {
    
$model->storeworkTime->sa[$index32] = new RetailCrm\Api\Model\Callback\Entity\Delivery\StoreWorkTime();
if (isset($jsonData['storeworkTime']['sa'][$index32]['startTime'])) {
    $model->storeworkTime->sa[$index32]->startTime = $jsonData['storeworkTime']['sa'][$index32]['startTime'];

}
if (isset($jsonData['storeworkTime']['sa'][$index32]['endTime'])) {
    $model->storeworkTime->sa[$index32]->endTime = $jsonData['storeworkTime']['sa'][$index32]['endTime'];

}
if (isset($jsonData['storeworkTime']['sa'][$index32]['lunchStartTime'])) {
    $model->storeworkTime->sa[$index32]->lunchStartTime = $jsonData['storeworkTime']['sa'][$index32]['lunchStartTime'];

}
if (isset($jsonData['storeworkTime']['sa'][$index32]['lunchEndTime'])) {
    $model->storeworkTime->sa[$index32]->lunchEndTime = $jsonData['storeworkTime']['sa'][$index32]['lunchEndTime'];

}


}

}
if (isset($jsonData['storeworkTime']['su'])) {
    $model->storeworkTime->su = [];
foreach (array_keys($jsonData['storeworkTime']['su']) as $index32) {
    
$model->storeworkTime->su[$index32] = new RetailCrm\Api\Model\Callback\Entity\Delivery\StoreWorkTime();
if (isset($jsonData['storeworkTime']['su'][$index32]['startTime'])) {
    $model->storeworkTime->su[$index32]->startTime = $jsonData['storeworkTime']['su'][$index32]['startTime'];

}
if (isset($jsonData['storeworkTime']['su'][$index32]['endTime'])) {
    $model->storeworkTime->su[$index32]->endTime = $jsonData['storeworkTime']['su'][$index32]['endTime'];

}
if (isset($jsonData['storeworkTime']['su'][$index32]['lunchStartTime'])) {
    $model->storeworkTime->su[$index32]->lunchStartTime = $jsonData['storeworkTime']['su'][$index32]['lunchStartTime'];

}
if (isset($jsonData['storeworkTime']['su'][$index32]['lunchEndTime'])) {
    $model->storeworkTime->su[$index32]->lunchEndTime = $jsonData['storeworkTime']['su'][$index32]['lunchEndTime'];

}


}

}


}
if (isset($jsonData['legalEntity'])) {
    $model->legalEntity = $jsonData['legalEntity'];

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
if (isset($jsonData['manager'])) {
    
$model->manager = new RetailCrm\Api\Model\Callback\Entity\Delivery\Manager();
if (isset($jsonData['manager']['id'])) {
    $model->manager->id = $jsonData['manager']['id'];

}
if (isset($jsonData['manager']['lastName'])) {
    $model->manager->lastName = $jsonData['manager']['lastName'];

}
if (isset($jsonData['manager']['firstName'])) {
    $model->manager->firstName = $jsonData['manager']['firstName'];

}
if (isset($jsonData['manager']['patronymic'])) {
    $model->manager->patronymic = $jsonData['manager']['patronymic'];

}
if (isset($jsonData['manager']['phone'])) {
    $model->manager->phone = $jsonData['manager']['phone'];

}
if (isset($jsonData['manager']['email'])) {
    $model->manager->email = $jsonData['manager']['email'];

}


}
if (isset($jsonData['packages'])) {
    $model->packages = [];
foreach (array_keys($jsonData['packages']) as $index21) {
    
$model->packages[$index21] = new RetailCrm\Api\Model\Callback\Entity\Delivery\Package();
if (isset($jsonData['packages'][$index21]['weight'])) {
    $model->packages[$index21]->weight = (float) $jsonData['packages'][$index21]['weight'];

}
if (isset($jsonData['packages'][$index21]['packageId'])) {
    $model->packages[$index21]->packageId = $jsonData['packages'][$index21]['packageId'];

}
if (isset($jsonData['packages'][$index21]['width'])) {
    $model->packages[$index21]->width = $jsonData['packages'][$index21]['width'];

}
if (isset($jsonData['packages'][$index21]['length'])) {
    $model->packages[$index21]->length = $jsonData['packages'][$index21]['length'];

}
if (isset($jsonData['packages'][$index21]['height'])) {
    $model->packages[$index21]->height = $jsonData['packages'][$index21]['height'];

}
if (isset($jsonData['packages'][$index21]['items'])) {
    $model->packages[$index21]->items = [];
foreach (array_keys($jsonData['packages'][$index21]['items']) as $index40) {
    
$model->packages[$index21]->items[$index40] = new RetailCrm\Api\Model\Callback\Entity\Delivery\PackageItem();
if (isset($jsonData['packages'][$index21]['items'][$index40]['offerId'])) {
    $model->packages[$index21]->items[$index40]->offerId = $jsonData['packages'][$index21]['items'][$index40]['offerId'];

}
if (isset($jsonData['packages'][$index21]['items'][$index40]['externalId'])) {
    $model->packages[$index21]->items[$index40]->externalId = $jsonData['packages'][$index21]['items'][$index40]['externalId'];

}
if (isset($jsonData['packages'][$index21]['items'][$index40]['xmlId'])) {
    $model->packages[$index21]->items[$index40]->xmlId = $jsonData['packages'][$index21]['items'][$index40]['xmlId'];

}
if (isset($jsonData['packages'][$index21]['items'][$index40]['name'])) {
    $model->packages[$index21]->items[$index40]->name = $jsonData['packages'][$index21]['items'][$index40]['name'];

}
if (isset($jsonData['packages'][$index21]['items'][$index40]['declaredValue'])) {
    $model->packages[$index21]->items[$index40]->declaredValue = (float) $jsonData['packages'][$index21]['items'][$index40]['declaredValue'];

}
if (isset($jsonData['packages'][$index21]['items'][$index40]['cod'])) {
    $model->packages[$index21]->items[$index40]->cod = (float) $jsonData['packages'][$index21]['items'][$index40]['cod'];

}
if (isset($jsonData['packages'][$index21]['items'][$index40]['vatRate'])) {
    $model->packages[$index21]->items[$index40]->vatRate = $jsonData['packages'][$index21]['items'][$index40]['vatRate'];

}
if (isset($jsonData['packages'][$index21]['items'][$index40]['quantity'])) {
    $model->packages[$index21]->items[$index40]->quantity = (float) $jsonData['packages'][$index21]['items'][$index40]['quantity'];

}
if (isset($jsonData['packages'][$index21]['items'][$index40]['unit'])) {
    
$model->packages[$index21]->items[$index40]->unit = new RetailCrm\Api\Model\Callback\Entity\Delivery\Unit();
if (isset($jsonData['packages'][$index21]['items'][$index40]['unit']['code'])) {
    $model->packages[$index21]->items[$index40]->unit->code = $jsonData['packages'][$index21]['items'][$index40]['unit']['code'];

}
if (isset($jsonData['packages'][$index21]['items'][$index40]['unit']['name'])) {
    $model->packages[$index21]->items[$index40]->unit->name = $jsonData['packages'][$index21]['items'][$index40]['unit']['name'];

}
if (isset($jsonData['packages'][$index21]['items'][$index40]['unit']['sym'])) {
    $model->packages[$index21]->items[$index40]->unit->sym = $jsonData['packages'][$index21]['items'][$index40]['unit']['sym'];

}


}
if (isset($jsonData['packages'][$index21]['items'][$index40]['cost'])) {
    $model->packages[$index21]->items[$index40]->cost = (float) $jsonData['packages'][$index21]['items'][$index40]['cost'];

}
if (isset($jsonData['packages'][$index21]['items'][$index40]['markingCodes'])) {
    $model->packages[$index21]->items[$index40]->markingCodes = $jsonData['packages'][$index21]['items'][$index40]['markingCodes'];

}
if (isset($jsonData['packages'][$index21]['items'][$index40]['properties'])) {
    $model->packages[$index21]->items[$index40]->properties = [];
foreach (array_keys($jsonData['packages'][$index21]['items'][$index40]['properties']) as $index64) {
    $model->packages[$index21]->items[$index40]->properties[$index64] = $jsonData['packages'][$index21]['items'][$index40]['properties'][$index64];

}

}


}

}


}

}
if (isset($jsonData['delivery'])) {
    
$model->delivery = new RetailCrm\Api\Model\Callback\Entity\Delivery\SaveDeliveryData();
if (isset($jsonData['delivery']['shipmentAddress'])) {
    
$model->delivery->shipmentAddress = new RetailCrm\Api\Model\Callback\Entity\Delivery\DeliveryAddress();
if (isset($jsonData['delivery']['shipmentAddress']['index'])) {
    $model->delivery->shipmentAddress->index = $jsonData['delivery']['shipmentAddress']['index'];

}
if (isset($jsonData['delivery']['shipmentAddress']['countryIso'])) {
    $model->delivery->shipmentAddress->countryIso = $jsonData['delivery']['shipmentAddress']['countryIso'];

}
if (isset($jsonData['delivery']['shipmentAddress']['region'])) {
    $model->delivery->shipmentAddress->region = $jsonData['delivery']['shipmentAddress']['region'];

}
if (isset($jsonData['delivery']['shipmentAddress']['regionId'])) {
    $model->delivery->shipmentAddress->regionId = $jsonData['delivery']['shipmentAddress']['regionId'];

}
if (isset($jsonData['delivery']['shipmentAddress']['city'])) {
    $model->delivery->shipmentAddress->city = $jsonData['delivery']['shipmentAddress']['city'];

}
if (isset($jsonData['delivery']['shipmentAddress']['cityId'])) {
    $model->delivery->shipmentAddress->cityId = $jsonData['delivery']['shipmentAddress']['cityId'];

}
if (isset($jsonData['delivery']['shipmentAddress']['cityType'])) {
    $model->delivery->shipmentAddress->cityType = $jsonData['delivery']['shipmentAddress']['cityType'];

}
if (isset($jsonData['delivery']['shipmentAddress']['street'])) {
    $model->delivery->shipmentAddress->street = $jsonData['delivery']['shipmentAddress']['street'];

}
if (isset($jsonData['delivery']['shipmentAddress']['streetId'])) {
    $model->delivery->shipmentAddress->streetId = $jsonData['delivery']['shipmentAddress']['streetId'];

}
if (isset($jsonData['delivery']['shipmentAddress']['streetType'])) {
    $model->delivery->shipmentAddress->streetType = $jsonData['delivery']['shipmentAddress']['streetType'];

}
if (isset($jsonData['delivery']['shipmentAddress']['building'])) {
    $model->delivery->shipmentAddress->building = $jsonData['delivery']['shipmentAddress']['building'];

}
if (isset($jsonData['delivery']['shipmentAddress']['flat'])) {
    $model->delivery->shipmentAddress->flat = $jsonData['delivery']['shipmentAddress']['flat'];

}
if (isset($jsonData['delivery']['shipmentAddress']['floor'])) {
    $model->delivery->shipmentAddress->floor = $jsonData['delivery']['shipmentAddress']['floor'];

}
if (isset($jsonData['delivery']['shipmentAddress']['block'])) {
    $model->delivery->shipmentAddress->block = $jsonData['delivery']['shipmentAddress']['block'];

}
if (isset($jsonData['delivery']['shipmentAddress']['house'])) {
    $model->delivery->shipmentAddress->house = $jsonData['delivery']['shipmentAddress']['house'];

}
if (isset($jsonData['delivery']['shipmentAddress']['housing'])) {
    $model->delivery->shipmentAddress->housing = $jsonData['delivery']['shipmentAddress']['housing'];

}
if (isset($jsonData['delivery']['shipmentAddress']['metro'])) {
    $model->delivery->shipmentAddress->metro = $jsonData['delivery']['shipmentAddress']['metro'];

}
if (isset($jsonData['delivery']['shipmentAddress']['notes'])) {
    $model->delivery->shipmentAddress->notes = $jsonData['delivery']['shipmentAddress']['notes'];

}
if (isset($jsonData['delivery']['shipmentAddress']['text'])) {
    $model->delivery->shipmentAddress->text = $jsonData['delivery']['shipmentAddress']['text'];

}
if (isset($jsonData['delivery']['shipmentAddress']['terminal'])) {
    $model->delivery->shipmentAddress->terminal = $jsonData['delivery']['shipmentAddress']['terminal'];

}
if (isset($jsonData['delivery']['shipmentAddress']['terminalData'])) {
    
$model->delivery->shipmentAddress->terminalData = new RetailCrm\Api\Model\Callback\Entity\Delivery\Terminal();
if (isset($jsonData['delivery']['shipmentAddress']['terminalData']['code'])) {
    $model->delivery->shipmentAddress->terminalData->code = $jsonData['delivery']['shipmentAddress']['terminalData']['code'];

}
if (isset($jsonData['delivery']['shipmentAddress']['terminalData']['cost'])) {
    $model->delivery->shipmentAddress->terminalData->cost = (float) $jsonData['delivery']['shipmentAddress']['terminalData']['cost'];

}
if (isset($jsonData['delivery']['shipmentAddress']['terminalData']['name'])) {
    $model->delivery->shipmentAddress->terminalData->name = $jsonData['delivery']['shipmentAddress']['terminalData']['name'];

}
if (isset($jsonData['delivery']['shipmentAddress']['terminalData']['description'])) {
    $model->delivery->shipmentAddress->terminalData->description = $jsonData['delivery']['shipmentAddress']['terminalData']['description'];

}
if (isset($jsonData['delivery']['shipmentAddress']['terminalData']['address'])) {
    $model->delivery->shipmentAddress->terminalData->address = $jsonData['delivery']['shipmentAddress']['terminalData']['address'];

}
if (isset($jsonData['delivery']['shipmentAddress']['terminalData']['schedule'])) {
    $model->delivery->shipmentAddress->terminalData->schedule = $jsonData['delivery']['shipmentAddress']['terminalData']['schedule'];

}
if (isset($jsonData['delivery']['shipmentAddress']['terminalData']['phone'])) {
    $model->delivery->shipmentAddress->terminalData->phone = $jsonData['delivery']['shipmentAddress']['terminalData']['phone'];

}
if (isset($jsonData['delivery']['shipmentAddress']['terminalData']['extraData'])) {
    $model->delivery->shipmentAddress->terminalData->extraData = [];
foreach (array_keys($jsonData['delivery']['shipmentAddress']['terminalData']['extraData']) as $index69) {
    $model->delivery->shipmentAddress->terminalData->extraData[$index69] = $jsonData['delivery']['shipmentAddress']['terminalData']['extraData'][$index69];

}

}
if (isset($jsonData['delivery']['shipmentAddress']['terminalData']['coordinates'])) {
    
$model->delivery->shipmentAddress->terminalData->coordinates = new RetailCrm\Api\Model\Callback\Entity\Delivery\Coordinates();
if (isset($jsonData['delivery']['shipmentAddress']['terminalData']['coordinates']['latitude'])) {
    $model->delivery->shipmentAddress->terminalData->coordinates->latitude = (float) $jsonData['delivery']['shipmentAddress']['terminalData']['coordinates']['latitude'];

}
if (isset($jsonData['delivery']['shipmentAddress']['terminalData']['coordinates']['longitude'])) {
    $model->delivery->shipmentAddress->terminalData->coordinates->longitude = (float) $jsonData['delivery']['shipmentAddress']['terminalData']['coordinates']['longitude'];

}


}


}


}
if (isset($jsonData['delivery']['deliveryAddress'])) {
    
$model->delivery->deliveryAddress = new RetailCrm\Api\Model\Callback\Entity\Delivery\DeliveryAddress();
if (isset($jsonData['delivery']['deliveryAddress']['index'])) {
    $model->delivery->deliveryAddress->index = $jsonData['delivery']['deliveryAddress']['index'];

}
if (isset($jsonData['delivery']['deliveryAddress']['countryIso'])) {
    $model->delivery->deliveryAddress->countryIso = $jsonData['delivery']['deliveryAddress']['countryIso'];

}
if (isset($jsonData['delivery']['deliveryAddress']['region'])) {
    $model->delivery->deliveryAddress->region = $jsonData['delivery']['deliveryAddress']['region'];

}
if (isset($jsonData['delivery']['deliveryAddress']['regionId'])) {
    $model->delivery->deliveryAddress->regionId = $jsonData['delivery']['deliveryAddress']['regionId'];

}
if (isset($jsonData['delivery']['deliveryAddress']['city'])) {
    $model->delivery->deliveryAddress->city = $jsonData['delivery']['deliveryAddress']['city'];

}
if (isset($jsonData['delivery']['deliveryAddress']['cityId'])) {
    $model->delivery->deliveryAddress->cityId = $jsonData['delivery']['deliveryAddress']['cityId'];

}
if (isset($jsonData['delivery']['deliveryAddress']['cityType'])) {
    $model->delivery->deliveryAddress->cityType = $jsonData['delivery']['deliveryAddress']['cityType'];

}
if (isset($jsonData['delivery']['deliveryAddress']['street'])) {
    $model->delivery->deliveryAddress->street = $jsonData['delivery']['deliveryAddress']['street'];

}
if (isset($jsonData['delivery']['deliveryAddress']['streetId'])) {
    $model->delivery->deliveryAddress->streetId = $jsonData['delivery']['deliveryAddress']['streetId'];

}
if (isset($jsonData['delivery']['deliveryAddress']['streetType'])) {
    $model->delivery->deliveryAddress->streetType = $jsonData['delivery']['deliveryAddress']['streetType'];

}
if (isset($jsonData['delivery']['deliveryAddress']['building'])) {
    $model->delivery->deliveryAddress->building = $jsonData['delivery']['deliveryAddress']['building'];

}
if (isset($jsonData['delivery']['deliveryAddress']['flat'])) {
    $model->delivery->deliveryAddress->flat = $jsonData['delivery']['deliveryAddress']['flat'];

}
if (isset($jsonData['delivery']['deliveryAddress']['floor'])) {
    $model->delivery->deliveryAddress->floor = $jsonData['delivery']['deliveryAddress']['floor'];

}
if (isset($jsonData['delivery']['deliveryAddress']['block'])) {
    $model->delivery->deliveryAddress->block = $jsonData['delivery']['deliveryAddress']['block'];

}
if (isset($jsonData['delivery']['deliveryAddress']['house'])) {
    $model->delivery->deliveryAddress->house = $jsonData['delivery']['deliveryAddress']['house'];

}
if (isset($jsonData['delivery']['deliveryAddress']['housing'])) {
    $model->delivery->deliveryAddress->housing = $jsonData['delivery']['deliveryAddress']['housing'];

}
if (isset($jsonData['delivery']['deliveryAddress']['metro'])) {
    $model->delivery->deliveryAddress->metro = $jsonData['delivery']['deliveryAddress']['metro'];

}
if (isset($jsonData['delivery']['deliveryAddress']['notes'])) {
    $model->delivery->deliveryAddress->notes = $jsonData['delivery']['deliveryAddress']['notes'];

}
if (isset($jsonData['delivery']['deliveryAddress']['text'])) {
    $model->delivery->deliveryAddress->text = $jsonData['delivery']['deliveryAddress']['text'];

}
if (isset($jsonData['delivery']['deliveryAddress']['terminal'])) {
    $model->delivery->deliveryAddress->terminal = $jsonData['delivery']['deliveryAddress']['terminal'];

}
if (isset($jsonData['delivery']['deliveryAddress']['terminalData'])) {
    
$model->delivery->deliveryAddress->terminalData = new RetailCrm\Api\Model\Callback\Entity\Delivery\Terminal();
if (isset($jsonData['delivery']['deliveryAddress']['terminalData']['code'])) {
    $model->delivery->deliveryAddress->terminalData->code = $jsonData['delivery']['deliveryAddress']['terminalData']['code'];

}
if (isset($jsonData['delivery']['deliveryAddress']['terminalData']['cost'])) {
    $model->delivery->deliveryAddress->terminalData->cost = (float) $jsonData['delivery']['deliveryAddress']['terminalData']['cost'];

}
if (isset($jsonData['delivery']['deliveryAddress']['terminalData']['name'])) {
    $model->delivery->deliveryAddress->terminalData->name = $jsonData['delivery']['deliveryAddress']['terminalData']['name'];

}
if (isset($jsonData['delivery']['deliveryAddress']['terminalData']['description'])) {
    $model->delivery->deliveryAddress->terminalData->description = $jsonData['delivery']['deliveryAddress']['terminalData']['description'];

}
if (isset($jsonData['delivery']['deliveryAddress']['terminalData']['address'])) {
    $model->delivery->deliveryAddress->terminalData->address = $jsonData['delivery']['deliveryAddress']['terminalData']['address'];

}
if (isset($jsonData['delivery']['deliveryAddress']['terminalData']['schedule'])) {
    $model->delivery->deliveryAddress->terminalData->schedule = $jsonData['delivery']['deliveryAddress']['terminalData']['schedule'];

}
if (isset($jsonData['delivery']['deliveryAddress']['terminalData']['phone'])) {
    $model->delivery->deliveryAddress->terminalData->phone = $jsonData['delivery']['deliveryAddress']['terminalData']['phone'];

}
if (isset($jsonData['delivery']['deliveryAddress']['terminalData']['extraData'])) {
    $model->delivery->deliveryAddress->terminalData->extraData = [];
foreach (array_keys($jsonData['delivery']['deliveryAddress']['terminalData']['extraData']) as $index69) {
    $model->delivery->deliveryAddress->terminalData->extraData[$index69] = $jsonData['delivery']['deliveryAddress']['terminalData']['extraData'][$index69];

}

}
if (isset($jsonData['delivery']['deliveryAddress']['terminalData']['coordinates'])) {
    
$model->delivery->deliveryAddress->terminalData->coordinates = new RetailCrm\Api\Model\Callback\Entity\Delivery\Coordinates();
if (isset($jsonData['delivery']['deliveryAddress']['terminalData']['coordinates']['latitude'])) {
    $model->delivery->deliveryAddress->terminalData->coordinates->latitude = (float) $jsonData['delivery']['deliveryAddress']['terminalData']['coordinates']['latitude'];

}
if (isset($jsonData['delivery']['deliveryAddress']['terminalData']['coordinates']['longitude'])) {
    $model->delivery->deliveryAddress->terminalData->coordinates->longitude = (float) $jsonData['delivery']['deliveryAddress']['terminalData']['coordinates']['longitude'];

}


}


}


}
if (isset($jsonData['delivery']['codPaymentType'])) {
    
$model->delivery->codPaymentType = new RetailCrm\Api\Model\Callback\Entity\Delivery\PaymentType();
if (isset($jsonData['delivery']['codPaymentType']['code'])) {
    $model->delivery->codPaymentType->code = $jsonData['delivery']['codPaymentType']['code'];

}
if (isset($jsonData['delivery']['codPaymentType']['name'])) {
    $model->delivery->codPaymentType->name = $jsonData['delivery']['codPaymentType']['name'];

}


}
if (isset($jsonData['delivery']['withCod'])) {
    $model->delivery->withCod = $jsonData['delivery']['withCod'];

}
if (isset($jsonData['delivery']['cod'])) {
    $model->delivery->cod = (float) $jsonData['delivery']['cod'];

}
if (isset($jsonData['delivery']['cost'])) {
    $model->delivery->cost = (float) $jsonData['delivery']['cost'];

}
if (isset($jsonData['delivery']['vatRate'])) {
    $model->delivery->vatRate = $jsonData['delivery']['vatRate'];

}
if (isset($jsonData['delivery']['tariff'])) {
    $model->delivery->tariff = $jsonData['delivery']['tariff'];

}
if (isset($jsonData['delivery']['payerType'])) {
    $model->delivery->payerType = $jsonData['delivery']['payerType'];

}
if (isset($jsonData['delivery']['shipmentDate'])) {
    $model->delivery->shipmentDate = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['delivery']['shipmentDate']);

}
if (isset($jsonData['delivery']['deliveryDate'])) {
    $model->delivery->deliveryDate = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['delivery']['deliveryDate']);

}
if (isset($jsonData['delivery']['deliveryTime'])) {
    
$model->delivery->deliveryTime = new RetailCrm\Api\Model\Entity\Delivery\TimeInterval();
if (isset($jsonData['delivery']['deliveryTime']['from'])) {
    $model->delivery->deliveryTime->from = \DateTime::createFromFormat('H:i', $jsonData['delivery']['deliveryTime']['from']);

}
if (isset($jsonData['delivery']['deliveryTime']['to'])) {
    $model->delivery->deliveryTime->to = \DateTime::createFromFormat('H:i', $jsonData['delivery']['deliveryTime']['to']);

}
if (isset($jsonData['delivery']['deliveryTime']['custom'])) {
    $model->delivery->deliveryTime->custom = $jsonData['delivery']['deliveryTime']['custom'];

}


}
if (isset($jsonData['delivery']['extraData'])) {
    $model->delivery->extraData = [];
foreach (array_keys($jsonData['delivery']['extraData']) as $index34) {
    $model->delivery->extraData[$index34] = $jsonData['delivery']['extraData'][$index34];

}

}


}
if (isset($jsonData['currency'])) {
    $model->currency = $jsonData['currency'];

}



    return $model;
}
