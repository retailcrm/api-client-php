<?php

function serialize_RetailCrm_Api_Model_Entity_Order_OrderHistory(RetailCrm\Api\Model\Entity\Order\OrderHistory $model, bool $useStdClass = true)
{
    $emptyHashmap = $useStdClass ? new \stdClass() : [];
    $emptyObject = $useStdClass ? new \stdClass() : [];

    $jsonData = [];
if (null !== $model->id) {
    $jsonData["id"] = $model->id;
}
if (null !== $model->createdAt) {
    $jsonData["createdAt"] = $model->createdAt->format('Y-m-d H:i:s');;
}
if (null !== $model->created) {
    $jsonData["created"] = $model->created;
}
if (null !== $model->deleted) {
    $jsonData["deleted"] = $model->deleted;
}
if (null !== $model->source) {
    $jsonData["source"] = $model->source;
}
if (null !== $model->user) {
    $jsonData["user"] = [];
if (null !== $model->user->id) {
    $jsonData["user"]["id"] = $model->user->id;
}

if (0 === \count($jsonData["user"])) {
    $jsonData["user"] = $emptyObject;
}

}
if (null !== $model->field) {
    $jsonData["field"] = $model->field;
}
if (null !== $model->oldValue) {
    $jsonData["oldValue"] = $model->oldValue;
}
if (null !== $model->newValue) {
    $jsonData["newValue"] = $model->newValue;
}
if (null !== $model->apiKey) {
    $jsonData["apiKey"] = [];
if (null !== $model->apiKey->current) {
    $jsonData["apiKey"]["current"] = $model->apiKey->current;
}

if (0 === \count($jsonData["apiKey"])) {
    $jsonData["apiKey"] = $emptyObject;
}

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
if (null !== $model->ancestor) {
    $jsonData["ancestor"] = [];
if (null !== $model->ancestor->bonusesCreditTotal) {
    $jsonData["ancestor"]["bonusesCreditTotal"] = $model->ancestor->bonusesCreditTotal;
}
if (null !== $model->ancestor->bonusesChargeTotal) {
    $jsonData["ancestor"]["bonusesChargeTotal"] = $model->ancestor->bonusesChargeTotal;
}
if (null !== $model->ancestor->summ) {
    $jsonData["ancestor"]["summ"] = $model->ancestor->summ;
}
if (null !== $model->ancestor->id) {
    $jsonData["ancestor"]["id"] = $model->ancestor->id;
}
if (null !== $model->ancestor->slug) {
    $jsonData["ancestor"]["slug"] = $model->ancestor->slug;
}
if (null !== $model->ancestor->number) {
    $jsonData["ancestor"]["number"] = $model->ancestor->number;
}
if (null !== $model->ancestor->externalId) {
    $jsonData["ancestor"]["externalId"] = $model->ancestor->externalId;
}
if (null !== $model->ancestor->orderType) {
    $jsonData["ancestor"]["orderType"] = $model->ancestor->orderType;
}
if (null !== $model->ancestor->orderMethod) {
    $jsonData["ancestor"]["orderMethod"] = $model->ancestor->orderMethod;
}
if (null !== $model->ancestor->privilegeType) {
    $jsonData["ancestor"]["privilegeType"] = $model->ancestor->privilegeType;
}
if (null !== $model->ancestor->countryIso) {
    $jsonData["ancestor"]["countryIso"] = $model->ancestor->countryIso;
}
if (null !== $model->ancestor->createdAt) {
    $jsonData["ancestor"]["createdAt"] = $model->ancestor->createdAt->format('Y-m-d H:i:s');;
}
if (null !== $model->ancestor->statusUpdatedAt) {
    $jsonData["ancestor"]["statusUpdatedAt"] = $model->ancestor->statusUpdatedAt->format('Y-m-d H:i:s');;
}
if (null !== $model->ancestor->discountManualAmount) {
    $jsonData["ancestor"]["discountManualAmount"] = $model->ancestor->discountManualAmount;
}
if (null !== $model->ancestor->discountManualPercent) {
    $jsonData["ancestor"]["discountManualPercent"] = $model->ancestor->discountManualPercent;
}
if (null !== $model->ancestor->totalSumm) {
    $jsonData["ancestor"]["totalSumm"] = $model->ancestor->totalSumm;
}
if (null !== $model->ancestor->prepaySum) {
    $jsonData["ancestor"]["prepaySum"] = $model->ancestor->prepaySum;
}
if (null !== $model->ancestor->purchaseSumm) {
    $jsonData["ancestor"]["purchaseSumm"] = $model->ancestor->purchaseSumm;
}
if (null !== $model->ancestor->personalDiscountPercent) {
    $jsonData["ancestor"]["personalDiscountPercent"] = $model->ancestor->personalDiscountPercent;
}
if (null !== $model->ancestor->loyaltyLevel) {
    $jsonData["ancestor"]["loyaltyLevel"] = [];
if (null !== $model->ancestor->loyaltyLevel->id) {
    $jsonData["ancestor"]["loyaltyLevel"]["id"] = $model->ancestor->loyaltyLevel->id;
}
if (null !== $model->ancestor->loyaltyLevel->name) {
    $jsonData["ancestor"]["loyaltyLevel"]["name"] = $model->ancestor->loyaltyLevel->name;
}

if (0 === \count($jsonData["ancestor"]["loyaltyLevel"])) {
    $jsonData["ancestor"]["loyaltyLevel"] = $emptyObject;
}

}
if (null !== $model->ancestor->loyaltyEvent) {
    $jsonData["ancestor"]["loyaltyEvent"] = [];
if (null !== $model->ancestor->loyaltyEvent->id) {
    $jsonData["ancestor"]["loyaltyEvent"]["id"] = $model->ancestor->loyaltyEvent->id;
}

if (0 === \count($jsonData["ancestor"]["loyaltyEvent"])) {
    $jsonData["ancestor"]["loyaltyEvent"] = $emptyObject;
}

}
if (null !== $model->ancestor->mark) {
    $jsonData["ancestor"]["mark"] = $model->ancestor->mark;
}
if (null !== $model->ancestor->markDatetime) {
    $jsonData["ancestor"]["markDatetime"] = $model->ancestor->markDatetime->format('Y-m-d H:i:s');;
}
if (null !== $model->ancestor->lastName) {
    $jsonData["ancestor"]["lastName"] = $model->ancestor->lastName;
}
if (null !== $model->ancestor->firstName) {
    $jsonData["ancestor"]["firstName"] = $model->ancestor->firstName;
}
if (null !== $model->ancestor->patronymic) {
    $jsonData["ancestor"]["patronymic"] = $model->ancestor->patronymic;
}
if (null !== $model->ancestor->phone) {
    $jsonData["ancestor"]["phone"] = $model->ancestor->phone;
}
if (null !== $model->ancestor->additionalPhone) {
    $jsonData["ancestor"]["additionalPhone"] = $model->ancestor->additionalPhone;
}
if (null !== $model->ancestor->email) {
    $jsonData["ancestor"]["email"] = $model->ancestor->email;
}
if (null !== $model->ancestor->call) {
    $jsonData["ancestor"]["call"] = $model->ancestor->call;
}
if (null !== $model->ancestor->expired) {
    $jsonData["ancestor"]["expired"] = $model->ancestor->expired;
}
if (null !== $model->ancestor->customerComment) {
    $jsonData["ancestor"]["customerComment"] = $model->ancestor->customerComment;
}
if (null !== $model->ancestor->managerComment) {
    $jsonData["ancestor"]["managerComment"] = $model->ancestor->managerComment;
}
if (null !== $model->ancestor->managerId) {
    $jsonData["ancestor"]["managerId"] = $model->ancestor->managerId;
}
if (null !== $model->ancestor->customer) {
    $jsonData["ancestor"]["customer"] = [];

if ($model->ancestor->customer instanceof \RetailCrm\Api\Model\Entity\Customers\Customer) {
    $jsonData["ancestor"]["customer"] = [];
if (null !== $model->ancestor->customer->type) {
    $jsonData["ancestor"]["customer"]["type"] = $model->ancestor->customer->type;
}
if (null !== $model->ancestor->customer->id) {
    $jsonData["ancestor"]["customer"]["id"] = $model->ancestor->customer->id;
}
if (null !== $model->ancestor->customer->externalId) {
    $jsonData["ancestor"]["customer"]["externalId"] = $model->ancestor->customer->externalId;
}
if (null !== $model->ancestor->customer->isContact) {
    $jsonData["ancestor"]["customer"]["isContact"] = $model->ancestor->customer->isContact;
}
if (null !== $model->ancestor->customer->createdAt) {
    $jsonData["ancestor"]["customer"]["createdAt"] = $model->ancestor->customer->createdAt->format('Y-m-d H:i:s');;
}
if (null !== $model->ancestor->customer->managerId) {
    $jsonData["ancestor"]["customer"]["managerId"] = $model->ancestor->customer->managerId;
}
if (null !== $model->ancestor->customer->vip) {
    $jsonData["ancestor"]["customer"]["vip"] = $model->ancestor->customer->vip;
}
if (null !== $model->ancestor->customer->bad) {
    $jsonData["ancestor"]["customer"]["bad"] = $model->ancestor->customer->bad;
}
if (null !== $model->ancestor->customer->browserId) {
    $jsonData["ancestor"]["customer"]["browserId"] = $model->ancestor->customer->browserId;
}
if (null !== $model->ancestor->customer->site) {
    $jsonData["ancestor"]["customer"]["site"] = $model->ancestor->customer->site;
}
if (null !== $model->ancestor->customer->contragent) {
    $jsonData["ancestor"]["customer"]["contragent"] = [];
if (null !== $model->ancestor->customer->contragent->contragentType) {
    $jsonData["ancestor"]["customer"]["contragent"]["contragentType"] = $model->ancestor->customer->contragent->contragentType;
}
if (null !== $model->ancestor->customer->contragent->legalName) {
    $jsonData["ancestor"]["customer"]["contragent"]["legalName"] = $model->ancestor->customer->contragent->legalName;
}
if (null !== $model->ancestor->customer->contragent->legalAddress) {
    $jsonData["ancestor"]["customer"]["contragent"]["legalAddress"] = $model->ancestor->customer->contragent->legalAddress;
}
if (null !== $model->ancestor->customer->contragent->INN) {
    $jsonData["ancestor"]["customer"]["contragent"]["INN"] = $model->ancestor->customer->contragent->INN;
}
if (null !== $model->ancestor->customer->contragent->OKPO) {
    $jsonData["ancestor"]["customer"]["contragent"]["OKPO"] = $model->ancestor->customer->contragent->OKPO;
}
if (null !== $model->ancestor->customer->contragent->KPP) {
    $jsonData["ancestor"]["customer"]["contragent"]["KPP"] = $model->ancestor->customer->contragent->KPP;
}
if (null !== $model->ancestor->customer->contragent->OGRN) {
    $jsonData["ancestor"]["customer"]["contragent"]["OGRN"] = $model->ancestor->customer->contragent->OGRN;
}
if (null !== $model->ancestor->customer->contragent->OGRNIP) {
    $jsonData["ancestor"]["customer"]["contragent"]["OGRNIP"] = $model->ancestor->customer->contragent->OGRNIP;
}
if (null !== $model->ancestor->customer->contragent->certificateNumber) {
    $jsonData["ancestor"]["customer"]["contragent"]["certificateNumber"] = $model->ancestor->customer->contragent->certificateNumber;
}
if (null !== $model->ancestor->customer->contragent->certificateDate) {
    $jsonData["ancestor"]["customer"]["contragent"]["certificateDate"] = $model->ancestor->customer->contragent->certificateDate->format('Y-m-d H:i:s');;
}
if (null !== $model->ancestor->customer->contragent->BIK) {
    $jsonData["ancestor"]["customer"]["contragent"]["BIK"] = $model->ancestor->customer->contragent->BIK;
}
if (null !== $model->ancestor->customer->contragent->bank) {
    $jsonData["ancestor"]["customer"]["contragent"]["bank"] = $model->ancestor->customer->contragent->bank;
}
if (null !== $model->ancestor->customer->contragent->bankAddress) {
    $jsonData["ancestor"]["customer"]["contragent"]["bankAddress"] = $model->ancestor->customer->contragent->bankAddress;
}
if (null !== $model->ancestor->customer->contragent->corrAccount) {
    $jsonData["ancestor"]["customer"]["contragent"]["corrAccount"] = $model->ancestor->customer->contragent->corrAccount;
}
if (null !== $model->ancestor->customer->contragent->bankAccount) {
    $jsonData["ancestor"]["customer"]["contragent"]["bankAccount"] = $model->ancestor->customer->contragent->bankAccount;
}

if (0 === \count($jsonData["ancestor"]["customer"]["contragent"])) {
    $jsonData["ancestor"]["customer"]["contragent"] = $emptyObject;
}

}
if (null !== $model->ancestor->customer->tags) {
    $jsonData["ancestor"]["customer"]["tags"] = [];
foreach (array_keys($model->ancestor->customer->tags) as $index32) {
    $jsonData["ancestor"]["customer"]["tags"][$index32] = $model->ancestor->customer->tags[$index32]->name;
}

}
if (null !== $model->ancestor->customer->avgMarginSumm) {
    $jsonData["ancestor"]["customer"]["avgMarginSumm"] = $model->ancestor->customer->avgMarginSumm;
}
if (null !== $model->ancestor->customer->marginSumm) {
    $jsonData["ancestor"]["customer"]["marginSumm"] = $model->ancestor->customer->marginSumm;
}
if (null !== $model->ancestor->customer->totalSumm) {
    $jsonData["ancestor"]["customer"]["totalSumm"] = $model->ancestor->customer->totalSumm;
}
if (null !== $model->ancestor->customer->averageSumm) {
    $jsonData["ancestor"]["customer"]["averageSumm"] = $model->ancestor->customer->averageSumm;
}
if (null !== $model->ancestor->customer->ordersCount) {
    $jsonData["ancestor"]["customer"]["ordersCount"] = $model->ancestor->customer->ordersCount;
}
if (null !== $model->ancestor->customer->costSumm) {
    $jsonData["ancestor"]["customer"]["costSumm"] = $model->ancestor->customer->costSumm;
}
if (null !== $model->ancestor->customer->customFields) {
    $jsonData["ancestor"]["customer"]["customFields"] = [];
foreach (array_keys($model->ancestor->customer->customFields) as $index40) {
    $jsonData["ancestor"]["customer"]["customFields"] = $model->ancestor->customer->customFields;
}

}
if (null !== $model->ancestor->customer->personalDiscount) {
    $jsonData["ancestor"]["customer"]["personalDiscount"] = $model->ancestor->customer->personalDiscount;
}
if (null !== $model->ancestor->customer->cumulativeDiscount) {
    $jsonData["ancestor"]["customer"]["cumulativeDiscount"] = $model->ancestor->customer->cumulativeDiscount;
}
if (null !== $model->ancestor->customer->discountCardNumber) {
    $jsonData["ancestor"]["customer"]["discountCardNumber"] = $model->ancestor->customer->discountCardNumber;
}
if (null !== $model->ancestor->customer->firstClientId) {
    $jsonData["ancestor"]["customer"]["firstClientId"] = $model->ancestor->customer->firstClientId;
}
if (null !== $model->ancestor->customer->lastClientId) {
    $jsonData["ancestor"]["customer"]["lastClientId"] = $model->ancestor->customer->lastClientId;
}
if (null !== $model->ancestor->customer->address) {
    $jsonData["ancestor"]["customer"]["address"] = [];
if (null !== $model->ancestor->customer->address->id) {
    $jsonData["ancestor"]["customer"]["address"]["id"] = $model->ancestor->customer->address->id;
}
if (null !== $model->ancestor->customer->address->name) {
    $jsonData["ancestor"]["customer"]["address"]["name"] = $model->ancestor->customer->address->name;
}
if (null !== $model->ancestor->customer->address->isMain) {
    $jsonData["ancestor"]["customer"]["address"]["isMain"] = $model->ancestor->customer->address->isMain;
}
if (null !== $model->ancestor->customer->address->index) {
    $jsonData["ancestor"]["customer"]["address"]["index"] = $model->ancestor->customer->address->index;
}
if (null !== $model->ancestor->customer->address->countryIso) {
    $jsonData["ancestor"]["customer"]["address"]["countryIso"] = $model->ancestor->customer->address->countryIso;
}
if (null !== $model->ancestor->customer->address->region) {
    $jsonData["ancestor"]["customer"]["address"]["region"] = $model->ancestor->customer->address->region;
}
if (null !== $model->ancestor->customer->address->regionId) {
    $jsonData["ancestor"]["customer"]["address"]["regionId"] = $model->ancestor->customer->address->regionId;
}
if (null !== $model->ancestor->customer->address->city) {
    $jsonData["ancestor"]["customer"]["address"]["city"] = $model->ancestor->customer->address->city;
}
if (null !== $model->ancestor->customer->address->cityId) {
    $jsonData["ancestor"]["customer"]["address"]["cityId"] = $model->ancestor->customer->address->cityId;
}
if (null !== $model->ancestor->customer->address->cityType) {
    $jsonData["ancestor"]["customer"]["address"]["cityType"] = $model->ancestor->customer->address->cityType;
}
if (null !== $model->ancestor->customer->address->street) {
    $jsonData["ancestor"]["customer"]["address"]["street"] = $model->ancestor->customer->address->street;
}
if (null !== $model->ancestor->customer->address->streetId) {
    $jsonData["ancestor"]["customer"]["address"]["streetId"] = $model->ancestor->customer->address->streetId;
}
if (null !== $model->ancestor->customer->address->streetType) {
    $jsonData["ancestor"]["customer"]["address"]["streetType"] = $model->ancestor->customer->address->streetType;
}
if (null !== $model->ancestor->customer->address->building) {
    $jsonData["ancestor"]["customer"]["address"]["building"] = $model->ancestor->customer->address->building;
}
if (null !== $model->ancestor->customer->address->flat) {
    $jsonData["ancestor"]["customer"]["address"]["flat"] = $model->ancestor->customer->address->flat;
}
if (null !== $model->ancestor->customer->address->floor) {
    $jsonData["ancestor"]["customer"]["address"]["floor"] = $model->ancestor->customer->address->floor;
}
if (null !== $model->ancestor->customer->address->block) {
    $jsonData["ancestor"]["customer"]["address"]["block"] = $model->ancestor->customer->address->block;
}
if (null !== $model->ancestor->customer->address->house) {
    $jsonData["ancestor"]["customer"]["address"]["house"] = $model->ancestor->customer->address->house;
}
if (null !== $model->ancestor->customer->address->housing) {
    $jsonData["ancestor"]["customer"]["address"]["housing"] = $model->ancestor->customer->address->housing;
}
if (null !== $model->ancestor->customer->address->metro) {
    $jsonData["ancestor"]["customer"]["address"]["metro"] = $model->ancestor->customer->address->metro;
}
if (null !== $model->ancestor->customer->address->notes) {
    $jsonData["ancestor"]["customer"]["address"]["notes"] = $model->ancestor->customer->address->notes;
}
if (null !== $model->ancestor->customer->address->text) {
    $jsonData["ancestor"]["customer"]["address"]["text"] = $model->ancestor->customer->address->text;
}
if (null !== $model->ancestor->customer->address->externalId) {
    $jsonData["ancestor"]["customer"]["address"]["externalId"] = $model->ancestor->customer->address->externalId;
}

if (0 === \count($jsonData["ancestor"]["customer"]["address"])) {
    $jsonData["ancestor"]["customer"]["address"] = $emptyObject;
}

}
if (null !== $model->ancestor->customer->segments) {
    $jsonData["ancestor"]["customer"]["segments"] = [];
foreach (array_keys($model->ancestor->customer->segments) as $index36) {
    $jsonData["ancestor"]["customer"]["segments"][$index36] = [];
if (null !== $model->ancestor->customer->segments[$index36]->id) {
    $jsonData["ancestor"]["customer"]["segments"][$index36]["id"] = $model->ancestor->customer->segments[$index36]->id;
}
if (null !== $model->ancestor->customer->segments[$index36]->code) {
    $jsonData["ancestor"]["customer"]["segments"][$index36]["code"] = $model->ancestor->customer->segments[$index36]->code;
}
if (null !== $model->ancestor->customer->segments[$index36]->name) {
    $jsonData["ancestor"]["customer"]["segments"][$index36]["name"] = $model->ancestor->customer->segments[$index36]->name;
}
if (null !== $model->ancestor->customer->segments[$index36]->createdAt) {
    $jsonData["ancestor"]["customer"]["segments"][$index36]["createdAt"] = $model->ancestor->customer->segments[$index36]->createdAt->format('Y-m-d H:i:s');;
}
if (null !== $model->ancestor->customer->segments[$index36]->isDynamic) {
    $jsonData["ancestor"]["customer"]["segments"][$index36]["isDynamic"] = $model->ancestor->customer->segments[$index36]->isDynamic;
}
if (null !== $model->ancestor->customer->segments[$index36]->customersCount) {
    $jsonData["ancestor"]["customer"]["segments"][$index36]["customersCount"] = $model->ancestor->customer->segments[$index36]->customersCount;
}
if (null !== $model->ancestor->customer->segments[$index36]->active) {
    $jsonData["ancestor"]["customer"]["segments"][$index36]["active"] = $model->ancestor->customer->segments[$index36]->active;
}

if (0 === \count($jsonData["ancestor"]["customer"]["segments"][$index36])) {
    $jsonData["ancestor"]["customer"]["segments"][$index36] = $emptyObject;
}

}

}
if (null !== $model->ancestor->customer->maturationTime) {
    $jsonData["ancestor"]["customer"]["maturationTime"] = $model->ancestor->customer->maturationTime;
}
if (null !== $model->ancestor->customer->firstName) {
    $jsonData["ancestor"]["customer"]["firstName"] = $model->ancestor->customer->firstName;
}
if (null !== $model->ancestor->customer->lastName) {
    $jsonData["ancestor"]["customer"]["lastName"] = $model->ancestor->customer->lastName;
}
if (null !== $model->ancestor->customer->patronymic) {
    $jsonData["ancestor"]["customer"]["patronymic"] = $model->ancestor->customer->patronymic;
}
if (null !== $model->ancestor->customer->sex) {
    $jsonData["ancestor"]["customer"]["sex"] = $model->ancestor->customer->sex;
}
if (null !== $model->ancestor->customer->presumableSex) {
    $jsonData["ancestor"]["customer"]["presumableSex"] = $model->ancestor->customer->presumableSex;
}
if (null !== $model->ancestor->customer->email) {
    $jsonData["ancestor"]["customer"]["email"] = $model->ancestor->customer->email;
}
if (null !== $model->ancestor->customer->emailMarketingUnsubscribedAt) {
    $jsonData["ancestor"]["customer"]["emailMarketingUnsubscribedAt"] = $model->ancestor->customer->emailMarketingUnsubscribedAt->format('Y-m-d H:i:s');;
}
if (null !== $model->ancestor->customer->phones) {
    $jsonData["ancestor"]["customer"]["phones"] = [];
foreach (array_keys($model->ancestor->customer->phones) as $index34) {
    $jsonData["ancestor"]["customer"]["phones"][$index34] = [];
if (null !== $model->ancestor->customer->phones[$index34]->number) {
    $jsonData["ancestor"]["customer"]["phones"][$index34]["number"] = $model->ancestor->customer->phones[$index34]->number;
}

if (0 === \count($jsonData["ancestor"]["customer"]["phones"][$index34])) {
    $jsonData["ancestor"]["customer"]["phones"][$index34] = $emptyObject;
}

}

}
if (null !== $model->ancestor->customer->birthday) {
    $jsonData["ancestor"]["customer"]["birthday"] = $model->ancestor->customer->birthday->format('Y-m-d H:i:s');;
}
if (null !== $model->ancestor->customer->source) {
    $jsonData["ancestor"]["customer"]["source"] = [];
if (null !== $model->ancestor->customer->source->source) {
    $jsonData["ancestor"]["customer"]["source"]["source"] = $model->ancestor->customer->source->source;
}
if (null !== $model->ancestor->customer->source->medium) {
    $jsonData["ancestor"]["customer"]["source"]["medium"] = $model->ancestor->customer->source->medium;
}
if (null !== $model->ancestor->customer->source->campaign) {
    $jsonData["ancestor"]["customer"]["source"]["campaign"] = $model->ancestor->customer->source->campaign;
}
if (null !== $model->ancestor->customer->source->keyword) {
    $jsonData["ancestor"]["customer"]["source"]["keyword"] = $model->ancestor->customer->source->keyword;
}
if (null !== $model->ancestor->customer->source->content) {
    $jsonData["ancestor"]["customer"]["source"]["content"] = $model->ancestor->customer->source->content;
}

if (0 === \count($jsonData["ancestor"]["customer"]["source"])) {
    $jsonData["ancestor"]["customer"]["source"] = $emptyObject;
}

}
if (null !== $model->ancestor->customer->photoUrl) {
    $jsonData["ancestor"]["customer"]["photoUrl"] = $model->ancestor->customer->photoUrl;
}
if (null !== $model->ancestor->customer->mgCustomerId) {
    $jsonData["ancestor"]["customer"]["mgCustomerId"] = $model->ancestor->customer->mgCustomerId;
}
if (null !== $model->ancestor->customer->subscribed) {
    $jsonData["ancestor"]["customer"]["subscribed"] = $model->ancestor->customer->subscribed;
}

if (0 === \count($jsonData["ancestor"]["customer"])) {
    $jsonData["ancestor"]["customer"] = $emptyObject;
}

} elseif ($model->ancestor->customer instanceof \RetailCrm\Api\Model\Entity\CustomersCorporate\CustomerCorporate) {
    $jsonData["ancestor"]["customer"] = [];
if (null !== $model->ancestor->customer->type) {
    $jsonData["ancestor"]["customer"]["type"] = $model->ancestor->customer->type;
}
if (null !== $model->ancestor->customer->id) {
    $jsonData["ancestor"]["customer"]["id"] = $model->ancestor->customer->id;
}
if (null !== $model->ancestor->customer->externalId) {
    $jsonData["ancestor"]["customer"]["externalId"] = $model->ancestor->customer->externalId;
}
if (null !== $model->ancestor->customer->nickName) {
    $jsonData["ancestor"]["customer"]["nickName"] = $model->ancestor->customer->nickName;
}
if (null !== $model->ancestor->customer->mainAddress) {
    $jsonData["ancestor"]["customer"]["mainAddress"] = [];
if (null !== $model->ancestor->customer->mainAddress->id) {
    $jsonData["ancestor"]["customer"]["mainAddress"]["id"] = $model->ancestor->customer->mainAddress->id;
}
if (null !== $model->ancestor->customer->mainAddress->externalId) {
    $jsonData["ancestor"]["customer"]["mainAddress"]["externalId"] = $model->ancestor->customer->mainAddress->externalId;
}
if (null !== $model->ancestor->customer->mainAddress->name) {
    $jsonData["ancestor"]["customer"]["mainAddress"]["name"] = $model->ancestor->customer->mainAddress->name;
}

if (0 === \count($jsonData["ancestor"]["customer"]["mainAddress"])) {
    $jsonData["ancestor"]["customer"]["mainAddress"] = $emptyObject;
}

}
if (null !== $model->ancestor->customer->createdAt) {
    $jsonData["ancestor"]["customer"]["createdAt"] = $model->ancestor->customer->createdAt->format('Y-m-d H:i:s');;
}
if (null !== $model->ancestor->customer->managerId) {
    $jsonData["ancestor"]["customer"]["managerId"] = $model->ancestor->customer->managerId;
}
if (null !== $model->ancestor->customer->source) {
    $jsonData["ancestor"]["customer"]["source"] = [];
if (null !== $model->ancestor->customer->source->source) {
    $jsonData["ancestor"]["customer"]["source"]["source"] = $model->ancestor->customer->source->source;
}
if (null !== $model->ancestor->customer->source->medium) {
    $jsonData["ancestor"]["customer"]["source"]["medium"] = $model->ancestor->customer->source->medium;
}
if (null !== $model->ancestor->customer->source->campaign) {
    $jsonData["ancestor"]["customer"]["source"]["campaign"] = $model->ancestor->customer->source->campaign;
}
if (null !== $model->ancestor->customer->source->keyword) {
    $jsonData["ancestor"]["customer"]["source"]["keyword"] = $model->ancestor->customer->source->keyword;
}
if (null !== $model->ancestor->customer->source->content) {
    $jsonData["ancestor"]["customer"]["source"]["content"] = $model->ancestor->customer->source->content;
}

if (0 === \count($jsonData["ancestor"]["customer"]["source"])) {
    $jsonData["ancestor"]["customer"]["source"] = $emptyObject;
}

}
if (null !== $model->ancestor->customer->customerContacts) {
    $jsonData["ancestor"]["customer"]["customerContacts"] = [];
foreach (array_keys($model->ancestor->customer->customerContacts) as $index44) {
    $jsonData["ancestor"]["customer"]["customerContacts"][$index44] = [];
if (null !== $model->ancestor->customer->customerContacts[$index44]->id) {
    $jsonData["ancestor"]["customer"]["customerContacts"][$index44]["id"] = $model->ancestor->customer->customerContacts[$index44]->id;
}
if (null !== $model->ancestor->customer->customerContacts[$index44]->isMain) {
    $jsonData["ancestor"]["customer"]["customerContacts"][$index44]["isMain"] = $model->ancestor->customer->customerContacts[$index44]->isMain;
}
if (null !== $model->ancestor->customer->customerContacts[$index44]->customer) {
    $jsonData["ancestor"]["customer"]["customerContacts"][$index44]["customer"] = [];
if (null !== $model->ancestor->customer->customerContacts[$index44]->customer->id) {
    $jsonData["ancestor"]["customer"]["customerContacts"][$index44]["customer"]["id"] = $model->ancestor->customer->customerContacts[$index44]->customer->id;
}
if (null !== $model->ancestor->customer->customerContacts[$index44]->customer->externalId) {
    $jsonData["ancestor"]["customer"]["customerContacts"][$index44]["customer"]["externalId"] = $model->ancestor->customer->customerContacts[$index44]->customer->externalId;
}
if (null !== $model->ancestor->customer->customerContacts[$index44]->customer->browserId) {
    $jsonData["ancestor"]["customer"]["customerContacts"][$index44]["customer"]["browserId"] = $model->ancestor->customer->customerContacts[$index44]->customer->browserId;
}
if (null !== $model->ancestor->customer->customerContacts[$index44]->customer->site) {
    $jsonData["ancestor"]["customer"]["customerContacts"][$index44]["customer"]["site"] = $model->ancestor->customer->customerContacts[$index44]->customer->site;
}
if (null !== $model->ancestor->customer->customerContacts[$index44]->customer->companies) {
    $jsonData["ancestor"]["customer"]["customerContacts"][$index44]["customer"]["companies"] = [];
foreach (array_keys($model->ancestor->customer->customerContacts[$index44]->customer->companies) as $index79) {
    $jsonData["ancestor"]["customer"]["customerContacts"][$index44]["customer"]["companies"][$index79] = [];
if (null !== $model->ancestor->customer->customerContacts[$index44]->customer->companies[$index79]->id) {
    $jsonData["ancestor"]["customer"]["customerContacts"][$index44]["customer"]["companies"][$index79]["id"] = $model->ancestor->customer->customerContacts[$index44]->customer->companies[$index79]->id;
}
if (null !== $model->ancestor->customer->customerContacts[$index44]->customer->companies[$index79]->externalId) {
    $jsonData["ancestor"]["customer"]["customerContacts"][$index44]["customer"]["companies"][$index79]["externalId"] = $model->ancestor->customer->customerContacts[$index44]->customer->companies[$index79]->externalId;
}
if (null !== $model->ancestor->customer->customerContacts[$index44]->customer->companies[$index79]->company) {
    $jsonData["ancestor"]["customer"]["customerContacts"][$index44]["customer"]["companies"][$index79]["company"] = [];
if (null !== $model->ancestor->customer->customerContacts[$index44]->customer->companies[$index79]->company->id) {
    $jsonData["ancestor"]["customer"]["customerContacts"][$index44]["customer"]["companies"][$index79]["company"]["id"] = $model->ancestor->customer->customerContacts[$index44]->customer->companies[$index79]->company->id;
}
if (null !== $model->ancestor->customer->customerContacts[$index44]->customer->companies[$index79]->company->externalId) {
    $jsonData["ancestor"]["customer"]["customerContacts"][$index44]["customer"]["companies"][$index79]["company"]["externalId"] = $model->ancestor->customer->customerContacts[$index44]->customer->companies[$index79]->company->externalId;
}
if (null !== $model->ancestor->customer->customerContacts[$index44]->customer->companies[$index79]->company->name) {
    $jsonData["ancestor"]["customer"]["customerContacts"][$index44]["customer"]["companies"][$index79]["company"]["name"] = $model->ancestor->customer->customerContacts[$index44]->customer->companies[$index79]->company->name;
}

if (0 === \count($jsonData["ancestor"]["customer"]["customerContacts"][$index44]["customer"]["companies"][$index79]["company"])) {
    $jsonData["ancestor"]["customer"]["customerContacts"][$index44]["customer"]["companies"][$index79]["company"] = $emptyObject;
}

}

if (0 === \count($jsonData["ancestor"]["customer"]["customerContacts"][$index44]["customer"]["companies"][$index79])) {
    $jsonData["ancestor"]["customer"]["customerContacts"][$index44]["customer"]["companies"][$index79] = $emptyObject;
}

}

}

if (0 === \count($jsonData["ancestor"]["customer"]["customerContacts"][$index44]["customer"])) {
    $jsonData["ancestor"]["customer"]["customerContacts"][$index44]["customer"] = $emptyObject;
}

}
if (null !== $model->ancestor->customer->customerContacts[$index44]->companies) {
    $jsonData["ancestor"]["customer"]["customerContacts"][$index44]["companies"] = [];
foreach (array_keys($model->ancestor->customer->customerContacts[$index44]->companies) as $index67) {
    $jsonData["ancestor"]["customer"]["customerContacts"][$index44]["companies"][$index67] = [];
if (null !== $model->ancestor->customer->customerContacts[$index44]->companies[$index67]->id) {
    $jsonData["ancestor"]["customer"]["customerContacts"][$index44]["companies"][$index67]["id"] = $model->ancestor->customer->customerContacts[$index44]->companies[$index67]->id;
}
if (null !== $model->ancestor->customer->customerContacts[$index44]->companies[$index67]->externalId) {
    $jsonData["ancestor"]["customer"]["customerContacts"][$index44]["companies"][$index67]["externalId"] = $model->ancestor->customer->customerContacts[$index44]->companies[$index67]->externalId;
}
if (null !== $model->ancestor->customer->customerContacts[$index44]->companies[$index67]->company) {
    $jsonData["ancestor"]["customer"]["customerContacts"][$index44]["companies"][$index67]["company"] = [];
if (null !== $model->ancestor->customer->customerContacts[$index44]->companies[$index67]->company->id) {
    $jsonData["ancestor"]["customer"]["customerContacts"][$index44]["companies"][$index67]["company"]["id"] = $model->ancestor->customer->customerContacts[$index44]->companies[$index67]->company->id;
}
if (null !== $model->ancestor->customer->customerContacts[$index44]->companies[$index67]->company->externalId) {
    $jsonData["ancestor"]["customer"]["customerContacts"][$index44]["companies"][$index67]["company"]["externalId"] = $model->ancestor->customer->customerContacts[$index44]->companies[$index67]->company->externalId;
}
if (null !== $model->ancestor->customer->customerContacts[$index44]->companies[$index67]->company->name) {
    $jsonData["ancestor"]["customer"]["customerContacts"][$index44]["companies"][$index67]["company"]["name"] = $model->ancestor->customer->customerContacts[$index44]->companies[$index67]->company->name;
}

if (0 === \count($jsonData["ancestor"]["customer"]["customerContacts"][$index44]["companies"][$index67]["company"])) {
    $jsonData["ancestor"]["customer"]["customerContacts"][$index44]["companies"][$index67]["company"] = $emptyObject;
}

}

if (0 === \count($jsonData["ancestor"]["customer"]["customerContacts"][$index44]["companies"][$index67])) {
    $jsonData["ancestor"]["customer"]["customerContacts"][$index44]["companies"][$index67] = $emptyObject;
}

}

}

if (0 === \count($jsonData["ancestor"]["customer"]["customerContacts"][$index44])) {
    $jsonData["ancestor"]["customer"]["customerContacts"][$index44] = $emptyObject;
}

}

}
if (null !== $model->ancestor->customer->companies) {
    $jsonData["ancestor"]["customer"]["companies"] = [];
foreach (array_keys($model->ancestor->customer->companies) as $index37) {
    $jsonData["ancestor"]["customer"]["companies"][$index37] = [];
if (null !== $model->ancestor->customer->companies[$index37]->id) {
    $jsonData["ancestor"]["customer"]["companies"][$index37]["id"] = $model->ancestor->customer->companies[$index37]->id;
}
if (null !== $model->ancestor->customer->companies[$index37]->isMain) {
    $jsonData["ancestor"]["customer"]["companies"][$index37]["isMain"] = $model->ancestor->customer->companies[$index37]->isMain;
}
if (null !== $model->ancestor->customer->companies[$index37]->externalId) {
    $jsonData["ancestor"]["customer"]["companies"][$index37]["externalId"] = $model->ancestor->customer->companies[$index37]->externalId;
}
if (null !== $model->ancestor->customer->companies[$index37]->active) {
    $jsonData["ancestor"]["customer"]["companies"][$index37]["active"] = $model->ancestor->customer->companies[$index37]->active;
}
if (null !== $model->ancestor->customer->companies[$index37]->name) {
    $jsonData["ancestor"]["customer"]["companies"][$index37]["name"] = $model->ancestor->customer->companies[$index37]->name;
}
if (null !== $model->ancestor->customer->companies[$index37]->brand) {
    $jsonData["ancestor"]["customer"]["companies"][$index37]["brand"] = $model->ancestor->customer->companies[$index37]->brand;
}
if (null !== $model->ancestor->customer->companies[$index37]->site) {
    $jsonData["ancestor"]["customer"]["companies"][$index37]["site"] = $model->ancestor->customer->companies[$index37]->site;
}
if (null !== $model->ancestor->customer->companies[$index37]->createdAt) {
    $jsonData["ancestor"]["customer"]["companies"][$index37]["createdAt"] = $model->ancestor->customer->companies[$index37]->createdAt->format('Y-m-d H:i:s');;
}
if (null !== $model->ancestor->customer->companies[$index37]->customer) {
    $jsonData["ancestor"]["customer"]["companies"][$index37]["customer"] = [];
if (null !== $model->ancestor->customer->companies[$index37]->customer->site) {
    $jsonData["ancestor"]["customer"]["companies"][$index37]["customer"]["site"] = $model->ancestor->customer->companies[$index37]->customer->site;
}
if (null !== $model->ancestor->customer->companies[$index37]->customer->id) {
    $jsonData["ancestor"]["customer"]["companies"][$index37]["customer"]["id"] = $model->ancestor->customer->companies[$index37]->customer->id;
}
if (null !== $model->ancestor->customer->companies[$index37]->customer->externalId) {
    $jsonData["ancestor"]["customer"]["companies"][$index37]["customer"]["externalId"] = $model->ancestor->customer->companies[$index37]->customer->externalId;
}
if (null !== $model->ancestor->customer->companies[$index37]->customer->type) {
    $jsonData["ancestor"]["customer"]["companies"][$index37]["customer"]["type"] = $model->ancestor->customer->companies[$index37]->customer->type;
}

if (0 === \count($jsonData["ancestor"]["customer"]["companies"][$index37]["customer"])) {
    $jsonData["ancestor"]["customer"]["companies"][$index37]["customer"] = $emptyObject;
}

}
if (null !== $model->ancestor->customer->companies[$index37]->contragent) {
    $jsonData["ancestor"]["customer"]["companies"][$index37]["contragent"] = [];
if (null !== $model->ancestor->customer->companies[$index37]->contragent->contragentType) {
    $jsonData["ancestor"]["customer"]["companies"][$index37]["contragent"]["contragentType"] = $model->ancestor->customer->companies[$index37]->contragent->contragentType;
}
if (null !== $model->ancestor->customer->companies[$index37]->contragent->legalName) {
    $jsonData["ancestor"]["customer"]["companies"][$index37]["contragent"]["legalName"] = $model->ancestor->customer->companies[$index37]->contragent->legalName;
}
if (null !== $model->ancestor->customer->companies[$index37]->contragent->legalAddress) {
    $jsonData["ancestor"]["customer"]["companies"][$index37]["contragent"]["legalAddress"] = $model->ancestor->customer->companies[$index37]->contragent->legalAddress;
}
if (null !== $model->ancestor->customer->companies[$index37]->contragent->INN) {
    $jsonData["ancestor"]["customer"]["companies"][$index37]["contragent"]["INN"] = $model->ancestor->customer->companies[$index37]->contragent->INN;
}
if (null !== $model->ancestor->customer->companies[$index37]->contragent->OKPO) {
    $jsonData["ancestor"]["customer"]["companies"][$index37]["contragent"]["OKPO"] = $model->ancestor->customer->companies[$index37]->contragent->OKPO;
}
if (null !== $model->ancestor->customer->companies[$index37]->contragent->KPP) {
    $jsonData["ancestor"]["customer"]["companies"][$index37]["contragent"]["KPP"] = $model->ancestor->customer->companies[$index37]->contragent->KPP;
}
if (null !== $model->ancestor->customer->companies[$index37]->contragent->OGRN) {
    $jsonData["ancestor"]["customer"]["companies"][$index37]["contragent"]["OGRN"] = $model->ancestor->customer->companies[$index37]->contragent->OGRN;
}
if (null !== $model->ancestor->customer->companies[$index37]->contragent->OGRNIP) {
    $jsonData["ancestor"]["customer"]["companies"][$index37]["contragent"]["OGRNIP"] = $model->ancestor->customer->companies[$index37]->contragent->OGRNIP;
}
if (null !== $model->ancestor->customer->companies[$index37]->contragent->certificateNumber) {
    $jsonData["ancestor"]["customer"]["companies"][$index37]["contragent"]["certificateNumber"] = $model->ancestor->customer->companies[$index37]->contragent->certificateNumber;
}
if (null !== $model->ancestor->customer->companies[$index37]->contragent->certificateDate) {
    $jsonData["ancestor"]["customer"]["companies"][$index37]["contragent"]["certificateDate"] = $model->ancestor->customer->companies[$index37]->contragent->certificateDate->format('Y-m-d H:i:s');;
}
if (null !== $model->ancestor->customer->companies[$index37]->contragent->BIK) {
    $jsonData["ancestor"]["customer"]["companies"][$index37]["contragent"]["BIK"] = $model->ancestor->customer->companies[$index37]->contragent->BIK;
}
if (null !== $model->ancestor->customer->companies[$index37]->contragent->bank) {
    $jsonData["ancestor"]["customer"]["companies"][$index37]["contragent"]["bank"] = $model->ancestor->customer->companies[$index37]->contragent->bank;
}
if (null !== $model->ancestor->customer->companies[$index37]->contragent->bankAddress) {
    $jsonData["ancestor"]["customer"]["companies"][$index37]["contragent"]["bankAddress"] = $model->ancestor->customer->companies[$index37]->contragent->bankAddress;
}
if (null !== $model->ancestor->customer->companies[$index37]->contragent->corrAccount) {
    $jsonData["ancestor"]["customer"]["companies"][$index37]["contragent"]["corrAccount"] = $model->ancestor->customer->companies[$index37]->contragent->corrAccount;
}
if (null !== $model->ancestor->customer->companies[$index37]->contragent->bankAccount) {
    $jsonData["ancestor"]["customer"]["companies"][$index37]["contragent"]["bankAccount"] = $model->ancestor->customer->companies[$index37]->contragent->bankAccount;
}

if (0 === \count($jsonData["ancestor"]["customer"]["companies"][$index37]["contragent"])) {
    $jsonData["ancestor"]["customer"]["companies"][$index37]["contragent"] = $emptyObject;
}

}
if (null !== $model->ancestor->customer->companies[$index37]->address) {
    $jsonData["ancestor"]["customer"]["companies"][$index37]["address"] = [];
if (null !== $model->ancestor->customer->companies[$index37]->address->id) {
    $jsonData["ancestor"]["customer"]["companies"][$index37]["address"]["id"] = $model->ancestor->customer->companies[$index37]->address->id;
}
if (null !== $model->ancestor->customer->companies[$index37]->address->name) {
    $jsonData["ancestor"]["customer"]["companies"][$index37]["address"]["name"] = $model->ancestor->customer->companies[$index37]->address->name;
}
if (null !== $model->ancestor->customer->companies[$index37]->address->isMain) {
    $jsonData["ancestor"]["customer"]["companies"][$index37]["address"]["isMain"] = $model->ancestor->customer->companies[$index37]->address->isMain;
}
if (null !== $model->ancestor->customer->companies[$index37]->address->index) {
    $jsonData["ancestor"]["customer"]["companies"][$index37]["address"]["index"] = $model->ancestor->customer->companies[$index37]->address->index;
}
if (null !== $model->ancestor->customer->companies[$index37]->address->countryIso) {
    $jsonData["ancestor"]["customer"]["companies"][$index37]["address"]["countryIso"] = $model->ancestor->customer->companies[$index37]->address->countryIso;
}
if (null !== $model->ancestor->customer->companies[$index37]->address->region) {
    $jsonData["ancestor"]["customer"]["companies"][$index37]["address"]["region"] = $model->ancestor->customer->companies[$index37]->address->region;
}
if (null !== $model->ancestor->customer->companies[$index37]->address->regionId) {
    $jsonData["ancestor"]["customer"]["companies"][$index37]["address"]["regionId"] = $model->ancestor->customer->companies[$index37]->address->regionId;
}
if (null !== $model->ancestor->customer->companies[$index37]->address->city) {
    $jsonData["ancestor"]["customer"]["companies"][$index37]["address"]["city"] = $model->ancestor->customer->companies[$index37]->address->city;
}
if (null !== $model->ancestor->customer->companies[$index37]->address->cityId) {
    $jsonData["ancestor"]["customer"]["companies"][$index37]["address"]["cityId"] = $model->ancestor->customer->companies[$index37]->address->cityId;
}
if (null !== $model->ancestor->customer->companies[$index37]->address->cityType) {
    $jsonData["ancestor"]["customer"]["companies"][$index37]["address"]["cityType"] = $model->ancestor->customer->companies[$index37]->address->cityType;
}
if (null !== $model->ancestor->customer->companies[$index37]->address->street) {
    $jsonData["ancestor"]["customer"]["companies"][$index37]["address"]["street"] = $model->ancestor->customer->companies[$index37]->address->street;
}
if (null !== $model->ancestor->customer->companies[$index37]->address->streetId) {
    $jsonData["ancestor"]["customer"]["companies"][$index37]["address"]["streetId"] = $model->ancestor->customer->companies[$index37]->address->streetId;
}
if (null !== $model->ancestor->customer->companies[$index37]->address->streetType) {
    $jsonData["ancestor"]["customer"]["companies"][$index37]["address"]["streetType"] = $model->ancestor->customer->companies[$index37]->address->streetType;
}
if (null !== $model->ancestor->customer->companies[$index37]->address->building) {
    $jsonData["ancestor"]["customer"]["companies"][$index37]["address"]["building"] = $model->ancestor->customer->companies[$index37]->address->building;
}
if (null !== $model->ancestor->customer->companies[$index37]->address->flat) {
    $jsonData["ancestor"]["customer"]["companies"][$index37]["address"]["flat"] = $model->ancestor->customer->companies[$index37]->address->flat;
}
if (null !== $model->ancestor->customer->companies[$index37]->address->floor) {
    $jsonData["ancestor"]["customer"]["companies"][$index37]["address"]["floor"] = $model->ancestor->customer->companies[$index37]->address->floor;
}
if (null !== $model->ancestor->customer->companies[$index37]->address->block) {
    $jsonData["ancestor"]["customer"]["companies"][$index37]["address"]["block"] = $model->ancestor->customer->companies[$index37]->address->block;
}
if (null !== $model->ancestor->customer->companies[$index37]->address->house) {
    $jsonData["ancestor"]["customer"]["companies"][$index37]["address"]["house"] = $model->ancestor->customer->companies[$index37]->address->house;
}
if (null !== $model->ancestor->customer->companies[$index37]->address->housing) {
    $jsonData["ancestor"]["customer"]["companies"][$index37]["address"]["housing"] = $model->ancestor->customer->companies[$index37]->address->housing;
}
if (null !== $model->ancestor->customer->companies[$index37]->address->metro) {
    $jsonData["ancestor"]["customer"]["companies"][$index37]["address"]["metro"] = $model->ancestor->customer->companies[$index37]->address->metro;
}
if (null !== $model->ancestor->customer->companies[$index37]->address->notes) {
    $jsonData["ancestor"]["customer"]["companies"][$index37]["address"]["notes"] = $model->ancestor->customer->companies[$index37]->address->notes;
}
if (null !== $model->ancestor->customer->companies[$index37]->address->text) {
    $jsonData["ancestor"]["customer"]["companies"][$index37]["address"]["text"] = $model->ancestor->customer->companies[$index37]->address->text;
}
if (null !== $model->ancestor->customer->companies[$index37]->address->externalId) {
    $jsonData["ancestor"]["customer"]["companies"][$index37]["address"]["externalId"] = $model->ancestor->customer->companies[$index37]->address->externalId;
}

if (0 === \count($jsonData["ancestor"]["customer"]["companies"][$index37]["address"])) {
    $jsonData["ancestor"]["customer"]["companies"][$index37]["address"] = $emptyObject;
}

}
if (null !== $model->ancestor->customer->companies[$index37]->customFields) {
    $jsonData["ancestor"]["customer"]["companies"][$index37]["customFields"] = [];
foreach (array_keys($model->ancestor->customer->companies[$index37]->customFields) as $index63) {
    $jsonData["ancestor"]["customer"]["companies"][$index37]["customFields"] = $model->ancestor->customer->companies[$index37]->customFields;
}

}
if (null !== $model->ancestor->customer->companies[$index37]->marginSumm) {
    $jsonData["ancestor"]["customer"]["companies"][$index37]["marginSumm"] = $model->ancestor->customer->companies[$index37]->marginSumm;
}
if (null !== $model->ancestor->customer->companies[$index37]->totalSumm) {
    $jsonData["ancestor"]["customer"]["companies"][$index37]["totalSumm"] = $model->ancestor->customer->companies[$index37]->totalSumm;
}
if (null !== $model->ancestor->customer->companies[$index37]->averageSumm) {
    $jsonData["ancestor"]["customer"]["companies"][$index37]["averageSumm"] = $model->ancestor->customer->companies[$index37]->averageSumm;
}
if (null !== $model->ancestor->customer->companies[$index37]->ordersCount) {
    $jsonData["ancestor"]["customer"]["companies"][$index37]["ordersCount"] = $model->ancestor->customer->companies[$index37]->ordersCount;
}
if (null !== $model->ancestor->customer->companies[$index37]->costSumm) {
    $jsonData["ancestor"]["customer"]["companies"][$index37]["costSumm"] = $model->ancestor->customer->companies[$index37]->costSumm;
}

if (0 === \count($jsonData["ancestor"]["customer"]["companies"][$index37])) {
    $jsonData["ancestor"]["customer"]["companies"][$index37] = $emptyObject;
}

}

}
if (null !== $model->ancestor->customer->addresses) {
    $jsonData["ancestor"]["customer"]["addresses"] = [];
foreach (array_keys($model->ancestor->customer->addresses) as $index37) {
    $jsonData["ancestor"]["customer"]["addresses"][$index37] = [];
if (null !== $model->ancestor->customer->addresses[$index37]->id) {
    $jsonData["ancestor"]["customer"]["addresses"][$index37]["id"] = $model->ancestor->customer->addresses[$index37]->id;
}
if (null !== $model->ancestor->customer->addresses[$index37]->name) {
    $jsonData["ancestor"]["customer"]["addresses"][$index37]["name"] = $model->ancestor->customer->addresses[$index37]->name;
}
if (null !== $model->ancestor->customer->addresses[$index37]->isMain) {
    $jsonData["ancestor"]["customer"]["addresses"][$index37]["isMain"] = $model->ancestor->customer->addresses[$index37]->isMain;
}
if (null !== $model->ancestor->customer->addresses[$index37]->index) {
    $jsonData["ancestor"]["customer"]["addresses"][$index37]["index"] = $model->ancestor->customer->addresses[$index37]->index;
}
if (null !== $model->ancestor->customer->addresses[$index37]->countryIso) {
    $jsonData["ancestor"]["customer"]["addresses"][$index37]["countryIso"] = $model->ancestor->customer->addresses[$index37]->countryIso;
}
if (null !== $model->ancestor->customer->addresses[$index37]->region) {
    $jsonData["ancestor"]["customer"]["addresses"][$index37]["region"] = $model->ancestor->customer->addresses[$index37]->region;
}
if (null !== $model->ancestor->customer->addresses[$index37]->regionId) {
    $jsonData["ancestor"]["customer"]["addresses"][$index37]["regionId"] = $model->ancestor->customer->addresses[$index37]->regionId;
}
if (null !== $model->ancestor->customer->addresses[$index37]->city) {
    $jsonData["ancestor"]["customer"]["addresses"][$index37]["city"] = $model->ancestor->customer->addresses[$index37]->city;
}
if (null !== $model->ancestor->customer->addresses[$index37]->cityId) {
    $jsonData["ancestor"]["customer"]["addresses"][$index37]["cityId"] = $model->ancestor->customer->addresses[$index37]->cityId;
}
if (null !== $model->ancestor->customer->addresses[$index37]->cityType) {
    $jsonData["ancestor"]["customer"]["addresses"][$index37]["cityType"] = $model->ancestor->customer->addresses[$index37]->cityType;
}
if (null !== $model->ancestor->customer->addresses[$index37]->street) {
    $jsonData["ancestor"]["customer"]["addresses"][$index37]["street"] = $model->ancestor->customer->addresses[$index37]->street;
}
if (null !== $model->ancestor->customer->addresses[$index37]->streetId) {
    $jsonData["ancestor"]["customer"]["addresses"][$index37]["streetId"] = $model->ancestor->customer->addresses[$index37]->streetId;
}
if (null !== $model->ancestor->customer->addresses[$index37]->streetType) {
    $jsonData["ancestor"]["customer"]["addresses"][$index37]["streetType"] = $model->ancestor->customer->addresses[$index37]->streetType;
}
if (null !== $model->ancestor->customer->addresses[$index37]->building) {
    $jsonData["ancestor"]["customer"]["addresses"][$index37]["building"] = $model->ancestor->customer->addresses[$index37]->building;
}
if (null !== $model->ancestor->customer->addresses[$index37]->flat) {
    $jsonData["ancestor"]["customer"]["addresses"][$index37]["flat"] = $model->ancestor->customer->addresses[$index37]->flat;
}
if (null !== $model->ancestor->customer->addresses[$index37]->floor) {
    $jsonData["ancestor"]["customer"]["addresses"][$index37]["floor"] = $model->ancestor->customer->addresses[$index37]->floor;
}
if (null !== $model->ancestor->customer->addresses[$index37]->block) {
    $jsonData["ancestor"]["customer"]["addresses"][$index37]["block"] = $model->ancestor->customer->addresses[$index37]->block;
}
if (null !== $model->ancestor->customer->addresses[$index37]->house) {
    $jsonData["ancestor"]["customer"]["addresses"][$index37]["house"] = $model->ancestor->customer->addresses[$index37]->house;
}
if (null !== $model->ancestor->customer->addresses[$index37]->housing) {
    $jsonData["ancestor"]["customer"]["addresses"][$index37]["housing"] = $model->ancestor->customer->addresses[$index37]->housing;
}
if (null !== $model->ancestor->customer->addresses[$index37]->metro) {
    $jsonData["ancestor"]["customer"]["addresses"][$index37]["metro"] = $model->ancestor->customer->addresses[$index37]->metro;
}
if (null !== $model->ancestor->customer->addresses[$index37]->notes) {
    $jsonData["ancestor"]["customer"]["addresses"][$index37]["notes"] = $model->ancestor->customer->addresses[$index37]->notes;
}
if (null !== $model->ancestor->customer->addresses[$index37]->text) {
    $jsonData["ancestor"]["customer"]["addresses"][$index37]["text"] = $model->ancestor->customer->addresses[$index37]->text;
}
if (null !== $model->ancestor->customer->addresses[$index37]->externalId) {
    $jsonData["ancestor"]["customer"]["addresses"][$index37]["externalId"] = $model->ancestor->customer->addresses[$index37]->externalId;
}

if (0 === \count($jsonData["ancestor"]["customer"]["addresses"][$index37])) {
    $jsonData["ancestor"]["customer"]["addresses"][$index37] = $emptyObject;
}

}

}
if (null !== $model->ancestor->customer->vip) {
    $jsonData["ancestor"]["customer"]["vip"] = $model->ancestor->customer->vip;
}
if (null !== $model->ancestor->customer->bad) {
    $jsonData["ancestor"]["customer"]["bad"] = $model->ancestor->customer->bad;
}
if (null !== $model->ancestor->customer->site) {
    $jsonData["ancestor"]["customer"]["site"] = $model->ancestor->customer->site;
}
if (null !== $model->ancestor->customer->tags) {
    $jsonData["ancestor"]["customer"]["tags"] = [];
foreach (array_keys($model->ancestor->customer->tags) as $index32) {
    $jsonData["ancestor"]["customer"]["tags"][$index32] = $model->ancestor->customer->tags[$index32]->name;
}

}
if (null !== $model->ancestor->customer->avgMarginSumm) {
    $jsonData["ancestor"]["customer"]["avgMarginSumm"] = $model->ancestor->customer->avgMarginSumm;
}
if (null !== $model->ancestor->customer->marginSumm) {
    $jsonData["ancestor"]["customer"]["marginSumm"] = $model->ancestor->customer->marginSumm;
}
if (null !== $model->ancestor->customer->totalSumm) {
    $jsonData["ancestor"]["customer"]["totalSumm"] = $model->ancestor->customer->totalSumm;
}
if (null !== $model->ancestor->customer->averageSumm) {
    $jsonData["ancestor"]["customer"]["averageSumm"] = $model->ancestor->customer->averageSumm;
}
if (null !== $model->ancestor->customer->ordersCount) {
    $jsonData["ancestor"]["customer"]["ordersCount"] = $model->ancestor->customer->ordersCount;
}
if (null !== $model->ancestor->customer->costSumm) {
    $jsonData["ancestor"]["customer"]["costSumm"] = $model->ancestor->customer->costSumm;
}
if (null !== $model->ancestor->customer->customFields) {
    $jsonData["ancestor"]["customer"]["customFields"] = [];
foreach (array_keys($model->ancestor->customer->customFields) as $index40) {
    $jsonData["ancestor"]["customer"]["customFields"] = $model->ancestor->customer->customFields;
}

}
if (null !== $model->ancestor->customer->personalDiscount) {
    $jsonData["ancestor"]["customer"]["personalDiscount"] = $model->ancestor->customer->personalDiscount;
}
if (null !== $model->ancestor->customer->cumulativeDiscount) {
    $jsonData["ancestor"]["customer"]["cumulativeDiscount"] = $model->ancestor->customer->cumulativeDiscount;
}
if (null !== $model->ancestor->customer->discountCardNumber) {
    $jsonData["ancestor"]["customer"]["discountCardNumber"] = $model->ancestor->customer->discountCardNumber;
}
if (null !== $model->ancestor->customer->firstClientId) {
    $jsonData["ancestor"]["customer"]["firstClientId"] = $model->ancestor->customer->firstClientId;
}
if (null !== $model->ancestor->customer->lastClientId) {
    $jsonData["ancestor"]["customer"]["lastClientId"] = $model->ancestor->customer->lastClientId;
}
if (null !== $model->ancestor->customer->mainCustomerContact) {
    $jsonData["ancestor"]["customer"]["mainCustomerContact"] = [];
if (null !== $model->ancestor->customer->mainCustomerContact->id) {
    $jsonData["ancestor"]["customer"]["mainCustomerContact"]["id"] = $model->ancestor->customer->mainCustomerContact->id;
}
if (null !== $model->ancestor->customer->mainCustomerContact->isMain) {
    $jsonData["ancestor"]["customer"]["mainCustomerContact"]["isMain"] = $model->ancestor->customer->mainCustomerContact->isMain;
}
if (null !== $model->ancestor->customer->mainCustomerContact->customer) {
    $jsonData["ancestor"]["customer"]["mainCustomerContact"]["customer"] = [];
if (null !== $model->ancestor->customer->mainCustomerContact->customer->id) {
    $jsonData["ancestor"]["customer"]["mainCustomerContact"]["customer"]["id"] = $model->ancestor->customer->mainCustomerContact->customer->id;
}
if (null !== $model->ancestor->customer->mainCustomerContact->customer->externalId) {
    $jsonData["ancestor"]["customer"]["mainCustomerContact"]["customer"]["externalId"] = $model->ancestor->customer->mainCustomerContact->customer->externalId;
}
if (null !== $model->ancestor->customer->mainCustomerContact->customer->browserId) {
    $jsonData["ancestor"]["customer"]["mainCustomerContact"]["customer"]["browserId"] = $model->ancestor->customer->mainCustomerContact->customer->browserId;
}
if (null !== $model->ancestor->customer->mainCustomerContact->customer->site) {
    $jsonData["ancestor"]["customer"]["mainCustomerContact"]["customer"]["site"] = $model->ancestor->customer->mainCustomerContact->customer->site;
}
if (null !== $model->ancestor->customer->mainCustomerContact->customer->companies) {
    $jsonData["ancestor"]["customer"]["mainCustomerContact"]["customer"]["companies"] = [];
foreach (array_keys($model->ancestor->customer->mainCustomerContact->customer->companies) as $index72) {
    $jsonData["ancestor"]["customer"]["mainCustomerContact"]["customer"]["companies"][$index72] = [];
if (null !== $model->ancestor->customer->mainCustomerContact->customer->companies[$index72]->id) {
    $jsonData["ancestor"]["customer"]["mainCustomerContact"]["customer"]["companies"][$index72]["id"] = $model->ancestor->customer->mainCustomerContact->customer->companies[$index72]->id;
}
if (null !== $model->ancestor->customer->mainCustomerContact->customer->companies[$index72]->externalId) {
    $jsonData["ancestor"]["customer"]["mainCustomerContact"]["customer"]["companies"][$index72]["externalId"] = $model->ancestor->customer->mainCustomerContact->customer->companies[$index72]->externalId;
}
if (null !== $model->ancestor->customer->mainCustomerContact->customer->companies[$index72]->company) {
    $jsonData["ancestor"]["customer"]["mainCustomerContact"]["customer"]["companies"][$index72]["company"] = [];
if (null !== $model->ancestor->customer->mainCustomerContact->customer->companies[$index72]->company->id) {
    $jsonData["ancestor"]["customer"]["mainCustomerContact"]["customer"]["companies"][$index72]["company"]["id"] = $model->ancestor->customer->mainCustomerContact->customer->companies[$index72]->company->id;
}
if (null !== $model->ancestor->customer->mainCustomerContact->customer->companies[$index72]->company->externalId) {
    $jsonData["ancestor"]["customer"]["mainCustomerContact"]["customer"]["companies"][$index72]["company"]["externalId"] = $model->ancestor->customer->mainCustomerContact->customer->companies[$index72]->company->externalId;
}
if (null !== $model->ancestor->customer->mainCustomerContact->customer->companies[$index72]->company->name) {
    $jsonData["ancestor"]["customer"]["mainCustomerContact"]["customer"]["companies"][$index72]["company"]["name"] = $model->ancestor->customer->mainCustomerContact->customer->companies[$index72]->company->name;
}

if (0 === \count($jsonData["ancestor"]["customer"]["mainCustomerContact"]["customer"]["companies"][$index72]["company"])) {
    $jsonData["ancestor"]["customer"]["mainCustomerContact"]["customer"]["companies"][$index72]["company"] = $emptyObject;
}

}

if (0 === \count($jsonData["ancestor"]["customer"]["mainCustomerContact"]["customer"]["companies"][$index72])) {
    $jsonData["ancestor"]["customer"]["mainCustomerContact"]["customer"]["companies"][$index72] = $emptyObject;
}

}

}

if (0 === \count($jsonData["ancestor"]["customer"]["mainCustomerContact"]["customer"])) {
    $jsonData["ancestor"]["customer"]["mainCustomerContact"]["customer"] = $emptyObject;
}

}
if (null !== $model->ancestor->customer->mainCustomerContact->companies) {
    $jsonData["ancestor"]["customer"]["mainCustomerContact"]["companies"] = [];
foreach (array_keys($model->ancestor->customer->mainCustomerContact->companies) as $index60) {
    $jsonData["ancestor"]["customer"]["mainCustomerContact"]["companies"][$index60] = [];
if (null !== $model->ancestor->customer->mainCustomerContact->companies[$index60]->id) {
    $jsonData["ancestor"]["customer"]["mainCustomerContact"]["companies"][$index60]["id"] = $model->ancestor->customer->mainCustomerContact->companies[$index60]->id;
}
if (null !== $model->ancestor->customer->mainCustomerContact->companies[$index60]->externalId) {
    $jsonData["ancestor"]["customer"]["mainCustomerContact"]["companies"][$index60]["externalId"] = $model->ancestor->customer->mainCustomerContact->companies[$index60]->externalId;
}
if (null !== $model->ancestor->customer->mainCustomerContact->companies[$index60]->company) {
    $jsonData["ancestor"]["customer"]["mainCustomerContact"]["companies"][$index60]["company"] = [];
if (null !== $model->ancestor->customer->mainCustomerContact->companies[$index60]->company->id) {
    $jsonData["ancestor"]["customer"]["mainCustomerContact"]["companies"][$index60]["company"]["id"] = $model->ancestor->customer->mainCustomerContact->companies[$index60]->company->id;
}
if (null !== $model->ancestor->customer->mainCustomerContact->companies[$index60]->company->externalId) {
    $jsonData["ancestor"]["customer"]["mainCustomerContact"]["companies"][$index60]["company"]["externalId"] = $model->ancestor->customer->mainCustomerContact->companies[$index60]->company->externalId;
}
if (null !== $model->ancestor->customer->mainCustomerContact->companies[$index60]->company->name) {
    $jsonData["ancestor"]["customer"]["mainCustomerContact"]["companies"][$index60]["company"]["name"] = $model->ancestor->customer->mainCustomerContact->companies[$index60]->company->name;
}

if (0 === \count($jsonData["ancestor"]["customer"]["mainCustomerContact"]["companies"][$index60]["company"])) {
    $jsonData["ancestor"]["customer"]["mainCustomerContact"]["companies"][$index60]["company"] = $emptyObject;
}

}

if (0 === \count($jsonData["ancestor"]["customer"]["mainCustomerContact"]["companies"][$index60])) {
    $jsonData["ancestor"]["customer"]["mainCustomerContact"]["companies"][$index60] = $emptyObject;
}

}

}

if (0 === \count($jsonData["ancestor"]["customer"]["mainCustomerContact"])) {
    $jsonData["ancestor"]["customer"]["mainCustomerContact"] = $emptyObject;
}

}
if (null !== $model->ancestor->customer->mainCompany) {
    $jsonData["ancestor"]["customer"]["mainCompany"] = [];
if (null !== $model->ancestor->customer->mainCompany->id) {
    $jsonData["ancestor"]["customer"]["mainCompany"]["id"] = $model->ancestor->customer->mainCompany->id;
}
if (null !== $model->ancestor->customer->mainCompany->externalId) {
    $jsonData["ancestor"]["customer"]["mainCompany"]["externalId"] = $model->ancestor->customer->mainCompany->externalId;
}
if (null !== $model->ancestor->customer->mainCompany->name) {
    $jsonData["ancestor"]["customer"]["mainCompany"]["name"] = $model->ancestor->customer->mainCompany->name;
}

if (0 === \count($jsonData["ancestor"]["customer"]["mainCompany"])) {
    $jsonData["ancestor"]["customer"]["mainCompany"] = $emptyObject;
}

}

if (0 === \count($jsonData["ancestor"]["customer"])) {
    $jsonData["ancestor"]["customer"] = $emptyObject;
}

}

if (0 === \count($jsonData["ancestor"]["customer"])) {
    $jsonData["ancestor"]["customer"] = $emptyObject;
}
}
if (null !== $model->ancestor->contact) {
    $jsonData["ancestor"]["contact"] = [];
if (null !== $model->ancestor->contact->type) {
    $jsonData["ancestor"]["contact"]["type"] = $model->ancestor->contact->type;
}
if (null !== $model->ancestor->contact->id) {
    $jsonData["ancestor"]["contact"]["id"] = $model->ancestor->contact->id;
}
if (null !== $model->ancestor->contact->externalId) {
    $jsonData["ancestor"]["contact"]["externalId"] = $model->ancestor->contact->externalId;
}
if (null !== $model->ancestor->contact->isContact) {
    $jsonData["ancestor"]["contact"]["isContact"] = $model->ancestor->contact->isContact;
}
if (null !== $model->ancestor->contact->createdAt) {
    $jsonData["ancestor"]["contact"]["createdAt"] = $model->ancestor->contact->createdAt->format('Y-m-d H:i:s');;
}
if (null !== $model->ancestor->contact->managerId) {
    $jsonData["ancestor"]["contact"]["managerId"] = $model->ancestor->contact->managerId;
}
if (null !== $model->ancestor->contact->vip) {
    $jsonData["ancestor"]["contact"]["vip"] = $model->ancestor->contact->vip;
}
if (null !== $model->ancestor->contact->bad) {
    $jsonData["ancestor"]["contact"]["bad"] = $model->ancestor->contact->bad;
}
if (null !== $model->ancestor->contact->browserId) {
    $jsonData["ancestor"]["contact"]["browserId"] = $model->ancestor->contact->browserId;
}
if (null !== $model->ancestor->contact->site) {
    $jsonData["ancestor"]["contact"]["site"] = $model->ancestor->contact->site;
}
if (null !== $model->ancestor->contact->contragent) {
    $jsonData["ancestor"]["contact"]["contragent"] = [];
if (null !== $model->ancestor->contact->contragent->contragentType) {
    $jsonData["ancestor"]["contact"]["contragent"]["contragentType"] = $model->ancestor->contact->contragent->contragentType;
}
if (null !== $model->ancestor->contact->contragent->legalName) {
    $jsonData["ancestor"]["contact"]["contragent"]["legalName"] = $model->ancestor->contact->contragent->legalName;
}
if (null !== $model->ancestor->contact->contragent->legalAddress) {
    $jsonData["ancestor"]["contact"]["contragent"]["legalAddress"] = $model->ancestor->contact->contragent->legalAddress;
}
if (null !== $model->ancestor->contact->contragent->INN) {
    $jsonData["ancestor"]["contact"]["contragent"]["INN"] = $model->ancestor->contact->contragent->INN;
}
if (null !== $model->ancestor->contact->contragent->OKPO) {
    $jsonData["ancestor"]["contact"]["contragent"]["OKPO"] = $model->ancestor->contact->contragent->OKPO;
}
if (null !== $model->ancestor->contact->contragent->KPP) {
    $jsonData["ancestor"]["contact"]["contragent"]["KPP"] = $model->ancestor->contact->contragent->KPP;
}
if (null !== $model->ancestor->contact->contragent->OGRN) {
    $jsonData["ancestor"]["contact"]["contragent"]["OGRN"] = $model->ancestor->contact->contragent->OGRN;
}
if (null !== $model->ancestor->contact->contragent->OGRNIP) {
    $jsonData["ancestor"]["contact"]["contragent"]["OGRNIP"] = $model->ancestor->contact->contragent->OGRNIP;
}
if (null !== $model->ancestor->contact->contragent->certificateNumber) {
    $jsonData["ancestor"]["contact"]["contragent"]["certificateNumber"] = $model->ancestor->contact->contragent->certificateNumber;
}
if (null !== $model->ancestor->contact->contragent->certificateDate) {
    $jsonData["ancestor"]["contact"]["contragent"]["certificateDate"] = $model->ancestor->contact->contragent->certificateDate->format('Y-m-d H:i:s');;
}
if (null !== $model->ancestor->contact->contragent->BIK) {
    $jsonData["ancestor"]["contact"]["contragent"]["BIK"] = $model->ancestor->contact->contragent->BIK;
}
if (null !== $model->ancestor->contact->contragent->bank) {
    $jsonData["ancestor"]["contact"]["contragent"]["bank"] = $model->ancestor->contact->contragent->bank;
}
if (null !== $model->ancestor->contact->contragent->bankAddress) {
    $jsonData["ancestor"]["contact"]["contragent"]["bankAddress"] = $model->ancestor->contact->contragent->bankAddress;
}
if (null !== $model->ancestor->contact->contragent->corrAccount) {
    $jsonData["ancestor"]["contact"]["contragent"]["corrAccount"] = $model->ancestor->contact->contragent->corrAccount;
}
if (null !== $model->ancestor->contact->contragent->bankAccount) {
    $jsonData["ancestor"]["contact"]["contragent"]["bankAccount"] = $model->ancestor->contact->contragent->bankAccount;
}

if (0 === \count($jsonData["ancestor"]["contact"]["contragent"])) {
    $jsonData["ancestor"]["contact"]["contragent"] = $emptyObject;
}

}
if (null !== $model->ancestor->contact->tags) {
    $jsonData["ancestor"]["contact"]["tags"] = [];
foreach (array_keys($model->ancestor->contact->tags) as $index31) {
    $jsonData["ancestor"]["contact"]["tags"][$index31] = $model->ancestor->contact->tags[$index31]->name;
}

}
if (null !== $model->ancestor->contact->avgMarginSumm) {
    $jsonData["ancestor"]["contact"]["avgMarginSumm"] = $model->ancestor->contact->avgMarginSumm;
}
if (null !== $model->ancestor->contact->marginSumm) {
    $jsonData["ancestor"]["contact"]["marginSumm"] = $model->ancestor->contact->marginSumm;
}
if (null !== $model->ancestor->contact->totalSumm) {
    $jsonData["ancestor"]["contact"]["totalSumm"] = $model->ancestor->contact->totalSumm;
}
if (null !== $model->ancestor->contact->averageSumm) {
    $jsonData["ancestor"]["contact"]["averageSumm"] = $model->ancestor->contact->averageSumm;
}
if (null !== $model->ancestor->contact->ordersCount) {
    $jsonData["ancestor"]["contact"]["ordersCount"] = $model->ancestor->contact->ordersCount;
}
if (null !== $model->ancestor->contact->costSumm) {
    $jsonData["ancestor"]["contact"]["costSumm"] = $model->ancestor->contact->costSumm;
}
if (null !== $model->ancestor->contact->customFields) {
    $jsonData["ancestor"]["contact"]["customFields"] = [];
foreach (array_keys($model->ancestor->contact->customFields) as $index39) {
    $jsonData["ancestor"]["contact"]["customFields"] = $model->ancestor->contact->customFields;
}

}
if (null !== $model->ancestor->contact->personalDiscount) {
    $jsonData["ancestor"]["contact"]["personalDiscount"] = $model->ancestor->contact->personalDiscount;
}
if (null !== $model->ancestor->contact->cumulativeDiscount) {
    $jsonData["ancestor"]["contact"]["cumulativeDiscount"] = $model->ancestor->contact->cumulativeDiscount;
}
if (null !== $model->ancestor->contact->discountCardNumber) {
    $jsonData["ancestor"]["contact"]["discountCardNumber"] = $model->ancestor->contact->discountCardNumber;
}
if (null !== $model->ancestor->contact->firstClientId) {
    $jsonData["ancestor"]["contact"]["firstClientId"] = $model->ancestor->contact->firstClientId;
}
if (null !== $model->ancestor->contact->lastClientId) {
    $jsonData["ancestor"]["contact"]["lastClientId"] = $model->ancestor->contact->lastClientId;
}
if (null !== $model->ancestor->contact->address) {
    $jsonData["ancestor"]["contact"]["address"] = [];
if (null !== $model->ancestor->contact->address->id) {
    $jsonData["ancestor"]["contact"]["address"]["id"] = $model->ancestor->contact->address->id;
}
if (null !== $model->ancestor->contact->address->name) {
    $jsonData["ancestor"]["contact"]["address"]["name"] = $model->ancestor->contact->address->name;
}
if (null !== $model->ancestor->contact->address->isMain) {
    $jsonData["ancestor"]["contact"]["address"]["isMain"] = $model->ancestor->contact->address->isMain;
}
if (null !== $model->ancestor->contact->address->index) {
    $jsonData["ancestor"]["contact"]["address"]["index"] = $model->ancestor->contact->address->index;
}
if (null !== $model->ancestor->contact->address->countryIso) {
    $jsonData["ancestor"]["contact"]["address"]["countryIso"] = $model->ancestor->contact->address->countryIso;
}
if (null !== $model->ancestor->contact->address->region) {
    $jsonData["ancestor"]["contact"]["address"]["region"] = $model->ancestor->contact->address->region;
}
if (null !== $model->ancestor->contact->address->regionId) {
    $jsonData["ancestor"]["contact"]["address"]["regionId"] = $model->ancestor->contact->address->regionId;
}
if (null !== $model->ancestor->contact->address->city) {
    $jsonData["ancestor"]["contact"]["address"]["city"] = $model->ancestor->contact->address->city;
}
if (null !== $model->ancestor->contact->address->cityId) {
    $jsonData["ancestor"]["contact"]["address"]["cityId"] = $model->ancestor->contact->address->cityId;
}
if (null !== $model->ancestor->contact->address->cityType) {
    $jsonData["ancestor"]["contact"]["address"]["cityType"] = $model->ancestor->contact->address->cityType;
}
if (null !== $model->ancestor->contact->address->street) {
    $jsonData["ancestor"]["contact"]["address"]["street"] = $model->ancestor->contact->address->street;
}
if (null !== $model->ancestor->contact->address->streetId) {
    $jsonData["ancestor"]["contact"]["address"]["streetId"] = $model->ancestor->contact->address->streetId;
}
if (null !== $model->ancestor->contact->address->streetType) {
    $jsonData["ancestor"]["contact"]["address"]["streetType"] = $model->ancestor->contact->address->streetType;
}
if (null !== $model->ancestor->contact->address->building) {
    $jsonData["ancestor"]["contact"]["address"]["building"] = $model->ancestor->contact->address->building;
}
if (null !== $model->ancestor->contact->address->flat) {
    $jsonData["ancestor"]["contact"]["address"]["flat"] = $model->ancestor->contact->address->flat;
}
if (null !== $model->ancestor->contact->address->floor) {
    $jsonData["ancestor"]["contact"]["address"]["floor"] = $model->ancestor->contact->address->floor;
}
if (null !== $model->ancestor->contact->address->block) {
    $jsonData["ancestor"]["contact"]["address"]["block"] = $model->ancestor->contact->address->block;
}
if (null !== $model->ancestor->contact->address->house) {
    $jsonData["ancestor"]["contact"]["address"]["house"] = $model->ancestor->contact->address->house;
}
if (null !== $model->ancestor->contact->address->housing) {
    $jsonData["ancestor"]["contact"]["address"]["housing"] = $model->ancestor->contact->address->housing;
}
if (null !== $model->ancestor->contact->address->metro) {
    $jsonData["ancestor"]["contact"]["address"]["metro"] = $model->ancestor->contact->address->metro;
}
if (null !== $model->ancestor->contact->address->notes) {
    $jsonData["ancestor"]["contact"]["address"]["notes"] = $model->ancestor->contact->address->notes;
}
if (null !== $model->ancestor->contact->address->text) {
    $jsonData["ancestor"]["contact"]["address"]["text"] = $model->ancestor->contact->address->text;
}
if (null !== $model->ancestor->contact->address->externalId) {
    $jsonData["ancestor"]["contact"]["address"]["externalId"] = $model->ancestor->contact->address->externalId;
}

if (0 === \count($jsonData["ancestor"]["contact"]["address"])) {
    $jsonData["ancestor"]["contact"]["address"] = $emptyObject;
}

}
if (null !== $model->ancestor->contact->segments) {
    $jsonData["ancestor"]["contact"]["segments"] = [];
foreach (array_keys($model->ancestor->contact->segments) as $index35) {
    $jsonData["ancestor"]["contact"]["segments"][$index35] = [];
if (null !== $model->ancestor->contact->segments[$index35]->id) {
    $jsonData["ancestor"]["contact"]["segments"][$index35]["id"] = $model->ancestor->contact->segments[$index35]->id;
}
if (null !== $model->ancestor->contact->segments[$index35]->code) {
    $jsonData["ancestor"]["contact"]["segments"][$index35]["code"] = $model->ancestor->contact->segments[$index35]->code;
}
if (null !== $model->ancestor->contact->segments[$index35]->name) {
    $jsonData["ancestor"]["contact"]["segments"][$index35]["name"] = $model->ancestor->contact->segments[$index35]->name;
}
if (null !== $model->ancestor->contact->segments[$index35]->createdAt) {
    $jsonData["ancestor"]["contact"]["segments"][$index35]["createdAt"] = $model->ancestor->contact->segments[$index35]->createdAt->format('Y-m-d H:i:s');;
}
if (null !== $model->ancestor->contact->segments[$index35]->isDynamic) {
    $jsonData["ancestor"]["contact"]["segments"][$index35]["isDynamic"] = $model->ancestor->contact->segments[$index35]->isDynamic;
}
if (null !== $model->ancestor->contact->segments[$index35]->customersCount) {
    $jsonData["ancestor"]["contact"]["segments"][$index35]["customersCount"] = $model->ancestor->contact->segments[$index35]->customersCount;
}
if (null !== $model->ancestor->contact->segments[$index35]->active) {
    $jsonData["ancestor"]["contact"]["segments"][$index35]["active"] = $model->ancestor->contact->segments[$index35]->active;
}

if (0 === \count($jsonData["ancestor"]["contact"]["segments"][$index35])) {
    $jsonData["ancestor"]["contact"]["segments"][$index35] = $emptyObject;
}

}

}
if (null !== $model->ancestor->contact->maturationTime) {
    $jsonData["ancestor"]["contact"]["maturationTime"] = $model->ancestor->contact->maturationTime;
}
if (null !== $model->ancestor->contact->firstName) {
    $jsonData["ancestor"]["contact"]["firstName"] = $model->ancestor->contact->firstName;
}
if (null !== $model->ancestor->contact->lastName) {
    $jsonData["ancestor"]["contact"]["lastName"] = $model->ancestor->contact->lastName;
}
if (null !== $model->ancestor->contact->patronymic) {
    $jsonData["ancestor"]["contact"]["patronymic"] = $model->ancestor->contact->patronymic;
}
if (null !== $model->ancestor->contact->sex) {
    $jsonData["ancestor"]["contact"]["sex"] = $model->ancestor->contact->sex;
}
if (null !== $model->ancestor->contact->presumableSex) {
    $jsonData["ancestor"]["contact"]["presumableSex"] = $model->ancestor->contact->presumableSex;
}
if (null !== $model->ancestor->contact->email) {
    $jsonData["ancestor"]["contact"]["email"] = $model->ancestor->contact->email;
}
if (null !== $model->ancestor->contact->emailMarketingUnsubscribedAt) {
    $jsonData["ancestor"]["contact"]["emailMarketingUnsubscribedAt"] = $model->ancestor->contact->emailMarketingUnsubscribedAt->format('Y-m-d H:i:s');;
}
if (null !== $model->ancestor->contact->phones) {
    $jsonData["ancestor"]["contact"]["phones"] = [];
foreach (array_keys($model->ancestor->contact->phones) as $index33) {
    $jsonData["ancestor"]["contact"]["phones"][$index33] = [];
if (null !== $model->ancestor->contact->phones[$index33]->number) {
    $jsonData["ancestor"]["contact"]["phones"][$index33]["number"] = $model->ancestor->contact->phones[$index33]->number;
}

if (0 === \count($jsonData["ancestor"]["contact"]["phones"][$index33])) {
    $jsonData["ancestor"]["contact"]["phones"][$index33] = $emptyObject;
}

}

}
if (null !== $model->ancestor->contact->birthday) {
    $jsonData["ancestor"]["contact"]["birthday"] = $model->ancestor->contact->birthday->format('Y-m-d H:i:s');;
}
if (null !== $model->ancestor->contact->source) {
    $jsonData["ancestor"]["contact"]["source"] = [];
if (null !== $model->ancestor->contact->source->source) {
    $jsonData["ancestor"]["contact"]["source"]["source"] = $model->ancestor->contact->source->source;
}
if (null !== $model->ancestor->contact->source->medium) {
    $jsonData["ancestor"]["contact"]["source"]["medium"] = $model->ancestor->contact->source->medium;
}
if (null !== $model->ancestor->contact->source->campaign) {
    $jsonData["ancestor"]["contact"]["source"]["campaign"] = $model->ancestor->contact->source->campaign;
}
if (null !== $model->ancestor->contact->source->keyword) {
    $jsonData["ancestor"]["contact"]["source"]["keyword"] = $model->ancestor->contact->source->keyword;
}
if (null !== $model->ancestor->contact->source->content) {
    $jsonData["ancestor"]["contact"]["source"]["content"] = $model->ancestor->contact->source->content;
}

if (0 === \count($jsonData["ancestor"]["contact"]["source"])) {
    $jsonData["ancestor"]["contact"]["source"] = $emptyObject;
}

}
if (null !== $model->ancestor->contact->photoUrl) {
    $jsonData["ancestor"]["contact"]["photoUrl"] = $model->ancestor->contact->photoUrl;
}
if (null !== $model->ancestor->contact->mgCustomerId) {
    $jsonData["ancestor"]["contact"]["mgCustomerId"] = $model->ancestor->contact->mgCustomerId;
}
if (null !== $model->ancestor->contact->subscribed) {
    $jsonData["ancestor"]["contact"]["subscribed"] = $model->ancestor->contact->subscribed;
}

if (0 === \count($jsonData["ancestor"]["contact"])) {
    $jsonData["ancestor"]["contact"] = $emptyObject;
}

}
if (null !== $model->ancestor->company) {
    $jsonData["ancestor"]["company"] = [];
if (null !== $model->ancestor->company->id) {
    $jsonData["ancestor"]["company"]["id"] = $model->ancestor->company->id;
}
if (null !== $model->ancestor->company->isMain) {
    $jsonData["ancestor"]["company"]["isMain"] = $model->ancestor->company->isMain;
}
if (null !== $model->ancestor->company->externalId) {
    $jsonData["ancestor"]["company"]["externalId"] = $model->ancestor->company->externalId;
}
if (null !== $model->ancestor->company->active) {
    $jsonData["ancestor"]["company"]["active"] = $model->ancestor->company->active;
}
if (null !== $model->ancestor->company->name) {
    $jsonData["ancestor"]["company"]["name"] = $model->ancestor->company->name;
}
if (null !== $model->ancestor->company->brand) {
    $jsonData["ancestor"]["company"]["brand"] = $model->ancestor->company->brand;
}
if (null !== $model->ancestor->company->site) {
    $jsonData["ancestor"]["company"]["site"] = $model->ancestor->company->site;
}
if (null !== $model->ancestor->company->createdAt) {
    $jsonData["ancestor"]["company"]["createdAt"] = $model->ancestor->company->createdAt->format('Y-m-d H:i:s');;
}
if (null !== $model->ancestor->company->customer) {
    $jsonData["ancestor"]["company"]["customer"] = [];
if (null !== $model->ancestor->company->customer->site) {
    $jsonData["ancestor"]["company"]["customer"]["site"] = $model->ancestor->company->customer->site;
}
if (null !== $model->ancestor->company->customer->id) {
    $jsonData["ancestor"]["company"]["customer"]["id"] = $model->ancestor->company->customer->id;
}
if (null !== $model->ancestor->company->customer->externalId) {
    $jsonData["ancestor"]["company"]["customer"]["externalId"] = $model->ancestor->company->customer->externalId;
}
if (null !== $model->ancestor->company->customer->type) {
    $jsonData["ancestor"]["company"]["customer"]["type"] = $model->ancestor->company->customer->type;
}

if (0 === \count($jsonData["ancestor"]["company"]["customer"])) {
    $jsonData["ancestor"]["company"]["customer"] = $emptyObject;
}

}
if (null !== $model->ancestor->company->contragent) {
    $jsonData["ancestor"]["company"]["contragent"] = [];
if (null !== $model->ancestor->company->contragent->contragentType) {
    $jsonData["ancestor"]["company"]["contragent"]["contragentType"] = $model->ancestor->company->contragent->contragentType;
}
if (null !== $model->ancestor->company->contragent->legalName) {
    $jsonData["ancestor"]["company"]["contragent"]["legalName"] = $model->ancestor->company->contragent->legalName;
}
if (null !== $model->ancestor->company->contragent->legalAddress) {
    $jsonData["ancestor"]["company"]["contragent"]["legalAddress"] = $model->ancestor->company->contragent->legalAddress;
}
if (null !== $model->ancestor->company->contragent->INN) {
    $jsonData["ancestor"]["company"]["contragent"]["INN"] = $model->ancestor->company->contragent->INN;
}
if (null !== $model->ancestor->company->contragent->OKPO) {
    $jsonData["ancestor"]["company"]["contragent"]["OKPO"] = $model->ancestor->company->contragent->OKPO;
}
if (null !== $model->ancestor->company->contragent->KPP) {
    $jsonData["ancestor"]["company"]["contragent"]["KPP"] = $model->ancestor->company->contragent->KPP;
}
if (null !== $model->ancestor->company->contragent->OGRN) {
    $jsonData["ancestor"]["company"]["contragent"]["OGRN"] = $model->ancestor->company->contragent->OGRN;
}
if (null !== $model->ancestor->company->contragent->OGRNIP) {
    $jsonData["ancestor"]["company"]["contragent"]["OGRNIP"] = $model->ancestor->company->contragent->OGRNIP;
}
if (null !== $model->ancestor->company->contragent->certificateNumber) {
    $jsonData["ancestor"]["company"]["contragent"]["certificateNumber"] = $model->ancestor->company->contragent->certificateNumber;
}
if (null !== $model->ancestor->company->contragent->certificateDate) {
    $jsonData["ancestor"]["company"]["contragent"]["certificateDate"] = $model->ancestor->company->contragent->certificateDate->format('Y-m-d H:i:s');;
}
if (null !== $model->ancestor->company->contragent->BIK) {
    $jsonData["ancestor"]["company"]["contragent"]["BIK"] = $model->ancestor->company->contragent->BIK;
}
if (null !== $model->ancestor->company->contragent->bank) {
    $jsonData["ancestor"]["company"]["contragent"]["bank"] = $model->ancestor->company->contragent->bank;
}
if (null !== $model->ancestor->company->contragent->bankAddress) {
    $jsonData["ancestor"]["company"]["contragent"]["bankAddress"] = $model->ancestor->company->contragent->bankAddress;
}
if (null !== $model->ancestor->company->contragent->corrAccount) {
    $jsonData["ancestor"]["company"]["contragent"]["corrAccount"] = $model->ancestor->company->contragent->corrAccount;
}
if (null !== $model->ancestor->company->contragent->bankAccount) {
    $jsonData["ancestor"]["company"]["contragent"]["bankAccount"] = $model->ancestor->company->contragent->bankAccount;
}

if (0 === \count($jsonData["ancestor"]["company"]["contragent"])) {
    $jsonData["ancestor"]["company"]["contragent"] = $emptyObject;
}

}
if (null !== $model->ancestor->company->address) {
    $jsonData["ancestor"]["company"]["address"] = [];
if (null !== $model->ancestor->company->address->id) {
    $jsonData["ancestor"]["company"]["address"]["id"] = $model->ancestor->company->address->id;
}
if (null !== $model->ancestor->company->address->name) {
    $jsonData["ancestor"]["company"]["address"]["name"] = $model->ancestor->company->address->name;
}
if (null !== $model->ancestor->company->address->isMain) {
    $jsonData["ancestor"]["company"]["address"]["isMain"] = $model->ancestor->company->address->isMain;
}
if (null !== $model->ancestor->company->address->index) {
    $jsonData["ancestor"]["company"]["address"]["index"] = $model->ancestor->company->address->index;
}
if (null !== $model->ancestor->company->address->countryIso) {
    $jsonData["ancestor"]["company"]["address"]["countryIso"] = $model->ancestor->company->address->countryIso;
}
if (null !== $model->ancestor->company->address->region) {
    $jsonData["ancestor"]["company"]["address"]["region"] = $model->ancestor->company->address->region;
}
if (null !== $model->ancestor->company->address->regionId) {
    $jsonData["ancestor"]["company"]["address"]["regionId"] = $model->ancestor->company->address->regionId;
}
if (null !== $model->ancestor->company->address->city) {
    $jsonData["ancestor"]["company"]["address"]["city"] = $model->ancestor->company->address->city;
}
if (null !== $model->ancestor->company->address->cityId) {
    $jsonData["ancestor"]["company"]["address"]["cityId"] = $model->ancestor->company->address->cityId;
}
if (null !== $model->ancestor->company->address->cityType) {
    $jsonData["ancestor"]["company"]["address"]["cityType"] = $model->ancestor->company->address->cityType;
}
if (null !== $model->ancestor->company->address->street) {
    $jsonData["ancestor"]["company"]["address"]["street"] = $model->ancestor->company->address->street;
}
if (null !== $model->ancestor->company->address->streetId) {
    $jsonData["ancestor"]["company"]["address"]["streetId"] = $model->ancestor->company->address->streetId;
}
if (null !== $model->ancestor->company->address->streetType) {
    $jsonData["ancestor"]["company"]["address"]["streetType"] = $model->ancestor->company->address->streetType;
}
if (null !== $model->ancestor->company->address->building) {
    $jsonData["ancestor"]["company"]["address"]["building"] = $model->ancestor->company->address->building;
}
if (null !== $model->ancestor->company->address->flat) {
    $jsonData["ancestor"]["company"]["address"]["flat"] = $model->ancestor->company->address->flat;
}
if (null !== $model->ancestor->company->address->floor) {
    $jsonData["ancestor"]["company"]["address"]["floor"] = $model->ancestor->company->address->floor;
}
if (null !== $model->ancestor->company->address->block) {
    $jsonData["ancestor"]["company"]["address"]["block"] = $model->ancestor->company->address->block;
}
if (null !== $model->ancestor->company->address->house) {
    $jsonData["ancestor"]["company"]["address"]["house"] = $model->ancestor->company->address->house;
}
if (null !== $model->ancestor->company->address->housing) {
    $jsonData["ancestor"]["company"]["address"]["housing"] = $model->ancestor->company->address->housing;
}
if (null !== $model->ancestor->company->address->metro) {
    $jsonData["ancestor"]["company"]["address"]["metro"] = $model->ancestor->company->address->metro;
}
if (null !== $model->ancestor->company->address->notes) {
    $jsonData["ancestor"]["company"]["address"]["notes"] = $model->ancestor->company->address->notes;
}
if (null !== $model->ancestor->company->address->text) {
    $jsonData["ancestor"]["company"]["address"]["text"] = $model->ancestor->company->address->text;
}
if (null !== $model->ancestor->company->address->externalId) {
    $jsonData["ancestor"]["company"]["address"]["externalId"] = $model->ancestor->company->address->externalId;
}

if (0 === \count($jsonData["ancestor"]["company"]["address"])) {
    $jsonData["ancestor"]["company"]["address"] = $emptyObject;
}

}
if (null !== $model->ancestor->company->customFields) {
    $jsonData["ancestor"]["company"]["customFields"] = [];
foreach (array_keys($model->ancestor->company->customFields) as $index39) {
    $jsonData["ancestor"]["company"]["customFields"] = $model->ancestor->company->customFields;
}

}
if (null !== $model->ancestor->company->marginSumm) {
    $jsonData["ancestor"]["company"]["marginSumm"] = $model->ancestor->company->marginSumm;
}
if (null !== $model->ancestor->company->totalSumm) {
    $jsonData["ancestor"]["company"]["totalSumm"] = $model->ancestor->company->totalSumm;
}
if (null !== $model->ancestor->company->averageSumm) {
    $jsonData["ancestor"]["company"]["averageSumm"] = $model->ancestor->company->averageSumm;
}
if (null !== $model->ancestor->company->ordersCount) {
    $jsonData["ancestor"]["company"]["ordersCount"] = $model->ancestor->company->ordersCount;
}
if (null !== $model->ancestor->company->costSumm) {
    $jsonData["ancestor"]["company"]["costSumm"] = $model->ancestor->company->costSumm;
}

if (0 === \count($jsonData["ancestor"]["company"])) {
    $jsonData["ancestor"]["company"] = $emptyObject;
}

}
if (null !== $model->ancestor->contragent) {
    $jsonData["ancestor"]["contragent"] = [];
if (null !== $model->ancestor->contragent->contragentType) {
    $jsonData["ancestor"]["contragent"]["contragentType"] = $model->ancestor->contragent->contragentType;
}
if (null !== $model->ancestor->contragent->legalName) {
    $jsonData["ancestor"]["contragent"]["legalName"] = $model->ancestor->contragent->legalName;
}
if (null !== $model->ancestor->contragent->legalAddress) {
    $jsonData["ancestor"]["contragent"]["legalAddress"] = $model->ancestor->contragent->legalAddress;
}
if (null !== $model->ancestor->contragent->INN) {
    $jsonData["ancestor"]["contragent"]["INN"] = $model->ancestor->contragent->INN;
}
if (null !== $model->ancestor->contragent->OKPO) {
    $jsonData["ancestor"]["contragent"]["OKPO"] = $model->ancestor->contragent->OKPO;
}
if (null !== $model->ancestor->contragent->KPP) {
    $jsonData["ancestor"]["contragent"]["KPP"] = $model->ancestor->contragent->KPP;
}
if (null !== $model->ancestor->contragent->OGRN) {
    $jsonData["ancestor"]["contragent"]["OGRN"] = $model->ancestor->contragent->OGRN;
}
if (null !== $model->ancestor->contragent->OGRNIP) {
    $jsonData["ancestor"]["contragent"]["OGRNIP"] = $model->ancestor->contragent->OGRNIP;
}
if (null !== $model->ancestor->contragent->certificateNumber) {
    $jsonData["ancestor"]["contragent"]["certificateNumber"] = $model->ancestor->contragent->certificateNumber;
}
if (null !== $model->ancestor->contragent->certificateDate) {
    $jsonData["ancestor"]["contragent"]["certificateDate"] = $model->ancestor->contragent->certificateDate->format('Y-m-d H:i:s');;
}
if (null !== $model->ancestor->contragent->BIK) {
    $jsonData["ancestor"]["contragent"]["BIK"] = $model->ancestor->contragent->BIK;
}
if (null !== $model->ancestor->contragent->bank) {
    $jsonData["ancestor"]["contragent"]["bank"] = $model->ancestor->contragent->bank;
}
if (null !== $model->ancestor->contragent->bankAddress) {
    $jsonData["ancestor"]["contragent"]["bankAddress"] = $model->ancestor->contragent->bankAddress;
}
if (null !== $model->ancestor->contragent->corrAccount) {
    $jsonData["ancestor"]["contragent"]["corrAccount"] = $model->ancestor->contragent->corrAccount;
}
if (null !== $model->ancestor->contragent->bankAccount) {
    $jsonData["ancestor"]["contragent"]["bankAccount"] = $model->ancestor->contragent->bankAccount;
}

if (0 === \count($jsonData["ancestor"]["contragent"])) {
    $jsonData["ancestor"]["contragent"] = $emptyObject;
}

}
if (null !== $model->ancestor->delivery) {
    $jsonData["ancestor"]["delivery"] = [];
if (null !== $model->ancestor->delivery->code) {
    $jsonData["ancestor"]["delivery"]["code"] = $model->ancestor->delivery->code;
}
if (null !== $model->ancestor->delivery->integrationCode) {
    $jsonData["ancestor"]["delivery"]["integrationCode"] = $model->ancestor->delivery->integrationCode;
}
if (null !== $model->ancestor->delivery->data) {
    $jsonData["ancestor"]["delivery"]["data"] = [];
if (null !== $model->ancestor->delivery->data->externalId) {
    $jsonData["ancestor"]["delivery"]["data"]["externalId"] = $model->ancestor->delivery->data->externalId;
}
if (null !== $model->ancestor->delivery->data->trackNumber) {
    $jsonData["ancestor"]["delivery"]["data"]["trackNumber"] = $model->ancestor->delivery->data->trackNumber;
}
if (null !== $model->ancestor->delivery->data->status) {
    $jsonData["ancestor"]["delivery"]["data"]["status"] = $model->ancestor->delivery->data->status;
}
if (null !== $model->ancestor->delivery->data->locked) {
    $jsonData["ancestor"]["delivery"]["data"]["locked"] = $model->ancestor->delivery->data->locked;
}
if (null !== $model->ancestor->delivery->data->pickuppointAddress) {
    $jsonData["ancestor"]["delivery"]["data"]["pickuppointAddress"] = $model->ancestor->delivery->data->pickuppointAddress;
}
if (null !== $model->ancestor->delivery->data->days) {
    $jsonData["ancestor"]["delivery"]["data"]["days"] = $model->ancestor->delivery->data->days;
}
if (null !== $model->ancestor->delivery->data->statusText) {
    $jsonData["ancestor"]["delivery"]["data"]["statusText"] = $model->ancestor->delivery->data->statusText;
}
if (null !== $model->ancestor->delivery->data->statusDate) {
    $jsonData["ancestor"]["delivery"]["data"]["statusDate"] = $model->ancestor->delivery->data->statusDate->format('Y-m-d');;
}
if (null !== $model->ancestor->delivery->data->tariff) {
    $jsonData["ancestor"]["delivery"]["data"]["tariff"] = $model->ancestor->delivery->data->tariff;
}
if (null !== $model->ancestor->delivery->data->tariffName) {
    $jsonData["ancestor"]["delivery"]["data"]["tariffName"] = $model->ancestor->delivery->data->tariffName;
}
if (null !== $model->ancestor->delivery->data->pickuppointId) {
    $jsonData["ancestor"]["delivery"]["data"]["pickuppointId"] = $model->ancestor->delivery->data->pickuppointId;
}
if (null !== $model->ancestor->delivery->data->pickuppointSchedule) {
    $jsonData["ancestor"]["delivery"]["data"]["pickuppointSchedule"] = $model->ancestor->delivery->data->pickuppointSchedule;
}
if (null !== $model->ancestor->delivery->data->pickuppointPhone) {
    $jsonData["ancestor"]["delivery"]["data"]["pickuppointPhone"] = $model->ancestor->delivery->data->pickuppointPhone;
}
if (null !== $model->ancestor->delivery->data->payerType) {
    $jsonData["ancestor"]["delivery"]["data"]["payerType"] = $model->ancestor->delivery->data->payerType;
}
if (null !== $model->ancestor->delivery->data->statusComment) {
    $jsonData["ancestor"]["delivery"]["data"]["statusComment"] = $model->ancestor->delivery->data->statusComment;
}
if (null !== $model->ancestor->delivery->data->cost) {
    $jsonData["ancestor"]["delivery"]["data"]["cost"] = $model->ancestor->delivery->data->cost;
}
if (null !== $model->ancestor->delivery->data->minTerm) {
    $jsonData["ancestor"]["delivery"]["data"]["minTerm"] = $model->ancestor->delivery->data->minTerm;
}
if (null !== $model->ancestor->delivery->data->maxTerm) {
    $jsonData["ancestor"]["delivery"]["data"]["maxTerm"] = $model->ancestor->delivery->data->maxTerm;
}
if (null !== $model->ancestor->delivery->data->shipmentpointId) {
    $jsonData["ancestor"]["delivery"]["data"]["shipmentpointId"] = $model->ancestor->delivery->data->shipmentpointId;
}
if (null !== $model->ancestor->delivery->data->shipmentpointName) {
    $jsonData["ancestor"]["delivery"]["data"]["shipmentpointName"] = $model->ancestor->delivery->data->shipmentpointName;
}
if (null !== $model->ancestor->delivery->data->shipmentpointAddress) {
    $jsonData["ancestor"]["delivery"]["data"]["shipmentpointAddress"] = $model->ancestor->delivery->data->shipmentpointAddress;
}
if (null !== $model->ancestor->delivery->data->shipmentpointSchedule) {
    $jsonData["ancestor"]["delivery"]["data"]["shipmentpointSchedule"] = $model->ancestor->delivery->data->shipmentpointSchedule;
}
if (null !== $model->ancestor->delivery->data->shipmentpointPhone) {
    $jsonData["ancestor"]["delivery"]["data"]["shipmentpointPhone"] = $model->ancestor->delivery->data->shipmentpointPhone;
}
if (null !== $model->ancestor->delivery->data->shipmentpointCoordinateLatitude) {
    $jsonData["ancestor"]["delivery"]["data"]["shipmentpointCoordinateLatitude"] = $model->ancestor->delivery->data->shipmentpointCoordinateLatitude;
}
if (null !== $model->ancestor->delivery->data->shipmentpointCoordinateLongitude) {
    $jsonData["ancestor"]["delivery"]["data"]["shipmentpointCoordinateLongitude"] = $model->ancestor->delivery->data->shipmentpointCoordinateLongitude;
}
if (null !== $model->ancestor->delivery->data->pickuppointName) {
    $jsonData["ancestor"]["delivery"]["data"]["pickuppointName"] = $model->ancestor->delivery->data->pickuppointName;
}
if (null !== $model->ancestor->delivery->data->pickuppointCoordinateLatitude) {
    $jsonData["ancestor"]["delivery"]["data"]["pickuppointCoordinateLatitude"] = $model->ancestor->delivery->data->pickuppointCoordinateLatitude;
}
if (null !== $model->ancestor->delivery->data->pickuppointCoordinateLongitude) {
    $jsonData["ancestor"]["delivery"]["data"]["pickuppointCoordinateLongitude"] = $model->ancestor->delivery->data->pickuppointCoordinateLongitude;
}
if (null !== $model->ancestor->delivery->data->extraData) {
    $jsonData["ancestor"]["delivery"]["data"]["extraData"] = [];
foreach (array_keys($model->ancestor->delivery->data->extraData) as $index45) {
    $jsonData["ancestor"]["delivery"]["data"]["extraData"] = $model->ancestor->delivery->data->extraData;
}

}
if (null !== $model->ancestor->delivery->data->packages) {
    $jsonData["ancestor"]["delivery"]["data"]["packages"] = [];
foreach (array_keys($model->ancestor->delivery->data->packages) as $index44) {
    $jsonData["ancestor"]["delivery"]["data"]["packages"][$index44] = [];
if (null !== $model->ancestor->delivery->data->packages[$index44]->packageId) {
    $jsonData["ancestor"]["delivery"]["data"]["packages"][$index44]["packageId"] = $model->ancestor->delivery->data->packages[$index44]->packageId;
}
if (null !== $model->ancestor->delivery->data->packages[$index44]->weight) {
    $jsonData["ancestor"]["delivery"]["data"]["packages"][$index44]["weight"] = $model->ancestor->delivery->data->packages[$index44]->weight;
}
if (null !== $model->ancestor->delivery->data->packages[$index44]->length) {
    $jsonData["ancestor"]["delivery"]["data"]["packages"][$index44]["length"] = $model->ancestor->delivery->data->packages[$index44]->length;
}
if (null !== $model->ancestor->delivery->data->packages[$index44]->width) {
    $jsonData["ancestor"]["delivery"]["data"]["packages"][$index44]["width"] = $model->ancestor->delivery->data->packages[$index44]->width;
}
if (null !== $model->ancestor->delivery->data->packages[$index44]->height) {
    $jsonData["ancestor"]["delivery"]["data"]["packages"][$index44]["height"] = $model->ancestor->delivery->data->packages[$index44]->height;
}
if (null !== $model->ancestor->delivery->data->packages[$index44]->items) {
    $jsonData["ancestor"]["delivery"]["data"]["packages"][$index44]["items"] = [];
foreach (array_keys($model->ancestor->delivery->data->packages[$index44]->items) as $index63) {
    $jsonData["ancestor"]["delivery"]["data"]["packages"][$index44]["items"][$index63] = [];
if (null !== $model->ancestor->delivery->data->packages[$index44]->items[$index63]->orderProduct) {
    $jsonData["ancestor"]["delivery"]["data"]["packages"][$index44]["items"][$index63]["orderProduct"] = [];
if (null !== $model->ancestor->delivery->data->packages[$index44]->items[$index63]->orderProduct->id) {
    $jsonData["ancestor"]["delivery"]["data"]["packages"][$index44]["items"][$index63]["orderProduct"]["id"] = $model->ancestor->delivery->data->packages[$index44]->items[$index63]->orderProduct->id;
}
if (null !== $model->ancestor->delivery->data->packages[$index44]->items[$index63]->orderProduct->externalId) {
    $jsonData["ancestor"]["delivery"]["data"]["packages"][$index44]["items"][$index63]["orderProduct"]["externalId"] = $model->ancestor->delivery->data->packages[$index44]->items[$index63]->orderProduct->externalId;
}
if (null !== $model->ancestor->delivery->data->packages[$index44]->items[$index63]->orderProduct->externalIds) {
    $jsonData["ancestor"]["delivery"]["data"]["packages"][$index44]["items"][$index63]["orderProduct"]["externalIds"] = [];
foreach (array_keys($model->ancestor->delivery->data->packages[$index44]->items[$index63]->orderProduct->externalIds) as $index104) {
    $jsonData["ancestor"]["delivery"]["data"]["packages"][$index44]["items"][$index63]["orderProduct"]["externalIds"][$index104] = [];
if (null !== $model->ancestor->delivery->data->packages[$index44]->items[$index63]->orderProduct->externalIds[$index104]->code) {
    $jsonData["ancestor"]["delivery"]["data"]["packages"][$index44]["items"][$index63]["orderProduct"]["externalIds"][$index104]["code"] = $model->ancestor->delivery->data->packages[$index44]->items[$index63]->orderProduct->externalIds[$index104]->code;
}
if (null !== $model->ancestor->delivery->data->packages[$index44]->items[$index63]->orderProduct->externalIds[$index104]->value) {
    $jsonData["ancestor"]["delivery"]["data"]["packages"][$index44]["items"][$index63]["orderProduct"]["externalIds"][$index104]["value"] = $model->ancestor->delivery->data->packages[$index44]->items[$index63]->orderProduct->externalIds[$index104]->value;
}

if (0 === \count($jsonData["ancestor"]["delivery"]["data"]["packages"][$index44]["items"][$index63]["orderProduct"]["externalIds"][$index104])) {
    $jsonData["ancestor"]["delivery"]["data"]["packages"][$index44]["items"][$index63]["orderProduct"]["externalIds"][$index104] = $emptyObject;
}

}

}

if (0 === \count($jsonData["ancestor"]["delivery"]["data"]["packages"][$index44]["items"][$index63]["orderProduct"])) {
    $jsonData["ancestor"]["delivery"]["data"]["packages"][$index44]["items"][$index63]["orderProduct"] = $emptyObject;
}

}
if (null !== $model->ancestor->delivery->data->packages[$index44]->items[$index63]->quantity) {
    $jsonData["ancestor"]["delivery"]["data"]["packages"][$index44]["items"][$index63]["quantity"] = $model->ancestor->delivery->data->packages[$index44]->items[$index63]->quantity;
}

if (0 === \count($jsonData["ancestor"]["delivery"]["data"]["packages"][$index44]["items"][$index63])) {
    $jsonData["ancestor"]["delivery"]["data"]["packages"][$index44]["items"][$index63] = $emptyObject;
}

}

}

if (0 === \count($jsonData["ancestor"]["delivery"]["data"]["packages"][$index44])) {
    $jsonData["ancestor"]["delivery"]["data"]["packages"][$index44] = $emptyObject;
}

}

}
if (null !== $model->ancestor->delivery->data->returnExternalId) {
    $jsonData["ancestor"]["delivery"]["data"]["returnExternalId"] = $model->ancestor->delivery->data->returnExternalId;
}
if (null !== $model->ancestor->delivery->data->deliveryName) {
    $jsonData["ancestor"]["delivery"]["data"]["deliveryName"] = $model->ancestor->delivery->data->deliveryName;
}
if (null !== $model->ancestor->delivery->data->price) {
    $jsonData["ancestor"]["delivery"]["data"]["price"] = $model->ancestor->delivery->data->price;
}
if (null !== $model->ancestor->delivery->data->insurancePrice) {
    $jsonData["ancestor"]["delivery"]["data"]["insurancePrice"] = $model->ancestor->delivery->data->insurancePrice;
}
if (null !== $model->ancestor->delivery->data->tariffType) {
    $jsonData["ancestor"]["delivery"]["data"]["tariffType"] = $model->ancestor->delivery->data->tariffType;
}
if (null !== $model->ancestor->delivery->data->receiverCity) {
    $jsonData["ancestor"]["delivery"]["data"]["receiverCity"] = $model->ancestor->delivery->data->receiverCity;
}
if (null !== $model->ancestor->delivery->data->services) {
    $jsonData["ancestor"]["delivery"]["data"]["services"] = [];
foreach (array_keys($model->ancestor->delivery->data->services) as $index44) {
    $jsonData["ancestor"]["delivery"]["data"]["services"] = $model->ancestor->delivery->data->services;
}

}
if (null !== $model->ancestor->delivery->data->packageNumber) {
    $jsonData["ancestor"]["delivery"]["data"]["packageNumber"] = $model->ancestor->delivery->data->packageNumber;
}
if (null !== $model->ancestor->delivery->data->comment) {
    $jsonData["ancestor"]["delivery"]["data"]["comment"] = $model->ancestor->delivery->data->comment;
}
if (null !== $model->ancestor->delivery->data->deliveryCode) {
    $jsonData["ancestor"]["delivery"]["data"]["deliveryCode"] = $model->ancestor->delivery->data->deliveryCode;
}
if (null !== $model->ancestor->delivery->data->notes) {
    $jsonData["ancestor"]["delivery"]["data"]["notes"] = $model->ancestor->delivery->data->notes;
}
if (null !== $model->ancestor->delivery->data->id) {
    $jsonData["ancestor"]["delivery"]["data"]["id"] = $model->ancestor->delivery->data->id;
}
if (null !== $model->ancestor->delivery->data->firstName) {
    $jsonData["ancestor"]["delivery"]["data"]["firstName"] = $model->ancestor->delivery->data->firstName;
}
if (null !== $model->ancestor->delivery->data->lastName) {
    $jsonData["ancestor"]["delivery"]["data"]["lastName"] = $model->ancestor->delivery->data->lastName;
}
if (null !== $model->ancestor->delivery->data->patronymic) {
    $jsonData["ancestor"]["delivery"]["data"]["patronymic"] = $model->ancestor->delivery->data->patronymic;
}
if (null !== $model->ancestor->delivery->data->active) {
    $jsonData["ancestor"]["delivery"]["data"]["active"] = $model->ancestor->delivery->data->active;
}
if (null !== $model->ancestor->delivery->data->email) {
    $jsonData["ancestor"]["delivery"]["data"]["email"] = $model->ancestor->delivery->data->email;
}
if (null !== $model->ancestor->delivery->data->phone) {
    $jsonData["ancestor"]["delivery"]["data"]["phone"] = [];
if (null !== $model->ancestor->delivery->data->phone->number) {
    $jsonData["ancestor"]["delivery"]["data"]["phone"]["number"] = $model->ancestor->delivery->data->phone->number;
}

if (0 === \count($jsonData["ancestor"]["delivery"]["data"]["phone"])) {
    $jsonData["ancestor"]["delivery"]["data"]["phone"] = $emptyObject;
}

}
if (null !== $model->ancestor->delivery->data->description) {
    $jsonData["ancestor"]["delivery"]["data"]["description"] = $model->ancestor->delivery->data->description;
}
if (null !== $model->ancestor->delivery->data->courierId) {
    $jsonData["ancestor"]["delivery"]["data"]["courierId"] = $model->ancestor->delivery->data->courierId;
}
if (null !== $model->ancestor->delivery->data->serviceType) {
    $jsonData["ancestor"]["delivery"]["data"]["serviceType"] = $model->ancestor->delivery->data->serviceType;
}
if (null !== $model->ancestor->delivery->data->pickuppoint) {
    $jsonData["ancestor"]["delivery"]["data"]["pickuppoint"] = $model->ancestor->delivery->data->pickuppoint;
}
if (null !== $model->ancestor->delivery->data->receiverWarehouseTypeRef) {
    $jsonData["ancestor"]["delivery"]["data"]["receiverWarehouseTypeRef"] = $model->ancestor->delivery->data->receiverWarehouseTypeRef;
}
if (null !== $model->ancestor->delivery->data->statusName) {
    $jsonData["ancestor"]["delivery"]["data"]["statusName"] = $model->ancestor->delivery->data->statusName;
}
if (null !== $model->ancestor->delivery->data->receiverCityRef) {
    $jsonData["ancestor"]["delivery"]["data"]["receiverCityRef"] = $model->ancestor->delivery->data->receiverCityRef;
}
if (null !== $model->ancestor->delivery->data->receiverStreet) {
    $jsonData["ancestor"]["delivery"]["data"]["receiverStreet"] = $model->ancestor->delivery->data->receiverStreet;
}
if (null !== $model->ancestor->delivery->data->receiverStreetRef) {
    $jsonData["ancestor"]["delivery"]["data"]["receiverStreetRef"] = $model->ancestor->delivery->data->receiverStreetRef;
}
if (null !== $model->ancestor->delivery->data->seatsAmount) {
    $jsonData["ancestor"]["delivery"]["data"]["seatsAmount"] = $model->ancestor->delivery->data->seatsAmount;
}
if (null !== $model->ancestor->delivery->data->cargoType) {
    $jsonData["ancestor"]["delivery"]["data"]["cargoType"] = $model->ancestor->delivery->data->cargoType;
}
if (null !== $model->ancestor->delivery->data->cargoDescription) {
    $jsonData["ancestor"]["delivery"]["data"]["cargoDescription"] = $model->ancestor->delivery->data->cargoDescription;
}
if (null !== $model->ancestor->delivery->data->cashPayerType) {
    $jsonData["ancestor"]["delivery"]["data"]["cashPayerType"] = $model->ancestor->delivery->data->cashPayerType;
}
if (null !== $model->ancestor->delivery->data->paymentForm) {
    $jsonData["ancestor"]["delivery"]["data"]["paymentForm"] = $model->ancestor->delivery->data->paymentForm;
}
if (null !== $model->ancestor->delivery->data->ownershipForm) {
    $jsonData["ancestor"]["delivery"]["data"]["ownershipForm"] = $model->ancestor->delivery->data->ownershipForm;
}
if (null !== $model->ancestor->delivery->data->accompanyingDocument) {
    $jsonData["ancestor"]["delivery"]["data"]["accompanyingDocument"] = $model->ancestor->delivery->data->accompanyingDocument;
}
if (null !== $model->ancestor->delivery->data->preferredDeliveryDate) {
    $jsonData["ancestor"]["delivery"]["data"]["preferredDeliveryDate"] = $model->ancestor->delivery->data->preferredDeliveryDate->format('Y-m-d H:i:s');;
}
if (null !== $model->ancestor->delivery->data->timeInterval) {
    $jsonData["ancestor"]["delivery"]["data"]["timeInterval"] = $model->ancestor->delivery->data->timeInterval;
}
if (null !== $model->ancestor->delivery->data->saturdayDelivery) {
    $jsonData["ancestor"]["delivery"]["data"]["saturdayDelivery"] = $model->ancestor->delivery->data->saturdayDelivery;
}
if (null !== $model->ancestor->delivery->data->deliveryDate) {
    $jsonData["ancestor"]["delivery"]["data"]["deliveryDate"] = $model->ancestor->delivery->data->deliveryDate;
}
if (null !== $model->ancestor->delivery->data->denieReason) {
    $jsonData["ancestor"]["delivery"]["data"]["denieReason"] = $model->ancestor->delivery->data->denieReason;
}
if (null !== $model->ancestor->delivery->data->backwardDelivery) {
    $jsonData["ancestor"]["delivery"]["data"]["backwardDelivery"] = $model->ancestor->delivery->data->backwardDelivery;
}
if (null !== $model->ancestor->delivery->data->backwardDeliveryCargoType) {
    $jsonData["ancestor"]["delivery"]["data"]["backwardDeliveryCargoType"] = $model->ancestor->delivery->data->backwardDeliveryCargoType;
}
if (null !== $model->ancestor->delivery->data->backwardDeliveryPayerType) {
    $jsonData["ancestor"]["delivery"]["data"]["backwardDeliveryPayerType"] = $model->ancestor->delivery->data->backwardDeliveryPayerType;
}
if (null !== $model->ancestor->delivery->data->backwardDeliveryRedeliveryString) {
    $jsonData["ancestor"]["delivery"]["data"]["backwardDeliveryRedeliveryString"] = $model->ancestor->delivery->data->backwardDeliveryRedeliveryString;
}
if (null !== $model->ancestor->delivery->data->afterpaymentOnGoodsCost) {
    $jsonData["ancestor"]["delivery"]["data"]["afterpaymentOnGoodsCost"] = $model->ancestor->delivery->data->afterpaymentOnGoodsCost;
}
if (null !== $model->ancestor->delivery->data->declaredValue) {
    $jsonData["ancestor"]["delivery"]["data"]["declaredValue"] = $model->ancestor->delivery->data->declaredValue;
}
if (null !== $model->ancestor->delivery->data->sendDate) {
    $jsonData["ancestor"]["delivery"]["data"]["sendDate"] = $model->ancestor->delivery->data->sendDate->format('Y-m-d H:i:s');;
}
if (null !== $model->ancestor->delivery->data->deliveryType) {
    $jsonData["ancestor"]["delivery"]["data"]["deliveryType"] = $model->ancestor->delivery->data->deliveryType;
}
if (null !== $model->ancestor->delivery->data->pickupType) {
    $jsonData["ancestor"]["delivery"]["data"]["pickupType"] = $model->ancestor->delivery->data->pickupType;
}
if (null !== $model->ancestor->delivery->data->pickuppointDescription) {
    $jsonData["ancestor"]["delivery"]["data"]["pickuppointDescription"] = $model->ancestor->delivery->data->pickuppointDescription;
}
if (null !== $model->ancestor->delivery->data->placesCount) {
    $jsonData["ancestor"]["delivery"]["data"]["placesCount"] = $model->ancestor->delivery->data->placesCount;
}
if (null !== $model->ancestor->delivery->data->service) {
    $jsonData["ancestor"]["delivery"]["data"]["service"] = $model->ancestor->delivery->data->service;
}

if (0 === \count($jsonData["ancestor"]["delivery"]["data"])) {
    $jsonData["ancestor"]["delivery"]["data"] = $emptyObject;
}

}
if (null !== $model->ancestor->delivery->service) {
    $jsonData["ancestor"]["delivery"]["service"] = [];
if (null !== $model->ancestor->delivery->service->name) {
    $jsonData["ancestor"]["delivery"]["service"]["name"] = $model->ancestor->delivery->service->name;
}
if (null !== $model->ancestor->delivery->service->code) {
    $jsonData["ancestor"]["delivery"]["service"]["code"] = $model->ancestor->delivery->service->code;
}
if (null !== $model->ancestor->delivery->service->active) {
    $jsonData["ancestor"]["delivery"]["service"]["active"] = $model->ancestor->delivery->service->active;
}

if (0 === \count($jsonData["ancestor"]["delivery"]["service"])) {
    $jsonData["ancestor"]["delivery"]["service"] = $emptyObject;
}

}
if (null !== $model->ancestor->delivery->cost) {
    $jsonData["ancestor"]["delivery"]["cost"] = $model->ancestor->delivery->cost;
}
if (null !== $model->ancestor->delivery->netCost) {
    $jsonData["ancestor"]["delivery"]["netCost"] = $model->ancestor->delivery->netCost;
}
if (null !== $model->ancestor->delivery->date) {
    $jsonData["ancestor"]["delivery"]["date"] = $model->ancestor->delivery->date->format('Y-m-d');;
}
if (null !== $model->ancestor->delivery->time) {
    $jsonData["ancestor"]["delivery"]["time"] = [];
if (null !== $model->ancestor->delivery->time->from) {
    $jsonData["ancestor"]["delivery"]["time"]["from"] = $model->ancestor->delivery->time->from->format('H:i');;
}
if (null !== $model->ancestor->delivery->time->to) {
    $jsonData["ancestor"]["delivery"]["time"]["to"] = $model->ancestor->delivery->time->to->format('H:i');;
}
if (null !== $model->ancestor->delivery->time->custom) {
    $jsonData["ancestor"]["delivery"]["time"]["custom"] = $model->ancestor->delivery->time->custom;
}

if (0 === \count($jsonData["ancestor"]["delivery"]["time"])) {
    $jsonData["ancestor"]["delivery"]["time"] = $emptyObject;
}

}
if (null !== $model->ancestor->delivery->address) {
    $jsonData["ancestor"]["delivery"]["address"] = [];
if (null !== $model->ancestor->delivery->address->id) {
    $jsonData["ancestor"]["delivery"]["address"]["id"] = $model->ancestor->delivery->address->id;
}
if (null !== $model->ancestor->delivery->address->index) {
    $jsonData["ancestor"]["delivery"]["address"]["index"] = $model->ancestor->delivery->address->index;
}
if (null !== $model->ancestor->delivery->address->countryIso) {
    $jsonData["ancestor"]["delivery"]["address"]["countryIso"] = $model->ancestor->delivery->address->countryIso;
}
if (null !== $model->ancestor->delivery->address->region) {
    $jsonData["ancestor"]["delivery"]["address"]["region"] = $model->ancestor->delivery->address->region;
}
if (null !== $model->ancestor->delivery->address->regionId) {
    $jsonData["ancestor"]["delivery"]["address"]["regionId"] = $model->ancestor->delivery->address->regionId;
}
if (null !== $model->ancestor->delivery->address->city) {
    $jsonData["ancestor"]["delivery"]["address"]["city"] = $model->ancestor->delivery->address->city;
}
if (null !== $model->ancestor->delivery->address->cityId) {
    $jsonData["ancestor"]["delivery"]["address"]["cityId"] = $model->ancestor->delivery->address->cityId;
}
if (null !== $model->ancestor->delivery->address->cityType) {
    $jsonData["ancestor"]["delivery"]["address"]["cityType"] = $model->ancestor->delivery->address->cityType;
}
if (null !== $model->ancestor->delivery->address->street) {
    $jsonData["ancestor"]["delivery"]["address"]["street"] = $model->ancestor->delivery->address->street;
}
if (null !== $model->ancestor->delivery->address->streetId) {
    $jsonData["ancestor"]["delivery"]["address"]["streetId"] = $model->ancestor->delivery->address->streetId;
}
if (null !== $model->ancestor->delivery->address->streetType) {
    $jsonData["ancestor"]["delivery"]["address"]["streetType"] = $model->ancestor->delivery->address->streetType;
}
if (null !== $model->ancestor->delivery->address->building) {
    $jsonData["ancestor"]["delivery"]["address"]["building"] = $model->ancestor->delivery->address->building;
}
if (null !== $model->ancestor->delivery->address->flat) {
    $jsonData["ancestor"]["delivery"]["address"]["flat"] = $model->ancestor->delivery->address->flat;
}
if (null !== $model->ancestor->delivery->address->floor) {
    $jsonData["ancestor"]["delivery"]["address"]["floor"] = $model->ancestor->delivery->address->floor;
}
if (null !== $model->ancestor->delivery->address->block) {
    $jsonData["ancestor"]["delivery"]["address"]["block"] = $model->ancestor->delivery->address->block;
}
if (null !== $model->ancestor->delivery->address->house) {
    $jsonData["ancestor"]["delivery"]["address"]["house"] = $model->ancestor->delivery->address->house;
}
if (null !== $model->ancestor->delivery->address->housing) {
    $jsonData["ancestor"]["delivery"]["address"]["housing"] = $model->ancestor->delivery->address->housing;
}
if (null !== $model->ancestor->delivery->address->metro) {
    $jsonData["ancestor"]["delivery"]["address"]["metro"] = $model->ancestor->delivery->address->metro;
}
if (null !== $model->ancestor->delivery->address->text) {
    $jsonData["ancestor"]["delivery"]["address"]["text"] = $model->ancestor->delivery->address->text;
}
if (null !== $model->ancestor->delivery->address->notes) {
    $jsonData["ancestor"]["delivery"]["address"]["notes"] = $model->ancestor->delivery->address->notes;
}

if (0 === \count($jsonData["ancestor"]["delivery"]["address"])) {
    $jsonData["ancestor"]["delivery"]["address"] = $emptyObject;
}

}
if (null !== $model->ancestor->delivery->vatRate) {
    $jsonData["ancestor"]["delivery"]["vatRate"] = $model->ancestor->delivery->vatRate;
}

if (0 === \count($jsonData["ancestor"]["delivery"])) {
    $jsonData["ancestor"]["delivery"] = $emptyObject;
}

}
if (null !== $model->ancestor->marketplace) {
    $jsonData["ancestor"]["marketplace"] = [];
if (null !== $model->ancestor->marketplace->code) {
    $jsonData["ancestor"]["marketplace"]["code"] = $model->ancestor->marketplace->code;
}
if (null !== $model->ancestor->marketplace->orderId) {
    $jsonData["ancestor"]["marketplace"]["orderId"] = $model->ancestor->marketplace->orderId;
}

if (0 === \count($jsonData["ancestor"]["marketplace"])) {
    $jsonData["ancestor"]["marketplace"] = $emptyObject;
}

}
if (null !== $model->ancestor->site) {
    $jsonData["ancestor"]["site"] = $model->ancestor->site;
}
if (null !== $model->ancestor->status) {
    $jsonData["ancestor"]["status"] = $model->ancestor->status;
}
if (null !== $model->ancestor->statusComment) {
    $jsonData["ancestor"]["statusComment"] = $model->ancestor->statusComment;
}
if (null !== $model->ancestor->source) {
    $jsonData["ancestor"]["source"] = [];
if (null !== $model->ancestor->source->source) {
    $jsonData["ancestor"]["source"]["source"] = $model->ancestor->source->source;
}
if (null !== $model->ancestor->source->medium) {
    $jsonData["ancestor"]["source"]["medium"] = $model->ancestor->source->medium;
}
if (null !== $model->ancestor->source->campaign) {
    $jsonData["ancestor"]["source"]["campaign"] = $model->ancestor->source->campaign;
}
if (null !== $model->ancestor->source->keyword) {
    $jsonData["ancestor"]["source"]["keyword"] = $model->ancestor->source->keyword;
}
if (null !== $model->ancestor->source->content) {
    $jsonData["ancestor"]["source"]["content"] = $model->ancestor->source->content;
}

if (0 === \count($jsonData["ancestor"]["source"])) {
    $jsonData["ancestor"]["source"] = $emptyObject;
}

}
if (null !== $model->ancestor->items) {
    $jsonData["ancestor"]["items"] = [];
foreach (array_keys($model->ancestor->items) as $index21) {
    $jsonData["ancestor"]["items"][$index21] = [];
if (null !== $model->ancestor->items[$index21]->externalId) {
    $jsonData["ancestor"]["items"][$index21]["externalId"] = $model->ancestor->items[$index21]->externalId;
}
if (null !== $model->ancestor->items[$index21]->markingCodes) {
    $jsonData["ancestor"]["items"][$index21]["markingCodes"] = [];
foreach (array_keys($model->ancestor->items[$index21]->markingCodes) as $index47) {
    $jsonData["ancestor"]["items"][$index21]["markingCodes"] = $model->ancestor->items[$index21]->markingCodes;
}

}
if (null !== $model->ancestor->items[$index21]->id) {
    $jsonData["ancestor"]["items"][$index21]["id"] = $model->ancestor->items[$index21]->id;
}
if (null !== $model->ancestor->items[$index21]->externalIds) {
    $jsonData["ancestor"]["items"][$index21]["externalIds"] = [];
foreach (array_keys($model->ancestor->items[$index21]->externalIds) as $index46) {
    $jsonData["ancestor"]["items"][$index21]["externalIds"][$index46] = [];
if (null !== $model->ancestor->items[$index21]->externalIds[$index46]->code) {
    $jsonData["ancestor"]["items"][$index21]["externalIds"][$index46]["code"] = $model->ancestor->items[$index21]->externalIds[$index46]->code;
}
if (null !== $model->ancestor->items[$index21]->externalIds[$index46]->value) {
    $jsonData["ancestor"]["items"][$index21]["externalIds"][$index46]["value"] = $model->ancestor->items[$index21]->externalIds[$index46]->value;
}

if (0 === \count($jsonData["ancestor"]["items"][$index21]["externalIds"][$index46])) {
    $jsonData["ancestor"]["items"][$index21]["externalIds"][$index46] = $emptyObject;
}

}

}
if (null !== $model->ancestor->items[$index21]->priceType) {
    $jsonData["ancestor"]["items"][$index21]["priceType"] = [];
if (null !== $model->ancestor->items[$index21]->priceType->code) {
    $jsonData["ancestor"]["items"][$index21]["priceType"]["code"] = $model->ancestor->items[$index21]->priceType->code;
}

if (0 === \count($jsonData["ancestor"]["items"][$index21]["priceType"])) {
    $jsonData["ancestor"]["items"][$index21]["priceType"] = $emptyObject;
}

}
if (null !== $model->ancestor->items[$index21]->initialPrice) {
    $jsonData["ancestor"]["items"][$index21]["initialPrice"] = $model->ancestor->items[$index21]->initialPrice;
}
if (null !== $model->ancestor->items[$index21]->discountManualAmount) {
    $jsonData["ancestor"]["items"][$index21]["discountManualAmount"] = $model->ancestor->items[$index21]->discountManualAmount;
}
if (null !== $model->ancestor->items[$index21]->discountManualPercent) {
    $jsonData["ancestor"]["items"][$index21]["discountManualPercent"] = $model->ancestor->items[$index21]->discountManualPercent;
}
if (null !== $model->ancestor->items[$index21]->discountTotal) {
    $jsonData["ancestor"]["items"][$index21]["discountTotal"] = $model->ancestor->items[$index21]->discountTotal;
}
if (null !== $model->ancestor->items[$index21]->prices) {
    $jsonData["ancestor"]["items"][$index21]["prices"] = [];
foreach (array_keys($model->ancestor->items[$index21]->prices) as $index41) {
    $jsonData["ancestor"]["items"][$index21]["prices"][$index41] = [];
if (null !== $model->ancestor->items[$index21]->prices[$index41]->price) {
    $jsonData["ancestor"]["items"][$index21]["prices"][$index41]["price"] = $model->ancestor->items[$index21]->prices[$index41]->price;
}
if (null !== $model->ancestor->items[$index21]->prices[$index41]->quantity) {
    $jsonData["ancestor"]["items"][$index21]["prices"][$index41]["quantity"] = $model->ancestor->items[$index21]->prices[$index41]->quantity;
}

if (0 === \count($jsonData["ancestor"]["items"][$index21]["prices"][$index41])) {
    $jsonData["ancestor"]["items"][$index21]["prices"][$index41] = $emptyObject;
}

}

}
if (null !== $model->ancestor->items[$index21]->vatRate) {
    $jsonData["ancestor"]["items"][$index21]["vatRate"] = $model->ancestor->items[$index21]->vatRate;
}
if (null !== $model->ancestor->items[$index21]->createdAt) {
    $jsonData["ancestor"]["items"][$index21]["createdAt"] = $model->ancestor->items[$index21]->createdAt->format('Y-m-d H:i:s');;
}
if (null !== $model->ancestor->items[$index21]->quantity) {
    $jsonData["ancestor"]["items"][$index21]["quantity"] = $model->ancestor->items[$index21]->quantity;
}
if (null !== $model->ancestor->items[$index21]->status) {
    $jsonData["ancestor"]["items"][$index21]["status"] = $model->ancestor->items[$index21]->status;
}
if (null !== $model->ancestor->items[$index21]->comment) {
    $jsonData["ancestor"]["items"][$index21]["comment"] = $model->ancestor->items[$index21]->comment;
}
if (null !== $model->ancestor->items[$index21]->offer) {
    $jsonData["ancestor"]["items"][$index21]["offer"] = [];
if (null !== $model->ancestor->items[$index21]->offer->displayName) {
    $jsonData["ancestor"]["items"][$index21]["offer"]["displayName"] = $model->ancestor->items[$index21]->offer->displayName;
}
if (null !== $model->ancestor->items[$index21]->offer->id) {
    $jsonData["ancestor"]["items"][$index21]["offer"]["id"] = $model->ancestor->items[$index21]->offer->id;
}
if (null !== $model->ancestor->items[$index21]->offer->externalId) {
    $jsonData["ancestor"]["items"][$index21]["offer"]["externalId"] = $model->ancestor->items[$index21]->offer->externalId;
}
if (null !== $model->ancestor->items[$index21]->offer->xmlId) {
    $jsonData["ancestor"]["items"][$index21]["offer"]["xmlId"] = $model->ancestor->items[$index21]->offer->xmlId;
}
if (null !== $model->ancestor->items[$index21]->offer->name) {
    $jsonData["ancestor"]["items"][$index21]["offer"]["name"] = $model->ancestor->items[$index21]->offer->name;
}
if (null !== $model->ancestor->items[$index21]->offer->article) {
    $jsonData["ancestor"]["items"][$index21]["offer"]["article"] = $model->ancestor->items[$index21]->offer->article;
}
if (null !== $model->ancestor->items[$index21]->offer->vatRate) {
    $jsonData["ancestor"]["items"][$index21]["offer"]["vatRate"] = $model->ancestor->items[$index21]->offer->vatRate;
}
if (null !== $model->ancestor->items[$index21]->offer->unit) {
    $jsonData["ancestor"]["items"][$index21]["offer"]["unit"] = [];
if (null !== $model->ancestor->items[$index21]->offer->unit->code) {
    $jsonData["ancestor"]["items"][$index21]["offer"]["unit"]["code"] = $model->ancestor->items[$index21]->offer->unit->code;
}
if (null !== $model->ancestor->items[$index21]->offer->unit->name) {
    $jsonData["ancestor"]["items"][$index21]["offer"]["unit"]["name"] = $model->ancestor->items[$index21]->offer->unit->name;
}
if (null !== $model->ancestor->items[$index21]->offer->unit->sym) {
    $jsonData["ancestor"]["items"][$index21]["offer"]["unit"]["sym"] = $model->ancestor->items[$index21]->offer->unit->sym;
}

if (0 === \count($jsonData["ancestor"]["items"][$index21]["offer"]["unit"])) {
    $jsonData["ancestor"]["items"][$index21]["offer"]["unit"] = $emptyObject;
}

}
if (null !== $model->ancestor->items[$index21]->offer->barcode) {
    $jsonData["ancestor"]["items"][$index21]["offer"]["barcode"] = $model->ancestor->items[$index21]->offer->barcode;
}
if (null !== $model->ancestor->items[$index21]->offer->properties) {
    $jsonData["ancestor"]["items"][$index21]["offer"]["properties"] = [];
foreach (array_keys($model->ancestor->items[$index21]->offer->properties) as $index54) {
    $jsonData["ancestor"]["items"][$index21]["offer"]["properties"] = $model->ancestor->items[$index21]->offer->properties;
}

}

if (0 === \count($jsonData["ancestor"]["items"][$index21]["offer"])) {
    $jsonData["ancestor"]["items"][$index21]["offer"] = $emptyObject;
}

}
if (null !== $model->ancestor->items[$index21]->productName) {
    $jsonData["ancestor"]["items"][$index21]["productName"] = $model->ancestor->items[$index21]->productName;
}
if (null !== $model->ancestor->items[$index21]->isCanceled) {
    $jsonData["ancestor"]["items"][$index21]["isCanceled"] = $model->ancestor->items[$index21]->isCanceled;
}
if (null !== $model->ancestor->items[$index21]->properties) {
    if (0 === \count($model->ancestor->items[$index21]->properties)) {
    $jsonData["ancestor"]["items"][$index21]["properties"] = $emptyHashmap;
} else {
    foreach (array_keys($model->ancestor->items[$index21]->properties) as $index45) {
        $jsonData["ancestor"]["items"][$index21]["properties"][$index45] = [];
if (null !== $model->ancestor->items[$index21]->properties[$index45]->code) {
    $jsonData["ancestor"]["items"][$index21]["properties"][$index45]["code"] = $model->ancestor->items[$index21]->properties[$index45]->code;
}
if (null !== $model->ancestor->items[$index21]->properties[$index45]->name) {
    $jsonData["ancestor"]["items"][$index21]["properties"][$index45]["name"] = $model->ancestor->items[$index21]->properties[$index45]->name;
}
if (null !== $model->ancestor->items[$index21]->properties[$index45]->value) {
    $jsonData["ancestor"]["items"][$index21]["properties"][$index45]["value"] = $model->ancestor->items[$index21]->properties[$index45]->value;
}

if (0 === \count($jsonData["ancestor"]["items"][$index21]["properties"][$index45])) {
    $jsonData["ancestor"]["items"][$index21]["properties"][$index45] = $emptyObject;
}

    }
}

}
if (null !== $model->ancestor->items[$index21]->purchasePrice) {
    $jsonData["ancestor"]["items"][$index21]["purchasePrice"] = $model->ancestor->items[$index21]->purchasePrice;
}

if (0 === \count($jsonData["ancestor"]["items"][$index21])) {
    $jsonData["ancestor"]["items"][$index21] = $emptyObject;
}

}

}
if (null !== $model->ancestor->fullPaidAt) {
    $jsonData["ancestor"]["fullPaidAt"] = $model->ancestor->fullPaidAt->format('Y-m-d H:i:s');;
}
if (null !== $model->ancestor->payments) {
    $jsonData["ancestor"]["payments"] = [];
foreach (array_keys($model->ancestor->payments) as $index24) {
    $jsonData["ancestor"]["payments"][$index24] = [];
if (null !== $model->ancestor->payments[$index24]->id) {
    $jsonData["ancestor"]["payments"][$index24]["id"] = $model->ancestor->payments[$index24]->id;
}
if (null !== $model->ancestor->payments[$index24]->status) {
    $jsonData["ancestor"]["payments"][$index24]["status"] = $model->ancestor->payments[$index24]->status;
}
if (null !== $model->ancestor->payments[$index24]->type) {
    $jsonData["ancestor"]["payments"][$index24]["type"] = $model->ancestor->payments[$index24]->type;
}
if (null !== $model->ancestor->payments[$index24]->externalId) {
    $jsonData["ancestor"]["payments"][$index24]["externalId"] = $model->ancestor->payments[$index24]->externalId;
}
if (null !== $model->ancestor->payments[$index24]->amount) {
    $jsonData["ancestor"]["payments"][$index24]["amount"] = $model->ancestor->payments[$index24]->amount;
}
if (null !== $model->ancestor->payments[$index24]->paidAt) {
    $jsonData["ancestor"]["payments"][$index24]["paidAt"] = $model->ancestor->payments[$index24]->paidAt->format('Y-m-d H:i:s');;
}
if (null !== $model->ancestor->payments[$index24]->comment) {
    $jsonData["ancestor"]["payments"][$index24]["comment"] = $model->ancestor->payments[$index24]->comment;
}

if (0 === \count($jsonData["ancestor"]["payments"][$index24])) {
    $jsonData["ancestor"]["payments"][$index24] = $emptyObject;
}

}

}
if (null !== $model->ancestor->fromApi) {
    $jsonData["ancestor"]["fromApi"] = $model->ancestor->fromApi;
}
if (null !== $model->ancestor->weight) {
    $jsonData["ancestor"]["weight"] = $model->ancestor->weight;
}
if (null !== $model->ancestor->length) {
    $jsonData["ancestor"]["length"] = $model->ancestor->length;
}
if (null !== $model->ancestor->width) {
    $jsonData["ancestor"]["width"] = $model->ancestor->width;
}
if (null !== $model->ancestor->height) {
    $jsonData["ancestor"]["height"] = $model->ancestor->height;
}
if (null !== $model->ancestor->shipmentStore) {
    $jsonData["ancestor"]["shipmentStore"] = $model->ancestor->shipmentStore;
}
if (null !== $model->ancestor->shipmentDate) {
    $jsonData["ancestor"]["shipmentDate"] = $model->ancestor->shipmentDate->format('Y-m-d');;
}
if (null !== $model->ancestor->shipped) {
    $jsonData["ancestor"]["shipped"] = $model->ancestor->shipped;
}
if (null !== $model->ancestor->dialogId) {
    $jsonData["ancestor"]["dialogId"] = $model->ancestor->dialogId;
}
if (null !== $model->ancestor->customFields) {
    $jsonData["ancestor"]["customFields"] = [];
foreach (array_keys($model->ancestor->customFields) as $index28) {
    $jsonData["ancestor"]["customFields"] = $model->ancestor->customFields;
}

}
if (null !== $model->ancestor->clientId) {
    $jsonData["ancestor"]["clientId"] = $model->ancestor->clientId;
}
if (null !== $model->ancestor->loyaltyEventId) {
    $jsonData["ancestor"]["loyaltyEventId"] = $model->ancestor->loyaltyEventId;
}

if (0 === \count($jsonData["ancestor"])) {
    $jsonData["ancestor"] = $emptyObject;
}

}
if (null !== $model->item) {
    $jsonData["item"] = [];
if (null !== $model->item->externalId) {
    $jsonData["item"]["externalId"] = $model->item->externalId;
}
if (null !== $model->item->markingCodes) {
    $jsonData["item"]["markingCodes"] = [];
foreach (array_keys($model->item->markingCodes) as $index24) {
    $jsonData["item"]["markingCodes"] = $model->item->markingCodes;
}

}
if (null !== $model->item->id) {
    $jsonData["item"]["id"] = $model->item->id;
}
if (null !== $model->item->externalIds) {
    $jsonData["item"]["externalIds"] = [];
foreach (array_keys($model->item->externalIds) as $index23) {
    $jsonData["item"]["externalIds"][$index23] = [];
if (null !== $model->item->externalIds[$index23]->code) {
    $jsonData["item"]["externalIds"][$index23]["code"] = $model->item->externalIds[$index23]->code;
}
if (null !== $model->item->externalIds[$index23]->value) {
    $jsonData["item"]["externalIds"][$index23]["value"] = $model->item->externalIds[$index23]->value;
}

if (0 === \count($jsonData["item"]["externalIds"][$index23])) {
    $jsonData["item"]["externalIds"][$index23] = $emptyObject;
}

}

}
if (null !== $model->item->priceType) {
    $jsonData["item"]["priceType"] = [];
if (null !== $model->item->priceType->code) {
    $jsonData["item"]["priceType"]["code"] = $model->item->priceType->code;
}

if (0 === \count($jsonData["item"]["priceType"])) {
    $jsonData["item"]["priceType"] = $emptyObject;
}

}
if (null !== $model->item->initialPrice) {
    $jsonData["item"]["initialPrice"] = $model->item->initialPrice;
}
if (null !== $model->item->discountManualAmount) {
    $jsonData["item"]["discountManualAmount"] = $model->item->discountManualAmount;
}
if (null !== $model->item->discountManualPercent) {
    $jsonData["item"]["discountManualPercent"] = $model->item->discountManualPercent;
}
if (null !== $model->item->discountTotal) {
    $jsonData["item"]["discountTotal"] = $model->item->discountTotal;
}
if (null !== $model->item->prices) {
    $jsonData["item"]["prices"] = [];
foreach (array_keys($model->item->prices) as $index18) {
    $jsonData["item"]["prices"][$index18] = [];
if (null !== $model->item->prices[$index18]->price) {
    $jsonData["item"]["prices"][$index18]["price"] = $model->item->prices[$index18]->price;
}
if (null !== $model->item->prices[$index18]->quantity) {
    $jsonData["item"]["prices"][$index18]["quantity"] = $model->item->prices[$index18]->quantity;
}

if (0 === \count($jsonData["item"]["prices"][$index18])) {
    $jsonData["item"]["prices"][$index18] = $emptyObject;
}

}

}
if (null !== $model->item->vatRate) {
    $jsonData["item"]["vatRate"] = $model->item->vatRate;
}
if (null !== $model->item->createdAt) {
    $jsonData["item"]["createdAt"] = $model->item->createdAt->format('Y-m-d H:i:s');;
}
if (null !== $model->item->quantity) {
    $jsonData["item"]["quantity"] = $model->item->quantity;
}
if (null !== $model->item->status) {
    $jsonData["item"]["status"] = $model->item->status;
}
if (null !== $model->item->comment) {
    $jsonData["item"]["comment"] = $model->item->comment;
}
if (null !== $model->item->offer) {
    $jsonData["item"]["offer"] = [];
if (null !== $model->item->offer->displayName) {
    $jsonData["item"]["offer"]["displayName"] = $model->item->offer->displayName;
}
if (null !== $model->item->offer->id) {
    $jsonData["item"]["offer"]["id"] = $model->item->offer->id;
}
if (null !== $model->item->offer->externalId) {
    $jsonData["item"]["offer"]["externalId"] = $model->item->offer->externalId;
}
if (null !== $model->item->offer->xmlId) {
    $jsonData["item"]["offer"]["xmlId"] = $model->item->offer->xmlId;
}
if (null !== $model->item->offer->name) {
    $jsonData["item"]["offer"]["name"] = $model->item->offer->name;
}
if (null !== $model->item->offer->article) {
    $jsonData["item"]["offer"]["article"] = $model->item->offer->article;
}
if (null !== $model->item->offer->vatRate) {
    $jsonData["item"]["offer"]["vatRate"] = $model->item->offer->vatRate;
}
if (null !== $model->item->offer->unit) {
    $jsonData["item"]["offer"]["unit"] = [];
if (null !== $model->item->offer->unit->code) {
    $jsonData["item"]["offer"]["unit"]["code"] = $model->item->offer->unit->code;
}
if (null !== $model->item->offer->unit->name) {
    $jsonData["item"]["offer"]["unit"]["name"] = $model->item->offer->unit->name;
}
if (null !== $model->item->offer->unit->sym) {
    $jsonData["item"]["offer"]["unit"]["sym"] = $model->item->offer->unit->sym;
}

if (0 === \count($jsonData["item"]["offer"]["unit"])) {
    $jsonData["item"]["offer"]["unit"] = $emptyObject;
}

}
if (null !== $model->item->offer->barcode) {
    $jsonData["item"]["offer"]["barcode"] = $model->item->offer->barcode;
}
if (null !== $model->item->offer->properties) {
    $jsonData["item"]["offer"]["properties"] = [];
foreach (array_keys($model->item->offer->properties) as $index31) {
    $jsonData["item"]["offer"]["properties"] = $model->item->offer->properties;
}

}

if (0 === \count($jsonData["item"]["offer"])) {
    $jsonData["item"]["offer"] = $emptyObject;
}

}
if (null !== $model->item->productName) {
    $jsonData["item"]["productName"] = $model->item->productName;
}
if (null !== $model->item->isCanceled) {
    $jsonData["item"]["isCanceled"] = $model->item->isCanceled;
}
if (null !== $model->item->properties) {
    if (0 === \count($model->item->properties)) {
    $jsonData["item"]["properties"] = $emptyHashmap;
} else {
    foreach (array_keys($model->item->properties) as $index22) {
        $jsonData["item"]["properties"][$index22] = [];
if (null !== $model->item->properties[$index22]->code) {
    $jsonData["item"]["properties"][$index22]["code"] = $model->item->properties[$index22]->code;
}
if (null !== $model->item->properties[$index22]->name) {
    $jsonData["item"]["properties"][$index22]["name"] = $model->item->properties[$index22]->name;
}
if (null !== $model->item->properties[$index22]->value) {
    $jsonData["item"]["properties"][$index22]["value"] = $model->item->properties[$index22]->value;
}

if (0 === \count($jsonData["item"]["properties"][$index22])) {
    $jsonData["item"]["properties"][$index22] = $emptyObject;
}

    }
}

}
if (null !== $model->item->purchasePrice) {
    $jsonData["item"]["purchasePrice"] = $model->item->purchasePrice;
}

if (0 === \count($jsonData["item"])) {
    $jsonData["item"] = $emptyObject;
}

}
if (null !== $model->payment) {
    $jsonData["payment"] = [];
if (null !== $model->payment->id) {
    $jsonData["payment"]["id"] = $model->payment->id;
}
if (null !== $model->payment->status) {
    $jsonData["payment"]["status"] = $model->payment->status;
}
if (null !== $model->payment->type) {
    $jsonData["payment"]["type"] = $model->payment->type;
}
if (null !== $model->payment->externalId) {
    $jsonData["payment"]["externalId"] = $model->payment->externalId;
}
if (null !== $model->payment->amount) {
    $jsonData["payment"]["amount"] = $model->payment->amount;
}
if (null !== $model->payment->paidAt) {
    $jsonData["payment"]["paidAt"] = $model->payment->paidAt->format('Y-m-d H:i:s');;
}
if (null !== $model->payment->comment) {
    $jsonData["payment"]["comment"] = $model->payment->comment;
}

if (0 === \count($jsonData["payment"])) {
    $jsonData["payment"] = $emptyObject;
}

}
if (null !== $model->combinedTo) {
    $jsonData["combinedTo"] = [];
if (null !== $model->combinedTo->bonusesCreditTotal) {
    $jsonData["combinedTo"]["bonusesCreditTotal"] = $model->combinedTo->bonusesCreditTotal;
}
if (null !== $model->combinedTo->bonusesChargeTotal) {
    $jsonData["combinedTo"]["bonusesChargeTotal"] = $model->combinedTo->bonusesChargeTotal;
}
if (null !== $model->combinedTo->summ) {
    $jsonData["combinedTo"]["summ"] = $model->combinedTo->summ;
}
if (null !== $model->combinedTo->id) {
    $jsonData["combinedTo"]["id"] = $model->combinedTo->id;
}
if (null !== $model->combinedTo->slug) {
    $jsonData["combinedTo"]["slug"] = $model->combinedTo->slug;
}
if (null !== $model->combinedTo->number) {
    $jsonData["combinedTo"]["number"] = $model->combinedTo->number;
}
if (null !== $model->combinedTo->externalId) {
    $jsonData["combinedTo"]["externalId"] = $model->combinedTo->externalId;
}
if (null !== $model->combinedTo->orderType) {
    $jsonData["combinedTo"]["orderType"] = $model->combinedTo->orderType;
}
if (null !== $model->combinedTo->orderMethod) {
    $jsonData["combinedTo"]["orderMethod"] = $model->combinedTo->orderMethod;
}
if (null !== $model->combinedTo->privilegeType) {
    $jsonData["combinedTo"]["privilegeType"] = $model->combinedTo->privilegeType;
}
if (null !== $model->combinedTo->countryIso) {
    $jsonData["combinedTo"]["countryIso"] = $model->combinedTo->countryIso;
}
if (null !== $model->combinedTo->createdAt) {
    $jsonData["combinedTo"]["createdAt"] = $model->combinedTo->createdAt->format('Y-m-d H:i:s');;
}
if (null !== $model->combinedTo->statusUpdatedAt) {
    $jsonData["combinedTo"]["statusUpdatedAt"] = $model->combinedTo->statusUpdatedAt->format('Y-m-d H:i:s');;
}
if (null !== $model->combinedTo->discountManualAmount) {
    $jsonData["combinedTo"]["discountManualAmount"] = $model->combinedTo->discountManualAmount;
}
if (null !== $model->combinedTo->discountManualPercent) {
    $jsonData["combinedTo"]["discountManualPercent"] = $model->combinedTo->discountManualPercent;
}
if (null !== $model->combinedTo->totalSumm) {
    $jsonData["combinedTo"]["totalSumm"] = $model->combinedTo->totalSumm;
}
if (null !== $model->combinedTo->prepaySum) {
    $jsonData["combinedTo"]["prepaySum"] = $model->combinedTo->prepaySum;
}
if (null !== $model->combinedTo->purchaseSumm) {
    $jsonData["combinedTo"]["purchaseSumm"] = $model->combinedTo->purchaseSumm;
}
if (null !== $model->combinedTo->personalDiscountPercent) {
    $jsonData["combinedTo"]["personalDiscountPercent"] = $model->combinedTo->personalDiscountPercent;
}
if (null !== $model->combinedTo->loyaltyLevel) {
    $jsonData["combinedTo"]["loyaltyLevel"] = [];
if (null !== $model->combinedTo->loyaltyLevel->id) {
    $jsonData["combinedTo"]["loyaltyLevel"]["id"] = $model->combinedTo->loyaltyLevel->id;
}
if (null !== $model->combinedTo->loyaltyLevel->name) {
    $jsonData["combinedTo"]["loyaltyLevel"]["name"] = $model->combinedTo->loyaltyLevel->name;
}

if (0 === \count($jsonData["combinedTo"]["loyaltyLevel"])) {
    $jsonData["combinedTo"]["loyaltyLevel"] = $emptyObject;
}

}
if (null !== $model->combinedTo->loyaltyEvent) {
    $jsonData["combinedTo"]["loyaltyEvent"] = [];
if (null !== $model->combinedTo->loyaltyEvent->id) {
    $jsonData["combinedTo"]["loyaltyEvent"]["id"] = $model->combinedTo->loyaltyEvent->id;
}

if (0 === \count($jsonData["combinedTo"]["loyaltyEvent"])) {
    $jsonData["combinedTo"]["loyaltyEvent"] = $emptyObject;
}

}
if (null !== $model->combinedTo->mark) {
    $jsonData["combinedTo"]["mark"] = $model->combinedTo->mark;
}
if (null !== $model->combinedTo->markDatetime) {
    $jsonData["combinedTo"]["markDatetime"] = $model->combinedTo->markDatetime->format('Y-m-d H:i:s');;
}
if (null !== $model->combinedTo->lastName) {
    $jsonData["combinedTo"]["lastName"] = $model->combinedTo->lastName;
}
if (null !== $model->combinedTo->firstName) {
    $jsonData["combinedTo"]["firstName"] = $model->combinedTo->firstName;
}
if (null !== $model->combinedTo->patronymic) {
    $jsonData["combinedTo"]["patronymic"] = $model->combinedTo->patronymic;
}
if (null !== $model->combinedTo->phone) {
    $jsonData["combinedTo"]["phone"] = $model->combinedTo->phone;
}
if (null !== $model->combinedTo->additionalPhone) {
    $jsonData["combinedTo"]["additionalPhone"] = $model->combinedTo->additionalPhone;
}
if (null !== $model->combinedTo->email) {
    $jsonData["combinedTo"]["email"] = $model->combinedTo->email;
}
if (null !== $model->combinedTo->call) {
    $jsonData["combinedTo"]["call"] = $model->combinedTo->call;
}
if (null !== $model->combinedTo->expired) {
    $jsonData["combinedTo"]["expired"] = $model->combinedTo->expired;
}
if (null !== $model->combinedTo->customerComment) {
    $jsonData["combinedTo"]["customerComment"] = $model->combinedTo->customerComment;
}
if (null !== $model->combinedTo->managerComment) {
    $jsonData["combinedTo"]["managerComment"] = $model->combinedTo->managerComment;
}
if (null !== $model->combinedTo->managerId) {
    $jsonData["combinedTo"]["managerId"] = $model->combinedTo->managerId;
}
if (null !== $model->combinedTo->customer) {
    $jsonData["combinedTo"]["customer"] = [];

if ($model->combinedTo->customer instanceof \RetailCrm\Api\Model\Entity\Customers\Customer) {
    $jsonData["combinedTo"]["customer"] = [];
if (null !== $model->combinedTo->customer->type) {
    $jsonData["combinedTo"]["customer"]["type"] = $model->combinedTo->customer->type;
}
if (null !== $model->combinedTo->customer->id) {
    $jsonData["combinedTo"]["customer"]["id"] = $model->combinedTo->customer->id;
}
if (null !== $model->combinedTo->customer->externalId) {
    $jsonData["combinedTo"]["customer"]["externalId"] = $model->combinedTo->customer->externalId;
}
if (null !== $model->combinedTo->customer->isContact) {
    $jsonData["combinedTo"]["customer"]["isContact"] = $model->combinedTo->customer->isContact;
}
if (null !== $model->combinedTo->customer->createdAt) {
    $jsonData["combinedTo"]["customer"]["createdAt"] = $model->combinedTo->customer->createdAt->format('Y-m-d H:i:s');;
}
if (null !== $model->combinedTo->customer->managerId) {
    $jsonData["combinedTo"]["customer"]["managerId"] = $model->combinedTo->customer->managerId;
}
if (null !== $model->combinedTo->customer->vip) {
    $jsonData["combinedTo"]["customer"]["vip"] = $model->combinedTo->customer->vip;
}
if (null !== $model->combinedTo->customer->bad) {
    $jsonData["combinedTo"]["customer"]["bad"] = $model->combinedTo->customer->bad;
}
if (null !== $model->combinedTo->customer->browserId) {
    $jsonData["combinedTo"]["customer"]["browserId"] = $model->combinedTo->customer->browserId;
}
if (null !== $model->combinedTo->customer->site) {
    $jsonData["combinedTo"]["customer"]["site"] = $model->combinedTo->customer->site;
}
if (null !== $model->combinedTo->customer->contragent) {
    $jsonData["combinedTo"]["customer"]["contragent"] = [];
if (null !== $model->combinedTo->customer->contragent->contragentType) {
    $jsonData["combinedTo"]["customer"]["contragent"]["contragentType"] = $model->combinedTo->customer->contragent->contragentType;
}
if (null !== $model->combinedTo->customer->contragent->legalName) {
    $jsonData["combinedTo"]["customer"]["contragent"]["legalName"] = $model->combinedTo->customer->contragent->legalName;
}
if (null !== $model->combinedTo->customer->contragent->legalAddress) {
    $jsonData["combinedTo"]["customer"]["contragent"]["legalAddress"] = $model->combinedTo->customer->contragent->legalAddress;
}
if (null !== $model->combinedTo->customer->contragent->INN) {
    $jsonData["combinedTo"]["customer"]["contragent"]["INN"] = $model->combinedTo->customer->contragent->INN;
}
if (null !== $model->combinedTo->customer->contragent->OKPO) {
    $jsonData["combinedTo"]["customer"]["contragent"]["OKPO"] = $model->combinedTo->customer->contragent->OKPO;
}
if (null !== $model->combinedTo->customer->contragent->KPP) {
    $jsonData["combinedTo"]["customer"]["contragent"]["KPP"] = $model->combinedTo->customer->contragent->KPP;
}
if (null !== $model->combinedTo->customer->contragent->OGRN) {
    $jsonData["combinedTo"]["customer"]["contragent"]["OGRN"] = $model->combinedTo->customer->contragent->OGRN;
}
if (null !== $model->combinedTo->customer->contragent->OGRNIP) {
    $jsonData["combinedTo"]["customer"]["contragent"]["OGRNIP"] = $model->combinedTo->customer->contragent->OGRNIP;
}
if (null !== $model->combinedTo->customer->contragent->certificateNumber) {
    $jsonData["combinedTo"]["customer"]["contragent"]["certificateNumber"] = $model->combinedTo->customer->contragent->certificateNumber;
}
if (null !== $model->combinedTo->customer->contragent->certificateDate) {
    $jsonData["combinedTo"]["customer"]["contragent"]["certificateDate"] = $model->combinedTo->customer->contragent->certificateDate->format('Y-m-d H:i:s');;
}
if (null !== $model->combinedTo->customer->contragent->BIK) {
    $jsonData["combinedTo"]["customer"]["contragent"]["BIK"] = $model->combinedTo->customer->contragent->BIK;
}
if (null !== $model->combinedTo->customer->contragent->bank) {
    $jsonData["combinedTo"]["customer"]["contragent"]["bank"] = $model->combinedTo->customer->contragent->bank;
}
if (null !== $model->combinedTo->customer->contragent->bankAddress) {
    $jsonData["combinedTo"]["customer"]["contragent"]["bankAddress"] = $model->combinedTo->customer->contragent->bankAddress;
}
if (null !== $model->combinedTo->customer->contragent->corrAccount) {
    $jsonData["combinedTo"]["customer"]["contragent"]["corrAccount"] = $model->combinedTo->customer->contragent->corrAccount;
}
if (null !== $model->combinedTo->customer->contragent->bankAccount) {
    $jsonData["combinedTo"]["customer"]["contragent"]["bankAccount"] = $model->combinedTo->customer->contragent->bankAccount;
}

if (0 === \count($jsonData["combinedTo"]["customer"]["contragent"])) {
    $jsonData["combinedTo"]["customer"]["contragent"] = $emptyObject;
}

}
if (null !== $model->combinedTo->customer->tags) {
    $jsonData["combinedTo"]["customer"]["tags"] = [];
foreach (array_keys($model->combinedTo->customer->tags) as $index34) {
    $jsonData["combinedTo"]["customer"]["tags"][$index34] = $model->combinedTo->customer->tags[$index34]->name;
}

}
if (null !== $model->combinedTo->customer->avgMarginSumm) {
    $jsonData["combinedTo"]["customer"]["avgMarginSumm"] = $model->combinedTo->customer->avgMarginSumm;
}
if (null !== $model->combinedTo->customer->marginSumm) {
    $jsonData["combinedTo"]["customer"]["marginSumm"] = $model->combinedTo->customer->marginSumm;
}
if (null !== $model->combinedTo->customer->totalSumm) {
    $jsonData["combinedTo"]["customer"]["totalSumm"] = $model->combinedTo->customer->totalSumm;
}
if (null !== $model->combinedTo->customer->averageSumm) {
    $jsonData["combinedTo"]["customer"]["averageSumm"] = $model->combinedTo->customer->averageSumm;
}
if (null !== $model->combinedTo->customer->ordersCount) {
    $jsonData["combinedTo"]["customer"]["ordersCount"] = $model->combinedTo->customer->ordersCount;
}
if (null !== $model->combinedTo->customer->costSumm) {
    $jsonData["combinedTo"]["customer"]["costSumm"] = $model->combinedTo->customer->costSumm;
}
if (null !== $model->combinedTo->customer->customFields) {
    $jsonData["combinedTo"]["customer"]["customFields"] = [];
foreach (array_keys($model->combinedTo->customer->customFields) as $index42) {
    $jsonData["combinedTo"]["customer"]["customFields"] = $model->combinedTo->customer->customFields;
}

}
if (null !== $model->combinedTo->customer->personalDiscount) {
    $jsonData["combinedTo"]["customer"]["personalDiscount"] = $model->combinedTo->customer->personalDiscount;
}
if (null !== $model->combinedTo->customer->cumulativeDiscount) {
    $jsonData["combinedTo"]["customer"]["cumulativeDiscount"] = $model->combinedTo->customer->cumulativeDiscount;
}
if (null !== $model->combinedTo->customer->discountCardNumber) {
    $jsonData["combinedTo"]["customer"]["discountCardNumber"] = $model->combinedTo->customer->discountCardNumber;
}
if (null !== $model->combinedTo->customer->firstClientId) {
    $jsonData["combinedTo"]["customer"]["firstClientId"] = $model->combinedTo->customer->firstClientId;
}
if (null !== $model->combinedTo->customer->lastClientId) {
    $jsonData["combinedTo"]["customer"]["lastClientId"] = $model->combinedTo->customer->lastClientId;
}
if (null !== $model->combinedTo->customer->address) {
    $jsonData["combinedTo"]["customer"]["address"] = [];
if (null !== $model->combinedTo->customer->address->id) {
    $jsonData["combinedTo"]["customer"]["address"]["id"] = $model->combinedTo->customer->address->id;
}
if (null !== $model->combinedTo->customer->address->name) {
    $jsonData["combinedTo"]["customer"]["address"]["name"] = $model->combinedTo->customer->address->name;
}
if (null !== $model->combinedTo->customer->address->isMain) {
    $jsonData["combinedTo"]["customer"]["address"]["isMain"] = $model->combinedTo->customer->address->isMain;
}
if (null !== $model->combinedTo->customer->address->index) {
    $jsonData["combinedTo"]["customer"]["address"]["index"] = $model->combinedTo->customer->address->index;
}
if (null !== $model->combinedTo->customer->address->countryIso) {
    $jsonData["combinedTo"]["customer"]["address"]["countryIso"] = $model->combinedTo->customer->address->countryIso;
}
if (null !== $model->combinedTo->customer->address->region) {
    $jsonData["combinedTo"]["customer"]["address"]["region"] = $model->combinedTo->customer->address->region;
}
if (null !== $model->combinedTo->customer->address->regionId) {
    $jsonData["combinedTo"]["customer"]["address"]["regionId"] = $model->combinedTo->customer->address->regionId;
}
if (null !== $model->combinedTo->customer->address->city) {
    $jsonData["combinedTo"]["customer"]["address"]["city"] = $model->combinedTo->customer->address->city;
}
if (null !== $model->combinedTo->customer->address->cityId) {
    $jsonData["combinedTo"]["customer"]["address"]["cityId"] = $model->combinedTo->customer->address->cityId;
}
if (null !== $model->combinedTo->customer->address->cityType) {
    $jsonData["combinedTo"]["customer"]["address"]["cityType"] = $model->combinedTo->customer->address->cityType;
}
if (null !== $model->combinedTo->customer->address->street) {
    $jsonData["combinedTo"]["customer"]["address"]["street"] = $model->combinedTo->customer->address->street;
}
if (null !== $model->combinedTo->customer->address->streetId) {
    $jsonData["combinedTo"]["customer"]["address"]["streetId"] = $model->combinedTo->customer->address->streetId;
}
if (null !== $model->combinedTo->customer->address->streetType) {
    $jsonData["combinedTo"]["customer"]["address"]["streetType"] = $model->combinedTo->customer->address->streetType;
}
if (null !== $model->combinedTo->customer->address->building) {
    $jsonData["combinedTo"]["customer"]["address"]["building"] = $model->combinedTo->customer->address->building;
}
if (null !== $model->combinedTo->customer->address->flat) {
    $jsonData["combinedTo"]["customer"]["address"]["flat"] = $model->combinedTo->customer->address->flat;
}
if (null !== $model->combinedTo->customer->address->floor) {
    $jsonData["combinedTo"]["customer"]["address"]["floor"] = $model->combinedTo->customer->address->floor;
}
if (null !== $model->combinedTo->customer->address->block) {
    $jsonData["combinedTo"]["customer"]["address"]["block"] = $model->combinedTo->customer->address->block;
}
if (null !== $model->combinedTo->customer->address->house) {
    $jsonData["combinedTo"]["customer"]["address"]["house"] = $model->combinedTo->customer->address->house;
}
if (null !== $model->combinedTo->customer->address->housing) {
    $jsonData["combinedTo"]["customer"]["address"]["housing"] = $model->combinedTo->customer->address->housing;
}
if (null !== $model->combinedTo->customer->address->metro) {
    $jsonData["combinedTo"]["customer"]["address"]["metro"] = $model->combinedTo->customer->address->metro;
}
if (null !== $model->combinedTo->customer->address->notes) {
    $jsonData["combinedTo"]["customer"]["address"]["notes"] = $model->combinedTo->customer->address->notes;
}
if (null !== $model->combinedTo->customer->address->text) {
    $jsonData["combinedTo"]["customer"]["address"]["text"] = $model->combinedTo->customer->address->text;
}
if (null !== $model->combinedTo->customer->address->externalId) {
    $jsonData["combinedTo"]["customer"]["address"]["externalId"] = $model->combinedTo->customer->address->externalId;
}

if (0 === \count($jsonData["combinedTo"]["customer"]["address"])) {
    $jsonData["combinedTo"]["customer"]["address"] = $emptyObject;
}

}
if (null !== $model->combinedTo->customer->segments) {
    $jsonData["combinedTo"]["customer"]["segments"] = [];
foreach (array_keys($model->combinedTo->customer->segments) as $index38) {
    $jsonData["combinedTo"]["customer"]["segments"][$index38] = [];
if (null !== $model->combinedTo->customer->segments[$index38]->id) {
    $jsonData["combinedTo"]["customer"]["segments"][$index38]["id"] = $model->combinedTo->customer->segments[$index38]->id;
}
if (null !== $model->combinedTo->customer->segments[$index38]->code) {
    $jsonData["combinedTo"]["customer"]["segments"][$index38]["code"] = $model->combinedTo->customer->segments[$index38]->code;
}
if (null !== $model->combinedTo->customer->segments[$index38]->name) {
    $jsonData["combinedTo"]["customer"]["segments"][$index38]["name"] = $model->combinedTo->customer->segments[$index38]->name;
}
if (null !== $model->combinedTo->customer->segments[$index38]->createdAt) {
    $jsonData["combinedTo"]["customer"]["segments"][$index38]["createdAt"] = $model->combinedTo->customer->segments[$index38]->createdAt->format('Y-m-d H:i:s');;
}
if (null !== $model->combinedTo->customer->segments[$index38]->isDynamic) {
    $jsonData["combinedTo"]["customer"]["segments"][$index38]["isDynamic"] = $model->combinedTo->customer->segments[$index38]->isDynamic;
}
if (null !== $model->combinedTo->customer->segments[$index38]->customersCount) {
    $jsonData["combinedTo"]["customer"]["segments"][$index38]["customersCount"] = $model->combinedTo->customer->segments[$index38]->customersCount;
}
if (null !== $model->combinedTo->customer->segments[$index38]->active) {
    $jsonData["combinedTo"]["customer"]["segments"][$index38]["active"] = $model->combinedTo->customer->segments[$index38]->active;
}

if (0 === \count($jsonData["combinedTo"]["customer"]["segments"][$index38])) {
    $jsonData["combinedTo"]["customer"]["segments"][$index38] = $emptyObject;
}

}

}
if (null !== $model->combinedTo->customer->maturationTime) {
    $jsonData["combinedTo"]["customer"]["maturationTime"] = $model->combinedTo->customer->maturationTime;
}
if (null !== $model->combinedTo->customer->firstName) {
    $jsonData["combinedTo"]["customer"]["firstName"] = $model->combinedTo->customer->firstName;
}
if (null !== $model->combinedTo->customer->lastName) {
    $jsonData["combinedTo"]["customer"]["lastName"] = $model->combinedTo->customer->lastName;
}
if (null !== $model->combinedTo->customer->patronymic) {
    $jsonData["combinedTo"]["customer"]["patronymic"] = $model->combinedTo->customer->patronymic;
}
if (null !== $model->combinedTo->customer->sex) {
    $jsonData["combinedTo"]["customer"]["sex"] = $model->combinedTo->customer->sex;
}
if (null !== $model->combinedTo->customer->presumableSex) {
    $jsonData["combinedTo"]["customer"]["presumableSex"] = $model->combinedTo->customer->presumableSex;
}
if (null !== $model->combinedTo->customer->email) {
    $jsonData["combinedTo"]["customer"]["email"] = $model->combinedTo->customer->email;
}
if (null !== $model->combinedTo->customer->emailMarketingUnsubscribedAt) {
    $jsonData["combinedTo"]["customer"]["emailMarketingUnsubscribedAt"] = $model->combinedTo->customer->emailMarketingUnsubscribedAt->format('Y-m-d H:i:s');;
}
if (null !== $model->combinedTo->customer->phones) {
    $jsonData["combinedTo"]["customer"]["phones"] = [];
foreach (array_keys($model->combinedTo->customer->phones) as $index36) {
    $jsonData["combinedTo"]["customer"]["phones"][$index36] = [];
if (null !== $model->combinedTo->customer->phones[$index36]->number) {
    $jsonData["combinedTo"]["customer"]["phones"][$index36]["number"] = $model->combinedTo->customer->phones[$index36]->number;
}

if (0 === \count($jsonData["combinedTo"]["customer"]["phones"][$index36])) {
    $jsonData["combinedTo"]["customer"]["phones"][$index36] = $emptyObject;
}

}

}
if (null !== $model->combinedTo->customer->birthday) {
    $jsonData["combinedTo"]["customer"]["birthday"] = $model->combinedTo->customer->birthday->format('Y-m-d H:i:s');;
}
if (null !== $model->combinedTo->customer->source) {
    $jsonData["combinedTo"]["customer"]["source"] = [];
if (null !== $model->combinedTo->customer->source->source) {
    $jsonData["combinedTo"]["customer"]["source"]["source"] = $model->combinedTo->customer->source->source;
}
if (null !== $model->combinedTo->customer->source->medium) {
    $jsonData["combinedTo"]["customer"]["source"]["medium"] = $model->combinedTo->customer->source->medium;
}
if (null !== $model->combinedTo->customer->source->campaign) {
    $jsonData["combinedTo"]["customer"]["source"]["campaign"] = $model->combinedTo->customer->source->campaign;
}
if (null !== $model->combinedTo->customer->source->keyword) {
    $jsonData["combinedTo"]["customer"]["source"]["keyword"] = $model->combinedTo->customer->source->keyword;
}
if (null !== $model->combinedTo->customer->source->content) {
    $jsonData["combinedTo"]["customer"]["source"]["content"] = $model->combinedTo->customer->source->content;
}

if (0 === \count($jsonData["combinedTo"]["customer"]["source"])) {
    $jsonData["combinedTo"]["customer"]["source"] = $emptyObject;
}

}
if (null !== $model->combinedTo->customer->photoUrl) {
    $jsonData["combinedTo"]["customer"]["photoUrl"] = $model->combinedTo->customer->photoUrl;
}
if (null !== $model->combinedTo->customer->mgCustomerId) {
    $jsonData["combinedTo"]["customer"]["mgCustomerId"] = $model->combinedTo->customer->mgCustomerId;
}
if (null !== $model->combinedTo->customer->subscribed) {
    $jsonData["combinedTo"]["customer"]["subscribed"] = $model->combinedTo->customer->subscribed;
}

if (0 === \count($jsonData["combinedTo"]["customer"])) {
    $jsonData["combinedTo"]["customer"] = $emptyObject;
}

} elseif ($model->combinedTo->customer instanceof \RetailCrm\Api\Model\Entity\CustomersCorporate\CustomerCorporate) {
    $jsonData["combinedTo"]["customer"] = [];
if (null !== $model->combinedTo->customer->type) {
    $jsonData["combinedTo"]["customer"]["type"] = $model->combinedTo->customer->type;
}
if (null !== $model->combinedTo->customer->id) {
    $jsonData["combinedTo"]["customer"]["id"] = $model->combinedTo->customer->id;
}
if (null !== $model->combinedTo->customer->externalId) {
    $jsonData["combinedTo"]["customer"]["externalId"] = $model->combinedTo->customer->externalId;
}
if (null !== $model->combinedTo->customer->nickName) {
    $jsonData["combinedTo"]["customer"]["nickName"] = $model->combinedTo->customer->nickName;
}
if (null !== $model->combinedTo->customer->mainAddress) {
    $jsonData["combinedTo"]["customer"]["mainAddress"] = [];
if (null !== $model->combinedTo->customer->mainAddress->id) {
    $jsonData["combinedTo"]["customer"]["mainAddress"]["id"] = $model->combinedTo->customer->mainAddress->id;
}
if (null !== $model->combinedTo->customer->mainAddress->externalId) {
    $jsonData["combinedTo"]["customer"]["mainAddress"]["externalId"] = $model->combinedTo->customer->mainAddress->externalId;
}
if (null !== $model->combinedTo->customer->mainAddress->name) {
    $jsonData["combinedTo"]["customer"]["mainAddress"]["name"] = $model->combinedTo->customer->mainAddress->name;
}

if (0 === \count($jsonData["combinedTo"]["customer"]["mainAddress"])) {
    $jsonData["combinedTo"]["customer"]["mainAddress"] = $emptyObject;
}

}
if (null !== $model->combinedTo->customer->createdAt) {
    $jsonData["combinedTo"]["customer"]["createdAt"] = $model->combinedTo->customer->createdAt->format('Y-m-d H:i:s');;
}
if (null !== $model->combinedTo->customer->managerId) {
    $jsonData["combinedTo"]["customer"]["managerId"] = $model->combinedTo->customer->managerId;
}
if (null !== $model->combinedTo->customer->source) {
    $jsonData["combinedTo"]["customer"]["source"] = [];
if (null !== $model->combinedTo->customer->source->source) {
    $jsonData["combinedTo"]["customer"]["source"]["source"] = $model->combinedTo->customer->source->source;
}
if (null !== $model->combinedTo->customer->source->medium) {
    $jsonData["combinedTo"]["customer"]["source"]["medium"] = $model->combinedTo->customer->source->medium;
}
if (null !== $model->combinedTo->customer->source->campaign) {
    $jsonData["combinedTo"]["customer"]["source"]["campaign"] = $model->combinedTo->customer->source->campaign;
}
if (null !== $model->combinedTo->customer->source->keyword) {
    $jsonData["combinedTo"]["customer"]["source"]["keyword"] = $model->combinedTo->customer->source->keyword;
}
if (null !== $model->combinedTo->customer->source->content) {
    $jsonData["combinedTo"]["customer"]["source"]["content"] = $model->combinedTo->customer->source->content;
}

if (0 === \count($jsonData["combinedTo"]["customer"]["source"])) {
    $jsonData["combinedTo"]["customer"]["source"] = $emptyObject;
}

}
if (null !== $model->combinedTo->customer->customerContacts) {
    $jsonData["combinedTo"]["customer"]["customerContacts"] = [];
foreach (array_keys($model->combinedTo->customer->customerContacts) as $index46) {
    $jsonData["combinedTo"]["customer"]["customerContacts"][$index46] = [];
if (null !== $model->combinedTo->customer->customerContacts[$index46]->id) {
    $jsonData["combinedTo"]["customer"]["customerContacts"][$index46]["id"] = $model->combinedTo->customer->customerContacts[$index46]->id;
}
if (null !== $model->combinedTo->customer->customerContacts[$index46]->isMain) {
    $jsonData["combinedTo"]["customer"]["customerContacts"][$index46]["isMain"] = $model->combinedTo->customer->customerContacts[$index46]->isMain;
}
if (null !== $model->combinedTo->customer->customerContacts[$index46]->customer) {
    $jsonData["combinedTo"]["customer"]["customerContacts"][$index46]["customer"] = [];
if (null !== $model->combinedTo->customer->customerContacts[$index46]->customer->id) {
    $jsonData["combinedTo"]["customer"]["customerContacts"][$index46]["customer"]["id"] = $model->combinedTo->customer->customerContacts[$index46]->customer->id;
}
if (null !== $model->combinedTo->customer->customerContacts[$index46]->customer->externalId) {
    $jsonData["combinedTo"]["customer"]["customerContacts"][$index46]["customer"]["externalId"] = $model->combinedTo->customer->customerContacts[$index46]->customer->externalId;
}
if (null !== $model->combinedTo->customer->customerContacts[$index46]->customer->browserId) {
    $jsonData["combinedTo"]["customer"]["customerContacts"][$index46]["customer"]["browserId"] = $model->combinedTo->customer->customerContacts[$index46]->customer->browserId;
}
if (null !== $model->combinedTo->customer->customerContacts[$index46]->customer->site) {
    $jsonData["combinedTo"]["customer"]["customerContacts"][$index46]["customer"]["site"] = $model->combinedTo->customer->customerContacts[$index46]->customer->site;
}
if (null !== $model->combinedTo->customer->customerContacts[$index46]->customer->companies) {
    $jsonData["combinedTo"]["customer"]["customerContacts"][$index46]["customer"]["companies"] = [];
foreach (array_keys($model->combinedTo->customer->customerContacts[$index46]->customer->companies) as $index81) {
    $jsonData["combinedTo"]["customer"]["customerContacts"][$index46]["customer"]["companies"][$index81] = [];
if (null !== $model->combinedTo->customer->customerContacts[$index46]->customer->companies[$index81]->id) {
    $jsonData["combinedTo"]["customer"]["customerContacts"][$index46]["customer"]["companies"][$index81]["id"] = $model->combinedTo->customer->customerContacts[$index46]->customer->companies[$index81]->id;
}
if (null !== $model->combinedTo->customer->customerContacts[$index46]->customer->companies[$index81]->externalId) {
    $jsonData["combinedTo"]["customer"]["customerContacts"][$index46]["customer"]["companies"][$index81]["externalId"] = $model->combinedTo->customer->customerContacts[$index46]->customer->companies[$index81]->externalId;
}
if (null !== $model->combinedTo->customer->customerContacts[$index46]->customer->companies[$index81]->company) {
    $jsonData["combinedTo"]["customer"]["customerContacts"][$index46]["customer"]["companies"][$index81]["company"] = [];
if (null !== $model->combinedTo->customer->customerContacts[$index46]->customer->companies[$index81]->company->id) {
    $jsonData["combinedTo"]["customer"]["customerContacts"][$index46]["customer"]["companies"][$index81]["company"]["id"] = $model->combinedTo->customer->customerContacts[$index46]->customer->companies[$index81]->company->id;
}
if (null !== $model->combinedTo->customer->customerContacts[$index46]->customer->companies[$index81]->company->externalId) {
    $jsonData["combinedTo"]["customer"]["customerContacts"][$index46]["customer"]["companies"][$index81]["company"]["externalId"] = $model->combinedTo->customer->customerContacts[$index46]->customer->companies[$index81]->company->externalId;
}
if (null !== $model->combinedTo->customer->customerContacts[$index46]->customer->companies[$index81]->company->name) {
    $jsonData["combinedTo"]["customer"]["customerContacts"][$index46]["customer"]["companies"][$index81]["company"]["name"] = $model->combinedTo->customer->customerContacts[$index46]->customer->companies[$index81]->company->name;
}

if (0 === \count($jsonData["combinedTo"]["customer"]["customerContacts"][$index46]["customer"]["companies"][$index81]["company"])) {
    $jsonData["combinedTo"]["customer"]["customerContacts"][$index46]["customer"]["companies"][$index81]["company"] = $emptyObject;
}

}

if (0 === \count($jsonData["combinedTo"]["customer"]["customerContacts"][$index46]["customer"]["companies"][$index81])) {
    $jsonData["combinedTo"]["customer"]["customerContacts"][$index46]["customer"]["companies"][$index81] = $emptyObject;
}

}

}

if (0 === \count($jsonData["combinedTo"]["customer"]["customerContacts"][$index46]["customer"])) {
    $jsonData["combinedTo"]["customer"]["customerContacts"][$index46]["customer"] = $emptyObject;
}

}
if (null !== $model->combinedTo->customer->customerContacts[$index46]->companies) {
    $jsonData["combinedTo"]["customer"]["customerContacts"][$index46]["companies"] = [];
foreach (array_keys($model->combinedTo->customer->customerContacts[$index46]->companies) as $index69) {
    $jsonData["combinedTo"]["customer"]["customerContacts"][$index46]["companies"][$index69] = [];
if (null !== $model->combinedTo->customer->customerContacts[$index46]->companies[$index69]->id) {
    $jsonData["combinedTo"]["customer"]["customerContacts"][$index46]["companies"][$index69]["id"] = $model->combinedTo->customer->customerContacts[$index46]->companies[$index69]->id;
}
if (null !== $model->combinedTo->customer->customerContacts[$index46]->companies[$index69]->externalId) {
    $jsonData["combinedTo"]["customer"]["customerContacts"][$index46]["companies"][$index69]["externalId"] = $model->combinedTo->customer->customerContacts[$index46]->companies[$index69]->externalId;
}
if (null !== $model->combinedTo->customer->customerContacts[$index46]->companies[$index69]->company) {
    $jsonData["combinedTo"]["customer"]["customerContacts"][$index46]["companies"][$index69]["company"] = [];
if (null !== $model->combinedTo->customer->customerContacts[$index46]->companies[$index69]->company->id) {
    $jsonData["combinedTo"]["customer"]["customerContacts"][$index46]["companies"][$index69]["company"]["id"] = $model->combinedTo->customer->customerContacts[$index46]->companies[$index69]->company->id;
}
if (null !== $model->combinedTo->customer->customerContacts[$index46]->companies[$index69]->company->externalId) {
    $jsonData["combinedTo"]["customer"]["customerContacts"][$index46]["companies"][$index69]["company"]["externalId"] = $model->combinedTo->customer->customerContacts[$index46]->companies[$index69]->company->externalId;
}
if (null !== $model->combinedTo->customer->customerContacts[$index46]->companies[$index69]->company->name) {
    $jsonData["combinedTo"]["customer"]["customerContacts"][$index46]["companies"][$index69]["company"]["name"] = $model->combinedTo->customer->customerContacts[$index46]->companies[$index69]->company->name;
}

if (0 === \count($jsonData["combinedTo"]["customer"]["customerContacts"][$index46]["companies"][$index69]["company"])) {
    $jsonData["combinedTo"]["customer"]["customerContacts"][$index46]["companies"][$index69]["company"] = $emptyObject;
}

}

if (0 === \count($jsonData["combinedTo"]["customer"]["customerContacts"][$index46]["companies"][$index69])) {
    $jsonData["combinedTo"]["customer"]["customerContacts"][$index46]["companies"][$index69] = $emptyObject;
}

}

}

if (0 === \count($jsonData["combinedTo"]["customer"]["customerContacts"][$index46])) {
    $jsonData["combinedTo"]["customer"]["customerContacts"][$index46] = $emptyObject;
}

}

}
if (null !== $model->combinedTo->customer->companies) {
    $jsonData["combinedTo"]["customer"]["companies"] = [];
foreach (array_keys($model->combinedTo->customer->companies) as $index39) {
    $jsonData["combinedTo"]["customer"]["companies"][$index39] = [];
if (null !== $model->combinedTo->customer->companies[$index39]->id) {
    $jsonData["combinedTo"]["customer"]["companies"][$index39]["id"] = $model->combinedTo->customer->companies[$index39]->id;
}
if (null !== $model->combinedTo->customer->companies[$index39]->isMain) {
    $jsonData["combinedTo"]["customer"]["companies"][$index39]["isMain"] = $model->combinedTo->customer->companies[$index39]->isMain;
}
if (null !== $model->combinedTo->customer->companies[$index39]->externalId) {
    $jsonData["combinedTo"]["customer"]["companies"][$index39]["externalId"] = $model->combinedTo->customer->companies[$index39]->externalId;
}
if (null !== $model->combinedTo->customer->companies[$index39]->active) {
    $jsonData["combinedTo"]["customer"]["companies"][$index39]["active"] = $model->combinedTo->customer->companies[$index39]->active;
}
if (null !== $model->combinedTo->customer->companies[$index39]->name) {
    $jsonData["combinedTo"]["customer"]["companies"][$index39]["name"] = $model->combinedTo->customer->companies[$index39]->name;
}
if (null !== $model->combinedTo->customer->companies[$index39]->brand) {
    $jsonData["combinedTo"]["customer"]["companies"][$index39]["brand"] = $model->combinedTo->customer->companies[$index39]->brand;
}
if (null !== $model->combinedTo->customer->companies[$index39]->site) {
    $jsonData["combinedTo"]["customer"]["companies"][$index39]["site"] = $model->combinedTo->customer->companies[$index39]->site;
}
if (null !== $model->combinedTo->customer->companies[$index39]->createdAt) {
    $jsonData["combinedTo"]["customer"]["companies"][$index39]["createdAt"] = $model->combinedTo->customer->companies[$index39]->createdAt->format('Y-m-d H:i:s');;
}
if (null !== $model->combinedTo->customer->companies[$index39]->customer) {
    $jsonData["combinedTo"]["customer"]["companies"][$index39]["customer"] = [];
if (null !== $model->combinedTo->customer->companies[$index39]->customer->site) {
    $jsonData["combinedTo"]["customer"]["companies"][$index39]["customer"]["site"] = $model->combinedTo->customer->companies[$index39]->customer->site;
}
if (null !== $model->combinedTo->customer->companies[$index39]->customer->id) {
    $jsonData["combinedTo"]["customer"]["companies"][$index39]["customer"]["id"] = $model->combinedTo->customer->companies[$index39]->customer->id;
}
if (null !== $model->combinedTo->customer->companies[$index39]->customer->externalId) {
    $jsonData["combinedTo"]["customer"]["companies"][$index39]["customer"]["externalId"] = $model->combinedTo->customer->companies[$index39]->customer->externalId;
}
if (null !== $model->combinedTo->customer->companies[$index39]->customer->type) {
    $jsonData["combinedTo"]["customer"]["companies"][$index39]["customer"]["type"] = $model->combinedTo->customer->companies[$index39]->customer->type;
}

if (0 === \count($jsonData["combinedTo"]["customer"]["companies"][$index39]["customer"])) {
    $jsonData["combinedTo"]["customer"]["companies"][$index39]["customer"] = $emptyObject;
}

}
if (null !== $model->combinedTo->customer->companies[$index39]->contragent) {
    $jsonData["combinedTo"]["customer"]["companies"][$index39]["contragent"] = [];
if (null !== $model->combinedTo->customer->companies[$index39]->contragent->contragentType) {
    $jsonData["combinedTo"]["customer"]["companies"][$index39]["contragent"]["contragentType"] = $model->combinedTo->customer->companies[$index39]->contragent->contragentType;
}
if (null !== $model->combinedTo->customer->companies[$index39]->contragent->legalName) {
    $jsonData["combinedTo"]["customer"]["companies"][$index39]["contragent"]["legalName"] = $model->combinedTo->customer->companies[$index39]->contragent->legalName;
}
if (null !== $model->combinedTo->customer->companies[$index39]->contragent->legalAddress) {
    $jsonData["combinedTo"]["customer"]["companies"][$index39]["contragent"]["legalAddress"] = $model->combinedTo->customer->companies[$index39]->contragent->legalAddress;
}
if (null !== $model->combinedTo->customer->companies[$index39]->contragent->INN) {
    $jsonData["combinedTo"]["customer"]["companies"][$index39]["contragent"]["INN"] = $model->combinedTo->customer->companies[$index39]->contragent->INN;
}
if (null !== $model->combinedTo->customer->companies[$index39]->contragent->OKPO) {
    $jsonData["combinedTo"]["customer"]["companies"][$index39]["contragent"]["OKPO"] = $model->combinedTo->customer->companies[$index39]->contragent->OKPO;
}
if (null !== $model->combinedTo->customer->companies[$index39]->contragent->KPP) {
    $jsonData["combinedTo"]["customer"]["companies"][$index39]["contragent"]["KPP"] = $model->combinedTo->customer->companies[$index39]->contragent->KPP;
}
if (null !== $model->combinedTo->customer->companies[$index39]->contragent->OGRN) {
    $jsonData["combinedTo"]["customer"]["companies"][$index39]["contragent"]["OGRN"] = $model->combinedTo->customer->companies[$index39]->contragent->OGRN;
}
if (null !== $model->combinedTo->customer->companies[$index39]->contragent->OGRNIP) {
    $jsonData["combinedTo"]["customer"]["companies"][$index39]["contragent"]["OGRNIP"] = $model->combinedTo->customer->companies[$index39]->contragent->OGRNIP;
}
if (null !== $model->combinedTo->customer->companies[$index39]->contragent->certificateNumber) {
    $jsonData["combinedTo"]["customer"]["companies"][$index39]["contragent"]["certificateNumber"] = $model->combinedTo->customer->companies[$index39]->contragent->certificateNumber;
}
if (null !== $model->combinedTo->customer->companies[$index39]->contragent->certificateDate) {
    $jsonData["combinedTo"]["customer"]["companies"][$index39]["contragent"]["certificateDate"] = $model->combinedTo->customer->companies[$index39]->contragent->certificateDate->format('Y-m-d H:i:s');;
}
if (null !== $model->combinedTo->customer->companies[$index39]->contragent->BIK) {
    $jsonData["combinedTo"]["customer"]["companies"][$index39]["contragent"]["BIK"] = $model->combinedTo->customer->companies[$index39]->contragent->BIK;
}
if (null !== $model->combinedTo->customer->companies[$index39]->contragent->bank) {
    $jsonData["combinedTo"]["customer"]["companies"][$index39]["contragent"]["bank"] = $model->combinedTo->customer->companies[$index39]->contragent->bank;
}
if (null !== $model->combinedTo->customer->companies[$index39]->contragent->bankAddress) {
    $jsonData["combinedTo"]["customer"]["companies"][$index39]["contragent"]["bankAddress"] = $model->combinedTo->customer->companies[$index39]->contragent->bankAddress;
}
if (null !== $model->combinedTo->customer->companies[$index39]->contragent->corrAccount) {
    $jsonData["combinedTo"]["customer"]["companies"][$index39]["contragent"]["corrAccount"] = $model->combinedTo->customer->companies[$index39]->contragent->corrAccount;
}
if (null !== $model->combinedTo->customer->companies[$index39]->contragent->bankAccount) {
    $jsonData["combinedTo"]["customer"]["companies"][$index39]["contragent"]["bankAccount"] = $model->combinedTo->customer->companies[$index39]->contragent->bankAccount;
}

if (0 === \count($jsonData["combinedTo"]["customer"]["companies"][$index39]["contragent"])) {
    $jsonData["combinedTo"]["customer"]["companies"][$index39]["contragent"] = $emptyObject;
}

}
if (null !== $model->combinedTo->customer->companies[$index39]->address) {
    $jsonData["combinedTo"]["customer"]["companies"][$index39]["address"] = [];
if (null !== $model->combinedTo->customer->companies[$index39]->address->id) {
    $jsonData["combinedTo"]["customer"]["companies"][$index39]["address"]["id"] = $model->combinedTo->customer->companies[$index39]->address->id;
}
if (null !== $model->combinedTo->customer->companies[$index39]->address->name) {
    $jsonData["combinedTo"]["customer"]["companies"][$index39]["address"]["name"] = $model->combinedTo->customer->companies[$index39]->address->name;
}
if (null !== $model->combinedTo->customer->companies[$index39]->address->isMain) {
    $jsonData["combinedTo"]["customer"]["companies"][$index39]["address"]["isMain"] = $model->combinedTo->customer->companies[$index39]->address->isMain;
}
if (null !== $model->combinedTo->customer->companies[$index39]->address->index) {
    $jsonData["combinedTo"]["customer"]["companies"][$index39]["address"]["index"] = $model->combinedTo->customer->companies[$index39]->address->index;
}
if (null !== $model->combinedTo->customer->companies[$index39]->address->countryIso) {
    $jsonData["combinedTo"]["customer"]["companies"][$index39]["address"]["countryIso"] = $model->combinedTo->customer->companies[$index39]->address->countryIso;
}
if (null !== $model->combinedTo->customer->companies[$index39]->address->region) {
    $jsonData["combinedTo"]["customer"]["companies"][$index39]["address"]["region"] = $model->combinedTo->customer->companies[$index39]->address->region;
}
if (null !== $model->combinedTo->customer->companies[$index39]->address->regionId) {
    $jsonData["combinedTo"]["customer"]["companies"][$index39]["address"]["regionId"] = $model->combinedTo->customer->companies[$index39]->address->regionId;
}
if (null !== $model->combinedTo->customer->companies[$index39]->address->city) {
    $jsonData["combinedTo"]["customer"]["companies"][$index39]["address"]["city"] = $model->combinedTo->customer->companies[$index39]->address->city;
}
if (null !== $model->combinedTo->customer->companies[$index39]->address->cityId) {
    $jsonData["combinedTo"]["customer"]["companies"][$index39]["address"]["cityId"] = $model->combinedTo->customer->companies[$index39]->address->cityId;
}
if (null !== $model->combinedTo->customer->companies[$index39]->address->cityType) {
    $jsonData["combinedTo"]["customer"]["companies"][$index39]["address"]["cityType"] = $model->combinedTo->customer->companies[$index39]->address->cityType;
}
if (null !== $model->combinedTo->customer->companies[$index39]->address->street) {
    $jsonData["combinedTo"]["customer"]["companies"][$index39]["address"]["street"] = $model->combinedTo->customer->companies[$index39]->address->street;
}
if (null !== $model->combinedTo->customer->companies[$index39]->address->streetId) {
    $jsonData["combinedTo"]["customer"]["companies"][$index39]["address"]["streetId"] = $model->combinedTo->customer->companies[$index39]->address->streetId;
}
if (null !== $model->combinedTo->customer->companies[$index39]->address->streetType) {
    $jsonData["combinedTo"]["customer"]["companies"][$index39]["address"]["streetType"] = $model->combinedTo->customer->companies[$index39]->address->streetType;
}
if (null !== $model->combinedTo->customer->companies[$index39]->address->building) {
    $jsonData["combinedTo"]["customer"]["companies"][$index39]["address"]["building"] = $model->combinedTo->customer->companies[$index39]->address->building;
}
if (null !== $model->combinedTo->customer->companies[$index39]->address->flat) {
    $jsonData["combinedTo"]["customer"]["companies"][$index39]["address"]["flat"] = $model->combinedTo->customer->companies[$index39]->address->flat;
}
if (null !== $model->combinedTo->customer->companies[$index39]->address->floor) {
    $jsonData["combinedTo"]["customer"]["companies"][$index39]["address"]["floor"] = $model->combinedTo->customer->companies[$index39]->address->floor;
}
if (null !== $model->combinedTo->customer->companies[$index39]->address->block) {
    $jsonData["combinedTo"]["customer"]["companies"][$index39]["address"]["block"] = $model->combinedTo->customer->companies[$index39]->address->block;
}
if (null !== $model->combinedTo->customer->companies[$index39]->address->house) {
    $jsonData["combinedTo"]["customer"]["companies"][$index39]["address"]["house"] = $model->combinedTo->customer->companies[$index39]->address->house;
}
if (null !== $model->combinedTo->customer->companies[$index39]->address->housing) {
    $jsonData["combinedTo"]["customer"]["companies"][$index39]["address"]["housing"] = $model->combinedTo->customer->companies[$index39]->address->housing;
}
if (null !== $model->combinedTo->customer->companies[$index39]->address->metro) {
    $jsonData["combinedTo"]["customer"]["companies"][$index39]["address"]["metro"] = $model->combinedTo->customer->companies[$index39]->address->metro;
}
if (null !== $model->combinedTo->customer->companies[$index39]->address->notes) {
    $jsonData["combinedTo"]["customer"]["companies"][$index39]["address"]["notes"] = $model->combinedTo->customer->companies[$index39]->address->notes;
}
if (null !== $model->combinedTo->customer->companies[$index39]->address->text) {
    $jsonData["combinedTo"]["customer"]["companies"][$index39]["address"]["text"] = $model->combinedTo->customer->companies[$index39]->address->text;
}
if (null !== $model->combinedTo->customer->companies[$index39]->address->externalId) {
    $jsonData["combinedTo"]["customer"]["companies"][$index39]["address"]["externalId"] = $model->combinedTo->customer->companies[$index39]->address->externalId;
}

if (0 === \count($jsonData["combinedTo"]["customer"]["companies"][$index39]["address"])) {
    $jsonData["combinedTo"]["customer"]["companies"][$index39]["address"] = $emptyObject;
}

}
if (null !== $model->combinedTo->customer->companies[$index39]->customFields) {
    $jsonData["combinedTo"]["customer"]["companies"][$index39]["customFields"] = [];
foreach (array_keys($model->combinedTo->customer->companies[$index39]->customFields) as $index65) {
    $jsonData["combinedTo"]["customer"]["companies"][$index39]["customFields"] = $model->combinedTo->customer->companies[$index39]->customFields;
}

}
if (null !== $model->combinedTo->customer->companies[$index39]->marginSumm) {
    $jsonData["combinedTo"]["customer"]["companies"][$index39]["marginSumm"] = $model->combinedTo->customer->companies[$index39]->marginSumm;
}
if (null !== $model->combinedTo->customer->companies[$index39]->totalSumm) {
    $jsonData["combinedTo"]["customer"]["companies"][$index39]["totalSumm"] = $model->combinedTo->customer->companies[$index39]->totalSumm;
}
if (null !== $model->combinedTo->customer->companies[$index39]->averageSumm) {
    $jsonData["combinedTo"]["customer"]["companies"][$index39]["averageSumm"] = $model->combinedTo->customer->companies[$index39]->averageSumm;
}
if (null !== $model->combinedTo->customer->companies[$index39]->ordersCount) {
    $jsonData["combinedTo"]["customer"]["companies"][$index39]["ordersCount"] = $model->combinedTo->customer->companies[$index39]->ordersCount;
}
if (null !== $model->combinedTo->customer->companies[$index39]->costSumm) {
    $jsonData["combinedTo"]["customer"]["companies"][$index39]["costSumm"] = $model->combinedTo->customer->companies[$index39]->costSumm;
}

if (0 === \count($jsonData["combinedTo"]["customer"]["companies"][$index39])) {
    $jsonData["combinedTo"]["customer"]["companies"][$index39] = $emptyObject;
}

}

}
if (null !== $model->combinedTo->customer->addresses) {
    $jsonData["combinedTo"]["customer"]["addresses"] = [];
foreach (array_keys($model->combinedTo->customer->addresses) as $index39) {
    $jsonData["combinedTo"]["customer"]["addresses"][$index39] = [];
if (null !== $model->combinedTo->customer->addresses[$index39]->id) {
    $jsonData["combinedTo"]["customer"]["addresses"][$index39]["id"] = $model->combinedTo->customer->addresses[$index39]->id;
}
if (null !== $model->combinedTo->customer->addresses[$index39]->name) {
    $jsonData["combinedTo"]["customer"]["addresses"][$index39]["name"] = $model->combinedTo->customer->addresses[$index39]->name;
}
if (null !== $model->combinedTo->customer->addresses[$index39]->isMain) {
    $jsonData["combinedTo"]["customer"]["addresses"][$index39]["isMain"] = $model->combinedTo->customer->addresses[$index39]->isMain;
}
if (null !== $model->combinedTo->customer->addresses[$index39]->index) {
    $jsonData["combinedTo"]["customer"]["addresses"][$index39]["index"] = $model->combinedTo->customer->addresses[$index39]->index;
}
if (null !== $model->combinedTo->customer->addresses[$index39]->countryIso) {
    $jsonData["combinedTo"]["customer"]["addresses"][$index39]["countryIso"] = $model->combinedTo->customer->addresses[$index39]->countryIso;
}
if (null !== $model->combinedTo->customer->addresses[$index39]->region) {
    $jsonData["combinedTo"]["customer"]["addresses"][$index39]["region"] = $model->combinedTo->customer->addresses[$index39]->region;
}
if (null !== $model->combinedTo->customer->addresses[$index39]->regionId) {
    $jsonData["combinedTo"]["customer"]["addresses"][$index39]["regionId"] = $model->combinedTo->customer->addresses[$index39]->regionId;
}
if (null !== $model->combinedTo->customer->addresses[$index39]->city) {
    $jsonData["combinedTo"]["customer"]["addresses"][$index39]["city"] = $model->combinedTo->customer->addresses[$index39]->city;
}
if (null !== $model->combinedTo->customer->addresses[$index39]->cityId) {
    $jsonData["combinedTo"]["customer"]["addresses"][$index39]["cityId"] = $model->combinedTo->customer->addresses[$index39]->cityId;
}
if (null !== $model->combinedTo->customer->addresses[$index39]->cityType) {
    $jsonData["combinedTo"]["customer"]["addresses"][$index39]["cityType"] = $model->combinedTo->customer->addresses[$index39]->cityType;
}
if (null !== $model->combinedTo->customer->addresses[$index39]->street) {
    $jsonData["combinedTo"]["customer"]["addresses"][$index39]["street"] = $model->combinedTo->customer->addresses[$index39]->street;
}
if (null !== $model->combinedTo->customer->addresses[$index39]->streetId) {
    $jsonData["combinedTo"]["customer"]["addresses"][$index39]["streetId"] = $model->combinedTo->customer->addresses[$index39]->streetId;
}
if (null !== $model->combinedTo->customer->addresses[$index39]->streetType) {
    $jsonData["combinedTo"]["customer"]["addresses"][$index39]["streetType"] = $model->combinedTo->customer->addresses[$index39]->streetType;
}
if (null !== $model->combinedTo->customer->addresses[$index39]->building) {
    $jsonData["combinedTo"]["customer"]["addresses"][$index39]["building"] = $model->combinedTo->customer->addresses[$index39]->building;
}
if (null !== $model->combinedTo->customer->addresses[$index39]->flat) {
    $jsonData["combinedTo"]["customer"]["addresses"][$index39]["flat"] = $model->combinedTo->customer->addresses[$index39]->flat;
}
if (null !== $model->combinedTo->customer->addresses[$index39]->floor) {
    $jsonData["combinedTo"]["customer"]["addresses"][$index39]["floor"] = $model->combinedTo->customer->addresses[$index39]->floor;
}
if (null !== $model->combinedTo->customer->addresses[$index39]->block) {
    $jsonData["combinedTo"]["customer"]["addresses"][$index39]["block"] = $model->combinedTo->customer->addresses[$index39]->block;
}
if (null !== $model->combinedTo->customer->addresses[$index39]->house) {
    $jsonData["combinedTo"]["customer"]["addresses"][$index39]["house"] = $model->combinedTo->customer->addresses[$index39]->house;
}
if (null !== $model->combinedTo->customer->addresses[$index39]->housing) {
    $jsonData["combinedTo"]["customer"]["addresses"][$index39]["housing"] = $model->combinedTo->customer->addresses[$index39]->housing;
}
if (null !== $model->combinedTo->customer->addresses[$index39]->metro) {
    $jsonData["combinedTo"]["customer"]["addresses"][$index39]["metro"] = $model->combinedTo->customer->addresses[$index39]->metro;
}
if (null !== $model->combinedTo->customer->addresses[$index39]->notes) {
    $jsonData["combinedTo"]["customer"]["addresses"][$index39]["notes"] = $model->combinedTo->customer->addresses[$index39]->notes;
}
if (null !== $model->combinedTo->customer->addresses[$index39]->text) {
    $jsonData["combinedTo"]["customer"]["addresses"][$index39]["text"] = $model->combinedTo->customer->addresses[$index39]->text;
}
if (null !== $model->combinedTo->customer->addresses[$index39]->externalId) {
    $jsonData["combinedTo"]["customer"]["addresses"][$index39]["externalId"] = $model->combinedTo->customer->addresses[$index39]->externalId;
}

if (0 === \count($jsonData["combinedTo"]["customer"]["addresses"][$index39])) {
    $jsonData["combinedTo"]["customer"]["addresses"][$index39] = $emptyObject;
}

}

}
if (null !== $model->combinedTo->customer->vip) {
    $jsonData["combinedTo"]["customer"]["vip"] = $model->combinedTo->customer->vip;
}
if (null !== $model->combinedTo->customer->bad) {
    $jsonData["combinedTo"]["customer"]["bad"] = $model->combinedTo->customer->bad;
}
if (null !== $model->combinedTo->customer->site) {
    $jsonData["combinedTo"]["customer"]["site"] = $model->combinedTo->customer->site;
}
if (null !== $model->combinedTo->customer->tags) {
    $jsonData["combinedTo"]["customer"]["tags"] = [];
foreach (array_keys($model->combinedTo->customer->tags) as $index34) {
    $jsonData["combinedTo"]["customer"]["tags"][$index34] = $model->combinedTo->customer->tags[$index34]->name;
}

}
if (null !== $model->combinedTo->customer->avgMarginSumm) {
    $jsonData["combinedTo"]["customer"]["avgMarginSumm"] = $model->combinedTo->customer->avgMarginSumm;
}
if (null !== $model->combinedTo->customer->marginSumm) {
    $jsonData["combinedTo"]["customer"]["marginSumm"] = $model->combinedTo->customer->marginSumm;
}
if (null !== $model->combinedTo->customer->totalSumm) {
    $jsonData["combinedTo"]["customer"]["totalSumm"] = $model->combinedTo->customer->totalSumm;
}
if (null !== $model->combinedTo->customer->averageSumm) {
    $jsonData["combinedTo"]["customer"]["averageSumm"] = $model->combinedTo->customer->averageSumm;
}
if (null !== $model->combinedTo->customer->ordersCount) {
    $jsonData["combinedTo"]["customer"]["ordersCount"] = $model->combinedTo->customer->ordersCount;
}
if (null !== $model->combinedTo->customer->costSumm) {
    $jsonData["combinedTo"]["customer"]["costSumm"] = $model->combinedTo->customer->costSumm;
}
if (null !== $model->combinedTo->customer->customFields) {
    $jsonData["combinedTo"]["customer"]["customFields"] = [];
foreach (array_keys($model->combinedTo->customer->customFields) as $index42) {
    $jsonData["combinedTo"]["customer"]["customFields"] = $model->combinedTo->customer->customFields;
}

}
if (null !== $model->combinedTo->customer->personalDiscount) {
    $jsonData["combinedTo"]["customer"]["personalDiscount"] = $model->combinedTo->customer->personalDiscount;
}
if (null !== $model->combinedTo->customer->cumulativeDiscount) {
    $jsonData["combinedTo"]["customer"]["cumulativeDiscount"] = $model->combinedTo->customer->cumulativeDiscount;
}
if (null !== $model->combinedTo->customer->discountCardNumber) {
    $jsonData["combinedTo"]["customer"]["discountCardNumber"] = $model->combinedTo->customer->discountCardNumber;
}
if (null !== $model->combinedTo->customer->firstClientId) {
    $jsonData["combinedTo"]["customer"]["firstClientId"] = $model->combinedTo->customer->firstClientId;
}
if (null !== $model->combinedTo->customer->lastClientId) {
    $jsonData["combinedTo"]["customer"]["lastClientId"] = $model->combinedTo->customer->lastClientId;
}
if (null !== $model->combinedTo->customer->mainCustomerContact) {
    $jsonData["combinedTo"]["customer"]["mainCustomerContact"] = [];
if (null !== $model->combinedTo->customer->mainCustomerContact->id) {
    $jsonData["combinedTo"]["customer"]["mainCustomerContact"]["id"] = $model->combinedTo->customer->mainCustomerContact->id;
}
if (null !== $model->combinedTo->customer->mainCustomerContact->isMain) {
    $jsonData["combinedTo"]["customer"]["mainCustomerContact"]["isMain"] = $model->combinedTo->customer->mainCustomerContact->isMain;
}
if (null !== $model->combinedTo->customer->mainCustomerContact->customer) {
    $jsonData["combinedTo"]["customer"]["mainCustomerContact"]["customer"] = [];
if (null !== $model->combinedTo->customer->mainCustomerContact->customer->id) {
    $jsonData["combinedTo"]["customer"]["mainCustomerContact"]["customer"]["id"] = $model->combinedTo->customer->mainCustomerContact->customer->id;
}
if (null !== $model->combinedTo->customer->mainCustomerContact->customer->externalId) {
    $jsonData["combinedTo"]["customer"]["mainCustomerContact"]["customer"]["externalId"] = $model->combinedTo->customer->mainCustomerContact->customer->externalId;
}
if (null !== $model->combinedTo->customer->mainCustomerContact->customer->browserId) {
    $jsonData["combinedTo"]["customer"]["mainCustomerContact"]["customer"]["browserId"] = $model->combinedTo->customer->mainCustomerContact->customer->browserId;
}
if (null !== $model->combinedTo->customer->mainCustomerContact->customer->site) {
    $jsonData["combinedTo"]["customer"]["mainCustomerContact"]["customer"]["site"] = $model->combinedTo->customer->mainCustomerContact->customer->site;
}
if (null !== $model->combinedTo->customer->mainCustomerContact->customer->companies) {
    $jsonData["combinedTo"]["customer"]["mainCustomerContact"]["customer"]["companies"] = [];
foreach (array_keys($model->combinedTo->customer->mainCustomerContact->customer->companies) as $index74) {
    $jsonData["combinedTo"]["customer"]["mainCustomerContact"]["customer"]["companies"][$index74] = [];
if (null !== $model->combinedTo->customer->mainCustomerContact->customer->companies[$index74]->id) {
    $jsonData["combinedTo"]["customer"]["mainCustomerContact"]["customer"]["companies"][$index74]["id"] = $model->combinedTo->customer->mainCustomerContact->customer->companies[$index74]->id;
}
if (null !== $model->combinedTo->customer->mainCustomerContact->customer->companies[$index74]->externalId) {
    $jsonData["combinedTo"]["customer"]["mainCustomerContact"]["customer"]["companies"][$index74]["externalId"] = $model->combinedTo->customer->mainCustomerContact->customer->companies[$index74]->externalId;
}
if (null !== $model->combinedTo->customer->mainCustomerContact->customer->companies[$index74]->company) {
    $jsonData["combinedTo"]["customer"]["mainCustomerContact"]["customer"]["companies"][$index74]["company"] = [];
if (null !== $model->combinedTo->customer->mainCustomerContact->customer->companies[$index74]->company->id) {
    $jsonData["combinedTo"]["customer"]["mainCustomerContact"]["customer"]["companies"][$index74]["company"]["id"] = $model->combinedTo->customer->mainCustomerContact->customer->companies[$index74]->company->id;
}
if (null !== $model->combinedTo->customer->mainCustomerContact->customer->companies[$index74]->company->externalId) {
    $jsonData["combinedTo"]["customer"]["mainCustomerContact"]["customer"]["companies"][$index74]["company"]["externalId"] = $model->combinedTo->customer->mainCustomerContact->customer->companies[$index74]->company->externalId;
}
if (null !== $model->combinedTo->customer->mainCustomerContact->customer->companies[$index74]->company->name) {
    $jsonData["combinedTo"]["customer"]["mainCustomerContact"]["customer"]["companies"][$index74]["company"]["name"] = $model->combinedTo->customer->mainCustomerContact->customer->companies[$index74]->company->name;
}

if (0 === \count($jsonData["combinedTo"]["customer"]["mainCustomerContact"]["customer"]["companies"][$index74]["company"])) {
    $jsonData["combinedTo"]["customer"]["mainCustomerContact"]["customer"]["companies"][$index74]["company"] = $emptyObject;
}

}

if (0 === \count($jsonData["combinedTo"]["customer"]["mainCustomerContact"]["customer"]["companies"][$index74])) {
    $jsonData["combinedTo"]["customer"]["mainCustomerContact"]["customer"]["companies"][$index74] = $emptyObject;
}

}

}

if (0 === \count($jsonData["combinedTo"]["customer"]["mainCustomerContact"]["customer"])) {
    $jsonData["combinedTo"]["customer"]["mainCustomerContact"]["customer"] = $emptyObject;
}

}
if (null !== $model->combinedTo->customer->mainCustomerContact->companies) {
    $jsonData["combinedTo"]["customer"]["mainCustomerContact"]["companies"] = [];
foreach (array_keys($model->combinedTo->customer->mainCustomerContact->companies) as $index62) {
    $jsonData["combinedTo"]["customer"]["mainCustomerContact"]["companies"][$index62] = [];
if (null !== $model->combinedTo->customer->mainCustomerContact->companies[$index62]->id) {
    $jsonData["combinedTo"]["customer"]["mainCustomerContact"]["companies"][$index62]["id"] = $model->combinedTo->customer->mainCustomerContact->companies[$index62]->id;
}
if (null !== $model->combinedTo->customer->mainCustomerContact->companies[$index62]->externalId) {
    $jsonData["combinedTo"]["customer"]["mainCustomerContact"]["companies"][$index62]["externalId"] = $model->combinedTo->customer->mainCustomerContact->companies[$index62]->externalId;
}
if (null !== $model->combinedTo->customer->mainCustomerContact->companies[$index62]->company) {
    $jsonData["combinedTo"]["customer"]["mainCustomerContact"]["companies"][$index62]["company"] = [];
if (null !== $model->combinedTo->customer->mainCustomerContact->companies[$index62]->company->id) {
    $jsonData["combinedTo"]["customer"]["mainCustomerContact"]["companies"][$index62]["company"]["id"] = $model->combinedTo->customer->mainCustomerContact->companies[$index62]->company->id;
}
if (null !== $model->combinedTo->customer->mainCustomerContact->companies[$index62]->company->externalId) {
    $jsonData["combinedTo"]["customer"]["mainCustomerContact"]["companies"][$index62]["company"]["externalId"] = $model->combinedTo->customer->mainCustomerContact->companies[$index62]->company->externalId;
}
if (null !== $model->combinedTo->customer->mainCustomerContact->companies[$index62]->company->name) {
    $jsonData["combinedTo"]["customer"]["mainCustomerContact"]["companies"][$index62]["company"]["name"] = $model->combinedTo->customer->mainCustomerContact->companies[$index62]->company->name;
}

if (0 === \count($jsonData["combinedTo"]["customer"]["mainCustomerContact"]["companies"][$index62]["company"])) {
    $jsonData["combinedTo"]["customer"]["mainCustomerContact"]["companies"][$index62]["company"] = $emptyObject;
}

}

if (0 === \count($jsonData["combinedTo"]["customer"]["mainCustomerContact"]["companies"][$index62])) {
    $jsonData["combinedTo"]["customer"]["mainCustomerContact"]["companies"][$index62] = $emptyObject;
}

}

}

if (0 === \count($jsonData["combinedTo"]["customer"]["mainCustomerContact"])) {
    $jsonData["combinedTo"]["customer"]["mainCustomerContact"] = $emptyObject;
}

}
if (null !== $model->combinedTo->customer->mainCompany) {
    $jsonData["combinedTo"]["customer"]["mainCompany"] = [];
if (null !== $model->combinedTo->customer->mainCompany->id) {
    $jsonData["combinedTo"]["customer"]["mainCompany"]["id"] = $model->combinedTo->customer->mainCompany->id;
}
if (null !== $model->combinedTo->customer->mainCompany->externalId) {
    $jsonData["combinedTo"]["customer"]["mainCompany"]["externalId"] = $model->combinedTo->customer->mainCompany->externalId;
}
if (null !== $model->combinedTo->customer->mainCompany->name) {
    $jsonData["combinedTo"]["customer"]["mainCompany"]["name"] = $model->combinedTo->customer->mainCompany->name;
}

if (0 === \count($jsonData["combinedTo"]["customer"]["mainCompany"])) {
    $jsonData["combinedTo"]["customer"]["mainCompany"] = $emptyObject;
}

}

if (0 === \count($jsonData["combinedTo"]["customer"])) {
    $jsonData["combinedTo"]["customer"] = $emptyObject;
}

}

if (0 === \count($jsonData["combinedTo"]["customer"])) {
    $jsonData["combinedTo"]["customer"] = $emptyObject;
}
}
if (null !== $model->combinedTo->contact) {
    $jsonData["combinedTo"]["contact"] = [];
if (null !== $model->combinedTo->contact->type) {
    $jsonData["combinedTo"]["contact"]["type"] = $model->combinedTo->contact->type;
}
if (null !== $model->combinedTo->contact->id) {
    $jsonData["combinedTo"]["contact"]["id"] = $model->combinedTo->contact->id;
}
if (null !== $model->combinedTo->contact->externalId) {
    $jsonData["combinedTo"]["contact"]["externalId"] = $model->combinedTo->contact->externalId;
}
if (null !== $model->combinedTo->contact->isContact) {
    $jsonData["combinedTo"]["contact"]["isContact"] = $model->combinedTo->contact->isContact;
}
if (null !== $model->combinedTo->contact->createdAt) {
    $jsonData["combinedTo"]["contact"]["createdAt"] = $model->combinedTo->contact->createdAt->format('Y-m-d H:i:s');;
}
if (null !== $model->combinedTo->contact->managerId) {
    $jsonData["combinedTo"]["contact"]["managerId"] = $model->combinedTo->contact->managerId;
}
if (null !== $model->combinedTo->contact->vip) {
    $jsonData["combinedTo"]["contact"]["vip"] = $model->combinedTo->contact->vip;
}
if (null !== $model->combinedTo->contact->bad) {
    $jsonData["combinedTo"]["contact"]["bad"] = $model->combinedTo->contact->bad;
}
if (null !== $model->combinedTo->contact->browserId) {
    $jsonData["combinedTo"]["contact"]["browserId"] = $model->combinedTo->contact->browserId;
}
if (null !== $model->combinedTo->contact->site) {
    $jsonData["combinedTo"]["contact"]["site"] = $model->combinedTo->contact->site;
}
if (null !== $model->combinedTo->contact->contragent) {
    $jsonData["combinedTo"]["contact"]["contragent"] = [];
if (null !== $model->combinedTo->contact->contragent->contragentType) {
    $jsonData["combinedTo"]["contact"]["contragent"]["contragentType"] = $model->combinedTo->contact->contragent->contragentType;
}
if (null !== $model->combinedTo->contact->contragent->legalName) {
    $jsonData["combinedTo"]["contact"]["contragent"]["legalName"] = $model->combinedTo->contact->contragent->legalName;
}
if (null !== $model->combinedTo->contact->contragent->legalAddress) {
    $jsonData["combinedTo"]["contact"]["contragent"]["legalAddress"] = $model->combinedTo->contact->contragent->legalAddress;
}
if (null !== $model->combinedTo->contact->contragent->INN) {
    $jsonData["combinedTo"]["contact"]["contragent"]["INN"] = $model->combinedTo->contact->contragent->INN;
}
if (null !== $model->combinedTo->contact->contragent->OKPO) {
    $jsonData["combinedTo"]["contact"]["contragent"]["OKPO"] = $model->combinedTo->contact->contragent->OKPO;
}
if (null !== $model->combinedTo->contact->contragent->KPP) {
    $jsonData["combinedTo"]["contact"]["contragent"]["KPP"] = $model->combinedTo->contact->contragent->KPP;
}
if (null !== $model->combinedTo->contact->contragent->OGRN) {
    $jsonData["combinedTo"]["contact"]["contragent"]["OGRN"] = $model->combinedTo->contact->contragent->OGRN;
}
if (null !== $model->combinedTo->contact->contragent->OGRNIP) {
    $jsonData["combinedTo"]["contact"]["contragent"]["OGRNIP"] = $model->combinedTo->contact->contragent->OGRNIP;
}
if (null !== $model->combinedTo->contact->contragent->certificateNumber) {
    $jsonData["combinedTo"]["contact"]["contragent"]["certificateNumber"] = $model->combinedTo->contact->contragent->certificateNumber;
}
if (null !== $model->combinedTo->contact->contragent->certificateDate) {
    $jsonData["combinedTo"]["contact"]["contragent"]["certificateDate"] = $model->combinedTo->contact->contragent->certificateDate->format('Y-m-d H:i:s');;
}
if (null !== $model->combinedTo->contact->contragent->BIK) {
    $jsonData["combinedTo"]["contact"]["contragent"]["BIK"] = $model->combinedTo->contact->contragent->BIK;
}
if (null !== $model->combinedTo->contact->contragent->bank) {
    $jsonData["combinedTo"]["contact"]["contragent"]["bank"] = $model->combinedTo->contact->contragent->bank;
}
if (null !== $model->combinedTo->contact->contragent->bankAddress) {
    $jsonData["combinedTo"]["contact"]["contragent"]["bankAddress"] = $model->combinedTo->contact->contragent->bankAddress;
}
if (null !== $model->combinedTo->contact->contragent->corrAccount) {
    $jsonData["combinedTo"]["contact"]["contragent"]["corrAccount"] = $model->combinedTo->contact->contragent->corrAccount;
}
if (null !== $model->combinedTo->contact->contragent->bankAccount) {
    $jsonData["combinedTo"]["contact"]["contragent"]["bankAccount"] = $model->combinedTo->contact->contragent->bankAccount;
}

if (0 === \count($jsonData["combinedTo"]["contact"]["contragent"])) {
    $jsonData["combinedTo"]["contact"]["contragent"] = $emptyObject;
}

}
if (null !== $model->combinedTo->contact->tags) {
    $jsonData["combinedTo"]["contact"]["tags"] = [];
foreach (array_keys($model->combinedTo->contact->tags) as $index33) {
    $jsonData["combinedTo"]["contact"]["tags"][$index33] = $model->combinedTo->contact->tags[$index33]->name;
}

}
if (null !== $model->combinedTo->contact->avgMarginSumm) {
    $jsonData["combinedTo"]["contact"]["avgMarginSumm"] = $model->combinedTo->contact->avgMarginSumm;
}
if (null !== $model->combinedTo->contact->marginSumm) {
    $jsonData["combinedTo"]["contact"]["marginSumm"] = $model->combinedTo->contact->marginSumm;
}
if (null !== $model->combinedTo->contact->totalSumm) {
    $jsonData["combinedTo"]["contact"]["totalSumm"] = $model->combinedTo->contact->totalSumm;
}
if (null !== $model->combinedTo->contact->averageSumm) {
    $jsonData["combinedTo"]["contact"]["averageSumm"] = $model->combinedTo->contact->averageSumm;
}
if (null !== $model->combinedTo->contact->ordersCount) {
    $jsonData["combinedTo"]["contact"]["ordersCount"] = $model->combinedTo->contact->ordersCount;
}
if (null !== $model->combinedTo->contact->costSumm) {
    $jsonData["combinedTo"]["contact"]["costSumm"] = $model->combinedTo->contact->costSumm;
}
if (null !== $model->combinedTo->contact->customFields) {
    $jsonData["combinedTo"]["contact"]["customFields"] = [];
foreach (array_keys($model->combinedTo->contact->customFields) as $index41) {
    $jsonData["combinedTo"]["contact"]["customFields"] = $model->combinedTo->contact->customFields;
}

}
if (null !== $model->combinedTo->contact->personalDiscount) {
    $jsonData["combinedTo"]["contact"]["personalDiscount"] = $model->combinedTo->contact->personalDiscount;
}
if (null !== $model->combinedTo->contact->cumulativeDiscount) {
    $jsonData["combinedTo"]["contact"]["cumulativeDiscount"] = $model->combinedTo->contact->cumulativeDiscount;
}
if (null !== $model->combinedTo->contact->discountCardNumber) {
    $jsonData["combinedTo"]["contact"]["discountCardNumber"] = $model->combinedTo->contact->discountCardNumber;
}
if (null !== $model->combinedTo->contact->firstClientId) {
    $jsonData["combinedTo"]["contact"]["firstClientId"] = $model->combinedTo->contact->firstClientId;
}
if (null !== $model->combinedTo->contact->lastClientId) {
    $jsonData["combinedTo"]["contact"]["lastClientId"] = $model->combinedTo->contact->lastClientId;
}
if (null !== $model->combinedTo->contact->address) {
    $jsonData["combinedTo"]["contact"]["address"] = [];
if (null !== $model->combinedTo->contact->address->id) {
    $jsonData["combinedTo"]["contact"]["address"]["id"] = $model->combinedTo->contact->address->id;
}
if (null !== $model->combinedTo->contact->address->name) {
    $jsonData["combinedTo"]["contact"]["address"]["name"] = $model->combinedTo->contact->address->name;
}
if (null !== $model->combinedTo->contact->address->isMain) {
    $jsonData["combinedTo"]["contact"]["address"]["isMain"] = $model->combinedTo->contact->address->isMain;
}
if (null !== $model->combinedTo->contact->address->index) {
    $jsonData["combinedTo"]["contact"]["address"]["index"] = $model->combinedTo->contact->address->index;
}
if (null !== $model->combinedTo->contact->address->countryIso) {
    $jsonData["combinedTo"]["contact"]["address"]["countryIso"] = $model->combinedTo->contact->address->countryIso;
}
if (null !== $model->combinedTo->contact->address->region) {
    $jsonData["combinedTo"]["contact"]["address"]["region"] = $model->combinedTo->contact->address->region;
}
if (null !== $model->combinedTo->contact->address->regionId) {
    $jsonData["combinedTo"]["contact"]["address"]["regionId"] = $model->combinedTo->contact->address->regionId;
}
if (null !== $model->combinedTo->contact->address->city) {
    $jsonData["combinedTo"]["contact"]["address"]["city"] = $model->combinedTo->contact->address->city;
}
if (null !== $model->combinedTo->contact->address->cityId) {
    $jsonData["combinedTo"]["contact"]["address"]["cityId"] = $model->combinedTo->contact->address->cityId;
}
if (null !== $model->combinedTo->contact->address->cityType) {
    $jsonData["combinedTo"]["contact"]["address"]["cityType"] = $model->combinedTo->contact->address->cityType;
}
if (null !== $model->combinedTo->contact->address->street) {
    $jsonData["combinedTo"]["contact"]["address"]["street"] = $model->combinedTo->contact->address->street;
}
if (null !== $model->combinedTo->contact->address->streetId) {
    $jsonData["combinedTo"]["contact"]["address"]["streetId"] = $model->combinedTo->contact->address->streetId;
}
if (null !== $model->combinedTo->contact->address->streetType) {
    $jsonData["combinedTo"]["contact"]["address"]["streetType"] = $model->combinedTo->contact->address->streetType;
}
if (null !== $model->combinedTo->contact->address->building) {
    $jsonData["combinedTo"]["contact"]["address"]["building"] = $model->combinedTo->contact->address->building;
}
if (null !== $model->combinedTo->contact->address->flat) {
    $jsonData["combinedTo"]["contact"]["address"]["flat"] = $model->combinedTo->contact->address->flat;
}
if (null !== $model->combinedTo->contact->address->floor) {
    $jsonData["combinedTo"]["contact"]["address"]["floor"] = $model->combinedTo->contact->address->floor;
}
if (null !== $model->combinedTo->contact->address->block) {
    $jsonData["combinedTo"]["contact"]["address"]["block"] = $model->combinedTo->contact->address->block;
}
if (null !== $model->combinedTo->contact->address->house) {
    $jsonData["combinedTo"]["contact"]["address"]["house"] = $model->combinedTo->contact->address->house;
}
if (null !== $model->combinedTo->contact->address->housing) {
    $jsonData["combinedTo"]["contact"]["address"]["housing"] = $model->combinedTo->contact->address->housing;
}
if (null !== $model->combinedTo->contact->address->metro) {
    $jsonData["combinedTo"]["contact"]["address"]["metro"] = $model->combinedTo->contact->address->metro;
}
if (null !== $model->combinedTo->contact->address->notes) {
    $jsonData["combinedTo"]["contact"]["address"]["notes"] = $model->combinedTo->contact->address->notes;
}
if (null !== $model->combinedTo->contact->address->text) {
    $jsonData["combinedTo"]["contact"]["address"]["text"] = $model->combinedTo->contact->address->text;
}
if (null !== $model->combinedTo->contact->address->externalId) {
    $jsonData["combinedTo"]["contact"]["address"]["externalId"] = $model->combinedTo->contact->address->externalId;
}

if (0 === \count($jsonData["combinedTo"]["contact"]["address"])) {
    $jsonData["combinedTo"]["contact"]["address"] = $emptyObject;
}

}
if (null !== $model->combinedTo->contact->segments) {
    $jsonData["combinedTo"]["contact"]["segments"] = [];
foreach (array_keys($model->combinedTo->contact->segments) as $index37) {
    $jsonData["combinedTo"]["contact"]["segments"][$index37] = [];
if (null !== $model->combinedTo->contact->segments[$index37]->id) {
    $jsonData["combinedTo"]["contact"]["segments"][$index37]["id"] = $model->combinedTo->contact->segments[$index37]->id;
}
if (null !== $model->combinedTo->contact->segments[$index37]->code) {
    $jsonData["combinedTo"]["contact"]["segments"][$index37]["code"] = $model->combinedTo->contact->segments[$index37]->code;
}
if (null !== $model->combinedTo->contact->segments[$index37]->name) {
    $jsonData["combinedTo"]["contact"]["segments"][$index37]["name"] = $model->combinedTo->contact->segments[$index37]->name;
}
if (null !== $model->combinedTo->contact->segments[$index37]->createdAt) {
    $jsonData["combinedTo"]["contact"]["segments"][$index37]["createdAt"] = $model->combinedTo->contact->segments[$index37]->createdAt->format('Y-m-d H:i:s');;
}
if (null !== $model->combinedTo->contact->segments[$index37]->isDynamic) {
    $jsonData["combinedTo"]["contact"]["segments"][$index37]["isDynamic"] = $model->combinedTo->contact->segments[$index37]->isDynamic;
}
if (null !== $model->combinedTo->contact->segments[$index37]->customersCount) {
    $jsonData["combinedTo"]["contact"]["segments"][$index37]["customersCount"] = $model->combinedTo->contact->segments[$index37]->customersCount;
}
if (null !== $model->combinedTo->contact->segments[$index37]->active) {
    $jsonData["combinedTo"]["contact"]["segments"][$index37]["active"] = $model->combinedTo->contact->segments[$index37]->active;
}

if (0 === \count($jsonData["combinedTo"]["contact"]["segments"][$index37])) {
    $jsonData["combinedTo"]["contact"]["segments"][$index37] = $emptyObject;
}

}

}
if (null !== $model->combinedTo->contact->maturationTime) {
    $jsonData["combinedTo"]["contact"]["maturationTime"] = $model->combinedTo->contact->maturationTime;
}
if (null !== $model->combinedTo->contact->firstName) {
    $jsonData["combinedTo"]["contact"]["firstName"] = $model->combinedTo->contact->firstName;
}
if (null !== $model->combinedTo->contact->lastName) {
    $jsonData["combinedTo"]["contact"]["lastName"] = $model->combinedTo->contact->lastName;
}
if (null !== $model->combinedTo->contact->patronymic) {
    $jsonData["combinedTo"]["contact"]["patronymic"] = $model->combinedTo->contact->patronymic;
}
if (null !== $model->combinedTo->contact->sex) {
    $jsonData["combinedTo"]["contact"]["sex"] = $model->combinedTo->contact->sex;
}
if (null !== $model->combinedTo->contact->presumableSex) {
    $jsonData["combinedTo"]["contact"]["presumableSex"] = $model->combinedTo->contact->presumableSex;
}
if (null !== $model->combinedTo->contact->email) {
    $jsonData["combinedTo"]["contact"]["email"] = $model->combinedTo->contact->email;
}
if (null !== $model->combinedTo->contact->emailMarketingUnsubscribedAt) {
    $jsonData["combinedTo"]["contact"]["emailMarketingUnsubscribedAt"] = $model->combinedTo->contact->emailMarketingUnsubscribedAt->format('Y-m-d H:i:s');;
}
if (null !== $model->combinedTo->contact->phones) {
    $jsonData["combinedTo"]["contact"]["phones"] = [];
foreach (array_keys($model->combinedTo->contact->phones) as $index35) {
    $jsonData["combinedTo"]["contact"]["phones"][$index35] = [];
if (null !== $model->combinedTo->contact->phones[$index35]->number) {
    $jsonData["combinedTo"]["contact"]["phones"][$index35]["number"] = $model->combinedTo->contact->phones[$index35]->number;
}

if (0 === \count($jsonData["combinedTo"]["contact"]["phones"][$index35])) {
    $jsonData["combinedTo"]["contact"]["phones"][$index35] = $emptyObject;
}

}

}
if (null !== $model->combinedTo->contact->birthday) {
    $jsonData["combinedTo"]["contact"]["birthday"] = $model->combinedTo->contact->birthday->format('Y-m-d H:i:s');;
}
if (null !== $model->combinedTo->contact->source) {
    $jsonData["combinedTo"]["contact"]["source"] = [];
if (null !== $model->combinedTo->contact->source->source) {
    $jsonData["combinedTo"]["contact"]["source"]["source"] = $model->combinedTo->contact->source->source;
}
if (null !== $model->combinedTo->contact->source->medium) {
    $jsonData["combinedTo"]["contact"]["source"]["medium"] = $model->combinedTo->contact->source->medium;
}
if (null !== $model->combinedTo->contact->source->campaign) {
    $jsonData["combinedTo"]["contact"]["source"]["campaign"] = $model->combinedTo->contact->source->campaign;
}
if (null !== $model->combinedTo->contact->source->keyword) {
    $jsonData["combinedTo"]["contact"]["source"]["keyword"] = $model->combinedTo->contact->source->keyword;
}
if (null !== $model->combinedTo->contact->source->content) {
    $jsonData["combinedTo"]["contact"]["source"]["content"] = $model->combinedTo->contact->source->content;
}

if (0 === \count($jsonData["combinedTo"]["contact"]["source"])) {
    $jsonData["combinedTo"]["contact"]["source"] = $emptyObject;
}

}
if (null !== $model->combinedTo->contact->photoUrl) {
    $jsonData["combinedTo"]["contact"]["photoUrl"] = $model->combinedTo->contact->photoUrl;
}
if (null !== $model->combinedTo->contact->mgCustomerId) {
    $jsonData["combinedTo"]["contact"]["mgCustomerId"] = $model->combinedTo->contact->mgCustomerId;
}
if (null !== $model->combinedTo->contact->subscribed) {
    $jsonData["combinedTo"]["contact"]["subscribed"] = $model->combinedTo->contact->subscribed;
}

if (0 === \count($jsonData["combinedTo"]["contact"])) {
    $jsonData["combinedTo"]["contact"] = $emptyObject;
}

}
if (null !== $model->combinedTo->company) {
    $jsonData["combinedTo"]["company"] = [];
if (null !== $model->combinedTo->company->id) {
    $jsonData["combinedTo"]["company"]["id"] = $model->combinedTo->company->id;
}
if (null !== $model->combinedTo->company->isMain) {
    $jsonData["combinedTo"]["company"]["isMain"] = $model->combinedTo->company->isMain;
}
if (null !== $model->combinedTo->company->externalId) {
    $jsonData["combinedTo"]["company"]["externalId"] = $model->combinedTo->company->externalId;
}
if (null !== $model->combinedTo->company->active) {
    $jsonData["combinedTo"]["company"]["active"] = $model->combinedTo->company->active;
}
if (null !== $model->combinedTo->company->name) {
    $jsonData["combinedTo"]["company"]["name"] = $model->combinedTo->company->name;
}
if (null !== $model->combinedTo->company->brand) {
    $jsonData["combinedTo"]["company"]["brand"] = $model->combinedTo->company->brand;
}
if (null !== $model->combinedTo->company->site) {
    $jsonData["combinedTo"]["company"]["site"] = $model->combinedTo->company->site;
}
if (null !== $model->combinedTo->company->createdAt) {
    $jsonData["combinedTo"]["company"]["createdAt"] = $model->combinedTo->company->createdAt->format('Y-m-d H:i:s');;
}
if (null !== $model->combinedTo->company->customer) {
    $jsonData["combinedTo"]["company"]["customer"] = [];
if (null !== $model->combinedTo->company->customer->site) {
    $jsonData["combinedTo"]["company"]["customer"]["site"] = $model->combinedTo->company->customer->site;
}
if (null !== $model->combinedTo->company->customer->id) {
    $jsonData["combinedTo"]["company"]["customer"]["id"] = $model->combinedTo->company->customer->id;
}
if (null !== $model->combinedTo->company->customer->externalId) {
    $jsonData["combinedTo"]["company"]["customer"]["externalId"] = $model->combinedTo->company->customer->externalId;
}
if (null !== $model->combinedTo->company->customer->type) {
    $jsonData["combinedTo"]["company"]["customer"]["type"] = $model->combinedTo->company->customer->type;
}

if (0 === \count($jsonData["combinedTo"]["company"]["customer"])) {
    $jsonData["combinedTo"]["company"]["customer"] = $emptyObject;
}

}
if (null !== $model->combinedTo->company->contragent) {
    $jsonData["combinedTo"]["company"]["contragent"] = [];
if (null !== $model->combinedTo->company->contragent->contragentType) {
    $jsonData["combinedTo"]["company"]["contragent"]["contragentType"] = $model->combinedTo->company->contragent->contragentType;
}
if (null !== $model->combinedTo->company->contragent->legalName) {
    $jsonData["combinedTo"]["company"]["contragent"]["legalName"] = $model->combinedTo->company->contragent->legalName;
}
if (null !== $model->combinedTo->company->contragent->legalAddress) {
    $jsonData["combinedTo"]["company"]["contragent"]["legalAddress"] = $model->combinedTo->company->contragent->legalAddress;
}
if (null !== $model->combinedTo->company->contragent->INN) {
    $jsonData["combinedTo"]["company"]["contragent"]["INN"] = $model->combinedTo->company->contragent->INN;
}
if (null !== $model->combinedTo->company->contragent->OKPO) {
    $jsonData["combinedTo"]["company"]["contragent"]["OKPO"] = $model->combinedTo->company->contragent->OKPO;
}
if (null !== $model->combinedTo->company->contragent->KPP) {
    $jsonData["combinedTo"]["company"]["contragent"]["KPP"] = $model->combinedTo->company->contragent->KPP;
}
if (null !== $model->combinedTo->company->contragent->OGRN) {
    $jsonData["combinedTo"]["company"]["contragent"]["OGRN"] = $model->combinedTo->company->contragent->OGRN;
}
if (null !== $model->combinedTo->company->contragent->OGRNIP) {
    $jsonData["combinedTo"]["company"]["contragent"]["OGRNIP"] = $model->combinedTo->company->contragent->OGRNIP;
}
if (null !== $model->combinedTo->company->contragent->certificateNumber) {
    $jsonData["combinedTo"]["company"]["contragent"]["certificateNumber"] = $model->combinedTo->company->contragent->certificateNumber;
}
if (null !== $model->combinedTo->company->contragent->certificateDate) {
    $jsonData["combinedTo"]["company"]["contragent"]["certificateDate"] = $model->combinedTo->company->contragent->certificateDate->format('Y-m-d H:i:s');;
}
if (null !== $model->combinedTo->company->contragent->BIK) {
    $jsonData["combinedTo"]["company"]["contragent"]["BIK"] = $model->combinedTo->company->contragent->BIK;
}
if (null !== $model->combinedTo->company->contragent->bank) {
    $jsonData["combinedTo"]["company"]["contragent"]["bank"] = $model->combinedTo->company->contragent->bank;
}
if (null !== $model->combinedTo->company->contragent->bankAddress) {
    $jsonData["combinedTo"]["company"]["contragent"]["bankAddress"] = $model->combinedTo->company->contragent->bankAddress;
}
if (null !== $model->combinedTo->company->contragent->corrAccount) {
    $jsonData["combinedTo"]["company"]["contragent"]["corrAccount"] = $model->combinedTo->company->contragent->corrAccount;
}
if (null !== $model->combinedTo->company->contragent->bankAccount) {
    $jsonData["combinedTo"]["company"]["contragent"]["bankAccount"] = $model->combinedTo->company->contragent->bankAccount;
}

if (0 === \count($jsonData["combinedTo"]["company"]["contragent"])) {
    $jsonData["combinedTo"]["company"]["contragent"] = $emptyObject;
}

}
if (null !== $model->combinedTo->company->address) {
    $jsonData["combinedTo"]["company"]["address"] = [];
if (null !== $model->combinedTo->company->address->id) {
    $jsonData["combinedTo"]["company"]["address"]["id"] = $model->combinedTo->company->address->id;
}
if (null !== $model->combinedTo->company->address->name) {
    $jsonData["combinedTo"]["company"]["address"]["name"] = $model->combinedTo->company->address->name;
}
if (null !== $model->combinedTo->company->address->isMain) {
    $jsonData["combinedTo"]["company"]["address"]["isMain"] = $model->combinedTo->company->address->isMain;
}
if (null !== $model->combinedTo->company->address->index) {
    $jsonData["combinedTo"]["company"]["address"]["index"] = $model->combinedTo->company->address->index;
}
if (null !== $model->combinedTo->company->address->countryIso) {
    $jsonData["combinedTo"]["company"]["address"]["countryIso"] = $model->combinedTo->company->address->countryIso;
}
if (null !== $model->combinedTo->company->address->region) {
    $jsonData["combinedTo"]["company"]["address"]["region"] = $model->combinedTo->company->address->region;
}
if (null !== $model->combinedTo->company->address->regionId) {
    $jsonData["combinedTo"]["company"]["address"]["regionId"] = $model->combinedTo->company->address->regionId;
}
if (null !== $model->combinedTo->company->address->city) {
    $jsonData["combinedTo"]["company"]["address"]["city"] = $model->combinedTo->company->address->city;
}
if (null !== $model->combinedTo->company->address->cityId) {
    $jsonData["combinedTo"]["company"]["address"]["cityId"] = $model->combinedTo->company->address->cityId;
}
if (null !== $model->combinedTo->company->address->cityType) {
    $jsonData["combinedTo"]["company"]["address"]["cityType"] = $model->combinedTo->company->address->cityType;
}
if (null !== $model->combinedTo->company->address->street) {
    $jsonData["combinedTo"]["company"]["address"]["street"] = $model->combinedTo->company->address->street;
}
if (null !== $model->combinedTo->company->address->streetId) {
    $jsonData["combinedTo"]["company"]["address"]["streetId"] = $model->combinedTo->company->address->streetId;
}
if (null !== $model->combinedTo->company->address->streetType) {
    $jsonData["combinedTo"]["company"]["address"]["streetType"] = $model->combinedTo->company->address->streetType;
}
if (null !== $model->combinedTo->company->address->building) {
    $jsonData["combinedTo"]["company"]["address"]["building"] = $model->combinedTo->company->address->building;
}
if (null !== $model->combinedTo->company->address->flat) {
    $jsonData["combinedTo"]["company"]["address"]["flat"] = $model->combinedTo->company->address->flat;
}
if (null !== $model->combinedTo->company->address->floor) {
    $jsonData["combinedTo"]["company"]["address"]["floor"] = $model->combinedTo->company->address->floor;
}
if (null !== $model->combinedTo->company->address->block) {
    $jsonData["combinedTo"]["company"]["address"]["block"] = $model->combinedTo->company->address->block;
}
if (null !== $model->combinedTo->company->address->house) {
    $jsonData["combinedTo"]["company"]["address"]["house"] = $model->combinedTo->company->address->house;
}
if (null !== $model->combinedTo->company->address->housing) {
    $jsonData["combinedTo"]["company"]["address"]["housing"] = $model->combinedTo->company->address->housing;
}
if (null !== $model->combinedTo->company->address->metro) {
    $jsonData["combinedTo"]["company"]["address"]["metro"] = $model->combinedTo->company->address->metro;
}
if (null !== $model->combinedTo->company->address->notes) {
    $jsonData["combinedTo"]["company"]["address"]["notes"] = $model->combinedTo->company->address->notes;
}
if (null !== $model->combinedTo->company->address->text) {
    $jsonData["combinedTo"]["company"]["address"]["text"] = $model->combinedTo->company->address->text;
}
if (null !== $model->combinedTo->company->address->externalId) {
    $jsonData["combinedTo"]["company"]["address"]["externalId"] = $model->combinedTo->company->address->externalId;
}

if (0 === \count($jsonData["combinedTo"]["company"]["address"])) {
    $jsonData["combinedTo"]["company"]["address"] = $emptyObject;
}

}
if (null !== $model->combinedTo->company->customFields) {
    $jsonData["combinedTo"]["company"]["customFields"] = [];
foreach (array_keys($model->combinedTo->company->customFields) as $index41) {
    $jsonData["combinedTo"]["company"]["customFields"] = $model->combinedTo->company->customFields;
}

}
if (null !== $model->combinedTo->company->marginSumm) {
    $jsonData["combinedTo"]["company"]["marginSumm"] = $model->combinedTo->company->marginSumm;
}
if (null !== $model->combinedTo->company->totalSumm) {
    $jsonData["combinedTo"]["company"]["totalSumm"] = $model->combinedTo->company->totalSumm;
}
if (null !== $model->combinedTo->company->averageSumm) {
    $jsonData["combinedTo"]["company"]["averageSumm"] = $model->combinedTo->company->averageSumm;
}
if (null !== $model->combinedTo->company->ordersCount) {
    $jsonData["combinedTo"]["company"]["ordersCount"] = $model->combinedTo->company->ordersCount;
}
if (null !== $model->combinedTo->company->costSumm) {
    $jsonData["combinedTo"]["company"]["costSumm"] = $model->combinedTo->company->costSumm;
}

if (0 === \count($jsonData["combinedTo"]["company"])) {
    $jsonData["combinedTo"]["company"] = $emptyObject;
}

}
if (null !== $model->combinedTo->contragent) {
    $jsonData["combinedTo"]["contragent"] = [];
if (null !== $model->combinedTo->contragent->contragentType) {
    $jsonData["combinedTo"]["contragent"]["contragentType"] = $model->combinedTo->contragent->contragentType;
}
if (null !== $model->combinedTo->contragent->legalName) {
    $jsonData["combinedTo"]["contragent"]["legalName"] = $model->combinedTo->contragent->legalName;
}
if (null !== $model->combinedTo->contragent->legalAddress) {
    $jsonData["combinedTo"]["contragent"]["legalAddress"] = $model->combinedTo->contragent->legalAddress;
}
if (null !== $model->combinedTo->contragent->INN) {
    $jsonData["combinedTo"]["contragent"]["INN"] = $model->combinedTo->contragent->INN;
}
if (null !== $model->combinedTo->contragent->OKPO) {
    $jsonData["combinedTo"]["contragent"]["OKPO"] = $model->combinedTo->contragent->OKPO;
}
if (null !== $model->combinedTo->contragent->KPP) {
    $jsonData["combinedTo"]["contragent"]["KPP"] = $model->combinedTo->contragent->KPP;
}
if (null !== $model->combinedTo->contragent->OGRN) {
    $jsonData["combinedTo"]["contragent"]["OGRN"] = $model->combinedTo->contragent->OGRN;
}
if (null !== $model->combinedTo->contragent->OGRNIP) {
    $jsonData["combinedTo"]["contragent"]["OGRNIP"] = $model->combinedTo->contragent->OGRNIP;
}
if (null !== $model->combinedTo->contragent->certificateNumber) {
    $jsonData["combinedTo"]["contragent"]["certificateNumber"] = $model->combinedTo->contragent->certificateNumber;
}
if (null !== $model->combinedTo->contragent->certificateDate) {
    $jsonData["combinedTo"]["contragent"]["certificateDate"] = $model->combinedTo->contragent->certificateDate->format('Y-m-d H:i:s');;
}
if (null !== $model->combinedTo->contragent->BIK) {
    $jsonData["combinedTo"]["contragent"]["BIK"] = $model->combinedTo->contragent->BIK;
}
if (null !== $model->combinedTo->contragent->bank) {
    $jsonData["combinedTo"]["contragent"]["bank"] = $model->combinedTo->contragent->bank;
}
if (null !== $model->combinedTo->contragent->bankAddress) {
    $jsonData["combinedTo"]["contragent"]["bankAddress"] = $model->combinedTo->contragent->bankAddress;
}
if (null !== $model->combinedTo->contragent->corrAccount) {
    $jsonData["combinedTo"]["contragent"]["corrAccount"] = $model->combinedTo->contragent->corrAccount;
}
if (null !== $model->combinedTo->contragent->bankAccount) {
    $jsonData["combinedTo"]["contragent"]["bankAccount"] = $model->combinedTo->contragent->bankAccount;
}

if (0 === \count($jsonData["combinedTo"]["contragent"])) {
    $jsonData["combinedTo"]["contragent"] = $emptyObject;
}

}
if (null !== $model->combinedTo->delivery) {
    $jsonData["combinedTo"]["delivery"] = [];
if (null !== $model->combinedTo->delivery->code) {
    $jsonData["combinedTo"]["delivery"]["code"] = $model->combinedTo->delivery->code;
}
if (null !== $model->combinedTo->delivery->integrationCode) {
    $jsonData["combinedTo"]["delivery"]["integrationCode"] = $model->combinedTo->delivery->integrationCode;
}
if (null !== $model->combinedTo->delivery->data) {
    $jsonData["combinedTo"]["delivery"]["data"] = [];
if (null !== $model->combinedTo->delivery->data->externalId) {
    $jsonData["combinedTo"]["delivery"]["data"]["externalId"] = $model->combinedTo->delivery->data->externalId;
}
if (null !== $model->combinedTo->delivery->data->trackNumber) {
    $jsonData["combinedTo"]["delivery"]["data"]["trackNumber"] = $model->combinedTo->delivery->data->trackNumber;
}
if (null !== $model->combinedTo->delivery->data->status) {
    $jsonData["combinedTo"]["delivery"]["data"]["status"] = $model->combinedTo->delivery->data->status;
}
if (null !== $model->combinedTo->delivery->data->locked) {
    $jsonData["combinedTo"]["delivery"]["data"]["locked"] = $model->combinedTo->delivery->data->locked;
}
if (null !== $model->combinedTo->delivery->data->pickuppointAddress) {
    $jsonData["combinedTo"]["delivery"]["data"]["pickuppointAddress"] = $model->combinedTo->delivery->data->pickuppointAddress;
}
if (null !== $model->combinedTo->delivery->data->days) {
    $jsonData["combinedTo"]["delivery"]["data"]["days"] = $model->combinedTo->delivery->data->days;
}
if (null !== $model->combinedTo->delivery->data->statusText) {
    $jsonData["combinedTo"]["delivery"]["data"]["statusText"] = $model->combinedTo->delivery->data->statusText;
}
if (null !== $model->combinedTo->delivery->data->statusDate) {
    $jsonData["combinedTo"]["delivery"]["data"]["statusDate"] = $model->combinedTo->delivery->data->statusDate->format('Y-m-d');;
}
if (null !== $model->combinedTo->delivery->data->tariff) {
    $jsonData["combinedTo"]["delivery"]["data"]["tariff"] = $model->combinedTo->delivery->data->tariff;
}
if (null !== $model->combinedTo->delivery->data->tariffName) {
    $jsonData["combinedTo"]["delivery"]["data"]["tariffName"] = $model->combinedTo->delivery->data->tariffName;
}
if (null !== $model->combinedTo->delivery->data->pickuppointId) {
    $jsonData["combinedTo"]["delivery"]["data"]["pickuppointId"] = $model->combinedTo->delivery->data->pickuppointId;
}
if (null !== $model->combinedTo->delivery->data->pickuppointSchedule) {
    $jsonData["combinedTo"]["delivery"]["data"]["pickuppointSchedule"] = $model->combinedTo->delivery->data->pickuppointSchedule;
}
if (null !== $model->combinedTo->delivery->data->pickuppointPhone) {
    $jsonData["combinedTo"]["delivery"]["data"]["pickuppointPhone"] = $model->combinedTo->delivery->data->pickuppointPhone;
}
if (null !== $model->combinedTo->delivery->data->payerType) {
    $jsonData["combinedTo"]["delivery"]["data"]["payerType"] = $model->combinedTo->delivery->data->payerType;
}
if (null !== $model->combinedTo->delivery->data->statusComment) {
    $jsonData["combinedTo"]["delivery"]["data"]["statusComment"] = $model->combinedTo->delivery->data->statusComment;
}
if (null !== $model->combinedTo->delivery->data->cost) {
    $jsonData["combinedTo"]["delivery"]["data"]["cost"] = $model->combinedTo->delivery->data->cost;
}
if (null !== $model->combinedTo->delivery->data->minTerm) {
    $jsonData["combinedTo"]["delivery"]["data"]["minTerm"] = $model->combinedTo->delivery->data->minTerm;
}
if (null !== $model->combinedTo->delivery->data->maxTerm) {
    $jsonData["combinedTo"]["delivery"]["data"]["maxTerm"] = $model->combinedTo->delivery->data->maxTerm;
}
if (null !== $model->combinedTo->delivery->data->shipmentpointId) {
    $jsonData["combinedTo"]["delivery"]["data"]["shipmentpointId"] = $model->combinedTo->delivery->data->shipmentpointId;
}
if (null !== $model->combinedTo->delivery->data->shipmentpointName) {
    $jsonData["combinedTo"]["delivery"]["data"]["shipmentpointName"] = $model->combinedTo->delivery->data->shipmentpointName;
}
if (null !== $model->combinedTo->delivery->data->shipmentpointAddress) {
    $jsonData["combinedTo"]["delivery"]["data"]["shipmentpointAddress"] = $model->combinedTo->delivery->data->shipmentpointAddress;
}
if (null !== $model->combinedTo->delivery->data->shipmentpointSchedule) {
    $jsonData["combinedTo"]["delivery"]["data"]["shipmentpointSchedule"] = $model->combinedTo->delivery->data->shipmentpointSchedule;
}
if (null !== $model->combinedTo->delivery->data->shipmentpointPhone) {
    $jsonData["combinedTo"]["delivery"]["data"]["shipmentpointPhone"] = $model->combinedTo->delivery->data->shipmentpointPhone;
}
if (null !== $model->combinedTo->delivery->data->shipmentpointCoordinateLatitude) {
    $jsonData["combinedTo"]["delivery"]["data"]["shipmentpointCoordinateLatitude"] = $model->combinedTo->delivery->data->shipmentpointCoordinateLatitude;
}
if (null !== $model->combinedTo->delivery->data->shipmentpointCoordinateLongitude) {
    $jsonData["combinedTo"]["delivery"]["data"]["shipmentpointCoordinateLongitude"] = $model->combinedTo->delivery->data->shipmentpointCoordinateLongitude;
}
if (null !== $model->combinedTo->delivery->data->pickuppointName) {
    $jsonData["combinedTo"]["delivery"]["data"]["pickuppointName"] = $model->combinedTo->delivery->data->pickuppointName;
}
if (null !== $model->combinedTo->delivery->data->pickuppointCoordinateLatitude) {
    $jsonData["combinedTo"]["delivery"]["data"]["pickuppointCoordinateLatitude"] = $model->combinedTo->delivery->data->pickuppointCoordinateLatitude;
}
if (null !== $model->combinedTo->delivery->data->pickuppointCoordinateLongitude) {
    $jsonData["combinedTo"]["delivery"]["data"]["pickuppointCoordinateLongitude"] = $model->combinedTo->delivery->data->pickuppointCoordinateLongitude;
}
if (null !== $model->combinedTo->delivery->data->extraData) {
    $jsonData["combinedTo"]["delivery"]["data"]["extraData"] = [];
foreach (array_keys($model->combinedTo->delivery->data->extraData) as $index47) {
    $jsonData["combinedTo"]["delivery"]["data"]["extraData"] = $model->combinedTo->delivery->data->extraData;
}

}
if (null !== $model->combinedTo->delivery->data->packages) {
    $jsonData["combinedTo"]["delivery"]["data"]["packages"] = [];
foreach (array_keys($model->combinedTo->delivery->data->packages) as $index46) {
    $jsonData["combinedTo"]["delivery"]["data"]["packages"][$index46] = [];
if (null !== $model->combinedTo->delivery->data->packages[$index46]->packageId) {
    $jsonData["combinedTo"]["delivery"]["data"]["packages"][$index46]["packageId"] = $model->combinedTo->delivery->data->packages[$index46]->packageId;
}
if (null !== $model->combinedTo->delivery->data->packages[$index46]->weight) {
    $jsonData["combinedTo"]["delivery"]["data"]["packages"][$index46]["weight"] = $model->combinedTo->delivery->data->packages[$index46]->weight;
}
if (null !== $model->combinedTo->delivery->data->packages[$index46]->length) {
    $jsonData["combinedTo"]["delivery"]["data"]["packages"][$index46]["length"] = $model->combinedTo->delivery->data->packages[$index46]->length;
}
if (null !== $model->combinedTo->delivery->data->packages[$index46]->width) {
    $jsonData["combinedTo"]["delivery"]["data"]["packages"][$index46]["width"] = $model->combinedTo->delivery->data->packages[$index46]->width;
}
if (null !== $model->combinedTo->delivery->data->packages[$index46]->height) {
    $jsonData["combinedTo"]["delivery"]["data"]["packages"][$index46]["height"] = $model->combinedTo->delivery->data->packages[$index46]->height;
}
if (null !== $model->combinedTo->delivery->data->packages[$index46]->items) {
    $jsonData["combinedTo"]["delivery"]["data"]["packages"][$index46]["items"] = [];
foreach (array_keys($model->combinedTo->delivery->data->packages[$index46]->items) as $index65) {
    $jsonData["combinedTo"]["delivery"]["data"]["packages"][$index46]["items"][$index65] = [];
if (null !== $model->combinedTo->delivery->data->packages[$index46]->items[$index65]->orderProduct) {
    $jsonData["combinedTo"]["delivery"]["data"]["packages"][$index46]["items"][$index65]["orderProduct"] = [];
if (null !== $model->combinedTo->delivery->data->packages[$index46]->items[$index65]->orderProduct->id) {
    $jsonData["combinedTo"]["delivery"]["data"]["packages"][$index46]["items"][$index65]["orderProduct"]["id"] = $model->combinedTo->delivery->data->packages[$index46]->items[$index65]->orderProduct->id;
}
if (null !== $model->combinedTo->delivery->data->packages[$index46]->items[$index65]->orderProduct->externalId) {
    $jsonData["combinedTo"]["delivery"]["data"]["packages"][$index46]["items"][$index65]["orderProduct"]["externalId"] = $model->combinedTo->delivery->data->packages[$index46]->items[$index65]->orderProduct->externalId;
}
if (null !== $model->combinedTo->delivery->data->packages[$index46]->items[$index65]->orderProduct->externalIds) {
    $jsonData["combinedTo"]["delivery"]["data"]["packages"][$index46]["items"][$index65]["orderProduct"]["externalIds"] = [];
foreach (array_keys($model->combinedTo->delivery->data->packages[$index46]->items[$index65]->orderProduct->externalIds) as $index106) {
    $jsonData["combinedTo"]["delivery"]["data"]["packages"][$index46]["items"][$index65]["orderProduct"]["externalIds"][$index106] = [];
if (null !== $model->combinedTo->delivery->data->packages[$index46]->items[$index65]->orderProduct->externalIds[$index106]->code) {
    $jsonData["combinedTo"]["delivery"]["data"]["packages"][$index46]["items"][$index65]["orderProduct"]["externalIds"][$index106]["code"] = $model->combinedTo->delivery->data->packages[$index46]->items[$index65]->orderProduct->externalIds[$index106]->code;
}
if (null !== $model->combinedTo->delivery->data->packages[$index46]->items[$index65]->orderProduct->externalIds[$index106]->value) {
    $jsonData["combinedTo"]["delivery"]["data"]["packages"][$index46]["items"][$index65]["orderProduct"]["externalIds"][$index106]["value"] = $model->combinedTo->delivery->data->packages[$index46]->items[$index65]->orderProduct->externalIds[$index106]->value;
}

if (0 === \count($jsonData["combinedTo"]["delivery"]["data"]["packages"][$index46]["items"][$index65]["orderProduct"]["externalIds"][$index106])) {
    $jsonData["combinedTo"]["delivery"]["data"]["packages"][$index46]["items"][$index65]["orderProduct"]["externalIds"][$index106] = $emptyObject;
}

}

}

if (0 === \count($jsonData["combinedTo"]["delivery"]["data"]["packages"][$index46]["items"][$index65]["orderProduct"])) {
    $jsonData["combinedTo"]["delivery"]["data"]["packages"][$index46]["items"][$index65]["orderProduct"] = $emptyObject;
}

}
if (null !== $model->combinedTo->delivery->data->packages[$index46]->items[$index65]->quantity) {
    $jsonData["combinedTo"]["delivery"]["data"]["packages"][$index46]["items"][$index65]["quantity"] = $model->combinedTo->delivery->data->packages[$index46]->items[$index65]->quantity;
}

if (0 === \count($jsonData["combinedTo"]["delivery"]["data"]["packages"][$index46]["items"][$index65])) {
    $jsonData["combinedTo"]["delivery"]["data"]["packages"][$index46]["items"][$index65] = $emptyObject;
}

}

}

if (0 === \count($jsonData["combinedTo"]["delivery"]["data"]["packages"][$index46])) {
    $jsonData["combinedTo"]["delivery"]["data"]["packages"][$index46] = $emptyObject;
}

}

}
if (null !== $model->combinedTo->delivery->data->returnExternalId) {
    $jsonData["combinedTo"]["delivery"]["data"]["returnExternalId"] = $model->combinedTo->delivery->data->returnExternalId;
}
if (null !== $model->combinedTo->delivery->data->deliveryName) {
    $jsonData["combinedTo"]["delivery"]["data"]["deliveryName"] = $model->combinedTo->delivery->data->deliveryName;
}
if (null !== $model->combinedTo->delivery->data->price) {
    $jsonData["combinedTo"]["delivery"]["data"]["price"] = $model->combinedTo->delivery->data->price;
}
if (null !== $model->combinedTo->delivery->data->insurancePrice) {
    $jsonData["combinedTo"]["delivery"]["data"]["insurancePrice"] = $model->combinedTo->delivery->data->insurancePrice;
}
if (null !== $model->combinedTo->delivery->data->tariffType) {
    $jsonData["combinedTo"]["delivery"]["data"]["tariffType"] = $model->combinedTo->delivery->data->tariffType;
}
if (null !== $model->combinedTo->delivery->data->receiverCity) {
    $jsonData["combinedTo"]["delivery"]["data"]["receiverCity"] = $model->combinedTo->delivery->data->receiverCity;
}
if (null !== $model->combinedTo->delivery->data->services) {
    $jsonData["combinedTo"]["delivery"]["data"]["services"] = [];
foreach (array_keys($model->combinedTo->delivery->data->services) as $index46) {
    $jsonData["combinedTo"]["delivery"]["data"]["services"] = $model->combinedTo->delivery->data->services;
}

}
if (null !== $model->combinedTo->delivery->data->packageNumber) {
    $jsonData["combinedTo"]["delivery"]["data"]["packageNumber"] = $model->combinedTo->delivery->data->packageNumber;
}
if (null !== $model->combinedTo->delivery->data->comment) {
    $jsonData["combinedTo"]["delivery"]["data"]["comment"] = $model->combinedTo->delivery->data->comment;
}
if (null !== $model->combinedTo->delivery->data->deliveryCode) {
    $jsonData["combinedTo"]["delivery"]["data"]["deliveryCode"] = $model->combinedTo->delivery->data->deliveryCode;
}
if (null !== $model->combinedTo->delivery->data->notes) {
    $jsonData["combinedTo"]["delivery"]["data"]["notes"] = $model->combinedTo->delivery->data->notes;
}
if (null !== $model->combinedTo->delivery->data->id) {
    $jsonData["combinedTo"]["delivery"]["data"]["id"] = $model->combinedTo->delivery->data->id;
}
if (null !== $model->combinedTo->delivery->data->firstName) {
    $jsonData["combinedTo"]["delivery"]["data"]["firstName"] = $model->combinedTo->delivery->data->firstName;
}
if (null !== $model->combinedTo->delivery->data->lastName) {
    $jsonData["combinedTo"]["delivery"]["data"]["lastName"] = $model->combinedTo->delivery->data->lastName;
}
if (null !== $model->combinedTo->delivery->data->patronymic) {
    $jsonData["combinedTo"]["delivery"]["data"]["patronymic"] = $model->combinedTo->delivery->data->patronymic;
}
if (null !== $model->combinedTo->delivery->data->active) {
    $jsonData["combinedTo"]["delivery"]["data"]["active"] = $model->combinedTo->delivery->data->active;
}
if (null !== $model->combinedTo->delivery->data->email) {
    $jsonData["combinedTo"]["delivery"]["data"]["email"] = $model->combinedTo->delivery->data->email;
}
if (null !== $model->combinedTo->delivery->data->phone) {
    $jsonData["combinedTo"]["delivery"]["data"]["phone"] = [];
if (null !== $model->combinedTo->delivery->data->phone->number) {
    $jsonData["combinedTo"]["delivery"]["data"]["phone"]["number"] = $model->combinedTo->delivery->data->phone->number;
}

if (0 === \count($jsonData["combinedTo"]["delivery"]["data"]["phone"])) {
    $jsonData["combinedTo"]["delivery"]["data"]["phone"] = $emptyObject;
}

}
if (null !== $model->combinedTo->delivery->data->description) {
    $jsonData["combinedTo"]["delivery"]["data"]["description"] = $model->combinedTo->delivery->data->description;
}
if (null !== $model->combinedTo->delivery->data->courierId) {
    $jsonData["combinedTo"]["delivery"]["data"]["courierId"] = $model->combinedTo->delivery->data->courierId;
}
if (null !== $model->combinedTo->delivery->data->serviceType) {
    $jsonData["combinedTo"]["delivery"]["data"]["serviceType"] = $model->combinedTo->delivery->data->serviceType;
}
if (null !== $model->combinedTo->delivery->data->pickuppoint) {
    $jsonData["combinedTo"]["delivery"]["data"]["pickuppoint"] = $model->combinedTo->delivery->data->pickuppoint;
}
if (null !== $model->combinedTo->delivery->data->receiverWarehouseTypeRef) {
    $jsonData["combinedTo"]["delivery"]["data"]["receiverWarehouseTypeRef"] = $model->combinedTo->delivery->data->receiverWarehouseTypeRef;
}
if (null !== $model->combinedTo->delivery->data->statusName) {
    $jsonData["combinedTo"]["delivery"]["data"]["statusName"] = $model->combinedTo->delivery->data->statusName;
}
if (null !== $model->combinedTo->delivery->data->receiverCityRef) {
    $jsonData["combinedTo"]["delivery"]["data"]["receiverCityRef"] = $model->combinedTo->delivery->data->receiverCityRef;
}
if (null !== $model->combinedTo->delivery->data->receiverStreet) {
    $jsonData["combinedTo"]["delivery"]["data"]["receiverStreet"] = $model->combinedTo->delivery->data->receiverStreet;
}
if (null !== $model->combinedTo->delivery->data->receiverStreetRef) {
    $jsonData["combinedTo"]["delivery"]["data"]["receiverStreetRef"] = $model->combinedTo->delivery->data->receiverStreetRef;
}
if (null !== $model->combinedTo->delivery->data->seatsAmount) {
    $jsonData["combinedTo"]["delivery"]["data"]["seatsAmount"] = $model->combinedTo->delivery->data->seatsAmount;
}
if (null !== $model->combinedTo->delivery->data->cargoType) {
    $jsonData["combinedTo"]["delivery"]["data"]["cargoType"] = $model->combinedTo->delivery->data->cargoType;
}
if (null !== $model->combinedTo->delivery->data->cargoDescription) {
    $jsonData["combinedTo"]["delivery"]["data"]["cargoDescription"] = $model->combinedTo->delivery->data->cargoDescription;
}
if (null !== $model->combinedTo->delivery->data->cashPayerType) {
    $jsonData["combinedTo"]["delivery"]["data"]["cashPayerType"] = $model->combinedTo->delivery->data->cashPayerType;
}
if (null !== $model->combinedTo->delivery->data->paymentForm) {
    $jsonData["combinedTo"]["delivery"]["data"]["paymentForm"] = $model->combinedTo->delivery->data->paymentForm;
}
if (null !== $model->combinedTo->delivery->data->ownershipForm) {
    $jsonData["combinedTo"]["delivery"]["data"]["ownershipForm"] = $model->combinedTo->delivery->data->ownershipForm;
}
if (null !== $model->combinedTo->delivery->data->accompanyingDocument) {
    $jsonData["combinedTo"]["delivery"]["data"]["accompanyingDocument"] = $model->combinedTo->delivery->data->accompanyingDocument;
}
if (null !== $model->combinedTo->delivery->data->preferredDeliveryDate) {
    $jsonData["combinedTo"]["delivery"]["data"]["preferredDeliveryDate"] = $model->combinedTo->delivery->data->preferredDeliveryDate->format('Y-m-d H:i:s');;
}
if (null !== $model->combinedTo->delivery->data->timeInterval) {
    $jsonData["combinedTo"]["delivery"]["data"]["timeInterval"] = $model->combinedTo->delivery->data->timeInterval;
}
if (null !== $model->combinedTo->delivery->data->saturdayDelivery) {
    $jsonData["combinedTo"]["delivery"]["data"]["saturdayDelivery"] = $model->combinedTo->delivery->data->saturdayDelivery;
}
if (null !== $model->combinedTo->delivery->data->deliveryDate) {
    $jsonData["combinedTo"]["delivery"]["data"]["deliveryDate"] = $model->combinedTo->delivery->data->deliveryDate;
}
if (null !== $model->combinedTo->delivery->data->denieReason) {
    $jsonData["combinedTo"]["delivery"]["data"]["denieReason"] = $model->combinedTo->delivery->data->denieReason;
}
if (null !== $model->combinedTo->delivery->data->backwardDelivery) {
    $jsonData["combinedTo"]["delivery"]["data"]["backwardDelivery"] = $model->combinedTo->delivery->data->backwardDelivery;
}
if (null !== $model->combinedTo->delivery->data->backwardDeliveryCargoType) {
    $jsonData["combinedTo"]["delivery"]["data"]["backwardDeliveryCargoType"] = $model->combinedTo->delivery->data->backwardDeliveryCargoType;
}
if (null !== $model->combinedTo->delivery->data->backwardDeliveryPayerType) {
    $jsonData["combinedTo"]["delivery"]["data"]["backwardDeliveryPayerType"] = $model->combinedTo->delivery->data->backwardDeliveryPayerType;
}
if (null !== $model->combinedTo->delivery->data->backwardDeliveryRedeliveryString) {
    $jsonData["combinedTo"]["delivery"]["data"]["backwardDeliveryRedeliveryString"] = $model->combinedTo->delivery->data->backwardDeliveryRedeliveryString;
}
if (null !== $model->combinedTo->delivery->data->afterpaymentOnGoodsCost) {
    $jsonData["combinedTo"]["delivery"]["data"]["afterpaymentOnGoodsCost"] = $model->combinedTo->delivery->data->afterpaymentOnGoodsCost;
}
if (null !== $model->combinedTo->delivery->data->declaredValue) {
    $jsonData["combinedTo"]["delivery"]["data"]["declaredValue"] = $model->combinedTo->delivery->data->declaredValue;
}
if (null !== $model->combinedTo->delivery->data->sendDate) {
    $jsonData["combinedTo"]["delivery"]["data"]["sendDate"] = $model->combinedTo->delivery->data->sendDate->format('Y-m-d H:i:s');;
}
if (null !== $model->combinedTo->delivery->data->deliveryType) {
    $jsonData["combinedTo"]["delivery"]["data"]["deliveryType"] = $model->combinedTo->delivery->data->deliveryType;
}
if (null !== $model->combinedTo->delivery->data->pickupType) {
    $jsonData["combinedTo"]["delivery"]["data"]["pickupType"] = $model->combinedTo->delivery->data->pickupType;
}
if (null !== $model->combinedTo->delivery->data->pickuppointDescription) {
    $jsonData["combinedTo"]["delivery"]["data"]["pickuppointDescription"] = $model->combinedTo->delivery->data->pickuppointDescription;
}
if (null !== $model->combinedTo->delivery->data->placesCount) {
    $jsonData["combinedTo"]["delivery"]["data"]["placesCount"] = $model->combinedTo->delivery->data->placesCount;
}
if (null !== $model->combinedTo->delivery->data->service) {
    $jsonData["combinedTo"]["delivery"]["data"]["service"] = $model->combinedTo->delivery->data->service;
}

if (0 === \count($jsonData["combinedTo"]["delivery"]["data"])) {
    $jsonData["combinedTo"]["delivery"]["data"] = $emptyObject;
}

}
if (null !== $model->combinedTo->delivery->service) {
    $jsonData["combinedTo"]["delivery"]["service"] = [];
if (null !== $model->combinedTo->delivery->service->name) {
    $jsonData["combinedTo"]["delivery"]["service"]["name"] = $model->combinedTo->delivery->service->name;
}
if (null !== $model->combinedTo->delivery->service->code) {
    $jsonData["combinedTo"]["delivery"]["service"]["code"] = $model->combinedTo->delivery->service->code;
}
if (null !== $model->combinedTo->delivery->service->active) {
    $jsonData["combinedTo"]["delivery"]["service"]["active"] = $model->combinedTo->delivery->service->active;
}

if (0 === \count($jsonData["combinedTo"]["delivery"]["service"])) {
    $jsonData["combinedTo"]["delivery"]["service"] = $emptyObject;
}

}
if (null !== $model->combinedTo->delivery->cost) {
    $jsonData["combinedTo"]["delivery"]["cost"] = $model->combinedTo->delivery->cost;
}
if (null !== $model->combinedTo->delivery->netCost) {
    $jsonData["combinedTo"]["delivery"]["netCost"] = $model->combinedTo->delivery->netCost;
}
if (null !== $model->combinedTo->delivery->date) {
    $jsonData["combinedTo"]["delivery"]["date"] = $model->combinedTo->delivery->date->format('Y-m-d');;
}
if (null !== $model->combinedTo->delivery->time) {
    $jsonData["combinedTo"]["delivery"]["time"] = [];
if (null !== $model->combinedTo->delivery->time->from) {
    $jsonData["combinedTo"]["delivery"]["time"]["from"] = $model->combinedTo->delivery->time->from->format('H:i');;
}
if (null !== $model->combinedTo->delivery->time->to) {
    $jsonData["combinedTo"]["delivery"]["time"]["to"] = $model->combinedTo->delivery->time->to->format('H:i');;
}
if (null !== $model->combinedTo->delivery->time->custom) {
    $jsonData["combinedTo"]["delivery"]["time"]["custom"] = $model->combinedTo->delivery->time->custom;
}

if (0 === \count($jsonData["combinedTo"]["delivery"]["time"])) {
    $jsonData["combinedTo"]["delivery"]["time"] = $emptyObject;
}

}
if (null !== $model->combinedTo->delivery->address) {
    $jsonData["combinedTo"]["delivery"]["address"] = [];
if (null !== $model->combinedTo->delivery->address->id) {
    $jsonData["combinedTo"]["delivery"]["address"]["id"] = $model->combinedTo->delivery->address->id;
}
if (null !== $model->combinedTo->delivery->address->index) {
    $jsonData["combinedTo"]["delivery"]["address"]["index"] = $model->combinedTo->delivery->address->index;
}
if (null !== $model->combinedTo->delivery->address->countryIso) {
    $jsonData["combinedTo"]["delivery"]["address"]["countryIso"] = $model->combinedTo->delivery->address->countryIso;
}
if (null !== $model->combinedTo->delivery->address->region) {
    $jsonData["combinedTo"]["delivery"]["address"]["region"] = $model->combinedTo->delivery->address->region;
}
if (null !== $model->combinedTo->delivery->address->regionId) {
    $jsonData["combinedTo"]["delivery"]["address"]["regionId"] = $model->combinedTo->delivery->address->regionId;
}
if (null !== $model->combinedTo->delivery->address->city) {
    $jsonData["combinedTo"]["delivery"]["address"]["city"] = $model->combinedTo->delivery->address->city;
}
if (null !== $model->combinedTo->delivery->address->cityId) {
    $jsonData["combinedTo"]["delivery"]["address"]["cityId"] = $model->combinedTo->delivery->address->cityId;
}
if (null !== $model->combinedTo->delivery->address->cityType) {
    $jsonData["combinedTo"]["delivery"]["address"]["cityType"] = $model->combinedTo->delivery->address->cityType;
}
if (null !== $model->combinedTo->delivery->address->street) {
    $jsonData["combinedTo"]["delivery"]["address"]["street"] = $model->combinedTo->delivery->address->street;
}
if (null !== $model->combinedTo->delivery->address->streetId) {
    $jsonData["combinedTo"]["delivery"]["address"]["streetId"] = $model->combinedTo->delivery->address->streetId;
}
if (null !== $model->combinedTo->delivery->address->streetType) {
    $jsonData["combinedTo"]["delivery"]["address"]["streetType"] = $model->combinedTo->delivery->address->streetType;
}
if (null !== $model->combinedTo->delivery->address->building) {
    $jsonData["combinedTo"]["delivery"]["address"]["building"] = $model->combinedTo->delivery->address->building;
}
if (null !== $model->combinedTo->delivery->address->flat) {
    $jsonData["combinedTo"]["delivery"]["address"]["flat"] = $model->combinedTo->delivery->address->flat;
}
if (null !== $model->combinedTo->delivery->address->floor) {
    $jsonData["combinedTo"]["delivery"]["address"]["floor"] = $model->combinedTo->delivery->address->floor;
}
if (null !== $model->combinedTo->delivery->address->block) {
    $jsonData["combinedTo"]["delivery"]["address"]["block"] = $model->combinedTo->delivery->address->block;
}
if (null !== $model->combinedTo->delivery->address->house) {
    $jsonData["combinedTo"]["delivery"]["address"]["house"] = $model->combinedTo->delivery->address->house;
}
if (null !== $model->combinedTo->delivery->address->housing) {
    $jsonData["combinedTo"]["delivery"]["address"]["housing"] = $model->combinedTo->delivery->address->housing;
}
if (null !== $model->combinedTo->delivery->address->metro) {
    $jsonData["combinedTo"]["delivery"]["address"]["metro"] = $model->combinedTo->delivery->address->metro;
}
if (null !== $model->combinedTo->delivery->address->text) {
    $jsonData["combinedTo"]["delivery"]["address"]["text"] = $model->combinedTo->delivery->address->text;
}
if (null !== $model->combinedTo->delivery->address->notes) {
    $jsonData["combinedTo"]["delivery"]["address"]["notes"] = $model->combinedTo->delivery->address->notes;
}

if (0 === \count($jsonData["combinedTo"]["delivery"]["address"])) {
    $jsonData["combinedTo"]["delivery"]["address"] = $emptyObject;
}

}
if (null !== $model->combinedTo->delivery->vatRate) {
    $jsonData["combinedTo"]["delivery"]["vatRate"] = $model->combinedTo->delivery->vatRate;
}

if (0 === \count($jsonData["combinedTo"]["delivery"])) {
    $jsonData["combinedTo"]["delivery"] = $emptyObject;
}

}
if (null !== $model->combinedTo->marketplace) {
    $jsonData["combinedTo"]["marketplace"] = [];
if (null !== $model->combinedTo->marketplace->code) {
    $jsonData["combinedTo"]["marketplace"]["code"] = $model->combinedTo->marketplace->code;
}
if (null !== $model->combinedTo->marketplace->orderId) {
    $jsonData["combinedTo"]["marketplace"]["orderId"] = $model->combinedTo->marketplace->orderId;
}

if (0 === \count($jsonData["combinedTo"]["marketplace"])) {
    $jsonData["combinedTo"]["marketplace"] = $emptyObject;
}

}
if (null !== $model->combinedTo->site) {
    $jsonData["combinedTo"]["site"] = $model->combinedTo->site;
}
if (null !== $model->combinedTo->status) {
    $jsonData["combinedTo"]["status"] = $model->combinedTo->status;
}
if (null !== $model->combinedTo->statusComment) {
    $jsonData["combinedTo"]["statusComment"] = $model->combinedTo->statusComment;
}
if (null !== $model->combinedTo->source) {
    $jsonData["combinedTo"]["source"] = [];
if (null !== $model->combinedTo->source->source) {
    $jsonData["combinedTo"]["source"]["source"] = $model->combinedTo->source->source;
}
if (null !== $model->combinedTo->source->medium) {
    $jsonData["combinedTo"]["source"]["medium"] = $model->combinedTo->source->medium;
}
if (null !== $model->combinedTo->source->campaign) {
    $jsonData["combinedTo"]["source"]["campaign"] = $model->combinedTo->source->campaign;
}
if (null !== $model->combinedTo->source->keyword) {
    $jsonData["combinedTo"]["source"]["keyword"] = $model->combinedTo->source->keyword;
}
if (null !== $model->combinedTo->source->content) {
    $jsonData["combinedTo"]["source"]["content"] = $model->combinedTo->source->content;
}

if (0 === \count($jsonData["combinedTo"]["source"])) {
    $jsonData["combinedTo"]["source"] = $emptyObject;
}

}
if (null !== $model->combinedTo->items) {
    $jsonData["combinedTo"]["items"] = [];
foreach (array_keys($model->combinedTo->items) as $index23) {
    $jsonData["combinedTo"]["items"][$index23] = [];
if (null !== $model->combinedTo->items[$index23]->externalId) {
    $jsonData["combinedTo"]["items"][$index23]["externalId"] = $model->combinedTo->items[$index23]->externalId;
}
if (null !== $model->combinedTo->items[$index23]->markingCodes) {
    $jsonData["combinedTo"]["items"][$index23]["markingCodes"] = [];
foreach (array_keys($model->combinedTo->items[$index23]->markingCodes) as $index49) {
    $jsonData["combinedTo"]["items"][$index23]["markingCodes"] = $model->combinedTo->items[$index23]->markingCodes;
}

}
if (null !== $model->combinedTo->items[$index23]->id) {
    $jsonData["combinedTo"]["items"][$index23]["id"] = $model->combinedTo->items[$index23]->id;
}
if (null !== $model->combinedTo->items[$index23]->externalIds) {
    $jsonData["combinedTo"]["items"][$index23]["externalIds"] = [];
foreach (array_keys($model->combinedTo->items[$index23]->externalIds) as $index48) {
    $jsonData["combinedTo"]["items"][$index23]["externalIds"][$index48] = [];
if (null !== $model->combinedTo->items[$index23]->externalIds[$index48]->code) {
    $jsonData["combinedTo"]["items"][$index23]["externalIds"][$index48]["code"] = $model->combinedTo->items[$index23]->externalIds[$index48]->code;
}
if (null !== $model->combinedTo->items[$index23]->externalIds[$index48]->value) {
    $jsonData["combinedTo"]["items"][$index23]["externalIds"][$index48]["value"] = $model->combinedTo->items[$index23]->externalIds[$index48]->value;
}

if (0 === \count($jsonData["combinedTo"]["items"][$index23]["externalIds"][$index48])) {
    $jsonData["combinedTo"]["items"][$index23]["externalIds"][$index48] = $emptyObject;
}

}

}
if (null !== $model->combinedTo->items[$index23]->priceType) {
    $jsonData["combinedTo"]["items"][$index23]["priceType"] = [];
if (null !== $model->combinedTo->items[$index23]->priceType->code) {
    $jsonData["combinedTo"]["items"][$index23]["priceType"]["code"] = $model->combinedTo->items[$index23]->priceType->code;
}

if (0 === \count($jsonData["combinedTo"]["items"][$index23]["priceType"])) {
    $jsonData["combinedTo"]["items"][$index23]["priceType"] = $emptyObject;
}

}
if (null !== $model->combinedTo->items[$index23]->initialPrice) {
    $jsonData["combinedTo"]["items"][$index23]["initialPrice"] = $model->combinedTo->items[$index23]->initialPrice;
}
if (null !== $model->combinedTo->items[$index23]->discountManualAmount) {
    $jsonData["combinedTo"]["items"][$index23]["discountManualAmount"] = $model->combinedTo->items[$index23]->discountManualAmount;
}
if (null !== $model->combinedTo->items[$index23]->discountManualPercent) {
    $jsonData["combinedTo"]["items"][$index23]["discountManualPercent"] = $model->combinedTo->items[$index23]->discountManualPercent;
}
if (null !== $model->combinedTo->items[$index23]->discountTotal) {
    $jsonData["combinedTo"]["items"][$index23]["discountTotal"] = $model->combinedTo->items[$index23]->discountTotal;
}
if (null !== $model->combinedTo->items[$index23]->prices) {
    $jsonData["combinedTo"]["items"][$index23]["prices"] = [];
foreach (array_keys($model->combinedTo->items[$index23]->prices) as $index43) {
    $jsonData["combinedTo"]["items"][$index23]["prices"][$index43] = [];
if (null !== $model->combinedTo->items[$index23]->prices[$index43]->price) {
    $jsonData["combinedTo"]["items"][$index23]["prices"][$index43]["price"] = $model->combinedTo->items[$index23]->prices[$index43]->price;
}
if (null !== $model->combinedTo->items[$index23]->prices[$index43]->quantity) {
    $jsonData["combinedTo"]["items"][$index23]["prices"][$index43]["quantity"] = $model->combinedTo->items[$index23]->prices[$index43]->quantity;
}

if (0 === \count($jsonData["combinedTo"]["items"][$index23]["prices"][$index43])) {
    $jsonData["combinedTo"]["items"][$index23]["prices"][$index43] = $emptyObject;
}

}

}
if (null !== $model->combinedTo->items[$index23]->vatRate) {
    $jsonData["combinedTo"]["items"][$index23]["vatRate"] = $model->combinedTo->items[$index23]->vatRate;
}
if (null !== $model->combinedTo->items[$index23]->createdAt) {
    $jsonData["combinedTo"]["items"][$index23]["createdAt"] = $model->combinedTo->items[$index23]->createdAt->format('Y-m-d H:i:s');;
}
if (null !== $model->combinedTo->items[$index23]->quantity) {
    $jsonData["combinedTo"]["items"][$index23]["quantity"] = $model->combinedTo->items[$index23]->quantity;
}
if (null !== $model->combinedTo->items[$index23]->status) {
    $jsonData["combinedTo"]["items"][$index23]["status"] = $model->combinedTo->items[$index23]->status;
}
if (null !== $model->combinedTo->items[$index23]->comment) {
    $jsonData["combinedTo"]["items"][$index23]["comment"] = $model->combinedTo->items[$index23]->comment;
}
if (null !== $model->combinedTo->items[$index23]->offer) {
    $jsonData["combinedTo"]["items"][$index23]["offer"] = [];
if (null !== $model->combinedTo->items[$index23]->offer->displayName) {
    $jsonData["combinedTo"]["items"][$index23]["offer"]["displayName"] = $model->combinedTo->items[$index23]->offer->displayName;
}
if (null !== $model->combinedTo->items[$index23]->offer->id) {
    $jsonData["combinedTo"]["items"][$index23]["offer"]["id"] = $model->combinedTo->items[$index23]->offer->id;
}
if (null !== $model->combinedTo->items[$index23]->offer->externalId) {
    $jsonData["combinedTo"]["items"][$index23]["offer"]["externalId"] = $model->combinedTo->items[$index23]->offer->externalId;
}
if (null !== $model->combinedTo->items[$index23]->offer->xmlId) {
    $jsonData["combinedTo"]["items"][$index23]["offer"]["xmlId"] = $model->combinedTo->items[$index23]->offer->xmlId;
}
if (null !== $model->combinedTo->items[$index23]->offer->name) {
    $jsonData["combinedTo"]["items"][$index23]["offer"]["name"] = $model->combinedTo->items[$index23]->offer->name;
}
if (null !== $model->combinedTo->items[$index23]->offer->article) {
    $jsonData["combinedTo"]["items"][$index23]["offer"]["article"] = $model->combinedTo->items[$index23]->offer->article;
}
if (null !== $model->combinedTo->items[$index23]->offer->vatRate) {
    $jsonData["combinedTo"]["items"][$index23]["offer"]["vatRate"] = $model->combinedTo->items[$index23]->offer->vatRate;
}
if (null !== $model->combinedTo->items[$index23]->offer->unit) {
    $jsonData["combinedTo"]["items"][$index23]["offer"]["unit"] = [];
if (null !== $model->combinedTo->items[$index23]->offer->unit->code) {
    $jsonData["combinedTo"]["items"][$index23]["offer"]["unit"]["code"] = $model->combinedTo->items[$index23]->offer->unit->code;
}
if (null !== $model->combinedTo->items[$index23]->offer->unit->name) {
    $jsonData["combinedTo"]["items"][$index23]["offer"]["unit"]["name"] = $model->combinedTo->items[$index23]->offer->unit->name;
}
if (null !== $model->combinedTo->items[$index23]->offer->unit->sym) {
    $jsonData["combinedTo"]["items"][$index23]["offer"]["unit"]["sym"] = $model->combinedTo->items[$index23]->offer->unit->sym;
}

if (0 === \count($jsonData["combinedTo"]["items"][$index23]["offer"]["unit"])) {
    $jsonData["combinedTo"]["items"][$index23]["offer"]["unit"] = $emptyObject;
}

}
if (null !== $model->combinedTo->items[$index23]->offer->barcode) {
    $jsonData["combinedTo"]["items"][$index23]["offer"]["barcode"] = $model->combinedTo->items[$index23]->offer->barcode;
}
if (null !== $model->combinedTo->items[$index23]->offer->properties) {
    $jsonData["combinedTo"]["items"][$index23]["offer"]["properties"] = [];
foreach (array_keys($model->combinedTo->items[$index23]->offer->properties) as $index56) {
    $jsonData["combinedTo"]["items"][$index23]["offer"]["properties"] = $model->combinedTo->items[$index23]->offer->properties;
}

}

if (0 === \count($jsonData["combinedTo"]["items"][$index23]["offer"])) {
    $jsonData["combinedTo"]["items"][$index23]["offer"] = $emptyObject;
}

}
if (null !== $model->combinedTo->items[$index23]->productName) {
    $jsonData["combinedTo"]["items"][$index23]["productName"] = $model->combinedTo->items[$index23]->productName;
}
if (null !== $model->combinedTo->items[$index23]->isCanceled) {
    $jsonData["combinedTo"]["items"][$index23]["isCanceled"] = $model->combinedTo->items[$index23]->isCanceled;
}
if (null !== $model->combinedTo->items[$index23]->properties) {
    if (0 === \count($model->combinedTo->items[$index23]->properties)) {
    $jsonData["combinedTo"]["items"][$index23]["properties"] = $emptyHashmap;
} else {
    foreach (array_keys($model->combinedTo->items[$index23]->properties) as $index47) {
        $jsonData["combinedTo"]["items"][$index23]["properties"][$index47] = [];
if (null !== $model->combinedTo->items[$index23]->properties[$index47]->code) {
    $jsonData["combinedTo"]["items"][$index23]["properties"][$index47]["code"] = $model->combinedTo->items[$index23]->properties[$index47]->code;
}
if (null !== $model->combinedTo->items[$index23]->properties[$index47]->name) {
    $jsonData["combinedTo"]["items"][$index23]["properties"][$index47]["name"] = $model->combinedTo->items[$index23]->properties[$index47]->name;
}
if (null !== $model->combinedTo->items[$index23]->properties[$index47]->value) {
    $jsonData["combinedTo"]["items"][$index23]["properties"][$index47]["value"] = $model->combinedTo->items[$index23]->properties[$index47]->value;
}

if (0 === \count($jsonData["combinedTo"]["items"][$index23]["properties"][$index47])) {
    $jsonData["combinedTo"]["items"][$index23]["properties"][$index47] = $emptyObject;
}

    }
}

}
if (null !== $model->combinedTo->items[$index23]->purchasePrice) {
    $jsonData["combinedTo"]["items"][$index23]["purchasePrice"] = $model->combinedTo->items[$index23]->purchasePrice;
}

if (0 === \count($jsonData["combinedTo"]["items"][$index23])) {
    $jsonData["combinedTo"]["items"][$index23] = $emptyObject;
}

}

}
if (null !== $model->combinedTo->fullPaidAt) {
    $jsonData["combinedTo"]["fullPaidAt"] = $model->combinedTo->fullPaidAt->format('Y-m-d H:i:s');;
}
if (null !== $model->combinedTo->payments) {
    $jsonData["combinedTo"]["payments"] = [];
foreach (array_keys($model->combinedTo->payments) as $index26) {
    $jsonData["combinedTo"]["payments"][$index26] = [];
if (null !== $model->combinedTo->payments[$index26]->id) {
    $jsonData["combinedTo"]["payments"][$index26]["id"] = $model->combinedTo->payments[$index26]->id;
}
if (null !== $model->combinedTo->payments[$index26]->status) {
    $jsonData["combinedTo"]["payments"][$index26]["status"] = $model->combinedTo->payments[$index26]->status;
}
if (null !== $model->combinedTo->payments[$index26]->type) {
    $jsonData["combinedTo"]["payments"][$index26]["type"] = $model->combinedTo->payments[$index26]->type;
}
if (null !== $model->combinedTo->payments[$index26]->externalId) {
    $jsonData["combinedTo"]["payments"][$index26]["externalId"] = $model->combinedTo->payments[$index26]->externalId;
}
if (null !== $model->combinedTo->payments[$index26]->amount) {
    $jsonData["combinedTo"]["payments"][$index26]["amount"] = $model->combinedTo->payments[$index26]->amount;
}
if (null !== $model->combinedTo->payments[$index26]->paidAt) {
    $jsonData["combinedTo"]["payments"][$index26]["paidAt"] = $model->combinedTo->payments[$index26]->paidAt->format('Y-m-d H:i:s');;
}
if (null !== $model->combinedTo->payments[$index26]->comment) {
    $jsonData["combinedTo"]["payments"][$index26]["comment"] = $model->combinedTo->payments[$index26]->comment;
}

if (0 === \count($jsonData["combinedTo"]["payments"][$index26])) {
    $jsonData["combinedTo"]["payments"][$index26] = $emptyObject;
}

}

}
if (null !== $model->combinedTo->fromApi) {
    $jsonData["combinedTo"]["fromApi"] = $model->combinedTo->fromApi;
}
if (null !== $model->combinedTo->weight) {
    $jsonData["combinedTo"]["weight"] = $model->combinedTo->weight;
}
if (null !== $model->combinedTo->length) {
    $jsonData["combinedTo"]["length"] = $model->combinedTo->length;
}
if (null !== $model->combinedTo->width) {
    $jsonData["combinedTo"]["width"] = $model->combinedTo->width;
}
if (null !== $model->combinedTo->height) {
    $jsonData["combinedTo"]["height"] = $model->combinedTo->height;
}
if (null !== $model->combinedTo->shipmentStore) {
    $jsonData["combinedTo"]["shipmentStore"] = $model->combinedTo->shipmentStore;
}
if (null !== $model->combinedTo->shipmentDate) {
    $jsonData["combinedTo"]["shipmentDate"] = $model->combinedTo->shipmentDate->format('Y-m-d');;
}
if (null !== $model->combinedTo->shipped) {
    $jsonData["combinedTo"]["shipped"] = $model->combinedTo->shipped;
}
if (null !== $model->combinedTo->dialogId) {
    $jsonData["combinedTo"]["dialogId"] = $model->combinedTo->dialogId;
}
if (null !== $model->combinedTo->customFields) {
    $jsonData["combinedTo"]["customFields"] = [];
foreach (array_keys($model->combinedTo->customFields) as $index30) {
    $jsonData["combinedTo"]["customFields"] = $model->combinedTo->customFields;
}

}
if (null !== $model->combinedTo->clientId) {
    $jsonData["combinedTo"]["clientId"] = $model->combinedTo->clientId;
}
if (null !== $model->combinedTo->loyaltyEventId) {
    $jsonData["combinedTo"]["loyaltyEventId"] = $model->combinedTo->loyaltyEventId;
}

if (0 === \count($jsonData["combinedTo"])) {
    $jsonData["combinedTo"] = $emptyObject;
}

}

if (0 === \count($jsonData)) {
    $jsonData = $emptyObject;
}


    return $jsonData;
}
