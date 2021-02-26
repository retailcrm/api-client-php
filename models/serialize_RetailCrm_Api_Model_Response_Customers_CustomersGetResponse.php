<?php

function serialize_RetailCrm_Api_Model_Response_Customers_CustomersGetResponse(RetailCrm\Api\Model\Response\Customers\CustomersGetResponse $model, bool $useStdClass = true)
{
    $emptyHashmap = $useStdClass ? new \stdClass() : [];
    $emptyObject = $useStdClass ? new \stdClass() : [];

    $jsonData = [];
if (null !== $model->success) {
    $jsonData["success"] = $model->success;
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

if (0 === \count($jsonData)) {
    $jsonData = $emptyObject;
}


    return $jsonData;
}
