<?php

function deserialize_RetailCrm_Api_Model_Response_Orders_OrdersUploadResponse(array $jsonData): RetailCrm\Api\Model\Response\Orders\OrdersUploadResponse
{
    
$model = new RetailCrm\Api\Model\Response\Orders\OrdersUploadResponse();
if (isset($jsonData['success'])) {
    $model->success = $jsonData['success'];

}
if (isset($jsonData['site'])) {
    $model->site = $jsonData['site'];

}
if (isset($jsonData['uploadedOrders'])) {
    $model->uploadedOrders = [];
foreach (array_keys($jsonData['uploadedOrders']) as $index27) {
    
$model->uploadedOrders[$index27] = new RetailCrm\Api\Model\Entity\FixExternalRow();
if (isset($jsonData['uploadedOrders'][$index27]['id'])) {
    $model->uploadedOrders[$index27]->id = $jsonData['uploadedOrders'][$index27]['id'];

}
if (isset($jsonData['uploadedOrders'][$index27]['externalId'])) {
    $model->uploadedOrders[$index27]->externalId = $jsonData['uploadedOrders'][$index27]['externalId'];

}


}

}
if (isset($jsonData['orders'])) {
    $model->orders = [];
foreach (array_keys($jsonData['orders']) as $index19) {
    
$model->orders[$index19] = new RetailCrm\Api\Model\Entity\Orders\Order();
if (isset($jsonData['orders'][$index19]['bonusesCreditTotal'])) {
    $model->orders[$index19]->bonusesCreditTotal = (float) $jsonData['orders'][$index19]['bonusesCreditTotal'];

}
if (isset($jsonData['orders'][$index19]['bonusesChargeTotal'])) {
    $model->orders[$index19]->bonusesChargeTotal = (float) $jsonData['orders'][$index19]['bonusesChargeTotal'];

}
if (isset($jsonData['orders'][$index19]['summ'])) {
    $model->orders[$index19]->summ = (float) $jsonData['orders'][$index19]['summ'];

}
if (isset($jsonData['orders'][$index19]['id'])) {
    $model->orders[$index19]->id = $jsonData['orders'][$index19]['id'];

}
if (isset($jsonData['orders'][$index19]['slug'])) {
    $model->orders[$index19]->slug = $jsonData['orders'][$index19]['slug'];

}
if (isset($jsonData['orders'][$index19]['number'])) {
    $model->orders[$index19]->number = $jsonData['orders'][$index19]['number'];

}
if (isset($jsonData['orders'][$index19]['externalId'])) {
    $model->orders[$index19]->externalId = $jsonData['orders'][$index19]['externalId'];

}
if (isset($jsonData['orders'][$index19]['orderType'])) {
    $model->orders[$index19]->orderType = $jsonData['orders'][$index19]['orderType'];

}
if (isset($jsonData['orders'][$index19]['orderMethod'])) {
    $model->orders[$index19]->orderMethod = $jsonData['orders'][$index19]['orderMethod'];

}
if (isset($jsonData['orders'][$index19]['privilegeType'])) {
    $model->orders[$index19]->privilegeType = $jsonData['orders'][$index19]['privilegeType'];

}
if (isset($jsonData['orders'][$index19]['countryIso'])) {
    $model->orders[$index19]->countryIso = $jsonData['orders'][$index19]['countryIso'];

}
if (isset($jsonData['orders'][$index19]['createdAt'])) {
    $model->orders[$index19]->createdAt = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['orders'][$index19]['createdAt']);

}
if (isset($jsonData['orders'][$index19]['statusUpdatedAt'])) {
    $model->orders[$index19]->statusUpdatedAt = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['orders'][$index19]['statusUpdatedAt']);

}
if (isset($jsonData['orders'][$index19]['discountManualAmount'])) {
    $model->orders[$index19]->discountManualAmount = (float) $jsonData['orders'][$index19]['discountManualAmount'];

}
if (isset($jsonData['orders'][$index19]['discountManualPercent'])) {
    $model->orders[$index19]->discountManualPercent = (float) $jsonData['orders'][$index19]['discountManualPercent'];

}
if (isset($jsonData['orders'][$index19]['totalSumm'])) {
    $model->orders[$index19]->totalSumm = (float) $jsonData['orders'][$index19]['totalSumm'];

}
if (isset($jsonData['orders'][$index19]['prepaySum'])) {
    $model->orders[$index19]->prepaySum = (float) $jsonData['orders'][$index19]['prepaySum'];

}
if (isset($jsonData['orders'][$index19]['purchaseSumm'])) {
    $model->orders[$index19]->purchaseSumm = (float) $jsonData['orders'][$index19]['purchaseSumm'];

}
if (isset($jsonData['orders'][$index19]['personalDiscountPercent'])) {
    $model->orders[$index19]->personalDiscountPercent = (float) $jsonData['orders'][$index19]['personalDiscountPercent'];

}
if (isset($jsonData['orders'][$index19]['loyaltyLevel'])) {
    
$model->orders[$index19]->loyaltyLevel = new RetailCrm\Api\Model\Entity\Loyalty\LoyaltyLevel();
if (isset($jsonData['orders'][$index19]['loyaltyLevel']['id'])) {
    $model->orders[$index19]->loyaltyLevel->id = $jsonData['orders'][$index19]['loyaltyLevel']['id'];

}
if (isset($jsonData['orders'][$index19]['loyaltyLevel']['name'])) {
    $model->orders[$index19]->loyaltyLevel->name = $jsonData['orders'][$index19]['loyaltyLevel']['name'];

}


}
if (isset($jsonData['orders'][$index19]['loyaltyEvent'])) {
    
$model->orders[$index19]->loyaltyEvent = new RetailCrm\Api\Model\Entity\Loyalty\AbstractLoyaltyEvent();
if (isset($jsonData['orders'][$index19]['loyaltyEvent']['id'])) {
    $model->orders[$index19]->loyaltyEvent->id = $jsonData['orders'][$index19]['loyaltyEvent']['id'];

}


}
if (isset($jsonData['orders'][$index19]['mark'])) {
    $model->orders[$index19]->mark = $jsonData['orders'][$index19]['mark'];

}
if (isset($jsonData['orders'][$index19]['markDatetime'])) {
    $model->orders[$index19]->markDatetime = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['orders'][$index19]['markDatetime']);

}
if (isset($jsonData['orders'][$index19]['lastName'])) {
    $model->orders[$index19]->lastName = $jsonData['orders'][$index19]['lastName'];

}
if (isset($jsonData['orders'][$index19]['firstName'])) {
    $model->orders[$index19]->firstName = $jsonData['orders'][$index19]['firstName'];

}
if (isset($jsonData['orders'][$index19]['patronymic'])) {
    $model->orders[$index19]->patronymic = $jsonData['orders'][$index19]['patronymic'];

}
if (isset($jsonData['orders'][$index19]['phone'])) {
    $model->orders[$index19]->phone = $jsonData['orders'][$index19]['phone'];

}
if (isset($jsonData['orders'][$index19]['additionalPhone'])) {
    $model->orders[$index19]->additionalPhone = $jsonData['orders'][$index19]['additionalPhone'];

}
if (isset($jsonData['orders'][$index19]['email'])) {
    $model->orders[$index19]->email = $jsonData['orders'][$index19]['email'];

}
if (isset($jsonData['orders'][$index19]['call'])) {
    $model->orders[$index19]->call = $jsonData['orders'][$index19]['call'];

}
if (isset($jsonData['orders'][$index19]['expired'])) {
    $model->orders[$index19]->expired = $jsonData['orders'][$index19]['expired'];

}
if (isset($jsonData['orders'][$index19]['customerComment'])) {
    $model->orders[$index19]->customerComment = $jsonData['orders'][$index19]['customerComment'];

}
if (isset($jsonData['orders'][$index19]['managerComment'])) {
    $model->orders[$index19]->managerComment = $jsonData['orders'][$index19]['managerComment'];

}
if (isset($jsonData['orders'][$index19]['managerId'])) {
    $model->orders[$index19]->managerId = $jsonData['orders'][$index19]['managerId'];

}
if (isset($jsonData['orders'][$index19]['customer'])) {
    

if (
    !empty($jsonData['orders'][$index19]['customer']['type']) &&
    \RetailCrm\Api\Enum\Customers\CustomerType::CORPORATE_CUSTOMER === $jsonData['orders'][$index19]['customer']['type']
) {
    
$model->orders[$index19]->customer = new RetailCrm\Api\Model\Entity\CustomersCorporate\CustomerCorporate();
if (isset($jsonData['orders'][$index19]['customer']['type'])) {
    $model->orders[$index19]->customer->type = $jsonData['orders'][$index19]['customer']['type'];

}
if (isset($jsonData['orders'][$index19]['customer']['id'])) {
    $model->orders[$index19]->customer->id = $jsonData['orders'][$index19]['customer']['id'];

}
if (isset($jsonData['orders'][$index19]['customer']['externalId'])) {
    $model->orders[$index19]->customer->externalId = $jsonData['orders'][$index19]['customer']['externalId'];

}
if (isset($jsonData['orders'][$index19]['customer']['nickName'])) {
    $model->orders[$index19]->customer->nickName = $jsonData['orders'][$index19]['customer']['nickName'];

}
if (isset($jsonData['orders'][$index19]['customer']['mainAddress'])) {
    
$model->orders[$index19]->customer->mainAddress = new RetailCrm\Api\Model\Entity\CustomersCorporate\EntityWithExternalIdNameOutput();
if (isset($jsonData['orders'][$index19]['customer']['mainAddress']['id'])) {
    $model->orders[$index19]->customer->mainAddress->id = $jsonData['orders'][$index19]['customer']['mainAddress']['id'];

}
if (isset($jsonData['orders'][$index19]['customer']['mainAddress']['externalId'])) {
    $model->orders[$index19]->customer->mainAddress->externalId = $jsonData['orders'][$index19]['customer']['mainAddress']['externalId'];

}
if (isset($jsonData['orders'][$index19]['customer']['mainAddress']['name'])) {
    $model->orders[$index19]->customer->mainAddress->name = $jsonData['orders'][$index19]['customer']['mainAddress']['name'];

}


}
if (isset($jsonData['orders'][$index19]['customer']['createdAt'])) {
    $model->orders[$index19]->customer->createdAt = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['orders'][$index19]['customer']['createdAt']);

}
if (isset($jsonData['orders'][$index19]['customer']['managerId'])) {
    $model->orders[$index19]->customer->managerId = $jsonData['orders'][$index19]['customer']['managerId'];

}
if (isset($jsonData['orders'][$index19]['customer']['source'])) {
    
$model->orders[$index19]->customer->source = new RetailCrm\Api\Model\Entity\Source();
if (isset($jsonData['orders'][$index19]['customer']['source']['source'])) {
    $model->orders[$index19]->customer->source->source = $jsonData['orders'][$index19]['customer']['source']['source'];

}
if (isset($jsonData['orders'][$index19]['customer']['source']['medium'])) {
    $model->orders[$index19]->customer->source->medium = $jsonData['orders'][$index19]['customer']['source']['medium'];

}
if (isset($jsonData['orders'][$index19]['customer']['source']['campaign'])) {
    $model->orders[$index19]->customer->source->campaign = $jsonData['orders'][$index19]['customer']['source']['campaign'];

}
if (isset($jsonData['orders'][$index19]['customer']['source']['keyword'])) {
    $model->orders[$index19]->customer->source->keyword = $jsonData['orders'][$index19]['customer']['source']['keyword'];

}
if (isset($jsonData['orders'][$index19]['customer']['source']['content'])) {
    $model->orders[$index19]->customer->source->content = $jsonData['orders'][$index19]['customer']['source']['content'];

}


}
if (isset($jsonData['orders'][$index19]['customer']['customerContacts'])) {
    $model->orders[$index19]->customer->customerContacts = [];
foreach (array_keys($jsonData['orders'][$index19]['customer']['customerContacts']) as $index61) {
    
$model->orders[$index19]->customer->customerContacts[$index61] = new RetailCrm\Api\Model\Entity\CustomersCorporate\CustomerContact();
if (isset($jsonData['orders'][$index19]['customer']['customerContacts'][$index61]['id'])) {
    $model->orders[$index19]->customer->customerContacts[$index61]->id = $jsonData['orders'][$index19]['customer']['customerContacts'][$index61]['id'];

}
if (isset($jsonData['orders'][$index19]['customer']['customerContacts'][$index61]['isMain'])) {
    $model->orders[$index19]->customer->customerContacts[$index61]->isMain = $jsonData['orders'][$index19]['customer']['customerContacts'][$index61]['isMain'];

}
if (isset($jsonData['orders'][$index19]['customer']['customerContacts'][$index61]['customer'])) {
    
$model->orders[$index19]->customer->customerContacts[$index61]->customer = new RetailCrm\Api\Model\Entity\CustomersCorporate\SerializedRelationAbstractCustomer();
if (isset($jsonData['orders'][$index19]['customer']['customerContacts'][$index61]['customer']['id'])) {
    $model->orders[$index19]->customer->customerContacts[$index61]->customer->id = $jsonData['orders'][$index19]['customer']['customerContacts'][$index61]['customer']['id'];

}
if (isset($jsonData['orders'][$index19]['customer']['customerContacts'][$index61]['customer']['externalId'])) {
    $model->orders[$index19]->customer->customerContacts[$index61]->customer->externalId = $jsonData['orders'][$index19]['customer']['customerContacts'][$index61]['customer']['externalId'];

}
if (isset($jsonData['orders'][$index19]['customer']['customerContacts'][$index61]['customer']['browserId'])) {
    $model->orders[$index19]->customer->customerContacts[$index61]->customer->browserId = $jsonData['orders'][$index19]['customer']['customerContacts'][$index61]['customer']['browserId'];

}
if (isset($jsonData['orders'][$index19]['customer']['customerContacts'][$index61]['customer']['site'])) {
    $model->orders[$index19]->customer->customerContacts[$index61]->customer->site = $jsonData['orders'][$index19]['customer']['customerContacts'][$index61]['customer']['site'];

}
if (isset($jsonData['orders'][$index19]['customer']['customerContacts'][$index61]['customer']['companies'])) {
    $model->orders[$index19]->customer->customerContacts[$index61]->customer->companies = [];
foreach (array_keys($jsonData['orders'][$index19]['customer']['customerContacts'][$index61]['customer']['companies']) as $index96) {
    
$model->orders[$index19]->customer->customerContacts[$index61]->customer->companies[$index96] = new RetailCrm\Api\Model\Entity\CustomersCorporate\CustomerContactCompany();
if (isset($jsonData['orders'][$index19]['customer']['customerContacts'][$index61]['customer']['companies'][$index96]['id'])) {
    $model->orders[$index19]->customer->customerContacts[$index61]->customer->companies[$index96]->id = $jsonData['orders'][$index19]['customer']['customerContacts'][$index61]['customer']['companies'][$index96]['id'];

}
if (isset($jsonData['orders'][$index19]['customer']['customerContacts'][$index61]['customer']['companies'][$index96]['externalId'])) {
    $model->orders[$index19]->customer->customerContacts[$index61]->customer->companies[$index96]->externalId = $jsonData['orders'][$index19]['customer']['customerContacts'][$index61]['customer']['companies'][$index96]['externalId'];

}
if (isset($jsonData['orders'][$index19]['customer']['customerContacts'][$index61]['customer']['companies'][$index96]['company'])) {
    
$model->orders[$index19]->customer->customerContacts[$index61]->customer->companies[$index96]->company = new RetailCrm\Api\Model\Entity\CustomersCorporate\EntityWithExternalIdNameOutput();
if (isset($jsonData['orders'][$index19]['customer']['customerContacts'][$index61]['customer']['companies'][$index96]['company']['id'])) {
    $model->orders[$index19]->customer->customerContacts[$index61]->customer->companies[$index96]->company->id = $jsonData['orders'][$index19]['customer']['customerContacts'][$index61]['customer']['companies'][$index96]['company']['id'];

}
if (isset($jsonData['orders'][$index19]['customer']['customerContacts'][$index61]['customer']['companies'][$index96]['company']['externalId'])) {
    $model->orders[$index19]->customer->customerContacts[$index61]->customer->companies[$index96]->company->externalId = $jsonData['orders'][$index19]['customer']['customerContacts'][$index61]['customer']['companies'][$index96]['company']['externalId'];

}
if (isset($jsonData['orders'][$index19]['customer']['customerContacts'][$index61]['customer']['companies'][$index96]['company']['name'])) {
    $model->orders[$index19]->customer->customerContacts[$index61]->customer->companies[$index96]->company->name = $jsonData['orders'][$index19]['customer']['customerContacts'][$index61]['customer']['companies'][$index96]['company']['name'];

}


}


}

}


}
if (isset($jsonData['orders'][$index19]['customer']['customerContacts'][$index61]['companies'])) {
    $model->orders[$index19]->customer->customerContacts[$index61]->companies = [];
foreach (array_keys($jsonData['orders'][$index19]['customer']['customerContacts'][$index61]['companies']) as $index84) {
    
$model->orders[$index19]->customer->customerContacts[$index61]->companies[$index84] = new RetailCrm\Api\Model\Entity\CustomersCorporate\CustomerContactCompany();
if (isset($jsonData['orders'][$index19]['customer']['customerContacts'][$index61]['companies'][$index84]['id'])) {
    $model->orders[$index19]->customer->customerContacts[$index61]->companies[$index84]->id = $jsonData['orders'][$index19]['customer']['customerContacts'][$index61]['companies'][$index84]['id'];

}
if (isset($jsonData['orders'][$index19]['customer']['customerContacts'][$index61]['companies'][$index84]['externalId'])) {
    $model->orders[$index19]->customer->customerContacts[$index61]->companies[$index84]->externalId = $jsonData['orders'][$index19]['customer']['customerContacts'][$index61]['companies'][$index84]['externalId'];

}
if (isset($jsonData['orders'][$index19]['customer']['customerContacts'][$index61]['companies'][$index84]['company'])) {
    
$model->orders[$index19]->customer->customerContacts[$index61]->companies[$index84]->company = new RetailCrm\Api\Model\Entity\CustomersCorporate\EntityWithExternalIdNameOutput();
if (isset($jsonData['orders'][$index19]['customer']['customerContacts'][$index61]['companies'][$index84]['company']['id'])) {
    $model->orders[$index19]->customer->customerContacts[$index61]->companies[$index84]->company->id = $jsonData['orders'][$index19]['customer']['customerContacts'][$index61]['companies'][$index84]['company']['id'];

}
if (isset($jsonData['orders'][$index19]['customer']['customerContacts'][$index61]['companies'][$index84]['company']['externalId'])) {
    $model->orders[$index19]->customer->customerContacts[$index61]->companies[$index84]->company->externalId = $jsonData['orders'][$index19]['customer']['customerContacts'][$index61]['companies'][$index84]['company']['externalId'];

}
if (isset($jsonData['orders'][$index19]['customer']['customerContacts'][$index61]['companies'][$index84]['company']['name'])) {
    $model->orders[$index19]->customer->customerContacts[$index61]->companies[$index84]->company->name = $jsonData['orders'][$index19]['customer']['customerContacts'][$index61]['companies'][$index84]['company']['name'];

}


}


}

}


}

}
if (isset($jsonData['orders'][$index19]['customer']['companies'])) {
    $model->orders[$index19]->customer->companies = [];
foreach (array_keys($jsonData['orders'][$index19]['customer']['companies']) as $index54) {
    
$model->orders[$index19]->customer->companies[$index54] = new RetailCrm\Api\Model\Entity\CustomersCorporate\Company();
if (isset($jsonData['orders'][$index19]['customer']['companies'][$index54]['id'])) {
    $model->orders[$index19]->customer->companies[$index54]->id = $jsonData['orders'][$index19]['customer']['companies'][$index54]['id'];

}
if (isset($jsonData['orders'][$index19]['customer']['companies'][$index54]['isMain'])) {
    $model->orders[$index19]->customer->companies[$index54]->isMain = $jsonData['orders'][$index19]['customer']['companies'][$index54]['isMain'];

}
if (isset($jsonData['orders'][$index19]['customer']['companies'][$index54]['externalId'])) {
    $model->orders[$index19]->customer->companies[$index54]->externalId = $jsonData['orders'][$index19]['customer']['companies'][$index54]['externalId'];

}
if (isset($jsonData['orders'][$index19]['customer']['companies'][$index54]['active'])) {
    $model->orders[$index19]->customer->companies[$index54]->active = $jsonData['orders'][$index19]['customer']['companies'][$index54]['active'];

}
if (isset($jsonData['orders'][$index19]['customer']['companies'][$index54]['name'])) {
    $model->orders[$index19]->customer->companies[$index54]->name = $jsonData['orders'][$index19]['customer']['companies'][$index54]['name'];

}
if (isset($jsonData['orders'][$index19]['customer']['companies'][$index54]['brand'])) {
    $model->orders[$index19]->customer->companies[$index54]->brand = $jsonData['orders'][$index19]['customer']['companies'][$index54]['brand'];

}
if (isset($jsonData['orders'][$index19]['customer']['companies'][$index54]['site'])) {
    $model->orders[$index19]->customer->companies[$index54]->site = $jsonData['orders'][$index19]['customer']['companies'][$index54]['site'];

}
if (isset($jsonData['orders'][$index19]['customer']['companies'][$index54]['createdAt'])) {
    $model->orders[$index19]->customer->companies[$index54]->createdAt = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['orders'][$index19]['customer']['companies'][$index54]['createdAt']);

}
if (isset($jsonData['orders'][$index19]['customer']['companies'][$index54]['customer'])) {
    
$model->orders[$index19]->customer->companies[$index54]->customer = new RetailCrm\Api\Model\Entity\CustomersCorporate\SerializedEntityCustomer();
if (isset($jsonData['orders'][$index19]['customer']['companies'][$index54]['customer']['site'])) {
    $model->orders[$index19]->customer->companies[$index54]->customer->site = $jsonData['orders'][$index19]['customer']['companies'][$index54]['customer']['site'];

}
if (isset($jsonData['orders'][$index19]['customer']['companies'][$index54]['customer']['id'])) {
    $model->orders[$index19]->customer->companies[$index54]->customer->id = $jsonData['orders'][$index19]['customer']['companies'][$index54]['customer']['id'];

}
if (isset($jsonData['orders'][$index19]['customer']['companies'][$index54]['customer']['externalId'])) {
    $model->orders[$index19]->customer->companies[$index54]->customer->externalId = $jsonData['orders'][$index19]['customer']['companies'][$index54]['customer']['externalId'];

}
if (isset($jsonData['orders'][$index19]['customer']['companies'][$index54]['customer']['type'])) {
    $model->orders[$index19]->customer->companies[$index54]->customer->type = $jsonData['orders'][$index19]['customer']['companies'][$index54]['customer']['type'];

}


}
if (isset($jsonData['orders'][$index19]['customer']['companies'][$index54]['contragent'])) {
    
$model->orders[$index19]->customer->companies[$index54]->contragent = new RetailCrm\Api\Model\Entity\Customers\CustomerContragent();
if (isset($jsonData['orders'][$index19]['customer']['companies'][$index54]['contragent']['contragentType'])) {
    $model->orders[$index19]->customer->companies[$index54]->contragent->contragentType = $jsonData['orders'][$index19]['customer']['companies'][$index54]['contragent']['contragentType'];

}
if (isset($jsonData['orders'][$index19]['customer']['companies'][$index54]['contragent']['legalName'])) {
    $model->orders[$index19]->customer->companies[$index54]->contragent->legalName = $jsonData['orders'][$index19]['customer']['companies'][$index54]['contragent']['legalName'];

}
if (isset($jsonData['orders'][$index19]['customer']['companies'][$index54]['contragent']['legalAddress'])) {
    $model->orders[$index19]->customer->companies[$index54]->contragent->legalAddress = $jsonData['orders'][$index19]['customer']['companies'][$index54]['contragent']['legalAddress'];

}
if (isset($jsonData['orders'][$index19]['customer']['companies'][$index54]['contragent']['INN'])) {
    $model->orders[$index19]->customer->companies[$index54]->contragent->INN = $jsonData['orders'][$index19]['customer']['companies'][$index54]['contragent']['INN'];

}
if (isset($jsonData['orders'][$index19]['customer']['companies'][$index54]['contragent']['OKPO'])) {
    $model->orders[$index19]->customer->companies[$index54]->contragent->OKPO = $jsonData['orders'][$index19]['customer']['companies'][$index54]['contragent']['OKPO'];

}
if (isset($jsonData['orders'][$index19]['customer']['companies'][$index54]['contragent']['KPP'])) {
    $model->orders[$index19]->customer->companies[$index54]->contragent->KPP = $jsonData['orders'][$index19]['customer']['companies'][$index54]['contragent']['KPP'];

}
if (isset($jsonData['orders'][$index19]['customer']['companies'][$index54]['contragent']['OGRN'])) {
    $model->orders[$index19]->customer->companies[$index54]->contragent->OGRN = $jsonData['orders'][$index19]['customer']['companies'][$index54]['contragent']['OGRN'];

}
if (isset($jsonData['orders'][$index19]['customer']['companies'][$index54]['contragent']['OGRNIP'])) {
    $model->orders[$index19]->customer->companies[$index54]->contragent->OGRNIP = $jsonData['orders'][$index19]['customer']['companies'][$index54]['contragent']['OGRNIP'];

}
if (isset($jsonData['orders'][$index19]['customer']['companies'][$index54]['contragent']['certificateNumber'])) {
    $model->orders[$index19]->customer->companies[$index54]->contragent->certificateNumber = $jsonData['orders'][$index19]['customer']['companies'][$index54]['contragent']['certificateNumber'];

}
if (isset($jsonData['orders'][$index19]['customer']['companies'][$index54]['contragent']['certificateDate'])) {
    $model->orders[$index19]->customer->companies[$index54]->contragent->certificateDate = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['orders'][$index19]['customer']['companies'][$index54]['contragent']['certificateDate']);

}
if (isset($jsonData['orders'][$index19]['customer']['companies'][$index54]['contragent']['BIK'])) {
    $model->orders[$index19]->customer->companies[$index54]->contragent->BIK = $jsonData['orders'][$index19]['customer']['companies'][$index54]['contragent']['BIK'];

}
if (isset($jsonData['orders'][$index19]['customer']['companies'][$index54]['contragent']['bank'])) {
    $model->orders[$index19]->customer->companies[$index54]->contragent->bank = $jsonData['orders'][$index19]['customer']['companies'][$index54]['contragent']['bank'];

}
if (isset($jsonData['orders'][$index19]['customer']['companies'][$index54]['contragent']['bankAddress'])) {
    $model->orders[$index19]->customer->companies[$index54]->contragent->bankAddress = $jsonData['orders'][$index19]['customer']['companies'][$index54]['contragent']['bankAddress'];

}
if (isset($jsonData['orders'][$index19]['customer']['companies'][$index54]['contragent']['corrAccount'])) {
    $model->orders[$index19]->customer->companies[$index54]->contragent->corrAccount = $jsonData['orders'][$index19]['customer']['companies'][$index54]['contragent']['corrAccount'];

}
if (isset($jsonData['orders'][$index19]['customer']['companies'][$index54]['contragent']['bankAccount'])) {
    $model->orders[$index19]->customer->companies[$index54]->contragent->bankAccount = $jsonData['orders'][$index19]['customer']['companies'][$index54]['contragent']['bankAccount'];

}


}
if (isset($jsonData['orders'][$index19]['customer']['companies'][$index54]['address'])) {
    
$model->orders[$index19]->customer->companies[$index54]->address = new RetailCrm\Api\Model\Entity\Customers\CustomerAddress();
if (isset($jsonData['orders'][$index19]['customer']['companies'][$index54]['address']['id'])) {
    $model->orders[$index19]->customer->companies[$index54]->address->id = $jsonData['orders'][$index19]['customer']['companies'][$index54]['address']['id'];

}
if (isset($jsonData['orders'][$index19]['customer']['companies'][$index54]['address']['name'])) {
    $model->orders[$index19]->customer->companies[$index54]->address->name = $jsonData['orders'][$index19]['customer']['companies'][$index54]['address']['name'];

}
if (isset($jsonData['orders'][$index19]['customer']['companies'][$index54]['address']['isMain'])) {
    $model->orders[$index19]->customer->companies[$index54]->address->isMain = $jsonData['orders'][$index19]['customer']['companies'][$index54]['address']['isMain'];

}
if (isset($jsonData['orders'][$index19]['customer']['companies'][$index54]['address']['index'])) {
    $model->orders[$index19]->customer->companies[$index54]->address->index = $jsonData['orders'][$index19]['customer']['companies'][$index54]['address']['index'];

}
if (isset($jsonData['orders'][$index19]['customer']['companies'][$index54]['address']['countryIso'])) {
    $model->orders[$index19]->customer->companies[$index54]->address->countryIso = $jsonData['orders'][$index19]['customer']['companies'][$index54]['address']['countryIso'];

}
if (isset($jsonData['orders'][$index19]['customer']['companies'][$index54]['address']['region'])) {
    $model->orders[$index19]->customer->companies[$index54]->address->region = $jsonData['orders'][$index19]['customer']['companies'][$index54]['address']['region'];

}
if (isset($jsonData['orders'][$index19]['customer']['companies'][$index54]['address']['regionId'])) {
    $model->orders[$index19]->customer->companies[$index54]->address->regionId = $jsonData['orders'][$index19]['customer']['companies'][$index54]['address']['regionId'];

}
if (isset($jsonData['orders'][$index19]['customer']['companies'][$index54]['address']['city'])) {
    $model->orders[$index19]->customer->companies[$index54]->address->city = $jsonData['orders'][$index19]['customer']['companies'][$index54]['address']['city'];

}
if (isset($jsonData['orders'][$index19]['customer']['companies'][$index54]['address']['cityId'])) {
    $model->orders[$index19]->customer->companies[$index54]->address->cityId = $jsonData['orders'][$index19]['customer']['companies'][$index54]['address']['cityId'];

}
if (isset($jsonData['orders'][$index19]['customer']['companies'][$index54]['address']['cityType'])) {
    $model->orders[$index19]->customer->companies[$index54]->address->cityType = $jsonData['orders'][$index19]['customer']['companies'][$index54]['address']['cityType'];

}
if (isset($jsonData['orders'][$index19]['customer']['companies'][$index54]['address']['street'])) {
    $model->orders[$index19]->customer->companies[$index54]->address->street = $jsonData['orders'][$index19]['customer']['companies'][$index54]['address']['street'];

}
if (isset($jsonData['orders'][$index19]['customer']['companies'][$index54]['address']['streetId'])) {
    $model->orders[$index19]->customer->companies[$index54]->address->streetId = $jsonData['orders'][$index19]['customer']['companies'][$index54]['address']['streetId'];

}
if (isset($jsonData['orders'][$index19]['customer']['companies'][$index54]['address']['streetType'])) {
    $model->orders[$index19]->customer->companies[$index54]->address->streetType = $jsonData['orders'][$index19]['customer']['companies'][$index54]['address']['streetType'];

}
if (isset($jsonData['orders'][$index19]['customer']['companies'][$index54]['address']['building'])) {
    $model->orders[$index19]->customer->companies[$index54]->address->building = $jsonData['orders'][$index19]['customer']['companies'][$index54]['address']['building'];

}
if (isset($jsonData['orders'][$index19]['customer']['companies'][$index54]['address']['flat'])) {
    $model->orders[$index19]->customer->companies[$index54]->address->flat = $jsonData['orders'][$index19]['customer']['companies'][$index54]['address']['flat'];

}
if (isset($jsonData['orders'][$index19]['customer']['companies'][$index54]['address']['floor'])) {
    $model->orders[$index19]->customer->companies[$index54]->address->floor = $jsonData['orders'][$index19]['customer']['companies'][$index54]['address']['floor'];

}
if (isset($jsonData['orders'][$index19]['customer']['companies'][$index54]['address']['block'])) {
    $model->orders[$index19]->customer->companies[$index54]->address->block = $jsonData['orders'][$index19]['customer']['companies'][$index54]['address']['block'];

}
if (isset($jsonData['orders'][$index19]['customer']['companies'][$index54]['address']['house'])) {
    $model->orders[$index19]->customer->companies[$index54]->address->house = $jsonData['orders'][$index19]['customer']['companies'][$index54]['address']['house'];

}
if (isset($jsonData['orders'][$index19]['customer']['companies'][$index54]['address']['housing'])) {
    $model->orders[$index19]->customer->companies[$index54]->address->housing = $jsonData['orders'][$index19]['customer']['companies'][$index54]['address']['housing'];

}
if (isset($jsonData['orders'][$index19]['customer']['companies'][$index54]['address']['metro'])) {
    $model->orders[$index19]->customer->companies[$index54]->address->metro = $jsonData['orders'][$index19]['customer']['companies'][$index54]['address']['metro'];

}
if (isset($jsonData['orders'][$index19]['customer']['companies'][$index54]['address']['notes'])) {
    $model->orders[$index19]->customer->companies[$index54]->address->notes = $jsonData['orders'][$index19]['customer']['companies'][$index54]['address']['notes'];

}
if (isset($jsonData['orders'][$index19]['customer']['companies'][$index54]['address']['text'])) {
    $model->orders[$index19]->customer->companies[$index54]->address->text = $jsonData['orders'][$index19]['customer']['companies'][$index54]['address']['text'];

}
if (isset($jsonData['orders'][$index19]['customer']['companies'][$index54]['address']['externalId'])) {
    $model->orders[$index19]->customer->companies[$index54]->address->externalId = $jsonData['orders'][$index19]['customer']['companies'][$index54]['address']['externalId'];

}


}
if (isset($jsonData['orders'][$index19]['customer']['companies'][$index54]['customFields'])) {
    $model->orders[$index19]->customer->companies[$index54]->customFields = [];
foreach (array_keys($jsonData['orders'][$index19]['customer']['companies'][$index54]['customFields']) as $index80) {
    $model->orders[$index19]->customer->companies[$index54]->customFields[$index80] = $jsonData['orders'][$index19]['customer']['companies'][$index54]['customFields'][$index80];

}

}
if (isset($jsonData['orders'][$index19]['customer']['companies'][$index54]['marginSumm'])) {
    $model->orders[$index19]->customer->companies[$index54]->marginSumm = (float) $jsonData['orders'][$index19]['customer']['companies'][$index54]['marginSumm'];

}
if (isset($jsonData['orders'][$index19]['customer']['companies'][$index54]['totalSumm'])) {
    $model->orders[$index19]->customer->companies[$index54]->totalSumm = (float) $jsonData['orders'][$index19]['customer']['companies'][$index54]['totalSumm'];

}
if (isset($jsonData['orders'][$index19]['customer']['companies'][$index54]['averageSumm'])) {
    $model->orders[$index19]->customer->companies[$index54]->averageSumm = (float) $jsonData['orders'][$index19]['customer']['companies'][$index54]['averageSumm'];

}
if (isset($jsonData['orders'][$index19]['customer']['companies'][$index54]['ordersCount'])) {
    $model->orders[$index19]->customer->companies[$index54]->ordersCount = $jsonData['orders'][$index19]['customer']['companies'][$index54]['ordersCount'];

}
if (isset($jsonData['orders'][$index19]['customer']['companies'][$index54]['costSumm'])) {
    $model->orders[$index19]->customer->companies[$index54]->costSumm = (float) $jsonData['orders'][$index19]['customer']['companies'][$index54]['costSumm'];

}


}

}
if (isset($jsonData['orders'][$index19]['customer']['addresses'])) {
    $model->orders[$index19]->customer->addresses = [];
foreach (array_keys($jsonData['orders'][$index19]['customer']['addresses']) as $index54) {
    
$model->orders[$index19]->customer->addresses[$index54] = new RetailCrm\Api\Model\Entity\Customers\CustomerAddress();
if (isset($jsonData['orders'][$index19]['customer']['addresses'][$index54]['id'])) {
    $model->orders[$index19]->customer->addresses[$index54]->id = $jsonData['orders'][$index19]['customer']['addresses'][$index54]['id'];

}
if (isset($jsonData['orders'][$index19]['customer']['addresses'][$index54]['name'])) {
    $model->orders[$index19]->customer->addresses[$index54]->name = $jsonData['orders'][$index19]['customer']['addresses'][$index54]['name'];

}
if (isset($jsonData['orders'][$index19]['customer']['addresses'][$index54]['isMain'])) {
    $model->orders[$index19]->customer->addresses[$index54]->isMain = $jsonData['orders'][$index19]['customer']['addresses'][$index54]['isMain'];

}
if (isset($jsonData['orders'][$index19]['customer']['addresses'][$index54]['index'])) {
    $model->orders[$index19]->customer->addresses[$index54]->index = $jsonData['orders'][$index19]['customer']['addresses'][$index54]['index'];

}
if (isset($jsonData['orders'][$index19]['customer']['addresses'][$index54]['countryIso'])) {
    $model->orders[$index19]->customer->addresses[$index54]->countryIso = $jsonData['orders'][$index19]['customer']['addresses'][$index54]['countryIso'];

}
if (isset($jsonData['orders'][$index19]['customer']['addresses'][$index54]['region'])) {
    $model->orders[$index19]->customer->addresses[$index54]->region = $jsonData['orders'][$index19]['customer']['addresses'][$index54]['region'];

}
if (isset($jsonData['orders'][$index19]['customer']['addresses'][$index54]['regionId'])) {
    $model->orders[$index19]->customer->addresses[$index54]->regionId = $jsonData['orders'][$index19]['customer']['addresses'][$index54]['regionId'];

}
if (isset($jsonData['orders'][$index19]['customer']['addresses'][$index54]['city'])) {
    $model->orders[$index19]->customer->addresses[$index54]->city = $jsonData['orders'][$index19]['customer']['addresses'][$index54]['city'];

}
if (isset($jsonData['orders'][$index19]['customer']['addresses'][$index54]['cityId'])) {
    $model->orders[$index19]->customer->addresses[$index54]->cityId = $jsonData['orders'][$index19]['customer']['addresses'][$index54]['cityId'];

}
if (isset($jsonData['orders'][$index19]['customer']['addresses'][$index54]['cityType'])) {
    $model->orders[$index19]->customer->addresses[$index54]->cityType = $jsonData['orders'][$index19]['customer']['addresses'][$index54]['cityType'];

}
if (isset($jsonData['orders'][$index19]['customer']['addresses'][$index54]['street'])) {
    $model->orders[$index19]->customer->addresses[$index54]->street = $jsonData['orders'][$index19]['customer']['addresses'][$index54]['street'];

}
if (isset($jsonData['orders'][$index19]['customer']['addresses'][$index54]['streetId'])) {
    $model->orders[$index19]->customer->addresses[$index54]->streetId = $jsonData['orders'][$index19]['customer']['addresses'][$index54]['streetId'];

}
if (isset($jsonData['orders'][$index19]['customer']['addresses'][$index54]['streetType'])) {
    $model->orders[$index19]->customer->addresses[$index54]->streetType = $jsonData['orders'][$index19]['customer']['addresses'][$index54]['streetType'];

}
if (isset($jsonData['orders'][$index19]['customer']['addresses'][$index54]['building'])) {
    $model->orders[$index19]->customer->addresses[$index54]->building = $jsonData['orders'][$index19]['customer']['addresses'][$index54]['building'];

}
if (isset($jsonData['orders'][$index19]['customer']['addresses'][$index54]['flat'])) {
    $model->orders[$index19]->customer->addresses[$index54]->flat = $jsonData['orders'][$index19]['customer']['addresses'][$index54]['flat'];

}
if (isset($jsonData['orders'][$index19]['customer']['addresses'][$index54]['floor'])) {
    $model->orders[$index19]->customer->addresses[$index54]->floor = $jsonData['orders'][$index19]['customer']['addresses'][$index54]['floor'];

}
if (isset($jsonData['orders'][$index19]['customer']['addresses'][$index54]['block'])) {
    $model->orders[$index19]->customer->addresses[$index54]->block = $jsonData['orders'][$index19]['customer']['addresses'][$index54]['block'];

}
if (isset($jsonData['orders'][$index19]['customer']['addresses'][$index54]['house'])) {
    $model->orders[$index19]->customer->addresses[$index54]->house = $jsonData['orders'][$index19]['customer']['addresses'][$index54]['house'];

}
if (isset($jsonData['orders'][$index19]['customer']['addresses'][$index54]['housing'])) {
    $model->orders[$index19]->customer->addresses[$index54]->housing = $jsonData['orders'][$index19]['customer']['addresses'][$index54]['housing'];

}
if (isset($jsonData['orders'][$index19]['customer']['addresses'][$index54]['metro'])) {
    $model->orders[$index19]->customer->addresses[$index54]->metro = $jsonData['orders'][$index19]['customer']['addresses'][$index54]['metro'];

}
if (isset($jsonData['orders'][$index19]['customer']['addresses'][$index54]['notes'])) {
    $model->orders[$index19]->customer->addresses[$index54]->notes = $jsonData['orders'][$index19]['customer']['addresses'][$index54]['notes'];

}
if (isset($jsonData['orders'][$index19]['customer']['addresses'][$index54]['text'])) {
    $model->orders[$index19]->customer->addresses[$index54]->text = $jsonData['orders'][$index19]['customer']['addresses'][$index54]['text'];

}
if (isset($jsonData['orders'][$index19]['customer']['addresses'][$index54]['externalId'])) {
    $model->orders[$index19]->customer->addresses[$index54]->externalId = $jsonData['orders'][$index19]['customer']['addresses'][$index54]['externalId'];

}


}

}
if (isset($jsonData['orders'][$index19]['customer']['vip'])) {
    $model->orders[$index19]->customer->vip = $jsonData['orders'][$index19]['customer']['vip'];

}
if (isset($jsonData['orders'][$index19]['customer']['bad'])) {
    $model->orders[$index19]->customer->bad = $jsonData['orders'][$index19]['customer']['bad'];

}
if (isset($jsonData['orders'][$index19]['customer']['site'])) {
    $model->orders[$index19]->customer->site = $jsonData['orders'][$index19]['customer']['site'];

}
if (isset($jsonData['orders'][$index19]['customer']['tags'])) {
    $model->orders[$index19]->customer->tags = [];
foreach (array_keys($jsonData['orders'][$index19]['customer']['tags']) as $index49) {
    
$model->orders[$index19]->customer->tags[$index49] = new RetailCrm\Api\Model\Entity\Customers\CustomerTag();
if (isset($jsonData['orders'][$index19]['customer']['tags'][$index49]['name'])) {
    $model->orders[$index19]->customer->tags[$index49]->name = $jsonData['orders'][$index19]['customer']['tags'][$index49]['name'];

}
if (isset($jsonData['orders'][$index19]['customer']['tags'][$index49]['color'])) {
    $model->orders[$index19]->customer->tags[$index49]->color = $jsonData['orders'][$index19]['customer']['tags'][$index49]['color'];

}
if (isset($jsonData['orders'][$index19]['customer']['tags'][$index49]['attached'])) {
    $model->orders[$index19]->customer->tags[$index49]->attached = $jsonData['orders'][$index19]['customer']['tags'][$index49]['attached'];

}


}

}
if (isset($jsonData['orders'][$index19]['customer']['avgMarginSumm'])) {
    $model->orders[$index19]->customer->avgMarginSumm = (float) $jsonData['orders'][$index19]['customer']['avgMarginSumm'];

}
if (isset($jsonData['orders'][$index19]['customer']['marginSumm'])) {
    $model->orders[$index19]->customer->marginSumm = (float) $jsonData['orders'][$index19]['customer']['marginSumm'];

}
if (isset($jsonData['orders'][$index19]['customer']['totalSumm'])) {
    $model->orders[$index19]->customer->totalSumm = (float) $jsonData['orders'][$index19]['customer']['totalSumm'];

}
if (isset($jsonData['orders'][$index19]['customer']['averageSumm'])) {
    $model->orders[$index19]->customer->averageSumm = (float) $jsonData['orders'][$index19]['customer']['averageSumm'];

}
if (isset($jsonData['orders'][$index19]['customer']['ordersCount'])) {
    $model->orders[$index19]->customer->ordersCount = $jsonData['orders'][$index19]['customer']['ordersCount'];

}
if (isset($jsonData['orders'][$index19]['customer']['costSumm'])) {
    $model->orders[$index19]->customer->costSumm = (float) $jsonData['orders'][$index19]['customer']['costSumm'];

}
if (isset($jsonData['orders'][$index19]['customer']['customFields'])) {
    $model->orders[$index19]->customer->customFields = [];
foreach (array_keys($jsonData['orders'][$index19]['customer']['customFields']) as $index57) {
    $model->orders[$index19]->customer->customFields[$index57] = $jsonData['orders'][$index19]['customer']['customFields'][$index57];

}

}
if (isset($jsonData['orders'][$index19]['customer']['personalDiscount'])) {
    $model->orders[$index19]->customer->personalDiscount = (float) $jsonData['orders'][$index19]['customer']['personalDiscount'];

}
if (isset($jsonData['orders'][$index19]['customer']['cumulativeDiscount'])) {
    $model->orders[$index19]->customer->cumulativeDiscount = (float) $jsonData['orders'][$index19]['customer']['cumulativeDiscount'];

}
if (isset($jsonData['orders'][$index19]['customer']['discountCardNumber'])) {
    $model->orders[$index19]->customer->discountCardNumber = $jsonData['orders'][$index19]['customer']['discountCardNumber'];

}
if (isset($jsonData['orders'][$index19]['customer']['firstClientId'])) {
    $model->orders[$index19]->customer->firstClientId = $jsonData['orders'][$index19]['customer']['firstClientId'];

}
if (isset($jsonData['orders'][$index19]['customer']['lastClientId'])) {
    $model->orders[$index19]->customer->lastClientId = $jsonData['orders'][$index19]['customer']['lastClientId'];

}
if (isset($jsonData['orders'][$index19]['customer']['mainCustomerContact'])) {
    
$model->orders[$index19]->customer->mainCustomerContact = new RetailCrm\Api\Model\Entity\CustomersCorporate\CustomerContact();
if (isset($jsonData['orders'][$index19]['customer']['mainCustomerContact']['id'])) {
    $model->orders[$index19]->customer->mainCustomerContact->id = $jsonData['orders'][$index19]['customer']['mainCustomerContact']['id'];

}
if (isset($jsonData['orders'][$index19]['customer']['mainCustomerContact']['isMain'])) {
    $model->orders[$index19]->customer->mainCustomerContact->isMain = $jsonData['orders'][$index19]['customer']['mainCustomerContact']['isMain'];

}
if (isset($jsonData['orders'][$index19]['customer']['mainCustomerContact']['customer'])) {
    
$model->orders[$index19]->customer->mainCustomerContact->customer = new RetailCrm\Api\Model\Entity\CustomersCorporate\SerializedRelationAbstractCustomer();
if (isset($jsonData['orders'][$index19]['customer']['mainCustomerContact']['customer']['id'])) {
    $model->orders[$index19]->customer->mainCustomerContact->customer->id = $jsonData['orders'][$index19]['customer']['mainCustomerContact']['customer']['id'];

}
if (isset($jsonData['orders'][$index19]['customer']['mainCustomerContact']['customer']['externalId'])) {
    $model->orders[$index19]->customer->mainCustomerContact->customer->externalId = $jsonData['orders'][$index19]['customer']['mainCustomerContact']['customer']['externalId'];

}
if (isset($jsonData['orders'][$index19]['customer']['mainCustomerContact']['customer']['browserId'])) {
    $model->orders[$index19]->customer->mainCustomerContact->customer->browserId = $jsonData['orders'][$index19]['customer']['mainCustomerContact']['customer']['browserId'];

}
if (isset($jsonData['orders'][$index19]['customer']['mainCustomerContact']['customer']['site'])) {
    $model->orders[$index19]->customer->mainCustomerContact->customer->site = $jsonData['orders'][$index19]['customer']['mainCustomerContact']['customer']['site'];

}
if (isset($jsonData['orders'][$index19]['customer']['mainCustomerContact']['customer']['companies'])) {
    $model->orders[$index19]->customer->mainCustomerContact->customer->companies = [];
foreach (array_keys($jsonData['orders'][$index19]['customer']['mainCustomerContact']['customer']['companies']) as $index89) {
    
$model->orders[$index19]->customer->mainCustomerContact->customer->companies[$index89] = new RetailCrm\Api\Model\Entity\CustomersCorporate\CustomerContactCompany();
if (isset($jsonData['orders'][$index19]['customer']['mainCustomerContact']['customer']['companies'][$index89]['id'])) {
    $model->orders[$index19]->customer->mainCustomerContact->customer->companies[$index89]->id = $jsonData['orders'][$index19]['customer']['mainCustomerContact']['customer']['companies'][$index89]['id'];

}
if (isset($jsonData['orders'][$index19]['customer']['mainCustomerContact']['customer']['companies'][$index89]['externalId'])) {
    $model->orders[$index19]->customer->mainCustomerContact->customer->companies[$index89]->externalId = $jsonData['orders'][$index19]['customer']['mainCustomerContact']['customer']['companies'][$index89]['externalId'];

}
if (isset($jsonData['orders'][$index19]['customer']['mainCustomerContact']['customer']['companies'][$index89]['company'])) {
    
$model->orders[$index19]->customer->mainCustomerContact->customer->companies[$index89]->company = new RetailCrm\Api\Model\Entity\CustomersCorporate\EntityWithExternalIdNameOutput();
if (isset($jsonData['orders'][$index19]['customer']['mainCustomerContact']['customer']['companies'][$index89]['company']['id'])) {
    $model->orders[$index19]->customer->mainCustomerContact->customer->companies[$index89]->company->id = $jsonData['orders'][$index19]['customer']['mainCustomerContact']['customer']['companies'][$index89]['company']['id'];

}
if (isset($jsonData['orders'][$index19]['customer']['mainCustomerContact']['customer']['companies'][$index89]['company']['externalId'])) {
    $model->orders[$index19]->customer->mainCustomerContact->customer->companies[$index89]->company->externalId = $jsonData['orders'][$index19]['customer']['mainCustomerContact']['customer']['companies'][$index89]['company']['externalId'];

}
if (isset($jsonData['orders'][$index19]['customer']['mainCustomerContact']['customer']['companies'][$index89]['company']['name'])) {
    $model->orders[$index19]->customer->mainCustomerContact->customer->companies[$index89]->company->name = $jsonData['orders'][$index19]['customer']['mainCustomerContact']['customer']['companies'][$index89]['company']['name'];

}


}


}

}


}
if (isset($jsonData['orders'][$index19]['customer']['mainCustomerContact']['companies'])) {
    $model->orders[$index19]->customer->mainCustomerContact->companies = [];
foreach (array_keys($jsonData['orders'][$index19]['customer']['mainCustomerContact']['companies']) as $index77) {
    
$model->orders[$index19]->customer->mainCustomerContact->companies[$index77] = new RetailCrm\Api\Model\Entity\CustomersCorporate\CustomerContactCompany();
if (isset($jsonData['orders'][$index19]['customer']['mainCustomerContact']['companies'][$index77]['id'])) {
    $model->orders[$index19]->customer->mainCustomerContact->companies[$index77]->id = $jsonData['orders'][$index19]['customer']['mainCustomerContact']['companies'][$index77]['id'];

}
if (isset($jsonData['orders'][$index19]['customer']['mainCustomerContact']['companies'][$index77]['externalId'])) {
    $model->orders[$index19]->customer->mainCustomerContact->companies[$index77]->externalId = $jsonData['orders'][$index19]['customer']['mainCustomerContact']['companies'][$index77]['externalId'];

}
if (isset($jsonData['orders'][$index19]['customer']['mainCustomerContact']['companies'][$index77]['company'])) {
    
$model->orders[$index19]->customer->mainCustomerContact->companies[$index77]->company = new RetailCrm\Api\Model\Entity\CustomersCorporate\EntityWithExternalIdNameOutput();
if (isset($jsonData['orders'][$index19]['customer']['mainCustomerContact']['companies'][$index77]['company']['id'])) {
    $model->orders[$index19]->customer->mainCustomerContact->companies[$index77]->company->id = $jsonData['orders'][$index19]['customer']['mainCustomerContact']['companies'][$index77]['company']['id'];

}
if (isset($jsonData['orders'][$index19]['customer']['mainCustomerContact']['companies'][$index77]['company']['externalId'])) {
    $model->orders[$index19]->customer->mainCustomerContact->companies[$index77]->company->externalId = $jsonData['orders'][$index19]['customer']['mainCustomerContact']['companies'][$index77]['company']['externalId'];

}
if (isset($jsonData['orders'][$index19]['customer']['mainCustomerContact']['companies'][$index77]['company']['name'])) {
    $model->orders[$index19]->customer->mainCustomerContact->companies[$index77]->company->name = $jsonData['orders'][$index19]['customer']['mainCustomerContact']['companies'][$index77]['company']['name'];

}


}


}

}


}
if (isset($jsonData['orders'][$index19]['customer']['mainCompany'])) {
    
$model->orders[$index19]->customer->mainCompany = new RetailCrm\Api\Model\Entity\CustomersCorporate\EntityWithExternalIdNameOutput();
if (isset($jsonData['orders'][$index19]['customer']['mainCompany']['id'])) {
    $model->orders[$index19]->customer->mainCompany->id = $jsonData['orders'][$index19]['customer']['mainCompany']['id'];

}
if (isset($jsonData['orders'][$index19]['customer']['mainCompany']['externalId'])) {
    $model->orders[$index19]->customer->mainCompany->externalId = $jsonData['orders'][$index19]['customer']['mainCompany']['externalId'];

}
if (isset($jsonData['orders'][$index19]['customer']['mainCompany']['name'])) {
    $model->orders[$index19]->customer->mainCompany->name = $jsonData['orders'][$index19]['customer']['mainCompany']['name'];

}


}


} else {
    
$model->orders[$index19]->customer = new RetailCrm\Api\Model\Entity\Customers\Customer();
if (isset($jsonData['orders'][$index19]['customer']['type'])) {
    $model->orders[$index19]->customer->type = $jsonData['orders'][$index19]['customer']['type'];

}
if (isset($jsonData['orders'][$index19]['customer']['id'])) {
    $model->orders[$index19]->customer->id = $jsonData['orders'][$index19]['customer']['id'];

}
if (isset($jsonData['orders'][$index19]['customer']['externalId'])) {
    $model->orders[$index19]->customer->externalId = $jsonData['orders'][$index19]['customer']['externalId'];

}
if (isset($jsonData['orders'][$index19]['customer']['isContact'])) {
    $model->orders[$index19]->customer->isContact = $jsonData['orders'][$index19]['customer']['isContact'];

}
if (isset($jsonData['orders'][$index19]['customer']['createdAt'])) {
    $model->orders[$index19]->customer->createdAt = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['orders'][$index19]['customer']['createdAt']);

}
if (isset($jsonData['orders'][$index19]['customer']['managerId'])) {
    $model->orders[$index19]->customer->managerId = $jsonData['orders'][$index19]['customer']['managerId'];

}
if (isset($jsonData['orders'][$index19]['customer']['vip'])) {
    $model->orders[$index19]->customer->vip = $jsonData['orders'][$index19]['customer']['vip'];

}
if (isset($jsonData['orders'][$index19]['customer']['bad'])) {
    $model->orders[$index19]->customer->bad = $jsonData['orders'][$index19]['customer']['bad'];

}
if (isset($jsonData['orders'][$index19]['customer']['browserId'])) {
    $model->orders[$index19]->customer->browserId = $jsonData['orders'][$index19]['customer']['browserId'];

}
if (isset($jsonData['orders'][$index19]['customer']['site'])) {
    $model->orders[$index19]->customer->site = $jsonData['orders'][$index19]['customer']['site'];

}
if (isset($jsonData['orders'][$index19]['customer']['contragent'])) {
    
$model->orders[$index19]->customer->contragent = new RetailCrm\Api\Model\Entity\Customers\CustomerContragent();
if (isset($jsonData['orders'][$index19]['customer']['contragent']['contragentType'])) {
    $model->orders[$index19]->customer->contragent->contragentType = $jsonData['orders'][$index19]['customer']['contragent']['contragentType'];

}
if (isset($jsonData['orders'][$index19]['customer']['contragent']['legalName'])) {
    $model->orders[$index19]->customer->contragent->legalName = $jsonData['orders'][$index19]['customer']['contragent']['legalName'];

}
if (isset($jsonData['orders'][$index19]['customer']['contragent']['legalAddress'])) {
    $model->orders[$index19]->customer->contragent->legalAddress = $jsonData['orders'][$index19]['customer']['contragent']['legalAddress'];

}
if (isset($jsonData['orders'][$index19]['customer']['contragent']['INN'])) {
    $model->orders[$index19]->customer->contragent->INN = $jsonData['orders'][$index19]['customer']['contragent']['INN'];

}
if (isset($jsonData['orders'][$index19]['customer']['contragent']['OKPO'])) {
    $model->orders[$index19]->customer->contragent->OKPO = $jsonData['orders'][$index19]['customer']['contragent']['OKPO'];

}
if (isset($jsonData['orders'][$index19]['customer']['contragent']['KPP'])) {
    $model->orders[$index19]->customer->contragent->KPP = $jsonData['orders'][$index19]['customer']['contragent']['KPP'];

}
if (isset($jsonData['orders'][$index19]['customer']['contragent']['OGRN'])) {
    $model->orders[$index19]->customer->contragent->OGRN = $jsonData['orders'][$index19]['customer']['contragent']['OGRN'];

}
if (isset($jsonData['orders'][$index19]['customer']['contragent']['OGRNIP'])) {
    $model->orders[$index19]->customer->contragent->OGRNIP = $jsonData['orders'][$index19]['customer']['contragent']['OGRNIP'];

}
if (isset($jsonData['orders'][$index19]['customer']['contragent']['certificateNumber'])) {
    $model->orders[$index19]->customer->contragent->certificateNumber = $jsonData['orders'][$index19]['customer']['contragent']['certificateNumber'];

}
if (isset($jsonData['orders'][$index19]['customer']['contragent']['certificateDate'])) {
    $model->orders[$index19]->customer->contragent->certificateDate = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['orders'][$index19]['customer']['contragent']['certificateDate']);

}
if (isset($jsonData['orders'][$index19]['customer']['contragent']['BIK'])) {
    $model->orders[$index19]->customer->contragent->BIK = $jsonData['orders'][$index19]['customer']['contragent']['BIK'];

}
if (isset($jsonData['orders'][$index19]['customer']['contragent']['bank'])) {
    $model->orders[$index19]->customer->contragent->bank = $jsonData['orders'][$index19]['customer']['contragent']['bank'];

}
if (isset($jsonData['orders'][$index19]['customer']['contragent']['bankAddress'])) {
    $model->orders[$index19]->customer->contragent->bankAddress = $jsonData['orders'][$index19]['customer']['contragent']['bankAddress'];

}
if (isset($jsonData['orders'][$index19]['customer']['contragent']['corrAccount'])) {
    $model->orders[$index19]->customer->contragent->corrAccount = $jsonData['orders'][$index19]['customer']['contragent']['corrAccount'];

}
if (isset($jsonData['orders'][$index19]['customer']['contragent']['bankAccount'])) {
    $model->orders[$index19]->customer->contragent->bankAccount = $jsonData['orders'][$index19]['customer']['contragent']['bankAccount'];

}


}
if (isset($jsonData['orders'][$index19]['customer']['tags'])) {
    $model->orders[$index19]->customer->tags = [];
foreach (array_keys($jsonData['orders'][$index19]['customer']['tags']) as $index49) {
    
$model->orders[$index19]->customer->tags[$index49] = new RetailCrm\Api\Model\Entity\Customers\CustomerTag();
if (isset($jsonData['orders'][$index19]['customer']['tags'][$index49]['name'])) {
    $model->orders[$index19]->customer->tags[$index49]->name = $jsonData['orders'][$index19]['customer']['tags'][$index49]['name'];

}
if (isset($jsonData['orders'][$index19]['customer']['tags'][$index49]['color'])) {
    $model->orders[$index19]->customer->tags[$index49]->color = $jsonData['orders'][$index19]['customer']['tags'][$index49]['color'];

}
if (isset($jsonData['orders'][$index19]['customer']['tags'][$index49]['attached'])) {
    $model->orders[$index19]->customer->tags[$index49]->attached = $jsonData['orders'][$index19]['customer']['tags'][$index49]['attached'];

}


}

}
if (isset($jsonData['orders'][$index19]['customer']['avgMarginSumm'])) {
    $model->orders[$index19]->customer->avgMarginSumm = (float) $jsonData['orders'][$index19]['customer']['avgMarginSumm'];

}
if (isset($jsonData['orders'][$index19]['customer']['marginSumm'])) {
    $model->orders[$index19]->customer->marginSumm = (float) $jsonData['orders'][$index19]['customer']['marginSumm'];

}
if (isset($jsonData['orders'][$index19]['customer']['totalSumm'])) {
    $model->orders[$index19]->customer->totalSumm = (float) $jsonData['orders'][$index19]['customer']['totalSumm'];

}
if (isset($jsonData['orders'][$index19]['customer']['averageSumm'])) {
    $model->orders[$index19]->customer->averageSumm = (float) $jsonData['orders'][$index19]['customer']['averageSumm'];

}
if (isset($jsonData['orders'][$index19]['customer']['ordersCount'])) {
    $model->orders[$index19]->customer->ordersCount = $jsonData['orders'][$index19]['customer']['ordersCount'];

}
if (isset($jsonData['orders'][$index19]['customer']['costSumm'])) {
    $model->orders[$index19]->customer->costSumm = (float) $jsonData['orders'][$index19]['customer']['costSumm'];

}
if (isset($jsonData['orders'][$index19]['customer']['customFields'])) {
    $model->orders[$index19]->customer->customFields = [];
foreach (array_keys($jsonData['orders'][$index19]['customer']['customFields']) as $index57) {
    $model->orders[$index19]->customer->customFields[$index57] = $jsonData['orders'][$index19]['customer']['customFields'][$index57];

}

}
if (isset($jsonData['orders'][$index19]['customer']['personalDiscount'])) {
    $model->orders[$index19]->customer->personalDiscount = (float) $jsonData['orders'][$index19]['customer']['personalDiscount'];

}
if (isset($jsonData['orders'][$index19]['customer']['cumulativeDiscount'])) {
    $model->orders[$index19]->customer->cumulativeDiscount = (float) $jsonData['orders'][$index19]['customer']['cumulativeDiscount'];

}
if (isset($jsonData['orders'][$index19]['customer']['discountCardNumber'])) {
    $model->orders[$index19]->customer->discountCardNumber = $jsonData['orders'][$index19]['customer']['discountCardNumber'];

}
if (isset($jsonData['orders'][$index19]['customer']['firstClientId'])) {
    $model->orders[$index19]->customer->firstClientId = $jsonData['orders'][$index19]['customer']['firstClientId'];

}
if (isset($jsonData['orders'][$index19]['customer']['lastClientId'])) {
    $model->orders[$index19]->customer->lastClientId = $jsonData['orders'][$index19]['customer']['lastClientId'];

}
if (isset($jsonData['orders'][$index19]['customer']['address'])) {
    
$model->orders[$index19]->customer->address = new RetailCrm\Api\Model\Entity\Customers\CustomerAddress();
if (isset($jsonData['orders'][$index19]['customer']['address']['id'])) {
    $model->orders[$index19]->customer->address->id = $jsonData['orders'][$index19]['customer']['address']['id'];

}
if (isset($jsonData['orders'][$index19]['customer']['address']['name'])) {
    $model->orders[$index19]->customer->address->name = $jsonData['orders'][$index19]['customer']['address']['name'];

}
if (isset($jsonData['orders'][$index19]['customer']['address']['isMain'])) {
    $model->orders[$index19]->customer->address->isMain = $jsonData['orders'][$index19]['customer']['address']['isMain'];

}
if (isset($jsonData['orders'][$index19]['customer']['address']['index'])) {
    $model->orders[$index19]->customer->address->index = $jsonData['orders'][$index19]['customer']['address']['index'];

}
if (isset($jsonData['orders'][$index19]['customer']['address']['countryIso'])) {
    $model->orders[$index19]->customer->address->countryIso = $jsonData['orders'][$index19]['customer']['address']['countryIso'];

}
if (isset($jsonData['orders'][$index19]['customer']['address']['region'])) {
    $model->orders[$index19]->customer->address->region = $jsonData['orders'][$index19]['customer']['address']['region'];

}
if (isset($jsonData['orders'][$index19]['customer']['address']['regionId'])) {
    $model->orders[$index19]->customer->address->regionId = $jsonData['orders'][$index19]['customer']['address']['regionId'];

}
if (isset($jsonData['orders'][$index19]['customer']['address']['city'])) {
    $model->orders[$index19]->customer->address->city = $jsonData['orders'][$index19]['customer']['address']['city'];

}
if (isset($jsonData['orders'][$index19]['customer']['address']['cityId'])) {
    $model->orders[$index19]->customer->address->cityId = $jsonData['orders'][$index19]['customer']['address']['cityId'];

}
if (isset($jsonData['orders'][$index19]['customer']['address']['cityType'])) {
    $model->orders[$index19]->customer->address->cityType = $jsonData['orders'][$index19]['customer']['address']['cityType'];

}
if (isset($jsonData['orders'][$index19]['customer']['address']['street'])) {
    $model->orders[$index19]->customer->address->street = $jsonData['orders'][$index19]['customer']['address']['street'];

}
if (isset($jsonData['orders'][$index19]['customer']['address']['streetId'])) {
    $model->orders[$index19]->customer->address->streetId = $jsonData['orders'][$index19]['customer']['address']['streetId'];

}
if (isset($jsonData['orders'][$index19]['customer']['address']['streetType'])) {
    $model->orders[$index19]->customer->address->streetType = $jsonData['orders'][$index19]['customer']['address']['streetType'];

}
if (isset($jsonData['orders'][$index19]['customer']['address']['building'])) {
    $model->orders[$index19]->customer->address->building = $jsonData['orders'][$index19]['customer']['address']['building'];

}
if (isset($jsonData['orders'][$index19]['customer']['address']['flat'])) {
    $model->orders[$index19]->customer->address->flat = $jsonData['orders'][$index19]['customer']['address']['flat'];

}
if (isset($jsonData['orders'][$index19]['customer']['address']['floor'])) {
    $model->orders[$index19]->customer->address->floor = $jsonData['orders'][$index19]['customer']['address']['floor'];

}
if (isset($jsonData['orders'][$index19]['customer']['address']['block'])) {
    $model->orders[$index19]->customer->address->block = $jsonData['orders'][$index19]['customer']['address']['block'];

}
if (isset($jsonData['orders'][$index19]['customer']['address']['house'])) {
    $model->orders[$index19]->customer->address->house = $jsonData['orders'][$index19]['customer']['address']['house'];

}
if (isset($jsonData['orders'][$index19]['customer']['address']['housing'])) {
    $model->orders[$index19]->customer->address->housing = $jsonData['orders'][$index19]['customer']['address']['housing'];

}
if (isset($jsonData['orders'][$index19]['customer']['address']['metro'])) {
    $model->orders[$index19]->customer->address->metro = $jsonData['orders'][$index19]['customer']['address']['metro'];

}
if (isset($jsonData['orders'][$index19]['customer']['address']['notes'])) {
    $model->orders[$index19]->customer->address->notes = $jsonData['orders'][$index19]['customer']['address']['notes'];

}
if (isset($jsonData['orders'][$index19]['customer']['address']['text'])) {
    $model->orders[$index19]->customer->address->text = $jsonData['orders'][$index19]['customer']['address']['text'];

}
if (isset($jsonData['orders'][$index19]['customer']['address']['externalId'])) {
    $model->orders[$index19]->customer->address->externalId = $jsonData['orders'][$index19]['customer']['address']['externalId'];

}


}
if (isset($jsonData['orders'][$index19]['customer']['segments'])) {
    $model->orders[$index19]->customer->segments = [];
foreach (array_keys($jsonData['orders'][$index19]['customer']['segments']) as $index53) {
    
$model->orders[$index19]->customer->segments[$index53] = new RetailCrm\Api\Model\Entity\Customers\Segment();
if (isset($jsonData['orders'][$index19]['customer']['segments'][$index53]['id'])) {
    $model->orders[$index19]->customer->segments[$index53]->id = $jsonData['orders'][$index19]['customer']['segments'][$index53]['id'];

}
if (isset($jsonData['orders'][$index19]['customer']['segments'][$index53]['code'])) {
    $model->orders[$index19]->customer->segments[$index53]->code = $jsonData['orders'][$index19]['customer']['segments'][$index53]['code'];

}
if (isset($jsonData['orders'][$index19]['customer']['segments'][$index53]['name'])) {
    $model->orders[$index19]->customer->segments[$index53]->name = $jsonData['orders'][$index19]['customer']['segments'][$index53]['name'];

}
if (isset($jsonData['orders'][$index19]['customer']['segments'][$index53]['createdAt'])) {
    $model->orders[$index19]->customer->segments[$index53]->createdAt = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['orders'][$index19]['customer']['segments'][$index53]['createdAt']);

}
if (isset($jsonData['orders'][$index19]['customer']['segments'][$index53]['isDynamic'])) {
    $model->orders[$index19]->customer->segments[$index53]->isDynamic = $jsonData['orders'][$index19]['customer']['segments'][$index53]['isDynamic'];

}
if (isset($jsonData['orders'][$index19]['customer']['segments'][$index53]['customersCount'])) {
    $model->orders[$index19]->customer->segments[$index53]->customersCount = $jsonData['orders'][$index19]['customer']['segments'][$index53]['customersCount'];

}
if (isset($jsonData['orders'][$index19]['customer']['segments'][$index53]['active'])) {
    $model->orders[$index19]->customer->segments[$index53]->active = $jsonData['orders'][$index19]['customer']['segments'][$index53]['active'];

}


}

}
if (isset($jsonData['orders'][$index19]['customer']['maturationTime'])) {
    $model->orders[$index19]->customer->maturationTime = $jsonData['orders'][$index19]['customer']['maturationTime'];

}
if (isset($jsonData['orders'][$index19]['customer']['firstName'])) {
    $model->orders[$index19]->customer->firstName = $jsonData['orders'][$index19]['customer']['firstName'];

}
if (isset($jsonData['orders'][$index19]['customer']['lastName'])) {
    $model->orders[$index19]->customer->lastName = $jsonData['orders'][$index19]['customer']['lastName'];

}
if (isset($jsonData['orders'][$index19]['customer']['patronymic'])) {
    $model->orders[$index19]->customer->patronymic = $jsonData['orders'][$index19]['customer']['patronymic'];

}
if (isset($jsonData['orders'][$index19]['customer']['sex'])) {
    $model->orders[$index19]->customer->sex = $jsonData['orders'][$index19]['customer']['sex'];

}
if (isset($jsonData['orders'][$index19]['customer']['presumableSex'])) {
    $model->orders[$index19]->customer->presumableSex = $jsonData['orders'][$index19]['customer']['presumableSex'];

}
if (isset($jsonData['orders'][$index19]['customer']['email'])) {
    $model->orders[$index19]->customer->email = $jsonData['orders'][$index19]['customer']['email'];

}
if (isset($jsonData['orders'][$index19]['customer']['emailMarketingUnsubscribedAt'])) {
    $model->orders[$index19]->customer->emailMarketingUnsubscribedAt = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['orders'][$index19]['customer']['emailMarketingUnsubscribedAt']);

}
if (isset($jsonData['orders'][$index19]['customer']['phones'])) {
    $model->orders[$index19]->customer->phones = [];
foreach (array_keys($jsonData['orders'][$index19]['customer']['phones']) as $index51) {
    
$model->orders[$index19]->customer->phones[$index51] = new RetailCrm\Api\Model\Entity\Customers\CustomerPhone();
if (isset($jsonData['orders'][$index19]['customer']['phones'][$index51]['number'])) {
    $model->orders[$index19]->customer->phones[$index51]->number = $jsonData['orders'][$index19]['customer']['phones'][$index51]['number'];

}


}

}
if (isset($jsonData['orders'][$index19]['customer']['birthday'])) {
    $model->orders[$index19]->customer->birthday = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['orders'][$index19]['customer']['birthday']);

}
if (isset($jsonData['orders'][$index19]['customer']['source'])) {
    
$model->orders[$index19]->customer->source = new RetailCrm\Api\Model\Entity\Source();
if (isset($jsonData['orders'][$index19]['customer']['source']['source'])) {
    $model->orders[$index19]->customer->source->source = $jsonData['orders'][$index19]['customer']['source']['source'];

}
if (isset($jsonData['orders'][$index19]['customer']['source']['medium'])) {
    $model->orders[$index19]->customer->source->medium = $jsonData['orders'][$index19]['customer']['source']['medium'];

}
if (isset($jsonData['orders'][$index19]['customer']['source']['campaign'])) {
    $model->orders[$index19]->customer->source->campaign = $jsonData['orders'][$index19]['customer']['source']['campaign'];

}
if (isset($jsonData['orders'][$index19]['customer']['source']['keyword'])) {
    $model->orders[$index19]->customer->source->keyword = $jsonData['orders'][$index19]['customer']['source']['keyword'];

}
if (isset($jsonData['orders'][$index19]['customer']['source']['content'])) {
    $model->orders[$index19]->customer->source->content = $jsonData['orders'][$index19]['customer']['source']['content'];

}


}
if (isset($jsonData['orders'][$index19]['customer']['photoUrl'])) {
    $model->orders[$index19]->customer->photoUrl = $jsonData['orders'][$index19]['customer']['photoUrl'];

}
if (isset($jsonData['orders'][$index19]['customer']['mgCustomerId'])) {
    $model->orders[$index19]->customer->mgCustomerId = $jsonData['orders'][$index19]['customer']['mgCustomerId'];

}
if (isset($jsonData['orders'][$index19]['customer']['subscribed'])) {
    $model->orders[$index19]->customer->subscribed = $jsonData['orders'][$index19]['customer']['subscribed'];

}


}

}
if (isset($jsonData['orders'][$index19]['contact'])) {
    
$model->orders[$index19]->contact = new RetailCrm\Api\Model\Entity\Customers\Customer();
if (isset($jsonData['orders'][$index19]['contact']['type'])) {
    $model->orders[$index19]->contact->type = $jsonData['orders'][$index19]['contact']['type'];

}
if (isset($jsonData['orders'][$index19]['contact']['id'])) {
    $model->orders[$index19]->contact->id = $jsonData['orders'][$index19]['contact']['id'];

}
if (isset($jsonData['orders'][$index19]['contact']['externalId'])) {
    $model->orders[$index19]->contact->externalId = $jsonData['orders'][$index19]['contact']['externalId'];

}
if (isset($jsonData['orders'][$index19]['contact']['isContact'])) {
    $model->orders[$index19]->contact->isContact = $jsonData['orders'][$index19]['contact']['isContact'];

}
if (isset($jsonData['orders'][$index19]['contact']['createdAt'])) {
    $model->orders[$index19]->contact->createdAt = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['orders'][$index19]['contact']['createdAt']);

}
if (isset($jsonData['orders'][$index19]['contact']['managerId'])) {
    $model->orders[$index19]->contact->managerId = $jsonData['orders'][$index19]['contact']['managerId'];

}
if (isset($jsonData['orders'][$index19]['contact']['vip'])) {
    $model->orders[$index19]->contact->vip = $jsonData['orders'][$index19]['contact']['vip'];

}
if (isset($jsonData['orders'][$index19]['contact']['bad'])) {
    $model->orders[$index19]->contact->bad = $jsonData['orders'][$index19]['contact']['bad'];

}
if (isset($jsonData['orders'][$index19]['contact']['browserId'])) {
    $model->orders[$index19]->contact->browserId = $jsonData['orders'][$index19]['contact']['browserId'];

}
if (isset($jsonData['orders'][$index19]['contact']['site'])) {
    $model->orders[$index19]->contact->site = $jsonData['orders'][$index19]['contact']['site'];

}
if (isset($jsonData['orders'][$index19]['contact']['contragent'])) {
    
$model->orders[$index19]->contact->contragent = new RetailCrm\Api\Model\Entity\Customers\CustomerContragent();
if (isset($jsonData['orders'][$index19]['contact']['contragent']['contragentType'])) {
    $model->orders[$index19]->contact->contragent->contragentType = $jsonData['orders'][$index19]['contact']['contragent']['contragentType'];

}
if (isset($jsonData['orders'][$index19]['contact']['contragent']['legalName'])) {
    $model->orders[$index19]->contact->contragent->legalName = $jsonData['orders'][$index19]['contact']['contragent']['legalName'];

}
if (isset($jsonData['orders'][$index19]['contact']['contragent']['legalAddress'])) {
    $model->orders[$index19]->contact->contragent->legalAddress = $jsonData['orders'][$index19]['contact']['contragent']['legalAddress'];

}
if (isset($jsonData['orders'][$index19]['contact']['contragent']['INN'])) {
    $model->orders[$index19]->contact->contragent->INN = $jsonData['orders'][$index19]['contact']['contragent']['INN'];

}
if (isset($jsonData['orders'][$index19]['contact']['contragent']['OKPO'])) {
    $model->orders[$index19]->contact->contragent->OKPO = $jsonData['orders'][$index19]['contact']['contragent']['OKPO'];

}
if (isset($jsonData['orders'][$index19]['contact']['contragent']['KPP'])) {
    $model->orders[$index19]->contact->contragent->KPP = $jsonData['orders'][$index19]['contact']['contragent']['KPP'];

}
if (isset($jsonData['orders'][$index19]['contact']['contragent']['OGRN'])) {
    $model->orders[$index19]->contact->contragent->OGRN = $jsonData['orders'][$index19]['contact']['contragent']['OGRN'];

}
if (isset($jsonData['orders'][$index19]['contact']['contragent']['OGRNIP'])) {
    $model->orders[$index19]->contact->contragent->OGRNIP = $jsonData['orders'][$index19]['contact']['contragent']['OGRNIP'];

}
if (isset($jsonData['orders'][$index19]['contact']['contragent']['certificateNumber'])) {
    $model->orders[$index19]->contact->contragent->certificateNumber = $jsonData['orders'][$index19]['contact']['contragent']['certificateNumber'];

}
if (isset($jsonData['orders'][$index19]['contact']['contragent']['certificateDate'])) {
    $model->orders[$index19]->contact->contragent->certificateDate = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['orders'][$index19]['contact']['contragent']['certificateDate']);

}
if (isset($jsonData['orders'][$index19]['contact']['contragent']['BIK'])) {
    $model->orders[$index19]->contact->contragent->BIK = $jsonData['orders'][$index19]['contact']['contragent']['BIK'];

}
if (isset($jsonData['orders'][$index19]['contact']['contragent']['bank'])) {
    $model->orders[$index19]->contact->contragent->bank = $jsonData['orders'][$index19]['contact']['contragent']['bank'];

}
if (isset($jsonData['orders'][$index19]['contact']['contragent']['bankAddress'])) {
    $model->orders[$index19]->contact->contragent->bankAddress = $jsonData['orders'][$index19]['contact']['contragent']['bankAddress'];

}
if (isset($jsonData['orders'][$index19]['contact']['contragent']['corrAccount'])) {
    $model->orders[$index19]->contact->contragent->corrAccount = $jsonData['orders'][$index19]['contact']['contragent']['corrAccount'];

}
if (isset($jsonData['orders'][$index19]['contact']['contragent']['bankAccount'])) {
    $model->orders[$index19]->contact->contragent->bankAccount = $jsonData['orders'][$index19]['contact']['contragent']['bankAccount'];

}


}
if (isset($jsonData['orders'][$index19]['contact']['tags'])) {
    $model->orders[$index19]->contact->tags = [];
foreach (array_keys($jsonData['orders'][$index19]['contact']['tags']) as $index48) {
    
$model->orders[$index19]->contact->tags[$index48] = new RetailCrm\Api\Model\Entity\Customers\CustomerTag();
if (isset($jsonData['orders'][$index19]['contact']['tags'][$index48]['name'])) {
    $model->orders[$index19]->contact->tags[$index48]->name = $jsonData['orders'][$index19]['contact']['tags'][$index48]['name'];

}
if (isset($jsonData['orders'][$index19]['contact']['tags'][$index48]['color'])) {
    $model->orders[$index19]->contact->tags[$index48]->color = $jsonData['orders'][$index19]['contact']['tags'][$index48]['color'];

}
if (isset($jsonData['orders'][$index19]['contact']['tags'][$index48]['attached'])) {
    $model->orders[$index19]->contact->tags[$index48]->attached = $jsonData['orders'][$index19]['contact']['tags'][$index48]['attached'];

}


}

}
if (isset($jsonData['orders'][$index19]['contact']['avgMarginSumm'])) {
    $model->orders[$index19]->contact->avgMarginSumm = (float) $jsonData['orders'][$index19]['contact']['avgMarginSumm'];

}
if (isset($jsonData['orders'][$index19]['contact']['marginSumm'])) {
    $model->orders[$index19]->contact->marginSumm = (float) $jsonData['orders'][$index19]['contact']['marginSumm'];

}
if (isset($jsonData['orders'][$index19]['contact']['totalSumm'])) {
    $model->orders[$index19]->contact->totalSumm = (float) $jsonData['orders'][$index19]['contact']['totalSumm'];

}
if (isset($jsonData['orders'][$index19]['contact']['averageSumm'])) {
    $model->orders[$index19]->contact->averageSumm = (float) $jsonData['orders'][$index19]['contact']['averageSumm'];

}
if (isset($jsonData['orders'][$index19]['contact']['ordersCount'])) {
    $model->orders[$index19]->contact->ordersCount = $jsonData['orders'][$index19]['contact']['ordersCount'];

}
if (isset($jsonData['orders'][$index19]['contact']['costSumm'])) {
    $model->orders[$index19]->contact->costSumm = (float) $jsonData['orders'][$index19]['contact']['costSumm'];

}
if (isset($jsonData['orders'][$index19]['contact']['customFields'])) {
    $model->orders[$index19]->contact->customFields = [];
foreach (array_keys($jsonData['orders'][$index19]['contact']['customFields']) as $index56) {
    $model->orders[$index19]->contact->customFields[$index56] = $jsonData['orders'][$index19]['contact']['customFields'][$index56];

}

}
if (isset($jsonData['orders'][$index19]['contact']['personalDiscount'])) {
    $model->orders[$index19]->contact->personalDiscount = (float) $jsonData['orders'][$index19]['contact']['personalDiscount'];

}
if (isset($jsonData['orders'][$index19]['contact']['cumulativeDiscount'])) {
    $model->orders[$index19]->contact->cumulativeDiscount = (float) $jsonData['orders'][$index19]['contact']['cumulativeDiscount'];

}
if (isset($jsonData['orders'][$index19]['contact']['discountCardNumber'])) {
    $model->orders[$index19]->contact->discountCardNumber = $jsonData['orders'][$index19]['contact']['discountCardNumber'];

}
if (isset($jsonData['orders'][$index19]['contact']['firstClientId'])) {
    $model->orders[$index19]->contact->firstClientId = $jsonData['orders'][$index19]['contact']['firstClientId'];

}
if (isset($jsonData['orders'][$index19]['contact']['lastClientId'])) {
    $model->orders[$index19]->contact->lastClientId = $jsonData['orders'][$index19]['contact']['lastClientId'];

}
if (isset($jsonData['orders'][$index19]['contact']['address'])) {
    
$model->orders[$index19]->contact->address = new RetailCrm\Api\Model\Entity\Customers\CustomerAddress();
if (isset($jsonData['orders'][$index19]['contact']['address']['id'])) {
    $model->orders[$index19]->contact->address->id = $jsonData['orders'][$index19]['contact']['address']['id'];

}
if (isset($jsonData['orders'][$index19]['contact']['address']['name'])) {
    $model->orders[$index19]->contact->address->name = $jsonData['orders'][$index19]['contact']['address']['name'];

}
if (isset($jsonData['orders'][$index19]['contact']['address']['isMain'])) {
    $model->orders[$index19]->contact->address->isMain = $jsonData['orders'][$index19]['contact']['address']['isMain'];

}
if (isset($jsonData['orders'][$index19]['contact']['address']['index'])) {
    $model->orders[$index19]->contact->address->index = $jsonData['orders'][$index19]['contact']['address']['index'];

}
if (isset($jsonData['orders'][$index19]['contact']['address']['countryIso'])) {
    $model->orders[$index19]->contact->address->countryIso = $jsonData['orders'][$index19]['contact']['address']['countryIso'];

}
if (isset($jsonData['orders'][$index19]['contact']['address']['region'])) {
    $model->orders[$index19]->contact->address->region = $jsonData['orders'][$index19]['contact']['address']['region'];

}
if (isset($jsonData['orders'][$index19]['contact']['address']['regionId'])) {
    $model->orders[$index19]->contact->address->regionId = $jsonData['orders'][$index19]['contact']['address']['regionId'];

}
if (isset($jsonData['orders'][$index19]['contact']['address']['city'])) {
    $model->orders[$index19]->contact->address->city = $jsonData['orders'][$index19]['contact']['address']['city'];

}
if (isset($jsonData['orders'][$index19]['contact']['address']['cityId'])) {
    $model->orders[$index19]->contact->address->cityId = $jsonData['orders'][$index19]['contact']['address']['cityId'];

}
if (isset($jsonData['orders'][$index19]['contact']['address']['cityType'])) {
    $model->orders[$index19]->contact->address->cityType = $jsonData['orders'][$index19]['contact']['address']['cityType'];

}
if (isset($jsonData['orders'][$index19]['contact']['address']['street'])) {
    $model->orders[$index19]->contact->address->street = $jsonData['orders'][$index19]['contact']['address']['street'];

}
if (isset($jsonData['orders'][$index19]['contact']['address']['streetId'])) {
    $model->orders[$index19]->contact->address->streetId = $jsonData['orders'][$index19]['contact']['address']['streetId'];

}
if (isset($jsonData['orders'][$index19]['contact']['address']['streetType'])) {
    $model->orders[$index19]->contact->address->streetType = $jsonData['orders'][$index19]['contact']['address']['streetType'];

}
if (isset($jsonData['orders'][$index19]['contact']['address']['building'])) {
    $model->orders[$index19]->contact->address->building = $jsonData['orders'][$index19]['contact']['address']['building'];

}
if (isset($jsonData['orders'][$index19]['contact']['address']['flat'])) {
    $model->orders[$index19]->contact->address->flat = $jsonData['orders'][$index19]['contact']['address']['flat'];

}
if (isset($jsonData['orders'][$index19]['contact']['address']['floor'])) {
    $model->orders[$index19]->contact->address->floor = $jsonData['orders'][$index19]['contact']['address']['floor'];

}
if (isset($jsonData['orders'][$index19]['contact']['address']['block'])) {
    $model->orders[$index19]->contact->address->block = $jsonData['orders'][$index19]['contact']['address']['block'];

}
if (isset($jsonData['orders'][$index19]['contact']['address']['house'])) {
    $model->orders[$index19]->contact->address->house = $jsonData['orders'][$index19]['contact']['address']['house'];

}
if (isset($jsonData['orders'][$index19]['contact']['address']['housing'])) {
    $model->orders[$index19]->contact->address->housing = $jsonData['orders'][$index19]['contact']['address']['housing'];

}
if (isset($jsonData['orders'][$index19]['contact']['address']['metro'])) {
    $model->orders[$index19]->contact->address->metro = $jsonData['orders'][$index19]['contact']['address']['metro'];

}
if (isset($jsonData['orders'][$index19]['contact']['address']['notes'])) {
    $model->orders[$index19]->contact->address->notes = $jsonData['orders'][$index19]['contact']['address']['notes'];

}
if (isset($jsonData['orders'][$index19]['contact']['address']['text'])) {
    $model->orders[$index19]->contact->address->text = $jsonData['orders'][$index19]['contact']['address']['text'];

}
if (isset($jsonData['orders'][$index19]['contact']['address']['externalId'])) {
    $model->orders[$index19]->contact->address->externalId = $jsonData['orders'][$index19]['contact']['address']['externalId'];

}


}
if (isset($jsonData['orders'][$index19]['contact']['segments'])) {
    $model->orders[$index19]->contact->segments = [];
foreach (array_keys($jsonData['orders'][$index19]['contact']['segments']) as $index52) {
    
$model->orders[$index19]->contact->segments[$index52] = new RetailCrm\Api\Model\Entity\Customers\Segment();
if (isset($jsonData['orders'][$index19]['contact']['segments'][$index52]['id'])) {
    $model->orders[$index19]->contact->segments[$index52]->id = $jsonData['orders'][$index19]['contact']['segments'][$index52]['id'];

}
if (isset($jsonData['orders'][$index19]['contact']['segments'][$index52]['code'])) {
    $model->orders[$index19]->contact->segments[$index52]->code = $jsonData['orders'][$index19]['contact']['segments'][$index52]['code'];

}
if (isset($jsonData['orders'][$index19]['contact']['segments'][$index52]['name'])) {
    $model->orders[$index19]->contact->segments[$index52]->name = $jsonData['orders'][$index19]['contact']['segments'][$index52]['name'];

}
if (isset($jsonData['orders'][$index19]['contact']['segments'][$index52]['createdAt'])) {
    $model->orders[$index19]->contact->segments[$index52]->createdAt = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['orders'][$index19]['contact']['segments'][$index52]['createdAt']);

}
if (isset($jsonData['orders'][$index19]['contact']['segments'][$index52]['isDynamic'])) {
    $model->orders[$index19]->contact->segments[$index52]->isDynamic = $jsonData['orders'][$index19]['contact']['segments'][$index52]['isDynamic'];

}
if (isset($jsonData['orders'][$index19]['contact']['segments'][$index52]['customersCount'])) {
    $model->orders[$index19]->contact->segments[$index52]->customersCount = $jsonData['orders'][$index19]['contact']['segments'][$index52]['customersCount'];

}
if (isset($jsonData['orders'][$index19]['contact']['segments'][$index52]['active'])) {
    $model->orders[$index19]->contact->segments[$index52]->active = $jsonData['orders'][$index19]['contact']['segments'][$index52]['active'];

}


}

}
if (isset($jsonData['orders'][$index19]['contact']['maturationTime'])) {
    $model->orders[$index19]->contact->maturationTime = $jsonData['orders'][$index19]['contact']['maturationTime'];

}
if (isset($jsonData['orders'][$index19]['contact']['firstName'])) {
    $model->orders[$index19]->contact->firstName = $jsonData['orders'][$index19]['contact']['firstName'];

}
if (isset($jsonData['orders'][$index19]['contact']['lastName'])) {
    $model->orders[$index19]->contact->lastName = $jsonData['orders'][$index19]['contact']['lastName'];

}
if (isset($jsonData['orders'][$index19]['contact']['patronymic'])) {
    $model->orders[$index19]->contact->patronymic = $jsonData['orders'][$index19]['contact']['patronymic'];

}
if (isset($jsonData['orders'][$index19]['contact']['sex'])) {
    $model->orders[$index19]->contact->sex = $jsonData['orders'][$index19]['contact']['sex'];

}
if (isset($jsonData['orders'][$index19]['contact']['presumableSex'])) {
    $model->orders[$index19]->contact->presumableSex = $jsonData['orders'][$index19]['contact']['presumableSex'];

}
if (isset($jsonData['orders'][$index19]['contact']['email'])) {
    $model->orders[$index19]->contact->email = $jsonData['orders'][$index19]['contact']['email'];

}
if (isset($jsonData['orders'][$index19]['contact']['emailMarketingUnsubscribedAt'])) {
    $model->orders[$index19]->contact->emailMarketingUnsubscribedAt = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['orders'][$index19]['contact']['emailMarketingUnsubscribedAt']);

}
if (isset($jsonData['orders'][$index19]['contact']['phones'])) {
    $model->orders[$index19]->contact->phones = [];
foreach (array_keys($jsonData['orders'][$index19]['contact']['phones']) as $index50) {
    
$model->orders[$index19]->contact->phones[$index50] = new RetailCrm\Api\Model\Entity\Customers\CustomerPhone();
if (isset($jsonData['orders'][$index19]['contact']['phones'][$index50]['number'])) {
    $model->orders[$index19]->contact->phones[$index50]->number = $jsonData['orders'][$index19]['contact']['phones'][$index50]['number'];

}


}

}
if (isset($jsonData['orders'][$index19]['contact']['birthday'])) {
    $model->orders[$index19]->contact->birthday = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['orders'][$index19]['contact']['birthday']);

}
if (isset($jsonData['orders'][$index19]['contact']['source'])) {
    
$model->orders[$index19]->contact->source = new RetailCrm\Api\Model\Entity\Source();
if (isset($jsonData['orders'][$index19]['contact']['source']['source'])) {
    $model->orders[$index19]->contact->source->source = $jsonData['orders'][$index19]['contact']['source']['source'];

}
if (isset($jsonData['orders'][$index19]['contact']['source']['medium'])) {
    $model->orders[$index19]->contact->source->medium = $jsonData['orders'][$index19]['contact']['source']['medium'];

}
if (isset($jsonData['orders'][$index19]['contact']['source']['campaign'])) {
    $model->orders[$index19]->contact->source->campaign = $jsonData['orders'][$index19]['contact']['source']['campaign'];

}
if (isset($jsonData['orders'][$index19]['contact']['source']['keyword'])) {
    $model->orders[$index19]->contact->source->keyword = $jsonData['orders'][$index19]['contact']['source']['keyword'];

}
if (isset($jsonData['orders'][$index19]['contact']['source']['content'])) {
    $model->orders[$index19]->contact->source->content = $jsonData['orders'][$index19]['contact']['source']['content'];

}


}
if (isset($jsonData['orders'][$index19]['contact']['photoUrl'])) {
    $model->orders[$index19]->contact->photoUrl = $jsonData['orders'][$index19]['contact']['photoUrl'];

}
if (isset($jsonData['orders'][$index19]['contact']['mgCustomerId'])) {
    $model->orders[$index19]->contact->mgCustomerId = $jsonData['orders'][$index19]['contact']['mgCustomerId'];

}
if (isset($jsonData['orders'][$index19]['contact']['subscribed'])) {
    $model->orders[$index19]->contact->subscribed = $jsonData['orders'][$index19]['contact']['subscribed'];

}


}
if (isset($jsonData['orders'][$index19]['company'])) {
    
$model->orders[$index19]->company = new RetailCrm\Api\Model\Entity\CustomersCorporate\Company();
if (isset($jsonData['orders'][$index19]['company']['id'])) {
    $model->orders[$index19]->company->id = $jsonData['orders'][$index19]['company']['id'];

}
if (isset($jsonData['orders'][$index19]['company']['isMain'])) {
    $model->orders[$index19]->company->isMain = $jsonData['orders'][$index19]['company']['isMain'];

}
if (isset($jsonData['orders'][$index19]['company']['externalId'])) {
    $model->orders[$index19]->company->externalId = $jsonData['orders'][$index19]['company']['externalId'];

}
if (isset($jsonData['orders'][$index19]['company']['active'])) {
    $model->orders[$index19]->company->active = $jsonData['orders'][$index19]['company']['active'];

}
if (isset($jsonData['orders'][$index19]['company']['name'])) {
    $model->orders[$index19]->company->name = $jsonData['orders'][$index19]['company']['name'];

}
if (isset($jsonData['orders'][$index19]['company']['brand'])) {
    $model->orders[$index19]->company->brand = $jsonData['orders'][$index19]['company']['brand'];

}
if (isset($jsonData['orders'][$index19]['company']['site'])) {
    $model->orders[$index19]->company->site = $jsonData['orders'][$index19]['company']['site'];

}
if (isset($jsonData['orders'][$index19]['company']['createdAt'])) {
    $model->orders[$index19]->company->createdAt = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['orders'][$index19]['company']['createdAt']);

}
if (isset($jsonData['orders'][$index19]['company']['customer'])) {
    
$model->orders[$index19]->company->customer = new RetailCrm\Api\Model\Entity\CustomersCorporate\SerializedEntityCustomer();
if (isset($jsonData['orders'][$index19]['company']['customer']['site'])) {
    $model->orders[$index19]->company->customer->site = $jsonData['orders'][$index19]['company']['customer']['site'];

}
if (isset($jsonData['orders'][$index19]['company']['customer']['id'])) {
    $model->orders[$index19]->company->customer->id = $jsonData['orders'][$index19]['company']['customer']['id'];

}
if (isset($jsonData['orders'][$index19]['company']['customer']['externalId'])) {
    $model->orders[$index19]->company->customer->externalId = $jsonData['orders'][$index19]['company']['customer']['externalId'];

}
if (isset($jsonData['orders'][$index19]['company']['customer']['type'])) {
    $model->orders[$index19]->company->customer->type = $jsonData['orders'][$index19]['company']['customer']['type'];

}


}
if (isset($jsonData['orders'][$index19]['company']['contragent'])) {
    
$model->orders[$index19]->company->contragent = new RetailCrm\Api\Model\Entity\Customers\CustomerContragent();
if (isset($jsonData['orders'][$index19]['company']['contragent']['contragentType'])) {
    $model->orders[$index19]->company->contragent->contragentType = $jsonData['orders'][$index19]['company']['contragent']['contragentType'];

}
if (isset($jsonData['orders'][$index19]['company']['contragent']['legalName'])) {
    $model->orders[$index19]->company->contragent->legalName = $jsonData['orders'][$index19]['company']['contragent']['legalName'];

}
if (isset($jsonData['orders'][$index19]['company']['contragent']['legalAddress'])) {
    $model->orders[$index19]->company->contragent->legalAddress = $jsonData['orders'][$index19]['company']['contragent']['legalAddress'];

}
if (isset($jsonData['orders'][$index19]['company']['contragent']['INN'])) {
    $model->orders[$index19]->company->contragent->INN = $jsonData['orders'][$index19]['company']['contragent']['INN'];

}
if (isset($jsonData['orders'][$index19]['company']['contragent']['OKPO'])) {
    $model->orders[$index19]->company->contragent->OKPO = $jsonData['orders'][$index19]['company']['contragent']['OKPO'];

}
if (isset($jsonData['orders'][$index19]['company']['contragent']['KPP'])) {
    $model->orders[$index19]->company->contragent->KPP = $jsonData['orders'][$index19]['company']['contragent']['KPP'];

}
if (isset($jsonData['orders'][$index19]['company']['contragent']['OGRN'])) {
    $model->orders[$index19]->company->contragent->OGRN = $jsonData['orders'][$index19]['company']['contragent']['OGRN'];

}
if (isset($jsonData['orders'][$index19]['company']['contragent']['OGRNIP'])) {
    $model->orders[$index19]->company->contragent->OGRNIP = $jsonData['orders'][$index19]['company']['contragent']['OGRNIP'];

}
if (isset($jsonData['orders'][$index19]['company']['contragent']['certificateNumber'])) {
    $model->orders[$index19]->company->contragent->certificateNumber = $jsonData['orders'][$index19]['company']['contragent']['certificateNumber'];

}
if (isset($jsonData['orders'][$index19]['company']['contragent']['certificateDate'])) {
    $model->orders[$index19]->company->contragent->certificateDate = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['orders'][$index19]['company']['contragent']['certificateDate']);

}
if (isset($jsonData['orders'][$index19]['company']['contragent']['BIK'])) {
    $model->orders[$index19]->company->contragent->BIK = $jsonData['orders'][$index19]['company']['contragent']['BIK'];

}
if (isset($jsonData['orders'][$index19]['company']['contragent']['bank'])) {
    $model->orders[$index19]->company->contragent->bank = $jsonData['orders'][$index19]['company']['contragent']['bank'];

}
if (isset($jsonData['orders'][$index19]['company']['contragent']['bankAddress'])) {
    $model->orders[$index19]->company->contragent->bankAddress = $jsonData['orders'][$index19]['company']['contragent']['bankAddress'];

}
if (isset($jsonData['orders'][$index19]['company']['contragent']['corrAccount'])) {
    $model->orders[$index19]->company->contragent->corrAccount = $jsonData['orders'][$index19]['company']['contragent']['corrAccount'];

}
if (isset($jsonData['orders'][$index19]['company']['contragent']['bankAccount'])) {
    $model->orders[$index19]->company->contragent->bankAccount = $jsonData['orders'][$index19]['company']['contragent']['bankAccount'];

}


}
if (isset($jsonData['orders'][$index19]['company']['address'])) {
    
$model->orders[$index19]->company->address = new RetailCrm\Api\Model\Entity\Customers\CustomerAddress();
if (isset($jsonData['orders'][$index19]['company']['address']['id'])) {
    $model->orders[$index19]->company->address->id = $jsonData['orders'][$index19]['company']['address']['id'];

}
if (isset($jsonData['orders'][$index19]['company']['address']['name'])) {
    $model->orders[$index19]->company->address->name = $jsonData['orders'][$index19]['company']['address']['name'];

}
if (isset($jsonData['orders'][$index19]['company']['address']['isMain'])) {
    $model->orders[$index19]->company->address->isMain = $jsonData['orders'][$index19]['company']['address']['isMain'];

}
if (isset($jsonData['orders'][$index19]['company']['address']['index'])) {
    $model->orders[$index19]->company->address->index = $jsonData['orders'][$index19]['company']['address']['index'];

}
if (isset($jsonData['orders'][$index19]['company']['address']['countryIso'])) {
    $model->orders[$index19]->company->address->countryIso = $jsonData['orders'][$index19]['company']['address']['countryIso'];

}
if (isset($jsonData['orders'][$index19]['company']['address']['region'])) {
    $model->orders[$index19]->company->address->region = $jsonData['orders'][$index19]['company']['address']['region'];

}
if (isset($jsonData['orders'][$index19]['company']['address']['regionId'])) {
    $model->orders[$index19]->company->address->regionId = $jsonData['orders'][$index19]['company']['address']['regionId'];

}
if (isset($jsonData['orders'][$index19]['company']['address']['city'])) {
    $model->orders[$index19]->company->address->city = $jsonData['orders'][$index19]['company']['address']['city'];

}
if (isset($jsonData['orders'][$index19]['company']['address']['cityId'])) {
    $model->orders[$index19]->company->address->cityId = $jsonData['orders'][$index19]['company']['address']['cityId'];

}
if (isset($jsonData['orders'][$index19]['company']['address']['cityType'])) {
    $model->orders[$index19]->company->address->cityType = $jsonData['orders'][$index19]['company']['address']['cityType'];

}
if (isset($jsonData['orders'][$index19]['company']['address']['street'])) {
    $model->orders[$index19]->company->address->street = $jsonData['orders'][$index19]['company']['address']['street'];

}
if (isset($jsonData['orders'][$index19]['company']['address']['streetId'])) {
    $model->orders[$index19]->company->address->streetId = $jsonData['orders'][$index19]['company']['address']['streetId'];

}
if (isset($jsonData['orders'][$index19]['company']['address']['streetType'])) {
    $model->orders[$index19]->company->address->streetType = $jsonData['orders'][$index19]['company']['address']['streetType'];

}
if (isset($jsonData['orders'][$index19]['company']['address']['building'])) {
    $model->orders[$index19]->company->address->building = $jsonData['orders'][$index19]['company']['address']['building'];

}
if (isset($jsonData['orders'][$index19]['company']['address']['flat'])) {
    $model->orders[$index19]->company->address->flat = $jsonData['orders'][$index19]['company']['address']['flat'];

}
if (isset($jsonData['orders'][$index19]['company']['address']['floor'])) {
    $model->orders[$index19]->company->address->floor = $jsonData['orders'][$index19]['company']['address']['floor'];

}
if (isset($jsonData['orders'][$index19]['company']['address']['block'])) {
    $model->orders[$index19]->company->address->block = $jsonData['orders'][$index19]['company']['address']['block'];

}
if (isset($jsonData['orders'][$index19]['company']['address']['house'])) {
    $model->orders[$index19]->company->address->house = $jsonData['orders'][$index19]['company']['address']['house'];

}
if (isset($jsonData['orders'][$index19]['company']['address']['housing'])) {
    $model->orders[$index19]->company->address->housing = $jsonData['orders'][$index19]['company']['address']['housing'];

}
if (isset($jsonData['orders'][$index19]['company']['address']['metro'])) {
    $model->orders[$index19]->company->address->metro = $jsonData['orders'][$index19]['company']['address']['metro'];

}
if (isset($jsonData['orders'][$index19]['company']['address']['notes'])) {
    $model->orders[$index19]->company->address->notes = $jsonData['orders'][$index19]['company']['address']['notes'];

}
if (isset($jsonData['orders'][$index19]['company']['address']['text'])) {
    $model->orders[$index19]->company->address->text = $jsonData['orders'][$index19]['company']['address']['text'];

}
if (isset($jsonData['orders'][$index19]['company']['address']['externalId'])) {
    $model->orders[$index19]->company->address->externalId = $jsonData['orders'][$index19]['company']['address']['externalId'];

}


}
if (isset($jsonData['orders'][$index19]['company']['customFields'])) {
    $model->orders[$index19]->company->customFields = [];
foreach (array_keys($jsonData['orders'][$index19]['company']['customFields']) as $index56) {
    $model->orders[$index19]->company->customFields[$index56] = $jsonData['orders'][$index19]['company']['customFields'][$index56];

}

}
if (isset($jsonData['orders'][$index19]['company']['marginSumm'])) {
    $model->orders[$index19]->company->marginSumm = (float) $jsonData['orders'][$index19]['company']['marginSumm'];

}
if (isset($jsonData['orders'][$index19]['company']['totalSumm'])) {
    $model->orders[$index19]->company->totalSumm = (float) $jsonData['orders'][$index19]['company']['totalSumm'];

}
if (isset($jsonData['orders'][$index19]['company']['averageSumm'])) {
    $model->orders[$index19]->company->averageSumm = (float) $jsonData['orders'][$index19]['company']['averageSumm'];

}
if (isset($jsonData['orders'][$index19]['company']['ordersCount'])) {
    $model->orders[$index19]->company->ordersCount = $jsonData['orders'][$index19]['company']['ordersCount'];

}
if (isset($jsonData['orders'][$index19]['company']['costSumm'])) {
    $model->orders[$index19]->company->costSumm = (float) $jsonData['orders'][$index19]['company']['costSumm'];

}


}
if (isset($jsonData['orders'][$index19]['contragent'])) {
    
$model->orders[$index19]->contragent = new RetailCrm\Api\Model\Entity\Orders\OrderContragent();
if (isset($jsonData['orders'][$index19]['contragent']['contragentType'])) {
    $model->orders[$index19]->contragent->contragentType = $jsonData['orders'][$index19]['contragent']['contragentType'];

}
if (isset($jsonData['orders'][$index19]['contragent']['legalName'])) {
    $model->orders[$index19]->contragent->legalName = $jsonData['orders'][$index19]['contragent']['legalName'];

}
if (isset($jsonData['orders'][$index19]['contragent']['legalAddress'])) {
    $model->orders[$index19]->contragent->legalAddress = $jsonData['orders'][$index19]['contragent']['legalAddress'];

}
if (isset($jsonData['orders'][$index19]['contragent']['INN'])) {
    $model->orders[$index19]->contragent->INN = $jsonData['orders'][$index19]['contragent']['INN'];

}
if (isset($jsonData['orders'][$index19]['contragent']['OKPO'])) {
    $model->orders[$index19]->contragent->OKPO = $jsonData['orders'][$index19]['contragent']['OKPO'];

}
if (isset($jsonData['orders'][$index19]['contragent']['KPP'])) {
    $model->orders[$index19]->contragent->KPP = $jsonData['orders'][$index19]['contragent']['KPP'];

}
if (isset($jsonData['orders'][$index19]['contragent']['OGRN'])) {
    $model->orders[$index19]->contragent->OGRN = $jsonData['orders'][$index19]['contragent']['OGRN'];

}
if (isset($jsonData['orders'][$index19]['contragent']['OGRNIP'])) {
    $model->orders[$index19]->contragent->OGRNIP = $jsonData['orders'][$index19]['contragent']['OGRNIP'];

}
if (isset($jsonData['orders'][$index19]['contragent']['certificateNumber'])) {
    $model->orders[$index19]->contragent->certificateNumber = $jsonData['orders'][$index19]['contragent']['certificateNumber'];

}
if (isset($jsonData['orders'][$index19]['contragent']['certificateDate'])) {
    $model->orders[$index19]->contragent->certificateDate = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['orders'][$index19]['contragent']['certificateDate']);

}
if (isset($jsonData['orders'][$index19]['contragent']['BIK'])) {
    $model->orders[$index19]->contragent->BIK = $jsonData['orders'][$index19]['contragent']['BIK'];

}
if (isset($jsonData['orders'][$index19]['contragent']['bank'])) {
    $model->orders[$index19]->contragent->bank = $jsonData['orders'][$index19]['contragent']['bank'];

}
if (isset($jsonData['orders'][$index19]['contragent']['bankAddress'])) {
    $model->orders[$index19]->contragent->bankAddress = $jsonData['orders'][$index19]['contragent']['bankAddress'];

}
if (isset($jsonData['orders'][$index19]['contragent']['corrAccount'])) {
    $model->orders[$index19]->contragent->corrAccount = $jsonData['orders'][$index19]['contragent']['corrAccount'];

}
if (isset($jsonData['orders'][$index19]['contragent']['bankAccount'])) {
    $model->orders[$index19]->contragent->bankAccount = $jsonData['orders'][$index19]['contragent']['bankAccount'];

}


}
if (isset($jsonData['orders'][$index19]['delivery'])) {
    
$model->orders[$index19]->delivery = new RetailCrm\Api\Model\Entity\Orders\Delivery\SerializedOrderDelivery();
if (isset($jsonData['orders'][$index19]['delivery']['code'])) {
    $model->orders[$index19]->delivery->code = $jsonData['orders'][$index19]['delivery']['code'];

}
if (isset($jsonData['orders'][$index19]['delivery']['integrationCode'])) {
    $model->orders[$index19]->delivery->integrationCode = $jsonData['orders'][$index19]['delivery']['integrationCode'];

}
if (isset($jsonData['orders'][$index19]['delivery']['data'])) {
    
$model->orders[$index19]->delivery->data = new RetailCrm\Api\Model\Entity\Orders\Delivery\DeliveryData();
if (isset($jsonData['orders'][$index19]['delivery']['data']['externalId'])) {
    $model->orders[$index19]->delivery->data->externalId = $jsonData['orders'][$index19]['delivery']['data']['externalId'];

}
if (isset($jsonData['orders'][$index19]['delivery']['data']['trackNumber'])) {
    $model->orders[$index19]->delivery->data->trackNumber = $jsonData['orders'][$index19]['delivery']['data']['trackNumber'];

}
if (isset($jsonData['orders'][$index19]['delivery']['data']['status'])) {
    $model->orders[$index19]->delivery->data->status = $jsonData['orders'][$index19]['delivery']['data']['status'];

}
if (isset($jsonData['orders'][$index19]['delivery']['data']['locked'])) {
    $model->orders[$index19]->delivery->data->locked = $jsonData['orders'][$index19]['delivery']['data']['locked'];

}
if (isset($jsonData['orders'][$index19]['delivery']['data']['pickuppointAddress'])) {
    $model->orders[$index19]->delivery->data->pickuppointAddress = $jsonData['orders'][$index19]['delivery']['data']['pickuppointAddress'];

}
if (isset($jsonData['orders'][$index19]['delivery']['data']['days'])) {
    $model->orders[$index19]->delivery->data->days = $jsonData['orders'][$index19]['delivery']['data']['days'];

}
if (isset($jsonData['orders'][$index19]['delivery']['data']['statusText'])) {
    $model->orders[$index19]->delivery->data->statusText = $jsonData['orders'][$index19]['delivery']['data']['statusText'];

}
if (isset($jsonData['orders'][$index19]['delivery']['data']['statusDate'])) {
    $model->orders[$index19]->delivery->data->statusDate = \DateTime::createFromFormat('Y-m-d', $jsonData['orders'][$index19]['delivery']['data']['statusDate']);

}
if (isset($jsonData['orders'][$index19]['delivery']['data']['tariff'])) {
    $model->orders[$index19]->delivery->data->tariff = $jsonData['orders'][$index19]['delivery']['data']['tariff'];

}
if (isset($jsonData['orders'][$index19]['delivery']['data']['tariffName'])) {
    $model->orders[$index19]->delivery->data->tariffName = $jsonData['orders'][$index19]['delivery']['data']['tariffName'];

}
if (isset($jsonData['orders'][$index19]['delivery']['data']['pickuppointId'])) {
    $model->orders[$index19]->delivery->data->pickuppointId = $jsonData['orders'][$index19]['delivery']['data']['pickuppointId'];

}
if (isset($jsonData['orders'][$index19]['delivery']['data']['pickuppointSchedule'])) {
    $model->orders[$index19]->delivery->data->pickuppointSchedule = $jsonData['orders'][$index19]['delivery']['data']['pickuppointSchedule'];

}
if (isset($jsonData['orders'][$index19]['delivery']['data']['pickuppointPhone'])) {
    $model->orders[$index19]->delivery->data->pickuppointPhone = $jsonData['orders'][$index19]['delivery']['data']['pickuppointPhone'];

}
if (isset($jsonData['orders'][$index19]['delivery']['data']['payerType'])) {
    $model->orders[$index19]->delivery->data->payerType = $jsonData['orders'][$index19]['delivery']['data']['payerType'];

}
if (isset($jsonData['orders'][$index19]['delivery']['data']['statusComment'])) {
    $model->orders[$index19]->delivery->data->statusComment = $jsonData['orders'][$index19]['delivery']['data']['statusComment'];

}
if (isset($jsonData['orders'][$index19]['delivery']['data']['cost'])) {
    $model->orders[$index19]->delivery->data->cost = (float) $jsonData['orders'][$index19]['delivery']['data']['cost'];

}
if (isset($jsonData['orders'][$index19]['delivery']['data']['minTerm'])) {
    $model->orders[$index19]->delivery->data->minTerm = $jsonData['orders'][$index19]['delivery']['data']['minTerm'];

}
if (isset($jsonData['orders'][$index19]['delivery']['data']['maxTerm'])) {
    $model->orders[$index19]->delivery->data->maxTerm = $jsonData['orders'][$index19]['delivery']['data']['maxTerm'];

}
if (isset($jsonData['orders'][$index19]['delivery']['data']['shipmentpointId'])) {
    $model->orders[$index19]->delivery->data->shipmentpointId = $jsonData['orders'][$index19]['delivery']['data']['shipmentpointId'];

}
if (isset($jsonData['orders'][$index19]['delivery']['data']['shipmentpointName'])) {
    $model->orders[$index19]->delivery->data->shipmentpointName = $jsonData['orders'][$index19]['delivery']['data']['shipmentpointName'];

}
if (isset($jsonData['orders'][$index19]['delivery']['data']['shipmentpointAddress'])) {
    $model->orders[$index19]->delivery->data->shipmentpointAddress = $jsonData['orders'][$index19]['delivery']['data']['shipmentpointAddress'];

}
if (isset($jsonData['orders'][$index19]['delivery']['data']['shipmentpointSchedule'])) {
    $model->orders[$index19]->delivery->data->shipmentpointSchedule = $jsonData['orders'][$index19]['delivery']['data']['shipmentpointSchedule'];

}
if (isset($jsonData['orders'][$index19]['delivery']['data']['shipmentpointPhone'])) {
    $model->orders[$index19]->delivery->data->shipmentpointPhone = $jsonData['orders'][$index19]['delivery']['data']['shipmentpointPhone'];

}
if (isset($jsonData['orders'][$index19]['delivery']['data']['shipmentpointCoordinateLatitude'])) {
    $model->orders[$index19]->delivery->data->shipmentpointCoordinateLatitude = $jsonData['orders'][$index19]['delivery']['data']['shipmentpointCoordinateLatitude'];

}
if (isset($jsonData['orders'][$index19]['delivery']['data']['shipmentpointCoordinateLongitude'])) {
    $model->orders[$index19]->delivery->data->shipmentpointCoordinateLongitude = $jsonData['orders'][$index19]['delivery']['data']['shipmentpointCoordinateLongitude'];

}
if (isset($jsonData['orders'][$index19]['delivery']['data']['pickuppointName'])) {
    $model->orders[$index19]->delivery->data->pickuppointName = $jsonData['orders'][$index19]['delivery']['data']['pickuppointName'];

}
if (isset($jsonData['orders'][$index19]['delivery']['data']['pickuppointCoordinateLatitude'])) {
    $model->orders[$index19]->delivery->data->pickuppointCoordinateLatitude = $jsonData['orders'][$index19]['delivery']['data']['pickuppointCoordinateLatitude'];

}
if (isset($jsonData['orders'][$index19]['delivery']['data']['pickuppointCoordinateLongitude'])) {
    $model->orders[$index19]->delivery->data->pickuppointCoordinateLongitude = $jsonData['orders'][$index19]['delivery']['data']['pickuppointCoordinateLongitude'];

}
if (isset($jsonData['orders'][$index19]['delivery']['data']['extraData'])) {
    $model->orders[$index19]->delivery->data->extraData = [];
foreach (array_keys($jsonData['orders'][$index19]['delivery']['data']['extraData']) as $index62) {
    $model->orders[$index19]->delivery->data->extraData[$index62] = $jsonData['orders'][$index19]['delivery']['data']['extraData'][$index62];

}

}
if (isset($jsonData['orders'][$index19]['delivery']['data']['packages'])) {
    $model->orders[$index19]->delivery->data->packages = [];
foreach (array_keys($jsonData['orders'][$index19]['delivery']['data']['packages']) as $index61) {
    
$model->orders[$index19]->delivery->data->packages[$index61] = new RetailCrm\Api\Model\Entity\Orders\Delivery\Package();
if (isset($jsonData['orders'][$index19]['delivery']['data']['packages'][$index61]['packageId'])) {
    $model->orders[$index19]->delivery->data->packages[$index61]->packageId = $jsonData['orders'][$index19]['delivery']['data']['packages'][$index61]['packageId'];

}
if (isset($jsonData['orders'][$index19]['delivery']['data']['packages'][$index61]['weight'])) {
    $model->orders[$index19]->delivery->data->packages[$index61]->weight = (float) $jsonData['orders'][$index19]['delivery']['data']['packages'][$index61]['weight'];

}
if (isset($jsonData['orders'][$index19]['delivery']['data']['packages'][$index61]['length'])) {
    $model->orders[$index19]->delivery->data->packages[$index61]->length = $jsonData['orders'][$index19]['delivery']['data']['packages'][$index61]['length'];

}
if (isset($jsonData['orders'][$index19]['delivery']['data']['packages'][$index61]['width'])) {
    $model->orders[$index19]->delivery->data->packages[$index61]->width = $jsonData['orders'][$index19]['delivery']['data']['packages'][$index61]['width'];

}
if (isset($jsonData['orders'][$index19]['delivery']['data']['packages'][$index61]['height'])) {
    $model->orders[$index19]->delivery->data->packages[$index61]->height = $jsonData['orders'][$index19]['delivery']['data']['packages'][$index61]['height'];

}
if (isset($jsonData['orders'][$index19]['delivery']['data']['packages'][$index61]['items'])) {
    $model->orders[$index19]->delivery->data->packages[$index61]->items = [];
foreach (array_keys($jsonData['orders'][$index19]['delivery']['data']['packages'][$index61]['items']) as $index80) {
    
$model->orders[$index19]->delivery->data->packages[$index61]->items[$index80] = new RetailCrm\Api\Model\Entity\Orders\Delivery\PackageItem();
if (isset($jsonData['orders'][$index19]['delivery']['data']['packages'][$index61]['items'][$index80]['orderProduct'])) {
    
$model->orders[$index19]->delivery->data->packages[$index61]->items[$index80]->orderProduct = new RetailCrm\Api\Model\Entity\Orders\Delivery\PackageItemOrderProduct();
if (isset($jsonData['orders'][$index19]['delivery']['data']['packages'][$index61]['items'][$index80]['orderProduct']['id'])) {
    $model->orders[$index19]->delivery->data->packages[$index61]->items[$index80]->orderProduct->id = $jsonData['orders'][$index19]['delivery']['data']['packages'][$index61]['items'][$index80]['orderProduct']['id'];

}
if (isset($jsonData['orders'][$index19]['delivery']['data']['packages'][$index61]['items'][$index80]['orderProduct']['externalId'])) {
    $model->orders[$index19]->delivery->data->packages[$index61]->items[$index80]->orderProduct->externalId = $jsonData['orders'][$index19]['delivery']['data']['packages'][$index61]['items'][$index80]['orderProduct']['externalId'];

}
if (isset($jsonData['orders'][$index19]['delivery']['data']['packages'][$index61]['items'][$index80]['orderProduct']['externalIds'])) {
    $model->orders[$index19]->delivery->data->packages[$index61]->items[$index80]->orderProduct->externalIds = [];
foreach (array_keys($jsonData['orders'][$index19]['delivery']['data']['packages'][$index61]['items'][$index80]['orderProduct']['externalIds']) as $index121) {
    
$model->orders[$index19]->delivery->data->packages[$index61]->items[$index80]->orderProduct->externalIds[$index121] = new RetailCrm\Api\Model\Entity\CodeValueModel();
if (isset($jsonData['orders'][$index19]['delivery']['data']['packages'][$index61]['items'][$index80]['orderProduct']['externalIds'][$index121]['code'])) {
    $model->orders[$index19]->delivery->data->packages[$index61]->items[$index80]->orderProduct->externalIds[$index121]->code = $jsonData['orders'][$index19]['delivery']['data']['packages'][$index61]['items'][$index80]['orderProduct']['externalIds'][$index121]['code'];

}
if (isset($jsonData['orders'][$index19]['delivery']['data']['packages'][$index61]['items'][$index80]['orderProduct']['externalIds'][$index121]['value'])) {
    $model->orders[$index19]->delivery->data->packages[$index61]->items[$index80]->orderProduct->externalIds[$index121]->value = $jsonData['orders'][$index19]['delivery']['data']['packages'][$index61]['items'][$index80]['orderProduct']['externalIds'][$index121]['value'];

}


}

}


}
if (isset($jsonData['orders'][$index19]['delivery']['data']['packages'][$index61]['items'][$index80]['quantity'])) {
    $model->orders[$index19]->delivery->data->packages[$index61]->items[$index80]->quantity = (float) $jsonData['orders'][$index19]['delivery']['data']['packages'][$index61]['items'][$index80]['quantity'];

}


}

}


}

}
if (isset($jsonData['orders'][$index19]['delivery']['data']['returnExternalId'])) {
    $model->orders[$index19]->delivery->data->returnExternalId = $jsonData['orders'][$index19]['delivery']['data']['returnExternalId'];

}
if (isset($jsonData['orders'][$index19]['delivery']['data']['deliveryName'])) {
    $model->orders[$index19]->delivery->data->deliveryName = $jsonData['orders'][$index19]['delivery']['data']['deliveryName'];

}
if (isset($jsonData['orders'][$index19]['delivery']['data']['price'])) {
    $model->orders[$index19]->delivery->data->price = (float) $jsonData['orders'][$index19]['delivery']['data']['price'];

}
if (isset($jsonData['orders'][$index19]['delivery']['data']['insurancePrice'])) {
    $model->orders[$index19]->delivery->data->insurancePrice = (float) $jsonData['orders'][$index19]['delivery']['data']['insurancePrice'];

}
if (isset($jsonData['orders'][$index19]['delivery']['data']['tariffType'])) {
    $model->orders[$index19]->delivery->data->tariffType = $jsonData['orders'][$index19]['delivery']['data']['tariffType'];

}
if (isset($jsonData['orders'][$index19]['delivery']['data']['receiverCity'])) {
    $model->orders[$index19]->delivery->data->receiverCity = $jsonData['orders'][$index19]['delivery']['data']['receiverCity'];

}
if (isset($jsonData['orders'][$index19]['delivery']['data']['services'])) {
    $model->orders[$index19]->delivery->data->services = [];
foreach (array_keys($jsonData['orders'][$index19]['delivery']['data']['services']) as $index61) {
    $model->orders[$index19]->delivery->data->services[$index61] = $jsonData['orders'][$index19]['delivery']['data']['services'][$index61];

}

}
if (isset($jsonData['orders'][$index19]['delivery']['data']['packageNumber'])) {
    $model->orders[$index19]->delivery->data->packageNumber = $jsonData['orders'][$index19]['delivery']['data']['packageNumber'];

}
if (isset($jsonData['orders'][$index19]['delivery']['data']['comment'])) {
    $model->orders[$index19]->delivery->data->comment = $jsonData['orders'][$index19]['delivery']['data']['comment'];

}
if (isset($jsonData['orders'][$index19]['delivery']['data']['deliveryCode'])) {
    $model->orders[$index19]->delivery->data->deliveryCode = $jsonData['orders'][$index19]['delivery']['data']['deliveryCode'];

}
if (isset($jsonData['orders'][$index19]['delivery']['data']['notes'])) {
    $model->orders[$index19]->delivery->data->notes = $jsonData['orders'][$index19]['delivery']['data']['notes'];

}
if (isset($jsonData['orders'][$index19]['delivery']['data']['id'])) {
    $model->orders[$index19]->delivery->data->id = $jsonData['orders'][$index19]['delivery']['data']['id'];

}
if (isset($jsonData['orders'][$index19]['delivery']['data']['firstName'])) {
    $model->orders[$index19]->delivery->data->firstName = $jsonData['orders'][$index19]['delivery']['data']['firstName'];

}
if (isset($jsonData['orders'][$index19]['delivery']['data']['lastName'])) {
    $model->orders[$index19]->delivery->data->lastName = $jsonData['orders'][$index19]['delivery']['data']['lastName'];

}
if (isset($jsonData['orders'][$index19]['delivery']['data']['patronymic'])) {
    $model->orders[$index19]->delivery->data->patronymic = $jsonData['orders'][$index19]['delivery']['data']['patronymic'];

}
if (isset($jsonData['orders'][$index19]['delivery']['data']['active'])) {
    $model->orders[$index19]->delivery->data->active = $jsonData['orders'][$index19]['delivery']['data']['active'];

}
if (isset($jsonData['orders'][$index19]['delivery']['data']['email'])) {
    $model->orders[$index19]->delivery->data->email = $jsonData['orders'][$index19]['delivery']['data']['email'];

}
if (isset($jsonData['orders'][$index19]['delivery']['data']['phone'])) {
    
$model->orders[$index19]->delivery->data->phone = new RetailCrm\Api\Model\Entity\Orders\Delivery\CourierPhone();
if (isset($jsonData['orders'][$index19]['delivery']['data']['phone']['number'])) {
    $model->orders[$index19]->delivery->data->phone->number = $jsonData['orders'][$index19]['delivery']['data']['phone']['number'];

}


}
if (isset($jsonData['orders'][$index19]['delivery']['data']['description'])) {
    $model->orders[$index19]->delivery->data->description = $jsonData['orders'][$index19]['delivery']['data']['description'];

}
if (isset($jsonData['orders'][$index19]['delivery']['data']['courierId'])) {
    $model->orders[$index19]->delivery->data->courierId = $jsonData['orders'][$index19]['delivery']['data']['courierId'];

}
if (isset($jsonData['orders'][$index19]['delivery']['data']['serviceType'])) {
    $model->orders[$index19]->delivery->data->serviceType = $jsonData['orders'][$index19]['delivery']['data']['serviceType'];

}
if (isset($jsonData['orders'][$index19]['delivery']['data']['pickuppoint'])) {
    $model->orders[$index19]->delivery->data->pickuppoint = $jsonData['orders'][$index19]['delivery']['data']['pickuppoint'];

}
if (isset($jsonData['orders'][$index19]['delivery']['data']['receiverWarehouseTypeRef'])) {
    $model->orders[$index19]->delivery->data->receiverWarehouseTypeRef = $jsonData['orders'][$index19]['delivery']['data']['receiverWarehouseTypeRef'];

}
if (isset($jsonData['orders'][$index19]['delivery']['data']['statusName'])) {
    $model->orders[$index19]->delivery->data->statusName = $jsonData['orders'][$index19]['delivery']['data']['statusName'];

}
if (isset($jsonData['orders'][$index19]['delivery']['data']['receiverCityRef'])) {
    $model->orders[$index19]->delivery->data->receiverCityRef = $jsonData['orders'][$index19]['delivery']['data']['receiverCityRef'];

}
if (isset($jsonData['orders'][$index19]['delivery']['data']['receiverStreet'])) {
    $model->orders[$index19]->delivery->data->receiverStreet = $jsonData['orders'][$index19]['delivery']['data']['receiverStreet'];

}
if (isset($jsonData['orders'][$index19]['delivery']['data']['receiverStreetRef'])) {
    $model->orders[$index19]->delivery->data->receiverStreetRef = $jsonData['orders'][$index19]['delivery']['data']['receiverStreetRef'];

}
if (isset($jsonData['orders'][$index19]['delivery']['data']['seatsAmount'])) {
    $model->orders[$index19]->delivery->data->seatsAmount = $jsonData['orders'][$index19]['delivery']['data']['seatsAmount'];

}
if (isset($jsonData['orders'][$index19]['delivery']['data']['cargoType'])) {
    $model->orders[$index19]->delivery->data->cargoType = $jsonData['orders'][$index19]['delivery']['data']['cargoType'];

}
if (isset($jsonData['orders'][$index19]['delivery']['data']['cargoDescription'])) {
    $model->orders[$index19]->delivery->data->cargoDescription = $jsonData['orders'][$index19]['delivery']['data']['cargoDescription'];

}
if (isset($jsonData['orders'][$index19]['delivery']['data']['cashPayerType'])) {
    $model->orders[$index19]->delivery->data->cashPayerType = $jsonData['orders'][$index19]['delivery']['data']['cashPayerType'];

}
if (isset($jsonData['orders'][$index19]['delivery']['data']['paymentForm'])) {
    $model->orders[$index19]->delivery->data->paymentForm = $jsonData['orders'][$index19]['delivery']['data']['paymentForm'];

}
if (isset($jsonData['orders'][$index19]['delivery']['data']['ownershipForm'])) {
    $model->orders[$index19]->delivery->data->ownershipForm = $jsonData['orders'][$index19]['delivery']['data']['ownershipForm'];

}
if (isset($jsonData['orders'][$index19]['delivery']['data']['accompanyingDocument'])) {
    $model->orders[$index19]->delivery->data->accompanyingDocument = $jsonData['orders'][$index19]['delivery']['data']['accompanyingDocument'];

}
if (isset($jsonData['orders'][$index19]['delivery']['data']['preferredDeliveryDate'])) {
    $model->orders[$index19]->delivery->data->preferredDeliveryDate = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['orders'][$index19]['delivery']['data']['preferredDeliveryDate']);

}
if (isset($jsonData['orders'][$index19]['delivery']['data']['timeInterval'])) {
    $model->orders[$index19]->delivery->data->timeInterval = $jsonData['orders'][$index19]['delivery']['data']['timeInterval'];

}
if (isset($jsonData['orders'][$index19]['delivery']['data']['saturdayDelivery'])) {
    $model->orders[$index19]->delivery->data->saturdayDelivery = $jsonData['orders'][$index19]['delivery']['data']['saturdayDelivery'];

}
if (isset($jsonData['orders'][$index19]['delivery']['data']['deliveryDate'])) {
    $model->orders[$index19]->delivery->data->deliveryDate = $jsonData['orders'][$index19]['delivery']['data']['deliveryDate'];

}
if (isset($jsonData['orders'][$index19]['delivery']['data']['denieReason'])) {
    $model->orders[$index19]->delivery->data->denieReason = $jsonData['orders'][$index19]['delivery']['data']['denieReason'];

}
if (isset($jsonData['orders'][$index19]['delivery']['data']['backwardDelivery'])) {
    $model->orders[$index19]->delivery->data->backwardDelivery = $jsonData['orders'][$index19]['delivery']['data']['backwardDelivery'];

}
if (isset($jsonData['orders'][$index19]['delivery']['data']['backwardDeliveryCargoType'])) {
    $model->orders[$index19]->delivery->data->backwardDeliveryCargoType = $jsonData['orders'][$index19]['delivery']['data']['backwardDeliveryCargoType'];

}
if (isset($jsonData['orders'][$index19]['delivery']['data']['backwardDeliveryPayerType'])) {
    $model->orders[$index19]->delivery->data->backwardDeliveryPayerType = $jsonData['orders'][$index19]['delivery']['data']['backwardDeliveryPayerType'];

}
if (isset($jsonData['orders'][$index19]['delivery']['data']['backwardDeliveryRedeliveryString'])) {
    $model->orders[$index19]->delivery->data->backwardDeliveryRedeliveryString = $jsonData['orders'][$index19]['delivery']['data']['backwardDeliveryRedeliveryString'];

}
if (isset($jsonData['orders'][$index19]['delivery']['data']['afterpaymentOnGoodsCost'])) {
    $model->orders[$index19]->delivery->data->afterpaymentOnGoodsCost = (float) $jsonData['orders'][$index19]['delivery']['data']['afterpaymentOnGoodsCost'];

}
if (isset($jsonData['orders'][$index19]['delivery']['data']['declaredValue'])) {
    $model->orders[$index19]->delivery->data->declaredValue = (float) $jsonData['orders'][$index19]['delivery']['data']['declaredValue'];

}
if (isset($jsonData['orders'][$index19]['delivery']['data']['sendDate'])) {
    $model->orders[$index19]->delivery->data->sendDate = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['orders'][$index19]['delivery']['data']['sendDate']);

}
if (isset($jsonData['orders'][$index19]['delivery']['data']['deliveryType'])) {
    $model->orders[$index19]->delivery->data->deliveryType = $jsonData['orders'][$index19]['delivery']['data']['deliveryType'];

}
if (isset($jsonData['orders'][$index19]['delivery']['data']['pickupType'])) {
    $model->orders[$index19]->delivery->data->pickupType = $jsonData['orders'][$index19]['delivery']['data']['pickupType'];

}
if (isset($jsonData['orders'][$index19]['delivery']['data']['pickuppointDescription'])) {
    $model->orders[$index19]->delivery->data->pickuppointDescription = $jsonData['orders'][$index19]['delivery']['data']['pickuppointDescription'];

}
if (isset($jsonData['orders'][$index19]['delivery']['data']['placesCount'])) {
    $model->orders[$index19]->delivery->data->placesCount = $jsonData['orders'][$index19]['delivery']['data']['placesCount'];

}
if (isset($jsonData['orders'][$index19]['delivery']['data']['service'])) {
    $model->orders[$index19]->delivery->data->service = $jsonData['orders'][$index19]['delivery']['data']['service'];

}


}
if (isset($jsonData['orders'][$index19]['delivery']['service'])) {
    
$model->orders[$index19]->delivery->service = new RetailCrm\Api\Model\Entity\Orders\Delivery\SerializedDeliveryService();
if (isset($jsonData['orders'][$index19]['delivery']['service']['name'])) {
    $model->orders[$index19]->delivery->service->name = $jsonData['orders'][$index19]['delivery']['service']['name'];

}
if (isset($jsonData['orders'][$index19]['delivery']['service']['code'])) {
    $model->orders[$index19]->delivery->service->code = $jsonData['orders'][$index19]['delivery']['service']['code'];

}
if (isset($jsonData['orders'][$index19]['delivery']['service']['active'])) {
    $model->orders[$index19]->delivery->service->active = $jsonData['orders'][$index19]['delivery']['service']['active'];

}


}
if (isset($jsonData['orders'][$index19]['delivery']['cost'])) {
    $model->orders[$index19]->delivery->cost = (float) $jsonData['orders'][$index19]['delivery']['cost'];

}
if (isset($jsonData['orders'][$index19]['delivery']['netCost'])) {
    $model->orders[$index19]->delivery->netCost = (float) $jsonData['orders'][$index19]['delivery']['netCost'];

}
if (isset($jsonData['orders'][$index19]['delivery']['date'])) {
    $model->orders[$index19]->delivery->date = \DateTime::createFromFormat('Y-m-d', $jsonData['orders'][$index19]['delivery']['date']);

}
if (isset($jsonData['orders'][$index19]['delivery']['time'])) {
    
$model->orders[$index19]->delivery->time = new RetailCrm\Api\Model\Entity\Delivery\TimeInterval();
if (isset($jsonData['orders'][$index19]['delivery']['time']['from'])) {
    $model->orders[$index19]->delivery->time->from = \DateTime::createFromFormat('H:i', $jsonData['orders'][$index19]['delivery']['time']['from']);

}
if (isset($jsonData['orders'][$index19]['delivery']['time']['to'])) {
    $model->orders[$index19]->delivery->time->to = \DateTime::createFromFormat('H:i', $jsonData['orders'][$index19]['delivery']['time']['to']);

}
if (isset($jsonData['orders'][$index19]['delivery']['time']['custom'])) {
    $model->orders[$index19]->delivery->time->custom = $jsonData['orders'][$index19]['delivery']['time']['custom'];

}


}
if (isset($jsonData['orders'][$index19]['delivery']['address'])) {
    
$model->orders[$index19]->delivery->address = new RetailCrm\Api\Model\Entity\Orders\Delivery\OrderDeliveryAddress();
if (isset($jsonData['orders'][$index19]['delivery']['address']['id'])) {
    $model->orders[$index19]->delivery->address->id = $jsonData['orders'][$index19]['delivery']['address']['id'];

}
if (isset($jsonData['orders'][$index19]['delivery']['address']['index'])) {
    $model->orders[$index19]->delivery->address->index = $jsonData['orders'][$index19]['delivery']['address']['index'];

}
if (isset($jsonData['orders'][$index19]['delivery']['address']['countryIso'])) {
    $model->orders[$index19]->delivery->address->countryIso = $jsonData['orders'][$index19]['delivery']['address']['countryIso'];

}
if (isset($jsonData['orders'][$index19]['delivery']['address']['region'])) {
    $model->orders[$index19]->delivery->address->region = $jsonData['orders'][$index19]['delivery']['address']['region'];

}
if (isset($jsonData['orders'][$index19]['delivery']['address']['regionId'])) {
    $model->orders[$index19]->delivery->address->regionId = $jsonData['orders'][$index19]['delivery']['address']['regionId'];

}
if (isset($jsonData['orders'][$index19]['delivery']['address']['city'])) {
    $model->orders[$index19]->delivery->address->city = $jsonData['orders'][$index19]['delivery']['address']['city'];

}
if (isset($jsonData['orders'][$index19]['delivery']['address']['cityId'])) {
    $model->orders[$index19]->delivery->address->cityId = $jsonData['orders'][$index19]['delivery']['address']['cityId'];

}
if (isset($jsonData['orders'][$index19]['delivery']['address']['cityType'])) {
    $model->orders[$index19]->delivery->address->cityType = $jsonData['orders'][$index19]['delivery']['address']['cityType'];

}
if (isset($jsonData['orders'][$index19]['delivery']['address']['street'])) {
    $model->orders[$index19]->delivery->address->street = $jsonData['orders'][$index19]['delivery']['address']['street'];

}
if (isset($jsonData['orders'][$index19]['delivery']['address']['streetId'])) {
    $model->orders[$index19]->delivery->address->streetId = $jsonData['orders'][$index19]['delivery']['address']['streetId'];

}
if (isset($jsonData['orders'][$index19]['delivery']['address']['streetType'])) {
    $model->orders[$index19]->delivery->address->streetType = $jsonData['orders'][$index19]['delivery']['address']['streetType'];

}
if (isset($jsonData['orders'][$index19]['delivery']['address']['building'])) {
    $model->orders[$index19]->delivery->address->building = $jsonData['orders'][$index19]['delivery']['address']['building'];

}
if (isset($jsonData['orders'][$index19]['delivery']['address']['flat'])) {
    $model->orders[$index19]->delivery->address->flat = $jsonData['orders'][$index19]['delivery']['address']['flat'];

}
if (isset($jsonData['orders'][$index19]['delivery']['address']['floor'])) {
    $model->orders[$index19]->delivery->address->floor = $jsonData['orders'][$index19]['delivery']['address']['floor'];

}
if (isset($jsonData['orders'][$index19]['delivery']['address']['block'])) {
    $model->orders[$index19]->delivery->address->block = $jsonData['orders'][$index19]['delivery']['address']['block'];

}
if (isset($jsonData['orders'][$index19]['delivery']['address']['house'])) {
    $model->orders[$index19]->delivery->address->house = $jsonData['orders'][$index19]['delivery']['address']['house'];

}
if (isset($jsonData['orders'][$index19]['delivery']['address']['housing'])) {
    $model->orders[$index19]->delivery->address->housing = $jsonData['orders'][$index19]['delivery']['address']['housing'];

}
if (isset($jsonData['orders'][$index19]['delivery']['address']['metro'])) {
    $model->orders[$index19]->delivery->address->metro = $jsonData['orders'][$index19]['delivery']['address']['metro'];

}
if (isset($jsonData['orders'][$index19]['delivery']['address']['text'])) {
    $model->orders[$index19]->delivery->address->text = $jsonData['orders'][$index19]['delivery']['address']['text'];

}
if (isset($jsonData['orders'][$index19]['delivery']['address']['notes'])) {
    $model->orders[$index19]->delivery->address->notes = $jsonData['orders'][$index19]['delivery']['address']['notes'];

}


}
if (isset($jsonData['orders'][$index19]['delivery']['vatRate'])) {
    $model->orders[$index19]->delivery->vatRate = $jsonData['orders'][$index19]['delivery']['vatRate'];

}


}
if (isset($jsonData['orders'][$index19]['marketplace'])) {
    
$model->orders[$index19]->marketplace = new RetailCrm\Api\Model\Entity\Orders\MarketplaceData();
if (isset($jsonData['orders'][$index19]['marketplace']['code'])) {
    $model->orders[$index19]->marketplace->code = $jsonData['orders'][$index19]['marketplace']['code'];

}
if (isset($jsonData['orders'][$index19]['marketplace']['orderId'])) {
    $model->orders[$index19]->marketplace->orderId = $jsonData['orders'][$index19]['marketplace']['orderId'];

}


}
if (isset($jsonData['orders'][$index19]['site'])) {
    $model->orders[$index19]->site = $jsonData['orders'][$index19]['site'];

}
if (isset($jsonData['orders'][$index19]['status'])) {
    $model->orders[$index19]->status = $jsonData['orders'][$index19]['status'];

}
if (isset($jsonData['orders'][$index19]['statusComment'])) {
    $model->orders[$index19]->statusComment = $jsonData['orders'][$index19]['statusComment'];

}
if (isset($jsonData['orders'][$index19]['source'])) {
    
$model->orders[$index19]->source = new RetailCrm\Api\Model\Entity\Source();
if (isset($jsonData['orders'][$index19]['source']['source'])) {
    $model->orders[$index19]->source->source = $jsonData['orders'][$index19]['source']['source'];

}
if (isset($jsonData['orders'][$index19]['source']['medium'])) {
    $model->orders[$index19]->source->medium = $jsonData['orders'][$index19]['source']['medium'];

}
if (isset($jsonData['orders'][$index19]['source']['campaign'])) {
    $model->orders[$index19]->source->campaign = $jsonData['orders'][$index19]['source']['campaign'];

}
if (isset($jsonData['orders'][$index19]['source']['keyword'])) {
    $model->orders[$index19]->source->keyword = $jsonData['orders'][$index19]['source']['keyword'];

}
if (isset($jsonData['orders'][$index19]['source']['content'])) {
    $model->orders[$index19]->source->content = $jsonData['orders'][$index19]['source']['content'];

}


}
if (isset($jsonData['orders'][$index19]['items'])) {
    $model->orders[$index19]->items = [];
foreach (array_keys($jsonData['orders'][$index19]['items']) as $index38) {
    
$model->orders[$index19]->items[$index38] = new RetailCrm\Api\Model\Entity\Orders\Items\OrderProduct();
if (isset($jsonData['orders'][$index19]['items'][$index38]['externalId'])) {
    $model->orders[$index19]->items[$index38]->externalId = $jsonData['orders'][$index19]['items'][$index38]['externalId'];

}
if (isset($jsonData['orders'][$index19]['items'][$index38]['markingCodes'])) {
    $model->orders[$index19]->items[$index38]->markingCodes = [];
foreach (array_keys($jsonData['orders'][$index19]['items'][$index38]['markingCodes']) as $index64) {
    $model->orders[$index19]->items[$index38]->markingCodes[$index64] = $jsonData['orders'][$index19]['items'][$index38]['markingCodes'][$index64];

}

}
if (isset($jsonData['orders'][$index19]['items'][$index38]['id'])) {
    $model->orders[$index19]->items[$index38]->id = $jsonData['orders'][$index19]['items'][$index38]['id'];

}
if (isset($jsonData['orders'][$index19]['items'][$index38]['externalIds'])) {
    $model->orders[$index19]->items[$index38]->externalIds = [];
foreach (array_keys($jsonData['orders'][$index19]['items'][$index38]['externalIds']) as $index63) {
    
$model->orders[$index19]->items[$index38]->externalIds[$index63] = new RetailCrm\Api\Model\Entity\CodeValueModel();
if (isset($jsonData['orders'][$index19]['items'][$index38]['externalIds'][$index63]['code'])) {
    $model->orders[$index19]->items[$index38]->externalIds[$index63]->code = $jsonData['orders'][$index19]['items'][$index38]['externalIds'][$index63]['code'];

}
if (isset($jsonData['orders'][$index19]['items'][$index38]['externalIds'][$index63]['value'])) {
    $model->orders[$index19]->items[$index38]->externalIds[$index63]->value = $jsonData['orders'][$index19]['items'][$index38]['externalIds'][$index63]['value'];

}


}

}
if (isset($jsonData['orders'][$index19]['items'][$index38]['priceType'])) {
    
$model->orders[$index19]->items[$index38]->priceType = new RetailCrm\Api\Model\Entity\Orders\Items\PriceType();
if (isset($jsonData['orders'][$index19]['items'][$index38]['priceType']['code'])) {
    $model->orders[$index19]->items[$index38]->priceType->code = $jsonData['orders'][$index19]['items'][$index38]['priceType']['code'];

}


}
if (isset($jsonData['orders'][$index19]['items'][$index38]['initialPrice'])) {
    $model->orders[$index19]->items[$index38]->initialPrice = (float) $jsonData['orders'][$index19]['items'][$index38]['initialPrice'];

}
if (isset($jsonData['orders'][$index19]['items'][$index38]['discountManualAmount'])) {
    $model->orders[$index19]->items[$index38]->discountManualAmount = (float) $jsonData['orders'][$index19]['items'][$index38]['discountManualAmount'];

}
if (isset($jsonData['orders'][$index19]['items'][$index38]['discountManualPercent'])) {
    $model->orders[$index19]->items[$index38]->discountManualPercent = (float) $jsonData['orders'][$index19]['items'][$index38]['discountManualPercent'];

}
if (isset($jsonData['orders'][$index19]['items'][$index38]['discountTotal'])) {
    $model->orders[$index19]->items[$index38]->discountTotal = (float) $jsonData['orders'][$index19]['items'][$index38]['discountTotal'];

}
if (isset($jsonData['orders'][$index19]['items'][$index38]['prices'])) {
    $model->orders[$index19]->items[$index38]->prices = [];
foreach (array_keys($jsonData['orders'][$index19]['items'][$index38]['prices']) as $index58) {
    
$model->orders[$index19]->items[$index38]->prices[$index58] = new RetailCrm\Api\Model\Entity\Orders\Items\OrderProductPriceItem();
if (isset($jsonData['orders'][$index19]['items'][$index38]['prices'][$index58]['price'])) {
    $model->orders[$index19]->items[$index38]->prices[$index58]->price = (float) $jsonData['orders'][$index19]['items'][$index38]['prices'][$index58]['price'];

}
if (isset($jsonData['orders'][$index19]['items'][$index38]['prices'][$index58]['quantity'])) {
    $model->orders[$index19]->items[$index38]->prices[$index58]->quantity = (float) $jsonData['orders'][$index19]['items'][$index38]['prices'][$index58]['quantity'];

}


}

}
if (isset($jsonData['orders'][$index19]['items'][$index38]['vatRate'])) {
    $model->orders[$index19]->items[$index38]->vatRate = $jsonData['orders'][$index19]['items'][$index38]['vatRate'];

}
if (isset($jsonData['orders'][$index19]['items'][$index38]['createdAt'])) {
    $model->orders[$index19]->items[$index38]->createdAt = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['orders'][$index19]['items'][$index38]['createdAt']);

}
if (isset($jsonData['orders'][$index19]['items'][$index38]['quantity'])) {
    $model->orders[$index19]->items[$index38]->quantity = (float) $jsonData['orders'][$index19]['items'][$index38]['quantity'];

}
if (isset($jsonData['orders'][$index19]['items'][$index38]['status'])) {
    $model->orders[$index19]->items[$index38]->status = $jsonData['orders'][$index19]['items'][$index38]['status'];

}
if (isset($jsonData['orders'][$index19]['items'][$index38]['comment'])) {
    $model->orders[$index19]->items[$index38]->comment = $jsonData['orders'][$index19]['items'][$index38]['comment'];

}
if (isset($jsonData['orders'][$index19]['items'][$index38]['offer'])) {
    
$model->orders[$index19]->items[$index38]->offer = new RetailCrm\Api\Model\Entity\Orders\Items\Offer();
if (isset($jsonData['orders'][$index19]['items'][$index38]['offer']['displayName'])) {
    $model->orders[$index19]->items[$index38]->offer->displayName = $jsonData['orders'][$index19]['items'][$index38]['offer']['displayName'];

}
if (isset($jsonData['orders'][$index19]['items'][$index38]['offer']['id'])) {
    $model->orders[$index19]->items[$index38]->offer->id = $jsonData['orders'][$index19]['items'][$index38]['offer']['id'];

}
if (isset($jsonData['orders'][$index19]['items'][$index38]['offer']['externalId'])) {
    $model->orders[$index19]->items[$index38]->offer->externalId = $jsonData['orders'][$index19]['items'][$index38]['offer']['externalId'];

}
if (isset($jsonData['orders'][$index19]['items'][$index38]['offer']['xmlId'])) {
    $model->orders[$index19]->items[$index38]->offer->xmlId = $jsonData['orders'][$index19]['items'][$index38]['offer']['xmlId'];

}
if (isset($jsonData['orders'][$index19]['items'][$index38]['offer']['name'])) {
    $model->orders[$index19]->items[$index38]->offer->name = $jsonData['orders'][$index19]['items'][$index38]['offer']['name'];

}
if (isset($jsonData['orders'][$index19]['items'][$index38]['offer']['article'])) {
    $model->orders[$index19]->items[$index38]->offer->article = $jsonData['orders'][$index19]['items'][$index38]['offer']['article'];

}
if (isset($jsonData['orders'][$index19]['items'][$index38]['offer']['vatRate'])) {
    $model->orders[$index19]->items[$index38]->offer->vatRate = $jsonData['orders'][$index19]['items'][$index38]['offer']['vatRate'];

}
if (isset($jsonData['orders'][$index19]['items'][$index38]['offer']['unit'])) {
    
$model->orders[$index19]->items[$index38]->offer->unit = new RetailCrm\Api\Model\Entity\Orders\Items\Unit();
if (isset($jsonData['orders'][$index19]['items'][$index38]['offer']['unit']['code'])) {
    $model->orders[$index19]->items[$index38]->offer->unit->code = $jsonData['orders'][$index19]['items'][$index38]['offer']['unit']['code'];

}
if (isset($jsonData['orders'][$index19]['items'][$index38]['offer']['unit']['name'])) {
    $model->orders[$index19]->items[$index38]->offer->unit->name = $jsonData['orders'][$index19]['items'][$index38]['offer']['unit']['name'];

}
if (isset($jsonData['orders'][$index19]['items'][$index38]['offer']['unit']['sym'])) {
    $model->orders[$index19]->items[$index38]->offer->unit->sym = $jsonData['orders'][$index19]['items'][$index38]['offer']['unit']['sym'];

}


}
if (isset($jsonData['orders'][$index19]['items'][$index38]['offer']['barcode'])) {
    $model->orders[$index19]->items[$index38]->offer->barcode = $jsonData['orders'][$index19]['items'][$index38]['offer']['barcode'];

}
if (isset($jsonData['orders'][$index19]['items'][$index38]['offer']['properties'])) {
    $model->orders[$index19]->items[$index38]->offer->properties = [];
foreach (array_keys($jsonData['orders'][$index19]['items'][$index38]['offer']['properties']) as $index71) {
    $model->orders[$index19]->items[$index38]->offer->properties[$index71] = $jsonData['orders'][$index19]['items'][$index38]['offer']['properties'][$index71];

}

}


}
if (isset($jsonData['orders'][$index19]['items'][$index38]['order'])) {
    
$model->orders[$index19]->items[$index38]->order = new RetailCrm\Api\Model\Entity\IdModel();
if (isset($jsonData['orders'][$index19]['items'][$index38]['order']['id'])) {
    $model->orders[$index19]->items[$index38]->order->id = $jsonData['orders'][$index19]['items'][$index38]['order']['id'];

}


}
if (isset($jsonData['orders'][$index19]['items'][$index38]['productName'])) {
    $model->orders[$index19]->items[$index38]->productName = $jsonData['orders'][$index19]['items'][$index38]['productName'];

}
if (isset($jsonData['orders'][$index19]['items'][$index38]['isCanceled'])) {
    $model->orders[$index19]->items[$index38]->isCanceled = $jsonData['orders'][$index19]['items'][$index38]['isCanceled'];

}
if (isset($jsonData['orders'][$index19]['items'][$index38]['properties'])) {
    $model->orders[$index19]->items[$index38]->properties = [];
foreach (array_keys($jsonData['orders'][$index19]['items'][$index38]['properties']) as $index62) {
    
$model->orders[$index19]->items[$index38]->properties[$index62] = new RetailCrm\Api\Model\Entity\Orders\Items\ItemProperty();
if (isset($jsonData['orders'][$index19]['items'][$index38]['properties'][$index62]['code'])) {
    $model->orders[$index19]->items[$index38]->properties[$index62]->code = $jsonData['orders'][$index19]['items'][$index38]['properties'][$index62]['code'];

}
if (isset($jsonData['orders'][$index19]['items'][$index38]['properties'][$index62]['name'])) {
    $model->orders[$index19]->items[$index38]->properties[$index62]->name = $jsonData['orders'][$index19]['items'][$index38]['properties'][$index62]['name'];

}
if (isset($jsonData['orders'][$index19]['items'][$index38]['properties'][$index62]['value'])) {
    $model->orders[$index19]->items[$index38]->properties[$index62]->value = $jsonData['orders'][$index19]['items'][$index38]['properties'][$index62]['value'];

}


}

}
if (isset($jsonData['orders'][$index19]['items'][$index38]['purchasePrice'])) {
    $model->orders[$index19]->items[$index38]->purchasePrice = (float) $jsonData['orders'][$index19]['items'][$index38]['purchasePrice'];

}


}

}
if (isset($jsonData['orders'][$index19]['fullPaidAt'])) {
    $model->orders[$index19]->fullPaidAt = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['orders'][$index19]['fullPaidAt']);

}
if (isset($jsonData['orders'][$index19]['payments'])) {
    $model->orders[$index19]->payments = [];
foreach (array_keys($jsonData['orders'][$index19]['payments']) as $index41) {
    
$model->orders[$index19]->payments[$index41] = new RetailCrm\Api\Model\Entity\Orders\Payment();
if (isset($jsonData['orders'][$index19]['payments'][$index41]['id'])) {
    $model->orders[$index19]->payments[$index41]->id = $jsonData['orders'][$index19]['payments'][$index41]['id'];

}
if (isset($jsonData['orders'][$index19]['payments'][$index41]['status'])) {
    $model->orders[$index19]->payments[$index41]->status = $jsonData['orders'][$index19]['payments'][$index41]['status'];

}
if (isset($jsonData['orders'][$index19]['payments'][$index41]['type'])) {
    $model->orders[$index19]->payments[$index41]->type = $jsonData['orders'][$index19]['payments'][$index41]['type'];

}
if (isset($jsonData['orders'][$index19]['payments'][$index41]['externalId'])) {
    $model->orders[$index19]->payments[$index41]->externalId = $jsonData['orders'][$index19]['payments'][$index41]['externalId'];

}
if (isset($jsonData['orders'][$index19]['payments'][$index41]['amount'])) {
    $model->orders[$index19]->payments[$index41]->amount = (float) $jsonData['orders'][$index19]['payments'][$index41]['amount'];

}
if (isset($jsonData['orders'][$index19]['payments'][$index41]['paidAt'])) {
    $model->orders[$index19]->payments[$index41]->paidAt = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['orders'][$index19]['payments'][$index41]['paidAt']);

}
if (isset($jsonData['orders'][$index19]['payments'][$index41]['comment'])) {
    $model->orders[$index19]->payments[$index41]->comment = $jsonData['orders'][$index19]['payments'][$index41]['comment'];

}


}

}
if (isset($jsonData['orders'][$index19]['fromApi'])) {
    $model->orders[$index19]->fromApi = $jsonData['orders'][$index19]['fromApi'];

}
if (isset($jsonData['orders'][$index19]['weight'])) {
    $model->orders[$index19]->weight = (float) $jsonData['orders'][$index19]['weight'];

}
if (isset($jsonData['orders'][$index19]['length'])) {
    $model->orders[$index19]->length = $jsonData['orders'][$index19]['length'];

}
if (isset($jsonData['orders'][$index19]['width'])) {
    $model->orders[$index19]->width = $jsonData['orders'][$index19]['width'];

}
if (isset($jsonData['orders'][$index19]['height'])) {
    $model->orders[$index19]->height = $jsonData['orders'][$index19]['height'];

}
if (isset($jsonData['orders'][$index19]['shipmentStore'])) {
    $model->orders[$index19]->shipmentStore = $jsonData['orders'][$index19]['shipmentStore'];

}
if (isset($jsonData['orders'][$index19]['shipmentDate'])) {
    $model->orders[$index19]->shipmentDate = \DateTime::createFromFormat('Y-m-d', $jsonData['orders'][$index19]['shipmentDate']);

}
if (isset($jsonData['orders'][$index19]['shipped'])) {
    $model->orders[$index19]->shipped = $jsonData['orders'][$index19]['shipped'];

}
if (isset($jsonData['orders'][$index19]['dialogId'])) {
    $model->orders[$index19]->dialogId = $jsonData['orders'][$index19]['dialogId'];

}
if (isset($jsonData['orders'][$index19]['customFields'])) {
    $model->orders[$index19]->customFields = [];
foreach (array_keys($jsonData['orders'][$index19]['customFields']) as $index45) {
    $model->orders[$index19]->customFields[$index45] = $jsonData['orders'][$index19]['customFields'][$index45];

}

}
if (isset($jsonData['orders'][$index19]['clientId'])) {
    $model->orders[$index19]->clientId = $jsonData['orders'][$index19]['clientId'];

}
if (isset($jsonData['orders'][$index19]['loyaltyEventId'])) {
    $model->orders[$index19]->loyaltyEventId = $jsonData['orders'][$index19]['loyaltyEventId'];

}


}

}



    return $model;
}
