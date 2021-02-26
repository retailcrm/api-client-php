<?php

function serialize_RetailCrm_Api_Model_Callback_Entity_Delivery_RequestProperty_RequestSave(RetailCrm\Api\Model\Callback\Entity\Delivery\RequestProperty\RequestSave $model, bool $useStdClass = true)
{
    $emptyHashmap = $useStdClass ? new \stdClass() : [];
    $emptyObject = $useStdClass ? new \stdClass() : [];

    $jsonData = [];
if (null !== $model->deliveryId) {
    $jsonData["deliveryId"] = $model->deliveryId;
}
if (null !== $model->order) {
    $jsonData["order"] = $model->order;
}
if (null !== $model->orderNumber) {
    $jsonData["orderNumber"] = $model->orderNumber;
}
if (null !== $model->site) {
    $jsonData["site"] = $model->site;
}
if (null !== $model->siteName) {
    $jsonData["siteName"] = $model->siteName;
}
if (null !== $model->store) {
    $jsonData["store"] = [];
if (null !== $model->store->code) {
    $jsonData["store"]["code"] = $model->store->code;
}
if (null !== $model->store->name) {
    $jsonData["store"]["name"] = $model->store->name;
}

if (0 === \count($jsonData["store"])) {
    $jsonData["store"] = $emptyObject;
}

}
if (null !== $model->storeworkTime) {
    $jsonData["storeworkTime"] = [];
if (null !== $model->storeworkTime->mo) {
    $jsonData["storeworkTime"]["mo"] = [];
foreach (array_keys($model->storeworkTime->mo) as $index23) {
    $jsonData["storeworkTime"]["mo"][$index23] = [];
if (null !== $model->storeworkTime->mo[$index23]->startTime) {
    $jsonData["storeworkTime"]["mo"][$index23]["startTime"] = $model->storeworkTime->mo[$index23]->startTime;
}
if (null !== $model->storeworkTime->mo[$index23]->endTime) {
    $jsonData["storeworkTime"]["mo"][$index23]["endTime"] = $model->storeworkTime->mo[$index23]->endTime;
}
if (null !== $model->storeworkTime->mo[$index23]->lunchStartTime) {
    $jsonData["storeworkTime"]["mo"][$index23]["lunchStartTime"] = $model->storeworkTime->mo[$index23]->lunchStartTime;
}
if (null !== $model->storeworkTime->mo[$index23]->lunchEndTime) {
    $jsonData["storeworkTime"]["mo"][$index23]["lunchEndTime"] = $model->storeworkTime->mo[$index23]->lunchEndTime;
}

if (0 === \count($jsonData["storeworkTime"]["mo"][$index23])) {
    $jsonData["storeworkTime"]["mo"][$index23] = $emptyObject;
}

}

}
if (null !== $model->storeworkTime->tu) {
    $jsonData["storeworkTime"]["tu"] = [];
foreach (array_keys($model->storeworkTime->tu) as $index23) {
    $jsonData["storeworkTime"]["tu"][$index23] = [];
if (null !== $model->storeworkTime->tu[$index23]->startTime) {
    $jsonData["storeworkTime"]["tu"][$index23]["startTime"] = $model->storeworkTime->tu[$index23]->startTime;
}
if (null !== $model->storeworkTime->tu[$index23]->endTime) {
    $jsonData["storeworkTime"]["tu"][$index23]["endTime"] = $model->storeworkTime->tu[$index23]->endTime;
}
if (null !== $model->storeworkTime->tu[$index23]->lunchStartTime) {
    $jsonData["storeworkTime"]["tu"][$index23]["lunchStartTime"] = $model->storeworkTime->tu[$index23]->lunchStartTime;
}
if (null !== $model->storeworkTime->tu[$index23]->lunchEndTime) {
    $jsonData["storeworkTime"]["tu"][$index23]["lunchEndTime"] = $model->storeworkTime->tu[$index23]->lunchEndTime;
}

if (0 === \count($jsonData["storeworkTime"]["tu"][$index23])) {
    $jsonData["storeworkTime"]["tu"][$index23] = $emptyObject;
}

}

}
if (null !== $model->storeworkTime->we) {
    $jsonData["storeworkTime"]["we"] = [];
foreach (array_keys($model->storeworkTime->we) as $index23) {
    $jsonData["storeworkTime"]["we"][$index23] = [];
if (null !== $model->storeworkTime->we[$index23]->startTime) {
    $jsonData["storeworkTime"]["we"][$index23]["startTime"] = $model->storeworkTime->we[$index23]->startTime;
}
if (null !== $model->storeworkTime->we[$index23]->endTime) {
    $jsonData["storeworkTime"]["we"][$index23]["endTime"] = $model->storeworkTime->we[$index23]->endTime;
}
if (null !== $model->storeworkTime->we[$index23]->lunchStartTime) {
    $jsonData["storeworkTime"]["we"][$index23]["lunchStartTime"] = $model->storeworkTime->we[$index23]->lunchStartTime;
}
if (null !== $model->storeworkTime->we[$index23]->lunchEndTime) {
    $jsonData["storeworkTime"]["we"][$index23]["lunchEndTime"] = $model->storeworkTime->we[$index23]->lunchEndTime;
}

if (0 === \count($jsonData["storeworkTime"]["we"][$index23])) {
    $jsonData["storeworkTime"]["we"][$index23] = $emptyObject;
}

}

}
if (null !== $model->storeworkTime->th) {
    $jsonData["storeworkTime"]["th"] = [];
foreach (array_keys($model->storeworkTime->th) as $index23) {
    $jsonData["storeworkTime"]["th"][$index23] = [];
if (null !== $model->storeworkTime->th[$index23]->startTime) {
    $jsonData["storeworkTime"]["th"][$index23]["startTime"] = $model->storeworkTime->th[$index23]->startTime;
}
if (null !== $model->storeworkTime->th[$index23]->endTime) {
    $jsonData["storeworkTime"]["th"][$index23]["endTime"] = $model->storeworkTime->th[$index23]->endTime;
}
if (null !== $model->storeworkTime->th[$index23]->lunchStartTime) {
    $jsonData["storeworkTime"]["th"][$index23]["lunchStartTime"] = $model->storeworkTime->th[$index23]->lunchStartTime;
}
if (null !== $model->storeworkTime->th[$index23]->lunchEndTime) {
    $jsonData["storeworkTime"]["th"][$index23]["lunchEndTime"] = $model->storeworkTime->th[$index23]->lunchEndTime;
}

if (0 === \count($jsonData["storeworkTime"]["th"][$index23])) {
    $jsonData["storeworkTime"]["th"][$index23] = $emptyObject;
}

}

}
if (null !== $model->storeworkTime->fr) {
    $jsonData["storeworkTime"]["fr"] = [];
foreach (array_keys($model->storeworkTime->fr) as $index23) {
    $jsonData["storeworkTime"]["fr"][$index23] = [];
if (null !== $model->storeworkTime->fr[$index23]->startTime) {
    $jsonData["storeworkTime"]["fr"][$index23]["startTime"] = $model->storeworkTime->fr[$index23]->startTime;
}
if (null !== $model->storeworkTime->fr[$index23]->endTime) {
    $jsonData["storeworkTime"]["fr"][$index23]["endTime"] = $model->storeworkTime->fr[$index23]->endTime;
}
if (null !== $model->storeworkTime->fr[$index23]->lunchStartTime) {
    $jsonData["storeworkTime"]["fr"][$index23]["lunchStartTime"] = $model->storeworkTime->fr[$index23]->lunchStartTime;
}
if (null !== $model->storeworkTime->fr[$index23]->lunchEndTime) {
    $jsonData["storeworkTime"]["fr"][$index23]["lunchEndTime"] = $model->storeworkTime->fr[$index23]->lunchEndTime;
}

if (0 === \count($jsonData["storeworkTime"]["fr"][$index23])) {
    $jsonData["storeworkTime"]["fr"][$index23] = $emptyObject;
}

}

}
if (null !== $model->storeworkTime->sa) {
    $jsonData["storeworkTime"]["sa"] = [];
foreach (array_keys($model->storeworkTime->sa) as $index23) {
    $jsonData["storeworkTime"]["sa"][$index23] = [];
if (null !== $model->storeworkTime->sa[$index23]->startTime) {
    $jsonData["storeworkTime"]["sa"][$index23]["startTime"] = $model->storeworkTime->sa[$index23]->startTime;
}
if (null !== $model->storeworkTime->sa[$index23]->endTime) {
    $jsonData["storeworkTime"]["sa"][$index23]["endTime"] = $model->storeworkTime->sa[$index23]->endTime;
}
if (null !== $model->storeworkTime->sa[$index23]->lunchStartTime) {
    $jsonData["storeworkTime"]["sa"][$index23]["lunchStartTime"] = $model->storeworkTime->sa[$index23]->lunchStartTime;
}
if (null !== $model->storeworkTime->sa[$index23]->lunchEndTime) {
    $jsonData["storeworkTime"]["sa"][$index23]["lunchEndTime"] = $model->storeworkTime->sa[$index23]->lunchEndTime;
}

if (0 === \count($jsonData["storeworkTime"]["sa"][$index23])) {
    $jsonData["storeworkTime"]["sa"][$index23] = $emptyObject;
}

}

}
if (null !== $model->storeworkTime->su) {
    $jsonData["storeworkTime"]["su"] = [];
foreach (array_keys($model->storeworkTime->su) as $index23) {
    $jsonData["storeworkTime"]["su"][$index23] = [];
if (null !== $model->storeworkTime->su[$index23]->startTime) {
    $jsonData["storeworkTime"]["su"][$index23]["startTime"] = $model->storeworkTime->su[$index23]->startTime;
}
if (null !== $model->storeworkTime->su[$index23]->endTime) {
    $jsonData["storeworkTime"]["su"][$index23]["endTime"] = $model->storeworkTime->su[$index23]->endTime;
}
if (null !== $model->storeworkTime->su[$index23]->lunchStartTime) {
    $jsonData["storeworkTime"]["su"][$index23]["lunchStartTime"] = $model->storeworkTime->su[$index23]->lunchStartTime;
}
if (null !== $model->storeworkTime->su[$index23]->lunchEndTime) {
    $jsonData["storeworkTime"]["su"][$index23]["lunchEndTime"] = $model->storeworkTime->su[$index23]->lunchEndTime;
}

if (0 === \count($jsonData["storeworkTime"]["su"][$index23])) {
    $jsonData["storeworkTime"]["su"][$index23] = $emptyObject;
}

}

}

if (0 === \count($jsonData["storeworkTime"])) {
    $jsonData["storeworkTime"] = $emptyObject;
}

}
if (null !== $model->legalEntity) {
    $jsonData["legalEntity"] = $model->legalEntity;
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

}
if (null !== $model->manager) {
    $jsonData["manager"] = [];
if (null !== $model->manager->id) {
    $jsonData["manager"]["id"] = $model->manager->id;
}
if (null !== $model->manager->lastName) {
    $jsonData["manager"]["lastName"] = $model->manager->lastName;
}
if (null !== $model->manager->firstName) {
    $jsonData["manager"]["firstName"] = $model->manager->firstName;
}
if (null !== $model->manager->patronymic) {
    $jsonData["manager"]["patronymic"] = $model->manager->patronymic;
}
if (null !== $model->manager->phone) {
    $jsonData["manager"]["phone"] = $model->manager->phone;
}
if (null !== $model->manager->email) {
    $jsonData["manager"]["email"] = $model->manager->email;
}

if (0 === \count($jsonData["manager"])) {
    $jsonData["manager"] = $emptyObject;
}

}
if (null !== $model->packages) {
    $jsonData["packages"] = [];
foreach (array_keys($model->packages) as $index12) {
    $jsonData["packages"][$index12] = [];
if (null !== $model->packages[$index12]->weight) {
    $jsonData["packages"][$index12]["weight"] = $model->packages[$index12]->weight;
}
if (null !== $model->packages[$index12]->packageId) {
    $jsonData["packages"][$index12]["packageId"] = $model->packages[$index12]->packageId;
}
if (null !== $model->packages[$index12]->width) {
    $jsonData["packages"][$index12]["width"] = $model->packages[$index12]->width;
}
if (null !== $model->packages[$index12]->length) {
    $jsonData["packages"][$index12]["length"] = $model->packages[$index12]->length;
}
if (null !== $model->packages[$index12]->height) {
    $jsonData["packages"][$index12]["height"] = $model->packages[$index12]->height;
}
if (null !== $model->packages[$index12]->items) {
    $jsonData["packages"][$index12]["items"] = [];
foreach (array_keys($model->packages[$index12]->items) as $index31) {
    $jsonData["packages"][$index12]["items"][$index31] = [];
if (null !== $model->packages[$index12]->items[$index31]->offerId) {
    $jsonData["packages"][$index12]["items"][$index31]["offerId"] = $model->packages[$index12]->items[$index31]->offerId;
}
if (null !== $model->packages[$index12]->items[$index31]->externalId) {
    $jsonData["packages"][$index12]["items"][$index31]["externalId"] = $model->packages[$index12]->items[$index31]->externalId;
}
if (null !== $model->packages[$index12]->items[$index31]->xmlId) {
    $jsonData["packages"][$index12]["items"][$index31]["xmlId"] = $model->packages[$index12]->items[$index31]->xmlId;
}
if (null !== $model->packages[$index12]->items[$index31]->name) {
    $jsonData["packages"][$index12]["items"][$index31]["name"] = $model->packages[$index12]->items[$index31]->name;
}
if (null !== $model->packages[$index12]->items[$index31]->declaredValue) {
    $jsonData["packages"][$index12]["items"][$index31]["declaredValue"] = $model->packages[$index12]->items[$index31]->declaredValue;
}
if (null !== $model->packages[$index12]->items[$index31]->cod) {
    $jsonData["packages"][$index12]["items"][$index31]["cod"] = $model->packages[$index12]->items[$index31]->cod;
}
if (null !== $model->packages[$index12]->items[$index31]->vatRate) {
    $jsonData["packages"][$index12]["items"][$index31]["vatRate"] = $model->packages[$index12]->items[$index31]->vatRate;
}
if (null !== $model->packages[$index12]->items[$index31]->quantity) {
    $jsonData["packages"][$index12]["items"][$index31]["quantity"] = $model->packages[$index12]->items[$index31]->quantity;
}
if (null !== $model->packages[$index12]->items[$index31]->unit) {
    $jsonData["packages"][$index12]["items"][$index31]["unit"] = [];
if (null !== $model->packages[$index12]->items[$index31]->unit->code) {
    $jsonData["packages"][$index12]["items"][$index31]["unit"]["code"] = $model->packages[$index12]->items[$index31]->unit->code;
}
if (null !== $model->packages[$index12]->items[$index31]->unit->name) {
    $jsonData["packages"][$index12]["items"][$index31]["unit"]["name"] = $model->packages[$index12]->items[$index31]->unit->name;
}
if (null !== $model->packages[$index12]->items[$index31]->unit->sym) {
    $jsonData["packages"][$index12]["items"][$index31]["unit"]["sym"] = $model->packages[$index12]->items[$index31]->unit->sym;
}

if (0 === \count($jsonData["packages"][$index12]["items"][$index31]["unit"])) {
    $jsonData["packages"][$index12]["items"][$index31]["unit"] = $emptyObject;
}

}
if (null !== $model->packages[$index12]->items[$index31]->cost) {
    $jsonData["packages"][$index12]["items"][$index31]["cost"] = $model->packages[$index12]->items[$index31]->cost;
}
if (null !== $model->packages[$index12]->items[$index31]->markingCodes) {
    $jsonData["packages"][$index12]["items"][$index31]["markingCodes"] = $model->packages[$index12]->items[$index31]->markingCodes;
}
if (null !== $model->packages[$index12]->items[$index31]->properties) {
    $jsonData["packages"][$index12]["items"][$index31]["properties"] = [];
foreach (array_keys($model->packages[$index12]->items[$index31]->properties) as $index55) {
    $jsonData["packages"][$index12]["items"][$index31]["properties"] = $model->packages[$index12]->items[$index31]->properties;
}

}

if (0 === \count($jsonData["packages"][$index12]["items"][$index31])) {
    $jsonData["packages"][$index12]["items"][$index31] = $emptyObject;
}

}

}

if (0 === \count($jsonData["packages"][$index12])) {
    $jsonData["packages"][$index12] = $emptyObject;
}

}

}
if (null !== $model->delivery) {
    $jsonData["delivery"] = [];
if (null !== $model->delivery->shipmentAddress) {
    $jsonData["delivery"]["shipmentAddress"] = [];
if (null !== $model->delivery->shipmentAddress->index) {
    $jsonData["delivery"]["shipmentAddress"]["index"] = $model->delivery->shipmentAddress->index;
}
if (null !== $model->delivery->shipmentAddress->countryIso) {
    $jsonData["delivery"]["shipmentAddress"]["countryIso"] = $model->delivery->shipmentAddress->countryIso;
}
if (null !== $model->delivery->shipmentAddress->region) {
    $jsonData["delivery"]["shipmentAddress"]["region"] = $model->delivery->shipmentAddress->region;
}
if (null !== $model->delivery->shipmentAddress->regionId) {
    $jsonData["delivery"]["shipmentAddress"]["regionId"] = $model->delivery->shipmentAddress->regionId;
}
if (null !== $model->delivery->shipmentAddress->city) {
    $jsonData["delivery"]["shipmentAddress"]["city"] = $model->delivery->shipmentAddress->city;
}
if (null !== $model->delivery->shipmentAddress->cityId) {
    $jsonData["delivery"]["shipmentAddress"]["cityId"] = $model->delivery->shipmentAddress->cityId;
}
if (null !== $model->delivery->shipmentAddress->cityType) {
    $jsonData["delivery"]["shipmentAddress"]["cityType"] = $model->delivery->shipmentAddress->cityType;
}
if (null !== $model->delivery->shipmentAddress->street) {
    $jsonData["delivery"]["shipmentAddress"]["street"] = $model->delivery->shipmentAddress->street;
}
if (null !== $model->delivery->shipmentAddress->streetId) {
    $jsonData["delivery"]["shipmentAddress"]["streetId"] = $model->delivery->shipmentAddress->streetId;
}
if (null !== $model->delivery->shipmentAddress->streetType) {
    $jsonData["delivery"]["shipmentAddress"]["streetType"] = $model->delivery->shipmentAddress->streetType;
}
if (null !== $model->delivery->shipmentAddress->building) {
    $jsonData["delivery"]["shipmentAddress"]["building"] = $model->delivery->shipmentAddress->building;
}
if (null !== $model->delivery->shipmentAddress->flat) {
    $jsonData["delivery"]["shipmentAddress"]["flat"] = $model->delivery->shipmentAddress->flat;
}
if (null !== $model->delivery->shipmentAddress->floor) {
    $jsonData["delivery"]["shipmentAddress"]["floor"] = $model->delivery->shipmentAddress->floor;
}
if (null !== $model->delivery->shipmentAddress->block) {
    $jsonData["delivery"]["shipmentAddress"]["block"] = $model->delivery->shipmentAddress->block;
}
if (null !== $model->delivery->shipmentAddress->house) {
    $jsonData["delivery"]["shipmentAddress"]["house"] = $model->delivery->shipmentAddress->house;
}
if (null !== $model->delivery->shipmentAddress->housing) {
    $jsonData["delivery"]["shipmentAddress"]["housing"] = $model->delivery->shipmentAddress->housing;
}
if (null !== $model->delivery->shipmentAddress->metro) {
    $jsonData["delivery"]["shipmentAddress"]["metro"] = $model->delivery->shipmentAddress->metro;
}
if (null !== $model->delivery->shipmentAddress->notes) {
    $jsonData["delivery"]["shipmentAddress"]["notes"] = $model->delivery->shipmentAddress->notes;
}
if (null !== $model->delivery->shipmentAddress->text) {
    $jsonData["delivery"]["shipmentAddress"]["text"] = $model->delivery->shipmentAddress->text;
}
if (null !== $model->delivery->shipmentAddress->terminal) {
    $jsonData["delivery"]["shipmentAddress"]["terminal"] = $model->delivery->shipmentAddress->terminal;
}
if (null !== $model->delivery->shipmentAddress->terminalData) {
    $jsonData["delivery"]["shipmentAddress"]["terminalData"] = [];
if (null !== $model->delivery->shipmentAddress->terminalData->code) {
    $jsonData["delivery"]["shipmentAddress"]["terminalData"]["code"] = $model->delivery->shipmentAddress->terminalData->code;
}
if (null !== $model->delivery->shipmentAddress->terminalData->cost) {
    $jsonData["delivery"]["shipmentAddress"]["terminalData"]["cost"] = $model->delivery->shipmentAddress->terminalData->cost;
}
if (null !== $model->delivery->shipmentAddress->terminalData->name) {
    $jsonData["delivery"]["shipmentAddress"]["terminalData"]["name"] = $model->delivery->shipmentAddress->terminalData->name;
}
if (null !== $model->delivery->shipmentAddress->terminalData->description) {
    $jsonData["delivery"]["shipmentAddress"]["terminalData"]["description"] = $model->delivery->shipmentAddress->terminalData->description;
}
if (null !== $model->delivery->shipmentAddress->terminalData->address) {
    $jsonData["delivery"]["shipmentAddress"]["terminalData"]["address"] = $model->delivery->shipmentAddress->terminalData->address;
}
if (null !== $model->delivery->shipmentAddress->terminalData->schedule) {
    $jsonData["delivery"]["shipmentAddress"]["terminalData"]["schedule"] = $model->delivery->shipmentAddress->terminalData->schedule;
}
if (null !== $model->delivery->shipmentAddress->terminalData->phone) {
    $jsonData["delivery"]["shipmentAddress"]["terminalData"]["phone"] = $model->delivery->shipmentAddress->terminalData->phone;
}
if (null !== $model->delivery->shipmentAddress->terminalData->extraData) {
    $jsonData["delivery"]["shipmentAddress"]["terminalData"]["extraData"] = [];
foreach (array_keys($model->delivery->shipmentAddress->terminalData->extraData) as $index60) {
    $jsonData["delivery"]["shipmentAddress"]["terminalData"]["extraData"] = $model->delivery->shipmentAddress->terminalData->extraData;
}

}
if (null !== $model->delivery->shipmentAddress->terminalData->coordinates) {
    $jsonData["delivery"]["shipmentAddress"]["terminalData"]["coordinates"] = [];
if (null !== $model->delivery->shipmentAddress->terminalData->coordinates->latitude) {
    $jsonData["delivery"]["shipmentAddress"]["terminalData"]["coordinates"]["latitude"] = $model->delivery->shipmentAddress->terminalData->coordinates->latitude;
}
if (null !== $model->delivery->shipmentAddress->terminalData->coordinates->longitude) {
    $jsonData["delivery"]["shipmentAddress"]["terminalData"]["coordinates"]["longitude"] = $model->delivery->shipmentAddress->terminalData->coordinates->longitude;
}

if (0 === \count($jsonData["delivery"]["shipmentAddress"]["terminalData"]["coordinates"])) {
    $jsonData["delivery"]["shipmentAddress"]["terminalData"]["coordinates"] = $emptyObject;
}

}

if (0 === \count($jsonData["delivery"]["shipmentAddress"]["terminalData"])) {
    $jsonData["delivery"]["shipmentAddress"]["terminalData"] = $emptyObject;
}

}

if (0 === \count($jsonData["delivery"]["shipmentAddress"])) {
    $jsonData["delivery"]["shipmentAddress"] = $emptyObject;
}

}
if (null !== $model->delivery->deliveryAddress) {
    $jsonData["delivery"]["deliveryAddress"] = [];
if (null !== $model->delivery->deliveryAddress->index) {
    $jsonData["delivery"]["deliveryAddress"]["index"] = $model->delivery->deliveryAddress->index;
}
if (null !== $model->delivery->deliveryAddress->countryIso) {
    $jsonData["delivery"]["deliveryAddress"]["countryIso"] = $model->delivery->deliveryAddress->countryIso;
}
if (null !== $model->delivery->deliveryAddress->region) {
    $jsonData["delivery"]["deliveryAddress"]["region"] = $model->delivery->deliveryAddress->region;
}
if (null !== $model->delivery->deliveryAddress->regionId) {
    $jsonData["delivery"]["deliveryAddress"]["regionId"] = $model->delivery->deliveryAddress->regionId;
}
if (null !== $model->delivery->deliveryAddress->city) {
    $jsonData["delivery"]["deliveryAddress"]["city"] = $model->delivery->deliveryAddress->city;
}
if (null !== $model->delivery->deliveryAddress->cityId) {
    $jsonData["delivery"]["deliveryAddress"]["cityId"] = $model->delivery->deliveryAddress->cityId;
}
if (null !== $model->delivery->deliveryAddress->cityType) {
    $jsonData["delivery"]["deliveryAddress"]["cityType"] = $model->delivery->deliveryAddress->cityType;
}
if (null !== $model->delivery->deliveryAddress->street) {
    $jsonData["delivery"]["deliveryAddress"]["street"] = $model->delivery->deliveryAddress->street;
}
if (null !== $model->delivery->deliveryAddress->streetId) {
    $jsonData["delivery"]["deliveryAddress"]["streetId"] = $model->delivery->deliveryAddress->streetId;
}
if (null !== $model->delivery->deliveryAddress->streetType) {
    $jsonData["delivery"]["deliveryAddress"]["streetType"] = $model->delivery->deliveryAddress->streetType;
}
if (null !== $model->delivery->deliveryAddress->building) {
    $jsonData["delivery"]["deliveryAddress"]["building"] = $model->delivery->deliveryAddress->building;
}
if (null !== $model->delivery->deliveryAddress->flat) {
    $jsonData["delivery"]["deliveryAddress"]["flat"] = $model->delivery->deliveryAddress->flat;
}
if (null !== $model->delivery->deliveryAddress->floor) {
    $jsonData["delivery"]["deliveryAddress"]["floor"] = $model->delivery->deliveryAddress->floor;
}
if (null !== $model->delivery->deliveryAddress->block) {
    $jsonData["delivery"]["deliveryAddress"]["block"] = $model->delivery->deliveryAddress->block;
}
if (null !== $model->delivery->deliveryAddress->house) {
    $jsonData["delivery"]["deliveryAddress"]["house"] = $model->delivery->deliveryAddress->house;
}
if (null !== $model->delivery->deliveryAddress->housing) {
    $jsonData["delivery"]["deliveryAddress"]["housing"] = $model->delivery->deliveryAddress->housing;
}
if (null !== $model->delivery->deliveryAddress->metro) {
    $jsonData["delivery"]["deliveryAddress"]["metro"] = $model->delivery->deliveryAddress->metro;
}
if (null !== $model->delivery->deliveryAddress->notes) {
    $jsonData["delivery"]["deliveryAddress"]["notes"] = $model->delivery->deliveryAddress->notes;
}
if (null !== $model->delivery->deliveryAddress->text) {
    $jsonData["delivery"]["deliveryAddress"]["text"] = $model->delivery->deliveryAddress->text;
}
if (null !== $model->delivery->deliveryAddress->terminal) {
    $jsonData["delivery"]["deliveryAddress"]["terminal"] = $model->delivery->deliveryAddress->terminal;
}
if (null !== $model->delivery->deliveryAddress->terminalData) {
    $jsonData["delivery"]["deliveryAddress"]["terminalData"] = [];
if (null !== $model->delivery->deliveryAddress->terminalData->code) {
    $jsonData["delivery"]["deliveryAddress"]["terminalData"]["code"] = $model->delivery->deliveryAddress->terminalData->code;
}
if (null !== $model->delivery->deliveryAddress->terminalData->cost) {
    $jsonData["delivery"]["deliveryAddress"]["terminalData"]["cost"] = $model->delivery->deliveryAddress->terminalData->cost;
}
if (null !== $model->delivery->deliveryAddress->terminalData->name) {
    $jsonData["delivery"]["deliveryAddress"]["terminalData"]["name"] = $model->delivery->deliveryAddress->terminalData->name;
}
if (null !== $model->delivery->deliveryAddress->terminalData->description) {
    $jsonData["delivery"]["deliveryAddress"]["terminalData"]["description"] = $model->delivery->deliveryAddress->terminalData->description;
}
if (null !== $model->delivery->deliveryAddress->terminalData->address) {
    $jsonData["delivery"]["deliveryAddress"]["terminalData"]["address"] = $model->delivery->deliveryAddress->terminalData->address;
}
if (null !== $model->delivery->deliveryAddress->terminalData->schedule) {
    $jsonData["delivery"]["deliveryAddress"]["terminalData"]["schedule"] = $model->delivery->deliveryAddress->terminalData->schedule;
}
if (null !== $model->delivery->deliveryAddress->terminalData->phone) {
    $jsonData["delivery"]["deliveryAddress"]["terminalData"]["phone"] = $model->delivery->deliveryAddress->terminalData->phone;
}
if (null !== $model->delivery->deliveryAddress->terminalData->extraData) {
    $jsonData["delivery"]["deliveryAddress"]["terminalData"]["extraData"] = [];
foreach (array_keys($model->delivery->deliveryAddress->terminalData->extraData) as $index60) {
    $jsonData["delivery"]["deliveryAddress"]["terminalData"]["extraData"] = $model->delivery->deliveryAddress->terminalData->extraData;
}

}
if (null !== $model->delivery->deliveryAddress->terminalData->coordinates) {
    $jsonData["delivery"]["deliveryAddress"]["terminalData"]["coordinates"] = [];
if (null !== $model->delivery->deliveryAddress->terminalData->coordinates->latitude) {
    $jsonData["delivery"]["deliveryAddress"]["terminalData"]["coordinates"]["latitude"] = $model->delivery->deliveryAddress->terminalData->coordinates->latitude;
}
if (null !== $model->delivery->deliveryAddress->terminalData->coordinates->longitude) {
    $jsonData["delivery"]["deliveryAddress"]["terminalData"]["coordinates"]["longitude"] = $model->delivery->deliveryAddress->terminalData->coordinates->longitude;
}

if (0 === \count($jsonData["delivery"]["deliveryAddress"]["terminalData"]["coordinates"])) {
    $jsonData["delivery"]["deliveryAddress"]["terminalData"]["coordinates"] = $emptyObject;
}

}

if (0 === \count($jsonData["delivery"]["deliveryAddress"]["terminalData"])) {
    $jsonData["delivery"]["deliveryAddress"]["terminalData"] = $emptyObject;
}

}

if (0 === \count($jsonData["delivery"]["deliveryAddress"])) {
    $jsonData["delivery"]["deliveryAddress"] = $emptyObject;
}

}
if (null !== $model->delivery->codPaymentType) {
    $jsonData["delivery"]["codPaymentType"] = [];
if (null !== $model->delivery->codPaymentType->code) {
    $jsonData["delivery"]["codPaymentType"]["code"] = $model->delivery->codPaymentType->code;
}
if (null !== $model->delivery->codPaymentType->name) {
    $jsonData["delivery"]["codPaymentType"]["name"] = $model->delivery->codPaymentType->name;
}

if (0 === \count($jsonData["delivery"]["codPaymentType"])) {
    $jsonData["delivery"]["codPaymentType"] = $emptyObject;
}

}
if (null !== $model->delivery->withCod) {
    $jsonData["delivery"]["withCod"] = $model->delivery->withCod;
}
if (null !== $model->delivery->cod) {
    $jsonData["delivery"]["cod"] = $model->delivery->cod;
}
if (null !== $model->delivery->cost) {
    $jsonData["delivery"]["cost"] = $model->delivery->cost;
}
if (null !== $model->delivery->vatRate) {
    $jsonData["delivery"]["vatRate"] = $model->delivery->vatRate;
}
if (null !== $model->delivery->tariff) {
    $jsonData["delivery"]["tariff"] = $model->delivery->tariff;
}
if (null !== $model->delivery->payerType) {
    $jsonData["delivery"]["payerType"] = $model->delivery->payerType;
}
if (null !== $model->delivery->shipmentDate) {
    $jsonData["delivery"]["shipmentDate"] = $model->delivery->shipmentDate->format('Y-m-d H:i:s');;
}
if (null !== $model->delivery->deliveryDate) {
    $jsonData["delivery"]["deliveryDate"] = $model->delivery->deliveryDate->format('Y-m-d H:i:s');;
}
if (null !== $model->delivery->deliveryTime) {
    $jsonData["delivery"]["deliveryTime"] = [];
if (null !== $model->delivery->deliveryTime->from) {
    $jsonData["delivery"]["deliveryTime"]["from"] = $model->delivery->deliveryTime->from->format('H:i');;
}
if (null !== $model->delivery->deliveryTime->to) {
    $jsonData["delivery"]["deliveryTime"]["to"] = $model->delivery->deliveryTime->to->format('H:i');;
}
if (null !== $model->delivery->deliveryTime->custom) {
    $jsonData["delivery"]["deliveryTime"]["custom"] = $model->delivery->deliveryTime->custom;
}

if (0 === \count($jsonData["delivery"]["deliveryTime"])) {
    $jsonData["delivery"]["deliveryTime"] = $emptyObject;
}

}
if (null !== $model->delivery->extraData) {
    $jsonData["delivery"]["extraData"] = [];
foreach (array_keys($model->delivery->extraData) as $index25) {
    $jsonData["delivery"]["extraData"] = $model->delivery->extraData;
}

}

if (0 === \count($jsonData["delivery"])) {
    $jsonData["delivery"] = $emptyObject;
}

}
if (null !== $model->currency) {
    $jsonData["currency"] = $model->currency;
}

if (0 === \count($jsonData)) {
    $jsonData = $emptyObject;
}


    return $jsonData;
}
