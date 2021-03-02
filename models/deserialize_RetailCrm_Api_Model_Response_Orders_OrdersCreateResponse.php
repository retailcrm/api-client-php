<?php

function deserialize_RetailCrm_Api_Model_Response_Orders_OrdersCreateResponse(array $jsonData): RetailCrm\Api\Model\Response\Orders\OrdersCreateResponse
{
    
$model = new RetailCrm\Api\Model\Response\Orders\OrdersCreateResponse();
if (isset($jsonData['success'])) {
    $model->success = $jsonData['success'];

}
if (isset($jsonData['id'])) {
    $model->id = $jsonData['id'];

}
if (isset($jsonData['order'])) {
    
$model->order = new RetailCrm\Api\Model\Entity\Orders\Order();
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
    
$model->order->contragent = new RetailCrm\Api\Model\Entity\Orders\OrderContragent();
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
    
$model->order->delivery = new RetailCrm\Api\Model\Entity\Orders\Delivery\SerializedOrderDelivery();
if (isset($jsonData['order']['delivery']['code'])) {
    $model->order->delivery->code = $jsonData['order']['delivery']['code'];

}
if (isset($jsonData['order']['delivery']['integrationCode'])) {
    $model->order->delivery->integrationCode = $jsonData['order']['delivery']['integrationCode'];

}
if (isset($jsonData['order']['delivery']['data'])) {
    
$model->order->delivery->data = new RetailCrm\Api\Model\Entity\Orders\Delivery\DeliveryData();
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
    
$model->order->delivery->data->packages[$index50] = new RetailCrm\Api\Model\Entity\Orders\Delivery\Package();
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
    
$model->order->delivery->data->packages[$index50]->items[$index69] = new RetailCrm\Api\Model\Entity\Orders\Delivery\PackageItem();
if (isset($jsonData['order']['delivery']['data']['packages'][$index50]['items'][$index69]['orderProduct'])) {
    
$model->order->delivery->data->packages[$index50]->items[$index69]->orderProduct = new RetailCrm\Api\Model\Entity\Orders\Delivery\PackageItemOrderProduct();
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
    
$model->order->delivery->data->phone = new RetailCrm\Api\Model\Entity\Orders\Delivery\CourierPhone();
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
    
$model->order->delivery->service = new RetailCrm\Api\Model\Entity\Orders\Delivery\SerializedDeliveryService();
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
    
$model->order->delivery->address = new RetailCrm\Api\Model\Entity\Orders\Delivery\OrderDeliveryAddress();
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
if (isset($jsonData['order']['delivery']['address']['notes'])) {
    $model->order->delivery->address->notes = $jsonData['order']['delivery']['address']['notes'];

}


}
if (isset($jsonData['order']['delivery']['vatRate'])) {
    $model->order->delivery->vatRate = $jsonData['order']['delivery']['vatRate'];

}


}
if (isset($jsonData['order']['marketplace'])) {
    
$model->order->marketplace = new RetailCrm\Api\Model\Entity\Orders\MarketplaceData();
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
    
$model->order->items[$index27] = new RetailCrm\Api\Model\Entity\Orders\Items\OrderProduct();
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
    
$model->order->items[$index27]->priceType = new RetailCrm\Api\Model\Entity\Orders\Items\PriceType();
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
    
$model->order->items[$index27]->prices[$index47] = new RetailCrm\Api\Model\Entity\Orders\Items\OrderProductPriceItem();
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
    
$model->order->items[$index27]->offer = new RetailCrm\Api\Model\Entity\Orders\Items\Offer();
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
    
$model->order->items[$index27]->offer->unit = new RetailCrm\Api\Model\Entity\Orders\Items\Unit();
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
if (isset($jsonData['order']['items'][$index27]['order'])) {
    
$model->order->items[$index27]->order = new RetailCrm\Api\Model\Entity\IdModel();
if (isset($jsonData['order']['items'][$index27]['order']['id'])) {
    $model->order->items[$index27]->order->id = $jsonData['order']['items'][$index27]['order']['id'];

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
    
$model->order->items[$index27]->properties[$index51] = new RetailCrm\Api\Model\Entity\Orders\Items\ItemProperty();
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
    
$model->order->payments[$index30] = new RetailCrm\Api\Model\Entity\Orders\Payment();
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



    return $model;
}
