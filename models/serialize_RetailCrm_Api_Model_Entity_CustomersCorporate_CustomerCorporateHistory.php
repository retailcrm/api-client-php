<?php

function serialize_RetailCrm_Api_Model_Entity_CustomersCorporate_CustomerCorporateHistory(RetailCrm\Api\Model\Entity\CustomersCorporate\CustomerCorporateHistory $model, bool $useStdClass = true)
{
    $emptyHashmap = $useStdClass ? new \stdClass() : [];
    $emptyObject = $useStdClass ? new \stdClass() : [];

    $jsonData = [];
if (null !== $model->id) {
    $jsonData["id"] = $model->id;
}
if (null !== $model->createdAt) {
    $jsonData["createdAt"] = $model->createdAt->format('Y-m-d H:i:s');;
}
if (null !== $model->created) {
    $jsonData["created"] = $model->created;
}
if (null !== $model->deleted) {
    $jsonData["deleted"] = $model->deleted;
}
if (null !== $model->source) {
    $jsonData["source"] = $model->source;
}
if (null !== $model->user) {
    $jsonData["user"] = [];
if (null !== $model->user->id) {
    $jsonData["user"]["id"] = $model->user->id;
}

if (0 === \count($jsonData["user"])) {
    $jsonData["user"] = $emptyObject;
}

}
if (null !== $model->field) {
    $jsonData["field"] = $model->field;
}
if (null !== $model->oldValue) {
    $jsonData["oldValue"] = $model->oldValue;
}
if (null !== $model->newValue) {
    $jsonData["newValue"] = $model->newValue;
}
if (null !== $model->apiKey) {
    $jsonData["apiKey"] = [];
if (null !== $model->apiKey->current) {
    $jsonData["apiKey"]["current"] = $model->apiKey->current;
}

if (0 === \count($jsonData["apiKey"])) {
    $jsonData["apiKey"] = $emptyObject;
}

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
if (null !== $model->customer->nickName) {
    $jsonData["customer"]["nickName"] = $model->customer->nickName;
}
if (null !== $model->customer->mainAddress) {
    $jsonData["customer"]["mainAddress"] = [];
if (null !== $model->customer->mainAddress->id) {
    $jsonData["customer"]["mainAddress"]["id"] = $model->customer->mainAddress->id;
}
if (null !== $model->customer->mainAddress->externalId) {
    $jsonData["customer"]["mainAddress"]["externalId"] = $model->customer->mainAddress->externalId;
}
if (null !== $model->customer->mainAddress->name) {
    $jsonData["customer"]["mainAddress"]["name"] = $model->customer->mainAddress->name;
}

if (0 === \count($jsonData["customer"]["mainAddress"])) {
    $jsonData["customer"]["mainAddress"] = $emptyObject;
}

}
if (null !== $model->customer->createdAt) {
    $jsonData["customer"]["createdAt"] = $model->customer->createdAt->format('Y-m-d H:i:s');;
}
if (null !== $model->customer->managerId) {
    $jsonData["customer"]["managerId"] = $model->customer->managerId;
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
if (null !== $model->customer->customerContacts) {
    $jsonData["customer"]["customerContacts"] = [];
foreach (array_keys($model->customer->customerContacts) as $index32) {
    $jsonData["customer"]["customerContacts"][$index32] = [];
if (null !== $model->customer->customerContacts[$index32]->id) {
    $jsonData["customer"]["customerContacts"][$index32]["id"] = $model->customer->customerContacts[$index32]->id;
}
if (null !== $model->customer->customerContacts[$index32]->isMain) {
    $jsonData["customer"]["customerContacts"][$index32]["isMain"] = $model->customer->customerContacts[$index32]->isMain;
}
if (null !== $model->customer->customerContacts[$index32]->customer) {
    $jsonData["customer"]["customerContacts"][$index32]["customer"] = [];
if (null !== $model->customer->customerContacts[$index32]->customer->id) {
    $jsonData["customer"]["customerContacts"][$index32]["customer"]["id"] = $model->customer->customerContacts[$index32]->customer->id;
}
if (null !== $model->customer->customerContacts[$index32]->customer->externalId) {
    $jsonData["customer"]["customerContacts"][$index32]["customer"]["externalId"] = $model->customer->customerContacts[$index32]->customer->externalId;
}
if (null !== $model->customer->customerContacts[$index32]->customer->browserId) {
    $jsonData["customer"]["customerContacts"][$index32]["customer"]["browserId"] = $model->customer->customerContacts[$index32]->customer->browserId;
}
if (null !== $model->customer->customerContacts[$index32]->customer->site) {
    $jsonData["customer"]["customerContacts"][$index32]["customer"]["site"] = $model->customer->customerContacts[$index32]->customer->site;
}
if (null !== $model->customer->customerContacts[$index32]->customer->companies) {
    $jsonData["customer"]["customerContacts"][$index32]["customer"]["companies"] = [];
foreach (array_keys($model->customer->customerContacts[$index32]->customer->companies) as $index67) {
    $jsonData["customer"]["customerContacts"][$index32]["customer"]["companies"][$index67] = [];
if (null !== $model->customer->customerContacts[$index32]->customer->companies[$index67]->id) {
    $jsonData["customer"]["customerContacts"][$index32]["customer"]["companies"][$index67]["id"] = $model->customer->customerContacts[$index32]->customer->companies[$index67]->id;
}
if (null !== $model->customer->customerContacts[$index32]->customer->companies[$index67]->externalId) {
    $jsonData["customer"]["customerContacts"][$index32]["customer"]["companies"][$index67]["externalId"] = $model->customer->customerContacts[$index32]->customer->companies[$index67]->externalId;
}
if (null !== $model->customer->customerContacts[$index32]->customer->companies[$index67]->company) {
    $jsonData["customer"]["customerContacts"][$index32]["customer"]["companies"][$index67]["company"] = [];
if (null !== $model->customer->customerContacts[$index32]->customer->companies[$index67]->company->id) {
    $jsonData["customer"]["customerContacts"][$index32]["customer"]["companies"][$index67]["company"]["id"] = $model->customer->customerContacts[$index32]->customer->companies[$index67]->company->id;
}
if (null !== $model->customer->customerContacts[$index32]->customer->companies[$index67]->company->externalId) {
    $jsonData["customer"]["customerContacts"][$index32]["customer"]["companies"][$index67]["company"]["externalId"] = $model->customer->customerContacts[$index32]->customer->companies[$index67]->company->externalId;
}
if (null !== $model->customer->customerContacts[$index32]->customer->companies[$index67]->company->name) {
    $jsonData["customer"]["customerContacts"][$index32]["customer"]["companies"][$index67]["company"]["name"] = $model->customer->customerContacts[$index32]->customer->companies[$index67]->company->name;
}

if (0 === \count($jsonData["customer"]["customerContacts"][$index32]["customer"]["companies"][$index67]["company"])) {
    $jsonData["customer"]["customerContacts"][$index32]["customer"]["companies"][$index67]["company"] = $emptyObject;
}

}

if (0 === \count($jsonData["customer"]["customerContacts"][$index32]["customer"]["companies"][$index67])) {
    $jsonData["customer"]["customerContacts"][$index32]["customer"]["companies"][$index67] = $emptyObject;
}

}

}

if (0 === \count($jsonData["customer"]["customerContacts"][$index32]["customer"])) {
    $jsonData["customer"]["customerContacts"][$index32]["customer"] = $emptyObject;
}

}
if (null !== $model->customer->customerContacts[$index32]->companies) {
    $jsonData["customer"]["customerContacts"][$index32]["companies"] = [];
foreach (array_keys($model->customer->customerContacts[$index32]->companies) as $index55) {
    $jsonData["customer"]["customerContacts"][$index32]["companies"][$index55] = [];
if (null !== $model->customer->customerContacts[$index32]->companies[$index55]->id) {
    $jsonData["customer"]["customerContacts"][$index32]["companies"][$index55]["id"] = $model->customer->customerContacts[$index32]->companies[$index55]->id;
}
if (null !== $model->customer->customerContacts[$index32]->companies[$index55]->externalId) {
    $jsonData["customer"]["customerContacts"][$index32]["companies"][$index55]["externalId"] = $model->customer->customerContacts[$index32]->companies[$index55]->externalId;
}
if (null !== $model->customer->customerContacts[$index32]->companies[$index55]->company) {
    $jsonData["customer"]["customerContacts"][$index32]["companies"][$index55]["company"] = [];
if (null !== $model->customer->customerContacts[$index32]->companies[$index55]->company->id) {
    $jsonData["customer"]["customerContacts"][$index32]["companies"][$index55]["company"]["id"] = $model->customer->customerContacts[$index32]->companies[$index55]->company->id;
}
if (null !== $model->customer->customerContacts[$index32]->companies[$index55]->company->externalId) {
    $jsonData["customer"]["customerContacts"][$index32]["companies"][$index55]["company"]["externalId"] = $model->customer->customerContacts[$index32]->companies[$index55]->company->externalId;
}
if (null !== $model->customer->customerContacts[$index32]->companies[$index55]->company->name) {
    $jsonData["customer"]["customerContacts"][$index32]["companies"][$index55]["company"]["name"] = $model->customer->customerContacts[$index32]->companies[$index55]->company->name;
}

if (0 === \count($jsonData["customer"]["customerContacts"][$index32]["companies"][$index55]["company"])) {
    $jsonData["customer"]["customerContacts"][$index32]["companies"][$index55]["company"] = $emptyObject;
}

}

if (0 === \count($jsonData["customer"]["customerContacts"][$index32]["companies"][$index55])) {
    $jsonData["customer"]["customerContacts"][$index32]["companies"][$index55] = $emptyObject;
}

}

}

if (0 === \count($jsonData["customer"]["customerContacts"][$index32])) {
    $jsonData["customer"]["customerContacts"][$index32] = $emptyObject;
}

}

}
if (null !== $model->customer->companies) {
    $jsonData["customer"]["companies"] = [];
foreach (array_keys($model->customer->companies) as $index25) {
    $jsonData["customer"]["companies"][$index25] = [];
if (null !== $model->customer->companies[$index25]->id) {
    $jsonData["customer"]["companies"][$index25]["id"] = $model->customer->companies[$index25]->id;
}
if (null !== $model->customer->companies[$index25]->isMain) {
    $jsonData["customer"]["companies"][$index25]["isMain"] = $model->customer->companies[$index25]->isMain;
}
if (null !== $model->customer->companies[$index25]->externalId) {
    $jsonData["customer"]["companies"][$index25]["externalId"] = $model->customer->companies[$index25]->externalId;
}
if (null !== $model->customer->companies[$index25]->active) {
    $jsonData["customer"]["companies"][$index25]["active"] = $model->customer->companies[$index25]->active;
}
if (null !== $model->customer->companies[$index25]->name) {
    $jsonData["customer"]["companies"][$index25]["name"] = $model->customer->companies[$index25]->name;
}
if (null !== $model->customer->companies[$index25]->brand) {
    $jsonData["customer"]["companies"][$index25]["brand"] = $model->customer->companies[$index25]->brand;
}
if (null !== $model->customer->companies[$index25]->site) {
    $jsonData["customer"]["companies"][$index25]["site"] = $model->customer->companies[$index25]->site;
}
if (null !== $model->customer->companies[$index25]->createdAt) {
    $jsonData["customer"]["companies"][$index25]["createdAt"] = $model->customer->companies[$index25]->createdAt->format('Y-m-d H:i:s');;
}
if (null !== $model->customer->companies[$index25]->customer) {
    $jsonData["customer"]["companies"][$index25]["customer"] = [];
if (null !== $model->customer->companies[$index25]->customer->site) {
    $jsonData["customer"]["companies"][$index25]["customer"]["site"] = $model->customer->companies[$index25]->customer->site;
}
if (null !== $model->customer->companies[$index25]->customer->id) {
    $jsonData["customer"]["companies"][$index25]["customer"]["id"] = $model->customer->companies[$index25]->customer->id;
}
if (null !== $model->customer->companies[$index25]->customer->externalId) {
    $jsonData["customer"]["companies"][$index25]["customer"]["externalId"] = $model->customer->companies[$index25]->customer->externalId;
}
if (null !== $model->customer->companies[$index25]->customer->type) {
    $jsonData["customer"]["companies"][$index25]["customer"]["type"] = $model->customer->companies[$index25]->customer->type;
}

if (0 === \count($jsonData["customer"]["companies"][$index25]["customer"])) {
    $jsonData["customer"]["companies"][$index25]["customer"] = $emptyObject;
}

}
if (null !== $model->customer->companies[$index25]->contragent) {
    $jsonData["customer"]["companies"][$index25]["contragent"] = [];
if (null !== $model->customer->companies[$index25]->contragent->contragentType) {
    $jsonData["customer"]["companies"][$index25]["contragent"]["contragentType"] = $model->customer->companies[$index25]->contragent->contragentType;
}
if (null !== $model->customer->companies[$index25]->contragent->legalName) {
    $jsonData["customer"]["companies"][$index25]["contragent"]["legalName"] = $model->customer->companies[$index25]->contragent->legalName;
}
if (null !== $model->customer->companies[$index25]->contragent->legalAddress) {
    $jsonData["customer"]["companies"][$index25]["contragent"]["legalAddress"] = $model->customer->companies[$index25]->contragent->legalAddress;
}
if (null !== $model->customer->companies[$index25]->contragent->INN) {
    $jsonData["customer"]["companies"][$index25]["contragent"]["INN"] = $model->customer->companies[$index25]->contragent->INN;
}
if (null !== $model->customer->companies[$index25]->contragent->OKPO) {
    $jsonData["customer"]["companies"][$index25]["contragent"]["OKPO"] = $model->customer->companies[$index25]->contragent->OKPO;
}
if (null !== $model->customer->companies[$index25]->contragent->KPP) {
    $jsonData["customer"]["companies"][$index25]["contragent"]["KPP"] = $model->customer->companies[$index25]->contragent->KPP;
}
if (null !== $model->customer->companies[$index25]->contragent->OGRN) {
    $jsonData["customer"]["companies"][$index25]["contragent"]["OGRN"] = $model->customer->companies[$index25]->contragent->OGRN;
}
if (null !== $model->customer->companies[$index25]->contragent->OGRNIP) {
    $jsonData["customer"]["companies"][$index25]["contragent"]["OGRNIP"] = $model->customer->companies[$index25]->contragent->OGRNIP;
}
if (null !== $model->customer->companies[$index25]->contragent->certificateNumber) {
    $jsonData["customer"]["companies"][$index25]["contragent"]["certificateNumber"] = $model->customer->companies[$index25]->contragent->certificateNumber;
}
if (null !== $model->customer->companies[$index25]->contragent->certificateDate) {
    $jsonData["customer"]["companies"][$index25]["contragent"]["certificateDate"] = $model->customer->companies[$index25]->contragent->certificateDate->format('Y-m-d H:i:s');;
}
if (null !== $model->customer->companies[$index25]->contragent->BIK) {
    $jsonData["customer"]["companies"][$index25]["contragent"]["BIK"] = $model->customer->companies[$index25]->contragent->BIK;
}
if (null !== $model->customer->companies[$index25]->contragent->bank) {
    $jsonData["customer"]["companies"][$index25]["contragent"]["bank"] = $model->customer->companies[$index25]->contragent->bank;
}
if (null !== $model->customer->companies[$index25]->contragent->bankAddress) {
    $jsonData["customer"]["companies"][$index25]["contragent"]["bankAddress"] = $model->customer->companies[$index25]->contragent->bankAddress;
}
if (null !== $model->customer->companies[$index25]->contragent->corrAccount) {
    $jsonData["customer"]["companies"][$index25]["contragent"]["corrAccount"] = $model->customer->companies[$index25]->contragent->corrAccount;
}
if (null !== $model->customer->companies[$index25]->contragent->bankAccount) {
    $jsonData["customer"]["companies"][$index25]["contragent"]["bankAccount"] = $model->customer->companies[$index25]->contragent->bankAccount;
}

if (0 === \count($jsonData["customer"]["companies"][$index25]["contragent"])) {
    $jsonData["customer"]["companies"][$index25]["contragent"] = $emptyObject;
}

}
if (null !== $model->customer->companies[$index25]->address) {
    $jsonData["customer"]["companies"][$index25]["address"] = [];
if (null !== $model->customer->companies[$index25]->address->id) {
    $jsonData["customer"]["companies"][$index25]["address"]["id"] = $model->customer->companies[$index25]->address->id;
}
if (null !== $model->customer->companies[$index25]->address->name) {
    $jsonData["customer"]["companies"][$index25]["address"]["name"] = $model->customer->companies[$index25]->address->name;
}
if (null !== $model->customer->companies[$index25]->address->isMain) {
    $jsonData["customer"]["companies"][$index25]["address"]["isMain"] = $model->customer->companies[$index25]->address->isMain;
}
if (null !== $model->customer->companies[$index25]->address->index) {
    $jsonData["customer"]["companies"][$index25]["address"]["index"] = $model->customer->companies[$index25]->address->index;
}
if (null !== $model->customer->companies[$index25]->address->countryIso) {
    $jsonData["customer"]["companies"][$index25]["address"]["countryIso"] = $model->customer->companies[$index25]->address->countryIso;
}
if (null !== $model->customer->companies[$index25]->address->region) {
    $jsonData["customer"]["companies"][$index25]["address"]["region"] = $model->customer->companies[$index25]->address->region;
}
if (null !== $model->customer->companies[$index25]->address->regionId) {
    $jsonData["customer"]["companies"][$index25]["address"]["regionId"] = $model->customer->companies[$index25]->address->regionId;
}
if (null !== $model->customer->companies[$index25]->address->city) {
    $jsonData["customer"]["companies"][$index25]["address"]["city"] = $model->customer->companies[$index25]->address->city;
}
if (null !== $model->customer->companies[$index25]->address->cityId) {
    $jsonData["customer"]["companies"][$index25]["address"]["cityId"] = $model->customer->companies[$index25]->address->cityId;
}
if (null !== $model->customer->companies[$index25]->address->cityType) {
    $jsonData["customer"]["companies"][$index25]["address"]["cityType"] = $model->customer->companies[$index25]->address->cityType;
}
if (null !== $model->customer->companies[$index25]->address->street) {
    $jsonData["customer"]["companies"][$index25]["address"]["street"] = $model->customer->companies[$index25]->address->street;
}
if (null !== $model->customer->companies[$index25]->address->streetId) {
    $jsonData["customer"]["companies"][$index25]["address"]["streetId"] = $model->customer->companies[$index25]->address->streetId;
}
if (null !== $model->customer->companies[$index25]->address->streetType) {
    $jsonData["customer"]["companies"][$index25]["address"]["streetType"] = $model->customer->companies[$index25]->address->streetType;
}
if (null !== $model->customer->companies[$index25]->address->building) {
    $jsonData["customer"]["companies"][$index25]["address"]["building"] = $model->customer->companies[$index25]->address->building;
}
if (null !== $model->customer->companies[$index25]->address->flat) {
    $jsonData["customer"]["companies"][$index25]["address"]["flat"] = $model->customer->companies[$index25]->address->flat;
}
if (null !== $model->customer->companies[$index25]->address->floor) {
    $jsonData["customer"]["companies"][$index25]["address"]["floor"] = $model->customer->companies[$index25]->address->floor;
}
if (null !== $model->customer->companies[$index25]->address->block) {
    $jsonData["customer"]["companies"][$index25]["address"]["block"] = $model->customer->companies[$index25]->address->block;
}
if (null !== $model->customer->companies[$index25]->address->house) {
    $jsonData["customer"]["companies"][$index25]["address"]["house"] = $model->customer->companies[$index25]->address->house;
}
if (null !== $model->customer->companies[$index25]->address->housing) {
    $jsonData["customer"]["companies"][$index25]["address"]["housing"] = $model->customer->companies[$index25]->address->housing;
}
if (null !== $model->customer->companies[$index25]->address->metro) {
    $jsonData["customer"]["companies"][$index25]["address"]["metro"] = $model->customer->companies[$index25]->address->metro;
}
if (null !== $model->customer->companies[$index25]->address->notes) {
    $jsonData["customer"]["companies"][$index25]["address"]["notes"] = $model->customer->companies[$index25]->address->notes;
}
if (null !== $model->customer->companies[$index25]->address->text) {
    $jsonData["customer"]["companies"][$index25]["address"]["text"] = $model->customer->companies[$index25]->address->text;
}
if (null !== $model->customer->companies[$index25]->address->externalId) {
    $jsonData["customer"]["companies"][$index25]["address"]["externalId"] = $model->customer->companies[$index25]->address->externalId;
}

if (0 === \count($jsonData["customer"]["companies"][$index25]["address"])) {
    $jsonData["customer"]["companies"][$index25]["address"] = $emptyObject;
}

}
if (null !== $model->customer->companies[$index25]->customFields) {
    $jsonData["customer"]["companies"][$index25]["customFields"] = [];
foreach (array_keys($model->customer->companies[$index25]->customFields) as $index51) {
    $jsonData["customer"]["companies"][$index25]["customFields"] = $model->customer->companies[$index25]->customFields;
}

}
if (null !== $model->customer->companies[$index25]->marginSumm) {
    $jsonData["customer"]["companies"][$index25]["marginSumm"] = $model->customer->companies[$index25]->marginSumm;
}
if (null !== $model->customer->companies[$index25]->totalSumm) {
    $jsonData["customer"]["companies"][$index25]["totalSumm"] = $model->customer->companies[$index25]->totalSumm;
}
if (null !== $model->customer->companies[$index25]->averageSumm) {
    $jsonData["customer"]["companies"][$index25]["averageSumm"] = $model->customer->companies[$index25]->averageSumm;
}
if (null !== $model->customer->companies[$index25]->ordersCount) {
    $jsonData["customer"]["companies"][$index25]["ordersCount"] = $model->customer->companies[$index25]->ordersCount;
}
if (null !== $model->customer->companies[$index25]->costSumm) {
    $jsonData["customer"]["companies"][$index25]["costSumm"] = $model->customer->companies[$index25]->costSumm;
}

if (0 === \count($jsonData["customer"]["companies"][$index25])) {
    $jsonData["customer"]["companies"][$index25] = $emptyObject;
}

}

}
if (null !== $model->customer->addresses) {
    $jsonData["customer"]["addresses"] = [];
foreach (array_keys($model->customer->addresses) as $index25) {
    $jsonData["customer"]["addresses"][$index25] = [];
if (null !== $model->customer->addresses[$index25]->id) {
    $jsonData["customer"]["addresses"][$index25]["id"] = $model->customer->addresses[$index25]->id;
}
if (null !== $model->customer->addresses[$index25]->name) {
    $jsonData["customer"]["addresses"][$index25]["name"] = $model->customer->addresses[$index25]->name;
}
if (null !== $model->customer->addresses[$index25]->isMain) {
    $jsonData["customer"]["addresses"][$index25]["isMain"] = $model->customer->addresses[$index25]->isMain;
}
if (null !== $model->customer->addresses[$index25]->index) {
    $jsonData["customer"]["addresses"][$index25]["index"] = $model->customer->addresses[$index25]->index;
}
if (null !== $model->customer->addresses[$index25]->countryIso) {
    $jsonData["customer"]["addresses"][$index25]["countryIso"] = $model->customer->addresses[$index25]->countryIso;
}
if (null !== $model->customer->addresses[$index25]->region) {
    $jsonData["customer"]["addresses"][$index25]["region"] = $model->customer->addresses[$index25]->region;
}
if (null !== $model->customer->addresses[$index25]->regionId) {
    $jsonData["customer"]["addresses"][$index25]["regionId"] = $model->customer->addresses[$index25]->regionId;
}
if (null !== $model->customer->addresses[$index25]->city) {
    $jsonData["customer"]["addresses"][$index25]["city"] = $model->customer->addresses[$index25]->city;
}
if (null !== $model->customer->addresses[$index25]->cityId) {
    $jsonData["customer"]["addresses"][$index25]["cityId"] = $model->customer->addresses[$index25]->cityId;
}
if (null !== $model->customer->addresses[$index25]->cityType) {
    $jsonData["customer"]["addresses"][$index25]["cityType"] = $model->customer->addresses[$index25]->cityType;
}
if (null !== $model->customer->addresses[$index25]->street) {
    $jsonData["customer"]["addresses"][$index25]["street"] = $model->customer->addresses[$index25]->street;
}
if (null !== $model->customer->addresses[$index25]->streetId) {
    $jsonData["customer"]["addresses"][$index25]["streetId"] = $model->customer->addresses[$index25]->streetId;
}
if (null !== $model->customer->addresses[$index25]->streetType) {
    $jsonData["customer"]["addresses"][$index25]["streetType"] = $model->customer->addresses[$index25]->streetType;
}
if (null !== $model->customer->addresses[$index25]->building) {
    $jsonData["customer"]["addresses"][$index25]["building"] = $model->customer->addresses[$index25]->building;
}
if (null !== $model->customer->addresses[$index25]->flat) {
    $jsonData["customer"]["addresses"][$index25]["flat"] = $model->customer->addresses[$index25]->flat;
}
if (null !== $model->customer->addresses[$index25]->floor) {
    $jsonData["customer"]["addresses"][$index25]["floor"] = $model->customer->addresses[$index25]->floor;
}
if (null !== $model->customer->addresses[$index25]->block) {
    $jsonData["customer"]["addresses"][$index25]["block"] = $model->customer->addresses[$index25]->block;
}
if (null !== $model->customer->addresses[$index25]->house) {
    $jsonData["customer"]["addresses"][$index25]["house"] = $model->customer->addresses[$index25]->house;
}
if (null !== $model->customer->addresses[$index25]->housing) {
    $jsonData["customer"]["addresses"][$index25]["housing"] = $model->customer->addresses[$index25]->housing;
}
if (null !== $model->customer->addresses[$index25]->metro) {
    $jsonData["customer"]["addresses"][$index25]["metro"] = $model->customer->addresses[$index25]->metro;
}
if (null !== $model->customer->addresses[$index25]->notes) {
    $jsonData["customer"]["addresses"][$index25]["notes"] = $model->customer->addresses[$index25]->notes;
}
if (null !== $model->customer->addresses[$index25]->text) {
    $jsonData["customer"]["addresses"][$index25]["text"] = $model->customer->addresses[$index25]->text;
}
if (null !== $model->customer->addresses[$index25]->externalId) {
    $jsonData["customer"]["addresses"][$index25]["externalId"] = $model->customer->addresses[$index25]->externalId;
}

if (0 === \count($jsonData["customer"]["addresses"][$index25])) {
    $jsonData["customer"]["addresses"][$index25] = $emptyObject;
}

}

}
if (null !== $model->customer->vip) {
    $jsonData["customer"]["vip"] = $model->customer->vip;
}
if (null !== $model->customer->bad) {
    $jsonData["customer"]["bad"] = $model->customer->bad;
}
if (null !== $model->customer->site) {
    $jsonData["customer"]["site"] = $model->customer->site;
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
if (null !== $model->customer->mainCustomerContact) {
    $jsonData["customer"]["mainCustomerContact"] = [];
if (null !== $model->customer->mainCustomerContact->id) {
    $jsonData["customer"]["mainCustomerContact"]["id"] = $model->customer->mainCustomerContact->id;
}
if (null !== $model->customer->mainCustomerContact->isMain) {
    $jsonData["customer"]["mainCustomerContact"]["isMain"] = $model->customer->mainCustomerContact->isMain;
}
if (null !== $model->customer->mainCustomerContact->customer) {
    $jsonData["customer"]["mainCustomerContact"]["customer"] = [];
if (null !== $model->customer->mainCustomerContact->customer->id) {
    $jsonData["customer"]["mainCustomerContact"]["customer"]["id"] = $model->customer->mainCustomerContact->customer->id;
}
if (null !== $model->customer->mainCustomerContact->customer->externalId) {
    $jsonData["customer"]["mainCustomerContact"]["customer"]["externalId"] = $model->customer->mainCustomerContact->customer->externalId;
}
if (null !== $model->customer->mainCustomerContact->customer->browserId) {
    $jsonData["customer"]["mainCustomerContact"]["customer"]["browserId"] = $model->customer->mainCustomerContact->customer->browserId;
}
if (null !== $model->customer->mainCustomerContact->customer->site) {
    $jsonData["customer"]["mainCustomerContact"]["customer"]["site"] = $model->customer->mainCustomerContact->customer->site;
}
if (null !== $model->customer->mainCustomerContact->customer->companies) {
    $jsonData["customer"]["mainCustomerContact"]["customer"]["companies"] = [];
foreach (array_keys($model->customer->mainCustomerContact->customer->companies) as $index60) {
    $jsonData["customer"]["mainCustomerContact"]["customer"]["companies"][$index60] = [];
if (null !== $model->customer->mainCustomerContact->customer->companies[$index60]->id) {
    $jsonData["customer"]["mainCustomerContact"]["customer"]["companies"][$index60]["id"] = $model->customer->mainCustomerContact->customer->companies[$index60]->id;
}
if (null !== $model->customer->mainCustomerContact->customer->companies[$index60]->externalId) {
    $jsonData["customer"]["mainCustomerContact"]["customer"]["companies"][$index60]["externalId"] = $model->customer->mainCustomerContact->customer->companies[$index60]->externalId;
}
if (null !== $model->customer->mainCustomerContact->customer->companies[$index60]->company) {
    $jsonData["customer"]["mainCustomerContact"]["customer"]["companies"][$index60]["company"] = [];
if (null !== $model->customer->mainCustomerContact->customer->companies[$index60]->company->id) {
    $jsonData["customer"]["mainCustomerContact"]["customer"]["companies"][$index60]["company"]["id"] = $model->customer->mainCustomerContact->customer->companies[$index60]->company->id;
}
if (null !== $model->customer->mainCustomerContact->customer->companies[$index60]->company->externalId) {
    $jsonData["customer"]["mainCustomerContact"]["customer"]["companies"][$index60]["company"]["externalId"] = $model->customer->mainCustomerContact->customer->companies[$index60]->company->externalId;
}
if (null !== $model->customer->mainCustomerContact->customer->companies[$index60]->company->name) {
    $jsonData["customer"]["mainCustomerContact"]["customer"]["companies"][$index60]["company"]["name"] = $model->customer->mainCustomerContact->customer->companies[$index60]->company->name;
}

if (0 === \count($jsonData["customer"]["mainCustomerContact"]["customer"]["companies"][$index60]["company"])) {
    $jsonData["customer"]["mainCustomerContact"]["customer"]["companies"][$index60]["company"] = $emptyObject;
}

}

if (0 === \count($jsonData["customer"]["mainCustomerContact"]["customer"]["companies"][$index60])) {
    $jsonData["customer"]["mainCustomerContact"]["customer"]["companies"][$index60] = $emptyObject;
}

}

}

if (0 === \count($jsonData["customer"]["mainCustomerContact"]["customer"])) {
    $jsonData["customer"]["mainCustomerContact"]["customer"] = $emptyObject;
}

}
if (null !== $model->customer->mainCustomerContact->companies) {
    $jsonData["customer"]["mainCustomerContact"]["companies"] = [];
foreach (array_keys($model->customer->mainCustomerContact->companies) as $index48) {
    $jsonData["customer"]["mainCustomerContact"]["companies"][$index48] = [];
if (null !== $model->customer->mainCustomerContact->companies[$index48]->id) {
    $jsonData["customer"]["mainCustomerContact"]["companies"][$index48]["id"] = $model->customer->mainCustomerContact->companies[$index48]->id;
}
if (null !== $model->customer->mainCustomerContact->companies[$index48]->externalId) {
    $jsonData["customer"]["mainCustomerContact"]["companies"][$index48]["externalId"] = $model->customer->mainCustomerContact->companies[$index48]->externalId;
}
if (null !== $model->customer->mainCustomerContact->companies[$index48]->company) {
    $jsonData["customer"]["mainCustomerContact"]["companies"][$index48]["company"] = [];
if (null !== $model->customer->mainCustomerContact->companies[$index48]->company->id) {
    $jsonData["customer"]["mainCustomerContact"]["companies"][$index48]["company"]["id"] = $model->customer->mainCustomerContact->companies[$index48]->company->id;
}
if (null !== $model->customer->mainCustomerContact->companies[$index48]->company->externalId) {
    $jsonData["customer"]["mainCustomerContact"]["companies"][$index48]["company"]["externalId"] = $model->customer->mainCustomerContact->companies[$index48]->company->externalId;
}
if (null !== $model->customer->mainCustomerContact->companies[$index48]->company->name) {
    $jsonData["customer"]["mainCustomerContact"]["companies"][$index48]["company"]["name"] = $model->customer->mainCustomerContact->companies[$index48]->company->name;
}

if (0 === \count($jsonData["customer"]["mainCustomerContact"]["companies"][$index48]["company"])) {
    $jsonData["customer"]["mainCustomerContact"]["companies"][$index48]["company"] = $emptyObject;
}

}

if (0 === \count($jsonData["customer"]["mainCustomerContact"]["companies"][$index48])) {
    $jsonData["customer"]["mainCustomerContact"]["companies"][$index48] = $emptyObject;
}

}

}

if (0 === \count($jsonData["customer"]["mainCustomerContact"])) {
    $jsonData["customer"]["mainCustomerContact"] = $emptyObject;
}

}
if (null !== $model->customer->mainCompany) {
    $jsonData["customer"]["mainCompany"] = [];
if (null !== $model->customer->mainCompany->id) {
    $jsonData["customer"]["mainCompany"]["id"] = $model->customer->mainCompany->id;
}
if (null !== $model->customer->mainCompany->externalId) {
    $jsonData["customer"]["mainCompany"]["externalId"] = $model->customer->mainCompany->externalId;
}
if (null !== $model->customer->mainCompany->name) {
    $jsonData["customer"]["mainCompany"]["name"] = $model->customer->mainCompany->name;
}

if (0 === \count($jsonData["customer"]["mainCompany"])) {
    $jsonData["customer"]["mainCompany"] = $emptyObject;
}

}

if (0 === \count($jsonData["customer"])) {
    $jsonData["customer"] = $emptyObject;
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
if (null !== $model->combinedTo) {
    $jsonData["combinedTo"] = [];
if (null !== $model->combinedTo->type) {
    $jsonData["combinedTo"]["type"] = $model->combinedTo->type;
}
if (null !== $model->combinedTo->id) {
    $jsonData["combinedTo"]["id"] = $model->combinedTo->id;
}
if (null !== $model->combinedTo->externalId) {
    $jsonData["combinedTo"]["externalId"] = $model->combinedTo->externalId;
}
if (null !== $model->combinedTo->nickName) {
    $jsonData["combinedTo"]["nickName"] = $model->combinedTo->nickName;
}
if (null !== $model->combinedTo->mainAddress) {
    $jsonData["combinedTo"]["mainAddress"] = [];
if (null !== $model->combinedTo->mainAddress->id) {
    $jsonData["combinedTo"]["mainAddress"]["id"] = $model->combinedTo->mainAddress->id;
}
if (null !== $model->combinedTo->mainAddress->externalId) {
    $jsonData["combinedTo"]["mainAddress"]["externalId"] = $model->combinedTo->mainAddress->externalId;
}
if (null !== $model->combinedTo->mainAddress->name) {
    $jsonData["combinedTo"]["mainAddress"]["name"] = $model->combinedTo->mainAddress->name;
}

if (0 === \count($jsonData["combinedTo"]["mainAddress"])) {
    $jsonData["combinedTo"]["mainAddress"] = $emptyObject;
}

}
if (null !== $model->combinedTo->createdAt) {
    $jsonData["combinedTo"]["createdAt"] = $model->combinedTo->createdAt->format('Y-m-d H:i:s');;
}
if (null !== $model->combinedTo->managerId) {
    $jsonData["combinedTo"]["managerId"] = $model->combinedTo->managerId;
}
if (null !== $model->combinedTo->source) {
    $jsonData["combinedTo"]["source"] = [];
if (null !== $model->combinedTo->source->source) {
    $jsonData["combinedTo"]["source"]["source"] = $model->combinedTo->source->source;
}
if (null !== $model->combinedTo->source->medium) {
    $jsonData["combinedTo"]["source"]["medium"] = $model->combinedTo->source->medium;
}
if (null !== $model->combinedTo->source->campaign) {
    $jsonData["combinedTo"]["source"]["campaign"] = $model->combinedTo->source->campaign;
}
if (null !== $model->combinedTo->source->keyword) {
    $jsonData["combinedTo"]["source"]["keyword"] = $model->combinedTo->source->keyword;
}
if (null !== $model->combinedTo->source->content) {
    $jsonData["combinedTo"]["source"]["content"] = $model->combinedTo->source->content;
}

if (0 === \count($jsonData["combinedTo"]["source"])) {
    $jsonData["combinedTo"]["source"] = $emptyObject;
}

}
if (null !== $model->combinedTo->customerContacts) {
    $jsonData["combinedTo"]["customerContacts"] = [];
foreach (array_keys($model->combinedTo->customerContacts) as $index34) {
    $jsonData["combinedTo"]["customerContacts"][$index34] = [];
if (null !== $model->combinedTo->customerContacts[$index34]->id) {
    $jsonData["combinedTo"]["customerContacts"][$index34]["id"] = $model->combinedTo->customerContacts[$index34]->id;
}
if (null !== $model->combinedTo->customerContacts[$index34]->isMain) {
    $jsonData["combinedTo"]["customerContacts"][$index34]["isMain"] = $model->combinedTo->customerContacts[$index34]->isMain;
}
if (null !== $model->combinedTo->customerContacts[$index34]->customer) {
    $jsonData["combinedTo"]["customerContacts"][$index34]["customer"] = [];
if (null !== $model->combinedTo->customerContacts[$index34]->customer->id) {
    $jsonData["combinedTo"]["customerContacts"][$index34]["customer"]["id"] = $model->combinedTo->customerContacts[$index34]->customer->id;
}
if (null !== $model->combinedTo->customerContacts[$index34]->customer->externalId) {
    $jsonData["combinedTo"]["customerContacts"][$index34]["customer"]["externalId"] = $model->combinedTo->customerContacts[$index34]->customer->externalId;
}
if (null !== $model->combinedTo->customerContacts[$index34]->customer->browserId) {
    $jsonData["combinedTo"]["customerContacts"][$index34]["customer"]["browserId"] = $model->combinedTo->customerContacts[$index34]->customer->browserId;
}
if (null !== $model->combinedTo->customerContacts[$index34]->customer->site) {
    $jsonData["combinedTo"]["customerContacts"][$index34]["customer"]["site"] = $model->combinedTo->customerContacts[$index34]->customer->site;
}
if (null !== $model->combinedTo->customerContacts[$index34]->customer->companies) {
    $jsonData["combinedTo"]["customerContacts"][$index34]["customer"]["companies"] = [];
foreach (array_keys($model->combinedTo->customerContacts[$index34]->customer->companies) as $index69) {
    $jsonData["combinedTo"]["customerContacts"][$index34]["customer"]["companies"][$index69] = [];
if (null !== $model->combinedTo->customerContacts[$index34]->customer->companies[$index69]->id) {
    $jsonData["combinedTo"]["customerContacts"][$index34]["customer"]["companies"][$index69]["id"] = $model->combinedTo->customerContacts[$index34]->customer->companies[$index69]->id;
}
if (null !== $model->combinedTo->customerContacts[$index34]->customer->companies[$index69]->externalId) {
    $jsonData["combinedTo"]["customerContacts"][$index34]["customer"]["companies"][$index69]["externalId"] = $model->combinedTo->customerContacts[$index34]->customer->companies[$index69]->externalId;
}
if (null !== $model->combinedTo->customerContacts[$index34]->customer->companies[$index69]->company) {
    $jsonData["combinedTo"]["customerContacts"][$index34]["customer"]["companies"][$index69]["company"] = [];
if (null !== $model->combinedTo->customerContacts[$index34]->customer->companies[$index69]->company->id) {
    $jsonData["combinedTo"]["customerContacts"][$index34]["customer"]["companies"][$index69]["company"]["id"] = $model->combinedTo->customerContacts[$index34]->customer->companies[$index69]->company->id;
}
if (null !== $model->combinedTo->customerContacts[$index34]->customer->companies[$index69]->company->externalId) {
    $jsonData["combinedTo"]["customerContacts"][$index34]["customer"]["companies"][$index69]["company"]["externalId"] = $model->combinedTo->customerContacts[$index34]->customer->companies[$index69]->company->externalId;
}
if (null !== $model->combinedTo->customerContacts[$index34]->customer->companies[$index69]->company->name) {
    $jsonData["combinedTo"]["customerContacts"][$index34]["customer"]["companies"][$index69]["company"]["name"] = $model->combinedTo->customerContacts[$index34]->customer->companies[$index69]->company->name;
}

if (0 === \count($jsonData["combinedTo"]["customerContacts"][$index34]["customer"]["companies"][$index69]["company"])) {
    $jsonData["combinedTo"]["customerContacts"][$index34]["customer"]["companies"][$index69]["company"] = $emptyObject;
}

}

if (0 === \count($jsonData["combinedTo"]["customerContacts"][$index34]["customer"]["companies"][$index69])) {
    $jsonData["combinedTo"]["customerContacts"][$index34]["customer"]["companies"][$index69] = $emptyObject;
}

}

}

if (0 === \count($jsonData["combinedTo"]["customerContacts"][$index34]["customer"])) {
    $jsonData["combinedTo"]["customerContacts"][$index34]["customer"] = $emptyObject;
}

}
if (null !== $model->combinedTo->customerContacts[$index34]->companies) {
    $jsonData["combinedTo"]["customerContacts"][$index34]["companies"] = [];
foreach (array_keys($model->combinedTo->customerContacts[$index34]->companies) as $index57) {
    $jsonData["combinedTo"]["customerContacts"][$index34]["companies"][$index57] = [];
if (null !== $model->combinedTo->customerContacts[$index34]->companies[$index57]->id) {
    $jsonData["combinedTo"]["customerContacts"][$index34]["companies"][$index57]["id"] = $model->combinedTo->customerContacts[$index34]->companies[$index57]->id;
}
if (null !== $model->combinedTo->customerContacts[$index34]->companies[$index57]->externalId) {
    $jsonData["combinedTo"]["customerContacts"][$index34]["companies"][$index57]["externalId"] = $model->combinedTo->customerContacts[$index34]->companies[$index57]->externalId;
}
if (null !== $model->combinedTo->customerContacts[$index34]->companies[$index57]->company) {
    $jsonData["combinedTo"]["customerContacts"][$index34]["companies"][$index57]["company"] = [];
if (null !== $model->combinedTo->customerContacts[$index34]->companies[$index57]->company->id) {
    $jsonData["combinedTo"]["customerContacts"][$index34]["companies"][$index57]["company"]["id"] = $model->combinedTo->customerContacts[$index34]->companies[$index57]->company->id;
}
if (null !== $model->combinedTo->customerContacts[$index34]->companies[$index57]->company->externalId) {
    $jsonData["combinedTo"]["customerContacts"][$index34]["companies"][$index57]["company"]["externalId"] = $model->combinedTo->customerContacts[$index34]->companies[$index57]->company->externalId;
}
if (null !== $model->combinedTo->customerContacts[$index34]->companies[$index57]->company->name) {
    $jsonData["combinedTo"]["customerContacts"][$index34]["companies"][$index57]["company"]["name"] = $model->combinedTo->customerContacts[$index34]->companies[$index57]->company->name;
}

if (0 === \count($jsonData["combinedTo"]["customerContacts"][$index34]["companies"][$index57]["company"])) {
    $jsonData["combinedTo"]["customerContacts"][$index34]["companies"][$index57]["company"] = $emptyObject;
}

}

if (0 === \count($jsonData["combinedTo"]["customerContacts"][$index34]["companies"][$index57])) {
    $jsonData["combinedTo"]["customerContacts"][$index34]["companies"][$index57] = $emptyObject;
}

}

}

if (0 === \count($jsonData["combinedTo"]["customerContacts"][$index34])) {
    $jsonData["combinedTo"]["customerContacts"][$index34] = $emptyObject;
}

}

}
if (null !== $model->combinedTo->companies) {
    $jsonData["combinedTo"]["companies"] = [];
foreach (array_keys($model->combinedTo->companies) as $index27) {
    $jsonData["combinedTo"]["companies"][$index27] = [];
if (null !== $model->combinedTo->companies[$index27]->id) {
    $jsonData["combinedTo"]["companies"][$index27]["id"] = $model->combinedTo->companies[$index27]->id;
}
if (null !== $model->combinedTo->companies[$index27]->isMain) {
    $jsonData["combinedTo"]["companies"][$index27]["isMain"] = $model->combinedTo->companies[$index27]->isMain;
}
if (null !== $model->combinedTo->companies[$index27]->externalId) {
    $jsonData["combinedTo"]["companies"][$index27]["externalId"] = $model->combinedTo->companies[$index27]->externalId;
}
if (null !== $model->combinedTo->companies[$index27]->active) {
    $jsonData["combinedTo"]["companies"][$index27]["active"] = $model->combinedTo->companies[$index27]->active;
}
if (null !== $model->combinedTo->companies[$index27]->name) {
    $jsonData["combinedTo"]["companies"][$index27]["name"] = $model->combinedTo->companies[$index27]->name;
}
if (null !== $model->combinedTo->companies[$index27]->brand) {
    $jsonData["combinedTo"]["companies"][$index27]["brand"] = $model->combinedTo->companies[$index27]->brand;
}
if (null !== $model->combinedTo->companies[$index27]->site) {
    $jsonData["combinedTo"]["companies"][$index27]["site"] = $model->combinedTo->companies[$index27]->site;
}
if (null !== $model->combinedTo->companies[$index27]->createdAt) {
    $jsonData["combinedTo"]["companies"][$index27]["createdAt"] = $model->combinedTo->companies[$index27]->createdAt->format('Y-m-d H:i:s');;
}
if (null !== $model->combinedTo->companies[$index27]->customer) {
    $jsonData["combinedTo"]["companies"][$index27]["customer"] = [];
if (null !== $model->combinedTo->companies[$index27]->customer->site) {
    $jsonData["combinedTo"]["companies"][$index27]["customer"]["site"] = $model->combinedTo->companies[$index27]->customer->site;
}
if (null !== $model->combinedTo->companies[$index27]->customer->id) {
    $jsonData["combinedTo"]["companies"][$index27]["customer"]["id"] = $model->combinedTo->companies[$index27]->customer->id;
}
if (null !== $model->combinedTo->companies[$index27]->customer->externalId) {
    $jsonData["combinedTo"]["companies"][$index27]["customer"]["externalId"] = $model->combinedTo->companies[$index27]->customer->externalId;
}
if (null !== $model->combinedTo->companies[$index27]->customer->type) {
    $jsonData["combinedTo"]["companies"][$index27]["customer"]["type"] = $model->combinedTo->companies[$index27]->customer->type;
}

if (0 === \count($jsonData["combinedTo"]["companies"][$index27]["customer"])) {
    $jsonData["combinedTo"]["companies"][$index27]["customer"] = $emptyObject;
}

}
if (null !== $model->combinedTo->companies[$index27]->contragent) {
    $jsonData["combinedTo"]["companies"][$index27]["contragent"] = [];
if (null !== $model->combinedTo->companies[$index27]->contragent->contragentType) {
    $jsonData["combinedTo"]["companies"][$index27]["contragent"]["contragentType"] = $model->combinedTo->companies[$index27]->contragent->contragentType;
}
if (null !== $model->combinedTo->companies[$index27]->contragent->legalName) {
    $jsonData["combinedTo"]["companies"][$index27]["contragent"]["legalName"] = $model->combinedTo->companies[$index27]->contragent->legalName;
}
if (null !== $model->combinedTo->companies[$index27]->contragent->legalAddress) {
    $jsonData["combinedTo"]["companies"][$index27]["contragent"]["legalAddress"] = $model->combinedTo->companies[$index27]->contragent->legalAddress;
}
if (null !== $model->combinedTo->companies[$index27]->contragent->INN) {
    $jsonData["combinedTo"]["companies"][$index27]["contragent"]["INN"] = $model->combinedTo->companies[$index27]->contragent->INN;
}
if (null !== $model->combinedTo->companies[$index27]->contragent->OKPO) {
    $jsonData["combinedTo"]["companies"][$index27]["contragent"]["OKPO"] = $model->combinedTo->companies[$index27]->contragent->OKPO;
}
if (null !== $model->combinedTo->companies[$index27]->contragent->KPP) {
    $jsonData["combinedTo"]["companies"][$index27]["contragent"]["KPP"] = $model->combinedTo->companies[$index27]->contragent->KPP;
}
if (null !== $model->combinedTo->companies[$index27]->contragent->OGRN) {
    $jsonData["combinedTo"]["companies"][$index27]["contragent"]["OGRN"] = $model->combinedTo->companies[$index27]->contragent->OGRN;
}
if (null !== $model->combinedTo->companies[$index27]->contragent->OGRNIP) {
    $jsonData["combinedTo"]["companies"][$index27]["contragent"]["OGRNIP"] = $model->combinedTo->companies[$index27]->contragent->OGRNIP;
}
if (null !== $model->combinedTo->companies[$index27]->contragent->certificateNumber) {
    $jsonData["combinedTo"]["companies"][$index27]["contragent"]["certificateNumber"] = $model->combinedTo->companies[$index27]->contragent->certificateNumber;
}
if (null !== $model->combinedTo->companies[$index27]->contragent->certificateDate) {
    $jsonData["combinedTo"]["companies"][$index27]["contragent"]["certificateDate"] = $model->combinedTo->companies[$index27]->contragent->certificateDate->format('Y-m-d H:i:s');;
}
if (null !== $model->combinedTo->companies[$index27]->contragent->BIK) {
    $jsonData["combinedTo"]["companies"][$index27]["contragent"]["BIK"] = $model->combinedTo->companies[$index27]->contragent->BIK;
}
if (null !== $model->combinedTo->companies[$index27]->contragent->bank) {
    $jsonData["combinedTo"]["companies"][$index27]["contragent"]["bank"] = $model->combinedTo->companies[$index27]->contragent->bank;
}
if (null !== $model->combinedTo->companies[$index27]->contragent->bankAddress) {
    $jsonData["combinedTo"]["companies"][$index27]["contragent"]["bankAddress"] = $model->combinedTo->companies[$index27]->contragent->bankAddress;
}
if (null !== $model->combinedTo->companies[$index27]->contragent->corrAccount) {
    $jsonData["combinedTo"]["companies"][$index27]["contragent"]["corrAccount"] = $model->combinedTo->companies[$index27]->contragent->corrAccount;
}
if (null !== $model->combinedTo->companies[$index27]->contragent->bankAccount) {
    $jsonData["combinedTo"]["companies"][$index27]["contragent"]["bankAccount"] = $model->combinedTo->companies[$index27]->contragent->bankAccount;
}

if (0 === \count($jsonData["combinedTo"]["companies"][$index27]["contragent"])) {
    $jsonData["combinedTo"]["companies"][$index27]["contragent"] = $emptyObject;
}

}
if (null !== $model->combinedTo->companies[$index27]->address) {
    $jsonData["combinedTo"]["companies"][$index27]["address"] = [];
if (null !== $model->combinedTo->companies[$index27]->address->id) {
    $jsonData["combinedTo"]["companies"][$index27]["address"]["id"] = $model->combinedTo->companies[$index27]->address->id;
}
if (null !== $model->combinedTo->companies[$index27]->address->name) {
    $jsonData["combinedTo"]["companies"][$index27]["address"]["name"] = $model->combinedTo->companies[$index27]->address->name;
}
if (null !== $model->combinedTo->companies[$index27]->address->isMain) {
    $jsonData["combinedTo"]["companies"][$index27]["address"]["isMain"] = $model->combinedTo->companies[$index27]->address->isMain;
}
if (null !== $model->combinedTo->companies[$index27]->address->index) {
    $jsonData["combinedTo"]["companies"][$index27]["address"]["index"] = $model->combinedTo->companies[$index27]->address->index;
}
if (null !== $model->combinedTo->companies[$index27]->address->countryIso) {
    $jsonData["combinedTo"]["companies"][$index27]["address"]["countryIso"] = $model->combinedTo->companies[$index27]->address->countryIso;
}
if (null !== $model->combinedTo->companies[$index27]->address->region) {
    $jsonData["combinedTo"]["companies"][$index27]["address"]["region"] = $model->combinedTo->companies[$index27]->address->region;
}
if (null !== $model->combinedTo->companies[$index27]->address->regionId) {
    $jsonData["combinedTo"]["companies"][$index27]["address"]["regionId"] = $model->combinedTo->companies[$index27]->address->regionId;
}
if (null !== $model->combinedTo->companies[$index27]->address->city) {
    $jsonData["combinedTo"]["companies"][$index27]["address"]["city"] = $model->combinedTo->companies[$index27]->address->city;
}
if (null !== $model->combinedTo->companies[$index27]->address->cityId) {
    $jsonData["combinedTo"]["companies"][$index27]["address"]["cityId"] = $model->combinedTo->companies[$index27]->address->cityId;
}
if (null !== $model->combinedTo->companies[$index27]->address->cityType) {
    $jsonData["combinedTo"]["companies"][$index27]["address"]["cityType"] = $model->combinedTo->companies[$index27]->address->cityType;
}
if (null !== $model->combinedTo->companies[$index27]->address->street) {
    $jsonData["combinedTo"]["companies"][$index27]["address"]["street"] = $model->combinedTo->companies[$index27]->address->street;
}
if (null !== $model->combinedTo->companies[$index27]->address->streetId) {
    $jsonData["combinedTo"]["companies"][$index27]["address"]["streetId"] = $model->combinedTo->companies[$index27]->address->streetId;
}
if (null !== $model->combinedTo->companies[$index27]->address->streetType) {
    $jsonData["combinedTo"]["companies"][$index27]["address"]["streetType"] = $model->combinedTo->companies[$index27]->address->streetType;
}
if (null !== $model->combinedTo->companies[$index27]->address->building) {
    $jsonData["combinedTo"]["companies"][$index27]["address"]["building"] = $model->combinedTo->companies[$index27]->address->building;
}
if (null !== $model->combinedTo->companies[$index27]->address->flat) {
    $jsonData["combinedTo"]["companies"][$index27]["address"]["flat"] = $model->combinedTo->companies[$index27]->address->flat;
}
if (null !== $model->combinedTo->companies[$index27]->address->floor) {
    $jsonData["combinedTo"]["companies"][$index27]["address"]["floor"] = $model->combinedTo->companies[$index27]->address->floor;
}
if (null !== $model->combinedTo->companies[$index27]->address->block) {
    $jsonData["combinedTo"]["companies"][$index27]["address"]["block"] = $model->combinedTo->companies[$index27]->address->block;
}
if (null !== $model->combinedTo->companies[$index27]->address->house) {
    $jsonData["combinedTo"]["companies"][$index27]["address"]["house"] = $model->combinedTo->companies[$index27]->address->house;
}
if (null !== $model->combinedTo->companies[$index27]->address->housing) {
    $jsonData["combinedTo"]["companies"][$index27]["address"]["housing"] = $model->combinedTo->companies[$index27]->address->housing;
}
if (null !== $model->combinedTo->companies[$index27]->address->metro) {
    $jsonData["combinedTo"]["companies"][$index27]["address"]["metro"] = $model->combinedTo->companies[$index27]->address->metro;
}
if (null !== $model->combinedTo->companies[$index27]->address->notes) {
    $jsonData["combinedTo"]["companies"][$index27]["address"]["notes"] = $model->combinedTo->companies[$index27]->address->notes;
}
if (null !== $model->combinedTo->companies[$index27]->address->text) {
    $jsonData["combinedTo"]["companies"][$index27]["address"]["text"] = $model->combinedTo->companies[$index27]->address->text;
}
if (null !== $model->combinedTo->companies[$index27]->address->externalId) {
    $jsonData["combinedTo"]["companies"][$index27]["address"]["externalId"] = $model->combinedTo->companies[$index27]->address->externalId;
}

if (0 === \count($jsonData["combinedTo"]["companies"][$index27]["address"])) {
    $jsonData["combinedTo"]["companies"][$index27]["address"] = $emptyObject;
}

}
if (null !== $model->combinedTo->companies[$index27]->customFields) {
    $jsonData["combinedTo"]["companies"][$index27]["customFields"] = [];
foreach (array_keys($model->combinedTo->companies[$index27]->customFields) as $index53) {
    $jsonData["combinedTo"]["companies"][$index27]["customFields"] = $model->combinedTo->companies[$index27]->customFields;
}

}
if (null !== $model->combinedTo->companies[$index27]->marginSumm) {
    $jsonData["combinedTo"]["companies"][$index27]["marginSumm"] = $model->combinedTo->companies[$index27]->marginSumm;
}
if (null !== $model->combinedTo->companies[$index27]->totalSumm) {
    $jsonData["combinedTo"]["companies"][$index27]["totalSumm"] = $model->combinedTo->companies[$index27]->totalSumm;
}
if (null !== $model->combinedTo->companies[$index27]->averageSumm) {
    $jsonData["combinedTo"]["companies"][$index27]["averageSumm"] = $model->combinedTo->companies[$index27]->averageSumm;
}
if (null !== $model->combinedTo->companies[$index27]->ordersCount) {
    $jsonData["combinedTo"]["companies"][$index27]["ordersCount"] = $model->combinedTo->companies[$index27]->ordersCount;
}
if (null !== $model->combinedTo->companies[$index27]->costSumm) {
    $jsonData["combinedTo"]["companies"][$index27]["costSumm"] = $model->combinedTo->companies[$index27]->costSumm;
}

if (0 === \count($jsonData["combinedTo"]["companies"][$index27])) {
    $jsonData["combinedTo"]["companies"][$index27] = $emptyObject;
}

}

}
if (null !== $model->combinedTo->addresses) {
    $jsonData["combinedTo"]["addresses"] = [];
foreach (array_keys($model->combinedTo->addresses) as $index27) {
    $jsonData["combinedTo"]["addresses"][$index27] = [];
if (null !== $model->combinedTo->addresses[$index27]->id) {
    $jsonData["combinedTo"]["addresses"][$index27]["id"] = $model->combinedTo->addresses[$index27]->id;
}
if (null !== $model->combinedTo->addresses[$index27]->name) {
    $jsonData["combinedTo"]["addresses"][$index27]["name"] = $model->combinedTo->addresses[$index27]->name;
}
if (null !== $model->combinedTo->addresses[$index27]->isMain) {
    $jsonData["combinedTo"]["addresses"][$index27]["isMain"] = $model->combinedTo->addresses[$index27]->isMain;
}
if (null !== $model->combinedTo->addresses[$index27]->index) {
    $jsonData["combinedTo"]["addresses"][$index27]["index"] = $model->combinedTo->addresses[$index27]->index;
}
if (null !== $model->combinedTo->addresses[$index27]->countryIso) {
    $jsonData["combinedTo"]["addresses"][$index27]["countryIso"] = $model->combinedTo->addresses[$index27]->countryIso;
}
if (null !== $model->combinedTo->addresses[$index27]->region) {
    $jsonData["combinedTo"]["addresses"][$index27]["region"] = $model->combinedTo->addresses[$index27]->region;
}
if (null !== $model->combinedTo->addresses[$index27]->regionId) {
    $jsonData["combinedTo"]["addresses"][$index27]["regionId"] = $model->combinedTo->addresses[$index27]->regionId;
}
if (null !== $model->combinedTo->addresses[$index27]->city) {
    $jsonData["combinedTo"]["addresses"][$index27]["city"] = $model->combinedTo->addresses[$index27]->city;
}
if (null !== $model->combinedTo->addresses[$index27]->cityId) {
    $jsonData["combinedTo"]["addresses"][$index27]["cityId"] = $model->combinedTo->addresses[$index27]->cityId;
}
if (null !== $model->combinedTo->addresses[$index27]->cityType) {
    $jsonData["combinedTo"]["addresses"][$index27]["cityType"] = $model->combinedTo->addresses[$index27]->cityType;
}
if (null !== $model->combinedTo->addresses[$index27]->street) {
    $jsonData["combinedTo"]["addresses"][$index27]["street"] = $model->combinedTo->addresses[$index27]->street;
}
if (null !== $model->combinedTo->addresses[$index27]->streetId) {
    $jsonData["combinedTo"]["addresses"][$index27]["streetId"] = $model->combinedTo->addresses[$index27]->streetId;
}
if (null !== $model->combinedTo->addresses[$index27]->streetType) {
    $jsonData["combinedTo"]["addresses"][$index27]["streetType"] = $model->combinedTo->addresses[$index27]->streetType;
}
if (null !== $model->combinedTo->addresses[$index27]->building) {
    $jsonData["combinedTo"]["addresses"][$index27]["building"] = $model->combinedTo->addresses[$index27]->building;
}
if (null !== $model->combinedTo->addresses[$index27]->flat) {
    $jsonData["combinedTo"]["addresses"][$index27]["flat"] = $model->combinedTo->addresses[$index27]->flat;
}
if (null !== $model->combinedTo->addresses[$index27]->floor) {
    $jsonData["combinedTo"]["addresses"][$index27]["floor"] = $model->combinedTo->addresses[$index27]->floor;
}
if (null !== $model->combinedTo->addresses[$index27]->block) {
    $jsonData["combinedTo"]["addresses"][$index27]["block"] = $model->combinedTo->addresses[$index27]->block;
}
if (null !== $model->combinedTo->addresses[$index27]->house) {
    $jsonData["combinedTo"]["addresses"][$index27]["house"] = $model->combinedTo->addresses[$index27]->house;
}
if (null !== $model->combinedTo->addresses[$index27]->housing) {
    $jsonData["combinedTo"]["addresses"][$index27]["housing"] = $model->combinedTo->addresses[$index27]->housing;
}
if (null !== $model->combinedTo->addresses[$index27]->metro) {
    $jsonData["combinedTo"]["addresses"][$index27]["metro"] = $model->combinedTo->addresses[$index27]->metro;
}
if (null !== $model->combinedTo->addresses[$index27]->notes) {
    $jsonData["combinedTo"]["addresses"][$index27]["notes"] = $model->combinedTo->addresses[$index27]->notes;
}
if (null !== $model->combinedTo->addresses[$index27]->text) {
    $jsonData["combinedTo"]["addresses"][$index27]["text"] = $model->combinedTo->addresses[$index27]->text;
}
if (null !== $model->combinedTo->addresses[$index27]->externalId) {
    $jsonData["combinedTo"]["addresses"][$index27]["externalId"] = $model->combinedTo->addresses[$index27]->externalId;
}

if (0 === \count($jsonData["combinedTo"]["addresses"][$index27])) {
    $jsonData["combinedTo"]["addresses"][$index27] = $emptyObject;
}

}

}
if (null !== $model->combinedTo->vip) {
    $jsonData["combinedTo"]["vip"] = $model->combinedTo->vip;
}
if (null !== $model->combinedTo->bad) {
    $jsonData["combinedTo"]["bad"] = $model->combinedTo->bad;
}
if (null !== $model->combinedTo->site) {
    $jsonData["combinedTo"]["site"] = $model->combinedTo->site;
}
if (null !== $model->combinedTo->tags) {
    $jsonData["combinedTo"]["tags"] = [];
foreach (array_keys($model->combinedTo->tags) as $index22) {
    $jsonData["combinedTo"]["tags"][$index22] = [];
if (null !== $model->combinedTo->tags[$index22]->name) {
    $jsonData["combinedTo"]["tags"][$index22]["name"] = $model->combinedTo->tags[$index22]->name;
}
if (null !== $model->combinedTo->tags[$index22]->color) {
    $jsonData["combinedTo"]["tags"][$index22]["color"] = $model->combinedTo->tags[$index22]->color;
}
if (null !== $model->combinedTo->tags[$index22]->attached) {
    $jsonData["combinedTo"]["tags"][$index22]["attached"] = $model->combinedTo->tags[$index22]->attached;
}

if (0 === \count($jsonData["combinedTo"]["tags"][$index22])) {
    $jsonData["combinedTo"]["tags"][$index22] = $emptyObject;
}

}

}
if (null !== $model->combinedTo->avgMarginSumm) {
    $jsonData["combinedTo"]["avgMarginSumm"] = $model->combinedTo->avgMarginSumm;
}
if (null !== $model->combinedTo->marginSumm) {
    $jsonData["combinedTo"]["marginSumm"] = $model->combinedTo->marginSumm;
}
if (null !== $model->combinedTo->totalSumm) {
    $jsonData["combinedTo"]["totalSumm"] = $model->combinedTo->totalSumm;
}
if (null !== $model->combinedTo->averageSumm) {
    $jsonData["combinedTo"]["averageSumm"] = $model->combinedTo->averageSumm;
}
if (null !== $model->combinedTo->ordersCount) {
    $jsonData["combinedTo"]["ordersCount"] = $model->combinedTo->ordersCount;
}
if (null !== $model->combinedTo->costSumm) {
    $jsonData["combinedTo"]["costSumm"] = $model->combinedTo->costSumm;
}
if (null !== $model->combinedTo->customFields) {
    $jsonData["combinedTo"]["customFields"] = [];
foreach (array_keys($model->combinedTo->customFields) as $index30) {
    $jsonData["combinedTo"]["customFields"] = $model->combinedTo->customFields;
}

}
if (null !== $model->combinedTo->personalDiscount) {
    $jsonData["combinedTo"]["personalDiscount"] = $model->combinedTo->personalDiscount;
}
if (null !== $model->combinedTo->cumulativeDiscount) {
    $jsonData["combinedTo"]["cumulativeDiscount"] = $model->combinedTo->cumulativeDiscount;
}
if (null !== $model->combinedTo->discountCardNumber) {
    $jsonData["combinedTo"]["discountCardNumber"] = $model->combinedTo->discountCardNumber;
}
if (null !== $model->combinedTo->firstClientId) {
    $jsonData["combinedTo"]["firstClientId"] = $model->combinedTo->firstClientId;
}
if (null !== $model->combinedTo->lastClientId) {
    $jsonData["combinedTo"]["lastClientId"] = $model->combinedTo->lastClientId;
}
if (null !== $model->combinedTo->mainCustomerContact) {
    $jsonData["combinedTo"]["mainCustomerContact"] = [];
if (null !== $model->combinedTo->mainCustomerContact->id) {
    $jsonData["combinedTo"]["mainCustomerContact"]["id"] = $model->combinedTo->mainCustomerContact->id;
}
if (null !== $model->combinedTo->mainCustomerContact->isMain) {
    $jsonData["combinedTo"]["mainCustomerContact"]["isMain"] = $model->combinedTo->mainCustomerContact->isMain;
}
if (null !== $model->combinedTo->mainCustomerContact->customer) {
    $jsonData["combinedTo"]["mainCustomerContact"]["customer"] = [];
if (null !== $model->combinedTo->mainCustomerContact->customer->id) {
    $jsonData["combinedTo"]["mainCustomerContact"]["customer"]["id"] = $model->combinedTo->mainCustomerContact->customer->id;
}
if (null !== $model->combinedTo->mainCustomerContact->customer->externalId) {
    $jsonData["combinedTo"]["mainCustomerContact"]["customer"]["externalId"] = $model->combinedTo->mainCustomerContact->customer->externalId;
}
if (null !== $model->combinedTo->mainCustomerContact->customer->browserId) {
    $jsonData["combinedTo"]["mainCustomerContact"]["customer"]["browserId"] = $model->combinedTo->mainCustomerContact->customer->browserId;
}
if (null !== $model->combinedTo->mainCustomerContact->customer->site) {
    $jsonData["combinedTo"]["mainCustomerContact"]["customer"]["site"] = $model->combinedTo->mainCustomerContact->customer->site;
}
if (null !== $model->combinedTo->mainCustomerContact->customer->companies) {
    $jsonData["combinedTo"]["mainCustomerContact"]["customer"]["companies"] = [];
foreach (array_keys($model->combinedTo->mainCustomerContact->customer->companies) as $index62) {
    $jsonData["combinedTo"]["mainCustomerContact"]["customer"]["companies"][$index62] = [];
if (null !== $model->combinedTo->mainCustomerContact->customer->companies[$index62]->id) {
    $jsonData["combinedTo"]["mainCustomerContact"]["customer"]["companies"][$index62]["id"] = $model->combinedTo->mainCustomerContact->customer->companies[$index62]->id;
}
if (null !== $model->combinedTo->mainCustomerContact->customer->companies[$index62]->externalId) {
    $jsonData["combinedTo"]["mainCustomerContact"]["customer"]["companies"][$index62]["externalId"] = $model->combinedTo->mainCustomerContact->customer->companies[$index62]->externalId;
}
if (null !== $model->combinedTo->mainCustomerContact->customer->companies[$index62]->company) {
    $jsonData["combinedTo"]["mainCustomerContact"]["customer"]["companies"][$index62]["company"] = [];
if (null !== $model->combinedTo->mainCustomerContact->customer->companies[$index62]->company->id) {
    $jsonData["combinedTo"]["mainCustomerContact"]["customer"]["companies"][$index62]["company"]["id"] = $model->combinedTo->mainCustomerContact->customer->companies[$index62]->company->id;
}
if (null !== $model->combinedTo->mainCustomerContact->customer->companies[$index62]->company->externalId) {
    $jsonData["combinedTo"]["mainCustomerContact"]["customer"]["companies"][$index62]["company"]["externalId"] = $model->combinedTo->mainCustomerContact->customer->companies[$index62]->company->externalId;
}
if (null !== $model->combinedTo->mainCustomerContact->customer->companies[$index62]->company->name) {
    $jsonData["combinedTo"]["mainCustomerContact"]["customer"]["companies"][$index62]["company"]["name"] = $model->combinedTo->mainCustomerContact->customer->companies[$index62]->company->name;
}

if (0 === \count($jsonData["combinedTo"]["mainCustomerContact"]["customer"]["companies"][$index62]["company"])) {
    $jsonData["combinedTo"]["mainCustomerContact"]["customer"]["companies"][$index62]["company"] = $emptyObject;
}

}

if (0 === \count($jsonData["combinedTo"]["mainCustomerContact"]["customer"]["companies"][$index62])) {
    $jsonData["combinedTo"]["mainCustomerContact"]["customer"]["companies"][$index62] = $emptyObject;
}

}

}

if (0 === \count($jsonData["combinedTo"]["mainCustomerContact"]["customer"])) {
    $jsonData["combinedTo"]["mainCustomerContact"]["customer"] = $emptyObject;
}

}
if (null !== $model->combinedTo->mainCustomerContact->companies) {
    $jsonData["combinedTo"]["mainCustomerContact"]["companies"] = [];
foreach (array_keys($model->combinedTo->mainCustomerContact->companies) as $index50) {
    $jsonData["combinedTo"]["mainCustomerContact"]["companies"][$index50] = [];
if (null !== $model->combinedTo->mainCustomerContact->companies[$index50]->id) {
    $jsonData["combinedTo"]["mainCustomerContact"]["companies"][$index50]["id"] = $model->combinedTo->mainCustomerContact->companies[$index50]->id;
}
if (null !== $model->combinedTo->mainCustomerContact->companies[$index50]->externalId) {
    $jsonData["combinedTo"]["mainCustomerContact"]["companies"][$index50]["externalId"] = $model->combinedTo->mainCustomerContact->companies[$index50]->externalId;
}
if (null !== $model->combinedTo->mainCustomerContact->companies[$index50]->company) {
    $jsonData["combinedTo"]["mainCustomerContact"]["companies"][$index50]["company"] = [];
if (null !== $model->combinedTo->mainCustomerContact->companies[$index50]->company->id) {
    $jsonData["combinedTo"]["mainCustomerContact"]["companies"][$index50]["company"]["id"] = $model->combinedTo->mainCustomerContact->companies[$index50]->company->id;
}
if (null !== $model->combinedTo->mainCustomerContact->companies[$index50]->company->externalId) {
    $jsonData["combinedTo"]["mainCustomerContact"]["companies"][$index50]["company"]["externalId"] = $model->combinedTo->mainCustomerContact->companies[$index50]->company->externalId;
}
if (null !== $model->combinedTo->mainCustomerContact->companies[$index50]->company->name) {
    $jsonData["combinedTo"]["mainCustomerContact"]["companies"][$index50]["company"]["name"] = $model->combinedTo->mainCustomerContact->companies[$index50]->company->name;
}

if (0 === \count($jsonData["combinedTo"]["mainCustomerContact"]["companies"][$index50]["company"])) {
    $jsonData["combinedTo"]["mainCustomerContact"]["companies"][$index50]["company"] = $emptyObject;
}

}

if (0 === \count($jsonData["combinedTo"]["mainCustomerContact"]["companies"][$index50])) {
    $jsonData["combinedTo"]["mainCustomerContact"]["companies"][$index50] = $emptyObject;
}

}

}

if (0 === \count($jsonData["combinedTo"]["mainCustomerContact"])) {
    $jsonData["combinedTo"]["mainCustomerContact"] = $emptyObject;
}

}
if (null !== $model->combinedTo->mainCompany) {
    $jsonData["combinedTo"]["mainCompany"] = [];
if (null !== $model->combinedTo->mainCompany->id) {
    $jsonData["combinedTo"]["mainCompany"]["id"] = $model->combinedTo->mainCompany->id;
}
if (null !== $model->combinedTo->mainCompany->externalId) {
    $jsonData["combinedTo"]["mainCompany"]["externalId"] = $model->combinedTo->mainCompany->externalId;
}
if (null !== $model->combinedTo->mainCompany->name) {
    $jsonData["combinedTo"]["mainCompany"]["name"] = $model->combinedTo->mainCompany->name;
}

if (0 === \count($jsonData["combinedTo"]["mainCompany"])) {
    $jsonData["combinedTo"]["mainCompany"] = $emptyObject;
}

}

if (0 === \count($jsonData["combinedTo"])) {
    $jsonData["combinedTo"] = $emptyObject;
}

}
if (null !== $model->customerContact) {
    $jsonData["customerContact"] = [];
if (null !== $model->customerContact->id) {
    $jsonData["customerContact"]["id"] = $model->customerContact->id;
}
if (null !== $model->customerContact->isMain) {
    $jsonData["customerContact"]["isMain"] = $model->customerContact->isMain;
}
if (null !== $model->customerContact->customer) {
    $jsonData["customerContact"]["customer"] = [];
if (null !== $model->customerContact->customer->id) {
    $jsonData["customerContact"]["customer"]["id"] = $model->customerContact->customer->id;
}
if (null !== $model->customerContact->customer->externalId) {
    $jsonData["customerContact"]["customer"]["externalId"] = $model->customerContact->customer->externalId;
}
if (null !== $model->customerContact->customer->browserId) {
    $jsonData["customerContact"]["customer"]["browserId"] = $model->customerContact->customer->browserId;
}
if (null !== $model->customerContact->customer->site) {
    $jsonData["customerContact"]["customer"]["site"] = $model->customerContact->customer->site;
}
if (null !== $model->customerContact->customer->companies) {
    $jsonData["customerContact"]["customer"]["companies"] = [];
foreach (array_keys($model->customerContact->customer->companies) as $index44) {
    $jsonData["customerContact"]["customer"]["companies"][$index44] = [];
if (null !== $model->customerContact->customer->companies[$index44]->id) {
    $jsonData["customerContact"]["customer"]["companies"][$index44]["id"] = $model->customerContact->customer->companies[$index44]->id;
}
if (null !== $model->customerContact->customer->companies[$index44]->externalId) {
    $jsonData["customerContact"]["customer"]["companies"][$index44]["externalId"] = $model->customerContact->customer->companies[$index44]->externalId;
}
if (null !== $model->customerContact->customer->companies[$index44]->company) {
    $jsonData["customerContact"]["customer"]["companies"][$index44]["company"] = [];
if (null !== $model->customerContact->customer->companies[$index44]->company->id) {
    $jsonData["customerContact"]["customer"]["companies"][$index44]["company"]["id"] = $model->customerContact->customer->companies[$index44]->company->id;
}
if (null !== $model->customerContact->customer->companies[$index44]->company->externalId) {
    $jsonData["customerContact"]["customer"]["companies"][$index44]["company"]["externalId"] = $model->customerContact->customer->companies[$index44]->company->externalId;
}
if (null !== $model->customerContact->customer->companies[$index44]->company->name) {
    $jsonData["customerContact"]["customer"]["companies"][$index44]["company"]["name"] = $model->customerContact->customer->companies[$index44]->company->name;
}

if (0 === \count($jsonData["customerContact"]["customer"]["companies"][$index44]["company"])) {
    $jsonData["customerContact"]["customer"]["companies"][$index44]["company"] = $emptyObject;
}

}

if (0 === \count($jsonData["customerContact"]["customer"]["companies"][$index44])) {
    $jsonData["customerContact"]["customer"]["companies"][$index44] = $emptyObject;
}

}

}

if (0 === \count($jsonData["customerContact"]["customer"])) {
    $jsonData["customerContact"]["customer"] = $emptyObject;
}

}
if (null !== $model->customerContact->companies) {
    $jsonData["customerContact"]["companies"] = [];
foreach (array_keys($model->customerContact->companies) as $index32) {
    $jsonData["customerContact"]["companies"][$index32] = [];
if (null !== $model->customerContact->companies[$index32]->id) {
    $jsonData["customerContact"]["companies"][$index32]["id"] = $model->customerContact->companies[$index32]->id;
}
if (null !== $model->customerContact->companies[$index32]->externalId) {
    $jsonData["customerContact"]["companies"][$index32]["externalId"] = $model->customerContact->companies[$index32]->externalId;
}
if (null !== $model->customerContact->companies[$index32]->company) {
    $jsonData["customerContact"]["companies"][$index32]["company"] = [];
if (null !== $model->customerContact->companies[$index32]->company->id) {
    $jsonData["customerContact"]["companies"][$index32]["company"]["id"] = $model->customerContact->companies[$index32]->company->id;
}
if (null !== $model->customerContact->companies[$index32]->company->externalId) {
    $jsonData["customerContact"]["companies"][$index32]["company"]["externalId"] = $model->customerContact->companies[$index32]->company->externalId;
}
if (null !== $model->customerContact->companies[$index32]->company->name) {
    $jsonData["customerContact"]["companies"][$index32]["company"]["name"] = $model->customerContact->companies[$index32]->company->name;
}

if (0 === \count($jsonData["customerContact"]["companies"][$index32]["company"])) {
    $jsonData["customerContact"]["companies"][$index32]["company"] = $emptyObject;
}

}

if (0 === \count($jsonData["customerContact"]["companies"][$index32])) {
    $jsonData["customerContact"]["companies"][$index32] = $emptyObject;
}

}

}

if (0 === \count($jsonData["customerContact"])) {
    $jsonData["customerContact"] = $emptyObject;
}

}
if (null !== $model->company) {
    $jsonData["company"] = [];
if (null !== $model->company->id) {
    $jsonData["company"]["id"] = $model->company->id;
}
if (null !== $model->company->isMain) {
    $jsonData["company"]["isMain"] = $model->company->isMain;
}
if (null !== $model->company->externalId) {
    $jsonData["company"]["externalId"] = $model->company->externalId;
}
if (null !== $model->company->active) {
    $jsonData["company"]["active"] = $model->company->active;
}
if (null !== $model->company->name) {
    $jsonData["company"]["name"] = $model->company->name;
}
if (null !== $model->company->brand) {
    $jsonData["company"]["brand"] = $model->company->brand;
}
if (null !== $model->company->site) {
    $jsonData["company"]["site"] = $model->company->site;
}
if (null !== $model->company->createdAt) {
    $jsonData["company"]["createdAt"] = $model->company->createdAt->format('Y-m-d H:i:s');;
}
if (null !== $model->company->customer) {
    $jsonData["company"]["customer"] = [];
if (null !== $model->company->customer->site) {
    $jsonData["company"]["customer"]["site"] = $model->company->customer->site;
}
if (null !== $model->company->customer->id) {
    $jsonData["company"]["customer"]["id"] = $model->company->customer->id;
}
if (null !== $model->company->customer->externalId) {
    $jsonData["company"]["customer"]["externalId"] = $model->company->customer->externalId;
}
if (null !== $model->company->customer->type) {
    $jsonData["company"]["customer"]["type"] = $model->company->customer->type;
}

if (0 === \count($jsonData["company"]["customer"])) {
    $jsonData["company"]["customer"] = $emptyObject;
}

}
if (null !== $model->company->contragent) {
    $jsonData["company"]["contragent"] = [];
if (null !== $model->company->contragent->contragentType) {
    $jsonData["company"]["contragent"]["contragentType"] = $model->company->contragent->contragentType;
}
if (null !== $model->company->contragent->legalName) {
    $jsonData["company"]["contragent"]["legalName"] = $model->company->contragent->legalName;
}
if (null !== $model->company->contragent->legalAddress) {
    $jsonData["company"]["contragent"]["legalAddress"] = $model->company->contragent->legalAddress;
}
if (null !== $model->company->contragent->INN) {
    $jsonData["company"]["contragent"]["INN"] = $model->company->contragent->INN;
}
if (null !== $model->company->contragent->OKPO) {
    $jsonData["company"]["contragent"]["OKPO"] = $model->company->contragent->OKPO;
}
if (null !== $model->company->contragent->KPP) {
    $jsonData["company"]["contragent"]["KPP"] = $model->company->contragent->KPP;
}
if (null !== $model->company->contragent->OGRN) {
    $jsonData["company"]["contragent"]["OGRN"] = $model->company->contragent->OGRN;
}
if (null !== $model->company->contragent->OGRNIP) {
    $jsonData["company"]["contragent"]["OGRNIP"] = $model->company->contragent->OGRNIP;
}
if (null !== $model->company->contragent->certificateNumber) {
    $jsonData["company"]["contragent"]["certificateNumber"] = $model->company->contragent->certificateNumber;
}
if (null !== $model->company->contragent->certificateDate) {
    $jsonData["company"]["contragent"]["certificateDate"] = $model->company->contragent->certificateDate->format('Y-m-d H:i:s');;
}
if (null !== $model->company->contragent->BIK) {
    $jsonData["company"]["contragent"]["BIK"] = $model->company->contragent->BIK;
}
if (null !== $model->company->contragent->bank) {
    $jsonData["company"]["contragent"]["bank"] = $model->company->contragent->bank;
}
if (null !== $model->company->contragent->bankAddress) {
    $jsonData["company"]["contragent"]["bankAddress"] = $model->company->contragent->bankAddress;
}
if (null !== $model->company->contragent->corrAccount) {
    $jsonData["company"]["contragent"]["corrAccount"] = $model->company->contragent->corrAccount;
}
if (null !== $model->company->contragent->bankAccount) {
    $jsonData["company"]["contragent"]["bankAccount"] = $model->company->contragent->bankAccount;
}

if (0 === \count($jsonData["company"]["contragent"])) {
    $jsonData["company"]["contragent"] = $emptyObject;
}

}
if (null !== $model->company->address) {
    $jsonData["company"]["address"] = [];
if (null !== $model->company->address->id) {
    $jsonData["company"]["address"]["id"] = $model->company->address->id;
}
if (null !== $model->company->address->name) {
    $jsonData["company"]["address"]["name"] = $model->company->address->name;
}
if (null !== $model->company->address->isMain) {
    $jsonData["company"]["address"]["isMain"] = $model->company->address->isMain;
}
if (null !== $model->company->address->index) {
    $jsonData["company"]["address"]["index"] = $model->company->address->index;
}
if (null !== $model->company->address->countryIso) {
    $jsonData["company"]["address"]["countryIso"] = $model->company->address->countryIso;
}
if (null !== $model->company->address->region) {
    $jsonData["company"]["address"]["region"] = $model->company->address->region;
}
if (null !== $model->company->address->regionId) {
    $jsonData["company"]["address"]["regionId"] = $model->company->address->regionId;
}
if (null !== $model->company->address->city) {
    $jsonData["company"]["address"]["city"] = $model->company->address->city;
}
if (null !== $model->company->address->cityId) {
    $jsonData["company"]["address"]["cityId"] = $model->company->address->cityId;
}
if (null !== $model->company->address->cityType) {
    $jsonData["company"]["address"]["cityType"] = $model->company->address->cityType;
}
if (null !== $model->company->address->street) {
    $jsonData["company"]["address"]["street"] = $model->company->address->street;
}
if (null !== $model->company->address->streetId) {
    $jsonData["company"]["address"]["streetId"] = $model->company->address->streetId;
}
if (null !== $model->company->address->streetType) {
    $jsonData["company"]["address"]["streetType"] = $model->company->address->streetType;
}
if (null !== $model->company->address->building) {
    $jsonData["company"]["address"]["building"] = $model->company->address->building;
}
if (null !== $model->company->address->flat) {
    $jsonData["company"]["address"]["flat"] = $model->company->address->flat;
}
if (null !== $model->company->address->floor) {
    $jsonData["company"]["address"]["floor"] = $model->company->address->floor;
}
if (null !== $model->company->address->block) {
    $jsonData["company"]["address"]["block"] = $model->company->address->block;
}
if (null !== $model->company->address->house) {
    $jsonData["company"]["address"]["house"] = $model->company->address->house;
}
if (null !== $model->company->address->housing) {
    $jsonData["company"]["address"]["housing"] = $model->company->address->housing;
}
if (null !== $model->company->address->metro) {
    $jsonData["company"]["address"]["metro"] = $model->company->address->metro;
}
if (null !== $model->company->address->notes) {
    $jsonData["company"]["address"]["notes"] = $model->company->address->notes;
}
if (null !== $model->company->address->text) {
    $jsonData["company"]["address"]["text"] = $model->company->address->text;
}
if (null !== $model->company->address->externalId) {
    $jsonData["company"]["address"]["externalId"] = $model->company->address->externalId;
}

if (0 === \count($jsonData["company"]["address"])) {
    $jsonData["company"]["address"] = $emptyObject;
}

}
if (null !== $model->company->customFields) {
    $jsonData["company"]["customFields"] = [];
foreach (array_keys($model->company->customFields) as $index27) {
    $jsonData["company"]["customFields"] = $model->company->customFields;
}

}
if (null !== $model->company->marginSumm) {
    $jsonData["company"]["marginSumm"] = $model->company->marginSumm;
}
if (null !== $model->company->totalSumm) {
    $jsonData["company"]["totalSumm"] = $model->company->totalSumm;
}
if (null !== $model->company->averageSumm) {
    $jsonData["company"]["averageSumm"] = $model->company->averageSumm;
}
if (null !== $model->company->ordersCount) {
    $jsonData["company"]["ordersCount"] = $model->company->ordersCount;
}
if (null !== $model->company->costSumm) {
    $jsonData["company"]["costSumm"] = $model->company->costSumm;
}

if (0 === \count($jsonData["company"])) {
    $jsonData["company"] = $emptyObject;
}

}

if (0 === \count($jsonData)) {
    $jsonData = $emptyObject;
}


    return $jsonData;
}
