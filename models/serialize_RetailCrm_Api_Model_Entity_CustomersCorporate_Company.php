<?php

function serialize_RetailCrm_Api_Model_Entity_CustomersCorporate_Company(RetailCrm\Api\Model\Entity\CustomersCorporate\Company $model, bool $useStdClass = true)
{
    $emptyHashmap = $useStdClass ? new \stdClass() : [];
    $emptyObject = $useStdClass ? new \stdClass() : [];

    $jsonData = [];
if (null !== $model->id) {
    $jsonData["id"] = $model->id;
}
if (null !== $model->isMain) {
    $jsonData["isMain"] = $model->isMain;
}
if (null !== $model->externalId) {
    $jsonData["externalId"] = $model->externalId;
}
if (null !== $model->active) {
    $jsonData["active"] = $model->active;
}
if (null !== $model->name) {
    $jsonData["name"] = $model->name;
}
if (null !== $model->brand) {
    $jsonData["brand"] = $model->brand;
}
if (null !== $model->site) {
    $jsonData["site"] = $model->site;
}
if (null !== $model->createdAt) {
    $jsonData["createdAt"] = $model->createdAt->format('Y-m-d H:i:s');;
}
if (null !== $model->customer) {
    $jsonData["customer"] = [];
if (null !== $model->customer->site) {
    $jsonData["customer"]["site"] = $model->customer->site;
}
if (null !== $model->customer->id) {
    $jsonData["customer"]["id"] = $model->customer->id;
}
if (null !== $model->customer->externalId) {
    $jsonData["customer"]["externalId"] = $model->customer->externalId;
}
if (null !== $model->customer->type) {
    $jsonData["customer"]["type"] = $model->customer->type;
}

if (0 === \count($jsonData["customer"])) {
    $jsonData["customer"] = $emptyObject;
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
if (null !== $model->customFields) {
    $jsonData["customFields"] = [];
foreach (array_keys($model->customFields) as $index16) {
    $jsonData["customFields"] = $model->customFields;
}

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

if (0 === \count($jsonData)) {
    $jsonData = $emptyObject;
}


    return $jsonData;
}
