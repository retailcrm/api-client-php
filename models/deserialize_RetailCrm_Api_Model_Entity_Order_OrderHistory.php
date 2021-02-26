<?php

function deserialize_RetailCrm_Api_Model_Entity_Order_OrderHistory(array $jsonData): RetailCrm\Api\Model\Entity\Order\OrderHistory
{
    
$model = new RetailCrm\Api\Model\Entity\Order\OrderHistory();
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
if (isset($jsonData['order'])) {
    
$model->order = new RetailCrm\Api\Model\Entity\Order\Order();
if (isset($jsonData['order']['bonusesCreditTotal'])) {
    $model->order->bonusesCreditTotal = (float) $jsonData['order']['bonusesCreditTotal'];

}
if (isset($jsonData['order']['bonusesChargeTotal'])) {
    $model->order->bonusesChargeTotal = (float) $jsonData['order']['bonusesChargeTotal'];

}
if (isset($jsonData['order']['summ'])) {
    $model->order->summ = (float) $jsonData['order']['summ'];

}
if (isset($jsonData['order']['id'])) {
    $model->order->id = $jsonData['order']['id'];

}
if (isset($jsonData['order']['slug'])) {
    $model->order->slug = $jsonData['order']['slug'];

}
if (isset($jsonData['order']['number'])) {
    $model->order->number = $jsonData['order']['number'];

}
if (isset($jsonData['order']['externalId'])) {
    $model->order->externalId = $jsonData['order']['externalId'];

}
if (isset($jsonData['order']['orderType'])) {
    $model->order->orderType = $jsonData['order']['orderType'];

}
if (isset($jsonData['order']['orderMethod'])) {
    $model->order->orderMethod = $jsonData['order']['orderMethod'];

}
if (isset($jsonData['order']['privilegeType'])) {
    $model->order->privilegeType = $jsonData['order']['privilegeType'];

}
if (isset($jsonData['order']['countryIso'])) {
    $model->order->countryIso = $jsonData['order']['countryIso'];

}
if (isset($jsonData['order']['createdAt'])) {
    $model->order->createdAt = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['order']['createdAt']);

}
if (isset($jsonData['order']['statusUpdatedAt'])) {
    $model->order->statusUpdatedAt = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['order']['statusUpdatedAt']);

}
if (isset($jsonData['order']['discountManualAmount'])) {
    $model->order->discountManualAmount = (float) $jsonData['order']['discountManualAmount'];

}
if (isset($jsonData['order']['discountManualPercent'])) {
    $model->order->discountManualPercent = (float) $jsonData['order']['discountManualPercent'];

}
if (isset($jsonData['order']['totalSumm'])) {
    $model->order->totalSumm = (float) $jsonData['order']['totalSumm'];

}
if (isset($jsonData['order']['prepaySum'])) {
    $model->order->prepaySum = (float) $jsonData['order']['prepaySum'];

}
if (isset($jsonData['order']['purchaseSumm'])) {
    $model->order->purchaseSumm = (float) $jsonData['order']['purchaseSumm'];

}
if (isset($jsonData['order']['personalDiscountPercent'])) {
    $model->order->personalDiscountPercent = (float) $jsonData['order']['personalDiscountPercent'];

}
if (isset($jsonData['order']['loyaltyLevel'])) {
    
$model->order->loyaltyLevel = new RetailCrm\Api\Model\Entity\Loyalty\LoyaltyLevel();
if (isset($jsonData['order']['loyaltyLevel']['id'])) {
    $model->order->loyaltyLevel->id = $jsonData['order']['loyaltyLevel']['id'];

}
if (isset($jsonData['order']['loyaltyLevel']['name'])) {
    $model->order->loyaltyLevel->name = $jsonData['order']['loyaltyLevel']['name'];

}


}
if (isset($jsonData['order']['loyaltyEvent'])) {
    
$model->order->loyaltyEvent = new RetailCrm\Api\Model\Entity\Loyalty\AbstractLoyaltyEvent();
if (isset($jsonData['order']['loyaltyEvent']['id'])) {
    $model->order->loyaltyEvent->id = $jsonData['order']['loyaltyEvent']['id'];

}


}
if (isset($jsonData['order']['mark'])) {
    $model->order->mark = $jsonData['order']['mark'];

}
if (isset($jsonData['order']['markDatetime'])) {
    $model->order->markDatetime = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['order']['markDatetime']);

}
if (isset($jsonData['order']['lastName'])) {
    $model->order->lastName = $jsonData['order']['lastName'];

}
if (isset($jsonData['order']['firstName'])) {
    $model->order->firstName = $jsonData['order']['firstName'];

}
if (isset($jsonData['order']['patronymic'])) {
    $model->order->patronymic = $jsonData['order']['patronymic'];

}
if (isset($jsonData['order']['phone'])) {
    $model->order->phone = $jsonData['order']['phone'];

}
if (isset($jsonData['order']['additionalPhone'])) {
    $model->order->additionalPhone = $jsonData['order']['additionalPhone'];

}
if (isset($jsonData['order']['email'])) {
    $model->order->email = $jsonData['order']['email'];

}
if (isset($jsonData['order']['call'])) {
    $model->order->call = $jsonData['order']['call'];

}
if (isset($jsonData['order']['expired'])) {
    $model->order->expired = $jsonData['order']['expired'];

}
if (isset($jsonData['order']['customerComment'])) {
    $model->order->customerComment = $jsonData['order']['customerComment'];

}
if (isset($jsonData['order']['managerComment'])) {
    $model->order->managerComment = $jsonData['order']['managerComment'];

}
if (isset($jsonData['order']['managerId'])) {
    $model->order->managerId = $jsonData['order']['managerId'];

}
if (isset($jsonData['order']['customer'])) {
    

if (
    !empty($jsonData['order']['customer']['type']) &&
    \RetailCrm\Api\Enum\Customers\CustomerType::CORPORATE_CUSTOMER === $jsonData['order']['customer']['type']
) {
    
$model->order->customer = new RetailCrm\Api\Model\Entity\CustomersCorporate\CustomerCorporate();
if (isset($jsonData['order']['customer']['type'])) {
    $model->order->customer->type = $jsonData['order']['customer']['type'];

}
if (isset($jsonData['order']['customer']['id'])) {
    $model->order->customer->id = $jsonData['order']['customer']['id'];

}
if (isset($jsonData['order']['customer']['externalId'])) {
    $model->order->customer->externalId = $jsonData['order']['customer']['externalId'];

}
if (isset($jsonData['order']['customer']['nickName'])) {
    $model->order->customer->nickName = $jsonData['order']['customer']['nickName'];

}
if (isset($jsonData['order']['customer']['mainAddress'])) {
    
$model->order->customer->mainAddress = new RetailCrm\Api\Model\Entity\CustomersCorporate\EntityWithExternalIdNameOutput();
if (isset($jsonData['order']['customer']['mainAddress']['id'])) {
    $model->order->customer->mainAddress->id = $jsonData['order']['customer']['mainAddress']['id'];

}
if (isset($jsonData['order']['customer']['mainAddress']['externalId'])) {
    $model->order->customer->mainAddress->externalId = $jsonData['order']['customer']['mainAddress']['externalId'];

}
if (isset($jsonData['order']['customer']['mainAddress']['name'])) {
    $model->order->customer->mainAddress->name = $jsonData['order']['customer']['mainAddress']['name'];

}


}
if (isset($jsonData['order']['customer']['createdAt'])) {
    $model->order->customer->createdAt = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['order']['customer']['createdAt']);

}
if (isset($jsonData['order']['customer']['managerId'])) {
    $model->order->customer->managerId = $jsonData['order']['customer']['managerId'];

}
if (isset($jsonData['order']['customer']['source'])) {
    
$model->order->customer->source = new RetailCrm\Api\Model\Entity\Source();
if (isset($jsonData['order']['customer']['source']['source'])) {
    $model->order->customer->source->source = $jsonData['order']['customer']['source']['source'];

}
if (isset($jsonData['order']['customer']['source']['medium'])) {
    $model->order->customer->source->medium = $jsonData['order']['customer']['source']['medium'];

}
if (isset($jsonData['order']['customer']['source']['campaign'])) {
    $model->order->customer->source->campaign = $jsonData['order']['customer']['source']['campaign'];

}
if (isset($jsonData['order']['customer']['source']['keyword'])) {
    $model->order->customer->source->keyword = $jsonData['order']['customer']['source']['keyword'];

}
if (isset($jsonData['order']['customer']['source']['content'])) {
    $model->order->customer->source->content = $jsonData['order']['customer']['source']['content'];

}


}
if (isset($jsonData['order']['customer']['customerContacts'])) {
    $model->order->customer->customerContacts = [];
foreach (array_keys($jsonData['order']['customer']['customerContacts']) as $index50) {
    
$model->order->customer->customerContacts[$index50] = new RetailCrm\Api\Model\Entity\CustomersCorporate\CustomerContact();
if (isset($jsonData['order']['customer']['customerContacts'][$index50]['id'])) {
    $model->order->customer->customerContacts[$index50]->id = $jsonData['order']['customer']['customerContacts'][$index50]['id'];

}
if (isset($jsonData['order']['customer']['customerContacts'][$index50]['isMain'])) {
    $model->order->customer->customerContacts[$index50]->isMain = $jsonData['order']['customer']['customerContacts'][$index50]['isMain'];

}
if (isset($jsonData['order']['customer']['customerContacts'][$index50]['customer'])) {
    
$model->order->customer->customerContacts[$index50]->customer = new RetailCrm\Api\Model\Entity\CustomersCorporate\SerializedRelationAbstractCustomer();
if (isset($jsonData['order']['customer']['customerContacts'][$index50]['customer']['id'])) {
    $model->order->customer->customerContacts[$index50]->customer->id = $jsonData['order']['customer']['customerContacts'][$index50]['customer']['id'];

}
if (isset($jsonData['order']['customer']['customerContacts'][$index50]['customer']['externalId'])) {
    $model->order->customer->customerContacts[$index50]->customer->externalId = $jsonData['order']['customer']['customerContacts'][$index50]['customer']['externalId'];

}
if (isset($jsonData['order']['customer']['customerContacts'][$index50]['customer']['browserId'])) {
    $model->order->customer->customerContacts[$index50]->customer->browserId = $jsonData['order']['customer']['customerContacts'][$index50]['customer']['browserId'];

}
if (isset($jsonData['order']['customer']['customerContacts'][$index50]['customer']['site'])) {
    $model->order->customer->customerContacts[$index50]->customer->site = $jsonData['order']['customer']['customerContacts'][$index50]['customer']['site'];

}
if (isset($jsonData['order']['customer']['customerContacts'][$index50]['customer']['companies'])) {
    $model->order->customer->customerContacts[$index50]->customer->companies = [];
foreach (array_keys($jsonData['order']['customer']['customerContacts'][$index50]['customer']['companies']) as $index85) {
    
$model->order->customer->customerContacts[$index50]->customer->companies[$index85] = new RetailCrm\Api\Model\Entity\CustomersCorporate\CustomerContactCompany();
if (isset($jsonData['order']['customer']['customerContacts'][$index50]['customer']['companies'][$index85]['id'])) {
    $model->order->customer->customerContacts[$index50]->customer->companies[$index85]->id = $jsonData['order']['customer']['customerContacts'][$index50]['customer']['companies'][$index85]['id'];

}
if (isset($jsonData['order']['customer']['customerContacts'][$index50]['customer']['companies'][$index85]['externalId'])) {
    $model->order->customer->customerContacts[$index50]->customer->companies[$index85]->externalId = $jsonData['order']['customer']['customerContacts'][$index50]['customer']['companies'][$index85]['externalId'];

}
if (isset($jsonData['order']['customer']['customerContacts'][$index50]['customer']['companies'][$index85]['company'])) {
    
$model->order->customer->customerContacts[$index50]->customer->companies[$index85]->company = new RetailCrm\Api\Model\Entity\CustomersCorporate\EntityWithExternalIdNameOutput();
if (isset($jsonData['order']['customer']['customerContacts'][$index50]['customer']['companies'][$index85]['company']['id'])) {
    $model->order->customer->customerContacts[$index50]->customer->companies[$index85]->company->id = $jsonData['order']['customer']['customerContacts'][$index50]['customer']['companies'][$index85]['company']['id'];

}
if (isset($jsonData['order']['customer']['customerContacts'][$index50]['customer']['companies'][$index85]['company']['externalId'])) {
    $model->order->customer->customerContacts[$index50]->customer->companies[$index85]->company->externalId = $jsonData['order']['customer']['customerContacts'][$index50]['customer']['companies'][$index85]['company']['externalId'];

}
if (isset($jsonData['order']['customer']['customerContacts'][$index50]['customer']['companies'][$index85]['company']['name'])) {
    $model->order->customer->customerContacts[$index50]->customer->companies[$index85]->company->name = $jsonData['order']['customer']['customerContacts'][$index50]['customer']['companies'][$index85]['company']['name'];

}


}


}

}


}
if (isset($jsonData['order']['customer']['customerContacts'][$index50]['companies'])) {
    $model->order->customer->customerContacts[$index50]->companies = [];
foreach (array_keys($jsonData['order']['customer']['customerContacts'][$index50]['companies']) as $index73) {
    
$model->order->customer->customerContacts[$index50]->companies[$index73] = new RetailCrm\Api\Model\Entity\CustomersCorporate\CustomerContactCompany();
if (isset($jsonData['order']['customer']['customerContacts'][$index50]['companies'][$index73]['id'])) {
    $model->order->customer->customerContacts[$index50]->companies[$index73]->id = $jsonData['order']['customer']['customerContacts'][$index50]['companies'][$index73]['id'];

}
if (isset($jsonData['order']['customer']['customerContacts'][$index50]['companies'][$index73]['externalId'])) {
    $model->order->customer->customerContacts[$index50]->companies[$index73]->externalId = $jsonData['order']['customer']['customerContacts'][$index50]['companies'][$index73]['externalId'];

}
if (isset($jsonData['order']['customer']['customerContacts'][$index50]['companies'][$index73]['company'])) {
    
$model->order->customer->customerContacts[$index50]->companies[$index73]->company = new RetailCrm\Api\Model\Entity\CustomersCorporate\EntityWithExternalIdNameOutput();
if (isset($jsonData['order']['customer']['customerContacts'][$index50]['companies'][$index73]['company']['id'])) {
    $model->order->customer->customerContacts[$index50]->companies[$index73]->company->id = $jsonData['order']['customer']['customerContacts'][$index50]['companies'][$index73]['company']['id'];

}
if (isset($jsonData['order']['customer']['customerContacts'][$index50]['companies'][$index73]['company']['externalId'])) {
    $model->order->customer->customerContacts[$index50]->companies[$index73]->company->externalId = $jsonData['order']['customer']['customerContacts'][$index50]['companies'][$index73]['company']['externalId'];

}
if (isset($jsonData['order']['customer']['customerContacts'][$index50]['companies'][$index73]['company']['name'])) {
    $model->order->customer->customerContacts[$index50]->companies[$index73]->company->name = $jsonData['order']['customer']['customerContacts'][$index50]['companies'][$index73]['company']['name'];

}


}


}

}


}

}
if (isset($jsonData['order']['customer']['companies'])) {
    $model->order->customer->companies = [];
foreach (array_keys($jsonData['order']['customer']['companies']) as $index43) {
    
$model->order->customer->companies[$index43] = new RetailCrm\Api\Model\Entity\CustomersCorporate\Company();
if (isset($jsonData['order']['customer']['companies'][$index43]['id'])) {
    $model->order->customer->companies[$index43]->id = $jsonData['order']['customer']['companies'][$index43]['id'];

}
if (isset($jsonData['order']['customer']['companies'][$index43]['isMain'])) {
    $model->order->customer->companies[$index43]->isMain = $jsonData['order']['customer']['companies'][$index43]['isMain'];

}
if (isset($jsonData['order']['customer']['companies'][$index43]['externalId'])) {
    $model->order->customer->companies[$index43]->externalId = $jsonData['order']['customer']['companies'][$index43]['externalId'];

}
if (isset($jsonData['order']['customer']['companies'][$index43]['active'])) {
    $model->order->customer->companies[$index43]->active = $jsonData['order']['customer']['companies'][$index43]['active'];

}
if (isset($jsonData['order']['customer']['companies'][$index43]['name'])) {
    $model->order->customer->companies[$index43]->name = $jsonData['order']['customer']['companies'][$index43]['name'];

}
if (isset($jsonData['order']['customer']['companies'][$index43]['brand'])) {
    $model->order->customer->companies[$index43]->brand = $jsonData['order']['customer']['companies'][$index43]['brand'];

}
if (isset($jsonData['order']['customer']['companies'][$index43]['site'])) {
    $model->order->customer->companies[$index43]->site = $jsonData['order']['customer']['companies'][$index43]['site'];

}
if (isset($jsonData['order']['customer']['companies'][$index43]['createdAt'])) {
    $model->order->customer->companies[$index43]->createdAt = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['order']['customer']['companies'][$index43]['createdAt']);

}
if (isset($jsonData['order']['customer']['companies'][$index43]['customer'])) {
    
$model->order->customer->companies[$index43]->customer = new RetailCrm\Api\Model\Entity\CustomersCorporate\SerializedEntityCustomer();
if (isset($jsonData['order']['customer']['companies'][$index43]['customer']['site'])) {
    $model->order->customer->companies[$index43]->customer->site = $jsonData['order']['customer']['companies'][$index43]['customer']['site'];

}
if (isset($jsonData['order']['customer']['companies'][$index43]['customer']['id'])) {
    $model->order->customer->companies[$index43]->customer->id = $jsonData['order']['customer']['companies'][$index43]['customer']['id'];

}
if (isset($jsonData['order']['customer']['companies'][$index43]['customer']['externalId'])) {
    $model->order->customer->companies[$index43]->customer->externalId = $jsonData['order']['customer']['companies'][$index43]['customer']['externalId'];

}
if (isset($jsonData['order']['customer']['companies'][$index43]['customer']['type'])) {
    $model->order->customer->companies[$index43]->customer->type = $jsonData['order']['customer']['companies'][$index43]['customer']['type'];

}


}
if (isset($jsonData['order']['customer']['companies'][$index43]['contragent'])) {
    
$model->order->customer->companies[$index43]->contragent = new RetailCrm\Api\Model\Entity\Customers\CustomerContragent();
if (isset($jsonData['order']['customer']['companies'][$index43]['contragent']['contragentType'])) {
    $model->order->customer->companies[$index43]->contragent->contragentType = $jsonData['order']['customer']['companies'][$index43]['contragent']['contragentType'];

}
if (isset($jsonData['order']['customer']['companies'][$index43]['contragent']['legalName'])) {
    $model->order->customer->companies[$index43]->contragent->legalName = $jsonData['order']['customer']['companies'][$index43]['contragent']['legalName'];

}
if (isset($jsonData['order']['customer']['companies'][$index43]['contragent']['legalAddress'])) {
    $model->order->customer->companies[$index43]->contragent->legalAddress = $jsonData['order']['customer']['companies'][$index43]['contragent']['legalAddress'];

}
if (isset($jsonData['order']['customer']['companies'][$index43]['contragent']['INN'])) {
    $model->order->customer->companies[$index43]->contragent->INN = $jsonData['order']['customer']['companies'][$index43]['contragent']['INN'];

}
if (isset($jsonData['order']['customer']['companies'][$index43]['contragent']['OKPO'])) {
    $model->order->customer->companies[$index43]->contragent->OKPO = $jsonData['order']['customer']['companies'][$index43]['contragent']['OKPO'];

}
if (isset($jsonData['order']['customer']['companies'][$index43]['contragent']['KPP'])) {
    $model->order->customer->companies[$index43]->contragent->KPP = $jsonData['order']['customer']['companies'][$index43]['contragent']['KPP'];

}
if (isset($jsonData['order']['customer']['companies'][$index43]['contragent']['OGRN'])) {
    $model->order->customer->companies[$index43]->contragent->OGRN = $jsonData['order']['customer']['companies'][$index43]['contragent']['OGRN'];

}
if (isset($jsonData['order']['customer']['companies'][$index43]['contragent']['OGRNIP'])) {
    $model->order->customer->companies[$index43]->contragent->OGRNIP = $jsonData['order']['customer']['companies'][$index43]['contragent']['OGRNIP'];

}
if (isset($jsonData['order']['customer']['companies'][$index43]['contragent']['certificateNumber'])) {
    $model->order->customer->companies[$index43]->contragent->certificateNumber = $jsonData['order']['customer']['companies'][$index43]['contragent']['certificateNumber'];

}
if (isset($jsonData['order']['customer']['companies'][$index43]['contragent']['certificateDate'])) {
    $model->order->customer->companies[$index43]->contragent->certificateDate = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['order']['customer']['companies'][$index43]['contragent']['certificateDate']);

}
if (isset($jsonData['order']['customer']['companies'][$index43]['contragent']['BIK'])) {
    $model->order->customer->companies[$index43]->contragent->BIK = $jsonData['order']['customer']['companies'][$index43]['contragent']['BIK'];

}
if (isset($jsonData['order']['customer']['companies'][$index43]['contragent']['bank'])) {
    $model->order->customer->companies[$index43]->contragent->bank = $jsonData['order']['customer']['companies'][$index43]['contragent']['bank'];

}
if (isset($jsonData['order']['customer']['companies'][$index43]['contragent']['bankAddress'])) {
    $model->order->customer->companies[$index43]->contragent->bankAddress = $jsonData['order']['customer']['companies'][$index43]['contragent']['bankAddress'];

}
if (isset($jsonData['order']['customer']['companies'][$index43]['contragent']['corrAccount'])) {
    $model->order->customer->companies[$index43]->contragent->corrAccount = $jsonData['order']['customer']['companies'][$index43]['contragent']['corrAccount'];

}
if (isset($jsonData['order']['customer']['companies'][$index43]['contragent']['bankAccount'])) {
    $model->order->customer->companies[$index43]->contragent->bankAccount = $jsonData['order']['customer']['companies'][$index43]['contragent']['bankAccount'];

}


}
if (isset($jsonData['order']['customer']['companies'][$index43]['address'])) {
    
$model->order->customer->companies[$index43]->address = new RetailCrm\Api\Model\Entity\Customers\CustomerAddress();
if (isset($jsonData['order']['customer']['companies'][$index43]['address']['id'])) {
    $model->order->customer->companies[$index43]->address->id = $jsonData['order']['customer']['companies'][$index43]['address']['id'];

}
if (isset($jsonData['order']['customer']['companies'][$index43]['address']['name'])) {
    $model->order->customer->companies[$index43]->address->name = $jsonData['order']['customer']['companies'][$index43]['address']['name'];

}
if (isset($jsonData['order']['customer']['companies'][$index43]['address']['isMain'])) {
    $model->order->customer->companies[$index43]->address->isMain = $jsonData['order']['customer']['companies'][$index43]['address']['isMain'];

}
if (isset($jsonData['order']['customer']['companies'][$index43]['address']['index'])) {
    $model->order->customer->companies[$index43]->address->index = $jsonData['order']['customer']['companies'][$index43]['address']['index'];

}
if (isset($jsonData['order']['customer']['companies'][$index43]['address']['countryIso'])) {
    $model->order->customer->companies[$index43]->address->countryIso = $jsonData['order']['customer']['companies'][$index43]['address']['countryIso'];

}
if (isset($jsonData['order']['customer']['companies'][$index43]['address']['region'])) {
    $model->order->customer->companies[$index43]->address->region = $jsonData['order']['customer']['companies'][$index43]['address']['region'];

}
if (isset($jsonData['order']['customer']['companies'][$index43]['address']['regionId'])) {
    $model->order->customer->companies[$index43]->address->regionId = $jsonData['order']['customer']['companies'][$index43]['address']['regionId'];

}
if (isset($jsonData['order']['customer']['companies'][$index43]['address']['city'])) {
    $model->order->customer->companies[$index43]->address->city = $jsonData['order']['customer']['companies'][$index43]['address']['city'];

}
if (isset($jsonData['order']['customer']['companies'][$index43]['address']['cityId'])) {
    $model->order->customer->companies[$index43]->address->cityId = $jsonData['order']['customer']['companies'][$index43]['address']['cityId'];

}
if (isset($jsonData['order']['customer']['companies'][$index43]['address']['cityType'])) {
    $model->order->customer->companies[$index43]->address->cityType = $jsonData['order']['customer']['companies'][$index43]['address']['cityType'];

}
if (isset($jsonData['order']['customer']['companies'][$index43]['address']['street'])) {
    $model->order->customer->companies[$index43]->address->street = $jsonData['order']['customer']['companies'][$index43]['address']['street'];

}
if (isset($jsonData['order']['customer']['companies'][$index43]['address']['streetId'])) {
    $model->order->customer->companies[$index43]->address->streetId = $jsonData['order']['customer']['companies'][$index43]['address']['streetId'];

}
if (isset($jsonData['order']['customer']['companies'][$index43]['address']['streetType'])) {
    $model->order->customer->companies[$index43]->address->streetType = $jsonData['order']['customer']['companies'][$index43]['address']['streetType'];

}
if (isset($jsonData['order']['customer']['companies'][$index43]['address']['building'])) {
    $model->order->customer->companies[$index43]->address->building = $jsonData['order']['customer']['companies'][$index43]['address']['building'];

}
if (isset($jsonData['order']['customer']['companies'][$index43]['address']['flat'])) {
    $model->order->customer->companies[$index43]->address->flat = $jsonData['order']['customer']['companies'][$index43]['address']['flat'];

}
if (isset($jsonData['order']['customer']['companies'][$index43]['address']['floor'])) {
    $model->order->customer->companies[$index43]->address->floor = $jsonData['order']['customer']['companies'][$index43]['address']['floor'];

}
if (isset($jsonData['order']['customer']['companies'][$index43]['address']['block'])) {
    $model->order->customer->companies[$index43]->address->block = $jsonData['order']['customer']['companies'][$index43]['address']['block'];

}
if (isset($jsonData['order']['customer']['companies'][$index43]['address']['house'])) {
    $model->order->customer->companies[$index43]->address->house = $jsonData['order']['customer']['companies'][$index43]['address']['house'];

}
if (isset($jsonData['order']['customer']['companies'][$index43]['address']['housing'])) {
    $model->order->customer->companies[$index43]->address->housing = $jsonData['order']['customer']['companies'][$index43]['address']['housing'];

}
if (isset($jsonData['order']['customer']['companies'][$index43]['address']['metro'])) {
    $model->order->customer->companies[$index43]->address->metro = $jsonData['order']['customer']['companies'][$index43]['address']['metro'];

}
if (isset($jsonData['order']['customer']['companies'][$index43]['address']['notes'])) {
    $model->order->customer->companies[$index43]->address->notes = $jsonData['order']['customer']['companies'][$index43]['address']['notes'];

}
if (isset($jsonData['order']['customer']['companies'][$index43]['address']['text'])) {
    $model->order->customer->companies[$index43]->address->text = $jsonData['order']['customer']['companies'][$index43]['address']['text'];

}
if (isset($jsonData['order']['customer']['companies'][$index43]['address']['externalId'])) {
    $model->order->customer->companies[$index43]->address->externalId = $jsonData['order']['customer']['companies'][$index43]['address']['externalId'];

}


}
if (isset($jsonData['order']['customer']['companies'][$index43]['customFields'])) {
    $model->order->customer->companies[$index43]->customFields = [];
foreach (array_keys($jsonData['order']['customer']['companies'][$index43]['customFields']) as $index69) {
    $model->order->customer->companies[$index43]->customFields[$index69] = $jsonData['order']['customer']['companies'][$index43]['customFields'][$index69];

}

}
if (isset($jsonData['order']['customer']['companies'][$index43]['marginSumm'])) {
    $model->order->customer->companies[$index43]->marginSumm = (float) $jsonData['order']['customer']['companies'][$index43]['marginSumm'];

}
if (isset($jsonData['order']['customer']['companies'][$index43]['totalSumm'])) {
    $model->order->customer->companies[$index43]->totalSumm = (float) $jsonData['order']['customer']['companies'][$index43]['totalSumm'];

}
if (isset($jsonData['order']['customer']['companies'][$index43]['averageSumm'])) {
    $model->order->customer->companies[$index43]->averageSumm = (float) $jsonData['order']['customer']['companies'][$index43]['averageSumm'];

}
if (isset($jsonData['order']['customer']['companies'][$index43]['ordersCount'])) {
    $model->order->customer->companies[$index43]->ordersCount = $jsonData['order']['customer']['companies'][$index43]['ordersCount'];

}
if (isset($jsonData['order']['customer']['companies'][$index43]['costSumm'])) {
    $model->order->customer->companies[$index43]->costSumm = (float) $jsonData['order']['customer']['companies'][$index43]['costSumm'];

}


}

}
if (isset($jsonData['order']['customer']['addresses'])) {
    $model->order->customer->addresses = [];
foreach (array_keys($jsonData['order']['customer']['addresses']) as $index43) {
    
$model->order->customer->addresses[$index43] = new RetailCrm\Api\Model\Entity\Customers\CustomerAddress();
if (isset($jsonData['order']['customer']['addresses'][$index43]['id'])) {
    $model->order->customer->addresses[$index43]->id = $jsonData['order']['customer']['addresses'][$index43]['id'];

}
if (isset($jsonData['order']['customer']['addresses'][$index43]['name'])) {
    $model->order->customer->addresses[$index43]->name = $jsonData['order']['customer']['addresses'][$index43]['name'];

}
if (isset($jsonData['order']['customer']['addresses'][$index43]['isMain'])) {
    $model->order->customer->addresses[$index43]->isMain = $jsonData['order']['customer']['addresses'][$index43]['isMain'];

}
if (isset($jsonData['order']['customer']['addresses'][$index43]['index'])) {
    $model->order->customer->addresses[$index43]->index = $jsonData['order']['customer']['addresses'][$index43]['index'];

}
if (isset($jsonData['order']['customer']['addresses'][$index43]['countryIso'])) {
    $model->order->customer->addresses[$index43]->countryIso = $jsonData['order']['customer']['addresses'][$index43]['countryIso'];

}
if (isset($jsonData['order']['customer']['addresses'][$index43]['region'])) {
    $model->order->customer->addresses[$index43]->region = $jsonData['order']['customer']['addresses'][$index43]['region'];

}
if (isset($jsonData['order']['customer']['addresses'][$index43]['regionId'])) {
    $model->order->customer->addresses[$index43]->regionId = $jsonData['order']['customer']['addresses'][$index43]['regionId'];

}
if (isset($jsonData['order']['customer']['addresses'][$index43]['city'])) {
    $model->order->customer->addresses[$index43]->city = $jsonData['order']['customer']['addresses'][$index43]['city'];

}
if (isset($jsonData['order']['customer']['addresses'][$index43]['cityId'])) {
    $model->order->customer->addresses[$index43]->cityId = $jsonData['order']['customer']['addresses'][$index43]['cityId'];

}
if (isset($jsonData['order']['customer']['addresses'][$index43]['cityType'])) {
    $model->order->customer->addresses[$index43]->cityType = $jsonData['order']['customer']['addresses'][$index43]['cityType'];

}
if (isset($jsonData['order']['customer']['addresses'][$index43]['street'])) {
    $model->order->customer->addresses[$index43]->street = $jsonData['order']['customer']['addresses'][$index43]['street'];

}
if (isset($jsonData['order']['customer']['addresses'][$index43]['streetId'])) {
    $model->order->customer->addresses[$index43]->streetId = $jsonData['order']['customer']['addresses'][$index43]['streetId'];

}
if (isset($jsonData['order']['customer']['addresses'][$index43]['streetType'])) {
    $model->order->customer->addresses[$index43]->streetType = $jsonData['order']['customer']['addresses'][$index43]['streetType'];

}
if (isset($jsonData['order']['customer']['addresses'][$index43]['building'])) {
    $model->order->customer->addresses[$index43]->building = $jsonData['order']['customer']['addresses'][$index43]['building'];

}
if (isset($jsonData['order']['customer']['addresses'][$index43]['flat'])) {
    $model->order->customer->addresses[$index43]->flat = $jsonData['order']['customer']['addresses'][$index43]['flat'];

}
if (isset($jsonData['order']['customer']['addresses'][$index43]['floor'])) {
    $model->order->customer->addresses[$index43]->floor = $jsonData['order']['customer']['addresses'][$index43]['floor'];

}
if (isset($jsonData['order']['customer']['addresses'][$index43]['block'])) {
    $model->order->customer->addresses[$index43]->block = $jsonData['order']['customer']['addresses'][$index43]['block'];

}
if (isset($jsonData['order']['customer']['addresses'][$index43]['house'])) {
    $model->order->customer->addresses[$index43]->house = $jsonData['order']['customer']['addresses'][$index43]['house'];

}
if (isset($jsonData['order']['customer']['addresses'][$index43]['housing'])) {
    $model->order->customer->addresses[$index43]->housing = $jsonData['order']['customer']['addresses'][$index43]['housing'];

}
if (isset($jsonData['order']['customer']['addresses'][$index43]['metro'])) {
    $model->order->customer->addresses[$index43]->metro = $jsonData['order']['customer']['addresses'][$index43]['metro'];

}
if (isset($jsonData['order']['customer']['addresses'][$index43]['notes'])) {
    $model->order->customer->addresses[$index43]->notes = $jsonData['order']['customer']['addresses'][$index43]['notes'];

}
if (isset($jsonData['order']['customer']['addresses'][$index43]['text'])) {
    $model->order->customer->addresses[$index43]->text = $jsonData['order']['customer']['addresses'][$index43]['text'];

}
if (isset($jsonData['order']['customer']['addresses'][$index43]['externalId'])) {
    $model->order->customer->addresses[$index43]->externalId = $jsonData['order']['customer']['addresses'][$index43]['externalId'];

}


}

}
if (isset($jsonData['order']['customer']['vip'])) {
    $model->order->customer->vip = $jsonData['order']['customer']['vip'];

}
if (isset($jsonData['order']['customer']['bad'])) {
    $model->order->customer->bad = $jsonData['order']['customer']['bad'];

}
if (isset($jsonData['order']['customer']['site'])) {
    $model->order->customer->site = $jsonData['order']['customer']['site'];

}
if (isset($jsonData['order']['customer']['tags'])) {
    $model->order->customer->tags = [];
foreach (array_keys($jsonData['order']['customer']['tags']) as $index38) {
    
$model->order->customer->tags[$index38] = new RetailCrm\Api\Model\Entity\Customers\CustomerTag();
if (isset($jsonData['order']['customer']['tags'][$index38]['name'])) {
    $model->order->customer->tags[$index38]->name = $jsonData['order']['customer']['tags'][$index38]['name'];

}
if (isset($jsonData['order']['customer']['tags'][$index38]['color'])) {
    $model->order->customer->tags[$index38]->color = $jsonData['order']['customer']['tags'][$index38]['color'];

}
if (isset($jsonData['order']['customer']['tags'][$index38]['attached'])) {
    $model->order->customer->tags[$index38]->attached = $jsonData['order']['customer']['tags'][$index38]['attached'];

}


}

}
if (isset($jsonData['order']['customer']['avgMarginSumm'])) {
    $model->order->customer->avgMarginSumm = (float) $jsonData['order']['customer']['avgMarginSumm'];

}
if (isset($jsonData['order']['customer']['marginSumm'])) {
    $model->order->customer->marginSumm = (float) $jsonData['order']['customer']['marginSumm'];

}
if (isset($jsonData['order']['customer']['totalSumm'])) {
    $model->order->customer->totalSumm = (float) $jsonData['order']['customer']['totalSumm'];

}
if (isset($jsonData['order']['customer']['averageSumm'])) {
    $model->order->customer->averageSumm = (float) $jsonData['order']['customer']['averageSumm'];

}
if (isset($jsonData['order']['customer']['ordersCount'])) {
    $model->order->customer->ordersCount = $jsonData['order']['customer']['ordersCount'];

}
if (isset($jsonData['order']['customer']['costSumm'])) {
    $model->order->customer->costSumm = (float) $jsonData['order']['customer']['costSumm'];

}
if (isset($jsonData['order']['customer']['customFields'])) {
    $model->order->customer->customFields = [];
foreach (array_keys($jsonData['order']['customer']['customFields']) as $index46) {
    $model->order->customer->customFields[$index46] = $jsonData['order']['customer']['customFields'][$index46];

}

}
if (isset($jsonData['order']['customer']['personalDiscount'])) {
    $model->order->customer->personalDiscount = (float) $jsonData['order']['customer']['personalDiscount'];

}
if (isset($jsonData['order']['customer']['cumulativeDiscount'])) {
    $model->order->customer->cumulativeDiscount = (float) $jsonData['order']['customer']['cumulativeDiscount'];

}
if (isset($jsonData['order']['customer']['discountCardNumber'])) {
    $model->order->customer->discountCardNumber = $jsonData['order']['customer']['discountCardNumber'];

}
if (isset($jsonData['order']['customer']['firstClientId'])) {
    $model->order->customer->firstClientId = $jsonData['order']['customer']['firstClientId'];

}
if (isset($jsonData['order']['customer']['lastClientId'])) {
    $model->order->customer->lastClientId = $jsonData['order']['customer']['lastClientId'];

}
if (isset($jsonData['order']['customer']['mainCustomerContact'])) {
    
$model->order->customer->mainCustomerContact = new RetailCrm\Api\Model\Entity\CustomersCorporate\CustomerContact();
if (isset($jsonData['order']['customer']['mainCustomerContact']['id'])) {
    $model->order->customer->mainCustomerContact->id = $jsonData['order']['customer']['mainCustomerContact']['id'];

}
if (isset($jsonData['order']['customer']['mainCustomerContact']['isMain'])) {
    $model->order->customer->mainCustomerContact->isMain = $jsonData['order']['customer']['mainCustomerContact']['isMain'];

}
if (isset($jsonData['order']['customer']['mainCustomerContact']['customer'])) {
    
$model->order->customer->mainCustomerContact->customer = new RetailCrm\Api\Model\Entity\CustomersCorporate\SerializedRelationAbstractCustomer();
if (isset($jsonData['order']['customer']['mainCustomerContact']['customer']['id'])) {
    $model->order->customer->mainCustomerContact->customer->id = $jsonData['order']['customer']['mainCustomerContact']['customer']['id'];

}
if (isset($jsonData['order']['customer']['mainCustomerContact']['customer']['externalId'])) {
    $model->order->customer->mainCustomerContact->customer->externalId = $jsonData['order']['customer']['mainCustomerContact']['customer']['externalId'];

}
if (isset($jsonData['order']['customer']['mainCustomerContact']['customer']['browserId'])) {
    $model->order->customer->mainCustomerContact->customer->browserId = $jsonData['order']['customer']['mainCustomerContact']['customer']['browserId'];

}
if (isset($jsonData['order']['customer']['mainCustomerContact']['customer']['site'])) {
    $model->order->customer->mainCustomerContact->customer->site = $jsonData['order']['customer']['mainCustomerContact']['customer']['site'];

}
if (isset($jsonData['order']['customer']['mainCustomerContact']['customer']['companies'])) {
    $model->order->customer->mainCustomerContact->customer->companies = [];
foreach (array_keys($jsonData['order']['customer']['mainCustomerContact']['customer']['companies']) as $index78) {
    
$model->order->customer->mainCustomerContact->customer->companies[$index78] = new RetailCrm\Api\Model\Entity\CustomersCorporate\CustomerContactCompany();
if (isset($jsonData['order']['customer']['mainCustomerContact']['customer']['companies'][$index78]['id'])) {
    $model->order->customer->mainCustomerContact->customer->companies[$index78]->id = $jsonData['order']['customer']['mainCustomerContact']['customer']['companies'][$index78]['id'];

}
if (isset($jsonData['order']['customer']['mainCustomerContact']['customer']['companies'][$index78]['externalId'])) {
    $model->order->customer->mainCustomerContact->customer->companies[$index78]->externalId = $jsonData['order']['customer']['mainCustomerContact']['customer']['companies'][$index78]['externalId'];

}
if (isset($jsonData['order']['customer']['mainCustomerContact']['customer']['companies'][$index78]['company'])) {
    
$model->order->customer->mainCustomerContact->customer->companies[$index78]->company = new RetailCrm\Api\Model\Entity\CustomersCorporate\EntityWithExternalIdNameOutput();
if (isset($jsonData['order']['customer']['mainCustomerContact']['customer']['companies'][$index78]['company']['id'])) {
    $model->order->customer->mainCustomerContact->customer->companies[$index78]->company->id = $jsonData['order']['customer']['mainCustomerContact']['customer']['companies'][$index78]['company']['id'];

}
if (isset($jsonData['order']['customer']['mainCustomerContact']['customer']['companies'][$index78]['company']['externalId'])) {
    $model->order->customer->mainCustomerContact->customer->companies[$index78]->company->externalId = $jsonData['order']['customer']['mainCustomerContact']['customer']['companies'][$index78]['company']['externalId'];

}
if (isset($jsonData['order']['customer']['mainCustomerContact']['customer']['companies'][$index78]['company']['name'])) {
    $model->order->customer->mainCustomerContact->customer->companies[$index78]->company->name = $jsonData['order']['customer']['mainCustomerContact']['customer']['companies'][$index78]['company']['name'];

}


}


}

}


}
if (isset($jsonData['order']['customer']['mainCustomerContact']['companies'])) {
    $model->order->customer->mainCustomerContact->companies = [];
foreach (array_keys($jsonData['order']['customer']['mainCustomerContact']['companies']) as $index66) {
    
$model->order->customer->mainCustomerContact->companies[$index66] = new RetailCrm\Api\Model\Entity\CustomersCorporate\CustomerContactCompany();
if (isset($jsonData['order']['customer']['mainCustomerContact']['companies'][$index66]['id'])) {
    $model->order->customer->mainCustomerContact->companies[$index66]->id = $jsonData['order']['customer']['mainCustomerContact']['companies'][$index66]['id'];

}
if (isset($jsonData['order']['customer']['mainCustomerContact']['companies'][$index66]['externalId'])) {
    $model->order->customer->mainCustomerContact->companies[$index66]->externalId = $jsonData['order']['customer']['mainCustomerContact']['companies'][$index66]['externalId'];

}
if (isset($jsonData['order']['customer']['mainCustomerContact']['companies'][$index66]['company'])) {
    
$model->order->customer->mainCustomerContact->companies[$index66]->company = new RetailCrm\Api\Model\Entity\CustomersCorporate\EntityWithExternalIdNameOutput();
if (isset($jsonData['order']['customer']['mainCustomerContact']['companies'][$index66]['company']['id'])) {
    $model->order->customer->mainCustomerContact->companies[$index66]->company->id = $jsonData['order']['customer']['mainCustomerContact']['companies'][$index66]['company']['id'];

}
if (isset($jsonData['order']['customer']['mainCustomerContact']['companies'][$index66]['company']['externalId'])) {
    $model->order->customer->mainCustomerContact->companies[$index66]->company->externalId = $jsonData['order']['customer']['mainCustomerContact']['companies'][$index66]['company']['externalId'];

}
if (isset($jsonData['order']['customer']['mainCustomerContact']['companies'][$index66]['company']['name'])) {
    $model->order->customer->mainCustomerContact->companies[$index66]->company->name = $jsonData['order']['customer']['mainCustomerContact']['companies'][$index66]['company']['name'];

}


}


}

}


}
if (isset($jsonData['order']['customer']['mainCompany'])) {
    
$model->order->customer->mainCompany = new RetailCrm\Api\Model\Entity\CustomersCorporate\EntityWithExternalIdNameOutput();
if (isset($jsonData['order']['customer']['mainCompany']['id'])) {
    $model->order->customer->mainCompany->id = $jsonData['order']['customer']['mainCompany']['id'];

}
if (isset($jsonData['order']['customer']['mainCompany']['externalId'])) {
    $model->order->customer->mainCompany->externalId = $jsonData['order']['customer']['mainCompany']['externalId'];

}
if (isset($jsonData['order']['customer']['mainCompany']['name'])) {
    $model->order->customer->mainCompany->name = $jsonData['order']['customer']['mainCompany']['name'];

}


}


} else {
    
$model->order->customer = new RetailCrm\Api\Model\Entity\Customers\Customer();
if (isset($jsonData['order']['customer']['type'])) {
    $model->order->customer->type = $jsonData['order']['customer']['type'];

}
if (isset($jsonData['order']['customer']['id'])) {
    $model->order->customer->id = $jsonData['order']['customer']['id'];

}
if (isset($jsonData['order']['customer']['externalId'])) {
    $model->order->customer->externalId = $jsonData['order']['customer']['externalId'];

}
if (isset($jsonData['order']['customer']['isContact'])) {
    $model->order->customer->isContact = $jsonData['order']['customer']['isContact'];

}
if (isset($jsonData['order']['customer']['createdAt'])) {
    $model->order->customer->createdAt = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['order']['customer']['createdAt']);

}
if (isset($jsonData['order']['customer']['managerId'])) {
    $model->order->customer->managerId = $jsonData['order']['customer']['managerId'];

}
if (isset($jsonData['order']['customer']['vip'])) {
    $model->order->customer->vip = $jsonData['order']['customer']['vip'];

}
if (isset($jsonData['order']['customer']['bad'])) {
    $model->order->customer->bad = $jsonData['order']['customer']['bad'];

}
if (isset($jsonData['order']['customer']['browserId'])) {
    $model->order->customer->browserId = $jsonData['order']['customer']['browserId'];

}
if (isset($jsonData['order']['customer']['site'])) {
    $model->order->customer->site = $jsonData['order']['customer']['site'];

}
if (isset($jsonData['order']['customer']['contragent'])) {
    
$model->order->customer->contragent = new RetailCrm\Api\Model\Entity\Customers\CustomerContragent();
if (isset($jsonData['order']['customer']['contragent']['contragentType'])) {
    $model->order->customer->contragent->contragentType = $jsonData['order']['customer']['contragent']['contragentType'];

}
if (isset($jsonData['order']['customer']['contragent']['legalName'])) {
    $model->order->customer->contragent->legalName = $jsonData['order']['customer']['contragent']['legalName'];

}
if (isset($jsonData['order']['customer']['contragent']['legalAddress'])) {
    $model->order->customer->contragent->legalAddress = $jsonData['order']['customer']['contragent']['legalAddress'];

}
if (isset($jsonData['order']['customer']['contragent']['INN'])) {
    $model->order->customer->contragent->INN = $jsonData['order']['customer']['contragent']['INN'];

}
if (isset($jsonData['order']['customer']['contragent']['OKPO'])) {
    $model->order->customer->contragent->OKPO = $jsonData['order']['customer']['contragent']['OKPO'];

}
if (isset($jsonData['order']['customer']['contragent']['KPP'])) {
    $model->order->customer->contragent->KPP = $jsonData['order']['customer']['contragent']['KPP'];

}
if (isset($jsonData['order']['customer']['contragent']['OGRN'])) {
    $model->order->customer->contragent->OGRN = $jsonData['order']['customer']['contragent']['OGRN'];

}
if (isset($jsonData['order']['customer']['contragent']['OGRNIP'])) {
    $model->order->customer->contragent->OGRNIP = $jsonData['order']['customer']['contragent']['OGRNIP'];

}
if (isset($jsonData['order']['customer']['contragent']['certificateNumber'])) {
    $model->order->customer->contragent->certificateNumber = $jsonData['order']['customer']['contragent']['certificateNumber'];

}
if (isset($jsonData['order']['customer']['contragent']['certificateDate'])) {
    $model->order->customer->contragent->certificateDate = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['order']['customer']['contragent']['certificateDate']);

}
if (isset($jsonData['order']['customer']['contragent']['BIK'])) {
    $model->order->customer->contragent->BIK = $jsonData['order']['customer']['contragent']['BIK'];

}
if (isset($jsonData['order']['customer']['contragent']['bank'])) {
    $model->order->customer->contragent->bank = $jsonData['order']['customer']['contragent']['bank'];

}
if (isset($jsonData['order']['customer']['contragent']['bankAddress'])) {
    $model->order->customer->contragent->bankAddress = $jsonData['order']['customer']['contragent']['bankAddress'];

}
if (isset($jsonData['order']['customer']['contragent']['corrAccount'])) {
    $model->order->customer->contragent->corrAccount = $jsonData['order']['customer']['contragent']['corrAccount'];

}
if (isset($jsonData['order']['customer']['contragent']['bankAccount'])) {
    $model->order->customer->contragent->bankAccount = $jsonData['order']['customer']['contragent']['bankAccount'];

}


}
if (isset($jsonData['order']['customer']['tags'])) {
    $model->order->customer->tags = [];
foreach (array_keys($jsonData['order']['customer']['tags']) as $index38) {
    
$model->order->customer->tags[$index38] = new RetailCrm\Api\Model\Entity\Customers\CustomerTag();
if (isset($jsonData['order']['customer']['tags'][$index38]['name'])) {
    $model->order->customer->tags[$index38]->name = $jsonData['order']['customer']['tags'][$index38]['name'];

}
if (isset($jsonData['order']['customer']['tags'][$index38]['color'])) {
    $model->order->customer->tags[$index38]->color = $jsonData['order']['customer']['tags'][$index38]['color'];

}
if (isset($jsonData['order']['customer']['tags'][$index38]['attached'])) {
    $model->order->customer->tags[$index38]->attached = $jsonData['order']['customer']['tags'][$index38]['attached'];

}


}

}
if (isset($jsonData['order']['customer']['avgMarginSumm'])) {
    $model->order->customer->avgMarginSumm = (float) $jsonData['order']['customer']['avgMarginSumm'];

}
if (isset($jsonData['order']['customer']['marginSumm'])) {
    $model->order->customer->marginSumm = (float) $jsonData['order']['customer']['marginSumm'];

}
if (isset($jsonData['order']['customer']['totalSumm'])) {
    $model->order->customer->totalSumm = (float) $jsonData['order']['customer']['totalSumm'];

}
if (isset($jsonData['order']['customer']['averageSumm'])) {
    $model->order->customer->averageSumm = (float) $jsonData['order']['customer']['averageSumm'];

}
if (isset($jsonData['order']['customer']['ordersCount'])) {
    $model->order->customer->ordersCount = $jsonData['order']['customer']['ordersCount'];

}
if (isset($jsonData['order']['customer']['costSumm'])) {
    $model->order->customer->costSumm = (float) $jsonData['order']['customer']['costSumm'];

}
if (isset($jsonData['order']['customer']['customFields'])) {
    $model->order->customer->customFields = [];
foreach (array_keys($jsonData['order']['customer']['customFields']) as $index46) {
    $model->order->customer->customFields[$index46] = $jsonData['order']['customer']['customFields'][$index46];

}

}
if (isset($jsonData['order']['customer']['personalDiscount'])) {
    $model->order->customer->personalDiscount = (float) $jsonData['order']['customer']['personalDiscount'];

}
if (isset($jsonData['order']['customer']['cumulativeDiscount'])) {
    $model->order->customer->cumulativeDiscount = (float) $jsonData['order']['customer']['cumulativeDiscount'];

}
if (isset($jsonData['order']['customer']['discountCardNumber'])) {
    $model->order->customer->discountCardNumber = $jsonData['order']['customer']['discountCardNumber'];

}
if (isset($jsonData['order']['customer']['firstClientId'])) {
    $model->order->customer->firstClientId = $jsonData['order']['customer']['firstClientId'];

}
if (isset($jsonData['order']['customer']['lastClientId'])) {
    $model->order->customer->lastClientId = $jsonData['order']['customer']['lastClientId'];

}
if (isset($jsonData['order']['customer']['address'])) {
    
$model->order->customer->address = new RetailCrm\Api\Model\Entity\Customers\CustomerAddress();
if (isset($jsonData['order']['customer']['address']['id'])) {
    $model->order->customer->address->id = $jsonData['order']['customer']['address']['id'];

}
if (isset($jsonData['order']['customer']['address']['name'])) {
    $model->order->customer->address->name = $jsonData['order']['customer']['address']['name'];

}
if (isset($jsonData['order']['customer']['address']['isMain'])) {
    $model->order->customer->address->isMain = $jsonData['order']['customer']['address']['isMain'];

}
if (isset($jsonData['order']['customer']['address']['index'])) {
    $model->order->customer->address->index = $jsonData['order']['customer']['address']['index'];

}
if (isset($jsonData['order']['customer']['address']['countryIso'])) {
    $model->order->customer->address->countryIso = $jsonData['order']['customer']['address']['countryIso'];

}
if (isset($jsonData['order']['customer']['address']['region'])) {
    $model->order->customer->address->region = $jsonData['order']['customer']['address']['region'];

}
if (isset($jsonData['order']['customer']['address']['regionId'])) {
    $model->order->customer->address->regionId = $jsonData['order']['customer']['address']['regionId'];

}
if (isset($jsonData['order']['customer']['address']['city'])) {
    $model->order->customer->address->city = $jsonData['order']['customer']['address']['city'];

}
if (isset($jsonData['order']['customer']['address']['cityId'])) {
    $model->order->customer->address->cityId = $jsonData['order']['customer']['address']['cityId'];

}
if (isset($jsonData['order']['customer']['address']['cityType'])) {
    $model->order->customer->address->cityType = $jsonData['order']['customer']['address']['cityType'];

}
if (isset($jsonData['order']['customer']['address']['street'])) {
    $model->order->customer->address->street = $jsonData['order']['customer']['address']['street'];

}
if (isset($jsonData['order']['customer']['address']['streetId'])) {
    $model->order->customer->address->streetId = $jsonData['order']['customer']['address']['streetId'];

}
if (isset($jsonData['order']['customer']['address']['streetType'])) {
    $model->order->customer->address->streetType = $jsonData['order']['customer']['address']['streetType'];

}
if (isset($jsonData['order']['customer']['address']['building'])) {
    $model->order->customer->address->building = $jsonData['order']['customer']['address']['building'];

}
if (isset($jsonData['order']['customer']['address']['flat'])) {
    $model->order->customer->address->flat = $jsonData['order']['customer']['address']['flat'];

}
if (isset($jsonData['order']['customer']['address']['floor'])) {
    $model->order->customer->address->floor = $jsonData['order']['customer']['address']['floor'];

}
if (isset($jsonData['order']['customer']['address']['block'])) {
    $model->order->customer->address->block = $jsonData['order']['customer']['address']['block'];

}
if (isset($jsonData['order']['customer']['address']['house'])) {
    $model->order->customer->address->house = $jsonData['order']['customer']['address']['house'];

}
if (isset($jsonData['order']['customer']['address']['housing'])) {
    $model->order->customer->address->housing = $jsonData['order']['customer']['address']['housing'];

}
if (isset($jsonData['order']['customer']['address']['metro'])) {
    $model->order->customer->address->metro = $jsonData['order']['customer']['address']['metro'];

}
if (isset($jsonData['order']['customer']['address']['notes'])) {
    $model->order->customer->address->notes = $jsonData['order']['customer']['address']['notes'];

}
if (isset($jsonData['order']['customer']['address']['text'])) {
    $model->order->customer->address->text = $jsonData['order']['customer']['address']['text'];

}
if (isset($jsonData['order']['customer']['address']['externalId'])) {
    $model->order->customer->address->externalId = $jsonData['order']['customer']['address']['externalId'];

}


}
if (isset($jsonData['order']['customer']['segments'])) {
    $model->order->customer->segments = [];
foreach (array_keys($jsonData['order']['customer']['segments']) as $index42) {
    
$model->order->customer->segments[$index42] = new RetailCrm\Api\Model\Entity\Customers\Segment();
if (isset($jsonData['order']['customer']['segments'][$index42]['id'])) {
    $model->order->customer->segments[$index42]->id = $jsonData['order']['customer']['segments'][$index42]['id'];

}
if (isset($jsonData['order']['customer']['segments'][$index42]['code'])) {
    $model->order->customer->segments[$index42]->code = $jsonData['order']['customer']['segments'][$index42]['code'];

}
if (isset($jsonData['order']['customer']['segments'][$index42]['name'])) {
    $model->order->customer->segments[$index42]->name = $jsonData['order']['customer']['segments'][$index42]['name'];

}
if (isset($jsonData['order']['customer']['segments'][$index42]['createdAt'])) {
    $model->order->customer->segments[$index42]->createdAt = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['order']['customer']['segments'][$index42]['createdAt']);

}
if (isset($jsonData['order']['customer']['segments'][$index42]['isDynamic'])) {
    $model->order->customer->segments[$index42]->isDynamic = $jsonData['order']['customer']['segments'][$index42]['isDynamic'];

}
if (isset($jsonData['order']['customer']['segments'][$index42]['customersCount'])) {
    $model->order->customer->segments[$index42]->customersCount = $jsonData['order']['customer']['segments'][$index42]['customersCount'];

}
if (isset($jsonData['order']['customer']['segments'][$index42]['active'])) {
    $model->order->customer->segments[$index42]->active = $jsonData['order']['customer']['segments'][$index42]['active'];

}


}

}
if (isset($jsonData['order']['customer']['maturationTime'])) {
    $model->order->customer->maturationTime = $jsonData['order']['customer']['maturationTime'];

}
if (isset($jsonData['order']['customer']['firstName'])) {
    $model->order->customer->firstName = $jsonData['order']['customer']['firstName'];

}
if (isset($jsonData['order']['customer']['lastName'])) {
    $model->order->customer->lastName = $jsonData['order']['customer']['lastName'];

}
if (isset($jsonData['order']['customer']['patronymic'])) {
    $model->order->customer->patronymic = $jsonData['order']['customer']['patronymic'];

}
if (isset($jsonData['order']['customer']['sex'])) {
    $model->order->customer->sex = $jsonData['order']['customer']['sex'];

}
if (isset($jsonData['order']['customer']['presumableSex'])) {
    $model->order->customer->presumableSex = $jsonData['order']['customer']['presumableSex'];

}
if (isset($jsonData['order']['customer']['email'])) {
    $model->order->customer->email = $jsonData['order']['customer']['email'];

}
if (isset($jsonData['order']['customer']['emailMarketingUnsubscribedAt'])) {
    $model->order->customer->emailMarketingUnsubscribedAt = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['order']['customer']['emailMarketingUnsubscribedAt']);

}
if (isset($jsonData['order']['customer']['phones'])) {
    $model->order->customer->phones = [];
foreach (array_keys($jsonData['order']['customer']['phones']) as $index40) {
    
$model->order->customer->phones[$index40] = new RetailCrm\Api\Model\Entity\Customers\CustomerPhone();
if (isset($jsonData['order']['customer']['phones'][$index40]['number'])) {
    $model->order->customer->phones[$index40]->number = $jsonData['order']['customer']['phones'][$index40]['number'];

}


}

}
if (isset($jsonData['order']['customer']['birthday'])) {
    $model->order->customer->birthday = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['order']['customer']['birthday']);

}
if (isset($jsonData['order']['customer']['source'])) {
    
$model->order->customer->source = new RetailCrm\Api\Model\Entity\Source();
if (isset($jsonData['order']['customer']['source']['source'])) {
    $model->order->customer->source->source = $jsonData['order']['customer']['source']['source'];

}
if (isset($jsonData['order']['customer']['source']['medium'])) {
    $model->order->customer->source->medium = $jsonData['order']['customer']['source']['medium'];

}
if (isset($jsonData['order']['customer']['source']['campaign'])) {
    $model->order->customer->source->campaign = $jsonData['order']['customer']['source']['campaign'];

}
if (isset($jsonData['order']['customer']['source']['keyword'])) {
    $model->order->customer->source->keyword = $jsonData['order']['customer']['source']['keyword'];

}
if (isset($jsonData['order']['customer']['source']['content'])) {
    $model->order->customer->source->content = $jsonData['order']['customer']['source']['content'];

}


}
if (isset($jsonData['order']['customer']['photoUrl'])) {
    $model->order->customer->photoUrl = $jsonData['order']['customer']['photoUrl'];

}
if (isset($jsonData['order']['customer']['mgCustomerId'])) {
    $model->order->customer->mgCustomerId = $jsonData['order']['customer']['mgCustomerId'];

}
if (isset($jsonData['order']['customer']['subscribed'])) {
    $model->order->customer->subscribed = $jsonData['order']['customer']['subscribed'];

}


}

}
if (isset($jsonData['order']['contact'])) {
    
$model->order->contact = new RetailCrm\Api\Model\Entity\Customers\Customer();
if (isset($jsonData['order']['contact']['type'])) {
    $model->order->contact->type = $jsonData['order']['contact']['type'];

}
if (isset($jsonData['order']['contact']['id'])) {
    $model->order->contact->id = $jsonData['order']['contact']['id'];

}
if (isset($jsonData['order']['contact']['externalId'])) {
    $model->order->contact->externalId = $jsonData['order']['contact']['externalId'];

}
if (isset($jsonData['order']['contact']['isContact'])) {
    $model->order->contact->isContact = $jsonData['order']['contact']['isContact'];

}
if (isset($jsonData['order']['contact']['createdAt'])) {
    $model->order->contact->createdAt = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['order']['contact']['createdAt']);

}
if (isset($jsonData['order']['contact']['managerId'])) {
    $model->order->contact->managerId = $jsonData['order']['contact']['managerId'];

}
if (isset($jsonData['order']['contact']['vip'])) {
    $model->order->contact->vip = $jsonData['order']['contact']['vip'];

}
if (isset($jsonData['order']['contact']['bad'])) {
    $model->order->contact->bad = $jsonData['order']['contact']['bad'];

}
if (isset($jsonData['order']['contact']['browserId'])) {
    $model->order->contact->browserId = $jsonData['order']['contact']['browserId'];

}
if (isset($jsonData['order']['contact']['site'])) {
    $model->order->contact->site = $jsonData['order']['contact']['site'];

}
if (isset($jsonData['order']['contact']['contragent'])) {
    
$model->order->contact->contragent = new RetailCrm\Api\Model\Entity\Customers\CustomerContragent();
if (isset($jsonData['order']['contact']['contragent']['contragentType'])) {
    $model->order->contact->contragent->contragentType = $jsonData['order']['contact']['contragent']['contragentType'];

}
if (isset($jsonData['order']['contact']['contragent']['legalName'])) {
    $model->order->contact->contragent->legalName = $jsonData['order']['contact']['contragent']['legalName'];

}
if (isset($jsonData['order']['contact']['contragent']['legalAddress'])) {
    $model->order->contact->contragent->legalAddress = $jsonData['order']['contact']['contragent']['legalAddress'];

}
if (isset($jsonData['order']['contact']['contragent']['INN'])) {
    $model->order->contact->contragent->INN = $jsonData['order']['contact']['contragent']['INN'];

}
if (isset($jsonData['order']['contact']['contragent']['OKPO'])) {
    $model->order->contact->contragent->OKPO = $jsonData['order']['contact']['contragent']['OKPO'];

}
if (isset($jsonData['order']['contact']['contragent']['KPP'])) {
    $model->order->contact->contragent->KPP = $jsonData['order']['contact']['contragent']['KPP'];

}
if (isset($jsonData['order']['contact']['contragent']['OGRN'])) {
    $model->order->contact->contragent->OGRN = $jsonData['order']['contact']['contragent']['OGRN'];

}
if (isset($jsonData['order']['contact']['contragent']['OGRNIP'])) {
    $model->order->contact->contragent->OGRNIP = $jsonData['order']['contact']['contragent']['OGRNIP'];

}
if (isset($jsonData['order']['contact']['contragent']['certificateNumber'])) {
    $model->order->contact->contragent->certificateNumber = $jsonData['order']['contact']['contragent']['certificateNumber'];

}
if (isset($jsonData['order']['contact']['contragent']['certificateDate'])) {
    $model->order->contact->contragent->certificateDate = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['order']['contact']['contragent']['certificateDate']);

}
if (isset($jsonData['order']['contact']['contragent']['BIK'])) {
    $model->order->contact->contragent->BIK = $jsonData['order']['contact']['contragent']['BIK'];

}
if (isset($jsonData['order']['contact']['contragent']['bank'])) {
    $model->order->contact->contragent->bank = $jsonData['order']['contact']['contragent']['bank'];

}
if (isset($jsonData['order']['contact']['contragent']['bankAddress'])) {
    $model->order->contact->contragent->bankAddress = $jsonData['order']['contact']['contragent']['bankAddress'];

}
if (isset($jsonData['order']['contact']['contragent']['corrAccount'])) {
    $model->order->contact->contragent->corrAccount = $jsonData['order']['contact']['contragent']['corrAccount'];

}
if (isset($jsonData['order']['contact']['contragent']['bankAccount'])) {
    $model->order->contact->contragent->bankAccount = $jsonData['order']['contact']['contragent']['bankAccount'];

}


}
if (isset($jsonData['order']['contact']['tags'])) {
    $model->order->contact->tags = [];
foreach (array_keys($jsonData['order']['contact']['tags']) as $index37) {
    
$model->order->contact->tags[$index37] = new RetailCrm\Api\Model\Entity\Customers\CustomerTag();
if (isset($jsonData['order']['contact']['tags'][$index37]['name'])) {
    $model->order->contact->tags[$index37]->name = $jsonData['order']['contact']['tags'][$index37]['name'];

}
if (isset($jsonData['order']['contact']['tags'][$index37]['color'])) {
    $model->order->contact->tags[$index37]->color = $jsonData['order']['contact']['tags'][$index37]['color'];

}
if (isset($jsonData['order']['contact']['tags'][$index37]['attached'])) {
    $model->order->contact->tags[$index37]->attached = $jsonData['order']['contact']['tags'][$index37]['attached'];

}


}

}
if (isset($jsonData['order']['contact']['avgMarginSumm'])) {
    $model->order->contact->avgMarginSumm = (float) $jsonData['order']['contact']['avgMarginSumm'];

}
if (isset($jsonData['order']['contact']['marginSumm'])) {
    $model->order->contact->marginSumm = (float) $jsonData['order']['contact']['marginSumm'];

}
if (isset($jsonData['order']['contact']['totalSumm'])) {
    $model->order->contact->totalSumm = (float) $jsonData['order']['contact']['totalSumm'];

}
if (isset($jsonData['order']['contact']['averageSumm'])) {
    $model->order->contact->averageSumm = (float) $jsonData['order']['contact']['averageSumm'];

}
if (isset($jsonData['order']['contact']['ordersCount'])) {
    $model->order->contact->ordersCount = $jsonData['order']['contact']['ordersCount'];

}
if (isset($jsonData['order']['contact']['costSumm'])) {
    $model->order->contact->costSumm = (float) $jsonData['order']['contact']['costSumm'];

}
if (isset($jsonData['order']['contact']['customFields'])) {
    $model->order->contact->customFields = [];
foreach (array_keys($jsonData['order']['contact']['customFields']) as $index45) {
    $model->order->contact->customFields[$index45] = $jsonData['order']['contact']['customFields'][$index45];

}

}
if (isset($jsonData['order']['contact']['personalDiscount'])) {
    $model->order->contact->personalDiscount = (float) $jsonData['order']['contact']['personalDiscount'];

}
if (isset($jsonData['order']['contact']['cumulativeDiscount'])) {
    $model->order->contact->cumulativeDiscount = (float) $jsonData['order']['contact']['cumulativeDiscount'];

}
if (isset($jsonData['order']['contact']['discountCardNumber'])) {
    $model->order->contact->discountCardNumber = $jsonData['order']['contact']['discountCardNumber'];

}
if (isset($jsonData['order']['contact']['firstClientId'])) {
    $model->order->contact->firstClientId = $jsonData['order']['contact']['firstClientId'];

}
if (isset($jsonData['order']['contact']['lastClientId'])) {
    $model->order->contact->lastClientId = $jsonData['order']['contact']['lastClientId'];

}
if (isset($jsonData['order']['contact']['address'])) {
    
$model->order->contact->address = new RetailCrm\Api\Model\Entity\Customers\CustomerAddress();
if (isset($jsonData['order']['contact']['address']['id'])) {
    $model->order->contact->address->id = $jsonData['order']['contact']['address']['id'];

}
if (isset($jsonData['order']['contact']['address']['name'])) {
    $model->order->contact->address->name = $jsonData['order']['contact']['address']['name'];

}
if (isset($jsonData['order']['contact']['address']['isMain'])) {
    $model->order->contact->address->isMain = $jsonData['order']['contact']['address']['isMain'];

}
if (isset($jsonData['order']['contact']['address']['index'])) {
    $model->order->contact->address->index = $jsonData['order']['contact']['address']['index'];

}
if (isset($jsonData['order']['contact']['address']['countryIso'])) {
    $model->order->contact->address->countryIso = $jsonData['order']['contact']['address']['countryIso'];

}
if (isset($jsonData['order']['contact']['address']['region'])) {
    $model->order->contact->address->region = $jsonData['order']['contact']['address']['region'];

}
if (isset($jsonData['order']['contact']['address']['regionId'])) {
    $model->order->contact->address->regionId = $jsonData['order']['contact']['address']['regionId'];

}
if (isset($jsonData['order']['contact']['address']['city'])) {
    $model->order->contact->address->city = $jsonData['order']['contact']['address']['city'];

}
if (isset($jsonData['order']['contact']['address']['cityId'])) {
    $model->order->contact->address->cityId = $jsonData['order']['contact']['address']['cityId'];

}
if (isset($jsonData['order']['contact']['address']['cityType'])) {
    $model->order->contact->address->cityType = $jsonData['order']['contact']['address']['cityType'];

}
if (isset($jsonData['order']['contact']['address']['street'])) {
    $model->order->contact->address->street = $jsonData['order']['contact']['address']['street'];

}
if (isset($jsonData['order']['contact']['address']['streetId'])) {
    $model->order->contact->address->streetId = $jsonData['order']['contact']['address']['streetId'];

}
if (isset($jsonData['order']['contact']['address']['streetType'])) {
    $model->order->contact->address->streetType = $jsonData['order']['contact']['address']['streetType'];

}
if (isset($jsonData['order']['contact']['address']['building'])) {
    $model->order->contact->address->building = $jsonData['order']['contact']['address']['building'];

}
if (isset($jsonData['order']['contact']['address']['flat'])) {
    $model->order->contact->address->flat = $jsonData['order']['contact']['address']['flat'];

}
if (isset($jsonData['order']['contact']['address']['floor'])) {
    $model->order->contact->address->floor = $jsonData['order']['contact']['address']['floor'];

}
if (isset($jsonData['order']['contact']['address']['block'])) {
    $model->order->contact->address->block = $jsonData['order']['contact']['address']['block'];

}
if (isset($jsonData['order']['contact']['address']['house'])) {
    $model->order->contact->address->house = $jsonData['order']['contact']['address']['house'];

}
if (isset($jsonData['order']['contact']['address']['housing'])) {
    $model->order->contact->address->housing = $jsonData['order']['contact']['address']['housing'];

}
if (isset($jsonData['order']['contact']['address']['metro'])) {
    $model->order->contact->address->metro = $jsonData['order']['contact']['address']['metro'];

}
if (isset($jsonData['order']['contact']['address']['notes'])) {
    $model->order->contact->address->notes = $jsonData['order']['contact']['address']['notes'];

}
if (isset($jsonData['order']['contact']['address']['text'])) {
    $model->order->contact->address->text = $jsonData['order']['contact']['address']['text'];

}
if (isset($jsonData['order']['contact']['address']['externalId'])) {
    $model->order->contact->address->externalId = $jsonData['order']['contact']['address']['externalId'];

}


}
if (isset($jsonData['order']['contact']['segments'])) {
    $model->order->contact->segments = [];
foreach (array_keys($jsonData['order']['contact']['segments']) as $index41) {
    
$model->order->contact->segments[$index41] = new RetailCrm\Api\Model\Entity\Customers\Segment();
if (isset($jsonData['order']['contact']['segments'][$index41]['id'])) {
    $model->order->contact->segments[$index41]->id = $jsonData['order']['contact']['segments'][$index41]['id'];

}
if (isset($jsonData['order']['contact']['segments'][$index41]['code'])) {
    $model->order->contact->segments[$index41]->code = $jsonData['order']['contact']['segments'][$index41]['code'];

}
if (isset($jsonData['order']['contact']['segments'][$index41]['name'])) {
    $model->order->contact->segments[$index41]->name = $jsonData['order']['contact']['segments'][$index41]['name'];

}
if (isset($jsonData['order']['contact']['segments'][$index41]['createdAt'])) {
    $model->order->contact->segments[$index41]->createdAt = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['order']['contact']['segments'][$index41]['createdAt']);

}
if (isset($jsonData['order']['contact']['segments'][$index41]['isDynamic'])) {
    $model->order->contact->segments[$index41]->isDynamic = $jsonData['order']['contact']['segments'][$index41]['isDynamic'];

}
if (isset($jsonData['order']['contact']['segments'][$index41]['customersCount'])) {
    $model->order->contact->segments[$index41]->customersCount = $jsonData['order']['contact']['segments'][$index41]['customersCount'];

}
if (isset($jsonData['order']['contact']['segments'][$index41]['active'])) {
    $model->order->contact->segments[$index41]->active = $jsonData['order']['contact']['segments'][$index41]['active'];

}


}

}
if (isset($jsonData['order']['contact']['maturationTime'])) {
    $model->order->contact->maturationTime = $jsonData['order']['contact']['maturationTime'];

}
if (isset($jsonData['order']['contact']['firstName'])) {
    $model->order->contact->firstName = $jsonData['order']['contact']['firstName'];

}
if (isset($jsonData['order']['contact']['lastName'])) {
    $model->order->contact->lastName = $jsonData['order']['contact']['lastName'];

}
if (isset($jsonData['order']['contact']['patronymic'])) {
    $model->order->contact->patronymic = $jsonData['order']['contact']['patronymic'];

}
if (isset($jsonData['order']['contact']['sex'])) {
    $model->order->contact->sex = $jsonData['order']['contact']['sex'];

}
if (isset($jsonData['order']['contact']['presumableSex'])) {
    $model->order->contact->presumableSex = $jsonData['order']['contact']['presumableSex'];

}
if (isset($jsonData['order']['contact']['email'])) {
    $model->order->contact->email = $jsonData['order']['contact']['email'];

}
if (isset($jsonData['order']['contact']['emailMarketingUnsubscribedAt'])) {
    $model->order->contact->emailMarketingUnsubscribedAt = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['order']['contact']['emailMarketingUnsubscribedAt']);

}
if (isset($jsonData['order']['contact']['phones'])) {
    $model->order->contact->phones = [];
foreach (array_keys($jsonData['order']['contact']['phones']) as $index39) {
    
$model->order->contact->phones[$index39] = new RetailCrm\Api\Model\Entity\Customers\CustomerPhone();
if (isset($jsonData['order']['contact']['phones'][$index39]['number'])) {
    $model->order->contact->phones[$index39]->number = $jsonData['order']['contact']['phones'][$index39]['number'];

}


}

}
if (isset($jsonData['order']['contact']['birthday'])) {
    $model->order->contact->birthday = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['order']['contact']['birthday']);

}
if (isset($jsonData['order']['contact']['source'])) {
    
$model->order->contact->source = new RetailCrm\Api\Model\Entity\Source();
if (isset($jsonData['order']['contact']['source']['source'])) {
    $model->order->contact->source->source = $jsonData['order']['contact']['source']['source'];

}
if (isset($jsonData['order']['contact']['source']['medium'])) {
    $model->order->contact->source->medium = $jsonData['order']['contact']['source']['medium'];

}
if (isset($jsonData['order']['contact']['source']['campaign'])) {
    $model->order->contact->source->campaign = $jsonData['order']['contact']['source']['campaign'];

}
if (isset($jsonData['order']['contact']['source']['keyword'])) {
    $model->order->contact->source->keyword = $jsonData['order']['contact']['source']['keyword'];

}
if (isset($jsonData['order']['contact']['source']['content'])) {
    $model->order->contact->source->content = $jsonData['order']['contact']['source']['content'];

}


}
if (isset($jsonData['order']['contact']['photoUrl'])) {
    $model->order->contact->photoUrl = $jsonData['order']['contact']['photoUrl'];

}
if (isset($jsonData['order']['contact']['mgCustomerId'])) {
    $model->order->contact->mgCustomerId = $jsonData['order']['contact']['mgCustomerId'];

}
if (isset($jsonData['order']['contact']['subscribed'])) {
    $model->order->contact->subscribed = $jsonData['order']['contact']['subscribed'];

}


}
if (isset($jsonData['order']['company'])) {
    
$model->order->company = new RetailCrm\Api\Model\Entity\CustomersCorporate\Company();
if (isset($jsonData['order']['company']['id'])) {
    $model->order->company->id = $jsonData['order']['company']['id'];

}
if (isset($jsonData['order']['company']['isMain'])) {
    $model->order->company->isMain = $jsonData['order']['company']['isMain'];

}
if (isset($jsonData['order']['company']['externalId'])) {
    $model->order->company->externalId = $jsonData['order']['company']['externalId'];

}
if (isset($jsonData['order']['company']['active'])) {
    $model->order->company->active = $jsonData['order']['company']['active'];

}
if (isset($jsonData['order']['company']['name'])) {
    $model->order->company->name = $jsonData['order']['company']['name'];

}
if (isset($jsonData['order']['company']['brand'])) {
    $model->order->company->brand = $jsonData['order']['company']['brand'];

}
if (isset($jsonData['order']['company']['site'])) {
    $model->order->company->site = $jsonData['order']['company']['site'];

}
if (isset($jsonData['order']['company']['createdAt'])) {
    $model->order->company->createdAt = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['order']['company']['createdAt']);

}
if (isset($jsonData['order']['company']['customer'])) {
    
$model->order->company->customer = new RetailCrm\Api\Model\Entity\CustomersCorporate\SerializedEntityCustomer();
if (isset($jsonData['order']['company']['customer']['site'])) {
    $model->order->company->customer->site = $jsonData['order']['company']['customer']['site'];

}
if (isset($jsonData['order']['company']['customer']['id'])) {
    $model->order->company->customer->id = $jsonData['order']['company']['customer']['id'];

}
if (isset($jsonData['order']['company']['customer']['externalId'])) {
    $model->order->company->customer->externalId = $jsonData['order']['company']['customer']['externalId'];

}
if (isset($jsonData['order']['company']['customer']['type'])) {
    $model->order->company->customer->type = $jsonData['order']['company']['customer']['type'];

}


}
if (isset($jsonData['order']['company']['contragent'])) {
    
$model->order->company->contragent = new RetailCrm\Api\Model\Entity\Customers\CustomerContragent();
if (isset($jsonData['order']['company']['contragent']['contragentType'])) {
    $model->order->company->contragent->contragentType = $jsonData['order']['company']['contragent']['contragentType'];

}
if (isset($jsonData['order']['company']['contragent']['legalName'])) {
    $model->order->company->contragent->legalName = $jsonData['order']['company']['contragent']['legalName'];

}
if (isset($jsonData['order']['company']['contragent']['legalAddress'])) {
    $model->order->company->contragent->legalAddress = $jsonData['order']['company']['contragent']['legalAddress'];

}
if (isset($jsonData['order']['company']['contragent']['INN'])) {
    $model->order->company->contragent->INN = $jsonData['order']['company']['contragent']['INN'];

}
if (isset($jsonData['order']['company']['contragent']['OKPO'])) {
    $model->order->company->contragent->OKPO = $jsonData['order']['company']['contragent']['OKPO'];

}
if (isset($jsonData['order']['company']['contragent']['KPP'])) {
    $model->order->company->contragent->KPP = $jsonData['order']['company']['contragent']['KPP'];

}
if (isset($jsonData['order']['company']['contragent']['OGRN'])) {
    $model->order->company->contragent->OGRN = $jsonData['order']['company']['contragent']['OGRN'];

}
if (isset($jsonData['order']['company']['contragent']['OGRNIP'])) {
    $model->order->company->contragent->OGRNIP = $jsonData['order']['company']['contragent']['OGRNIP'];

}
if (isset($jsonData['order']['company']['contragent']['certificateNumber'])) {
    $model->order->company->contragent->certificateNumber = $jsonData['order']['company']['contragent']['certificateNumber'];

}
if (isset($jsonData['order']['company']['contragent']['certificateDate'])) {
    $model->order->company->contragent->certificateDate = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['order']['company']['contragent']['certificateDate']);

}
if (isset($jsonData['order']['company']['contragent']['BIK'])) {
    $model->order->company->contragent->BIK = $jsonData['order']['company']['contragent']['BIK'];

}
if (isset($jsonData['order']['company']['contragent']['bank'])) {
    $model->order->company->contragent->bank = $jsonData['order']['company']['contragent']['bank'];

}
if (isset($jsonData['order']['company']['contragent']['bankAddress'])) {
    $model->order->company->contragent->bankAddress = $jsonData['order']['company']['contragent']['bankAddress'];

}
if (isset($jsonData['order']['company']['contragent']['corrAccount'])) {
    $model->order->company->contragent->corrAccount = $jsonData['order']['company']['contragent']['corrAccount'];

}
if (isset($jsonData['order']['company']['contragent']['bankAccount'])) {
    $model->order->company->contragent->bankAccount = $jsonData['order']['company']['contragent']['bankAccount'];

}


}
if (isset($jsonData['order']['company']['address'])) {
    
$model->order->company->address = new RetailCrm\Api\Model\Entity\Customers\CustomerAddress();
if (isset($jsonData['order']['company']['address']['id'])) {
    $model->order->company->address->id = $jsonData['order']['company']['address']['id'];

}
if (isset($jsonData['order']['company']['address']['name'])) {
    $model->order->company->address->name = $jsonData['order']['company']['address']['name'];

}
if (isset($jsonData['order']['company']['address']['isMain'])) {
    $model->order->company->address->isMain = $jsonData['order']['company']['address']['isMain'];

}
if (isset($jsonData['order']['company']['address']['index'])) {
    $model->order->company->address->index = $jsonData['order']['company']['address']['index'];

}
if (isset($jsonData['order']['company']['address']['countryIso'])) {
    $model->order->company->address->countryIso = $jsonData['order']['company']['address']['countryIso'];

}
if (isset($jsonData['order']['company']['address']['region'])) {
    $model->order->company->address->region = $jsonData['order']['company']['address']['region'];

}
if (isset($jsonData['order']['company']['address']['regionId'])) {
    $model->order->company->address->regionId = $jsonData['order']['company']['address']['regionId'];

}
if (isset($jsonData['order']['company']['address']['city'])) {
    $model->order->company->address->city = $jsonData['order']['company']['address']['city'];

}
if (isset($jsonData['order']['company']['address']['cityId'])) {
    $model->order->company->address->cityId = $jsonData['order']['company']['address']['cityId'];

}
if (isset($jsonData['order']['company']['address']['cityType'])) {
    $model->order->company->address->cityType = $jsonData['order']['company']['address']['cityType'];

}
if (isset($jsonData['order']['company']['address']['street'])) {
    $model->order->company->address->street = $jsonData['order']['company']['address']['street'];

}
if (isset($jsonData['order']['company']['address']['streetId'])) {
    $model->order->company->address->streetId = $jsonData['order']['company']['address']['streetId'];

}
if (isset($jsonData['order']['company']['address']['streetType'])) {
    $model->order->company->address->streetType = $jsonData['order']['company']['address']['streetType'];

}
if (isset($jsonData['order']['company']['address']['building'])) {
    $model->order->company->address->building = $jsonData['order']['company']['address']['building'];

}
if (isset($jsonData['order']['company']['address']['flat'])) {
    $model->order->company->address->flat = $jsonData['order']['company']['address']['flat'];

}
if (isset($jsonData['order']['company']['address']['floor'])) {
    $model->order->company->address->floor = $jsonData['order']['company']['address']['floor'];

}
if (isset($jsonData['order']['company']['address']['block'])) {
    $model->order->company->address->block = $jsonData['order']['company']['address']['block'];

}
if (isset($jsonData['order']['company']['address']['house'])) {
    $model->order->company->address->house = $jsonData['order']['company']['address']['house'];

}
if (isset($jsonData['order']['company']['address']['housing'])) {
    $model->order->company->address->housing = $jsonData['order']['company']['address']['housing'];

}
if (isset($jsonData['order']['company']['address']['metro'])) {
    $model->order->company->address->metro = $jsonData['order']['company']['address']['metro'];

}
if (isset($jsonData['order']['company']['address']['notes'])) {
    $model->order->company->address->notes = $jsonData['order']['company']['address']['notes'];

}
if (isset($jsonData['order']['company']['address']['text'])) {
    $model->order->company->address->text = $jsonData['order']['company']['address']['text'];

}
if (isset($jsonData['order']['company']['address']['externalId'])) {
    $model->order->company->address->externalId = $jsonData['order']['company']['address']['externalId'];

}


}
if (isset($jsonData['order']['company']['customFields'])) {
    $model->order->company->customFields = [];
foreach (array_keys($jsonData['order']['company']['customFields']) as $index45) {
    $model->order->company->customFields[$index45] = $jsonData['order']['company']['customFields'][$index45];

}

}
if (isset($jsonData['order']['company']['marginSumm'])) {
    $model->order->company->marginSumm = (float) $jsonData['order']['company']['marginSumm'];

}
if (isset($jsonData['order']['company']['totalSumm'])) {
    $model->order->company->totalSumm = (float) $jsonData['order']['company']['totalSumm'];

}
if (isset($jsonData['order']['company']['averageSumm'])) {
    $model->order->company->averageSumm = (float) $jsonData['order']['company']['averageSumm'];

}
if (isset($jsonData['order']['company']['ordersCount'])) {
    $model->order->company->ordersCount = $jsonData['order']['company']['ordersCount'];

}
if (isset($jsonData['order']['company']['costSumm'])) {
    $model->order->company->costSumm = (float) $jsonData['order']['company']['costSumm'];

}


}
if (isset($jsonData['order']['contragent'])) {
    
$model->order->contragent = new RetailCrm\Api\Model\Entity\Order\OrderContragent();
if (isset($jsonData['order']['contragent']['contragentType'])) {
    $model->order->contragent->contragentType = $jsonData['order']['contragent']['contragentType'];

}
if (isset($jsonData['order']['contragent']['legalName'])) {
    $model->order->contragent->legalName = $jsonData['order']['contragent']['legalName'];

}
if (isset($jsonData['order']['contragent']['legalAddress'])) {
    $model->order->contragent->legalAddress = $jsonData['order']['contragent']['legalAddress'];

}
if (isset($jsonData['order']['contragent']['INN'])) {
    $model->order->contragent->INN = $jsonData['order']['contragent']['INN'];

}
if (isset($jsonData['order']['contragent']['OKPO'])) {
    $model->order->contragent->OKPO = $jsonData['order']['contragent']['OKPO'];

}
if (isset($jsonData['order']['contragent']['KPP'])) {
    $model->order->contragent->KPP = $jsonData['order']['contragent']['KPP'];

}
if (isset($jsonData['order']['contragent']['OGRN'])) {
    $model->order->contragent->OGRN = $jsonData['order']['contragent']['OGRN'];

}
if (isset($jsonData['order']['contragent']['OGRNIP'])) {
    $model->order->contragent->OGRNIP = $jsonData['order']['contragent']['OGRNIP'];

}
if (isset($jsonData['order']['contragent']['certificateNumber'])) {
    $model->order->contragent->certificateNumber = $jsonData['order']['contragent']['certificateNumber'];

}
if (isset($jsonData['order']['contragent']['certificateDate'])) {
    $model->order->contragent->certificateDate = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['order']['contragent']['certificateDate']);

}
if (isset($jsonData['order']['contragent']['BIK'])) {
    $model->order->contragent->BIK = $jsonData['order']['contragent']['BIK'];

}
if (isset($jsonData['order']['contragent']['bank'])) {
    $model->order->contragent->bank = $jsonData['order']['contragent']['bank'];

}
if (isset($jsonData['order']['contragent']['bankAddress'])) {
    $model->order->contragent->bankAddress = $jsonData['order']['contragent']['bankAddress'];

}
if (isset($jsonData['order']['contragent']['corrAccount'])) {
    $model->order->contragent->corrAccount = $jsonData['order']['contragent']['corrAccount'];

}
if (isset($jsonData['order']['contragent']['bankAccount'])) {
    $model->order->contragent->bankAccount = $jsonData['order']['contragent']['bankAccount'];

}


}
if (isset($jsonData['order']['delivery'])) {
    
$model->order->delivery = new RetailCrm\Api\Model\Entity\Order\Delivery\SerializedOrderDelivery();
if (isset($jsonData['order']['delivery']['code'])) {
    $model->order->delivery->code = $jsonData['order']['delivery']['code'];

}
if (isset($jsonData['order']['delivery']['integrationCode'])) {
    $model->order->delivery->integrationCode = $jsonData['order']['delivery']['integrationCode'];

}
if (isset($jsonData['order']['delivery']['data'])) {
    
$model->order->delivery->data = new RetailCrm\Api\Model\Entity\Order\Delivery\DeliveryData();
if (isset($jsonData['order']['delivery']['data']['externalId'])) {
    $model->order->delivery->data->externalId = $jsonData['order']['delivery']['data']['externalId'];

}
if (isset($jsonData['order']['delivery']['data']['trackNumber'])) {
    $model->order->delivery->data->trackNumber = $jsonData['order']['delivery']['data']['trackNumber'];

}
if (isset($jsonData['order']['delivery']['data']['status'])) {
    $model->order->delivery->data->status = $jsonData['order']['delivery']['data']['status'];

}
if (isset($jsonData['order']['delivery']['data']['locked'])) {
    $model->order->delivery->data->locked = $jsonData['order']['delivery']['data']['locked'];

}
if (isset($jsonData['order']['delivery']['data']['pickuppointAddress'])) {
    $model->order->delivery->data->pickuppointAddress = $jsonData['order']['delivery']['data']['pickuppointAddress'];

}
if (isset($jsonData['order']['delivery']['data']['days'])) {
    $model->order->delivery->data->days = $jsonData['order']['delivery']['data']['days'];

}
if (isset($jsonData['order']['delivery']['data']['statusText'])) {
    $model->order->delivery->data->statusText = $jsonData['order']['delivery']['data']['statusText'];

}
if (isset($jsonData['order']['delivery']['data']['statusDate'])) {
    $model->order->delivery->data->statusDate = \DateTime::createFromFormat('Y-m-d', $jsonData['order']['delivery']['data']['statusDate']);

}
if (isset($jsonData['order']['delivery']['data']['tariff'])) {
    $model->order->delivery->data->tariff = $jsonData['order']['delivery']['data']['tariff'];

}
if (isset($jsonData['order']['delivery']['data']['tariffName'])) {
    $model->order->delivery->data->tariffName = $jsonData['order']['delivery']['data']['tariffName'];

}
if (isset($jsonData['order']['delivery']['data']['pickuppointId'])) {
    $model->order->delivery->data->pickuppointId = $jsonData['order']['delivery']['data']['pickuppointId'];

}
if (isset($jsonData['order']['delivery']['data']['pickuppointSchedule'])) {
    $model->order->delivery->data->pickuppointSchedule = $jsonData['order']['delivery']['data']['pickuppointSchedule'];

}
if (isset($jsonData['order']['delivery']['data']['pickuppointPhone'])) {
    $model->order->delivery->data->pickuppointPhone = $jsonData['order']['delivery']['data']['pickuppointPhone'];

}
if (isset($jsonData['order']['delivery']['data']['payerType'])) {
    $model->order->delivery->data->payerType = $jsonData['order']['delivery']['data']['payerType'];

}
if (isset($jsonData['order']['delivery']['data']['statusComment'])) {
    $model->order->delivery->data->statusComment = $jsonData['order']['delivery']['data']['statusComment'];

}
if (isset($jsonData['order']['delivery']['data']['cost'])) {
    $model->order->delivery->data->cost = (float) $jsonData['order']['delivery']['data']['cost'];

}
if (isset($jsonData['order']['delivery']['data']['minTerm'])) {
    $model->order->delivery->data->minTerm = $jsonData['order']['delivery']['data']['minTerm'];

}
if (isset($jsonData['order']['delivery']['data']['maxTerm'])) {
    $model->order->delivery->data->maxTerm = $jsonData['order']['delivery']['data']['maxTerm'];

}
if (isset($jsonData['order']['delivery']['data']['shipmentpointId'])) {
    $model->order->delivery->data->shipmentpointId = $jsonData['order']['delivery']['data']['shipmentpointId'];

}
if (isset($jsonData['order']['delivery']['data']['shipmentpointName'])) {
    $model->order->delivery->data->shipmentpointName = $jsonData['order']['delivery']['data']['shipmentpointName'];

}
if (isset($jsonData['order']['delivery']['data']['shipmentpointAddress'])) {
    $model->order->delivery->data->shipmentpointAddress = $jsonData['order']['delivery']['data']['shipmentpointAddress'];

}
if (isset($jsonData['order']['delivery']['data']['shipmentpointSchedule'])) {
    $model->order->delivery->data->shipmentpointSchedule = $jsonData['order']['delivery']['data']['shipmentpointSchedule'];

}
if (isset($jsonData['order']['delivery']['data']['shipmentpointPhone'])) {
    $model->order->delivery->data->shipmentpointPhone = $jsonData['order']['delivery']['data']['shipmentpointPhone'];

}
if (isset($jsonData['order']['delivery']['data']['shipmentpointCoordinateLatitude'])) {
    $model->order->delivery->data->shipmentpointCoordinateLatitude = $jsonData['order']['delivery']['data']['shipmentpointCoordinateLatitude'];

}
if (isset($jsonData['order']['delivery']['data']['shipmentpointCoordinateLongitude'])) {
    $model->order->delivery->data->shipmentpointCoordinateLongitude = $jsonData['order']['delivery']['data']['shipmentpointCoordinateLongitude'];

}
if (isset($jsonData['order']['delivery']['data']['pickuppointName'])) {
    $model->order->delivery->data->pickuppointName = $jsonData['order']['delivery']['data']['pickuppointName'];

}
if (isset($jsonData['order']['delivery']['data']['pickuppointCoordinateLatitude'])) {
    $model->order->delivery->data->pickuppointCoordinateLatitude = $jsonData['order']['delivery']['data']['pickuppointCoordinateLatitude'];

}
if (isset($jsonData['order']['delivery']['data']['pickuppointCoordinateLongitude'])) {
    $model->order->delivery->data->pickuppointCoordinateLongitude = $jsonData['order']['delivery']['data']['pickuppointCoordinateLongitude'];

}
if (isset($jsonData['order']['delivery']['data']['extraData'])) {
    $model->order->delivery->data->extraData = [];
foreach (array_keys($jsonData['order']['delivery']['data']['extraData']) as $index51) {
    $model->order->delivery->data->extraData[$index51] = $jsonData['order']['delivery']['data']['extraData'][$index51];

}

}
if (isset($jsonData['order']['delivery']['data']['packages'])) {
    $model->order->delivery->data->packages = [];
foreach (array_keys($jsonData['order']['delivery']['data']['packages']) as $index50) {
    
$model->order->delivery->data->packages[$index50] = new RetailCrm\Api\Model\Entity\Order\Delivery\Package();
if (isset($jsonData['order']['delivery']['data']['packages'][$index50]['packageId'])) {
    $model->order->delivery->data->packages[$index50]->packageId = $jsonData['order']['delivery']['data']['packages'][$index50]['packageId'];

}
if (isset($jsonData['order']['delivery']['data']['packages'][$index50]['weight'])) {
    $model->order->delivery->data->packages[$index50]->weight = (float) $jsonData['order']['delivery']['data']['packages'][$index50]['weight'];

}
if (isset($jsonData['order']['delivery']['data']['packages'][$index50]['length'])) {
    $model->order->delivery->data->packages[$index50]->length = $jsonData['order']['delivery']['data']['packages'][$index50]['length'];

}
if (isset($jsonData['order']['delivery']['data']['packages'][$index50]['width'])) {
    $model->order->delivery->data->packages[$index50]->width = $jsonData['order']['delivery']['data']['packages'][$index50]['width'];

}
if (isset($jsonData['order']['delivery']['data']['packages'][$index50]['height'])) {
    $model->order->delivery->data->packages[$index50]->height = $jsonData['order']['delivery']['data']['packages'][$index50]['height'];

}
if (isset($jsonData['order']['delivery']['data']['packages'][$index50]['items'])) {
    $model->order->delivery->data->packages[$index50]->items = [];
foreach (array_keys($jsonData['order']['delivery']['data']['packages'][$index50]['items']) as $index69) {
    
$model->order->delivery->data->packages[$index50]->items[$index69] = new RetailCrm\Api\Model\Entity\Order\Delivery\PackageItem();
if (isset($jsonData['order']['delivery']['data']['packages'][$index50]['items'][$index69]['orderProduct'])) {
    
$model->order->delivery->data->packages[$index50]->items[$index69]->orderProduct = new RetailCrm\Api\Model\Entity\Order\Delivery\PackageItemOrderProduct();
if (isset($jsonData['order']['delivery']['data']['packages'][$index50]['items'][$index69]['orderProduct']['id'])) {
    $model->order->delivery->data->packages[$index50]->items[$index69]->orderProduct->id = $jsonData['order']['delivery']['data']['packages'][$index50]['items'][$index69]['orderProduct']['id'];

}
if (isset($jsonData['order']['delivery']['data']['packages'][$index50]['items'][$index69]['orderProduct']['externalId'])) {
    $model->order->delivery->data->packages[$index50]->items[$index69]->orderProduct->externalId = $jsonData['order']['delivery']['data']['packages'][$index50]['items'][$index69]['orderProduct']['externalId'];

}
if (isset($jsonData['order']['delivery']['data']['packages'][$index50]['items'][$index69]['orderProduct']['externalIds'])) {
    $model->order->delivery->data->packages[$index50]->items[$index69]->orderProduct->externalIds = [];
foreach (array_keys($jsonData['order']['delivery']['data']['packages'][$index50]['items'][$index69]['orderProduct']['externalIds']) as $index110) {
    
$model->order->delivery->data->packages[$index50]->items[$index69]->orderProduct->externalIds[$index110] = new RetailCrm\Api\Model\Entity\CodeValueModel();
if (isset($jsonData['order']['delivery']['data']['packages'][$index50]['items'][$index69]['orderProduct']['externalIds'][$index110]['code'])) {
    $model->order->delivery->data->packages[$index50]->items[$index69]->orderProduct->externalIds[$index110]->code = $jsonData['order']['delivery']['data']['packages'][$index50]['items'][$index69]['orderProduct']['externalIds'][$index110]['code'];

}
if (isset($jsonData['order']['delivery']['data']['packages'][$index50]['items'][$index69]['orderProduct']['externalIds'][$index110]['value'])) {
    $model->order->delivery->data->packages[$index50]->items[$index69]->orderProduct->externalIds[$index110]->value = $jsonData['order']['delivery']['data']['packages'][$index50]['items'][$index69]['orderProduct']['externalIds'][$index110]['value'];

}


}

}


}
if (isset($jsonData['order']['delivery']['data']['packages'][$index50]['items'][$index69]['quantity'])) {
    $model->order->delivery->data->packages[$index50]->items[$index69]->quantity = (float) $jsonData['order']['delivery']['data']['packages'][$index50]['items'][$index69]['quantity'];

}


}

}


}

}
if (isset($jsonData['order']['delivery']['data']['returnExternalId'])) {
    $model->order->delivery->data->returnExternalId = $jsonData['order']['delivery']['data']['returnExternalId'];

}
if (isset($jsonData['order']['delivery']['data']['deliveryName'])) {
    $model->order->delivery->data->deliveryName = $jsonData['order']['delivery']['data']['deliveryName'];

}
if (isset($jsonData['order']['delivery']['data']['price'])) {
    $model->order->delivery->data->price = (float) $jsonData['order']['delivery']['data']['price'];

}
if (isset($jsonData['order']['delivery']['data']['insurancePrice'])) {
    $model->order->delivery->data->insurancePrice = (float) $jsonData['order']['delivery']['data']['insurancePrice'];

}
if (isset($jsonData['order']['delivery']['data']['tariffType'])) {
    $model->order->delivery->data->tariffType = $jsonData['order']['delivery']['data']['tariffType'];

}
if (isset($jsonData['order']['delivery']['data']['receiverCity'])) {
    $model->order->delivery->data->receiverCity = $jsonData['order']['delivery']['data']['receiverCity'];

}
if (isset($jsonData['order']['delivery']['data']['services'])) {
    $model->order->delivery->data->services = [];
foreach (array_keys($jsonData['order']['delivery']['data']['services']) as $index50) {
    $model->order->delivery->data->services[$index50] = $jsonData['order']['delivery']['data']['services'][$index50];

}

}
if (isset($jsonData['order']['delivery']['data']['packageNumber'])) {
    $model->order->delivery->data->packageNumber = $jsonData['order']['delivery']['data']['packageNumber'];

}
if (isset($jsonData['order']['delivery']['data']['comment'])) {
    $model->order->delivery->data->comment = $jsonData['order']['delivery']['data']['comment'];

}
if (isset($jsonData['order']['delivery']['data']['deliveryCode'])) {
    $model->order->delivery->data->deliveryCode = $jsonData['order']['delivery']['data']['deliveryCode'];

}
if (isset($jsonData['order']['delivery']['data']['notes'])) {
    $model->order->delivery->data->notes = $jsonData['order']['delivery']['data']['notes'];

}
if (isset($jsonData['order']['delivery']['data']['id'])) {
    $model->order->delivery->data->id = $jsonData['order']['delivery']['data']['id'];

}
if (isset($jsonData['order']['delivery']['data']['firstName'])) {
    $model->order->delivery->data->firstName = $jsonData['order']['delivery']['data']['firstName'];

}
if (isset($jsonData['order']['delivery']['data']['lastName'])) {
    $model->order->delivery->data->lastName = $jsonData['order']['delivery']['data']['lastName'];

}
if (isset($jsonData['order']['delivery']['data']['patronymic'])) {
    $model->order->delivery->data->patronymic = $jsonData['order']['delivery']['data']['patronymic'];

}
if (isset($jsonData['order']['delivery']['data']['active'])) {
    $model->order->delivery->data->active = $jsonData['order']['delivery']['data']['active'];

}
if (isset($jsonData['order']['delivery']['data']['email'])) {
    $model->order->delivery->data->email = $jsonData['order']['delivery']['data']['email'];

}
if (isset($jsonData['order']['delivery']['data']['phone'])) {
    
$model->order->delivery->data->phone = new RetailCrm\Api\Model\Entity\Order\Delivery\CourierPhone();
if (isset($jsonData['order']['delivery']['data']['phone']['number'])) {
    $model->order->delivery->data->phone->number = $jsonData['order']['delivery']['data']['phone']['number'];

}


}
if (isset($jsonData['order']['delivery']['data']['description'])) {
    $model->order->delivery->data->description = $jsonData['order']['delivery']['data']['description'];

}
if (isset($jsonData['order']['delivery']['data']['courierId'])) {
    $model->order->delivery->data->courierId = $jsonData['order']['delivery']['data']['courierId'];

}
if (isset($jsonData['order']['delivery']['data']['serviceType'])) {
    $model->order->delivery->data->serviceType = $jsonData['order']['delivery']['data']['serviceType'];

}
if (isset($jsonData['order']['delivery']['data']['pickuppoint'])) {
    $model->order->delivery->data->pickuppoint = $jsonData['order']['delivery']['data']['pickuppoint'];

}
if (isset($jsonData['order']['delivery']['data']['receiverWarehouseTypeRef'])) {
    $model->order->delivery->data->receiverWarehouseTypeRef = $jsonData['order']['delivery']['data']['receiverWarehouseTypeRef'];

}
if (isset($jsonData['order']['delivery']['data']['statusName'])) {
    $model->order->delivery->data->statusName = $jsonData['order']['delivery']['data']['statusName'];

}
if (isset($jsonData['order']['delivery']['data']['receiverCityRef'])) {
    $model->order->delivery->data->receiverCityRef = $jsonData['order']['delivery']['data']['receiverCityRef'];

}
if (isset($jsonData['order']['delivery']['data']['receiverStreet'])) {
    $model->order->delivery->data->receiverStreet = $jsonData['order']['delivery']['data']['receiverStreet'];

}
if (isset($jsonData['order']['delivery']['data']['receiverStreetRef'])) {
    $model->order->delivery->data->receiverStreetRef = $jsonData['order']['delivery']['data']['receiverStreetRef'];

}
if (isset($jsonData['order']['delivery']['data']['seatsAmount'])) {
    $model->order->delivery->data->seatsAmount = $jsonData['order']['delivery']['data']['seatsAmount'];

}
if (isset($jsonData['order']['delivery']['data']['cargoType'])) {
    $model->order->delivery->data->cargoType = $jsonData['order']['delivery']['data']['cargoType'];

}
if (isset($jsonData['order']['delivery']['data']['cargoDescription'])) {
    $model->order->delivery->data->cargoDescription = $jsonData['order']['delivery']['data']['cargoDescription'];

}
if (isset($jsonData['order']['delivery']['data']['cashPayerType'])) {
    $model->order->delivery->data->cashPayerType = $jsonData['order']['delivery']['data']['cashPayerType'];

}
if (isset($jsonData['order']['delivery']['data']['paymentForm'])) {
    $model->order->delivery->data->paymentForm = $jsonData['order']['delivery']['data']['paymentForm'];

}
if (isset($jsonData['order']['delivery']['data']['ownershipForm'])) {
    $model->order->delivery->data->ownershipForm = $jsonData['order']['delivery']['data']['ownershipForm'];

}
if (isset($jsonData['order']['delivery']['data']['accompanyingDocument'])) {
    $model->order->delivery->data->accompanyingDocument = $jsonData['order']['delivery']['data']['accompanyingDocument'];

}
if (isset($jsonData['order']['delivery']['data']['preferredDeliveryDate'])) {
    $model->order->delivery->data->preferredDeliveryDate = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['order']['delivery']['data']['preferredDeliveryDate']);

}
if (isset($jsonData['order']['delivery']['data']['timeInterval'])) {
    $model->order->delivery->data->timeInterval = $jsonData['order']['delivery']['data']['timeInterval'];

}
if (isset($jsonData['order']['delivery']['data']['saturdayDelivery'])) {
    $model->order->delivery->data->saturdayDelivery = $jsonData['order']['delivery']['data']['saturdayDelivery'];

}
if (isset($jsonData['order']['delivery']['data']['deliveryDate'])) {
    $model->order->delivery->data->deliveryDate = $jsonData['order']['delivery']['data']['deliveryDate'];

}
if (isset($jsonData['order']['delivery']['data']['denieReason'])) {
    $model->order->delivery->data->denieReason = $jsonData['order']['delivery']['data']['denieReason'];

}
if (isset($jsonData['order']['delivery']['data']['backwardDelivery'])) {
    $model->order->delivery->data->backwardDelivery = $jsonData['order']['delivery']['data']['backwardDelivery'];

}
if (isset($jsonData['order']['delivery']['data']['backwardDeliveryCargoType'])) {
    $model->order->delivery->data->backwardDeliveryCargoType = $jsonData['order']['delivery']['data']['backwardDeliveryCargoType'];

}
if (isset($jsonData['order']['delivery']['data']['backwardDeliveryPayerType'])) {
    $model->order->delivery->data->backwardDeliveryPayerType = $jsonData['order']['delivery']['data']['backwardDeliveryPayerType'];

}
if (isset($jsonData['order']['delivery']['data']['backwardDeliveryRedeliveryString'])) {
    $model->order->delivery->data->backwardDeliveryRedeliveryString = $jsonData['order']['delivery']['data']['backwardDeliveryRedeliveryString'];

}
if (isset($jsonData['order']['delivery']['data']['afterpaymentOnGoodsCost'])) {
    $model->order->delivery->data->afterpaymentOnGoodsCost = (float) $jsonData['order']['delivery']['data']['afterpaymentOnGoodsCost'];

}
if (isset($jsonData['order']['delivery']['data']['declaredValue'])) {
    $model->order->delivery->data->declaredValue = (float) $jsonData['order']['delivery']['data']['declaredValue'];

}
if (isset($jsonData['order']['delivery']['data']['sendDate'])) {
    $model->order->delivery->data->sendDate = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['order']['delivery']['data']['sendDate']);

}
if (isset($jsonData['order']['delivery']['data']['deliveryType'])) {
    $model->order->delivery->data->deliveryType = $jsonData['order']['delivery']['data']['deliveryType'];

}
if (isset($jsonData['order']['delivery']['data']['pickupType'])) {
    $model->order->delivery->data->pickupType = $jsonData['order']['delivery']['data']['pickupType'];

}
if (isset($jsonData['order']['delivery']['data']['pickuppointDescription'])) {
    $model->order->delivery->data->pickuppointDescription = $jsonData['order']['delivery']['data']['pickuppointDescription'];

}
if (isset($jsonData['order']['delivery']['data']['placesCount'])) {
    $model->order->delivery->data->placesCount = $jsonData['order']['delivery']['data']['placesCount'];

}
if (isset($jsonData['order']['delivery']['data']['service'])) {
    $model->order->delivery->data->service = $jsonData['order']['delivery']['data']['service'];

}


}
if (isset($jsonData['order']['delivery']['service'])) {
    
$model->order->delivery->service = new RetailCrm\Api\Model\Entity\Order\Delivery\SerializedDeliveryService();
if (isset($jsonData['order']['delivery']['service']['name'])) {
    $model->order->delivery->service->name = $jsonData['order']['delivery']['service']['name'];

}
if (isset($jsonData['order']['delivery']['service']['code'])) {
    $model->order->delivery->service->code = $jsonData['order']['delivery']['service']['code'];

}
if (isset($jsonData['order']['delivery']['service']['active'])) {
    $model->order->delivery->service->active = $jsonData['order']['delivery']['service']['active'];

}


}
if (isset($jsonData['order']['delivery']['cost'])) {
    $model->order->delivery->cost = (float) $jsonData['order']['delivery']['cost'];

}
if (isset($jsonData['order']['delivery']['netCost'])) {
    $model->order->delivery->netCost = (float) $jsonData['order']['delivery']['netCost'];

}
if (isset($jsonData['order']['delivery']['date'])) {
    $model->order->delivery->date = \DateTime::createFromFormat('Y-m-d', $jsonData['order']['delivery']['date']);

}
if (isset($jsonData['order']['delivery']['time'])) {
    
$model->order->delivery->time = new RetailCrm\Api\Model\Entity\Delivery\TimeInterval();
if (isset($jsonData['order']['delivery']['time']['from'])) {
    $model->order->delivery->time->from = \DateTime::createFromFormat('H:i', $jsonData['order']['delivery']['time']['from']);

}
if (isset($jsonData['order']['delivery']['time']['to'])) {
    $model->order->delivery->time->to = \DateTime::createFromFormat('H:i', $jsonData['order']['delivery']['time']['to']);

}
if (isset($jsonData['order']['delivery']['time']['custom'])) {
    $model->order->delivery->time->custom = $jsonData['order']['delivery']['time']['custom'];

}


}
if (isset($jsonData['order']['delivery']['address'])) {
    
$model->order->delivery->address = new RetailCrm\Api\Model\Entity\Order\Delivery\OrderDeliveryAddress();
if (isset($jsonData['order']['delivery']['address']['id'])) {
    $model->order->delivery->address->id = $jsonData['order']['delivery']['address']['id'];

}
if (isset($jsonData['order']['delivery']['address']['index'])) {
    $model->order->delivery->address->index = $jsonData['order']['delivery']['address']['index'];

}
if (isset($jsonData['order']['delivery']['address']['countryIso'])) {
    $model->order->delivery->address->countryIso = $jsonData['order']['delivery']['address']['countryIso'];

}
if (isset($jsonData['order']['delivery']['address']['region'])) {
    $model->order->delivery->address->region = $jsonData['order']['delivery']['address']['region'];

}
if (isset($jsonData['order']['delivery']['address']['regionId'])) {
    $model->order->delivery->address->regionId = $jsonData['order']['delivery']['address']['regionId'];

}
if (isset($jsonData['order']['delivery']['address']['city'])) {
    $model->order->delivery->address->city = $jsonData['order']['delivery']['address']['city'];

}
if (isset($jsonData['order']['delivery']['address']['cityId'])) {
    $model->order->delivery->address->cityId = $jsonData['order']['delivery']['address']['cityId'];

}
if (isset($jsonData['order']['delivery']['address']['cityType'])) {
    $model->order->delivery->address->cityType = $jsonData['order']['delivery']['address']['cityType'];

}
if (isset($jsonData['order']['delivery']['address']['street'])) {
    $model->order->delivery->address->street = $jsonData['order']['delivery']['address']['street'];

}
if (isset($jsonData['order']['delivery']['address']['streetId'])) {
    $model->order->delivery->address->streetId = $jsonData['order']['delivery']['address']['streetId'];

}
if (isset($jsonData['order']['delivery']['address']['streetType'])) {
    $model->order->delivery->address->streetType = $jsonData['order']['delivery']['address']['streetType'];

}
if (isset($jsonData['order']['delivery']['address']['building'])) {
    $model->order->delivery->address->building = $jsonData['order']['delivery']['address']['building'];

}
if (isset($jsonData['order']['delivery']['address']['flat'])) {
    $model->order->delivery->address->flat = $jsonData['order']['delivery']['address']['flat'];

}
if (isset($jsonData['order']['delivery']['address']['floor'])) {
    $model->order->delivery->address->floor = $jsonData['order']['delivery']['address']['floor'];

}
if (isset($jsonData['order']['delivery']['address']['block'])) {
    $model->order->delivery->address->block = $jsonData['order']['delivery']['address']['block'];

}
if (isset($jsonData['order']['delivery']['address']['house'])) {
    $model->order->delivery->address->house = $jsonData['order']['delivery']['address']['house'];

}
if (isset($jsonData['order']['delivery']['address']['housing'])) {
    $model->order->delivery->address->housing = $jsonData['order']['delivery']['address']['housing'];

}
if (isset($jsonData['order']['delivery']['address']['metro'])) {
    $model->order->delivery->address->metro = $jsonData['order']['delivery']['address']['metro'];

}
if (isset($jsonData['order']['delivery']['address']['text'])) {
    $model->order->delivery->address->text = $jsonData['order']['delivery']['address']['text'];

}


}
if (isset($jsonData['order']['delivery']['vatRate'])) {
    $model->order->delivery->vatRate = $jsonData['order']['delivery']['vatRate'];

}


}
if (isset($jsonData['order']['marketplace'])) {
    
$model->order->marketplace = new RetailCrm\Api\Model\Entity\Order\MarketplaceData();
if (isset($jsonData['order']['marketplace']['code'])) {
    $model->order->marketplace->code = $jsonData['order']['marketplace']['code'];

}
if (isset($jsonData['order']['marketplace']['orderId'])) {
    $model->order->marketplace->orderId = $jsonData['order']['marketplace']['orderId'];

}


}
if (isset($jsonData['order']['site'])) {
    $model->order->site = $jsonData['order']['site'];

}
if (isset($jsonData['order']['status'])) {
    $model->order->status = $jsonData['order']['status'];

}
if (isset($jsonData['order']['statusComment'])) {
    $model->order->statusComment = $jsonData['order']['statusComment'];

}
if (isset($jsonData['order']['source'])) {
    
$model->order->source = new RetailCrm\Api\Model\Entity\Source();
if (isset($jsonData['order']['source']['source'])) {
    $model->order->source->source = $jsonData['order']['source']['source'];

}
if (isset($jsonData['order']['source']['medium'])) {
    $model->order->source->medium = $jsonData['order']['source']['medium'];

}
if (isset($jsonData['order']['source']['campaign'])) {
    $model->order->source->campaign = $jsonData['order']['source']['campaign'];

}
if (isset($jsonData['order']['source']['keyword'])) {
    $model->order->source->keyword = $jsonData['order']['source']['keyword'];

}
if (isset($jsonData['order']['source']['content'])) {
    $model->order->source->content = $jsonData['order']['source']['content'];

}


}
if (isset($jsonData['order']['items'])) {
    $model->order->items = [];
foreach (array_keys($jsonData['order']['items']) as $index27) {
    
$model->order->items[$index27] = new RetailCrm\Api\Model\Entity\Order\Items\OrderProduct();
if (isset($jsonData['order']['items'][$index27]['externalId'])) {
    $model->order->items[$index27]->externalId = $jsonData['order']['items'][$index27]['externalId'];

}
if (isset($jsonData['order']['items'][$index27]['markingCodes'])) {
    $model->order->items[$index27]->markingCodes = [];
foreach (array_keys($jsonData['order']['items'][$index27]['markingCodes']) as $index53) {
    $model->order->items[$index27]->markingCodes[$index53] = $jsonData['order']['items'][$index27]['markingCodes'][$index53];

}

}
if (isset($jsonData['order']['items'][$index27]['id'])) {
    $model->order->items[$index27]->id = $jsonData['order']['items'][$index27]['id'];

}
if (isset($jsonData['order']['items'][$index27]['externalIds'])) {
    $model->order->items[$index27]->externalIds = [];
foreach (array_keys($jsonData['order']['items'][$index27]['externalIds']) as $index52) {
    
$model->order->items[$index27]->externalIds[$index52] = new RetailCrm\Api\Model\Entity\CodeValueModel();
if (isset($jsonData['order']['items'][$index27]['externalIds'][$index52]['code'])) {
    $model->order->items[$index27]->externalIds[$index52]->code = $jsonData['order']['items'][$index27]['externalIds'][$index52]['code'];

}
if (isset($jsonData['order']['items'][$index27]['externalIds'][$index52]['value'])) {
    $model->order->items[$index27]->externalIds[$index52]->value = $jsonData['order']['items'][$index27]['externalIds'][$index52]['value'];

}


}

}
if (isset($jsonData['order']['items'][$index27]['priceType'])) {
    
$model->order->items[$index27]->priceType = new RetailCrm\Api\Model\Entity\Order\Items\PriceType();
if (isset($jsonData['order']['items'][$index27]['priceType']['code'])) {
    $model->order->items[$index27]->priceType->code = $jsonData['order']['items'][$index27]['priceType']['code'];

}


}
if (isset($jsonData['order']['items'][$index27]['initialPrice'])) {
    $model->order->items[$index27]->initialPrice = (float) $jsonData['order']['items'][$index27]['initialPrice'];

}
if (isset($jsonData['order']['items'][$index27]['discountManualAmount'])) {
    $model->order->items[$index27]->discountManualAmount = (float) $jsonData['order']['items'][$index27]['discountManualAmount'];

}
if (isset($jsonData['order']['items'][$index27]['discountManualPercent'])) {
    $model->order->items[$index27]->discountManualPercent = (float) $jsonData['order']['items'][$index27]['discountManualPercent'];

}
if (isset($jsonData['order']['items'][$index27]['discountTotal'])) {
    $model->order->items[$index27]->discountTotal = (float) $jsonData['order']['items'][$index27]['discountTotal'];

}
if (isset($jsonData['order']['items'][$index27]['prices'])) {
    $model->order->items[$index27]->prices = [];
foreach (array_keys($jsonData['order']['items'][$index27]['prices']) as $index47) {
    
$model->order->items[$index27]->prices[$index47] = new RetailCrm\Api\Model\Entity\Order\Items\OrderProductPriceItem();
if (isset($jsonData['order']['items'][$index27]['prices'][$index47]['price'])) {
    $model->order->items[$index27]->prices[$index47]->price = (float) $jsonData['order']['items'][$index27]['prices'][$index47]['price'];

}
if (isset($jsonData['order']['items'][$index27]['prices'][$index47]['quantity'])) {
    $model->order->items[$index27]->prices[$index47]->quantity = (float) $jsonData['order']['items'][$index27]['prices'][$index47]['quantity'];

}


}

}
if (isset($jsonData['order']['items'][$index27]['vatRate'])) {
    $model->order->items[$index27]->vatRate = $jsonData['order']['items'][$index27]['vatRate'];

}
if (isset($jsonData['order']['items'][$index27]['createdAt'])) {
    $model->order->items[$index27]->createdAt = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['order']['items'][$index27]['createdAt']);

}
if (isset($jsonData['order']['items'][$index27]['quantity'])) {
    $model->order->items[$index27]->quantity = (float) $jsonData['order']['items'][$index27]['quantity'];

}
if (isset($jsonData['order']['items'][$index27]['status'])) {
    $model->order->items[$index27]->status = $jsonData['order']['items'][$index27]['status'];

}
if (isset($jsonData['order']['items'][$index27]['comment'])) {
    $model->order->items[$index27]->comment = $jsonData['order']['items'][$index27]['comment'];

}
if (isset($jsonData['order']['items'][$index27]['offer'])) {
    
$model->order->items[$index27]->offer = new RetailCrm\Api\Model\Entity\Order\Items\Offer();
if (isset($jsonData['order']['items'][$index27]['offer']['displayName'])) {
    $model->order->items[$index27]->offer->displayName = $jsonData['order']['items'][$index27]['offer']['displayName'];

}
if (isset($jsonData['order']['items'][$index27]['offer']['id'])) {
    $model->order->items[$index27]->offer->id = $jsonData['order']['items'][$index27]['offer']['id'];

}
if (isset($jsonData['order']['items'][$index27]['offer']['externalId'])) {
    $model->order->items[$index27]->offer->externalId = $jsonData['order']['items'][$index27]['offer']['externalId'];

}
if (isset($jsonData['order']['items'][$index27]['offer']['xmlId'])) {
    $model->order->items[$index27]->offer->xmlId = $jsonData['order']['items'][$index27]['offer']['xmlId'];

}
if (isset($jsonData['order']['items'][$index27]['offer']['name'])) {
    $model->order->items[$index27]->offer->name = $jsonData['order']['items'][$index27]['offer']['name'];

}
if (isset($jsonData['order']['items'][$index27]['offer']['article'])) {
    $model->order->items[$index27]->offer->article = $jsonData['order']['items'][$index27]['offer']['article'];

}
if (isset($jsonData['order']['items'][$index27]['offer']['vatRate'])) {
    $model->order->items[$index27]->offer->vatRate = $jsonData['order']['items'][$index27]['offer']['vatRate'];

}
if (isset($jsonData['order']['items'][$index27]['offer']['unit'])) {
    
$model->order->items[$index27]->offer->unit = new RetailCrm\Api\Model\Entity\Order\Items\Unit();
if (isset($jsonData['order']['items'][$index27]['offer']['unit']['code'])) {
    $model->order->items[$index27]->offer->unit->code = $jsonData['order']['items'][$index27]['offer']['unit']['code'];

}
if (isset($jsonData['order']['items'][$index27]['offer']['unit']['name'])) {
    $model->order->items[$index27]->offer->unit->name = $jsonData['order']['items'][$index27]['offer']['unit']['name'];

}
if (isset($jsonData['order']['items'][$index27]['offer']['unit']['sym'])) {
    $model->order->items[$index27]->offer->unit->sym = $jsonData['order']['items'][$index27]['offer']['unit']['sym'];

}


}
if (isset($jsonData['order']['items'][$index27]['offer']['barcode'])) {
    $model->order->items[$index27]->offer->barcode = $jsonData['order']['items'][$index27]['offer']['barcode'];

}
if (isset($jsonData['order']['items'][$index27]['offer']['properties'])) {
    $model->order->items[$index27]->offer->properties = [];
foreach (array_keys($jsonData['order']['items'][$index27]['offer']['properties']) as $index60) {
    $model->order->items[$index27]->offer->properties[$index60] = $jsonData['order']['items'][$index27]['offer']['properties'][$index60];

}

}


}
if (isset($jsonData['order']['items'][$index27]['productName'])) {
    $model->order->items[$index27]->productName = $jsonData['order']['items'][$index27]['productName'];

}
if (isset($jsonData['order']['items'][$index27]['isCanceled'])) {
    $model->order->items[$index27]->isCanceled = $jsonData['order']['items'][$index27]['isCanceled'];

}
if (isset($jsonData['order']['items'][$index27]['properties'])) {
    $model->order->items[$index27]->properties = [];
foreach (array_keys($jsonData['order']['items'][$index27]['properties']) as $index51) {
    
$model->order->items[$index27]->properties[$index51] = new RetailCrm\Api\Model\Entity\Order\Items\ItemProperty();
if (isset($jsonData['order']['items'][$index27]['properties'][$index51]['code'])) {
    $model->order->items[$index27]->properties[$index51]->code = $jsonData['order']['items'][$index27]['properties'][$index51]['code'];

}
if (isset($jsonData['order']['items'][$index27]['properties'][$index51]['name'])) {
    $model->order->items[$index27]->properties[$index51]->name = $jsonData['order']['items'][$index27]['properties'][$index51]['name'];

}
if (isset($jsonData['order']['items'][$index27]['properties'][$index51]['value'])) {
    $model->order->items[$index27]->properties[$index51]->value = $jsonData['order']['items'][$index27]['properties'][$index51]['value'];

}


}

}
if (isset($jsonData['order']['items'][$index27]['purchasePrice'])) {
    $model->order->items[$index27]->purchasePrice = (float) $jsonData['order']['items'][$index27]['purchasePrice'];

}


}

}
if (isset($jsonData['order']['fullPaidAt'])) {
    $model->order->fullPaidAt = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['order']['fullPaidAt']);

}
if (isset($jsonData['order']['payments'])) {
    $model->order->payments = [];
foreach (array_keys($jsonData['order']['payments']) as $index30) {
    
$model->order->payments[$index30] = new RetailCrm\Api\Model\Entity\Order\Payment();
if (isset($jsonData['order']['payments'][$index30]['id'])) {
    $model->order->payments[$index30]->id = $jsonData['order']['payments'][$index30]['id'];

}
if (isset($jsonData['order']['payments'][$index30]['status'])) {
    $model->order->payments[$index30]->status = $jsonData['order']['payments'][$index30]['status'];

}
if (isset($jsonData['order']['payments'][$index30]['type'])) {
    $model->order->payments[$index30]->type = $jsonData['order']['payments'][$index30]['type'];

}
if (isset($jsonData['order']['payments'][$index30]['externalId'])) {
    $model->order->payments[$index30]->externalId = $jsonData['order']['payments'][$index30]['externalId'];

}
if (isset($jsonData['order']['payments'][$index30]['amount'])) {
    $model->order->payments[$index30]->amount = (float) $jsonData['order']['payments'][$index30]['amount'];

}
if (isset($jsonData['order']['payments'][$index30]['paidAt'])) {
    $model->order->payments[$index30]->paidAt = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['order']['payments'][$index30]['paidAt']);

}
if (isset($jsonData['order']['payments'][$index30]['comment'])) {
    $model->order->payments[$index30]->comment = $jsonData['order']['payments'][$index30]['comment'];

}


}

}
if (isset($jsonData['order']['fromApi'])) {
    $model->order->fromApi = $jsonData['order']['fromApi'];

}
if (isset($jsonData['order']['weight'])) {
    $model->order->weight = (float) $jsonData['order']['weight'];

}
if (isset($jsonData['order']['length'])) {
    $model->order->length = $jsonData['order']['length'];

}
if (isset($jsonData['order']['width'])) {
    $model->order->width = $jsonData['order']['width'];

}
if (isset($jsonData['order']['height'])) {
    $model->order->height = $jsonData['order']['height'];

}
if (isset($jsonData['order']['shipmentStore'])) {
    $model->order->shipmentStore = $jsonData['order']['shipmentStore'];

}
if (isset($jsonData['order']['shipmentDate'])) {
    $model->order->shipmentDate = \DateTime::createFromFormat('Y-m-d', $jsonData['order']['shipmentDate']);

}
if (isset($jsonData['order']['shipped'])) {
    $model->order->shipped = $jsonData['order']['shipped'];

}
if (isset($jsonData['order']['dialogId'])) {
    $model->order->dialogId = $jsonData['order']['dialogId'];

}
if (isset($jsonData['order']['customFields'])) {
    $model->order->customFields = [];
foreach (array_keys($jsonData['order']['customFields']) as $index34) {
    $model->order->customFields[$index34] = $jsonData['order']['customFields'][$index34];

}

}
if (isset($jsonData['order']['clientId'])) {
    $model->order->clientId = $jsonData['order']['clientId'];

}
if (isset($jsonData['order']['loyaltyEventId'])) {
    $model->order->loyaltyEventId = $jsonData['order']['loyaltyEventId'];

}


}
if (isset($jsonData['ancestor'])) {
    
$model->ancestor = new RetailCrm\Api\Model\Entity\Order\Order();
if (isset($jsonData['ancestor']['bonusesCreditTotal'])) {
    $model->ancestor->bonusesCreditTotal = (float) $jsonData['ancestor']['bonusesCreditTotal'];

}
if (isset($jsonData['ancestor']['bonusesChargeTotal'])) {
    $model->ancestor->bonusesChargeTotal = (float) $jsonData['ancestor']['bonusesChargeTotal'];

}
if (isset($jsonData['ancestor']['summ'])) {
    $model->ancestor->summ = (float) $jsonData['ancestor']['summ'];

}
if (isset($jsonData['ancestor']['id'])) {
    $model->ancestor->id = $jsonData['ancestor']['id'];

}
if (isset($jsonData['ancestor']['slug'])) {
    $model->ancestor->slug = $jsonData['ancestor']['slug'];

}
if (isset($jsonData['ancestor']['number'])) {
    $model->ancestor->number = $jsonData['ancestor']['number'];

}
if (isset($jsonData['ancestor']['externalId'])) {
    $model->ancestor->externalId = $jsonData['ancestor']['externalId'];

}
if (isset($jsonData['ancestor']['orderType'])) {
    $model->ancestor->orderType = $jsonData['ancestor']['orderType'];

}
if (isset($jsonData['ancestor']['orderMethod'])) {
    $model->ancestor->orderMethod = $jsonData['ancestor']['orderMethod'];

}
if (isset($jsonData['ancestor']['privilegeType'])) {
    $model->ancestor->privilegeType = $jsonData['ancestor']['privilegeType'];

}
if (isset($jsonData['ancestor']['countryIso'])) {
    $model->ancestor->countryIso = $jsonData['ancestor']['countryIso'];

}
if (isset($jsonData['ancestor']['createdAt'])) {
    $model->ancestor->createdAt = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['ancestor']['createdAt']);

}
if (isset($jsonData['ancestor']['statusUpdatedAt'])) {
    $model->ancestor->statusUpdatedAt = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['ancestor']['statusUpdatedAt']);

}
if (isset($jsonData['ancestor']['discountManualAmount'])) {
    $model->ancestor->discountManualAmount = (float) $jsonData['ancestor']['discountManualAmount'];

}
if (isset($jsonData['ancestor']['discountManualPercent'])) {
    $model->ancestor->discountManualPercent = (float) $jsonData['ancestor']['discountManualPercent'];

}
if (isset($jsonData['ancestor']['totalSumm'])) {
    $model->ancestor->totalSumm = (float) $jsonData['ancestor']['totalSumm'];

}
if (isset($jsonData['ancestor']['prepaySum'])) {
    $model->ancestor->prepaySum = (float) $jsonData['ancestor']['prepaySum'];

}
if (isset($jsonData['ancestor']['purchaseSumm'])) {
    $model->ancestor->purchaseSumm = (float) $jsonData['ancestor']['purchaseSumm'];

}
if (isset($jsonData['ancestor']['personalDiscountPercent'])) {
    $model->ancestor->personalDiscountPercent = (float) $jsonData['ancestor']['personalDiscountPercent'];

}
if (isset($jsonData['ancestor']['loyaltyLevel'])) {
    
$model->ancestor->loyaltyLevel = new RetailCrm\Api\Model\Entity\Loyalty\LoyaltyLevel();
if (isset($jsonData['ancestor']['loyaltyLevel']['id'])) {
    $model->ancestor->loyaltyLevel->id = $jsonData['ancestor']['loyaltyLevel']['id'];

}
if (isset($jsonData['ancestor']['loyaltyLevel']['name'])) {
    $model->ancestor->loyaltyLevel->name = $jsonData['ancestor']['loyaltyLevel']['name'];

}


}
if (isset($jsonData['ancestor']['loyaltyEvent'])) {
    
$model->ancestor->loyaltyEvent = new RetailCrm\Api\Model\Entity\Loyalty\AbstractLoyaltyEvent();
if (isset($jsonData['ancestor']['loyaltyEvent']['id'])) {
    $model->ancestor->loyaltyEvent->id = $jsonData['ancestor']['loyaltyEvent']['id'];

}


}
if (isset($jsonData['ancestor']['mark'])) {
    $model->ancestor->mark = $jsonData['ancestor']['mark'];

}
if (isset($jsonData['ancestor']['markDatetime'])) {
    $model->ancestor->markDatetime = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['ancestor']['markDatetime']);

}
if (isset($jsonData['ancestor']['lastName'])) {
    $model->ancestor->lastName = $jsonData['ancestor']['lastName'];

}
if (isset($jsonData['ancestor']['firstName'])) {
    $model->ancestor->firstName = $jsonData['ancestor']['firstName'];

}
if (isset($jsonData['ancestor']['patronymic'])) {
    $model->ancestor->patronymic = $jsonData['ancestor']['patronymic'];

}
if (isset($jsonData['ancestor']['phone'])) {
    $model->ancestor->phone = $jsonData['ancestor']['phone'];

}
if (isset($jsonData['ancestor']['additionalPhone'])) {
    $model->ancestor->additionalPhone = $jsonData['ancestor']['additionalPhone'];

}
if (isset($jsonData['ancestor']['email'])) {
    $model->ancestor->email = $jsonData['ancestor']['email'];

}
if (isset($jsonData['ancestor']['call'])) {
    $model->ancestor->call = $jsonData['ancestor']['call'];

}
if (isset($jsonData['ancestor']['expired'])) {
    $model->ancestor->expired = $jsonData['ancestor']['expired'];

}
if (isset($jsonData['ancestor']['customerComment'])) {
    $model->ancestor->customerComment = $jsonData['ancestor']['customerComment'];

}
if (isset($jsonData['ancestor']['managerComment'])) {
    $model->ancestor->managerComment = $jsonData['ancestor']['managerComment'];

}
if (isset($jsonData['ancestor']['managerId'])) {
    $model->ancestor->managerId = $jsonData['ancestor']['managerId'];

}
if (isset($jsonData['ancestor']['customer'])) {
    

if (
    !empty($jsonData['ancestor']['customer']['type']) &&
    \RetailCrm\Api\Enum\Customers\CustomerType::CORPORATE_CUSTOMER === $jsonData['ancestor']['customer']['type']
) {
    
$model->ancestor->customer = new RetailCrm\Api\Model\Entity\CustomersCorporate\CustomerCorporate();
if (isset($jsonData['ancestor']['customer']['type'])) {
    $model->ancestor->customer->type = $jsonData['ancestor']['customer']['type'];

}
if (isset($jsonData['ancestor']['customer']['id'])) {
    $model->ancestor->customer->id = $jsonData['ancestor']['customer']['id'];

}
if (isset($jsonData['ancestor']['customer']['externalId'])) {
    $model->ancestor->customer->externalId = $jsonData['ancestor']['customer']['externalId'];

}
if (isset($jsonData['ancestor']['customer']['nickName'])) {
    $model->ancestor->customer->nickName = $jsonData['ancestor']['customer']['nickName'];

}
if (isset($jsonData['ancestor']['customer']['mainAddress'])) {
    
$model->ancestor->customer->mainAddress = new RetailCrm\Api\Model\Entity\CustomersCorporate\EntityWithExternalIdNameOutput();
if (isset($jsonData['ancestor']['customer']['mainAddress']['id'])) {
    $model->ancestor->customer->mainAddress->id = $jsonData['ancestor']['customer']['mainAddress']['id'];

}
if (isset($jsonData['ancestor']['customer']['mainAddress']['externalId'])) {
    $model->ancestor->customer->mainAddress->externalId = $jsonData['ancestor']['customer']['mainAddress']['externalId'];

}
if (isset($jsonData['ancestor']['customer']['mainAddress']['name'])) {
    $model->ancestor->customer->mainAddress->name = $jsonData['ancestor']['customer']['mainAddress']['name'];

}


}
if (isset($jsonData['ancestor']['customer']['createdAt'])) {
    $model->ancestor->customer->createdAt = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['ancestor']['customer']['createdAt']);

}
if (isset($jsonData['ancestor']['customer']['managerId'])) {
    $model->ancestor->customer->managerId = $jsonData['ancestor']['customer']['managerId'];

}
if (isset($jsonData['ancestor']['customer']['source'])) {
    
$model->ancestor->customer->source = new RetailCrm\Api\Model\Entity\Source();
if (isset($jsonData['ancestor']['customer']['source']['source'])) {
    $model->ancestor->customer->source->source = $jsonData['ancestor']['customer']['source']['source'];

}
if (isset($jsonData['ancestor']['customer']['source']['medium'])) {
    $model->ancestor->customer->source->medium = $jsonData['ancestor']['customer']['source']['medium'];

}
if (isset($jsonData['ancestor']['customer']['source']['campaign'])) {
    $model->ancestor->customer->source->campaign = $jsonData['ancestor']['customer']['source']['campaign'];

}
if (isset($jsonData['ancestor']['customer']['source']['keyword'])) {
    $model->ancestor->customer->source->keyword = $jsonData['ancestor']['customer']['source']['keyword'];

}
if (isset($jsonData['ancestor']['customer']['source']['content'])) {
    $model->ancestor->customer->source->content = $jsonData['ancestor']['customer']['source']['content'];

}


}
if (isset($jsonData['ancestor']['customer']['customerContacts'])) {
    $model->ancestor->customer->customerContacts = [];
foreach (array_keys($jsonData['ancestor']['customer']['customerContacts']) as $index53) {
    
$model->ancestor->customer->customerContacts[$index53] = new RetailCrm\Api\Model\Entity\CustomersCorporate\CustomerContact();
if (isset($jsonData['ancestor']['customer']['customerContacts'][$index53]['id'])) {
    $model->ancestor->customer->customerContacts[$index53]->id = $jsonData['ancestor']['customer']['customerContacts'][$index53]['id'];

}
if (isset($jsonData['ancestor']['customer']['customerContacts'][$index53]['isMain'])) {
    $model->ancestor->customer->customerContacts[$index53]->isMain = $jsonData['ancestor']['customer']['customerContacts'][$index53]['isMain'];

}
if (isset($jsonData['ancestor']['customer']['customerContacts'][$index53]['customer'])) {
    
$model->ancestor->customer->customerContacts[$index53]->customer = new RetailCrm\Api\Model\Entity\CustomersCorporate\SerializedRelationAbstractCustomer();
if (isset($jsonData['ancestor']['customer']['customerContacts'][$index53]['customer']['id'])) {
    $model->ancestor->customer->customerContacts[$index53]->customer->id = $jsonData['ancestor']['customer']['customerContacts'][$index53]['customer']['id'];

}
if (isset($jsonData['ancestor']['customer']['customerContacts'][$index53]['customer']['externalId'])) {
    $model->ancestor->customer->customerContacts[$index53]->customer->externalId = $jsonData['ancestor']['customer']['customerContacts'][$index53]['customer']['externalId'];

}
if (isset($jsonData['ancestor']['customer']['customerContacts'][$index53]['customer']['browserId'])) {
    $model->ancestor->customer->customerContacts[$index53]->customer->browserId = $jsonData['ancestor']['customer']['customerContacts'][$index53]['customer']['browserId'];

}
if (isset($jsonData['ancestor']['customer']['customerContacts'][$index53]['customer']['site'])) {
    $model->ancestor->customer->customerContacts[$index53]->customer->site = $jsonData['ancestor']['customer']['customerContacts'][$index53]['customer']['site'];

}
if (isset($jsonData['ancestor']['customer']['customerContacts'][$index53]['customer']['companies'])) {
    $model->ancestor->customer->customerContacts[$index53]->customer->companies = [];
foreach (array_keys($jsonData['ancestor']['customer']['customerContacts'][$index53]['customer']['companies']) as $index88) {
    
$model->ancestor->customer->customerContacts[$index53]->customer->companies[$index88] = new RetailCrm\Api\Model\Entity\CustomersCorporate\CustomerContactCompany();
if (isset($jsonData['ancestor']['customer']['customerContacts'][$index53]['customer']['companies'][$index88]['id'])) {
    $model->ancestor->customer->customerContacts[$index53]->customer->companies[$index88]->id = $jsonData['ancestor']['customer']['customerContacts'][$index53]['customer']['companies'][$index88]['id'];

}
if (isset($jsonData['ancestor']['customer']['customerContacts'][$index53]['customer']['companies'][$index88]['externalId'])) {
    $model->ancestor->customer->customerContacts[$index53]->customer->companies[$index88]->externalId = $jsonData['ancestor']['customer']['customerContacts'][$index53]['customer']['companies'][$index88]['externalId'];

}
if (isset($jsonData['ancestor']['customer']['customerContacts'][$index53]['customer']['companies'][$index88]['company'])) {
    
$model->ancestor->customer->customerContacts[$index53]->customer->companies[$index88]->company = new RetailCrm\Api\Model\Entity\CustomersCorporate\EntityWithExternalIdNameOutput();
if (isset($jsonData['ancestor']['customer']['customerContacts'][$index53]['customer']['companies'][$index88]['company']['id'])) {
    $model->ancestor->customer->customerContacts[$index53]->customer->companies[$index88]->company->id = $jsonData['ancestor']['customer']['customerContacts'][$index53]['customer']['companies'][$index88]['company']['id'];

}
if (isset($jsonData['ancestor']['customer']['customerContacts'][$index53]['customer']['companies'][$index88]['company']['externalId'])) {
    $model->ancestor->customer->customerContacts[$index53]->customer->companies[$index88]->company->externalId = $jsonData['ancestor']['customer']['customerContacts'][$index53]['customer']['companies'][$index88]['company']['externalId'];

}
if (isset($jsonData['ancestor']['customer']['customerContacts'][$index53]['customer']['companies'][$index88]['company']['name'])) {
    $model->ancestor->customer->customerContacts[$index53]->customer->companies[$index88]->company->name = $jsonData['ancestor']['customer']['customerContacts'][$index53]['customer']['companies'][$index88]['company']['name'];

}


}


}

}


}
if (isset($jsonData['ancestor']['customer']['customerContacts'][$index53]['companies'])) {
    $model->ancestor->customer->customerContacts[$index53]->companies = [];
foreach (array_keys($jsonData['ancestor']['customer']['customerContacts'][$index53]['companies']) as $index76) {
    
$model->ancestor->customer->customerContacts[$index53]->companies[$index76] = new RetailCrm\Api\Model\Entity\CustomersCorporate\CustomerContactCompany();
if (isset($jsonData['ancestor']['customer']['customerContacts'][$index53]['companies'][$index76]['id'])) {
    $model->ancestor->customer->customerContacts[$index53]->companies[$index76]->id = $jsonData['ancestor']['customer']['customerContacts'][$index53]['companies'][$index76]['id'];

}
if (isset($jsonData['ancestor']['customer']['customerContacts'][$index53]['companies'][$index76]['externalId'])) {
    $model->ancestor->customer->customerContacts[$index53]->companies[$index76]->externalId = $jsonData['ancestor']['customer']['customerContacts'][$index53]['companies'][$index76]['externalId'];

}
if (isset($jsonData['ancestor']['customer']['customerContacts'][$index53]['companies'][$index76]['company'])) {
    
$model->ancestor->customer->customerContacts[$index53]->companies[$index76]->company = new RetailCrm\Api\Model\Entity\CustomersCorporate\EntityWithExternalIdNameOutput();
if (isset($jsonData['ancestor']['customer']['customerContacts'][$index53]['companies'][$index76]['company']['id'])) {
    $model->ancestor->customer->customerContacts[$index53]->companies[$index76]->company->id = $jsonData['ancestor']['customer']['customerContacts'][$index53]['companies'][$index76]['company']['id'];

}
if (isset($jsonData['ancestor']['customer']['customerContacts'][$index53]['companies'][$index76]['company']['externalId'])) {
    $model->ancestor->customer->customerContacts[$index53]->companies[$index76]->company->externalId = $jsonData['ancestor']['customer']['customerContacts'][$index53]['companies'][$index76]['company']['externalId'];

}
if (isset($jsonData['ancestor']['customer']['customerContacts'][$index53]['companies'][$index76]['company']['name'])) {
    $model->ancestor->customer->customerContacts[$index53]->companies[$index76]->company->name = $jsonData['ancestor']['customer']['customerContacts'][$index53]['companies'][$index76]['company']['name'];

}


}


}

}


}

}
if (isset($jsonData['ancestor']['customer']['companies'])) {
    $model->ancestor->customer->companies = [];
foreach (array_keys($jsonData['ancestor']['customer']['companies']) as $index46) {
    
$model->ancestor->customer->companies[$index46] = new RetailCrm\Api\Model\Entity\CustomersCorporate\Company();
if (isset($jsonData['ancestor']['customer']['companies'][$index46]['id'])) {
    $model->ancestor->customer->companies[$index46]->id = $jsonData['ancestor']['customer']['companies'][$index46]['id'];

}
if (isset($jsonData['ancestor']['customer']['companies'][$index46]['isMain'])) {
    $model->ancestor->customer->companies[$index46]->isMain = $jsonData['ancestor']['customer']['companies'][$index46]['isMain'];

}
if (isset($jsonData['ancestor']['customer']['companies'][$index46]['externalId'])) {
    $model->ancestor->customer->companies[$index46]->externalId = $jsonData['ancestor']['customer']['companies'][$index46]['externalId'];

}
if (isset($jsonData['ancestor']['customer']['companies'][$index46]['active'])) {
    $model->ancestor->customer->companies[$index46]->active = $jsonData['ancestor']['customer']['companies'][$index46]['active'];

}
if (isset($jsonData['ancestor']['customer']['companies'][$index46]['name'])) {
    $model->ancestor->customer->companies[$index46]->name = $jsonData['ancestor']['customer']['companies'][$index46]['name'];

}
if (isset($jsonData['ancestor']['customer']['companies'][$index46]['brand'])) {
    $model->ancestor->customer->companies[$index46]->brand = $jsonData['ancestor']['customer']['companies'][$index46]['brand'];

}
if (isset($jsonData['ancestor']['customer']['companies'][$index46]['site'])) {
    $model->ancestor->customer->companies[$index46]->site = $jsonData['ancestor']['customer']['companies'][$index46]['site'];

}
if (isset($jsonData['ancestor']['customer']['companies'][$index46]['createdAt'])) {
    $model->ancestor->customer->companies[$index46]->createdAt = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['ancestor']['customer']['companies'][$index46]['createdAt']);

}
if (isset($jsonData['ancestor']['customer']['companies'][$index46]['customer'])) {
    
$model->ancestor->customer->companies[$index46]->customer = new RetailCrm\Api\Model\Entity\CustomersCorporate\SerializedEntityCustomer();
if (isset($jsonData['ancestor']['customer']['companies'][$index46]['customer']['site'])) {
    $model->ancestor->customer->companies[$index46]->customer->site = $jsonData['ancestor']['customer']['companies'][$index46]['customer']['site'];

}
if (isset($jsonData['ancestor']['customer']['companies'][$index46]['customer']['id'])) {
    $model->ancestor->customer->companies[$index46]->customer->id = $jsonData['ancestor']['customer']['companies'][$index46]['customer']['id'];

}
if (isset($jsonData['ancestor']['customer']['companies'][$index46]['customer']['externalId'])) {
    $model->ancestor->customer->companies[$index46]->customer->externalId = $jsonData['ancestor']['customer']['companies'][$index46]['customer']['externalId'];

}
if (isset($jsonData['ancestor']['customer']['companies'][$index46]['customer']['type'])) {
    $model->ancestor->customer->companies[$index46]->customer->type = $jsonData['ancestor']['customer']['companies'][$index46]['customer']['type'];

}


}
if (isset($jsonData['ancestor']['customer']['companies'][$index46]['contragent'])) {
    
$model->ancestor->customer->companies[$index46]->contragent = new RetailCrm\Api\Model\Entity\Customers\CustomerContragent();
if (isset($jsonData['ancestor']['customer']['companies'][$index46]['contragent']['contragentType'])) {
    $model->ancestor->customer->companies[$index46]->contragent->contragentType = $jsonData['ancestor']['customer']['companies'][$index46]['contragent']['contragentType'];

}
if (isset($jsonData['ancestor']['customer']['companies'][$index46]['contragent']['legalName'])) {
    $model->ancestor->customer->companies[$index46]->contragent->legalName = $jsonData['ancestor']['customer']['companies'][$index46]['contragent']['legalName'];

}
if (isset($jsonData['ancestor']['customer']['companies'][$index46]['contragent']['legalAddress'])) {
    $model->ancestor->customer->companies[$index46]->contragent->legalAddress = $jsonData['ancestor']['customer']['companies'][$index46]['contragent']['legalAddress'];

}
if (isset($jsonData['ancestor']['customer']['companies'][$index46]['contragent']['INN'])) {
    $model->ancestor->customer->companies[$index46]->contragent->INN = $jsonData['ancestor']['customer']['companies'][$index46]['contragent']['INN'];

}
if (isset($jsonData['ancestor']['customer']['companies'][$index46]['contragent']['OKPO'])) {
    $model->ancestor->customer->companies[$index46]->contragent->OKPO = $jsonData['ancestor']['customer']['companies'][$index46]['contragent']['OKPO'];

}
if (isset($jsonData['ancestor']['customer']['companies'][$index46]['contragent']['KPP'])) {
    $model->ancestor->customer->companies[$index46]->contragent->KPP = $jsonData['ancestor']['customer']['companies'][$index46]['contragent']['KPP'];

}
if (isset($jsonData['ancestor']['customer']['companies'][$index46]['contragent']['OGRN'])) {
    $model->ancestor->customer->companies[$index46]->contragent->OGRN = $jsonData['ancestor']['customer']['companies'][$index46]['contragent']['OGRN'];

}
if (isset($jsonData['ancestor']['customer']['companies'][$index46]['contragent']['OGRNIP'])) {
    $model->ancestor->customer->companies[$index46]->contragent->OGRNIP = $jsonData['ancestor']['customer']['companies'][$index46]['contragent']['OGRNIP'];

}
if (isset($jsonData['ancestor']['customer']['companies'][$index46]['contragent']['certificateNumber'])) {
    $model->ancestor->customer->companies[$index46]->contragent->certificateNumber = $jsonData['ancestor']['customer']['companies'][$index46]['contragent']['certificateNumber'];

}
if (isset($jsonData['ancestor']['customer']['companies'][$index46]['contragent']['certificateDate'])) {
    $model->ancestor->customer->companies[$index46]->contragent->certificateDate = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['ancestor']['customer']['companies'][$index46]['contragent']['certificateDate']);

}
if (isset($jsonData['ancestor']['customer']['companies'][$index46]['contragent']['BIK'])) {
    $model->ancestor->customer->companies[$index46]->contragent->BIK = $jsonData['ancestor']['customer']['companies'][$index46]['contragent']['BIK'];

}
if (isset($jsonData['ancestor']['customer']['companies'][$index46]['contragent']['bank'])) {
    $model->ancestor->customer->companies[$index46]->contragent->bank = $jsonData['ancestor']['customer']['companies'][$index46]['contragent']['bank'];

}
if (isset($jsonData['ancestor']['customer']['companies'][$index46]['contragent']['bankAddress'])) {
    $model->ancestor->customer->companies[$index46]->contragent->bankAddress = $jsonData['ancestor']['customer']['companies'][$index46]['contragent']['bankAddress'];

}
if (isset($jsonData['ancestor']['customer']['companies'][$index46]['contragent']['corrAccount'])) {
    $model->ancestor->customer->companies[$index46]->contragent->corrAccount = $jsonData['ancestor']['customer']['companies'][$index46]['contragent']['corrAccount'];

}
if (isset($jsonData['ancestor']['customer']['companies'][$index46]['contragent']['bankAccount'])) {
    $model->ancestor->customer->companies[$index46]->contragent->bankAccount = $jsonData['ancestor']['customer']['companies'][$index46]['contragent']['bankAccount'];

}


}
if (isset($jsonData['ancestor']['customer']['companies'][$index46]['address'])) {
    
$model->ancestor->customer->companies[$index46]->address = new RetailCrm\Api\Model\Entity\Customers\CustomerAddress();
if (isset($jsonData['ancestor']['customer']['companies'][$index46]['address']['id'])) {
    $model->ancestor->customer->companies[$index46]->address->id = $jsonData['ancestor']['customer']['companies'][$index46]['address']['id'];

}
if (isset($jsonData['ancestor']['customer']['companies'][$index46]['address']['name'])) {
    $model->ancestor->customer->companies[$index46]->address->name = $jsonData['ancestor']['customer']['companies'][$index46]['address']['name'];

}
if (isset($jsonData['ancestor']['customer']['companies'][$index46]['address']['isMain'])) {
    $model->ancestor->customer->companies[$index46]->address->isMain = $jsonData['ancestor']['customer']['companies'][$index46]['address']['isMain'];

}
if (isset($jsonData['ancestor']['customer']['companies'][$index46]['address']['index'])) {
    $model->ancestor->customer->companies[$index46]->address->index = $jsonData['ancestor']['customer']['companies'][$index46]['address']['index'];

}
if (isset($jsonData['ancestor']['customer']['companies'][$index46]['address']['countryIso'])) {
    $model->ancestor->customer->companies[$index46]->address->countryIso = $jsonData['ancestor']['customer']['companies'][$index46]['address']['countryIso'];

}
if (isset($jsonData['ancestor']['customer']['companies'][$index46]['address']['region'])) {
    $model->ancestor->customer->companies[$index46]->address->region = $jsonData['ancestor']['customer']['companies'][$index46]['address']['region'];

}
if (isset($jsonData['ancestor']['customer']['companies'][$index46]['address']['regionId'])) {
    $model->ancestor->customer->companies[$index46]->address->regionId = $jsonData['ancestor']['customer']['companies'][$index46]['address']['regionId'];

}
if (isset($jsonData['ancestor']['customer']['companies'][$index46]['address']['city'])) {
    $model->ancestor->customer->companies[$index46]->address->city = $jsonData['ancestor']['customer']['companies'][$index46]['address']['city'];

}
if (isset($jsonData['ancestor']['customer']['companies'][$index46]['address']['cityId'])) {
    $model->ancestor->customer->companies[$index46]->address->cityId = $jsonData['ancestor']['customer']['companies'][$index46]['address']['cityId'];

}
if (isset($jsonData['ancestor']['customer']['companies'][$index46]['address']['cityType'])) {
    $model->ancestor->customer->companies[$index46]->address->cityType = $jsonData['ancestor']['customer']['companies'][$index46]['address']['cityType'];

}
if (isset($jsonData['ancestor']['customer']['companies'][$index46]['address']['street'])) {
    $model->ancestor->customer->companies[$index46]->address->street = $jsonData['ancestor']['customer']['companies'][$index46]['address']['street'];

}
if (isset($jsonData['ancestor']['customer']['companies'][$index46]['address']['streetId'])) {
    $model->ancestor->customer->companies[$index46]->address->streetId = $jsonData['ancestor']['customer']['companies'][$index46]['address']['streetId'];

}
if (isset($jsonData['ancestor']['customer']['companies'][$index46]['address']['streetType'])) {
    $model->ancestor->customer->companies[$index46]->address->streetType = $jsonData['ancestor']['customer']['companies'][$index46]['address']['streetType'];

}
if (isset($jsonData['ancestor']['customer']['companies'][$index46]['address']['building'])) {
    $model->ancestor->customer->companies[$index46]->address->building = $jsonData['ancestor']['customer']['companies'][$index46]['address']['building'];

}
if (isset($jsonData['ancestor']['customer']['companies'][$index46]['address']['flat'])) {
    $model->ancestor->customer->companies[$index46]->address->flat = $jsonData['ancestor']['customer']['companies'][$index46]['address']['flat'];

}
if (isset($jsonData['ancestor']['customer']['companies'][$index46]['address']['floor'])) {
    $model->ancestor->customer->companies[$index46]->address->floor = $jsonData['ancestor']['customer']['companies'][$index46]['address']['floor'];

}
if (isset($jsonData['ancestor']['customer']['companies'][$index46]['address']['block'])) {
    $model->ancestor->customer->companies[$index46]->address->block = $jsonData['ancestor']['customer']['companies'][$index46]['address']['block'];

}
if (isset($jsonData['ancestor']['customer']['companies'][$index46]['address']['house'])) {
    $model->ancestor->customer->companies[$index46]->address->house = $jsonData['ancestor']['customer']['companies'][$index46]['address']['house'];

}
if (isset($jsonData['ancestor']['customer']['companies'][$index46]['address']['housing'])) {
    $model->ancestor->customer->companies[$index46]->address->housing = $jsonData['ancestor']['customer']['companies'][$index46]['address']['housing'];

}
if (isset($jsonData['ancestor']['customer']['companies'][$index46]['address']['metro'])) {
    $model->ancestor->customer->companies[$index46]->address->metro = $jsonData['ancestor']['customer']['companies'][$index46]['address']['metro'];

}
if (isset($jsonData['ancestor']['customer']['companies'][$index46]['address']['notes'])) {
    $model->ancestor->customer->companies[$index46]->address->notes = $jsonData['ancestor']['customer']['companies'][$index46]['address']['notes'];

}
if (isset($jsonData['ancestor']['customer']['companies'][$index46]['address']['text'])) {
    $model->ancestor->customer->companies[$index46]->address->text = $jsonData['ancestor']['customer']['companies'][$index46]['address']['text'];

}
if (isset($jsonData['ancestor']['customer']['companies'][$index46]['address']['externalId'])) {
    $model->ancestor->customer->companies[$index46]->address->externalId = $jsonData['ancestor']['customer']['companies'][$index46]['address']['externalId'];

}


}
if (isset($jsonData['ancestor']['customer']['companies'][$index46]['customFields'])) {
    $model->ancestor->customer->companies[$index46]->customFields = [];
foreach (array_keys($jsonData['ancestor']['customer']['companies'][$index46]['customFields']) as $index72) {
    $model->ancestor->customer->companies[$index46]->customFields[$index72] = $jsonData['ancestor']['customer']['companies'][$index46]['customFields'][$index72];

}

}
if (isset($jsonData['ancestor']['customer']['companies'][$index46]['marginSumm'])) {
    $model->ancestor->customer->companies[$index46]->marginSumm = (float) $jsonData['ancestor']['customer']['companies'][$index46]['marginSumm'];

}
if (isset($jsonData['ancestor']['customer']['companies'][$index46]['totalSumm'])) {
    $model->ancestor->customer->companies[$index46]->totalSumm = (float) $jsonData['ancestor']['customer']['companies'][$index46]['totalSumm'];

}
if (isset($jsonData['ancestor']['customer']['companies'][$index46]['averageSumm'])) {
    $model->ancestor->customer->companies[$index46]->averageSumm = (float) $jsonData['ancestor']['customer']['companies'][$index46]['averageSumm'];

}
if (isset($jsonData['ancestor']['customer']['companies'][$index46]['ordersCount'])) {
    $model->ancestor->customer->companies[$index46]->ordersCount = $jsonData['ancestor']['customer']['companies'][$index46]['ordersCount'];

}
if (isset($jsonData['ancestor']['customer']['companies'][$index46]['costSumm'])) {
    $model->ancestor->customer->companies[$index46]->costSumm = (float) $jsonData['ancestor']['customer']['companies'][$index46]['costSumm'];

}


}

}
if (isset($jsonData['ancestor']['customer']['addresses'])) {
    $model->ancestor->customer->addresses = [];
foreach (array_keys($jsonData['ancestor']['customer']['addresses']) as $index46) {
    
$model->ancestor->customer->addresses[$index46] = new RetailCrm\Api\Model\Entity\Customers\CustomerAddress();
if (isset($jsonData['ancestor']['customer']['addresses'][$index46]['id'])) {
    $model->ancestor->customer->addresses[$index46]->id = $jsonData['ancestor']['customer']['addresses'][$index46]['id'];

}
if (isset($jsonData['ancestor']['customer']['addresses'][$index46]['name'])) {
    $model->ancestor->customer->addresses[$index46]->name = $jsonData['ancestor']['customer']['addresses'][$index46]['name'];

}
if (isset($jsonData['ancestor']['customer']['addresses'][$index46]['isMain'])) {
    $model->ancestor->customer->addresses[$index46]->isMain = $jsonData['ancestor']['customer']['addresses'][$index46]['isMain'];

}
if (isset($jsonData['ancestor']['customer']['addresses'][$index46]['index'])) {
    $model->ancestor->customer->addresses[$index46]->index = $jsonData['ancestor']['customer']['addresses'][$index46]['index'];

}
if (isset($jsonData['ancestor']['customer']['addresses'][$index46]['countryIso'])) {
    $model->ancestor->customer->addresses[$index46]->countryIso = $jsonData['ancestor']['customer']['addresses'][$index46]['countryIso'];

}
if (isset($jsonData['ancestor']['customer']['addresses'][$index46]['region'])) {
    $model->ancestor->customer->addresses[$index46]->region = $jsonData['ancestor']['customer']['addresses'][$index46]['region'];

}
if (isset($jsonData['ancestor']['customer']['addresses'][$index46]['regionId'])) {
    $model->ancestor->customer->addresses[$index46]->regionId = $jsonData['ancestor']['customer']['addresses'][$index46]['regionId'];

}
if (isset($jsonData['ancestor']['customer']['addresses'][$index46]['city'])) {
    $model->ancestor->customer->addresses[$index46]->city = $jsonData['ancestor']['customer']['addresses'][$index46]['city'];

}
if (isset($jsonData['ancestor']['customer']['addresses'][$index46]['cityId'])) {
    $model->ancestor->customer->addresses[$index46]->cityId = $jsonData['ancestor']['customer']['addresses'][$index46]['cityId'];

}
if (isset($jsonData['ancestor']['customer']['addresses'][$index46]['cityType'])) {
    $model->ancestor->customer->addresses[$index46]->cityType = $jsonData['ancestor']['customer']['addresses'][$index46]['cityType'];

}
if (isset($jsonData['ancestor']['customer']['addresses'][$index46]['street'])) {
    $model->ancestor->customer->addresses[$index46]->street = $jsonData['ancestor']['customer']['addresses'][$index46]['street'];

}
if (isset($jsonData['ancestor']['customer']['addresses'][$index46]['streetId'])) {
    $model->ancestor->customer->addresses[$index46]->streetId = $jsonData['ancestor']['customer']['addresses'][$index46]['streetId'];

}
if (isset($jsonData['ancestor']['customer']['addresses'][$index46]['streetType'])) {
    $model->ancestor->customer->addresses[$index46]->streetType = $jsonData['ancestor']['customer']['addresses'][$index46]['streetType'];

}
if (isset($jsonData['ancestor']['customer']['addresses'][$index46]['building'])) {
    $model->ancestor->customer->addresses[$index46]->building = $jsonData['ancestor']['customer']['addresses'][$index46]['building'];

}
if (isset($jsonData['ancestor']['customer']['addresses'][$index46]['flat'])) {
    $model->ancestor->customer->addresses[$index46]->flat = $jsonData['ancestor']['customer']['addresses'][$index46]['flat'];

}
if (isset($jsonData['ancestor']['customer']['addresses'][$index46]['floor'])) {
    $model->ancestor->customer->addresses[$index46]->floor = $jsonData['ancestor']['customer']['addresses'][$index46]['floor'];

}
if (isset($jsonData['ancestor']['customer']['addresses'][$index46]['block'])) {
    $model->ancestor->customer->addresses[$index46]->block = $jsonData['ancestor']['customer']['addresses'][$index46]['block'];

}
if (isset($jsonData['ancestor']['customer']['addresses'][$index46]['house'])) {
    $model->ancestor->customer->addresses[$index46]->house = $jsonData['ancestor']['customer']['addresses'][$index46]['house'];

}
if (isset($jsonData['ancestor']['customer']['addresses'][$index46]['housing'])) {
    $model->ancestor->customer->addresses[$index46]->housing = $jsonData['ancestor']['customer']['addresses'][$index46]['housing'];

}
if (isset($jsonData['ancestor']['customer']['addresses'][$index46]['metro'])) {
    $model->ancestor->customer->addresses[$index46]->metro = $jsonData['ancestor']['customer']['addresses'][$index46]['metro'];

}
if (isset($jsonData['ancestor']['customer']['addresses'][$index46]['notes'])) {
    $model->ancestor->customer->addresses[$index46]->notes = $jsonData['ancestor']['customer']['addresses'][$index46]['notes'];

}
if (isset($jsonData['ancestor']['customer']['addresses'][$index46]['text'])) {
    $model->ancestor->customer->addresses[$index46]->text = $jsonData['ancestor']['customer']['addresses'][$index46]['text'];

}
if (isset($jsonData['ancestor']['customer']['addresses'][$index46]['externalId'])) {
    $model->ancestor->customer->addresses[$index46]->externalId = $jsonData['ancestor']['customer']['addresses'][$index46]['externalId'];

}


}

}
if (isset($jsonData['ancestor']['customer']['vip'])) {
    $model->ancestor->customer->vip = $jsonData['ancestor']['customer']['vip'];

}
if (isset($jsonData['ancestor']['customer']['bad'])) {
    $model->ancestor->customer->bad = $jsonData['ancestor']['customer']['bad'];

}
if (isset($jsonData['ancestor']['customer']['site'])) {
    $model->ancestor->customer->site = $jsonData['ancestor']['customer']['site'];

}
if (isset($jsonData['ancestor']['customer']['tags'])) {
    $model->ancestor->customer->tags = [];
foreach (array_keys($jsonData['ancestor']['customer']['tags']) as $index41) {
    
$model->ancestor->customer->tags[$index41] = new RetailCrm\Api\Model\Entity\Customers\CustomerTag();
if (isset($jsonData['ancestor']['customer']['tags'][$index41]['name'])) {
    $model->ancestor->customer->tags[$index41]->name = $jsonData['ancestor']['customer']['tags'][$index41]['name'];

}
if (isset($jsonData['ancestor']['customer']['tags'][$index41]['color'])) {
    $model->ancestor->customer->tags[$index41]->color = $jsonData['ancestor']['customer']['tags'][$index41]['color'];

}
if (isset($jsonData['ancestor']['customer']['tags'][$index41]['attached'])) {
    $model->ancestor->customer->tags[$index41]->attached = $jsonData['ancestor']['customer']['tags'][$index41]['attached'];

}


}

}
if (isset($jsonData['ancestor']['customer']['avgMarginSumm'])) {
    $model->ancestor->customer->avgMarginSumm = (float) $jsonData['ancestor']['customer']['avgMarginSumm'];

}
if (isset($jsonData['ancestor']['customer']['marginSumm'])) {
    $model->ancestor->customer->marginSumm = (float) $jsonData['ancestor']['customer']['marginSumm'];

}
if (isset($jsonData['ancestor']['customer']['totalSumm'])) {
    $model->ancestor->customer->totalSumm = (float) $jsonData['ancestor']['customer']['totalSumm'];

}
if (isset($jsonData['ancestor']['customer']['averageSumm'])) {
    $model->ancestor->customer->averageSumm = (float) $jsonData['ancestor']['customer']['averageSumm'];

}
if (isset($jsonData['ancestor']['customer']['ordersCount'])) {
    $model->ancestor->customer->ordersCount = $jsonData['ancestor']['customer']['ordersCount'];

}
if (isset($jsonData['ancestor']['customer']['costSumm'])) {
    $model->ancestor->customer->costSumm = (float) $jsonData['ancestor']['customer']['costSumm'];

}
if (isset($jsonData['ancestor']['customer']['customFields'])) {
    $model->ancestor->customer->customFields = [];
foreach (array_keys($jsonData['ancestor']['customer']['customFields']) as $index49) {
    $model->ancestor->customer->customFields[$index49] = $jsonData['ancestor']['customer']['customFields'][$index49];

}

}
if (isset($jsonData['ancestor']['customer']['personalDiscount'])) {
    $model->ancestor->customer->personalDiscount = (float) $jsonData['ancestor']['customer']['personalDiscount'];

}
if (isset($jsonData['ancestor']['customer']['cumulativeDiscount'])) {
    $model->ancestor->customer->cumulativeDiscount = (float) $jsonData['ancestor']['customer']['cumulativeDiscount'];

}
if (isset($jsonData['ancestor']['customer']['discountCardNumber'])) {
    $model->ancestor->customer->discountCardNumber = $jsonData['ancestor']['customer']['discountCardNumber'];

}
if (isset($jsonData['ancestor']['customer']['firstClientId'])) {
    $model->ancestor->customer->firstClientId = $jsonData['ancestor']['customer']['firstClientId'];

}
if (isset($jsonData['ancestor']['customer']['lastClientId'])) {
    $model->ancestor->customer->lastClientId = $jsonData['ancestor']['customer']['lastClientId'];

}
if (isset($jsonData['ancestor']['customer']['mainCustomerContact'])) {
    
$model->ancestor->customer->mainCustomerContact = new RetailCrm\Api\Model\Entity\CustomersCorporate\CustomerContact();
if (isset($jsonData['ancestor']['customer']['mainCustomerContact']['id'])) {
    $model->ancestor->customer->mainCustomerContact->id = $jsonData['ancestor']['customer']['mainCustomerContact']['id'];

}
if (isset($jsonData['ancestor']['customer']['mainCustomerContact']['isMain'])) {
    $model->ancestor->customer->mainCustomerContact->isMain = $jsonData['ancestor']['customer']['mainCustomerContact']['isMain'];

}
if (isset($jsonData['ancestor']['customer']['mainCustomerContact']['customer'])) {
    
$model->ancestor->customer->mainCustomerContact->customer = new RetailCrm\Api\Model\Entity\CustomersCorporate\SerializedRelationAbstractCustomer();
if (isset($jsonData['ancestor']['customer']['mainCustomerContact']['customer']['id'])) {
    $model->ancestor->customer->mainCustomerContact->customer->id = $jsonData['ancestor']['customer']['mainCustomerContact']['customer']['id'];

}
if (isset($jsonData['ancestor']['customer']['mainCustomerContact']['customer']['externalId'])) {
    $model->ancestor->customer->mainCustomerContact->customer->externalId = $jsonData['ancestor']['customer']['mainCustomerContact']['customer']['externalId'];

}
if (isset($jsonData['ancestor']['customer']['mainCustomerContact']['customer']['browserId'])) {
    $model->ancestor->customer->mainCustomerContact->customer->browserId = $jsonData['ancestor']['customer']['mainCustomerContact']['customer']['browserId'];

}
if (isset($jsonData['ancestor']['customer']['mainCustomerContact']['customer']['site'])) {
    $model->ancestor->customer->mainCustomerContact->customer->site = $jsonData['ancestor']['customer']['mainCustomerContact']['customer']['site'];

}
if (isset($jsonData['ancestor']['customer']['mainCustomerContact']['customer']['companies'])) {
    $model->ancestor->customer->mainCustomerContact->customer->companies = [];
foreach (array_keys($jsonData['ancestor']['customer']['mainCustomerContact']['customer']['companies']) as $index81) {
    
$model->ancestor->customer->mainCustomerContact->customer->companies[$index81] = new RetailCrm\Api\Model\Entity\CustomersCorporate\CustomerContactCompany();
if (isset($jsonData['ancestor']['customer']['mainCustomerContact']['customer']['companies'][$index81]['id'])) {
    $model->ancestor->customer->mainCustomerContact->customer->companies[$index81]->id = $jsonData['ancestor']['customer']['mainCustomerContact']['customer']['companies'][$index81]['id'];

}
if (isset($jsonData['ancestor']['customer']['mainCustomerContact']['customer']['companies'][$index81]['externalId'])) {
    $model->ancestor->customer->mainCustomerContact->customer->companies[$index81]->externalId = $jsonData['ancestor']['customer']['mainCustomerContact']['customer']['companies'][$index81]['externalId'];

}
if (isset($jsonData['ancestor']['customer']['mainCustomerContact']['customer']['companies'][$index81]['company'])) {
    
$model->ancestor->customer->mainCustomerContact->customer->companies[$index81]->company = new RetailCrm\Api\Model\Entity\CustomersCorporate\EntityWithExternalIdNameOutput();
if (isset($jsonData['ancestor']['customer']['mainCustomerContact']['customer']['companies'][$index81]['company']['id'])) {
    $model->ancestor->customer->mainCustomerContact->customer->companies[$index81]->company->id = $jsonData['ancestor']['customer']['mainCustomerContact']['customer']['companies'][$index81]['company']['id'];

}
if (isset($jsonData['ancestor']['customer']['mainCustomerContact']['customer']['companies'][$index81]['company']['externalId'])) {
    $model->ancestor->customer->mainCustomerContact->customer->companies[$index81]->company->externalId = $jsonData['ancestor']['customer']['mainCustomerContact']['customer']['companies'][$index81]['company']['externalId'];

}
if (isset($jsonData['ancestor']['customer']['mainCustomerContact']['customer']['companies'][$index81]['company']['name'])) {
    $model->ancestor->customer->mainCustomerContact->customer->companies[$index81]->company->name = $jsonData['ancestor']['customer']['mainCustomerContact']['customer']['companies'][$index81]['company']['name'];

}


}


}

}


}
if (isset($jsonData['ancestor']['customer']['mainCustomerContact']['companies'])) {
    $model->ancestor->customer->mainCustomerContact->companies = [];
foreach (array_keys($jsonData['ancestor']['customer']['mainCustomerContact']['companies']) as $index69) {
    
$model->ancestor->customer->mainCustomerContact->companies[$index69] = new RetailCrm\Api\Model\Entity\CustomersCorporate\CustomerContactCompany();
if (isset($jsonData['ancestor']['customer']['mainCustomerContact']['companies'][$index69]['id'])) {
    $model->ancestor->customer->mainCustomerContact->companies[$index69]->id = $jsonData['ancestor']['customer']['mainCustomerContact']['companies'][$index69]['id'];

}
if (isset($jsonData['ancestor']['customer']['mainCustomerContact']['companies'][$index69]['externalId'])) {
    $model->ancestor->customer->mainCustomerContact->companies[$index69]->externalId = $jsonData['ancestor']['customer']['mainCustomerContact']['companies'][$index69]['externalId'];

}
if (isset($jsonData['ancestor']['customer']['mainCustomerContact']['companies'][$index69]['company'])) {
    
$model->ancestor->customer->mainCustomerContact->companies[$index69]->company = new RetailCrm\Api\Model\Entity\CustomersCorporate\EntityWithExternalIdNameOutput();
if (isset($jsonData['ancestor']['customer']['mainCustomerContact']['companies'][$index69]['company']['id'])) {
    $model->ancestor->customer->mainCustomerContact->companies[$index69]->company->id = $jsonData['ancestor']['customer']['mainCustomerContact']['companies'][$index69]['company']['id'];

}
if (isset($jsonData['ancestor']['customer']['mainCustomerContact']['companies'][$index69]['company']['externalId'])) {
    $model->ancestor->customer->mainCustomerContact->companies[$index69]->company->externalId = $jsonData['ancestor']['customer']['mainCustomerContact']['companies'][$index69]['company']['externalId'];

}
if (isset($jsonData['ancestor']['customer']['mainCustomerContact']['companies'][$index69]['company']['name'])) {
    $model->ancestor->customer->mainCustomerContact->companies[$index69]->company->name = $jsonData['ancestor']['customer']['mainCustomerContact']['companies'][$index69]['company']['name'];

}


}


}

}


}
if (isset($jsonData['ancestor']['customer']['mainCompany'])) {
    
$model->ancestor->customer->mainCompany = new RetailCrm\Api\Model\Entity\CustomersCorporate\EntityWithExternalIdNameOutput();
if (isset($jsonData['ancestor']['customer']['mainCompany']['id'])) {
    $model->ancestor->customer->mainCompany->id = $jsonData['ancestor']['customer']['mainCompany']['id'];

}
if (isset($jsonData['ancestor']['customer']['mainCompany']['externalId'])) {
    $model->ancestor->customer->mainCompany->externalId = $jsonData['ancestor']['customer']['mainCompany']['externalId'];

}
if (isset($jsonData['ancestor']['customer']['mainCompany']['name'])) {
    $model->ancestor->customer->mainCompany->name = $jsonData['ancestor']['customer']['mainCompany']['name'];

}


}


} else {
    
$model->ancestor->customer = new RetailCrm\Api\Model\Entity\Customers\Customer();
if (isset($jsonData['ancestor']['customer']['type'])) {
    $model->ancestor->customer->type = $jsonData['ancestor']['customer']['type'];

}
if (isset($jsonData['ancestor']['customer']['id'])) {
    $model->ancestor->customer->id = $jsonData['ancestor']['customer']['id'];

}
if (isset($jsonData['ancestor']['customer']['externalId'])) {
    $model->ancestor->customer->externalId = $jsonData['ancestor']['customer']['externalId'];

}
if (isset($jsonData['ancestor']['customer']['isContact'])) {
    $model->ancestor->customer->isContact = $jsonData['ancestor']['customer']['isContact'];

}
if (isset($jsonData['ancestor']['customer']['createdAt'])) {
    $model->ancestor->customer->createdAt = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['ancestor']['customer']['createdAt']);

}
if (isset($jsonData['ancestor']['customer']['managerId'])) {
    $model->ancestor->customer->managerId = $jsonData['ancestor']['customer']['managerId'];

}
if (isset($jsonData['ancestor']['customer']['vip'])) {
    $model->ancestor->customer->vip = $jsonData['ancestor']['customer']['vip'];

}
if (isset($jsonData['ancestor']['customer']['bad'])) {
    $model->ancestor->customer->bad = $jsonData['ancestor']['customer']['bad'];

}
if (isset($jsonData['ancestor']['customer']['browserId'])) {
    $model->ancestor->customer->browserId = $jsonData['ancestor']['customer']['browserId'];

}
if (isset($jsonData['ancestor']['customer']['site'])) {
    $model->ancestor->customer->site = $jsonData['ancestor']['customer']['site'];

}
if (isset($jsonData['ancestor']['customer']['contragent'])) {
    
$model->ancestor->customer->contragent = new RetailCrm\Api\Model\Entity\Customers\CustomerContragent();
if (isset($jsonData['ancestor']['customer']['contragent']['contragentType'])) {
    $model->ancestor->customer->contragent->contragentType = $jsonData['ancestor']['customer']['contragent']['contragentType'];

}
if (isset($jsonData['ancestor']['customer']['contragent']['legalName'])) {
    $model->ancestor->customer->contragent->legalName = $jsonData['ancestor']['customer']['contragent']['legalName'];

}
if (isset($jsonData['ancestor']['customer']['contragent']['legalAddress'])) {
    $model->ancestor->customer->contragent->legalAddress = $jsonData['ancestor']['customer']['contragent']['legalAddress'];

}
if (isset($jsonData['ancestor']['customer']['contragent']['INN'])) {
    $model->ancestor->customer->contragent->INN = $jsonData['ancestor']['customer']['contragent']['INN'];

}
if (isset($jsonData['ancestor']['customer']['contragent']['OKPO'])) {
    $model->ancestor->customer->contragent->OKPO = $jsonData['ancestor']['customer']['contragent']['OKPO'];

}
if (isset($jsonData['ancestor']['customer']['contragent']['KPP'])) {
    $model->ancestor->customer->contragent->KPP = $jsonData['ancestor']['customer']['contragent']['KPP'];

}
if (isset($jsonData['ancestor']['customer']['contragent']['OGRN'])) {
    $model->ancestor->customer->contragent->OGRN = $jsonData['ancestor']['customer']['contragent']['OGRN'];

}
if (isset($jsonData['ancestor']['customer']['contragent']['OGRNIP'])) {
    $model->ancestor->customer->contragent->OGRNIP = $jsonData['ancestor']['customer']['contragent']['OGRNIP'];

}
if (isset($jsonData['ancestor']['customer']['contragent']['certificateNumber'])) {
    $model->ancestor->customer->contragent->certificateNumber = $jsonData['ancestor']['customer']['contragent']['certificateNumber'];

}
if (isset($jsonData['ancestor']['customer']['contragent']['certificateDate'])) {
    $model->ancestor->customer->contragent->certificateDate = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['ancestor']['customer']['contragent']['certificateDate']);

}
if (isset($jsonData['ancestor']['customer']['contragent']['BIK'])) {
    $model->ancestor->customer->contragent->BIK = $jsonData['ancestor']['customer']['contragent']['BIK'];

}
if (isset($jsonData['ancestor']['customer']['contragent']['bank'])) {
    $model->ancestor->customer->contragent->bank = $jsonData['ancestor']['customer']['contragent']['bank'];

}
if (isset($jsonData['ancestor']['customer']['contragent']['bankAddress'])) {
    $model->ancestor->customer->contragent->bankAddress = $jsonData['ancestor']['customer']['contragent']['bankAddress'];

}
if (isset($jsonData['ancestor']['customer']['contragent']['corrAccount'])) {
    $model->ancestor->customer->contragent->corrAccount = $jsonData['ancestor']['customer']['contragent']['corrAccount'];

}
if (isset($jsonData['ancestor']['customer']['contragent']['bankAccount'])) {
    $model->ancestor->customer->contragent->bankAccount = $jsonData['ancestor']['customer']['contragent']['bankAccount'];

}


}
if (isset($jsonData['ancestor']['customer']['tags'])) {
    $model->ancestor->customer->tags = [];
foreach (array_keys($jsonData['ancestor']['customer']['tags']) as $index41) {
    
$model->ancestor->customer->tags[$index41] = new RetailCrm\Api\Model\Entity\Customers\CustomerTag();
if (isset($jsonData['ancestor']['customer']['tags'][$index41]['name'])) {
    $model->ancestor->customer->tags[$index41]->name = $jsonData['ancestor']['customer']['tags'][$index41]['name'];

}
if (isset($jsonData['ancestor']['customer']['tags'][$index41]['color'])) {
    $model->ancestor->customer->tags[$index41]->color = $jsonData['ancestor']['customer']['tags'][$index41]['color'];

}
if (isset($jsonData['ancestor']['customer']['tags'][$index41]['attached'])) {
    $model->ancestor->customer->tags[$index41]->attached = $jsonData['ancestor']['customer']['tags'][$index41]['attached'];

}


}

}
if (isset($jsonData['ancestor']['customer']['avgMarginSumm'])) {
    $model->ancestor->customer->avgMarginSumm = (float) $jsonData['ancestor']['customer']['avgMarginSumm'];

}
if (isset($jsonData['ancestor']['customer']['marginSumm'])) {
    $model->ancestor->customer->marginSumm = (float) $jsonData['ancestor']['customer']['marginSumm'];

}
if (isset($jsonData['ancestor']['customer']['totalSumm'])) {
    $model->ancestor->customer->totalSumm = (float) $jsonData['ancestor']['customer']['totalSumm'];

}
if (isset($jsonData['ancestor']['customer']['averageSumm'])) {
    $model->ancestor->customer->averageSumm = (float) $jsonData['ancestor']['customer']['averageSumm'];

}
if (isset($jsonData['ancestor']['customer']['ordersCount'])) {
    $model->ancestor->customer->ordersCount = $jsonData['ancestor']['customer']['ordersCount'];

}
if (isset($jsonData['ancestor']['customer']['costSumm'])) {
    $model->ancestor->customer->costSumm = (float) $jsonData['ancestor']['customer']['costSumm'];

}
if (isset($jsonData['ancestor']['customer']['customFields'])) {
    $model->ancestor->customer->customFields = [];
foreach (array_keys($jsonData['ancestor']['customer']['customFields']) as $index49) {
    $model->ancestor->customer->customFields[$index49] = $jsonData['ancestor']['customer']['customFields'][$index49];

}

}
if (isset($jsonData['ancestor']['customer']['personalDiscount'])) {
    $model->ancestor->customer->personalDiscount = (float) $jsonData['ancestor']['customer']['personalDiscount'];

}
if (isset($jsonData['ancestor']['customer']['cumulativeDiscount'])) {
    $model->ancestor->customer->cumulativeDiscount = (float) $jsonData['ancestor']['customer']['cumulativeDiscount'];

}
if (isset($jsonData['ancestor']['customer']['discountCardNumber'])) {
    $model->ancestor->customer->discountCardNumber = $jsonData['ancestor']['customer']['discountCardNumber'];

}
if (isset($jsonData['ancestor']['customer']['firstClientId'])) {
    $model->ancestor->customer->firstClientId = $jsonData['ancestor']['customer']['firstClientId'];

}
if (isset($jsonData['ancestor']['customer']['lastClientId'])) {
    $model->ancestor->customer->lastClientId = $jsonData['ancestor']['customer']['lastClientId'];

}
if (isset($jsonData['ancestor']['customer']['address'])) {
    
$model->ancestor->customer->address = new RetailCrm\Api\Model\Entity\Customers\CustomerAddress();
if (isset($jsonData['ancestor']['customer']['address']['id'])) {
    $model->ancestor->customer->address->id = $jsonData['ancestor']['customer']['address']['id'];

}
if (isset($jsonData['ancestor']['customer']['address']['name'])) {
    $model->ancestor->customer->address->name = $jsonData['ancestor']['customer']['address']['name'];

}
if (isset($jsonData['ancestor']['customer']['address']['isMain'])) {
    $model->ancestor->customer->address->isMain = $jsonData['ancestor']['customer']['address']['isMain'];

}
if (isset($jsonData['ancestor']['customer']['address']['index'])) {
    $model->ancestor->customer->address->index = $jsonData['ancestor']['customer']['address']['index'];

}
if (isset($jsonData['ancestor']['customer']['address']['countryIso'])) {
    $model->ancestor->customer->address->countryIso = $jsonData['ancestor']['customer']['address']['countryIso'];

}
if (isset($jsonData['ancestor']['customer']['address']['region'])) {
    $model->ancestor->customer->address->region = $jsonData['ancestor']['customer']['address']['region'];

}
if (isset($jsonData['ancestor']['customer']['address']['regionId'])) {
    $model->ancestor->customer->address->regionId = $jsonData['ancestor']['customer']['address']['regionId'];

}
if (isset($jsonData['ancestor']['customer']['address']['city'])) {
    $model->ancestor->customer->address->city = $jsonData['ancestor']['customer']['address']['city'];

}
if (isset($jsonData['ancestor']['customer']['address']['cityId'])) {
    $model->ancestor->customer->address->cityId = $jsonData['ancestor']['customer']['address']['cityId'];

}
if (isset($jsonData['ancestor']['customer']['address']['cityType'])) {
    $model->ancestor->customer->address->cityType = $jsonData['ancestor']['customer']['address']['cityType'];

}
if (isset($jsonData['ancestor']['customer']['address']['street'])) {
    $model->ancestor->customer->address->street = $jsonData['ancestor']['customer']['address']['street'];

}
if (isset($jsonData['ancestor']['customer']['address']['streetId'])) {
    $model->ancestor->customer->address->streetId = $jsonData['ancestor']['customer']['address']['streetId'];

}
if (isset($jsonData['ancestor']['customer']['address']['streetType'])) {
    $model->ancestor->customer->address->streetType = $jsonData['ancestor']['customer']['address']['streetType'];

}
if (isset($jsonData['ancestor']['customer']['address']['building'])) {
    $model->ancestor->customer->address->building = $jsonData['ancestor']['customer']['address']['building'];

}
if (isset($jsonData['ancestor']['customer']['address']['flat'])) {
    $model->ancestor->customer->address->flat = $jsonData['ancestor']['customer']['address']['flat'];

}
if (isset($jsonData['ancestor']['customer']['address']['floor'])) {
    $model->ancestor->customer->address->floor = $jsonData['ancestor']['customer']['address']['floor'];

}
if (isset($jsonData['ancestor']['customer']['address']['block'])) {
    $model->ancestor->customer->address->block = $jsonData['ancestor']['customer']['address']['block'];

}
if (isset($jsonData['ancestor']['customer']['address']['house'])) {
    $model->ancestor->customer->address->house = $jsonData['ancestor']['customer']['address']['house'];

}
if (isset($jsonData['ancestor']['customer']['address']['housing'])) {
    $model->ancestor->customer->address->housing = $jsonData['ancestor']['customer']['address']['housing'];

}
if (isset($jsonData['ancestor']['customer']['address']['metro'])) {
    $model->ancestor->customer->address->metro = $jsonData['ancestor']['customer']['address']['metro'];

}
if (isset($jsonData['ancestor']['customer']['address']['notes'])) {
    $model->ancestor->customer->address->notes = $jsonData['ancestor']['customer']['address']['notes'];

}
if (isset($jsonData['ancestor']['customer']['address']['text'])) {
    $model->ancestor->customer->address->text = $jsonData['ancestor']['customer']['address']['text'];

}
if (isset($jsonData['ancestor']['customer']['address']['externalId'])) {
    $model->ancestor->customer->address->externalId = $jsonData['ancestor']['customer']['address']['externalId'];

}


}
if (isset($jsonData['ancestor']['customer']['segments'])) {
    $model->ancestor->customer->segments = [];
foreach (array_keys($jsonData['ancestor']['customer']['segments']) as $index45) {
    
$model->ancestor->customer->segments[$index45] = new RetailCrm\Api\Model\Entity\Customers\Segment();
if (isset($jsonData['ancestor']['customer']['segments'][$index45]['id'])) {
    $model->ancestor->customer->segments[$index45]->id = $jsonData['ancestor']['customer']['segments'][$index45]['id'];

}
if (isset($jsonData['ancestor']['customer']['segments'][$index45]['code'])) {
    $model->ancestor->customer->segments[$index45]->code = $jsonData['ancestor']['customer']['segments'][$index45]['code'];

}
if (isset($jsonData['ancestor']['customer']['segments'][$index45]['name'])) {
    $model->ancestor->customer->segments[$index45]->name = $jsonData['ancestor']['customer']['segments'][$index45]['name'];

}
if (isset($jsonData['ancestor']['customer']['segments'][$index45]['createdAt'])) {
    $model->ancestor->customer->segments[$index45]->createdAt = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['ancestor']['customer']['segments'][$index45]['createdAt']);

}
if (isset($jsonData['ancestor']['customer']['segments'][$index45]['isDynamic'])) {
    $model->ancestor->customer->segments[$index45]->isDynamic = $jsonData['ancestor']['customer']['segments'][$index45]['isDynamic'];

}
if (isset($jsonData['ancestor']['customer']['segments'][$index45]['customersCount'])) {
    $model->ancestor->customer->segments[$index45]->customersCount = $jsonData['ancestor']['customer']['segments'][$index45]['customersCount'];

}
if (isset($jsonData['ancestor']['customer']['segments'][$index45]['active'])) {
    $model->ancestor->customer->segments[$index45]->active = $jsonData['ancestor']['customer']['segments'][$index45]['active'];

}


}

}
if (isset($jsonData['ancestor']['customer']['maturationTime'])) {
    $model->ancestor->customer->maturationTime = $jsonData['ancestor']['customer']['maturationTime'];

}
if (isset($jsonData['ancestor']['customer']['firstName'])) {
    $model->ancestor->customer->firstName = $jsonData['ancestor']['customer']['firstName'];

}
if (isset($jsonData['ancestor']['customer']['lastName'])) {
    $model->ancestor->customer->lastName = $jsonData['ancestor']['customer']['lastName'];

}
if (isset($jsonData['ancestor']['customer']['patronymic'])) {
    $model->ancestor->customer->patronymic = $jsonData['ancestor']['customer']['patronymic'];

}
if (isset($jsonData['ancestor']['customer']['sex'])) {
    $model->ancestor->customer->sex = $jsonData['ancestor']['customer']['sex'];

}
if (isset($jsonData['ancestor']['customer']['presumableSex'])) {
    $model->ancestor->customer->presumableSex = $jsonData['ancestor']['customer']['presumableSex'];

}
if (isset($jsonData['ancestor']['customer']['email'])) {
    $model->ancestor->customer->email = $jsonData['ancestor']['customer']['email'];

}
if (isset($jsonData['ancestor']['customer']['emailMarketingUnsubscribedAt'])) {
    $model->ancestor->customer->emailMarketingUnsubscribedAt = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['ancestor']['customer']['emailMarketingUnsubscribedAt']);

}
if (isset($jsonData['ancestor']['customer']['phones'])) {
    $model->ancestor->customer->phones = [];
foreach (array_keys($jsonData['ancestor']['customer']['phones']) as $index43) {
    
$model->ancestor->customer->phones[$index43] = new RetailCrm\Api\Model\Entity\Customers\CustomerPhone();
if (isset($jsonData['ancestor']['customer']['phones'][$index43]['number'])) {
    $model->ancestor->customer->phones[$index43]->number = $jsonData['ancestor']['customer']['phones'][$index43]['number'];

}


}

}
if (isset($jsonData['ancestor']['customer']['birthday'])) {
    $model->ancestor->customer->birthday = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['ancestor']['customer']['birthday']);

}
if (isset($jsonData['ancestor']['customer']['source'])) {
    
$model->ancestor->customer->source = new RetailCrm\Api\Model\Entity\Source();
if (isset($jsonData['ancestor']['customer']['source']['source'])) {
    $model->ancestor->customer->source->source = $jsonData['ancestor']['customer']['source']['source'];

}
if (isset($jsonData['ancestor']['customer']['source']['medium'])) {
    $model->ancestor->customer->source->medium = $jsonData['ancestor']['customer']['source']['medium'];

}
if (isset($jsonData['ancestor']['customer']['source']['campaign'])) {
    $model->ancestor->customer->source->campaign = $jsonData['ancestor']['customer']['source']['campaign'];

}
if (isset($jsonData['ancestor']['customer']['source']['keyword'])) {
    $model->ancestor->customer->source->keyword = $jsonData['ancestor']['customer']['source']['keyword'];

}
if (isset($jsonData['ancestor']['customer']['source']['content'])) {
    $model->ancestor->customer->source->content = $jsonData['ancestor']['customer']['source']['content'];

}


}
if (isset($jsonData['ancestor']['customer']['photoUrl'])) {
    $model->ancestor->customer->photoUrl = $jsonData['ancestor']['customer']['photoUrl'];

}
if (isset($jsonData['ancestor']['customer']['mgCustomerId'])) {
    $model->ancestor->customer->mgCustomerId = $jsonData['ancestor']['customer']['mgCustomerId'];

}
if (isset($jsonData['ancestor']['customer']['subscribed'])) {
    $model->ancestor->customer->subscribed = $jsonData['ancestor']['customer']['subscribed'];

}


}

}
if (isset($jsonData['ancestor']['contact'])) {
    
$model->ancestor->contact = new RetailCrm\Api\Model\Entity\Customers\Customer();
if (isset($jsonData['ancestor']['contact']['type'])) {
    $model->ancestor->contact->type = $jsonData['ancestor']['contact']['type'];

}
if (isset($jsonData['ancestor']['contact']['id'])) {
    $model->ancestor->contact->id = $jsonData['ancestor']['contact']['id'];

}
if (isset($jsonData['ancestor']['contact']['externalId'])) {
    $model->ancestor->contact->externalId = $jsonData['ancestor']['contact']['externalId'];

}
if (isset($jsonData['ancestor']['contact']['isContact'])) {
    $model->ancestor->contact->isContact = $jsonData['ancestor']['contact']['isContact'];

}
if (isset($jsonData['ancestor']['contact']['createdAt'])) {
    $model->ancestor->contact->createdAt = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['ancestor']['contact']['createdAt']);

}
if (isset($jsonData['ancestor']['contact']['managerId'])) {
    $model->ancestor->contact->managerId = $jsonData['ancestor']['contact']['managerId'];

}
if (isset($jsonData['ancestor']['contact']['vip'])) {
    $model->ancestor->contact->vip = $jsonData['ancestor']['contact']['vip'];

}
if (isset($jsonData['ancestor']['contact']['bad'])) {
    $model->ancestor->contact->bad = $jsonData['ancestor']['contact']['bad'];

}
if (isset($jsonData['ancestor']['contact']['browserId'])) {
    $model->ancestor->contact->browserId = $jsonData['ancestor']['contact']['browserId'];

}
if (isset($jsonData['ancestor']['contact']['site'])) {
    $model->ancestor->contact->site = $jsonData['ancestor']['contact']['site'];

}
if (isset($jsonData['ancestor']['contact']['contragent'])) {
    
$model->ancestor->contact->contragent = new RetailCrm\Api\Model\Entity\Customers\CustomerContragent();
if (isset($jsonData['ancestor']['contact']['contragent']['contragentType'])) {
    $model->ancestor->contact->contragent->contragentType = $jsonData['ancestor']['contact']['contragent']['contragentType'];

}
if (isset($jsonData['ancestor']['contact']['contragent']['legalName'])) {
    $model->ancestor->contact->contragent->legalName = $jsonData['ancestor']['contact']['contragent']['legalName'];

}
if (isset($jsonData['ancestor']['contact']['contragent']['legalAddress'])) {
    $model->ancestor->contact->contragent->legalAddress = $jsonData['ancestor']['contact']['contragent']['legalAddress'];

}
if (isset($jsonData['ancestor']['contact']['contragent']['INN'])) {
    $model->ancestor->contact->contragent->INN = $jsonData['ancestor']['contact']['contragent']['INN'];

}
if (isset($jsonData['ancestor']['contact']['contragent']['OKPO'])) {
    $model->ancestor->contact->contragent->OKPO = $jsonData['ancestor']['contact']['contragent']['OKPO'];

}
if (isset($jsonData['ancestor']['contact']['contragent']['KPP'])) {
    $model->ancestor->contact->contragent->KPP = $jsonData['ancestor']['contact']['contragent']['KPP'];

}
if (isset($jsonData['ancestor']['contact']['contragent']['OGRN'])) {
    $model->ancestor->contact->contragent->OGRN = $jsonData['ancestor']['contact']['contragent']['OGRN'];

}
if (isset($jsonData['ancestor']['contact']['contragent']['OGRNIP'])) {
    $model->ancestor->contact->contragent->OGRNIP = $jsonData['ancestor']['contact']['contragent']['OGRNIP'];

}
if (isset($jsonData['ancestor']['contact']['contragent']['certificateNumber'])) {
    $model->ancestor->contact->contragent->certificateNumber = $jsonData['ancestor']['contact']['contragent']['certificateNumber'];

}
if (isset($jsonData['ancestor']['contact']['contragent']['certificateDate'])) {
    $model->ancestor->contact->contragent->certificateDate = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['ancestor']['contact']['contragent']['certificateDate']);

}
if (isset($jsonData['ancestor']['contact']['contragent']['BIK'])) {
    $model->ancestor->contact->contragent->BIK = $jsonData['ancestor']['contact']['contragent']['BIK'];

}
if (isset($jsonData['ancestor']['contact']['contragent']['bank'])) {
    $model->ancestor->contact->contragent->bank = $jsonData['ancestor']['contact']['contragent']['bank'];

}
if (isset($jsonData['ancestor']['contact']['contragent']['bankAddress'])) {
    $model->ancestor->contact->contragent->bankAddress = $jsonData['ancestor']['contact']['contragent']['bankAddress'];

}
if (isset($jsonData['ancestor']['contact']['contragent']['corrAccount'])) {
    $model->ancestor->contact->contragent->corrAccount = $jsonData['ancestor']['contact']['contragent']['corrAccount'];

}
if (isset($jsonData['ancestor']['contact']['contragent']['bankAccount'])) {
    $model->ancestor->contact->contragent->bankAccount = $jsonData['ancestor']['contact']['contragent']['bankAccount'];

}


}
if (isset($jsonData['ancestor']['contact']['tags'])) {
    $model->ancestor->contact->tags = [];
foreach (array_keys($jsonData['ancestor']['contact']['tags']) as $index40) {
    
$model->ancestor->contact->tags[$index40] = new RetailCrm\Api\Model\Entity\Customers\CustomerTag();
if (isset($jsonData['ancestor']['contact']['tags'][$index40]['name'])) {
    $model->ancestor->contact->tags[$index40]->name = $jsonData['ancestor']['contact']['tags'][$index40]['name'];

}
if (isset($jsonData['ancestor']['contact']['tags'][$index40]['color'])) {
    $model->ancestor->contact->tags[$index40]->color = $jsonData['ancestor']['contact']['tags'][$index40]['color'];

}
if (isset($jsonData['ancestor']['contact']['tags'][$index40]['attached'])) {
    $model->ancestor->contact->tags[$index40]->attached = $jsonData['ancestor']['contact']['tags'][$index40]['attached'];

}


}

}
if (isset($jsonData['ancestor']['contact']['avgMarginSumm'])) {
    $model->ancestor->contact->avgMarginSumm = (float) $jsonData['ancestor']['contact']['avgMarginSumm'];

}
if (isset($jsonData['ancestor']['contact']['marginSumm'])) {
    $model->ancestor->contact->marginSumm = (float) $jsonData['ancestor']['contact']['marginSumm'];

}
if (isset($jsonData['ancestor']['contact']['totalSumm'])) {
    $model->ancestor->contact->totalSumm = (float) $jsonData['ancestor']['contact']['totalSumm'];

}
if (isset($jsonData['ancestor']['contact']['averageSumm'])) {
    $model->ancestor->contact->averageSumm = (float) $jsonData['ancestor']['contact']['averageSumm'];

}
if (isset($jsonData['ancestor']['contact']['ordersCount'])) {
    $model->ancestor->contact->ordersCount = $jsonData['ancestor']['contact']['ordersCount'];

}
if (isset($jsonData['ancestor']['contact']['costSumm'])) {
    $model->ancestor->contact->costSumm = (float) $jsonData['ancestor']['contact']['costSumm'];

}
if (isset($jsonData['ancestor']['contact']['customFields'])) {
    $model->ancestor->contact->customFields = [];
foreach (array_keys($jsonData['ancestor']['contact']['customFields']) as $index48) {
    $model->ancestor->contact->customFields[$index48] = $jsonData['ancestor']['contact']['customFields'][$index48];

}

}
if (isset($jsonData['ancestor']['contact']['personalDiscount'])) {
    $model->ancestor->contact->personalDiscount = (float) $jsonData['ancestor']['contact']['personalDiscount'];

}
if (isset($jsonData['ancestor']['contact']['cumulativeDiscount'])) {
    $model->ancestor->contact->cumulativeDiscount = (float) $jsonData['ancestor']['contact']['cumulativeDiscount'];

}
if (isset($jsonData['ancestor']['contact']['discountCardNumber'])) {
    $model->ancestor->contact->discountCardNumber = $jsonData['ancestor']['contact']['discountCardNumber'];

}
if (isset($jsonData['ancestor']['contact']['firstClientId'])) {
    $model->ancestor->contact->firstClientId = $jsonData['ancestor']['contact']['firstClientId'];

}
if (isset($jsonData['ancestor']['contact']['lastClientId'])) {
    $model->ancestor->contact->lastClientId = $jsonData['ancestor']['contact']['lastClientId'];

}
if (isset($jsonData['ancestor']['contact']['address'])) {
    
$model->ancestor->contact->address = new RetailCrm\Api\Model\Entity\Customers\CustomerAddress();
if (isset($jsonData['ancestor']['contact']['address']['id'])) {
    $model->ancestor->contact->address->id = $jsonData['ancestor']['contact']['address']['id'];

}
if (isset($jsonData['ancestor']['contact']['address']['name'])) {
    $model->ancestor->contact->address->name = $jsonData['ancestor']['contact']['address']['name'];

}
if (isset($jsonData['ancestor']['contact']['address']['isMain'])) {
    $model->ancestor->contact->address->isMain = $jsonData['ancestor']['contact']['address']['isMain'];

}
if (isset($jsonData['ancestor']['contact']['address']['index'])) {
    $model->ancestor->contact->address->index = $jsonData['ancestor']['contact']['address']['index'];

}
if (isset($jsonData['ancestor']['contact']['address']['countryIso'])) {
    $model->ancestor->contact->address->countryIso = $jsonData['ancestor']['contact']['address']['countryIso'];

}
if (isset($jsonData['ancestor']['contact']['address']['region'])) {
    $model->ancestor->contact->address->region = $jsonData['ancestor']['contact']['address']['region'];

}
if (isset($jsonData['ancestor']['contact']['address']['regionId'])) {
    $model->ancestor->contact->address->regionId = $jsonData['ancestor']['contact']['address']['regionId'];

}
if (isset($jsonData['ancestor']['contact']['address']['city'])) {
    $model->ancestor->contact->address->city = $jsonData['ancestor']['contact']['address']['city'];

}
if (isset($jsonData['ancestor']['contact']['address']['cityId'])) {
    $model->ancestor->contact->address->cityId = $jsonData['ancestor']['contact']['address']['cityId'];

}
if (isset($jsonData['ancestor']['contact']['address']['cityType'])) {
    $model->ancestor->contact->address->cityType = $jsonData['ancestor']['contact']['address']['cityType'];

}
if (isset($jsonData['ancestor']['contact']['address']['street'])) {
    $model->ancestor->contact->address->street = $jsonData['ancestor']['contact']['address']['street'];

}
if (isset($jsonData['ancestor']['contact']['address']['streetId'])) {
    $model->ancestor->contact->address->streetId = $jsonData['ancestor']['contact']['address']['streetId'];

}
if (isset($jsonData['ancestor']['contact']['address']['streetType'])) {
    $model->ancestor->contact->address->streetType = $jsonData['ancestor']['contact']['address']['streetType'];

}
if (isset($jsonData['ancestor']['contact']['address']['building'])) {
    $model->ancestor->contact->address->building = $jsonData['ancestor']['contact']['address']['building'];

}
if (isset($jsonData['ancestor']['contact']['address']['flat'])) {
    $model->ancestor->contact->address->flat = $jsonData['ancestor']['contact']['address']['flat'];

}
if (isset($jsonData['ancestor']['contact']['address']['floor'])) {
    $model->ancestor->contact->address->floor = $jsonData['ancestor']['contact']['address']['floor'];

}
if (isset($jsonData['ancestor']['contact']['address']['block'])) {
    $model->ancestor->contact->address->block = $jsonData['ancestor']['contact']['address']['block'];

}
if (isset($jsonData['ancestor']['contact']['address']['house'])) {
    $model->ancestor->contact->address->house = $jsonData['ancestor']['contact']['address']['house'];

}
if (isset($jsonData['ancestor']['contact']['address']['housing'])) {
    $model->ancestor->contact->address->housing = $jsonData['ancestor']['contact']['address']['housing'];

}
if (isset($jsonData['ancestor']['contact']['address']['metro'])) {
    $model->ancestor->contact->address->metro = $jsonData['ancestor']['contact']['address']['metro'];

}
if (isset($jsonData['ancestor']['contact']['address']['notes'])) {
    $model->ancestor->contact->address->notes = $jsonData['ancestor']['contact']['address']['notes'];

}
if (isset($jsonData['ancestor']['contact']['address']['text'])) {
    $model->ancestor->contact->address->text = $jsonData['ancestor']['contact']['address']['text'];

}
if (isset($jsonData['ancestor']['contact']['address']['externalId'])) {
    $model->ancestor->contact->address->externalId = $jsonData['ancestor']['contact']['address']['externalId'];

}


}
if (isset($jsonData['ancestor']['contact']['segments'])) {
    $model->ancestor->contact->segments = [];
foreach (array_keys($jsonData['ancestor']['contact']['segments']) as $index44) {
    
$model->ancestor->contact->segments[$index44] = new RetailCrm\Api\Model\Entity\Customers\Segment();
if (isset($jsonData['ancestor']['contact']['segments'][$index44]['id'])) {
    $model->ancestor->contact->segments[$index44]->id = $jsonData['ancestor']['contact']['segments'][$index44]['id'];

}
if (isset($jsonData['ancestor']['contact']['segments'][$index44]['code'])) {
    $model->ancestor->contact->segments[$index44]->code = $jsonData['ancestor']['contact']['segments'][$index44]['code'];

}
if (isset($jsonData['ancestor']['contact']['segments'][$index44]['name'])) {
    $model->ancestor->contact->segments[$index44]->name = $jsonData['ancestor']['contact']['segments'][$index44]['name'];

}
if (isset($jsonData['ancestor']['contact']['segments'][$index44]['createdAt'])) {
    $model->ancestor->contact->segments[$index44]->createdAt = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['ancestor']['contact']['segments'][$index44]['createdAt']);

}
if (isset($jsonData['ancestor']['contact']['segments'][$index44]['isDynamic'])) {
    $model->ancestor->contact->segments[$index44]->isDynamic = $jsonData['ancestor']['contact']['segments'][$index44]['isDynamic'];

}
if (isset($jsonData['ancestor']['contact']['segments'][$index44]['customersCount'])) {
    $model->ancestor->contact->segments[$index44]->customersCount = $jsonData['ancestor']['contact']['segments'][$index44]['customersCount'];

}
if (isset($jsonData['ancestor']['contact']['segments'][$index44]['active'])) {
    $model->ancestor->contact->segments[$index44]->active = $jsonData['ancestor']['contact']['segments'][$index44]['active'];

}


}

}
if (isset($jsonData['ancestor']['contact']['maturationTime'])) {
    $model->ancestor->contact->maturationTime = $jsonData['ancestor']['contact']['maturationTime'];

}
if (isset($jsonData['ancestor']['contact']['firstName'])) {
    $model->ancestor->contact->firstName = $jsonData['ancestor']['contact']['firstName'];

}
if (isset($jsonData['ancestor']['contact']['lastName'])) {
    $model->ancestor->contact->lastName = $jsonData['ancestor']['contact']['lastName'];

}
if (isset($jsonData['ancestor']['contact']['patronymic'])) {
    $model->ancestor->contact->patronymic = $jsonData['ancestor']['contact']['patronymic'];

}
if (isset($jsonData['ancestor']['contact']['sex'])) {
    $model->ancestor->contact->sex = $jsonData['ancestor']['contact']['sex'];

}
if (isset($jsonData['ancestor']['contact']['presumableSex'])) {
    $model->ancestor->contact->presumableSex = $jsonData['ancestor']['contact']['presumableSex'];

}
if (isset($jsonData['ancestor']['contact']['email'])) {
    $model->ancestor->contact->email = $jsonData['ancestor']['contact']['email'];

}
if (isset($jsonData['ancestor']['contact']['emailMarketingUnsubscribedAt'])) {
    $model->ancestor->contact->emailMarketingUnsubscribedAt = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['ancestor']['contact']['emailMarketingUnsubscribedAt']);

}
if (isset($jsonData['ancestor']['contact']['phones'])) {
    $model->ancestor->contact->phones = [];
foreach (array_keys($jsonData['ancestor']['contact']['phones']) as $index42) {
    
$model->ancestor->contact->phones[$index42] = new RetailCrm\Api\Model\Entity\Customers\CustomerPhone();
if (isset($jsonData['ancestor']['contact']['phones'][$index42]['number'])) {
    $model->ancestor->contact->phones[$index42]->number = $jsonData['ancestor']['contact']['phones'][$index42]['number'];

}


}

}
if (isset($jsonData['ancestor']['contact']['birthday'])) {
    $model->ancestor->contact->birthday = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['ancestor']['contact']['birthday']);

}
if (isset($jsonData['ancestor']['contact']['source'])) {
    
$model->ancestor->contact->source = new RetailCrm\Api\Model\Entity\Source();
if (isset($jsonData['ancestor']['contact']['source']['source'])) {
    $model->ancestor->contact->source->source = $jsonData['ancestor']['contact']['source']['source'];

}
if (isset($jsonData['ancestor']['contact']['source']['medium'])) {
    $model->ancestor->contact->source->medium = $jsonData['ancestor']['contact']['source']['medium'];

}
if (isset($jsonData['ancestor']['contact']['source']['campaign'])) {
    $model->ancestor->contact->source->campaign = $jsonData['ancestor']['contact']['source']['campaign'];

}
if (isset($jsonData['ancestor']['contact']['source']['keyword'])) {
    $model->ancestor->contact->source->keyword = $jsonData['ancestor']['contact']['source']['keyword'];

}
if (isset($jsonData['ancestor']['contact']['source']['content'])) {
    $model->ancestor->contact->source->content = $jsonData['ancestor']['contact']['source']['content'];

}


}
if (isset($jsonData['ancestor']['contact']['photoUrl'])) {
    $model->ancestor->contact->photoUrl = $jsonData['ancestor']['contact']['photoUrl'];

}
if (isset($jsonData['ancestor']['contact']['mgCustomerId'])) {
    $model->ancestor->contact->mgCustomerId = $jsonData['ancestor']['contact']['mgCustomerId'];

}
if (isset($jsonData['ancestor']['contact']['subscribed'])) {
    $model->ancestor->contact->subscribed = $jsonData['ancestor']['contact']['subscribed'];

}


}
if (isset($jsonData['ancestor']['company'])) {
    
$model->ancestor->company = new RetailCrm\Api\Model\Entity\CustomersCorporate\Company();
if (isset($jsonData['ancestor']['company']['id'])) {
    $model->ancestor->company->id = $jsonData['ancestor']['company']['id'];

}
if (isset($jsonData['ancestor']['company']['isMain'])) {
    $model->ancestor->company->isMain = $jsonData['ancestor']['company']['isMain'];

}
if (isset($jsonData['ancestor']['company']['externalId'])) {
    $model->ancestor->company->externalId = $jsonData['ancestor']['company']['externalId'];

}
if (isset($jsonData['ancestor']['company']['active'])) {
    $model->ancestor->company->active = $jsonData['ancestor']['company']['active'];

}
if (isset($jsonData['ancestor']['company']['name'])) {
    $model->ancestor->company->name = $jsonData['ancestor']['company']['name'];

}
if (isset($jsonData['ancestor']['company']['brand'])) {
    $model->ancestor->company->brand = $jsonData['ancestor']['company']['brand'];

}
if (isset($jsonData['ancestor']['company']['site'])) {
    $model->ancestor->company->site = $jsonData['ancestor']['company']['site'];

}
if (isset($jsonData['ancestor']['company']['createdAt'])) {
    $model->ancestor->company->createdAt = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['ancestor']['company']['createdAt']);

}
if (isset($jsonData['ancestor']['company']['customer'])) {
    
$model->ancestor->company->customer = new RetailCrm\Api\Model\Entity\CustomersCorporate\SerializedEntityCustomer();
if (isset($jsonData['ancestor']['company']['customer']['site'])) {
    $model->ancestor->company->customer->site = $jsonData['ancestor']['company']['customer']['site'];

}
if (isset($jsonData['ancestor']['company']['customer']['id'])) {
    $model->ancestor->company->customer->id = $jsonData['ancestor']['company']['customer']['id'];

}
if (isset($jsonData['ancestor']['company']['customer']['externalId'])) {
    $model->ancestor->company->customer->externalId = $jsonData['ancestor']['company']['customer']['externalId'];

}
if (isset($jsonData['ancestor']['company']['customer']['type'])) {
    $model->ancestor->company->customer->type = $jsonData['ancestor']['company']['customer']['type'];

}


}
if (isset($jsonData['ancestor']['company']['contragent'])) {
    
$model->ancestor->company->contragent = new RetailCrm\Api\Model\Entity\Customers\CustomerContragent();
if (isset($jsonData['ancestor']['company']['contragent']['contragentType'])) {
    $model->ancestor->company->contragent->contragentType = $jsonData['ancestor']['company']['contragent']['contragentType'];

}
if (isset($jsonData['ancestor']['company']['contragent']['legalName'])) {
    $model->ancestor->company->contragent->legalName = $jsonData['ancestor']['company']['contragent']['legalName'];

}
if (isset($jsonData['ancestor']['company']['contragent']['legalAddress'])) {
    $model->ancestor->company->contragent->legalAddress = $jsonData['ancestor']['company']['contragent']['legalAddress'];

}
if (isset($jsonData['ancestor']['company']['contragent']['INN'])) {
    $model->ancestor->company->contragent->INN = $jsonData['ancestor']['company']['contragent']['INN'];

}
if (isset($jsonData['ancestor']['company']['contragent']['OKPO'])) {
    $model->ancestor->company->contragent->OKPO = $jsonData['ancestor']['company']['contragent']['OKPO'];

}
if (isset($jsonData['ancestor']['company']['contragent']['KPP'])) {
    $model->ancestor->company->contragent->KPP = $jsonData['ancestor']['company']['contragent']['KPP'];

}
if (isset($jsonData['ancestor']['company']['contragent']['OGRN'])) {
    $model->ancestor->company->contragent->OGRN = $jsonData['ancestor']['company']['contragent']['OGRN'];

}
if (isset($jsonData['ancestor']['company']['contragent']['OGRNIP'])) {
    $model->ancestor->company->contragent->OGRNIP = $jsonData['ancestor']['company']['contragent']['OGRNIP'];

}
if (isset($jsonData['ancestor']['company']['contragent']['certificateNumber'])) {
    $model->ancestor->company->contragent->certificateNumber = $jsonData['ancestor']['company']['contragent']['certificateNumber'];

}
if (isset($jsonData['ancestor']['company']['contragent']['certificateDate'])) {
    $model->ancestor->company->contragent->certificateDate = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['ancestor']['company']['contragent']['certificateDate']);

}
if (isset($jsonData['ancestor']['company']['contragent']['BIK'])) {
    $model->ancestor->company->contragent->BIK = $jsonData['ancestor']['company']['contragent']['BIK'];

}
if (isset($jsonData['ancestor']['company']['contragent']['bank'])) {
    $model->ancestor->company->contragent->bank = $jsonData['ancestor']['company']['contragent']['bank'];

}
if (isset($jsonData['ancestor']['company']['contragent']['bankAddress'])) {
    $model->ancestor->company->contragent->bankAddress = $jsonData['ancestor']['company']['contragent']['bankAddress'];

}
if (isset($jsonData['ancestor']['company']['contragent']['corrAccount'])) {
    $model->ancestor->company->contragent->corrAccount = $jsonData['ancestor']['company']['contragent']['corrAccount'];

}
if (isset($jsonData['ancestor']['company']['contragent']['bankAccount'])) {
    $model->ancestor->company->contragent->bankAccount = $jsonData['ancestor']['company']['contragent']['bankAccount'];

}


}
if (isset($jsonData['ancestor']['company']['address'])) {
    
$model->ancestor->company->address = new RetailCrm\Api\Model\Entity\Customers\CustomerAddress();
if (isset($jsonData['ancestor']['company']['address']['id'])) {
    $model->ancestor->company->address->id = $jsonData['ancestor']['company']['address']['id'];

}
if (isset($jsonData['ancestor']['company']['address']['name'])) {
    $model->ancestor->company->address->name = $jsonData['ancestor']['company']['address']['name'];

}
if (isset($jsonData['ancestor']['company']['address']['isMain'])) {
    $model->ancestor->company->address->isMain = $jsonData['ancestor']['company']['address']['isMain'];

}
if (isset($jsonData['ancestor']['company']['address']['index'])) {
    $model->ancestor->company->address->index = $jsonData['ancestor']['company']['address']['index'];

}
if (isset($jsonData['ancestor']['company']['address']['countryIso'])) {
    $model->ancestor->company->address->countryIso = $jsonData['ancestor']['company']['address']['countryIso'];

}
if (isset($jsonData['ancestor']['company']['address']['region'])) {
    $model->ancestor->company->address->region = $jsonData['ancestor']['company']['address']['region'];

}
if (isset($jsonData['ancestor']['company']['address']['regionId'])) {
    $model->ancestor->company->address->regionId = $jsonData['ancestor']['company']['address']['regionId'];

}
if (isset($jsonData['ancestor']['company']['address']['city'])) {
    $model->ancestor->company->address->city = $jsonData['ancestor']['company']['address']['city'];

}
if (isset($jsonData['ancestor']['company']['address']['cityId'])) {
    $model->ancestor->company->address->cityId = $jsonData['ancestor']['company']['address']['cityId'];

}
if (isset($jsonData['ancestor']['company']['address']['cityType'])) {
    $model->ancestor->company->address->cityType = $jsonData['ancestor']['company']['address']['cityType'];

}
if (isset($jsonData['ancestor']['company']['address']['street'])) {
    $model->ancestor->company->address->street = $jsonData['ancestor']['company']['address']['street'];

}
if (isset($jsonData['ancestor']['company']['address']['streetId'])) {
    $model->ancestor->company->address->streetId = $jsonData['ancestor']['company']['address']['streetId'];

}
if (isset($jsonData['ancestor']['company']['address']['streetType'])) {
    $model->ancestor->company->address->streetType = $jsonData['ancestor']['company']['address']['streetType'];

}
if (isset($jsonData['ancestor']['company']['address']['building'])) {
    $model->ancestor->company->address->building = $jsonData['ancestor']['company']['address']['building'];

}
if (isset($jsonData['ancestor']['company']['address']['flat'])) {
    $model->ancestor->company->address->flat = $jsonData['ancestor']['company']['address']['flat'];

}
if (isset($jsonData['ancestor']['company']['address']['floor'])) {
    $model->ancestor->company->address->floor = $jsonData['ancestor']['company']['address']['floor'];

}
if (isset($jsonData['ancestor']['company']['address']['block'])) {
    $model->ancestor->company->address->block = $jsonData['ancestor']['company']['address']['block'];

}
if (isset($jsonData['ancestor']['company']['address']['house'])) {
    $model->ancestor->company->address->house = $jsonData['ancestor']['company']['address']['house'];

}
if (isset($jsonData['ancestor']['company']['address']['housing'])) {
    $model->ancestor->company->address->housing = $jsonData['ancestor']['company']['address']['housing'];

}
if (isset($jsonData['ancestor']['company']['address']['metro'])) {
    $model->ancestor->company->address->metro = $jsonData['ancestor']['company']['address']['metro'];

}
if (isset($jsonData['ancestor']['company']['address']['notes'])) {
    $model->ancestor->company->address->notes = $jsonData['ancestor']['company']['address']['notes'];

}
if (isset($jsonData['ancestor']['company']['address']['text'])) {
    $model->ancestor->company->address->text = $jsonData['ancestor']['company']['address']['text'];

}
if (isset($jsonData['ancestor']['company']['address']['externalId'])) {
    $model->ancestor->company->address->externalId = $jsonData['ancestor']['company']['address']['externalId'];

}


}
if (isset($jsonData['ancestor']['company']['customFields'])) {
    $model->ancestor->company->customFields = [];
foreach (array_keys($jsonData['ancestor']['company']['customFields']) as $index48) {
    $model->ancestor->company->customFields[$index48] = $jsonData['ancestor']['company']['customFields'][$index48];

}

}
if (isset($jsonData['ancestor']['company']['marginSumm'])) {
    $model->ancestor->company->marginSumm = (float) $jsonData['ancestor']['company']['marginSumm'];

}
if (isset($jsonData['ancestor']['company']['totalSumm'])) {
    $model->ancestor->company->totalSumm = (float) $jsonData['ancestor']['company']['totalSumm'];

}
if (isset($jsonData['ancestor']['company']['averageSumm'])) {
    $model->ancestor->company->averageSumm = (float) $jsonData['ancestor']['company']['averageSumm'];

}
if (isset($jsonData['ancestor']['company']['ordersCount'])) {
    $model->ancestor->company->ordersCount = $jsonData['ancestor']['company']['ordersCount'];

}
if (isset($jsonData['ancestor']['company']['costSumm'])) {
    $model->ancestor->company->costSumm = (float) $jsonData['ancestor']['company']['costSumm'];

}


}
if (isset($jsonData['ancestor']['contragent'])) {
    
$model->ancestor->contragent = new RetailCrm\Api\Model\Entity\Order\OrderContragent();
if (isset($jsonData['ancestor']['contragent']['contragentType'])) {
    $model->ancestor->contragent->contragentType = $jsonData['ancestor']['contragent']['contragentType'];

}
if (isset($jsonData['ancestor']['contragent']['legalName'])) {
    $model->ancestor->contragent->legalName = $jsonData['ancestor']['contragent']['legalName'];

}
if (isset($jsonData['ancestor']['contragent']['legalAddress'])) {
    $model->ancestor->contragent->legalAddress = $jsonData['ancestor']['contragent']['legalAddress'];

}
if (isset($jsonData['ancestor']['contragent']['INN'])) {
    $model->ancestor->contragent->INN = $jsonData['ancestor']['contragent']['INN'];

}
if (isset($jsonData['ancestor']['contragent']['OKPO'])) {
    $model->ancestor->contragent->OKPO = $jsonData['ancestor']['contragent']['OKPO'];

}
if (isset($jsonData['ancestor']['contragent']['KPP'])) {
    $model->ancestor->contragent->KPP = $jsonData['ancestor']['contragent']['KPP'];

}
if (isset($jsonData['ancestor']['contragent']['OGRN'])) {
    $model->ancestor->contragent->OGRN = $jsonData['ancestor']['contragent']['OGRN'];

}
if (isset($jsonData['ancestor']['contragent']['OGRNIP'])) {
    $model->ancestor->contragent->OGRNIP = $jsonData['ancestor']['contragent']['OGRNIP'];

}
if (isset($jsonData['ancestor']['contragent']['certificateNumber'])) {
    $model->ancestor->contragent->certificateNumber = $jsonData['ancestor']['contragent']['certificateNumber'];

}
if (isset($jsonData['ancestor']['contragent']['certificateDate'])) {
    $model->ancestor->contragent->certificateDate = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['ancestor']['contragent']['certificateDate']);

}
if (isset($jsonData['ancestor']['contragent']['BIK'])) {
    $model->ancestor->contragent->BIK = $jsonData['ancestor']['contragent']['BIK'];

}
if (isset($jsonData['ancestor']['contragent']['bank'])) {
    $model->ancestor->contragent->bank = $jsonData['ancestor']['contragent']['bank'];

}
if (isset($jsonData['ancestor']['contragent']['bankAddress'])) {
    $model->ancestor->contragent->bankAddress = $jsonData['ancestor']['contragent']['bankAddress'];

}
if (isset($jsonData['ancestor']['contragent']['corrAccount'])) {
    $model->ancestor->contragent->corrAccount = $jsonData['ancestor']['contragent']['corrAccount'];

}
if (isset($jsonData['ancestor']['contragent']['bankAccount'])) {
    $model->ancestor->contragent->bankAccount = $jsonData['ancestor']['contragent']['bankAccount'];

}


}
if (isset($jsonData['ancestor']['delivery'])) {
    
$model->ancestor->delivery = new RetailCrm\Api\Model\Entity\Order\Delivery\SerializedOrderDelivery();
if (isset($jsonData['ancestor']['delivery']['code'])) {
    $model->ancestor->delivery->code = $jsonData['ancestor']['delivery']['code'];

}
if (isset($jsonData['ancestor']['delivery']['integrationCode'])) {
    $model->ancestor->delivery->integrationCode = $jsonData['ancestor']['delivery']['integrationCode'];

}
if (isset($jsonData['ancestor']['delivery']['data'])) {
    
$model->ancestor->delivery->data = new RetailCrm\Api\Model\Entity\Order\Delivery\DeliveryData();
if (isset($jsonData['ancestor']['delivery']['data']['externalId'])) {
    $model->ancestor->delivery->data->externalId = $jsonData['ancestor']['delivery']['data']['externalId'];

}
if (isset($jsonData['ancestor']['delivery']['data']['trackNumber'])) {
    $model->ancestor->delivery->data->trackNumber = $jsonData['ancestor']['delivery']['data']['trackNumber'];

}
if (isset($jsonData['ancestor']['delivery']['data']['status'])) {
    $model->ancestor->delivery->data->status = $jsonData['ancestor']['delivery']['data']['status'];

}
if (isset($jsonData['ancestor']['delivery']['data']['locked'])) {
    $model->ancestor->delivery->data->locked = $jsonData['ancestor']['delivery']['data']['locked'];

}
if (isset($jsonData['ancestor']['delivery']['data']['pickuppointAddress'])) {
    $model->ancestor->delivery->data->pickuppointAddress = $jsonData['ancestor']['delivery']['data']['pickuppointAddress'];

}
if (isset($jsonData['ancestor']['delivery']['data']['days'])) {
    $model->ancestor->delivery->data->days = $jsonData['ancestor']['delivery']['data']['days'];

}
if (isset($jsonData['ancestor']['delivery']['data']['statusText'])) {
    $model->ancestor->delivery->data->statusText = $jsonData['ancestor']['delivery']['data']['statusText'];

}
if (isset($jsonData['ancestor']['delivery']['data']['statusDate'])) {
    $model->ancestor->delivery->data->statusDate = \DateTime::createFromFormat('Y-m-d', $jsonData['ancestor']['delivery']['data']['statusDate']);

}
if (isset($jsonData['ancestor']['delivery']['data']['tariff'])) {
    $model->ancestor->delivery->data->tariff = $jsonData['ancestor']['delivery']['data']['tariff'];

}
if (isset($jsonData['ancestor']['delivery']['data']['tariffName'])) {
    $model->ancestor->delivery->data->tariffName = $jsonData['ancestor']['delivery']['data']['tariffName'];

}
if (isset($jsonData['ancestor']['delivery']['data']['pickuppointId'])) {
    $model->ancestor->delivery->data->pickuppointId = $jsonData['ancestor']['delivery']['data']['pickuppointId'];

}
if (isset($jsonData['ancestor']['delivery']['data']['pickuppointSchedule'])) {
    $model->ancestor->delivery->data->pickuppointSchedule = $jsonData['ancestor']['delivery']['data']['pickuppointSchedule'];

}
if (isset($jsonData['ancestor']['delivery']['data']['pickuppointPhone'])) {
    $model->ancestor->delivery->data->pickuppointPhone = $jsonData['ancestor']['delivery']['data']['pickuppointPhone'];

}
if (isset($jsonData['ancestor']['delivery']['data']['payerType'])) {
    $model->ancestor->delivery->data->payerType = $jsonData['ancestor']['delivery']['data']['payerType'];

}
if (isset($jsonData['ancestor']['delivery']['data']['statusComment'])) {
    $model->ancestor->delivery->data->statusComment = $jsonData['ancestor']['delivery']['data']['statusComment'];

}
if (isset($jsonData['ancestor']['delivery']['data']['cost'])) {
    $model->ancestor->delivery->data->cost = (float) $jsonData['ancestor']['delivery']['data']['cost'];

}
if (isset($jsonData['ancestor']['delivery']['data']['minTerm'])) {
    $model->ancestor->delivery->data->minTerm = $jsonData['ancestor']['delivery']['data']['minTerm'];

}
if (isset($jsonData['ancestor']['delivery']['data']['maxTerm'])) {
    $model->ancestor->delivery->data->maxTerm = $jsonData['ancestor']['delivery']['data']['maxTerm'];

}
if (isset($jsonData['ancestor']['delivery']['data']['shipmentpointId'])) {
    $model->ancestor->delivery->data->shipmentpointId = $jsonData['ancestor']['delivery']['data']['shipmentpointId'];

}
if (isset($jsonData['ancestor']['delivery']['data']['shipmentpointName'])) {
    $model->ancestor->delivery->data->shipmentpointName = $jsonData['ancestor']['delivery']['data']['shipmentpointName'];

}
if (isset($jsonData['ancestor']['delivery']['data']['shipmentpointAddress'])) {
    $model->ancestor->delivery->data->shipmentpointAddress = $jsonData['ancestor']['delivery']['data']['shipmentpointAddress'];

}
if (isset($jsonData['ancestor']['delivery']['data']['shipmentpointSchedule'])) {
    $model->ancestor->delivery->data->shipmentpointSchedule = $jsonData['ancestor']['delivery']['data']['shipmentpointSchedule'];

}
if (isset($jsonData['ancestor']['delivery']['data']['shipmentpointPhone'])) {
    $model->ancestor->delivery->data->shipmentpointPhone = $jsonData['ancestor']['delivery']['data']['shipmentpointPhone'];

}
if (isset($jsonData['ancestor']['delivery']['data']['shipmentpointCoordinateLatitude'])) {
    $model->ancestor->delivery->data->shipmentpointCoordinateLatitude = $jsonData['ancestor']['delivery']['data']['shipmentpointCoordinateLatitude'];

}
if (isset($jsonData['ancestor']['delivery']['data']['shipmentpointCoordinateLongitude'])) {
    $model->ancestor->delivery->data->shipmentpointCoordinateLongitude = $jsonData['ancestor']['delivery']['data']['shipmentpointCoordinateLongitude'];

}
if (isset($jsonData['ancestor']['delivery']['data']['pickuppointName'])) {
    $model->ancestor->delivery->data->pickuppointName = $jsonData['ancestor']['delivery']['data']['pickuppointName'];

}
if (isset($jsonData['ancestor']['delivery']['data']['pickuppointCoordinateLatitude'])) {
    $model->ancestor->delivery->data->pickuppointCoordinateLatitude = $jsonData['ancestor']['delivery']['data']['pickuppointCoordinateLatitude'];

}
if (isset($jsonData['ancestor']['delivery']['data']['pickuppointCoordinateLongitude'])) {
    $model->ancestor->delivery->data->pickuppointCoordinateLongitude = $jsonData['ancestor']['delivery']['data']['pickuppointCoordinateLongitude'];

}
if (isset($jsonData['ancestor']['delivery']['data']['extraData'])) {
    $model->ancestor->delivery->data->extraData = [];
foreach (array_keys($jsonData['ancestor']['delivery']['data']['extraData']) as $index54) {
    $model->ancestor->delivery->data->extraData[$index54] = $jsonData['ancestor']['delivery']['data']['extraData'][$index54];

}

}
if (isset($jsonData['ancestor']['delivery']['data']['packages'])) {
    $model->ancestor->delivery->data->packages = [];
foreach (array_keys($jsonData['ancestor']['delivery']['data']['packages']) as $index53) {
    
$model->ancestor->delivery->data->packages[$index53] = new RetailCrm\Api\Model\Entity\Order\Delivery\Package();
if (isset($jsonData['ancestor']['delivery']['data']['packages'][$index53]['packageId'])) {
    $model->ancestor->delivery->data->packages[$index53]->packageId = $jsonData['ancestor']['delivery']['data']['packages'][$index53]['packageId'];

}
if (isset($jsonData['ancestor']['delivery']['data']['packages'][$index53]['weight'])) {
    $model->ancestor->delivery->data->packages[$index53]->weight = (float) $jsonData['ancestor']['delivery']['data']['packages'][$index53]['weight'];

}
if (isset($jsonData['ancestor']['delivery']['data']['packages'][$index53]['length'])) {
    $model->ancestor->delivery->data->packages[$index53]->length = $jsonData['ancestor']['delivery']['data']['packages'][$index53]['length'];

}
if (isset($jsonData['ancestor']['delivery']['data']['packages'][$index53]['width'])) {
    $model->ancestor->delivery->data->packages[$index53]->width = $jsonData['ancestor']['delivery']['data']['packages'][$index53]['width'];

}
if (isset($jsonData['ancestor']['delivery']['data']['packages'][$index53]['height'])) {
    $model->ancestor->delivery->data->packages[$index53]->height = $jsonData['ancestor']['delivery']['data']['packages'][$index53]['height'];

}
if (isset($jsonData['ancestor']['delivery']['data']['packages'][$index53]['items'])) {
    $model->ancestor->delivery->data->packages[$index53]->items = [];
foreach (array_keys($jsonData['ancestor']['delivery']['data']['packages'][$index53]['items']) as $index72) {
    
$model->ancestor->delivery->data->packages[$index53]->items[$index72] = new RetailCrm\Api\Model\Entity\Order\Delivery\PackageItem();
if (isset($jsonData['ancestor']['delivery']['data']['packages'][$index53]['items'][$index72]['orderProduct'])) {
    
$model->ancestor->delivery->data->packages[$index53]->items[$index72]->orderProduct = new RetailCrm\Api\Model\Entity\Order\Delivery\PackageItemOrderProduct();
if (isset($jsonData['ancestor']['delivery']['data']['packages'][$index53]['items'][$index72]['orderProduct']['id'])) {
    $model->ancestor->delivery->data->packages[$index53]->items[$index72]->orderProduct->id = $jsonData['ancestor']['delivery']['data']['packages'][$index53]['items'][$index72]['orderProduct']['id'];

}
if (isset($jsonData['ancestor']['delivery']['data']['packages'][$index53]['items'][$index72]['orderProduct']['externalId'])) {
    $model->ancestor->delivery->data->packages[$index53]->items[$index72]->orderProduct->externalId = $jsonData['ancestor']['delivery']['data']['packages'][$index53]['items'][$index72]['orderProduct']['externalId'];

}
if (isset($jsonData['ancestor']['delivery']['data']['packages'][$index53]['items'][$index72]['orderProduct']['externalIds'])) {
    $model->ancestor->delivery->data->packages[$index53]->items[$index72]->orderProduct->externalIds = [];
foreach (array_keys($jsonData['ancestor']['delivery']['data']['packages'][$index53]['items'][$index72]['orderProduct']['externalIds']) as $index113) {
    
$model->ancestor->delivery->data->packages[$index53]->items[$index72]->orderProduct->externalIds[$index113] = new RetailCrm\Api\Model\Entity\CodeValueModel();
if (isset($jsonData['ancestor']['delivery']['data']['packages'][$index53]['items'][$index72]['orderProduct']['externalIds'][$index113]['code'])) {
    $model->ancestor->delivery->data->packages[$index53]->items[$index72]->orderProduct->externalIds[$index113]->code = $jsonData['ancestor']['delivery']['data']['packages'][$index53]['items'][$index72]['orderProduct']['externalIds'][$index113]['code'];

}
if (isset($jsonData['ancestor']['delivery']['data']['packages'][$index53]['items'][$index72]['orderProduct']['externalIds'][$index113]['value'])) {
    $model->ancestor->delivery->data->packages[$index53]->items[$index72]->orderProduct->externalIds[$index113]->value = $jsonData['ancestor']['delivery']['data']['packages'][$index53]['items'][$index72]['orderProduct']['externalIds'][$index113]['value'];

}


}

}


}
if (isset($jsonData['ancestor']['delivery']['data']['packages'][$index53]['items'][$index72]['quantity'])) {
    $model->ancestor->delivery->data->packages[$index53]->items[$index72]->quantity = (float) $jsonData['ancestor']['delivery']['data']['packages'][$index53]['items'][$index72]['quantity'];

}


}

}


}

}
if (isset($jsonData['ancestor']['delivery']['data']['returnExternalId'])) {
    $model->ancestor->delivery->data->returnExternalId = $jsonData['ancestor']['delivery']['data']['returnExternalId'];

}
if (isset($jsonData['ancestor']['delivery']['data']['deliveryName'])) {
    $model->ancestor->delivery->data->deliveryName = $jsonData['ancestor']['delivery']['data']['deliveryName'];

}
if (isset($jsonData['ancestor']['delivery']['data']['price'])) {
    $model->ancestor->delivery->data->price = (float) $jsonData['ancestor']['delivery']['data']['price'];

}
if (isset($jsonData['ancestor']['delivery']['data']['insurancePrice'])) {
    $model->ancestor->delivery->data->insurancePrice = (float) $jsonData['ancestor']['delivery']['data']['insurancePrice'];

}
if (isset($jsonData['ancestor']['delivery']['data']['tariffType'])) {
    $model->ancestor->delivery->data->tariffType = $jsonData['ancestor']['delivery']['data']['tariffType'];

}
if (isset($jsonData['ancestor']['delivery']['data']['receiverCity'])) {
    $model->ancestor->delivery->data->receiverCity = $jsonData['ancestor']['delivery']['data']['receiverCity'];

}
if (isset($jsonData['ancestor']['delivery']['data']['services'])) {
    $model->ancestor->delivery->data->services = [];
foreach (array_keys($jsonData['ancestor']['delivery']['data']['services']) as $index53) {
    $model->ancestor->delivery->data->services[$index53] = $jsonData['ancestor']['delivery']['data']['services'][$index53];

}

}
if (isset($jsonData['ancestor']['delivery']['data']['packageNumber'])) {
    $model->ancestor->delivery->data->packageNumber = $jsonData['ancestor']['delivery']['data']['packageNumber'];

}
if (isset($jsonData['ancestor']['delivery']['data']['comment'])) {
    $model->ancestor->delivery->data->comment = $jsonData['ancestor']['delivery']['data']['comment'];

}
if (isset($jsonData['ancestor']['delivery']['data']['deliveryCode'])) {
    $model->ancestor->delivery->data->deliveryCode = $jsonData['ancestor']['delivery']['data']['deliveryCode'];

}
if (isset($jsonData['ancestor']['delivery']['data']['notes'])) {
    $model->ancestor->delivery->data->notes = $jsonData['ancestor']['delivery']['data']['notes'];

}
if (isset($jsonData['ancestor']['delivery']['data']['id'])) {
    $model->ancestor->delivery->data->id = $jsonData['ancestor']['delivery']['data']['id'];

}
if (isset($jsonData['ancestor']['delivery']['data']['firstName'])) {
    $model->ancestor->delivery->data->firstName = $jsonData['ancestor']['delivery']['data']['firstName'];

}
if (isset($jsonData['ancestor']['delivery']['data']['lastName'])) {
    $model->ancestor->delivery->data->lastName = $jsonData['ancestor']['delivery']['data']['lastName'];

}
if (isset($jsonData['ancestor']['delivery']['data']['patronymic'])) {
    $model->ancestor->delivery->data->patronymic = $jsonData['ancestor']['delivery']['data']['patronymic'];

}
if (isset($jsonData['ancestor']['delivery']['data']['active'])) {
    $model->ancestor->delivery->data->active = $jsonData['ancestor']['delivery']['data']['active'];

}
if (isset($jsonData['ancestor']['delivery']['data']['email'])) {
    $model->ancestor->delivery->data->email = $jsonData['ancestor']['delivery']['data']['email'];

}
if (isset($jsonData['ancestor']['delivery']['data']['phone'])) {
    
$model->ancestor->delivery->data->phone = new RetailCrm\Api\Model\Entity\Order\Delivery\CourierPhone();
if (isset($jsonData['ancestor']['delivery']['data']['phone']['number'])) {
    $model->ancestor->delivery->data->phone->number = $jsonData['ancestor']['delivery']['data']['phone']['number'];

}


}
if (isset($jsonData['ancestor']['delivery']['data']['description'])) {
    $model->ancestor->delivery->data->description = $jsonData['ancestor']['delivery']['data']['description'];

}
if (isset($jsonData['ancestor']['delivery']['data']['courierId'])) {
    $model->ancestor->delivery->data->courierId = $jsonData['ancestor']['delivery']['data']['courierId'];

}
if (isset($jsonData['ancestor']['delivery']['data']['serviceType'])) {
    $model->ancestor->delivery->data->serviceType = $jsonData['ancestor']['delivery']['data']['serviceType'];

}
if (isset($jsonData['ancestor']['delivery']['data']['pickuppoint'])) {
    $model->ancestor->delivery->data->pickuppoint = $jsonData['ancestor']['delivery']['data']['pickuppoint'];

}
if (isset($jsonData['ancestor']['delivery']['data']['receiverWarehouseTypeRef'])) {
    $model->ancestor->delivery->data->receiverWarehouseTypeRef = $jsonData['ancestor']['delivery']['data']['receiverWarehouseTypeRef'];

}
if (isset($jsonData['ancestor']['delivery']['data']['statusName'])) {
    $model->ancestor->delivery->data->statusName = $jsonData['ancestor']['delivery']['data']['statusName'];

}
if (isset($jsonData['ancestor']['delivery']['data']['receiverCityRef'])) {
    $model->ancestor->delivery->data->receiverCityRef = $jsonData['ancestor']['delivery']['data']['receiverCityRef'];

}
if (isset($jsonData['ancestor']['delivery']['data']['receiverStreet'])) {
    $model->ancestor->delivery->data->receiverStreet = $jsonData['ancestor']['delivery']['data']['receiverStreet'];

}
if (isset($jsonData['ancestor']['delivery']['data']['receiverStreetRef'])) {
    $model->ancestor->delivery->data->receiverStreetRef = $jsonData['ancestor']['delivery']['data']['receiverStreetRef'];

}
if (isset($jsonData['ancestor']['delivery']['data']['seatsAmount'])) {
    $model->ancestor->delivery->data->seatsAmount = $jsonData['ancestor']['delivery']['data']['seatsAmount'];

}
if (isset($jsonData['ancestor']['delivery']['data']['cargoType'])) {
    $model->ancestor->delivery->data->cargoType = $jsonData['ancestor']['delivery']['data']['cargoType'];

}
if (isset($jsonData['ancestor']['delivery']['data']['cargoDescription'])) {
    $model->ancestor->delivery->data->cargoDescription = $jsonData['ancestor']['delivery']['data']['cargoDescription'];

}
if (isset($jsonData['ancestor']['delivery']['data']['cashPayerType'])) {
    $model->ancestor->delivery->data->cashPayerType = $jsonData['ancestor']['delivery']['data']['cashPayerType'];

}
if (isset($jsonData['ancestor']['delivery']['data']['paymentForm'])) {
    $model->ancestor->delivery->data->paymentForm = $jsonData['ancestor']['delivery']['data']['paymentForm'];

}
if (isset($jsonData['ancestor']['delivery']['data']['ownershipForm'])) {
    $model->ancestor->delivery->data->ownershipForm = $jsonData['ancestor']['delivery']['data']['ownershipForm'];

}
if (isset($jsonData['ancestor']['delivery']['data']['accompanyingDocument'])) {
    $model->ancestor->delivery->data->accompanyingDocument = $jsonData['ancestor']['delivery']['data']['accompanyingDocument'];

}
if (isset($jsonData['ancestor']['delivery']['data']['preferredDeliveryDate'])) {
    $model->ancestor->delivery->data->preferredDeliveryDate = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['ancestor']['delivery']['data']['preferredDeliveryDate']);

}
if (isset($jsonData['ancestor']['delivery']['data']['timeInterval'])) {
    $model->ancestor->delivery->data->timeInterval = $jsonData['ancestor']['delivery']['data']['timeInterval'];

}
if (isset($jsonData['ancestor']['delivery']['data']['saturdayDelivery'])) {
    $model->ancestor->delivery->data->saturdayDelivery = $jsonData['ancestor']['delivery']['data']['saturdayDelivery'];

}
if (isset($jsonData['ancestor']['delivery']['data']['deliveryDate'])) {
    $model->ancestor->delivery->data->deliveryDate = $jsonData['ancestor']['delivery']['data']['deliveryDate'];

}
if (isset($jsonData['ancestor']['delivery']['data']['denieReason'])) {
    $model->ancestor->delivery->data->denieReason = $jsonData['ancestor']['delivery']['data']['denieReason'];

}
if (isset($jsonData['ancestor']['delivery']['data']['backwardDelivery'])) {
    $model->ancestor->delivery->data->backwardDelivery = $jsonData['ancestor']['delivery']['data']['backwardDelivery'];

}
if (isset($jsonData['ancestor']['delivery']['data']['backwardDeliveryCargoType'])) {
    $model->ancestor->delivery->data->backwardDeliveryCargoType = $jsonData['ancestor']['delivery']['data']['backwardDeliveryCargoType'];

}
if (isset($jsonData['ancestor']['delivery']['data']['backwardDeliveryPayerType'])) {
    $model->ancestor->delivery->data->backwardDeliveryPayerType = $jsonData['ancestor']['delivery']['data']['backwardDeliveryPayerType'];

}
if (isset($jsonData['ancestor']['delivery']['data']['backwardDeliveryRedeliveryString'])) {
    $model->ancestor->delivery->data->backwardDeliveryRedeliveryString = $jsonData['ancestor']['delivery']['data']['backwardDeliveryRedeliveryString'];

}
if (isset($jsonData['ancestor']['delivery']['data']['afterpaymentOnGoodsCost'])) {
    $model->ancestor->delivery->data->afterpaymentOnGoodsCost = (float) $jsonData['ancestor']['delivery']['data']['afterpaymentOnGoodsCost'];

}
if (isset($jsonData['ancestor']['delivery']['data']['declaredValue'])) {
    $model->ancestor->delivery->data->declaredValue = (float) $jsonData['ancestor']['delivery']['data']['declaredValue'];

}
if (isset($jsonData['ancestor']['delivery']['data']['sendDate'])) {
    $model->ancestor->delivery->data->sendDate = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['ancestor']['delivery']['data']['sendDate']);

}
if (isset($jsonData['ancestor']['delivery']['data']['deliveryType'])) {
    $model->ancestor->delivery->data->deliveryType = $jsonData['ancestor']['delivery']['data']['deliveryType'];

}
if (isset($jsonData['ancestor']['delivery']['data']['pickupType'])) {
    $model->ancestor->delivery->data->pickupType = $jsonData['ancestor']['delivery']['data']['pickupType'];

}
if (isset($jsonData['ancestor']['delivery']['data']['pickuppointDescription'])) {
    $model->ancestor->delivery->data->pickuppointDescription = $jsonData['ancestor']['delivery']['data']['pickuppointDescription'];

}
if (isset($jsonData['ancestor']['delivery']['data']['placesCount'])) {
    $model->ancestor->delivery->data->placesCount = $jsonData['ancestor']['delivery']['data']['placesCount'];

}
if (isset($jsonData['ancestor']['delivery']['data']['service'])) {
    $model->ancestor->delivery->data->service = $jsonData['ancestor']['delivery']['data']['service'];

}


}
if (isset($jsonData['ancestor']['delivery']['service'])) {
    
$model->ancestor->delivery->service = new RetailCrm\Api\Model\Entity\Order\Delivery\SerializedDeliveryService();
if (isset($jsonData['ancestor']['delivery']['service']['name'])) {
    $model->ancestor->delivery->service->name = $jsonData['ancestor']['delivery']['service']['name'];

}
if (isset($jsonData['ancestor']['delivery']['service']['code'])) {
    $model->ancestor->delivery->service->code = $jsonData['ancestor']['delivery']['service']['code'];

}
if (isset($jsonData['ancestor']['delivery']['service']['active'])) {
    $model->ancestor->delivery->service->active = $jsonData['ancestor']['delivery']['service']['active'];

}


}
if (isset($jsonData['ancestor']['delivery']['cost'])) {
    $model->ancestor->delivery->cost = (float) $jsonData['ancestor']['delivery']['cost'];

}
if (isset($jsonData['ancestor']['delivery']['netCost'])) {
    $model->ancestor->delivery->netCost = (float) $jsonData['ancestor']['delivery']['netCost'];

}
if (isset($jsonData['ancestor']['delivery']['date'])) {
    $model->ancestor->delivery->date = \DateTime::createFromFormat('Y-m-d', $jsonData['ancestor']['delivery']['date']);

}
if (isset($jsonData['ancestor']['delivery']['time'])) {
    
$model->ancestor->delivery->time = new RetailCrm\Api\Model\Entity\Delivery\TimeInterval();
if (isset($jsonData['ancestor']['delivery']['time']['from'])) {
    $model->ancestor->delivery->time->from = \DateTime::createFromFormat('H:i', $jsonData['ancestor']['delivery']['time']['from']);

}
if (isset($jsonData['ancestor']['delivery']['time']['to'])) {
    $model->ancestor->delivery->time->to = \DateTime::createFromFormat('H:i', $jsonData['ancestor']['delivery']['time']['to']);

}
if (isset($jsonData['ancestor']['delivery']['time']['custom'])) {
    $model->ancestor->delivery->time->custom = $jsonData['ancestor']['delivery']['time']['custom'];

}


}
if (isset($jsonData['ancestor']['delivery']['address'])) {
    
$model->ancestor->delivery->address = new RetailCrm\Api\Model\Entity\Order\Delivery\OrderDeliveryAddress();
if (isset($jsonData['ancestor']['delivery']['address']['id'])) {
    $model->ancestor->delivery->address->id = $jsonData['ancestor']['delivery']['address']['id'];

}
if (isset($jsonData['ancestor']['delivery']['address']['index'])) {
    $model->ancestor->delivery->address->index = $jsonData['ancestor']['delivery']['address']['index'];

}
if (isset($jsonData['ancestor']['delivery']['address']['countryIso'])) {
    $model->ancestor->delivery->address->countryIso = $jsonData['ancestor']['delivery']['address']['countryIso'];

}
if (isset($jsonData['ancestor']['delivery']['address']['region'])) {
    $model->ancestor->delivery->address->region = $jsonData['ancestor']['delivery']['address']['region'];

}
if (isset($jsonData['ancestor']['delivery']['address']['regionId'])) {
    $model->ancestor->delivery->address->regionId = $jsonData['ancestor']['delivery']['address']['regionId'];

}
if (isset($jsonData['ancestor']['delivery']['address']['city'])) {
    $model->ancestor->delivery->address->city = $jsonData['ancestor']['delivery']['address']['city'];

}
if (isset($jsonData['ancestor']['delivery']['address']['cityId'])) {
    $model->ancestor->delivery->address->cityId = $jsonData['ancestor']['delivery']['address']['cityId'];

}
if (isset($jsonData['ancestor']['delivery']['address']['cityType'])) {
    $model->ancestor->delivery->address->cityType = $jsonData['ancestor']['delivery']['address']['cityType'];

}
if (isset($jsonData['ancestor']['delivery']['address']['street'])) {
    $model->ancestor->delivery->address->street = $jsonData['ancestor']['delivery']['address']['street'];

}
if (isset($jsonData['ancestor']['delivery']['address']['streetId'])) {
    $model->ancestor->delivery->address->streetId = $jsonData['ancestor']['delivery']['address']['streetId'];

}
if (isset($jsonData['ancestor']['delivery']['address']['streetType'])) {
    $model->ancestor->delivery->address->streetType = $jsonData['ancestor']['delivery']['address']['streetType'];

}
if (isset($jsonData['ancestor']['delivery']['address']['building'])) {
    $model->ancestor->delivery->address->building = $jsonData['ancestor']['delivery']['address']['building'];

}
if (isset($jsonData['ancestor']['delivery']['address']['flat'])) {
    $model->ancestor->delivery->address->flat = $jsonData['ancestor']['delivery']['address']['flat'];

}
if (isset($jsonData['ancestor']['delivery']['address']['floor'])) {
    $model->ancestor->delivery->address->floor = $jsonData['ancestor']['delivery']['address']['floor'];

}
if (isset($jsonData['ancestor']['delivery']['address']['block'])) {
    $model->ancestor->delivery->address->block = $jsonData['ancestor']['delivery']['address']['block'];

}
if (isset($jsonData['ancestor']['delivery']['address']['house'])) {
    $model->ancestor->delivery->address->house = $jsonData['ancestor']['delivery']['address']['house'];

}
if (isset($jsonData['ancestor']['delivery']['address']['housing'])) {
    $model->ancestor->delivery->address->housing = $jsonData['ancestor']['delivery']['address']['housing'];

}
if (isset($jsonData['ancestor']['delivery']['address']['metro'])) {
    $model->ancestor->delivery->address->metro = $jsonData['ancestor']['delivery']['address']['metro'];

}
if (isset($jsonData['ancestor']['delivery']['address']['text'])) {
    $model->ancestor->delivery->address->text = $jsonData['ancestor']['delivery']['address']['text'];

}


}
if (isset($jsonData['ancestor']['delivery']['vatRate'])) {
    $model->ancestor->delivery->vatRate = $jsonData['ancestor']['delivery']['vatRate'];

}


}
if (isset($jsonData['ancestor']['marketplace'])) {
    
$model->ancestor->marketplace = new RetailCrm\Api\Model\Entity\Order\MarketplaceData();
if (isset($jsonData['ancestor']['marketplace']['code'])) {
    $model->ancestor->marketplace->code = $jsonData['ancestor']['marketplace']['code'];

}
if (isset($jsonData['ancestor']['marketplace']['orderId'])) {
    $model->ancestor->marketplace->orderId = $jsonData['ancestor']['marketplace']['orderId'];

}


}
if (isset($jsonData['ancestor']['site'])) {
    $model->ancestor->site = $jsonData['ancestor']['site'];

}
if (isset($jsonData['ancestor']['status'])) {
    $model->ancestor->status = $jsonData['ancestor']['status'];

}
if (isset($jsonData['ancestor']['statusComment'])) {
    $model->ancestor->statusComment = $jsonData['ancestor']['statusComment'];

}
if (isset($jsonData['ancestor']['source'])) {
    
$model->ancestor->source = new RetailCrm\Api\Model\Entity\Source();
if (isset($jsonData['ancestor']['source']['source'])) {
    $model->ancestor->source->source = $jsonData['ancestor']['source']['source'];

}
if (isset($jsonData['ancestor']['source']['medium'])) {
    $model->ancestor->source->medium = $jsonData['ancestor']['source']['medium'];

}
if (isset($jsonData['ancestor']['source']['campaign'])) {
    $model->ancestor->source->campaign = $jsonData['ancestor']['source']['campaign'];

}
if (isset($jsonData['ancestor']['source']['keyword'])) {
    $model->ancestor->source->keyword = $jsonData['ancestor']['source']['keyword'];

}
if (isset($jsonData['ancestor']['source']['content'])) {
    $model->ancestor->source->content = $jsonData['ancestor']['source']['content'];

}


}
if (isset($jsonData['ancestor']['items'])) {
    $model->ancestor->items = [];
foreach (array_keys($jsonData['ancestor']['items']) as $index30) {
    
$model->ancestor->items[$index30] = new RetailCrm\Api\Model\Entity\Order\Items\OrderProduct();
if (isset($jsonData['ancestor']['items'][$index30]['externalId'])) {
    $model->ancestor->items[$index30]->externalId = $jsonData['ancestor']['items'][$index30]['externalId'];

}
if (isset($jsonData['ancestor']['items'][$index30]['markingCodes'])) {
    $model->ancestor->items[$index30]->markingCodes = [];
foreach (array_keys($jsonData['ancestor']['items'][$index30]['markingCodes']) as $index56) {
    $model->ancestor->items[$index30]->markingCodes[$index56] = $jsonData['ancestor']['items'][$index30]['markingCodes'][$index56];

}

}
if (isset($jsonData['ancestor']['items'][$index30]['id'])) {
    $model->ancestor->items[$index30]->id = $jsonData['ancestor']['items'][$index30]['id'];

}
if (isset($jsonData['ancestor']['items'][$index30]['externalIds'])) {
    $model->ancestor->items[$index30]->externalIds = [];
foreach (array_keys($jsonData['ancestor']['items'][$index30]['externalIds']) as $index55) {
    
$model->ancestor->items[$index30]->externalIds[$index55] = new RetailCrm\Api\Model\Entity\CodeValueModel();
if (isset($jsonData['ancestor']['items'][$index30]['externalIds'][$index55]['code'])) {
    $model->ancestor->items[$index30]->externalIds[$index55]->code = $jsonData['ancestor']['items'][$index30]['externalIds'][$index55]['code'];

}
if (isset($jsonData['ancestor']['items'][$index30]['externalIds'][$index55]['value'])) {
    $model->ancestor->items[$index30]->externalIds[$index55]->value = $jsonData['ancestor']['items'][$index30]['externalIds'][$index55]['value'];

}


}

}
if (isset($jsonData['ancestor']['items'][$index30]['priceType'])) {
    
$model->ancestor->items[$index30]->priceType = new RetailCrm\Api\Model\Entity\Order\Items\PriceType();
if (isset($jsonData['ancestor']['items'][$index30]['priceType']['code'])) {
    $model->ancestor->items[$index30]->priceType->code = $jsonData['ancestor']['items'][$index30]['priceType']['code'];

}


}
if (isset($jsonData['ancestor']['items'][$index30]['initialPrice'])) {
    $model->ancestor->items[$index30]->initialPrice = (float) $jsonData['ancestor']['items'][$index30]['initialPrice'];

}
if (isset($jsonData['ancestor']['items'][$index30]['discountManualAmount'])) {
    $model->ancestor->items[$index30]->discountManualAmount = (float) $jsonData['ancestor']['items'][$index30]['discountManualAmount'];

}
if (isset($jsonData['ancestor']['items'][$index30]['discountManualPercent'])) {
    $model->ancestor->items[$index30]->discountManualPercent = (float) $jsonData['ancestor']['items'][$index30]['discountManualPercent'];

}
if (isset($jsonData['ancestor']['items'][$index30]['discountTotal'])) {
    $model->ancestor->items[$index30]->discountTotal = (float) $jsonData['ancestor']['items'][$index30]['discountTotal'];

}
if (isset($jsonData['ancestor']['items'][$index30]['prices'])) {
    $model->ancestor->items[$index30]->prices = [];
foreach (array_keys($jsonData['ancestor']['items'][$index30]['prices']) as $index50) {
    
$model->ancestor->items[$index30]->prices[$index50] = new RetailCrm\Api\Model\Entity\Order\Items\OrderProductPriceItem();
if (isset($jsonData['ancestor']['items'][$index30]['prices'][$index50]['price'])) {
    $model->ancestor->items[$index30]->prices[$index50]->price = (float) $jsonData['ancestor']['items'][$index30]['prices'][$index50]['price'];

}
if (isset($jsonData['ancestor']['items'][$index30]['prices'][$index50]['quantity'])) {
    $model->ancestor->items[$index30]->prices[$index50]->quantity = (float) $jsonData['ancestor']['items'][$index30]['prices'][$index50]['quantity'];

}


}

}
if (isset($jsonData['ancestor']['items'][$index30]['vatRate'])) {
    $model->ancestor->items[$index30]->vatRate = $jsonData['ancestor']['items'][$index30]['vatRate'];

}
if (isset($jsonData['ancestor']['items'][$index30]['createdAt'])) {
    $model->ancestor->items[$index30]->createdAt = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['ancestor']['items'][$index30]['createdAt']);

}
if (isset($jsonData['ancestor']['items'][$index30]['quantity'])) {
    $model->ancestor->items[$index30]->quantity = (float) $jsonData['ancestor']['items'][$index30]['quantity'];

}
if (isset($jsonData['ancestor']['items'][$index30]['status'])) {
    $model->ancestor->items[$index30]->status = $jsonData['ancestor']['items'][$index30]['status'];

}
if (isset($jsonData['ancestor']['items'][$index30]['comment'])) {
    $model->ancestor->items[$index30]->comment = $jsonData['ancestor']['items'][$index30]['comment'];

}
if (isset($jsonData['ancestor']['items'][$index30]['offer'])) {
    
$model->ancestor->items[$index30]->offer = new RetailCrm\Api\Model\Entity\Order\Items\Offer();
if (isset($jsonData['ancestor']['items'][$index30]['offer']['displayName'])) {
    $model->ancestor->items[$index30]->offer->displayName = $jsonData['ancestor']['items'][$index30]['offer']['displayName'];

}
if (isset($jsonData['ancestor']['items'][$index30]['offer']['id'])) {
    $model->ancestor->items[$index30]->offer->id = $jsonData['ancestor']['items'][$index30]['offer']['id'];

}
if (isset($jsonData['ancestor']['items'][$index30]['offer']['externalId'])) {
    $model->ancestor->items[$index30]->offer->externalId = $jsonData['ancestor']['items'][$index30]['offer']['externalId'];

}
if (isset($jsonData['ancestor']['items'][$index30]['offer']['xmlId'])) {
    $model->ancestor->items[$index30]->offer->xmlId = $jsonData['ancestor']['items'][$index30]['offer']['xmlId'];

}
if (isset($jsonData['ancestor']['items'][$index30]['offer']['name'])) {
    $model->ancestor->items[$index30]->offer->name = $jsonData['ancestor']['items'][$index30]['offer']['name'];

}
if (isset($jsonData['ancestor']['items'][$index30]['offer']['article'])) {
    $model->ancestor->items[$index30]->offer->article = $jsonData['ancestor']['items'][$index30]['offer']['article'];

}
if (isset($jsonData['ancestor']['items'][$index30]['offer']['vatRate'])) {
    $model->ancestor->items[$index30]->offer->vatRate = $jsonData['ancestor']['items'][$index30]['offer']['vatRate'];

}
if (isset($jsonData['ancestor']['items'][$index30]['offer']['unit'])) {
    
$model->ancestor->items[$index30]->offer->unit = new RetailCrm\Api\Model\Entity\Order\Items\Unit();
if (isset($jsonData['ancestor']['items'][$index30]['offer']['unit']['code'])) {
    $model->ancestor->items[$index30]->offer->unit->code = $jsonData['ancestor']['items'][$index30]['offer']['unit']['code'];

}
if (isset($jsonData['ancestor']['items'][$index30]['offer']['unit']['name'])) {
    $model->ancestor->items[$index30]->offer->unit->name = $jsonData['ancestor']['items'][$index30]['offer']['unit']['name'];

}
if (isset($jsonData['ancestor']['items'][$index30]['offer']['unit']['sym'])) {
    $model->ancestor->items[$index30]->offer->unit->sym = $jsonData['ancestor']['items'][$index30]['offer']['unit']['sym'];

}


}
if (isset($jsonData['ancestor']['items'][$index30]['offer']['barcode'])) {
    $model->ancestor->items[$index30]->offer->barcode = $jsonData['ancestor']['items'][$index30]['offer']['barcode'];

}
if (isset($jsonData['ancestor']['items'][$index30]['offer']['properties'])) {
    $model->ancestor->items[$index30]->offer->properties = [];
foreach (array_keys($jsonData['ancestor']['items'][$index30]['offer']['properties']) as $index63) {
    $model->ancestor->items[$index30]->offer->properties[$index63] = $jsonData['ancestor']['items'][$index30]['offer']['properties'][$index63];

}

}


}
if (isset($jsonData['ancestor']['items'][$index30]['productName'])) {
    $model->ancestor->items[$index30]->productName = $jsonData['ancestor']['items'][$index30]['productName'];

}
if (isset($jsonData['ancestor']['items'][$index30]['isCanceled'])) {
    $model->ancestor->items[$index30]->isCanceled = $jsonData['ancestor']['items'][$index30]['isCanceled'];

}
if (isset($jsonData['ancestor']['items'][$index30]['properties'])) {
    $model->ancestor->items[$index30]->properties = [];
foreach (array_keys($jsonData['ancestor']['items'][$index30]['properties']) as $index54) {
    
$model->ancestor->items[$index30]->properties[$index54] = new RetailCrm\Api\Model\Entity\Order\Items\ItemProperty();
if (isset($jsonData['ancestor']['items'][$index30]['properties'][$index54]['code'])) {
    $model->ancestor->items[$index30]->properties[$index54]->code = $jsonData['ancestor']['items'][$index30]['properties'][$index54]['code'];

}
if (isset($jsonData['ancestor']['items'][$index30]['properties'][$index54]['name'])) {
    $model->ancestor->items[$index30]->properties[$index54]->name = $jsonData['ancestor']['items'][$index30]['properties'][$index54]['name'];

}
if (isset($jsonData['ancestor']['items'][$index30]['properties'][$index54]['value'])) {
    $model->ancestor->items[$index30]->properties[$index54]->value = $jsonData['ancestor']['items'][$index30]['properties'][$index54]['value'];

}


}

}
if (isset($jsonData['ancestor']['items'][$index30]['purchasePrice'])) {
    $model->ancestor->items[$index30]->purchasePrice = (float) $jsonData['ancestor']['items'][$index30]['purchasePrice'];

}


}

}
if (isset($jsonData['ancestor']['fullPaidAt'])) {
    $model->ancestor->fullPaidAt = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['ancestor']['fullPaidAt']);

}
if (isset($jsonData['ancestor']['payments'])) {
    $model->ancestor->payments = [];
foreach (array_keys($jsonData['ancestor']['payments']) as $index33) {
    
$model->ancestor->payments[$index33] = new RetailCrm\Api\Model\Entity\Order\Payment();
if (isset($jsonData['ancestor']['payments'][$index33]['id'])) {
    $model->ancestor->payments[$index33]->id = $jsonData['ancestor']['payments'][$index33]['id'];

}
if (isset($jsonData['ancestor']['payments'][$index33]['status'])) {
    $model->ancestor->payments[$index33]->status = $jsonData['ancestor']['payments'][$index33]['status'];

}
if (isset($jsonData['ancestor']['payments'][$index33]['type'])) {
    $model->ancestor->payments[$index33]->type = $jsonData['ancestor']['payments'][$index33]['type'];

}
if (isset($jsonData['ancestor']['payments'][$index33]['externalId'])) {
    $model->ancestor->payments[$index33]->externalId = $jsonData['ancestor']['payments'][$index33]['externalId'];

}
if (isset($jsonData['ancestor']['payments'][$index33]['amount'])) {
    $model->ancestor->payments[$index33]->amount = (float) $jsonData['ancestor']['payments'][$index33]['amount'];

}
if (isset($jsonData['ancestor']['payments'][$index33]['paidAt'])) {
    $model->ancestor->payments[$index33]->paidAt = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['ancestor']['payments'][$index33]['paidAt']);

}
if (isset($jsonData['ancestor']['payments'][$index33]['comment'])) {
    $model->ancestor->payments[$index33]->comment = $jsonData['ancestor']['payments'][$index33]['comment'];

}


}

}
if (isset($jsonData['ancestor']['fromApi'])) {
    $model->ancestor->fromApi = $jsonData['ancestor']['fromApi'];

}
if (isset($jsonData['ancestor']['weight'])) {
    $model->ancestor->weight = (float) $jsonData['ancestor']['weight'];

}
if (isset($jsonData['ancestor']['length'])) {
    $model->ancestor->length = $jsonData['ancestor']['length'];

}
if (isset($jsonData['ancestor']['width'])) {
    $model->ancestor->width = $jsonData['ancestor']['width'];

}
if (isset($jsonData['ancestor']['height'])) {
    $model->ancestor->height = $jsonData['ancestor']['height'];

}
if (isset($jsonData['ancestor']['shipmentStore'])) {
    $model->ancestor->shipmentStore = $jsonData['ancestor']['shipmentStore'];

}
if (isset($jsonData['ancestor']['shipmentDate'])) {
    $model->ancestor->shipmentDate = \DateTime::createFromFormat('Y-m-d', $jsonData['ancestor']['shipmentDate']);

}
if (isset($jsonData['ancestor']['shipped'])) {
    $model->ancestor->shipped = $jsonData['ancestor']['shipped'];

}
if (isset($jsonData['ancestor']['dialogId'])) {
    $model->ancestor->dialogId = $jsonData['ancestor']['dialogId'];

}
if (isset($jsonData['ancestor']['customFields'])) {
    $model->ancestor->customFields = [];
foreach (array_keys($jsonData['ancestor']['customFields']) as $index37) {
    $model->ancestor->customFields[$index37] = $jsonData['ancestor']['customFields'][$index37];

}

}
if (isset($jsonData['ancestor']['clientId'])) {
    $model->ancestor->clientId = $jsonData['ancestor']['clientId'];

}
if (isset($jsonData['ancestor']['loyaltyEventId'])) {
    $model->ancestor->loyaltyEventId = $jsonData['ancestor']['loyaltyEventId'];

}


}
if (isset($jsonData['item'])) {
    
$model->item = new RetailCrm\Api\Model\Entity\Order\Items\OrderProduct();
if (isset($jsonData['item']['externalId'])) {
    $model->item->externalId = $jsonData['item']['externalId'];

}
if (isset($jsonData['item']['markingCodes'])) {
    $model->item->markingCodes = [];
foreach (array_keys($jsonData['item']['markingCodes']) as $index33) {
    $model->item->markingCodes[$index33] = $jsonData['item']['markingCodes'][$index33];

}

}
if (isset($jsonData['item']['id'])) {
    $model->item->id = $jsonData['item']['id'];

}
if (isset($jsonData['item']['externalIds'])) {
    $model->item->externalIds = [];
foreach (array_keys($jsonData['item']['externalIds']) as $index32) {
    
$model->item->externalIds[$index32] = new RetailCrm\Api\Model\Entity\CodeValueModel();
if (isset($jsonData['item']['externalIds'][$index32]['code'])) {
    $model->item->externalIds[$index32]->code = $jsonData['item']['externalIds'][$index32]['code'];

}
if (isset($jsonData['item']['externalIds'][$index32]['value'])) {
    $model->item->externalIds[$index32]->value = $jsonData['item']['externalIds'][$index32]['value'];

}


}

}
if (isset($jsonData['item']['priceType'])) {
    
$model->item->priceType = new RetailCrm\Api\Model\Entity\Order\Items\PriceType();
if (isset($jsonData['item']['priceType']['code'])) {
    $model->item->priceType->code = $jsonData['item']['priceType']['code'];

}


}
if (isset($jsonData['item']['initialPrice'])) {
    $model->item->initialPrice = (float) $jsonData['item']['initialPrice'];

}
if (isset($jsonData['item']['discountManualAmount'])) {
    $model->item->discountManualAmount = (float) $jsonData['item']['discountManualAmount'];

}
if (isset($jsonData['item']['discountManualPercent'])) {
    $model->item->discountManualPercent = (float) $jsonData['item']['discountManualPercent'];

}
if (isset($jsonData['item']['discountTotal'])) {
    $model->item->discountTotal = (float) $jsonData['item']['discountTotal'];

}
if (isset($jsonData['item']['prices'])) {
    $model->item->prices = [];
foreach (array_keys($jsonData['item']['prices']) as $index27) {
    
$model->item->prices[$index27] = new RetailCrm\Api\Model\Entity\Order\Items\OrderProductPriceItem();
if (isset($jsonData['item']['prices'][$index27]['price'])) {
    $model->item->prices[$index27]->price = (float) $jsonData['item']['prices'][$index27]['price'];

}
if (isset($jsonData['item']['prices'][$index27]['quantity'])) {
    $model->item->prices[$index27]->quantity = (float) $jsonData['item']['prices'][$index27]['quantity'];

}


}

}
if (isset($jsonData['item']['vatRate'])) {
    $model->item->vatRate = $jsonData['item']['vatRate'];

}
if (isset($jsonData['item']['createdAt'])) {
    $model->item->createdAt = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['item']['createdAt']);

}
if (isset($jsonData['item']['quantity'])) {
    $model->item->quantity = (float) $jsonData['item']['quantity'];

}
if (isset($jsonData['item']['status'])) {
    $model->item->status = $jsonData['item']['status'];

}
if (isset($jsonData['item']['comment'])) {
    $model->item->comment = $jsonData['item']['comment'];

}
if (isset($jsonData['item']['offer'])) {
    
$model->item->offer = new RetailCrm\Api\Model\Entity\Order\Items\Offer();
if (isset($jsonData['item']['offer']['displayName'])) {
    $model->item->offer->displayName = $jsonData['item']['offer']['displayName'];

}
if (isset($jsonData['item']['offer']['id'])) {
    $model->item->offer->id = $jsonData['item']['offer']['id'];

}
if (isset($jsonData['item']['offer']['externalId'])) {
    $model->item->offer->externalId = $jsonData['item']['offer']['externalId'];

}
if (isset($jsonData['item']['offer']['xmlId'])) {
    $model->item->offer->xmlId = $jsonData['item']['offer']['xmlId'];

}
if (isset($jsonData['item']['offer']['name'])) {
    $model->item->offer->name = $jsonData['item']['offer']['name'];

}
if (isset($jsonData['item']['offer']['article'])) {
    $model->item->offer->article = $jsonData['item']['offer']['article'];

}
if (isset($jsonData['item']['offer']['vatRate'])) {
    $model->item->offer->vatRate = $jsonData['item']['offer']['vatRate'];

}
if (isset($jsonData['item']['offer']['unit'])) {
    
$model->item->offer->unit = new RetailCrm\Api\Model\Entity\Order\Items\Unit();
if (isset($jsonData['item']['offer']['unit']['code'])) {
    $model->item->offer->unit->code = $jsonData['item']['offer']['unit']['code'];

}
if (isset($jsonData['item']['offer']['unit']['name'])) {
    $model->item->offer->unit->name = $jsonData['item']['offer']['unit']['name'];

}
if (isset($jsonData['item']['offer']['unit']['sym'])) {
    $model->item->offer->unit->sym = $jsonData['item']['offer']['unit']['sym'];

}


}
if (isset($jsonData['item']['offer']['barcode'])) {
    $model->item->offer->barcode = $jsonData['item']['offer']['barcode'];

}
if (isset($jsonData['item']['offer']['properties'])) {
    $model->item->offer->properties = [];
foreach (array_keys($jsonData['item']['offer']['properties']) as $index40) {
    $model->item->offer->properties[$index40] = $jsonData['item']['offer']['properties'][$index40];

}

}


}
if (isset($jsonData['item']['productName'])) {
    $model->item->productName = $jsonData['item']['productName'];

}
if (isset($jsonData['item']['isCanceled'])) {
    $model->item->isCanceled = $jsonData['item']['isCanceled'];

}
if (isset($jsonData['item']['properties'])) {
    $model->item->properties = [];
foreach (array_keys($jsonData['item']['properties']) as $index31) {
    
$model->item->properties[$index31] = new RetailCrm\Api\Model\Entity\Order\Items\ItemProperty();
if (isset($jsonData['item']['properties'][$index31]['code'])) {
    $model->item->properties[$index31]->code = $jsonData['item']['properties'][$index31]['code'];

}
if (isset($jsonData['item']['properties'][$index31]['name'])) {
    $model->item->properties[$index31]->name = $jsonData['item']['properties'][$index31]['name'];

}
if (isset($jsonData['item']['properties'][$index31]['value'])) {
    $model->item->properties[$index31]->value = $jsonData['item']['properties'][$index31]['value'];

}


}

}
if (isset($jsonData['item']['purchasePrice'])) {
    $model->item->purchasePrice = (float) $jsonData['item']['purchasePrice'];

}


}
if (isset($jsonData['payment'])) {
    
$model->payment = new RetailCrm\Api\Model\Entity\Order\Payment();
if (isset($jsonData['payment']['id'])) {
    $model->payment->id = $jsonData['payment']['id'];

}
if (isset($jsonData['payment']['status'])) {
    $model->payment->status = $jsonData['payment']['status'];

}
if (isset($jsonData['payment']['type'])) {
    $model->payment->type = $jsonData['payment']['type'];

}
if (isset($jsonData['payment']['externalId'])) {
    $model->payment->externalId = $jsonData['payment']['externalId'];

}
if (isset($jsonData['payment']['amount'])) {
    $model->payment->amount = (float) $jsonData['payment']['amount'];

}
if (isset($jsonData['payment']['paidAt'])) {
    $model->payment->paidAt = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['payment']['paidAt']);

}
if (isset($jsonData['payment']['comment'])) {
    $model->payment->comment = $jsonData['payment']['comment'];

}


}
if (isset($jsonData['combinedTo'])) {
    
$model->combinedTo = new RetailCrm\Api\Model\Entity\Order\Order();
if (isset($jsonData['combinedTo']['bonusesCreditTotal'])) {
    $model->combinedTo->bonusesCreditTotal = (float) $jsonData['combinedTo']['bonusesCreditTotal'];

}
if (isset($jsonData['combinedTo']['bonusesChargeTotal'])) {
    $model->combinedTo->bonusesChargeTotal = (float) $jsonData['combinedTo']['bonusesChargeTotal'];

}
if (isset($jsonData['combinedTo']['summ'])) {
    $model->combinedTo->summ = (float) $jsonData['combinedTo']['summ'];

}
if (isset($jsonData['combinedTo']['id'])) {
    $model->combinedTo->id = $jsonData['combinedTo']['id'];

}
if (isset($jsonData['combinedTo']['slug'])) {
    $model->combinedTo->slug = $jsonData['combinedTo']['slug'];

}
if (isset($jsonData['combinedTo']['number'])) {
    $model->combinedTo->number = $jsonData['combinedTo']['number'];

}
if (isset($jsonData['combinedTo']['externalId'])) {
    $model->combinedTo->externalId = $jsonData['combinedTo']['externalId'];

}
if (isset($jsonData['combinedTo']['orderType'])) {
    $model->combinedTo->orderType = $jsonData['combinedTo']['orderType'];

}
if (isset($jsonData['combinedTo']['orderMethod'])) {
    $model->combinedTo->orderMethod = $jsonData['combinedTo']['orderMethod'];

}
if (isset($jsonData['combinedTo']['privilegeType'])) {
    $model->combinedTo->privilegeType = $jsonData['combinedTo']['privilegeType'];

}
if (isset($jsonData['combinedTo']['countryIso'])) {
    $model->combinedTo->countryIso = $jsonData['combinedTo']['countryIso'];

}
if (isset($jsonData['combinedTo']['createdAt'])) {
    $model->combinedTo->createdAt = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['combinedTo']['createdAt']);

}
if (isset($jsonData['combinedTo']['statusUpdatedAt'])) {
    $model->combinedTo->statusUpdatedAt = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['combinedTo']['statusUpdatedAt']);

}
if (isset($jsonData['combinedTo']['discountManualAmount'])) {
    $model->combinedTo->discountManualAmount = (float) $jsonData['combinedTo']['discountManualAmount'];

}
if (isset($jsonData['combinedTo']['discountManualPercent'])) {
    $model->combinedTo->discountManualPercent = (float) $jsonData['combinedTo']['discountManualPercent'];

}
if (isset($jsonData['combinedTo']['totalSumm'])) {
    $model->combinedTo->totalSumm = (float) $jsonData['combinedTo']['totalSumm'];

}
if (isset($jsonData['combinedTo']['prepaySum'])) {
    $model->combinedTo->prepaySum = (float) $jsonData['combinedTo']['prepaySum'];

}
if (isset($jsonData['combinedTo']['purchaseSumm'])) {
    $model->combinedTo->purchaseSumm = (float) $jsonData['combinedTo']['purchaseSumm'];

}
if (isset($jsonData['combinedTo']['personalDiscountPercent'])) {
    $model->combinedTo->personalDiscountPercent = (float) $jsonData['combinedTo']['personalDiscountPercent'];

}
if (isset($jsonData['combinedTo']['loyaltyLevel'])) {
    
$model->combinedTo->loyaltyLevel = new RetailCrm\Api\Model\Entity\Loyalty\LoyaltyLevel();
if (isset($jsonData['combinedTo']['loyaltyLevel']['id'])) {
    $model->combinedTo->loyaltyLevel->id = $jsonData['combinedTo']['loyaltyLevel']['id'];

}
if (isset($jsonData['combinedTo']['loyaltyLevel']['name'])) {
    $model->combinedTo->loyaltyLevel->name = $jsonData['combinedTo']['loyaltyLevel']['name'];

}


}
if (isset($jsonData['combinedTo']['loyaltyEvent'])) {
    
$model->combinedTo->loyaltyEvent = new RetailCrm\Api\Model\Entity\Loyalty\AbstractLoyaltyEvent();
if (isset($jsonData['combinedTo']['loyaltyEvent']['id'])) {
    $model->combinedTo->loyaltyEvent->id = $jsonData['combinedTo']['loyaltyEvent']['id'];

}


}
if (isset($jsonData['combinedTo']['mark'])) {
    $model->combinedTo->mark = $jsonData['combinedTo']['mark'];

}
if (isset($jsonData['combinedTo']['markDatetime'])) {
    $model->combinedTo->markDatetime = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['combinedTo']['markDatetime']);

}
if (isset($jsonData['combinedTo']['lastName'])) {
    $model->combinedTo->lastName = $jsonData['combinedTo']['lastName'];

}
if (isset($jsonData['combinedTo']['firstName'])) {
    $model->combinedTo->firstName = $jsonData['combinedTo']['firstName'];

}
if (isset($jsonData['combinedTo']['patronymic'])) {
    $model->combinedTo->patronymic = $jsonData['combinedTo']['patronymic'];

}
if (isset($jsonData['combinedTo']['phone'])) {
    $model->combinedTo->phone = $jsonData['combinedTo']['phone'];

}
if (isset($jsonData['combinedTo']['additionalPhone'])) {
    $model->combinedTo->additionalPhone = $jsonData['combinedTo']['additionalPhone'];

}
if (isset($jsonData['combinedTo']['email'])) {
    $model->combinedTo->email = $jsonData['combinedTo']['email'];

}
if (isset($jsonData['combinedTo']['call'])) {
    $model->combinedTo->call = $jsonData['combinedTo']['call'];

}
if (isset($jsonData['combinedTo']['expired'])) {
    $model->combinedTo->expired = $jsonData['combinedTo']['expired'];

}
if (isset($jsonData['combinedTo']['customerComment'])) {
    $model->combinedTo->customerComment = $jsonData['combinedTo']['customerComment'];

}
if (isset($jsonData['combinedTo']['managerComment'])) {
    $model->combinedTo->managerComment = $jsonData['combinedTo']['managerComment'];

}
if (isset($jsonData['combinedTo']['managerId'])) {
    $model->combinedTo->managerId = $jsonData['combinedTo']['managerId'];

}
if (isset($jsonData['combinedTo']['customer'])) {
    

if (
    !empty($jsonData['combinedTo']['customer']['type']) &&
    \RetailCrm\Api\Enum\Customers\CustomerType::CORPORATE_CUSTOMER === $jsonData['combinedTo']['customer']['type']
) {
    
$model->combinedTo->customer = new RetailCrm\Api\Model\Entity\CustomersCorporate\CustomerCorporate();
if (isset($jsonData['combinedTo']['customer']['type'])) {
    $model->combinedTo->customer->type = $jsonData['combinedTo']['customer']['type'];

}
if (isset($jsonData['combinedTo']['customer']['id'])) {
    $model->combinedTo->customer->id = $jsonData['combinedTo']['customer']['id'];

}
if (isset($jsonData['combinedTo']['customer']['externalId'])) {
    $model->combinedTo->customer->externalId = $jsonData['combinedTo']['customer']['externalId'];

}
if (isset($jsonData['combinedTo']['customer']['nickName'])) {
    $model->combinedTo->customer->nickName = $jsonData['combinedTo']['customer']['nickName'];

}
if (isset($jsonData['combinedTo']['customer']['mainAddress'])) {
    
$model->combinedTo->customer->mainAddress = new RetailCrm\Api\Model\Entity\CustomersCorporate\EntityWithExternalIdNameOutput();
if (isset($jsonData['combinedTo']['customer']['mainAddress']['id'])) {
    $model->combinedTo->customer->mainAddress->id = $jsonData['combinedTo']['customer']['mainAddress']['id'];

}
if (isset($jsonData['combinedTo']['customer']['mainAddress']['externalId'])) {
    $model->combinedTo->customer->mainAddress->externalId = $jsonData['combinedTo']['customer']['mainAddress']['externalId'];

}
if (isset($jsonData['combinedTo']['customer']['mainAddress']['name'])) {
    $model->combinedTo->customer->mainAddress->name = $jsonData['combinedTo']['customer']['mainAddress']['name'];

}


}
if (isset($jsonData['combinedTo']['customer']['createdAt'])) {
    $model->combinedTo->customer->createdAt = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['combinedTo']['customer']['createdAt']);

}
if (isset($jsonData['combinedTo']['customer']['managerId'])) {
    $model->combinedTo->customer->managerId = $jsonData['combinedTo']['customer']['managerId'];

}
if (isset($jsonData['combinedTo']['customer']['source'])) {
    
$model->combinedTo->customer->source = new RetailCrm\Api\Model\Entity\Source();
if (isset($jsonData['combinedTo']['customer']['source']['source'])) {
    $model->combinedTo->customer->source->source = $jsonData['combinedTo']['customer']['source']['source'];

}
if (isset($jsonData['combinedTo']['customer']['source']['medium'])) {
    $model->combinedTo->customer->source->medium = $jsonData['combinedTo']['customer']['source']['medium'];

}
if (isset($jsonData['combinedTo']['customer']['source']['campaign'])) {
    $model->combinedTo->customer->source->campaign = $jsonData['combinedTo']['customer']['source']['campaign'];

}
if (isset($jsonData['combinedTo']['customer']['source']['keyword'])) {
    $model->combinedTo->customer->source->keyword = $jsonData['combinedTo']['customer']['source']['keyword'];

}
if (isset($jsonData['combinedTo']['customer']['source']['content'])) {
    $model->combinedTo->customer->source->content = $jsonData['combinedTo']['customer']['source']['content'];

}


}
if (isset($jsonData['combinedTo']['customer']['customerContacts'])) {
    $model->combinedTo->customer->customerContacts = [];
foreach (array_keys($jsonData['combinedTo']['customer']['customerContacts']) as $index55) {
    
$model->combinedTo->customer->customerContacts[$index55] = new RetailCrm\Api\Model\Entity\CustomersCorporate\CustomerContact();
if (isset($jsonData['combinedTo']['customer']['customerContacts'][$index55]['id'])) {
    $model->combinedTo->customer->customerContacts[$index55]->id = $jsonData['combinedTo']['customer']['customerContacts'][$index55]['id'];

}
if (isset($jsonData['combinedTo']['customer']['customerContacts'][$index55]['isMain'])) {
    $model->combinedTo->customer->customerContacts[$index55]->isMain = $jsonData['combinedTo']['customer']['customerContacts'][$index55]['isMain'];

}
if (isset($jsonData['combinedTo']['customer']['customerContacts'][$index55]['customer'])) {
    
$model->combinedTo->customer->customerContacts[$index55]->customer = new RetailCrm\Api\Model\Entity\CustomersCorporate\SerializedRelationAbstractCustomer();
if (isset($jsonData['combinedTo']['customer']['customerContacts'][$index55]['customer']['id'])) {
    $model->combinedTo->customer->customerContacts[$index55]->customer->id = $jsonData['combinedTo']['customer']['customerContacts'][$index55]['customer']['id'];

}
if (isset($jsonData['combinedTo']['customer']['customerContacts'][$index55]['customer']['externalId'])) {
    $model->combinedTo->customer->customerContacts[$index55]->customer->externalId = $jsonData['combinedTo']['customer']['customerContacts'][$index55]['customer']['externalId'];

}
if (isset($jsonData['combinedTo']['customer']['customerContacts'][$index55]['customer']['browserId'])) {
    $model->combinedTo->customer->customerContacts[$index55]->customer->browserId = $jsonData['combinedTo']['customer']['customerContacts'][$index55]['customer']['browserId'];

}
if (isset($jsonData['combinedTo']['customer']['customerContacts'][$index55]['customer']['site'])) {
    $model->combinedTo->customer->customerContacts[$index55]->customer->site = $jsonData['combinedTo']['customer']['customerContacts'][$index55]['customer']['site'];

}
if (isset($jsonData['combinedTo']['customer']['customerContacts'][$index55]['customer']['companies'])) {
    $model->combinedTo->customer->customerContacts[$index55]->customer->companies = [];
foreach (array_keys($jsonData['combinedTo']['customer']['customerContacts'][$index55]['customer']['companies']) as $index90) {
    
$model->combinedTo->customer->customerContacts[$index55]->customer->companies[$index90] = new RetailCrm\Api\Model\Entity\CustomersCorporate\CustomerContactCompany();
if (isset($jsonData['combinedTo']['customer']['customerContacts'][$index55]['customer']['companies'][$index90]['id'])) {
    $model->combinedTo->customer->customerContacts[$index55]->customer->companies[$index90]->id = $jsonData['combinedTo']['customer']['customerContacts'][$index55]['customer']['companies'][$index90]['id'];

}
if (isset($jsonData['combinedTo']['customer']['customerContacts'][$index55]['customer']['companies'][$index90]['externalId'])) {
    $model->combinedTo->customer->customerContacts[$index55]->customer->companies[$index90]->externalId = $jsonData['combinedTo']['customer']['customerContacts'][$index55]['customer']['companies'][$index90]['externalId'];

}
if (isset($jsonData['combinedTo']['customer']['customerContacts'][$index55]['customer']['companies'][$index90]['company'])) {
    
$model->combinedTo->customer->customerContacts[$index55]->customer->companies[$index90]->company = new RetailCrm\Api\Model\Entity\CustomersCorporate\EntityWithExternalIdNameOutput();
if (isset($jsonData['combinedTo']['customer']['customerContacts'][$index55]['customer']['companies'][$index90]['company']['id'])) {
    $model->combinedTo->customer->customerContacts[$index55]->customer->companies[$index90]->company->id = $jsonData['combinedTo']['customer']['customerContacts'][$index55]['customer']['companies'][$index90]['company']['id'];

}
if (isset($jsonData['combinedTo']['customer']['customerContacts'][$index55]['customer']['companies'][$index90]['company']['externalId'])) {
    $model->combinedTo->customer->customerContacts[$index55]->customer->companies[$index90]->company->externalId = $jsonData['combinedTo']['customer']['customerContacts'][$index55]['customer']['companies'][$index90]['company']['externalId'];

}
if (isset($jsonData['combinedTo']['customer']['customerContacts'][$index55]['customer']['companies'][$index90]['company']['name'])) {
    $model->combinedTo->customer->customerContacts[$index55]->customer->companies[$index90]->company->name = $jsonData['combinedTo']['customer']['customerContacts'][$index55]['customer']['companies'][$index90]['company']['name'];

}


}


}

}


}
if (isset($jsonData['combinedTo']['customer']['customerContacts'][$index55]['companies'])) {
    $model->combinedTo->customer->customerContacts[$index55]->companies = [];
foreach (array_keys($jsonData['combinedTo']['customer']['customerContacts'][$index55]['companies']) as $index78) {
    
$model->combinedTo->customer->customerContacts[$index55]->companies[$index78] = new RetailCrm\Api\Model\Entity\CustomersCorporate\CustomerContactCompany();
if (isset($jsonData['combinedTo']['customer']['customerContacts'][$index55]['companies'][$index78]['id'])) {
    $model->combinedTo->customer->customerContacts[$index55]->companies[$index78]->id = $jsonData['combinedTo']['customer']['customerContacts'][$index55]['companies'][$index78]['id'];

}
if (isset($jsonData['combinedTo']['customer']['customerContacts'][$index55]['companies'][$index78]['externalId'])) {
    $model->combinedTo->customer->customerContacts[$index55]->companies[$index78]->externalId = $jsonData['combinedTo']['customer']['customerContacts'][$index55]['companies'][$index78]['externalId'];

}
if (isset($jsonData['combinedTo']['customer']['customerContacts'][$index55]['companies'][$index78]['company'])) {
    
$model->combinedTo->customer->customerContacts[$index55]->companies[$index78]->company = new RetailCrm\Api\Model\Entity\CustomersCorporate\EntityWithExternalIdNameOutput();
if (isset($jsonData['combinedTo']['customer']['customerContacts'][$index55]['companies'][$index78]['company']['id'])) {
    $model->combinedTo->customer->customerContacts[$index55]->companies[$index78]->company->id = $jsonData['combinedTo']['customer']['customerContacts'][$index55]['companies'][$index78]['company']['id'];

}
if (isset($jsonData['combinedTo']['customer']['customerContacts'][$index55]['companies'][$index78]['company']['externalId'])) {
    $model->combinedTo->customer->customerContacts[$index55]->companies[$index78]->company->externalId = $jsonData['combinedTo']['customer']['customerContacts'][$index55]['companies'][$index78]['company']['externalId'];

}
if (isset($jsonData['combinedTo']['customer']['customerContacts'][$index55]['companies'][$index78]['company']['name'])) {
    $model->combinedTo->customer->customerContacts[$index55]->companies[$index78]->company->name = $jsonData['combinedTo']['customer']['customerContacts'][$index55]['companies'][$index78]['company']['name'];

}


}


}

}


}

}
if (isset($jsonData['combinedTo']['customer']['companies'])) {
    $model->combinedTo->customer->companies = [];
foreach (array_keys($jsonData['combinedTo']['customer']['companies']) as $index48) {
    
$model->combinedTo->customer->companies[$index48] = new RetailCrm\Api\Model\Entity\CustomersCorporate\Company();
if (isset($jsonData['combinedTo']['customer']['companies'][$index48]['id'])) {
    $model->combinedTo->customer->companies[$index48]->id = $jsonData['combinedTo']['customer']['companies'][$index48]['id'];

}
if (isset($jsonData['combinedTo']['customer']['companies'][$index48]['isMain'])) {
    $model->combinedTo->customer->companies[$index48]->isMain = $jsonData['combinedTo']['customer']['companies'][$index48]['isMain'];

}
if (isset($jsonData['combinedTo']['customer']['companies'][$index48]['externalId'])) {
    $model->combinedTo->customer->companies[$index48]->externalId = $jsonData['combinedTo']['customer']['companies'][$index48]['externalId'];

}
if (isset($jsonData['combinedTo']['customer']['companies'][$index48]['active'])) {
    $model->combinedTo->customer->companies[$index48]->active = $jsonData['combinedTo']['customer']['companies'][$index48]['active'];

}
if (isset($jsonData['combinedTo']['customer']['companies'][$index48]['name'])) {
    $model->combinedTo->customer->companies[$index48]->name = $jsonData['combinedTo']['customer']['companies'][$index48]['name'];

}
if (isset($jsonData['combinedTo']['customer']['companies'][$index48]['brand'])) {
    $model->combinedTo->customer->companies[$index48]->brand = $jsonData['combinedTo']['customer']['companies'][$index48]['brand'];

}
if (isset($jsonData['combinedTo']['customer']['companies'][$index48]['site'])) {
    $model->combinedTo->customer->companies[$index48]->site = $jsonData['combinedTo']['customer']['companies'][$index48]['site'];

}
if (isset($jsonData['combinedTo']['customer']['companies'][$index48]['createdAt'])) {
    $model->combinedTo->customer->companies[$index48]->createdAt = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['combinedTo']['customer']['companies'][$index48]['createdAt']);

}
if (isset($jsonData['combinedTo']['customer']['companies'][$index48]['customer'])) {
    
$model->combinedTo->customer->companies[$index48]->customer = new RetailCrm\Api\Model\Entity\CustomersCorporate\SerializedEntityCustomer();
if (isset($jsonData['combinedTo']['customer']['companies'][$index48]['customer']['site'])) {
    $model->combinedTo->customer->companies[$index48]->customer->site = $jsonData['combinedTo']['customer']['companies'][$index48]['customer']['site'];

}
if (isset($jsonData['combinedTo']['customer']['companies'][$index48]['customer']['id'])) {
    $model->combinedTo->customer->companies[$index48]->customer->id = $jsonData['combinedTo']['customer']['companies'][$index48]['customer']['id'];

}
if (isset($jsonData['combinedTo']['customer']['companies'][$index48]['customer']['externalId'])) {
    $model->combinedTo->customer->companies[$index48]->customer->externalId = $jsonData['combinedTo']['customer']['companies'][$index48]['customer']['externalId'];

}
if (isset($jsonData['combinedTo']['customer']['companies'][$index48]['customer']['type'])) {
    $model->combinedTo->customer->companies[$index48]->customer->type = $jsonData['combinedTo']['customer']['companies'][$index48]['customer']['type'];

}


}
if (isset($jsonData['combinedTo']['customer']['companies'][$index48]['contragent'])) {
    
$model->combinedTo->customer->companies[$index48]->contragent = new RetailCrm\Api\Model\Entity\Customers\CustomerContragent();
if (isset($jsonData['combinedTo']['customer']['companies'][$index48]['contragent']['contragentType'])) {
    $model->combinedTo->customer->companies[$index48]->contragent->contragentType = $jsonData['combinedTo']['customer']['companies'][$index48]['contragent']['contragentType'];

}
if (isset($jsonData['combinedTo']['customer']['companies'][$index48]['contragent']['legalName'])) {
    $model->combinedTo->customer->companies[$index48]->contragent->legalName = $jsonData['combinedTo']['customer']['companies'][$index48]['contragent']['legalName'];

}
if (isset($jsonData['combinedTo']['customer']['companies'][$index48]['contragent']['legalAddress'])) {
    $model->combinedTo->customer->companies[$index48]->contragent->legalAddress = $jsonData['combinedTo']['customer']['companies'][$index48]['contragent']['legalAddress'];

}
if (isset($jsonData['combinedTo']['customer']['companies'][$index48]['contragent']['INN'])) {
    $model->combinedTo->customer->companies[$index48]->contragent->INN = $jsonData['combinedTo']['customer']['companies'][$index48]['contragent']['INN'];

}
if (isset($jsonData['combinedTo']['customer']['companies'][$index48]['contragent']['OKPO'])) {
    $model->combinedTo->customer->companies[$index48]->contragent->OKPO = $jsonData['combinedTo']['customer']['companies'][$index48]['contragent']['OKPO'];

}
if (isset($jsonData['combinedTo']['customer']['companies'][$index48]['contragent']['KPP'])) {
    $model->combinedTo->customer->companies[$index48]->contragent->KPP = $jsonData['combinedTo']['customer']['companies'][$index48]['contragent']['KPP'];

}
if (isset($jsonData['combinedTo']['customer']['companies'][$index48]['contragent']['OGRN'])) {
    $model->combinedTo->customer->companies[$index48]->contragent->OGRN = $jsonData['combinedTo']['customer']['companies'][$index48]['contragent']['OGRN'];

}
if (isset($jsonData['combinedTo']['customer']['companies'][$index48]['contragent']['OGRNIP'])) {
    $model->combinedTo->customer->companies[$index48]->contragent->OGRNIP = $jsonData['combinedTo']['customer']['companies'][$index48]['contragent']['OGRNIP'];

}
if (isset($jsonData['combinedTo']['customer']['companies'][$index48]['contragent']['certificateNumber'])) {
    $model->combinedTo->customer->companies[$index48]->contragent->certificateNumber = $jsonData['combinedTo']['customer']['companies'][$index48]['contragent']['certificateNumber'];

}
if (isset($jsonData['combinedTo']['customer']['companies'][$index48]['contragent']['certificateDate'])) {
    $model->combinedTo->customer->companies[$index48]->contragent->certificateDate = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['combinedTo']['customer']['companies'][$index48]['contragent']['certificateDate']);

}
if (isset($jsonData['combinedTo']['customer']['companies'][$index48]['contragent']['BIK'])) {
    $model->combinedTo->customer->companies[$index48]->contragent->BIK = $jsonData['combinedTo']['customer']['companies'][$index48]['contragent']['BIK'];

}
if (isset($jsonData['combinedTo']['customer']['companies'][$index48]['contragent']['bank'])) {
    $model->combinedTo->customer->companies[$index48]->contragent->bank = $jsonData['combinedTo']['customer']['companies'][$index48]['contragent']['bank'];

}
if (isset($jsonData['combinedTo']['customer']['companies'][$index48]['contragent']['bankAddress'])) {
    $model->combinedTo->customer->companies[$index48]->contragent->bankAddress = $jsonData['combinedTo']['customer']['companies'][$index48]['contragent']['bankAddress'];

}
if (isset($jsonData['combinedTo']['customer']['companies'][$index48]['contragent']['corrAccount'])) {
    $model->combinedTo->customer->companies[$index48]->contragent->corrAccount = $jsonData['combinedTo']['customer']['companies'][$index48]['contragent']['corrAccount'];

}
if (isset($jsonData['combinedTo']['customer']['companies'][$index48]['contragent']['bankAccount'])) {
    $model->combinedTo->customer->companies[$index48]->contragent->bankAccount = $jsonData['combinedTo']['customer']['companies'][$index48]['contragent']['bankAccount'];

}


}
if (isset($jsonData['combinedTo']['customer']['companies'][$index48]['address'])) {
    
$model->combinedTo->customer->companies[$index48]->address = new RetailCrm\Api\Model\Entity\Customers\CustomerAddress();
if (isset($jsonData['combinedTo']['customer']['companies'][$index48]['address']['id'])) {
    $model->combinedTo->customer->companies[$index48]->address->id = $jsonData['combinedTo']['customer']['companies'][$index48]['address']['id'];

}
if (isset($jsonData['combinedTo']['customer']['companies'][$index48]['address']['name'])) {
    $model->combinedTo->customer->companies[$index48]->address->name = $jsonData['combinedTo']['customer']['companies'][$index48]['address']['name'];

}
if (isset($jsonData['combinedTo']['customer']['companies'][$index48]['address']['isMain'])) {
    $model->combinedTo->customer->companies[$index48]->address->isMain = $jsonData['combinedTo']['customer']['companies'][$index48]['address']['isMain'];

}
if (isset($jsonData['combinedTo']['customer']['companies'][$index48]['address']['index'])) {
    $model->combinedTo->customer->companies[$index48]->address->index = $jsonData['combinedTo']['customer']['companies'][$index48]['address']['index'];

}
if (isset($jsonData['combinedTo']['customer']['companies'][$index48]['address']['countryIso'])) {
    $model->combinedTo->customer->companies[$index48]->address->countryIso = $jsonData['combinedTo']['customer']['companies'][$index48]['address']['countryIso'];

}
if (isset($jsonData['combinedTo']['customer']['companies'][$index48]['address']['region'])) {
    $model->combinedTo->customer->companies[$index48]->address->region = $jsonData['combinedTo']['customer']['companies'][$index48]['address']['region'];

}
if (isset($jsonData['combinedTo']['customer']['companies'][$index48]['address']['regionId'])) {
    $model->combinedTo->customer->companies[$index48]->address->regionId = $jsonData['combinedTo']['customer']['companies'][$index48]['address']['regionId'];

}
if (isset($jsonData['combinedTo']['customer']['companies'][$index48]['address']['city'])) {
    $model->combinedTo->customer->companies[$index48]->address->city = $jsonData['combinedTo']['customer']['companies'][$index48]['address']['city'];

}
if (isset($jsonData['combinedTo']['customer']['companies'][$index48]['address']['cityId'])) {
    $model->combinedTo->customer->companies[$index48]->address->cityId = $jsonData['combinedTo']['customer']['companies'][$index48]['address']['cityId'];

}
if (isset($jsonData['combinedTo']['customer']['companies'][$index48]['address']['cityType'])) {
    $model->combinedTo->customer->companies[$index48]->address->cityType = $jsonData['combinedTo']['customer']['companies'][$index48]['address']['cityType'];

}
if (isset($jsonData['combinedTo']['customer']['companies'][$index48]['address']['street'])) {
    $model->combinedTo->customer->companies[$index48]->address->street = $jsonData['combinedTo']['customer']['companies'][$index48]['address']['street'];

}
if (isset($jsonData['combinedTo']['customer']['companies'][$index48]['address']['streetId'])) {
    $model->combinedTo->customer->companies[$index48]->address->streetId = $jsonData['combinedTo']['customer']['companies'][$index48]['address']['streetId'];

}
if (isset($jsonData['combinedTo']['customer']['companies'][$index48]['address']['streetType'])) {
    $model->combinedTo->customer->companies[$index48]->address->streetType = $jsonData['combinedTo']['customer']['companies'][$index48]['address']['streetType'];

}
if (isset($jsonData['combinedTo']['customer']['companies'][$index48]['address']['building'])) {
    $model->combinedTo->customer->companies[$index48]->address->building = $jsonData['combinedTo']['customer']['companies'][$index48]['address']['building'];

}
if (isset($jsonData['combinedTo']['customer']['companies'][$index48]['address']['flat'])) {
    $model->combinedTo->customer->companies[$index48]->address->flat = $jsonData['combinedTo']['customer']['companies'][$index48]['address']['flat'];

}
if (isset($jsonData['combinedTo']['customer']['companies'][$index48]['address']['floor'])) {
    $model->combinedTo->customer->companies[$index48]->address->floor = $jsonData['combinedTo']['customer']['companies'][$index48]['address']['floor'];

}
if (isset($jsonData['combinedTo']['customer']['companies'][$index48]['address']['block'])) {
    $model->combinedTo->customer->companies[$index48]->address->block = $jsonData['combinedTo']['customer']['companies'][$index48]['address']['block'];

}
if (isset($jsonData['combinedTo']['customer']['companies'][$index48]['address']['house'])) {
    $model->combinedTo->customer->companies[$index48]->address->house = $jsonData['combinedTo']['customer']['companies'][$index48]['address']['house'];

}
if (isset($jsonData['combinedTo']['customer']['companies'][$index48]['address']['housing'])) {
    $model->combinedTo->customer->companies[$index48]->address->housing = $jsonData['combinedTo']['customer']['companies'][$index48]['address']['housing'];

}
if (isset($jsonData['combinedTo']['customer']['companies'][$index48]['address']['metro'])) {
    $model->combinedTo->customer->companies[$index48]->address->metro = $jsonData['combinedTo']['customer']['companies'][$index48]['address']['metro'];

}
if (isset($jsonData['combinedTo']['customer']['companies'][$index48]['address']['notes'])) {
    $model->combinedTo->customer->companies[$index48]->address->notes = $jsonData['combinedTo']['customer']['companies'][$index48]['address']['notes'];

}
if (isset($jsonData['combinedTo']['customer']['companies'][$index48]['address']['text'])) {
    $model->combinedTo->customer->companies[$index48]->address->text = $jsonData['combinedTo']['customer']['companies'][$index48]['address']['text'];

}
if (isset($jsonData['combinedTo']['customer']['companies'][$index48]['address']['externalId'])) {
    $model->combinedTo->customer->companies[$index48]->address->externalId = $jsonData['combinedTo']['customer']['companies'][$index48]['address']['externalId'];

}


}
if (isset($jsonData['combinedTo']['customer']['companies'][$index48]['customFields'])) {
    $model->combinedTo->customer->companies[$index48]->customFields = [];
foreach (array_keys($jsonData['combinedTo']['customer']['companies'][$index48]['customFields']) as $index74) {
    $model->combinedTo->customer->companies[$index48]->customFields[$index74] = $jsonData['combinedTo']['customer']['companies'][$index48]['customFields'][$index74];

}

}
if (isset($jsonData['combinedTo']['customer']['companies'][$index48]['marginSumm'])) {
    $model->combinedTo->customer->companies[$index48]->marginSumm = (float) $jsonData['combinedTo']['customer']['companies'][$index48]['marginSumm'];

}
if (isset($jsonData['combinedTo']['customer']['companies'][$index48]['totalSumm'])) {
    $model->combinedTo->customer->companies[$index48]->totalSumm = (float) $jsonData['combinedTo']['customer']['companies'][$index48]['totalSumm'];

}
if (isset($jsonData['combinedTo']['customer']['companies'][$index48]['averageSumm'])) {
    $model->combinedTo->customer->companies[$index48]->averageSumm = (float) $jsonData['combinedTo']['customer']['companies'][$index48]['averageSumm'];

}
if (isset($jsonData['combinedTo']['customer']['companies'][$index48]['ordersCount'])) {
    $model->combinedTo->customer->companies[$index48]->ordersCount = $jsonData['combinedTo']['customer']['companies'][$index48]['ordersCount'];

}
if (isset($jsonData['combinedTo']['customer']['companies'][$index48]['costSumm'])) {
    $model->combinedTo->customer->companies[$index48]->costSumm = (float) $jsonData['combinedTo']['customer']['companies'][$index48]['costSumm'];

}


}

}
if (isset($jsonData['combinedTo']['customer']['addresses'])) {
    $model->combinedTo->customer->addresses = [];
foreach (array_keys($jsonData['combinedTo']['customer']['addresses']) as $index48) {
    
$model->combinedTo->customer->addresses[$index48] = new RetailCrm\Api\Model\Entity\Customers\CustomerAddress();
if (isset($jsonData['combinedTo']['customer']['addresses'][$index48]['id'])) {
    $model->combinedTo->customer->addresses[$index48]->id = $jsonData['combinedTo']['customer']['addresses'][$index48]['id'];

}
if (isset($jsonData['combinedTo']['customer']['addresses'][$index48]['name'])) {
    $model->combinedTo->customer->addresses[$index48]->name = $jsonData['combinedTo']['customer']['addresses'][$index48]['name'];

}
if (isset($jsonData['combinedTo']['customer']['addresses'][$index48]['isMain'])) {
    $model->combinedTo->customer->addresses[$index48]->isMain = $jsonData['combinedTo']['customer']['addresses'][$index48]['isMain'];

}
if (isset($jsonData['combinedTo']['customer']['addresses'][$index48]['index'])) {
    $model->combinedTo->customer->addresses[$index48]->index = $jsonData['combinedTo']['customer']['addresses'][$index48]['index'];

}
if (isset($jsonData['combinedTo']['customer']['addresses'][$index48]['countryIso'])) {
    $model->combinedTo->customer->addresses[$index48]->countryIso = $jsonData['combinedTo']['customer']['addresses'][$index48]['countryIso'];

}
if (isset($jsonData['combinedTo']['customer']['addresses'][$index48]['region'])) {
    $model->combinedTo->customer->addresses[$index48]->region = $jsonData['combinedTo']['customer']['addresses'][$index48]['region'];

}
if (isset($jsonData['combinedTo']['customer']['addresses'][$index48]['regionId'])) {
    $model->combinedTo->customer->addresses[$index48]->regionId = $jsonData['combinedTo']['customer']['addresses'][$index48]['regionId'];

}
if (isset($jsonData['combinedTo']['customer']['addresses'][$index48]['city'])) {
    $model->combinedTo->customer->addresses[$index48]->city = $jsonData['combinedTo']['customer']['addresses'][$index48]['city'];

}
if (isset($jsonData['combinedTo']['customer']['addresses'][$index48]['cityId'])) {
    $model->combinedTo->customer->addresses[$index48]->cityId = $jsonData['combinedTo']['customer']['addresses'][$index48]['cityId'];

}
if (isset($jsonData['combinedTo']['customer']['addresses'][$index48]['cityType'])) {
    $model->combinedTo->customer->addresses[$index48]->cityType = $jsonData['combinedTo']['customer']['addresses'][$index48]['cityType'];

}
if (isset($jsonData['combinedTo']['customer']['addresses'][$index48]['street'])) {
    $model->combinedTo->customer->addresses[$index48]->street = $jsonData['combinedTo']['customer']['addresses'][$index48]['street'];

}
if (isset($jsonData['combinedTo']['customer']['addresses'][$index48]['streetId'])) {
    $model->combinedTo->customer->addresses[$index48]->streetId = $jsonData['combinedTo']['customer']['addresses'][$index48]['streetId'];

}
if (isset($jsonData['combinedTo']['customer']['addresses'][$index48]['streetType'])) {
    $model->combinedTo->customer->addresses[$index48]->streetType = $jsonData['combinedTo']['customer']['addresses'][$index48]['streetType'];

}
if (isset($jsonData['combinedTo']['customer']['addresses'][$index48]['building'])) {
    $model->combinedTo->customer->addresses[$index48]->building = $jsonData['combinedTo']['customer']['addresses'][$index48]['building'];

}
if (isset($jsonData['combinedTo']['customer']['addresses'][$index48]['flat'])) {
    $model->combinedTo->customer->addresses[$index48]->flat = $jsonData['combinedTo']['customer']['addresses'][$index48]['flat'];

}
if (isset($jsonData['combinedTo']['customer']['addresses'][$index48]['floor'])) {
    $model->combinedTo->customer->addresses[$index48]->floor = $jsonData['combinedTo']['customer']['addresses'][$index48]['floor'];

}
if (isset($jsonData['combinedTo']['customer']['addresses'][$index48]['block'])) {
    $model->combinedTo->customer->addresses[$index48]->block = $jsonData['combinedTo']['customer']['addresses'][$index48]['block'];

}
if (isset($jsonData['combinedTo']['customer']['addresses'][$index48]['house'])) {
    $model->combinedTo->customer->addresses[$index48]->house = $jsonData['combinedTo']['customer']['addresses'][$index48]['house'];

}
if (isset($jsonData['combinedTo']['customer']['addresses'][$index48]['housing'])) {
    $model->combinedTo->customer->addresses[$index48]->housing = $jsonData['combinedTo']['customer']['addresses'][$index48]['housing'];

}
if (isset($jsonData['combinedTo']['customer']['addresses'][$index48]['metro'])) {
    $model->combinedTo->customer->addresses[$index48]->metro = $jsonData['combinedTo']['customer']['addresses'][$index48]['metro'];

}
if (isset($jsonData['combinedTo']['customer']['addresses'][$index48]['notes'])) {
    $model->combinedTo->customer->addresses[$index48]->notes = $jsonData['combinedTo']['customer']['addresses'][$index48]['notes'];

}
if (isset($jsonData['combinedTo']['customer']['addresses'][$index48]['text'])) {
    $model->combinedTo->customer->addresses[$index48]->text = $jsonData['combinedTo']['customer']['addresses'][$index48]['text'];

}
if (isset($jsonData['combinedTo']['customer']['addresses'][$index48]['externalId'])) {
    $model->combinedTo->customer->addresses[$index48]->externalId = $jsonData['combinedTo']['customer']['addresses'][$index48]['externalId'];

}


}

}
if (isset($jsonData['combinedTo']['customer']['vip'])) {
    $model->combinedTo->customer->vip = $jsonData['combinedTo']['customer']['vip'];

}
if (isset($jsonData['combinedTo']['customer']['bad'])) {
    $model->combinedTo->customer->bad = $jsonData['combinedTo']['customer']['bad'];

}
if (isset($jsonData['combinedTo']['customer']['site'])) {
    $model->combinedTo->customer->site = $jsonData['combinedTo']['customer']['site'];

}
if (isset($jsonData['combinedTo']['customer']['tags'])) {
    $model->combinedTo->customer->tags = [];
foreach (array_keys($jsonData['combinedTo']['customer']['tags']) as $index43) {
    
$model->combinedTo->customer->tags[$index43] = new RetailCrm\Api\Model\Entity\Customers\CustomerTag();
if (isset($jsonData['combinedTo']['customer']['tags'][$index43]['name'])) {
    $model->combinedTo->customer->tags[$index43]->name = $jsonData['combinedTo']['customer']['tags'][$index43]['name'];

}
if (isset($jsonData['combinedTo']['customer']['tags'][$index43]['color'])) {
    $model->combinedTo->customer->tags[$index43]->color = $jsonData['combinedTo']['customer']['tags'][$index43]['color'];

}
if (isset($jsonData['combinedTo']['customer']['tags'][$index43]['attached'])) {
    $model->combinedTo->customer->tags[$index43]->attached = $jsonData['combinedTo']['customer']['tags'][$index43]['attached'];

}


}

}
if (isset($jsonData['combinedTo']['customer']['avgMarginSumm'])) {
    $model->combinedTo->customer->avgMarginSumm = (float) $jsonData['combinedTo']['customer']['avgMarginSumm'];

}
if (isset($jsonData['combinedTo']['customer']['marginSumm'])) {
    $model->combinedTo->customer->marginSumm = (float) $jsonData['combinedTo']['customer']['marginSumm'];

}
if (isset($jsonData['combinedTo']['customer']['totalSumm'])) {
    $model->combinedTo->customer->totalSumm = (float) $jsonData['combinedTo']['customer']['totalSumm'];

}
if (isset($jsonData['combinedTo']['customer']['averageSumm'])) {
    $model->combinedTo->customer->averageSumm = (float) $jsonData['combinedTo']['customer']['averageSumm'];

}
if (isset($jsonData['combinedTo']['customer']['ordersCount'])) {
    $model->combinedTo->customer->ordersCount = $jsonData['combinedTo']['customer']['ordersCount'];

}
if (isset($jsonData['combinedTo']['customer']['costSumm'])) {
    $model->combinedTo->customer->costSumm = (float) $jsonData['combinedTo']['customer']['costSumm'];

}
if (isset($jsonData['combinedTo']['customer']['customFields'])) {
    $model->combinedTo->customer->customFields = [];
foreach (array_keys($jsonData['combinedTo']['customer']['customFields']) as $index51) {
    $model->combinedTo->customer->customFields[$index51] = $jsonData['combinedTo']['customer']['customFields'][$index51];

}

}
if (isset($jsonData['combinedTo']['customer']['personalDiscount'])) {
    $model->combinedTo->customer->personalDiscount = (float) $jsonData['combinedTo']['customer']['personalDiscount'];

}
if (isset($jsonData['combinedTo']['customer']['cumulativeDiscount'])) {
    $model->combinedTo->customer->cumulativeDiscount = (float) $jsonData['combinedTo']['customer']['cumulativeDiscount'];

}
if (isset($jsonData['combinedTo']['customer']['discountCardNumber'])) {
    $model->combinedTo->customer->discountCardNumber = $jsonData['combinedTo']['customer']['discountCardNumber'];

}
if (isset($jsonData['combinedTo']['customer']['firstClientId'])) {
    $model->combinedTo->customer->firstClientId = $jsonData['combinedTo']['customer']['firstClientId'];

}
if (isset($jsonData['combinedTo']['customer']['lastClientId'])) {
    $model->combinedTo->customer->lastClientId = $jsonData['combinedTo']['customer']['lastClientId'];

}
if (isset($jsonData['combinedTo']['customer']['mainCustomerContact'])) {
    
$model->combinedTo->customer->mainCustomerContact = new RetailCrm\Api\Model\Entity\CustomersCorporate\CustomerContact();
if (isset($jsonData['combinedTo']['customer']['mainCustomerContact']['id'])) {
    $model->combinedTo->customer->mainCustomerContact->id = $jsonData['combinedTo']['customer']['mainCustomerContact']['id'];

}
if (isset($jsonData['combinedTo']['customer']['mainCustomerContact']['isMain'])) {
    $model->combinedTo->customer->mainCustomerContact->isMain = $jsonData['combinedTo']['customer']['mainCustomerContact']['isMain'];

}
if (isset($jsonData['combinedTo']['customer']['mainCustomerContact']['customer'])) {
    
$model->combinedTo->customer->mainCustomerContact->customer = new RetailCrm\Api\Model\Entity\CustomersCorporate\SerializedRelationAbstractCustomer();
if (isset($jsonData['combinedTo']['customer']['mainCustomerContact']['customer']['id'])) {
    $model->combinedTo->customer->mainCustomerContact->customer->id = $jsonData['combinedTo']['customer']['mainCustomerContact']['customer']['id'];

}
if (isset($jsonData['combinedTo']['customer']['mainCustomerContact']['customer']['externalId'])) {
    $model->combinedTo->customer->mainCustomerContact->customer->externalId = $jsonData['combinedTo']['customer']['mainCustomerContact']['customer']['externalId'];

}
if (isset($jsonData['combinedTo']['customer']['mainCustomerContact']['customer']['browserId'])) {
    $model->combinedTo->customer->mainCustomerContact->customer->browserId = $jsonData['combinedTo']['customer']['mainCustomerContact']['customer']['browserId'];

}
if (isset($jsonData['combinedTo']['customer']['mainCustomerContact']['customer']['site'])) {
    $model->combinedTo->customer->mainCustomerContact->customer->site = $jsonData['combinedTo']['customer']['mainCustomerContact']['customer']['site'];

}
if (isset($jsonData['combinedTo']['customer']['mainCustomerContact']['customer']['companies'])) {
    $model->combinedTo->customer->mainCustomerContact->customer->companies = [];
foreach (array_keys($jsonData['combinedTo']['customer']['mainCustomerContact']['customer']['companies']) as $index83) {
    
$model->combinedTo->customer->mainCustomerContact->customer->companies[$index83] = new RetailCrm\Api\Model\Entity\CustomersCorporate\CustomerContactCompany();
if (isset($jsonData['combinedTo']['customer']['mainCustomerContact']['customer']['companies'][$index83]['id'])) {
    $model->combinedTo->customer->mainCustomerContact->customer->companies[$index83]->id = $jsonData['combinedTo']['customer']['mainCustomerContact']['customer']['companies'][$index83]['id'];

}
if (isset($jsonData['combinedTo']['customer']['mainCustomerContact']['customer']['companies'][$index83]['externalId'])) {
    $model->combinedTo->customer->mainCustomerContact->customer->companies[$index83]->externalId = $jsonData['combinedTo']['customer']['mainCustomerContact']['customer']['companies'][$index83]['externalId'];

}
if (isset($jsonData['combinedTo']['customer']['mainCustomerContact']['customer']['companies'][$index83]['company'])) {
    
$model->combinedTo->customer->mainCustomerContact->customer->companies[$index83]->company = new RetailCrm\Api\Model\Entity\CustomersCorporate\EntityWithExternalIdNameOutput();
if (isset($jsonData['combinedTo']['customer']['mainCustomerContact']['customer']['companies'][$index83]['company']['id'])) {
    $model->combinedTo->customer->mainCustomerContact->customer->companies[$index83]->company->id = $jsonData['combinedTo']['customer']['mainCustomerContact']['customer']['companies'][$index83]['company']['id'];

}
if (isset($jsonData['combinedTo']['customer']['mainCustomerContact']['customer']['companies'][$index83]['company']['externalId'])) {
    $model->combinedTo->customer->mainCustomerContact->customer->companies[$index83]->company->externalId = $jsonData['combinedTo']['customer']['mainCustomerContact']['customer']['companies'][$index83]['company']['externalId'];

}
if (isset($jsonData['combinedTo']['customer']['mainCustomerContact']['customer']['companies'][$index83]['company']['name'])) {
    $model->combinedTo->customer->mainCustomerContact->customer->companies[$index83]->company->name = $jsonData['combinedTo']['customer']['mainCustomerContact']['customer']['companies'][$index83]['company']['name'];

}


}


}

}


}
if (isset($jsonData['combinedTo']['customer']['mainCustomerContact']['companies'])) {
    $model->combinedTo->customer->mainCustomerContact->companies = [];
foreach (array_keys($jsonData['combinedTo']['customer']['mainCustomerContact']['companies']) as $index71) {
    
$model->combinedTo->customer->mainCustomerContact->companies[$index71] = new RetailCrm\Api\Model\Entity\CustomersCorporate\CustomerContactCompany();
if (isset($jsonData['combinedTo']['customer']['mainCustomerContact']['companies'][$index71]['id'])) {
    $model->combinedTo->customer->mainCustomerContact->companies[$index71]->id = $jsonData['combinedTo']['customer']['mainCustomerContact']['companies'][$index71]['id'];

}
if (isset($jsonData['combinedTo']['customer']['mainCustomerContact']['companies'][$index71]['externalId'])) {
    $model->combinedTo->customer->mainCustomerContact->companies[$index71]->externalId = $jsonData['combinedTo']['customer']['mainCustomerContact']['companies'][$index71]['externalId'];

}
if (isset($jsonData['combinedTo']['customer']['mainCustomerContact']['companies'][$index71]['company'])) {
    
$model->combinedTo->customer->mainCustomerContact->companies[$index71]->company = new RetailCrm\Api\Model\Entity\CustomersCorporate\EntityWithExternalIdNameOutput();
if (isset($jsonData['combinedTo']['customer']['mainCustomerContact']['companies'][$index71]['company']['id'])) {
    $model->combinedTo->customer->mainCustomerContact->companies[$index71]->company->id = $jsonData['combinedTo']['customer']['mainCustomerContact']['companies'][$index71]['company']['id'];

}
if (isset($jsonData['combinedTo']['customer']['mainCustomerContact']['companies'][$index71]['company']['externalId'])) {
    $model->combinedTo->customer->mainCustomerContact->companies[$index71]->company->externalId = $jsonData['combinedTo']['customer']['mainCustomerContact']['companies'][$index71]['company']['externalId'];

}
if (isset($jsonData['combinedTo']['customer']['mainCustomerContact']['companies'][$index71]['company']['name'])) {
    $model->combinedTo->customer->mainCustomerContact->companies[$index71]->company->name = $jsonData['combinedTo']['customer']['mainCustomerContact']['companies'][$index71]['company']['name'];

}


}


}

}


}
if (isset($jsonData['combinedTo']['customer']['mainCompany'])) {
    
$model->combinedTo->customer->mainCompany = new RetailCrm\Api\Model\Entity\CustomersCorporate\EntityWithExternalIdNameOutput();
if (isset($jsonData['combinedTo']['customer']['mainCompany']['id'])) {
    $model->combinedTo->customer->mainCompany->id = $jsonData['combinedTo']['customer']['mainCompany']['id'];

}
if (isset($jsonData['combinedTo']['customer']['mainCompany']['externalId'])) {
    $model->combinedTo->customer->mainCompany->externalId = $jsonData['combinedTo']['customer']['mainCompany']['externalId'];

}
if (isset($jsonData['combinedTo']['customer']['mainCompany']['name'])) {
    $model->combinedTo->customer->mainCompany->name = $jsonData['combinedTo']['customer']['mainCompany']['name'];

}


}


} else {
    
$model->combinedTo->customer = new RetailCrm\Api\Model\Entity\Customers\Customer();
if (isset($jsonData['combinedTo']['customer']['type'])) {
    $model->combinedTo->customer->type = $jsonData['combinedTo']['customer']['type'];

}
if (isset($jsonData['combinedTo']['customer']['id'])) {
    $model->combinedTo->customer->id = $jsonData['combinedTo']['customer']['id'];

}
if (isset($jsonData['combinedTo']['customer']['externalId'])) {
    $model->combinedTo->customer->externalId = $jsonData['combinedTo']['customer']['externalId'];

}
if (isset($jsonData['combinedTo']['customer']['isContact'])) {
    $model->combinedTo->customer->isContact = $jsonData['combinedTo']['customer']['isContact'];

}
if (isset($jsonData['combinedTo']['customer']['createdAt'])) {
    $model->combinedTo->customer->createdAt = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['combinedTo']['customer']['createdAt']);

}
if (isset($jsonData['combinedTo']['customer']['managerId'])) {
    $model->combinedTo->customer->managerId = $jsonData['combinedTo']['customer']['managerId'];

}
if (isset($jsonData['combinedTo']['customer']['vip'])) {
    $model->combinedTo->customer->vip = $jsonData['combinedTo']['customer']['vip'];

}
if (isset($jsonData['combinedTo']['customer']['bad'])) {
    $model->combinedTo->customer->bad = $jsonData['combinedTo']['customer']['bad'];

}
if (isset($jsonData['combinedTo']['customer']['browserId'])) {
    $model->combinedTo->customer->browserId = $jsonData['combinedTo']['customer']['browserId'];

}
if (isset($jsonData['combinedTo']['customer']['site'])) {
    $model->combinedTo->customer->site = $jsonData['combinedTo']['customer']['site'];

}
if (isset($jsonData['combinedTo']['customer']['contragent'])) {
    
$model->combinedTo->customer->contragent = new RetailCrm\Api\Model\Entity\Customers\CustomerContragent();
if (isset($jsonData['combinedTo']['customer']['contragent']['contragentType'])) {
    $model->combinedTo->customer->contragent->contragentType = $jsonData['combinedTo']['customer']['contragent']['contragentType'];

}
if (isset($jsonData['combinedTo']['customer']['contragent']['legalName'])) {
    $model->combinedTo->customer->contragent->legalName = $jsonData['combinedTo']['customer']['contragent']['legalName'];

}
if (isset($jsonData['combinedTo']['customer']['contragent']['legalAddress'])) {
    $model->combinedTo->customer->contragent->legalAddress = $jsonData['combinedTo']['customer']['contragent']['legalAddress'];

}
if (isset($jsonData['combinedTo']['customer']['contragent']['INN'])) {
    $model->combinedTo->customer->contragent->INN = $jsonData['combinedTo']['customer']['contragent']['INN'];

}
if (isset($jsonData['combinedTo']['customer']['contragent']['OKPO'])) {
    $model->combinedTo->customer->contragent->OKPO = $jsonData['combinedTo']['customer']['contragent']['OKPO'];

}
if (isset($jsonData['combinedTo']['customer']['contragent']['KPP'])) {
    $model->combinedTo->customer->contragent->KPP = $jsonData['combinedTo']['customer']['contragent']['KPP'];

}
if (isset($jsonData['combinedTo']['customer']['contragent']['OGRN'])) {
    $model->combinedTo->customer->contragent->OGRN = $jsonData['combinedTo']['customer']['contragent']['OGRN'];

}
if (isset($jsonData['combinedTo']['customer']['contragent']['OGRNIP'])) {
    $model->combinedTo->customer->contragent->OGRNIP = $jsonData['combinedTo']['customer']['contragent']['OGRNIP'];

}
if (isset($jsonData['combinedTo']['customer']['contragent']['certificateNumber'])) {
    $model->combinedTo->customer->contragent->certificateNumber = $jsonData['combinedTo']['customer']['contragent']['certificateNumber'];

}
if (isset($jsonData['combinedTo']['customer']['contragent']['certificateDate'])) {
    $model->combinedTo->customer->contragent->certificateDate = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['combinedTo']['customer']['contragent']['certificateDate']);

}
if (isset($jsonData['combinedTo']['customer']['contragent']['BIK'])) {
    $model->combinedTo->customer->contragent->BIK = $jsonData['combinedTo']['customer']['contragent']['BIK'];

}
if (isset($jsonData['combinedTo']['customer']['contragent']['bank'])) {
    $model->combinedTo->customer->contragent->bank = $jsonData['combinedTo']['customer']['contragent']['bank'];

}
if (isset($jsonData['combinedTo']['customer']['contragent']['bankAddress'])) {
    $model->combinedTo->customer->contragent->bankAddress = $jsonData['combinedTo']['customer']['contragent']['bankAddress'];

}
if (isset($jsonData['combinedTo']['customer']['contragent']['corrAccount'])) {
    $model->combinedTo->customer->contragent->corrAccount = $jsonData['combinedTo']['customer']['contragent']['corrAccount'];

}
if (isset($jsonData['combinedTo']['customer']['contragent']['bankAccount'])) {
    $model->combinedTo->customer->contragent->bankAccount = $jsonData['combinedTo']['customer']['contragent']['bankAccount'];

}


}
if (isset($jsonData['combinedTo']['customer']['tags'])) {
    $model->combinedTo->customer->tags = [];
foreach (array_keys($jsonData['combinedTo']['customer']['tags']) as $index43) {
    
$model->combinedTo->customer->tags[$index43] = new RetailCrm\Api\Model\Entity\Customers\CustomerTag();
if (isset($jsonData['combinedTo']['customer']['tags'][$index43]['name'])) {
    $model->combinedTo->customer->tags[$index43]->name = $jsonData['combinedTo']['customer']['tags'][$index43]['name'];

}
if (isset($jsonData['combinedTo']['customer']['tags'][$index43]['color'])) {
    $model->combinedTo->customer->tags[$index43]->color = $jsonData['combinedTo']['customer']['tags'][$index43]['color'];

}
if (isset($jsonData['combinedTo']['customer']['tags'][$index43]['attached'])) {
    $model->combinedTo->customer->tags[$index43]->attached = $jsonData['combinedTo']['customer']['tags'][$index43]['attached'];

}


}

}
if (isset($jsonData['combinedTo']['customer']['avgMarginSumm'])) {
    $model->combinedTo->customer->avgMarginSumm = (float) $jsonData['combinedTo']['customer']['avgMarginSumm'];

}
if (isset($jsonData['combinedTo']['customer']['marginSumm'])) {
    $model->combinedTo->customer->marginSumm = (float) $jsonData['combinedTo']['customer']['marginSumm'];

}
if (isset($jsonData['combinedTo']['customer']['totalSumm'])) {
    $model->combinedTo->customer->totalSumm = (float) $jsonData['combinedTo']['customer']['totalSumm'];

}
if (isset($jsonData['combinedTo']['customer']['averageSumm'])) {
    $model->combinedTo->customer->averageSumm = (float) $jsonData['combinedTo']['customer']['averageSumm'];

}
if (isset($jsonData['combinedTo']['customer']['ordersCount'])) {
    $model->combinedTo->customer->ordersCount = $jsonData['combinedTo']['customer']['ordersCount'];

}
if (isset($jsonData['combinedTo']['customer']['costSumm'])) {
    $model->combinedTo->customer->costSumm = (float) $jsonData['combinedTo']['customer']['costSumm'];

}
if (isset($jsonData['combinedTo']['customer']['customFields'])) {
    $model->combinedTo->customer->customFields = [];
foreach (array_keys($jsonData['combinedTo']['customer']['customFields']) as $index51) {
    $model->combinedTo->customer->customFields[$index51] = $jsonData['combinedTo']['customer']['customFields'][$index51];

}

}
if (isset($jsonData['combinedTo']['customer']['personalDiscount'])) {
    $model->combinedTo->customer->personalDiscount = (float) $jsonData['combinedTo']['customer']['personalDiscount'];

}
if (isset($jsonData['combinedTo']['customer']['cumulativeDiscount'])) {
    $model->combinedTo->customer->cumulativeDiscount = (float) $jsonData['combinedTo']['customer']['cumulativeDiscount'];

}
if (isset($jsonData['combinedTo']['customer']['discountCardNumber'])) {
    $model->combinedTo->customer->discountCardNumber = $jsonData['combinedTo']['customer']['discountCardNumber'];

}
if (isset($jsonData['combinedTo']['customer']['firstClientId'])) {
    $model->combinedTo->customer->firstClientId = $jsonData['combinedTo']['customer']['firstClientId'];

}
if (isset($jsonData['combinedTo']['customer']['lastClientId'])) {
    $model->combinedTo->customer->lastClientId = $jsonData['combinedTo']['customer']['lastClientId'];

}
if (isset($jsonData['combinedTo']['customer']['address'])) {
    
$model->combinedTo->customer->address = new RetailCrm\Api\Model\Entity\Customers\CustomerAddress();
if (isset($jsonData['combinedTo']['customer']['address']['id'])) {
    $model->combinedTo->customer->address->id = $jsonData['combinedTo']['customer']['address']['id'];

}
if (isset($jsonData['combinedTo']['customer']['address']['name'])) {
    $model->combinedTo->customer->address->name = $jsonData['combinedTo']['customer']['address']['name'];

}
if (isset($jsonData['combinedTo']['customer']['address']['isMain'])) {
    $model->combinedTo->customer->address->isMain = $jsonData['combinedTo']['customer']['address']['isMain'];

}
if (isset($jsonData['combinedTo']['customer']['address']['index'])) {
    $model->combinedTo->customer->address->index = $jsonData['combinedTo']['customer']['address']['index'];

}
if (isset($jsonData['combinedTo']['customer']['address']['countryIso'])) {
    $model->combinedTo->customer->address->countryIso = $jsonData['combinedTo']['customer']['address']['countryIso'];

}
if (isset($jsonData['combinedTo']['customer']['address']['region'])) {
    $model->combinedTo->customer->address->region = $jsonData['combinedTo']['customer']['address']['region'];

}
if (isset($jsonData['combinedTo']['customer']['address']['regionId'])) {
    $model->combinedTo->customer->address->regionId = $jsonData['combinedTo']['customer']['address']['regionId'];

}
if (isset($jsonData['combinedTo']['customer']['address']['city'])) {
    $model->combinedTo->customer->address->city = $jsonData['combinedTo']['customer']['address']['city'];

}
if (isset($jsonData['combinedTo']['customer']['address']['cityId'])) {
    $model->combinedTo->customer->address->cityId = $jsonData['combinedTo']['customer']['address']['cityId'];

}
if (isset($jsonData['combinedTo']['customer']['address']['cityType'])) {
    $model->combinedTo->customer->address->cityType = $jsonData['combinedTo']['customer']['address']['cityType'];

}
if (isset($jsonData['combinedTo']['customer']['address']['street'])) {
    $model->combinedTo->customer->address->street = $jsonData['combinedTo']['customer']['address']['street'];

}
if (isset($jsonData['combinedTo']['customer']['address']['streetId'])) {
    $model->combinedTo->customer->address->streetId = $jsonData['combinedTo']['customer']['address']['streetId'];

}
if (isset($jsonData['combinedTo']['customer']['address']['streetType'])) {
    $model->combinedTo->customer->address->streetType = $jsonData['combinedTo']['customer']['address']['streetType'];

}
if (isset($jsonData['combinedTo']['customer']['address']['building'])) {
    $model->combinedTo->customer->address->building = $jsonData['combinedTo']['customer']['address']['building'];

}
if (isset($jsonData['combinedTo']['customer']['address']['flat'])) {
    $model->combinedTo->customer->address->flat = $jsonData['combinedTo']['customer']['address']['flat'];

}
if (isset($jsonData['combinedTo']['customer']['address']['floor'])) {
    $model->combinedTo->customer->address->floor = $jsonData['combinedTo']['customer']['address']['floor'];

}
if (isset($jsonData['combinedTo']['customer']['address']['block'])) {
    $model->combinedTo->customer->address->block = $jsonData['combinedTo']['customer']['address']['block'];

}
if (isset($jsonData['combinedTo']['customer']['address']['house'])) {
    $model->combinedTo->customer->address->house = $jsonData['combinedTo']['customer']['address']['house'];

}
if (isset($jsonData['combinedTo']['customer']['address']['housing'])) {
    $model->combinedTo->customer->address->housing = $jsonData['combinedTo']['customer']['address']['housing'];

}
if (isset($jsonData['combinedTo']['customer']['address']['metro'])) {
    $model->combinedTo->customer->address->metro = $jsonData['combinedTo']['customer']['address']['metro'];

}
if (isset($jsonData['combinedTo']['customer']['address']['notes'])) {
    $model->combinedTo->customer->address->notes = $jsonData['combinedTo']['customer']['address']['notes'];

}
if (isset($jsonData['combinedTo']['customer']['address']['text'])) {
    $model->combinedTo->customer->address->text = $jsonData['combinedTo']['customer']['address']['text'];

}
if (isset($jsonData['combinedTo']['customer']['address']['externalId'])) {
    $model->combinedTo->customer->address->externalId = $jsonData['combinedTo']['customer']['address']['externalId'];

}


}
if (isset($jsonData['combinedTo']['customer']['segments'])) {
    $model->combinedTo->customer->segments = [];
foreach (array_keys($jsonData['combinedTo']['customer']['segments']) as $index47) {
    
$model->combinedTo->customer->segments[$index47] = new RetailCrm\Api\Model\Entity\Customers\Segment();
if (isset($jsonData['combinedTo']['customer']['segments'][$index47]['id'])) {
    $model->combinedTo->customer->segments[$index47]->id = $jsonData['combinedTo']['customer']['segments'][$index47]['id'];

}
if (isset($jsonData['combinedTo']['customer']['segments'][$index47]['code'])) {
    $model->combinedTo->customer->segments[$index47]->code = $jsonData['combinedTo']['customer']['segments'][$index47]['code'];

}
if (isset($jsonData['combinedTo']['customer']['segments'][$index47]['name'])) {
    $model->combinedTo->customer->segments[$index47]->name = $jsonData['combinedTo']['customer']['segments'][$index47]['name'];

}
if (isset($jsonData['combinedTo']['customer']['segments'][$index47]['createdAt'])) {
    $model->combinedTo->customer->segments[$index47]->createdAt = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['combinedTo']['customer']['segments'][$index47]['createdAt']);

}
if (isset($jsonData['combinedTo']['customer']['segments'][$index47]['isDynamic'])) {
    $model->combinedTo->customer->segments[$index47]->isDynamic = $jsonData['combinedTo']['customer']['segments'][$index47]['isDynamic'];

}
if (isset($jsonData['combinedTo']['customer']['segments'][$index47]['customersCount'])) {
    $model->combinedTo->customer->segments[$index47]->customersCount = $jsonData['combinedTo']['customer']['segments'][$index47]['customersCount'];

}
if (isset($jsonData['combinedTo']['customer']['segments'][$index47]['active'])) {
    $model->combinedTo->customer->segments[$index47]->active = $jsonData['combinedTo']['customer']['segments'][$index47]['active'];

}


}

}
if (isset($jsonData['combinedTo']['customer']['maturationTime'])) {
    $model->combinedTo->customer->maturationTime = $jsonData['combinedTo']['customer']['maturationTime'];

}
if (isset($jsonData['combinedTo']['customer']['firstName'])) {
    $model->combinedTo->customer->firstName = $jsonData['combinedTo']['customer']['firstName'];

}
if (isset($jsonData['combinedTo']['customer']['lastName'])) {
    $model->combinedTo->customer->lastName = $jsonData['combinedTo']['customer']['lastName'];

}
if (isset($jsonData['combinedTo']['customer']['patronymic'])) {
    $model->combinedTo->customer->patronymic = $jsonData['combinedTo']['customer']['patronymic'];

}
if (isset($jsonData['combinedTo']['customer']['sex'])) {
    $model->combinedTo->customer->sex = $jsonData['combinedTo']['customer']['sex'];

}
if (isset($jsonData['combinedTo']['customer']['presumableSex'])) {
    $model->combinedTo->customer->presumableSex = $jsonData['combinedTo']['customer']['presumableSex'];

}
if (isset($jsonData['combinedTo']['customer']['email'])) {
    $model->combinedTo->customer->email = $jsonData['combinedTo']['customer']['email'];

}
if (isset($jsonData['combinedTo']['customer']['emailMarketingUnsubscribedAt'])) {
    $model->combinedTo->customer->emailMarketingUnsubscribedAt = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['combinedTo']['customer']['emailMarketingUnsubscribedAt']);

}
if (isset($jsonData['combinedTo']['customer']['phones'])) {
    $model->combinedTo->customer->phones = [];
foreach (array_keys($jsonData['combinedTo']['customer']['phones']) as $index45) {
    
$model->combinedTo->customer->phones[$index45] = new RetailCrm\Api\Model\Entity\Customers\CustomerPhone();
if (isset($jsonData['combinedTo']['customer']['phones'][$index45]['number'])) {
    $model->combinedTo->customer->phones[$index45]->number = $jsonData['combinedTo']['customer']['phones'][$index45]['number'];

}


}

}
if (isset($jsonData['combinedTo']['customer']['birthday'])) {
    $model->combinedTo->customer->birthday = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['combinedTo']['customer']['birthday']);

}
if (isset($jsonData['combinedTo']['customer']['source'])) {
    
$model->combinedTo->customer->source = new RetailCrm\Api\Model\Entity\Source();
if (isset($jsonData['combinedTo']['customer']['source']['source'])) {
    $model->combinedTo->customer->source->source = $jsonData['combinedTo']['customer']['source']['source'];

}
if (isset($jsonData['combinedTo']['customer']['source']['medium'])) {
    $model->combinedTo->customer->source->medium = $jsonData['combinedTo']['customer']['source']['medium'];

}
if (isset($jsonData['combinedTo']['customer']['source']['campaign'])) {
    $model->combinedTo->customer->source->campaign = $jsonData['combinedTo']['customer']['source']['campaign'];

}
if (isset($jsonData['combinedTo']['customer']['source']['keyword'])) {
    $model->combinedTo->customer->source->keyword = $jsonData['combinedTo']['customer']['source']['keyword'];

}
if (isset($jsonData['combinedTo']['customer']['source']['content'])) {
    $model->combinedTo->customer->source->content = $jsonData['combinedTo']['customer']['source']['content'];

}


}
if (isset($jsonData['combinedTo']['customer']['photoUrl'])) {
    $model->combinedTo->customer->photoUrl = $jsonData['combinedTo']['customer']['photoUrl'];

}
if (isset($jsonData['combinedTo']['customer']['mgCustomerId'])) {
    $model->combinedTo->customer->mgCustomerId = $jsonData['combinedTo']['customer']['mgCustomerId'];

}
if (isset($jsonData['combinedTo']['customer']['subscribed'])) {
    $model->combinedTo->customer->subscribed = $jsonData['combinedTo']['customer']['subscribed'];

}


}

}
if (isset($jsonData['combinedTo']['contact'])) {
    
$model->combinedTo->contact = new RetailCrm\Api\Model\Entity\Customers\Customer();
if (isset($jsonData['combinedTo']['contact']['type'])) {
    $model->combinedTo->contact->type = $jsonData['combinedTo']['contact']['type'];

}
if (isset($jsonData['combinedTo']['contact']['id'])) {
    $model->combinedTo->contact->id = $jsonData['combinedTo']['contact']['id'];

}
if (isset($jsonData['combinedTo']['contact']['externalId'])) {
    $model->combinedTo->contact->externalId = $jsonData['combinedTo']['contact']['externalId'];

}
if (isset($jsonData['combinedTo']['contact']['isContact'])) {
    $model->combinedTo->contact->isContact = $jsonData['combinedTo']['contact']['isContact'];

}
if (isset($jsonData['combinedTo']['contact']['createdAt'])) {
    $model->combinedTo->contact->createdAt = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['combinedTo']['contact']['createdAt']);

}
if (isset($jsonData['combinedTo']['contact']['managerId'])) {
    $model->combinedTo->contact->managerId = $jsonData['combinedTo']['contact']['managerId'];

}
if (isset($jsonData['combinedTo']['contact']['vip'])) {
    $model->combinedTo->contact->vip = $jsonData['combinedTo']['contact']['vip'];

}
if (isset($jsonData['combinedTo']['contact']['bad'])) {
    $model->combinedTo->contact->bad = $jsonData['combinedTo']['contact']['bad'];

}
if (isset($jsonData['combinedTo']['contact']['browserId'])) {
    $model->combinedTo->contact->browserId = $jsonData['combinedTo']['contact']['browserId'];

}
if (isset($jsonData['combinedTo']['contact']['site'])) {
    $model->combinedTo->contact->site = $jsonData['combinedTo']['contact']['site'];

}
if (isset($jsonData['combinedTo']['contact']['contragent'])) {
    
$model->combinedTo->contact->contragent = new RetailCrm\Api\Model\Entity\Customers\CustomerContragent();
if (isset($jsonData['combinedTo']['contact']['contragent']['contragentType'])) {
    $model->combinedTo->contact->contragent->contragentType = $jsonData['combinedTo']['contact']['contragent']['contragentType'];

}
if (isset($jsonData['combinedTo']['contact']['contragent']['legalName'])) {
    $model->combinedTo->contact->contragent->legalName = $jsonData['combinedTo']['contact']['contragent']['legalName'];

}
if (isset($jsonData['combinedTo']['contact']['contragent']['legalAddress'])) {
    $model->combinedTo->contact->contragent->legalAddress = $jsonData['combinedTo']['contact']['contragent']['legalAddress'];

}
if (isset($jsonData['combinedTo']['contact']['contragent']['INN'])) {
    $model->combinedTo->contact->contragent->INN = $jsonData['combinedTo']['contact']['contragent']['INN'];

}
if (isset($jsonData['combinedTo']['contact']['contragent']['OKPO'])) {
    $model->combinedTo->contact->contragent->OKPO = $jsonData['combinedTo']['contact']['contragent']['OKPO'];

}
if (isset($jsonData['combinedTo']['contact']['contragent']['KPP'])) {
    $model->combinedTo->contact->contragent->KPP = $jsonData['combinedTo']['contact']['contragent']['KPP'];

}
if (isset($jsonData['combinedTo']['contact']['contragent']['OGRN'])) {
    $model->combinedTo->contact->contragent->OGRN = $jsonData['combinedTo']['contact']['contragent']['OGRN'];

}
if (isset($jsonData['combinedTo']['contact']['contragent']['OGRNIP'])) {
    $model->combinedTo->contact->contragent->OGRNIP = $jsonData['combinedTo']['contact']['contragent']['OGRNIP'];

}
if (isset($jsonData['combinedTo']['contact']['contragent']['certificateNumber'])) {
    $model->combinedTo->contact->contragent->certificateNumber = $jsonData['combinedTo']['contact']['contragent']['certificateNumber'];

}
if (isset($jsonData['combinedTo']['contact']['contragent']['certificateDate'])) {
    $model->combinedTo->contact->contragent->certificateDate = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['combinedTo']['contact']['contragent']['certificateDate']);

}
if (isset($jsonData['combinedTo']['contact']['contragent']['BIK'])) {
    $model->combinedTo->contact->contragent->BIK = $jsonData['combinedTo']['contact']['contragent']['BIK'];

}
if (isset($jsonData['combinedTo']['contact']['contragent']['bank'])) {
    $model->combinedTo->contact->contragent->bank = $jsonData['combinedTo']['contact']['contragent']['bank'];

}
if (isset($jsonData['combinedTo']['contact']['contragent']['bankAddress'])) {
    $model->combinedTo->contact->contragent->bankAddress = $jsonData['combinedTo']['contact']['contragent']['bankAddress'];

}
if (isset($jsonData['combinedTo']['contact']['contragent']['corrAccount'])) {
    $model->combinedTo->contact->contragent->corrAccount = $jsonData['combinedTo']['contact']['contragent']['corrAccount'];

}
if (isset($jsonData['combinedTo']['contact']['contragent']['bankAccount'])) {
    $model->combinedTo->contact->contragent->bankAccount = $jsonData['combinedTo']['contact']['contragent']['bankAccount'];

}


}
if (isset($jsonData['combinedTo']['contact']['tags'])) {
    $model->combinedTo->contact->tags = [];
foreach (array_keys($jsonData['combinedTo']['contact']['tags']) as $index42) {
    
$model->combinedTo->contact->tags[$index42] = new RetailCrm\Api\Model\Entity\Customers\CustomerTag();
if (isset($jsonData['combinedTo']['contact']['tags'][$index42]['name'])) {
    $model->combinedTo->contact->tags[$index42]->name = $jsonData['combinedTo']['contact']['tags'][$index42]['name'];

}
if (isset($jsonData['combinedTo']['contact']['tags'][$index42]['color'])) {
    $model->combinedTo->contact->tags[$index42]->color = $jsonData['combinedTo']['contact']['tags'][$index42]['color'];

}
if (isset($jsonData['combinedTo']['contact']['tags'][$index42]['attached'])) {
    $model->combinedTo->contact->tags[$index42]->attached = $jsonData['combinedTo']['contact']['tags'][$index42]['attached'];

}


}

}
if (isset($jsonData['combinedTo']['contact']['avgMarginSumm'])) {
    $model->combinedTo->contact->avgMarginSumm = (float) $jsonData['combinedTo']['contact']['avgMarginSumm'];

}
if (isset($jsonData['combinedTo']['contact']['marginSumm'])) {
    $model->combinedTo->contact->marginSumm = (float) $jsonData['combinedTo']['contact']['marginSumm'];

}
if (isset($jsonData['combinedTo']['contact']['totalSumm'])) {
    $model->combinedTo->contact->totalSumm = (float) $jsonData['combinedTo']['contact']['totalSumm'];

}
if (isset($jsonData['combinedTo']['contact']['averageSumm'])) {
    $model->combinedTo->contact->averageSumm = (float) $jsonData['combinedTo']['contact']['averageSumm'];

}
if (isset($jsonData['combinedTo']['contact']['ordersCount'])) {
    $model->combinedTo->contact->ordersCount = $jsonData['combinedTo']['contact']['ordersCount'];

}
if (isset($jsonData['combinedTo']['contact']['costSumm'])) {
    $model->combinedTo->contact->costSumm = (float) $jsonData['combinedTo']['contact']['costSumm'];

}
if (isset($jsonData['combinedTo']['contact']['customFields'])) {
    $model->combinedTo->contact->customFields = [];
foreach (array_keys($jsonData['combinedTo']['contact']['customFields']) as $index50) {
    $model->combinedTo->contact->customFields[$index50] = $jsonData['combinedTo']['contact']['customFields'][$index50];

}

}
if (isset($jsonData['combinedTo']['contact']['personalDiscount'])) {
    $model->combinedTo->contact->personalDiscount = (float) $jsonData['combinedTo']['contact']['personalDiscount'];

}
if (isset($jsonData['combinedTo']['contact']['cumulativeDiscount'])) {
    $model->combinedTo->contact->cumulativeDiscount = (float) $jsonData['combinedTo']['contact']['cumulativeDiscount'];

}
if (isset($jsonData['combinedTo']['contact']['discountCardNumber'])) {
    $model->combinedTo->contact->discountCardNumber = $jsonData['combinedTo']['contact']['discountCardNumber'];

}
if (isset($jsonData['combinedTo']['contact']['firstClientId'])) {
    $model->combinedTo->contact->firstClientId = $jsonData['combinedTo']['contact']['firstClientId'];

}
if (isset($jsonData['combinedTo']['contact']['lastClientId'])) {
    $model->combinedTo->contact->lastClientId = $jsonData['combinedTo']['contact']['lastClientId'];

}
if (isset($jsonData['combinedTo']['contact']['address'])) {
    
$model->combinedTo->contact->address = new RetailCrm\Api\Model\Entity\Customers\CustomerAddress();
if (isset($jsonData['combinedTo']['contact']['address']['id'])) {
    $model->combinedTo->contact->address->id = $jsonData['combinedTo']['contact']['address']['id'];

}
if (isset($jsonData['combinedTo']['contact']['address']['name'])) {
    $model->combinedTo->contact->address->name = $jsonData['combinedTo']['contact']['address']['name'];

}
if (isset($jsonData['combinedTo']['contact']['address']['isMain'])) {
    $model->combinedTo->contact->address->isMain = $jsonData['combinedTo']['contact']['address']['isMain'];

}
if (isset($jsonData['combinedTo']['contact']['address']['index'])) {
    $model->combinedTo->contact->address->index = $jsonData['combinedTo']['contact']['address']['index'];

}
if (isset($jsonData['combinedTo']['contact']['address']['countryIso'])) {
    $model->combinedTo->contact->address->countryIso = $jsonData['combinedTo']['contact']['address']['countryIso'];

}
if (isset($jsonData['combinedTo']['contact']['address']['region'])) {
    $model->combinedTo->contact->address->region = $jsonData['combinedTo']['contact']['address']['region'];

}
if (isset($jsonData['combinedTo']['contact']['address']['regionId'])) {
    $model->combinedTo->contact->address->regionId = $jsonData['combinedTo']['contact']['address']['regionId'];

}
if (isset($jsonData['combinedTo']['contact']['address']['city'])) {
    $model->combinedTo->contact->address->city = $jsonData['combinedTo']['contact']['address']['city'];

}
if (isset($jsonData['combinedTo']['contact']['address']['cityId'])) {
    $model->combinedTo->contact->address->cityId = $jsonData['combinedTo']['contact']['address']['cityId'];

}
if (isset($jsonData['combinedTo']['contact']['address']['cityType'])) {
    $model->combinedTo->contact->address->cityType = $jsonData['combinedTo']['contact']['address']['cityType'];

}
if (isset($jsonData['combinedTo']['contact']['address']['street'])) {
    $model->combinedTo->contact->address->street = $jsonData['combinedTo']['contact']['address']['street'];

}
if (isset($jsonData['combinedTo']['contact']['address']['streetId'])) {
    $model->combinedTo->contact->address->streetId = $jsonData['combinedTo']['contact']['address']['streetId'];

}
if (isset($jsonData['combinedTo']['contact']['address']['streetType'])) {
    $model->combinedTo->contact->address->streetType = $jsonData['combinedTo']['contact']['address']['streetType'];

}
if (isset($jsonData['combinedTo']['contact']['address']['building'])) {
    $model->combinedTo->contact->address->building = $jsonData['combinedTo']['contact']['address']['building'];

}
if (isset($jsonData['combinedTo']['contact']['address']['flat'])) {
    $model->combinedTo->contact->address->flat = $jsonData['combinedTo']['contact']['address']['flat'];

}
if (isset($jsonData['combinedTo']['contact']['address']['floor'])) {
    $model->combinedTo->contact->address->floor = $jsonData['combinedTo']['contact']['address']['floor'];

}
if (isset($jsonData['combinedTo']['contact']['address']['block'])) {
    $model->combinedTo->contact->address->block = $jsonData['combinedTo']['contact']['address']['block'];

}
if (isset($jsonData['combinedTo']['contact']['address']['house'])) {
    $model->combinedTo->contact->address->house = $jsonData['combinedTo']['contact']['address']['house'];

}
if (isset($jsonData['combinedTo']['contact']['address']['housing'])) {
    $model->combinedTo->contact->address->housing = $jsonData['combinedTo']['contact']['address']['housing'];

}
if (isset($jsonData['combinedTo']['contact']['address']['metro'])) {
    $model->combinedTo->contact->address->metro = $jsonData['combinedTo']['contact']['address']['metro'];

}
if (isset($jsonData['combinedTo']['contact']['address']['notes'])) {
    $model->combinedTo->contact->address->notes = $jsonData['combinedTo']['contact']['address']['notes'];

}
if (isset($jsonData['combinedTo']['contact']['address']['text'])) {
    $model->combinedTo->contact->address->text = $jsonData['combinedTo']['contact']['address']['text'];

}
if (isset($jsonData['combinedTo']['contact']['address']['externalId'])) {
    $model->combinedTo->contact->address->externalId = $jsonData['combinedTo']['contact']['address']['externalId'];

}


}
if (isset($jsonData['combinedTo']['contact']['segments'])) {
    $model->combinedTo->contact->segments = [];
foreach (array_keys($jsonData['combinedTo']['contact']['segments']) as $index46) {
    
$model->combinedTo->contact->segments[$index46] = new RetailCrm\Api\Model\Entity\Customers\Segment();
if (isset($jsonData['combinedTo']['contact']['segments'][$index46]['id'])) {
    $model->combinedTo->contact->segments[$index46]->id = $jsonData['combinedTo']['contact']['segments'][$index46]['id'];

}
if (isset($jsonData['combinedTo']['contact']['segments'][$index46]['code'])) {
    $model->combinedTo->contact->segments[$index46]->code = $jsonData['combinedTo']['contact']['segments'][$index46]['code'];

}
if (isset($jsonData['combinedTo']['contact']['segments'][$index46]['name'])) {
    $model->combinedTo->contact->segments[$index46]->name = $jsonData['combinedTo']['contact']['segments'][$index46]['name'];

}
if (isset($jsonData['combinedTo']['contact']['segments'][$index46]['createdAt'])) {
    $model->combinedTo->contact->segments[$index46]->createdAt = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['combinedTo']['contact']['segments'][$index46]['createdAt']);

}
if (isset($jsonData['combinedTo']['contact']['segments'][$index46]['isDynamic'])) {
    $model->combinedTo->contact->segments[$index46]->isDynamic = $jsonData['combinedTo']['contact']['segments'][$index46]['isDynamic'];

}
if (isset($jsonData['combinedTo']['contact']['segments'][$index46]['customersCount'])) {
    $model->combinedTo->contact->segments[$index46]->customersCount = $jsonData['combinedTo']['contact']['segments'][$index46]['customersCount'];

}
if (isset($jsonData['combinedTo']['contact']['segments'][$index46]['active'])) {
    $model->combinedTo->contact->segments[$index46]->active = $jsonData['combinedTo']['contact']['segments'][$index46]['active'];

}


}

}
if (isset($jsonData['combinedTo']['contact']['maturationTime'])) {
    $model->combinedTo->contact->maturationTime = $jsonData['combinedTo']['contact']['maturationTime'];

}
if (isset($jsonData['combinedTo']['contact']['firstName'])) {
    $model->combinedTo->contact->firstName = $jsonData['combinedTo']['contact']['firstName'];

}
if (isset($jsonData['combinedTo']['contact']['lastName'])) {
    $model->combinedTo->contact->lastName = $jsonData['combinedTo']['contact']['lastName'];

}
if (isset($jsonData['combinedTo']['contact']['patronymic'])) {
    $model->combinedTo->contact->patronymic = $jsonData['combinedTo']['contact']['patronymic'];

}
if (isset($jsonData['combinedTo']['contact']['sex'])) {
    $model->combinedTo->contact->sex = $jsonData['combinedTo']['contact']['sex'];

}
if (isset($jsonData['combinedTo']['contact']['presumableSex'])) {
    $model->combinedTo->contact->presumableSex = $jsonData['combinedTo']['contact']['presumableSex'];

}
if (isset($jsonData['combinedTo']['contact']['email'])) {
    $model->combinedTo->contact->email = $jsonData['combinedTo']['contact']['email'];

}
if (isset($jsonData['combinedTo']['contact']['emailMarketingUnsubscribedAt'])) {
    $model->combinedTo->contact->emailMarketingUnsubscribedAt = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['combinedTo']['contact']['emailMarketingUnsubscribedAt']);

}
if (isset($jsonData['combinedTo']['contact']['phones'])) {
    $model->combinedTo->contact->phones = [];
foreach (array_keys($jsonData['combinedTo']['contact']['phones']) as $index44) {
    
$model->combinedTo->contact->phones[$index44] = new RetailCrm\Api\Model\Entity\Customers\CustomerPhone();
if (isset($jsonData['combinedTo']['contact']['phones'][$index44]['number'])) {
    $model->combinedTo->contact->phones[$index44]->number = $jsonData['combinedTo']['contact']['phones'][$index44]['number'];

}


}

}
if (isset($jsonData['combinedTo']['contact']['birthday'])) {
    $model->combinedTo->contact->birthday = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['combinedTo']['contact']['birthday']);

}
if (isset($jsonData['combinedTo']['contact']['source'])) {
    
$model->combinedTo->contact->source = new RetailCrm\Api\Model\Entity\Source();
if (isset($jsonData['combinedTo']['contact']['source']['source'])) {
    $model->combinedTo->contact->source->source = $jsonData['combinedTo']['contact']['source']['source'];

}
if (isset($jsonData['combinedTo']['contact']['source']['medium'])) {
    $model->combinedTo->contact->source->medium = $jsonData['combinedTo']['contact']['source']['medium'];

}
if (isset($jsonData['combinedTo']['contact']['source']['campaign'])) {
    $model->combinedTo->contact->source->campaign = $jsonData['combinedTo']['contact']['source']['campaign'];

}
if (isset($jsonData['combinedTo']['contact']['source']['keyword'])) {
    $model->combinedTo->contact->source->keyword = $jsonData['combinedTo']['contact']['source']['keyword'];

}
if (isset($jsonData['combinedTo']['contact']['source']['content'])) {
    $model->combinedTo->contact->source->content = $jsonData['combinedTo']['contact']['source']['content'];

}


}
if (isset($jsonData['combinedTo']['contact']['photoUrl'])) {
    $model->combinedTo->contact->photoUrl = $jsonData['combinedTo']['contact']['photoUrl'];

}
if (isset($jsonData['combinedTo']['contact']['mgCustomerId'])) {
    $model->combinedTo->contact->mgCustomerId = $jsonData['combinedTo']['contact']['mgCustomerId'];

}
if (isset($jsonData['combinedTo']['contact']['subscribed'])) {
    $model->combinedTo->contact->subscribed = $jsonData['combinedTo']['contact']['subscribed'];

}


}
if (isset($jsonData['combinedTo']['company'])) {
    
$model->combinedTo->company = new RetailCrm\Api\Model\Entity\CustomersCorporate\Company();
if (isset($jsonData['combinedTo']['company']['id'])) {
    $model->combinedTo->company->id = $jsonData['combinedTo']['company']['id'];

}
if (isset($jsonData['combinedTo']['company']['isMain'])) {
    $model->combinedTo->company->isMain = $jsonData['combinedTo']['company']['isMain'];

}
if (isset($jsonData['combinedTo']['company']['externalId'])) {
    $model->combinedTo->company->externalId = $jsonData['combinedTo']['company']['externalId'];

}
if (isset($jsonData['combinedTo']['company']['active'])) {
    $model->combinedTo->company->active = $jsonData['combinedTo']['company']['active'];

}
if (isset($jsonData['combinedTo']['company']['name'])) {
    $model->combinedTo->company->name = $jsonData['combinedTo']['company']['name'];

}
if (isset($jsonData['combinedTo']['company']['brand'])) {
    $model->combinedTo->company->brand = $jsonData['combinedTo']['company']['brand'];

}
if (isset($jsonData['combinedTo']['company']['site'])) {
    $model->combinedTo->company->site = $jsonData['combinedTo']['company']['site'];

}
if (isset($jsonData['combinedTo']['company']['createdAt'])) {
    $model->combinedTo->company->createdAt = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['combinedTo']['company']['createdAt']);

}
if (isset($jsonData['combinedTo']['company']['customer'])) {
    
$model->combinedTo->company->customer = new RetailCrm\Api\Model\Entity\CustomersCorporate\SerializedEntityCustomer();
if (isset($jsonData['combinedTo']['company']['customer']['site'])) {
    $model->combinedTo->company->customer->site = $jsonData['combinedTo']['company']['customer']['site'];

}
if (isset($jsonData['combinedTo']['company']['customer']['id'])) {
    $model->combinedTo->company->customer->id = $jsonData['combinedTo']['company']['customer']['id'];

}
if (isset($jsonData['combinedTo']['company']['customer']['externalId'])) {
    $model->combinedTo->company->customer->externalId = $jsonData['combinedTo']['company']['customer']['externalId'];

}
if (isset($jsonData['combinedTo']['company']['customer']['type'])) {
    $model->combinedTo->company->customer->type = $jsonData['combinedTo']['company']['customer']['type'];

}


}
if (isset($jsonData['combinedTo']['company']['contragent'])) {
    
$model->combinedTo->company->contragent = new RetailCrm\Api\Model\Entity\Customers\CustomerContragent();
if (isset($jsonData['combinedTo']['company']['contragent']['contragentType'])) {
    $model->combinedTo->company->contragent->contragentType = $jsonData['combinedTo']['company']['contragent']['contragentType'];

}
if (isset($jsonData['combinedTo']['company']['contragent']['legalName'])) {
    $model->combinedTo->company->contragent->legalName = $jsonData['combinedTo']['company']['contragent']['legalName'];

}
if (isset($jsonData['combinedTo']['company']['contragent']['legalAddress'])) {
    $model->combinedTo->company->contragent->legalAddress = $jsonData['combinedTo']['company']['contragent']['legalAddress'];

}
if (isset($jsonData['combinedTo']['company']['contragent']['INN'])) {
    $model->combinedTo->company->contragent->INN = $jsonData['combinedTo']['company']['contragent']['INN'];

}
if (isset($jsonData['combinedTo']['company']['contragent']['OKPO'])) {
    $model->combinedTo->company->contragent->OKPO = $jsonData['combinedTo']['company']['contragent']['OKPO'];

}
if (isset($jsonData['combinedTo']['company']['contragent']['KPP'])) {
    $model->combinedTo->company->contragent->KPP = $jsonData['combinedTo']['company']['contragent']['KPP'];

}
if (isset($jsonData['combinedTo']['company']['contragent']['OGRN'])) {
    $model->combinedTo->company->contragent->OGRN = $jsonData['combinedTo']['company']['contragent']['OGRN'];

}
if (isset($jsonData['combinedTo']['company']['contragent']['OGRNIP'])) {
    $model->combinedTo->company->contragent->OGRNIP = $jsonData['combinedTo']['company']['contragent']['OGRNIP'];

}
if (isset($jsonData['combinedTo']['company']['contragent']['certificateNumber'])) {
    $model->combinedTo->company->contragent->certificateNumber = $jsonData['combinedTo']['company']['contragent']['certificateNumber'];

}
if (isset($jsonData['combinedTo']['company']['contragent']['certificateDate'])) {
    $model->combinedTo->company->contragent->certificateDate = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['combinedTo']['company']['contragent']['certificateDate']);

}
if (isset($jsonData['combinedTo']['company']['contragent']['BIK'])) {
    $model->combinedTo->company->contragent->BIK = $jsonData['combinedTo']['company']['contragent']['BIK'];

}
if (isset($jsonData['combinedTo']['company']['contragent']['bank'])) {
    $model->combinedTo->company->contragent->bank = $jsonData['combinedTo']['company']['contragent']['bank'];

}
if (isset($jsonData['combinedTo']['company']['contragent']['bankAddress'])) {
    $model->combinedTo->company->contragent->bankAddress = $jsonData['combinedTo']['company']['contragent']['bankAddress'];

}
if (isset($jsonData['combinedTo']['company']['contragent']['corrAccount'])) {
    $model->combinedTo->company->contragent->corrAccount = $jsonData['combinedTo']['company']['contragent']['corrAccount'];

}
if (isset($jsonData['combinedTo']['company']['contragent']['bankAccount'])) {
    $model->combinedTo->company->contragent->bankAccount = $jsonData['combinedTo']['company']['contragent']['bankAccount'];

}


}
if (isset($jsonData['combinedTo']['company']['address'])) {
    
$model->combinedTo->company->address = new RetailCrm\Api\Model\Entity\Customers\CustomerAddress();
if (isset($jsonData['combinedTo']['company']['address']['id'])) {
    $model->combinedTo->company->address->id = $jsonData['combinedTo']['company']['address']['id'];

}
if (isset($jsonData['combinedTo']['company']['address']['name'])) {
    $model->combinedTo->company->address->name = $jsonData['combinedTo']['company']['address']['name'];

}
if (isset($jsonData['combinedTo']['company']['address']['isMain'])) {
    $model->combinedTo->company->address->isMain = $jsonData['combinedTo']['company']['address']['isMain'];

}
if (isset($jsonData['combinedTo']['company']['address']['index'])) {
    $model->combinedTo->company->address->index = $jsonData['combinedTo']['company']['address']['index'];

}
if (isset($jsonData['combinedTo']['company']['address']['countryIso'])) {
    $model->combinedTo->company->address->countryIso = $jsonData['combinedTo']['company']['address']['countryIso'];

}
if (isset($jsonData['combinedTo']['company']['address']['region'])) {
    $model->combinedTo->company->address->region = $jsonData['combinedTo']['company']['address']['region'];

}
if (isset($jsonData['combinedTo']['company']['address']['regionId'])) {
    $model->combinedTo->company->address->regionId = $jsonData['combinedTo']['company']['address']['regionId'];

}
if (isset($jsonData['combinedTo']['company']['address']['city'])) {
    $model->combinedTo->company->address->city = $jsonData['combinedTo']['company']['address']['city'];

}
if (isset($jsonData['combinedTo']['company']['address']['cityId'])) {
    $model->combinedTo->company->address->cityId = $jsonData['combinedTo']['company']['address']['cityId'];

}
if (isset($jsonData['combinedTo']['company']['address']['cityType'])) {
    $model->combinedTo->company->address->cityType = $jsonData['combinedTo']['company']['address']['cityType'];

}
if (isset($jsonData['combinedTo']['company']['address']['street'])) {
    $model->combinedTo->company->address->street = $jsonData['combinedTo']['company']['address']['street'];

}
if (isset($jsonData['combinedTo']['company']['address']['streetId'])) {
    $model->combinedTo->company->address->streetId = $jsonData['combinedTo']['company']['address']['streetId'];

}
if (isset($jsonData['combinedTo']['company']['address']['streetType'])) {
    $model->combinedTo->company->address->streetType = $jsonData['combinedTo']['company']['address']['streetType'];

}
if (isset($jsonData['combinedTo']['company']['address']['building'])) {
    $model->combinedTo->company->address->building = $jsonData['combinedTo']['company']['address']['building'];

}
if (isset($jsonData['combinedTo']['company']['address']['flat'])) {
    $model->combinedTo->company->address->flat = $jsonData['combinedTo']['company']['address']['flat'];

}
if (isset($jsonData['combinedTo']['company']['address']['floor'])) {
    $model->combinedTo->company->address->floor = $jsonData['combinedTo']['company']['address']['floor'];

}
if (isset($jsonData['combinedTo']['company']['address']['block'])) {
    $model->combinedTo->company->address->block = $jsonData['combinedTo']['company']['address']['block'];

}
if (isset($jsonData['combinedTo']['company']['address']['house'])) {
    $model->combinedTo->company->address->house = $jsonData['combinedTo']['company']['address']['house'];

}
if (isset($jsonData['combinedTo']['company']['address']['housing'])) {
    $model->combinedTo->company->address->housing = $jsonData['combinedTo']['company']['address']['housing'];

}
if (isset($jsonData['combinedTo']['company']['address']['metro'])) {
    $model->combinedTo->company->address->metro = $jsonData['combinedTo']['company']['address']['metro'];

}
if (isset($jsonData['combinedTo']['company']['address']['notes'])) {
    $model->combinedTo->company->address->notes = $jsonData['combinedTo']['company']['address']['notes'];

}
if (isset($jsonData['combinedTo']['company']['address']['text'])) {
    $model->combinedTo->company->address->text = $jsonData['combinedTo']['company']['address']['text'];

}
if (isset($jsonData['combinedTo']['company']['address']['externalId'])) {
    $model->combinedTo->company->address->externalId = $jsonData['combinedTo']['company']['address']['externalId'];

}


}
if (isset($jsonData['combinedTo']['company']['customFields'])) {
    $model->combinedTo->company->customFields = [];
foreach (array_keys($jsonData['combinedTo']['company']['customFields']) as $index50) {
    $model->combinedTo->company->customFields[$index50] = $jsonData['combinedTo']['company']['customFields'][$index50];

}

}
if (isset($jsonData['combinedTo']['company']['marginSumm'])) {
    $model->combinedTo->company->marginSumm = (float) $jsonData['combinedTo']['company']['marginSumm'];

}
if (isset($jsonData['combinedTo']['company']['totalSumm'])) {
    $model->combinedTo->company->totalSumm = (float) $jsonData['combinedTo']['company']['totalSumm'];

}
if (isset($jsonData['combinedTo']['company']['averageSumm'])) {
    $model->combinedTo->company->averageSumm = (float) $jsonData['combinedTo']['company']['averageSumm'];

}
if (isset($jsonData['combinedTo']['company']['ordersCount'])) {
    $model->combinedTo->company->ordersCount = $jsonData['combinedTo']['company']['ordersCount'];

}
if (isset($jsonData['combinedTo']['company']['costSumm'])) {
    $model->combinedTo->company->costSumm = (float) $jsonData['combinedTo']['company']['costSumm'];

}


}
if (isset($jsonData['combinedTo']['contragent'])) {
    
$model->combinedTo->contragent = new RetailCrm\Api\Model\Entity\Order\OrderContragent();
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
if (isset($jsonData['combinedTo']['delivery'])) {
    
$model->combinedTo->delivery = new RetailCrm\Api\Model\Entity\Order\Delivery\SerializedOrderDelivery();
if (isset($jsonData['combinedTo']['delivery']['code'])) {
    $model->combinedTo->delivery->code = $jsonData['combinedTo']['delivery']['code'];

}
if (isset($jsonData['combinedTo']['delivery']['integrationCode'])) {
    $model->combinedTo->delivery->integrationCode = $jsonData['combinedTo']['delivery']['integrationCode'];

}
if (isset($jsonData['combinedTo']['delivery']['data'])) {
    
$model->combinedTo->delivery->data = new RetailCrm\Api\Model\Entity\Order\Delivery\DeliveryData();
if (isset($jsonData['combinedTo']['delivery']['data']['externalId'])) {
    $model->combinedTo->delivery->data->externalId = $jsonData['combinedTo']['delivery']['data']['externalId'];

}
if (isset($jsonData['combinedTo']['delivery']['data']['trackNumber'])) {
    $model->combinedTo->delivery->data->trackNumber = $jsonData['combinedTo']['delivery']['data']['trackNumber'];

}
if (isset($jsonData['combinedTo']['delivery']['data']['status'])) {
    $model->combinedTo->delivery->data->status = $jsonData['combinedTo']['delivery']['data']['status'];

}
if (isset($jsonData['combinedTo']['delivery']['data']['locked'])) {
    $model->combinedTo->delivery->data->locked = $jsonData['combinedTo']['delivery']['data']['locked'];

}
if (isset($jsonData['combinedTo']['delivery']['data']['pickuppointAddress'])) {
    $model->combinedTo->delivery->data->pickuppointAddress = $jsonData['combinedTo']['delivery']['data']['pickuppointAddress'];

}
if (isset($jsonData['combinedTo']['delivery']['data']['days'])) {
    $model->combinedTo->delivery->data->days = $jsonData['combinedTo']['delivery']['data']['days'];

}
if (isset($jsonData['combinedTo']['delivery']['data']['statusText'])) {
    $model->combinedTo->delivery->data->statusText = $jsonData['combinedTo']['delivery']['data']['statusText'];

}
if (isset($jsonData['combinedTo']['delivery']['data']['statusDate'])) {
    $model->combinedTo->delivery->data->statusDate = \DateTime::createFromFormat('Y-m-d', $jsonData['combinedTo']['delivery']['data']['statusDate']);

}
if (isset($jsonData['combinedTo']['delivery']['data']['tariff'])) {
    $model->combinedTo->delivery->data->tariff = $jsonData['combinedTo']['delivery']['data']['tariff'];

}
if (isset($jsonData['combinedTo']['delivery']['data']['tariffName'])) {
    $model->combinedTo->delivery->data->tariffName = $jsonData['combinedTo']['delivery']['data']['tariffName'];

}
if (isset($jsonData['combinedTo']['delivery']['data']['pickuppointId'])) {
    $model->combinedTo->delivery->data->pickuppointId = $jsonData['combinedTo']['delivery']['data']['pickuppointId'];

}
if (isset($jsonData['combinedTo']['delivery']['data']['pickuppointSchedule'])) {
    $model->combinedTo->delivery->data->pickuppointSchedule = $jsonData['combinedTo']['delivery']['data']['pickuppointSchedule'];

}
if (isset($jsonData['combinedTo']['delivery']['data']['pickuppointPhone'])) {
    $model->combinedTo->delivery->data->pickuppointPhone = $jsonData['combinedTo']['delivery']['data']['pickuppointPhone'];

}
if (isset($jsonData['combinedTo']['delivery']['data']['payerType'])) {
    $model->combinedTo->delivery->data->payerType = $jsonData['combinedTo']['delivery']['data']['payerType'];

}
if (isset($jsonData['combinedTo']['delivery']['data']['statusComment'])) {
    $model->combinedTo->delivery->data->statusComment = $jsonData['combinedTo']['delivery']['data']['statusComment'];

}
if (isset($jsonData['combinedTo']['delivery']['data']['cost'])) {
    $model->combinedTo->delivery->data->cost = (float) $jsonData['combinedTo']['delivery']['data']['cost'];

}
if (isset($jsonData['combinedTo']['delivery']['data']['minTerm'])) {
    $model->combinedTo->delivery->data->minTerm = $jsonData['combinedTo']['delivery']['data']['minTerm'];

}
if (isset($jsonData['combinedTo']['delivery']['data']['maxTerm'])) {
    $model->combinedTo->delivery->data->maxTerm = $jsonData['combinedTo']['delivery']['data']['maxTerm'];

}
if (isset($jsonData['combinedTo']['delivery']['data']['shipmentpointId'])) {
    $model->combinedTo->delivery->data->shipmentpointId = $jsonData['combinedTo']['delivery']['data']['shipmentpointId'];

}
if (isset($jsonData['combinedTo']['delivery']['data']['shipmentpointName'])) {
    $model->combinedTo->delivery->data->shipmentpointName = $jsonData['combinedTo']['delivery']['data']['shipmentpointName'];

}
if (isset($jsonData['combinedTo']['delivery']['data']['shipmentpointAddress'])) {
    $model->combinedTo->delivery->data->shipmentpointAddress = $jsonData['combinedTo']['delivery']['data']['shipmentpointAddress'];

}
if (isset($jsonData['combinedTo']['delivery']['data']['shipmentpointSchedule'])) {
    $model->combinedTo->delivery->data->shipmentpointSchedule = $jsonData['combinedTo']['delivery']['data']['shipmentpointSchedule'];

}
if (isset($jsonData['combinedTo']['delivery']['data']['shipmentpointPhone'])) {
    $model->combinedTo->delivery->data->shipmentpointPhone = $jsonData['combinedTo']['delivery']['data']['shipmentpointPhone'];

}
if (isset($jsonData['combinedTo']['delivery']['data']['shipmentpointCoordinateLatitude'])) {
    $model->combinedTo->delivery->data->shipmentpointCoordinateLatitude = $jsonData['combinedTo']['delivery']['data']['shipmentpointCoordinateLatitude'];

}
if (isset($jsonData['combinedTo']['delivery']['data']['shipmentpointCoordinateLongitude'])) {
    $model->combinedTo->delivery->data->shipmentpointCoordinateLongitude = $jsonData['combinedTo']['delivery']['data']['shipmentpointCoordinateLongitude'];

}
if (isset($jsonData['combinedTo']['delivery']['data']['pickuppointName'])) {
    $model->combinedTo->delivery->data->pickuppointName = $jsonData['combinedTo']['delivery']['data']['pickuppointName'];

}
if (isset($jsonData['combinedTo']['delivery']['data']['pickuppointCoordinateLatitude'])) {
    $model->combinedTo->delivery->data->pickuppointCoordinateLatitude = $jsonData['combinedTo']['delivery']['data']['pickuppointCoordinateLatitude'];

}
if (isset($jsonData['combinedTo']['delivery']['data']['pickuppointCoordinateLongitude'])) {
    $model->combinedTo->delivery->data->pickuppointCoordinateLongitude = $jsonData['combinedTo']['delivery']['data']['pickuppointCoordinateLongitude'];

}
if (isset($jsonData['combinedTo']['delivery']['data']['extraData'])) {
    $model->combinedTo->delivery->data->extraData = [];
foreach (array_keys($jsonData['combinedTo']['delivery']['data']['extraData']) as $index56) {
    $model->combinedTo->delivery->data->extraData[$index56] = $jsonData['combinedTo']['delivery']['data']['extraData'][$index56];

}

}
if (isset($jsonData['combinedTo']['delivery']['data']['packages'])) {
    $model->combinedTo->delivery->data->packages = [];
foreach (array_keys($jsonData['combinedTo']['delivery']['data']['packages']) as $index55) {
    
$model->combinedTo->delivery->data->packages[$index55] = new RetailCrm\Api\Model\Entity\Order\Delivery\Package();
if (isset($jsonData['combinedTo']['delivery']['data']['packages'][$index55]['packageId'])) {
    $model->combinedTo->delivery->data->packages[$index55]->packageId = $jsonData['combinedTo']['delivery']['data']['packages'][$index55]['packageId'];

}
if (isset($jsonData['combinedTo']['delivery']['data']['packages'][$index55]['weight'])) {
    $model->combinedTo->delivery->data->packages[$index55]->weight = (float) $jsonData['combinedTo']['delivery']['data']['packages'][$index55]['weight'];

}
if (isset($jsonData['combinedTo']['delivery']['data']['packages'][$index55]['length'])) {
    $model->combinedTo->delivery->data->packages[$index55]->length = $jsonData['combinedTo']['delivery']['data']['packages'][$index55]['length'];

}
if (isset($jsonData['combinedTo']['delivery']['data']['packages'][$index55]['width'])) {
    $model->combinedTo->delivery->data->packages[$index55]->width = $jsonData['combinedTo']['delivery']['data']['packages'][$index55]['width'];

}
if (isset($jsonData['combinedTo']['delivery']['data']['packages'][$index55]['height'])) {
    $model->combinedTo->delivery->data->packages[$index55]->height = $jsonData['combinedTo']['delivery']['data']['packages'][$index55]['height'];

}
if (isset($jsonData['combinedTo']['delivery']['data']['packages'][$index55]['items'])) {
    $model->combinedTo->delivery->data->packages[$index55]->items = [];
foreach (array_keys($jsonData['combinedTo']['delivery']['data']['packages'][$index55]['items']) as $index74) {
    
$model->combinedTo->delivery->data->packages[$index55]->items[$index74] = new RetailCrm\Api\Model\Entity\Order\Delivery\PackageItem();
if (isset($jsonData['combinedTo']['delivery']['data']['packages'][$index55]['items'][$index74]['orderProduct'])) {
    
$model->combinedTo->delivery->data->packages[$index55]->items[$index74]->orderProduct = new RetailCrm\Api\Model\Entity\Order\Delivery\PackageItemOrderProduct();
if (isset($jsonData['combinedTo']['delivery']['data']['packages'][$index55]['items'][$index74]['orderProduct']['id'])) {
    $model->combinedTo->delivery->data->packages[$index55]->items[$index74]->orderProduct->id = $jsonData['combinedTo']['delivery']['data']['packages'][$index55]['items'][$index74]['orderProduct']['id'];

}
if (isset($jsonData['combinedTo']['delivery']['data']['packages'][$index55]['items'][$index74]['orderProduct']['externalId'])) {
    $model->combinedTo->delivery->data->packages[$index55]->items[$index74]->orderProduct->externalId = $jsonData['combinedTo']['delivery']['data']['packages'][$index55]['items'][$index74]['orderProduct']['externalId'];

}
if (isset($jsonData['combinedTo']['delivery']['data']['packages'][$index55]['items'][$index74]['orderProduct']['externalIds'])) {
    $model->combinedTo->delivery->data->packages[$index55]->items[$index74]->orderProduct->externalIds = [];
foreach (array_keys($jsonData['combinedTo']['delivery']['data']['packages'][$index55]['items'][$index74]['orderProduct']['externalIds']) as $index115) {
    
$model->combinedTo->delivery->data->packages[$index55]->items[$index74]->orderProduct->externalIds[$index115] = new RetailCrm\Api\Model\Entity\CodeValueModel();
if (isset($jsonData['combinedTo']['delivery']['data']['packages'][$index55]['items'][$index74]['orderProduct']['externalIds'][$index115]['code'])) {
    $model->combinedTo->delivery->data->packages[$index55]->items[$index74]->orderProduct->externalIds[$index115]->code = $jsonData['combinedTo']['delivery']['data']['packages'][$index55]['items'][$index74]['orderProduct']['externalIds'][$index115]['code'];

}
if (isset($jsonData['combinedTo']['delivery']['data']['packages'][$index55]['items'][$index74]['orderProduct']['externalIds'][$index115]['value'])) {
    $model->combinedTo->delivery->data->packages[$index55]->items[$index74]->orderProduct->externalIds[$index115]->value = $jsonData['combinedTo']['delivery']['data']['packages'][$index55]['items'][$index74]['orderProduct']['externalIds'][$index115]['value'];

}


}

}


}
if (isset($jsonData['combinedTo']['delivery']['data']['packages'][$index55]['items'][$index74]['quantity'])) {
    $model->combinedTo->delivery->data->packages[$index55]->items[$index74]->quantity = (float) $jsonData['combinedTo']['delivery']['data']['packages'][$index55]['items'][$index74]['quantity'];

}


}

}


}

}
if (isset($jsonData['combinedTo']['delivery']['data']['returnExternalId'])) {
    $model->combinedTo->delivery->data->returnExternalId = $jsonData['combinedTo']['delivery']['data']['returnExternalId'];

}
if (isset($jsonData['combinedTo']['delivery']['data']['deliveryName'])) {
    $model->combinedTo->delivery->data->deliveryName = $jsonData['combinedTo']['delivery']['data']['deliveryName'];

}
if (isset($jsonData['combinedTo']['delivery']['data']['price'])) {
    $model->combinedTo->delivery->data->price = (float) $jsonData['combinedTo']['delivery']['data']['price'];

}
if (isset($jsonData['combinedTo']['delivery']['data']['insurancePrice'])) {
    $model->combinedTo->delivery->data->insurancePrice = (float) $jsonData['combinedTo']['delivery']['data']['insurancePrice'];

}
if (isset($jsonData['combinedTo']['delivery']['data']['tariffType'])) {
    $model->combinedTo->delivery->data->tariffType = $jsonData['combinedTo']['delivery']['data']['tariffType'];

}
if (isset($jsonData['combinedTo']['delivery']['data']['receiverCity'])) {
    $model->combinedTo->delivery->data->receiverCity = $jsonData['combinedTo']['delivery']['data']['receiverCity'];

}
if (isset($jsonData['combinedTo']['delivery']['data']['services'])) {
    $model->combinedTo->delivery->data->services = [];
foreach (array_keys($jsonData['combinedTo']['delivery']['data']['services']) as $index55) {
    $model->combinedTo->delivery->data->services[$index55] = $jsonData['combinedTo']['delivery']['data']['services'][$index55];

}

}
if (isset($jsonData['combinedTo']['delivery']['data']['packageNumber'])) {
    $model->combinedTo->delivery->data->packageNumber = $jsonData['combinedTo']['delivery']['data']['packageNumber'];

}
if (isset($jsonData['combinedTo']['delivery']['data']['comment'])) {
    $model->combinedTo->delivery->data->comment = $jsonData['combinedTo']['delivery']['data']['comment'];

}
if (isset($jsonData['combinedTo']['delivery']['data']['deliveryCode'])) {
    $model->combinedTo->delivery->data->deliveryCode = $jsonData['combinedTo']['delivery']['data']['deliveryCode'];

}
if (isset($jsonData['combinedTo']['delivery']['data']['notes'])) {
    $model->combinedTo->delivery->data->notes = $jsonData['combinedTo']['delivery']['data']['notes'];

}
if (isset($jsonData['combinedTo']['delivery']['data']['id'])) {
    $model->combinedTo->delivery->data->id = $jsonData['combinedTo']['delivery']['data']['id'];

}
if (isset($jsonData['combinedTo']['delivery']['data']['firstName'])) {
    $model->combinedTo->delivery->data->firstName = $jsonData['combinedTo']['delivery']['data']['firstName'];

}
if (isset($jsonData['combinedTo']['delivery']['data']['lastName'])) {
    $model->combinedTo->delivery->data->lastName = $jsonData['combinedTo']['delivery']['data']['lastName'];

}
if (isset($jsonData['combinedTo']['delivery']['data']['patronymic'])) {
    $model->combinedTo->delivery->data->patronymic = $jsonData['combinedTo']['delivery']['data']['patronymic'];

}
if (isset($jsonData['combinedTo']['delivery']['data']['active'])) {
    $model->combinedTo->delivery->data->active = $jsonData['combinedTo']['delivery']['data']['active'];

}
if (isset($jsonData['combinedTo']['delivery']['data']['email'])) {
    $model->combinedTo->delivery->data->email = $jsonData['combinedTo']['delivery']['data']['email'];

}
if (isset($jsonData['combinedTo']['delivery']['data']['phone'])) {
    
$model->combinedTo->delivery->data->phone = new RetailCrm\Api\Model\Entity\Order\Delivery\CourierPhone();
if (isset($jsonData['combinedTo']['delivery']['data']['phone']['number'])) {
    $model->combinedTo->delivery->data->phone->number = $jsonData['combinedTo']['delivery']['data']['phone']['number'];

}


}
if (isset($jsonData['combinedTo']['delivery']['data']['description'])) {
    $model->combinedTo->delivery->data->description = $jsonData['combinedTo']['delivery']['data']['description'];

}
if (isset($jsonData['combinedTo']['delivery']['data']['courierId'])) {
    $model->combinedTo->delivery->data->courierId = $jsonData['combinedTo']['delivery']['data']['courierId'];

}
if (isset($jsonData['combinedTo']['delivery']['data']['serviceType'])) {
    $model->combinedTo->delivery->data->serviceType = $jsonData['combinedTo']['delivery']['data']['serviceType'];

}
if (isset($jsonData['combinedTo']['delivery']['data']['pickuppoint'])) {
    $model->combinedTo->delivery->data->pickuppoint = $jsonData['combinedTo']['delivery']['data']['pickuppoint'];

}
if (isset($jsonData['combinedTo']['delivery']['data']['receiverWarehouseTypeRef'])) {
    $model->combinedTo->delivery->data->receiverWarehouseTypeRef = $jsonData['combinedTo']['delivery']['data']['receiverWarehouseTypeRef'];

}
if (isset($jsonData['combinedTo']['delivery']['data']['statusName'])) {
    $model->combinedTo->delivery->data->statusName = $jsonData['combinedTo']['delivery']['data']['statusName'];

}
if (isset($jsonData['combinedTo']['delivery']['data']['receiverCityRef'])) {
    $model->combinedTo->delivery->data->receiverCityRef = $jsonData['combinedTo']['delivery']['data']['receiverCityRef'];

}
if (isset($jsonData['combinedTo']['delivery']['data']['receiverStreet'])) {
    $model->combinedTo->delivery->data->receiverStreet = $jsonData['combinedTo']['delivery']['data']['receiverStreet'];

}
if (isset($jsonData['combinedTo']['delivery']['data']['receiverStreetRef'])) {
    $model->combinedTo->delivery->data->receiverStreetRef = $jsonData['combinedTo']['delivery']['data']['receiverStreetRef'];

}
if (isset($jsonData['combinedTo']['delivery']['data']['seatsAmount'])) {
    $model->combinedTo->delivery->data->seatsAmount = $jsonData['combinedTo']['delivery']['data']['seatsAmount'];

}
if (isset($jsonData['combinedTo']['delivery']['data']['cargoType'])) {
    $model->combinedTo->delivery->data->cargoType = $jsonData['combinedTo']['delivery']['data']['cargoType'];

}
if (isset($jsonData['combinedTo']['delivery']['data']['cargoDescription'])) {
    $model->combinedTo->delivery->data->cargoDescription = $jsonData['combinedTo']['delivery']['data']['cargoDescription'];

}
if (isset($jsonData['combinedTo']['delivery']['data']['cashPayerType'])) {
    $model->combinedTo->delivery->data->cashPayerType = $jsonData['combinedTo']['delivery']['data']['cashPayerType'];

}
if (isset($jsonData['combinedTo']['delivery']['data']['paymentForm'])) {
    $model->combinedTo->delivery->data->paymentForm = $jsonData['combinedTo']['delivery']['data']['paymentForm'];

}
if (isset($jsonData['combinedTo']['delivery']['data']['ownershipForm'])) {
    $model->combinedTo->delivery->data->ownershipForm = $jsonData['combinedTo']['delivery']['data']['ownershipForm'];

}
if (isset($jsonData['combinedTo']['delivery']['data']['accompanyingDocument'])) {
    $model->combinedTo->delivery->data->accompanyingDocument = $jsonData['combinedTo']['delivery']['data']['accompanyingDocument'];

}
if (isset($jsonData['combinedTo']['delivery']['data']['preferredDeliveryDate'])) {
    $model->combinedTo->delivery->data->preferredDeliveryDate = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['combinedTo']['delivery']['data']['preferredDeliveryDate']);

}
if (isset($jsonData['combinedTo']['delivery']['data']['timeInterval'])) {
    $model->combinedTo->delivery->data->timeInterval = $jsonData['combinedTo']['delivery']['data']['timeInterval'];

}
if (isset($jsonData['combinedTo']['delivery']['data']['saturdayDelivery'])) {
    $model->combinedTo->delivery->data->saturdayDelivery = $jsonData['combinedTo']['delivery']['data']['saturdayDelivery'];

}
if (isset($jsonData['combinedTo']['delivery']['data']['deliveryDate'])) {
    $model->combinedTo->delivery->data->deliveryDate = $jsonData['combinedTo']['delivery']['data']['deliveryDate'];

}
if (isset($jsonData['combinedTo']['delivery']['data']['denieReason'])) {
    $model->combinedTo->delivery->data->denieReason = $jsonData['combinedTo']['delivery']['data']['denieReason'];

}
if (isset($jsonData['combinedTo']['delivery']['data']['backwardDelivery'])) {
    $model->combinedTo->delivery->data->backwardDelivery = $jsonData['combinedTo']['delivery']['data']['backwardDelivery'];

}
if (isset($jsonData['combinedTo']['delivery']['data']['backwardDeliveryCargoType'])) {
    $model->combinedTo->delivery->data->backwardDeliveryCargoType = $jsonData['combinedTo']['delivery']['data']['backwardDeliveryCargoType'];

}
if (isset($jsonData['combinedTo']['delivery']['data']['backwardDeliveryPayerType'])) {
    $model->combinedTo->delivery->data->backwardDeliveryPayerType = $jsonData['combinedTo']['delivery']['data']['backwardDeliveryPayerType'];

}
if (isset($jsonData['combinedTo']['delivery']['data']['backwardDeliveryRedeliveryString'])) {
    $model->combinedTo->delivery->data->backwardDeliveryRedeliveryString = $jsonData['combinedTo']['delivery']['data']['backwardDeliveryRedeliveryString'];

}
if (isset($jsonData['combinedTo']['delivery']['data']['afterpaymentOnGoodsCost'])) {
    $model->combinedTo->delivery->data->afterpaymentOnGoodsCost = (float) $jsonData['combinedTo']['delivery']['data']['afterpaymentOnGoodsCost'];

}
if (isset($jsonData['combinedTo']['delivery']['data']['declaredValue'])) {
    $model->combinedTo->delivery->data->declaredValue = (float) $jsonData['combinedTo']['delivery']['data']['declaredValue'];

}
if (isset($jsonData['combinedTo']['delivery']['data']['sendDate'])) {
    $model->combinedTo->delivery->data->sendDate = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['combinedTo']['delivery']['data']['sendDate']);

}
if (isset($jsonData['combinedTo']['delivery']['data']['deliveryType'])) {
    $model->combinedTo->delivery->data->deliveryType = $jsonData['combinedTo']['delivery']['data']['deliveryType'];

}
if (isset($jsonData['combinedTo']['delivery']['data']['pickupType'])) {
    $model->combinedTo->delivery->data->pickupType = $jsonData['combinedTo']['delivery']['data']['pickupType'];

}
if (isset($jsonData['combinedTo']['delivery']['data']['pickuppointDescription'])) {
    $model->combinedTo->delivery->data->pickuppointDescription = $jsonData['combinedTo']['delivery']['data']['pickuppointDescription'];

}
if (isset($jsonData['combinedTo']['delivery']['data']['placesCount'])) {
    $model->combinedTo->delivery->data->placesCount = $jsonData['combinedTo']['delivery']['data']['placesCount'];

}
if (isset($jsonData['combinedTo']['delivery']['data']['service'])) {
    $model->combinedTo->delivery->data->service = $jsonData['combinedTo']['delivery']['data']['service'];

}


}
if (isset($jsonData['combinedTo']['delivery']['service'])) {
    
$model->combinedTo->delivery->service = new RetailCrm\Api\Model\Entity\Order\Delivery\SerializedDeliveryService();
if (isset($jsonData['combinedTo']['delivery']['service']['name'])) {
    $model->combinedTo->delivery->service->name = $jsonData['combinedTo']['delivery']['service']['name'];

}
if (isset($jsonData['combinedTo']['delivery']['service']['code'])) {
    $model->combinedTo->delivery->service->code = $jsonData['combinedTo']['delivery']['service']['code'];

}
if (isset($jsonData['combinedTo']['delivery']['service']['active'])) {
    $model->combinedTo->delivery->service->active = $jsonData['combinedTo']['delivery']['service']['active'];

}


}
if (isset($jsonData['combinedTo']['delivery']['cost'])) {
    $model->combinedTo->delivery->cost = (float) $jsonData['combinedTo']['delivery']['cost'];

}
if (isset($jsonData['combinedTo']['delivery']['netCost'])) {
    $model->combinedTo->delivery->netCost = (float) $jsonData['combinedTo']['delivery']['netCost'];

}
if (isset($jsonData['combinedTo']['delivery']['date'])) {
    $model->combinedTo->delivery->date = \DateTime::createFromFormat('Y-m-d', $jsonData['combinedTo']['delivery']['date']);

}
if (isset($jsonData['combinedTo']['delivery']['time'])) {
    
$model->combinedTo->delivery->time = new RetailCrm\Api\Model\Entity\Delivery\TimeInterval();
if (isset($jsonData['combinedTo']['delivery']['time']['from'])) {
    $model->combinedTo->delivery->time->from = \DateTime::createFromFormat('H:i', $jsonData['combinedTo']['delivery']['time']['from']);

}
if (isset($jsonData['combinedTo']['delivery']['time']['to'])) {
    $model->combinedTo->delivery->time->to = \DateTime::createFromFormat('H:i', $jsonData['combinedTo']['delivery']['time']['to']);

}
if (isset($jsonData['combinedTo']['delivery']['time']['custom'])) {
    $model->combinedTo->delivery->time->custom = $jsonData['combinedTo']['delivery']['time']['custom'];

}


}
if (isset($jsonData['combinedTo']['delivery']['address'])) {
    
$model->combinedTo->delivery->address = new RetailCrm\Api\Model\Entity\Order\Delivery\OrderDeliveryAddress();
if (isset($jsonData['combinedTo']['delivery']['address']['id'])) {
    $model->combinedTo->delivery->address->id = $jsonData['combinedTo']['delivery']['address']['id'];

}
if (isset($jsonData['combinedTo']['delivery']['address']['index'])) {
    $model->combinedTo->delivery->address->index = $jsonData['combinedTo']['delivery']['address']['index'];

}
if (isset($jsonData['combinedTo']['delivery']['address']['countryIso'])) {
    $model->combinedTo->delivery->address->countryIso = $jsonData['combinedTo']['delivery']['address']['countryIso'];

}
if (isset($jsonData['combinedTo']['delivery']['address']['region'])) {
    $model->combinedTo->delivery->address->region = $jsonData['combinedTo']['delivery']['address']['region'];

}
if (isset($jsonData['combinedTo']['delivery']['address']['regionId'])) {
    $model->combinedTo->delivery->address->regionId = $jsonData['combinedTo']['delivery']['address']['regionId'];

}
if (isset($jsonData['combinedTo']['delivery']['address']['city'])) {
    $model->combinedTo->delivery->address->city = $jsonData['combinedTo']['delivery']['address']['city'];

}
if (isset($jsonData['combinedTo']['delivery']['address']['cityId'])) {
    $model->combinedTo->delivery->address->cityId = $jsonData['combinedTo']['delivery']['address']['cityId'];

}
if (isset($jsonData['combinedTo']['delivery']['address']['cityType'])) {
    $model->combinedTo->delivery->address->cityType = $jsonData['combinedTo']['delivery']['address']['cityType'];

}
if (isset($jsonData['combinedTo']['delivery']['address']['street'])) {
    $model->combinedTo->delivery->address->street = $jsonData['combinedTo']['delivery']['address']['street'];

}
if (isset($jsonData['combinedTo']['delivery']['address']['streetId'])) {
    $model->combinedTo->delivery->address->streetId = $jsonData['combinedTo']['delivery']['address']['streetId'];

}
if (isset($jsonData['combinedTo']['delivery']['address']['streetType'])) {
    $model->combinedTo->delivery->address->streetType = $jsonData['combinedTo']['delivery']['address']['streetType'];

}
if (isset($jsonData['combinedTo']['delivery']['address']['building'])) {
    $model->combinedTo->delivery->address->building = $jsonData['combinedTo']['delivery']['address']['building'];

}
if (isset($jsonData['combinedTo']['delivery']['address']['flat'])) {
    $model->combinedTo->delivery->address->flat = $jsonData['combinedTo']['delivery']['address']['flat'];

}
if (isset($jsonData['combinedTo']['delivery']['address']['floor'])) {
    $model->combinedTo->delivery->address->floor = $jsonData['combinedTo']['delivery']['address']['floor'];

}
if (isset($jsonData['combinedTo']['delivery']['address']['block'])) {
    $model->combinedTo->delivery->address->block = $jsonData['combinedTo']['delivery']['address']['block'];

}
if (isset($jsonData['combinedTo']['delivery']['address']['house'])) {
    $model->combinedTo->delivery->address->house = $jsonData['combinedTo']['delivery']['address']['house'];

}
if (isset($jsonData['combinedTo']['delivery']['address']['housing'])) {
    $model->combinedTo->delivery->address->housing = $jsonData['combinedTo']['delivery']['address']['housing'];

}
if (isset($jsonData['combinedTo']['delivery']['address']['metro'])) {
    $model->combinedTo->delivery->address->metro = $jsonData['combinedTo']['delivery']['address']['metro'];

}
if (isset($jsonData['combinedTo']['delivery']['address']['text'])) {
    $model->combinedTo->delivery->address->text = $jsonData['combinedTo']['delivery']['address']['text'];

}


}
if (isset($jsonData['combinedTo']['delivery']['vatRate'])) {
    $model->combinedTo->delivery->vatRate = $jsonData['combinedTo']['delivery']['vatRate'];

}


}
if (isset($jsonData['combinedTo']['marketplace'])) {
    
$model->combinedTo->marketplace = new RetailCrm\Api\Model\Entity\Order\MarketplaceData();
if (isset($jsonData['combinedTo']['marketplace']['code'])) {
    $model->combinedTo->marketplace->code = $jsonData['combinedTo']['marketplace']['code'];

}
if (isset($jsonData['combinedTo']['marketplace']['orderId'])) {
    $model->combinedTo->marketplace->orderId = $jsonData['combinedTo']['marketplace']['orderId'];

}


}
if (isset($jsonData['combinedTo']['site'])) {
    $model->combinedTo->site = $jsonData['combinedTo']['site'];

}
if (isset($jsonData['combinedTo']['status'])) {
    $model->combinedTo->status = $jsonData['combinedTo']['status'];

}
if (isset($jsonData['combinedTo']['statusComment'])) {
    $model->combinedTo->statusComment = $jsonData['combinedTo']['statusComment'];

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
if (isset($jsonData['combinedTo']['items'])) {
    $model->combinedTo->items = [];
foreach (array_keys($jsonData['combinedTo']['items']) as $index32) {
    
$model->combinedTo->items[$index32] = new RetailCrm\Api\Model\Entity\Order\Items\OrderProduct();
if (isset($jsonData['combinedTo']['items'][$index32]['externalId'])) {
    $model->combinedTo->items[$index32]->externalId = $jsonData['combinedTo']['items'][$index32]['externalId'];

}
if (isset($jsonData['combinedTo']['items'][$index32]['markingCodes'])) {
    $model->combinedTo->items[$index32]->markingCodes = [];
foreach (array_keys($jsonData['combinedTo']['items'][$index32]['markingCodes']) as $index58) {
    $model->combinedTo->items[$index32]->markingCodes[$index58] = $jsonData['combinedTo']['items'][$index32]['markingCodes'][$index58];

}

}
if (isset($jsonData['combinedTo']['items'][$index32]['id'])) {
    $model->combinedTo->items[$index32]->id = $jsonData['combinedTo']['items'][$index32]['id'];

}
if (isset($jsonData['combinedTo']['items'][$index32]['externalIds'])) {
    $model->combinedTo->items[$index32]->externalIds = [];
foreach (array_keys($jsonData['combinedTo']['items'][$index32]['externalIds']) as $index57) {
    
$model->combinedTo->items[$index32]->externalIds[$index57] = new RetailCrm\Api\Model\Entity\CodeValueModel();
if (isset($jsonData['combinedTo']['items'][$index32]['externalIds'][$index57]['code'])) {
    $model->combinedTo->items[$index32]->externalIds[$index57]->code = $jsonData['combinedTo']['items'][$index32]['externalIds'][$index57]['code'];

}
if (isset($jsonData['combinedTo']['items'][$index32]['externalIds'][$index57]['value'])) {
    $model->combinedTo->items[$index32]->externalIds[$index57]->value = $jsonData['combinedTo']['items'][$index32]['externalIds'][$index57]['value'];

}


}

}
if (isset($jsonData['combinedTo']['items'][$index32]['priceType'])) {
    
$model->combinedTo->items[$index32]->priceType = new RetailCrm\Api\Model\Entity\Order\Items\PriceType();
if (isset($jsonData['combinedTo']['items'][$index32]['priceType']['code'])) {
    $model->combinedTo->items[$index32]->priceType->code = $jsonData['combinedTo']['items'][$index32]['priceType']['code'];

}


}
if (isset($jsonData['combinedTo']['items'][$index32]['initialPrice'])) {
    $model->combinedTo->items[$index32]->initialPrice = (float) $jsonData['combinedTo']['items'][$index32]['initialPrice'];

}
if (isset($jsonData['combinedTo']['items'][$index32]['discountManualAmount'])) {
    $model->combinedTo->items[$index32]->discountManualAmount = (float) $jsonData['combinedTo']['items'][$index32]['discountManualAmount'];

}
if (isset($jsonData['combinedTo']['items'][$index32]['discountManualPercent'])) {
    $model->combinedTo->items[$index32]->discountManualPercent = (float) $jsonData['combinedTo']['items'][$index32]['discountManualPercent'];

}
if (isset($jsonData['combinedTo']['items'][$index32]['discountTotal'])) {
    $model->combinedTo->items[$index32]->discountTotal = (float) $jsonData['combinedTo']['items'][$index32]['discountTotal'];

}
if (isset($jsonData['combinedTo']['items'][$index32]['prices'])) {
    $model->combinedTo->items[$index32]->prices = [];
foreach (array_keys($jsonData['combinedTo']['items'][$index32]['prices']) as $index52) {
    
$model->combinedTo->items[$index32]->prices[$index52] = new RetailCrm\Api\Model\Entity\Order\Items\OrderProductPriceItem();
if (isset($jsonData['combinedTo']['items'][$index32]['prices'][$index52]['price'])) {
    $model->combinedTo->items[$index32]->prices[$index52]->price = (float) $jsonData['combinedTo']['items'][$index32]['prices'][$index52]['price'];

}
if (isset($jsonData['combinedTo']['items'][$index32]['prices'][$index52]['quantity'])) {
    $model->combinedTo->items[$index32]->prices[$index52]->quantity = (float) $jsonData['combinedTo']['items'][$index32]['prices'][$index52]['quantity'];

}


}

}
if (isset($jsonData['combinedTo']['items'][$index32]['vatRate'])) {
    $model->combinedTo->items[$index32]->vatRate = $jsonData['combinedTo']['items'][$index32]['vatRate'];

}
if (isset($jsonData['combinedTo']['items'][$index32]['createdAt'])) {
    $model->combinedTo->items[$index32]->createdAt = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['combinedTo']['items'][$index32]['createdAt']);

}
if (isset($jsonData['combinedTo']['items'][$index32]['quantity'])) {
    $model->combinedTo->items[$index32]->quantity = (float) $jsonData['combinedTo']['items'][$index32]['quantity'];

}
if (isset($jsonData['combinedTo']['items'][$index32]['status'])) {
    $model->combinedTo->items[$index32]->status = $jsonData['combinedTo']['items'][$index32]['status'];

}
if (isset($jsonData['combinedTo']['items'][$index32]['comment'])) {
    $model->combinedTo->items[$index32]->comment = $jsonData['combinedTo']['items'][$index32]['comment'];

}
if (isset($jsonData['combinedTo']['items'][$index32]['offer'])) {
    
$model->combinedTo->items[$index32]->offer = new RetailCrm\Api\Model\Entity\Order\Items\Offer();
if (isset($jsonData['combinedTo']['items'][$index32]['offer']['displayName'])) {
    $model->combinedTo->items[$index32]->offer->displayName = $jsonData['combinedTo']['items'][$index32]['offer']['displayName'];

}
if (isset($jsonData['combinedTo']['items'][$index32]['offer']['id'])) {
    $model->combinedTo->items[$index32]->offer->id = $jsonData['combinedTo']['items'][$index32]['offer']['id'];

}
if (isset($jsonData['combinedTo']['items'][$index32]['offer']['externalId'])) {
    $model->combinedTo->items[$index32]->offer->externalId = $jsonData['combinedTo']['items'][$index32]['offer']['externalId'];

}
if (isset($jsonData['combinedTo']['items'][$index32]['offer']['xmlId'])) {
    $model->combinedTo->items[$index32]->offer->xmlId = $jsonData['combinedTo']['items'][$index32]['offer']['xmlId'];

}
if (isset($jsonData['combinedTo']['items'][$index32]['offer']['name'])) {
    $model->combinedTo->items[$index32]->offer->name = $jsonData['combinedTo']['items'][$index32]['offer']['name'];

}
if (isset($jsonData['combinedTo']['items'][$index32]['offer']['article'])) {
    $model->combinedTo->items[$index32]->offer->article = $jsonData['combinedTo']['items'][$index32]['offer']['article'];

}
if (isset($jsonData['combinedTo']['items'][$index32]['offer']['vatRate'])) {
    $model->combinedTo->items[$index32]->offer->vatRate = $jsonData['combinedTo']['items'][$index32]['offer']['vatRate'];

}
if (isset($jsonData['combinedTo']['items'][$index32]['offer']['unit'])) {
    
$model->combinedTo->items[$index32]->offer->unit = new RetailCrm\Api\Model\Entity\Order\Items\Unit();
if (isset($jsonData['combinedTo']['items'][$index32]['offer']['unit']['code'])) {
    $model->combinedTo->items[$index32]->offer->unit->code = $jsonData['combinedTo']['items'][$index32]['offer']['unit']['code'];

}
if (isset($jsonData['combinedTo']['items'][$index32]['offer']['unit']['name'])) {
    $model->combinedTo->items[$index32]->offer->unit->name = $jsonData['combinedTo']['items'][$index32]['offer']['unit']['name'];

}
if (isset($jsonData['combinedTo']['items'][$index32]['offer']['unit']['sym'])) {
    $model->combinedTo->items[$index32]->offer->unit->sym = $jsonData['combinedTo']['items'][$index32]['offer']['unit']['sym'];

}


}
if (isset($jsonData['combinedTo']['items'][$index32]['offer']['barcode'])) {
    $model->combinedTo->items[$index32]->offer->barcode = $jsonData['combinedTo']['items'][$index32]['offer']['barcode'];

}
if (isset($jsonData['combinedTo']['items'][$index32]['offer']['properties'])) {
    $model->combinedTo->items[$index32]->offer->properties = [];
foreach (array_keys($jsonData['combinedTo']['items'][$index32]['offer']['properties']) as $index65) {
    $model->combinedTo->items[$index32]->offer->properties[$index65] = $jsonData['combinedTo']['items'][$index32]['offer']['properties'][$index65];

}

}


}
if (isset($jsonData['combinedTo']['items'][$index32]['productName'])) {
    $model->combinedTo->items[$index32]->productName = $jsonData['combinedTo']['items'][$index32]['productName'];

}
if (isset($jsonData['combinedTo']['items'][$index32]['isCanceled'])) {
    $model->combinedTo->items[$index32]->isCanceled = $jsonData['combinedTo']['items'][$index32]['isCanceled'];

}
if (isset($jsonData['combinedTo']['items'][$index32]['properties'])) {
    $model->combinedTo->items[$index32]->properties = [];
foreach (array_keys($jsonData['combinedTo']['items'][$index32]['properties']) as $index56) {
    
$model->combinedTo->items[$index32]->properties[$index56] = new RetailCrm\Api\Model\Entity\Order\Items\ItemProperty();
if (isset($jsonData['combinedTo']['items'][$index32]['properties'][$index56]['code'])) {
    $model->combinedTo->items[$index32]->properties[$index56]->code = $jsonData['combinedTo']['items'][$index32]['properties'][$index56]['code'];

}
if (isset($jsonData['combinedTo']['items'][$index32]['properties'][$index56]['name'])) {
    $model->combinedTo->items[$index32]->properties[$index56]->name = $jsonData['combinedTo']['items'][$index32]['properties'][$index56]['name'];

}
if (isset($jsonData['combinedTo']['items'][$index32]['properties'][$index56]['value'])) {
    $model->combinedTo->items[$index32]->properties[$index56]->value = $jsonData['combinedTo']['items'][$index32]['properties'][$index56]['value'];

}


}

}
if (isset($jsonData['combinedTo']['items'][$index32]['purchasePrice'])) {
    $model->combinedTo->items[$index32]->purchasePrice = (float) $jsonData['combinedTo']['items'][$index32]['purchasePrice'];

}


}

}
if (isset($jsonData['combinedTo']['fullPaidAt'])) {
    $model->combinedTo->fullPaidAt = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['combinedTo']['fullPaidAt']);

}
if (isset($jsonData['combinedTo']['payments'])) {
    $model->combinedTo->payments = [];
foreach (array_keys($jsonData['combinedTo']['payments']) as $index35) {
    
$model->combinedTo->payments[$index35] = new RetailCrm\Api\Model\Entity\Order\Payment();
if (isset($jsonData['combinedTo']['payments'][$index35]['id'])) {
    $model->combinedTo->payments[$index35]->id = $jsonData['combinedTo']['payments'][$index35]['id'];

}
if (isset($jsonData['combinedTo']['payments'][$index35]['status'])) {
    $model->combinedTo->payments[$index35]->status = $jsonData['combinedTo']['payments'][$index35]['status'];

}
if (isset($jsonData['combinedTo']['payments'][$index35]['type'])) {
    $model->combinedTo->payments[$index35]->type = $jsonData['combinedTo']['payments'][$index35]['type'];

}
if (isset($jsonData['combinedTo']['payments'][$index35]['externalId'])) {
    $model->combinedTo->payments[$index35]->externalId = $jsonData['combinedTo']['payments'][$index35]['externalId'];

}
if (isset($jsonData['combinedTo']['payments'][$index35]['amount'])) {
    $model->combinedTo->payments[$index35]->amount = (float) $jsonData['combinedTo']['payments'][$index35]['amount'];

}
if (isset($jsonData['combinedTo']['payments'][$index35]['paidAt'])) {
    $model->combinedTo->payments[$index35]->paidAt = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['combinedTo']['payments'][$index35]['paidAt']);

}
if (isset($jsonData['combinedTo']['payments'][$index35]['comment'])) {
    $model->combinedTo->payments[$index35]->comment = $jsonData['combinedTo']['payments'][$index35]['comment'];

}


}

}
if (isset($jsonData['combinedTo']['fromApi'])) {
    $model->combinedTo->fromApi = $jsonData['combinedTo']['fromApi'];

}
if (isset($jsonData['combinedTo']['weight'])) {
    $model->combinedTo->weight = (float) $jsonData['combinedTo']['weight'];

}
if (isset($jsonData['combinedTo']['length'])) {
    $model->combinedTo->length = $jsonData['combinedTo']['length'];

}
if (isset($jsonData['combinedTo']['width'])) {
    $model->combinedTo->width = $jsonData['combinedTo']['width'];

}
if (isset($jsonData['combinedTo']['height'])) {
    $model->combinedTo->height = $jsonData['combinedTo']['height'];

}
if (isset($jsonData['combinedTo']['shipmentStore'])) {
    $model->combinedTo->shipmentStore = $jsonData['combinedTo']['shipmentStore'];

}
if (isset($jsonData['combinedTo']['shipmentDate'])) {
    $model->combinedTo->shipmentDate = \DateTime::createFromFormat('Y-m-d', $jsonData['combinedTo']['shipmentDate']);

}
if (isset($jsonData['combinedTo']['shipped'])) {
    $model->combinedTo->shipped = $jsonData['combinedTo']['shipped'];

}
if (isset($jsonData['combinedTo']['dialogId'])) {
    $model->combinedTo->dialogId = $jsonData['combinedTo']['dialogId'];

}
if (isset($jsonData['combinedTo']['customFields'])) {
    $model->combinedTo->customFields = [];
foreach (array_keys($jsonData['combinedTo']['customFields']) as $index39) {
    $model->combinedTo->customFields[$index39] = $jsonData['combinedTo']['customFields'][$index39];

}

}
if (isset($jsonData['combinedTo']['clientId'])) {
    $model->combinedTo->clientId = $jsonData['combinedTo']['clientId'];

}
if (isset($jsonData['combinedTo']['loyaltyEventId'])) {
    $model->combinedTo->loyaltyEventId = $jsonData['combinedTo']['loyaltyEventId'];

}


}



    return $model;
}
