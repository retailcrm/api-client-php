<?php

function serialize_RetailCrm_Api_Model_Response_Orders_OrdersGetResponse(RetailCrm\Api\Model\Response\Orders\OrdersGetResponse $model, bool $useStdClass = true)
{
    $emptyHashmap = $useStdClass ? new \stdClass() : [];
    $emptyObject = $useStdClass ? new \stdClass() : [];

    $jsonData = [];
if (null !== $model->success) {
    $jsonData["success"] = $model->success;
}
if (null !== $model->order) {
    $jsonData["order"] = [];
if (null !== $model->order->bonusesCreditTotal) {
    $jsonData["order"]["bonusesCreditTotal"] = $model->order->bonusesCreditTotal;
}
if (null !== $model->order->bonusesChargeTotal) {
    $jsonData["order"]["bonusesChargeTotal"] = $model->order->bonusesChargeTotal;
}
if (null !== $model->order->summ) {
    $jsonData["order"]["summ"] = $model->order->summ;
}
if (null !== $model->order->id) {
    $jsonData["order"]["id"] = $model->order->id;
}
if (null !== $model->order->slug) {
    $jsonData["order"]["slug"] = $model->order->slug;
}
if (null !== $model->order->number) {
    $jsonData["order"]["number"] = $model->order->number;
}
if (null !== $model->order->externalId) {
    $jsonData["order"]["externalId"] = $model->order->externalId;
}
if (null !== $model->order->orderType) {
    $jsonData["order"]["orderType"] = $model->order->orderType;
}
if (null !== $model->order->orderMethod) {
    $jsonData["order"]["orderMethod"] = $model->order->orderMethod;
}
if (null !== $model->order->privilegeType) {
    $jsonData["order"]["privilegeType"] = $model->order->privilegeType;
}
if (null !== $model->order->countryIso) {
    $jsonData["order"]["countryIso"] = $model->order->countryIso;
}
if (null !== $model->order->createdAt) {
    $jsonData["order"]["createdAt"] = $model->order->createdAt->format('Y-m-d H:i:s');;
}
if (null !== $model->order->statusUpdatedAt) {
    $jsonData["order"]["statusUpdatedAt"] = $model->order->statusUpdatedAt->format('Y-m-d H:i:s');;
}
if (null !== $model->order->discountManualAmount) {
    $jsonData["order"]["discountManualAmount"] = $model->order->discountManualAmount;
}
if (null !== $model->order->discountManualPercent) {
    $jsonData["order"]["discountManualPercent"] = $model->order->discountManualPercent;
}
if (null !== $model->order->totalSumm) {
    $jsonData["order"]["totalSumm"] = $model->order->totalSumm;
}
if (null !== $model->order->prepaySum) {
    $jsonData["order"]["prepaySum"] = $model->order->prepaySum;
}
if (null !== $model->order->purchaseSumm) {
    $jsonData["order"]["purchaseSumm"] = $model->order->purchaseSumm;
}
if (null !== $model->order->personalDiscountPercent) {
    $jsonData["order"]["personalDiscountPercent"] = $model->order->personalDiscountPercent;
}
if (null !== $model->order->loyaltyLevel) {
    $jsonData["order"]["loyaltyLevel"] = [];
if (null !== $model->order->loyaltyLevel->id) {
    $jsonData["order"]["loyaltyLevel"]["id"] = $model->order->loyaltyLevel->id;
}
if (null !== $model->order->loyaltyLevel->name) {
    $jsonData["order"]["loyaltyLevel"]["name"] = $model->order->loyaltyLevel->name;
}

if (0 === \count($jsonData["order"]["loyaltyLevel"])) {
    $jsonData["order"]["loyaltyLevel"] = $emptyObject;
}

}
if (null !== $model->order->loyaltyEvent) {
    $jsonData["order"]["loyaltyEvent"] = [];
if (null !== $model->order->loyaltyEvent->id) {
    $jsonData["order"]["loyaltyEvent"]["id"] = $model->order->loyaltyEvent->id;
}

if (0 === \count($jsonData["order"]["loyaltyEvent"])) {
    $jsonData["order"]["loyaltyEvent"] = $emptyObject;
}

}
if (null !== $model->order->mark) {
    $jsonData["order"]["mark"] = $model->order->mark;
}
if (null !== $model->order->markDatetime) {
    $jsonData["order"]["markDatetime"] = $model->order->markDatetime->format('Y-m-d H:i:s');;
}
if (null !== $model->order->lastName) {
    $jsonData["order"]["lastName"] = $model->order->lastName;
}
if (null !== $model->order->firstName) {
    $jsonData["order"]["firstName"] = $model->order->firstName;
}
if (null !== $model->order->patronymic) {
    $jsonData["order"]["patronymic"] = $model->order->patronymic;
}
if (null !== $model->order->phone) {
    $jsonData["order"]["phone"] = $model->order->phone;
}
if (null !== $model->order->additionalPhone) {
    $jsonData["order"]["additionalPhone"] = $model->order->additionalPhone;
}
if (null !== $model->order->email) {
    $jsonData["order"]["email"] = $model->order->email;
}
if (null !== $model->order->call) {
    $jsonData["order"]["call"] = $model->order->call;
}
if (null !== $model->order->expired) {
    $jsonData["order"]["expired"] = $model->order->expired;
}
if (null !== $model->order->customerComment) {
    $jsonData["order"]["customerComment"] = $model->order->customerComment;
}
if (null !== $model->order->managerComment) {
    $jsonData["order"]["managerComment"] = $model->order->managerComment;
}
if (null !== $model->order->managerId) {
    $jsonData["order"]["managerId"] = $model->order->managerId;
}
if (null !== $model->order->customer) {
    $jsonData["order"]["customer"] = [];

if ($model->order->customer instanceof \RetailCrm\Api\Model\Entity\Customers\Customer) {
    $jsonData["order"]["customer"] = [];
if (null !== $model->order->customer->type) {
    $jsonData["order"]["customer"]["type"] = $model->order->customer->type;
}
if (null !== $model->order->customer->id) {
    $jsonData["order"]["customer"]["id"] = $model->order->customer->id;
}
if (null !== $model->order->customer->externalId) {
    $jsonData["order"]["customer"]["externalId"] = $model->order->customer->externalId;
}
if (null !== $model->order->customer->isContact) {
    $jsonData["order"]["customer"]["isContact"] = $model->order->customer->isContact;
}
if (null !== $model->order->customer->createdAt) {
    $jsonData["order"]["customer"]["createdAt"] = $model->order->customer->createdAt->format('Y-m-d H:i:s');;
}
if (null !== $model->order->customer->managerId) {
    $jsonData["order"]["customer"]["managerId"] = $model->order->customer->managerId;
}
if (null !== $model->order->customer->vip) {
    $jsonData["order"]["customer"]["vip"] = $model->order->customer->vip;
}
if (null !== $model->order->customer->bad) {
    $jsonData["order"]["customer"]["bad"] = $model->order->customer->bad;
}
if (null !== $model->order->customer->browserId) {
    $jsonData["order"]["customer"]["browserId"] = $model->order->customer->browserId;
}
if (null !== $model->order->customer->site) {
    $jsonData["order"]["customer"]["site"] = $model->order->customer->site;
}
if (null !== $model->order->customer->contragent) {
    $jsonData["order"]["customer"]["contragent"] = [];
if (null !== $model->order->customer->contragent->contragentType) {
    $jsonData["order"]["customer"]["contragent"]["contragentType"] = $model->order->customer->contragent->contragentType;
}
if (null !== $model->order->customer->contragent->legalName) {
    $jsonData["order"]["customer"]["contragent"]["legalName"] = $model->order->customer->contragent->legalName;
}
if (null !== $model->order->customer->contragent->legalAddress) {
    $jsonData["order"]["customer"]["contragent"]["legalAddress"] = $model->order->customer->contragent->legalAddress;
}
if (null !== $model->order->customer->contragent->INN) {
    $jsonData["order"]["customer"]["contragent"]["INN"] = $model->order->customer->contragent->INN;
}
if (null !== $model->order->customer->contragent->OKPO) {
    $jsonData["order"]["customer"]["contragent"]["OKPO"] = $model->order->customer->contragent->OKPO;
}
if (null !== $model->order->customer->contragent->KPP) {
    $jsonData["order"]["customer"]["contragent"]["KPP"] = $model->order->customer->contragent->KPP;
}
if (null !== $model->order->customer->contragent->OGRN) {
    $jsonData["order"]["customer"]["contragent"]["OGRN"] = $model->order->customer->contragent->OGRN;
}
if (null !== $model->order->customer->contragent->OGRNIP) {
    $jsonData["order"]["customer"]["contragent"]["OGRNIP"] = $model->order->customer->contragent->OGRNIP;
}
if (null !== $model->order->customer->contragent->certificateNumber) {
    $jsonData["order"]["customer"]["contragent"]["certificateNumber"] = $model->order->customer->contragent->certificateNumber;
}
if (null !== $model->order->customer->contragent->certificateDate) {
    $jsonData["order"]["customer"]["contragent"]["certificateDate"] = $model->order->customer->contragent->certificateDate->format('Y-m-d H:i:s');;
}
if (null !== $model->order->customer->contragent->BIK) {
    $jsonData["order"]["customer"]["contragent"]["BIK"] = $model->order->customer->contragent->BIK;
}
if (null !== $model->order->customer->contragent->bank) {
    $jsonData["order"]["customer"]["contragent"]["bank"] = $model->order->customer->contragent->bank;
}
if (null !== $model->order->customer->contragent->bankAddress) {
    $jsonData["order"]["customer"]["contragent"]["bankAddress"] = $model->order->customer->contragent->bankAddress;
}
if (null !== $model->order->customer->contragent->corrAccount) {
    $jsonData["order"]["customer"]["contragent"]["corrAccount"] = $model->order->customer->contragent->corrAccount;
}
if (null !== $model->order->customer->contragent->bankAccount) {
    $jsonData["order"]["customer"]["contragent"]["bankAccount"] = $model->order->customer->contragent->bankAccount;
}

if (0 === \count($jsonData["order"]["customer"]["contragent"])) {
    $jsonData["order"]["customer"]["contragent"] = $emptyObject;
}

}
if (null !== $model->order->customer->tags) {
    $jsonData["order"]["customer"]["tags"] = [];
foreach (array_keys($model->order->customer->tags) as $index29) {
    $jsonData["order"]["customer"]["tags"][$index29] = $model->order->customer->tags[$index29]->name;
}

}
if (null !== $model->order->customer->avgMarginSumm) {
    $jsonData["order"]["customer"]["avgMarginSumm"] = $model->order->customer->avgMarginSumm;
}
if (null !== $model->order->customer->marginSumm) {
    $jsonData["order"]["customer"]["marginSumm"] = $model->order->customer->marginSumm;
}
if (null !== $model->order->customer->totalSumm) {
    $jsonData["order"]["customer"]["totalSumm"] = $model->order->customer->totalSumm;
}
if (null !== $model->order->customer->averageSumm) {
    $jsonData["order"]["customer"]["averageSumm"] = $model->order->customer->averageSumm;
}
if (null !== $model->order->customer->ordersCount) {
    $jsonData["order"]["customer"]["ordersCount"] = $model->order->customer->ordersCount;
}
if (null !== $model->order->customer->costSumm) {
    $jsonData["order"]["customer"]["costSumm"] = $model->order->customer->costSumm;
}
if (null !== $model->order->customer->customFields) {
    $jsonData["order"]["customer"]["customFields"] = [];
foreach (array_keys($model->order->customer->customFields) as $index37) {
    $jsonData["order"]["customer"]["customFields"] = $model->order->customer->customFields;
}

}
if (null !== $model->order->customer->personalDiscount) {
    $jsonData["order"]["customer"]["personalDiscount"] = $model->order->customer->personalDiscount;
}
if (null !== $model->order->customer->cumulativeDiscount) {
    $jsonData["order"]["customer"]["cumulativeDiscount"] = $model->order->customer->cumulativeDiscount;
}
if (null !== $model->order->customer->discountCardNumber) {
    $jsonData["order"]["customer"]["discountCardNumber"] = $model->order->customer->discountCardNumber;
}
if (null !== $model->order->customer->firstClientId) {
    $jsonData["order"]["customer"]["firstClientId"] = $model->order->customer->firstClientId;
}
if (null !== $model->order->customer->lastClientId) {
    $jsonData["order"]["customer"]["lastClientId"] = $model->order->customer->lastClientId;
}
if (null !== $model->order->customer->address) {
    $jsonData["order"]["customer"]["address"] = [];
if (null !== $model->order->customer->address->id) {
    $jsonData["order"]["customer"]["address"]["id"] = $model->order->customer->address->id;
}
if (null !== $model->order->customer->address->name) {
    $jsonData["order"]["customer"]["address"]["name"] = $model->order->customer->address->name;
}
if (null !== $model->order->customer->address->isMain) {
    $jsonData["order"]["customer"]["address"]["isMain"] = $model->order->customer->address->isMain;
}
if (null !== $model->order->customer->address->index) {
    $jsonData["order"]["customer"]["address"]["index"] = $model->order->customer->address->index;
}
if (null !== $model->order->customer->address->countryIso) {
    $jsonData["order"]["customer"]["address"]["countryIso"] = $model->order->customer->address->countryIso;
}
if (null !== $model->order->customer->address->region) {
    $jsonData["order"]["customer"]["address"]["region"] = $model->order->customer->address->region;
}
if (null !== $model->order->customer->address->regionId) {
    $jsonData["order"]["customer"]["address"]["regionId"] = $model->order->customer->address->regionId;
}
if (null !== $model->order->customer->address->city) {
    $jsonData["order"]["customer"]["address"]["city"] = $model->order->customer->address->city;
}
if (null !== $model->order->customer->address->cityId) {
    $jsonData["order"]["customer"]["address"]["cityId"] = $model->order->customer->address->cityId;
}
if (null !== $model->order->customer->address->cityType) {
    $jsonData["order"]["customer"]["address"]["cityType"] = $model->order->customer->address->cityType;
}
if (null !== $model->order->customer->address->street) {
    $jsonData["order"]["customer"]["address"]["street"] = $model->order->customer->address->street;
}
if (null !== $model->order->customer->address->streetId) {
    $jsonData["order"]["customer"]["address"]["streetId"] = $model->order->customer->address->streetId;
}
if (null !== $model->order->customer->address->streetType) {
    $jsonData["order"]["customer"]["address"]["streetType"] = $model->order->customer->address->streetType;
}
if (null !== $model->order->customer->address->building) {
    $jsonData["order"]["customer"]["address"]["building"] = $model->order->customer->address->building;
}
if (null !== $model->order->customer->address->flat) {
    $jsonData["order"]["customer"]["address"]["flat"] = $model->order->customer->address->flat;
}
if (null !== $model->order->customer->address->floor) {
    $jsonData["order"]["customer"]["address"]["floor"] = $model->order->customer->address->floor;
}
if (null !== $model->order->customer->address->block) {
    $jsonData["order"]["customer"]["address"]["block"] = $model->order->customer->address->block;
}
if (null !== $model->order->customer->address->house) {
    $jsonData["order"]["customer"]["address"]["house"] = $model->order->customer->address->house;
}
if (null !== $model->order->customer->address->housing) {
    $jsonData["order"]["customer"]["address"]["housing"] = $model->order->customer->address->housing;
}
if (null !== $model->order->customer->address->metro) {
    $jsonData["order"]["customer"]["address"]["metro"] = $model->order->customer->address->metro;
}
if (null !== $model->order->customer->address->notes) {
    $jsonData["order"]["customer"]["address"]["notes"] = $model->order->customer->address->notes;
}
if (null !== $model->order->customer->address->text) {
    $jsonData["order"]["customer"]["address"]["text"] = $model->order->customer->address->text;
}
if (null !== $model->order->customer->address->externalId) {
    $jsonData["order"]["customer"]["address"]["externalId"] = $model->order->customer->address->externalId;
}

if (0 === \count($jsonData["order"]["customer"]["address"])) {
    $jsonData["order"]["customer"]["address"] = $emptyObject;
}

}
if (null !== $model->order->customer->segments) {
    $jsonData["order"]["customer"]["segments"] = [];
foreach (array_keys($model->order->customer->segments) as $index33) {
    $jsonData["order"]["customer"]["segments"][$index33] = [];
if (null !== $model->order->customer->segments[$index33]->id) {
    $jsonData["order"]["customer"]["segments"][$index33]["id"] = $model->order->customer->segments[$index33]->id;
}
if (null !== $model->order->customer->segments[$index33]->code) {
    $jsonData["order"]["customer"]["segments"][$index33]["code"] = $model->order->customer->segments[$index33]->code;
}
if (null !== $model->order->customer->segments[$index33]->name) {
    $jsonData["order"]["customer"]["segments"][$index33]["name"] = $model->order->customer->segments[$index33]->name;
}
if (null !== $model->order->customer->segments[$index33]->createdAt) {
    $jsonData["order"]["customer"]["segments"][$index33]["createdAt"] = $model->order->customer->segments[$index33]->createdAt->format('Y-m-d H:i:s');;
}
if (null !== $model->order->customer->segments[$index33]->isDynamic) {
    $jsonData["order"]["customer"]["segments"][$index33]["isDynamic"] = $model->order->customer->segments[$index33]->isDynamic;
}
if (null !== $model->order->customer->segments[$index33]->customersCount) {
    $jsonData["order"]["customer"]["segments"][$index33]["customersCount"] = $model->order->customer->segments[$index33]->customersCount;
}
if (null !== $model->order->customer->segments[$index33]->active) {
    $jsonData["order"]["customer"]["segments"][$index33]["active"] = $model->order->customer->segments[$index33]->active;
}

if (0 === \count($jsonData["order"]["customer"]["segments"][$index33])) {
    $jsonData["order"]["customer"]["segments"][$index33] = $emptyObject;
}

}

}
if (null !== $model->order->customer->maturationTime) {
    $jsonData["order"]["customer"]["maturationTime"] = $model->order->customer->maturationTime;
}
if (null !== $model->order->customer->firstName) {
    $jsonData["order"]["customer"]["firstName"] = $model->order->customer->firstName;
}
if (null !== $model->order->customer->lastName) {
    $jsonData["order"]["customer"]["lastName"] = $model->order->customer->lastName;
}
if (null !== $model->order->customer->patronymic) {
    $jsonData["order"]["customer"]["patronymic"] = $model->order->customer->patronymic;
}
if (null !== $model->order->customer->sex) {
    $jsonData["order"]["customer"]["sex"] = $model->order->customer->sex;
}
if (null !== $model->order->customer->presumableSex) {
    $jsonData["order"]["customer"]["presumableSex"] = $model->order->customer->presumableSex;
}
if (null !== $model->order->customer->email) {
    $jsonData["order"]["customer"]["email"] = $model->order->customer->email;
}
if (null !== $model->order->customer->emailMarketingUnsubscribedAt) {
    $jsonData["order"]["customer"]["emailMarketingUnsubscribedAt"] = $model->order->customer->emailMarketingUnsubscribedAt->format('Y-m-d H:i:s');;
}
if (null !== $model->order->customer->phones) {
    $jsonData["order"]["customer"]["phones"] = [];
foreach (array_keys($model->order->customer->phones) as $index31) {
    $jsonData["order"]["customer"]["phones"][$index31] = [];
if (null !== $model->order->customer->phones[$index31]->number) {
    $jsonData["order"]["customer"]["phones"][$index31]["number"] = $model->order->customer->phones[$index31]->number;
}

if (0 === \count($jsonData["order"]["customer"]["phones"][$index31])) {
    $jsonData["order"]["customer"]["phones"][$index31] = $emptyObject;
}

}

}
if (null !== $model->order->customer->birthday) {
    $jsonData["order"]["customer"]["birthday"] = $model->order->customer->birthday->format('Y-m-d H:i:s');;
}
if (null !== $model->order->customer->source) {
    $jsonData["order"]["customer"]["source"] = [];
if (null !== $model->order->customer->source->source) {
    $jsonData["order"]["customer"]["source"]["source"] = $model->order->customer->source->source;
}
if (null !== $model->order->customer->source->medium) {
    $jsonData["order"]["customer"]["source"]["medium"] = $model->order->customer->source->medium;
}
if (null !== $model->order->customer->source->campaign) {
    $jsonData["order"]["customer"]["source"]["campaign"] = $model->order->customer->source->campaign;
}
if (null !== $model->order->customer->source->keyword) {
    $jsonData["order"]["customer"]["source"]["keyword"] = $model->order->customer->source->keyword;
}
if (null !== $model->order->customer->source->content) {
    $jsonData["order"]["customer"]["source"]["content"] = $model->order->customer->source->content;
}

if (0 === \count($jsonData["order"]["customer"]["source"])) {
    $jsonData["order"]["customer"]["source"] = $emptyObject;
}

}
if (null !== $model->order->customer->photoUrl) {
    $jsonData["order"]["customer"]["photoUrl"] = $model->order->customer->photoUrl;
}
if (null !== $model->order->customer->mgCustomerId) {
    $jsonData["order"]["customer"]["mgCustomerId"] = $model->order->customer->mgCustomerId;
}
if (null !== $model->order->customer->subscribed) {
    $jsonData["order"]["customer"]["subscribed"] = $model->order->customer->subscribed;
}

if (0 === \count($jsonData["order"]["customer"])) {
    $jsonData["order"]["customer"] = $emptyObject;
}

} elseif ($model->order->customer instanceof \RetailCrm\Api\Model\Entity\CustomersCorporate\CustomerCorporate) {
    $jsonData["order"]["customer"] = [];
if (null !== $model->order->customer->type) {
    $jsonData["order"]["customer"]["type"] = $model->order->customer->type;
}
if (null !== $model->order->customer->id) {
    $jsonData["order"]["customer"]["id"] = $model->order->customer->id;
}
if (null !== $model->order->customer->externalId) {
    $jsonData["order"]["customer"]["externalId"] = $model->order->customer->externalId;
}
if (null !== $model->order->customer->nickName) {
    $jsonData["order"]["customer"]["nickName"] = $model->order->customer->nickName;
}
if (null !== $model->order->customer->mainAddress) {
    $jsonData["order"]["customer"]["mainAddress"] = [];
if (null !== $model->order->customer->mainAddress->id) {
    $jsonData["order"]["customer"]["mainAddress"]["id"] = $model->order->customer->mainAddress->id;
}
if (null !== $model->order->customer->mainAddress->externalId) {
    $jsonData["order"]["customer"]["mainAddress"]["externalId"] = $model->order->customer->mainAddress->externalId;
}
if (null !== $model->order->customer->mainAddress->name) {
    $jsonData["order"]["customer"]["mainAddress"]["name"] = $model->order->customer->mainAddress->name;
}

if (0 === \count($jsonData["order"]["customer"]["mainAddress"])) {
    $jsonData["order"]["customer"]["mainAddress"] = $emptyObject;
}

}
if (null !== $model->order->customer->createdAt) {
    $jsonData["order"]["customer"]["createdAt"] = $model->order->customer->createdAt->format('Y-m-d H:i:s');;
}
if (null !== $model->order->customer->managerId) {
    $jsonData["order"]["customer"]["managerId"] = $model->order->customer->managerId;
}
if (null !== $model->order->customer->source) {
    $jsonData["order"]["customer"]["source"] = [];
if (null !== $model->order->customer->source->source) {
    $jsonData["order"]["customer"]["source"]["source"] = $model->order->customer->source->source;
}
if (null !== $model->order->customer->source->medium) {
    $jsonData["order"]["customer"]["source"]["medium"] = $model->order->customer->source->medium;
}
if (null !== $model->order->customer->source->campaign) {
    $jsonData["order"]["customer"]["source"]["campaign"] = $model->order->customer->source->campaign;
}
if (null !== $model->order->customer->source->keyword) {
    $jsonData["order"]["customer"]["source"]["keyword"] = $model->order->customer->source->keyword;
}
if (null !== $model->order->customer->source->content) {
    $jsonData["order"]["customer"]["source"]["content"] = $model->order->customer->source->content;
}

if (0 === \count($jsonData["order"]["customer"]["source"])) {
    $jsonData["order"]["customer"]["source"] = $emptyObject;
}

}
if (null !== $model->order->customer->customerContacts) {
    $jsonData["order"]["customer"]["customerContacts"] = [];
foreach (array_keys($model->order->customer->customerContacts) as $index41) {
    $jsonData["order"]["customer"]["customerContacts"][$index41] = [];
if (null !== $model->order->customer->customerContacts[$index41]->id) {
    $jsonData["order"]["customer"]["customerContacts"][$index41]["id"] = $model->order->customer->customerContacts[$index41]->id;
}
if (null !== $model->order->customer->customerContacts[$index41]->isMain) {
    $jsonData["order"]["customer"]["customerContacts"][$index41]["isMain"] = $model->order->customer->customerContacts[$index41]->isMain;
}
if (null !== $model->order->customer->customerContacts[$index41]->customer) {
    $jsonData["order"]["customer"]["customerContacts"][$index41]["customer"] = [];
if (null !== $model->order->customer->customerContacts[$index41]->customer->id) {
    $jsonData["order"]["customer"]["customerContacts"][$index41]["customer"]["id"] = $model->order->customer->customerContacts[$index41]->customer->id;
}
if (null !== $model->order->customer->customerContacts[$index41]->customer->externalId) {
    $jsonData["order"]["customer"]["customerContacts"][$index41]["customer"]["externalId"] = $model->order->customer->customerContacts[$index41]->customer->externalId;
}
if (null !== $model->order->customer->customerContacts[$index41]->customer->browserId) {
    $jsonData["order"]["customer"]["customerContacts"][$index41]["customer"]["browserId"] = $model->order->customer->customerContacts[$index41]->customer->browserId;
}
if (null !== $model->order->customer->customerContacts[$index41]->customer->site) {
    $jsonData["order"]["customer"]["customerContacts"][$index41]["customer"]["site"] = $model->order->customer->customerContacts[$index41]->customer->site;
}
if (null !== $model->order->customer->customerContacts[$index41]->customer->companies) {
    $jsonData["order"]["customer"]["customerContacts"][$index41]["customer"]["companies"] = [];
foreach (array_keys($model->order->customer->customerContacts[$index41]->customer->companies) as $index76) {
    $jsonData["order"]["customer"]["customerContacts"][$index41]["customer"]["companies"][$index76] = [];
if (null !== $model->order->customer->customerContacts[$index41]->customer->companies[$index76]->id) {
    $jsonData["order"]["customer"]["customerContacts"][$index41]["customer"]["companies"][$index76]["id"] = $model->order->customer->customerContacts[$index41]->customer->companies[$index76]->id;
}
if (null !== $model->order->customer->customerContacts[$index41]->customer->companies[$index76]->externalId) {
    $jsonData["order"]["customer"]["customerContacts"][$index41]["customer"]["companies"][$index76]["externalId"] = $model->order->customer->customerContacts[$index41]->customer->companies[$index76]->externalId;
}
if (null !== $model->order->customer->customerContacts[$index41]->customer->companies[$index76]->company) {
    $jsonData["order"]["customer"]["customerContacts"][$index41]["customer"]["companies"][$index76]["company"] = [];
if (null !== $model->order->customer->customerContacts[$index41]->customer->companies[$index76]->company->id) {
    $jsonData["order"]["customer"]["customerContacts"][$index41]["customer"]["companies"][$index76]["company"]["id"] = $model->order->customer->customerContacts[$index41]->customer->companies[$index76]->company->id;
}
if (null !== $model->order->customer->customerContacts[$index41]->customer->companies[$index76]->company->externalId) {
    $jsonData["order"]["customer"]["customerContacts"][$index41]["customer"]["companies"][$index76]["company"]["externalId"] = $model->order->customer->customerContacts[$index41]->customer->companies[$index76]->company->externalId;
}
if (null !== $model->order->customer->customerContacts[$index41]->customer->companies[$index76]->company->name) {
    $jsonData["order"]["customer"]["customerContacts"][$index41]["customer"]["companies"][$index76]["company"]["name"] = $model->order->customer->customerContacts[$index41]->customer->companies[$index76]->company->name;
}

if (0 === \count($jsonData["order"]["customer"]["customerContacts"][$index41]["customer"]["companies"][$index76]["company"])) {
    $jsonData["order"]["customer"]["customerContacts"][$index41]["customer"]["companies"][$index76]["company"] = $emptyObject;
}

}

if (0 === \count($jsonData["order"]["customer"]["customerContacts"][$index41]["customer"]["companies"][$index76])) {
    $jsonData["order"]["customer"]["customerContacts"][$index41]["customer"]["companies"][$index76] = $emptyObject;
}

}

}

if (0 === \count($jsonData["order"]["customer"]["customerContacts"][$index41]["customer"])) {
    $jsonData["order"]["customer"]["customerContacts"][$index41]["customer"] = $emptyObject;
}

}
if (null !== $model->order->customer->customerContacts[$index41]->companies) {
    $jsonData["order"]["customer"]["customerContacts"][$index41]["companies"] = [];
foreach (array_keys($model->order->customer->customerContacts[$index41]->companies) as $index64) {
    $jsonData["order"]["customer"]["customerContacts"][$index41]["companies"][$index64] = [];
if (null !== $model->order->customer->customerContacts[$index41]->companies[$index64]->id) {
    $jsonData["order"]["customer"]["customerContacts"][$index41]["companies"][$index64]["id"] = $model->order->customer->customerContacts[$index41]->companies[$index64]->id;
}
if (null !== $model->order->customer->customerContacts[$index41]->companies[$index64]->externalId) {
    $jsonData["order"]["customer"]["customerContacts"][$index41]["companies"][$index64]["externalId"] = $model->order->customer->customerContacts[$index41]->companies[$index64]->externalId;
}
if (null !== $model->order->customer->customerContacts[$index41]->companies[$index64]->company) {
    $jsonData["order"]["customer"]["customerContacts"][$index41]["companies"][$index64]["company"] = [];
if (null !== $model->order->customer->customerContacts[$index41]->companies[$index64]->company->id) {
    $jsonData["order"]["customer"]["customerContacts"][$index41]["companies"][$index64]["company"]["id"] = $model->order->customer->customerContacts[$index41]->companies[$index64]->company->id;
}
if (null !== $model->order->customer->customerContacts[$index41]->companies[$index64]->company->externalId) {
    $jsonData["order"]["customer"]["customerContacts"][$index41]["companies"][$index64]["company"]["externalId"] = $model->order->customer->customerContacts[$index41]->companies[$index64]->company->externalId;
}
if (null !== $model->order->customer->customerContacts[$index41]->companies[$index64]->company->name) {
    $jsonData["order"]["customer"]["customerContacts"][$index41]["companies"][$index64]["company"]["name"] = $model->order->customer->customerContacts[$index41]->companies[$index64]->company->name;
}

if (0 === \count($jsonData["order"]["customer"]["customerContacts"][$index41]["companies"][$index64]["company"])) {
    $jsonData["order"]["customer"]["customerContacts"][$index41]["companies"][$index64]["company"] = $emptyObject;
}

}

if (0 === \count($jsonData["order"]["customer"]["customerContacts"][$index41]["companies"][$index64])) {
    $jsonData["order"]["customer"]["customerContacts"][$index41]["companies"][$index64] = $emptyObject;
}

}

}

if (0 === \count($jsonData["order"]["customer"]["customerContacts"][$index41])) {
    $jsonData["order"]["customer"]["customerContacts"][$index41] = $emptyObject;
}

}

}
if (null !== $model->order->customer->companies) {
    $jsonData["order"]["customer"]["companies"] = [];
foreach (array_keys($model->order->customer->companies) as $index34) {
    $jsonData["order"]["customer"]["companies"][$index34] = [];
if (null !== $model->order->customer->companies[$index34]->id) {
    $jsonData["order"]["customer"]["companies"][$index34]["id"] = $model->order->customer->companies[$index34]->id;
}
if (null !== $model->order->customer->companies[$index34]->isMain) {
    $jsonData["order"]["customer"]["companies"][$index34]["isMain"] = $model->order->customer->companies[$index34]->isMain;
}
if (null !== $model->order->customer->companies[$index34]->externalId) {
    $jsonData["order"]["customer"]["companies"][$index34]["externalId"] = $model->order->customer->companies[$index34]->externalId;
}
if (null !== $model->order->customer->companies[$index34]->active) {
    $jsonData["order"]["customer"]["companies"][$index34]["active"] = $model->order->customer->companies[$index34]->active;
}
if (null !== $model->order->customer->companies[$index34]->name) {
    $jsonData["order"]["customer"]["companies"][$index34]["name"] = $model->order->customer->companies[$index34]->name;
}
if (null !== $model->order->customer->companies[$index34]->brand) {
    $jsonData["order"]["customer"]["companies"][$index34]["brand"] = $model->order->customer->companies[$index34]->brand;
}
if (null !== $model->order->customer->companies[$index34]->site) {
    $jsonData["order"]["customer"]["companies"][$index34]["site"] = $model->order->customer->companies[$index34]->site;
}
if (null !== $model->order->customer->companies[$index34]->createdAt) {
    $jsonData["order"]["customer"]["companies"][$index34]["createdAt"] = $model->order->customer->companies[$index34]->createdAt->format('Y-m-d H:i:s');;
}
if (null !== $model->order->customer->companies[$index34]->customer) {
    $jsonData["order"]["customer"]["companies"][$index34]["customer"] = [];
if (null !== $model->order->customer->companies[$index34]->customer->site) {
    $jsonData["order"]["customer"]["companies"][$index34]["customer"]["site"] = $model->order->customer->companies[$index34]->customer->site;
}
if (null !== $model->order->customer->companies[$index34]->customer->id) {
    $jsonData["order"]["customer"]["companies"][$index34]["customer"]["id"] = $model->order->customer->companies[$index34]->customer->id;
}
if (null !== $model->order->customer->companies[$index34]->customer->externalId) {
    $jsonData["order"]["customer"]["companies"][$index34]["customer"]["externalId"] = $model->order->customer->companies[$index34]->customer->externalId;
}
if (null !== $model->order->customer->companies[$index34]->customer->type) {
    $jsonData["order"]["customer"]["companies"][$index34]["customer"]["type"] = $model->order->customer->companies[$index34]->customer->type;
}

if (0 === \count($jsonData["order"]["customer"]["companies"][$index34]["customer"])) {
    $jsonData["order"]["customer"]["companies"][$index34]["customer"] = $emptyObject;
}

}
if (null !== $model->order->customer->companies[$index34]->contragent) {
    $jsonData["order"]["customer"]["companies"][$index34]["contragent"] = [];
if (null !== $model->order->customer->companies[$index34]->contragent->contragentType) {
    $jsonData["order"]["customer"]["companies"][$index34]["contragent"]["contragentType"] = $model->order->customer->companies[$index34]->contragent->contragentType;
}
if (null !== $model->order->customer->companies[$index34]->contragent->legalName) {
    $jsonData["order"]["customer"]["companies"][$index34]["contragent"]["legalName"] = $model->order->customer->companies[$index34]->contragent->legalName;
}
if (null !== $model->order->customer->companies[$index34]->contragent->legalAddress) {
    $jsonData["order"]["customer"]["companies"][$index34]["contragent"]["legalAddress"] = $model->order->customer->companies[$index34]->contragent->legalAddress;
}
if (null !== $model->order->customer->companies[$index34]->contragent->INN) {
    $jsonData["order"]["customer"]["companies"][$index34]["contragent"]["INN"] = $model->order->customer->companies[$index34]->contragent->INN;
}
if (null !== $model->order->customer->companies[$index34]->contragent->OKPO) {
    $jsonData["order"]["customer"]["companies"][$index34]["contragent"]["OKPO"] = $model->order->customer->companies[$index34]->contragent->OKPO;
}
if (null !== $model->order->customer->companies[$index34]->contragent->KPP) {
    $jsonData["order"]["customer"]["companies"][$index34]["contragent"]["KPP"] = $model->order->customer->companies[$index34]->contragent->KPP;
}
if (null !== $model->order->customer->companies[$index34]->contragent->OGRN) {
    $jsonData["order"]["customer"]["companies"][$index34]["contragent"]["OGRN"] = $model->order->customer->companies[$index34]->contragent->OGRN;
}
if (null !== $model->order->customer->companies[$index34]->contragent->OGRNIP) {
    $jsonData["order"]["customer"]["companies"][$index34]["contragent"]["OGRNIP"] = $model->order->customer->companies[$index34]->contragent->OGRNIP;
}
if (null !== $model->order->customer->companies[$index34]->contragent->certificateNumber) {
    $jsonData["order"]["customer"]["companies"][$index34]["contragent"]["certificateNumber"] = $model->order->customer->companies[$index34]->contragent->certificateNumber;
}
if (null !== $model->order->customer->companies[$index34]->contragent->certificateDate) {
    $jsonData["order"]["customer"]["companies"][$index34]["contragent"]["certificateDate"] = $model->order->customer->companies[$index34]->contragent->certificateDate->format('Y-m-d H:i:s');;
}
if (null !== $model->order->customer->companies[$index34]->contragent->BIK) {
    $jsonData["order"]["customer"]["companies"][$index34]["contragent"]["BIK"] = $model->order->customer->companies[$index34]->contragent->BIK;
}
if (null !== $model->order->customer->companies[$index34]->contragent->bank) {
    $jsonData["order"]["customer"]["companies"][$index34]["contragent"]["bank"] = $model->order->customer->companies[$index34]->contragent->bank;
}
if (null !== $model->order->customer->companies[$index34]->contragent->bankAddress) {
    $jsonData["order"]["customer"]["companies"][$index34]["contragent"]["bankAddress"] = $model->order->customer->companies[$index34]->contragent->bankAddress;
}
if (null !== $model->order->customer->companies[$index34]->contragent->corrAccount) {
    $jsonData["order"]["customer"]["companies"][$index34]["contragent"]["corrAccount"] = $model->order->customer->companies[$index34]->contragent->corrAccount;
}
if (null !== $model->order->customer->companies[$index34]->contragent->bankAccount) {
    $jsonData["order"]["customer"]["companies"][$index34]["contragent"]["bankAccount"] = $model->order->customer->companies[$index34]->contragent->bankAccount;
}

if (0 === \count($jsonData["order"]["customer"]["companies"][$index34]["contragent"])) {
    $jsonData["order"]["customer"]["companies"][$index34]["contragent"] = $emptyObject;
}

}
if (null !== $model->order->customer->companies[$index34]->address) {
    $jsonData["order"]["customer"]["companies"][$index34]["address"] = [];
if (null !== $model->order->customer->companies[$index34]->address->id) {
    $jsonData["order"]["customer"]["companies"][$index34]["address"]["id"] = $model->order->customer->companies[$index34]->address->id;
}
if (null !== $model->order->customer->companies[$index34]->address->name) {
    $jsonData["order"]["customer"]["companies"][$index34]["address"]["name"] = $model->order->customer->companies[$index34]->address->name;
}
if (null !== $model->order->customer->companies[$index34]->address->isMain) {
    $jsonData["order"]["customer"]["companies"][$index34]["address"]["isMain"] = $model->order->customer->companies[$index34]->address->isMain;
}
if (null !== $model->order->customer->companies[$index34]->address->index) {
    $jsonData["order"]["customer"]["companies"][$index34]["address"]["index"] = $model->order->customer->companies[$index34]->address->index;
}
if (null !== $model->order->customer->companies[$index34]->address->countryIso) {
    $jsonData["order"]["customer"]["companies"][$index34]["address"]["countryIso"] = $model->order->customer->companies[$index34]->address->countryIso;
}
if (null !== $model->order->customer->companies[$index34]->address->region) {
    $jsonData["order"]["customer"]["companies"][$index34]["address"]["region"] = $model->order->customer->companies[$index34]->address->region;
}
if (null !== $model->order->customer->companies[$index34]->address->regionId) {
    $jsonData["order"]["customer"]["companies"][$index34]["address"]["regionId"] = $model->order->customer->companies[$index34]->address->regionId;
}
if (null !== $model->order->customer->companies[$index34]->address->city) {
    $jsonData["order"]["customer"]["companies"][$index34]["address"]["city"] = $model->order->customer->companies[$index34]->address->city;
}
if (null !== $model->order->customer->companies[$index34]->address->cityId) {
    $jsonData["order"]["customer"]["companies"][$index34]["address"]["cityId"] = $model->order->customer->companies[$index34]->address->cityId;
}
if (null !== $model->order->customer->companies[$index34]->address->cityType) {
    $jsonData["order"]["customer"]["companies"][$index34]["address"]["cityType"] = $model->order->customer->companies[$index34]->address->cityType;
}
if (null !== $model->order->customer->companies[$index34]->address->street) {
    $jsonData["order"]["customer"]["companies"][$index34]["address"]["street"] = $model->order->customer->companies[$index34]->address->street;
}
if (null !== $model->order->customer->companies[$index34]->address->streetId) {
    $jsonData["order"]["customer"]["companies"][$index34]["address"]["streetId"] = $model->order->customer->companies[$index34]->address->streetId;
}
if (null !== $model->order->customer->companies[$index34]->address->streetType) {
    $jsonData["order"]["customer"]["companies"][$index34]["address"]["streetType"] = $model->order->customer->companies[$index34]->address->streetType;
}
if (null !== $model->order->customer->companies[$index34]->address->building) {
    $jsonData["order"]["customer"]["companies"][$index34]["address"]["building"] = $model->order->customer->companies[$index34]->address->building;
}
if (null !== $model->order->customer->companies[$index34]->address->flat) {
    $jsonData["order"]["customer"]["companies"][$index34]["address"]["flat"] = $model->order->customer->companies[$index34]->address->flat;
}
if (null !== $model->order->customer->companies[$index34]->address->floor) {
    $jsonData["order"]["customer"]["companies"][$index34]["address"]["floor"] = $model->order->customer->companies[$index34]->address->floor;
}
if (null !== $model->order->customer->companies[$index34]->address->block) {
    $jsonData["order"]["customer"]["companies"][$index34]["address"]["block"] = $model->order->customer->companies[$index34]->address->block;
}
if (null !== $model->order->customer->companies[$index34]->address->house) {
    $jsonData["order"]["customer"]["companies"][$index34]["address"]["house"] = $model->order->customer->companies[$index34]->address->house;
}
if (null !== $model->order->customer->companies[$index34]->address->housing) {
    $jsonData["order"]["customer"]["companies"][$index34]["address"]["housing"] = $model->order->customer->companies[$index34]->address->housing;
}
if (null !== $model->order->customer->companies[$index34]->address->metro) {
    $jsonData["order"]["customer"]["companies"][$index34]["address"]["metro"] = $model->order->customer->companies[$index34]->address->metro;
}
if (null !== $model->order->customer->companies[$index34]->address->notes) {
    $jsonData["order"]["customer"]["companies"][$index34]["address"]["notes"] = $model->order->customer->companies[$index34]->address->notes;
}
if (null !== $model->order->customer->companies[$index34]->address->text) {
    $jsonData["order"]["customer"]["companies"][$index34]["address"]["text"] = $model->order->customer->companies[$index34]->address->text;
}
if (null !== $model->order->customer->companies[$index34]->address->externalId) {
    $jsonData["order"]["customer"]["companies"][$index34]["address"]["externalId"] = $model->order->customer->companies[$index34]->address->externalId;
}

if (0 === \count($jsonData["order"]["customer"]["companies"][$index34]["address"])) {
    $jsonData["order"]["customer"]["companies"][$index34]["address"] = $emptyObject;
}

}
if (null !== $model->order->customer->companies[$index34]->customFields) {
    $jsonData["order"]["customer"]["companies"][$index34]["customFields"] = [];
foreach (array_keys($model->order->customer->companies[$index34]->customFields) as $index60) {
    $jsonData["order"]["customer"]["companies"][$index34]["customFields"] = $model->order->customer->companies[$index34]->customFields;
}

}
if (null !== $model->order->customer->companies[$index34]->marginSumm) {
    $jsonData["order"]["customer"]["companies"][$index34]["marginSumm"] = $model->order->customer->companies[$index34]->marginSumm;
}
if (null !== $model->order->customer->companies[$index34]->totalSumm) {
    $jsonData["order"]["customer"]["companies"][$index34]["totalSumm"] = $model->order->customer->companies[$index34]->totalSumm;
}
if (null !== $model->order->customer->companies[$index34]->averageSumm) {
    $jsonData["order"]["customer"]["companies"][$index34]["averageSumm"] = $model->order->customer->companies[$index34]->averageSumm;
}
if (null !== $model->order->customer->companies[$index34]->ordersCount) {
    $jsonData["order"]["customer"]["companies"][$index34]["ordersCount"] = $model->order->customer->companies[$index34]->ordersCount;
}
if (null !== $model->order->customer->companies[$index34]->costSumm) {
    $jsonData["order"]["customer"]["companies"][$index34]["costSumm"] = $model->order->customer->companies[$index34]->costSumm;
}

if (0 === \count($jsonData["order"]["customer"]["companies"][$index34])) {
    $jsonData["order"]["customer"]["companies"][$index34] = $emptyObject;
}

}

}
if (null !== $model->order->customer->addresses) {
    $jsonData["order"]["customer"]["addresses"] = [];
foreach (array_keys($model->order->customer->addresses) as $index34) {
    $jsonData["order"]["customer"]["addresses"][$index34] = [];
if (null !== $model->order->customer->addresses[$index34]->id) {
    $jsonData["order"]["customer"]["addresses"][$index34]["id"] = $model->order->customer->addresses[$index34]->id;
}
if (null !== $model->order->customer->addresses[$index34]->name) {
    $jsonData["order"]["customer"]["addresses"][$index34]["name"] = $model->order->customer->addresses[$index34]->name;
}
if (null !== $model->order->customer->addresses[$index34]->isMain) {
    $jsonData["order"]["customer"]["addresses"][$index34]["isMain"] = $model->order->customer->addresses[$index34]->isMain;
}
if (null !== $model->order->customer->addresses[$index34]->index) {
    $jsonData["order"]["customer"]["addresses"][$index34]["index"] = $model->order->customer->addresses[$index34]->index;
}
if (null !== $model->order->customer->addresses[$index34]->countryIso) {
    $jsonData["order"]["customer"]["addresses"][$index34]["countryIso"] = $model->order->customer->addresses[$index34]->countryIso;
}
if (null !== $model->order->customer->addresses[$index34]->region) {
    $jsonData["order"]["customer"]["addresses"][$index34]["region"] = $model->order->customer->addresses[$index34]->region;
}
if (null !== $model->order->customer->addresses[$index34]->regionId) {
    $jsonData["order"]["customer"]["addresses"][$index34]["regionId"] = $model->order->customer->addresses[$index34]->regionId;
}
if (null !== $model->order->customer->addresses[$index34]->city) {
    $jsonData["order"]["customer"]["addresses"][$index34]["city"] = $model->order->customer->addresses[$index34]->city;
}
if (null !== $model->order->customer->addresses[$index34]->cityId) {
    $jsonData["order"]["customer"]["addresses"][$index34]["cityId"] = $model->order->customer->addresses[$index34]->cityId;
}
if (null !== $model->order->customer->addresses[$index34]->cityType) {
    $jsonData["order"]["customer"]["addresses"][$index34]["cityType"] = $model->order->customer->addresses[$index34]->cityType;
}
if (null !== $model->order->customer->addresses[$index34]->street) {
    $jsonData["order"]["customer"]["addresses"][$index34]["street"] = $model->order->customer->addresses[$index34]->street;
}
if (null !== $model->order->customer->addresses[$index34]->streetId) {
    $jsonData["order"]["customer"]["addresses"][$index34]["streetId"] = $model->order->customer->addresses[$index34]->streetId;
}
if (null !== $model->order->customer->addresses[$index34]->streetType) {
    $jsonData["order"]["customer"]["addresses"][$index34]["streetType"] = $model->order->customer->addresses[$index34]->streetType;
}
if (null !== $model->order->customer->addresses[$index34]->building) {
    $jsonData["order"]["customer"]["addresses"][$index34]["building"] = $model->order->customer->addresses[$index34]->building;
}
if (null !== $model->order->customer->addresses[$index34]->flat) {
    $jsonData["order"]["customer"]["addresses"][$index34]["flat"] = $model->order->customer->addresses[$index34]->flat;
}
if (null !== $model->order->customer->addresses[$index34]->floor) {
    $jsonData["order"]["customer"]["addresses"][$index34]["floor"] = $model->order->customer->addresses[$index34]->floor;
}
if (null !== $model->order->customer->addresses[$index34]->block) {
    $jsonData["order"]["customer"]["addresses"][$index34]["block"] = $model->order->customer->addresses[$index34]->block;
}
if (null !== $model->order->customer->addresses[$index34]->house) {
    $jsonData["order"]["customer"]["addresses"][$index34]["house"] = $model->order->customer->addresses[$index34]->house;
}
if (null !== $model->order->customer->addresses[$index34]->housing) {
    $jsonData["order"]["customer"]["addresses"][$index34]["housing"] = $model->order->customer->addresses[$index34]->housing;
}
if (null !== $model->order->customer->addresses[$index34]->metro) {
    $jsonData["order"]["customer"]["addresses"][$index34]["metro"] = $model->order->customer->addresses[$index34]->metro;
}
if (null !== $model->order->customer->addresses[$index34]->notes) {
    $jsonData["order"]["customer"]["addresses"][$index34]["notes"] = $model->order->customer->addresses[$index34]->notes;
}
if (null !== $model->order->customer->addresses[$index34]->text) {
    $jsonData["order"]["customer"]["addresses"][$index34]["text"] = $model->order->customer->addresses[$index34]->text;
}
if (null !== $model->order->customer->addresses[$index34]->externalId) {
    $jsonData["order"]["customer"]["addresses"][$index34]["externalId"] = $model->order->customer->addresses[$index34]->externalId;
}

if (0 === \count($jsonData["order"]["customer"]["addresses"][$index34])) {
    $jsonData["order"]["customer"]["addresses"][$index34] = $emptyObject;
}

}

}
if (null !== $model->order->customer->vip) {
    $jsonData["order"]["customer"]["vip"] = $model->order->customer->vip;
}
if (null !== $model->order->customer->bad) {
    $jsonData["order"]["customer"]["bad"] = $model->order->customer->bad;
}
if (null !== $model->order->customer->site) {
    $jsonData["order"]["customer"]["site"] = $model->order->customer->site;
}
if (null !== $model->order->customer->tags) {
    $jsonData["order"]["customer"]["tags"] = [];
foreach (array_keys($model->order->customer->tags) as $index29) {
    $jsonData["order"]["customer"]["tags"][$index29] = $model->order->customer->tags[$index29]->name;
}

}
if (null !== $model->order->customer->avgMarginSumm) {
    $jsonData["order"]["customer"]["avgMarginSumm"] = $model->order->customer->avgMarginSumm;
}
if (null !== $model->order->customer->marginSumm) {
    $jsonData["order"]["customer"]["marginSumm"] = $model->order->customer->marginSumm;
}
if (null !== $model->order->customer->totalSumm) {
    $jsonData["order"]["customer"]["totalSumm"] = $model->order->customer->totalSumm;
}
if (null !== $model->order->customer->averageSumm) {
    $jsonData["order"]["customer"]["averageSumm"] = $model->order->customer->averageSumm;
}
if (null !== $model->order->customer->ordersCount) {
    $jsonData["order"]["customer"]["ordersCount"] = $model->order->customer->ordersCount;
}
if (null !== $model->order->customer->costSumm) {
    $jsonData["order"]["customer"]["costSumm"] = $model->order->customer->costSumm;
}
if (null !== $model->order->customer->customFields) {
    $jsonData["order"]["customer"]["customFields"] = [];
foreach (array_keys($model->order->customer->customFields) as $index37) {
    $jsonData["order"]["customer"]["customFields"] = $model->order->customer->customFields;
}

}
if (null !== $model->order->customer->personalDiscount) {
    $jsonData["order"]["customer"]["personalDiscount"] = $model->order->customer->personalDiscount;
}
if (null !== $model->order->customer->cumulativeDiscount) {
    $jsonData["order"]["customer"]["cumulativeDiscount"] = $model->order->customer->cumulativeDiscount;
}
if (null !== $model->order->customer->discountCardNumber) {
    $jsonData["order"]["customer"]["discountCardNumber"] = $model->order->customer->discountCardNumber;
}
if (null !== $model->order->customer->firstClientId) {
    $jsonData["order"]["customer"]["firstClientId"] = $model->order->customer->firstClientId;
}
if (null !== $model->order->customer->lastClientId) {
    $jsonData["order"]["customer"]["lastClientId"] = $model->order->customer->lastClientId;
}
if (null !== $model->order->customer->mainCustomerContact) {
    $jsonData["order"]["customer"]["mainCustomerContact"] = [];
if (null !== $model->order->customer->mainCustomerContact->id) {
    $jsonData["order"]["customer"]["mainCustomerContact"]["id"] = $model->order->customer->mainCustomerContact->id;
}
if (null !== $model->order->customer->mainCustomerContact->isMain) {
    $jsonData["order"]["customer"]["mainCustomerContact"]["isMain"] = $model->order->customer->mainCustomerContact->isMain;
}
if (null !== $model->order->customer->mainCustomerContact->customer) {
    $jsonData["order"]["customer"]["mainCustomerContact"]["customer"] = [];
if (null !== $model->order->customer->mainCustomerContact->customer->id) {
    $jsonData["order"]["customer"]["mainCustomerContact"]["customer"]["id"] = $model->order->customer->mainCustomerContact->customer->id;
}
if (null !== $model->order->customer->mainCustomerContact->customer->externalId) {
    $jsonData["order"]["customer"]["mainCustomerContact"]["customer"]["externalId"] = $model->order->customer->mainCustomerContact->customer->externalId;
}
if (null !== $model->order->customer->mainCustomerContact->customer->browserId) {
    $jsonData["order"]["customer"]["mainCustomerContact"]["customer"]["browserId"] = $model->order->customer->mainCustomerContact->customer->browserId;
}
if (null !== $model->order->customer->mainCustomerContact->customer->site) {
    $jsonData["order"]["customer"]["mainCustomerContact"]["customer"]["site"] = $model->order->customer->mainCustomerContact->customer->site;
}
if (null !== $model->order->customer->mainCustomerContact->customer->companies) {
    $jsonData["order"]["customer"]["mainCustomerContact"]["customer"]["companies"] = [];
foreach (array_keys($model->order->customer->mainCustomerContact->customer->companies) as $index69) {
    $jsonData["order"]["customer"]["mainCustomerContact"]["customer"]["companies"][$index69] = [];
if (null !== $model->order->customer->mainCustomerContact->customer->companies[$index69]->id) {
    $jsonData["order"]["customer"]["mainCustomerContact"]["customer"]["companies"][$index69]["id"] = $model->order->customer->mainCustomerContact->customer->companies[$index69]->id;
}
if (null !== $model->order->customer->mainCustomerContact->customer->companies[$index69]->externalId) {
    $jsonData["order"]["customer"]["mainCustomerContact"]["customer"]["companies"][$index69]["externalId"] = $model->order->customer->mainCustomerContact->customer->companies[$index69]->externalId;
}
if (null !== $model->order->customer->mainCustomerContact->customer->companies[$index69]->company) {
    $jsonData["order"]["customer"]["mainCustomerContact"]["customer"]["companies"][$index69]["company"] = [];
if (null !== $model->order->customer->mainCustomerContact->customer->companies[$index69]->company->id) {
    $jsonData["order"]["customer"]["mainCustomerContact"]["customer"]["companies"][$index69]["company"]["id"] = $model->order->customer->mainCustomerContact->customer->companies[$index69]->company->id;
}
if (null !== $model->order->customer->mainCustomerContact->customer->companies[$index69]->company->externalId) {
    $jsonData["order"]["customer"]["mainCustomerContact"]["customer"]["companies"][$index69]["company"]["externalId"] = $model->order->customer->mainCustomerContact->customer->companies[$index69]->company->externalId;
}
if (null !== $model->order->customer->mainCustomerContact->customer->companies[$index69]->company->name) {
    $jsonData["order"]["customer"]["mainCustomerContact"]["customer"]["companies"][$index69]["company"]["name"] = $model->order->customer->mainCustomerContact->customer->companies[$index69]->company->name;
}

if (0 === \count($jsonData["order"]["customer"]["mainCustomerContact"]["customer"]["companies"][$index69]["company"])) {
    $jsonData["order"]["customer"]["mainCustomerContact"]["customer"]["companies"][$index69]["company"] = $emptyObject;
}

}

if (0 === \count($jsonData["order"]["customer"]["mainCustomerContact"]["customer"]["companies"][$index69])) {
    $jsonData["order"]["customer"]["mainCustomerContact"]["customer"]["companies"][$index69] = $emptyObject;
}

}

}

if (0 === \count($jsonData["order"]["customer"]["mainCustomerContact"]["customer"])) {
    $jsonData["order"]["customer"]["mainCustomerContact"]["customer"] = $emptyObject;
}

}
if (null !== $model->order->customer->mainCustomerContact->companies) {
    $jsonData["order"]["customer"]["mainCustomerContact"]["companies"] = [];
foreach (array_keys($model->order->customer->mainCustomerContact->companies) as $index57) {
    $jsonData["order"]["customer"]["mainCustomerContact"]["companies"][$index57] = [];
if (null !== $model->order->customer->mainCustomerContact->companies[$index57]->id) {
    $jsonData["order"]["customer"]["mainCustomerContact"]["companies"][$index57]["id"] = $model->order->customer->mainCustomerContact->companies[$index57]->id;
}
if (null !== $model->order->customer->mainCustomerContact->companies[$index57]->externalId) {
    $jsonData["order"]["customer"]["mainCustomerContact"]["companies"][$index57]["externalId"] = $model->order->customer->mainCustomerContact->companies[$index57]->externalId;
}
if (null !== $model->order->customer->mainCustomerContact->companies[$index57]->company) {
    $jsonData["order"]["customer"]["mainCustomerContact"]["companies"][$index57]["company"] = [];
if (null !== $model->order->customer->mainCustomerContact->companies[$index57]->company->id) {
    $jsonData["order"]["customer"]["mainCustomerContact"]["companies"][$index57]["company"]["id"] = $model->order->customer->mainCustomerContact->companies[$index57]->company->id;
}
if (null !== $model->order->customer->mainCustomerContact->companies[$index57]->company->externalId) {
    $jsonData["order"]["customer"]["mainCustomerContact"]["companies"][$index57]["company"]["externalId"] = $model->order->customer->mainCustomerContact->companies[$index57]->company->externalId;
}
if (null !== $model->order->customer->mainCustomerContact->companies[$index57]->company->name) {
    $jsonData["order"]["customer"]["mainCustomerContact"]["companies"][$index57]["company"]["name"] = $model->order->customer->mainCustomerContact->companies[$index57]->company->name;
}

if (0 === \count($jsonData["order"]["customer"]["mainCustomerContact"]["companies"][$index57]["company"])) {
    $jsonData["order"]["customer"]["mainCustomerContact"]["companies"][$index57]["company"] = $emptyObject;
}

}

if (0 === \count($jsonData["order"]["customer"]["mainCustomerContact"]["companies"][$index57])) {
    $jsonData["order"]["customer"]["mainCustomerContact"]["companies"][$index57] = $emptyObject;
}

}

}

if (0 === \count($jsonData["order"]["customer"]["mainCustomerContact"])) {
    $jsonData["order"]["customer"]["mainCustomerContact"] = $emptyObject;
}

}
if (null !== $model->order->customer->mainCompany) {
    $jsonData["order"]["customer"]["mainCompany"] = [];
if (null !== $model->order->customer->mainCompany->id) {
    $jsonData["order"]["customer"]["mainCompany"]["id"] = $model->order->customer->mainCompany->id;
}
if (null !== $model->order->customer->mainCompany->externalId) {
    $jsonData["order"]["customer"]["mainCompany"]["externalId"] = $model->order->customer->mainCompany->externalId;
}
if (null !== $model->order->customer->mainCompany->name) {
    $jsonData["order"]["customer"]["mainCompany"]["name"] = $model->order->customer->mainCompany->name;
}

if (0 === \count($jsonData["order"]["customer"]["mainCompany"])) {
    $jsonData["order"]["customer"]["mainCompany"] = $emptyObject;
}

}

if (0 === \count($jsonData["order"]["customer"])) {
    $jsonData["order"]["customer"] = $emptyObject;
}

}

if (0 === \count($jsonData["order"]["customer"])) {
    $jsonData["order"]["customer"] = $emptyObject;
}
}
if (null !== $model->order->contact) {
    $jsonData["order"]["contact"] = [];
if (null !== $model->order->contact->type) {
    $jsonData["order"]["contact"]["type"] = $model->order->contact->type;
}
if (null !== $model->order->contact->id) {
    $jsonData["order"]["contact"]["id"] = $model->order->contact->id;
}
if (null !== $model->order->contact->externalId) {
    $jsonData["order"]["contact"]["externalId"] = $model->order->contact->externalId;
}
if (null !== $model->order->contact->isContact) {
    $jsonData["order"]["contact"]["isContact"] = $model->order->contact->isContact;
}
if (null !== $model->order->contact->createdAt) {
    $jsonData["order"]["contact"]["createdAt"] = $model->order->contact->createdAt->format('Y-m-d H:i:s');;
}
if (null !== $model->order->contact->managerId) {
    $jsonData["order"]["contact"]["managerId"] = $model->order->contact->managerId;
}
if (null !== $model->order->contact->vip) {
    $jsonData["order"]["contact"]["vip"] = $model->order->contact->vip;
}
if (null !== $model->order->contact->bad) {
    $jsonData["order"]["contact"]["bad"] = $model->order->contact->bad;
}
if (null !== $model->order->contact->browserId) {
    $jsonData["order"]["contact"]["browserId"] = $model->order->contact->browserId;
}
if (null !== $model->order->contact->site) {
    $jsonData["order"]["contact"]["site"] = $model->order->contact->site;
}
if (null !== $model->order->contact->contragent) {
    $jsonData["order"]["contact"]["contragent"] = [];
if (null !== $model->order->contact->contragent->contragentType) {
    $jsonData["order"]["contact"]["contragent"]["contragentType"] = $model->order->contact->contragent->contragentType;
}
if (null !== $model->order->contact->contragent->legalName) {
    $jsonData["order"]["contact"]["contragent"]["legalName"] = $model->order->contact->contragent->legalName;
}
if (null !== $model->order->contact->contragent->legalAddress) {
    $jsonData["order"]["contact"]["contragent"]["legalAddress"] = $model->order->contact->contragent->legalAddress;
}
if (null !== $model->order->contact->contragent->INN) {
    $jsonData["order"]["contact"]["contragent"]["INN"] = $model->order->contact->contragent->INN;
}
if (null !== $model->order->contact->contragent->OKPO) {
    $jsonData["order"]["contact"]["contragent"]["OKPO"] = $model->order->contact->contragent->OKPO;
}
if (null !== $model->order->contact->contragent->KPP) {
    $jsonData["order"]["contact"]["contragent"]["KPP"] = $model->order->contact->contragent->KPP;
}
if (null !== $model->order->contact->contragent->OGRN) {
    $jsonData["order"]["contact"]["contragent"]["OGRN"] = $model->order->contact->contragent->OGRN;
}
if (null !== $model->order->contact->contragent->OGRNIP) {
    $jsonData["order"]["contact"]["contragent"]["OGRNIP"] = $model->order->contact->contragent->OGRNIP;
}
if (null !== $model->order->contact->contragent->certificateNumber) {
    $jsonData["order"]["contact"]["contragent"]["certificateNumber"] = $model->order->contact->contragent->certificateNumber;
}
if (null !== $model->order->contact->contragent->certificateDate) {
    $jsonData["order"]["contact"]["contragent"]["certificateDate"] = $model->order->contact->contragent->certificateDate->format('Y-m-d H:i:s');;
}
if (null !== $model->order->contact->contragent->BIK) {
    $jsonData["order"]["contact"]["contragent"]["BIK"] = $model->order->contact->contragent->BIK;
}
if (null !== $model->order->contact->contragent->bank) {
    $jsonData["order"]["contact"]["contragent"]["bank"] = $model->order->contact->contragent->bank;
}
if (null !== $model->order->contact->contragent->bankAddress) {
    $jsonData["order"]["contact"]["contragent"]["bankAddress"] = $model->order->contact->contragent->bankAddress;
}
if (null !== $model->order->contact->contragent->corrAccount) {
    $jsonData["order"]["contact"]["contragent"]["corrAccount"] = $model->order->contact->contragent->corrAccount;
}
if (null !== $model->order->contact->contragent->bankAccount) {
    $jsonData["order"]["contact"]["contragent"]["bankAccount"] = $model->order->contact->contragent->bankAccount;
}

if (0 === \count($jsonData["order"]["contact"]["contragent"])) {
    $jsonData["order"]["contact"]["contragent"] = $emptyObject;
}

}
if (null !== $model->order->contact->tags) {
    $jsonData["order"]["contact"]["tags"] = [];
foreach (array_keys($model->order->contact->tags) as $index28) {
    $jsonData["order"]["contact"]["tags"][$index28] = $model->order->contact->tags[$index28]->name;
}

}
if (null !== $model->order->contact->avgMarginSumm) {
    $jsonData["order"]["contact"]["avgMarginSumm"] = $model->order->contact->avgMarginSumm;
}
if (null !== $model->order->contact->marginSumm) {
    $jsonData["order"]["contact"]["marginSumm"] = $model->order->contact->marginSumm;
}
if (null !== $model->order->contact->totalSumm) {
    $jsonData["order"]["contact"]["totalSumm"] = $model->order->contact->totalSumm;
}
if (null !== $model->order->contact->averageSumm) {
    $jsonData["order"]["contact"]["averageSumm"] = $model->order->contact->averageSumm;
}
if (null !== $model->order->contact->ordersCount) {
    $jsonData["order"]["contact"]["ordersCount"] = $model->order->contact->ordersCount;
}
if (null !== $model->order->contact->costSumm) {
    $jsonData["order"]["contact"]["costSumm"] = $model->order->contact->costSumm;
}
if (null !== $model->order->contact->customFields) {
    $jsonData["order"]["contact"]["customFields"] = [];
foreach (array_keys($model->order->contact->customFields) as $index36) {
    $jsonData["order"]["contact"]["customFields"] = $model->order->contact->customFields;
}

}
if (null !== $model->order->contact->personalDiscount) {
    $jsonData["order"]["contact"]["personalDiscount"] = $model->order->contact->personalDiscount;
}
if (null !== $model->order->contact->cumulativeDiscount) {
    $jsonData["order"]["contact"]["cumulativeDiscount"] = $model->order->contact->cumulativeDiscount;
}
if (null !== $model->order->contact->discountCardNumber) {
    $jsonData["order"]["contact"]["discountCardNumber"] = $model->order->contact->discountCardNumber;
}
if (null !== $model->order->contact->firstClientId) {
    $jsonData["order"]["contact"]["firstClientId"] = $model->order->contact->firstClientId;
}
if (null !== $model->order->contact->lastClientId) {
    $jsonData["order"]["contact"]["lastClientId"] = $model->order->contact->lastClientId;
}
if (null !== $model->order->contact->address) {
    $jsonData["order"]["contact"]["address"] = [];
if (null !== $model->order->contact->address->id) {
    $jsonData["order"]["contact"]["address"]["id"] = $model->order->contact->address->id;
}
if (null !== $model->order->contact->address->name) {
    $jsonData["order"]["contact"]["address"]["name"] = $model->order->contact->address->name;
}
if (null !== $model->order->contact->address->isMain) {
    $jsonData["order"]["contact"]["address"]["isMain"] = $model->order->contact->address->isMain;
}
if (null !== $model->order->contact->address->index) {
    $jsonData["order"]["contact"]["address"]["index"] = $model->order->contact->address->index;
}
if (null !== $model->order->contact->address->countryIso) {
    $jsonData["order"]["contact"]["address"]["countryIso"] = $model->order->contact->address->countryIso;
}
if (null !== $model->order->contact->address->region) {
    $jsonData["order"]["contact"]["address"]["region"] = $model->order->contact->address->region;
}
if (null !== $model->order->contact->address->regionId) {
    $jsonData["order"]["contact"]["address"]["regionId"] = $model->order->contact->address->regionId;
}
if (null !== $model->order->contact->address->city) {
    $jsonData["order"]["contact"]["address"]["city"] = $model->order->contact->address->city;
}
if (null !== $model->order->contact->address->cityId) {
    $jsonData["order"]["contact"]["address"]["cityId"] = $model->order->contact->address->cityId;
}
if (null !== $model->order->contact->address->cityType) {
    $jsonData["order"]["contact"]["address"]["cityType"] = $model->order->contact->address->cityType;
}
if (null !== $model->order->contact->address->street) {
    $jsonData["order"]["contact"]["address"]["street"] = $model->order->contact->address->street;
}
if (null !== $model->order->contact->address->streetId) {
    $jsonData["order"]["contact"]["address"]["streetId"] = $model->order->contact->address->streetId;
}
if (null !== $model->order->contact->address->streetType) {
    $jsonData["order"]["contact"]["address"]["streetType"] = $model->order->contact->address->streetType;
}
if (null !== $model->order->contact->address->building) {
    $jsonData["order"]["contact"]["address"]["building"] = $model->order->contact->address->building;
}
if (null !== $model->order->contact->address->flat) {
    $jsonData["order"]["contact"]["address"]["flat"] = $model->order->contact->address->flat;
}
if (null !== $model->order->contact->address->floor) {
    $jsonData["order"]["contact"]["address"]["floor"] = $model->order->contact->address->floor;
}
if (null !== $model->order->contact->address->block) {
    $jsonData["order"]["contact"]["address"]["block"] = $model->order->contact->address->block;
}
if (null !== $model->order->contact->address->house) {
    $jsonData["order"]["contact"]["address"]["house"] = $model->order->contact->address->house;
}
if (null !== $model->order->contact->address->housing) {
    $jsonData["order"]["contact"]["address"]["housing"] = $model->order->contact->address->housing;
}
if (null !== $model->order->contact->address->metro) {
    $jsonData["order"]["contact"]["address"]["metro"] = $model->order->contact->address->metro;
}
if (null !== $model->order->contact->address->notes) {
    $jsonData["order"]["contact"]["address"]["notes"] = $model->order->contact->address->notes;
}
if (null !== $model->order->contact->address->text) {
    $jsonData["order"]["contact"]["address"]["text"] = $model->order->contact->address->text;
}
if (null !== $model->order->contact->address->externalId) {
    $jsonData["order"]["contact"]["address"]["externalId"] = $model->order->contact->address->externalId;
}

if (0 === \count($jsonData["order"]["contact"]["address"])) {
    $jsonData["order"]["contact"]["address"] = $emptyObject;
}

}
if (null !== $model->order->contact->segments) {
    $jsonData["order"]["contact"]["segments"] = [];
foreach (array_keys($model->order->contact->segments) as $index32) {
    $jsonData["order"]["contact"]["segments"][$index32] = [];
if (null !== $model->order->contact->segments[$index32]->id) {
    $jsonData["order"]["contact"]["segments"][$index32]["id"] = $model->order->contact->segments[$index32]->id;
}
if (null !== $model->order->contact->segments[$index32]->code) {
    $jsonData["order"]["contact"]["segments"][$index32]["code"] = $model->order->contact->segments[$index32]->code;
}
if (null !== $model->order->contact->segments[$index32]->name) {
    $jsonData["order"]["contact"]["segments"][$index32]["name"] = $model->order->contact->segments[$index32]->name;
}
if (null !== $model->order->contact->segments[$index32]->createdAt) {
    $jsonData["order"]["contact"]["segments"][$index32]["createdAt"] = $model->order->contact->segments[$index32]->createdAt->format('Y-m-d H:i:s');;
}
if (null !== $model->order->contact->segments[$index32]->isDynamic) {
    $jsonData["order"]["contact"]["segments"][$index32]["isDynamic"] = $model->order->contact->segments[$index32]->isDynamic;
}
if (null !== $model->order->contact->segments[$index32]->customersCount) {
    $jsonData["order"]["contact"]["segments"][$index32]["customersCount"] = $model->order->contact->segments[$index32]->customersCount;
}
if (null !== $model->order->contact->segments[$index32]->active) {
    $jsonData["order"]["contact"]["segments"][$index32]["active"] = $model->order->contact->segments[$index32]->active;
}

if (0 === \count($jsonData["order"]["contact"]["segments"][$index32])) {
    $jsonData["order"]["contact"]["segments"][$index32] = $emptyObject;
}

}

}
if (null !== $model->order->contact->maturationTime) {
    $jsonData["order"]["contact"]["maturationTime"] = $model->order->contact->maturationTime;
}
if (null !== $model->order->contact->firstName) {
    $jsonData["order"]["contact"]["firstName"] = $model->order->contact->firstName;
}
if (null !== $model->order->contact->lastName) {
    $jsonData["order"]["contact"]["lastName"] = $model->order->contact->lastName;
}
if (null !== $model->order->contact->patronymic) {
    $jsonData["order"]["contact"]["patronymic"] = $model->order->contact->patronymic;
}
if (null !== $model->order->contact->sex) {
    $jsonData["order"]["contact"]["sex"] = $model->order->contact->sex;
}
if (null !== $model->order->contact->presumableSex) {
    $jsonData["order"]["contact"]["presumableSex"] = $model->order->contact->presumableSex;
}
if (null !== $model->order->contact->email) {
    $jsonData["order"]["contact"]["email"] = $model->order->contact->email;
}
if (null !== $model->order->contact->emailMarketingUnsubscribedAt) {
    $jsonData["order"]["contact"]["emailMarketingUnsubscribedAt"] = $model->order->contact->emailMarketingUnsubscribedAt->format('Y-m-d H:i:s');;
}
if (null !== $model->order->contact->phones) {
    $jsonData["order"]["contact"]["phones"] = [];
foreach (array_keys($model->order->contact->phones) as $index30) {
    $jsonData["order"]["contact"]["phones"][$index30] = [];
if (null !== $model->order->contact->phones[$index30]->number) {
    $jsonData["order"]["contact"]["phones"][$index30]["number"] = $model->order->contact->phones[$index30]->number;
}

if (0 === \count($jsonData["order"]["contact"]["phones"][$index30])) {
    $jsonData["order"]["contact"]["phones"][$index30] = $emptyObject;
}

}

}
if (null !== $model->order->contact->birthday) {
    $jsonData["order"]["contact"]["birthday"] = $model->order->contact->birthday->format('Y-m-d H:i:s');;
}
if (null !== $model->order->contact->source) {
    $jsonData["order"]["contact"]["source"] = [];
if (null !== $model->order->contact->source->source) {
    $jsonData["order"]["contact"]["source"]["source"] = $model->order->contact->source->source;
}
if (null !== $model->order->contact->source->medium) {
    $jsonData["order"]["contact"]["source"]["medium"] = $model->order->contact->source->medium;
}
if (null !== $model->order->contact->source->campaign) {
    $jsonData["order"]["contact"]["source"]["campaign"] = $model->order->contact->source->campaign;
}
if (null !== $model->order->contact->source->keyword) {
    $jsonData["order"]["contact"]["source"]["keyword"] = $model->order->contact->source->keyword;
}
if (null !== $model->order->contact->source->content) {
    $jsonData["order"]["contact"]["source"]["content"] = $model->order->contact->source->content;
}

if (0 === \count($jsonData["order"]["contact"]["source"])) {
    $jsonData["order"]["contact"]["source"] = $emptyObject;
}

}
if (null !== $model->order->contact->photoUrl) {
    $jsonData["order"]["contact"]["photoUrl"] = $model->order->contact->photoUrl;
}
if (null !== $model->order->contact->mgCustomerId) {
    $jsonData["order"]["contact"]["mgCustomerId"] = $model->order->contact->mgCustomerId;
}
if (null !== $model->order->contact->subscribed) {
    $jsonData["order"]["contact"]["subscribed"] = $model->order->contact->subscribed;
}

if (0 === \count($jsonData["order"]["contact"])) {
    $jsonData["order"]["contact"] = $emptyObject;
}

}
if (null !== $model->order->company) {
    $jsonData["order"]["company"] = [];
if (null !== $model->order->company->id) {
    $jsonData["order"]["company"]["id"] = $model->order->company->id;
}
if (null !== $model->order->company->isMain) {
    $jsonData["order"]["company"]["isMain"] = $model->order->company->isMain;
}
if (null !== $model->order->company->externalId) {
    $jsonData["order"]["company"]["externalId"] = $model->order->company->externalId;
}
if (null !== $model->order->company->active) {
    $jsonData["order"]["company"]["active"] = $model->order->company->active;
}
if (null !== $model->order->company->name) {
    $jsonData["order"]["company"]["name"] = $model->order->company->name;
}
if (null !== $model->order->company->brand) {
    $jsonData["order"]["company"]["brand"] = $model->order->company->brand;
}
if (null !== $model->order->company->site) {
    $jsonData["order"]["company"]["site"] = $model->order->company->site;
}
if (null !== $model->order->company->createdAt) {
    $jsonData["order"]["company"]["createdAt"] = $model->order->company->createdAt->format('Y-m-d H:i:s');;
}
if (null !== $model->order->company->customer) {
    $jsonData["order"]["company"]["customer"] = [];
if (null !== $model->order->company->customer->site) {
    $jsonData["order"]["company"]["customer"]["site"] = $model->order->company->customer->site;
}
if (null !== $model->order->company->customer->id) {
    $jsonData["order"]["company"]["customer"]["id"] = $model->order->company->customer->id;
}
if (null !== $model->order->company->customer->externalId) {
    $jsonData["order"]["company"]["customer"]["externalId"] = $model->order->company->customer->externalId;
}
if (null !== $model->order->company->customer->type) {
    $jsonData["order"]["company"]["customer"]["type"] = $model->order->company->customer->type;
}

if (0 === \count($jsonData["order"]["company"]["customer"])) {
    $jsonData["order"]["company"]["customer"] = $emptyObject;
}

}
if (null !== $model->order->company->contragent) {
    $jsonData["order"]["company"]["contragent"] = [];
if (null !== $model->order->company->contragent->contragentType) {
    $jsonData["order"]["company"]["contragent"]["contragentType"] = $model->order->company->contragent->contragentType;
}
if (null !== $model->order->company->contragent->legalName) {
    $jsonData["order"]["company"]["contragent"]["legalName"] = $model->order->company->contragent->legalName;
}
if (null !== $model->order->company->contragent->legalAddress) {
    $jsonData["order"]["company"]["contragent"]["legalAddress"] = $model->order->company->contragent->legalAddress;
}
if (null !== $model->order->company->contragent->INN) {
    $jsonData["order"]["company"]["contragent"]["INN"] = $model->order->company->contragent->INN;
}
if (null !== $model->order->company->contragent->OKPO) {
    $jsonData["order"]["company"]["contragent"]["OKPO"] = $model->order->company->contragent->OKPO;
}
if (null !== $model->order->company->contragent->KPP) {
    $jsonData["order"]["company"]["contragent"]["KPP"] = $model->order->company->contragent->KPP;
}
if (null !== $model->order->company->contragent->OGRN) {
    $jsonData["order"]["company"]["contragent"]["OGRN"] = $model->order->company->contragent->OGRN;
}
if (null !== $model->order->company->contragent->OGRNIP) {
    $jsonData["order"]["company"]["contragent"]["OGRNIP"] = $model->order->company->contragent->OGRNIP;
}
if (null !== $model->order->company->contragent->certificateNumber) {
    $jsonData["order"]["company"]["contragent"]["certificateNumber"] = $model->order->company->contragent->certificateNumber;
}
if (null !== $model->order->company->contragent->certificateDate) {
    $jsonData["order"]["company"]["contragent"]["certificateDate"] = $model->order->company->contragent->certificateDate->format('Y-m-d H:i:s');;
}
if (null !== $model->order->company->contragent->BIK) {
    $jsonData["order"]["company"]["contragent"]["BIK"] = $model->order->company->contragent->BIK;
}
if (null !== $model->order->company->contragent->bank) {
    $jsonData["order"]["company"]["contragent"]["bank"] = $model->order->company->contragent->bank;
}
if (null !== $model->order->company->contragent->bankAddress) {
    $jsonData["order"]["company"]["contragent"]["bankAddress"] = $model->order->company->contragent->bankAddress;
}
if (null !== $model->order->company->contragent->corrAccount) {
    $jsonData["order"]["company"]["contragent"]["corrAccount"] = $model->order->company->contragent->corrAccount;
}
if (null !== $model->order->company->contragent->bankAccount) {
    $jsonData["order"]["company"]["contragent"]["bankAccount"] = $model->order->company->contragent->bankAccount;
}

if (0 === \count($jsonData["order"]["company"]["contragent"])) {
    $jsonData["order"]["company"]["contragent"] = $emptyObject;
}

}
if (null !== $model->order->company->address) {
    $jsonData["order"]["company"]["address"] = [];
if (null !== $model->order->company->address->id) {
    $jsonData["order"]["company"]["address"]["id"] = $model->order->company->address->id;
}
if (null !== $model->order->company->address->name) {
    $jsonData["order"]["company"]["address"]["name"] = $model->order->company->address->name;
}
if (null !== $model->order->company->address->isMain) {
    $jsonData["order"]["company"]["address"]["isMain"] = $model->order->company->address->isMain;
}
if (null !== $model->order->company->address->index) {
    $jsonData["order"]["company"]["address"]["index"] = $model->order->company->address->index;
}
if (null !== $model->order->company->address->countryIso) {
    $jsonData["order"]["company"]["address"]["countryIso"] = $model->order->company->address->countryIso;
}
if (null !== $model->order->company->address->region) {
    $jsonData["order"]["company"]["address"]["region"] = $model->order->company->address->region;
}
if (null !== $model->order->company->address->regionId) {
    $jsonData["order"]["company"]["address"]["regionId"] = $model->order->company->address->regionId;
}
if (null !== $model->order->company->address->city) {
    $jsonData["order"]["company"]["address"]["city"] = $model->order->company->address->city;
}
if (null !== $model->order->company->address->cityId) {
    $jsonData["order"]["company"]["address"]["cityId"] = $model->order->company->address->cityId;
}
if (null !== $model->order->company->address->cityType) {
    $jsonData["order"]["company"]["address"]["cityType"] = $model->order->company->address->cityType;
}
if (null !== $model->order->company->address->street) {
    $jsonData["order"]["company"]["address"]["street"] = $model->order->company->address->street;
}
if (null !== $model->order->company->address->streetId) {
    $jsonData["order"]["company"]["address"]["streetId"] = $model->order->company->address->streetId;
}
if (null !== $model->order->company->address->streetType) {
    $jsonData["order"]["company"]["address"]["streetType"] = $model->order->company->address->streetType;
}
if (null !== $model->order->company->address->building) {
    $jsonData["order"]["company"]["address"]["building"] = $model->order->company->address->building;
}
if (null !== $model->order->company->address->flat) {
    $jsonData["order"]["company"]["address"]["flat"] = $model->order->company->address->flat;
}
if (null !== $model->order->company->address->floor) {
    $jsonData["order"]["company"]["address"]["floor"] = $model->order->company->address->floor;
}
if (null !== $model->order->company->address->block) {
    $jsonData["order"]["company"]["address"]["block"] = $model->order->company->address->block;
}
if (null !== $model->order->company->address->house) {
    $jsonData["order"]["company"]["address"]["house"] = $model->order->company->address->house;
}
if (null !== $model->order->company->address->housing) {
    $jsonData["order"]["company"]["address"]["housing"] = $model->order->company->address->housing;
}
if (null !== $model->order->company->address->metro) {
    $jsonData["order"]["company"]["address"]["metro"] = $model->order->company->address->metro;
}
if (null !== $model->order->company->address->notes) {
    $jsonData["order"]["company"]["address"]["notes"] = $model->order->company->address->notes;
}
if (null !== $model->order->company->address->text) {
    $jsonData["order"]["company"]["address"]["text"] = $model->order->company->address->text;
}
if (null !== $model->order->company->address->externalId) {
    $jsonData["order"]["company"]["address"]["externalId"] = $model->order->company->address->externalId;
}

if (0 === \count($jsonData["order"]["company"]["address"])) {
    $jsonData["order"]["company"]["address"] = $emptyObject;
}

}
if (null !== $model->order->company->customFields) {
    $jsonData["order"]["company"]["customFields"] = [];
foreach (array_keys($model->order->company->customFields) as $index36) {
    $jsonData["order"]["company"]["customFields"] = $model->order->company->customFields;
}

}
if (null !== $model->order->company->marginSumm) {
    $jsonData["order"]["company"]["marginSumm"] = $model->order->company->marginSumm;
}
if (null !== $model->order->company->totalSumm) {
    $jsonData["order"]["company"]["totalSumm"] = $model->order->company->totalSumm;
}
if (null !== $model->order->company->averageSumm) {
    $jsonData["order"]["company"]["averageSumm"] = $model->order->company->averageSumm;
}
if (null !== $model->order->company->ordersCount) {
    $jsonData["order"]["company"]["ordersCount"] = $model->order->company->ordersCount;
}
if (null !== $model->order->company->costSumm) {
    $jsonData["order"]["company"]["costSumm"] = $model->order->company->costSumm;
}

if (0 === \count($jsonData["order"]["company"])) {
    $jsonData["order"]["company"] = $emptyObject;
}

}
if (null !== $model->order->contragent) {
    $jsonData["order"]["contragent"] = [];
if (null !== $model->order->contragent->contragentType) {
    $jsonData["order"]["contragent"]["contragentType"] = $model->order->contragent->contragentType;
}
if (null !== $model->order->contragent->legalName) {
    $jsonData["order"]["contragent"]["legalName"] = $model->order->contragent->legalName;
}
if (null !== $model->order->contragent->legalAddress) {
    $jsonData["order"]["contragent"]["legalAddress"] = $model->order->contragent->legalAddress;
}
if (null !== $model->order->contragent->INN) {
    $jsonData["order"]["contragent"]["INN"] = $model->order->contragent->INN;
}
if (null !== $model->order->contragent->OKPO) {
    $jsonData["order"]["contragent"]["OKPO"] = $model->order->contragent->OKPO;
}
if (null !== $model->order->contragent->KPP) {
    $jsonData["order"]["contragent"]["KPP"] = $model->order->contragent->KPP;
}
if (null !== $model->order->contragent->OGRN) {
    $jsonData["order"]["contragent"]["OGRN"] = $model->order->contragent->OGRN;
}
if (null !== $model->order->contragent->OGRNIP) {
    $jsonData["order"]["contragent"]["OGRNIP"] = $model->order->contragent->OGRNIP;
}
if (null !== $model->order->contragent->certificateNumber) {
    $jsonData["order"]["contragent"]["certificateNumber"] = $model->order->contragent->certificateNumber;
}
if (null !== $model->order->contragent->certificateDate) {
    $jsonData["order"]["contragent"]["certificateDate"] = $model->order->contragent->certificateDate->format('Y-m-d H:i:s');;
}
if (null !== $model->order->contragent->BIK) {
    $jsonData["order"]["contragent"]["BIK"] = $model->order->contragent->BIK;
}
if (null !== $model->order->contragent->bank) {
    $jsonData["order"]["contragent"]["bank"] = $model->order->contragent->bank;
}
if (null !== $model->order->contragent->bankAddress) {
    $jsonData["order"]["contragent"]["bankAddress"] = $model->order->contragent->bankAddress;
}
if (null !== $model->order->contragent->corrAccount) {
    $jsonData["order"]["contragent"]["corrAccount"] = $model->order->contragent->corrAccount;
}
if (null !== $model->order->contragent->bankAccount) {
    $jsonData["order"]["contragent"]["bankAccount"] = $model->order->contragent->bankAccount;
}

if (0 === \count($jsonData["order"]["contragent"])) {
    $jsonData["order"]["contragent"] = $emptyObject;
}

}
if (null !== $model->order->delivery) {
    $jsonData["order"]["delivery"] = [];
if (null !== $model->order->delivery->code) {
    $jsonData["order"]["delivery"]["code"] = $model->order->delivery->code;
}
if (null !== $model->order->delivery->integrationCode) {
    $jsonData["order"]["delivery"]["integrationCode"] = $model->order->delivery->integrationCode;
}
if (null !== $model->order->delivery->data) {
    $jsonData["order"]["delivery"]["data"] = [];
if (null !== $model->order->delivery->data->externalId) {
    $jsonData["order"]["delivery"]["data"]["externalId"] = $model->order->delivery->data->externalId;
}
if (null !== $model->order->delivery->data->trackNumber) {
    $jsonData["order"]["delivery"]["data"]["trackNumber"] = $model->order->delivery->data->trackNumber;
}
if (null !== $model->order->delivery->data->status) {
    $jsonData["order"]["delivery"]["data"]["status"] = $model->order->delivery->data->status;
}
if (null !== $model->order->delivery->data->locked) {
    $jsonData["order"]["delivery"]["data"]["locked"] = $model->order->delivery->data->locked;
}
if (null !== $model->order->delivery->data->pickuppointAddress) {
    $jsonData["order"]["delivery"]["data"]["pickuppointAddress"] = $model->order->delivery->data->pickuppointAddress;
}
if (null !== $model->order->delivery->data->days) {
    $jsonData["order"]["delivery"]["data"]["days"] = $model->order->delivery->data->days;
}
if (null !== $model->order->delivery->data->statusText) {
    $jsonData["order"]["delivery"]["data"]["statusText"] = $model->order->delivery->data->statusText;
}
if (null !== $model->order->delivery->data->statusDate) {
    $jsonData["order"]["delivery"]["data"]["statusDate"] = $model->order->delivery->data->statusDate->format('Y-m-d');;
}
if (null !== $model->order->delivery->data->tariff) {
    $jsonData["order"]["delivery"]["data"]["tariff"] = $model->order->delivery->data->tariff;
}
if (null !== $model->order->delivery->data->tariffName) {
    $jsonData["order"]["delivery"]["data"]["tariffName"] = $model->order->delivery->data->tariffName;
}
if (null !== $model->order->delivery->data->pickuppointId) {
    $jsonData["order"]["delivery"]["data"]["pickuppointId"] = $model->order->delivery->data->pickuppointId;
}
if (null !== $model->order->delivery->data->pickuppointSchedule) {
    $jsonData["order"]["delivery"]["data"]["pickuppointSchedule"] = $model->order->delivery->data->pickuppointSchedule;
}
if (null !== $model->order->delivery->data->pickuppointPhone) {
    $jsonData["order"]["delivery"]["data"]["pickuppointPhone"] = $model->order->delivery->data->pickuppointPhone;
}
if (null !== $model->order->delivery->data->payerType) {
    $jsonData["order"]["delivery"]["data"]["payerType"] = $model->order->delivery->data->payerType;
}
if (null !== $model->order->delivery->data->statusComment) {
    $jsonData["order"]["delivery"]["data"]["statusComment"] = $model->order->delivery->data->statusComment;
}
if (null !== $model->order->delivery->data->cost) {
    $jsonData["order"]["delivery"]["data"]["cost"] = $model->order->delivery->data->cost;
}
if (null !== $model->order->delivery->data->minTerm) {
    $jsonData["order"]["delivery"]["data"]["minTerm"] = $model->order->delivery->data->minTerm;
}
if (null !== $model->order->delivery->data->maxTerm) {
    $jsonData["order"]["delivery"]["data"]["maxTerm"] = $model->order->delivery->data->maxTerm;
}
if (null !== $model->order->delivery->data->shipmentpointId) {
    $jsonData["order"]["delivery"]["data"]["shipmentpointId"] = $model->order->delivery->data->shipmentpointId;
}
if (null !== $model->order->delivery->data->shipmentpointName) {
    $jsonData["order"]["delivery"]["data"]["shipmentpointName"] = $model->order->delivery->data->shipmentpointName;
}
if (null !== $model->order->delivery->data->shipmentpointAddress) {
    $jsonData["order"]["delivery"]["data"]["shipmentpointAddress"] = $model->order->delivery->data->shipmentpointAddress;
}
if (null !== $model->order->delivery->data->shipmentpointSchedule) {
    $jsonData["order"]["delivery"]["data"]["shipmentpointSchedule"] = $model->order->delivery->data->shipmentpointSchedule;
}
if (null !== $model->order->delivery->data->shipmentpointPhone) {
    $jsonData["order"]["delivery"]["data"]["shipmentpointPhone"] = $model->order->delivery->data->shipmentpointPhone;
}
if (null !== $model->order->delivery->data->shipmentpointCoordinateLatitude) {
    $jsonData["order"]["delivery"]["data"]["shipmentpointCoordinateLatitude"] = $model->order->delivery->data->shipmentpointCoordinateLatitude;
}
if (null !== $model->order->delivery->data->shipmentpointCoordinateLongitude) {
    $jsonData["order"]["delivery"]["data"]["shipmentpointCoordinateLongitude"] = $model->order->delivery->data->shipmentpointCoordinateLongitude;
}
if (null !== $model->order->delivery->data->pickuppointName) {
    $jsonData["order"]["delivery"]["data"]["pickuppointName"] = $model->order->delivery->data->pickuppointName;
}
if (null !== $model->order->delivery->data->pickuppointCoordinateLatitude) {
    $jsonData["order"]["delivery"]["data"]["pickuppointCoordinateLatitude"] = $model->order->delivery->data->pickuppointCoordinateLatitude;
}
if (null !== $model->order->delivery->data->pickuppointCoordinateLongitude) {
    $jsonData["order"]["delivery"]["data"]["pickuppointCoordinateLongitude"] = $model->order->delivery->data->pickuppointCoordinateLongitude;
}
if (null !== $model->order->delivery->data->extraData) {
    $jsonData["order"]["delivery"]["data"]["extraData"] = [];
foreach (array_keys($model->order->delivery->data->extraData) as $index42) {
    $jsonData["order"]["delivery"]["data"]["extraData"] = $model->order->delivery->data->extraData;
}

}
if (null !== $model->order->delivery->data->packages) {
    $jsonData["order"]["delivery"]["data"]["packages"] = [];
foreach (array_keys($model->order->delivery->data->packages) as $index41) {
    $jsonData["order"]["delivery"]["data"]["packages"][$index41] = [];
if (null !== $model->order->delivery->data->packages[$index41]->packageId) {
    $jsonData["order"]["delivery"]["data"]["packages"][$index41]["packageId"] = $model->order->delivery->data->packages[$index41]->packageId;
}
if (null !== $model->order->delivery->data->packages[$index41]->weight) {
    $jsonData["order"]["delivery"]["data"]["packages"][$index41]["weight"] = $model->order->delivery->data->packages[$index41]->weight;
}
if (null !== $model->order->delivery->data->packages[$index41]->length) {
    $jsonData["order"]["delivery"]["data"]["packages"][$index41]["length"] = $model->order->delivery->data->packages[$index41]->length;
}
if (null !== $model->order->delivery->data->packages[$index41]->width) {
    $jsonData["order"]["delivery"]["data"]["packages"][$index41]["width"] = $model->order->delivery->data->packages[$index41]->width;
}
if (null !== $model->order->delivery->data->packages[$index41]->height) {
    $jsonData["order"]["delivery"]["data"]["packages"][$index41]["height"] = $model->order->delivery->data->packages[$index41]->height;
}
if (null !== $model->order->delivery->data->packages[$index41]->items) {
    $jsonData["order"]["delivery"]["data"]["packages"][$index41]["items"] = [];
foreach (array_keys($model->order->delivery->data->packages[$index41]->items) as $index60) {
    $jsonData["order"]["delivery"]["data"]["packages"][$index41]["items"][$index60] = [];
if (null !== $model->order->delivery->data->packages[$index41]->items[$index60]->orderProduct) {
    $jsonData["order"]["delivery"]["data"]["packages"][$index41]["items"][$index60]["orderProduct"] = [];
if (null !== $model->order->delivery->data->packages[$index41]->items[$index60]->orderProduct->id) {
    $jsonData["order"]["delivery"]["data"]["packages"][$index41]["items"][$index60]["orderProduct"]["id"] = $model->order->delivery->data->packages[$index41]->items[$index60]->orderProduct->id;
}
if (null !== $model->order->delivery->data->packages[$index41]->items[$index60]->orderProduct->externalId) {
    $jsonData["order"]["delivery"]["data"]["packages"][$index41]["items"][$index60]["orderProduct"]["externalId"] = $model->order->delivery->data->packages[$index41]->items[$index60]->orderProduct->externalId;
}
if (null !== $model->order->delivery->data->packages[$index41]->items[$index60]->orderProduct->externalIds) {
    $jsonData["order"]["delivery"]["data"]["packages"][$index41]["items"][$index60]["orderProduct"]["externalIds"] = [];
foreach (array_keys($model->order->delivery->data->packages[$index41]->items[$index60]->orderProduct->externalIds) as $index101) {
    $jsonData["order"]["delivery"]["data"]["packages"][$index41]["items"][$index60]["orderProduct"]["externalIds"][$index101] = [];
if (null !== $model->order->delivery->data->packages[$index41]->items[$index60]->orderProduct->externalIds[$index101]->code) {
    $jsonData["order"]["delivery"]["data"]["packages"][$index41]["items"][$index60]["orderProduct"]["externalIds"][$index101]["code"] = $model->order->delivery->data->packages[$index41]->items[$index60]->orderProduct->externalIds[$index101]->code;
}
if (null !== $model->order->delivery->data->packages[$index41]->items[$index60]->orderProduct->externalIds[$index101]->value) {
    $jsonData["order"]["delivery"]["data"]["packages"][$index41]["items"][$index60]["orderProduct"]["externalIds"][$index101]["value"] = $model->order->delivery->data->packages[$index41]->items[$index60]->orderProduct->externalIds[$index101]->value;
}

if (0 === \count($jsonData["order"]["delivery"]["data"]["packages"][$index41]["items"][$index60]["orderProduct"]["externalIds"][$index101])) {
    $jsonData["order"]["delivery"]["data"]["packages"][$index41]["items"][$index60]["orderProduct"]["externalIds"][$index101] = $emptyObject;
}

}

}

if (0 === \count($jsonData["order"]["delivery"]["data"]["packages"][$index41]["items"][$index60]["orderProduct"])) {
    $jsonData["order"]["delivery"]["data"]["packages"][$index41]["items"][$index60]["orderProduct"] = $emptyObject;
}

}
if (null !== $model->order->delivery->data->packages[$index41]->items[$index60]->quantity) {
    $jsonData["order"]["delivery"]["data"]["packages"][$index41]["items"][$index60]["quantity"] = $model->order->delivery->data->packages[$index41]->items[$index60]->quantity;
}

if (0 === \count($jsonData["order"]["delivery"]["data"]["packages"][$index41]["items"][$index60])) {
    $jsonData["order"]["delivery"]["data"]["packages"][$index41]["items"][$index60] = $emptyObject;
}

}

}

if (0 === \count($jsonData["order"]["delivery"]["data"]["packages"][$index41])) {
    $jsonData["order"]["delivery"]["data"]["packages"][$index41] = $emptyObject;
}

}

}
if (null !== $model->order->delivery->data->returnExternalId) {
    $jsonData["order"]["delivery"]["data"]["returnExternalId"] = $model->order->delivery->data->returnExternalId;
}
if (null !== $model->order->delivery->data->deliveryName) {
    $jsonData["order"]["delivery"]["data"]["deliveryName"] = $model->order->delivery->data->deliveryName;
}
if (null !== $model->order->delivery->data->price) {
    $jsonData["order"]["delivery"]["data"]["price"] = $model->order->delivery->data->price;
}
if (null !== $model->order->delivery->data->insurancePrice) {
    $jsonData["order"]["delivery"]["data"]["insurancePrice"] = $model->order->delivery->data->insurancePrice;
}
if (null !== $model->order->delivery->data->tariffType) {
    $jsonData["order"]["delivery"]["data"]["tariffType"] = $model->order->delivery->data->tariffType;
}
if (null !== $model->order->delivery->data->receiverCity) {
    $jsonData["order"]["delivery"]["data"]["receiverCity"] = $model->order->delivery->data->receiverCity;
}
if (null !== $model->order->delivery->data->services) {
    $jsonData["order"]["delivery"]["data"]["services"] = [];
foreach (array_keys($model->order->delivery->data->services) as $index41) {
    $jsonData["order"]["delivery"]["data"]["services"] = $model->order->delivery->data->services;
}

}
if (null !== $model->order->delivery->data->packageNumber) {
    $jsonData["order"]["delivery"]["data"]["packageNumber"] = $model->order->delivery->data->packageNumber;
}
if (null !== $model->order->delivery->data->comment) {
    $jsonData["order"]["delivery"]["data"]["comment"] = $model->order->delivery->data->comment;
}
if (null !== $model->order->delivery->data->deliveryCode) {
    $jsonData["order"]["delivery"]["data"]["deliveryCode"] = $model->order->delivery->data->deliveryCode;
}
if (null !== $model->order->delivery->data->notes) {
    $jsonData["order"]["delivery"]["data"]["notes"] = $model->order->delivery->data->notes;
}
if (null !== $model->order->delivery->data->id) {
    $jsonData["order"]["delivery"]["data"]["id"] = $model->order->delivery->data->id;
}
if (null !== $model->order->delivery->data->firstName) {
    $jsonData["order"]["delivery"]["data"]["firstName"] = $model->order->delivery->data->firstName;
}
if (null !== $model->order->delivery->data->lastName) {
    $jsonData["order"]["delivery"]["data"]["lastName"] = $model->order->delivery->data->lastName;
}
if (null !== $model->order->delivery->data->patronymic) {
    $jsonData["order"]["delivery"]["data"]["patronymic"] = $model->order->delivery->data->patronymic;
}
if (null !== $model->order->delivery->data->active) {
    $jsonData["order"]["delivery"]["data"]["active"] = $model->order->delivery->data->active;
}
if (null !== $model->order->delivery->data->email) {
    $jsonData["order"]["delivery"]["data"]["email"] = $model->order->delivery->data->email;
}
if (null !== $model->order->delivery->data->phone) {
    $jsonData["order"]["delivery"]["data"]["phone"] = [];
if (null !== $model->order->delivery->data->phone->number) {
    $jsonData["order"]["delivery"]["data"]["phone"]["number"] = $model->order->delivery->data->phone->number;
}

if (0 === \count($jsonData["order"]["delivery"]["data"]["phone"])) {
    $jsonData["order"]["delivery"]["data"]["phone"] = $emptyObject;
}

}
if (null !== $model->order->delivery->data->description) {
    $jsonData["order"]["delivery"]["data"]["description"] = $model->order->delivery->data->description;
}
if (null !== $model->order->delivery->data->courierId) {
    $jsonData["order"]["delivery"]["data"]["courierId"] = $model->order->delivery->data->courierId;
}
if (null !== $model->order->delivery->data->serviceType) {
    $jsonData["order"]["delivery"]["data"]["serviceType"] = $model->order->delivery->data->serviceType;
}
if (null !== $model->order->delivery->data->pickuppoint) {
    $jsonData["order"]["delivery"]["data"]["pickuppoint"] = $model->order->delivery->data->pickuppoint;
}
if (null !== $model->order->delivery->data->receiverWarehouseTypeRef) {
    $jsonData["order"]["delivery"]["data"]["receiverWarehouseTypeRef"] = $model->order->delivery->data->receiverWarehouseTypeRef;
}
if (null !== $model->order->delivery->data->statusName) {
    $jsonData["order"]["delivery"]["data"]["statusName"] = $model->order->delivery->data->statusName;
}
if (null !== $model->order->delivery->data->receiverCityRef) {
    $jsonData["order"]["delivery"]["data"]["receiverCityRef"] = $model->order->delivery->data->receiverCityRef;
}
if (null !== $model->order->delivery->data->receiverStreet) {
    $jsonData["order"]["delivery"]["data"]["receiverStreet"] = $model->order->delivery->data->receiverStreet;
}
if (null !== $model->order->delivery->data->receiverStreetRef) {
    $jsonData["order"]["delivery"]["data"]["receiverStreetRef"] = $model->order->delivery->data->receiverStreetRef;
}
if (null !== $model->order->delivery->data->seatsAmount) {
    $jsonData["order"]["delivery"]["data"]["seatsAmount"] = $model->order->delivery->data->seatsAmount;
}
if (null !== $model->order->delivery->data->cargoType) {
    $jsonData["order"]["delivery"]["data"]["cargoType"] = $model->order->delivery->data->cargoType;
}
if (null !== $model->order->delivery->data->cargoDescription) {
    $jsonData["order"]["delivery"]["data"]["cargoDescription"] = $model->order->delivery->data->cargoDescription;
}
if (null !== $model->order->delivery->data->cashPayerType) {
    $jsonData["order"]["delivery"]["data"]["cashPayerType"] = $model->order->delivery->data->cashPayerType;
}
if (null !== $model->order->delivery->data->paymentForm) {
    $jsonData["order"]["delivery"]["data"]["paymentForm"] = $model->order->delivery->data->paymentForm;
}
if (null !== $model->order->delivery->data->ownershipForm) {
    $jsonData["order"]["delivery"]["data"]["ownershipForm"] = $model->order->delivery->data->ownershipForm;
}
if (null !== $model->order->delivery->data->accompanyingDocument) {
    $jsonData["order"]["delivery"]["data"]["accompanyingDocument"] = $model->order->delivery->data->accompanyingDocument;
}
if (null !== $model->order->delivery->data->preferredDeliveryDate) {
    $jsonData["order"]["delivery"]["data"]["preferredDeliveryDate"] = $model->order->delivery->data->preferredDeliveryDate->format('Y-m-d H:i:s');;
}
if (null !== $model->order->delivery->data->timeInterval) {
    $jsonData["order"]["delivery"]["data"]["timeInterval"] = $model->order->delivery->data->timeInterval;
}
if (null !== $model->order->delivery->data->saturdayDelivery) {
    $jsonData["order"]["delivery"]["data"]["saturdayDelivery"] = $model->order->delivery->data->saturdayDelivery;
}
if (null !== $model->order->delivery->data->deliveryDate) {
    $jsonData["order"]["delivery"]["data"]["deliveryDate"] = $model->order->delivery->data->deliveryDate;
}
if (null !== $model->order->delivery->data->denieReason) {
    $jsonData["order"]["delivery"]["data"]["denieReason"] = $model->order->delivery->data->denieReason;
}
if (null !== $model->order->delivery->data->backwardDelivery) {
    $jsonData["order"]["delivery"]["data"]["backwardDelivery"] = $model->order->delivery->data->backwardDelivery;
}
if (null !== $model->order->delivery->data->backwardDeliveryCargoType) {
    $jsonData["order"]["delivery"]["data"]["backwardDeliveryCargoType"] = $model->order->delivery->data->backwardDeliveryCargoType;
}
if (null !== $model->order->delivery->data->backwardDeliveryPayerType) {
    $jsonData["order"]["delivery"]["data"]["backwardDeliveryPayerType"] = $model->order->delivery->data->backwardDeliveryPayerType;
}
if (null !== $model->order->delivery->data->backwardDeliveryRedeliveryString) {
    $jsonData["order"]["delivery"]["data"]["backwardDeliveryRedeliveryString"] = $model->order->delivery->data->backwardDeliveryRedeliveryString;
}
if (null !== $model->order->delivery->data->afterpaymentOnGoodsCost) {
    $jsonData["order"]["delivery"]["data"]["afterpaymentOnGoodsCost"] = $model->order->delivery->data->afterpaymentOnGoodsCost;
}
if (null !== $model->order->delivery->data->declaredValue) {
    $jsonData["order"]["delivery"]["data"]["declaredValue"] = $model->order->delivery->data->declaredValue;
}
if (null !== $model->order->delivery->data->sendDate) {
    $jsonData["order"]["delivery"]["data"]["sendDate"] = $model->order->delivery->data->sendDate->format('Y-m-d H:i:s');;
}
if (null !== $model->order->delivery->data->deliveryType) {
    $jsonData["order"]["delivery"]["data"]["deliveryType"] = $model->order->delivery->data->deliveryType;
}
if (null !== $model->order->delivery->data->pickupType) {
    $jsonData["order"]["delivery"]["data"]["pickupType"] = $model->order->delivery->data->pickupType;
}
if (null !== $model->order->delivery->data->pickuppointDescription) {
    $jsonData["order"]["delivery"]["data"]["pickuppointDescription"] = $model->order->delivery->data->pickuppointDescription;
}
if (null !== $model->order->delivery->data->placesCount) {
    $jsonData["order"]["delivery"]["data"]["placesCount"] = $model->order->delivery->data->placesCount;
}
if (null !== $model->order->delivery->data->service) {
    $jsonData["order"]["delivery"]["data"]["service"] = $model->order->delivery->data->service;
}

if (0 === \count($jsonData["order"]["delivery"]["data"])) {
    $jsonData["order"]["delivery"]["data"] = $emptyObject;
}

}
if (null !== $model->order->delivery->service) {
    $jsonData["order"]["delivery"]["service"] = [];
if (null !== $model->order->delivery->service->name) {
    $jsonData["order"]["delivery"]["service"]["name"] = $model->order->delivery->service->name;
}
if (null !== $model->order->delivery->service->code) {
    $jsonData["order"]["delivery"]["service"]["code"] = $model->order->delivery->service->code;
}
if (null !== $model->order->delivery->service->active) {
    $jsonData["order"]["delivery"]["service"]["active"] = $model->order->delivery->service->active;
}

if (0 === \count($jsonData["order"]["delivery"]["service"])) {
    $jsonData["order"]["delivery"]["service"] = $emptyObject;
}

}
if (null !== $model->order->delivery->cost) {
    $jsonData["order"]["delivery"]["cost"] = $model->order->delivery->cost;
}
if (null !== $model->order->delivery->netCost) {
    $jsonData["order"]["delivery"]["netCost"] = $model->order->delivery->netCost;
}
if (null !== $model->order->delivery->date) {
    $jsonData["order"]["delivery"]["date"] = $model->order->delivery->date->format('Y-m-d');;
}
if (null !== $model->order->delivery->time) {
    $jsonData["order"]["delivery"]["time"] = [];
if (null !== $model->order->delivery->time->from) {
    $jsonData["order"]["delivery"]["time"]["from"] = $model->order->delivery->time->from->format('H:i');;
}
if (null !== $model->order->delivery->time->to) {
    $jsonData["order"]["delivery"]["time"]["to"] = $model->order->delivery->time->to->format('H:i');;
}
if (null !== $model->order->delivery->time->custom) {
    $jsonData["order"]["delivery"]["time"]["custom"] = $model->order->delivery->time->custom;
}

if (0 === \count($jsonData["order"]["delivery"]["time"])) {
    $jsonData["order"]["delivery"]["time"] = $emptyObject;
}

}
if (null !== $model->order->delivery->address) {
    $jsonData["order"]["delivery"]["address"] = [];
if (null !== $model->order->delivery->address->id) {
    $jsonData["order"]["delivery"]["address"]["id"] = $model->order->delivery->address->id;
}
if (null !== $model->order->delivery->address->index) {
    $jsonData["order"]["delivery"]["address"]["index"] = $model->order->delivery->address->index;
}
if (null !== $model->order->delivery->address->countryIso) {
    $jsonData["order"]["delivery"]["address"]["countryIso"] = $model->order->delivery->address->countryIso;
}
if (null !== $model->order->delivery->address->region) {
    $jsonData["order"]["delivery"]["address"]["region"] = $model->order->delivery->address->region;
}
if (null !== $model->order->delivery->address->regionId) {
    $jsonData["order"]["delivery"]["address"]["regionId"] = $model->order->delivery->address->regionId;
}
if (null !== $model->order->delivery->address->city) {
    $jsonData["order"]["delivery"]["address"]["city"] = $model->order->delivery->address->city;
}
if (null !== $model->order->delivery->address->cityId) {
    $jsonData["order"]["delivery"]["address"]["cityId"] = $model->order->delivery->address->cityId;
}
if (null !== $model->order->delivery->address->cityType) {
    $jsonData["order"]["delivery"]["address"]["cityType"] = $model->order->delivery->address->cityType;
}
if (null !== $model->order->delivery->address->street) {
    $jsonData["order"]["delivery"]["address"]["street"] = $model->order->delivery->address->street;
}
if (null !== $model->order->delivery->address->streetId) {
    $jsonData["order"]["delivery"]["address"]["streetId"] = $model->order->delivery->address->streetId;
}
if (null !== $model->order->delivery->address->streetType) {
    $jsonData["order"]["delivery"]["address"]["streetType"] = $model->order->delivery->address->streetType;
}
if (null !== $model->order->delivery->address->building) {
    $jsonData["order"]["delivery"]["address"]["building"] = $model->order->delivery->address->building;
}
if (null !== $model->order->delivery->address->flat) {
    $jsonData["order"]["delivery"]["address"]["flat"] = $model->order->delivery->address->flat;
}
if (null !== $model->order->delivery->address->floor) {
    $jsonData["order"]["delivery"]["address"]["floor"] = $model->order->delivery->address->floor;
}
if (null !== $model->order->delivery->address->block) {
    $jsonData["order"]["delivery"]["address"]["block"] = $model->order->delivery->address->block;
}
if (null !== $model->order->delivery->address->house) {
    $jsonData["order"]["delivery"]["address"]["house"] = $model->order->delivery->address->house;
}
if (null !== $model->order->delivery->address->housing) {
    $jsonData["order"]["delivery"]["address"]["housing"] = $model->order->delivery->address->housing;
}
if (null !== $model->order->delivery->address->metro) {
    $jsonData["order"]["delivery"]["address"]["metro"] = $model->order->delivery->address->metro;
}
if (null !== $model->order->delivery->address->text) {
    $jsonData["order"]["delivery"]["address"]["text"] = $model->order->delivery->address->text;
}
if (null !== $model->order->delivery->address->notes) {
    $jsonData["order"]["delivery"]["address"]["notes"] = $model->order->delivery->address->notes;
}

if (0 === \count($jsonData["order"]["delivery"]["address"])) {
    $jsonData["order"]["delivery"]["address"] = $emptyObject;
}

}
if (null !== $model->order->delivery->vatRate) {
    $jsonData["order"]["delivery"]["vatRate"] = $model->order->delivery->vatRate;
}

if (0 === \count($jsonData["order"]["delivery"])) {
    $jsonData["order"]["delivery"] = $emptyObject;
}

}
if (null !== $model->order->marketplace) {
    $jsonData["order"]["marketplace"] = [];
if (null !== $model->order->marketplace->code) {
    $jsonData["order"]["marketplace"]["code"] = $model->order->marketplace->code;
}
if (null !== $model->order->marketplace->orderId) {
    $jsonData["order"]["marketplace"]["orderId"] = $model->order->marketplace->orderId;
}

if (0 === \count($jsonData["order"]["marketplace"])) {
    $jsonData["order"]["marketplace"] = $emptyObject;
}

}
if (null !== $model->order->site) {
    $jsonData["order"]["site"] = $model->order->site;
}
if (null !== $model->order->status) {
    $jsonData["order"]["status"] = $model->order->status;
}
if (null !== $model->order->statusComment) {
    $jsonData["order"]["statusComment"] = $model->order->statusComment;
}
if (null !== $model->order->source) {
    $jsonData["order"]["source"] = [];
if (null !== $model->order->source->source) {
    $jsonData["order"]["source"]["source"] = $model->order->source->source;
}
if (null !== $model->order->source->medium) {
    $jsonData["order"]["source"]["medium"] = $model->order->source->medium;
}
if (null !== $model->order->source->campaign) {
    $jsonData["order"]["source"]["campaign"] = $model->order->source->campaign;
}
if (null !== $model->order->source->keyword) {
    $jsonData["order"]["source"]["keyword"] = $model->order->source->keyword;
}
if (null !== $model->order->source->content) {
    $jsonData["order"]["source"]["content"] = $model->order->source->content;
}

if (0 === \count($jsonData["order"]["source"])) {
    $jsonData["order"]["source"] = $emptyObject;
}

}
if (null !== $model->order->items) {
    $jsonData["order"]["items"] = [];
foreach (array_keys($model->order->items) as $index18) {
    $jsonData["order"]["items"][$index18] = [];
if (null !== $model->order->items[$index18]->externalId) {
    $jsonData["order"]["items"][$index18]["externalId"] = $model->order->items[$index18]->externalId;
}
if (null !== $model->order->items[$index18]->markingCodes) {
    $jsonData["order"]["items"][$index18]["markingCodes"] = [];
foreach (array_keys($model->order->items[$index18]->markingCodes) as $index44) {
    $jsonData["order"]["items"][$index18]["markingCodes"] = $model->order->items[$index18]->markingCodes;
}

}
if (null !== $model->order->items[$index18]->id) {
    $jsonData["order"]["items"][$index18]["id"] = $model->order->items[$index18]->id;
}
if (null !== $model->order->items[$index18]->externalIds) {
    $jsonData["order"]["items"][$index18]["externalIds"] = [];
foreach (array_keys($model->order->items[$index18]->externalIds) as $index43) {
    $jsonData["order"]["items"][$index18]["externalIds"][$index43] = [];
if (null !== $model->order->items[$index18]->externalIds[$index43]->code) {
    $jsonData["order"]["items"][$index18]["externalIds"][$index43]["code"] = $model->order->items[$index18]->externalIds[$index43]->code;
}
if (null !== $model->order->items[$index18]->externalIds[$index43]->value) {
    $jsonData["order"]["items"][$index18]["externalIds"][$index43]["value"] = $model->order->items[$index18]->externalIds[$index43]->value;
}

if (0 === \count($jsonData["order"]["items"][$index18]["externalIds"][$index43])) {
    $jsonData["order"]["items"][$index18]["externalIds"][$index43] = $emptyObject;
}

}

}
if (null !== $model->order->items[$index18]->priceType) {
    $jsonData["order"]["items"][$index18]["priceType"] = [];
if (null !== $model->order->items[$index18]->priceType->code) {
    $jsonData["order"]["items"][$index18]["priceType"]["code"] = $model->order->items[$index18]->priceType->code;
}

if (0 === \count($jsonData["order"]["items"][$index18]["priceType"])) {
    $jsonData["order"]["items"][$index18]["priceType"] = $emptyObject;
}

}
if (null !== $model->order->items[$index18]->initialPrice) {
    $jsonData["order"]["items"][$index18]["initialPrice"] = $model->order->items[$index18]->initialPrice;
}
if (null !== $model->order->items[$index18]->discountManualAmount) {
    $jsonData["order"]["items"][$index18]["discountManualAmount"] = $model->order->items[$index18]->discountManualAmount;
}
if (null !== $model->order->items[$index18]->discountManualPercent) {
    $jsonData["order"]["items"][$index18]["discountManualPercent"] = $model->order->items[$index18]->discountManualPercent;
}
if (null !== $model->order->items[$index18]->discountTotal) {
    $jsonData["order"]["items"][$index18]["discountTotal"] = $model->order->items[$index18]->discountTotal;
}
if (null !== $model->order->items[$index18]->prices) {
    $jsonData["order"]["items"][$index18]["prices"] = [];
foreach (array_keys($model->order->items[$index18]->prices) as $index38) {
    $jsonData["order"]["items"][$index18]["prices"][$index38] = [];
if (null !== $model->order->items[$index18]->prices[$index38]->price) {
    $jsonData["order"]["items"][$index18]["prices"][$index38]["price"] = $model->order->items[$index18]->prices[$index38]->price;
}
if (null !== $model->order->items[$index18]->prices[$index38]->quantity) {
    $jsonData["order"]["items"][$index18]["prices"][$index38]["quantity"] = $model->order->items[$index18]->prices[$index38]->quantity;
}

if (0 === \count($jsonData["order"]["items"][$index18]["prices"][$index38])) {
    $jsonData["order"]["items"][$index18]["prices"][$index38] = $emptyObject;
}

}

}
if (null !== $model->order->items[$index18]->vatRate) {
    $jsonData["order"]["items"][$index18]["vatRate"] = $model->order->items[$index18]->vatRate;
}
if (null !== $model->order->items[$index18]->createdAt) {
    $jsonData["order"]["items"][$index18]["createdAt"] = $model->order->items[$index18]->createdAt->format('Y-m-d H:i:s');;
}
if (null !== $model->order->items[$index18]->quantity) {
    $jsonData["order"]["items"][$index18]["quantity"] = $model->order->items[$index18]->quantity;
}
if (null !== $model->order->items[$index18]->status) {
    $jsonData["order"]["items"][$index18]["status"] = $model->order->items[$index18]->status;
}
if (null !== $model->order->items[$index18]->comment) {
    $jsonData["order"]["items"][$index18]["comment"] = $model->order->items[$index18]->comment;
}
if (null !== $model->order->items[$index18]->offer) {
    $jsonData["order"]["items"][$index18]["offer"] = [];
if (null !== $model->order->items[$index18]->offer->displayName) {
    $jsonData["order"]["items"][$index18]["offer"]["displayName"] = $model->order->items[$index18]->offer->displayName;
}
if (null !== $model->order->items[$index18]->offer->id) {
    $jsonData["order"]["items"][$index18]["offer"]["id"] = $model->order->items[$index18]->offer->id;
}
if (null !== $model->order->items[$index18]->offer->externalId) {
    $jsonData["order"]["items"][$index18]["offer"]["externalId"] = $model->order->items[$index18]->offer->externalId;
}
if (null !== $model->order->items[$index18]->offer->xmlId) {
    $jsonData["order"]["items"][$index18]["offer"]["xmlId"] = $model->order->items[$index18]->offer->xmlId;
}
if (null !== $model->order->items[$index18]->offer->name) {
    $jsonData["order"]["items"][$index18]["offer"]["name"] = $model->order->items[$index18]->offer->name;
}
if (null !== $model->order->items[$index18]->offer->article) {
    $jsonData["order"]["items"][$index18]["offer"]["article"] = $model->order->items[$index18]->offer->article;
}
if (null !== $model->order->items[$index18]->offer->vatRate) {
    $jsonData["order"]["items"][$index18]["offer"]["vatRate"] = $model->order->items[$index18]->offer->vatRate;
}
if (null !== $model->order->items[$index18]->offer->unit) {
    $jsonData["order"]["items"][$index18]["offer"]["unit"] = [];
if (null !== $model->order->items[$index18]->offer->unit->code) {
    $jsonData["order"]["items"][$index18]["offer"]["unit"]["code"] = $model->order->items[$index18]->offer->unit->code;
}
if (null !== $model->order->items[$index18]->offer->unit->name) {
    $jsonData["order"]["items"][$index18]["offer"]["unit"]["name"] = $model->order->items[$index18]->offer->unit->name;
}
if (null !== $model->order->items[$index18]->offer->unit->sym) {
    $jsonData["order"]["items"][$index18]["offer"]["unit"]["sym"] = $model->order->items[$index18]->offer->unit->sym;
}

if (0 === \count($jsonData["order"]["items"][$index18]["offer"]["unit"])) {
    $jsonData["order"]["items"][$index18]["offer"]["unit"] = $emptyObject;
}

}
if (null !== $model->order->items[$index18]->offer->barcode) {
    $jsonData["order"]["items"][$index18]["offer"]["barcode"] = $model->order->items[$index18]->offer->barcode;
}
if (null !== $model->order->items[$index18]->offer->properties) {
    $jsonData["order"]["items"][$index18]["offer"]["properties"] = [];
foreach (array_keys($model->order->items[$index18]->offer->properties) as $index51) {
    $jsonData["order"]["items"][$index18]["offer"]["properties"] = $model->order->items[$index18]->offer->properties;
}

}

if (0 === \count($jsonData["order"]["items"][$index18]["offer"])) {
    $jsonData["order"]["items"][$index18]["offer"] = $emptyObject;
}

}
if (null !== $model->order->items[$index18]->order) {
    $jsonData["order"]["items"][$index18]["order"] = [];
if (null !== $model->order->items[$index18]->order->id) {
    $jsonData["order"]["items"][$index18]["order"]["id"] = $model->order->items[$index18]->order->id;
}

if (0 === \count($jsonData["order"]["items"][$index18]["order"])) {
    $jsonData["order"]["items"][$index18]["order"] = $emptyObject;
}

}
if (null !== $model->order->items[$index18]->productName) {
    $jsonData["order"]["items"][$index18]["productName"] = $model->order->items[$index18]->productName;
}
if (null !== $model->order->items[$index18]->isCanceled) {
    $jsonData["order"]["items"][$index18]["isCanceled"] = $model->order->items[$index18]->isCanceled;
}
if (null !== $model->order->items[$index18]->properties) {
    if (0 === \count($model->order->items[$index18]->properties)) {
    $jsonData["order"]["items"][$index18]["properties"] = $emptyHashmap;
} else {
    foreach (array_keys($model->order->items[$index18]->properties) as $index42) {
        $jsonData["order"]["items"][$index18]["properties"][$index42] = [];
if (null !== $model->order->items[$index18]->properties[$index42]->code) {
    $jsonData["order"]["items"][$index18]["properties"][$index42]["code"] = $model->order->items[$index18]->properties[$index42]->code;
}
if (null !== $model->order->items[$index18]->properties[$index42]->name) {
    $jsonData["order"]["items"][$index18]["properties"][$index42]["name"] = $model->order->items[$index18]->properties[$index42]->name;
}
if (null !== $model->order->items[$index18]->properties[$index42]->value) {
    $jsonData["order"]["items"][$index18]["properties"][$index42]["value"] = $model->order->items[$index18]->properties[$index42]->value;
}

if (0 === \count($jsonData["order"]["items"][$index18]["properties"][$index42])) {
    $jsonData["order"]["items"][$index18]["properties"][$index42] = $emptyObject;
}

    }
}

}
if (null !== $model->order->items[$index18]->purchasePrice) {
    $jsonData["order"]["items"][$index18]["purchasePrice"] = $model->order->items[$index18]->purchasePrice;
}

if (0 === \count($jsonData["order"]["items"][$index18])) {
    $jsonData["order"]["items"][$index18] = $emptyObject;
}

}

}
if (null !== $model->order->fullPaidAt) {
    $jsonData["order"]["fullPaidAt"] = $model->order->fullPaidAt->format('Y-m-d H:i:s');;
}
if (null !== $model->order->payments) {
    $jsonData["order"]["payments"] = [];
foreach (array_keys($model->order->payments) as $index21) {
    $jsonData["order"]["payments"][$index21] = [];
if (null !== $model->order->payments[$index21]->id) {
    $jsonData["order"]["payments"][$index21]["id"] = $model->order->payments[$index21]->id;
}
if (null !== $model->order->payments[$index21]->status) {
    $jsonData["order"]["payments"][$index21]["status"] = $model->order->payments[$index21]->status;
}
if (null !== $model->order->payments[$index21]->type) {
    $jsonData["order"]["payments"][$index21]["type"] = $model->order->payments[$index21]->type;
}
if (null !== $model->order->payments[$index21]->externalId) {
    $jsonData["order"]["payments"][$index21]["externalId"] = $model->order->payments[$index21]->externalId;
}
if (null !== $model->order->payments[$index21]->amount) {
    $jsonData["order"]["payments"][$index21]["amount"] = $model->order->payments[$index21]->amount;
}
if (null !== $model->order->payments[$index21]->paidAt) {
    $jsonData["order"]["payments"][$index21]["paidAt"] = $model->order->payments[$index21]->paidAt->format('Y-m-d H:i:s');;
}
if (null !== $model->order->payments[$index21]->comment) {
    $jsonData["order"]["payments"][$index21]["comment"] = $model->order->payments[$index21]->comment;
}

if (0 === \count($jsonData["order"]["payments"][$index21])) {
    $jsonData["order"]["payments"][$index21] = $emptyObject;
}

}

}
if (null !== $model->order->fromApi) {
    $jsonData["order"]["fromApi"] = $model->order->fromApi;
}
if (null !== $model->order->weight) {
    $jsonData["order"]["weight"] = $model->order->weight;
}
if (null !== $model->order->length) {
    $jsonData["order"]["length"] = $model->order->length;
}
if (null !== $model->order->width) {
    $jsonData["order"]["width"] = $model->order->width;
}
if (null !== $model->order->height) {
    $jsonData["order"]["height"] = $model->order->height;
}
if (null !== $model->order->shipmentStore) {
    $jsonData["order"]["shipmentStore"] = $model->order->shipmentStore;
}
if (null !== $model->order->shipmentDate) {
    $jsonData["order"]["shipmentDate"] = $model->order->shipmentDate->format('Y-m-d');;
}
if (null !== $model->order->shipped) {
    $jsonData["order"]["shipped"] = $model->order->shipped;
}
if (null !== $model->order->dialogId) {
    $jsonData["order"]["dialogId"] = $model->order->dialogId;
}
if (null !== $model->order->customFields) {
    $jsonData["order"]["customFields"] = [];
foreach (array_keys($model->order->customFields) as $index25) {
    $jsonData["order"]["customFields"] = $model->order->customFields;
}

}
if (null !== $model->order->clientId) {
    $jsonData["order"]["clientId"] = $model->order->clientId;
}
if (null !== $model->order->loyaltyEventId) {
    $jsonData["order"]["loyaltyEventId"] = $model->order->loyaltyEventId;
}

if (0 === \count($jsonData["order"])) {
    $jsonData["order"] = $emptyObject;
}

}

if (0 === \count($jsonData)) {
    $jsonData = $emptyObject;
}


    return $jsonData;
}
