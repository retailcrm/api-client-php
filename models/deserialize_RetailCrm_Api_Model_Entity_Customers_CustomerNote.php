<?php

function deserialize_RetailCrm_Api_Model_Entity_Customers_CustomerNote(array $jsonData): RetailCrm\Api\Model\Entity\Customers\CustomerNote
{
    
$model = new RetailCrm\Api\Model\Entity\Customers\CustomerNote();
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
if (isset($jsonData['managerId'])) {
    $model->managerId = $jsonData['managerId'];

}
if (isset($jsonData['id'])) {
    $model->id = $jsonData['id'];

}
if (isset($jsonData['text'])) {
    $model->text = $jsonData['text'];

}
if (isset($jsonData['createdAt'])) {
    $model->createdAt = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['createdAt']);

}



    return $model;
}
