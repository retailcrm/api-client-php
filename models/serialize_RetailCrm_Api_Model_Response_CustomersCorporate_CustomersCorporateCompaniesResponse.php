<?php

function serialize_RetailCrm_Api_Model_Response_CustomersCorporate_CustomersCorporateCompaniesResponse(RetailCrm\Api\Model\Response\CustomersCorporate\CustomersCorporateCompaniesResponse $model, bool $useStdClass = true)
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
if (null !== $model->companies) {
    $jsonData["companies"] = [];
foreach (array_keys($model->companies) as $index13) {
    $jsonData["companies"][$index13] = [];
if (null !== $model->companies[$index13]->id) {
    $jsonData["companies"][$index13]["id"] = $model->companies[$index13]->id;
}
if (null !== $model->companies[$index13]->isMain) {
    $jsonData["companies"][$index13]["isMain"] = $model->companies[$index13]->isMain;
}
if (null !== $model->companies[$index13]->externalId) {
    $jsonData["companies"][$index13]["externalId"] = $model->companies[$index13]->externalId;
}
if (null !== $model->companies[$index13]->active) {
    $jsonData["companies"][$index13]["active"] = $model->companies[$index13]->active;
}
if (null !== $model->companies[$index13]->name) {
    $jsonData["companies"][$index13]["name"] = $model->companies[$index13]->name;
}
if (null !== $model->companies[$index13]->brand) {
    $jsonData["companies"][$index13]["brand"] = $model->companies[$index13]->brand;
}
if (null !== $model->companies[$index13]->site) {
    $jsonData["companies"][$index13]["site"] = $model->companies[$index13]->site;
}
if (null !== $model->companies[$index13]->createdAt) {
    $jsonData["companies"][$index13]["createdAt"] = $model->companies[$index13]->createdAt->format('Y-m-d H:i:s');;
}
if (null !== $model->companies[$index13]->customer) {
    $jsonData["companies"][$index13]["customer"] = [];
if (null !== $model->companies[$index13]->customer->site) {
    $jsonData["companies"][$index13]["customer"]["site"] = $model->companies[$index13]->customer->site;
}
if (null !== $model->companies[$index13]->customer->id) {
    $jsonData["companies"][$index13]["customer"]["id"] = $model->companies[$index13]->customer->id;
}
if (null !== $model->companies[$index13]->customer->externalId) {
    $jsonData["companies"][$index13]["customer"]["externalId"] = $model->companies[$index13]->customer->externalId;
}
if (null !== $model->companies[$index13]->customer->type) {
    $jsonData["companies"][$index13]["customer"]["type"] = $model->companies[$index13]->customer->type;
}

if (0 === \count($jsonData["companies"][$index13]["customer"])) {
    $jsonData["companies"][$index13]["customer"] = $emptyObject;
}

}
if (null !== $model->companies[$index13]->contragent) {
    $jsonData["companies"][$index13]["contragent"] = [];
if (null !== $model->companies[$index13]->contragent->contragentType) {
    $jsonData["companies"][$index13]["contragent"]["contragentType"] = $model->companies[$index13]->contragent->contragentType;
}
if (null !== $model->companies[$index13]->contragent->legalName) {
    $jsonData["companies"][$index13]["contragent"]["legalName"] = $model->companies[$index13]->contragent->legalName;
}
if (null !== $model->companies[$index13]->contragent->legalAddress) {
    $jsonData["companies"][$index13]["contragent"]["legalAddress"] = $model->companies[$index13]->contragent->legalAddress;
}
if (null !== $model->companies[$index13]->contragent->INN) {
    $jsonData["companies"][$index13]["contragent"]["INN"] = $model->companies[$index13]->contragent->INN;
}
if (null !== $model->companies[$index13]->contragent->OKPO) {
    $jsonData["companies"][$index13]["contragent"]["OKPO"] = $model->companies[$index13]->contragent->OKPO;
}
if (null !== $model->companies[$index13]->contragent->KPP) {
    $jsonData["companies"][$index13]["contragent"]["KPP"] = $model->companies[$index13]->contragent->KPP;
}
if (null !== $model->companies[$index13]->contragent->OGRN) {
    $jsonData["companies"][$index13]["contragent"]["OGRN"] = $model->companies[$index13]->contragent->OGRN;
}
if (null !== $model->companies[$index13]->contragent->OGRNIP) {
    $jsonData["companies"][$index13]["contragent"]["OGRNIP"] = $model->companies[$index13]->contragent->OGRNIP;
}
if (null !== $model->companies[$index13]->contragent->certificateNumber) {
    $jsonData["companies"][$index13]["contragent"]["certificateNumber"] = $model->companies[$index13]->contragent->certificateNumber;
}
if (null !== $model->companies[$index13]->contragent->certificateDate) {
    $jsonData["companies"][$index13]["contragent"]["certificateDate"] = $model->companies[$index13]->contragent->certificateDate->format('Y-m-d H:i:s');;
}
if (null !== $model->companies[$index13]->contragent->BIK) {
    $jsonData["companies"][$index13]["contragent"]["BIK"] = $model->companies[$index13]->contragent->BIK;
}
if (null !== $model->companies[$index13]->contragent->bank) {
    $jsonData["companies"][$index13]["contragent"]["bank"] = $model->companies[$index13]->contragent->bank;
}
if (null !== $model->companies[$index13]->contragent->bankAddress) {
    $jsonData["companies"][$index13]["contragent"]["bankAddress"] = $model->companies[$index13]->contragent->bankAddress;
}
if (null !== $model->companies[$index13]->contragent->corrAccount) {
    $jsonData["companies"][$index13]["contragent"]["corrAccount"] = $model->companies[$index13]->contragent->corrAccount;
}
if (null !== $model->companies[$index13]->contragent->bankAccount) {
    $jsonData["companies"][$index13]["contragent"]["bankAccount"] = $model->companies[$index13]->contragent->bankAccount;
}

if (0 === \count($jsonData["companies"][$index13]["contragent"])) {
    $jsonData["companies"][$index13]["contragent"] = $emptyObject;
}

}
if (null !== $model->companies[$index13]->address) {
    $jsonData["companies"][$index13]["address"] = [];
if (null !== $model->companies[$index13]->address->id) {
    $jsonData["companies"][$index13]["address"]["id"] = $model->companies[$index13]->address->id;
}
if (null !== $model->companies[$index13]->address->name) {
    $jsonData["companies"][$index13]["address"]["name"] = $model->companies[$index13]->address->name;
}
if (null !== $model->companies[$index13]->address->isMain) {
    $jsonData["companies"][$index13]["address"]["isMain"] = $model->companies[$index13]->address->isMain;
}
if (null !== $model->companies[$index13]->address->index) {
    $jsonData["companies"][$index13]["address"]["index"] = $model->companies[$index13]->address->index;
}
if (null !== $model->companies[$index13]->address->countryIso) {
    $jsonData["companies"][$index13]["address"]["countryIso"] = $model->companies[$index13]->address->countryIso;
}
if (null !== $model->companies[$index13]->address->region) {
    $jsonData["companies"][$index13]["address"]["region"] = $model->companies[$index13]->address->region;
}
if (null !== $model->companies[$index13]->address->regionId) {
    $jsonData["companies"][$index13]["address"]["regionId"] = $model->companies[$index13]->address->regionId;
}
if (null !== $model->companies[$index13]->address->city) {
    $jsonData["companies"][$index13]["address"]["city"] = $model->companies[$index13]->address->city;
}
if (null !== $model->companies[$index13]->address->cityId) {
    $jsonData["companies"][$index13]["address"]["cityId"] = $model->companies[$index13]->address->cityId;
}
if (null !== $model->companies[$index13]->address->cityType) {
    $jsonData["companies"][$index13]["address"]["cityType"] = $model->companies[$index13]->address->cityType;
}
if (null !== $model->companies[$index13]->address->street) {
    $jsonData["companies"][$index13]["address"]["street"] = $model->companies[$index13]->address->street;
}
if (null !== $model->companies[$index13]->address->streetId) {
    $jsonData["companies"][$index13]["address"]["streetId"] = $model->companies[$index13]->address->streetId;
}
if (null !== $model->companies[$index13]->address->streetType) {
    $jsonData["companies"][$index13]["address"]["streetType"] = $model->companies[$index13]->address->streetType;
}
if (null !== $model->companies[$index13]->address->building) {
    $jsonData["companies"][$index13]["address"]["building"] = $model->companies[$index13]->address->building;
}
if (null !== $model->companies[$index13]->address->flat) {
    $jsonData["companies"][$index13]["address"]["flat"] = $model->companies[$index13]->address->flat;
}
if (null !== $model->companies[$index13]->address->floor) {
    $jsonData["companies"][$index13]["address"]["floor"] = $model->companies[$index13]->address->floor;
}
if (null !== $model->companies[$index13]->address->block) {
    $jsonData["companies"][$index13]["address"]["block"] = $model->companies[$index13]->address->block;
}
if (null !== $model->companies[$index13]->address->house) {
    $jsonData["companies"][$index13]["address"]["house"] = $model->companies[$index13]->address->house;
}
if (null !== $model->companies[$index13]->address->housing) {
    $jsonData["companies"][$index13]["address"]["housing"] = $model->companies[$index13]->address->housing;
}
if (null !== $model->companies[$index13]->address->metro) {
    $jsonData["companies"][$index13]["address"]["metro"] = $model->companies[$index13]->address->metro;
}
if (null !== $model->companies[$index13]->address->notes) {
    $jsonData["companies"][$index13]["address"]["notes"] = $model->companies[$index13]->address->notes;
}
if (null !== $model->companies[$index13]->address->text) {
    $jsonData["companies"][$index13]["address"]["text"] = $model->companies[$index13]->address->text;
}
if (null !== $model->companies[$index13]->address->externalId) {
    $jsonData["companies"][$index13]["address"]["externalId"] = $model->companies[$index13]->address->externalId;
}

if (0 === \count($jsonData["companies"][$index13]["address"])) {
    $jsonData["companies"][$index13]["address"] = $emptyObject;
}

}
if (null !== $model->companies[$index13]->customFields) {
    $jsonData["companies"][$index13]["customFields"] = [];
foreach (array_keys($model->companies[$index13]->customFields) as $index39) {
    $jsonData["companies"][$index13]["customFields"] = $model->companies[$index13]->customFields;
}

}
if (null !== $model->companies[$index13]->marginSumm) {
    $jsonData["companies"][$index13]["marginSumm"] = $model->companies[$index13]->marginSumm;
}
if (null !== $model->companies[$index13]->totalSumm) {
    $jsonData["companies"][$index13]["totalSumm"] = $model->companies[$index13]->totalSumm;
}
if (null !== $model->companies[$index13]->averageSumm) {
    $jsonData["companies"][$index13]["averageSumm"] = $model->companies[$index13]->averageSumm;
}
if (null !== $model->companies[$index13]->ordersCount) {
    $jsonData["companies"][$index13]["ordersCount"] = $model->companies[$index13]->ordersCount;
}
if (null !== $model->companies[$index13]->costSumm) {
    $jsonData["companies"][$index13]["costSumm"] = $model->companies[$index13]->costSumm;
}

if (0 === \count($jsonData["companies"][$index13])) {
    $jsonData["companies"][$index13] = $emptyObject;
}

}

}

if (0 === \count($jsonData)) {
    $jsonData = $emptyObject;
}


    return $jsonData;
}
