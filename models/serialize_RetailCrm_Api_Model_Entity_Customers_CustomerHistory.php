<?php

function serialize_RetailCrm_Api_Model_Entity_Customers_CustomerHistory(RetailCrm\Api\Model\Entity\Customers\CustomerHistory $model, bool $useStdClass = true)
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
if (null !== $model->customer) {
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
    $jsonData["customer"]["tags"][$index20] = [];
if (null !== $model->customer->tags[$index20]->name) {
    $jsonData["customer"]["tags"][$index20]["name"] = $model->customer->tags[$index20]->name;
}
if (null !== $model->customer->tags[$index20]->color) {
    $jsonData["customer"]["tags"][$index20]["color"] = $model->customer->tags[$index20]->color;
}
if (null !== $model->customer->tags[$index20]->attached) {
    $jsonData["customer"]["tags"][$index20]["attached"] = $model->customer->tags[$index20]->attached;
}

if (0 === \count($jsonData["customer"]["tags"][$index20])) {
    $jsonData["customer"]["tags"][$index20] = $emptyObject;
}

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

}
if (null !== $model->address) {
    $jsonData["address"] = [];
if (null !== $model->address->id) {
    $jsonData["address"]["id"] = $model->address->id;
}
if (null !== $model->address->externalId) {
    $jsonData["address"]["externalId"] = $model->address->externalId;
}
if (null !== $model->address->name) {
    $jsonData["address"]["name"] = $model->address->name;
}
if (null !== $model->address->isMain) {
    $jsonData["address"]["isMain"] = $model->address->isMain;
}

if (0 === \count($jsonData["address"])) {
    $jsonData["address"] = $emptyObject;
}

}
if (null !== $model->combinedTo) {
    $jsonData["combinedTo"] = [];
if (null !== $model->combinedTo->type) {
    $jsonData["combinedTo"]["type"] = $model->combinedTo->type;
}
if (null !== $model->combinedTo->id) {
    $jsonData["combinedTo"]["id"] = $model->combinedTo->id;
}
if (null !== $model->combinedTo->externalId) {
    $jsonData["combinedTo"]["externalId"] = $model->combinedTo->externalId;
}
if (null !== $model->combinedTo->isContact) {
    $jsonData["combinedTo"]["isContact"] = $model->combinedTo->isContact;
}
if (null !== $model->combinedTo->createdAt) {
    $jsonData["combinedTo"]["createdAt"] = $model->combinedTo->createdAt->format('Y-m-d H:i:s');;
}
if (null !== $model->combinedTo->managerId) {
    $jsonData["combinedTo"]["managerId"] = $model->combinedTo->managerId;
}
if (null !== $model->combinedTo->vip) {
    $jsonData["combinedTo"]["vip"] = $model->combinedTo->vip;
}
if (null !== $model->combinedTo->bad) {
    $jsonData["combinedTo"]["bad"] = $model->combinedTo->bad;
}
if (null !== $model->combinedTo->browserId) {
    $jsonData["combinedTo"]["browserId"] = $model->combinedTo->browserId;
}
if (null !== $model->combinedTo->site) {
    $jsonData["combinedTo"]["site"] = $model->combinedTo->site;
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
if (null !== $model->combinedTo->tags) {
    $jsonData["combinedTo"]["tags"] = [];
foreach (array_keys($model->combinedTo->tags) as $index22) {
    $jsonData["combinedTo"]["tags"][$index22] = [];
if (null !== $model->combinedTo->tags[$index22]->name) {
    $jsonData["combinedTo"]["tags"][$index22]["name"] = $model->combinedTo->tags[$index22]->name;
}
if (null !== $model->combinedTo->tags[$index22]->color) {
    $jsonData["combinedTo"]["tags"][$index22]["color"] = $model->combinedTo->tags[$index22]->color;
}
if (null !== $model->combinedTo->tags[$index22]->attached) {
    $jsonData["combinedTo"]["tags"][$index22]["attached"] = $model->combinedTo->tags[$index22]->attached;
}

if (0 === \count($jsonData["combinedTo"]["tags"][$index22])) {
    $jsonData["combinedTo"]["tags"][$index22] = $emptyObject;
}

}

}
if (null !== $model->combinedTo->avgMarginSumm) {
    $jsonData["combinedTo"]["avgMarginSumm"] = $model->combinedTo->avgMarginSumm;
}
if (null !== $model->combinedTo->marginSumm) {
    $jsonData["combinedTo"]["marginSumm"] = $model->combinedTo->marginSumm;
}
if (null !== $model->combinedTo->totalSumm) {
    $jsonData["combinedTo"]["totalSumm"] = $model->combinedTo->totalSumm;
}
if (null !== $model->combinedTo->averageSumm) {
    $jsonData["combinedTo"]["averageSumm"] = $model->combinedTo->averageSumm;
}
if (null !== $model->combinedTo->ordersCount) {
    $jsonData["combinedTo"]["ordersCount"] = $model->combinedTo->ordersCount;
}
if (null !== $model->combinedTo->costSumm) {
    $jsonData["combinedTo"]["costSumm"] = $model->combinedTo->costSumm;
}
if (null !== $model->combinedTo->customFields) {
    $jsonData["combinedTo"]["customFields"] = [];
foreach (array_keys($model->combinedTo->customFields) as $index30) {
    $jsonData["combinedTo"]["customFields"] = $model->combinedTo->customFields;
}

}
if (null !== $model->combinedTo->personalDiscount) {
    $jsonData["combinedTo"]["personalDiscount"] = $model->combinedTo->personalDiscount;
}
if (null !== $model->combinedTo->cumulativeDiscount) {
    $jsonData["combinedTo"]["cumulativeDiscount"] = $model->combinedTo->cumulativeDiscount;
}
if (null !== $model->combinedTo->discountCardNumber) {
    $jsonData["combinedTo"]["discountCardNumber"] = $model->combinedTo->discountCardNumber;
}
if (null !== $model->combinedTo->firstClientId) {
    $jsonData["combinedTo"]["firstClientId"] = $model->combinedTo->firstClientId;
}
if (null !== $model->combinedTo->lastClientId) {
    $jsonData["combinedTo"]["lastClientId"] = $model->combinedTo->lastClientId;
}
if (null !== $model->combinedTo->address) {
    $jsonData["combinedTo"]["address"] = [];
if (null !== $model->combinedTo->address->id) {
    $jsonData["combinedTo"]["address"]["id"] = $model->combinedTo->address->id;
}
if (null !== $model->combinedTo->address->name) {
    $jsonData["combinedTo"]["address"]["name"] = $model->combinedTo->address->name;
}
if (null !== $model->combinedTo->address->isMain) {
    $jsonData["combinedTo"]["address"]["isMain"] = $model->combinedTo->address->isMain;
}
if (null !== $model->combinedTo->address->index) {
    $jsonData["combinedTo"]["address"]["index"] = $model->combinedTo->address->index;
}
if (null !== $model->combinedTo->address->countryIso) {
    $jsonData["combinedTo"]["address"]["countryIso"] = $model->combinedTo->address->countryIso;
}
if (null !== $model->combinedTo->address->region) {
    $jsonData["combinedTo"]["address"]["region"] = $model->combinedTo->address->region;
}
if (null !== $model->combinedTo->address->regionId) {
    $jsonData["combinedTo"]["address"]["regionId"] = $model->combinedTo->address->regionId;
}
if (null !== $model->combinedTo->address->city) {
    $jsonData["combinedTo"]["address"]["city"] = $model->combinedTo->address->city;
}
if (null !== $model->combinedTo->address->cityId) {
    $jsonData["combinedTo"]["address"]["cityId"] = $model->combinedTo->address->cityId;
}
if (null !== $model->combinedTo->address->cityType) {
    $jsonData["combinedTo"]["address"]["cityType"] = $model->combinedTo->address->cityType;
}
if (null !== $model->combinedTo->address->street) {
    $jsonData["combinedTo"]["address"]["street"] = $model->combinedTo->address->street;
}
if (null !== $model->combinedTo->address->streetId) {
    $jsonData["combinedTo"]["address"]["streetId"] = $model->combinedTo->address->streetId;
}
if (null !== $model->combinedTo->address->streetType) {
    $jsonData["combinedTo"]["address"]["streetType"] = $model->combinedTo->address->streetType;
}
if (null !== $model->combinedTo->address->building) {
    $jsonData["combinedTo"]["address"]["building"] = $model->combinedTo->address->building;
}
if (null !== $model->combinedTo->address->flat) {
    $jsonData["combinedTo"]["address"]["flat"] = $model->combinedTo->address->flat;
}
if (null !== $model->combinedTo->address->floor) {
    $jsonData["combinedTo"]["address"]["floor"] = $model->combinedTo->address->floor;
}
if (null !== $model->combinedTo->address->block) {
    $jsonData["combinedTo"]["address"]["block"] = $model->combinedTo->address->block;
}
if (null !== $model->combinedTo->address->house) {
    $jsonData["combinedTo"]["address"]["house"] = $model->combinedTo->address->house;
}
if (null !== $model->combinedTo->address->housing) {
    $jsonData["combinedTo"]["address"]["housing"] = $model->combinedTo->address->housing;
}
if (null !== $model->combinedTo->address->metro) {
    $jsonData["combinedTo"]["address"]["metro"] = $model->combinedTo->address->metro;
}
if (null !== $model->combinedTo->address->notes) {
    $jsonData["combinedTo"]["address"]["notes"] = $model->combinedTo->address->notes;
}
if (null !== $model->combinedTo->address->text) {
    $jsonData["combinedTo"]["address"]["text"] = $model->combinedTo->address->text;
}
if (null !== $model->combinedTo->address->externalId) {
    $jsonData["combinedTo"]["address"]["externalId"] = $model->combinedTo->address->externalId;
}

if (0 === \count($jsonData["combinedTo"]["address"])) {
    $jsonData["combinedTo"]["address"] = $emptyObject;
}

}
if (null !== $model->combinedTo->segments) {
    $jsonData["combinedTo"]["segments"] = [];
foreach (array_keys($model->combinedTo->segments) as $index26) {
    $jsonData["combinedTo"]["segments"][$index26] = [];
if (null !== $model->combinedTo->segments[$index26]->id) {
    $jsonData["combinedTo"]["segments"][$index26]["id"] = $model->combinedTo->segments[$index26]->id;
}
if (null !== $model->combinedTo->segments[$index26]->code) {
    $jsonData["combinedTo"]["segments"][$index26]["code"] = $model->combinedTo->segments[$index26]->code;
}
if (null !== $model->combinedTo->segments[$index26]->name) {
    $jsonData["combinedTo"]["segments"][$index26]["name"] = $model->combinedTo->segments[$index26]->name;
}
if (null !== $model->combinedTo->segments[$index26]->createdAt) {
    $jsonData["combinedTo"]["segments"][$index26]["createdAt"] = $model->combinedTo->segments[$index26]->createdAt->format('Y-m-d H:i:s');;
}
if (null !== $model->combinedTo->segments[$index26]->isDynamic) {
    $jsonData["combinedTo"]["segments"][$index26]["isDynamic"] = $model->combinedTo->segments[$index26]->isDynamic;
}
if (null !== $model->combinedTo->segments[$index26]->customersCount) {
    $jsonData["combinedTo"]["segments"][$index26]["customersCount"] = $model->combinedTo->segments[$index26]->customersCount;
}
if (null !== $model->combinedTo->segments[$index26]->active) {
    $jsonData["combinedTo"]["segments"][$index26]["active"] = $model->combinedTo->segments[$index26]->active;
}

if (0 === \count($jsonData["combinedTo"]["segments"][$index26])) {
    $jsonData["combinedTo"]["segments"][$index26] = $emptyObject;
}

}

}
if (null !== $model->combinedTo->maturationTime) {
    $jsonData["combinedTo"]["maturationTime"] = $model->combinedTo->maturationTime;
}
if (null !== $model->combinedTo->firstName) {
    $jsonData["combinedTo"]["firstName"] = $model->combinedTo->firstName;
}
if (null !== $model->combinedTo->lastName) {
    $jsonData["combinedTo"]["lastName"] = $model->combinedTo->lastName;
}
if (null !== $model->combinedTo->patronymic) {
    $jsonData["combinedTo"]["patronymic"] = $model->combinedTo->patronymic;
}
if (null !== $model->combinedTo->sex) {
    $jsonData["combinedTo"]["sex"] = $model->combinedTo->sex;
}
if (null !== $model->combinedTo->presumableSex) {
    $jsonData["combinedTo"]["presumableSex"] = $model->combinedTo->presumableSex;
}
if (null !== $model->combinedTo->email) {
    $jsonData["combinedTo"]["email"] = $model->combinedTo->email;
}
if (null !== $model->combinedTo->emailMarketingUnsubscribedAt) {
    $jsonData["combinedTo"]["emailMarketingUnsubscribedAt"] = $model->combinedTo->emailMarketingUnsubscribedAt->format('Y-m-d H:i:s');;
}
if (null !== $model->combinedTo->phones) {
    $jsonData["combinedTo"]["phones"] = [];
foreach (array_keys($model->combinedTo->phones) as $index24) {
    $jsonData["combinedTo"]["phones"][$index24] = [];
if (null !== $model->combinedTo->phones[$index24]->number) {
    $jsonData["combinedTo"]["phones"][$index24]["number"] = $model->combinedTo->phones[$index24]->number;
}

if (0 === \count($jsonData["combinedTo"]["phones"][$index24])) {
    $jsonData["combinedTo"]["phones"][$index24] = $emptyObject;
}

}

}
if (null !== $model->combinedTo->birthday) {
    $jsonData["combinedTo"]["birthday"] = $model->combinedTo->birthday->format('Y-m-d H:i:s');;
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
if (null !== $model->combinedTo->photoUrl) {
    $jsonData["combinedTo"]["photoUrl"] = $model->combinedTo->photoUrl;
}
if (null !== $model->combinedTo->mgCustomerId) {
    $jsonData["combinedTo"]["mgCustomerId"] = $model->combinedTo->mgCustomerId;
}
if (null !== $model->combinedTo->subscribed) {
    $jsonData["combinedTo"]["subscribed"] = $model->combinedTo->subscribed;
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
