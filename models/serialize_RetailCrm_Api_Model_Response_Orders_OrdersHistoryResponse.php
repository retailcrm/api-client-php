<?php

function serialize_RetailCrm_Api_Model_Response_Orders_OrdersHistoryResponse(RetailCrm\Api\Model\Response\Orders\OrdersHistoryResponse $model, bool $useStdClass = true)
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
if (null !== $model->history[$index11]->order) {
    $jsonData["history"][$index11]["order"] = [];
if (null !== $model->history[$index11]->order->bonusesCreditTotal) {
    $jsonData["history"][$index11]["order"]["bonusesCreditTotal"] = $model->history[$index11]->order->bonusesCreditTotal;
}
if (null !== $model->history[$index11]->order->bonusesChargeTotal) {
    $jsonData["history"][$index11]["order"]["bonusesChargeTotal"] = $model->history[$index11]->order->bonusesChargeTotal;
}
if (null !== $model->history[$index11]->order->summ) {
    $jsonData["history"][$index11]["order"]["summ"] = $model->history[$index11]->order->summ;
}
if (null !== $model->history[$index11]->order->id) {
    $jsonData["history"][$index11]["order"]["id"] = $model->history[$index11]->order->id;
}
if (null !== $model->history[$index11]->order->slug) {
    $jsonData["history"][$index11]["order"]["slug"] = $model->history[$index11]->order->slug;
}
if (null !== $model->history[$index11]->order->number) {
    $jsonData["history"][$index11]["order"]["number"] = $model->history[$index11]->order->number;
}
if (null !== $model->history[$index11]->order->externalId) {
    $jsonData["history"][$index11]["order"]["externalId"] = $model->history[$index11]->order->externalId;
}
if (null !== $model->history[$index11]->order->orderType) {
    $jsonData["history"][$index11]["order"]["orderType"] = $model->history[$index11]->order->orderType;
}
if (null !== $model->history[$index11]->order->orderMethod) {
    $jsonData["history"][$index11]["order"]["orderMethod"] = $model->history[$index11]->order->orderMethod;
}
if (null !== $model->history[$index11]->order->privilegeType) {
    $jsonData["history"][$index11]["order"]["privilegeType"] = $model->history[$index11]->order->privilegeType;
}
if (null !== $model->history[$index11]->order->countryIso) {
    $jsonData["history"][$index11]["order"]["countryIso"] = $model->history[$index11]->order->countryIso;
}
if (null !== $model->history[$index11]->order->createdAt) {
    $jsonData["history"][$index11]["order"]["createdAt"] = $model->history[$index11]->order->createdAt->format('Y-m-d H:i:s');;
}
if (null !== $model->history[$index11]->order->statusUpdatedAt) {
    $jsonData["history"][$index11]["order"]["statusUpdatedAt"] = $model->history[$index11]->order->statusUpdatedAt->format('Y-m-d H:i:s');;
}
if (null !== $model->history[$index11]->order->discountManualAmount) {
    $jsonData["history"][$index11]["order"]["discountManualAmount"] = $model->history[$index11]->order->discountManualAmount;
}
if (null !== $model->history[$index11]->order->discountManualPercent) {
    $jsonData["history"][$index11]["order"]["discountManualPercent"] = $model->history[$index11]->order->discountManualPercent;
}
if (null !== $model->history[$index11]->order->totalSumm) {
    $jsonData["history"][$index11]["order"]["totalSumm"] = $model->history[$index11]->order->totalSumm;
}
if (null !== $model->history[$index11]->order->prepaySum) {
    $jsonData["history"][$index11]["order"]["prepaySum"] = $model->history[$index11]->order->prepaySum;
}
if (null !== $model->history[$index11]->order->purchaseSumm) {
    $jsonData["history"][$index11]["order"]["purchaseSumm"] = $model->history[$index11]->order->purchaseSumm;
}
if (null !== $model->history[$index11]->order->personalDiscountPercent) {
    $jsonData["history"][$index11]["order"]["personalDiscountPercent"] = $model->history[$index11]->order->personalDiscountPercent;
}
if (null !== $model->history[$index11]->order->loyaltyLevel) {
    $jsonData["history"][$index11]["order"]["loyaltyLevel"] = [];
if (null !== $model->history[$index11]->order->loyaltyLevel->id) {
    $jsonData["history"][$index11]["order"]["loyaltyLevel"]["id"] = $model->history[$index11]->order->loyaltyLevel->id;
}
if (null !== $model->history[$index11]->order->loyaltyLevel->name) {
    $jsonData["history"][$index11]["order"]["loyaltyLevel"]["name"] = $model->history[$index11]->order->loyaltyLevel->name;
}

if (0 === \count($jsonData["history"][$index11]["order"]["loyaltyLevel"])) {
    $jsonData["history"][$index11]["order"]["loyaltyLevel"] = $emptyObject;
}

}
if (null !== $model->history[$index11]->order->loyaltyEvent) {
    $jsonData["history"][$index11]["order"]["loyaltyEvent"] = [];
if (null !== $model->history[$index11]->order->loyaltyEvent->id) {
    $jsonData["history"][$index11]["order"]["loyaltyEvent"]["id"] = $model->history[$index11]->order->loyaltyEvent->id;
}

if (0 === \count($jsonData["history"][$index11]["order"]["loyaltyEvent"])) {
    $jsonData["history"][$index11]["order"]["loyaltyEvent"] = $emptyObject;
}

}
if (null !== $model->history[$index11]->order->mark) {
    $jsonData["history"][$index11]["order"]["mark"] = $model->history[$index11]->order->mark;
}
if (null !== $model->history[$index11]->order->markDatetime) {
    $jsonData["history"][$index11]["order"]["markDatetime"] = $model->history[$index11]->order->markDatetime->format('Y-m-d H:i:s');;
}
if (null !== $model->history[$index11]->order->lastName) {
    $jsonData["history"][$index11]["order"]["lastName"] = $model->history[$index11]->order->lastName;
}
if (null !== $model->history[$index11]->order->firstName) {
    $jsonData["history"][$index11]["order"]["firstName"] = $model->history[$index11]->order->firstName;
}
if (null !== $model->history[$index11]->order->patronymic) {
    $jsonData["history"][$index11]["order"]["patronymic"] = $model->history[$index11]->order->patronymic;
}
if (null !== $model->history[$index11]->order->phone) {
    $jsonData["history"][$index11]["order"]["phone"] = $model->history[$index11]->order->phone;
}
if (null !== $model->history[$index11]->order->additionalPhone) {
    $jsonData["history"][$index11]["order"]["additionalPhone"] = $model->history[$index11]->order->additionalPhone;
}
if (null !== $model->history[$index11]->order->email) {
    $jsonData["history"][$index11]["order"]["email"] = $model->history[$index11]->order->email;
}
if (null !== $model->history[$index11]->order->call) {
    $jsonData["history"][$index11]["order"]["call"] = $model->history[$index11]->order->call;
}
if (null !== $model->history[$index11]->order->expired) {
    $jsonData["history"][$index11]["order"]["expired"] = $model->history[$index11]->order->expired;
}
if (null !== $model->history[$index11]->order->customerComment) {
    $jsonData["history"][$index11]["order"]["customerComment"] = $model->history[$index11]->order->customerComment;
}
if (null !== $model->history[$index11]->order->managerComment) {
    $jsonData["history"][$index11]["order"]["managerComment"] = $model->history[$index11]->order->managerComment;
}
if (null !== $model->history[$index11]->order->managerId) {
    $jsonData["history"][$index11]["order"]["managerId"] = $model->history[$index11]->order->managerId;
}
if (null !== $model->history[$index11]->order->customer) {
    $jsonData["history"][$index11]["order"]["customer"] = [];

if (0 === \count($jsonData["history"][$index11]["order"]["customer"])) {
    $jsonData["history"][$index11]["order"]["customer"] = $emptyObject;
}

if ($model->history[$index11]->order->customer instanceof \RetailCrm\Api\Model\Entity\Customers\Customer) {
    $jsonData["history"][$index11]["order"]["customer"] = [];
if (null !== $model->history[$index11]->order->customer->type) {
    $jsonData["history"][$index11]["order"]["customer"]["type"] = $model->history[$index11]->order->customer->type;
}
if (null !== $model->history[$index11]->order->customer->id) {
    $jsonData["history"][$index11]["order"]["customer"]["id"] = $model->history[$index11]->order->customer->id;
}
if (null !== $model->history[$index11]->order->customer->externalId) {
    $jsonData["history"][$index11]["order"]["customer"]["externalId"] = $model->history[$index11]->order->customer->externalId;
}
if (null !== $model->history[$index11]->order->customer->isContact) {
    $jsonData["history"][$index11]["order"]["customer"]["isContact"] = $model->history[$index11]->order->customer->isContact;
}
if (null !== $model->history[$index11]->order->customer->createdAt) {
    $jsonData["history"][$index11]["order"]["customer"]["createdAt"] = $model->history[$index11]->order->customer->createdAt->format('Y-m-d H:i:s');;
}
if (null !== $model->history[$index11]->order->customer->managerId) {
    $jsonData["history"][$index11]["order"]["customer"]["managerId"] = $model->history[$index11]->order->customer->managerId;
}
if (null !== $model->history[$index11]->order->customer->vip) {
    $jsonData["history"][$index11]["order"]["customer"]["vip"] = $model->history[$index11]->order->customer->vip;
}
if (null !== $model->history[$index11]->order->customer->bad) {
    $jsonData["history"][$index11]["order"]["customer"]["bad"] = $model->history[$index11]->order->customer->bad;
}
if (null !== $model->history[$index11]->order->customer->browserId) {
    $jsonData["history"][$index11]["order"]["customer"]["browserId"] = $model->history[$index11]->order->customer->browserId;
}
if (null !== $model->history[$index11]->order->customer->site) {
    $jsonData["history"][$index11]["order"]["customer"]["site"] = $model->history[$index11]->order->customer->site;
}
if (null !== $model->history[$index11]->order->customer->contragent) {
    $jsonData["history"][$index11]["order"]["customer"]["contragent"] = [];
if (null !== $model->history[$index11]->order->customer->contragent->contragentType) {
    $jsonData["history"][$index11]["order"]["customer"]["contragent"]["contragentType"] = $model->history[$index11]->order->customer->contragent->contragentType;
}
if (null !== $model->history[$index11]->order->customer->contragent->legalName) {
    $jsonData["history"][$index11]["order"]["customer"]["contragent"]["legalName"] = $model->history[$index11]->order->customer->contragent->legalName;
}
if (null !== $model->history[$index11]->order->customer->contragent->legalAddress) {
    $jsonData["history"][$index11]["order"]["customer"]["contragent"]["legalAddress"] = $model->history[$index11]->order->customer->contragent->legalAddress;
}
if (null !== $model->history[$index11]->order->customer->contragent->INN) {
    $jsonData["history"][$index11]["order"]["customer"]["contragent"]["INN"] = $model->history[$index11]->order->customer->contragent->INN;
}
if (null !== $model->history[$index11]->order->customer->contragent->OKPO) {
    $jsonData["history"][$index11]["order"]["customer"]["contragent"]["OKPO"] = $model->history[$index11]->order->customer->contragent->OKPO;
}
if (null !== $model->history[$index11]->order->customer->contragent->KPP) {
    $jsonData["history"][$index11]["order"]["customer"]["contragent"]["KPP"] = $model->history[$index11]->order->customer->contragent->KPP;
}
if (null !== $model->history[$index11]->order->customer->contragent->OGRN) {
    $jsonData["history"][$index11]["order"]["customer"]["contragent"]["OGRN"] = $model->history[$index11]->order->customer->contragent->OGRN;
}
if (null !== $model->history[$index11]->order->customer->contragent->OGRNIP) {
    $jsonData["history"][$index11]["order"]["customer"]["contragent"]["OGRNIP"] = $model->history[$index11]->order->customer->contragent->OGRNIP;
}
if (null !== $model->history[$index11]->order->customer->contragent->certificateNumber) {
    $jsonData["history"][$index11]["order"]["customer"]["contragent"]["certificateNumber"] = $model->history[$index11]->order->customer->contragent->certificateNumber;
}
if (null !== $model->history[$index11]->order->customer->contragent->certificateDate) {
    $jsonData["history"][$index11]["order"]["customer"]["contragent"]["certificateDate"] = $model->history[$index11]->order->customer->contragent->certificateDate->format('Y-m-d H:i:s');;
}
if (null !== $model->history[$index11]->order->customer->contragent->BIK) {
    $jsonData["history"][$index11]["order"]["customer"]["contragent"]["BIK"] = $model->history[$index11]->order->customer->contragent->BIK;
}
if (null !== $model->history[$index11]->order->customer->contragent->bank) {
    $jsonData["history"][$index11]["order"]["customer"]["contragent"]["bank"] = $model->history[$index11]->order->customer->contragent->bank;
}
if (null !== $model->history[$index11]->order->customer->contragent->bankAddress) {
    $jsonData["history"][$index11]["order"]["customer"]["contragent"]["bankAddress"] = $model->history[$index11]->order->customer->contragent->bankAddress;
}
if (null !== $model->history[$index11]->order->customer->contragent->corrAccount) {
    $jsonData["history"][$index11]["order"]["customer"]["contragent"]["corrAccount"] = $model->history[$index11]->order->customer->contragent->corrAccount;
}
if (null !== $model->history[$index11]->order->customer->contragent->bankAccount) {
    $jsonData["history"][$index11]["order"]["customer"]["contragent"]["bankAccount"] = $model->history[$index11]->order->customer->contragent->bankAccount;
}

if (0 === \count($jsonData["history"][$index11]["order"]["customer"]["contragent"])) {
    $jsonData["history"][$index11]["order"]["customer"]["contragent"] = $emptyObject;
}

}
if (null !== $model->history[$index11]->order->customer->tags) {
    $jsonData["history"][$index11]["order"]["customer"]["tags"] = [];
foreach (array_keys($model->history[$index11]->order->customer->tags) as $index50) {
    $jsonData["history"][$index11]["order"]["customer"]["tags"][$index50] = [];
if (null !== $model->history[$index11]->order->customer->tags[$index50]->name) {
    $jsonData["history"][$index11]["order"]["customer"]["tags"][$index50]["name"] = $model->history[$index11]->order->customer->tags[$index50]->name;
}
if (null !== $model->history[$index11]->order->customer->tags[$index50]->color) {
    $jsonData["history"][$index11]["order"]["customer"]["tags"][$index50]["color"] = $model->history[$index11]->order->customer->tags[$index50]->color;
}
if (null !== $model->history[$index11]->order->customer->tags[$index50]->attached) {
    $jsonData["history"][$index11]["order"]["customer"]["tags"][$index50]["attached"] = $model->history[$index11]->order->customer->tags[$index50]->attached;
}

if (0 === \count($jsonData["history"][$index11]["order"]["customer"]["tags"][$index50])) {
    $jsonData["history"][$index11]["order"]["customer"]["tags"][$index50] = $emptyObject;
}

}

}
if (null !== $model->history[$index11]->order->customer->avgMarginSumm) {
    $jsonData["history"][$index11]["order"]["customer"]["avgMarginSumm"] = $model->history[$index11]->order->customer->avgMarginSumm;
}
if (null !== $model->history[$index11]->order->customer->marginSumm) {
    $jsonData["history"][$index11]["order"]["customer"]["marginSumm"] = $model->history[$index11]->order->customer->marginSumm;
}
if (null !== $model->history[$index11]->order->customer->totalSumm) {
    $jsonData["history"][$index11]["order"]["customer"]["totalSumm"] = $model->history[$index11]->order->customer->totalSumm;
}
if (null !== $model->history[$index11]->order->customer->averageSumm) {
    $jsonData["history"][$index11]["order"]["customer"]["averageSumm"] = $model->history[$index11]->order->customer->averageSumm;
}
if (null !== $model->history[$index11]->order->customer->ordersCount) {
    $jsonData["history"][$index11]["order"]["customer"]["ordersCount"] = $model->history[$index11]->order->customer->ordersCount;
}
if (null !== $model->history[$index11]->order->customer->costSumm) {
    $jsonData["history"][$index11]["order"]["customer"]["costSumm"] = $model->history[$index11]->order->customer->costSumm;
}
if (null !== $model->history[$index11]->order->customer->customFields) {
    $jsonData["history"][$index11]["order"]["customer"]["customFields"] = [];
foreach (array_keys($model->history[$index11]->order->customer->customFields) as $index58) {
    $jsonData["history"][$index11]["order"]["customer"]["customFields"] = $model->history[$index11]->order->customer->customFields;
}

}
if (null !== $model->history[$index11]->order->customer->personalDiscount) {
    $jsonData["history"][$index11]["order"]["customer"]["personalDiscount"] = $model->history[$index11]->order->customer->personalDiscount;
}
if (null !== $model->history[$index11]->order->customer->cumulativeDiscount) {
    $jsonData["history"][$index11]["order"]["customer"]["cumulativeDiscount"] = $model->history[$index11]->order->customer->cumulativeDiscount;
}
if (null !== $model->history[$index11]->order->customer->discountCardNumber) {
    $jsonData["history"][$index11]["order"]["customer"]["discountCardNumber"] = $model->history[$index11]->order->customer->discountCardNumber;
}
if (null !== $model->history[$index11]->order->customer->firstClientId) {
    $jsonData["history"][$index11]["order"]["customer"]["firstClientId"] = $model->history[$index11]->order->customer->firstClientId;
}
if (null !== $model->history[$index11]->order->customer->lastClientId) {
    $jsonData["history"][$index11]["order"]["customer"]["lastClientId"] = $model->history[$index11]->order->customer->lastClientId;
}
if (null !== $model->history[$index11]->order->customer->address) {
    $jsonData["history"][$index11]["order"]["customer"]["address"] = [];
if (null !== $model->history[$index11]->order->customer->address->id) {
    $jsonData["history"][$index11]["order"]["customer"]["address"]["id"] = $model->history[$index11]->order->customer->address->id;
}
if (null !== $model->history[$index11]->order->customer->address->name) {
    $jsonData["history"][$index11]["order"]["customer"]["address"]["name"] = $model->history[$index11]->order->customer->address->name;
}
if (null !== $model->history[$index11]->order->customer->address->isMain) {
    $jsonData["history"][$index11]["order"]["customer"]["address"]["isMain"] = $model->history[$index11]->order->customer->address->isMain;
}
if (null !== $model->history[$index11]->order->customer->address->index) {
    $jsonData["history"][$index11]["order"]["customer"]["address"]["index"] = $model->history[$index11]->order->customer->address->index;
}
if (null !== $model->history[$index11]->order->customer->address->countryIso) {
    $jsonData["history"][$index11]["order"]["customer"]["address"]["countryIso"] = $model->history[$index11]->order->customer->address->countryIso;
}
if (null !== $model->history[$index11]->order->customer->address->region) {
    $jsonData["history"][$index11]["order"]["customer"]["address"]["region"] = $model->history[$index11]->order->customer->address->region;
}
if (null !== $model->history[$index11]->order->customer->address->regionId) {
    $jsonData["history"][$index11]["order"]["customer"]["address"]["regionId"] = $model->history[$index11]->order->customer->address->regionId;
}
if (null !== $model->history[$index11]->order->customer->address->city) {
    $jsonData["history"][$index11]["order"]["customer"]["address"]["city"] = $model->history[$index11]->order->customer->address->city;
}
if (null !== $model->history[$index11]->order->customer->address->cityId) {
    $jsonData["history"][$index11]["order"]["customer"]["address"]["cityId"] = $model->history[$index11]->order->customer->address->cityId;
}
if (null !== $model->history[$index11]->order->customer->address->cityType) {
    $jsonData["history"][$index11]["order"]["customer"]["address"]["cityType"] = $model->history[$index11]->order->customer->address->cityType;
}
if (null !== $model->history[$index11]->order->customer->address->street) {
    $jsonData["history"][$index11]["order"]["customer"]["address"]["street"] = $model->history[$index11]->order->customer->address->street;
}
if (null !== $model->history[$index11]->order->customer->address->streetId) {
    $jsonData["history"][$index11]["order"]["customer"]["address"]["streetId"] = $model->history[$index11]->order->customer->address->streetId;
}
if (null !== $model->history[$index11]->order->customer->address->streetType) {
    $jsonData["history"][$index11]["order"]["customer"]["address"]["streetType"] = $model->history[$index11]->order->customer->address->streetType;
}
if (null !== $model->history[$index11]->order->customer->address->building) {
    $jsonData["history"][$index11]["order"]["customer"]["address"]["building"] = $model->history[$index11]->order->customer->address->building;
}
if (null !== $model->history[$index11]->order->customer->address->flat) {
    $jsonData["history"][$index11]["order"]["customer"]["address"]["flat"] = $model->history[$index11]->order->customer->address->flat;
}
if (null !== $model->history[$index11]->order->customer->address->floor) {
    $jsonData["history"][$index11]["order"]["customer"]["address"]["floor"] = $model->history[$index11]->order->customer->address->floor;
}
if (null !== $model->history[$index11]->order->customer->address->block) {
    $jsonData["history"][$index11]["order"]["customer"]["address"]["block"] = $model->history[$index11]->order->customer->address->block;
}
if (null !== $model->history[$index11]->order->customer->address->house) {
    $jsonData["history"][$index11]["order"]["customer"]["address"]["house"] = $model->history[$index11]->order->customer->address->house;
}
if (null !== $model->history[$index11]->order->customer->address->housing) {
    $jsonData["history"][$index11]["order"]["customer"]["address"]["housing"] = $model->history[$index11]->order->customer->address->housing;
}
if (null !== $model->history[$index11]->order->customer->address->metro) {
    $jsonData["history"][$index11]["order"]["customer"]["address"]["metro"] = $model->history[$index11]->order->customer->address->metro;
}
if (null !== $model->history[$index11]->order->customer->address->notes) {
    $jsonData["history"][$index11]["order"]["customer"]["address"]["notes"] = $model->history[$index11]->order->customer->address->notes;
}
if (null !== $model->history[$index11]->order->customer->address->text) {
    $jsonData["history"][$index11]["order"]["customer"]["address"]["text"] = $model->history[$index11]->order->customer->address->text;
}
if (null !== $model->history[$index11]->order->customer->address->externalId) {
    $jsonData["history"][$index11]["order"]["customer"]["address"]["externalId"] = $model->history[$index11]->order->customer->address->externalId;
}

if (0 === \count($jsonData["history"][$index11]["order"]["customer"]["address"])) {
    $jsonData["history"][$index11]["order"]["customer"]["address"] = $emptyObject;
}

}
if (null !== $model->history[$index11]->order->customer->segments) {
    $jsonData["history"][$index11]["order"]["customer"]["segments"] = [];
foreach (array_keys($model->history[$index11]->order->customer->segments) as $index54) {
    $jsonData["history"][$index11]["order"]["customer"]["segments"][$index54] = [];
if (null !== $model->history[$index11]->order->customer->segments[$index54]->id) {
    $jsonData["history"][$index11]["order"]["customer"]["segments"][$index54]["id"] = $model->history[$index11]->order->customer->segments[$index54]->id;
}
if (null !== $model->history[$index11]->order->customer->segments[$index54]->code) {
    $jsonData["history"][$index11]["order"]["customer"]["segments"][$index54]["code"] = $model->history[$index11]->order->customer->segments[$index54]->code;
}
if (null !== $model->history[$index11]->order->customer->segments[$index54]->name) {
    $jsonData["history"][$index11]["order"]["customer"]["segments"][$index54]["name"] = $model->history[$index11]->order->customer->segments[$index54]->name;
}
if (null !== $model->history[$index11]->order->customer->segments[$index54]->createdAt) {
    $jsonData["history"][$index11]["order"]["customer"]["segments"][$index54]["createdAt"] = $model->history[$index11]->order->customer->segments[$index54]->createdAt->format('Y-m-d H:i:s');;
}
if (null !== $model->history[$index11]->order->customer->segments[$index54]->isDynamic) {
    $jsonData["history"][$index11]["order"]["customer"]["segments"][$index54]["isDynamic"] = $model->history[$index11]->order->customer->segments[$index54]->isDynamic;
}
if (null !== $model->history[$index11]->order->customer->segments[$index54]->customersCount) {
    $jsonData["history"][$index11]["order"]["customer"]["segments"][$index54]["customersCount"] = $model->history[$index11]->order->customer->segments[$index54]->customersCount;
}
if (null !== $model->history[$index11]->order->customer->segments[$index54]->active) {
    $jsonData["history"][$index11]["order"]["customer"]["segments"][$index54]["active"] = $model->history[$index11]->order->customer->segments[$index54]->active;
}

if (0 === \count($jsonData["history"][$index11]["order"]["customer"]["segments"][$index54])) {
    $jsonData["history"][$index11]["order"]["customer"]["segments"][$index54] = $emptyObject;
}

}

}
if (null !== $model->history[$index11]->order->customer->maturationTime) {
    $jsonData["history"][$index11]["order"]["customer"]["maturationTime"] = $model->history[$index11]->order->customer->maturationTime;
}
if (null !== $model->history[$index11]->order->customer->firstName) {
    $jsonData["history"][$index11]["order"]["customer"]["firstName"] = $model->history[$index11]->order->customer->firstName;
}
if (null !== $model->history[$index11]->order->customer->lastName) {
    $jsonData["history"][$index11]["order"]["customer"]["lastName"] = $model->history[$index11]->order->customer->lastName;
}
if (null !== $model->history[$index11]->order->customer->patronymic) {
    $jsonData["history"][$index11]["order"]["customer"]["patronymic"] = $model->history[$index11]->order->customer->patronymic;
}
if (null !== $model->history[$index11]->order->customer->sex) {
    $jsonData["history"][$index11]["order"]["customer"]["sex"] = $model->history[$index11]->order->customer->sex;
}
if (null !== $model->history[$index11]->order->customer->presumableSex) {
    $jsonData["history"][$index11]["order"]["customer"]["presumableSex"] = $model->history[$index11]->order->customer->presumableSex;
}
if (null !== $model->history[$index11]->order->customer->email) {
    $jsonData["history"][$index11]["order"]["customer"]["email"] = $model->history[$index11]->order->customer->email;
}
if (null !== $model->history[$index11]->order->customer->emailMarketingUnsubscribedAt) {
    $jsonData["history"][$index11]["order"]["customer"]["emailMarketingUnsubscribedAt"] = $model->history[$index11]->order->customer->emailMarketingUnsubscribedAt->format('Y-m-d H:i:s');;
}
if (null !== $model->history[$index11]->order->customer->phones) {
    $jsonData["history"][$index11]["order"]["customer"]["phones"] = [];
foreach (array_keys($model->history[$index11]->order->customer->phones) as $index52) {
    $jsonData["history"][$index11]["order"]["customer"]["phones"][$index52] = [];
if (null !== $model->history[$index11]->order->customer->phones[$index52]->number) {
    $jsonData["history"][$index11]["order"]["customer"]["phones"][$index52]["number"] = $model->history[$index11]->order->customer->phones[$index52]->number;
}

if (0 === \count($jsonData["history"][$index11]["order"]["customer"]["phones"][$index52])) {
    $jsonData["history"][$index11]["order"]["customer"]["phones"][$index52] = $emptyObject;
}

}

}
if (null !== $model->history[$index11]->order->customer->birthday) {
    $jsonData["history"][$index11]["order"]["customer"]["birthday"] = $model->history[$index11]->order->customer->birthday->format('Y-m-d H:i:s');;
}
if (null !== $model->history[$index11]->order->customer->source) {
    $jsonData["history"][$index11]["order"]["customer"]["source"] = [];
if (null !== $model->history[$index11]->order->customer->source->source) {
    $jsonData["history"][$index11]["order"]["customer"]["source"]["source"] = $model->history[$index11]->order->customer->source->source;
}
if (null !== $model->history[$index11]->order->customer->source->medium) {
    $jsonData["history"][$index11]["order"]["customer"]["source"]["medium"] = $model->history[$index11]->order->customer->source->medium;
}
if (null !== $model->history[$index11]->order->customer->source->campaign) {
    $jsonData["history"][$index11]["order"]["customer"]["source"]["campaign"] = $model->history[$index11]->order->customer->source->campaign;
}
if (null !== $model->history[$index11]->order->customer->source->keyword) {
    $jsonData["history"][$index11]["order"]["customer"]["source"]["keyword"] = $model->history[$index11]->order->customer->source->keyword;
}
if (null !== $model->history[$index11]->order->customer->source->content) {
    $jsonData["history"][$index11]["order"]["customer"]["source"]["content"] = $model->history[$index11]->order->customer->source->content;
}

if (0 === \count($jsonData["history"][$index11]["order"]["customer"]["source"])) {
    $jsonData["history"][$index11]["order"]["customer"]["source"] = $emptyObject;
}

}
if (null !== $model->history[$index11]->order->customer->photoUrl) {
    $jsonData["history"][$index11]["order"]["customer"]["photoUrl"] = $model->history[$index11]->order->customer->photoUrl;
}
if (null !== $model->history[$index11]->order->customer->mgCustomerId) {
    $jsonData["history"][$index11]["order"]["customer"]["mgCustomerId"] = $model->history[$index11]->order->customer->mgCustomerId;
}
if (null !== $model->history[$index11]->order->customer->subscribed) {
    $jsonData["history"][$index11]["order"]["customer"]["subscribed"] = $model->history[$index11]->order->customer->subscribed;
}

if (0 === \count($jsonData["history"][$index11]["order"]["customer"])) {
    $jsonData["history"][$index11]["order"]["customer"] = $emptyObject;
}

} elseif ($model->history[$index11]->order->customer instanceof \RetailCrm\Api\Model\Entity\CustomersCorporate\CustomerCorporate) {
    $jsonData["history"][$index11]["order"]["customer"] = [];
if (null !== $model->history[$index11]->order->customer->type) {
    $jsonData["history"][$index11]["order"]["customer"]["type"] = $model->history[$index11]->order->customer->type;
}
if (null !== $model->history[$index11]->order->customer->id) {
    $jsonData["history"][$index11]["order"]["customer"]["id"] = $model->history[$index11]->order->customer->id;
}
if (null !== $model->history[$index11]->order->customer->externalId) {
    $jsonData["history"][$index11]["order"]["customer"]["externalId"] = $model->history[$index11]->order->customer->externalId;
}
if (null !== $model->history[$index11]->order->customer->nickName) {
    $jsonData["history"][$index11]["order"]["customer"]["nickName"] = $model->history[$index11]->order->customer->nickName;
}
if (null !== $model->history[$index11]->order->customer->mainAddress) {
    $jsonData["history"][$index11]["order"]["customer"]["mainAddress"] = [];
if (null !== $model->history[$index11]->order->customer->mainAddress->id) {
    $jsonData["history"][$index11]["order"]["customer"]["mainAddress"]["id"] = $model->history[$index11]->order->customer->mainAddress->id;
}
if (null !== $model->history[$index11]->order->customer->mainAddress->externalId) {
    $jsonData["history"][$index11]["order"]["customer"]["mainAddress"]["externalId"] = $model->history[$index11]->order->customer->mainAddress->externalId;
}
if (null !== $model->history[$index11]->order->customer->mainAddress->name) {
    $jsonData["history"][$index11]["order"]["customer"]["mainAddress"]["name"] = $model->history[$index11]->order->customer->mainAddress->name;
}

if (0 === \count($jsonData["history"][$index11]["order"]["customer"]["mainAddress"])) {
    $jsonData["history"][$index11]["order"]["customer"]["mainAddress"] = $emptyObject;
}

}
if (null !== $model->history[$index11]->order->customer->createdAt) {
    $jsonData["history"][$index11]["order"]["customer"]["createdAt"] = $model->history[$index11]->order->customer->createdAt->format('Y-m-d H:i:s');;
}
if (null !== $model->history[$index11]->order->customer->managerId) {
    $jsonData["history"][$index11]["order"]["customer"]["managerId"] = $model->history[$index11]->order->customer->managerId;
}
if (null !== $model->history[$index11]->order->customer->source) {
    $jsonData["history"][$index11]["order"]["customer"]["source"] = [];
if (null !== $model->history[$index11]->order->customer->source->source) {
    $jsonData["history"][$index11]["order"]["customer"]["source"]["source"] = $model->history[$index11]->order->customer->source->source;
}
if (null !== $model->history[$index11]->order->customer->source->medium) {
    $jsonData["history"][$index11]["order"]["customer"]["source"]["medium"] = $model->history[$index11]->order->customer->source->medium;
}
if (null !== $model->history[$index11]->order->customer->source->campaign) {
    $jsonData["history"][$index11]["order"]["customer"]["source"]["campaign"] = $model->history[$index11]->order->customer->source->campaign;
}
if (null !== $model->history[$index11]->order->customer->source->keyword) {
    $jsonData["history"][$index11]["order"]["customer"]["source"]["keyword"] = $model->history[$index11]->order->customer->source->keyword;
}
if (null !== $model->history[$index11]->order->customer->source->content) {
    $jsonData["history"][$index11]["order"]["customer"]["source"]["content"] = $model->history[$index11]->order->customer->source->content;
}

if (0 === \count($jsonData["history"][$index11]["order"]["customer"]["source"])) {
    $jsonData["history"][$index11]["order"]["customer"]["source"] = $emptyObject;
}

}
if (null !== $model->history[$index11]->order->customer->customerContacts) {
    $jsonData["history"][$index11]["order"]["customer"]["customerContacts"] = [];
foreach (array_keys($model->history[$index11]->order->customer->customerContacts) as $index62) {
    $jsonData["history"][$index11]["order"]["customer"]["customerContacts"][$index62] = [];
if (null !== $model->history[$index11]->order->customer->customerContacts[$index62]->id) {
    $jsonData["history"][$index11]["order"]["customer"]["customerContacts"][$index62]["id"] = $model->history[$index11]->order->customer->customerContacts[$index62]->id;
}
if (null !== $model->history[$index11]->order->customer->customerContacts[$index62]->isMain) {
    $jsonData["history"][$index11]["order"]["customer"]["customerContacts"][$index62]["isMain"] = $model->history[$index11]->order->customer->customerContacts[$index62]->isMain;
}
if (null !== $model->history[$index11]->order->customer->customerContacts[$index62]->customer) {
    $jsonData["history"][$index11]["order"]["customer"]["customerContacts"][$index62]["customer"] = [];
if (null !== $model->history[$index11]->order->customer->customerContacts[$index62]->customer->id) {
    $jsonData["history"][$index11]["order"]["customer"]["customerContacts"][$index62]["customer"]["id"] = $model->history[$index11]->order->customer->customerContacts[$index62]->customer->id;
}
if (null !== $model->history[$index11]->order->customer->customerContacts[$index62]->customer->externalId) {
    $jsonData["history"][$index11]["order"]["customer"]["customerContacts"][$index62]["customer"]["externalId"] = $model->history[$index11]->order->customer->customerContacts[$index62]->customer->externalId;
}
if (null !== $model->history[$index11]->order->customer->customerContacts[$index62]->customer->browserId) {
    $jsonData["history"][$index11]["order"]["customer"]["customerContacts"][$index62]["customer"]["browserId"] = $model->history[$index11]->order->customer->customerContacts[$index62]->customer->browserId;
}
if (null !== $model->history[$index11]->order->customer->customerContacts[$index62]->customer->site) {
    $jsonData["history"][$index11]["order"]["customer"]["customerContacts"][$index62]["customer"]["site"] = $model->history[$index11]->order->customer->customerContacts[$index62]->customer->site;
}
if (null !== $model->history[$index11]->order->customer->customerContacts[$index62]->customer->companies) {
    $jsonData["history"][$index11]["order"]["customer"]["customerContacts"][$index62]["customer"]["companies"] = [];
foreach (array_keys($model->history[$index11]->order->customer->customerContacts[$index62]->customer->companies) as $index97) {
    $jsonData["history"][$index11]["order"]["customer"]["customerContacts"][$index62]["customer"]["companies"][$index97] = [];
if (null !== $model->history[$index11]->order->customer->customerContacts[$index62]->customer->companies[$index97]->id) {
    $jsonData["history"][$index11]["order"]["customer"]["customerContacts"][$index62]["customer"]["companies"][$index97]["id"] = $model->history[$index11]->order->customer->customerContacts[$index62]->customer->companies[$index97]->id;
}
if (null !== $model->history[$index11]->order->customer->customerContacts[$index62]->customer->companies[$index97]->externalId) {
    $jsonData["history"][$index11]["order"]["customer"]["customerContacts"][$index62]["customer"]["companies"][$index97]["externalId"] = $model->history[$index11]->order->customer->customerContacts[$index62]->customer->companies[$index97]->externalId;
}
if (null !== $model->history[$index11]->order->customer->customerContacts[$index62]->customer->companies[$index97]->company) {
    $jsonData["history"][$index11]["order"]["customer"]["customerContacts"][$index62]["customer"]["companies"][$index97]["company"] = [];
if (null !== $model->history[$index11]->order->customer->customerContacts[$index62]->customer->companies[$index97]->company->id) {
    $jsonData["history"][$index11]["order"]["customer"]["customerContacts"][$index62]["customer"]["companies"][$index97]["company"]["id"] = $model->history[$index11]->order->customer->customerContacts[$index62]->customer->companies[$index97]->company->id;
}
if (null !== $model->history[$index11]->order->customer->customerContacts[$index62]->customer->companies[$index97]->company->externalId) {
    $jsonData["history"][$index11]["order"]["customer"]["customerContacts"][$index62]["customer"]["companies"][$index97]["company"]["externalId"] = $model->history[$index11]->order->customer->customerContacts[$index62]->customer->companies[$index97]->company->externalId;
}
if (null !== $model->history[$index11]->order->customer->customerContacts[$index62]->customer->companies[$index97]->company->name) {
    $jsonData["history"][$index11]["order"]["customer"]["customerContacts"][$index62]["customer"]["companies"][$index97]["company"]["name"] = $model->history[$index11]->order->customer->customerContacts[$index62]->customer->companies[$index97]->company->name;
}

if (0 === \count($jsonData["history"][$index11]["order"]["customer"]["customerContacts"][$index62]["customer"]["companies"][$index97]["company"])) {
    $jsonData["history"][$index11]["order"]["customer"]["customerContacts"][$index62]["customer"]["companies"][$index97]["company"] = $emptyObject;
}

}

if (0 === \count($jsonData["history"][$index11]["order"]["customer"]["customerContacts"][$index62]["customer"]["companies"][$index97])) {
    $jsonData["history"][$index11]["order"]["customer"]["customerContacts"][$index62]["customer"]["companies"][$index97] = $emptyObject;
}

}

}

if (0 === \count($jsonData["history"][$index11]["order"]["customer"]["customerContacts"][$index62]["customer"])) {
    $jsonData["history"][$index11]["order"]["customer"]["customerContacts"][$index62]["customer"] = $emptyObject;
}

}
if (null !== $model->history[$index11]->order->customer->customerContacts[$index62]->companies) {
    $jsonData["history"][$index11]["order"]["customer"]["customerContacts"][$index62]["companies"] = [];
foreach (array_keys($model->history[$index11]->order->customer->customerContacts[$index62]->companies) as $index85) {
    $jsonData["history"][$index11]["order"]["customer"]["customerContacts"][$index62]["companies"][$index85] = [];
if (null !== $model->history[$index11]->order->customer->customerContacts[$index62]->companies[$index85]->id) {
    $jsonData["history"][$index11]["order"]["customer"]["customerContacts"][$index62]["companies"][$index85]["id"] = $model->history[$index11]->order->customer->customerContacts[$index62]->companies[$index85]->id;
}
if (null !== $model->history[$index11]->order->customer->customerContacts[$index62]->companies[$index85]->externalId) {
    $jsonData["history"][$index11]["order"]["customer"]["customerContacts"][$index62]["companies"][$index85]["externalId"] = $model->history[$index11]->order->customer->customerContacts[$index62]->companies[$index85]->externalId;
}
if (null !== $model->history[$index11]->order->customer->customerContacts[$index62]->companies[$index85]->company) {
    $jsonData["history"][$index11]["order"]["customer"]["customerContacts"][$index62]["companies"][$index85]["company"] = [];
if (null !== $model->history[$index11]->order->customer->customerContacts[$index62]->companies[$index85]->company->id) {
    $jsonData["history"][$index11]["order"]["customer"]["customerContacts"][$index62]["companies"][$index85]["company"]["id"] = $model->history[$index11]->order->customer->customerContacts[$index62]->companies[$index85]->company->id;
}
if (null !== $model->history[$index11]->order->customer->customerContacts[$index62]->companies[$index85]->company->externalId) {
    $jsonData["history"][$index11]["order"]["customer"]["customerContacts"][$index62]["companies"][$index85]["company"]["externalId"] = $model->history[$index11]->order->customer->customerContacts[$index62]->companies[$index85]->company->externalId;
}
if (null !== $model->history[$index11]->order->customer->customerContacts[$index62]->companies[$index85]->company->name) {
    $jsonData["history"][$index11]["order"]["customer"]["customerContacts"][$index62]["companies"][$index85]["company"]["name"] = $model->history[$index11]->order->customer->customerContacts[$index62]->companies[$index85]->company->name;
}

if (0 === \count($jsonData["history"][$index11]["order"]["customer"]["customerContacts"][$index62]["companies"][$index85]["company"])) {
    $jsonData["history"][$index11]["order"]["customer"]["customerContacts"][$index62]["companies"][$index85]["company"] = $emptyObject;
}

}

if (0 === \count($jsonData["history"][$index11]["order"]["customer"]["customerContacts"][$index62]["companies"][$index85])) {
    $jsonData["history"][$index11]["order"]["customer"]["customerContacts"][$index62]["companies"][$index85] = $emptyObject;
}

}

}

if (0 === \count($jsonData["history"][$index11]["order"]["customer"]["customerContacts"][$index62])) {
    $jsonData["history"][$index11]["order"]["customer"]["customerContacts"][$index62] = $emptyObject;
}

}

}
if (null !== $model->history[$index11]->order->customer->companies) {
    $jsonData["history"][$index11]["order"]["customer"]["companies"] = [];
foreach (array_keys($model->history[$index11]->order->customer->companies) as $index55) {
    $jsonData["history"][$index11]["order"]["customer"]["companies"][$index55] = [];
if (null !== $model->history[$index11]->order->customer->companies[$index55]->id) {
    $jsonData["history"][$index11]["order"]["customer"]["companies"][$index55]["id"] = $model->history[$index11]->order->customer->companies[$index55]->id;
}
if (null !== $model->history[$index11]->order->customer->companies[$index55]->isMain) {
    $jsonData["history"][$index11]["order"]["customer"]["companies"][$index55]["isMain"] = $model->history[$index11]->order->customer->companies[$index55]->isMain;
}
if (null !== $model->history[$index11]->order->customer->companies[$index55]->externalId) {
    $jsonData["history"][$index11]["order"]["customer"]["companies"][$index55]["externalId"] = $model->history[$index11]->order->customer->companies[$index55]->externalId;
}
if (null !== $model->history[$index11]->order->customer->companies[$index55]->active) {
    $jsonData["history"][$index11]["order"]["customer"]["companies"][$index55]["active"] = $model->history[$index11]->order->customer->companies[$index55]->active;
}
if (null !== $model->history[$index11]->order->customer->companies[$index55]->name) {
    $jsonData["history"][$index11]["order"]["customer"]["companies"][$index55]["name"] = $model->history[$index11]->order->customer->companies[$index55]->name;
}
if (null !== $model->history[$index11]->order->customer->companies[$index55]->brand) {
    $jsonData["history"][$index11]["order"]["customer"]["companies"][$index55]["brand"] = $model->history[$index11]->order->customer->companies[$index55]->brand;
}
if (null !== $model->history[$index11]->order->customer->companies[$index55]->site) {
    $jsonData["history"][$index11]["order"]["customer"]["companies"][$index55]["site"] = $model->history[$index11]->order->customer->companies[$index55]->site;
}
if (null !== $model->history[$index11]->order->customer->companies[$index55]->createdAt) {
    $jsonData["history"][$index11]["order"]["customer"]["companies"][$index55]["createdAt"] = $model->history[$index11]->order->customer->companies[$index55]->createdAt->format('Y-m-d H:i:s');;
}
if (null !== $model->history[$index11]->order->customer->companies[$index55]->customer) {
    $jsonData["history"][$index11]["order"]["customer"]["companies"][$index55]["customer"] = [];
if (null !== $model->history[$index11]->order->customer->companies[$index55]->customer->site) {
    $jsonData["history"][$index11]["order"]["customer"]["companies"][$index55]["customer"]["site"] = $model->history[$index11]->order->customer->companies[$index55]->customer->site;
}
if (null !== $model->history[$index11]->order->customer->companies[$index55]->customer->id) {
    $jsonData["history"][$index11]["order"]["customer"]["companies"][$index55]["customer"]["id"] = $model->history[$index11]->order->customer->companies[$index55]->customer->id;
}
if (null !== $model->history[$index11]->order->customer->companies[$index55]->customer->externalId) {
    $jsonData["history"][$index11]["order"]["customer"]["companies"][$index55]["customer"]["externalId"] = $model->history[$index11]->order->customer->companies[$index55]->customer->externalId;
}
if (null !== $model->history[$index11]->order->customer->companies[$index55]->customer->type) {
    $jsonData["history"][$index11]["order"]["customer"]["companies"][$index55]["customer"]["type"] = $model->history[$index11]->order->customer->companies[$index55]->customer->type;
}

if (0 === \count($jsonData["history"][$index11]["order"]["customer"]["companies"][$index55]["customer"])) {
    $jsonData["history"][$index11]["order"]["customer"]["companies"][$index55]["customer"] = $emptyObject;
}

}
if (null !== $model->history[$index11]->order->customer->companies[$index55]->contragent) {
    $jsonData["history"][$index11]["order"]["customer"]["companies"][$index55]["contragent"] = [];
if (null !== $model->history[$index11]->order->customer->companies[$index55]->contragent->contragentType) {
    $jsonData["history"][$index11]["order"]["customer"]["companies"][$index55]["contragent"]["contragentType"] = $model->history[$index11]->order->customer->companies[$index55]->contragent->contragentType;
}
if (null !== $model->history[$index11]->order->customer->companies[$index55]->contragent->legalName) {
    $jsonData["history"][$index11]["order"]["customer"]["companies"][$index55]["contragent"]["legalName"] = $model->history[$index11]->order->customer->companies[$index55]->contragent->legalName;
}
if (null !== $model->history[$index11]->order->customer->companies[$index55]->contragent->legalAddress) {
    $jsonData["history"][$index11]["order"]["customer"]["companies"][$index55]["contragent"]["legalAddress"] = $model->history[$index11]->order->customer->companies[$index55]->contragent->legalAddress;
}
if (null !== $model->history[$index11]->order->customer->companies[$index55]->contragent->INN) {
    $jsonData["history"][$index11]["order"]["customer"]["companies"][$index55]["contragent"]["INN"] = $model->history[$index11]->order->customer->companies[$index55]->contragent->INN;
}
if (null !== $model->history[$index11]->order->customer->companies[$index55]->contragent->OKPO) {
    $jsonData["history"][$index11]["order"]["customer"]["companies"][$index55]["contragent"]["OKPO"] = $model->history[$index11]->order->customer->companies[$index55]->contragent->OKPO;
}
if (null !== $model->history[$index11]->order->customer->companies[$index55]->contragent->KPP) {
    $jsonData["history"][$index11]["order"]["customer"]["companies"][$index55]["contragent"]["KPP"] = $model->history[$index11]->order->customer->companies[$index55]->contragent->KPP;
}
if (null !== $model->history[$index11]->order->customer->companies[$index55]->contragent->OGRN) {
    $jsonData["history"][$index11]["order"]["customer"]["companies"][$index55]["contragent"]["OGRN"] = $model->history[$index11]->order->customer->companies[$index55]->contragent->OGRN;
}
if (null !== $model->history[$index11]->order->customer->companies[$index55]->contragent->OGRNIP) {
    $jsonData["history"][$index11]["order"]["customer"]["companies"][$index55]["contragent"]["OGRNIP"] = $model->history[$index11]->order->customer->companies[$index55]->contragent->OGRNIP;
}
if (null !== $model->history[$index11]->order->customer->companies[$index55]->contragent->certificateNumber) {
    $jsonData["history"][$index11]["order"]["customer"]["companies"][$index55]["contragent"]["certificateNumber"] = $model->history[$index11]->order->customer->companies[$index55]->contragent->certificateNumber;
}
if (null !== $model->history[$index11]->order->customer->companies[$index55]->contragent->certificateDate) {
    $jsonData["history"][$index11]["order"]["customer"]["companies"][$index55]["contragent"]["certificateDate"] = $model->history[$index11]->order->customer->companies[$index55]->contragent->certificateDate->format('Y-m-d H:i:s');;
}
if (null !== $model->history[$index11]->order->customer->companies[$index55]->contragent->BIK) {
    $jsonData["history"][$index11]["order"]["customer"]["companies"][$index55]["contragent"]["BIK"] = $model->history[$index11]->order->customer->companies[$index55]->contragent->BIK;
}
if (null !== $model->history[$index11]->order->customer->companies[$index55]->contragent->bank) {
    $jsonData["history"][$index11]["order"]["customer"]["companies"][$index55]["contragent"]["bank"] = $model->history[$index11]->order->customer->companies[$index55]->contragent->bank;
}
if (null !== $model->history[$index11]->order->customer->companies[$index55]->contragent->bankAddress) {
    $jsonData["history"][$index11]["order"]["customer"]["companies"][$index55]["contragent"]["bankAddress"] = $model->history[$index11]->order->customer->companies[$index55]->contragent->bankAddress;
}
if (null !== $model->history[$index11]->order->customer->companies[$index55]->contragent->corrAccount) {
    $jsonData["history"][$index11]["order"]["customer"]["companies"][$index55]["contragent"]["corrAccount"] = $model->history[$index11]->order->customer->companies[$index55]->contragent->corrAccount;
}
if (null !== $model->history[$index11]->order->customer->companies[$index55]->contragent->bankAccount) {
    $jsonData["history"][$index11]["order"]["customer"]["companies"][$index55]["contragent"]["bankAccount"] = $model->history[$index11]->order->customer->companies[$index55]->contragent->bankAccount;
}

if (0 === \count($jsonData["history"][$index11]["order"]["customer"]["companies"][$index55]["contragent"])) {
    $jsonData["history"][$index11]["order"]["customer"]["companies"][$index55]["contragent"] = $emptyObject;
}

}
if (null !== $model->history[$index11]->order->customer->companies[$index55]->address) {
    $jsonData["history"][$index11]["order"]["customer"]["companies"][$index55]["address"] = [];
if (null !== $model->history[$index11]->order->customer->companies[$index55]->address->id) {
    $jsonData["history"][$index11]["order"]["customer"]["companies"][$index55]["address"]["id"] = $model->history[$index11]->order->customer->companies[$index55]->address->id;
}
if (null !== $model->history[$index11]->order->customer->companies[$index55]->address->name) {
    $jsonData["history"][$index11]["order"]["customer"]["companies"][$index55]["address"]["name"] = $model->history[$index11]->order->customer->companies[$index55]->address->name;
}
if (null !== $model->history[$index11]->order->customer->companies[$index55]->address->isMain) {
    $jsonData["history"][$index11]["order"]["customer"]["companies"][$index55]["address"]["isMain"] = $model->history[$index11]->order->customer->companies[$index55]->address->isMain;
}
if (null !== $model->history[$index11]->order->customer->companies[$index55]->address->index) {
    $jsonData["history"][$index11]["order"]["customer"]["companies"][$index55]["address"]["index"] = $model->history[$index11]->order->customer->companies[$index55]->address->index;
}
if (null !== $model->history[$index11]->order->customer->companies[$index55]->address->countryIso) {
    $jsonData["history"][$index11]["order"]["customer"]["companies"][$index55]["address"]["countryIso"] = $model->history[$index11]->order->customer->companies[$index55]->address->countryIso;
}
if (null !== $model->history[$index11]->order->customer->companies[$index55]->address->region) {
    $jsonData["history"][$index11]["order"]["customer"]["companies"][$index55]["address"]["region"] = $model->history[$index11]->order->customer->companies[$index55]->address->region;
}
if (null !== $model->history[$index11]->order->customer->companies[$index55]->address->regionId) {
    $jsonData["history"][$index11]["order"]["customer"]["companies"][$index55]["address"]["regionId"] = $model->history[$index11]->order->customer->companies[$index55]->address->regionId;
}
if (null !== $model->history[$index11]->order->customer->companies[$index55]->address->city) {
    $jsonData["history"][$index11]["order"]["customer"]["companies"][$index55]["address"]["city"] = $model->history[$index11]->order->customer->companies[$index55]->address->city;
}
if (null !== $model->history[$index11]->order->customer->companies[$index55]->address->cityId) {
    $jsonData["history"][$index11]["order"]["customer"]["companies"][$index55]["address"]["cityId"] = $model->history[$index11]->order->customer->companies[$index55]->address->cityId;
}
if (null !== $model->history[$index11]->order->customer->companies[$index55]->address->cityType) {
    $jsonData["history"][$index11]["order"]["customer"]["companies"][$index55]["address"]["cityType"] = $model->history[$index11]->order->customer->companies[$index55]->address->cityType;
}
if (null !== $model->history[$index11]->order->customer->companies[$index55]->address->street) {
    $jsonData["history"][$index11]["order"]["customer"]["companies"][$index55]["address"]["street"] = $model->history[$index11]->order->customer->companies[$index55]->address->street;
}
if (null !== $model->history[$index11]->order->customer->companies[$index55]->address->streetId) {
    $jsonData["history"][$index11]["order"]["customer"]["companies"][$index55]["address"]["streetId"] = $model->history[$index11]->order->customer->companies[$index55]->address->streetId;
}
if (null !== $model->history[$index11]->order->customer->companies[$index55]->address->streetType) {
    $jsonData["history"][$index11]["order"]["customer"]["companies"][$index55]["address"]["streetType"] = $model->history[$index11]->order->customer->companies[$index55]->address->streetType;
}
if (null !== $model->history[$index11]->order->customer->companies[$index55]->address->building) {
    $jsonData["history"][$index11]["order"]["customer"]["companies"][$index55]["address"]["building"] = $model->history[$index11]->order->customer->companies[$index55]->address->building;
}
if (null !== $model->history[$index11]->order->customer->companies[$index55]->address->flat) {
    $jsonData["history"][$index11]["order"]["customer"]["companies"][$index55]["address"]["flat"] = $model->history[$index11]->order->customer->companies[$index55]->address->flat;
}
if (null !== $model->history[$index11]->order->customer->companies[$index55]->address->floor) {
    $jsonData["history"][$index11]["order"]["customer"]["companies"][$index55]["address"]["floor"] = $model->history[$index11]->order->customer->companies[$index55]->address->floor;
}
if (null !== $model->history[$index11]->order->customer->companies[$index55]->address->block) {
    $jsonData["history"][$index11]["order"]["customer"]["companies"][$index55]["address"]["block"] = $model->history[$index11]->order->customer->companies[$index55]->address->block;
}
if (null !== $model->history[$index11]->order->customer->companies[$index55]->address->house) {
    $jsonData["history"][$index11]["order"]["customer"]["companies"][$index55]["address"]["house"] = $model->history[$index11]->order->customer->companies[$index55]->address->house;
}
if (null !== $model->history[$index11]->order->customer->companies[$index55]->address->housing) {
    $jsonData["history"][$index11]["order"]["customer"]["companies"][$index55]["address"]["housing"] = $model->history[$index11]->order->customer->companies[$index55]->address->housing;
}
if (null !== $model->history[$index11]->order->customer->companies[$index55]->address->metro) {
    $jsonData["history"][$index11]["order"]["customer"]["companies"][$index55]["address"]["metro"] = $model->history[$index11]->order->customer->companies[$index55]->address->metro;
}
if (null !== $model->history[$index11]->order->customer->companies[$index55]->address->notes) {
    $jsonData["history"][$index11]["order"]["customer"]["companies"][$index55]["address"]["notes"] = $model->history[$index11]->order->customer->companies[$index55]->address->notes;
}
if (null !== $model->history[$index11]->order->customer->companies[$index55]->address->text) {
    $jsonData["history"][$index11]["order"]["customer"]["companies"][$index55]["address"]["text"] = $model->history[$index11]->order->customer->companies[$index55]->address->text;
}
if (null !== $model->history[$index11]->order->customer->companies[$index55]->address->externalId) {
    $jsonData["history"][$index11]["order"]["customer"]["companies"][$index55]["address"]["externalId"] = $model->history[$index11]->order->customer->companies[$index55]->address->externalId;
}

if (0 === \count($jsonData["history"][$index11]["order"]["customer"]["companies"][$index55]["address"])) {
    $jsonData["history"][$index11]["order"]["customer"]["companies"][$index55]["address"] = $emptyObject;
}

}
if (null !== $model->history[$index11]->order->customer->companies[$index55]->customFields) {
    $jsonData["history"][$index11]["order"]["customer"]["companies"][$index55]["customFields"] = [];
foreach (array_keys($model->history[$index11]->order->customer->companies[$index55]->customFields) as $index81) {
    $jsonData["history"][$index11]["order"]["customer"]["companies"][$index55]["customFields"] = $model->history[$index11]->order->customer->companies[$index55]->customFields;
}

}
if (null !== $model->history[$index11]->order->customer->companies[$index55]->marginSumm) {
    $jsonData["history"][$index11]["order"]["customer"]["companies"][$index55]["marginSumm"] = $model->history[$index11]->order->customer->companies[$index55]->marginSumm;
}
if (null !== $model->history[$index11]->order->customer->companies[$index55]->totalSumm) {
    $jsonData["history"][$index11]["order"]["customer"]["companies"][$index55]["totalSumm"] = $model->history[$index11]->order->customer->companies[$index55]->totalSumm;
}
if (null !== $model->history[$index11]->order->customer->companies[$index55]->averageSumm) {
    $jsonData["history"][$index11]["order"]["customer"]["companies"][$index55]["averageSumm"] = $model->history[$index11]->order->customer->companies[$index55]->averageSumm;
}
if (null !== $model->history[$index11]->order->customer->companies[$index55]->ordersCount) {
    $jsonData["history"][$index11]["order"]["customer"]["companies"][$index55]["ordersCount"] = $model->history[$index11]->order->customer->companies[$index55]->ordersCount;
}
if (null !== $model->history[$index11]->order->customer->companies[$index55]->costSumm) {
    $jsonData["history"][$index11]["order"]["customer"]["companies"][$index55]["costSumm"] = $model->history[$index11]->order->customer->companies[$index55]->costSumm;
}

if (0 === \count($jsonData["history"][$index11]["order"]["customer"]["companies"][$index55])) {
    $jsonData["history"][$index11]["order"]["customer"]["companies"][$index55] = $emptyObject;
}

}

}
if (null !== $model->history[$index11]->order->customer->addresses) {
    $jsonData["history"][$index11]["order"]["customer"]["addresses"] = [];
foreach (array_keys($model->history[$index11]->order->customer->addresses) as $index55) {
    $jsonData["history"][$index11]["order"]["customer"]["addresses"][$index55] = [];
if (null !== $model->history[$index11]->order->customer->addresses[$index55]->id) {
    $jsonData["history"][$index11]["order"]["customer"]["addresses"][$index55]["id"] = $model->history[$index11]->order->customer->addresses[$index55]->id;
}
if (null !== $model->history[$index11]->order->customer->addresses[$index55]->name) {
    $jsonData["history"][$index11]["order"]["customer"]["addresses"][$index55]["name"] = $model->history[$index11]->order->customer->addresses[$index55]->name;
}
if (null !== $model->history[$index11]->order->customer->addresses[$index55]->isMain) {
    $jsonData["history"][$index11]["order"]["customer"]["addresses"][$index55]["isMain"] = $model->history[$index11]->order->customer->addresses[$index55]->isMain;
}
if (null !== $model->history[$index11]->order->customer->addresses[$index55]->index) {
    $jsonData["history"][$index11]["order"]["customer"]["addresses"][$index55]["index"] = $model->history[$index11]->order->customer->addresses[$index55]->index;
}
if (null !== $model->history[$index11]->order->customer->addresses[$index55]->countryIso) {
    $jsonData["history"][$index11]["order"]["customer"]["addresses"][$index55]["countryIso"] = $model->history[$index11]->order->customer->addresses[$index55]->countryIso;
}
if (null !== $model->history[$index11]->order->customer->addresses[$index55]->region) {
    $jsonData["history"][$index11]["order"]["customer"]["addresses"][$index55]["region"] = $model->history[$index11]->order->customer->addresses[$index55]->region;
}
if (null !== $model->history[$index11]->order->customer->addresses[$index55]->regionId) {
    $jsonData["history"][$index11]["order"]["customer"]["addresses"][$index55]["regionId"] = $model->history[$index11]->order->customer->addresses[$index55]->regionId;
}
if (null !== $model->history[$index11]->order->customer->addresses[$index55]->city) {
    $jsonData["history"][$index11]["order"]["customer"]["addresses"][$index55]["city"] = $model->history[$index11]->order->customer->addresses[$index55]->city;
}
if (null !== $model->history[$index11]->order->customer->addresses[$index55]->cityId) {
    $jsonData["history"][$index11]["order"]["customer"]["addresses"][$index55]["cityId"] = $model->history[$index11]->order->customer->addresses[$index55]->cityId;
}
if (null !== $model->history[$index11]->order->customer->addresses[$index55]->cityType) {
    $jsonData["history"][$index11]["order"]["customer"]["addresses"][$index55]["cityType"] = $model->history[$index11]->order->customer->addresses[$index55]->cityType;
}
if (null !== $model->history[$index11]->order->customer->addresses[$index55]->street) {
    $jsonData["history"][$index11]["order"]["customer"]["addresses"][$index55]["street"] = $model->history[$index11]->order->customer->addresses[$index55]->street;
}
if (null !== $model->history[$index11]->order->customer->addresses[$index55]->streetId) {
    $jsonData["history"][$index11]["order"]["customer"]["addresses"][$index55]["streetId"] = $model->history[$index11]->order->customer->addresses[$index55]->streetId;
}
if (null !== $model->history[$index11]->order->customer->addresses[$index55]->streetType) {
    $jsonData["history"][$index11]["order"]["customer"]["addresses"][$index55]["streetType"] = $model->history[$index11]->order->customer->addresses[$index55]->streetType;
}
if (null !== $model->history[$index11]->order->customer->addresses[$index55]->building) {
    $jsonData["history"][$index11]["order"]["customer"]["addresses"][$index55]["building"] = $model->history[$index11]->order->customer->addresses[$index55]->building;
}
if (null !== $model->history[$index11]->order->customer->addresses[$index55]->flat) {
    $jsonData["history"][$index11]["order"]["customer"]["addresses"][$index55]["flat"] = $model->history[$index11]->order->customer->addresses[$index55]->flat;
}
if (null !== $model->history[$index11]->order->customer->addresses[$index55]->floor) {
    $jsonData["history"][$index11]["order"]["customer"]["addresses"][$index55]["floor"] = $model->history[$index11]->order->customer->addresses[$index55]->floor;
}
if (null !== $model->history[$index11]->order->customer->addresses[$index55]->block) {
    $jsonData["history"][$index11]["order"]["customer"]["addresses"][$index55]["block"] = $model->history[$index11]->order->customer->addresses[$index55]->block;
}
if (null !== $model->history[$index11]->order->customer->addresses[$index55]->house) {
    $jsonData["history"][$index11]["order"]["customer"]["addresses"][$index55]["house"] = $model->history[$index11]->order->customer->addresses[$index55]->house;
}
if (null !== $model->history[$index11]->order->customer->addresses[$index55]->housing) {
    $jsonData["history"][$index11]["order"]["customer"]["addresses"][$index55]["housing"] = $model->history[$index11]->order->customer->addresses[$index55]->housing;
}
if (null !== $model->history[$index11]->order->customer->addresses[$index55]->metro) {
    $jsonData["history"][$index11]["order"]["customer"]["addresses"][$index55]["metro"] = $model->history[$index11]->order->customer->addresses[$index55]->metro;
}
if (null !== $model->history[$index11]->order->customer->addresses[$index55]->notes) {
    $jsonData["history"][$index11]["order"]["customer"]["addresses"][$index55]["notes"] = $model->history[$index11]->order->customer->addresses[$index55]->notes;
}
if (null !== $model->history[$index11]->order->customer->addresses[$index55]->text) {
    $jsonData["history"][$index11]["order"]["customer"]["addresses"][$index55]["text"] = $model->history[$index11]->order->customer->addresses[$index55]->text;
}
if (null !== $model->history[$index11]->order->customer->addresses[$index55]->externalId) {
    $jsonData["history"][$index11]["order"]["customer"]["addresses"][$index55]["externalId"] = $model->history[$index11]->order->customer->addresses[$index55]->externalId;
}

if (0 === \count($jsonData["history"][$index11]["order"]["customer"]["addresses"][$index55])) {
    $jsonData["history"][$index11]["order"]["customer"]["addresses"][$index55] = $emptyObject;
}

}

}
if (null !== $model->history[$index11]->order->customer->vip) {
    $jsonData["history"][$index11]["order"]["customer"]["vip"] = $model->history[$index11]->order->customer->vip;
}
if (null !== $model->history[$index11]->order->customer->bad) {
    $jsonData["history"][$index11]["order"]["customer"]["bad"] = $model->history[$index11]->order->customer->bad;
}
if (null !== $model->history[$index11]->order->customer->site) {
    $jsonData["history"][$index11]["order"]["customer"]["site"] = $model->history[$index11]->order->customer->site;
}
if (null !== $model->history[$index11]->order->customer->tags) {
    $jsonData["history"][$index11]["order"]["customer"]["tags"] = [];
foreach (array_keys($model->history[$index11]->order->customer->tags) as $index50) {
    $jsonData["history"][$index11]["order"]["customer"]["tags"][$index50] = [];
if (null !== $model->history[$index11]->order->customer->tags[$index50]->name) {
    $jsonData["history"][$index11]["order"]["customer"]["tags"][$index50]["name"] = $model->history[$index11]->order->customer->tags[$index50]->name;
}
if (null !== $model->history[$index11]->order->customer->tags[$index50]->color) {
    $jsonData["history"][$index11]["order"]["customer"]["tags"][$index50]["color"] = $model->history[$index11]->order->customer->tags[$index50]->color;
}
if (null !== $model->history[$index11]->order->customer->tags[$index50]->attached) {
    $jsonData["history"][$index11]["order"]["customer"]["tags"][$index50]["attached"] = $model->history[$index11]->order->customer->tags[$index50]->attached;
}

if (0 === \count($jsonData["history"][$index11]["order"]["customer"]["tags"][$index50])) {
    $jsonData["history"][$index11]["order"]["customer"]["tags"][$index50] = $emptyObject;
}

}

}
if (null !== $model->history[$index11]->order->customer->avgMarginSumm) {
    $jsonData["history"][$index11]["order"]["customer"]["avgMarginSumm"] = $model->history[$index11]->order->customer->avgMarginSumm;
}
if (null !== $model->history[$index11]->order->customer->marginSumm) {
    $jsonData["history"][$index11]["order"]["customer"]["marginSumm"] = $model->history[$index11]->order->customer->marginSumm;
}
if (null !== $model->history[$index11]->order->customer->totalSumm) {
    $jsonData["history"][$index11]["order"]["customer"]["totalSumm"] = $model->history[$index11]->order->customer->totalSumm;
}
if (null !== $model->history[$index11]->order->customer->averageSumm) {
    $jsonData["history"][$index11]["order"]["customer"]["averageSumm"] = $model->history[$index11]->order->customer->averageSumm;
}
if (null !== $model->history[$index11]->order->customer->ordersCount) {
    $jsonData["history"][$index11]["order"]["customer"]["ordersCount"] = $model->history[$index11]->order->customer->ordersCount;
}
if (null !== $model->history[$index11]->order->customer->costSumm) {
    $jsonData["history"][$index11]["order"]["customer"]["costSumm"] = $model->history[$index11]->order->customer->costSumm;
}
if (null !== $model->history[$index11]->order->customer->customFields) {
    $jsonData["history"][$index11]["order"]["customer"]["customFields"] = [];
foreach (array_keys($model->history[$index11]->order->customer->customFields) as $index58) {
    $jsonData["history"][$index11]["order"]["customer"]["customFields"] = $model->history[$index11]->order->customer->customFields;
}

}
if (null !== $model->history[$index11]->order->customer->personalDiscount) {
    $jsonData["history"][$index11]["order"]["customer"]["personalDiscount"] = $model->history[$index11]->order->customer->personalDiscount;
}
if (null !== $model->history[$index11]->order->customer->cumulativeDiscount) {
    $jsonData["history"][$index11]["order"]["customer"]["cumulativeDiscount"] = $model->history[$index11]->order->customer->cumulativeDiscount;
}
if (null !== $model->history[$index11]->order->customer->discountCardNumber) {
    $jsonData["history"][$index11]["order"]["customer"]["discountCardNumber"] = $model->history[$index11]->order->customer->discountCardNumber;
}
if (null !== $model->history[$index11]->order->customer->firstClientId) {
    $jsonData["history"][$index11]["order"]["customer"]["firstClientId"] = $model->history[$index11]->order->customer->firstClientId;
}
if (null !== $model->history[$index11]->order->customer->lastClientId) {
    $jsonData["history"][$index11]["order"]["customer"]["lastClientId"] = $model->history[$index11]->order->customer->lastClientId;
}
if (null !== $model->history[$index11]->order->customer->mainCustomerContact) {
    $jsonData["history"][$index11]["order"]["customer"]["mainCustomerContact"] = [];
if (null !== $model->history[$index11]->order->customer->mainCustomerContact->id) {
    $jsonData["history"][$index11]["order"]["customer"]["mainCustomerContact"]["id"] = $model->history[$index11]->order->customer->mainCustomerContact->id;
}
if (null !== $model->history[$index11]->order->customer->mainCustomerContact->isMain) {
    $jsonData["history"][$index11]["order"]["customer"]["mainCustomerContact"]["isMain"] = $model->history[$index11]->order->customer->mainCustomerContact->isMain;
}
if (null !== $model->history[$index11]->order->customer->mainCustomerContact->customer) {
    $jsonData["history"][$index11]["order"]["customer"]["mainCustomerContact"]["customer"] = [];
if (null !== $model->history[$index11]->order->customer->mainCustomerContact->customer->id) {
    $jsonData["history"][$index11]["order"]["customer"]["mainCustomerContact"]["customer"]["id"] = $model->history[$index11]->order->customer->mainCustomerContact->customer->id;
}
if (null !== $model->history[$index11]->order->customer->mainCustomerContact->customer->externalId) {
    $jsonData["history"][$index11]["order"]["customer"]["mainCustomerContact"]["customer"]["externalId"] = $model->history[$index11]->order->customer->mainCustomerContact->customer->externalId;
}
if (null !== $model->history[$index11]->order->customer->mainCustomerContact->customer->browserId) {
    $jsonData["history"][$index11]["order"]["customer"]["mainCustomerContact"]["customer"]["browserId"] = $model->history[$index11]->order->customer->mainCustomerContact->customer->browserId;
}
if (null !== $model->history[$index11]->order->customer->mainCustomerContact->customer->site) {
    $jsonData["history"][$index11]["order"]["customer"]["mainCustomerContact"]["customer"]["site"] = $model->history[$index11]->order->customer->mainCustomerContact->customer->site;
}
if (null !== $model->history[$index11]->order->customer->mainCustomerContact->customer->companies) {
    $jsonData["history"][$index11]["order"]["customer"]["mainCustomerContact"]["customer"]["companies"] = [];
foreach (array_keys($model->history[$index11]->order->customer->mainCustomerContact->customer->companies) as $index90) {
    $jsonData["history"][$index11]["order"]["customer"]["mainCustomerContact"]["customer"]["companies"][$index90] = [];
if (null !== $model->history[$index11]->order->customer->mainCustomerContact->customer->companies[$index90]->id) {
    $jsonData["history"][$index11]["order"]["customer"]["mainCustomerContact"]["customer"]["companies"][$index90]["id"] = $model->history[$index11]->order->customer->mainCustomerContact->customer->companies[$index90]->id;
}
if (null !== $model->history[$index11]->order->customer->mainCustomerContact->customer->companies[$index90]->externalId) {
    $jsonData["history"][$index11]["order"]["customer"]["mainCustomerContact"]["customer"]["companies"][$index90]["externalId"] = $model->history[$index11]->order->customer->mainCustomerContact->customer->companies[$index90]->externalId;
}
if (null !== $model->history[$index11]->order->customer->mainCustomerContact->customer->companies[$index90]->company) {
    $jsonData["history"][$index11]["order"]["customer"]["mainCustomerContact"]["customer"]["companies"][$index90]["company"] = [];
if (null !== $model->history[$index11]->order->customer->mainCustomerContact->customer->companies[$index90]->company->id) {
    $jsonData["history"][$index11]["order"]["customer"]["mainCustomerContact"]["customer"]["companies"][$index90]["company"]["id"] = $model->history[$index11]->order->customer->mainCustomerContact->customer->companies[$index90]->company->id;
}
if (null !== $model->history[$index11]->order->customer->mainCustomerContact->customer->companies[$index90]->company->externalId) {
    $jsonData["history"][$index11]["order"]["customer"]["mainCustomerContact"]["customer"]["companies"][$index90]["company"]["externalId"] = $model->history[$index11]->order->customer->mainCustomerContact->customer->companies[$index90]->company->externalId;
}
if (null !== $model->history[$index11]->order->customer->mainCustomerContact->customer->companies[$index90]->company->name) {
    $jsonData["history"][$index11]["order"]["customer"]["mainCustomerContact"]["customer"]["companies"][$index90]["company"]["name"] = $model->history[$index11]->order->customer->mainCustomerContact->customer->companies[$index90]->company->name;
}

if (0 === \count($jsonData["history"][$index11]["order"]["customer"]["mainCustomerContact"]["customer"]["companies"][$index90]["company"])) {
    $jsonData["history"][$index11]["order"]["customer"]["mainCustomerContact"]["customer"]["companies"][$index90]["company"] = $emptyObject;
}

}

if (0 === \count($jsonData["history"][$index11]["order"]["customer"]["mainCustomerContact"]["customer"]["companies"][$index90])) {
    $jsonData["history"][$index11]["order"]["customer"]["mainCustomerContact"]["customer"]["companies"][$index90] = $emptyObject;
}

}

}

if (0 === \count($jsonData["history"][$index11]["order"]["customer"]["mainCustomerContact"]["customer"])) {
    $jsonData["history"][$index11]["order"]["customer"]["mainCustomerContact"]["customer"] = $emptyObject;
}

}
if (null !== $model->history[$index11]->order->customer->mainCustomerContact->companies) {
    $jsonData["history"][$index11]["order"]["customer"]["mainCustomerContact"]["companies"] = [];
foreach (array_keys($model->history[$index11]->order->customer->mainCustomerContact->companies) as $index78) {
    $jsonData["history"][$index11]["order"]["customer"]["mainCustomerContact"]["companies"][$index78] = [];
if (null !== $model->history[$index11]->order->customer->mainCustomerContact->companies[$index78]->id) {
    $jsonData["history"][$index11]["order"]["customer"]["mainCustomerContact"]["companies"][$index78]["id"] = $model->history[$index11]->order->customer->mainCustomerContact->companies[$index78]->id;
}
if (null !== $model->history[$index11]->order->customer->mainCustomerContact->companies[$index78]->externalId) {
    $jsonData["history"][$index11]["order"]["customer"]["mainCustomerContact"]["companies"][$index78]["externalId"] = $model->history[$index11]->order->customer->mainCustomerContact->companies[$index78]->externalId;
}
if (null !== $model->history[$index11]->order->customer->mainCustomerContact->companies[$index78]->company) {
    $jsonData["history"][$index11]["order"]["customer"]["mainCustomerContact"]["companies"][$index78]["company"] = [];
if (null !== $model->history[$index11]->order->customer->mainCustomerContact->companies[$index78]->company->id) {
    $jsonData["history"][$index11]["order"]["customer"]["mainCustomerContact"]["companies"][$index78]["company"]["id"] = $model->history[$index11]->order->customer->mainCustomerContact->companies[$index78]->company->id;
}
if (null !== $model->history[$index11]->order->customer->mainCustomerContact->companies[$index78]->company->externalId) {
    $jsonData["history"][$index11]["order"]["customer"]["mainCustomerContact"]["companies"][$index78]["company"]["externalId"] = $model->history[$index11]->order->customer->mainCustomerContact->companies[$index78]->company->externalId;
}
if (null !== $model->history[$index11]->order->customer->mainCustomerContact->companies[$index78]->company->name) {
    $jsonData["history"][$index11]["order"]["customer"]["mainCustomerContact"]["companies"][$index78]["company"]["name"] = $model->history[$index11]->order->customer->mainCustomerContact->companies[$index78]->company->name;
}

if (0 === \count($jsonData["history"][$index11]["order"]["customer"]["mainCustomerContact"]["companies"][$index78]["company"])) {
    $jsonData["history"][$index11]["order"]["customer"]["mainCustomerContact"]["companies"][$index78]["company"] = $emptyObject;
}

}

if (0 === \count($jsonData["history"][$index11]["order"]["customer"]["mainCustomerContact"]["companies"][$index78])) {
    $jsonData["history"][$index11]["order"]["customer"]["mainCustomerContact"]["companies"][$index78] = $emptyObject;
}

}

}

if (0 === \count($jsonData["history"][$index11]["order"]["customer"]["mainCustomerContact"])) {
    $jsonData["history"][$index11]["order"]["customer"]["mainCustomerContact"] = $emptyObject;
}

}
if (null !== $model->history[$index11]->order->customer->mainCompany) {
    $jsonData["history"][$index11]["order"]["customer"]["mainCompany"] = [];
if (null !== $model->history[$index11]->order->customer->mainCompany->id) {
    $jsonData["history"][$index11]["order"]["customer"]["mainCompany"]["id"] = $model->history[$index11]->order->customer->mainCompany->id;
}
if (null !== $model->history[$index11]->order->customer->mainCompany->externalId) {
    $jsonData["history"][$index11]["order"]["customer"]["mainCompany"]["externalId"] = $model->history[$index11]->order->customer->mainCompany->externalId;
}
if (null !== $model->history[$index11]->order->customer->mainCompany->name) {
    $jsonData["history"][$index11]["order"]["customer"]["mainCompany"]["name"] = $model->history[$index11]->order->customer->mainCompany->name;
}

if (0 === \count($jsonData["history"][$index11]["order"]["customer"]["mainCompany"])) {
    $jsonData["history"][$index11]["order"]["customer"]["mainCompany"] = $emptyObject;
}

}

if (0 === \count($jsonData["history"][$index11]["order"]["customer"])) {
    $jsonData["history"][$index11]["order"]["customer"] = $emptyObject;
}

}

}
if (null !== $model->history[$index11]->order->contact) {
    $jsonData["history"][$index11]["order"]["contact"] = [];
if (null !== $model->history[$index11]->order->contact->type) {
    $jsonData["history"][$index11]["order"]["contact"]["type"] = $model->history[$index11]->order->contact->type;
}
if (null !== $model->history[$index11]->order->contact->id) {
    $jsonData["history"][$index11]["order"]["contact"]["id"] = $model->history[$index11]->order->contact->id;
}
if (null !== $model->history[$index11]->order->contact->externalId) {
    $jsonData["history"][$index11]["order"]["contact"]["externalId"] = $model->history[$index11]->order->contact->externalId;
}
if (null !== $model->history[$index11]->order->contact->isContact) {
    $jsonData["history"][$index11]["order"]["contact"]["isContact"] = $model->history[$index11]->order->contact->isContact;
}
if (null !== $model->history[$index11]->order->contact->createdAt) {
    $jsonData["history"][$index11]["order"]["contact"]["createdAt"] = $model->history[$index11]->order->contact->createdAt->format('Y-m-d H:i:s');;
}
if (null !== $model->history[$index11]->order->contact->managerId) {
    $jsonData["history"][$index11]["order"]["contact"]["managerId"] = $model->history[$index11]->order->contact->managerId;
}
if (null !== $model->history[$index11]->order->contact->vip) {
    $jsonData["history"][$index11]["order"]["contact"]["vip"] = $model->history[$index11]->order->contact->vip;
}
if (null !== $model->history[$index11]->order->contact->bad) {
    $jsonData["history"][$index11]["order"]["contact"]["bad"] = $model->history[$index11]->order->contact->bad;
}
if (null !== $model->history[$index11]->order->contact->browserId) {
    $jsonData["history"][$index11]["order"]["contact"]["browserId"] = $model->history[$index11]->order->contact->browserId;
}
if (null !== $model->history[$index11]->order->contact->site) {
    $jsonData["history"][$index11]["order"]["contact"]["site"] = $model->history[$index11]->order->contact->site;
}
if (null !== $model->history[$index11]->order->contact->contragent) {
    $jsonData["history"][$index11]["order"]["contact"]["contragent"] = [];
if (null !== $model->history[$index11]->order->contact->contragent->contragentType) {
    $jsonData["history"][$index11]["order"]["contact"]["contragent"]["contragentType"] = $model->history[$index11]->order->contact->contragent->contragentType;
}
if (null !== $model->history[$index11]->order->contact->contragent->legalName) {
    $jsonData["history"][$index11]["order"]["contact"]["contragent"]["legalName"] = $model->history[$index11]->order->contact->contragent->legalName;
}
if (null !== $model->history[$index11]->order->contact->contragent->legalAddress) {
    $jsonData["history"][$index11]["order"]["contact"]["contragent"]["legalAddress"] = $model->history[$index11]->order->contact->contragent->legalAddress;
}
if (null !== $model->history[$index11]->order->contact->contragent->INN) {
    $jsonData["history"][$index11]["order"]["contact"]["contragent"]["INN"] = $model->history[$index11]->order->contact->contragent->INN;
}
if (null !== $model->history[$index11]->order->contact->contragent->OKPO) {
    $jsonData["history"][$index11]["order"]["contact"]["contragent"]["OKPO"] = $model->history[$index11]->order->contact->contragent->OKPO;
}
if (null !== $model->history[$index11]->order->contact->contragent->KPP) {
    $jsonData["history"][$index11]["order"]["contact"]["contragent"]["KPP"] = $model->history[$index11]->order->contact->contragent->KPP;
}
if (null !== $model->history[$index11]->order->contact->contragent->OGRN) {
    $jsonData["history"][$index11]["order"]["contact"]["contragent"]["OGRN"] = $model->history[$index11]->order->contact->contragent->OGRN;
}
if (null !== $model->history[$index11]->order->contact->contragent->OGRNIP) {
    $jsonData["history"][$index11]["order"]["contact"]["contragent"]["OGRNIP"] = $model->history[$index11]->order->contact->contragent->OGRNIP;
}
if (null !== $model->history[$index11]->order->contact->contragent->certificateNumber) {
    $jsonData["history"][$index11]["order"]["contact"]["contragent"]["certificateNumber"] = $model->history[$index11]->order->contact->contragent->certificateNumber;
}
if (null !== $model->history[$index11]->order->contact->contragent->certificateDate) {
    $jsonData["history"][$index11]["order"]["contact"]["contragent"]["certificateDate"] = $model->history[$index11]->order->contact->contragent->certificateDate->format('Y-m-d H:i:s');;
}
if (null !== $model->history[$index11]->order->contact->contragent->BIK) {
    $jsonData["history"][$index11]["order"]["contact"]["contragent"]["BIK"] = $model->history[$index11]->order->contact->contragent->BIK;
}
if (null !== $model->history[$index11]->order->contact->contragent->bank) {
    $jsonData["history"][$index11]["order"]["contact"]["contragent"]["bank"] = $model->history[$index11]->order->contact->contragent->bank;
}
if (null !== $model->history[$index11]->order->contact->contragent->bankAddress) {
    $jsonData["history"][$index11]["order"]["contact"]["contragent"]["bankAddress"] = $model->history[$index11]->order->contact->contragent->bankAddress;
}
if (null !== $model->history[$index11]->order->contact->contragent->corrAccount) {
    $jsonData["history"][$index11]["order"]["contact"]["contragent"]["corrAccount"] = $model->history[$index11]->order->contact->contragent->corrAccount;
}
if (null !== $model->history[$index11]->order->contact->contragent->bankAccount) {
    $jsonData["history"][$index11]["order"]["contact"]["contragent"]["bankAccount"] = $model->history[$index11]->order->contact->contragent->bankAccount;
}

if (0 === \count($jsonData["history"][$index11]["order"]["contact"]["contragent"])) {
    $jsonData["history"][$index11]["order"]["contact"]["contragent"] = $emptyObject;
}

}
if (null !== $model->history[$index11]->order->contact->tags) {
    $jsonData["history"][$index11]["order"]["contact"]["tags"] = [];
foreach (array_keys($model->history[$index11]->order->contact->tags) as $index49) {
    $jsonData["history"][$index11]["order"]["contact"]["tags"][$index49] = [];
if (null !== $model->history[$index11]->order->contact->tags[$index49]->name) {
    $jsonData["history"][$index11]["order"]["contact"]["tags"][$index49]["name"] = $model->history[$index11]->order->contact->tags[$index49]->name;
}
if (null !== $model->history[$index11]->order->contact->tags[$index49]->color) {
    $jsonData["history"][$index11]["order"]["contact"]["tags"][$index49]["color"] = $model->history[$index11]->order->contact->tags[$index49]->color;
}
if (null !== $model->history[$index11]->order->contact->tags[$index49]->attached) {
    $jsonData["history"][$index11]["order"]["contact"]["tags"][$index49]["attached"] = $model->history[$index11]->order->contact->tags[$index49]->attached;
}

if (0 === \count($jsonData["history"][$index11]["order"]["contact"]["tags"][$index49])) {
    $jsonData["history"][$index11]["order"]["contact"]["tags"][$index49] = $emptyObject;
}

}

}
if (null !== $model->history[$index11]->order->contact->avgMarginSumm) {
    $jsonData["history"][$index11]["order"]["contact"]["avgMarginSumm"] = $model->history[$index11]->order->contact->avgMarginSumm;
}
if (null !== $model->history[$index11]->order->contact->marginSumm) {
    $jsonData["history"][$index11]["order"]["contact"]["marginSumm"] = $model->history[$index11]->order->contact->marginSumm;
}
if (null !== $model->history[$index11]->order->contact->totalSumm) {
    $jsonData["history"][$index11]["order"]["contact"]["totalSumm"] = $model->history[$index11]->order->contact->totalSumm;
}
if (null !== $model->history[$index11]->order->contact->averageSumm) {
    $jsonData["history"][$index11]["order"]["contact"]["averageSumm"] = $model->history[$index11]->order->contact->averageSumm;
}
if (null !== $model->history[$index11]->order->contact->ordersCount) {
    $jsonData["history"][$index11]["order"]["contact"]["ordersCount"] = $model->history[$index11]->order->contact->ordersCount;
}
if (null !== $model->history[$index11]->order->contact->costSumm) {
    $jsonData["history"][$index11]["order"]["contact"]["costSumm"] = $model->history[$index11]->order->contact->costSumm;
}
if (null !== $model->history[$index11]->order->contact->customFields) {
    $jsonData["history"][$index11]["order"]["contact"]["customFields"] = [];
foreach (array_keys($model->history[$index11]->order->contact->customFields) as $index57) {
    $jsonData["history"][$index11]["order"]["contact"]["customFields"] = $model->history[$index11]->order->contact->customFields;
}

}
if (null !== $model->history[$index11]->order->contact->personalDiscount) {
    $jsonData["history"][$index11]["order"]["contact"]["personalDiscount"] = $model->history[$index11]->order->contact->personalDiscount;
}
if (null !== $model->history[$index11]->order->contact->cumulativeDiscount) {
    $jsonData["history"][$index11]["order"]["contact"]["cumulativeDiscount"] = $model->history[$index11]->order->contact->cumulativeDiscount;
}
if (null !== $model->history[$index11]->order->contact->discountCardNumber) {
    $jsonData["history"][$index11]["order"]["contact"]["discountCardNumber"] = $model->history[$index11]->order->contact->discountCardNumber;
}
if (null !== $model->history[$index11]->order->contact->firstClientId) {
    $jsonData["history"][$index11]["order"]["contact"]["firstClientId"] = $model->history[$index11]->order->contact->firstClientId;
}
if (null !== $model->history[$index11]->order->contact->lastClientId) {
    $jsonData["history"][$index11]["order"]["contact"]["lastClientId"] = $model->history[$index11]->order->contact->lastClientId;
}
if (null !== $model->history[$index11]->order->contact->address) {
    $jsonData["history"][$index11]["order"]["contact"]["address"] = [];
if (null !== $model->history[$index11]->order->contact->address->id) {
    $jsonData["history"][$index11]["order"]["contact"]["address"]["id"] = $model->history[$index11]->order->contact->address->id;
}
if (null !== $model->history[$index11]->order->contact->address->name) {
    $jsonData["history"][$index11]["order"]["contact"]["address"]["name"] = $model->history[$index11]->order->contact->address->name;
}
if (null !== $model->history[$index11]->order->contact->address->isMain) {
    $jsonData["history"][$index11]["order"]["contact"]["address"]["isMain"] = $model->history[$index11]->order->contact->address->isMain;
}
if (null !== $model->history[$index11]->order->contact->address->index) {
    $jsonData["history"][$index11]["order"]["contact"]["address"]["index"] = $model->history[$index11]->order->contact->address->index;
}
if (null !== $model->history[$index11]->order->contact->address->countryIso) {
    $jsonData["history"][$index11]["order"]["contact"]["address"]["countryIso"] = $model->history[$index11]->order->contact->address->countryIso;
}
if (null !== $model->history[$index11]->order->contact->address->region) {
    $jsonData["history"][$index11]["order"]["contact"]["address"]["region"] = $model->history[$index11]->order->contact->address->region;
}
if (null !== $model->history[$index11]->order->contact->address->regionId) {
    $jsonData["history"][$index11]["order"]["contact"]["address"]["regionId"] = $model->history[$index11]->order->contact->address->regionId;
}
if (null !== $model->history[$index11]->order->contact->address->city) {
    $jsonData["history"][$index11]["order"]["contact"]["address"]["city"] = $model->history[$index11]->order->contact->address->city;
}
if (null !== $model->history[$index11]->order->contact->address->cityId) {
    $jsonData["history"][$index11]["order"]["contact"]["address"]["cityId"] = $model->history[$index11]->order->contact->address->cityId;
}
if (null !== $model->history[$index11]->order->contact->address->cityType) {
    $jsonData["history"][$index11]["order"]["contact"]["address"]["cityType"] = $model->history[$index11]->order->contact->address->cityType;
}
if (null !== $model->history[$index11]->order->contact->address->street) {
    $jsonData["history"][$index11]["order"]["contact"]["address"]["street"] = $model->history[$index11]->order->contact->address->street;
}
if (null !== $model->history[$index11]->order->contact->address->streetId) {
    $jsonData["history"][$index11]["order"]["contact"]["address"]["streetId"] = $model->history[$index11]->order->contact->address->streetId;
}
if (null !== $model->history[$index11]->order->contact->address->streetType) {
    $jsonData["history"][$index11]["order"]["contact"]["address"]["streetType"] = $model->history[$index11]->order->contact->address->streetType;
}
if (null !== $model->history[$index11]->order->contact->address->building) {
    $jsonData["history"][$index11]["order"]["contact"]["address"]["building"] = $model->history[$index11]->order->contact->address->building;
}
if (null !== $model->history[$index11]->order->contact->address->flat) {
    $jsonData["history"][$index11]["order"]["contact"]["address"]["flat"] = $model->history[$index11]->order->contact->address->flat;
}
if (null !== $model->history[$index11]->order->contact->address->floor) {
    $jsonData["history"][$index11]["order"]["contact"]["address"]["floor"] = $model->history[$index11]->order->contact->address->floor;
}
if (null !== $model->history[$index11]->order->contact->address->block) {
    $jsonData["history"][$index11]["order"]["contact"]["address"]["block"] = $model->history[$index11]->order->contact->address->block;
}
if (null !== $model->history[$index11]->order->contact->address->house) {
    $jsonData["history"][$index11]["order"]["contact"]["address"]["house"] = $model->history[$index11]->order->contact->address->house;
}
if (null !== $model->history[$index11]->order->contact->address->housing) {
    $jsonData["history"][$index11]["order"]["contact"]["address"]["housing"] = $model->history[$index11]->order->contact->address->housing;
}
if (null !== $model->history[$index11]->order->contact->address->metro) {
    $jsonData["history"][$index11]["order"]["contact"]["address"]["metro"] = $model->history[$index11]->order->contact->address->metro;
}
if (null !== $model->history[$index11]->order->contact->address->notes) {
    $jsonData["history"][$index11]["order"]["contact"]["address"]["notes"] = $model->history[$index11]->order->contact->address->notes;
}
if (null !== $model->history[$index11]->order->contact->address->text) {
    $jsonData["history"][$index11]["order"]["contact"]["address"]["text"] = $model->history[$index11]->order->contact->address->text;
}
if (null !== $model->history[$index11]->order->contact->address->externalId) {
    $jsonData["history"][$index11]["order"]["contact"]["address"]["externalId"] = $model->history[$index11]->order->contact->address->externalId;
}

if (0 === \count($jsonData["history"][$index11]["order"]["contact"]["address"])) {
    $jsonData["history"][$index11]["order"]["contact"]["address"] = $emptyObject;
}

}
if (null !== $model->history[$index11]->order->contact->segments) {
    $jsonData["history"][$index11]["order"]["contact"]["segments"] = [];
foreach (array_keys($model->history[$index11]->order->contact->segments) as $index53) {
    $jsonData["history"][$index11]["order"]["contact"]["segments"][$index53] = [];
if (null !== $model->history[$index11]->order->contact->segments[$index53]->id) {
    $jsonData["history"][$index11]["order"]["contact"]["segments"][$index53]["id"] = $model->history[$index11]->order->contact->segments[$index53]->id;
}
if (null !== $model->history[$index11]->order->contact->segments[$index53]->code) {
    $jsonData["history"][$index11]["order"]["contact"]["segments"][$index53]["code"] = $model->history[$index11]->order->contact->segments[$index53]->code;
}
if (null !== $model->history[$index11]->order->contact->segments[$index53]->name) {
    $jsonData["history"][$index11]["order"]["contact"]["segments"][$index53]["name"] = $model->history[$index11]->order->contact->segments[$index53]->name;
}
if (null !== $model->history[$index11]->order->contact->segments[$index53]->createdAt) {
    $jsonData["history"][$index11]["order"]["contact"]["segments"][$index53]["createdAt"] = $model->history[$index11]->order->contact->segments[$index53]->createdAt->format('Y-m-d H:i:s');;
}
if (null !== $model->history[$index11]->order->contact->segments[$index53]->isDynamic) {
    $jsonData["history"][$index11]["order"]["contact"]["segments"][$index53]["isDynamic"] = $model->history[$index11]->order->contact->segments[$index53]->isDynamic;
}
if (null !== $model->history[$index11]->order->contact->segments[$index53]->customersCount) {
    $jsonData["history"][$index11]["order"]["contact"]["segments"][$index53]["customersCount"] = $model->history[$index11]->order->contact->segments[$index53]->customersCount;
}
if (null !== $model->history[$index11]->order->contact->segments[$index53]->active) {
    $jsonData["history"][$index11]["order"]["contact"]["segments"][$index53]["active"] = $model->history[$index11]->order->contact->segments[$index53]->active;
}

if (0 === \count($jsonData["history"][$index11]["order"]["contact"]["segments"][$index53])) {
    $jsonData["history"][$index11]["order"]["contact"]["segments"][$index53] = $emptyObject;
}

}

}
if (null !== $model->history[$index11]->order->contact->maturationTime) {
    $jsonData["history"][$index11]["order"]["contact"]["maturationTime"] = $model->history[$index11]->order->contact->maturationTime;
}
if (null !== $model->history[$index11]->order->contact->firstName) {
    $jsonData["history"][$index11]["order"]["contact"]["firstName"] = $model->history[$index11]->order->contact->firstName;
}
if (null !== $model->history[$index11]->order->contact->lastName) {
    $jsonData["history"][$index11]["order"]["contact"]["lastName"] = $model->history[$index11]->order->contact->lastName;
}
if (null !== $model->history[$index11]->order->contact->patronymic) {
    $jsonData["history"][$index11]["order"]["contact"]["patronymic"] = $model->history[$index11]->order->contact->patronymic;
}
if (null !== $model->history[$index11]->order->contact->sex) {
    $jsonData["history"][$index11]["order"]["contact"]["sex"] = $model->history[$index11]->order->contact->sex;
}
if (null !== $model->history[$index11]->order->contact->presumableSex) {
    $jsonData["history"][$index11]["order"]["contact"]["presumableSex"] = $model->history[$index11]->order->contact->presumableSex;
}
if (null !== $model->history[$index11]->order->contact->email) {
    $jsonData["history"][$index11]["order"]["contact"]["email"] = $model->history[$index11]->order->contact->email;
}
if (null !== $model->history[$index11]->order->contact->emailMarketingUnsubscribedAt) {
    $jsonData["history"][$index11]["order"]["contact"]["emailMarketingUnsubscribedAt"] = $model->history[$index11]->order->contact->emailMarketingUnsubscribedAt->format('Y-m-d H:i:s');;
}
if (null !== $model->history[$index11]->order->contact->phones) {
    $jsonData["history"][$index11]["order"]["contact"]["phones"] = [];
foreach (array_keys($model->history[$index11]->order->contact->phones) as $index51) {
    $jsonData["history"][$index11]["order"]["contact"]["phones"][$index51] = [];
if (null !== $model->history[$index11]->order->contact->phones[$index51]->number) {
    $jsonData["history"][$index11]["order"]["contact"]["phones"][$index51]["number"] = $model->history[$index11]->order->contact->phones[$index51]->number;
}

if (0 === \count($jsonData["history"][$index11]["order"]["contact"]["phones"][$index51])) {
    $jsonData["history"][$index11]["order"]["contact"]["phones"][$index51] = $emptyObject;
}

}

}
if (null !== $model->history[$index11]->order->contact->birthday) {
    $jsonData["history"][$index11]["order"]["contact"]["birthday"] = $model->history[$index11]->order->contact->birthday->format('Y-m-d H:i:s');;
}
if (null !== $model->history[$index11]->order->contact->source) {
    $jsonData["history"][$index11]["order"]["contact"]["source"] = [];
if (null !== $model->history[$index11]->order->contact->source->source) {
    $jsonData["history"][$index11]["order"]["contact"]["source"]["source"] = $model->history[$index11]->order->contact->source->source;
}
if (null !== $model->history[$index11]->order->contact->source->medium) {
    $jsonData["history"][$index11]["order"]["contact"]["source"]["medium"] = $model->history[$index11]->order->contact->source->medium;
}
if (null !== $model->history[$index11]->order->contact->source->campaign) {
    $jsonData["history"][$index11]["order"]["contact"]["source"]["campaign"] = $model->history[$index11]->order->contact->source->campaign;
}
if (null !== $model->history[$index11]->order->contact->source->keyword) {
    $jsonData["history"][$index11]["order"]["contact"]["source"]["keyword"] = $model->history[$index11]->order->contact->source->keyword;
}
if (null !== $model->history[$index11]->order->contact->source->content) {
    $jsonData["history"][$index11]["order"]["contact"]["source"]["content"] = $model->history[$index11]->order->contact->source->content;
}

if (0 === \count($jsonData["history"][$index11]["order"]["contact"]["source"])) {
    $jsonData["history"][$index11]["order"]["contact"]["source"] = $emptyObject;
}

}
if (null !== $model->history[$index11]->order->contact->photoUrl) {
    $jsonData["history"][$index11]["order"]["contact"]["photoUrl"] = $model->history[$index11]->order->contact->photoUrl;
}
if (null !== $model->history[$index11]->order->contact->mgCustomerId) {
    $jsonData["history"][$index11]["order"]["contact"]["mgCustomerId"] = $model->history[$index11]->order->contact->mgCustomerId;
}
if (null !== $model->history[$index11]->order->contact->subscribed) {
    $jsonData["history"][$index11]["order"]["contact"]["subscribed"] = $model->history[$index11]->order->contact->subscribed;
}

if (0 === \count($jsonData["history"][$index11]["order"]["contact"])) {
    $jsonData["history"][$index11]["order"]["contact"] = $emptyObject;
}

}
if (null !== $model->history[$index11]->order->company) {
    $jsonData["history"][$index11]["order"]["company"] = [];
if (null !== $model->history[$index11]->order->company->id) {
    $jsonData["history"][$index11]["order"]["company"]["id"] = $model->history[$index11]->order->company->id;
}
if (null !== $model->history[$index11]->order->company->isMain) {
    $jsonData["history"][$index11]["order"]["company"]["isMain"] = $model->history[$index11]->order->company->isMain;
}
if (null !== $model->history[$index11]->order->company->externalId) {
    $jsonData["history"][$index11]["order"]["company"]["externalId"] = $model->history[$index11]->order->company->externalId;
}
if (null !== $model->history[$index11]->order->company->active) {
    $jsonData["history"][$index11]["order"]["company"]["active"] = $model->history[$index11]->order->company->active;
}
if (null !== $model->history[$index11]->order->company->name) {
    $jsonData["history"][$index11]["order"]["company"]["name"] = $model->history[$index11]->order->company->name;
}
if (null !== $model->history[$index11]->order->company->brand) {
    $jsonData["history"][$index11]["order"]["company"]["brand"] = $model->history[$index11]->order->company->brand;
}
if (null !== $model->history[$index11]->order->company->site) {
    $jsonData["history"][$index11]["order"]["company"]["site"] = $model->history[$index11]->order->company->site;
}
if (null !== $model->history[$index11]->order->company->createdAt) {
    $jsonData["history"][$index11]["order"]["company"]["createdAt"] = $model->history[$index11]->order->company->createdAt->format('Y-m-d H:i:s');;
}
if (null !== $model->history[$index11]->order->company->customer) {
    $jsonData["history"][$index11]["order"]["company"]["customer"] = [];
if (null !== $model->history[$index11]->order->company->customer->site) {
    $jsonData["history"][$index11]["order"]["company"]["customer"]["site"] = $model->history[$index11]->order->company->customer->site;
}
if (null !== $model->history[$index11]->order->company->customer->id) {
    $jsonData["history"][$index11]["order"]["company"]["customer"]["id"] = $model->history[$index11]->order->company->customer->id;
}
if (null !== $model->history[$index11]->order->company->customer->externalId) {
    $jsonData["history"][$index11]["order"]["company"]["customer"]["externalId"] = $model->history[$index11]->order->company->customer->externalId;
}
if (null !== $model->history[$index11]->order->company->customer->type) {
    $jsonData["history"][$index11]["order"]["company"]["customer"]["type"] = $model->history[$index11]->order->company->customer->type;
}

if (0 === \count($jsonData["history"][$index11]["order"]["company"]["customer"])) {
    $jsonData["history"][$index11]["order"]["company"]["customer"] = $emptyObject;
}

}
if (null !== $model->history[$index11]->order->company->contragent) {
    $jsonData["history"][$index11]["order"]["company"]["contragent"] = [];
if (null !== $model->history[$index11]->order->company->contragent->contragentType) {
    $jsonData["history"][$index11]["order"]["company"]["contragent"]["contragentType"] = $model->history[$index11]->order->company->contragent->contragentType;
}
if (null !== $model->history[$index11]->order->company->contragent->legalName) {
    $jsonData["history"][$index11]["order"]["company"]["contragent"]["legalName"] = $model->history[$index11]->order->company->contragent->legalName;
}
if (null !== $model->history[$index11]->order->company->contragent->legalAddress) {
    $jsonData["history"][$index11]["order"]["company"]["contragent"]["legalAddress"] = $model->history[$index11]->order->company->contragent->legalAddress;
}
if (null !== $model->history[$index11]->order->company->contragent->INN) {
    $jsonData["history"][$index11]["order"]["company"]["contragent"]["INN"] = $model->history[$index11]->order->company->contragent->INN;
}
if (null !== $model->history[$index11]->order->company->contragent->OKPO) {
    $jsonData["history"][$index11]["order"]["company"]["contragent"]["OKPO"] = $model->history[$index11]->order->company->contragent->OKPO;
}
if (null !== $model->history[$index11]->order->company->contragent->KPP) {
    $jsonData["history"][$index11]["order"]["company"]["contragent"]["KPP"] = $model->history[$index11]->order->company->contragent->KPP;
}
if (null !== $model->history[$index11]->order->company->contragent->OGRN) {
    $jsonData["history"][$index11]["order"]["company"]["contragent"]["OGRN"] = $model->history[$index11]->order->company->contragent->OGRN;
}
if (null !== $model->history[$index11]->order->company->contragent->OGRNIP) {
    $jsonData["history"][$index11]["order"]["company"]["contragent"]["OGRNIP"] = $model->history[$index11]->order->company->contragent->OGRNIP;
}
if (null !== $model->history[$index11]->order->company->contragent->certificateNumber) {
    $jsonData["history"][$index11]["order"]["company"]["contragent"]["certificateNumber"] = $model->history[$index11]->order->company->contragent->certificateNumber;
}
if (null !== $model->history[$index11]->order->company->contragent->certificateDate) {
    $jsonData["history"][$index11]["order"]["company"]["contragent"]["certificateDate"] = $model->history[$index11]->order->company->contragent->certificateDate->format('Y-m-d H:i:s');;
}
if (null !== $model->history[$index11]->order->company->contragent->BIK) {
    $jsonData["history"][$index11]["order"]["company"]["contragent"]["BIK"] = $model->history[$index11]->order->company->contragent->BIK;
}
if (null !== $model->history[$index11]->order->company->contragent->bank) {
    $jsonData["history"][$index11]["order"]["company"]["contragent"]["bank"] = $model->history[$index11]->order->company->contragent->bank;
}
if (null !== $model->history[$index11]->order->company->contragent->bankAddress) {
    $jsonData["history"][$index11]["order"]["company"]["contragent"]["bankAddress"] = $model->history[$index11]->order->company->contragent->bankAddress;
}
if (null !== $model->history[$index11]->order->company->contragent->corrAccount) {
    $jsonData["history"][$index11]["order"]["company"]["contragent"]["corrAccount"] = $model->history[$index11]->order->company->contragent->corrAccount;
}
if (null !== $model->history[$index11]->order->company->contragent->bankAccount) {
    $jsonData["history"][$index11]["order"]["company"]["contragent"]["bankAccount"] = $model->history[$index11]->order->company->contragent->bankAccount;
}

if (0 === \count($jsonData["history"][$index11]["order"]["company"]["contragent"])) {
    $jsonData["history"][$index11]["order"]["company"]["contragent"] = $emptyObject;
}

}
if (null !== $model->history[$index11]->order->company->address) {
    $jsonData["history"][$index11]["order"]["company"]["address"] = [];
if (null !== $model->history[$index11]->order->company->address->id) {
    $jsonData["history"][$index11]["order"]["company"]["address"]["id"] = $model->history[$index11]->order->company->address->id;
}
if (null !== $model->history[$index11]->order->company->address->name) {
    $jsonData["history"][$index11]["order"]["company"]["address"]["name"] = $model->history[$index11]->order->company->address->name;
}
if (null !== $model->history[$index11]->order->company->address->isMain) {
    $jsonData["history"][$index11]["order"]["company"]["address"]["isMain"] = $model->history[$index11]->order->company->address->isMain;
}
if (null !== $model->history[$index11]->order->company->address->index) {
    $jsonData["history"][$index11]["order"]["company"]["address"]["index"] = $model->history[$index11]->order->company->address->index;
}
if (null !== $model->history[$index11]->order->company->address->countryIso) {
    $jsonData["history"][$index11]["order"]["company"]["address"]["countryIso"] = $model->history[$index11]->order->company->address->countryIso;
}
if (null !== $model->history[$index11]->order->company->address->region) {
    $jsonData["history"][$index11]["order"]["company"]["address"]["region"] = $model->history[$index11]->order->company->address->region;
}
if (null !== $model->history[$index11]->order->company->address->regionId) {
    $jsonData["history"][$index11]["order"]["company"]["address"]["regionId"] = $model->history[$index11]->order->company->address->regionId;
}
if (null !== $model->history[$index11]->order->company->address->city) {
    $jsonData["history"][$index11]["order"]["company"]["address"]["city"] = $model->history[$index11]->order->company->address->city;
}
if (null !== $model->history[$index11]->order->company->address->cityId) {
    $jsonData["history"][$index11]["order"]["company"]["address"]["cityId"] = $model->history[$index11]->order->company->address->cityId;
}
if (null !== $model->history[$index11]->order->company->address->cityType) {
    $jsonData["history"][$index11]["order"]["company"]["address"]["cityType"] = $model->history[$index11]->order->company->address->cityType;
}
if (null !== $model->history[$index11]->order->company->address->street) {
    $jsonData["history"][$index11]["order"]["company"]["address"]["street"] = $model->history[$index11]->order->company->address->street;
}
if (null !== $model->history[$index11]->order->company->address->streetId) {
    $jsonData["history"][$index11]["order"]["company"]["address"]["streetId"] = $model->history[$index11]->order->company->address->streetId;
}
if (null !== $model->history[$index11]->order->company->address->streetType) {
    $jsonData["history"][$index11]["order"]["company"]["address"]["streetType"] = $model->history[$index11]->order->company->address->streetType;
}
if (null !== $model->history[$index11]->order->company->address->building) {
    $jsonData["history"][$index11]["order"]["company"]["address"]["building"] = $model->history[$index11]->order->company->address->building;
}
if (null !== $model->history[$index11]->order->company->address->flat) {
    $jsonData["history"][$index11]["order"]["company"]["address"]["flat"] = $model->history[$index11]->order->company->address->flat;
}
if (null !== $model->history[$index11]->order->company->address->floor) {
    $jsonData["history"][$index11]["order"]["company"]["address"]["floor"] = $model->history[$index11]->order->company->address->floor;
}
if (null !== $model->history[$index11]->order->company->address->block) {
    $jsonData["history"][$index11]["order"]["company"]["address"]["block"] = $model->history[$index11]->order->company->address->block;
}
if (null !== $model->history[$index11]->order->company->address->house) {
    $jsonData["history"][$index11]["order"]["company"]["address"]["house"] = $model->history[$index11]->order->company->address->house;
}
if (null !== $model->history[$index11]->order->company->address->housing) {
    $jsonData["history"][$index11]["order"]["company"]["address"]["housing"] = $model->history[$index11]->order->company->address->housing;
}
if (null !== $model->history[$index11]->order->company->address->metro) {
    $jsonData["history"][$index11]["order"]["company"]["address"]["metro"] = $model->history[$index11]->order->company->address->metro;
}
if (null !== $model->history[$index11]->order->company->address->notes) {
    $jsonData["history"][$index11]["order"]["company"]["address"]["notes"] = $model->history[$index11]->order->company->address->notes;
}
if (null !== $model->history[$index11]->order->company->address->text) {
    $jsonData["history"][$index11]["order"]["company"]["address"]["text"] = $model->history[$index11]->order->company->address->text;
}
if (null !== $model->history[$index11]->order->company->address->externalId) {
    $jsonData["history"][$index11]["order"]["company"]["address"]["externalId"] = $model->history[$index11]->order->company->address->externalId;
}

if (0 === \count($jsonData["history"][$index11]["order"]["company"]["address"])) {
    $jsonData["history"][$index11]["order"]["company"]["address"] = $emptyObject;
}

}
if (null !== $model->history[$index11]->order->company->customFields) {
    $jsonData["history"][$index11]["order"]["company"]["customFields"] = [];
foreach (array_keys($model->history[$index11]->order->company->customFields) as $index57) {
    $jsonData["history"][$index11]["order"]["company"]["customFields"] = $model->history[$index11]->order->company->customFields;
}

}
if (null !== $model->history[$index11]->order->company->marginSumm) {
    $jsonData["history"][$index11]["order"]["company"]["marginSumm"] = $model->history[$index11]->order->company->marginSumm;
}
if (null !== $model->history[$index11]->order->company->totalSumm) {
    $jsonData["history"][$index11]["order"]["company"]["totalSumm"] = $model->history[$index11]->order->company->totalSumm;
}
if (null !== $model->history[$index11]->order->company->averageSumm) {
    $jsonData["history"][$index11]["order"]["company"]["averageSumm"] = $model->history[$index11]->order->company->averageSumm;
}
if (null !== $model->history[$index11]->order->company->ordersCount) {
    $jsonData["history"][$index11]["order"]["company"]["ordersCount"] = $model->history[$index11]->order->company->ordersCount;
}
if (null !== $model->history[$index11]->order->company->costSumm) {
    $jsonData["history"][$index11]["order"]["company"]["costSumm"] = $model->history[$index11]->order->company->costSumm;
}

if (0 === \count($jsonData["history"][$index11]["order"]["company"])) {
    $jsonData["history"][$index11]["order"]["company"] = $emptyObject;
}

}
if (null !== $model->history[$index11]->order->contragent) {
    $jsonData["history"][$index11]["order"]["contragent"] = [];
if (null !== $model->history[$index11]->order->contragent->contragentType) {
    $jsonData["history"][$index11]["order"]["contragent"]["contragentType"] = $model->history[$index11]->order->contragent->contragentType;
}
if (null !== $model->history[$index11]->order->contragent->legalName) {
    $jsonData["history"][$index11]["order"]["contragent"]["legalName"] = $model->history[$index11]->order->contragent->legalName;
}
if (null !== $model->history[$index11]->order->contragent->legalAddress) {
    $jsonData["history"][$index11]["order"]["contragent"]["legalAddress"] = $model->history[$index11]->order->contragent->legalAddress;
}
if (null !== $model->history[$index11]->order->contragent->INN) {
    $jsonData["history"][$index11]["order"]["contragent"]["INN"] = $model->history[$index11]->order->contragent->INN;
}
if (null !== $model->history[$index11]->order->contragent->OKPO) {
    $jsonData["history"][$index11]["order"]["contragent"]["OKPO"] = $model->history[$index11]->order->contragent->OKPO;
}
if (null !== $model->history[$index11]->order->contragent->KPP) {
    $jsonData["history"][$index11]["order"]["contragent"]["KPP"] = $model->history[$index11]->order->contragent->KPP;
}
if (null !== $model->history[$index11]->order->contragent->OGRN) {
    $jsonData["history"][$index11]["order"]["contragent"]["OGRN"] = $model->history[$index11]->order->contragent->OGRN;
}
if (null !== $model->history[$index11]->order->contragent->OGRNIP) {
    $jsonData["history"][$index11]["order"]["contragent"]["OGRNIP"] = $model->history[$index11]->order->contragent->OGRNIP;
}
if (null !== $model->history[$index11]->order->contragent->certificateNumber) {
    $jsonData["history"][$index11]["order"]["contragent"]["certificateNumber"] = $model->history[$index11]->order->contragent->certificateNumber;
}
if (null !== $model->history[$index11]->order->contragent->certificateDate) {
    $jsonData["history"][$index11]["order"]["contragent"]["certificateDate"] = $model->history[$index11]->order->contragent->certificateDate->format('Y-m-d H:i:s');;
}
if (null !== $model->history[$index11]->order->contragent->BIK) {
    $jsonData["history"][$index11]["order"]["contragent"]["BIK"] = $model->history[$index11]->order->contragent->BIK;
}
if (null !== $model->history[$index11]->order->contragent->bank) {
    $jsonData["history"][$index11]["order"]["contragent"]["bank"] = $model->history[$index11]->order->contragent->bank;
}
if (null !== $model->history[$index11]->order->contragent->bankAddress) {
    $jsonData["history"][$index11]["order"]["contragent"]["bankAddress"] = $model->history[$index11]->order->contragent->bankAddress;
}
if (null !== $model->history[$index11]->order->contragent->corrAccount) {
    $jsonData["history"][$index11]["order"]["contragent"]["corrAccount"] = $model->history[$index11]->order->contragent->corrAccount;
}
if (null !== $model->history[$index11]->order->contragent->bankAccount) {
    $jsonData["history"][$index11]["order"]["contragent"]["bankAccount"] = $model->history[$index11]->order->contragent->bankAccount;
}

if (0 === \count($jsonData["history"][$index11]["order"]["contragent"])) {
    $jsonData["history"][$index11]["order"]["contragent"] = $emptyObject;
}

}
if (null !== $model->history[$index11]->order->delivery) {
    $jsonData["history"][$index11]["order"]["delivery"] = [];
if (null !== $model->history[$index11]->order->delivery->code) {
    $jsonData["history"][$index11]["order"]["delivery"]["code"] = $model->history[$index11]->order->delivery->code;
}
if (null !== $model->history[$index11]->order->delivery->integrationCode) {
    $jsonData["history"][$index11]["order"]["delivery"]["integrationCode"] = $model->history[$index11]->order->delivery->integrationCode;
}
if (null !== $model->history[$index11]->order->delivery->data) {
    $jsonData["history"][$index11]["order"]["delivery"]["data"] = [];
if (null !== $model->history[$index11]->order->delivery->data->externalId) {
    $jsonData["history"][$index11]["order"]["delivery"]["data"]["externalId"] = $model->history[$index11]->order->delivery->data->externalId;
}
if (null !== $model->history[$index11]->order->delivery->data->trackNumber) {
    $jsonData["history"][$index11]["order"]["delivery"]["data"]["trackNumber"] = $model->history[$index11]->order->delivery->data->trackNumber;
}
if (null !== $model->history[$index11]->order->delivery->data->status) {
    $jsonData["history"][$index11]["order"]["delivery"]["data"]["status"] = $model->history[$index11]->order->delivery->data->status;
}
if (null !== $model->history[$index11]->order->delivery->data->locked) {
    $jsonData["history"][$index11]["order"]["delivery"]["data"]["locked"] = $model->history[$index11]->order->delivery->data->locked;
}
if (null !== $model->history[$index11]->order->delivery->data->pickuppointAddress) {
    $jsonData["history"][$index11]["order"]["delivery"]["data"]["pickuppointAddress"] = $model->history[$index11]->order->delivery->data->pickuppointAddress;
}
if (null !== $model->history[$index11]->order->delivery->data->days) {
    $jsonData["history"][$index11]["order"]["delivery"]["data"]["days"] = $model->history[$index11]->order->delivery->data->days;
}
if (null !== $model->history[$index11]->order->delivery->data->statusText) {
    $jsonData["history"][$index11]["order"]["delivery"]["data"]["statusText"] = $model->history[$index11]->order->delivery->data->statusText;
}
if (null !== $model->history[$index11]->order->delivery->data->statusDate) {
    $jsonData["history"][$index11]["order"]["delivery"]["data"]["statusDate"] = $model->history[$index11]->order->delivery->data->statusDate->format('Y-m-d');;
}
if (null !== $model->history[$index11]->order->delivery->data->tariff) {
    $jsonData["history"][$index11]["order"]["delivery"]["data"]["tariff"] = $model->history[$index11]->order->delivery->data->tariff;
}
if (null !== $model->history[$index11]->order->delivery->data->tariffName) {
    $jsonData["history"][$index11]["order"]["delivery"]["data"]["tariffName"] = $model->history[$index11]->order->delivery->data->tariffName;
}
if (null !== $model->history[$index11]->order->delivery->data->pickuppointId) {
    $jsonData["history"][$index11]["order"]["delivery"]["data"]["pickuppointId"] = $model->history[$index11]->order->delivery->data->pickuppointId;
}
if (null !== $model->history[$index11]->order->delivery->data->pickuppointSchedule) {
    $jsonData["history"][$index11]["order"]["delivery"]["data"]["pickuppointSchedule"] = $model->history[$index11]->order->delivery->data->pickuppointSchedule;
}
if (null !== $model->history[$index11]->order->delivery->data->pickuppointPhone) {
    $jsonData["history"][$index11]["order"]["delivery"]["data"]["pickuppointPhone"] = $model->history[$index11]->order->delivery->data->pickuppointPhone;
}
if (null !== $model->history[$index11]->order->delivery->data->payerType) {
    $jsonData["history"][$index11]["order"]["delivery"]["data"]["payerType"] = $model->history[$index11]->order->delivery->data->payerType;
}
if (null !== $model->history[$index11]->order->delivery->data->statusComment) {
    $jsonData["history"][$index11]["order"]["delivery"]["data"]["statusComment"] = $model->history[$index11]->order->delivery->data->statusComment;
}
if (null !== $model->history[$index11]->order->delivery->data->cost) {
    $jsonData["history"][$index11]["order"]["delivery"]["data"]["cost"] = $model->history[$index11]->order->delivery->data->cost;
}
if (null !== $model->history[$index11]->order->delivery->data->minTerm) {
    $jsonData["history"][$index11]["order"]["delivery"]["data"]["minTerm"] = $model->history[$index11]->order->delivery->data->minTerm;
}
if (null !== $model->history[$index11]->order->delivery->data->maxTerm) {
    $jsonData["history"][$index11]["order"]["delivery"]["data"]["maxTerm"] = $model->history[$index11]->order->delivery->data->maxTerm;
}
if (null !== $model->history[$index11]->order->delivery->data->shipmentpointId) {
    $jsonData["history"][$index11]["order"]["delivery"]["data"]["shipmentpointId"] = $model->history[$index11]->order->delivery->data->shipmentpointId;
}
if (null !== $model->history[$index11]->order->delivery->data->shipmentpointName) {
    $jsonData["history"][$index11]["order"]["delivery"]["data"]["shipmentpointName"] = $model->history[$index11]->order->delivery->data->shipmentpointName;
}
if (null !== $model->history[$index11]->order->delivery->data->shipmentpointAddress) {
    $jsonData["history"][$index11]["order"]["delivery"]["data"]["shipmentpointAddress"] = $model->history[$index11]->order->delivery->data->shipmentpointAddress;
}
if (null !== $model->history[$index11]->order->delivery->data->shipmentpointSchedule) {
    $jsonData["history"][$index11]["order"]["delivery"]["data"]["shipmentpointSchedule"] = $model->history[$index11]->order->delivery->data->shipmentpointSchedule;
}
if (null !== $model->history[$index11]->order->delivery->data->shipmentpointPhone) {
    $jsonData["history"][$index11]["order"]["delivery"]["data"]["shipmentpointPhone"] = $model->history[$index11]->order->delivery->data->shipmentpointPhone;
}
if (null !== $model->history[$index11]->order->delivery->data->shipmentpointCoordinateLatitude) {
    $jsonData["history"][$index11]["order"]["delivery"]["data"]["shipmentpointCoordinateLatitude"] = $model->history[$index11]->order->delivery->data->shipmentpointCoordinateLatitude;
}
if (null !== $model->history[$index11]->order->delivery->data->shipmentpointCoordinateLongitude) {
    $jsonData["history"][$index11]["order"]["delivery"]["data"]["shipmentpointCoordinateLongitude"] = $model->history[$index11]->order->delivery->data->shipmentpointCoordinateLongitude;
}
if (null !== $model->history[$index11]->order->delivery->data->pickuppointName) {
    $jsonData["history"][$index11]["order"]["delivery"]["data"]["pickuppointName"] = $model->history[$index11]->order->delivery->data->pickuppointName;
}
if (null !== $model->history[$index11]->order->delivery->data->pickuppointCoordinateLatitude) {
    $jsonData["history"][$index11]["order"]["delivery"]["data"]["pickuppointCoordinateLatitude"] = $model->history[$index11]->order->delivery->data->pickuppointCoordinateLatitude;
}
if (null !== $model->history[$index11]->order->delivery->data->pickuppointCoordinateLongitude) {
    $jsonData["history"][$index11]["order"]["delivery"]["data"]["pickuppointCoordinateLongitude"] = $model->history[$index11]->order->delivery->data->pickuppointCoordinateLongitude;
}
if (null !== $model->history[$index11]->order->delivery->data->extraData) {
    $jsonData["history"][$index11]["order"]["delivery"]["data"]["extraData"] = [];
foreach (array_keys($model->history[$index11]->order->delivery->data->extraData) as $index63) {
    $jsonData["history"][$index11]["order"]["delivery"]["data"]["extraData"] = $model->history[$index11]->order->delivery->data->extraData;
}

}
if (null !== $model->history[$index11]->order->delivery->data->packages) {
    $jsonData["history"][$index11]["order"]["delivery"]["data"]["packages"] = [];
foreach (array_keys($model->history[$index11]->order->delivery->data->packages) as $index62) {
    $jsonData["history"][$index11]["order"]["delivery"]["data"]["packages"][$index62] = [];
if (null !== $model->history[$index11]->order->delivery->data->packages[$index62]->packageId) {
    $jsonData["history"][$index11]["order"]["delivery"]["data"]["packages"][$index62]["packageId"] = $model->history[$index11]->order->delivery->data->packages[$index62]->packageId;
}
if (null !== $model->history[$index11]->order->delivery->data->packages[$index62]->weight) {
    $jsonData["history"][$index11]["order"]["delivery"]["data"]["packages"][$index62]["weight"] = $model->history[$index11]->order->delivery->data->packages[$index62]->weight;
}
if (null !== $model->history[$index11]->order->delivery->data->packages[$index62]->length) {
    $jsonData["history"][$index11]["order"]["delivery"]["data"]["packages"][$index62]["length"] = $model->history[$index11]->order->delivery->data->packages[$index62]->length;
}
if (null !== $model->history[$index11]->order->delivery->data->packages[$index62]->width) {
    $jsonData["history"][$index11]["order"]["delivery"]["data"]["packages"][$index62]["width"] = $model->history[$index11]->order->delivery->data->packages[$index62]->width;
}
if (null !== $model->history[$index11]->order->delivery->data->packages[$index62]->height) {
    $jsonData["history"][$index11]["order"]["delivery"]["data"]["packages"][$index62]["height"] = $model->history[$index11]->order->delivery->data->packages[$index62]->height;
}
if (null !== $model->history[$index11]->order->delivery->data->packages[$index62]->items) {
    $jsonData["history"][$index11]["order"]["delivery"]["data"]["packages"][$index62]["items"] = [];
foreach (array_keys($model->history[$index11]->order->delivery->data->packages[$index62]->items) as $index81) {
    $jsonData["history"][$index11]["order"]["delivery"]["data"]["packages"][$index62]["items"][$index81] = [];
if (null !== $model->history[$index11]->order->delivery->data->packages[$index62]->items[$index81]->orderProduct) {
    $jsonData["history"][$index11]["order"]["delivery"]["data"]["packages"][$index62]["items"][$index81]["orderProduct"] = [];
if (null !== $model->history[$index11]->order->delivery->data->packages[$index62]->items[$index81]->orderProduct->id) {
    $jsonData["history"][$index11]["order"]["delivery"]["data"]["packages"][$index62]["items"][$index81]["orderProduct"]["id"] = $model->history[$index11]->order->delivery->data->packages[$index62]->items[$index81]->orderProduct->id;
}
if (null !== $model->history[$index11]->order->delivery->data->packages[$index62]->items[$index81]->orderProduct->externalId) {
    $jsonData["history"][$index11]["order"]["delivery"]["data"]["packages"][$index62]["items"][$index81]["orderProduct"]["externalId"] = $model->history[$index11]->order->delivery->data->packages[$index62]->items[$index81]->orderProduct->externalId;
}
if (null !== $model->history[$index11]->order->delivery->data->packages[$index62]->items[$index81]->orderProduct->externalIds) {
    $jsonData["history"][$index11]["order"]["delivery"]["data"]["packages"][$index62]["items"][$index81]["orderProduct"]["externalIds"] = [];
foreach (array_keys($model->history[$index11]->order->delivery->data->packages[$index62]->items[$index81]->orderProduct->externalIds) as $index122) {
    $jsonData["history"][$index11]["order"]["delivery"]["data"]["packages"][$index62]["items"][$index81]["orderProduct"]["externalIds"][$index122] = [];
if (null !== $model->history[$index11]->order->delivery->data->packages[$index62]->items[$index81]->orderProduct->externalIds[$index122]->code) {
    $jsonData["history"][$index11]["order"]["delivery"]["data"]["packages"][$index62]["items"][$index81]["orderProduct"]["externalIds"][$index122]["code"] = $model->history[$index11]->order->delivery->data->packages[$index62]->items[$index81]->orderProduct->externalIds[$index122]->code;
}
if (null !== $model->history[$index11]->order->delivery->data->packages[$index62]->items[$index81]->orderProduct->externalIds[$index122]->value) {
    $jsonData["history"][$index11]["order"]["delivery"]["data"]["packages"][$index62]["items"][$index81]["orderProduct"]["externalIds"][$index122]["value"] = $model->history[$index11]->order->delivery->data->packages[$index62]->items[$index81]->orderProduct->externalIds[$index122]->value;
}

if (0 === \count($jsonData["history"][$index11]["order"]["delivery"]["data"]["packages"][$index62]["items"][$index81]["orderProduct"]["externalIds"][$index122])) {
    $jsonData["history"][$index11]["order"]["delivery"]["data"]["packages"][$index62]["items"][$index81]["orderProduct"]["externalIds"][$index122] = $emptyObject;
}

}

}

if (0 === \count($jsonData["history"][$index11]["order"]["delivery"]["data"]["packages"][$index62]["items"][$index81]["orderProduct"])) {
    $jsonData["history"][$index11]["order"]["delivery"]["data"]["packages"][$index62]["items"][$index81]["orderProduct"] = $emptyObject;
}

}
if (null !== $model->history[$index11]->order->delivery->data->packages[$index62]->items[$index81]->quantity) {
    $jsonData["history"][$index11]["order"]["delivery"]["data"]["packages"][$index62]["items"][$index81]["quantity"] = $model->history[$index11]->order->delivery->data->packages[$index62]->items[$index81]->quantity;
}

if (0 === \count($jsonData["history"][$index11]["order"]["delivery"]["data"]["packages"][$index62]["items"][$index81])) {
    $jsonData["history"][$index11]["order"]["delivery"]["data"]["packages"][$index62]["items"][$index81] = $emptyObject;
}

}

}

if (0 === \count($jsonData["history"][$index11]["order"]["delivery"]["data"]["packages"][$index62])) {
    $jsonData["history"][$index11]["order"]["delivery"]["data"]["packages"][$index62] = $emptyObject;
}

}

}
if (null !== $model->history[$index11]->order->delivery->data->returnExternalId) {
    $jsonData["history"][$index11]["order"]["delivery"]["data"]["returnExternalId"] = $model->history[$index11]->order->delivery->data->returnExternalId;
}
if (null !== $model->history[$index11]->order->delivery->data->deliveryName) {
    $jsonData["history"][$index11]["order"]["delivery"]["data"]["deliveryName"] = $model->history[$index11]->order->delivery->data->deliveryName;
}
if (null !== $model->history[$index11]->order->delivery->data->price) {
    $jsonData["history"][$index11]["order"]["delivery"]["data"]["price"] = $model->history[$index11]->order->delivery->data->price;
}
if (null !== $model->history[$index11]->order->delivery->data->insurancePrice) {
    $jsonData["history"][$index11]["order"]["delivery"]["data"]["insurancePrice"] = $model->history[$index11]->order->delivery->data->insurancePrice;
}
if (null !== $model->history[$index11]->order->delivery->data->tariffType) {
    $jsonData["history"][$index11]["order"]["delivery"]["data"]["tariffType"] = $model->history[$index11]->order->delivery->data->tariffType;
}
if (null !== $model->history[$index11]->order->delivery->data->receiverCity) {
    $jsonData["history"][$index11]["order"]["delivery"]["data"]["receiverCity"] = $model->history[$index11]->order->delivery->data->receiverCity;
}
if (null !== $model->history[$index11]->order->delivery->data->services) {
    $jsonData["history"][$index11]["order"]["delivery"]["data"]["services"] = [];
foreach (array_keys($model->history[$index11]->order->delivery->data->services) as $index62) {
    $jsonData["history"][$index11]["order"]["delivery"]["data"]["services"] = $model->history[$index11]->order->delivery->data->services;
}

}
if (null !== $model->history[$index11]->order->delivery->data->packageNumber) {
    $jsonData["history"][$index11]["order"]["delivery"]["data"]["packageNumber"] = $model->history[$index11]->order->delivery->data->packageNumber;
}
if (null !== $model->history[$index11]->order->delivery->data->comment) {
    $jsonData["history"][$index11]["order"]["delivery"]["data"]["comment"] = $model->history[$index11]->order->delivery->data->comment;
}
if (null !== $model->history[$index11]->order->delivery->data->deliveryCode) {
    $jsonData["history"][$index11]["order"]["delivery"]["data"]["deliveryCode"] = $model->history[$index11]->order->delivery->data->deliveryCode;
}
if (null !== $model->history[$index11]->order->delivery->data->notes) {
    $jsonData["history"][$index11]["order"]["delivery"]["data"]["notes"] = $model->history[$index11]->order->delivery->data->notes;
}
if (null !== $model->history[$index11]->order->delivery->data->id) {
    $jsonData["history"][$index11]["order"]["delivery"]["data"]["id"] = $model->history[$index11]->order->delivery->data->id;
}
if (null !== $model->history[$index11]->order->delivery->data->firstName) {
    $jsonData["history"][$index11]["order"]["delivery"]["data"]["firstName"] = $model->history[$index11]->order->delivery->data->firstName;
}
if (null !== $model->history[$index11]->order->delivery->data->lastName) {
    $jsonData["history"][$index11]["order"]["delivery"]["data"]["lastName"] = $model->history[$index11]->order->delivery->data->lastName;
}
if (null !== $model->history[$index11]->order->delivery->data->patronymic) {
    $jsonData["history"][$index11]["order"]["delivery"]["data"]["patronymic"] = $model->history[$index11]->order->delivery->data->patronymic;
}
if (null !== $model->history[$index11]->order->delivery->data->active) {
    $jsonData["history"][$index11]["order"]["delivery"]["data"]["active"] = $model->history[$index11]->order->delivery->data->active;
}
if (null !== $model->history[$index11]->order->delivery->data->email) {
    $jsonData["history"][$index11]["order"]["delivery"]["data"]["email"] = $model->history[$index11]->order->delivery->data->email;
}
if (null !== $model->history[$index11]->order->delivery->data->phone) {
    $jsonData["history"][$index11]["order"]["delivery"]["data"]["phone"] = [];
if (null !== $model->history[$index11]->order->delivery->data->phone->number) {
    $jsonData["history"][$index11]["order"]["delivery"]["data"]["phone"]["number"] = $model->history[$index11]->order->delivery->data->phone->number;
}

if (0 === \count($jsonData["history"][$index11]["order"]["delivery"]["data"]["phone"])) {
    $jsonData["history"][$index11]["order"]["delivery"]["data"]["phone"] = $emptyObject;
}

}
if (null !== $model->history[$index11]->order->delivery->data->description) {
    $jsonData["history"][$index11]["order"]["delivery"]["data"]["description"] = $model->history[$index11]->order->delivery->data->description;
}
if (null !== $model->history[$index11]->order->delivery->data->courierId) {
    $jsonData["history"][$index11]["order"]["delivery"]["data"]["courierId"] = $model->history[$index11]->order->delivery->data->courierId;
}
if (null !== $model->history[$index11]->order->delivery->data->serviceType) {
    $jsonData["history"][$index11]["order"]["delivery"]["data"]["serviceType"] = $model->history[$index11]->order->delivery->data->serviceType;
}
if (null !== $model->history[$index11]->order->delivery->data->pickuppoint) {
    $jsonData["history"][$index11]["order"]["delivery"]["data"]["pickuppoint"] = $model->history[$index11]->order->delivery->data->pickuppoint;
}
if (null !== $model->history[$index11]->order->delivery->data->receiverWarehouseTypeRef) {
    $jsonData["history"][$index11]["order"]["delivery"]["data"]["receiverWarehouseTypeRef"] = $model->history[$index11]->order->delivery->data->receiverWarehouseTypeRef;
}
if (null !== $model->history[$index11]->order->delivery->data->statusName) {
    $jsonData["history"][$index11]["order"]["delivery"]["data"]["statusName"] = $model->history[$index11]->order->delivery->data->statusName;
}
if (null !== $model->history[$index11]->order->delivery->data->receiverCityRef) {
    $jsonData["history"][$index11]["order"]["delivery"]["data"]["receiverCityRef"] = $model->history[$index11]->order->delivery->data->receiverCityRef;
}
if (null !== $model->history[$index11]->order->delivery->data->receiverStreet) {
    $jsonData["history"][$index11]["order"]["delivery"]["data"]["receiverStreet"] = $model->history[$index11]->order->delivery->data->receiverStreet;
}
if (null !== $model->history[$index11]->order->delivery->data->receiverStreetRef) {
    $jsonData["history"][$index11]["order"]["delivery"]["data"]["receiverStreetRef"] = $model->history[$index11]->order->delivery->data->receiverStreetRef;
}
if (null !== $model->history[$index11]->order->delivery->data->seatsAmount) {
    $jsonData["history"][$index11]["order"]["delivery"]["data"]["seatsAmount"] = $model->history[$index11]->order->delivery->data->seatsAmount;
}
if (null !== $model->history[$index11]->order->delivery->data->cargoType) {
    $jsonData["history"][$index11]["order"]["delivery"]["data"]["cargoType"] = $model->history[$index11]->order->delivery->data->cargoType;
}
if (null !== $model->history[$index11]->order->delivery->data->cargoDescription) {
    $jsonData["history"][$index11]["order"]["delivery"]["data"]["cargoDescription"] = $model->history[$index11]->order->delivery->data->cargoDescription;
}
if (null !== $model->history[$index11]->order->delivery->data->cashPayerType) {
    $jsonData["history"][$index11]["order"]["delivery"]["data"]["cashPayerType"] = $model->history[$index11]->order->delivery->data->cashPayerType;
}
if (null !== $model->history[$index11]->order->delivery->data->paymentForm) {
    $jsonData["history"][$index11]["order"]["delivery"]["data"]["paymentForm"] = $model->history[$index11]->order->delivery->data->paymentForm;
}
if (null !== $model->history[$index11]->order->delivery->data->ownershipForm) {
    $jsonData["history"][$index11]["order"]["delivery"]["data"]["ownershipForm"] = $model->history[$index11]->order->delivery->data->ownershipForm;
}
if (null !== $model->history[$index11]->order->delivery->data->accompanyingDocument) {
    $jsonData["history"][$index11]["order"]["delivery"]["data"]["accompanyingDocument"] = $model->history[$index11]->order->delivery->data->accompanyingDocument;
}
if (null !== $model->history[$index11]->order->delivery->data->preferredDeliveryDate) {
    $jsonData["history"][$index11]["order"]["delivery"]["data"]["preferredDeliveryDate"] = $model->history[$index11]->order->delivery->data->preferredDeliveryDate->format('Y-m-d H:i:s');;
}
if (null !== $model->history[$index11]->order->delivery->data->timeInterval) {
    $jsonData["history"][$index11]["order"]["delivery"]["data"]["timeInterval"] = $model->history[$index11]->order->delivery->data->timeInterval;
}
if (null !== $model->history[$index11]->order->delivery->data->saturdayDelivery) {
    $jsonData["history"][$index11]["order"]["delivery"]["data"]["saturdayDelivery"] = $model->history[$index11]->order->delivery->data->saturdayDelivery;
}
if (null !== $model->history[$index11]->order->delivery->data->deliveryDate) {
    $jsonData["history"][$index11]["order"]["delivery"]["data"]["deliveryDate"] = $model->history[$index11]->order->delivery->data->deliveryDate;
}
if (null !== $model->history[$index11]->order->delivery->data->denieReason) {
    $jsonData["history"][$index11]["order"]["delivery"]["data"]["denieReason"] = $model->history[$index11]->order->delivery->data->denieReason;
}
if (null !== $model->history[$index11]->order->delivery->data->backwardDelivery) {
    $jsonData["history"][$index11]["order"]["delivery"]["data"]["backwardDelivery"] = $model->history[$index11]->order->delivery->data->backwardDelivery;
}
if (null !== $model->history[$index11]->order->delivery->data->backwardDeliveryCargoType) {
    $jsonData["history"][$index11]["order"]["delivery"]["data"]["backwardDeliveryCargoType"] = $model->history[$index11]->order->delivery->data->backwardDeliveryCargoType;
}
if (null !== $model->history[$index11]->order->delivery->data->backwardDeliveryPayerType) {
    $jsonData["history"][$index11]["order"]["delivery"]["data"]["backwardDeliveryPayerType"] = $model->history[$index11]->order->delivery->data->backwardDeliveryPayerType;
}
if (null !== $model->history[$index11]->order->delivery->data->backwardDeliveryRedeliveryString) {
    $jsonData["history"][$index11]["order"]["delivery"]["data"]["backwardDeliveryRedeliveryString"] = $model->history[$index11]->order->delivery->data->backwardDeliveryRedeliveryString;
}
if (null !== $model->history[$index11]->order->delivery->data->afterpaymentOnGoodsCost) {
    $jsonData["history"][$index11]["order"]["delivery"]["data"]["afterpaymentOnGoodsCost"] = $model->history[$index11]->order->delivery->data->afterpaymentOnGoodsCost;
}
if (null !== $model->history[$index11]->order->delivery->data->declaredValue) {
    $jsonData["history"][$index11]["order"]["delivery"]["data"]["declaredValue"] = $model->history[$index11]->order->delivery->data->declaredValue;
}
if (null !== $model->history[$index11]->order->delivery->data->sendDate) {
    $jsonData["history"][$index11]["order"]["delivery"]["data"]["sendDate"] = $model->history[$index11]->order->delivery->data->sendDate->format('Y-m-d H:i:s');;
}
if (null !== $model->history[$index11]->order->delivery->data->deliveryType) {
    $jsonData["history"][$index11]["order"]["delivery"]["data"]["deliveryType"] = $model->history[$index11]->order->delivery->data->deliveryType;
}
if (null !== $model->history[$index11]->order->delivery->data->pickupType) {
    $jsonData["history"][$index11]["order"]["delivery"]["data"]["pickupType"] = $model->history[$index11]->order->delivery->data->pickupType;
}
if (null !== $model->history[$index11]->order->delivery->data->pickuppointDescription) {
    $jsonData["history"][$index11]["order"]["delivery"]["data"]["pickuppointDescription"] = $model->history[$index11]->order->delivery->data->pickuppointDescription;
}
if (null !== $model->history[$index11]->order->delivery->data->placesCount) {
    $jsonData["history"][$index11]["order"]["delivery"]["data"]["placesCount"] = $model->history[$index11]->order->delivery->data->placesCount;
}
if (null !== $model->history[$index11]->order->delivery->data->service) {
    $jsonData["history"][$index11]["order"]["delivery"]["data"]["service"] = $model->history[$index11]->order->delivery->data->service;
}

if (0 === \count($jsonData["history"][$index11]["order"]["delivery"]["data"])) {
    $jsonData["history"][$index11]["order"]["delivery"]["data"] = $emptyObject;
}

}
if (null !== $model->history[$index11]->order->delivery->service) {
    $jsonData["history"][$index11]["order"]["delivery"]["service"] = [];
if (null !== $model->history[$index11]->order->delivery->service->name) {
    $jsonData["history"][$index11]["order"]["delivery"]["service"]["name"] = $model->history[$index11]->order->delivery->service->name;
}
if (null !== $model->history[$index11]->order->delivery->service->code) {
    $jsonData["history"][$index11]["order"]["delivery"]["service"]["code"] = $model->history[$index11]->order->delivery->service->code;
}
if (null !== $model->history[$index11]->order->delivery->service->active) {
    $jsonData["history"][$index11]["order"]["delivery"]["service"]["active"] = $model->history[$index11]->order->delivery->service->active;
}

if (0 === \count($jsonData["history"][$index11]["order"]["delivery"]["service"])) {
    $jsonData["history"][$index11]["order"]["delivery"]["service"] = $emptyObject;
}

}
if (null !== $model->history[$index11]->order->delivery->cost) {
    $jsonData["history"][$index11]["order"]["delivery"]["cost"] = $model->history[$index11]->order->delivery->cost;
}
if (null !== $model->history[$index11]->order->delivery->netCost) {
    $jsonData["history"][$index11]["order"]["delivery"]["netCost"] = $model->history[$index11]->order->delivery->netCost;
}
if (null !== $model->history[$index11]->order->delivery->date) {
    $jsonData["history"][$index11]["order"]["delivery"]["date"] = $model->history[$index11]->order->delivery->date->format('Y-m-d');;
}
if (null !== $model->history[$index11]->order->delivery->time) {
    $jsonData["history"][$index11]["order"]["delivery"]["time"] = [];
if (null !== $model->history[$index11]->order->delivery->time->from) {
    $jsonData["history"][$index11]["order"]["delivery"]["time"]["from"] = $model->history[$index11]->order->delivery->time->from->format('H:i');;
}
if (null !== $model->history[$index11]->order->delivery->time->to) {
    $jsonData["history"][$index11]["order"]["delivery"]["time"]["to"] = $model->history[$index11]->order->delivery->time->to->format('H:i');;
}
if (null !== $model->history[$index11]->order->delivery->time->custom) {
    $jsonData["history"][$index11]["order"]["delivery"]["time"]["custom"] = $model->history[$index11]->order->delivery->time->custom;
}

if (0 === \count($jsonData["history"][$index11]["order"]["delivery"]["time"])) {
    $jsonData["history"][$index11]["order"]["delivery"]["time"] = $emptyObject;
}

}
if (null !== $model->history[$index11]->order->delivery->address) {
    $jsonData["history"][$index11]["order"]["delivery"]["address"] = [];
if (null !== $model->history[$index11]->order->delivery->address->id) {
    $jsonData["history"][$index11]["order"]["delivery"]["address"]["id"] = $model->history[$index11]->order->delivery->address->id;
}
if (null !== $model->history[$index11]->order->delivery->address->index) {
    $jsonData["history"][$index11]["order"]["delivery"]["address"]["index"] = $model->history[$index11]->order->delivery->address->index;
}
if (null !== $model->history[$index11]->order->delivery->address->countryIso) {
    $jsonData["history"][$index11]["order"]["delivery"]["address"]["countryIso"] = $model->history[$index11]->order->delivery->address->countryIso;
}
if (null !== $model->history[$index11]->order->delivery->address->region) {
    $jsonData["history"][$index11]["order"]["delivery"]["address"]["region"] = $model->history[$index11]->order->delivery->address->region;
}
if (null !== $model->history[$index11]->order->delivery->address->regionId) {
    $jsonData["history"][$index11]["order"]["delivery"]["address"]["regionId"] = $model->history[$index11]->order->delivery->address->regionId;
}
if (null !== $model->history[$index11]->order->delivery->address->city) {
    $jsonData["history"][$index11]["order"]["delivery"]["address"]["city"] = $model->history[$index11]->order->delivery->address->city;
}
if (null !== $model->history[$index11]->order->delivery->address->cityId) {
    $jsonData["history"][$index11]["order"]["delivery"]["address"]["cityId"] = $model->history[$index11]->order->delivery->address->cityId;
}
if (null !== $model->history[$index11]->order->delivery->address->cityType) {
    $jsonData["history"][$index11]["order"]["delivery"]["address"]["cityType"] = $model->history[$index11]->order->delivery->address->cityType;
}
if (null !== $model->history[$index11]->order->delivery->address->street) {
    $jsonData["history"][$index11]["order"]["delivery"]["address"]["street"] = $model->history[$index11]->order->delivery->address->street;
}
if (null !== $model->history[$index11]->order->delivery->address->streetId) {
    $jsonData["history"][$index11]["order"]["delivery"]["address"]["streetId"] = $model->history[$index11]->order->delivery->address->streetId;
}
if (null !== $model->history[$index11]->order->delivery->address->streetType) {
    $jsonData["history"][$index11]["order"]["delivery"]["address"]["streetType"] = $model->history[$index11]->order->delivery->address->streetType;
}
if (null !== $model->history[$index11]->order->delivery->address->building) {
    $jsonData["history"][$index11]["order"]["delivery"]["address"]["building"] = $model->history[$index11]->order->delivery->address->building;
}
if (null !== $model->history[$index11]->order->delivery->address->flat) {
    $jsonData["history"][$index11]["order"]["delivery"]["address"]["flat"] = $model->history[$index11]->order->delivery->address->flat;
}
if (null !== $model->history[$index11]->order->delivery->address->floor) {
    $jsonData["history"][$index11]["order"]["delivery"]["address"]["floor"] = $model->history[$index11]->order->delivery->address->floor;
}
if (null !== $model->history[$index11]->order->delivery->address->block) {
    $jsonData["history"][$index11]["order"]["delivery"]["address"]["block"] = $model->history[$index11]->order->delivery->address->block;
}
if (null !== $model->history[$index11]->order->delivery->address->house) {
    $jsonData["history"][$index11]["order"]["delivery"]["address"]["house"] = $model->history[$index11]->order->delivery->address->house;
}
if (null !== $model->history[$index11]->order->delivery->address->housing) {
    $jsonData["history"][$index11]["order"]["delivery"]["address"]["housing"] = $model->history[$index11]->order->delivery->address->housing;
}
if (null !== $model->history[$index11]->order->delivery->address->metro) {
    $jsonData["history"][$index11]["order"]["delivery"]["address"]["metro"] = $model->history[$index11]->order->delivery->address->metro;
}
if (null !== $model->history[$index11]->order->delivery->address->text) {
    $jsonData["history"][$index11]["order"]["delivery"]["address"]["text"] = $model->history[$index11]->order->delivery->address->text;
}

if (0 === \count($jsonData["history"][$index11]["order"]["delivery"]["address"])) {
    $jsonData["history"][$index11]["order"]["delivery"]["address"] = $emptyObject;
}

}
if (null !== $model->history[$index11]->order->delivery->vatRate) {
    $jsonData["history"][$index11]["order"]["delivery"]["vatRate"] = $model->history[$index11]->order->delivery->vatRate;
}

if (0 === \count($jsonData["history"][$index11]["order"]["delivery"])) {
    $jsonData["history"][$index11]["order"]["delivery"] = $emptyObject;
}

}
if (null !== $model->history[$index11]->order->marketplace) {
    $jsonData["history"][$index11]["order"]["marketplace"] = [];
if (null !== $model->history[$index11]->order->marketplace->code) {
    $jsonData["history"][$index11]["order"]["marketplace"]["code"] = $model->history[$index11]->order->marketplace->code;
}
if (null !== $model->history[$index11]->order->marketplace->orderId) {
    $jsonData["history"][$index11]["order"]["marketplace"]["orderId"] = $model->history[$index11]->order->marketplace->orderId;
}

if (0 === \count($jsonData["history"][$index11]["order"]["marketplace"])) {
    $jsonData["history"][$index11]["order"]["marketplace"] = $emptyObject;
}

}
if (null !== $model->history[$index11]->order->site) {
    $jsonData["history"][$index11]["order"]["site"] = $model->history[$index11]->order->site;
}
if (null !== $model->history[$index11]->order->status) {
    $jsonData["history"][$index11]["order"]["status"] = $model->history[$index11]->order->status;
}
if (null !== $model->history[$index11]->order->statusComment) {
    $jsonData["history"][$index11]["order"]["statusComment"] = $model->history[$index11]->order->statusComment;
}
if (null !== $model->history[$index11]->order->source) {
    $jsonData["history"][$index11]["order"]["source"] = [];
if (null !== $model->history[$index11]->order->source->source) {
    $jsonData["history"][$index11]["order"]["source"]["source"] = $model->history[$index11]->order->source->source;
}
if (null !== $model->history[$index11]->order->source->medium) {
    $jsonData["history"][$index11]["order"]["source"]["medium"] = $model->history[$index11]->order->source->medium;
}
if (null !== $model->history[$index11]->order->source->campaign) {
    $jsonData["history"][$index11]["order"]["source"]["campaign"] = $model->history[$index11]->order->source->campaign;
}
if (null !== $model->history[$index11]->order->source->keyword) {
    $jsonData["history"][$index11]["order"]["source"]["keyword"] = $model->history[$index11]->order->source->keyword;
}
if (null !== $model->history[$index11]->order->source->content) {
    $jsonData["history"][$index11]["order"]["source"]["content"] = $model->history[$index11]->order->source->content;
}

if (0 === \count($jsonData["history"][$index11]["order"]["source"])) {
    $jsonData["history"][$index11]["order"]["source"] = $emptyObject;
}

}
if (null !== $model->history[$index11]->order->items) {
    $jsonData["history"][$index11]["order"]["items"] = [];
foreach (array_keys($model->history[$index11]->order->items) as $index39) {
    $jsonData["history"][$index11]["order"]["items"][$index39] = [];
if (null !== $model->history[$index11]->order->items[$index39]->externalId) {
    $jsonData["history"][$index11]["order"]["items"][$index39]["externalId"] = $model->history[$index11]->order->items[$index39]->externalId;
}
if (null !== $model->history[$index11]->order->items[$index39]->markingCodes) {
    $jsonData["history"][$index11]["order"]["items"][$index39]["markingCodes"] = [];
foreach (array_keys($model->history[$index11]->order->items[$index39]->markingCodes) as $index65) {
    $jsonData["history"][$index11]["order"]["items"][$index39]["markingCodes"] = $model->history[$index11]->order->items[$index39]->markingCodes;
}

}
if (null !== $model->history[$index11]->order->items[$index39]->id) {
    $jsonData["history"][$index11]["order"]["items"][$index39]["id"] = $model->history[$index11]->order->items[$index39]->id;
}
if (null !== $model->history[$index11]->order->items[$index39]->externalIds) {
    $jsonData["history"][$index11]["order"]["items"][$index39]["externalIds"] = [];
foreach (array_keys($model->history[$index11]->order->items[$index39]->externalIds) as $index64) {
    $jsonData["history"][$index11]["order"]["items"][$index39]["externalIds"][$index64] = [];
if (null !== $model->history[$index11]->order->items[$index39]->externalIds[$index64]->code) {
    $jsonData["history"][$index11]["order"]["items"][$index39]["externalIds"][$index64]["code"] = $model->history[$index11]->order->items[$index39]->externalIds[$index64]->code;
}
if (null !== $model->history[$index11]->order->items[$index39]->externalIds[$index64]->value) {
    $jsonData["history"][$index11]["order"]["items"][$index39]["externalIds"][$index64]["value"] = $model->history[$index11]->order->items[$index39]->externalIds[$index64]->value;
}

if (0 === \count($jsonData["history"][$index11]["order"]["items"][$index39]["externalIds"][$index64])) {
    $jsonData["history"][$index11]["order"]["items"][$index39]["externalIds"][$index64] = $emptyObject;
}

}

}
if (null !== $model->history[$index11]->order->items[$index39]->priceType) {
    $jsonData["history"][$index11]["order"]["items"][$index39]["priceType"] = [];
if (null !== $model->history[$index11]->order->items[$index39]->priceType->code) {
    $jsonData["history"][$index11]["order"]["items"][$index39]["priceType"]["code"] = $model->history[$index11]->order->items[$index39]->priceType->code;
}

if (0 === \count($jsonData["history"][$index11]["order"]["items"][$index39]["priceType"])) {
    $jsonData["history"][$index11]["order"]["items"][$index39]["priceType"] = $emptyObject;
}

}
if (null !== $model->history[$index11]->order->items[$index39]->initialPrice) {
    $jsonData["history"][$index11]["order"]["items"][$index39]["initialPrice"] = $model->history[$index11]->order->items[$index39]->initialPrice;
}
if (null !== $model->history[$index11]->order->items[$index39]->discountManualAmount) {
    $jsonData["history"][$index11]["order"]["items"][$index39]["discountManualAmount"] = $model->history[$index11]->order->items[$index39]->discountManualAmount;
}
if (null !== $model->history[$index11]->order->items[$index39]->discountManualPercent) {
    $jsonData["history"][$index11]["order"]["items"][$index39]["discountManualPercent"] = $model->history[$index11]->order->items[$index39]->discountManualPercent;
}
if (null !== $model->history[$index11]->order->items[$index39]->discountTotal) {
    $jsonData["history"][$index11]["order"]["items"][$index39]["discountTotal"] = $model->history[$index11]->order->items[$index39]->discountTotal;
}
if (null !== $model->history[$index11]->order->items[$index39]->prices) {
    $jsonData["history"][$index11]["order"]["items"][$index39]["prices"] = [];
foreach (array_keys($model->history[$index11]->order->items[$index39]->prices) as $index59) {
    $jsonData["history"][$index11]["order"]["items"][$index39]["prices"][$index59] = [];
if (null !== $model->history[$index11]->order->items[$index39]->prices[$index59]->price) {
    $jsonData["history"][$index11]["order"]["items"][$index39]["prices"][$index59]["price"] = $model->history[$index11]->order->items[$index39]->prices[$index59]->price;
}
if (null !== $model->history[$index11]->order->items[$index39]->prices[$index59]->quantity) {
    $jsonData["history"][$index11]["order"]["items"][$index39]["prices"][$index59]["quantity"] = $model->history[$index11]->order->items[$index39]->prices[$index59]->quantity;
}

if (0 === \count($jsonData["history"][$index11]["order"]["items"][$index39]["prices"][$index59])) {
    $jsonData["history"][$index11]["order"]["items"][$index39]["prices"][$index59] = $emptyObject;
}

}

}
if (null !== $model->history[$index11]->order->items[$index39]->vatRate) {
    $jsonData["history"][$index11]["order"]["items"][$index39]["vatRate"] = $model->history[$index11]->order->items[$index39]->vatRate;
}
if (null !== $model->history[$index11]->order->items[$index39]->createdAt) {
    $jsonData["history"][$index11]["order"]["items"][$index39]["createdAt"] = $model->history[$index11]->order->items[$index39]->createdAt->format('Y-m-d H:i:s');;
}
if (null !== $model->history[$index11]->order->items[$index39]->quantity) {
    $jsonData["history"][$index11]["order"]["items"][$index39]["quantity"] = $model->history[$index11]->order->items[$index39]->quantity;
}
if (null !== $model->history[$index11]->order->items[$index39]->status) {
    $jsonData["history"][$index11]["order"]["items"][$index39]["status"] = $model->history[$index11]->order->items[$index39]->status;
}
if (null !== $model->history[$index11]->order->items[$index39]->comment) {
    $jsonData["history"][$index11]["order"]["items"][$index39]["comment"] = $model->history[$index11]->order->items[$index39]->comment;
}
if (null !== $model->history[$index11]->order->items[$index39]->offer) {
    $jsonData["history"][$index11]["order"]["items"][$index39]["offer"] = [];
if (null !== $model->history[$index11]->order->items[$index39]->offer->displayName) {
    $jsonData["history"][$index11]["order"]["items"][$index39]["offer"]["displayName"] = $model->history[$index11]->order->items[$index39]->offer->displayName;
}
if (null !== $model->history[$index11]->order->items[$index39]->offer->id) {
    $jsonData["history"][$index11]["order"]["items"][$index39]["offer"]["id"] = $model->history[$index11]->order->items[$index39]->offer->id;
}
if (null !== $model->history[$index11]->order->items[$index39]->offer->externalId) {
    $jsonData["history"][$index11]["order"]["items"][$index39]["offer"]["externalId"] = $model->history[$index11]->order->items[$index39]->offer->externalId;
}
if (null !== $model->history[$index11]->order->items[$index39]->offer->xmlId) {
    $jsonData["history"][$index11]["order"]["items"][$index39]["offer"]["xmlId"] = $model->history[$index11]->order->items[$index39]->offer->xmlId;
}
if (null !== $model->history[$index11]->order->items[$index39]->offer->name) {
    $jsonData["history"][$index11]["order"]["items"][$index39]["offer"]["name"] = $model->history[$index11]->order->items[$index39]->offer->name;
}
if (null !== $model->history[$index11]->order->items[$index39]->offer->article) {
    $jsonData["history"][$index11]["order"]["items"][$index39]["offer"]["article"] = $model->history[$index11]->order->items[$index39]->offer->article;
}
if (null !== $model->history[$index11]->order->items[$index39]->offer->vatRate) {
    $jsonData["history"][$index11]["order"]["items"][$index39]["offer"]["vatRate"] = $model->history[$index11]->order->items[$index39]->offer->vatRate;
}
if (null !== $model->history[$index11]->order->items[$index39]->offer->unit) {
    $jsonData["history"][$index11]["order"]["items"][$index39]["offer"]["unit"] = [];
if (null !== $model->history[$index11]->order->items[$index39]->offer->unit->code) {
    $jsonData["history"][$index11]["order"]["items"][$index39]["offer"]["unit"]["code"] = $model->history[$index11]->order->items[$index39]->offer->unit->code;
}
if (null !== $model->history[$index11]->order->items[$index39]->offer->unit->name) {
    $jsonData["history"][$index11]["order"]["items"][$index39]["offer"]["unit"]["name"] = $model->history[$index11]->order->items[$index39]->offer->unit->name;
}
if (null !== $model->history[$index11]->order->items[$index39]->offer->unit->sym) {
    $jsonData["history"][$index11]["order"]["items"][$index39]["offer"]["unit"]["sym"] = $model->history[$index11]->order->items[$index39]->offer->unit->sym;
}

if (0 === \count($jsonData["history"][$index11]["order"]["items"][$index39]["offer"]["unit"])) {
    $jsonData["history"][$index11]["order"]["items"][$index39]["offer"]["unit"] = $emptyObject;
}

}
if (null !== $model->history[$index11]->order->items[$index39]->offer->barcode) {
    $jsonData["history"][$index11]["order"]["items"][$index39]["offer"]["barcode"] = $model->history[$index11]->order->items[$index39]->offer->barcode;
}
if (null !== $model->history[$index11]->order->items[$index39]->offer->properties) {
    $jsonData["history"][$index11]["order"]["items"][$index39]["offer"]["properties"] = [];
foreach (array_keys($model->history[$index11]->order->items[$index39]->offer->properties) as $index72) {
    $jsonData["history"][$index11]["order"]["items"][$index39]["offer"]["properties"] = $model->history[$index11]->order->items[$index39]->offer->properties;
}

}

if (0 === \count($jsonData["history"][$index11]["order"]["items"][$index39]["offer"])) {
    $jsonData["history"][$index11]["order"]["items"][$index39]["offer"] = $emptyObject;
}

}
if (null !== $model->history[$index11]->order->items[$index39]->productName) {
    $jsonData["history"][$index11]["order"]["items"][$index39]["productName"] = $model->history[$index11]->order->items[$index39]->productName;
}
if (null !== $model->history[$index11]->order->items[$index39]->isCanceled) {
    $jsonData["history"][$index11]["order"]["items"][$index39]["isCanceled"] = $model->history[$index11]->order->items[$index39]->isCanceled;
}
if (null !== $model->history[$index11]->order->items[$index39]->properties) {
    if (0 === \count($model->history[$index11]->order->items[$index39]->properties)) {
    $jsonData["history"][$index11]["order"]["items"][$index39]["properties"] = $emptyHashmap;
} else {
    foreach (array_keys($model->history[$index11]->order->items[$index39]->properties) as $index63) {
        $jsonData["history"][$index11]["order"]["items"][$index39]["properties"][$index63] = [];
if (null !== $model->history[$index11]->order->items[$index39]->properties[$index63]->code) {
    $jsonData["history"][$index11]["order"]["items"][$index39]["properties"][$index63]["code"] = $model->history[$index11]->order->items[$index39]->properties[$index63]->code;
}
if (null !== $model->history[$index11]->order->items[$index39]->properties[$index63]->name) {
    $jsonData["history"][$index11]["order"]["items"][$index39]["properties"][$index63]["name"] = $model->history[$index11]->order->items[$index39]->properties[$index63]->name;
}
if (null !== $model->history[$index11]->order->items[$index39]->properties[$index63]->value) {
    $jsonData["history"][$index11]["order"]["items"][$index39]["properties"][$index63]["value"] = $model->history[$index11]->order->items[$index39]->properties[$index63]->value;
}

if (0 === \count($jsonData["history"][$index11]["order"]["items"][$index39]["properties"][$index63])) {
    $jsonData["history"][$index11]["order"]["items"][$index39]["properties"][$index63] = $emptyObject;
}

    }
}

}
if (null !== $model->history[$index11]->order->items[$index39]->purchasePrice) {
    $jsonData["history"][$index11]["order"]["items"][$index39]["purchasePrice"] = $model->history[$index11]->order->items[$index39]->purchasePrice;
}

if (0 === \count($jsonData["history"][$index11]["order"]["items"][$index39])) {
    $jsonData["history"][$index11]["order"]["items"][$index39] = $emptyObject;
}

}

}
if (null !== $model->history[$index11]->order->fullPaidAt) {
    $jsonData["history"][$index11]["order"]["fullPaidAt"] = $model->history[$index11]->order->fullPaidAt->format('Y-m-d H:i:s');;
}
if (null !== $model->history[$index11]->order->payments) {
    $jsonData["history"][$index11]["order"]["payments"] = [];
foreach (array_keys($model->history[$index11]->order->payments) as $index42) {
    $jsonData["history"][$index11]["order"]["payments"][$index42] = [];
if (null !== $model->history[$index11]->order->payments[$index42]->id) {
    $jsonData["history"][$index11]["order"]["payments"][$index42]["id"] = $model->history[$index11]->order->payments[$index42]->id;
}
if (null !== $model->history[$index11]->order->payments[$index42]->status) {
    $jsonData["history"][$index11]["order"]["payments"][$index42]["status"] = $model->history[$index11]->order->payments[$index42]->status;
}
if (null !== $model->history[$index11]->order->payments[$index42]->type) {
    $jsonData["history"][$index11]["order"]["payments"][$index42]["type"] = $model->history[$index11]->order->payments[$index42]->type;
}
if (null !== $model->history[$index11]->order->payments[$index42]->externalId) {
    $jsonData["history"][$index11]["order"]["payments"][$index42]["externalId"] = $model->history[$index11]->order->payments[$index42]->externalId;
}
if (null !== $model->history[$index11]->order->payments[$index42]->amount) {
    $jsonData["history"][$index11]["order"]["payments"][$index42]["amount"] = $model->history[$index11]->order->payments[$index42]->amount;
}
if (null !== $model->history[$index11]->order->payments[$index42]->paidAt) {
    $jsonData["history"][$index11]["order"]["payments"][$index42]["paidAt"] = $model->history[$index11]->order->payments[$index42]->paidAt->format('Y-m-d H:i:s');;
}
if (null !== $model->history[$index11]->order->payments[$index42]->comment) {
    $jsonData["history"][$index11]["order"]["payments"][$index42]["comment"] = $model->history[$index11]->order->payments[$index42]->comment;
}

if (0 === \count($jsonData["history"][$index11]["order"]["payments"][$index42])) {
    $jsonData["history"][$index11]["order"]["payments"][$index42] = $emptyObject;
}

}

}
if (null !== $model->history[$index11]->order->fromApi) {
    $jsonData["history"][$index11]["order"]["fromApi"] = $model->history[$index11]->order->fromApi;
}
if (null !== $model->history[$index11]->order->weight) {
    $jsonData["history"][$index11]["order"]["weight"] = $model->history[$index11]->order->weight;
}
if (null !== $model->history[$index11]->order->length) {
    $jsonData["history"][$index11]["order"]["length"] = $model->history[$index11]->order->length;
}
if (null !== $model->history[$index11]->order->width) {
    $jsonData["history"][$index11]["order"]["width"] = $model->history[$index11]->order->width;
}
if (null !== $model->history[$index11]->order->height) {
    $jsonData["history"][$index11]["order"]["height"] = $model->history[$index11]->order->height;
}
if (null !== $model->history[$index11]->order->shipmentStore) {
    $jsonData["history"][$index11]["order"]["shipmentStore"] = $model->history[$index11]->order->shipmentStore;
}
if (null !== $model->history[$index11]->order->shipmentDate) {
    $jsonData["history"][$index11]["order"]["shipmentDate"] = $model->history[$index11]->order->shipmentDate->format('Y-m-d');;
}
if (null !== $model->history[$index11]->order->shipped) {
    $jsonData["history"][$index11]["order"]["shipped"] = $model->history[$index11]->order->shipped;
}
if (null !== $model->history[$index11]->order->dialogId) {
    $jsonData["history"][$index11]["order"]["dialogId"] = $model->history[$index11]->order->dialogId;
}
if (null !== $model->history[$index11]->order->customFields) {
    $jsonData["history"][$index11]["order"]["customFields"] = [];
foreach (array_keys($model->history[$index11]->order->customFields) as $index46) {
    $jsonData["history"][$index11]["order"]["customFields"] = $model->history[$index11]->order->customFields;
}

}
if (null !== $model->history[$index11]->order->clientId) {
    $jsonData["history"][$index11]["order"]["clientId"] = $model->history[$index11]->order->clientId;
}
if (null !== $model->history[$index11]->order->loyaltyEventId) {
    $jsonData["history"][$index11]["order"]["loyaltyEventId"] = $model->history[$index11]->order->loyaltyEventId;
}

if (0 === \count($jsonData["history"][$index11]["order"])) {
    $jsonData["history"][$index11]["order"] = $emptyObject;
}

}
if (null !== $model->history[$index11]->ancestor) {
    $jsonData["history"][$index11]["ancestor"] = [];
if (null !== $model->history[$index11]->ancestor->bonusesCreditTotal) {
    $jsonData["history"][$index11]["ancestor"]["bonusesCreditTotal"] = $model->history[$index11]->ancestor->bonusesCreditTotal;
}
if (null !== $model->history[$index11]->ancestor->bonusesChargeTotal) {
    $jsonData["history"][$index11]["ancestor"]["bonusesChargeTotal"] = $model->history[$index11]->ancestor->bonusesChargeTotal;
}
if (null !== $model->history[$index11]->ancestor->summ) {
    $jsonData["history"][$index11]["ancestor"]["summ"] = $model->history[$index11]->ancestor->summ;
}
if (null !== $model->history[$index11]->ancestor->id) {
    $jsonData["history"][$index11]["ancestor"]["id"] = $model->history[$index11]->ancestor->id;
}
if (null !== $model->history[$index11]->ancestor->slug) {
    $jsonData["history"][$index11]["ancestor"]["slug"] = $model->history[$index11]->ancestor->slug;
}
if (null !== $model->history[$index11]->ancestor->number) {
    $jsonData["history"][$index11]["ancestor"]["number"] = $model->history[$index11]->ancestor->number;
}
if (null !== $model->history[$index11]->ancestor->externalId) {
    $jsonData["history"][$index11]["ancestor"]["externalId"] = $model->history[$index11]->ancestor->externalId;
}
if (null !== $model->history[$index11]->ancestor->orderType) {
    $jsonData["history"][$index11]["ancestor"]["orderType"] = $model->history[$index11]->ancestor->orderType;
}
if (null !== $model->history[$index11]->ancestor->orderMethod) {
    $jsonData["history"][$index11]["ancestor"]["orderMethod"] = $model->history[$index11]->ancestor->orderMethod;
}
if (null !== $model->history[$index11]->ancestor->privilegeType) {
    $jsonData["history"][$index11]["ancestor"]["privilegeType"] = $model->history[$index11]->ancestor->privilegeType;
}
if (null !== $model->history[$index11]->ancestor->countryIso) {
    $jsonData["history"][$index11]["ancestor"]["countryIso"] = $model->history[$index11]->ancestor->countryIso;
}
if (null !== $model->history[$index11]->ancestor->createdAt) {
    $jsonData["history"][$index11]["ancestor"]["createdAt"] = $model->history[$index11]->ancestor->createdAt->format('Y-m-d H:i:s');;
}
if (null !== $model->history[$index11]->ancestor->statusUpdatedAt) {
    $jsonData["history"][$index11]["ancestor"]["statusUpdatedAt"] = $model->history[$index11]->ancestor->statusUpdatedAt->format('Y-m-d H:i:s');;
}
if (null !== $model->history[$index11]->ancestor->discountManualAmount) {
    $jsonData["history"][$index11]["ancestor"]["discountManualAmount"] = $model->history[$index11]->ancestor->discountManualAmount;
}
if (null !== $model->history[$index11]->ancestor->discountManualPercent) {
    $jsonData["history"][$index11]["ancestor"]["discountManualPercent"] = $model->history[$index11]->ancestor->discountManualPercent;
}
if (null !== $model->history[$index11]->ancestor->totalSumm) {
    $jsonData["history"][$index11]["ancestor"]["totalSumm"] = $model->history[$index11]->ancestor->totalSumm;
}
if (null !== $model->history[$index11]->ancestor->prepaySum) {
    $jsonData["history"][$index11]["ancestor"]["prepaySum"] = $model->history[$index11]->ancestor->prepaySum;
}
if (null !== $model->history[$index11]->ancestor->purchaseSumm) {
    $jsonData["history"][$index11]["ancestor"]["purchaseSumm"] = $model->history[$index11]->ancestor->purchaseSumm;
}
if (null !== $model->history[$index11]->ancestor->personalDiscountPercent) {
    $jsonData["history"][$index11]["ancestor"]["personalDiscountPercent"] = $model->history[$index11]->ancestor->personalDiscountPercent;
}
if (null !== $model->history[$index11]->ancestor->loyaltyLevel) {
    $jsonData["history"][$index11]["ancestor"]["loyaltyLevel"] = [];
if (null !== $model->history[$index11]->ancestor->loyaltyLevel->id) {
    $jsonData["history"][$index11]["ancestor"]["loyaltyLevel"]["id"] = $model->history[$index11]->ancestor->loyaltyLevel->id;
}
if (null !== $model->history[$index11]->ancestor->loyaltyLevel->name) {
    $jsonData["history"][$index11]["ancestor"]["loyaltyLevel"]["name"] = $model->history[$index11]->ancestor->loyaltyLevel->name;
}

if (0 === \count($jsonData["history"][$index11]["ancestor"]["loyaltyLevel"])) {
    $jsonData["history"][$index11]["ancestor"]["loyaltyLevel"] = $emptyObject;
}

}
if (null !== $model->history[$index11]->ancestor->loyaltyEvent) {
    $jsonData["history"][$index11]["ancestor"]["loyaltyEvent"] = [];
if (null !== $model->history[$index11]->ancestor->loyaltyEvent->id) {
    $jsonData["history"][$index11]["ancestor"]["loyaltyEvent"]["id"] = $model->history[$index11]->ancestor->loyaltyEvent->id;
}

if (0 === \count($jsonData["history"][$index11]["ancestor"]["loyaltyEvent"])) {
    $jsonData["history"][$index11]["ancestor"]["loyaltyEvent"] = $emptyObject;
}

}
if (null !== $model->history[$index11]->ancestor->mark) {
    $jsonData["history"][$index11]["ancestor"]["mark"] = $model->history[$index11]->ancestor->mark;
}
if (null !== $model->history[$index11]->ancestor->markDatetime) {
    $jsonData["history"][$index11]["ancestor"]["markDatetime"] = $model->history[$index11]->ancestor->markDatetime->format('Y-m-d H:i:s');;
}
if (null !== $model->history[$index11]->ancestor->lastName) {
    $jsonData["history"][$index11]["ancestor"]["lastName"] = $model->history[$index11]->ancestor->lastName;
}
if (null !== $model->history[$index11]->ancestor->firstName) {
    $jsonData["history"][$index11]["ancestor"]["firstName"] = $model->history[$index11]->ancestor->firstName;
}
if (null !== $model->history[$index11]->ancestor->patronymic) {
    $jsonData["history"][$index11]["ancestor"]["patronymic"] = $model->history[$index11]->ancestor->patronymic;
}
if (null !== $model->history[$index11]->ancestor->phone) {
    $jsonData["history"][$index11]["ancestor"]["phone"] = $model->history[$index11]->ancestor->phone;
}
if (null !== $model->history[$index11]->ancestor->additionalPhone) {
    $jsonData["history"][$index11]["ancestor"]["additionalPhone"] = $model->history[$index11]->ancestor->additionalPhone;
}
if (null !== $model->history[$index11]->ancestor->email) {
    $jsonData["history"][$index11]["ancestor"]["email"] = $model->history[$index11]->ancestor->email;
}
if (null !== $model->history[$index11]->ancestor->call) {
    $jsonData["history"][$index11]["ancestor"]["call"] = $model->history[$index11]->ancestor->call;
}
if (null !== $model->history[$index11]->ancestor->expired) {
    $jsonData["history"][$index11]["ancestor"]["expired"] = $model->history[$index11]->ancestor->expired;
}
if (null !== $model->history[$index11]->ancestor->customerComment) {
    $jsonData["history"][$index11]["ancestor"]["customerComment"] = $model->history[$index11]->ancestor->customerComment;
}
if (null !== $model->history[$index11]->ancestor->managerComment) {
    $jsonData["history"][$index11]["ancestor"]["managerComment"] = $model->history[$index11]->ancestor->managerComment;
}
if (null !== $model->history[$index11]->ancestor->managerId) {
    $jsonData["history"][$index11]["ancestor"]["managerId"] = $model->history[$index11]->ancestor->managerId;
}
if (null !== $model->history[$index11]->ancestor->customer) {
    $jsonData["history"][$index11]["ancestor"]["customer"] = [];

if (0 === \count($jsonData["history"][$index11]["ancestor"]["customer"])) {
    $jsonData["history"][$index11]["ancestor"]["customer"] = $emptyObject;
}

if ($model->history[$index11]->ancestor->customer instanceof \RetailCrm\Api\Model\Entity\Customers\Customer) {
    $jsonData["history"][$index11]["ancestor"]["customer"] = [];
if (null !== $model->history[$index11]->ancestor->customer->type) {
    $jsonData["history"][$index11]["ancestor"]["customer"]["type"] = $model->history[$index11]->ancestor->customer->type;
}
if (null !== $model->history[$index11]->ancestor->customer->id) {
    $jsonData["history"][$index11]["ancestor"]["customer"]["id"] = $model->history[$index11]->ancestor->customer->id;
}
if (null !== $model->history[$index11]->ancestor->customer->externalId) {
    $jsonData["history"][$index11]["ancestor"]["customer"]["externalId"] = $model->history[$index11]->ancestor->customer->externalId;
}
if (null !== $model->history[$index11]->ancestor->customer->isContact) {
    $jsonData["history"][$index11]["ancestor"]["customer"]["isContact"] = $model->history[$index11]->ancestor->customer->isContact;
}
if (null !== $model->history[$index11]->ancestor->customer->createdAt) {
    $jsonData["history"][$index11]["ancestor"]["customer"]["createdAt"] = $model->history[$index11]->ancestor->customer->createdAt->format('Y-m-d H:i:s');;
}
if (null !== $model->history[$index11]->ancestor->customer->managerId) {
    $jsonData["history"][$index11]["ancestor"]["customer"]["managerId"] = $model->history[$index11]->ancestor->customer->managerId;
}
if (null !== $model->history[$index11]->ancestor->customer->vip) {
    $jsonData["history"][$index11]["ancestor"]["customer"]["vip"] = $model->history[$index11]->ancestor->customer->vip;
}
if (null !== $model->history[$index11]->ancestor->customer->bad) {
    $jsonData["history"][$index11]["ancestor"]["customer"]["bad"] = $model->history[$index11]->ancestor->customer->bad;
}
if (null !== $model->history[$index11]->ancestor->customer->browserId) {
    $jsonData["history"][$index11]["ancestor"]["customer"]["browserId"] = $model->history[$index11]->ancestor->customer->browserId;
}
if (null !== $model->history[$index11]->ancestor->customer->site) {
    $jsonData["history"][$index11]["ancestor"]["customer"]["site"] = $model->history[$index11]->ancestor->customer->site;
}
if (null !== $model->history[$index11]->ancestor->customer->contragent) {
    $jsonData["history"][$index11]["ancestor"]["customer"]["contragent"] = [];
if (null !== $model->history[$index11]->ancestor->customer->contragent->contragentType) {
    $jsonData["history"][$index11]["ancestor"]["customer"]["contragent"]["contragentType"] = $model->history[$index11]->ancestor->customer->contragent->contragentType;
}
if (null !== $model->history[$index11]->ancestor->customer->contragent->legalName) {
    $jsonData["history"][$index11]["ancestor"]["customer"]["contragent"]["legalName"] = $model->history[$index11]->ancestor->customer->contragent->legalName;
}
if (null !== $model->history[$index11]->ancestor->customer->contragent->legalAddress) {
    $jsonData["history"][$index11]["ancestor"]["customer"]["contragent"]["legalAddress"] = $model->history[$index11]->ancestor->customer->contragent->legalAddress;
}
if (null !== $model->history[$index11]->ancestor->customer->contragent->INN) {
    $jsonData["history"][$index11]["ancestor"]["customer"]["contragent"]["INN"] = $model->history[$index11]->ancestor->customer->contragent->INN;
}
if (null !== $model->history[$index11]->ancestor->customer->contragent->OKPO) {
    $jsonData["history"][$index11]["ancestor"]["customer"]["contragent"]["OKPO"] = $model->history[$index11]->ancestor->customer->contragent->OKPO;
}
if (null !== $model->history[$index11]->ancestor->customer->contragent->KPP) {
    $jsonData["history"][$index11]["ancestor"]["customer"]["contragent"]["KPP"] = $model->history[$index11]->ancestor->customer->contragent->KPP;
}
if (null !== $model->history[$index11]->ancestor->customer->contragent->OGRN) {
    $jsonData["history"][$index11]["ancestor"]["customer"]["contragent"]["OGRN"] = $model->history[$index11]->ancestor->customer->contragent->OGRN;
}
if (null !== $model->history[$index11]->ancestor->customer->contragent->OGRNIP) {
    $jsonData["history"][$index11]["ancestor"]["customer"]["contragent"]["OGRNIP"] = $model->history[$index11]->ancestor->customer->contragent->OGRNIP;
}
if (null !== $model->history[$index11]->ancestor->customer->contragent->certificateNumber) {
    $jsonData["history"][$index11]["ancestor"]["customer"]["contragent"]["certificateNumber"] = $model->history[$index11]->ancestor->customer->contragent->certificateNumber;
}
if (null !== $model->history[$index11]->ancestor->customer->contragent->certificateDate) {
    $jsonData["history"][$index11]["ancestor"]["customer"]["contragent"]["certificateDate"] = $model->history[$index11]->ancestor->customer->contragent->certificateDate->format('Y-m-d H:i:s');;
}
if (null !== $model->history[$index11]->ancestor->customer->contragent->BIK) {
    $jsonData["history"][$index11]["ancestor"]["customer"]["contragent"]["BIK"] = $model->history[$index11]->ancestor->customer->contragent->BIK;
}
if (null !== $model->history[$index11]->ancestor->customer->contragent->bank) {
    $jsonData["history"][$index11]["ancestor"]["customer"]["contragent"]["bank"] = $model->history[$index11]->ancestor->customer->contragent->bank;
}
if (null !== $model->history[$index11]->ancestor->customer->contragent->bankAddress) {
    $jsonData["history"][$index11]["ancestor"]["customer"]["contragent"]["bankAddress"] = $model->history[$index11]->ancestor->customer->contragent->bankAddress;
}
if (null !== $model->history[$index11]->ancestor->customer->contragent->corrAccount) {
    $jsonData["history"][$index11]["ancestor"]["customer"]["contragent"]["corrAccount"] = $model->history[$index11]->ancestor->customer->contragent->corrAccount;
}
if (null !== $model->history[$index11]->ancestor->customer->contragent->bankAccount) {
    $jsonData["history"][$index11]["ancestor"]["customer"]["contragent"]["bankAccount"] = $model->history[$index11]->ancestor->customer->contragent->bankAccount;
}

if (0 === \count($jsonData["history"][$index11]["ancestor"]["customer"]["contragent"])) {
    $jsonData["history"][$index11]["ancestor"]["customer"]["contragent"] = $emptyObject;
}

}
if (null !== $model->history[$index11]->ancestor->customer->tags) {
    $jsonData["history"][$index11]["ancestor"]["customer"]["tags"] = [];
foreach (array_keys($model->history[$index11]->ancestor->customer->tags) as $index53) {
    $jsonData["history"][$index11]["ancestor"]["customer"]["tags"][$index53] = [];
if (null !== $model->history[$index11]->ancestor->customer->tags[$index53]->name) {
    $jsonData["history"][$index11]["ancestor"]["customer"]["tags"][$index53]["name"] = $model->history[$index11]->ancestor->customer->tags[$index53]->name;
}
if (null !== $model->history[$index11]->ancestor->customer->tags[$index53]->color) {
    $jsonData["history"][$index11]["ancestor"]["customer"]["tags"][$index53]["color"] = $model->history[$index11]->ancestor->customer->tags[$index53]->color;
}
if (null !== $model->history[$index11]->ancestor->customer->tags[$index53]->attached) {
    $jsonData["history"][$index11]["ancestor"]["customer"]["tags"][$index53]["attached"] = $model->history[$index11]->ancestor->customer->tags[$index53]->attached;
}

if (0 === \count($jsonData["history"][$index11]["ancestor"]["customer"]["tags"][$index53])) {
    $jsonData["history"][$index11]["ancestor"]["customer"]["tags"][$index53] = $emptyObject;
}

}

}
if (null !== $model->history[$index11]->ancestor->customer->avgMarginSumm) {
    $jsonData["history"][$index11]["ancestor"]["customer"]["avgMarginSumm"] = $model->history[$index11]->ancestor->customer->avgMarginSumm;
}
if (null !== $model->history[$index11]->ancestor->customer->marginSumm) {
    $jsonData["history"][$index11]["ancestor"]["customer"]["marginSumm"] = $model->history[$index11]->ancestor->customer->marginSumm;
}
if (null !== $model->history[$index11]->ancestor->customer->totalSumm) {
    $jsonData["history"][$index11]["ancestor"]["customer"]["totalSumm"] = $model->history[$index11]->ancestor->customer->totalSumm;
}
if (null !== $model->history[$index11]->ancestor->customer->averageSumm) {
    $jsonData["history"][$index11]["ancestor"]["customer"]["averageSumm"] = $model->history[$index11]->ancestor->customer->averageSumm;
}
if (null !== $model->history[$index11]->ancestor->customer->ordersCount) {
    $jsonData["history"][$index11]["ancestor"]["customer"]["ordersCount"] = $model->history[$index11]->ancestor->customer->ordersCount;
}
if (null !== $model->history[$index11]->ancestor->customer->costSumm) {
    $jsonData["history"][$index11]["ancestor"]["customer"]["costSumm"] = $model->history[$index11]->ancestor->customer->costSumm;
}
if (null !== $model->history[$index11]->ancestor->customer->customFields) {
    $jsonData["history"][$index11]["ancestor"]["customer"]["customFields"] = [];
foreach (array_keys($model->history[$index11]->ancestor->customer->customFields) as $index61) {
    $jsonData["history"][$index11]["ancestor"]["customer"]["customFields"] = $model->history[$index11]->ancestor->customer->customFields;
}

}
if (null !== $model->history[$index11]->ancestor->customer->personalDiscount) {
    $jsonData["history"][$index11]["ancestor"]["customer"]["personalDiscount"] = $model->history[$index11]->ancestor->customer->personalDiscount;
}
if (null !== $model->history[$index11]->ancestor->customer->cumulativeDiscount) {
    $jsonData["history"][$index11]["ancestor"]["customer"]["cumulativeDiscount"] = $model->history[$index11]->ancestor->customer->cumulativeDiscount;
}
if (null !== $model->history[$index11]->ancestor->customer->discountCardNumber) {
    $jsonData["history"][$index11]["ancestor"]["customer"]["discountCardNumber"] = $model->history[$index11]->ancestor->customer->discountCardNumber;
}
if (null !== $model->history[$index11]->ancestor->customer->firstClientId) {
    $jsonData["history"][$index11]["ancestor"]["customer"]["firstClientId"] = $model->history[$index11]->ancestor->customer->firstClientId;
}
if (null !== $model->history[$index11]->ancestor->customer->lastClientId) {
    $jsonData["history"][$index11]["ancestor"]["customer"]["lastClientId"] = $model->history[$index11]->ancestor->customer->lastClientId;
}
if (null !== $model->history[$index11]->ancestor->customer->address) {
    $jsonData["history"][$index11]["ancestor"]["customer"]["address"] = [];
if (null !== $model->history[$index11]->ancestor->customer->address->id) {
    $jsonData["history"][$index11]["ancestor"]["customer"]["address"]["id"] = $model->history[$index11]->ancestor->customer->address->id;
}
if (null !== $model->history[$index11]->ancestor->customer->address->name) {
    $jsonData["history"][$index11]["ancestor"]["customer"]["address"]["name"] = $model->history[$index11]->ancestor->customer->address->name;
}
if (null !== $model->history[$index11]->ancestor->customer->address->isMain) {
    $jsonData["history"][$index11]["ancestor"]["customer"]["address"]["isMain"] = $model->history[$index11]->ancestor->customer->address->isMain;
}
if (null !== $model->history[$index11]->ancestor->customer->address->index) {
    $jsonData["history"][$index11]["ancestor"]["customer"]["address"]["index"] = $model->history[$index11]->ancestor->customer->address->index;
}
if (null !== $model->history[$index11]->ancestor->customer->address->countryIso) {
    $jsonData["history"][$index11]["ancestor"]["customer"]["address"]["countryIso"] = $model->history[$index11]->ancestor->customer->address->countryIso;
}
if (null !== $model->history[$index11]->ancestor->customer->address->region) {
    $jsonData["history"][$index11]["ancestor"]["customer"]["address"]["region"] = $model->history[$index11]->ancestor->customer->address->region;
}
if (null !== $model->history[$index11]->ancestor->customer->address->regionId) {
    $jsonData["history"][$index11]["ancestor"]["customer"]["address"]["regionId"] = $model->history[$index11]->ancestor->customer->address->regionId;
}
if (null !== $model->history[$index11]->ancestor->customer->address->city) {
    $jsonData["history"][$index11]["ancestor"]["customer"]["address"]["city"] = $model->history[$index11]->ancestor->customer->address->city;
}
if (null !== $model->history[$index11]->ancestor->customer->address->cityId) {
    $jsonData["history"][$index11]["ancestor"]["customer"]["address"]["cityId"] = $model->history[$index11]->ancestor->customer->address->cityId;
}
if (null !== $model->history[$index11]->ancestor->customer->address->cityType) {
    $jsonData["history"][$index11]["ancestor"]["customer"]["address"]["cityType"] = $model->history[$index11]->ancestor->customer->address->cityType;
}
if (null !== $model->history[$index11]->ancestor->customer->address->street) {
    $jsonData["history"][$index11]["ancestor"]["customer"]["address"]["street"] = $model->history[$index11]->ancestor->customer->address->street;
}
if (null !== $model->history[$index11]->ancestor->customer->address->streetId) {
    $jsonData["history"][$index11]["ancestor"]["customer"]["address"]["streetId"] = $model->history[$index11]->ancestor->customer->address->streetId;
}
if (null !== $model->history[$index11]->ancestor->customer->address->streetType) {
    $jsonData["history"][$index11]["ancestor"]["customer"]["address"]["streetType"] = $model->history[$index11]->ancestor->customer->address->streetType;
}
if (null !== $model->history[$index11]->ancestor->customer->address->building) {
    $jsonData["history"][$index11]["ancestor"]["customer"]["address"]["building"] = $model->history[$index11]->ancestor->customer->address->building;
}
if (null !== $model->history[$index11]->ancestor->customer->address->flat) {
    $jsonData["history"][$index11]["ancestor"]["customer"]["address"]["flat"] = $model->history[$index11]->ancestor->customer->address->flat;
}
if (null !== $model->history[$index11]->ancestor->customer->address->floor) {
    $jsonData["history"][$index11]["ancestor"]["customer"]["address"]["floor"] = $model->history[$index11]->ancestor->customer->address->floor;
}
if (null !== $model->history[$index11]->ancestor->customer->address->block) {
    $jsonData["history"][$index11]["ancestor"]["customer"]["address"]["block"] = $model->history[$index11]->ancestor->customer->address->block;
}
if (null !== $model->history[$index11]->ancestor->customer->address->house) {
    $jsonData["history"][$index11]["ancestor"]["customer"]["address"]["house"] = $model->history[$index11]->ancestor->customer->address->house;
}
if (null !== $model->history[$index11]->ancestor->customer->address->housing) {
    $jsonData["history"][$index11]["ancestor"]["customer"]["address"]["housing"] = $model->history[$index11]->ancestor->customer->address->housing;
}
if (null !== $model->history[$index11]->ancestor->customer->address->metro) {
    $jsonData["history"][$index11]["ancestor"]["customer"]["address"]["metro"] = $model->history[$index11]->ancestor->customer->address->metro;
}
if (null !== $model->history[$index11]->ancestor->customer->address->notes) {
    $jsonData["history"][$index11]["ancestor"]["customer"]["address"]["notes"] = $model->history[$index11]->ancestor->customer->address->notes;
}
if (null !== $model->history[$index11]->ancestor->customer->address->text) {
    $jsonData["history"][$index11]["ancestor"]["customer"]["address"]["text"] = $model->history[$index11]->ancestor->customer->address->text;
}
if (null !== $model->history[$index11]->ancestor->customer->address->externalId) {
    $jsonData["history"][$index11]["ancestor"]["customer"]["address"]["externalId"] = $model->history[$index11]->ancestor->customer->address->externalId;
}

if (0 === \count($jsonData["history"][$index11]["ancestor"]["customer"]["address"])) {
    $jsonData["history"][$index11]["ancestor"]["customer"]["address"] = $emptyObject;
}

}
if (null !== $model->history[$index11]->ancestor->customer->segments) {
    $jsonData["history"][$index11]["ancestor"]["customer"]["segments"] = [];
foreach (array_keys($model->history[$index11]->ancestor->customer->segments) as $index57) {
    $jsonData["history"][$index11]["ancestor"]["customer"]["segments"][$index57] = [];
if (null !== $model->history[$index11]->ancestor->customer->segments[$index57]->id) {
    $jsonData["history"][$index11]["ancestor"]["customer"]["segments"][$index57]["id"] = $model->history[$index11]->ancestor->customer->segments[$index57]->id;
}
if (null !== $model->history[$index11]->ancestor->customer->segments[$index57]->code) {
    $jsonData["history"][$index11]["ancestor"]["customer"]["segments"][$index57]["code"] = $model->history[$index11]->ancestor->customer->segments[$index57]->code;
}
if (null !== $model->history[$index11]->ancestor->customer->segments[$index57]->name) {
    $jsonData["history"][$index11]["ancestor"]["customer"]["segments"][$index57]["name"] = $model->history[$index11]->ancestor->customer->segments[$index57]->name;
}
if (null !== $model->history[$index11]->ancestor->customer->segments[$index57]->createdAt) {
    $jsonData["history"][$index11]["ancestor"]["customer"]["segments"][$index57]["createdAt"] = $model->history[$index11]->ancestor->customer->segments[$index57]->createdAt->format('Y-m-d H:i:s');;
}
if (null !== $model->history[$index11]->ancestor->customer->segments[$index57]->isDynamic) {
    $jsonData["history"][$index11]["ancestor"]["customer"]["segments"][$index57]["isDynamic"] = $model->history[$index11]->ancestor->customer->segments[$index57]->isDynamic;
}
if (null !== $model->history[$index11]->ancestor->customer->segments[$index57]->customersCount) {
    $jsonData["history"][$index11]["ancestor"]["customer"]["segments"][$index57]["customersCount"] = $model->history[$index11]->ancestor->customer->segments[$index57]->customersCount;
}
if (null !== $model->history[$index11]->ancestor->customer->segments[$index57]->active) {
    $jsonData["history"][$index11]["ancestor"]["customer"]["segments"][$index57]["active"] = $model->history[$index11]->ancestor->customer->segments[$index57]->active;
}

if (0 === \count($jsonData["history"][$index11]["ancestor"]["customer"]["segments"][$index57])) {
    $jsonData["history"][$index11]["ancestor"]["customer"]["segments"][$index57] = $emptyObject;
}

}

}
if (null !== $model->history[$index11]->ancestor->customer->maturationTime) {
    $jsonData["history"][$index11]["ancestor"]["customer"]["maturationTime"] = $model->history[$index11]->ancestor->customer->maturationTime;
}
if (null !== $model->history[$index11]->ancestor->customer->firstName) {
    $jsonData["history"][$index11]["ancestor"]["customer"]["firstName"] = $model->history[$index11]->ancestor->customer->firstName;
}
if (null !== $model->history[$index11]->ancestor->customer->lastName) {
    $jsonData["history"][$index11]["ancestor"]["customer"]["lastName"] = $model->history[$index11]->ancestor->customer->lastName;
}
if (null !== $model->history[$index11]->ancestor->customer->patronymic) {
    $jsonData["history"][$index11]["ancestor"]["customer"]["patronymic"] = $model->history[$index11]->ancestor->customer->patronymic;
}
if (null !== $model->history[$index11]->ancestor->customer->sex) {
    $jsonData["history"][$index11]["ancestor"]["customer"]["sex"] = $model->history[$index11]->ancestor->customer->sex;
}
if (null !== $model->history[$index11]->ancestor->customer->presumableSex) {
    $jsonData["history"][$index11]["ancestor"]["customer"]["presumableSex"] = $model->history[$index11]->ancestor->customer->presumableSex;
}
if (null !== $model->history[$index11]->ancestor->customer->email) {
    $jsonData["history"][$index11]["ancestor"]["customer"]["email"] = $model->history[$index11]->ancestor->customer->email;
}
if (null !== $model->history[$index11]->ancestor->customer->emailMarketingUnsubscribedAt) {
    $jsonData["history"][$index11]["ancestor"]["customer"]["emailMarketingUnsubscribedAt"] = $model->history[$index11]->ancestor->customer->emailMarketingUnsubscribedAt->format('Y-m-d H:i:s');;
}
if (null !== $model->history[$index11]->ancestor->customer->phones) {
    $jsonData["history"][$index11]["ancestor"]["customer"]["phones"] = [];
foreach (array_keys($model->history[$index11]->ancestor->customer->phones) as $index55) {
    $jsonData["history"][$index11]["ancestor"]["customer"]["phones"][$index55] = [];
if (null !== $model->history[$index11]->ancestor->customer->phones[$index55]->number) {
    $jsonData["history"][$index11]["ancestor"]["customer"]["phones"][$index55]["number"] = $model->history[$index11]->ancestor->customer->phones[$index55]->number;
}

if (0 === \count($jsonData["history"][$index11]["ancestor"]["customer"]["phones"][$index55])) {
    $jsonData["history"][$index11]["ancestor"]["customer"]["phones"][$index55] = $emptyObject;
}

}

}
if (null !== $model->history[$index11]->ancestor->customer->birthday) {
    $jsonData["history"][$index11]["ancestor"]["customer"]["birthday"] = $model->history[$index11]->ancestor->customer->birthday->format('Y-m-d H:i:s');;
}
if (null !== $model->history[$index11]->ancestor->customer->source) {
    $jsonData["history"][$index11]["ancestor"]["customer"]["source"] = [];
if (null !== $model->history[$index11]->ancestor->customer->source->source) {
    $jsonData["history"][$index11]["ancestor"]["customer"]["source"]["source"] = $model->history[$index11]->ancestor->customer->source->source;
}
if (null !== $model->history[$index11]->ancestor->customer->source->medium) {
    $jsonData["history"][$index11]["ancestor"]["customer"]["source"]["medium"] = $model->history[$index11]->ancestor->customer->source->medium;
}
if (null !== $model->history[$index11]->ancestor->customer->source->campaign) {
    $jsonData["history"][$index11]["ancestor"]["customer"]["source"]["campaign"] = $model->history[$index11]->ancestor->customer->source->campaign;
}
if (null !== $model->history[$index11]->ancestor->customer->source->keyword) {
    $jsonData["history"][$index11]["ancestor"]["customer"]["source"]["keyword"] = $model->history[$index11]->ancestor->customer->source->keyword;
}
if (null !== $model->history[$index11]->ancestor->customer->source->content) {
    $jsonData["history"][$index11]["ancestor"]["customer"]["source"]["content"] = $model->history[$index11]->ancestor->customer->source->content;
}

if (0 === \count($jsonData["history"][$index11]["ancestor"]["customer"]["source"])) {
    $jsonData["history"][$index11]["ancestor"]["customer"]["source"] = $emptyObject;
}

}
if (null !== $model->history[$index11]->ancestor->customer->photoUrl) {
    $jsonData["history"][$index11]["ancestor"]["customer"]["photoUrl"] = $model->history[$index11]->ancestor->customer->photoUrl;
}
if (null !== $model->history[$index11]->ancestor->customer->mgCustomerId) {
    $jsonData["history"][$index11]["ancestor"]["customer"]["mgCustomerId"] = $model->history[$index11]->ancestor->customer->mgCustomerId;
}
if (null !== $model->history[$index11]->ancestor->customer->subscribed) {
    $jsonData["history"][$index11]["ancestor"]["customer"]["subscribed"] = $model->history[$index11]->ancestor->customer->subscribed;
}

if (0 === \count($jsonData["history"][$index11]["ancestor"]["customer"])) {
    $jsonData["history"][$index11]["ancestor"]["customer"] = $emptyObject;
}

} elseif ($model->history[$index11]->ancestor->customer instanceof \RetailCrm\Api\Model\Entity\CustomersCorporate\CustomerCorporate) {
    $jsonData["history"][$index11]["ancestor"]["customer"] = [];
if (null !== $model->history[$index11]->ancestor->customer->type) {
    $jsonData["history"][$index11]["ancestor"]["customer"]["type"] = $model->history[$index11]->ancestor->customer->type;
}
if (null !== $model->history[$index11]->ancestor->customer->id) {
    $jsonData["history"][$index11]["ancestor"]["customer"]["id"] = $model->history[$index11]->ancestor->customer->id;
}
if (null !== $model->history[$index11]->ancestor->customer->externalId) {
    $jsonData["history"][$index11]["ancestor"]["customer"]["externalId"] = $model->history[$index11]->ancestor->customer->externalId;
}
if (null !== $model->history[$index11]->ancestor->customer->nickName) {
    $jsonData["history"][$index11]["ancestor"]["customer"]["nickName"] = $model->history[$index11]->ancestor->customer->nickName;
}
if (null !== $model->history[$index11]->ancestor->customer->mainAddress) {
    $jsonData["history"][$index11]["ancestor"]["customer"]["mainAddress"] = [];
if (null !== $model->history[$index11]->ancestor->customer->mainAddress->id) {
    $jsonData["history"][$index11]["ancestor"]["customer"]["mainAddress"]["id"] = $model->history[$index11]->ancestor->customer->mainAddress->id;
}
if (null !== $model->history[$index11]->ancestor->customer->mainAddress->externalId) {
    $jsonData["history"][$index11]["ancestor"]["customer"]["mainAddress"]["externalId"] = $model->history[$index11]->ancestor->customer->mainAddress->externalId;
}
if (null !== $model->history[$index11]->ancestor->customer->mainAddress->name) {
    $jsonData["history"][$index11]["ancestor"]["customer"]["mainAddress"]["name"] = $model->history[$index11]->ancestor->customer->mainAddress->name;
}

if (0 === \count($jsonData["history"][$index11]["ancestor"]["customer"]["mainAddress"])) {
    $jsonData["history"][$index11]["ancestor"]["customer"]["mainAddress"] = $emptyObject;
}

}
if (null !== $model->history[$index11]->ancestor->customer->createdAt) {
    $jsonData["history"][$index11]["ancestor"]["customer"]["createdAt"] = $model->history[$index11]->ancestor->customer->createdAt->format('Y-m-d H:i:s');;
}
if (null !== $model->history[$index11]->ancestor->customer->managerId) {
    $jsonData["history"][$index11]["ancestor"]["customer"]["managerId"] = $model->history[$index11]->ancestor->customer->managerId;
}
if (null !== $model->history[$index11]->ancestor->customer->source) {
    $jsonData["history"][$index11]["ancestor"]["customer"]["source"] = [];
if (null !== $model->history[$index11]->ancestor->customer->source->source) {
    $jsonData["history"][$index11]["ancestor"]["customer"]["source"]["source"] = $model->history[$index11]->ancestor->customer->source->source;
}
if (null !== $model->history[$index11]->ancestor->customer->source->medium) {
    $jsonData["history"][$index11]["ancestor"]["customer"]["source"]["medium"] = $model->history[$index11]->ancestor->customer->source->medium;
}
if (null !== $model->history[$index11]->ancestor->customer->source->campaign) {
    $jsonData["history"][$index11]["ancestor"]["customer"]["source"]["campaign"] = $model->history[$index11]->ancestor->customer->source->campaign;
}
if (null !== $model->history[$index11]->ancestor->customer->source->keyword) {
    $jsonData["history"][$index11]["ancestor"]["customer"]["source"]["keyword"] = $model->history[$index11]->ancestor->customer->source->keyword;
}
if (null !== $model->history[$index11]->ancestor->customer->source->content) {
    $jsonData["history"][$index11]["ancestor"]["customer"]["source"]["content"] = $model->history[$index11]->ancestor->customer->source->content;
}

if (0 === \count($jsonData["history"][$index11]["ancestor"]["customer"]["source"])) {
    $jsonData["history"][$index11]["ancestor"]["customer"]["source"] = $emptyObject;
}

}
if (null !== $model->history[$index11]->ancestor->customer->customerContacts) {
    $jsonData["history"][$index11]["ancestor"]["customer"]["customerContacts"] = [];
foreach (array_keys($model->history[$index11]->ancestor->customer->customerContacts) as $index65) {
    $jsonData["history"][$index11]["ancestor"]["customer"]["customerContacts"][$index65] = [];
if (null !== $model->history[$index11]->ancestor->customer->customerContacts[$index65]->id) {
    $jsonData["history"][$index11]["ancestor"]["customer"]["customerContacts"][$index65]["id"] = $model->history[$index11]->ancestor->customer->customerContacts[$index65]->id;
}
if (null !== $model->history[$index11]->ancestor->customer->customerContacts[$index65]->isMain) {
    $jsonData["history"][$index11]["ancestor"]["customer"]["customerContacts"][$index65]["isMain"] = $model->history[$index11]->ancestor->customer->customerContacts[$index65]->isMain;
}
if (null !== $model->history[$index11]->ancestor->customer->customerContacts[$index65]->customer) {
    $jsonData["history"][$index11]["ancestor"]["customer"]["customerContacts"][$index65]["customer"] = [];
if (null !== $model->history[$index11]->ancestor->customer->customerContacts[$index65]->customer->id) {
    $jsonData["history"][$index11]["ancestor"]["customer"]["customerContacts"][$index65]["customer"]["id"] = $model->history[$index11]->ancestor->customer->customerContacts[$index65]->customer->id;
}
if (null !== $model->history[$index11]->ancestor->customer->customerContacts[$index65]->customer->externalId) {
    $jsonData["history"][$index11]["ancestor"]["customer"]["customerContacts"][$index65]["customer"]["externalId"] = $model->history[$index11]->ancestor->customer->customerContacts[$index65]->customer->externalId;
}
if (null !== $model->history[$index11]->ancestor->customer->customerContacts[$index65]->customer->browserId) {
    $jsonData["history"][$index11]["ancestor"]["customer"]["customerContacts"][$index65]["customer"]["browserId"] = $model->history[$index11]->ancestor->customer->customerContacts[$index65]->customer->browserId;
}
if (null !== $model->history[$index11]->ancestor->customer->customerContacts[$index65]->customer->site) {
    $jsonData["history"][$index11]["ancestor"]["customer"]["customerContacts"][$index65]["customer"]["site"] = $model->history[$index11]->ancestor->customer->customerContacts[$index65]->customer->site;
}
if (null !== $model->history[$index11]->ancestor->customer->customerContacts[$index65]->customer->companies) {
    $jsonData["history"][$index11]["ancestor"]["customer"]["customerContacts"][$index65]["customer"]["companies"] = [];
foreach (array_keys($model->history[$index11]->ancestor->customer->customerContacts[$index65]->customer->companies) as $index100) {
    $jsonData["history"][$index11]["ancestor"]["customer"]["customerContacts"][$index65]["customer"]["companies"][$index100] = [];
if (null !== $model->history[$index11]->ancestor->customer->customerContacts[$index65]->customer->companies[$index100]->id) {
    $jsonData["history"][$index11]["ancestor"]["customer"]["customerContacts"][$index65]["customer"]["companies"][$index100]["id"] = $model->history[$index11]->ancestor->customer->customerContacts[$index65]->customer->companies[$index100]->id;
}
if (null !== $model->history[$index11]->ancestor->customer->customerContacts[$index65]->customer->companies[$index100]->externalId) {
    $jsonData["history"][$index11]["ancestor"]["customer"]["customerContacts"][$index65]["customer"]["companies"][$index100]["externalId"] = $model->history[$index11]->ancestor->customer->customerContacts[$index65]->customer->companies[$index100]->externalId;
}
if (null !== $model->history[$index11]->ancestor->customer->customerContacts[$index65]->customer->companies[$index100]->company) {
    $jsonData["history"][$index11]["ancestor"]["customer"]["customerContacts"][$index65]["customer"]["companies"][$index100]["company"] = [];
if (null !== $model->history[$index11]->ancestor->customer->customerContacts[$index65]->customer->companies[$index100]->company->id) {
    $jsonData["history"][$index11]["ancestor"]["customer"]["customerContacts"][$index65]["customer"]["companies"][$index100]["company"]["id"] = $model->history[$index11]->ancestor->customer->customerContacts[$index65]->customer->companies[$index100]->company->id;
}
if (null !== $model->history[$index11]->ancestor->customer->customerContacts[$index65]->customer->companies[$index100]->company->externalId) {
    $jsonData["history"][$index11]["ancestor"]["customer"]["customerContacts"][$index65]["customer"]["companies"][$index100]["company"]["externalId"] = $model->history[$index11]->ancestor->customer->customerContacts[$index65]->customer->companies[$index100]->company->externalId;
}
if (null !== $model->history[$index11]->ancestor->customer->customerContacts[$index65]->customer->companies[$index100]->company->name) {
    $jsonData["history"][$index11]["ancestor"]["customer"]["customerContacts"][$index65]["customer"]["companies"][$index100]["company"]["name"] = $model->history[$index11]->ancestor->customer->customerContacts[$index65]->customer->companies[$index100]->company->name;
}

if (0 === \count($jsonData["history"][$index11]["ancestor"]["customer"]["customerContacts"][$index65]["customer"]["companies"][$index100]["company"])) {
    $jsonData["history"][$index11]["ancestor"]["customer"]["customerContacts"][$index65]["customer"]["companies"][$index100]["company"] = $emptyObject;
}

}

if (0 === \count($jsonData["history"][$index11]["ancestor"]["customer"]["customerContacts"][$index65]["customer"]["companies"][$index100])) {
    $jsonData["history"][$index11]["ancestor"]["customer"]["customerContacts"][$index65]["customer"]["companies"][$index100] = $emptyObject;
}

}

}

if (0 === \count($jsonData["history"][$index11]["ancestor"]["customer"]["customerContacts"][$index65]["customer"])) {
    $jsonData["history"][$index11]["ancestor"]["customer"]["customerContacts"][$index65]["customer"] = $emptyObject;
}

}
if (null !== $model->history[$index11]->ancestor->customer->customerContacts[$index65]->companies) {
    $jsonData["history"][$index11]["ancestor"]["customer"]["customerContacts"][$index65]["companies"] = [];
foreach (array_keys($model->history[$index11]->ancestor->customer->customerContacts[$index65]->companies) as $index88) {
    $jsonData["history"][$index11]["ancestor"]["customer"]["customerContacts"][$index65]["companies"][$index88] = [];
if (null !== $model->history[$index11]->ancestor->customer->customerContacts[$index65]->companies[$index88]->id) {
    $jsonData["history"][$index11]["ancestor"]["customer"]["customerContacts"][$index65]["companies"][$index88]["id"] = $model->history[$index11]->ancestor->customer->customerContacts[$index65]->companies[$index88]->id;
}
if (null !== $model->history[$index11]->ancestor->customer->customerContacts[$index65]->companies[$index88]->externalId) {
    $jsonData["history"][$index11]["ancestor"]["customer"]["customerContacts"][$index65]["companies"][$index88]["externalId"] = $model->history[$index11]->ancestor->customer->customerContacts[$index65]->companies[$index88]->externalId;
}
if (null !== $model->history[$index11]->ancestor->customer->customerContacts[$index65]->companies[$index88]->company) {
    $jsonData["history"][$index11]["ancestor"]["customer"]["customerContacts"][$index65]["companies"][$index88]["company"] = [];
if (null !== $model->history[$index11]->ancestor->customer->customerContacts[$index65]->companies[$index88]->company->id) {
    $jsonData["history"][$index11]["ancestor"]["customer"]["customerContacts"][$index65]["companies"][$index88]["company"]["id"] = $model->history[$index11]->ancestor->customer->customerContacts[$index65]->companies[$index88]->company->id;
}
if (null !== $model->history[$index11]->ancestor->customer->customerContacts[$index65]->companies[$index88]->company->externalId) {
    $jsonData["history"][$index11]["ancestor"]["customer"]["customerContacts"][$index65]["companies"][$index88]["company"]["externalId"] = $model->history[$index11]->ancestor->customer->customerContacts[$index65]->companies[$index88]->company->externalId;
}
if (null !== $model->history[$index11]->ancestor->customer->customerContacts[$index65]->companies[$index88]->company->name) {
    $jsonData["history"][$index11]["ancestor"]["customer"]["customerContacts"][$index65]["companies"][$index88]["company"]["name"] = $model->history[$index11]->ancestor->customer->customerContacts[$index65]->companies[$index88]->company->name;
}

if (0 === \count($jsonData["history"][$index11]["ancestor"]["customer"]["customerContacts"][$index65]["companies"][$index88]["company"])) {
    $jsonData["history"][$index11]["ancestor"]["customer"]["customerContacts"][$index65]["companies"][$index88]["company"] = $emptyObject;
}

}

if (0 === \count($jsonData["history"][$index11]["ancestor"]["customer"]["customerContacts"][$index65]["companies"][$index88])) {
    $jsonData["history"][$index11]["ancestor"]["customer"]["customerContacts"][$index65]["companies"][$index88] = $emptyObject;
}

}

}

if (0 === \count($jsonData["history"][$index11]["ancestor"]["customer"]["customerContacts"][$index65])) {
    $jsonData["history"][$index11]["ancestor"]["customer"]["customerContacts"][$index65] = $emptyObject;
}

}

}
if (null !== $model->history[$index11]->ancestor->customer->companies) {
    $jsonData["history"][$index11]["ancestor"]["customer"]["companies"] = [];
foreach (array_keys($model->history[$index11]->ancestor->customer->companies) as $index58) {
    $jsonData["history"][$index11]["ancestor"]["customer"]["companies"][$index58] = [];
if (null !== $model->history[$index11]->ancestor->customer->companies[$index58]->id) {
    $jsonData["history"][$index11]["ancestor"]["customer"]["companies"][$index58]["id"] = $model->history[$index11]->ancestor->customer->companies[$index58]->id;
}
if (null !== $model->history[$index11]->ancestor->customer->companies[$index58]->isMain) {
    $jsonData["history"][$index11]["ancestor"]["customer"]["companies"][$index58]["isMain"] = $model->history[$index11]->ancestor->customer->companies[$index58]->isMain;
}
if (null !== $model->history[$index11]->ancestor->customer->companies[$index58]->externalId) {
    $jsonData["history"][$index11]["ancestor"]["customer"]["companies"][$index58]["externalId"] = $model->history[$index11]->ancestor->customer->companies[$index58]->externalId;
}
if (null !== $model->history[$index11]->ancestor->customer->companies[$index58]->active) {
    $jsonData["history"][$index11]["ancestor"]["customer"]["companies"][$index58]["active"] = $model->history[$index11]->ancestor->customer->companies[$index58]->active;
}
if (null !== $model->history[$index11]->ancestor->customer->companies[$index58]->name) {
    $jsonData["history"][$index11]["ancestor"]["customer"]["companies"][$index58]["name"] = $model->history[$index11]->ancestor->customer->companies[$index58]->name;
}
if (null !== $model->history[$index11]->ancestor->customer->companies[$index58]->brand) {
    $jsonData["history"][$index11]["ancestor"]["customer"]["companies"][$index58]["brand"] = $model->history[$index11]->ancestor->customer->companies[$index58]->brand;
}
if (null !== $model->history[$index11]->ancestor->customer->companies[$index58]->site) {
    $jsonData["history"][$index11]["ancestor"]["customer"]["companies"][$index58]["site"] = $model->history[$index11]->ancestor->customer->companies[$index58]->site;
}
if (null !== $model->history[$index11]->ancestor->customer->companies[$index58]->createdAt) {
    $jsonData["history"][$index11]["ancestor"]["customer"]["companies"][$index58]["createdAt"] = $model->history[$index11]->ancestor->customer->companies[$index58]->createdAt->format('Y-m-d H:i:s');;
}
if (null !== $model->history[$index11]->ancestor->customer->companies[$index58]->customer) {
    $jsonData["history"][$index11]["ancestor"]["customer"]["companies"][$index58]["customer"] = [];
if (null !== $model->history[$index11]->ancestor->customer->companies[$index58]->customer->site) {
    $jsonData["history"][$index11]["ancestor"]["customer"]["companies"][$index58]["customer"]["site"] = $model->history[$index11]->ancestor->customer->companies[$index58]->customer->site;
}
if (null !== $model->history[$index11]->ancestor->customer->companies[$index58]->customer->id) {
    $jsonData["history"][$index11]["ancestor"]["customer"]["companies"][$index58]["customer"]["id"] = $model->history[$index11]->ancestor->customer->companies[$index58]->customer->id;
}
if (null !== $model->history[$index11]->ancestor->customer->companies[$index58]->customer->externalId) {
    $jsonData["history"][$index11]["ancestor"]["customer"]["companies"][$index58]["customer"]["externalId"] = $model->history[$index11]->ancestor->customer->companies[$index58]->customer->externalId;
}
if (null !== $model->history[$index11]->ancestor->customer->companies[$index58]->customer->type) {
    $jsonData["history"][$index11]["ancestor"]["customer"]["companies"][$index58]["customer"]["type"] = $model->history[$index11]->ancestor->customer->companies[$index58]->customer->type;
}

if (0 === \count($jsonData["history"][$index11]["ancestor"]["customer"]["companies"][$index58]["customer"])) {
    $jsonData["history"][$index11]["ancestor"]["customer"]["companies"][$index58]["customer"] = $emptyObject;
}

}
if (null !== $model->history[$index11]->ancestor->customer->companies[$index58]->contragent) {
    $jsonData["history"][$index11]["ancestor"]["customer"]["companies"][$index58]["contragent"] = [];
if (null !== $model->history[$index11]->ancestor->customer->companies[$index58]->contragent->contragentType) {
    $jsonData["history"][$index11]["ancestor"]["customer"]["companies"][$index58]["contragent"]["contragentType"] = $model->history[$index11]->ancestor->customer->companies[$index58]->contragent->contragentType;
}
if (null !== $model->history[$index11]->ancestor->customer->companies[$index58]->contragent->legalName) {
    $jsonData["history"][$index11]["ancestor"]["customer"]["companies"][$index58]["contragent"]["legalName"] = $model->history[$index11]->ancestor->customer->companies[$index58]->contragent->legalName;
}
if (null !== $model->history[$index11]->ancestor->customer->companies[$index58]->contragent->legalAddress) {
    $jsonData["history"][$index11]["ancestor"]["customer"]["companies"][$index58]["contragent"]["legalAddress"] = $model->history[$index11]->ancestor->customer->companies[$index58]->contragent->legalAddress;
}
if (null !== $model->history[$index11]->ancestor->customer->companies[$index58]->contragent->INN) {
    $jsonData["history"][$index11]["ancestor"]["customer"]["companies"][$index58]["contragent"]["INN"] = $model->history[$index11]->ancestor->customer->companies[$index58]->contragent->INN;
}
if (null !== $model->history[$index11]->ancestor->customer->companies[$index58]->contragent->OKPO) {
    $jsonData["history"][$index11]["ancestor"]["customer"]["companies"][$index58]["contragent"]["OKPO"] = $model->history[$index11]->ancestor->customer->companies[$index58]->contragent->OKPO;
}
if (null !== $model->history[$index11]->ancestor->customer->companies[$index58]->contragent->KPP) {
    $jsonData["history"][$index11]["ancestor"]["customer"]["companies"][$index58]["contragent"]["KPP"] = $model->history[$index11]->ancestor->customer->companies[$index58]->contragent->KPP;
}
if (null !== $model->history[$index11]->ancestor->customer->companies[$index58]->contragent->OGRN) {
    $jsonData["history"][$index11]["ancestor"]["customer"]["companies"][$index58]["contragent"]["OGRN"] = $model->history[$index11]->ancestor->customer->companies[$index58]->contragent->OGRN;
}
if (null !== $model->history[$index11]->ancestor->customer->companies[$index58]->contragent->OGRNIP) {
    $jsonData["history"][$index11]["ancestor"]["customer"]["companies"][$index58]["contragent"]["OGRNIP"] = $model->history[$index11]->ancestor->customer->companies[$index58]->contragent->OGRNIP;
}
if (null !== $model->history[$index11]->ancestor->customer->companies[$index58]->contragent->certificateNumber) {
    $jsonData["history"][$index11]["ancestor"]["customer"]["companies"][$index58]["contragent"]["certificateNumber"] = $model->history[$index11]->ancestor->customer->companies[$index58]->contragent->certificateNumber;
}
if (null !== $model->history[$index11]->ancestor->customer->companies[$index58]->contragent->certificateDate) {
    $jsonData["history"][$index11]["ancestor"]["customer"]["companies"][$index58]["contragent"]["certificateDate"] = $model->history[$index11]->ancestor->customer->companies[$index58]->contragent->certificateDate->format('Y-m-d H:i:s');;
}
if (null !== $model->history[$index11]->ancestor->customer->companies[$index58]->contragent->BIK) {
    $jsonData["history"][$index11]["ancestor"]["customer"]["companies"][$index58]["contragent"]["BIK"] = $model->history[$index11]->ancestor->customer->companies[$index58]->contragent->BIK;
}
if (null !== $model->history[$index11]->ancestor->customer->companies[$index58]->contragent->bank) {
    $jsonData["history"][$index11]["ancestor"]["customer"]["companies"][$index58]["contragent"]["bank"] = $model->history[$index11]->ancestor->customer->companies[$index58]->contragent->bank;
}
if (null !== $model->history[$index11]->ancestor->customer->companies[$index58]->contragent->bankAddress) {
    $jsonData["history"][$index11]["ancestor"]["customer"]["companies"][$index58]["contragent"]["bankAddress"] = $model->history[$index11]->ancestor->customer->companies[$index58]->contragent->bankAddress;
}
if (null !== $model->history[$index11]->ancestor->customer->companies[$index58]->contragent->corrAccount) {
    $jsonData["history"][$index11]["ancestor"]["customer"]["companies"][$index58]["contragent"]["corrAccount"] = $model->history[$index11]->ancestor->customer->companies[$index58]->contragent->corrAccount;
}
if (null !== $model->history[$index11]->ancestor->customer->companies[$index58]->contragent->bankAccount) {
    $jsonData["history"][$index11]["ancestor"]["customer"]["companies"][$index58]["contragent"]["bankAccount"] = $model->history[$index11]->ancestor->customer->companies[$index58]->contragent->bankAccount;
}

if (0 === \count($jsonData["history"][$index11]["ancestor"]["customer"]["companies"][$index58]["contragent"])) {
    $jsonData["history"][$index11]["ancestor"]["customer"]["companies"][$index58]["contragent"] = $emptyObject;
}

}
if (null !== $model->history[$index11]->ancestor->customer->companies[$index58]->address) {
    $jsonData["history"][$index11]["ancestor"]["customer"]["companies"][$index58]["address"] = [];
if (null !== $model->history[$index11]->ancestor->customer->companies[$index58]->address->id) {
    $jsonData["history"][$index11]["ancestor"]["customer"]["companies"][$index58]["address"]["id"] = $model->history[$index11]->ancestor->customer->companies[$index58]->address->id;
}
if (null !== $model->history[$index11]->ancestor->customer->companies[$index58]->address->name) {
    $jsonData["history"][$index11]["ancestor"]["customer"]["companies"][$index58]["address"]["name"] = $model->history[$index11]->ancestor->customer->companies[$index58]->address->name;
}
if (null !== $model->history[$index11]->ancestor->customer->companies[$index58]->address->isMain) {
    $jsonData["history"][$index11]["ancestor"]["customer"]["companies"][$index58]["address"]["isMain"] = $model->history[$index11]->ancestor->customer->companies[$index58]->address->isMain;
}
if (null !== $model->history[$index11]->ancestor->customer->companies[$index58]->address->index) {
    $jsonData["history"][$index11]["ancestor"]["customer"]["companies"][$index58]["address"]["index"] = $model->history[$index11]->ancestor->customer->companies[$index58]->address->index;
}
if (null !== $model->history[$index11]->ancestor->customer->companies[$index58]->address->countryIso) {
    $jsonData["history"][$index11]["ancestor"]["customer"]["companies"][$index58]["address"]["countryIso"] = $model->history[$index11]->ancestor->customer->companies[$index58]->address->countryIso;
}
if (null !== $model->history[$index11]->ancestor->customer->companies[$index58]->address->region) {
    $jsonData["history"][$index11]["ancestor"]["customer"]["companies"][$index58]["address"]["region"] = $model->history[$index11]->ancestor->customer->companies[$index58]->address->region;
}
if (null !== $model->history[$index11]->ancestor->customer->companies[$index58]->address->regionId) {
    $jsonData["history"][$index11]["ancestor"]["customer"]["companies"][$index58]["address"]["regionId"] = $model->history[$index11]->ancestor->customer->companies[$index58]->address->regionId;
}
if (null !== $model->history[$index11]->ancestor->customer->companies[$index58]->address->city) {
    $jsonData["history"][$index11]["ancestor"]["customer"]["companies"][$index58]["address"]["city"] = $model->history[$index11]->ancestor->customer->companies[$index58]->address->city;
}
if (null !== $model->history[$index11]->ancestor->customer->companies[$index58]->address->cityId) {
    $jsonData["history"][$index11]["ancestor"]["customer"]["companies"][$index58]["address"]["cityId"] = $model->history[$index11]->ancestor->customer->companies[$index58]->address->cityId;
}
if (null !== $model->history[$index11]->ancestor->customer->companies[$index58]->address->cityType) {
    $jsonData["history"][$index11]["ancestor"]["customer"]["companies"][$index58]["address"]["cityType"] = $model->history[$index11]->ancestor->customer->companies[$index58]->address->cityType;
}
if (null !== $model->history[$index11]->ancestor->customer->companies[$index58]->address->street) {
    $jsonData["history"][$index11]["ancestor"]["customer"]["companies"][$index58]["address"]["street"] = $model->history[$index11]->ancestor->customer->companies[$index58]->address->street;
}
if (null !== $model->history[$index11]->ancestor->customer->companies[$index58]->address->streetId) {
    $jsonData["history"][$index11]["ancestor"]["customer"]["companies"][$index58]["address"]["streetId"] = $model->history[$index11]->ancestor->customer->companies[$index58]->address->streetId;
}
if (null !== $model->history[$index11]->ancestor->customer->companies[$index58]->address->streetType) {
    $jsonData["history"][$index11]["ancestor"]["customer"]["companies"][$index58]["address"]["streetType"] = $model->history[$index11]->ancestor->customer->companies[$index58]->address->streetType;
}
if (null !== $model->history[$index11]->ancestor->customer->companies[$index58]->address->building) {
    $jsonData["history"][$index11]["ancestor"]["customer"]["companies"][$index58]["address"]["building"] = $model->history[$index11]->ancestor->customer->companies[$index58]->address->building;
}
if (null !== $model->history[$index11]->ancestor->customer->companies[$index58]->address->flat) {
    $jsonData["history"][$index11]["ancestor"]["customer"]["companies"][$index58]["address"]["flat"] = $model->history[$index11]->ancestor->customer->companies[$index58]->address->flat;
}
if (null !== $model->history[$index11]->ancestor->customer->companies[$index58]->address->floor) {
    $jsonData["history"][$index11]["ancestor"]["customer"]["companies"][$index58]["address"]["floor"] = $model->history[$index11]->ancestor->customer->companies[$index58]->address->floor;
}
if (null !== $model->history[$index11]->ancestor->customer->companies[$index58]->address->block) {
    $jsonData["history"][$index11]["ancestor"]["customer"]["companies"][$index58]["address"]["block"] = $model->history[$index11]->ancestor->customer->companies[$index58]->address->block;
}
if (null !== $model->history[$index11]->ancestor->customer->companies[$index58]->address->house) {
    $jsonData["history"][$index11]["ancestor"]["customer"]["companies"][$index58]["address"]["house"] = $model->history[$index11]->ancestor->customer->companies[$index58]->address->house;
}
if (null !== $model->history[$index11]->ancestor->customer->companies[$index58]->address->housing) {
    $jsonData["history"][$index11]["ancestor"]["customer"]["companies"][$index58]["address"]["housing"] = $model->history[$index11]->ancestor->customer->companies[$index58]->address->housing;
}
if (null !== $model->history[$index11]->ancestor->customer->companies[$index58]->address->metro) {
    $jsonData["history"][$index11]["ancestor"]["customer"]["companies"][$index58]["address"]["metro"] = $model->history[$index11]->ancestor->customer->companies[$index58]->address->metro;
}
if (null !== $model->history[$index11]->ancestor->customer->companies[$index58]->address->notes) {
    $jsonData["history"][$index11]["ancestor"]["customer"]["companies"][$index58]["address"]["notes"] = $model->history[$index11]->ancestor->customer->companies[$index58]->address->notes;
}
if (null !== $model->history[$index11]->ancestor->customer->companies[$index58]->address->text) {
    $jsonData["history"][$index11]["ancestor"]["customer"]["companies"][$index58]["address"]["text"] = $model->history[$index11]->ancestor->customer->companies[$index58]->address->text;
}
if (null !== $model->history[$index11]->ancestor->customer->companies[$index58]->address->externalId) {
    $jsonData["history"][$index11]["ancestor"]["customer"]["companies"][$index58]["address"]["externalId"] = $model->history[$index11]->ancestor->customer->companies[$index58]->address->externalId;
}

if (0 === \count($jsonData["history"][$index11]["ancestor"]["customer"]["companies"][$index58]["address"])) {
    $jsonData["history"][$index11]["ancestor"]["customer"]["companies"][$index58]["address"] = $emptyObject;
}

}
if (null !== $model->history[$index11]->ancestor->customer->companies[$index58]->customFields) {
    $jsonData["history"][$index11]["ancestor"]["customer"]["companies"][$index58]["customFields"] = [];
foreach (array_keys($model->history[$index11]->ancestor->customer->companies[$index58]->customFields) as $index84) {
    $jsonData["history"][$index11]["ancestor"]["customer"]["companies"][$index58]["customFields"] = $model->history[$index11]->ancestor->customer->companies[$index58]->customFields;
}

}
if (null !== $model->history[$index11]->ancestor->customer->companies[$index58]->marginSumm) {
    $jsonData["history"][$index11]["ancestor"]["customer"]["companies"][$index58]["marginSumm"] = $model->history[$index11]->ancestor->customer->companies[$index58]->marginSumm;
}
if (null !== $model->history[$index11]->ancestor->customer->companies[$index58]->totalSumm) {
    $jsonData["history"][$index11]["ancestor"]["customer"]["companies"][$index58]["totalSumm"] = $model->history[$index11]->ancestor->customer->companies[$index58]->totalSumm;
}
if (null !== $model->history[$index11]->ancestor->customer->companies[$index58]->averageSumm) {
    $jsonData["history"][$index11]["ancestor"]["customer"]["companies"][$index58]["averageSumm"] = $model->history[$index11]->ancestor->customer->companies[$index58]->averageSumm;
}
if (null !== $model->history[$index11]->ancestor->customer->companies[$index58]->ordersCount) {
    $jsonData["history"][$index11]["ancestor"]["customer"]["companies"][$index58]["ordersCount"] = $model->history[$index11]->ancestor->customer->companies[$index58]->ordersCount;
}
if (null !== $model->history[$index11]->ancestor->customer->companies[$index58]->costSumm) {
    $jsonData["history"][$index11]["ancestor"]["customer"]["companies"][$index58]["costSumm"] = $model->history[$index11]->ancestor->customer->companies[$index58]->costSumm;
}

if (0 === \count($jsonData["history"][$index11]["ancestor"]["customer"]["companies"][$index58])) {
    $jsonData["history"][$index11]["ancestor"]["customer"]["companies"][$index58] = $emptyObject;
}

}

}
if (null !== $model->history[$index11]->ancestor->customer->addresses) {
    $jsonData["history"][$index11]["ancestor"]["customer"]["addresses"] = [];
foreach (array_keys($model->history[$index11]->ancestor->customer->addresses) as $index58) {
    $jsonData["history"][$index11]["ancestor"]["customer"]["addresses"][$index58] = [];
if (null !== $model->history[$index11]->ancestor->customer->addresses[$index58]->id) {
    $jsonData["history"][$index11]["ancestor"]["customer"]["addresses"][$index58]["id"] = $model->history[$index11]->ancestor->customer->addresses[$index58]->id;
}
if (null !== $model->history[$index11]->ancestor->customer->addresses[$index58]->name) {
    $jsonData["history"][$index11]["ancestor"]["customer"]["addresses"][$index58]["name"] = $model->history[$index11]->ancestor->customer->addresses[$index58]->name;
}
if (null !== $model->history[$index11]->ancestor->customer->addresses[$index58]->isMain) {
    $jsonData["history"][$index11]["ancestor"]["customer"]["addresses"][$index58]["isMain"] = $model->history[$index11]->ancestor->customer->addresses[$index58]->isMain;
}
if (null !== $model->history[$index11]->ancestor->customer->addresses[$index58]->index) {
    $jsonData["history"][$index11]["ancestor"]["customer"]["addresses"][$index58]["index"] = $model->history[$index11]->ancestor->customer->addresses[$index58]->index;
}
if (null !== $model->history[$index11]->ancestor->customer->addresses[$index58]->countryIso) {
    $jsonData["history"][$index11]["ancestor"]["customer"]["addresses"][$index58]["countryIso"] = $model->history[$index11]->ancestor->customer->addresses[$index58]->countryIso;
}
if (null !== $model->history[$index11]->ancestor->customer->addresses[$index58]->region) {
    $jsonData["history"][$index11]["ancestor"]["customer"]["addresses"][$index58]["region"] = $model->history[$index11]->ancestor->customer->addresses[$index58]->region;
}
if (null !== $model->history[$index11]->ancestor->customer->addresses[$index58]->regionId) {
    $jsonData["history"][$index11]["ancestor"]["customer"]["addresses"][$index58]["regionId"] = $model->history[$index11]->ancestor->customer->addresses[$index58]->regionId;
}
if (null !== $model->history[$index11]->ancestor->customer->addresses[$index58]->city) {
    $jsonData["history"][$index11]["ancestor"]["customer"]["addresses"][$index58]["city"] = $model->history[$index11]->ancestor->customer->addresses[$index58]->city;
}
if (null !== $model->history[$index11]->ancestor->customer->addresses[$index58]->cityId) {
    $jsonData["history"][$index11]["ancestor"]["customer"]["addresses"][$index58]["cityId"] = $model->history[$index11]->ancestor->customer->addresses[$index58]->cityId;
}
if (null !== $model->history[$index11]->ancestor->customer->addresses[$index58]->cityType) {
    $jsonData["history"][$index11]["ancestor"]["customer"]["addresses"][$index58]["cityType"] = $model->history[$index11]->ancestor->customer->addresses[$index58]->cityType;
}
if (null !== $model->history[$index11]->ancestor->customer->addresses[$index58]->street) {
    $jsonData["history"][$index11]["ancestor"]["customer"]["addresses"][$index58]["street"] = $model->history[$index11]->ancestor->customer->addresses[$index58]->street;
}
if (null !== $model->history[$index11]->ancestor->customer->addresses[$index58]->streetId) {
    $jsonData["history"][$index11]["ancestor"]["customer"]["addresses"][$index58]["streetId"] = $model->history[$index11]->ancestor->customer->addresses[$index58]->streetId;
}
if (null !== $model->history[$index11]->ancestor->customer->addresses[$index58]->streetType) {
    $jsonData["history"][$index11]["ancestor"]["customer"]["addresses"][$index58]["streetType"] = $model->history[$index11]->ancestor->customer->addresses[$index58]->streetType;
}
if (null !== $model->history[$index11]->ancestor->customer->addresses[$index58]->building) {
    $jsonData["history"][$index11]["ancestor"]["customer"]["addresses"][$index58]["building"] = $model->history[$index11]->ancestor->customer->addresses[$index58]->building;
}
if (null !== $model->history[$index11]->ancestor->customer->addresses[$index58]->flat) {
    $jsonData["history"][$index11]["ancestor"]["customer"]["addresses"][$index58]["flat"] = $model->history[$index11]->ancestor->customer->addresses[$index58]->flat;
}
if (null !== $model->history[$index11]->ancestor->customer->addresses[$index58]->floor) {
    $jsonData["history"][$index11]["ancestor"]["customer"]["addresses"][$index58]["floor"] = $model->history[$index11]->ancestor->customer->addresses[$index58]->floor;
}
if (null !== $model->history[$index11]->ancestor->customer->addresses[$index58]->block) {
    $jsonData["history"][$index11]["ancestor"]["customer"]["addresses"][$index58]["block"] = $model->history[$index11]->ancestor->customer->addresses[$index58]->block;
}
if (null !== $model->history[$index11]->ancestor->customer->addresses[$index58]->house) {
    $jsonData["history"][$index11]["ancestor"]["customer"]["addresses"][$index58]["house"] = $model->history[$index11]->ancestor->customer->addresses[$index58]->house;
}
if (null !== $model->history[$index11]->ancestor->customer->addresses[$index58]->housing) {
    $jsonData["history"][$index11]["ancestor"]["customer"]["addresses"][$index58]["housing"] = $model->history[$index11]->ancestor->customer->addresses[$index58]->housing;
}
if (null !== $model->history[$index11]->ancestor->customer->addresses[$index58]->metro) {
    $jsonData["history"][$index11]["ancestor"]["customer"]["addresses"][$index58]["metro"] = $model->history[$index11]->ancestor->customer->addresses[$index58]->metro;
}
if (null !== $model->history[$index11]->ancestor->customer->addresses[$index58]->notes) {
    $jsonData["history"][$index11]["ancestor"]["customer"]["addresses"][$index58]["notes"] = $model->history[$index11]->ancestor->customer->addresses[$index58]->notes;
}
if (null !== $model->history[$index11]->ancestor->customer->addresses[$index58]->text) {
    $jsonData["history"][$index11]["ancestor"]["customer"]["addresses"][$index58]["text"] = $model->history[$index11]->ancestor->customer->addresses[$index58]->text;
}
if (null !== $model->history[$index11]->ancestor->customer->addresses[$index58]->externalId) {
    $jsonData["history"][$index11]["ancestor"]["customer"]["addresses"][$index58]["externalId"] = $model->history[$index11]->ancestor->customer->addresses[$index58]->externalId;
}

if (0 === \count($jsonData["history"][$index11]["ancestor"]["customer"]["addresses"][$index58])) {
    $jsonData["history"][$index11]["ancestor"]["customer"]["addresses"][$index58] = $emptyObject;
}

}

}
if (null !== $model->history[$index11]->ancestor->customer->vip) {
    $jsonData["history"][$index11]["ancestor"]["customer"]["vip"] = $model->history[$index11]->ancestor->customer->vip;
}
if (null !== $model->history[$index11]->ancestor->customer->bad) {
    $jsonData["history"][$index11]["ancestor"]["customer"]["bad"] = $model->history[$index11]->ancestor->customer->bad;
}
if (null !== $model->history[$index11]->ancestor->customer->site) {
    $jsonData["history"][$index11]["ancestor"]["customer"]["site"] = $model->history[$index11]->ancestor->customer->site;
}
if (null !== $model->history[$index11]->ancestor->customer->tags) {
    $jsonData["history"][$index11]["ancestor"]["customer"]["tags"] = [];
foreach (array_keys($model->history[$index11]->ancestor->customer->tags) as $index53) {
    $jsonData["history"][$index11]["ancestor"]["customer"]["tags"][$index53] = [];
if (null !== $model->history[$index11]->ancestor->customer->tags[$index53]->name) {
    $jsonData["history"][$index11]["ancestor"]["customer"]["tags"][$index53]["name"] = $model->history[$index11]->ancestor->customer->tags[$index53]->name;
}
if (null !== $model->history[$index11]->ancestor->customer->tags[$index53]->color) {
    $jsonData["history"][$index11]["ancestor"]["customer"]["tags"][$index53]["color"] = $model->history[$index11]->ancestor->customer->tags[$index53]->color;
}
if (null !== $model->history[$index11]->ancestor->customer->tags[$index53]->attached) {
    $jsonData["history"][$index11]["ancestor"]["customer"]["tags"][$index53]["attached"] = $model->history[$index11]->ancestor->customer->tags[$index53]->attached;
}

if (0 === \count($jsonData["history"][$index11]["ancestor"]["customer"]["tags"][$index53])) {
    $jsonData["history"][$index11]["ancestor"]["customer"]["tags"][$index53] = $emptyObject;
}

}

}
if (null !== $model->history[$index11]->ancestor->customer->avgMarginSumm) {
    $jsonData["history"][$index11]["ancestor"]["customer"]["avgMarginSumm"] = $model->history[$index11]->ancestor->customer->avgMarginSumm;
}
if (null !== $model->history[$index11]->ancestor->customer->marginSumm) {
    $jsonData["history"][$index11]["ancestor"]["customer"]["marginSumm"] = $model->history[$index11]->ancestor->customer->marginSumm;
}
if (null !== $model->history[$index11]->ancestor->customer->totalSumm) {
    $jsonData["history"][$index11]["ancestor"]["customer"]["totalSumm"] = $model->history[$index11]->ancestor->customer->totalSumm;
}
if (null !== $model->history[$index11]->ancestor->customer->averageSumm) {
    $jsonData["history"][$index11]["ancestor"]["customer"]["averageSumm"] = $model->history[$index11]->ancestor->customer->averageSumm;
}
if (null !== $model->history[$index11]->ancestor->customer->ordersCount) {
    $jsonData["history"][$index11]["ancestor"]["customer"]["ordersCount"] = $model->history[$index11]->ancestor->customer->ordersCount;
}
if (null !== $model->history[$index11]->ancestor->customer->costSumm) {
    $jsonData["history"][$index11]["ancestor"]["customer"]["costSumm"] = $model->history[$index11]->ancestor->customer->costSumm;
}
if (null !== $model->history[$index11]->ancestor->customer->customFields) {
    $jsonData["history"][$index11]["ancestor"]["customer"]["customFields"] = [];
foreach (array_keys($model->history[$index11]->ancestor->customer->customFields) as $index61) {
    $jsonData["history"][$index11]["ancestor"]["customer"]["customFields"] = $model->history[$index11]->ancestor->customer->customFields;
}

}
if (null !== $model->history[$index11]->ancestor->customer->personalDiscount) {
    $jsonData["history"][$index11]["ancestor"]["customer"]["personalDiscount"] = $model->history[$index11]->ancestor->customer->personalDiscount;
}
if (null !== $model->history[$index11]->ancestor->customer->cumulativeDiscount) {
    $jsonData["history"][$index11]["ancestor"]["customer"]["cumulativeDiscount"] = $model->history[$index11]->ancestor->customer->cumulativeDiscount;
}
if (null !== $model->history[$index11]->ancestor->customer->discountCardNumber) {
    $jsonData["history"][$index11]["ancestor"]["customer"]["discountCardNumber"] = $model->history[$index11]->ancestor->customer->discountCardNumber;
}
if (null !== $model->history[$index11]->ancestor->customer->firstClientId) {
    $jsonData["history"][$index11]["ancestor"]["customer"]["firstClientId"] = $model->history[$index11]->ancestor->customer->firstClientId;
}
if (null !== $model->history[$index11]->ancestor->customer->lastClientId) {
    $jsonData["history"][$index11]["ancestor"]["customer"]["lastClientId"] = $model->history[$index11]->ancestor->customer->lastClientId;
}
if (null !== $model->history[$index11]->ancestor->customer->mainCustomerContact) {
    $jsonData["history"][$index11]["ancestor"]["customer"]["mainCustomerContact"] = [];
if (null !== $model->history[$index11]->ancestor->customer->mainCustomerContact->id) {
    $jsonData["history"][$index11]["ancestor"]["customer"]["mainCustomerContact"]["id"] = $model->history[$index11]->ancestor->customer->mainCustomerContact->id;
}
if (null !== $model->history[$index11]->ancestor->customer->mainCustomerContact->isMain) {
    $jsonData["history"][$index11]["ancestor"]["customer"]["mainCustomerContact"]["isMain"] = $model->history[$index11]->ancestor->customer->mainCustomerContact->isMain;
}
if (null !== $model->history[$index11]->ancestor->customer->mainCustomerContact->customer) {
    $jsonData["history"][$index11]["ancestor"]["customer"]["mainCustomerContact"]["customer"] = [];
if (null !== $model->history[$index11]->ancestor->customer->mainCustomerContact->customer->id) {
    $jsonData["history"][$index11]["ancestor"]["customer"]["mainCustomerContact"]["customer"]["id"] = $model->history[$index11]->ancestor->customer->mainCustomerContact->customer->id;
}
if (null !== $model->history[$index11]->ancestor->customer->mainCustomerContact->customer->externalId) {
    $jsonData["history"][$index11]["ancestor"]["customer"]["mainCustomerContact"]["customer"]["externalId"] = $model->history[$index11]->ancestor->customer->mainCustomerContact->customer->externalId;
}
if (null !== $model->history[$index11]->ancestor->customer->mainCustomerContact->customer->browserId) {
    $jsonData["history"][$index11]["ancestor"]["customer"]["mainCustomerContact"]["customer"]["browserId"] = $model->history[$index11]->ancestor->customer->mainCustomerContact->customer->browserId;
}
if (null !== $model->history[$index11]->ancestor->customer->mainCustomerContact->customer->site) {
    $jsonData["history"][$index11]["ancestor"]["customer"]["mainCustomerContact"]["customer"]["site"] = $model->history[$index11]->ancestor->customer->mainCustomerContact->customer->site;
}
if (null !== $model->history[$index11]->ancestor->customer->mainCustomerContact->customer->companies) {
    $jsonData["history"][$index11]["ancestor"]["customer"]["mainCustomerContact"]["customer"]["companies"] = [];
foreach (array_keys($model->history[$index11]->ancestor->customer->mainCustomerContact->customer->companies) as $index93) {
    $jsonData["history"][$index11]["ancestor"]["customer"]["mainCustomerContact"]["customer"]["companies"][$index93] = [];
if (null !== $model->history[$index11]->ancestor->customer->mainCustomerContact->customer->companies[$index93]->id) {
    $jsonData["history"][$index11]["ancestor"]["customer"]["mainCustomerContact"]["customer"]["companies"][$index93]["id"] = $model->history[$index11]->ancestor->customer->mainCustomerContact->customer->companies[$index93]->id;
}
if (null !== $model->history[$index11]->ancestor->customer->mainCustomerContact->customer->companies[$index93]->externalId) {
    $jsonData["history"][$index11]["ancestor"]["customer"]["mainCustomerContact"]["customer"]["companies"][$index93]["externalId"] = $model->history[$index11]->ancestor->customer->mainCustomerContact->customer->companies[$index93]->externalId;
}
if (null !== $model->history[$index11]->ancestor->customer->mainCustomerContact->customer->companies[$index93]->company) {
    $jsonData["history"][$index11]["ancestor"]["customer"]["mainCustomerContact"]["customer"]["companies"][$index93]["company"] = [];
if (null !== $model->history[$index11]->ancestor->customer->mainCustomerContact->customer->companies[$index93]->company->id) {
    $jsonData["history"][$index11]["ancestor"]["customer"]["mainCustomerContact"]["customer"]["companies"][$index93]["company"]["id"] = $model->history[$index11]->ancestor->customer->mainCustomerContact->customer->companies[$index93]->company->id;
}
if (null !== $model->history[$index11]->ancestor->customer->mainCustomerContact->customer->companies[$index93]->company->externalId) {
    $jsonData["history"][$index11]["ancestor"]["customer"]["mainCustomerContact"]["customer"]["companies"][$index93]["company"]["externalId"] = $model->history[$index11]->ancestor->customer->mainCustomerContact->customer->companies[$index93]->company->externalId;
}
if (null !== $model->history[$index11]->ancestor->customer->mainCustomerContact->customer->companies[$index93]->company->name) {
    $jsonData["history"][$index11]["ancestor"]["customer"]["mainCustomerContact"]["customer"]["companies"][$index93]["company"]["name"] = $model->history[$index11]->ancestor->customer->mainCustomerContact->customer->companies[$index93]->company->name;
}

if (0 === \count($jsonData["history"][$index11]["ancestor"]["customer"]["mainCustomerContact"]["customer"]["companies"][$index93]["company"])) {
    $jsonData["history"][$index11]["ancestor"]["customer"]["mainCustomerContact"]["customer"]["companies"][$index93]["company"] = $emptyObject;
}

}

if (0 === \count($jsonData["history"][$index11]["ancestor"]["customer"]["mainCustomerContact"]["customer"]["companies"][$index93])) {
    $jsonData["history"][$index11]["ancestor"]["customer"]["mainCustomerContact"]["customer"]["companies"][$index93] = $emptyObject;
}

}

}

if (0 === \count($jsonData["history"][$index11]["ancestor"]["customer"]["mainCustomerContact"]["customer"])) {
    $jsonData["history"][$index11]["ancestor"]["customer"]["mainCustomerContact"]["customer"] = $emptyObject;
}

}
if (null !== $model->history[$index11]->ancestor->customer->mainCustomerContact->companies) {
    $jsonData["history"][$index11]["ancestor"]["customer"]["mainCustomerContact"]["companies"] = [];
foreach (array_keys($model->history[$index11]->ancestor->customer->mainCustomerContact->companies) as $index81) {
    $jsonData["history"][$index11]["ancestor"]["customer"]["mainCustomerContact"]["companies"][$index81] = [];
if (null !== $model->history[$index11]->ancestor->customer->mainCustomerContact->companies[$index81]->id) {
    $jsonData["history"][$index11]["ancestor"]["customer"]["mainCustomerContact"]["companies"][$index81]["id"] = $model->history[$index11]->ancestor->customer->mainCustomerContact->companies[$index81]->id;
}
if (null !== $model->history[$index11]->ancestor->customer->mainCustomerContact->companies[$index81]->externalId) {
    $jsonData["history"][$index11]["ancestor"]["customer"]["mainCustomerContact"]["companies"][$index81]["externalId"] = $model->history[$index11]->ancestor->customer->mainCustomerContact->companies[$index81]->externalId;
}
if (null !== $model->history[$index11]->ancestor->customer->mainCustomerContact->companies[$index81]->company) {
    $jsonData["history"][$index11]["ancestor"]["customer"]["mainCustomerContact"]["companies"][$index81]["company"] = [];
if (null !== $model->history[$index11]->ancestor->customer->mainCustomerContact->companies[$index81]->company->id) {
    $jsonData["history"][$index11]["ancestor"]["customer"]["mainCustomerContact"]["companies"][$index81]["company"]["id"] = $model->history[$index11]->ancestor->customer->mainCustomerContact->companies[$index81]->company->id;
}
if (null !== $model->history[$index11]->ancestor->customer->mainCustomerContact->companies[$index81]->company->externalId) {
    $jsonData["history"][$index11]["ancestor"]["customer"]["mainCustomerContact"]["companies"][$index81]["company"]["externalId"] = $model->history[$index11]->ancestor->customer->mainCustomerContact->companies[$index81]->company->externalId;
}
if (null !== $model->history[$index11]->ancestor->customer->mainCustomerContact->companies[$index81]->company->name) {
    $jsonData["history"][$index11]["ancestor"]["customer"]["mainCustomerContact"]["companies"][$index81]["company"]["name"] = $model->history[$index11]->ancestor->customer->mainCustomerContact->companies[$index81]->company->name;
}

if (0 === \count($jsonData["history"][$index11]["ancestor"]["customer"]["mainCustomerContact"]["companies"][$index81]["company"])) {
    $jsonData["history"][$index11]["ancestor"]["customer"]["mainCustomerContact"]["companies"][$index81]["company"] = $emptyObject;
}

}

if (0 === \count($jsonData["history"][$index11]["ancestor"]["customer"]["mainCustomerContact"]["companies"][$index81])) {
    $jsonData["history"][$index11]["ancestor"]["customer"]["mainCustomerContact"]["companies"][$index81] = $emptyObject;
}

}

}

if (0 === \count($jsonData["history"][$index11]["ancestor"]["customer"]["mainCustomerContact"])) {
    $jsonData["history"][$index11]["ancestor"]["customer"]["mainCustomerContact"] = $emptyObject;
}

}
if (null !== $model->history[$index11]->ancestor->customer->mainCompany) {
    $jsonData["history"][$index11]["ancestor"]["customer"]["mainCompany"] = [];
if (null !== $model->history[$index11]->ancestor->customer->mainCompany->id) {
    $jsonData["history"][$index11]["ancestor"]["customer"]["mainCompany"]["id"] = $model->history[$index11]->ancestor->customer->mainCompany->id;
}
if (null !== $model->history[$index11]->ancestor->customer->mainCompany->externalId) {
    $jsonData["history"][$index11]["ancestor"]["customer"]["mainCompany"]["externalId"] = $model->history[$index11]->ancestor->customer->mainCompany->externalId;
}
if (null !== $model->history[$index11]->ancestor->customer->mainCompany->name) {
    $jsonData["history"][$index11]["ancestor"]["customer"]["mainCompany"]["name"] = $model->history[$index11]->ancestor->customer->mainCompany->name;
}

if (0 === \count($jsonData["history"][$index11]["ancestor"]["customer"]["mainCompany"])) {
    $jsonData["history"][$index11]["ancestor"]["customer"]["mainCompany"] = $emptyObject;
}

}

if (0 === \count($jsonData["history"][$index11]["ancestor"]["customer"])) {
    $jsonData["history"][$index11]["ancestor"]["customer"] = $emptyObject;
}

}

}
if (null !== $model->history[$index11]->ancestor->contact) {
    $jsonData["history"][$index11]["ancestor"]["contact"] = [];
if (null !== $model->history[$index11]->ancestor->contact->type) {
    $jsonData["history"][$index11]["ancestor"]["contact"]["type"] = $model->history[$index11]->ancestor->contact->type;
}
if (null !== $model->history[$index11]->ancestor->contact->id) {
    $jsonData["history"][$index11]["ancestor"]["contact"]["id"] = $model->history[$index11]->ancestor->contact->id;
}
if (null !== $model->history[$index11]->ancestor->contact->externalId) {
    $jsonData["history"][$index11]["ancestor"]["contact"]["externalId"] = $model->history[$index11]->ancestor->contact->externalId;
}
if (null !== $model->history[$index11]->ancestor->contact->isContact) {
    $jsonData["history"][$index11]["ancestor"]["contact"]["isContact"] = $model->history[$index11]->ancestor->contact->isContact;
}
if (null !== $model->history[$index11]->ancestor->contact->createdAt) {
    $jsonData["history"][$index11]["ancestor"]["contact"]["createdAt"] = $model->history[$index11]->ancestor->contact->createdAt->format('Y-m-d H:i:s');;
}
if (null !== $model->history[$index11]->ancestor->contact->managerId) {
    $jsonData["history"][$index11]["ancestor"]["contact"]["managerId"] = $model->history[$index11]->ancestor->contact->managerId;
}
if (null !== $model->history[$index11]->ancestor->contact->vip) {
    $jsonData["history"][$index11]["ancestor"]["contact"]["vip"] = $model->history[$index11]->ancestor->contact->vip;
}
if (null !== $model->history[$index11]->ancestor->contact->bad) {
    $jsonData["history"][$index11]["ancestor"]["contact"]["bad"] = $model->history[$index11]->ancestor->contact->bad;
}
if (null !== $model->history[$index11]->ancestor->contact->browserId) {
    $jsonData["history"][$index11]["ancestor"]["contact"]["browserId"] = $model->history[$index11]->ancestor->contact->browserId;
}
if (null !== $model->history[$index11]->ancestor->contact->site) {
    $jsonData["history"][$index11]["ancestor"]["contact"]["site"] = $model->history[$index11]->ancestor->contact->site;
}
if (null !== $model->history[$index11]->ancestor->contact->contragent) {
    $jsonData["history"][$index11]["ancestor"]["contact"]["contragent"] = [];
if (null !== $model->history[$index11]->ancestor->contact->contragent->contragentType) {
    $jsonData["history"][$index11]["ancestor"]["contact"]["contragent"]["contragentType"] = $model->history[$index11]->ancestor->contact->contragent->contragentType;
}
if (null !== $model->history[$index11]->ancestor->contact->contragent->legalName) {
    $jsonData["history"][$index11]["ancestor"]["contact"]["contragent"]["legalName"] = $model->history[$index11]->ancestor->contact->contragent->legalName;
}
if (null !== $model->history[$index11]->ancestor->contact->contragent->legalAddress) {
    $jsonData["history"][$index11]["ancestor"]["contact"]["contragent"]["legalAddress"] = $model->history[$index11]->ancestor->contact->contragent->legalAddress;
}
if (null !== $model->history[$index11]->ancestor->contact->contragent->INN) {
    $jsonData["history"][$index11]["ancestor"]["contact"]["contragent"]["INN"] = $model->history[$index11]->ancestor->contact->contragent->INN;
}
if (null !== $model->history[$index11]->ancestor->contact->contragent->OKPO) {
    $jsonData["history"][$index11]["ancestor"]["contact"]["contragent"]["OKPO"] = $model->history[$index11]->ancestor->contact->contragent->OKPO;
}
if (null !== $model->history[$index11]->ancestor->contact->contragent->KPP) {
    $jsonData["history"][$index11]["ancestor"]["contact"]["contragent"]["KPP"] = $model->history[$index11]->ancestor->contact->contragent->KPP;
}
if (null !== $model->history[$index11]->ancestor->contact->contragent->OGRN) {
    $jsonData["history"][$index11]["ancestor"]["contact"]["contragent"]["OGRN"] = $model->history[$index11]->ancestor->contact->contragent->OGRN;
}
if (null !== $model->history[$index11]->ancestor->contact->contragent->OGRNIP) {
    $jsonData["history"][$index11]["ancestor"]["contact"]["contragent"]["OGRNIP"] = $model->history[$index11]->ancestor->contact->contragent->OGRNIP;
}
if (null !== $model->history[$index11]->ancestor->contact->contragent->certificateNumber) {
    $jsonData["history"][$index11]["ancestor"]["contact"]["contragent"]["certificateNumber"] = $model->history[$index11]->ancestor->contact->contragent->certificateNumber;
}
if (null !== $model->history[$index11]->ancestor->contact->contragent->certificateDate) {
    $jsonData["history"][$index11]["ancestor"]["contact"]["contragent"]["certificateDate"] = $model->history[$index11]->ancestor->contact->contragent->certificateDate->format('Y-m-d H:i:s');;
}
if (null !== $model->history[$index11]->ancestor->contact->contragent->BIK) {
    $jsonData["history"][$index11]["ancestor"]["contact"]["contragent"]["BIK"] = $model->history[$index11]->ancestor->contact->contragent->BIK;
}
if (null !== $model->history[$index11]->ancestor->contact->contragent->bank) {
    $jsonData["history"][$index11]["ancestor"]["contact"]["contragent"]["bank"] = $model->history[$index11]->ancestor->contact->contragent->bank;
}
if (null !== $model->history[$index11]->ancestor->contact->contragent->bankAddress) {
    $jsonData["history"][$index11]["ancestor"]["contact"]["contragent"]["bankAddress"] = $model->history[$index11]->ancestor->contact->contragent->bankAddress;
}
if (null !== $model->history[$index11]->ancestor->contact->contragent->corrAccount) {
    $jsonData["history"][$index11]["ancestor"]["contact"]["contragent"]["corrAccount"] = $model->history[$index11]->ancestor->contact->contragent->corrAccount;
}
if (null !== $model->history[$index11]->ancestor->contact->contragent->bankAccount) {
    $jsonData["history"][$index11]["ancestor"]["contact"]["contragent"]["bankAccount"] = $model->history[$index11]->ancestor->contact->contragent->bankAccount;
}

if (0 === \count($jsonData["history"][$index11]["ancestor"]["contact"]["contragent"])) {
    $jsonData["history"][$index11]["ancestor"]["contact"]["contragent"] = $emptyObject;
}

}
if (null !== $model->history[$index11]->ancestor->contact->tags) {
    $jsonData["history"][$index11]["ancestor"]["contact"]["tags"] = [];
foreach (array_keys($model->history[$index11]->ancestor->contact->tags) as $index52) {
    $jsonData["history"][$index11]["ancestor"]["contact"]["tags"][$index52] = [];
if (null !== $model->history[$index11]->ancestor->contact->tags[$index52]->name) {
    $jsonData["history"][$index11]["ancestor"]["contact"]["tags"][$index52]["name"] = $model->history[$index11]->ancestor->contact->tags[$index52]->name;
}
if (null !== $model->history[$index11]->ancestor->contact->tags[$index52]->color) {
    $jsonData["history"][$index11]["ancestor"]["contact"]["tags"][$index52]["color"] = $model->history[$index11]->ancestor->contact->tags[$index52]->color;
}
if (null !== $model->history[$index11]->ancestor->contact->tags[$index52]->attached) {
    $jsonData["history"][$index11]["ancestor"]["contact"]["tags"][$index52]["attached"] = $model->history[$index11]->ancestor->contact->tags[$index52]->attached;
}

if (0 === \count($jsonData["history"][$index11]["ancestor"]["contact"]["tags"][$index52])) {
    $jsonData["history"][$index11]["ancestor"]["contact"]["tags"][$index52] = $emptyObject;
}

}

}
if (null !== $model->history[$index11]->ancestor->contact->avgMarginSumm) {
    $jsonData["history"][$index11]["ancestor"]["contact"]["avgMarginSumm"] = $model->history[$index11]->ancestor->contact->avgMarginSumm;
}
if (null !== $model->history[$index11]->ancestor->contact->marginSumm) {
    $jsonData["history"][$index11]["ancestor"]["contact"]["marginSumm"] = $model->history[$index11]->ancestor->contact->marginSumm;
}
if (null !== $model->history[$index11]->ancestor->contact->totalSumm) {
    $jsonData["history"][$index11]["ancestor"]["contact"]["totalSumm"] = $model->history[$index11]->ancestor->contact->totalSumm;
}
if (null !== $model->history[$index11]->ancestor->contact->averageSumm) {
    $jsonData["history"][$index11]["ancestor"]["contact"]["averageSumm"] = $model->history[$index11]->ancestor->contact->averageSumm;
}
if (null !== $model->history[$index11]->ancestor->contact->ordersCount) {
    $jsonData["history"][$index11]["ancestor"]["contact"]["ordersCount"] = $model->history[$index11]->ancestor->contact->ordersCount;
}
if (null !== $model->history[$index11]->ancestor->contact->costSumm) {
    $jsonData["history"][$index11]["ancestor"]["contact"]["costSumm"] = $model->history[$index11]->ancestor->contact->costSumm;
}
if (null !== $model->history[$index11]->ancestor->contact->customFields) {
    $jsonData["history"][$index11]["ancestor"]["contact"]["customFields"] = [];
foreach (array_keys($model->history[$index11]->ancestor->contact->customFields) as $index60) {
    $jsonData["history"][$index11]["ancestor"]["contact"]["customFields"] = $model->history[$index11]->ancestor->contact->customFields;
}

}
if (null !== $model->history[$index11]->ancestor->contact->personalDiscount) {
    $jsonData["history"][$index11]["ancestor"]["contact"]["personalDiscount"] = $model->history[$index11]->ancestor->contact->personalDiscount;
}
if (null !== $model->history[$index11]->ancestor->contact->cumulativeDiscount) {
    $jsonData["history"][$index11]["ancestor"]["contact"]["cumulativeDiscount"] = $model->history[$index11]->ancestor->contact->cumulativeDiscount;
}
if (null !== $model->history[$index11]->ancestor->contact->discountCardNumber) {
    $jsonData["history"][$index11]["ancestor"]["contact"]["discountCardNumber"] = $model->history[$index11]->ancestor->contact->discountCardNumber;
}
if (null !== $model->history[$index11]->ancestor->contact->firstClientId) {
    $jsonData["history"][$index11]["ancestor"]["contact"]["firstClientId"] = $model->history[$index11]->ancestor->contact->firstClientId;
}
if (null !== $model->history[$index11]->ancestor->contact->lastClientId) {
    $jsonData["history"][$index11]["ancestor"]["contact"]["lastClientId"] = $model->history[$index11]->ancestor->contact->lastClientId;
}
if (null !== $model->history[$index11]->ancestor->contact->address) {
    $jsonData["history"][$index11]["ancestor"]["contact"]["address"] = [];
if (null !== $model->history[$index11]->ancestor->contact->address->id) {
    $jsonData["history"][$index11]["ancestor"]["contact"]["address"]["id"] = $model->history[$index11]->ancestor->contact->address->id;
}
if (null !== $model->history[$index11]->ancestor->contact->address->name) {
    $jsonData["history"][$index11]["ancestor"]["contact"]["address"]["name"] = $model->history[$index11]->ancestor->contact->address->name;
}
if (null !== $model->history[$index11]->ancestor->contact->address->isMain) {
    $jsonData["history"][$index11]["ancestor"]["contact"]["address"]["isMain"] = $model->history[$index11]->ancestor->contact->address->isMain;
}
if (null !== $model->history[$index11]->ancestor->contact->address->index) {
    $jsonData["history"][$index11]["ancestor"]["contact"]["address"]["index"] = $model->history[$index11]->ancestor->contact->address->index;
}
if (null !== $model->history[$index11]->ancestor->contact->address->countryIso) {
    $jsonData["history"][$index11]["ancestor"]["contact"]["address"]["countryIso"] = $model->history[$index11]->ancestor->contact->address->countryIso;
}
if (null !== $model->history[$index11]->ancestor->contact->address->region) {
    $jsonData["history"][$index11]["ancestor"]["contact"]["address"]["region"] = $model->history[$index11]->ancestor->contact->address->region;
}
if (null !== $model->history[$index11]->ancestor->contact->address->regionId) {
    $jsonData["history"][$index11]["ancestor"]["contact"]["address"]["regionId"] = $model->history[$index11]->ancestor->contact->address->regionId;
}
if (null !== $model->history[$index11]->ancestor->contact->address->city) {
    $jsonData["history"][$index11]["ancestor"]["contact"]["address"]["city"] = $model->history[$index11]->ancestor->contact->address->city;
}
if (null !== $model->history[$index11]->ancestor->contact->address->cityId) {
    $jsonData["history"][$index11]["ancestor"]["contact"]["address"]["cityId"] = $model->history[$index11]->ancestor->contact->address->cityId;
}
if (null !== $model->history[$index11]->ancestor->contact->address->cityType) {
    $jsonData["history"][$index11]["ancestor"]["contact"]["address"]["cityType"] = $model->history[$index11]->ancestor->contact->address->cityType;
}
if (null !== $model->history[$index11]->ancestor->contact->address->street) {
    $jsonData["history"][$index11]["ancestor"]["contact"]["address"]["street"] = $model->history[$index11]->ancestor->contact->address->street;
}
if (null !== $model->history[$index11]->ancestor->contact->address->streetId) {
    $jsonData["history"][$index11]["ancestor"]["contact"]["address"]["streetId"] = $model->history[$index11]->ancestor->contact->address->streetId;
}
if (null !== $model->history[$index11]->ancestor->contact->address->streetType) {
    $jsonData["history"][$index11]["ancestor"]["contact"]["address"]["streetType"] = $model->history[$index11]->ancestor->contact->address->streetType;
}
if (null !== $model->history[$index11]->ancestor->contact->address->building) {
    $jsonData["history"][$index11]["ancestor"]["contact"]["address"]["building"] = $model->history[$index11]->ancestor->contact->address->building;
}
if (null !== $model->history[$index11]->ancestor->contact->address->flat) {
    $jsonData["history"][$index11]["ancestor"]["contact"]["address"]["flat"] = $model->history[$index11]->ancestor->contact->address->flat;
}
if (null !== $model->history[$index11]->ancestor->contact->address->floor) {
    $jsonData["history"][$index11]["ancestor"]["contact"]["address"]["floor"] = $model->history[$index11]->ancestor->contact->address->floor;
}
if (null !== $model->history[$index11]->ancestor->contact->address->block) {
    $jsonData["history"][$index11]["ancestor"]["contact"]["address"]["block"] = $model->history[$index11]->ancestor->contact->address->block;
}
if (null !== $model->history[$index11]->ancestor->contact->address->house) {
    $jsonData["history"][$index11]["ancestor"]["contact"]["address"]["house"] = $model->history[$index11]->ancestor->contact->address->house;
}
if (null !== $model->history[$index11]->ancestor->contact->address->housing) {
    $jsonData["history"][$index11]["ancestor"]["contact"]["address"]["housing"] = $model->history[$index11]->ancestor->contact->address->housing;
}
if (null !== $model->history[$index11]->ancestor->contact->address->metro) {
    $jsonData["history"][$index11]["ancestor"]["contact"]["address"]["metro"] = $model->history[$index11]->ancestor->contact->address->metro;
}
if (null !== $model->history[$index11]->ancestor->contact->address->notes) {
    $jsonData["history"][$index11]["ancestor"]["contact"]["address"]["notes"] = $model->history[$index11]->ancestor->contact->address->notes;
}
if (null !== $model->history[$index11]->ancestor->contact->address->text) {
    $jsonData["history"][$index11]["ancestor"]["contact"]["address"]["text"] = $model->history[$index11]->ancestor->contact->address->text;
}
if (null !== $model->history[$index11]->ancestor->contact->address->externalId) {
    $jsonData["history"][$index11]["ancestor"]["contact"]["address"]["externalId"] = $model->history[$index11]->ancestor->contact->address->externalId;
}

if (0 === \count($jsonData["history"][$index11]["ancestor"]["contact"]["address"])) {
    $jsonData["history"][$index11]["ancestor"]["contact"]["address"] = $emptyObject;
}

}
if (null !== $model->history[$index11]->ancestor->contact->segments) {
    $jsonData["history"][$index11]["ancestor"]["contact"]["segments"] = [];
foreach (array_keys($model->history[$index11]->ancestor->contact->segments) as $index56) {
    $jsonData["history"][$index11]["ancestor"]["contact"]["segments"][$index56] = [];
if (null !== $model->history[$index11]->ancestor->contact->segments[$index56]->id) {
    $jsonData["history"][$index11]["ancestor"]["contact"]["segments"][$index56]["id"] = $model->history[$index11]->ancestor->contact->segments[$index56]->id;
}
if (null !== $model->history[$index11]->ancestor->contact->segments[$index56]->code) {
    $jsonData["history"][$index11]["ancestor"]["contact"]["segments"][$index56]["code"] = $model->history[$index11]->ancestor->contact->segments[$index56]->code;
}
if (null !== $model->history[$index11]->ancestor->contact->segments[$index56]->name) {
    $jsonData["history"][$index11]["ancestor"]["contact"]["segments"][$index56]["name"] = $model->history[$index11]->ancestor->contact->segments[$index56]->name;
}
if (null !== $model->history[$index11]->ancestor->contact->segments[$index56]->createdAt) {
    $jsonData["history"][$index11]["ancestor"]["contact"]["segments"][$index56]["createdAt"] = $model->history[$index11]->ancestor->contact->segments[$index56]->createdAt->format('Y-m-d H:i:s');;
}
if (null !== $model->history[$index11]->ancestor->contact->segments[$index56]->isDynamic) {
    $jsonData["history"][$index11]["ancestor"]["contact"]["segments"][$index56]["isDynamic"] = $model->history[$index11]->ancestor->contact->segments[$index56]->isDynamic;
}
if (null !== $model->history[$index11]->ancestor->contact->segments[$index56]->customersCount) {
    $jsonData["history"][$index11]["ancestor"]["contact"]["segments"][$index56]["customersCount"] = $model->history[$index11]->ancestor->contact->segments[$index56]->customersCount;
}
if (null !== $model->history[$index11]->ancestor->contact->segments[$index56]->active) {
    $jsonData["history"][$index11]["ancestor"]["contact"]["segments"][$index56]["active"] = $model->history[$index11]->ancestor->contact->segments[$index56]->active;
}

if (0 === \count($jsonData["history"][$index11]["ancestor"]["contact"]["segments"][$index56])) {
    $jsonData["history"][$index11]["ancestor"]["contact"]["segments"][$index56] = $emptyObject;
}

}

}
if (null !== $model->history[$index11]->ancestor->contact->maturationTime) {
    $jsonData["history"][$index11]["ancestor"]["contact"]["maturationTime"] = $model->history[$index11]->ancestor->contact->maturationTime;
}
if (null !== $model->history[$index11]->ancestor->contact->firstName) {
    $jsonData["history"][$index11]["ancestor"]["contact"]["firstName"] = $model->history[$index11]->ancestor->contact->firstName;
}
if (null !== $model->history[$index11]->ancestor->contact->lastName) {
    $jsonData["history"][$index11]["ancestor"]["contact"]["lastName"] = $model->history[$index11]->ancestor->contact->lastName;
}
if (null !== $model->history[$index11]->ancestor->contact->patronymic) {
    $jsonData["history"][$index11]["ancestor"]["contact"]["patronymic"] = $model->history[$index11]->ancestor->contact->patronymic;
}
if (null !== $model->history[$index11]->ancestor->contact->sex) {
    $jsonData["history"][$index11]["ancestor"]["contact"]["sex"] = $model->history[$index11]->ancestor->contact->sex;
}
if (null !== $model->history[$index11]->ancestor->contact->presumableSex) {
    $jsonData["history"][$index11]["ancestor"]["contact"]["presumableSex"] = $model->history[$index11]->ancestor->contact->presumableSex;
}
if (null !== $model->history[$index11]->ancestor->contact->email) {
    $jsonData["history"][$index11]["ancestor"]["contact"]["email"] = $model->history[$index11]->ancestor->contact->email;
}
if (null !== $model->history[$index11]->ancestor->contact->emailMarketingUnsubscribedAt) {
    $jsonData["history"][$index11]["ancestor"]["contact"]["emailMarketingUnsubscribedAt"] = $model->history[$index11]->ancestor->contact->emailMarketingUnsubscribedAt->format('Y-m-d H:i:s');;
}
if (null !== $model->history[$index11]->ancestor->contact->phones) {
    $jsonData["history"][$index11]["ancestor"]["contact"]["phones"] = [];
foreach (array_keys($model->history[$index11]->ancestor->contact->phones) as $index54) {
    $jsonData["history"][$index11]["ancestor"]["contact"]["phones"][$index54] = [];
if (null !== $model->history[$index11]->ancestor->contact->phones[$index54]->number) {
    $jsonData["history"][$index11]["ancestor"]["contact"]["phones"][$index54]["number"] = $model->history[$index11]->ancestor->contact->phones[$index54]->number;
}

if (0 === \count($jsonData["history"][$index11]["ancestor"]["contact"]["phones"][$index54])) {
    $jsonData["history"][$index11]["ancestor"]["contact"]["phones"][$index54] = $emptyObject;
}

}

}
if (null !== $model->history[$index11]->ancestor->contact->birthday) {
    $jsonData["history"][$index11]["ancestor"]["contact"]["birthday"] = $model->history[$index11]->ancestor->contact->birthday->format('Y-m-d H:i:s');;
}
if (null !== $model->history[$index11]->ancestor->contact->source) {
    $jsonData["history"][$index11]["ancestor"]["contact"]["source"] = [];
if (null !== $model->history[$index11]->ancestor->contact->source->source) {
    $jsonData["history"][$index11]["ancestor"]["contact"]["source"]["source"] = $model->history[$index11]->ancestor->contact->source->source;
}
if (null !== $model->history[$index11]->ancestor->contact->source->medium) {
    $jsonData["history"][$index11]["ancestor"]["contact"]["source"]["medium"] = $model->history[$index11]->ancestor->contact->source->medium;
}
if (null !== $model->history[$index11]->ancestor->contact->source->campaign) {
    $jsonData["history"][$index11]["ancestor"]["contact"]["source"]["campaign"] = $model->history[$index11]->ancestor->contact->source->campaign;
}
if (null !== $model->history[$index11]->ancestor->contact->source->keyword) {
    $jsonData["history"][$index11]["ancestor"]["contact"]["source"]["keyword"] = $model->history[$index11]->ancestor->contact->source->keyword;
}
if (null !== $model->history[$index11]->ancestor->contact->source->content) {
    $jsonData["history"][$index11]["ancestor"]["contact"]["source"]["content"] = $model->history[$index11]->ancestor->contact->source->content;
}

if (0 === \count($jsonData["history"][$index11]["ancestor"]["contact"]["source"])) {
    $jsonData["history"][$index11]["ancestor"]["contact"]["source"] = $emptyObject;
}

}
if (null !== $model->history[$index11]->ancestor->contact->photoUrl) {
    $jsonData["history"][$index11]["ancestor"]["contact"]["photoUrl"] = $model->history[$index11]->ancestor->contact->photoUrl;
}
if (null !== $model->history[$index11]->ancestor->contact->mgCustomerId) {
    $jsonData["history"][$index11]["ancestor"]["contact"]["mgCustomerId"] = $model->history[$index11]->ancestor->contact->mgCustomerId;
}
if (null !== $model->history[$index11]->ancestor->contact->subscribed) {
    $jsonData["history"][$index11]["ancestor"]["contact"]["subscribed"] = $model->history[$index11]->ancestor->contact->subscribed;
}

if (0 === \count($jsonData["history"][$index11]["ancestor"]["contact"])) {
    $jsonData["history"][$index11]["ancestor"]["contact"] = $emptyObject;
}

}
if (null !== $model->history[$index11]->ancestor->company) {
    $jsonData["history"][$index11]["ancestor"]["company"] = [];
if (null !== $model->history[$index11]->ancestor->company->id) {
    $jsonData["history"][$index11]["ancestor"]["company"]["id"] = $model->history[$index11]->ancestor->company->id;
}
if (null !== $model->history[$index11]->ancestor->company->isMain) {
    $jsonData["history"][$index11]["ancestor"]["company"]["isMain"] = $model->history[$index11]->ancestor->company->isMain;
}
if (null !== $model->history[$index11]->ancestor->company->externalId) {
    $jsonData["history"][$index11]["ancestor"]["company"]["externalId"] = $model->history[$index11]->ancestor->company->externalId;
}
if (null !== $model->history[$index11]->ancestor->company->active) {
    $jsonData["history"][$index11]["ancestor"]["company"]["active"] = $model->history[$index11]->ancestor->company->active;
}
if (null !== $model->history[$index11]->ancestor->company->name) {
    $jsonData["history"][$index11]["ancestor"]["company"]["name"] = $model->history[$index11]->ancestor->company->name;
}
if (null !== $model->history[$index11]->ancestor->company->brand) {
    $jsonData["history"][$index11]["ancestor"]["company"]["brand"] = $model->history[$index11]->ancestor->company->brand;
}
if (null !== $model->history[$index11]->ancestor->company->site) {
    $jsonData["history"][$index11]["ancestor"]["company"]["site"] = $model->history[$index11]->ancestor->company->site;
}
if (null !== $model->history[$index11]->ancestor->company->createdAt) {
    $jsonData["history"][$index11]["ancestor"]["company"]["createdAt"] = $model->history[$index11]->ancestor->company->createdAt->format('Y-m-d H:i:s');;
}
if (null !== $model->history[$index11]->ancestor->company->customer) {
    $jsonData["history"][$index11]["ancestor"]["company"]["customer"] = [];
if (null !== $model->history[$index11]->ancestor->company->customer->site) {
    $jsonData["history"][$index11]["ancestor"]["company"]["customer"]["site"] = $model->history[$index11]->ancestor->company->customer->site;
}
if (null !== $model->history[$index11]->ancestor->company->customer->id) {
    $jsonData["history"][$index11]["ancestor"]["company"]["customer"]["id"] = $model->history[$index11]->ancestor->company->customer->id;
}
if (null !== $model->history[$index11]->ancestor->company->customer->externalId) {
    $jsonData["history"][$index11]["ancestor"]["company"]["customer"]["externalId"] = $model->history[$index11]->ancestor->company->customer->externalId;
}
if (null !== $model->history[$index11]->ancestor->company->customer->type) {
    $jsonData["history"][$index11]["ancestor"]["company"]["customer"]["type"] = $model->history[$index11]->ancestor->company->customer->type;
}

if (0 === \count($jsonData["history"][$index11]["ancestor"]["company"]["customer"])) {
    $jsonData["history"][$index11]["ancestor"]["company"]["customer"] = $emptyObject;
}

}
if (null !== $model->history[$index11]->ancestor->company->contragent) {
    $jsonData["history"][$index11]["ancestor"]["company"]["contragent"] = [];
if (null !== $model->history[$index11]->ancestor->company->contragent->contragentType) {
    $jsonData["history"][$index11]["ancestor"]["company"]["contragent"]["contragentType"] = $model->history[$index11]->ancestor->company->contragent->contragentType;
}
if (null !== $model->history[$index11]->ancestor->company->contragent->legalName) {
    $jsonData["history"][$index11]["ancestor"]["company"]["contragent"]["legalName"] = $model->history[$index11]->ancestor->company->contragent->legalName;
}
if (null !== $model->history[$index11]->ancestor->company->contragent->legalAddress) {
    $jsonData["history"][$index11]["ancestor"]["company"]["contragent"]["legalAddress"] = $model->history[$index11]->ancestor->company->contragent->legalAddress;
}
if (null !== $model->history[$index11]->ancestor->company->contragent->INN) {
    $jsonData["history"][$index11]["ancestor"]["company"]["contragent"]["INN"] = $model->history[$index11]->ancestor->company->contragent->INN;
}
if (null !== $model->history[$index11]->ancestor->company->contragent->OKPO) {
    $jsonData["history"][$index11]["ancestor"]["company"]["contragent"]["OKPO"] = $model->history[$index11]->ancestor->company->contragent->OKPO;
}
if (null !== $model->history[$index11]->ancestor->company->contragent->KPP) {
    $jsonData["history"][$index11]["ancestor"]["company"]["contragent"]["KPP"] = $model->history[$index11]->ancestor->company->contragent->KPP;
}
if (null !== $model->history[$index11]->ancestor->company->contragent->OGRN) {
    $jsonData["history"][$index11]["ancestor"]["company"]["contragent"]["OGRN"] = $model->history[$index11]->ancestor->company->contragent->OGRN;
}
if (null !== $model->history[$index11]->ancestor->company->contragent->OGRNIP) {
    $jsonData["history"][$index11]["ancestor"]["company"]["contragent"]["OGRNIP"] = $model->history[$index11]->ancestor->company->contragent->OGRNIP;
}
if (null !== $model->history[$index11]->ancestor->company->contragent->certificateNumber) {
    $jsonData["history"][$index11]["ancestor"]["company"]["contragent"]["certificateNumber"] = $model->history[$index11]->ancestor->company->contragent->certificateNumber;
}
if (null !== $model->history[$index11]->ancestor->company->contragent->certificateDate) {
    $jsonData["history"][$index11]["ancestor"]["company"]["contragent"]["certificateDate"] = $model->history[$index11]->ancestor->company->contragent->certificateDate->format('Y-m-d H:i:s');;
}
if (null !== $model->history[$index11]->ancestor->company->contragent->BIK) {
    $jsonData["history"][$index11]["ancestor"]["company"]["contragent"]["BIK"] = $model->history[$index11]->ancestor->company->contragent->BIK;
}
if (null !== $model->history[$index11]->ancestor->company->contragent->bank) {
    $jsonData["history"][$index11]["ancestor"]["company"]["contragent"]["bank"] = $model->history[$index11]->ancestor->company->contragent->bank;
}
if (null !== $model->history[$index11]->ancestor->company->contragent->bankAddress) {
    $jsonData["history"][$index11]["ancestor"]["company"]["contragent"]["bankAddress"] = $model->history[$index11]->ancestor->company->contragent->bankAddress;
}
if (null !== $model->history[$index11]->ancestor->company->contragent->corrAccount) {
    $jsonData["history"][$index11]["ancestor"]["company"]["contragent"]["corrAccount"] = $model->history[$index11]->ancestor->company->contragent->corrAccount;
}
if (null !== $model->history[$index11]->ancestor->company->contragent->bankAccount) {
    $jsonData["history"][$index11]["ancestor"]["company"]["contragent"]["bankAccount"] = $model->history[$index11]->ancestor->company->contragent->bankAccount;
}

if (0 === \count($jsonData["history"][$index11]["ancestor"]["company"]["contragent"])) {
    $jsonData["history"][$index11]["ancestor"]["company"]["contragent"] = $emptyObject;
}

}
if (null !== $model->history[$index11]->ancestor->company->address) {
    $jsonData["history"][$index11]["ancestor"]["company"]["address"] = [];
if (null !== $model->history[$index11]->ancestor->company->address->id) {
    $jsonData["history"][$index11]["ancestor"]["company"]["address"]["id"] = $model->history[$index11]->ancestor->company->address->id;
}
if (null !== $model->history[$index11]->ancestor->company->address->name) {
    $jsonData["history"][$index11]["ancestor"]["company"]["address"]["name"] = $model->history[$index11]->ancestor->company->address->name;
}
if (null !== $model->history[$index11]->ancestor->company->address->isMain) {
    $jsonData["history"][$index11]["ancestor"]["company"]["address"]["isMain"] = $model->history[$index11]->ancestor->company->address->isMain;
}
if (null !== $model->history[$index11]->ancestor->company->address->index) {
    $jsonData["history"][$index11]["ancestor"]["company"]["address"]["index"] = $model->history[$index11]->ancestor->company->address->index;
}
if (null !== $model->history[$index11]->ancestor->company->address->countryIso) {
    $jsonData["history"][$index11]["ancestor"]["company"]["address"]["countryIso"] = $model->history[$index11]->ancestor->company->address->countryIso;
}
if (null !== $model->history[$index11]->ancestor->company->address->region) {
    $jsonData["history"][$index11]["ancestor"]["company"]["address"]["region"] = $model->history[$index11]->ancestor->company->address->region;
}
if (null !== $model->history[$index11]->ancestor->company->address->regionId) {
    $jsonData["history"][$index11]["ancestor"]["company"]["address"]["regionId"] = $model->history[$index11]->ancestor->company->address->regionId;
}
if (null !== $model->history[$index11]->ancestor->company->address->city) {
    $jsonData["history"][$index11]["ancestor"]["company"]["address"]["city"] = $model->history[$index11]->ancestor->company->address->city;
}
if (null !== $model->history[$index11]->ancestor->company->address->cityId) {
    $jsonData["history"][$index11]["ancestor"]["company"]["address"]["cityId"] = $model->history[$index11]->ancestor->company->address->cityId;
}
if (null !== $model->history[$index11]->ancestor->company->address->cityType) {
    $jsonData["history"][$index11]["ancestor"]["company"]["address"]["cityType"] = $model->history[$index11]->ancestor->company->address->cityType;
}
if (null !== $model->history[$index11]->ancestor->company->address->street) {
    $jsonData["history"][$index11]["ancestor"]["company"]["address"]["street"] = $model->history[$index11]->ancestor->company->address->street;
}
if (null !== $model->history[$index11]->ancestor->company->address->streetId) {
    $jsonData["history"][$index11]["ancestor"]["company"]["address"]["streetId"] = $model->history[$index11]->ancestor->company->address->streetId;
}
if (null !== $model->history[$index11]->ancestor->company->address->streetType) {
    $jsonData["history"][$index11]["ancestor"]["company"]["address"]["streetType"] = $model->history[$index11]->ancestor->company->address->streetType;
}
if (null !== $model->history[$index11]->ancestor->company->address->building) {
    $jsonData["history"][$index11]["ancestor"]["company"]["address"]["building"] = $model->history[$index11]->ancestor->company->address->building;
}
if (null !== $model->history[$index11]->ancestor->company->address->flat) {
    $jsonData["history"][$index11]["ancestor"]["company"]["address"]["flat"] = $model->history[$index11]->ancestor->company->address->flat;
}
if (null !== $model->history[$index11]->ancestor->company->address->floor) {
    $jsonData["history"][$index11]["ancestor"]["company"]["address"]["floor"] = $model->history[$index11]->ancestor->company->address->floor;
}
if (null !== $model->history[$index11]->ancestor->company->address->block) {
    $jsonData["history"][$index11]["ancestor"]["company"]["address"]["block"] = $model->history[$index11]->ancestor->company->address->block;
}
if (null !== $model->history[$index11]->ancestor->company->address->house) {
    $jsonData["history"][$index11]["ancestor"]["company"]["address"]["house"] = $model->history[$index11]->ancestor->company->address->house;
}
if (null !== $model->history[$index11]->ancestor->company->address->housing) {
    $jsonData["history"][$index11]["ancestor"]["company"]["address"]["housing"] = $model->history[$index11]->ancestor->company->address->housing;
}
if (null !== $model->history[$index11]->ancestor->company->address->metro) {
    $jsonData["history"][$index11]["ancestor"]["company"]["address"]["metro"] = $model->history[$index11]->ancestor->company->address->metro;
}
if (null !== $model->history[$index11]->ancestor->company->address->notes) {
    $jsonData["history"][$index11]["ancestor"]["company"]["address"]["notes"] = $model->history[$index11]->ancestor->company->address->notes;
}
if (null !== $model->history[$index11]->ancestor->company->address->text) {
    $jsonData["history"][$index11]["ancestor"]["company"]["address"]["text"] = $model->history[$index11]->ancestor->company->address->text;
}
if (null !== $model->history[$index11]->ancestor->company->address->externalId) {
    $jsonData["history"][$index11]["ancestor"]["company"]["address"]["externalId"] = $model->history[$index11]->ancestor->company->address->externalId;
}

if (0 === \count($jsonData["history"][$index11]["ancestor"]["company"]["address"])) {
    $jsonData["history"][$index11]["ancestor"]["company"]["address"] = $emptyObject;
}

}
if (null !== $model->history[$index11]->ancestor->company->customFields) {
    $jsonData["history"][$index11]["ancestor"]["company"]["customFields"] = [];
foreach (array_keys($model->history[$index11]->ancestor->company->customFields) as $index60) {
    $jsonData["history"][$index11]["ancestor"]["company"]["customFields"] = $model->history[$index11]->ancestor->company->customFields;
}

}
if (null !== $model->history[$index11]->ancestor->company->marginSumm) {
    $jsonData["history"][$index11]["ancestor"]["company"]["marginSumm"] = $model->history[$index11]->ancestor->company->marginSumm;
}
if (null !== $model->history[$index11]->ancestor->company->totalSumm) {
    $jsonData["history"][$index11]["ancestor"]["company"]["totalSumm"] = $model->history[$index11]->ancestor->company->totalSumm;
}
if (null !== $model->history[$index11]->ancestor->company->averageSumm) {
    $jsonData["history"][$index11]["ancestor"]["company"]["averageSumm"] = $model->history[$index11]->ancestor->company->averageSumm;
}
if (null !== $model->history[$index11]->ancestor->company->ordersCount) {
    $jsonData["history"][$index11]["ancestor"]["company"]["ordersCount"] = $model->history[$index11]->ancestor->company->ordersCount;
}
if (null !== $model->history[$index11]->ancestor->company->costSumm) {
    $jsonData["history"][$index11]["ancestor"]["company"]["costSumm"] = $model->history[$index11]->ancestor->company->costSumm;
}

if (0 === \count($jsonData["history"][$index11]["ancestor"]["company"])) {
    $jsonData["history"][$index11]["ancestor"]["company"] = $emptyObject;
}

}
if (null !== $model->history[$index11]->ancestor->contragent) {
    $jsonData["history"][$index11]["ancestor"]["contragent"] = [];
if (null !== $model->history[$index11]->ancestor->contragent->contragentType) {
    $jsonData["history"][$index11]["ancestor"]["contragent"]["contragentType"] = $model->history[$index11]->ancestor->contragent->contragentType;
}
if (null !== $model->history[$index11]->ancestor->contragent->legalName) {
    $jsonData["history"][$index11]["ancestor"]["contragent"]["legalName"] = $model->history[$index11]->ancestor->contragent->legalName;
}
if (null !== $model->history[$index11]->ancestor->contragent->legalAddress) {
    $jsonData["history"][$index11]["ancestor"]["contragent"]["legalAddress"] = $model->history[$index11]->ancestor->contragent->legalAddress;
}
if (null !== $model->history[$index11]->ancestor->contragent->INN) {
    $jsonData["history"][$index11]["ancestor"]["contragent"]["INN"] = $model->history[$index11]->ancestor->contragent->INN;
}
if (null !== $model->history[$index11]->ancestor->contragent->OKPO) {
    $jsonData["history"][$index11]["ancestor"]["contragent"]["OKPO"] = $model->history[$index11]->ancestor->contragent->OKPO;
}
if (null !== $model->history[$index11]->ancestor->contragent->KPP) {
    $jsonData["history"][$index11]["ancestor"]["contragent"]["KPP"] = $model->history[$index11]->ancestor->contragent->KPP;
}
if (null !== $model->history[$index11]->ancestor->contragent->OGRN) {
    $jsonData["history"][$index11]["ancestor"]["contragent"]["OGRN"] = $model->history[$index11]->ancestor->contragent->OGRN;
}
if (null !== $model->history[$index11]->ancestor->contragent->OGRNIP) {
    $jsonData["history"][$index11]["ancestor"]["contragent"]["OGRNIP"] = $model->history[$index11]->ancestor->contragent->OGRNIP;
}
if (null !== $model->history[$index11]->ancestor->contragent->certificateNumber) {
    $jsonData["history"][$index11]["ancestor"]["contragent"]["certificateNumber"] = $model->history[$index11]->ancestor->contragent->certificateNumber;
}
if (null !== $model->history[$index11]->ancestor->contragent->certificateDate) {
    $jsonData["history"][$index11]["ancestor"]["contragent"]["certificateDate"] = $model->history[$index11]->ancestor->contragent->certificateDate->format('Y-m-d H:i:s');;
}
if (null !== $model->history[$index11]->ancestor->contragent->BIK) {
    $jsonData["history"][$index11]["ancestor"]["contragent"]["BIK"] = $model->history[$index11]->ancestor->contragent->BIK;
}
if (null !== $model->history[$index11]->ancestor->contragent->bank) {
    $jsonData["history"][$index11]["ancestor"]["contragent"]["bank"] = $model->history[$index11]->ancestor->contragent->bank;
}
if (null !== $model->history[$index11]->ancestor->contragent->bankAddress) {
    $jsonData["history"][$index11]["ancestor"]["contragent"]["bankAddress"] = $model->history[$index11]->ancestor->contragent->bankAddress;
}
if (null !== $model->history[$index11]->ancestor->contragent->corrAccount) {
    $jsonData["history"][$index11]["ancestor"]["contragent"]["corrAccount"] = $model->history[$index11]->ancestor->contragent->corrAccount;
}
if (null !== $model->history[$index11]->ancestor->contragent->bankAccount) {
    $jsonData["history"][$index11]["ancestor"]["contragent"]["bankAccount"] = $model->history[$index11]->ancestor->contragent->bankAccount;
}

if (0 === \count($jsonData["history"][$index11]["ancestor"]["contragent"])) {
    $jsonData["history"][$index11]["ancestor"]["contragent"] = $emptyObject;
}

}
if (null !== $model->history[$index11]->ancestor->delivery) {
    $jsonData["history"][$index11]["ancestor"]["delivery"] = [];
if (null !== $model->history[$index11]->ancestor->delivery->code) {
    $jsonData["history"][$index11]["ancestor"]["delivery"]["code"] = $model->history[$index11]->ancestor->delivery->code;
}
if (null !== $model->history[$index11]->ancestor->delivery->integrationCode) {
    $jsonData["history"][$index11]["ancestor"]["delivery"]["integrationCode"] = $model->history[$index11]->ancestor->delivery->integrationCode;
}
if (null !== $model->history[$index11]->ancestor->delivery->data) {
    $jsonData["history"][$index11]["ancestor"]["delivery"]["data"] = [];
if (null !== $model->history[$index11]->ancestor->delivery->data->externalId) {
    $jsonData["history"][$index11]["ancestor"]["delivery"]["data"]["externalId"] = $model->history[$index11]->ancestor->delivery->data->externalId;
}
if (null !== $model->history[$index11]->ancestor->delivery->data->trackNumber) {
    $jsonData["history"][$index11]["ancestor"]["delivery"]["data"]["trackNumber"] = $model->history[$index11]->ancestor->delivery->data->trackNumber;
}
if (null !== $model->history[$index11]->ancestor->delivery->data->status) {
    $jsonData["history"][$index11]["ancestor"]["delivery"]["data"]["status"] = $model->history[$index11]->ancestor->delivery->data->status;
}
if (null !== $model->history[$index11]->ancestor->delivery->data->locked) {
    $jsonData["history"][$index11]["ancestor"]["delivery"]["data"]["locked"] = $model->history[$index11]->ancestor->delivery->data->locked;
}
if (null !== $model->history[$index11]->ancestor->delivery->data->pickuppointAddress) {
    $jsonData["history"][$index11]["ancestor"]["delivery"]["data"]["pickuppointAddress"] = $model->history[$index11]->ancestor->delivery->data->pickuppointAddress;
}
if (null !== $model->history[$index11]->ancestor->delivery->data->days) {
    $jsonData["history"][$index11]["ancestor"]["delivery"]["data"]["days"] = $model->history[$index11]->ancestor->delivery->data->days;
}
if (null !== $model->history[$index11]->ancestor->delivery->data->statusText) {
    $jsonData["history"][$index11]["ancestor"]["delivery"]["data"]["statusText"] = $model->history[$index11]->ancestor->delivery->data->statusText;
}
if (null !== $model->history[$index11]->ancestor->delivery->data->statusDate) {
    $jsonData["history"][$index11]["ancestor"]["delivery"]["data"]["statusDate"] = $model->history[$index11]->ancestor->delivery->data->statusDate->format('Y-m-d');;
}
if (null !== $model->history[$index11]->ancestor->delivery->data->tariff) {
    $jsonData["history"][$index11]["ancestor"]["delivery"]["data"]["tariff"] = $model->history[$index11]->ancestor->delivery->data->tariff;
}
if (null !== $model->history[$index11]->ancestor->delivery->data->tariffName) {
    $jsonData["history"][$index11]["ancestor"]["delivery"]["data"]["tariffName"] = $model->history[$index11]->ancestor->delivery->data->tariffName;
}
if (null !== $model->history[$index11]->ancestor->delivery->data->pickuppointId) {
    $jsonData["history"][$index11]["ancestor"]["delivery"]["data"]["pickuppointId"] = $model->history[$index11]->ancestor->delivery->data->pickuppointId;
}
if (null !== $model->history[$index11]->ancestor->delivery->data->pickuppointSchedule) {
    $jsonData["history"][$index11]["ancestor"]["delivery"]["data"]["pickuppointSchedule"] = $model->history[$index11]->ancestor->delivery->data->pickuppointSchedule;
}
if (null !== $model->history[$index11]->ancestor->delivery->data->pickuppointPhone) {
    $jsonData["history"][$index11]["ancestor"]["delivery"]["data"]["pickuppointPhone"] = $model->history[$index11]->ancestor->delivery->data->pickuppointPhone;
}
if (null !== $model->history[$index11]->ancestor->delivery->data->payerType) {
    $jsonData["history"][$index11]["ancestor"]["delivery"]["data"]["payerType"] = $model->history[$index11]->ancestor->delivery->data->payerType;
}
if (null !== $model->history[$index11]->ancestor->delivery->data->statusComment) {
    $jsonData["history"][$index11]["ancestor"]["delivery"]["data"]["statusComment"] = $model->history[$index11]->ancestor->delivery->data->statusComment;
}
if (null !== $model->history[$index11]->ancestor->delivery->data->cost) {
    $jsonData["history"][$index11]["ancestor"]["delivery"]["data"]["cost"] = $model->history[$index11]->ancestor->delivery->data->cost;
}
if (null !== $model->history[$index11]->ancestor->delivery->data->minTerm) {
    $jsonData["history"][$index11]["ancestor"]["delivery"]["data"]["minTerm"] = $model->history[$index11]->ancestor->delivery->data->minTerm;
}
if (null !== $model->history[$index11]->ancestor->delivery->data->maxTerm) {
    $jsonData["history"][$index11]["ancestor"]["delivery"]["data"]["maxTerm"] = $model->history[$index11]->ancestor->delivery->data->maxTerm;
}
if (null !== $model->history[$index11]->ancestor->delivery->data->shipmentpointId) {
    $jsonData["history"][$index11]["ancestor"]["delivery"]["data"]["shipmentpointId"] = $model->history[$index11]->ancestor->delivery->data->shipmentpointId;
}
if (null !== $model->history[$index11]->ancestor->delivery->data->shipmentpointName) {
    $jsonData["history"][$index11]["ancestor"]["delivery"]["data"]["shipmentpointName"] = $model->history[$index11]->ancestor->delivery->data->shipmentpointName;
}
if (null !== $model->history[$index11]->ancestor->delivery->data->shipmentpointAddress) {
    $jsonData["history"][$index11]["ancestor"]["delivery"]["data"]["shipmentpointAddress"] = $model->history[$index11]->ancestor->delivery->data->shipmentpointAddress;
}
if (null !== $model->history[$index11]->ancestor->delivery->data->shipmentpointSchedule) {
    $jsonData["history"][$index11]["ancestor"]["delivery"]["data"]["shipmentpointSchedule"] = $model->history[$index11]->ancestor->delivery->data->shipmentpointSchedule;
}
if (null !== $model->history[$index11]->ancestor->delivery->data->shipmentpointPhone) {
    $jsonData["history"][$index11]["ancestor"]["delivery"]["data"]["shipmentpointPhone"] = $model->history[$index11]->ancestor->delivery->data->shipmentpointPhone;
}
if (null !== $model->history[$index11]->ancestor->delivery->data->shipmentpointCoordinateLatitude) {
    $jsonData["history"][$index11]["ancestor"]["delivery"]["data"]["shipmentpointCoordinateLatitude"] = $model->history[$index11]->ancestor->delivery->data->shipmentpointCoordinateLatitude;
}
if (null !== $model->history[$index11]->ancestor->delivery->data->shipmentpointCoordinateLongitude) {
    $jsonData["history"][$index11]["ancestor"]["delivery"]["data"]["shipmentpointCoordinateLongitude"] = $model->history[$index11]->ancestor->delivery->data->shipmentpointCoordinateLongitude;
}
if (null !== $model->history[$index11]->ancestor->delivery->data->pickuppointName) {
    $jsonData["history"][$index11]["ancestor"]["delivery"]["data"]["pickuppointName"] = $model->history[$index11]->ancestor->delivery->data->pickuppointName;
}
if (null !== $model->history[$index11]->ancestor->delivery->data->pickuppointCoordinateLatitude) {
    $jsonData["history"][$index11]["ancestor"]["delivery"]["data"]["pickuppointCoordinateLatitude"] = $model->history[$index11]->ancestor->delivery->data->pickuppointCoordinateLatitude;
}
if (null !== $model->history[$index11]->ancestor->delivery->data->pickuppointCoordinateLongitude) {
    $jsonData["history"][$index11]["ancestor"]["delivery"]["data"]["pickuppointCoordinateLongitude"] = $model->history[$index11]->ancestor->delivery->data->pickuppointCoordinateLongitude;
}
if (null !== $model->history[$index11]->ancestor->delivery->data->extraData) {
    $jsonData["history"][$index11]["ancestor"]["delivery"]["data"]["extraData"] = [];
foreach (array_keys($model->history[$index11]->ancestor->delivery->data->extraData) as $index66) {
    $jsonData["history"][$index11]["ancestor"]["delivery"]["data"]["extraData"] = $model->history[$index11]->ancestor->delivery->data->extraData;
}

}
if (null !== $model->history[$index11]->ancestor->delivery->data->packages) {
    $jsonData["history"][$index11]["ancestor"]["delivery"]["data"]["packages"] = [];
foreach (array_keys($model->history[$index11]->ancestor->delivery->data->packages) as $index65) {
    $jsonData["history"][$index11]["ancestor"]["delivery"]["data"]["packages"][$index65] = [];
if (null !== $model->history[$index11]->ancestor->delivery->data->packages[$index65]->packageId) {
    $jsonData["history"][$index11]["ancestor"]["delivery"]["data"]["packages"][$index65]["packageId"] = $model->history[$index11]->ancestor->delivery->data->packages[$index65]->packageId;
}
if (null !== $model->history[$index11]->ancestor->delivery->data->packages[$index65]->weight) {
    $jsonData["history"][$index11]["ancestor"]["delivery"]["data"]["packages"][$index65]["weight"] = $model->history[$index11]->ancestor->delivery->data->packages[$index65]->weight;
}
if (null !== $model->history[$index11]->ancestor->delivery->data->packages[$index65]->length) {
    $jsonData["history"][$index11]["ancestor"]["delivery"]["data"]["packages"][$index65]["length"] = $model->history[$index11]->ancestor->delivery->data->packages[$index65]->length;
}
if (null !== $model->history[$index11]->ancestor->delivery->data->packages[$index65]->width) {
    $jsonData["history"][$index11]["ancestor"]["delivery"]["data"]["packages"][$index65]["width"] = $model->history[$index11]->ancestor->delivery->data->packages[$index65]->width;
}
if (null !== $model->history[$index11]->ancestor->delivery->data->packages[$index65]->height) {
    $jsonData["history"][$index11]["ancestor"]["delivery"]["data"]["packages"][$index65]["height"] = $model->history[$index11]->ancestor->delivery->data->packages[$index65]->height;
}
if (null !== $model->history[$index11]->ancestor->delivery->data->packages[$index65]->items) {
    $jsonData["history"][$index11]["ancestor"]["delivery"]["data"]["packages"][$index65]["items"] = [];
foreach (array_keys($model->history[$index11]->ancestor->delivery->data->packages[$index65]->items) as $index84) {
    $jsonData["history"][$index11]["ancestor"]["delivery"]["data"]["packages"][$index65]["items"][$index84] = [];
if (null !== $model->history[$index11]->ancestor->delivery->data->packages[$index65]->items[$index84]->orderProduct) {
    $jsonData["history"][$index11]["ancestor"]["delivery"]["data"]["packages"][$index65]["items"][$index84]["orderProduct"] = [];
if (null !== $model->history[$index11]->ancestor->delivery->data->packages[$index65]->items[$index84]->orderProduct->id) {
    $jsonData["history"][$index11]["ancestor"]["delivery"]["data"]["packages"][$index65]["items"][$index84]["orderProduct"]["id"] = $model->history[$index11]->ancestor->delivery->data->packages[$index65]->items[$index84]->orderProduct->id;
}
if (null !== $model->history[$index11]->ancestor->delivery->data->packages[$index65]->items[$index84]->orderProduct->externalId) {
    $jsonData["history"][$index11]["ancestor"]["delivery"]["data"]["packages"][$index65]["items"][$index84]["orderProduct"]["externalId"] = $model->history[$index11]->ancestor->delivery->data->packages[$index65]->items[$index84]->orderProduct->externalId;
}
if (null !== $model->history[$index11]->ancestor->delivery->data->packages[$index65]->items[$index84]->orderProduct->externalIds) {
    $jsonData["history"][$index11]["ancestor"]["delivery"]["data"]["packages"][$index65]["items"][$index84]["orderProduct"]["externalIds"] = [];
foreach (array_keys($model->history[$index11]->ancestor->delivery->data->packages[$index65]->items[$index84]->orderProduct->externalIds) as $index125) {
    $jsonData["history"][$index11]["ancestor"]["delivery"]["data"]["packages"][$index65]["items"][$index84]["orderProduct"]["externalIds"][$index125] = [];
if (null !== $model->history[$index11]->ancestor->delivery->data->packages[$index65]->items[$index84]->orderProduct->externalIds[$index125]->code) {
    $jsonData["history"][$index11]["ancestor"]["delivery"]["data"]["packages"][$index65]["items"][$index84]["orderProduct"]["externalIds"][$index125]["code"] = $model->history[$index11]->ancestor->delivery->data->packages[$index65]->items[$index84]->orderProduct->externalIds[$index125]->code;
}
if (null !== $model->history[$index11]->ancestor->delivery->data->packages[$index65]->items[$index84]->orderProduct->externalIds[$index125]->value) {
    $jsonData["history"][$index11]["ancestor"]["delivery"]["data"]["packages"][$index65]["items"][$index84]["orderProduct"]["externalIds"][$index125]["value"] = $model->history[$index11]->ancestor->delivery->data->packages[$index65]->items[$index84]->orderProduct->externalIds[$index125]->value;
}

if (0 === \count($jsonData["history"][$index11]["ancestor"]["delivery"]["data"]["packages"][$index65]["items"][$index84]["orderProduct"]["externalIds"][$index125])) {
    $jsonData["history"][$index11]["ancestor"]["delivery"]["data"]["packages"][$index65]["items"][$index84]["orderProduct"]["externalIds"][$index125] = $emptyObject;
}

}

}

if (0 === \count($jsonData["history"][$index11]["ancestor"]["delivery"]["data"]["packages"][$index65]["items"][$index84]["orderProduct"])) {
    $jsonData["history"][$index11]["ancestor"]["delivery"]["data"]["packages"][$index65]["items"][$index84]["orderProduct"] = $emptyObject;
}

}
if (null !== $model->history[$index11]->ancestor->delivery->data->packages[$index65]->items[$index84]->quantity) {
    $jsonData["history"][$index11]["ancestor"]["delivery"]["data"]["packages"][$index65]["items"][$index84]["quantity"] = $model->history[$index11]->ancestor->delivery->data->packages[$index65]->items[$index84]->quantity;
}

if (0 === \count($jsonData["history"][$index11]["ancestor"]["delivery"]["data"]["packages"][$index65]["items"][$index84])) {
    $jsonData["history"][$index11]["ancestor"]["delivery"]["data"]["packages"][$index65]["items"][$index84] = $emptyObject;
}

}

}

if (0 === \count($jsonData["history"][$index11]["ancestor"]["delivery"]["data"]["packages"][$index65])) {
    $jsonData["history"][$index11]["ancestor"]["delivery"]["data"]["packages"][$index65] = $emptyObject;
}

}

}
if (null !== $model->history[$index11]->ancestor->delivery->data->returnExternalId) {
    $jsonData["history"][$index11]["ancestor"]["delivery"]["data"]["returnExternalId"] = $model->history[$index11]->ancestor->delivery->data->returnExternalId;
}
if (null !== $model->history[$index11]->ancestor->delivery->data->deliveryName) {
    $jsonData["history"][$index11]["ancestor"]["delivery"]["data"]["deliveryName"] = $model->history[$index11]->ancestor->delivery->data->deliveryName;
}
if (null !== $model->history[$index11]->ancestor->delivery->data->price) {
    $jsonData["history"][$index11]["ancestor"]["delivery"]["data"]["price"] = $model->history[$index11]->ancestor->delivery->data->price;
}
if (null !== $model->history[$index11]->ancestor->delivery->data->insurancePrice) {
    $jsonData["history"][$index11]["ancestor"]["delivery"]["data"]["insurancePrice"] = $model->history[$index11]->ancestor->delivery->data->insurancePrice;
}
if (null !== $model->history[$index11]->ancestor->delivery->data->tariffType) {
    $jsonData["history"][$index11]["ancestor"]["delivery"]["data"]["tariffType"] = $model->history[$index11]->ancestor->delivery->data->tariffType;
}
if (null !== $model->history[$index11]->ancestor->delivery->data->receiverCity) {
    $jsonData["history"][$index11]["ancestor"]["delivery"]["data"]["receiverCity"] = $model->history[$index11]->ancestor->delivery->data->receiverCity;
}
if (null !== $model->history[$index11]->ancestor->delivery->data->services) {
    $jsonData["history"][$index11]["ancestor"]["delivery"]["data"]["services"] = [];
foreach (array_keys($model->history[$index11]->ancestor->delivery->data->services) as $index65) {
    $jsonData["history"][$index11]["ancestor"]["delivery"]["data"]["services"] = $model->history[$index11]->ancestor->delivery->data->services;
}

}
if (null !== $model->history[$index11]->ancestor->delivery->data->packageNumber) {
    $jsonData["history"][$index11]["ancestor"]["delivery"]["data"]["packageNumber"] = $model->history[$index11]->ancestor->delivery->data->packageNumber;
}
if (null !== $model->history[$index11]->ancestor->delivery->data->comment) {
    $jsonData["history"][$index11]["ancestor"]["delivery"]["data"]["comment"] = $model->history[$index11]->ancestor->delivery->data->comment;
}
if (null !== $model->history[$index11]->ancestor->delivery->data->deliveryCode) {
    $jsonData["history"][$index11]["ancestor"]["delivery"]["data"]["deliveryCode"] = $model->history[$index11]->ancestor->delivery->data->deliveryCode;
}
if (null !== $model->history[$index11]->ancestor->delivery->data->notes) {
    $jsonData["history"][$index11]["ancestor"]["delivery"]["data"]["notes"] = $model->history[$index11]->ancestor->delivery->data->notes;
}
if (null !== $model->history[$index11]->ancestor->delivery->data->id) {
    $jsonData["history"][$index11]["ancestor"]["delivery"]["data"]["id"] = $model->history[$index11]->ancestor->delivery->data->id;
}
if (null !== $model->history[$index11]->ancestor->delivery->data->firstName) {
    $jsonData["history"][$index11]["ancestor"]["delivery"]["data"]["firstName"] = $model->history[$index11]->ancestor->delivery->data->firstName;
}
if (null !== $model->history[$index11]->ancestor->delivery->data->lastName) {
    $jsonData["history"][$index11]["ancestor"]["delivery"]["data"]["lastName"] = $model->history[$index11]->ancestor->delivery->data->lastName;
}
if (null !== $model->history[$index11]->ancestor->delivery->data->patronymic) {
    $jsonData["history"][$index11]["ancestor"]["delivery"]["data"]["patronymic"] = $model->history[$index11]->ancestor->delivery->data->patronymic;
}
if (null !== $model->history[$index11]->ancestor->delivery->data->active) {
    $jsonData["history"][$index11]["ancestor"]["delivery"]["data"]["active"] = $model->history[$index11]->ancestor->delivery->data->active;
}
if (null !== $model->history[$index11]->ancestor->delivery->data->email) {
    $jsonData["history"][$index11]["ancestor"]["delivery"]["data"]["email"] = $model->history[$index11]->ancestor->delivery->data->email;
}
if (null !== $model->history[$index11]->ancestor->delivery->data->phone) {
    $jsonData["history"][$index11]["ancestor"]["delivery"]["data"]["phone"] = [];
if (null !== $model->history[$index11]->ancestor->delivery->data->phone->number) {
    $jsonData["history"][$index11]["ancestor"]["delivery"]["data"]["phone"]["number"] = $model->history[$index11]->ancestor->delivery->data->phone->number;
}

if (0 === \count($jsonData["history"][$index11]["ancestor"]["delivery"]["data"]["phone"])) {
    $jsonData["history"][$index11]["ancestor"]["delivery"]["data"]["phone"] = $emptyObject;
}

}
if (null !== $model->history[$index11]->ancestor->delivery->data->description) {
    $jsonData["history"][$index11]["ancestor"]["delivery"]["data"]["description"] = $model->history[$index11]->ancestor->delivery->data->description;
}
if (null !== $model->history[$index11]->ancestor->delivery->data->courierId) {
    $jsonData["history"][$index11]["ancestor"]["delivery"]["data"]["courierId"] = $model->history[$index11]->ancestor->delivery->data->courierId;
}
if (null !== $model->history[$index11]->ancestor->delivery->data->serviceType) {
    $jsonData["history"][$index11]["ancestor"]["delivery"]["data"]["serviceType"] = $model->history[$index11]->ancestor->delivery->data->serviceType;
}
if (null !== $model->history[$index11]->ancestor->delivery->data->pickuppoint) {
    $jsonData["history"][$index11]["ancestor"]["delivery"]["data"]["pickuppoint"] = $model->history[$index11]->ancestor->delivery->data->pickuppoint;
}
if (null !== $model->history[$index11]->ancestor->delivery->data->receiverWarehouseTypeRef) {
    $jsonData["history"][$index11]["ancestor"]["delivery"]["data"]["receiverWarehouseTypeRef"] = $model->history[$index11]->ancestor->delivery->data->receiverWarehouseTypeRef;
}
if (null !== $model->history[$index11]->ancestor->delivery->data->statusName) {
    $jsonData["history"][$index11]["ancestor"]["delivery"]["data"]["statusName"] = $model->history[$index11]->ancestor->delivery->data->statusName;
}
if (null !== $model->history[$index11]->ancestor->delivery->data->receiverCityRef) {
    $jsonData["history"][$index11]["ancestor"]["delivery"]["data"]["receiverCityRef"] = $model->history[$index11]->ancestor->delivery->data->receiverCityRef;
}
if (null !== $model->history[$index11]->ancestor->delivery->data->receiverStreet) {
    $jsonData["history"][$index11]["ancestor"]["delivery"]["data"]["receiverStreet"] = $model->history[$index11]->ancestor->delivery->data->receiverStreet;
}
if (null !== $model->history[$index11]->ancestor->delivery->data->receiverStreetRef) {
    $jsonData["history"][$index11]["ancestor"]["delivery"]["data"]["receiverStreetRef"] = $model->history[$index11]->ancestor->delivery->data->receiverStreetRef;
}
if (null !== $model->history[$index11]->ancestor->delivery->data->seatsAmount) {
    $jsonData["history"][$index11]["ancestor"]["delivery"]["data"]["seatsAmount"] = $model->history[$index11]->ancestor->delivery->data->seatsAmount;
}
if (null !== $model->history[$index11]->ancestor->delivery->data->cargoType) {
    $jsonData["history"][$index11]["ancestor"]["delivery"]["data"]["cargoType"] = $model->history[$index11]->ancestor->delivery->data->cargoType;
}
if (null !== $model->history[$index11]->ancestor->delivery->data->cargoDescription) {
    $jsonData["history"][$index11]["ancestor"]["delivery"]["data"]["cargoDescription"] = $model->history[$index11]->ancestor->delivery->data->cargoDescription;
}
if (null !== $model->history[$index11]->ancestor->delivery->data->cashPayerType) {
    $jsonData["history"][$index11]["ancestor"]["delivery"]["data"]["cashPayerType"] = $model->history[$index11]->ancestor->delivery->data->cashPayerType;
}
if (null !== $model->history[$index11]->ancestor->delivery->data->paymentForm) {
    $jsonData["history"][$index11]["ancestor"]["delivery"]["data"]["paymentForm"] = $model->history[$index11]->ancestor->delivery->data->paymentForm;
}
if (null !== $model->history[$index11]->ancestor->delivery->data->ownershipForm) {
    $jsonData["history"][$index11]["ancestor"]["delivery"]["data"]["ownershipForm"] = $model->history[$index11]->ancestor->delivery->data->ownershipForm;
}
if (null !== $model->history[$index11]->ancestor->delivery->data->accompanyingDocument) {
    $jsonData["history"][$index11]["ancestor"]["delivery"]["data"]["accompanyingDocument"] = $model->history[$index11]->ancestor->delivery->data->accompanyingDocument;
}
if (null !== $model->history[$index11]->ancestor->delivery->data->preferredDeliveryDate) {
    $jsonData["history"][$index11]["ancestor"]["delivery"]["data"]["preferredDeliveryDate"] = $model->history[$index11]->ancestor->delivery->data->preferredDeliveryDate->format('Y-m-d H:i:s');;
}
if (null !== $model->history[$index11]->ancestor->delivery->data->timeInterval) {
    $jsonData["history"][$index11]["ancestor"]["delivery"]["data"]["timeInterval"] = $model->history[$index11]->ancestor->delivery->data->timeInterval;
}
if (null !== $model->history[$index11]->ancestor->delivery->data->saturdayDelivery) {
    $jsonData["history"][$index11]["ancestor"]["delivery"]["data"]["saturdayDelivery"] = $model->history[$index11]->ancestor->delivery->data->saturdayDelivery;
}
if (null !== $model->history[$index11]->ancestor->delivery->data->deliveryDate) {
    $jsonData["history"][$index11]["ancestor"]["delivery"]["data"]["deliveryDate"] = $model->history[$index11]->ancestor->delivery->data->deliveryDate;
}
if (null !== $model->history[$index11]->ancestor->delivery->data->denieReason) {
    $jsonData["history"][$index11]["ancestor"]["delivery"]["data"]["denieReason"] = $model->history[$index11]->ancestor->delivery->data->denieReason;
}
if (null !== $model->history[$index11]->ancestor->delivery->data->backwardDelivery) {
    $jsonData["history"][$index11]["ancestor"]["delivery"]["data"]["backwardDelivery"] = $model->history[$index11]->ancestor->delivery->data->backwardDelivery;
}
if (null !== $model->history[$index11]->ancestor->delivery->data->backwardDeliveryCargoType) {
    $jsonData["history"][$index11]["ancestor"]["delivery"]["data"]["backwardDeliveryCargoType"] = $model->history[$index11]->ancestor->delivery->data->backwardDeliveryCargoType;
}
if (null !== $model->history[$index11]->ancestor->delivery->data->backwardDeliveryPayerType) {
    $jsonData["history"][$index11]["ancestor"]["delivery"]["data"]["backwardDeliveryPayerType"] = $model->history[$index11]->ancestor->delivery->data->backwardDeliveryPayerType;
}
if (null !== $model->history[$index11]->ancestor->delivery->data->backwardDeliveryRedeliveryString) {
    $jsonData["history"][$index11]["ancestor"]["delivery"]["data"]["backwardDeliveryRedeliveryString"] = $model->history[$index11]->ancestor->delivery->data->backwardDeliveryRedeliveryString;
}
if (null !== $model->history[$index11]->ancestor->delivery->data->afterpaymentOnGoodsCost) {
    $jsonData["history"][$index11]["ancestor"]["delivery"]["data"]["afterpaymentOnGoodsCost"] = $model->history[$index11]->ancestor->delivery->data->afterpaymentOnGoodsCost;
}
if (null !== $model->history[$index11]->ancestor->delivery->data->declaredValue) {
    $jsonData["history"][$index11]["ancestor"]["delivery"]["data"]["declaredValue"] = $model->history[$index11]->ancestor->delivery->data->declaredValue;
}
if (null !== $model->history[$index11]->ancestor->delivery->data->sendDate) {
    $jsonData["history"][$index11]["ancestor"]["delivery"]["data"]["sendDate"] = $model->history[$index11]->ancestor->delivery->data->sendDate->format('Y-m-d H:i:s');;
}
if (null !== $model->history[$index11]->ancestor->delivery->data->deliveryType) {
    $jsonData["history"][$index11]["ancestor"]["delivery"]["data"]["deliveryType"] = $model->history[$index11]->ancestor->delivery->data->deliveryType;
}
if (null !== $model->history[$index11]->ancestor->delivery->data->pickupType) {
    $jsonData["history"][$index11]["ancestor"]["delivery"]["data"]["pickupType"] = $model->history[$index11]->ancestor->delivery->data->pickupType;
}
if (null !== $model->history[$index11]->ancestor->delivery->data->pickuppointDescription) {
    $jsonData["history"][$index11]["ancestor"]["delivery"]["data"]["pickuppointDescription"] = $model->history[$index11]->ancestor->delivery->data->pickuppointDescription;
}
if (null !== $model->history[$index11]->ancestor->delivery->data->placesCount) {
    $jsonData["history"][$index11]["ancestor"]["delivery"]["data"]["placesCount"] = $model->history[$index11]->ancestor->delivery->data->placesCount;
}
if (null !== $model->history[$index11]->ancestor->delivery->data->service) {
    $jsonData["history"][$index11]["ancestor"]["delivery"]["data"]["service"] = $model->history[$index11]->ancestor->delivery->data->service;
}

if (0 === \count($jsonData["history"][$index11]["ancestor"]["delivery"]["data"])) {
    $jsonData["history"][$index11]["ancestor"]["delivery"]["data"] = $emptyObject;
}

}
if (null !== $model->history[$index11]->ancestor->delivery->service) {
    $jsonData["history"][$index11]["ancestor"]["delivery"]["service"] = [];
if (null !== $model->history[$index11]->ancestor->delivery->service->name) {
    $jsonData["history"][$index11]["ancestor"]["delivery"]["service"]["name"] = $model->history[$index11]->ancestor->delivery->service->name;
}
if (null !== $model->history[$index11]->ancestor->delivery->service->code) {
    $jsonData["history"][$index11]["ancestor"]["delivery"]["service"]["code"] = $model->history[$index11]->ancestor->delivery->service->code;
}
if (null !== $model->history[$index11]->ancestor->delivery->service->active) {
    $jsonData["history"][$index11]["ancestor"]["delivery"]["service"]["active"] = $model->history[$index11]->ancestor->delivery->service->active;
}

if (0 === \count($jsonData["history"][$index11]["ancestor"]["delivery"]["service"])) {
    $jsonData["history"][$index11]["ancestor"]["delivery"]["service"] = $emptyObject;
}

}
if (null !== $model->history[$index11]->ancestor->delivery->cost) {
    $jsonData["history"][$index11]["ancestor"]["delivery"]["cost"] = $model->history[$index11]->ancestor->delivery->cost;
}
if (null !== $model->history[$index11]->ancestor->delivery->netCost) {
    $jsonData["history"][$index11]["ancestor"]["delivery"]["netCost"] = $model->history[$index11]->ancestor->delivery->netCost;
}
if (null !== $model->history[$index11]->ancestor->delivery->date) {
    $jsonData["history"][$index11]["ancestor"]["delivery"]["date"] = $model->history[$index11]->ancestor->delivery->date->format('Y-m-d');;
}
if (null !== $model->history[$index11]->ancestor->delivery->time) {
    $jsonData["history"][$index11]["ancestor"]["delivery"]["time"] = [];
if (null !== $model->history[$index11]->ancestor->delivery->time->from) {
    $jsonData["history"][$index11]["ancestor"]["delivery"]["time"]["from"] = $model->history[$index11]->ancestor->delivery->time->from->format('H:i');;
}
if (null !== $model->history[$index11]->ancestor->delivery->time->to) {
    $jsonData["history"][$index11]["ancestor"]["delivery"]["time"]["to"] = $model->history[$index11]->ancestor->delivery->time->to->format('H:i');;
}
if (null !== $model->history[$index11]->ancestor->delivery->time->custom) {
    $jsonData["history"][$index11]["ancestor"]["delivery"]["time"]["custom"] = $model->history[$index11]->ancestor->delivery->time->custom;
}

if (0 === \count($jsonData["history"][$index11]["ancestor"]["delivery"]["time"])) {
    $jsonData["history"][$index11]["ancestor"]["delivery"]["time"] = $emptyObject;
}

}
if (null !== $model->history[$index11]->ancestor->delivery->address) {
    $jsonData["history"][$index11]["ancestor"]["delivery"]["address"] = [];
if (null !== $model->history[$index11]->ancestor->delivery->address->id) {
    $jsonData["history"][$index11]["ancestor"]["delivery"]["address"]["id"] = $model->history[$index11]->ancestor->delivery->address->id;
}
if (null !== $model->history[$index11]->ancestor->delivery->address->index) {
    $jsonData["history"][$index11]["ancestor"]["delivery"]["address"]["index"] = $model->history[$index11]->ancestor->delivery->address->index;
}
if (null !== $model->history[$index11]->ancestor->delivery->address->countryIso) {
    $jsonData["history"][$index11]["ancestor"]["delivery"]["address"]["countryIso"] = $model->history[$index11]->ancestor->delivery->address->countryIso;
}
if (null !== $model->history[$index11]->ancestor->delivery->address->region) {
    $jsonData["history"][$index11]["ancestor"]["delivery"]["address"]["region"] = $model->history[$index11]->ancestor->delivery->address->region;
}
if (null !== $model->history[$index11]->ancestor->delivery->address->regionId) {
    $jsonData["history"][$index11]["ancestor"]["delivery"]["address"]["regionId"] = $model->history[$index11]->ancestor->delivery->address->regionId;
}
if (null !== $model->history[$index11]->ancestor->delivery->address->city) {
    $jsonData["history"][$index11]["ancestor"]["delivery"]["address"]["city"] = $model->history[$index11]->ancestor->delivery->address->city;
}
if (null !== $model->history[$index11]->ancestor->delivery->address->cityId) {
    $jsonData["history"][$index11]["ancestor"]["delivery"]["address"]["cityId"] = $model->history[$index11]->ancestor->delivery->address->cityId;
}
if (null !== $model->history[$index11]->ancestor->delivery->address->cityType) {
    $jsonData["history"][$index11]["ancestor"]["delivery"]["address"]["cityType"] = $model->history[$index11]->ancestor->delivery->address->cityType;
}
if (null !== $model->history[$index11]->ancestor->delivery->address->street) {
    $jsonData["history"][$index11]["ancestor"]["delivery"]["address"]["street"] = $model->history[$index11]->ancestor->delivery->address->street;
}
if (null !== $model->history[$index11]->ancestor->delivery->address->streetId) {
    $jsonData["history"][$index11]["ancestor"]["delivery"]["address"]["streetId"] = $model->history[$index11]->ancestor->delivery->address->streetId;
}
if (null !== $model->history[$index11]->ancestor->delivery->address->streetType) {
    $jsonData["history"][$index11]["ancestor"]["delivery"]["address"]["streetType"] = $model->history[$index11]->ancestor->delivery->address->streetType;
}
if (null !== $model->history[$index11]->ancestor->delivery->address->building) {
    $jsonData["history"][$index11]["ancestor"]["delivery"]["address"]["building"] = $model->history[$index11]->ancestor->delivery->address->building;
}
if (null !== $model->history[$index11]->ancestor->delivery->address->flat) {
    $jsonData["history"][$index11]["ancestor"]["delivery"]["address"]["flat"] = $model->history[$index11]->ancestor->delivery->address->flat;
}
if (null !== $model->history[$index11]->ancestor->delivery->address->floor) {
    $jsonData["history"][$index11]["ancestor"]["delivery"]["address"]["floor"] = $model->history[$index11]->ancestor->delivery->address->floor;
}
if (null !== $model->history[$index11]->ancestor->delivery->address->block) {
    $jsonData["history"][$index11]["ancestor"]["delivery"]["address"]["block"] = $model->history[$index11]->ancestor->delivery->address->block;
}
if (null !== $model->history[$index11]->ancestor->delivery->address->house) {
    $jsonData["history"][$index11]["ancestor"]["delivery"]["address"]["house"] = $model->history[$index11]->ancestor->delivery->address->house;
}
if (null !== $model->history[$index11]->ancestor->delivery->address->housing) {
    $jsonData["history"][$index11]["ancestor"]["delivery"]["address"]["housing"] = $model->history[$index11]->ancestor->delivery->address->housing;
}
if (null !== $model->history[$index11]->ancestor->delivery->address->metro) {
    $jsonData["history"][$index11]["ancestor"]["delivery"]["address"]["metro"] = $model->history[$index11]->ancestor->delivery->address->metro;
}
if (null !== $model->history[$index11]->ancestor->delivery->address->text) {
    $jsonData["history"][$index11]["ancestor"]["delivery"]["address"]["text"] = $model->history[$index11]->ancestor->delivery->address->text;
}

if (0 === \count($jsonData["history"][$index11]["ancestor"]["delivery"]["address"])) {
    $jsonData["history"][$index11]["ancestor"]["delivery"]["address"] = $emptyObject;
}

}
if (null !== $model->history[$index11]->ancestor->delivery->vatRate) {
    $jsonData["history"][$index11]["ancestor"]["delivery"]["vatRate"] = $model->history[$index11]->ancestor->delivery->vatRate;
}

if (0 === \count($jsonData["history"][$index11]["ancestor"]["delivery"])) {
    $jsonData["history"][$index11]["ancestor"]["delivery"] = $emptyObject;
}

}
if (null !== $model->history[$index11]->ancestor->marketplace) {
    $jsonData["history"][$index11]["ancestor"]["marketplace"] = [];
if (null !== $model->history[$index11]->ancestor->marketplace->code) {
    $jsonData["history"][$index11]["ancestor"]["marketplace"]["code"] = $model->history[$index11]->ancestor->marketplace->code;
}
if (null !== $model->history[$index11]->ancestor->marketplace->orderId) {
    $jsonData["history"][$index11]["ancestor"]["marketplace"]["orderId"] = $model->history[$index11]->ancestor->marketplace->orderId;
}

if (0 === \count($jsonData["history"][$index11]["ancestor"]["marketplace"])) {
    $jsonData["history"][$index11]["ancestor"]["marketplace"] = $emptyObject;
}

}
if (null !== $model->history[$index11]->ancestor->site) {
    $jsonData["history"][$index11]["ancestor"]["site"] = $model->history[$index11]->ancestor->site;
}
if (null !== $model->history[$index11]->ancestor->status) {
    $jsonData["history"][$index11]["ancestor"]["status"] = $model->history[$index11]->ancestor->status;
}
if (null !== $model->history[$index11]->ancestor->statusComment) {
    $jsonData["history"][$index11]["ancestor"]["statusComment"] = $model->history[$index11]->ancestor->statusComment;
}
if (null !== $model->history[$index11]->ancestor->source) {
    $jsonData["history"][$index11]["ancestor"]["source"] = [];
if (null !== $model->history[$index11]->ancestor->source->source) {
    $jsonData["history"][$index11]["ancestor"]["source"]["source"] = $model->history[$index11]->ancestor->source->source;
}
if (null !== $model->history[$index11]->ancestor->source->medium) {
    $jsonData["history"][$index11]["ancestor"]["source"]["medium"] = $model->history[$index11]->ancestor->source->medium;
}
if (null !== $model->history[$index11]->ancestor->source->campaign) {
    $jsonData["history"][$index11]["ancestor"]["source"]["campaign"] = $model->history[$index11]->ancestor->source->campaign;
}
if (null !== $model->history[$index11]->ancestor->source->keyword) {
    $jsonData["history"][$index11]["ancestor"]["source"]["keyword"] = $model->history[$index11]->ancestor->source->keyword;
}
if (null !== $model->history[$index11]->ancestor->source->content) {
    $jsonData["history"][$index11]["ancestor"]["source"]["content"] = $model->history[$index11]->ancestor->source->content;
}

if (0 === \count($jsonData["history"][$index11]["ancestor"]["source"])) {
    $jsonData["history"][$index11]["ancestor"]["source"] = $emptyObject;
}

}
if (null !== $model->history[$index11]->ancestor->items) {
    $jsonData["history"][$index11]["ancestor"]["items"] = [];
foreach (array_keys($model->history[$index11]->ancestor->items) as $index42) {
    $jsonData["history"][$index11]["ancestor"]["items"][$index42] = [];
if (null !== $model->history[$index11]->ancestor->items[$index42]->externalId) {
    $jsonData["history"][$index11]["ancestor"]["items"][$index42]["externalId"] = $model->history[$index11]->ancestor->items[$index42]->externalId;
}
if (null !== $model->history[$index11]->ancestor->items[$index42]->markingCodes) {
    $jsonData["history"][$index11]["ancestor"]["items"][$index42]["markingCodes"] = [];
foreach (array_keys($model->history[$index11]->ancestor->items[$index42]->markingCodes) as $index68) {
    $jsonData["history"][$index11]["ancestor"]["items"][$index42]["markingCodes"] = $model->history[$index11]->ancestor->items[$index42]->markingCodes;
}

}
if (null !== $model->history[$index11]->ancestor->items[$index42]->id) {
    $jsonData["history"][$index11]["ancestor"]["items"][$index42]["id"] = $model->history[$index11]->ancestor->items[$index42]->id;
}
if (null !== $model->history[$index11]->ancestor->items[$index42]->externalIds) {
    $jsonData["history"][$index11]["ancestor"]["items"][$index42]["externalIds"] = [];
foreach (array_keys($model->history[$index11]->ancestor->items[$index42]->externalIds) as $index67) {
    $jsonData["history"][$index11]["ancestor"]["items"][$index42]["externalIds"][$index67] = [];
if (null !== $model->history[$index11]->ancestor->items[$index42]->externalIds[$index67]->code) {
    $jsonData["history"][$index11]["ancestor"]["items"][$index42]["externalIds"][$index67]["code"] = $model->history[$index11]->ancestor->items[$index42]->externalIds[$index67]->code;
}
if (null !== $model->history[$index11]->ancestor->items[$index42]->externalIds[$index67]->value) {
    $jsonData["history"][$index11]["ancestor"]["items"][$index42]["externalIds"][$index67]["value"] = $model->history[$index11]->ancestor->items[$index42]->externalIds[$index67]->value;
}

if (0 === \count($jsonData["history"][$index11]["ancestor"]["items"][$index42]["externalIds"][$index67])) {
    $jsonData["history"][$index11]["ancestor"]["items"][$index42]["externalIds"][$index67] = $emptyObject;
}

}

}
if (null !== $model->history[$index11]->ancestor->items[$index42]->priceType) {
    $jsonData["history"][$index11]["ancestor"]["items"][$index42]["priceType"] = [];
if (null !== $model->history[$index11]->ancestor->items[$index42]->priceType->code) {
    $jsonData["history"][$index11]["ancestor"]["items"][$index42]["priceType"]["code"] = $model->history[$index11]->ancestor->items[$index42]->priceType->code;
}

if (0 === \count($jsonData["history"][$index11]["ancestor"]["items"][$index42]["priceType"])) {
    $jsonData["history"][$index11]["ancestor"]["items"][$index42]["priceType"] = $emptyObject;
}

}
if (null !== $model->history[$index11]->ancestor->items[$index42]->initialPrice) {
    $jsonData["history"][$index11]["ancestor"]["items"][$index42]["initialPrice"] = $model->history[$index11]->ancestor->items[$index42]->initialPrice;
}
if (null !== $model->history[$index11]->ancestor->items[$index42]->discountManualAmount) {
    $jsonData["history"][$index11]["ancestor"]["items"][$index42]["discountManualAmount"] = $model->history[$index11]->ancestor->items[$index42]->discountManualAmount;
}
if (null !== $model->history[$index11]->ancestor->items[$index42]->discountManualPercent) {
    $jsonData["history"][$index11]["ancestor"]["items"][$index42]["discountManualPercent"] = $model->history[$index11]->ancestor->items[$index42]->discountManualPercent;
}
if (null !== $model->history[$index11]->ancestor->items[$index42]->discountTotal) {
    $jsonData["history"][$index11]["ancestor"]["items"][$index42]["discountTotal"] = $model->history[$index11]->ancestor->items[$index42]->discountTotal;
}
if (null !== $model->history[$index11]->ancestor->items[$index42]->prices) {
    $jsonData["history"][$index11]["ancestor"]["items"][$index42]["prices"] = [];
foreach (array_keys($model->history[$index11]->ancestor->items[$index42]->prices) as $index62) {
    $jsonData["history"][$index11]["ancestor"]["items"][$index42]["prices"][$index62] = [];
if (null !== $model->history[$index11]->ancestor->items[$index42]->prices[$index62]->price) {
    $jsonData["history"][$index11]["ancestor"]["items"][$index42]["prices"][$index62]["price"] = $model->history[$index11]->ancestor->items[$index42]->prices[$index62]->price;
}
if (null !== $model->history[$index11]->ancestor->items[$index42]->prices[$index62]->quantity) {
    $jsonData["history"][$index11]["ancestor"]["items"][$index42]["prices"][$index62]["quantity"] = $model->history[$index11]->ancestor->items[$index42]->prices[$index62]->quantity;
}

if (0 === \count($jsonData["history"][$index11]["ancestor"]["items"][$index42]["prices"][$index62])) {
    $jsonData["history"][$index11]["ancestor"]["items"][$index42]["prices"][$index62] = $emptyObject;
}

}

}
if (null !== $model->history[$index11]->ancestor->items[$index42]->vatRate) {
    $jsonData["history"][$index11]["ancestor"]["items"][$index42]["vatRate"] = $model->history[$index11]->ancestor->items[$index42]->vatRate;
}
if (null !== $model->history[$index11]->ancestor->items[$index42]->createdAt) {
    $jsonData["history"][$index11]["ancestor"]["items"][$index42]["createdAt"] = $model->history[$index11]->ancestor->items[$index42]->createdAt->format('Y-m-d H:i:s');;
}
if (null !== $model->history[$index11]->ancestor->items[$index42]->quantity) {
    $jsonData["history"][$index11]["ancestor"]["items"][$index42]["quantity"] = $model->history[$index11]->ancestor->items[$index42]->quantity;
}
if (null !== $model->history[$index11]->ancestor->items[$index42]->status) {
    $jsonData["history"][$index11]["ancestor"]["items"][$index42]["status"] = $model->history[$index11]->ancestor->items[$index42]->status;
}
if (null !== $model->history[$index11]->ancestor->items[$index42]->comment) {
    $jsonData["history"][$index11]["ancestor"]["items"][$index42]["comment"] = $model->history[$index11]->ancestor->items[$index42]->comment;
}
if (null !== $model->history[$index11]->ancestor->items[$index42]->offer) {
    $jsonData["history"][$index11]["ancestor"]["items"][$index42]["offer"] = [];
if (null !== $model->history[$index11]->ancestor->items[$index42]->offer->displayName) {
    $jsonData["history"][$index11]["ancestor"]["items"][$index42]["offer"]["displayName"] = $model->history[$index11]->ancestor->items[$index42]->offer->displayName;
}
if (null !== $model->history[$index11]->ancestor->items[$index42]->offer->id) {
    $jsonData["history"][$index11]["ancestor"]["items"][$index42]["offer"]["id"] = $model->history[$index11]->ancestor->items[$index42]->offer->id;
}
if (null !== $model->history[$index11]->ancestor->items[$index42]->offer->externalId) {
    $jsonData["history"][$index11]["ancestor"]["items"][$index42]["offer"]["externalId"] = $model->history[$index11]->ancestor->items[$index42]->offer->externalId;
}
if (null !== $model->history[$index11]->ancestor->items[$index42]->offer->xmlId) {
    $jsonData["history"][$index11]["ancestor"]["items"][$index42]["offer"]["xmlId"] = $model->history[$index11]->ancestor->items[$index42]->offer->xmlId;
}
if (null !== $model->history[$index11]->ancestor->items[$index42]->offer->name) {
    $jsonData["history"][$index11]["ancestor"]["items"][$index42]["offer"]["name"] = $model->history[$index11]->ancestor->items[$index42]->offer->name;
}
if (null !== $model->history[$index11]->ancestor->items[$index42]->offer->article) {
    $jsonData["history"][$index11]["ancestor"]["items"][$index42]["offer"]["article"] = $model->history[$index11]->ancestor->items[$index42]->offer->article;
}
if (null !== $model->history[$index11]->ancestor->items[$index42]->offer->vatRate) {
    $jsonData["history"][$index11]["ancestor"]["items"][$index42]["offer"]["vatRate"] = $model->history[$index11]->ancestor->items[$index42]->offer->vatRate;
}
if (null !== $model->history[$index11]->ancestor->items[$index42]->offer->unit) {
    $jsonData["history"][$index11]["ancestor"]["items"][$index42]["offer"]["unit"] = [];
if (null !== $model->history[$index11]->ancestor->items[$index42]->offer->unit->code) {
    $jsonData["history"][$index11]["ancestor"]["items"][$index42]["offer"]["unit"]["code"] = $model->history[$index11]->ancestor->items[$index42]->offer->unit->code;
}
if (null !== $model->history[$index11]->ancestor->items[$index42]->offer->unit->name) {
    $jsonData["history"][$index11]["ancestor"]["items"][$index42]["offer"]["unit"]["name"] = $model->history[$index11]->ancestor->items[$index42]->offer->unit->name;
}
if (null !== $model->history[$index11]->ancestor->items[$index42]->offer->unit->sym) {
    $jsonData["history"][$index11]["ancestor"]["items"][$index42]["offer"]["unit"]["sym"] = $model->history[$index11]->ancestor->items[$index42]->offer->unit->sym;
}

if (0 === \count($jsonData["history"][$index11]["ancestor"]["items"][$index42]["offer"]["unit"])) {
    $jsonData["history"][$index11]["ancestor"]["items"][$index42]["offer"]["unit"] = $emptyObject;
}

}
if (null !== $model->history[$index11]->ancestor->items[$index42]->offer->barcode) {
    $jsonData["history"][$index11]["ancestor"]["items"][$index42]["offer"]["barcode"] = $model->history[$index11]->ancestor->items[$index42]->offer->barcode;
}
if (null !== $model->history[$index11]->ancestor->items[$index42]->offer->properties) {
    $jsonData["history"][$index11]["ancestor"]["items"][$index42]["offer"]["properties"] = [];
foreach (array_keys($model->history[$index11]->ancestor->items[$index42]->offer->properties) as $index75) {
    $jsonData["history"][$index11]["ancestor"]["items"][$index42]["offer"]["properties"] = $model->history[$index11]->ancestor->items[$index42]->offer->properties;
}

}

if (0 === \count($jsonData["history"][$index11]["ancestor"]["items"][$index42]["offer"])) {
    $jsonData["history"][$index11]["ancestor"]["items"][$index42]["offer"] = $emptyObject;
}

}
if (null !== $model->history[$index11]->ancestor->items[$index42]->productName) {
    $jsonData["history"][$index11]["ancestor"]["items"][$index42]["productName"] = $model->history[$index11]->ancestor->items[$index42]->productName;
}
if (null !== $model->history[$index11]->ancestor->items[$index42]->isCanceled) {
    $jsonData["history"][$index11]["ancestor"]["items"][$index42]["isCanceled"] = $model->history[$index11]->ancestor->items[$index42]->isCanceled;
}
if (null !== $model->history[$index11]->ancestor->items[$index42]->properties) {
    if (0 === \count($model->history[$index11]->ancestor->items[$index42]->properties)) {
    $jsonData["history"][$index11]["ancestor"]["items"][$index42]["properties"] = $emptyHashmap;
} else {
    foreach (array_keys($model->history[$index11]->ancestor->items[$index42]->properties) as $index66) {
        $jsonData["history"][$index11]["ancestor"]["items"][$index42]["properties"][$index66] = [];
if (null !== $model->history[$index11]->ancestor->items[$index42]->properties[$index66]->code) {
    $jsonData["history"][$index11]["ancestor"]["items"][$index42]["properties"][$index66]["code"] = $model->history[$index11]->ancestor->items[$index42]->properties[$index66]->code;
}
if (null !== $model->history[$index11]->ancestor->items[$index42]->properties[$index66]->name) {
    $jsonData["history"][$index11]["ancestor"]["items"][$index42]["properties"][$index66]["name"] = $model->history[$index11]->ancestor->items[$index42]->properties[$index66]->name;
}
if (null !== $model->history[$index11]->ancestor->items[$index42]->properties[$index66]->value) {
    $jsonData["history"][$index11]["ancestor"]["items"][$index42]["properties"][$index66]["value"] = $model->history[$index11]->ancestor->items[$index42]->properties[$index66]->value;
}

if (0 === \count($jsonData["history"][$index11]["ancestor"]["items"][$index42]["properties"][$index66])) {
    $jsonData["history"][$index11]["ancestor"]["items"][$index42]["properties"][$index66] = $emptyObject;
}

    }
}

}
if (null !== $model->history[$index11]->ancestor->items[$index42]->purchasePrice) {
    $jsonData["history"][$index11]["ancestor"]["items"][$index42]["purchasePrice"] = $model->history[$index11]->ancestor->items[$index42]->purchasePrice;
}

if (0 === \count($jsonData["history"][$index11]["ancestor"]["items"][$index42])) {
    $jsonData["history"][$index11]["ancestor"]["items"][$index42] = $emptyObject;
}

}

}
if (null !== $model->history[$index11]->ancestor->fullPaidAt) {
    $jsonData["history"][$index11]["ancestor"]["fullPaidAt"] = $model->history[$index11]->ancestor->fullPaidAt->format('Y-m-d H:i:s');;
}
if (null !== $model->history[$index11]->ancestor->payments) {
    $jsonData["history"][$index11]["ancestor"]["payments"] = [];
foreach (array_keys($model->history[$index11]->ancestor->payments) as $index45) {
    $jsonData["history"][$index11]["ancestor"]["payments"][$index45] = [];
if (null !== $model->history[$index11]->ancestor->payments[$index45]->id) {
    $jsonData["history"][$index11]["ancestor"]["payments"][$index45]["id"] = $model->history[$index11]->ancestor->payments[$index45]->id;
}
if (null !== $model->history[$index11]->ancestor->payments[$index45]->status) {
    $jsonData["history"][$index11]["ancestor"]["payments"][$index45]["status"] = $model->history[$index11]->ancestor->payments[$index45]->status;
}
if (null !== $model->history[$index11]->ancestor->payments[$index45]->type) {
    $jsonData["history"][$index11]["ancestor"]["payments"][$index45]["type"] = $model->history[$index11]->ancestor->payments[$index45]->type;
}
if (null !== $model->history[$index11]->ancestor->payments[$index45]->externalId) {
    $jsonData["history"][$index11]["ancestor"]["payments"][$index45]["externalId"] = $model->history[$index11]->ancestor->payments[$index45]->externalId;
}
if (null !== $model->history[$index11]->ancestor->payments[$index45]->amount) {
    $jsonData["history"][$index11]["ancestor"]["payments"][$index45]["amount"] = $model->history[$index11]->ancestor->payments[$index45]->amount;
}
if (null !== $model->history[$index11]->ancestor->payments[$index45]->paidAt) {
    $jsonData["history"][$index11]["ancestor"]["payments"][$index45]["paidAt"] = $model->history[$index11]->ancestor->payments[$index45]->paidAt->format('Y-m-d H:i:s');;
}
if (null !== $model->history[$index11]->ancestor->payments[$index45]->comment) {
    $jsonData["history"][$index11]["ancestor"]["payments"][$index45]["comment"] = $model->history[$index11]->ancestor->payments[$index45]->comment;
}

if (0 === \count($jsonData["history"][$index11]["ancestor"]["payments"][$index45])) {
    $jsonData["history"][$index11]["ancestor"]["payments"][$index45] = $emptyObject;
}

}

}
if (null !== $model->history[$index11]->ancestor->fromApi) {
    $jsonData["history"][$index11]["ancestor"]["fromApi"] = $model->history[$index11]->ancestor->fromApi;
}
if (null !== $model->history[$index11]->ancestor->weight) {
    $jsonData["history"][$index11]["ancestor"]["weight"] = $model->history[$index11]->ancestor->weight;
}
if (null !== $model->history[$index11]->ancestor->length) {
    $jsonData["history"][$index11]["ancestor"]["length"] = $model->history[$index11]->ancestor->length;
}
if (null !== $model->history[$index11]->ancestor->width) {
    $jsonData["history"][$index11]["ancestor"]["width"] = $model->history[$index11]->ancestor->width;
}
if (null !== $model->history[$index11]->ancestor->height) {
    $jsonData["history"][$index11]["ancestor"]["height"] = $model->history[$index11]->ancestor->height;
}
if (null !== $model->history[$index11]->ancestor->shipmentStore) {
    $jsonData["history"][$index11]["ancestor"]["shipmentStore"] = $model->history[$index11]->ancestor->shipmentStore;
}
if (null !== $model->history[$index11]->ancestor->shipmentDate) {
    $jsonData["history"][$index11]["ancestor"]["shipmentDate"] = $model->history[$index11]->ancestor->shipmentDate->format('Y-m-d');;
}
if (null !== $model->history[$index11]->ancestor->shipped) {
    $jsonData["history"][$index11]["ancestor"]["shipped"] = $model->history[$index11]->ancestor->shipped;
}
if (null !== $model->history[$index11]->ancestor->dialogId) {
    $jsonData["history"][$index11]["ancestor"]["dialogId"] = $model->history[$index11]->ancestor->dialogId;
}
if (null !== $model->history[$index11]->ancestor->customFields) {
    $jsonData["history"][$index11]["ancestor"]["customFields"] = [];
foreach (array_keys($model->history[$index11]->ancestor->customFields) as $index49) {
    $jsonData["history"][$index11]["ancestor"]["customFields"] = $model->history[$index11]->ancestor->customFields;
}

}
if (null !== $model->history[$index11]->ancestor->clientId) {
    $jsonData["history"][$index11]["ancestor"]["clientId"] = $model->history[$index11]->ancestor->clientId;
}
if (null !== $model->history[$index11]->ancestor->loyaltyEventId) {
    $jsonData["history"][$index11]["ancestor"]["loyaltyEventId"] = $model->history[$index11]->ancestor->loyaltyEventId;
}

if (0 === \count($jsonData["history"][$index11]["ancestor"])) {
    $jsonData["history"][$index11]["ancestor"] = $emptyObject;
}

}
if (null !== $model->history[$index11]->item) {
    $jsonData["history"][$index11]["item"] = [];
if (null !== $model->history[$index11]->item->externalId) {
    $jsonData["history"][$index11]["item"]["externalId"] = $model->history[$index11]->item->externalId;
}
if (null !== $model->history[$index11]->item->markingCodes) {
    $jsonData["history"][$index11]["item"]["markingCodes"] = [];
foreach (array_keys($model->history[$index11]->item->markingCodes) as $index45) {
    $jsonData["history"][$index11]["item"]["markingCodes"] = $model->history[$index11]->item->markingCodes;
}

}
if (null !== $model->history[$index11]->item->id) {
    $jsonData["history"][$index11]["item"]["id"] = $model->history[$index11]->item->id;
}
if (null !== $model->history[$index11]->item->externalIds) {
    $jsonData["history"][$index11]["item"]["externalIds"] = [];
foreach (array_keys($model->history[$index11]->item->externalIds) as $index44) {
    $jsonData["history"][$index11]["item"]["externalIds"][$index44] = [];
if (null !== $model->history[$index11]->item->externalIds[$index44]->code) {
    $jsonData["history"][$index11]["item"]["externalIds"][$index44]["code"] = $model->history[$index11]->item->externalIds[$index44]->code;
}
if (null !== $model->history[$index11]->item->externalIds[$index44]->value) {
    $jsonData["history"][$index11]["item"]["externalIds"][$index44]["value"] = $model->history[$index11]->item->externalIds[$index44]->value;
}

if (0 === \count($jsonData["history"][$index11]["item"]["externalIds"][$index44])) {
    $jsonData["history"][$index11]["item"]["externalIds"][$index44] = $emptyObject;
}

}

}
if (null !== $model->history[$index11]->item->priceType) {
    $jsonData["history"][$index11]["item"]["priceType"] = [];
if (null !== $model->history[$index11]->item->priceType->code) {
    $jsonData["history"][$index11]["item"]["priceType"]["code"] = $model->history[$index11]->item->priceType->code;
}

if (0 === \count($jsonData["history"][$index11]["item"]["priceType"])) {
    $jsonData["history"][$index11]["item"]["priceType"] = $emptyObject;
}

}
if (null !== $model->history[$index11]->item->initialPrice) {
    $jsonData["history"][$index11]["item"]["initialPrice"] = $model->history[$index11]->item->initialPrice;
}
if (null !== $model->history[$index11]->item->discountManualAmount) {
    $jsonData["history"][$index11]["item"]["discountManualAmount"] = $model->history[$index11]->item->discountManualAmount;
}
if (null !== $model->history[$index11]->item->discountManualPercent) {
    $jsonData["history"][$index11]["item"]["discountManualPercent"] = $model->history[$index11]->item->discountManualPercent;
}
if (null !== $model->history[$index11]->item->discountTotal) {
    $jsonData["history"][$index11]["item"]["discountTotal"] = $model->history[$index11]->item->discountTotal;
}
if (null !== $model->history[$index11]->item->prices) {
    $jsonData["history"][$index11]["item"]["prices"] = [];
foreach (array_keys($model->history[$index11]->item->prices) as $index39) {
    $jsonData["history"][$index11]["item"]["prices"][$index39] = [];
if (null !== $model->history[$index11]->item->prices[$index39]->price) {
    $jsonData["history"][$index11]["item"]["prices"][$index39]["price"] = $model->history[$index11]->item->prices[$index39]->price;
}
if (null !== $model->history[$index11]->item->prices[$index39]->quantity) {
    $jsonData["history"][$index11]["item"]["prices"][$index39]["quantity"] = $model->history[$index11]->item->prices[$index39]->quantity;
}

if (0 === \count($jsonData["history"][$index11]["item"]["prices"][$index39])) {
    $jsonData["history"][$index11]["item"]["prices"][$index39] = $emptyObject;
}

}

}
if (null !== $model->history[$index11]->item->vatRate) {
    $jsonData["history"][$index11]["item"]["vatRate"] = $model->history[$index11]->item->vatRate;
}
if (null !== $model->history[$index11]->item->createdAt) {
    $jsonData["history"][$index11]["item"]["createdAt"] = $model->history[$index11]->item->createdAt->format('Y-m-d H:i:s');;
}
if (null !== $model->history[$index11]->item->quantity) {
    $jsonData["history"][$index11]["item"]["quantity"] = $model->history[$index11]->item->quantity;
}
if (null !== $model->history[$index11]->item->status) {
    $jsonData["history"][$index11]["item"]["status"] = $model->history[$index11]->item->status;
}
if (null !== $model->history[$index11]->item->comment) {
    $jsonData["history"][$index11]["item"]["comment"] = $model->history[$index11]->item->comment;
}
if (null !== $model->history[$index11]->item->offer) {
    $jsonData["history"][$index11]["item"]["offer"] = [];
if (null !== $model->history[$index11]->item->offer->displayName) {
    $jsonData["history"][$index11]["item"]["offer"]["displayName"] = $model->history[$index11]->item->offer->displayName;
}
if (null !== $model->history[$index11]->item->offer->id) {
    $jsonData["history"][$index11]["item"]["offer"]["id"] = $model->history[$index11]->item->offer->id;
}
if (null !== $model->history[$index11]->item->offer->externalId) {
    $jsonData["history"][$index11]["item"]["offer"]["externalId"] = $model->history[$index11]->item->offer->externalId;
}
if (null !== $model->history[$index11]->item->offer->xmlId) {
    $jsonData["history"][$index11]["item"]["offer"]["xmlId"] = $model->history[$index11]->item->offer->xmlId;
}
if (null !== $model->history[$index11]->item->offer->name) {
    $jsonData["history"][$index11]["item"]["offer"]["name"] = $model->history[$index11]->item->offer->name;
}
if (null !== $model->history[$index11]->item->offer->article) {
    $jsonData["history"][$index11]["item"]["offer"]["article"] = $model->history[$index11]->item->offer->article;
}
if (null !== $model->history[$index11]->item->offer->vatRate) {
    $jsonData["history"][$index11]["item"]["offer"]["vatRate"] = $model->history[$index11]->item->offer->vatRate;
}
if (null !== $model->history[$index11]->item->offer->unit) {
    $jsonData["history"][$index11]["item"]["offer"]["unit"] = [];
if (null !== $model->history[$index11]->item->offer->unit->code) {
    $jsonData["history"][$index11]["item"]["offer"]["unit"]["code"] = $model->history[$index11]->item->offer->unit->code;
}
if (null !== $model->history[$index11]->item->offer->unit->name) {
    $jsonData["history"][$index11]["item"]["offer"]["unit"]["name"] = $model->history[$index11]->item->offer->unit->name;
}
if (null !== $model->history[$index11]->item->offer->unit->sym) {
    $jsonData["history"][$index11]["item"]["offer"]["unit"]["sym"] = $model->history[$index11]->item->offer->unit->sym;
}

if (0 === \count($jsonData["history"][$index11]["item"]["offer"]["unit"])) {
    $jsonData["history"][$index11]["item"]["offer"]["unit"] = $emptyObject;
}

}
if (null !== $model->history[$index11]->item->offer->barcode) {
    $jsonData["history"][$index11]["item"]["offer"]["barcode"] = $model->history[$index11]->item->offer->barcode;
}
if (null !== $model->history[$index11]->item->offer->properties) {
    $jsonData["history"][$index11]["item"]["offer"]["properties"] = [];
foreach (array_keys($model->history[$index11]->item->offer->properties) as $index52) {
    $jsonData["history"][$index11]["item"]["offer"]["properties"] = $model->history[$index11]->item->offer->properties;
}

}

if (0 === \count($jsonData["history"][$index11]["item"]["offer"])) {
    $jsonData["history"][$index11]["item"]["offer"] = $emptyObject;
}

}
if (null !== $model->history[$index11]->item->productName) {
    $jsonData["history"][$index11]["item"]["productName"] = $model->history[$index11]->item->productName;
}
if (null !== $model->history[$index11]->item->isCanceled) {
    $jsonData["history"][$index11]["item"]["isCanceled"] = $model->history[$index11]->item->isCanceled;
}
if (null !== $model->history[$index11]->item->properties) {
    if (0 === \count($model->history[$index11]->item->properties)) {
    $jsonData["history"][$index11]["item"]["properties"] = $emptyHashmap;
} else {
    foreach (array_keys($model->history[$index11]->item->properties) as $index43) {
        $jsonData["history"][$index11]["item"]["properties"][$index43] = [];
if (null !== $model->history[$index11]->item->properties[$index43]->code) {
    $jsonData["history"][$index11]["item"]["properties"][$index43]["code"] = $model->history[$index11]->item->properties[$index43]->code;
}
if (null !== $model->history[$index11]->item->properties[$index43]->name) {
    $jsonData["history"][$index11]["item"]["properties"][$index43]["name"] = $model->history[$index11]->item->properties[$index43]->name;
}
if (null !== $model->history[$index11]->item->properties[$index43]->value) {
    $jsonData["history"][$index11]["item"]["properties"][$index43]["value"] = $model->history[$index11]->item->properties[$index43]->value;
}

if (0 === \count($jsonData["history"][$index11]["item"]["properties"][$index43])) {
    $jsonData["history"][$index11]["item"]["properties"][$index43] = $emptyObject;
}

    }
}

}
if (null !== $model->history[$index11]->item->purchasePrice) {
    $jsonData["history"][$index11]["item"]["purchasePrice"] = $model->history[$index11]->item->purchasePrice;
}

if (0 === \count($jsonData["history"][$index11]["item"])) {
    $jsonData["history"][$index11]["item"] = $emptyObject;
}

}
if (null !== $model->history[$index11]->payment) {
    $jsonData["history"][$index11]["payment"] = [];
if (null !== $model->history[$index11]->payment->id) {
    $jsonData["history"][$index11]["payment"]["id"] = $model->history[$index11]->payment->id;
}
if (null !== $model->history[$index11]->payment->status) {
    $jsonData["history"][$index11]["payment"]["status"] = $model->history[$index11]->payment->status;
}
if (null !== $model->history[$index11]->payment->type) {
    $jsonData["history"][$index11]["payment"]["type"] = $model->history[$index11]->payment->type;
}
if (null !== $model->history[$index11]->payment->externalId) {
    $jsonData["history"][$index11]["payment"]["externalId"] = $model->history[$index11]->payment->externalId;
}
if (null !== $model->history[$index11]->payment->amount) {
    $jsonData["history"][$index11]["payment"]["amount"] = $model->history[$index11]->payment->amount;
}
if (null !== $model->history[$index11]->payment->paidAt) {
    $jsonData["history"][$index11]["payment"]["paidAt"] = $model->history[$index11]->payment->paidAt->format('Y-m-d H:i:s');;
}
if (null !== $model->history[$index11]->payment->comment) {
    $jsonData["history"][$index11]["payment"]["comment"] = $model->history[$index11]->payment->comment;
}

if (0 === \count($jsonData["history"][$index11]["payment"])) {
    $jsonData["history"][$index11]["payment"] = $emptyObject;
}

}
if (null !== $model->history[$index11]->combinedTo) {
    $jsonData["history"][$index11]["combinedTo"] = [];
if (null !== $model->history[$index11]->combinedTo->bonusesCreditTotal) {
    $jsonData["history"][$index11]["combinedTo"]["bonusesCreditTotal"] = $model->history[$index11]->combinedTo->bonusesCreditTotal;
}
if (null !== $model->history[$index11]->combinedTo->bonusesChargeTotal) {
    $jsonData["history"][$index11]["combinedTo"]["bonusesChargeTotal"] = $model->history[$index11]->combinedTo->bonusesChargeTotal;
}
if (null !== $model->history[$index11]->combinedTo->summ) {
    $jsonData["history"][$index11]["combinedTo"]["summ"] = $model->history[$index11]->combinedTo->summ;
}
if (null !== $model->history[$index11]->combinedTo->id) {
    $jsonData["history"][$index11]["combinedTo"]["id"] = $model->history[$index11]->combinedTo->id;
}
if (null !== $model->history[$index11]->combinedTo->slug) {
    $jsonData["history"][$index11]["combinedTo"]["slug"] = $model->history[$index11]->combinedTo->slug;
}
if (null !== $model->history[$index11]->combinedTo->number) {
    $jsonData["history"][$index11]["combinedTo"]["number"] = $model->history[$index11]->combinedTo->number;
}
if (null !== $model->history[$index11]->combinedTo->externalId) {
    $jsonData["history"][$index11]["combinedTo"]["externalId"] = $model->history[$index11]->combinedTo->externalId;
}
if (null !== $model->history[$index11]->combinedTo->orderType) {
    $jsonData["history"][$index11]["combinedTo"]["orderType"] = $model->history[$index11]->combinedTo->orderType;
}
if (null !== $model->history[$index11]->combinedTo->orderMethod) {
    $jsonData["history"][$index11]["combinedTo"]["orderMethod"] = $model->history[$index11]->combinedTo->orderMethod;
}
if (null !== $model->history[$index11]->combinedTo->privilegeType) {
    $jsonData["history"][$index11]["combinedTo"]["privilegeType"] = $model->history[$index11]->combinedTo->privilegeType;
}
if (null !== $model->history[$index11]->combinedTo->countryIso) {
    $jsonData["history"][$index11]["combinedTo"]["countryIso"] = $model->history[$index11]->combinedTo->countryIso;
}
if (null !== $model->history[$index11]->combinedTo->createdAt) {
    $jsonData["history"][$index11]["combinedTo"]["createdAt"] = $model->history[$index11]->combinedTo->createdAt->format('Y-m-d H:i:s');;
}
if (null !== $model->history[$index11]->combinedTo->statusUpdatedAt) {
    $jsonData["history"][$index11]["combinedTo"]["statusUpdatedAt"] = $model->history[$index11]->combinedTo->statusUpdatedAt->format('Y-m-d H:i:s');;
}
if (null !== $model->history[$index11]->combinedTo->discountManualAmount) {
    $jsonData["history"][$index11]["combinedTo"]["discountManualAmount"] = $model->history[$index11]->combinedTo->discountManualAmount;
}
if (null !== $model->history[$index11]->combinedTo->discountManualPercent) {
    $jsonData["history"][$index11]["combinedTo"]["discountManualPercent"] = $model->history[$index11]->combinedTo->discountManualPercent;
}
if (null !== $model->history[$index11]->combinedTo->totalSumm) {
    $jsonData["history"][$index11]["combinedTo"]["totalSumm"] = $model->history[$index11]->combinedTo->totalSumm;
}
if (null !== $model->history[$index11]->combinedTo->prepaySum) {
    $jsonData["history"][$index11]["combinedTo"]["prepaySum"] = $model->history[$index11]->combinedTo->prepaySum;
}
if (null !== $model->history[$index11]->combinedTo->purchaseSumm) {
    $jsonData["history"][$index11]["combinedTo"]["purchaseSumm"] = $model->history[$index11]->combinedTo->purchaseSumm;
}
if (null !== $model->history[$index11]->combinedTo->personalDiscountPercent) {
    $jsonData["history"][$index11]["combinedTo"]["personalDiscountPercent"] = $model->history[$index11]->combinedTo->personalDiscountPercent;
}
if (null !== $model->history[$index11]->combinedTo->loyaltyLevel) {
    $jsonData["history"][$index11]["combinedTo"]["loyaltyLevel"] = [];
if (null !== $model->history[$index11]->combinedTo->loyaltyLevel->id) {
    $jsonData["history"][$index11]["combinedTo"]["loyaltyLevel"]["id"] = $model->history[$index11]->combinedTo->loyaltyLevel->id;
}
if (null !== $model->history[$index11]->combinedTo->loyaltyLevel->name) {
    $jsonData["history"][$index11]["combinedTo"]["loyaltyLevel"]["name"] = $model->history[$index11]->combinedTo->loyaltyLevel->name;
}

if (0 === \count($jsonData["history"][$index11]["combinedTo"]["loyaltyLevel"])) {
    $jsonData["history"][$index11]["combinedTo"]["loyaltyLevel"] = $emptyObject;
}

}
if (null !== $model->history[$index11]->combinedTo->loyaltyEvent) {
    $jsonData["history"][$index11]["combinedTo"]["loyaltyEvent"] = [];
if (null !== $model->history[$index11]->combinedTo->loyaltyEvent->id) {
    $jsonData["history"][$index11]["combinedTo"]["loyaltyEvent"]["id"] = $model->history[$index11]->combinedTo->loyaltyEvent->id;
}

if (0 === \count($jsonData["history"][$index11]["combinedTo"]["loyaltyEvent"])) {
    $jsonData["history"][$index11]["combinedTo"]["loyaltyEvent"] = $emptyObject;
}

}
if (null !== $model->history[$index11]->combinedTo->mark) {
    $jsonData["history"][$index11]["combinedTo"]["mark"] = $model->history[$index11]->combinedTo->mark;
}
if (null !== $model->history[$index11]->combinedTo->markDatetime) {
    $jsonData["history"][$index11]["combinedTo"]["markDatetime"] = $model->history[$index11]->combinedTo->markDatetime->format('Y-m-d H:i:s');;
}
if (null !== $model->history[$index11]->combinedTo->lastName) {
    $jsonData["history"][$index11]["combinedTo"]["lastName"] = $model->history[$index11]->combinedTo->lastName;
}
if (null !== $model->history[$index11]->combinedTo->firstName) {
    $jsonData["history"][$index11]["combinedTo"]["firstName"] = $model->history[$index11]->combinedTo->firstName;
}
if (null !== $model->history[$index11]->combinedTo->patronymic) {
    $jsonData["history"][$index11]["combinedTo"]["patronymic"] = $model->history[$index11]->combinedTo->patronymic;
}
if (null !== $model->history[$index11]->combinedTo->phone) {
    $jsonData["history"][$index11]["combinedTo"]["phone"] = $model->history[$index11]->combinedTo->phone;
}
if (null !== $model->history[$index11]->combinedTo->additionalPhone) {
    $jsonData["history"][$index11]["combinedTo"]["additionalPhone"] = $model->history[$index11]->combinedTo->additionalPhone;
}
if (null !== $model->history[$index11]->combinedTo->email) {
    $jsonData["history"][$index11]["combinedTo"]["email"] = $model->history[$index11]->combinedTo->email;
}
if (null !== $model->history[$index11]->combinedTo->call) {
    $jsonData["history"][$index11]["combinedTo"]["call"] = $model->history[$index11]->combinedTo->call;
}
if (null !== $model->history[$index11]->combinedTo->expired) {
    $jsonData["history"][$index11]["combinedTo"]["expired"] = $model->history[$index11]->combinedTo->expired;
}
if (null !== $model->history[$index11]->combinedTo->customerComment) {
    $jsonData["history"][$index11]["combinedTo"]["customerComment"] = $model->history[$index11]->combinedTo->customerComment;
}
if (null !== $model->history[$index11]->combinedTo->managerComment) {
    $jsonData["history"][$index11]["combinedTo"]["managerComment"] = $model->history[$index11]->combinedTo->managerComment;
}
if (null !== $model->history[$index11]->combinedTo->managerId) {
    $jsonData["history"][$index11]["combinedTo"]["managerId"] = $model->history[$index11]->combinedTo->managerId;
}
if (null !== $model->history[$index11]->combinedTo->customer) {
    $jsonData["history"][$index11]["combinedTo"]["customer"] = [];

if (0 === \count($jsonData["history"][$index11]["combinedTo"]["customer"])) {
    $jsonData["history"][$index11]["combinedTo"]["customer"] = $emptyObject;
}

if ($model->history[$index11]->combinedTo->customer instanceof \RetailCrm\Api\Model\Entity\Customers\Customer) {
    $jsonData["history"][$index11]["combinedTo"]["customer"] = [];
if (null !== $model->history[$index11]->combinedTo->customer->type) {
    $jsonData["history"][$index11]["combinedTo"]["customer"]["type"] = $model->history[$index11]->combinedTo->customer->type;
}
if (null !== $model->history[$index11]->combinedTo->customer->id) {
    $jsonData["history"][$index11]["combinedTo"]["customer"]["id"] = $model->history[$index11]->combinedTo->customer->id;
}
if (null !== $model->history[$index11]->combinedTo->customer->externalId) {
    $jsonData["history"][$index11]["combinedTo"]["customer"]["externalId"] = $model->history[$index11]->combinedTo->customer->externalId;
}
if (null !== $model->history[$index11]->combinedTo->customer->isContact) {
    $jsonData["history"][$index11]["combinedTo"]["customer"]["isContact"] = $model->history[$index11]->combinedTo->customer->isContact;
}
if (null !== $model->history[$index11]->combinedTo->customer->createdAt) {
    $jsonData["history"][$index11]["combinedTo"]["customer"]["createdAt"] = $model->history[$index11]->combinedTo->customer->createdAt->format('Y-m-d H:i:s');;
}
if (null !== $model->history[$index11]->combinedTo->customer->managerId) {
    $jsonData["history"][$index11]["combinedTo"]["customer"]["managerId"] = $model->history[$index11]->combinedTo->customer->managerId;
}
if (null !== $model->history[$index11]->combinedTo->customer->vip) {
    $jsonData["history"][$index11]["combinedTo"]["customer"]["vip"] = $model->history[$index11]->combinedTo->customer->vip;
}
if (null !== $model->history[$index11]->combinedTo->customer->bad) {
    $jsonData["history"][$index11]["combinedTo"]["customer"]["bad"] = $model->history[$index11]->combinedTo->customer->bad;
}
if (null !== $model->history[$index11]->combinedTo->customer->browserId) {
    $jsonData["history"][$index11]["combinedTo"]["customer"]["browserId"] = $model->history[$index11]->combinedTo->customer->browserId;
}
if (null !== $model->history[$index11]->combinedTo->customer->site) {
    $jsonData["history"][$index11]["combinedTo"]["customer"]["site"] = $model->history[$index11]->combinedTo->customer->site;
}
if (null !== $model->history[$index11]->combinedTo->customer->contragent) {
    $jsonData["history"][$index11]["combinedTo"]["customer"]["contragent"] = [];
if (null !== $model->history[$index11]->combinedTo->customer->contragent->contragentType) {
    $jsonData["history"][$index11]["combinedTo"]["customer"]["contragent"]["contragentType"] = $model->history[$index11]->combinedTo->customer->contragent->contragentType;
}
if (null !== $model->history[$index11]->combinedTo->customer->contragent->legalName) {
    $jsonData["history"][$index11]["combinedTo"]["customer"]["contragent"]["legalName"] = $model->history[$index11]->combinedTo->customer->contragent->legalName;
}
if (null !== $model->history[$index11]->combinedTo->customer->contragent->legalAddress) {
    $jsonData["history"][$index11]["combinedTo"]["customer"]["contragent"]["legalAddress"] = $model->history[$index11]->combinedTo->customer->contragent->legalAddress;
}
if (null !== $model->history[$index11]->combinedTo->customer->contragent->INN) {
    $jsonData["history"][$index11]["combinedTo"]["customer"]["contragent"]["INN"] = $model->history[$index11]->combinedTo->customer->contragent->INN;
}
if (null !== $model->history[$index11]->combinedTo->customer->contragent->OKPO) {
    $jsonData["history"][$index11]["combinedTo"]["customer"]["contragent"]["OKPO"] = $model->history[$index11]->combinedTo->customer->contragent->OKPO;
}
if (null !== $model->history[$index11]->combinedTo->customer->contragent->KPP) {
    $jsonData["history"][$index11]["combinedTo"]["customer"]["contragent"]["KPP"] = $model->history[$index11]->combinedTo->customer->contragent->KPP;
}
if (null !== $model->history[$index11]->combinedTo->customer->contragent->OGRN) {
    $jsonData["history"][$index11]["combinedTo"]["customer"]["contragent"]["OGRN"] = $model->history[$index11]->combinedTo->customer->contragent->OGRN;
}
if (null !== $model->history[$index11]->combinedTo->customer->contragent->OGRNIP) {
    $jsonData["history"][$index11]["combinedTo"]["customer"]["contragent"]["OGRNIP"] = $model->history[$index11]->combinedTo->customer->contragent->OGRNIP;
}
if (null !== $model->history[$index11]->combinedTo->customer->contragent->certificateNumber) {
    $jsonData["history"][$index11]["combinedTo"]["customer"]["contragent"]["certificateNumber"] = $model->history[$index11]->combinedTo->customer->contragent->certificateNumber;
}
if (null !== $model->history[$index11]->combinedTo->customer->contragent->certificateDate) {
    $jsonData["history"][$index11]["combinedTo"]["customer"]["contragent"]["certificateDate"] = $model->history[$index11]->combinedTo->customer->contragent->certificateDate->format('Y-m-d H:i:s');;
}
if (null !== $model->history[$index11]->combinedTo->customer->contragent->BIK) {
    $jsonData["history"][$index11]["combinedTo"]["customer"]["contragent"]["BIK"] = $model->history[$index11]->combinedTo->customer->contragent->BIK;
}
if (null !== $model->history[$index11]->combinedTo->customer->contragent->bank) {
    $jsonData["history"][$index11]["combinedTo"]["customer"]["contragent"]["bank"] = $model->history[$index11]->combinedTo->customer->contragent->bank;
}
if (null !== $model->history[$index11]->combinedTo->customer->contragent->bankAddress) {
    $jsonData["history"][$index11]["combinedTo"]["customer"]["contragent"]["bankAddress"] = $model->history[$index11]->combinedTo->customer->contragent->bankAddress;
}
if (null !== $model->history[$index11]->combinedTo->customer->contragent->corrAccount) {
    $jsonData["history"][$index11]["combinedTo"]["customer"]["contragent"]["corrAccount"] = $model->history[$index11]->combinedTo->customer->contragent->corrAccount;
}
if (null !== $model->history[$index11]->combinedTo->customer->contragent->bankAccount) {
    $jsonData["history"][$index11]["combinedTo"]["customer"]["contragent"]["bankAccount"] = $model->history[$index11]->combinedTo->customer->contragent->bankAccount;
}

if (0 === \count($jsonData["history"][$index11]["combinedTo"]["customer"]["contragent"])) {
    $jsonData["history"][$index11]["combinedTo"]["customer"]["contragent"] = $emptyObject;
}

}
if (null !== $model->history[$index11]->combinedTo->customer->tags) {
    $jsonData["history"][$index11]["combinedTo"]["customer"]["tags"] = [];
foreach (array_keys($model->history[$index11]->combinedTo->customer->tags) as $index55) {
    $jsonData["history"][$index11]["combinedTo"]["customer"]["tags"][$index55] = [];
if (null !== $model->history[$index11]->combinedTo->customer->tags[$index55]->name) {
    $jsonData["history"][$index11]["combinedTo"]["customer"]["tags"][$index55]["name"] = $model->history[$index11]->combinedTo->customer->tags[$index55]->name;
}
if (null !== $model->history[$index11]->combinedTo->customer->tags[$index55]->color) {
    $jsonData["history"][$index11]["combinedTo"]["customer"]["tags"][$index55]["color"] = $model->history[$index11]->combinedTo->customer->tags[$index55]->color;
}
if (null !== $model->history[$index11]->combinedTo->customer->tags[$index55]->attached) {
    $jsonData["history"][$index11]["combinedTo"]["customer"]["tags"][$index55]["attached"] = $model->history[$index11]->combinedTo->customer->tags[$index55]->attached;
}

if (0 === \count($jsonData["history"][$index11]["combinedTo"]["customer"]["tags"][$index55])) {
    $jsonData["history"][$index11]["combinedTo"]["customer"]["tags"][$index55] = $emptyObject;
}

}

}
if (null !== $model->history[$index11]->combinedTo->customer->avgMarginSumm) {
    $jsonData["history"][$index11]["combinedTo"]["customer"]["avgMarginSumm"] = $model->history[$index11]->combinedTo->customer->avgMarginSumm;
}
if (null !== $model->history[$index11]->combinedTo->customer->marginSumm) {
    $jsonData["history"][$index11]["combinedTo"]["customer"]["marginSumm"] = $model->history[$index11]->combinedTo->customer->marginSumm;
}
if (null !== $model->history[$index11]->combinedTo->customer->totalSumm) {
    $jsonData["history"][$index11]["combinedTo"]["customer"]["totalSumm"] = $model->history[$index11]->combinedTo->customer->totalSumm;
}
if (null !== $model->history[$index11]->combinedTo->customer->averageSumm) {
    $jsonData["history"][$index11]["combinedTo"]["customer"]["averageSumm"] = $model->history[$index11]->combinedTo->customer->averageSumm;
}
if (null !== $model->history[$index11]->combinedTo->customer->ordersCount) {
    $jsonData["history"][$index11]["combinedTo"]["customer"]["ordersCount"] = $model->history[$index11]->combinedTo->customer->ordersCount;
}
if (null !== $model->history[$index11]->combinedTo->customer->costSumm) {
    $jsonData["history"][$index11]["combinedTo"]["customer"]["costSumm"] = $model->history[$index11]->combinedTo->customer->costSumm;
}
if (null !== $model->history[$index11]->combinedTo->customer->customFields) {
    $jsonData["history"][$index11]["combinedTo"]["customer"]["customFields"] = [];
foreach (array_keys($model->history[$index11]->combinedTo->customer->customFields) as $index63) {
    $jsonData["history"][$index11]["combinedTo"]["customer"]["customFields"] = $model->history[$index11]->combinedTo->customer->customFields;
}

}
if (null !== $model->history[$index11]->combinedTo->customer->personalDiscount) {
    $jsonData["history"][$index11]["combinedTo"]["customer"]["personalDiscount"] = $model->history[$index11]->combinedTo->customer->personalDiscount;
}
if (null !== $model->history[$index11]->combinedTo->customer->cumulativeDiscount) {
    $jsonData["history"][$index11]["combinedTo"]["customer"]["cumulativeDiscount"] = $model->history[$index11]->combinedTo->customer->cumulativeDiscount;
}
if (null !== $model->history[$index11]->combinedTo->customer->discountCardNumber) {
    $jsonData["history"][$index11]["combinedTo"]["customer"]["discountCardNumber"] = $model->history[$index11]->combinedTo->customer->discountCardNumber;
}
if (null !== $model->history[$index11]->combinedTo->customer->firstClientId) {
    $jsonData["history"][$index11]["combinedTo"]["customer"]["firstClientId"] = $model->history[$index11]->combinedTo->customer->firstClientId;
}
if (null !== $model->history[$index11]->combinedTo->customer->lastClientId) {
    $jsonData["history"][$index11]["combinedTo"]["customer"]["lastClientId"] = $model->history[$index11]->combinedTo->customer->lastClientId;
}
if (null !== $model->history[$index11]->combinedTo->customer->address) {
    $jsonData["history"][$index11]["combinedTo"]["customer"]["address"] = [];
if (null !== $model->history[$index11]->combinedTo->customer->address->id) {
    $jsonData["history"][$index11]["combinedTo"]["customer"]["address"]["id"] = $model->history[$index11]->combinedTo->customer->address->id;
}
if (null !== $model->history[$index11]->combinedTo->customer->address->name) {
    $jsonData["history"][$index11]["combinedTo"]["customer"]["address"]["name"] = $model->history[$index11]->combinedTo->customer->address->name;
}
if (null !== $model->history[$index11]->combinedTo->customer->address->isMain) {
    $jsonData["history"][$index11]["combinedTo"]["customer"]["address"]["isMain"] = $model->history[$index11]->combinedTo->customer->address->isMain;
}
if (null !== $model->history[$index11]->combinedTo->customer->address->index) {
    $jsonData["history"][$index11]["combinedTo"]["customer"]["address"]["index"] = $model->history[$index11]->combinedTo->customer->address->index;
}
if (null !== $model->history[$index11]->combinedTo->customer->address->countryIso) {
    $jsonData["history"][$index11]["combinedTo"]["customer"]["address"]["countryIso"] = $model->history[$index11]->combinedTo->customer->address->countryIso;
}
if (null !== $model->history[$index11]->combinedTo->customer->address->region) {
    $jsonData["history"][$index11]["combinedTo"]["customer"]["address"]["region"] = $model->history[$index11]->combinedTo->customer->address->region;
}
if (null !== $model->history[$index11]->combinedTo->customer->address->regionId) {
    $jsonData["history"][$index11]["combinedTo"]["customer"]["address"]["regionId"] = $model->history[$index11]->combinedTo->customer->address->regionId;
}
if (null !== $model->history[$index11]->combinedTo->customer->address->city) {
    $jsonData["history"][$index11]["combinedTo"]["customer"]["address"]["city"] = $model->history[$index11]->combinedTo->customer->address->city;
}
if (null !== $model->history[$index11]->combinedTo->customer->address->cityId) {
    $jsonData["history"][$index11]["combinedTo"]["customer"]["address"]["cityId"] = $model->history[$index11]->combinedTo->customer->address->cityId;
}
if (null !== $model->history[$index11]->combinedTo->customer->address->cityType) {
    $jsonData["history"][$index11]["combinedTo"]["customer"]["address"]["cityType"] = $model->history[$index11]->combinedTo->customer->address->cityType;
}
if (null !== $model->history[$index11]->combinedTo->customer->address->street) {
    $jsonData["history"][$index11]["combinedTo"]["customer"]["address"]["street"] = $model->history[$index11]->combinedTo->customer->address->street;
}
if (null !== $model->history[$index11]->combinedTo->customer->address->streetId) {
    $jsonData["history"][$index11]["combinedTo"]["customer"]["address"]["streetId"] = $model->history[$index11]->combinedTo->customer->address->streetId;
}
if (null !== $model->history[$index11]->combinedTo->customer->address->streetType) {
    $jsonData["history"][$index11]["combinedTo"]["customer"]["address"]["streetType"] = $model->history[$index11]->combinedTo->customer->address->streetType;
}
if (null !== $model->history[$index11]->combinedTo->customer->address->building) {
    $jsonData["history"][$index11]["combinedTo"]["customer"]["address"]["building"] = $model->history[$index11]->combinedTo->customer->address->building;
}
if (null !== $model->history[$index11]->combinedTo->customer->address->flat) {
    $jsonData["history"][$index11]["combinedTo"]["customer"]["address"]["flat"] = $model->history[$index11]->combinedTo->customer->address->flat;
}
if (null !== $model->history[$index11]->combinedTo->customer->address->floor) {
    $jsonData["history"][$index11]["combinedTo"]["customer"]["address"]["floor"] = $model->history[$index11]->combinedTo->customer->address->floor;
}
if (null !== $model->history[$index11]->combinedTo->customer->address->block) {
    $jsonData["history"][$index11]["combinedTo"]["customer"]["address"]["block"] = $model->history[$index11]->combinedTo->customer->address->block;
}
if (null !== $model->history[$index11]->combinedTo->customer->address->house) {
    $jsonData["history"][$index11]["combinedTo"]["customer"]["address"]["house"] = $model->history[$index11]->combinedTo->customer->address->house;
}
if (null !== $model->history[$index11]->combinedTo->customer->address->housing) {
    $jsonData["history"][$index11]["combinedTo"]["customer"]["address"]["housing"] = $model->history[$index11]->combinedTo->customer->address->housing;
}
if (null !== $model->history[$index11]->combinedTo->customer->address->metro) {
    $jsonData["history"][$index11]["combinedTo"]["customer"]["address"]["metro"] = $model->history[$index11]->combinedTo->customer->address->metro;
}
if (null !== $model->history[$index11]->combinedTo->customer->address->notes) {
    $jsonData["history"][$index11]["combinedTo"]["customer"]["address"]["notes"] = $model->history[$index11]->combinedTo->customer->address->notes;
}
if (null !== $model->history[$index11]->combinedTo->customer->address->text) {
    $jsonData["history"][$index11]["combinedTo"]["customer"]["address"]["text"] = $model->history[$index11]->combinedTo->customer->address->text;
}
if (null !== $model->history[$index11]->combinedTo->customer->address->externalId) {
    $jsonData["history"][$index11]["combinedTo"]["customer"]["address"]["externalId"] = $model->history[$index11]->combinedTo->customer->address->externalId;
}

if (0 === \count($jsonData["history"][$index11]["combinedTo"]["customer"]["address"])) {
    $jsonData["history"][$index11]["combinedTo"]["customer"]["address"] = $emptyObject;
}

}
if (null !== $model->history[$index11]->combinedTo->customer->segments) {
    $jsonData["history"][$index11]["combinedTo"]["customer"]["segments"] = [];
foreach (array_keys($model->history[$index11]->combinedTo->customer->segments) as $index59) {
    $jsonData["history"][$index11]["combinedTo"]["customer"]["segments"][$index59] = [];
if (null !== $model->history[$index11]->combinedTo->customer->segments[$index59]->id) {
    $jsonData["history"][$index11]["combinedTo"]["customer"]["segments"][$index59]["id"] = $model->history[$index11]->combinedTo->customer->segments[$index59]->id;
}
if (null !== $model->history[$index11]->combinedTo->customer->segments[$index59]->code) {
    $jsonData["history"][$index11]["combinedTo"]["customer"]["segments"][$index59]["code"] = $model->history[$index11]->combinedTo->customer->segments[$index59]->code;
}
if (null !== $model->history[$index11]->combinedTo->customer->segments[$index59]->name) {
    $jsonData["history"][$index11]["combinedTo"]["customer"]["segments"][$index59]["name"] = $model->history[$index11]->combinedTo->customer->segments[$index59]->name;
}
if (null !== $model->history[$index11]->combinedTo->customer->segments[$index59]->createdAt) {
    $jsonData["history"][$index11]["combinedTo"]["customer"]["segments"][$index59]["createdAt"] = $model->history[$index11]->combinedTo->customer->segments[$index59]->createdAt->format('Y-m-d H:i:s');;
}
if (null !== $model->history[$index11]->combinedTo->customer->segments[$index59]->isDynamic) {
    $jsonData["history"][$index11]["combinedTo"]["customer"]["segments"][$index59]["isDynamic"] = $model->history[$index11]->combinedTo->customer->segments[$index59]->isDynamic;
}
if (null !== $model->history[$index11]->combinedTo->customer->segments[$index59]->customersCount) {
    $jsonData["history"][$index11]["combinedTo"]["customer"]["segments"][$index59]["customersCount"] = $model->history[$index11]->combinedTo->customer->segments[$index59]->customersCount;
}
if (null !== $model->history[$index11]->combinedTo->customer->segments[$index59]->active) {
    $jsonData["history"][$index11]["combinedTo"]["customer"]["segments"][$index59]["active"] = $model->history[$index11]->combinedTo->customer->segments[$index59]->active;
}

if (0 === \count($jsonData["history"][$index11]["combinedTo"]["customer"]["segments"][$index59])) {
    $jsonData["history"][$index11]["combinedTo"]["customer"]["segments"][$index59] = $emptyObject;
}

}

}
if (null !== $model->history[$index11]->combinedTo->customer->maturationTime) {
    $jsonData["history"][$index11]["combinedTo"]["customer"]["maturationTime"] = $model->history[$index11]->combinedTo->customer->maturationTime;
}
if (null !== $model->history[$index11]->combinedTo->customer->firstName) {
    $jsonData["history"][$index11]["combinedTo"]["customer"]["firstName"] = $model->history[$index11]->combinedTo->customer->firstName;
}
if (null !== $model->history[$index11]->combinedTo->customer->lastName) {
    $jsonData["history"][$index11]["combinedTo"]["customer"]["lastName"] = $model->history[$index11]->combinedTo->customer->lastName;
}
if (null !== $model->history[$index11]->combinedTo->customer->patronymic) {
    $jsonData["history"][$index11]["combinedTo"]["customer"]["patronymic"] = $model->history[$index11]->combinedTo->customer->patronymic;
}
if (null !== $model->history[$index11]->combinedTo->customer->sex) {
    $jsonData["history"][$index11]["combinedTo"]["customer"]["sex"] = $model->history[$index11]->combinedTo->customer->sex;
}
if (null !== $model->history[$index11]->combinedTo->customer->presumableSex) {
    $jsonData["history"][$index11]["combinedTo"]["customer"]["presumableSex"] = $model->history[$index11]->combinedTo->customer->presumableSex;
}
if (null !== $model->history[$index11]->combinedTo->customer->email) {
    $jsonData["history"][$index11]["combinedTo"]["customer"]["email"] = $model->history[$index11]->combinedTo->customer->email;
}
if (null !== $model->history[$index11]->combinedTo->customer->emailMarketingUnsubscribedAt) {
    $jsonData["history"][$index11]["combinedTo"]["customer"]["emailMarketingUnsubscribedAt"] = $model->history[$index11]->combinedTo->customer->emailMarketingUnsubscribedAt->format('Y-m-d H:i:s');;
}
if (null !== $model->history[$index11]->combinedTo->customer->phones) {
    $jsonData["history"][$index11]["combinedTo"]["customer"]["phones"] = [];
foreach (array_keys($model->history[$index11]->combinedTo->customer->phones) as $index57) {
    $jsonData["history"][$index11]["combinedTo"]["customer"]["phones"][$index57] = [];
if (null !== $model->history[$index11]->combinedTo->customer->phones[$index57]->number) {
    $jsonData["history"][$index11]["combinedTo"]["customer"]["phones"][$index57]["number"] = $model->history[$index11]->combinedTo->customer->phones[$index57]->number;
}

if (0 === \count($jsonData["history"][$index11]["combinedTo"]["customer"]["phones"][$index57])) {
    $jsonData["history"][$index11]["combinedTo"]["customer"]["phones"][$index57] = $emptyObject;
}

}

}
if (null !== $model->history[$index11]->combinedTo->customer->birthday) {
    $jsonData["history"][$index11]["combinedTo"]["customer"]["birthday"] = $model->history[$index11]->combinedTo->customer->birthday->format('Y-m-d H:i:s');;
}
if (null !== $model->history[$index11]->combinedTo->customer->source) {
    $jsonData["history"][$index11]["combinedTo"]["customer"]["source"] = [];
if (null !== $model->history[$index11]->combinedTo->customer->source->source) {
    $jsonData["history"][$index11]["combinedTo"]["customer"]["source"]["source"] = $model->history[$index11]->combinedTo->customer->source->source;
}
if (null !== $model->history[$index11]->combinedTo->customer->source->medium) {
    $jsonData["history"][$index11]["combinedTo"]["customer"]["source"]["medium"] = $model->history[$index11]->combinedTo->customer->source->medium;
}
if (null !== $model->history[$index11]->combinedTo->customer->source->campaign) {
    $jsonData["history"][$index11]["combinedTo"]["customer"]["source"]["campaign"] = $model->history[$index11]->combinedTo->customer->source->campaign;
}
if (null !== $model->history[$index11]->combinedTo->customer->source->keyword) {
    $jsonData["history"][$index11]["combinedTo"]["customer"]["source"]["keyword"] = $model->history[$index11]->combinedTo->customer->source->keyword;
}
if (null !== $model->history[$index11]->combinedTo->customer->source->content) {
    $jsonData["history"][$index11]["combinedTo"]["customer"]["source"]["content"] = $model->history[$index11]->combinedTo->customer->source->content;
}

if (0 === \count($jsonData["history"][$index11]["combinedTo"]["customer"]["source"])) {
    $jsonData["history"][$index11]["combinedTo"]["customer"]["source"] = $emptyObject;
}

}
if (null !== $model->history[$index11]->combinedTo->customer->photoUrl) {
    $jsonData["history"][$index11]["combinedTo"]["customer"]["photoUrl"] = $model->history[$index11]->combinedTo->customer->photoUrl;
}
if (null !== $model->history[$index11]->combinedTo->customer->mgCustomerId) {
    $jsonData["history"][$index11]["combinedTo"]["customer"]["mgCustomerId"] = $model->history[$index11]->combinedTo->customer->mgCustomerId;
}
if (null !== $model->history[$index11]->combinedTo->customer->subscribed) {
    $jsonData["history"][$index11]["combinedTo"]["customer"]["subscribed"] = $model->history[$index11]->combinedTo->customer->subscribed;
}

if (0 === \count($jsonData["history"][$index11]["combinedTo"]["customer"])) {
    $jsonData["history"][$index11]["combinedTo"]["customer"] = $emptyObject;
}

} elseif ($model->history[$index11]->combinedTo->customer instanceof \RetailCrm\Api\Model\Entity\CustomersCorporate\CustomerCorporate) {
    $jsonData["history"][$index11]["combinedTo"]["customer"] = [];
if (null !== $model->history[$index11]->combinedTo->customer->type) {
    $jsonData["history"][$index11]["combinedTo"]["customer"]["type"] = $model->history[$index11]->combinedTo->customer->type;
}
if (null !== $model->history[$index11]->combinedTo->customer->id) {
    $jsonData["history"][$index11]["combinedTo"]["customer"]["id"] = $model->history[$index11]->combinedTo->customer->id;
}
if (null !== $model->history[$index11]->combinedTo->customer->externalId) {
    $jsonData["history"][$index11]["combinedTo"]["customer"]["externalId"] = $model->history[$index11]->combinedTo->customer->externalId;
}
if (null !== $model->history[$index11]->combinedTo->customer->nickName) {
    $jsonData["history"][$index11]["combinedTo"]["customer"]["nickName"] = $model->history[$index11]->combinedTo->customer->nickName;
}
if (null !== $model->history[$index11]->combinedTo->customer->mainAddress) {
    $jsonData["history"][$index11]["combinedTo"]["customer"]["mainAddress"] = [];
if (null !== $model->history[$index11]->combinedTo->customer->mainAddress->id) {
    $jsonData["history"][$index11]["combinedTo"]["customer"]["mainAddress"]["id"] = $model->history[$index11]->combinedTo->customer->mainAddress->id;
}
if (null !== $model->history[$index11]->combinedTo->customer->mainAddress->externalId) {
    $jsonData["history"][$index11]["combinedTo"]["customer"]["mainAddress"]["externalId"] = $model->history[$index11]->combinedTo->customer->mainAddress->externalId;
}
if (null !== $model->history[$index11]->combinedTo->customer->mainAddress->name) {
    $jsonData["history"][$index11]["combinedTo"]["customer"]["mainAddress"]["name"] = $model->history[$index11]->combinedTo->customer->mainAddress->name;
}

if (0 === \count($jsonData["history"][$index11]["combinedTo"]["customer"]["mainAddress"])) {
    $jsonData["history"][$index11]["combinedTo"]["customer"]["mainAddress"] = $emptyObject;
}

}
if (null !== $model->history[$index11]->combinedTo->customer->createdAt) {
    $jsonData["history"][$index11]["combinedTo"]["customer"]["createdAt"] = $model->history[$index11]->combinedTo->customer->createdAt->format('Y-m-d H:i:s');;
}
if (null !== $model->history[$index11]->combinedTo->customer->managerId) {
    $jsonData["history"][$index11]["combinedTo"]["customer"]["managerId"] = $model->history[$index11]->combinedTo->customer->managerId;
}
if (null !== $model->history[$index11]->combinedTo->customer->source) {
    $jsonData["history"][$index11]["combinedTo"]["customer"]["source"] = [];
if (null !== $model->history[$index11]->combinedTo->customer->source->source) {
    $jsonData["history"][$index11]["combinedTo"]["customer"]["source"]["source"] = $model->history[$index11]->combinedTo->customer->source->source;
}
if (null !== $model->history[$index11]->combinedTo->customer->source->medium) {
    $jsonData["history"][$index11]["combinedTo"]["customer"]["source"]["medium"] = $model->history[$index11]->combinedTo->customer->source->medium;
}
if (null !== $model->history[$index11]->combinedTo->customer->source->campaign) {
    $jsonData["history"][$index11]["combinedTo"]["customer"]["source"]["campaign"] = $model->history[$index11]->combinedTo->customer->source->campaign;
}
if (null !== $model->history[$index11]->combinedTo->customer->source->keyword) {
    $jsonData["history"][$index11]["combinedTo"]["customer"]["source"]["keyword"] = $model->history[$index11]->combinedTo->customer->source->keyword;
}
if (null !== $model->history[$index11]->combinedTo->customer->source->content) {
    $jsonData["history"][$index11]["combinedTo"]["customer"]["source"]["content"] = $model->history[$index11]->combinedTo->customer->source->content;
}

if (0 === \count($jsonData["history"][$index11]["combinedTo"]["customer"]["source"])) {
    $jsonData["history"][$index11]["combinedTo"]["customer"]["source"] = $emptyObject;
}

}
if (null !== $model->history[$index11]->combinedTo->customer->customerContacts) {
    $jsonData["history"][$index11]["combinedTo"]["customer"]["customerContacts"] = [];
foreach (array_keys($model->history[$index11]->combinedTo->customer->customerContacts) as $index67) {
    $jsonData["history"][$index11]["combinedTo"]["customer"]["customerContacts"][$index67] = [];
if (null !== $model->history[$index11]->combinedTo->customer->customerContacts[$index67]->id) {
    $jsonData["history"][$index11]["combinedTo"]["customer"]["customerContacts"][$index67]["id"] = $model->history[$index11]->combinedTo->customer->customerContacts[$index67]->id;
}
if (null !== $model->history[$index11]->combinedTo->customer->customerContacts[$index67]->isMain) {
    $jsonData["history"][$index11]["combinedTo"]["customer"]["customerContacts"][$index67]["isMain"] = $model->history[$index11]->combinedTo->customer->customerContacts[$index67]->isMain;
}
if (null !== $model->history[$index11]->combinedTo->customer->customerContacts[$index67]->customer) {
    $jsonData["history"][$index11]["combinedTo"]["customer"]["customerContacts"][$index67]["customer"] = [];
if (null !== $model->history[$index11]->combinedTo->customer->customerContacts[$index67]->customer->id) {
    $jsonData["history"][$index11]["combinedTo"]["customer"]["customerContacts"][$index67]["customer"]["id"] = $model->history[$index11]->combinedTo->customer->customerContacts[$index67]->customer->id;
}
if (null !== $model->history[$index11]->combinedTo->customer->customerContacts[$index67]->customer->externalId) {
    $jsonData["history"][$index11]["combinedTo"]["customer"]["customerContacts"][$index67]["customer"]["externalId"] = $model->history[$index11]->combinedTo->customer->customerContacts[$index67]->customer->externalId;
}
if (null !== $model->history[$index11]->combinedTo->customer->customerContacts[$index67]->customer->browserId) {
    $jsonData["history"][$index11]["combinedTo"]["customer"]["customerContacts"][$index67]["customer"]["browserId"] = $model->history[$index11]->combinedTo->customer->customerContacts[$index67]->customer->browserId;
}
if (null !== $model->history[$index11]->combinedTo->customer->customerContacts[$index67]->customer->site) {
    $jsonData["history"][$index11]["combinedTo"]["customer"]["customerContacts"][$index67]["customer"]["site"] = $model->history[$index11]->combinedTo->customer->customerContacts[$index67]->customer->site;
}
if (null !== $model->history[$index11]->combinedTo->customer->customerContacts[$index67]->customer->companies) {
    $jsonData["history"][$index11]["combinedTo"]["customer"]["customerContacts"][$index67]["customer"]["companies"] = [];
foreach (array_keys($model->history[$index11]->combinedTo->customer->customerContacts[$index67]->customer->companies) as $index102) {
    $jsonData["history"][$index11]["combinedTo"]["customer"]["customerContacts"][$index67]["customer"]["companies"][$index102] = [];
if (null !== $model->history[$index11]->combinedTo->customer->customerContacts[$index67]->customer->companies[$index102]->id) {
    $jsonData["history"][$index11]["combinedTo"]["customer"]["customerContacts"][$index67]["customer"]["companies"][$index102]["id"] = $model->history[$index11]->combinedTo->customer->customerContacts[$index67]->customer->companies[$index102]->id;
}
if (null !== $model->history[$index11]->combinedTo->customer->customerContacts[$index67]->customer->companies[$index102]->externalId) {
    $jsonData["history"][$index11]["combinedTo"]["customer"]["customerContacts"][$index67]["customer"]["companies"][$index102]["externalId"] = $model->history[$index11]->combinedTo->customer->customerContacts[$index67]->customer->companies[$index102]->externalId;
}
if (null !== $model->history[$index11]->combinedTo->customer->customerContacts[$index67]->customer->companies[$index102]->company) {
    $jsonData["history"][$index11]["combinedTo"]["customer"]["customerContacts"][$index67]["customer"]["companies"][$index102]["company"] = [];
if (null !== $model->history[$index11]->combinedTo->customer->customerContacts[$index67]->customer->companies[$index102]->company->id) {
    $jsonData["history"][$index11]["combinedTo"]["customer"]["customerContacts"][$index67]["customer"]["companies"][$index102]["company"]["id"] = $model->history[$index11]->combinedTo->customer->customerContacts[$index67]->customer->companies[$index102]->company->id;
}
if (null !== $model->history[$index11]->combinedTo->customer->customerContacts[$index67]->customer->companies[$index102]->company->externalId) {
    $jsonData["history"][$index11]["combinedTo"]["customer"]["customerContacts"][$index67]["customer"]["companies"][$index102]["company"]["externalId"] = $model->history[$index11]->combinedTo->customer->customerContacts[$index67]->customer->companies[$index102]->company->externalId;
}
if (null !== $model->history[$index11]->combinedTo->customer->customerContacts[$index67]->customer->companies[$index102]->company->name) {
    $jsonData["history"][$index11]["combinedTo"]["customer"]["customerContacts"][$index67]["customer"]["companies"][$index102]["company"]["name"] = $model->history[$index11]->combinedTo->customer->customerContacts[$index67]->customer->companies[$index102]->company->name;
}

if (0 === \count($jsonData["history"][$index11]["combinedTo"]["customer"]["customerContacts"][$index67]["customer"]["companies"][$index102]["company"])) {
    $jsonData["history"][$index11]["combinedTo"]["customer"]["customerContacts"][$index67]["customer"]["companies"][$index102]["company"] = $emptyObject;
}

}

if (0 === \count($jsonData["history"][$index11]["combinedTo"]["customer"]["customerContacts"][$index67]["customer"]["companies"][$index102])) {
    $jsonData["history"][$index11]["combinedTo"]["customer"]["customerContacts"][$index67]["customer"]["companies"][$index102] = $emptyObject;
}

}

}

if (0 === \count($jsonData["history"][$index11]["combinedTo"]["customer"]["customerContacts"][$index67]["customer"])) {
    $jsonData["history"][$index11]["combinedTo"]["customer"]["customerContacts"][$index67]["customer"] = $emptyObject;
}

}
if (null !== $model->history[$index11]->combinedTo->customer->customerContacts[$index67]->companies) {
    $jsonData["history"][$index11]["combinedTo"]["customer"]["customerContacts"][$index67]["companies"] = [];
foreach (array_keys($model->history[$index11]->combinedTo->customer->customerContacts[$index67]->companies) as $index90) {
    $jsonData["history"][$index11]["combinedTo"]["customer"]["customerContacts"][$index67]["companies"][$index90] = [];
if (null !== $model->history[$index11]->combinedTo->customer->customerContacts[$index67]->companies[$index90]->id) {
    $jsonData["history"][$index11]["combinedTo"]["customer"]["customerContacts"][$index67]["companies"][$index90]["id"] = $model->history[$index11]->combinedTo->customer->customerContacts[$index67]->companies[$index90]->id;
}
if (null !== $model->history[$index11]->combinedTo->customer->customerContacts[$index67]->companies[$index90]->externalId) {
    $jsonData["history"][$index11]["combinedTo"]["customer"]["customerContacts"][$index67]["companies"][$index90]["externalId"] = $model->history[$index11]->combinedTo->customer->customerContacts[$index67]->companies[$index90]->externalId;
}
if (null !== $model->history[$index11]->combinedTo->customer->customerContacts[$index67]->companies[$index90]->company) {
    $jsonData["history"][$index11]["combinedTo"]["customer"]["customerContacts"][$index67]["companies"][$index90]["company"] = [];
if (null !== $model->history[$index11]->combinedTo->customer->customerContacts[$index67]->companies[$index90]->company->id) {
    $jsonData["history"][$index11]["combinedTo"]["customer"]["customerContacts"][$index67]["companies"][$index90]["company"]["id"] = $model->history[$index11]->combinedTo->customer->customerContacts[$index67]->companies[$index90]->company->id;
}
if (null !== $model->history[$index11]->combinedTo->customer->customerContacts[$index67]->companies[$index90]->company->externalId) {
    $jsonData["history"][$index11]["combinedTo"]["customer"]["customerContacts"][$index67]["companies"][$index90]["company"]["externalId"] = $model->history[$index11]->combinedTo->customer->customerContacts[$index67]->companies[$index90]->company->externalId;
}
if (null !== $model->history[$index11]->combinedTo->customer->customerContacts[$index67]->companies[$index90]->company->name) {
    $jsonData["history"][$index11]["combinedTo"]["customer"]["customerContacts"][$index67]["companies"][$index90]["company"]["name"] = $model->history[$index11]->combinedTo->customer->customerContacts[$index67]->companies[$index90]->company->name;
}

if (0 === \count($jsonData["history"][$index11]["combinedTo"]["customer"]["customerContacts"][$index67]["companies"][$index90]["company"])) {
    $jsonData["history"][$index11]["combinedTo"]["customer"]["customerContacts"][$index67]["companies"][$index90]["company"] = $emptyObject;
}

}

if (0 === \count($jsonData["history"][$index11]["combinedTo"]["customer"]["customerContacts"][$index67]["companies"][$index90])) {
    $jsonData["history"][$index11]["combinedTo"]["customer"]["customerContacts"][$index67]["companies"][$index90] = $emptyObject;
}

}

}

if (0 === \count($jsonData["history"][$index11]["combinedTo"]["customer"]["customerContacts"][$index67])) {
    $jsonData["history"][$index11]["combinedTo"]["customer"]["customerContacts"][$index67] = $emptyObject;
}

}

}
if (null !== $model->history[$index11]->combinedTo->customer->companies) {
    $jsonData["history"][$index11]["combinedTo"]["customer"]["companies"] = [];
foreach (array_keys($model->history[$index11]->combinedTo->customer->companies) as $index60) {
    $jsonData["history"][$index11]["combinedTo"]["customer"]["companies"][$index60] = [];
if (null !== $model->history[$index11]->combinedTo->customer->companies[$index60]->id) {
    $jsonData["history"][$index11]["combinedTo"]["customer"]["companies"][$index60]["id"] = $model->history[$index11]->combinedTo->customer->companies[$index60]->id;
}
if (null !== $model->history[$index11]->combinedTo->customer->companies[$index60]->isMain) {
    $jsonData["history"][$index11]["combinedTo"]["customer"]["companies"][$index60]["isMain"] = $model->history[$index11]->combinedTo->customer->companies[$index60]->isMain;
}
if (null !== $model->history[$index11]->combinedTo->customer->companies[$index60]->externalId) {
    $jsonData["history"][$index11]["combinedTo"]["customer"]["companies"][$index60]["externalId"] = $model->history[$index11]->combinedTo->customer->companies[$index60]->externalId;
}
if (null !== $model->history[$index11]->combinedTo->customer->companies[$index60]->active) {
    $jsonData["history"][$index11]["combinedTo"]["customer"]["companies"][$index60]["active"] = $model->history[$index11]->combinedTo->customer->companies[$index60]->active;
}
if (null !== $model->history[$index11]->combinedTo->customer->companies[$index60]->name) {
    $jsonData["history"][$index11]["combinedTo"]["customer"]["companies"][$index60]["name"] = $model->history[$index11]->combinedTo->customer->companies[$index60]->name;
}
if (null !== $model->history[$index11]->combinedTo->customer->companies[$index60]->brand) {
    $jsonData["history"][$index11]["combinedTo"]["customer"]["companies"][$index60]["brand"] = $model->history[$index11]->combinedTo->customer->companies[$index60]->brand;
}
if (null !== $model->history[$index11]->combinedTo->customer->companies[$index60]->site) {
    $jsonData["history"][$index11]["combinedTo"]["customer"]["companies"][$index60]["site"] = $model->history[$index11]->combinedTo->customer->companies[$index60]->site;
}
if (null !== $model->history[$index11]->combinedTo->customer->companies[$index60]->createdAt) {
    $jsonData["history"][$index11]["combinedTo"]["customer"]["companies"][$index60]["createdAt"] = $model->history[$index11]->combinedTo->customer->companies[$index60]->createdAt->format('Y-m-d H:i:s');;
}
if (null !== $model->history[$index11]->combinedTo->customer->companies[$index60]->customer) {
    $jsonData["history"][$index11]["combinedTo"]["customer"]["companies"][$index60]["customer"] = [];
if (null !== $model->history[$index11]->combinedTo->customer->companies[$index60]->customer->site) {
    $jsonData["history"][$index11]["combinedTo"]["customer"]["companies"][$index60]["customer"]["site"] = $model->history[$index11]->combinedTo->customer->companies[$index60]->customer->site;
}
if (null !== $model->history[$index11]->combinedTo->customer->companies[$index60]->customer->id) {
    $jsonData["history"][$index11]["combinedTo"]["customer"]["companies"][$index60]["customer"]["id"] = $model->history[$index11]->combinedTo->customer->companies[$index60]->customer->id;
}
if (null !== $model->history[$index11]->combinedTo->customer->companies[$index60]->customer->externalId) {
    $jsonData["history"][$index11]["combinedTo"]["customer"]["companies"][$index60]["customer"]["externalId"] = $model->history[$index11]->combinedTo->customer->companies[$index60]->customer->externalId;
}
if (null !== $model->history[$index11]->combinedTo->customer->companies[$index60]->customer->type) {
    $jsonData["history"][$index11]["combinedTo"]["customer"]["companies"][$index60]["customer"]["type"] = $model->history[$index11]->combinedTo->customer->companies[$index60]->customer->type;
}

if (0 === \count($jsonData["history"][$index11]["combinedTo"]["customer"]["companies"][$index60]["customer"])) {
    $jsonData["history"][$index11]["combinedTo"]["customer"]["companies"][$index60]["customer"] = $emptyObject;
}

}
if (null !== $model->history[$index11]->combinedTo->customer->companies[$index60]->contragent) {
    $jsonData["history"][$index11]["combinedTo"]["customer"]["companies"][$index60]["contragent"] = [];
if (null !== $model->history[$index11]->combinedTo->customer->companies[$index60]->contragent->contragentType) {
    $jsonData["history"][$index11]["combinedTo"]["customer"]["companies"][$index60]["contragent"]["contragentType"] = $model->history[$index11]->combinedTo->customer->companies[$index60]->contragent->contragentType;
}
if (null !== $model->history[$index11]->combinedTo->customer->companies[$index60]->contragent->legalName) {
    $jsonData["history"][$index11]["combinedTo"]["customer"]["companies"][$index60]["contragent"]["legalName"] = $model->history[$index11]->combinedTo->customer->companies[$index60]->contragent->legalName;
}
if (null !== $model->history[$index11]->combinedTo->customer->companies[$index60]->contragent->legalAddress) {
    $jsonData["history"][$index11]["combinedTo"]["customer"]["companies"][$index60]["contragent"]["legalAddress"] = $model->history[$index11]->combinedTo->customer->companies[$index60]->contragent->legalAddress;
}
if (null !== $model->history[$index11]->combinedTo->customer->companies[$index60]->contragent->INN) {
    $jsonData["history"][$index11]["combinedTo"]["customer"]["companies"][$index60]["contragent"]["INN"] = $model->history[$index11]->combinedTo->customer->companies[$index60]->contragent->INN;
}
if (null !== $model->history[$index11]->combinedTo->customer->companies[$index60]->contragent->OKPO) {
    $jsonData["history"][$index11]["combinedTo"]["customer"]["companies"][$index60]["contragent"]["OKPO"] = $model->history[$index11]->combinedTo->customer->companies[$index60]->contragent->OKPO;
}
if (null !== $model->history[$index11]->combinedTo->customer->companies[$index60]->contragent->KPP) {
    $jsonData["history"][$index11]["combinedTo"]["customer"]["companies"][$index60]["contragent"]["KPP"] = $model->history[$index11]->combinedTo->customer->companies[$index60]->contragent->KPP;
}
if (null !== $model->history[$index11]->combinedTo->customer->companies[$index60]->contragent->OGRN) {
    $jsonData["history"][$index11]["combinedTo"]["customer"]["companies"][$index60]["contragent"]["OGRN"] = $model->history[$index11]->combinedTo->customer->companies[$index60]->contragent->OGRN;
}
if (null !== $model->history[$index11]->combinedTo->customer->companies[$index60]->contragent->OGRNIP) {
    $jsonData["history"][$index11]["combinedTo"]["customer"]["companies"][$index60]["contragent"]["OGRNIP"] = $model->history[$index11]->combinedTo->customer->companies[$index60]->contragent->OGRNIP;
}
if (null !== $model->history[$index11]->combinedTo->customer->companies[$index60]->contragent->certificateNumber) {
    $jsonData["history"][$index11]["combinedTo"]["customer"]["companies"][$index60]["contragent"]["certificateNumber"] = $model->history[$index11]->combinedTo->customer->companies[$index60]->contragent->certificateNumber;
}
if (null !== $model->history[$index11]->combinedTo->customer->companies[$index60]->contragent->certificateDate) {
    $jsonData["history"][$index11]["combinedTo"]["customer"]["companies"][$index60]["contragent"]["certificateDate"] = $model->history[$index11]->combinedTo->customer->companies[$index60]->contragent->certificateDate->format('Y-m-d H:i:s');;
}
if (null !== $model->history[$index11]->combinedTo->customer->companies[$index60]->contragent->BIK) {
    $jsonData["history"][$index11]["combinedTo"]["customer"]["companies"][$index60]["contragent"]["BIK"] = $model->history[$index11]->combinedTo->customer->companies[$index60]->contragent->BIK;
}
if (null !== $model->history[$index11]->combinedTo->customer->companies[$index60]->contragent->bank) {
    $jsonData["history"][$index11]["combinedTo"]["customer"]["companies"][$index60]["contragent"]["bank"] = $model->history[$index11]->combinedTo->customer->companies[$index60]->contragent->bank;
}
if (null !== $model->history[$index11]->combinedTo->customer->companies[$index60]->contragent->bankAddress) {
    $jsonData["history"][$index11]["combinedTo"]["customer"]["companies"][$index60]["contragent"]["bankAddress"] = $model->history[$index11]->combinedTo->customer->companies[$index60]->contragent->bankAddress;
}
if (null !== $model->history[$index11]->combinedTo->customer->companies[$index60]->contragent->corrAccount) {
    $jsonData["history"][$index11]["combinedTo"]["customer"]["companies"][$index60]["contragent"]["corrAccount"] = $model->history[$index11]->combinedTo->customer->companies[$index60]->contragent->corrAccount;
}
if (null !== $model->history[$index11]->combinedTo->customer->companies[$index60]->contragent->bankAccount) {
    $jsonData["history"][$index11]["combinedTo"]["customer"]["companies"][$index60]["contragent"]["bankAccount"] = $model->history[$index11]->combinedTo->customer->companies[$index60]->contragent->bankAccount;
}

if (0 === \count($jsonData["history"][$index11]["combinedTo"]["customer"]["companies"][$index60]["contragent"])) {
    $jsonData["history"][$index11]["combinedTo"]["customer"]["companies"][$index60]["contragent"] = $emptyObject;
}

}
if (null !== $model->history[$index11]->combinedTo->customer->companies[$index60]->address) {
    $jsonData["history"][$index11]["combinedTo"]["customer"]["companies"][$index60]["address"] = [];
if (null !== $model->history[$index11]->combinedTo->customer->companies[$index60]->address->id) {
    $jsonData["history"][$index11]["combinedTo"]["customer"]["companies"][$index60]["address"]["id"] = $model->history[$index11]->combinedTo->customer->companies[$index60]->address->id;
}
if (null !== $model->history[$index11]->combinedTo->customer->companies[$index60]->address->name) {
    $jsonData["history"][$index11]["combinedTo"]["customer"]["companies"][$index60]["address"]["name"] = $model->history[$index11]->combinedTo->customer->companies[$index60]->address->name;
}
if (null !== $model->history[$index11]->combinedTo->customer->companies[$index60]->address->isMain) {
    $jsonData["history"][$index11]["combinedTo"]["customer"]["companies"][$index60]["address"]["isMain"] = $model->history[$index11]->combinedTo->customer->companies[$index60]->address->isMain;
}
if (null !== $model->history[$index11]->combinedTo->customer->companies[$index60]->address->index) {
    $jsonData["history"][$index11]["combinedTo"]["customer"]["companies"][$index60]["address"]["index"] = $model->history[$index11]->combinedTo->customer->companies[$index60]->address->index;
}
if (null !== $model->history[$index11]->combinedTo->customer->companies[$index60]->address->countryIso) {
    $jsonData["history"][$index11]["combinedTo"]["customer"]["companies"][$index60]["address"]["countryIso"] = $model->history[$index11]->combinedTo->customer->companies[$index60]->address->countryIso;
}
if (null !== $model->history[$index11]->combinedTo->customer->companies[$index60]->address->region) {
    $jsonData["history"][$index11]["combinedTo"]["customer"]["companies"][$index60]["address"]["region"] = $model->history[$index11]->combinedTo->customer->companies[$index60]->address->region;
}
if (null !== $model->history[$index11]->combinedTo->customer->companies[$index60]->address->regionId) {
    $jsonData["history"][$index11]["combinedTo"]["customer"]["companies"][$index60]["address"]["regionId"] = $model->history[$index11]->combinedTo->customer->companies[$index60]->address->regionId;
}
if (null !== $model->history[$index11]->combinedTo->customer->companies[$index60]->address->city) {
    $jsonData["history"][$index11]["combinedTo"]["customer"]["companies"][$index60]["address"]["city"] = $model->history[$index11]->combinedTo->customer->companies[$index60]->address->city;
}
if (null !== $model->history[$index11]->combinedTo->customer->companies[$index60]->address->cityId) {
    $jsonData["history"][$index11]["combinedTo"]["customer"]["companies"][$index60]["address"]["cityId"] = $model->history[$index11]->combinedTo->customer->companies[$index60]->address->cityId;
}
if (null !== $model->history[$index11]->combinedTo->customer->companies[$index60]->address->cityType) {
    $jsonData["history"][$index11]["combinedTo"]["customer"]["companies"][$index60]["address"]["cityType"] = $model->history[$index11]->combinedTo->customer->companies[$index60]->address->cityType;
}
if (null !== $model->history[$index11]->combinedTo->customer->companies[$index60]->address->street) {
    $jsonData["history"][$index11]["combinedTo"]["customer"]["companies"][$index60]["address"]["street"] = $model->history[$index11]->combinedTo->customer->companies[$index60]->address->street;
}
if (null !== $model->history[$index11]->combinedTo->customer->companies[$index60]->address->streetId) {
    $jsonData["history"][$index11]["combinedTo"]["customer"]["companies"][$index60]["address"]["streetId"] = $model->history[$index11]->combinedTo->customer->companies[$index60]->address->streetId;
}
if (null !== $model->history[$index11]->combinedTo->customer->companies[$index60]->address->streetType) {
    $jsonData["history"][$index11]["combinedTo"]["customer"]["companies"][$index60]["address"]["streetType"] = $model->history[$index11]->combinedTo->customer->companies[$index60]->address->streetType;
}
if (null !== $model->history[$index11]->combinedTo->customer->companies[$index60]->address->building) {
    $jsonData["history"][$index11]["combinedTo"]["customer"]["companies"][$index60]["address"]["building"] = $model->history[$index11]->combinedTo->customer->companies[$index60]->address->building;
}
if (null !== $model->history[$index11]->combinedTo->customer->companies[$index60]->address->flat) {
    $jsonData["history"][$index11]["combinedTo"]["customer"]["companies"][$index60]["address"]["flat"] = $model->history[$index11]->combinedTo->customer->companies[$index60]->address->flat;
}
if (null !== $model->history[$index11]->combinedTo->customer->companies[$index60]->address->floor) {
    $jsonData["history"][$index11]["combinedTo"]["customer"]["companies"][$index60]["address"]["floor"] = $model->history[$index11]->combinedTo->customer->companies[$index60]->address->floor;
}
if (null !== $model->history[$index11]->combinedTo->customer->companies[$index60]->address->block) {
    $jsonData["history"][$index11]["combinedTo"]["customer"]["companies"][$index60]["address"]["block"] = $model->history[$index11]->combinedTo->customer->companies[$index60]->address->block;
}
if (null !== $model->history[$index11]->combinedTo->customer->companies[$index60]->address->house) {
    $jsonData["history"][$index11]["combinedTo"]["customer"]["companies"][$index60]["address"]["house"] = $model->history[$index11]->combinedTo->customer->companies[$index60]->address->house;
}
if (null !== $model->history[$index11]->combinedTo->customer->companies[$index60]->address->housing) {
    $jsonData["history"][$index11]["combinedTo"]["customer"]["companies"][$index60]["address"]["housing"] = $model->history[$index11]->combinedTo->customer->companies[$index60]->address->housing;
}
if (null !== $model->history[$index11]->combinedTo->customer->companies[$index60]->address->metro) {
    $jsonData["history"][$index11]["combinedTo"]["customer"]["companies"][$index60]["address"]["metro"] = $model->history[$index11]->combinedTo->customer->companies[$index60]->address->metro;
}
if (null !== $model->history[$index11]->combinedTo->customer->companies[$index60]->address->notes) {
    $jsonData["history"][$index11]["combinedTo"]["customer"]["companies"][$index60]["address"]["notes"] = $model->history[$index11]->combinedTo->customer->companies[$index60]->address->notes;
}
if (null !== $model->history[$index11]->combinedTo->customer->companies[$index60]->address->text) {
    $jsonData["history"][$index11]["combinedTo"]["customer"]["companies"][$index60]["address"]["text"] = $model->history[$index11]->combinedTo->customer->companies[$index60]->address->text;
}
if (null !== $model->history[$index11]->combinedTo->customer->companies[$index60]->address->externalId) {
    $jsonData["history"][$index11]["combinedTo"]["customer"]["companies"][$index60]["address"]["externalId"] = $model->history[$index11]->combinedTo->customer->companies[$index60]->address->externalId;
}

if (0 === \count($jsonData["history"][$index11]["combinedTo"]["customer"]["companies"][$index60]["address"])) {
    $jsonData["history"][$index11]["combinedTo"]["customer"]["companies"][$index60]["address"] = $emptyObject;
}

}
if (null !== $model->history[$index11]->combinedTo->customer->companies[$index60]->customFields) {
    $jsonData["history"][$index11]["combinedTo"]["customer"]["companies"][$index60]["customFields"] = [];
foreach (array_keys($model->history[$index11]->combinedTo->customer->companies[$index60]->customFields) as $index86) {
    $jsonData["history"][$index11]["combinedTo"]["customer"]["companies"][$index60]["customFields"] = $model->history[$index11]->combinedTo->customer->companies[$index60]->customFields;
}

}
if (null !== $model->history[$index11]->combinedTo->customer->companies[$index60]->marginSumm) {
    $jsonData["history"][$index11]["combinedTo"]["customer"]["companies"][$index60]["marginSumm"] = $model->history[$index11]->combinedTo->customer->companies[$index60]->marginSumm;
}
if (null !== $model->history[$index11]->combinedTo->customer->companies[$index60]->totalSumm) {
    $jsonData["history"][$index11]["combinedTo"]["customer"]["companies"][$index60]["totalSumm"] = $model->history[$index11]->combinedTo->customer->companies[$index60]->totalSumm;
}
if (null !== $model->history[$index11]->combinedTo->customer->companies[$index60]->averageSumm) {
    $jsonData["history"][$index11]["combinedTo"]["customer"]["companies"][$index60]["averageSumm"] = $model->history[$index11]->combinedTo->customer->companies[$index60]->averageSumm;
}
if (null !== $model->history[$index11]->combinedTo->customer->companies[$index60]->ordersCount) {
    $jsonData["history"][$index11]["combinedTo"]["customer"]["companies"][$index60]["ordersCount"] = $model->history[$index11]->combinedTo->customer->companies[$index60]->ordersCount;
}
if (null !== $model->history[$index11]->combinedTo->customer->companies[$index60]->costSumm) {
    $jsonData["history"][$index11]["combinedTo"]["customer"]["companies"][$index60]["costSumm"] = $model->history[$index11]->combinedTo->customer->companies[$index60]->costSumm;
}

if (0 === \count($jsonData["history"][$index11]["combinedTo"]["customer"]["companies"][$index60])) {
    $jsonData["history"][$index11]["combinedTo"]["customer"]["companies"][$index60] = $emptyObject;
}

}

}
if (null !== $model->history[$index11]->combinedTo->customer->addresses) {
    $jsonData["history"][$index11]["combinedTo"]["customer"]["addresses"] = [];
foreach (array_keys($model->history[$index11]->combinedTo->customer->addresses) as $index60) {
    $jsonData["history"][$index11]["combinedTo"]["customer"]["addresses"][$index60] = [];
if (null !== $model->history[$index11]->combinedTo->customer->addresses[$index60]->id) {
    $jsonData["history"][$index11]["combinedTo"]["customer"]["addresses"][$index60]["id"] = $model->history[$index11]->combinedTo->customer->addresses[$index60]->id;
}
if (null !== $model->history[$index11]->combinedTo->customer->addresses[$index60]->name) {
    $jsonData["history"][$index11]["combinedTo"]["customer"]["addresses"][$index60]["name"] = $model->history[$index11]->combinedTo->customer->addresses[$index60]->name;
}
if (null !== $model->history[$index11]->combinedTo->customer->addresses[$index60]->isMain) {
    $jsonData["history"][$index11]["combinedTo"]["customer"]["addresses"][$index60]["isMain"] = $model->history[$index11]->combinedTo->customer->addresses[$index60]->isMain;
}
if (null !== $model->history[$index11]->combinedTo->customer->addresses[$index60]->index) {
    $jsonData["history"][$index11]["combinedTo"]["customer"]["addresses"][$index60]["index"] = $model->history[$index11]->combinedTo->customer->addresses[$index60]->index;
}
if (null !== $model->history[$index11]->combinedTo->customer->addresses[$index60]->countryIso) {
    $jsonData["history"][$index11]["combinedTo"]["customer"]["addresses"][$index60]["countryIso"] = $model->history[$index11]->combinedTo->customer->addresses[$index60]->countryIso;
}
if (null !== $model->history[$index11]->combinedTo->customer->addresses[$index60]->region) {
    $jsonData["history"][$index11]["combinedTo"]["customer"]["addresses"][$index60]["region"] = $model->history[$index11]->combinedTo->customer->addresses[$index60]->region;
}
if (null !== $model->history[$index11]->combinedTo->customer->addresses[$index60]->regionId) {
    $jsonData["history"][$index11]["combinedTo"]["customer"]["addresses"][$index60]["regionId"] = $model->history[$index11]->combinedTo->customer->addresses[$index60]->regionId;
}
if (null !== $model->history[$index11]->combinedTo->customer->addresses[$index60]->city) {
    $jsonData["history"][$index11]["combinedTo"]["customer"]["addresses"][$index60]["city"] = $model->history[$index11]->combinedTo->customer->addresses[$index60]->city;
}
if (null !== $model->history[$index11]->combinedTo->customer->addresses[$index60]->cityId) {
    $jsonData["history"][$index11]["combinedTo"]["customer"]["addresses"][$index60]["cityId"] = $model->history[$index11]->combinedTo->customer->addresses[$index60]->cityId;
}
if (null !== $model->history[$index11]->combinedTo->customer->addresses[$index60]->cityType) {
    $jsonData["history"][$index11]["combinedTo"]["customer"]["addresses"][$index60]["cityType"] = $model->history[$index11]->combinedTo->customer->addresses[$index60]->cityType;
}
if (null !== $model->history[$index11]->combinedTo->customer->addresses[$index60]->street) {
    $jsonData["history"][$index11]["combinedTo"]["customer"]["addresses"][$index60]["street"] = $model->history[$index11]->combinedTo->customer->addresses[$index60]->street;
}
if (null !== $model->history[$index11]->combinedTo->customer->addresses[$index60]->streetId) {
    $jsonData["history"][$index11]["combinedTo"]["customer"]["addresses"][$index60]["streetId"] = $model->history[$index11]->combinedTo->customer->addresses[$index60]->streetId;
}
if (null !== $model->history[$index11]->combinedTo->customer->addresses[$index60]->streetType) {
    $jsonData["history"][$index11]["combinedTo"]["customer"]["addresses"][$index60]["streetType"] = $model->history[$index11]->combinedTo->customer->addresses[$index60]->streetType;
}
if (null !== $model->history[$index11]->combinedTo->customer->addresses[$index60]->building) {
    $jsonData["history"][$index11]["combinedTo"]["customer"]["addresses"][$index60]["building"] = $model->history[$index11]->combinedTo->customer->addresses[$index60]->building;
}
if (null !== $model->history[$index11]->combinedTo->customer->addresses[$index60]->flat) {
    $jsonData["history"][$index11]["combinedTo"]["customer"]["addresses"][$index60]["flat"] = $model->history[$index11]->combinedTo->customer->addresses[$index60]->flat;
}
if (null !== $model->history[$index11]->combinedTo->customer->addresses[$index60]->floor) {
    $jsonData["history"][$index11]["combinedTo"]["customer"]["addresses"][$index60]["floor"] = $model->history[$index11]->combinedTo->customer->addresses[$index60]->floor;
}
if (null !== $model->history[$index11]->combinedTo->customer->addresses[$index60]->block) {
    $jsonData["history"][$index11]["combinedTo"]["customer"]["addresses"][$index60]["block"] = $model->history[$index11]->combinedTo->customer->addresses[$index60]->block;
}
if (null !== $model->history[$index11]->combinedTo->customer->addresses[$index60]->house) {
    $jsonData["history"][$index11]["combinedTo"]["customer"]["addresses"][$index60]["house"] = $model->history[$index11]->combinedTo->customer->addresses[$index60]->house;
}
if (null !== $model->history[$index11]->combinedTo->customer->addresses[$index60]->housing) {
    $jsonData["history"][$index11]["combinedTo"]["customer"]["addresses"][$index60]["housing"] = $model->history[$index11]->combinedTo->customer->addresses[$index60]->housing;
}
if (null !== $model->history[$index11]->combinedTo->customer->addresses[$index60]->metro) {
    $jsonData["history"][$index11]["combinedTo"]["customer"]["addresses"][$index60]["metro"] = $model->history[$index11]->combinedTo->customer->addresses[$index60]->metro;
}
if (null !== $model->history[$index11]->combinedTo->customer->addresses[$index60]->notes) {
    $jsonData["history"][$index11]["combinedTo"]["customer"]["addresses"][$index60]["notes"] = $model->history[$index11]->combinedTo->customer->addresses[$index60]->notes;
}
if (null !== $model->history[$index11]->combinedTo->customer->addresses[$index60]->text) {
    $jsonData["history"][$index11]["combinedTo"]["customer"]["addresses"][$index60]["text"] = $model->history[$index11]->combinedTo->customer->addresses[$index60]->text;
}
if (null !== $model->history[$index11]->combinedTo->customer->addresses[$index60]->externalId) {
    $jsonData["history"][$index11]["combinedTo"]["customer"]["addresses"][$index60]["externalId"] = $model->history[$index11]->combinedTo->customer->addresses[$index60]->externalId;
}

if (0 === \count($jsonData["history"][$index11]["combinedTo"]["customer"]["addresses"][$index60])) {
    $jsonData["history"][$index11]["combinedTo"]["customer"]["addresses"][$index60] = $emptyObject;
}

}

}
if (null !== $model->history[$index11]->combinedTo->customer->vip) {
    $jsonData["history"][$index11]["combinedTo"]["customer"]["vip"] = $model->history[$index11]->combinedTo->customer->vip;
}
if (null !== $model->history[$index11]->combinedTo->customer->bad) {
    $jsonData["history"][$index11]["combinedTo"]["customer"]["bad"] = $model->history[$index11]->combinedTo->customer->bad;
}
if (null !== $model->history[$index11]->combinedTo->customer->site) {
    $jsonData["history"][$index11]["combinedTo"]["customer"]["site"] = $model->history[$index11]->combinedTo->customer->site;
}
if (null !== $model->history[$index11]->combinedTo->customer->tags) {
    $jsonData["history"][$index11]["combinedTo"]["customer"]["tags"] = [];
foreach (array_keys($model->history[$index11]->combinedTo->customer->tags) as $index55) {
    $jsonData["history"][$index11]["combinedTo"]["customer"]["tags"][$index55] = [];
if (null !== $model->history[$index11]->combinedTo->customer->tags[$index55]->name) {
    $jsonData["history"][$index11]["combinedTo"]["customer"]["tags"][$index55]["name"] = $model->history[$index11]->combinedTo->customer->tags[$index55]->name;
}
if (null !== $model->history[$index11]->combinedTo->customer->tags[$index55]->color) {
    $jsonData["history"][$index11]["combinedTo"]["customer"]["tags"][$index55]["color"] = $model->history[$index11]->combinedTo->customer->tags[$index55]->color;
}
if (null !== $model->history[$index11]->combinedTo->customer->tags[$index55]->attached) {
    $jsonData["history"][$index11]["combinedTo"]["customer"]["tags"][$index55]["attached"] = $model->history[$index11]->combinedTo->customer->tags[$index55]->attached;
}

if (0 === \count($jsonData["history"][$index11]["combinedTo"]["customer"]["tags"][$index55])) {
    $jsonData["history"][$index11]["combinedTo"]["customer"]["tags"][$index55] = $emptyObject;
}

}

}
if (null !== $model->history[$index11]->combinedTo->customer->avgMarginSumm) {
    $jsonData["history"][$index11]["combinedTo"]["customer"]["avgMarginSumm"] = $model->history[$index11]->combinedTo->customer->avgMarginSumm;
}
if (null !== $model->history[$index11]->combinedTo->customer->marginSumm) {
    $jsonData["history"][$index11]["combinedTo"]["customer"]["marginSumm"] = $model->history[$index11]->combinedTo->customer->marginSumm;
}
if (null !== $model->history[$index11]->combinedTo->customer->totalSumm) {
    $jsonData["history"][$index11]["combinedTo"]["customer"]["totalSumm"] = $model->history[$index11]->combinedTo->customer->totalSumm;
}
if (null !== $model->history[$index11]->combinedTo->customer->averageSumm) {
    $jsonData["history"][$index11]["combinedTo"]["customer"]["averageSumm"] = $model->history[$index11]->combinedTo->customer->averageSumm;
}
if (null !== $model->history[$index11]->combinedTo->customer->ordersCount) {
    $jsonData["history"][$index11]["combinedTo"]["customer"]["ordersCount"] = $model->history[$index11]->combinedTo->customer->ordersCount;
}
if (null !== $model->history[$index11]->combinedTo->customer->costSumm) {
    $jsonData["history"][$index11]["combinedTo"]["customer"]["costSumm"] = $model->history[$index11]->combinedTo->customer->costSumm;
}
if (null !== $model->history[$index11]->combinedTo->customer->customFields) {
    $jsonData["history"][$index11]["combinedTo"]["customer"]["customFields"] = [];
foreach (array_keys($model->history[$index11]->combinedTo->customer->customFields) as $index63) {
    $jsonData["history"][$index11]["combinedTo"]["customer"]["customFields"] = $model->history[$index11]->combinedTo->customer->customFields;
}

}
if (null !== $model->history[$index11]->combinedTo->customer->personalDiscount) {
    $jsonData["history"][$index11]["combinedTo"]["customer"]["personalDiscount"] = $model->history[$index11]->combinedTo->customer->personalDiscount;
}
if (null !== $model->history[$index11]->combinedTo->customer->cumulativeDiscount) {
    $jsonData["history"][$index11]["combinedTo"]["customer"]["cumulativeDiscount"] = $model->history[$index11]->combinedTo->customer->cumulativeDiscount;
}
if (null !== $model->history[$index11]->combinedTo->customer->discountCardNumber) {
    $jsonData["history"][$index11]["combinedTo"]["customer"]["discountCardNumber"] = $model->history[$index11]->combinedTo->customer->discountCardNumber;
}
if (null !== $model->history[$index11]->combinedTo->customer->firstClientId) {
    $jsonData["history"][$index11]["combinedTo"]["customer"]["firstClientId"] = $model->history[$index11]->combinedTo->customer->firstClientId;
}
if (null !== $model->history[$index11]->combinedTo->customer->lastClientId) {
    $jsonData["history"][$index11]["combinedTo"]["customer"]["lastClientId"] = $model->history[$index11]->combinedTo->customer->lastClientId;
}
if (null !== $model->history[$index11]->combinedTo->customer->mainCustomerContact) {
    $jsonData["history"][$index11]["combinedTo"]["customer"]["mainCustomerContact"] = [];
if (null !== $model->history[$index11]->combinedTo->customer->mainCustomerContact->id) {
    $jsonData["history"][$index11]["combinedTo"]["customer"]["mainCustomerContact"]["id"] = $model->history[$index11]->combinedTo->customer->mainCustomerContact->id;
}
if (null !== $model->history[$index11]->combinedTo->customer->mainCustomerContact->isMain) {
    $jsonData["history"][$index11]["combinedTo"]["customer"]["mainCustomerContact"]["isMain"] = $model->history[$index11]->combinedTo->customer->mainCustomerContact->isMain;
}
if (null !== $model->history[$index11]->combinedTo->customer->mainCustomerContact->customer) {
    $jsonData["history"][$index11]["combinedTo"]["customer"]["mainCustomerContact"]["customer"] = [];
if (null !== $model->history[$index11]->combinedTo->customer->mainCustomerContact->customer->id) {
    $jsonData["history"][$index11]["combinedTo"]["customer"]["mainCustomerContact"]["customer"]["id"] = $model->history[$index11]->combinedTo->customer->mainCustomerContact->customer->id;
}
if (null !== $model->history[$index11]->combinedTo->customer->mainCustomerContact->customer->externalId) {
    $jsonData["history"][$index11]["combinedTo"]["customer"]["mainCustomerContact"]["customer"]["externalId"] = $model->history[$index11]->combinedTo->customer->mainCustomerContact->customer->externalId;
}
if (null !== $model->history[$index11]->combinedTo->customer->mainCustomerContact->customer->browserId) {
    $jsonData["history"][$index11]["combinedTo"]["customer"]["mainCustomerContact"]["customer"]["browserId"] = $model->history[$index11]->combinedTo->customer->mainCustomerContact->customer->browserId;
}
if (null !== $model->history[$index11]->combinedTo->customer->mainCustomerContact->customer->site) {
    $jsonData["history"][$index11]["combinedTo"]["customer"]["mainCustomerContact"]["customer"]["site"] = $model->history[$index11]->combinedTo->customer->mainCustomerContact->customer->site;
}
if (null !== $model->history[$index11]->combinedTo->customer->mainCustomerContact->customer->companies) {
    $jsonData["history"][$index11]["combinedTo"]["customer"]["mainCustomerContact"]["customer"]["companies"] = [];
foreach (array_keys($model->history[$index11]->combinedTo->customer->mainCustomerContact->customer->companies) as $index95) {
    $jsonData["history"][$index11]["combinedTo"]["customer"]["mainCustomerContact"]["customer"]["companies"][$index95] = [];
if (null !== $model->history[$index11]->combinedTo->customer->mainCustomerContact->customer->companies[$index95]->id) {
    $jsonData["history"][$index11]["combinedTo"]["customer"]["mainCustomerContact"]["customer"]["companies"][$index95]["id"] = $model->history[$index11]->combinedTo->customer->mainCustomerContact->customer->companies[$index95]->id;
}
if (null !== $model->history[$index11]->combinedTo->customer->mainCustomerContact->customer->companies[$index95]->externalId) {
    $jsonData["history"][$index11]["combinedTo"]["customer"]["mainCustomerContact"]["customer"]["companies"][$index95]["externalId"] = $model->history[$index11]->combinedTo->customer->mainCustomerContact->customer->companies[$index95]->externalId;
}
if (null !== $model->history[$index11]->combinedTo->customer->mainCustomerContact->customer->companies[$index95]->company) {
    $jsonData["history"][$index11]["combinedTo"]["customer"]["mainCustomerContact"]["customer"]["companies"][$index95]["company"] = [];
if (null !== $model->history[$index11]->combinedTo->customer->mainCustomerContact->customer->companies[$index95]->company->id) {
    $jsonData["history"][$index11]["combinedTo"]["customer"]["mainCustomerContact"]["customer"]["companies"][$index95]["company"]["id"] = $model->history[$index11]->combinedTo->customer->mainCustomerContact->customer->companies[$index95]->company->id;
}
if (null !== $model->history[$index11]->combinedTo->customer->mainCustomerContact->customer->companies[$index95]->company->externalId) {
    $jsonData["history"][$index11]["combinedTo"]["customer"]["mainCustomerContact"]["customer"]["companies"][$index95]["company"]["externalId"] = $model->history[$index11]->combinedTo->customer->mainCustomerContact->customer->companies[$index95]->company->externalId;
}
if (null !== $model->history[$index11]->combinedTo->customer->mainCustomerContact->customer->companies[$index95]->company->name) {
    $jsonData["history"][$index11]["combinedTo"]["customer"]["mainCustomerContact"]["customer"]["companies"][$index95]["company"]["name"] = $model->history[$index11]->combinedTo->customer->mainCustomerContact->customer->companies[$index95]->company->name;
}

if (0 === \count($jsonData["history"][$index11]["combinedTo"]["customer"]["mainCustomerContact"]["customer"]["companies"][$index95]["company"])) {
    $jsonData["history"][$index11]["combinedTo"]["customer"]["mainCustomerContact"]["customer"]["companies"][$index95]["company"] = $emptyObject;
}

}

if (0 === \count($jsonData["history"][$index11]["combinedTo"]["customer"]["mainCustomerContact"]["customer"]["companies"][$index95])) {
    $jsonData["history"][$index11]["combinedTo"]["customer"]["mainCustomerContact"]["customer"]["companies"][$index95] = $emptyObject;
}

}

}

if (0 === \count($jsonData["history"][$index11]["combinedTo"]["customer"]["mainCustomerContact"]["customer"])) {
    $jsonData["history"][$index11]["combinedTo"]["customer"]["mainCustomerContact"]["customer"] = $emptyObject;
}

}
if (null !== $model->history[$index11]->combinedTo->customer->mainCustomerContact->companies) {
    $jsonData["history"][$index11]["combinedTo"]["customer"]["mainCustomerContact"]["companies"] = [];
foreach (array_keys($model->history[$index11]->combinedTo->customer->mainCustomerContact->companies) as $index83) {
    $jsonData["history"][$index11]["combinedTo"]["customer"]["mainCustomerContact"]["companies"][$index83] = [];
if (null !== $model->history[$index11]->combinedTo->customer->mainCustomerContact->companies[$index83]->id) {
    $jsonData["history"][$index11]["combinedTo"]["customer"]["mainCustomerContact"]["companies"][$index83]["id"] = $model->history[$index11]->combinedTo->customer->mainCustomerContact->companies[$index83]->id;
}
if (null !== $model->history[$index11]->combinedTo->customer->mainCustomerContact->companies[$index83]->externalId) {
    $jsonData["history"][$index11]["combinedTo"]["customer"]["mainCustomerContact"]["companies"][$index83]["externalId"] = $model->history[$index11]->combinedTo->customer->mainCustomerContact->companies[$index83]->externalId;
}
if (null !== $model->history[$index11]->combinedTo->customer->mainCustomerContact->companies[$index83]->company) {
    $jsonData["history"][$index11]["combinedTo"]["customer"]["mainCustomerContact"]["companies"][$index83]["company"] = [];
if (null !== $model->history[$index11]->combinedTo->customer->mainCustomerContact->companies[$index83]->company->id) {
    $jsonData["history"][$index11]["combinedTo"]["customer"]["mainCustomerContact"]["companies"][$index83]["company"]["id"] = $model->history[$index11]->combinedTo->customer->mainCustomerContact->companies[$index83]->company->id;
}
if (null !== $model->history[$index11]->combinedTo->customer->mainCustomerContact->companies[$index83]->company->externalId) {
    $jsonData["history"][$index11]["combinedTo"]["customer"]["mainCustomerContact"]["companies"][$index83]["company"]["externalId"] = $model->history[$index11]->combinedTo->customer->mainCustomerContact->companies[$index83]->company->externalId;
}
if (null !== $model->history[$index11]->combinedTo->customer->mainCustomerContact->companies[$index83]->company->name) {
    $jsonData["history"][$index11]["combinedTo"]["customer"]["mainCustomerContact"]["companies"][$index83]["company"]["name"] = $model->history[$index11]->combinedTo->customer->mainCustomerContact->companies[$index83]->company->name;
}

if (0 === \count($jsonData["history"][$index11]["combinedTo"]["customer"]["mainCustomerContact"]["companies"][$index83]["company"])) {
    $jsonData["history"][$index11]["combinedTo"]["customer"]["mainCustomerContact"]["companies"][$index83]["company"] = $emptyObject;
}

}

if (0 === \count($jsonData["history"][$index11]["combinedTo"]["customer"]["mainCustomerContact"]["companies"][$index83])) {
    $jsonData["history"][$index11]["combinedTo"]["customer"]["mainCustomerContact"]["companies"][$index83] = $emptyObject;
}

}

}

if (0 === \count($jsonData["history"][$index11]["combinedTo"]["customer"]["mainCustomerContact"])) {
    $jsonData["history"][$index11]["combinedTo"]["customer"]["mainCustomerContact"] = $emptyObject;
}

}
if (null !== $model->history[$index11]->combinedTo->customer->mainCompany) {
    $jsonData["history"][$index11]["combinedTo"]["customer"]["mainCompany"] = [];
if (null !== $model->history[$index11]->combinedTo->customer->mainCompany->id) {
    $jsonData["history"][$index11]["combinedTo"]["customer"]["mainCompany"]["id"] = $model->history[$index11]->combinedTo->customer->mainCompany->id;
}
if (null !== $model->history[$index11]->combinedTo->customer->mainCompany->externalId) {
    $jsonData["history"][$index11]["combinedTo"]["customer"]["mainCompany"]["externalId"] = $model->history[$index11]->combinedTo->customer->mainCompany->externalId;
}
if (null !== $model->history[$index11]->combinedTo->customer->mainCompany->name) {
    $jsonData["history"][$index11]["combinedTo"]["customer"]["mainCompany"]["name"] = $model->history[$index11]->combinedTo->customer->mainCompany->name;
}

if (0 === \count($jsonData["history"][$index11]["combinedTo"]["customer"]["mainCompany"])) {
    $jsonData["history"][$index11]["combinedTo"]["customer"]["mainCompany"] = $emptyObject;
}

}

if (0 === \count($jsonData["history"][$index11]["combinedTo"]["customer"])) {
    $jsonData["history"][$index11]["combinedTo"]["customer"] = $emptyObject;
}

}

}
if (null !== $model->history[$index11]->combinedTo->contact) {
    $jsonData["history"][$index11]["combinedTo"]["contact"] = [];
if (null !== $model->history[$index11]->combinedTo->contact->type) {
    $jsonData["history"][$index11]["combinedTo"]["contact"]["type"] = $model->history[$index11]->combinedTo->contact->type;
}
if (null !== $model->history[$index11]->combinedTo->contact->id) {
    $jsonData["history"][$index11]["combinedTo"]["contact"]["id"] = $model->history[$index11]->combinedTo->contact->id;
}
if (null !== $model->history[$index11]->combinedTo->contact->externalId) {
    $jsonData["history"][$index11]["combinedTo"]["contact"]["externalId"] = $model->history[$index11]->combinedTo->contact->externalId;
}
if (null !== $model->history[$index11]->combinedTo->contact->isContact) {
    $jsonData["history"][$index11]["combinedTo"]["contact"]["isContact"] = $model->history[$index11]->combinedTo->contact->isContact;
}
if (null !== $model->history[$index11]->combinedTo->contact->createdAt) {
    $jsonData["history"][$index11]["combinedTo"]["contact"]["createdAt"] = $model->history[$index11]->combinedTo->contact->createdAt->format('Y-m-d H:i:s');;
}
if (null !== $model->history[$index11]->combinedTo->contact->managerId) {
    $jsonData["history"][$index11]["combinedTo"]["contact"]["managerId"] = $model->history[$index11]->combinedTo->contact->managerId;
}
if (null !== $model->history[$index11]->combinedTo->contact->vip) {
    $jsonData["history"][$index11]["combinedTo"]["contact"]["vip"] = $model->history[$index11]->combinedTo->contact->vip;
}
if (null !== $model->history[$index11]->combinedTo->contact->bad) {
    $jsonData["history"][$index11]["combinedTo"]["contact"]["bad"] = $model->history[$index11]->combinedTo->contact->bad;
}
if (null !== $model->history[$index11]->combinedTo->contact->browserId) {
    $jsonData["history"][$index11]["combinedTo"]["contact"]["browserId"] = $model->history[$index11]->combinedTo->contact->browserId;
}
if (null !== $model->history[$index11]->combinedTo->contact->site) {
    $jsonData["history"][$index11]["combinedTo"]["contact"]["site"] = $model->history[$index11]->combinedTo->contact->site;
}
if (null !== $model->history[$index11]->combinedTo->contact->contragent) {
    $jsonData["history"][$index11]["combinedTo"]["contact"]["contragent"] = [];
if (null !== $model->history[$index11]->combinedTo->contact->contragent->contragentType) {
    $jsonData["history"][$index11]["combinedTo"]["contact"]["contragent"]["contragentType"] = $model->history[$index11]->combinedTo->contact->contragent->contragentType;
}
if (null !== $model->history[$index11]->combinedTo->contact->contragent->legalName) {
    $jsonData["history"][$index11]["combinedTo"]["contact"]["contragent"]["legalName"] = $model->history[$index11]->combinedTo->contact->contragent->legalName;
}
if (null !== $model->history[$index11]->combinedTo->contact->contragent->legalAddress) {
    $jsonData["history"][$index11]["combinedTo"]["contact"]["contragent"]["legalAddress"] = $model->history[$index11]->combinedTo->contact->contragent->legalAddress;
}
if (null !== $model->history[$index11]->combinedTo->contact->contragent->INN) {
    $jsonData["history"][$index11]["combinedTo"]["contact"]["contragent"]["INN"] = $model->history[$index11]->combinedTo->contact->contragent->INN;
}
if (null !== $model->history[$index11]->combinedTo->contact->contragent->OKPO) {
    $jsonData["history"][$index11]["combinedTo"]["contact"]["contragent"]["OKPO"] = $model->history[$index11]->combinedTo->contact->contragent->OKPO;
}
if (null !== $model->history[$index11]->combinedTo->contact->contragent->KPP) {
    $jsonData["history"][$index11]["combinedTo"]["contact"]["contragent"]["KPP"] = $model->history[$index11]->combinedTo->contact->contragent->KPP;
}
if (null !== $model->history[$index11]->combinedTo->contact->contragent->OGRN) {
    $jsonData["history"][$index11]["combinedTo"]["contact"]["contragent"]["OGRN"] = $model->history[$index11]->combinedTo->contact->contragent->OGRN;
}
if (null !== $model->history[$index11]->combinedTo->contact->contragent->OGRNIP) {
    $jsonData["history"][$index11]["combinedTo"]["contact"]["contragent"]["OGRNIP"] = $model->history[$index11]->combinedTo->contact->contragent->OGRNIP;
}
if (null !== $model->history[$index11]->combinedTo->contact->contragent->certificateNumber) {
    $jsonData["history"][$index11]["combinedTo"]["contact"]["contragent"]["certificateNumber"] = $model->history[$index11]->combinedTo->contact->contragent->certificateNumber;
}
if (null !== $model->history[$index11]->combinedTo->contact->contragent->certificateDate) {
    $jsonData["history"][$index11]["combinedTo"]["contact"]["contragent"]["certificateDate"] = $model->history[$index11]->combinedTo->contact->contragent->certificateDate->format('Y-m-d H:i:s');;
}
if (null !== $model->history[$index11]->combinedTo->contact->contragent->BIK) {
    $jsonData["history"][$index11]["combinedTo"]["contact"]["contragent"]["BIK"] = $model->history[$index11]->combinedTo->contact->contragent->BIK;
}
if (null !== $model->history[$index11]->combinedTo->contact->contragent->bank) {
    $jsonData["history"][$index11]["combinedTo"]["contact"]["contragent"]["bank"] = $model->history[$index11]->combinedTo->contact->contragent->bank;
}
if (null !== $model->history[$index11]->combinedTo->contact->contragent->bankAddress) {
    $jsonData["history"][$index11]["combinedTo"]["contact"]["contragent"]["bankAddress"] = $model->history[$index11]->combinedTo->contact->contragent->bankAddress;
}
if (null !== $model->history[$index11]->combinedTo->contact->contragent->corrAccount) {
    $jsonData["history"][$index11]["combinedTo"]["contact"]["contragent"]["corrAccount"] = $model->history[$index11]->combinedTo->contact->contragent->corrAccount;
}
if (null !== $model->history[$index11]->combinedTo->contact->contragent->bankAccount) {
    $jsonData["history"][$index11]["combinedTo"]["contact"]["contragent"]["bankAccount"] = $model->history[$index11]->combinedTo->contact->contragent->bankAccount;
}

if (0 === \count($jsonData["history"][$index11]["combinedTo"]["contact"]["contragent"])) {
    $jsonData["history"][$index11]["combinedTo"]["contact"]["contragent"] = $emptyObject;
}

}
if (null !== $model->history[$index11]->combinedTo->contact->tags) {
    $jsonData["history"][$index11]["combinedTo"]["contact"]["tags"] = [];
foreach (array_keys($model->history[$index11]->combinedTo->contact->tags) as $index54) {
    $jsonData["history"][$index11]["combinedTo"]["contact"]["tags"][$index54] = [];
if (null !== $model->history[$index11]->combinedTo->contact->tags[$index54]->name) {
    $jsonData["history"][$index11]["combinedTo"]["contact"]["tags"][$index54]["name"] = $model->history[$index11]->combinedTo->contact->tags[$index54]->name;
}
if (null !== $model->history[$index11]->combinedTo->contact->tags[$index54]->color) {
    $jsonData["history"][$index11]["combinedTo"]["contact"]["tags"][$index54]["color"] = $model->history[$index11]->combinedTo->contact->tags[$index54]->color;
}
if (null !== $model->history[$index11]->combinedTo->contact->tags[$index54]->attached) {
    $jsonData["history"][$index11]["combinedTo"]["contact"]["tags"][$index54]["attached"] = $model->history[$index11]->combinedTo->contact->tags[$index54]->attached;
}

if (0 === \count($jsonData["history"][$index11]["combinedTo"]["contact"]["tags"][$index54])) {
    $jsonData["history"][$index11]["combinedTo"]["contact"]["tags"][$index54] = $emptyObject;
}

}

}
if (null !== $model->history[$index11]->combinedTo->contact->avgMarginSumm) {
    $jsonData["history"][$index11]["combinedTo"]["contact"]["avgMarginSumm"] = $model->history[$index11]->combinedTo->contact->avgMarginSumm;
}
if (null !== $model->history[$index11]->combinedTo->contact->marginSumm) {
    $jsonData["history"][$index11]["combinedTo"]["contact"]["marginSumm"] = $model->history[$index11]->combinedTo->contact->marginSumm;
}
if (null !== $model->history[$index11]->combinedTo->contact->totalSumm) {
    $jsonData["history"][$index11]["combinedTo"]["contact"]["totalSumm"] = $model->history[$index11]->combinedTo->contact->totalSumm;
}
if (null !== $model->history[$index11]->combinedTo->contact->averageSumm) {
    $jsonData["history"][$index11]["combinedTo"]["contact"]["averageSumm"] = $model->history[$index11]->combinedTo->contact->averageSumm;
}
if (null !== $model->history[$index11]->combinedTo->contact->ordersCount) {
    $jsonData["history"][$index11]["combinedTo"]["contact"]["ordersCount"] = $model->history[$index11]->combinedTo->contact->ordersCount;
}
if (null !== $model->history[$index11]->combinedTo->contact->costSumm) {
    $jsonData["history"][$index11]["combinedTo"]["contact"]["costSumm"] = $model->history[$index11]->combinedTo->contact->costSumm;
}
if (null !== $model->history[$index11]->combinedTo->contact->customFields) {
    $jsonData["history"][$index11]["combinedTo"]["contact"]["customFields"] = [];
foreach (array_keys($model->history[$index11]->combinedTo->contact->customFields) as $index62) {
    $jsonData["history"][$index11]["combinedTo"]["contact"]["customFields"] = $model->history[$index11]->combinedTo->contact->customFields;
}

}
if (null !== $model->history[$index11]->combinedTo->contact->personalDiscount) {
    $jsonData["history"][$index11]["combinedTo"]["contact"]["personalDiscount"] = $model->history[$index11]->combinedTo->contact->personalDiscount;
}
if (null !== $model->history[$index11]->combinedTo->contact->cumulativeDiscount) {
    $jsonData["history"][$index11]["combinedTo"]["contact"]["cumulativeDiscount"] = $model->history[$index11]->combinedTo->contact->cumulativeDiscount;
}
if (null !== $model->history[$index11]->combinedTo->contact->discountCardNumber) {
    $jsonData["history"][$index11]["combinedTo"]["contact"]["discountCardNumber"] = $model->history[$index11]->combinedTo->contact->discountCardNumber;
}
if (null !== $model->history[$index11]->combinedTo->contact->firstClientId) {
    $jsonData["history"][$index11]["combinedTo"]["contact"]["firstClientId"] = $model->history[$index11]->combinedTo->contact->firstClientId;
}
if (null !== $model->history[$index11]->combinedTo->contact->lastClientId) {
    $jsonData["history"][$index11]["combinedTo"]["contact"]["lastClientId"] = $model->history[$index11]->combinedTo->contact->lastClientId;
}
if (null !== $model->history[$index11]->combinedTo->contact->address) {
    $jsonData["history"][$index11]["combinedTo"]["contact"]["address"] = [];
if (null !== $model->history[$index11]->combinedTo->contact->address->id) {
    $jsonData["history"][$index11]["combinedTo"]["contact"]["address"]["id"] = $model->history[$index11]->combinedTo->contact->address->id;
}
if (null !== $model->history[$index11]->combinedTo->contact->address->name) {
    $jsonData["history"][$index11]["combinedTo"]["contact"]["address"]["name"] = $model->history[$index11]->combinedTo->contact->address->name;
}
if (null !== $model->history[$index11]->combinedTo->contact->address->isMain) {
    $jsonData["history"][$index11]["combinedTo"]["contact"]["address"]["isMain"] = $model->history[$index11]->combinedTo->contact->address->isMain;
}
if (null !== $model->history[$index11]->combinedTo->contact->address->index) {
    $jsonData["history"][$index11]["combinedTo"]["contact"]["address"]["index"] = $model->history[$index11]->combinedTo->contact->address->index;
}
if (null !== $model->history[$index11]->combinedTo->contact->address->countryIso) {
    $jsonData["history"][$index11]["combinedTo"]["contact"]["address"]["countryIso"] = $model->history[$index11]->combinedTo->contact->address->countryIso;
}
if (null !== $model->history[$index11]->combinedTo->contact->address->region) {
    $jsonData["history"][$index11]["combinedTo"]["contact"]["address"]["region"] = $model->history[$index11]->combinedTo->contact->address->region;
}
if (null !== $model->history[$index11]->combinedTo->contact->address->regionId) {
    $jsonData["history"][$index11]["combinedTo"]["contact"]["address"]["regionId"] = $model->history[$index11]->combinedTo->contact->address->regionId;
}
if (null !== $model->history[$index11]->combinedTo->contact->address->city) {
    $jsonData["history"][$index11]["combinedTo"]["contact"]["address"]["city"] = $model->history[$index11]->combinedTo->contact->address->city;
}
if (null !== $model->history[$index11]->combinedTo->contact->address->cityId) {
    $jsonData["history"][$index11]["combinedTo"]["contact"]["address"]["cityId"] = $model->history[$index11]->combinedTo->contact->address->cityId;
}
if (null !== $model->history[$index11]->combinedTo->contact->address->cityType) {
    $jsonData["history"][$index11]["combinedTo"]["contact"]["address"]["cityType"] = $model->history[$index11]->combinedTo->contact->address->cityType;
}
if (null !== $model->history[$index11]->combinedTo->contact->address->street) {
    $jsonData["history"][$index11]["combinedTo"]["contact"]["address"]["street"] = $model->history[$index11]->combinedTo->contact->address->street;
}
if (null !== $model->history[$index11]->combinedTo->contact->address->streetId) {
    $jsonData["history"][$index11]["combinedTo"]["contact"]["address"]["streetId"] = $model->history[$index11]->combinedTo->contact->address->streetId;
}
if (null !== $model->history[$index11]->combinedTo->contact->address->streetType) {
    $jsonData["history"][$index11]["combinedTo"]["contact"]["address"]["streetType"] = $model->history[$index11]->combinedTo->contact->address->streetType;
}
if (null !== $model->history[$index11]->combinedTo->contact->address->building) {
    $jsonData["history"][$index11]["combinedTo"]["contact"]["address"]["building"] = $model->history[$index11]->combinedTo->contact->address->building;
}
if (null !== $model->history[$index11]->combinedTo->contact->address->flat) {
    $jsonData["history"][$index11]["combinedTo"]["contact"]["address"]["flat"] = $model->history[$index11]->combinedTo->contact->address->flat;
}
if (null !== $model->history[$index11]->combinedTo->contact->address->floor) {
    $jsonData["history"][$index11]["combinedTo"]["contact"]["address"]["floor"] = $model->history[$index11]->combinedTo->contact->address->floor;
}
if (null !== $model->history[$index11]->combinedTo->contact->address->block) {
    $jsonData["history"][$index11]["combinedTo"]["contact"]["address"]["block"] = $model->history[$index11]->combinedTo->contact->address->block;
}
if (null !== $model->history[$index11]->combinedTo->contact->address->house) {
    $jsonData["history"][$index11]["combinedTo"]["contact"]["address"]["house"] = $model->history[$index11]->combinedTo->contact->address->house;
}
if (null !== $model->history[$index11]->combinedTo->contact->address->housing) {
    $jsonData["history"][$index11]["combinedTo"]["contact"]["address"]["housing"] = $model->history[$index11]->combinedTo->contact->address->housing;
}
if (null !== $model->history[$index11]->combinedTo->contact->address->metro) {
    $jsonData["history"][$index11]["combinedTo"]["contact"]["address"]["metro"] = $model->history[$index11]->combinedTo->contact->address->metro;
}
if (null !== $model->history[$index11]->combinedTo->contact->address->notes) {
    $jsonData["history"][$index11]["combinedTo"]["contact"]["address"]["notes"] = $model->history[$index11]->combinedTo->contact->address->notes;
}
if (null !== $model->history[$index11]->combinedTo->contact->address->text) {
    $jsonData["history"][$index11]["combinedTo"]["contact"]["address"]["text"] = $model->history[$index11]->combinedTo->contact->address->text;
}
if (null !== $model->history[$index11]->combinedTo->contact->address->externalId) {
    $jsonData["history"][$index11]["combinedTo"]["contact"]["address"]["externalId"] = $model->history[$index11]->combinedTo->contact->address->externalId;
}

if (0 === \count($jsonData["history"][$index11]["combinedTo"]["contact"]["address"])) {
    $jsonData["history"][$index11]["combinedTo"]["contact"]["address"] = $emptyObject;
}

}
if (null !== $model->history[$index11]->combinedTo->contact->segments) {
    $jsonData["history"][$index11]["combinedTo"]["contact"]["segments"] = [];
foreach (array_keys($model->history[$index11]->combinedTo->contact->segments) as $index58) {
    $jsonData["history"][$index11]["combinedTo"]["contact"]["segments"][$index58] = [];
if (null !== $model->history[$index11]->combinedTo->contact->segments[$index58]->id) {
    $jsonData["history"][$index11]["combinedTo"]["contact"]["segments"][$index58]["id"] = $model->history[$index11]->combinedTo->contact->segments[$index58]->id;
}
if (null !== $model->history[$index11]->combinedTo->contact->segments[$index58]->code) {
    $jsonData["history"][$index11]["combinedTo"]["contact"]["segments"][$index58]["code"] = $model->history[$index11]->combinedTo->contact->segments[$index58]->code;
}
if (null !== $model->history[$index11]->combinedTo->contact->segments[$index58]->name) {
    $jsonData["history"][$index11]["combinedTo"]["contact"]["segments"][$index58]["name"] = $model->history[$index11]->combinedTo->contact->segments[$index58]->name;
}
if (null !== $model->history[$index11]->combinedTo->contact->segments[$index58]->createdAt) {
    $jsonData["history"][$index11]["combinedTo"]["contact"]["segments"][$index58]["createdAt"] = $model->history[$index11]->combinedTo->contact->segments[$index58]->createdAt->format('Y-m-d H:i:s');;
}
if (null !== $model->history[$index11]->combinedTo->contact->segments[$index58]->isDynamic) {
    $jsonData["history"][$index11]["combinedTo"]["contact"]["segments"][$index58]["isDynamic"] = $model->history[$index11]->combinedTo->contact->segments[$index58]->isDynamic;
}
if (null !== $model->history[$index11]->combinedTo->contact->segments[$index58]->customersCount) {
    $jsonData["history"][$index11]["combinedTo"]["contact"]["segments"][$index58]["customersCount"] = $model->history[$index11]->combinedTo->contact->segments[$index58]->customersCount;
}
if (null !== $model->history[$index11]->combinedTo->contact->segments[$index58]->active) {
    $jsonData["history"][$index11]["combinedTo"]["contact"]["segments"][$index58]["active"] = $model->history[$index11]->combinedTo->contact->segments[$index58]->active;
}

if (0 === \count($jsonData["history"][$index11]["combinedTo"]["contact"]["segments"][$index58])) {
    $jsonData["history"][$index11]["combinedTo"]["contact"]["segments"][$index58] = $emptyObject;
}

}

}
if (null !== $model->history[$index11]->combinedTo->contact->maturationTime) {
    $jsonData["history"][$index11]["combinedTo"]["contact"]["maturationTime"] = $model->history[$index11]->combinedTo->contact->maturationTime;
}
if (null !== $model->history[$index11]->combinedTo->contact->firstName) {
    $jsonData["history"][$index11]["combinedTo"]["contact"]["firstName"] = $model->history[$index11]->combinedTo->contact->firstName;
}
if (null !== $model->history[$index11]->combinedTo->contact->lastName) {
    $jsonData["history"][$index11]["combinedTo"]["contact"]["lastName"] = $model->history[$index11]->combinedTo->contact->lastName;
}
if (null !== $model->history[$index11]->combinedTo->contact->patronymic) {
    $jsonData["history"][$index11]["combinedTo"]["contact"]["patronymic"] = $model->history[$index11]->combinedTo->contact->patronymic;
}
if (null !== $model->history[$index11]->combinedTo->contact->sex) {
    $jsonData["history"][$index11]["combinedTo"]["contact"]["sex"] = $model->history[$index11]->combinedTo->contact->sex;
}
if (null !== $model->history[$index11]->combinedTo->contact->presumableSex) {
    $jsonData["history"][$index11]["combinedTo"]["contact"]["presumableSex"] = $model->history[$index11]->combinedTo->contact->presumableSex;
}
if (null !== $model->history[$index11]->combinedTo->contact->email) {
    $jsonData["history"][$index11]["combinedTo"]["contact"]["email"] = $model->history[$index11]->combinedTo->contact->email;
}
if (null !== $model->history[$index11]->combinedTo->contact->emailMarketingUnsubscribedAt) {
    $jsonData["history"][$index11]["combinedTo"]["contact"]["emailMarketingUnsubscribedAt"] = $model->history[$index11]->combinedTo->contact->emailMarketingUnsubscribedAt->format('Y-m-d H:i:s');;
}
if (null !== $model->history[$index11]->combinedTo->contact->phones) {
    $jsonData["history"][$index11]["combinedTo"]["contact"]["phones"] = [];
foreach (array_keys($model->history[$index11]->combinedTo->contact->phones) as $index56) {
    $jsonData["history"][$index11]["combinedTo"]["contact"]["phones"][$index56] = [];
if (null !== $model->history[$index11]->combinedTo->contact->phones[$index56]->number) {
    $jsonData["history"][$index11]["combinedTo"]["contact"]["phones"][$index56]["number"] = $model->history[$index11]->combinedTo->contact->phones[$index56]->number;
}

if (0 === \count($jsonData["history"][$index11]["combinedTo"]["contact"]["phones"][$index56])) {
    $jsonData["history"][$index11]["combinedTo"]["contact"]["phones"][$index56] = $emptyObject;
}

}

}
if (null !== $model->history[$index11]->combinedTo->contact->birthday) {
    $jsonData["history"][$index11]["combinedTo"]["contact"]["birthday"] = $model->history[$index11]->combinedTo->contact->birthday->format('Y-m-d H:i:s');;
}
if (null !== $model->history[$index11]->combinedTo->contact->source) {
    $jsonData["history"][$index11]["combinedTo"]["contact"]["source"] = [];
if (null !== $model->history[$index11]->combinedTo->contact->source->source) {
    $jsonData["history"][$index11]["combinedTo"]["contact"]["source"]["source"] = $model->history[$index11]->combinedTo->contact->source->source;
}
if (null !== $model->history[$index11]->combinedTo->contact->source->medium) {
    $jsonData["history"][$index11]["combinedTo"]["contact"]["source"]["medium"] = $model->history[$index11]->combinedTo->contact->source->medium;
}
if (null !== $model->history[$index11]->combinedTo->contact->source->campaign) {
    $jsonData["history"][$index11]["combinedTo"]["contact"]["source"]["campaign"] = $model->history[$index11]->combinedTo->contact->source->campaign;
}
if (null !== $model->history[$index11]->combinedTo->contact->source->keyword) {
    $jsonData["history"][$index11]["combinedTo"]["contact"]["source"]["keyword"] = $model->history[$index11]->combinedTo->contact->source->keyword;
}
if (null !== $model->history[$index11]->combinedTo->contact->source->content) {
    $jsonData["history"][$index11]["combinedTo"]["contact"]["source"]["content"] = $model->history[$index11]->combinedTo->contact->source->content;
}

if (0 === \count($jsonData["history"][$index11]["combinedTo"]["contact"]["source"])) {
    $jsonData["history"][$index11]["combinedTo"]["contact"]["source"] = $emptyObject;
}

}
if (null !== $model->history[$index11]->combinedTo->contact->photoUrl) {
    $jsonData["history"][$index11]["combinedTo"]["contact"]["photoUrl"] = $model->history[$index11]->combinedTo->contact->photoUrl;
}
if (null !== $model->history[$index11]->combinedTo->contact->mgCustomerId) {
    $jsonData["history"][$index11]["combinedTo"]["contact"]["mgCustomerId"] = $model->history[$index11]->combinedTo->contact->mgCustomerId;
}
if (null !== $model->history[$index11]->combinedTo->contact->subscribed) {
    $jsonData["history"][$index11]["combinedTo"]["contact"]["subscribed"] = $model->history[$index11]->combinedTo->contact->subscribed;
}

if (0 === \count($jsonData["history"][$index11]["combinedTo"]["contact"])) {
    $jsonData["history"][$index11]["combinedTo"]["contact"] = $emptyObject;
}

}
if (null !== $model->history[$index11]->combinedTo->company) {
    $jsonData["history"][$index11]["combinedTo"]["company"] = [];
if (null !== $model->history[$index11]->combinedTo->company->id) {
    $jsonData["history"][$index11]["combinedTo"]["company"]["id"] = $model->history[$index11]->combinedTo->company->id;
}
if (null !== $model->history[$index11]->combinedTo->company->isMain) {
    $jsonData["history"][$index11]["combinedTo"]["company"]["isMain"] = $model->history[$index11]->combinedTo->company->isMain;
}
if (null !== $model->history[$index11]->combinedTo->company->externalId) {
    $jsonData["history"][$index11]["combinedTo"]["company"]["externalId"] = $model->history[$index11]->combinedTo->company->externalId;
}
if (null !== $model->history[$index11]->combinedTo->company->active) {
    $jsonData["history"][$index11]["combinedTo"]["company"]["active"] = $model->history[$index11]->combinedTo->company->active;
}
if (null !== $model->history[$index11]->combinedTo->company->name) {
    $jsonData["history"][$index11]["combinedTo"]["company"]["name"] = $model->history[$index11]->combinedTo->company->name;
}
if (null !== $model->history[$index11]->combinedTo->company->brand) {
    $jsonData["history"][$index11]["combinedTo"]["company"]["brand"] = $model->history[$index11]->combinedTo->company->brand;
}
if (null !== $model->history[$index11]->combinedTo->company->site) {
    $jsonData["history"][$index11]["combinedTo"]["company"]["site"] = $model->history[$index11]->combinedTo->company->site;
}
if (null !== $model->history[$index11]->combinedTo->company->createdAt) {
    $jsonData["history"][$index11]["combinedTo"]["company"]["createdAt"] = $model->history[$index11]->combinedTo->company->createdAt->format('Y-m-d H:i:s');;
}
if (null !== $model->history[$index11]->combinedTo->company->customer) {
    $jsonData["history"][$index11]["combinedTo"]["company"]["customer"] = [];
if (null !== $model->history[$index11]->combinedTo->company->customer->site) {
    $jsonData["history"][$index11]["combinedTo"]["company"]["customer"]["site"] = $model->history[$index11]->combinedTo->company->customer->site;
}
if (null !== $model->history[$index11]->combinedTo->company->customer->id) {
    $jsonData["history"][$index11]["combinedTo"]["company"]["customer"]["id"] = $model->history[$index11]->combinedTo->company->customer->id;
}
if (null !== $model->history[$index11]->combinedTo->company->customer->externalId) {
    $jsonData["history"][$index11]["combinedTo"]["company"]["customer"]["externalId"] = $model->history[$index11]->combinedTo->company->customer->externalId;
}
if (null !== $model->history[$index11]->combinedTo->company->customer->type) {
    $jsonData["history"][$index11]["combinedTo"]["company"]["customer"]["type"] = $model->history[$index11]->combinedTo->company->customer->type;
}

if (0 === \count($jsonData["history"][$index11]["combinedTo"]["company"]["customer"])) {
    $jsonData["history"][$index11]["combinedTo"]["company"]["customer"] = $emptyObject;
}

}
if (null !== $model->history[$index11]->combinedTo->company->contragent) {
    $jsonData["history"][$index11]["combinedTo"]["company"]["contragent"] = [];
if (null !== $model->history[$index11]->combinedTo->company->contragent->contragentType) {
    $jsonData["history"][$index11]["combinedTo"]["company"]["contragent"]["contragentType"] = $model->history[$index11]->combinedTo->company->contragent->contragentType;
}
if (null !== $model->history[$index11]->combinedTo->company->contragent->legalName) {
    $jsonData["history"][$index11]["combinedTo"]["company"]["contragent"]["legalName"] = $model->history[$index11]->combinedTo->company->contragent->legalName;
}
if (null !== $model->history[$index11]->combinedTo->company->contragent->legalAddress) {
    $jsonData["history"][$index11]["combinedTo"]["company"]["contragent"]["legalAddress"] = $model->history[$index11]->combinedTo->company->contragent->legalAddress;
}
if (null !== $model->history[$index11]->combinedTo->company->contragent->INN) {
    $jsonData["history"][$index11]["combinedTo"]["company"]["contragent"]["INN"] = $model->history[$index11]->combinedTo->company->contragent->INN;
}
if (null !== $model->history[$index11]->combinedTo->company->contragent->OKPO) {
    $jsonData["history"][$index11]["combinedTo"]["company"]["contragent"]["OKPO"] = $model->history[$index11]->combinedTo->company->contragent->OKPO;
}
if (null !== $model->history[$index11]->combinedTo->company->contragent->KPP) {
    $jsonData["history"][$index11]["combinedTo"]["company"]["contragent"]["KPP"] = $model->history[$index11]->combinedTo->company->contragent->KPP;
}
if (null !== $model->history[$index11]->combinedTo->company->contragent->OGRN) {
    $jsonData["history"][$index11]["combinedTo"]["company"]["contragent"]["OGRN"] = $model->history[$index11]->combinedTo->company->contragent->OGRN;
}
if (null !== $model->history[$index11]->combinedTo->company->contragent->OGRNIP) {
    $jsonData["history"][$index11]["combinedTo"]["company"]["contragent"]["OGRNIP"] = $model->history[$index11]->combinedTo->company->contragent->OGRNIP;
}
if (null !== $model->history[$index11]->combinedTo->company->contragent->certificateNumber) {
    $jsonData["history"][$index11]["combinedTo"]["company"]["contragent"]["certificateNumber"] = $model->history[$index11]->combinedTo->company->contragent->certificateNumber;
}
if (null !== $model->history[$index11]->combinedTo->company->contragent->certificateDate) {
    $jsonData["history"][$index11]["combinedTo"]["company"]["contragent"]["certificateDate"] = $model->history[$index11]->combinedTo->company->contragent->certificateDate->format('Y-m-d H:i:s');;
}
if (null !== $model->history[$index11]->combinedTo->company->contragent->BIK) {
    $jsonData["history"][$index11]["combinedTo"]["company"]["contragent"]["BIK"] = $model->history[$index11]->combinedTo->company->contragent->BIK;
}
if (null !== $model->history[$index11]->combinedTo->company->contragent->bank) {
    $jsonData["history"][$index11]["combinedTo"]["company"]["contragent"]["bank"] = $model->history[$index11]->combinedTo->company->contragent->bank;
}
if (null !== $model->history[$index11]->combinedTo->company->contragent->bankAddress) {
    $jsonData["history"][$index11]["combinedTo"]["company"]["contragent"]["bankAddress"] = $model->history[$index11]->combinedTo->company->contragent->bankAddress;
}
if (null !== $model->history[$index11]->combinedTo->company->contragent->corrAccount) {
    $jsonData["history"][$index11]["combinedTo"]["company"]["contragent"]["corrAccount"] = $model->history[$index11]->combinedTo->company->contragent->corrAccount;
}
if (null !== $model->history[$index11]->combinedTo->company->contragent->bankAccount) {
    $jsonData["history"][$index11]["combinedTo"]["company"]["contragent"]["bankAccount"] = $model->history[$index11]->combinedTo->company->contragent->bankAccount;
}

if (0 === \count($jsonData["history"][$index11]["combinedTo"]["company"]["contragent"])) {
    $jsonData["history"][$index11]["combinedTo"]["company"]["contragent"] = $emptyObject;
}

}
if (null !== $model->history[$index11]->combinedTo->company->address) {
    $jsonData["history"][$index11]["combinedTo"]["company"]["address"] = [];
if (null !== $model->history[$index11]->combinedTo->company->address->id) {
    $jsonData["history"][$index11]["combinedTo"]["company"]["address"]["id"] = $model->history[$index11]->combinedTo->company->address->id;
}
if (null !== $model->history[$index11]->combinedTo->company->address->name) {
    $jsonData["history"][$index11]["combinedTo"]["company"]["address"]["name"] = $model->history[$index11]->combinedTo->company->address->name;
}
if (null !== $model->history[$index11]->combinedTo->company->address->isMain) {
    $jsonData["history"][$index11]["combinedTo"]["company"]["address"]["isMain"] = $model->history[$index11]->combinedTo->company->address->isMain;
}
if (null !== $model->history[$index11]->combinedTo->company->address->index) {
    $jsonData["history"][$index11]["combinedTo"]["company"]["address"]["index"] = $model->history[$index11]->combinedTo->company->address->index;
}
if (null !== $model->history[$index11]->combinedTo->company->address->countryIso) {
    $jsonData["history"][$index11]["combinedTo"]["company"]["address"]["countryIso"] = $model->history[$index11]->combinedTo->company->address->countryIso;
}
if (null !== $model->history[$index11]->combinedTo->company->address->region) {
    $jsonData["history"][$index11]["combinedTo"]["company"]["address"]["region"] = $model->history[$index11]->combinedTo->company->address->region;
}
if (null !== $model->history[$index11]->combinedTo->company->address->regionId) {
    $jsonData["history"][$index11]["combinedTo"]["company"]["address"]["regionId"] = $model->history[$index11]->combinedTo->company->address->regionId;
}
if (null !== $model->history[$index11]->combinedTo->company->address->city) {
    $jsonData["history"][$index11]["combinedTo"]["company"]["address"]["city"] = $model->history[$index11]->combinedTo->company->address->city;
}
if (null !== $model->history[$index11]->combinedTo->company->address->cityId) {
    $jsonData["history"][$index11]["combinedTo"]["company"]["address"]["cityId"] = $model->history[$index11]->combinedTo->company->address->cityId;
}
if (null !== $model->history[$index11]->combinedTo->company->address->cityType) {
    $jsonData["history"][$index11]["combinedTo"]["company"]["address"]["cityType"] = $model->history[$index11]->combinedTo->company->address->cityType;
}
if (null !== $model->history[$index11]->combinedTo->company->address->street) {
    $jsonData["history"][$index11]["combinedTo"]["company"]["address"]["street"] = $model->history[$index11]->combinedTo->company->address->street;
}
if (null !== $model->history[$index11]->combinedTo->company->address->streetId) {
    $jsonData["history"][$index11]["combinedTo"]["company"]["address"]["streetId"] = $model->history[$index11]->combinedTo->company->address->streetId;
}
if (null !== $model->history[$index11]->combinedTo->company->address->streetType) {
    $jsonData["history"][$index11]["combinedTo"]["company"]["address"]["streetType"] = $model->history[$index11]->combinedTo->company->address->streetType;
}
if (null !== $model->history[$index11]->combinedTo->company->address->building) {
    $jsonData["history"][$index11]["combinedTo"]["company"]["address"]["building"] = $model->history[$index11]->combinedTo->company->address->building;
}
if (null !== $model->history[$index11]->combinedTo->company->address->flat) {
    $jsonData["history"][$index11]["combinedTo"]["company"]["address"]["flat"] = $model->history[$index11]->combinedTo->company->address->flat;
}
if (null !== $model->history[$index11]->combinedTo->company->address->floor) {
    $jsonData["history"][$index11]["combinedTo"]["company"]["address"]["floor"] = $model->history[$index11]->combinedTo->company->address->floor;
}
if (null !== $model->history[$index11]->combinedTo->company->address->block) {
    $jsonData["history"][$index11]["combinedTo"]["company"]["address"]["block"] = $model->history[$index11]->combinedTo->company->address->block;
}
if (null !== $model->history[$index11]->combinedTo->company->address->house) {
    $jsonData["history"][$index11]["combinedTo"]["company"]["address"]["house"] = $model->history[$index11]->combinedTo->company->address->house;
}
if (null !== $model->history[$index11]->combinedTo->company->address->housing) {
    $jsonData["history"][$index11]["combinedTo"]["company"]["address"]["housing"] = $model->history[$index11]->combinedTo->company->address->housing;
}
if (null !== $model->history[$index11]->combinedTo->company->address->metro) {
    $jsonData["history"][$index11]["combinedTo"]["company"]["address"]["metro"] = $model->history[$index11]->combinedTo->company->address->metro;
}
if (null !== $model->history[$index11]->combinedTo->company->address->notes) {
    $jsonData["history"][$index11]["combinedTo"]["company"]["address"]["notes"] = $model->history[$index11]->combinedTo->company->address->notes;
}
if (null !== $model->history[$index11]->combinedTo->company->address->text) {
    $jsonData["history"][$index11]["combinedTo"]["company"]["address"]["text"] = $model->history[$index11]->combinedTo->company->address->text;
}
if (null !== $model->history[$index11]->combinedTo->company->address->externalId) {
    $jsonData["history"][$index11]["combinedTo"]["company"]["address"]["externalId"] = $model->history[$index11]->combinedTo->company->address->externalId;
}

if (0 === \count($jsonData["history"][$index11]["combinedTo"]["company"]["address"])) {
    $jsonData["history"][$index11]["combinedTo"]["company"]["address"] = $emptyObject;
}

}
if (null !== $model->history[$index11]->combinedTo->company->customFields) {
    $jsonData["history"][$index11]["combinedTo"]["company"]["customFields"] = [];
foreach (array_keys($model->history[$index11]->combinedTo->company->customFields) as $index62) {
    $jsonData["history"][$index11]["combinedTo"]["company"]["customFields"] = $model->history[$index11]->combinedTo->company->customFields;
}

}
if (null !== $model->history[$index11]->combinedTo->company->marginSumm) {
    $jsonData["history"][$index11]["combinedTo"]["company"]["marginSumm"] = $model->history[$index11]->combinedTo->company->marginSumm;
}
if (null !== $model->history[$index11]->combinedTo->company->totalSumm) {
    $jsonData["history"][$index11]["combinedTo"]["company"]["totalSumm"] = $model->history[$index11]->combinedTo->company->totalSumm;
}
if (null !== $model->history[$index11]->combinedTo->company->averageSumm) {
    $jsonData["history"][$index11]["combinedTo"]["company"]["averageSumm"] = $model->history[$index11]->combinedTo->company->averageSumm;
}
if (null !== $model->history[$index11]->combinedTo->company->ordersCount) {
    $jsonData["history"][$index11]["combinedTo"]["company"]["ordersCount"] = $model->history[$index11]->combinedTo->company->ordersCount;
}
if (null !== $model->history[$index11]->combinedTo->company->costSumm) {
    $jsonData["history"][$index11]["combinedTo"]["company"]["costSumm"] = $model->history[$index11]->combinedTo->company->costSumm;
}

if (0 === \count($jsonData["history"][$index11]["combinedTo"]["company"])) {
    $jsonData["history"][$index11]["combinedTo"]["company"] = $emptyObject;
}

}
if (null !== $model->history[$index11]->combinedTo->contragent) {
    $jsonData["history"][$index11]["combinedTo"]["contragent"] = [];
if (null !== $model->history[$index11]->combinedTo->contragent->contragentType) {
    $jsonData["history"][$index11]["combinedTo"]["contragent"]["contragentType"] = $model->history[$index11]->combinedTo->contragent->contragentType;
}
if (null !== $model->history[$index11]->combinedTo->contragent->legalName) {
    $jsonData["history"][$index11]["combinedTo"]["contragent"]["legalName"] = $model->history[$index11]->combinedTo->contragent->legalName;
}
if (null !== $model->history[$index11]->combinedTo->contragent->legalAddress) {
    $jsonData["history"][$index11]["combinedTo"]["contragent"]["legalAddress"] = $model->history[$index11]->combinedTo->contragent->legalAddress;
}
if (null !== $model->history[$index11]->combinedTo->contragent->INN) {
    $jsonData["history"][$index11]["combinedTo"]["contragent"]["INN"] = $model->history[$index11]->combinedTo->contragent->INN;
}
if (null !== $model->history[$index11]->combinedTo->contragent->OKPO) {
    $jsonData["history"][$index11]["combinedTo"]["contragent"]["OKPO"] = $model->history[$index11]->combinedTo->contragent->OKPO;
}
if (null !== $model->history[$index11]->combinedTo->contragent->KPP) {
    $jsonData["history"][$index11]["combinedTo"]["contragent"]["KPP"] = $model->history[$index11]->combinedTo->contragent->KPP;
}
if (null !== $model->history[$index11]->combinedTo->contragent->OGRN) {
    $jsonData["history"][$index11]["combinedTo"]["contragent"]["OGRN"] = $model->history[$index11]->combinedTo->contragent->OGRN;
}
if (null !== $model->history[$index11]->combinedTo->contragent->OGRNIP) {
    $jsonData["history"][$index11]["combinedTo"]["contragent"]["OGRNIP"] = $model->history[$index11]->combinedTo->contragent->OGRNIP;
}
if (null !== $model->history[$index11]->combinedTo->contragent->certificateNumber) {
    $jsonData["history"][$index11]["combinedTo"]["contragent"]["certificateNumber"] = $model->history[$index11]->combinedTo->contragent->certificateNumber;
}
if (null !== $model->history[$index11]->combinedTo->contragent->certificateDate) {
    $jsonData["history"][$index11]["combinedTo"]["contragent"]["certificateDate"] = $model->history[$index11]->combinedTo->contragent->certificateDate->format('Y-m-d H:i:s');;
}
if (null !== $model->history[$index11]->combinedTo->contragent->BIK) {
    $jsonData["history"][$index11]["combinedTo"]["contragent"]["BIK"] = $model->history[$index11]->combinedTo->contragent->BIK;
}
if (null !== $model->history[$index11]->combinedTo->contragent->bank) {
    $jsonData["history"][$index11]["combinedTo"]["contragent"]["bank"] = $model->history[$index11]->combinedTo->contragent->bank;
}
if (null !== $model->history[$index11]->combinedTo->contragent->bankAddress) {
    $jsonData["history"][$index11]["combinedTo"]["contragent"]["bankAddress"] = $model->history[$index11]->combinedTo->contragent->bankAddress;
}
if (null !== $model->history[$index11]->combinedTo->contragent->corrAccount) {
    $jsonData["history"][$index11]["combinedTo"]["contragent"]["corrAccount"] = $model->history[$index11]->combinedTo->contragent->corrAccount;
}
if (null !== $model->history[$index11]->combinedTo->contragent->bankAccount) {
    $jsonData["history"][$index11]["combinedTo"]["contragent"]["bankAccount"] = $model->history[$index11]->combinedTo->contragent->bankAccount;
}

if (0 === \count($jsonData["history"][$index11]["combinedTo"]["contragent"])) {
    $jsonData["history"][$index11]["combinedTo"]["contragent"] = $emptyObject;
}

}
if (null !== $model->history[$index11]->combinedTo->delivery) {
    $jsonData["history"][$index11]["combinedTo"]["delivery"] = [];
if (null !== $model->history[$index11]->combinedTo->delivery->code) {
    $jsonData["history"][$index11]["combinedTo"]["delivery"]["code"] = $model->history[$index11]->combinedTo->delivery->code;
}
if (null !== $model->history[$index11]->combinedTo->delivery->integrationCode) {
    $jsonData["history"][$index11]["combinedTo"]["delivery"]["integrationCode"] = $model->history[$index11]->combinedTo->delivery->integrationCode;
}
if (null !== $model->history[$index11]->combinedTo->delivery->data) {
    $jsonData["history"][$index11]["combinedTo"]["delivery"]["data"] = [];
if (null !== $model->history[$index11]->combinedTo->delivery->data->externalId) {
    $jsonData["history"][$index11]["combinedTo"]["delivery"]["data"]["externalId"] = $model->history[$index11]->combinedTo->delivery->data->externalId;
}
if (null !== $model->history[$index11]->combinedTo->delivery->data->trackNumber) {
    $jsonData["history"][$index11]["combinedTo"]["delivery"]["data"]["trackNumber"] = $model->history[$index11]->combinedTo->delivery->data->trackNumber;
}
if (null !== $model->history[$index11]->combinedTo->delivery->data->status) {
    $jsonData["history"][$index11]["combinedTo"]["delivery"]["data"]["status"] = $model->history[$index11]->combinedTo->delivery->data->status;
}
if (null !== $model->history[$index11]->combinedTo->delivery->data->locked) {
    $jsonData["history"][$index11]["combinedTo"]["delivery"]["data"]["locked"] = $model->history[$index11]->combinedTo->delivery->data->locked;
}
if (null !== $model->history[$index11]->combinedTo->delivery->data->pickuppointAddress) {
    $jsonData["history"][$index11]["combinedTo"]["delivery"]["data"]["pickuppointAddress"] = $model->history[$index11]->combinedTo->delivery->data->pickuppointAddress;
}
if (null !== $model->history[$index11]->combinedTo->delivery->data->days) {
    $jsonData["history"][$index11]["combinedTo"]["delivery"]["data"]["days"] = $model->history[$index11]->combinedTo->delivery->data->days;
}
if (null !== $model->history[$index11]->combinedTo->delivery->data->statusText) {
    $jsonData["history"][$index11]["combinedTo"]["delivery"]["data"]["statusText"] = $model->history[$index11]->combinedTo->delivery->data->statusText;
}
if (null !== $model->history[$index11]->combinedTo->delivery->data->statusDate) {
    $jsonData["history"][$index11]["combinedTo"]["delivery"]["data"]["statusDate"] = $model->history[$index11]->combinedTo->delivery->data->statusDate->format('Y-m-d');;
}
if (null !== $model->history[$index11]->combinedTo->delivery->data->tariff) {
    $jsonData["history"][$index11]["combinedTo"]["delivery"]["data"]["tariff"] = $model->history[$index11]->combinedTo->delivery->data->tariff;
}
if (null !== $model->history[$index11]->combinedTo->delivery->data->tariffName) {
    $jsonData["history"][$index11]["combinedTo"]["delivery"]["data"]["tariffName"] = $model->history[$index11]->combinedTo->delivery->data->tariffName;
}
if (null !== $model->history[$index11]->combinedTo->delivery->data->pickuppointId) {
    $jsonData["history"][$index11]["combinedTo"]["delivery"]["data"]["pickuppointId"] = $model->history[$index11]->combinedTo->delivery->data->pickuppointId;
}
if (null !== $model->history[$index11]->combinedTo->delivery->data->pickuppointSchedule) {
    $jsonData["history"][$index11]["combinedTo"]["delivery"]["data"]["pickuppointSchedule"] = $model->history[$index11]->combinedTo->delivery->data->pickuppointSchedule;
}
if (null !== $model->history[$index11]->combinedTo->delivery->data->pickuppointPhone) {
    $jsonData["history"][$index11]["combinedTo"]["delivery"]["data"]["pickuppointPhone"] = $model->history[$index11]->combinedTo->delivery->data->pickuppointPhone;
}
if (null !== $model->history[$index11]->combinedTo->delivery->data->payerType) {
    $jsonData["history"][$index11]["combinedTo"]["delivery"]["data"]["payerType"] = $model->history[$index11]->combinedTo->delivery->data->payerType;
}
if (null !== $model->history[$index11]->combinedTo->delivery->data->statusComment) {
    $jsonData["history"][$index11]["combinedTo"]["delivery"]["data"]["statusComment"] = $model->history[$index11]->combinedTo->delivery->data->statusComment;
}
if (null !== $model->history[$index11]->combinedTo->delivery->data->cost) {
    $jsonData["history"][$index11]["combinedTo"]["delivery"]["data"]["cost"] = $model->history[$index11]->combinedTo->delivery->data->cost;
}
if (null !== $model->history[$index11]->combinedTo->delivery->data->minTerm) {
    $jsonData["history"][$index11]["combinedTo"]["delivery"]["data"]["minTerm"] = $model->history[$index11]->combinedTo->delivery->data->minTerm;
}
if (null !== $model->history[$index11]->combinedTo->delivery->data->maxTerm) {
    $jsonData["history"][$index11]["combinedTo"]["delivery"]["data"]["maxTerm"] = $model->history[$index11]->combinedTo->delivery->data->maxTerm;
}
if (null !== $model->history[$index11]->combinedTo->delivery->data->shipmentpointId) {
    $jsonData["history"][$index11]["combinedTo"]["delivery"]["data"]["shipmentpointId"] = $model->history[$index11]->combinedTo->delivery->data->shipmentpointId;
}
if (null !== $model->history[$index11]->combinedTo->delivery->data->shipmentpointName) {
    $jsonData["history"][$index11]["combinedTo"]["delivery"]["data"]["shipmentpointName"] = $model->history[$index11]->combinedTo->delivery->data->shipmentpointName;
}
if (null !== $model->history[$index11]->combinedTo->delivery->data->shipmentpointAddress) {
    $jsonData["history"][$index11]["combinedTo"]["delivery"]["data"]["shipmentpointAddress"] = $model->history[$index11]->combinedTo->delivery->data->shipmentpointAddress;
}
if (null !== $model->history[$index11]->combinedTo->delivery->data->shipmentpointSchedule) {
    $jsonData["history"][$index11]["combinedTo"]["delivery"]["data"]["shipmentpointSchedule"] = $model->history[$index11]->combinedTo->delivery->data->shipmentpointSchedule;
}
if (null !== $model->history[$index11]->combinedTo->delivery->data->shipmentpointPhone) {
    $jsonData["history"][$index11]["combinedTo"]["delivery"]["data"]["shipmentpointPhone"] = $model->history[$index11]->combinedTo->delivery->data->shipmentpointPhone;
}
if (null !== $model->history[$index11]->combinedTo->delivery->data->shipmentpointCoordinateLatitude) {
    $jsonData["history"][$index11]["combinedTo"]["delivery"]["data"]["shipmentpointCoordinateLatitude"] = $model->history[$index11]->combinedTo->delivery->data->shipmentpointCoordinateLatitude;
}
if (null !== $model->history[$index11]->combinedTo->delivery->data->shipmentpointCoordinateLongitude) {
    $jsonData["history"][$index11]["combinedTo"]["delivery"]["data"]["shipmentpointCoordinateLongitude"] = $model->history[$index11]->combinedTo->delivery->data->shipmentpointCoordinateLongitude;
}
if (null !== $model->history[$index11]->combinedTo->delivery->data->pickuppointName) {
    $jsonData["history"][$index11]["combinedTo"]["delivery"]["data"]["pickuppointName"] = $model->history[$index11]->combinedTo->delivery->data->pickuppointName;
}
if (null !== $model->history[$index11]->combinedTo->delivery->data->pickuppointCoordinateLatitude) {
    $jsonData["history"][$index11]["combinedTo"]["delivery"]["data"]["pickuppointCoordinateLatitude"] = $model->history[$index11]->combinedTo->delivery->data->pickuppointCoordinateLatitude;
}
if (null !== $model->history[$index11]->combinedTo->delivery->data->pickuppointCoordinateLongitude) {
    $jsonData["history"][$index11]["combinedTo"]["delivery"]["data"]["pickuppointCoordinateLongitude"] = $model->history[$index11]->combinedTo->delivery->data->pickuppointCoordinateLongitude;
}
if (null !== $model->history[$index11]->combinedTo->delivery->data->extraData) {
    $jsonData["history"][$index11]["combinedTo"]["delivery"]["data"]["extraData"] = [];
foreach (array_keys($model->history[$index11]->combinedTo->delivery->data->extraData) as $index68) {
    $jsonData["history"][$index11]["combinedTo"]["delivery"]["data"]["extraData"] = $model->history[$index11]->combinedTo->delivery->data->extraData;
}

}
if (null !== $model->history[$index11]->combinedTo->delivery->data->packages) {
    $jsonData["history"][$index11]["combinedTo"]["delivery"]["data"]["packages"] = [];
foreach (array_keys($model->history[$index11]->combinedTo->delivery->data->packages) as $index67) {
    $jsonData["history"][$index11]["combinedTo"]["delivery"]["data"]["packages"][$index67] = [];
if (null !== $model->history[$index11]->combinedTo->delivery->data->packages[$index67]->packageId) {
    $jsonData["history"][$index11]["combinedTo"]["delivery"]["data"]["packages"][$index67]["packageId"] = $model->history[$index11]->combinedTo->delivery->data->packages[$index67]->packageId;
}
if (null !== $model->history[$index11]->combinedTo->delivery->data->packages[$index67]->weight) {
    $jsonData["history"][$index11]["combinedTo"]["delivery"]["data"]["packages"][$index67]["weight"] = $model->history[$index11]->combinedTo->delivery->data->packages[$index67]->weight;
}
if (null !== $model->history[$index11]->combinedTo->delivery->data->packages[$index67]->length) {
    $jsonData["history"][$index11]["combinedTo"]["delivery"]["data"]["packages"][$index67]["length"] = $model->history[$index11]->combinedTo->delivery->data->packages[$index67]->length;
}
if (null !== $model->history[$index11]->combinedTo->delivery->data->packages[$index67]->width) {
    $jsonData["history"][$index11]["combinedTo"]["delivery"]["data"]["packages"][$index67]["width"] = $model->history[$index11]->combinedTo->delivery->data->packages[$index67]->width;
}
if (null !== $model->history[$index11]->combinedTo->delivery->data->packages[$index67]->height) {
    $jsonData["history"][$index11]["combinedTo"]["delivery"]["data"]["packages"][$index67]["height"] = $model->history[$index11]->combinedTo->delivery->data->packages[$index67]->height;
}
if (null !== $model->history[$index11]->combinedTo->delivery->data->packages[$index67]->items) {
    $jsonData["history"][$index11]["combinedTo"]["delivery"]["data"]["packages"][$index67]["items"] = [];
foreach (array_keys($model->history[$index11]->combinedTo->delivery->data->packages[$index67]->items) as $index86) {
    $jsonData["history"][$index11]["combinedTo"]["delivery"]["data"]["packages"][$index67]["items"][$index86] = [];
if (null !== $model->history[$index11]->combinedTo->delivery->data->packages[$index67]->items[$index86]->orderProduct) {
    $jsonData["history"][$index11]["combinedTo"]["delivery"]["data"]["packages"][$index67]["items"][$index86]["orderProduct"] = [];
if (null !== $model->history[$index11]->combinedTo->delivery->data->packages[$index67]->items[$index86]->orderProduct->id) {
    $jsonData["history"][$index11]["combinedTo"]["delivery"]["data"]["packages"][$index67]["items"][$index86]["orderProduct"]["id"] = $model->history[$index11]->combinedTo->delivery->data->packages[$index67]->items[$index86]->orderProduct->id;
}
if (null !== $model->history[$index11]->combinedTo->delivery->data->packages[$index67]->items[$index86]->orderProduct->externalId) {
    $jsonData["history"][$index11]["combinedTo"]["delivery"]["data"]["packages"][$index67]["items"][$index86]["orderProduct"]["externalId"] = $model->history[$index11]->combinedTo->delivery->data->packages[$index67]->items[$index86]->orderProduct->externalId;
}
if (null !== $model->history[$index11]->combinedTo->delivery->data->packages[$index67]->items[$index86]->orderProduct->externalIds) {
    $jsonData["history"][$index11]["combinedTo"]["delivery"]["data"]["packages"][$index67]["items"][$index86]["orderProduct"]["externalIds"] = [];
foreach (array_keys($model->history[$index11]->combinedTo->delivery->data->packages[$index67]->items[$index86]->orderProduct->externalIds) as $index127) {
    $jsonData["history"][$index11]["combinedTo"]["delivery"]["data"]["packages"][$index67]["items"][$index86]["orderProduct"]["externalIds"][$index127] = [];
if (null !== $model->history[$index11]->combinedTo->delivery->data->packages[$index67]->items[$index86]->orderProduct->externalIds[$index127]->code) {
    $jsonData["history"][$index11]["combinedTo"]["delivery"]["data"]["packages"][$index67]["items"][$index86]["orderProduct"]["externalIds"][$index127]["code"] = $model->history[$index11]->combinedTo->delivery->data->packages[$index67]->items[$index86]->orderProduct->externalIds[$index127]->code;
}
if (null !== $model->history[$index11]->combinedTo->delivery->data->packages[$index67]->items[$index86]->orderProduct->externalIds[$index127]->value) {
    $jsonData["history"][$index11]["combinedTo"]["delivery"]["data"]["packages"][$index67]["items"][$index86]["orderProduct"]["externalIds"][$index127]["value"] = $model->history[$index11]->combinedTo->delivery->data->packages[$index67]->items[$index86]->orderProduct->externalIds[$index127]->value;
}

if (0 === \count($jsonData["history"][$index11]["combinedTo"]["delivery"]["data"]["packages"][$index67]["items"][$index86]["orderProduct"]["externalIds"][$index127])) {
    $jsonData["history"][$index11]["combinedTo"]["delivery"]["data"]["packages"][$index67]["items"][$index86]["orderProduct"]["externalIds"][$index127] = $emptyObject;
}

}

}

if (0 === \count($jsonData["history"][$index11]["combinedTo"]["delivery"]["data"]["packages"][$index67]["items"][$index86]["orderProduct"])) {
    $jsonData["history"][$index11]["combinedTo"]["delivery"]["data"]["packages"][$index67]["items"][$index86]["orderProduct"] = $emptyObject;
}

}
if (null !== $model->history[$index11]->combinedTo->delivery->data->packages[$index67]->items[$index86]->quantity) {
    $jsonData["history"][$index11]["combinedTo"]["delivery"]["data"]["packages"][$index67]["items"][$index86]["quantity"] = $model->history[$index11]->combinedTo->delivery->data->packages[$index67]->items[$index86]->quantity;
}

if (0 === \count($jsonData["history"][$index11]["combinedTo"]["delivery"]["data"]["packages"][$index67]["items"][$index86])) {
    $jsonData["history"][$index11]["combinedTo"]["delivery"]["data"]["packages"][$index67]["items"][$index86] = $emptyObject;
}

}

}

if (0 === \count($jsonData["history"][$index11]["combinedTo"]["delivery"]["data"]["packages"][$index67])) {
    $jsonData["history"][$index11]["combinedTo"]["delivery"]["data"]["packages"][$index67] = $emptyObject;
}

}

}
if (null !== $model->history[$index11]->combinedTo->delivery->data->returnExternalId) {
    $jsonData["history"][$index11]["combinedTo"]["delivery"]["data"]["returnExternalId"] = $model->history[$index11]->combinedTo->delivery->data->returnExternalId;
}
if (null !== $model->history[$index11]->combinedTo->delivery->data->deliveryName) {
    $jsonData["history"][$index11]["combinedTo"]["delivery"]["data"]["deliveryName"] = $model->history[$index11]->combinedTo->delivery->data->deliveryName;
}
if (null !== $model->history[$index11]->combinedTo->delivery->data->price) {
    $jsonData["history"][$index11]["combinedTo"]["delivery"]["data"]["price"] = $model->history[$index11]->combinedTo->delivery->data->price;
}
if (null !== $model->history[$index11]->combinedTo->delivery->data->insurancePrice) {
    $jsonData["history"][$index11]["combinedTo"]["delivery"]["data"]["insurancePrice"] = $model->history[$index11]->combinedTo->delivery->data->insurancePrice;
}
if (null !== $model->history[$index11]->combinedTo->delivery->data->tariffType) {
    $jsonData["history"][$index11]["combinedTo"]["delivery"]["data"]["tariffType"] = $model->history[$index11]->combinedTo->delivery->data->tariffType;
}
if (null !== $model->history[$index11]->combinedTo->delivery->data->receiverCity) {
    $jsonData["history"][$index11]["combinedTo"]["delivery"]["data"]["receiverCity"] = $model->history[$index11]->combinedTo->delivery->data->receiverCity;
}
if (null !== $model->history[$index11]->combinedTo->delivery->data->services) {
    $jsonData["history"][$index11]["combinedTo"]["delivery"]["data"]["services"] = [];
foreach (array_keys($model->history[$index11]->combinedTo->delivery->data->services) as $index67) {
    $jsonData["history"][$index11]["combinedTo"]["delivery"]["data"]["services"] = $model->history[$index11]->combinedTo->delivery->data->services;
}

}
if (null !== $model->history[$index11]->combinedTo->delivery->data->packageNumber) {
    $jsonData["history"][$index11]["combinedTo"]["delivery"]["data"]["packageNumber"] = $model->history[$index11]->combinedTo->delivery->data->packageNumber;
}
if (null !== $model->history[$index11]->combinedTo->delivery->data->comment) {
    $jsonData["history"][$index11]["combinedTo"]["delivery"]["data"]["comment"] = $model->history[$index11]->combinedTo->delivery->data->comment;
}
if (null !== $model->history[$index11]->combinedTo->delivery->data->deliveryCode) {
    $jsonData["history"][$index11]["combinedTo"]["delivery"]["data"]["deliveryCode"] = $model->history[$index11]->combinedTo->delivery->data->deliveryCode;
}
if (null !== $model->history[$index11]->combinedTo->delivery->data->notes) {
    $jsonData["history"][$index11]["combinedTo"]["delivery"]["data"]["notes"] = $model->history[$index11]->combinedTo->delivery->data->notes;
}
if (null !== $model->history[$index11]->combinedTo->delivery->data->id) {
    $jsonData["history"][$index11]["combinedTo"]["delivery"]["data"]["id"] = $model->history[$index11]->combinedTo->delivery->data->id;
}
if (null !== $model->history[$index11]->combinedTo->delivery->data->firstName) {
    $jsonData["history"][$index11]["combinedTo"]["delivery"]["data"]["firstName"] = $model->history[$index11]->combinedTo->delivery->data->firstName;
}
if (null !== $model->history[$index11]->combinedTo->delivery->data->lastName) {
    $jsonData["history"][$index11]["combinedTo"]["delivery"]["data"]["lastName"] = $model->history[$index11]->combinedTo->delivery->data->lastName;
}
if (null !== $model->history[$index11]->combinedTo->delivery->data->patronymic) {
    $jsonData["history"][$index11]["combinedTo"]["delivery"]["data"]["patronymic"] = $model->history[$index11]->combinedTo->delivery->data->patronymic;
}
if (null !== $model->history[$index11]->combinedTo->delivery->data->active) {
    $jsonData["history"][$index11]["combinedTo"]["delivery"]["data"]["active"] = $model->history[$index11]->combinedTo->delivery->data->active;
}
if (null !== $model->history[$index11]->combinedTo->delivery->data->email) {
    $jsonData["history"][$index11]["combinedTo"]["delivery"]["data"]["email"] = $model->history[$index11]->combinedTo->delivery->data->email;
}
if (null !== $model->history[$index11]->combinedTo->delivery->data->phone) {
    $jsonData["history"][$index11]["combinedTo"]["delivery"]["data"]["phone"] = [];
if (null !== $model->history[$index11]->combinedTo->delivery->data->phone->number) {
    $jsonData["history"][$index11]["combinedTo"]["delivery"]["data"]["phone"]["number"] = $model->history[$index11]->combinedTo->delivery->data->phone->number;
}

if (0 === \count($jsonData["history"][$index11]["combinedTo"]["delivery"]["data"]["phone"])) {
    $jsonData["history"][$index11]["combinedTo"]["delivery"]["data"]["phone"] = $emptyObject;
}

}
if (null !== $model->history[$index11]->combinedTo->delivery->data->description) {
    $jsonData["history"][$index11]["combinedTo"]["delivery"]["data"]["description"] = $model->history[$index11]->combinedTo->delivery->data->description;
}
if (null !== $model->history[$index11]->combinedTo->delivery->data->courierId) {
    $jsonData["history"][$index11]["combinedTo"]["delivery"]["data"]["courierId"] = $model->history[$index11]->combinedTo->delivery->data->courierId;
}
if (null !== $model->history[$index11]->combinedTo->delivery->data->serviceType) {
    $jsonData["history"][$index11]["combinedTo"]["delivery"]["data"]["serviceType"] = $model->history[$index11]->combinedTo->delivery->data->serviceType;
}
if (null !== $model->history[$index11]->combinedTo->delivery->data->pickuppoint) {
    $jsonData["history"][$index11]["combinedTo"]["delivery"]["data"]["pickuppoint"] = $model->history[$index11]->combinedTo->delivery->data->pickuppoint;
}
if (null !== $model->history[$index11]->combinedTo->delivery->data->receiverWarehouseTypeRef) {
    $jsonData["history"][$index11]["combinedTo"]["delivery"]["data"]["receiverWarehouseTypeRef"] = $model->history[$index11]->combinedTo->delivery->data->receiverWarehouseTypeRef;
}
if (null !== $model->history[$index11]->combinedTo->delivery->data->statusName) {
    $jsonData["history"][$index11]["combinedTo"]["delivery"]["data"]["statusName"] = $model->history[$index11]->combinedTo->delivery->data->statusName;
}
if (null !== $model->history[$index11]->combinedTo->delivery->data->receiverCityRef) {
    $jsonData["history"][$index11]["combinedTo"]["delivery"]["data"]["receiverCityRef"] = $model->history[$index11]->combinedTo->delivery->data->receiverCityRef;
}
if (null !== $model->history[$index11]->combinedTo->delivery->data->receiverStreet) {
    $jsonData["history"][$index11]["combinedTo"]["delivery"]["data"]["receiverStreet"] = $model->history[$index11]->combinedTo->delivery->data->receiverStreet;
}
if (null !== $model->history[$index11]->combinedTo->delivery->data->receiverStreetRef) {
    $jsonData["history"][$index11]["combinedTo"]["delivery"]["data"]["receiverStreetRef"] = $model->history[$index11]->combinedTo->delivery->data->receiverStreetRef;
}
if (null !== $model->history[$index11]->combinedTo->delivery->data->seatsAmount) {
    $jsonData["history"][$index11]["combinedTo"]["delivery"]["data"]["seatsAmount"] = $model->history[$index11]->combinedTo->delivery->data->seatsAmount;
}
if (null !== $model->history[$index11]->combinedTo->delivery->data->cargoType) {
    $jsonData["history"][$index11]["combinedTo"]["delivery"]["data"]["cargoType"] = $model->history[$index11]->combinedTo->delivery->data->cargoType;
}
if (null !== $model->history[$index11]->combinedTo->delivery->data->cargoDescription) {
    $jsonData["history"][$index11]["combinedTo"]["delivery"]["data"]["cargoDescription"] = $model->history[$index11]->combinedTo->delivery->data->cargoDescription;
}
if (null !== $model->history[$index11]->combinedTo->delivery->data->cashPayerType) {
    $jsonData["history"][$index11]["combinedTo"]["delivery"]["data"]["cashPayerType"] = $model->history[$index11]->combinedTo->delivery->data->cashPayerType;
}
if (null !== $model->history[$index11]->combinedTo->delivery->data->paymentForm) {
    $jsonData["history"][$index11]["combinedTo"]["delivery"]["data"]["paymentForm"] = $model->history[$index11]->combinedTo->delivery->data->paymentForm;
}
if (null !== $model->history[$index11]->combinedTo->delivery->data->ownershipForm) {
    $jsonData["history"][$index11]["combinedTo"]["delivery"]["data"]["ownershipForm"] = $model->history[$index11]->combinedTo->delivery->data->ownershipForm;
}
if (null !== $model->history[$index11]->combinedTo->delivery->data->accompanyingDocument) {
    $jsonData["history"][$index11]["combinedTo"]["delivery"]["data"]["accompanyingDocument"] = $model->history[$index11]->combinedTo->delivery->data->accompanyingDocument;
}
if (null !== $model->history[$index11]->combinedTo->delivery->data->preferredDeliveryDate) {
    $jsonData["history"][$index11]["combinedTo"]["delivery"]["data"]["preferredDeliveryDate"] = $model->history[$index11]->combinedTo->delivery->data->preferredDeliveryDate->format('Y-m-d H:i:s');;
}
if (null !== $model->history[$index11]->combinedTo->delivery->data->timeInterval) {
    $jsonData["history"][$index11]["combinedTo"]["delivery"]["data"]["timeInterval"] = $model->history[$index11]->combinedTo->delivery->data->timeInterval;
}
if (null !== $model->history[$index11]->combinedTo->delivery->data->saturdayDelivery) {
    $jsonData["history"][$index11]["combinedTo"]["delivery"]["data"]["saturdayDelivery"] = $model->history[$index11]->combinedTo->delivery->data->saturdayDelivery;
}
if (null !== $model->history[$index11]->combinedTo->delivery->data->deliveryDate) {
    $jsonData["history"][$index11]["combinedTo"]["delivery"]["data"]["deliveryDate"] = $model->history[$index11]->combinedTo->delivery->data->deliveryDate;
}
if (null !== $model->history[$index11]->combinedTo->delivery->data->denieReason) {
    $jsonData["history"][$index11]["combinedTo"]["delivery"]["data"]["denieReason"] = $model->history[$index11]->combinedTo->delivery->data->denieReason;
}
if (null !== $model->history[$index11]->combinedTo->delivery->data->backwardDelivery) {
    $jsonData["history"][$index11]["combinedTo"]["delivery"]["data"]["backwardDelivery"] = $model->history[$index11]->combinedTo->delivery->data->backwardDelivery;
}
if (null !== $model->history[$index11]->combinedTo->delivery->data->backwardDeliveryCargoType) {
    $jsonData["history"][$index11]["combinedTo"]["delivery"]["data"]["backwardDeliveryCargoType"] = $model->history[$index11]->combinedTo->delivery->data->backwardDeliveryCargoType;
}
if (null !== $model->history[$index11]->combinedTo->delivery->data->backwardDeliveryPayerType) {
    $jsonData["history"][$index11]["combinedTo"]["delivery"]["data"]["backwardDeliveryPayerType"] = $model->history[$index11]->combinedTo->delivery->data->backwardDeliveryPayerType;
}
if (null !== $model->history[$index11]->combinedTo->delivery->data->backwardDeliveryRedeliveryString) {
    $jsonData["history"][$index11]["combinedTo"]["delivery"]["data"]["backwardDeliveryRedeliveryString"] = $model->history[$index11]->combinedTo->delivery->data->backwardDeliveryRedeliveryString;
}
if (null !== $model->history[$index11]->combinedTo->delivery->data->afterpaymentOnGoodsCost) {
    $jsonData["history"][$index11]["combinedTo"]["delivery"]["data"]["afterpaymentOnGoodsCost"] = $model->history[$index11]->combinedTo->delivery->data->afterpaymentOnGoodsCost;
}
if (null !== $model->history[$index11]->combinedTo->delivery->data->declaredValue) {
    $jsonData["history"][$index11]["combinedTo"]["delivery"]["data"]["declaredValue"] = $model->history[$index11]->combinedTo->delivery->data->declaredValue;
}
if (null !== $model->history[$index11]->combinedTo->delivery->data->sendDate) {
    $jsonData["history"][$index11]["combinedTo"]["delivery"]["data"]["sendDate"] = $model->history[$index11]->combinedTo->delivery->data->sendDate->format('Y-m-d H:i:s');;
}
if (null !== $model->history[$index11]->combinedTo->delivery->data->deliveryType) {
    $jsonData["history"][$index11]["combinedTo"]["delivery"]["data"]["deliveryType"] = $model->history[$index11]->combinedTo->delivery->data->deliveryType;
}
if (null !== $model->history[$index11]->combinedTo->delivery->data->pickupType) {
    $jsonData["history"][$index11]["combinedTo"]["delivery"]["data"]["pickupType"] = $model->history[$index11]->combinedTo->delivery->data->pickupType;
}
if (null !== $model->history[$index11]->combinedTo->delivery->data->pickuppointDescription) {
    $jsonData["history"][$index11]["combinedTo"]["delivery"]["data"]["pickuppointDescription"] = $model->history[$index11]->combinedTo->delivery->data->pickuppointDescription;
}
if (null !== $model->history[$index11]->combinedTo->delivery->data->placesCount) {
    $jsonData["history"][$index11]["combinedTo"]["delivery"]["data"]["placesCount"] = $model->history[$index11]->combinedTo->delivery->data->placesCount;
}
if (null !== $model->history[$index11]->combinedTo->delivery->data->service) {
    $jsonData["history"][$index11]["combinedTo"]["delivery"]["data"]["service"] = $model->history[$index11]->combinedTo->delivery->data->service;
}

if (0 === \count($jsonData["history"][$index11]["combinedTo"]["delivery"]["data"])) {
    $jsonData["history"][$index11]["combinedTo"]["delivery"]["data"] = $emptyObject;
}

}
if (null !== $model->history[$index11]->combinedTo->delivery->service) {
    $jsonData["history"][$index11]["combinedTo"]["delivery"]["service"] = [];
if (null !== $model->history[$index11]->combinedTo->delivery->service->name) {
    $jsonData["history"][$index11]["combinedTo"]["delivery"]["service"]["name"] = $model->history[$index11]->combinedTo->delivery->service->name;
}
if (null !== $model->history[$index11]->combinedTo->delivery->service->code) {
    $jsonData["history"][$index11]["combinedTo"]["delivery"]["service"]["code"] = $model->history[$index11]->combinedTo->delivery->service->code;
}
if (null !== $model->history[$index11]->combinedTo->delivery->service->active) {
    $jsonData["history"][$index11]["combinedTo"]["delivery"]["service"]["active"] = $model->history[$index11]->combinedTo->delivery->service->active;
}

if (0 === \count($jsonData["history"][$index11]["combinedTo"]["delivery"]["service"])) {
    $jsonData["history"][$index11]["combinedTo"]["delivery"]["service"] = $emptyObject;
}

}
if (null !== $model->history[$index11]->combinedTo->delivery->cost) {
    $jsonData["history"][$index11]["combinedTo"]["delivery"]["cost"] = $model->history[$index11]->combinedTo->delivery->cost;
}
if (null !== $model->history[$index11]->combinedTo->delivery->netCost) {
    $jsonData["history"][$index11]["combinedTo"]["delivery"]["netCost"] = $model->history[$index11]->combinedTo->delivery->netCost;
}
if (null !== $model->history[$index11]->combinedTo->delivery->date) {
    $jsonData["history"][$index11]["combinedTo"]["delivery"]["date"] = $model->history[$index11]->combinedTo->delivery->date->format('Y-m-d');;
}
if (null !== $model->history[$index11]->combinedTo->delivery->time) {
    $jsonData["history"][$index11]["combinedTo"]["delivery"]["time"] = [];
if (null !== $model->history[$index11]->combinedTo->delivery->time->from) {
    $jsonData["history"][$index11]["combinedTo"]["delivery"]["time"]["from"] = $model->history[$index11]->combinedTo->delivery->time->from->format('H:i');;
}
if (null !== $model->history[$index11]->combinedTo->delivery->time->to) {
    $jsonData["history"][$index11]["combinedTo"]["delivery"]["time"]["to"] = $model->history[$index11]->combinedTo->delivery->time->to->format('H:i');;
}
if (null !== $model->history[$index11]->combinedTo->delivery->time->custom) {
    $jsonData["history"][$index11]["combinedTo"]["delivery"]["time"]["custom"] = $model->history[$index11]->combinedTo->delivery->time->custom;
}

if (0 === \count($jsonData["history"][$index11]["combinedTo"]["delivery"]["time"])) {
    $jsonData["history"][$index11]["combinedTo"]["delivery"]["time"] = $emptyObject;
}

}
if (null !== $model->history[$index11]->combinedTo->delivery->address) {
    $jsonData["history"][$index11]["combinedTo"]["delivery"]["address"] = [];
if (null !== $model->history[$index11]->combinedTo->delivery->address->id) {
    $jsonData["history"][$index11]["combinedTo"]["delivery"]["address"]["id"] = $model->history[$index11]->combinedTo->delivery->address->id;
}
if (null !== $model->history[$index11]->combinedTo->delivery->address->index) {
    $jsonData["history"][$index11]["combinedTo"]["delivery"]["address"]["index"] = $model->history[$index11]->combinedTo->delivery->address->index;
}
if (null !== $model->history[$index11]->combinedTo->delivery->address->countryIso) {
    $jsonData["history"][$index11]["combinedTo"]["delivery"]["address"]["countryIso"] = $model->history[$index11]->combinedTo->delivery->address->countryIso;
}
if (null !== $model->history[$index11]->combinedTo->delivery->address->region) {
    $jsonData["history"][$index11]["combinedTo"]["delivery"]["address"]["region"] = $model->history[$index11]->combinedTo->delivery->address->region;
}
if (null !== $model->history[$index11]->combinedTo->delivery->address->regionId) {
    $jsonData["history"][$index11]["combinedTo"]["delivery"]["address"]["regionId"] = $model->history[$index11]->combinedTo->delivery->address->regionId;
}
if (null !== $model->history[$index11]->combinedTo->delivery->address->city) {
    $jsonData["history"][$index11]["combinedTo"]["delivery"]["address"]["city"] = $model->history[$index11]->combinedTo->delivery->address->city;
}
if (null !== $model->history[$index11]->combinedTo->delivery->address->cityId) {
    $jsonData["history"][$index11]["combinedTo"]["delivery"]["address"]["cityId"] = $model->history[$index11]->combinedTo->delivery->address->cityId;
}
if (null !== $model->history[$index11]->combinedTo->delivery->address->cityType) {
    $jsonData["history"][$index11]["combinedTo"]["delivery"]["address"]["cityType"] = $model->history[$index11]->combinedTo->delivery->address->cityType;
}
if (null !== $model->history[$index11]->combinedTo->delivery->address->street) {
    $jsonData["history"][$index11]["combinedTo"]["delivery"]["address"]["street"] = $model->history[$index11]->combinedTo->delivery->address->street;
}
if (null !== $model->history[$index11]->combinedTo->delivery->address->streetId) {
    $jsonData["history"][$index11]["combinedTo"]["delivery"]["address"]["streetId"] = $model->history[$index11]->combinedTo->delivery->address->streetId;
}
if (null !== $model->history[$index11]->combinedTo->delivery->address->streetType) {
    $jsonData["history"][$index11]["combinedTo"]["delivery"]["address"]["streetType"] = $model->history[$index11]->combinedTo->delivery->address->streetType;
}
if (null !== $model->history[$index11]->combinedTo->delivery->address->building) {
    $jsonData["history"][$index11]["combinedTo"]["delivery"]["address"]["building"] = $model->history[$index11]->combinedTo->delivery->address->building;
}
if (null !== $model->history[$index11]->combinedTo->delivery->address->flat) {
    $jsonData["history"][$index11]["combinedTo"]["delivery"]["address"]["flat"] = $model->history[$index11]->combinedTo->delivery->address->flat;
}
if (null !== $model->history[$index11]->combinedTo->delivery->address->floor) {
    $jsonData["history"][$index11]["combinedTo"]["delivery"]["address"]["floor"] = $model->history[$index11]->combinedTo->delivery->address->floor;
}
if (null !== $model->history[$index11]->combinedTo->delivery->address->block) {
    $jsonData["history"][$index11]["combinedTo"]["delivery"]["address"]["block"] = $model->history[$index11]->combinedTo->delivery->address->block;
}
if (null !== $model->history[$index11]->combinedTo->delivery->address->house) {
    $jsonData["history"][$index11]["combinedTo"]["delivery"]["address"]["house"] = $model->history[$index11]->combinedTo->delivery->address->house;
}
if (null !== $model->history[$index11]->combinedTo->delivery->address->housing) {
    $jsonData["history"][$index11]["combinedTo"]["delivery"]["address"]["housing"] = $model->history[$index11]->combinedTo->delivery->address->housing;
}
if (null !== $model->history[$index11]->combinedTo->delivery->address->metro) {
    $jsonData["history"][$index11]["combinedTo"]["delivery"]["address"]["metro"] = $model->history[$index11]->combinedTo->delivery->address->metro;
}
if (null !== $model->history[$index11]->combinedTo->delivery->address->text) {
    $jsonData["history"][$index11]["combinedTo"]["delivery"]["address"]["text"] = $model->history[$index11]->combinedTo->delivery->address->text;
}

if (0 === \count($jsonData["history"][$index11]["combinedTo"]["delivery"]["address"])) {
    $jsonData["history"][$index11]["combinedTo"]["delivery"]["address"] = $emptyObject;
}

}
if (null !== $model->history[$index11]->combinedTo->delivery->vatRate) {
    $jsonData["history"][$index11]["combinedTo"]["delivery"]["vatRate"] = $model->history[$index11]->combinedTo->delivery->vatRate;
}

if (0 === \count($jsonData["history"][$index11]["combinedTo"]["delivery"])) {
    $jsonData["history"][$index11]["combinedTo"]["delivery"] = $emptyObject;
}

}
if (null !== $model->history[$index11]->combinedTo->marketplace) {
    $jsonData["history"][$index11]["combinedTo"]["marketplace"] = [];
if (null !== $model->history[$index11]->combinedTo->marketplace->code) {
    $jsonData["history"][$index11]["combinedTo"]["marketplace"]["code"] = $model->history[$index11]->combinedTo->marketplace->code;
}
if (null !== $model->history[$index11]->combinedTo->marketplace->orderId) {
    $jsonData["history"][$index11]["combinedTo"]["marketplace"]["orderId"] = $model->history[$index11]->combinedTo->marketplace->orderId;
}

if (0 === \count($jsonData["history"][$index11]["combinedTo"]["marketplace"])) {
    $jsonData["history"][$index11]["combinedTo"]["marketplace"] = $emptyObject;
}

}
if (null !== $model->history[$index11]->combinedTo->site) {
    $jsonData["history"][$index11]["combinedTo"]["site"] = $model->history[$index11]->combinedTo->site;
}
if (null !== $model->history[$index11]->combinedTo->status) {
    $jsonData["history"][$index11]["combinedTo"]["status"] = $model->history[$index11]->combinedTo->status;
}
if (null !== $model->history[$index11]->combinedTo->statusComment) {
    $jsonData["history"][$index11]["combinedTo"]["statusComment"] = $model->history[$index11]->combinedTo->statusComment;
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
if (null !== $model->history[$index11]->combinedTo->items) {
    $jsonData["history"][$index11]["combinedTo"]["items"] = [];
foreach (array_keys($model->history[$index11]->combinedTo->items) as $index44) {
    $jsonData["history"][$index11]["combinedTo"]["items"][$index44] = [];
if (null !== $model->history[$index11]->combinedTo->items[$index44]->externalId) {
    $jsonData["history"][$index11]["combinedTo"]["items"][$index44]["externalId"] = $model->history[$index11]->combinedTo->items[$index44]->externalId;
}
if (null !== $model->history[$index11]->combinedTo->items[$index44]->markingCodes) {
    $jsonData["history"][$index11]["combinedTo"]["items"][$index44]["markingCodes"] = [];
foreach (array_keys($model->history[$index11]->combinedTo->items[$index44]->markingCodes) as $index70) {
    $jsonData["history"][$index11]["combinedTo"]["items"][$index44]["markingCodes"] = $model->history[$index11]->combinedTo->items[$index44]->markingCodes;
}

}
if (null !== $model->history[$index11]->combinedTo->items[$index44]->id) {
    $jsonData["history"][$index11]["combinedTo"]["items"][$index44]["id"] = $model->history[$index11]->combinedTo->items[$index44]->id;
}
if (null !== $model->history[$index11]->combinedTo->items[$index44]->externalIds) {
    $jsonData["history"][$index11]["combinedTo"]["items"][$index44]["externalIds"] = [];
foreach (array_keys($model->history[$index11]->combinedTo->items[$index44]->externalIds) as $index69) {
    $jsonData["history"][$index11]["combinedTo"]["items"][$index44]["externalIds"][$index69] = [];
if (null !== $model->history[$index11]->combinedTo->items[$index44]->externalIds[$index69]->code) {
    $jsonData["history"][$index11]["combinedTo"]["items"][$index44]["externalIds"][$index69]["code"] = $model->history[$index11]->combinedTo->items[$index44]->externalIds[$index69]->code;
}
if (null !== $model->history[$index11]->combinedTo->items[$index44]->externalIds[$index69]->value) {
    $jsonData["history"][$index11]["combinedTo"]["items"][$index44]["externalIds"][$index69]["value"] = $model->history[$index11]->combinedTo->items[$index44]->externalIds[$index69]->value;
}

if (0 === \count($jsonData["history"][$index11]["combinedTo"]["items"][$index44]["externalIds"][$index69])) {
    $jsonData["history"][$index11]["combinedTo"]["items"][$index44]["externalIds"][$index69] = $emptyObject;
}

}

}
if (null !== $model->history[$index11]->combinedTo->items[$index44]->priceType) {
    $jsonData["history"][$index11]["combinedTo"]["items"][$index44]["priceType"] = [];
if (null !== $model->history[$index11]->combinedTo->items[$index44]->priceType->code) {
    $jsonData["history"][$index11]["combinedTo"]["items"][$index44]["priceType"]["code"] = $model->history[$index11]->combinedTo->items[$index44]->priceType->code;
}

if (0 === \count($jsonData["history"][$index11]["combinedTo"]["items"][$index44]["priceType"])) {
    $jsonData["history"][$index11]["combinedTo"]["items"][$index44]["priceType"] = $emptyObject;
}

}
if (null !== $model->history[$index11]->combinedTo->items[$index44]->initialPrice) {
    $jsonData["history"][$index11]["combinedTo"]["items"][$index44]["initialPrice"] = $model->history[$index11]->combinedTo->items[$index44]->initialPrice;
}
if (null !== $model->history[$index11]->combinedTo->items[$index44]->discountManualAmount) {
    $jsonData["history"][$index11]["combinedTo"]["items"][$index44]["discountManualAmount"] = $model->history[$index11]->combinedTo->items[$index44]->discountManualAmount;
}
if (null !== $model->history[$index11]->combinedTo->items[$index44]->discountManualPercent) {
    $jsonData["history"][$index11]["combinedTo"]["items"][$index44]["discountManualPercent"] = $model->history[$index11]->combinedTo->items[$index44]->discountManualPercent;
}
if (null !== $model->history[$index11]->combinedTo->items[$index44]->discountTotal) {
    $jsonData["history"][$index11]["combinedTo"]["items"][$index44]["discountTotal"] = $model->history[$index11]->combinedTo->items[$index44]->discountTotal;
}
if (null !== $model->history[$index11]->combinedTo->items[$index44]->prices) {
    $jsonData["history"][$index11]["combinedTo"]["items"][$index44]["prices"] = [];
foreach (array_keys($model->history[$index11]->combinedTo->items[$index44]->prices) as $index64) {
    $jsonData["history"][$index11]["combinedTo"]["items"][$index44]["prices"][$index64] = [];
if (null !== $model->history[$index11]->combinedTo->items[$index44]->prices[$index64]->price) {
    $jsonData["history"][$index11]["combinedTo"]["items"][$index44]["prices"][$index64]["price"] = $model->history[$index11]->combinedTo->items[$index44]->prices[$index64]->price;
}
if (null !== $model->history[$index11]->combinedTo->items[$index44]->prices[$index64]->quantity) {
    $jsonData["history"][$index11]["combinedTo"]["items"][$index44]["prices"][$index64]["quantity"] = $model->history[$index11]->combinedTo->items[$index44]->prices[$index64]->quantity;
}

if (0 === \count($jsonData["history"][$index11]["combinedTo"]["items"][$index44]["prices"][$index64])) {
    $jsonData["history"][$index11]["combinedTo"]["items"][$index44]["prices"][$index64] = $emptyObject;
}

}

}
if (null !== $model->history[$index11]->combinedTo->items[$index44]->vatRate) {
    $jsonData["history"][$index11]["combinedTo"]["items"][$index44]["vatRate"] = $model->history[$index11]->combinedTo->items[$index44]->vatRate;
}
if (null !== $model->history[$index11]->combinedTo->items[$index44]->createdAt) {
    $jsonData["history"][$index11]["combinedTo"]["items"][$index44]["createdAt"] = $model->history[$index11]->combinedTo->items[$index44]->createdAt->format('Y-m-d H:i:s');;
}
if (null !== $model->history[$index11]->combinedTo->items[$index44]->quantity) {
    $jsonData["history"][$index11]["combinedTo"]["items"][$index44]["quantity"] = $model->history[$index11]->combinedTo->items[$index44]->quantity;
}
if (null !== $model->history[$index11]->combinedTo->items[$index44]->status) {
    $jsonData["history"][$index11]["combinedTo"]["items"][$index44]["status"] = $model->history[$index11]->combinedTo->items[$index44]->status;
}
if (null !== $model->history[$index11]->combinedTo->items[$index44]->comment) {
    $jsonData["history"][$index11]["combinedTo"]["items"][$index44]["comment"] = $model->history[$index11]->combinedTo->items[$index44]->comment;
}
if (null !== $model->history[$index11]->combinedTo->items[$index44]->offer) {
    $jsonData["history"][$index11]["combinedTo"]["items"][$index44]["offer"] = [];
if (null !== $model->history[$index11]->combinedTo->items[$index44]->offer->displayName) {
    $jsonData["history"][$index11]["combinedTo"]["items"][$index44]["offer"]["displayName"] = $model->history[$index11]->combinedTo->items[$index44]->offer->displayName;
}
if (null !== $model->history[$index11]->combinedTo->items[$index44]->offer->id) {
    $jsonData["history"][$index11]["combinedTo"]["items"][$index44]["offer"]["id"] = $model->history[$index11]->combinedTo->items[$index44]->offer->id;
}
if (null !== $model->history[$index11]->combinedTo->items[$index44]->offer->externalId) {
    $jsonData["history"][$index11]["combinedTo"]["items"][$index44]["offer"]["externalId"] = $model->history[$index11]->combinedTo->items[$index44]->offer->externalId;
}
if (null !== $model->history[$index11]->combinedTo->items[$index44]->offer->xmlId) {
    $jsonData["history"][$index11]["combinedTo"]["items"][$index44]["offer"]["xmlId"] = $model->history[$index11]->combinedTo->items[$index44]->offer->xmlId;
}
if (null !== $model->history[$index11]->combinedTo->items[$index44]->offer->name) {
    $jsonData["history"][$index11]["combinedTo"]["items"][$index44]["offer"]["name"] = $model->history[$index11]->combinedTo->items[$index44]->offer->name;
}
if (null !== $model->history[$index11]->combinedTo->items[$index44]->offer->article) {
    $jsonData["history"][$index11]["combinedTo"]["items"][$index44]["offer"]["article"] = $model->history[$index11]->combinedTo->items[$index44]->offer->article;
}
if (null !== $model->history[$index11]->combinedTo->items[$index44]->offer->vatRate) {
    $jsonData["history"][$index11]["combinedTo"]["items"][$index44]["offer"]["vatRate"] = $model->history[$index11]->combinedTo->items[$index44]->offer->vatRate;
}
if (null !== $model->history[$index11]->combinedTo->items[$index44]->offer->unit) {
    $jsonData["history"][$index11]["combinedTo"]["items"][$index44]["offer"]["unit"] = [];
if (null !== $model->history[$index11]->combinedTo->items[$index44]->offer->unit->code) {
    $jsonData["history"][$index11]["combinedTo"]["items"][$index44]["offer"]["unit"]["code"] = $model->history[$index11]->combinedTo->items[$index44]->offer->unit->code;
}
if (null !== $model->history[$index11]->combinedTo->items[$index44]->offer->unit->name) {
    $jsonData["history"][$index11]["combinedTo"]["items"][$index44]["offer"]["unit"]["name"] = $model->history[$index11]->combinedTo->items[$index44]->offer->unit->name;
}
if (null !== $model->history[$index11]->combinedTo->items[$index44]->offer->unit->sym) {
    $jsonData["history"][$index11]["combinedTo"]["items"][$index44]["offer"]["unit"]["sym"] = $model->history[$index11]->combinedTo->items[$index44]->offer->unit->sym;
}

if (0 === \count($jsonData["history"][$index11]["combinedTo"]["items"][$index44]["offer"]["unit"])) {
    $jsonData["history"][$index11]["combinedTo"]["items"][$index44]["offer"]["unit"] = $emptyObject;
}

}
if (null !== $model->history[$index11]->combinedTo->items[$index44]->offer->barcode) {
    $jsonData["history"][$index11]["combinedTo"]["items"][$index44]["offer"]["barcode"] = $model->history[$index11]->combinedTo->items[$index44]->offer->barcode;
}
if (null !== $model->history[$index11]->combinedTo->items[$index44]->offer->properties) {
    $jsonData["history"][$index11]["combinedTo"]["items"][$index44]["offer"]["properties"] = [];
foreach (array_keys($model->history[$index11]->combinedTo->items[$index44]->offer->properties) as $index77) {
    $jsonData["history"][$index11]["combinedTo"]["items"][$index44]["offer"]["properties"] = $model->history[$index11]->combinedTo->items[$index44]->offer->properties;
}

}

if (0 === \count($jsonData["history"][$index11]["combinedTo"]["items"][$index44]["offer"])) {
    $jsonData["history"][$index11]["combinedTo"]["items"][$index44]["offer"] = $emptyObject;
}

}
if (null !== $model->history[$index11]->combinedTo->items[$index44]->productName) {
    $jsonData["history"][$index11]["combinedTo"]["items"][$index44]["productName"] = $model->history[$index11]->combinedTo->items[$index44]->productName;
}
if (null !== $model->history[$index11]->combinedTo->items[$index44]->isCanceled) {
    $jsonData["history"][$index11]["combinedTo"]["items"][$index44]["isCanceled"] = $model->history[$index11]->combinedTo->items[$index44]->isCanceled;
}
if (null !== $model->history[$index11]->combinedTo->items[$index44]->properties) {
    if (0 === \count($model->history[$index11]->combinedTo->items[$index44]->properties)) {
    $jsonData["history"][$index11]["combinedTo"]["items"][$index44]["properties"] = $emptyHashmap;
} else {
    foreach (array_keys($model->history[$index11]->combinedTo->items[$index44]->properties) as $index68) {
        $jsonData["history"][$index11]["combinedTo"]["items"][$index44]["properties"][$index68] = [];
if (null !== $model->history[$index11]->combinedTo->items[$index44]->properties[$index68]->code) {
    $jsonData["history"][$index11]["combinedTo"]["items"][$index44]["properties"][$index68]["code"] = $model->history[$index11]->combinedTo->items[$index44]->properties[$index68]->code;
}
if (null !== $model->history[$index11]->combinedTo->items[$index44]->properties[$index68]->name) {
    $jsonData["history"][$index11]["combinedTo"]["items"][$index44]["properties"][$index68]["name"] = $model->history[$index11]->combinedTo->items[$index44]->properties[$index68]->name;
}
if (null !== $model->history[$index11]->combinedTo->items[$index44]->properties[$index68]->value) {
    $jsonData["history"][$index11]["combinedTo"]["items"][$index44]["properties"][$index68]["value"] = $model->history[$index11]->combinedTo->items[$index44]->properties[$index68]->value;
}

if (0 === \count($jsonData["history"][$index11]["combinedTo"]["items"][$index44]["properties"][$index68])) {
    $jsonData["history"][$index11]["combinedTo"]["items"][$index44]["properties"][$index68] = $emptyObject;
}

    }
}

}
if (null !== $model->history[$index11]->combinedTo->items[$index44]->purchasePrice) {
    $jsonData["history"][$index11]["combinedTo"]["items"][$index44]["purchasePrice"] = $model->history[$index11]->combinedTo->items[$index44]->purchasePrice;
}

if (0 === \count($jsonData["history"][$index11]["combinedTo"]["items"][$index44])) {
    $jsonData["history"][$index11]["combinedTo"]["items"][$index44] = $emptyObject;
}

}

}
if (null !== $model->history[$index11]->combinedTo->fullPaidAt) {
    $jsonData["history"][$index11]["combinedTo"]["fullPaidAt"] = $model->history[$index11]->combinedTo->fullPaidAt->format('Y-m-d H:i:s');;
}
if (null !== $model->history[$index11]->combinedTo->payments) {
    $jsonData["history"][$index11]["combinedTo"]["payments"] = [];
foreach (array_keys($model->history[$index11]->combinedTo->payments) as $index47) {
    $jsonData["history"][$index11]["combinedTo"]["payments"][$index47] = [];
if (null !== $model->history[$index11]->combinedTo->payments[$index47]->id) {
    $jsonData["history"][$index11]["combinedTo"]["payments"][$index47]["id"] = $model->history[$index11]->combinedTo->payments[$index47]->id;
}
if (null !== $model->history[$index11]->combinedTo->payments[$index47]->status) {
    $jsonData["history"][$index11]["combinedTo"]["payments"][$index47]["status"] = $model->history[$index11]->combinedTo->payments[$index47]->status;
}
if (null !== $model->history[$index11]->combinedTo->payments[$index47]->type) {
    $jsonData["history"][$index11]["combinedTo"]["payments"][$index47]["type"] = $model->history[$index11]->combinedTo->payments[$index47]->type;
}
if (null !== $model->history[$index11]->combinedTo->payments[$index47]->externalId) {
    $jsonData["history"][$index11]["combinedTo"]["payments"][$index47]["externalId"] = $model->history[$index11]->combinedTo->payments[$index47]->externalId;
}
if (null !== $model->history[$index11]->combinedTo->payments[$index47]->amount) {
    $jsonData["history"][$index11]["combinedTo"]["payments"][$index47]["amount"] = $model->history[$index11]->combinedTo->payments[$index47]->amount;
}
if (null !== $model->history[$index11]->combinedTo->payments[$index47]->paidAt) {
    $jsonData["history"][$index11]["combinedTo"]["payments"][$index47]["paidAt"] = $model->history[$index11]->combinedTo->payments[$index47]->paidAt->format('Y-m-d H:i:s');;
}
if (null !== $model->history[$index11]->combinedTo->payments[$index47]->comment) {
    $jsonData["history"][$index11]["combinedTo"]["payments"][$index47]["comment"] = $model->history[$index11]->combinedTo->payments[$index47]->comment;
}

if (0 === \count($jsonData["history"][$index11]["combinedTo"]["payments"][$index47])) {
    $jsonData["history"][$index11]["combinedTo"]["payments"][$index47] = $emptyObject;
}

}

}
if (null !== $model->history[$index11]->combinedTo->fromApi) {
    $jsonData["history"][$index11]["combinedTo"]["fromApi"] = $model->history[$index11]->combinedTo->fromApi;
}
if (null !== $model->history[$index11]->combinedTo->weight) {
    $jsonData["history"][$index11]["combinedTo"]["weight"] = $model->history[$index11]->combinedTo->weight;
}
if (null !== $model->history[$index11]->combinedTo->length) {
    $jsonData["history"][$index11]["combinedTo"]["length"] = $model->history[$index11]->combinedTo->length;
}
if (null !== $model->history[$index11]->combinedTo->width) {
    $jsonData["history"][$index11]["combinedTo"]["width"] = $model->history[$index11]->combinedTo->width;
}
if (null !== $model->history[$index11]->combinedTo->height) {
    $jsonData["history"][$index11]["combinedTo"]["height"] = $model->history[$index11]->combinedTo->height;
}
if (null !== $model->history[$index11]->combinedTo->shipmentStore) {
    $jsonData["history"][$index11]["combinedTo"]["shipmentStore"] = $model->history[$index11]->combinedTo->shipmentStore;
}
if (null !== $model->history[$index11]->combinedTo->shipmentDate) {
    $jsonData["history"][$index11]["combinedTo"]["shipmentDate"] = $model->history[$index11]->combinedTo->shipmentDate->format('Y-m-d');;
}
if (null !== $model->history[$index11]->combinedTo->shipped) {
    $jsonData["history"][$index11]["combinedTo"]["shipped"] = $model->history[$index11]->combinedTo->shipped;
}
if (null !== $model->history[$index11]->combinedTo->dialogId) {
    $jsonData["history"][$index11]["combinedTo"]["dialogId"] = $model->history[$index11]->combinedTo->dialogId;
}
if (null !== $model->history[$index11]->combinedTo->customFields) {
    $jsonData["history"][$index11]["combinedTo"]["customFields"] = [];
foreach (array_keys($model->history[$index11]->combinedTo->customFields) as $index51) {
    $jsonData["history"][$index11]["combinedTo"]["customFields"] = $model->history[$index11]->combinedTo->customFields;
}

}
if (null !== $model->history[$index11]->combinedTo->clientId) {
    $jsonData["history"][$index11]["combinedTo"]["clientId"] = $model->history[$index11]->combinedTo->clientId;
}
if (null !== $model->history[$index11]->combinedTo->loyaltyEventId) {
    $jsonData["history"][$index11]["combinedTo"]["loyaltyEventId"] = $model->history[$index11]->combinedTo->loyaltyEventId;
}

if (0 === \count($jsonData["history"][$index11]["combinedTo"])) {
    $jsonData["history"][$index11]["combinedTo"] = $emptyObject;
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
