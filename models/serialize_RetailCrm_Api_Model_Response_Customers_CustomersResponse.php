<?php

function serialize_RetailCrm_Api_Model_Response_Customers_CustomersResponse(RetailCrm\Api\Model\Response\Customers\CustomersResponse $model, bool $useStdClass = true)
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
if (null !== $model->customers) {
    $jsonData["customers"] = [];
foreach (array_keys($model->customers) as $index13) {
    $jsonData["customers"][$index13] = [];
if (null !== $model->customers[$index13]->type) {
    $jsonData["customers"][$index13]["type"] = $model->customers[$index13]->type;
}
if (null !== $model->customers[$index13]->id) {
    $jsonData["customers"][$index13]["id"] = $model->customers[$index13]->id;
}
if (null !== $model->customers[$index13]->externalId) {
    $jsonData["customers"][$index13]["externalId"] = $model->customers[$index13]->externalId;
}
if (null !== $model->customers[$index13]->isContact) {
    $jsonData["customers"][$index13]["isContact"] = $model->customers[$index13]->isContact;
}
if (null !== $model->customers[$index13]->createdAt) {
    $jsonData["customers"][$index13]["createdAt"] = $model->customers[$index13]->createdAt->format('Y-m-d H:i:s');;
}
if (null !== $model->customers[$index13]->managerId) {
    $jsonData["customers"][$index13]["managerId"] = $model->customers[$index13]->managerId;
}
if (null !== $model->customers[$index13]->vip) {
    $jsonData["customers"][$index13]["vip"] = $model->customers[$index13]->vip;
}
if (null !== $model->customers[$index13]->bad) {
    $jsonData["customers"][$index13]["bad"] = $model->customers[$index13]->bad;
}
if (null !== $model->customers[$index13]->browserId) {
    $jsonData["customers"][$index13]["browserId"] = $model->customers[$index13]->browserId;
}
if (null !== $model->customers[$index13]->site) {
    $jsonData["customers"][$index13]["site"] = $model->customers[$index13]->site;
}
if (null !== $model->customers[$index13]->contragent) {
    $jsonData["customers"][$index13]["contragent"] = [];
if (null !== $model->customers[$index13]->contragent->contragentType) {
    $jsonData["customers"][$index13]["contragent"]["contragentType"] = $model->customers[$index13]->contragent->contragentType;
}
if (null !== $model->customers[$index13]->contragent->legalName) {
    $jsonData["customers"][$index13]["contragent"]["legalName"] = $model->customers[$index13]->contragent->legalName;
}
if (null !== $model->customers[$index13]->contragent->legalAddress) {
    $jsonData["customers"][$index13]["contragent"]["legalAddress"] = $model->customers[$index13]->contragent->legalAddress;
}
if (null !== $model->customers[$index13]->contragent->INN) {
    $jsonData["customers"][$index13]["contragent"]["INN"] = $model->customers[$index13]->contragent->INN;
}
if (null !== $model->customers[$index13]->contragent->OKPO) {
    $jsonData["customers"][$index13]["contragent"]["OKPO"] = $model->customers[$index13]->contragent->OKPO;
}
if (null !== $model->customers[$index13]->contragent->KPP) {
    $jsonData["customers"][$index13]["contragent"]["KPP"] = $model->customers[$index13]->contragent->KPP;
}
if (null !== $model->customers[$index13]->contragent->OGRN) {
    $jsonData["customers"][$index13]["contragent"]["OGRN"] = $model->customers[$index13]->contragent->OGRN;
}
if (null !== $model->customers[$index13]->contragent->OGRNIP) {
    $jsonData["customers"][$index13]["contragent"]["OGRNIP"] = $model->customers[$index13]->contragent->OGRNIP;
}
if (null !== $model->customers[$index13]->contragent->certificateNumber) {
    $jsonData["customers"][$index13]["contragent"]["certificateNumber"] = $model->customers[$index13]->contragent->certificateNumber;
}
if (null !== $model->customers[$index13]->contragent->certificateDate) {
    $jsonData["customers"][$index13]["contragent"]["certificateDate"] = $model->customers[$index13]->contragent->certificateDate->format('Y-m-d H:i:s');;
}
if (null !== $model->customers[$index13]->contragent->BIK) {
    $jsonData["customers"][$index13]["contragent"]["BIK"] = $model->customers[$index13]->contragent->BIK;
}
if (null !== $model->customers[$index13]->contragent->bank) {
    $jsonData["customers"][$index13]["contragent"]["bank"] = $model->customers[$index13]->contragent->bank;
}
if (null !== $model->customers[$index13]->contragent->bankAddress) {
    $jsonData["customers"][$index13]["contragent"]["bankAddress"] = $model->customers[$index13]->contragent->bankAddress;
}
if (null !== $model->customers[$index13]->contragent->corrAccount) {
    $jsonData["customers"][$index13]["contragent"]["corrAccount"] = $model->customers[$index13]->contragent->corrAccount;
}
if (null !== $model->customers[$index13]->contragent->bankAccount) {
    $jsonData["customers"][$index13]["contragent"]["bankAccount"] = $model->customers[$index13]->contragent->bankAccount;
}

if (0 === \count($jsonData["customers"][$index13]["contragent"])) {
    $jsonData["customers"][$index13]["contragent"] = $emptyObject;
}

}
if (null !== $model->customers[$index13]->tags) {
    $jsonData["customers"][$index13]["tags"] = [];
foreach (array_keys($model->customers[$index13]->tags) as $index31) {
    $jsonData["customers"][$index13]["tags"][$index31] = $model->customers[$index13]->tags[$index31]->name;
}

}
if (null !== $model->customers[$index13]->avgMarginSumm) {
    $jsonData["customers"][$index13]["avgMarginSumm"] = $model->customers[$index13]->avgMarginSumm;
}
if (null !== $model->customers[$index13]->marginSumm) {
    $jsonData["customers"][$index13]["marginSumm"] = $model->customers[$index13]->marginSumm;
}
if (null !== $model->customers[$index13]->totalSumm) {
    $jsonData["customers"][$index13]["totalSumm"] = $model->customers[$index13]->totalSumm;
}
if (null !== $model->customers[$index13]->averageSumm) {
    $jsonData["customers"][$index13]["averageSumm"] = $model->customers[$index13]->averageSumm;
}
if (null !== $model->customers[$index13]->ordersCount) {
    $jsonData["customers"][$index13]["ordersCount"] = $model->customers[$index13]->ordersCount;
}
if (null !== $model->customers[$index13]->costSumm) {
    $jsonData["customers"][$index13]["costSumm"] = $model->customers[$index13]->costSumm;
}
if (null !== $model->customers[$index13]->customFields) {
    $jsonData["customers"][$index13]["customFields"] = [];
foreach (array_keys($model->customers[$index13]->customFields) as $index39) {
    $jsonData["customers"][$index13]["customFields"] = $model->customers[$index13]->customFields;
}

}
if (null !== $model->customers[$index13]->personalDiscount) {
    $jsonData["customers"][$index13]["personalDiscount"] = $model->customers[$index13]->personalDiscount;
}
if (null !== $model->customers[$index13]->cumulativeDiscount) {
    $jsonData["customers"][$index13]["cumulativeDiscount"] = $model->customers[$index13]->cumulativeDiscount;
}
if (null !== $model->customers[$index13]->discountCardNumber) {
    $jsonData["customers"][$index13]["discountCardNumber"] = $model->customers[$index13]->discountCardNumber;
}
if (null !== $model->customers[$index13]->firstClientId) {
    $jsonData["customers"][$index13]["firstClientId"] = $model->customers[$index13]->firstClientId;
}
if (null !== $model->customers[$index13]->lastClientId) {
    $jsonData["customers"][$index13]["lastClientId"] = $model->customers[$index13]->lastClientId;
}
if (null !== $model->customers[$index13]->address) {
    $jsonData["customers"][$index13]["address"] = [];
if (null !== $model->customers[$index13]->address->id) {
    $jsonData["customers"][$index13]["address"]["id"] = $model->customers[$index13]->address->id;
}
if (null !== $model->customers[$index13]->address->name) {
    $jsonData["customers"][$index13]["address"]["name"] = $model->customers[$index13]->address->name;
}
if (null !== $model->customers[$index13]->address->isMain) {
    $jsonData["customers"][$index13]["address"]["isMain"] = $model->customers[$index13]->address->isMain;
}
if (null !== $model->customers[$index13]->address->index) {
    $jsonData["customers"][$index13]["address"]["index"] = $model->customers[$index13]->address->index;
}
if (null !== $model->customers[$index13]->address->countryIso) {
    $jsonData["customers"][$index13]["address"]["countryIso"] = $model->customers[$index13]->address->countryIso;
}
if (null !== $model->customers[$index13]->address->region) {
    $jsonData["customers"][$index13]["address"]["region"] = $model->customers[$index13]->address->region;
}
if (null !== $model->customers[$index13]->address->regionId) {
    $jsonData["customers"][$index13]["address"]["regionId"] = $model->customers[$index13]->address->regionId;
}
if (null !== $model->customers[$index13]->address->city) {
    $jsonData["customers"][$index13]["address"]["city"] = $model->customers[$index13]->address->city;
}
if (null !== $model->customers[$index13]->address->cityId) {
    $jsonData["customers"][$index13]["address"]["cityId"] = $model->customers[$index13]->address->cityId;
}
if (null !== $model->customers[$index13]->address->cityType) {
    $jsonData["customers"][$index13]["address"]["cityType"] = $model->customers[$index13]->address->cityType;
}
if (null !== $model->customers[$index13]->address->street) {
    $jsonData["customers"][$index13]["address"]["street"] = $model->customers[$index13]->address->street;
}
if (null !== $model->customers[$index13]->address->streetId) {
    $jsonData["customers"][$index13]["address"]["streetId"] = $model->customers[$index13]->address->streetId;
}
if (null !== $model->customers[$index13]->address->streetType) {
    $jsonData["customers"][$index13]["address"]["streetType"] = $model->customers[$index13]->address->streetType;
}
if (null !== $model->customers[$index13]->address->building) {
    $jsonData["customers"][$index13]["address"]["building"] = $model->customers[$index13]->address->building;
}
if (null !== $model->customers[$index13]->address->flat) {
    $jsonData["customers"][$index13]["address"]["flat"] = $model->customers[$index13]->address->flat;
}
if (null !== $model->customers[$index13]->address->floor) {
    $jsonData["customers"][$index13]["address"]["floor"] = $model->customers[$index13]->address->floor;
}
if (null !== $model->customers[$index13]->address->block) {
    $jsonData["customers"][$index13]["address"]["block"] = $model->customers[$index13]->address->block;
}
if (null !== $model->customers[$index13]->address->house) {
    $jsonData["customers"][$index13]["address"]["house"] = $model->customers[$index13]->address->house;
}
if (null !== $model->customers[$index13]->address->housing) {
    $jsonData["customers"][$index13]["address"]["housing"] = $model->customers[$index13]->address->housing;
}
if (null !== $model->customers[$index13]->address->metro) {
    $jsonData["customers"][$index13]["address"]["metro"] = $model->customers[$index13]->address->metro;
}
if (null !== $model->customers[$index13]->address->notes) {
    $jsonData["customers"][$index13]["address"]["notes"] = $model->customers[$index13]->address->notes;
}
if (null !== $model->customers[$index13]->address->text) {
    $jsonData["customers"][$index13]["address"]["text"] = $model->customers[$index13]->address->text;
}
if (null !== $model->customers[$index13]->address->externalId) {
    $jsonData["customers"][$index13]["address"]["externalId"] = $model->customers[$index13]->address->externalId;
}

if (0 === \count($jsonData["customers"][$index13]["address"])) {
    $jsonData["customers"][$index13]["address"] = $emptyObject;
}

}
if (null !== $model->customers[$index13]->segments) {
    $jsonData["customers"][$index13]["segments"] = [];
foreach (array_keys($model->customers[$index13]->segments) as $index35) {
    $jsonData["customers"][$index13]["segments"][$index35] = [];
if (null !== $model->customers[$index13]->segments[$index35]->id) {
    $jsonData["customers"][$index13]["segments"][$index35]["id"] = $model->customers[$index13]->segments[$index35]->id;
}
if (null !== $model->customers[$index13]->segments[$index35]->code) {
    $jsonData["customers"][$index13]["segments"][$index35]["code"] = $model->customers[$index13]->segments[$index35]->code;
}
if (null !== $model->customers[$index13]->segments[$index35]->name) {
    $jsonData["customers"][$index13]["segments"][$index35]["name"] = $model->customers[$index13]->segments[$index35]->name;
}
if (null !== $model->customers[$index13]->segments[$index35]->createdAt) {
    $jsonData["customers"][$index13]["segments"][$index35]["createdAt"] = $model->customers[$index13]->segments[$index35]->createdAt->format('Y-m-d H:i:s');;
}
if (null !== $model->customers[$index13]->segments[$index35]->isDynamic) {
    $jsonData["customers"][$index13]["segments"][$index35]["isDynamic"] = $model->customers[$index13]->segments[$index35]->isDynamic;
}
if (null !== $model->customers[$index13]->segments[$index35]->customersCount) {
    $jsonData["customers"][$index13]["segments"][$index35]["customersCount"] = $model->customers[$index13]->segments[$index35]->customersCount;
}
if (null !== $model->customers[$index13]->segments[$index35]->active) {
    $jsonData["customers"][$index13]["segments"][$index35]["active"] = $model->customers[$index13]->segments[$index35]->active;
}

if (0 === \count($jsonData["customers"][$index13]["segments"][$index35])) {
    $jsonData["customers"][$index13]["segments"][$index35] = $emptyObject;
}

}

}
if (null !== $model->customers[$index13]->maturationTime) {
    $jsonData["customers"][$index13]["maturationTime"] = $model->customers[$index13]->maturationTime;
}
if (null !== $model->customers[$index13]->firstName) {
    $jsonData["customers"][$index13]["firstName"] = $model->customers[$index13]->firstName;
}
if (null !== $model->customers[$index13]->lastName) {
    $jsonData["customers"][$index13]["lastName"] = $model->customers[$index13]->lastName;
}
if (null !== $model->customers[$index13]->patronymic) {
    $jsonData["customers"][$index13]["patronymic"] = $model->customers[$index13]->patronymic;
}
if (null !== $model->customers[$index13]->sex) {
    $jsonData["customers"][$index13]["sex"] = $model->customers[$index13]->sex;
}
if (null !== $model->customers[$index13]->presumableSex) {
    $jsonData["customers"][$index13]["presumableSex"] = $model->customers[$index13]->presumableSex;
}
if (null !== $model->customers[$index13]->email) {
    $jsonData["customers"][$index13]["email"] = $model->customers[$index13]->email;
}
if (null !== $model->customers[$index13]->emailMarketingUnsubscribedAt) {
    $jsonData["customers"][$index13]["emailMarketingUnsubscribedAt"] = $model->customers[$index13]->emailMarketingUnsubscribedAt->format('Y-m-d H:i:s');;
}
if (null !== $model->customers[$index13]->phones) {
    $jsonData["customers"][$index13]["phones"] = [];
foreach (array_keys($model->customers[$index13]->phones) as $index33) {
    $jsonData["customers"][$index13]["phones"][$index33] = [];
if (null !== $model->customers[$index13]->phones[$index33]->number) {
    $jsonData["customers"][$index13]["phones"][$index33]["number"] = $model->customers[$index13]->phones[$index33]->number;
}

if (0 === \count($jsonData["customers"][$index13]["phones"][$index33])) {
    $jsonData["customers"][$index13]["phones"][$index33] = $emptyObject;
}

}

}
if (null !== $model->customers[$index13]->birthday) {
    $jsonData["customers"][$index13]["birthday"] = $model->customers[$index13]->birthday->format('Y-m-d H:i:s');;
}
if (null !== $model->customers[$index13]->source) {
    $jsonData["customers"][$index13]["source"] = [];
if (null !== $model->customers[$index13]->source->source) {
    $jsonData["customers"][$index13]["source"]["source"] = $model->customers[$index13]->source->source;
}
if (null !== $model->customers[$index13]->source->medium) {
    $jsonData["customers"][$index13]["source"]["medium"] = $model->customers[$index13]->source->medium;
}
if (null !== $model->customers[$index13]->source->campaign) {
    $jsonData["customers"][$index13]["source"]["campaign"] = $model->customers[$index13]->source->campaign;
}
if (null !== $model->customers[$index13]->source->keyword) {
    $jsonData["customers"][$index13]["source"]["keyword"] = $model->customers[$index13]->source->keyword;
}
if (null !== $model->customers[$index13]->source->content) {
    $jsonData["customers"][$index13]["source"]["content"] = $model->customers[$index13]->source->content;
}

if (0 === \count($jsonData["customers"][$index13]["source"])) {
    $jsonData["customers"][$index13]["source"] = $emptyObject;
}

}
if (null !== $model->customers[$index13]->photoUrl) {
    $jsonData["customers"][$index13]["photoUrl"] = $model->customers[$index13]->photoUrl;
}
if (null !== $model->customers[$index13]->mgCustomerId) {
    $jsonData["customers"][$index13]["mgCustomerId"] = $model->customers[$index13]->mgCustomerId;
}
if (null !== $model->customers[$index13]->subscribed) {
    $jsonData["customers"][$index13]["subscribed"] = $model->customers[$index13]->subscribed;
}

if (0 === \count($jsonData["customers"][$index13])) {
    $jsonData["customers"][$index13] = $emptyObject;
}

}

}

if (0 === \count($jsonData)) {
    $jsonData = $emptyObject;
}


    return $jsonData;
}
