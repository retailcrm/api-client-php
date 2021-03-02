<?php

function deserialize_RetailCrm_Api_Model_Entity_Orders_Order(array $jsonData): RetailCrm\Api\Model\Entity\Orders\Order
{
    
$model = new RetailCrm\Api\Model\Entity\Orders\Order();
if (isset($jsonData['bonusesCreditTotal'])) {
    $model->bonusesCreditTotal = (float) $jsonData['bonusesCreditTotal'];

}
if (isset($jsonData['bonusesChargeTotal'])) {
    $model->bonusesChargeTotal = (float) $jsonData['bonusesChargeTotal'];

}
if (isset($jsonData['summ'])) {
    $model->summ = (float) $jsonData['summ'];

}
if (isset($jsonData['id'])) {
    $model->id = $jsonData['id'];

}
if (isset($jsonData['slug'])) {
    $model->slug = $jsonData['slug'];

}
if (isset($jsonData['number'])) {
    $model->number = $jsonData['number'];

}
if (isset($jsonData['externalId'])) {
    $model->externalId = $jsonData['externalId'];

}
if (isset($jsonData['orderType'])) {
    $model->orderType = $jsonData['orderType'];

}
if (isset($jsonData['orderMethod'])) {
    $model->orderMethod = $jsonData['orderMethod'];

}
if (isset($jsonData['privilegeType'])) {
    $model->privilegeType = $jsonData['privilegeType'];

}
if (isset($jsonData['countryIso'])) {
    $model->countryIso = $jsonData['countryIso'];

}
if (isset($jsonData['createdAt'])) {
    $model->createdAt = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['createdAt']);

}
if (isset($jsonData['statusUpdatedAt'])) {
    $model->statusUpdatedAt = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['statusUpdatedAt']);

}
if (isset($jsonData['discountManualAmount'])) {
    $model->discountManualAmount = (float) $jsonData['discountManualAmount'];

}
if (isset($jsonData['discountManualPercent'])) {
    $model->discountManualPercent = (float) $jsonData['discountManualPercent'];

}
if (isset($jsonData['totalSumm'])) {
    $model->totalSumm = (float) $jsonData['totalSumm'];

}
if (isset($jsonData['prepaySum'])) {
    $model->prepaySum = (float) $jsonData['prepaySum'];

}
if (isset($jsonData['purchaseSumm'])) {
    $model->purchaseSumm = (float) $jsonData['purchaseSumm'];

}
if (isset($jsonData['personalDiscountPercent'])) {
    $model->personalDiscountPercent = (float) $jsonData['personalDiscountPercent'];

}
if (isset($jsonData['loyaltyLevel'])) {
    
$model->loyaltyLevel = new RetailCrm\Api\Model\Entity\Loyalty\LoyaltyLevel();
if (isset($jsonData['loyaltyLevel']['id'])) {
    $model->loyaltyLevel->id = $jsonData['loyaltyLevel']['id'];

}
if (isset($jsonData['loyaltyLevel']['name'])) {
    $model->loyaltyLevel->name = $jsonData['loyaltyLevel']['name'];

}


}
if (isset($jsonData['loyaltyEvent'])) {
    
$model->loyaltyEvent = new RetailCrm\Api\Model\Entity\Loyalty\AbstractLoyaltyEvent();
if (isset($jsonData['loyaltyEvent']['id'])) {
    $model->loyaltyEvent->id = $jsonData['loyaltyEvent']['id'];

}


}
if (isset($jsonData['mark'])) {
    $model->mark = $jsonData['mark'];

}
if (isset($jsonData['markDatetime'])) {
    $model->markDatetime = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['markDatetime']);

}
if (isset($jsonData['lastName'])) {
    $model->lastName = $jsonData['lastName'];

}
if (isset($jsonData['firstName'])) {
    $model->firstName = $jsonData['firstName'];

}
if (isset($jsonData['patronymic'])) {
    $model->patronymic = $jsonData['patronymic'];

}
if (isset($jsonData['phone'])) {
    $model->phone = $jsonData['phone'];

}
if (isset($jsonData['additionalPhone'])) {
    $model->additionalPhone = $jsonData['additionalPhone'];

}
if (isset($jsonData['email'])) {
    $model->email = $jsonData['email'];

}
if (isset($jsonData['call'])) {
    $model->call = $jsonData['call'];

}
if (isset($jsonData['expired'])) {
    $model->expired = $jsonData['expired'];

}
if (isset($jsonData['customerComment'])) {
    $model->customerComment = $jsonData['customerComment'];

}
if (isset($jsonData['managerComment'])) {
    $model->managerComment = $jsonData['managerComment'];

}
if (isset($jsonData['managerId'])) {
    $model->managerId = $jsonData['managerId'];

}
if (isset($jsonData['customer'])) {
    

if (
    !empty($jsonData['customer']['type']) &&
    \RetailCrm\Api\Enum\Customers\CustomerType::CORPORATE_CUSTOMER === $jsonData['customer']['type']
) {
    
$model->customer = new RetailCrm\Api\Model\Entity\CustomersCorporate\CustomerCorporate();
if (isset($jsonData['customer']['type'])) {
    $model->customer->type = $jsonData['customer']['type'];

}
if (isset($jsonData['customer']['id'])) {
    $model->customer->id = $jsonData['customer']['id'];

}
if (isset($jsonData['customer']['externalId'])) {
    $model->customer->externalId = $jsonData['customer']['externalId'];

}
if (isset($jsonData['customer']['nickName'])) {
    $model->customer->nickName = $jsonData['customer']['nickName'];

}
if (isset($jsonData['customer']['mainAddress'])) {
    
$model->customer->mainAddress = new RetailCrm\Api\Model\Entity\CustomersCorporate\EntityWithExternalIdNameOutput();
if (isset($jsonData['customer']['mainAddress']['id'])) {
    $model->customer->mainAddress->id = $jsonData['customer']['mainAddress']['id'];

}
if (isset($jsonData['customer']['mainAddress']['externalId'])) {
    $model->customer->mainAddress->externalId = $jsonData['customer']['mainAddress']['externalId'];

}
if (isset($jsonData['customer']['mainAddress']['name'])) {
    $model->customer->mainAddress->name = $jsonData['customer']['mainAddress']['name'];

}


}
if (isset($jsonData['customer']['createdAt'])) {
    $model->customer->createdAt = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['customer']['createdAt']);

}
if (isset($jsonData['customer']['managerId'])) {
    $model->customer->managerId = $jsonData['customer']['managerId'];

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
if (isset($jsonData['customer']['customerContacts'])) {
    $model->customer->customerContacts = [];
foreach (array_keys($jsonData['customer']['customerContacts']) as $index41) {
    
$model->customer->customerContacts[$index41] = new RetailCrm\Api\Model\Entity\CustomersCorporate\CustomerContact();
if (isset($jsonData['customer']['customerContacts'][$index41]['id'])) {
    $model->customer->customerContacts[$index41]->id = $jsonData['customer']['customerContacts'][$index41]['id'];

}
if (isset($jsonData['customer']['customerContacts'][$index41]['isMain'])) {
    $model->customer->customerContacts[$index41]->isMain = $jsonData['customer']['customerContacts'][$index41]['isMain'];

}
if (isset($jsonData['customer']['customerContacts'][$index41]['customer'])) {
    
$model->customer->customerContacts[$index41]->customer = new RetailCrm\Api\Model\Entity\CustomersCorporate\SerializedRelationAbstractCustomer();
if (isset($jsonData['customer']['customerContacts'][$index41]['customer']['id'])) {
    $model->customer->customerContacts[$index41]->customer->id = $jsonData['customer']['customerContacts'][$index41]['customer']['id'];

}
if (isset($jsonData['customer']['customerContacts'][$index41]['customer']['externalId'])) {
    $model->customer->customerContacts[$index41]->customer->externalId = $jsonData['customer']['customerContacts'][$index41]['customer']['externalId'];

}
if (isset($jsonData['customer']['customerContacts'][$index41]['customer']['browserId'])) {
    $model->customer->customerContacts[$index41]->customer->browserId = $jsonData['customer']['customerContacts'][$index41]['customer']['browserId'];

}
if (isset($jsonData['customer']['customerContacts'][$index41]['customer']['site'])) {
    $model->customer->customerContacts[$index41]->customer->site = $jsonData['customer']['customerContacts'][$index41]['customer']['site'];

}
if (isset($jsonData['customer']['customerContacts'][$index41]['customer']['companies'])) {
    $model->customer->customerContacts[$index41]->customer->companies = [];
foreach (array_keys($jsonData['customer']['customerContacts'][$index41]['customer']['companies']) as $index76) {
    
$model->customer->customerContacts[$index41]->customer->companies[$index76] = new RetailCrm\Api\Model\Entity\CustomersCorporate\CustomerContactCompany();
if (isset($jsonData['customer']['customerContacts'][$index41]['customer']['companies'][$index76]['id'])) {
    $model->customer->customerContacts[$index41]->customer->companies[$index76]->id = $jsonData['customer']['customerContacts'][$index41]['customer']['companies'][$index76]['id'];

}
if (isset($jsonData['customer']['customerContacts'][$index41]['customer']['companies'][$index76]['externalId'])) {
    $model->customer->customerContacts[$index41]->customer->companies[$index76]->externalId = $jsonData['customer']['customerContacts'][$index41]['customer']['companies'][$index76]['externalId'];

}
if (isset($jsonData['customer']['customerContacts'][$index41]['customer']['companies'][$index76]['company'])) {
    
$model->customer->customerContacts[$index41]->customer->companies[$index76]->company = new RetailCrm\Api\Model\Entity\CustomersCorporate\EntityWithExternalIdNameOutput();
if (isset($jsonData['customer']['customerContacts'][$index41]['customer']['companies'][$index76]['company']['id'])) {
    $model->customer->customerContacts[$index41]->customer->companies[$index76]->company->id = $jsonData['customer']['customerContacts'][$index41]['customer']['companies'][$index76]['company']['id'];

}
if (isset($jsonData['customer']['customerContacts'][$index41]['customer']['companies'][$index76]['company']['externalId'])) {
    $model->customer->customerContacts[$index41]->customer->companies[$index76]->company->externalId = $jsonData['customer']['customerContacts'][$index41]['customer']['companies'][$index76]['company']['externalId'];

}
if (isset($jsonData['customer']['customerContacts'][$index41]['customer']['companies'][$index76]['company']['name'])) {
    $model->customer->customerContacts[$index41]->customer->companies[$index76]->company->name = $jsonData['customer']['customerContacts'][$index41]['customer']['companies'][$index76]['company']['name'];

}


}


}

}


}
if (isset($jsonData['customer']['customerContacts'][$index41]['companies'])) {
    $model->customer->customerContacts[$index41]->companies = [];
foreach (array_keys($jsonData['customer']['customerContacts'][$index41]['companies']) as $index64) {
    
$model->customer->customerContacts[$index41]->companies[$index64] = new RetailCrm\Api\Model\Entity\CustomersCorporate\CustomerContactCompany();
if (isset($jsonData['customer']['customerContacts'][$index41]['companies'][$index64]['id'])) {
    $model->customer->customerContacts[$index41]->companies[$index64]->id = $jsonData['customer']['customerContacts'][$index41]['companies'][$index64]['id'];

}
if (isset($jsonData['customer']['customerContacts'][$index41]['companies'][$index64]['externalId'])) {
    $model->customer->customerContacts[$index41]->companies[$index64]->externalId = $jsonData['customer']['customerContacts'][$index41]['companies'][$index64]['externalId'];

}
if (isset($jsonData['customer']['customerContacts'][$index41]['companies'][$index64]['company'])) {
    
$model->customer->customerContacts[$index41]->companies[$index64]->company = new RetailCrm\Api\Model\Entity\CustomersCorporate\EntityWithExternalIdNameOutput();
if (isset($jsonData['customer']['customerContacts'][$index41]['companies'][$index64]['company']['id'])) {
    $model->customer->customerContacts[$index41]->companies[$index64]->company->id = $jsonData['customer']['customerContacts'][$index41]['companies'][$index64]['company']['id'];

}
if (isset($jsonData['customer']['customerContacts'][$index41]['companies'][$index64]['company']['externalId'])) {
    $model->customer->customerContacts[$index41]->companies[$index64]->company->externalId = $jsonData['customer']['customerContacts'][$index41]['companies'][$index64]['company']['externalId'];

}
if (isset($jsonData['customer']['customerContacts'][$index41]['companies'][$index64]['company']['name'])) {
    $model->customer->customerContacts[$index41]->companies[$index64]->company->name = $jsonData['customer']['customerContacts'][$index41]['companies'][$index64]['company']['name'];

}


}


}

}


}

}
if (isset($jsonData['customer']['companies'])) {
    $model->customer->companies = [];
foreach (array_keys($jsonData['customer']['companies']) as $index34) {
    
$model->customer->companies[$index34] = new RetailCrm\Api\Model\Entity\CustomersCorporate\Company();
if (isset($jsonData['customer']['companies'][$index34]['id'])) {
    $model->customer->companies[$index34]->id = $jsonData['customer']['companies'][$index34]['id'];

}
if (isset($jsonData['customer']['companies'][$index34]['isMain'])) {
    $model->customer->companies[$index34]->isMain = $jsonData['customer']['companies'][$index34]['isMain'];

}
if (isset($jsonData['customer']['companies'][$index34]['externalId'])) {
    $model->customer->companies[$index34]->externalId = $jsonData['customer']['companies'][$index34]['externalId'];

}
if (isset($jsonData['customer']['companies'][$index34]['active'])) {
    $model->customer->companies[$index34]->active = $jsonData['customer']['companies'][$index34]['active'];

}
if (isset($jsonData['customer']['companies'][$index34]['name'])) {
    $model->customer->companies[$index34]->name = $jsonData['customer']['companies'][$index34]['name'];

}
if (isset($jsonData['customer']['companies'][$index34]['brand'])) {
    $model->customer->companies[$index34]->brand = $jsonData['customer']['companies'][$index34]['brand'];

}
if (isset($jsonData['customer']['companies'][$index34]['site'])) {
    $model->customer->companies[$index34]->site = $jsonData['customer']['companies'][$index34]['site'];

}
if (isset($jsonData['customer']['companies'][$index34]['createdAt'])) {
    $model->customer->companies[$index34]->createdAt = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['customer']['companies'][$index34]['createdAt']);

}
if (isset($jsonData['customer']['companies'][$index34]['customer'])) {
    
$model->customer->companies[$index34]->customer = new RetailCrm\Api\Model\Entity\CustomersCorporate\SerializedEntityCustomer();
if (isset($jsonData['customer']['companies'][$index34]['customer']['site'])) {
    $model->customer->companies[$index34]->customer->site = $jsonData['customer']['companies'][$index34]['customer']['site'];

}
if (isset($jsonData['customer']['companies'][$index34]['customer']['id'])) {
    $model->customer->companies[$index34]->customer->id = $jsonData['customer']['companies'][$index34]['customer']['id'];

}
if (isset($jsonData['customer']['companies'][$index34]['customer']['externalId'])) {
    $model->customer->companies[$index34]->customer->externalId = $jsonData['customer']['companies'][$index34]['customer']['externalId'];

}
if (isset($jsonData['customer']['companies'][$index34]['customer']['type'])) {
    $model->customer->companies[$index34]->customer->type = $jsonData['customer']['companies'][$index34]['customer']['type'];

}


}
if (isset($jsonData['customer']['companies'][$index34]['contragent'])) {
    
$model->customer->companies[$index34]->contragent = new RetailCrm\Api\Model\Entity\Customers\CustomerContragent();
if (isset($jsonData['customer']['companies'][$index34]['contragent']['contragentType'])) {
    $model->customer->companies[$index34]->contragent->contragentType = $jsonData['customer']['companies'][$index34]['contragent']['contragentType'];

}
if (isset($jsonData['customer']['companies'][$index34]['contragent']['legalName'])) {
    $model->customer->companies[$index34]->contragent->legalName = $jsonData['customer']['companies'][$index34]['contragent']['legalName'];

}
if (isset($jsonData['customer']['companies'][$index34]['contragent']['legalAddress'])) {
    $model->customer->companies[$index34]->contragent->legalAddress = $jsonData['customer']['companies'][$index34]['contragent']['legalAddress'];

}
if (isset($jsonData['customer']['companies'][$index34]['contragent']['INN'])) {
    $model->customer->companies[$index34]->contragent->INN = $jsonData['customer']['companies'][$index34]['contragent']['INN'];

}
if (isset($jsonData['customer']['companies'][$index34]['contragent']['OKPO'])) {
    $model->customer->companies[$index34]->contragent->OKPO = $jsonData['customer']['companies'][$index34]['contragent']['OKPO'];

}
if (isset($jsonData['customer']['companies'][$index34]['contragent']['KPP'])) {
    $model->customer->companies[$index34]->contragent->KPP = $jsonData['customer']['companies'][$index34]['contragent']['KPP'];

}
if (isset($jsonData['customer']['companies'][$index34]['contragent']['OGRN'])) {
    $model->customer->companies[$index34]->contragent->OGRN = $jsonData['customer']['companies'][$index34]['contragent']['OGRN'];

}
if (isset($jsonData['customer']['companies'][$index34]['contragent']['OGRNIP'])) {
    $model->customer->companies[$index34]->contragent->OGRNIP = $jsonData['customer']['companies'][$index34]['contragent']['OGRNIP'];

}
if (isset($jsonData['customer']['companies'][$index34]['contragent']['certificateNumber'])) {
    $model->customer->companies[$index34]->contragent->certificateNumber = $jsonData['customer']['companies'][$index34]['contragent']['certificateNumber'];

}
if (isset($jsonData['customer']['companies'][$index34]['contragent']['certificateDate'])) {
    $model->customer->companies[$index34]->contragent->certificateDate = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['customer']['companies'][$index34]['contragent']['certificateDate']);

}
if (isset($jsonData['customer']['companies'][$index34]['contragent']['BIK'])) {
    $model->customer->companies[$index34]->contragent->BIK = $jsonData['customer']['companies'][$index34]['contragent']['BIK'];

}
if (isset($jsonData['customer']['companies'][$index34]['contragent']['bank'])) {
    $model->customer->companies[$index34]->contragent->bank = $jsonData['customer']['companies'][$index34]['contragent']['bank'];

}
if (isset($jsonData['customer']['companies'][$index34]['contragent']['bankAddress'])) {
    $model->customer->companies[$index34]->contragent->bankAddress = $jsonData['customer']['companies'][$index34]['contragent']['bankAddress'];

}
if (isset($jsonData['customer']['companies'][$index34]['contragent']['corrAccount'])) {
    $model->customer->companies[$index34]->contragent->corrAccount = $jsonData['customer']['companies'][$index34]['contragent']['corrAccount'];

}
if (isset($jsonData['customer']['companies'][$index34]['contragent']['bankAccount'])) {
    $model->customer->companies[$index34]->contragent->bankAccount = $jsonData['customer']['companies'][$index34]['contragent']['bankAccount'];

}


}
if (isset($jsonData['customer']['companies'][$index34]['address'])) {
    
$model->customer->companies[$index34]->address = new RetailCrm\Api\Model\Entity\Customers\CustomerAddress();
if (isset($jsonData['customer']['companies'][$index34]['address']['id'])) {
    $model->customer->companies[$index34]->address->id = $jsonData['customer']['companies'][$index34]['address']['id'];

}
if (isset($jsonData['customer']['companies'][$index34]['address']['name'])) {
    $model->customer->companies[$index34]->address->name = $jsonData['customer']['companies'][$index34]['address']['name'];

}
if (isset($jsonData['customer']['companies'][$index34]['address']['isMain'])) {
    $model->customer->companies[$index34]->address->isMain = $jsonData['customer']['companies'][$index34]['address']['isMain'];

}
if (isset($jsonData['customer']['companies'][$index34]['address']['index'])) {
    $model->customer->companies[$index34]->address->index = $jsonData['customer']['companies'][$index34]['address']['index'];

}
if (isset($jsonData['customer']['companies'][$index34]['address']['countryIso'])) {
    $model->customer->companies[$index34]->address->countryIso = $jsonData['customer']['companies'][$index34]['address']['countryIso'];

}
if (isset($jsonData['customer']['companies'][$index34]['address']['region'])) {
    $model->customer->companies[$index34]->address->region = $jsonData['customer']['companies'][$index34]['address']['region'];

}
if (isset($jsonData['customer']['companies'][$index34]['address']['regionId'])) {
    $model->customer->companies[$index34]->address->regionId = $jsonData['customer']['companies'][$index34]['address']['regionId'];

}
if (isset($jsonData['customer']['companies'][$index34]['address']['city'])) {
    $model->customer->companies[$index34]->address->city = $jsonData['customer']['companies'][$index34]['address']['city'];

}
if (isset($jsonData['customer']['companies'][$index34]['address']['cityId'])) {
    $model->customer->companies[$index34]->address->cityId = $jsonData['customer']['companies'][$index34]['address']['cityId'];

}
if (isset($jsonData['customer']['companies'][$index34]['address']['cityType'])) {
    $model->customer->companies[$index34]->address->cityType = $jsonData['customer']['companies'][$index34]['address']['cityType'];

}
if (isset($jsonData['customer']['companies'][$index34]['address']['street'])) {
    $model->customer->companies[$index34]->address->street = $jsonData['customer']['companies'][$index34]['address']['street'];

}
if (isset($jsonData['customer']['companies'][$index34]['address']['streetId'])) {
    $model->customer->companies[$index34]->address->streetId = $jsonData['customer']['companies'][$index34]['address']['streetId'];

}
if (isset($jsonData['customer']['companies'][$index34]['address']['streetType'])) {
    $model->customer->companies[$index34]->address->streetType = $jsonData['customer']['companies'][$index34]['address']['streetType'];

}
if (isset($jsonData['customer']['companies'][$index34]['address']['building'])) {
    $model->customer->companies[$index34]->address->building = $jsonData['customer']['companies'][$index34]['address']['building'];

}
if (isset($jsonData['customer']['companies'][$index34]['address']['flat'])) {
    $model->customer->companies[$index34]->address->flat = $jsonData['customer']['companies'][$index34]['address']['flat'];

}
if (isset($jsonData['customer']['companies'][$index34]['address']['floor'])) {
    $model->customer->companies[$index34]->address->floor = $jsonData['customer']['companies'][$index34]['address']['floor'];

}
if (isset($jsonData['customer']['companies'][$index34]['address']['block'])) {
    $model->customer->companies[$index34]->address->block = $jsonData['customer']['companies'][$index34]['address']['block'];

}
if (isset($jsonData['customer']['companies'][$index34]['address']['house'])) {
    $model->customer->companies[$index34]->address->house = $jsonData['customer']['companies'][$index34]['address']['house'];

}
if (isset($jsonData['customer']['companies'][$index34]['address']['housing'])) {
    $model->customer->companies[$index34]->address->housing = $jsonData['customer']['companies'][$index34]['address']['housing'];

}
if (isset($jsonData['customer']['companies'][$index34]['address']['metro'])) {
    $model->customer->companies[$index34]->address->metro = $jsonData['customer']['companies'][$index34]['address']['metro'];

}
if (isset($jsonData['customer']['companies'][$index34]['address']['notes'])) {
    $model->customer->companies[$index34]->address->notes = $jsonData['customer']['companies'][$index34]['address']['notes'];

}
if (isset($jsonData['customer']['companies'][$index34]['address']['text'])) {
    $model->customer->companies[$index34]->address->text = $jsonData['customer']['companies'][$index34]['address']['text'];

}
if (isset($jsonData['customer']['companies'][$index34]['address']['externalId'])) {
    $model->customer->companies[$index34]->address->externalId = $jsonData['customer']['companies'][$index34]['address']['externalId'];

}


}
if (isset($jsonData['customer']['companies'][$index34]['customFields'])) {
    $model->customer->companies[$index34]->customFields = [];
foreach (array_keys($jsonData['customer']['companies'][$index34]['customFields']) as $index60) {
    $model->customer->companies[$index34]->customFields[$index60] = $jsonData['customer']['companies'][$index34]['customFields'][$index60];

}

}
if (isset($jsonData['customer']['companies'][$index34]['marginSumm'])) {
    $model->customer->companies[$index34]->marginSumm = (float) $jsonData['customer']['companies'][$index34]['marginSumm'];

}
if (isset($jsonData['customer']['companies'][$index34]['totalSumm'])) {
    $model->customer->companies[$index34]->totalSumm = (float) $jsonData['customer']['companies'][$index34]['totalSumm'];

}
if (isset($jsonData['customer']['companies'][$index34]['averageSumm'])) {
    $model->customer->companies[$index34]->averageSumm = (float) $jsonData['customer']['companies'][$index34]['averageSumm'];

}
if (isset($jsonData['customer']['companies'][$index34]['ordersCount'])) {
    $model->customer->companies[$index34]->ordersCount = $jsonData['customer']['companies'][$index34]['ordersCount'];

}
if (isset($jsonData['customer']['companies'][$index34]['costSumm'])) {
    $model->customer->companies[$index34]->costSumm = (float) $jsonData['customer']['companies'][$index34]['costSumm'];

}


}

}
if (isset($jsonData['customer']['addresses'])) {
    $model->customer->addresses = [];
foreach (array_keys($jsonData['customer']['addresses']) as $index34) {
    
$model->customer->addresses[$index34] = new RetailCrm\Api\Model\Entity\Customers\CustomerAddress();
if (isset($jsonData['customer']['addresses'][$index34]['id'])) {
    $model->customer->addresses[$index34]->id = $jsonData['customer']['addresses'][$index34]['id'];

}
if (isset($jsonData['customer']['addresses'][$index34]['name'])) {
    $model->customer->addresses[$index34]->name = $jsonData['customer']['addresses'][$index34]['name'];

}
if (isset($jsonData['customer']['addresses'][$index34]['isMain'])) {
    $model->customer->addresses[$index34]->isMain = $jsonData['customer']['addresses'][$index34]['isMain'];

}
if (isset($jsonData['customer']['addresses'][$index34]['index'])) {
    $model->customer->addresses[$index34]->index = $jsonData['customer']['addresses'][$index34]['index'];

}
if (isset($jsonData['customer']['addresses'][$index34]['countryIso'])) {
    $model->customer->addresses[$index34]->countryIso = $jsonData['customer']['addresses'][$index34]['countryIso'];

}
if (isset($jsonData['customer']['addresses'][$index34]['region'])) {
    $model->customer->addresses[$index34]->region = $jsonData['customer']['addresses'][$index34]['region'];

}
if (isset($jsonData['customer']['addresses'][$index34]['regionId'])) {
    $model->customer->addresses[$index34]->regionId = $jsonData['customer']['addresses'][$index34]['regionId'];

}
if (isset($jsonData['customer']['addresses'][$index34]['city'])) {
    $model->customer->addresses[$index34]->city = $jsonData['customer']['addresses'][$index34]['city'];

}
if (isset($jsonData['customer']['addresses'][$index34]['cityId'])) {
    $model->customer->addresses[$index34]->cityId = $jsonData['customer']['addresses'][$index34]['cityId'];

}
if (isset($jsonData['customer']['addresses'][$index34]['cityType'])) {
    $model->customer->addresses[$index34]->cityType = $jsonData['customer']['addresses'][$index34]['cityType'];

}
if (isset($jsonData['customer']['addresses'][$index34]['street'])) {
    $model->customer->addresses[$index34]->street = $jsonData['customer']['addresses'][$index34]['street'];

}
if (isset($jsonData['customer']['addresses'][$index34]['streetId'])) {
    $model->customer->addresses[$index34]->streetId = $jsonData['customer']['addresses'][$index34]['streetId'];

}
if (isset($jsonData['customer']['addresses'][$index34]['streetType'])) {
    $model->customer->addresses[$index34]->streetType = $jsonData['customer']['addresses'][$index34]['streetType'];

}
if (isset($jsonData['customer']['addresses'][$index34]['building'])) {
    $model->customer->addresses[$index34]->building = $jsonData['customer']['addresses'][$index34]['building'];

}
if (isset($jsonData['customer']['addresses'][$index34]['flat'])) {
    $model->customer->addresses[$index34]->flat = $jsonData['customer']['addresses'][$index34]['flat'];

}
if (isset($jsonData['customer']['addresses'][$index34]['floor'])) {
    $model->customer->addresses[$index34]->floor = $jsonData['customer']['addresses'][$index34]['floor'];

}
if (isset($jsonData['customer']['addresses'][$index34]['block'])) {
    $model->customer->addresses[$index34]->block = $jsonData['customer']['addresses'][$index34]['block'];

}
if (isset($jsonData['customer']['addresses'][$index34]['house'])) {
    $model->customer->addresses[$index34]->house = $jsonData['customer']['addresses'][$index34]['house'];

}
if (isset($jsonData['customer']['addresses'][$index34]['housing'])) {
    $model->customer->addresses[$index34]->housing = $jsonData['customer']['addresses'][$index34]['housing'];

}
if (isset($jsonData['customer']['addresses'][$index34]['metro'])) {
    $model->customer->addresses[$index34]->metro = $jsonData['customer']['addresses'][$index34]['metro'];

}
if (isset($jsonData['customer']['addresses'][$index34]['notes'])) {
    $model->customer->addresses[$index34]->notes = $jsonData['customer']['addresses'][$index34]['notes'];

}
if (isset($jsonData['customer']['addresses'][$index34]['text'])) {
    $model->customer->addresses[$index34]->text = $jsonData['customer']['addresses'][$index34]['text'];

}
if (isset($jsonData['customer']['addresses'][$index34]['externalId'])) {
    $model->customer->addresses[$index34]->externalId = $jsonData['customer']['addresses'][$index34]['externalId'];

}


}

}
if (isset($jsonData['customer']['vip'])) {
    $model->customer->vip = $jsonData['customer']['vip'];

}
if (isset($jsonData['customer']['bad'])) {
    $model->customer->bad = $jsonData['customer']['bad'];

}
if (isset($jsonData['customer']['site'])) {
    $model->customer->site = $jsonData['customer']['site'];

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
if (isset($jsonData['customer']['mainCustomerContact'])) {
    
$model->customer->mainCustomerContact = new RetailCrm\Api\Model\Entity\CustomersCorporate\CustomerContact();
if (isset($jsonData['customer']['mainCustomerContact']['id'])) {
    $model->customer->mainCustomerContact->id = $jsonData['customer']['mainCustomerContact']['id'];

}
if (isset($jsonData['customer']['mainCustomerContact']['isMain'])) {
    $model->customer->mainCustomerContact->isMain = $jsonData['customer']['mainCustomerContact']['isMain'];

}
if (isset($jsonData['customer']['mainCustomerContact']['customer'])) {
    
$model->customer->mainCustomerContact->customer = new RetailCrm\Api\Model\Entity\CustomersCorporate\SerializedRelationAbstractCustomer();
if (isset($jsonData['customer']['mainCustomerContact']['customer']['id'])) {
    $model->customer->mainCustomerContact->customer->id = $jsonData['customer']['mainCustomerContact']['customer']['id'];

}
if (isset($jsonData['customer']['mainCustomerContact']['customer']['externalId'])) {
    $model->customer->mainCustomerContact->customer->externalId = $jsonData['customer']['mainCustomerContact']['customer']['externalId'];

}
if (isset($jsonData['customer']['mainCustomerContact']['customer']['browserId'])) {
    $model->customer->mainCustomerContact->customer->browserId = $jsonData['customer']['mainCustomerContact']['customer']['browserId'];

}
if (isset($jsonData['customer']['mainCustomerContact']['customer']['site'])) {
    $model->customer->mainCustomerContact->customer->site = $jsonData['customer']['mainCustomerContact']['customer']['site'];

}
if (isset($jsonData['customer']['mainCustomerContact']['customer']['companies'])) {
    $model->customer->mainCustomerContact->customer->companies = [];
foreach (array_keys($jsonData['customer']['mainCustomerContact']['customer']['companies']) as $index69) {
    
$model->customer->mainCustomerContact->customer->companies[$index69] = new RetailCrm\Api\Model\Entity\CustomersCorporate\CustomerContactCompany();
if (isset($jsonData['customer']['mainCustomerContact']['customer']['companies'][$index69]['id'])) {
    $model->customer->mainCustomerContact->customer->companies[$index69]->id = $jsonData['customer']['mainCustomerContact']['customer']['companies'][$index69]['id'];

}
if (isset($jsonData['customer']['mainCustomerContact']['customer']['companies'][$index69]['externalId'])) {
    $model->customer->mainCustomerContact->customer->companies[$index69]->externalId = $jsonData['customer']['mainCustomerContact']['customer']['companies'][$index69]['externalId'];

}
if (isset($jsonData['customer']['mainCustomerContact']['customer']['companies'][$index69]['company'])) {
    
$model->customer->mainCustomerContact->customer->companies[$index69]->company = new RetailCrm\Api\Model\Entity\CustomersCorporate\EntityWithExternalIdNameOutput();
if (isset($jsonData['customer']['mainCustomerContact']['customer']['companies'][$index69]['company']['id'])) {
    $model->customer->mainCustomerContact->customer->companies[$index69]->company->id = $jsonData['customer']['mainCustomerContact']['customer']['companies'][$index69]['company']['id'];

}
if (isset($jsonData['customer']['mainCustomerContact']['customer']['companies'][$index69]['company']['externalId'])) {
    $model->customer->mainCustomerContact->customer->companies[$index69]->company->externalId = $jsonData['customer']['mainCustomerContact']['customer']['companies'][$index69]['company']['externalId'];

}
if (isset($jsonData['customer']['mainCustomerContact']['customer']['companies'][$index69]['company']['name'])) {
    $model->customer->mainCustomerContact->customer->companies[$index69]->company->name = $jsonData['customer']['mainCustomerContact']['customer']['companies'][$index69]['company']['name'];

}


}


}

}


}
if (isset($jsonData['customer']['mainCustomerContact']['companies'])) {
    $model->customer->mainCustomerContact->companies = [];
foreach (array_keys($jsonData['customer']['mainCustomerContact']['companies']) as $index57) {
    
$model->customer->mainCustomerContact->companies[$index57] = new RetailCrm\Api\Model\Entity\CustomersCorporate\CustomerContactCompany();
if (isset($jsonData['customer']['mainCustomerContact']['companies'][$index57]['id'])) {
    $model->customer->mainCustomerContact->companies[$index57]->id = $jsonData['customer']['mainCustomerContact']['companies'][$index57]['id'];

}
if (isset($jsonData['customer']['mainCustomerContact']['companies'][$index57]['externalId'])) {
    $model->customer->mainCustomerContact->companies[$index57]->externalId = $jsonData['customer']['mainCustomerContact']['companies'][$index57]['externalId'];

}
if (isset($jsonData['customer']['mainCustomerContact']['companies'][$index57]['company'])) {
    
$model->customer->mainCustomerContact->companies[$index57]->company = new RetailCrm\Api\Model\Entity\CustomersCorporate\EntityWithExternalIdNameOutput();
if (isset($jsonData['customer']['mainCustomerContact']['companies'][$index57]['company']['id'])) {
    $model->customer->mainCustomerContact->companies[$index57]->company->id = $jsonData['customer']['mainCustomerContact']['companies'][$index57]['company']['id'];

}
if (isset($jsonData['customer']['mainCustomerContact']['companies'][$index57]['company']['externalId'])) {
    $model->customer->mainCustomerContact->companies[$index57]->company->externalId = $jsonData['customer']['mainCustomerContact']['companies'][$index57]['company']['externalId'];

}
if (isset($jsonData['customer']['mainCustomerContact']['companies'][$index57]['company']['name'])) {
    $model->customer->mainCustomerContact->companies[$index57]->company->name = $jsonData['customer']['mainCustomerContact']['companies'][$index57]['company']['name'];

}


}


}

}


}
if (isset($jsonData['customer']['mainCompany'])) {
    
$model->customer->mainCompany = new RetailCrm\Api\Model\Entity\CustomersCorporate\EntityWithExternalIdNameOutput();
if (isset($jsonData['customer']['mainCompany']['id'])) {
    $model->customer->mainCompany->id = $jsonData['customer']['mainCompany']['id'];

}
if (isset($jsonData['customer']['mainCompany']['externalId'])) {
    $model->customer->mainCompany->externalId = $jsonData['customer']['mainCompany']['externalId'];

}
if (isset($jsonData['customer']['mainCompany']['name'])) {
    $model->customer->mainCompany->name = $jsonData['customer']['mainCompany']['name'];

}


}


} else {
    
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

}
if (isset($jsonData['contact'])) {
    
$model->contact = new RetailCrm\Api\Model\Entity\Customers\Customer();
if (isset($jsonData['contact']['type'])) {
    $model->contact->type = $jsonData['contact']['type'];

}
if (isset($jsonData['contact']['id'])) {
    $model->contact->id = $jsonData['contact']['id'];

}
if (isset($jsonData['contact']['externalId'])) {
    $model->contact->externalId = $jsonData['contact']['externalId'];

}
if (isset($jsonData['contact']['isContact'])) {
    $model->contact->isContact = $jsonData['contact']['isContact'];

}
if (isset($jsonData['contact']['createdAt'])) {
    $model->contact->createdAt = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['contact']['createdAt']);

}
if (isset($jsonData['contact']['managerId'])) {
    $model->contact->managerId = $jsonData['contact']['managerId'];

}
if (isset($jsonData['contact']['vip'])) {
    $model->contact->vip = $jsonData['contact']['vip'];

}
if (isset($jsonData['contact']['bad'])) {
    $model->contact->bad = $jsonData['contact']['bad'];

}
if (isset($jsonData['contact']['browserId'])) {
    $model->contact->browserId = $jsonData['contact']['browserId'];

}
if (isset($jsonData['contact']['site'])) {
    $model->contact->site = $jsonData['contact']['site'];

}
if (isset($jsonData['contact']['contragent'])) {
    
$model->contact->contragent = new RetailCrm\Api\Model\Entity\Customers\CustomerContragent();
if (isset($jsonData['contact']['contragent']['contragentType'])) {
    $model->contact->contragent->contragentType = $jsonData['contact']['contragent']['contragentType'];

}
if (isset($jsonData['contact']['contragent']['legalName'])) {
    $model->contact->contragent->legalName = $jsonData['contact']['contragent']['legalName'];

}
if (isset($jsonData['contact']['contragent']['legalAddress'])) {
    $model->contact->contragent->legalAddress = $jsonData['contact']['contragent']['legalAddress'];

}
if (isset($jsonData['contact']['contragent']['INN'])) {
    $model->contact->contragent->INN = $jsonData['contact']['contragent']['INN'];

}
if (isset($jsonData['contact']['contragent']['OKPO'])) {
    $model->contact->contragent->OKPO = $jsonData['contact']['contragent']['OKPO'];

}
if (isset($jsonData['contact']['contragent']['KPP'])) {
    $model->contact->contragent->KPP = $jsonData['contact']['contragent']['KPP'];

}
if (isset($jsonData['contact']['contragent']['OGRN'])) {
    $model->contact->contragent->OGRN = $jsonData['contact']['contragent']['OGRN'];

}
if (isset($jsonData['contact']['contragent']['OGRNIP'])) {
    $model->contact->contragent->OGRNIP = $jsonData['contact']['contragent']['OGRNIP'];

}
if (isset($jsonData['contact']['contragent']['certificateNumber'])) {
    $model->contact->contragent->certificateNumber = $jsonData['contact']['contragent']['certificateNumber'];

}
if (isset($jsonData['contact']['contragent']['certificateDate'])) {
    $model->contact->contragent->certificateDate = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['contact']['contragent']['certificateDate']);

}
if (isset($jsonData['contact']['contragent']['BIK'])) {
    $model->contact->contragent->BIK = $jsonData['contact']['contragent']['BIK'];

}
if (isset($jsonData['contact']['contragent']['bank'])) {
    $model->contact->contragent->bank = $jsonData['contact']['contragent']['bank'];

}
if (isset($jsonData['contact']['contragent']['bankAddress'])) {
    $model->contact->contragent->bankAddress = $jsonData['contact']['contragent']['bankAddress'];

}
if (isset($jsonData['contact']['contragent']['corrAccount'])) {
    $model->contact->contragent->corrAccount = $jsonData['contact']['contragent']['corrAccount'];

}
if (isset($jsonData['contact']['contragent']['bankAccount'])) {
    $model->contact->contragent->bankAccount = $jsonData['contact']['contragent']['bankAccount'];

}


}
if (isset($jsonData['contact']['tags'])) {
    $model->contact->tags = [];
foreach (array_keys($jsonData['contact']['tags']) as $index28) {
    
$model->contact->tags[$index28] = new RetailCrm\Api\Model\Entity\Customers\CustomerTag();
if (isset($jsonData['contact']['tags'][$index28]['name'])) {
    $model->contact->tags[$index28]->name = $jsonData['contact']['tags'][$index28]['name'];

}
if (isset($jsonData['contact']['tags'][$index28]['color'])) {
    $model->contact->tags[$index28]->color = $jsonData['contact']['tags'][$index28]['color'];

}
if (isset($jsonData['contact']['tags'][$index28]['attached'])) {
    $model->contact->tags[$index28]->attached = $jsonData['contact']['tags'][$index28]['attached'];

}


}

}
if (isset($jsonData['contact']['avgMarginSumm'])) {
    $model->contact->avgMarginSumm = (float) $jsonData['contact']['avgMarginSumm'];

}
if (isset($jsonData['contact']['marginSumm'])) {
    $model->contact->marginSumm = (float) $jsonData['contact']['marginSumm'];

}
if (isset($jsonData['contact']['totalSumm'])) {
    $model->contact->totalSumm = (float) $jsonData['contact']['totalSumm'];

}
if (isset($jsonData['contact']['averageSumm'])) {
    $model->contact->averageSumm = (float) $jsonData['contact']['averageSumm'];

}
if (isset($jsonData['contact']['ordersCount'])) {
    $model->contact->ordersCount = $jsonData['contact']['ordersCount'];

}
if (isset($jsonData['contact']['costSumm'])) {
    $model->contact->costSumm = (float) $jsonData['contact']['costSumm'];

}
if (isset($jsonData['contact']['customFields'])) {
    $model->contact->customFields = [];
foreach (array_keys($jsonData['contact']['customFields']) as $index36) {
    $model->contact->customFields[$index36] = $jsonData['contact']['customFields'][$index36];

}

}
if (isset($jsonData['contact']['personalDiscount'])) {
    $model->contact->personalDiscount = (float) $jsonData['contact']['personalDiscount'];

}
if (isset($jsonData['contact']['cumulativeDiscount'])) {
    $model->contact->cumulativeDiscount = (float) $jsonData['contact']['cumulativeDiscount'];

}
if (isset($jsonData['contact']['discountCardNumber'])) {
    $model->contact->discountCardNumber = $jsonData['contact']['discountCardNumber'];

}
if (isset($jsonData['contact']['firstClientId'])) {
    $model->contact->firstClientId = $jsonData['contact']['firstClientId'];

}
if (isset($jsonData['contact']['lastClientId'])) {
    $model->contact->lastClientId = $jsonData['contact']['lastClientId'];

}
if (isset($jsonData['contact']['address'])) {
    
$model->contact->address = new RetailCrm\Api\Model\Entity\Customers\CustomerAddress();
if (isset($jsonData['contact']['address']['id'])) {
    $model->contact->address->id = $jsonData['contact']['address']['id'];

}
if (isset($jsonData['contact']['address']['name'])) {
    $model->contact->address->name = $jsonData['contact']['address']['name'];

}
if (isset($jsonData['contact']['address']['isMain'])) {
    $model->contact->address->isMain = $jsonData['contact']['address']['isMain'];

}
if (isset($jsonData['contact']['address']['index'])) {
    $model->contact->address->index = $jsonData['contact']['address']['index'];

}
if (isset($jsonData['contact']['address']['countryIso'])) {
    $model->contact->address->countryIso = $jsonData['contact']['address']['countryIso'];

}
if (isset($jsonData['contact']['address']['region'])) {
    $model->contact->address->region = $jsonData['contact']['address']['region'];

}
if (isset($jsonData['contact']['address']['regionId'])) {
    $model->contact->address->regionId = $jsonData['contact']['address']['regionId'];

}
if (isset($jsonData['contact']['address']['city'])) {
    $model->contact->address->city = $jsonData['contact']['address']['city'];

}
if (isset($jsonData['contact']['address']['cityId'])) {
    $model->contact->address->cityId = $jsonData['contact']['address']['cityId'];

}
if (isset($jsonData['contact']['address']['cityType'])) {
    $model->contact->address->cityType = $jsonData['contact']['address']['cityType'];

}
if (isset($jsonData['contact']['address']['street'])) {
    $model->contact->address->street = $jsonData['contact']['address']['street'];

}
if (isset($jsonData['contact']['address']['streetId'])) {
    $model->contact->address->streetId = $jsonData['contact']['address']['streetId'];

}
if (isset($jsonData['contact']['address']['streetType'])) {
    $model->contact->address->streetType = $jsonData['contact']['address']['streetType'];

}
if (isset($jsonData['contact']['address']['building'])) {
    $model->contact->address->building = $jsonData['contact']['address']['building'];

}
if (isset($jsonData['contact']['address']['flat'])) {
    $model->contact->address->flat = $jsonData['contact']['address']['flat'];

}
if (isset($jsonData['contact']['address']['floor'])) {
    $model->contact->address->floor = $jsonData['contact']['address']['floor'];

}
if (isset($jsonData['contact']['address']['block'])) {
    $model->contact->address->block = $jsonData['contact']['address']['block'];

}
if (isset($jsonData['contact']['address']['house'])) {
    $model->contact->address->house = $jsonData['contact']['address']['house'];

}
if (isset($jsonData['contact']['address']['housing'])) {
    $model->contact->address->housing = $jsonData['contact']['address']['housing'];

}
if (isset($jsonData['contact']['address']['metro'])) {
    $model->contact->address->metro = $jsonData['contact']['address']['metro'];

}
if (isset($jsonData['contact']['address']['notes'])) {
    $model->contact->address->notes = $jsonData['contact']['address']['notes'];

}
if (isset($jsonData['contact']['address']['text'])) {
    $model->contact->address->text = $jsonData['contact']['address']['text'];

}
if (isset($jsonData['contact']['address']['externalId'])) {
    $model->contact->address->externalId = $jsonData['contact']['address']['externalId'];

}


}
if (isset($jsonData['contact']['segments'])) {
    $model->contact->segments = [];
foreach (array_keys($jsonData['contact']['segments']) as $index32) {
    
$model->contact->segments[$index32] = new RetailCrm\Api\Model\Entity\Customers\Segment();
if (isset($jsonData['contact']['segments'][$index32]['id'])) {
    $model->contact->segments[$index32]->id = $jsonData['contact']['segments'][$index32]['id'];

}
if (isset($jsonData['contact']['segments'][$index32]['code'])) {
    $model->contact->segments[$index32]->code = $jsonData['contact']['segments'][$index32]['code'];

}
if (isset($jsonData['contact']['segments'][$index32]['name'])) {
    $model->contact->segments[$index32]->name = $jsonData['contact']['segments'][$index32]['name'];

}
if (isset($jsonData['contact']['segments'][$index32]['createdAt'])) {
    $model->contact->segments[$index32]->createdAt = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['contact']['segments'][$index32]['createdAt']);

}
if (isset($jsonData['contact']['segments'][$index32]['isDynamic'])) {
    $model->contact->segments[$index32]->isDynamic = $jsonData['contact']['segments'][$index32]['isDynamic'];

}
if (isset($jsonData['contact']['segments'][$index32]['customersCount'])) {
    $model->contact->segments[$index32]->customersCount = $jsonData['contact']['segments'][$index32]['customersCount'];

}
if (isset($jsonData['contact']['segments'][$index32]['active'])) {
    $model->contact->segments[$index32]->active = $jsonData['contact']['segments'][$index32]['active'];

}


}

}
if (isset($jsonData['contact']['maturationTime'])) {
    $model->contact->maturationTime = $jsonData['contact']['maturationTime'];

}
if (isset($jsonData['contact']['firstName'])) {
    $model->contact->firstName = $jsonData['contact']['firstName'];

}
if (isset($jsonData['contact']['lastName'])) {
    $model->contact->lastName = $jsonData['contact']['lastName'];

}
if (isset($jsonData['contact']['patronymic'])) {
    $model->contact->patronymic = $jsonData['contact']['patronymic'];

}
if (isset($jsonData['contact']['sex'])) {
    $model->contact->sex = $jsonData['contact']['sex'];

}
if (isset($jsonData['contact']['presumableSex'])) {
    $model->contact->presumableSex = $jsonData['contact']['presumableSex'];

}
if (isset($jsonData['contact']['email'])) {
    $model->contact->email = $jsonData['contact']['email'];

}
if (isset($jsonData['contact']['emailMarketingUnsubscribedAt'])) {
    $model->contact->emailMarketingUnsubscribedAt = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['contact']['emailMarketingUnsubscribedAt']);

}
if (isset($jsonData['contact']['phones'])) {
    $model->contact->phones = [];
foreach (array_keys($jsonData['contact']['phones']) as $index30) {
    
$model->contact->phones[$index30] = new RetailCrm\Api\Model\Entity\Customers\CustomerPhone();
if (isset($jsonData['contact']['phones'][$index30]['number'])) {
    $model->contact->phones[$index30]->number = $jsonData['contact']['phones'][$index30]['number'];

}


}

}
if (isset($jsonData['contact']['birthday'])) {
    $model->contact->birthday = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['contact']['birthday']);

}
if (isset($jsonData['contact']['source'])) {
    
$model->contact->source = new RetailCrm\Api\Model\Entity\Source();
if (isset($jsonData['contact']['source']['source'])) {
    $model->contact->source->source = $jsonData['contact']['source']['source'];

}
if (isset($jsonData['contact']['source']['medium'])) {
    $model->contact->source->medium = $jsonData['contact']['source']['medium'];

}
if (isset($jsonData['contact']['source']['campaign'])) {
    $model->contact->source->campaign = $jsonData['contact']['source']['campaign'];

}
if (isset($jsonData['contact']['source']['keyword'])) {
    $model->contact->source->keyword = $jsonData['contact']['source']['keyword'];

}
if (isset($jsonData['contact']['source']['content'])) {
    $model->contact->source->content = $jsonData['contact']['source']['content'];

}


}
if (isset($jsonData['contact']['photoUrl'])) {
    $model->contact->photoUrl = $jsonData['contact']['photoUrl'];

}
if (isset($jsonData['contact']['mgCustomerId'])) {
    $model->contact->mgCustomerId = $jsonData['contact']['mgCustomerId'];

}
if (isset($jsonData['contact']['subscribed'])) {
    $model->contact->subscribed = $jsonData['contact']['subscribed'];

}


}
if (isset($jsonData['company'])) {
    
$model->company = new RetailCrm\Api\Model\Entity\CustomersCorporate\Company();
if (isset($jsonData['company']['id'])) {
    $model->company->id = $jsonData['company']['id'];

}
if (isset($jsonData['company']['isMain'])) {
    $model->company->isMain = $jsonData['company']['isMain'];

}
if (isset($jsonData['company']['externalId'])) {
    $model->company->externalId = $jsonData['company']['externalId'];

}
if (isset($jsonData['company']['active'])) {
    $model->company->active = $jsonData['company']['active'];

}
if (isset($jsonData['company']['name'])) {
    $model->company->name = $jsonData['company']['name'];

}
if (isset($jsonData['company']['brand'])) {
    $model->company->brand = $jsonData['company']['brand'];

}
if (isset($jsonData['company']['site'])) {
    $model->company->site = $jsonData['company']['site'];

}
if (isset($jsonData['company']['createdAt'])) {
    $model->company->createdAt = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['company']['createdAt']);

}
if (isset($jsonData['company']['customer'])) {
    
$model->company->customer = new RetailCrm\Api\Model\Entity\CustomersCorporate\SerializedEntityCustomer();
if (isset($jsonData['company']['customer']['site'])) {
    $model->company->customer->site = $jsonData['company']['customer']['site'];

}
if (isset($jsonData['company']['customer']['id'])) {
    $model->company->customer->id = $jsonData['company']['customer']['id'];

}
if (isset($jsonData['company']['customer']['externalId'])) {
    $model->company->customer->externalId = $jsonData['company']['customer']['externalId'];

}
if (isset($jsonData['company']['customer']['type'])) {
    $model->company->customer->type = $jsonData['company']['customer']['type'];

}


}
if (isset($jsonData['company']['contragent'])) {
    
$model->company->contragent = new RetailCrm\Api\Model\Entity\Customers\CustomerContragent();
if (isset($jsonData['company']['contragent']['contragentType'])) {
    $model->company->contragent->contragentType = $jsonData['company']['contragent']['contragentType'];

}
if (isset($jsonData['company']['contragent']['legalName'])) {
    $model->company->contragent->legalName = $jsonData['company']['contragent']['legalName'];

}
if (isset($jsonData['company']['contragent']['legalAddress'])) {
    $model->company->contragent->legalAddress = $jsonData['company']['contragent']['legalAddress'];

}
if (isset($jsonData['company']['contragent']['INN'])) {
    $model->company->contragent->INN = $jsonData['company']['contragent']['INN'];

}
if (isset($jsonData['company']['contragent']['OKPO'])) {
    $model->company->contragent->OKPO = $jsonData['company']['contragent']['OKPO'];

}
if (isset($jsonData['company']['contragent']['KPP'])) {
    $model->company->contragent->KPP = $jsonData['company']['contragent']['KPP'];

}
if (isset($jsonData['company']['contragent']['OGRN'])) {
    $model->company->contragent->OGRN = $jsonData['company']['contragent']['OGRN'];

}
if (isset($jsonData['company']['contragent']['OGRNIP'])) {
    $model->company->contragent->OGRNIP = $jsonData['company']['contragent']['OGRNIP'];

}
if (isset($jsonData['company']['contragent']['certificateNumber'])) {
    $model->company->contragent->certificateNumber = $jsonData['company']['contragent']['certificateNumber'];

}
if (isset($jsonData['company']['contragent']['certificateDate'])) {
    $model->company->contragent->certificateDate = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['company']['contragent']['certificateDate']);

}
if (isset($jsonData['company']['contragent']['BIK'])) {
    $model->company->contragent->BIK = $jsonData['company']['contragent']['BIK'];

}
if (isset($jsonData['company']['contragent']['bank'])) {
    $model->company->contragent->bank = $jsonData['company']['contragent']['bank'];

}
if (isset($jsonData['company']['contragent']['bankAddress'])) {
    $model->company->contragent->bankAddress = $jsonData['company']['contragent']['bankAddress'];

}
if (isset($jsonData['company']['contragent']['corrAccount'])) {
    $model->company->contragent->corrAccount = $jsonData['company']['contragent']['corrAccount'];

}
if (isset($jsonData['company']['contragent']['bankAccount'])) {
    $model->company->contragent->bankAccount = $jsonData['company']['contragent']['bankAccount'];

}


}
if (isset($jsonData['company']['address'])) {
    
$model->company->address = new RetailCrm\Api\Model\Entity\Customers\CustomerAddress();
if (isset($jsonData['company']['address']['id'])) {
    $model->company->address->id = $jsonData['company']['address']['id'];

}
if (isset($jsonData['company']['address']['name'])) {
    $model->company->address->name = $jsonData['company']['address']['name'];

}
if (isset($jsonData['company']['address']['isMain'])) {
    $model->company->address->isMain = $jsonData['company']['address']['isMain'];

}
if (isset($jsonData['company']['address']['index'])) {
    $model->company->address->index = $jsonData['company']['address']['index'];

}
if (isset($jsonData['company']['address']['countryIso'])) {
    $model->company->address->countryIso = $jsonData['company']['address']['countryIso'];

}
if (isset($jsonData['company']['address']['region'])) {
    $model->company->address->region = $jsonData['company']['address']['region'];

}
if (isset($jsonData['company']['address']['regionId'])) {
    $model->company->address->regionId = $jsonData['company']['address']['regionId'];

}
if (isset($jsonData['company']['address']['city'])) {
    $model->company->address->city = $jsonData['company']['address']['city'];

}
if (isset($jsonData['company']['address']['cityId'])) {
    $model->company->address->cityId = $jsonData['company']['address']['cityId'];

}
if (isset($jsonData['company']['address']['cityType'])) {
    $model->company->address->cityType = $jsonData['company']['address']['cityType'];

}
if (isset($jsonData['company']['address']['street'])) {
    $model->company->address->street = $jsonData['company']['address']['street'];

}
if (isset($jsonData['company']['address']['streetId'])) {
    $model->company->address->streetId = $jsonData['company']['address']['streetId'];

}
if (isset($jsonData['company']['address']['streetType'])) {
    $model->company->address->streetType = $jsonData['company']['address']['streetType'];

}
if (isset($jsonData['company']['address']['building'])) {
    $model->company->address->building = $jsonData['company']['address']['building'];

}
if (isset($jsonData['company']['address']['flat'])) {
    $model->company->address->flat = $jsonData['company']['address']['flat'];

}
if (isset($jsonData['company']['address']['floor'])) {
    $model->company->address->floor = $jsonData['company']['address']['floor'];

}
if (isset($jsonData['company']['address']['block'])) {
    $model->company->address->block = $jsonData['company']['address']['block'];

}
if (isset($jsonData['company']['address']['house'])) {
    $model->company->address->house = $jsonData['company']['address']['house'];

}
if (isset($jsonData['company']['address']['housing'])) {
    $model->company->address->housing = $jsonData['company']['address']['housing'];

}
if (isset($jsonData['company']['address']['metro'])) {
    $model->company->address->metro = $jsonData['company']['address']['metro'];

}
if (isset($jsonData['company']['address']['notes'])) {
    $model->company->address->notes = $jsonData['company']['address']['notes'];

}
if (isset($jsonData['company']['address']['text'])) {
    $model->company->address->text = $jsonData['company']['address']['text'];

}
if (isset($jsonData['company']['address']['externalId'])) {
    $model->company->address->externalId = $jsonData['company']['address']['externalId'];

}


}
if (isset($jsonData['company']['customFields'])) {
    $model->company->customFields = [];
foreach (array_keys($jsonData['company']['customFields']) as $index36) {
    $model->company->customFields[$index36] = $jsonData['company']['customFields'][$index36];

}

}
if (isset($jsonData['company']['marginSumm'])) {
    $model->company->marginSumm = (float) $jsonData['company']['marginSumm'];

}
if (isset($jsonData['company']['totalSumm'])) {
    $model->company->totalSumm = (float) $jsonData['company']['totalSumm'];

}
if (isset($jsonData['company']['averageSumm'])) {
    $model->company->averageSumm = (float) $jsonData['company']['averageSumm'];

}
if (isset($jsonData['company']['ordersCount'])) {
    $model->company->ordersCount = $jsonData['company']['ordersCount'];

}
if (isset($jsonData['company']['costSumm'])) {
    $model->company->costSumm = (float) $jsonData['company']['costSumm'];

}


}
if (isset($jsonData['contragent'])) {
    
$model->contragent = new RetailCrm\Api\Model\Entity\Orders\OrderContragent();
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
if (isset($jsonData['delivery'])) {
    
$model->delivery = new RetailCrm\Api\Model\Entity\Orders\Delivery\SerializedOrderDelivery();
if (isset($jsonData['delivery']['code'])) {
    $model->delivery->code = $jsonData['delivery']['code'];

}
if (isset($jsonData['delivery']['integrationCode'])) {
    $model->delivery->integrationCode = $jsonData['delivery']['integrationCode'];

}
if (isset($jsonData['delivery']['data'])) {
    
$model->delivery->data = new RetailCrm\Api\Model\Entity\Orders\Delivery\DeliveryData();
if (isset($jsonData['delivery']['data']['externalId'])) {
    $model->delivery->data->externalId = $jsonData['delivery']['data']['externalId'];

}
if (isset($jsonData['delivery']['data']['trackNumber'])) {
    $model->delivery->data->trackNumber = $jsonData['delivery']['data']['trackNumber'];

}
if (isset($jsonData['delivery']['data']['status'])) {
    $model->delivery->data->status = $jsonData['delivery']['data']['status'];

}
if (isset($jsonData['delivery']['data']['locked'])) {
    $model->delivery->data->locked = $jsonData['delivery']['data']['locked'];

}
if (isset($jsonData['delivery']['data']['pickuppointAddress'])) {
    $model->delivery->data->pickuppointAddress = $jsonData['delivery']['data']['pickuppointAddress'];

}
if (isset($jsonData['delivery']['data']['days'])) {
    $model->delivery->data->days = $jsonData['delivery']['data']['days'];

}
if (isset($jsonData['delivery']['data']['statusText'])) {
    $model->delivery->data->statusText = $jsonData['delivery']['data']['statusText'];

}
if (isset($jsonData['delivery']['data']['statusDate'])) {
    $model->delivery->data->statusDate = \DateTime::createFromFormat('Y-m-d', $jsonData['delivery']['data']['statusDate']);

}
if (isset($jsonData['delivery']['data']['tariff'])) {
    $model->delivery->data->tariff = $jsonData['delivery']['data']['tariff'];

}
if (isset($jsonData['delivery']['data']['tariffName'])) {
    $model->delivery->data->tariffName = $jsonData['delivery']['data']['tariffName'];

}
if (isset($jsonData['delivery']['data']['pickuppointId'])) {
    $model->delivery->data->pickuppointId = $jsonData['delivery']['data']['pickuppointId'];

}
if (isset($jsonData['delivery']['data']['pickuppointSchedule'])) {
    $model->delivery->data->pickuppointSchedule = $jsonData['delivery']['data']['pickuppointSchedule'];

}
if (isset($jsonData['delivery']['data']['pickuppointPhone'])) {
    $model->delivery->data->pickuppointPhone = $jsonData['delivery']['data']['pickuppointPhone'];

}
if (isset($jsonData['delivery']['data']['payerType'])) {
    $model->delivery->data->payerType = $jsonData['delivery']['data']['payerType'];

}
if (isset($jsonData['delivery']['data']['statusComment'])) {
    $model->delivery->data->statusComment = $jsonData['delivery']['data']['statusComment'];

}
if (isset($jsonData['delivery']['data']['cost'])) {
    $model->delivery->data->cost = (float) $jsonData['delivery']['data']['cost'];

}
if (isset($jsonData['delivery']['data']['minTerm'])) {
    $model->delivery->data->minTerm = $jsonData['delivery']['data']['minTerm'];

}
if (isset($jsonData['delivery']['data']['maxTerm'])) {
    $model->delivery->data->maxTerm = $jsonData['delivery']['data']['maxTerm'];

}
if (isset($jsonData['delivery']['data']['shipmentpointId'])) {
    $model->delivery->data->shipmentpointId = $jsonData['delivery']['data']['shipmentpointId'];

}
if (isset($jsonData['delivery']['data']['shipmentpointName'])) {
    $model->delivery->data->shipmentpointName = $jsonData['delivery']['data']['shipmentpointName'];

}
if (isset($jsonData['delivery']['data']['shipmentpointAddress'])) {
    $model->delivery->data->shipmentpointAddress = $jsonData['delivery']['data']['shipmentpointAddress'];

}
if (isset($jsonData['delivery']['data']['shipmentpointSchedule'])) {
    $model->delivery->data->shipmentpointSchedule = $jsonData['delivery']['data']['shipmentpointSchedule'];

}
if (isset($jsonData['delivery']['data']['shipmentpointPhone'])) {
    $model->delivery->data->shipmentpointPhone = $jsonData['delivery']['data']['shipmentpointPhone'];

}
if (isset($jsonData['delivery']['data']['shipmentpointCoordinateLatitude'])) {
    $model->delivery->data->shipmentpointCoordinateLatitude = $jsonData['delivery']['data']['shipmentpointCoordinateLatitude'];

}
if (isset($jsonData['delivery']['data']['shipmentpointCoordinateLongitude'])) {
    $model->delivery->data->shipmentpointCoordinateLongitude = $jsonData['delivery']['data']['shipmentpointCoordinateLongitude'];

}
if (isset($jsonData['delivery']['data']['pickuppointName'])) {
    $model->delivery->data->pickuppointName = $jsonData['delivery']['data']['pickuppointName'];

}
if (isset($jsonData['delivery']['data']['pickuppointCoordinateLatitude'])) {
    $model->delivery->data->pickuppointCoordinateLatitude = $jsonData['delivery']['data']['pickuppointCoordinateLatitude'];

}
if (isset($jsonData['delivery']['data']['pickuppointCoordinateLongitude'])) {
    $model->delivery->data->pickuppointCoordinateLongitude = $jsonData['delivery']['data']['pickuppointCoordinateLongitude'];

}
if (isset($jsonData['delivery']['data']['extraData'])) {
    $model->delivery->data->extraData = [];
foreach (array_keys($jsonData['delivery']['data']['extraData']) as $index42) {
    $model->delivery->data->extraData[$index42] = $jsonData['delivery']['data']['extraData'][$index42];

}

}
if (isset($jsonData['delivery']['data']['packages'])) {
    $model->delivery->data->packages = [];
foreach (array_keys($jsonData['delivery']['data']['packages']) as $index41) {
    
$model->delivery->data->packages[$index41] = new RetailCrm\Api\Model\Entity\Orders\Delivery\Package();
if (isset($jsonData['delivery']['data']['packages'][$index41]['packageId'])) {
    $model->delivery->data->packages[$index41]->packageId = $jsonData['delivery']['data']['packages'][$index41]['packageId'];

}
if (isset($jsonData['delivery']['data']['packages'][$index41]['weight'])) {
    $model->delivery->data->packages[$index41]->weight = (float) $jsonData['delivery']['data']['packages'][$index41]['weight'];

}
if (isset($jsonData['delivery']['data']['packages'][$index41]['length'])) {
    $model->delivery->data->packages[$index41]->length = $jsonData['delivery']['data']['packages'][$index41]['length'];

}
if (isset($jsonData['delivery']['data']['packages'][$index41]['width'])) {
    $model->delivery->data->packages[$index41]->width = $jsonData['delivery']['data']['packages'][$index41]['width'];

}
if (isset($jsonData['delivery']['data']['packages'][$index41]['height'])) {
    $model->delivery->data->packages[$index41]->height = $jsonData['delivery']['data']['packages'][$index41]['height'];

}
if (isset($jsonData['delivery']['data']['packages'][$index41]['items'])) {
    $model->delivery->data->packages[$index41]->items = [];
foreach (array_keys($jsonData['delivery']['data']['packages'][$index41]['items']) as $index60) {
    
$model->delivery->data->packages[$index41]->items[$index60] = new RetailCrm\Api\Model\Entity\Orders\Delivery\PackageItem();
if (isset($jsonData['delivery']['data']['packages'][$index41]['items'][$index60]['orderProduct'])) {
    
$model->delivery->data->packages[$index41]->items[$index60]->orderProduct = new RetailCrm\Api\Model\Entity\Orders\Delivery\PackageItemOrderProduct();
if (isset($jsonData['delivery']['data']['packages'][$index41]['items'][$index60]['orderProduct']['id'])) {
    $model->delivery->data->packages[$index41]->items[$index60]->orderProduct->id = $jsonData['delivery']['data']['packages'][$index41]['items'][$index60]['orderProduct']['id'];

}
if (isset($jsonData['delivery']['data']['packages'][$index41]['items'][$index60]['orderProduct']['externalId'])) {
    $model->delivery->data->packages[$index41]->items[$index60]->orderProduct->externalId = $jsonData['delivery']['data']['packages'][$index41]['items'][$index60]['orderProduct']['externalId'];

}
if (isset($jsonData['delivery']['data']['packages'][$index41]['items'][$index60]['orderProduct']['externalIds'])) {
    $model->delivery->data->packages[$index41]->items[$index60]->orderProduct->externalIds = [];
foreach (array_keys($jsonData['delivery']['data']['packages'][$index41]['items'][$index60]['orderProduct']['externalIds']) as $index101) {
    
$model->delivery->data->packages[$index41]->items[$index60]->orderProduct->externalIds[$index101] = new RetailCrm\Api\Model\Entity\CodeValueModel();
if (isset($jsonData['delivery']['data']['packages'][$index41]['items'][$index60]['orderProduct']['externalIds'][$index101]['code'])) {
    $model->delivery->data->packages[$index41]->items[$index60]->orderProduct->externalIds[$index101]->code = $jsonData['delivery']['data']['packages'][$index41]['items'][$index60]['orderProduct']['externalIds'][$index101]['code'];

}
if (isset($jsonData['delivery']['data']['packages'][$index41]['items'][$index60]['orderProduct']['externalIds'][$index101]['value'])) {
    $model->delivery->data->packages[$index41]->items[$index60]->orderProduct->externalIds[$index101]->value = $jsonData['delivery']['data']['packages'][$index41]['items'][$index60]['orderProduct']['externalIds'][$index101]['value'];

}


}

}


}
if (isset($jsonData['delivery']['data']['packages'][$index41]['items'][$index60]['quantity'])) {
    $model->delivery->data->packages[$index41]->items[$index60]->quantity = (float) $jsonData['delivery']['data']['packages'][$index41]['items'][$index60]['quantity'];

}


}

}


}

}
if (isset($jsonData['delivery']['data']['returnExternalId'])) {
    $model->delivery->data->returnExternalId = $jsonData['delivery']['data']['returnExternalId'];

}
if (isset($jsonData['delivery']['data']['deliveryName'])) {
    $model->delivery->data->deliveryName = $jsonData['delivery']['data']['deliveryName'];

}
if (isset($jsonData['delivery']['data']['price'])) {
    $model->delivery->data->price = (float) $jsonData['delivery']['data']['price'];

}
if (isset($jsonData['delivery']['data']['insurancePrice'])) {
    $model->delivery->data->insurancePrice = (float) $jsonData['delivery']['data']['insurancePrice'];

}
if (isset($jsonData['delivery']['data']['tariffType'])) {
    $model->delivery->data->tariffType = $jsonData['delivery']['data']['tariffType'];

}
if (isset($jsonData['delivery']['data']['receiverCity'])) {
    $model->delivery->data->receiverCity = $jsonData['delivery']['data']['receiverCity'];

}
if (isset($jsonData['delivery']['data']['services'])) {
    $model->delivery->data->services = [];
foreach (array_keys($jsonData['delivery']['data']['services']) as $index41) {
    $model->delivery->data->services[$index41] = $jsonData['delivery']['data']['services'][$index41];

}

}
if (isset($jsonData['delivery']['data']['packageNumber'])) {
    $model->delivery->data->packageNumber = $jsonData['delivery']['data']['packageNumber'];

}
if (isset($jsonData['delivery']['data']['comment'])) {
    $model->delivery->data->comment = $jsonData['delivery']['data']['comment'];

}
if (isset($jsonData['delivery']['data']['deliveryCode'])) {
    $model->delivery->data->deliveryCode = $jsonData['delivery']['data']['deliveryCode'];

}
if (isset($jsonData['delivery']['data']['notes'])) {
    $model->delivery->data->notes = $jsonData['delivery']['data']['notes'];

}
if (isset($jsonData['delivery']['data']['id'])) {
    $model->delivery->data->id = $jsonData['delivery']['data']['id'];

}
if (isset($jsonData['delivery']['data']['firstName'])) {
    $model->delivery->data->firstName = $jsonData['delivery']['data']['firstName'];

}
if (isset($jsonData['delivery']['data']['lastName'])) {
    $model->delivery->data->lastName = $jsonData['delivery']['data']['lastName'];

}
if (isset($jsonData['delivery']['data']['patronymic'])) {
    $model->delivery->data->patronymic = $jsonData['delivery']['data']['patronymic'];

}
if (isset($jsonData['delivery']['data']['active'])) {
    $model->delivery->data->active = $jsonData['delivery']['data']['active'];

}
if (isset($jsonData['delivery']['data']['email'])) {
    $model->delivery->data->email = $jsonData['delivery']['data']['email'];

}
if (isset($jsonData['delivery']['data']['phone'])) {
    
$model->delivery->data->phone = new RetailCrm\Api\Model\Entity\Orders\Delivery\CourierPhone();
if (isset($jsonData['delivery']['data']['phone']['number'])) {
    $model->delivery->data->phone->number = $jsonData['delivery']['data']['phone']['number'];

}


}
if (isset($jsonData['delivery']['data']['description'])) {
    $model->delivery->data->description = $jsonData['delivery']['data']['description'];

}
if (isset($jsonData['delivery']['data']['courierId'])) {
    $model->delivery->data->courierId = $jsonData['delivery']['data']['courierId'];

}
if (isset($jsonData['delivery']['data']['serviceType'])) {
    $model->delivery->data->serviceType = $jsonData['delivery']['data']['serviceType'];

}
if (isset($jsonData['delivery']['data']['pickuppoint'])) {
    $model->delivery->data->pickuppoint = $jsonData['delivery']['data']['pickuppoint'];

}
if (isset($jsonData['delivery']['data']['receiverWarehouseTypeRef'])) {
    $model->delivery->data->receiverWarehouseTypeRef = $jsonData['delivery']['data']['receiverWarehouseTypeRef'];

}
if (isset($jsonData['delivery']['data']['statusName'])) {
    $model->delivery->data->statusName = $jsonData['delivery']['data']['statusName'];

}
if (isset($jsonData['delivery']['data']['receiverCityRef'])) {
    $model->delivery->data->receiverCityRef = $jsonData['delivery']['data']['receiverCityRef'];

}
if (isset($jsonData['delivery']['data']['receiverStreet'])) {
    $model->delivery->data->receiverStreet = $jsonData['delivery']['data']['receiverStreet'];

}
if (isset($jsonData['delivery']['data']['receiverStreetRef'])) {
    $model->delivery->data->receiverStreetRef = $jsonData['delivery']['data']['receiverStreetRef'];

}
if (isset($jsonData['delivery']['data']['seatsAmount'])) {
    $model->delivery->data->seatsAmount = $jsonData['delivery']['data']['seatsAmount'];

}
if (isset($jsonData['delivery']['data']['cargoType'])) {
    $model->delivery->data->cargoType = $jsonData['delivery']['data']['cargoType'];

}
if (isset($jsonData['delivery']['data']['cargoDescription'])) {
    $model->delivery->data->cargoDescription = $jsonData['delivery']['data']['cargoDescription'];

}
if (isset($jsonData['delivery']['data']['cashPayerType'])) {
    $model->delivery->data->cashPayerType = $jsonData['delivery']['data']['cashPayerType'];

}
if (isset($jsonData['delivery']['data']['paymentForm'])) {
    $model->delivery->data->paymentForm = $jsonData['delivery']['data']['paymentForm'];

}
if (isset($jsonData['delivery']['data']['ownershipForm'])) {
    $model->delivery->data->ownershipForm = $jsonData['delivery']['data']['ownershipForm'];

}
if (isset($jsonData['delivery']['data']['accompanyingDocument'])) {
    $model->delivery->data->accompanyingDocument = $jsonData['delivery']['data']['accompanyingDocument'];

}
if (isset($jsonData['delivery']['data']['preferredDeliveryDate'])) {
    $model->delivery->data->preferredDeliveryDate = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['delivery']['data']['preferredDeliveryDate']);

}
if (isset($jsonData['delivery']['data']['timeInterval'])) {
    $model->delivery->data->timeInterval = $jsonData['delivery']['data']['timeInterval'];

}
if (isset($jsonData['delivery']['data']['saturdayDelivery'])) {
    $model->delivery->data->saturdayDelivery = $jsonData['delivery']['data']['saturdayDelivery'];

}
if (isset($jsonData['delivery']['data']['deliveryDate'])) {
    $model->delivery->data->deliveryDate = $jsonData['delivery']['data']['deliveryDate'];

}
if (isset($jsonData['delivery']['data']['denieReason'])) {
    $model->delivery->data->denieReason = $jsonData['delivery']['data']['denieReason'];

}
if (isset($jsonData['delivery']['data']['backwardDelivery'])) {
    $model->delivery->data->backwardDelivery = $jsonData['delivery']['data']['backwardDelivery'];

}
if (isset($jsonData['delivery']['data']['backwardDeliveryCargoType'])) {
    $model->delivery->data->backwardDeliveryCargoType = $jsonData['delivery']['data']['backwardDeliveryCargoType'];

}
if (isset($jsonData['delivery']['data']['backwardDeliveryPayerType'])) {
    $model->delivery->data->backwardDeliveryPayerType = $jsonData['delivery']['data']['backwardDeliveryPayerType'];

}
if (isset($jsonData['delivery']['data']['backwardDeliveryRedeliveryString'])) {
    $model->delivery->data->backwardDeliveryRedeliveryString = $jsonData['delivery']['data']['backwardDeliveryRedeliveryString'];

}
if (isset($jsonData['delivery']['data']['afterpaymentOnGoodsCost'])) {
    $model->delivery->data->afterpaymentOnGoodsCost = (float) $jsonData['delivery']['data']['afterpaymentOnGoodsCost'];

}
if (isset($jsonData['delivery']['data']['declaredValue'])) {
    $model->delivery->data->declaredValue = (float) $jsonData['delivery']['data']['declaredValue'];

}
if (isset($jsonData['delivery']['data']['sendDate'])) {
    $model->delivery->data->sendDate = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['delivery']['data']['sendDate']);

}
if (isset($jsonData['delivery']['data']['deliveryType'])) {
    $model->delivery->data->deliveryType = $jsonData['delivery']['data']['deliveryType'];

}
if (isset($jsonData['delivery']['data']['pickupType'])) {
    $model->delivery->data->pickupType = $jsonData['delivery']['data']['pickupType'];

}
if (isset($jsonData['delivery']['data']['pickuppointDescription'])) {
    $model->delivery->data->pickuppointDescription = $jsonData['delivery']['data']['pickuppointDescription'];

}
if (isset($jsonData['delivery']['data']['placesCount'])) {
    $model->delivery->data->placesCount = $jsonData['delivery']['data']['placesCount'];

}
if (isset($jsonData['delivery']['data']['service'])) {
    $model->delivery->data->service = $jsonData['delivery']['data']['service'];

}


}
if (isset($jsonData['delivery']['service'])) {
    
$model->delivery->service = new RetailCrm\Api\Model\Entity\Orders\Delivery\SerializedDeliveryService();
if (isset($jsonData['delivery']['service']['name'])) {
    $model->delivery->service->name = $jsonData['delivery']['service']['name'];

}
if (isset($jsonData['delivery']['service']['code'])) {
    $model->delivery->service->code = $jsonData['delivery']['service']['code'];

}
if (isset($jsonData['delivery']['service']['active'])) {
    $model->delivery->service->active = $jsonData['delivery']['service']['active'];

}


}
if (isset($jsonData['delivery']['cost'])) {
    $model->delivery->cost = (float) $jsonData['delivery']['cost'];

}
if (isset($jsonData['delivery']['netCost'])) {
    $model->delivery->netCost = (float) $jsonData['delivery']['netCost'];

}
if (isset($jsonData['delivery']['date'])) {
    $model->delivery->date = \DateTime::createFromFormat('Y-m-d', $jsonData['delivery']['date']);

}
if (isset($jsonData['delivery']['time'])) {
    
$model->delivery->time = new RetailCrm\Api\Model\Entity\Delivery\TimeInterval();
if (isset($jsonData['delivery']['time']['from'])) {
    $model->delivery->time->from = \DateTime::createFromFormat('H:i', $jsonData['delivery']['time']['from']);

}
if (isset($jsonData['delivery']['time']['to'])) {
    $model->delivery->time->to = \DateTime::createFromFormat('H:i', $jsonData['delivery']['time']['to']);

}
if (isset($jsonData['delivery']['time']['custom'])) {
    $model->delivery->time->custom = $jsonData['delivery']['time']['custom'];

}


}
if (isset($jsonData['delivery']['address'])) {
    
$model->delivery->address = new RetailCrm\Api\Model\Entity\Orders\Delivery\OrderDeliveryAddress();
if (isset($jsonData['delivery']['address']['id'])) {
    $model->delivery->address->id = $jsonData['delivery']['address']['id'];

}
if (isset($jsonData['delivery']['address']['index'])) {
    $model->delivery->address->index = $jsonData['delivery']['address']['index'];

}
if (isset($jsonData['delivery']['address']['countryIso'])) {
    $model->delivery->address->countryIso = $jsonData['delivery']['address']['countryIso'];

}
if (isset($jsonData['delivery']['address']['region'])) {
    $model->delivery->address->region = $jsonData['delivery']['address']['region'];

}
if (isset($jsonData['delivery']['address']['regionId'])) {
    $model->delivery->address->regionId = $jsonData['delivery']['address']['regionId'];

}
if (isset($jsonData['delivery']['address']['city'])) {
    $model->delivery->address->city = $jsonData['delivery']['address']['city'];

}
if (isset($jsonData['delivery']['address']['cityId'])) {
    $model->delivery->address->cityId = $jsonData['delivery']['address']['cityId'];

}
if (isset($jsonData['delivery']['address']['cityType'])) {
    $model->delivery->address->cityType = $jsonData['delivery']['address']['cityType'];

}
if (isset($jsonData['delivery']['address']['street'])) {
    $model->delivery->address->street = $jsonData['delivery']['address']['street'];

}
if (isset($jsonData['delivery']['address']['streetId'])) {
    $model->delivery->address->streetId = $jsonData['delivery']['address']['streetId'];

}
if (isset($jsonData['delivery']['address']['streetType'])) {
    $model->delivery->address->streetType = $jsonData['delivery']['address']['streetType'];

}
if (isset($jsonData['delivery']['address']['building'])) {
    $model->delivery->address->building = $jsonData['delivery']['address']['building'];

}
if (isset($jsonData['delivery']['address']['flat'])) {
    $model->delivery->address->flat = $jsonData['delivery']['address']['flat'];

}
if (isset($jsonData['delivery']['address']['floor'])) {
    $model->delivery->address->floor = $jsonData['delivery']['address']['floor'];

}
if (isset($jsonData['delivery']['address']['block'])) {
    $model->delivery->address->block = $jsonData['delivery']['address']['block'];

}
if (isset($jsonData['delivery']['address']['house'])) {
    $model->delivery->address->house = $jsonData['delivery']['address']['house'];

}
if (isset($jsonData['delivery']['address']['housing'])) {
    $model->delivery->address->housing = $jsonData['delivery']['address']['housing'];

}
if (isset($jsonData['delivery']['address']['metro'])) {
    $model->delivery->address->metro = $jsonData['delivery']['address']['metro'];

}
if (isset($jsonData['delivery']['address']['text'])) {
    $model->delivery->address->text = $jsonData['delivery']['address']['text'];

}
if (isset($jsonData['delivery']['address']['notes'])) {
    $model->delivery->address->notes = $jsonData['delivery']['address']['notes'];

}


}
if (isset($jsonData['delivery']['vatRate'])) {
    $model->delivery->vatRate = $jsonData['delivery']['vatRate'];

}


}
if (isset($jsonData['marketplace'])) {
    
$model->marketplace = new RetailCrm\Api\Model\Entity\Orders\MarketplaceData();
if (isset($jsonData['marketplace']['code'])) {
    $model->marketplace->code = $jsonData['marketplace']['code'];

}
if (isset($jsonData['marketplace']['orderId'])) {
    $model->marketplace->orderId = $jsonData['marketplace']['orderId'];

}


}
if (isset($jsonData['site'])) {
    $model->site = $jsonData['site'];

}
if (isset($jsonData['status'])) {
    $model->status = $jsonData['status'];

}
if (isset($jsonData['statusComment'])) {
    $model->statusComment = $jsonData['statusComment'];

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
if (isset($jsonData['items'])) {
    $model->items = [];
foreach (array_keys($jsonData['items']) as $index18) {
    
$model->items[$index18] = new RetailCrm\Api\Model\Entity\Orders\Items\OrderProduct();
if (isset($jsonData['items'][$index18]['externalId'])) {
    $model->items[$index18]->externalId = $jsonData['items'][$index18]['externalId'];

}
if (isset($jsonData['items'][$index18]['markingCodes'])) {
    $model->items[$index18]->markingCodes = [];
foreach (array_keys($jsonData['items'][$index18]['markingCodes']) as $index44) {
    $model->items[$index18]->markingCodes[$index44] = $jsonData['items'][$index18]['markingCodes'][$index44];

}

}
if (isset($jsonData['items'][$index18]['id'])) {
    $model->items[$index18]->id = $jsonData['items'][$index18]['id'];

}
if (isset($jsonData['items'][$index18]['externalIds'])) {
    $model->items[$index18]->externalIds = [];
foreach (array_keys($jsonData['items'][$index18]['externalIds']) as $index43) {
    
$model->items[$index18]->externalIds[$index43] = new RetailCrm\Api\Model\Entity\CodeValueModel();
if (isset($jsonData['items'][$index18]['externalIds'][$index43]['code'])) {
    $model->items[$index18]->externalIds[$index43]->code = $jsonData['items'][$index18]['externalIds'][$index43]['code'];

}
if (isset($jsonData['items'][$index18]['externalIds'][$index43]['value'])) {
    $model->items[$index18]->externalIds[$index43]->value = $jsonData['items'][$index18]['externalIds'][$index43]['value'];

}


}

}
if (isset($jsonData['items'][$index18]['priceType'])) {
    
$model->items[$index18]->priceType = new RetailCrm\Api\Model\Entity\Orders\Items\PriceType();
if (isset($jsonData['items'][$index18]['priceType']['code'])) {
    $model->items[$index18]->priceType->code = $jsonData['items'][$index18]['priceType']['code'];

}


}
if (isset($jsonData['items'][$index18]['initialPrice'])) {
    $model->items[$index18]->initialPrice = (float) $jsonData['items'][$index18]['initialPrice'];

}
if (isset($jsonData['items'][$index18]['discountManualAmount'])) {
    $model->items[$index18]->discountManualAmount = (float) $jsonData['items'][$index18]['discountManualAmount'];

}
if (isset($jsonData['items'][$index18]['discountManualPercent'])) {
    $model->items[$index18]->discountManualPercent = (float) $jsonData['items'][$index18]['discountManualPercent'];

}
if (isset($jsonData['items'][$index18]['discountTotal'])) {
    $model->items[$index18]->discountTotal = (float) $jsonData['items'][$index18]['discountTotal'];

}
if (isset($jsonData['items'][$index18]['prices'])) {
    $model->items[$index18]->prices = [];
foreach (array_keys($jsonData['items'][$index18]['prices']) as $index38) {
    
$model->items[$index18]->prices[$index38] = new RetailCrm\Api\Model\Entity\Orders\Items\OrderProductPriceItem();
if (isset($jsonData['items'][$index18]['prices'][$index38]['price'])) {
    $model->items[$index18]->prices[$index38]->price = (float) $jsonData['items'][$index18]['prices'][$index38]['price'];

}
if (isset($jsonData['items'][$index18]['prices'][$index38]['quantity'])) {
    $model->items[$index18]->prices[$index38]->quantity = (float) $jsonData['items'][$index18]['prices'][$index38]['quantity'];

}


}

}
if (isset($jsonData['items'][$index18]['vatRate'])) {
    $model->items[$index18]->vatRate = $jsonData['items'][$index18]['vatRate'];

}
if (isset($jsonData['items'][$index18]['createdAt'])) {
    $model->items[$index18]->createdAt = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['items'][$index18]['createdAt']);

}
if (isset($jsonData['items'][$index18]['quantity'])) {
    $model->items[$index18]->quantity = (float) $jsonData['items'][$index18]['quantity'];

}
if (isset($jsonData['items'][$index18]['status'])) {
    $model->items[$index18]->status = $jsonData['items'][$index18]['status'];

}
if (isset($jsonData['items'][$index18]['comment'])) {
    $model->items[$index18]->comment = $jsonData['items'][$index18]['comment'];

}
if (isset($jsonData['items'][$index18]['offer'])) {
    
$model->items[$index18]->offer = new RetailCrm\Api\Model\Entity\Orders\Items\Offer();
if (isset($jsonData['items'][$index18]['offer']['displayName'])) {
    $model->items[$index18]->offer->displayName = $jsonData['items'][$index18]['offer']['displayName'];

}
if (isset($jsonData['items'][$index18]['offer']['id'])) {
    $model->items[$index18]->offer->id = $jsonData['items'][$index18]['offer']['id'];

}
if (isset($jsonData['items'][$index18]['offer']['externalId'])) {
    $model->items[$index18]->offer->externalId = $jsonData['items'][$index18]['offer']['externalId'];

}
if (isset($jsonData['items'][$index18]['offer']['xmlId'])) {
    $model->items[$index18]->offer->xmlId = $jsonData['items'][$index18]['offer']['xmlId'];

}
if (isset($jsonData['items'][$index18]['offer']['name'])) {
    $model->items[$index18]->offer->name = $jsonData['items'][$index18]['offer']['name'];

}
if (isset($jsonData['items'][$index18]['offer']['article'])) {
    $model->items[$index18]->offer->article = $jsonData['items'][$index18]['offer']['article'];

}
if (isset($jsonData['items'][$index18]['offer']['vatRate'])) {
    $model->items[$index18]->offer->vatRate = $jsonData['items'][$index18]['offer']['vatRate'];

}
if (isset($jsonData['items'][$index18]['offer']['unit'])) {
    
$model->items[$index18]->offer->unit = new RetailCrm\Api\Model\Entity\Orders\Items\Unit();
if (isset($jsonData['items'][$index18]['offer']['unit']['code'])) {
    $model->items[$index18]->offer->unit->code = $jsonData['items'][$index18]['offer']['unit']['code'];

}
if (isset($jsonData['items'][$index18]['offer']['unit']['name'])) {
    $model->items[$index18]->offer->unit->name = $jsonData['items'][$index18]['offer']['unit']['name'];

}
if (isset($jsonData['items'][$index18]['offer']['unit']['sym'])) {
    $model->items[$index18]->offer->unit->sym = $jsonData['items'][$index18]['offer']['unit']['sym'];

}


}
if (isset($jsonData['items'][$index18]['offer']['barcode'])) {
    $model->items[$index18]->offer->barcode = $jsonData['items'][$index18]['offer']['barcode'];

}
if (isset($jsonData['items'][$index18]['offer']['properties'])) {
    $model->items[$index18]->offer->properties = [];
foreach (array_keys($jsonData['items'][$index18]['offer']['properties']) as $index51) {
    $model->items[$index18]->offer->properties[$index51] = $jsonData['items'][$index18]['offer']['properties'][$index51];

}

}


}
if (isset($jsonData['items'][$index18]['order'])) {
    
$model->items[$index18]->order = new RetailCrm\Api\Model\Entity\IdModel();
if (isset($jsonData['items'][$index18]['order']['id'])) {
    $model->items[$index18]->order->id = $jsonData['items'][$index18]['order']['id'];

}


}
if (isset($jsonData['items'][$index18]['productName'])) {
    $model->items[$index18]->productName = $jsonData['items'][$index18]['productName'];

}
if (isset($jsonData['items'][$index18]['isCanceled'])) {
    $model->items[$index18]->isCanceled = $jsonData['items'][$index18]['isCanceled'];

}
if (isset($jsonData['items'][$index18]['properties'])) {
    $model->items[$index18]->properties = [];
foreach (array_keys($jsonData['items'][$index18]['properties']) as $index42) {
    
$model->items[$index18]->properties[$index42] = new RetailCrm\Api\Model\Entity\Orders\Items\ItemProperty();
if (isset($jsonData['items'][$index18]['properties'][$index42]['code'])) {
    $model->items[$index18]->properties[$index42]->code = $jsonData['items'][$index18]['properties'][$index42]['code'];

}
if (isset($jsonData['items'][$index18]['properties'][$index42]['name'])) {
    $model->items[$index18]->properties[$index42]->name = $jsonData['items'][$index18]['properties'][$index42]['name'];

}
if (isset($jsonData['items'][$index18]['properties'][$index42]['value'])) {
    $model->items[$index18]->properties[$index42]->value = $jsonData['items'][$index18]['properties'][$index42]['value'];

}


}

}
if (isset($jsonData['items'][$index18]['purchasePrice'])) {
    $model->items[$index18]->purchasePrice = (float) $jsonData['items'][$index18]['purchasePrice'];

}


}

}
if (isset($jsonData['fullPaidAt'])) {
    $model->fullPaidAt = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['fullPaidAt']);

}
if (isset($jsonData['payments'])) {
    $model->payments = [];
foreach (array_keys($jsonData['payments']) as $index21) {
    
$model->payments[$index21] = new RetailCrm\Api\Model\Entity\Orders\Payment();
if (isset($jsonData['payments'][$index21]['id'])) {
    $model->payments[$index21]->id = $jsonData['payments'][$index21]['id'];

}
if (isset($jsonData['payments'][$index21]['status'])) {
    $model->payments[$index21]->status = $jsonData['payments'][$index21]['status'];

}
if (isset($jsonData['payments'][$index21]['type'])) {
    $model->payments[$index21]->type = $jsonData['payments'][$index21]['type'];

}
if (isset($jsonData['payments'][$index21]['externalId'])) {
    $model->payments[$index21]->externalId = $jsonData['payments'][$index21]['externalId'];

}
if (isset($jsonData['payments'][$index21]['amount'])) {
    $model->payments[$index21]->amount = (float) $jsonData['payments'][$index21]['amount'];

}
if (isset($jsonData['payments'][$index21]['paidAt'])) {
    $model->payments[$index21]->paidAt = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['payments'][$index21]['paidAt']);

}
if (isset($jsonData['payments'][$index21]['comment'])) {
    $model->payments[$index21]->comment = $jsonData['payments'][$index21]['comment'];

}


}

}
if (isset($jsonData['fromApi'])) {
    $model->fromApi = $jsonData['fromApi'];

}
if (isset($jsonData['weight'])) {
    $model->weight = (float) $jsonData['weight'];

}
if (isset($jsonData['length'])) {
    $model->length = $jsonData['length'];

}
if (isset($jsonData['width'])) {
    $model->width = $jsonData['width'];

}
if (isset($jsonData['height'])) {
    $model->height = $jsonData['height'];

}
if (isset($jsonData['shipmentStore'])) {
    $model->shipmentStore = $jsonData['shipmentStore'];

}
if (isset($jsonData['shipmentDate'])) {
    $model->shipmentDate = \DateTime::createFromFormat('Y-m-d', $jsonData['shipmentDate']);

}
if (isset($jsonData['shipped'])) {
    $model->shipped = $jsonData['shipped'];

}
if (isset($jsonData['dialogId'])) {
    $model->dialogId = $jsonData['dialogId'];

}
if (isset($jsonData['customFields'])) {
    $model->customFields = [];
foreach (array_keys($jsonData['customFields']) as $index25) {
    $model->customFields[$index25] = $jsonData['customFields'][$index25];

}

}
if (isset($jsonData['clientId'])) {
    $model->clientId = $jsonData['clientId'];

}
if (isset($jsonData['loyaltyEventId'])) {
    $model->loyaltyEventId = $jsonData['loyaltyEventId'];

}



    return $model;
}
