<?php

function serialize_RetailCrm_Api_Model_Response_CustomersCorporate_CustomersCorporateResponse(RetailCrm\Api\Model\Response\CustomersCorporate\CustomersCorporateResponse $model, bool $useStdClass = true)
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
if (null !== $model->customersCorporate) {
    $jsonData["customersCorporate"] = [];
foreach (array_keys($model->customersCorporate) as $index22) {
    $jsonData["customersCorporate"][$index22] = [];
if (null !== $model->customersCorporate[$index22]->type) {
    $jsonData["customersCorporate"][$index22]["type"] = $model->customersCorporate[$index22]->type;
}
if (null !== $model->customersCorporate[$index22]->id) {
    $jsonData["customersCorporate"][$index22]["id"] = $model->customersCorporate[$index22]->id;
}
if (null !== $model->customersCorporate[$index22]->externalId) {
    $jsonData["customersCorporate"][$index22]["externalId"] = $model->customersCorporate[$index22]->externalId;
}
if (null !== $model->customersCorporate[$index22]->nickName) {
    $jsonData["customersCorporate"][$index22]["nickName"] = $model->customersCorporate[$index22]->nickName;
}
if (null !== $model->customersCorporate[$index22]->mainAddress) {
    $jsonData["customersCorporate"][$index22]["mainAddress"] = [];
if (null !== $model->customersCorporate[$index22]->mainAddress->id) {
    $jsonData["customersCorporate"][$index22]["mainAddress"]["id"] = $model->customersCorporate[$index22]->mainAddress->id;
}
if (null !== $model->customersCorporate[$index22]->mainAddress->externalId) {
    $jsonData["customersCorporate"][$index22]["mainAddress"]["externalId"] = $model->customersCorporate[$index22]->mainAddress->externalId;
}
if (null !== $model->customersCorporate[$index22]->mainAddress->name) {
    $jsonData["customersCorporate"][$index22]["mainAddress"]["name"] = $model->customersCorporate[$index22]->mainAddress->name;
}

if (0 === \count($jsonData["customersCorporate"][$index22]["mainAddress"])) {
    $jsonData["customersCorporate"][$index22]["mainAddress"] = $emptyObject;
}

}
if (null !== $model->customersCorporate[$index22]->createdAt) {
    $jsonData["customersCorporate"][$index22]["createdAt"] = $model->customersCorporate[$index22]->createdAt->format('Y-m-d H:i:s');;
}
if (null !== $model->customersCorporate[$index22]->managerId) {
    $jsonData["customersCorporate"][$index22]["managerId"] = $model->customersCorporate[$index22]->managerId;
}
if (null !== $model->customersCorporate[$index22]->source) {
    $jsonData["customersCorporate"][$index22]["source"] = [];
if (null !== $model->customersCorporate[$index22]->source->source) {
    $jsonData["customersCorporate"][$index22]["source"]["source"] = $model->customersCorporate[$index22]->source->source;
}
if (null !== $model->customersCorporate[$index22]->source->medium) {
    $jsonData["customersCorporate"][$index22]["source"]["medium"] = $model->customersCorporate[$index22]->source->medium;
}
if (null !== $model->customersCorporate[$index22]->source->campaign) {
    $jsonData["customersCorporate"][$index22]["source"]["campaign"] = $model->customersCorporate[$index22]->source->campaign;
}
if (null !== $model->customersCorporate[$index22]->source->keyword) {
    $jsonData["customersCorporate"][$index22]["source"]["keyword"] = $model->customersCorporate[$index22]->source->keyword;
}
if (null !== $model->customersCorporate[$index22]->source->content) {
    $jsonData["customersCorporate"][$index22]["source"]["content"] = $model->customersCorporate[$index22]->source->content;
}

if (0 === \count($jsonData["customersCorporate"][$index22]["source"])) {
    $jsonData["customersCorporate"][$index22]["source"] = $emptyObject;
}

}
if (null !== $model->customersCorporate[$index22]->customerContacts) {
    $jsonData["customersCorporate"][$index22]["customerContacts"] = [];
foreach (array_keys($model->customersCorporate[$index22]->customerContacts) as $index52) {
    $jsonData["customersCorporate"][$index22]["customerContacts"][$index52] = [];
if (null !== $model->customersCorporate[$index22]->customerContacts[$index52]->id) {
    $jsonData["customersCorporate"][$index22]["customerContacts"][$index52]["id"] = $model->customersCorporate[$index22]->customerContacts[$index52]->id;
}
if (null !== $model->customersCorporate[$index22]->customerContacts[$index52]->isMain) {
    $jsonData["customersCorporate"][$index22]["customerContacts"][$index52]["isMain"] = $model->customersCorporate[$index22]->customerContacts[$index52]->isMain;
}
if (null !== $model->customersCorporate[$index22]->customerContacts[$index52]->customer) {
    $jsonData["customersCorporate"][$index22]["customerContacts"][$index52]["customer"] = [];
if (null !== $model->customersCorporate[$index22]->customerContacts[$index52]->customer->id) {
    $jsonData["customersCorporate"][$index22]["customerContacts"][$index52]["customer"]["id"] = $model->customersCorporate[$index22]->customerContacts[$index52]->customer->id;
}
if (null !== $model->customersCorporate[$index22]->customerContacts[$index52]->customer->externalId) {
    $jsonData["customersCorporate"][$index22]["customerContacts"][$index52]["customer"]["externalId"] = $model->customersCorporate[$index22]->customerContacts[$index52]->customer->externalId;
}
if (null !== $model->customersCorporate[$index22]->customerContacts[$index52]->customer->browserId) {
    $jsonData["customersCorporate"][$index22]["customerContacts"][$index52]["customer"]["browserId"] = $model->customersCorporate[$index22]->customerContacts[$index52]->customer->browserId;
}
if (null !== $model->customersCorporate[$index22]->customerContacts[$index52]->customer->site) {
    $jsonData["customersCorporate"][$index22]["customerContacts"][$index52]["customer"]["site"] = $model->customersCorporate[$index22]->customerContacts[$index52]->customer->site;
}
if (null !== $model->customersCorporate[$index22]->customerContacts[$index52]->customer->companies) {
    $jsonData["customersCorporate"][$index22]["customerContacts"][$index52]["customer"]["companies"] = [];
foreach (array_keys($model->customersCorporate[$index22]->customerContacts[$index52]->customer->companies) as $index87) {
    $jsonData["customersCorporate"][$index22]["customerContacts"][$index52]["customer"]["companies"][$index87] = [];
if (null !== $model->customersCorporate[$index22]->customerContacts[$index52]->customer->companies[$index87]->id) {
    $jsonData["customersCorporate"][$index22]["customerContacts"][$index52]["customer"]["companies"][$index87]["id"] = $model->customersCorporate[$index22]->customerContacts[$index52]->customer->companies[$index87]->id;
}
if (null !== $model->customersCorporate[$index22]->customerContacts[$index52]->customer->companies[$index87]->externalId) {
    $jsonData["customersCorporate"][$index22]["customerContacts"][$index52]["customer"]["companies"][$index87]["externalId"] = $model->customersCorporate[$index22]->customerContacts[$index52]->customer->companies[$index87]->externalId;
}
if (null !== $model->customersCorporate[$index22]->customerContacts[$index52]->customer->companies[$index87]->company) {
    $jsonData["customersCorporate"][$index22]["customerContacts"][$index52]["customer"]["companies"][$index87]["company"] = [];
if (null !== $model->customersCorporate[$index22]->customerContacts[$index52]->customer->companies[$index87]->company->id) {
    $jsonData["customersCorporate"][$index22]["customerContacts"][$index52]["customer"]["companies"][$index87]["company"]["id"] = $model->customersCorporate[$index22]->customerContacts[$index52]->customer->companies[$index87]->company->id;
}
if (null !== $model->customersCorporate[$index22]->customerContacts[$index52]->customer->companies[$index87]->company->externalId) {
    $jsonData["customersCorporate"][$index22]["customerContacts"][$index52]["customer"]["companies"][$index87]["company"]["externalId"] = $model->customersCorporate[$index22]->customerContacts[$index52]->customer->companies[$index87]->company->externalId;
}
if (null !== $model->customersCorporate[$index22]->customerContacts[$index52]->customer->companies[$index87]->company->name) {
    $jsonData["customersCorporate"][$index22]["customerContacts"][$index52]["customer"]["companies"][$index87]["company"]["name"] = $model->customersCorporate[$index22]->customerContacts[$index52]->customer->companies[$index87]->company->name;
}

if (0 === \count($jsonData["customersCorporate"][$index22]["customerContacts"][$index52]["customer"]["companies"][$index87]["company"])) {
    $jsonData["customersCorporate"][$index22]["customerContacts"][$index52]["customer"]["companies"][$index87]["company"] = $emptyObject;
}

}

if (0 === \count($jsonData["customersCorporate"][$index22]["customerContacts"][$index52]["customer"]["companies"][$index87])) {
    $jsonData["customersCorporate"][$index22]["customerContacts"][$index52]["customer"]["companies"][$index87] = $emptyObject;
}

}

}

if (0 === \count($jsonData["customersCorporate"][$index22]["customerContacts"][$index52]["customer"])) {
    $jsonData["customersCorporate"][$index22]["customerContacts"][$index52]["customer"] = $emptyObject;
}

}
if (null !== $model->customersCorporate[$index22]->customerContacts[$index52]->companies) {
    $jsonData["customersCorporate"][$index22]["customerContacts"][$index52]["companies"] = [];
foreach (array_keys($model->customersCorporate[$index22]->customerContacts[$index52]->companies) as $index75) {
    $jsonData["customersCorporate"][$index22]["customerContacts"][$index52]["companies"][$index75] = [];
if (null !== $model->customersCorporate[$index22]->customerContacts[$index52]->companies[$index75]->id) {
    $jsonData["customersCorporate"][$index22]["customerContacts"][$index52]["companies"][$index75]["id"] = $model->customersCorporate[$index22]->customerContacts[$index52]->companies[$index75]->id;
}
if (null !== $model->customersCorporate[$index22]->customerContacts[$index52]->companies[$index75]->externalId) {
    $jsonData["customersCorporate"][$index22]["customerContacts"][$index52]["companies"][$index75]["externalId"] = $model->customersCorporate[$index22]->customerContacts[$index52]->companies[$index75]->externalId;
}
if (null !== $model->customersCorporate[$index22]->customerContacts[$index52]->companies[$index75]->company) {
    $jsonData["customersCorporate"][$index22]["customerContacts"][$index52]["companies"][$index75]["company"] = [];
if (null !== $model->customersCorporate[$index22]->customerContacts[$index52]->companies[$index75]->company->id) {
    $jsonData["customersCorporate"][$index22]["customerContacts"][$index52]["companies"][$index75]["company"]["id"] = $model->customersCorporate[$index22]->customerContacts[$index52]->companies[$index75]->company->id;
}
if (null !== $model->customersCorporate[$index22]->customerContacts[$index52]->companies[$index75]->company->externalId) {
    $jsonData["customersCorporate"][$index22]["customerContacts"][$index52]["companies"][$index75]["company"]["externalId"] = $model->customersCorporate[$index22]->customerContacts[$index52]->companies[$index75]->company->externalId;
}
if (null !== $model->customersCorporate[$index22]->customerContacts[$index52]->companies[$index75]->company->name) {
    $jsonData["customersCorporate"][$index22]["customerContacts"][$index52]["companies"][$index75]["company"]["name"] = $model->customersCorporate[$index22]->customerContacts[$index52]->companies[$index75]->company->name;
}

if (0 === \count($jsonData["customersCorporate"][$index22]["customerContacts"][$index52]["companies"][$index75]["company"])) {
    $jsonData["customersCorporate"][$index22]["customerContacts"][$index52]["companies"][$index75]["company"] = $emptyObject;
}

}

if (0 === \count($jsonData["customersCorporate"][$index22]["customerContacts"][$index52]["companies"][$index75])) {
    $jsonData["customersCorporate"][$index22]["customerContacts"][$index52]["companies"][$index75] = $emptyObject;
}

}

}

if (0 === \count($jsonData["customersCorporate"][$index22]["customerContacts"][$index52])) {
    $jsonData["customersCorporate"][$index22]["customerContacts"][$index52] = $emptyObject;
}

}

}
if (null !== $model->customersCorporate[$index22]->companies) {
    $jsonData["customersCorporate"][$index22]["companies"] = [];
foreach (array_keys($model->customersCorporate[$index22]->companies) as $index45) {
    $jsonData["customersCorporate"][$index22]["companies"][$index45] = [];
if (null !== $model->customersCorporate[$index22]->companies[$index45]->id) {
    $jsonData["customersCorporate"][$index22]["companies"][$index45]["id"] = $model->customersCorporate[$index22]->companies[$index45]->id;
}
if (null !== $model->customersCorporate[$index22]->companies[$index45]->isMain) {
    $jsonData["customersCorporate"][$index22]["companies"][$index45]["isMain"] = $model->customersCorporate[$index22]->companies[$index45]->isMain;
}
if (null !== $model->customersCorporate[$index22]->companies[$index45]->externalId) {
    $jsonData["customersCorporate"][$index22]["companies"][$index45]["externalId"] = $model->customersCorporate[$index22]->companies[$index45]->externalId;
}
if (null !== $model->customersCorporate[$index22]->companies[$index45]->active) {
    $jsonData["customersCorporate"][$index22]["companies"][$index45]["active"] = $model->customersCorporate[$index22]->companies[$index45]->active;
}
if (null !== $model->customersCorporate[$index22]->companies[$index45]->name) {
    $jsonData["customersCorporate"][$index22]["companies"][$index45]["name"] = $model->customersCorporate[$index22]->companies[$index45]->name;
}
if (null !== $model->customersCorporate[$index22]->companies[$index45]->brand) {
    $jsonData["customersCorporate"][$index22]["companies"][$index45]["brand"] = $model->customersCorporate[$index22]->companies[$index45]->brand;
}
if (null !== $model->customersCorporate[$index22]->companies[$index45]->site) {
    $jsonData["customersCorporate"][$index22]["companies"][$index45]["site"] = $model->customersCorporate[$index22]->companies[$index45]->site;
}
if (null !== $model->customersCorporate[$index22]->companies[$index45]->createdAt) {
    $jsonData["customersCorporate"][$index22]["companies"][$index45]["createdAt"] = $model->customersCorporate[$index22]->companies[$index45]->createdAt->format('Y-m-d H:i:s');;
}
if (null !== $model->customersCorporate[$index22]->companies[$index45]->customer) {
    $jsonData["customersCorporate"][$index22]["companies"][$index45]["customer"] = [];
if (null !== $model->customersCorporate[$index22]->companies[$index45]->customer->site) {
    $jsonData["customersCorporate"][$index22]["companies"][$index45]["customer"]["site"] = $model->customersCorporate[$index22]->companies[$index45]->customer->site;
}
if (null !== $model->customersCorporate[$index22]->companies[$index45]->customer->id) {
    $jsonData["customersCorporate"][$index22]["companies"][$index45]["customer"]["id"] = $model->customersCorporate[$index22]->companies[$index45]->customer->id;
}
if (null !== $model->customersCorporate[$index22]->companies[$index45]->customer->externalId) {
    $jsonData["customersCorporate"][$index22]["companies"][$index45]["customer"]["externalId"] = $model->customersCorporate[$index22]->companies[$index45]->customer->externalId;
}
if (null !== $model->customersCorporate[$index22]->companies[$index45]->customer->type) {
    $jsonData["customersCorporate"][$index22]["companies"][$index45]["customer"]["type"] = $model->customersCorporate[$index22]->companies[$index45]->customer->type;
}

if (0 === \count($jsonData["customersCorporate"][$index22]["companies"][$index45]["customer"])) {
    $jsonData["customersCorporate"][$index22]["companies"][$index45]["customer"] = $emptyObject;
}

}
if (null !== $model->customersCorporate[$index22]->companies[$index45]->contragent) {
    $jsonData["customersCorporate"][$index22]["companies"][$index45]["contragent"] = [];
if (null !== $model->customersCorporate[$index22]->companies[$index45]->contragent->contragentType) {
    $jsonData["customersCorporate"][$index22]["companies"][$index45]["contragent"]["contragentType"] = $model->customersCorporate[$index22]->companies[$index45]->contragent->contragentType;
}
if (null !== $model->customersCorporate[$index22]->companies[$index45]->contragent->legalName) {
    $jsonData["customersCorporate"][$index22]["companies"][$index45]["contragent"]["legalName"] = $model->customersCorporate[$index22]->companies[$index45]->contragent->legalName;
}
if (null !== $model->customersCorporate[$index22]->companies[$index45]->contragent->legalAddress) {
    $jsonData["customersCorporate"][$index22]["companies"][$index45]["contragent"]["legalAddress"] = $model->customersCorporate[$index22]->companies[$index45]->contragent->legalAddress;
}
if (null !== $model->customersCorporate[$index22]->companies[$index45]->contragent->INN) {
    $jsonData["customersCorporate"][$index22]["companies"][$index45]["contragent"]["INN"] = $model->customersCorporate[$index22]->companies[$index45]->contragent->INN;
}
if (null !== $model->customersCorporate[$index22]->companies[$index45]->contragent->OKPO) {
    $jsonData["customersCorporate"][$index22]["companies"][$index45]["contragent"]["OKPO"] = $model->customersCorporate[$index22]->companies[$index45]->contragent->OKPO;
}
if (null !== $model->customersCorporate[$index22]->companies[$index45]->contragent->KPP) {
    $jsonData["customersCorporate"][$index22]["companies"][$index45]["contragent"]["KPP"] = $model->customersCorporate[$index22]->companies[$index45]->contragent->KPP;
}
if (null !== $model->customersCorporate[$index22]->companies[$index45]->contragent->OGRN) {
    $jsonData["customersCorporate"][$index22]["companies"][$index45]["contragent"]["OGRN"] = $model->customersCorporate[$index22]->companies[$index45]->contragent->OGRN;
}
if (null !== $model->customersCorporate[$index22]->companies[$index45]->contragent->OGRNIP) {
    $jsonData["customersCorporate"][$index22]["companies"][$index45]["contragent"]["OGRNIP"] = $model->customersCorporate[$index22]->companies[$index45]->contragent->OGRNIP;
}
if (null !== $model->customersCorporate[$index22]->companies[$index45]->contragent->certificateNumber) {
    $jsonData["customersCorporate"][$index22]["companies"][$index45]["contragent"]["certificateNumber"] = $model->customersCorporate[$index22]->companies[$index45]->contragent->certificateNumber;
}
if (null !== $model->customersCorporate[$index22]->companies[$index45]->contragent->certificateDate) {
    $jsonData["customersCorporate"][$index22]["companies"][$index45]["contragent"]["certificateDate"] = $model->customersCorporate[$index22]->companies[$index45]->contragent->certificateDate->format('Y-m-d H:i:s');;
}
if (null !== $model->customersCorporate[$index22]->companies[$index45]->contragent->BIK) {
    $jsonData["customersCorporate"][$index22]["companies"][$index45]["contragent"]["BIK"] = $model->customersCorporate[$index22]->companies[$index45]->contragent->BIK;
}
if (null !== $model->customersCorporate[$index22]->companies[$index45]->contragent->bank) {
    $jsonData["customersCorporate"][$index22]["companies"][$index45]["contragent"]["bank"] = $model->customersCorporate[$index22]->companies[$index45]->contragent->bank;
}
if (null !== $model->customersCorporate[$index22]->companies[$index45]->contragent->bankAddress) {
    $jsonData["customersCorporate"][$index22]["companies"][$index45]["contragent"]["bankAddress"] = $model->customersCorporate[$index22]->companies[$index45]->contragent->bankAddress;
}
if (null !== $model->customersCorporate[$index22]->companies[$index45]->contragent->corrAccount) {
    $jsonData["customersCorporate"][$index22]["companies"][$index45]["contragent"]["corrAccount"] = $model->customersCorporate[$index22]->companies[$index45]->contragent->corrAccount;
}
if (null !== $model->customersCorporate[$index22]->companies[$index45]->contragent->bankAccount) {
    $jsonData["customersCorporate"][$index22]["companies"][$index45]["contragent"]["bankAccount"] = $model->customersCorporate[$index22]->companies[$index45]->contragent->bankAccount;
}

if (0 === \count($jsonData["customersCorporate"][$index22]["companies"][$index45]["contragent"])) {
    $jsonData["customersCorporate"][$index22]["companies"][$index45]["contragent"] = $emptyObject;
}

}
if (null !== $model->customersCorporate[$index22]->companies[$index45]->address) {
    $jsonData["customersCorporate"][$index22]["companies"][$index45]["address"] = [];
if (null !== $model->customersCorporate[$index22]->companies[$index45]->address->id) {
    $jsonData["customersCorporate"][$index22]["companies"][$index45]["address"]["id"] = $model->customersCorporate[$index22]->companies[$index45]->address->id;
}
if (null !== $model->customersCorporate[$index22]->companies[$index45]->address->name) {
    $jsonData["customersCorporate"][$index22]["companies"][$index45]["address"]["name"] = $model->customersCorporate[$index22]->companies[$index45]->address->name;
}
if (null !== $model->customersCorporate[$index22]->companies[$index45]->address->isMain) {
    $jsonData["customersCorporate"][$index22]["companies"][$index45]["address"]["isMain"] = $model->customersCorporate[$index22]->companies[$index45]->address->isMain;
}
if (null !== $model->customersCorporate[$index22]->companies[$index45]->address->index) {
    $jsonData["customersCorporate"][$index22]["companies"][$index45]["address"]["index"] = $model->customersCorporate[$index22]->companies[$index45]->address->index;
}
if (null !== $model->customersCorporate[$index22]->companies[$index45]->address->countryIso) {
    $jsonData["customersCorporate"][$index22]["companies"][$index45]["address"]["countryIso"] = $model->customersCorporate[$index22]->companies[$index45]->address->countryIso;
}
if (null !== $model->customersCorporate[$index22]->companies[$index45]->address->region) {
    $jsonData["customersCorporate"][$index22]["companies"][$index45]["address"]["region"] = $model->customersCorporate[$index22]->companies[$index45]->address->region;
}
if (null !== $model->customersCorporate[$index22]->companies[$index45]->address->regionId) {
    $jsonData["customersCorporate"][$index22]["companies"][$index45]["address"]["regionId"] = $model->customersCorporate[$index22]->companies[$index45]->address->regionId;
}
if (null !== $model->customersCorporate[$index22]->companies[$index45]->address->city) {
    $jsonData["customersCorporate"][$index22]["companies"][$index45]["address"]["city"] = $model->customersCorporate[$index22]->companies[$index45]->address->city;
}
if (null !== $model->customersCorporate[$index22]->companies[$index45]->address->cityId) {
    $jsonData["customersCorporate"][$index22]["companies"][$index45]["address"]["cityId"] = $model->customersCorporate[$index22]->companies[$index45]->address->cityId;
}
if (null !== $model->customersCorporate[$index22]->companies[$index45]->address->cityType) {
    $jsonData["customersCorporate"][$index22]["companies"][$index45]["address"]["cityType"] = $model->customersCorporate[$index22]->companies[$index45]->address->cityType;
}
if (null !== $model->customersCorporate[$index22]->companies[$index45]->address->street) {
    $jsonData["customersCorporate"][$index22]["companies"][$index45]["address"]["street"] = $model->customersCorporate[$index22]->companies[$index45]->address->street;
}
if (null !== $model->customersCorporate[$index22]->companies[$index45]->address->streetId) {
    $jsonData["customersCorporate"][$index22]["companies"][$index45]["address"]["streetId"] = $model->customersCorporate[$index22]->companies[$index45]->address->streetId;
}
if (null !== $model->customersCorporate[$index22]->companies[$index45]->address->streetType) {
    $jsonData["customersCorporate"][$index22]["companies"][$index45]["address"]["streetType"] = $model->customersCorporate[$index22]->companies[$index45]->address->streetType;
}
if (null !== $model->customersCorporate[$index22]->companies[$index45]->address->building) {
    $jsonData["customersCorporate"][$index22]["companies"][$index45]["address"]["building"] = $model->customersCorporate[$index22]->companies[$index45]->address->building;
}
if (null !== $model->customersCorporate[$index22]->companies[$index45]->address->flat) {
    $jsonData["customersCorporate"][$index22]["companies"][$index45]["address"]["flat"] = $model->customersCorporate[$index22]->companies[$index45]->address->flat;
}
if (null !== $model->customersCorporate[$index22]->companies[$index45]->address->floor) {
    $jsonData["customersCorporate"][$index22]["companies"][$index45]["address"]["floor"] = $model->customersCorporate[$index22]->companies[$index45]->address->floor;
}
if (null !== $model->customersCorporate[$index22]->companies[$index45]->address->block) {
    $jsonData["customersCorporate"][$index22]["companies"][$index45]["address"]["block"] = $model->customersCorporate[$index22]->companies[$index45]->address->block;
}
if (null !== $model->customersCorporate[$index22]->companies[$index45]->address->house) {
    $jsonData["customersCorporate"][$index22]["companies"][$index45]["address"]["house"] = $model->customersCorporate[$index22]->companies[$index45]->address->house;
}
if (null !== $model->customersCorporate[$index22]->companies[$index45]->address->housing) {
    $jsonData["customersCorporate"][$index22]["companies"][$index45]["address"]["housing"] = $model->customersCorporate[$index22]->companies[$index45]->address->housing;
}
if (null !== $model->customersCorporate[$index22]->companies[$index45]->address->metro) {
    $jsonData["customersCorporate"][$index22]["companies"][$index45]["address"]["metro"] = $model->customersCorporate[$index22]->companies[$index45]->address->metro;
}
if (null !== $model->customersCorporate[$index22]->companies[$index45]->address->notes) {
    $jsonData["customersCorporate"][$index22]["companies"][$index45]["address"]["notes"] = $model->customersCorporate[$index22]->companies[$index45]->address->notes;
}
if (null !== $model->customersCorporate[$index22]->companies[$index45]->address->text) {
    $jsonData["customersCorporate"][$index22]["companies"][$index45]["address"]["text"] = $model->customersCorporate[$index22]->companies[$index45]->address->text;
}
if (null !== $model->customersCorporate[$index22]->companies[$index45]->address->externalId) {
    $jsonData["customersCorporate"][$index22]["companies"][$index45]["address"]["externalId"] = $model->customersCorporate[$index22]->companies[$index45]->address->externalId;
}

if (0 === \count($jsonData["customersCorporate"][$index22]["companies"][$index45]["address"])) {
    $jsonData["customersCorporate"][$index22]["companies"][$index45]["address"] = $emptyObject;
}

}
if (null !== $model->customersCorporate[$index22]->companies[$index45]->customFields) {
    $jsonData["customersCorporate"][$index22]["companies"][$index45]["customFields"] = [];
foreach (array_keys($model->customersCorporate[$index22]->companies[$index45]->customFields) as $index71) {
    $jsonData["customersCorporate"][$index22]["companies"][$index45]["customFields"] = $model->customersCorporate[$index22]->companies[$index45]->customFields;
}

}
if (null !== $model->customersCorporate[$index22]->companies[$index45]->marginSumm) {
    $jsonData["customersCorporate"][$index22]["companies"][$index45]["marginSumm"] = $model->customersCorporate[$index22]->companies[$index45]->marginSumm;
}
if (null !== $model->customersCorporate[$index22]->companies[$index45]->totalSumm) {
    $jsonData["customersCorporate"][$index22]["companies"][$index45]["totalSumm"] = $model->customersCorporate[$index22]->companies[$index45]->totalSumm;
}
if (null !== $model->customersCorporate[$index22]->companies[$index45]->averageSumm) {
    $jsonData["customersCorporate"][$index22]["companies"][$index45]["averageSumm"] = $model->customersCorporate[$index22]->companies[$index45]->averageSumm;
}
if (null !== $model->customersCorporate[$index22]->companies[$index45]->ordersCount) {
    $jsonData["customersCorporate"][$index22]["companies"][$index45]["ordersCount"] = $model->customersCorporate[$index22]->companies[$index45]->ordersCount;
}
if (null !== $model->customersCorporate[$index22]->companies[$index45]->costSumm) {
    $jsonData["customersCorporate"][$index22]["companies"][$index45]["costSumm"] = $model->customersCorporate[$index22]->companies[$index45]->costSumm;
}

if (0 === \count($jsonData["customersCorporate"][$index22]["companies"][$index45])) {
    $jsonData["customersCorporate"][$index22]["companies"][$index45] = $emptyObject;
}

}

}
if (null !== $model->customersCorporate[$index22]->addresses) {
    $jsonData["customersCorporate"][$index22]["addresses"] = [];
foreach (array_keys($model->customersCorporate[$index22]->addresses) as $index45) {
    $jsonData["customersCorporate"][$index22]["addresses"][$index45] = [];
if (null !== $model->customersCorporate[$index22]->addresses[$index45]->id) {
    $jsonData["customersCorporate"][$index22]["addresses"][$index45]["id"] = $model->customersCorporate[$index22]->addresses[$index45]->id;
}
if (null !== $model->customersCorporate[$index22]->addresses[$index45]->name) {
    $jsonData["customersCorporate"][$index22]["addresses"][$index45]["name"] = $model->customersCorporate[$index22]->addresses[$index45]->name;
}
if (null !== $model->customersCorporate[$index22]->addresses[$index45]->isMain) {
    $jsonData["customersCorporate"][$index22]["addresses"][$index45]["isMain"] = $model->customersCorporate[$index22]->addresses[$index45]->isMain;
}
if (null !== $model->customersCorporate[$index22]->addresses[$index45]->index) {
    $jsonData["customersCorporate"][$index22]["addresses"][$index45]["index"] = $model->customersCorporate[$index22]->addresses[$index45]->index;
}
if (null !== $model->customersCorporate[$index22]->addresses[$index45]->countryIso) {
    $jsonData["customersCorporate"][$index22]["addresses"][$index45]["countryIso"] = $model->customersCorporate[$index22]->addresses[$index45]->countryIso;
}
if (null !== $model->customersCorporate[$index22]->addresses[$index45]->region) {
    $jsonData["customersCorporate"][$index22]["addresses"][$index45]["region"] = $model->customersCorporate[$index22]->addresses[$index45]->region;
}
if (null !== $model->customersCorporate[$index22]->addresses[$index45]->regionId) {
    $jsonData["customersCorporate"][$index22]["addresses"][$index45]["regionId"] = $model->customersCorporate[$index22]->addresses[$index45]->regionId;
}
if (null !== $model->customersCorporate[$index22]->addresses[$index45]->city) {
    $jsonData["customersCorporate"][$index22]["addresses"][$index45]["city"] = $model->customersCorporate[$index22]->addresses[$index45]->city;
}
if (null !== $model->customersCorporate[$index22]->addresses[$index45]->cityId) {
    $jsonData["customersCorporate"][$index22]["addresses"][$index45]["cityId"] = $model->customersCorporate[$index22]->addresses[$index45]->cityId;
}
if (null !== $model->customersCorporate[$index22]->addresses[$index45]->cityType) {
    $jsonData["customersCorporate"][$index22]["addresses"][$index45]["cityType"] = $model->customersCorporate[$index22]->addresses[$index45]->cityType;
}
if (null !== $model->customersCorporate[$index22]->addresses[$index45]->street) {
    $jsonData["customersCorporate"][$index22]["addresses"][$index45]["street"] = $model->customersCorporate[$index22]->addresses[$index45]->street;
}
if (null !== $model->customersCorporate[$index22]->addresses[$index45]->streetId) {
    $jsonData["customersCorporate"][$index22]["addresses"][$index45]["streetId"] = $model->customersCorporate[$index22]->addresses[$index45]->streetId;
}
if (null !== $model->customersCorporate[$index22]->addresses[$index45]->streetType) {
    $jsonData["customersCorporate"][$index22]["addresses"][$index45]["streetType"] = $model->customersCorporate[$index22]->addresses[$index45]->streetType;
}
if (null !== $model->customersCorporate[$index22]->addresses[$index45]->building) {
    $jsonData["customersCorporate"][$index22]["addresses"][$index45]["building"] = $model->customersCorporate[$index22]->addresses[$index45]->building;
}
if (null !== $model->customersCorporate[$index22]->addresses[$index45]->flat) {
    $jsonData["customersCorporate"][$index22]["addresses"][$index45]["flat"] = $model->customersCorporate[$index22]->addresses[$index45]->flat;
}
if (null !== $model->customersCorporate[$index22]->addresses[$index45]->floor) {
    $jsonData["customersCorporate"][$index22]["addresses"][$index45]["floor"] = $model->customersCorporate[$index22]->addresses[$index45]->floor;
}
if (null !== $model->customersCorporate[$index22]->addresses[$index45]->block) {
    $jsonData["customersCorporate"][$index22]["addresses"][$index45]["block"] = $model->customersCorporate[$index22]->addresses[$index45]->block;
}
if (null !== $model->customersCorporate[$index22]->addresses[$index45]->house) {
    $jsonData["customersCorporate"][$index22]["addresses"][$index45]["house"] = $model->customersCorporate[$index22]->addresses[$index45]->house;
}
if (null !== $model->customersCorporate[$index22]->addresses[$index45]->housing) {
    $jsonData["customersCorporate"][$index22]["addresses"][$index45]["housing"] = $model->customersCorporate[$index22]->addresses[$index45]->housing;
}
if (null !== $model->customersCorporate[$index22]->addresses[$index45]->metro) {
    $jsonData["customersCorporate"][$index22]["addresses"][$index45]["metro"] = $model->customersCorporate[$index22]->addresses[$index45]->metro;
}
if (null !== $model->customersCorporate[$index22]->addresses[$index45]->notes) {
    $jsonData["customersCorporate"][$index22]["addresses"][$index45]["notes"] = $model->customersCorporate[$index22]->addresses[$index45]->notes;
}
if (null !== $model->customersCorporate[$index22]->addresses[$index45]->text) {
    $jsonData["customersCorporate"][$index22]["addresses"][$index45]["text"] = $model->customersCorporate[$index22]->addresses[$index45]->text;
}
if (null !== $model->customersCorporate[$index22]->addresses[$index45]->externalId) {
    $jsonData["customersCorporate"][$index22]["addresses"][$index45]["externalId"] = $model->customersCorporate[$index22]->addresses[$index45]->externalId;
}

if (0 === \count($jsonData["customersCorporate"][$index22]["addresses"][$index45])) {
    $jsonData["customersCorporate"][$index22]["addresses"][$index45] = $emptyObject;
}

}

}
if (null !== $model->customersCorporate[$index22]->vip) {
    $jsonData["customersCorporate"][$index22]["vip"] = $model->customersCorporate[$index22]->vip;
}
if (null !== $model->customersCorporate[$index22]->bad) {
    $jsonData["customersCorporate"][$index22]["bad"] = $model->customersCorporate[$index22]->bad;
}
if (null !== $model->customersCorporate[$index22]->site) {
    $jsonData["customersCorporate"][$index22]["site"] = $model->customersCorporate[$index22]->site;
}
if (null !== $model->customersCorporate[$index22]->tags) {
    $jsonData["customersCorporate"][$index22]["tags"] = [];
foreach (array_keys($model->customersCorporate[$index22]->tags) as $index40) {
    $jsonData["customersCorporate"][$index22]["tags"][$index40] = $model->customersCorporate[$index22]->tags[$index40]->name;
}

}
if (null !== $model->customersCorporate[$index22]->avgMarginSumm) {
    $jsonData["customersCorporate"][$index22]["avgMarginSumm"] = $model->customersCorporate[$index22]->avgMarginSumm;
}
if (null !== $model->customersCorporate[$index22]->marginSumm) {
    $jsonData["customersCorporate"][$index22]["marginSumm"] = $model->customersCorporate[$index22]->marginSumm;
}
if (null !== $model->customersCorporate[$index22]->totalSumm) {
    $jsonData["customersCorporate"][$index22]["totalSumm"] = $model->customersCorporate[$index22]->totalSumm;
}
if (null !== $model->customersCorporate[$index22]->averageSumm) {
    $jsonData["customersCorporate"][$index22]["averageSumm"] = $model->customersCorporate[$index22]->averageSumm;
}
if (null !== $model->customersCorporate[$index22]->ordersCount) {
    $jsonData["customersCorporate"][$index22]["ordersCount"] = $model->customersCorporate[$index22]->ordersCount;
}
if (null !== $model->customersCorporate[$index22]->costSumm) {
    $jsonData["customersCorporate"][$index22]["costSumm"] = $model->customersCorporate[$index22]->costSumm;
}
if (null !== $model->customersCorporate[$index22]->customFields) {
    $jsonData["customersCorporate"][$index22]["customFields"] = [];
foreach (array_keys($model->customersCorporate[$index22]->customFields) as $index48) {
    $jsonData["customersCorporate"][$index22]["customFields"] = $model->customersCorporate[$index22]->customFields;
}

}
if (null !== $model->customersCorporate[$index22]->personalDiscount) {
    $jsonData["customersCorporate"][$index22]["personalDiscount"] = $model->customersCorporate[$index22]->personalDiscount;
}
if (null !== $model->customersCorporate[$index22]->cumulativeDiscount) {
    $jsonData["customersCorporate"][$index22]["cumulativeDiscount"] = $model->customersCorporate[$index22]->cumulativeDiscount;
}
if (null !== $model->customersCorporate[$index22]->discountCardNumber) {
    $jsonData["customersCorporate"][$index22]["discountCardNumber"] = $model->customersCorporate[$index22]->discountCardNumber;
}
if (null !== $model->customersCorporate[$index22]->firstClientId) {
    $jsonData["customersCorporate"][$index22]["firstClientId"] = $model->customersCorporate[$index22]->firstClientId;
}
if (null !== $model->customersCorporate[$index22]->lastClientId) {
    $jsonData["customersCorporate"][$index22]["lastClientId"] = $model->customersCorporate[$index22]->lastClientId;
}
if (null !== $model->customersCorporate[$index22]->mainCustomerContact) {
    $jsonData["customersCorporate"][$index22]["mainCustomerContact"] = [];
if (null !== $model->customersCorporate[$index22]->mainCustomerContact->id) {
    $jsonData["customersCorporate"][$index22]["mainCustomerContact"]["id"] = $model->customersCorporate[$index22]->mainCustomerContact->id;
}
if (null !== $model->customersCorporate[$index22]->mainCustomerContact->isMain) {
    $jsonData["customersCorporate"][$index22]["mainCustomerContact"]["isMain"] = $model->customersCorporate[$index22]->mainCustomerContact->isMain;
}
if (null !== $model->customersCorporate[$index22]->mainCustomerContact->customer) {
    $jsonData["customersCorporate"][$index22]["mainCustomerContact"]["customer"] = [];
if (null !== $model->customersCorporate[$index22]->mainCustomerContact->customer->id) {
    $jsonData["customersCorporate"][$index22]["mainCustomerContact"]["customer"]["id"] = $model->customersCorporate[$index22]->mainCustomerContact->customer->id;
}
if (null !== $model->customersCorporate[$index22]->mainCustomerContact->customer->externalId) {
    $jsonData["customersCorporate"][$index22]["mainCustomerContact"]["customer"]["externalId"] = $model->customersCorporate[$index22]->mainCustomerContact->customer->externalId;
}
if (null !== $model->customersCorporate[$index22]->mainCustomerContact->customer->browserId) {
    $jsonData["customersCorporate"][$index22]["mainCustomerContact"]["customer"]["browserId"] = $model->customersCorporate[$index22]->mainCustomerContact->customer->browserId;
}
if (null !== $model->customersCorporate[$index22]->mainCustomerContact->customer->site) {
    $jsonData["customersCorporate"][$index22]["mainCustomerContact"]["customer"]["site"] = $model->customersCorporate[$index22]->mainCustomerContact->customer->site;
}
if (null !== $model->customersCorporate[$index22]->mainCustomerContact->customer->companies) {
    $jsonData["customersCorporate"][$index22]["mainCustomerContact"]["customer"]["companies"] = [];
foreach (array_keys($model->customersCorporate[$index22]->mainCustomerContact->customer->companies) as $index80) {
    $jsonData["customersCorporate"][$index22]["mainCustomerContact"]["customer"]["companies"][$index80] = [];
if (null !== $model->customersCorporate[$index22]->mainCustomerContact->customer->companies[$index80]->id) {
    $jsonData["customersCorporate"][$index22]["mainCustomerContact"]["customer"]["companies"][$index80]["id"] = $model->customersCorporate[$index22]->mainCustomerContact->customer->companies[$index80]->id;
}
if (null !== $model->customersCorporate[$index22]->mainCustomerContact->customer->companies[$index80]->externalId) {
    $jsonData["customersCorporate"][$index22]["mainCustomerContact"]["customer"]["companies"][$index80]["externalId"] = $model->customersCorporate[$index22]->mainCustomerContact->customer->companies[$index80]->externalId;
}
if (null !== $model->customersCorporate[$index22]->mainCustomerContact->customer->companies[$index80]->company) {
    $jsonData["customersCorporate"][$index22]["mainCustomerContact"]["customer"]["companies"][$index80]["company"] = [];
if (null !== $model->customersCorporate[$index22]->mainCustomerContact->customer->companies[$index80]->company->id) {
    $jsonData["customersCorporate"][$index22]["mainCustomerContact"]["customer"]["companies"][$index80]["company"]["id"] = $model->customersCorporate[$index22]->mainCustomerContact->customer->companies[$index80]->company->id;
}
if (null !== $model->customersCorporate[$index22]->mainCustomerContact->customer->companies[$index80]->company->externalId) {
    $jsonData["customersCorporate"][$index22]["mainCustomerContact"]["customer"]["companies"][$index80]["company"]["externalId"] = $model->customersCorporate[$index22]->mainCustomerContact->customer->companies[$index80]->company->externalId;
}
if (null !== $model->customersCorporate[$index22]->mainCustomerContact->customer->companies[$index80]->company->name) {
    $jsonData["customersCorporate"][$index22]["mainCustomerContact"]["customer"]["companies"][$index80]["company"]["name"] = $model->customersCorporate[$index22]->mainCustomerContact->customer->companies[$index80]->company->name;
}

if (0 === \count($jsonData["customersCorporate"][$index22]["mainCustomerContact"]["customer"]["companies"][$index80]["company"])) {
    $jsonData["customersCorporate"][$index22]["mainCustomerContact"]["customer"]["companies"][$index80]["company"] = $emptyObject;
}

}

if (0 === \count($jsonData["customersCorporate"][$index22]["mainCustomerContact"]["customer"]["companies"][$index80])) {
    $jsonData["customersCorporate"][$index22]["mainCustomerContact"]["customer"]["companies"][$index80] = $emptyObject;
}

}

}

if (0 === \count($jsonData["customersCorporate"][$index22]["mainCustomerContact"]["customer"])) {
    $jsonData["customersCorporate"][$index22]["mainCustomerContact"]["customer"] = $emptyObject;
}

}
if (null !== $model->customersCorporate[$index22]->mainCustomerContact->companies) {
    $jsonData["customersCorporate"][$index22]["mainCustomerContact"]["companies"] = [];
foreach (array_keys($model->customersCorporate[$index22]->mainCustomerContact->companies) as $index68) {
    $jsonData["customersCorporate"][$index22]["mainCustomerContact"]["companies"][$index68] = [];
if (null !== $model->customersCorporate[$index22]->mainCustomerContact->companies[$index68]->id) {
    $jsonData["customersCorporate"][$index22]["mainCustomerContact"]["companies"][$index68]["id"] = $model->customersCorporate[$index22]->mainCustomerContact->companies[$index68]->id;
}
if (null !== $model->customersCorporate[$index22]->mainCustomerContact->companies[$index68]->externalId) {
    $jsonData["customersCorporate"][$index22]["mainCustomerContact"]["companies"][$index68]["externalId"] = $model->customersCorporate[$index22]->mainCustomerContact->companies[$index68]->externalId;
}
if (null !== $model->customersCorporate[$index22]->mainCustomerContact->companies[$index68]->company) {
    $jsonData["customersCorporate"][$index22]["mainCustomerContact"]["companies"][$index68]["company"] = [];
if (null !== $model->customersCorporate[$index22]->mainCustomerContact->companies[$index68]->company->id) {
    $jsonData["customersCorporate"][$index22]["mainCustomerContact"]["companies"][$index68]["company"]["id"] = $model->customersCorporate[$index22]->mainCustomerContact->companies[$index68]->company->id;
}
if (null !== $model->customersCorporate[$index22]->mainCustomerContact->companies[$index68]->company->externalId) {
    $jsonData["customersCorporate"][$index22]["mainCustomerContact"]["companies"][$index68]["company"]["externalId"] = $model->customersCorporate[$index22]->mainCustomerContact->companies[$index68]->company->externalId;
}
if (null !== $model->customersCorporate[$index22]->mainCustomerContact->companies[$index68]->company->name) {
    $jsonData["customersCorporate"][$index22]["mainCustomerContact"]["companies"][$index68]["company"]["name"] = $model->customersCorporate[$index22]->mainCustomerContact->companies[$index68]->company->name;
}

if (0 === \count($jsonData["customersCorporate"][$index22]["mainCustomerContact"]["companies"][$index68]["company"])) {
    $jsonData["customersCorporate"][$index22]["mainCustomerContact"]["companies"][$index68]["company"] = $emptyObject;
}

}

if (0 === \count($jsonData["customersCorporate"][$index22]["mainCustomerContact"]["companies"][$index68])) {
    $jsonData["customersCorporate"][$index22]["mainCustomerContact"]["companies"][$index68] = $emptyObject;
}

}

}

if (0 === \count($jsonData["customersCorporate"][$index22]["mainCustomerContact"])) {
    $jsonData["customersCorporate"][$index22]["mainCustomerContact"] = $emptyObject;
}

}
if (null !== $model->customersCorporate[$index22]->mainCompany) {
    $jsonData["customersCorporate"][$index22]["mainCompany"] = [];
if (null !== $model->customersCorporate[$index22]->mainCompany->id) {
    $jsonData["customersCorporate"][$index22]["mainCompany"]["id"] = $model->customersCorporate[$index22]->mainCompany->id;
}
if (null !== $model->customersCorporate[$index22]->mainCompany->externalId) {
    $jsonData["customersCorporate"][$index22]["mainCompany"]["externalId"] = $model->customersCorporate[$index22]->mainCompany->externalId;
}
if (null !== $model->customersCorporate[$index22]->mainCompany->name) {
    $jsonData["customersCorporate"][$index22]["mainCompany"]["name"] = $model->customersCorporate[$index22]->mainCompany->name;
}

if (0 === \count($jsonData["customersCorporate"][$index22]["mainCompany"])) {
    $jsonData["customersCorporate"][$index22]["mainCompany"] = $emptyObject;
}

}

if (0 === \count($jsonData["customersCorporate"][$index22])) {
    $jsonData["customersCorporate"][$index22] = $emptyObject;
}

}

}

if (0 === \count($jsonData)) {
    $jsonData = $emptyObject;
}


    return $jsonData;
}
