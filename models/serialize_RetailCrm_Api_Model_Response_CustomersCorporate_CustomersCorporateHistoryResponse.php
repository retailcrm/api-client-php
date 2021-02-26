<?php

function serialize_RetailCrm_Api_Model_Response_CustomersCorporate_CustomersCorporateHistoryResponse(RetailCrm\Api\Model\Response\CustomersCorporate\CustomersCorporateHistoryResponse $model, bool $useStdClass = true)
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
if (null !== $model->history[$index11]->customer->nickName) {
    $jsonData["history"][$index11]["customer"]["nickName"] = $model->history[$index11]->customer->nickName;
}
if (null !== $model->history[$index11]->customer->mainAddress) {
    $jsonData["history"][$index11]["customer"]["mainAddress"] = [];
if (null !== $model->history[$index11]->customer->mainAddress->id) {
    $jsonData["history"][$index11]["customer"]["mainAddress"]["id"] = $model->history[$index11]->customer->mainAddress->id;
}
if (null !== $model->history[$index11]->customer->mainAddress->externalId) {
    $jsonData["history"][$index11]["customer"]["mainAddress"]["externalId"] = $model->history[$index11]->customer->mainAddress->externalId;
}
if (null !== $model->history[$index11]->customer->mainAddress->name) {
    $jsonData["history"][$index11]["customer"]["mainAddress"]["name"] = $model->history[$index11]->customer->mainAddress->name;
}

if (0 === \count($jsonData["history"][$index11]["customer"]["mainAddress"])) {
    $jsonData["history"][$index11]["customer"]["mainAddress"] = $emptyObject;
}

}
if (null !== $model->history[$index11]->customer->createdAt) {
    $jsonData["history"][$index11]["customer"]["createdAt"] = $model->history[$index11]->customer->createdAt->format('Y-m-d H:i:s');;
}
if (null !== $model->history[$index11]->customer->managerId) {
    $jsonData["history"][$index11]["customer"]["managerId"] = $model->history[$index11]->customer->managerId;
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
if (null !== $model->history[$index11]->customer->customerContacts) {
    $jsonData["history"][$index11]["customer"]["customerContacts"] = [];
foreach (array_keys($model->history[$index11]->customer->customerContacts) as $index53) {
    $jsonData["history"][$index11]["customer"]["customerContacts"][$index53] = [];
if (null !== $model->history[$index11]->customer->customerContacts[$index53]->id) {
    $jsonData["history"][$index11]["customer"]["customerContacts"][$index53]["id"] = $model->history[$index11]->customer->customerContacts[$index53]->id;
}
if (null !== $model->history[$index11]->customer->customerContacts[$index53]->isMain) {
    $jsonData["history"][$index11]["customer"]["customerContacts"][$index53]["isMain"] = $model->history[$index11]->customer->customerContacts[$index53]->isMain;
}
if (null !== $model->history[$index11]->customer->customerContacts[$index53]->customer) {
    $jsonData["history"][$index11]["customer"]["customerContacts"][$index53]["customer"] = [];
if (null !== $model->history[$index11]->customer->customerContacts[$index53]->customer->id) {
    $jsonData["history"][$index11]["customer"]["customerContacts"][$index53]["customer"]["id"] = $model->history[$index11]->customer->customerContacts[$index53]->customer->id;
}
if (null !== $model->history[$index11]->customer->customerContacts[$index53]->customer->externalId) {
    $jsonData["history"][$index11]["customer"]["customerContacts"][$index53]["customer"]["externalId"] = $model->history[$index11]->customer->customerContacts[$index53]->customer->externalId;
}
if (null !== $model->history[$index11]->customer->customerContacts[$index53]->customer->browserId) {
    $jsonData["history"][$index11]["customer"]["customerContacts"][$index53]["customer"]["browserId"] = $model->history[$index11]->customer->customerContacts[$index53]->customer->browserId;
}
if (null !== $model->history[$index11]->customer->customerContacts[$index53]->customer->site) {
    $jsonData["history"][$index11]["customer"]["customerContacts"][$index53]["customer"]["site"] = $model->history[$index11]->customer->customerContacts[$index53]->customer->site;
}
if (null !== $model->history[$index11]->customer->customerContacts[$index53]->customer->companies) {
    $jsonData["history"][$index11]["customer"]["customerContacts"][$index53]["customer"]["companies"] = [];
foreach (array_keys($model->history[$index11]->customer->customerContacts[$index53]->customer->companies) as $index88) {
    $jsonData["history"][$index11]["customer"]["customerContacts"][$index53]["customer"]["companies"][$index88] = [];
if (null !== $model->history[$index11]->customer->customerContacts[$index53]->customer->companies[$index88]->id) {
    $jsonData["history"][$index11]["customer"]["customerContacts"][$index53]["customer"]["companies"][$index88]["id"] = $model->history[$index11]->customer->customerContacts[$index53]->customer->companies[$index88]->id;
}
if (null !== $model->history[$index11]->customer->customerContacts[$index53]->customer->companies[$index88]->externalId) {
    $jsonData["history"][$index11]["customer"]["customerContacts"][$index53]["customer"]["companies"][$index88]["externalId"] = $model->history[$index11]->customer->customerContacts[$index53]->customer->companies[$index88]->externalId;
}
if (null !== $model->history[$index11]->customer->customerContacts[$index53]->customer->companies[$index88]->company) {
    $jsonData["history"][$index11]["customer"]["customerContacts"][$index53]["customer"]["companies"][$index88]["company"] = [];
if (null !== $model->history[$index11]->customer->customerContacts[$index53]->customer->companies[$index88]->company->id) {
    $jsonData["history"][$index11]["customer"]["customerContacts"][$index53]["customer"]["companies"][$index88]["company"]["id"] = $model->history[$index11]->customer->customerContacts[$index53]->customer->companies[$index88]->company->id;
}
if (null !== $model->history[$index11]->customer->customerContacts[$index53]->customer->companies[$index88]->company->externalId) {
    $jsonData["history"][$index11]["customer"]["customerContacts"][$index53]["customer"]["companies"][$index88]["company"]["externalId"] = $model->history[$index11]->customer->customerContacts[$index53]->customer->companies[$index88]->company->externalId;
}
if (null !== $model->history[$index11]->customer->customerContacts[$index53]->customer->companies[$index88]->company->name) {
    $jsonData["history"][$index11]["customer"]["customerContacts"][$index53]["customer"]["companies"][$index88]["company"]["name"] = $model->history[$index11]->customer->customerContacts[$index53]->customer->companies[$index88]->company->name;
}

if (0 === \count($jsonData["history"][$index11]["customer"]["customerContacts"][$index53]["customer"]["companies"][$index88]["company"])) {
    $jsonData["history"][$index11]["customer"]["customerContacts"][$index53]["customer"]["companies"][$index88]["company"] = $emptyObject;
}

}

if (0 === \count($jsonData["history"][$index11]["customer"]["customerContacts"][$index53]["customer"]["companies"][$index88])) {
    $jsonData["history"][$index11]["customer"]["customerContacts"][$index53]["customer"]["companies"][$index88] = $emptyObject;
}

}

}

if (0 === \count($jsonData["history"][$index11]["customer"]["customerContacts"][$index53]["customer"])) {
    $jsonData["history"][$index11]["customer"]["customerContacts"][$index53]["customer"] = $emptyObject;
}

}
if (null !== $model->history[$index11]->customer->customerContacts[$index53]->companies) {
    $jsonData["history"][$index11]["customer"]["customerContacts"][$index53]["companies"] = [];
foreach (array_keys($model->history[$index11]->customer->customerContacts[$index53]->companies) as $index76) {
    $jsonData["history"][$index11]["customer"]["customerContacts"][$index53]["companies"][$index76] = [];
if (null !== $model->history[$index11]->customer->customerContacts[$index53]->companies[$index76]->id) {
    $jsonData["history"][$index11]["customer"]["customerContacts"][$index53]["companies"][$index76]["id"] = $model->history[$index11]->customer->customerContacts[$index53]->companies[$index76]->id;
}
if (null !== $model->history[$index11]->customer->customerContacts[$index53]->companies[$index76]->externalId) {
    $jsonData["history"][$index11]["customer"]["customerContacts"][$index53]["companies"][$index76]["externalId"] = $model->history[$index11]->customer->customerContacts[$index53]->companies[$index76]->externalId;
}
if (null !== $model->history[$index11]->customer->customerContacts[$index53]->companies[$index76]->company) {
    $jsonData["history"][$index11]["customer"]["customerContacts"][$index53]["companies"][$index76]["company"] = [];
if (null !== $model->history[$index11]->customer->customerContacts[$index53]->companies[$index76]->company->id) {
    $jsonData["history"][$index11]["customer"]["customerContacts"][$index53]["companies"][$index76]["company"]["id"] = $model->history[$index11]->customer->customerContacts[$index53]->companies[$index76]->company->id;
}
if (null !== $model->history[$index11]->customer->customerContacts[$index53]->companies[$index76]->company->externalId) {
    $jsonData["history"][$index11]["customer"]["customerContacts"][$index53]["companies"][$index76]["company"]["externalId"] = $model->history[$index11]->customer->customerContacts[$index53]->companies[$index76]->company->externalId;
}
if (null !== $model->history[$index11]->customer->customerContacts[$index53]->companies[$index76]->company->name) {
    $jsonData["history"][$index11]["customer"]["customerContacts"][$index53]["companies"][$index76]["company"]["name"] = $model->history[$index11]->customer->customerContacts[$index53]->companies[$index76]->company->name;
}

if (0 === \count($jsonData["history"][$index11]["customer"]["customerContacts"][$index53]["companies"][$index76]["company"])) {
    $jsonData["history"][$index11]["customer"]["customerContacts"][$index53]["companies"][$index76]["company"] = $emptyObject;
}

}

if (0 === \count($jsonData["history"][$index11]["customer"]["customerContacts"][$index53]["companies"][$index76])) {
    $jsonData["history"][$index11]["customer"]["customerContacts"][$index53]["companies"][$index76] = $emptyObject;
}

}

}

if (0 === \count($jsonData["history"][$index11]["customer"]["customerContacts"][$index53])) {
    $jsonData["history"][$index11]["customer"]["customerContacts"][$index53] = $emptyObject;
}

}

}
if (null !== $model->history[$index11]->customer->companies) {
    $jsonData["history"][$index11]["customer"]["companies"] = [];
foreach (array_keys($model->history[$index11]->customer->companies) as $index46) {
    $jsonData["history"][$index11]["customer"]["companies"][$index46] = [];
if (null !== $model->history[$index11]->customer->companies[$index46]->id) {
    $jsonData["history"][$index11]["customer"]["companies"][$index46]["id"] = $model->history[$index11]->customer->companies[$index46]->id;
}
if (null !== $model->history[$index11]->customer->companies[$index46]->isMain) {
    $jsonData["history"][$index11]["customer"]["companies"][$index46]["isMain"] = $model->history[$index11]->customer->companies[$index46]->isMain;
}
if (null !== $model->history[$index11]->customer->companies[$index46]->externalId) {
    $jsonData["history"][$index11]["customer"]["companies"][$index46]["externalId"] = $model->history[$index11]->customer->companies[$index46]->externalId;
}
if (null !== $model->history[$index11]->customer->companies[$index46]->active) {
    $jsonData["history"][$index11]["customer"]["companies"][$index46]["active"] = $model->history[$index11]->customer->companies[$index46]->active;
}
if (null !== $model->history[$index11]->customer->companies[$index46]->name) {
    $jsonData["history"][$index11]["customer"]["companies"][$index46]["name"] = $model->history[$index11]->customer->companies[$index46]->name;
}
if (null !== $model->history[$index11]->customer->companies[$index46]->brand) {
    $jsonData["history"][$index11]["customer"]["companies"][$index46]["brand"] = $model->history[$index11]->customer->companies[$index46]->brand;
}
if (null !== $model->history[$index11]->customer->companies[$index46]->site) {
    $jsonData["history"][$index11]["customer"]["companies"][$index46]["site"] = $model->history[$index11]->customer->companies[$index46]->site;
}
if (null !== $model->history[$index11]->customer->companies[$index46]->createdAt) {
    $jsonData["history"][$index11]["customer"]["companies"][$index46]["createdAt"] = $model->history[$index11]->customer->companies[$index46]->createdAt->format('Y-m-d H:i:s');;
}
if (null !== $model->history[$index11]->customer->companies[$index46]->customer) {
    $jsonData["history"][$index11]["customer"]["companies"][$index46]["customer"] = [];
if (null !== $model->history[$index11]->customer->companies[$index46]->customer->site) {
    $jsonData["history"][$index11]["customer"]["companies"][$index46]["customer"]["site"] = $model->history[$index11]->customer->companies[$index46]->customer->site;
}
if (null !== $model->history[$index11]->customer->companies[$index46]->customer->id) {
    $jsonData["history"][$index11]["customer"]["companies"][$index46]["customer"]["id"] = $model->history[$index11]->customer->companies[$index46]->customer->id;
}
if (null !== $model->history[$index11]->customer->companies[$index46]->customer->externalId) {
    $jsonData["history"][$index11]["customer"]["companies"][$index46]["customer"]["externalId"] = $model->history[$index11]->customer->companies[$index46]->customer->externalId;
}
if (null !== $model->history[$index11]->customer->companies[$index46]->customer->type) {
    $jsonData["history"][$index11]["customer"]["companies"][$index46]["customer"]["type"] = $model->history[$index11]->customer->companies[$index46]->customer->type;
}

if (0 === \count($jsonData["history"][$index11]["customer"]["companies"][$index46]["customer"])) {
    $jsonData["history"][$index11]["customer"]["companies"][$index46]["customer"] = $emptyObject;
}

}
if (null !== $model->history[$index11]->customer->companies[$index46]->contragent) {
    $jsonData["history"][$index11]["customer"]["companies"][$index46]["contragent"] = [];
if (null !== $model->history[$index11]->customer->companies[$index46]->contragent->contragentType) {
    $jsonData["history"][$index11]["customer"]["companies"][$index46]["contragent"]["contragentType"] = $model->history[$index11]->customer->companies[$index46]->contragent->contragentType;
}
if (null !== $model->history[$index11]->customer->companies[$index46]->contragent->legalName) {
    $jsonData["history"][$index11]["customer"]["companies"][$index46]["contragent"]["legalName"] = $model->history[$index11]->customer->companies[$index46]->contragent->legalName;
}
if (null !== $model->history[$index11]->customer->companies[$index46]->contragent->legalAddress) {
    $jsonData["history"][$index11]["customer"]["companies"][$index46]["contragent"]["legalAddress"] = $model->history[$index11]->customer->companies[$index46]->contragent->legalAddress;
}
if (null !== $model->history[$index11]->customer->companies[$index46]->contragent->INN) {
    $jsonData["history"][$index11]["customer"]["companies"][$index46]["contragent"]["INN"] = $model->history[$index11]->customer->companies[$index46]->contragent->INN;
}
if (null !== $model->history[$index11]->customer->companies[$index46]->contragent->OKPO) {
    $jsonData["history"][$index11]["customer"]["companies"][$index46]["contragent"]["OKPO"] = $model->history[$index11]->customer->companies[$index46]->contragent->OKPO;
}
if (null !== $model->history[$index11]->customer->companies[$index46]->contragent->KPP) {
    $jsonData["history"][$index11]["customer"]["companies"][$index46]["contragent"]["KPP"] = $model->history[$index11]->customer->companies[$index46]->contragent->KPP;
}
if (null !== $model->history[$index11]->customer->companies[$index46]->contragent->OGRN) {
    $jsonData["history"][$index11]["customer"]["companies"][$index46]["contragent"]["OGRN"] = $model->history[$index11]->customer->companies[$index46]->contragent->OGRN;
}
if (null !== $model->history[$index11]->customer->companies[$index46]->contragent->OGRNIP) {
    $jsonData["history"][$index11]["customer"]["companies"][$index46]["contragent"]["OGRNIP"] = $model->history[$index11]->customer->companies[$index46]->contragent->OGRNIP;
}
if (null !== $model->history[$index11]->customer->companies[$index46]->contragent->certificateNumber) {
    $jsonData["history"][$index11]["customer"]["companies"][$index46]["contragent"]["certificateNumber"] = $model->history[$index11]->customer->companies[$index46]->contragent->certificateNumber;
}
if (null !== $model->history[$index11]->customer->companies[$index46]->contragent->certificateDate) {
    $jsonData["history"][$index11]["customer"]["companies"][$index46]["contragent"]["certificateDate"] = $model->history[$index11]->customer->companies[$index46]->contragent->certificateDate->format('Y-m-d H:i:s');;
}
if (null !== $model->history[$index11]->customer->companies[$index46]->contragent->BIK) {
    $jsonData["history"][$index11]["customer"]["companies"][$index46]["contragent"]["BIK"] = $model->history[$index11]->customer->companies[$index46]->contragent->BIK;
}
if (null !== $model->history[$index11]->customer->companies[$index46]->contragent->bank) {
    $jsonData["history"][$index11]["customer"]["companies"][$index46]["contragent"]["bank"] = $model->history[$index11]->customer->companies[$index46]->contragent->bank;
}
if (null !== $model->history[$index11]->customer->companies[$index46]->contragent->bankAddress) {
    $jsonData["history"][$index11]["customer"]["companies"][$index46]["contragent"]["bankAddress"] = $model->history[$index11]->customer->companies[$index46]->contragent->bankAddress;
}
if (null !== $model->history[$index11]->customer->companies[$index46]->contragent->corrAccount) {
    $jsonData["history"][$index11]["customer"]["companies"][$index46]["contragent"]["corrAccount"] = $model->history[$index11]->customer->companies[$index46]->contragent->corrAccount;
}
if (null !== $model->history[$index11]->customer->companies[$index46]->contragent->bankAccount) {
    $jsonData["history"][$index11]["customer"]["companies"][$index46]["contragent"]["bankAccount"] = $model->history[$index11]->customer->companies[$index46]->contragent->bankAccount;
}

if (0 === \count($jsonData["history"][$index11]["customer"]["companies"][$index46]["contragent"])) {
    $jsonData["history"][$index11]["customer"]["companies"][$index46]["contragent"] = $emptyObject;
}

}
if (null !== $model->history[$index11]->customer->companies[$index46]->address) {
    $jsonData["history"][$index11]["customer"]["companies"][$index46]["address"] = [];
if (null !== $model->history[$index11]->customer->companies[$index46]->address->id) {
    $jsonData["history"][$index11]["customer"]["companies"][$index46]["address"]["id"] = $model->history[$index11]->customer->companies[$index46]->address->id;
}
if (null !== $model->history[$index11]->customer->companies[$index46]->address->name) {
    $jsonData["history"][$index11]["customer"]["companies"][$index46]["address"]["name"] = $model->history[$index11]->customer->companies[$index46]->address->name;
}
if (null !== $model->history[$index11]->customer->companies[$index46]->address->isMain) {
    $jsonData["history"][$index11]["customer"]["companies"][$index46]["address"]["isMain"] = $model->history[$index11]->customer->companies[$index46]->address->isMain;
}
if (null !== $model->history[$index11]->customer->companies[$index46]->address->index) {
    $jsonData["history"][$index11]["customer"]["companies"][$index46]["address"]["index"] = $model->history[$index11]->customer->companies[$index46]->address->index;
}
if (null !== $model->history[$index11]->customer->companies[$index46]->address->countryIso) {
    $jsonData["history"][$index11]["customer"]["companies"][$index46]["address"]["countryIso"] = $model->history[$index11]->customer->companies[$index46]->address->countryIso;
}
if (null !== $model->history[$index11]->customer->companies[$index46]->address->region) {
    $jsonData["history"][$index11]["customer"]["companies"][$index46]["address"]["region"] = $model->history[$index11]->customer->companies[$index46]->address->region;
}
if (null !== $model->history[$index11]->customer->companies[$index46]->address->regionId) {
    $jsonData["history"][$index11]["customer"]["companies"][$index46]["address"]["regionId"] = $model->history[$index11]->customer->companies[$index46]->address->regionId;
}
if (null !== $model->history[$index11]->customer->companies[$index46]->address->city) {
    $jsonData["history"][$index11]["customer"]["companies"][$index46]["address"]["city"] = $model->history[$index11]->customer->companies[$index46]->address->city;
}
if (null !== $model->history[$index11]->customer->companies[$index46]->address->cityId) {
    $jsonData["history"][$index11]["customer"]["companies"][$index46]["address"]["cityId"] = $model->history[$index11]->customer->companies[$index46]->address->cityId;
}
if (null !== $model->history[$index11]->customer->companies[$index46]->address->cityType) {
    $jsonData["history"][$index11]["customer"]["companies"][$index46]["address"]["cityType"] = $model->history[$index11]->customer->companies[$index46]->address->cityType;
}
if (null !== $model->history[$index11]->customer->companies[$index46]->address->street) {
    $jsonData["history"][$index11]["customer"]["companies"][$index46]["address"]["street"] = $model->history[$index11]->customer->companies[$index46]->address->street;
}
if (null !== $model->history[$index11]->customer->companies[$index46]->address->streetId) {
    $jsonData["history"][$index11]["customer"]["companies"][$index46]["address"]["streetId"] = $model->history[$index11]->customer->companies[$index46]->address->streetId;
}
if (null !== $model->history[$index11]->customer->companies[$index46]->address->streetType) {
    $jsonData["history"][$index11]["customer"]["companies"][$index46]["address"]["streetType"] = $model->history[$index11]->customer->companies[$index46]->address->streetType;
}
if (null !== $model->history[$index11]->customer->companies[$index46]->address->building) {
    $jsonData["history"][$index11]["customer"]["companies"][$index46]["address"]["building"] = $model->history[$index11]->customer->companies[$index46]->address->building;
}
if (null !== $model->history[$index11]->customer->companies[$index46]->address->flat) {
    $jsonData["history"][$index11]["customer"]["companies"][$index46]["address"]["flat"] = $model->history[$index11]->customer->companies[$index46]->address->flat;
}
if (null !== $model->history[$index11]->customer->companies[$index46]->address->floor) {
    $jsonData["history"][$index11]["customer"]["companies"][$index46]["address"]["floor"] = $model->history[$index11]->customer->companies[$index46]->address->floor;
}
if (null !== $model->history[$index11]->customer->companies[$index46]->address->block) {
    $jsonData["history"][$index11]["customer"]["companies"][$index46]["address"]["block"] = $model->history[$index11]->customer->companies[$index46]->address->block;
}
if (null !== $model->history[$index11]->customer->companies[$index46]->address->house) {
    $jsonData["history"][$index11]["customer"]["companies"][$index46]["address"]["house"] = $model->history[$index11]->customer->companies[$index46]->address->house;
}
if (null !== $model->history[$index11]->customer->companies[$index46]->address->housing) {
    $jsonData["history"][$index11]["customer"]["companies"][$index46]["address"]["housing"] = $model->history[$index11]->customer->companies[$index46]->address->housing;
}
if (null !== $model->history[$index11]->customer->companies[$index46]->address->metro) {
    $jsonData["history"][$index11]["customer"]["companies"][$index46]["address"]["metro"] = $model->history[$index11]->customer->companies[$index46]->address->metro;
}
if (null !== $model->history[$index11]->customer->companies[$index46]->address->notes) {
    $jsonData["history"][$index11]["customer"]["companies"][$index46]["address"]["notes"] = $model->history[$index11]->customer->companies[$index46]->address->notes;
}
if (null !== $model->history[$index11]->customer->companies[$index46]->address->text) {
    $jsonData["history"][$index11]["customer"]["companies"][$index46]["address"]["text"] = $model->history[$index11]->customer->companies[$index46]->address->text;
}
if (null !== $model->history[$index11]->customer->companies[$index46]->address->externalId) {
    $jsonData["history"][$index11]["customer"]["companies"][$index46]["address"]["externalId"] = $model->history[$index11]->customer->companies[$index46]->address->externalId;
}

if (0 === \count($jsonData["history"][$index11]["customer"]["companies"][$index46]["address"])) {
    $jsonData["history"][$index11]["customer"]["companies"][$index46]["address"] = $emptyObject;
}

}
if (null !== $model->history[$index11]->customer->companies[$index46]->customFields) {
    $jsonData["history"][$index11]["customer"]["companies"][$index46]["customFields"] = [];
foreach (array_keys($model->history[$index11]->customer->companies[$index46]->customFields) as $index72) {
    $jsonData["history"][$index11]["customer"]["companies"][$index46]["customFields"] = $model->history[$index11]->customer->companies[$index46]->customFields;
}

}
if (null !== $model->history[$index11]->customer->companies[$index46]->marginSumm) {
    $jsonData["history"][$index11]["customer"]["companies"][$index46]["marginSumm"] = $model->history[$index11]->customer->companies[$index46]->marginSumm;
}
if (null !== $model->history[$index11]->customer->companies[$index46]->totalSumm) {
    $jsonData["history"][$index11]["customer"]["companies"][$index46]["totalSumm"] = $model->history[$index11]->customer->companies[$index46]->totalSumm;
}
if (null !== $model->history[$index11]->customer->companies[$index46]->averageSumm) {
    $jsonData["history"][$index11]["customer"]["companies"][$index46]["averageSumm"] = $model->history[$index11]->customer->companies[$index46]->averageSumm;
}
if (null !== $model->history[$index11]->customer->companies[$index46]->ordersCount) {
    $jsonData["history"][$index11]["customer"]["companies"][$index46]["ordersCount"] = $model->history[$index11]->customer->companies[$index46]->ordersCount;
}
if (null !== $model->history[$index11]->customer->companies[$index46]->costSumm) {
    $jsonData["history"][$index11]["customer"]["companies"][$index46]["costSumm"] = $model->history[$index11]->customer->companies[$index46]->costSumm;
}

if (0 === \count($jsonData["history"][$index11]["customer"]["companies"][$index46])) {
    $jsonData["history"][$index11]["customer"]["companies"][$index46] = $emptyObject;
}

}

}
if (null !== $model->history[$index11]->customer->addresses) {
    $jsonData["history"][$index11]["customer"]["addresses"] = [];
foreach (array_keys($model->history[$index11]->customer->addresses) as $index46) {
    $jsonData["history"][$index11]["customer"]["addresses"][$index46] = [];
if (null !== $model->history[$index11]->customer->addresses[$index46]->id) {
    $jsonData["history"][$index11]["customer"]["addresses"][$index46]["id"] = $model->history[$index11]->customer->addresses[$index46]->id;
}
if (null !== $model->history[$index11]->customer->addresses[$index46]->name) {
    $jsonData["history"][$index11]["customer"]["addresses"][$index46]["name"] = $model->history[$index11]->customer->addresses[$index46]->name;
}
if (null !== $model->history[$index11]->customer->addresses[$index46]->isMain) {
    $jsonData["history"][$index11]["customer"]["addresses"][$index46]["isMain"] = $model->history[$index11]->customer->addresses[$index46]->isMain;
}
if (null !== $model->history[$index11]->customer->addresses[$index46]->index) {
    $jsonData["history"][$index11]["customer"]["addresses"][$index46]["index"] = $model->history[$index11]->customer->addresses[$index46]->index;
}
if (null !== $model->history[$index11]->customer->addresses[$index46]->countryIso) {
    $jsonData["history"][$index11]["customer"]["addresses"][$index46]["countryIso"] = $model->history[$index11]->customer->addresses[$index46]->countryIso;
}
if (null !== $model->history[$index11]->customer->addresses[$index46]->region) {
    $jsonData["history"][$index11]["customer"]["addresses"][$index46]["region"] = $model->history[$index11]->customer->addresses[$index46]->region;
}
if (null !== $model->history[$index11]->customer->addresses[$index46]->regionId) {
    $jsonData["history"][$index11]["customer"]["addresses"][$index46]["regionId"] = $model->history[$index11]->customer->addresses[$index46]->regionId;
}
if (null !== $model->history[$index11]->customer->addresses[$index46]->city) {
    $jsonData["history"][$index11]["customer"]["addresses"][$index46]["city"] = $model->history[$index11]->customer->addresses[$index46]->city;
}
if (null !== $model->history[$index11]->customer->addresses[$index46]->cityId) {
    $jsonData["history"][$index11]["customer"]["addresses"][$index46]["cityId"] = $model->history[$index11]->customer->addresses[$index46]->cityId;
}
if (null !== $model->history[$index11]->customer->addresses[$index46]->cityType) {
    $jsonData["history"][$index11]["customer"]["addresses"][$index46]["cityType"] = $model->history[$index11]->customer->addresses[$index46]->cityType;
}
if (null !== $model->history[$index11]->customer->addresses[$index46]->street) {
    $jsonData["history"][$index11]["customer"]["addresses"][$index46]["street"] = $model->history[$index11]->customer->addresses[$index46]->street;
}
if (null !== $model->history[$index11]->customer->addresses[$index46]->streetId) {
    $jsonData["history"][$index11]["customer"]["addresses"][$index46]["streetId"] = $model->history[$index11]->customer->addresses[$index46]->streetId;
}
if (null !== $model->history[$index11]->customer->addresses[$index46]->streetType) {
    $jsonData["history"][$index11]["customer"]["addresses"][$index46]["streetType"] = $model->history[$index11]->customer->addresses[$index46]->streetType;
}
if (null !== $model->history[$index11]->customer->addresses[$index46]->building) {
    $jsonData["history"][$index11]["customer"]["addresses"][$index46]["building"] = $model->history[$index11]->customer->addresses[$index46]->building;
}
if (null !== $model->history[$index11]->customer->addresses[$index46]->flat) {
    $jsonData["history"][$index11]["customer"]["addresses"][$index46]["flat"] = $model->history[$index11]->customer->addresses[$index46]->flat;
}
if (null !== $model->history[$index11]->customer->addresses[$index46]->floor) {
    $jsonData["history"][$index11]["customer"]["addresses"][$index46]["floor"] = $model->history[$index11]->customer->addresses[$index46]->floor;
}
if (null !== $model->history[$index11]->customer->addresses[$index46]->block) {
    $jsonData["history"][$index11]["customer"]["addresses"][$index46]["block"] = $model->history[$index11]->customer->addresses[$index46]->block;
}
if (null !== $model->history[$index11]->customer->addresses[$index46]->house) {
    $jsonData["history"][$index11]["customer"]["addresses"][$index46]["house"] = $model->history[$index11]->customer->addresses[$index46]->house;
}
if (null !== $model->history[$index11]->customer->addresses[$index46]->housing) {
    $jsonData["history"][$index11]["customer"]["addresses"][$index46]["housing"] = $model->history[$index11]->customer->addresses[$index46]->housing;
}
if (null !== $model->history[$index11]->customer->addresses[$index46]->metro) {
    $jsonData["history"][$index11]["customer"]["addresses"][$index46]["metro"] = $model->history[$index11]->customer->addresses[$index46]->metro;
}
if (null !== $model->history[$index11]->customer->addresses[$index46]->notes) {
    $jsonData["history"][$index11]["customer"]["addresses"][$index46]["notes"] = $model->history[$index11]->customer->addresses[$index46]->notes;
}
if (null !== $model->history[$index11]->customer->addresses[$index46]->text) {
    $jsonData["history"][$index11]["customer"]["addresses"][$index46]["text"] = $model->history[$index11]->customer->addresses[$index46]->text;
}
if (null !== $model->history[$index11]->customer->addresses[$index46]->externalId) {
    $jsonData["history"][$index11]["customer"]["addresses"][$index46]["externalId"] = $model->history[$index11]->customer->addresses[$index46]->externalId;
}

if (0 === \count($jsonData["history"][$index11]["customer"]["addresses"][$index46])) {
    $jsonData["history"][$index11]["customer"]["addresses"][$index46] = $emptyObject;
}

}

}
if (null !== $model->history[$index11]->customer->vip) {
    $jsonData["history"][$index11]["customer"]["vip"] = $model->history[$index11]->customer->vip;
}
if (null !== $model->history[$index11]->customer->bad) {
    $jsonData["history"][$index11]["customer"]["bad"] = $model->history[$index11]->customer->bad;
}
if (null !== $model->history[$index11]->customer->site) {
    $jsonData["history"][$index11]["customer"]["site"] = $model->history[$index11]->customer->site;
}
if (null !== $model->history[$index11]->customer->tags) {
    $jsonData["history"][$index11]["customer"]["tags"] = [];
foreach (array_keys($model->history[$index11]->customer->tags) as $index41) {
    $jsonData["history"][$index11]["customer"]["tags"][$index41] = $model->history[$index11]->customer->tags[$index41]->name;
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
if (null !== $model->history[$index11]->customer->mainCustomerContact) {
    $jsonData["history"][$index11]["customer"]["mainCustomerContact"] = [];
if (null !== $model->history[$index11]->customer->mainCustomerContact->id) {
    $jsonData["history"][$index11]["customer"]["mainCustomerContact"]["id"] = $model->history[$index11]->customer->mainCustomerContact->id;
}
if (null !== $model->history[$index11]->customer->mainCustomerContact->isMain) {
    $jsonData["history"][$index11]["customer"]["mainCustomerContact"]["isMain"] = $model->history[$index11]->customer->mainCustomerContact->isMain;
}
if (null !== $model->history[$index11]->customer->mainCustomerContact->customer) {
    $jsonData["history"][$index11]["customer"]["mainCustomerContact"]["customer"] = [];
if (null !== $model->history[$index11]->customer->mainCustomerContact->customer->id) {
    $jsonData["history"][$index11]["customer"]["mainCustomerContact"]["customer"]["id"] = $model->history[$index11]->customer->mainCustomerContact->customer->id;
}
if (null !== $model->history[$index11]->customer->mainCustomerContact->customer->externalId) {
    $jsonData["history"][$index11]["customer"]["mainCustomerContact"]["customer"]["externalId"] = $model->history[$index11]->customer->mainCustomerContact->customer->externalId;
}
if (null !== $model->history[$index11]->customer->mainCustomerContact->customer->browserId) {
    $jsonData["history"][$index11]["customer"]["mainCustomerContact"]["customer"]["browserId"] = $model->history[$index11]->customer->mainCustomerContact->customer->browserId;
}
if (null !== $model->history[$index11]->customer->mainCustomerContact->customer->site) {
    $jsonData["history"][$index11]["customer"]["mainCustomerContact"]["customer"]["site"] = $model->history[$index11]->customer->mainCustomerContact->customer->site;
}
if (null !== $model->history[$index11]->customer->mainCustomerContact->customer->companies) {
    $jsonData["history"][$index11]["customer"]["mainCustomerContact"]["customer"]["companies"] = [];
foreach (array_keys($model->history[$index11]->customer->mainCustomerContact->customer->companies) as $index81) {
    $jsonData["history"][$index11]["customer"]["mainCustomerContact"]["customer"]["companies"][$index81] = [];
if (null !== $model->history[$index11]->customer->mainCustomerContact->customer->companies[$index81]->id) {
    $jsonData["history"][$index11]["customer"]["mainCustomerContact"]["customer"]["companies"][$index81]["id"] = $model->history[$index11]->customer->mainCustomerContact->customer->companies[$index81]->id;
}
if (null !== $model->history[$index11]->customer->mainCustomerContact->customer->companies[$index81]->externalId) {
    $jsonData["history"][$index11]["customer"]["mainCustomerContact"]["customer"]["companies"][$index81]["externalId"] = $model->history[$index11]->customer->mainCustomerContact->customer->companies[$index81]->externalId;
}
if (null !== $model->history[$index11]->customer->mainCustomerContact->customer->companies[$index81]->company) {
    $jsonData["history"][$index11]["customer"]["mainCustomerContact"]["customer"]["companies"][$index81]["company"] = [];
if (null !== $model->history[$index11]->customer->mainCustomerContact->customer->companies[$index81]->company->id) {
    $jsonData["history"][$index11]["customer"]["mainCustomerContact"]["customer"]["companies"][$index81]["company"]["id"] = $model->history[$index11]->customer->mainCustomerContact->customer->companies[$index81]->company->id;
}
if (null !== $model->history[$index11]->customer->mainCustomerContact->customer->companies[$index81]->company->externalId) {
    $jsonData["history"][$index11]["customer"]["mainCustomerContact"]["customer"]["companies"][$index81]["company"]["externalId"] = $model->history[$index11]->customer->mainCustomerContact->customer->companies[$index81]->company->externalId;
}
if (null !== $model->history[$index11]->customer->mainCustomerContact->customer->companies[$index81]->company->name) {
    $jsonData["history"][$index11]["customer"]["mainCustomerContact"]["customer"]["companies"][$index81]["company"]["name"] = $model->history[$index11]->customer->mainCustomerContact->customer->companies[$index81]->company->name;
}

if (0 === \count($jsonData["history"][$index11]["customer"]["mainCustomerContact"]["customer"]["companies"][$index81]["company"])) {
    $jsonData["history"][$index11]["customer"]["mainCustomerContact"]["customer"]["companies"][$index81]["company"] = $emptyObject;
}

}

if (0 === \count($jsonData["history"][$index11]["customer"]["mainCustomerContact"]["customer"]["companies"][$index81])) {
    $jsonData["history"][$index11]["customer"]["mainCustomerContact"]["customer"]["companies"][$index81] = $emptyObject;
}

}

}

if (0 === \count($jsonData["history"][$index11]["customer"]["mainCustomerContact"]["customer"])) {
    $jsonData["history"][$index11]["customer"]["mainCustomerContact"]["customer"] = $emptyObject;
}

}
if (null !== $model->history[$index11]->customer->mainCustomerContact->companies) {
    $jsonData["history"][$index11]["customer"]["mainCustomerContact"]["companies"] = [];
foreach (array_keys($model->history[$index11]->customer->mainCustomerContact->companies) as $index69) {
    $jsonData["history"][$index11]["customer"]["mainCustomerContact"]["companies"][$index69] = [];
if (null !== $model->history[$index11]->customer->mainCustomerContact->companies[$index69]->id) {
    $jsonData["history"][$index11]["customer"]["mainCustomerContact"]["companies"][$index69]["id"] = $model->history[$index11]->customer->mainCustomerContact->companies[$index69]->id;
}
if (null !== $model->history[$index11]->customer->mainCustomerContact->companies[$index69]->externalId) {
    $jsonData["history"][$index11]["customer"]["mainCustomerContact"]["companies"][$index69]["externalId"] = $model->history[$index11]->customer->mainCustomerContact->companies[$index69]->externalId;
}
if (null !== $model->history[$index11]->customer->mainCustomerContact->companies[$index69]->company) {
    $jsonData["history"][$index11]["customer"]["mainCustomerContact"]["companies"][$index69]["company"] = [];
if (null !== $model->history[$index11]->customer->mainCustomerContact->companies[$index69]->company->id) {
    $jsonData["history"][$index11]["customer"]["mainCustomerContact"]["companies"][$index69]["company"]["id"] = $model->history[$index11]->customer->mainCustomerContact->companies[$index69]->company->id;
}
if (null !== $model->history[$index11]->customer->mainCustomerContact->companies[$index69]->company->externalId) {
    $jsonData["history"][$index11]["customer"]["mainCustomerContact"]["companies"][$index69]["company"]["externalId"] = $model->history[$index11]->customer->mainCustomerContact->companies[$index69]->company->externalId;
}
if (null !== $model->history[$index11]->customer->mainCustomerContact->companies[$index69]->company->name) {
    $jsonData["history"][$index11]["customer"]["mainCustomerContact"]["companies"][$index69]["company"]["name"] = $model->history[$index11]->customer->mainCustomerContact->companies[$index69]->company->name;
}

if (0 === \count($jsonData["history"][$index11]["customer"]["mainCustomerContact"]["companies"][$index69]["company"])) {
    $jsonData["history"][$index11]["customer"]["mainCustomerContact"]["companies"][$index69]["company"] = $emptyObject;
}

}

if (0 === \count($jsonData["history"][$index11]["customer"]["mainCustomerContact"]["companies"][$index69])) {
    $jsonData["history"][$index11]["customer"]["mainCustomerContact"]["companies"][$index69] = $emptyObject;
}

}

}

if (0 === \count($jsonData["history"][$index11]["customer"]["mainCustomerContact"])) {
    $jsonData["history"][$index11]["customer"]["mainCustomerContact"] = $emptyObject;
}

}
if (null !== $model->history[$index11]->customer->mainCompany) {
    $jsonData["history"][$index11]["customer"]["mainCompany"] = [];
if (null !== $model->history[$index11]->customer->mainCompany->id) {
    $jsonData["history"][$index11]["customer"]["mainCompany"]["id"] = $model->history[$index11]->customer->mainCompany->id;
}
if (null !== $model->history[$index11]->customer->mainCompany->externalId) {
    $jsonData["history"][$index11]["customer"]["mainCompany"]["externalId"] = $model->history[$index11]->customer->mainCompany->externalId;
}
if (null !== $model->history[$index11]->customer->mainCompany->name) {
    $jsonData["history"][$index11]["customer"]["mainCompany"]["name"] = $model->history[$index11]->customer->mainCompany->name;
}

if (0 === \count($jsonData["history"][$index11]["customer"]["mainCompany"])) {
    $jsonData["history"][$index11]["customer"]["mainCompany"] = $emptyObject;
}

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
if (null !== $model->history[$index11]->address->name) {
    $jsonData["history"][$index11]["address"]["name"] = $model->history[$index11]->address->name;
}
if (null !== $model->history[$index11]->address->isMain) {
    $jsonData["history"][$index11]["address"]["isMain"] = $model->history[$index11]->address->isMain;
}
if (null !== $model->history[$index11]->address->index) {
    $jsonData["history"][$index11]["address"]["index"] = $model->history[$index11]->address->index;
}
if (null !== $model->history[$index11]->address->countryIso) {
    $jsonData["history"][$index11]["address"]["countryIso"] = $model->history[$index11]->address->countryIso;
}
if (null !== $model->history[$index11]->address->region) {
    $jsonData["history"][$index11]["address"]["region"] = $model->history[$index11]->address->region;
}
if (null !== $model->history[$index11]->address->regionId) {
    $jsonData["history"][$index11]["address"]["regionId"] = $model->history[$index11]->address->regionId;
}
if (null !== $model->history[$index11]->address->city) {
    $jsonData["history"][$index11]["address"]["city"] = $model->history[$index11]->address->city;
}
if (null !== $model->history[$index11]->address->cityId) {
    $jsonData["history"][$index11]["address"]["cityId"] = $model->history[$index11]->address->cityId;
}
if (null !== $model->history[$index11]->address->cityType) {
    $jsonData["history"][$index11]["address"]["cityType"] = $model->history[$index11]->address->cityType;
}
if (null !== $model->history[$index11]->address->street) {
    $jsonData["history"][$index11]["address"]["street"] = $model->history[$index11]->address->street;
}
if (null !== $model->history[$index11]->address->streetId) {
    $jsonData["history"][$index11]["address"]["streetId"] = $model->history[$index11]->address->streetId;
}
if (null !== $model->history[$index11]->address->streetType) {
    $jsonData["history"][$index11]["address"]["streetType"] = $model->history[$index11]->address->streetType;
}
if (null !== $model->history[$index11]->address->building) {
    $jsonData["history"][$index11]["address"]["building"] = $model->history[$index11]->address->building;
}
if (null !== $model->history[$index11]->address->flat) {
    $jsonData["history"][$index11]["address"]["flat"] = $model->history[$index11]->address->flat;
}
if (null !== $model->history[$index11]->address->floor) {
    $jsonData["history"][$index11]["address"]["floor"] = $model->history[$index11]->address->floor;
}
if (null !== $model->history[$index11]->address->block) {
    $jsonData["history"][$index11]["address"]["block"] = $model->history[$index11]->address->block;
}
if (null !== $model->history[$index11]->address->house) {
    $jsonData["history"][$index11]["address"]["house"] = $model->history[$index11]->address->house;
}
if (null !== $model->history[$index11]->address->housing) {
    $jsonData["history"][$index11]["address"]["housing"] = $model->history[$index11]->address->housing;
}
if (null !== $model->history[$index11]->address->metro) {
    $jsonData["history"][$index11]["address"]["metro"] = $model->history[$index11]->address->metro;
}
if (null !== $model->history[$index11]->address->notes) {
    $jsonData["history"][$index11]["address"]["notes"] = $model->history[$index11]->address->notes;
}
if (null !== $model->history[$index11]->address->text) {
    $jsonData["history"][$index11]["address"]["text"] = $model->history[$index11]->address->text;
}
if (null !== $model->history[$index11]->address->externalId) {
    $jsonData["history"][$index11]["address"]["externalId"] = $model->history[$index11]->address->externalId;
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
if (null !== $model->history[$index11]->combinedTo->nickName) {
    $jsonData["history"][$index11]["combinedTo"]["nickName"] = $model->history[$index11]->combinedTo->nickName;
}
if (null !== $model->history[$index11]->combinedTo->mainAddress) {
    $jsonData["history"][$index11]["combinedTo"]["mainAddress"] = [];
if (null !== $model->history[$index11]->combinedTo->mainAddress->id) {
    $jsonData["history"][$index11]["combinedTo"]["mainAddress"]["id"] = $model->history[$index11]->combinedTo->mainAddress->id;
}
if (null !== $model->history[$index11]->combinedTo->mainAddress->externalId) {
    $jsonData["history"][$index11]["combinedTo"]["mainAddress"]["externalId"] = $model->history[$index11]->combinedTo->mainAddress->externalId;
}
if (null !== $model->history[$index11]->combinedTo->mainAddress->name) {
    $jsonData["history"][$index11]["combinedTo"]["mainAddress"]["name"] = $model->history[$index11]->combinedTo->mainAddress->name;
}

if (0 === \count($jsonData["history"][$index11]["combinedTo"]["mainAddress"])) {
    $jsonData["history"][$index11]["combinedTo"]["mainAddress"] = $emptyObject;
}

}
if (null !== $model->history[$index11]->combinedTo->createdAt) {
    $jsonData["history"][$index11]["combinedTo"]["createdAt"] = $model->history[$index11]->combinedTo->createdAt->format('Y-m-d H:i:s');;
}
if (null !== $model->history[$index11]->combinedTo->managerId) {
    $jsonData["history"][$index11]["combinedTo"]["managerId"] = $model->history[$index11]->combinedTo->managerId;
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
if (null !== $model->history[$index11]->combinedTo->customerContacts) {
    $jsonData["history"][$index11]["combinedTo"]["customerContacts"] = [];
foreach (array_keys($model->history[$index11]->combinedTo->customerContacts) as $index55) {
    $jsonData["history"][$index11]["combinedTo"]["customerContacts"][$index55] = [];
if (null !== $model->history[$index11]->combinedTo->customerContacts[$index55]->id) {
    $jsonData["history"][$index11]["combinedTo"]["customerContacts"][$index55]["id"] = $model->history[$index11]->combinedTo->customerContacts[$index55]->id;
}
if (null !== $model->history[$index11]->combinedTo->customerContacts[$index55]->isMain) {
    $jsonData["history"][$index11]["combinedTo"]["customerContacts"][$index55]["isMain"] = $model->history[$index11]->combinedTo->customerContacts[$index55]->isMain;
}
if (null !== $model->history[$index11]->combinedTo->customerContacts[$index55]->customer) {
    $jsonData["history"][$index11]["combinedTo"]["customerContacts"][$index55]["customer"] = [];
if (null !== $model->history[$index11]->combinedTo->customerContacts[$index55]->customer->id) {
    $jsonData["history"][$index11]["combinedTo"]["customerContacts"][$index55]["customer"]["id"] = $model->history[$index11]->combinedTo->customerContacts[$index55]->customer->id;
}
if (null !== $model->history[$index11]->combinedTo->customerContacts[$index55]->customer->externalId) {
    $jsonData["history"][$index11]["combinedTo"]["customerContacts"][$index55]["customer"]["externalId"] = $model->history[$index11]->combinedTo->customerContacts[$index55]->customer->externalId;
}
if (null !== $model->history[$index11]->combinedTo->customerContacts[$index55]->customer->browserId) {
    $jsonData["history"][$index11]["combinedTo"]["customerContacts"][$index55]["customer"]["browserId"] = $model->history[$index11]->combinedTo->customerContacts[$index55]->customer->browserId;
}
if (null !== $model->history[$index11]->combinedTo->customerContacts[$index55]->customer->site) {
    $jsonData["history"][$index11]["combinedTo"]["customerContacts"][$index55]["customer"]["site"] = $model->history[$index11]->combinedTo->customerContacts[$index55]->customer->site;
}
if (null !== $model->history[$index11]->combinedTo->customerContacts[$index55]->customer->companies) {
    $jsonData["history"][$index11]["combinedTo"]["customerContacts"][$index55]["customer"]["companies"] = [];
foreach (array_keys($model->history[$index11]->combinedTo->customerContacts[$index55]->customer->companies) as $index90) {
    $jsonData["history"][$index11]["combinedTo"]["customerContacts"][$index55]["customer"]["companies"][$index90] = [];
if (null !== $model->history[$index11]->combinedTo->customerContacts[$index55]->customer->companies[$index90]->id) {
    $jsonData["history"][$index11]["combinedTo"]["customerContacts"][$index55]["customer"]["companies"][$index90]["id"] = $model->history[$index11]->combinedTo->customerContacts[$index55]->customer->companies[$index90]->id;
}
if (null !== $model->history[$index11]->combinedTo->customerContacts[$index55]->customer->companies[$index90]->externalId) {
    $jsonData["history"][$index11]["combinedTo"]["customerContacts"][$index55]["customer"]["companies"][$index90]["externalId"] = $model->history[$index11]->combinedTo->customerContacts[$index55]->customer->companies[$index90]->externalId;
}
if (null !== $model->history[$index11]->combinedTo->customerContacts[$index55]->customer->companies[$index90]->company) {
    $jsonData["history"][$index11]["combinedTo"]["customerContacts"][$index55]["customer"]["companies"][$index90]["company"] = [];
if (null !== $model->history[$index11]->combinedTo->customerContacts[$index55]->customer->companies[$index90]->company->id) {
    $jsonData["history"][$index11]["combinedTo"]["customerContacts"][$index55]["customer"]["companies"][$index90]["company"]["id"] = $model->history[$index11]->combinedTo->customerContacts[$index55]->customer->companies[$index90]->company->id;
}
if (null !== $model->history[$index11]->combinedTo->customerContacts[$index55]->customer->companies[$index90]->company->externalId) {
    $jsonData["history"][$index11]["combinedTo"]["customerContacts"][$index55]["customer"]["companies"][$index90]["company"]["externalId"] = $model->history[$index11]->combinedTo->customerContacts[$index55]->customer->companies[$index90]->company->externalId;
}
if (null !== $model->history[$index11]->combinedTo->customerContacts[$index55]->customer->companies[$index90]->company->name) {
    $jsonData["history"][$index11]["combinedTo"]["customerContacts"][$index55]["customer"]["companies"][$index90]["company"]["name"] = $model->history[$index11]->combinedTo->customerContacts[$index55]->customer->companies[$index90]->company->name;
}

if (0 === \count($jsonData["history"][$index11]["combinedTo"]["customerContacts"][$index55]["customer"]["companies"][$index90]["company"])) {
    $jsonData["history"][$index11]["combinedTo"]["customerContacts"][$index55]["customer"]["companies"][$index90]["company"] = $emptyObject;
}

}

if (0 === \count($jsonData["history"][$index11]["combinedTo"]["customerContacts"][$index55]["customer"]["companies"][$index90])) {
    $jsonData["history"][$index11]["combinedTo"]["customerContacts"][$index55]["customer"]["companies"][$index90] = $emptyObject;
}

}

}

if (0 === \count($jsonData["history"][$index11]["combinedTo"]["customerContacts"][$index55]["customer"])) {
    $jsonData["history"][$index11]["combinedTo"]["customerContacts"][$index55]["customer"] = $emptyObject;
}

}
if (null !== $model->history[$index11]->combinedTo->customerContacts[$index55]->companies) {
    $jsonData["history"][$index11]["combinedTo"]["customerContacts"][$index55]["companies"] = [];
foreach (array_keys($model->history[$index11]->combinedTo->customerContacts[$index55]->companies) as $index78) {
    $jsonData["history"][$index11]["combinedTo"]["customerContacts"][$index55]["companies"][$index78] = [];
if (null !== $model->history[$index11]->combinedTo->customerContacts[$index55]->companies[$index78]->id) {
    $jsonData["history"][$index11]["combinedTo"]["customerContacts"][$index55]["companies"][$index78]["id"] = $model->history[$index11]->combinedTo->customerContacts[$index55]->companies[$index78]->id;
}
if (null !== $model->history[$index11]->combinedTo->customerContacts[$index55]->companies[$index78]->externalId) {
    $jsonData["history"][$index11]["combinedTo"]["customerContacts"][$index55]["companies"][$index78]["externalId"] = $model->history[$index11]->combinedTo->customerContacts[$index55]->companies[$index78]->externalId;
}
if (null !== $model->history[$index11]->combinedTo->customerContacts[$index55]->companies[$index78]->company) {
    $jsonData["history"][$index11]["combinedTo"]["customerContacts"][$index55]["companies"][$index78]["company"] = [];
if (null !== $model->history[$index11]->combinedTo->customerContacts[$index55]->companies[$index78]->company->id) {
    $jsonData["history"][$index11]["combinedTo"]["customerContacts"][$index55]["companies"][$index78]["company"]["id"] = $model->history[$index11]->combinedTo->customerContacts[$index55]->companies[$index78]->company->id;
}
if (null !== $model->history[$index11]->combinedTo->customerContacts[$index55]->companies[$index78]->company->externalId) {
    $jsonData["history"][$index11]["combinedTo"]["customerContacts"][$index55]["companies"][$index78]["company"]["externalId"] = $model->history[$index11]->combinedTo->customerContacts[$index55]->companies[$index78]->company->externalId;
}
if (null !== $model->history[$index11]->combinedTo->customerContacts[$index55]->companies[$index78]->company->name) {
    $jsonData["history"][$index11]["combinedTo"]["customerContacts"][$index55]["companies"][$index78]["company"]["name"] = $model->history[$index11]->combinedTo->customerContacts[$index55]->companies[$index78]->company->name;
}

if (0 === \count($jsonData["history"][$index11]["combinedTo"]["customerContacts"][$index55]["companies"][$index78]["company"])) {
    $jsonData["history"][$index11]["combinedTo"]["customerContacts"][$index55]["companies"][$index78]["company"] = $emptyObject;
}

}

if (0 === \count($jsonData["history"][$index11]["combinedTo"]["customerContacts"][$index55]["companies"][$index78])) {
    $jsonData["history"][$index11]["combinedTo"]["customerContacts"][$index55]["companies"][$index78] = $emptyObject;
}

}

}

if (0 === \count($jsonData["history"][$index11]["combinedTo"]["customerContacts"][$index55])) {
    $jsonData["history"][$index11]["combinedTo"]["customerContacts"][$index55] = $emptyObject;
}

}

}
if (null !== $model->history[$index11]->combinedTo->companies) {
    $jsonData["history"][$index11]["combinedTo"]["companies"] = [];
foreach (array_keys($model->history[$index11]->combinedTo->companies) as $index48) {
    $jsonData["history"][$index11]["combinedTo"]["companies"][$index48] = [];
if (null !== $model->history[$index11]->combinedTo->companies[$index48]->id) {
    $jsonData["history"][$index11]["combinedTo"]["companies"][$index48]["id"] = $model->history[$index11]->combinedTo->companies[$index48]->id;
}
if (null !== $model->history[$index11]->combinedTo->companies[$index48]->isMain) {
    $jsonData["history"][$index11]["combinedTo"]["companies"][$index48]["isMain"] = $model->history[$index11]->combinedTo->companies[$index48]->isMain;
}
if (null !== $model->history[$index11]->combinedTo->companies[$index48]->externalId) {
    $jsonData["history"][$index11]["combinedTo"]["companies"][$index48]["externalId"] = $model->history[$index11]->combinedTo->companies[$index48]->externalId;
}
if (null !== $model->history[$index11]->combinedTo->companies[$index48]->active) {
    $jsonData["history"][$index11]["combinedTo"]["companies"][$index48]["active"] = $model->history[$index11]->combinedTo->companies[$index48]->active;
}
if (null !== $model->history[$index11]->combinedTo->companies[$index48]->name) {
    $jsonData["history"][$index11]["combinedTo"]["companies"][$index48]["name"] = $model->history[$index11]->combinedTo->companies[$index48]->name;
}
if (null !== $model->history[$index11]->combinedTo->companies[$index48]->brand) {
    $jsonData["history"][$index11]["combinedTo"]["companies"][$index48]["brand"] = $model->history[$index11]->combinedTo->companies[$index48]->brand;
}
if (null !== $model->history[$index11]->combinedTo->companies[$index48]->site) {
    $jsonData["history"][$index11]["combinedTo"]["companies"][$index48]["site"] = $model->history[$index11]->combinedTo->companies[$index48]->site;
}
if (null !== $model->history[$index11]->combinedTo->companies[$index48]->createdAt) {
    $jsonData["history"][$index11]["combinedTo"]["companies"][$index48]["createdAt"] = $model->history[$index11]->combinedTo->companies[$index48]->createdAt->format('Y-m-d H:i:s');;
}
if (null !== $model->history[$index11]->combinedTo->companies[$index48]->customer) {
    $jsonData["history"][$index11]["combinedTo"]["companies"][$index48]["customer"] = [];
if (null !== $model->history[$index11]->combinedTo->companies[$index48]->customer->site) {
    $jsonData["history"][$index11]["combinedTo"]["companies"][$index48]["customer"]["site"] = $model->history[$index11]->combinedTo->companies[$index48]->customer->site;
}
if (null !== $model->history[$index11]->combinedTo->companies[$index48]->customer->id) {
    $jsonData["history"][$index11]["combinedTo"]["companies"][$index48]["customer"]["id"] = $model->history[$index11]->combinedTo->companies[$index48]->customer->id;
}
if (null !== $model->history[$index11]->combinedTo->companies[$index48]->customer->externalId) {
    $jsonData["history"][$index11]["combinedTo"]["companies"][$index48]["customer"]["externalId"] = $model->history[$index11]->combinedTo->companies[$index48]->customer->externalId;
}
if (null !== $model->history[$index11]->combinedTo->companies[$index48]->customer->type) {
    $jsonData["history"][$index11]["combinedTo"]["companies"][$index48]["customer"]["type"] = $model->history[$index11]->combinedTo->companies[$index48]->customer->type;
}

if (0 === \count($jsonData["history"][$index11]["combinedTo"]["companies"][$index48]["customer"])) {
    $jsonData["history"][$index11]["combinedTo"]["companies"][$index48]["customer"] = $emptyObject;
}

}
if (null !== $model->history[$index11]->combinedTo->companies[$index48]->contragent) {
    $jsonData["history"][$index11]["combinedTo"]["companies"][$index48]["contragent"] = [];
if (null !== $model->history[$index11]->combinedTo->companies[$index48]->contragent->contragentType) {
    $jsonData["history"][$index11]["combinedTo"]["companies"][$index48]["contragent"]["contragentType"] = $model->history[$index11]->combinedTo->companies[$index48]->contragent->contragentType;
}
if (null !== $model->history[$index11]->combinedTo->companies[$index48]->contragent->legalName) {
    $jsonData["history"][$index11]["combinedTo"]["companies"][$index48]["contragent"]["legalName"] = $model->history[$index11]->combinedTo->companies[$index48]->contragent->legalName;
}
if (null !== $model->history[$index11]->combinedTo->companies[$index48]->contragent->legalAddress) {
    $jsonData["history"][$index11]["combinedTo"]["companies"][$index48]["contragent"]["legalAddress"] = $model->history[$index11]->combinedTo->companies[$index48]->contragent->legalAddress;
}
if (null !== $model->history[$index11]->combinedTo->companies[$index48]->contragent->INN) {
    $jsonData["history"][$index11]["combinedTo"]["companies"][$index48]["contragent"]["INN"] = $model->history[$index11]->combinedTo->companies[$index48]->contragent->INN;
}
if (null !== $model->history[$index11]->combinedTo->companies[$index48]->contragent->OKPO) {
    $jsonData["history"][$index11]["combinedTo"]["companies"][$index48]["contragent"]["OKPO"] = $model->history[$index11]->combinedTo->companies[$index48]->contragent->OKPO;
}
if (null !== $model->history[$index11]->combinedTo->companies[$index48]->contragent->KPP) {
    $jsonData["history"][$index11]["combinedTo"]["companies"][$index48]["contragent"]["KPP"] = $model->history[$index11]->combinedTo->companies[$index48]->contragent->KPP;
}
if (null !== $model->history[$index11]->combinedTo->companies[$index48]->contragent->OGRN) {
    $jsonData["history"][$index11]["combinedTo"]["companies"][$index48]["contragent"]["OGRN"] = $model->history[$index11]->combinedTo->companies[$index48]->contragent->OGRN;
}
if (null !== $model->history[$index11]->combinedTo->companies[$index48]->contragent->OGRNIP) {
    $jsonData["history"][$index11]["combinedTo"]["companies"][$index48]["contragent"]["OGRNIP"] = $model->history[$index11]->combinedTo->companies[$index48]->contragent->OGRNIP;
}
if (null !== $model->history[$index11]->combinedTo->companies[$index48]->contragent->certificateNumber) {
    $jsonData["history"][$index11]["combinedTo"]["companies"][$index48]["contragent"]["certificateNumber"] = $model->history[$index11]->combinedTo->companies[$index48]->contragent->certificateNumber;
}
if (null !== $model->history[$index11]->combinedTo->companies[$index48]->contragent->certificateDate) {
    $jsonData["history"][$index11]["combinedTo"]["companies"][$index48]["contragent"]["certificateDate"] = $model->history[$index11]->combinedTo->companies[$index48]->contragent->certificateDate->format('Y-m-d H:i:s');;
}
if (null !== $model->history[$index11]->combinedTo->companies[$index48]->contragent->BIK) {
    $jsonData["history"][$index11]["combinedTo"]["companies"][$index48]["contragent"]["BIK"] = $model->history[$index11]->combinedTo->companies[$index48]->contragent->BIK;
}
if (null !== $model->history[$index11]->combinedTo->companies[$index48]->contragent->bank) {
    $jsonData["history"][$index11]["combinedTo"]["companies"][$index48]["contragent"]["bank"] = $model->history[$index11]->combinedTo->companies[$index48]->contragent->bank;
}
if (null !== $model->history[$index11]->combinedTo->companies[$index48]->contragent->bankAddress) {
    $jsonData["history"][$index11]["combinedTo"]["companies"][$index48]["contragent"]["bankAddress"] = $model->history[$index11]->combinedTo->companies[$index48]->contragent->bankAddress;
}
if (null !== $model->history[$index11]->combinedTo->companies[$index48]->contragent->corrAccount) {
    $jsonData["history"][$index11]["combinedTo"]["companies"][$index48]["contragent"]["corrAccount"] = $model->history[$index11]->combinedTo->companies[$index48]->contragent->corrAccount;
}
if (null !== $model->history[$index11]->combinedTo->companies[$index48]->contragent->bankAccount) {
    $jsonData["history"][$index11]["combinedTo"]["companies"][$index48]["contragent"]["bankAccount"] = $model->history[$index11]->combinedTo->companies[$index48]->contragent->bankAccount;
}

if (0 === \count($jsonData["history"][$index11]["combinedTo"]["companies"][$index48]["contragent"])) {
    $jsonData["history"][$index11]["combinedTo"]["companies"][$index48]["contragent"] = $emptyObject;
}

}
if (null !== $model->history[$index11]->combinedTo->companies[$index48]->address) {
    $jsonData["history"][$index11]["combinedTo"]["companies"][$index48]["address"] = [];
if (null !== $model->history[$index11]->combinedTo->companies[$index48]->address->id) {
    $jsonData["history"][$index11]["combinedTo"]["companies"][$index48]["address"]["id"] = $model->history[$index11]->combinedTo->companies[$index48]->address->id;
}
if (null !== $model->history[$index11]->combinedTo->companies[$index48]->address->name) {
    $jsonData["history"][$index11]["combinedTo"]["companies"][$index48]["address"]["name"] = $model->history[$index11]->combinedTo->companies[$index48]->address->name;
}
if (null !== $model->history[$index11]->combinedTo->companies[$index48]->address->isMain) {
    $jsonData["history"][$index11]["combinedTo"]["companies"][$index48]["address"]["isMain"] = $model->history[$index11]->combinedTo->companies[$index48]->address->isMain;
}
if (null !== $model->history[$index11]->combinedTo->companies[$index48]->address->index) {
    $jsonData["history"][$index11]["combinedTo"]["companies"][$index48]["address"]["index"] = $model->history[$index11]->combinedTo->companies[$index48]->address->index;
}
if (null !== $model->history[$index11]->combinedTo->companies[$index48]->address->countryIso) {
    $jsonData["history"][$index11]["combinedTo"]["companies"][$index48]["address"]["countryIso"] = $model->history[$index11]->combinedTo->companies[$index48]->address->countryIso;
}
if (null !== $model->history[$index11]->combinedTo->companies[$index48]->address->region) {
    $jsonData["history"][$index11]["combinedTo"]["companies"][$index48]["address"]["region"] = $model->history[$index11]->combinedTo->companies[$index48]->address->region;
}
if (null !== $model->history[$index11]->combinedTo->companies[$index48]->address->regionId) {
    $jsonData["history"][$index11]["combinedTo"]["companies"][$index48]["address"]["regionId"] = $model->history[$index11]->combinedTo->companies[$index48]->address->regionId;
}
if (null !== $model->history[$index11]->combinedTo->companies[$index48]->address->city) {
    $jsonData["history"][$index11]["combinedTo"]["companies"][$index48]["address"]["city"] = $model->history[$index11]->combinedTo->companies[$index48]->address->city;
}
if (null !== $model->history[$index11]->combinedTo->companies[$index48]->address->cityId) {
    $jsonData["history"][$index11]["combinedTo"]["companies"][$index48]["address"]["cityId"] = $model->history[$index11]->combinedTo->companies[$index48]->address->cityId;
}
if (null !== $model->history[$index11]->combinedTo->companies[$index48]->address->cityType) {
    $jsonData["history"][$index11]["combinedTo"]["companies"][$index48]["address"]["cityType"] = $model->history[$index11]->combinedTo->companies[$index48]->address->cityType;
}
if (null !== $model->history[$index11]->combinedTo->companies[$index48]->address->street) {
    $jsonData["history"][$index11]["combinedTo"]["companies"][$index48]["address"]["street"] = $model->history[$index11]->combinedTo->companies[$index48]->address->street;
}
if (null !== $model->history[$index11]->combinedTo->companies[$index48]->address->streetId) {
    $jsonData["history"][$index11]["combinedTo"]["companies"][$index48]["address"]["streetId"] = $model->history[$index11]->combinedTo->companies[$index48]->address->streetId;
}
if (null !== $model->history[$index11]->combinedTo->companies[$index48]->address->streetType) {
    $jsonData["history"][$index11]["combinedTo"]["companies"][$index48]["address"]["streetType"] = $model->history[$index11]->combinedTo->companies[$index48]->address->streetType;
}
if (null !== $model->history[$index11]->combinedTo->companies[$index48]->address->building) {
    $jsonData["history"][$index11]["combinedTo"]["companies"][$index48]["address"]["building"] = $model->history[$index11]->combinedTo->companies[$index48]->address->building;
}
if (null !== $model->history[$index11]->combinedTo->companies[$index48]->address->flat) {
    $jsonData["history"][$index11]["combinedTo"]["companies"][$index48]["address"]["flat"] = $model->history[$index11]->combinedTo->companies[$index48]->address->flat;
}
if (null !== $model->history[$index11]->combinedTo->companies[$index48]->address->floor) {
    $jsonData["history"][$index11]["combinedTo"]["companies"][$index48]["address"]["floor"] = $model->history[$index11]->combinedTo->companies[$index48]->address->floor;
}
if (null !== $model->history[$index11]->combinedTo->companies[$index48]->address->block) {
    $jsonData["history"][$index11]["combinedTo"]["companies"][$index48]["address"]["block"] = $model->history[$index11]->combinedTo->companies[$index48]->address->block;
}
if (null !== $model->history[$index11]->combinedTo->companies[$index48]->address->house) {
    $jsonData["history"][$index11]["combinedTo"]["companies"][$index48]["address"]["house"] = $model->history[$index11]->combinedTo->companies[$index48]->address->house;
}
if (null !== $model->history[$index11]->combinedTo->companies[$index48]->address->housing) {
    $jsonData["history"][$index11]["combinedTo"]["companies"][$index48]["address"]["housing"] = $model->history[$index11]->combinedTo->companies[$index48]->address->housing;
}
if (null !== $model->history[$index11]->combinedTo->companies[$index48]->address->metro) {
    $jsonData["history"][$index11]["combinedTo"]["companies"][$index48]["address"]["metro"] = $model->history[$index11]->combinedTo->companies[$index48]->address->metro;
}
if (null !== $model->history[$index11]->combinedTo->companies[$index48]->address->notes) {
    $jsonData["history"][$index11]["combinedTo"]["companies"][$index48]["address"]["notes"] = $model->history[$index11]->combinedTo->companies[$index48]->address->notes;
}
if (null !== $model->history[$index11]->combinedTo->companies[$index48]->address->text) {
    $jsonData["history"][$index11]["combinedTo"]["companies"][$index48]["address"]["text"] = $model->history[$index11]->combinedTo->companies[$index48]->address->text;
}
if (null !== $model->history[$index11]->combinedTo->companies[$index48]->address->externalId) {
    $jsonData["history"][$index11]["combinedTo"]["companies"][$index48]["address"]["externalId"] = $model->history[$index11]->combinedTo->companies[$index48]->address->externalId;
}

if (0 === \count($jsonData["history"][$index11]["combinedTo"]["companies"][$index48]["address"])) {
    $jsonData["history"][$index11]["combinedTo"]["companies"][$index48]["address"] = $emptyObject;
}

}
if (null !== $model->history[$index11]->combinedTo->companies[$index48]->customFields) {
    $jsonData["history"][$index11]["combinedTo"]["companies"][$index48]["customFields"] = [];
foreach (array_keys($model->history[$index11]->combinedTo->companies[$index48]->customFields) as $index74) {
    $jsonData["history"][$index11]["combinedTo"]["companies"][$index48]["customFields"] = $model->history[$index11]->combinedTo->companies[$index48]->customFields;
}

}
if (null !== $model->history[$index11]->combinedTo->companies[$index48]->marginSumm) {
    $jsonData["history"][$index11]["combinedTo"]["companies"][$index48]["marginSumm"] = $model->history[$index11]->combinedTo->companies[$index48]->marginSumm;
}
if (null !== $model->history[$index11]->combinedTo->companies[$index48]->totalSumm) {
    $jsonData["history"][$index11]["combinedTo"]["companies"][$index48]["totalSumm"] = $model->history[$index11]->combinedTo->companies[$index48]->totalSumm;
}
if (null !== $model->history[$index11]->combinedTo->companies[$index48]->averageSumm) {
    $jsonData["history"][$index11]["combinedTo"]["companies"][$index48]["averageSumm"] = $model->history[$index11]->combinedTo->companies[$index48]->averageSumm;
}
if (null !== $model->history[$index11]->combinedTo->companies[$index48]->ordersCount) {
    $jsonData["history"][$index11]["combinedTo"]["companies"][$index48]["ordersCount"] = $model->history[$index11]->combinedTo->companies[$index48]->ordersCount;
}
if (null !== $model->history[$index11]->combinedTo->companies[$index48]->costSumm) {
    $jsonData["history"][$index11]["combinedTo"]["companies"][$index48]["costSumm"] = $model->history[$index11]->combinedTo->companies[$index48]->costSumm;
}

if (0 === \count($jsonData["history"][$index11]["combinedTo"]["companies"][$index48])) {
    $jsonData["history"][$index11]["combinedTo"]["companies"][$index48] = $emptyObject;
}

}

}
if (null !== $model->history[$index11]->combinedTo->addresses) {
    $jsonData["history"][$index11]["combinedTo"]["addresses"] = [];
foreach (array_keys($model->history[$index11]->combinedTo->addresses) as $index48) {
    $jsonData["history"][$index11]["combinedTo"]["addresses"][$index48] = [];
if (null !== $model->history[$index11]->combinedTo->addresses[$index48]->id) {
    $jsonData["history"][$index11]["combinedTo"]["addresses"][$index48]["id"] = $model->history[$index11]->combinedTo->addresses[$index48]->id;
}
if (null !== $model->history[$index11]->combinedTo->addresses[$index48]->name) {
    $jsonData["history"][$index11]["combinedTo"]["addresses"][$index48]["name"] = $model->history[$index11]->combinedTo->addresses[$index48]->name;
}
if (null !== $model->history[$index11]->combinedTo->addresses[$index48]->isMain) {
    $jsonData["history"][$index11]["combinedTo"]["addresses"][$index48]["isMain"] = $model->history[$index11]->combinedTo->addresses[$index48]->isMain;
}
if (null !== $model->history[$index11]->combinedTo->addresses[$index48]->index) {
    $jsonData["history"][$index11]["combinedTo"]["addresses"][$index48]["index"] = $model->history[$index11]->combinedTo->addresses[$index48]->index;
}
if (null !== $model->history[$index11]->combinedTo->addresses[$index48]->countryIso) {
    $jsonData["history"][$index11]["combinedTo"]["addresses"][$index48]["countryIso"] = $model->history[$index11]->combinedTo->addresses[$index48]->countryIso;
}
if (null !== $model->history[$index11]->combinedTo->addresses[$index48]->region) {
    $jsonData["history"][$index11]["combinedTo"]["addresses"][$index48]["region"] = $model->history[$index11]->combinedTo->addresses[$index48]->region;
}
if (null !== $model->history[$index11]->combinedTo->addresses[$index48]->regionId) {
    $jsonData["history"][$index11]["combinedTo"]["addresses"][$index48]["regionId"] = $model->history[$index11]->combinedTo->addresses[$index48]->regionId;
}
if (null !== $model->history[$index11]->combinedTo->addresses[$index48]->city) {
    $jsonData["history"][$index11]["combinedTo"]["addresses"][$index48]["city"] = $model->history[$index11]->combinedTo->addresses[$index48]->city;
}
if (null !== $model->history[$index11]->combinedTo->addresses[$index48]->cityId) {
    $jsonData["history"][$index11]["combinedTo"]["addresses"][$index48]["cityId"] = $model->history[$index11]->combinedTo->addresses[$index48]->cityId;
}
if (null !== $model->history[$index11]->combinedTo->addresses[$index48]->cityType) {
    $jsonData["history"][$index11]["combinedTo"]["addresses"][$index48]["cityType"] = $model->history[$index11]->combinedTo->addresses[$index48]->cityType;
}
if (null !== $model->history[$index11]->combinedTo->addresses[$index48]->street) {
    $jsonData["history"][$index11]["combinedTo"]["addresses"][$index48]["street"] = $model->history[$index11]->combinedTo->addresses[$index48]->street;
}
if (null !== $model->history[$index11]->combinedTo->addresses[$index48]->streetId) {
    $jsonData["history"][$index11]["combinedTo"]["addresses"][$index48]["streetId"] = $model->history[$index11]->combinedTo->addresses[$index48]->streetId;
}
if (null !== $model->history[$index11]->combinedTo->addresses[$index48]->streetType) {
    $jsonData["history"][$index11]["combinedTo"]["addresses"][$index48]["streetType"] = $model->history[$index11]->combinedTo->addresses[$index48]->streetType;
}
if (null !== $model->history[$index11]->combinedTo->addresses[$index48]->building) {
    $jsonData["history"][$index11]["combinedTo"]["addresses"][$index48]["building"] = $model->history[$index11]->combinedTo->addresses[$index48]->building;
}
if (null !== $model->history[$index11]->combinedTo->addresses[$index48]->flat) {
    $jsonData["history"][$index11]["combinedTo"]["addresses"][$index48]["flat"] = $model->history[$index11]->combinedTo->addresses[$index48]->flat;
}
if (null !== $model->history[$index11]->combinedTo->addresses[$index48]->floor) {
    $jsonData["history"][$index11]["combinedTo"]["addresses"][$index48]["floor"] = $model->history[$index11]->combinedTo->addresses[$index48]->floor;
}
if (null !== $model->history[$index11]->combinedTo->addresses[$index48]->block) {
    $jsonData["history"][$index11]["combinedTo"]["addresses"][$index48]["block"] = $model->history[$index11]->combinedTo->addresses[$index48]->block;
}
if (null !== $model->history[$index11]->combinedTo->addresses[$index48]->house) {
    $jsonData["history"][$index11]["combinedTo"]["addresses"][$index48]["house"] = $model->history[$index11]->combinedTo->addresses[$index48]->house;
}
if (null !== $model->history[$index11]->combinedTo->addresses[$index48]->housing) {
    $jsonData["history"][$index11]["combinedTo"]["addresses"][$index48]["housing"] = $model->history[$index11]->combinedTo->addresses[$index48]->housing;
}
if (null !== $model->history[$index11]->combinedTo->addresses[$index48]->metro) {
    $jsonData["history"][$index11]["combinedTo"]["addresses"][$index48]["metro"] = $model->history[$index11]->combinedTo->addresses[$index48]->metro;
}
if (null !== $model->history[$index11]->combinedTo->addresses[$index48]->notes) {
    $jsonData["history"][$index11]["combinedTo"]["addresses"][$index48]["notes"] = $model->history[$index11]->combinedTo->addresses[$index48]->notes;
}
if (null !== $model->history[$index11]->combinedTo->addresses[$index48]->text) {
    $jsonData["history"][$index11]["combinedTo"]["addresses"][$index48]["text"] = $model->history[$index11]->combinedTo->addresses[$index48]->text;
}
if (null !== $model->history[$index11]->combinedTo->addresses[$index48]->externalId) {
    $jsonData["history"][$index11]["combinedTo"]["addresses"][$index48]["externalId"] = $model->history[$index11]->combinedTo->addresses[$index48]->externalId;
}

if (0 === \count($jsonData["history"][$index11]["combinedTo"]["addresses"][$index48])) {
    $jsonData["history"][$index11]["combinedTo"]["addresses"][$index48] = $emptyObject;
}

}

}
if (null !== $model->history[$index11]->combinedTo->vip) {
    $jsonData["history"][$index11]["combinedTo"]["vip"] = $model->history[$index11]->combinedTo->vip;
}
if (null !== $model->history[$index11]->combinedTo->bad) {
    $jsonData["history"][$index11]["combinedTo"]["bad"] = $model->history[$index11]->combinedTo->bad;
}
if (null !== $model->history[$index11]->combinedTo->site) {
    $jsonData["history"][$index11]["combinedTo"]["site"] = $model->history[$index11]->combinedTo->site;
}
if (null !== $model->history[$index11]->combinedTo->tags) {
    $jsonData["history"][$index11]["combinedTo"]["tags"] = [];
foreach (array_keys($model->history[$index11]->combinedTo->tags) as $index43) {
    $jsonData["history"][$index11]["combinedTo"]["tags"][$index43] = $model->history[$index11]->combinedTo->tags[$index43]->name;
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
if (null !== $model->history[$index11]->combinedTo->mainCustomerContact) {
    $jsonData["history"][$index11]["combinedTo"]["mainCustomerContact"] = [];
if (null !== $model->history[$index11]->combinedTo->mainCustomerContact->id) {
    $jsonData["history"][$index11]["combinedTo"]["mainCustomerContact"]["id"] = $model->history[$index11]->combinedTo->mainCustomerContact->id;
}
if (null !== $model->history[$index11]->combinedTo->mainCustomerContact->isMain) {
    $jsonData["history"][$index11]["combinedTo"]["mainCustomerContact"]["isMain"] = $model->history[$index11]->combinedTo->mainCustomerContact->isMain;
}
if (null !== $model->history[$index11]->combinedTo->mainCustomerContact->customer) {
    $jsonData["history"][$index11]["combinedTo"]["mainCustomerContact"]["customer"] = [];
if (null !== $model->history[$index11]->combinedTo->mainCustomerContact->customer->id) {
    $jsonData["history"][$index11]["combinedTo"]["mainCustomerContact"]["customer"]["id"] = $model->history[$index11]->combinedTo->mainCustomerContact->customer->id;
}
if (null !== $model->history[$index11]->combinedTo->mainCustomerContact->customer->externalId) {
    $jsonData["history"][$index11]["combinedTo"]["mainCustomerContact"]["customer"]["externalId"] = $model->history[$index11]->combinedTo->mainCustomerContact->customer->externalId;
}
if (null !== $model->history[$index11]->combinedTo->mainCustomerContact->customer->browserId) {
    $jsonData["history"][$index11]["combinedTo"]["mainCustomerContact"]["customer"]["browserId"] = $model->history[$index11]->combinedTo->mainCustomerContact->customer->browserId;
}
if (null !== $model->history[$index11]->combinedTo->mainCustomerContact->customer->site) {
    $jsonData["history"][$index11]["combinedTo"]["mainCustomerContact"]["customer"]["site"] = $model->history[$index11]->combinedTo->mainCustomerContact->customer->site;
}
if (null !== $model->history[$index11]->combinedTo->mainCustomerContact->customer->companies) {
    $jsonData["history"][$index11]["combinedTo"]["mainCustomerContact"]["customer"]["companies"] = [];
foreach (array_keys($model->history[$index11]->combinedTo->mainCustomerContact->customer->companies) as $index83) {
    $jsonData["history"][$index11]["combinedTo"]["mainCustomerContact"]["customer"]["companies"][$index83] = [];
if (null !== $model->history[$index11]->combinedTo->mainCustomerContact->customer->companies[$index83]->id) {
    $jsonData["history"][$index11]["combinedTo"]["mainCustomerContact"]["customer"]["companies"][$index83]["id"] = $model->history[$index11]->combinedTo->mainCustomerContact->customer->companies[$index83]->id;
}
if (null !== $model->history[$index11]->combinedTo->mainCustomerContact->customer->companies[$index83]->externalId) {
    $jsonData["history"][$index11]["combinedTo"]["mainCustomerContact"]["customer"]["companies"][$index83]["externalId"] = $model->history[$index11]->combinedTo->mainCustomerContact->customer->companies[$index83]->externalId;
}
if (null !== $model->history[$index11]->combinedTo->mainCustomerContact->customer->companies[$index83]->company) {
    $jsonData["history"][$index11]["combinedTo"]["mainCustomerContact"]["customer"]["companies"][$index83]["company"] = [];
if (null !== $model->history[$index11]->combinedTo->mainCustomerContact->customer->companies[$index83]->company->id) {
    $jsonData["history"][$index11]["combinedTo"]["mainCustomerContact"]["customer"]["companies"][$index83]["company"]["id"] = $model->history[$index11]->combinedTo->mainCustomerContact->customer->companies[$index83]->company->id;
}
if (null !== $model->history[$index11]->combinedTo->mainCustomerContact->customer->companies[$index83]->company->externalId) {
    $jsonData["history"][$index11]["combinedTo"]["mainCustomerContact"]["customer"]["companies"][$index83]["company"]["externalId"] = $model->history[$index11]->combinedTo->mainCustomerContact->customer->companies[$index83]->company->externalId;
}
if (null !== $model->history[$index11]->combinedTo->mainCustomerContact->customer->companies[$index83]->company->name) {
    $jsonData["history"][$index11]["combinedTo"]["mainCustomerContact"]["customer"]["companies"][$index83]["company"]["name"] = $model->history[$index11]->combinedTo->mainCustomerContact->customer->companies[$index83]->company->name;
}

if (0 === \count($jsonData["history"][$index11]["combinedTo"]["mainCustomerContact"]["customer"]["companies"][$index83]["company"])) {
    $jsonData["history"][$index11]["combinedTo"]["mainCustomerContact"]["customer"]["companies"][$index83]["company"] = $emptyObject;
}

}

if (0 === \count($jsonData["history"][$index11]["combinedTo"]["mainCustomerContact"]["customer"]["companies"][$index83])) {
    $jsonData["history"][$index11]["combinedTo"]["mainCustomerContact"]["customer"]["companies"][$index83] = $emptyObject;
}

}

}

if (0 === \count($jsonData["history"][$index11]["combinedTo"]["mainCustomerContact"]["customer"])) {
    $jsonData["history"][$index11]["combinedTo"]["mainCustomerContact"]["customer"] = $emptyObject;
}

}
if (null !== $model->history[$index11]->combinedTo->mainCustomerContact->companies) {
    $jsonData["history"][$index11]["combinedTo"]["mainCustomerContact"]["companies"] = [];
foreach (array_keys($model->history[$index11]->combinedTo->mainCustomerContact->companies) as $index71) {
    $jsonData["history"][$index11]["combinedTo"]["mainCustomerContact"]["companies"][$index71] = [];
if (null !== $model->history[$index11]->combinedTo->mainCustomerContact->companies[$index71]->id) {
    $jsonData["history"][$index11]["combinedTo"]["mainCustomerContact"]["companies"][$index71]["id"] = $model->history[$index11]->combinedTo->mainCustomerContact->companies[$index71]->id;
}
if (null !== $model->history[$index11]->combinedTo->mainCustomerContact->companies[$index71]->externalId) {
    $jsonData["history"][$index11]["combinedTo"]["mainCustomerContact"]["companies"][$index71]["externalId"] = $model->history[$index11]->combinedTo->mainCustomerContact->companies[$index71]->externalId;
}
if (null !== $model->history[$index11]->combinedTo->mainCustomerContact->companies[$index71]->company) {
    $jsonData["history"][$index11]["combinedTo"]["mainCustomerContact"]["companies"][$index71]["company"] = [];
if (null !== $model->history[$index11]->combinedTo->mainCustomerContact->companies[$index71]->company->id) {
    $jsonData["history"][$index11]["combinedTo"]["mainCustomerContact"]["companies"][$index71]["company"]["id"] = $model->history[$index11]->combinedTo->mainCustomerContact->companies[$index71]->company->id;
}
if (null !== $model->history[$index11]->combinedTo->mainCustomerContact->companies[$index71]->company->externalId) {
    $jsonData["history"][$index11]["combinedTo"]["mainCustomerContact"]["companies"][$index71]["company"]["externalId"] = $model->history[$index11]->combinedTo->mainCustomerContact->companies[$index71]->company->externalId;
}
if (null !== $model->history[$index11]->combinedTo->mainCustomerContact->companies[$index71]->company->name) {
    $jsonData["history"][$index11]["combinedTo"]["mainCustomerContact"]["companies"][$index71]["company"]["name"] = $model->history[$index11]->combinedTo->mainCustomerContact->companies[$index71]->company->name;
}

if (0 === \count($jsonData["history"][$index11]["combinedTo"]["mainCustomerContact"]["companies"][$index71]["company"])) {
    $jsonData["history"][$index11]["combinedTo"]["mainCustomerContact"]["companies"][$index71]["company"] = $emptyObject;
}

}

if (0 === \count($jsonData["history"][$index11]["combinedTo"]["mainCustomerContact"]["companies"][$index71])) {
    $jsonData["history"][$index11]["combinedTo"]["mainCustomerContact"]["companies"][$index71] = $emptyObject;
}

}

}

if (0 === \count($jsonData["history"][$index11]["combinedTo"]["mainCustomerContact"])) {
    $jsonData["history"][$index11]["combinedTo"]["mainCustomerContact"] = $emptyObject;
}

}
if (null !== $model->history[$index11]->combinedTo->mainCompany) {
    $jsonData["history"][$index11]["combinedTo"]["mainCompany"] = [];
if (null !== $model->history[$index11]->combinedTo->mainCompany->id) {
    $jsonData["history"][$index11]["combinedTo"]["mainCompany"]["id"] = $model->history[$index11]->combinedTo->mainCompany->id;
}
if (null !== $model->history[$index11]->combinedTo->mainCompany->externalId) {
    $jsonData["history"][$index11]["combinedTo"]["mainCompany"]["externalId"] = $model->history[$index11]->combinedTo->mainCompany->externalId;
}
if (null !== $model->history[$index11]->combinedTo->mainCompany->name) {
    $jsonData["history"][$index11]["combinedTo"]["mainCompany"]["name"] = $model->history[$index11]->combinedTo->mainCompany->name;
}

if (0 === \count($jsonData["history"][$index11]["combinedTo"]["mainCompany"])) {
    $jsonData["history"][$index11]["combinedTo"]["mainCompany"] = $emptyObject;
}

}

if (0 === \count($jsonData["history"][$index11]["combinedTo"])) {
    $jsonData["history"][$index11]["combinedTo"] = $emptyObject;
}

}
if (null !== $model->history[$index11]->customerContact) {
    $jsonData["history"][$index11]["customerContact"] = [];
if (null !== $model->history[$index11]->customerContact->id) {
    $jsonData["history"][$index11]["customerContact"]["id"] = $model->history[$index11]->customerContact->id;
}
if (null !== $model->history[$index11]->customerContact->isMain) {
    $jsonData["history"][$index11]["customerContact"]["isMain"] = $model->history[$index11]->customerContact->isMain;
}
if (null !== $model->history[$index11]->customerContact->customer) {
    $jsonData["history"][$index11]["customerContact"]["customer"] = [];
if (null !== $model->history[$index11]->customerContact->customer->id) {
    $jsonData["history"][$index11]["customerContact"]["customer"]["id"] = $model->history[$index11]->customerContact->customer->id;
}
if (null !== $model->history[$index11]->customerContact->customer->externalId) {
    $jsonData["history"][$index11]["customerContact"]["customer"]["externalId"] = $model->history[$index11]->customerContact->customer->externalId;
}
if (null !== $model->history[$index11]->customerContact->customer->browserId) {
    $jsonData["history"][$index11]["customerContact"]["customer"]["browserId"] = $model->history[$index11]->customerContact->customer->browserId;
}
if (null !== $model->history[$index11]->customerContact->customer->site) {
    $jsonData["history"][$index11]["customerContact"]["customer"]["site"] = $model->history[$index11]->customerContact->customer->site;
}
if (null !== $model->history[$index11]->customerContact->customer->companies) {
    $jsonData["history"][$index11]["customerContact"]["customer"]["companies"] = [];
foreach (array_keys($model->history[$index11]->customerContact->customer->companies) as $index65) {
    $jsonData["history"][$index11]["customerContact"]["customer"]["companies"][$index65] = [];
if (null !== $model->history[$index11]->customerContact->customer->companies[$index65]->id) {
    $jsonData["history"][$index11]["customerContact"]["customer"]["companies"][$index65]["id"] = $model->history[$index11]->customerContact->customer->companies[$index65]->id;
}
if (null !== $model->history[$index11]->customerContact->customer->companies[$index65]->externalId) {
    $jsonData["history"][$index11]["customerContact"]["customer"]["companies"][$index65]["externalId"] = $model->history[$index11]->customerContact->customer->companies[$index65]->externalId;
}
if (null !== $model->history[$index11]->customerContact->customer->companies[$index65]->company) {
    $jsonData["history"][$index11]["customerContact"]["customer"]["companies"][$index65]["company"] = [];
if (null !== $model->history[$index11]->customerContact->customer->companies[$index65]->company->id) {
    $jsonData["history"][$index11]["customerContact"]["customer"]["companies"][$index65]["company"]["id"] = $model->history[$index11]->customerContact->customer->companies[$index65]->company->id;
}
if (null !== $model->history[$index11]->customerContact->customer->companies[$index65]->company->externalId) {
    $jsonData["history"][$index11]["customerContact"]["customer"]["companies"][$index65]["company"]["externalId"] = $model->history[$index11]->customerContact->customer->companies[$index65]->company->externalId;
}
if (null !== $model->history[$index11]->customerContact->customer->companies[$index65]->company->name) {
    $jsonData["history"][$index11]["customerContact"]["customer"]["companies"][$index65]["company"]["name"] = $model->history[$index11]->customerContact->customer->companies[$index65]->company->name;
}

if (0 === \count($jsonData["history"][$index11]["customerContact"]["customer"]["companies"][$index65]["company"])) {
    $jsonData["history"][$index11]["customerContact"]["customer"]["companies"][$index65]["company"] = $emptyObject;
}

}

if (0 === \count($jsonData["history"][$index11]["customerContact"]["customer"]["companies"][$index65])) {
    $jsonData["history"][$index11]["customerContact"]["customer"]["companies"][$index65] = $emptyObject;
}

}

}

if (0 === \count($jsonData["history"][$index11]["customerContact"]["customer"])) {
    $jsonData["history"][$index11]["customerContact"]["customer"] = $emptyObject;
}

}
if (null !== $model->history[$index11]->customerContact->companies) {
    $jsonData["history"][$index11]["customerContact"]["companies"] = [];
foreach (array_keys($model->history[$index11]->customerContact->companies) as $index53) {
    $jsonData["history"][$index11]["customerContact"]["companies"][$index53] = [];
if (null !== $model->history[$index11]->customerContact->companies[$index53]->id) {
    $jsonData["history"][$index11]["customerContact"]["companies"][$index53]["id"] = $model->history[$index11]->customerContact->companies[$index53]->id;
}
if (null !== $model->history[$index11]->customerContact->companies[$index53]->externalId) {
    $jsonData["history"][$index11]["customerContact"]["companies"][$index53]["externalId"] = $model->history[$index11]->customerContact->companies[$index53]->externalId;
}
if (null !== $model->history[$index11]->customerContact->companies[$index53]->company) {
    $jsonData["history"][$index11]["customerContact"]["companies"][$index53]["company"] = [];
if (null !== $model->history[$index11]->customerContact->companies[$index53]->company->id) {
    $jsonData["history"][$index11]["customerContact"]["companies"][$index53]["company"]["id"] = $model->history[$index11]->customerContact->companies[$index53]->company->id;
}
if (null !== $model->history[$index11]->customerContact->companies[$index53]->company->externalId) {
    $jsonData["history"][$index11]["customerContact"]["companies"][$index53]["company"]["externalId"] = $model->history[$index11]->customerContact->companies[$index53]->company->externalId;
}
if (null !== $model->history[$index11]->customerContact->companies[$index53]->company->name) {
    $jsonData["history"][$index11]["customerContact"]["companies"][$index53]["company"]["name"] = $model->history[$index11]->customerContact->companies[$index53]->company->name;
}

if (0 === \count($jsonData["history"][$index11]["customerContact"]["companies"][$index53]["company"])) {
    $jsonData["history"][$index11]["customerContact"]["companies"][$index53]["company"] = $emptyObject;
}

}

if (0 === \count($jsonData["history"][$index11]["customerContact"]["companies"][$index53])) {
    $jsonData["history"][$index11]["customerContact"]["companies"][$index53] = $emptyObject;
}

}

}

if (0 === \count($jsonData["history"][$index11]["customerContact"])) {
    $jsonData["history"][$index11]["customerContact"] = $emptyObject;
}

}
if (null !== $model->history[$index11]->company) {
    $jsonData["history"][$index11]["company"] = [];
if (null !== $model->history[$index11]->company->id) {
    $jsonData["history"][$index11]["company"]["id"] = $model->history[$index11]->company->id;
}
if (null !== $model->history[$index11]->company->isMain) {
    $jsonData["history"][$index11]["company"]["isMain"] = $model->history[$index11]->company->isMain;
}
if (null !== $model->history[$index11]->company->externalId) {
    $jsonData["history"][$index11]["company"]["externalId"] = $model->history[$index11]->company->externalId;
}
if (null !== $model->history[$index11]->company->active) {
    $jsonData["history"][$index11]["company"]["active"] = $model->history[$index11]->company->active;
}
if (null !== $model->history[$index11]->company->name) {
    $jsonData["history"][$index11]["company"]["name"] = $model->history[$index11]->company->name;
}
if (null !== $model->history[$index11]->company->brand) {
    $jsonData["history"][$index11]["company"]["brand"] = $model->history[$index11]->company->brand;
}
if (null !== $model->history[$index11]->company->site) {
    $jsonData["history"][$index11]["company"]["site"] = $model->history[$index11]->company->site;
}
if (null !== $model->history[$index11]->company->createdAt) {
    $jsonData["history"][$index11]["company"]["createdAt"] = $model->history[$index11]->company->createdAt->format('Y-m-d H:i:s');;
}
if (null !== $model->history[$index11]->company->customer) {
    $jsonData["history"][$index11]["company"]["customer"] = [];
if (null !== $model->history[$index11]->company->customer->site) {
    $jsonData["history"][$index11]["company"]["customer"]["site"] = $model->history[$index11]->company->customer->site;
}
if (null !== $model->history[$index11]->company->customer->id) {
    $jsonData["history"][$index11]["company"]["customer"]["id"] = $model->history[$index11]->company->customer->id;
}
if (null !== $model->history[$index11]->company->customer->externalId) {
    $jsonData["history"][$index11]["company"]["customer"]["externalId"] = $model->history[$index11]->company->customer->externalId;
}
if (null !== $model->history[$index11]->company->customer->type) {
    $jsonData["history"][$index11]["company"]["customer"]["type"] = $model->history[$index11]->company->customer->type;
}

if (0 === \count($jsonData["history"][$index11]["company"]["customer"])) {
    $jsonData["history"][$index11]["company"]["customer"] = $emptyObject;
}

}
if (null !== $model->history[$index11]->company->contragent) {
    $jsonData["history"][$index11]["company"]["contragent"] = [];
if (null !== $model->history[$index11]->company->contragent->contragentType) {
    $jsonData["history"][$index11]["company"]["contragent"]["contragentType"] = $model->history[$index11]->company->contragent->contragentType;
}
if (null !== $model->history[$index11]->company->contragent->legalName) {
    $jsonData["history"][$index11]["company"]["contragent"]["legalName"] = $model->history[$index11]->company->contragent->legalName;
}
if (null !== $model->history[$index11]->company->contragent->legalAddress) {
    $jsonData["history"][$index11]["company"]["contragent"]["legalAddress"] = $model->history[$index11]->company->contragent->legalAddress;
}
if (null !== $model->history[$index11]->company->contragent->INN) {
    $jsonData["history"][$index11]["company"]["contragent"]["INN"] = $model->history[$index11]->company->contragent->INN;
}
if (null !== $model->history[$index11]->company->contragent->OKPO) {
    $jsonData["history"][$index11]["company"]["contragent"]["OKPO"] = $model->history[$index11]->company->contragent->OKPO;
}
if (null !== $model->history[$index11]->company->contragent->KPP) {
    $jsonData["history"][$index11]["company"]["contragent"]["KPP"] = $model->history[$index11]->company->contragent->KPP;
}
if (null !== $model->history[$index11]->company->contragent->OGRN) {
    $jsonData["history"][$index11]["company"]["contragent"]["OGRN"] = $model->history[$index11]->company->contragent->OGRN;
}
if (null !== $model->history[$index11]->company->contragent->OGRNIP) {
    $jsonData["history"][$index11]["company"]["contragent"]["OGRNIP"] = $model->history[$index11]->company->contragent->OGRNIP;
}
if (null !== $model->history[$index11]->company->contragent->certificateNumber) {
    $jsonData["history"][$index11]["company"]["contragent"]["certificateNumber"] = $model->history[$index11]->company->contragent->certificateNumber;
}
if (null !== $model->history[$index11]->company->contragent->certificateDate) {
    $jsonData["history"][$index11]["company"]["contragent"]["certificateDate"] = $model->history[$index11]->company->contragent->certificateDate->format('Y-m-d H:i:s');;
}
if (null !== $model->history[$index11]->company->contragent->BIK) {
    $jsonData["history"][$index11]["company"]["contragent"]["BIK"] = $model->history[$index11]->company->contragent->BIK;
}
if (null !== $model->history[$index11]->company->contragent->bank) {
    $jsonData["history"][$index11]["company"]["contragent"]["bank"] = $model->history[$index11]->company->contragent->bank;
}
if (null !== $model->history[$index11]->company->contragent->bankAddress) {
    $jsonData["history"][$index11]["company"]["contragent"]["bankAddress"] = $model->history[$index11]->company->contragent->bankAddress;
}
if (null !== $model->history[$index11]->company->contragent->corrAccount) {
    $jsonData["history"][$index11]["company"]["contragent"]["corrAccount"] = $model->history[$index11]->company->contragent->corrAccount;
}
if (null !== $model->history[$index11]->company->contragent->bankAccount) {
    $jsonData["history"][$index11]["company"]["contragent"]["bankAccount"] = $model->history[$index11]->company->contragent->bankAccount;
}

if (0 === \count($jsonData["history"][$index11]["company"]["contragent"])) {
    $jsonData["history"][$index11]["company"]["contragent"] = $emptyObject;
}

}
if (null !== $model->history[$index11]->company->address) {
    $jsonData["history"][$index11]["company"]["address"] = [];
if (null !== $model->history[$index11]->company->address->id) {
    $jsonData["history"][$index11]["company"]["address"]["id"] = $model->history[$index11]->company->address->id;
}
if (null !== $model->history[$index11]->company->address->name) {
    $jsonData["history"][$index11]["company"]["address"]["name"] = $model->history[$index11]->company->address->name;
}
if (null !== $model->history[$index11]->company->address->isMain) {
    $jsonData["history"][$index11]["company"]["address"]["isMain"] = $model->history[$index11]->company->address->isMain;
}
if (null !== $model->history[$index11]->company->address->index) {
    $jsonData["history"][$index11]["company"]["address"]["index"] = $model->history[$index11]->company->address->index;
}
if (null !== $model->history[$index11]->company->address->countryIso) {
    $jsonData["history"][$index11]["company"]["address"]["countryIso"] = $model->history[$index11]->company->address->countryIso;
}
if (null !== $model->history[$index11]->company->address->region) {
    $jsonData["history"][$index11]["company"]["address"]["region"] = $model->history[$index11]->company->address->region;
}
if (null !== $model->history[$index11]->company->address->regionId) {
    $jsonData["history"][$index11]["company"]["address"]["regionId"] = $model->history[$index11]->company->address->regionId;
}
if (null !== $model->history[$index11]->company->address->city) {
    $jsonData["history"][$index11]["company"]["address"]["city"] = $model->history[$index11]->company->address->city;
}
if (null !== $model->history[$index11]->company->address->cityId) {
    $jsonData["history"][$index11]["company"]["address"]["cityId"] = $model->history[$index11]->company->address->cityId;
}
if (null !== $model->history[$index11]->company->address->cityType) {
    $jsonData["history"][$index11]["company"]["address"]["cityType"] = $model->history[$index11]->company->address->cityType;
}
if (null !== $model->history[$index11]->company->address->street) {
    $jsonData["history"][$index11]["company"]["address"]["street"] = $model->history[$index11]->company->address->street;
}
if (null !== $model->history[$index11]->company->address->streetId) {
    $jsonData["history"][$index11]["company"]["address"]["streetId"] = $model->history[$index11]->company->address->streetId;
}
if (null !== $model->history[$index11]->company->address->streetType) {
    $jsonData["history"][$index11]["company"]["address"]["streetType"] = $model->history[$index11]->company->address->streetType;
}
if (null !== $model->history[$index11]->company->address->building) {
    $jsonData["history"][$index11]["company"]["address"]["building"] = $model->history[$index11]->company->address->building;
}
if (null !== $model->history[$index11]->company->address->flat) {
    $jsonData["history"][$index11]["company"]["address"]["flat"] = $model->history[$index11]->company->address->flat;
}
if (null !== $model->history[$index11]->company->address->floor) {
    $jsonData["history"][$index11]["company"]["address"]["floor"] = $model->history[$index11]->company->address->floor;
}
if (null !== $model->history[$index11]->company->address->block) {
    $jsonData["history"][$index11]["company"]["address"]["block"] = $model->history[$index11]->company->address->block;
}
if (null !== $model->history[$index11]->company->address->house) {
    $jsonData["history"][$index11]["company"]["address"]["house"] = $model->history[$index11]->company->address->house;
}
if (null !== $model->history[$index11]->company->address->housing) {
    $jsonData["history"][$index11]["company"]["address"]["housing"] = $model->history[$index11]->company->address->housing;
}
if (null !== $model->history[$index11]->company->address->metro) {
    $jsonData["history"][$index11]["company"]["address"]["metro"] = $model->history[$index11]->company->address->metro;
}
if (null !== $model->history[$index11]->company->address->notes) {
    $jsonData["history"][$index11]["company"]["address"]["notes"] = $model->history[$index11]->company->address->notes;
}
if (null !== $model->history[$index11]->company->address->text) {
    $jsonData["history"][$index11]["company"]["address"]["text"] = $model->history[$index11]->company->address->text;
}
if (null !== $model->history[$index11]->company->address->externalId) {
    $jsonData["history"][$index11]["company"]["address"]["externalId"] = $model->history[$index11]->company->address->externalId;
}

if (0 === \count($jsonData["history"][$index11]["company"]["address"])) {
    $jsonData["history"][$index11]["company"]["address"] = $emptyObject;
}

}
if (null !== $model->history[$index11]->company->customFields) {
    $jsonData["history"][$index11]["company"]["customFields"] = [];
foreach (array_keys($model->history[$index11]->company->customFields) as $index48) {
    $jsonData["history"][$index11]["company"]["customFields"] = $model->history[$index11]->company->customFields;
}

}
if (null !== $model->history[$index11]->company->marginSumm) {
    $jsonData["history"][$index11]["company"]["marginSumm"] = $model->history[$index11]->company->marginSumm;
}
if (null !== $model->history[$index11]->company->totalSumm) {
    $jsonData["history"][$index11]["company"]["totalSumm"] = $model->history[$index11]->company->totalSumm;
}
if (null !== $model->history[$index11]->company->averageSumm) {
    $jsonData["history"][$index11]["company"]["averageSumm"] = $model->history[$index11]->company->averageSumm;
}
if (null !== $model->history[$index11]->company->ordersCount) {
    $jsonData["history"][$index11]["company"]["ordersCount"] = $model->history[$index11]->company->ordersCount;
}
if (null !== $model->history[$index11]->company->costSumm) {
    $jsonData["history"][$index11]["company"]["costSumm"] = $model->history[$index11]->company->costSumm;
}

if (0 === \count($jsonData["history"][$index11]["company"])) {
    $jsonData["history"][$index11]["company"] = $emptyObject;
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
