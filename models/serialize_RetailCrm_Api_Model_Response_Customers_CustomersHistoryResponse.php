<?php

function serialize_RetailCrm_Api_Model_Response_Customers_CustomersHistoryResponse(RetailCrm\Api\Model\Response\Customers\CustomersHistoryResponse $model, bool $useStdClass = true)
{
    $emptyHashmap = $useStdClass ? new \stdClass() : [];
    $emptyObject = $useStdClass ? new \stdClass() : [];

    $jsonData = [];
if (null !== $model->success) {
    $jsonData["success"] = $model->success;
}
if (null !== $model->pagination) {
    $jsonData["pagination"] = [];
if (null !== $model->pagination->limit) {
    $jsonData["pagination"]["limit"] = $model->pagination->limit;
}
if (null !== $model->pagination->totalCount) {
    $jsonData["pagination"]["totalCount"] = $model->pagination->totalCount;
}
if (null !== $model->pagination->currentPage) {
    $jsonData["pagination"]["currentPage"] = $model->pagination->currentPage;
}
if (null !== $model->pagination->totalPageCount) {
    $jsonData["pagination"]["totalPageCount"] = $model->pagination->totalPageCount;
}

if (0 === \count($jsonData["pagination"])) {
    $jsonData["pagination"] = $emptyObject;
}

}
if (null !== $model->generatedAt) {
    $jsonData["generatedAt"] = $model->generatedAt->format('Y-m-d H:i:s');;
}
if (null !== $model->history) {
    $jsonData["history"] = [];
foreach (array_keys($model->history) as $index11) {
    $jsonData["history"][$index11] = [];
if (null !== $model->history[$index11]->id) {
    $jsonData["history"][$index11]["id"] = $model->history[$index11]->id;
}
if (null !== $model->history[$index11]->createdAt) {
    $jsonData["history"][$index11]["createdAt"] = $model->history[$index11]->createdAt->format('Y-m-d H:i:s');;
}
if (null !== $model->history[$index11]->created) {
    $jsonData["history"][$index11]["created"] = $model->history[$index11]->created;
}
if (null !== $model->history[$index11]->deleted) {
    $jsonData["history"][$index11]["deleted"] = $model->history[$index11]->deleted;
}
if (null !== $model->history[$index11]->source) {
    $jsonData["history"][$index11]["source"] = $model->history[$index11]->source;
}
if (null !== $model->history[$index11]->user) {
    $jsonData["history"][$index11]["user"] = [];
if (null !== $model->history[$index11]->user->id) {
    $jsonData["history"][$index11]["user"]["id"] = $model->history[$index11]->user->id;
}

if (0 === \count($jsonData["history"][$index11]["user"])) {
    $jsonData["history"][$index11]["user"] = $emptyObject;
}

}
if (null !== $model->history[$index11]->field) {
    $jsonData["history"][$index11]["field"] = $model->history[$index11]->field;
}
if (null !== $model->history[$index11]->oldValue) {
    $jsonData["history"][$index11]["oldValue"] = $model->history[$index11]->oldValue;
}
if (null !== $model->history[$index11]->newValue) {
    $jsonData["history"][$index11]["newValue"] = $model->history[$index11]->newValue;
}
if (null !== $model->history[$index11]->apiKey) {
    $jsonData["history"][$index11]["apiKey"] = [];
if (null !== $model->history[$index11]->apiKey->current) {
    $jsonData["history"][$index11]["apiKey"]["current"] = $model->history[$index11]->apiKey->current;
}

if (0 === \count($jsonData["history"][$index11]["apiKey"])) {
    $jsonData["history"][$index11]["apiKey"] = $emptyObject;
}

}
if (null !== $model->history[$index11]->customer) {
    $jsonData["history"][$index11]["customer"] = [];
if (null !== $model->history[$index11]->customer->type) {
    $jsonData["history"][$index11]["customer"]["type"] = $model->history[$index11]->customer->type;
}
if (null !== $model->history[$index11]->customer->id) {
    $jsonData["history"][$index11]["customer"]["id"] = $model->history[$index11]->customer->id;
}
if (null !== $model->history[$index11]->customer->externalId) {
    $jsonData["history"][$index11]["customer"]["externalId"] = $model->history[$index11]->customer->externalId;
}
if (null !== $model->history[$index11]->customer->isContact) {
    $jsonData["history"][$index11]["customer"]["isContact"] = $model->history[$index11]->customer->isContact;
}
if (null !== $model->history[$index11]->customer->createdAt) {
    $jsonData["history"][$index11]["customer"]["createdAt"] = $model->history[$index11]->customer->createdAt->format('Y-m-d H:i:s');;
}
if (null !== $model->history[$index11]->customer->managerId) {
    $jsonData["history"][$index11]["customer"]["managerId"] = $model->history[$index11]->customer->managerId;
}
if (null !== $model->history[$index11]->customer->vip) {
    $jsonData["history"][$index11]["customer"]["vip"] = $model->history[$index11]->customer->vip;
}
if (null !== $model->history[$index11]->customer->bad) {
    $jsonData["history"][$index11]["customer"]["bad"] = $model->history[$index11]->customer->bad;
}
if (null !== $model->history[$index11]->customer->browserId) {
    $jsonData["history"][$index11]["customer"]["browserId"] = $model->history[$index11]->customer->browserId;
}
if (null !== $model->history[$index11]->customer->site) {
    $jsonData["history"][$index11]["customer"]["site"] = $model->history[$index11]->customer->site;
}
if (null !== $model->history[$index11]->customer->contragent) {
    $jsonData["history"][$index11]["customer"]["contragent"] = [];
if (null !== $model->history[$index11]->customer->contragent->contragentType) {
    $jsonData["history"][$index11]["customer"]["contragent"]["contragentType"] = $model->history[$index11]->customer->contragent->contragentType;
}
if (null !== $model->history[$index11]->customer->contragent->legalName) {
    $jsonData["history"][$index11]["customer"]["contragent"]["legalName"] = $model->history[$index11]->customer->contragent->legalName;
}
if (null !== $model->history[$index11]->customer->contragent->legalAddress) {
    $jsonData["history"][$index11]["customer"]["contragent"]["legalAddress"] = $model->history[$index11]->customer->contragent->legalAddress;
}
if (null !== $model->history[$index11]->customer->contragent->INN) {
    $jsonData["history"][$index11]["customer"]["contragent"]["INN"] = $model->history[$index11]->customer->contragent->INN;
}
if (null !== $model->history[$index11]->customer->contragent->OKPO) {
    $jsonData["history"][$index11]["customer"]["contragent"]["OKPO"] = $model->history[$index11]->customer->contragent->OKPO;
}
if (null !== $model->history[$index11]->customer->contragent->KPP) {
    $jsonData["history"][$index11]["customer"]["contragent"]["KPP"] = $model->history[$index11]->customer->contragent->KPP;
}
if (null !== $model->history[$index11]->customer->contragent->OGRN) {
    $jsonData["history"][$index11]["customer"]["contragent"]["OGRN"] = $model->history[$index11]->customer->contragent->OGRN;
}
if (null !== $model->history[$index11]->customer->contragent->OGRNIP) {
    $jsonData["history"][$index11]["customer"]["contragent"]["OGRNIP"] = $model->history[$index11]->customer->contragent->OGRNIP;
}
if (null !== $model->history[$index11]->customer->contragent->certificateNumber) {
    $jsonData["history"][$index11]["customer"]["contragent"]["certificateNumber"] = $model->history[$index11]->customer->contragent->certificateNumber;
}
if (null !== $model->history[$index11]->customer->contragent->certificateDate) {
    $jsonData["history"][$index11]["customer"]["contragent"]["certificateDate"] = $model->history[$index11]->customer->contragent->certificateDate->format('Y-m-d H:i:s');;
}
if (null !== $model->history[$index11]->customer->contragent->BIK) {
    $jsonData["history"][$index11]["customer"]["contragent"]["BIK"] = $model->history[$index11]->customer->contragent->BIK;
}
if (null !== $model->history[$index11]->customer->contragent->bank) {
    $jsonData["history"][$index11]["customer"]["contragent"]["bank"] = $model->history[$index11]->customer->contragent->bank;
}
if (null !== $model->history[$index11]->customer->contragent->bankAddress) {
    $jsonData["history"][$index11]["customer"]["contragent"]["bankAddress"] = $model->history[$index11]->customer->contragent->bankAddress;
}
if (null !== $model->history[$index11]->customer->contragent->corrAccount) {
    $jsonData["history"][$index11]["customer"]["contragent"]["corrAccount"] = $model->history[$index11]->customer->contragent->corrAccount;
}
if (null !== $model->history[$index11]->customer->contragent->bankAccount) {
    $jsonData["history"][$index11]["customer"]["contragent"]["bankAccount"] = $model->history[$index11]->customer->contragent->bankAccount;
}

if (0 === \count($jsonData["history"][$index11]["customer"]["contragent"])) {
    $jsonData["history"][$index11]["customer"]["contragent"] = $emptyObject;
}

}
if (null !== $model->history[$index11]->customer->tags) {
    $jsonData["history"][$index11]["customer"]["tags"] = [];
foreach (array_keys($model->history[$index11]->customer->tags) as $index41) {
    $jsonData["history"][$index11]["customer"]["tags"][$index41] = [];
if (null !== $model->history[$index11]->customer->tags[$index41]->name) {
    $jsonData["history"][$index11]["customer"]["tags"][$index41]["name"] = $model->history[$index11]->customer->tags[$index41]->name;
}
if (null !== $model->history[$index11]->customer->tags[$index41]->color) {
    $jsonData["history"][$index11]["customer"]["tags"][$index41]["color"] = $model->history[$index11]->customer->tags[$index41]->color;
}
if (null !== $model->history[$index11]->customer->tags[$index41]->attached) {
    $jsonData["history"][$index11]["customer"]["tags"][$index41]["attached"] = $model->history[$index11]->customer->tags[$index41]->attached;
}

if (0 === \count($jsonData["history"][$index11]["customer"]["tags"][$index41])) {
    $jsonData["history"][$index11]["customer"]["tags"][$index41] = $emptyObject;
}

}

}
if (null !== $model->history[$index11]->customer->avgMarginSumm) {
    $jsonData["history"][$index11]["customer"]["avgMarginSumm"] = $model->history[$index11]->customer->avgMarginSumm;
}
if (null !== $model->history[$index11]->customer->marginSumm) {
    $jsonData["history"][$index11]["customer"]["marginSumm"] = $model->history[$index11]->customer->marginSumm;
}
if (null !== $model->history[$index11]->customer->totalSumm) {
    $jsonData["history"][$index11]["customer"]["totalSumm"] = $model->history[$index11]->customer->totalSumm;
}
if (null !== $model->history[$index11]->customer->averageSumm) {
    $jsonData["history"][$index11]["customer"]["averageSumm"] = $model->history[$index11]->customer->averageSumm;
}
if (null !== $model->history[$index11]->customer->ordersCount) {
    $jsonData["history"][$index11]["customer"]["ordersCount"] = $model->history[$index11]->customer->ordersCount;
}
if (null !== $model->history[$index11]->customer->costSumm) {
    $jsonData["history"][$index11]["customer"]["costSumm"] = $model->history[$index11]->customer->costSumm;
}
if (null !== $model->history[$index11]->customer->customFields) {
    $jsonData["history"][$index11]["customer"]["customFields"] = [];
foreach (array_keys($model->history[$index11]->customer->customFields) as $index49) {
    $jsonData["history"][$index11]["customer"]["customFields"] = $model->history[$index11]->customer->customFields;
}

}
if (null !== $model->history[$index11]->customer->personalDiscount) {
    $jsonData["history"][$index11]["customer"]["personalDiscount"] = $model->history[$index11]->customer->personalDiscount;
}
if (null !== $model->history[$index11]->customer->cumulativeDiscount) {
    $jsonData["history"][$index11]["customer"]["cumulativeDiscount"] = $model->history[$index11]->customer->cumulativeDiscount;
}
if (null !== $model->history[$index11]->customer->discountCardNumber) {
    $jsonData["history"][$index11]["customer"]["discountCardNumber"] = $model->history[$index11]->customer->discountCardNumber;
}
if (null !== $model->history[$index11]->customer->firstClientId) {
    $jsonData["history"][$index11]["customer"]["firstClientId"] = $model->history[$index11]->customer->firstClientId;
}
if (null !== $model->history[$index11]->customer->lastClientId) {
    $jsonData["history"][$index11]["customer"]["lastClientId"] = $model->history[$index11]->customer->lastClientId;
}
if (null !== $model->history[$index11]->customer->address) {
    $jsonData["history"][$index11]["customer"]["address"] = [];
if (null !== $model->history[$index11]->customer->address->id) {
    $jsonData["history"][$index11]["customer"]["address"]["id"] = $model->history[$index11]->customer->address->id;
}
if (null !== $model->history[$index11]->customer->address->name) {
    $jsonData["history"][$index11]["customer"]["address"]["name"] = $model->history[$index11]->customer->address->name;
}
if (null !== $model->history[$index11]->customer->address->isMain) {
    $jsonData["history"][$index11]["customer"]["address"]["isMain"] = $model->history[$index11]->customer->address->isMain;
}
if (null !== $model->history[$index11]->customer->address->index) {
    $jsonData["history"][$index11]["customer"]["address"]["index"] = $model->history[$index11]->customer->address->index;
}
if (null !== $model->history[$index11]->customer->address->countryIso) {
    $jsonData["history"][$index11]["customer"]["address"]["countryIso"] = $model->history[$index11]->customer->address->countryIso;
}
if (null !== $model->history[$index11]->customer->address->region) {
    $jsonData["history"][$index11]["customer"]["address"]["region"] = $model->history[$index11]->customer->address->region;
}
if (null !== $model->history[$index11]->customer->address->regionId) {
    $jsonData["history"][$index11]["customer"]["address"]["regionId"] = $model->history[$index11]->customer->address->regionId;
}
if (null !== $model->history[$index11]->customer->address->city) {
    $jsonData["history"][$index11]["customer"]["address"]["city"] = $model->history[$index11]->customer->address->city;
}
if (null !== $model->history[$index11]->customer->address->cityId) {
    $jsonData["history"][$index11]["customer"]["address"]["cityId"] = $model->history[$index11]->customer->address->cityId;
}
if (null !== $model->history[$index11]->customer->address->cityType) {
    $jsonData["history"][$index11]["customer"]["address"]["cityType"] = $model->history[$index11]->customer->address->cityType;
}
if (null !== $model->history[$index11]->customer->address->street) {
    $jsonData["history"][$index11]["customer"]["address"]["street"] = $model->history[$index11]->customer->address->street;
}
if (null !== $model->history[$index11]->customer->address->streetId) {
    $jsonData["history"][$index11]["customer"]["address"]["streetId"] = $model->history[$index11]->customer->address->streetId;
}
if (null !== $model->history[$index11]->customer->address->streetType) {
    $jsonData["history"][$index11]["customer"]["address"]["streetType"] = $model->history[$index11]->customer->address->streetType;
}
if (null !== $model->history[$index11]->customer->address->building) {
    $jsonData["history"][$index11]["customer"]["address"]["building"] = $model->history[$index11]->customer->address->building;
}
if (null !== $model->history[$index11]->customer->address->flat) {
    $jsonData["history"][$index11]["customer"]["address"]["flat"] = $model->history[$index11]->customer->address->flat;
}
if (null !== $model->history[$index11]->customer->address->floor) {
    $jsonData["history"][$index11]["customer"]["address"]["floor"] = $model->history[$index11]->customer->address->floor;
}
if (null !== $model->history[$index11]->customer->address->block) {
    $jsonData["history"][$index11]["customer"]["address"]["block"] = $model->history[$index11]->customer->address->block;
}
if (null !== $model->history[$index11]->customer->address->house) {
    $jsonData["history"][$index11]["customer"]["address"]["house"] = $model->history[$index11]->customer->address->house;
}
if (null !== $model->history[$index11]->customer->address->housing) {
    $jsonData["history"][$index11]["customer"]["address"]["housing"] = $model->history[$index11]->customer->address->housing;
}
if (null !== $model->history[$index11]->customer->address->metro) {
    $jsonData["history"][$index11]["customer"]["address"]["metro"] = $model->history[$index11]->customer->address->metro;
}
if (null !== $model->history[$index11]->customer->address->notes) {
    $jsonData["history"][$index11]["customer"]["address"]["notes"] = $model->history[$index11]->customer->address->notes;
}
if (null !== $model->history[$index11]->customer->address->text) {
    $jsonData["history"][$index11]["customer"]["address"]["text"] = $model->history[$index11]->customer->address->text;
}
if (null !== $model->history[$index11]->customer->address->externalId) {
    $jsonData["history"][$index11]["customer"]["address"]["externalId"] = $model->history[$index11]->customer->address->externalId;
}

if (0 === \count($jsonData["history"][$index11]["customer"]["address"])) {
    $jsonData["history"][$index11]["customer"]["address"] = $emptyObject;
}

}
if (null !== $model->history[$index11]->customer->segments) {
    $jsonData["history"][$index11]["customer"]["segments"] = [];
foreach (array_keys($model->history[$index11]->customer->segments) as $index45) {
    $jsonData["history"][$index11]["customer"]["segments"][$index45] = [];
if (null !== $model->history[$index11]->customer->segments[$index45]->id) {
    $jsonData["history"][$index11]["customer"]["segments"][$index45]["id"] = $model->history[$index11]->customer->segments[$index45]->id;
}
if (null !== $model->history[$index11]->customer->segments[$index45]->code) {
    $jsonData["history"][$index11]["customer"]["segments"][$index45]["code"] = $model->history[$index11]->customer->segments[$index45]->code;
}
if (null !== $model->history[$index11]->customer->segments[$index45]->name) {
    $jsonData["history"][$index11]["customer"]["segments"][$index45]["name"] = $model->history[$index11]->customer->segments[$index45]->name;
}
if (null !== $model->history[$index11]->customer->segments[$index45]->createdAt) {
    $jsonData["history"][$index11]["customer"]["segments"][$index45]["createdAt"] = $model->history[$index11]->customer->segments[$index45]->createdAt->format('Y-m-d H:i:s');;
}
if (null !== $model->history[$index11]->customer->segments[$index45]->isDynamic) {
    $jsonData["history"][$index11]["customer"]["segments"][$index45]["isDynamic"] = $model->history[$index11]->customer->segments[$index45]->isDynamic;
}
if (null !== $model->history[$index11]->customer->segments[$index45]->customersCount) {
    $jsonData["history"][$index11]["customer"]["segments"][$index45]["customersCount"] = $model->history[$index11]->customer->segments[$index45]->customersCount;
}
if (null !== $model->history[$index11]->customer->segments[$index45]->active) {
    $jsonData["history"][$index11]["customer"]["segments"][$index45]["active"] = $model->history[$index11]->customer->segments[$index45]->active;
}

if (0 === \count($jsonData["history"][$index11]["customer"]["segments"][$index45])) {
    $jsonData["history"][$index11]["customer"]["segments"][$index45] = $emptyObject;
}

}

}
if (null !== $model->history[$index11]->customer->maturationTime) {
    $jsonData["history"][$index11]["customer"]["maturationTime"] = $model->history[$index11]->customer->maturationTime;
}
if (null !== $model->history[$index11]->customer->firstName) {
    $jsonData["history"][$index11]["customer"]["firstName"] = $model->history[$index11]->customer->firstName;
}
if (null !== $model->history[$index11]->customer->lastName) {
    $jsonData["history"][$index11]["customer"]["lastName"] = $model->history[$index11]->customer->lastName;
}
if (null !== $model->history[$index11]->customer->patronymic) {
    $jsonData["history"][$index11]["customer"]["patronymic"] = $model->history[$index11]->customer->patronymic;
}
if (null !== $model->history[$index11]->customer->sex) {
    $jsonData["history"][$index11]["customer"]["sex"] = $model->history[$index11]->customer->sex;
}
if (null !== $model->history[$index11]->customer->presumableSex) {
    $jsonData["history"][$index11]["customer"]["presumableSex"] = $model->history[$index11]->customer->presumableSex;
}
if (null !== $model->history[$index11]->customer->email) {
    $jsonData["history"][$index11]["customer"]["email"] = $model->history[$index11]->customer->email;
}
if (null !== $model->history[$index11]->customer->emailMarketingUnsubscribedAt) {
    $jsonData["history"][$index11]["customer"]["emailMarketingUnsubscribedAt"] = $model->history[$index11]->customer->emailMarketingUnsubscribedAt->format('Y-m-d H:i:s');;
}
if (null !== $model->history[$index11]->customer->phones) {
    $jsonData["history"][$index11]["customer"]["phones"] = [];
foreach (array_keys($model->history[$index11]->customer->phones) as $index43) {
    $jsonData["history"][$index11]["customer"]["phones"][$index43] = [];
if (null !== $model->history[$index11]->customer->phones[$index43]->number) {
    $jsonData["history"][$index11]["customer"]["phones"][$index43]["number"] = $model->history[$index11]->customer->phones[$index43]->number;
}

if (0 === \count($jsonData["history"][$index11]["customer"]["phones"][$index43])) {
    $jsonData["history"][$index11]["customer"]["phones"][$index43] = $emptyObject;
}

}

}
if (null !== $model->history[$index11]->customer->birthday) {
    $jsonData["history"][$index11]["customer"]["birthday"] = $model->history[$index11]->customer->birthday->format('Y-m-d H:i:s');;
}
if (null !== $model->history[$index11]->customer->source) {
    $jsonData["history"][$index11]["customer"]["source"] = [];
if (null !== $model->history[$index11]->customer->source->source) {
    $jsonData["history"][$index11]["customer"]["source"]["source"] = $model->history[$index11]->customer->source->source;
}
if (null !== $model->history[$index11]->customer->source->medium) {
    $jsonData["history"][$index11]["customer"]["source"]["medium"] = $model->history[$index11]->customer->source->medium;
}
if (null !== $model->history[$index11]->customer->source->campaign) {
    $jsonData["history"][$index11]["customer"]["source"]["campaign"] = $model->history[$index11]->customer->source->campaign;
}
if (null !== $model->history[$index11]->customer->source->keyword) {
    $jsonData["history"][$index11]["customer"]["source"]["keyword"] = $model->history[$index11]->customer->source->keyword;
}
if (null !== $model->history[$index11]->customer->source->content) {
    $jsonData["history"][$index11]["customer"]["source"]["content"] = $model->history[$index11]->customer->source->content;
}

if (0 === \count($jsonData["history"][$index11]["customer"]["source"])) {
    $jsonData["history"][$index11]["customer"]["source"] = $emptyObject;
}

}
if (null !== $model->history[$index11]->customer->photoUrl) {
    $jsonData["history"][$index11]["customer"]["photoUrl"] = $model->history[$index11]->customer->photoUrl;
}
if (null !== $model->history[$index11]->customer->mgCustomerId) {
    $jsonData["history"][$index11]["customer"]["mgCustomerId"] = $model->history[$index11]->customer->mgCustomerId;
}
if (null !== $model->history[$index11]->customer->subscribed) {
    $jsonData["history"][$index11]["customer"]["subscribed"] = $model->history[$index11]->customer->subscribed;
}

if (0 === \count($jsonData["history"][$index11]["customer"])) {
    $jsonData["history"][$index11]["customer"] = $emptyObject;
}

}
if (null !== $model->history[$index11]->address) {
    $jsonData["history"][$index11]["address"] = [];
if (null !== $model->history[$index11]->address->id) {
    $jsonData["history"][$index11]["address"]["id"] = $model->history[$index11]->address->id;
}
if (null !== $model->history[$index11]->address->externalId) {
    $jsonData["history"][$index11]["address"]["externalId"] = $model->history[$index11]->address->externalId;
}
if (null !== $model->history[$index11]->address->name) {
    $jsonData["history"][$index11]["address"]["name"] = $model->history[$index11]->address->name;
}
if (null !== $model->history[$index11]->address->isMain) {
    $jsonData["history"][$index11]["address"]["isMain"] = $model->history[$index11]->address->isMain;
}

if (0 === \count($jsonData["history"][$index11]["address"])) {
    $jsonData["history"][$index11]["address"] = $emptyObject;
}

}
if (null !== $model->history[$index11]->combinedTo) {
    $jsonData["history"][$index11]["combinedTo"] = [];
if (null !== $model->history[$index11]->combinedTo->type) {
    $jsonData["history"][$index11]["combinedTo"]["type"] = $model->history[$index11]->combinedTo->type;
}
if (null !== $model->history[$index11]->combinedTo->id) {
    $jsonData["history"][$index11]["combinedTo"]["id"] = $model->history[$index11]->combinedTo->id;
}
if (null !== $model->history[$index11]->combinedTo->externalId) {
    $jsonData["history"][$index11]["combinedTo"]["externalId"] = $model->history[$index11]->combinedTo->externalId;
}
if (null !== $model->history[$index11]->combinedTo->isContact) {
    $jsonData["history"][$index11]["combinedTo"]["isContact"] = $model->history[$index11]->combinedTo->isContact;
}
if (null !== $model->history[$index11]->combinedTo->createdAt) {
    $jsonData["history"][$index11]["combinedTo"]["createdAt"] = $model->history[$index11]->combinedTo->createdAt->format('Y-m-d H:i:s');;
}
if (null !== $model->history[$index11]->combinedTo->managerId) {
    $jsonData["history"][$index11]["combinedTo"]["managerId"] = $model->history[$index11]->combinedTo->managerId;
}
if (null !== $model->history[$index11]->combinedTo->vip) {
    $jsonData["history"][$index11]["combinedTo"]["vip"] = $model->history[$index11]->combinedTo->vip;
}
if (null !== $model->history[$index11]->combinedTo->bad) {
    $jsonData["history"][$index11]["combinedTo"]["bad"] = $model->history[$index11]->combinedTo->bad;
}
if (null !== $model->history[$index11]->combinedTo->browserId) {
    $jsonData["history"][$index11]["combinedTo"]["browserId"] = $model->history[$index11]->combinedTo->browserId;
}
if (null !== $model->history[$index11]->combinedTo->site) {
    $jsonData["history"][$index11]["combinedTo"]["site"] = $model->history[$index11]->combinedTo->site;
}
if (null !== $model->history[$index11]->combinedTo->contragent) {
    $jsonData["history"][$index11]["combinedTo"]["contragent"] = [];
if (null !== $model->history[$index11]->combinedTo->contragent->contragentType) {
    $jsonData["history"][$index11]["combinedTo"]["contragent"]["contragentType"] = $model->history[$index11]->combinedTo->contragent->contragentType;
}
if (null !== $model->history[$index11]->combinedTo->contragent->legalName) {
    $jsonData["history"][$index11]["combinedTo"]["contragent"]["legalName"] = $model->history[$index11]->combinedTo->contragent->legalName;
}
if (null !== $model->history[$index11]->combinedTo->contragent->legalAddress) {
    $jsonData["history"][$index11]["combinedTo"]["contragent"]["legalAddress"] = $model->history[$index11]->combinedTo->contragent->legalAddress;
}
if (null !== $model->history[$index11]->combinedTo->contragent->INN) {
    $jsonData["history"][$index11]["combinedTo"]["contragent"]["INN"] = $model->history[$index11]->combinedTo->contragent->INN;
}
if (null !== $model->history[$index11]->combinedTo->contragent->OKPO) {
    $jsonData["history"][$index11]["combinedTo"]["contragent"]["OKPO"] = $model->history[$index11]->combinedTo->contragent->OKPO;
}
if (null !== $model->history[$index11]->combinedTo->contragent->KPP) {
    $jsonData["history"][$index11]["combinedTo"]["contragent"]["KPP"] = $model->history[$index11]->combinedTo->contragent->KPP;
}
if (null !== $model->history[$index11]->combinedTo->contragent->OGRN) {
    $jsonData["history"][$index11]["combinedTo"]["contragent"]["OGRN"] = $model->history[$index11]->combinedTo->contragent->OGRN;
}
if (null !== $model->history[$index11]->combinedTo->contragent->OGRNIP) {
    $jsonData["history"][$index11]["combinedTo"]["contragent"]["OGRNIP"] = $model->history[$index11]->combinedTo->contragent->OGRNIP;
}
if (null !== $model->history[$index11]->combinedTo->contragent->certificateNumber) {
    $jsonData["history"][$index11]["combinedTo"]["contragent"]["certificateNumber"] = $model->history[$index11]->combinedTo->contragent->certificateNumber;
}
if (null !== $model->history[$index11]->combinedTo->contragent->certificateDate) {
    $jsonData["history"][$index11]["combinedTo"]["contragent"]["certificateDate"] = $model->history[$index11]->combinedTo->contragent->certificateDate->format('Y-m-d H:i:s');;
}
if (null !== $model->history[$index11]->combinedTo->contragent->BIK) {
    $jsonData["history"][$index11]["combinedTo"]["contragent"]["BIK"] = $model->history[$index11]->combinedTo->contragent->BIK;
}
if (null !== $model->history[$index11]->combinedTo->contragent->bank) {
    $jsonData["history"][$index11]["combinedTo"]["contragent"]["bank"] = $model->history[$index11]->combinedTo->contragent->bank;
}
if (null !== $model->history[$index11]->combinedTo->contragent->bankAddress) {
    $jsonData["history"][$index11]["combinedTo"]["contragent"]["bankAddress"] = $model->history[$index11]->combinedTo->contragent->bankAddress;
}
if (null !== $model->history[$index11]->combinedTo->contragent->corrAccount) {
    $jsonData["history"][$index11]["combinedTo"]["contragent"]["corrAccount"] = $model->history[$index11]->combinedTo->contragent->corrAccount;
}
if (null !== $model->history[$index11]->combinedTo->contragent->bankAccount) {
    $jsonData["history"][$index11]["combinedTo"]["contragent"]["bankAccount"] = $model->history[$index11]->combinedTo->contragent->bankAccount;
}

if (0 === \count($jsonData["history"][$index11]["combinedTo"]["contragent"])) {
    $jsonData["history"][$index11]["combinedTo"]["contragent"] = $emptyObject;
}

}
if (null !== $model->history[$index11]->combinedTo->tags) {
    $jsonData["history"][$index11]["combinedTo"]["tags"] = [];
foreach (array_keys($model->history[$index11]->combinedTo->tags) as $index43) {
    $jsonData["history"][$index11]["combinedTo"]["tags"][$index43] = [];
if (null !== $model->history[$index11]->combinedTo->tags[$index43]->name) {
    $jsonData["history"][$index11]["combinedTo"]["tags"][$index43]["name"] = $model->history[$index11]->combinedTo->tags[$index43]->name;
}
if (null !== $model->history[$index11]->combinedTo->tags[$index43]->color) {
    $jsonData["history"][$index11]["combinedTo"]["tags"][$index43]["color"] = $model->history[$index11]->combinedTo->tags[$index43]->color;
}
if (null !== $model->history[$index11]->combinedTo->tags[$index43]->attached) {
    $jsonData["history"][$index11]["combinedTo"]["tags"][$index43]["attached"] = $model->history[$index11]->combinedTo->tags[$index43]->attached;
}

if (0 === \count($jsonData["history"][$index11]["combinedTo"]["tags"][$index43])) {
    $jsonData["history"][$index11]["combinedTo"]["tags"][$index43] = $emptyObject;
}

}

}
if (null !== $model->history[$index11]->combinedTo->avgMarginSumm) {
    $jsonData["history"][$index11]["combinedTo"]["avgMarginSumm"] = $model->history[$index11]->combinedTo->avgMarginSumm;
}
if (null !== $model->history[$index11]->combinedTo->marginSumm) {
    $jsonData["history"][$index11]["combinedTo"]["marginSumm"] = $model->history[$index11]->combinedTo->marginSumm;
}
if (null !== $model->history[$index11]->combinedTo->totalSumm) {
    $jsonData["history"][$index11]["combinedTo"]["totalSumm"] = $model->history[$index11]->combinedTo->totalSumm;
}
if (null !== $model->history[$index11]->combinedTo->averageSumm) {
    $jsonData["history"][$index11]["combinedTo"]["averageSumm"] = $model->history[$index11]->combinedTo->averageSumm;
}
if (null !== $model->history[$index11]->combinedTo->ordersCount) {
    $jsonData["history"][$index11]["combinedTo"]["ordersCount"] = $model->history[$index11]->combinedTo->ordersCount;
}
if (null !== $model->history[$index11]->combinedTo->costSumm) {
    $jsonData["history"][$index11]["combinedTo"]["costSumm"] = $model->history[$index11]->combinedTo->costSumm;
}
if (null !== $model->history[$index11]->combinedTo->customFields) {
    $jsonData["history"][$index11]["combinedTo"]["customFields"] = [];
foreach (array_keys($model->history[$index11]->combinedTo->customFields) as $index51) {
    $jsonData["history"][$index11]["combinedTo"]["customFields"] = $model->history[$index11]->combinedTo->customFields;
}

}
if (null !== $model->history[$index11]->combinedTo->personalDiscount) {
    $jsonData["history"][$index11]["combinedTo"]["personalDiscount"] = $model->history[$index11]->combinedTo->personalDiscount;
}
if (null !== $model->history[$index11]->combinedTo->cumulativeDiscount) {
    $jsonData["history"][$index11]["combinedTo"]["cumulativeDiscount"] = $model->history[$index11]->combinedTo->cumulativeDiscount;
}
if (null !== $model->history[$index11]->combinedTo->discountCardNumber) {
    $jsonData["history"][$index11]["combinedTo"]["discountCardNumber"] = $model->history[$index11]->combinedTo->discountCardNumber;
}
if (null !== $model->history[$index11]->combinedTo->firstClientId) {
    $jsonData["history"][$index11]["combinedTo"]["firstClientId"] = $model->history[$index11]->combinedTo->firstClientId;
}
if (null !== $model->history[$index11]->combinedTo->lastClientId) {
    $jsonData["history"][$index11]["combinedTo"]["lastClientId"] = $model->history[$index11]->combinedTo->lastClientId;
}
if (null !== $model->history[$index11]->combinedTo->address) {
    $jsonData["history"][$index11]["combinedTo"]["address"] = [];
if (null !== $model->history[$index11]->combinedTo->address->id) {
    $jsonData["history"][$index11]["combinedTo"]["address"]["id"] = $model->history[$index11]->combinedTo->address->id;
}
if (null !== $model->history[$index11]->combinedTo->address->name) {
    $jsonData["history"][$index11]["combinedTo"]["address"]["name"] = $model->history[$index11]->combinedTo->address->name;
}
if (null !== $model->history[$index11]->combinedTo->address->isMain) {
    $jsonData["history"][$index11]["combinedTo"]["address"]["isMain"] = $model->history[$index11]->combinedTo->address->isMain;
}
if (null !== $model->history[$index11]->combinedTo->address->index) {
    $jsonData["history"][$index11]["combinedTo"]["address"]["index"] = $model->history[$index11]->combinedTo->address->index;
}
if (null !== $model->history[$index11]->combinedTo->address->countryIso) {
    $jsonData["history"][$index11]["combinedTo"]["address"]["countryIso"] = $model->history[$index11]->combinedTo->address->countryIso;
}
if (null !== $model->history[$index11]->combinedTo->address->region) {
    $jsonData["history"][$index11]["combinedTo"]["address"]["region"] = $model->history[$index11]->combinedTo->address->region;
}
if (null !== $model->history[$index11]->combinedTo->address->regionId) {
    $jsonData["history"][$index11]["combinedTo"]["address"]["regionId"] = $model->history[$index11]->combinedTo->address->regionId;
}
if (null !== $model->history[$index11]->combinedTo->address->city) {
    $jsonData["history"][$index11]["combinedTo"]["address"]["city"] = $model->history[$index11]->combinedTo->address->city;
}
if (null !== $model->history[$index11]->combinedTo->address->cityId) {
    $jsonData["history"][$index11]["combinedTo"]["address"]["cityId"] = $model->history[$index11]->combinedTo->address->cityId;
}
if (null !== $model->history[$index11]->combinedTo->address->cityType) {
    $jsonData["history"][$index11]["combinedTo"]["address"]["cityType"] = $model->history[$index11]->combinedTo->address->cityType;
}
if (null !== $model->history[$index11]->combinedTo->address->street) {
    $jsonData["history"][$index11]["combinedTo"]["address"]["street"] = $model->history[$index11]->combinedTo->address->street;
}
if (null !== $model->history[$index11]->combinedTo->address->streetId) {
    $jsonData["history"][$index11]["combinedTo"]["address"]["streetId"] = $model->history[$index11]->combinedTo->address->streetId;
}
if (null !== $model->history[$index11]->combinedTo->address->streetType) {
    $jsonData["history"][$index11]["combinedTo"]["address"]["streetType"] = $model->history[$index11]->combinedTo->address->streetType;
}
if (null !== $model->history[$index11]->combinedTo->address->building) {
    $jsonData["history"][$index11]["combinedTo"]["address"]["building"] = $model->history[$index11]->combinedTo->address->building;
}
if (null !== $model->history[$index11]->combinedTo->address->flat) {
    $jsonData["history"][$index11]["combinedTo"]["address"]["flat"] = $model->history[$index11]->combinedTo->address->flat;
}
if (null !== $model->history[$index11]->combinedTo->address->floor) {
    $jsonData["history"][$index11]["combinedTo"]["address"]["floor"] = $model->history[$index11]->combinedTo->address->floor;
}
if (null !== $model->history[$index11]->combinedTo->address->block) {
    $jsonData["history"][$index11]["combinedTo"]["address"]["block"] = $model->history[$index11]->combinedTo->address->block;
}
if (null !== $model->history[$index11]->combinedTo->address->house) {
    $jsonData["history"][$index11]["combinedTo"]["address"]["house"] = $model->history[$index11]->combinedTo->address->house;
}
if (null !== $model->history[$index11]->combinedTo->address->housing) {
    $jsonData["history"][$index11]["combinedTo"]["address"]["housing"] = $model->history[$index11]->combinedTo->address->housing;
}
if (null !== $model->history[$index11]->combinedTo->address->metro) {
    $jsonData["history"][$index11]["combinedTo"]["address"]["metro"] = $model->history[$index11]->combinedTo->address->metro;
}
if (null !== $model->history[$index11]->combinedTo->address->notes) {
    $jsonData["history"][$index11]["combinedTo"]["address"]["notes"] = $model->history[$index11]->combinedTo->address->notes;
}
if (null !== $model->history[$index11]->combinedTo->address->text) {
    $jsonData["history"][$index11]["combinedTo"]["address"]["text"] = $model->history[$index11]->combinedTo->address->text;
}
if (null !== $model->history[$index11]->combinedTo->address->externalId) {
    $jsonData["history"][$index11]["combinedTo"]["address"]["externalId"] = $model->history[$index11]->combinedTo->address->externalId;
}

if (0 === \count($jsonData["history"][$index11]["combinedTo"]["address"])) {
    $jsonData["history"][$index11]["combinedTo"]["address"] = $emptyObject;
}

}
if (null !== $model->history[$index11]->combinedTo->segments) {
    $jsonData["history"][$index11]["combinedTo"]["segments"] = [];
foreach (array_keys($model->history[$index11]->combinedTo->segments) as $index47) {
    $jsonData["history"][$index11]["combinedTo"]["segments"][$index47] = [];
if (null !== $model->history[$index11]->combinedTo->segments[$index47]->id) {
    $jsonData["history"][$index11]["combinedTo"]["segments"][$index47]["id"] = $model->history[$index11]->combinedTo->segments[$index47]->id;
}
if (null !== $model->history[$index11]->combinedTo->segments[$index47]->code) {
    $jsonData["history"][$index11]["combinedTo"]["segments"][$index47]["code"] = $model->history[$index11]->combinedTo->segments[$index47]->code;
}
if (null !== $model->history[$index11]->combinedTo->segments[$index47]->name) {
    $jsonData["history"][$index11]["combinedTo"]["segments"][$index47]["name"] = $model->history[$index11]->combinedTo->segments[$index47]->name;
}
if (null !== $model->history[$index11]->combinedTo->segments[$index47]->createdAt) {
    $jsonData["history"][$index11]["combinedTo"]["segments"][$index47]["createdAt"] = $model->history[$index11]->combinedTo->segments[$index47]->createdAt->format('Y-m-d H:i:s');;
}
if (null !== $model->history[$index11]->combinedTo->segments[$index47]->isDynamic) {
    $jsonData["history"][$index11]["combinedTo"]["segments"][$index47]["isDynamic"] = $model->history[$index11]->combinedTo->segments[$index47]->isDynamic;
}
if (null !== $model->history[$index11]->combinedTo->segments[$index47]->customersCount) {
    $jsonData["history"][$index11]["combinedTo"]["segments"][$index47]["customersCount"] = $model->history[$index11]->combinedTo->segments[$index47]->customersCount;
}
if (null !== $model->history[$index11]->combinedTo->segments[$index47]->active) {
    $jsonData["history"][$index11]["combinedTo"]["segments"][$index47]["active"] = $model->history[$index11]->combinedTo->segments[$index47]->active;
}

if (0 === \count($jsonData["history"][$index11]["combinedTo"]["segments"][$index47])) {
    $jsonData["history"][$index11]["combinedTo"]["segments"][$index47] = $emptyObject;
}

}

}
if (null !== $model->history[$index11]->combinedTo->maturationTime) {
    $jsonData["history"][$index11]["combinedTo"]["maturationTime"] = $model->history[$index11]->combinedTo->maturationTime;
}
if (null !== $model->history[$index11]->combinedTo->firstName) {
    $jsonData["history"][$index11]["combinedTo"]["firstName"] = $model->history[$index11]->combinedTo->firstName;
}
if (null !== $model->history[$index11]->combinedTo->lastName) {
    $jsonData["history"][$index11]["combinedTo"]["lastName"] = $model->history[$index11]->combinedTo->lastName;
}
if (null !== $model->history[$index11]->combinedTo->patronymic) {
    $jsonData["history"][$index11]["combinedTo"]["patronymic"] = $model->history[$index11]->combinedTo->patronymic;
}
if (null !== $model->history[$index11]->combinedTo->sex) {
    $jsonData["history"][$index11]["combinedTo"]["sex"] = $model->history[$index11]->combinedTo->sex;
}
if (null !== $model->history[$index11]->combinedTo->presumableSex) {
    $jsonData["history"][$index11]["combinedTo"]["presumableSex"] = $model->history[$index11]->combinedTo->presumableSex;
}
if (null !== $model->history[$index11]->combinedTo->email) {
    $jsonData["history"][$index11]["combinedTo"]["email"] = $model->history[$index11]->combinedTo->email;
}
if (null !== $model->history[$index11]->combinedTo->emailMarketingUnsubscribedAt) {
    $jsonData["history"][$index11]["combinedTo"]["emailMarketingUnsubscribedAt"] = $model->history[$index11]->combinedTo->emailMarketingUnsubscribedAt->format('Y-m-d H:i:s');;
}
if (null !== $model->history[$index11]->combinedTo->phones) {
    $jsonData["history"][$index11]["combinedTo"]["phones"] = [];
foreach (array_keys($model->history[$index11]->combinedTo->phones) as $index45) {
    $jsonData["history"][$index11]["combinedTo"]["phones"][$index45] = [];
if (null !== $model->history[$index11]->combinedTo->phones[$index45]->number) {
    $jsonData["history"][$index11]["combinedTo"]["phones"][$index45]["number"] = $model->history[$index11]->combinedTo->phones[$index45]->number;
}

if (0 === \count($jsonData["history"][$index11]["combinedTo"]["phones"][$index45])) {
    $jsonData["history"][$index11]["combinedTo"]["phones"][$index45] = $emptyObject;
}

}

}
if (null !== $model->history[$index11]->combinedTo->birthday) {
    $jsonData["history"][$index11]["combinedTo"]["birthday"] = $model->history[$index11]->combinedTo->birthday->format('Y-m-d H:i:s');;
}
if (null !== $model->history[$index11]->combinedTo->source) {
    $jsonData["history"][$index11]["combinedTo"]["source"] = [];
if (null !== $model->history[$index11]->combinedTo->source->source) {
    $jsonData["history"][$index11]["combinedTo"]["source"]["source"] = $model->history[$index11]->combinedTo->source->source;
}
if (null !== $model->history[$index11]->combinedTo->source->medium) {
    $jsonData["history"][$index11]["combinedTo"]["source"]["medium"] = $model->history[$index11]->combinedTo->source->medium;
}
if (null !== $model->history[$index11]->combinedTo->source->campaign) {
    $jsonData["history"][$index11]["combinedTo"]["source"]["campaign"] = $model->history[$index11]->combinedTo->source->campaign;
}
if (null !== $model->history[$index11]->combinedTo->source->keyword) {
    $jsonData["history"][$index11]["combinedTo"]["source"]["keyword"] = $model->history[$index11]->combinedTo->source->keyword;
}
if (null !== $model->history[$index11]->combinedTo->source->content) {
    $jsonData["history"][$index11]["combinedTo"]["source"]["content"] = $model->history[$index11]->combinedTo->source->content;
}

if (0 === \count($jsonData["history"][$index11]["combinedTo"]["source"])) {
    $jsonData["history"][$index11]["combinedTo"]["source"] = $emptyObject;
}

}
if (null !== $model->history[$index11]->combinedTo->photoUrl) {
    $jsonData["history"][$index11]["combinedTo"]["photoUrl"] = $model->history[$index11]->combinedTo->photoUrl;
}
if (null !== $model->history[$index11]->combinedTo->mgCustomerId) {
    $jsonData["history"][$index11]["combinedTo"]["mgCustomerId"] = $model->history[$index11]->combinedTo->mgCustomerId;
}
if (null !== $model->history[$index11]->combinedTo->subscribed) {
    $jsonData["history"][$index11]["combinedTo"]["subscribed"] = $model->history[$index11]->combinedTo->subscribed;
}

if (0 === \count($jsonData["history"][$index11]["combinedTo"])) {
    $jsonData["history"][$index11]["combinedTo"] = $emptyObject;
}

}

if (0 === \count($jsonData["history"][$index11])) {
    $jsonData["history"][$index11] = $emptyObject;
}

}

}

if (0 === \count($jsonData)) {
    $jsonData = $emptyObject;
}


    return $jsonData;
}
