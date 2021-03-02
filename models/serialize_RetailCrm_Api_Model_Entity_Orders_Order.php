<?php

function serialize_RetailCrm_Api_Model_Entity_Orders_Order(RetailCrm\Api\Model\Entity\Orders\Order $model, bool $useStdClass = true)
{
    $emptyHashmap = $useStdClass ? new \stdClass() : [];
    $emptyObject = $useStdClass ? new \stdClass() : [];

    $jsonData = [];
if (null !== $model->bonusesCreditTotal) {
    $jsonData["bonusesCreditTotal"] = $model->bonusesCreditTotal;
}
if (null !== $model->bonusesChargeTotal) {
    $jsonData["bonusesChargeTotal"] = $model->bonusesChargeTotal;
}
if (null !== $model->summ) {
    $jsonData["summ"] = $model->summ;
}
if (null !== $model->id) {
    $jsonData["id"] = $model->id;
}
if (null !== $model->slug) {
    $jsonData["slug"] = $model->slug;
}
if (null !== $model->number) {
    $jsonData["number"] = $model->number;
}
if (null !== $model->externalId) {
    $jsonData["externalId"] = $model->externalId;
}
if (null !== $model->orderType) {
    $jsonData["orderType"] = $model->orderType;
}
if (null !== $model->orderMethod) {
    $jsonData["orderMethod"] = $model->orderMethod;
}
if (null !== $model->privilegeType) {
    $jsonData["privilegeType"] = $model->privilegeType;
}
if (null !== $model->countryIso) {
    $jsonData["countryIso"] = $model->countryIso;
}
if (null !== $model->createdAt) {
    $jsonData["createdAt"] = $model->createdAt->format('Y-m-d H:i:s');;
}
if (null !== $model->statusUpdatedAt) {
    $jsonData["statusUpdatedAt"] = $model->statusUpdatedAt->format('Y-m-d H:i:s');;
}
if (null !== $model->discountManualAmount) {
    $jsonData["discountManualAmount"] = $model->discountManualAmount;
}
if (null !== $model->discountManualPercent) {
    $jsonData["discountManualPercent"] = $model->discountManualPercent;
}
if (null !== $model->totalSumm) {
    $jsonData["totalSumm"] = $model->totalSumm;
}
if (null !== $model->prepaySum) {
    $jsonData["prepaySum"] = $model->prepaySum;
}
if (null !== $model->purchaseSumm) {
    $jsonData["purchaseSumm"] = $model->purchaseSumm;
}
if (null !== $model->personalDiscountPercent) {
    $jsonData["personalDiscountPercent"] = $model->personalDiscountPercent;
}
if (null !== $model->loyaltyLevel) {
    $jsonData["loyaltyLevel"] = [];
if (null !== $model->loyaltyLevel->id) {
    $jsonData["loyaltyLevel"]["id"] = $model->loyaltyLevel->id;
}
if (null !== $model->loyaltyLevel->name) {
    $jsonData["loyaltyLevel"]["name"] = $model->loyaltyLevel->name;
}

if (0 === \count($jsonData["loyaltyLevel"])) {
    $jsonData["loyaltyLevel"] = $emptyObject;
}

}
if (null !== $model->loyaltyEvent) {
    $jsonData["loyaltyEvent"] = [];
if (null !== $model->loyaltyEvent->id) {
    $jsonData["loyaltyEvent"]["id"] = $model->loyaltyEvent->id;
}

if (0 === \count($jsonData["loyaltyEvent"])) {
    $jsonData["loyaltyEvent"] = $emptyObject;
}

}
if (null !== $model->mark) {
    $jsonData["mark"] = $model->mark;
}
if (null !== $model->markDatetime) {
    $jsonData["markDatetime"] = $model->markDatetime->format('Y-m-d H:i:s');;
}
if (null !== $model->lastName) {
    $jsonData["lastName"] = $model->lastName;
}
if (null !== $model->firstName) {
    $jsonData["firstName"] = $model->firstName;
}
if (null !== $model->patronymic) {
    $jsonData["patronymic"] = $model->patronymic;
}
if (null !== $model->phone) {
    $jsonData["phone"] = $model->phone;
}
if (null !== $model->additionalPhone) {
    $jsonData["additionalPhone"] = $model->additionalPhone;
}
if (null !== $model->email) {
    $jsonData["email"] = $model->email;
}
if (null !== $model->call) {
    $jsonData["call"] = $model->call;
}
if (null !== $model->expired) {
    $jsonData["expired"] = $model->expired;
}
if (null !== $model->customerComment) {
    $jsonData["customerComment"] = $model->customerComment;
}
if (null !== $model->managerComment) {
    $jsonData["managerComment"] = $model->managerComment;
}
if (null !== $model->managerId) {
    $jsonData["managerId"] = $model->managerId;
}
if (null !== $model->customer) {
    $jsonData["customer"] = [];

if ($model->customer instanceof \RetailCrm\Api\Model\Entity\Customers\Customer) {
    $jsonData["customer"] = [];
if (null !== $model->customer->type) {
    $jsonData["customer"]["type"] = $model->customer->type;
}
if (null !== $model->customer->id) {
    $jsonData["customer"]["id"] = $model->customer->id;
}
if (null !== $model->customer->externalId) {
    $jsonData["customer"]["externalId"] = $model->customer->externalId;
}
if (null !== $model->customer->isContact) {
    $jsonData["customer"]["isContact"] = $model->customer->isContact;
}
if (null !== $model->customer->createdAt) {
    $jsonData["customer"]["createdAt"] = $model->customer->createdAt->format('Y-m-d H:i:s');;
}
if (null !== $model->customer->managerId) {
    $jsonData["customer"]["managerId"] = $model->customer->managerId;
}
if (null !== $model->customer->vip) {
    $jsonData["customer"]["vip"] = $model->customer->vip;
}
if (null !== $model->customer->bad) {
    $jsonData["customer"]["bad"] = $model->customer->bad;
}
if (null !== $model->customer->browserId) {
    $jsonData["customer"]["browserId"] = $model->customer->browserId;
}
if (null !== $model->customer->site) {
    $jsonData["customer"]["site"] = $model->customer->site;
}
if (null !== $model->customer->contragent) {
    $jsonData["customer"]["contragent"] = [];
if (null !== $model->customer->contragent->contragentType) {
    $jsonData["customer"]["contragent"]["contragentType"] = $model->customer->contragent->contragentType;
}
if (null !== $model->customer->contragent->legalName) {
    $jsonData["customer"]["contragent"]["legalName"] = $model->customer->contragent->legalName;
}
if (null !== $model->customer->contragent->legalAddress) {
    $jsonData["customer"]["contragent"]["legalAddress"] = $model->customer->contragent->legalAddress;
}
if (null !== $model->customer->contragent->INN) {
    $jsonData["customer"]["contragent"]["INN"] = $model->customer->contragent->INN;
}
if (null !== $model->customer->contragent->OKPO) {
    $jsonData["customer"]["contragent"]["OKPO"] = $model->customer->contragent->OKPO;
}
if (null !== $model->customer->contragent->KPP) {
    $jsonData["customer"]["contragent"]["KPP"] = $model->customer->contragent->KPP;
}
if (null !== $model->customer->contragent->OGRN) {
    $jsonData["customer"]["contragent"]["OGRN"] = $model->customer->contragent->OGRN;
}
if (null !== $model->customer->contragent->OGRNIP) {
    $jsonData["customer"]["contragent"]["OGRNIP"] = $model->customer->contragent->OGRNIP;
}
if (null !== $model->customer->contragent->certificateNumber) {
    $jsonData["customer"]["contragent"]["certificateNumber"] = $model->customer->contragent->certificateNumber;
}
if (null !== $model->customer->contragent->certificateDate) {
    $jsonData["customer"]["contragent"]["certificateDate"] = $model->customer->contragent->certificateDate->format('Y-m-d H:i:s');;
}
if (null !== $model->customer->contragent->BIK) {
    $jsonData["customer"]["contragent"]["BIK"] = $model->customer->contragent->BIK;
}
if (null !== $model->customer->contragent->bank) {
    $jsonData["customer"]["contragent"]["bank"] = $model->customer->contragent->bank;
}
if (null !== $model->customer->contragent->bankAddress) {
    $jsonData["customer"]["contragent"]["bankAddress"] = $model->customer->contragent->bankAddress;
}
if (null !== $model->customer->contragent->corrAccount) {
    $jsonData["customer"]["contragent"]["corrAccount"] = $model->customer->contragent->corrAccount;
}
if (null !== $model->customer->contragent->bankAccount) {
    $jsonData["customer"]["contragent"]["bankAccount"] = $model->customer->contragent->bankAccount;
}

if (0 === \count($jsonData["customer"]["contragent"])) {
    $jsonData["customer"]["contragent"] = $emptyObject;
}

}
if (null !== $model->customer->tags) {
    $jsonData["customer"]["tags"] = [];
foreach (array_keys($model->customer->tags) as $index20) {
    $jsonData["customer"]["tags"][$index20] = $model->customer->tags[$index20]->name;
}

}
if (null !== $model->customer->avgMarginSumm) {
    $jsonData["customer"]["avgMarginSumm"] = $model->customer->avgMarginSumm;
}
if (null !== $model->customer->marginSumm) {
    $jsonData["customer"]["marginSumm"] = $model->customer->marginSumm;
}
if (null !== $model->customer->totalSumm) {
    $jsonData["customer"]["totalSumm"] = $model->customer->totalSumm;
}
if (null !== $model->customer->averageSumm) {
    $jsonData["customer"]["averageSumm"] = $model->customer->averageSumm;
}
if (null !== $model->customer->ordersCount) {
    $jsonData["customer"]["ordersCount"] = $model->customer->ordersCount;
}
if (null !== $model->customer->costSumm) {
    $jsonData["customer"]["costSumm"] = $model->customer->costSumm;
}
if (null !== $model->customer->customFields) {
    $jsonData["customer"]["customFields"] = [];
foreach (array_keys($model->customer->customFields) as $index28) {
    $jsonData["customer"]["customFields"] = $model->customer->customFields;
}

}
if (null !== $model->customer->personalDiscount) {
    $jsonData["customer"]["personalDiscount"] = $model->customer->personalDiscount;
}
if (null !== $model->customer->cumulativeDiscount) {
    $jsonData["customer"]["cumulativeDiscount"] = $model->customer->cumulativeDiscount;
}
if (null !== $model->customer->discountCardNumber) {
    $jsonData["customer"]["discountCardNumber"] = $model->customer->discountCardNumber;
}
if (null !== $model->customer->firstClientId) {
    $jsonData["customer"]["firstClientId"] = $model->customer->firstClientId;
}
if (null !== $model->customer->lastClientId) {
    $jsonData["customer"]["lastClientId"] = $model->customer->lastClientId;
}
if (null !== $model->customer->address) {
    $jsonData["customer"]["address"] = [];
if (null !== $model->customer->address->id) {
    $jsonData["customer"]["address"]["id"] = $model->customer->address->id;
}
if (null !== $model->customer->address->name) {
    $jsonData["customer"]["address"]["name"] = $model->customer->address->name;
}
if (null !== $model->customer->address->isMain) {
    $jsonData["customer"]["address"]["isMain"] = $model->customer->address->isMain;
}
if (null !== $model->customer->address->index) {
    $jsonData["customer"]["address"]["index"] = $model->customer->address->index;
}
if (null !== $model->customer->address->countryIso) {
    $jsonData["customer"]["address"]["countryIso"] = $model->customer->address->countryIso;
}
if (null !== $model->customer->address->region) {
    $jsonData["customer"]["address"]["region"] = $model->customer->address->region;
}
if (null !== $model->customer->address->regionId) {
    $jsonData["customer"]["address"]["regionId"] = $model->customer->address->regionId;
}
if (null !== $model->customer->address->city) {
    $jsonData["customer"]["address"]["city"] = $model->customer->address->city;
}
if (null !== $model->customer->address->cityId) {
    $jsonData["customer"]["address"]["cityId"] = $model->customer->address->cityId;
}
if (null !== $model->customer->address->cityType) {
    $jsonData["customer"]["address"]["cityType"] = $model->customer->address->cityType;
}
if (null !== $model->customer->address->street) {
    $jsonData["customer"]["address"]["street"] = $model->customer->address->street;
}
if (null !== $model->customer->address->streetId) {
    $jsonData["customer"]["address"]["streetId"] = $model->customer->address->streetId;
}
if (null !== $model->customer->address->streetType) {
    $jsonData["customer"]["address"]["streetType"] = $model->customer->address->streetType;
}
if (null !== $model->customer->address->building) {
    $jsonData["customer"]["address"]["building"] = $model->customer->address->building;
}
if (null !== $model->customer->address->flat) {
    $jsonData["customer"]["address"]["flat"] = $model->customer->address->flat;
}
if (null !== $model->customer->address->floor) {
    $jsonData["customer"]["address"]["floor"] = $model->customer->address->floor;
}
if (null !== $model->customer->address->block) {
    $jsonData["customer"]["address"]["block"] = $model->customer->address->block;
}
if (null !== $model->customer->address->house) {
    $jsonData["customer"]["address"]["house"] = $model->customer->address->house;
}
if (null !== $model->customer->address->housing) {
    $jsonData["customer"]["address"]["housing"] = $model->customer->address->housing;
}
if (null !== $model->customer->address->metro) {
    $jsonData["customer"]["address"]["metro"] = $model->customer->address->metro;
}
if (null !== $model->customer->address->notes) {
    $jsonData["customer"]["address"]["notes"] = $model->customer->address->notes;
}
if (null !== $model->customer->address->text) {
    $jsonData["customer"]["address"]["text"] = $model->customer->address->text;
}
if (null !== $model->customer->address->externalId) {
    $jsonData["customer"]["address"]["externalId"] = $model->customer->address->externalId;
}

if (0 === \count($jsonData["customer"]["address"])) {
    $jsonData["customer"]["address"] = $emptyObject;
}

}
if (null !== $model->customer->segments) {
    $jsonData["customer"]["segments"] = [];
foreach (array_keys($model->customer->segments) as $index24) {
    $jsonData["customer"]["segments"][$index24] = [];
if (null !== $model->customer->segments[$index24]->id) {
    $jsonData["customer"]["segments"][$index24]["id"] = $model->customer->segments[$index24]->id;
}
if (null !== $model->customer->segments[$index24]->code) {
    $jsonData["customer"]["segments"][$index24]["code"] = $model->customer->segments[$index24]->code;
}
if (null !== $model->customer->segments[$index24]->name) {
    $jsonData["customer"]["segments"][$index24]["name"] = $model->customer->segments[$index24]->name;
}
if (null !== $model->customer->segments[$index24]->createdAt) {
    $jsonData["customer"]["segments"][$index24]["createdAt"] = $model->customer->segments[$index24]->createdAt->format('Y-m-d H:i:s');;
}
if (null !== $model->customer->segments[$index24]->isDynamic) {
    $jsonData["customer"]["segments"][$index24]["isDynamic"] = $model->customer->segments[$index24]->isDynamic;
}
if (null !== $model->customer->segments[$index24]->customersCount) {
    $jsonData["customer"]["segments"][$index24]["customersCount"] = $model->customer->segments[$index24]->customersCount;
}
if (null !== $model->customer->segments[$index24]->active) {
    $jsonData["customer"]["segments"][$index24]["active"] = $model->customer->segments[$index24]->active;
}

if (0 === \count($jsonData["customer"]["segments"][$index24])) {
    $jsonData["customer"]["segments"][$index24] = $emptyObject;
}

}

}
if (null !== $model->customer->maturationTime) {
    $jsonData["customer"]["maturationTime"] = $model->customer->maturationTime;
}
if (null !== $model->customer->firstName) {
    $jsonData["customer"]["firstName"] = $model->customer->firstName;
}
if (null !== $model->customer->lastName) {
    $jsonData["customer"]["lastName"] = $model->customer->lastName;
}
if (null !== $model->customer->patronymic) {
    $jsonData["customer"]["patronymic"] = $model->customer->patronymic;
}
if (null !== $model->customer->sex) {
    $jsonData["customer"]["sex"] = $model->customer->sex;
}
if (null !== $model->customer->presumableSex) {
    $jsonData["customer"]["presumableSex"] = $model->customer->presumableSex;
}
if (null !== $model->customer->email) {
    $jsonData["customer"]["email"] = $model->customer->email;
}
if (null !== $model->customer->emailMarketingUnsubscribedAt) {
    $jsonData["customer"]["emailMarketingUnsubscribedAt"] = $model->customer->emailMarketingUnsubscribedAt->format('Y-m-d H:i:s');;
}
if (null !== $model->customer->phones) {
    $jsonData["customer"]["phones"] = [];
foreach (array_keys($model->customer->phones) as $index22) {
    $jsonData["customer"]["phones"][$index22] = [];
if (null !== $model->customer->phones[$index22]->number) {
    $jsonData["customer"]["phones"][$index22]["number"] = $model->customer->phones[$index22]->number;
}

if (0 === \count($jsonData["customer"]["phones"][$index22])) {
    $jsonData["customer"]["phones"][$index22] = $emptyObject;
}

}

}
if (null !== $model->customer->birthday) {
    $jsonData["customer"]["birthday"] = $model->customer->birthday->format('Y-m-d H:i:s');;
}
if (null !== $model->customer->source) {
    $jsonData["customer"]["source"] = [];
if (null !== $model->customer->source->source) {
    $jsonData["customer"]["source"]["source"] = $model->customer->source->source;
}
if (null !== $model->customer->source->medium) {
    $jsonData["customer"]["source"]["medium"] = $model->customer->source->medium;
}
if (null !== $model->customer->source->campaign) {
    $jsonData["customer"]["source"]["campaign"] = $model->customer->source->campaign;
}
if (null !== $model->customer->source->keyword) {
    $jsonData["customer"]["source"]["keyword"] = $model->customer->source->keyword;
}
if (null !== $model->customer->source->content) {
    $jsonData["customer"]["source"]["content"] = $model->customer->source->content;
}

if (0 === \count($jsonData["customer"]["source"])) {
    $jsonData["customer"]["source"] = $emptyObject;
}

}
if (null !== $model->customer->photoUrl) {
    $jsonData["customer"]["photoUrl"] = $model->customer->photoUrl;
}
if (null !== $model->customer->mgCustomerId) {
    $jsonData["customer"]["mgCustomerId"] = $model->customer->mgCustomerId;
}
if (null !== $model->customer->subscribed) {
    $jsonData["customer"]["subscribed"] = $model->customer->subscribed;
}

if (0 === \count($jsonData["customer"])) {
    $jsonData["customer"] = $emptyObject;
}

} elseif ($model->customer instanceof \RetailCrm\Api\Model\Entity\CustomersCorporate\CustomerCorporate) {
    $jsonData["customer"] = [];
if (null !== $model->customer->type) {
    $jsonData["customer"]["type"] = $model->customer->type;
}
if (null !== $model->customer->id) {
    $jsonData["customer"]["id"] = $model->customer->id;
}
if (null !== $model->customer->externalId) {
    $jsonData["customer"]["externalId"] = $model->customer->externalId;
}
if (null !== $model->customer->nickName) {
    $jsonData["customer"]["nickName"] = $model->customer->nickName;
}
if (null !== $model->customer->mainAddress) {
    $jsonData["customer"]["mainAddress"] = [];
if (null !== $model->customer->mainAddress->id) {
    $jsonData["customer"]["mainAddress"]["id"] = $model->customer->mainAddress->id;
}
if (null !== $model->customer->mainAddress->externalId) {
    $jsonData["customer"]["mainAddress"]["externalId"] = $model->customer->mainAddress->externalId;
}
if (null !== $model->customer->mainAddress->name) {
    $jsonData["customer"]["mainAddress"]["name"] = $model->customer->mainAddress->name;
}

if (0 === \count($jsonData["customer"]["mainAddress"])) {
    $jsonData["customer"]["mainAddress"] = $emptyObject;
}

}
if (null !== $model->customer->createdAt) {
    $jsonData["customer"]["createdAt"] = $model->customer->createdAt->format('Y-m-d H:i:s');;
}
if (null !== $model->customer->managerId) {
    $jsonData["customer"]["managerId"] = $model->customer->managerId;
}
if (null !== $model->customer->source) {
    $jsonData["customer"]["source"] = [];
if (null !== $model->customer->source->source) {
    $jsonData["customer"]["source"]["source"] = $model->customer->source->source;
}
if (null !== $model->customer->source->medium) {
    $jsonData["customer"]["source"]["medium"] = $model->customer->source->medium;
}
if (null !== $model->customer->source->campaign) {
    $jsonData["customer"]["source"]["campaign"] = $model->customer->source->campaign;
}
if (null !== $model->customer->source->keyword) {
    $jsonData["customer"]["source"]["keyword"] = $model->customer->source->keyword;
}
if (null !== $model->customer->source->content) {
    $jsonData["customer"]["source"]["content"] = $model->customer->source->content;
}

if (0 === \count($jsonData["customer"]["source"])) {
    $jsonData["customer"]["source"] = $emptyObject;
}

}
if (null !== $model->customer->customerContacts) {
    $jsonData["customer"]["customerContacts"] = [];
foreach (array_keys($model->customer->customerContacts) as $index32) {
    $jsonData["customer"]["customerContacts"][$index32] = [];
if (null !== $model->customer->customerContacts[$index32]->id) {
    $jsonData["customer"]["customerContacts"][$index32]["id"] = $model->customer->customerContacts[$index32]->id;
}
if (null !== $model->customer->customerContacts[$index32]->isMain) {
    $jsonData["customer"]["customerContacts"][$index32]["isMain"] = $model->customer->customerContacts[$index32]->isMain;
}
if (null !== $model->customer->customerContacts[$index32]->customer) {
    $jsonData["customer"]["customerContacts"][$index32]["customer"] = [];
if (null !== $model->customer->customerContacts[$index32]->customer->id) {
    $jsonData["customer"]["customerContacts"][$index32]["customer"]["id"] = $model->customer->customerContacts[$index32]->customer->id;
}
if (null !== $model->customer->customerContacts[$index32]->customer->externalId) {
    $jsonData["customer"]["customerContacts"][$index32]["customer"]["externalId"] = $model->customer->customerContacts[$index32]->customer->externalId;
}
if (null !== $model->customer->customerContacts[$index32]->customer->browserId) {
    $jsonData["customer"]["customerContacts"][$index32]["customer"]["browserId"] = $model->customer->customerContacts[$index32]->customer->browserId;
}
if (null !== $model->customer->customerContacts[$index32]->customer->site) {
    $jsonData["customer"]["customerContacts"][$index32]["customer"]["site"] = $model->customer->customerContacts[$index32]->customer->site;
}
if (null !== $model->customer->customerContacts[$index32]->customer->companies) {
    $jsonData["customer"]["customerContacts"][$index32]["customer"]["companies"] = [];
foreach (array_keys($model->customer->customerContacts[$index32]->customer->companies) as $index67) {
    $jsonData["customer"]["customerContacts"][$index32]["customer"]["companies"][$index67] = [];
if (null !== $model->customer->customerContacts[$index32]->customer->companies[$index67]->id) {
    $jsonData["customer"]["customerContacts"][$index32]["customer"]["companies"][$index67]["id"] = $model->customer->customerContacts[$index32]->customer->companies[$index67]->id;
}
if (null !== $model->customer->customerContacts[$index32]->customer->companies[$index67]->externalId) {
    $jsonData["customer"]["customerContacts"][$index32]["customer"]["companies"][$index67]["externalId"] = $model->customer->customerContacts[$index32]->customer->companies[$index67]->externalId;
}
if (null !== $model->customer->customerContacts[$index32]->customer->companies[$index67]->company) {
    $jsonData["customer"]["customerContacts"][$index32]["customer"]["companies"][$index67]["company"] = [];
if (null !== $model->customer->customerContacts[$index32]->customer->companies[$index67]->company->id) {
    $jsonData["customer"]["customerContacts"][$index32]["customer"]["companies"][$index67]["company"]["id"] = $model->customer->customerContacts[$index32]->customer->companies[$index67]->company->id;
}
if (null !== $model->customer->customerContacts[$index32]->customer->companies[$index67]->company->externalId) {
    $jsonData["customer"]["customerContacts"][$index32]["customer"]["companies"][$index67]["company"]["externalId"] = $model->customer->customerContacts[$index32]->customer->companies[$index67]->company->externalId;
}
if (null !== $model->customer->customerContacts[$index32]->customer->companies[$index67]->company->name) {
    $jsonData["customer"]["customerContacts"][$index32]["customer"]["companies"][$index67]["company"]["name"] = $model->customer->customerContacts[$index32]->customer->companies[$index67]->company->name;
}

if (0 === \count($jsonData["customer"]["customerContacts"][$index32]["customer"]["companies"][$index67]["company"])) {
    $jsonData["customer"]["customerContacts"][$index32]["customer"]["companies"][$index67]["company"] = $emptyObject;
}

}

if (0 === \count($jsonData["customer"]["customerContacts"][$index32]["customer"]["companies"][$index67])) {
    $jsonData["customer"]["customerContacts"][$index32]["customer"]["companies"][$index67] = $emptyObject;
}

}

}

if (0 === \count($jsonData["customer"]["customerContacts"][$index32]["customer"])) {
    $jsonData["customer"]["customerContacts"][$index32]["customer"] = $emptyObject;
}

}
if (null !== $model->customer->customerContacts[$index32]->companies) {
    $jsonData["customer"]["customerContacts"][$index32]["companies"] = [];
foreach (array_keys($model->customer->customerContacts[$index32]->companies) as $index55) {
    $jsonData["customer"]["customerContacts"][$index32]["companies"][$index55] = [];
if (null !== $model->customer->customerContacts[$index32]->companies[$index55]->id) {
    $jsonData["customer"]["customerContacts"][$index32]["companies"][$index55]["id"] = $model->customer->customerContacts[$index32]->companies[$index55]->id;
}
if (null !== $model->customer->customerContacts[$index32]->companies[$index55]->externalId) {
    $jsonData["customer"]["customerContacts"][$index32]["companies"][$index55]["externalId"] = $model->customer->customerContacts[$index32]->companies[$index55]->externalId;
}
if (null !== $model->customer->customerContacts[$index32]->companies[$index55]->company) {
    $jsonData["customer"]["customerContacts"][$index32]["companies"][$index55]["company"] = [];
if (null !== $model->customer->customerContacts[$index32]->companies[$index55]->company->id) {
    $jsonData["customer"]["customerContacts"][$index32]["companies"][$index55]["company"]["id"] = $model->customer->customerContacts[$index32]->companies[$index55]->company->id;
}
if (null !== $model->customer->customerContacts[$index32]->companies[$index55]->company->externalId) {
    $jsonData["customer"]["customerContacts"][$index32]["companies"][$index55]["company"]["externalId"] = $model->customer->customerContacts[$index32]->companies[$index55]->company->externalId;
}
if (null !== $model->customer->customerContacts[$index32]->companies[$index55]->company->name) {
    $jsonData["customer"]["customerContacts"][$index32]["companies"][$index55]["company"]["name"] = $model->customer->customerContacts[$index32]->companies[$index55]->company->name;
}

if (0 === \count($jsonData["customer"]["customerContacts"][$index32]["companies"][$index55]["company"])) {
    $jsonData["customer"]["customerContacts"][$index32]["companies"][$index55]["company"] = $emptyObject;
}

}

if (0 === \count($jsonData["customer"]["customerContacts"][$index32]["companies"][$index55])) {
    $jsonData["customer"]["customerContacts"][$index32]["companies"][$index55] = $emptyObject;
}

}

}

if (0 === \count($jsonData["customer"]["customerContacts"][$index32])) {
    $jsonData["customer"]["customerContacts"][$index32] = $emptyObject;
}

}

}
if (null !== $model->customer->companies) {
    $jsonData["customer"]["companies"] = [];
foreach (array_keys($model->customer->companies) as $index25) {
    $jsonData["customer"]["companies"][$index25] = [];
if (null !== $model->customer->companies[$index25]->id) {
    $jsonData["customer"]["companies"][$index25]["id"] = $model->customer->companies[$index25]->id;
}
if (null !== $model->customer->companies[$index25]->isMain) {
    $jsonData["customer"]["companies"][$index25]["isMain"] = $model->customer->companies[$index25]->isMain;
}
if (null !== $model->customer->companies[$index25]->externalId) {
    $jsonData["customer"]["companies"][$index25]["externalId"] = $model->customer->companies[$index25]->externalId;
}
if (null !== $model->customer->companies[$index25]->active) {
    $jsonData["customer"]["companies"][$index25]["active"] = $model->customer->companies[$index25]->active;
}
if (null !== $model->customer->companies[$index25]->name) {
    $jsonData["customer"]["companies"][$index25]["name"] = $model->customer->companies[$index25]->name;
}
if (null !== $model->customer->companies[$index25]->brand) {
    $jsonData["customer"]["companies"][$index25]["brand"] = $model->customer->companies[$index25]->brand;
}
if (null !== $model->customer->companies[$index25]->site) {
    $jsonData["customer"]["companies"][$index25]["site"] = $model->customer->companies[$index25]->site;
}
if (null !== $model->customer->companies[$index25]->createdAt) {
    $jsonData["customer"]["companies"][$index25]["createdAt"] = $model->customer->companies[$index25]->createdAt->format('Y-m-d H:i:s');;
}
if (null !== $model->customer->companies[$index25]->customer) {
    $jsonData["customer"]["companies"][$index25]["customer"] = [];
if (null !== $model->customer->companies[$index25]->customer->site) {
    $jsonData["customer"]["companies"][$index25]["customer"]["site"] = $model->customer->companies[$index25]->customer->site;
}
if (null !== $model->customer->companies[$index25]->customer->id) {
    $jsonData["customer"]["companies"][$index25]["customer"]["id"] = $model->customer->companies[$index25]->customer->id;
}
if (null !== $model->customer->companies[$index25]->customer->externalId) {
    $jsonData["customer"]["companies"][$index25]["customer"]["externalId"] = $model->customer->companies[$index25]->customer->externalId;
}
if (null !== $model->customer->companies[$index25]->customer->type) {
    $jsonData["customer"]["companies"][$index25]["customer"]["type"] = $model->customer->companies[$index25]->customer->type;
}

if (0 === \count($jsonData["customer"]["companies"][$index25]["customer"])) {
    $jsonData["customer"]["companies"][$index25]["customer"] = $emptyObject;
}

}
if (null !== $model->customer->companies[$index25]->contragent) {
    $jsonData["customer"]["companies"][$index25]["contragent"] = [];
if (null !== $model->customer->companies[$index25]->contragent->contragentType) {
    $jsonData["customer"]["companies"][$index25]["contragent"]["contragentType"] = $model->customer->companies[$index25]->contragent->contragentType;
}
if (null !== $model->customer->companies[$index25]->contragent->legalName) {
    $jsonData["customer"]["companies"][$index25]["contragent"]["legalName"] = $model->customer->companies[$index25]->contragent->legalName;
}
if (null !== $model->customer->companies[$index25]->contragent->legalAddress) {
    $jsonData["customer"]["companies"][$index25]["contragent"]["legalAddress"] = $model->customer->companies[$index25]->contragent->legalAddress;
}
if (null !== $model->customer->companies[$index25]->contragent->INN) {
    $jsonData["customer"]["companies"][$index25]["contragent"]["INN"] = $model->customer->companies[$index25]->contragent->INN;
}
if (null !== $model->customer->companies[$index25]->contragent->OKPO) {
    $jsonData["customer"]["companies"][$index25]["contragent"]["OKPO"] = $model->customer->companies[$index25]->contragent->OKPO;
}
if (null !== $model->customer->companies[$index25]->contragent->KPP) {
    $jsonData["customer"]["companies"][$index25]["contragent"]["KPP"] = $model->customer->companies[$index25]->contragent->KPP;
}
if (null !== $model->customer->companies[$index25]->contragent->OGRN) {
    $jsonData["customer"]["companies"][$index25]["contragent"]["OGRN"] = $model->customer->companies[$index25]->contragent->OGRN;
}
if (null !== $model->customer->companies[$index25]->contragent->OGRNIP) {
    $jsonData["customer"]["companies"][$index25]["contragent"]["OGRNIP"] = $model->customer->companies[$index25]->contragent->OGRNIP;
}
if (null !== $model->customer->companies[$index25]->contragent->certificateNumber) {
    $jsonData["customer"]["companies"][$index25]["contragent"]["certificateNumber"] = $model->customer->companies[$index25]->contragent->certificateNumber;
}
if (null !== $model->customer->companies[$index25]->contragent->certificateDate) {
    $jsonData["customer"]["companies"][$index25]["contragent"]["certificateDate"] = $model->customer->companies[$index25]->contragent->certificateDate->format('Y-m-d H:i:s');;
}
if (null !== $model->customer->companies[$index25]->contragent->BIK) {
    $jsonData["customer"]["companies"][$index25]["contragent"]["BIK"] = $model->customer->companies[$index25]->contragent->BIK;
}
if (null !== $model->customer->companies[$index25]->contragent->bank) {
    $jsonData["customer"]["companies"][$index25]["contragent"]["bank"] = $model->customer->companies[$index25]->contragent->bank;
}
if (null !== $model->customer->companies[$index25]->contragent->bankAddress) {
    $jsonData["customer"]["companies"][$index25]["contragent"]["bankAddress"] = $model->customer->companies[$index25]->contragent->bankAddress;
}
if (null !== $model->customer->companies[$index25]->contragent->corrAccount) {
    $jsonData["customer"]["companies"][$index25]["contragent"]["corrAccount"] = $model->customer->companies[$index25]->contragent->corrAccount;
}
if (null !== $model->customer->companies[$index25]->contragent->bankAccount) {
    $jsonData["customer"]["companies"][$index25]["contragent"]["bankAccount"] = $model->customer->companies[$index25]->contragent->bankAccount;
}

if (0 === \count($jsonData["customer"]["companies"][$index25]["contragent"])) {
    $jsonData["customer"]["companies"][$index25]["contragent"] = $emptyObject;
}

}
if (null !== $model->customer->companies[$index25]->address) {
    $jsonData["customer"]["companies"][$index25]["address"] = [];
if (null !== $model->customer->companies[$index25]->address->id) {
    $jsonData["customer"]["companies"][$index25]["address"]["id"] = $model->customer->companies[$index25]->address->id;
}
if (null !== $model->customer->companies[$index25]->address->name) {
    $jsonData["customer"]["companies"][$index25]["address"]["name"] = $model->customer->companies[$index25]->address->name;
}
if (null !== $model->customer->companies[$index25]->address->isMain) {
    $jsonData["customer"]["companies"][$index25]["address"]["isMain"] = $model->customer->companies[$index25]->address->isMain;
}
if (null !== $model->customer->companies[$index25]->address->index) {
    $jsonData["customer"]["companies"][$index25]["address"]["index"] = $model->customer->companies[$index25]->address->index;
}
if (null !== $model->customer->companies[$index25]->address->countryIso) {
    $jsonData["customer"]["companies"][$index25]["address"]["countryIso"] = $model->customer->companies[$index25]->address->countryIso;
}
if (null !== $model->customer->companies[$index25]->address->region) {
    $jsonData["customer"]["companies"][$index25]["address"]["region"] = $model->customer->companies[$index25]->address->region;
}
if (null !== $model->customer->companies[$index25]->address->regionId) {
    $jsonData["customer"]["companies"][$index25]["address"]["regionId"] = $model->customer->companies[$index25]->address->regionId;
}
if (null !== $model->customer->companies[$index25]->address->city) {
    $jsonData["customer"]["companies"][$index25]["address"]["city"] = $model->customer->companies[$index25]->address->city;
}
if (null !== $model->customer->companies[$index25]->address->cityId) {
    $jsonData["customer"]["companies"][$index25]["address"]["cityId"] = $model->customer->companies[$index25]->address->cityId;
}
if (null !== $model->customer->companies[$index25]->address->cityType) {
    $jsonData["customer"]["companies"][$index25]["address"]["cityType"] = $model->customer->companies[$index25]->address->cityType;
}
if (null !== $model->customer->companies[$index25]->address->street) {
    $jsonData["customer"]["companies"][$index25]["address"]["street"] = $model->customer->companies[$index25]->address->street;
}
if (null !== $model->customer->companies[$index25]->address->streetId) {
    $jsonData["customer"]["companies"][$index25]["address"]["streetId"] = $model->customer->companies[$index25]->address->streetId;
}
if (null !== $model->customer->companies[$index25]->address->streetType) {
    $jsonData["customer"]["companies"][$index25]["address"]["streetType"] = $model->customer->companies[$index25]->address->streetType;
}
if (null !== $model->customer->companies[$index25]->address->building) {
    $jsonData["customer"]["companies"][$index25]["address"]["building"] = $model->customer->companies[$index25]->address->building;
}
if (null !== $model->customer->companies[$index25]->address->flat) {
    $jsonData["customer"]["companies"][$index25]["address"]["flat"] = $model->customer->companies[$index25]->address->flat;
}
if (null !== $model->customer->companies[$index25]->address->floor) {
    $jsonData["customer"]["companies"][$index25]["address"]["floor"] = $model->customer->companies[$index25]->address->floor;
}
if (null !== $model->customer->companies[$index25]->address->block) {
    $jsonData["customer"]["companies"][$index25]["address"]["block"] = $model->customer->companies[$index25]->address->block;
}
if (null !== $model->customer->companies[$index25]->address->house) {
    $jsonData["customer"]["companies"][$index25]["address"]["house"] = $model->customer->companies[$index25]->address->house;
}
if (null !== $model->customer->companies[$index25]->address->housing) {
    $jsonData["customer"]["companies"][$index25]["address"]["housing"] = $model->customer->companies[$index25]->address->housing;
}
if (null !== $model->customer->companies[$index25]->address->metro) {
    $jsonData["customer"]["companies"][$index25]["address"]["metro"] = $model->customer->companies[$index25]->address->metro;
}
if (null !== $model->customer->companies[$index25]->address->notes) {
    $jsonData["customer"]["companies"][$index25]["address"]["notes"] = $model->customer->companies[$index25]->address->notes;
}
if (null !== $model->customer->companies[$index25]->address->text) {
    $jsonData["customer"]["companies"][$index25]["address"]["text"] = $model->customer->companies[$index25]->address->text;
}
if (null !== $model->customer->companies[$index25]->address->externalId) {
    $jsonData["customer"]["companies"][$index25]["address"]["externalId"] = $model->customer->companies[$index25]->address->externalId;
}

if (0 === \count($jsonData["customer"]["companies"][$index25]["address"])) {
    $jsonData["customer"]["companies"][$index25]["address"] = $emptyObject;
}

}
if (null !== $model->customer->companies[$index25]->customFields) {
    $jsonData["customer"]["companies"][$index25]["customFields"] = [];
foreach (array_keys($model->customer->companies[$index25]->customFields) as $index51) {
    $jsonData["customer"]["companies"][$index25]["customFields"] = $model->customer->companies[$index25]->customFields;
}

}
if (null !== $model->customer->companies[$index25]->marginSumm) {
    $jsonData["customer"]["companies"][$index25]["marginSumm"] = $model->customer->companies[$index25]->marginSumm;
}
if (null !== $model->customer->companies[$index25]->totalSumm) {
    $jsonData["customer"]["companies"][$index25]["totalSumm"] = $model->customer->companies[$index25]->totalSumm;
}
if (null !== $model->customer->companies[$index25]->averageSumm) {
    $jsonData["customer"]["companies"][$index25]["averageSumm"] = $model->customer->companies[$index25]->averageSumm;
}
if (null !== $model->customer->companies[$index25]->ordersCount) {
    $jsonData["customer"]["companies"][$index25]["ordersCount"] = $model->customer->companies[$index25]->ordersCount;
}
if (null !== $model->customer->companies[$index25]->costSumm) {
    $jsonData["customer"]["companies"][$index25]["costSumm"] = $model->customer->companies[$index25]->costSumm;
}

if (0 === \count($jsonData["customer"]["companies"][$index25])) {
    $jsonData["customer"]["companies"][$index25] = $emptyObject;
}

}

}
if (null !== $model->customer->addresses) {
    $jsonData["customer"]["addresses"] = [];
foreach (array_keys($model->customer->addresses) as $index25) {
    $jsonData["customer"]["addresses"][$index25] = [];
if (null !== $model->customer->addresses[$index25]->id) {
    $jsonData["customer"]["addresses"][$index25]["id"] = $model->customer->addresses[$index25]->id;
}
if (null !== $model->customer->addresses[$index25]->name) {
    $jsonData["customer"]["addresses"][$index25]["name"] = $model->customer->addresses[$index25]->name;
}
if (null !== $model->customer->addresses[$index25]->isMain) {
    $jsonData["customer"]["addresses"][$index25]["isMain"] = $model->customer->addresses[$index25]->isMain;
}
if (null !== $model->customer->addresses[$index25]->index) {
    $jsonData["customer"]["addresses"][$index25]["index"] = $model->customer->addresses[$index25]->index;
}
if (null !== $model->customer->addresses[$index25]->countryIso) {
    $jsonData["customer"]["addresses"][$index25]["countryIso"] = $model->customer->addresses[$index25]->countryIso;
}
if (null !== $model->customer->addresses[$index25]->region) {
    $jsonData["customer"]["addresses"][$index25]["region"] = $model->customer->addresses[$index25]->region;
}
if (null !== $model->customer->addresses[$index25]->regionId) {
    $jsonData["customer"]["addresses"][$index25]["regionId"] = $model->customer->addresses[$index25]->regionId;
}
if (null !== $model->customer->addresses[$index25]->city) {
    $jsonData["customer"]["addresses"][$index25]["city"] = $model->customer->addresses[$index25]->city;
}
if (null !== $model->customer->addresses[$index25]->cityId) {
    $jsonData["customer"]["addresses"][$index25]["cityId"] = $model->customer->addresses[$index25]->cityId;
}
if (null !== $model->customer->addresses[$index25]->cityType) {
    $jsonData["customer"]["addresses"][$index25]["cityType"] = $model->customer->addresses[$index25]->cityType;
}
if (null !== $model->customer->addresses[$index25]->street) {
    $jsonData["customer"]["addresses"][$index25]["street"] = $model->customer->addresses[$index25]->street;
}
if (null !== $model->customer->addresses[$index25]->streetId) {
    $jsonData["customer"]["addresses"][$index25]["streetId"] = $model->customer->addresses[$index25]->streetId;
}
if (null !== $model->customer->addresses[$index25]->streetType) {
    $jsonData["customer"]["addresses"][$index25]["streetType"] = $model->customer->addresses[$index25]->streetType;
}
if (null !== $model->customer->addresses[$index25]->building) {
    $jsonData["customer"]["addresses"][$index25]["building"] = $model->customer->addresses[$index25]->building;
}
if (null !== $model->customer->addresses[$index25]->flat) {
    $jsonData["customer"]["addresses"][$index25]["flat"] = $model->customer->addresses[$index25]->flat;
}
if (null !== $model->customer->addresses[$index25]->floor) {
    $jsonData["customer"]["addresses"][$index25]["floor"] = $model->customer->addresses[$index25]->floor;
}
if (null !== $model->customer->addresses[$index25]->block) {
    $jsonData["customer"]["addresses"][$index25]["block"] = $model->customer->addresses[$index25]->block;
}
if (null !== $model->customer->addresses[$index25]->house) {
    $jsonData["customer"]["addresses"][$index25]["house"] = $model->customer->addresses[$index25]->house;
}
if (null !== $model->customer->addresses[$index25]->housing) {
    $jsonData["customer"]["addresses"][$index25]["housing"] = $model->customer->addresses[$index25]->housing;
}
if (null !== $model->customer->addresses[$index25]->metro) {
    $jsonData["customer"]["addresses"][$index25]["metro"] = $model->customer->addresses[$index25]->metro;
}
if (null !== $model->customer->addresses[$index25]->notes) {
    $jsonData["customer"]["addresses"][$index25]["notes"] = $model->customer->addresses[$index25]->notes;
}
if (null !== $model->customer->addresses[$index25]->text) {
    $jsonData["customer"]["addresses"][$index25]["text"] = $model->customer->addresses[$index25]->text;
}
if (null !== $model->customer->addresses[$index25]->externalId) {
    $jsonData["customer"]["addresses"][$index25]["externalId"] = $model->customer->addresses[$index25]->externalId;
}

if (0 === \count($jsonData["customer"]["addresses"][$index25])) {
    $jsonData["customer"]["addresses"][$index25] = $emptyObject;
}

}

}
if (null !== $model->customer->vip) {
    $jsonData["customer"]["vip"] = $model->customer->vip;
}
if (null !== $model->customer->bad) {
    $jsonData["customer"]["bad"] = $model->customer->bad;
}
if (null !== $model->customer->site) {
    $jsonData["customer"]["site"] = $model->customer->site;
}
if (null !== $model->customer->tags) {
    $jsonData["customer"]["tags"] = [];
foreach (array_keys($model->customer->tags) as $index20) {
    $jsonData["customer"]["tags"][$index20] = $model->customer->tags[$index20]->name;
}

}
if (null !== $model->customer->avgMarginSumm) {
    $jsonData["customer"]["avgMarginSumm"] = $model->customer->avgMarginSumm;
}
if (null !== $model->customer->marginSumm) {
    $jsonData["customer"]["marginSumm"] = $model->customer->marginSumm;
}
if (null !== $model->customer->totalSumm) {
    $jsonData["customer"]["totalSumm"] = $model->customer->totalSumm;
}
if (null !== $model->customer->averageSumm) {
    $jsonData["customer"]["averageSumm"] = $model->customer->averageSumm;
}
if (null !== $model->customer->ordersCount) {
    $jsonData["customer"]["ordersCount"] = $model->customer->ordersCount;
}
if (null !== $model->customer->costSumm) {
    $jsonData["customer"]["costSumm"] = $model->customer->costSumm;
}
if (null !== $model->customer->customFields) {
    $jsonData["customer"]["customFields"] = [];
foreach (array_keys($model->customer->customFields) as $index28) {
    $jsonData["customer"]["customFields"] = $model->customer->customFields;
}

}
if (null !== $model->customer->personalDiscount) {
    $jsonData["customer"]["personalDiscount"] = $model->customer->personalDiscount;
}
if (null !== $model->customer->cumulativeDiscount) {
    $jsonData["customer"]["cumulativeDiscount"] = $model->customer->cumulativeDiscount;
}
if (null !== $model->customer->discountCardNumber) {
    $jsonData["customer"]["discountCardNumber"] = $model->customer->discountCardNumber;
}
if (null !== $model->customer->firstClientId) {
    $jsonData["customer"]["firstClientId"] = $model->customer->firstClientId;
}
if (null !== $model->customer->lastClientId) {
    $jsonData["customer"]["lastClientId"] = $model->customer->lastClientId;
}
if (null !== $model->customer->mainCustomerContact) {
    $jsonData["customer"]["mainCustomerContact"] = [];
if (null !== $model->customer->mainCustomerContact->id) {
    $jsonData["customer"]["mainCustomerContact"]["id"] = $model->customer->mainCustomerContact->id;
}
if (null !== $model->customer->mainCustomerContact->isMain) {
    $jsonData["customer"]["mainCustomerContact"]["isMain"] = $model->customer->mainCustomerContact->isMain;
}
if (null !== $model->customer->mainCustomerContact->customer) {
    $jsonData["customer"]["mainCustomerContact"]["customer"] = [];
if (null !== $model->customer->mainCustomerContact->customer->id) {
    $jsonData["customer"]["mainCustomerContact"]["customer"]["id"] = $model->customer->mainCustomerContact->customer->id;
}
if (null !== $model->customer->mainCustomerContact->customer->externalId) {
    $jsonData["customer"]["mainCustomerContact"]["customer"]["externalId"] = $model->customer->mainCustomerContact->customer->externalId;
}
if (null !== $model->customer->mainCustomerContact->customer->browserId) {
    $jsonData["customer"]["mainCustomerContact"]["customer"]["browserId"] = $model->customer->mainCustomerContact->customer->browserId;
}
if (null !== $model->customer->mainCustomerContact->customer->site) {
    $jsonData["customer"]["mainCustomerContact"]["customer"]["site"] = $model->customer->mainCustomerContact->customer->site;
}
if (null !== $model->customer->mainCustomerContact->customer->companies) {
    $jsonData["customer"]["mainCustomerContact"]["customer"]["companies"] = [];
foreach (array_keys($model->customer->mainCustomerContact->customer->companies) as $index60) {
    $jsonData["customer"]["mainCustomerContact"]["customer"]["companies"][$index60] = [];
if (null !== $model->customer->mainCustomerContact->customer->companies[$index60]->id) {
    $jsonData["customer"]["mainCustomerContact"]["customer"]["companies"][$index60]["id"] = $model->customer->mainCustomerContact->customer->companies[$index60]->id;
}
if (null !== $model->customer->mainCustomerContact->customer->companies[$index60]->externalId) {
    $jsonData["customer"]["mainCustomerContact"]["customer"]["companies"][$index60]["externalId"] = $model->customer->mainCustomerContact->customer->companies[$index60]->externalId;
}
if (null !== $model->customer->mainCustomerContact->customer->companies[$index60]->company) {
    $jsonData["customer"]["mainCustomerContact"]["customer"]["companies"][$index60]["company"] = [];
if (null !== $model->customer->mainCustomerContact->customer->companies[$index60]->company->id) {
    $jsonData["customer"]["mainCustomerContact"]["customer"]["companies"][$index60]["company"]["id"] = $model->customer->mainCustomerContact->customer->companies[$index60]->company->id;
}
if (null !== $model->customer->mainCustomerContact->customer->companies[$index60]->company->externalId) {
    $jsonData["customer"]["mainCustomerContact"]["customer"]["companies"][$index60]["company"]["externalId"] = $model->customer->mainCustomerContact->customer->companies[$index60]->company->externalId;
}
if (null !== $model->customer->mainCustomerContact->customer->companies[$index60]->company->name) {
    $jsonData["customer"]["mainCustomerContact"]["customer"]["companies"][$index60]["company"]["name"] = $model->customer->mainCustomerContact->customer->companies[$index60]->company->name;
}

if (0 === \count($jsonData["customer"]["mainCustomerContact"]["customer"]["companies"][$index60]["company"])) {
    $jsonData["customer"]["mainCustomerContact"]["customer"]["companies"][$index60]["company"] = $emptyObject;
}

}

if (0 === \count($jsonData["customer"]["mainCustomerContact"]["customer"]["companies"][$index60])) {
    $jsonData["customer"]["mainCustomerContact"]["customer"]["companies"][$index60] = $emptyObject;
}

}

}

if (0 === \count($jsonData["customer"]["mainCustomerContact"]["customer"])) {
    $jsonData["customer"]["mainCustomerContact"]["customer"] = $emptyObject;
}

}
if (null !== $model->customer->mainCustomerContact->companies) {
    $jsonData["customer"]["mainCustomerContact"]["companies"] = [];
foreach (array_keys($model->customer->mainCustomerContact->companies) as $index48) {
    $jsonData["customer"]["mainCustomerContact"]["companies"][$index48] = [];
if (null !== $model->customer->mainCustomerContact->companies[$index48]->id) {
    $jsonData["customer"]["mainCustomerContact"]["companies"][$index48]["id"] = $model->customer->mainCustomerContact->companies[$index48]->id;
}
if (null !== $model->customer->mainCustomerContact->companies[$index48]->externalId) {
    $jsonData["customer"]["mainCustomerContact"]["companies"][$index48]["externalId"] = $model->customer->mainCustomerContact->companies[$index48]->externalId;
}
if (null !== $model->customer->mainCustomerContact->companies[$index48]->company) {
    $jsonData["customer"]["mainCustomerContact"]["companies"][$index48]["company"] = [];
if (null !== $model->customer->mainCustomerContact->companies[$index48]->company->id) {
    $jsonData["customer"]["mainCustomerContact"]["companies"][$index48]["company"]["id"] = $model->customer->mainCustomerContact->companies[$index48]->company->id;
}
if (null !== $model->customer->mainCustomerContact->companies[$index48]->company->externalId) {
    $jsonData["customer"]["mainCustomerContact"]["companies"][$index48]["company"]["externalId"] = $model->customer->mainCustomerContact->companies[$index48]->company->externalId;
}
if (null !== $model->customer->mainCustomerContact->companies[$index48]->company->name) {
    $jsonData["customer"]["mainCustomerContact"]["companies"][$index48]["company"]["name"] = $model->customer->mainCustomerContact->companies[$index48]->company->name;
}

if (0 === \count($jsonData["customer"]["mainCustomerContact"]["companies"][$index48]["company"])) {
    $jsonData["customer"]["mainCustomerContact"]["companies"][$index48]["company"] = $emptyObject;
}

}

if (0 === \count($jsonData["customer"]["mainCustomerContact"]["companies"][$index48])) {
    $jsonData["customer"]["mainCustomerContact"]["companies"][$index48] = $emptyObject;
}

}

}

if (0 === \count($jsonData["customer"]["mainCustomerContact"])) {
    $jsonData["customer"]["mainCustomerContact"] = $emptyObject;
}

}
if (null !== $model->customer->mainCompany) {
    $jsonData["customer"]["mainCompany"] = [];
if (null !== $model->customer->mainCompany->id) {
    $jsonData["customer"]["mainCompany"]["id"] = $model->customer->mainCompany->id;
}
if (null !== $model->customer->mainCompany->externalId) {
    $jsonData["customer"]["mainCompany"]["externalId"] = $model->customer->mainCompany->externalId;
}
if (null !== $model->customer->mainCompany->name) {
    $jsonData["customer"]["mainCompany"]["name"] = $model->customer->mainCompany->name;
}

if (0 === \count($jsonData["customer"]["mainCompany"])) {
    $jsonData["customer"]["mainCompany"] = $emptyObject;
}

}

if (0 === \count($jsonData["customer"])) {
    $jsonData["customer"] = $emptyObject;
}

}

if (0 === \count($jsonData["customer"])) {
    $jsonData["customer"] = $emptyObject;
}
}
if (null !== $model->contact) {
    $jsonData["contact"] = [];
if (null !== $model->contact->type) {
    $jsonData["contact"]["type"] = $model->contact->type;
}
if (null !== $model->contact->id) {
    $jsonData["contact"]["id"] = $model->contact->id;
}
if (null !== $model->contact->externalId) {
    $jsonData["contact"]["externalId"] = $model->contact->externalId;
}
if (null !== $model->contact->isContact) {
    $jsonData["contact"]["isContact"] = $model->contact->isContact;
}
if (null !== $model->contact->createdAt) {
    $jsonData["contact"]["createdAt"] = $model->contact->createdAt->format('Y-m-d H:i:s');;
}
if (null !== $model->contact->managerId) {
    $jsonData["contact"]["managerId"] = $model->contact->managerId;
}
if (null !== $model->contact->vip) {
    $jsonData["contact"]["vip"] = $model->contact->vip;
}
if (null !== $model->contact->bad) {
    $jsonData["contact"]["bad"] = $model->contact->bad;
}
if (null !== $model->contact->browserId) {
    $jsonData["contact"]["browserId"] = $model->contact->browserId;
}
if (null !== $model->contact->site) {
    $jsonData["contact"]["site"] = $model->contact->site;
}
if (null !== $model->contact->contragent) {
    $jsonData["contact"]["contragent"] = [];
if (null !== $model->contact->contragent->contragentType) {
    $jsonData["contact"]["contragent"]["contragentType"] = $model->contact->contragent->contragentType;
}
if (null !== $model->contact->contragent->legalName) {
    $jsonData["contact"]["contragent"]["legalName"] = $model->contact->contragent->legalName;
}
if (null !== $model->contact->contragent->legalAddress) {
    $jsonData["contact"]["contragent"]["legalAddress"] = $model->contact->contragent->legalAddress;
}
if (null !== $model->contact->contragent->INN) {
    $jsonData["contact"]["contragent"]["INN"] = $model->contact->contragent->INN;
}
if (null !== $model->contact->contragent->OKPO) {
    $jsonData["contact"]["contragent"]["OKPO"] = $model->contact->contragent->OKPO;
}
if (null !== $model->contact->contragent->KPP) {
    $jsonData["contact"]["contragent"]["KPP"] = $model->contact->contragent->KPP;
}
if (null !== $model->contact->contragent->OGRN) {
    $jsonData["contact"]["contragent"]["OGRN"] = $model->contact->contragent->OGRN;
}
if (null !== $model->contact->contragent->OGRNIP) {
    $jsonData["contact"]["contragent"]["OGRNIP"] = $model->contact->contragent->OGRNIP;
}
if (null !== $model->contact->contragent->certificateNumber) {
    $jsonData["contact"]["contragent"]["certificateNumber"] = $model->contact->contragent->certificateNumber;
}
if (null !== $model->contact->contragent->certificateDate) {
    $jsonData["contact"]["contragent"]["certificateDate"] = $model->contact->contragent->certificateDate->format('Y-m-d H:i:s');;
}
if (null !== $model->contact->contragent->BIK) {
    $jsonData["contact"]["contragent"]["BIK"] = $model->contact->contragent->BIK;
}
if (null !== $model->contact->contragent->bank) {
    $jsonData["contact"]["contragent"]["bank"] = $model->contact->contragent->bank;
}
if (null !== $model->contact->contragent->bankAddress) {
    $jsonData["contact"]["contragent"]["bankAddress"] = $model->contact->contragent->bankAddress;
}
if (null !== $model->contact->contragent->corrAccount) {
    $jsonData["contact"]["contragent"]["corrAccount"] = $model->contact->contragent->corrAccount;
}
if (null !== $model->contact->contragent->bankAccount) {
    $jsonData["contact"]["contragent"]["bankAccount"] = $model->contact->contragent->bankAccount;
}

if (0 === \count($jsonData["contact"]["contragent"])) {
    $jsonData["contact"]["contragent"] = $emptyObject;
}

}
if (null !== $model->contact->tags) {
    $jsonData["contact"]["tags"] = [];
foreach (array_keys($model->contact->tags) as $index19) {
    $jsonData["contact"]["tags"][$index19] = $model->contact->tags[$index19]->name;
}

}
if (null !== $model->contact->avgMarginSumm) {
    $jsonData["contact"]["avgMarginSumm"] = $model->contact->avgMarginSumm;
}
if (null !== $model->contact->marginSumm) {
    $jsonData["contact"]["marginSumm"] = $model->contact->marginSumm;
}
if (null !== $model->contact->totalSumm) {
    $jsonData["contact"]["totalSumm"] = $model->contact->totalSumm;
}
if (null !== $model->contact->averageSumm) {
    $jsonData["contact"]["averageSumm"] = $model->contact->averageSumm;
}
if (null !== $model->contact->ordersCount) {
    $jsonData["contact"]["ordersCount"] = $model->contact->ordersCount;
}
if (null !== $model->contact->costSumm) {
    $jsonData["contact"]["costSumm"] = $model->contact->costSumm;
}
if (null !== $model->contact->customFields) {
    $jsonData["contact"]["customFields"] = [];
foreach (array_keys($model->contact->customFields) as $index27) {
    $jsonData["contact"]["customFields"] = $model->contact->customFields;
}

}
if (null !== $model->contact->personalDiscount) {
    $jsonData["contact"]["personalDiscount"] = $model->contact->personalDiscount;
}
if (null !== $model->contact->cumulativeDiscount) {
    $jsonData["contact"]["cumulativeDiscount"] = $model->contact->cumulativeDiscount;
}
if (null !== $model->contact->discountCardNumber) {
    $jsonData["contact"]["discountCardNumber"] = $model->contact->discountCardNumber;
}
if (null !== $model->contact->firstClientId) {
    $jsonData["contact"]["firstClientId"] = $model->contact->firstClientId;
}
if (null !== $model->contact->lastClientId) {
    $jsonData["contact"]["lastClientId"] = $model->contact->lastClientId;
}
if (null !== $model->contact->address) {
    $jsonData["contact"]["address"] = [];
if (null !== $model->contact->address->id) {
    $jsonData["contact"]["address"]["id"] = $model->contact->address->id;
}
if (null !== $model->contact->address->name) {
    $jsonData["contact"]["address"]["name"] = $model->contact->address->name;
}
if (null !== $model->contact->address->isMain) {
    $jsonData["contact"]["address"]["isMain"] = $model->contact->address->isMain;
}
if (null !== $model->contact->address->index) {
    $jsonData["contact"]["address"]["index"] = $model->contact->address->index;
}
if (null !== $model->contact->address->countryIso) {
    $jsonData["contact"]["address"]["countryIso"] = $model->contact->address->countryIso;
}
if (null !== $model->contact->address->region) {
    $jsonData["contact"]["address"]["region"] = $model->contact->address->region;
}
if (null !== $model->contact->address->regionId) {
    $jsonData["contact"]["address"]["regionId"] = $model->contact->address->regionId;
}
if (null !== $model->contact->address->city) {
    $jsonData["contact"]["address"]["city"] = $model->contact->address->city;
}
if (null !== $model->contact->address->cityId) {
    $jsonData["contact"]["address"]["cityId"] = $model->contact->address->cityId;
}
if (null !== $model->contact->address->cityType) {
    $jsonData["contact"]["address"]["cityType"] = $model->contact->address->cityType;
}
if (null !== $model->contact->address->street) {
    $jsonData["contact"]["address"]["street"] = $model->contact->address->street;
}
if (null !== $model->contact->address->streetId) {
    $jsonData["contact"]["address"]["streetId"] = $model->contact->address->streetId;
}
if (null !== $model->contact->address->streetType) {
    $jsonData["contact"]["address"]["streetType"] = $model->contact->address->streetType;
}
if (null !== $model->contact->address->building) {
    $jsonData["contact"]["address"]["building"] = $model->contact->address->building;
}
if (null !== $model->contact->address->flat) {
    $jsonData["contact"]["address"]["flat"] = $model->contact->address->flat;
}
if (null !== $model->contact->address->floor) {
    $jsonData["contact"]["address"]["floor"] = $model->contact->address->floor;
}
if (null !== $model->contact->address->block) {
    $jsonData["contact"]["address"]["block"] = $model->contact->address->block;
}
if (null !== $model->contact->address->house) {
    $jsonData["contact"]["address"]["house"] = $model->contact->address->house;
}
if (null !== $model->contact->address->housing) {
    $jsonData["contact"]["address"]["housing"] = $model->contact->address->housing;
}
if (null !== $model->contact->address->metro) {
    $jsonData["contact"]["address"]["metro"] = $model->contact->address->metro;
}
if (null !== $model->contact->address->notes) {
    $jsonData["contact"]["address"]["notes"] = $model->contact->address->notes;
}
if (null !== $model->contact->address->text) {
    $jsonData["contact"]["address"]["text"] = $model->contact->address->text;
}
if (null !== $model->contact->address->externalId) {
    $jsonData["contact"]["address"]["externalId"] = $model->contact->address->externalId;
}

if (0 === \count($jsonData["contact"]["address"])) {
    $jsonData["contact"]["address"] = $emptyObject;
}

}
if (null !== $model->contact->segments) {
    $jsonData["contact"]["segments"] = [];
foreach (array_keys($model->contact->segments) as $index23) {
    $jsonData["contact"]["segments"][$index23] = [];
if (null !== $model->contact->segments[$index23]->id) {
    $jsonData["contact"]["segments"][$index23]["id"] = $model->contact->segments[$index23]->id;
}
if (null !== $model->contact->segments[$index23]->code) {
    $jsonData["contact"]["segments"][$index23]["code"] = $model->contact->segments[$index23]->code;
}
if (null !== $model->contact->segments[$index23]->name) {
    $jsonData["contact"]["segments"][$index23]["name"] = $model->contact->segments[$index23]->name;
}
if (null !== $model->contact->segments[$index23]->createdAt) {
    $jsonData["contact"]["segments"][$index23]["createdAt"] = $model->contact->segments[$index23]->createdAt->format('Y-m-d H:i:s');;
}
if (null !== $model->contact->segments[$index23]->isDynamic) {
    $jsonData["contact"]["segments"][$index23]["isDynamic"] = $model->contact->segments[$index23]->isDynamic;
}
if (null !== $model->contact->segments[$index23]->customersCount) {
    $jsonData["contact"]["segments"][$index23]["customersCount"] = $model->contact->segments[$index23]->customersCount;
}
if (null !== $model->contact->segments[$index23]->active) {
    $jsonData["contact"]["segments"][$index23]["active"] = $model->contact->segments[$index23]->active;
}

if (0 === \count($jsonData["contact"]["segments"][$index23])) {
    $jsonData["contact"]["segments"][$index23] = $emptyObject;
}

}

}
if (null !== $model->contact->maturationTime) {
    $jsonData["contact"]["maturationTime"] = $model->contact->maturationTime;
}
if (null !== $model->contact->firstName) {
    $jsonData["contact"]["firstName"] = $model->contact->firstName;
}
if (null !== $model->contact->lastName) {
    $jsonData["contact"]["lastName"] = $model->contact->lastName;
}
if (null !== $model->contact->patronymic) {
    $jsonData["contact"]["patronymic"] = $model->contact->patronymic;
}
if (null !== $model->contact->sex) {
    $jsonData["contact"]["sex"] = $model->contact->sex;
}
if (null !== $model->contact->presumableSex) {
    $jsonData["contact"]["presumableSex"] = $model->contact->presumableSex;
}
if (null !== $model->contact->email) {
    $jsonData["contact"]["email"] = $model->contact->email;
}
if (null !== $model->contact->emailMarketingUnsubscribedAt) {
    $jsonData["contact"]["emailMarketingUnsubscribedAt"] = $model->contact->emailMarketingUnsubscribedAt->format('Y-m-d H:i:s');;
}
if (null !== $model->contact->phones) {
    $jsonData["contact"]["phones"] = [];
foreach (array_keys($model->contact->phones) as $index21) {
    $jsonData["contact"]["phones"][$index21] = [];
if (null !== $model->contact->phones[$index21]->number) {
    $jsonData["contact"]["phones"][$index21]["number"] = $model->contact->phones[$index21]->number;
}

if (0 === \count($jsonData["contact"]["phones"][$index21])) {
    $jsonData["contact"]["phones"][$index21] = $emptyObject;
}

}

}
if (null !== $model->contact->birthday) {
    $jsonData["contact"]["birthday"] = $model->contact->birthday->format('Y-m-d H:i:s');;
}
if (null !== $model->contact->source) {
    $jsonData["contact"]["source"] = [];
if (null !== $model->contact->source->source) {
    $jsonData["contact"]["source"]["source"] = $model->contact->source->source;
}
if (null !== $model->contact->source->medium) {
    $jsonData["contact"]["source"]["medium"] = $model->contact->source->medium;
}
if (null !== $model->contact->source->campaign) {
    $jsonData["contact"]["source"]["campaign"] = $model->contact->source->campaign;
}
if (null !== $model->contact->source->keyword) {
    $jsonData["contact"]["source"]["keyword"] = $model->contact->source->keyword;
}
if (null !== $model->contact->source->content) {
    $jsonData["contact"]["source"]["content"] = $model->contact->source->content;
}

if (0 === \count($jsonData["contact"]["source"])) {
    $jsonData["contact"]["source"] = $emptyObject;
}

}
if (null !== $model->contact->photoUrl) {
    $jsonData["contact"]["photoUrl"] = $model->contact->photoUrl;
}
if (null !== $model->contact->mgCustomerId) {
    $jsonData["contact"]["mgCustomerId"] = $model->contact->mgCustomerId;
}
if (null !== $model->contact->subscribed) {
    $jsonData["contact"]["subscribed"] = $model->contact->subscribed;
}

if (0 === \count($jsonData["contact"])) {
    $jsonData["contact"] = $emptyObject;
}

}
if (null !== $model->company) {
    $jsonData["company"] = [];
if (null !== $model->company->id) {
    $jsonData["company"]["id"] = $model->company->id;
}
if (null !== $model->company->isMain) {
    $jsonData["company"]["isMain"] = $model->company->isMain;
}
if (null !== $model->company->externalId) {
    $jsonData["company"]["externalId"] = $model->company->externalId;
}
if (null !== $model->company->active) {
    $jsonData["company"]["active"] = $model->company->active;
}
if (null !== $model->company->name) {
    $jsonData["company"]["name"] = $model->company->name;
}
if (null !== $model->company->brand) {
    $jsonData["company"]["brand"] = $model->company->brand;
}
if (null !== $model->company->site) {
    $jsonData["company"]["site"] = $model->company->site;
}
if (null !== $model->company->createdAt) {
    $jsonData["company"]["createdAt"] = $model->company->createdAt->format('Y-m-d H:i:s');;
}
if (null !== $model->company->customer) {
    $jsonData["company"]["customer"] = [];
if (null !== $model->company->customer->site) {
    $jsonData["company"]["customer"]["site"] = $model->company->customer->site;
}
if (null !== $model->company->customer->id) {
    $jsonData["company"]["customer"]["id"] = $model->company->customer->id;
}
if (null !== $model->company->customer->externalId) {
    $jsonData["company"]["customer"]["externalId"] = $model->company->customer->externalId;
}
if (null !== $model->company->customer->type) {
    $jsonData["company"]["customer"]["type"] = $model->company->customer->type;
}

if (0 === \count($jsonData["company"]["customer"])) {
    $jsonData["company"]["customer"] = $emptyObject;
}

}
if (null !== $model->company->contragent) {
    $jsonData["company"]["contragent"] = [];
if (null !== $model->company->contragent->contragentType) {
    $jsonData["company"]["contragent"]["contragentType"] = $model->company->contragent->contragentType;
}
if (null !== $model->company->contragent->legalName) {
    $jsonData["company"]["contragent"]["legalName"] = $model->company->contragent->legalName;
}
if (null !== $model->company->contragent->legalAddress) {
    $jsonData["company"]["contragent"]["legalAddress"] = $model->company->contragent->legalAddress;
}
if (null !== $model->company->contragent->INN) {
    $jsonData["company"]["contragent"]["INN"] = $model->company->contragent->INN;
}
if (null !== $model->company->contragent->OKPO) {
    $jsonData["company"]["contragent"]["OKPO"] = $model->company->contragent->OKPO;
}
if (null !== $model->company->contragent->KPP) {
    $jsonData["company"]["contragent"]["KPP"] = $model->company->contragent->KPP;
}
if (null !== $model->company->contragent->OGRN) {
    $jsonData["company"]["contragent"]["OGRN"] = $model->company->contragent->OGRN;
}
if (null !== $model->company->contragent->OGRNIP) {
    $jsonData["company"]["contragent"]["OGRNIP"] = $model->company->contragent->OGRNIP;
}
if (null !== $model->company->contragent->certificateNumber) {
    $jsonData["company"]["contragent"]["certificateNumber"] = $model->company->contragent->certificateNumber;
}
if (null !== $model->company->contragent->certificateDate) {
    $jsonData["company"]["contragent"]["certificateDate"] = $model->company->contragent->certificateDate->format('Y-m-d H:i:s');;
}
if (null !== $model->company->contragent->BIK) {
    $jsonData["company"]["contragent"]["BIK"] = $model->company->contragent->BIK;
}
if (null !== $model->company->contragent->bank) {
    $jsonData["company"]["contragent"]["bank"] = $model->company->contragent->bank;
}
if (null !== $model->company->contragent->bankAddress) {
    $jsonData["company"]["contragent"]["bankAddress"] = $model->company->contragent->bankAddress;
}
if (null !== $model->company->contragent->corrAccount) {
    $jsonData["company"]["contragent"]["corrAccount"] = $model->company->contragent->corrAccount;
}
if (null !== $model->company->contragent->bankAccount) {
    $jsonData["company"]["contragent"]["bankAccount"] = $model->company->contragent->bankAccount;
}

if (0 === \count($jsonData["company"]["contragent"])) {
    $jsonData["company"]["contragent"] = $emptyObject;
}

}
if (null !== $model->company->address) {
    $jsonData["company"]["address"] = [];
if (null !== $model->company->address->id) {
    $jsonData["company"]["address"]["id"] = $model->company->address->id;
}
if (null !== $model->company->address->name) {
    $jsonData["company"]["address"]["name"] = $model->company->address->name;
}
if (null !== $model->company->address->isMain) {
    $jsonData["company"]["address"]["isMain"] = $model->company->address->isMain;
}
if (null !== $model->company->address->index) {
    $jsonData["company"]["address"]["index"] = $model->company->address->index;
}
if (null !== $model->company->address->countryIso) {
    $jsonData["company"]["address"]["countryIso"] = $model->company->address->countryIso;
}
if (null !== $model->company->address->region) {
    $jsonData["company"]["address"]["region"] = $model->company->address->region;
}
if (null !== $model->company->address->regionId) {
    $jsonData["company"]["address"]["regionId"] = $model->company->address->regionId;
}
if (null !== $model->company->address->city) {
    $jsonData["company"]["address"]["city"] = $model->company->address->city;
}
if (null !== $model->company->address->cityId) {
    $jsonData["company"]["address"]["cityId"] = $model->company->address->cityId;
}
if (null !== $model->company->address->cityType) {
    $jsonData["company"]["address"]["cityType"] = $model->company->address->cityType;
}
if (null !== $model->company->address->street) {
    $jsonData["company"]["address"]["street"] = $model->company->address->street;
}
if (null !== $model->company->address->streetId) {
    $jsonData["company"]["address"]["streetId"] = $model->company->address->streetId;
}
if (null !== $model->company->address->streetType) {
    $jsonData["company"]["address"]["streetType"] = $model->company->address->streetType;
}
if (null !== $model->company->address->building) {
    $jsonData["company"]["address"]["building"] = $model->company->address->building;
}
if (null !== $model->company->address->flat) {
    $jsonData["company"]["address"]["flat"] = $model->company->address->flat;
}
if (null !== $model->company->address->floor) {
    $jsonData["company"]["address"]["floor"] = $model->company->address->floor;
}
if (null !== $model->company->address->block) {
    $jsonData["company"]["address"]["block"] = $model->company->address->block;
}
if (null !== $model->company->address->house) {
    $jsonData["company"]["address"]["house"] = $model->company->address->house;
}
if (null !== $model->company->address->housing) {
    $jsonData["company"]["address"]["housing"] = $model->company->address->housing;
}
if (null !== $model->company->address->metro) {
    $jsonData["company"]["address"]["metro"] = $model->company->address->metro;
}
if (null !== $model->company->address->notes) {
    $jsonData["company"]["address"]["notes"] = $model->company->address->notes;
}
if (null !== $model->company->address->text) {
    $jsonData["company"]["address"]["text"] = $model->company->address->text;
}
if (null !== $model->company->address->externalId) {
    $jsonData["company"]["address"]["externalId"] = $model->company->address->externalId;
}

if (0 === \count($jsonData["company"]["address"])) {
    $jsonData["company"]["address"] = $emptyObject;
}

}
if (null !== $model->company->customFields) {
    $jsonData["company"]["customFields"] = [];
foreach (array_keys($model->company->customFields) as $index27) {
    $jsonData["company"]["customFields"] = $model->company->customFields;
}

}
if (null !== $model->company->marginSumm) {
    $jsonData["company"]["marginSumm"] = $model->company->marginSumm;
}
if (null !== $model->company->totalSumm) {
    $jsonData["company"]["totalSumm"] = $model->company->totalSumm;
}
if (null !== $model->company->averageSumm) {
    $jsonData["company"]["averageSumm"] = $model->company->averageSumm;
}
if (null !== $model->company->ordersCount) {
    $jsonData["company"]["ordersCount"] = $model->company->ordersCount;
}
if (null !== $model->company->costSumm) {
    $jsonData["company"]["costSumm"] = $model->company->costSumm;
}

if (0 === \count($jsonData["company"])) {
    $jsonData["company"] = $emptyObject;
}

}
if (null !== $model->contragent) {
    $jsonData["contragent"] = [];
if (null !== $model->contragent->contragentType) {
    $jsonData["contragent"]["contragentType"] = $model->contragent->contragentType;
}
if (null !== $model->contragent->legalName) {
    $jsonData["contragent"]["legalName"] = $model->contragent->legalName;
}
if (null !== $model->contragent->legalAddress) {
    $jsonData["contragent"]["legalAddress"] = $model->contragent->legalAddress;
}
if (null !== $model->contragent->INN) {
    $jsonData["contragent"]["INN"] = $model->contragent->INN;
}
if (null !== $model->contragent->OKPO) {
    $jsonData["contragent"]["OKPO"] = $model->contragent->OKPO;
}
if (null !== $model->contragent->KPP) {
    $jsonData["contragent"]["KPP"] = $model->contragent->KPP;
}
if (null !== $model->contragent->OGRN) {
    $jsonData["contragent"]["OGRN"] = $model->contragent->OGRN;
}
if (null !== $model->contragent->OGRNIP) {
    $jsonData["contragent"]["OGRNIP"] = $model->contragent->OGRNIP;
}
if (null !== $model->contragent->certificateNumber) {
    $jsonData["contragent"]["certificateNumber"] = $model->contragent->certificateNumber;
}
if (null !== $model->contragent->certificateDate) {
    $jsonData["contragent"]["certificateDate"] = $model->contragent->certificateDate->format('Y-m-d H:i:s');;
}
if (null !== $model->contragent->BIK) {
    $jsonData["contragent"]["BIK"] = $model->contragent->BIK;
}
if (null !== $model->contragent->bank) {
    $jsonData["contragent"]["bank"] = $model->contragent->bank;
}
if (null !== $model->contragent->bankAddress) {
    $jsonData["contragent"]["bankAddress"] = $model->contragent->bankAddress;
}
if (null !== $model->contragent->corrAccount) {
    $jsonData["contragent"]["corrAccount"] = $model->contragent->corrAccount;
}
if (null !== $model->contragent->bankAccount) {
    $jsonData["contragent"]["bankAccount"] = $model->contragent->bankAccount;
}

if (0 === \count($jsonData["contragent"])) {
    $jsonData["contragent"] = $emptyObject;
}

}
if (null !== $model->delivery) {
    $jsonData["delivery"] = [];
if (null !== $model->delivery->code) {
    $jsonData["delivery"]["code"] = $model->delivery->code;
}
if (null !== $model->delivery->integrationCode) {
    $jsonData["delivery"]["integrationCode"] = $model->delivery->integrationCode;
}
if (null !== $model->delivery->data) {
    $jsonData["delivery"]["data"] = [];
if (null !== $model->delivery->data->externalId) {
    $jsonData["delivery"]["data"]["externalId"] = $model->delivery->data->externalId;
}
if (null !== $model->delivery->data->trackNumber) {
    $jsonData["delivery"]["data"]["trackNumber"] = $model->delivery->data->trackNumber;
}
if (null !== $model->delivery->data->status) {
    $jsonData["delivery"]["data"]["status"] = $model->delivery->data->status;
}
if (null !== $model->delivery->data->locked) {
    $jsonData["delivery"]["data"]["locked"] = $model->delivery->data->locked;
}
if (null !== $model->delivery->data->pickuppointAddress) {
    $jsonData["delivery"]["data"]["pickuppointAddress"] = $model->delivery->data->pickuppointAddress;
}
if (null !== $model->delivery->data->days) {
    $jsonData["delivery"]["data"]["days"] = $model->delivery->data->days;
}
if (null !== $model->delivery->data->statusText) {
    $jsonData["delivery"]["data"]["statusText"] = $model->delivery->data->statusText;
}
if (null !== $model->delivery->data->statusDate) {
    $jsonData["delivery"]["data"]["statusDate"] = $model->delivery->data->statusDate->format('Y-m-d');;
}
if (null !== $model->delivery->data->tariff) {
    $jsonData["delivery"]["data"]["tariff"] = $model->delivery->data->tariff;
}
if (null !== $model->delivery->data->tariffName) {
    $jsonData["delivery"]["data"]["tariffName"] = $model->delivery->data->tariffName;
}
if (null !== $model->delivery->data->pickuppointId) {
    $jsonData["delivery"]["data"]["pickuppointId"] = $model->delivery->data->pickuppointId;
}
if (null !== $model->delivery->data->pickuppointSchedule) {
    $jsonData["delivery"]["data"]["pickuppointSchedule"] = $model->delivery->data->pickuppointSchedule;
}
if (null !== $model->delivery->data->pickuppointPhone) {
    $jsonData["delivery"]["data"]["pickuppointPhone"] = $model->delivery->data->pickuppointPhone;
}
if (null !== $model->delivery->data->payerType) {
    $jsonData["delivery"]["data"]["payerType"] = $model->delivery->data->payerType;
}
if (null !== $model->delivery->data->statusComment) {
    $jsonData["delivery"]["data"]["statusComment"] = $model->delivery->data->statusComment;
}
if (null !== $model->delivery->data->cost) {
    $jsonData["delivery"]["data"]["cost"] = $model->delivery->data->cost;
}
if (null !== $model->delivery->data->minTerm) {
    $jsonData["delivery"]["data"]["minTerm"] = $model->delivery->data->minTerm;
}
if (null !== $model->delivery->data->maxTerm) {
    $jsonData["delivery"]["data"]["maxTerm"] = $model->delivery->data->maxTerm;
}
if (null !== $model->delivery->data->shipmentpointId) {
    $jsonData["delivery"]["data"]["shipmentpointId"] = $model->delivery->data->shipmentpointId;
}
if (null !== $model->delivery->data->shipmentpointName) {
    $jsonData["delivery"]["data"]["shipmentpointName"] = $model->delivery->data->shipmentpointName;
}
if (null !== $model->delivery->data->shipmentpointAddress) {
    $jsonData["delivery"]["data"]["shipmentpointAddress"] = $model->delivery->data->shipmentpointAddress;
}
if (null !== $model->delivery->data->shipmentpointSchedule) {
    $jsonData["delivery"]["data"]["shipmentpointSchedule"] = $model->delivery->data->shipmentpointSchedule;
}
if (null !== $model->delivery->data->shipmentpointPhone) {
    $jsonData["delivery"]["data"]["shipmentpointPhone"] = $model->delivery->data->shipmentpointPhone;
}
if (null !== $model->delivery->data->shipmentpointCoordinateLatitude) {
    $jsonData["delivery"]["data"]["shipmentpointCoordinateLatitude"] = $model->delivery->data->shipmentpointCoordinateLatitude;
}
if (null !== $model->delivery->data->shipmentpointCoordinateLongitude) {
    $jsonData["delivery"]["data"]["shipmentpointCoordinateLongitude"] = $model->delivery->data->shipmentpointCoordinateLongitude;
}
if (null !== $model->delivery->data->pickuppointName) {
    $jsonData["delivery"]["data"]["pickuppointName"] = $model->delivery->data->pickuppointName;
}
if (null !== $model->delivery->data->pickuppointCoordinateLatitude) {
    $jsonData["delivery"]["data"]["pickuppointCoordinateLatitude"] = $model->delivery->data->pickuppointCoordinateLatitude;
}
if (null !== $model->delivery->data->pickuppointCoordinateLongitude) {
    $jsonData["delivery"]["data"]["pickuppointCoordinateLongitude"] = $model->delivery->data->pickuppointCoordinateLongitude;
}
if (null !== $model->delivery->data->extraData) {
    $jsonData["delivery"]["data"]["extraData"] = [];
foreach (array_keys($model->delivery->data->extraData) as $index33) {
    $jsonData["delivery"]["data"]["extraData"] = $model->delivery->data->extraData;
}

}
if (null !== $model->delivery->data->packages) {
    $jsonData["delivery"]["data"]["packages"] = [];
foreach (array_keys($model->delivery->data->packages) as $index32) {
    $jsonData["delivery"]["data"]["packages"][$index32] = [];
if (null !== $model->delivery->data->packages[$index32]->packageId) {
    $jsonData["delivery"]["data"]["packages"][$index32]["packageId"] = $model->delivery->data->packages[$index32]->packageId;
}
if (null !== $model->delivery->data->packages[$index32]->weight) {
    $jsonData["delivery"]["data"]["packages"][$index32]["weight"] = $model->delivery->data->packages[$index32]->weight;
}
if (null !== $model->delivery->data->packages[$index32]->length) {
    $jsonData["delivery"]["data"]["packages"][$index32]["length"] = $model->delivery->data->packages[$index32]->length;
}
if (null !== $model->delivery->data->packages[$index32]->width) {
    $jsonData["delivery"]["data"]["packages"][$index32]["width"] = $model->delivery->data->packages[$index32]->width;
}
if (null !== $model->delivery->data->packages[$index32]->height) {
    $jsonData["delivery"]["data"]["packages"][$index32]["height"] = $model->delivery->data->packages[$index32]->height;
}
if (null !== $model->delivery->data->packages[$index32]->items) {
    $jsonData["delivery"]["data"]["packages"][$index32]["items"] = [];
foreach (array_keys($model->delivery->data->packages[$index32]->items) as $index51) {
    $jsonData["delivery"]["data"]["packages"][$index32]["items"][$index51] = [];
if (null !== $model->delivery->data->packages[$index32]->items[$index51]->orderProduct) {
    $jsonData["delivery"]["data"]["packages"][$index32]["items"][$index51]["orderProduct"] = [];
if (null !== $model->delivery->data->packages[$index32]->items[$index51]->orderProduct->id) {
    $jsonData["delivery"]["data"]["packages"][$index32]["items"][$index51]["orderProduct"]["id"] = $model->delivery->data->packages[$index32]->items[$index51]->orderProduct->id;
}
if (null !== $model->delivery->data->packages[$index32]->items[$index51]->orderProduct->externalId) {
    $jsonData["delivery"]["data"]["packages"][$index32]["items"][$index51]["orderProduct"]["externalId"] = $model->delivery->data->packages[$index32]->items[$index51]->orderProduct->externalId;
}
if (null !== $model->delivery->data->packages[$index32]->items[$index51]->orderProduct->externalIds) {
    $jsonData["delivery"]["data"]["packages"][$index32]["items"][$index51]["orderProduct"]["externalIds"] = [];
foreach (array_keys($model->delivery->data->packages[$index32]->items[$index51]->orderProduct->externalIds) as $index92) {
    $jsonData["delivery"]["data"]["packages"][$index32]["items"][$index51]["orderProduct"]["externalIds"][$index92] = [];
if (null !== $model->delivery->data->packages[$index32]->items[$index51]->orderProduct->externalIds[$index92]->code) {
    $jsonData["delivery"]["data"]["packages"][$index32]["items"][$index51]["orderProduct"]["externalIds"][$index92]["code"] = $model->delivery->data->packages[$index32]->items[$index51]->orderProduct->externalIds[$index92]->code;
}
if (null !== $model->delivery->data->packages[$index32]->items[$index51]->orderProduct->externalIds[$index92]->value) {
    $jsonData["delivery"]["data"]["packages"][$index32]["items"][$index51]["orderProduct"]["externalIds"][$index92]["value"] = $model->delivery->data->packages[$index32]->items[$index51]->orderProduct->externalIds[$index92]->value;
}

if (0 === \count($jsonData["delivery"]["data"]["packages"][$index32]["items"][$index51]["orderProduct"]["externalIds"][$index92])) {
    $jsonData["delivery"]["data"]["packages"][$index32]["items"][$index51]["orderProduct"]["externalIds"][$index92] = $emptyObject;
}

}

}

if (0 === \count($jsonData["delivery"]["data"]["packages"][$index32]["items"][$index51]["orderProduct"])) {
    $jsonData["delivery"]["data"]["packages"][$index32]["items"][$index51]["orderProduct"] = $emptyObject;
}

}
if (null !== $model->delivery->data->packages[$index32]->items[$index51]->quantity) {
    $jsonData["delivery"]["data"]["packages"][$index32]["items"][$index51]["quantity"] = $model->delivery->data->packages[$index32]->items[$index51]->quantity;
}

if (0 === \count($jsonData["delivery"]["data"]["packages"][$index32]["items"][$index51])) {
    $jsonData["delivery"]["data"]["packages"][$index32]["items"][$index51] = $emptyObject;
}

}

}

if (0 === \count($jsonData["delivery"]["data"]["packages"][$index32])) {
    $jsonData["delivery"]["data"]["packages"][$index32] = $emptyObject;
}

}

}
if (null !== $model->delivery->data->returnExternalId) {
    $jsonData["delivery"]["data"]["returnExternalId"] = $model->delivery->data->returnExternalId;
}
if (null !== $model->delivery->data->deliveryName) {
    $jsonData["delivery"]["data"]["deliveryName"] = $model->delivery->data->deliveryName;
}
if (null !== $model->delivery->data->price) {
    $jsonData["delivery"]["data"]["price"] = $model->delivery->data->price;
}
if (null !== $model->delivery->data->insurancePrice) {
    $jsonData["delivery"]["data"]["insurancePrice"] = $model->delivery->data->insurancePrice;
}
if (null !== $model->delivery->data->tariffType) {
    $jsonData["delivery"]["data"]["tariffType"] = $model->delivery->data->tariffType;
}
if (null !== $model->delivery->data->receiverCity) {
    $jsonData["delivery"]["data"]["receiverCity"] = $model->delivery->data->receiverCity;
}
if (null !== $model->delivery->data->services) {
    $jsonData["delivery"]["data"]["services"] = [];
foreach (array_keys($model->delivery->data->services) as $index32) {
    $jsonData["delivery"]["data"]["services"] = $model->delivery->data->services;
}

}
if (null !== $model->delivery->data->packageNumber) {
    $jsonData["delivery"]["data"]["packageNumber"] = $model->delivery->data->packageNumber;
}
if (null !== $model->delivery->data->comment) {
    $jsonData["delivery"]["data"]["comment"] = $model->delivery->data->comment;
}
if (null !== $model->delivery->data->deliveryCode) {
    $jsonData["delivery"]["data"]["deliveryCode"] = $model->delivery->data->deliveryCode;
}
if (null !== $model->delivery->data->notes) {
    $jsonData["delivery"]["data"]["notes"] = $model->delivery->data->notes;
}
if (null !== $model->delivery->data->id) {
    $jsonData["delivery"]["data"]["id"] = $model->delivery->data->id;
}
if (null !== $model->delivery->data->firstName) {
    $jsonData["delivery"]["data"]["firstName"] = $model->delivery->data->firstName;
}
if (null !== $model->delivery->data->lastName) {
    $jsonData["delivery"]["data"]["lastName"] = $model->delivery->data->lastName;
}
if (null !== $model->delivery->data->patronymic) {
    $jsonData["delivery"]["data"]["patronymic"] = $model->delivery->data->patronymic;
}
if (null !== $model->delivery->data->active) {
    $jsonData["delivery"]["data"]["active"] = $model->delivery->data->active;
}
if (null !== $model->delivery->data->email) {
    $jsonData["delivery"]["data"]["email"] = $model->delivery->data->email;
}
if (null !== $model->delivery->data->phone) {
    $jsonData["delivery"]["data"]["phone"] = [];
if (null !== $model->delivery->data->phone->number) {
    $jsonData["delivery"]["data"]["phone"]["number"] = $model->delivery->data->phone->number;
}

if (0 === \count($jsonData["delivery"]["data"]["phone"])) {
    $jsonData["delivery"]["data"]["phone"] = $emptyObject;
}

}
if (null !== $model->delivery->data->description) {
    $jsonData["delivery"]["data"]["description"] = $model->delivery->data->description;
}
if (null !== $model->delivery->data->courierId) {
    $jsonData["delivery"]["data"]["courierId"] = $model->delivery->data->courierId;
}
if (null !== $model->delivery->data->serviceType) {
    $jsonData["delivery"]["data"]["serviceType"] = $model->delivery->data->serviceType;
}
if (null !== $model->delivery->data->pickuppoint) {
    $jsonData["delivery"]["data"]["pickuppoint"] = $model->delivery->data->pickuppoint;
}
if (null !== $model->delivery->data->receiverWarehouseTypeRef) {
    $jsonData["delivery"]["data"]["receiverWarehouseTypeRef"] = $model->delivery->data->receiverWarehouseTypeRef;
}
if (null !== $model->delivery->data->statusName) {
    $jsonData["delivery"]["data"]["statusName"] = $model->delivery->data->statusName;
}
if (null !== $model->delivery->data->receiverCityRef) {
    $jsonData["delivery"]["data"]["receiverCityRef"] = $model->delivery->data->receiverCityRef;
}
if (null !== $model->delivery->data->receiverStreet) {
    $jsonData["delivery"]["data"]["receiverStreet"] = $model->delivery->data->receiverStreet;
}
if (null !== $model->delivery->data->receiverStreetRef) {
    $jsonData["delivery"]["data"]["receiverStreetRef"] = $model->delivery->data->receiverStreetRef;
}
if (null !== $model->delivery->data->seatsAmount) {
    $jsonData["delivery"]["data"]["seatsAmount"] = $model->delivery->data->seatsAmount;
}
if (null !== $model->delivery->data->cargoType) {
    $jsonData["delivery"]["data"]["cargoType"] = $model->delivery->data->cargoType;
}
if (null !== $model->delivery->data->cargoDescription) {
    $jsonData["delivery"]["data"]["cargoDescription"] = $model->delivery->data->cargoDescription;
}
if (null !== $model->delivery->data->cashPayerType) {
    $jsonData["delivery"]["data"]["cashPayerType"] = $model->delivery->data->cashPayerType;
}
if (null !== $model->delivery->data->paymentForm) {
    $jsonData["delivery"]["data"]["paymentForm"] = $model->delivery->data->paymentForm;
}
if (null !== $model->delivery->data->ownershipForm) {
    $jsonData["delivery"]["data"]["ownershipForm"] = $model->delivery->data->ownershipForm;
}
if (null !== $model->delivery->data->accompanyingDocument) {
    $jsonData["delivery"]["data"]["accompanyingDocument"] = $model->delivery->data->accompanyingDocument;
}
if (null !== $model->delivery->data->preferredDeliveryDate) {
    $jsonData["delivery"]["data"]["preferredDeliveryDate"] = $model->delivery->data->preferredDeliveryDate->format('Y-m-d H:i:s');;
}
if (null !== $model->delivery->data->timeInterval) {
    $jsonData["delivery"]["data"]["timeInterval"] = $model->delivery->data->timeInterval;
}
if (null !== $model->delivery->data->saturdayDelivery) {
    $jsonData["delivery"]["data"]["saturdayDelivery"] = $model->delivery->data->saturdayDelivery;
}
if (null !== $model->delivery->data->deliveryDate) {
    $jsonData["delivery"]["data"]["deliveryDate"] = $model->delivery->data->deliveryDate;
}
if (null !== $model->delivery->data->denieReason) {
    $jsonData["delivery"]["data"]["denieReason"] = $model->delivery->data->denieReason;
}
if (null !== $model->delivery->data->backwardDelivery) {
    $jsonData["delivery"]["data"]["backwardDelivery"] = $model->delivery->data->backwardDelivery;
}
if (null !== $model->delivery->data->backwardDeliveryCargoType) {
    $jsonData["delivery"]["data"]["backwardDeliveryCargoType"] = $model->delivery->data->backwardDeliveryCargoType;
}
if (null !== $model->delivery->data->backwardDeliveryPayerType) {
    $jsonData["delivery"]["data"]["backwardDeliveryPayerType"] = $model->delivery->data->backwardDeliveryPayerType;
}
if (null !== $model->delivery->data->backwardDeliveryRedeliveryString) {
    $jsonData["delivery"]["data"]["backwardDeliveryRedeliveryString"] = $model->delivery->data->backwardDeliveryRedeliveryString;
}
if (null !== $model->delivery->data->afterpaymentOnGoodsCost) {
    $jsonData["delivery"]["data"]["afterpaymentOnGoodsCost"] = $model->delivery->data->afterpaymentOnGoodsCost;
}
if (null !== $model->delivery->data->declaredValue) {
    $jsonData["delivery"]["data"]["declaredValue"] = $model->delivery->data->declaredValue;
}
if (null !== $model->delivery->data->sendDate) {
    $jsonData["delivery"]["data"]["sendDate"] = $model->delivery->data->sendDate->format('Y-m-d H:i:s');;
}
if (null !== $model->delivery->data->deliveryType) {
    $jsonData["delivery"]["data"]["deliveryType"] = $model->delivery->data->deliveryType;
}
if (null !== $model->delivery->data->pickupType) {
    $jsonData["delivery"]["data"]["pickupType"] = $model->delivery->data->pickupType;
}
if (null !== $model->delivery->data->pickuppointDescription) {
    $jsonData["delivery"]["data"]["pickuppointDescription"] = $model->delivery->data->pickuppointDescription;
}
if (null !== $model->delivery->data->placesCount) {
    $jsonData["delivery"]["data"]["placesCount"] = $model->delivery->data->placesCount;
}
if (null !== $model->delivery->data->service) {
    $jsonData["delivery"]["data"]["service"] = $model->delivery->data->service;
}

if (0 === \count($jsonData["delivery"]["data"])) {
    $jsonData["delivery"]["data"] = $emptyObject;
}

}
if (null !== $model->delivery->service) {
    $jsonData["delivery"]["service"] = [];
if (null !== $model->delivery->service->name) {
    $jsonData["delivery"]["service"]["name"] = $model->delivery->service->name;
}
if (null !== $model->delivery->service->code) {
    $jsonData["delivery"]["service"]["code"] = $model->delivery->service->code;
}
if (null !== $model->delivery->service->active) {
    $jsonData["delivery"]["service"]["active"] = $model->delivery->service->active;
}

if (0 === \count($jsonData["delivery"]["service"])) {
    $jsonData["delivery"]["service"] = $emptyObject;
}

}
if (null !== $model->delivery->cost) {
    $jsonData["delivery"]["cost"] = $model->delivery->cost;
}
if (null !== $model->delivery->netCost) {
    $jsonData["delivery"]["netCost"] = $model->delivery->netCost;
}
if (null !== $model->delivery->date) {
    $jsonData["delivery"]["date"] = $model->delivery->date->format('Y-m-d');;
}
if (null !== $model->delivery->time) {
    $jsonData["delivery"]["time"] = [];
if (null !== $model->delivery->time->from) {
    $jsonData["delivery"]["time"]["from"] = $model->delivery->time->from->format('H:i');;
}
if (null !== $model->delivery->time->to) {
    $jsonData["delivery"]["time"]["to"] = $model->delivery->time->to->format('H:i');;
}
if (null !== $model->delivery->time->custom) {
    $jsonData["delivery"]["time"]["custom"] = $model->delivery->time->custom;
}

if (0 === \count($jsonData["delivery"]["time"])) {
    $jsonData["delivery"]["time"] = $emptyObject;
}

}
if (null !== $model->delivery->address) {
    $jsonData["delivery"]["address"] = [];
if (null !== $model->delivery->address->id) {
    $jsonData["delivery"]["address"]["id"] = $model->delivery->address->id;
}
if (null !== $model->delivery->address->index) {
    $jsonData["delivery"]["address"]["index"] = $model->delivery->address->index;
}
if (null !== $model->delivery->address->countryIso) {
    $jsonData["delivery"]["address"]["countryIso"] = $model->delivery->address->countryIso;
}
if (null !== $model->delivery->address->region) {
    $jsonData["delivery"]["address"]["region"] = $model->delivery->address->region;
}
if (null !== $model->delivery->address->regionId) {
    $jsonData["delivery"]["address"]["regionId"] = $model->delivery->address->regionId;
}
if (null !== $model->delivery->address->city) {
    $jsonData["delivery"]["address"]["city"] = $model->delivery->address->city;
}
if (null !== $model->delivery->address->cityId) {
    $jsonData["delivery"]["address"]["cityId"] = $model->delivery->address->cityId;
}
if (null !== $model->delivery->address->cityType) {
    $jsonData["delivery"]["address"]["cityType"] = $model->delivery->address->cityType;
}
if (null !== $model->delivery->address->street) {
    $jsonData["delivery"]["address"]["street"] = $model->delivery->address->street;
}
if (null !== $model->delivery->address->streetId) {
    $jsonData["delivery"]["address"]["streetId"] = $model->delivery->address->streetId;
}
if (null !== $model->delivery->address->streetType) {
    $jsonData["delivery"]["address"]["streetType"] = $model->delivery->address->streetType;
}
if (null !== $model->delivery->address->building) {
    $jsonData["delivery"]["address"]["building"] = $model->delivery->address->building;
}
if (null !== $model->delivery->address->flat) {
    $jsonData["delivery"]["address"]["flat"] = $model->delivery->address->flat;
}
if (null !== $model->delivery->address->floor) {
    $jsonData["delivery"]["address"]["floor"] = $model->delivery->address->floor;
}
if (null !== $model->delivery->address->block) {
    $jsonData["delivery"]["address"]["block"] = $model->delivery->address->block;
}
if (null !== $model->delivery->address->house) {
    $jsonData["delivery"]["address"]["house"] = $model->delivery->address->house;
}
if (null !== $model->delivery->address->housing) {
    $jsonData["delivery"]["address"]["housing"] = $model->delivery->address->housing;
}
if (null !== $model->delivery->address->metro) {
    $jsonData["delivery"]["address"]["metro"] = $model->delivery->address->metro;
}
if (null !== $model->delivery->address->text) {
    $jsonData["delivery"]["address"]["text"] = $model->delivery->address->text;
}
if (null !== $model->delivery->address->notes) {
    $jsonData["delivery"]["address"]["notes"] = $model->delivery->address->notes;
}

if (0 === \count($jsonData["delivery"]["address"])) {
    $jsonData["delivery"]["address"] = $emptyObject;
}

}
if (null !== $model->delivery->vatRate) {
    $jsonData["delivery"]["vatRate"] = $model->delivery->vatRate;
}

if (0 === \count($jsonData["delivery"])) {
    $jsonData["delivery"] = $emptyObject;
}

}
if (null !== $model->marketplace) {
    $jsonData["marketplace"] = [];
if (null !== $model->marketplace->code) {
    $jsonData["marketplace"]["code"] = $model->marketplace->code;
}
if (null !== $model->marketplace->orderId) {
    $jsonData["marketplace"]["orderId"] = $model->marketplace->orderId;
}

if (0 === \count($jsonData["marketplace"])) {
    $jsonData["marketplace"] = $emptyObject;
}

}
if (null !== $model->site) {
    $jsonData["site"] = $model->site;
}
if (null !== $model->status) {
    $jsonData["status"] = $model->status;
}
if (null !== $model->statusComment) {
    $jsonData["statusComment"] = $model->statusComment;
}
if (null !== $model->source) {
    $jsonData["source"] = [];
if (null !== $model->source->source) {
    $jsonData["source"]["source"] = $model->source->source;
}
if (null !== $model->source->medium) {
    $jsonData["source"]["medium"] = $model->source->medium;
}
if (null !== $model->source->campaign) {
    $jsonData["source"]["campaign"] = $model->source->campaign;
}
if (null !== $model->source->keyword) {
    $jsonData["source"]["keyword"] = $model->source->keyword;
}
if (null !== $model->source->content) {
    $jsonData["source"]["content"] = $model->source->content;
}

if (0 === \count($jsonData["source"])) {
    $jsonData["source"] = $emptyObject;
}

}
if (null !== $model->items) {
    $jsonData["items"] = [];
foreach (array_keys($model->items) as $index9) {
    $jsonData["items"][$index9] = [];
if (null !== $model->items[$index9]->externalId) {
    $jsonData["items"][$index9]["externalId"] = $model->items[$index9]->externalId;
}
if (null !== $model->items[$index9]->markingCodes) {
    $jsonData["items"][$index9]["markingCodes"] = [];
foreach (array_keys($model->items[$index9]->markingCodes) as $index34) {
    $jsonData["items"][$index9]["markingCodes"] = $model->items[$index9]->markingCodes;
}

}
if (null !== $model->items[$index9]->id) {
    $jsonData["items"][$index9]["id"] = $model->items[$index9]->id;
}
if (null !== $model->items[$index9]->externalIds) {
    $jsonData["items"][$index9]["externalIds"] = [];
foreach (array_keys($model->items[$index9]->externalIds) as $index33) {
    $jsonData["items"][$index9]["externalIds"][$index33] = [];
if (null !== $model->items[$index9]->externalIds[$index33]->code) {
    $jsonData["items"][$index9]["externalIds"][$index33]["code"] = $model->items[$index9]->externalIds[$index33]->code;
}
if (null !== $model->items[$index9]->externalIds[$index33]->value) {
    $jsonData["items"][$index9]["externalIds"][$index33]["value"] = $model->items[$index9]->externalIds[$index33]->value;
}

if (0 === \count($jsonData["items"][$index9]["externalIds"][$index33])) {
    $jsonData["items"][$index9]["externalIds"][$index33] = $emptyObject;
}

}

}
if (null !== $model->items[$index9]->priceType) {
    $jsonData["items"][$index9]["priceType"] = [];
if (null !== $model->items[$index9]->priceType->code) {
    $jsonData["items"][$index9]["priceType"]["code"] = $model->items[$index9]->priceType->code;
}

if (0 === \count($jsonData["items"][$index9]["priceType"])) {
    $jsonData["items"][$index9]["priceType"] = $emptyObject;
}

}
if (null !== $model->items[$index9]->initialPrice) {
    $jsonData["items"][$index9]["initialPrice"] = $model->items[$index9]->initialPrice;
}
if (null !== $model->items[$index9]->discountManualAmount) {
    $jsonData["items"][$index9]["discountManualAmount"] = $model->items[$index9]->discountManualAmount;
}
if (null !== $model->items[$index9]->discountManualPercent) {
    $jsonData["items"][$index9]["discountManualPercent"] = $model->items[$index9]->discountManualPercent;
}
if (null !== $model->items[$index9]->discountTotal) {
    $jsonData["items"][$index9]["discountTotal"] = $model->items[$index9]->discountTotal;
}
if (null !== $model->items[$index9]->prices) {
    $jsonData["items"][$index9]["prices"] = [];
foreach (array_keys($model->items[$index9]->prices) as $index28) {
    $jsonData["items"][$index9]["prices"][$index28] = [];
if (null !== $model->items[$index9]->prices[$index28]->price) {
    $jsonData["items"][$index9]["prices"][$index28]["price"] = $model->items[$index9]->prices[$index28]->price;
}
if (null !== $model->items[$index9]->prices[$index28]->quantity) {
    $jsonData["items"][$index9]["prices"][$index28]["quantity"] = $model->items[$index9]->prices[$index28]->quantity;
}

if (0 === \count($jsonData["items"][$index9]["prices"][$index28])) {
    $jsonData["items"][$index9]["prices"][$index28] = $emptyObject;
}

}

}
if (null !== $model->items[$index9]->vatRate) {
    $jsonData["items"][$index9]["vatRate"] = $model->items[$index9]->vatRate;
}
if (null !== $model->items[$index9]->createdAt) {
    $jsonData["items"][$index9]["createdAt"] = $model->items[$index9]->createdAt->format('Y-m-d H:i:s');;
}
if (null !== $model->items[$index9]->quantity) {
    $jsonData["items"][$index9]["quantity"] = $model->items[$index9]->quantity;
}
if (null !== $model->items[$index9]->status) {
    $jsonData["items"][$index9]["status"] = $model->items[$index9]->status;
}
if (null !== $model->items[$index9]->comment) {
    $jsonData["items"][$index9]["comment"] = $model->items[$index9]->comment;
}
if (null !== $model->items[$index9]->offer) {
    $jsonData["items"][$index9]["offer"] = [];
if (null !== $model->items[$index9]->offer->displayName) {
    $jsonData["items"][$index9]["offer"]["displayName"] = $model->items[$index9]->offer->displayName;
}
if (null !== $model->items[$index9]->offer->id) {
    $jsonData["items"][$index9]["offer"]["id"] = $model->items[$index9]->offer->id;
}
if (null !== $model->items[$index9]->offer->externalId) {
    $jsonData["items"][$index9]["offer"]["externalId"] = $model->items[$index9]->offer->externalId;
}
if (null !== $model->items[$index9]->offer->xmlId) {
    $jsonData["items"][$index9]["offer"]["xmlId"] = $model->items[$index9]->offer->xmlId;
}
if (null !== $model->items[$index9]->offer->name) {
    $jsonData["items"][$index9]["offer"]["name"] = $model->items[$index9]->offer->name;
}
if (null !== $model->items[$index9]->offer->article) {
    $jsonData["items"][$index9]["offer"]["article"] = $model->items[$index9]->offer->article;
}
if (null !== $model->items[$index9]->offer->vatRate) {
    $jsonData["items"][$index9]["offer"]["vatRate"] = $model->items[$index9]->offer->vatRate;
}
if (null !== $model->items[$index9]->offer->unit) {
    $jsonData["items"][$index9]["offer"]["unit"] = [];
if (null !== $model->items[$index9]->offer->unit->code) {
    $jsonData["items"][$index9]["offer"]["unit"]["code"] = $model->items[$index9]->offer->unit->code;
}
if (null !== $model->items[$index9]->offer->unit->name) {
    $jsonData["items"][$index9]["offer"]["unit"]["name"] = $model->items[$index9]->offer->unit->name;
}
if (null !== $model->items[$index9]->offer->unit->sym) {
    $jsonData["items"][$index9]["offer"]["unit"]["sym"] = $model->items[$index9]->offer->unit->sym;
}

if (0 === \count($jsonData["items"][$index9]["offer"]["unit"])) {
    $jsonData["items"][$index9]["offer"]["unit"] = $emptyObject;
}

}
if (null !== $model->items[$index9]->offer->barcode) {
    $jsonData["items"][$index9]["offer"]["barcode"] = $model->items[$index9]->offer->barcode;
}
if (null !== $model->items[$index9]->offer->properties) {
    $jsonData["items"][$index9]["offer"]["properties"] = [];
foreach (array_keys($model->items[$index9]->offer->properties) as $index41) {
    $jsonData["items"][$index9]["offer"]["properties"] = $model->items[$index9]->offer->properties;
}

}

if (0 === \count($jsonData["items"][$index9]["offer"])) {
    $jsonData["items"][$index9]["offer"] = $emptyObject;
}

}
if (null !== $model->items[$index9]->order) {
    $jsonData["items"][$index9]["order"] = [];
if (null !== $model->items[$index9]->order->id) {
    $jsonData["items"][$index9]["order"]["id"] = $model->items[$index9]->order->id;
}

if (0 === \count($jsonData["items"][$index9]["order"])) {
    $jsonData["items"][$index9]["order"] = $emptyObject;
}

}
if (null !== $model->items[$index9]->productName) {
    $jsonData["items"][$index9]["productName"] = $model->items[$index9]->productName;
}
if (null !== $model->items[$index9]->isCanceled) {
    $jsonData["items"][$index9]["isCanceled"] = $model->items[$index9]->isCanceled;
}
if (null !== $model->items[$index9]->properties) {
    if (0 === \count($model->items[$index9]->properties)) {
    $jsonData["items"][$index9]["properties"] = $emptyHashmap;
} else {
    foreach (array_keys($model->items[$index9]->properties) as $index32) {
        $jsonData["items"][$index9]["properties"][$index32] = [];
if (null !== $model->items[$index9]->properties[$index32]->code) {
    $jsonData["items"][$index9]["properties"][$index32]["code"] = $model->items[$index9]->properties[$index32]->code;
}
if (null !== $model->items[$index9]->properties[$index32]->name) {
    $jsonData["items"][$index9]["properties"][$index32]["name"] = $model->items[$index9]->properties[$index32]->name;
}
if (null !== $model->items[$index9]->properties[$index32]->value) {
    $jsonData["items"][$index9]["properties"][$index32]["value"] = $model->items[$index9]->properties[$index32]->value;
}

if (0 === \count($jsonData["items"][$index9]["properties"][$index32])) {
    $jsonData["items"][$index9]["properties"][$index32] = $emptyObject;
}

    }
}

}
if (null !== $model->items[$index9]->purchasePrice) {
    $jsonData["items"][$index9]["purchasePrice"] = $model->items[$index9]->purchasePrice;
}

if (0 === \count($jsonData["items"][$index9])) {
    $jsonData["items"][$index9] = $emptyObject;
}

}

}
if (null !== $model->fullPaidAt) {
    $jsonData["fullPaidAt"] = $model->fullPaidAt->format('Y-m-d H:i:s');;
}
if (null !== $model->payments) {
    $jsonData["payments"] = [];
foreach (array_keys($model->payments) as $index12) {
    $jsonData["payments"][$index12] = [];
if (null !== $model->payments[$index12]->id) {
    $jsonData["payments"][$index12]["id"] = $model->payments[$index12]->id;
}
if (null !== $model->payments[$index12]->status) {
    $jsonData["payments"][$index12]["status"] = $model->payments[$index12]->status;
}
if (null !== $model->payments[$index12]->type) {
    $jsonData["payments"][$index12]["type"] = $model->payments[$index12]->type;
}
if (null !== $model->payments[$index12]->externalId) {
    $jsonData["payments"][$index12]["externalId"] = $model->payments[$index12]->externalId;
}
if (null !== $model->payments[$index12]->amount) {
    $jsonData["payments"][$index12]["amount"] = $model->payments[$index12]->amount;
}
if (null !== $model->payments[$index12]->paidAt) {
    $jsonData["payments"][$index12]["paidAt"] = $model->payments[$index12]->paidAt->format('Y-m-d H:i:s');;
}
if (null !== $model->payments[$index12]->comment) {
    $jsonData["payments"][$index12]["comment"] = $model->payments[$index12]->comment;
}

if (0 === \count($jsonData["payments"][$index12])) {
    $jsonData["payments"][$index12] = $emptyObject;
}

}

}
if (null !== $model->fromApi) {
    $jsonData["fromApi"] = $model->fromApi;
}
if (null !== $model->weight) {
    $jsonData["weight"] = $model->weight;
}
if (null !== $model->length) {
    $jsonData["length"] = $model->length;
}
if (null !== $model->width) {
    $jsonData["width"] = $model->width;
}
if (null !== $model->height) {
    $jsonData["height"] = $model->height;
}
if (null !== $model->shipmentStore) {
    $jsonData["shipmentStore"] = $model->shipmentStore;
}
if (null !== $model->shipmentDate) {
    $jsonData["shipmentDate"] = $model->shipmentDate->format('Y-m-d');;
}
if (null !== $model->shipped) {
    $jsonData["shipped"] = $model->shipped;
}
if (null !== $model->dialogId) {
    $jsonData["dialogId"] = $model->dialogId;
}
if (null !== $model->customFields) {
    $jsonData["customFields"] = [];
foreach (array_keys($model->customFields) as $index16) {
    $jsonData["customFields"] = $model->customFields;
}

}
if (null !== $model->clientId) {
    $jsonData["clientId"] = $model->clientId;
}
if (null !== $model->loyaltyEventId) {
    $jsonData["loyaltyEventId"] = $model->loyaltyEventId;
}

if (0 === \count($jsonData)) {
    $jsonData = $emptyObject;
}


    return $jsonData;
}
