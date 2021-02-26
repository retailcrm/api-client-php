<?php

function serialize_RetailCrm_Api_Model_Response_Customers_CustomerNotesResponse(RetailCrm\Api\Model\Response\Customers\CustomerNotesResponse $model, bool $useStdClass = true)
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
if (null !== $model->notes) {
    $jsonData["notes"] = [];
foreach (array_keys($model->notes) as $index9) {
    $jsonData["notes"][$index9] = [];
if (null !== $model->notes[$index9]->customer) {
    $jsonData["notes"][$index9]["customer"] = [];
if (null !== $model->notes[$index9]->customer->type) {
    $jsonData["notes"][$index9]["customer"]["type"] = $model->notes[$index9]->customer->type;
}
if (null !== $model->notes[$index9]->customer->id) {
    $jsonData["notes"][$index9]["customer"]["id"] = $model->notes[$index9]->customer->id;
}
if (null !== $model->notes[$index9]->customer->externalId) {
    $jsonData["notes"][$index9]["customer"]["externalId"] = $model->notes[$index9]->customer->externalId;
}
if (null !== $model->notes[$index9]->customer->isContact) {
    $jsonData["notes"][$index9]["customer"]["isContact"] = $model->notes[$index9]->customer->isContact;
}
if (null !== $model->notes[$index9]->customer->createdAt) {
    $jsonData["notes"][$index9]["customer"]["createdAt"] = $model->notes[$index9]->customer->createdAt->format('Y-m-d H:i:s');;
}
if (null !== $model->notes[$index9]->customer->managerId) {
    $jsonData["notes"][$index9]["customer"]["managerId"] = $model->notes[$index9]->customer->managerId;
}
if (null !== $model->notes[$index9]->customer->vip) {
    $jsonData["notes"][$index9]["customer"]["vip"] = $model->notes[$index9]->customer->vip;
}
if (null !== $model->notes[$index9]->customer->bad) {
    $jsonData["notes"][$index9]["customer"]["bad"] = $model->notes[$index9]->customer->bad;
}
if (null !== $model->notes[$index9]->customer->browserId) {
    $jsonData["notes"][$index9]["customer"]["browserId"] = $model->notes[$index9]->customer->browserId;
}
if (null !== $model->notes[$index9]->customer->site) {
    $jsonData["notes"][$index9]["customer"]["site"] = $model->notes[$index9]->customer->site;
}
if (null !== $model->notes[$index9]->customer->contragent) {
    $jsonData["notes"][$index9]["customer"]["contragent"] = [];
if (null !== $model->notes[$index9]->customer->contragent->contragentType) {
    $jsonData["notes"][$index9]["customer"]["contragent"]["contragentType"] = $model->notes[$index9]->customer->contragent->contragentType;
}
if (null !== $model->notes[$index9]->customer->contragent->legalName) {
    $jsonData["notes"][$index9]["customer"]["contragent"]["legalName"] = $model->notes[$index9]->customer->contragent->legalName;
}
if (null !== $model->notes[$index9]->customer->contragent->legalAddress) {
    $jsonData["notes"][$index9]["customer"]["contragent"]["legalAddress"] = $model->notes[$index9]->customer->contragent->legalAddress;
}
if (null !== $model->notes[$index9]->customer->contragent->INN) {
    $jsonData["notes"][$index9]["customer"]["contragent"]["INN"] = $model->notes[$index9]->customer->contragent->INN;
}
if (null !== $model->notes[$index9]->customer->contragent->OKPO) {
    $jsonData["notes"][$index9]["customer"]["contragent"]["OKPO"] = $model->notes[$index9]->customer->contragent->OKPO;
}
if (null !== $model->notes[$index9]->customer->contragent->KPP) {
    $jsonData["notes"][$index9]["customer"]["contragent"]["KPP"] = $model->notes[$index9]->customer->contragent->KPP;
}
if (null !== $model->notes[$index9]->customer->contragent->OGRN) {
    $jsonData["notes"][$index9]["customer"]["contragent"]["OGRN"] = $model->notes[$index9]->customer->contragent->OGRN;
}
if (null !== $model->notes[$index9]->customer->contragent->OGRNIP) {
    $jsonData["notes"][$index9]["customer"]["contragent"]["OGRNIP"] = $model->notes[$index9]->customer->contragent->OGRNIP;
}
if (null !== $model->notes[$index9]->customer->contragent->certificateNumber) {
    $jsonData["notes"][$index9]["customer"]["contragent"]["certificateNumber"] = $model->notes[$index9]->customer->contragent->certificateNumber;
}
if (null !== $model->notes[$index9]->customer->contragent->certificateDate) {
    $jsonData["notes"][$index9]["customer"]["contragent"]["certificateDate"] = $model->notes[$index9]->customer->contragent->certificateDate->format('Y-m-d H:i:s');;
}
if (null !== $model->notes[$index9]->customer->contragent->BIK) {
    $jsonData["notes"][$index9]["customer"]["contragent"]["BIK"] = $model->notes[$index9]->customer->contragent->BIK;
}
if (null !== $model->notes[$index9]->customer->contragent->bank) {
    $jsonData["notes"][$index9]["customer"]["contragent"]["bank"] = $model->notes[$index9]->customer->contragent->bank;
}
if (null !== $model->notes[$index9]->customer->contragent->bankAddress) {
    $jsonData["notes"][$index9]["customer"]["contragent"]["bankAddress"] = $model->notes[$index9]->customer->contragent->bankAddress;
}
if (null !== $model->notes[$index9]->customer->contragent->corrAccount) {
    $jsonData["notes"][$index9]["customer"]["contragent"]["corrAccount"] = $model->notes[$index9]->customer->contragent->corrAccount;
}
if (null !== $model->notes[$index9]->customer->contragent->bankAccount) {
    $jsonData["notes"][$index9]["customer"]["contragent"]["bankAccount"] = $model->notes[$index9]->customer->contragent->bankAccount;
}

if (0 === \count($jsonData["notes"][$index9]["customer"]["contragent"])) {
    $jsonData["notes"][$index9]["customer"]["contragent"] = $emptyObject;
}

}
if (null !== $model->notes[$index9]->customer->tags) {
    $jsonData["notes"][$index9]["customer"]["tags"] = [];
foreach (array_keys($model->notes[$index9]->customer->tags) as $index38) {
    $jsonData["notes"][$index9]["customer"]["tags"][$index38] = $model->notes[$index9]->customer->tags[$index38]->name;
}

}
if (null !== $model->notes[$index9]->customer->avgMarginSumm) {
    $jsonData["notes"][$index9]["customer"]["avgMarginSumm"] = $model->notes[$index9]->customer->avgMarginSumm;
}
if (null !== $model->notes[$index9]->customer->marginSumm) {
    $jsonData["notes"][$index9]["customer"]["marginSumm"] = $model->notes[$index9]->customer->marginSumm;
}
if (null !== $model->notes[$index9]->customer->totalSumm) {
    $jsonData["notes"][$index9]["customer"]["totalSumm"] = $model->notes[$index9]->customer->totalSumm;
}
if (null !== $model->notes[$index9]->customer->averageSumm) {
    $jsonData["notes"][$index9]["customer"]["averageSumm"] = $model->notes[$index9]->customer->averageSumm;
}
if (null !== $model->notes[$index9]->customer->ordersCount) {
    $jsonData["notes"][$index9]["customer"]["ordersCount"] = $model->notes[$index9]->customer->ordersCount;
}
if (null !== $model->notes[$index9]->customer->costSumm) {
    $jsonData["notes"][$index9]["customer"]["costSumm"] = $model->notes[$index9]->customer->costSumm;
}
if (null !== $model->notes[$index9]->customer->customFields) {
    $jsonData["notes"][$index9]["customer"]["customFields"] = [];
foreach (array_keys($model->notes[$index9]->customer->customFields) as $index46) {
    $jsonData["notes"][$index9]["customer"]["customFields"] = $model->notes[$index9]->customer->customFields;
}

}
if (null !== $model->notes[$index9]->customer->personalDiscount) {
    $jsonData["notes"][$index9]["customer"]["personalDiscount"] = $model->notes[$index9]->customer->personalDiscount;
}
if (null !== $model->notes[$index9]->customer->cumulativeDiscount) {
    $jsonData["notes"][$index9]["customer"]["cumulativeDiscount"] = $model->notes[$index9]->customer->cumulativeDiscount;
}
if (null !== $model->notes[$index9]->customer->discountCardNumber) {
    $jsonData["notes"][$index9]["customer"]["discountCardNumber"] = $model->notes[$index9]->customer->discountCardNumber;
}
if (null !== $model->notes[$index9]->customer->firstClientId) {
    $jsonData["notes"][$index9]["customer"]["firstClientId"] = $model->notes[$index9]->customer->firstClientId;
}
if (null !== $model->notes[$index9]->customer->lastClientId) {
    $jsonData["notes"][$index9]["customer"]["lastClientId"] = $model->notes[$index9]->customer->lastClientId;
}
if (null !== $model->notes[$index9]->customer->address) {
    $jsonData["notes"][$index9]["customer"]["address"] = [];
if (null !== $model->notes[$index9]->customer->address->id) {
    $jsonData["notes"][$index9]["customer"]["address"]["id"] = $model->notes[$index9]->customer->address->id;
}
if (null !== $model->notes[$index9]->customer->address->name) {
    $jsonData["notes"][$index9]["customer"]["address"]["name"] = $model->notes[$index9]->customer->address->name;
}
if (null !== $model->notes[$index9]->customer->address->isMain) {
    $jsonData["notes"][$index9]["customer"]["address"]["isMain"] = $model->notes[$index9]->customer->address->isMain;
}
if (null !== $model->notes[$index9]->customer->address->index) {
    $jsonData["notes"][$index9]["customer"]["address"]["index"] = $model->notes[$index9]->customer->address->index;
}
if (null !== $model->notes[$index9]->customer->address->countryIso) {
    $jsonData["notes"][$index9]["customer"]["address"]["countryIso"] = $model->notes[$index9]->customer->address->countryIso;
}
if (null !== $model->notes[$index9]->customer->address->region) {
    $jsonData["notes"][$index9]["customer"]["address"]["region"] = $model->notes[$index9]->customer->address->region;
}
if (null !== $model->notes[$index9]->customer->address->regionId) {
    $jsonData["notes"][$index9]["customer"]["address"]["regionId"] = $model->notes[$index9]->customer->address->regionId;
}
if (null !== $model->notes[$index9]->customer->address->city) {
    $jsonData["notes"][$index9]["customer"]["address"]["city"] = $model->notes[$index9]->customer->address->city;
}
if (null !== $model->notes[$index9]->customer->address->cityId) {
    $jsonData["notes"][$index9]["customer"]["address"]["cityId"] = $model->notes[$index9]->customer->address->cityId;
}
if (null !== $model->notes[$index9]->customer->address->cityType) {
    $jsonData["notes"][$index9]["customer"]["address"]["cityType"] = $model->notes[$index9]->customer->address->cityType;
}
if (null !== $model->notes[$index9]->customer->address->street) {
    $jsonData["notes"][$index9]["customer"]["address"]["street"] = $model->notes[$index9]->customer->address->street;
}
if (null !== $model->notes[$index9]->customer->address->streetId) {
    $jsonData["notes"][$index9]["customer"]["address"]["streetId"] = $model->notes[$index9]->customer->address->streetId;
}
if (null !== $model->notes[$index9]->customer->address->streetType) {
    $jsonData["notes"][$index9]["customer"]["address"]["streetType"] = $model->notes[$index9]->customer->address->streetType;
}
if (null !== $model->notes[$index9]->customer->address->building) {
    $jsonData["notes"][$index9]["customer"]["address"]["building"] = $model->notes[$index9]->customer->address->building;
}
if (null !== $model->notes[$index9]->customer->address->flat) {
    $jsonData["notes"][$index9]["customer"]["address"]["flat"] = $model->notes[$index9]->customer->address->flat;
}
if (null !== $model->notes[$index9]->customer->address->floor) {
    $jsonData["notes"][$index9]["customer"]["address"]["floor"] = $model->notes[$index9]->customer->address->floor;
}
if (null !== $model->notes[$index9]->customer->address->block) {
    $jsonData["notes"][$index9]["customer"]["address"]["block"] = $model->notes[$index9]->customer->address->block;
}
if (null !== $model->notes[$index9]->customer->address->house) {
    $jsonData["notes"][$index9]["customer"]["address"]["house"] = $model->notes[$index9]->customer->address->house;
}
if (null !== $model->notes[$index9]->customer->address->housing) {
    $jsonData["notes"][$index9]["customer"]["address"]["housing"] = $model->notes[$index9]->customer->address->housing;
}
if (null !== $model->notes[$index9]->customer->address->metro) {
    $jsonData["notes"][$index9]["customer"]["address"]["metro"] = $model->notes[$index9]->customer->address->metro;
}
if (null !== $model->notes[$index9]->customer->address->notes) {
    $jsonData["notes"][$index9]["customer"]["address"]["notes"] = $model->notes[$index9]->customer->address->notes;
}
if (null !== $model->notes[$index9]->customer->address->text) {
    $jsonData["notes"][$index9]["customer"]["address"]["text"] = $model->notes[$index9]->customer->address->text;
}
if (null !== $model->notes[$index9]->customer->address->externalId) {
    $jsonData["notes"][$index9]["customer"]["address"]["externalId"] = $model->notes[$index9]->customer->address->externalId;
}

if (0 === \count($jsonData["notes"][$index9]["customer"]["address"])) {
    $jsonData["notes"][$index9]["customer"]["address"] = $emptyObject;
}

}
if (null !== $model->notes[$index9]->customer->segments) {
    $jsonData["notes"][$index9]["customer"]["segments"] = [];
foreach (array_keys($model->notes[$index9]->customer->segments) as $index42) {
    $jsonData["notes"][$index9]["customer"]["segments"][$index42] = [];
if (null !== $model->notes[$index9]->customer->segments[$index42]->id) {
    $jsonData["notes"][$index9]["customer"]["segments"][$index42]["id"] = $model->notes[$index9]->customer->segments[$index42]->id;
}
if (null !== $model->notes[$index9]->customer->segments[$index42]->code) {
    $jsonData["notes"][$index9]["customer"]["segments"][$index42]["code"] = $model->notes[$index9]->customer->segments[$index42]->code;
}
if (null !== $model->notes[$index9]->customer->segments[$index42]->name) {
    $jsonData["notes"][$index9]["customer"]["segments"][$index42]["name"] = $model->notes[$index9]->customer->segments[$index42]->name;
}
if (null !== $model->notes[$index9]->customer->segments[$index42]->createdAt) {
    $jsonData["notes"][$index9]["customer"]["segments"][$index42]["createdAt"] = $model->notes[$index9]->customer->segments[$index42]->createdAt->format('Y-m-d H:i:s');;
}
if (null !== $model->notes[$index9]->customer->segments[$index42]->isDynamic) {
    $jsonData["notes"][$index9]["customer"]["segments"][$index42]["isDynamic"] = $model->notes[$index9]->customer->segments[$index42]->isDynamic;
}
if (null !== $model->notes[$index9]->customer->segments[$index42]->customersCount) {
    $jsonData["notes"][$index9]["customer"]["segments"][$index42]["customersCount"] = $model->notes[$index9]->customer->segments[$index42]->customersCount;
}
if (null !== $model->notes[$index9]->customer->segments[$index42]->active) {
    $jsonData["notes"][$index9]["customer"]["segments"][$index42]["active"] = $model->notes[$index9]->customer->segments[$index42]->active;
}

if (0 === \count($jsonData["notes"][$index9]["customer"]["segments"][$index42])) {
    $jsonData["notes"][$index9]["customer"]["segments"][$index42] = $emptyObject;
}

}

}
if (null !== $model->notes[$index9]->customer->maturationTime) {
    $jsonData["notes"][$index9]["customer"]["maturationTime"] = $model->notes[$index9]->customer->maturationTime;
}
if (null !== $model->notes[$index9]->customer->firstName) {
    $jsonData["notes"][$index9]["customer"]["firstName"] = $model->notes[$index9]->customer->firstName;
}
if (null !== $model->notes[$index9]->customer->lastName) {
    $jsonData["notes"][$index9]["customer"]["lastName"] = $model->notes[$index9]->customer->lastName;
}
if (null !== $model->notes[$index9]->customer->patronymic) {
    $jsonData["notes"][$index9]["customer"]["patronymic"] = $model->notes[$index9]->customer->patronymic;
}
if (null !== $model->notes[$index9]->customer->sex) {
    $jsonData["notes"][$index9]["customer"]["sex"] = $model->notes[$index9]->customer->sex;
}
if (null !== $model->notes[$index9]->customer->presumableSex) {
    $jsonData["notes"][$index9]["customer"]["presumableSex"] = $model->notes[$index9]->customer->presumableSex;
}
if (null !== $model->notes[$index9]->customer->email) {
    $jsonData["notes"][$index9]["customer"]["email"] = $model->notes[$index9]->customer->email;
}
if (null !== $model->notes[$index9]->customer->emailMarketingUnsubscribedAt) {
    $jsonData["notes"][$index9]["customer"]["emailMarketingUnsubscribedAt"] = $model->notes[$index9]->customer->emailMarketingUnsubscribedAt->format('Y-m-d H:i:s');;
}
if (null !== $model->notes[$index9]->customer->phones) {
    $jsonData["notes"][$index9]["customer"]["phones"] = [];
foreach (array_keys($model->notes[$index9]->customer->phones) as $index40) {
    $jsonData["notes"][$index9]["customer"]["phones"][$index40] = [];
if (null !== $model->notes[$index9]->customer->phones[$index40]->number) {
    $jsonData["notes"][$index9]["customer"]["phones"][$index40]["number"] = $model->notes[$index9]->customer->phones[$index40]->number;
}

if (0 === \count($jsonData["notes"][$index9]["customer"]["phones"][$index40])) {
    $jsonData["notes"][$index9]["customer"]["phones"][$index40] = $emptyObject;
}

}

}
if (null !== $model->notes[$index9]->customer->birthday) {
    $jsonData["notes"][$index9]["customer"]["birthday"] = $model->notes[$index9]->customer->birthday->format('Y-m-d H:i:s');;
}
if (null !== $model->notes[$index9]->customer->source) {
    $jsonData["notes"][$index9]["customer"]["source"] = [];
if (null !== $model->notes[$index9]->customer->source->source) {
    $jsonData["notes"][$index9]["customer"]["source"]["source"] = $model->notes[$index9]->customer->source->source;
}
if (null !== $model->notes[$index9]->customer->source->medium) {
    $jsonData["notes"][$index9]["customer"]["source"]["medium"] = $model->notes[$index9]->customer->source->medium;
}
if (null !== $model->notes[$index9]->customer->source->campaign) {
    $jsonData["notes"][$index9]["customer"]["source"]["campaign"] = $model->notes[$index9]->customer->source->campaign;
}
if (null !== $model->notes[$index9]->customer->source->keyword) {
    $jsonData["notes"][$index9]["customer"]["source"]["keyword"] = $model->notes[$index9]->customer->source->keyword;
}
if (null !== $model->notes[$index9]->customer->source->content) {
    $jsonData["notes"][$index9]["customer"]["source"]["content"] = $model->notes[$index9]->customer->source->content;
}

if (0 === \count($jsonData["notes"][$index9]["customer"]["source"])) {
    $jsonData["notes"][$index9]["customer"]["source"] = $emptyObject;
}

}
if (null !== $model->notes[$index9]->customer->photoUrl) {
    $jsonData["notes"][$index9]["customer"]["photoUrl"] = $model->notes[$index9]->customer->photoUrl;
}
if (null !== $model->notes[$index9]->customer->mgCustomerId) {
    $jsonData["notes"][$index9]["customer"]["mgCustomerId"] = $model->notes[$index9]->customer->mgCustomerId;
}
if (null !== $model->notes[$index9]->customer->subscribed) {
    $jsonData["notes"][$index9]["customer"]["subscribed"] = $model->notes[$index9]->customer->subscribed;
}

if (0 === \count($jsonData["notes"][$index9]["customer"])) {
    $jsonData["notes"][$index9]["customer"] = $emptyObject;
}

}
if (null !== $model->notes[$index9]->managerId) {
    $jsonData["notes"][$index9]["managerId"] = $model->notes[$index9]->managerId;
}
if (null !== $model->notes[$index9]->id) {
    $jsonData["notes"][$index9]["id"] = $model->notes[$index9]->id;
}
if (null !== $model->notes[$index9]->text) {
    $jsonData["notes"][$index9]["text"] = $model->notes[$index9]->text;
}
if (null !== $model->notes[$index9]->createdAt) {
    $jsonData["notes"][$index9]["createdAt"] = $model->notes[$index9]->createdAt->format('Y-m-d H:i:s');;
}

if (0 === \count($jsonData["notes"][$index9])) {
    $jsonData["notes"][$index9] = $emptyObject;
}

}

}

if (0 === \count($jsonData)) {
    $jsonData = $emptyObject;
}


    return $jsonData;
}
