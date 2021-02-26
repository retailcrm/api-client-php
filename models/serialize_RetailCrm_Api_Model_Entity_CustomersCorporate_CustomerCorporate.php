<?php

function serialize_RetailCrm_Api_Model_Entity_CustomersCorporate_CustomerCorporate(RetailCrm\Api\Model\Entity\CustomersCorporate\CustomerCorporate $model, bool $useStdClass = true)
{
    $emptyHashmap = $useStdClass ? new \stdClass() : [];
    $emptyObject = $useStdClass ? new \stdClass() : [];

    $jsonData = [];
if (null !== $model->type) {
    $jsonData["type"] = $model->type;
}
if (null !== $model->id) {
    $jsonData["id"] = $model->id;
}
if (null !== $model->externalId) {
    $jsonData["externalId"] = $model->externalId;
}
if (null !== $model->nickName) {
    $jsonData["nickName"] = $model->nickName;
}
if (null !== $model->mainAddress) {
    $jsonData["mainAddress"] = [];
if (null !== $model->mainAddress->id) {
    $jsonData["mainAddress"]["id"] = $model->mainAddress->id;
}
if (null !== $model->mainAddress->externalId) {
    $jsonData["mainAddress"]["externalId"] = $model->mainAddress->externalId;
}
if (null !== $model->mainAddress->name) {
    $jsonData["mainAddress"]["name"] = $model->mainAddress->name;
}

if (0 === \count($jsonData["mainAddress"])) {
    $jsonData["mainAddress"] = $emptyObject;
}

}
if (null !== $model->createdAt) {
    $jsonData["createdAt"] = $model->createdAt->format('Y-m-d H:i:s');;
}
if (null !== $model->managerId) {
    $jsonData["managerId"] = $model->managerId;
}
if (null !== $model->source) {
    $jsonData["source"] = [];
if (null !== $model->source->source) {
    $jsonData["source"]["source"] = $model->source->source;
}
if (null !== $model->source->medium) {
    $jsonData["source"]["medium"] = $model->source->medium;
}
if (null !== $model->source->campaign) {
    $jsonData["source"]["campaign"] = $model->source->campaign;
}
if (null !== $model->source->keyword) {
    $jsonData["source"]["keyword"] = $model->source->keyword;
}
if (null !== $model->source->content) {
    $jsonData["source"]["content"] = $model->source->content;
}

if (0 === \count($jsonData["source"])) {
    $jsonData["source"] = $emptyObject;
}

}
if (null !== $model->customerContacts) {
    $jsonData["customerContacts"] = [];
foreach (array_keys($model->customerContacts) as $index20) {
    $jsonData["customerContacts"][$index20] = [];
if (null !== $model->customerContacts[$index20]->id) {
    $jsonData["customerContacts"][$index20]["id"] = $model->customerContacts[$index20]->id;
}
if (null !== $model->customerContacts[$index20]->isMain) {
    $jsonData["customerContacts"][$index20]["isMain"] = $model->customerContacts[$index20]->isMain;
}
if (null !== $model->customerContacts[$index20]->customer) {
    $jsonData["customerContacts"][$index20]["customer"] = [];
if (null !== $model->customerContacts[$index20]->customer->id) {
    $jsonData["customerContacts"][$index20]["customer"]["id"] = $model->customerContacts[$index20]->customer->id;
}
if (null !== $model->customerContacts[$index20]->customer->externalId) {
    $jsonData["customerContacts"][$index20]["customer"]["externalId"] = $model->customerContacts[$index20]->customer->externalId;
}
if (null !== $model->customerContacts[$index20]->customer->browserId) {
    $jsonData["customerContacts"][$index20]["customer"]["browserId"] = $model->customerContacts[$index20]->customer->browserId;
}
if (null !== $model->customerContacts[$index20]->customer->site) {
    $jsonData["customerContacts"][$index20]["customer"]["site"] = $model->customerContacts[$index20]->customer->site;
}
if (null !== $model->customerContacts[$index20]->customer->companies) {
    $jsonData["customerContacts"][$index20]["customer"]["companies"] = [];
foreach (array_keys($model->customerContacts[$index20]->customer->companies) as $index55) {
    $jsonData["customerContacts"][$index20]["customer"]["companies"][$index55] = [];
if (null !== $model->customerContacts[$index20]->customer->companies[$index55]->id) {
    $jsonData["customerContacts"][$index20]["customer"]["companies"][$index55]["id"] = $model->customerContacts[$index20]->customer->companies[$index55]->id;
}
if (null !== $model->customerContacts[$index20]->customer->companies[$index55]->externalId) {
    $jsonData["customerContacts"][$index20]["customer"]["companies"][$index55]["externalId"] = $model->customerContacts[$index20]->customer->companies[$index55]->externalId;
}
if (null !== $model->customerContacts[$index20]->customer->companies[$index55]->company) {
    $jsonData["customerContacts"][$index20]["customer"]["companies"][$index55]["company"] = [];
if (null !== $model->customerContacts[$index20]->customer->companies[$index55]->company->id) {
    $jsonData["customerContacts"][$index20]["customer"]["companies"][$index55]["company"]["id"] = $model->customerContacts[$index20]->customer->companies[$index55]->company->id;
}
if (null !== $model->customerContacts[$index20]->customer->companies[$index55]->company->externalId) {
    $jsonData["customerContacts"][$index20]["customer"]["companies"][$index55]["company"]["externalId"] = $model->customerContacts[$index20]->customer->companies[$index55]->company->externalId;
}
if (null !== $model->customerContacts[$index20]->customer->companies[$index55]->company->name) {
    $jsonData["customerContacts"][$index20]["customer"]["companies"][$index55]["company"]["name"] = $model->customerContacts[$index20]->customer->companies[$index55]->company->name;
}

if (0 === \count($jsonData["customerContacts"][$index20]["customer"]["companies"][$index55]["company"])) {
    $jsonData["customerContacts"][$index20]["customer"]["companies"][$index55]["company"] = $emptyObject;
}

}

if (0 === \count($jsonData["customerContacts"][$index20]["customer"]["companies"][$index55])) {
    $jsonData["customerContacts"][$index20]["customer"]["companies"][$index55] = $emptyObject;
}

}

}

if (0 === \count($jsonData["customerContacts"][$index20]["customer"])) {
    $jsonData["customerContacts"][$index20]["customer"] = $emptyObject;
}

}
if (null !== $model->customerContacts[$index20]->companies) {
    $jsonData["customerContacts"][$index20]["companies"] = [];
foreach (array_keys($model->customerContacts[$index20]->companies) as $index43) {
    $jsonData["customerContacts"][$index20]["companies"][$index43] = [];
if (null !== $model->customerContacts[$index20]->companies[$index43]->id) {
    $jsonData["customerContacts"][$index20]["companies"][$index43]["id"] = $model->customerContacts[$index20]->companies[$index43]->id;
}
if (null !== $model->customerContacts[$index20]->companies[$index43]->externalId) {
    $jsonData["customerContacts"][$index20]["companies"][$index43]["externalId"] = $model->customerContacts[$index20]->companies[$index43]->externalId;
}
if (null !== $model->customerContacts[$index20]->companies[$index43]->company) {
    $jsonData["customerContacts"][$index20]["companies"][$index43]["company"] = [];
if (null !== $model->customerContacts[$index20]->companies[$index43]->company->id) {
    $jsonData["customerContacts"][$index20]["companies"][$index43]["company"]["id"] = $model->customerContacts[$index20]->companies[$index43]->company->id;
}
if (null !== $model->customerContacts[$index20]->companies[$index43]->company->externalId) {
    $jsonData["customerContacts"][$index20]["companies"][$index43]["company"]["externalId"] = $model->customerContacts[$index20]->companies[$index43]->company->externalId;
}
if (null !== $model->customerContacts[$index20]->companies[$index43]->company->name) {
    $jsonData["customerContacts"][$index20]["companies"][$index43]["company"]["name"] = $model->customerContacts[$index20]->companies[$index43]->company->name;
}

if (0 === \count($jsonData["customerContacts"][$index20]["companies"][$index43]["company"])) {
    $jsonData["customerContacts"][$index20]["companies"][$index43]["company"] = $emptyObject;
}

}

if (0 === \count($jsonData["customerContacts"][$index20]["companies"][$index43])) {
    $jsonData["customerContacts"][$index20]["companies"][$index43] = $emptyObject;
}

}

}

if (0 === \count($jsonData["customerContacts"][$index20])) {
    $jsonData["customerContacts"][$index20] = $emptyObject;
}

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
if (null !== $model->addresses) {
    $jsonData["addresses"] = [];
foreach (array_keys($model->addresses) as $index13) {
    $jsonData["addresses"][$index13] = [];
if (null !== $model->addresses[$index13]->id) {
    $jsonData["addresses"][$index13]["id"] = $model->addresses[$index13]->id;
}
if (null !== $model->addresses[$index13]->name) {
    $jsonData["addresses"][$index13]["name"] = $model->addresses[$index13]->name;
}
if (null !== $model->addresses[$index13]->isMain) {
    $jsonData["addresses"][$index13]["isMain"] = $model->addresses[$index13]->isMain;
}
if (null !== $model->addresses[$index13]->index) {
    $jsonData["addresses"][$index13]["index"] = $model->addresses[$index13]->index;
}
if (null !== $model->addresses[$index13]->countryIso) {
    $jsonData["addresses"][$index13]["countryIso"] = $model->addresses[$index13]->countryIso;
}
if (null !== $model->addresses[$index13]->region) {
    $jsonData["addresses"][$index13]["region"] = $model->addresses[$index13]->region;
}
if (null !== $model->addresses[$index13]->regionId) {
    $jsonData["addresses"][$index13]["regionId"] = $model->addresses[$index13]->regionId;
}
if (null !== $model->addresses[$index13]->city) {
    $jsonData["addresses"][$index13]["city"] = $model->addresses[$index13]->city;
}
if (null !== $model->addresses[$index13]->cityId) {
    $jsonData["addresses"][$index13]["cityId"] = $model->addresses[$index13]->cityId;
}
if (null !== $model->addresses[$index13]->cityType) {
    $jsonData["addresses"][$index13]["cityType"] = $model->addresses[$index13]->cityType;
}
if (null !== $model->addresses[$index13]->street) {
    $jsonData["addresses"][$index13]["street"] = $model->addresses[$index13]->street;
}
if (null !== $model->addresses[$index13]->streetId) {
    $jsonData["addresses"][$index13]["streetId"] = $model->addresses[$index13]->streetId;
}
if (null !== $model->addresses[$index13]->streetType) {
    $jsonData["addresses"][$index13]["streetType"] = $model->addresses[$index13]->streetType;
}
if (null !== $model->addresses[$index13]->building) {
    $jsonData["addresses"][$index13]["building"] = $model->addresses[$index13]->building;
}
if (null !== $model->addresses[$index13]->flat) {
    $jsonData["addresses"][$index13]["flat"] = $model->addresses[$index13]->flat;
}
if (null !== $model->addresses[$index13]->floor) {
    $jsonData["addresses"][$index13]["floor"] = $model->addresses[$index13]->floor;
}
if (null !== $model->addresses[$index13]->block) {
    $jsonData["addresses"][$index13]["block"] = $model->addresses[$index13]->block;
}
if (null !== $model->addresses[$index13]->house) {
    $jsonData["addresses"][$index13]["house"] = $model->addresses[$index13]->house;
}
if (null !== $model->addresses[$index13]->housing) {
    $jsonData["addresses"][$index13]["housing"] = $model->addresses[$index13]->housing;
}
if (null !== $model->addresses[$index13]->metro) {
    $jsonData["addresses"][$index13]["metro"] = $model->addresses[$index13]->metro;
}
if (null !== $model->addresses[$index13]->notes) {
    $jsonData["addresses"][$index13]["notes"] = $model->addresses[$index13]->notes;
}
if (null !== $model->addresses[$index13]->text) {
    $jsonData["addresses"][$index13]["text"] = $model->addresses[$index13]->text;
}
if (null !== $model->addresses[$index13]->externalId) {
    $jsonData["addresses"][$index13]["externalId"] = $model->addresses[$index13]->externalId;
}

if (0 === \count($jsonData["addresses"][$index13])) {
    $jsonData["addresses"][$index13] = $emptyObject;
}

}

}
if (null !== $model->vip) {
    $jsonData["vip"] = $model->vip;
}
if (null !== $model->bad) {
    $jsonData["bad"] = $model->bad;
}
if (null !== $model->site) {
    $jsonData["site"] = $model->site;
}
if (null !== $model->tags) {
    $jsonData["tags"] = [];
foreach (array_keys($model->tags) as $index8) {
    $jsonData["tags"][$index8] = [];
if (null !== $model->tags[$index8]->name) {
    $jsonData["tags"][$index8]["name"] = $model->tags[$index8]->name;
}
if (null !== $model->tags[$index8]->color) {
    $jsonData["tags"][$index8]["color"] = $model->tags[$index8]->color;
}
if (null !== $model->tags[$index8]->attached) {
    $jsonData["tags"][$index8]["attached"] = $model->tags[$index8]->attached;
}

if (0 === \count($jsonData["tags"][$index8])) {
    $jsonData["tags"][$index8] = $emptyObject;
}

}

}
if (null !== $model->avgMarginSumm) {
    $jsonData["avgMarginSumm"] = $model->avgMarginSumm;
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
if (null !== $model->customFields) {
    $jsonData["customFields"] = [];
foreach (array_keys($model->customFields) as $index16) {
    $jsonData["customFields"] = $model->customFields;
}

}
if (null !== $model->personalDiscount) {
    $jsonData["personalDiscount"] = $model->personalDiscount;
}
if (null !== $model->cumulativeDiscount) {
    $jsonData["cumulativeDiscount"] = $model->cumulativeDiscount;
}
if (null !== $model->discountCardNumber) {
    $jsonData["discountCardNumber"] = $model->discountCardNumber;
}
if (null !== $model->firstClientId) {
    $jsonData["firstClientId"] = $model->firstClientId;
}
if (null !== $model->lastClientId) {
    $jsonData["lastClientId"] = $model->lastClientId;
}
if (null !== $model->mainCustomerContact) {
    $jsonData["mainCustomerContact"] = [];
if (null !== $model->mainCustomerContact->id) {
    $jsonData["mainCustomerContact"]["id"] = $model->mainCustomerContact->id;
}
if (null !== $model->mainCustomerContact->isMain) {
    $jsonData["mainCustomerContact"]["isMain"] = $model->mainCustomerContact->isMain;
}
if (null !== $model->mainCustomerContact->customer) {
    $jsonData["mainCustomerContact"]["customer"] = [];
if (null !== $model->mainCustomerContact->customer->id) {
    $jsonData["mainCustomerContact"]["customer"]["id"] = $model->mainCustomerContact->customer->id;
}
if (null !== $model->mainCustomerContact->customer->externalId) {
    $jsonData["mainCustomerContact"]["customer"]["externalId"] = $model->mainCustomerContact->customer->externalId;
}
if (null !== $model->mainCustomerContact->customer->browserId) {
    $jsonData["mainCustomerContact"]["customer"]["browserId"] = $model->mainCustomerContact->customer->browserId;
}
if (null !== $model->mainCustomerContact->customer->site) {
    $jsonData["mainCustomerContact"]["customer"]["site"] = $model->mainCustomerContact->customer->site;
}
if (null !== $model->mainCustomerContact->customer->companies) {
    $jsonData["mainCustomerContact"]["customer"]["companies"] = [];
foreach (array_keys($model->mainCustomerContact->customer->companies) as $index48) {
    $jsonData["mainCustomerContact"]["customer"]["companies"][$index48] = [];
if (null !== $model->mainCustomerContact->customer->companies[$index48]->id) {
    $jsonData["mainCustomerContact"]["customer"]["companies"][$index48]["id"] = $model->mainCustomerContact->customer->companies[$index48]->id;
}
if (null !== $model->mainCustomerContact->customer->companies[$index48]->externalId) {
    $jsonData["mainCustomerContact"]["customer"]["companies"][$index48]["externalId"] = $model->mainCustomerContact->customer->companies[$index48]->externalId;
}
if (null !== $model->mainCustomerContact->customer->companies[$index48]->company) {
    $jsonData["mainCustomerContact"]["customer"]["companies"][$index48]["company"] = [];
if (null !== $model->mainCustomerContact->customer->companies[$index48]->company->id) {
    $jsonData["mainCustomerContact"]["customer"]["companies"][$index48]["company"]["id"] = $model->mainCustomerContact->customer->companies[$index48]->company->id;
}
if (null !== $model->mainCustomerContact->customer->companies[$index48]->company->externalId) {
    $jsonData["mainCustomerContact"]["customer"]["companies"][$index48]["company"]["externalId"] = $model->mainCustomerContact->customer->companies[$index48]->company->externalId;
}
if (null !== $model->mainCustomerContact->customer->companies[$index48]->company->name) {
    $jsonData["mainCustomerContact"]["customer"]["companies"][$index48]["company"]["name"] = $model->mainCustomerContact->customer->companies[$index48]->company->name;
}

if (0 === \count($jsonData["mainCustomerContact"]["customer"]["companies"][$index48]["company"])) {
    $jsonData["mainCustomerContact"]["customer"]["companies"][$index48]["company"] = $emptyObject;
}

}

if (0 === \count($jsonData["mainCustomerContact"]["customer"]["companies"][$index48])) {
    $jsonData["mainCustomerContact"]["customer"]["companies"][$index48] = $emptyObject;
}

}

}

if (0 === \count($jsonData["mainCustomerContact"]["customer"])) {
    $jsonData["mainCustomerContact"]["customer"] = $emptyObject;
}

}
if (null !== $model->mainCustomerContact->companies) {
    $jsonData["mainCustomerContact"]["companies"] = [];
foreach (array_keys($model->mainCustomerContact->companies) as $index36) {
    $jsonData["mainCustomerContact"]["companies"][$index36] = [];
if (null !== $model->mainCustomerContact->companies[$index36]->id) {
    $jsonData["mainCustomerContact"]["companies"][$index36]["id"] = $model->mainCustomerContact->companies[$index36]->id;
}
if (null !== $model->mainCustomerContact->companies[$index36]->externalId) {
    $jsonData["mainCustomerContact"]["companies"][$index36]["externalId"] = $model->mainCustomerContact->companies[$index36]->externalId;
}
if (null !== $model->mainCustomerContact->companies[$index36]->company) {
    $jsonData["mainCustomerContact"]["companies"][$index36]["company"] = [];
if (null !== $model->mainCustomerContact->companies[$index36]->company->id) {
    $jsonData["mainCustomerContact"]["companies"][$index36]["company"]["id"] = $model->mainCustomerContact->companies[$index36]->company->id;
}
if (null !== $model->mainCustomerContact->companies[$index36]->company->externalId) {
    $jsonData["mainCustomerContact"]["companies"][$index36]["company"]["externalId"] = $model->mainCustomerContact->companies[$index36]->company->externalId;
}
if (null !== $model->mainCustomerContact->companies[$index36]->company->name) {
    $jsonData["mainCustomerContact"]["companies"][$index36]["company"]["name"] = $model->mainCustomerContact->companies[$index36]->company->name;
}

if (0 === \count($jsonData["mainCustomerContact"]["companies"][$index36]["company"])) {
    $jsonData["mainCustomerContact"]["companies"][$index36]["company"] = $emptyObject;
}

}

if (0 === \count($jsonData["mainCustomerContact"]["companies"][$index36])) {
    $jsonData["mainCustomerContact"]["companies"][$index36] = $emptyObject;
}

}

}

if (0 === \count($jsonData["mainCustomerContact"])) {
    $jsonData["mainCustomerContact"] = $emptyObject;
}

}
if (null !== $model->mainCompany) {
    $jsonData["mainCompany"] = [];
if (null !== $model->mainCompany->id) {
    $jsonData["mainCompany"]["id"] = $model->mainCompany->id;
}
if (null !== $model->mainCompany->externalId) {
    $jsonData["mainCompany"]["externalId"] = $model->mainCompany->externalId;
}
if (null !== $model->mainCompany->name) {
    $jsonData["mainCompany"]["name"] = $model->mainCompany->name;
}

if (0 === \count($jsonData["mainCompany"])) {
    $jsonData["mainCompany"] = $emptyObject;
}

}

if (0 === \count($jsonData)) {
    $jsonData = $emptyObject;
}


    return $jsonData;
}
