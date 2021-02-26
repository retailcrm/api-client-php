<?php

function serialize_RetailCrm_Api_Model_Entity_Customers_Customer(RetailCrm\Api\Model\Entity\Customers\Customer $model, bool $useStdClass = true)
{
    $emptyHashmap = $useStdClass ? new \stdClass() : [];
    $emptyObject = $useStdClass ? new \stdClass() : [];

    $jsonData = [];
if (null !== $model->type) {
    $jsonData["type"] = $model->type;
}
if (null !== $model->id) {
    $jsonData["id"] = $model->id;
}
if (null !== $model->externalId) {
    $jsonData["externalId"] = $model->externalId;
}
if (null !== $model->isContact) {
    $jsonData["isContact"] = $model->isContact;
}
if (null !== $model->createdAt) {
    $jsonData["createdAt"] = $model->createdAt->format('Y-m-d H:i:s');;
}
if (null !== $model->managerId) {
    $jsonData["managerId"] = $model->managerId;
}
if (null !== $model->vip) {
    $jsonData["vip"] = $model->vip;
}
if (null !== $model->bad) {
    $jsonData["bad"] = $model->bad;
}
if (null !== $model->browserId) {
    $jsonData["browserId"] = $model->browserId;
}
if (null !== $model->site) {
    $jsonData["site"] = $model->site;
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
if (null !== $model->tags) {
    $jsonData["tags"] = [];
foreach (array_keys($model->tags) as $index8) {
    $jsonData["tags"][$index8] = [];
if (null !== $model->tags[$index8]->name) {
    $jsonData["tags"][$index8]["name"] = $model->tags[$index8]->name;
}
if (null !== $model->tags[$index8]->color) {
    $jsonData["tags"][$index8]["color"] = $model->tags[$index8]->color;
}
if (null !== $model->tags[$index8]->attached) {
    $jsonData["tags"][$index8]["attached"] = $model->tags[$index8]->attached;
}

if (0 === \count($jsonData["tags"][$index8])) {
    $jsonData["tags"][$index8] = $emptyObject;
}

}

}
if (null !== $model->avgMarginSumm) {
    $jsonData["avgMarginSumm"] = $model->avgMarginSumm;
}
if (null !== $model->marginSumm) {
    $jsonData["marginSumm"] = $model->marginSumm;
}
if (null !== $model->totalSumm) {
    $jsonData["totalSumm"] = $model->totalSumm;
}
if (null !== $model->averageSumm) {
    $jsonData["averageSumm"] = $model->averageSumm;
}
if (null !== $model->ordersCount) {
    $jsonData["ordersCount"] = $model->ordersCount;
}
if (null !== $model->costSumm) {
    $jsonData["costSumm"] = $model->costSumm;
}
if (null !== $model->customFields) {
    $jsonData["customFields"] = [];
foreach (array_keys($model->customFields) as $index16) {
    $jsonData["customFields"] = $model->customFields;
}

}
if (null !== $model->personalDiscount) {
    $jsonData["personalDiscount"] = $model->personalDiscount;
}
if (null !== $model->cumulativeDiscount) {
    $jsonData["cumulativeDiscount"] = $model->cumulativeDiscount;
}
if (null !== $model->discountCardNumber) {
    $jsonData["discountCardNumber"] = $model->discountCardNumber;
}
if (null !== $model->firstClientId) {
    $jsonData["firstClientId"] = $model->firstClientId;
}
if (null !== $model->lastClientId) {
    $jsonData["lastClientId"] = $model->lastClientId;
}
if (null !== $model->address) {
    $jsonData["address"] = [];
if (null !== $model->address->id) {
    $jsonData["address"]["id"] = $model->address->id;
}
if (null !== $model->address->name) {
    $jsonData["address"]["name"] = $model->address->name;
}
if (null !== $model->address->isMain) {
    $jsonData["address"]["isMain"] = $model->address->isMain;
}
if (null !== $model->address->index) {
    $jsonData["address"]["index"] = $model->address->index;
}
if (null !== $model->address->countryIso) {
    $jsonData["address"]["countryIso"] = $model->address->countryIso;
}
if (null !== $model->address->region) {
    $jsonData["address"]["region"] = $model->address->region;
}
if (null !== $model->address->regionId) {
    $jsonData["address"]["regionId"] = $model->address->regionId;
}
if (null !== $model->address->city) {
    $jsonData["address"]["city"] = $model->address->city;
}
if (null !== $model->address->cityId) {
    $jsonData["address"]["cityId"] = $model->address->cityId;
}
if (null !== $model->address->cityType) {
    $jsonData["address"]["cityType"] = $model->address->cityType;
}
if (null !== $model->address->street) {
    $jsonData["address"]["street"] = $model->address->street;
}
if (null !== $model->address->streetId) {
    $jsonData["address"]["streetId"] = $model->address->streetId;
}
if (null !== $model->address->streetType) {
    $jsonData["address"]["streetType"] = $model->address->streetType;
}
if (null !== $model->address->building) {
    $jsonData["address"]["building"] = $model->address->building;
}
if (null !== $model->address->flat) {
    $jsonData["address"]["flat"] = $model->address->flat;
}
if (null !== $model->address->floor) {
    $jsonData["address"]["floor"] = $model->address->floor;
}
if (null !== $model->address->block) {
    $jsonData["address"]["block"] = $model->address->block;
}
if (null !== $model->address->house) {
    $jsonData["address"]["house"] = $model->address->house;
}
if (null !== $model->address->housing) {
    $jsonData["address"]["housing"] = $model->address->housing;
}
if (null !== $model->address->metro) {
    $jsonData["address"]["metro"] = $model->address->metro;
}
if (null !== $model->address->notes) {
    $jsonData["address"]["notes"] = $model->address->notes;
}
if (null !== $model->address->text) {
    $jsonData["address"]["text"] = $model->address->text;
}
if (null !== $model->address->externalId) {
    $jsonData["address"]["externalId"] = $model->address->externalId;
}

if (0 === \count($jsonData["address"])) {
    $jsonData["address"] = $emptyObject;
}

}
if (null !== $model->segments) {
    $jsonData["segments"] = [];
foreach (array_keys($model->segments) as $index12) {
    $jsonData["segments"][$index12] = [];
if (null !== $model->segments[$index12]->id) {
    $jsonData["segments"][$index12]["id"] = $model->segments[$index12]->id;
}
if (null !== $model->segments[$index12]->code) {
    $jsonData["segments"][$index12]["code"] = $model->segments[$index12]->code;
}
if (null !== $model->segments[$index12]->name) {
    $jsonData["segments"][$index12]["name"] = $model->segments[$index12]->name;
}
if (null !== $model->segments[$index12]->createdAt) {
    $jsonData["segments"][$index12]["createdAt"] = $model->segments[$index12]->createdAt->format('Y-m-d H:i:s');;
}
if (null !== $model->segments[$index12]->isDynamic) {
    $jsonData["segments"][$index12]["isDynamic"] = $model->segments[$index12]->isDynamic;
}
if (null !== $model->segments[$index12]->customersCount) {
    $jsonData["segments"][$index12]["customersCount"] = $model->segments[$index12]->customersCount;
}
if (null !== $model->segments[$index12]->active) {
    $jsonData["segments"][$index12]["active"] = $model->segments[$index12]->active;
}

if (0 === \count($jsonData["segments"][$index12])) {
    $jsonData["segments"][$index12] = $emptyObject;
}

}

}
if (null !== $model->maturationTime) {
    $jsonData["maturationTime"] = $model->maturationTime;
}
if (null !== $model->firstName) {
    $jsonData["firstName"] = $model->firstName;
}
if (null !== $model->lastName) {
    $jsonData["lastName"] = $model->lastName;
}
if (null !== $model->patronymic) {
    $jsonData["patronymic"] = $model->patronymic;
}
if (null !== $model->sex) {
    $jsonData["sex"] = $model->sex;
}
if (null !== $model->presumableSex) {
    $jsonData["presumableSex"] = $model->presumableSex;
}
if (null !== $model->email) {
    $jsonData["email"] = $model->email;
}
if (null !== $model->emailMarketingUnsubscribedAt) {
    $jsonData["emailMarketingUnsubscribedAt"] = $model->emailMarketingUnsubscribedAt->format('Y-m-d H:i:s');;
}
if (null !== $model->phones) {
    $jsonData["phones"] = [];
foreach (array_keys($model->phones) as $index10) {
    $jsonData["phones"][$index10] = [];
if (null !== $model->phones[$index10]->number) {
    $jsonData["phones"][$index10]["number"] = $model->phones[$index10]->number;
}

if (0 === \count($jsonData["phones"][$index10])) {
    $jsonData["phones"][$index10] = $emptyObject;
}

}

}
if (null !== $model->birthday) {
    $jsonData["birthday"] = $model->birthday->format('Y-m-d H:i:s');;
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
if (null !== $model->photoUrl) {
    $jsonData["photoUrl"] = $model->photoUrl;
}
if (null !== $model->mgCustomerId) {
    $jsonData["mgCustomerId"] = $model->mgCustomerId;
}
if (null !== $model->subscribed) {
    $jsonData["subscribed"] = $model->subscribed;
}

if (0 === \count($jsonData)) {
    $jsonData = $emptyObject;
}


    return $jsonData;
}
