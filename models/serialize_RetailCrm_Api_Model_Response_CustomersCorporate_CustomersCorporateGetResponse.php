<?php

function serialize_RetailCrm_Api_Model_Response_CustomersCorporate_CustomersCorporateGetResponse(RetailCrm\Api\Model\Response\CustomersCorporate\CustomersCorporateGetResponse $model, bool $useStdClass = true)
{
    $emptyHashmap = $useStdClass ? new \stdClass() : [];
    $emptyObject = $useStdClass ? new \stdClass() : [];

    $jsonData = [];
if (null !== $model->success) {
    $jsonData["success"] = $model->success;
}
if (null !== $model->customerCorporate) {
    $jsonData["customerCorporate"] = [];
if (null !== $model->customerCorporate->type) {
    $jsonData["customerCorporate"]["type"] = $model->customerCorporate->type;
}
if (null !== $model->customerCorporate->id) {
    $jsonData["customerCorporate"]["id"] = $model->customerCorporate->id;
}
if (null !== $model->customerCorporate->externalId) {
    $jsonData["customerCorporate"]["externalId"] = $model->customerCorporate->externalId;
}
if (null !== $model->customerCorporate->nickName) {
    $jsonData["customerCorporate"]["nickName"] = $model->customerCorporate->nickName;
}
if (null !== $model->customerCorporate->mainAddress) {
    $jsonData["customerCorporate"]["mainAddress"] = [];
if (null !== $model->customerCorporate->mainAddress->id) {
    $jsonData["customerCorporate"]["mainAddress"]["id"] = $model->customerCorporate->mainAddress->id;
}
if (null !== $model->customerCorporate->mainAddress->externalId) {
    $jsonData["customerCorporate"]["mainAddress"]["externalId"] = $model->customerCorporate->mainAddress->externalId;
}
if (null !== $model->customerCorporate->mainAddress->name) {
    $jsonData["customerCorporate"]["mainAddress"]["name"] = $model->customerCorporate->mainAddress->name;
}

if (0 === \count($jsonData["customerCorporate"]["mainAddress"])) {
    $jsonData["customerCorporate"]["mainAddress"] = $emptyObject;
}

}
if (null !== $model->customerCorporate->createdAt) {
    $jsonData["customerCorporate"]["createdAt"] = $model->customerCorporate->createdAt->format('Y-m-d H:i:s');;
}
if (null !== $model->customerCorporate->managerId) {
    $jsonData["customerCorporate"]["managerId"] = $model->customerCorporate->managerId;
}
if (null !== $model->customerCorporate->source) {
    $jsonData["customerCorporate"]["source"] = [];
if (null !== $model->customerCorporate->source->source) {
    $jsonData["customerCorporate"]["source"]["source"] = $model->customerCorporate->source->source;
}
if (null !== $model->customerCorporate->source->medium) {
    $jsonData["customerCorporate"]["source"]["medium"] = $model->customerCorporate->source->medium;
}
if (null !== $model->customerCorporate->source->campaign) {
    $jsonData["customerCorporate"]["source"]["campaign"] = $model->customerCorporate->source->campaign;
}
if (null !== $model->customerCorporate->source->keyword) {
    $jsonData["customerCorporate"]["source"]["keyword"] = $model->customerCorporate->source->keyword;
}
if (null !== $model->customerCorporate->source->content) {
    $jsonData["customerCorporate"]["source"]["content"] = $model->customerCorporate->source->content;
}

if (0 === \count($jsonData["customerCorporate"]["source"])) {
    $jsonData["customerCorporate"]["source"] = $emptyObject;
}

}
if (null !== $model->customerCorporate->customerContacts) {
    $jsonData["customerCorporate"]["customerContacts"] = [];
foreach (array_keys($model->customerCorporate->customerContacts) as $index41) {
    $jsonData["customerCorporate"]["customerContacts"][$index41] = [];
if (null !== $model->customerCorporate->customerContacts[$index41]->id) {
    $jsonData["customerCorporate"]["customerContacts"][$index41]["id"] = $model->customerCorporate->customerContacts[$index41]->id;
}
if (null !== $model->customerCorporate->customerContacts[$index41]->isMain) {
    $jsonData["customerCorporate"]["customerContacts"][$index41]["isMain"] = $model->customerCorporate->customerContacts[$index41]->isMain;
}
if (null !== $model->customerCorporate->customerContacts[$index41]->customer) {
    $jsonData["customerCorporate"]["customerContacts"][$index41]["customer"] = [];
if (null !== $model->customerCorporate->customerContacts[$index41]->customer->id) {
    $jsonData["customerCorporate"]["customerContacts"][$index41]["customer"]["id"] = $model->customerCorporate->customerContacts[$index41]->customer->id;
}
if (null !== $model->customerCorporate->customerContacts[$index41]->customer->externalId) {
    $jsonData["customerCorporate"]["customerContacts"][$index41]["customer"]["externalId"] = $model->customerCorporate->customerContacts[$index41]->customer->externalId;
}
if (null !== $model->customerCorporate->customerContacts[$index41]->customer->browserId) {
    $jsonData["customerCorporate"]["customerContacts"][$index41]["customer"]["browserId"] = $model->customerCorporate->customerContacts[$index41]->customer->browserId;
}
if (null !== $model->customerCorporate->customerContacts[$index41]->customer->site) {
    $jsonData["customerCorporate"]["customerContacts"][$index41]["customer"]["site"] = $model->customerCorporate->customerContacts[$index41]->customer->site;
}
if (null !== $model->customerCorporate->customerContacts[$index41]->customer->companies) {
    $jsonData["customerCorporate"]["customerContacts"][$index41]["customer"]["companies"] = [];
foreach (array_keys($model->customerCorporate->customerContacts[$index41]->customer->companies) as $index76) {
    $jsonData["customerCorporate"]["customerContacts"][$index41]["customer"]["companies"][$index76] = [];
if (null !== $model->customerCorporate->customerContacts[$index41]->customer->companies[$index76]->id) {
    $jsonData["customerCorporate"]["customerContacts"][$index41]["customer"]["companies"][$index76]["id"] = $model->customerCorporate->customerContacts[$index41]->customer->companies[$index76]->id;
}
if (null !== $model->customerCorporate->customerContacts[$index41]->customer->companies[$index76]->externalId) {
    $jsonData["customerCorporate"]["customerContacts"][$index41]["customer"]["companies"][$index76]["externalId"] = $model->customerCorporate->customerContacts[$index41]->customer->companies[$index76]->externalId;
}
if (null !== $model->customerCorporate->customerContacts[$index41]->customer->companies[$index76]->company) {
    $jsonData["customerCorporate"]["customerContacts"][$index41]["customer"]["companies"][$index76]["company"] = [];
if (null !== $model->customerCorporate->customerContacts[$index41]->customer->companies[$index76]->company->id) {
    $jsonData["customerCorporate"]["customerContacts"][$index41]["customer"]["companies"][$index76]["company"]["id"] = $model->customerCorporate->customerContacts[$index41]->customer->companies[$index76]->company->id;
}
if (null !== $model->customerCorporate->customerContacts[$index41]->customer->companies[$index76]->company->externalId) {
    $jsonData["customerCorporate"]["customerContacts"][$index41]["customer"]["companies"][$index76]["company"]["externalId"] = $model->customerCorporate->customerContacts[$index41]->customer->companies[$index76]->company->externalId;
}
if (null !== $model->customerCorporate->customerContacts[$index41]->customer->companies[$index76]->company->name) {
    $jsonData["customerCorporate"]["customerContacts"][$index41]["customer"]["companies"][$index76]["company"]["name"] = $model->customerCorporate->customerContacts[$index41]->customer->companies[$index76]->company->name;
}

if (0 === \count($jsonData["customerCorporate"]["customerContacts"][$index41]["customer"]["companies"][$index76]["company"])) {
    $jsonData["customerCorporate"]["customerContacts"][$index41]["customer"]["companies"][$index76]["company"] = $emptyObject;
}

}

if (0 === \count($jsonData["customerCorporate"]["customerContacts"][$index41]["customer"]["companies"][$index76])) {
    $jsonData["customerCorporate"]["customerContacts"][$index41]["customer"]["companies"][$index76] = $emptyObject;
}

}

}

if (0 === \count($jsonData["customerCorporate"]["customerContacts"][$index41]["customer"])) {
    $jsonData["customerCorporate"]["customerContacts"][$index41]["customer"] = $emptyObject;
}

}
if (null !== $model->customerCorporate->customerContacts[$index41]->companies) {
    $jsonData["customerCorporate"]["customerContacts"][$index41]["companies"] = [];
foreach (array_keys($model->customerCorporate->customerContacts[$index41]->companies) as $index64) {
    $jsonData["customerCorporate"]["customerContacts"][$index41]["companies"][$index64] = [];
if (null !== $model->customerCorporate->customerContacts[$index41]->companies[$index64]->id) {
    $jsonData["customerCorporate"]["customerContacts"][$index41]["companies"][$index64]["id"] = $model->customerCorporate->customerContacts[$index41]->companies[$index64]->id;
}
if (null !== $model->customerCorporate->customerContacts[$index41]->companies[$index64]->externalId) {
    $jsonData["customerCorporate"]["customerContacts"][$index41]["companies"][$index64]["externalId"] = $model->customerCorporate->customerContacts[$index41]->companies[$index64]->externalId;
}
if (null !== $model->customerCorporate->customerContacts[$index41]->companies[$index64]->company) {
    $jsonData["customerCorporate"]["customerContacts"][$index41]["companies"][$index64]["company"] = [];
if (null !== $model->customerCorporate->customerContacts[$index41]->companies[$index64]->company->id) {
    $jsonData["customerCorporate"]["customerContacts"][$index41]["companies"][$index64]["company"]["id"] = $model->customerCorporate->customerContacts[$index41]->companies[$index64]->company->id;
}
if (null !== $model->customerCorporate->customerContacts[$index41]->companies[$index64]->company->externalId) {
    $jsonData["customerCorporate"]["customerContacts"][$index41]["companies"][$index64]["company"]["externalId"] = $model->customerCorporate->customerContacts[$index41]->companies[$index64]->company->externalId;
}
if (null !== $model->customerCorporate->customerContacts[$index41]->companies[$index64]->company->name) {
    $jsonData["customerCorporate"]["customerContacts"][$index41]["companies"][$index64]["company"]["name"] = $model->customerCorporate->customerContacts[$index41]->companies[$index64]->company->name;
}

if (0 === \count($jsonData["customerCorporate"]["customerContacts"][$index41]["companies"][$index64]["company"])) {
    $jsonData["customerCorporate"]["customerContacts"][$index41]["companies"][$index64]["company"] = $emptyObject;
}

}

if (0 === \count($jsonData["customerCorporate"]["customerContacts"][$index41]["companies"][$index64])) {
    $jsonData["customerCorporate"]["customerContacts"][$index41]["companies"][$index64] = $emptyObject;
}

}

}

if (0 === \count($jsonData["customerCorporate"]["customerContacts"][$index41])) {
    $jsonData["customerCorporate"]["customerContacts"][$index41] = $emptyObject;
}

}

}
if (null !== $model->customerCorporate->companies) {
    $jsonData["customerCorporate"]["companies"] = [];
foreach (array_keys($model->customerCorporate->companies) as $index34) {
    $jsonData["customerCorporate"]["companies"][$index34] = [];
if (null !== $model->customerCorporate->companies[$index34]->id) {
    $jsonData["customerCorporate"]["companies"][$index34]["id"] = $model->customerCorporate->companies[$index34]->id;
}
if (null !== $model->customerCorporate->companies[$index34]->isMain) {
    $jsonData["customerCorporate"]["companies"][$index34]["isMain"] = $model->customerCorporate->companies[$index34]->isMain;
}
if (null !== $model->customerCorporate->companies[$index34]->externalId) {
    $jsonData["customerCorporate"]["companies"][$index34]["externalId"] = $model->customerCorporate->companies[$index34]->externalId;
}
if (null !== $model->customerCorporate->companies[$index34]->active) {
    $jsonData["customerCorporate"]["companies"][$index34]["active"] = $model->customerCorporate->companies[$index34]->active;
}
if (null !== $model->customerCorporate->companies[$index34]->name) {
    $jsonData["customerCorporate"]["companies"][$index34]["name"] = $model->customerCorporate->companies[$index34]->name;
}
if (null !== $model->customerCorporate->companies[$index34]->brand) {
    $jsonData["customerCorporate"]["companies"][$index34]["brand"] = $model->customerCorporate->companies[$index34]->brand;
}
if (null !== $model->customerCorporate->companies[$index34]->site) {
    $jsonData["customerCorporate"]["companies"][$index34]["site"] = $model->customerCorporate->companies[$index34]->site;
}
if (null !== $model->customerCorporate->companies[$index34]->createdAt) {
    $jsonData["customerCorporate"]["companies"][$index34]["createdAt"] = $model->customerCorporate->companies[$index34]->createdAt->format('Y-m-d H:i:s');;
}
if (null !== $model->customerCorporate->companies[$index34]->customer) {
    $jsonData["customerCorporate"]["companies"][$index34]["customer"] = [];
if (null !== $model->customerCorporate->companies[$index34]->customer->site) {
    $jsonData["customerCorporate"]["companies"][$index34]["customer"]["site"] = $model->customerCorporate->companies[$index34]->customer->site;
}
if (null !== $model->customerCorporate->companies[$index34]->customer->id) {
    $jsonData["customerCorporate"]["companies"][$index34]["customer"]["id"] = $model->customerCorporate->companies[$index34]->customer->id;
}
if (null !== $model->customerCorporate->companies[$index34]->customer->externalId) {
    $jsonData["customerCorporate"]["companies"][$index34]["customer"]["externalId"] = $model->customerCorporate->companies[$index34]->customer->externalId;
}
if (null !== $model->customerCorporate->companies[$index34]->customer->type) {
    $jsonData["customerCorporate"]["companies"][$index34]["customer"]["type"] = $model->customerCorporate->companies[$index34]->customer->type;
}

if (0 === \count($jsonData["customerCorporate"]["companies"][$index34]["customer"])) {
    $jsonData["customerCorporate"]["companies"][$index34]["customer"] = $emptyObject;
}

}
if (null !== $model->customerCorporate->companies[$index34]->contragent) {
    $jsonData["customerCorporate"]["companies"][$index34]["contragent"] = [];
if (null !== $model->customerCorporate->companies[$index34]->contragent->contragentType) {
    $jsonData["customerCorporate"]["companies"][$index34]["contragent"]["contragentType"] = $model->customerCorporate->companies[$index34]->contragent->contragentType;
}
if (null !== $model->customerCorporate->companies[$index34]->contragent->legalName) {
    $jsonData["customerCorporate"]["companies"][$index34]["contragent"]["legalName"] = $model->customerCorporate->companies[$index34]->contragent->legalName;
}
if (null !== $model->customerCorporate->companies[$index34]->contragent->legalAddress) {
    $jsonData["customerCorporate"]["companies"][$index34]["contragent"]["legalAddress"] = $model->customerCorporate->companies[$index34]->contragent->legalAddress;
}
if (null !== $model->customerCorporate->companies[$index34]->contragent->INN) {
    $jsonData["customerCorporate"]["companies"][$index34]["contragent"]["INN"] = $model->customerCorporate->companies[$index34]->contragent->INN;
}
if (null !== $model->customerCorporate->companies[$index34]->contragent->OKPO) {
    $jsonData["customerCorporate"]["companies"][$index34]["contragent"]["OKPO"] = $model->customerCorporate->companies[$index34]->contragent->OKPO;
}
if (null !== $model->customerCorporate->companies[$index34]->contragent->KPP) {
    $jsonData["customerCorporate"]["companies"][$index34]["contragent"]["KPP"] = $model->customerCorporate->companies[$index34]->contragent->KPP;
}
if (null !== $model->customerCorporate->companies[$index34]->contragent->OGRN) {
    $jsonData["customerCorporate"]["companies"][$index34]["contragent"]["OGRN"] = $model->customerCorporate->companies[$index34]->contragent->OGRN;
}
if (null !== $model->customerCorporate->companies[$index34]->contragent->OGRNIP) {
    $jsonData["customerCorporate"]["companies"][$index34]["contragent"]["OGRNIP"] = $model->customerCorporate->companies[$index34]->contragent->OGRNIP;
}
if (null !== $model->customerCorporate->companies[$index34]->contragent->certificateNumber) {
    $jsonData["customerCorporate"]["companies"][$index34]["contragent"]["certificateNumber"] = $model->customerCorporate->companies[$index34]->contragent->certificateNumber;
}
if (null !== $model->customerCorporate->companies[$index34]->contragent->certificateDate) {
    $jsonData["customerCorporate"]["companies"][$index34]["contragent"]["certificateDate"] = $model->customerCorporate->companies[$index34]->contragent->certificateDate->format('Y-m-d H:i:s');;
}
if (null !== $model->customerCorporate->companies[$index34]->contragent->BIK) {
    $jsonData["customerCorporate"]["companies"][$index34]["contragent"]["BIK"] = $model->customerCorporate->companies[$index34]->contragent->BIK;
}
if (null !== $model->customerCorporate->companies[$index34]->contragent->bank) {
    $jsonData["customerCorporate"]["companies"][$index34]["contragent"]["bank"] = $model->customerCorporate->companies[$index34]->contragent->bank;
}
if (null !== $model->customerCorporate->companies[$index34]->contragent->bankAddress) {
    $jsonData["customerCorporate"]["companies"][$index34]["contragent"]["bankAddress"] = $model->customerCorporate->companies[$index34]->contragent->bankAddress;
}
if (null !== $model->customerCorporate->companies[$index34]->contragent->corrAccount) {
    $jsonData["customerCorporate"]["companies"][$index34]["contragent"]["corrAccount"] = $model->customerCorporate->companies[$index34]->contragent->corrAccount;
}
if (null !== $model->customerCorporate->companies[$index34]->contragent->bankAccount) {
    $jsonData["customerCorporate"]["companies"][$index34]["contragent"]["bankAccount"] = $model->customerCorporate->companies[$index34]->contragent->bankAccount;
}

if (0 === \count($jsonData["customerCorporate"]["companies"][$index34]["contragent"])) {
    $jsonData["customerCorporate"]["companies"][$index34]["contragent"] = $emptyObject;
}

}
if (null !== $model->customerCorporate->companies[$index34]->address) {
    $jsonData["customerCorporate"]["companies"][$index34]["address"] = [];
if (null !== $model->customerCorporate->companies[$index34]->address->id) {
    $jsonData["customerCorporate"]["companies"][$index34]["address"]["id"] = $model->customerCorporate->companies[$index34]->address->id;
}
if (null !== $model->customerCorporate->companies[$index34]->address->name) {
    $jsonData["customerCorporate"]["companies"][$index34]["address"]["name"] = $model->customerCorporate->companies[$index34]->address->name;
}
if (null !== $model->customerCorporate->companies[$index34]->address->isMain) {
    $jsonData["customerCorporate"]["companies"][$index34]["address"]["isMain"] = $model->customerCorporate->companies[$index34]->address->isMain;
}
if (null !== $model->customerCorporate->companies[$index34]->address->index) {
    $jsonData["customerCorporate"]["companies"][$index34]["address"]["index"] = $model->customerCorporate->companies[$index34]->address->index;
}
if (null !== $model->customerCorporate->companies[$index34]->address->countryIso) {
    $jsonData["customerCorporate"]["companies"][$index34]["address"]["countryIso"] = $model->customerCorporate->companies[$index34]->address->countryIso;
}
if (null !== $model->customerCorporate->companies[$index34]->address->region) {
    $jsonData["customerCorporate"]["companies"][$index34]["address"]["region"] = $model->customerCorporate->companies[$index34]->address->region;
}
if (null !== $model->customerCorporate->companies[$index34]->address->regionId) {
    $jsonData["customerCorporate"]["companies"][$index34]["address"]["regionId"] = $model->customerCorporate->companies[$index34]->address->regionId;
}
if (null !== $model->customerCorporate->companies[$index34]->address->city) {
    $jsonData["customerCorporate"]["companies"][$index34]["address"]["city"] = $model->customerCorporate->companies[$index34]->address->city;
}
if (null !== $model->customerCorporate->companies[$index34]->address->cityId) {
    $jsonData["customerCorporate"]["companies"][$index34]["address"]["cityId"] = $model->customerCorporate->companies[$index34]->address->cityId;
}
if (null !== $model->customerCorporate->companies[$index34]->address->cityType) {
    $jsonData["customerCorporate"]["companies"][$index34]["address"]["cityType"] = $model->customerCorporate->companies[$index34]->address->cityType;
}
if (null !== $model->customerCorporate->companies[$index34]->address->street) {
    $jsonData["customerCorporate"]["companies"][$index34]["address"]["street"] = $model->customerCorporate->companies[$index34]->address->street;
}
if (null !== $model->customerCorporate->companies[$index34]->address->streetId) {
    $jsonData["customerCorporate"]["companies"][$index34]["address"]["streetId"] = $model->customerCorporate->companies[$index34]->address->streetId;
}
if (null !== $model->customerCorporate->companies[$index34]->address->streetType) {
    $jsonData["customerCorporate"]["companies"][$index34]["address"]["streetType"] = $model->customerCorporate->companies[$index34]->address->streetType;
}
if (null !== $model->customerCorporate->companies[$index34]->address->building) {
    $jsonData["customerCorporate"]["companies"][$index34]["address"]["building"] = $model->customerCorporate->companies[$index34]->address->building;
}
if (null !== $model->customerCorporate->companies[$index34]->address->flat) {
    $jsonData["customerCorporate"]["companies"][$index34]["address"]["flat"] = $model->customerCorporate->companies[$index34]->address->flat;
}
if (null !== $model->customerCorporate->companies[$index34]->address->floor) {
    $jsonData["customerCorporate"]["companies"][$index34]["address"]["floor"] = $model->customerCorporate->companies[$index34]->address->floor;
}
if (null !== $model->customerCorporate->companies[$index34]->address->block) {
    $jsonData["customerCorporate"]["companies"][$index34]["address"]["block"] = $model->customerCorporate->companies[$index34]->address->block;
}
if (null !== $model->customerCorporate->companies[$index34]->address->house) {
    $jsonData["customerCorporate"]["companies"][$index34]["address"]["house"] = $model->customerCorporate->companies[$index34]->address->house;
}
if (null !== $model->customerCorporate->companies[$index34]->address->housing) {
    $jsonData["customerCorporate"]["companies"][$index34]["address"]["housing"] = $model->customerCorporate->companies[$index34]->address->housing;
}
if (null !== $model->customerCorporate->companies[$index34]->address->metro) {
    $jsonData["customerCorporate"]["companies"][$index34]["address"]["metro"] = $model->customerCorporate->companies[$index34]->address->metro;
}
if (null !== $model->customerCorporate->companies[$index34]->address->notes) {
    $jsonData["customerCorporate"]["companies"][$index34]["address"]["notes"] = $model->customerCorporate->companies[$index34]->address->notes;
}
if (null !== $model->customerCorporate->companies[$index34]->address->text) {
    $jsonData["customerCorporate"]["companies"][$index34]["address"]["text"] = $model->customerCorporate->companies[$index34]->address->text;
}
if (null !== $model->customerCorporate->companies[$index34]->address->externalId) {
    $jsonData["customerCorporate"]["companies"][$index34]["address"]["externalId"] = $model->customerCorporate->companies[$index34]->address->externalId;
}

if (0 === \count($jsonData["customerCorporate"]["companies"][$index34]["address"])) {
    $jsonData["customerCorporate"]["companies"][$index34]["address"] = $emptyObject;
}

}
if (null !== $model->customerCorporate->companies[$index34]->customFields) {
    $jsonData["customerCorporate"]["companies"][$index34]["customFields"] = [];
foreach (array_keys($model->customerCorporate->companies[$index34]->customFields) as $index60) {
    $jsonData["customerCorporate"]["companies"][$index34]["customFields"] = $model->customerCorporate->companies[$index34]->customFields;
}

}
if (null !== $model->customerCorporate->companies[$index34]->marginSumm) {
    $jsonData["customerCorporate"]["companies"][$index34]["marginSumm"] = $model->customerCorporate->companies[$index34]->marginSumm;
}
if (null !== $model->customerCorporate->companies[$index34]->totalSumm) {
    $jsonData["customerCorporate"]["companies"][$index34]["totalSumm"] = $model->customerCorporate->companies[$index34]->totalSumm;
}
if (null !== $model->customerCorporate->companies[$index34]->averageSumm) {
    $jsonData["customerCorporate"]["companies"][$index34]["averageSumm"] = $model->customerCorporate->companies[$index34]->averageSumm;
}
if (null !== $model->customerCorporate->companies[$index34]->ordersCount) {
    $jsonData["customerCorporate"]["companies"][$index34]["ordersCount"] = $model->customerCorporate->companies[$index34]->ordersCount;
}
if (null !== $model->customerCorporate->companies[$index34]->costSumm) {
    $jsonData["customerCorporate"]["companies"][$index34]["costSumm"] = $model->customerCorporate->companies[$index34]->costSumm;
}

if (0 === \count($jsonData["customerCorporate"]["companies"][$index34])) {
    $jsonData["customerCorporate"]["companies"][$index34] = $emptyObject;
}

}

}
if (null !== $model->customerCorporate->addresses) {
    $jsonData["customerCorporate"]["addresses"] = [];
foreach (array_keys($model->customerCorporate->addresses) as $index34) {
    $jsonData["customerCorporate"]["addresses"][$index34] = [];
if (null !== $model->customerCorporate->addresses[$index34]->id) {
    $jsonData["customerCorporate"]["addresses"][$index34]["id"] = $model->customerCorporate->addresses[$index34]->id;
}
if (null !== $model->customerCorporate->addresses[$index34]->name) {
    $jsonData["customerCorporate"]["addresses"][$index34]["name"] = $model->customerCorporate->addresses[$index34]->name;
}
if (null !== $model->customerCorporate->addresses[$index34]->isMain) {
    $jsonData["customerCorporate"]["addresses"][$index34]["isMain"] = $model->customerCorporate->addresses[$index34]->isMain;
}
if (null !== $model->customerCorporate->addresses[$index34]->index) {
    $jsonData["customerCorporate"]["addresses"][$index34]["index"] = $model->customerCorporate->addresses[$index34]->index;
}
if (null !== $model->customerCorporate->addresses[$index34]->countryIso) {
    $jsonData["customerCorporate"]["addresses"][$index34]["countryIso"] = $model->customerCorporate->addresses[$index34]->countryIso;
}
if (null !== $model->customerCorporate->addresses[$index34]->region) {
    $jsonData["customerCorporate"]["addresses"][$index34]["region"] = $model->customerCorporate->addresses[$index34]->region;
}
if (null !== $model->customerCorporate->addresses[$index34]->regionId) {
    $jsonData["customerCorporate"]["addresses"][$index34]["regionId"] = $model->customerCorporate->addresses[$index34]->regionId;
}
if (null !== $model->customerCorporate->addresses[$index34]->city) {
    $jsonData["customerCorporate"]["addresses"][$index34]["city"] = $model->customerCorporate->addresses[$index34]->city;
}
if (null !== $model->customerCorporate->addresses[$index34]->cityId) {
    $jsonData["customerCorporate"]["addresses"][$index34]["cityId"] = $model->customerCorporate->addresses[$index34]->cityId;
}
if (null !== $model->customerCorporate->addresses[$index34]->cityType) {
    $jsonData["customerCorporate"]["addresses"][$index34]["cityType"] = $model->customerCorporate->addresses[$index34]->cityType;
}
if (null !== $model->customerCorporate->addresses[$index34]->street) {
    $jsonData["customerCorporate"]["addresses"][$index34]["street"] = $model->customerCorporate->addresses[$index34]->street;
}
if (null !== $model->customerCorporate->addresses[$index34]->streetId) {
    $jsonData["customerCorporate"]["addresses"][$index34]["streetId"] = $model->customerCorporate->addresses[$index34]->streetId;
}
if (null !== $model->customerCorporate->addresses[$index34]->streetType) {
    $jsonData["customerCorporate"]["addresses"][$index34]["streetType"] = $model->customerCorporate->addresses[$index34]->streetType;
}
if (null !== $model->customerCorporate->addresses[$index34]->building) {
    $jsonData["customerCorporate"]["addresses"][$index34]["building"] = $model->customerCorporate->addresses[$index34]->building;
}
if (null !== $model->customerCorporate->addresses[$index34]->flat) {
    $jsonData["customerCorporate"]["addresses"][$index34]["flat"] = $model->customerCorporate->addresses[$index34]->flat;
}
if (null !== $model->customerCorporate->addresses[$index34]->floor) {
    $jsonData["customerCorporate"]["addresses"][$index34]["floor"] = $model->customerCorporate->addresses[$index34]->floor;
}
if (null !== $model->customerCorporate->addresses[$index34]->block) {
    $jsonData["customerCorporate"]["addresses"][$index34]["block"] = $model->customerCorporate->addresses[$index34]->block;
}
if (null !== $model->customerCorporate->addresses[$index34]->house) {
    $jsonData["customerCorporate"]["addresses"][$index34]["house"] = $model->customerCorporate->addresses[$index34]->house;
}
if (null !== $model->customerCorporate->addresses[$index34]->housing) {
    $jsonData["customerCorporate"]["addresses"][$index34]["housing"] = $model->customerCorporate->addresses[$index34]->housing;
}
if (null !== $model->customerCorporate->addresses[$index34]->metro) {
    $jsonData["customerCorporate"]["addresses"][$index34]["metro"] = $model->customerCorporate->addresses[$index34]->metro;
}
if (null !== $model->customerCorporate->addresses[$index34]->notes) {
    $jsonData["customerCorporate"]["addresses"][$index34]["notes"] = $model->customerCorporate->addresses[$index34]->notes;
}
if (null !== $model->customerCorporate->addresses[$index34]->text) {
    $jsonData["customerCorporate"]["addresses"][$index34]["text"] = $model->customerCorporate->addresses[$index34]->text;
}
if (null !== $model->customerCorporate->addresses[$index34]->externalId) {
    $jsonData["customerCorporate"]["addresses"][$index34]["externalId"] = $model->customerCorporate->addresses[$index34]->externalId;
}

if (0 === \count($jsonData["customerCorporate"]["addresses"][$index34])) {
    $jsonData["customerCorporate"]["addresses"][$index34] = $emptyObject;
}

}

}
if (null !== $model->customerCorporate->vip) {
    $jsonData["customerCorporate"]["vip"] = $model->customerCorporate->vip;
}
if (null !== $model->customerCorporate->bad) {
    $jsonData["customerCorporate"]["bad"] = $model->customerCorporate->bad;
}
if (null !== $model->customerCorporate->site) {
    $jsonData["customerCorporate"]["site"] = $model->customerCorporate->site;
}
if (null !== $model->customerCorporate->tags) {
    $jsonData["customerCorporate"]["tags"] = [];
foreach (array_keys($model->customerCorporate->tags) as $index29) {
    $jsonData["customerCorporate"]["tags"][$index29] = [];
if (null !== $model->customerCorporate->tags[$index29]->name) {
    $jsonData["customerCorporate"]["tags"][$index29]["name"] = $model->customerCorporate->tags[$index29]->name;
}
if (null !== $model->customerCorporate->tags[$index29]->color) {
    $jsonData["customerCorporate"]["tags"][$index29]["color"] = $model->customerCorporate->tags[$index29]->color;
}
if (null !== $model->customerCorporate->tags[$index29]->attached) {
    $jsonData["customerCorporate"]["tags"][$index29]["attached"] = $model->customerCorporate->tags[$index29]->attached;
}

if (0 === \count($jsonData["customerCorporate"]["tags"][$index29])) {
    $jsonData["customerCorporate"]["tags"][$index29] = $emptyObject;
}

}

}
if (null !== $model->customerCorporate->avgMarginSumm) {
    $jsonData["customerCorporate"]["avgMarginSumm"] = $model->customerCorporate->avgMarginSumm;
}
if (null !== $model->customerCorporate->marginSumm) {
    $jsonData["customerCorporate"]["marginSumm"] = $model->customerCorporate->marginSumm;
}
if (null !== $model->customerCorporate->totalSumm) {
    $jsonData["customerCorporate"]["totalSumm"] = $model->customerCorporate->totalSumm;
}
if (null !== $model->customerCorporate->averageSumm) {
    $jsonData["customerCorporate"]["averageSumm"] = $model->customerCorporate->averageSumm;
}
if (null !== $model->customerCorporate->ordersCount) {
    $jsonData["customerCorporate"]["ordersCount"] = $model->customerCorporate->ordersCount;
}
if (null !== $model->customerCorporate->costSumm) {
    $jsonData["customerCorporate"]["costSumm"] = $model->customerCorporate->costSumm;
}
if (null !== $model->customerCorporate->customFields) {
    $jsonData["customerCorporate"]["customFields"] = [];
foreach (array_keys($model->customerCorporate->customFields) as $index37) {
    $jsonData["customerCorporate"]["customFields"] = $model->customerCorporate->customFields;
}

}
if (null !== $model->customerCorporate->personalDiscount) {
    $jsonData["customerCorporate"]["personalDiscount"] = $model->customerCorporate->personalDiscount;
}
if (null !== $model->customerCorporate->cumulativeDiscount) {
    $jsonData["customerCorporate"]["cumulativeDiscount"] = $model->customerCorporate->cumulativeDiscount;
}
if (null !== $model->customerCorporate->discountCardNumber) {
    $jsonData["customerCorporate"]["discountCardNumber"] = $model->customerCorporate->discountCardNumber;
}
if (null !== $model->customerCorporate->firstClientId) {
    $jsonData["customerCorporate"]["firstClientId"] = $model->customerCorporate->firstClientId;
}
if (null !== $model->customerCorporate->lastClientId) {
    $jsonData["customerCorporate"]["lastClientId"] = $model->customerCorporate->lastClientId;
}
if (null !== $model->customerCorporate->mainCustomerContact) {
    $jsonData["customerCorporate"]["mainCustomerContact"] = [];
if (null !== $model->customerCorporate->mainCustomerContact->id) {
    $jsonData["customerCorporate"]["mainCustomerContact"]["id"] = $model->customerCorporate->mainCustomerContact->id;
}
if (null !== $model->customerCorporate->mainCustomerContact->isMain) {
    $jsonData["customerCorporate"]["mainCustomerContact"]["isMain"] = $model->customerCorporate->mainCustomerContact->isMain;
}
if (null !== $model->customerCorporate->mainCustomerContact->customer) {
    $jsonData["customerCorporate"]["mainCustomerContact"]["customer"] = [];
if (null !== $model->customerCorporate->mainCustomerContact->customer->id) {
    $jsonData["customerCorporate"]["mainCustomerContact"]["customer"]["id"] = $model->customerCorporate->mainCustomerContact->customer->id;
}
if (null !== $model->customerCorporate->mainCustomerContact->customer->externalId) {
    $jsonData["customerCorporate"]["mainCustomerContact"]["customer"]["externalId"] = $model->customerCorporate->mainCustomerContact->customer->externalId;
}
if (null !== $model->customerCorporate->mainCustomerContact->customer->browserId) {
    $jsonData["customerCorporate"]["mainCustomerContact"]["customer"]["browserId"] = $model->customerCorporate->mainCustomerContact->customer->browserId;
}
if (null !== $model->customerCorporate->mainCustomerContact->customer->site) {
    $jsonData["customerCorporate"]["mainCustomerContact"]["customer"]["site"] = $model->customerCorporate->mainCustomerContact->customer->site;
}
if (null !== $model->customerCorporate->mainCustomerContact->customer->companies) {
    $jsonData["customerCorporate"]["mainCustomerContact"]["customer"]["companies"] = [];
foreach (array_keys($model->customerCorporate->mainCustomerContact->customer->companies) as $index69) {
    $jsonData["customerCorporate"]["mainCustomerContact"]["customer"]["companies"][$index69] = [];
if (null !== $model->customerCorporate->mainCustomerContact->customer->companies[$index69]->id) {
    $jsonData["customerCorporate"]["mainCustomerContact"]["customer"]["companies"][$index69]["id"] = $model->customerCorporate->mainCustomerContact->customer->companies[$index69]->id;
}
if (null !== $model->customerCorporate->mainCustomerContact->customer->companies[$index69]->externalId) {
    $jsonData["customerCorporate"]["mainCustomerContact"]["customer"]["companies"][$index69]["externalId"] = $model->customerCorporate->mainCustomerContact->customer->companies[$index69]->externalId;
}
if (null !== $model->customerCorporate->mainCustomerContact->customer->companies[$index69]->company) {
    $jsonData["customerCorporate"]["mainCustomerContact"]["customer"]["companies"][$index69]["company"] = [];
if (null !== $model->customerCorporate->mainCustomerContact->customer->companies[$index69]->company->id) {
    $jsonData["customerCorporate"]["mainCustomerContact"]["customer"]["companies"][$index69]["company"]["id"] = $model->customerCorporate->mainCustomerContact->customer->companies[$index69]->company->id;
}
if (null !== $model->customerCorporate->mainCustomerContact->customer->companies[$index69]->company->externalId) {
    $jsonData["customerCorporate"]["mainCustomerContact"]["customer"]["companies"][$index69]["company"]["externalId"] = $model->customerCorporate->mainCustomerContact->customer->companies[$index69]->company->externalId;
}
if (null !== $model->customerCorporate->mainCustomerContact->customer->companies[$index69]->company->name) {
    $jsonData["customerCorporate"]["mainCustomerContact"]["customer"]["companies"][$index69]["company"]["name"] = $model->customerCorporate->mainCustomerContact->customer->companies[$index69]->company->name;
}

if (0 === \count($jsonData["customerCorporate"]["mainCustomerContact"]["customer"]["companies"][$index69]["company"])) {
    $jsonData["customerCorporate"]["mainCustomerContact"]["customer"]["companies"][$index69]["company"] = $emptyObject;
}

}

if (0 === \count($jsonData["customerCorporate"]["mainCustomerContact"]["customer"]["companies"][$index69])) {
    $jsonData["customerCorporate"]["mainCustomerContact"]["customer"]["companies"][$index69] = $emptyObject;
}

}

}

if (0 === \count($jsonData["customerCorporate"]["mainCustomerContact"]["customer"])) {
    $jsonData["customerCorporate"]["mainCustomerContact"]["customer"] = $emptyObject;
}

}
if (null !== $model->customerCorporate->mainCustomerContact->companies) {
    $jsonData["customerCorporate"]["mainCustomerContact"]["companies"] = [];
foreach (array_keys($model->customerCorporate->mainCustomerContact->companies) as $index57) {
    $jsonData["customerCorporate"]["mainCustomerContact"]["companies"][$index57] = [];
if (null !== $model->customerCorporate->mainCustomerContact->companies[$index57]->id) {
    $jsonData["customerCorporate"]["mainCustomerContact"]["companies"][$index57]["id"] = $model->customerCorporate->mainCustomerContact->companies[$index57]->id;
}
if (null !== $model->customerCorporate->mainCustomerContact->companies[$index57]->externalId) {
    $jsonData["customerCorporate"]["mainCustomerContact"]["companies"][$index57]["externalId"] = $model->customerCorporate->mainCustomerContact->companies[$index57]->externalId;
}
if (null !== $model->customerCorporate->mainCustomerContact->companies[$index57]->company) {
    $jsonData["customerCorporate"]["mainCustomerContact"]["companies"][$index57]["company"] = [];
if (null !== $model->customerCorporate->mainCustomerContact->companies[$index57]->company->id) {
    $jsonData["customerCorporate"]["mainCustomerContact"]["companies"][$index57]["company"]["id"] = $model->customerCorporate->mainCustomerContact->companies[$index57]->company->id;
}
if (null !== $model->customerCorporate->mainCustomerContact->companies[$index57]->company->externalId) {
    $jsonData["customerCorporate"]["mainCustomerContact"]["companies"][$index57]["company"]["externalId"] = $model->customerCorporate->mainCustomerContact->companies[$index57]->company->externalId;
}
if (null !== $model->customerCorporate->mainCustomerContact->companies[$index57]->company->name) {
    $jsonData["customerCorporate"]["mainCustomerContact"]["companies"][$index57]["company"]["name"] = $model->customerCorporate->mainCustomerContact->companies[$index57]->company->name;
}

if (0 === \count($jsonData["customerCorporate"]["mainCustomerContact"]["companies"][$index57]["company"])) {
    $jsonData["customerCorporate"]["mainCustomerContact"]["companies"][$index57]["company"] = $emptyObject;
}

}

if (0 === \count($jsonData["customerCorporate"]["mainCustomerContact"]["companies"][$index57])) {
    $jsonData["customerCorporate"]["mainCustomerContact"]["companies"][$index57] = $emptyObject;
}

}

}

if (0 === \count($jsonData["customerCorporate"]["mainCustomerContact"])) {
    $jsonData["customerCorporate"]["mainCustomerContact"] = $emptyObject;
}

}
if (null !== $model->customerCorporate->mainCompany) {
    $jsonData["customerCorporate"]["mainCompany"] = [];
if (null !== $model->customerCorporate->mainCompany->id) {
    $jsonData["customerCorporate"]["mainCompany"]["id"] = $model->customerCorporate->mainCompany->id;
}
if (null !== $model->customerCorporate->mainCompany->externalId) {
    $jsonData["customerCorporate"]["mainCompany"]["externalId"] = $model->customerCorporate->mainCompany->externalId;
}
if (null !== $model->customerCorporate->mainCompany->name) {
    $jsonData["customerCorporate"]["mainCompany"]["name"] = $model->customerCorporate->mainCompany->name;
}

if (0 === \count($jsonData["customerCorporate"]["mainCompany"])) {
    $jsonData["customerCorporate"]["mainCompany"] = $emptyObject;
}

}

if (0 === \count($jsonData["customerCorporate"])) {
    $jsonData["customerCorporate"] = $emptyObject;
}

}

if (0 === \count($jsonData)) {
    $jsonData = $emptyObject;
}


    return $jsonData;
}
