<?php

function deserialize_RetailCrm_Api_Model_Response_Orders_OrdersHistoryResponse(array $jsonData): RetailCrm\Api\Model\Response\Orders\OrdersHistoryResponse
{
    
$model = new RetailCrm\Api\Model\Response\Orders\OrdersHistoryResponse();
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
    
$model->history[$index20] = new RetailCrm\Api\Model\Entity\Order\OrderHistory();
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
if (isset($jsonData['history'][$index20]['order'])) {
    
$model->history[$index20]->order = new RetailCrm\Api\Model\Entity\Order\Order();
if (isset($jsonData['history'][$index20]['order']['bonusesCreditTotal'])) {
    $model->history[$index20]->order->bonusesCreditTotal = (float) $jsonData['history'][$index20]['order']['bonusesCreditTotal'];

}
if (isset($jsonData['history'][$index20]['order']['bonusesChargeTotal'])) {
    $model->history[$index20]->order->bonusesChargeTotal = (float) $jsonData['history'][$index20]['order']['bonusesChargeTotal'];

}
if (isset($jsonData['history'][$index20]['order']['summ'])) {
    $model->history[$index20]->order->summ = (float) $jsonData['history'][$index20]['order']['summ'];

}
if (isset($jsonData['history'][$index20]['order']['id'])) {
    $model->history[$index20]->order->id = $jsonData['history'][$index20]['order']['id'];

}
if (isset($jsonData['history'][$index20]['order']['slug'])) {
    $model->history[$index20]->order->slug = $jsonData['history'][$index20]['order']['slug'];

}
if (isset($jsonData['history'][$index20]['order']['number'])) {
    $model->history[$index20]->order->number = $jsonData['history'][$index20]['order']['number'];

}
if (isset($jsonData['history'][$index20]['order']['externalId'])) {
    $model->history[$index20]->order->externalId = $jsonData['history'][$index20]['order']['externalId'];

}
if (isset($jsonData['history'][$index20]['order']['orderType'])) {
    $model->history[$index20]->order->orderType = $jsonData['history'][$index20]['order']['orderType'];

}
if (isset($jsonData['history'][$index20]['order']['orderMethod'])) {
    $model->history[$index20]->order->orderMethod = $jsonData['history'][$index20]['order']['orderMethod'];

}
if (isset($jsonData['history'][$index20]['order']['privilegeType'])) {
    $model->history[$index20]->order->privilegeType = $jsonData['history'][$index20]['order']['privilegeType'];

}
if (isset($jsonData['history'][$index20]['order']['countryIso'])) {
    $model->history[$index20]->order->countryIso = $jsonData['history'][$index20]['order']['countryIso'];

}
if (isset($jsonData['history'][$index20]['order']['createdAt'])) {
    $model->history[$index20]->order->createdAt = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['history'][$index20]['order']['createdAt']);

}
if (isset($jsonData['history'][$index20]['order']['statusUpdatedAt'])) {
    $model->history[$index20]->order->statusUpdatedAt = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['history'][$index20]['order']['statusUpdatedAt']);

}
if (isset($jsonData['history'][$index20]['order']['discountManualAmount'])) {
    $model->history[$index20]->order->discountManualAmount = (float) $jsonData['history'][$index20]['order']['discountManualAmount'];

}
if (isset($jsonData['history'][$index20]['order']['discountManualPercent'])) {
    $model->history[$index20]->order->discountManualPercent = (float) $jsonData['history'][$index20]['order']['discountManualPercent'];

}
if (isset($jsonData['history'][$index20]['order']['totalSumm'])) {
    $model->history[$index20]->order->totalSumm = (float) $jsonData['history'][$index20]['order']['totalSumm'];

}
if (isset($jsonData['history'][$index20]['order']['prepaySum'])) {
    $model->history[$index20]->order->prepaySum = (float) $jsonData['history'][$index20]['order']['prepaySum'];

}
if (isset($jsonData['history'][$index20]['order']['purchaseSumm'])) {
    $model->history[$index20]->order->purchaseSumm = (float) $jsonData['history'][$index20]['order']['purchaseSumm'];

}
if (isset($jsonData['history'][$index20]['order']['personalDiscountPercent'])) {
    $model->history[$index20]->order->personalDiscountPercent = (float) $jsonData['history'][$index20]['order']['personalDiscountPercent'];

}
if (isset($jsonData['history'][$index20]['order']['loyaltyLevel'])) {
    
$model->history[$index20]->order->loyaltyLevel = new RetailCrm\Api\Model\Entity\Loyalty\LoyaltyLevel();
if (isset($jsonData['history'][$index20]['order']['loyaltyLevel']['id'])) {
    $model->history[$index20]->order->loyaltyLevel->id = $jsonData['history'][$index20]['order']['loyaltyLevel']['id'];

}
if (isset($jsonData['history'][$index20]['order']['loyaltyLevel']['name'])) {
    $model->history[$index20]->order->loyaltyLevel->name = $jsonData['history'][$index20]['order']['loyaltyLevel']['name'];

}


}
if (isset($jsonData['history'][$index20]['order']['loyaltyEvent'])) {
    
$model->history[$index20]->order->loyaltyEvent = new RetailCrm\Api\Model\Entity\Loyalty\AbstractLoyaltyEvent();
if (isset($jsonData['history'][$index20]['order']['loyaltyEvent']['id'])) {
    $model->history[$index20]->order->loyaltyEvent->id = $jsonData['history'][$index20]['order']['loyaltyEvent']['id'];

}


}
if (isset($jsonData['history'][$index20]['order']['mark'])) {
    $model->history[$index20]->order->mark = $jsonData['history'][$index20]['order']['mark'];

}
if (isset($jsonData['history'][$index20]['order']['markDatetime'])) {
    $model->history[$index20]->order->markDatetime = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['history'][$index20]['order']['markDatetime']);

}
if (isset($jsonData['history'][$index20]['order']['lastName'])) {
    $model->history[$index20]->order->lastName = $jsonData['history'][$index20]['order']['lastName'];

}
if (isset($jsonData['history'][$index20]['order']['firstName'])) {
    $model->history[$index20]->order->firstName = $jsonData['history'][$index20]['order']['firstName'];

}
if (isset($jsonData['history'][$index20]['order']['patronymic'])) {
    $model->history[$index20]->order->patronymic = $jsonData['history'][$index20]['order']['patronymic'];

}
if (isset($jsonData['history'][$index20]['order']['phone'])) {
    $model->history[$index20]->order->phone = $jsonData['history'][$index20]['order']['phone'];

}
if (isset($jsonData['history'][$index20]['order']['additionalPhone'])) {
    $model->history[$index20]->order->additionalPhone = $jsonData['history'][$index20]['order']['additionalPhone'];

}
if (isset($jsonData['history'][$index20]['order']['email'])) {
    $model->history[$index20]->order->email = $jsonData['history'][$index20]['order']['email'];

}
if (isset($jsonData['history'][$index20]['order']['call'])) {
    $model->history[$index20]->order->call = $jsonData['history'][$index20]['order']['call'];

}
if (isset($jsonData['history'][$index20]['order']['expired'])) {
    $model->history[$index20]->order->expired = $jsonData['history'][$index20]['order']['expired'];

}
if (isset($jsonData['history'][$index20]['order']['customerComment'])) {
    $model->history[$index20]->order->customerComment = $jsonData['history'][$index20]['order']['customerComment'];

}
if (isset($jsonData['history'][$index20]['order']['managerComment'])) {
    $model->history[$index20]->order->managerComment = $jsonData['history'][$index20]['order']['managerComment'];

}
if (isset($jsonData['history'][$index20]['order']['managerId'])) {
    $model->history[$index20]->order->managerId = $jsonData['history'][$index20]['order']['managerId'];

}
if (isset($jsonData['history'][$index20]['order']['customer'])) {
    

if (
    !empty($jsonData['history'][$index20]['order']['customer']['type']) &&
    \RetailCrm\Api\Enum\Customers\CustomerType::CORPORATE_CUSTOMER === $jsonData['history'][$index20]['order']['customer']['type']
) {
    
$model->history[$index20]->order->customer = new RetailCrm\Api\Model\Entity\Customers\Customer();
if (isset($jsonData['history'][$index20]['order']['customer']['type'])) {
    $model->history[$index20]->order->customer->type = $jsonData['history'][$index20]['order']['customer']['type'];

}
if (isset($jsonData['history'][$index20]['order']['customer']['id'])) {
    $model->history[$index20]->order->customer->id = $jsonData['history'][$index20]['order']['customer']['id'];

}
if (isset($jsonData['history'][$index20]['order']['customer']['externalId'])) {
    $model->history[$index20]->order->customer->externalId = $jsonData['history'][$index20]['order']['customer']['externalId'];

}
if (isset($jsonData['history'][$index20]['order']['customer']['isContact'])) {
    $model->history[$index20]->order->customer->isContact = $jsonData['history'][$index20]['order']['customer']['isContact'];

}
if (isset($jsonData['history'][$index20]['order']['customer']['createdAt'])) {
    $model->history[$index20]->order->customer->createdAt = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['history'][$index20]['order']['customer']['createdAt']);

}
if (isset($jsonData['history'][$index20]['order']['customer']['managerId'])) {
    $model->history[$index20]->order->customer->managerId = $jsonData['history'][$index20]['order']['customer']['managerId'];

}
if (isset($jsonData['history'][$index20]['order']['customer']['vip'])) {
    $model->history[$index20]->order->customer->vip = $jsonData['history'][$index20]['order']['customer']['vip'];

}
if (isset($jsonData['history'][$index20]['order']['customer']['bad'])) {
    $model->history[$index20]->order->customer->bad = $jsonData['history'][$index20]['order']['customer']['bad'];

}
if (isset($jsonData['history'][$index20]['order']['customer']['browserId'])) {
    $model->history[$index20]->order->customer->browserId = $jsonData['history'][$index20]['order']['customer']['browserId'];

}
if (isset($jsonData['history'][$index20]['order']['customer']['site'])) {
    $model->history[$index20]->order->customer->site = $jsonData['history'][$index20]['order']['customer']['site'];

}
if (isset($jsonData['history'][$index20]['order']['customer']['contragent'])) {
    
$model->history[$index20]->order->customer->contragent = new RetailCrm\Api\Model\Entity\Customers\CustomerContragent();
if (isset($jsonData['history'][$index20]['order']['customer']['contragent']['contragentType'])) {
    $model->history[$index20]->order->customer->contragent->contragentType = $jsonData['history'][$index20]['order']['customer']['contragent']['contragentType'];

}
if (isset($jsonData['history'][$index20]['order']['customer']['contragent']['legalName'])) {
    $model->history[$index20]->order->customer->contragent->legalName = $jsonData['history'][$index20]['order']['customer']['contragent']['legalName'];

}
if (isset($jsonData['history'][$index20]['order']['customer']['contragent']['legalAddress'])) {
    $model->history[$index20]->order->customer->contragent->legalAddress = $jsonData['history'][$index20]['order']['customer']['contragent']['legalAddress'];

}
if (isset($jsonData['history'][$index20]['order']['customer']['contragent']['INN'])) {
    $model->history[$index20]->order->customer->contragent->INN = $jsonData['history'][$index20]['order']['customer']['contragent']['INN'];

}
if (isset($jsonData['history'][$index20]['order']['customer']['contragent']['OKPO'])) {
    $model->history[$index20]->order->customer->contragent->OKPO = $jsonData['history'][$index20]['order']['customer']['contragent']['OKPO'];

}
if (isset($jsonData['history'][$index20]['order']['customer']['contragent']['KPP'])) {
    $model->history[$index20]->order->customer->contragent->KPP = $jsonData['history'][$index20]['order']['customer']['contragent']['KPP'];

}
if (isset($jsonData['history'][$index20]['order']['customer']['contragent']['OGRN'])) {
    $model->history[$index20]->order->customer->contragent->OGRN = $jsonData['history'][$index20]['order']['customer']['contragent']['OGRN'];

}
if (isset($jsonData['history'][$index20]['order']['customer']['contragent']['OGRNIP'])) {
    $model->history[$index20]->order->customer->contragent->OGRNIP = $jsonData['history'][$index20]['order']['customer']['contragent']['OGRNIP'];

}
if (isset($jsonData['history'][$index20]['order']['customer']['contragent']['certificateNumber'])) {
    $model->history[$index20]->order->customer->contragent->certificateNumber = $jsonData['history'][$index20]['order']['customer']['contragent']['certificateNumber'];

}
if (isset($jsonData['history'][$index20]['order']['customer']['contragent']['certificateDate'])) {
    $model->history[$index20]->order->customer->contragent->certificateDate = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['history'][$index20]['order']['customer']['contragent']['certificateDate']);

}
if (isset($jsonData['history'][$index20]['order']['customer']['contragent']['BIK'])) {
    $model->history[$index20]->order->customer->contragent->BIK = $jsonData['history'][$index20]['order']['customer']['contragent']['BIK'];

}
if (isset($jsonData['history'][$index20]['order']['customer']['contragent']['bank'])) {
    $model->history[$index20]->order->customer->contragent->bank = $jsonData['history'][$index20]['order']['customer']['contragent']['bank'];

}
if (isset($jsonData['history'][$index20]['order']['customer']['contragent']['bankAddress'])) {
    $model->history[$index20]->order->customer->contragent->bankAddress = $jsonData['history'][$index20]['order']['customer']['contragent']['bankAddress'];

}
if (isset($jsonData['history'][$index20]['order']['customer']['contragent']['corrAccount'])) {
    $model->history[$index20]->order->customer->contragent->corrAccount = $jsonData['history'][$index20]['order']['customer']['contragent']['corrAccount'];

}
if (isset($jsonData['history'][$index20]['order']['customer']['contragent']['bankAccount'])) {
    $model->history[$index20]->order->customer->contragent->bankAccount = $jsonData['history'][$index20]['order']['customer']['contragent']['bankAccount'];

}


}
if (isset($jsonData['history'][$index20]['order']['customer']['tags'])) {
    $model->history[$index20]->order->customer->tags = [];
foreach (array_keys($jsonData['history'][$index20]['order']['customer']['tags']) as $index59) {
    
$model->history[$index20]->order->customer->tags[$index59] = new RetailCrm\Api\Model\Entity\Customers\CustomerTag();
if (isset($jsonData['history'][$index20]['order']['customer']['tags'][$index59]['name'])) {
    $model->history[$index20]->order->customer->tags[$index59]->name = $jsonData['history'][$index20]['order']['customer']['tags'][$index59]['name'];

}
if (isset($jsonData['history'][$index20]['order']['customer']['tags'][$index59]['color'])) {
    $model->history[$index20]->order->customer->tags[$index59]->color = $jsonData['history'][$index20]['order']['customer']['tags'][$index59]['color'];

}
if (isset($jsonData['history'][$index20]['order']['customer']['tags'][$index59]['attached'])) {
    $model->history[$index20]->order->customer->tags[$index59]->attached = $jsonData['history'][$index20]['order']['customer']['tags'][$index59]['attached'];

}


}

}
if (isset($jsonData['history'][$index20]['order']['customer']['avgMarginSumm'])) {
    $model->history[$index20]->order->customer->avgMarginSumm = (float) $jsonData['history'][$index20]['order']['customer']['avgMarginSumm'];

}
if (isset($jsonData['history'][$index20]['order']['customer']['marginSumm'])) {
    $model->history[$index20]->order->customer->marginSumm = (float) $jsonData['history'][$index20]['order']['customer']['marginSumm'];

}
if (isset($jsonData['history'][$index20]['order']['customer']['totalSumm'])) {
    $model->history[$index20]->order->customer->totalSumm = (float) $jsonData['history'][$index20]['order']['customer']['totalSumm'];

}
if (isset($jsonData['history'][$index20]['order']['customer']['averageSumm'])) {
    $model->history[$index20]->order->customer->averageSumm = (float) $jsonData['history'][$index20]['order']['customer']['averageSumm'];

}
if (isset($jsonData['history'][$index20]['order']['customer']['ordersCount'])) {
    $model->history[$index20]->order->customer->ordersCount = $jsonData['history'][$index20]['order']['customer']['ordersCount'];

}
if (isset($jsonData['history'][$index20]['order']['customer']['costSumm'])) {
    $model->history[$index20]->order->customer->costSumm = (float) $jsonData['history'][$index20]['order']['customer']['costSumm'];

}
if (isset($jsonData['history'][$index20]['order']['customer']['customFields'])) {
    $model->history[$index20]->order->customer->customFields = [];
foreach (array_keys($jsonData['history'][$index20]['order']['customer']['customFields']) as $index67) {
    $model->history[$index20]->order->customer->customFields[$index67] = $jsonData['history'][$index20]['order']['customer']['customFields'][$index67];

}

}
if (isset($jsonData['history'][$index20]['order']['customer']['personalDiscount'])) {
    $model->history[$index20]->order->customer->personalDiscount = (float) $jsonData['history'][$index20]['order']['customer']['personalDiscount'];

}
if (isset($jsonData['history'][$index20]['order']['customer']['cumulativeDiscount'])) {
    $model->history[$index20]->order->customer->cumulativeDiscount = (float) $jsonData['history'][$index20]['order']['customer']['cumulativeDiscount'];

}
if (isset($jsonData['history'][$index20]['order']['customer']['discountCardNumber'])) {
    $model->history[$index20]->order->customer->discountCardNumber = $jsonData['history'][$index20]['order']['customer']['discountCardNumber'];

}
if (isset($jsonData['history'][$index20]['order']['customer']['firstClientId'])) {
    $model->history[$index20]->order->customer->firstClientId = $jsonData['history'][$index20]['order']['customer']['firstClientId'];

}
if (isset($jsonData['history'][$index20]['order']['customer']['lastClientId'])) {
    $model->history[$index20]->order->customer->lastClientId = $jsonData['history'][$index20]['order']['customer']['lastClientId'];

}
if (isset($jsonData['history'][$index20]['order']['customer']['address'])) {
    
$model->history[$index20]->order->customer->address = new RetailCrm\Api\Model\Entity\Customers\CustomerAddress();
if (isset($jsonData['history'][$index20]['order']['customer']['address']['id'])) {
    $model->history[$index20]->order->customer->address->id = $jsonData['history'][$index20]['order']['customer']['address']['id'];

}
if (isset($jsonData['history'][$index20]['order']['customer']['address']['name'])) {
    $model->history[$index20]->order->customer->address->name = $jsonData['history'][$index20]['order']['customer']['address']['name'];

}
if (isset($jsonData['history'][$index20]['order']['customer']['address']['isMain'])) {
    $model->history[$index20]->order->customer->address->isMain = $jsonData['history'][$index20]['order']['customer']['address']['isMain'];

}
if (isset($jsonData['history'][$index20]['order']['customer']['address']['index'])) {
    $model->history[$index20]->order->customer->address->index = $jsonData['history'][$index20]['order']['customer']['address']['index'];

}
if (isset($jsonData['history'][$index20]['order']['customer']['address']['countryIso'])) {
    $model->history[$index20]->order->customer->address->countryIso = $jsonData['history'][$index20]['order']['customer']['address']['countryIso'];

}
if (isset($jsonData['history'][$index20]['order']['customer']['address']['region'])) {
    $model->history[$index20]->order->customer->address->region = $jsonData['history'][$index20]['order']['customer']['address']['region'];

}
if (isset($jsonData['history'][$index20]['order']['customer']['address']['regionId'])) {
    $model->history[$index20]->order->customer->address->regionId = $jsonData['history'][$index20]['order']['customer']['address']['regionId'];

}
if (isset($jsonData['history'][$index20]['order']['customer']['address']['city'])) {
    $model->history[$index20]->order->customer->address->city = $jsonData['history'][$index20]['order']['customer']['address']['city'];

}
if (isset($jsonData['history'][$index20]['order']['customer']['address']['cityId'])) {
    $model->history[$index20]->order->customer->address->cityId = $jsonData['history'][$index20]['order']['customer']['address']['cityId'];

}
if (isset($jsonData['history'][$index20]['order']['customer']['address']['cityType'])) {
    $model->history[$index20]->order->customer->address->cityType = $jsonData['history'][$index20]['order']['customer']['address']['cityType'];

}
if (isset($jsonData['history'][$index20]['order']['customer']['address']['street'])) {
    $model->history[$index20]->order->customer->address->street = $jsonData['history'][$index20]['order']['customer']['address']['street'];

}
if (isset($jsonData['history'][$index20]['order']['customer']['address']['streetId'])) {
    $model->history[$index20]->order->customer->address->streetId = $jsonData['history'][$index20]['order']['customer']['address']['streetId'];

}
if (isset($jsonData['history'][$index20]['order']['customer']['address']['streetType'])) {
    $model->history[$index20]->order->customer->address->streetType = $jsonData['history'][$index20]['order']['customer']['address']['streetType'];

}
if (isset($jsonData['history'][$index20]['order']['customer']['address']['building'])) {
    $model->history[$index20]->order->customer->address->building = $jsonData['history'][$index20]['order']['customer']['address']['building'];

}
if (isset($jsonData['history'][$index20]['order']['customer']['address']['flat'])) {
    $model->history[$index20]->order->customer->address->flat = $jsonData['history'][$index20]['order']['customer']['address']['flat'];

}
if (isset($jsonData['history'][$index20]['order']['customer']['address']['floor'])) {
    $model->history[$index20]->order->customer->address->floor = $jsonData['history'][$index20]['order']['customer']['address']['floor'];

}
if (isset($jsonData['history'][$index20]['order']['customer']['address']['block'])) {
    $model->history[$index20]->order->customer->address->block = $jsonData['history'][$index20]['order']['customer']['address']['block'];

}
if (isset($jsonData['history'][$index20]['order']['customer']['address']['house'])) {
    $model->history[$index20]->order->customer->address->house = $jsonData['history'][$index20]['order']['customer']['address']['house'];

}
if (isset($jsonData['history'][$index20]['order']['customer']['address']['housing'])) {
    $model->history[$index20]->order->customer->address->housing = $jsonData['history'][$index20]['order']['customer']['address']['housing'];

}
if (isset($jsonData['history'][$index20]['order']['customer']['address']['metro'])) {
    $model->history[$index20]->order->customer->address->metro = $jsonData['history'][$index20]['order']['customer']['address']['metro'];

}
if (isset($jsonData['history'][$index20]['order']['customer']['address']['notes'])) {
    $model->history[$index20]->order->customer->address->notes = $jsonData['history'][$index20]['order']['customer']['address']['notes'];

}
if (isset($jsonData['history'][$index20]['order']['customer']['address']['text'])) {
    $model->history[$index20]->order->customer->address->text = $jsonData['history'][$index20]['order']['customer']['address']['text'];

}
if (isset($jsonData['history'][$index20]['order']['customer']['address']['externalId'])) {
    $model->history[$index20]->order->customer->address->externalId = $jsonData['history'][$index20]['order']['customer']['address']['externalId'];

}


}
if (isset($jsonData['history'][$index20]['order']['customer']['segments'])) {
    $model->history[$index20]->order->customer->segments = [];
foreach (array_keys($jsonData['history'][$index20]['order']['customer']['segments']) as $index63) {
    
$model->history[$index20]->order->customer->segments[$index63] = new RetailCrm\Api\Model\Entity\Customers\Segment();
if (isset($jsonData['history'][$index20]['order']['customer']['segments'][$index63]['id'])) {
    $model->history[$index20]->order->customer->segments[$index63]->id = $jsonData['history'][$index20]['order']['customer']['segments'][$index63]['id'];

}
if (isset($jsonData['history'][$index20]['order']['customer']['segments'][$index63]['code'])) {
    $model->history[$index20]->order->customer->segments[$index63]->code = $jsonData['history'][$index20]['order']['customer']['segments'][$index63]['code'];

}
if (isset($jsonData['history'][$index20]['order']['customer']['segments'][$index63]['name'])) {
    $model->history[$index20]->order->customer->segments[$index63]->name = $jsonData['history'][$index20]['order']['customer']['segments'][$index63]['name'];

}
if (isset($jsonData['history'][$index20]['order']['customer']['segments'][$index63]['createdAt'])) {
    $model->history[$index20]->order->customer->segments[$index63]->createdAt = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['history'][$index20]['order']['customer']['segments'][$index63]['createdAt']);

}
if (isset($jsonData['history'][$index20]['order']['customer']['segments'][$index63]['isDynamic'])) {
    $model->history[$index20]->order->customer->segments[$index63]->isDynamic = $jsonData['history'][$index20]['order']['customer']['segments'][$index63]['isDynamic'];

}
if (isset($jsonData['history'][$index20]['order']['customer']['segments'][$index63]['customersCount'])) {
    $model->history[$index20]->order->customer->segments[$index63]->customersCount = $jsonData['history'][$index20]['order']['customer']['segments'][$index63]['customersCount'];

}
if (isset($jsonData['history'][$index20]['order']['customer']['segments'][$index63]['active'])) {
    $model->history[$index20]->order->customer->segments[$index63]->active = $jsonData['history'][$index20]['order']['customer']['segments'][$index63]['active'];

}


}

}
if (isset($jsonData['history'][$index20]['order']['customer']['maturationTime'])) {
    $model->history[$index20]->order->customer->maturationTime = $jsonData['history'][$index20]['order']['customer']['maturationTime'];

}
if (isset($jsonData['history'][$index20]['order']['customer']['firstName'])) {
    $model->history[$index20]->order->customer->firstName = $jsonData['history'][$index20]['order']['customer']['firstName'];

}
if (isset($jsonData['history'][$index20]['order']['customer']['lastName'])) {
    $model->history[$index20]->order->customer->lastName = $jsonData['history'][$index20]['order']['customer']['lastName'];

}
if (isset($jsonData['history'][$index20]['order']['customer']['patronymic'])) {
    $model->history[$index20]->order->customer->patronymic = $jsonData['history'][$index20]['order']['customer']['patronymic'];

}
if (isset($jsonData['history'][$index20]['order']['customer']['sex'])) {
    $model->history[$index20]->order->customer->sex = $jsonData['history'][$index20]['order']['customer']['sex'];

}
if (isset($jsonData['history'][$index20]['order']['customer']['presumableSex'])) {
    $model->history[$index20]->order->customer->presumableSex = $jsonData['history'][$index20]['order']['customer']['presumableSex'];

}
if (isset($jsonData['history'][$index20]['order']['customer']['email'])) {
    $model->history[$index20]->order->customer->email = $jsonData['history'][$index20]['order']['customer']['email'];

}
if (isset($jsonData['history'][$index20]['order']['customer']['emailMarketingUnsubscribedAt'])) {
    $model->history[$index20]->order->customer->emailMarketingUnsubscribedAt = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['history'][$index20]['order']['customer']['emailMarketingUnsubscribedAt']);

}
if (isset($jsonData['history'][$index20]['order']['customer']['phones'])) {
    $model->history[$index20]->order->customer->phones = [];
foreach (array_keys($jsonData['history'][$index20]['order']['customer']['phones']) as $index61) {
    
$model->history[$index20]->order->customer->phones[$index61] = new RetailCrm\Api\Model\Entity\Customers\CustomerPhone();
if (isset($jsonData['history'][$index20]['order']['customer']['phones'][$index61]['number'])) {
    $model->history[$index20]->order->customer->phones[$index61]->number = $jsonData['history'][$index20]['order']['customer']['phones'][$index61]['number'];

}


}

}
if (isset($jsonData['history'][$index20]['order']['customer']['birthday'])) {
    $model->history[$index20]->order->customer->birthday = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['history'][$index20]['order']['customer']['birthday']);

}
if (isset($jsonData['history'][$index20]['order']['customer']['source'])) {
    
$model->history[$index20]->order->customer->source = new RetailCrm\Api\Model\Entity\Source();
if (isset($jsonData['history'][$index20]['order']['customer']['source']['source'])) {
    $model->history[$index20]->order->customer->source->source = $jsonData['history'][$index20]['order']['customer']['source']['source'];

}
if (isset($jsonData['history'][$index20]['order']['customer']['source']['medium'])) {
    $model->history[$index20]->order->customer->source->medium = $jsonData['history'][$index20]['order']['customer']['source']['medium'];

}
if (isset($jsonData['history'][$index20]['order']['customer']['source']['campaign'])) {
    $model->history[$index20]->order->customer->source->campaign = $jsonData['history'][$index20]['order']['customer']['source']['campaign'];

}
if (isset($jsonData['history'][$index20]['order']['customer']['source']['keyword'])) {
    $model->history[$index20]->order->customer->source->keyword = $jsonData['history'][$index20]['order']['customer']['source']['keyword'];

}
if (isset($jsonData['history'][$index20]['order']['customer']['source']['content'])) {
    $model->history[$index20]->order->customer->source->content = $jsonData['history'][$index20]['order']['customer']['source']['content'];

}


}
if (isset($jsonData['history'][$index20]['order']['customer']['photoUrl'])) {
    $model->history[$index20]->order->customer->photoUrl = $jsonData['history'][$index20]['order']['customer']['photoUrl'];

}
if (isset($jsonData['history'][$index20]['order']['customer']['mgCustomerId'])) {
    $model->history[$index20]->order->customer->mgCustomerId = $jsonData['history'][$index20]['order']['customer']['mgCustomerId'];

}
if (isset($jsonData['history'][$index20]['order']['customer']['subscribed'])) {
    $model->history[$index20]->order->customer->subscribed = $jsonData['history'][$index20]['order']['customer']['subscribed'];

}


} else {
    
$model->history[$index20]->order->customer = new RetailCrm\Api\Model\Entity\CustomersCorporate\CustomerCorporate();
if (isset($jsonData['history'][$index20]['order']['customer']['type'])) {
    $model->history[$index20]->order->customer->type = $jsonData['history'][$index20]['order']['customer']['type'];

}
if (isset($jsonData['history'][$index20]['order']['customer']['id'])) {
    $model->history[$index20]->order->customer->id = $jsonData['history'][$index20]['order']['customer']['id'];

}
if (isset($jsonData['history'][$index20]['order']['customer']['externalId'])) {
    $model->history[$index20]->order->customer->externalId = $jsonData['history'][$index20]['order']['customer']['externalId'];

}
if (isset($jsonData['history'][$index20]['order']['customer']['nickName'])) {
    $model->history[$index20]->order->customer->nickName = $jsonData['history'][$index20]['order']['customer']['nickName'];

}
if (isset($jsonData['history'][$index20]['order']['customer']['mainAddress'])) {
    
$model->history[$index20]->order->customer->mainAddress = new RetailCrm\Api\Model\Entity\CustomersCorporate\EntityWithExternalIdNameOutput();
if (isset($jsonData['history'][$index20]['order']['customer']['mainAddress']['id'])) {
    $model->history[$index20]->order->customer->mainAddress->id = $jsonData['history'][$index20]['order']['customer']['mainAddress']['id'];

}
if (isset($jsonData['history'][$index20]['order']['customer']['mainAddress']['externalId'])) {
    $model->history[$index20]->order->customer->mainAddress->externalId = $jsonData['history'][$index20]['order']['customer']['mainAddress']['externalId'];

}
if (isset($jsonData['history'][$index20]['order']['customer']['mainAddress']['name'])) {
    $model->history[$index20]->order->customer->mainAddress->name = $jsonData['history'][$index20]['order']['customer']['mainAddress']['name'];

}


}
if (isset($jsonData['history'][$index20]['order']['customer']['createdAt'])) {
    $model->history[$index20]->order->customer->createdAt = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['history'][$index20]['order']['customer']['createdAt']);

}
if (isset($jsonData['history'][$index20]['order']['customer']['managerId'])) {
    $model->history[$index20]->order->customer->managerId = $jsonData['history'][$index20]['order']['customer']['managerId'];

}
if (isset($jsonData['history'][$index20]['order']['customer']['source'])) {
    
$model->history[$index20]->order->customer->source = new RetailCrm\Api\Model\Entity\Source();
if (isset($jsonData['history'][$index20]['order']['customer']['source']['source'])) {
    $model->history[$index20]->order->customer->source->source = $jsonData['history'][$index20]['order']['customer']['source']['source'];

}
if (isset($jsonData['history'][$index20]['order']['customer']['source']['medium'])) {
    $model->history[$index20]->order->customer->source->medium = $jsonData['history'][$index20]['order']['customer']['source']['medium'];

}
if (isset($jsonData['history'][$index20]['order']['customer']['source']['campaign'])) {
    $model->history[$index20]->order->customer->source->campaign = $jsonData['history'][$index20]['order']['customer']['source']['campaign'];

}
if (isset($jsonData['history'][$index20]['order']['customer']['source']['keyword'])) {
    $model->history[$index20]->order->customer->source->keyword = $jsonData['history'][$index20]['order']['customer']['source']['keyword'];

}
if (isset($jsonData['history'][$index20]['order']['customer']['source']['content'])) {
    $model->history[$index20]->order->customer->source->content = $jsonData['history'][$index20]['order']['customer']['source']['content'];

}


}
if (isset($jsonData['history'][$index20]['order']['customer']['customerContacts'])) {
    $model->history[$index20]->order->customer->customerContacts = [];
foreach (array_keys($jsonData['history'][$index20]['order']['customer']['customerContacts']) as $index71) {
    
$model->history[$index20]->order->customer->customerContacts[$index71] = new RetailCrm\Api\Model\Entity\CustomersCorporate\CustomerContact();
if (isset($jsonData['history'][$index20]['order']['customer']['customerContacts'][$index71]['id'])) {
    $model->history[$index20]->order->customer->customerContacts[$index71]->id = $jsonData['history'][$index20]['order']['customer']['customerContacts'][$index71]['id'];

}
if (isset($jsonData['history'][$index20]['order']['customer']['customerContacts'][$index71]['isMain'])) {
    $model->history[$index20]->order->customer->customerContacts[$index71]->isMain = $jsonData['history'][$index20]['order']['customer']['customerContacts'][$index71]['isMain'];

}
if (isset($jsonData['history'][$index20]['order']['customer']['customerContacts'][$index71]['customer'])) {
    
$model->history[$index20]->order->customer->customerContacts[$index71]->customer = new RetailCrm\Api\Model\Entity\CustomersCorporate\SerializedRelationAbstractCustomer();
if (isset($jsonData['history'][$index20]['order']['customer']['customerContacts'][$index71]['customer']['id'])) {
    $model->history[$index20]->order->customer->customerContacts[$index71]->customer->id = $jsonData['history'][$index20]['order']['customer']['customerContacts'][$index71]['customer']['id'];

}
if (isset($jsonData['history'][$index20]['order']['customer']['customerContacts'][$index71]['customer']['externalId'])) {
    $model->history[$index20]->order->customer->customerContacts[$index71]->customer->externalId = $jsonData['history'][$index20]['order']['customer']['customerContacts'][$index71]['customer']['externalId'];

}
if (isset($jsonData['history'][$index20]['order']['customer']['customerContacts'][$index71]['customer']['browserId'])) {
    $model->history[$index20]->order->customer->customerContacts[$index71]->customer->browserId = $jsonData['history'][$index20]['order']['customer']['customerContacts'][$index71]['customer']['browserId'];

}
if (isset($jsonData['history'][$index20]['order']['customer']['customerContacts'][$index71]['customer']['site'])) {
    $model->history[$index20]->order->customer->customerContacts[$index71]->customer->site = $jsonData['history'][$index20]['order']['customer']['customerContacts'][$index71]['customer']['site'];

}
if (isset($jsonData['history'][$index20]['order']['customer']['customerContacts'][$index71]['customer']['companies'])) {
    $model->history[$index20]->order->customer->customerContacts[$index71]->customer->companies = [];
foreach (array_keys($jsonData['history'][$index20]['order']['customer']['customerContacts'][$index71]['customer']['companies']) as $index106) {
    
$model->history[$index20]->order->customer->customerContacts[$index71]->customer->companies[$index106] = new RetailCrm\Api\Model\Entity\CustomersCorporate\CustomerContactCompany();
if (isset($jsonData['history'][$index20]['order']['customer']['customerContacts'][$index71]['customer']['companies'][$index106]['id'])) {
    $model->history[$index20]->order->customer->customerContacts[$index71]->customer->companies[$index106]->id = $jsonData['history'][$index20]['order']['customer']['customerContacts'][$index71]['customer']['companies'][$index106]['id'];

}
if (isset($jsonData['history'][$index20]['order']['customer']['customerContacts'][$index71]['customer']['companies'][$index106]['externalId'])) {
    $model->history[$index20]->order->customer->customerContacts[$index71]->customer->companies[$index106]->externalId = $jsonData['history'][$index20]['order']['customer']['customerContacts'][$index71]['customer']['companies'][$index106]['externalId'];

}
if (isset($jsonData['history'][$index20]['order']['customer']['customerContacts'][$index71]['customer']['companies'][$index106]['company'])) {
    
$model->history[$index20]->order->customer->customerContacts[$index71]->customer->companies[$index106]->company = new RetailCrm\Api\Model\Entity\CustomersCorporate\EntityWithExternalIdNameOutput();
if (isset($jsonData['history'][$index20]['order']['customer']['customerContacts'][$index71]['customer']['companies'][$index106]['company']['id'])) {
    $model->history[$index20]->order->customer->customerContacts[$index71]->customer->companies[$index106]->company->id = $jsonData['history'][$index20]['order']['customer']['customerContacts'][$index71]['customer']['companies'][$index106]['company']['id'];

}
if (isset($jsonData['history'][$index20]['order']['customer']['customerContacts'][$index71]['customer']['companies'][$index106]['company']['externalId'])) {
    $model->history[$index20]->order->customer->customerContacts[$index71]->customer->companies[$index106]->company->externalId = $jsonData['history'][$index20]['order']['customer']['customerContacts'][$index71]['customer']['companies'][$index106]['company']['externalId'];

}
if (isset($jsonData['history'][$index20]['order']['customer']['customerContacts'][$index71]['customer']['companies'][$index106]['company']['name'])) {
    $model->history[$index20]->order->customer->customerContacts[$index71]->customer->companies[$index106]->company->name = $jsonData['history'][$index20]['order']['customer']['customerContacts'][$index71]['customer']['companies'][$index106]['company']['name'];

}


}


}

}


}
if (isset($jsonData['history'][$index20]['order']['customer']['customerContacts'][$index71]['companies'])) {
    $model->history[$index20]->order->customer->customerContacts[$index71]->companies = [];
foreach (array_keys($jsonData['history'][$index20]['order']['customer']['customerContacts'][$index71]['companies']) as $index94) {
    
$model->history[$index20]->order->customer->customerContacts[$index71]->companies[$index94] = new RetailCrm\Api\Model\Entity\CustomersCorporate\CustomerContactCompany();
if (isset($jsonData['history'][$index20]['order']['customer']['customerContacts'][$index71]['companies'][$index94]['id'])) {
    $model->history[$index20]->order->customer->customerContacts[$index71]->companies[$index94]->id = $jsonData['history'][$index20]['order']['customer']['customerContacts'][$index71]['companies'][$index94]['id'];

}
if (isset($jsonData['history'][$index20]['order']['customer']['customerContacts'][$index71]['companies'][$index94]['externalId'])) {
    $model->history[$index20]->order->customer->customerContacts[$index71]->companies[$index94]->externalId = $jsonData['history'][$index20]['order']['customer']['customerContacts'][$index71]['companies'][$index94]['externalId'];

}
if (isset($jsonData['history'][$index20]['order']['customer']['customerContacts'][$index71]['companies'][$index94]['company'])) {
    
$model->history[$index20]->order->customer->customerContacts[$index71]->companies[$index94]->company = new RetailCrm\Api\Model\Entity\CustomersCorporate\EntityWithExternalIdNameOutput();
if (isset($jsonData['history'][$index20]['order']['customer']['customerContacts'][$index71]['companies'][$index94]['company']['id'])) {
    $model->history[$index20]->order->customer->customerContacts[$index71]->companies[$index94]->company->id = $jsonData['history'][$index20]['order']['customer']['customerContacts'][$index71]['companies'][$index94]['company']['id'];

}
if (isset($jsonData['history'][$index20]['order']['customer']['customerContacts'][$index71]['companies'][$index94]['company']['externalId'])) {
    $model->history[$index20]->order->customer->customerContacts[$index71]->companies[$index94]->company->externalId = $jsonData['history'][$index20]['order']['customer']['customerContacts'][$index71]['companies'][$index94]['company']['externalId'];

}
if (isset($jsonData['history'][$index20]['order']['customer']['customerContacts'][$index71]['companies'][$index94]['company']['name'])) {
    $model->history[$index20]->order->customer->customerContacts[$index71]->companies[$index94]->company->name = $jsonData['history'][$index20]['order']['customer']['customerContacts'][$index71]['companies'][$index94]['company']['name'];

}


}


}

}


}

}
if (isset($jsonData['history'][$index20]['order']['customer']['companies'])) {
    $model->history[$index20]->order->customer->companies = [];
foreach (array_keys($jsonData['history'][$index20]['order']['customer']['companies']) as $index64) {
    
$model->history[$index20]->order->customer->companies[$index64] = new RetailCrm\Api\Model\Entity\CustomersCorporate\Company();
if (isset($jsonData['history'][$index20]['order']['customer']['companies'][$index64]['id'])) {
    $model->history[$index20]->order->customer->companies[$index64]->id = $jsonData['history'][$index20]['order']['customer']['companies'][$index64]['id'];

}
if (isset($jsonData['history'][$index20]['order']['customer']['companies'][$index64]['isMain'])) {
    $model->history[$index20]->order->customer->companies[$index64]->isMain = $jsonData['history'][$index20]['order']['customer']['companies'][$index64]['isMain'];

}
if (isset($jsonData['history'][$index20]['order']['customer']['companies'][$index64]['externalId'])) {
    $model->history[$index20]->order->customer->companies[$index64]->externalId = $jsonData['history'][$index20]['order']['customer']['companies'][$index64]['externalId'];

}
if (isset($jsonData['history'][$index20]['order']['customer']['companies'][$index64]['active'])) {
    $model->history[$index20]->order->customer->companies[$index64]->active = $jsonData['history'][$index20]['order']['customer']['companies'][$index64]['active'];

}
if (isset($jsonData['history'][$index20]['order']['customer']['companies'][$index64]['name'])) {
    $model->history[$index20]->order->customer->companies[$index64]->name = $jsonData['history'][$index20]['order']['customer']['companies'][$index64]['name'];

}
if (isset($jsonData['history'][$index20]['order']['customer']['companies'][$index64]['brand'])) {
    $model->history[$index20]->order->customer->companies[$index64]->brand = $jsonData['history'][$index20]['order']['customer']['companies'][$index64]['brand'];

}
if (isset($jsonData['history'][$index20]['order']['customer']['companies'][$index64]['site'])) {
    $model->history[$index20]->order->customer->companies[$index64]->site = $jsonData['history'][$index20]['order']['customer']['companies'][$index64]['site'];

}
if (isset($jsonData['history'][$index20]['order']['customer']['companies'][$index64]['createdAt'])) {
    $model->history[$index20]->order->customer->companies[$index64]->createdAt = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['history'][$index20]['order']['customer']['companies'][$index64]['createdAt']);

}
if (isset($jsonData['history'][$index20]['order']['customer']['companies'][$index64]['customer'])) {
    
$model->history[$index20]->order->customer->companies[$index64]->customer = new RetailCrm\Api\Model\Entity\CustomersCorporate\SerializedEntityCustomer();
if (isset($jsonData['history'][$index20]['order']['customer']['companies'][$index64]['customer']['site'])) {
    $model->history[$index20]->order->customer->companies[$index64]->customer->site = $jsonData['history'][$index20]['order']['customer']['companies'][$index64]['customer']['site'];

}
if (isset($jsonData['history'][$index20]['order']['customer']['companies'][$index64]['customer']['id'])) {
    $model->history[$index20]->order->customer->companies[$index64]->customer->id = $jsonData['history'][$index20]['order']['customer']['companies'][$index64]['customer']['id'];

}
if (isset($jsonData['history'][$index20]['order']['customer']['companies'][$index64]['customer']['externalId'])) {
    $model->history[$index20]->order->customer->companies[$index64]->customer->externalId = $jsonData['history'][$index20]['order']['customer']['companies'][$index64]['customer']['externalId'];

}
if (isset($jsonData['history'][$index20]['order']['customer']['companies'][$index64]['customer']['type'])) {
    $model->history[$index20]->order->customer->companies[$index64]->customer->type = $jsonData['history'][$index20]['order']['customer']['companies'][$index64]['customer']['type'];

}


}
if (isset($jsonData['history'][$index20]['order']['customer']['companies'][$index64]['contragent'])) {
    
$model->history[$index20]->order->customer->companies[$index64]->contragent = new RetailCrm\Api\Model\Entity\Customers\CustomerContragent();
if (isset($jsonData['history'][$index20]['order']['customer']['companies'][$index64]['contragent']['contragentType'])) {
    $model->history[$index20]->order->customer->companies[$index64]->contragent->contragentType = $jsonData['history'][$index20]['order']['customer']['companies'][$index64]['contragent']['contragentType'];

}
if (isset($jsonData['history'][$index20]['order']['customer']['companies'][$index64]['contragent']['legalName'])) {
    $model->history[$index20]->order->customer->companies[$index64]->contragent->legalName = $jsonData['history'][$index20]['order']['customer']['companies'][$index64]['contragent']['legalName'];

}
if (isset($jsonData['history'][$index20]['order']['customer']['companies'][$index64]['contragent']['legalAddress'])) {
    $model->history[$index20]->order->customer->companies[$index64]->contragent->legalAddress = $jsonData['history'][$index20]['order']['customer']['companies'][$index64]['contragent']['legalAddress'];

}
if (isset($jsonData['history'][$index20]['order']['customer']['companies'][$index64]['contragent']['INN'])) {
    $model->history[$index20]->order->customer->companies[$index64]->contragent->INN = $jsonData['history'][$index20]['order']['customer']['companies'][$index64]['contragent']['INN'];

}
if (isset($jsonData['history'][$index20]['order']['customer']['companies'][$index64]['contragent']['OKPO'])) {
    $model->history[$index20]->order->customer->companies[$index64]->contragent->OKPO = $jsonData['history'][$index20]['order']['customer']['companies'][$index64]['contragent']['OKPO'];

}
if (isset($jsonData['history'][$index20]['order']['customer']['companies'][$index64]['contragent']['KPP'])) {
    $model->history[$index20]->order->customer->companies[$index64]->contragent->KPP = $jsonData['history'][$index20]['order']['customer']['companies'][$index64]['contragent']['KPP'];

}
if (isset($jsonData['history'][$index20]['order']['customer']['companies'][$index64]['contragent']['OGRN'])) {
    $model->history[$index20]->order->customer->companies[$index64]->contragent->OGRN = $jsonData['history'][$index20]['order']['customer']['companies'][$index64]['contragent']['OGRN'];

}
if (isset($jsonData['history'][$index20]['order']['customer']['companies'][$index64]['contragent']['OGRNIP'])) {
    $model->history[$index20]->order->customer->companies[$index64]->contragent->OGRNIP = $jsonData['history'][$index20]['order']['customer']['companies'][$index64]['contragent']['OGRNIP'];

}
if (isset($jsonData['history'][$index20]['order']['customer']['companies'][$index64]['contragent']['certificateNumber'])) {
    $model->history[$index20]->order->customer->companies[$index64]->contragent->certificateNumber = $jsonData['history'][$index20]['order']['customer']['companies'][$index64]['contragent']['certificateNumber'];

}
if (isset($jsonData['history'][$index20]['order']['customer']['companies'][$index64]['contragent']['certificateDate'])) {
    $model->history[$index20]->order->customer->companies[$index64]->contragent->certificateDate = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['history'][$index20]['order']['customer']['companies'][$index64]['contragent']['certificateDate']);

}
if (isset($jsonData['history'][$index20]['order']['customer']['companies'][$index64]['contragent']['BIK'])) {
    $model->history[$index20]->order->customer->companies[$index64]->contragent->BIK = $jsonData['history'][$index20]['order']['customer']['companies'][$index64]['contragent']['BIK'];

}
if (isset($jsonData['history'][$index20]['order']['customer']['companies'][$index64]['contragent']['bank'])) {
    $model->history[$index20]->order->customer->companies[$index64]->contragent->bank = $jsonData['history'][$index20]['order']['customer']['companies'][$index64]['contragent']['bank'];

}
if (isset($jsonData['history'][$index20]['order']['customer']['companies'][$index64]['contragent']['bankAddress'])) {
    $model->history[$index20]->order->customer->companies[$index64]->contragent->bankAddress = $jsonData['history'][$index20]['order']['customer']['companies'][$index64]['contragent']['bankAddress'];

}
if (isset($jsonData['history'][$index20]['order']['customer']['companies'][$index64]['contragent']['corrAccount'])) {
    $model->history[$index20]->order->customer->companies[$index64]->contragent->corrAccount = $jsonData['history'][$index20]['order']['customer']['companies'][$index64]['contragent']['corrAccount'];

}
if (isset($jsonData['history'][$index20]['order']['customer']['companies'][$index64]['contragent']['bankAccount'])) {
    $model->history[$index20]->order->customer->companies[$index64]->contragent->bankAccount = $jsonData['history'][$index20]['order']['customer']['companies'][$index64]['contragent']['bankAccount'];

}


}
if (isset($jsonData['history'][$index20]['order']['customer']['companies'][$index64]['address'])) {
    
$model->history[$index20]->order->customer->companies[$index64]->address = new RetailCrm\Api\Model\Entity\Customers\CustomerAddress();
if (isset($jsonData['history'][$index20]['order']['customer']['companies'][$index64]['address']['id'])) {
    $model->history[$index20]->order->customer->companies[$index64]->address->id = $jsonData['history'][$index20]['order']['customer']['companies'][$index64]['address']['id'];

}
if (isset($jsonData['history'][$index20]['order']['customer']['companies'][$index64]['address']['name'])) {
    $model->history[$index20]->order->customer->companies[$index64]->address->name = $jsonData['history'][$index20]['order']['customer']['companies'][$index64]['address']['name'];

}
if (isset($jsonData['history'][$index20]['order']['customer']['companies'][$index64]['address']['isMain'])) {
    $model->history[$index20]->order->customer->companies[$index64]->address->isMain = $jsonData['history'][$index20]['order']['customer']['companies'][$index64]['address']['isMain'];

}
if (isset($jsonData['history'][$index20]['order']['customer']['companies'][$index64]['address']['index'])) {
    $model->history[$index20]->order->customer->companies[$index64]->address->index = $jsonData['history'][$index20]['order']['customer']['companies'][$index64]['address']['index'];

}
if (isset($jsonData['history'][$index20]['order']['customer']['companies'][$index64]['address']['countryIso'])) {
    $model->history[$index20]->order->customer->companies[$index64]->address->countryIso = $jsonData['history'][$index20]['order']['customer']['companies'][$index64]['address']['countryIso'];

}
if (isset($jsonData['history'][$index20]['order']['customer']['companies'][$index64]['address']['region'])) {
    $model->history[$index20]->order->customer->companies[$index64]->address->region = $jsonData['history'][$index20]['order']['customer']['companies'][$index64]['address']['region'];

}
if (isset($jsonData['history'][$index20]['order']['customer']['companies'][$index64]['address']['regionId'])) {
    $model->history[$index20]->order->customer->companies[$index64]->address->regionId = $jsonData['history'][$index20]['order']['customer']['companies'][$index64]['address']['regionId'];

}
if (isset($jsonData['history'][$index20]['order']['customer']['companies'][$index64]['address']['city'])) {
    $model->history[$index20]->order->customer->companies[$index64]->address->city = $jsonData['history'][$index20]['order']['customer']['companies'][$index64]['address']['city'];

}
if (isset($jsonData['history'][$index20]['order']['customer']['companies'][$index64]['address']['cityId'])) {
    $model->history[$index20]->order->customer->companies[$index64]->address->cityId = $jsonData['history'][$index20]['order']['customer']['companies'][$index64]['address']['cityId'];

}
if (isset($jsonData['history'][$index20]['order']['customer']['companies'][$index64]['address']['cityType'])) {
    $model->history[$index20]->order->customer->companies[$index64]->address->cityType = $jsonData['history'][$index20]['order']['customer']['companies'][$index64]['address']['cityType'];

}
if (isset($jsonData['history'][$index20]['order']['customer']['companies'][$index64]['address']['street'])) {
    $model->history[$index20]->order->customer->companies[$index64]->address->street = $jsonData['history'][$index20]['order']['customer']['companies'][$index64]['address']['street'];

}
if (isset($jsonData['history'][$index20]['order']['customer']['companies'][$index64]['address']['streetId'])) {
    $model->history[$index20]->order->customer->companies[$index64]->address->streetId = $jsonData['history'][$index20]['order']['customer']['companies'][$index64]['address']['streetId'];

}
if (isset($jsonData['history'][$index20]['order']['customer']['companies'][$index64]['address']['streetType'])) {
    $model->history[$index20]->order->customer->companies[$index64]->address->streetType = $jsonData['history'][$index20]['order']['customer']['companies'][$index64]['address']['streetType'];

}
if (isset($jsonData['history'][$index20]['order']['customer']['companies'][$index64]['address']['building'])) {
    $model->history[$index20]->order->customer->companies[$index64]->address->building = $jsonData['history'][$index20]['order']['customer']['companies'][$index64]['address']['building'];

}
if (isset($jsonData['history'][$index20]['order']['customer']['companies'][$index64]['address']['flat'])) {
    $model->history[$index20]->order->customer->companies[$index64]->address->flat = $jsonData['history'][$index20]['order']['customer']['companies'][$index64]['address']['flat'];

}
if (isset($jsonData['history'][$index20]['order']['customer']['companies'][$index64]['address']['floor'])) {
    $model->history[$index20]->order->customer->companies[$index64]->address->floor = $jsonData['history'][$index20]['order']['customer']['companies'][$index64]['address']['floor'];

}
if (isset($jsonData['history'][$index20]['order']['customer']['companies'][$index64]['address']['block'])) {
    $model->history[$index20]->order->customer->companies[$index64]->address->block = $jsonData['history'][$index20]['order']['customer']['companies'][$index64]['address']['block'];

}
if (isset($jsonData['history'][$index20]['order']['customer']['companies'][$index64]['address']['house'])) {
    $model->history[$index20]->order->customer->companies[$index64]->address->house = $jsonData['history'][$index20]['order']['customer']['companies'][$index64]['address']['house'];

}
if (isset($jsonData['history'][$index20]['order']['customer']['companies'][$index64]['address']['housing'])) {
    $model->history[$index20]->order->customer->companies[$index64]->address->housing = $jsonData['history'][$index20]['order']['customer']['companies'][$index64]['address']['housing'];

}
if (isset($jsonData['history'][$index20]['order']['customer']['companies'][$index64]['address']['metro'])) {
    $model->history[$index20]->order->customer->companies[$index64]->address->metro = $jsonData['history'][$index20]['order']['customer']['companies'][$index64]['address']['metro'];

}
if (isset($jsonData['history'][$index20]['order']['customer']['companies'][$index64]['address']['notes'])) {
    $model->history[$index20]->order->customer->companies[$index64]->address->notes = $jsonData['history'][$index20]['order']['customer']['companies'][$index64]['address']['notes'];

}
if (isset($jsonData['history'][$index20]['order']['customer']['companies'][$index64]['address']['text'])) {
    $model->history[$index20]->order->customer->companies[$index64]->address->text = $jsonData['history'][$index20]['order']['customer']['companies'][$index64]['address']['text'];

}
if (isset($jsonData['history'][$index20]['order']['customer']['companies'][$index64]['address']['externalId'])) {
    $model->history[$index20]->order->customer->companies[$index64]->address->externalId = $jsonData['history'][$index20]['order']['customer']['companies'][$index64]['address']['externalId'];

}


}
if (isset($jsonData['history'][$index20]['order']['customer']['companies'][$index64]['customFields'])) {
    $model->history[$index20]->order->customer->companies[$index64]->customFields = [];
foreach (array_keys($jsonData['history'][$index20]['order']['customer']['companies'][$index64]['customFields']) as $index90) {
    $model->history[$index20]->order->customer->companies[$index64]->customFields[$index90] = $jsonData['history'][$index20]['order']['customer']['companies'][$index64]['customFields'][$index90];

}

}
if (isset($jsonData['history'][$index20]['order']['customer']['companies'][$index64]['marginSumm'])) {
    $model->history[$index20]->order->customer->companies[$index64]->marginSumm = (float) $jsonData['history'][$index20]['order']['customer']['companies'][$index64]['marginSumm'];

}
if (isset($jsonData['history'][$index20]['order']['customer']['companies'][$index64]['totalSumm'])) {
    $model->history[$index20]->order->customer->companies[$index64]->totalSumm = (float) $jsonData['history'][$index20]['order']['customer']['companies'][$index64]['totalSumm'];

}
if (isset($jsonData['history'][$index20]['order']['customer']['companies'][$index64]['averageSumm'])) {
    $model->history[$index20]->order->customer->companies[$index64]->averageSumm = (float) $jsonData['history'][$index20]['order']['customer']['companies'][$index64]['averageSumm'];

}
if (isset($jsonData['history'][$index20]['order']['customer']['companies'][$index64]['ordersCount'])) {
    $model->history[$index20]->order->customer->companies[$index64]->ordersCount = $jsonData['history'][$index20]['order']['customer']['companies'][$index64]['ordersCount'];

}
if (isset($jsonData['history'][$index20]['order']['customer']['companies'][$index64]['costSumm'])) {
    $model->history[$index20]->order->customer->companies[$index64]->costSumm = (float) $jsonData['history'][$index20]['order']['customer']['companies'][$index64]['costSumm'];

}


}

}
if (isset($jsonData['history'][$index20]['order']['customer']['addresses'])) {
    $model->history[$index20]->order->customer->addresses = [];
foreach (array_keys($jsonData['history'][$index20]['order']['customer']['addresses']) as $index64) {
    
$model->history[$index20]->order->customer->addresses[$index64] = new RetailCrm\Api\Model\Entity\Customers\CustomerAddress();
if (isset($jsonData['history'][$index20]['order']['customer']['addresses'][$index64]['id'])) {
    $model->history[$index20]->order->customer->addresses[$index64]->id = $jsonData['history'][$index20]['order']['customer']['addresses'][$index64]['id'];

}
if (isset($jsonData['history'][$index20]['order']['customer']['addresses'][$index64]['name'])) {
    $model->history[$index20]->order->customer->addresses[$index64]->name = $jsonData['history'][$index20]['order']['customer']['addresses'][$index64]['name'];

}
if (isset($jsonData['history'][$index20]['order']['customer']['addresses'][$index64]['isMain'])) {
    $model->history[$index20]->order->customer->addresses[$index64]->isMain = $jsonData['history'][$index20]['order']['customer']['addresses'][$index64]['isMain'];

}
if (isset($jsonData['history'][$index20]['order']['customer']['addresses'][$index64]['index'])) {
    $model->history[$index20]->order->customer->addresses[$index64]->index = $jsonData['history'][$index20]['order']['customer']['addresses'][$index64]['index'];

}
if (isset($jsonData['history'][$index20]['order']['customer']['addresses'][$index64]['countryIso'])) {
    $model->history[$index20]->order->customer->addresses[$index64]->countryIso = $jsonData['history'][$index20]['order']['customer']['addresses'][$index64]['countryIso'];

}
if (isset($jsonData['history'][$index20]['order']['customer']['addresses'][$index64]['region'])) {
    $model->history[$index20]->order->customer->addresses[$index64]->region = $jsonData['history'][$index20]['order']['customer']['addresses'][$index64]['region'];

}
if (isset($jsonData['history'][$index20]['order']['customer']['addresses'][$index64]['regionId'])) {
    $model->history[$index20]->order->customer->addresses[$index64]->regionId = $jsonData['history'][$index20]['order']['customer']['addresses'][$index64]['regionId'];

}
if (isset($jsonData['history'][$index20]['order']['customer']['addresses'][$index64]['city'])) {
    $model->history[$index20]->order->customer->addresses[$index64]->city = $jsonData['history'][$index20]['order']['customer']['addresses'][$index64]['city'];

}
if (isset($jsonData['history'][$index20]['order']['customer']['addresses'][$index64]['cityId'])) {
    $model->history[$index20]->order->customer->addresses[$index64]->cityId = $jsonData['history'][$index20]['order']['customer']['addresses'][$index64]['cityId'];

}
if (isset($jsonData['history'][$index20]['order']['customer']['addresses'][$index64]['cityType'])) {
    $model->history[$index20]->order->customer->addresses[$index64]->cityType = $jsonData['history'][$index20]['order']['customer']['addresses'][$index64]['cityType'];

}
if (isset($jsonData['history'][$index20]['order']['customer']['addresses'][$index64]['street'])) {
    $model->history[$index20]->order->customer->addresses[$index64]->street = $jsonData['history'][$index20]['order']['customer']['addresses'][$index64]['street'];

}
if (isset($jsonData['history'][$index20]['order']['customer']['addresses'][$index64]['streetId'])) {
    $model->history[$index20]->order->customer->addresses[$index64]->streetId = $jsonData['history'][$index20]['order']['customer']['addresses'][$index64]['streetId'];

}
if (isset($jsonData['history'][$index20]['order']['customer']['addresses'][$index64]['streetType'])) {
    $model->history[$index20]->order->customer->addresses[$index64]->streetType = $jsonData['history'][$index20]['order']['customer']['addresses'][$index64]['streetType'];

}
if (isset($jsonData['history'][$index20]['order']['customer']['addresses'][$index64]['building'])) {
    $model->history[$index20]->order->customer->addresses[$index64]->building = $jsonData['history'][$index20]['order']['customer']['addresses'][$index64]['building'];

}
if (isset($jsonData['history'][$index20]['order']['customer']['addresses'][$index64]['flat'])) {
    $model->history[$index20]->order->customer->addresses[$index64]->flat = $jsonData['history'][$index20]['order']['customer']['addresses'][$index64]['flat'];

}
if (isset($jsonData['history'][$index20]['order']['customer']['addresses'][$index64]['floor'])) {
    $model->history[$index20]->order->customer->addresses[$index64]->floor = $jsonData['history'][$index20]['order']['customer']['addresses'][$index64]['floor'];

}
if (isset($jsonData['history'][$index20]['order']['customer']['addresses'][$index64]['block'])) {
    $model->history[$index20]->order->customer->addresses[$index64]->block = $jsonData['history'][$index20]['order']['customer']['addresses'][$index64]['block'];

}
if (isset($jsonData['history'][$index20]['order']['customer']['addresses'][$index64]['house'])) {
    $model->history[$index20]->order->customer->addresses[$index64]->house = $jsonData['history'][$index20]['order']['customer']['addresses'][$index64]['house'];

}
if (isset($jsonData['history'][$index20]['order']['customer']['addresses'][$index64]['housing'])) {
    $model->history[$index20]->order->customer->addresses[$index64]->housing = $jsonData['history'][$index20]['order']['customer']['addresses'][$index64]['housing'];

}
if (isset($jsonData['history'][$index20]['order']['customer']['addresses'][$index64]['metro'])) {
    $model->history[$index20]->order->customer->addresses[$index64]->metro = $jsonData['history'][$index20]['order']['customer']['addresses'][$index64]['metro'];

}
if (isset($jsonData['history'][$index20]['order']['customer']['addresses'][$index64]['notes'])) {
    $model->history[$index20]->order->customer->addresses[$index64]->notes = $jsonData['history'][$index20]['order']['customer']['addresses'][$index64]['notes'];

}
if (isset($jsonData['history'][$index20]['order']['customer']['addresses'][$index64]['text'])) {
    $model->history[$index20]->order->customer->addresses[$index64]->text = $jsonData['history'][$index20]['order']['customer']['addresses'][$index64]['text'];

}
if (isset($jsonData['history'][$index20]['order']['customer']['addresses'][$index64]['externalId'])) {
    $model->history[$index20]->order->customer->addresses[$index64]->externalId = $jsonData['history'][$index20]['order']['customer']['addresses'][$index64]['externalId'];

}


}

}
if (isset($jsonData['history'][$index20]['order']['customer']['vip'])) {
    $model->history[$index20]->order->customer->vip = $jsonData['history'][$index20]['order']['customer']['vip'];

}
if (isset($jsonData['history'][$index20]['order']['customer']['bad'])) {
    $model->history[$index20]->order->customer->bad = $jsonData['history'][$index20]['order']['customer']['bad'];

}
if (isset($jsonData['history'][$index20]['order']['customer']['site'])) {
    $model->history[$index20]->order->customer->site = $jsonData['history'][$index20]['order']['customer']['site'];

}
if (isset($jsonData['history'][$index20]['order']['customer']['tags'])) {
    $model->history[$index20]->order->customer->tags = [];
foreach (array_keys($jsonData['history'][$index20]['order']['customer']['tags']) as $index59) {
    
$model->history[$index20]->order->customer->tags[$index59] = new RetailCrm\Api\Model\Entity\Customers\CustomerTag();
if (isset($jsonData['history'][$index20]['order']['customer']['tags'][$index59]['name'])) {
    $model->history[$index20]->order->customer->tags[$index59]->name = $jsonData['history'][$index20]['order']['customer']['tags'][$index59]['name'];

}
if (isset($jsonData['history'][$index20]['order']['customer']['tags'][$index59]['color'])) {
    $model->history[$index20]->order->customer->tags[$index59]->color = $jsonData['history'][$index20]['order']['customer']['tags'][$index59]['color'];

}
if (isset($jsonData['history'][$index20]['order']['customer']['tags'][$index59]['attached'])) {
    $model->history[$index20]->order->customer->tags[$index59]->attached = $jsonData['history'][$index20]['order']['customer']['tags'][$index59]['attached'];

}


}

}
if (isset($jsonData['history'][$index20]['order']['customer']['avgMarginSumm'])) {
    $model->history[$index20]->order->customer->avgMarginSumm = (float) $jsonData['history'][$index20]['order']['customer']['avgMarginSumm'];

}
if (isset($jsonData['history'][$index20]['order']['customer']['marginSumm'])) {
    $model->history[$index20]->order->customer->marginSumm = (float) $jsonData['history'][$index20]['order']['customer']['marginSumm'];

}
if (isset($jsonData['history'][$index20]['order']['customer']['totalSumm'])) {
    $model->history[$index20]->order->customer->totalSumm = (float) $jsonData['history'][$index20]['order']['customer']['totalSumm'];

}
if (isset($jsonData['history'][$index20]['order']['customer']['averageSumm'])) {
    $model->history[$index20]->order->customer->averageSumm = (float) $jsonData['history'][$index20]['order']['customer']['averageSumm'];

}
if (isset($jsonData['history'][$index20]['order']['customer']['ordersCount'])) {
    $model->history[$index20]->order->customer->ordersCount = $jsonData['history'][$index20]['order']['customer']['ordersCount'];

}
if (isset($jsonData['history'][$index20]['order']['customer']['costSumm'])) {
    $model->history[$index20]->order->customer->costSumm = (float) $jsonData['history'][$index20]['order']['customer']['costSumm'];

}
if (isset($jsonData['history'][$index20]['order']['customer']['customFields'])) {
    $model->history[$index20]->order->customer->customFields = [];
foreach (array_keys($jsonData['history'][$index20]['order']['customer']['customFields']) as $index67) {
    $model->history[$index20]->order->customer->customFields[$index67] = $jsonData['history'][$index20]['order']['customer']['customFields'][$index67];

}

}
if (isset($jsonData['history'][$index20]['order']['customer']['personalDiscount'])) {
    $model->history[$index20]->order->customer->personalDiscount = (float) $jsonData['history'][$index20]['order']['customer']['personalDiscount'];

}
if (isset($jsonData['history'][$index20]['order']['customer']['cumulativeDiscount'])) {
    $model->history[$index20]->order->customer->cumulativeDiscount = (float) $jsonData['history'][$index20]['order']['customer']['cumulativeDiscount'];

}
if (isset($jsonData['history'][$index20]['order']['customer']['discountCardNumber'])) {
    $model->history[$index20]->order->customer->discountCardNumber = $jsonData['history'][$index20]['order']['customer']['discountCardNumber'];

}
if (isset($jsonData['history'][$index20]['order']['customer']['firstClientId'])) {
    $model->history[$index20]->order->customer->firstClientId = $jsonData['history'][$index20]['order']['customer']['firstClientId'];

}
if (isset($jsonData['history'][$index20]['order']['customer']['lastClientId'])) {
    $model->history[$index20]->order->customer->lastClientId = $jsonData['history'][$index20]['order']['customer']['lastClientId'];

}
if (isset($jsonData['history'][$index20]['order']['customer']['mainCustomerContact'])) {
    
$model->history[$index20]->order->customer->mainCustomerContact = new RetailCrm\Api\Model\Entity\CustomersCorporate\CustomerContact();
if (isset($jsonData['history'][$index20]['order']['customer']['mainCustomerContact']['id'])) {
    $model->history[$index20]->order->customer->mainCustomerContact->id = $jsonData['history'][$index20]['order']['customer']['mainCustomerContact']['id'];

}
if (isset($jsonData['history'][$index20]['order']['customer']['mainCustomerContact']['isMain'])) {
    $model->history[$index20]->order->customer->mainCustomerContact->isMain = $jsonData['history'][$index20]['order']['customer']['mainCustomerContact']['isMain'];

}
if (isset($jsonData['history'][$index20]['order']['customer']['mainCustomerContact']['customer'])) {
    
$model->history[$index20]->order->customer->mainCustomerContact->customer = new RetailCrm\Api\Model\Entity\CustomersCorporate\SerializedRelationAbstractCustomer();
if (isset($jsonData['history'][$index20]['order']['customer']['mainCustomerContact']['customer']['id'])) {
    $model->history[$index20]->order->customer->mainCustomerContact->customer->id = $jsonData['history'][$index20]['order']['customer']['mainCustomerContact']['customer']['id'];

}
if (isset($jsonData['history'][$index20]['order']['customer']['mainCustomerContact']['customer']['externalId'])) {
    $model->history[$index20]->order->customer->mainCustomerContact->customer->externalId = $jsonData['history'][$index20]['order']['customer']['mainCustomerContact']['customer']['externalId'];

}
if (isset($jsonData['history'][$index20]['order']['customer']['mainCustomerContact']['customer']['browserId'])) {
    $model->history[$index20]->order->customer->mainCustomerContact->customer->browserId = $jsonData['history'][$index20]['order']['customer']['mainCustomerContact']['customer']['browserId'];

}
if (isset($jsonData['history'][$index20]['order']['customer']['mainCustomerContact']['customer']['site'])) {
    $model->history[$index20]->order->customer->mainCustomerContact->customer->site = $jsonData['history'][$index20]['order']['customer']['mainCustomerContact']['customer']['site'];

}
if (isset($jsonData['history'][$index20]['order']['customer']['mainCustomerContact']['customer']['companies'])) {
    $model->history[$index20]->order->customer->mainCustomerContact->customer->companies = [];
foreach (array_keys($jsonData['history'][$index20]['order']['customer']['mainCustomerContact']['customer']['companies']) as $index99) {
    
$model->history[$index20]->order->customer->mainCustomerContact->customer->companies[$index99] = new RetailCrm\Api\Model\Entity\CustomersCorporate\CustomerContactCompany();
if (isset($jsonData['history'][$index20]['order']['customer']['mainCustomerContact']['customer']['companies'][$index99]['id'])) {
    $model->history[$index20]->order->customer->mainCustomerContact->customer->companies[$index99]->id = $jsonData['history'][$index20]['order']['customer']['mainCustomerContact']['customer']['companies'][$index99]['id'];

}
if (isset($jsonData['history'][$index20]['order']['customer']['mainCustomerContact']['customer']['companies'][$index99]['externalId'])) {
    $model->history[$index20]->order->customer->mainCustomerContact->customer->companies[$index99]->externalId = $jsonData['history'][$index20]['order']['customer']['mainCustomerContact']['customer']['companies'][$index99]['externalId'];

}
if (isset($jsonData['history'][$index20]['order']['customer']['mainCustomerContact']['customer']['companies'][$index99]['company'])) {
    
$model->history[$index20]->order->customer->mainCustomerContact->customer->companies[$index99]->company = new RetailCrm\Api\Model\Entity\CustomersCorporate\EntityWithExternalIdNameOutput();
if (isset($jsonData['history'][$index20]['order']['customer']['mainCustomerContact']['customer']['companies'][$index99]['company']['id'])) {
    $model->history[$index20]->order->customer->mainCustomerContact->customer->companies[$index99]->company->id = $jsonData['history'][$index20]['order']['customer']['mainCustomerContact']['customer']['companies'][$index99]['company']['id'];

}
if (isset($jsonData['history'][$index20]['order']['customer']['mainCustomerContact']['customer']['companies'][$index99]['company']['externalId'])) {
    $model->history[$index20]->order->customer->mainCustomerContact->customer->companies[$index99]->company->externalId = $jsonData['history'][$index20]['order']['customer']['mainCustomerContact']['customer']['companies'][$index99]['company']['externalId'];

}
if (isset($jsonData['history'][$index20]['order']['customer']['mainCustomerContact']['customer']['companies'][$index99]['company']['name'])) {
    $model->history[$index20]->order->customer->mainCustomerContact->customer->companies[$index99]->company->name = $jsonData['history'][$index20]['order']['customer']['mainCustomerContact']['customer']['companies'][$index99]['company']['name'];

}


}


}

}


}
if (isset($jsonData['history'][$index20]['order']['customer']['mainCustomerContact']['companies'])) {
    $model->history[$index20]->order->customer->mainCustomerContact->companies = [];
foreach (array_keys($jsonData['history'][$index20]['order']['customer']['mainCustomerContact']['companies']) as $index87) {
    
$model->history[$index20]->order->customer->mainCustomerContact->companies[$index87] = new RetailCrm\Api\Model\Entity\CustomersCorporate\CustomerContactCompany();
if (isset($jsonData['history'][$index20]['order']['customer']['mainCustomerContact']['companies'][$index87]['id'])) {
    $model->history[$index20]->order->customer->mainCustomerContact->companies[$index87]->id = $jsonData['history'][$index20]['order']['customer']['mainCustomerContact']['companies'][$index87]['id'];

}
if (isset($jsonData['history'][$index20]['order']['customer']['mainCustomerContact']['companies'][$index87]['externalId'])) {
    $model->history[$index20]->order->customer->mainCustomerContact->companies[$index87]->externalId = $jsonData['history'][$index20]['order']['customer']['mainCustomerContact']['companies'][$index87]['externalId'];

}
if (isset($jsonData['history'][$index20]['order']['customer']['mainCustomerContact']['companies'][$index87]['company'])) {
    
$model->history[$index20]->order->customer->mainCustomerContact->companies[$index87]->company = new RetailCrm\Api\Model\Entity\CustomersCorporate\EntityWithExternalIdNameOutput();
if (isset($jsonData['history'][$index20]['order']['customer']['mainCustomerContact']['companies'][$index87]['company']['id'])) {
    $model->history[$index20]->order->customer->mainCustomerContact->companies[$index87]->company->id = $jsonData['history'][$index20]['order']['customer']['mainCustomerContact']['companies'][$index87]['company']['id'];

}
if (isset($jsonData['history'][$index20]['order']['customer']['mainCustomerContact']['companies'][$index87]['company']['externalId'])) {
    $model->history[$index20]->order->customer->mainCustomerContact->companies[$index87]->company->externalId = $jsonData['history'][$index20]['order']['customer']['mainCustomerContact']['companies'][$index87]['company']['externalId'];

}
if (isset($jsonData['history'][$index20]['order']['customer']['mainCustomerContact']['companies'][$index87]['company']['name'])) {
    $model->history[$index20]->order->customer->mainCustomerContact->companies[$index87]->company->name = $jsonData['history'][$index20]['order']['customer']['mainCustomerContact']['companies'][$index87]['company']['name'];

}


}


}

}


}
if (isset($jsonData['history'][$index20]['order']['customer']['mainCompany'])) {
    
$model->history[$index20]->order->customer->mainCompany = new RetailCrm\Api\Model\Entity\CustomersCorporate\EntityWithExternalIdNameOutput();
if (isset($jsonData['history'][$index20]['order']['customer']['mainCompany']['id'])) {
    $model->history[$index20]->order->customer->mainCompany->id = $jsonData['history'][$index20]['order']['customer']['mainCompany']['id'];

}
if (isset($jsonData['history'][$index20]['order']['customer']['mainCompany']['externalId'])) {
    $model->history[$index20]->order->customer->mainCompany->externalId = $jsonData['history'][$index20]['order']['customer']['mainCompany']['externalId'];

}
if (isset($jsonData['history'][$index20]['order']['customer']['mainCompany']['name'])) {
    $model->history[$index20]->order->customer->mainCompany->name = $jsonData['history'][$index20]['order']['customer']['mainCompany']['name'];

}


}


}

}
if (isset($jsonData['history'][$index20]['order']['contact'])) {
    
$model->history[$index20]->order->contact = new RetailCrm\Api\Model\Entity\Customers\Customer();
if (isset($jsonData['history'][$index20]['order']['contact']['type'])) {
    $model->history[$index20]->order->contact->type = $jsonData['history'][$index20]['order']['contact']['type'];

}
if (isset($jsonData['history'][$index20]['order']['contact']['id'])) {
    $model->history[$index20]->order->contact->id = $jsonData['history'][$index20]['order']['contact']['id'];

}
if (isset($jsonData['history'][$index20]['order']['contact']['externalId'])) {
    $model->history[$index20]->order->contact->externalId = $jsonData['history'][$index20]['order']['contact']['externalId'];

}
if (isset($jsonData['history'][$index20]['order']['contact']['isContact'])) {
    $model->history[$index20]->order->contact->isContact = $jsonData['history'][$index20]['order']['contact']['isContact'];

}
if (isset($jsonData['history'][$index20]['order']['contact']['createdAt'])) {
    $model->history[$index20]->order->contact->createdAt = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['history'][$index20]['order']['contact']['createdAt']);

}
if (isset($jsonData['history'][$index20]['order']['contact']['managerId'])) {
    $model->history[$index20]->order->contact->managerId = $jsonData['history'][$index20]['order']['contact']['managerId'];

}
if (isset($jsonData['history'][$index20]['order']['contact']['vip'])) {
    $model->history[$index20]->order->contact->vip = $jsonData['history'][$index20]['order']['contact']['vip'];

}
if (isset($jsonData['history'][$index20]['order']['contact']['bad'])) {
    $model->history[$index20]->order->contact->bad = $jsonData['history'][$index20]['order']['contact']['bad'];

}
if (isset($jsonData['history'][$index20]['order']['contact']['browserId'])) {
    $model->history[$index20]->order->contact->browserId = $jsonData['history'][$index20]['order']['contact']['browserId'];

}
if (isset($jsonData['history'][$index20]['order']['contact']['site'])) {
    $model->history[$index20]->order->contact->site = $jsonData['history'][$index20]['order']['contact']['site'];

}
if (isset($jsonData['history'][$index20]['order']['contact']['contragent'])) {
    
$model->history[$index20]->order->contact->contragent = new RetailCrm\Api\Model\Entity\Customers\CustomerContragent();
if (isset($jsonData['history'][$index20]['order']['contact']['contragent']['contragentType'])) {
    $model->history[$index20]->order->contact->contragent->contragentType = $jsonData['history'][$index20]['order']['contact']['contragent']['contragentType'];

}
if (isset($jsonData['history'][$index20]['order']['contact']['contragent']['legalName'])) {
    $model->history[$index20]->order->contact->contragent->legalName = $jsonData['history'][$index20]['order']['contact']['contragent']['legalName'];

}
if (isset($jsonData['history'][$index20]['order']['contact']['contragent']['legalAddress'])) {
    $model->history[$index20]->order->contact->contragent->legalAddress = $jsonData['history'][$index20]['order']['contact']['contragent']['legalAddress'];

}
if (isset($jsonData['history'][$index20]['order']['contact']['contragent']['INN'])) {
    $model->history[$index20]->order->contact->contragent->INN = $jsonData['history'][$index20]['order']['contact']['contragent']['INN'];

}
if (isset($jsonData['history'][$index20]['order']['contact']['contragent']['OKPO'])) {
    $model->history[$index20]->order->contact->contragent->OKPO = $jsonData['history'][$index20]['order']['contact']['contragent']['OKPO'];

}
if (isset($jsonData['history'][$index20]['order']['contact']['contragent']['KPP'])) {
    $model->history[$index20]->order->contact->contragent->KPP = $jsonData['history'][$index20]['order']['contact']['contragent']['KPP'];

}
if (isset($jsonData['history'][$index20]['order']['contact']['contragent']['OGRN'])) {
    $model->history[$index20]->order->contact->contragent->OGRN = $jsonData['history'][$index20]['order']['contact']['contragent']['OGRN'];

}
if (isset($jsonData['history'][$index20]['order']['contact']['contragent']['OGRNIP'])) {
    $model->history[$index20]->order->contact->contragent->OGRNIP = $jsonData['history'][$index20]['order']['contact']['contragent']['OGRNIP'];

}
if (isset($jsonData['history'][$index20]['order']['contact']['contragent']['certificateNumber'])) {
    $model->history[$index20]->order->contact->contragent->certificateNumber = $jsonData['history'][$index20]['order']['contact']['contragent']['certificateNumber'];

}
if (isset($jsonData['history'][$index20]['order']['contact']['contragent']['certificateDate'])) {
    $model->history[$index20]->order->contact->contragent->certificateDate = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['history'][$index20]['order']['contact']['contragent']['certificateDate']);

}
if (isset($jsonData['history'][$index20]['order']['contact']['contragent']['BIK'])) {
    $model->history[$index20]->order->contact->contragent->BIK = $jsonData['history'][$index20]['order']['contact']['contragent']['BIK'];

}
if (isset($jsonData['history'][$index20]['order']['contact']['contragent']['bank'])) {
    $model->history[$index20]->order->contact->contragent->bank = $jsonData['history'][$index20]['order']['contact']['contragent']['bank'];

}
if (isset($jsonData['history'][$index20]['order']['contact']['contragent']['bankAddress'])) {
    $model->history[$index20]->order->contact->contragent->bankAddress = $jsonData['history'][$index20]['order']['contact']['contragent']['bankAddress'];

}
if (isset($jsonData['history'][$index20]['order']['contact']['contragent']['corrAccount'])) {
    $model->history[$index20]->order->contact->contragent->corrAccount = $jsonData['history'][$index20]['order']['contact']['contragent']['corrAccount'];

}
if (isset($jsonData['history'][$index20]['order']['contact']['contragent']['bankAccount'])) {
    $model->history[$index20]->order->contact->contragent->bankAccount = $jsonData['history'][$index20]['order']['contact']['contragent']['bankAccount'];

}


}
if (isset($jsonData['history'][$index20]['order']['contact']['tags'])) {
    $model->history[$index20]->order->contact->tags = [];
foreach (array_keys($jsonData['history'][$index20]['order']['contact']['tags']) as $index58) {
    
$model->history[$index20]->order->contact->tags[$index58] = new RetailCrm\Api\Model\Entity\Customers\CustomerTag();
if (isset($jsonData['history'][$index20]['order']['contact']['tags'][$index58]['name'])) {
    $model->history[$index20]->order->contact->tags[$index58]->name = $jsonData['history'][$index20]['order']['contact']['tags'][$index58]['name'];

}
if (isset($jsonData['history'][$index20]['order']['contact']['tags'][$index58]['color'])) {
    $model->history[$index20]->order->contact->tags[$index58]->color = $jsonData['history'][$index20]['order']['contact']['tags'][$index58]['color'];

}
if (isset($jsonData['history'][$index20]['order']['contact']['tags'][$index58]['attached'])) {
    $model->history[$index20]->order->contact->tags[$index58]->attached = $jsonData['history'][$index20]['order']['contact']['tags'][$index58]['attached'];

}


}

}
if (isset($jsonData['history'][$index20]['order']['contact']['avgMarginSumm'])) {
    $model->history[$index20]->order->contact->avgMarginSumm = (float) $jsonData['history'][$index20]['order']['contact']['avgMarginSumm'];

}
if (isset($jsonData['history'][$index20]['order']['contact']['marginSumm'])) {
    $model->history[$index20]->order->contact->marginSumm = (float) $jsonData['history'][$index20]['order']['contact']['marginSumm'];

}
if (isset($jsonData['history'][$index20]['order']['contact']['totalSumm'])) {
    $model->history[$index20]->order->contact->totalSumm = (float) $jsonData['history'][$index20]['order']['contact']['totalSumm'];

}
if (isset($jsonData['history'][$index20]['order']['contact']['averageSumm'])) {
    $model->history[$index20]->order->contact->averageSumm = (float) $jsonData['history'][$index20]['order']['contact']['averageSumm'];

}
if (isset($jsonData['history'][$index20]['order']['contact']['ordersCount'])) {
    $model->history[$index20]->order->contact->ordersCount = $jsonData['history'][$index20]['order']['contact']['ordersCount'];

}
if (isset($jsonData['history'][$index20]['order']['contact']['costSumm'])) {
    $model->history[$index20]->order->contact->costSumm = (float) $jsonData['history'][$index20]['order']['contact']['costSumm'];

}
if (isset($jsonData['history'][$index20]['order']['contact']['customFields'])) {
    $model->history[$index20]->order->contact->customFields = [];
foreach (array_keys($jsonData['history'][$index20]['order']['contact']['customFields']) as $index66) {
    $model->history[$index20]->order->contact->customFields[$index66] = $jsonData['history'][$index20]['order']['contact']['customFields'][$index66];

}

}
if (isset($jsonData['history'][$index20]['order']['contact']['personalDiscount'])) {
    $model->history[$index20]->order->contact->personalDiscount = (float) $jsonData['history'][$index20]['order']['contact']['personalDiscount'];

}
if (isset($jsonData['history'][$index20]['order']['contact']['cumulativeDiscount'])) {
    $model->history[$index20]->order->contact->cumulativeDiscount = (float) $jsonData['history'][$index20]['order']['contact']['cumulativeDiscount'];

}
if (isset($jsonData['history'][$index20]['order']['contact']['discountCardNumber'])) {
    $model->history[$index20]->order->contact->discountCardNumber = $jsonData['history'][$index20]['order']['contact']['discountCardNumber'];

}
if (isset($jsonData['history'][$index20]['order']['contact']['firstClientId'])) {
    $model->history[$index20]->order->contact->firstClientId = $jsonData['history'][$index20]['order']['contact']['firstClientId'];

}
if (isset($jsonData['history'][$index20]['order']['contact']['lastClientId'])) {
    $model->history[$index20]->order->contact->lastClientId = $jsonData['history'][$index20]['order']['contact']['lastClientId'];

}
if (isset($jsonData['history'][$index20]['order']['contact']['address'])) {
    
$model->history[$index20]->order->contact->address = new RetailCrm\Api\Model\Entity\Customers\CustomerAddress();
if (isset($jsonData['history'][$index20]['order']['contact']['address']['id'])) {
    $model->history[$index20]->order->contact->address->id = $jsonData['history'][$index20]['order']['contact']['address']['id'];

}
if (isset($jsonData['history'][$index20]['order']['contact']['address']['name'])) {
    $model->history[$index20]->order->contact->address->name = $jsonData['history'][$index20]['order']['contact']['address']['name'];

}
if (isset($jsonData['history'][$index20]['order']['contact']['address']['isMain'])) {
    $model->history[$index20]->order->contact->address->isMain = $jsonData['history'][$index20]['order']['contact']['address']['isMain'];

}
if (isset($jsonData['history'][$index20]['order']['contact']['address']['index'])) {
    $model->history[$index20]->order->contact->address->index = $jsonData['history'][$index20]['order']['contact']['address']['index'];

}
if (isset($jsonData['history'][$index20]['order']['contact']['address']['countryIso'])) {
    $model->history[$index20]->order->contact->address->countryIso = $jsonData['history'][$index20]['order']['contact']['address']['countryIso'];

}
if (isset($jsonData['history'][$index20]['order']['contact']['address']['region'])) {
    $model->history[$index20]->order->contact->address->region = $jsonData['history'][$index20]['order']['contact']['address']['region'];

}
if (isset($jsonData['history'][$index20]['order']['contact']['address']['regionId'])) {
    $model->history[$index20]->order->contact->address->regionId = $jsonData['history'][$index20]['order']['contact']['address']['regionId'];

}
if (isset($jsonData['history'][$index20]['order']['contact']['address']['city'])) {
    $model->history[$index20]->order->contact->address->city = $jsonData['history'][$index20]['order']['contact']['address']['city'];

}
if (isset($jsonData['history'][$index20]['order']['contact']['address']['cityId'])) {
    $model->history[$index20]->order->contact->address->cityId = $jsonData['history'][$index20]['order']['contact']['address']['cityId'];

}
if (isset($jsonData['history'][$index20]['order']['contact']['address']['cityType'])) {
    $model->history[$index20]->order->contact->address->cityType = $jsonData['history'][$index20]['order']['contact']['address']['cityType'];

}
if (isset($jsonData['history'][$index20]['order']['contact']['address']['street'])) {
    $model->history[$index20]->order->contact->address->street = $jsonData['history'][$index20]['order']['contact']['address']['street'];

}
if (isset($jsonData['history'][$index20]['order']['contact']['address']['streetId'])) {
    $model->history[$index20]->order->contact->address->streetId = $jsonData['history'][$index20]['order']['contact']['address']['streetId'];

}
if (isset($jsonData['history'][$index20]['order']['contact']['address']['streetType'])) {
    $model->history[$index20]->order->contact->address->streetType = $jsonData['history'][$index20]['order']['contact']['address']['streetType'];

}
if (isset($jsonData['history'][$index20]['order']['contact']['address']['building'])) {
    $model->history[$index20]->order->contact->address->building = $jsonData['history'][$index20]['order']['contact']['address']['building'];

}
if (isset($jsonData['history'][$index20]['order']['contact']['address']['flat'])) {
    $model->history[$index20]->order->contact->address->flat = $jsonData['history'][$index20]['order']['contact']['address']['flat'];

}
if (isset($jsonData['history'][$index20]['order']['contact']['address']['floor'])) {
    $model->history[$index20]->order->contact->address->floor = $jsonData['history'][$index20]['order']['contact']['address']['floor'];

}
if (isset($jsonData['history'][$index20]['order']['contact']['address']['block'])) {
    $model->history[$index20]->order->contact->address->block = $jsonData['history'][$index20]['order']['contact']['address']['block'];

}
if (isset($jsonData['history'][$index20]['order']['contact']['address']['house'])) {
    $model->history[$index20]->order->contact->address->house = $jsonData['history'][$index20]['order']['contact']['address']['house'];

}
if (isset($jsonData['history'][$index20]['order']['contact']['address']['housing'])) {
    $model->history[$index20]->order->contact->address->housing = $jsonData['history'][$index20]['order']['contact']['address']['housing'];

}
if (isset($jsonData['history'][$index20]['order']['contact']['address']['metro'])) {
    $model->history[$index20]->order->contact->address->metro = $jsonData['history'][$index20]['order']['contact']['address']['metro'];

}
if (isset($jsonData['history'][$index20]['order']['contact']['address']['notes'])) {
    $model->history[$index20]->order->contact->address->notes = $jsonData['history'][$index20]['order']['contact']['address']['notes'];

}
if (isset($jsonData['history'][$index20]['order']['contact']['address']['text'])) {
    $model->history[$index20]->order->contact->address->text = $jsonData['history'][$index20]['order']['contact']['address']['text'];

}
if (isset($jsonData['history'][$index20]['order']['contact']['address']['externalId'])) {
    $model->history[$index20]->order->contact->address->externalId = $jsonData['history'][$index20]['order']['contact']['address']['externalId'];

}


}
if (isset($jsonData['history'][$index20]['order']['contact']['segments'])) {
    $model->history[$index20]->order->contact->segments = [];
foreach (array_keys($jsonData['history'][$index20]['order']['contact']['segments']) as $index62) {
    
$model->history[$index20]->order->contact->segments[$index62] = new RetailCrm\Api\Model\Entity\Customers\Segment();
if (isset($jsonData['history'][$index20]['order']['contact']['segments'][$index62]['id'])) {
    $model->history[$index20]->order->contact->segments[$index62]->id = $jsonData['history'][$index20]['order']['contact']['segments'][$index62]['id'];

}
if (isset($jsonData['history'][$index20]['order']['contact']['segments'][$index62]['code'])) {
    $model->history[$index20]->order->contact->segments[$index62]->code = $jsonData['history'][$index20]['order']['contact']['segments'][$index62]['code'];

}
if (isset($jsonData['history'][$index20]['order']['contact']['segments'][$index62]['name'])) {
    $model->history[$index20]->order->contact->segments[$index62]->name = $jsonData['history'][$index20]['order']['contact']['segments'][$index62]['name'];

}
if (isset($jsonData['history'][$index20]['order']['contact']['segments'][$index62]['createdAt'])) {
    $model->history[$index20]->order->contact->segments[$index62]->createdAt = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['history'][$index20]['order']['contact']['segments'][$index62]['createdAt']);

}
if (isset($jsonData['history'][$index20]['order']['contact']['segments'][$index62]['isDynamic'])) {
    $model->history[$index20]->order->contact->segments[$index62]->isDynamic = $jsonData['history'][$index20]['order']['contact']['segments'][$index62]['isDynamic'];

}
if (isset($jsonData['history'][$index20]['order']['contact']['segments'][$index62]['customersCount'])) {
    $model->history[$index20]->order->contact->segments[$index62]->customersCount = $jsonData['history'][$index20]['order']['contact']['segments'][$index62]['customersCount'];

}
if (isset($jsonData['history'][$index20]['order']['contact']['segments'][$index62]['active'])) {
    $model->history[$index20]->order->contact->segments[$index62]->active = $jsonData['history'][$index20]['order']['contact']['segments'][$index62]['active'];

}


}

}
if (isset($jsonData['history'][$index20]['order']['contact']['maturationTime'])) {
    $model->history[$index20]->order->contact->maturationTime = $jsonData['history'][$index20]['order']['contact']['maturationTime'];

}
if (isset($jsonData['history'][$index20]['order']['contact']['firstName'])) {
    $model->history[$index20]->order->contact->firstName = $jsonData['history'][$index20]['order']['contact']['firstName'];

}
if (isset($jsonData['history'][$index20]['order']['contact']['lastName'])) {
    $model->history[$index20]->order->contact->lastName = $jsonData['history'][$index20]['order']['contact']['lastName'];

}
if (isset($jsonData['history'][$index20]['order']['contact']['patronymic'])) {
    $model->history[$index20]->order->contact->patronymic = $jsonData['history'][$index20]['order']['contact']['patronymic'];

}
if (isset($jsonData['history'][$index20]['order']['contact']['sex'])) {
    $model->history[$index20]->order->contact->sex = $jsonData['history'][$index20]['order']['contact']['sex'];

}
if (isset($jsonData['history'][$index20]['order']['contact']['presumableSex'])) {
    $model->history[$index20]->order->contact->presumableSex = $jsonData['history'][$index20]['order']['contact']['presumableSex'];

}
if (isset($jsonData['history'][$index20]['order']['contact']['email'])) {
    $model->history[$index20]->order->contact->email = $jsonData['history'][$index20]['order']['contact']['email'];

}
if (isset($jsonData['history'][$index20]['order']['contact']['emailMarketingUnsubscribedAt'])) {
    $model->history[$index20]->order->contact->emailMarketingUnsubscribedAt = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['history'][$index20]['order']['contact']['emailMarketingUnsubscribedAt']);

}
if (isset($jsonData['history'][$index20]['order']['contact']['phones'])) {
    $model->history[$index20]->order->contact->phones = [];
foreach (array_keys($jsonData['history'][$index20]['order']['contact']['phones']) as $index60) {
    
$model->history[$index20]->order->contact->phones[$index60] = new RetailCrm\Api\Model\Entity\Customers\CustomerPhone();
if (isset($jsonData['history'][$index20]['order']['contact']['phones'][$index60]['number'])) {
    $model->history[$index20]->order->contact->phones[$index60]->number = $jsonData['history'][$index20]['order']['contact']['phones'][$index60]['number'];

}


}

}
if (isset($jsonData['history'][$index20]['order']['contact']['birthday'])) {
    $model->history[$index20]->order->contact->birthday = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['history'][$index20]['order']['contact']['birthday']);

}
if (isset($jsonData['history'][$index20]['order']['contact']['source'])) {
    
$model->history[$index20]->order->contact->source = new RetailCrm\Api\Model\Entity\Source();
if (isset($jsonData['history'][$index20]['order']['contact']['source']['source'])) {
    $model->history[$index20]->order->contact->source->source = $jsonData['history'][$index20]['order']['contact']['source']['source'];

}
if (isset($jsonData['history'][$index20]['order']['contact']['source']['medium'])) {
    $model->history[$index20]->order->contact->source->medium = $jsonData['history'][$index20]['order']['contact']['source']['medium'];

}
if (isset($jsonData['history'][$index20]['order']['contact']['source']['campaign'])) {
    $model->history[$index20]->order->contact->source->campaign = $jsonData['history'][$index20]['order']['contact']['source']['campaign'];

}
if (isset($jsonData['history'][$index20]['order']['contact']['source']['keyword'])) {
    $model->history[$index20]->order->contact->source->keyword = $jsonData['history'][$index20]['order']['contact']['source']['keyword'];

}
if (isset($jsonData['history'][$index20]['order']['contact']['source']['content'])) {
    $model->history[$index20]->order->contact->source->content = $jsonData['history'][$index20]['order']['contact']['source']['content'];

}


}
if (isset($jsonData['history'][$index20]['order']['contact']['photoUrl'])) {
    $model->history[$index20]->order->contact->photoUrl = $jsonData['history'][$index20]['order']['contact']['photoUrl'];

}
if (isset($jsonData['history'][$index20]['order']['contact']['mgCustomerId'])) {
    $model->history[$index20]->order->contact->mgCustomerId = $jsonData['history'][$index20]['order']['contact']['mgCustomerId'];

}
if (isset($jsonData['history'][$index20]['order']['contact']['subscribed'])) {
    $model->history[$index20]->order->contact->subscribed = $jsonData['history'][$index20]['order']['contact']['subscribed'];

}


}
if (isset($jsonData['history'][$index20]['order']['company'])) {
    
$model->history[$index20]->order->company = new RetailCrm\Api\Model\Entity\CustomersCorporate\Company();
if (isset($jsonData['history'][$index20]['order']['company']['id'])) {
    $model->history[$index20]->order->company->id = $jsonData['history'][$index20]['order']['company']['id'];

}
if (isset($jsonData['history'][$index20]['order']['company']['isMain'])) {
    $model->history[$index20]->order->company->isMain = $jsonData['history'][$index20]['order']['company']['isMain'];

}
if (isset($jsonData['history'][$index20]['order']['company']['externalId'])) {
    $model->history[$index20]->order->company->externalId = $jsonData['history'][$index20]['order']['company']['externalId'];

}
if (isset($jsonData['history'][$index20]['order']['company']['active'])) {
    $model->history[$index20]->order->company->active = $jsonData['history'][$index20]['order']['company']['active'];

}
if (isset($jsonData['history'][$index20]['order']['company']['name'])) {
    $model->history[$index20]->order->company->name = $jsonData['history'][$index20]['order']['company']['name'];

}
if (isset($jsonData['history'][$index20]['order']['company']['brand'])) {
    $model->history[$index20]->order->company->brand = $jsonData['history'][$index20]['order']['company']['brand'];

}
if (isset($jsonData['history'][$index20]['order']['company']['site'])) {
    $model->history[$index20]->order->company->site = $jsonData['history'][$index20]['order']['company']['site'];

}
if (isset($jsonData['history'][$index20]['order']['company']['createdAt'])) {
    $model->history[$index20]->order->company->createdAt = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['history'][$index20]['order']['company']['createdAt']);

}
if (isset($jsonData['history'][$index20]['order']['company']['customer'])) {
    
$model->history[$index20]->order->company->customer = new RetailCrm\Api\Model\Entity\CustomersCorporate\SerializedEntityCustomer();
if (isset($jsonData['history'][$index20]['order']['company']['customer']['site'])) {
    $model->history[$index20]->order->company->customer->site = $jsonData['history'][$index20]['order']['company']['customer']['site'];

}
if (isset($jsonData['history'][$index20]['order']['company']['customer']['id'])) {
    $model->history[$index20]->order->company->customer->id = $jsonData['history'][$index20]['order']['company']['customer']['id'];

}
if (isset($jsonData['history'][$index20]['order']['company']['customer']['externalId'])) {
    $model->history[$index20]->order->company->customer->externalId = $jsonData['history'][$index20]['order']['company']['customer']['externalId'];

}
if (isset($jsonData['history'][$index20]['order']['company']['customer']['type'])) {
    $model->history[$index20]->order->company->customer->type = $jsonData['history'][$index20]['order']['company']['customer']['type'];

}


}
if (isset($jsonData['history'][$index20]['order']['company']['contragent'])) {
    
$model->history[$index20]->order->company->contragent = new RetailCrm\Api\Model\Entity\Customers\CustomerContragent();
if (isset($jsonData['history'][$index20]['order']['company']['contragent']['contragentType'])) {
    $model->history[$index20]->order->company->contragent->contragentType = $jsonData['history'][$index20]['order']['company']['contragent']['contragentType'];

}
if (isset($jsonData['history'][$index20]['order']['company']['contragent']['legalName'])) {
    $model->history[$index20]->order->company->contragent->legalName = $jsonData['history'][$index20]['order']['company']['contragent']['legalName'];

}
if (isset($jsonData['history'][$index20]['order']['company']['contragent']['legalAddress'])) {
    $model->history[$index20]->order->company->contragent->legalAddress = $jsonData['history'][$index20]['order']['company']['contragent']['legalAddress'];

}
if (isset($jsonData['history'][$index20]['order']['company']['contragent']['INN'])) {
    $model->history[$index20]->order->company->contragent->INN = $jsonData['history'][$index20]['order']['company']['contragent']['INN'];

}
if (isset($jsonData['history'][$index20]['order']['company']['contragent']['OKPO'])) {
    $model->history[$index20]->order->company->contragent->OKPO = $jsonData['history'][$index20]['order']['company']['contragent']['OKPO'];

}
if (isset($jsonData['history'][$index20]['order']['company']['contragent']['KPP'])) {
    $model->history[$index20]->order->company->contragent->KPP = $jsonData['history'][$index20]['order']['company']['contragent']['KPP'];

}
if (isset($jsonData['history'][$index20]['order']['company']['contragent']['OGRN'])) {
    $model->history[$index20]->order->company->contragent->OGRN = $jsonData['history'][$index20]['order']['company']['contragent']['OGRN'];

}
if (isset($jsonData['history'][$index20]['order']['company']['contragent']['OGRNIP'])) {
    $model->history[$index20]->order->company->contragent->OGRNIP = $jsonData['history'][$index20]['order']['company']['contragent']['OGRNIP'];

}
if (isset($jsonData['history'][$index20]['order']['company']['contragent']['certificateNumber'])) {
    $model->history[$index20]->order->company->contragent->certificateNumber = $jsonData['history'][$index20]['order']['company']['contragent']['certificateNumber'];

}
if (isset($jsonData['history'][$index20]['order']['company']['contragent']['certificateDate'])) {
    $model->history[$index20]->order->company->contragent->certificateDate = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['history'][$index20]['order']['company']['contragent']['certificateDate']);

}
if (isset($jsonData['history'][$index20]['order']['company']['contragent']['BIK'])) {
    $model->history[$index20]->order->company->contragent->BIK = $jsonData['history'][$index20]['order']['company']['contragent']['BIK'];

}
if (isset($jsonData['history'][$index20]['order']['company']['contragent']['bank'])) {
    $model->history[$index20]->order->company->contragent->bank = $jsonData['history'][$index20]['order']['company']['contragent']['bank'];

}
if (isset($jsonData['history'][$index20]['order']['company']['contragent']['bankAddress'])) {
    $model->history[$index20]->order->company->contragent->bankAddress = $jsonData['history'][$index20]['order']['company']['contragent']['bankAddress'];

}
if (isset($jsonData['history'][$index20]['order']['company']['contragent']['corrAccount'])) {
    $model->history[$index20]->order->company->contragent->corrAccount = $jsonData['history'][$index20]['order']['company']['contragent']['corrAccount'];

}
if (isset($jsonData['history'][$index20]['order']['company']['contragent']['bankAccount'])) {
    $model->history[$index20]->order->company->contragent->bankAccount = $jsonData['history'][$index20]['order']['company']['contragent']['bankAccount'];

}


}
if (isset($jsonData['history'][$index20]['order']['company']['address'])) {
    
$model->history[$index20]->order->company->address = new RetailCrm\Api\Model\Entity\Customers\CustomerAddress();
if (isset($jsonData['history'][$index20]['order']['company']['address']['id'])) {
    $model->history[$index20]->order->company->address->id = $jsonData['history'][$index20]['order']['company']['address']['id'];

}
if (isset($jsonData['history'][$index20]['order']['company']['address']['name'])) {
    $model->history[$index20]->order->company->address->name = $jsonData['history'][$index20]['order']['company']['address']['name'];

}
if (isset($jsonData['history'][$index20]['order']['company']['address']['isMain'])) {
    $model->history[$index20]->order->company->address->isMain = $jsonData['history'][$index20]['order']['company']['address']['isMain'];

}
if (isset($jsonData['history'][$index20]['order']['company']['address']['index'])) {
    $model->history[$index20]->order->company->address->index = $jsonData['history'][$index20]['order']['company']['address']['index'];

}
if (isset($jsonData['history'][$index20]['order']['company']['address']['countryIso'])) {
    $model->history[$index20]->order->company->address->countryIso = $jsonData['history'][$index20]['order']['company']['address']['countryIso'];

}
if (isset($jsonData['history'][$index20]['order']['company']['address']['region'])) {
    $model->history[$index20]->order->company->address->region = $jsonData['history'][$index20]['order']['company']['address']['region'];

}
if (isset($jsonData['history'][$index20]['order']['company']['address']['regionId'])) {
    $model->history[$index20]->order->company->address->regionId = $jsonData['history'][$index20]['order']['company']['address']['regionId'];

}
if (isset($jsonData['history'][$index20]['order']['company']['address']['city'])) {
    $model->history[$index20]->order->company->address->city = $jsonData['history'][$index20]['order']['company']['address']['city'];

}
if (isset($jsonData['history'][$index20]['order']['company']['address']['cityId'])) {
    $model->history[$index20]->order->company->address->cityId = $jsonData['history'][$index20]['order']['company']['address']['cityId'];

}
if (isset($jsonData['history'][$index20]['order']['company']['address']['cityType'])) {
    $model->history[$index20]->order->company->address->cityType = $jsonData['history'][$index20]['order']['company']['address']['cityType'];

}
if (isset($jsonData['history'][$index20]['order']['company']['address']['street'])) {
    $model->history[$index20]->order->company->address->street = $jsonData['history'][$index20]['order']['company']['address']['street'];

}
if (isset($jsonData['history'][$index20]['order']['company']['address']['streetId'])) {
    $model->history[$index20]->order->company->address->streetId = $jsonData['history'][$index20]['order']['company']['address']['streetId'];

}
if (isset($jsonData['history'][$index20]['order']['company']['address']['streetType'])) {
    $model->history[$index20]->order->company->address->streetType = $jsonData['history'][$index20]['order']['company']['address']['streetType'];

}
if (isset($jsonData['history'][$index20]['order']['company']['address']['building'])) {
    $model->history[$index20]->order->company->address->building = $jsonData['history'][$index20]['order']['company']['address']['building'];

}
if (isset($jsonData['history'][$index20]['order']['company']['address']['flat'])) {
    $model->history[$index20]->order->company->address->flat = $jsonData['history'][$index20]['order']['company']['address']['flat'];

}
if (isset($jsonData['history'][$index20]['order']['company']['address']['floor'])) {
    $model->history[$index20]->order->company->address->floor = $jsonData['history'][$index20]['order']['company']['address']['floor'];

}
if (isset($jsonData['history'][$index20]['order']['company']['address']['block'])) {
    $model->history[$index20]->order->company->address->block = $jsonData['history'][$index20]['order']['company']['address']['block'];

}
if (isset($jsonData['history'][$index20]['order']['company']['address']['house'])) {
    $model->history[$index20]->order->company->address->house = $jsonData['history'][$index20]['order']['company']['address']['house'];

}
if (isset($jsonData['history'][$index20]['order']['company']['address']['housing'])) {
    $model->history[$index20]->order->company->address->housing = $jsonData['history'][$index20]['order']['company']['address']['housing'];

}
if (isset($jsonData['history'][$index20]['order']['company']['address']['metro'])) {
    $model->history[$index20]->order->company->address->metro = $jsonData['history'][$index20]['order']['company']['address']['metro'];

}
if (isset($jsonData['history'][$index20]['order']['company']['address']['notes'])) {
    $model->history[$index20]->order->company->address->notes = $jsonData['history'][$index20]['order']['company']['address']['notes'];

}
if (isset($jsonData['history'][$index20]['order']['company']['address']['text'])) {
    $model->history[$index20]->order->company->address->text = $jsonData['history'][$index20]['order']['company']['address']['text'];

}
if (isset($jsonData['history'][$index20]['order']['company']['address']['externalId'])) {
    $model->history[$index20]->order->company->address->externalId = $jsonData['history'][$index20]['order']['company']['address']['externalId'];

}


}
if (isset($jsonData['history'][$index20]['order']['company']['customFields'])) {
    $model->history[$index20]->order->company->customFields = [];
foreach (array_keys($jsonData['history'][$index20]['order']['company']['customFields']) as $index66) {
    $model->history[$index20]->order->company->customFields[$index66] = $jsonData['history'][$index20]['order']['company']['customFields'][$index66];

}

}
if (isset($jsonData['history'][$index20]['order']['company']['marginSumm'])) {
    $model->history[$index20]->order->company->marginSumm = (float) $jsonData['history'][$index20]['order']['company']['marginSumm'];

}
if (isset($jsonData['history'][$index20]['order']['company']['totalSumm'])) {
    $model->history[$index20]->order->company->totalSumm = (float) $jsonData['history'][$index20]['order']['company']['totalSumm'];

}
if (isset($jsonData['history'][$index20]['order']['company']['averageSumm'])) {
    $model->history[$index20]->order->company->averageSumm = (float) $jsonData['history'][$index20]['order']['company']['averageSumm'];

}
if (isset($jsonData['history'][$index20]['order']['company']['ordersCount'])) {
    $model->history[$index20]->order->company->ordersCount = $jsonData['history'][$index20]['order']['company']['ordersCount'];

}
if (isset($jsonData['history'][$index20]['order']['company']['costSumm'])) {
    $model->history[$index20]->order->company->costSumm = (float) $jsonData['history'][$index20]['order']['company']['costSumm'];

}


}
if (isset($jsonData['history'][$index20]['order']['contragent'])) {
    
$model->history[$index20]->order->contragent = new RetailCrm\Api\Model\Entity\Order\OrderContragent();
if (isset($jsonData['history'][$index20]['order']['contragent']['contragentType'])) {
    $model->history[$index20]->order->contragent->contragentType = $jsonData['history'][$index20]['order']['contragent']['contragentType'];

}
if (isset($jsonData['history'][$index20]['order']['contragent']['legalName'])) {
    $model->history[$index20]->order->contragent->legalName = $jsonData['history'][$index20]['order']['contragent']['legalName'];

}
if (isset($jsonData['history'][$index20]['order']['contragent']['legalAddress'])) {
    $model->history[$index20]->order->contragent->legalAddress = $jsonData['history'][$index20]['order']['contragent']['legalAddress'];

}
if (isset($jsonData['history'][$index20]['order']['contragent']['INN'])) {
    $model->history[$index20]->order->contragent->INN = $jsonData['history'][$index20]['order']['contragent']['INN'];

}
if (isset($jsonData['history'][$index20]['order']['contragent']['OKPO'])) {
    $model->history[$index20]->order->contragent->OKPO = $jsonData['history'][$index20]['order']['contragent']['OKPO'];

}
if (isset($jsonData['history'][$index20]['order']['contragent']['KPP'])) {
    $model->history[$index20]->order->contragent->KPP = $jsonData['history'][$index20]['order']['contragent']['KPP'];

}
if (isset($jsonData['history'][$index20]['order']['contragent']['OGRN'])) {
    $model->history[$index20]->order->contragent->OGRN = $jsonData['history'][$index20]['order']['contragent']['OGRN'];

}
if (isset($jsonData['history'][$index20]['order']['contragent']['OGRNIP'])) {
    $model->history[$index20]->order->contragent->OGRNIP = $jsonData['history'][$index20]['order']['contragent']['OGRNIP'];

}
if (isset($jsonData['history'][$index20]['order']['contragent']['certificateNumber'])) {
    $model->history[$index20]->order->contragent->certificateNumber = $jsonData['history'][$index20]['order']['contragent']['certificateNumber'];

}
if (isset($jsonData['history'][$index20]['order']['contragent']['certificateDate'])) {
    $model->history[$index20]->order->contragent->certificateDate = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['history'][$index20]['order']['contragent']['certificateDate']);

}
if (isset($jsonData['history'][$index20]['order']['contragent']['BIK'])) {
    $model->history[$index20]->order->contragent->BIK = $jsonData['history'][$index20]['order']['contragent']['BIK'];

}
if (isset($jsonData['history'][$index20]['order']['contragent']['bank'])) {
    $model->history[$index20]->order->contragent->bank = $jsonData['history'][$index20]['order']['contragent']['bank'];

}
if (isset($jsonData['history'][$index20]['order']['contragent']['bankAddress'])) {
    $model->history[$index20]->order->contragent->bankAddress = $jsonData['history'][$index20]['order']['contragent']['bankAddress'];

}
if (isset($jsonData['history'][$index20]['order']['contragent']['corrAccount'])) {
    $model->history[$index20]->order->contragent->corrAccount = $jsonData['history'][$index20]['order']['contragent']['corrAccount'];

}
if (isset($jsonData['history'][$index20]['order']['contragent']['bankAccount'])) {
    $model->history[$index20]->order->contragent->bankAccount = $jsonData['history'][$index20]['order']['contragent']['bankAccount'];

}


}
if (isset($jsonData['history'][$index20]['order']['delivery'])) {
    
$model->history[$index20]->order->delivery = new RetailCrm\Api\Model\Entity\Order\Delivery\SerializedOrderDelivery();
if (isset($jsonData['history'][$index20]['order']['delivery']['code'])) {
    $model->history[$index20]->order->delivery->code = $jsonData['history'][$index20]['order']['delivery']['code'];

}
if (isset($jsonData['history'][$index20]['order']['delivery']['integrationCode'])) {
    $model->history[$index20]->order->delivery->integrationCode = $jsonData['history'][$index20]['order']['delivery']['integrationCode'];

}
if (isset($jsonData['history'][$index20]['order']['delivery']['data'])) {
    
$model->history[$index20]->order->delivery->data = new RetailCrm\Api\Model\Entity\Order\Delivery\DeliveryData();
if (isset($jsonData['history'][$index20]['order']['delivery']['data']['externalId'])) {
    $model->history[$index20]->order->delivery->data->externalId = $jsonData['history'][$index20]['order']['delivery']['data']['externalId'];

}
if (isset($jsonData['history'][$index20]['order']['delivery']['data']['trackNumber'])) {
    $model->history[$index20]->order->delivery->data->trackNumber = $jsonData['history'][$index20]['order']['delivery']['data']['trackNumber'];

}
if (isset($jsonData['history'][$index20]['order']['delivery']['data']['status'])) {
    $model->history[$index20]->order->delivery->data->status = $jsonData['history'][$index20]['order']['delivery']['data']['status'];

}
if (isset($jsonData['history'][$index20]['order']['delivery']['data']['locked'])) {
    $model->history[$index20]->order->delivery->data->locked = $jsonData['history'][$index20]['order']['delivery']['data']['locked'];

}
if (isset($jsonData['history'][$index20]['order']['delivery']['data']['pickuppointAddress'])) {
    $model->history[$index20]->order->delivery->data->pickuppointAddress = $jsonData['history'][$index20]['order']['delivery']['data']['pickuppointAddress'];

}
if (isset($jsonData['history'][$index20]['order']['delivery']['data']['days'])) {
    $model->history[$index20]->order->delivery->data->days = $jsonData['history'][$index20]['order']['delivery']['data']['days'];

}
if (isset($jsonData['history'][$index20]['order']['delivery']['data']['statusText'])) {
    $model->history[$index20]->order->delivery->data->statusText = $jsonData['history'][$index20]['order']['delivery']['data']['statusText'];

}
if (isset($jsonData['history'][$index20]['order']['delivery']['data']['statusDate'])) {
    $model->history[$index20]->order->delivery->data->statusDate = \DateTime::createFromFormat('Y-m-d', $jsonData['history'][$index20]['order']['delivery']['data']['statusDate']);

}
if (isset($jsonData['history'][$index20]['order']['delivery']['data']['tariff'])) {
    $model->history[$index20]->order->delivery->data->tariff = $jsonData['history'][$index20]['order']['delivery']['data']['tariff'];

}
if (isset($jsonData['history'][$index20]['order']['delivery']['data']['tariffName'])) {
    $model->history[$index20]->order->delivery->data->tariffName = $jsonData['history'][$index20]['order']['delivery']['data']['tariffName'];

}
if (isset($jsonData['history'][$index20]['order']['delivery']['data']['pickuppointId'])) {
    $model->history[$index20]->order->delivery->data->pickuppointId = $jsonData['history'][$index20]['order']['delivery']['data']['pickuppointId'];

}
if (isset($jsonData['history'][$index20]['order']['delivery']['data']['pickuppointSchedule'])) {
    $model->history[$index20]->order->delivery->data->pickuppointSchedule = $jsonData['history'][$index20]['order']['delivery']['data']['pickuppointSchedule'];

}
if (isset($jsonData['history'][$index20]['order']['delivery']['data']['pickuppointPhone'])) {
    $model->history[$index20]->order->delivery->data->pickuppointPhone = $jsonData['history'][$index20]['order']['delivery']['data']['pickuppointPhone'];

}
if (isset($jsonData['history'][$index20]['order']['delivery']['data']['payerType'])) {
    $model->history[$index20]->order->delivery->data->payerType = $jsonData['history'][$index20]['order']['delivery']['data']['payerType'];

}
if (isset($jsonData['history'][$index20]['order']['delivery']['data']['statusComment'])) {
    $model->history[$index20]->order->delivery->data->statusComment = $jsonData['history'][$index20]['order']['delivery']['data']['statusComment'];

}
if (isset($jsonData['history'][$index20]['order']['delivery']['data']['cost'])) {
    $model->history[$index20]->order->delivery->data->cost = (float) $jsonData['history'][$index20]['order']['delivery']['data']['cost'];

}
if (isset($jsonData['history'][$index20]['order']['delivery']['data']['minTerm'])) {
    $model->history[$index20]->order->delivery->data->minTerm = $jsonData['history'][$index20]['order']['delivery']['data']['minTerm'];

}
if (isset($jsonData['history'][$index20]['order']['delivery']['data']['maxTerm'])) {
    $model->history[$index20]->order->delivery->data->maxTerm = $jsonData['history'][$index20]['order']['delivery']['data']['maxTerm'];

}
if (isset($jsonData['history'][$index20]['order']['delivery']['data']['shipmentpointId'])) {
    $model->history[$index20]->order->delivery->data->shipmentpointId = $jsonData['history'][$index20]['order']['delivery']['data']['shipmentpointId'];

}
if (isset($jsonData['history'][$index20]['order']['delivery']['data']['shipmentpointName'])) {
    $model->history[$index20]->order->delivery->data->shipmentpointName = $jsonData['history'][$index20]['order']['delivery']['data']['shipmentpointName'];

}
if (isset($jsonData['history'][$index20]['order']['delivery']['data']['shipmentpointAddress'])) {
    $model->history[$index20]->order->delivery->data->shipmentpointAddress = $jsonData['history'][$index20]['order']['delivery']['data']['shipmentpointAddress'];

}
if (isset($jsonData['history'][$index20]['order']['delivery']['data']['shipmentpointSchedule'])) {
    $model->history[$index20]->order->delivery->data->shipmentpointSchedule = $jsonData['history'][$index20]['order']['delivery']['data']['shipmentpointSchedule'];

}
if (isset($jsonData['history'][$index20]['order']['delivery']['data']['shipmentpointPhone'])) {
    $model->history[$index20]->order->delivery->data->shipmentpointPhone = $jsonData['history'][$index20]['order']['delivery']['data']['shipmentpointPhone'];

}
if (isset($jsonData['history'][$index20]['order']['delivery']['data']['shipmentpointCoordinateLatitude'])) {
    $model->history[$index20]->order->delivery->data->shipmentpointCoordinateLatitude = $jsonData['history'][$index20]['order']['delivery']['data']['shipmentpointCoordinateLatitude'];

}
if (isset($jsonData['history'][$index20]['order']['delivery']['data']['shipmentpointCoordinateLongitude'])) {
    $model->history[$index20]->order->delivery->data->shipmentpointCoordinateLongitude = $jsonData['history'][$index20]['order']['delivery']['data']['shipmentpointCoordinateLongitude'];

}
if (isset($jsonData['history'][$index20]['order']['delivery']['data']['pickuppointName'])) {
    $model->history[$index20]->order->delivery->data->pickuppointName = $jsonData['history'][$index20]['order']['delivery']['data']['pickuppointName'];

}
if (isset($jsonData['history'][$index20]['order']['delivery']['data']['pickuppointCoordinateLatitude'])) {
    $model->history[$index20]->order->delivery->data->pickuppointCoordinateLatitude = $jsonData['history'][$index20]['order']['delivery']['data']['pickuppointCoordinateLatitude'];

}
if (isset($jsonData['history'][$index20]['order']['delivery']['data']['pickuppointCoordinateLongitude'])) {
    $model->history[$index20]->order->delivery->data->pickuppointCoordinateLongitude = $jsonData['history'][$index20]['order']['delivery']['data']['pickuppointCoordinateLongitude'];

}
if (isset($jsonData['history'][$index20]['order']['delivery']['data']['extraData'])) {
    $model->history[$index20]->order->delivery->data->extraData = [];
foreach (array_keys($jsonData['history'][$index20]['order']['delivery']['data']['extraData']) as $index72) {
    $model->history[$index20]->order->delivery->data->extraData[$index72] = $jsonData['history'][$index20]['order']['delivery']['data']['extraData'][$index72];

}

}
if (isset($jsonData['history'][$index20]['order']['delivery']['data']['packages'])) {
    $model->history[$index20]->order->delivery->data->packages = [];
foreach (array_keys($jsonData['history'][$index20]['order']['delivery']['data']['packages']) as $index71) {
    
$model->history[$index20]->order->delivery->data->packages[$index71] = new RetailCrm\Api\Model\Entity\Order\Delivery\Package();
if (isset($jsonData['history'][$index20]['order']['delivery']['data']['packages'][$index71]['packageId'])) {
    $model->history[$index20]->order->delivery->data->packages[$index71]->packageId = $jsonData['history'][$index20]['order']['delivery']['data']['packages'][$index71]['packageId'];

}
if (isset($jsonData['history'][$index20]['order']['delivery']['data']['packages'][$index71]['weight'])) {
    $model->history[$index20]->order->delivery->data->packages[$index71]->weight = (float) $jsonData['history'][$index20]['order']['delivery']['data']['packages'][$index71]['weight'];

}
if (isset($jsonData['history'][$index20]['order']['delivery']['data']['packages'][$index71]['length'])) {
    $model->history[$index20]->order->delivery->data->packages[$index71]->length = $jsonData['history'][$index20]['order']['delivery']['data']['packages'][$index71]['length'];

}
if (isset($jsonData['history'][$index20]['order']['delivery']['data']['packages'][$index71]['width'])) {
    $model->history[$index20]->order->delivery->data->packages[$index71]->width = $jsonData['history'][$index20]['order']['delivery']['data']['packages'][$index71]['width'];

}
if (isset($jsonData['history'][$index20]['order']['delivery']['data']['packages'][$index71]['height'])) {
    $model->history[$index20]->order->delivery->data->packages[$index71]->height = $jsonData['history'][$index20]['order']['delivery']['data']['packages'][$index71]['height'];

}
if (isset($jsonData['history'][$index20]['order']['delivery']['data']['packages'][$index71]['items'])) {
    $model->history[$index20]->order->delivery->data->packages[$index71]->items = [];
foreach (array_keys($jsonData['history'][$index20]['order']['delivery']['data']['packages'][$index71]['items']) as $index90) {
    
$model->history[$index20]->order->delivery->data->packages[$index71]->items[$index90] = new RetailCrm\Api\Model\Entity\Order\Delivery\PackageItem();
if (isset($jsonData['history'][$index20]['order']['delivery']['data']['packages'][$index71]['items'][$index90]['orderProduct'])) {
    
$model->history[$index20]->order->delivery->data->packages[$index71]->items[$index90]->orderProduct = new RetailCrm\Api\Model\Entity\Order\Delivery\PackageItemOrderProduct();
if (isset($jsonData['history'][$index20]['order']['delivery']['data']['packages'][$index71]['items'][$index90]['orderProduct']['id'])) {
    $model->history[$index20]->order->delivery->data->packages[$index71]->items[$index90]->orderProduct->id = $jsonData['history'][$index20]['order']['delivery']['data']['packages'][$index71]['items'][$index90]['orderProduct']['id'];

}
if (isset($jsonData['history'][$index20]['order']['delivery']['data']['packages'][$index71]['items'][$index90]['orderProduct']['externalId'])) {
    $model->history[$index20]->order->delivery->data->packages[$index71]->items[$index90]->orderProduct->externalId = $jsonData['history'][$index20]['order']['delivery']['data']['packages'][$index71]['items'][$index90]['orderProduct']['externalId'];

}
if (isset($jsonData['history'][$index20]['order']['delivery']['data']['packages'][$index71]['items'][$index90]['orderProduct']['externalIds'])) {
    $model->history[$index20]->order->delivery->data->packages[$index71]->items[$index90]->orderProduct->externalIds = [];
foreach (array_keys($jsonData['history'][$index20]['order']['delivery']['data']['packages'][$index71]['items'][$index90]['orderProduct']['externalIds']) as $index131) {
    
$model->history[$index20]->order->delivery->data->packages[$index71]->items[$index90]->orderProduct->externalIds[$index131] = new RetailCrm\Api\Model\Entity\CodeValueModel();
if (isset($jsonData['history'][$index20]['order']['delivery']['data']['packages'][$index71]['items'][$index90]['orderProduct']['externalIds'][$index131]['code'])) {
    $model->history[$index20]->order->delivery->data->packages[$index71]->items[$index90]->orderProduct->externalIds[$index131]->code = $jsonData['history'][$index20]['order']['delivery']['data']['packages'][$index71]['items'][$index90]['orderProduct']['externalIds'][$index131]['code'];

}
if (isset($jsonData['history'][$index20]['order']['delivery']['data']['packages'][$index71]['items'][$index90]['orderProduct']['externalIds'][$index131]['value'])) {
    $model->history[$index20]->order->delivery->data->packages[$index71]->items[$index90]->orderProduct->externalIds[$index131]->value = $jsonData['history'][$index20]['order']['delivery']['data']['packages'][$index71]['items'][$index90]['orderProduct']['externalIds'][$index131]['value'];

}


}

}


}
if (isset($jsonData['history'][$index20]['order']['delivery']['data']['packages'][$index71]['items'][$index90]['quantity'])) {
    $model->history[$index20]->order->delivery->data->packages[$index71]->items[$index90]->quantity = (float) $jsonData['history'][$index20]['order']['delivery']['data']['packages'][$index71]['items'][$index90]['quantity'];

}


}

}


}

}
if (isset($jsonData['history'][$index20]['order']['delivery']['data']['returnExternalId'])) {
    $model->history[$index20]->order->delivery->data->returnExternalId = $jsonData['history'][$index20]['order']['delivery']['data']['returnExternalId'];

}
if (isset($jsonData['history'][$index20]['order']['delivery']['data']['deliveryName'])) {
    $model->history[$index20]->order->delivery->data->deliveryName = $jsonData['history'][$index20]['order']['delivery']['data']['deliveryName'];

}
if (isset($jsonData['history'][$index20]['order']['delivery']['data']['price'])) {
    $model->history[$index20]->order->delivery->data->price = (float) $jsonData['history'][$index20]['order']['delivery']['data']['price'];

}
if (isset($jsonData['history'][$index20]['order']['delivery']['data']['insurancePrice'])) {
    $model->history[$index20]->order->delivery->data->insurancePrice = (float) $jsonData['history'][$index20]['order']['delivery']['data']['insurancePrice'];

}
if (isset($jsonData['history'][$index20]['order']['delivery']['data']['tariffType'])) {
    $model->history[$index20]->order->delivery->data->tariffType = $jsonData['history'][$index20]['order']['delivery']['data']['tariffType'];

}
if (isset($jsonData['history'][$index20]['order']['delivery']['data']['receiverCity'])) {
    $model->history[$index20]->order->delivery->data->receiverCity = $jsonData['history'][$index20]['order']['delivery']['data']['receiverCity'];

}
if (isset($jsonData['history'][$index20]['order']['delivery']['data']['services'])) {
    $model->history[$index20]->order->delivery->data->services = [];
foreach (array_keys($jsonData['history'][$index20]['order']['delivery']['data']['services']) as $index71) {
    $model->history[$index20]->order->delivery->data->services[$index71] = $jsonData['history'][$index20]['order']['delivery']['data']['services'][$index71];

}

}
if (isset($jsonData['history'][$index20]['order']['delivery']['data']['packageNumber'])) {
    $model->history[$index20]->order->delivery->data->packageNumber = $jsonData['history'][$index20]['order']['delivery']['data']['packageNumber'];

}
if (isset($jsonData['history'][$index20]['order']['delivery']['data']['comment'])) {
    $model->history[$index20]->order->delivery->data->comment = $jsonData['history'][$index20]['order']['delivery']['data']['comment'];

}
if (isset($jsonData['history'][$index20]['order']['delivery']['data']['deliveryCode'])) {
    $model->history[$index20]->order->delivery->data->deliveryCode = $jsonData['history'][$index20]['order']['delivery']['data']['deliveryCode'];

}
if (isset($jsonData['history'][$index20]['order']['delivery']['data']['notes'])) {
    $model->history[$index20]->order->delivery->data->notes = $jsonData['history'][$index20]['order']['delivery']['data']['notes'];

}
if (isset($jsonData['history'][$index20]['order']['delivery']['data']['id'])) {
    $model->history[$index20]->order->delivery->data->id = $jsonData['history'][$index20]['order']['delivery']['data']['id'];

}
if (isset($jsonData['history'][$index20]['order']['delivery']['data']['firstName'])) {
    $model->history[$index20]->order->delivery->data->firstName = $jsonData['history'][$index20]['order']['delivery']['data']['firstName'];

}
if (isset($jsonData['history'][$index20]['order']['delivery']['data']['lastName'])) {
    $model->history[$index20]->order->delivery->data->lastName = $jsonData['history'][$index20]['order']['delivery']['data']['lastName'];

}
if (isset($jsonData['history'][$index20]['order']['delivery']['data']['patronymic'])) {
    $model->history[$index20]->order->delivery->data->patronymic = $jsonData['history'][$index20]['order']['delivery']['data']['patronymic'];

}
if (isset($jsonData['history'][$index20]['order']['delivery']['data']['active'])) {
    $model->history[$index20]->order->delivery->data->active = $jsonData['history'][$index20]['order']['delivery']['data']['active'];

}
if (isset($jsonData['history'][$index20]['order']['delivery']['data']['email'])) {
    $model->history[$index20]->order->delivery->data->email = $jsonData['history'][$index20]['order']['delivery']['data']['email'];

}
if (isset($jsonData['history'][$index20]['order']['delivery']['data']['phone'])) {
    
$model->history[$index20]->order->delivery->data->phone = new RetailCrm\Api\Model\Entity\Order\Delivery\CourierPhone();
if (isset($jsonData['history'][$index20]['order']['delivery']['data']['phone']['number'])) {
    $model->history[$index20]->order->delivery->data->phone->number = $jsonData['history'][$index20]['order']['delivery']['data']['phone']['number'];

}


}
if (isset($jsonData['history'][$index20]['order']['delivery']['data']['description'])) {
    $model->history[$index20]->order->delivery->data->description = $jsonData['history'][$index20]['order']['delivery']['data']['description'];

}
if (isset($jsonData['history'][$index20]['order']['delivery']['data']['courierId'])) {
    $model->history[$index20]->order->delivery->data->courierId = $jsonData['history'][$index20]['order']['delivery']['data']['courierId'];

}
if (isset($jsonData['history'][$index20]['order']['delivery']['data']['serviceType'])) {
    $model->history[$index20]->order->delivery->data->serviceType = $jsonData['history'][$index20]['order']['delivery']['data']['serviceType'];

}
if (isset($jsonData['history'][$index20]['order']['delivery']['data']['pickuppoint'])) {
    $model->history[$index20]->order->delivery->data->pickuppoint = $jsonData['history'][$index20]['order']['delivery']['data']['pickuppoint'];

}
if (isset($jsonData['history'][$index20]['order']['delivery']['data']['receiverWarehouseTypeRef'])) {
    $model->history[$index20]->order->delivery->data->receiverWarehouseTypeRef = $jsonData['history'][$index20]['order']['delivery']['data']['receiverWarehouseTypeRef'];

}
if (isset($jsonData['history'][$index20]['order']['delivery']['data']['statusName'])) {
    $model->history[$index20]->order->delivery->data->statusName = $jsonData['history'][$index20]['order']['delivery']['data']['statusName'];

}
if (isset($jsonData['history'][$index20]['order']['delivery']['data']['receiverCityRef'])) {
    $model->history[$index20]->order->delivery->data->receiverCityRef = $jsonData['history'][$index20]['order']['delivery']['data']['receiverCityRef'];

}
if (isset($jsonData['history'][$index20]['order']['delivery']['data']['receiverStreet'])) {
    $model->history[$index20]->order->delivery->data->receiverStreet = $jsonData['history'][$index20]['order']['delivery']['data']['receiverStreet'];

}
if (isset($jsonData['history'][$index20]['order']['delivery']['data']['receiverStreetRef'])) {
    $model->history[$index20]->order->delivery->data->receiverStreetRef = $jsonData['history'][$index20]['order']['delivery']['data']['receiverStreetRef'];

}
if (isset($jsonData['history'][$index20]['order']['delivery']['data']['seatsAmount'])) {
    $model->history[$index20]->order->delivery->data->seatsAmount = $jsonData['history'][$index20]['order']['delivery']['data']['seatsAmount'];

}
if (isset($jsonData['history'][$index20]['order']['delivery']['data']['cargoType'])) {
    $model->history[$index20]->order->delivery->data->cargoType = $jsonData['history'][$index20]['order']['delivery']['data']['cargoType'];

}
if (isset($jsonData['history'][$index20]['order']['delivery']['data']['cargoDescription'])) {
    $model->history[$index20]->order->delivery->data->cargoDescription = $jsonData['history'][$index20]['order']['delivery']['data']['cargoDescription'];

}
if (isset($jsonData['history'][$index20]['order']['delivery']['data']['cashPayerType'])) {
    $model->history[$index20]->order->delivery->data->cashPayerType = $jsonData['history'][$index20]['order']['delivery']['data']['cashPayerType'];

}
if (isset($jsonData['history'][$index20]['order']['delivery']['data']['paymentForm'])) {
    $model->history[$index20]->order->delivery->data->paymentForm = $jsonData['history'][$index20]['order']['delivery']['data']['paymentForm'];

}
if (isset($jsonData['history'][$index20]['order']['delivery']['data']['ownershipForm'])) {
    $model->history[$index20]->order->delivery->data->ownershipForm = $jsonData['history'][$index20]['order']['delivery']['data']['ownershipForm'];

}
if (isset($jsonData['history'][$index20]['order']['delivery']['data']['accompanyingDocument'])) {
    $model->history[$index20]->order->delivery->data->accompanyingDocument = $jsonData['history'][$index20]['order']['delivery']['data']['accompanyingDocument'];

}
if (isset($jsonData['history'][$index20]['order']['delivery']['data']['preferredDeliveryDate'])) {
    $model->history[$index20]->order->delivery->data->preferredDeliveryDate = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['history'][$index20]['order']['delivery']['data']['preferredDeliveryDate']);

}
if (isset($jsonData['history'][$index20]['order']['delivery']['data']['timeInterval'])) {
    $model->history[$index20]->order->delivery->data->timeInterval = $jsonData['history'][$index20]['order']['delivery']['data']['timeInterval'];

}
if (isset($jsonData['history'][$index20]['order']['delivery']['data']['saturdayDelivery'])) {
    $model->history[$index20]->order->delivery->data->saturdayDelivery = $jsonData['history'][$index20]['order']['delivery']['data']['saturdayDelivery'];

}
if (isset($jsonData['history'][$index20]['order']['delivery']['data']['deliveryDate'])) {
    $model->history[$index20]->order->delivery->data->deliveryDate = $jsonData['history'][$index20]['order']['delivery']['data']['deliveryDate'];

}
if (isset($jsonData['history'][$index20]['order']['delivery']['data']['denieReason'])) {
    $model->history[$index20]->order->delivery->data->denieReason = $jsonData['history'][$index20]['order']['delivery']['data']['denieReason'];

}
if (isset($jsonData['history'][$index20]['order']['delivery']['data']['backwardDelivery'])) {
    $model->history[$index20]->order->delivery->data->backwardDelivery = $jsonData['history'][$index20]['order']['delivery']['data']['backwardDelivery'];

}
if (isset($jsonData['history'][$index20]['order']['delivery']['data']['backwardDeliveryCargoType'])) {
    $model->history[$index20]->order->delivery->data->backwardDeliveryCargoType = $jsonData['history'][$index20]['order']['delivery']['data']['backwardDeliveryCargoType'];

}
if (isset($jsonData['history'][$index20]['order']['delivery']['data']['backwardDeliveryPayerType'])) {
    $model->history[$index20]->order->delivery->data->backwardDeliveryPayerType = $jsonData['history'][$index20]['order']['delivery']['data']['backwardDeliveryPayerType'];

}
if (isset($jsonData['history'][$index20]['order']['delivery']['data']['backwardDeliveryRedeliveryString'])) {
    $model->history[$index20]->order->delivery->data->backwardDeliveryRedeliveryString = $jsonData['history'][$index20]['order']['delivery']['data']['backwardDeliveryRedeliveryString'];

}
if (isset($jsonData['history'][$index20]['order']['delivery']['data']['afterpaymentOnGoodsCost'])) {
    $model->history[$index20]->order->delivery->data->afterpaymentOnGoodsCost = (float) $jsonData['history'][$index20]['order']['delivery']['data']['afterpaymentOnGoodsCost'];

}
if (isset($jsonData['history'][$index20]['order']['delivery']['data']['declaredValue'])) {
    $model->history[$index20]->order->delivery->data->declaredValue = (float) $jsonData['history'][$index20]['order']['delivery']['data']['declaredValue'];

}
if (isset($jsonData['history'][$index20]['order']['delivery']['data']['sendDate'])) {
    $model->history[$index20]->order->delivery->data->sendDate = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['history'][$index20]['order']['delivery']['data']['sendDate']);

}
if (isset($jsonData['history'][$index20]['order']['delivery']['data']['deliveryType'])) {
    $model->history[$index20]->order->delivery->data->deliveryType = $jsonData['history'][$index20]['order']['delivery']['data']['deliveryType'];

}
if (isset($jsonData['history'][$index20]['order']['delivery']['data']['pickupType'])) {
    $model->history[$index20]->order->delivery->data->pickupType = $jsonData['history'][$index20]['order']['delivery']['data']['pickupType'];

}
if (isset($jsonData['history'][$index20]['order']['delivery']['data']['pickuppointDescription'])) {
    $model->history[$index20]->order->delivery->data->pickuppointDescription = $jsonData['history'][$index20]['order']['delivery']['data']['pickuppointDescription'];

}
if (isset($jsonData['history'][$index20]['order']['delivery']['data']['placesCount'])) {
    $model->history[$index20]->order->delivery->data->placesCount = $jsonData['history'][$index20]['order']['delivery']['data']['placesCount'];

}
if (isset($jsonData['history'][$index20]['order']['delivery']['data']['service'])) {
    $model->history[$index20]->order->delivery->data->service = $jsonData['history'][$index20]['order']['delivery']['data']['service'];

}


}
if (isset($jsonData['history'][$index20]['order']['delivery']['service'])) {
    
$model->history[$index20]->order->delivery->service = new RetailCrm\Api\Model\Entity\Order\Delivery\SerializedDeliveryService();
if (isset($jsonData['history'][$index20]['order']['delivery']['service']['name'])) {
    $model->history[$index20]->order->delivery->service->name = $jsonData['history'][$index20]['order']['delivery']['service']['name'];

}
if (isset($jsonData['history'][$index20]['order']['delivery']['service']['code'])) {
    $model->history[$index20]->order->delivery->service->code = $jsonData['history'][$index20]['order']['delivery']['service']['code'];

}
if (isset($jsonData['history'][$index20]['order']['delivery']['service']['active'])) {
    $model->history[$index20]->order->delivery->service->active = $jsonData['history'][$index20]['order']['delivery']['service']['active'];

}


}
if (isset($jsonData['history'][$index20]['order']['delivery']['cost'])) {
    $model->history[$index20]->order->delivery->cost = (float) $jsonData['history'][$index20]['order']['delivery']['cost'];

}
if (isset($jsonData['history'][$index20]['order']['delivery']['netCost'])) {
    $model->history[$index20]->order->delivery->netCost = (float) $jsonData['history'][$index20]['order']['delivery']['netCost'];

}
if (isset($jsonData['history'][$index20]['order']['delivery']['date'])) {
    $model->history[$index20]->order->delivery->date = \DateTime::createFromFormat('Y-m-d', $jsonData['history'][$index20]['order']['delivery']['date']);

}
if (isset($jsonData['history'][$index20]['order']['delivery']['time'])) {
    
$model->history[$index20]->order->delivery->time = new RetailCrm\Api\Model\Entity\Delivery\TimeInterval();
if (isset($jsonData['history'][$index20]['order']['delivery']['time']['from'])) {
    $model->history[$index20]->order->delivery->time->from = \DateTime::createFromFormat('H:i', $jsonData['history'][$index20]['order']['delivery']['time']['from']);

}
if (isset($jsonData['history'][$index20]['order']['delivery']['time']['to'])) {
    $model->history[$index20]->order->delivery->time->to = \DateTime::createFromFormat('H:i', $jsonData['history'][$index20]['order']['delivery']['time']['to']);

}
if (isset($jsonData['history'][$index20]['order']['delivery']['time']['custom'])) {
    $model->history[$index20]->order->delivery->time->custom = $jsonData['history'][$index20]['order']['delivery']['time']['custom'];

}


}
if (isset($jsonData['history'][$index20]['order']['delivery']['address'])) {
    
$model->history[$index20]->order->delivery->address = new RetailCrm\Api\Model\Entity\Order\Delivery\OrderDeliveryAddress();
if (isset($jsonData['history'][$index20]['order']['delivery']['address']['id'])) {
    $model->history[$index20]->order->delivery->address->id = $jsonData['history'][$index20]['order']['delivery']['address']['id'];

}
if (isset($jsonData['history'][$index20]['order']['delivery']['address']['index'])) {
    $model->history[$index20]->order->delivery->address->index = $jsonData['history'][$index20]['order']['delivery']['address']['index'];

}
if (isset($jsonData['history'][$index20]['order']['delivery']['address']['countryIso'])) {
    $model->history[$index20]->order->delivery->address->countryIso = $jsonData['history'][$index20]['order']['delivery']['address']['countryIso'];

}
if (isset($jsonData['history'][$index20]['order']['delivery']['address']['region'])) {
    $model->history[$index20]->order->delivery->address->region = $jsonData['history'][$index20]['order']['delivery']['address']['region'];

}
if (isset($jsonData['history'][$index20]['order']['delivery']['address']['regionId'])) {
    $model->history[$index20]->order->delivery->address->regionId = $jsonData['history'][$index20]['order']['delivery']['address']['regionId'];

}
if (isset($jsonData['history'][$index20]['order']['delivery']['address']['city'])) {
    $model->history[$index20]->order->delivery->address->city = $jsonData['history'][$index20]['order']['delivery']['address']['city'];

}
if (isset($jsonData['history'][$index20]['order']['delivery']['address']['cityId'])) {
    $model->history[$index20]->order->delivery->address->cityId = $jsonData['history'][$index20]['order']['delivery']['address']['cityId'];

}
if (isset($jsonData['history'][$index20]['order']['delivery']['address']['cityType'])) {
    $model->history[$index20]->order->delivery->address->cityType = $jsonData['history'][$index20]['order']['delivery']['address']['cityType'];

}
if (isset($jsonData['history'][$index20]['order']['delivery']['address']['street'])) {
    $model->history[$index20]->order->delivery->address->street = $jsonData['history'][$index20]['order']['delivery']['address']['street'];

}
if (isset($jsonData['history'][$index20]['order']['delivery']['address']['streetId'])) {
    $model->history[$index20]->order->delivery->address->streetId = $jsonData['history'][$index20]['order']['delivery']['address']['streetId'];

}
if (isset($jsonData['history'][$index20]['order']['delivery']['address']['streetType'])) {
    $model->history[$index20]->order->delivery->address->streetType = $jsonData['history'][$index20]['order']['delivery']['address']['streetType'];

}
if (isset($jsonData['history'][$index20]['order']['delivery']['address']['building'])) {
    $model->history[$index20]->order->delivery->address->building = $jsonData['history'][$index20]['order']['delivery']['address']['building'];

}
if (isset($jsonData['history'][$index20]['order']['delivery']['address']['flat'])) {
    $model->history[$index20]->order->delivery->address->flat = $jsonData['history'][$index20]['order']['delivery']['address']['flat'];

}
if (isset($jsonData['history'][$index20]['order']['delivery']['address']['floor'])) {
    $model->history[$index20]->order->delivery->address->floor = $jsonData['history'][$index20]['order']['delivery']['address']['floor'];

}
if (isset($jsonData['history'][$index20]['order']['delivery']['address']['block'])) {
    $model->history[$index20]->order->delivery->address->block = $jsonData['history'][$index20]['order']['delivery']['address']['block'];

}
if (isset($jsonData['history'][$index20]['order']['delivery']['address']['house'])) {
    $model->history[$index20]->order->delivery->address->house = $jsonData['history'][$index20]['order']['delivery']['address']['house'];

}
if (isset($jsonData['history'][$index20]['order']['delivery']['address']['housing'])) {
    $model->history[$index20]->order->delivery->address->housing = $jsonData['history'][$index20]['order']['delivery']['address']['housing'];

}
if (isset($jsonData['history'][$index20]['order']['delivery']['address']['metro'])) {
    $model->history[$index20]->order->delivery->address->metro = $jsonData['history'][$index20]['order']['delivery']['address']['metro'];

}
if (isset($jsonData['history'][$index20]['order']['delivery']['address']['text'])) {
    $model->history[$index20]->order->delivery->address->text = $jsonData['history'][$index20]['order']['delivery']['address']['text'];

}


}
if (isset($jsonData['history'][$index20]['order']['delivery']['vatRate'])) {
    $model->history[$index20]->order->delivery->vatRate = $jsonData['history'][$index20]['order']['delivery']['vatRate'];

}


}
if (isset($jsonData['history'][$index20]['order']['marketplace'])) {
    
$model->history[$index20]->order->marketplace = new RetailCrm\Api\Model\Entity\Order\MarketplaceData();
if (isset($jsonData['history'][$index20]['order']['marketplace']['code'])) {
    $model->history[$index20]->order->marketplace->code = $jsonData['history'][$index20]['order']['marketplace']['code'];

}
if (isset($jsonData['history'][$index20]['order']['marketplace']['orderId'])) {
    $model->history[$index20]->order->marketplace->orderId = $jsonData['history'][$index20]['order']['marketplace']['orderId'];

}


}
if (isset($jsonData['history'][$index20]['order']['site'])) {
    $model->history[$index20]->order->site = $jsonData['history'][$index20]['order']['site'];

}
if (isset($jsonData['history'][$index20]['order']['status'])) {
    $model->history[$index20]->order->status = $jsonData['history'][$index20]['order']['status'];

}
if (isset($jsonData['history'][$index20]['order']['statusComment'])) {
    $model->history[$index20]->order->statusComment = $jsonData['history'][$index20]['order']['statusComment'];

}
if (isset($jsonData['history'][$index20]['order']['source'])) {
    
$model->history[$index20]->order->source = new RetailCrm\Api\Model\Entity\Source();
if (isset($jsonData['history'][$index20]['order']['source']['source'])) {
    $model->history[$index20]->order->source->source = $jsonData['history'][$index20]['order']['source']['source'];

}
if (isset($jsonData['history'][$index20]['order']['source']['medium'])) {
    $model->history[$index20]->order->source->medium = $jsonData['history'][$index20]['order']['source']['medium'];

}
if (isset($jsonData['history'][$index20]['order']['source']['campaign'])) {
    $model->history[$index20]->order->source->campaign = $jsonData['history'][$index20]['order']['source']['campaign'];

}
if (isset($jsonData['history'][$index20]['order']['source']['keyword'])) {
    $model->history[$index20]->order->source->keyword = $jsonData['history'][$index20]['order']['source']['keyword'];

}
if (isset($jsonData['history'][$index20]['order']['source']['content'])) {
    $model->history[$index20]->order->source->content = $jsonData['history'][$index20]['order']['source']['content'];

}


}
if (isset($jsonData['history'][$index20]['order']['items'])) {
    $model->history[$index20]->order->items = [];
foreach (array_keys($jsonData['history'][$index20]['order']['items']) as $index48) {
    
$model->history[$index20]->order->items[$index48] = new RetailCrm\Api\Model\Entity\Order\Items\OrderProduct();
if (isset($jsonData['history'][$index20]['order']['items'][$index48]['externalId'])) {
    $model->history[$index20]->order->items[$index48]->externalId = $jsonData['history'][$index20]['order']['items'][$index48]['externalId'];

}
if (isset($jsonData['history'][$index20]['order']['items'][$index48]['markingCodes'])) {
    $model->history[$index20]->order->items[$index48]->markingCodes = [];
foreach (array_keys($jsonData['history'][$index20]['order']['items'][$index48]['markingCodes']) as $index74) {
    $model->history[$index20]->order->items[$index48]->markingCodes[$index74] = $jsonData['history'][$index20]['order']['items'][$index48]['markingCodes'][$index74];

}

}
if (isset($jsonData['history'][$index20]['order']['items'][$index48]['id'])) {
    $model->history[$index20]->order->items[$index48]->id = $jsonData['history'][$index20]['order']['items'][$index48]['id'];

}
if (isset($jsonData['history'][$index20]['order']['items'][$index48]['externalIds'])) {
    $model->history[$index20]->order->items[$index48]->externalIds = [];
foreach (array_keys($jsonData['history'][$index20]['order']['items'][$index48]['externalIds']) as $index73) {
    
$model->history[$index20]->order->items[$index48]->externalIds[$index73] = new RetailCrm\Api\Model\Entity\CodeValueModel();
if (isset($jsonData['history'][$index20]['order']['items'][$index48]['externalIds'][$index73]['code'])) {
    $model->history[$index20]->order->items[$index48]->externalIds[$index73]->code = $jsonData['history'][$index20]['order']['items'][$index48]['externalIds'][$index73]['code'];

}
if (isset($jsonData['history'][$index20]['order']['items'][$index48]['externalIds'][$index73]['value'])) {
    $model->history[$index20]->order->items[$index48]->externalIds[$index73]->value = $jsonData['history'][$index20]['order']['items'][$index48]['externalIds'][$index73]['value'];

}


}

}
if (isset($jsonData['history'][$index20]['order']['items'][$index48]['priceType'])) {
    
$model->history[$index20]->order->items[$index48]->priceType = new RetailCrm\Api\Model\Entity\Order\Items\PriceType();
if (isset($jsonData['history'][$index20]['order']['items'][$index48]['priceType']['code'])) {
    $model->history[$index20]->order->items[$index48]->priceType->code = $jsonData['history'][$index20]['order']['items'][$index48]['priceType']['code'];

}


}
if (isset($jsonData['history'][$index20]['order']['items'][$index48]['initialPrice'])) {
    $model->history[$index20]->order->items[$index48]->initialPrice = (float) $jsonData['history'][$index20]['order']['items'][$index48]['initialPrice'];

}
if (isset($jsonData['history'][$index20]['order']['items'][$index48]['discountManualAmount'])) {
    $model->history[$index20]->order->items[$index48]->discountManualAmount = (float) $jsonData['history'][$index20]['order']['items'][$index48]['discountManualAmount'];

}
if (isset($jsonData['history'][$index20]['order']['items'][$index48]['discountManualPercent'])) {
    $model->history[$index20]->order->items[$index48]->discountManualPercent = (float) $jsonData['history'][$index20]['order']['items'][$index48]['discountManualPercent'];

}
if (isset($jsonData['history'][$index20]['order']['items'][$index48]['discountTotal'])) {
    $model->history[$index20]->order->items[$index48]->discountTotal = (float) $jsonData['history'][$index20]['order']['items'][$index48]['discountTotal'];

}
if (isset($jsonData['history'][$index20]['order']['items'][$index48]['prices'])) {
    $model->history[$index20]->order->items[$index48]->prices = [];
foreach (array_keys($jsonData['history'][$index20]['order']['items'][$index48]['prices']) as $index68) {
    
$model->history[$index20]->order->items[$index48]->prices[$index68] = new RetailCrm\Api\Model\Entity\Order\Items\OrderProductPriceItem();
if (isset($jsonData['history'][$index20]['order']['items'][$index48]['prices'][$index68]['price'])) {
    $model->history[$index20]->order->items[$index48]->prices[$index68]->price = (float) $jsonData['history'][$index20]['order']['items'][$index48]['prices'][$index68]['price'];

}
if (isset($jsonData['history'][$index20]['order']['items'][$index48]['prices'][$index68]['quantity'])) {
    $model->history[$index20]->order->items[$index48]->prices[$index68]->quantity = (float) $jsonData['history'][$index20]['order']['items'][$index48]['prices'][$index68]['quantity'];

}


}

}
if (isset($jsonData['history'][$index20]['order']['items'][$index48]['vatRate'])) {
    $model->history[$index20]->order->items[$index48]->vatRate = $jsonData['history'][$index20]['order']['items'][$index48]['vatRate'];

}
if (isset($jsonData['history'][$index20]['order']['items'][$index48]['createdAt'])) {
    $model->history[$index20]->order->items[$index48]->createdAt = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['history'][$index20]['order']['items'][$index48]['createdAt']);

}
if (isset($jsonData['history'][$index20]['order']['items'][$index48]['quantity'])) {
    $model->history[$index20]->order->items[$index48]->quantity = (float) $jsonData['history'][$index20]['order']['items'][$index48]['quantity'];

}
if (isset($jsonData['history'][$index20]['order']['items'][$index48]['status'])) {
    $model->history[$index20]->order->items[$index48]->status = $jsonData['history'][$index20]['order']['items'][$index48]['status'];

}
if (isset($jsonData['history'][$index20]['order']['items'][$index48]['comment'])) {
    $model->history[$index20]->order->items[$index48]->comment = $jsonData['history'][$index20]['order']['items'][$index48]['comment'];

}
if (isset($jsonData['history'][$index20]['order']['items'][$index48]['offer'])) {
    
$model->history[$index20]->order->items[$index48]->offer = new RetailCrm\Api\Model\Entity\Order\Items\Offer();
if (isset($jsonData['history'][$index20]['order']['items'][$index48]['offer']['displayName'])) {
    $model->history[$index20]->order->items[$index48]->offer->displayName = $jsonData['history'][$index20]['order']['items'][$index48]['offer']['displayName'];

}
if (isset($jsonData['history'][$index20]['order']['items'][$index48]['offer']['id'])) {
    $model->history[$index20]->order->items[$index48]->offer->id = $jsonData['history'][$index20]['order']['items'][$index48]['offer']['id'];

}
if (isset($jsonData['history'][$index20]['order']['items'][$index48]['offer']['externalId'])) {
    $model->history[$index20]->order->items[$index48]->offer->externalId = $jsonData['history'][$index20]['order']['items'][$index48]['offer']['externalId'];

}
if (isset($jsonData['history'][$index20]['order']['items'][$index48]['offer']['xmlId'])) {
    $model->history[$index20]->order->items[$index48]->offer->xmlId = $jsonData['history'][$index20]['order']['items'][$index48]['offer']['xmlId'];

}
if (isset($jsonData['history'][$index20]['order']['items'][$index48]['offer']['name'])) {
    $model->history[$index20]->order->items[$index48]->offer->name = $jsonData['history'][$index20]['order']['items'][$index48]['offer']['name'];

}
if (isset($jsonData['history'][$index20]['order']['items'][$index48]['offer']['article'])) {
    $model->history[$index20]->order->items[$index48]->offer->article = $jsonData['history'][$index20]['order']['items'][$index48]['offer']['article'];

}
if (isset($jsonData['history'][$index20]['order']['items'][$index48]['offer']['vatRate'])) {
    $model->history[$index20]->order->items[$index48]->offer->vatRate = $jsonData['history'][$index20]['order']['items'][$index48]['offer']['vatRate'];

}
if (isset($jsonData['history'][$index20]['order']['items'][$index48]['offer']['unit'])) {
    
$model->history[$index20]->order->items[$index48]->offer->unit = new RetailCrm\Api\Model\Entity\Order\Items\Unit();
if (isset($jsonData['history'][$index20]['order']['items'][$index48]['offer']['unit']['code'])) {
    $model->history[$index20]->order->items[$index48]->offer->unit->code = $jsonData['history'][$index20]['order']['items'][$index48]['offer']['unit']['code'];

}
if (isset($jsonData['history'][$index20]['order']['items'][$index48]['offer']['unit']['name'])) {
    $model->history[$index20]->order->items[$index48]->offer->unit->name = $jsonData['history'][$index20]['order']['items'][$index48]['offer']['unit']['name'];

}
if (isset($jsonData['history'][$index20]['order']['items'][$index48]['offer']['unit']['sym'])) {
    $model->history[$index20]->order->items[$index48]->offer->unit->sym = $jsonData['history'][$index20]['order']['items'][$index48]['offer']['unit']['sym'];

}


}
if (isset($jsonData['history'][$index20]['order']['items'][$index48]['offer']['barcode'])) {
    $model->history[$index20]->order->items[$index48]->offer->barcode = $jsonData['history'][$index20]['order']['items'][$index48]['offer']['barcode'];

}
if (isset($jsonData['history'][$index20]['order']['items'][$index48]['offer']['properties'])) {
    $model->history[$index20]->order->items[$index48]->offer->properties = [];
foreach (array_keys($jsonData['history'][$index20]['order']['items'][$index48]['offer']['properties']) as $index81) {
    $model->history[$index20]->order->items[$index48]->offer->properties[$index81] = $jsonData['history'][$index20]['order']['items'][$index48]['offer']['properties'][$index81];

}

}


}
if (isset($jsonData['history'][$index20]['order']['items'][$index48]['productName'])) {
    $model->history[$index20]->order->items[$index48]->productName = $jsonData['history'][$index20]['order']['items'][$index48]['productName'];

}
if (isset($jsonData['history'][$index20]['order']['items'][$index48]['isCanceled'])) {
    $model->history[$index20]->order->items[$index48]->isCanceled = $jsonData['history'][$index20]['order']['items'][$index48]['isCanceled'];

}
if (isset($jsonData['history'][$index20]['order']['items'][$index48]['properties'])) {
    $model->history[$index20]->order->items[$index48]->properties = [];
foreach (array_keys($jsonData['history'][$index20]['order']['items'][$index48]['properties']) as $index72) {
    
$model->history[$index20]->order->items[$index48]->properties[$index72] = new RetailCrm\Api\Model\Entity\Order\Items\ItemProperty();
if (isset($jsonData['history'][$index20]['order']['items'][$index48]['properties'][$index72]['code'])) {
    $model->history[$index20]->order->items[$index48]->properties[$index72]->code = $jsonData['history'][$index20]['order']['items'][$index48]['properties'][$index72]['code'];

}
if (isset($jsonData['history'][$index20]['order']['items'][$index48]['properties'][$index72]['name'])) {
    $model->history[$index20]->order->items[$index48]->properties[$index72]->name = $jsonData['history'][$index20]['order']['items'][$index48]['properties'][$index72]['name'];

}
if (isset($jsonData['history'][$index20]['order']['items'][$index48]['properties'][$index72]['value'])) {
    $model->history[$index20]->order->items[$index48]->properties[$index72]->value = $jsonData['history'][$index20]['order']['items'][$index48]['properties'][$index72]['value'];

}


}

}
if (isset($jsonData['history'][$index20]['order']['items'][$index48]['purchasePrice'])) {
    $model->history[$index20]->order->items[$index48]->purchasePrice = (float) $jsonData['history'][$index20]['order']['items'][$index48]['purchasePrice'];

}


}

}
if (isset($jsonData['history'][$index20]['order']['fullPaidAt'])) {
    $model->history[$index20]->order->fullPaidAt = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['history'][$index20]['order']['fullPaidAt']);

}
if (isset($jsonData['history'][$index20]['order']['payments'])) {
    $model->history[$index20]->order->payments = [];
foreach (array_keys($jsonData['history'][$index20]['order']['payments']) as $index51) {
    
$model->history[$index20]->order->payments[$index51] = new RetailCrm\Api\Model\Entity\Order\Payment();
if (isset($jsonData['history'][$index20]['order']['payments'][$index51]['id'])) {
    $model->history[$index20]->order->payments[$index51]->id = $jsonData['history'][$index20]['order']['payments'][$index51]['id'];

}
if (isset($jsonData['history'][$index20]['order']['payments'][$index51]['status'])) {
    $model->history[$index20]->order->payments[$index51]->status = $jsonData['history'][$index20]['order']['payments'][$index51]['status'];

}
if (isset($jsonData['history'][$index20]['order']['payments'][$index51]['type'])) {
    $model->history[$index20]->order->payments[$index51]->type = $jsonData['history'][$index20]['order']['payments'][$index51]['type'];

}
if (isset($jsonData['history'][$index20]['order']['payments'][$index51]['externalId'])) {
    $model->history[$index20]->order->payments[$index51]->externalId = $jsonData['history'][$index20]['order']['payments'][$index51]['externalId'];

}
if (isset($jsonData['history'][$index20]['order']['payments'][$index51]['amount'])) {
    $model->history[$index20]->order->payments[$index51]->amount = (float) $jsonData['history'][$index20]['order']['payments'][$index51]['amount'];

}
if (isset($jsonData['history'][$index20]['order']['payments'][$index51]['paidAt'])) {
    $model->history[$index20]->order->payments[$index51]->paidAt = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['history'][$index20]['order']['payments'][$index51]['paidAt']);

}
if (isset($jsonData['history'][$index20]['order']['payments'][$index51]['comment'])) {
    $model->history[$index20]->order->payments[$index51]->comment = $jsonData['history'][$index20]['order']['payments'][$index51]['comment'];

}


}

}
if (isset($jsonData['history'][$index20]['order']['fromApi'])) {
    $model->history[$index20]->order->fromApi = $jsonData['history'][$index20]['order']['fromApi'];

}
if (isset($jsonData['history'][$index20]['order']['weight'])) {
    $model->history[$index20]->order->weight = (float) $jsonData['history'][$index20]['order']['weight'];

}
if (isset($jsonData['history'][$index20]['order']['length'])) {
    $model->history[$index20]->order->length = $jsonData['history'][$index20]['order']['length'];

}
if (isset($jsonData['history'][$index20]['order']['width'])) {
    $model->history[$index20]->order->width = $jsonData['history'][$index20]['order']['width'];

}
if (isset($jsonData['history'][$index20]['order']['height'])) {
    $model->history[$index20]->order->height = $jsonData['history'][$index20]['order']['height'];

}
if (isset($jsonData['history'][$index20]['order']['shipmentStore'])) {
    $model->history[$index20]->order->shipmentStore = $jsonData['history'][$index20]['order']['shipmentStore'];

}
if (isset($jsonData['history'][$index20]['order']['shipmentDate'])) {
    $model->history[$index20]->order->shipmentDate = \DateTime::createFromFormat('Y-m-d', $jsonData['history'][$index20]['order']['shipmentDate']);

}
if (isset($jsonData['history'][$index20]['order']['shipped'])) {
    $model->history[$index20]->order->shipped = $jsonData['history'][$index20]['order']['shipped'];

}
if (isset($jsonData['history'][$index20]['order']['dialogId'])) {
    $model->history[$index20]->order->dialogId = $jsonData['history'][$index20]['order']['dialogId'];

}
if (isset($jsonData['history'][$index20]['order']['customFields'])) {
    $model->history[$index20]->order->customFields = [];
foreach (array_keys($jsonData['history'][$index20]['order']['customFields']) as $index55) {
    $model->history[$index20]->order->customFields[$index55] = $jsonData['history'][$index20]['order']['customFields'][$index55];

}

}
if (isset($jsonData['history'][$index20]['order']['clientId'])) {
    $model->history[$index20]->order->clientId = $jsonData['history'][$index20]['order']['clientId'];

}
if (isset($jsonData['history'][$index20]['order']['loyaltyEventId'])) {
    $model->history[$index20]->order->loyaltyEventId = $jsonData['history'][$index20]['order']['loyaltyEventId'];

}


}
if (isset($jsonData['history'][$index20]['ancestor'])) {
    
$model->history[$index20]->ancestor = new RetailCrm\Api\Model\Entity\Order\Order();
if (isset($jsonData['history'][$index20]['ancestor']['bonusesCreditTotal'])) {
    $model->history[$index20]->ancestor->bonusesCreditTotal = (float) $jsonData['history'][$index20]['ancestor']['bonusesCreditTotal'];

}
if (isset($jsonData['history'][$index20]['ancestor']['bonusesChargeTotal'])) {
    $model->history[$index20]->ancestor->bonusesChargeTotal = (float) $jsonData['history'][$index20]['ancestor']['bonusesChargeTotal'];

}
if (isset($jsonData['history'][$index20]['ancestor']['summ'])) {
    $model->history[$index20]->ancestor->summ = (float) $jsonData['history'][$index20]['ancestor']['summ'];

}
if (isset($jsonData['history'][$index20]['ancestor']['id'])) {
    $model->history[$index20]->ancestor->id = $jsonData['history'][$index20]['ancestor']['id'];

}
if (isset($jsonData['history'][$index20]['ancestor']['slug'])) {
    $model->history[$index20]->ancestor->slug = $jsonData['history'][$index20]['ancestor']['slug'];

}
if (isset($jsonData['history'][$index20]['ancestor']['number'])) {
    $model->history[$index20]->ancestor->number = $jsonData['history'][$index20]['ancestor']['number'];

}
if (isset($jsonData['history'][$index20]['ancestor']['externalId'])) {
    $model->history[$index20]->ancestor->externalId = $jsonData['history'][$index20]['ancestor']['externalId'];

}
if (isset($jsonData['history'][$index20]['ancestor']['orderType'])) {
    $model->history[$index20]->ancestor->orderType = $jsonData['history'][$index20]['ancestor']['orderType'];

}
if (isset($jsonData['history'][$index20]['ancestor']['orderMethod'])) {
    $model->history[$index20]->ancestor->orderMethod = $jsonData['history'][$index20]['ancestor']['orderMethod'];

}
if (isset($jsonData['history'][$index20]['ancestor']['privilegeType'])) {
    $model->history[$index20]->ancestor->privilegeType = $jsonData['history'][$index20]['ancestor']['privilegeType'];

}
if (isset($jsonData['history'][$index20]['ancestor']['countryIso'])) {
    $model->history[$index20]->ancestor->countryIso = $jsonData['history'][$index20]['ancestor']['countryIso'];

}
if (isset($jsonData['history'][$index20]['ancestor']['createdAt'])) {
    $model->history[$index20]->ancestor->createdAt = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['history'][$index20]['ancestor']['createdAt']);

}
if (isset($jsonData['history'][$index20]['ancestor']['statusUpdatedAt'])) {
    $model->history[$index20]->ancestor->statusUpdatedAt = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['history'][$index20]['ancestor']['statusUpdatedAt']);

}
if (isset($jsonData['history'][$index20]['ancestor']['discountManualAmount'])) {
    $model->history[$index20]->ancestor->discountManualAmount = (float) $jsonData['history'][$index20]['ancestor']['discountManualAmount'];

}
if (isset($jsonData['history'][$index20]['ancestor']['discountManualPercent'])) {
    $model->history[$index20]->ancestor->discountManualPercent = (float) $jsonData['history'][$index20]['ancestor']['discountManualPercent'];

}
if (isset($jsonData['history'][$index20]['ancestor']['totalSumm'])) {
    $model->history[$index20]->ancestor->totalSumm = (float) $jsonData['history'][$index20]['ancestor']['totalSumm'];

}
if (isset($jsonData['history'][$index20]['ancestor']['prepaySum'])) {
    $model->history[$index20]->ancestor->prepaySum = (float) $jsonData['history'][$index20]['ancestor']['prepaySum'];

}
if (isset($jsonData['history'][$index20]['ancestor']['purchaseSumm'])) {
    $model->history[$index20]->ancestor->purchaseSumm = (float) $jsonData['history'][$index20]['ancestor']['purchaseSumm'];

}
if (isset($jsonData['history'][$index20]['ancestor']['personalDiscountPercent'])) {
    $model->history[$index20]->ancestor->personalDiscountPercent = (float) $jsonData['history'][$index20]['ancestor']['personalDiscountPercent'];

}
if (isset($jsonData['history'][$index20]['ancestor']['loyaltyLevel'])) {
    
$model->history[$index20]->ancestor->loyaltyLevel = new RetailCrm\Api\Model\Entity\Loyalty\LoyaltyLevel();
if (isset($jsonData['history'][$index20]['ancestor']['loyaltyLevel']['id'])) {
    $model->history[$index20]->ancestor->loyaltyLevel->id = $jsonData['history'][$index20]['ancestor']['loyaltyLevel']['id'];

}
if (isset($jsonData['history'][$index20]['ancestor']['loyaltyLevel']['name'])) {
    $model->history[$index20]->ancestor->loyaltyLevel->name = $jsonData['history'][$index20]['ancestor']['loyaltyLevel']['name'];

}


}
if (isset($jsonData['history'][$index20]['ancestor']['loyaltyEvent'])) {
    
$model->history[$index20]->ancestor->loyaltyEvent = new RetailCrm\Api\Model\Entity\Loyalty\AbstractLoyaltyEvent();
if (isset($jsonData['history'][$index20]['ancestor']['loyaltyEvent']['id'])) {
    $model->history[$index20]->ancestor->loyaltyEvent->id = $jsonData['history'][$index20]['ancestor']['loyaltyEvent']['id'];

}


}
if (isset($jsonData['history'][$index20]['ancestor']['mark'])) {
    $model->history[$index20]->ancestor->mark = $jsonData['history'][$index20]['ancestor']['mark'];

}
if (isset($jsonData['history'][$index20]['ancestor']['markDatetime'])) {
    $model->history[$index20]->ancestor->markDatetime = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['history'][$index20]['ancestor']['markDatetime']);

}
if (isset($jsonData['history'][$index20]['ancestor']['lastName'])) {
    $model->history[$index20]->ancestor->lastName = $jsonData['history'][$index20]['ancestor']['lastName'];

}
if (isset($jsonData['history'][$index20]['ancestor']['firstName'])) {
    $model->history[$index20]->ancestor->firstName = $jsonData['history'][$index20]['ancestor']['firstName'];

}
if (isset($jsonData['history'][$index20]['ancestor']['patronymic'])) {
    $model->history[$index20]->ancestor->patronymic = $jsonData['history'][$index20]['ancestor']['patronymic'];

}
if (isset($jsonData['history'][$index20]['ancestor']['phone'])) {
    $model->history[$index20]->ancestor->phone = $jsonData['history'][$index20]['ancestor']['phone'];

}
if (isset($jsonData['history'][$index20]['ancestor']['additionalPhone'])) {
    $model->history[$index20]->ancestor->additionalPhone = $jsonData['history'][$index20]['ancestor']['additionalPhone'];

}
if (isset($jsonData['history'][$index20]['ancestor']['email'])) {
    $model->history[$index20]->ancestor->email = $jsonData['history'][$index20]['ancestor']['email'];

}
if (isset($jsonData['history'][$index20]['ancestor']['call'])) {
    $model->history[$index20]->ancestor->call = $jsonData['history'][$index20]['ancestor']['call'];

}
if (isset($jsonData['history'][$index20]['ancestor']['expired'])) {
    $model->history[$index20]->ancestor->expired = $jsonData['history'][$index20]['ancestor']['expired'];

}
if (isset($jsonData['history'][$index20]['ancestor']['customerComment'])) {
    $model->history[$index20]->ancestor->customerComment = $jsonData['history'][$index20]['ancestor']['customerComment'];

}
if (isset($jsonData['history'][$index20]['ancestor']['managerComment'])) {
    $model->history[$index20]->ancestor->managerComment = $jsonData['history'][$index20]['ancestor']['managerComment'];

}
if (isset($jsonData['history'][$index20]['ancestor']['managerId'])) {
    $model->history[$index20]->ancestor->managerId = $jsonData['history'][$index20]['ancestor']['managerId'];

}
if (isset($jsonData['history'][$index20]['ancestor']['customer'])) {
    

if (
    !empty($jsonData['history'][$index20]['ancestor']['customer']['type']) &&
    \RetailCrm\Api\Enum\Customers\CustomerType::CORPORATE_CUSTOMER === $jsonData['history'][$index20]['ancestor']['customer']['type']
) {
    
$model->history[$index20]->ancestor->customer = new RetailCrm\Api\Model\Entity\Customers\Customer();
if (isset($jsonData['history'][$index20]['ancestor']['customer']['type'])) {
    $model->history[$index20]->ancestor->customer->type = $jsonData['history'][$index20]['ancestor']['customer']['type'];

}
if (isset($jsonData['history'][$index20]['ancestor']['customer']['id'])) {
    $model->history[$index20]->ancestor->customer->id = $jsonData['history'][$index20]['ancestor']['customer']['id'];

}
if (isset($jsonData['history'][$index20]['ancestor']['customer']['externalId'])) {
    $model->history[$index20]->ancestor->customer->externalId = $jsonData['history'][$index20]['ancestor']['customer']['externalId'];

}
if (isset($jsonData['history'][$index20]['ancestor']['customer']['isContact'])) {
    $model->history[$index20]->ancestor->customer->isContact = $jsonData['history'][$index20]['ancestor']['customer']['isContact'];

}
if (isset($jsonData['history'][$index20]['ancestor']['customer']['createdAt'])) {
    $model->history[$index20]->ancestor->customer->createdAt = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['history'][$index20]['ancestor']['customer']['createdAt']);

}
if (isset($jsonData['history'][$index20]['ancestor']['customer']['managerId'])) {
    $model->history[$index20]->ancestor->customer->managerId = $jsonData['history'][$index20]['ancestor']['customer']['managerId'];

}
if (isset($jsonData['history'][$index20]['ancestor']['customer']['vip'])) {
    $model->history[$index20]->ancestor->customer->vip = $jsonData['history'][$index20]['ancestor']['customer']['vip'];

}
if (isset($jsonData['history'][$index20]['ancestor']['customer']['bad'])) {
    $model->history[$index20]->ancestor->customer->bad = $jsonData['history'][$index20]['ancestor']['customer']['bad'];

}
if (isset($jsonData['history'][$index20]['ancestor']['customer']['browserId'])) {
    $model->history[$index20]->ancestor->customer->browserId = $jsonData['history'][$index20]['ancestor']['customer']['browserId'];

}
if (isset($jsonData['history'][$index20]['ancestor']['customer']['site'])) {
    $model->history[$index20]->ancestor->customer->site = $jsonData['history'][$index20]['ancestor']['customer']['site'];

}
if (isset($jsonData['history'][$index20]['ancestor']['customer']['contragent'])) {
    
$model->history[$index20]->ancestor->customer->contragent = new RetailCrm\Api\Model\Entity\Customers\CustomerContragent();
if (isset($jsonData['history'][$index20]['ancestor']['customer']['contragent']['contragentType'])) {
    $model->history[$index20]->ancestor->customer->contragent->contragentType = $jsonData['history'][$index20]['ancestor']['customer']['contragent']['contragentType'];

}
if (isset($jsonData['history'][$index20]['ancestor']['customer']['contragent']['legalName'])) {
    $model->history[$index20]->ancestor->customer->contragent->legalName = $jsonData['history'][$index20]['ancestor']['customer']['contragent']['legalName'];

}
if (isset($jsonData['history'][$index20]['ancestor']['customer']['contragent']['legalAddress'])) {
    $model->history[$index20]->ancestor->customer->contragent->legalAddress = $jsonData['history'][$index20]['ancestor']['customer']['contragent']['legalAddress'];

}
if (isset($jsonData['history'][$index20]['ancestor']['customer']['contragent']['INN'])) {
    $model->history[$index20]->ancestor->customer->contragent->INN = $jsonData['history'][$index20]['ancestor']['customer']['contragent']['INN'];

}
if (isset($jsonData['history'][$index20]['ancestor']['customer']['contragent']['OKPO'])) {
    $model->history[$index20]->ancestor->customer->contragent->OKPO = $jsonData['history'][$index20]['ancestor']['customer']['contragent']['OKPO'];

}
if (isset($jsonData['history'][$index20]['ancestor']['customer']['contragent']['KPP'])) {
    $model->history[$index20]->ancestor->customer->contragent->KPP = $jsonData['history'][$index20]['ancestor']['customer']['contragent']['KPP'];

}
if (isset($jsonData['history'][$index20]['ancestor']['customer']['contragent']['OGRN'])) {
    $model->history[$index20]->ancestor->customer->contragent->OGRN = $jsonData['history'][$index20]['ancestor']['customer']['contragent']['OGRN'];

}
if (isset($jsonData['history'][$index20]['ancestor']['customer']['contragent']['OGRNIP'])) {
    $model->history[$index20]->ancestor->customer->contragent->OGRNIP = $jsonData['history'][$index20]['ancestor']['customer']['contragent']['OGRNIP'];

}
if (isset($jsonData['history'][$index20]['ancestor']['customer']['contragent']['certificateNumber'])) {
    $model->history[$index20]->ancestor->customer->contragent->certificateNumber = $jsonData['history'][$index20]['ancestor']['customer']['contragent']['certificateNumber'];

}
if (isset($jsonData['history'][$index20]['ancestor']['customer']['contragent']['certificateDate'])) {
    $model->history[$index20]->ancestor->customer->contragent->certificateDate = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['history'][$index20]['ancestor']['customer']['contragent']['certificateDate']);

}
if (isset($jsonData['history'][$index20]['ancestor']['customer']['contragent']['BIK'])) {
    $model->history[$index20]->ancestor->customer->contragent->BIK = $jsonData['history'][$index20]['ancestor']['customer']['contragent']['BIK'];

}
if (isset($jsonData['history'][$index20]['ancestor']['customer']['contragent']['bank'])) {
    $model->history[$index20]->ancestor->customer->contragent->bank = $jsonData['history'][$index20]['ancestor']['customer']['contragent']['bank'];

}
if (isset($jsonData['history'][$index20]['ancestor']['customer']['contragent']['bankAddress'])) {
    $model->history[$index20]->ancestor->customer->contragent->bankAddress = $jsonData['history'][$index20]['ancestor']['customer']['contragent']['bankAddress'];

}
if (isset($jsonData['history'][$index20]['ancestor']['customer']['contragent']['corrAccount'])) {
    $model->history[$index20]->ancestor->customer->contragent->corrAccount = $jsonData['history'][$index20]['ancestor']['customer']['contragent']['corrAccount'];

}
if (isset($jsonData['history'][$index20]['ancestor']['customer']['contragent']['bankAccount'])) {
    $model->history[$index20]->ancestor->customer->contragent->bankAccount = $jsonData['history'][$index20]['ancestor']['customer']['contragent']['bankAccount'];

}


}
if (isset($jsonData['history'][$index20]['ancestor']['customer']['tags'])) {
    $model->history[$index20]->ancestor->customer->tags = [];
foreach (array_keys($jsonData['history'][$index20]['ancestor']['customer']['tags']) as $index62) {
    
$model->history[$index20]->ancestor->customer->tags[$index62] = new RetailCrm\Api\Model\Entity\Customers\CustomerTag();
if (isset($jsonData['history'][$index20]['ancestor']['customer']['tags'][$index62]['name'])) {
    $model->history[$index20]->ancestor->customer->tags[$index62]->name = $jsonData['history'][$index20]['ancestor']['customer']['tags'][$index62]['name'];

}
if (isset($jsonData['history'][$index20]['ancestor']['customer']['tags'][$index62]['color'])) {
    $model->history[$index20]->ancestor->customer->tags[$index62]->color = $jsonData['history'][$index20]['ancestor']['customer']['tags'][$index62]['color'];

}
if (isset($jsonData['history'][$index20]['ancestor']['customer']['tags'][$index62]['attached'])) {
    $model->history[$index20]->ancestor->customer->tags[$index62]->attached = $jsonData['history'][$index20]['ancestor']['customer']['tags'][$index62]['attached'];

}


}

}
if (isset($jsonData['history'][$index20]['ancestor']['customer']['avgMarginSumm'])) {
    $model->history[$index20]->ancestor->customer->avgMarginSumm = (float) $jsonData['history'][$index20]['ancestor']['customer']['avgMarginSumm'];

}
if (isset($jsonData['history'][$index20]['ancestor']['customer']['marginSumm'])) {
    $model->history[$index20]->ancestor->customer->marginSumm = (float) $jsonData['history'][$index20]['ancestor']['customer']['marginSumm'];

}
if (isset($jsonData['history'][$index20]['ancestor']['customer']['totalSumm'])) {
    $model->history[$index20]->ancestor->customer->totalSumm = (float) $jsonData['history'][$index20]['ancestor']['customer']['totalSumm'];

}
if (isset($jsonData['history'][$index20]['ancestor']['customer']['averageSumm'])) {
    $model->history[$index20]->ancestor->customer->averageSumm = (float) $jsonData['history'][$index20]['ancestor']['customer']['averageSumm'];

}
if (isset($jsonData['history'][$index20]['ancestor']['customer']['ordersCount'])) {
    $model->history[$index20]->ancestor->customer->ordersCount = $jsonData['history'][$index20]['ancestor']['customer']['ordersCount'];

}
if (isset($jsonData['history'][$index20]['ancestor']['customer']['costSumm'])) {
    $model->history[$index20]->ancestor->customer->costSumm = (float) $jsonData['history'][$index20]['ancestor']['customer']['costSumm'];

}
if (isset($jsonData['history'][$index20]['ancestor']['customer']['customFields'])) {
    $model->history[$index20]->ancestor->customer->customFields = [];
foreach (array_keys($jsonData['history'][$index20]['ancestor']['customer']['customFields']) as $index70) {
    $model->history[$index20]->ancestor->customer->customFields[$index70] = $jsonData['history'][$index20]['ancestor']['customer']['customFields'][$index70];

}

}
if (isset($jsonData['history'][$index20]['ancestor']['customer']['personalDiscount'])) {
    $model->history[$index20]->ancestor->customer->personalDiscount = (float) $jsonData['history'][$index20]['ancestor']['customer']['personalDiscount'];

}
if (isset($jsonData['history'][$index20]['ancestor']['customer']['cumulativeDiscount'])) {
    $model->history[$index20]->ancestor->customer->cumulativeDiscount = (float) $jsonData['history'][$index20]['ancestor']['customer']['cumulativeDiscount'];

}
if (isset($jsonData['history'][$index20]['ancestor']['customer']['discountCardNumber'])) {
    $model->history[$index20]->ancestor->customer->discountCardNumber = $jsonData['history'][$index20]['ancestor']['customer']['discountCardNumber'];

}
if (isset($jsonData['history'][$index20]['ancestor']['customer']['firstClientId'])) {
    $model->history[$index20]->ancestor->customer->firstClientId = $jsonData['history'][$index20]['ancestor']['customer']['firstClientId'];

}
if (isset($jsonData['history'][$index20]['ancestor']['customer']['lastClientId'])) {
    $model->history[$index20]->ancestor->customer->lastClientId = $jsonData['history'][$index20]['ancestor']['customer']['lastClientId'];

}
if (isset($jsonData['history'][$index20]['ancestor']['customer']['address'])) {
    
$model->history[$index20]->ancestor->customer->address = new RetailCrm\Api\Model\Entity\Customers\CustomerAddress();
if (isset($jsonData['history'][$index20]['ancestor']['customer']['address']['id'])) {
    $model->history[$index20]->ancestor->customer->address->id = $jsonData['history'][$index20]['ancestor']['customer']['address']['id'];

}
if (isset($jsonData['history'][$index20]['ancestor']['customer']['address']['name'])) {
    $model->history[$index20]->ancestor->customer->address->name = $jsonData['history'][$index20]['ancestor']['customer']['address']['name'];

}
if (isset($jsonData['history'][$index20]['ancestor']['customer']['address']['isMain'])) {
    $model->history[$index20]->ancestor->customer->address->isMain = $jsonData['history'][$index20]['ancestor']['customer']['address']['isMain'];

}
if (isset($jsonData['history'][$index20]['ancestor']['customer']['address']['index'])) {
    $model->history[$index20]->ancestor->customer->address->index = $jsonData['history'][$index20]['ancestor']['customer']['address']['index'];

}
if (isset($jsonData['history'][$index20]['ancestor']['customer']['address']['countryIso'])) {
    $model->history[$index20]->ancestor->customer->address->countryIso = $jsonData['history'][$index20]['ancestor']['customer']['address']['countryIso'];

}
if (isset($jsonData['history'][$index20]['ancestor']['customer']['address']['region'])) {
    $model->history[$index20]->ancestor->customer->address->region = $jsonData['history'][$index20]['ancestor']['customer']['address']['region'];

}
if (isset($jsonData['history'][$index20]['ancestor']['customer']['address']['regionId'])) {
    $model->history[$index20]->ancestor->customer->address->regionId = $jsonData['history'][$index20]['ancestor']['customer']['address']['regionId'];

}
if (isset($jsonData['history'][$index20]['ancestor']['customer']['address']['city'])) {
    $model->history[$index20]->ancestor->customer->address->city = $jsonData['history'][$index20]['ancestor']['customer']['address']['city'];

}
if (isset($jsonData['history'][$index20]['ancestor']['customer']['address']['cityId'])) {
    $model->history[$index20]->ancestor->customer->address->cityId = $jsonData['history'][$index20]['ancestor']['customer']['address']['cityId'];

}
if (isset($jsonData['history'][$index20]['ancestor']['customer']['address']['cityType'])) {
    $model->history[$index20]->ancestor->customer->address->cityType = $jsonData['history'][$index20]['ancestor']['customer']['address']['cityType'];

}
if (isset($jsonData['history'][$index20]['ancestor']['customer']['address']['street'])) {
    $model->history[$index20]->ancestor->customer->address->street = $jsonData['history'][$index20]['ancestor']['customer']['address']['street'];

}
if (isset($jsonData['history'][$index20]['ancestor']['customer']['address']['streetId'])) {
    $model->history[$index20]->ancestor->customer->address->streetId = $jsonData['history'][$index20]['ancestor']['customer']['address']['streetId'];

}
if (isset($jsonData['history'][$index20]['ancestor']['customer']['address']['streetType'])) {
    $model->history[$index20]->ancestor->customer->address->streetType = $jsonData['history'][$index20]['ancestor']['customer']['address']['streetType'];

}
if (isset($jsonData['history'][$index20]['ancestor']['customer']['address']['building'])) {
    $model->history[$index20]->ancestor->customer->address->building = $jsonData['history'][$index20]['ancestor']['customer']['address']['building'];

}
if (isset($jsonData['history'][$index20]['ancestor']['customer']['address']['flat'])) {
    $model->history[$index20]->ancestor->customer->address->flat = $jsonData['history'][$index20]['ancestor']['customer']['address']['flat'];

}
if (isset($jsonData['history'][$index20]['ancestor']['customer']['address']['floor'])) {
    $model->history[$index20]->ancestor->customer->address->floor = $jsonData['history'][$index20]['ancestor']['customer']['address']['floor'];

}
if (isset($jsonData['history'][$index20]['ancestor']['customer']['address']['block'])) {
    $model->history[$index20]->ancestor->customer->address->block = $jsonData['history'][$index20]['ancestor']['customer']['address']['block'];

}
if (isset($jsonData['history'][$index20]['ancestor']['customer']['address']['house'])) {
    $model->history[$index20]->ancestor->customer->address->house = $jsonData['history'][$index20]['ancestor']['customer']['address']['house'];

}
if (isset($jsonData['history'][$index20]['ancestor']['customer']['address']['housing'])) {
    $model->history[$index20]->ancestor->customer->address->housing = $jsonData['history'][$index20]['ancestor']['customer']['address']['housing'];

}
if (isset($jsonData['history'][$index20]['ancestor']['customer']['address']['metro'])) {
    $model->history[$index20]->ancestor->customer->address->metro = $jsonData['history'][$index20]['ancestor']['customer']['address']['metro'];

}
if (isset($jsonData['history'][$index20]['ancestor']['customer']['address']['notes'])) {
    $model->history[$index20]->ancestor->customer->address->notes = $jsonData['history'][$index20]['ancestor']['customer']['address']['notes'];

}
if (isset($jsonData['history'][$index20]['ancestor']['customer']['address']['text'])) {
    $model->history[$index20]->ancestor->customer->address->text = $jsonData['history'][$index20]['ancestor']['customer']['address']['text'];

}
if (isset($jsonData['history'][$index20]['ancestor']['customer']['address']['externalId'])) {
    $model->history[$index20]->ancestor->customer->address->externalId = $jsonData['history'][$index20]['ancestor']['customer']['address']['externalId'];

}


}
if (isset($jsonData['history'][$index20]['ancestor']['customer']['segments'])) {
    $model->history[$index20]->ancestor->customer->segments = [];
foreach (array_keys($jsonData['history'][$index20]['ancestor']['customer']['segments']) as $index66) {
    
$model->history[$index20]->ancestor->customer->segments[$index66] = new RetailCrm\Api\Model\Entity\Customers\Segment();
if (isset($jsonData['history'][$index20]['ancestor']['customer']['segments'][$index66]['id'])) {
    $model->history[$index20]->ancestor->customer->segments[$index66]->id = $jsonData['history'][$index20]['ancestor']['customer']['segments'][$index66]['id'];

}
if (isset($jsonData['history'][$index20]['ancestor']['customer']['segments'][$index66]['code'])) {
    $model->history[$index20]->ancestor->customer->segments[$index66]->code = $jsonData['history'][$index20]['ancestor']['customer']['segments'][$index66]['code'];

}
if (isset($jsonData['history'][$index20]['ancestor']['customer']['segments'][$index66]['name'])) {
    $model->history[$index20]->ancestor->customer->segments[$index66]->name = $jsonData['history'][$index20]['ancestor']['customer']['segments'][$index66]['name'];

}
if (isset($jsonData['history'][$index20]['ancestor']['customer']['segments'][$index66]['createdAt'])) {
    $model->history[$index20]->ancestor->customer->segments[$index66]->createdAt = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['history'][$index20]['ancestor']['customer']['segments'][$index66]['createdAt']);

}
if (isset($jsonData['history'][$index20]['ancestor']['customer']['segments'][$index66]['isDynamic'])) {
    $model->history[$index20]->ancestor->customer->segments[$index66]->isDynamic = $jsonData['history'][$index20]['ancestor']['customer']['segments'][$index66]['isDynamic'];

}
if (isset($jsonData['history'][$index20]['ancestor']['customer']['segments'][$index66]['customersCount'])) {
    $model->history[$index20]->ancestor->customer->segments[$index66]->customersCount = $jsonData['history'][$index20]['ancestor']['customer']['segments'][$index66]['customersCount'];

}
if (isset($jsonData['history'][$index20]['ancestor']['customer']['segments'][$index66]['active'])) {
    $model->history[$index20]->ancestor->customer->segments[$index66]->active = $jsonData['history'][$index20]['ancestor']['customer']['segments'][$index66]['active'];

}


}

}
if (isset($jsonData['history'][$index20]['ancestor']['customer']['maturationTime'])) {
    $model->history[$index20]->ancestor->customer->maturationTime = $jsonData['history'][$index20]['ancestor']['customer']['maturationTime'];

}
if (isset($jsonData['history'][$index20]['ancestor']['customer']['firstName'])) {
    $model->history[$index20]->ancestor->customer->firstName = $jsonData['history'][$index20]['ancestor']['customer']['firstName'];

}
if (isset($jsonData['history'][$index20]['ancestor']['customer']['lastName'])) {
    $model->history[$index20]->ancestor->customer->lastName = $jsonData['history'][$index20]['ancestor']['customer']['lastName'];

}
if (isset($jsonData['history'][$index20]['ancestor']['customer']['patronymic'])) {
    $model->history[$index20]->ancestor->customer->patronymic = $jsonData['history'][$index20]['ancestor']['customer']['patronymic'];

}
if (isset($jsonData['history'][$index20]['ancestor']['customer']['sex'])) {
    $model->history[$index20]->ancestor->customer->sex = $jsonData['history'][$index20]['ancestor']['customer']['sex'];

}
if (isset($jsonData['history'][$index20]['ancestor']['customer']['presumableSex'])) {
    $model->history[$index20]->ancestor->customer->presumableSex = $jsonData['history'][$index20]['ancestor']['customer']['presumableSex'];

}
if (isset($jsonData['history'][$index20]['ancestor']['customer']['email'])) {
    $model->history[$index20]->ancestor->customer->email = $jsonData['history'][$index20]['ancestor']['customer']['email'];

}
if (isset($jsonData['history'][$index20]['ancestor']['customer']['emailMarketingUnsubscribedAt'])) {
    $model->history[$index20]->ancestor->customer->emailMarketingUnsubscribedAt = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['history'][$index20]['ancestor']['customer']['emailMarketingUnsubscribedAt']);

}
if (isset($jsonData['history'][$index20]['ancestor']['customer']['phones'])) {
    $model->history[$index20]->ancestor->customer->phones = [];
foreach (array_keys($jsonData['history'][$index20]['ancestor']['customer']['phones']) as $index64) {
    
$model->history[$index20]->ancestor->customer->phones[$index64] = new RetailCrm\Api\Model\Entity\Customers\CustomerPhone();
if (isset($jsonData['history'][$index20]['ancestor']['customer']['phones'][$index64]['number'])) {
    $model->history[$index20]->ancestor->customer->phones[$index64]->number = $jsonData['history'][$index20]['ancestor']['customer']['phones'][$index64]['number'];

}


}

}
if (isset($jsonData['history'][$index20]['ancestor']['customer']['birthday'])) {
    $model->history[$index20]->ancestor->customer->birthday = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['history'][$index20]['ancestor']['customer']['birthday']);

}
if (isset($jsonData['history'][$index20]['ancestor']['customer']['source'])) {
    
$model->history[$index20]->ancestor->customer->source = new RetailCrm\Api\Model\Entity\Source();
if (isset($jsonData['history'][$index20]['ancestor']['customer']['source']['source'])) {
    $model->history[$index20]->ancestor->customer->source->source = $jsonData['history'][$index20]['ancestor']['customer']['source']['source'];

}
if (isset($jsonData['history'][$index20]['ancestor']['customer']['source']['medium'])) {
    $model->history[$index20]->ancestor->customer->source->medium = $jsonData['history'][$index20]['ancestor']['customer']['source']['medium'];

}
if (isset($jsonData['history'][$index20]['ancestor']['customer']['source']['campaign'])) {
    $model->history[$index20]->ancestor->customer->source->campaign = $jsonData['history'][$index20]['ancestor']['customer']['source']['campaign'];

}
if (isset($jsonData['history'][$index20]['ancestor']['customer']['source']['keyword'])) {
    $model->history[$index20]->ancestor->customer->source->keyword = $jsonData['history'][$index20]['ancestor']['customer']['source']['keyword'];

}
if (isset($jsonData['history'][$index20]['ancestor']['customer']['source']['content'])) {
    $model->history[$index20]->ancestor->customer->source->content = $jsonData['history'][$index20]['ancestor']['customer']['source']['content'];

}


}
if (isset($jsonData['history'][$index20]['ancestor']['customer']['photoUrl'])) {
    $model->history[$index20]->ancestor->customer->photoUrl = $jsonData['history'][$index20]['ancestor']['customer']['photoUrl'];

}
if (isset($jsonData['history'][$index20]['ancestor']['customer']['mgCustomerId'])) {
    $model->history[$index20]->ancestor->customer->mgCustomerId = $jsonData['history'][$index20]['ancestor']['customer']['mgCustomerId'];

}
if (isset($jsonData['history'][$index20]['ancestor']['customer']['subscribed'])) {
    $model->history[$index20]->ancestor->customer->subscribed = $jsonData['history'][$index20]['ancestor']['customer']['subscribed'];

}


} else {
    
$model->history[$index20]->ancestor->customer = new RetailCrm\Api\Model\Entity\CustomersCorporate\CustomerCorporate();
if (isset($jsonData['history'][$index20]['ancestor']['customer']['type'])) {
    $model->history[$index20]->ancestor->customer->type = $jsonData['history'][$index20]['ancestor']['customer']['type'];

}
if (isset($jsonData['history'][$index20]['ancestor']['customer']['id'])) {
    $model->history[$index20]->ancestor->customer->id = $jsonData['history'][$index20]['ancestor']['customer']['id'];

}
if (isset($jsonData['history'][$index20]['ancestor']['customer']['externalId'])) {
    $model->history[$index20]->ancestor->customer->externalId = $jsonData['history'][$index20]['ancestor']['customer']['externalId'];

}
if (isset($jsonData['history'][$index20]['ancestor']['customer']['nickName'])) {
    $model->history[$index20]->ancestor->customer->nickName = $jsonData['history'][$index20]['ancestor']['customer']['nickName'];

}
if (isset($jsonData['history'][$index20]['ancestor']['customer']['mainAddress'])) {
    
$model->history[$index20]->ancestor->customer->mainAddress = new RetailCrm\Api\Model\Entity\CustomersCorporate\EntityWithExternalIdNameOutput();
if (isset($jsonData['history'][$index20]['ancestor']['customer']['mainAddress']['id'])) {
    $model->history[$index20]->ancestor->customer->mainAddress->id = $jsonData['history'][$index20]['ancestor']['customer']['mainAddress']['id'];

}
if (isset($jsonData['history'][$index20]['ancestor']['customer']['mainAddress']['externalId'])) {
    $model->history[$index20]->ancestor->customer->mainAddress->externalId = $jsonData['history'][$index20]['ancestor']['customer']['mainAddress']['externalId'];

}
if (isset($jsonData['history'][$index20]['ancestor']['customer']['mainAddress']['name'])) {
    $model->history[$index20]->ancestor->customer->mainAddress->name = $jsonData['history'][$index20]['ancestor']['customer']['mainAddress']['name'];

}


}
if (isset($jsonData['history'][$index20]['ancestor']['customer']['createdAt'])) {
    $model->history[$index20]->ancestor->customer->createdAt = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['history'][$index20]['ancestor']['customer']['createdAt']);

}
if (isset($jsonData['history'][$index20]['ancestor']['customer']['managerId'])) {
    $model->history[$index20]->ancestor->customer->managerId = $jsonData['history'][$index20]['ancestor']['customer']['managerId'];

}
if (isset($jsonData['history'][$index20]['ancestor']['customer']['source'])) {
    
$model->history[$index20]->ancestor->customer->source = new RetailCrm\Api\Model\Entity\Source();
if (isset($jsonData['history'][$index20]['ancestor']['customer']['source']['source'])) {
    $model->history[$index20]->ancestor->customer->source->source = $jsonData['history'][$index20]['ancestor']['customer']['source']['source'];

}
if (isset($jsonData['history'][$index20]['ancestor']['customer']['source']['medium'])) {
    $model->history[$index20]->ancestor->customer->source->medium = $jsonData['history'][$index20]['ancestor']['customer']['source']['medium'];

}
if (isset($jsonData['history'][$index20]['ancestor']['customer']['source']['campaign'])) {
    $model->history[$index20]->ancestor->customer->source->campaign = $jsonData['history'][$index20]['ancestor']['customer']['source']['campaign'];

}
if (isset($jsonData['history'][$index20]['ancestor']['customer']['source']['keyword'])) {
    $model->history[$index20]->ancestor->customer->source->keyword = $jsonData['history'][$index20]['ancestor']['customer']['source']['keyword'];

}
if (isset($jsonData['history'][$index20]['ancestor']['customer']['source']['content'])) {
    $model->history[$index20]->ancestor->customer->source->content = $jsonData['history'][$index20]['ancestor']['customer']['source']['content'];

}


}
if (isset($jsonData['history'][$index20]['ancestor']['customer']['customerContacts'])) {
    $model->history[$index20]->ancestor->customer->customerContacts = [];
foreach (array_keys($jsonData['history'][$index20]['ancestor']['customer']['customerContacts']) as $index74) {
    
$model->history[$index20]->ancestor->customer->customerContacts[$index74] = new RetailCrm\Api\Model\Entity\CustomersCorporate\CustomerContact();
if (isset($jsonData['history'][$index20]['ancestor']['customer']['customerContacts'][$index74]['id'])) {
    $model->history[$index20]->ancestor->customer->customerContacts[$index74]->id = $jsonData['history'][$index20]['ancestor']['customer']['customerContacts'][$index74]['id'];

}
if (isset($jsonData['history'][$index20]['ancestor']['customer']['customerContacts'][$index74]['isMain'])) {
    $model->history[$index20]->ancestor->customer->customerContacts[$index74]->isMain = $jsonData['history'][$index20]['ancestor']['customer']['customerContacts'][$index74]['isMain'];

}
if (isset($jsonData['history'][$index20]['ancestor']['customer']['customerContacts'][$index74]['customer'])) {
    
$model->history[$index20]->ancestor->customer->customerContacts[$index74]->customer = new RetailCrm\Api\Model\Entity\CustomersCorporate\SerializedRelationAbstractCustomer();
if (isset($jsonData['history'][$index20]['ancestor']['customer']['customerContacts'][$index74]['customer']['id'])) {
    $model->history[$index20]->ancestor->customer->customerContacts[$index74]->customer->id = $jsonData['history'][$index20]['ancestor']['customer']['customerContacts'][$index74]['customer']['id'];

}
if (isset($jsonData['history'][$index20]['ancestor']['customer']['customerContacts'][$index74]['customer']['externalId'])) {
    $model->history[$index20]->ancestor->customer->customerContacts[$index74]->customer->externalId = $jsonData['history'][$index20]['ancestor']['customer']['customerContacts'][$index74]['customer']['externalId'];

}
if (isset($jsonData['history'][$index20]['ancestor']['customer']['customerContacts'][$index74]['customer']['browserId'])) {
    $model->history[$index20]->ancestor->customer->customerContacts[$index74]->customer->browserId = $jsonData['history'][$index20]['ancestor']['customer']['customerContacts'][$index74]['customer']['browserId'];

}
if (isset($jsonData['history'][$index20]['ancestor']['customer']['customerContacts'][$index74]['customer']['site'])) {
    $model->history[$index20]->ancestor->customer->customerContacts[$index74]->customer->site = $jsonData['history'][$index20]['ancestor']['customer']['customerContacts'][$index74]['customer']['site'];

}
if (isset($jsonData['history'][$index20]['ancestor']['customer']['customerContacts'][$index74]['customer']['companies'])) {
    $model->history[$index20]->ancestor->customer->customerContacts[$index74]->customer->companies = [];
foreach (array_keys($jsonData['history'][$index20]['ancestor']['customer']['customerContacts'][$index74]['customer']['companies']) as $index109) {
    
$model->history[$index20]->ancestor->customer->customerContacts[$index74]->customer->companies[$index109] = new RetailCrm\Api\Model\Entity\CustomersCorporate\CustomerContactCompany();
if (isset($jsonData['history'][$index20]['ancestor']['customer']['customerContacts'][$index74]['customer']['companies'][$index109]['id'])) {
    $model->history[$index20]->ancestor->customer->customerContacts[$index74]->customer->companies[$index109]->id = $jsonData['history'][$index20]['ancestor']['customer']['customerContacts'][$index74]['customer']['companies'][$index109]['id'];

}
if (isset($jsonData['history'][$index20]['ancestor']['customer']['customerContacts'][$index74]['customer']['companies'][$index109]['externalId'])) {
    $model->history[$index20]->ancestor->customer->customerContacts[$index74]->customer->companies[$index109]->externalId = $jsonData['history'][$index20]['ancestor']['customer']['customerContacts'][$index74]['customer']['companies'][$index109]['externalId'];

}
if (isset($jsonData['history'][$index20]['ancestor']['customer']['customerContacts'][$index74]['customer']['companies'][$index109]['company'])) {
    
$model->history[$index20]->ancestor->customer->customerContacts[$index74]->customer->companies[$index109]->company = new RetailCrm\Api\Model\Entity\CustomersCorporate\EntityWithExternalIdNameOutput();
if (isset($jsonData['history'][$index20]['ancestor']['customer']['customerContacts'][$index74]['customer']['companies'][$index109]['company']['id'])) {
    $model->history[$index20]->ancestor->customer->customerContacts[$index74]->customer->companies[$index109]->company->id = $jsonData['history'][$index20]['ancestor']['customer']['customerContacts'][$index74]['customer']['companies'][$index109]['company']['id'];

}
if (isset($jsonData['history'][$index20]['ancestor']['customer']['customerContacts'][$index74]['customer']['companies'][$index109]['company']['externalId'])) {
    $model->history[$index20]->ancestor->customer->customerContacts[$index74]->customer->companies[$index109]->company->externalId = $jsonData['history'][$index20]['ancestor']['customer']['customerContacts'][$index74]['customer']['companies'][$index109]['company']['externalId'];

}
if (isset($jsonData['history'][$index20]['ancestor']['customer']['customerContacts'][$index74]['customer']['companies'][$index109]['company']['name'])) {
    $model->history[$index20]->ancestor->customer->customerContacts[$index74]->customer->companies[$index109]->company->name = $jsonData['history'][$index20]['ancestor']['customer']['customerContacts'][$index74]['customer']['companies'][$index109]['company']['name'];

}


}


}

}


}
if (isset($jsonData['history'][$index20]['ancestor']['customer']['customerContacts'][$index74]['companies'])) {
    $model->history[$index20]->ancestor->customer->customerContacts[$index74]->companies = [];
foreach (array_keys($jsonData['history'][$index20]['ancestor']['customer']['customerContacts'][$index74]['companies']) as $index97) {
    
$model->history[$index20]->ancestor->customer->customerContacts[$index74]->companies[$index97] = new RetailCrm\Api\Model\Entity\CustomersCorporate\CustomerContactCompany();
if (isset($jsonData['history'][$index20]['ancestor']['customer']['customerContacts'][$index74]['companies'][$index97]['id'])) {
    $model->history[$index20]->ancestor->customer->customerContacts[$index74]->companies[$index97]->id = $jsonData['history'][$index20]['ancestor']['customer']['customerContacts'][$index74]['companies'][$index97]['id'];

}
if (isset($jsonData['history'][$index20]['ancestor']['customer']['customerContacts'][$index74]['companies'][$index97]['externalId'])) {
    $model->history[$index20]->ancestor->customer->customerContacts[$index74]->companies[$index97]->externalId = $jsonData['history'][$index20]['ancestor']['customer']['customerContacts'][$index74]['companies'][$index97]['externalId'];

}
if (isset($jsonData['history'][$index20]['ancestor']['customer']['customerContacts'][$index74]['companies'][$index97]['company'])) {
    
$model->history[$index20]->ancestor->customer->customerContacts[$index74]->companies[$index97]->company = new RetailCrm\Api\Model\Entity\CustomersCorporate\EntityWithExternalIdNameOutput();
if (isset($jsonData['history'][$index20]['ancestor']['customer']['customerContacts'][$index74]['companies'][$index97]['company']['id'])) {
    $model->history[$index20]->ancestor->customer->customerContacts[$index74]->companies[$index97]->company->id = $jsonData['history'][$index20]['ancestor']['customer']['customerContacts'][$index74]['companies'][$index97]['company']['id'];

}
if (isset($jsonData['history'][$index20]['ancestor']['customer']['customerContacts'][$index74]['companies'][$index97]['company']['externalId'])) {
    $model->history[$index20]->ancestor->customer->customerContacts[$index74]->companies[$index97]->company->externalId = $jsonData['history'][$index20]['ancestor']['customer']['customerContacts'][$index74]['companies'][$index97]['company']['externalId'];

}
if (isset($jsonData['history'][$index20]['ancestor']['customer']['customerContacts'][$index74]['companies'][$index97]['company']['name'])) {
    $model->history[$index20]->ancestor->customer->customerContacts[$index74]->companies[$index97]->company->name = $jsonData['history'][$index20]['ancestor']['customer']['customerContacts'][$index74]['companies'][$index97]['company']['name'];

}


}


}

}


}

}
if (isset($jsonData['history'][$index20]['ancestor']['customer']['companies'])) {
    $model->history[$index20]->ancestor->customer->companies = [];
foreach (array_keys($jsonData['history'][$index20]['ancestor']['customer']['companies']) as $index67) {
    
$model->history[$index20]->ancestor->customer->companies[$index67] = new RetailCrm\Api\Model\Entity\CustomersCorporate\Company();
if (isset($jsonData['history'][$index20]['ancestor']['customer']['companies'][$index67]['id'])) {
    $model->history[$index20]->ancestor->customer->companies[$index67]->id = $jsonData['history'][$index20]['ancestor']['customer']['companies'][$index67]['id'];

}
if (isset($jsonData['history'][$index20]['ancestor']['customer']['companies'][$index67]['isMain'])) {
    $model->history[$index20]->ancestor->customer->companies[$index67]->isMain = $jsonData['history'][$index20]['ancestor']['customer']['companies'][$index67]['isMain'];

}
if (isset($jsonData['history'][$index20]['ancestor']['customer']['companies'][$index67]['externalId'])) {
    $model->history[$index20]->ancestor->customer->companies[$index67]->externalId = $jsonData['history'][$index20]['ancestor']['customer']['companies'][$index67]['externalId'];

}
if (isset($jsonData['history'][$index20]['ancestor']['customer']['companies'][$index67]['active'])) {
    $model->history[$index20]->ancestor->customer->companies[$index67]->active = $jsonData['history'][$index20]['ancestor']['customer']['companies'][$index67]['active'];

}
if (isset($jsonData['history'][$index20]['ancestor']['customer']['companies'][$index67]['name'])) {
    $model->history[$index20]->ancestor->customer->companies[$index67]->name = $jsonData['history'][$index20]['ancestor']['customer']['companies'][$index67]['name'];

}
if (isset($jsonData['history'][$index20]['ancestor']['customer']['companies'][$index67]['brand'])) {
    $model->history[$index20]->ancestor->customer->companies[$index67]->brand = $jsonData['history'][$index20]['ancestor']['customer']['companies'][$index67]['brand'];

}
if (isset($jsonData['history'][$index20]['ancestor']['customer']['companies'][$index67]['site'])) {
    $model->history[$index20]->ancestor->customer->companies[$index67]->site = $jsonData['history'][$index20]['ancestor']['customer']['companies'][$index67]['site'];

}
if (isset($jsonData['history'][$index20]['ancestor']['customer']['companies'][$index67]['createdAt'])) {
    $model->history[$index20]->ancestor->customer->companies[$index67]->createdAt = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['history'][$index20]['ancestor']['customer']['companies'][$index67]['createdAt']);

}
if (isset($jsonData['history'][$index20]['ancestor']['customer']['companies'][$index67]['customer'])) {
    
$model->history[$index20]->ancestor->customer->companies[$index67]->customer = new RetailCrm\Api\Model\Entity\CustomersCorporate\SerializedEntityCustomer();
if (isset($jsonData['history'][$index20]['ancestor']['customer']['companies'][$index67]['customer']['site'])) {
    $model->history[$index20]->ancestor->customer->companies[$index67]->customer->site = $jsonData['history'][$index20]['ancestor']['customer']['companies'][$index67]['customer']['site'];

}
if (isset($jsonData['history'][$index20]['ancestor']['customer']['companies'][$index67]['customer']['id'])) {
    $model->history[$index20]->ancestor->customer->companies[$index67]->customer->id = $jsonData['history'][$index20]['ancestor']['customer']['companies'][$index67]['customer']['id'];

}
if (isset($jsonData['history'][$index20]['ancestor']['customer']['companies'][$index67]['customer']['externalId'])) {
    $model->history[$index20]->ancestor->customer->companies[$index67]->customer->externalId = $jsonData['history'][$index20]['ancestor']['customer']['companies'][$index67]['customer']['externalId'];

}
if (isset($jsonData['history'][$index20]['ancestor']['customer']['companies'][$index67]['customer']['type'])) {
    $model->history[$index20]->ancestor->customer->companies[$index67]->customer->type = $jsonData['history'][$index20]['ancestor']['customer']['companies'][$index67]['customer']['type'];

}


}
if (isset($jsonData['history'][$index20]['ancestor']['customer']['companies'][$index67]['contragent'])) {
    
$model->history[$index20]->ancestor->customer->companies[$index67]->contragent = new RetailCrm\Api\Model\Entity\Customers\CustomerContragent();
if (isset($jsonData['history'][$index20]['ancestor']['customer']['companies'][$index67]['contragent']['contragentType'])) {
    $model->history[$index20]->ancestor->customer->companies[$index67]->contragent->contragentType = $jsonData['history'][$index20]['ancestor']['customer']['companies'][$index67]['contragent']['contragentType'];

}
if (isset($jsonData['history'][$index20]['ancestor']['customer']['companies'][$index67]['contragent']['legalName'])) {
    $model->history[$index20]->ancestor->customer->companies[$index67]->contragent->legalName = $jsonData['history'][$index20]['ancestor']['customer']['companies'][$index67]['contragent']['legalName'];

}
if (isset($jsonData['history'][$index20]['ancestor']['customer']['companies'][$index67]['contragent']['legalAddress'])) {
    $model->history[$index20]->ancestor->customer->companies[$index67]->contragent->legalAddress = $jsonData['history'][$index20]['ancestor']['customer']['companies'][$index67]['contragent']['legalAddress'];

}
if (isset($jsonData['history'][$index20]['ancestor']['customer']['companies'][$index67]['contragent']['INN'])) {
    $model->history[$index20]->ancestor->customer->companies[$index67]->contragent->INN = $jsonData['history'][$index20]['ancestor']['customer']['companies'][$index67]['contragent']['INN'];

}
if (isset($jsonData['history'][$index20]['ancestor']['customer']['companies'][$index67]['contragent']['OKPO'])) {
    $model->history[$index20]->ancestor->customer->companies[$index67]->contragent->OKPO = $jsonData['history'][$index20]['ancestor']['customer']['companies'][$index67]['contragent']['OKPO'];

}
if (isset($jsonData['history'][$index20]['ancestor']['customer']['companies'][$index67]['contragent']['KPP'])) {
    $model->history[$index20]->ancestor->customer->companies[$index67]->contragent->KPP = $jsonData['history'][$index20]['ancestor']['customer']['companies'][$index67]['contragent']['KPP'];

}
if (isset($jsonData['history'][$index20]['ancestor']['customer']['companies'][$index67]['contragent']['OGRN'])) {
    $model->history[$index20]->ancestor->customer->companies[$index67]->contragent->OGRN = $jsonData['history'][$index20]['ancestor']['customer']['companies'][$index67]['contragent']['OGRN'];

}
if (isset($jsonData['history'][$index20]['ancestor']['customer']['companies'][$index67]['contragent']['OGRNIP'])) {
    $model->history[$index20]->ancestor->customer->companies[$index67]->contragent->OGRNIP = $jsonData['history'][$index20]['ancestor']['customer']['companies'][$index67]['contragent']['OGRNIP'];

}
if (isset($jsonData['history'][$index20]['ancestor']['customer']['companies'][$index67]['contragent']['certificateNumber'])) {
    $model->history[$index20]->ancestor->customer->companies[$index67]->contragent->certificateNumber = $jsonData['history'][$index20]['ancestor']['customer']['companies'][$index67]['contragent']['certificateNumber'];

}
if (isset($jsonData['history'][$index20]['ancestor']['customer']['companies'][$index67]['contragent']['certificateDate'])) {
    $model->history[$index20]->ancestor->customer->companies[$index67]->contragent->certificateDate = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['history'][$index20]['ancestor']['customer']['companies'][$index67]['contragent']['certificateDate']);

}
if (isset($jsonData['history'][$index20]['ancestor']['customer']['companies'][$index67]['contragent']['BIK'])) {
    $model->history[$index20]->ancestor->customer->companies[$index67]->contragent->BIK = $jsonData['history'][$index20]['ancestor']['customer']['companies'][$index67]['contragent']['BIK'];

}
if (isset($jsonData['history'][$index20]['ancestor']['customer']['companies'][$index67]['contragent']['bank'])) {
    $model->history[$index20]->ancestor->customer->companies[$index67]->contragent->bank = $jsonData['history'][$index20]['ancestor']['customer']['companies'][$index67]['contragent']['bank'];

}
if (isset($jsonData['history'][$index20]['ancestor']['customer']['companies'][$index67]['contragent']['bankAddress'])) {
    $model->history[$index20]->ancestor->customer->companies[$index67]->contragent->bankAddress = $jsonData['history'][$index20]['ancestor']['customer']['companies'][$index67]['contragent']['bankAddress'];

}
if (isset($jsonData['history'][$index20]['ancestor']['customer']['companies'][$index67]['contragent']['corrAccount'])) {
    $model->history[$index20]->ancestor->customer->companies[$index67]->contragent->corrAccount = $jsonData['history'][$index20]['ancestor']['customer']['companies'][$index67]['contragent']['corrAccount'];

}
if (isset($jsonData['history'][$index20]['ancestor']['customer']['companies'][$index67]['contragent']['bankAccount'])) {
    $model->history[$index20]->ancestor->customer->companies[$index67]->contragent->bankAccount = $jsonData['history'][$index20]['ancestor']['customer']['companies'][$index67]['contragent']['bankAccount'];

}


}
if (isset($jsonData['history'][$index20]['ancestor']['customer']['companies'][$index67]['address'])) {
    
$model->history[$index20]->ancestor->customer->companies[$index67]->address = new RetailCrm\Api\Model\Entity\Customers\CustomerAddress();
if (isset($jsonData['history'][$index20]['ancestor']['customer']['companies'][$index67]['address']['id'])) {
    $model->history[$index20]->ancestor->customer->companies[$index67]->address->id = $jsonData['history'][$index20]['ancestor']['customer']['companies'][$index67]['address']['id'];

}
if (isset($jsonData['history'][$index20]['ancestor']['customer']['companies'][$index67]['address']['name'])) {
    $model->history[$index20]->ancestor->customer->companies[$index67]->address->name = $jsonData['history'][$index20]['ancestor']['customer']['companies'][$index67]['address']['name'];

}
if (isset($jsonData['history'][$index20]['ancestor']['customer']['companies'][$index67]['address']['isMain'])) {
    $model->history[$index20]->ancestor->customer->companies[$index67]->address->isMain = $jsonData['history'][$index20]['ancestor']['customer']['companies'][$index67]['address']['isMain'];

}
if (isset($jsonData['history'][$index20]['ancestor']['customer']['companies'][$index67]['address']['index'])) {
    $model->history[$index20]->ancestor->customer->companies[$index67]->address->index = $jsonData['history'][$index20]['ancestor']['customer']['companies'][$index67]['address']['index'];

}
if (isset($jsonData['history'][$index20]['ancestor']['customer']['companies'][$index67]['address']['countryIso'])) {
    $model->history[$index20]->ancestor->customer->companies[$index67]->address->countryIso = $jsonData['history'][$index20]['ancestor']['customer']['companies'][$index67]['address']['countryIso'];

}
if (isset($jsonData['history'][$index20]['ancestor']['customer']['companies'][$index67]['address']['region'])) {
    $model->history[$index20]->ancestor->customer->companies[$index67]->address->region = $jsonData['history'][$index20]['ancestor']['customer']['companies'][$index67]['address']['region'];

}
if (isset($jsonData['history'][$index20]['ancestor']['customer']['companies'][$index67]['address']['regionId'])) {
    $model->history[$index20]->ancestor->customer->companies[$index67]->address->regionId = $jsonData['history'][$index20]['ancestor']['customer']['companies'][$index67]['address']['regionId'];

}
if (isset($jsonData['history'][$index20]['ancestor']['customer']['companies'][$index67]['address']['city'])) {
    $model->history[$index20]->ancestor->customer->companies[$index67]->address->city = $jsonData['history'][$index20]['ancestor']['customer']['companies'][$index67]['address']['city'];

}
if (isset($jsonData['history'][$index20]['ancestor']['customer']['companies'][$index67]['address']['cityId'])) {
    $model->history[$index20]->ancestor->customer->companies[$index67]->address->cityId = $jsonData['history'][$index20]['ancestor']['customer']['companies'][$index67]['address']['cityId'];

}
if (isset($jsonData['history'][$index20]['ancestor']['customer']['companies'][$index67]['address']['cityType'])) {
    $model->history[$index20]->ancestor->customer->companies[$index67]->address->cityType = $jsonData['history'][$index20]['ancestor']['customer']['companies'][$index67]['address']['cityType'];

}
if (isset($jsonData['history'][$index20]['ancestor']['customer']['companies'][$index67]['address']['street'])) {
    $model->history[$index20]->ancestor->customer->companies[$index67]->address->street = $jsonData['history'][$index20]['ancestor']['customer']['companies'][$index67]['address']['street'];

}
if (isset($jsonData['history'][$index20]['ancestor']['customer']['companies'][$index67]['address']['streetId'])) {
    $model->history[$index20]->ancestor->customer->companies[$index67]->address->streetId = $jsonData['history'][$index20]['ancestor']['customer']['companies'][$index67]['address']['streetId'];

}
if (isset($jsonData['history'][$index20]['ancestor']['customer']['companies'][$index67]['address']['streetType'])) {
    $model->history[$index20]->ancestor->customer->companies[$index67]->address->streetType = $jsonData['history'][$index20]['ancestor']['customer']['companies'][$index67]['address']['streetType'];

}
if (isset($jsonData['history'][$index20]['ancestor']['customer']['companies'][$index67]['address']['building'])) {
    $model->history[$index20]->ancestor->customer->companies[$index67]->address->building = $jsonData['history'][$index20]['ancestor']['customer']['companies'][$index67]['address']['building'];

}
if (isset($jsonData['history'][$index20]['ancestor']['customer']['companies'][$index67]['address']['flat'])) {
    $model->history[$index20]->ancestor->customer->companies[$index67]->address->flat = $jsonData['history'][$index20]['ancestor']['customer']['companies'][$index67]['address']['flat'];

}
if (isset($jsonData['history'][$index20]['ancestor']['customer']['companies'][$index67]['address']['floor'])) {
    $model->history[$index20]->ancestor->customer->companies[$index67]->address->floor = $jsonData['history'][$index20]['ancestor']['customer']['companies'][$index67]['address']['floor'];

}
if (isset($jsonData['history'][$index20]['ancestor']['customer']['companies'][$index67]['address']['block'])) {
    $model->history[$index20]->ancestor->customer->companies[$index67]->address->block = $jsonData['history'][$index20]['ancestor']['customer']['companies'][$index67]['address']['block'];

}
if (isset($jsonData['history'][$index20]['ancestor']['customer']['companies'][$index67]['address']['house'])) {
    $model->history[$index20]->ancestor->customer->companies[$index67]->address->house = $jsonData['history'][$index20]['ancestor']['customer']['companies'][$index67]['address']['house'];

}
if (isset($jsonData['history'][$index20]['ancestor']['customer']['companies'][$index67]['address']['housing'])) {
    $model->history[$index20]->ancestor->customer->companies[$index67]->address->housing = $jsonData['history'][$index20]['ancestor']['customer']['companies'][$index67]['address']['housing'];

}
if (isset($jsonData['history'][$index20]['ancestor']['customer']['companies'][$index67]['address']['metro'])) {
    $model->history[$index20]->ancestor->customer->companies[$index67]->address->metro = $jsonData['history'][$index20]['ancestor']['customer']['companies'][$index67]['address']['metro'];

}
if (isset($jsonData['history'][$index20]['ancestor']['customer']['companies'][$index67]['address']['notes'])) {
    $model->history[$index20]->ancestor->customer->companies[$index67]->address->notes = $jsonData['history'][$index20]['ancestor']['customer']['companies'][$index67]['address']['notes'];

}
if (isset($jsonData['history'][$index20]['ancestor']['customer']['companies'][$index67]['address']['text'])) {
    $model->history[$index20]->ancestor->customer->companies[$index67]->address->text = $jsonData['history'][$index20]['ancestor']['customer']['companies'][$index67]['address']['text'];

}
if (isset($jsonData['history'][$index20]['ancestor']['customer']['companies'][$index67]['address']['externalId'])) {
    $model->history[$index20]->ancestor->customer->companies[$index67]->address->externalId = $jsonData['history'][$index20]['ancestor']['customer']['companies'][$index67]['address']['externalId'];

}


}
if (isset($jsonData['history'][$index20]['ancestor']['customer']['companies'][$index67]['customFields'])) {
    $model->history[$index20]->ancestor->customer->companies[$index67]->customFields = [];
foreach (array_keys($jsonData['history'][$index20]['ancestor']['customer']['companies'][$index67]['customFields']) as $index93) {
    $model->history[$index20]->ancestor->customer->companies[$index67]->customFields[$index93] = $jsonData['history'][$index20]['ancestor']['customer']['companies'][$index67]['customFields'][$index93];

}

}
if (isset($jsonData['history'][$index20]['ancestor']['customer']['companies'][$index67]['marginSumm'])) {
    $model->history[$index20]->ancestor->customer->companies[$index67]->marginSumm = (float) $jsonData['history'][$index20]['ancestor']['customer']['companies'][$index67]['marginSumm'];

}
if (isset($jsonData['history'][$index20]['ancestor']['customer']['companies'][$index67]['totalSumm'])) {
    $model->history[$index20]->ancestor->customer->companies[$index67]->totalSumm = (float) $jsonData['history'][$index20]['ancestor']['customer']['companies'][$index67]['totalSumm'];

}
if (isset($jsonData['history'][$index20]['ancestor']['customer']['companies'][$index67]['averageSumm'])) {
    $model->history[$index20]->ancestor->customer->companies[$index67]->averageSumm = (float) $jsonData['history'][$index20]['ancestor']['customer']['companies'][$index67]['averageSumm'];

}
if (isset($jsonData['history'][$index20]['ancestor']['customer']['companies'][$index67]['ordersCount'])) {
    $model->history[$index20]->ancestor->customer->companies[$index67]->ordersCount = $jsonData['history'][$index20]['ancestor']['customer']['companies'][$index67]['ordersCount'];

}
if (isset($jsonData['history'][$index20]['ancestor']['customer']['companies'][$index67]['costSumm'])) {
    $model->history[$index20]->ancestor->customer->companies[$index67]->costSumm = (float) $jsonData['history'][$index20]['ancestor']['customer']['companies'][$index67]['costSumm'];

}


}

}
if (isset($jsonData['history'][$index20]['ancestor']['customer']['addresses'])) {
    $model->history[$index20]->ancestor->customer->addresses = [];
foreach (array_keys($jsonData['history'][$index20]['ancestor']['customer']['addresses']) as $index67) {
    
$model->history[$index20]->ancestor->customer->addresses[$index67] = new RetailCrm\Api\Model\Entity\Customers\CustomerAddress();
if (isset($jsonData['history'][$index20]['ancestor']['customer']['addresses'][$index67]['id'])) {
    $model->history[$index20]->ancestor->customer->addresses[$index67]->id = $jsonData['history'][$index20]['ancestor']['customer']['addresses'][$index67]['id'];

}
if (isset($jsonData['history'][$index20]['ancestor']['customer']['addresses'][$index67]['name'])) {
    $model->history[$index20]->ancestor->customer->addresses[$index67]->name = $jsonData['history'][$index20]['ancestor']['customer']['addresses'][$index67]['name'];

}
if (isset($jsonData['history'][$index20]['ancestor']['customer']['addresses'][$index67]['isMain'])) {
    $model->history[$index20]->ancestor->customer->addresses[$index67]->isMain = $jsonData['history'][$index20]['ancestor']['customer']['addresses'][$index67]['isMain'];

}
if (isset($jsonData['history'][$index20]['ancestor']['customer']['addresses'][$index67]['index'])) {
    $model->history[$index20]->ancestor->customer->addresses[$index67]->index = $jsonData['history'][$index20]['ancestor']['customer']['addresses'][$index67]['index'];

}
if (isset($jsonData['history'][$index20]['ancestor']['customer']['addresses'][$index67]['countryIso'])) {
    $model->history[$index20]->ancestor->customer->addresses[$index67]->countryIso = $jsonData['history'][$index20]['ancestor']['customer']['addresses'][$index67]['countryIso'];

}
if (isset($jsonData['history'][$index20]['ancestor']['customer']['addresses'][$index67]['region'])) {
    $model->history[$index20]->ancestor->customer->addresses[$index67]->region = $jsonData['history'][$index20]['ancestor']['customer']['addresses'][$index67]['region'];

}
if (isset($jsonData['history'][$index20]['ancestor']['customer']['addresses'][$index67]['regionId'])) {
    $model->history[$index20]->ancestor->customer->addresses[$index67]->regionId = $jsonData['history'][$index20]['ancestor']['customer']['addresses'][$index67]['regionId'];

}
if (isset($jsonData['history'][$index20]['ancestor']['customer']['addresses'][$index67]['city'])) {
    $model->history[$index20]->ancestor->customer->addresses[$index67]->city = $jsonData['history'][$index20]['ancestor']['customer']['addresses'][$index67]['city'];

}
if (isset($jsonData['history'][$index20]['ancestor']['customer']['addresses'][$index67]['cityId'])) {
    $model->history[$index20]->ancestor->customer->addresses[$index67]->cityId = $jsonData['history'][$index20]['ancestor']['customer']['addresses'][$index67]['cityId'];

}
if (isset($jsonData['history'][$index20]['ancestor']['customer']['addresses'][$index67]['cityType'])) {
    $model->history[$index20]->ancestor->customer->addresses[$index67]->cityType = $jsonData['history'][$index20]['ancestor']['customer']['addresses'][$index67]['cityType'];

}
if (isset($jsonData['history'][$index20]['ancestor']['customer']['addresses'][$index67]['street'])) {
    $model->history[$index20]->ancestor->customer->addresses[$index67]->street = $jsonData['history'][$index20]['ancestor']['customer']['addresses'][$index67]['street'];

}
if (isset($jsonData['history'][$index20]['ancestor']['customer']['addresses'][$index67]['streetId'])) {
    $model->history[$index20]->ancestor->customer->addresses[$index67]->streetId = $jsonData['history'][$index20]['ancestor']['customer']['addresses'][$index67]['streetId'];

}
if (isset($jsonData['history'][$index20]['ancestor']['customer']['addresses'][$index67]['streetType'])) {
    $model->history[$index20]->ancestor->customer->addresses[$index67]->streetType = $jsonData['history'][$index20]['ancestor']['customer']['addresses'][$index67]['streetType'];

}
if (isset($jsonData['history'][$index20]['ancestor']['customer']['addresses'][$index67]['building'])) {
    $model->history[$index20]->ancestor->customer->addresses[$index67]->building = $jsonData['history'][$index20]['ancestor']['customer']['addresses'][$index67]['building'];

}
if (isset($jsonData['history'][$index20]['ancestor']['customer']['addresses'][$index67]['flat'])) {
    $model->history[$index20]->ancestor->customer->addresses[$index67]->flat = $jsonData['history'][$index20]['ancestor']['customer']['addresses'][$index67]['flat'];

}
if (isset($jsonData['history'][$index20]['ancestor']['customer']['addresses'][$index67]['floor'])) {
    $model->history[$index20]->ancestor->customer->addresses[$index67]->floor = $jsonData['history'][$index20]['ancestor']['customer']['addresses'][$index67]['floor'];

}
if (isset($jsonData['history'][$index20]['ancestor']['customer']['addresses'][$index67]['block'])) {
    $model->history[$index20]->ancestor->customer->addresses[$index67]->block = $jsonData['history'][$index20]['ancestor']['customer']['addresses'][$index67]['block'];

}
if (isset($jsonData['history'][$index20]['ancestor']['customer']['addresses'][$index67]['house'])) {
    $model->history[$index20]->ancestor->customer->addresses[$index67]->house = $jsonData['history'][$index20]['ancestor']['customer']['addresses'][$index67]['house'];

}
if (isset($jsonData['history'][$index20]['ancestor']['customer']['addresses'][$index67]['housing'])) {
    $model->history[$index20]->ancestor->customer->addresses[$index67]->housing = $jsonData['history'][$index20]['ancestor']['customer']['addresses'][$index67]['housing'];

}
if (isset($jsonData['history'][$index20]['ancestor']['customer']['addresses'][$index67]['metro'])) {
    $model->history[$index20]->ancestor->customer->addresses[$index67]->metro = $jsonData['history'][$index20]['ancestor']['customer']['addresses'][$index67]['metro'];

}
if (isset($jsonData['history'][$index20]['ancestor']['customer']['addresses'][$index67]['notes'])) {
    $model->history[$index20]->ancestor->customer->addresses[$index67]->notes = $jsonData['history'][$index20]['ancestor']['customer']['addresses'][$index67]['notes'];

}
if (isset($jsonData['history'][$index20]['ancestor']['customer']['addresses'][$index67]['text'])) {
    $model->history[$index20]->ancestor->customer->addresses[$index67]->text = $jsonData['history'][$index20]['ancestor']['customer']['addresses'][$index67]['text'];

}
if (isset($jsonData['history'][$index20]['ancestor']['customer']['addresses'][$index67]['externalId'])) {
    $model->history[$index20]->ancestor->customer->addresses[$index67]->externalId = $jsonData['history'][$index20]['ancestor']['customer']['addresses'][$index67]['externalId'];

}


}

}
if (isset($jsonData['history'][$index20]['ancestor']['customer']['vip'])) {
    $model->history[$index20]->ancestor->customer->vip = $jsonData['history'][$index20]['ancestor']['customer']['vip'];

}
if (isset($jsonData['history'][$index20]['ancestor']['customer']['bad'])) {
    $model->history[$index20]->ancestor->customer->bad = $jsonData['history'][$index20]['ancestor']['customer']['bad'];

}
if (isset($jsonData['history'][$index20]['ancestor']['customer']['site'])) {
    $model->history[$index20]->ancestor->customer->site = $jsonData['history'][$index20]['ancestor']['customer']['site'];

}
if (isset($jsonData['history'][$index20]['ancestor']['customer']['tags'])) {
    $model->history[$index20]->ancestor->customer->tags = [];
foreach (array_keys($jsonData['history'][$index20]['ancestor']['customer']['tags']) as $index62) {
    
$model->history[$index20]->ancestor->customer->tags[$index62] = new RetailCrm\Api\Model\Entity\Customers\CustomerTag();
if (isset($jsonData['history'][$index20]['ancestor']['customer']['tags'][$index62]['name'])) {
    $model->history[$index20]->ancestor->customer->tags[$index62]->name = $jsonData['history'][$index20]['ancestor']['customer']['tags'][$index62]['name'];

}
if (isset($jsonData['history'][$index20]['ancestor']['customer']['tags'][$index62]['color'])) {
    $model->history[$index20]->ancestor->customer->tags[$index62]->color = $jsonData['history'][$index20]['ancestor']['customer']['tags'][$index62]['color'];

}
if (isset($jsonData['history'][$index20]['ancestor']['customer']['tags'][$index62]['attached'])) {
    $model->history[$index20]->ancestor->customer->tags[$index62]->attached = $jsonData['history'][$index20]['ancestor']['customer']['tags'][$index62]['attached'];

}


}

}
if (isset($jsonData['history'][$index20]['ancestor']['customer']['avgMarginSumm'])) {
    $model->history[$index20]->ancestor->customer->avgMarginSumm = (float) $jsonData['history'][$index20]['ancestor']['customer']['avgMarginSumm'];

}
if (isset($jsonData['history'][$index20]['ancestor']['customer']['marginSumm'])) {
    $model->history[$index20]->ancestor->customer->marginSumm = (float) $jsonData['history'][$index20]['ancestor']['customer']['marginSumm'];

}
if (isset($jsonData['history'][$index20]['ancestor']['customer']['totalSumm'])) {
    $model->history[$index20]->ancestor->customer->totalSumm = (float) $jsonData['history'][$index20]['ancestor']['customer']['totalSumm'];

}
if (isset($jsonData['history'][$index20]['ancestor']['customer']['averageSumm'])) {
    $model->history[$index20]->ancestor->customer->averageSumm = (float) $jsonData['history'][$index20]['ancestor']['customer']['averageSumm'];

}
if (isset($jsonData['history'][$index20]['ancestor']['customer']['ordersCount'])) {
    $model->history[$index20]->ancestor->customer->ordersCount = $jsonData['history'][$index20]['ancestor']['customer']['ordersCount'];

}
if (isset($jsonData['history'][$index20]['ancestor']['customer']['costSumm'])) {
    $model->history[$index20]->ancestor->customer->costSumm = (float) $jsonData['history'][$index20]['ancestor']['customer']['costSumm'];

}
if (isset($jsonData['history'][$index20]['ancestor']['customer']['customFields'])) {
    $model->history[$index20]->ancestor->customer->customFields = [];
foreach (array_keys($jsonData['history'][$index20]['ancestor']['customer']['customFields']) as $index70) {
    $model->history[$index20]->ancestor->customer->customFields[$index70] = $jsonData['history'][$index20]['ancestor']['customer']['customFields'][$index70];

}

}
if (isset($jsonData['history'][$index20]['ancestor']['customer']['personalDiscount'])) {
    $model->history[$index20]->ancestor->customer->personalDiscount = (float) $jsonData['history'][$index20]['ancestor']['customer']['personalDiscount'];

}
if (isset($jsonData['history'][$index20]['ancestor']['customer']['cumulativeDiscount'])) {
    $model->history[$index20]->ancestor->customer->cumulativeDiscount = (float) $jsonData['history'][$index20]['ancestor']['customer']['cumulativeDiscount'];

}
if (isset($jsonData['history'][$index20]['ancestor']['customer']['discountCardNumber'])) {
    $model->history[$index20]->ancestor->customer->discountCardNumber = $jsonData['history'][$index20]['ancestor']['customer']['discountCardNumber'];

}
if (isset($jsonData['history'][$index20]['ancestor']['customer']['firstClientId'])) {
    $model->history[$index20]->ancestor->customer->firstClientId = $jsonData['history'][$index20]['ancestor']['customer']['firstClientId'];

}
if (isset($jsonData['history'][$index20]['ancestor']['customer']['lastClientId'])) {
    $model->history[$index20]->ancestor->customer->lastClientId = $jsonData['history'][$index20]['ancestor']['customer']['lastClientId'];

}
if (isset($jsonData['history'][$index20]['ancestor']['customer']['mainCustomerContact'])) {
    
$model->history[$index20]->ancestor->customer->mainCustomerContact = new RetailCrm\Api\Model\Entity\CustomersCorporate\CustomerContact();
if (isset($jsonData['history'][$index20]['ancestor']['customer']['mainCustomerContact']['id'])) {
    $model->history[$index20]->ancestor->customer->mainCustomerContact->id = $jsonData['history'][$index20]['ancestor']['customer']['mainCustomerContact']['id'];

}
if (isset($jsonData['history'][$index20]['ancestor']['customer']['mainCustomerContact']['isMain'])) {
    $model->history[$index20]->ancestor->customer->mainCustomerContact->isMain = $jsonData['history'][$index20]['ancestor']['customer']['mainCustomerContact']['isMain'];

}
if (isset($jsonData['history'][$index20]['ancestor']['customer']['mainCustomerContact']['customer'])) {
    
$model->history[$index20]->ancestor->customer->mainCustomerContact->customer = new RetailCrm\Api\Model\Entity\CustomersCorporate\SerializedRelationAbstractCustomer();
if (isset($jsonData['history'][$index20]['ancestor']['customer']['mainCustomerContact']['customer']['id'])) {
    $model->history[$index20]->ancestor->customer->mainCustomerContact->customer->id = $jsonData['history'][$index20]['ancestor']['customer']['mainCustomerContact']['customer']['id'];

}
if (isset($jsonData['history'][$index20]['ancestor']['customer']['mainCustomerContact']['customer']['externalId'])) {
    $model->history[$index20]->ancestor->customer->mainCustomerContact->customer->externalId = $jsonData['history'][$index20]['ancestor']['customer']['mainCustomerContact']['customer']['externalId'];

}
if (isset($jsonData['history'][$index20]['ancestor']['customer']['mainCustomerContact']['customer']['browserId'])) {
    $model->history[$index20]->ancestor->customer->mainCustomerContact->customer->browserId = $jsonData['history'][$index20]['ancestor']['customer']['mainCustomerContact']['customer']['browserId'];

}
if (isset($jsonData['history'][$index20]['ancestor']['customer']['mainCustomerContact']['customer']['site'])) {
    $model->history[$index20]->ancestor->customer->mainCustomerContact->customer->site = $jsonData['history'][$index20]['ancestor']['customer']['mainCustomerContact']['customer']['site'];

}
if (isset($jsonData['history'][$index20]['ancestor']['customer']['mainCustomerContact']['customer']['companies'])) {
    $model->history[$index20]->ancestor->customer->mainCustomerContact->customer->companies = [];
foreach (array_keys($jsonData['history'][$index20]['ancestor']['customer']['mainCustomerContact']['customer']['companies']) as $index102) {
    
$model->history[$index20]->ancestor->customer->mainCustomerContact->customer->companies[$index102] = new RetailCrm\Api\Model\Entity\CustomersCorporate\CustomerContactCompany();
if (isset($jsonData['history'][$index20]['ancestor']['customer']['mainCustomerContact']['customer']['companies'][$index102]['id'])) {
    $model->history[$index20]->ancestor->customer->mainCustomerContact->customer->companies[$index102]->id = $jsonData['history'][$index20]['ancestor']['customer']['mainCustomerContact']['customer']['companies'][$index102]['id'];

}
if (isset($jsonData['history'][$index20]['ancestor']['customer']['mainCustomerContact']['customer']['companies'][$index102]['externalId'])) {
    $model->history[$index20]->ancestor->customer->mainCustomerContact->customer->companies[$index102]->externalId = $jsonData['history'][$index20]['ancestor']['customer']['mainCustomerContact']['customer']['companies'][$index102]['externalId'];

}
if (isset($jsonData['history'][$index20]['ancestor']['customer']['mainCustomerContact']['customer']['companies'][$index102]['company'])) {
    
$model->history[$index20]->ancestor->customer->mainCustomerContact->customer->companies[$index102]->company = new RetailCrm\Api\Model\Entity\CustomersCorporate\EntityWithExternalIdNameOutput();
if (isset($jsonData['history'][$index20]['ancestor']['customer']['mainCustomerContact']['customer']['companies'][$index102]['company']['id'])) {
    $model->history[$index20]->ancestor->customer->mainCustomerContact->customer->companies[$index102]->company->id = $jsonData['history'][$index20]['ancestor']['customer']['mainCustomerContact']['customer']['companies'][$index102]['company']['id'];

}
if (isset($jsonData['history'][$index20]['ancestor']['customer']['mainCustomerContact']['customer']['companies'][$index102]['company']['externalId'])) {
    $model->history[$index20]->ancestor->customer->mainCustomerContact->customer->companies[$index102]->company->externalId = $jsonData['history'][$index20]['ancestor']['customer']['mainCustomerContact']['customer']['companies'][$index102]['company']['externalId'];

}
if (isset($jsonData['history'][$index20]['ancestor']['customer']['mainCustomerContact']['customer']['companies'][$index102]['company']['name'])) {
    $model->history[$index20]->ancestor->customer->mainCustomerContact->customer->companies[$index102]->company->name = $jsonData['history'][$index20]['ancestor']['customer']['mainCustomerContact']['customer']['companies'][$index102]['company']['name'];

}


}


}

}


}
if (isset($jsonData['history'][$index20]['ancestor']['customer']['mainCustomerContact']['companies'])) {
    $model->history[$index20]->ancestor->customer->mainCustomerContact->companies = [];
foreach (array_keys($jsonData['history'][$index20]['ancestor']['customer']['mainCustomerContact']['companies']) as $index90) {
    
$model->history[$index20]->ancestor->customer->mainCustomerContact->companies[$index90] = new RetailCrm\Api\Model\Entity\CustomersCorporate\CustomerContactCompany();
if (isset($jsonData['history'][$index20]['ancestor']['customer']['mainCustomerContact']['companies'][$index90]['id'])) {
    $model->history[$index20]->ancestor->customer->mainCustomerContact->companies[$index90]->id = $jsonData['history'][$index20]['ancestor']['customer']['mainCustomerContact']['companies'][$index90]['id'];

}
if (isset($jsonData['history'][$index20]['ancestor']['customer']['mainCustomerContact']['companies'][$index90]['externalId'])) {
    $model->history[$index20]->ancestor->customer->mainCustomerContact->companies[$index90]->externalId = $jsonData['history'][$index20]['ancestor']['customer']['mainCustomerContact']['companies'][$index90]['externalId'];

}
if (isset($jsonData['history'][$index20]['ancestor']['customer']['mainCustomerContact']['companies'][$index90]['company'])) {
    
$model->history[$index20]->ancestor->customer->mainCustomerContact->companies[$index90]->company = new RetailCrm\Api\Model\Entity\CustomersCorporate\EntityWithExternalIdNameOutput();
if (isset($jsonData['history'][$index20]['ancestor']['customer']['mainCustomerContact']['companies'][$index90]['company']['id'])) {
    $model->history[$index20]->ancestor->customer->mainCustomerContact->companies[$index90]->company->id = $jsonData['history'][$index20]['ancestor']['customer']['mainCustomerContact']['companies'][$index90]['company']['id'];

}
if (isset($jsonData['history'][$index20]['ancestor']['customer']['mainCustomerContact']['companies'][$index90]['company']['externalId'])) {
    $model->history[$index20]->ancestor->customer->mainCustomerContact->companies[$index90]->company->externalId = $jsonData['history'][$index20]['ancestor']['customer']['mainCustomerContact']['companies'][$index90]['company']['externalId'];

}
if (isset($jsonData['history'][$index20]['ancestor']['customer']['mainCustomerContact']['companies'][$index90]['company']['name'])) {
    $model->history[$index20]->ancestor->customer->mainCustomerContact->companies[$index90]->company->name = $jsonData['history'][$index20]['ancestor']['customer']['mainCustomerContact']['companies'][$index90]['company']['name'];

}


}


}

}


}
if (isset($jsonData['history'][$index20]['ancestor']['customer']['mainCompany'])) {
    
$model->history[$index20]->ancestor->customer->mainCompany = new RetailCrm\Api\Model\Entity\CustomersCorporate\EntityWithExternalIdNameOutput();
if (isset($jsonData['history'][$index20]['ancestor']['customer']['mainCompany']['id'])) {
    $model->history[$index20]->ancestor->customer->mainCompany->id = $jsonData['history'][$index20]['ancestor']['customer']['mainCompany']['id'];

}
if (isset($jsonData['history'][$index20]['ancestor']['customer']['mainCompany']['externalId'])) {
    $model->history[$index20]->ancestor->customer->mainCompany->externalId = $jsonData['history'][$index20]['ancestor']['customer']['mainCompany']['externalId'];

}
if (isset($jsonData['history'][$index20]['ancestor']['customer']['mainCompany']['name'])) {
    $model->history[$index20]->ancestor->customer->mainCompany->name = $jsonData['history'][$index20]['ancestor']['customer']['mainCompany']['name'];

}


}


}

}
if (isset($jsonData['history'][$index20]['ancestor']['contact'])) {
    
$model->history[$index20]->ancestor->contact = new RetailCrm\Api\Model\Entity\Customers\Customer();
if (isset($jsonData['history'][$index20]['ancestor']['contact']['type'])) {
    $model->history[$index20]->ancestor->contact->type = $jsonData['history'][$index20]['ancestor']['contact']['type'];

}
if (isset($jsonData['history'][$index20]['ancestor']['contact']['id'])) {
    $model->history[$index20]->ancestor->contact->id = $jsonData['history'][$index20]['ancestor']['contact']['id'];

}
if (isset($jsonData['history'][$index20]['ancestor']['contact']['externalId'])) {
    $model->history[$index20]->ancestor->contact->externalId = $jsonData['history'][$index20]['ancestor']['contact']['externalId'];

}
if (isset($jsonData['history'][$index20]['ancestor']['contact']['isContact'])) {
    $model->history[$index20]->ancestor->contact->isContact = $jsonData['history'][$index20]['ancestor']['contact']['isContact'];

}
if (isset($jsonData['history'][$index20]['ancestor']['contact']['createdAt'])) {
    $model->history[$index20]->ancestor->contact->createdAt = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['history'][$index20]['ancestor']['contact']['createdAt']);

}
if (isset($jsonData['history'][$index20]['ancestor']['contact']['managerId'])) {
    $model->history[$index20]->ancestor->contact->managerId = $jsonData['history'][$index20]['ancestor']['contact']['managerId'];

}
if (isset($jsonData['history'][$index20]['ancestor']['contact']['vip'])) {
    $model->history[$index20]->ancestor->contact->vip = $jsonData['history'][$index20]['ancestor']['contact']['vip'];

}
if (isset($jsonData['history'][$index20]['ancestor']['contact']['bad'])) {
    $model->history[$index20]->ancestor->contact->bad = $jsonData['history'][$index20]['ancestor']['contact']['bad'];

}
if (isset($jsonData['history'][$index20]['ancestor']['contact']['browserId'])) {
    $model->history[$index20]->ancestor->contact->browserId = $jsonData['history'][$index20]['ancestor']['contact']['browserId'];

}
if (isset($jsonData['history'][$index20]['ancestor']['contact']['site'])) {
    $model->history[$index20]->ancestor->contact->site = $jsonData['history'][$index20]['ancestor']['contact']['site'];

}
if (isset($jsonData['history'][$index20]['ancestor']['contact']['contragent'])) {
    
$model->history[$index20]->ancestor->contact->contragent = new RetailCrm\Api\Model\Entity\Customers\CustomerContragent();
if (isset($jsonData['history'][$index20]['ancestor']['contact']['contragent']['contragentType'])) {
    $model->history[$index20]->ancestor->contact->contragent->contragentType = $jsonData['history'][$index20]['ancestor']['contact']['contragent']['contragentType'];

}
if (isset($jsonData['history'][$index20]['ancestor']['contact']['contragent']['legalName'])) {
    $model->history[$index20]->ancestor->contact->contragent->legalName = $jsonData['history'][$index20]['ancestor']['contact']['contragent']['legalName'];

}
if (isset($jsonData['history'][$index20]['ancestor']['contact']['contragent']['legalAddress'])) {
    $model->history[$index20]->ancestor->contact->contragent->legalAddress = $jsonData['history'][$index20]['ancestor']['contact']['contragent']['legalAddress'];

}
if (isset($jsonData['history'][$index20]['ancestor']['contact']['contragent']['INN'])) {
    $model->history[$index20]->ancestor->contact->contragent->INN = $jsonData['history'][$index20]['ancestor']['contact']['contragent']['INN'];

}
if (isset($jsonData['history'][$index20]['ancestor']['contact']['contragent']['OKPO'])) {
    $model->history[$index20]->ancestor->contact->contragent->OKPO = $jsonData['history'][$index20]['ancestor']['contact']['contragent']['OKPO'];

}
if (isset($jsonData['history'][$index20]['ancestor']['contact']['contragent']['KPP'])) {
    $model->history[$index20]->ancestor->contact->contragent->KPP = $jsonData['history'][$index20]['ancestor']['contact']['contragent']['KPP'];

}
if (isset($jsonData['history'][$index20]['ancestor']['contact']['contragent']['OGRN'])) {
    $model->history[$index20]->ancestor->contact->contragent->OGRN = $jsonData['history'][$index20]['ancestor']['contact']['contragent']['OGRN'];

}
if (isset($jsonData['history'][$index20]['ancestor']['contact']['contragent']['OGRNIP'])) {
    $model->history[$index20]->ancestor->contact->contragent->OGRNIP = $jsonData['history'][$index20]['ancestor']['contact']['contragent']['OGRNIP'];

}
if (isset($jsonData['history'][$index20]['ancestor']['contact']['contragent']['certificateNumber'])) {
    $model->history[$index20]->ancestor->contact->contragent->certificateNumber = $jsonData['history'][$index20]['ancestor']['contact']['contragent']['certificateNumber'];

}
if (isset($jsonData['history'][$index20]['ancestor']['contact']['contragent']['certificateDate'])) {
    $model->history[$index20]->ancestor->contact->contragent->certificateDate = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['history'][$index20]['ancestor']['contact']['contragent']['certificateDate']);

}
if (isset($jsonData['history'][$index20]['ancestor']['contact']['contragent']['BIK'])) {
    $model->history[$index20]->ancestor->contact->contragent->BIK = $jsonData['history'][$index20]['ancestor']['contact']['contragent']['BIK'];

}
if (isset($jsonData['history'][$index20]['ancestor']['contact']['contragent']['bank'])) {
    $model->history[$index20]->ancestor->contact->contragent->bank = $jsonData['history'][$index20]['ancestor']['contact']['contragent']['bank'];

}
if (isset($jsonData['history'][$index20]['ancestor']['contact']['contragent']['bankAddress'])) {
    $model->history[$index20]->ancestor->contact->contragent->bankAddress = $jsonData['history'][$index20]['ancestor']['contact']['contragent']['bankAddress'];

}
if (isset($jsonData['history'][$index20]['ancestor']['contact']['contragent']['corrAccount'])) {
    $model->history[$index20]->ancestor->contact->contragent->corrAccount = $jsonData['history'][$index20]['ancestor']['contact']['contragent']['corrAccount'];

}
if (isset($jsonData['history'][$index20]['ancestor']['contact']['contragent']['bankAccount'])) {
    $model->history[$index20]->ancestor->contact->contragent->bankAccount = $jsonData['history'][$index20]['ancestor']['contact']['contragent']['bankAccount'];

}


}
if (isset($jsonData['history'][$index20]['ancestor']['contact']['tags'])) {
    $model->history[$index20]->ancestor->contact->tags = [];
foreach (array_keys($jsonData['history'][$index20]['ancestor']['contact']['tags']) as $index61) {
    
$model->history[$index20]->ancestor->contact->tags[$index61] = new RetailCrm\Api\Model\Entity\Customers\CustomerTag();
if (isset($jsonData['history'][$index20]['ancestor']['contact']['tags'][$index61]['name'])) {
    $model->history[$index20]->ancestor->contact->tags[$index61]->name = $jsonData['history'][$index20]['ancestor']['contact']['tags'][$index61]['name'];

}
if (isset($jsonData['history'][$index20]['ancestor']['contact']['tags'][$index61]['color'])) {
    $model->history[$index20]->ancestor->contact->tags[$index61]->color = $jsonData['history'][$index20]['ancestor']['contact']['tags'][$index61]['color'];

}
if (isset($jsonData['history'][$index20]['ancestor']['contact']['tags'][$index61]['attached'])) {
    $model->history[$index20]->ancestor->contact->tags[$index61]->attached = $jsonData['history'][$index20]['ancestor']['contact']['tags'][$index61]['attached'];

}


}

}
if (isset($jsonData['history'][$index20]['ancestor']['contact']['avgMarginSumm'])) {
    $model->history[$index20]->ancestor->contact->avgMarginSumm = (float) $jsonData['history'][$index20]['ancestor']['contact']['avgMarginSumm'];

}
if (isset($jsonData['history'][$index20]['ancestor']['contact']['marginSumm'])) {
    $model->history[$index20]->ancestor->contact->marginSumm = (float) $jsonData['history'][$index20]['ancestor']['contact']['marginSumm'];

}
if (isset($jsonData['history'][$index20]['ancestor']['contact']['totalSumm'])) {
    $model->history[$index20]->ancestor->contact->totalSumm = (float) $jsonData['history'][$index20]['ancestor']['contact']['totalSumm'];

}
if (isset($jsonData['history'][$index20]['ancestor']['contact']['averageSumm'])) {
    $model->history[$index20]->ancestor->contact->averageSumm = (float) $jsonData['history'][$index20]['ancestor']['contact']['averageSumm'];

}
if (isset($jsonData['history'][$index20]['ancestor']['contact']['ordersCount'])) {
    $model->history[$index20]->ancestor->contact->ordersCount = $jsonData['history'][$index20]['ancestor']['contact']['ordersCount'];

}
if (isset($jsonData['history'][$index20]['ancestor']['contact']['costSumm'])) {
    $model->history[$index20]->ancestor->contact->costSumm = (float) $jsonData['history'][$index20]['ancestor']['contact']['costSumm'];

}
if (isset($jsonData['history'][$index20]['ancestor']['contact']['customFields'])) {
    $model->history[$index20]->ancestor->contact->customFields = [];
foreach (array_keys($jsonData['history'][$index20]['ancestor']['contact']['customFields']) as $index69) {
    $model->history[$index20]->ancestor->contact->customFields[$index69] = $jsonData['history'][$index20]['ancestor']['contact']['customFields'][$index69];

}

}
if (isset($jsonData['history'][$index20]['ancestor']['contact']['personalDiscount'])) {
    $model->history[$index20]->ancestor->contact->personalDiscount = (float) $jsonData['history'][$index20]['ancestor']['contact']['personalDiscount'];

}
if (isset($jsonData['history'][$index20]['ancestor']['contact']['cumulativeDiscount'])) {
    $model->history[$index20]->ancestor->contact->cumulativeDiscount = (float) $jsonData['history'][$index20]['ancestor']['contact']['cumulativeDiscount'];

}
if (isset($jsonData['history'][$index20]['ancestor']['contact']['discountCardNumber'])) {
    $model->history[$index20]->ancestor->contact->discountCardNumber = $jsonData['history'][$index20]['ancestor']['contact']['discountCardNumber'];

}
if (isset($jsonData['history'][$index20]['ancestor']['contact']['firstClientId'])) {
    $model->history[$index20]->ancestor->contact->firstClientId = $jsonData['history'][$index20]['ancestor']['contact']['firstClientId'];

}
if (isset($jsonData['history'][$index20]['ancestor']['contact']['lastClientId'])) {
    $model->history[$index20]->ancestor->contact->lastClientId = $jsonData['history'][$index20]['ancestor']['contact']['lastClientId'];

}
if (isset($jsonData['history'][$index20]['ancestor']['contact']['address'])) {
    
$model->history[$index20]->ancestor->contact->address = new RetailCrm\Api\Model\Entity\Customers\CustomerAddress();
if (isset($jsonData['history'][$index20]['ancestor']['contact']['address']['id'])) {
    $model->history[$index20]->ancestor->contact->address->id = $jsonData['history'][$index20]['ancestor']['contact']['address']['id'];

}
if (isset($jsonData['history'][$index20]['ancestor']['contact']['address']['name'])) {
    $model->history[$index20]->ancestor->contact->address->name = $jsonData['history'][$index20]['ancestor']['contact']['address']['name'];

}
if (isset($jsonData['history'][$index20]['ancestor']['contact']['address']['isMain'])) {
    $model->history[$index20]->ancestor->contact->address->isMain = $jsonData['history'][$index20]['ancestor']['contact']['address']['isMain'];

}
if (isset($jsonData['history'][$index20]['ancestor']['contact']['address']['index'])) {
    $model->history[$index20]->ancestor->contact->address->index = $jsonData['history'][$index20]['ancestor']['contact']['address']['index'];

}
if (isset($jsonData['history'][$index20]['ancestor']['contact']['address']['countryIso'])) {
    $model->history[$index20]->ancestor->contact->address->countryIso = $jsonData['history'][$index20]['ancestor']['contact']['address']['countryIso'];

}
if (isset($jsonData['history'][$index20]['ancestor']['contact']['address']['region'])) {
    $model->history[$index20]->ancestor->contact->address->region = $jsonData['history'][$index20]['ancestor']['contact']['address']['region'];

}
if (isset($jsonData['history'][$index20]['ancestor']['contact']['address']['regionId'])) {
    $model->history[$index20]->ancestor->contact->address->regionId = $jsonData['history'][$index20]['ancestor']['contact']['address']['regionId'];

}
if (isset($jsonData['history'][$index20]['ancestor']['contact']['address']['city'])) {
    $model->history[$index20]->ancestor->contact->address->city = $jsonData['history'][$index20]['ancestor']['contact']['address']['city'];

}
if (isset($jsonData['history'][$index20]['ancestor']['contact']['address']['cityId'])) {
    $model->history[$index20]->ancestor->contact->address->cityId = $jsonData['history'][$index20]['ancestor']['contact']['address']['cityId'];

}
if (isset($jsonData['history'][$index20]['ancestor']['contact']['address']['cityType'])) {
    $model->history[$index20]->ancestor->contact->address->cityType = $jsonData['history'][$index20]['ancestor']['contact']['address']['cityType'];

}
if (isset($jsonData['history'][$index20]['ancestor']['contact']['address']['street'])) {
    $model->history[$index20]->ancestor->contact->address->street = $jsonData['history'][$index20]['ancestor']['contact']['address']['street'];

}
if (isset($jsonData['history'][$index20]['ancestor']['contact']['address']['streetId'])) {
    $model->history[$index20]->ancestor->contact->address->streetId = $jsonData['history'][$index20]['ancestor']['contact']['address']['streetId'];

}
if (isset($jsonData['history'][$index20]['ancestor']['contact']['address']['streetType'])) {
    $model->history[$index20]->ancestor->contact->address->streetType = $jsonData['history'][$index20]['ancestor']['contact']['address']['streetType'];

}
if (isset($jsonData['history'][$index20]['ancestor']['contact']['address']['building'])) {
    $model->history[$index20]->ancestor->contact->address->building = $jsonData['history'][$index20]['ancestor']['contact']['address']['building'];

}
if (isset($jsonData['history'][$index20]['ancestor']['contact']['address']['flat'])) {
    $model->history[$index20]->ancestor->contact->address->flat = $jsonData['history'][$index20]['ancestor']['contact']['address']['flat'];

}
if (isset($jsonData['history'][$index20]['ancestor']['contact']['address']['floor'])) {
    $model->history[$index20]->ancestor->contact->address->floor = $jsonData['history'][$index20]['ancestor']['contact']['address']['floor'];

}
if (isset($jsonData['history'][$index20]['ancestor']['contact']['address']['block'])) {
    $model->history[$index20]->ancestor->contact->address->block = $jsonData['history'][$index20]['ancestor']['contact']['address']['block'];

}
if (isset($jsonData['history'][$index20]['ancestor']['contact']['address']['house'])) {
    $model->history[$index20]->ancestor->contact->address->house = $jsonData['history'][$index20]['ancestor']['contact']['address']['house'];

}
if (isset($jsonData['history'][$index20]['ancestor']['contact']['address']['housing'])) {
    $model->history[$index20]->ancestor->contact->address->housing = $jsonData['history'][$index20]['ancestor']['contact']['address']['housing'];

}
if (isset($jsonData['history'][$index20]['ancestor']['contact']['address']['metro'])) {
    $model->history[$index20]->ancestor->contact->address->metro = $jsonData['history'][$index20]['ancestor']['contact']['address']['metro'];

}
if (isset($jsonData['history'][$index20]['ancestor']['contact']['address']['notes'])) {
    $model->history[$index20]->ancestor->contact->address->notes = $jsonData['history'][$index20]['ancestor']['contact']['address']['notes'];

}
if (isset($jsonData['history'][$index20]['ancestor']['contact']['address']['text'])) {
    $model->history[$index20]->ancestor->contact->address->text = $jsonData['history'][$index20]['ancestor']['contact']['address']['text'];

}
if (isset($jsonData['history'][$index20]['ancestor']['contact']['address']['externalId'])) {
    $model->history[$index20]->ancestor->contact->address->externalId = $jsonData['history'][$index20]['ancestor']['contact']['address']['externalId'];

}


}
if (isset($jsonData['history'][$index20]['ancestor']['contact']['segments'])) {
    $model->history[$index20]->ancestor->contact->segments = [];
foreach (array_keys($jsonData['history'][$index20]['ancestor']['contact']['segments']) as $index65) {
    
$model->history[$index20]->ancestor->contact->segments[$index65] = new RetailCrm\Api\Model\Entity\Customers\Segment();
if (isset($jsonData['history'][$index20]['ancestor']['contact']['segments'][$index65]['id'])) {
    $model->history[$index20]->ancestor->contact->segments[$index65]->id = $jsonData['history'][$index20]['ancestor']['contact']['segments'][$index65]['id'];

}
if (isset($jsonData['history'][$index20]['ancestor']['contact']['segments'][$index65]['code'])) {
    $model->history[$index20]->ancestor->contact->segments[$index65]->code = $jsonData['history'][$index20]['ancestor']['contact']['segments'][$index65]['code'];

}
if (isset($jsonData['history'][$index20]['ancestor']['contact']['segments'][$index65]['name'])) {
    $model->history[$index20]->ancestor->contact->segments[$index65]->name = $jsonData['history'][$index20]['ancestor']['contact']['segments'][$index65]['name'];

}
if (isset($jsonData['history'][$index20]['ancestor']['contact']['segments'][$index65]['createdAt'])) {
    $model->history[$index20]->ancestor->contact->segments[$index65]->createdAt = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['history'][$index20]['ancestor']['contact']['segments'][$index65]['createdAt']);

}
if (isset($jsonData['history'][$index20]['ancestor']['contact']['segments'][$index65]['isDynamic'])) {
    $model->history[$index20]->ancestor->contact->segments[$index65]->isDynamic = $jsonData['history'][$index20]['ancestor']['contact']['segments'][$index65]['isDynamic'];

}
if (isset($jsonData['history'][$index20]['ancestor']['contact']['segments'][$index65]['customersCount'])) {
    $model->history[$index20]->ancestor->contact->segments[$index65]->customersCount = $jsonData['history'][$index20]['ancestor']['contact']['segments'][$index65]['customersCount'];

}
if (isset($jsonData['history'][$index20]['ancestor']['contact']['segments'][$index65]['active'])) {
    $model->history[$index20]->ancestor->contact->segments[$index65]->active = $jsonData['history'][$index20]['ancestor']['contact']['segments'][$index65]['active'];

}


}

}
if (isset($jsonData['history'][$index20]['ancestor']['contact']['maturationTime'])) {
    $model->history[$index20]->ancestor->contact->maturationTime = $jsonData['history'][$index20]['ancestor']['contact']['maturationTime'];

}
if (isset($jsonData['history'][$index20]['ancestor']['contact']['firstName'])) {
    $model->history[$index20]->ancestor->contact->firstName = $jsonData['history'][$index20]['ancestor']['contact']['firstName'];

}
if (isset($jsonData['history'][$index20]['ancestor']['contact']['lastName'])) {
    $model->history[$index20]->ancestor->contact->lastName = $jsonData['history'][$index20]['ancestor']['contact']['lastName'];

}
if (isset($jsonData['history'][$index20]['ancestor']['contact']['patronymic'])) {
    $model->history[$index20]->ancestor->contact->patronymic = $jsonData['history'][$index20]['ancestor']['contact']['patronymic'];

}
if (isset($jsonData['history'][$index20]['ancestor']['contact']['sex'])) {
    $model->history[$index20]->ancestor->contact->sex = $jsonData['history'][$index20]['ancestor']['contact']['sex'];

}
if (isset($jsonData['history'][$index20]['ancestor']['contact']['presumableSex'])) {
    $model->history[$index20]->ancestor->contact->presumableSex = $jsonData['history'][$index20]['ancestor']['contact']['presumableSex'];

}
if (isset($jsonData['history'][$index20]['ancestor']['contact']['email'])) {
    $model->history[$index20]->ancestor->contact->email = $jsonData['history'][$index20]['ancestor']['contact']['email'];

}
if (isset($jsonData['history'][$index20]['ancestor']['contact']['emailMarketingUnsubscribedAt'])) {
    $model->history[$index20]->ancestor->contact->emailMarketingUnsubscribedAt = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['history'][$index20]['ancestor']['contact']['emailMarketingUnsubscribedAt']);

}
if (isset($jsonData['history'][$index20]['ancestor']['contact']['phones'])) {
    $model->history[$index20]->ancestor->contact->phones = [];
foreach (array_keys($jsonData['history'][$index20]['ancestor']['contact']['phones']) as $index63) {
    
$model->history[$index20]->ancestor->contact->phones[$index63] = new RetailCrm\Api\Model\Entity\Customers\CustomerPhone();
if (isset($jsonData['history'][$index20]['ancestor']['contact']['phones'][$index63]['number'])) {
    $model->history[$index20]->ancestor->contact->phones[$index63]->number = $jsonData['history'][$index20]['ancestor']['contact']['phones'][$index63]['number'];

}


}

}
if (isset($jsonData['history'][$index20]['ancestor']['contact']['birthday'])) {
    $model->history[$index20]->ancestor->contact->birthday = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['history'][$index20]['ancestor']['contact']['birthday']);

}
if (isset($jsonData['history'][$index20]['ancestor']['contact']['source'])) {
    
$model->history[$index20]->ancestor->contact->source = new RetailCrm\Api\Model\Entity\Source();
if (isset($jsonData['history'][$index20]['ancestor']['contact']['source']['source'])) {
    $model->history[$index20]->ancestor->contact->source->source = $jsonData['history'][$index20]['ancestor']['contact']['source']['source'];

}
if (isset($jsonData['history'][$index20]['ancestor']['contact']['source']['medium'])) {
    $model->history[$index20]->ancestor->contact->source->medium = $jsonData['history'][$index20]['ancestor']['contact']['source']['medium'];

}
if (isset($jsonData['history'][$index20]['ancestor']['contact']['source']['campaign'])) {
    $model->history[$index20]->ancestor->contact->source->campaign = $jsonData['history'][$index20]['ancestor']['contact']['source']['campaign'];

}
if (isset($jsonData['history'][$index20]['ancestor']['contact']['source']['keyword'])) {
    $model->history[$index20]->ancestor->contact->source->keyword = $jsonData['history'][$index20]['ancestor']['contact']['source']['keyword'];

}
if (isset($jsonData['history'][$index20]['ancestor']['contact']['source']['content'])) {
    $model->history[$index20]->ancestor->contact->source->content = $jsonData['history'][$index20]['ancestor']['contact']['source']['content'];

}


}
if (isset($jsonData['history'][$index20]['ancestor']['contact']['photoUrl'])) {
    $model->history[$index20]->ancestor->contact->photoUrl = $jsonData['history'][$index20]['ancestor']['contact']['photoUrl'];

}
if (isset($jsonData['history'][$index20]['ancestor']['contact']['mgCustomerId'])) {
    $model->history[$index20]->ancestor->contact->mgCustomerId = $jsonData['history'][$index20]['ancestor']['contact']['mgCustomerId'];

}
if (isset($jsonData['history'][$index20]['ancestor']['contact']['subscribed'])) {
    $model->history[$index20]->ancestor->contact->subscribed = $jsonData['history'][$index20]['ancestor']['contact']['subscribed'];

}


}
if (isset($jsonData['history'][$index20]['ancestor']['company'])) {
    
$model->history[$index20]->ancestor->company = new RetailCrm\Api\Model\Entity\CustomersCorporate\Company();
if (isset($jsonData['history'][$index20]['ancestor']['company']['id'])) {
    $model->history[$index20]->ancestor->company->id = $jsonData['history'][$index20]['ancestor']['company']['id'];

}
if (isset($jsonData['history'][$index20]['ancestor']['company']['isMain'])) {
    $model->history[$index20]->ancestor->company->isMain = $jsonData['history'][$index20]['ancestor']['company']['isMain'];

}
if (isset($jsonData['history'][$index20]['ancestor']['company']['externalId'])) {
    $model->history[$index20]->ancestor->company->externalId = $jsonData['history'][$index20]['ancestor']['company']['externalId'];

}
if (isset($jsonData['history'][$index20]['ancestor']['company']['active'])) {
    $model->history[$index20]->ancestor->company->active = $jsonData['history'][$index20]['ancestor']['company']['active'];

}
if (isset($jsonData['history'][$index20]['ancestor']['company']['name'])) {
    $model->history[$index20]->ancestor->company->name = $jsonData['history'][$index20]['ancestor']['company']['name'];

}
if (isset($jsonData['history'][$index20]['ancestor']['company']['brand'])) {
    $model->history[$index20]->ancestor->company->brand = $jsonData['history'][$index20]['ancestor']['company']['brand'];

}
if (isset($jsonData['history'][$index20]['ancestor']['company']['site'])) {
    $model->history[$index20]->ancestor->company->site = $jsonData['history'][$index20]['ancestor']['company']['site'];

}
if (isset($jsonData['history'][$index20]['ancestor']['company']['createdAt'])) {
    $model->history[$index20]->ancestor->company->createdAt = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['history'][$index20]['ancestor']['company']['createdAt']);

}
if (isset($jsonData['history'][$index20]['ancestor']['company']['customer'])) {
    
$model->history[$index20]->ancestor->company->customer = new RetailCrm\Api\Model\Entity\CustomersCorporate\SerializedEntityCustomer();
if (isset($jsonData['history'][$index20]['ancestor']['company']['customer']['site'])) {
    $model->history[$index20]->ancestor->company->customer->site = $jsonData['history'][$index20]['ancestor']['company']['customer']['site'];

}
if (isset($jsonData['history'][$index20]['ancestor']['company']['customer']['id'])) {
    $model->history[$index20]->ancestor->company->customer->id = $jsonData['history'][$index20]['ancestor']['company']['customer']['id'];

}
if (isset($jsonData['history'][$index20]['ancestor']['company']['customer']['externalId'])) {
    $model->history[$index20]->ancestor->company->customer->externalId = $jsonData['history'][$index20]['ancestor']['company']['customer']['externalId'];

}
if (isset($jsonData['history'][$index20]['ancestor']['company']['customer']['type'])) {
    $model->history[$index20]->ancestor->company->customer->type = $jsonData['history'][$index20]['ancestor']['company']['customer']['type'];

}


}
if (isset($jsonData['history'][$index20]['ancestor']['company']['contragent'])) {
    
$model->history[$index20]->ancestor->company->contragent = new RetailCrm\Api\Model\Entity\Customers\CustomerContragent();
if (isset($jsonData['history'][$index20]['ancestor']['company']['contragent']['contragentType'])) {
    $model->history[$index20]->ancestor->company->contragent->contragentType = $jsonData['history'][$index20]['ancestor']['company']['contragent']['contragentType'];

}
if (isset($jsonData['history'][$index20]['ancestor']['company']['contragent']['legalName'])) {
    $model->history[$index20]->ancestor->company->contragent->legalName = $jsonData['history'][$index20]['ancestor']['company']['contragent']['legalName'];

}
if (isset($jsonData['history'][$index20]['ancestor']['company']['contragent']['legalAddress'])) {
    $model->history[$index20]->ancestor->company->contragent->legalAddress = $jsonData['history'][$index20]['ancestor']['company']['contragent']['legalAddress'];

}
if (isset($jsonData['history'][$index20]['ancestor']['company']['contragent']['INN'])) {
    $model->history[$index20]->ancestor->company->contragent->INN = $jsonData['history'][$index20]['ancestor']['company']['contragent']['INN'];

}
if (isset($jsonData['history'][$index20]['ancestor']['company']['contragent']['OKPO'])) {
    $model->history[$index20]->ancestor->company->contragent->OKPO = $jsonData['history'][$index20]['ancestor']['company']['contragent']['OKPO'];

}
if (isset($jsonData['history'][$index20]['ancestor']['company']['contragent']['KPP'])) {
    $model->history[$index20]->ancestor->company->contragent->KPP = $jsonData['history'][$index20]['ancestor']['company']['contragent']['KPP'];

}
if (isset($jsonData['history'][$index20]['ancestor']['company']['contragent']['OGRN'])) {
    $model->history[$index20]->ancestor->company->contragent->OGRN = $jsonData['history'][$index20]['ancestor']['company']['contragent']['OGRN'];

}
if (isset($jsonData['history'][$index20]['ancestor']['company']['contragent']['OGRNIP'])) {
    $model->history[$index20]->ancestor->company->contragent->OGRNIP = $jsonData['history'][$index20]['ancestor']['company']['contragent']['OGRNIP'];

}
if (isset($jsonData['history'][$index20]['ancestor']['company']['contragent']['certificateNumber'])) {
    $model->history[$index20]->ancestor->company->contragent->certificateNumber = $jsonData['history'][$index20]['ancestor']['company']['contragent']['certificateNumber'];

}
if (isset($jsonData['history'][$index20]['ancestor']['company']['contragent']['certificateDate'])) {
    $model->history[$index20]->ancestor->company->contragent->certificateDate = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['history'][$index20]['ancestor']['company']['contragent']['certificateDate']);

}
if (isset($jsonData['history'][$index20]['ancestor']['company']['contragent']['BIK'])) {
    $model->history[$index20]->ancestor->company->contragent->BIK = $jsonData['history'][$index20]['ancestor']['company']['contragent']['BIK'];

}
if (isset($jsonData['history'][$index20]['ancestor']['company']['contragent']['bank'])) {
    $model->history[$index20]->ancestor->company->contragent->bank = $jsonData['history'][$index20]['ancestor']['company']['contragent']['bank'];

}
if (isset($jsonData['history'][$index20]['ancestor']['company']['contragent']['bankAddress'])) {
    $model->history[$index20]->ancestor->company->contragent->bankAddress = $jsonData['history'][$index20]['ancestor']['company']['contragent']['bankAddress'];

}
if (isset($jsonData['history'][$index20]['ancestor']['company']['contragent']['corrAccount'])) {
    $model->history[$index20]->ancestor->company->contragent->corrAccount = $jsonData['history'][$index20]['ancestor']['company']['contragent']['corrAccount'];

}
if (isset($jsonData['history'][$index20]['ancestor']['company']['contragent']['bankAccount'])) {
    $model->history[$index20]->ancestor->company->contragent->bankAccount = $jsonData['history'][$index20]['ancestor']['company']['contragent']['bankAccount'];

}


}
if (isset($jsonData['history'][$index20]['ancestor']['company']['address'])) {
    
$model->history[$index20]->ancestor->company->address = new RetailCrm\Api\Model\Entity\Customers\CustomerAddress();
if (isset($jsonData['history'][$index20]['ancestor']['company']['address']['id'])) {
    $model->history[$index20]->ancestor->company->address->id = $jsonData['history'][$index20]['ancestor']['company']['address']['id'];

}
if (isset($jsonData['history'][$index20]['ancestor']['company']['address']['name'])) {
    $model->history[$index20]->ancestor->company->address->name = $jsonData['history'][$index20]['ancestor']['company']['address']['name'];

}
if (isset($jsonData['history'][$index20]['ancestor']['company']['address']['isMain'])) {
    $model->history[$index20]->ancestor->company->address->isMain = $jsonData['history'][$index20]['ancestor']['company']['address']['isMain'];

}
if (isset($jsonData['history'][$index20]['ancestor']['company']['address']['index'])) {
    $model->history[$index20]->ancestor->company->address->index = $jsonData['history'][$index20]['ancestor']['company']['address']['index'];

}
if (isset($jsonData['history'][$index20]['ancestor']['company']['address']['countryIso'])) {
    $model->history[$index20]->ancestor->company->address->countryIso = $jsonData['history'][$index20]['ancestor']['company']['address']['countryIso'];

}
if (isset($jsonData['history'][$index20]['ancestor']['company']['address']['region'])) {
    $model->history[$index20]->ancestor->company->address->region = $jsonData['history'][$index20]['ancestor']['company']['address']['region'];

}
if (isset($jsonData['history'][$index20]['ancestor']['company']['address']['regionId'])) {
    $model->history[$index20]->ancestor->company->address->regionId = $jsonData['history'][$index20]['ancestor']['company']['address']['regionId'];

}
if (isset($jsonData['history'][$index20]['ancestor']['company']['address']['city'])) {
    $model->history[$index20]->ancestor->company->address->city = $jsonData['history'][$index20]['ancestor']['company']['address']['city'];

}
if (isset($jsonData['history'][$index20]['ancestor']['company']['address']['cityId'])) {
    $model->history[$index20]->ancestor->company->address->cityId = $jsonData['history'][$index20]['ancestor']['company']['address']['cityId'];

}
if (isset($jsonData['history'][$index20]['ancestor']['company']['address']['cityType'])) {
    $model->history[$index20]->ancestor->company->address->cityType = $jsonData['history'][$index20]['ancestor']['company']['address']['cityType'];

}
if (isset($jsonData['history'][$index20]['ancestor']['company']['address']['street'])) {
    $model->history[$index20]->ancestor->company->address->street = $jsonData['history'][$index20]['ancestor']['company']['address']['street'];

}
if (isset($jsonData['history'][$index20]['ancestor']['company']['address']['streetId'])) {
    $model->history[$index20]->ancestor->company->address->streetId = $jsonData['history'][$index20]['ancestor']['company']['address']['streetId'];

}
if (isset($jsonData['history'][$index20]['ancestor']['company']['address']['streetType'])) {
    $model->history[$index20]->ancestor->company->address->streetType = $jsonData['history'][$index20]['ancestor']['company']['address']['streetType'];

}
if (isset($jsonData['history'][$index20]['ancestor']['company']['address']['building'])) {
    $model->history[$index20]->ancestor->company->address->building = $jsonData['history'][$index20]['ancestor']['company']['address']['building'];

}
if (isset($jsonData['history'][$index20]['ancestor']['company']['address']['flat'])) {
    $model->history[$index20]->ancestor->company->address->flat = $jsonData['history'][$index20]['ancestor']['company']['address']['flat'];

}
if (isset($jsonData['history'][$index20]['ancestor']['company']['address']['floor'])) {
    $model->history[$index20]->ancestor->company->address->floor = $jsonData['history'][$index20]['ancestor']['company']['address']['floor'];

}
if (isset($jsonData['history'][$index20]['ancestor']['company']['address']['block'])) {
    $model->history[$index20]->ancestor->company->address->block = $jsonData['history'][$index20]['ancestor']['company']['address']['block'];

}
if (isset($jsonData['history'][$index20]['ancestor']['company']['address']['house'])) {
    $model->history[$index20]->ancestor->company->address->house = $jsonData['history'][$index20]['ancestor']['company']['address']['house'];

}
if (isset($jsonData['history'][$index20]['ancestor']['company']['address']['housing'])) {
    $model->history[$index20]->ancestor->company->address->housing = $jsonData['history'][$index20]['ancestor']['company']['address']['housing'];

}
if (isset($jsonData['history'][$index20]['ancestor']['company']['address']['metro'])) {
    $model->history[$index20]->ancestor->company->address->metro = $jsonData['history'][$index20]['ancestor']['company']['address']['metro'];

}
if (isset($jsonData['history'][$index20]['ancestor']['company']['address']['notes'])) {
    $model->history[$index20]->ancestor->company->address->notes = $jsonData['history'][$index20]['ancestor']['company']['address']['notes'];

}
if (isset($jsonData['history'][$index20]['ancestor']['company']['address']['text'])) {
    $model->history[$index20]->ancestor->company->address->text = $jsonData['history'][$index20]['ancestor']['company']['address']['text'];

}
if (isset($jsonData['history'][$index20]['ancestor']['company']['address']['externalId'])) {
    $model->history[$index20]->ancestor->company->address->externalId = $jsonData['history'][$index20]['ancestor']['company']['address']['externalId'];

}


}
if (isset($jsonData['history'][$index20]['ancestor']['company']['customFields'])) {
    $model->history[$index20]->ancestor->company->customFields = [];
foreach (array_keys($jsonData['history'][$index20]['ancestor']['company']['customFields']) as $index69) {
    $model->history[$index20]->ancestor->company->customFields[$index69] = $jsonData['history'][$index20]['ancestor']['company']['customFields'][$index69];

}

}
if (isset($jsonData['history'][$index20]['ancestor']['company']['marginSumm'])) {
    $model->history[$index20]->ancestor->company->marginSumm = (float) $jsonData['history'][$index20]['ancestor']['company']['marginSumm'];

}
if (isset($jsonData['history'][$index20]['ancestor']['company']['totalSumm'])) {
    $model->history[$index20]->ancestor->company->totalSumm = (float) $jsonData['history'][$index20]['ancestor']['company']['totalSumm'];

}
if (isset($jsonData['history'][$index20]['ancestor']['company']['averageSumm'])) {
    $model->history[$index20]->ancestor->company->averageSumm = (float) $jsonData['history'][$index20]['ancestor']['company']['averageSumm'];

}
if (isset($jsonData['history'][$index20]['ancestor']['company']['ordersCount'])) {
    $model->history[$index20]->ancestor->company->ordersCount = $jsonData['history'][$index20]['ancestor']['company']['ordersCount'];

}
if (isset($jsonData['history'][$index20]['ancestor']['company']['costSumm'])) {
    $model->history[$index20]->ancestor->company->costSumm = (float) $jsonData['history'][$index20]['ancestor']['company']['costSumm'];

}


}
if (isset($jsonData['history'][$index20]['ancestor']['contragent'])) {
    
$model->history[$index20]->ancestor->contragent = new RetailCrm\Api\Model\Entity\Order\OrderContragent();
if (isset($jsonData['history'][$index20]['ancestor']['contragent']['contragentType'])) {
    $model->history[$index20]->ancestor->contragent->contragentType = $jsonData['history'][$index20]['ancestor']['contragent']['contragentType'];

}
if (isset($jsonData['history'][$index20]['ancestor']['contragent']['legalName'])) {
    $model->history[$index20]->ancestor->contragent->legalName = $jsonData['history'][$index20]['ancestor']['contragent']['legalName'];

}
if (isset($jsonData['history'][$index20]['ancestor']['contragent']['legalAddress'])) {
    $model->history[$index20]->ancestor->contragent->legalAddress = $jsonData['history'][$index20]['ancestor']['contragent']['legalAddress'];

}
if (isset($jsonData['history'][$index20]['ancestor']['contragent']['INN'])) {
    $model->history[$index20]->ancestor->contragent->INN = $jsonData['history'][$index20]['ancestor']['contragent']['INN'];

}
if (isset($jsonData['history'][$index20]['ancestor']['contragent']['OKPO'])) {
    $model->history[$index20]->ancestor->contragent->OKPO = $jsonData['history'][$index20]['ancestor']['contragent']['OKPO'];

}
if (isset($jsonData['history'][$index20]['ancestor']['contragent']['KPP'])) {
    $model->history[$index20]->ancestor->contragent->KPP = $jsonData['history'][$index20]['ancestor']['contragent']['KPP'];

}
if (isset($jsonData['history'][$index20]['ancestor']['contragent']['OGRN'])) {
    $model->history[$index20]->ancestor->contragent->OGRN = $jsonData['history'][$index20]['ancestor']['contragent']['OGRN'];

}
if (isset($jsonData['history'][$index20]['ancestor']['contragent']['OGRNIP'])) {
    $model->history[$index20]->ancestor->contragent->OGRNIP = $jsonData['history'][$index20]['ancestor']['contragent']['OGRNIP'];

}
if (isset($jsonData['history'][$index20]['ancestor']['contragent']['certificateNumber'])) {
    $model->history[$index20]->ancestor->contragent->certificateNumber = $jsonData['history'][$index20]['ancestor']['contragent']['certificateNumber'];

}
if (isset($jsonData['history'][$index20]['ancestor']['contragent']['certificateDate'])) {
    $model->history[$index20]->ancestor->contragent->certificateDate = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['history'][$index20]['ancestor']['contragent']['certificateDate']);

}
if (isset($jsonData['history'][$index20]['ancestor']['contragent']['BIK'])) {
    $model->history[$index20]->ancestor->contragent->BIK = $jsonData['history'][$index20]['ancestor']['contragent']['BIK'];

}
if (isset($jsonData['history'][$index20]['ancestor']['contragent']['bank'])) {
    $model->history[$index20]->ancestor->contragent->bank = $jsonData['history'][$index20]['ancestor']['contragent']['bank'];

}
if (isset($jsonData['history'][$index20]['ancestor']['contragent']['bankAddress'])) {
    $model->history[$index20]->ancestor->contragent->bankAddress = $jsonData['history'][$index20]['ancestor']['contragent']['bankAddress'];

}
if (isset($jsonData['history'][$index20]['ancestor']['contragent']['corrAccount'])) {
    $model->history[$index20]->ancestor->contragent->corrAccount = $jsonData['history'][$index20]['ancestor']['contragent']['corrAccount'];

}
if (isset($jsonData['history'][$index20]['ancestor']['contragent']['bankAccount'])) {
    $model->history[$index20]->ancestor->contragent->bankAccount = $jsonData['history'][$index20]['ancestor']['contragent']['bankAccount'];

}


}
if (isset($jsonData['history'][$index20]['ancestor']['delivery'])) {
    
$model->history[$index20]->ancestor->delivery = new RetailCrm\Api\Model\Entity\Order\Delivery\SerializedOrderDelivery();
if (isset($jsonData['history'][$index20]['ancestor']['delivery']['code'])) {
    $model->history[$index20]->ancestor->delivery->code = $jsonData['history'][$index20]['ancestor']['delivery']['code'];

}
if (isset($jsonData['history'][$index20]['ancestor']['delivery']['integrationCode'])) {
    $model->history[$index20]->ancestor->delivery->integrationCode = $jsonData['history'][$index20]['ancestor']['delivery']['integrationCode'];

}
if (isset($jsonData['history'][$index20]['ancestor']['delivery']['data'])) {
    
$model->history[$index20]->ancestor->delivery->data = new RetailCrm\Api\Model\Entity\Order\Delivery\DeliveryData();
if (isset($jsonData['history'][$index20]['ancestor']['delivery']['data']['externalId'])) {
    $model->history[$index20]->ancestor->delivery->data->externalId = $jsonData['history'][$index20]['ancestor']['delivery']['data']['externalId'];

}
if (isset($jsonData['history'][$index20]['ancestor']['delivery']['data']['trackNumber'])) {
    $model->history[$index20]->ancestor->delivery->data->trackNumber = $jsonData['history'][$index20]['ancestor']['delivery']['data']['trackNumber'];

}
if (isset($jsonData['history'][$index20]['ancestor']['delivery']['data']['status'])) {
    $model->history[$index20]->ancestor->delivery->data->status = $jsonData['history'][$index20]['ancestor']['delivery']['data']['status'];

}
if (isset($jsonData['history'][$index20]['ancestor']['delivery']['data']['locked'])) {
    $model->history[$index20]->ancestor->delivery->data->locked = $jsonData['history'][$index20]['ancestor']['delivery']['data']['locked'];

}
if (isset($jsonData['history'][$index20]['ancestor']['delivery']['data']['pickuppointAddress'])) {
    $model->history[$index20]->ancestor->delivery->data->pickuppointAddress = $jsonData['history'][$index20]['ancestor']['delivery']['data']['pickuppointAddress'];

}
if (isset($jsonData['history'][$index20]['ancestor']['delivery']['data']['days'])) {
    $model->history[$index20]->ancestor->delivery->data->days = $jsonData['history'][$index20]['ancestor']['delivery']['data']['days'];

}
if (isset($jsonData['history'][$index20]['ancestor']['delivery']['data']['statusText'])) {
    $model->history[$index20]->ancestor->delivery->data->statusText = $jsonData['history'][$index20]['ancestor']['delivery']['data']['statusText'];

}
if (isset($jsonData['history'][$index20]['ancestor']['delivery']['data']['statusDate'])) {
    $model->history[$index20]->ancestor->delivery->data->statusDate = \DateTime::createFromFormat('Y-m-d', $jsonData['history'][$index20]['ancestor']['delivery']['data']['statusDate']);

}
if (isset($jsonData['history'][$index20]['ancestor']['delivery']['data']['tariff'])) {
    $model->history[$index20]->ancestor->delivery->data->tariff = $jsonData['history'][$index20]['ancestor']['delivery']['data']['tariff'];

}
if (isset($jsonData['history'][$index20]['ancestor']['delivery']['data']['tariffName'])) {
    $model->history[$index20]->ancestor->delivery->data->tariffName = $jsonData['history'][$index20]['ancestor']['delivery']['data']['tariffName'];

}
if (isset($jsonData['history'][$index20]['ancestor']['delivery']['data']['pickuppointId'])) {
    $model->history[$index20]->ancestor->delivery->data->pickuppointId = $jsonData['history'][$index20]['ancestor']['delivery']['data']['pickuppointId'];

}
if (isset($jsonData['history'][$index20]['ancestor']['delivery']['data']['pickuppointSchedule'])) {
    $model->history[$index20]->ancestor->delivery->data->pickuppointSchedule = $jsonData['history'][$index20]['ancestor']['delivery']['data']['pickuppointSchedule'];

}
if (isset($jsonData['history'][$index20]['ancestor']['delivery']['data']['pickuppointPhone'])) {
    $model->history[$index20]->ancestor->delivery->data->pickuppointPhone = $jsonData['history'][$index20]['ancestor']['delivery']['data']['pickuppointPhone'];

}
if (isset($jsonData['history'][$index20]['ancestor']['delivery']['data']['payerType'])) {
    $model->history[$index20]->ancestor->delivery->data->payerType = $jsonData['history'][$index20]['ancestor']['delivery']['data']['payerType'];

}
if (isset($jsonData['history'][$index20]['ancestor']['delivery']['data']['statusComment'])) {
    $model->history[$index20]->ancestor->delivery->data->statusComment = $jsonData['history'][$index20]['ancestor']['delivery']['data']['statusComment'];

}
if (isset($jsonData['history'][$index20]['ancestor']['delivery']['data']['cost'])) {
    $model->history[$index20]->ancestor->delivery->data->cost = (float) $jsonData['history'][$index20]['ancestor']['delivery']['data']['cost'];

}
if (isset($jsonData['history'][$index20]['ancestor']['delivery']['data']['minTerm'])) {
    $model->history[$index20]->ancestor->delivery->data->minTerm = $jsonData['history'][$index20]['ancestor']['delivery']['data']['minTerm'];

}
if (isset($jsonData['history'][$index20]['ancestor']['delivery']['data']['maxTerm'])) {
    $model->history[$index20]->ancestor->delivery->data->maxTerm = $jsonData['history'][$index20]['ancestor']['delivery']['data']['maxTerm'];

}
if (isset($jsonData['history'][$index20]['ancestor']['delivery']['data']['shipmentpointId'])) {
    $model->history[$index20]->ancestor->delivery->data->shipmentpointId = $jsonData['history'][$index20]['ancestor']['delivery']['data']['shipmentpointId'];

}
if (isset($jsonData['history'][$index20]['ancestor']['delivery']['data']['shipmentpointName'])) {
    $model->history[$index20]->ancestor->delivery->data->shipmentpointName = $jsonData['history'][$index20]['ancestor']['delivery']['data']['shipmentpointName'];

}
if (isset($jsonData['history'][$index20]['ancestor']['delivery']['data']['shipmentpointAddress'])) {
    $model->history[$index20]->ancestor->delivery->data->shipmentpointAddress = $jsonData['history'][$index20]['ancestor']['delivery']['data']['shipmentpointAddress'];

}
if (isset($jsonData['history'][$index20]['ancestor']['delivery']['data']['shipmentpointSchedule'])) {
    $model->history[$index20]->ancestor->delivery->data->shipmentpointSchedule = $jsonData['history'][$index20]['ancestor']['delivery']['data']['shipmentpointSchedule'];

}
if (isset($jsonData['history'][$index20]['ancestor']['delivery']['data']['shipmentpointPhone'])) {
    $model->history[$index20]->ancestor->delivery->data->shipmentpointPhone = $jsonData['history'][$index20]['ancestor']['delivery']['data']['shipmentpointPhone'];

}
if (isset($jsonData['history'][$index20]['ancestor']['delivery']['data']['shipmentpointCoordinateLatitude'])) {
    $model->history[$index20]->ancestor->delivery->data->shipmentpointCoordinateLatitude = $jsonData['history'][$index20]['ancestor']['delivery']['data']['shipmentpointCoordinateLatitude'];

}
if (isset($jsonData['history'][$index20]['ancestor']['delivery']['data']['shipmentpointCoordinateLongitude'])) {
    $model->history[$index20]->ancestor->delivery->data->shipmentpointCoordinateLongitude = $jsonData['history'][$index20]['ancestor']['delivery']['data']['shipmentpointCoordinateLongitude'];

}
if (isset($jsonData['history'][$index20]['ancestor']['delivery']['data']['pickuppointName'])) {
    $model->history[$index20]->ancestor->delivery->data->pickuppointName = $jsonData['history'][$index20]['ancestor']['delivery']['data']['pickuppointName'];

}
if (isset($jsonData['history'][$index20]['ancestor']['delivery']['data']['pickuppointCoordinateLatitude'])) {
    $model->history[$index20]->ancestor->delivery->data->pickuppointCoordinateLatitude = $jsonData['history'][$index20]['ancestor']['delivery']['data']['pickuppointCoordinateLatitude'];

}
if (isset($jsonData['history'][$index20]['ancestor']['delivery']['data']['pickuppointCoordinateLongitude'])) {
    $model->history[$index20]->ancestor->delivery->data->pickuppointCoordinateLongitude = $jsonData['history'][$index20]['ancestor']['delivery']['data']['pickuppointCoordinateLongitude'];

}
if (isset($jsonData['history'][$index20]['ancestor']['delivery']['data']['extraData'])) {
    $model->history[$index20]->ancestor->delivery->data->extraData = [];
foreach (array_keys($jsonData['history'][$index20]['ancestor']['delivery']['data']['extraData']) as $index75) {
    $model->history[$index20]->ancestor->delivery->data->extraData[$index75] = $jsonData['history'][$index20]['ancestor']['delivery']['data']['extraData'][$index75];

}

}
if (isset($jsonData['history'][$index20]['ancestor']['delivery']['data']['packages'])) {
    $model->history[$index20]->ancestor->delivery->data->packages = [];
foreach (array_keys($jsonData['history'][$index20]['ancestor']['delivery']['data']['packages']) as $index74) {
    
$model->history[$index20]->ancestor->delivery->data->packages[$index74] = new RetailCrm\Api\Model\Entity\Order\Delivery\Package();
if (isset($jsonData['history'][$index20]['ancestor']['delivery']['data']['packages'][$index74]['packageId'])) {
    $model->history[$index20]->ancestor->delivery->data->packages[$index74]->packageId = $jsonData['history'][$index20]['ancestor']['delivery']['data']['packages'][$index74]['packageId'];

}
if (isset($jsonData['history'][$index20]['ancestor']['delivery']['data']['packages'][$index74]['weight'])) {
    $model->history[$index20]->ancestor->delivery->data->packages[$index74]->weight = (float) $jsonData['history'][$index20]['ancestor']['delivery']['data']['packages'][$index74]['weight'];

}
if (isset($jsonData['history'][$index20]['ancestor']['delivery']['data']['packages'][$index74]['length'])) {
    $model->history[$index20]->ancestor->delivery->data->packages[$index74]->length = $jsonData['history'][$index20]['ancestor']['delivery']['data']['packages'][$index74]['length'];

}
if (isset($jsonData['history'][$index20]['ancestor']['delivery']['data']['packages'][$index74]['width'])) {
    $model->history[$index20]->ancestor->delivery->data->packages[$index74]->width = $jsonData['history'][$index20]['ancestor']['delivery']['data']['packages'][$index74]['width'];

}
if (isset($jsonData['history'][$index20]['ancestor']['delivery']['data']['packages'][$index74]['height'])) {
    $model->history[$index20]->ancestor->delivery->data->packages[$index74]->height = $jsonData['history'][$index20]['ancestor']['delivery']['data']['packages'][$index74]['height'];

}
if (isset($jsonData['history'][$index20]['ancestor']['delivery']['data']['packages'][$index74]['items'])) {
    $model->history[$index20]->ancestor->delivery->data->packages[$index74]->items = [];
foreach (array_keys($jsonData['history'][$index20]['ancestor']['delivery']['data']['packages'][$index74]['items']) as $index93) {
    
$model->history[$index20]->ancestor->delivery->data->packages[$index74]->items[$index93] = new RetailCrm\Api\Model\Entity\Order\Delivery\PackageItem();
if (isset($jsonData['history'][$index20]['ancestor']['delivery']['data']['packages'][$index74]['items'][$index93]['orderProduct'])) {
    
$model->history[$index20]->ancestor->delivery->data->packages[$index74]->items[$index93]->orderProduct = new RetailCrm\Api\Model\Entity\Order\Delivery\PackageItemOrderProduct();
if (isset($jsonData['history'][$index20]['ancestor']['delivery']['data']['packages'][$index74]['items'][$index93]['orderProduct']['id'])) {
    $model->history[$index20]->ancestor->delivery->data->packages[$index74]->items[$index93]->orderProduct->id = $jsonData['history'][$index20]['ancestor']['delivery']['data']['packages'][$index74]['items'][$index93]['orderProduct']['id'];

}
if (isset($jsonData['history'][$index20]['ancestor']['delivery']['data']['packages'][$index74]['items'][$index93]['orderProduct']['externalId'])) {
    $model->history[$index20]->ancestor->delivery->data->packages[$index74]->items[$index93]->orderProduct->externalId = $jsonData['history'][$index20]['ancestor']['delivery']['data']['packages'][$index74]['items'][$index93]['orderProduct']['externalId'];

}
if (isset($jsonData['history'][$index20]['ancestor']['delivery']['data']['packages'][$index74]['items'][$index93]['orderProduct']['externalIds'])) {
    $model->history[$index20]->ancestor->delivery->data->packages[$index74]->items[$index93]->orderProduct->externalIds = [];
foreach (array_keys($jsonData['history'][$index20]['ancestor']['delivery']['data']['packages'][$index74]['items'][$index93]['orderProduct']['externalIds']) as $index134) {
    
$model->history[$index20]->ancestor->delivery->data->packages[$index74]->items[$index93]->orderProduct->externalIds[$index134] = new RetailCrm\Api\Model\Entity\CodeValueModel();
if (isset($jsonData['history'][$index20]['ancestor']['delivery']['data']['packages'][$index74]['items'][$index93]['orderProduct']['externalIds'][$index134]['code'])) {
    $model->history[$index20]->ancestor->delivery->data->packages[$index74]->items[$index93]->orderProduct->externalIds[$index134]->code = $jsonData['history'][$index20]['ancestor']['delivery']['data']['packages'][$index74]['items'][$index93]['orderProduct']['externalIds'][$index134]['code'];

}
if (isset($jsonData['history'][$index20]['ancestor']['delivery']['data']['packages'][$index74]['items'][$index93]['orderProduct']['externalIds'][$index134]['value'])) {
    $model->history[$index20]->ancestor->delivery->data->packages[$index74]->items[$index93]->orderProduct->externalIds[$index134]->value = $jsonData['history'][$index20]['ancestor']['delivery']['data']['packages'][$index74]['items'][$index93]['orderProduct']['externalIds'][$index134]['value'];

}


}

}


}
if (isset($jsonData['history'][$index20]['ancestor']['delivery']['data']['packages'][$index74]['items'][$index93]['quantity'])) {
    $model->history[$index20]->ancestor->delivery->data->packages[$index74]->items[$index93]->quantity = (float) $jsonData['history'][$index20]['ancestor']['delivery']['data']['packages'][$index74]['items'][$index93]['quantity'];

}


}

}


}

}
if (isset($jsonData['history'][$index20]['ancestor']['delivery']['data']['returnExternalId'])) {
    $model->history[$index20]->ancestor->delivery->data->returnExternalId = $jsonData['history'][$index20]['ancestor']['delivery']['data']['returnExternalId'];

}
if (isset($jsonData['history'][$index20]['ancestor']['delivery']['data']['deliveryName'])) {
    $model->history[$index20]->ancestor->delivery->data->deliveryName = $jsonData['history'][$index20]['ancestor']['delivery']['data']['deliveryName'];

}
if (isset($jsonData['history'][$index20]['ancestor']['delivery']['data']['price'])) {
    $model->history[$index20]->ancestor->delivery->data->price = (float) $jsonData['history'][$index20]['ancestor']['delivery']['data']['price'];

}
if (isset($jsonData['history'][$index20]['ancestor']['delivery']['data']['insurancePrice'])) {
    $model->history[$index20]->ancestor->delivery->data->insurancePrice = (float) $jsonData['history'][$index20]['ancestor']['delivery']['data']['insurancePrice'];

}
if (isset($jsonData['history'][$index20]['ancestor']['delivery']['data']['tariffType'])) {
    $model->history[$index20]->ancestor->delivery->data->tariffType = $jsonData['history'][$index20]['ancestor']['delivery']['data']['tariffType'];

}
if (isset($jsonData['history'][$index20]['ancestor']['delivery']['data']['receiverCity'])) {
    $model->history[$index20]->ancestor->delivery->data->receiverCity = $jsonData['history'][$index20]['ancestor']['delivery']['data']['receiverCity'];

}
if (isset($jsonData['history'][$index20]['ancestor']['delivery']['data']['services'])) {
    $model->history[$index20]->ancestor->delivery->data->services = [];
foreach (array_keys($jsonData['history'][$index20]['ancestor']['delivery']['data']['services']) as $index74) {
    $model->history[$index20]->ancestor->delivery->data->services[$index74] = $jsonData['history'][$index20]['ancestor']['delivery']['data']['services'][$index74];

}

}
if (isset($jsonData['history'][$index20]['ancestor']['delivery']['data']['packageNumber'])) {
    $model->history[$index20]->ancestor->delivery->data->packageNumber = $jsonData['history'][$index20]['ancestor']['delivery']['data']['packageNumber'];

}
if (isset($jsonData['history'][$index20]['ancestor']['delivery']['data']['comment'])) {
    $model->history[$index20]->ancestor->delivery->data->comment = $jsonData['history'][$index20]['ancestor']['delivery']['data']['comment'];

}
if (isset($jsonData['history'][$index20]['ancestor']['delivery']['data']['deliveryCode'])) {
    $model->history[$index20]->ancestor->delivery->data->deliveryCode = $jsonData['history'][$index20]['ancestor']['delivery']['data']['deliveryCode'];

}
if (isset($jsonData['history'][$index20]['ancestor']['delivery']['data']['notes'])) {
    $model->history[$index20]->ancestor->delivery->data->notes = $jsonData['history'][$index20]['ancestor']['delivery']['data']['notes'];

}
if (isset($jsonData['history'][$index20]['ancestor']['delivery']['data']['id'])) {
    $model->history[$index20]->ancestor->delivery->data->id = $jsonData['history'][$index20]['ancestor']['delivery']['data']['id'];

}
if (isset($jsonData['history'][$index20]['ancestor']['delivery']['data']['firstName'])) {
    $model->history[$index20]->ancestor->delivery->data->firstName = $jsonData['history'][$index20]['ancestor']['delivery']['data']['firstName'];

}
if (isset($jsonData['history'][$index20]['ancestor']['delivery']['data']['lastName'])) {
    $model->history[$index20]->ancestor->delivery->data->lastName = $jsonData['history'][$index20]['ancestor']['delivery']['data']['lastName'];

}
if (isset($jsonData['history'][$index20]['ancestor']['delivery']['data']['patronymic'])) {
    $model->history[$index20]->ancestor->delivery->data->patronymic = $jsonData['history'][$index20]['ancestor']['delivery']['data']['patronymic'];

}
if (isset($jsonData['history'][$index20]['ancestor']['delivery']['data']['active'])) {
    $model->history[$index20]->ancestor->delivery->data->active = $jsonData['history'][$index20]['ancestor']['delivery']['data']['active'];

}
if (isset($jsonData['history'][$index20]['ancestor']['delivery']['data']['email'])) {
    $model->history[$index20]->ancestor->delivery->data->email = $jsonData['history'][$index20]['ancestor']['delivery']['data']['email'];

}
if (isset($jsonData['history'][$index20]['ancestor']['delivery']['data']['phone'])) {
    
$model->history[$index20]->ancestor->delivery->data->phone = new RetailCrm\Api\Model\Entity\Order\Delivery\CourierPhone();
if (isset($jsonData['history'][$index20]['ancestor']['delivery']['data']['phone']['number'])) {
    $model->history[$index20]->ancestor->delivery->data->phone->number = $jsonData['history'][$index20]['ancestor']['delivery']['data']['phone']['number'];

}


}
if (isset($jsonData['history'][$index20]['ancestor']['delivery']['data']['description'])) {
    $model->history[$index20]->ancestor->delivery->data->description = $jsonData['history'][$index20]['ancestor']['delivery']['data']['description'];

}
if (isset($jsonData['history'][$index20]['ancestor']['delivery']['data']['courierId'])) {
    $model->history[$index20]->ancestor->delivery->data->courierId = $jsonData['history'][$index20]['ancestor']['delivery']['data']['courierId'];

}
if (isset($jsonData['history'][$index20]['ancestor']['delivery']['data']['serviceType'])) {
    $model->history[$index20]->ancestor->delivery->data->serviceType = $jsonData['history'][$index20]['ancestor']['delivery']['data']['serviceType'];

}
if (isset($jsonData['history'][$index20]['ancestor']['delivery']['data']['pickuppoint'])) {
    $model->history[$index20]->ancestor->delivery->data->pickuppoint = $jsonData['history'][$index20]['ancestor']['delivery']['data']['pickuppoint'];

}
if (isset($jsonData['history'][$index20]['ancestor']['delivery']['data']['receiverWarehouseTypeRef'])) {
    $model->history[$index20]->ancestor->delivery->data->receiverWarehouseTypeRef = $jsonData['history'][$index20]['ancestor']['delivery']['data']['receiverWarehouseTypeRef'];

}
if (isset($jsonData['history'][$index20]['ancestor']['delivery']['data']['statusName'])) {
    $model->history[$index20]->ancestor->delivery->data->statusName = $jsonData['history'][$index20]['ancestor']['delivery']['data']['statusName'];

}
if (isset($jsonData['history'][$index20]['ancestor']['delivery']['data']['receiverCityRef'])) {
    $model->history[$index20]->ancestor->delivery->data->receiverCityRef = $jsonData['history'][$index20]['ancestor']['delivery']['data']['receiverCityRef'];

}
if (isset($jsonData['history'][$index20]['ancestor']['delivery']['data']['receiverStreet'])) {
    $model->history[$index20]->ancestor->delivery->data->receiverStreet = $jsonData['history'][$index20]['ancestor']['delivery']['data']['receiverStreet'];

}
if (isset($jsonData['history'][$index20]['ancestor']['delivery']['data']['receiverStreetRef'])) {
    $model->history[$index20]->ancestor->delivery->data->receiverStreetRef = $jsonData['history'][$index20]['ancestor']['delivery']['data']['receiverStreetRef'];

}
if (isset($jsonData['history'][$index20]['ancestor']['delivery']['data']['seatsAmount'])) {
    $model->history[$index20]->ancestor->delivery->data->seatsAmount = $jsonData['history'][$index20]['ancestor']['delivery']['data']['seatsAmount'];

}
if (isset($jsonData['history'][$index20]['ancestor']['delivery']['data']['cargoType'])) {
    $model->history[$index20]->ancestor->delivery->data->cargoType = $jsonData['history'][$index20]['ancestor']['delivery']['data']['cargoType'];

}
if (isset($jsonData['history'][$index20]['ancestor']['delivery']['data']['cargoDescription'])) {
    $model->history[$index20]->ancestor->delivery->data->cargoDescription = $jsonData['history'][$index20]['ancestor']['delivery']['data']['cargoDescription'];

}
if (isset($jsonData['history'][$index20]['ancestor']['delivery']['data']['cashPayerType'])) {
    $model->history[$index20]->ancestor->delivery->data->cashPayerType = $jsonData['history'][$index20]['ancestor']['delivery']['data']['cashPayerType'];

}
if (isset($jsonData['history'][$index20]['ancestor']['delivery']['data']['paymentForm'])) {
    $model->history[$index20]->ancestor->delivery->data->paymentForm = $jsonData['history'][$index20]['ancestor']['delivery']['data']['paymentForm'];

}
if (isset($jsonData['history'][$index20]['ancestor']['delivery']['data']['ownershipForm'])) {
    $model->history[$index20]->ancestor->delivery->data->ownershipForm = $jsonData['history'][$index20]['ancestor']['delivery']['data']['ownershipForm'];

}
if (isset($jsonData['history'][$index20]['ancestor']['delivery']['data']['accompanyingDocument'])) {
    $model->history[$index20]->ancestor->delivery->data->accompanyingDocument = $jsonData['history'][$index20]['ancestor']['delivery']['data']['accompanyingDocument'];

}
if (isset($jsonData['history'][$index20]['ancestor']['delivery']['data']['preferredDeliveryDate'])) {
    $model->history[$index20]->ancestor->delivery->data->preferredDeliveryDate = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['history'][$index20]['ancestor']['delivery']['data']['preferredDeliveryDate']);

}
if (isset($jsonData['history'][$index20]['ancestor']['delivery']['data']['timeInterval'])) {
    $model->history[$index20]->ancestor->delivery->data->timeInterval = $jsonData['history'][$index20]['ancestor']['delivery']['data']['timeInterval'];

}
if (isset($jsonData['history'][$index20]['ancestor']['delivery']['data']['saturdayDelivery'])) {
    $model->history[$index20]->ancestor->delivery->data->saturdayDelivery = $jsonData['history'][$index20]['ancestor']['delivery']['data']['saturdayDelivery'];

}
if (isset($jsonData['history'][$index20]['ancestor']['delivery']['data']['deliveryDate'])) {
    $model->history[$index20]->ancestor->delivery->data->deliveryDate = $jsonData['history'][$index20]['ancestor']['delivery']['data']['deliveryDate'];

}
if (isset($jsonData['history'][$index20]['ancestor']['delivery']['data']['denieReason'])) {
    $model->history[$index20]->ancestor->delivery->data->denieReason = $jsonData['history'][$index20]['ancestor']['delivery']['data']['denieReason'];

}
if (isset($jsonData['history'][$index20]['ancestor']['delivery']['data']['backwardDelivery'])) {
    $model->history[$index20]->ancestor->delivery->data->backwardDelivery = $jsonData['history'][$index20]['ancestor']['delivery']['data']['backwardDelivery'];

}
if (isset($jsonData['history'][$index20]['ancestor']['delivery']['data']['backwardDeliveryCargoType'])) {
    $model->history[$index20]->ancestor->delivery->data->backwardDeliveryCargoType = $jsonData['history'][$index20]['ancestor']['delivery']['data']['backwardDeliveryCargoType'];

}
if (isset($jsonData['history'][$index20]['ancestor']['delivery']['data']['backwardDeliveryPayerType'])) {
    $model->history[$index20]->ancestor->delivery->data->backwardDeliveryPayerType = $jsonData['history'][$index20]['ancestor']['delivery']['data']['backwardDeliveryPayerType'];

}
if (isset($jsonData['history'][$index20]['ancestor']['delivery']['data']['backwardDeliveryRedeliveryString'])) {
    $model->history[$index20]->ancestor->delivery->data->backwardDeliveryRedeliveryString = $jsonData['history'][$index20]['ancestor']['delivery']['data']['backwardDeliveryRedeliveryString'];

}
if (isset($jsonData['history'][$index20]['ancestor']['delivery']['data']['afterpaymentOnGoodsCost'])) {
    $model->history[$index20]->ancestor->delivery->data->afterpaymentOnGoodsCost = (float) $jsonData['history'][$index20]['ancestor']['delivery']['data']['afterpaymentOnGoodsCost'];

}
if (isset($jsonData['history'][$index20]['ancestor']['delivery']['data']['declaredValue'])) {
    $model->history[$index20]->ancestor->delivery->data->declaredValue = (float) $jsonData['history'][$index20]['ancestor']['delivery']['data']['declaredValue'];

}
if (isset($jsonData['history'][$index20]['ancestor']['delivery']['data']['sendDate'])) {
    $model->history[$index20]->ancestor->delivery->data->sendDate = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['history'][$index20]['ancestor']['delivery']['data']['sendDate']);

}
if (isset($jsonData['history'][$index20]['ancestor']['delivery']['data']['deliveryType'])) {
    $model->history[$index20]->ancestor->delivery->data->deliveryType = $jsonData['history'][$index20]['ancestor']['delivery']['data']['deliveryType'];

}
if (isset($jsonData['history'][$index20]['ancestor']['delivery']['data']['pickupType'])) {
    $model->history[$index20]->ancestor->delivery->data->pickupType = $jsonData['history'][$index20]['ancestor']['delivery']['data']['pickupType'];

}
if (isset($jsonData['history'][$index20]['ancestor']['delivery']['data']['pickuppointDescription'])) {
    $model->history[$index20]->ancestor->delivery->data->pickuppointDescription = $jsonData['history'][$index20]['ancestor']['delivery']['data']['pickuppointDescription'];

}
if (isset($jsonData['history'][$index20]['ancestor']['delivery']['data']['placesCount'])) {
    $model->history[$index20]->ancestor->delivery->data->placesCount = $jsonData['history'][$index20]['ancestor']['delivery']['data']['placesCount'];

}
if (isset($jsonData['history'][$index20]['ancestor']['delivery']['data']['service'])) {
    $model->history[$index20]->ancestor->delivery->data->service = $jsonData['history'][$index20]['ancestor']['delivery']['data']['service'];

}


}
if (isset($jsonData['history'][$index20]['ancestor']['delivery']['service'])) {
    
$model->history[$index20]->ancestor->delivery->service = new RetailCrm\Api\Model\Entity\Order\Delivery\SerializedDeliveryService();
if (isset($jsonData['history'][$index20]['ancestor']['delivery']['service']['name'])) {
    $model->history[$index20]->ancestor->delivery->service->name = $jsonData['history'][$index20]['ancestor']['delivery']['service']['name'];

}
if (isset($jsonData['history'][$index20]['ancestor']['delivery']['service']['code'])) {
    $model->history[$index20]->ancestor->delivery->service->code = $jsonData['history'][$index20]['ancestor']['delivery']['service']['code'];

}
if (isset($jsonData['history'][$index20]['ancestor']['delivery']['service']['active'])) {
    $model->history[$index20]->ancestor->delivery->service->active = $jsonData['history'][$index20]['ancestor']['delivery']['service']['active'];

}


}
if (isset($jsonData['history'][$index20]['ancestor']['delivery']['cost'])) {
    $model->history[$index20]->ancestor->delivery->cost = (float) $jsonData['history'][$index20]['ancestor']['delivery']['cost'];

}
if (isset($jsonData['history'][$index20]['ancestor']['delivery']['netCost'])) {
    $model->history[$index20]->ancestor->delivery->netCost = (float) $jsonData['history'][$index20]['ancestor']['delivery']['netCost'];

}
if (isset($jsonData['history'][$index20]['ancestor']['delivery']['date'])) {
    $model->history[$index20]->ancestor->delivery->date = \DateTime::createFromFormat('Y-m-d', $jsonData['history'][$index20]['ancestor']['delivery']['date']);

}
if (isset($jsonData['history'][$index20]['ancestor']['delivery']['time'])) {
    
$model->history[$index20]->ancestor->delivery->time = new RetailCrm\Api\Model\Entity\Delivery\TimeInterval();
if (isset($jsonData['history'][$index20]['ancestor']['delivery']['time']['from'])) {
    $model->history[$index20]->ancestor->delivery->time->from = \DateTime::createFromFormat('H:i', $jsonData['history'][$index20]['ancestor']['delivery']['time']['from']);

}
if (isset($jsonData['history'][$index20]['ancestor']['delivery']['time']['to'])) {
    $model->history[$index20]->ancestor->delivery->time->to = \DateTime::createFromFormat('H:i', $jsonData['history'][$index20]['ancestor']['delivery']['time']['to']);

}
if (isset($jsonData['history'][$index20]['ancestor']['delivery']['time']['custom'])) {
    $model->history[$index20]->ancestor->delivery->time->custom = $jsonData['history'][$index20]['ancestor']['delivery']['time']['custom'];

}


}
if (isset($jsonData['history'][$index20]['ancestor']['delivery']['address'])) {
    
$model->history[$index20]->ancestor->delivery->address = new RetailCrm\Api\Model\Entity\Order\Delivery\OrderDeliveryAddress();
if (isset($jsonData['history'][$index20]['ancestor']['delivery']['address']['id'])) {
    $model->history[$index20]->ancestor->delivery->address->id = $jsonData['history'][$index20]['ancestor']['delivery']['address']['id'];

}
if (isset($jsonData['history'][$index20]['ancestor']['delivery']['address']['index'])) {
    $model->history[$index20]->ancestor->delivery->address->index = $jsonData['history'][$index20]['ancestor']['delivery']['address']['index'];

}
if (isset($jsonData['history'][$index20]['ancestor']['delivery']['address']['countryIso'])) {
    $model->history[$index20]->ancestor->delivery->address->countryIso = $jsonData['history'][$index20]['ancestor']['delivery']['address']['countryIso'];

}
if (isset($jsonData['history'][$index20]['ancestor']['delivery']['address']['region'])) {
    $model->history[$index20]->ancestor->delivery->address->region = $jsonData['history'][$index20]['ancestor']['delivery']['address']['region'];

}
if (isset($jsonData['history'][$index20]['ancestor']['delivery']['address']['regionId'])) {
    $model->history[$index20]->ancestor->delivery->address->regionId = $jsonData['history'][$index20]['ancestor']['delivery']['address']['regionId'];

}
if (isset($jsonData['history'][$index20]['ancestor']['delivery']['address']['city'])) {
    $model->history[$index20]->ancestor->delivery->address->city = $jsonData['history'][$index20]['ancestor']['delivery']['address']['city'];

}
if (isset($jsonData['history'][$index20]['ancestor']['delivery']['address']['cityId'])) {
    $model->history[$index20]->ancestor->delivery->address->cityId = $jsonData['history'][$index20]['ancestor']['delivery']['address']['cityId'];

}
if (isset($jsonData['history'][$index20]['ancestor']['delivery']['address']['cityType'])) {
    $model->history[$index20]->ancestor->delivery->address->cityType = $jsonData['history'][$index20]['ancestor']['delivery']['address']['cityType'];

}
if (isset($jsonData['history'][$index20]['ancestor']['delivery']['address']['street'])) {
    $model->history[$index20]->ancestor->delivery->address->street = $jsonData['history'][$index20]['ancestor']['delivery']['address']['street'];

}
if (isset($jsonData['history'][$index20]['ancestor']['delivery']['address']['streetId'])) {
    $model->history[$index20]->ancestor->delivery->address->streetId = $jsonData['history'][$index20]['ancestor']['delivery']['address']['streetId'];

}
if (isset($jsonData['history'][$index20]['ancestor']['delivery']['address']['streetType'])) {
    $model->history[$index20]->ancestor->delivery->address->streetType = $jsonData['history'][$index20]['ancestor']['delivery']['address']['streetType'];

}
if (isset($jsonData['history'][$index20]['ancestor']['delivery']['address']['building'])) {
    $model->history[$index20]->ancestor->delivery->address->building = $jsonData['history'][$index20]['ancestor']['delivery']['address']['building'];

}
if (isset($jsonData['history'][$index20]['ancestor']['delivery']['address']['flat'])) {
    $model->history[$index20]->ancestor->delivery->address->flat = $jsonData['history'][$index20]['ancestor']['delivery']['address']['flat'];

}
if (isset($jsonData['history'][$index20]['ancestor']['delivery']['address']['floor'])) {
    $model->history[$index20]->ancestor->delivery->address->floor = $jsonData['history'][$index20]['ancestor']['delivery']['address']['floor'];

}
if (isset($jsonData['history'][$index20]['ancestor']['delivery']['address']['block'])) {
    $model->history[$index20]->ancestor->delivery->address->block = $jsonData['history'][$index20]['ancestor']['delivery']['address']['block'];

}
if (isset($jsonData['history'][$index20]['ancestor']['delivery']['address']['house'])) {
    $model->history[$index20]->ancestor->delivery->address->house = $jsonData['history'][$index20]['ancestor']['delivery']['address']['house'];

}
if (isset($jsonData['history'][$index20]['ancestor']['delivery']['address']['housing'])) {
    $model->history[$index20]->ancestor->delivery->address->housing = $jsonData['history'][$index20]['ancestor']['delivery']['address']['housing'];

}
if (isset($jsonData['history'][$index20]['ancestor']['delivery']['address']['metro'])) {
    $model->history[$index20]->ancestor->delivery->address->metro = $jsonData['history'][$index20]['ancestor']['delivery']['address']['metro'];

}
if (isset($jsonData['history'][$index20]['ancestor']['delivery']['address']['text'])) {
    $model->history[$index20]->ancestor->delivery->address->text = $jsonData['history'][$index20]['ancestor']['delivery']['address']['text'];

}


}
if (isset($jsonData['history'][$index20]['ancestor']['delivery']['vatRate'])) {
    $model->history[$index20]->ancestor->delivery->vatRate = $jsonData['history'][$index20]['ancestor']['delivery']['vatRate'];

}


}
if (isset($jsonData['history'][$index20]['ancestor']['marketplace'])) {
    
$model->history[$index20]->ancestor->marketplace = new RetailCrm\Api\Model\Entity\Order\MarketplaceData();
if (isset($jsonData['history'][$index20]['ancestor']['marketplace']['code'])) {
    $model->history[$index20]->ancestor->marketplace->code = $jsonData['history'][$index20]['ancestor']['marketplace']['code'];

}
if (isset($jsonData['history'][$index20]['ancestor']['marketplace']['orderId'])) {
    $model->history[$index20]->ancestor->marketplace->orderId = $jsonData['history'][$index20]['ancestor']['marketplace']['orderId'];

}


}
if (isset($jsonData['history'][$index20]['ancestor']['site'])) {
    $model->history[$index20]->ancestor->site = $jsonData['history'][$index20]['ancestor']['site'];

}
if (isset($jsonData['history'][$index20]['ancestor']['status'])) {
    $model->history[$index20]->ancestor->status = $jsonData['history'][$index20]['ancestor']['status'];

}
if (isset($jsonData['history'][$index20]['ancestor']['statusComment'])) {
    $model->history[$index20]->ancestor->statusComment = $jsonData['history'][$index20]['ancestor']['statusComment'];

}
if (isset($jsonData['history'][$index20]['ancestor']['source'])) {
    
$model->history[$index20]->ancestor->source = new RetailCrm\Api\Model\Entity\Source();
if (isset($jsonData['history'][$index20]['ancestor']['source']['source'])) {
    $model->history[$index20]->ancestor->source->source = $jsonData['history'][$index20]['ancestor']['source']['source'];

}
if (isset($jsonData['history'][$index20]['ancestor']['source']['medium'])) {
    $model->history[$index20]->ancestor->source->medium = $jsonData['history'][$index20]['ancestor']['source']['medium'];

}
if (isset($jsonData['history'][$index20]['ancestor']['source']['campaign'])) {
    $model->history[$index20]->ancestor->source->campaign = $jsonData['history'][$index20]['ancestor']['source']['campaign'];

}
if (isset($jsonData['history'][$index20]['ancestor']['source']['keyword'])) {
    $model->history[$index20]->ancestor->source->keyword = $jsonData['history'][$index20]['ancestor']['source']['keyword'];

}
if (isset($jsonData['history'][$index20]['ancestor']['source']['content'])) {
    $model->history[$index20]->ancestor->source->content = $jsonData['history'][$index20]['ancestor']['source']['content'];

}


}
if (isset($jsonData['history'][$index20]['ancestor']['items'])) {
    $model->history[$index20]->ancestor->items = [];
foreach (array_keys($jsonData['history'][$index20]['ancestor']['items']) as $index51) {
    
$model->history[$index20]->ancestor->items[$index51] = new RetailCrm\Api\Model\Entity\Order\Items\OrderProduct();
if (isset($jsonData['history'][$index20]['ancestor']['items'][$index51]['externalId'])) {
    $model->history[$index20]->ancestor->items[$index51]->externalId = $jsonData['history'][$index20]['ancestor']['items'][$index51]['externalId'];

}
if (isset($jsonData['history'][$index20]['ancestor']['items'][$index51]['markingCodes'])) {
    $model->history[$index20]->ancestor->items[$index51]->markingCodes = [];
foreach (array_keys($jsonData['history'][$index20]['ancestor']['items'][$index51]['markingCodes']) as $index77) {
    $model->history[$index20]->ancestor->items[$index51]->markingCodes[$index77] = $jsonData['history'][$index20]['ancestor']['items'][$index51]['markingCodes'][$index77];

}

}
if (isset($jsonData['history'][$index20]['ancestor']['items'][$index51]['id'])) {
    $model->history[$index20]->ancestor->items[$index51]->id = $jsonData['history'][$index20]['ancestor']['items'][$index51]['id'];

}
if (isset($jsonData['history'][$index20]['ancestor']['items'][$index51]['externalIds'])) {
    $model->history[$index20]->ancestor->items[$index51]->externalIds = [];
foreach (array_keys($jsonData['history'][$index20]['ancestor']['items'][$index51]['externalIds']) as $index76) {
    
$model->history[$index20]->ancestor->items[$index51]->externalIds[$index76] = new RetailCrm\Api\Model\Entity\CodeValueModel();
if (isset($jsonData['history'][$index20]['ancestor']['items'][$index51]['externalIds'][$index76]['code'])) {
    $model->history[$index20]->ancestor->items[$index51]->externalIds[$index76]->code = $jsonData['history'][$index20]['ancestor']['items'][$index51]['externalIds'][$index76]['code'];

}
if (isset($jsonData['history'][$index20]['ancestor']['items'][$index51]['externalIds'][$index76]['value'])) {
    $model->history[$index20]->ancestor->items[$index51]->externalIds[$index76]->value = $jsonData['history'][$index20]['ancestor']['items'][$index51]['externalIds'][$index76]['value'];

}


}

}
if (isset($jsonData['history'][$index20]['ancestor']['items'][$index51]['priceType'])) {
    
$model->history[$index20]->ancestor->items[$index51]->priceType = new RetailCrm\Api\Model\Entity\Order\Items\PriceType();
if (isset($jsonData['history'][$index20]['ancestor']['items'][$index51]['priceType']['code'])) {
    $model->history[$index20]->ancestor->items[$index51]->priceType->code = $jsonData['history'][$index20]['ancestor']['items'][$index51]['priceType']['code'];

}


}
if (isset($jsonData['history'][$index20]['ancestor']['items'][$index51]['initialPrice'])) {
    $model->history[$index20]->ancestor->items[$index51]->initialPrice = (float) $jsonData['history'][$index20]['ancestor']['items'][$index51]['initialPrice'];

}
if (isset($jsonData['history'][$index20]['ancestor']['items'][$index51]['discountManualAmount'])) {
    $model->history[$index20]->ancestor->items[$index51]->discountManualAmount = (float) $jsonData['history'][$index20]['ancestor']['items'][$index51]['discountManualAmount'];

}
if (isset($jsonData['history'][$index20]['ancestor']['items'][$index51]['discountManualPercent'])) {
    $model->history[$index20]->ancestor->items[$index51]->discountManualPercent = (float) $jsonData['history'][$index20]['ancestor']['items'][$index51]['discountManualPercent'];

}
if (isset($jsonData['history'][$index20]['ancestor']['items'][$index51]['discountTotal'])) {
    $model->history[$index20]->ancestor->items[$index51]->discountTotal = (float) $jsonData['history'][$index20]['ancestor']['items'][$index51]['discountTotal'];

}
if (isset($jsonData['history'][$index20]['ancestor']['items'][$index51]['prices'])) {
    $model->history[$index20]->ancestor->items[$index51]->prices = [];
foreach (array_keys($jsonData['history'][$index20]['ancestor']['items'][$index51]['prices']) as $index71) {
    
$model->history[$index20]->ancestor->items[$index51]->prices[$index71] = new RetailCrm\Api\Model\Entity\Order\Items\OrderProductPriceItem();
if (isset($jsonData['history'][$index20]['ancestor']['items'][$index51]['prices'][$index71]['price'])) {
    $model->history[$index20]->ancestor->items[$index51]->prices[$index71]->price = (float) $jsonData['history'][$index20]['ancestor']['items'][$index51]['prices'][$index71]['price'];

}
if (isset($jsonData['history'][$index20]['ancestor']['items'][$index51]['prices'][$index71]['quantity'])) {
    $model->history[$index20]->ancestor->items[$index51]->prices[$index71]->quantity = (float) $jsonData['history'][$index20]['ancestor']['items'][$index51]['prices'][$index71]['quantity'];

}


}

}
if (isset($jsonData['history'][$index20]['ancestor']['items'][$index51]['vatRate'])) {
    $model->history[$index20]->ancestor->items[$index51]->vatRate = $jsonData['history'][$index20]['ancestor']['items'][$index51]['vatRate'];

}
if (isset($jsonData['history'][$index20]['ancestor']['items'][$index51]['createdAt'])) {
    $model->history[$index20]->ancestor->items[$index51]->createdAt = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['history'][$index20]['ancestor']['items'][$index51]['createdAt']);

}
if (isset($jsonData['history'][$index20]['ancestor']['items'][$index51]['quantity'])) {
    $model->history[$index20]->ancestor->items[$index51]->quantity = (float) $jsonData['history'][$index20]['ancestor']['items'][$index51]['quantity'];

}
if (isset($jsonData['history'][$index20]['ancestor']['items'][$index51]['status'])) {
    $model->history[$index20]->ancestor->items[$index51]->status = $jsonData['history'][$index20]['ancestor']['items'][$index51]['status'];

}
if (isset($jsonData['history'][$index20]['ancestor']['items'][$index51]['comment'])) {
    $model->history[$index20]->ancestor->items[$index51]->comment = $jsonData['history'][$index20]['ancestor']['items'][$index51]['comment'];

}
if (isset($jsonData['history'][$index20]['ancestor']['items'][$index51]['offer'])) {
    
$model->history[$index20]->ancestor->items[$index51]->offer = new RetailCrm\Api\Model\Entity\Order\Items\Offer();
if (isset($jsonData['history'][$index20]['ancestor']['items'][$index51]['offer']['displayName'])) {
    $model->history[$index20]->ancestor->items[$index51]->offer->displayName = $jsonData['history'][$index20]['ancestor']['items'][$index51]['offer']['displayName'];

}
if (isset($jsonData['history'][$index20]['ancestor']['items'][$index51]['offer']['id'])) {
    $model->history[$index20]->ancestor->items[$index51]->offer->id = $jsonData['history'][$index20]['ancestor']['items'][$index51]['offer']['id'];

}
if (isset($jsonData['history'][$index20]['ancestor']['items'][$index51]['offer']['externalId'])) {
    $model->history[$index20]->ancestor->items[$index51]->offer->externalId = $jsonData['history'][$index20]['ancestor']['items'][$index51]['offer']['externalId'];

}
if (isset($jsonData['history'][$index20]['ancestor']['items'][$index51]['offer']['xmlId'])) {
    $model->history[$index20]->ancestor->items[$index51]->offer->xmlId = $jsonData['history'][$index20]['ancestor']['items'][$index51]['offer']['xmlId'];

}
if (isset($jsonData['history'][$index20]['ancestor']['items'][$index51]['offer']['name'])) {
    $model->history[$index20]->ancestor->items[$index51]->offer->name = $jsonData['history'][$index20]['ancestor']['items'][$index51]['offer']['name'];

}
if (isset($jsonData['history'][$index20]['ancestor']['items'][$index51]['offer']['article'])) {
    $model->history[$index20]->ancestor->items[$index51]->offer->article = $jsonData['history'][$index20]['ancestor']['items'][$index51]['offer']['article'];

}
if (isset($jsonData['history'][$index20]['ancestor']['items'][$index51]['offer']['vatRate'])) {
    $model->history[$index20]->ancestor->items[$index51]->offer->vatRate = $jsonData['history'][$index20]['ancestor']['items'][$index51]['offer']['vatRate'];

}
if (isset($jsonData['history'][$index20]['ancestor']['items'][$index51]['offer']['unit'])) {
    
$model->history[$index20]->ancestor->items[$index51]->offer->unit = new RetailCrm\Api\Model\Entity\Order\Items\Unit();
if (isset($jsonData['history'][$index20]['ancestor']['items'][$index51]['offer']['unit']['code'])) {
    $model->history[$index20]->ancestor->items[$index51]->offer->unit->code = $jsonData['history'][$index20]['ancestor']['items'][$index51]['offer']['unit']['code'];

}
if (isset($jsonData['history'][$index20]['ancestor']['items'][$index51]['offer']['unit']['name'])) {
    $model->history[$index20]->ancestor->items[$index51]->offer->unit->name = $jsonData['history'][$index20]['ancestor']['items'][$index51]['offer']['unit']['name'];

}
if (isset($jsonData['history'][$index20]['ancestor']['items'][$index51]['offer']['unit']['sym'])) {
    $model->history[$index20]->ancestor->items[$index51]->offer->unit->sym = $jsonData['history'][$index20]['ancestor']['items'][$index51]['offer']['unit']['sym'];

}


}
if (isset($jsonData['history'][$index20]['ancestor']['items'][$index51]['offer']['barcode'])) {
    $model->history[$index20]->ancestor->items[$index51]->offer->barcode = $jsonData['history'][$index20]['ancestor']['items'][$index51]['offer']['barcode'];

}
if (isset($jsonData['history'][$index20]['ancestor']['items'][$index51]['offer']['properties'])) {
    $model->history[$index20]->ancestor->items[$index51]->offer->properties = [];
foreach (array_keys($jsonData['history'][$index20]['ancestor']['items'][$index51]['offer']['properties']) as $index84) {
    $model->history[$index20]->ancestor->items[$index51]->offer->properties[$index84] = $jsonData['history'][$index20]['ancestor']['items'][$index51]['offer']['properties'][$index84];

}

}


}
if (isset($jsonData['history'][$index20]['ancestor']['items'][$index51]['productName'])) {
    $model->history[$index20]->ancestor->items[$index51]->productName = $jsonData['history'][$index20]['ancestor']['items'][$index51]['productName'];

}
if (isset($jsonData['history'][$index20]['ancestor']['items'][$index51]['isCanceled'])) {
    $model->history[$index20]->ancestor->items[$index51]->isCanceled = $jsonData['history'][$index20]['ancestor']['items'][$index51]['isCanceled'];

}
if (isset($jsonData['history'][$index20]['ancestor']['items'][$index51]['properties'])) {
    $model->history[$index20]->ancestor->items[$index51]->properties = [];
foreach (array_keys($jsonData['history'][$index20]['ancestor']['items'][$index51]['properties']) as $index75) {
    
$model->history[$index20]->ancestor->items[$index51]->properties[$index75] = new RetailCrm\Api\Model\Entity\Order\Items\ItemProperty();
if (isset($jsonData['history'][$index20]['ancestor']['items'][$index51]['properties'][$index75]['code'])) {
    $model->history[$index20]->ancestor->items[$index51]->properties[$index75]->code = $jsonData['history'][$index20]['ancestor']['items'][$index51]['properties'][$index75]['code'];

}
if (isset($jsonData['history'][$index20]['ancestor']['items'][$index51]['properties'][$index75]['name'])) {
    $model->history[$index20]->ancestor->items[$index51]->properties[$index75]->name = $jsonData['history'][$index20]['ancestor']['items'][$index51]['properties'][$index75]['name'];

}
if (isset($jsonData['history'][$index20]['ancestor']['items'][$index51]['properties'][$index75]['value'])) {
    $model->history[$index20]->ancestor->items[$index51]->properties[$index75]->value = $jsonData['history'][$index20]['ancestor']['items'][$index51]['properties'][$index75]['value'];

}


}

}
if (isset($jsonData['history'][$index20]['ancestor']['items'][$index51]['purchasePrice'])) {
    $model->history[$index20]->ancestor->items[$index51]->purchasePrice = (float) $jsonData['history'][$index20]['ancestor']['items'][$index51]['purchasePrice'];

}


}

}
if (isset($jsonData['history'][$index20]['ancestor']['fullPaidAt'])) {
    $model->history[$index20]->ancestor->fullPaidAt = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['history'][$index20]['ancestor']['fullPaidAt']);

}
if (isset($jsonData['history'][$index20]['ancestor']['payments'])) {
    $model->history[$index20]->ancestor->payments = [];
foreach (array_keys($jsonData['history'][$index20]['ancestor']['payments']) as $index54) {
    
$model->history[$index20]->ancestor->payments[$index54] = new RetailCrm\Api\Model\Entity\Order\Payment();
if (isset($jsonData['history'][$index20]['ancestor']['payments'][$index54]['id'])) {
    $model->history[$index20]->ancestor->payments[$index54]->id = $jsonData['history'][$index20]['ancestor']['payments'][$index54]['id'];

}
if (isset($jsonData['history'][$index20]['ancestor']['payments'][$index54]['status'])) {
    $model->history[$index20]->ancestor->payments[$index54]->status = $jsonData['history'][$index20]['ancestor']['payments'][$index54]['status'];

}
if (isset($jsonData['history'][$index20]['ancestor']['payments'][$index54]['type'])) {
    $model->history[$index20]->ancestor->payments[$index54]->type = $jsonData['history'][$index20]['ancestor']['payments'][$index54]['type'];

}
if (isset($jsonData['history'][$index20]['ancestor']['payments'][$index54]['externalId'])) {
    $model->history[$index20]->ancestor->payments[$index54]->externalId = $jsonData['history'][$index20]['ancestor']['payments'][$index54]['externalId'];

}
if (isset($jsonData['history'][$index20]['ancestor']['payments'][$index54]['amount'])) {
    $model->history[$index20]->ancestor->payments[$index54]->amount = (float) $jsonData['history'][$index20]['ancestor']['payments'][$index54]['amount'];

}
if (isset($jsonData['history'][$index20]['ancestor']['payments'][$index54]['paidAt'])) {
    $model->history[$index20]->ancestor->payments[$index54]->paidAt = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['history'][$index20]['ancestor']['payments'][$index54]['paidAt']);

}
if (isset($jsonData['history'][$index20]['ancestor']['payments'][$index54]['comment'])) {
    $model->history[$index20]->ancestor->payments[$index54]->comment = $jsonData['history'][$index20]['ancestor']['payments'][$index54]['comment'];

}


}

}
if (isset($jsonData['history'][$index20]['ancestor']['fromApi'])) {
    $model->history[$index20]->ancestor->fromApi = $jsonData['history'][$index20]['ancestor']['fromApi'];

}
if (isset($jsonData['history'][$index20]['ancestor']['weight'])) {
    $model->history[$index20]->ancestor->weight = (float) $jsonData['history'][$index20]['ancestor']['weight'];

}
if (isset($jsonData['history'][$index20]['ancestor']['length'])) {
    $model->history[$index20]->ancestor->length = $jsonData['history'][$index20]['ancestor']['length'];

}
if (isset($jsonData['history'][$index20]['ancestor']['width'])) {
    $model->history[$index20]->ancestor->width = $jsonData['history'][$index20]['ancestor']['width'];

}
if (isset($jsonData['history'][$index20]['ancestor']['height'])) {
    $model->history[$index20]->ancestor->height = $jsonData['history'][$index20]['ancestor']['height'];

}
if (isset($jsonData['history'][$index20]['ancestor']['shipmentStore'])) {
    $model->history[$index20]->ancestor->shipmentStore = $jsonData['history'][$index20]['ancestor']['shipmentStore'];

}
if (isset($jsonData['history'][$index20]['ancestor']['shipmentDate'])) {
    $model->history[$index20]->ancestor->shipmentDate = \DateTime::createFromFormat('Y-m-d', $jsonData['history'][$index20]['ancestor']['shipmentDate']);

}
if (isset($jsonData['history'][$index20]['ancestor']['shipped'])) {
    $model->history[$index20]->ancestor->shipped = $jsonData['history'][$index20]['ancestor']['shipped'];

}
if (isset($jsonData['history'][$index20]['ancestor']['dialogId'])) {
    $model->history[$index20]->ancestor->dialogId = $jsonData['history'][$index20]['ancestor']['dialogId'];

}
if (isset($jsonData['history'][$index20]['ancestor']['customFields'])) {
    $model->history[$index20]->ancestor->customFields = [];
foreach (array_keys($jsonData['history'][$index20]['ancestor']['customFields']) as $index58) {
    $model->history[$index20]->ancestor->customFields[$index58] = $jsonData['history'][$index20]['ancestor']['customFields'][$index58];

}

}
if (isset($jsonData['history'][$index20]['ancestor']['clientId'])) {
    $model->history[$index20]->ancestor->clientId = $jsonData['history'][$index20]['ancestor']['clientId'];

}
if (isset($jsonData['history'][$index20]['ancestor']['loyaltyEventId'])) {
    $model->history[$index20]->ancestor->loyaltyEventId = $jsonData['history'][$index20]['ancestor']['loyaltyEventId'];

}


}
if (isset($jsonData['history'][$index20]['item'])) {
    
$model->history[$index20]->item = new RetailCrm\Api\Model\Entity\Order\Items\OrderProduct();
if (isset($jsonData['history'][$index20]['item']['externalId'])) {
    $model->history[$index20]->item->externalId = $jsonData['history'][$index20]['item']['externalId'];

}
if (isset($jsonData['history'][$index20]['item']['markingCodes'])) {
    $model->history[$index20]->item->markingCodes = [];
foreach (array_keys($jsonData['history'][$index20]['item']['markingCodes']) as $index54) {
    $model->history[$index20]->item->markingCodes[$index54] = $jsonData['history'][$index20]['item']['markingCodes'][$index54];

}

}
if (isset($jsonData['history'][$index20]['item']['id'])) {
    $model->history[$index20]->item->id = $jsonData['history'][$index20]['item']['id'];

}
if (isset($jsonData['history'][$index20]['item']['externalIds'])) {
    $model->history[$index20]->item->externalIds = [];
foreach (array_keys($jsonData['history'][$index20]['item']['externalIds']) as $index53) {
    
$model->history[$index20]->item->externalIds[$index53] = new RetailCrm\Api\Model\Entity\CodeValueModel();
if (isset($jsonData['history'][$index20]['item']['externalIds'][$index53]['code'])) {
    $model->history[$index20]->item->externalIds[$index53]->code = $jsonData['history'][$index20]['item']['externalIds'][$index53]['code'];

}
if (isset($jsonData['history'][$index20]['item']['externalIds'][$index53]['value'])) {
    $model->history[$index20]->item->externalIds[$index53]->value = $jsonData['history'][$index20]['item']['externalIds'][$index53]['value'];

}


}

}
if (isset($jsonData['history'][$index20]['item']['priceType'])) {
    
$model->history[$index20]->item->priceType = new RetailCrm\Api\Model\Entity\Order\Items\PriceType();
if (isset($jsonData['history'][$index20]['item']['priceType']['code'])) {
    $model->history[$index20]->item->priceType->code = $jsonData['history'][$index20]['item']['priceType']['code'];

}


}
if (isset($jsonData['history'][$index20]['item']['initialPrice'])) {
    $model->history[$index20]->item->initialPrice = (float) $jsonData['history'][$index20]['item']['initialPrice'];

}
if (isset($jsonData['history'][$index20]['item']['discountManualAmount'])) {
    $model->history[$index20]->item->discountManualAmount = (float) $jsonData['history'][$index20]['item']['discountManualAmount'];

}
if (isset($jsonData['history'][$index20]['item']['discountManualPercent'])) {
    $model->history[$index20]->item->discountManualPercent = (float) $jsonData['history'][$index20]['item']['discountManualPercent'];

}
if (isset($jsonData['history'][$index20]['item']['discountTotal'])) {
    $model->history[$index20]->item->discountTotal = (float) $jsonData['history'][$index20]['item']['discountTotal'];

}
if (isset($jsonData['history'][$index20]['item']['prices'])) {
    $model->history[$index20]->item->prices = [];
foreach (array_keys($jsonData['history'][$index20]['item']['prices']) as $index48) {
    
$model->history[$index20]->item->prices[$index48] = new RetailCrm\Api\Model\Entity\Order\Items\OrderProductPriceItem();
if (isset($jsonData['history'][$index20]['item']['prices'][$index48]['price'])) {
    $model->history[$index20]->item->prices[$index48]->price = (float) $jsonData['history'][$index20]['item']['prices'][$index48]['price'];

}
if (isset($jsonData['history'][$index20]['item']['prices'][$index48]['quantity'])) {
    $model->history[$index20]->item->prices[$index48]->quantity = (float) $jsonData['history'][$index20]['item']['prices'][$index48]['quantity'];

}


}

}
if (isset($jsonData['history'][$index20]['item']['vatRate'])) {
    $model->history[$index20]->item->vatRate = $jsonData['history'][$index20]['item']['vatRate'];

}
if (isset($jsonData['history'][$index20]['item']['createdAt'])) {
    $model->history[$index20]->item->createdAt = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['history'][$index20]['item']['createdAt']);

}
if (isset($jsonData['history'][$index20]['item']['quantity'])) {
    $model->history[$index20]->item->quantity = (float) $jsonData['history'][$index20]['item']['quantity'];

}
if (isset($jsonData['history'][$index20]['item']['status'])) {
    $model->history[$index20]->item->status = $jsonData['history'][$index20]['item']['status'];

}
if (isset($jsonData['history'][$index20]['item']['comment'])) {
    $model->history[$index20]->item->comment = $jsonData['history'][$index20]['item']['comment'];

}
if (isset($jsonData['history'][$index20]['item']['offer'])) {
    
$model->history[$index20]->item->offer = new RetailCrm\Api\Model\Entity\Order\Items\Offer();
if (isset($jsonData['history'][$index20]['item']['offer']['displayName'])) {
    $model->history[$index20]->item->offer->displayName = $jsonData['history'][$index20]['item']['offer']['displayName'];

}
if (isset($jsonData['history'][$index20]['item']['offer']['id'])) {
    $model->history[$index20]->item->offer->id = $jsonData['history'][$index20]['item']['offer']['id'];

}
if (isset($jsonData['history'][$index20]['item']['offer']['externalId'])) {
    $model->history[$index20]->item->offer->externalId = $jsonData['history'][$index20]['item']['offer']['externalId'];

}
if (isset($jsonData['history'][$index20]['item']['offer']['xmlId'])) {
    $model->history[$index20]->item->offer->xmlId = $jsonData['history'][$index20]['item']['offer']['xmlId'];

}
if (isset($jsonData['history'][$index20]['item']['offer']['name'])) {
    $model->history[$index20]->item->offer->name = $jsonData['history'][$index20]['item']['offer']['name'];

}
if (isset($jsonData['history'][$index20]['item']['offer']['article'])) {
    $model->history[$index20]->item->offer->article = $jsonData['history'][$index20]['item']['offer']['article'];

}
if (isset($jsonData['history'][$index20]['item']['offer']['vatRate'])) {
    $model->history[$index20]->item->offer->vatRate = $jsonData['history'][$index20]['item']['offer']['vatRate'];

}
if (isset($jsonData['history'][$index20]['item']['offer']['unit'])) {
    
$model->history[$index20]->item->offer->unit = new RetailCrm\Api\Model\Entity\Order\Items\Unit();
if (isset($jsonData['history'][$index20]['item']['offer']['unit']['code'])) {
    $model->history[$index20]->item->offer->unit->code = $jsonData['history'][$index20]['item']['offer']['unit']['code'];

}
if (isset($jsonData['history'][$index20]['item']['offer']['unit']['name'])) {
    $model->history[$index20]->item->offer->unit->name = $jsonData['history'][$index20]['item']['offer']['unit']['name'];

}
if (isset($jsonData['history'][$index20]['item']['offer']['unit']['sym'])) {
    $model->history[$index20]->item->offer->unit->sym = $jsonData['history'][$index20]['item']['offer']['unit']['sym'];

}


}
if (isset($jsonData['history'][$index20]['item']['offer']['barcode'])) {
    $model->history[$index20]->item->offer->barcode = $jsonData['history'][$index20]['item']['offer']['barcode'];

}
if (isset($jsonData['history'][$index20]['item']['offer']['properties'])) {
    $model->history[$index20]->item->offer->properties = [];
foreach (array_keys($jsonData['history'][$index20]['item']['offer']['properties']) as $index61) {
    $model->history[$index20]->item->offer->properties[$index61] = $jsonData['history'][$index20]['item']['offer']['properties'][$index61];

}

}


}
if (isset($jsonData['history'][$index20]['item']['productName'])) {
    $model->history[$index20]->item->productName = $jsonData['history'][$index20]['item']['productName'];

}
if (isset($jsonData['history'][$index20]['item']['isCanceled'])) {
    $model->history[$index20]->item->isCanceled = $jsonData['history'][$index20]['item']['isCanceled'];

}
if (isset($jsonData['history'][$index20]['item']['properties'])) {
    $model->history[$index20]->item->properties = [];
foreach (array_keys($jsonData['history'][$index20]['item']['properties']) as $index52) {
    
$model->history[$index20]->item->properties[$index52] = new RetailCrm\Api\Model\Entity\Order\Items\ItemProperty();
if (isset($jsonData['history'][$index20]['item']['properties'][$index52]['code'])) {
    $model->history[$index20]->item->properties[$index52]->code = $jsonData['history'][$index20]['item']['properties'][$index52]['code'];

}
if (isset($jsonData['history'][$index20]['item']['properties'][$index52]['name'])) {
    $model->history[$index20]->item->properties[$index52]->name = $jsonData['history'][$index20]['item']['properties'][$index52]['name'];

}
if (isset($jsonData['history'][$index20]['item']['properties'][$index52]['value'])) {
    $model->history[$index20]->item->properties[$index52]->value = $jsonData['history'][$index20]['item']['properties'][$index52]['value'];

}


}

}
if (isset($jsonData['history'][$index20]['item']['purchasePrice'])) {
    $model->history[$index20]->item->purchasePrice = (float) $jsonData['history'][$index20]['item']['purchasePrice'];

}


}
if (isset($jsonData['history'][$index20]['payment'])) {
    
$model->history[$index20]->payment = new RetailCrm\Api\Model\Entity\Order\Payment();
if (isset($jsonData['history'][$index20]['payment']['id'])) {
    $model->history[$index20]->payment->id = $jsonData['history'][$index20]['payment']['id'];

}
if (isset($jsonData['history'][$index20]['payment']['status'])) {
    $model->history[$index20]->payment->status = $jsonData['history'][$index20]['payment']['status'];

}
if (isset($jsonData['history'][$index20]['payment']['type'])) {
    $model->history[$index20]->payment->type = $jsonData['history'][$index20]['payment']['type'];

}
if (isset($jsonData['history'][$index20]['payment']['externalId'])) {
    $model->history[$index20]->payment->externalId = $jsonData['history'][$index20]['payment']['externalId'];

}
if (isset($jsonData['history'][$index20]['payment']['amount'])) {
    $model->history[$index20]->payment->amount = (float) $jsonData['history'][$index20]['payment']['amount'];

}
if (isset($jsonData['history'][$index20]['payment']['paidAt'])) {
    $model->history[$index20]->payment->paidAt = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['history'][$index20]['payment']['paidAt']);

}
if (isset($jsonData['history'][$index20]['payment']['comment'])) {
    $model->history[$index20]->payment->comment = $jsonData['history'][$index20]['payment']['comment'];

}


}
if (isset($jsonData['history'][$index20]['combinedTo'])) {
    
$model->history[$index20]->combinedTo = new RetailCrm\Api\Model\Entity\Order\Order();
if (isset($jsonData['history'][$index20]['combinedTo']['bonusesCreditTotal'])) {
    $model->history[$index20]->combinedTo->bonusesCreditTotal = (float) $jsonData['history'][$index20]['combinedTo']['bonusesCreditTotal'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['bonusesChargeTotal'])) {
    $model->history[$index20]->combinedTo->bonusesChargeTotal = (float) $jsonData['history'][$index20]['combinedTo']['bonusesChargeTotal'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['summ'])) {
    $model->history[$index20]->combinedTo->summ = (float) $jsonData['history'][$index20]['combinedTo']['summ'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['id'])) {
    $model->history[$index20]->combinedTo->id = $jsonData['history'][$index20]['combinedTo']['id'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['slug'])) {
    $model->history[$index20]->combinedTo->slug = $jsonData['history'][$index20]['combinedTo']['slug'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['number'])) {
    $model->history[$index20]->combinedTo->number = $jsonData['history'][$index20]['combinedTo']['number'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['externalId'])) {
    $model->history[$index20]->combinedTo->externalId = $jsonData['history'][$index20]['combinedTo']['externalId'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['orderType'])) {
    $model->history[$index20]->combinedTo->orderType = $jsonData['history'][$index20]['combinedTo']['orderType'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['orderMethod'])) {
    $model->history[$index20]->combinedTo->orderMethod = $jsonData['history'][$index20]['combinedTo']['orderMethod'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['privilegeType'])) {
    $model->history[$index20]->combinedTo->privilegeType = $jsonData['history'][$index20]['combinedTo']['privilegeType'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['countryIso'])) {
    $model->history[$index20]->combinedTo->countryIso = $jsonData['history'][$index20]['combinedTo']['countryIso'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['createdAt'])) {
    $model->history[$index20]->combinedTo->createdAt = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['history'][$index20]['combinedTo']['createdAt']);

}
if (isset($jsonData['history'][$index20]['combinedTo']['statusUpdatedAt'])) {
    $model->history[$index20]->combinedTo->statusUpdatedAt = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['history'][$index20]['combinedTo']['statusUpdatedAt']);

}
if (isset($jsonData['history'][$index20]['combinedTo']['discountManualAmount'])) {
    $model->history[$index20]->combinedTo->discountManualAmount = (float) $jsonData['history'][$index20]['combinedTo']['discountManualAmount'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['discountManualPercent'])) {
    $model->history[$index20]->combinedTo->discountManualPercent = (float) $jsonData['history'][$index20]['combinedTo']['discountManualPercent'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['totalSumm'])) {
    $model->history[$index20]->combinedTo->totalSumm = (float) $jsonData['history'][$index20]['combinedTo']['totalSumm'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['prepaySum'])) {
    $model->history[$index20]->combinedTo->prepaySum = (float) $jsonData['history'][$index20]['combinedTo']['prepaySum'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['purchaseSumm'])) {
    $model->history[$index20]->combinedTo->purchaseSumm = (float) $jsonData['history'][$index20]['combinedTo']['purchaseSumm'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['personalDiscountPercent'])) {
    $model->history[$index20]->combinedTo->personalDiscountPercent = (float) $jsonData['history'][$index20]['combinedTo']['personalDiscountPercent'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['loyaltyLevel'])) {
    
$model->history[$index20]->combinedTo->loyaltyLevel = new RetailCrm\Api\Model\Entity\Loyalty\LoyaltyLevel();
if (isset($jsonData['history'][$index20]['combinedTo']['loyaltyLevel']['id'])) {
    $model->history[$index20]->combinedTo->loyaltyLevel->id = $jsonData['history'][$index20]['combinedTo']['loyaltyLevel']['id'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['loyaltyLevel']['name'])) {
    $model->history[$index20]->combinedTo->loyaltyLevel->name = $jsonData['history'][$index20]['combinedTo']['loyaltyLevel']['name'];

}


}
if (isset($jsonData['history'][$index20]['combinedTo']['loyaltyEvent'])) {
    
$model->history[$index20]->combinedTo->loyaltyEvent = new RetailCrm\Api\Model\Entity\Loyalty\AbstractLoyaltyEvent();
if (isset($jsonData['history'][$index20]['combinedTo']['loyaltyEvent']['id'])) {
    $model->history[$index20]->combinedTo->loyaltyEvent->id = $jsonData['history'][$index20]['combinedTo']['loyaltyEvent']['id'];

}


}
if (isset($jsonData['history'][$index20]['combinedTo']['mark'])) {
    $model->history[$index20]->combinedTo->mark = $jsonData['history'][$index20]['combinedTo']['mark'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['markDatetime'])) {
    $model->history[$index20]->combinedTo->markDatetime = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['history'][$index20]['combinedTo']['markDatetime']);

}
if (isset($jsonData['history'][$index20]['combinedTo']['lastName'])) {
    $model->history[$index20]->combinedTo->lastName = $jsonData['history'][$index20]['combinedTo']['lastName'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['firstName'])) {
    $model->history[$index20]->combinedTo->firstName = $jsonData['history'][$index20]['combinedTo']['firstName'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['patronymic'])) {
    $model->history[$index20]->combinedTo->patronymic = $jsonData['history'][$index20]['combinedTo']['patronymic'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['phone'])) {
    $model->history[$index20]->combinedTo->phone = $jsonData['history'][$index20]['combinedTo']['phone'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['additionalPhone'])) {
    $model->history[$index20]->combinedTo->additionalPhone = $jsonData['history'][$index20]['combinedTo']['additionalPhone'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['email'])) {
    $model->history[$index20]->combinedTo->email = $jsonData['history'][$index20]['combinedTo']['email'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['call'])) {
    $model->history[$index20]->combinedTo->call = $jsonData['history'][$index20]['combinedTo']['call'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['expired'])) {
    $model->history[$index20]->combinedTo->expired = $jsonData['history'][$index20]['combinedTo']['expired'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['customerComment'])) {
    $model->history[$index20]->combinedTo->customerComment = $jsonData['history'][$index20]['combinedTo']['customerComment'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['managerComment'])) {
    $model->history[$index20]->combinedTo->managerComment = $jsonData['history'][$index20]['combinedTo']['managerComment'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['managerId'])) {
    $model->history[$index20]->combinedTo->managerId = $jsonData['history'][$index20]['combinedTo']['managerId'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['customer'])) {
    

if (
    !empty($jsonData['history'][$index20]['combinedTo']['customer']['type']) &&
    \RetailCrm\Api\Enum\Customers\CustomerType::CORPORATE_CUSTOMER === $jsonData['history'][$index20]['combinedTo']['customer']['type']
) {
    
$model->history[$index20]->combinedTo->customer = new RetailCrm\Api\Model\Entity\Customers\Customer();
if (isset($jsonData['history'][$index20]['combinedTo']['customer']['type'])) {
    $model->history[$index20]->combinedTo->customer->type = $jsonData['history'][$index20]['combinedTo']['customer']['type'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['customer']['id'])) {
    $model->history[$index20]->combinedTo->customer->id = $jsonData['history'][$index20]['combinedTo']['customer']['id'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['customer']['externalId'])) {
    $model->history[$index20]->combinedTo->customer->externalId = $jsonData['history'][$index20]['combinedTo']['customer']['externalId'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['customer']['isContact'])) {
    $model->history[$index20]->combinedTo->customer->isContact = $jsonData['history'][$index20]['combinedTo']['customer']['isContact'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['customer']['createdAt'])) {
    $model->history[$index20]->combinedTo->customer->createdAt = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['history'][$index20]['combinedTo']['customer']['createdAt']);

}
if (isset($jsonData['history'][$index20]['combinedTo']['customer']['managerId'])) {
    $model->history[$index20]->combinedTo->customer->managerId = $jsonData['history'][$index20]['combinedTo']['customer']['managerId'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['customer']['vip'])) {
    $model->history[$index20]->combinedTo->customer->vip = $jsonData['history'][$index20]['combinedTo']['customer']['vip'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['customer']['bad'])) {
    $model->history[$index20]->combinedTo->customer->bad = $jsonData['history'][$index20]['combinedTo']['customer']['bad'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['customer']['browserId'])) {
    $model->history[$index20]->combinedTo->customer->browserId = $jsonData['history'][$index20]['combinedTo']['customer']['browserId'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['customer']['site'])) {
    $model->history[$index20]->combinedTo->customer->site = $jsonData['history'][$index20]['combinedTo']['customer']['site'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['customer']['contragent'])) {
    
$model->history[$index20]->combinedTo->customer->contragent = new RetailCrm\Api\Model\Entity\Customers\CustomerContragent();
if (isset($jsonData['history'][$index20]['combinedTo']['customer']['contragent']['contragentType'])) {
    $model->history[$index20]->combinedTo->customer->contragent->contragentType = $jsonData['history'][$index20]['combinedTo']['customer']['contragent']['contragentType'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['customer']['contragent']['legalName'])) {
    $model->history[$index20]->combinedTo->customer->contragent->legalName = $jsonData['history'][$index20]['combinedTo']['customer']['contragent']['legalName'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['customer']['contragent']['legalAddress'])) {
    $model->history[$index20]->combinedTo->customer->contragent->legalAddress = $jsonData['history'][$index20]['combinedTo']['customer']['contragent']['legalAddress'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['customer']['contragent']['INN'])) {
    $model->history[$index20]->combinedTo->customer->contragent->INN = $jsonData['history'][$index20]['combinedTo']['customer']['contragent']['INN'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['customer']['contragent']['OKPO'])) {
    $model->history[$index20]->combinedTo->customer->contragent->OKPO = $jsonData['history'][$index20]['combinedTo']['customer']['contragent']['OKPO'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['customer']['contragent']['KPP'])) {
    $model->history[$index20]->combinedTo->customer->contragent->KPP = $jsonData['history'][$index20]['combinedTo']['customer']['contragent']['KPP'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['customer']['contragent']['OGRN'])) {
    $model->history[$index20]->combinedTo->customer->contragent->OGRN = $jsonData['history'][$index20]['combinedTo']['customer']['contragent']['OGRN'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['customer']['contragent']['OGRNIP'])) {
    $model->history[$index20]->combinedTo->customer->contragent->OGRNIP = $jsonData['history'][$index20]['combinedTo']['customer']['contragent']['OGRNIP'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['customer']['contragent']['certificateNumber'])) {
    $model->history[$index20]->combinedTo->customer->contragent->certificateNumber = $jsonData['history'][$index20]['combinedTo']['customer']['contragent']['certificateNumber'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['customer']['contragent']['certificateDate'])) {
    $model->history[$index20]->combinedTo->customer->contragent->certificateDate = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['history'][$index20]['combinedTo']['customer']['contragent']['certificateDate']);

}
if (isset($jsonData['history'][$index20]['combinedTo']['customer']['contragent']['BIK'])) {
    $model->history[$index20]->combinedTo->customer->contragent->BIK = $jsonData['history'][$index20]['combinedTo']['customer']['contragent']['BIK'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['customer']['contragent']['bank'])) {
    $model->history[$index20]->combinedTo->customer->contragent->bank = $jsonData['history'][$index20]['combinedTo']['customer']['contragent']['bank'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['customer']['contragent']['bankAddress'])) {
    $model->history[$index20]->combinedTo->customer->contragent->bankAddress = $jsonData['history'][$index20]['combinedTo']['customer']['contragent']['bankAddress'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['customer']['contragent']['corrAccount'])) {
    $model->history[$index20]->combinedTo->customer->contragent->corrAccount = $jsonData['history'][$index20]['combinedTo']['customer']['contragent']['corrAccount'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['customer']['contragent']['bankAccount'])) {
    $model->history[$index20]->combinedTo->customer->contragent->bankAccount = $jsonData['history'][$index20]['combinedTo']['customer']['contragent']['bankAccount'];

}


}
if (isset($jsonData['history'][$index20]['combinedTo']['customer']['tags'])) {
    $model->history[$index20]->combinedTo->customer->tags = [];
foreach (array_keys($jsonData['history'][$index20]['combinedTo']['customer']['tags']) as $index64) {
    
$model->history[$index20]->combinedTo->customer->tags[$index64] = new RetailCrm\Api\Model\Entity\Customers\CustomerTag();
if (isset($jsonData['history'][$index20]['combinedTo']['customer']['tags'][$index64]['name'])) {
    $model->history[$index20]->combinedTo->customer->tags[$index64]->name = $jsonData['history'][$index20]['combinedTo']['customer']['tags'][$index64]['name'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['customer']['tags'][$index64]['color'])) {
    $model->history[$index20]->combinedTo->customer->tags[$index64]->color = $jsonData['history'][$index20]['combinedTo']['customer']['tags'][$index64]['color'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['customer']['tags'][$index64]['attached'])) {
    $model->history[$index20]->combinedTo->customer->tags[$index64]->attached = $jsonData['history'][$index20]['combinedTo']['customer']['tags'][$index64]['attached'];

}


}

}
if (isset($jsonData['history'][$index20]['combinedTo']['customer']['avgMarginSumm'])) {
    $model->history[$index20]->combinedTo->customer->avgMarginSumm = (float) $jsonData['history'][$index20]['combinedTo']['customer']['avgMarginSumm'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['customer']['marginSumm'])) {
    $model->history[$index20]->combinedTo->customer->marginSumm = (float) $jsonData['history'][$index20]['combinedTo']['customer']['marginSumm'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['customer']['totalSumm'])) {
    $model->history[$index20]->combinedTo->customer->totalSumm = (float) $jsonData['history'][$index20]['combinedTo']['customer']['totalSumm'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['customer']['averageSumm'])) {
    $model->history[$index20]->combinedTo->customer->averageSumm = (float) $jsonData['history'][$index20]['combinedTo']['customer']['averageSumm'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['customer']['ordersCount'])) {
    $model->history[$index20]->combinedTo->customer->ordersCount = $jsonData['history'][$index20]['combinedTo']['customer']['ordersCount'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['customer']['costSumm'])) {
    $model->history[$index20]->combinedTo->customer->costSumm = (float) $jsonData['history'][$index20]['combinedTo']['customer']['costSumm'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['customer']['customFields'])) {
    $model->history[$index20]->combinedTo->customer->customFields = [];
foreach (array_keys($jsonData['history'][$index20]['combinedTo']['customer']['customFields']) as $index72) {
    $model->history[$index20]->combinedTo->customer->customFields[$index72] = $jsonData['history'][$index20]['combinedTo']['customer']['customFields'][$index72];

}

}
if (isset($jsonData['history'][$index20]['combinedTo']['customer']['personalDiscount'])) {
    $model->history[$index20]->combinedTo->customer->personalDiscount = (float) $jsonData['history'][$index20]['combinedTo']['customer']['personalDiscount'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['customer']['cumulativeDiscount'])) {
    $model->history[$index20]->combinedTo->customer->cumulativeDiscount = (float) $jsonData['history'][$index20]['combinedTo']['customer']['cumulativeDiscount'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['customer']['discountCardNumber'])) {
    $model->history[$index20]->combinedTo->customer->discountCardNumber = $jsonData['history'][$index20]['combinedTo']['customer']['discountCardNumber'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['customer']['firstClientId'])) {
    $model->history[$index20]->combinedTo->customer->firstClientId = $jsonData['history'][$index20]['combinedTo']['customer']['firstClientId'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['customer']['lastClientId'])) {
    $model->history[$index20]->combinedTo->customer->lastClientId = $jsonData['history'][$index20]['combinedTo']['customer']['lastClientId'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['customer']['address'])) {
    
$model->history[$index20]->combinedTo->customer->address = new RetailCrm\Api\Model\Entity\Customers\CustomerAddress();
if (isset($jsonData['history'][$index20]['combinedTo']['customer']['address']['id'])) {
    $model->history[$index20]->combinedTo->customer->address->id = $jsonData['history'][$index20]['combinedTo']['customer']['address']['id'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['customer']['address']['name'])) {
    $model->history[$index20]->combinedTo->customer->address->name = $jsonData['history'][$index20]['combinedTo']['customer']['address']['name'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['customer']['address']['isMain'])) {
    $model->history[$index20]->combinedTo->customer->address->isMain = $jsonData['history'][$index20]['combinedTo']['customer']['address']['isMain'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['customer']['address']['index'])) {
    $model->history[$index20]->combinedTo->customer->address->index = $jsonData['history'][$index20]['combinedTo']['customer']['address']['index'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['customer']['address']['countryIso'])) {
    $model->history[$index20]->combinedTo->customer->address->countryIso = $jsonData['history'][$index20]['combinedTo']['customer']['address']['countryIso'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['customer']['address']['region'])) {
    $model->history[$index20]->combinedTo->customer->address->region = $jsonData['history'][$index20]['combinedTo']['customer']['address']['region'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['customer']['address']['regionId'])) {
    $model->history[$index20]->combinedTo->customer->address->regionId = $jsonData['history'][$index20]['combinedTo']['customer']['address']['regionId'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['customer']['address']['city'])) {
    $model->history[$index20]->combinedTo->customer->address->city = $jsonData['history'][$index20]['combinedTo']['customer']['address']['city'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['customer']['address']['cityId'])) {
    $model->history[$index20]->combinedTo->customer->address->cityId = $jsonData['history'][$index20]['combinedTo']['customer']['address']['cityId'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['customer']['address']['cityType'])) {
    $model->history[$index20]->combinedTo->customer->address->cityType = $jsonData['history'][$index20]['combinedTo']['customer']['address']['cityType'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['customer']['address']['street'])) {
    $model->history[$index20]->combinedTo->customer->address->street = $jsonData['history'][$index20]['combinedTo']['customer']['address']['street'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['customer']['address']['streetId'])) {
    $model->history[$index20]->combinedTo->customer->address->streetId = $jsonData['history'][$index20]['combinedTo']['customer']['address']['streetId'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['customer']['address']['streetType'])) {
    $model->history[$index20]->combinedTo->customer->address->streetType = $jsonData['history'][$index20]['combinedTo']['customer']['address']['streetType'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['customer']['address']['building'])) {
    $model->history[$index20]->combinedTo->customer->address->building = $jsonData['history'][$index20]['combinedTo']['customer']['address']['building'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['customer']['address']['flat'])) {
    $model->history[$index20]->combinedTo->customer->address->flat = $jsonData['history'][$index20]['combinedTo']['customer']['address']['flat'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['customer']['address']['floor'])) {
    $model->history[$index20]->combinedTo->customer->address->floor = $jsonData['history'][$index20]['combinedTo']['customer']['address']['floor'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['customer']['address']['block'])) {
    $model->history[$index20]->combinedTo->customer->address->block = $jsonData['history'][$index20]['combinedTo']['customer']['address']['block'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['customer']['address']['house'])) {
    $model->history[$index20]->combinedTo->customer->address->house = $jsonData['history'][$index20]['combinedTo']['customer']['address']['house'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['customer']['address']['housing'])) {
    $model->history[$index20]->combinedTo->customer->address->housing = $jsonData['history'][$index20]['combinedTo']['customer']['address']['housing'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['customer']['address']['metro'])) {
    $model->history[$index20]->combinedTo->customer->address->metro = $jsonData['history'][$index20]['combinedTo']['customer']['address']['metro'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['customer']['address']['notes'])) {
    $model->history[$index20]->combinedTo->customer->address->notes = $jsonData['history'][$index20]['combinedTo']['customer']['address']['notes'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['customer']['address']['text'])) {
    $model->history[$index20]->combinedTo->customer->address->text = $jsonData['history'][$index20]['combinedTo']['customer']['address']['text'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['customer']['address']['externalId'])) {
    $model->history[$index20]->combinedTo->customer->address->externalId = $jsonData['history'][$index20]['combinedTo']['customer']['address']['externalId'];

}


}
if (isset($jsonData['history'][$index20]['combinedTo']['customer']['segments'])) {
    $model->history[$index20]->combinedTo->customer->segments = [];
foreach (array_keys($jsonData['history'][$index20]['combinedTo']['customer']['segments']) as $index68) {
    
$model->history[$index20]->combinedTo->customer->segments[$index68] = new RetailCrm\Api\Model\Entity\Customers\Segment();
if (isset($jsonData['history'][$index20]['combinedTo']['customer']['segments'][$index68]['id'])) {
    $model->history[$index20]->combinedTo->customer->segments[$index68]->id = $jsonData['history'][$index20]['combinedTo']['customer']['segments'][$index68]['id'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['customer']['segments'][$index68]['code'])) {
    $model->history[$index20]->combinedTo->customer->segments[$index68]->code = $jsonData['history'][$index20]['combinedTo']['customer']['segments'][$index68]['code'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['customer']['segments'][$index68]['name'])) {
    $model->history[$index20]->combinedTo->customer->segments[$index68]->name = $jsonData['history'][$index20]['combinedTo']['customer']['segments'][$index68]['name'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['customer']['segments'][$index68]['createdAt'])) {
    $model->history[$index20]->combinedTo->customer->segments[$index68]->createdAt = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['history'][$index20]['combinedTo']['customer']['segments'][$index68]['createdAt']);

}
if (isset($jsonData['history'][$index20]['combinedTo']['customer']['segments'][$index68]['isDynamic'])) {
    $model->history[$index20]->combinedTo->customer->segments[$index68]->isDynamic = $jsonData['history'][$index20]['combinedTo']['customer']['segments'][$index68]['isDynamic'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['customer']['segments'][$index68]['customersCount'])) {
    $model->history[$index20]->combinedTo->customer->segments[$index68]->customersCount = $jsonData['history'][$index20]['combinedTo']['customer']['segments'][$index68]['customersCount'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['customer']['segments'][$index68]['active'])) {
    $model->history[$index20]->combinedTo->customer->segments[$index68]->active = $jsonData['history'][$index20]['combinedTo']['customer']['segments'][$index68]['active'];

}


}

}
if (isset($jsonData['history'][$index20]['combinedTo']['customer']['maturationTime'])) {
    $model->history[$index20]->combinedTo->customer->maturationTime = $jsonData['history'][$index20]['combinedTo']['customer']['maturationTime'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['customer']['firstName'])) {
    $model->history[$index20]->combinedTo->customer->firstName = $jsonData['history'][$index20]['combinedTo']['customer']['firstName'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['customer']['lastName'])) {
    $model->history[$index20]->combinedTo->customer->lastName = $jsonData['history'][$index20]['combinedTo']['customer']['lastName'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['customer']['patronymic'])) {
    $model->history[$index20]->combinedTo->customer->patronymic = $jsonData['history'][$index20]['combinedTo']['customer']['patronymic'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['customer']['sex'])) {
    $model->history[$index20]->combinedTo->customer->sex = $jsonData['history'][$index20]['combinedTo']['customer']['sex'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['customer']['presumableSex'])) {
    $model->history[$index20]->combinedTo->customer->presumableSex = $jsonData['history'][$index20]['combinedTo']['customer']['presumableSex'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['customer']['email'])) {
    $model->history[$index20]->combinedTo->customer->email = $jsonData['history'][$index20]['combinedTo']['customer']['email'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['customer']['emailMarketingUnsubscribedAt'])) {
    $model->history[$index20]->combinedTo->customer->emailMarketingUnsubscribedAt = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['history'][$index20]['combinedTo']['customer']['emailMarketingUnsubscribedAt']);

}
if (isset($jsonData['history'][$index20]['combinedTo']['customer']['phones'])) {
    $model->history[$index20]->combinedTo->customer->phones = [];
foreach (array_keys($jsonData['history'][$index20]['combinedTo']['customer']['phones']) as $index66) {
    
$model->history[$index20]->combinedTo->customer->phones[$index66] = new RetailCrm\Api\Model\Entity\Customers\CustomerPhone();
if (isset($jsonData['history'][$index20]['combinedTo']['customer']['phones'][$index66]['number'])) {
    $model->history[$index20]->combinedTo->customer->phones[$index66]->number = $jsonData['history'][$index20]['combinedTo']['customer']['phones'][$index66]['number'];

}


}

}
if (isset($jsonData['history'][$index20]['combinedTo']['customer']['birthday'])) {
    $model->history[$index20]->combinedTo->customer->birthday = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['history'][$index20]['combinedTo']['customer']['birthday']);

}
if (isset($jsonData['history'][$index20]['combinedTo']['customer']['source'])) {
    
$model->history[$index20]->combinedTo->customer->source = new RetailCrm\Api\Model\Entity\Source();
if (isset($jsonData['history'][$index20]['combinedTo']['customer']['source']['source'])) {
    $model->history[$index20]->combinedTo->customer->source->source = $jsonData['history'][$index20]['combinedTo']['customer']['source']['source'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['customer']['source']['medium'])) {
    $model->history[$index20]->combinedTo->customer->source->medium = $jsonData['history'][$index20]['combinedTo']['customer']['source']['medium'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['customer']['source']['campaign'])) {
    $model->history[$index20]->combinedTo->customer->source->campaign = $jsonData['history'][$index20]['combinedTo']['customer']['source']['campaign'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['customer']['source']['keyword'])) {
    $model->history[$index20]->combinedTo->customer->source->keyword = $jsonData['history'][$index20]['combinedTo']['customer']['source']['keyword'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['customer']['source']['content'])) {
    $model->history[$index20]->combinedTo->customer->source->content = $jsonData['history'][$index20]['combinedTo']['customer']['source']['content'];

}


}
if (isset($jsonData['history'][$index20]['combinedTo']['customer']['photoUrl'])) {
    $model->history[$index20]->combinedTo->customer->photoUrl = $jsonData['history'][$index20]['combinedTo']['customer']['photoUrl'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['customer']['mgCustomerId'])) {
    $model->history[$index20]->combinedTo->customer->mgCustomerId = $jsonData['history'][$index20]['combinedTo']['customer']['mgCustomerId'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['customer']['subscribed'])) {
    $model->history[$index20]->combinedTo->customer->subscribed = $jsonData['history'][$index20]['combinedTo']['customer']['subscribed'];

}


} else {
    
$model->history[$index20]->combinedTo->customer = new RetailCrm\Api\Model\Entity\CustomersCorporate\CustomerCorporate();
if (isset($jsonData['history'][$index20]['combinedTo']['customer']['type'])) {
    $model->history[$index20]->combinedTo->customer->type = $jsonData['history'][$index20]['combinedTo']['customer']['type'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['customer']['id'])) {
    $model->history[$index20]->combinedTo->customer->id = $jsonData['history'][$index20]['combinedTo']['customer']['id'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['customer']['externalId'])) {
    $model->history[$index20]->combinedTo->customer->externalId = $jsonData['history'][$index20]['combinedTo']['customer']['externalId'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['customer']['nickName'])) {
    $model->history[$index20]->combinedTo->customer->nickName = $jsonData['history'][$index20]['combinedTo']['customer']['nickName'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['customer']['mainAddress'])) {
    
$model->history[$index20]->combinedTo->customer->mainAddress = new RetailCrm\Api\Model\Entity\CustomersCorporate\EntityWithExternalIdNameOutput();
if (isset($jsonData['history'][$index20]['combinedTo']['customer']['mainAddress']['id'])) {
    $model->history[$index20]->combinedTo->customer->mainAddress->id = $jsonData['history'][$index20]['combinedTo']['customer']['mainAddress']['id'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['customer']['mainAddress']['externalId'])) {
    $model->history[$index20]->combinedTo->customer->mainAddress->externalId = $jsonData['history'][$index20]['combinedTo']['customer']['mainAddress']['externalId'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['customer']['mainAddress']['name'])) {
    $model->history[$index20]->combinedTo->customer->mainAddress->name = $jsonData['history'][$index20]['combinedTo']['customer']['mainAddress']['name'];

}


}
if (isset($jsonData['history'][$index20]['combinedTo']['customer']['createdAt'])) {
    $model->history[$index20]->combinedTo->customer->createdAt = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['history'][$index20]['combinedTo']['customer']['createdAt']);

}
if (isset($jsonData['history'][$index20]['combinedTo']['customer']['managerId'])) {
    $model->history[$index20]->combinedTo->customer->managerId = $jsonData['history'][$index20]['combinedTo']['customer']['managerId'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['customer']['source'])) {
    
$model->history[$index20]->combinedTo->customer->source = new RetailCrm\Api\Model\Entity\Source();
if (isset($jsonData['history'][$index20]['combinedTo']['customer']['source']['source'])) {
    $model->history[$index20]->combinedTo->customer->source->source = $jsonData['history'][$index20]['combinedTo']['customer']['source']['source'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['customer']['source']['medium'])) {
    $model->history[$index20]->combinedTo->customer->source->medium = $jsonData['history'][$index20]['combinedTo']['customer']['source']['medium'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['customer']['source']['campaign'])) {
    $model->history[$index20]->combinedTo->customer->source->campaign = $jsonData['history'][$index20]['combinedTo']['customer']['source']['campaign'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['customer']['source']['keyword'])) {
    $model->history[$index20]->combinedTo->customer->source->keyword = $jsonData['history'][$index20]['combinedTo']['customer']['source']['keyword'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['customer']['source']['content'])) {
    $model->history[$index20]->combinedTo->customer->source->content = $jsonData['history'][$index20]['combinedTo']['customer']['source']['content'];

}


}
if (isset($jsonData['history'][$index20]['combinedTo']['customer']['customerContacts'])) {
    $model->history[$index20]->combinedTo->customer->customerContacts = [];
foreach (array_keys($jsonData['history'][$index20]['combinedTo']['customer']['customerContacts']) as $index76) {
    
$model->history[$index20]->combinedTo->customer->customerContacts[$index76] = new RetailCrm\Api\Model\Entity\CustomersCorporate\CustomerContact();
if (isset($jsonData['history'][$index20]['combinedTo']['customer']['customerContacts'][$index76]['id'])) {
    $model->history[$index20]->combinedTo->customer->customerContacts[$index76]->id = $jsonData['history'][$index20]['combinedTo']['customer']['customerContacts'][$index76]['id'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['customer']['customerContacts'][$index76]['isMain'])) {
    $model->history[$index20]->combinedTo->customer->customerContacts[$index76]->isMain = $jsonData['history'][$index20]['combinedTo']['customer']['customerContacts'][$index76]['isMain'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['customer']['customerContacts'][$index76]['customer'])) {
    
$model->history[$index20]->combinedTo->customer->customerContacts[$index76]->customer = new RetailCrm\Api\Model\Entity\CustomersCorporate\SerializedRelationAbstractCustomer();
if (isset($jsonData['history'][$index20]['combinedTo']['customer']['customerContacts'][$index76]['customer']['id'])) {
    $model->history[$index20]->combinedTo->customer->customerContacts[$index76]->customer->id = $jsonData['history'][$index20]['combinedTo']['customer']['customerContacts'][$index76]['customer']['id'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['customer']['customerContacts'][$index76]['customer']['externalId'])) {
    $model->history[$index20]->combinedTo->customer->customerContacts[$index76]->customer->externalId = $jsonData['history'][$index20]['combinedTo']['customer']['customerContacts'][$index76]['customer']['externalId'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['customer']['customerContacts'][$index76]['customer']['browserId'])) {
    $model->history[$index20]->combinedTo->customer->customerContacts[$index76]->customer->browserId = $jsonData['history'][$index20]['combinedTo']['customer']['customerContacts'][$index76]['customer']['browserId'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['customer']['customerContacts'][$index76]['customer']['site'])) {
    $model->history[$index20]->combinedTo->customer->customerContacts[$index76]->customer->site = $jsonData['history'][$index20]['combinedTo']['customer']['customerContacts'][$index76]['customer']['site'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['customer']['customerContacts'][$index76]['customer']['companies'])) {
    $model->history[$index20]->combinedTo->customer->customerContacts[$index76]->customer->companies = [];
foreach (array_keys($jsonData['history'][$index20]['combinedTo']['customer']['customerContacts'][$index76]['customer']['companies']) as $index111) {
    
$model->history[$index20]->combinedTo->customer->customerContacts[$index76]->customer->companies[$index111] = new RetailCrm\Api\Model\Entity\CustomersCorporate\CustomerContactCompany();
if (isset($jsonData['history'][$index20]['combinedTo']['customer']['customerContacts'][$index76]['customer']['companies'][$index111]['id'])) {
    $model->history[$index20]->combinedTo->customer->customerContacts[$index76]->customer->companies[$index111]->id = $jsonData['history'][$index20]['combinedTo']['customer']['customerContacts'][$index76]['customer']['companies'][$index111]['id'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['customer']['customerContacts'][$index76]['customer']['companies'][$index111]['externalId'])) {
    $model->history[$index20]->combinedTo->customer->customerContacts[$index76]->customer->companies[$index111]->externalId = $jsonData['history'][$index20]['combinedTo']['customer']['customerContacts'][$index76]['customer']['companies'][$index111]['externalId'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['customer']['customerContacts'][$index76]['customer']['companies'][$index111]['company'])) {
    
$model->history[$index20]->combinedTo->customer->customerContacts[$index76]->customer->companies[$index111]->company = new RetailCrm\Api\Model\Entity\CustomersCorporate\EntityWithExternalIdNameOutput();
if (isset($jsonData['history'][$index20]['combinedTo']['customer']['customerContacts'][$index76]['customer']['companies'][$index111]['company']['id'])) {
    $model->history[$index20]->combinedTo->customer->customerContacts[$index76]->customer->companies[$index111]->company->id = $jsonData['history'][$index20]['combinedTo']['customer']['customerContacts'][$index76]['customer']['companies'][$index111]['company']['id'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['customer']['customerContacts'][$index76]['customer']['companies'][$index111]['company']['externalId'])) {
    $model->history[$index20]->combinedTo->customer->customerContacts[$index76]->customer->companies[$index111]->company->externalId = $jsonData['history'][$index20]['combinedTo']['customer']['customerContacts'][$index76]['customer']['companies'][$index111]['company']['externalId'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['customer']['customerContacts'][$index76]['customer']['companies'][$index111]['company']['name'])) {
    $model->history[$index20]->combinedTo->customer->customerContacts[$index76]->customer->companies[$index111]->company->name = $jsonData['history'][$index20]['combinedTo']['customer']['customerContacts'][$index76]['customer']['companies'][$index111]['company']['name'];

}


}


}

}


}
if (isset($jsonData['history'][$index20]['combinedTo']['customer']['customerContacts'][$index76]['companies'])) {
    $model->history[$index20]->combinedTo->customer->customerContacts[$index76]->companies = [];
foreach (array_keys($jsonData['history'][$index20]['combinedTo']['customer']['customerContacts'][$index76]['companies']) as $index99) {
    
$model->history[$index20]->combinedTo->customer->customerContacts[$index76]->companies[$index99] = new RetailCrm\Api\Model\Entity\CustomersCorporate\CustomerContactCompany();
if (isset($jsonData['history'][$index20]['combinedTo']['customer']['customerContacts'][$index76]['companies'][$index99]['id'])) {
    $model->history[$index20]->combinedTo->customer->customerContacts[$index76]->companies[$index99]->id = $jsonData['history'][$index20]['combinedTo']['customer']['customerContacts'][$index76]['companies'][$index99]['id'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['customer']['customerContacts'][$index76]['companies'][$index99]['externalId'])) {
    $model->history[$index20]->combinedTo->customer->customerContacts[$index76]->companies[$index99]->externalId = $jsonData['history'][$index20]['combinedTo']['customer']['customerContacts'][$index76]['companies'][$index99]['externalId'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['customer']['customerContacts'][$index76]['companies'][$index99]['company'])) {
    
$model->history[$index20]->combinedTo->customer->customerContacts[$index76]->companies[$index99]->company = new RetailCrm\Api\Model\Entity\CustomersCorporate\EntityWithExternalIdNameOutput();
if (isset($jsonData['history'][$index20]['combinedTo']['customer']['customerContacts'][$index76]['companies'][$index99]['company']['id'])) {
    $model->history[$index20]->combinedTo->customer->customerContacts[$index76]->companies[$index99]->company->id = $jsonData['history'][$index20]['combinedTo']['customer']['customerContacts'][$index76]['companies'][$index99]['company']['id'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['customer']['customerContacts'][$index76]['companies'][$index99]['company']['externalId'])) {
    $model->history[$index20]->combinedTo->customer->customerContacts[$index76]->companies[$index99]->company->externalId = $jsonData['history'][$index20]['combinedTo']['customer']['customerContacts'][$index76]['companies'][$index99]['company']['externalId'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['customer']['customerContacts'][$index76]['companies'][$index99]['company']['name'])) {
    $model->history[$index20]->combinedTo->customer->customerContacts[$index76]->companies[$index99]->company->name = $jsonData['history'][$index20]['combinedTo']['customer']['customerContacts'][$index76]['companies'][$index99]['company']['name'];

}


}


}

}


}

}
if (isset($jsonData['history'][$index20]['combinedTo']['customer']['companies'])) {
    $model->history[$index20]->combinedTo->customer->companies = [];
foreach (array_keys($jsonData['history'][$index20]['combinedTo']['customer']['companies']) as $index69) {
    
$model->history[$index20]->combinedTo->customer->companies[$index69] = new RetailCrm\Api\Model\Entity\CustomersCorporate\Company();
if (isset($jsonData['history'][$index20]['combinedTo']['customer']['companies'][$index69]['id'])) {
    $model->history[$index20]->combinedTo->customer->companies[$index69]->id = $jsonData['history'][$index20]['combinedTo']['customer']['companies'][$index69]['id'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['customer']['companies'][$index69]['isMain'])) {
    $model->history[$index20]->combinedTo->customer->companies[$index69]->isMain = $jsonData['history'][$index20]['combinedTo']['customer']['companies'][$index69]['isMain'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['customer']['companies'][$index69]['externalId'])) {
    $model->history[$index20]->combinedTo->customer->companies[$index69]->externalId = $jsonData['history'][$index20]['combinedTo']['customer']['companies'][$index69]['externalId'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['customer']['companies'][$index69]['active'])) {
    $model->history[$index20]->combinedTo->customer->companies[$index69]->active = $jsonData['history'][$index20]['combinedTo']['customer']['companies'][$index69]['active'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['customer']['companies'][$index69]['name'])) {
    $model->history[$index20]->combinedTo->customer->companies[$index69]->name = $jsonData['history'][$index20]['combinedTo']['customer']['companies'][$index69]['name'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['customer']['companies'][$index69]['brand'])) {
    $model->history[$index20]->combinedTo->customer->companies[$index69]->brand = $jsonData['history'][$index20]['combinedTo']['customer']['companies'][$index69]['brand'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['customer']['companies'][$index69]['site'])) {
    $model->history[$index20]->combinedTo->customer->companies[$index69]->site = $jsonData['history'][$index20]['combinedTo']['customer']['companies'][$index69]['site'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['customer']['companies'][$index69]['createdAt'])) {
    $model->history[$index20]->combinedTo->customer->companies[$index69]->createdAt = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['history'][$index20]['combinedTo']['customer']['companies'][$index69]['createdAt']);

}
if (isset($jsonData['history'][$index20]['combinedTo']['customer']['companies'][$index69]['customer'])) {
    
$model->history[$index20]->combinedTo->customer->companies[$index69]->customer = new RetailCrm\Api\Model\Entity\CustomersCorporate\SerializedEntityCustomer();
if (isset($jsonData['history'][$index20]['combinedTo']['customer']['companies'][$index69]['customer']['site'])) {
    $model->history[$index20]->combinedTo->customer->companies[$index69]->customer->site = $jsonData['history'][$index20]['combinedTo']['customer']['companies'][$index69]['customer']['site'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['customer']['companies'][$index69]['customer']['id'])) {
    $model->history[$index20]->combinedTo->customer->companies[$index69]->customer->id = $jsonData['history'][$index20]['combinedTo']['customer']['companies'][$index69]['customer']['id'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['customer']['companies'][$index69]['customer']['externalId'])) {
    $model->history[$index20]->combinedTo->customer->companies[$index69]->customer->externalId = $jsonData['history'][$index20]['combinedTo']['customer']['companies'][$index69]['customer']['externalId'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['customer']['companies'][$index69]['customer']['type'])) {
    $model->history[$index20]->combinedTo->customer->companies[$index69]->customer->type = $jsonData['history'][$index20]['combinedTo']['customer']['companies'][$index69]['customer']['type'];

}


}
if (isset($jsonData['history'][$index20]['combinedTo']['customer']['companies'][$index69]['contragent'])) {
    
$model->history[$index20]->combinedTo->customer->companies[$index69]->contragent = new RetailCrm\Api\Model\Entity\Customers\CustomerContragent();
if (isset($jsonData['history'][$index20]['combinedTo']['customer']['companies'][$index69]['contragent']['contragentType'])) {
    $model->history[$index20]->combinedTo->customer->companies[$index69]->contragent->contragentType = $jsonData['history'][$index20]['combinedTo']['customer']['companies'][$index69]['contragent']['contragentType'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['customer']['companies'][$index69]['contragent']['legalName'])) {
    $model->history[$index20]->combinedTo->customer->companies[$index69]->contragent->legalName = $jsonData['history'][$index20]['combinedTo']['customer']['companies'][$index69]['contragent']['legalName'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['customer']['companies'][$index69]['contragent']['legalAddress'])) {
    $model->history[$index20]->combinedTo->customer->companies[$index69]->contragent->legalAddress = $jsonData['history'][$index20]['combinedTo']['customer']['companies'][$index69]['contragent']['legalAddress'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['customer']['companies'][$index69]['contragent']['INN'])) {
    $model->history[$index20]->combinedTo->customer->companies[$index69]->contragent->INN = $jsonData['history'][$index20]['combinedTo']['customer']['companies'][$index69]['contragent']['INN'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['customer']['companies'][$index69]['contragent']['OKPO'])) {
    $model->history[$index20]->combinedTo->customer->companies[$index69]->contragent->OKPO = $jsonData['history'][$index20]['combinedTo']['customer']['companies'][$index69]['contragent']['OKPO'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['customer']['companies'][$index69]['contragent']['KPP'])) {
    $model->history[$index20]->combinedTo->customer->companies[$index69]->contragent->KPP = $jsonData['history'][$index20]['combinedTo']['customer']['companies'][$index69]['contragent']['KPP'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['customer']['companies'][$index69]['contragent']['OGRN'])) {
    $model->history[$index20]->combinedTo->customer->companies[$index69]->contragent->OGRN = $jsonData['history'][$index20]['combinedTo']['customer']['companies'][$index69]['contragent']['OGRN'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['customer']['companies'][$index69]['contragent']['OGRNIP'])) {
    $model->history[$index20]->combinedTo->customer->companies[$index69]->contragent->OGRNIP = $jsonData['history'][$index20]['combinedTo']['customer']['companies'][$index69]['contragent']['OGRNIP'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['customer']['companies'][$index69]['contragent']['certificateNumber'])) {
    $model->history[$index20]->combinedTo->customer->companies[$index69]->contragent->certificateNumber = $jsonData['history'][$index20]['combinedTo']['customer']['companies'][$index69]['contragent']['certificateNumber'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['customer']['companies'][$index69]['contragent']['certificateDate'])) {
    $model->history[$index20]->combinedTo->customer->companies[$index69]->contragent->certificateDate = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['history'][$index20]['combinedTo']['customer']['companies'][$index69]['contragent']['certificateDate']);

}
if (isset($jsonData['history'][$index20]['combinedTo']['customer']['companies'][$index69]['contragent']['BIK'])) {
    $model->history[$index20]->combinedTo->customer->companies[$index69]->contragent->BIK = $jsonData['history'][$index20]['combinedTo']['customer']['companies'][$index69]['contragent']['BIK'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['customer']['companies'][$index69]['contragent']['bank'])) {
    $model->history[$index20]->combinedTo->customer->companies[$index69]->contragent->bank = $jsonData['history'][$index20]['combinedTo']['customer']['companies'][$index69]['contragent']['bank'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['customer']['companies'][$index69]['contragent']['bankAddress'])) {
    $model->history[$index20]->combinedTo->customer->companies[$index69]->contragent->bankAddress = $jsonData['history'][$index20]['combinedTo']['customer']['companies'][$index69]['contragent']['bankAddress'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['customer']['companies'][$index69]['contragent']['corrAccount'])) {
    $model->history[$index20]->combinedTo->customer->companies[$index69]->contragent->corrAccount = $jsonData['history'][$index20]['combinedTo']['customer']['companies'][$index69]['contragent']['corrAccount'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['customer']['companies'][$index69]['contragent']['bankAccount'])) {
    $model->history[$index20]->combinedTo->customer->companies[$index69]->contragent->bankAccount = $jsonData['history'][$index20]['combinedTo']['customer']['companies'][$index69]['contragent']['bankAccount'];

}


}
if (isset($jsonData['history'][$index20]['combinedTo']['customer']['companies'][$index69]['address'])) {
    
$model->history[$index20]->combinedTo->customer->companies[$index69]->address = new RetailCrm\Api\Model\Entity\Customers\CustomerAddress();
if (isset($jsonData['history'][$index20]['combinedTo']['customer']['companies'][$index69]['address']['id'])) {
    $model->history[$index20]->combinedTo->customer->companies[$index69]->address->id = $jsonData['history'][$index20]['combinedTo']['customer']['companies'][$index69]['address']['id'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['customer']['companies'][$index69]['address']['name'])) {
    $model->history[$index20]->combinedTo->customer->companies[$index69]->address->name = $jsonData['history'][$index20]['combinedTo']['customer']['companies'][$index69]['address']['name'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['customer']['companies'][$index69]['address']['isMain'])) {
    $model->history[$index20]->combinedTo->customer->companies[$index69]->address->isMain = $jsonData['history'][$index20]['combinedTo']['customer']['companies'][$index69]['address']['isMain'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['customer']['companies'][$index69]['address']['index'])) {
    $model->history[$index20]->combinedTo->customer->companies[$index69]->address->index = $jsonData['history'][$index20]['combinedTo']['customer']['companies'][$index69]['address']['index'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['customer']['companies'][$index69]['address']['countryIso'])) {
    $model->history[$index20]->combinedTo->customer->companies[$index69]->address->countryIso = $jsonData['history'][$index20]['combinedTo']['customer']['companies'][$index69]['address']['countryIso'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['customer']['companies'][$index69]['address']['region'])) {
    $model->history[$index20]->combinedTo->customer->companies[$index69]->address->region = $jsonData['history'][$index20]['combinedTo']['customer']['companies'][$index69]['address']['region'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['customer']['companies'][$index69]['address']['regionId'])) {
    $model->history[$index20]->combinedTo->customer->companies[$index69]->address->regionId = $jsonData['history'][$index20]['combinedTo']['customer']['companies'][$index69]['address']['regionId'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['customer']['companies'][$index69]['address']['city'])) {
    $model->history[$index20]->combinedTo->customer->companies[$index69]->address->city = $jsonData['history'][$index20]['combinedTo']['customer']['companies'][$index69]['address']['city'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['customer']['companies'][$index69]['address']['cityId'])) {
    $model->history[$index20]->combinedTo->customer->companies[$index69]->address->cityId = $jsonData['history'][$index20]['combinedTo']['customer']['companies'][$index69]['address']['cityId'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['customer']['companies'][$index69]['address']['cityType'])) {
    $model->history[$index20]->combinedTo->customer->companies[$index69]->address->cityType = $jsonData['history'][$index20]['combinedTo']['customer']['companies'][$index69]['address']['cityType'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['customer']['companies'][$index69]['address']['street'])) {
    $model->history[$index20]->combinedTo->customer->companies[$index69]->address->street = $jsonData['history'][$index20]['combinedTo']['customer']['companies'][$index69]['address']['street'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['customer']['companies'][$index69]['address']['streetId'])) {
    $model->history[$index20]->combinedTo->customer->companies[$index69]->address->streetId = $jsonData['history'][$index20]['combinedTo']['customer']['companies'][$index69]['address']['streetId'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['customer']['companies'][$index69]['address']['streetType'])) {
    $model->history[$index20]->combinedTo->customer->companies[$index69]->address->streetType = $jsonData['history'][$index20]['combinedTo']['customer']['companies'][$index69]['address']['streetType'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['customer']['companies'][$index69]['address']['building'])) {
    $model->history[$index20]->combinedTo->customer->companies[$index69]->address->building = $jsonData['history'][$index20]['combinedTo']['customer']['companies'][$index69]['address']['building'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['customer']['companies'][$index69]['address']['flat'])) {
    $model->history[$index20]->combinedTo->customer->companies[$index69]->address->flat = $jsonData['history'][$index20]['combinedTo']['customer']['companies'][$index69]['address']['flat'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['customer']['companies'][$index69]['address']['floor'])) {
    $model->history[$index20]->combinedTo->customer->companies[$index69]->address->floor = $jsonData['history'][$index20]['combinedTo']['customer']['companies'][$index69]['address']['floor'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['customer']['companies'][$index69]['address']['block'])) {
    $model->history[$index20]->combinedTo->customer->companies[$index69]->address->block = $jsonData['history'][$index20]['combinedTo']['customer']['companies'][$index69]['address']['block'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['customer']['companies'][$index69]['address']['house'])) {
    $model->history[$index20]->combinedTo->customer->companies[$index69]->address->house = $jsonData['history'][$index20]['combinedTo']['customer']['companies'][$index69]['address']['house'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['customer']['companies'][$index69]['address']['housing'])) {
    $model->history[$index20]->combinedTo->customer->companies[$index69]->address->housing = $jsonData['history'][$index20]['combinedTo']['customer']['companies'][$index69]['address']['housing'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['customer']['companies'][$index69]['address']['metro'])) {
    $model->history[$index20]->combinedTo->customer->companies[$index69]->address->metro = $jsonData['history'][$index20]['combinedTo']['customer']['companies'][$index69]['address']['metro'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['customer']['companies'][$index69]['address']['notes'])) {
    $model->history[$index20]->combinedTo->customer->companies[$index69]->address->notes = $jsonData['history'][$index20]['combinedTo']['customer']['companies'][$index69]['address']['notes'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['customer']['companies'][$index69]['address']['text'])) {
    $model->history[$index20]->combinedTo->customer->companies[$index69]->address->text = $jsonData['history'][$index20]['combinedTo']['customer']['companies'][$index69]['address']['text'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['customer']['companies'][$index69]['address']['externalId'])) {
    $model->history[$index20]->combinedTo->customer->companies[$index69]->address->externalId = $jsonData['history'][$index20]['combinedTo']['customer']['companies'][$index69]['address']['externalId'];

}


}
if (isset($jsonData['history'][$index20]['combinedTo']['customer']['companies'][$index69]['customFields'])) {
    $model->history[$index20]->combinedTo->customer->companies[$index69]->customFields = [];
foreach (array_keys($jsonData['history'][$index20]['combinedTo']['customer']['companies'][$index69]['customFields']) as $index95) {
    $model->history[$index20]->combinedTo->customer->companies[$index69]->customFields[$index95] = $jsonData['history'][$index20]['combinedTo']['customer']['companies'][$index69]['customFields'][$index95];

}

}
if (isset($jsonData['history'][$index20]['combinedTo']['customer']['companies'][$index69]['marginSumm'])) {
    $model->history[$index20]->combinedTo->customer->companies[$index69]->marginSumm = (float) $jsonData['history'][$index20]['combinedTo']['customer']['companies'][$index69]['marginSumm'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['customer']['companies'][$index69]['totalSumm'])) {
    $model->history[$index20]->combinedTo->customer->companies[$index69]->totalSumm = (float) $jsonData['history'][$index20]['combinedTo']['customer']['companies'][$index69]['totalSumm'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['customer']['companies'][$index69]['averageSumm'])) {
    $model->history[$index20]->combinedTo->customer->companies[$index69]->averageSumm = (float) $jsonData['history'][$index20]['combinedTo']['customer']['companies'][$index69]['averageSumm'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['customer']['companies'][$index69]['ordersCount'])) {
    $model->history[$index20]->combinedTo->customer->companies[$index69]->ordersCount = $jsonData['history'][$index20]['combinedTo']['customer']['companies'][$index69]['ordersCount'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['customer']['companies'][$index69]['costSumm'])) {
    $model->history[$index20]->combinedTo->customer->companies[$index69]->costSumm = (float) $jsonData['history'][$index20]['combinedTo']['customer']['companies'][$index69]['costSumm'];

}


}

}
if (isset($jsonData['history'][$index20]['combinedTo']['customer']['addresses'])) {
    $model->history[$index20]->combinedTo->customer->addresses = [];
foreach (array_keys($jsonData['history'][$index20]['combinedTo']['customer']['addresses']) as $index69) {
    
$model->history[$index20]->combinedTo->customer->addresses[$index69] = new RetailCrm\Api\Model\Entity\Customers\CustomerAddress();
if (isset($jsonData['history'][$index20]['combinedTo']['customer']['addresses'][$index69]['id'])) {
    $model->history[$index20]->combinedTo->customer->addresses[$index69]->id = $jsonData['history'][$index20]['combinedTo']['customer']['addresses'][$index69]['id'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['customer']['addresses'][$index69]['name'])) {
    $model->history[$index20]->combinedTo->customer->addresses[$index69]->name = $jsonData['history'][$index20]['combinedTo']['customer']['addresses'][$index69]['name'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['customer']['addresses'][$index69]['isMain'])) {
    $model->history[$index20]->combinedTo->customer->addresses[$index69]->isMain = $jsonData['history'][$index20]['combinedTo']['customer']['addresses'][$index69]['isMain'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['customer']['addresses'][$index69]['index'])) {
    $model->history[$index20]->combinedTo->customer->addresses[$index69]->index = $jsonData['history'][$index20]['combinedTo']['customer']['addresses'][$index69]['index'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['customer']['addresses'][$index69]['countryIso'])) {
    $model->history[$index20]->combinedTo->customer->addresses[$index69]->countryIso = $jsonData['history'][$index20]['combinedTo']['customer']['addresses'][$index69]['countryIso'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['customer']['addresses'][$index69]['region'])) {
    $model->history[$index20]->combinedTo->customer->addresses[$index69]->region = $jsonData['history'][$index20]['combinedTo']['customer']['addresses'][$index69]['region'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['customer']['addresses'][$index69]['regionId'])) {
    $model->history[$index20]->combinedTo->customer->addresses[$index69]->regionId = $jsonData['history'][$index20]['combinedTo']['customer']['addresses'][$index69]['regionId'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['customer']['addresses'][$index69]['city'])) {
    $model->history[$index20]->combinedTo->customer->addresses[$index69]->city = $jsonData['history'][$index20]['combinedTo']['customer']['addresses'][$index69]['city'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['customer']['addresses'][$index69]['cityId'])) {
    $model->history[$index20]->combinedTo->customer->addresses[$index69]->cityId = $jsonData['history'][$index20]['combinedTo']['customer']['addresses'][$index69]['cityId'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['customer']['addresses'][$index69]['cityType'])) {
    $model->history[$index20]->combinedTo->customer->addresses[$index69]->cityType = $jsonData['history'][$index20]['combinedTo']['customer']['addresses'][$index69]['cityType'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['customer']['addresses'][$index69]['street'])) {
    $model->history[$index20]->combinedTo->customer->addresses[$index69]->street = $jsonData['history'][$index20]['combinedTo']['customer']['addresses'][$index69]['street'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['customer']['addresses'][$index69]['streetId'])) {
    $model->history[$index20]->combinedTo->customer->addresses[$index69]->streetId = $jsonData['history'][$index20]['combinedTo']['customer']['addresses'][$index69]['streetId'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['customer']['addresses'][$index69]['streetType'])) {
    $model->history[$index20]->combinedTo->customer->addresses[$index69]->streetType = $jsonData['history'][$index20]['combinedTo']['customer']['addresses'][$index69]['streetType'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['customer']['addresses'][$index69]['building'])) {
    $model->history[$index20]->combinedTo->customer->addresses[$index69]->building = $jsonData['history'][$index20]['combinedTo']['customer']['addresses'][$index69]['building'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['customer']['addresses'][$index69]['flat'])) {
    $model->history[$index20]->combinedTo->customer->addresses[$index69]->flat = $jsonData['history'][$index20]['combinedTo']['customer']['addresses'][$index69]['flat'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['customer']['addresses'][$index69]['floor'])) {
    $model->history[$index20]->combinedTo->customer->addresses[$index69]->floor = $jsonData['history'][$index20]['combinedTo']['customer']['addresses'][$index69]['floor'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['customer']['addresses'][$index69]['block'])) {
    $model->history[$index20]->combinedTo->customer->addresses[$index69]->block = $jsonData['history'][$index20]['combinedTo']['customer']['addresses'][$index69]['block'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['customer']['addresses'][$index69]['house'])) {
    $model->history[$index20]->combinedTo->customer->addresses[$index69]->house = $jsonData['history'][$index20]['combinedTo']['customer']['addresses'][$index69]['house'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['customer']['addresses'][$index69]['housing'])) {
    $model->history[$index20]->combinedTo->customer->addresses[$index69]->housing = $jsonData['history'][$index20]['combinedTo']['customer']['addresses'][$index69]['housing'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['customer']['addresses'][$index69]['metro'])) {
    $model->history[$index20]->combinedTo->customer->addresses[$index69]->metro = $jsonData['history'][$index20]['combinedTo']['customer']['addresses'][$index69]['metro'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['customer']['addresses'][$index69]['notes'])) {
    $model->history[$index20]->combinedTo->customer->addresses[$index69]->notes = $jsonData['history'][$index20]['combinedTo']['customer']['addresses'][$index69]['notes'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['customer']['addresses'][$index69]['text'])) {
    $model->history[$index20]->combinedTo->customer->addresses[$index69]->text = $jsonData['history'][$index20]['combinedTo']['customer']['addresses'][$index69]['text'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['customer']['addresses'][$index69]['externalId'])) {
    $model->history[$index20]->combinedTo->customer->addresses[$index69]->externalId = $jsonData['history'][$index20]['combinedTo']['customer']['addresses'][$index69]['externalId'];

}


}

}
if (isset($jsonData['history'][$index20]['combinedTo']['customer']['vip'])) {
    $model->history[$index20]->combinedTo->customer->vip = $jsonData['history'][$index20]['combinedTo']['customer']['vip'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['customer']['bad'])) {
    $model->history[$index20]->combinedTo->customer->bad = $jsonData['history'][$index20]['combinedTo']['customer']['bad'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['customer']['site'])) {
    $model->history[$index20]->combinedTo->customer->site = $jsonData['history'][$index20]['combinedTo']['customer']['site'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['customer']['tags'])) {
    $model->history[$index20]->combinedTo->customer->tags = [];
foreach (array_keys($jsonData['history'][$index20]['combinedTo']['customer']['tags']) as $index64) {
    
$model->history[$index20]->combinedTo->customer->tags[$index64] = new RetailCrm\Api\Model\Entity\Customers\CustomerTag();
if (isset($jsonData['history'][$index20]['combinedTo']['customer']['tags'][$index64]['name'])) {
    $model->history[$index20]->combinedTo->customer->tags[$index64]->name = $jsonData['history'][$index20]['combinedTo']['customer']['tags'][$index64]['name'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['customer']['tags'][$index64]['color'])) {
    $model->history[$index20]->combinedTo->customer->tags[$index64]->color = $jsonData['history'][$index20]['combinedTo']['customer']['tags'][$index64]['color'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['customer']['tags'][$index64]['attached'])) {
    $model->history[$index20]->combinedTo->customer->tags[$index64]->attached = $jsonData['history'][$index20]['combinedTo']['customer']['tags'][$index64]['attached'];

}


}

}
if (isset($jsonData['history'][$index20]['combinedTo']['customer']['avgMarginSumm'])) {
    $model->history[$index20]->combinedTo->customer->avgMarginSumm = (float) $jsonData['history'][$index20]['combinedTo']['customer']['avgMarginSumm'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['customer']['marginSumm'])) {
    $model->history[$index20]->combinedTo->customer->marginSumm = (float) $jsonData['history'][$index20]['combinedTo']['customer']['marginSumm'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['customer']['totalSumm'])) {
    $model->history[$index20]->combinedTo->customer->totalSumm = (float) $jsonData['history'][$index20]['combinedTo']['customer']['totalSumm'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['customer']['averageSumm'])) {
    $model->history[$index20]->combinedTo->customer->averageSumm = (float) $jsonData['history'][$index20]['combinedTo']['customer']['averageSumm'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['customer']['ordersCount'])) {
    $model->history[$index20]->combinedTo->customer->ordersCount = $jsonData['history'][$index20]['combinedTo']['customer']['ordersCount'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['customer']['costSumm'])) {
    $model->history[$index20]->combinedTo->customer->costSumm = (float) $jsonData['history'][$index20]['combinedTo']['customer']['costSumm'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['customer']['customFields'])) {
    $model->history[$index20]->combinedTo->customer->customFields = [];
foreach (array_keys($jsonData['history'][$index20]['combinedTo']['customer']['customFields']) as $index72) {
    $model->history[$index20]->combinedTo->customer->customFields[$index72] = $jsonData['history'][$index20]['combinedTo']['customer']['customFields'][$index72];

}

}
if (isset($jsonData['history'][$index20]['combinedTo']['customer']['personalDiscount'])) {
    $model->history[$index20]->combinedTo->customer->personalDiscount = (float) $jsonData['history'][$index20]['combinedTo']['customer']['personalDiscount'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['customer']['cumulativeDiscount'])) {
    $model->history[$index20]->combinedTo->customer->cumulativeDiscount = (float) $jsonData['history'][$index20]['combinedTo']['customer']['cumulativeDiscount'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['customer']['discountCardNumber'])) {
    $model->history[$index20]->combinedTo->customer->discountCardNumber = $jsonData['history'][$index20]['combinedTo']['customer']['discountCardNumber'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['customer']['firstClientId'])) {
    $model->history[$index20]->combinedTo->customer->firstClientId = $jsonData['history'][$index20]['combinedTo']['customer']['firstClientId'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['customer']['lastClientId'])) {
    $model->history[$index20]->combinedTo->customer->lastClientId = $jsonData['history'][$index20]['combinedTo']['customer']['lastClientId'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['customer']['mainCustomerContact'])) {
    
$model->history[$index20]->combinedTo->customer->mainCustomerContact = new RetailCrm\Api\Model\Entity\CustomersCorporate\CustomerContact();
if (isset($jsonData['history'][$index20]['combinedTo']['customer']['mainCustomerContact']['id'])) {
    $model->history[$index20]->combinedTo->customer->mainCustomerContact->id = $jsonData['history'][$index20]['combinedTo']['customer']['mainCustomerContact']['id'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['customer']['mainCustomerContact']['isMain'])) {
    $model->history[$index20]->combinedTo->customer->mainCustomerContact->isMain = $jsonData['history'][$index20]['combinedTo']['customer']['mainCustomerContact']['isMain'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['customer']['mainCustomerContact']['customer'])) {
    
$model->history[$index20]->combinedTo->customer->mainCustomerContact->customer = new RetailCrm\Api\Model\Entity\CustomersCorporate\SerializedRelationAbstractCustomer();
if (isset($jsonData['history'][$index20]['combinedTo']['customer']['mainCustomerContact']['customer']['id'])) {
    $model->history[$index20]->combinedTo->customer->mainCustomerContact->customer->id = $jsonData['history'][$index20]['combinedTo']['customer']['mainCustomerContact']['customer']['id'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['customer']['mainCustomerContact']['customer']['externalId'])) {
    $model->history[$index20]->combinedTo->customer->mainCustomerContact->customer->externalId = $jsonData['history'][$index20]['combinedTo']['customer']['mainCustomerContact']['customer']['externalId'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['customer']['mainCustomerContact']['customer']['browserId'])) {
    $model->history[$index20]->combinedTo->customer->mainCustomerContact->customer->browserId = $jsonData['history'][$index20]['combinedTo']['customer']['mainCustomerContact']['customer']['browserId'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['customer']['mainCustomerContact']['customer']['site'])) {
    $model->history[$index20]->combinedTo->customer->mainCustomerContact->customer->site = $jsonData['history'][$index20]['combinedTo']['customer']['mainCustomerContact']['customer']['site'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['customer']['mainCustomerContact']['customer']['companies'])) {
    $model->history[$index20]->combinedTo->customer->mainCustomerContact->customer->companies = [];
foreach (array_keys($jsonData['history'][$index20]['combinedTo']['customer']['mainCustomerContact']['customer']['companies']) as $index104) {
    
$model->history[$index20]->combinedTo->customer->mainCustomerContact->customer->companies[$index104] = new RetailCrm\Api\Model\Entity\CustomersCorporate\CustomerContactCompany();
if (isset($jsonData['history'][$index20]['combinedTo']['customer']['mainCustomerContact']['customer']['companies'][$index104]['id'])) {
    $model->history[$index20]->combinedTo->customer->mainCustomerContact->customer->companies[$index104]->id = $jsonData['history'][$index20]['combinedTo']['customer']['mainCustomerContact']['customer']['companies'][$index104]['id'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['customer']['mainCustomerContact']['customer']['companies'][$index104]['externalId'])) {
    $model->history[$index20]->combinedTo->customer->mainCustomerContact->customer->companies[$index104]->externalId = $jsonData['history'][$index20]['combinedTo']['customer']['mainCustomerContact']['customer']['companies'][$index104]['externalId'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['customer']['mainCustomerContact']['customer']['companies'][$index104]['company'])) {
    
$model->history[$index20]->combinedTo->customer->mainCustomerContact->customer->companies[$index104]->company = new RetailCrm\Api\Model\Entity\CustomersCorporate\EntityWithExternalIdNameOutput();
if (isset($jsonData['history'][$index20]['combinedTo']['customer']['mainCustomerContact']['customer']['companies'][$index104]['company']['id'])) {
    $model->history[$index20]->combinedTo->customer->mainCustomerContact->customer->companies[$index104]->company->id = $jsonData['history'][$index20]['combinedTo']['customer']['mainCustomerContact']['customer']['companies'][$index104]['company']['id'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['customer']['mainCustomerContact']['customer']['companies'][$index104]['company']['externalId'])) {
    $model->history[$index20]->combinedTo->customer->mainCustomerContact->customer->companies[$index104]->company->externalId = $jsonData['history'][$index20]['combinedTo']['customer']['mainCustomerContact']['customer']['companies'][$index104]['company']['externalId'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['customer']['mainCustomerContact']['customer']['companies'][$index104]['company']['name'])) {
    $model->history[$index20]->combinedTo->customer->mainCustomerContact->customer->companies[$index104]->company->name = $jsonData['history'][$index20]['combinedTo']['customer']['mainCustomerContact']['customer']['companies'][$index104]['company']['name'];

}


}


}

}


}
if (isset($jsonData['history'][$index20]['combinedTo']['customer']['mainCustomerContact']['companies'])) {
    $model->history[$index20]->combinedTo->customer->mainCustomerContact->companies = [];
foreach (array_keys($jsonData['history'][$index20]['combinedTo']['customer']['mainCustomerContact']['companies']) as $index92) {
    
$model->history[$index20]->combinedTo->customer->mainCustomerContact->companies[$index92] = new RetailCrm\Api\Model\Entity\CustomersCorporate\CustomerContactCompany();
if (isset($jsonData['history'][$index20]['combinedTo']['customer']['mainCustomerContact']['companies'][$index92]['id'])) {
    $model->history[$index20]->combinedTo->customer->mainCustomerContact->companies[$index92]->id = $jsonData['history'][$index20]['combinedTo']['customer']['mainCustomerContact']['companies'][$index92]['id'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['customer']['mainCustomerContact']['companies'][$index92]['externalId'])) {
    $model->history[$index20]->combinedTo->customer->mainCustomerContact->companies[$index92]->externalId = $jsonData['history'][$index20]['combinedTo']['customer']['mainCustomerContact']['companies'][$index92]['externalId'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['customer']['mainCustomerContact']['companies'][$index92]['company'])) {
    
$model->history[$index20]->combinedTo->customer->mainCustomerContact->companies[$index92]->company = new RetailCrm\Api\Model\Entity\CustomersCorporate\EntityWithExternalIdNameOutput();
if (isset($jsonData['history'][$index20]['combinedTo']['customer']['mainCustomerContact']['companies'][$index92]['company']['id'])) {
    $model->history[$index20]->combinedTo->customer->mainCustomerContact->companies[$index92]->company->id = $jsonData['history'][$index20]['combinedTo']['customer']['mainCustomerContact']['companies'][$index92]['company']['id'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['customer']['mainCustomerContact']['companies'][$index92]['company']['externalId'])) {
    $model->history[$index20]->combinedTo->customer->mainCustomerContact->companies[$index92]->company->externalId = $jsonData['history'][$index20]['combinedTo']['customer']['mainCustomerContact']['companies'][$index92]['company']['externalId'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['customer']['mainCustomerContact']['companies'][$index92]['company']['name'])) {
    $model->history[$index20]->combinedTo->customer->mainCustomerContact->companies[$index92]->company->name = $jsonData['history'][$index20]['combinedTo']['customer']['mainCustomerContact']['companies'][$index92]['company']['name'];

}


}


}

}


}
if (isset($jsonData['history'][$index20]['combinedTo']['customer']['mainCompany'])) {
    
$model->history[$index20]->combinedTo->customer->mainCompany = new RetailCrm\Api\Model\Entity\CustomersCorporate\EntityWithExternalIdNameOutput();
if (isset($jsonData['history'][$index20]['combinedTo']['customer']['mainCompany']['id'])) {
    $model->history[$index20]->combinedTo->customer->mainCompany->id = $jsonData['history'][$index20]['combinedTo']['customer']['mainCompany']['id'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['customer']['mainCompany']['externalId'])) {
    $model->history[$index20]->combinedTo->customer->mainCompany->externalId = $jsonData['history'][$index20]['combinedTo']['customer']['mainCompany']['externalId'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['customer']['mainCompany']['name'])) {
    $model->history[$index20]->combinedTo->customer->mainCompany->name = $jsonData['history'][$index20]['combinedTo']['customer']['mainCompany']['name'];

}


}


}

}
if (isset($jsonData['history'][$index20]['combinedTo']['contact'])) {
    
$model->history[$index20]->combinedTo->contact = new RetailCrm\Api\Model\Entity\Customers\Customer();
if (isset($jsonData['history'][$index20]['combinedTo']['contact']['type'])) {
    $model->history[$index20]->combinedTo->contact->type = $jsonData['history'][$index20]['combinedTo']['contact']['type'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['contact']['id'])) {
    $model->history[$index20]->combinedTo->contact->id = $jsonData['history'][$index20]['combinedTo']['contact']['id'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['contact']['externalId'])) {
    $model->history[$index20]->combinedTo->contact->externalId = $jsonData['history'][$index20]['combinedTo']['contact']['externalId'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['contact']['isContact'])) {
    $model->history[$index20]->combinedTo->contact->isContact = $jsonData['history'][$index20]['combinedTo']['contact']['isContact'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['contact']['createdAt'])) {
    $model->history[$index20]->combinedTo->contact->createdAt = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['history'][$index20]['combinedTo']['contact']['createdAt']);

}
if (isset($jsonData['history'][$index20]['combinedTo']['contact']['managerId'])) {
    $model->history[$index20]->combinedTo->contact->managerId = $jsonData['history'][$index20]['combinedTo']['contact']['managerId'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['contact']['vip'])) {
    $model->history[$index20]->combinedTo->contact->vip = $jsonData['history'][$index20]['combinedTo']['contact']['vip'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['contact']['bad'])) {
    $model->history[$index20]->combinedTo->contact->bad = $jsonData['history'][$index20]['combinedTo']['contact']['bad'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['contact']['browserId'])) {
    $model->history[$index20]->combinedTo->contact->browserId = $jsonData['history'][$index20]['combinedTo']['contact']['browserId'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['contact']['site'])) {
    $model->history[$index20]->combinedTo->contact->site = $jsonData['history'][$index20]['combinedTo']['contact']['site'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['contact']['contragent'])) {
    
$model->history[$index20]->combinedTo->contact->contragent = new RetailCrm\Api\Model\Entity\Customers\CustomerContragent();
if (isset($jsonData['history'][$index20]['combinedTo']['contact']['contragent']['contragentType'])) {
    $model->history[$index20]->combinedTo->contact->contragent->contragentType = $jsonData['history'][$index20]['combinedTo']['contact']['contragent']['contragentType'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['contact']['contragent']['legalName'])) {
    $model->history[$index20]->combinedTo->contact->contragent->legalName = $jsonData['history'][$index20]['combinedTo']['contact']['contragent']['legalName'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['contact']['contragent']['legalAddress'])) {
    $model->history[$index20]->combinedTo->contact->contragent->legalAddress = $jsonData['history'][$index20]['combinedTo']['contact']['contragent']['legalAddress'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['contact']['contragent']['INN'])) {
    $model->history[$index20]->combinedTo->contact->contragent->INN = $jsonData['history'][$index20]['combinedTo']['contact']['contragent']['INN'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['contact']['contragent']['OKPO'])) {
    $model->history[$index20]->combinedTo->contact->contragent->OKPO = $jsonData['history'][$index20]['combinedTo']['contact']['contragent']['OKPO'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['contact']['contragent']['KPP'])) {
    $model->history[$index20]->combinedTo->contact->contragent->KPP = $jsonData['history'][$index20]['combinedTo']['contact']['contragent']['KPP'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['contact']['contragent']['OGRN'])) {
    $model->history[$index20]->combinedTo->contact->contragent->OGRN = $jsonData['history'][$index20]['combinedTo']['contact']['contragent']['OGRN'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['contact']['contragent']['OGRNIP'])) {
    $model->history[$index20]->combinedTo->contact->contragent->OGRNIP = $jsonData['history'][$index20]['combinedTo']['contact']['contragent']['OGRNIP'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['contact']['contragent']['certificateNumber'])) {
    $model->history[$index20]->combinedTo->contact->contragent->certificateNumber = $jsonData['history'][$index20]['combinedTo']['contact']['contragent']['certificateNumber'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['contact']['contragent']['certificateDate'])) {
    $model->history[$index20]->combinedTo->contact->contragent->certificateDate = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['history'][$index20]['combinedTo']['contact']['contragent']['certificateDate']);

}
if (isset($jsonData['history'][$index20]['combinedTo']['contact']['contragent']['BIK'])) {
    $model->history[$index20]->combinedTo->contact->contragent->BIK = $jsonData['history'][$index20]['combinedTo']['contact']['contragent']['BIK'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['contact']['contragent']['bank'])) {
    $model->history[$index20]->combinedTo->contact->contragent->bank = $jsonData['history'][$index20]['combinedTo']['contact']['contragent']['bank'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['contact']['contragent']['bankAddress'])) {
    $model->history[$index20]->combinedTo->contact->contragent->bankAddress = $jsonData['history'][$index20]['combinedTo']['contact']['contragent']['bankAddress'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['contact']['contragent']['corrAccount'])) {
    $model->history[$index20]->combinedTo->contact->contragent->corrAccount = $jsonData['history'][$index20]['combinedTo']['contact']['contragent']['corrAccount'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['contact']['contragent']['bankAccount'])) {
    $model->history[$index20]->combinedTo->contact->contragent->bankAccount = $jsonData['history'][$index20]['combinedTo']['contact']['contragent']['bankAccount'];

}


}
if (isset($jsonData['history'][$index20]['combinedTo']['contact']['tags'])) {
    $model->history[$index20]->combinedTo->contact->tags = [];
foreach (array_keys($jsonData['history'][$index20]['combinedTo']['contact']['tags']) as $index63) {
    
$model->history[$index20]->combinedTo->contact->tags[$index63] = new RetailCrm\Api\Model\Entity\Customers\CustomerTag();
if (isset($jsonData['history'][$index20]['combinedTo']['contact']['tags'][$index63]['name'])) {
    $model->history[$index20]->combinedTo->contact->tags[$index63]->name = $jsonData['history'][$index20]['combinedTo']['contact']['tags'][$index63]['name'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['contact']['tags'][$index63]['color'])) {
    $model->history[$index20]->combinedTo->contact->tags[$index63]->color = $jsonData['history'][$index20]['combinedTo']['contact']['tags'][$index63]['color'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['contact']['tags'][$index63]['attached'])) {
    $model->history[$index20]->combinedTo->contact->tags[$index63]->attached = $jsonData['history'][$index20]['combinedTo']['contact']['tags'][$index63]['attached'];

}


}

}
if (isset($jsonData['history'][$index20]['combinedTo']['contact']['avgMarginSumm'])) {
    $model->history[$index20]->combinedTo->contact->avgMarginSumm = (float) $jsonData['history'][$index20]['combinedTo']['contact']['avgMarginSumm'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['contact']['marginSumm'])) {
    $model->history[$index20]->combinedTo->contact->marginSumm = (float) $jsonData['history'][$index20]['combinedTo']['contact']['marginSumm'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['contact']['totalSumm'])) {
    $model->history[$index20]->combinedTo->contact->totalSumm = (float) $jsonData['history'][$index20]['combinedTo']['contact']['totalSumm'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['contact']['averageSumm'])) {
    $model->history[$index20]->combinedTo->contact->averageSumm = (float) $jsonData['history'][$index20]['combinedTo']['contact']['averageSumm'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['contact']['ordersCount'])) {
    $model->history[$index20]->combinedTo->contact->ordersCount = $jsonData['history'][$index20]['combinedTo']['contact']['ordersCount'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['contact']['costSumm'])) {
    $model->history[$index20]->combinedTo->contact->costSumm = (float) $jsonData['history'][$index20]['combinedTo']['contact']['costSumm'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['contact']['customFields'])) {
    $model->history[$index20]->combinedTo->contact->customFields = [];
foreach (array_keys($jsonData['history'][$index20]['combinedTo']['contact']['customFields']) as $index71) {
    $model->history[$index20]->combinedTo->contact->customFields[$index71] = $jsonData['history'][$index20]['combinedTo']['contact']['customFields'][$index71];

}

}
if (isset($jsonData['history'][$index20]['combinedTo']['contact']['personalDiscount'])) {
    $model->history[$index20]->combinedTo->contact->personalDiscount = (float) $jsonData['history'][$index20]['combinedTo']['contact']['personalDiscount'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['contact']['cumulativeDiscount'])) {
    $model->history[$index20]->combinedTo->contact->cumulativeDiscount = (float) $jsonData['history'][$index20]['combinedTo']['contact']['cumulativeDiscount'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['contact']['discountCardNumber'])) {
    $model->history[$index20]->combinedTo->contact->discountCardNumber = $jsonData['history'][$index20]['combinedTo']['contact']['discountCardNumber'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['contact']['firstClientId'])) {
    $model->history[$index20]->combinedTo->contact->firstClientId = $jsonData['history'][$index20]['combinedTo']['contact']['firstClientId'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['contact']['lastClientId'])) {
    $model->history[$index20]->combinedTo->contact->lastClientId = $jsonData['history'][$index20]['combinedTo']['contact']['lastClientId'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['contact']['address'])) {
    
$model->history[$index20]->combinedTo->contact->address = new RetailCrm\Api\Model\Entity\Customers\CustomerAddress();
if (isset($jsonData['history'][$index20]['combinedTo']['contact']['address']['id'])) {
    $model->history[$index20]->combinedTo->contact->address->id = $jsonData['history'][$index20]['combinedTo']['contact']['address']['id'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['contact']['address']['name'])) {
    $model->history[$index20]->combinedTo->contact->address->name = $jsonData['history'][$index20]['combinedTo']['contact']['address']['name'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['contact']['address']['isMain'])) {
    $model->history[$index20]->combinedTo->contact->address->isMain = $jsonData['history'][$index20]['combinedTo']['contact']['address']['isMain'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['contact']['address']['index'])) {
    $model->history[$index20]->combinedTo->contact->address->index = $jsonData['history'][$index20]['combinedTo']['contact']['address']['index'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['contact']['address']['countryIso'])) {
    $model->history[$index20]->combinedTo->contact->address->countryIso = $jsonData['history'][$index20]['combinedTo']['contact']['address']['countryIso'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['contact']['address']['region'])) {
    $model->history[$index20]->combinedTo->contact->address->region = $jsonData['history'][$index20]['combinedTo']['contact']['address']['region'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['contact']['address']['regionId'])) {
    $model->history[$index20]->combinedTo->contact->address->regionId = $jsonData['history'][$index20]['combinedTo']['contact']['address']['regionId'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['contact']['address']['city'])) {
    $model->history[$index20]->combinedTo->contact->address->city = $jsonData['history'][$index20]['combinedTo']['contact']['address']['city'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['contact']['address']['cityId'])) {
    $model->history[$index20]->combinedTo->contact->address->cityId = $jsonData['history'][$index20]['combinedTo']['contact']['address']['cityId'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['contact']['address']['cityType'])) {
    $model->history[$index20]->combinedTo->contact->address->cityType = $jsonData['history'][$index20]['combinedTo']['contact']['address']['cityType'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['contact']['address']['street'])) {
    $model->history[$index20]->combinedTo->contact->address->street = $jsonData['history'][$index20]['combinedTo']['contact']['address']['street'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['contact']['address']['streetId'])) {
    $model->history[$index20]->combinedTo->contact->address->streetId = $jsonData['history'][$index20]['combinedTo']['contact']['address']['streetId'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['contact']['address']['streetType'])) {
    $model->history[$index20]->combinedTo->contact->address->streetType = $jsonData['history'][$index20]['combinedTo']['contact']['address']['streetType'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['contact']['address']['building'])) {
    $model->history[$index20]->combinedTo->contact->address->building = $jsonData['history'][$index20]['combinedTo']['contact']['address']['building'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['contact']['address']['flat'])) {
    $model->history[$index20]->combinedTo->contact->address->flat = $jsonData['history'][$index20]['combinedTo']['contact']['address']['flat'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['contact']['address']['floor'])) {
    $model->history[$index20]->combinedTo->contact->address->floor = $jsonData['history'][$index20]['combinedTo']['contact']['address']['floor'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['contact']['address']['block'])) {
    $model->history[$index20]->combinedTo->contact->address->block = $jsonData['history'][$index20]['combinedTo']['contact']['address']['block'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['contact']['address']['house'])) {
    $model->history[$index20]->combinedTo->contact->address->house = $jsonData['history'][$index20]['combinedTo']['contact']['address']['house'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['contact']['address']['housing'])) {
    $model->history[$index20]->combinedTo->contact->address->housing = $jsonData['history'][$index20]['combinedTo']['contact']['address']['housing'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['contact']['address']['metro'])) {
    $model->history[$index20]->combinedTo->contact->address->metro = $jsonData['history'][$index20]['combinedTo']['contact']['address']['metro'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['contact']['address']['notes'])) {
    $model->history[$index20]->combinedTo->contact->address->notes = $jsonData['history'][$index20]['combinedTo']['contact']['address']['notes'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['contact']['address']['text'])) {
    $model->history[$index20]->combinedTo->contact->address->text = $jsonData['history'][$index20]['combinedTo']['contact']['address']['text'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['contact']['address']['externalId'])) {
    $model->history[$index20]->combinedTo->contact->address->externalId = $jsonData['history'][$index20]['combinedTo']['contact']['address']['externalId'];

}


}
if (isset($jsonData['history'][$index20]['combinedTo']['contact']['segments'])) {
    $model->history[$index20]->combinedTo->contact->segments = [];
foreach (array_keys($jsonData['history'][$index20]['combinedTo']['contact']['segments']) as $index67) {
    
$model->history[$index20]->combinedTo->contact->segments[$index67] = new RetailCrm\Api\Model\Entity\Customers\Segment();
if (isset($jsonData['history'][$index20]['combinedTo']['contact']['segments'][$index67]['id'])) {
    $model->history[$index20]->combinedTo->contact->segments[$index67]->id = $jsonData['history'][$index20]['combinedTo']['contact']['segments'][$index67]['id'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['contact']['segments'][$index67]['code'])) {
    $model->history[$index20]->combinedTo->contact->segments[$index67]->code = $jsonData['history'][$index20]['combinedTo']['contact']['segments'][$index67]['code'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['contact']['segments'][$index67]['name'])) {
    $model->history[$index20]->combinedTo->contact->segments[$index67]->name = $jsonData['history'][$index20]['combinedTo']['contact']['segments'][$index67]['name'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['contact']['segments'][$index67]['createdAt'])) {
    $model->history[$index20]->combinedTo->contact->segments[$index67]->createdAt = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['history'][$index20]['combinedTo']['contact']['segments'][$index67]['createdAt']);

}
if (isset($jsonData['history'][$index20]['combinedTo']['contact']['segments'][$index67]['isDynamic'])) {
    $model->history[$index20]->combinedTo->contact->segments[$index67]->isDynamic = $jsonData['history'][$index20]['combinedTo']['contact']['segments'][$index67]['isDynamic'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['contact']['segments'][$index67]['customersCount'])) {
    $model->history[$index20]->combinedTo->contact->segments[$index67]->customersCount = $jsonData['history'][$index20]['combinedTo']['contact']['segments'][$index67]['customersCount'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['contact']['segments'][$index67]['active'])) {
    $model->history[$index20]->combinedTo->contact->segments[$index67]->active = $jsonData['history'][$index20]['combinedTo']['contact']['segments'][$index67]['active'];

}


}

}
if (isset($jsonData['history'][$index20]['combinedTo']['contact']['maturationTime'])) {
    $model->history[$index20]->combinedTo->contact->maturationTime = $jsonData['history'][$index20]['combinedTo']['contact']['maturationTime'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['contact']['firstName'])) {
    $model->history[$index20]->combinedTo->contact->firstName = $jsonData['history'][$index20]['combinedTo']['contact']['firstName'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['contact']['lastName'])) {
    $model->history[$index20]->combinedTo->contact->lastName = $jsonData['history'][$index20]['combinedTo']['contact']['lastName'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['contact']['patronymic'])) {
    $model->history[$index20]->combinedTo->contact->patronymic = $jsonData['history'][$index20]['combinedTo']['contact']['patronymic'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['contact']['sex'])) {
    $model->history[$index20]->combinedTo->contact->sex = $jsonData['history'][$index20]['combinedTo']['contact']['sex'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['contact']['presumableSex'])) {
    $model->history[$index20]->combinedTo->contact->presumableSex = $jsonData['history'][$index20]['combinedTo']['contact']['presumableSex'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['contact']['email'])) {
    $model->history[$index20]->combinedTo->contact->email = $jsonData['history'][$index20]['combinedTo']['contact']['email'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['contact']['emailMarketingUnsubscribedAt'])) {
    $model->history[$index20]->combinedTo->contact->emailMarketingUnsubscribedAt = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['history'][$index20]['combinedTo']['contact']['emailMarketingUnsubscribedAt']);

}
if (isset($jsonData['history'][$index20]['combinedTo']['contact']['phones'])) {
    $model->history[$index20]->combinedTo->contact->phones = [];
foreach (array_keys($jsonData['history'][$index20]['combinedTo']['contact']['phones']) as $index65) {
    
$model->history[$index20]->combinedTo->contact->phones[$index65] = new RetailCrm\Api\Model\Entity\Customers\CustomerPhone();
if (isset($jsonData['history'][$index20]['combinedTo']['contact']['phones'][$index65]['number'])) {
    $model->history[$index20]->combinedTo->contact->phones[$index65]->number = $jsonData['history'][$index20]['combinedTo']['contact']['phones'][$index65]['number'];

}


}

}
if (isset($jsonData['history'][$index20]['combinedTo']['contact']['birthday'])) {
    $model->history[$index20]->combinedTo->contact->birthday = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['history'][$index20]['combinedTo']['contact']['birthday']);

}
if (isset($jsonData['history'][$index20]['combinedTo']['contact']['source'])) {
    
$model->history[$index20]->combinedTo->contact->source = new RetailCrm\Api\Model\Entity\Source();
if (isset($jsonData['history'][$index20]['combinedTo']['contact']['source']['source'])) {
    $model->history[$index20]->combinedTo->contact->source->source = $jsonData['history'][$index20]['combinedTo']['contact']['source']['source'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['contact']['source']['medium'])) {
    $model->history[$index20]->combinedTo->contact->source->medium = $jsonData['history'][$index20]['combinedTo']['contact']['source']['medium'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['contact']['source']['campaign'])) {
    $model->history[$index20]->combinedTo->contact->source->campaign = $jsonData['history'][$index20]['combinedTo']['contact']['source']['campaign'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['contact']['source']['keyword'])) {
    $model->history[$index20]->combinedTo->contact->source->keyword = $jsonData['history'][$index20]['combinedTo']['contact']['source']['keyword'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['contact']['source']['content'])) {
    $model->history[$index20]->combinedTo->contact->source->content = $jsonData['history'][$index20]['combinedTo']['contact']['source']['content'];

}


}
if (isset($jsonData['history'][$index20]['combinedTo']['contact']['photoUrl'])) {
    $model->history[$index20]->combinedTo->contact->photoUrl = $jsonData['history'][$index20]['combinedTo']['contact']['photoUrl'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['contact']['mgCustomerId'])) {
    $model->history[$index20]->combinedTo->contact->mgCustomerId = $jsonData['history'][$index20]['combinedTo']['contact']['mgCustomerId'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['contact']['subscribed'])) {
    $model->history[$index20]->combinedTo->contact->subscribed = $jsonData['history'][$index20]['combinedTo']['contact']['subscribed'];

}


}
if (isset($jsonData['history'][$index20]['combinedTo']['company'])) {
    
$model->history[$index20]->combinedTo->company = new RetailCrm\Api\Model\Entity\CustomersCorporate\Company();
if (isset($jsonData['history'][$index20]['combinedTo']['company']['id'])) {
    $model->history[$index20]->combinedTo->company->id = $jsonData['history'][$index20]['combinedTo']['company']['id'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['company']['isMain'])) {
    $model->history[$index20]->combinedTo->company->isMain = $jsonData['history'][$index20]['combinedTo']['company']['isMain'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['company']['externalId'])) {
    $model->history[$index20]->combinedTo->company->externalId = $jsonData['history'][$index20]['combinedTo']['company']['externalId'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['company']['active'])) {
    $model->history[$index20]->combinedTo->company->active = $jsonData['history'][$index20]['combinedTo']['company']['active'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['company']['name'])) {
    $model->history[$index20]->combinedTo->company->name = $jsonData['history'][$index20]['combinedTo']['company']['name'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['company']['brand'])) {
    $model->history[$index20]->combinedTo->company->brand = $jsonData['history'][$index20]['combinedTo']['company']['brand'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['company']['site'])) {
    $model->history[$index20]->combinedTo->company->site = $jsonData['history'][$index20]['combinedTo']['company']['site'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['company']['createdAt'])) {
    $model->history[$index20]->combinedTo->company->createdAt = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['history'][$index20]['combinedTo']['company']['createdAt']);

}
if (isset($jsonData['history'][$index20]['combinedTo']['company']['customer'])) {
    
$model->history[$index20]->combinedTo->company->customer = new RetailCrm\Api\Model\Entity\CustomersCorporate\SerializedEntityCustomer();
if (isset($jsonData['history'][$index20]['combinedTo']['company']['customer']['site'])) {
    $model->history[$index20]->combinedTo->company->customer->site = $jsonData['history'][$index20]['combinedTo']['company']['customer']['site'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['company']['customer']['id'])) {
    $model->history[$index20]->combinedTo->company->customer->id = $jsonData['history'][$index20]['combinedTo']['company']['customer']['id'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['company']['customer']['externalId'])) {
    $model->history[$index20]->combinedTo->company->customer->externalId = $jsonData['history'][$index20]['combinedTo']['company']['customer']['externalId'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['company']['customer']['type'])) {
    $model->history[$index20]->combinedTo->company->customer->type = $jsonData['history'][$index20]['combinedTo']['company']['customer']['type'];

}


}
if (isset($jsonData['history'][$index20]['combinedTo']['company']['contragent'])) {
    
$model->history[$index20]->combinedTo->company->contragent = new RetailCrm\Api\Model\Entity\Customers\CustomerContragent();
if (isset($jsonData['history'][$index20]['combinedTo']['company']['contragent']['contragentType'])) {
    $model->history[$index20]->combinedTo->company->contragent->contragentType = $jsonData['history'][$index20]['combinedTo']['company']['contragent']['contragentType'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['company']['contragent']['legalName'])) {
    $model->history[$index20]->combinedTo->company->contragent->legalName = $jsonData['history'][$index20]['combinedTo']['company']['contragent']['legalName'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['company']['contragent']['legalAddress'])) {
    $model->history[$index20]->combinedTo->company->contragent->legalAddress = $jsonData['history'][$index20]['combinedTo']['company']['contragent']['legalAddress'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['company']['contragent']['INN'])) {
    $model->history[$index20]->combinedTo->company->contragent->INN = $jsonData['history'][$index20]['combinedTo']['company']['contragent']['INN'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['company']['contragent']['OKPO'])) {
    $model->history[$index20]->combinedTo->company->contragent->OKPO = $jsonData['history'][$index20]['combinedTo']['company']['contragent']['OKPO'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['company']['contragent']['KPP'])) {
    $model->history[$index20]->combinedTo->company->contragent->KPP = $jsonData['history'][$index20]['combinedTo']['company']['contragent']['KPP'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['company']['contragent']['OGRN'])) {
    $model->history[$index20]->combinedTo->company->contragent->OGRN = $jsonData['history'][$index20]['combinedTo']['company']['contragent']['OGRN'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['company']['contragent']['OGRNIP'])) {
    $model->history[$index20]->combinedTo->company->contragent->OGRNIP = $jsonData['history'][$index20]['combinedTo']['company']['contragent']['OGRNIP'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['company']['contragent']['certificateNumber'])) {
    $model->history[$index20]->combinedTo->company->contragent->certificateNumber = $jsonData['history'][$index20]['combinedTo']['company']['contragent']['certificateNumber'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['company']['contragent']['certificateDate'])) {
    $model->history[$index20]->combinedTo->company->contragent->certificateDate = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['history'][$index20]['combinedTo']['company']['contragent']['certificateDate']);

}
if (isset($jsonData['history'][$index20]['combinedTo']['company']['contragent']['BIK'])) {
    $model->history[$index20]->combinedTo->company->contragent->BIK = $jsonData['history'][$index20]['combinedTo']['company']['contragent']['BIK'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['company']['contragent']['bank'])) {
    $model->history[$index20]->combinedTo->company->contragent->bank = $jsonData['history'][$index20]['combinedTo']['company']['contragent']['bank'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['company']['contragent']['bankAddress'])) {
    $model->history[$index20]->combinedTo->company->contragent->bankAddress = $jsonData['history'][$index20]['combinedTo']['company']['contragent']['bankAddress'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['company']['contragent']['corrAccount'])) {
    $model->history[$index20]->combinedTo->company->contragent->corrAccount = $jsonData['history'][$index20]['combinedTo']['company']['contragent']['corrAccount'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['company']['contragent']['bankAccount'])) {
    $model->history[$index20]->combinedTo->company->contragent->bankAccount = $jsonData['history'][$index20]['combinedTo']['company']['contragent']['bankAccount'];

}


}
if (isset($jsonData['history'][$index20]['combinedTo']['company']['address'])) {
    
$model->history[$index20]->combinedTo->company->address = new RetailCrm\Api\Model\Entity\Customers\CustomerAddress();
if (isset($jsonData['history'][$index20]['combinedTo']['company']['address']['id'])) {
    $model->history[$index20]->combinedTo->company->address->id = $jsonData['history'][$index20]['combinedTo']['company']['address']['id'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['company']['address']['name'])) {
    $model->history[$index20]->combinedTo->company->address->name = $jsonData['history'][$index20]['combinedTo']['company']['address']['name'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['company']['address']['isMain'])) {
    $model->history[$index20]->combinedTo->company->address->isMain = $jsonData['history'][$index20]['combinedTo']['company']['address']['isMain'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['company']['address']['index'])) {
    $model->history[$index20]->combinedTo->company->address->index = $jsonData['history'][$index20]['combinedTo']['company']['address']['index'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['company']['address']['countryIso'])) {
    $model->history[$index20]->combinedTo->company->address->countryIso = $jsonData['history'][$index20]['combinedTo']['company']['address']['countryIso'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['company']['address']['region'])) {
    $model->history[$index20]->combinedTo->company->address->region = $jsonData['history'][$index20]['combinedTo']['company']['address']['region'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['company']['address']['regionId'])) {
    $model->history[$index20]->combinedTo->company->address->regionId = $jsonData['history'][$index20]['combinedTo']['company']['address']['regionId'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['company']['address']['city'])) {
    $model->history[$index20]->combinedTo->company->address->city = $jsonData['history'][$index20]['combinedTo']['company']['address']['city'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['company']['address']['cityId'])) {
    $model->history[$index20]->combinedTo->company->address->cityId = $jsonData['history'][$index20]['combinedTo']['company']['address']['cityId'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['company']['address']['cityType'])) {
    $model->history[$index20]->combinedTo->company->address->cityType = $jsonData['history'][$index20]['combinedTo']['company']['address']['cityType'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['company']['address']['street'])) {
    $model->history[$index20]->combinedTo->company->address->street = $jsonData['history'][$index20]['combinedTo']['company']['address']['street'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['company']['address']['streetId'])) {
    $model->history[$index20]->combinedTo->company->address->streetId = $jsonData['history'][$index20]['combinedTo']['company']['address']['streetId'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['company']['address']['streetType'])) {
    $model->history[$index20]->combinedTo->company->address->streetType = $jsonData['history'][$index20]['combinedTo']['company']['address']['streetType'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['company']['address']['building'])) {
    $model->history[$index20]->combinedTo->company->address->building = $jsonData['history'][$index20]['combinedTo']['company']['address']['building'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['company']['address']['flat'])) {
    $model->history[$index20]->combinedTo->company->address->flat = $jsonData['history'][$index20]['combinedTo']['company']['address']['flat'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['company']['address']['floor'])) {
    $model->history[$index20]->combinedTo->company->address->floor = $jsonData['history'][$index20]['combinedTo']['company']['address']['floor'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['company']['address']['block'])) {
    $model->history[$index20]->combinedTo->company->address->block = $jsonData['history'][$index20]['combinedTo']['company']['address']['block'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['company']['address']['house'])) {
    $model->history[$index20]->combinedTo->company->address->house = $jsonData['history'][$index20]['combinedTo']['company']['address']['house'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['company']['address']['housing'])) {
    $model->history[$index20]->combinedTo->company->address->housing = $jsonData['history'][$index20]['combinedTo']['company']['address']['housing'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['company']['address']['metro'])) {
    $model->history[$index20]->combinedTo->company->address->metro = $jsonData['history'][$index20]['combinedTo']['company']['address']['metro'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['company']['address']['notes'])) {
    $model->history[$index20]->combinedTo->company->address->notes = $jsonData['history'][$index20]['combinedTo']['company']['address']['notes'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['company']['address']['text'])) {
    $model->history[$index20]->combinedTo->company->address->text = $jsonData['history'][$index20]['combinedTo']['company']['address']['text'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['company']['address']['externalId'])) {
    $model->history[$index20]->combinedTo->company->address->externalId = $jsonData['history'][$index20]['combinedTo']['company']['address']['externalId'];

}


}
if (isset($jsonData['history'][$index20]['combinedTo']['company']['customFields'])) {
    $model->history[$index20]->combinedTo->company->customFields = [];
foreach (array_keys($jsonData['history'][$index20]['combinedTo']['company']['customFields']) as $index71) {
    $model->history[$index20]->combinedTo->company->customFields[$index71] = $jsonData['history'][$index20]['combinedTo']['company']['customFields'][$index71];

}

}
if (isset($jsonData['history'][$index20]['combinedTo']['company']['marginSumm'])) {
    $model->history[$index20]->combinedTo->company->marginSumm = (float) $jsonData['history'][$index20]['combinedTo']['company']['marginSumm'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['company']['totalSumm'])) {
    $model->history[$index20]->combinedTo->company->totalSumm = (float) $jsonData['history'][$index20]['combinedTo']['company']['totalSumm'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['company']['averageSumm'])) {
    $model->history[$index20]->combinedTo->company->averageSumm = (float) $jsonData['history'][$index20]['combinedTo']['company']['averageSumm'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['company']['ordersCount'])) {
    $model->history[$index20]->combinedTo->company->ordersCount = $jsonData['history'][$index20]['combinedTo']['company']['ordersCount'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['company']['costSumm'])) {
    $model->history[$index20]->combinedTo->company->costSumm = (float) $jsonData['history'][$index20]['combinedTo']['company']['costSumm'];

}


}
if (isset($jsonData['history'][$index20]['combinedTo']['contragent'])) {
    
$model->history[$index20]->combinedTo->contragent = new RetailCrm\Api\Model\Entity\Order\OrderContragent();
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
if (isset($jsonData['history'][$index20]['combinedTo']['delivery'])) {
    
$model->history[$index20]->combinedTo->delivery = new RetailCrm\Api\Model\Entity\Order\Delivery\SerializedOrderDelivery();
if (isset($jsonData['history'][$index20]['combinedTo']['delivery']['code'])) {
    $model->history[$index20]->combinedTo->delivery->code = $jsonData['history'][$index20]['combinedTo']['delivery']['code'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['delivery']['integrationCode'])) {
    $model->history[$index20]->combinedTo->delivery->integrationCode = $jsonData['history'][$index20]['combinedTo']['delivery']['integrationCode'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['delivery']['data'])) {
    
$model->history[$index20]->combinedTo->delivery->data = new RetailCrm\Api\Model\Entity\Order\Delivery\DeliveryData();
if (isset($jsonData['history'][$index20]['combinedTo']['delivery']['data']['externalId'])) {
    $model->history[$index20]->combinedTo->delivery->data->externalId = $jsonData['history'][$index20]['combinedTo']['delivery']['data']['externalId'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['delivery']['data']['trackNumber'])) {
    $model->history[$index20]->combinedTo->delivery->data->trackNumber = $jsonData['history'][$index20]['combinedTo']['delivery']['data']['trackNumber'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['delivery']['data']['status'])) {
    $model->history[$index20]->combinedTo->delivery->data->status = $jsonData['history'][$index20]['combinedTo']['delivery']['data']['status'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['delivery']['data']['locked'])) {
    $model->history[$index20]->combinedTo->delivery->data->locked = $jsonData['history'][$index20]['combinedTo']['delivery']['data']['locked'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['delivery']['data']['pickuppointAddress'])) {
    $model->history[$index20]->combinedTo->delivery->data->pickuppointAddress = $jsonData['history'][$index20]['combinedTo']['delivery']['data']['pickuppointAddress'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['delivery']['data']['days'])) {
    $model->history[$index20]->combinedTo->delivery->data->days = $jsonData['history'][$index20]['combinedTo']['delivery']['data']['days'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['delivery']['data']['statusText'])) {
    $model->history[$index20]->combinedTo->delivery->data->statusText = $jsonData['history'][$index20]['combinedTo']['delivery']['data']['statusText'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['delivery']['data']['statusDate'])) {
    $model->history[$index20]->combinedTo->delivery->data->statusDate = \DateTime::createFromFormat('Y-m-d', $jsonData['history'][$index20]['combinedTo']['delivery']['data']['statusDate']);

}
if (isset($jsonData['history'][$index20]['combinedTo']['delivery']['data']['tariff'])) {
    $model->history[$index20]->combinedTo->delivery->data->tariff = $jsonData['history'][$index20]['combinedTo']['delivery']['data']['tariff'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['delivery']['data']['tariffName'])) {
    $model->history[$index20]->combinedTo->delivery->data->tariffName = $jsonData['history'][$index20]['combinedTo']['delivery']['data']['tariffName'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['delivery']['data']['pickuppointId'])) {
    $model->history[$index20]->combinedTo->delivery->data->pickuppointId = $jsonData['history'][$index20]['combinedTo']['delivery']['data']['pickuppointId'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['delivery']['data']['pickuppointSchedule'])) {
    $model->history[$index20]->combinedTo->delivery->data->pickuppointSchedule = $jsonData['history'][$index20]['combinedTo']['delivery']['data']['pickuppointSchedule'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['delivery']['data']['pickuppointPhone'])) {
    $model->history[$index20]->combinedTo->delivery->data->pickuppointPhone = $jsonData['history'][$index20]['combinedTo']['delivery']['data']['pickuppointPhone'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['delivery']['data']['payerType'])) {
    $model->history[$index20]->combinedTo->delivery->data->payerType = $jsonData['history'][$index20]['combinedTo']['delivery']['data']['payerType'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['delivery']['data']['statusComment'])) {
    $model->history[$index20]->combinedTo->delivery->data->statusComment = $jsonData['history'][$index20]['combinedTo']['delivery']['data']['statusComment'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['delivery']['data']['cost'])) {
    $model->history[$index20]->combinedTo->delivery->data->cost = (float) $jsonData['history'][$index20]['combinedTo']['delivery']['data']['cost'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['delivery']['data']['minTerm'])) {
    $model->history[$index20]->combinedTo->delivery->data->minTerm = $jsonData['history'][$index20]['combinedTo']['delivery']['data']['minTerm'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['delivery']['data']['maxTerm'])) {
    $model->history[$index20]->combinedTo->delivery->data->maxTerm = $jsonData['history'][$index20]['combinedTo']['delivery']['data']['maxTerm'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['delivery']['data']['shipmentpointId'])) {
    $model->history[$index20]->combinedTo->delivery->data->shipmentpointId = $jsonData['history'][$index20]['combinedTo']['delivery']['data']['shipmentpointId'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['delivery']['data']['shipmentpointName'])) {
    $model->history[$index20]->combinedTo->delivery->data->shipmentpointName = $jsonData['history'][$index20]['combinedTo']['delivery']['data']['shipmentpointName'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['delivery']['data']['shipmentpointAddress'])) {
    $model->history[$index20]->combinedTo->delivery->data->shipmentpointAddress = $jsonData['history'][$index20]['combinedTo']['delivery']['data']['shipmentpointAddress'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['delivery']['data']['shipmentpointSchedule'])) {
    $model->history[$index20]->combinedTo->delivery->data->shipmentpointSchedule = $jsonData['history'][$index20]['combinedTo']['delivery']['data']['shipmentpointSchedule'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['delivery']['data']['shipmentpointPhone'])) {
    $model->history[$index20]->combinedTo->delivery->data->shipmentpointPhone = $jsonData['history'][$index20]['combinedTo']['delivery']['data']['shipmentpointPhone'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['delivery']['data']['shipmentpointCoordinateLatitude'])) {
    $model->history[$index20]->combinedTo->delivery->data->shipmentpointCoordinateLatitude = $jsonData['history'][$index20]['combinedTo']['delivery']['data']['shipmentpointCoordinateLatitude'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['delivery']['data']['shipmentpointCoordinateLongitude'])) {
    $model->history[$index20]->combinedTo->delivery->data->shipmentpointCoordinateLongitude = $jsonData['history'][$index20]['combinedTo']['delivery']['data']['shipmentpointCoordinateLongitude'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['delivery']['data']['pickuppointName'])) {
    $model->history[$index20]->combinedTo->delivery->data->pickuppointName = $jsonData['history'][$index20]['combinedTo']['delivery']['data']['pickuppointName'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['delivery']['data']['pickuppointCoordinateLatitude'])) {
    $model->history[$index20]->combinedTo->delivery->data->pickuppointCoordinateLatitude = $jsonData['history'][$index20]['combinedTo']['delivery']['data']['pickuppointCoordinateLatitude'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['delivery']['data']['pickuppointCoordinateLongitude'])) {
    $model->history[$index20]->combinedTo->delivery->data->pickuppointCoordinateLongitude = $jsonData['history'][$index20]['combinedTo']['delivery']['data']['pickuppointCoordinateLongitude'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['delivery']['data']['extraData'])) {
    $model->history[$index20]->combinedTo->delivery->data->extraData = [];
foreach (array_keys($jsonData['history'][$index20]['combinedTo']['delivery']['data']['extraData']) as $index77) {
    $model->history[$index20]->combinedTo->delivery->data->extraData[$index77] = $jsonData['history'][$index20]['combinedTo']['delivery']['data']['extraData'][$index77];

}

}
if (isset($jsonData['history'][$index20]['combinedTo']['delivery']['data']['packages'])) {
    $model->history[$index20]->combinedTo->delivery->data->packages = [];
foreach (array_keys($jsonData['history'][$index20]['combinedTo']['delivery']['data']['packages']) as $index76) {
    
$model->history[$index20]->combinedTo->delivery->data->packages[$index76] = new RetailCrm\Api\Model\Entity\Order\Delivery\Package();
if (isset($jsonData['history'][$index20]['combinedTo']['delivery']['data']['packages'][$index76]['packageId'])) {
    $model->history[$index20]->combinedTo->delivery->data->packages[$index76]->packageId = $jsonData['history'][$index20]['combinedTo']['delivery']['data']['packages'][$index76]['packageId'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['delivery']['data']['packages'][$index76]['weight'])) {
    $model->history[$index20]->combinedTo->delivery->data->packages[$index76]->weight = (float) $jsonData['history'][$index20]['combinedTo']['delivery']['data']['packages'][$index76]['weight'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['delivery']['data']['packages'][$index76]['length'])) {
    $model->history[$index20]->combinedTo->delivery->data->packages[$index76]->length = $jsonData['history'][$index20]['combinedTo']['delivery']['data']['packages'][$index76]['length'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['delivery']['data']['packages'][$index76]['width'])) {
    $model->history[$index20]->combinedTo->delivery->data->packages[$index76]->width = $jsonData['history'][$index20]['combinedTo']['delivery']['data']['packages'][$index76]['width'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['delivery']['data']['packages'][$index76]['height'])) {
    $model->history[$index20]->combinedTo->delivery->data->packages[$index76]->height = $jsonData['history'][$index20]['combinedTo']['delivery']['data']['packages'][$index76]['height'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['delivery']['data']['packages'][$index76]['items'])) {
    $model->history[$index20]->combinedTo->delivery->data->packages[$index76]->items = [];
foreach (array_keys($jsonData['history'][$index20]['combinedTo']['delivery']['data']['packages'][$index76]['items']) as $index95) {
    
$model->history[$index20]->combinedTo->delivery->data->packages[$index76]->items[$index95] = new RetailCrm\Api\Model\Entity\Order\Delivery\PackageItem();
if (isset($jsonData['history'][$index20]['combinedTo']['delivery']['data']['packages'][$index76]['items'][$index95]['orderProduct'])) {
    
$model->history[$index20]->combinedTo->delivery->data->packages[$index76]->items[$index95]->orderProduct = new RetailCrm\Api\Model\Entity\Order\Delivery\PackageItemOrderProduct();
if (isset($jsonData['history'][$index20]['combinedTo']['delivery']['data']['packages'][$index76]['items'][$index95]['orderProduct']['id'])) {
    $model->history[$index20]->combinedTo->delivery->data->packages[$index76]->items[$index95]->orderProduct->id = $jsonData['history'][$index20]['combinedTo']['delivery']['data']['packages'][$index76]['items'][$index95]['orderProduct']['id'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['delivery']['data']['packages'][$index76]['items'][$index95]['orderProduct']['externalId'])) {
    $model->history[$index20]->combinedTo->delivery->data->packages[$index76]->items[$index95]->orderProduct->externalId = $jsonData['history'][$index20]['combinedTo']['delivery']['data']['packages'][$index76]['items'][$index95]['orderProduct']['externalId'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['delivery']['data']['packages'][$index76]['items'][$index95]['orderProduct']['externalIds'])) {
    $model->history[$index20]->combinedTo->delivery->data->packages[$index76]->items[$index95]->orderProduct->externalIds = [];
foreach (array_keys($jsonData['history'][$index20]['combinedTo']['delivery']['data']['packages'][$index76]['items'][$index95]['orderProduct']['externalIds']) as $index136) {
    
$model->history[$index20]->combinedTo->delivery->data->packages[$index76]->items[$index95]->orderProduct->externalIds[$index136] = new RetailCrm\Api\Model\Entity\CodeValueModel();
if (isset($jsonData['history'][$index20]['combinedTo']['delivery']['data']['packages'][$index76]['items'][$index95]['orderProduct']['externalIds'][$index136]['code'])) {
    $model->history[$index20]->combinedTo->delivery->data->packages[$index76]->items[$index95]->orderProduct->externalIds[$index136]->code = $jsonData['history'][$index20]['combinedTo']['delivery']['data']['packages'][$index76]['items'][$index95]['orderProduct']['externalIds'][$index136]['code'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['delivery']['data']['packages'][$index76]['items'][$index95]['orderProduct']['externalIds'][$index136]['value'])) {
    $model->history[$index20]->combinedTo->delivery->data->packages[$index76]->items[$index95]->orderProduct->externalIds[$index136]->value = $jsonData['history'][$index20]['combinedTo']['delivery']['data']['packages'][$index76]['items'][$index95]['orderProduct']['externalIds'][$index136]['value'];

}


}

}


}
if (isset($jsonData['history'][$index20]['combinedTo']['delivery']['data']['packages'][$index76]['items'][$index95]['quantity'])) {
    $model->history[$index20]->combinedTo->delivery->data->packages[$index76]->items[$index95]->quantity = (float) $jsonData['history'][$index20]['combinedTo']['delivery']['data']['packages'][$index76]['items'][$index95]['quantity'];

}


}

}


}

}
if (isset($jsonData['history'][$index20]['combinedTo']['delivery']['data']['returnExternalId'])) {
    $model->history[$index20]->combinedTo->delivery->data->returnExternalId = $jsonData['history'][$index20]['combinedTo']['delivery']['data']['returnExternalId'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['delivery']['data']['deliveryName'])) {
    $model->history[$index20]->combinedTo->delivery->data->deliveryName = $jsonData['history'][$index20]['combinedTo']['delivery']['data']['deliveryName'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['delivery']['data']['price'])) {
    $model->history[$index20]->combinedTo->delivery->data->price = (float) $jsonData['history'][$index20]['combinedTo']['delivery']['data']['price'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['delivery']['data']['insurancePrice'])) {
    $model->history[$index20]->combinedTo->delivery->data->insurancePrice = (float) $jsonData['history'][$index20]['combinedTo']['delivery']['data']['insurancePrice'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['delivery']['data']['tariffType'])) {
    $model->history[$index20]->combinedTo->delivery->data->tariffType = $jsonData['history'][$index20]['combinedTo']['delivery']['data']['tariffType'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['delivery']['data']['receiverCity'])) {
    $model->history[$index20]->combinedTo->delivery->data->receiverCity = $jsonData['history'][$index20]['combinedTo']['delivery']['data']['receiverCity'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['delivery']['data']['services'])) {
    $model->history[$index20]->combinedTo->delivery->data->services = [];
foreach (array_keys($jsonData['history'][$index20]['combinedTo']['delivery']['data']['services']) as $index76) {
    $model->history[$index20]->combinedTo->delivery->data->services[$index76] = $jsonData['history'][$index20]['combinedTo']['delivery']['data']['services'][$index76];

}

}
if (isset($jsonData['history'][$index20]['combinedTo']['delivery']['data']['packageNumber'])) {
    $model->history[$index20]->combinedTo->delivery->data->packageNumber = $jsonData['history'][$index20]['combinedTo']['delivery']['data']['packageNumber'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['delivery']['data']['comment'])) {
    $model->history[$index20]->combinedTo->delivery->data->comment = $jsonData['history'][$index20]['combinedTo']['delivery']['data']['comment'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['delivery']['data']['deliveryCode'])) {
    $model->history[$index20]->combinedTo->delivery->data->deliveryCode = $jsonData['history'][$index20]['combinedTo']['delivery']['data']['deliveryCode'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['delivery']['data']['notes'])) {
    $model->history[$index20]->combinedTo->delivery->data->notes = $jsonData['history'][$index20]['combinedTo']['delivery']['data']['notes'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['delivery']['data']['id'])) {
    $model->history[$index20]->combinedTo->delivery->data->id = $jsonData['history'][$index20]['combinedTo']['delivery']['data']['id'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['delivery']['data']['firstName'])) {
    $model->history[$index20]->combinedTo->delivery->data->firstName = $jsonData['history'][$index20]['combinedTo']['delivery']['data']['firstName'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['delivery']['data']['lastName'])) {
    $model->history[$index20]->combinedTo->delivery->data->lastName = $jsonData['history'][$index20]['combinedTo']['delivery']['data']['lastName'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['delivery']['data']['patronymic'])) {
    $model->history[$index20]->combinedTo->delivery->data->patronymic = $jsonData['history'][$index20]['combinedTo']['delivery']['data']['patronymic'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['delivery']['data']['active'])) {
    $model->history[$index20]->combinedTo->delivery->data->active = $jsonData['history'][$index20]['combinedTo']['delivery']['data']['active'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['delivery']['data']['email'])) {
    $model->history[$index20]->combinedTo->delivery->data->email = $jsonData['history'][$index20]['combinedTo']['delivery']['data']['email'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['delivery']['data']['phone'])) {
    
$model->history[$index20]->combinedTo->delivery->data->phone = new RetailCrm\Api\Model\Entity\Order\Delivery\CourierPhone();
if (isset($jsonData['history'][$index20]['combinedTo']['delivery']['data']['phone']['number'])) {
    $model->history[$index20]->combinedTo->delivery->data->phone->number = $jsonData['history'][$index20]['combinedTo']['delivery']['data']['phone']['number'];

}


}
if (isset($jsonData['history'][$index20]['combinedTo']['delivery']['data']['description'])) {
    $model->history[$index20]->combinedTo->delivery->data->description = $jsonData['history'][$index20]['combinedTo']['delivery']['data']['description'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['delivery']['data']['courierId'])) {
    $model->history[$index20]->combinedTo->delivery->data->courierId = $jsonData['history'][$index20]['combinedTo']['delivery']['data']['courierId'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['delivery']['data']['serviceType'])) {
    $model->history[$index20]->combinedTo->delivery->data->serviceType = $jsonData['history'][$index20]['combinedTo']['delivery']['data']['serviceType'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['delivery']['data']['pickuppoint'])) {
    $model->history[$index20]->combinedTo->delivery->data->pickuppoint = $jsonData['history'][$index20]['combinedTo']['delivery']['data']['pickuppoint'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['delivery']['data']['receiverWarehouseTypeRef'])) {
    $model->history[$index20]->combinedTo->delivery->data->receiverWarehouseTypeRef = $jsonData['history'][$index20]['combinedTo']['delivery']['data']['receiverWarehouseTypeRef'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['delivery']['data']['statusName'])) {
    $model->history[$index20]->combinedTo->delivery->data->statusName = $jsonData['history'][$index20]['combinedTo']['delivery']['data']['statusName'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['delivery']['data']['receiverCityRef'])) {
    $model->history[$index20]->combinedTo->delivery->data->receiverCityRef = $jsonData['history'][$index20]['combinedTo']['delivery']['data']['receiverCityRef'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['delivery']['data']['receiverStreet'])) {
    $model->history[$index20]->combinedTo->delivery->data->receiverStreet = $jsonData['history'][$index20]['combinedTo']['delivery']['data']['receiverStreet'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['delivery']['data']['receiverStreetRef'])) {
    $model->history[$index20]->combinedTo->delivery->data->receiverStreetRef = $jsonData['history'][$index20]['combinedTo']['delivery']['data']['receiverStreetRef'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['delivery']['data']['seatsAmount'])) {
    $model->history[$index20]->combinedTo->delivery->data->seatsAmount = $jsonData['history'][$index20]['combinedTo']['delivery']['data']['seatsAmount'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['delivery']['data']['cargoType'])) {
    $model->history[$index20]->combinedTo->delivery->data->cargoType = $jsonData['history'][$index20]['combinedTo']['delivery']['data']['cargoType'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['delivery']['data']['cargoDescription'])) {
    $model->history[$index20]->combinedTo->delivery->data->cargoDescription = $jsonData['history'][$index20]['combinedTo']['delivery']['data']['cargoDescription'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['delivery']['data']['cashPayerType'])) {
    $model->history[$index20]->combinedTo->delivery->data->cashPayerType = $jsonData['history'][$index20]['combinedTo']['delivery']['data']['cashPayerType'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['delivery']['data']['paymentForm'])) {
    $model->history[$index20]->combinedTo->delivery->data->paymentForm = $jsonData['history'][$index20]['combinedTo']['delivery']['data']['paymentForm'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['delivery']['data']['ownershipForm'])) {
    $model->history[$index20]->combinedTo->delivery->data->ownershipForm = $jsonData['history'][$index20]['combinedTo']['delivery']['data']['ownershipForm'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['delivery']['data']['accompanyingDocument'])) {
    $model->history[$index20]->combinedTo->delivery->data->accompanyingDocument = $jsonData['history'][$index20]['combinedTo']['delivery']['data']['accompanyingDocument'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['delivery']['data']['preferredDeliveryDate'])) {
    $model->history[$index20]->combinedTo->delivery->data->preferredDeliveryDate = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['history'][$index20]['combinedTo']['delivery']['data']['preferredDeliveryDate']);

}
if (isset($jsonData['history'][$index20]['combinedTo']['delivery']['data']['timeInterval'])) {
    $model->history[$index20]->combinedTo->delivery->data->timeInterval = $jsonData['history'][$index20]['combinedTo']['delivery']['data']['timeInterval'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['delivery']['data']['saturdayDelivery'])) {
    $model->history[$index20]->combinedTo->delivery->data->saturdayDelivery = $jsonData['history'][$index20]['combinedTo']['delivery']['data']['saturdayDelivery'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['delivery']['data']['deliveryDate'])) {
    $model->history[$index20]->combinedTo->delivery->data->deliveryDate = $jsonData['history'][$index20]['combinedTo']['delivery']['data']['deliveryDate'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['delivery']['data']['denieReason'])) {
    $model->history[$index20]->combinedTo->delivery->data->denieReason = $jsonData['history'][$index20]['combinedTo']['delivery']['data']['denieReason'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['delivery']['data']['backwardDelivery'])) {
    $model->history[$index20]->combinedTo->delivery->data->backwardDelivery = $jsonData['history'][$index20]['combinedTo']['delivery']['data']['backwardDelivery'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['delivery']['data']['backwardDeliveryCargoType'])) {
    $model->history[$index20]->combinedTo->delivery->data->backwardDeliveryCargoType = $jsonData['history'][$index20]['combinedTo']['delivery']['data']['backwardDeliveryCargoType'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['delivery']['data']['backwardDeliveryPayerType'])) {
    $model->history[$index20]->combinedTo->delivery->data->backwardDeliveryPayerType = $jsonData['history'][$index20]['combinedTo']['delivery']['data']['backwardDeliveryPayerType'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['delivery']['data']['backwardDeliveryRedeliveryString'])) {
    $model->history[$index20]->combinedTo->delivery->data->backwardDeliveryRedeliveryString = $jsonData['history'][$index20]['combinedTo']['delivery']['data']['backwardDeliveryRedeliveryString'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['delivery']['data']['afterpaymentOnGoodsCost'])) {
    $model->history[$index20]->combinedTo->delivery->data->afterpaymentOnGoodsCost = (float) $jsonData['history'][$index20]['combinedTo']['delivery']['data']['afterpaymentOnGoodsCost'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['delivery']['data']['declaredValue'])) {
    $model->history[$index20]->combinedTo->delivery->data->declaredValue = (float) $jsonData['history'][$index20]['combinedTo']['delivery']['data']['declaredValue'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['delivery']['data']['sendDate'])) {
    $model->history[$index20]->combinedTo->delivery->data->sendDate = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['history'][$index20]['combinedTo']['delivery']['data']['sendDate']);

}
if (isset($jsonData['history'][$index20]['combinedTo']['delivery']['data']['deliveryType'])) {
    $model->history[$index20]->combinedTo->delivery->data->deliveryType = $jsonData['history'][$index20]['combinedTo']['delivery']['data']['deliveryType'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['delivery']['data']['pickupType'])) {
    $model->history[$index20]->combinedTo->delivery->data->pickupType = $jsonData['history'][$index20]['combinedTo']['delivery']['data']['pickupType'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['delivery']['data']['pickuppointDescription'])) {
    $model->history[$index20]->combinedTo->delivery->data->pickuppointDescription = $jsonData['history'][$index20]['combinedTo']['delivery']['data']['pickuppointDescription'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['delivery']['data']['placesCount'])) {
    $model->history[$index20]->combinedTo->delivery->data->placesCount = $jsonData['history'][$index20]['combinedTo']['delivery']['data']['placesCount'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['delivery']['data']['service'])) {
    $model->history[$index20]->combinedTo->delivery->data->service = $jsonData['history'][$index20]['combinedTo']['delivery']['data']['service'];

}


}
if (isset($jsonData['history'][$index20]['combinedTo']['delivery']['service'])) {
    
$model->history[$index20]->combinedTo->delivery->service = new RetailCrm\Api\Model\Entity\Order\Delivery\SerializedDeliveryService();
if (isset($jsonData['history'][$index20]['combinedTo']['delivery']['service']['name'])) {
    $model->history[$index20]->combinedTo->delivery->service->name = $jsonData['history'][$index20]['combinedTo']['delivery']['service']['name'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['delivery']['service']['code'])) {
    $model->history[$index20]->combinedTo->delivery->service->code = $jsonData['history'][$index20]['combinedTo']['delivery']['service']['code'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['delivery']['service']['active'])) {
    $model->history[$index20]->combinedTo->delivery->service->active = $jsonData['history'][$index20]['combinedTo']['delivery']['service']['active'];

}


}
if (isset($jsonData['history'][$index20]['combinedTo']['delivery']['cost'])) {
    $model->history[$index20]->combinedTo->delivery->cost = (float) $jsonData['history'][$index20]['combinedTo']['delivery']['cost'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['delivery']['netCost'])) {
    $model->history[$index20]->combinedTo->delivery->netCost = (float) $jsonData['history'][$index20]['combinedTo']['delivery']['netCost'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['delivery']['date'])) {
    $model->history[$index20]->combinedTo->delivery->date = \DateTime::createFromFormat('Y-m-d', $jsonData['history'][$index20]['combinedTo']['delivery']['date']);

}
if (isset($jsonData['history'][$index20]['combinedTo']['delivery']['time'])) {
    
$model->history[$index20]->combinedTo->delivery->time = new RetailCrm\Api\Model\Entity\Delivery\TimeInterval();
if (isset($jsonData['history'][$index20]['combinedTo']['delivery']['time']['from'])) {
    $model->history[$index20]->combinedTo->delivery->time->from = \DateTime::createFromFormat('H:i', $jsonData['history'][$index20]['combinedTo']['delivery']['time']['from']);

}
if (isset($jsonData['history'][$index20]['combinedTo']['delivery']['time']['to'])) {
    $model->history[$index20]->combinedTo->delivery->time->to = \DateTime::createFromFormat('H:i', $jsonData['history'][$index20]['combinedTo']['delivery']['time']['to']);

}
if (isset($jsonData['history'][$index20]['combinedTo']['delivery']['time']['custom'])) {
    $model->history[$index20]->combinedTo->delivery->time->custom = $jsonData['history'][$index20]['combinedTo']['delivery']['time']['custom'];

}


}
if (isset($jsonData['history'][$index20]['combinedTo']['delivery']['address'])) {
    
$model->history[$index20]->combinedTo->delivery->address = new RetailCrm\Api\Model\Entity\Order\Delivery\OrderDeliveryAddress();
if (isset($jsonData['history'][$index20]['combinedTo']['delivery']['address']['id'])) {
    $model->history[$index20]->combinedTo->delivery->address->id = $jsonData['history'][$index20]['combinedTo']['delivery']['address']['id'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['delivery']['address']['index'])) {
    $model->history[$index20]->combinedTo->delivery->address->index = $jsonData['history'][$index20]['combinedTo']['delivery']['address']['index'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['delivery']['address']['countryIso'])) {
    $model->history[$index20]->combinedTo->delivery->address->countryIso = $jsonData['history'][$index20]['combinedTo']['delivery']['address']['countryIso'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['delivery']['address']['region'])) {
    $model->history[$index20]->combinedTo->delivery->address->region = $jsonData['history'][$index20]['combinedTo']['delivery']['address']['region'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['delivery']['address']['regionId'])) {
    $model->history[$index20]->combinedTo->delivery->address->regionId = $jsonData['history'][$index20]['combinedTo']['delivery']['address']['regionId'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['delivery']['address']['city'])) {
    $model->history[$index20]->combinedTo->delivery->address->city = $jsonData['history'][$index20]['combinedTo']['delivery']['address']['city'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['delivery']['address']['cityId'])) {
    $model->history[$index20]->combinedTo->delivery->address->cityId = $jsonData['history'][$index20]['combinedTo']['delivery']['address']['cityId'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['delivery']['address']['cityType'])) {
    $model->history[$index20]->combinedTo->delivery->address->cityType = $jsonData['history'][$index20]['combinedTo']['delivery']['address']['cityType'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['delivery']['address']['street'])) {
    $model->history[$index20]->combinedTo->delivery->address->street = $jsonData['history'][$index20]['combinedTo']['delivery']['address']['street'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['delivery']['address']['streetId'])) {
    $model->history[$index20]->combinedTo->delivery->address->streetId = $jsonData['history'][$index20]['combinedTo']['delivery']['address']['streetId'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['delivery']['address']['streetType'])) {
    $model->history[$index20]->combinedTo->delivery->address->streetType = $jsonData['history'][$index20]['combinedTo']['delivery']['address']['streetType'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['delivery']['address']['building'])) {
    $model->history[$index20]->combinedTo->delivery->address->building = $jsonData['history'][$index20]['combinedTo']['delivery']['address']['building'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['delivery']['address']['flat'])) {
    $model->history[$index20]->combinedTo->delivery->address->flat = $jsonData['history'][$index20]['combinedTo']['delivery']['address']['flat'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['delivery']['address']['floor'])) {
    $model->history[$index20]->combinedTo->delivery->address->floor = $jsonData['history'][$index20]['combinedTo']['delivery']['address']['floor'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['delivery']['address']['block'])) {
    $model->history[$index20]->combinedTo->delivery->address->block = $jsonData['history'][$index20]['combinedTo']['delivery']['address']['block'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['delivery']['address']['house'])) {
    $model->history[$index20]->combinedTo->delivery->address->house = $jsonData['history'][$index20]['combinedTo']['delivery']['address']['house'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['delivery']['address']['housing'])) {
    $model->history[$index20]->combinedTo->delivery->address->housing = $jsonData['history'][$index20]['combinedTo']['delivery']['address']['housing'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['delivery']['address']['metro'])) {
    $model->history[$index20]->combinedTo->delivery->address->metro = $jsonData['history'][$index20]['combinedTo']['delivery']['address']['metro'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['delivery']['address']['text'])) {
    $model->history[$index20]->combinedTo->delivery->address->text = $jsonData['history'][$index20]['combinedTo']['delivery']['address']['text'];

}


}
if (isset($jsonData['history'][$index20]['combinedTo']['delivery']['vatRate'])) {
    $model->history[$index20]->combinedTo->delivery->vatRate = $jsonData['history'][$index20]['combinedTo']['delivery']['vatRate'];

}


}
if (isset($jsonData['history'][$index20]['combinedTo']['marketplace'])) {
    
$model->history[$index20]->combinedTo->marketplace = new RetailCrm\Api\Model\Entity\Order\MarketplaceData();
if (isset($jsonData['history'][$index20]['combinedTo']['marketplace']['code'])) {
    $model->history[$index20]->combinedTo->marketplace->code = $jsonData['history'][$index20]['combinedTo']['marketplace']['code'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['marketplace']['orderId'])) {
    $model->history[$index20]->combinedTo->marketplace->orderId = $jsonData['history'][$index20]['combinedTo']['marketplace']['orderId'];

}


}
if (isset($jsonData['history'][$index20]['combinedTo']['site'])) {
    $model->history[$index20]->combinedTo->site = $jsonData['history'][$index20]['combinedTo']['site'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['status'])) {
    $model->history[$index20]->combinedTo->status = $jsonData['history'][$index20]['combinedTo']['status'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['statusComment'])) {
    $model->history[$index20]->combinedTo->statusComment = $jsonData['history'][$index20]['combinedTo']['statusComment'];

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
if (isset($jsonData['history'][$index20]['combinedTo']['items'])) {
    $model->history[$index20]->combinedTo->items = [];
foreach (array_keys($jsonData['history'][$index20]['combinedTo']['items']) as $index53) {
    
$model->history[$index20]->combinedTo->items[$index53] = new RetailCrm\Api\Model\Entity\Order\Items\OrderProduct();
if (isset($jsonData['history'][$index20]['combinedTo']['items'][$index53]['externalId'])) {
    $model->history[$index20]->combinedTo->items[$index53]->externalId = $jsonData['history'][$index20]['combinedTo']['items'][$index53]['externalId'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['items'][$index53]['markingCodes'])) {
    $model->history[$index20]->combinedTo->items[$index53]->markingCodes = [];
foreach (array_keys($jsonData['history'][$index20]['combinedTo']['items'][$index53]['markingCodes']) as $index79) {
    $model->history[$index20]->combinedTo->items[$index53]->markingCodes[$index79] = $jsonData['history'][$index20]['combinedTo']['items'][$index53]['markingCodes'][$index79];

}

}
if (isset($jsonData['history'][$index20]['combinedTo']['items'][$index53]['id'])) {
    $model->history[$index20]->combinedTo->items[$index53]->id = $jsonData['history'][$index20]['combinedTo']['items'][$index53]['id'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['items'][$index53]['externalIds'])) {
    $model->history[$index20]->combinedTo->items[$index53]->externalIds = [];
foreach (array_keys($jsonData['history'][$index20]['combinedTo']['items'][$index53]['externalIds']) as $index78) {
    
$model->history[$index20]->combinedTo->items[$index53]->externalIds[$index78] = new RetailCrm\Api\Model\Entity\CodeValueModel();
if (isset($jsonData['history'][$index20]['combinedTo']['items'][$index53]['externalIds'][$index78]['code'])) {
    $model->history[$index20]->combinedTo->items[$index53]->externalIds[$index78]->code = $jsonData['history'][$index20]['combinedTo']['items'][$index53]['externalIds'][$index78]['code'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['items'][$index53]['externalIds'][$index78]['value'])) {
    $model->history[$index20]->combinedTo->items[$index53]->externalIds[$index78]->value = $jsonData['history'][$index20]['combinedTo']['items'][$index53]['externalIds'][$index78]['value'];

}


}

}
if (isset($jsonData['history'][$index20]['combinedTo']['items'][$index53]['priceType'])) {
    
$model->history[$index20]->combinedTo->items[$index53]->priceType = new RetailCrm\Api\Model\Entity\Order\Items\PriceType();
if (isset($jsonData['history'][$index20]['combinedTo']['items'][$index53]['priceType']['code'])) {
    $model->history[$index20]->combinedTo->items[$index53]->priceType->code = $jsonData['history'][$index20]['combinedTo']['items'][$index53]['priceType']['code'];

}


}
if (isset($jsonData['history'][$index20]['combinedTo']['items'][$index53]['initialPrice'])) {
    $model->history[$index20]->combinedTo->items[$index53]->initialPrice = (float) $jsonData['history'][$index20]['combinedTo']['items'][$index53]['initialPrice'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['items'][$index53]['discountManualAmount'])) {
    $model->history[$index20]->combinedTo->items[$index53]->discountManualAmount = (float) $jsonData['history'][$index20]['combinedTo']['items'][$index53]['discountManualAmount'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['items'][$index53]['discountManualPercent'])) {
    $model->history[$index20]->combinedTo->items[$index53]->discountManualPercent = (float) $jsonData['history'][$index20]['combinedTo']['items'][$index53]['discountManualPercent'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['items'][$index53]['discountTotal'])) {
    $model->history[$index20]->combinedTo->items[$index53]->discountTotal = (float) $jsonData['history'][$index20]['combinedTo']['items'][$index53]['discountTotal'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['items'][$index53]['prices'])) {
    $model->history[$index20]->combinedTo->items[$index53]->prices = [];
foreach (array_keys($jsonData['history'][$index20]['combinedTo']['items'][$index53]['prices']) as $index73) {
    
$model->history[$index20]->combinedTo->items[$index53]->prices[$index73] = new RetailCrm\Api\Model\Entity\Order\Items\OrderProductPriceItem();
if (isset($jsonData['history'][$index20]['combinedTo']['items'][$index53]['prices'][$index73]['price'])) {
    $model->history[$index20]->combinedTo->items[$index53]->prices[$index73]->price = (float) $jsonData['history'][$index20]['combinedTo']['items'][$index53]['prices'][$index73]['price'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['items'][$index53]['prices'][$index73]['quantity'])) {
    $model->history[$index20]->combinedTo->items[$index53]->prices[$index73]->quantity = (float) $jsonData['history'][$index20]['combinedTo']['items'][$index53]['prices'][$index73]['quantity'];

}


}

}
if (isset($jsonData['history'][$index20]['combinedTo']['items'][$index53]['vatRate'])) {
    $model->history[$index20]->combinedTo->items[$index53]->vatRate = $jsonData['history'][$index20]['combinedTo']['items'][$index53]['vatRate'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['items'][$index53]['createdAt'])) {
    $model->history[$index20]->combinedTo->items[$index53]->createdAt = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['history'][$index20]['combinedTo']['items'][$index53]['createdAt']);

}
if (isset($jsonData['history'][$index20]['combinedTo']['items'][$index53]['quantity'])) {
    $model->history[$index20]->combinedTo->items[$index53]->quantity = (float) $jsonData['history'][$index20]['combinedTo']['items'][$index53]['quantity'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['items'][$index53]['status'])) {
    $model->history[$index20]->combinedTo->items[$index53]->status = $jsonData['history'][$index20]['combinedTo']['items'][$index53]['status'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['items'][$index53]['comment'])) {
    $model->history[$index20]->combinedTo->items[$index53]->comment = $jsonData['history'][$index20]['combinedTo']['items'][$index53]['comment'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['items'][$index53]['offer'])) {
    
$model->history[$index20]->combinedTo->items[$index53]->offer = new RetailCrm\Api\Model\Entity\Order\Items\Offer();
if (isset($jsonData['history'][$index20]['combinedTo']['items'][$index53]['offer']['displayName'])) {
    $model->history[$index20]->combinedTo->items[$index53]->offer->displayName = $jsonData['history'][$index20]['combinedTo']['items'][$index53]['offer']['displayName'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['items'][$index53]['offer']['id'])) {
    $model->history[$index20]->combinedTo->items[$index53]->offer->id = $jsonData['history'][$index20]['combinedTo']['items'][$index53]['offer']['id'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['items'][$index53]['offer']['externalId'])) {
    $model->history[$index20]->combinedTo->items[$index53]->offer->externalId = $jsonData['history'][$index20]['combinedTo']['items'][$index53]['offer']['externalId'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['items'][$index53]['offer']['xmlId'])) {
    $model->history[$index20]->combinedTo->items[$index53]->offer->xmlId = $jsonData['history'][$index20]['combinedTo']['items'][$index53]['offer']['xmlId'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['items'][$index53]['offer']['name'])) {
    $model->history[$index20]->combinedTo->items[$index53]->offer->name = $jsonData['history'][$index20]['combinedTo']['items'][$index53]['offer']['name'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['items'][$index53]['offer']['article'])) {
    $model->history[$index20]->combinedTo->items[$index53]->offer->article = $jsonData['history'][$index20]['combinedTo']['items'][$index53]['offer']['article'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['items'][$index53]['offer']['vatRate'])) {
    $model->history[$index20]->combinedTo->items[$index53]->offer->vatRate = $jsonData['history'][$index20]['combinedTo']['items'][$index53]['offer']['vatRate'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['items'][$index53]['offer']['unit'])) {
    
$model->history[$index20]->combinedTo->items[$index53]->offer->unit = new RetailCrm\Api\Model\Entity\Order\Items\Unit();
if (isset($jsonData['history'][$index20]['combinedTo']['items'][$index53]['offer']['unit']['code'])) {
    $model->history[$index20]->combinedTo->items[$index53]->offer->unit->code = $jsonData['history'][$index20]['combinedTo']['items'][$index53]['offer']['unit']['code'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['items'][$index53]['offer']['unit']['name'])) {
    $model->history[$index20]->combinedTo->items[$index53]->offer->unit->name = $jsonData['history'][$index20]['combinedTo']['items'][$index53]['offer']['unit']['name'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['items'][$index53]['offer']['unit']['sym'])) {
    $model->history[$index20]->combinedTo->items[$index53]->offer->unit->sym = $jsonData['history'][$index20]['combinedTo']['items'][$index53]['offer']['unit']['sym'];

}


}
if (isset($jsonData['history'][$index20]['combinedTo']['items'][$index53]['offer']['barcode'])) {
    $model->history[$index20]->combinedTo->items[$index53]->offer->barcode = $jsonData['history'][$index20]['combinedTo']['items'][$index53]['offer']['barcode'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['items'][$index53]['offer']['properties'])) {
    $model->history[$index20]->combinedTo->items[$index53]->offer->properties = [];
foreach (array_keys($jsonData['history'][$index20]['combinedTo']['items'][$index53]['offer']['properties']) as $index86) {
    $model->history[$index20]->combinedTo->items[$index53]->offer->properties[$index86] = $jsonData['history'][$index20]['combinedTo']['items'][$index53]['offer']['properties'][$index86];

}

}


}
if (isset($jsonData['history'][$index20]['combinedTo']['items'][$index53]['productName'])) {
    $model->history[$index20]->combinedTo->items[$index53]->productName = $jsonData['history'][$index20]['combinedTo']['items'][$index53]['productName'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['items'][$index53]['isCanceled'])) {
    $model->history[$index20]->combinedTo->items[$index53]->isCanceled = $jsonData['history'][$index20]['combinedTo']['items'][$index53]['isCanceled'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['items'][$index53]['properties'])) {
    $model->history[$index20]->combinedTo->items[$index53]->properties = [];
foreach (array_keys($jsonData['history'][$index20]['combinedTo']['items'][$index53]['properties']) as $index77) {
    
$model->history[$index20]->combinedTo->items[$index53]->properties[$index77] = new RetailCrm\Api\Model\Entity\Order\Items\ItemProperty();
if (isset($jsonData['history'][$index20]['combinedTo']['items'][$index53]['properties'][$index77]['code'])) {
    $model->history[$index20]->combinedTo->items[$index53]->properties[$index77]->code = $jsonData['history'][$index20]['combinedTo']['items'][$index53]['properties'][$index77]['code'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['items'][$index53]['properties'][$index77]['name'])) {
    $model->history[$index20]->combinedTo->items[$index53]->properties[$index77]->name = $jsonData['history'][$index20]['combinedTo']['items'][$index53]['properties'][$index77]['name'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['items'][$index53]['properties'][$index77]['value'])) {
    $model->history[$index20]->combinedTo->items[$index53]->properties[$index77]->value = $jsonData['history'][$index20]['combinedTo']['items'][$index53]['properties'][$index77]['value'];

}


}

}
if (isset($jsonData['history'][$index20]['combinedTo']['items'][$index53]['purchasePrice'])) {
    $model->history[$index20]->combinedTo->items[$index53]->purchasePrice = (float) $jsonData['history'][$index20]['combinedTo']['items'][$index53]['purchasePrice'];

}


}

}
if (isset($jsonData['history'][$index20]['combinedTo']['fullPaidAt'])) {
    $model->history[$index20]->combinedTo->fullPaidAt = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['history'][$index20]['combinedTo']['fullPaidAt']);

}
if (isset($jsonData['history'][$index20]['combinedTo']['payments'])) {
    $model->history[$index20]->combinedTo->payments = [];
foreach (array_keys($jsonData['history'][$index20]['combinedTo']['payments']) as $index56) {
    
$model->history[$index20]->combinedTo->payments[$index56] = new RetailCrm\Api\Model\Entity\Order\Payment();
if (isset($jsonData['history'][$index20]['combinedTo']['payments'][$index56]['id'])) {
    $model->history[$index20]->combinedTo->payments[$index56]->id = $jsonData['history'][$index20]['combinedTo']['payments'][$index56]['id'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['payments'][$index56]['status'])) {
    $model->history[$index20]->combinedTo->payments[$index56]->status = $jsonData['history'][$index20]['combinedTo']['payments'][$index56]['status'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['payments'][$index56]['type'])) {
    $model->history[$index20]->combinedTo->payments[$index56]->type = $jsonData['history'][$index20]['combinedTo']['payments'][$index56]['type'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['payments'][$index56]['externalId'])) {
    $model->history[$index20]->combinedTo->payments[$index56]->externalId = $jsonData['history'][$index20]['combinedTo']['payments'][$index56]['externalId'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['payments'][$index56]['amount'])) {
    $model->history[$index20]->combinedTo->payments[$index56]->amount = (float) $jsonData['history'][$index20]['combinedTo']['payments'][$index56]['amount'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['payments'][$index56]['paidAt'])) {
    $model->history[$index20]->combinedTo->payments[$index56]->paidAt = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['history'][$index20]['combinedTo']['payments'][$index56]['paidAt']);

}
if (isset($jsonData['history'][$index20]['combinedTo']['payments'][$index56]['comment'])) {
    $model->history[$index20]->combinedTo->payments[$index56]->comment = $jsonData['history'][$index20]['combinedTo']['payments'][$index56]['comment'];

}


}

}
if (isset($jsonData['history'][$index20]['combinedTo']['fromApi'])) {
    $model->history[$index20]->combinedTo->fromApi = $jsonData['history'][$index20]['combinedTo']['fromApi'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['weight'])) {
    $model->history[$index20]->combinedTo->weight = (float) $jsonData['history'][$index20]['combinedTo']['weight'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['length'])) {
    $model->history[$index20]->combinedTo->length = $jsonData['history'][$index20]['combinedTo']['length'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['width'])) {
    $model->history[$index20]->combinedTo->width = $jsonData['history'][$index20]['combinedTo']['width'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['height'])) {
    $model->history[$index20]->combinedTo->height = $jsonData['history'][$index20]['combinedTo']['height'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['shipmentStore'])) {
    $model->history[$index20]->combinedTo->shipmentStore = $jsonData['history'][$index20]['combinedTo']['shipmentStore'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['shipmentDate'])) {
    $model->history[$index20]->combinedTo->shipmentDate = \DateTime::createFromFormat('Y-m-d', $jsonData['history'][$index20]['combinedTo']['shipmentDate']);

}
if (isset($jsonData['history'][$index20]['combinedTo']['shipped'])) {
    $model->history[$index20]->combinedTo->shipped = $jsonData['history'][$index20]['combinedTo']['shipped'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['dialogId'])) {
    $model->history[$index20]->combinedTo->dialogId = $jsonData['history'][$index20]['combinedTo']['dialogId'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['customFields'])) {
    $model->history[$index20]->combinedTo->customFields = [];
foreach (array_keys($jsonData['history'][$index20]['combinedTo']['customFields']) as $index60) {
    $model->history[$index20]->combinedTo->customFields[$index60] = $jsonData['history'][$index20]['combinedTo']['customFields'][$index60];

}

}
if (isset($jsonData['history'][$index20]['combinedTo']['clientId'])) {
    $model->history[$index20]->combinedTo->clientId = $jsonData['history'][$index20]['combinedTo']['clientId'];

}
if (isset($jsonData['history'][$index20]['combinedTo']['loyaltyEventId'])) {
    $model->history[$index20]->combinedTo->loyaltyEventId = $jsonData['history'][$index20]['combinedTo']['loyaltyEventId'];

}


}


}

}



    return $model;
}
