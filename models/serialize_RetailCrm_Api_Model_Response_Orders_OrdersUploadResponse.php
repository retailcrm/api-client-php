<?php

function serialize_RetailCrm_Api_Model_Response_Orders_OrdersUploadResponse(RetailCrm\Api\Model\Response\Orders\OrdersUploadResponse $model, bool $useStdClass = true)
{
    $emptyHashmap = $useStdClass ? new \stdClass() : [];
    $emptyObject = $useStdClass ? new \stdClass() : [];

    $jsonData = [];
if (null !== $model->success) {
    $jsonData["success"] = $model->success;
}
if (null !== $model->site) {
    $jsonData["site"] = $model->site;
}
if (null !== $model->uploadedOrders) {
    $jsonData["uploadedOrders"] = [];
foreach (array_keys($model->uploadedOrders) as $index18) {
    $jsonData["uploadedOrders"][$index18] = [];
if (null !== $model->uploadedOrders[$index18]->id) {
    $jsonData["uploadedOrders"][$index18]["id"] = $model->uploadedOrders[$index18]->id;
}
if (null !== $model->uploadedOrders[$index18]->externalId) {
    $jsonData["uploadedOrders"][$index18]["externalId"] = $model->uploadedOrders[$index18]->externalId;
}

if (0 === \count($jsonData["uploadedOrders"][$index18])) {
    $jsonData["uploadedOrders"][$index18] = $emptyObject;
}

}

}
if (null !== $model->orders) {
    $jsonData["orders"] = [];
foreach (array_keys($model->orders) as $index10) {
    $jsonData["orders"][$index10] = [];
if (null !== $model->orders[$index10]->bonusesCreditTotal) {
    $jsonData["orders"][$index10]["bonusesCreditTotal"] = $model->orders[$index10]->bonusesCreditTotal;
}
if (null !== $model->orders[$index10]->bonusesChargeTotal) {
    $jsonData["orders"][$index10]["bonusesChargeTotal"] = $model->orders[$index10]->bonusesChargeTotal;
}
if (null !== $model->orders[$index10]->summ) {
    $jsonData["orders"][$index10]["summ"] = $model->orders[$index10]->summ;
}
if (null !== $model->orders[$index10]->id) {
    $jsonData["orders"][$index10]["id"] = $model->orders[$index10]->id;
}
if (null !== $model->orders[$index10]->slug) {
    $jsonData["orders"][$index10]["slug"] = $model->orders[$index10]->slug;
}
if (null !== $model->orders[$index10]->number) {
    $jsonData["orders"][$index10]["number"] = $model->orders[$index10]->number;
}
if (null !== $model->orders[$index10]->externalId) {
    $jsonData["orders"][$index10]["externalId"] = $model->orders[$index10]->externalId;
}
if (null !== $model->orders[$index10]->orderType) {
    $jsonData["orders"][$index10]["orderType"] = $model->orders[$index10]->orderType;
}
if (null !== $model->orders[$index10]->orderMethod) {
    $jsonData["orders"][$index10]["orderMethod"] = $model->orders[$index10]->orderMethod;
}
if (null !== $model->orders[$index10]->privilegeType) {
    $jsonData["orders"][$index10]["privilegeType"] = $model->orders[$index10]->privilegeType;
}
if (null !== $model->orders[$index10]->countryIso) {
    $jsonData["orders"][$index10]["countryIso"] = $model->orders[$index10]->countryIso;
}
if (null !== $model->orders[$index10]->createdAt) {
    $jsonData["orders"][$index10]["createdAt"] = $model->orders[$index10]->createdAt->format('Y-m-d H:i:s');;
}
if (null !== $model->orders[$index10]->statusUpdatedAt) {
    $jsonData["orders"][$index10]["statusUpdatedAt"] = $model->orders[$index10]->statusUpdatedAt->format('Y-m-d H:i:s');;
}
if (null !== $model->orders[$index10]->discountManualAmount) {
    $jsonData["orders"][$index10]["discountManualAmount"] = $model->orders[$index10]->discountManualAmount;
}
if (null !== $model->orders[$index10]->discountManualPercent) {
    $jsonData["orders"][$index10]["discountManualPercent"] = $model->orders[$index10]->discountManualPercent;
}
if (null !== $model->orders[$index10]->totalSumm) {
    $jsonData["orders"][$index10]["totalSumm"] = $model->orders[$index10]->totalSumm;
}
if (null !== $model->orders[$index10]->prepaySum) {
    $jsonData["orders"][$index10]["prepaySum"] = $model->orders[$index10]->prepaySum;
}
if (null !== $model->orders[$index10]->purchaseSumm) {
    $jsonData["orders"][$index10]["purchaseSumm"] = $model->orders[$index10]->purchaseSumm;
}
if (null !== $model->orders[$index10]->personalDiscountPercent) {
    $jsonData["orders"][$index10]["personalDiscountPercent"] = $model->orders[$index10]->personalDiscountPercent;
}
if (null !== $model->orders[$index10]->loyaltyLevel) {
    $jsonData["orders"][$index10]["loyaltyLevel"] = [];
if (null !== $model->orders[$index10]->loyaltyLevel->id) {
    $jsonData["orders"][$index10]["loyaltyLevel"]["id"] = $model->orders[$index10]->loyaltyLevel->id;
}
if (null !== $model->orders[$index10]->loyaltyLevel->name) {
    $jsonData["orders"][$index10]["loyaltyLevel"]["name"] = $model->orders[$index10]->loyaltyLevel->name;
}

if (0 === \count($jsonData["orders"][$index10]["loyaltyLevel"])) {
    $jsonData["orders"][$index10]["loyaltyLevel"] = $emptyObject;
}

}
if (null !== $model->orders[$index10]->loyaltyEvent) {
    $jsonData["orders"][$index10]["loyaltyEvent"] = [];
if (null !== $model->orders[$index10]->loyaltyEvent->id) {
    $jsonData["orders"][$index10]["loyaltyEvent"]["id"] = $model->orders[$index10]->loyaltyEvent->id;
}

if (0 === \count($jsonData["orders"][$index10]["loyaltyEvent"])) {
    $jsonData["orders"][$index10]["loyaltyEvent"] = $emptyObject;
}

}
if (null !== $model->orders[$index10]->mark) {
    $jsonData["orders"][$index10]["mark"] = $model->orders[$index10]->mark;
}
if (null !== $model->orders[$index10]->markDatetime) {
    $jsonData["orders"][$index10]["markDatetime"] = $model->orders[$index10]->markDatetime->format('Y-m-d H:i:s');;
}
if (null !== $model->orders[$index10]->lastName) {
    $jsonData["orders"][$index10]["lastName"] = $model->orders[$index10]->lastName;
}
if (null !== $model->orders[$index10]->firstName) {
    $jsonData["orders"][$index10]["firstName"] = $model->orders[$index10]->firstName;
}
if (null !== $model->orders[$index10]->patronymic) {
    $jsonData["orders"][$index10]["patronymic"] = $model->orders[$index10]->patronymic;
}
if (null !== $model->orders[$index10]->phone) {
    $jsonData["orders"][$index10]["phone"] = $model->orders[$index10]->phone;
}
if (null !== $model->orders[$index10]->additionalPhone) {
    $jsonData["orders"][$index10]["additionalPhone"] = $model->orders[$index10]->additionalPhone;
}
if (null !== $model->orders[$index10]->email) {
    $jsonData["orders"][$index10]["email"] = $model->orders[$index10]->email;
}
if (null !== $model->orders[$index10]->call) {
    $jsonData["orders"][$index10]["call"] = $model->orders[$index10]->call;
}
if (null !== $model->orders[$index10]->expired) {
    $jsonData["orders"][$index10]["expired"] = $model->orders[$index10]->expired;
}
if (null !== $model->orders[$index10]->customerComment) {
    $jsonData["orders"][$index10]["customerComment"] = $model->orders[$index10]->customerComment;
}
if (null !== $model->orders[$index10]->managerComment) {
    $jsonData["orders"][$index10]["managerComment"] = $model->orders[$index10]->managerComment;
}
if (null !== $model->orders[$index10]->managerId) {
    $jsonData["orders"][$index10]["managerId"] = $model->orders[$index10]->managerId;
}
if (null !== $model->orders[$index10]->customer) {
    $jsonData["orders"][$index10]["customer"] = [];

if ($model->orders[$index10]->customer instanceof \RetailCrm\Api\Model\Entity\Customers\Customer) {
    $jsonData["orders"][$index10]["customer"] = [];
if (null !== $model->orders[$index10]->customer->type) {
    $jsonData["orders"][$index10]["customer"]["type"] = $model->orders[$index10]->customer->type;
}
if (null !== $model->orders[$index10]->customer->id) {
    $jsonData["orders"][$index10]["customer"]["id"] = $model->orders[$index10]->customer->id;
}
if (null !== $model->orders[$index10]->customer->externalId) {
    $jsonData["orders"][$index10]["customer"]["externalId"] = $model->orders[$index10]->customer->externalId;
}
if (null !== $model->orders[$index10]->customer->isContact) {
    $jsonData["orders"][$index10]["customer"]["isContact"] = $model->orders[$index10]->customer->isContact;
}
if (null !== $model->orders[$index10]->customer->createdAt) {
    $jsonData["orders"][$index10]["customer"]["createdAt"] = $model->orders[$index10]->customer->createdAt->format('Y-m-d H:i:s');;
}
if (null !== $model->orders[$index10]->customer->managerId) {
    $jsonData["orders"][$index10]["customer"]["managerId"] = $model->orders[$index10]->customer->managerId;
}
if (null !== $model->orders[$index10]->customer->vip) {
    $jsonData["orders"][$index10]["customer"]["vip"] = $model->orders[$index10]->customer->vip;
}
if (null !== $model->orders[$index10]->customer->bad) {
    $jsonData["orders"][$index10]["customer"]["bad"] = $model->orders[$index10]->customer->bad;
}
if (null !== $model->orders[$index10]->customer->browserId) {
    $jsonData["orders"][$index10]["customer"]["browserId"] = $model->orders[$index10]->customer->browserId;
}
if (null !== $model->orders[$index10]->customer->site) {
    $jsonData["orders"][$index10]["customer"]["site"] = $model->orders[$index10]->customer->site;
}
if (null !== $model->orders[$index10]->customer->contragent) {
    $jsonData["orders"][$index10]["customer"]["contragent"] = [];
if (null !== $model->orders[$index10]->customer->contragent->contragentType) {
    $jsonData["orders"][$index10]["customer"]["contragent"]["contragentType"] = $model->orders[$index10]->customer->contragent->contragentType;
}
if (null !== $model->orders[$index10]->customer->contragent->legalName) {
    $jsonData["orders"][$index10]["customer"]["contragent"]["legalName"] = $model->orders[$index10]->customer->contragent->legalName;
}
if (null !== $model->orders[$index10]->customer->contragent->legalAddress) {
    $jsonData["orders"][$index10]["customer"]["contragent"]["legalAddress"] = $model->orders[$index10]->customer->contragent->legalAddress;
}
if (null !== $model->orders[$index10]->customer->contragent->INN) {
    $jsonData["orders"][$index10]["customer"]["contragent"]["INN"] = $model->orders[$index10]->customer->contragent->INN;
}
if (null !== $model->orders[$index10]->customer->contragent->OKPO) {
    $jsonData["orders"][$index10]["customer"]["contragent"]["OKPO"] = $model->orders[$index10]->customer->contragent->OKPO;
}
if (null !== $model->orders[$index10]->customer->contragent->KPP) {
    $jsonData["orders"][$index10]["customer"]["contragent"]["KPP"] = $model->orders[$index10]->customer->contragent->KPP;
}
if (null !== $model->orders[$index10]->customer->contragent->OGRN) {
    $jsonData["orders"][$index10]["customer"]["contragent"]["OGRN"] = $model->orders[$index10]->customer->contragent->OGRN;
}
if (null !== $model->orders[$index10]->customer->contragent->OGRNIP) {
    $jsonData["orders"][$index10]["customer"]["contragent"]["OGRNIP"] = $model->orders[$index10]->customer->contragent->OGRNIP;
}
if (null !== $model->orders[$index10]->customer->contragent->certificateNumber) {
    $jsonData["orders"][$index10]["customer"]["contragent"]["certificateNumber"] = $model->orders[$index10]->customer->contragent->certificateNumber;
}
if (null !== $model->orders[$index10]->customer->contragent->certificateDate) {
    $jsonData["orders"][$index10]["customer"]["contragent"]["certificateDate"] = $model->orders[$index10]->customer->contragent->certificateDate->format('Y-m-d H:i:s');;
}
if (null !== $model->orders[$index10]->customer->contragent->BIK) {
    $jsonData["orders"][$index10]["customer"]["contragent"]["BIK"] = $model->orders[$index10]->customer->contragent->BIK;
}
if (null !== $model->orders[$index10]->customer->contragent->bank) {
    $jsonData["orders"][$index10]["customer"]["contragent"]["bank"] = $model->orders[$index10]->customer->contragent->bank;
}
if (null !== $model->orders[$index10]->customer->contragent->bankAddress) {
    $jsonData["orders"][$index10]["customer"]["contragent"]["bankAddress"] = $model->orders[$index10]->customer->contragent->bankAddress;
}
if (null !== $model->orders[$index10]->customer->contragent->corrAccount) {
    $jsonData["orders"][$index10]["customer"]["contragent"]["corrAccount"] = $model->orders[$index10]->customer->contragent->corrAccount;
}
if (null !== $model->orders[$index10]->customer->contragent->bankAccount) {
    $jsonData["orders"][$index10]["customer"]["contragent"]["bankAccount"] = $model->orders[$index10]->customer->contragent->bankAccount;
}

if (0 === \count($jsonData["orders"][$index10]["customer"]["contragent"])) {
    $jsonData["orders"][$index10]["customer"]["contragent"] = $emptyObject;
}

}
if (null !== $model->orders[$index10]->customer->tags) {
    $jsonData["orders"][$index10]["customer"]["tags"] = [];
foreach (array_keys($model->orders[$index10]->customer->tags) as $index40) {
    $jsonData["orders"][$index10]["customer"]["tags"][$index40] = $model->orders[$index10]->customer->tags[$index40]->name;
}

}
if (null !== $model->orders[$index10]->customer->avgMarginSumm) {
    $jsonData["orders"][$index10]["customer"]["avgMarginSumm"] = $model->orders[$index10]->customer->avgMarginSumm;
}
if (null !== $model->orders[$index10]->customer->marginSumm) {
    $jsonData["orders"][$index10]["customer"]["marginSumm"] = $model->orders[$index10]->customer->marginSumm;
}
if (null !== $model->orders[$index10]->customer->totalSumm) {
    $jsonData["orders"][$index10]["customer"]["totalSumm"] = $model->orders[$index10]->customer->totalSumm;
}
if (null !== $model->orders[$index10]->customer->averageSumm) {
    $jsonData["orders"][$index10]["customer"]["averageSumm"] = $model->orders[$index10]->customer->averageSumm;
}
if (null !== $model->orders[$index10]->customer->ordersCount) {
    $jsonData["orders"][$index10]["customer"]["ordersCount"] = $model->orders[$index10]->customer->ordersCount;
}
if (null !== $model->orders[$index10]->customer->costSumm) {
    $jsonData["orders"][$index10]["customer"]["costSumm"] = $model->orders[$index10]->customer->costSumm;
}
if (null !== $model->orders[$index10]->customer->customFields) {
    $jsonData["orders"][$index10]["customer"]["customFields"] = [];
foreach (array_keys($model->orders[$index10]->customer->customFields) as $index48) {
    $jsonData["orders"][$index10]["customer"]["customFields"] = $model->orders[$index10]->customer->customFields;
}

}
if (null !== $model->orders[$index10]->customer->personalDiscount) {
    $jsonData["orders"][$index10]["customer"]["personalDiscount"] = $model->orders[$index10]->customer->personalDiscount;
}
if (null !== $model->orders[$index10]->customer->cumulativeDiscount) {
    $jsonData["orders"][$index10]["customer"]["cumulativeDiscount"] = $model->orders[$index10]->customer->cumulativeDiscount;
}
if (null !== $model->orders[$index10]->customer->discountCardNumber) {
    $jsonData["orders"][$index10]["customer"]["discountCardNumber"] = $model->orders[$index10]->customer->discountCardNumber;
}
if (null !== $model->orders[$index10]->customer->firstClientId) {
    $jsonData["orders"][$index10]["customer"]["firstClientId"] = $model->orders[$index10]->customer->firstClientId;
}
if (null !== $model->orders[$index10]->customer->lastClientId) {
    $jsonData["orders"][$index10]["customer"]["lastClientId"] = $model->orders[$index10]->customer->lastClientId;
}
if (null !== $model->orders[$index10]->customer->address) {
    $jsonData["orders"][$index10]["customer"]["address"] = [];
if (null !== $model->orders[$index10]->customer->address->id) {
    $jsonData["orders"][$index10]["customer"]["address"]["id"] = $model->orders[$index10]->customer->address->id;
}
if (null !== $model->orders[$index10]->customer->address->name) {
    $jsonData["orders"][$index10]["customer"]["address"]["name"] = $model->orders[$index10]->customer->address->name;
}
if (null !== $model->orders[$index10]->customer->address->isMain) {
    $jsonData["orders"][$index10]["customer"]["address"]["isMain"] = $model->orders[$index10]->customer->address->isMain;
}
if (null !== $model->orders[$index10]->customer->address->index) {
    $jsonData["orders"][$index10]["customer"]["address"]["index"] = $model->orders[$index10]->customer->address->index;
}
if (null !== $model->orders[$index10]->customer->address->countryIso) {
    $jsonData["orders"][$index10]["customer"]["address"]["countryIso"] = $model->orders[$index10]->customer->address->countryIso;
}
if (null !== $model->orders[$index10]->customer->address->region) {
    $jsonData["orders"][$index10]["customer"]["address"]["region"] = $model->orders[$index10]->customer->address->region;
}
if (null !== $model->orders[$index10]->customer->address->regionId) {
    $jsonData["orders"][$index10]["customer"]["address"]["regionId"] = $model->orders[$index10]->customer->address->regionId;
}
if (null !== $model->orders[$index10]->customer->address->city) {
    $jsonData["orders"][$index10]["customer"]["address"]["city"] = $model->orders[$index10]->customer->address->city;
}
if (null !== $model->orders[$index10]->customer->address->cityId) {
    $jsonData["orders"][$index10]["customer"]["address"]["cityId"] = $model->orders[$index10]->customer->address->cityId;
}
if (null !== $model->orders[$index10]->customer->address->cityType) {
    $jsonData["orders"][$index10]["customer"]["address"]["cityType"] = $model->orders[$index10]->customer->address->cityType;
}
if (null !== $model->orders[$index10]->customer->address->street) {
    $jsonData["orders"][$index10]["customer"]["address"]["street"] = $model->orders[$index10]->customer->address->street;
}
if (null !== $model->orders[$index10]->customer->address->streetId) {
    $jsonData["orders"][$index10]["customer"]["address"]["streetId"] = $model->orders[$index10]->customer->address->streetId;
}
if (null !== $model->orders[$index10]->customer->address->streetType) {
    $jsonData["orders"][$index10]["customer"]["address"]["streetType"] = $model->orders[$index10]->customer->address->streetType;
}
if (null !== $model->orders[$index10]->customer->address->building) {
    $jsonData["orders"][$index10]["customer"]["address"]["building"] = $model->orders[$index10]->customer->address->building;
}
if (null !== $model->orders[$index10]->customer->address->flat) {
    $jsonData["orders"][$index10]["customer"]["address"]["flat"] = $model->orders[$index10]->customer->address->flat;
}
if (null !== $model->orders[$index10]->customer->address->floor) {
    $jsonData["orders"][$index10]["customer"]["address"]["floor"] = $model->orders[$index10]->customer->address->floor;
}
if (null !== $model->orders[$index10]->customer->address->block) {
    $jsonData["orders"][$index10]["customer"]["address"]["block"] = $model->orders[$index10]->customer->address->block;
}
if (null !== $model->orders[$index10]->customer->address->house) {
    $jsonData["orders"][$index10]["customer"]["address"]["house"] = $model->orders[$index10]->customer->address->house;
}
if (null !== $model->orders[$index10]->customer->address->housing) {
    $jsonData["orders"][$index10]["customer"]["address"]["housing"] = $model->orders[$index10]->customer->address->housing;
}
if (null !== $model->orders[$index10]->customer->address->metro) {
    $jsonData["orders"][$index10]["customer"]["address"]["metro"] = $model->orders[$index10]->customer->address->metro;
}
if (null !== $model->orders[$index10]->customer->address->notes) {
    $jsonData["orders"][$index10]["customer"]["address"]["notes"] = $model->orders[$index10]->customer->address->notes;
}
if (null !== $model->orders[$index10]->customer->address->text) {
    $jsonData["orders"][$index10]["customer"]["address"]["text"] = $model->orders[$index10]->customer->address->text;
}
if (null !== $model->orders[$index10]->customer->address->externalId) {
    $jsonData["orders"][$index10]["customer"]["address"]["externalId"] = $model->orders[$index10]->customer->address->externalId;
}

if (0 === \count($jsonData["orders"][$index10]["customer"]["address"])) {
    $jsonData["orders"][$index10]["customer"]["address"] = $emptyObject;
}

}
if (null !== $model->orders[$index10]->customer->segments) {
    $jsonData["orders"][$index10]["customer"]["segments"] = [];
foreach (array_keys($model->orders[$index10]->customer->segments) as $index44) {
    $jsonData["orders"][$index10]["customer"]["segments"][$index44] = [];
if (null !== $model->orders[$index10]->customer->segments[$index44]->id) {
    $jsonData["orders"][$index10]["customer"]["segments"][$index44]["id"] = $model->orders[$index10]->customer->segments[$index44]->id;
}
if (null !== $model->orders[$index10]->customer->segments[$index44]->code) {
    $jsonData["orders"][$index10]["customer"]["segments"][$index44]["code"] = $model->orders[$index10]->customer->segments[$index44]->code;
}
if (null !== $model->orders[$index10]->customer->segments[$index44]->name) {
    $jsonData["orders"][$index10]["customer"]["segments"][$index44]["name"] = $model->orders[$index10]->customer->segments[$index44]->name;
}
if (null !== $model->orders[$index10]->customer->segments[$index44]->createdAt) {
    $jsonData["orders"][$index10]["customer"]["segments"][$index44]["createdAt"] = $model->orders[$index10]->customer->segments[$index44]->createdAt->format('Y-m-d H:i:s');;
}
if (null !== $model->orders[$index10]->customer->segments[$index44]->isDynamic) {
    $jsonData["orders"][$index10]["customer"]["segments"][$index44]["isDynamic"] = $model->orders[$index10]->customer->segments[$index44]->isDynamic;
}
if (null !== $model->orders[$index10]->customer->segments[$index44]->customersCount) {
    $jsonData["orders"][$index10]["customer"]["segments"][$index44]["customersCount"] = $model->orders[$index10]->customer->segments[$index44]->customersCount;
}
if (null !== $model->orders[$index10]->customer->segments[$index44]->active) {
    $jsonData["orders"][$index10]["customer"]["segments"][$index44]["active"] = $model->orders[$index10]->customer->segments[$index44]->active;
}

if (0 === \count($jsonData["orders"][$index10]["customer"]["segments"][$index44])) {
    $jsonData["orders"][$index10]["customer"]["segments"][$index44] = $emptyObject;
}

}

}
if (null !== $model->orders[$index10]->customer->maturationTime) {
    $jsonData["orders"][$index10]["customer"]["maturationTime"] = $model->orders[$index10]->customer->maturationTime;
}
if (null !== $model->orders[$index10]->customer->firstName) {
    $jsonData["orders"][$index10]["customer"]["firstName"] = $model->orders[$index10]->customer->firstName;
}
if (null !== $model->orders[$index10]->customer->lastName) {
    $jsonData["orders"][$index10]["customer"]["lastName"] = $model->orders[$index10]->customer->lastName;
}
if (null !== $model->orders[$index10]->customer->patronymic) {
    $jsonData["orders"][$index10]["customer"]["patronymic"] = $model->orders[$index10]->customer->patronymic;
}
if (null !== $model->orders[$index10]->customer->sex) {
    $jsonData["orders"][$index10]["customer"]["sex"] = $model->orders[$index10]->customer->sex;
}
if (null !== $model->orders[$index10]->customer->presumableSex) {
    $jsonData["orders"][$index10]["customer"]["presumableSex"] = $model->orders[$index10]->customer->presumableSex;
}
if (null !== $model->orders[$index10]->customer->email) {
    $jsonData["orders"][$index10]["customer"]["email"] = $model->orders[$index10]->customer->email;
}
if (null !== $model->orders[$index10]->customer->emailMarketingUnsubscribedAt) {
    $jsonData["orders"][$index10]["customer"]["emailMarketingUnsubscribedAt"] = $model->orders[$index10]->customer->emailMarketingUnsubscribedAt->format('Y-m-d H:i:s');;
}
if (null !== $model->orders[$index10]->customer->phones) {
    $jsonData["orders"][$index10]["customer"]["phones"] = [];
foreach (array_keys($model->orders[$index10]->customer->phones) as $index42) {
    $jsonData["orders"][$index10]["customer"]["phones"][$index42] = [];
if (null !== $model->orders[$index10]->customer->phones[$index42]->number) {
    $jsonData["orders"][$index10]["customer"]["phones"][$index42]["number"] = $model->orders[$index10]->customer->phones[$index42]->number;
}

if (0 === \count($jsonData["orders"][$index10]["customer"]["phones"][$index42])) {
    $jsonData["orders"][$index10]["customer"]["phones"][$index42] = $emptyObject;
}

}

}
if (null !== $model->orders[$index10]->customer->birthday) {
    $jsonData["orders"][$index10]["customer"]["birthday"] = $model->orders[$index10]->customer->birthday->format('Y-m-d H:i:s');;
}
if (null !== $model->orders[$index10]->customer->source) {
    $jsonData["orders"][$index10]["customer"]["source"] = [];
if (null !== $model->orders[$index10]->customer->source->source) {
    $jsonData["orders"][$index10]["customer"]["source"]["source"] = $model->orders[$index10]->customer->source->source;
}
if (null !== $model->orders[$index10]->customer->source->medium) {
    $jsonData["orders"][$index10]["customer"]["source"]["medium"] = $model->orders[$index10]->customer->source->medium;
}
if (null !== $model->orders[$index10]->customer->source->campaign) {
    $jsonData["orders"][$index10]["customer"]["source"]["campaign"] = $model->orders[$index10]->customer->source->campaign;
}
if (null !== $model->orders[$index10]->customer->source->keyword) {
    $jsonData["orders"][$index10]["customer"]["source"]["keyword"] = $model->orders[$index10]->customer->source->keyword;
}
if (null !== $model->orders[$index10]->customer->source->content) {
    $jsonData["orders"][$index10]["customer"]["source"]["content"] = $model->orders[$index10]->customer->source->content;
}

if (0 === \count($jsonData["orders"][$index10]["customer"]["source"])) {
    $jsonData["orders"][$index10]["customer"]["source"] = $emptyObject;
}

}
if (null !== $model->orders[$index10]->customer->photoUrl) {
    $jsonData["orders"][$index10]["customer"]["photoUrl"] = $model->orders[$index10]->customer->photoUrl;
}
if (null !== $model->orders[$index10]->customer->mgCustomerId) {
    $jsonData["orders"][$index10]["customer"]["mgCustomerId"] = $model->orders[$index10]->customer->mgCustomerId;
}
if (null !== $model->orders[$index10]->customer->subscribed) {
    $jsonData["orders"][$index10]["customer"]["subscribed"] = $model->orders[$index10]->customer->subscribed;
}

if (0 === \count($jsonData["orders"][$index10]["customer"])) {
    $jsonData["orders"][$index10]["customer"] = $emptyObject;
}

} elseif ($model->orders[$index10]->customer instanceof \RetailCrm\Api\Model\Entity\CustomersCorporate\CustomerCorporate) {
    $jsonData["orders"][$index10]["customer"] = [];
if (null !== $model->orders[$index10]->customer->type) {
    $jsonData["orders"][$index10]["customer"]["type"] = $model->orders[$index10]->customer->type;
}
if (null !== $model->orders[$index10]->customer->id) {
    $jsonData["orders"][$index10]["customer"]["id"] = $model->orders[$index10]->customer->id;
}
if (null !== $model->orders[$index10]->customer->externalId) {
    $jsonData["orders"][$index10]["customer"]["externalId"] = $model->orders[$index10]->customer->externalId;
}
if (null !== $model->orders[$index10]->customer->nickName) {
    $jsonData["orders"][$index10]["customer"]["nickName"] = $model->orders[$index10]->customer->nickName;
}
if (null !== $model->orders[$index10]->customer->mainAddress) {
    $jsonData["orders"][$index10]["customer"]["mainAddress"] = [];
if (null !== $model->orders[$index10]->customer->mainAddress->id) {
    $jsonData["orders"][$index10]["customer"]["mainAddress"]["id"] = $model->orders[$index10]->customer->mainAddress->id;
}
if (null !== $model->orders[$index10]->customer->mainAddress->externalId) {
    $jsonData["orders"][$index10]["customer"]["mainAddress"]["externalId"] = $model->orders[$index10]->customer->mainAddress->externalId;
}
if (null !== $model->orders[$index10]->customer->mainAddress->name) {
    $jsonData["orders"][$index10]["customer"]["mainAddress"]["name"] = $model->orders[$index10]->customer->mainAddress->name;
}

if (0 === \count($jsonData["orders"][$index10]["customer"]["mainAddress"])) {
    $jsonData["orders"][$index10]["customer"]["mainAddress"] = $emptyObject;
}

}
if (null !== $model->orders[$index10]->customer->createdAt) {
    $jsonData["orders"][$index10]["customer"]["createdAt"] = $model->orders[$index10]->customer->createdAt->format('Y-m-d H:i:s');;
}
if (null !== $model->orders[$index10]->customer->managerId) {
    $jsonData["orders"][$index10]["customer"]["managerId"] = $model->orders[$index10]->customer->managerId;
}
if (null !== $model->orders[$index10]->customer->source) {
    $jsonData["orders"][$index10]["customer"]["source"] = [];
if (null !== $model->orders[$index10]->customer->source->source) {
    $jsonData["orders"][$index10]["customer"]["source"]["source"] = $model->orders[$index10]->customer->source->source;
}
if (null !== $model->orders[$index10]->customer->source->medium) {
    $jsonData["orders"][$index10]["customer"]["source"]["medium"] = $model->orders[$index10]->customer->source->medium;
}
if (null !== $model->orders[$index10]->customer->source->campaign) {
    $jsonData["orders"][$index10]["customer"]["source"]["campaign"] = $model->orders[$index10]->customer->source->campaign;
}
if (null !== $model->orders[$index10]->customer->source->keyword) {
    $jsonData["orders"][$index10]["customer"]["source"]["keyword"] = $model->orders[$index10]->customer->source->keyword;
}
if (null !== $model->orders[$index10]->customer->source->content) {
    $jsonData["orders"][$index10]["customer"]["source"]["content"] = $model->orders[$index10]->customer->source->content;
}

if (0 === \count($jsonData["orders"][$index10]["customer"]["source"])) {
    $jsonData["orders"][$index10]["customer"]["source"] = $emptyObject;
}

}
if (null !== $model->orders[$index10]->customer->customerContacts) {
    $jsonData["orders"][$index10]["customer"]["customerContacts"] = [];
foreach (array_keys($model->orders[$index10]->customer->customerContacts) as $index52) {
    $jsonData["orders"][$index10]["customer"]["customerContacts"][$index52] = [];
if (null !== $model->orders[$index10]->customer->customerContacts[$index52]->id) {
    $jsonData["orders"][$index10]["customer"]["customerContacts"][$index52]["id"] = $model->orders[$index10]->customer->customerContacts[$index52]->id;
}
if (null !== $model->orders[$index10]->customer->customerContacts[$index52]->isMain) {
    $jsonData["orders"][$index10]["customer"]["customerContacts"][$index52]["isMain"] = $model->orders[$index10]->customer->customerContacts[$index52]->isMain;
}
if (null !== $model->orders[$index10]->customer->customerContacts[$index52]->customer) {
    $jsonData["orders"][$index10]["customer"]["customerContacts"][$index52]["customer"] = [];
if (null !== $model->orders[$index10]->customer->customerContacts[$index52]->customer->id) {
    $jsonData["orders"][$index10]["customer"]["customerContacts"][$index52]["customer"]["id"] = $model->orders[$index10]->customer->customerContacts[$index52]->customer->id;
}
if (null !== $model->orders[$index10]->customer->customerContacts[$index52]->customer->externalId) {
    $jsonData["orders"][$index10]["customer"]["customerContacts"][$index52]["customer"]["externalId"] = $model->orders[$index10]->customer->customerContacts[$index52]->customer->externalId;
}
if (null !== $model->orders[$index10]->customer->customerContacts[$index52]->customer->browserId) {
    $jsonData["orders"][$index10]["customer"]["customerContacts"][$index52]["customer"]["browserId"] = $model->orders[$index10]->customer->customerContacts[$index52]->customer->browserId;
}
if (null !== $model->orders[$index10]->customer->customerContacts[$index52]->customer->site) {
    $jsonData["orders"][$index10]["customer"]["customerContacts"][$index52]["customer"]["site"] = $model->orders[$index10]->customer->customerContacts[$index52]->customer->site;
}
if (null !== $model->orders[$index10]->customer->customerContacts[$index52]->customer->companies) {
    $jsonData["orders"][$index10]["customer"]["customerContacts"][$index52]["customer"]["companies"] = [];
foreach (array_keys($model->orders[$index10]->customer->customerContacts[$index52]->customer->companies) as $index87) {
    $jsonData["orders"][$index10]["customer"]["customerContacts"][$index52]["customer"]["companies"][$index87] = [];
if (null !== $model->orders[$index10]->customer->customerContacts[$index52]->customer->companies[$index87]->id) {
    $jsonData["orders"][$index10]["customer"]["customerContacts"][$index52]["customer"]["companies"][$index87]["id"] = $model->orders[$index10]->customer->customerContacts[$index52]->customer->companies[$index87]->id;
}
if (null !== $model->orders[$index10]->customer->customerContacts[$index52]->customer->companies[$index87]->externalId) {
    $jsonData["orders"][$index10]["customer"]["customerContacts"][$index52]["customer"]["companies"][$index87]["externalId"] = $model->orders[$index10]->customer->customerContacts[$index52]->customer->companies[$index87]->externalId;
}
if (null !== $model->orders[$index10]->customer->customerContacts[$index52]->customer->companies[$index87]->company) {
    $jsonData["orders"][$index10]["customer"]["customerContacts"][$index52]["customer"]["companies"][$index87]["company"] = [];
if (null !== $model->orders[$index10]->customer->customerContacts[$index52]->customer->companies[$index87]->company->id) {
    $jsonData["orders"][$index10]["customer"]["customerContacts"][$index52]["customer"]["companies"][$index87]["company"]["id"] = $model->orders[$index10]->customer->customerContacts[$index52]->customer->companies[$index87]->company->id;
}
if (null !== $model->orders[$index10]->customer->customerContacts[$index52]->customer->companies[$index87]->company->externalId) {
    $jsonData["orders"][$index10]["customer"]["customerContacts"][$index52]["customer"]["companies"][$index87]["company"]["externalId"] = $model->orders[$index10]->customer->customerContacts[$index52]->customer->companies[$index87]->company->externalId;
}
if (null !== $model->orders[$index10]->customer->customerContacts[$index52]->customer->companies[$index87]->company->name) {
    $jsonData["orders"][$index10]["customer"]["customerContacts"][$index52]["customer"]["companies"][$index87]["company"]["name"] = $model->orders[$index10]->customer->customerContacts[$index52]->customer->companies[$index87]->company->name;
}

if (0 === \count($jsonData["orders"][$index10]["customer"]["customerContacts"][$index52]["customer"]["companies"][$index87]["company"])) {
    $jsonData["orders"][$index10]["customer"]["customerContacts"][$index52]["customer"]["companies"][$index87]["company"] = $emptyObject;
}

}

if (0 === \count($jsonData["orders"][$index10]["customer"]["customerContacts"][$index52]["customer"]["companies"][$index87])) {
    $jsonData["orders"][$index10]["customer"]["customerContacts"][$index52]["customer"]["companies"][$index87] = $emptyObject;
}

}

}

if (0 === \count($jsonData["orders"][$index10]["customer"]["customerContacts"][$index52]["customer"])) {
    $jsonData["orders"][$index10]["customer"]["customerContacts"][$index52]["customer"] = $emptyObject;
}

}
if (null !== $model->orders[$index10]->customer->customerContacts[$index52]->companies) {
    $jsonData["orders"][$index10]["customer"]["customerContacts"][$index52]["companies"] = [];
foreach (array_keys($model->orders[$index10]->customer->customerContacts[$index52]->companies) as $index75) {
    $jsonData["orders"][$index10]["customer"]["customerContacts"][$index52]["companies"][$index75] = [];
if (null !== $model->orders[$index10]->customer->customerContacts[$index52]->companies[$index75]->id) {
    $jsonData["orders"][$index10]["customer"]["customerContacts"][$index52]["companies"][$index75]["id"] = $model->orders[$index10]->customer->customerContacts[$index52]->companies[$index75]->id;
}
if (null !== $model->orders[$index10]->customer->customerContacts[$index52]->companies[$index75]->externalId) {
    $jsonData["orders"][$index10]["customer"]["customerContacts"][$index52]["companies"][$index75]["externalId"] = $model->orders[$index10]->customer->customerContacts[$index52]->companies[$index75]->externalId;
}
if (null !== $model->orders[$index10]->customer->customerContacts[$index52]->companies[$index75]->company) {
    $jsonData["orders"][$index10]["customer"]["customerContacts"][$index52]["companies"][$index75]["company"] = [];
if (null !== $model->orders[$index10]->customer->customerContacts[$index52]->companies[$index75]->company->id) {
    $jsonData["orders"][$index10]["customer"]["customerContacts"][$index52]["companies"][$index75]["company"]["id"] = $model->orders[$index10]->customer->customerContacts[$index52]->companies[$index75]->company->id;
}
if (null !== $model->orders[$index10]->customer->customerContacts[$index52]->companies[$index75]->company->externalId) {
    $jsonData["orders"][$index10]["customer"]["customerContacts"][$index52]["companies"][$index75]["company"]["externalId"] = $model->orders[$index10]->customer->customerContacts[$index52]->companies[$index75]->company->externalId;
}
if (null !== $model->orders[$index10]->customer->customerContacts[$index52]->companies[$index75]->company->name) {
    $jsonData["orders"][$index10]["customer"]["customerContacts"][$index52]["companies"][$index75]["company"]["name"] = $model->orders[$index10]->customer->customerContacts[$index52]->companies[$index75]->company->name;
}

if (0 === \count($jsonData["orders"][$index10]["customer"]["customerContacts"][$index52]["companies"][$index75]["company"])) {
    $jsonData["orders"][$index10]["customer"]["customerContacts"][$index52]["companies"][$index75]["company"] = $emptyObject;
}

}

if (0 === \count($jsonData["orders"][$index10]["customer"]["customerContacts"][$index52]["companies"][$index75])) {
    $jsonData["orders"][$index10]["customer"]["customerContacts"][$index52]["companies"][$index75] = $emptyObject;
}

}

}

if (0 === \count($jsonData["orders"][$index10]["customer"]["customerContacts"][$index52])) {
    $jsonData["orders"][$index10]["customer"]["customerContacts"][$index52] = $emptyObject;
}

}

}
if (null !== $model->orders[$index10]->customer->companies) {
    $jsonData["orders"][$index10]["customer"]["companies"] = [];
foreach (array_keys($model->orders[$index10]->customer->companies) as $index45) {
    $jsonData["orders"][$index10]["customer"]["companies"][$index45] = [];
if (null !== $model->orders[$index10]->customer->companies[$index45]->id) {
    $jsonData["orders"][$index10]["customer"]["companies"][$index45]["id"] = $model->orders[$index10]->customer->companies[$index45]->id;
}
if (null !== $model->orders[$index10]->customer->companies[$index45]->isMain) {
    $jsonData["orders"][$index10]["customer"]["companies"][$index45]["isMain"] = $model->orders[$index10]->customer->companies[$index45]->isMain;
}
if (null !== $model->orders[$index10]->customer->companies[$index45]->externalId) {
    $jsonData["orders"][$index10]["customer"]["companies"][$index45]["externalId"] = $model->orders[$index10]->customer->companies[$index45]->externalId;
}
if (null !== $model->orders[$index10]->customer->companies[$index45]->active) {
    $jsonData["orders"][$index10]["customer"]["companies"][$index45]["active"] = $model->orders[$index10]->customer->companies[$index45]->active;
}
if (null !== $model->orders[$index10]->customer->companies[$index45]->name) {
    $jsonData["orders"][$index10]["customer"]["companies"][$index45]["name"] = $model->orders[$index10]->customer->companies[$index45]->name;
}
if (null !== $model->orders[$index10]->customer->companies[$index45]->brand) {
    $jsonData["orders"][$index10]["customer"]["companies"][$index45]["brand"] = $model->orders[$index10]->customer->companies[$index45]->brand;
}
if (null !== $model->orders[$index10]->customer->companies[$index45]->site) {
    $jsonData["orders"][$index10]["customer"]["companies"][$index45]["site"] = $model->orders[$index10]->customer->companies[$index45]->site;
}
if (null !== $model->orders[$index10]->customer->companies[$index45]->createdAt) {
    $jsonData["orders"][$index10]["customer"]["companies"][$index45]["createdAt"] = $model->orders[$index10]->customer->companies[$index45]->createdAt->format('Y-m-d H:i:s');;
}
if (null !== $model->orders[$index10]->customer->companies[$index45]->customer) {
    $jsonData["orders"][$index10]["customer"]["companies"][$index45]["customer"] = [];
if (null !== $model->orders[$index10]->customer->companies[$index45]->customer->site) {
    $jsonData["orders"][$index10]["customer"]["companies"][$index45]["customer"]["site"] = $model->orders[$index10]->customer->companies[$index45]->customer->site;
}
if (null !== $model->orders[$index10]->customer->companies[$index45]->customer->id) {
    $jsonData["orders"][$index10]["customer"]["companies"][$index45]["customer"]["id"] = $model->orders[$index10]->customer->companies[$index45]->customer->id;
}
if (null !== $model->orders[$index10]->customer->companies[$index45]->customer->externalId) {
    $jsonData["orders"][$index10]["customer"]["companies"][$index45]["customer"]["externalId"] = $model->orders[$index10]->customer->companies[$index45]->customer->externalId;
}
if (null !== $model->orders[$index10]->customer->companies[$index45]->customer->type) {
    $jsonData["orders"][$index10]["customer"]["companies"][$index45]["customer"]["type"] = $model->orders[$index10]->customer->companies[$index45]->customer->type;
}

if (0 === \count($jsonData["orders"][$index10]["customer"]["companies"][$index45]["customer"])) {
    $jsonData["orders"][$index10]["customer"]["companies"][$index45]["customer"] = $emptyObject;
}

}
if (null !== $model->orders[$index10]->customer->companies[$index45]->contragent) {
    $jsonData["orders"][$index10]["customer"]["companies"][$index45]["contragent"] = [];
if (null !== $model->orders[$index10]->customer->companies[$index45]->contragent->contragentType) {
    $jsonData["orders"][$index10]["customer"]["companies"][$index45]["contragent"]["contragentType"] = $model->orders[$index10]->customer->companies[$index45]->contragent->contragentType;
}
if (null !== $model->orders[$index10]->customer->companies[$index45]->contragent->legalName) {
    $jsonData["orders"][$index10]["customer"]["companies"][$index45]["contragent"]["legalName"] = $model->orders[$index10]->customer->companies[$index45]->contragent->legalName;
}
if (null !== $model->orders[$index10]->customer->companies[$index45]->contragent->legalAddress) {
    $jsonData["orders"][$index10]["customer"]["companies"][$index45]["contragent"]["legalAddress"] = $model->orders[$index10]->customer->companies[$index45]->contragent->legalAddress;
}
if (null !== $model->orders[$index10]->customer->companies[$index45]->contragent->INN) {
    $jsonData["orders"][$index10]["customer"]["companies"][$index45]["contragent"]["INN"] = $model->orders[$index10]->customer->companies[$index45]->contragent->INN;
}
if (null !== $model->orders[$index10]->customer->companies[$index45]->contragent->OKPO) {
    $jsonData["orders"][$index10]["customer"]["companies"][$index45]["contragent"]["OKPO"] = $model->orders[$index10]->customer->companies[$index45]->contragent->OKPO;
}
if (null !== $model->orders[$index10]->customer->companies[$index45]->contragent->KPP) {
    $jsonData["orders"][$index10]["customer"]["companies"][$index45]["contragent"]["KPP"] = $model->orders[$index10]->customer->companies[$index45]->contragent->KPP;
}
if (null !== $model->orders[$index10]->customer->companies[$index45]->contragent->OGRN) {
    $jsonData["orders"][$index10]["customer"]["companies"][$index45]["contragent"]["OGRN"] = $model->orders[$index10]->customer->companies[$index45]->contragent->OGRN;
}
if (null !== $model->orders[$index10]->customer->companies[$index45]->contragent->OGRNIP) {
    $jsonData["orders"][$index10]["customer"]["companies"][$index45]["contragent"]["OGRNIP"] = $model->orders[$index10]->customer->companies[$index45]->contragent->OGRNIP;
}
if (null !== $model->orders[$index10]->customer->companies[$index45]->contragent->certificateNumber) {
    $jsonData["orders"][$index10]["customer"]["companies"][$index45]["contragent"]["certificateNumber"] = $model->orders[$index10]->customer->companies[$index45]->contragent->certificateNumber;
}
if (null !== $model->orders[$index10]->customer->companies[$index45]->contragent->certificateDate) {
    $jsonData["orders"][$index10]["customer"]["companies"][$index45]["contragent"]["certificateDate"] = $model->orders[$index10]->customer->companies[$index45]->contragent->certificateDate->format('Y-m-d H:i:s');;
}
if (null !== $model->orders[$index10]->customer->companies[$index45]->contragent->BIK) {
    $jsonData["orders"][$index10]["customer"]["companies"][$index45]["contragent"]["BIK"] = $model->orders[$index10]->customer->companies[$index45]->contragent->BIK;
}
if (null !== $model->orders[$index10]->customer->companies[$index45]->contragent->bank) {
    $jsonData["orders"][$index10]["customer"]["companies"][$index45]["contragent"]["bank"] = $model->orders[$index10]->customer->companies[$index45]->contragent->bank;
}
if (null !== $model->orders[$index10]->customer->companies[$index45]->contragent->bankAddress) {
    $jsonData["orders"][$index10]["customer"]["companies"][$index45]["contragent"]["bankAddress"] = $model->orders[$index10]->customer->companies[$index45]->contragent->bankAddress;
}
if (null !== $model->orders[$index10]->customer->companies[$index45]->contragent->corrAccount) {
    $jsonData["orders"][$index10]["customer"]["companies"][$index45]["contragent"]["corrAccount"] = $model->orders[$index10]->customer->companies[$index45]->contragent->corrAccount;
}
if (null !== $model->orders[$index10]->customer->companies[$index45]->contragent->bankAccount) {
    $jsonData["orders"][$index10]["customer"]["companies"][$index45]["contragent"]["bankAccount"] = $model->orders[$index10]->customer->companies[$index45]->contragent->bankAccount;
}

if (0 === \count($jsonData["orders"][$index10]["customer"]["companies"][$index45]["contragent"])) {
    $jsonData["orders"][$index10]["customer"]["companies"][$index45]["contragent"] = $emptyObject;
}

}
if (null !== $model->orders[$index10]->customer->companies[$index45]->address) {
    $jsonData["orders"][$index10]["customer"]["companies"][$index45]["address"] = [];
if (null !== $model->orders[$index10]->customer->companies[$index45]->address->id) {
    $jsonData["orders"][$index10]["customer"]["companies"][$index45]["address"]["id"] = $model->orders[$index10]->customer->companies[$index45]->address->id;
}
if (null !== $model->orders[$index10]->customer->companies[$index45]->address->name) {
    $jsonData["orders"][$index10]["customer"]["companies"][$index45]["address"]["name"] = $model->orders[$index10]->customer->companies[$index45]->address->name;
}
if (null !== $model->orders[$index10]->customer->companies[$index45]->address->isMain) {
    $jsonData["orders"][$index10]["customer"]["companies"][$index45]["address"]["isMain"] = $model->orders[$index10]->customer->companies[$index45]->address->isMain;
}
if (null !== $model->orders[$index10]->customer->companies[$index45]->address->index) {
    $jsonData["orders"][$index10]["customer"]["companies"][$index45]["address"]["index"] = $model->orders[$index10]->customer->companies[$index45]->address->index;
}
if (null !== $model->orders[$index10]->customer->companies[$index45]->address->countryIso) {
    $jsonData["orders"][$index10]["customer"]["companies"][$index45]["address"]["countryIso"] = $model->orders[$index10]->customer->companies[$index45]->address->countryIso;
}
if (null !== $model->orders[$index10]->customer->companies[$index45]->address->region) {
    $jsonData["orders"][$index10]["customer"]["companies"][$index45]["address"]["region"] = $model->orders[$index10]->customer->companies[$index45]->address->region;
}
if (null !== $model->orders[$index10]->customer->companies[$index45]->address->regionId) {
    $jsonData["orders"][$index10]["customer"]["companies"][$index45]["address"]["regionId"] = $model->orders[$index10]->customer->companies[$index45]->address->regionId;
}
if (null !== $model->orders[$index10]->customer->companies[$index45]->address->city) {
    $jsonData["orders"][$index10]["customer"]["companies"][$index45]["address"]["city"] = $model->orders[$index10]->customer->companies[$index45]->address->city;
}
if (null !== $model->orders[$index10]->customer->companies[$index45]->address->cityId) {
    $jsonData["orders"][$index10]["customer"]["companies"][$index45]["address"]["cityId"] = $model->orders[$index10]->customer->companies[$index45]->address->cityId;
}
if (null !== $model->orders[$index10]->customer->companies[$index45]->address->cityType) {
    $jsonData["orders"][$index10]["customer"]["companies"][$index45]["address"]["cityType"] = $model->orders[$index10]->customer->companies[$index45]->address->cityType;
}
if (null !== $model->orders[$index10]->customer->companies[$index45]->address->street) {
    $jsonData["orders"][$index10]["customer"]["companies"][$index45]["address"]["street"] = $model->orders[$index10]->customer->companies[$index45]->address->street;
}
if (null !== $model->orders[$index10]->customer->companies[$index45]->address->streetId) {
    $jsonData["orders"][$index10]["customer"]["companies"][$index45]["address"]["streetId"] = $model->orders[$index10]->customer->companies[$index45]->address->streetId;
}
if (null !== $model->orders[$index10]->customer->companies[$index45]->address->streetType) {
    $jsonData["orders"][$index10]["customer"]["companies"][$index45]["address"]["streetType"] = $model->orders[$index10]->customer->companies[$index45]->address->streetType;
}
if (null !== $model->orders[$index10]->customer->companies[$index45]->address->building) {
    $jsonData["orders"][$index10]["customer"]["companies"][$index45]["address"]["building"] = $model->orders[$index10]->customer->companies[$index45]->address->building;
}
if (null !== $model->orders[$index10]->customer->companies[$index45]->address->flat) {
    $jsonData["orders"][$index10]["customer"]["companies"][$index45]["address"]["flat"] = $model->orders[$index10]->customer->companies[$index45]->address->flat;
}
if (null !== $model->orders[$index10]->customer->companies[$index45]->address->floor) {
    $jsonData["orders"][$index10]["customer"]["companies"][$index45]["address"]["floor"] = $model->orders[$index10]->customer->companies[$index45]->address->floor;
}
if (null !== $model->orders[$index10]->customer->companies[$index45]->address->block) {
    $jsonData["orders"][$index10]["customer"]["companies"][$index45]["address"]["block"] = $model->orders[$index10]->customer->companies[$index45]->address->block;
}
if (null !== $model->orders[$index10]->customer->companies[$index45]->address->house) {
    $jsonData["orders"][$index10]["customer"]["companies"][$index45]["address"]["house"] = $model->orders[$index10]->customer->companies[$index45]->address->house;
}
if (null !== $model->orders[$index10]->customer->companies[$index45]->address->housing) {
    $jsonData["orders"][$index10]["customer"]["companies"][$index45]["address"]["housing"] = $model->orders[$index10]->customer->companies[$index45]->address->housing;
}
if (null !== $model->orders[$index10]->customer->companies[$index45]->address->metro) {
    $jsonData["orders"][$index10]["customer"]["companies"][$index45]["address"]["metro"] = $model->orders[$index10]->customer->companies[$index45]->address->metro;
}
if (null !== $model->orders[$index10]->customer->companies[$index45]->address->notes) {
    $jsonData["orders"][$index10]["customer"]["companies"][$index45]["address"]["notes"] = $model->orders[$index10]->customer->companies[$index45]->address->notes;
}
if (null !== $model->orders[$index10]->customer->companies[$index45]->address->text) {
    $jsonData["orders"][$index10]["customer"]["companies"][$index45]["address"]["text"] = $model->orders[$index10]->customer->companies[$index45]->address->text;
}
if (null !== $model->orders[$index10]->customer->companies[$index45]->address->externalId) {
    $jsonData["orders"][$index10]["customer"]["companies"][$index45]["address"]["externalId"] = $model->orders[$index10]->customer->companies[$index45]->address->externalId;
}

if (0 === \count($jsonData["orders"][$index10]["customer"]["companies"][$index45]["address"])) {
    $jsonData["orders"][$index10]["customer"]["companies"][$index45]["address"] = $emptyObject;
}

}
if (null !== $model->orders[$index10]->customer->companies[$index45]->customFields) {
    $jsonData["orders"][$index10]["customer"]["companies"][$index45]["customFields"] = [];
foreach (array_keys($model->orders[$index10]->customer->companies[$index45]->customFields) as $index71) {
    $jsonData["orders"][$index10]["customer"]["companies"][$index45]["customFields"] = $model->orders[$index10]->customer->companies[$index45]->customFields;
}

}
if (null !== $model->orders[$index10]->customer->companies[$index45]->marginSumm) {
    $jsonData["orders"][$index10]["customer"]["companies"][$index45]["marginSumm"] = $model->orders[$index10]->customer->companies[$index45]->marginSumm;
}
if (null !== $model->orders[$index10]->customer->companies[$index45]->totalSumm) {
    $jsonData["orders"][$index10]["customer"]["companies"][$index45]["totalSumm"] = $model->orders[$index10]->customer->companies[$index45]->totalSumm;
}
if (null !== $model->orders[$index10]->customer->companies[$index45]->averageSumm) {
    $jsonData["orders"][$index10]["customer"]["companies"][$index45]["averageSumm"] = $model->orders[$index10]->customer->companies[$index45]->averageSumm;
}
if (null !== $model->orders[$index10]->customer->companies[$index45]->ordersCount) {
    $jsonData["orders"][$index10]["customer"]["companies"][$index45]["ordersCount"] = $model->orders[$index10]->customer->companies[$index45]->ordersCount;
}
if (null !== $model->orders[$index10]->customer->companies[$index45]->costSumm) {
    $jsonData["orders"][$index10]["customer"]["companies"][$index45]["costSumm"] = $model->orders[$index10]->customer->companies[$index45]->costSumm;
}

if (0 === \count($jsonData["orders"][$index10]["customer"]["companies"][$index45])) {
    $jsonData["orders"][$index10]["customer"]["companies"][$index45] = $emptyObject;
}

}

}
if (null !== $model->orders[$index10]->customer->addresses) {
    $jsonData["orders"][$index10]["customer"]["addresses"] = [];
foreach (array_keys($model->orders[$index10]->customer->addresses) as $index45) {
    $jsonData["orders"][$index10]["customer"]["addresses"][$index45] = [];
if (null !== $model->orders[$index10]->customer->addresses[$index45]->id) {
    $jsonData["orders"][$index10]["customer"]["addresses"][$index45]["id"] = $model->orders[$index10]->customer->addresses[$index45]->id;
}
if (null !== $model->orders[$index10]->customer->addresses[$index45]->name) {
    $jsonData["orders"][$index10]["customer"]["addresses"][$index45]["name"] = $model->orders[$index10]->customer->addresses[$index45]->name;
}
if (null !== $model->orders[$index10]->customer->addresses[$index45]->isMain) {
    $jsonData["orders"][$index10]["customer"]["addresses"][$index45]["isMain"] = $model->orders[$index10]->customer->addresses[$index45]->isMain;
}
if (null !== $model->orders[$index10]->customer->addresses[$index45]->index) {
    $jsonData["orders"][$index10]["customer"]["addresses"][$index45]["index"] = $model->orders[$index10]->customer->addresses[$index45]->index;
}
if (null !== $model->orders[$index10]->customer->addresses[$index45]->countryIso) {
    $jsonData["orders"][$index10]["customer"]["addresses"][$index45]["countryIso"] = $model->orders[$index10]->customer->addresses[$index45]->countryIso;
}
if (null !== $model->orders[$index10]->customer->addresses[$index45]->region) {
    $jsonData["orders"][$index10]["customer"]["addresses"][$index45]["region"] = $model->orders[$index10]->customer->addresses[$index45]->region;
}
if (null !== $model->orders[$index10]->customer->addresses[$index45]->regionId) {
    $jsonData["orders"][$index10]["customer"]["addresses"][$index45]["regionId"] = $model->orders[$index10]->customer->addresses[$index45]->regionId;
}
if (null !== $model->orders[$index10]->customer->addresses[$index45]->city) {
    $jsonData["orders"][$index10]["customer"]["addresses"][$index45]["city"] = $model->orders[$index10]->customer->addresses[$index45]->city;
}
if (null !== $model->orders[$index10]->customer->addresses[$index45]->cityId) {
    $jsonData["orders"][$index10]["customer"]["addresses"][$index45]["cityId"] = $model->orders[$index10]->customer->addresses[$index45]->cityId;
}
if (null !== $model->orders[$index10]->customer->addresses[$index45]->cityType) {
    $jsonData["orders"][$index10]["customer"]["addresses"][$index45]["cityType"] = $model->orders[$index10]->customer->addresses[$index45]->cityType;
}
if (null !== $model->orders[$index10]->customer->addresses[$index45]->street) {
    $jsonData["orders"][$index10]["customer"]["addresses"][$index45]["street"] = $model->orders[$index10]->customer->addresses[$index45]->street;
}
if (null !== $model->orders[$index10]->customer->addresses[$index45]->streetId) {
    $jsonData["orders"][$index10]["customer"]["addresses"][$index45]["streetId"] = $model->orders[$index10]->customer->addresses[$index45]->streetId;
}
if (null !== $model->orders[$index10]->customer->addresses[$index45]->streetType) {
    $jsonData["orders"][$index10]["customer"]["addresses"][$index45]["streetType"] = $model->orders[$index10]->customer->addresses[$index45]->streetType;
}
if (null !== $model->orders[$index10]->customer->addresses[$index45]->building) {
    $jsonData["orders"][$index10]["customer"]["addresses"][$index45]["building"] = $model->orders[$index10]->customer->addresses[$index45]->building;
}
if (null !== $model->orders[$index10]->customer->addresses[$index45]->flat) {
    $jsonData["orders"][$index10]["customer"]["addresses"][$index45]["flat"] = $model->orders[$index10]->customer->addresses[$index45]->flat;
}
if (null !== $model->orders[$index10]->customer->addresses[$index45]->floor) {
    $jsonData["orders"][$index10]["customer"]["addresses"][$index45]["floor"] = $model->orders[$index10]->customer->addresses[$index45]->floor;
}
if (null !== $model->orders[$index10]->customer->addresses[$index45]->block) {
    $jsonData["orders"][$index10]["customer"]["addresses"][$index45]["block"] = $model->orders[$index10]->customer->addresses[$index45]->block;
}
if (null !== $model->orders[$index10]->customer->addresses[$index45]->house) {
    $jsonData["orders"][$index10]["customer"]["addresses"][$index45]["house"] = $model->orders[$index10]->customer->addresses[$index45]->house;
}
if (null !== $model->orders[$index10]->customer->addresses[$index45]->housing) {
    $jsonData["orders"][$index10]["customer"]["addresses"][$index45]["housing"] = $model->orders[$index10]->customer->addresses[$index45]->housing;
}
if (null !== $model->orders[$index10]->customer->addresses[$index45]->metro) {
    $jsonData["orders"][$index10]["customer"]["addresses"][$index45]["metro"] = $model->orders[$index10]->customer->addresses[$index45]->metro;
}
if (null !== $model->orders[$index10]->customer->addresses[$index45]->notes) {
    $jsonData["orders"][$index10]["customer"]["addresses"][$index45]["notes"] = $model->orders[$index10]->customer->addresses[$index45]->notes;
}
if (null !== $model->orders[$index10]->customer->addresses[$index45]->text) {
    $jsonData["orders"][$index10]["customer"]["addresses"][$index45]["text"] = $model->orders[$index10]->customer->addresses[$index45]->text;
}
if (null !== $model->orders[$index10]->customer->addresses[$index45]->externalId) {
    $jsonData["orders"][$index10]["customer"]["addresses"][$index45]["externalId"] = $model->orders[$index10]->customer->addresses[$index45]->externalId;
}

if (0 === \count($jsonData["orders"][$index10]["customer"]["addresses"][$index45])) {
    $jsonData["orders"][$index10]["customer"]["addresses"][$index45] = $emptyObject;
}

}

}
if (null !== $model->orders[$index10]->customer->vip) {
    $jsonData["orders"][$index10]["customer"]["vip"] = $model->orders[$index10]->customer->vip;
}
if (null !== $model->orders[$index10]->customer->bad) {
    $jsonData["orders"][$index10]["customer"]["bad"] = $model->orders[$index10]->customer->bad;
}
if (null !== $model->orders[$index10]->customer->site) {
    $jsonData["orders"][$index10]["customer"]["site"] = $model->orders[$index10]->customer->site;
}
if (null !== $model->orders[$index10]->customer->tags) {
    $jsonData["orders"][$index10]["customer"]["tags"] = [];
foreach (array_keys($model->orders[$index10]->customer->tags) as $index40) {
    $jsonData["orders"][$index10]["customer"]["tags"][$index40] = $model->orders[$index10]->customer->tags[$index40]->name;
}

}
if (null !== $model->orders[$index10]->customer->avgMarginSumm) {
    $jsonData["orders"][$index10]["customer"]["avgMarginSumm"] = $model->orders[$index10]->customer->avgMarginSumm;
}
if (null !== $model->orders[$index10]->customer->marginSumm) {
    $jsonData["orders"][$index10]["customer"]["marginSumm"] = $model->orders[$index10]->customer->marginSumm;
}
if (null !== $model->orders[$index10]->customer->totalSumm) {
    $jsonData["orders"][$index10]["customer"]["totalSumm"] = $model->orders[$index10]->customer->totalSumm;
}
if (null !== $model->orders[$index10]->customer->averageSumm) {
    $jsonData["orders"][$index10]["customer"]["averageSumm"] = $model->orders[$index10]->customer->averageSumm;
}
if (null !== $model->orders[$index10]->customer->ordersCount) {
    $jsonData["orders"][$index10]["customer"]["ordersCount"] = $model->orders[$index10]->customer->ordersCount;
}
if (null !== $model->orders[$index10]->customer->costSumm) {
    $jsonData["orders"][$index10]["customer"]["costSumm"] = $model->orders[$index10]->customer->costSumm;
}
if (null !== $model->orders[$index10]->customer->customFields) {
    $jsonData["orders"][$index10]["customer"]["customFields"] = [];
foreach (array_keys($model->orders[$index10]->customer->customFields) as $index48) {
    $jsonData["orders"][$index10]["customer"]["customFields"] = $model->orders[$index10]->customer->customFields;
}

}
if (null !== $model->orders[$index10]->customer->personalDiscount) {
    $jsonData["orders"][$index10]["customer"]["personalDiscount"] = $model->orders[$index10]->customer->personalDiscount;
}
if (null !== $model->orders[$index10]->customer->cumulativeDiscount) {
    $jsonData["orders"][$index10]["customer"]["cumulativeDiscount"] = $model->orders[$index10]->customer->cumulativeDiscount;
}
if (null !== $model->orders[$index10]->customer->discountCardNumber) {
    $jsonData["orders"][$index10]["customer"]["discountCardNumber"] = $model->orders[$index10]->customer->discountCardNumber;
}
if (null !== $model->orders[$index10]->customer->firstClientId) {
    $jsonData["orders"][$index10]["customer"]["firstClientId"] = $model->orders[$index10]->customer->firstClientId;
}
if (null !== $model->orders[$index10]->customer->lastClientId) {
    $jsonData["orders"][$index10]["customer"]["lastClientId"] = $model->orders[$index10]->customer->lastClientId;
}
if (null !== $model->orders[$index10]->customer->mainCustomerContact) {
    $jsonData["orders"][$index10]["customer"]["mainCustomerContact"] = [];
if (null !== $model->orders[$index10]->customer->mainCustomerContact->id) {
    $jsonData["orders"][$index10]["customer"]["mainCustomerContact"]["id"] = $model->orders[$index10]->customer->mainCustomerContact->id;
}
if (null !== $model->orders[$index10]->customer->mainCustomerContact->isMain) {
    $jsonData["orders"][$index10]["customer"]["mainCustomerContact"]["isMain"] = $model->orders[$index10]->customer->mainCustomerContact->isMain;
}
if (null !== $model->orders[$index10]->customer->mainCustomerContact->customer) {
    $jsonData["orders"][$index10]["customer"]["mainCustomerContact"]["customer"] = [];
if (null !== $model->orders[$index10]->customer->mainCustomerContact->customer->id) {
    $jsonData["orders"][$index10]["customer"]["mainCustomerContact"]["customer"]["id"] = $model->orders[$index10]->customer->mainCustomerContact->customer->id;
}
if (null !== $model->orders[$index10]->customer->mainCustomerContact->customer->externalId) {
    $jsonData["orders"][$index10]["customer"]["mainCustomerContact"]["customer"]["externalId"] = $model->orders[$index10]->customer->mainCustomerContact->customer->externalId;
}
if (null !== $model->orders[$index10]->customer->mainCustomerContact->customer->browserId) {
    $jsonData["orders"][$index10]["customer"]["mainCustomerContact"]["customer"]["browserId"] = $model->orders[$index10]->customer->mainCustomerContact->customer->browserId;
}
if (null !== $model->orders[$index10]->customer->mainCustomerContact->customer->site) {
    $jsonData["orders"][$index10]["customer"]["mainCustomerContact"]["customer"]["site"] = $model->orders[$index10]->customer->mainCustomerContact->customer->site;
}
if (null !== $model->orders[$index10]->customer->mainCustomerContact->customer->companies) {
    $jsonData["orders"][$index10]["customer"]["mainCustomerContact"]["customer"]["companies"] = [];
foreach (array_keys($model->orders[$index10]->customer->mainCustomerContact->customer->companies) as $index80) {
    $jsonData["orders"][$index10]["customer"]["mainCustomerContact"]["customer"]["companies"][$index80] = [];
if (null !== $model->orders[$index10]->customer->mainCustomerContact->customer->companies[$index80]->id) {
    $jsonData["orders"][$index10]["customer"]["mainCustomerContact"]["customer"]["companies"][$index80]["id"] = $model->orders[$index10]->customer->mainCustomerContact->customer->companies[$index80]->id;
}
if (null !== $model->orders[$index10]->customer->mainCustomerContact->customer->companies[$index80]->externalId) {
    $jsonData["orders"][$index10]["customer"]["mainCustomerContact"]["customer"]["companies"][$index80]["externalId"] = $model->orders[$index10]->customer->mainCustomerContact->customer->companies[$index80]->externalId;
}
if (null !== $model->orders[$index10]->customer->mainCustomerContact->customer->companies[$index80]->company) {
    $jsonData["orders"][$index10]["customer"]["mainCustomerContact"]["customer"]["companies"][$index80]["company"] = [];
if (null !== $model->orders[$index10]->customer->mainCustomerContact->customer->companies[$index80]->company->id) {
    $jsonData["orders"][$index10]["customer"]["mainCustomerContact"]["customer"]["companies"][$index80]["company"]["id"] = $model->orders[$index10]->customer->mainCustomerContact->customer->companies[$index80]->company->id;
}
if (null !== $model->orders[$index10]->customer->mainCustomerContact->customer->companies[$index80]->company->externalId) {
    $jsonData["orders"][$index10]["customer"]["mainCustomerContact"]["customer"]["companies"][$index80]["company"]["externalId"] = $model->orders[$index10]->customer->mainCustomerContact->customer->companies[$index80]->company->externalId;
}
if (null !== $model->orders[$index10]->customer->mainCustomerContact->customer->companies[$index80]->company->name) {
    $jsonData["orders"][$index10]["customer"]["mainCustomerContact"]["customer"]["companies"][$index80]["company"]["name"] = $model->orders[$index10]->customer->mainCustomerContact->customer->companies[$index80]->company->name;
}

if (0 === \count($jsonData["orders"][$index10]["customer"]["mainCustomerContact"]["customer"]["companies"][$index80]["company"])) {
    $jsonData["orders"][$index10]["customer"]["mainCustomerContact"]["customer"]["companies"][$index80]["company"] = $emptyObject;
}

}

if (0 === \count($jsonData["orders"][$index10]["customer"]["mainCustomerContact"]["customer"]["companies"][$index80])) {
    $jsonData["orders"][$index10]["customer"]["mainCustomerContact"]["customer"]["companies"][$index80] = $emptyObject;
}

}

}

if (0 === \count($jsonData["orders"][$index10]["customer"]["mainCustomerContact"]["customer"])) {
    $jsonData["orders"][$index10]["customer"]["mainCustomerContact"]["customer"] = $emptyObject;
}

}
if (null !== $model->orders[$index10]->customer->mainCustomerContact->companies) {
    $jsonData["orders"][$index10]["customer"]["mainCustomerContact"]["companies"] = [];
foreach (array_keys($model->orders[$index10]->customer->mainCustomerContact->companies) as $index68) {
    $jsonData["orders"][$index10]["customer"]["mainCustomerContact"]["companies"][$index68] = [];
if (null !== $model->orders[$index10]->customer->mainCustomerContact->companies[$index68]->id) {
    $jsonData["orders"][$index10]["customer"]["mainCustomerContact"]["companies"][$index68]["id"] = $model->orders[$index10]->customer->mainCustomerContact->companies[$index68]->id;
}
if (null !== $model->orders[$index10]->customer->mainCustomerContact->companies[$index68]->externalId) {
    $jsonData["orders"][$index10]["customer"]["mainCustomerContact"]["companies"][$index68]["externalId"] = $model->orders[$index10]->customer->mainCustomerContact->companies[$index68]->externalId;
}
if (null !== $model->orders[$index10]->customer->mainCustomerContact->companies[$index68]->company) {
    $jsonData["orders"][$index10]["customer"]["mainCustomerContact"]["companies"][$index68]["company"] = [];
if (null !== $model->orders[$index10]->customer->mainCustomerContact->companies[$index68]->company->id) {
    $jsonData["orders"][$index10]["customer"]["mainCustomerContact"]["companies"][$index68]["company"]["id"] = $model->orders[$index10]->customer->mainCustomerContact->companies[$index68]->company->id;
}
if (null !== $model->orders[$index10]->customer->mainCustomerContact->companies[$index68]->company->externalId) {
    $jsonData["orders"][$index10]["customer"]["mainCustomerContact"]["companies"][$index68]["company"]["externalId"] = $model->orders[$index10]->customer->mainCustomerContact->companies[$index68]->company->externalId;
}
if (null !== $model->orders[$index10]->customer->mainCustomerContact->companies[$index68]->company->name) {
    $jsonData["orders"][$index10]["customer"]["mainCustomerContact"]["companies"][$index68]["company"]["name"] = $model->orders[$index10]->customer->mainCustomerContact->companies[$index68]->company->name;
}

if (0 === \count($jsonData["orders"][$index10]["customer"]["mainCustomerContact"]["companies"][$index68]["company"])) {
    $jsonData["orders"][$index10]["customer"]["mainCustomerContact"]["companies"][$index68]["company"] = $emptyObject;
}

}

if (0 === \count($jsonData["orders"][$index10]["customer"]["mainCustomerContact"]["companies"][$index68])) {
    $jsonData["orders"][$index10]["customer"]["mainCustomerContact"]["companies"][$index68] = $emptyObject;
}

}

}

if (0 === \count($jsonData["orders"][$index10]["customer"]["mainCustomerContact"])) {
    $jsonData["orders"][$index10]["customer"]["mainCustomerContact"] = $emptyObject;
}

}
if (null !== $model->orders[$index10]->customer->mainCompany) {
    $jsonData["orders"][$index10]["customer"]["mainCompany"] = [];
if (null !== $model->orders[$index10]->customer->mainCompany->id) {
    $jsonData["orders"][$index10]["customer"]["mainCompany"]["id"] = $model->orders[$index10]->customer->mainCompany->id;
}
if (null !== $model->orders[$index10]->customer->mainCompany->externalId) {
    $jsonData["orders"][$index10]["customer"]["mainCompany"]["externalId"] = $model->orders[$index10]->customer->mainCompany->externalId;
}
if (null !== $model->orders[$index10]->customer->mainCompany->name) {
    $jsonData["orders"][$index10]["customer"]["mainCompany"]["name"] = $model->orders[$index10]->customer->mainCompany->name;
}

if (0 === \count($jsonData["orders"][$index10]["customer"]["mainCompany"])) {
    $jsonData["orders"][$index10]["customer"]["mainCompany"] = $emptyObject;
}

}

if (0 === \count($jsonData["orders"][$index10]["customer"])) {
    $jsonData["orders"][$index10]["customer"] = $emptyObject;
}

}

if (0 === \count($jsonData["orders"][$index10]["customer"])) {
    $jsonData["orders"][$index10]["customer"] = $emptyObject;
}
}
if (null !== $model->orders[$index10]->contact) {
    $jsonData["orders"][$index10]["contact"] = [];
if (null !== $model->orders[$index10]->contact->type) {
    $jsonData["orders"][$index10]["contact"]["type"] = $model->orders[$index10]->contact->type;
}
if (null !== $model->orders[$index10]->contact->id) {
    $jsonData["orders"][$index10]["contact"]["id"] = $model->orders[$index10]->contact->id;
}
if (null !== $model->orders[$index10]->contact->externalId) {
    $jsonData["orders"][$index10]["contact"]["externalId"] = $model->orders[$index10]->contact->externalId;
}
if (null !== $model->orders[$index10]->contact->isContact) {
    $jsonData["orders"][$index10]["contact"]["isContact"] = $model->orders[$index10]->contact->isContact;
}
if (null !== $model->orders[$index10]->contact->createdAt) {
    $jsonData["orders"][$index10]["contact"]["createdAt"] = $model->orders[$index10]->contact->createdAt->format('Y-m-d H:i:s');;
}
if (null !== $model->orders[$index10]->contact->managerId) {
    $jsonData["orders"][$index10]["contact"]["managerId"] = $model->orders[$index10]->contact->managerId;
}
if (null !== $model->orders[$index10]->contact->vip) {
    $jsonData["orders"][$index10]["contact"]["vip"] = $model->orders[$index10]->contact->vip;
}
if (null !== $model->orders[$index10]->contact->bad) {
    $jsonData["orders"][$index10]["contact"]["bad"] = $model->orders[$index10]->contact->bad;
}
if (null !== $model->orders[$index10]->contact->browserId) {
    $jsonData["orders"][$index10]["contact"]["browserId"] = $model->orders[$index10]->contact->browserId;
}
if (null !== $model->orders[$index10]->contact->site) {
    $jsonData["orders"][$index10]["contact"]["site"] = $model->orders[$index10]->contact->site;
}
if (null !== $model->orders[$index10]->contact->contragent) {
    $jsonData["orders"][$index10]["contact"]["contragent"] = [];
if (null !== $model->orders[$index10]->contact->contragent->contragentType) {
    $jsonData["orders"][$index10]["contact"]["contragent"]["contragentType"] = $model->orders[$index10]->contact->contragent->contragentType;
}
if (null !== $model->orders[$index10]->contact->contragent->legalName) {
    $jsonData["orders"][$index10]["contact"]["contragent"]["legalName"] = $model->orders[$index10]->contact->contragent->legalName;
}
if (null !== $model->orders[$index10]->contact->contragent->legalAddress) {
    $jsonData["orders"][$index10]["contact"]["contragent"]["legalAddress"] = $model->orders[$index10]->contact->contragent->legalAddress;
}
if (null !== $model->orders[$index10]->contact->contragent->INN) {
    $jsonData["orders"][$index10]["contact"]["contragent"]["INN"] = $model->orders[$index10]->contact->contragent->INN;
}
if (null !== $model->orders[$index10]->contact->contragent->OKPO) {
    $jsonData["orders"][$index10]["contact"]["contragent"]["OKPO"] = $model->orders[$index10]->contact->contragent->OKPO;
}
if (null !== $model->orders[$index10]->contact->contragent->KPP) {
    $jsonData["orders"][$index10]["contact"]["contragent"]["KPP"] = $model->orders[$index10]->contact->contragent->KPP;
}
if (null !== $model->orders[$index10]->contact->contragent->OGRN) {
    $jsonData["orders"][$index10]["contact"]["contragent"]["OGRN"] = $model->orders[$index10]->contact->contragent->OGRN;
}
if (null !== $model->orders[$index10]->contact->contragent->OGRNIP) {
    $jsonData["orders"][$index10]["contact"]["contragent"]["OGRNIP"] = $model->orders[$index10]->contact->contragent->OGRNIP;
}
if (null !== $model->orders[$index10]->contact->contragent->certificateNumber) {
    $jsonData["orders"][$index10]["contact"]["contragent"]["certificateNumber"] = $model->orders[$index10]->contact->contragent->certificateNumber;
}
if (null !== $model->orders[$index10]->contact->contragent->certificateDate) {
    $jsonData["orders"][$index10]["contact"]["contragent"]["certificateDate"] = $model->orders[$index10]->contact->contragent->certificateDate->format('Y-m-d H:i:s');;
}
if (null !== $model->orders[$index10]->contact->contragent->BIK) {
    $jsonData["orders"][$index10]["contact"]["contragent"]["BIK"] = $model->orders[$index10]->contact->contragent->BIK;
}
if (null !== $model->orders[$index10]->contact->contragent->bank) {
    $jsonData["orders"][$index10]["contact"]["contragent"]["bank"] = $model->orders[$index10]->contact->contragent->bank;
}
if (null !== $model->orders[$index10]->contact->contragent->bankAddress) {
    $jsonData["orders"][$index10]["contact"]["contragent"]["bankAddress"] = $model->orders[$index10]->contact->contragent->bankAddress;
}
if (null !== $model->orders[$index10]->contact->contragent->corrAccount) {
    $jsonData["orders"][$index10]["contact"]["contragent"]["corrAccount"] = $model->orders[$index10]->contact->contragent->corrAccount;
}
if (null !== $model->orders[$index10]->contact->contragent->bankAccount) {
    $jsonData["orders"][$index10]["contact"]["contragent"]["bankAccount"] = $model->orders[$index10]->contact->contragent->bankAccount;
}

if (0 === \count($jsonData["orders"][$index10]["contact"]["contragent"])) {
    $jsonData["orders"][$index10]["contact"]["contragent"] = $emptyObject;
}

}
if (null !== $model->orders[$index10]->contact->tags) {
    $jsonData["orders"][$index10]["contact"]["tags"] = [];
foreach (array_keys($model->orders[$index10]->contact->tags) as $index39) {
    $jsonData["orders"][$index10]["contact"]["tags"][$index39] = $model->orders[$index10]->contact->tags[$index39]->name;
}

}
if (null !== $model->orders[$index10]->contact->avgMarginSumm) {
    $jsonData["orders"][$index10]["contact"]["avgMarginSumm"] = $model->orders[$index10]->contact->avgMarginSumm;
}
if (null !== $model->orders[$index10]->contact->marginSumm) {
    $jsonData["orders"][$index10]["contact"]["marginSumm"] = $model->orders[$index10]->contact->marginSumm;
}
if (null !== $model->orders[$index10]->contact->totalSumm) {
    $jsonData["orders"][$index10]["contact"]["totalSumm"] = $model->orders[$index10]->contact->totalSumm;
}
if (null !== $model->orders[$index10]->contact->averageSumm) {
    $jsonData["orders"][$index10]["contact"]["averageSumm"] = $model->orders[$index10]->contact->averageSumm;
}
if (null !== $model->orders[$index10]->contact->ordersCount) {
    $jsonData["orders"][$index10]["contact"]["ordersCount"] = $model->orders[$index10]->contact->ordersCount;
}
if (null !== $model->orders[$index10]->contact->costSumm) {
    $jsonData["orders"][$index10]["contact"]["costSumm"] = $model->orders[$index10]->contact->costSumm;
}
if (null !== $model->orders[$index10]->contact->customFields) {
    $jsonData["orders"][$index10]["contact"]["customFields"] = [];
foreach (array_keys($model->orders[$index10]->contact->customFields) as $index47) {
    $jsonData["orders"][$index10]["contact"]["customFields"] = $model->orders[$index10]->contact->customFields;
}

}
if (null !== $model->orders[$index10]->contact->personalDiscount) {
    $jsonData["orders"][$index10]["contact"]["personalDiscount"] = $model->orders[$index10]->contact->personalDiscount;
}
if (null !== $model->orders[$index10]->contact->cumulativeDiscount) {
    $jsonData["orders"][$index10]["contact"]["cumulativeDiscount"] = $model->orders[$index10]->contact->cumulativeDiscount;
}
if (null !== $model->orders[$index10]->contact->discountCardNumber) {
    $jsonData["orders"][$index10]["contact"]["discountCardNumber"] = $model->orders[$index10]->contact->discountCardNumber;
}
if (null !== $model->orders[$index10]->contact->firstClientId) {
    $jsonData["orders"][$index10]["contact"]["firstClientId"] = $model->orders[$index10]->contact->firstClientId;
}
if (null !== $model->orders[$index10]->contact->lastClientId) {
    $jsonData["orders"][$index10]["contact"]["lastClientId"] = $model->orders[$index10]->contact->lastClientId;
}
if (null !== $model->orders[$index10]->contact->address) {
    $jsonData["orders"][$index10]["contact"]["address"] = [];
if (null !== $model->orders[$index10]->contact->address->id) {
    $jsonData["orders"][$index10]["contact"]["address"]["id"] = $model->orders[$index10]->contact->address->id;
}
if (null !== $model->orders[$index10]->contact->address->name) {
    $jsonData["orders"][$index10]["contact"]["address"]["name"] = $model->orders[$index10]->contact->address->name;
}
if (null !== $model->orders[$index10]->contact->address->isMain) {
    $jsonData["orders"][$index10]["contact"]["address"]["isMain"] = $model->orders[$index10]->contact->address->isMain;
}
if (null !== $model->orders[$index10]->contact->address->index) {
    $jsonData["orders"][$index10]["contact"]["address"]["index"] = $model->orders[$index10]->contact->address->index;
}
if (null !== $model->orders[$index10]->contact->address->countryIso) {
    $jsonData["orders"][$index10]["contact"]["address"]["countryIso"] = $model->orders[$index10]->contact->address->countryIso;
}
if (null !== $model->orders[$index10]->contact->address->region) {
    $jsonData["orders"][$index10]["contact"]["address"]["region"] = $model->orders[$index10]->contact->address->region;
}
if (null !== $model->orders[$index10]->contact->address->regionId) {
    $jsonData["orders"][$index10]["contact"]["address"]["regionId"] = $model->orders[$index10]->contact->address->regionId;
}
if (null !== $model->orders[$index10]->contact->address->city) {
    $jsonData["orders"][$index10]["contact"]["address"]["city"] = $model->orders[$index10]->contact->address->city;
}
if (null !== $model->orders[$index10]->contact->address->cityId) {
    $jsonData["orders"][$index10]["contact"]["address"]["cityId"] = $model->orders[$index10]->contact->address->cityId;
}
if (null !== $model->orders[$index10]->contact->address->cityType) {
    $jsonData["orders"][$index10]["contact"]["address"]["cityType"] = $model->orders[$index10]->contact->address->cityType;
}
if (null !== $model->orders[$index10]->contact->address->street) {
    $jsonData["orders"][$index10]["contact"]["address"]["street"] = $model->orders[$index10]->contact->address->street;
}
if (null !== $model->orders[$index10]->contact->address->streetId) {
    $jsonData["orders"][$index10]["contact"]["address"]["streetId"] = $model->orders[$index10]->contact->address->streetId;
}
if (null !== $model->orders[$index10]->contact->address->streetType) {
    $jsonData["orders"][$index10]["contact"]["address"]["streetType"] = $model->orders[$index10]->contact->address->streetType;
}
if (null !== $model->orders[$index10]->contact->address->building) {
    $jsonData["orders"][$index10]["contact"]["address"]["building"] = $model->orders[$index10]->contact->address->building;
}
if (null !== $model->orders[$index10]->contact->address->flat) {
    $jsonData["orders"][$index10]["contact"]["address"]["flat"] = $model->orders[$index10]->contact->address->flat;
}
if (null !== $model->orders[$index10]->contact->address->floor) {
    $jsonData["orders"][$index10]["contact"]["address"]["floor"] = $model->orders[$index10]->contact->address->floor;
}
if (null !== $model->orders[$index10]->contact->address->block) {
    $jsonData["orders"][$index10]["contact"]["address"]["block"] = $model->orders[$index10]->contact->address->block;
}
if (null !== $model->orders[$index10]->contact->address->house) {
    $jsonData["orders"][$index10]["contact"]["address"]["house"] = $model->orders[$index10]->contact->address->house;
}
if (null !== $model->orders[$index10]->contact->address->housing) {
    $jsonData["orders"][$index10]["contact"]["address"]["housing"] = $model->orders[$index10]->contact->address->housing;
}
if (null !== $model->orders[$index10]->contact->address->metro) {
    $jsonData["orders"][$index10]["contact"]["address"]["metro"] = $model->orders[$index10]->contact->address->metro;
}
if (null !== $model->orders[$index10]->contact->address->notes) {
    $jsonData["orders"][$index10]["contact"]["address"]["notes"] = $model->orders[$index10]->contact->address->notes;
}
if (null !== $model->orders[$index10]->contact->address->text) {
    $jsonData["orders"][$index10]["contact"]["address"]["text"] = $model->orders[$index10]->contact->address->text;
}
if (null !== $model->orders[$index10]->contact->address->externalId) {
    $jsonData["orders"][$index10]["contact"]["address"]["externalId"] = $model->orders[$index10]->contact->address->externalId;
}

if (0 === \count($jsonData["orders"][$index10]["contact"]["address"])) {
    $jsonData["orders"][$index10]["contact"]["address"] = $emptyObject;
}

}
if (null !== $model->orders[$index10]->contact->segments) {
    $jsonData["orders"][$index10]["contact"]["segments"] = [];
foreach (array_keys($model->orders[$index10]->contact->segments) as $index43) {
    $jsonData["orders"][$index10]["contact"]["segments"][$index43] = [];
if (null !== $model->orders[$index10]->contact->segments[$index43]->id) {
    $jsonData["orders"][$index10]["contact"]["segments"][$index43]["id"] = $model->orders[$index10]->contact->segments[$index43]->id;
}
if (null !== $model->orders[$index10]->contact->segments[$index43]->code) {
    $jsonData["orders"][$index10]["contact"]["segments"][$index43]["code"] = $model->orders[$index10]->contact->segments[$index43]->code;
}
if (null !== $model->orders[$index10]->contact->segments[$index43]->name) {
    $jsonData["orders"][$index10]["contact"]["segments"][$index43]["name"] = $model->orders[$index10]->contact->segments[$index43]->name;
}
if (null !== $model->orders[$index10]->contact->segments[$index43]->createdAt) {
    $jsonData["orders"][$index10]["contact"]["segments"][$index43]["createdAt"] = $model->orders[$index10]->contact->segments[$index43]->createdAt->format('Y-m-d H:i:s');;
}
if (null !== $model->orders[$index10]->contact->segments[$index43]->isDynamic) {
    $jsonData["orders"][$index10]["contact"]["segments"][$index43]["isDynamic"] = $model->orders[$index10]->contact->segments[$index43]->isDynamic;
}
if (null !== $model->orders[$index10]->contact->segments[$index43]->customersCount) {
    $jsonData["orders"][$index10]["contact"]["segments"][$index43]["customersCount"] = $model->orders[$index10]->contact->segments[$index43]->customersCount;
}
if (null !== $model->orders[$index10]->contact->segments[$index43]->active) {
    $jsonData["orders"][$index10]["contact"]["segments"][$index43]["active"] = $model->orders[$index10]->contact->segments[$index43]->active;
}

if (0 === \count($jsonData["orders"][$index10]["contact"]["segments"][$index43])) {
    $jsonData["orders"][$index10]["contact"]["segments"][$index43] = $emptyObject;
}

}

}
if (null !== $model->orders[$index10]->contact->maturationTime) {
    $jsonData["orders"][$index10]["contact"]["maturationTime"] = $model->orders[$index10]->contact->maturationTime;
}
if (null !== $model->orders[$index10]->contact->firstName) {
    $jsonData["orders"][$index10]["contact"]["firstName"] = $model->orders[$index10]->contact->firstName;
}
if (null !== $model->orders[$index10]->contact->lastName) {
    $jsonData["orders"][$index10]["contact"]["lastName"] = $model->orders[$index10]->contact->lastName;
}
if (null !== $model->orders[$index10]->contact->patronymic) {
    $jsonData["orders"][$index10]["contact"]["patronymic"] = $model->orders[$index10]->contact->patronymic;
}
if (null !== $model->orders[$index10]->contact->sex) {
    $jsonData["orders"][$index10]["contact"]["sex"] = $model->orders[$index10]->contact->sex;
}
if (null !== $model->orders[$index10]->contact->presumableSex) {
    $jsonData["orders"][$index10]["contact"]["presumableSex"] = $model->orders[$index10]->contact->presumableSex;
}
if (null !== $model->orders[$index10]->contact->email) {
    $jsonData["orders"][$index10]["contact"]["email"] = $model->orders[$index10]->contact->email;
}
if (null !== $model->orders[$index10]->contact->emailMarketingUnsubscribedAt) {
    $jsonData["orders"][$index10]["contact"]["emailMarketingUnsubscribedAt"] = $model->orders[$index10]->contact->emailMarketingUnsubscribedAt->format('Y-m-d H:i:s');;
}
if (null !== $model->orders[$index10]->contact->phones) {
    $jsonData["orders"][$index10]["contact"]["phones"] = [];
foreach (array_keys($model->orders[$index10]->contact->phones) as $index41) {
    $jsonData["orders"][$index10]["contact"]["phones"][$index41] = [];
if (null !== $model->orders[$index10]->contact->phones[$index41]->number) {
    $jsonData["orders"][$index10]["contact"]["phones"][$index41]["number"] = $model->orders[$index10]->contact->phones[$index41]->number;
}

if (0 === \count($jsonData["orders"][$index10]["contact"]["phones"][$index41])) {
    $jsonData["orders"][$index10]["contact"]["phones"][$index41] = $emptyObject;
}

}

}
if (null !== $model->orders[$index10]->contact->birthday) {
    $jsonData["orders"][$index10]["contact"]["birthday"] = $model->orders[$index10]->contact->birthday->format('Y-m-d H:i:s');;
}
if (null !== $model->orders[$index10]->contact->source) {
    $jsonData["orders"][$index10]["contact"]["source"] = [];
if (null !== $model->orders[$index10]->contact->source->source) {
    $jsonData["orders"][$index10]["contact"]["source"]["source"] = $model->orders[$index10]->contact->source->source;
}
if (null !== $model->orders[$index10]->contact->source->medium) {
    $jsonData["orders"][$index10]["contact"]["source"]["medium"] = $model->orders[$index10]->contact->source->medium;
}
if (null !== $model->orders[$index10]->contact->source->campaign) {
    $jsonData["orders"][$index10]["contact"]["source"]["campaign"] = $model->orders[$index10]->contact->source->campaign;
}
if (null !== $model->orders[$index10]->contact->source->keyword) {
    $jsonData["orders"][$index10]["contact"]["source"]["keyword"] = $model->orders[$index10]->contact->source->keyword;
}
if (null !== $model->orders[$index10]->contact->source->content) {
    $jsonData["orders"][$index10]["contact"]["source"]["content"] = $model->orders[$index10]->contact->source->content;
}

if (0 === \count($jsonData["orders"][$index10]["contact"]["source"])) {
    $jsonData["orders"][$index10]["contact"]["source"] = $emptyObject;
}

}
if (null !== $model->orders[$index10]->contact->photoUrl) {
    $jsonData["orders"][$index10]["contact"]["photoUrl"] = $model->orders[$index10]->contact->photoUrl;
}
if (null !== $model->orders[$index10]->contact->mgCustomerId) {
    $jsonData["orders"][$index10]["contact"]["mgCustomerId"] = $model->orders[$index10]->contact->mgCustomerId;
}
if (null !== $model->orders[$index10]->contact->subscribed) {
    $jsonData["orders"][$index10]["contact"]["subscribed"] = $model->orders[$index10]->contact->subscribed;
}

if (0 === \count($jsonData["orders"][$index10]["contact"])) {
    $jsonData["orders"][$index10]["contact"] = $emptyObject;
}

}
if (null !== $model->orders[$index10]->company) {
    $jsonData["orders"][$index10]["company"] = [];
if (null !== $model->orders[$index10]->company->id) {
    $jsonData["orders"][$index10]["company"]["id"] = $model->orders[$index10]->company->id;
}
if (null !== $model->orders[$index10]->company->isMain) {
    $jsonData["orders"][$index10]["company"]["isMain"] = $model->orders[$index10]->company->isMain;
}
if (null !== $model->orders[$index10]->company->externalId) {
    $jsonData["orders"][$index10]["company"]["externalId"] = $model->orders[$index10]->company->externalId;
}
if (null !== $model->orders[$index10]->company->active) {
    $jsonData["orders"][$index10]["company"]["active"] = $model->orders[$index10]->company->active;
}
if (null !== $model->orders[$index10]->company->name) {
    $jsonData["orders"][$index10]["company"]["name"] = $model->orders[$index10]->company->name;
}
if (null !== $model->orders[$index10]->company->brand) {
    $jsonData["orders"][$index10]["company"]["brand"] = $model->orders[$index10]->company->brand;
}
if (null !== $model->orders[$index10]->company->site) {
    $jsonData["orders"][$index10]["company"]["site"] = $model->orders[$index10]->company->site;
}
if (null !== $model->orders[$index10]->company->createdAt) {
    $jsonData["orders"][$index10]["company"]["createdAt"] = $model->orders[$index10]->company->createdAt->format('Y-m-d H:i:s');;
}
if (null !== $model->orders[$index10]->company->customer) {
    $jsonData["orders"][$index10]["company"]["customer"] = [];
if (null !== $model->orders[$index10]->company->customer->site) {
    $jsonData["orders"][$index10]["company"]["customer"]["site"] = $model->orders[$index10]->company->customer->site;
}
if (null !== $model->orders[$index10]->company->customer->id) {
    $jsonData["orders"][$index10]["company"]["customer"]["id"] = $model->orders[$index10]->company->customer->id;
}
if (null !== $model->orders[$index10]->company->customer->externalId) {
    $jsonData["orders"][$index10]["company"]["customer"]["externalId"] = $model->orders[$index10]->company->customer->externalId;
}
if (null !== $model->orders[$index10]->company->customer->type) {
    $jsonData["orders"][$index10]["company"]["customer"]["type"] = $model->orders[$index10]->company->customer->type;
}

if (0 === \count($jsonData["orders"][$index10]["company"]["customer"])) {
    $jsonData["orders"][$index10]["company"]["customer"] = $emptyObject;
}

}
if (null !== $model->orders[$index10]->company->contragent) {
    $jsonData["orders"][$index10]["company"]["contragent"] = [];
if (null !== $model->orders[$index10]->company->contragent->contragentType) {
    $jsonData["orders"][$index10]["company"]["contragent"]["contragentType"] = $model->orders[$index10]->company->contragent->contragentType;
}
if (null !== $model->orders[$index10]->company->contragent->legalName) {
    $jsonData["orders"][$index10]["company"]["contragent"]["legalName"] = $model->orders[$index10]->company->contragent->legalName;
}
if (null !== $model->orders[$index10]->company->contragent->legalAddress) {
    $jsonData["orders"][$index10]["company"]["contragent"]["legalAddress"] = $model->orders[$index10]->company->contragent->legalAddress;
}
if (null !== $model->orders[$index10]->company->contragent->INN) {
    $jsonData["orders"][$index10]["company"]["contragent"]["INN"] = $model->orders[$index10]->company->contragent->INN;
}
if (null !== $model->orders[$index10]->company->contragent->OKPO) {
    $jsonData["orders"][$index10]["company"]["contragent"]["OKPO"] = $model->orders[$index10]->company->contragent->OKPO;
}
if (null !== $model->orders[$index10]->company->contragent->KPP) {
    $jsonData["orders"][$index10]["company"]["contragent"]["KPP"] = $model->orders[$index10]->company->contragent->KPP;
}
if (null !== $model->orders[$index10]->company->contragent->OGRN) {
    $jsonData["orders"][$index10]["company"]["contragent"]["OGRN"] = $model->orders[$index10]->company->contragent->OGRN;
}
if (null !== $model->orders[$index10]->company->contragent->OGRNIP) {
    $jsonData["orders"][$index10]["company"]["contragent"]["OGRNIP"] = $model->orders[$index10]->company->contragent->OGRNIP;
}
if (null !== $model->orders[$index10]->company->contragent->certificateNumber) {
    $jsonData["orders"][$index10]["company"]["contragent"]["certificateNumber"] = $model->orders[$index10]->company->contragent->certificateNumber;
}
if (null !== $model->orders[$index10]->company->contragent->certificateDate) {
    $jsonData["orders"][$index10]["company"]["contragent"]["certificateDate"] = $model->orders[$index10]->company->contragent->certificateDate->format('Y-m-d H:i:s');;
}
if (null !== $model->orders[$index10]->company->contragent->BIK) {
    $jsonData["orders"][$index10]["company"]["contragent"]["BIK"] = $model->orders[$index10]->company->contragent->BIK;
}
if (null !== $model->orders[$index10]->company->contragent->bank) {
    $jsonData["orders"][$index10]["company"]["contragent"]["bank"] = $model->orders[$index10]->company->contragent->bank;
}
if (null !== $model->orders[$index10]->company->contragent->bankAddress) {
    $jsonData["orders"][$index10]["company"]["contragent"]["bankAddress"] = $model->orders[$index10]->company->contragent->bankAddress;
}
if (null !== $model->orders[$index10]->company->contragent->corrAccount) {
    $jsonData["orders"][$index10]["company"]["contragent"]["corrAccount"] = $model->orders[$index10]->company->contragent->corrAccount;
}
if (null !== $model->orders[$index10]->company->contragent->bankAccount) {
    $jsonData["orders"][$index10]["company"]["contragent"]["bankAccount"] = $model->orders[$index10]->company->contragent->bankAccount;
}

if (0 === \count($jsonData["orders"][$index10]["company"]["contragent"])) {
    $jsonData["orders"][$index10]["company"]["contragent"] = $emptyObject;
}

}
if (null !== $model->orders[$index10]->company->address) {
    $jsonData["orders"][$index10]["company"]["address"] = [];
if (null !== $model->orders[$index10]->company->address->id) {
    $jsonData["orders"][$index10]["company"]["address"]["id"] = $model->orders[$index10]->company->address->id;
}
if (null !== $model->orders[$index10]->company->address->name) {
    $jsonData["orders"][$index10]["company"]["address"]["name"] = $model->orders[$index10]->company->address->name;
}
if (null !== $model->orders[$index10]->company->address->isMain) {
    $jsonData["orders"][$index10]["company"]["address"]["isMain"] = $model->orders[$index10]->company->address->isMain;
}
if (null !== $model->orders[$index10]->company->address->index) {
    $jsonData["orders"][$index10]["company"]["address"]["index"] = $model->orders[$index10]->company->address->index;
}
if (null !== $model->orders[$index10]->company->address->countryIso) {
    $jsonData["orders"][$index10]["company"]["address"]["countryIso"] = $model->orders[$index10]->company->address->countryIso;
}
if (null !== $model->orders[$index10]->company->address->region) {
    $jsonData["orders"][$index10]["company"]["address"]["region"] = $model->orders[$index10]->company->address->region;
}
if (null !== $model->orders[$index10]->company->address->regionId) {
    $jsonData["orders"][$index10]["company"]["address"]["regionId"] = $model->orders[$index10]->company->address->regionId;
}
if (null !== $model->orders[$index10]->company->address->city) {
    $jsonData["orders"][$index10]["company"]["address"]["city"] = $model->orders[$index10]->company->address->city;
}
if (null !== $model->orders[$index10]->company->address->cityId) {
    $jsonData["orders"][$index10]["company"]["address"]["cityId"] = $model->orders[$index10]->company->address->cityId;
}
if (null !== $model->orders[$index10]->company->address->cityType) {
    $jsonData["orders"][$index10]["company"]["address"]["cityType"] = $model->orders[$index10]->company->address->cityType;
}
if (null !== $model->orders[$index10]->company->address->street) {
    $jsonData["orders"][$index10]["company"]["address"]["street"] = $model->orders[$index10]->company->address->street;
}
if (null !== $model->orders[$index10]->company->address->streetId) {
    $jsonData["orders"][$index10]["company"]["address"]["streetId"] = $model->orders[$index10]->company->address->streetId;
}
if (null !== $model->orders[$index10]->company->address->streetType) {
    $jsonData["orders"][$index10]["company"]["address"]["streetType"] = $model->orders[$index10]->company->address->streetType;
}
if (null !== $model->orders[$index10]->company->address->building) {
    $jsonData["orders"][$index10]["company"]["address"]["building"] = $model->orders[$index10]->company->address->building;
}
if (null !== $model->orders[$index10]->company->address->flat) {
    $jsonData["orders"][$index10]["company"]["address"]["flat"] = $model->orders[$index10]->company->address->flat;
}
if (null !== $model->orders[$index10]->company->address->floor) {
    $jsonData["orders"][$index10]["company"]["address"]["floor"] = $model->orders[$index10]->company->address->floor;
}
if (null !== $model->orders[$index10]->company->address->block) {
    $jsonData["orders"][$index10]["company"]["address"]["block"] = $model->orders[$index10]->company->address->block;
}
if (null !== $model->orders[$index10]->company->address->house) {
    $jsonData["orders"][$index10]["company"]["address"]["house"] = $model->orders[$index10]->company->address->house;
}
if (null !== $model->orders[$index10]->company->address->housing) {
    $jsonData["orders"][$index10]["company"]["address"]["housing"] = $model->orders[$index10]->company->address->housing;
}
if (null !== $model->orders[$index10]->company->address->metro) {
    $jsonData["orders"][$index10]["company"]["address"]["metro"] = $model->orders[$index10]->company->address->metro;
}
if (null !== $model->orders[$index10]->company->address->notes) {
    $jsonData["orders"][$index10]["company"]["address"]["notes"] = $model->orders[$index10]->company->address->notes;
}
if (null !== $model->orders[$index10]->company->address->text) {
    $jsonData["orders"][$index10]["company"]["address"]["text"] = $model->orders[$index10]->company->address->text;
}
if (null !== $model->orders[$index10]->company->address->externalId) {
    $jsonData["orders"][$index10]["company"]["address"]["externalId"] = $model->orders[$index10]->company->address->externalId;
}

if (0 === \count($jsonData["orders"][$index10]["company"]["address"])) {
    $jsonData["orders"][$index10]["company"]["address"] = $emptyObject;
}

}
if (null !== $model->orders[$index10]->company->customFields) {
    $jsonData["orders"][$index10]["company"]["customFields"] = [];
foreach (array_keys($model->orders[$index10]->company->customFields) as $index47) {
    $jsonData["orders"][$index10]["company"]["customFields"] = $model->orders[$index10]->company->customFields;
}

}
if (null !== $model->orders[$index10]->company->marginSumm) {
    $jsonData["orders"][$index10]["company"]["marginSumm"] = $model->orders[$index10]->company->marginSumm;
}
if (null !== $model->orders[$index10]->company->totalSumm) {
    $jsonData["orders"][$index10]["company"]["totalSumm"] = $model->orders[$index10]->company->totalSumm;
}
if (null !== $model->orders[$index10]->company->averageSumm) {
    $jsonData["orders"][$index10]["company"]["averageSumm"] = $model->orders[$index10]->company->averageSumm;
}
if (null !== $model->orders[$index10]->company->ordersCount) {
    $jsonData["orders"][$index10]["company"]["ordersCount"] = $model->orders[$index10]->company->ordersCount;
}
if (null !== $model->orders[$index10]->company->costSumm) {
    $jsonData["orders"][$index10]["company"]["costSumm"] = $model->orders[$index10]->company->costSumm;
}

if (0 === \count($jsonData["orders"][$index10]["company"])) {
    $jsonData["orders"][$index10]["company"] = $emptyObject;
}

}
if (null !== $model->orders[$index10]->contragent) {
    $jsonData["orders"][$index10]["contragent"] = [];
if (null !== $model->orders[$index10]->contragent->contragentType) {
    $jsonData["orders"][$index10]["contragent"]["contragentType"] = $model->orders[$index10]->contragent->contragentType;
}
if (null !== $model->orders[$index10]->contragent->legalName) {
    $jsonData["orders"][$index10]["contragent"]["legalName"] = $model->orders[$index10]->contragent->legalName;
}
if (null !== $model->orders[$index10]->contragent->legalAddress) {
    $jsonData["orders"][$index10]["contragent"]["legalAddress"] = $model->orders[$index10]->contragent->legalAddress;
}
if (null !== $model->orders[$index10]->contragent->INN) {
    $jsonData["orders"][$index10]["contragent"]["INN"] = $model->orders[$index10]->contragent->INN;
}
if (null !== $model->orders[$index10]->contragent->OKPO) {
    $jsonData["orders"][$index10]["contragent"]["OKPO"] = $model->orders[$index10]->contragent->OKPO;
}
if (null !== $model->orders[$index10]->contragent->KPP) {
    $jsonData["orders"][$index10]["contragent"]["KPP"] = $model->orders[$index10]->contragent->KPP;
}
if (null !== $model->orders[$index10]->contragent->OGRN) {
    $jsonData["orders"][$index10]["contragent"]["OGRN"] = $model->orders[$index10]->contragent->OGRN;
}
if (null !== $model->orders[$index10]->contragent->OGRNIP) {
    $jsonData["orders"][$index10]["contragent"]["OGRNIP"] = $model->orders[$index10]->contragent->OGRNIP;
}
if (null !== $model->orders[$index10]->contragent->certificateNumber) {
    $jsonData["orders"][$index10]["contragent"]["certificateNumber"] = $model->orders[$index10]->contragent->certificateNumber;
}
if (null !== $model->orders[$index10]->contragent->certificateDate) {
    $jsonData["orders"][$index10]["contragent"]["certificateDate"] = $model->orders[$index10]->contragent->certificateDate->format('Y-m-d H:i:s');;
}
if (null !== $model->orders[$index10]->contragent->BIK) {
    $jsonData["orders"][$index10]["contragent"]["BIK"] = $model->orders[$index10]->contragent->BIK;
}
if (null !== $model->orders[$index10]->contragent->bank) {
    $jsonData["orders"][$index10]["contragent"]["bank"] = $model->orders[$index10]->contragent->bank;
}
if (null !== $model->orders[$index10]->contragent->bankAddress) {
    $jsonData["orders"][$index10]["contragent"]["bankAddress"] = $model->orders[$index10]->contragent->bankAddress;
}
if (null !== $model->orders[$index10]->contragent->corrAccount) {
    $jsonData["orders"][$index10]["contragent"]["corrAccount"] = $model->orders[$index10]->contragent->corrAccount;
}
if (null !== $model->orders[$index10]->contragent->bankAccount) {
    $jsonData["orders"][$index10]["contragent"]["bankAccount"] = $model->orders[$index10]->contragent->bankAccount;
}

if (0 === \count($jsonData["orders"][$index10]["contragent"])) {
    $jsonData["orders"][$index10]["contragent"] = $emptyObject;
}

}
if (null !== $model->orders[$index10]->delivery) {
    $jsonData["orders"][$index10]["delivery"] = [];
if (null !== $model->orders[$index10]->delivery->code) {
    $jsonData["orders"][$index10]["delivery"]["code"] = $model->orders[$index10]->delivery->code;
}
if (null !== $model->orders[$index10]->delivery->integrationCode) {
    $jsonData["orders"][$index10]["delivery"]["integrationCode"] = $model->orders[$index10]->delivery->integrationCode;
}
if (null !== $model->orders[$index10]->delivery->data) {
    $jsonData["orders"][$index10]["delivery"]["data"] = [];
if (null !== $model->orders[$index10]->delivery->data->externalId) {
    $jsonData["orders"][$index10]["delivery"]["data"]["externalId"] = $model->orders[$index10]->delivery->data->externalId;
}
if (null !== $model->orders[$index10]->delivery->data->trackNumber) {
    $jsonData["orders"][$index10]["delivery"]["data"]["trackNumber"] = $model->orders[$index10]->delivery->data->trackNumber;
}
if (null !== $model->orders[$index10]->delivery->data->status) {
    $jsonData["orders"][$index10]["delivery"]["data"]["status"] = $model->orders[$index10]->delivery->data->status;
}
if (null !== $model->orders[$index10]->delivery->data->locked) {
    $jsonData["orders"][$index10]["delivery"]["data"]["locked"] = $model->orders[$index10]->delivery->data->locked;
}
if (null !== $model->orders[$index10]->delivery->data->pickuppointAddress) {
    $jsonData["orders"][$index10]["delivery"]["data"]["pickuppointAddress"] = $model->orders[$index10]->delivery->data->pickuppointAddress;
}
if (null !== $model->orders[$index10]->delivery->data->days) {
    $jsonData["orders"][$index10]["delivery"]["data"]["days"] = $model->orders[$index10]->delivery->data->days;
}
if (null !== $model->orders[$index10]->delivery->data->statusText) {
    $jsonData["orders"][$index10]["delivery"]["data"]["statusText"] = $model->orders[$index10]->delivery->data->statusText;
}
if (null !== $model->orders[$index10]->delivery->data->statusDate) {
    $jsonData["orders"][$index10]["delivery"]["data"]["statusDate"] = $model->orders[$index10]->delivery->data->statusDate->format('Y-m-d');;
}
if (null !== $model->orders[$index10]->delivery->data->tariff) {
    $jsonData["orders"][$index10]["delivery"]["data"]["tariff"] = $model->orders[$index10]->delivery->data->tariff;
}
if (null !== $model->orders[$index10]->delivery->data->tariffName) {
    $jsonData["orders"][$index10]["delivery"]["data"]["tariffName"] = $model->orders[$index10]->delivery->data->tariffName;
}
if (null !== $model->orders[$index10]->delivery->data->pickuppointId) {
    $jsonData["orders"][$index10]["delivery"]["data"]["pickuppointId"] = $model->orders[$index10]->delivery->data->pickuppointId;
}
if (null !== $model->orders[$index10]->delivery->data->pickuppointSchedule) {
    $jsonData["orders"][$index10]["delivery"]["data"]["pickuppointSchedule"] = $model->orders[$index10]->delivery->data->pickuppointSchedule;
}
if (null !== $model->orders[$index10]->delivery->data->pickuppointPhone) {
    $jsonData["orders"][$index10]["delivery"]["data"]["pickuppointPhone"] = $model->orders[$index10]->delivery->data->pickuppointPhone;
}
if (null !== $model->orders[$index10]->delivery->data->payerType) {
    $jsonData["orders"][$index10]["delivery"]["data"]["payerType"] = $model->orders[$index10]->delivery->data->payerType;
}
if (null !== $model->orders[$index10]->delivery->data->statusComment) {
    $jsonData["orders"][$index10]["delivery"]["data"]["statusComment"] = $model->orders[$index10]->delivery->data->statusComment;
}
if (null !== $model->orders[$index10]->delivery->data->cost) {
    $jsonData["orders"][$index10]["delivery"]["data"]["cost"] = $model->orders[$index10]->delivery->data->cost;
}
if (null !== $model->orders[$index10]->delivery->data->minTerm) {
    $jsonData["orders"][$index10]["delivery"]["data"]["minTerm"] = $model->orders[$index10]->delivery->data->minTerm;
}
if (null !== $model->orders[$index10]->delivery->data->maxTerm) {
    $jsonData["orders"][$index10]["delivery"]["data"]["maxTerm"] = $model->orders[$index10]->delivery->data->maxTerm;
}
if (null !== $model->orders[$index10]->delivery->data->shipmentpointId) {
    $jsonData["orders"][$index10]["delivery"]["data"]["shipmentpointId"] = $model->orders[$index10]->delivery->data->shipmentpointId;
}
if (null !== $model->orders[$index10]->delivery->data->shipmentpointName) {
    $jsonData["orders"][$index10]["delivery"]["data"]["shipmentpointName"] = $model->orders[$index10]->delivery->data->shipmentpointName;
}
if (null !== $model->orders[$index10]->delivery->data->shipmentpointAddress) {
    $jsonData["orders"][$index10]["delivery"]["data"]["shipmentpointAddress"] = $model->orders[$index10]->delivery->data->shipmentpointAddress;
}
if (null !== $model->orders[$index10]->delivery->data->shipmentpointSchedule) {
    $jsonData["orders"][$index10]["delivery"]["data"]["shipmentpointSchedule"] = $model->orders[$index10]->delivery->data->shipmentpointSchedule;
}
if (null !== $model->orders[$index10]->delivery->data->shipmentpointPhone) {
    $jsonData["orders"][$index10]["delivery"]["data"]["shipmentpointPhone"] = $model->orders[$index10]->delivery->data->shipmentpointPhone;
}
if (null !== $model->orders[$index10]->delivery->data->shipmentpointCoordinateLatitude) {
    $jsonData["orders"][$index10]["delivery"]["data"]["shipmentpointCoordinateLatitude"] = $model->orders[$index10]->delivery->data->shipmentpointCoordinateLatitude;
}
if (null !== $model->orders[$index10]->delivery->data->shipmentpointCoordinateLongitude) {
    $jsonData["orders"][$index10]["delivery"]["data"]["shipmentpointCoordinateLongitude"] = $model->orders[$index10]->delivery->data->shipmentpointCoordinateLongitude;
}
if (null !== $model->orders[$index10]->delivery->data->pickuppointName) {
    $jsonData["orders"][$index10]["delivery"]["data"]["pickuppointName"] = $model->orders[$index10]->delivery->data->pickuppointName;
}
if (null !== $model->orders[$index10]->delivery->data->pickuppointCoordinateLatitude) {
    $jsonData["orders"][$index10]["delivery"]["data"]["pickuppointCoordinateLatitude"] = $model->orders[$index10]->delivery->data->pickuppointCoordinateLatitude;
}
if (null !== $model->orders[$index10]->delivery->data->pickuppointCoordinateLongitude) {
    $jsonData["orders"][$index10]["delivery"]["data"]["pickuppointCoordinateLongitude"] = $model->orders[$index10]->delivery->data->pickuppointCoordinateLongitude;
}
if (null !== $model->orders[$index10]->delivery->data->extraData) {
    $jsonData["orders"][$index10]["delivery"]["data"]["extraData"] = [];
foreach (array_keys($model->orders[$index10]->delivery->data->extraData) as $index53) {
    $jsonData["orders"][$index10]["delivery"]["data"]["extraData"] = $model->orders[$index10]->delivery->data->extraData;
}

}
if (null !== $model->orders[$index10]->delivery->data->packages) {
    $jsonData["orders"][$index10]["delivery"]["data"]["packages"] = [];
foreach (array_keys($model->orders[$index10]->delivery->data->packages) as $index52) {
    $jsonData["orders"][$index10]["delivery"]["data"]["packages"][$index52] = [];
if (null !== $model->orders[$index10]->delivery->data->packages[$index52]->packageId) {
    $jsonData["orders"][$index10]["delivery"]["data"]["packages"][$index52]["packageId"] = $model->orders[$index10]->delivery->data->packages[$index52]->packageId;
}
if (null !== $model->orders[$index10]->delivery->data->packages[$index52]->weight) {
    $jsonData["orders"][$index10]["delivery"]["data"]["packages"][$index52]["weight"] = $model->orders[$index10]->delivery->data->packages[$index52]->weight;
}
if (null !== $model->orders[$index10]->delivery->data->packages[$index52]->length) {
    $jsonData["orders"][$index10]["delivery"]["data"]["packages"][$index52]["length"] = $model->orders[$index10]->delivery->data->packages[$index52]->length;
}
if (null !== $model->orders[$index10]->delivery->data->packages[$index52]->width) {
    $jsonData["orders"][$index10]["delivery"]["data"]["packages"][$index52]["width"] = $model->orders[$index10]->delivery->data->packages[$index52]->width;
}
if (null !== $model->orders[$index10]->delivery->data->packages[$index52]->height) {
    $jsonData["orders"][$index10]["delivery"]["data"]["packages"][$index52]["height"] = $model->orders[$index10]->delivery->data->packages[$index52]->height;
}
if (null !== $model->orders[$index10]->delivery->data->packages[$index52]->items) {
    $jsonData["orders"][$index10]["delivery"]["data"]["packages"][$index52]["items"] = [];
foreach (array_keys($model->orders[$index10]->delivery->data->packages[$index52]->items) as $index71) {
    $jsonData["orders"][$index10]["delivery"]["data"]["packages"][$index52]["items"][$index71] = [];
if (null !== $model->orders[$index10]->delivery->data->packages[$index52]->items[$index71]->orderProduct) {
    $jsonData["orders"][$index10]["delivery"]["data"]["packages"][$index52]["items"][$index71]["orderProduct"] = [];
if (null !== $model->orders[$index10]->delivery->data->packages[$index52]->items[$index71]->orderProduct->id) {
    $jsonData["orders"][$index10]["delivery"]["data"]["packages"][$index52]["items"][$index71]["orderProduct"]["id"] = $model->orders[$index10]->delivery->data->packages[$index52]->items[$index71]->orderProduct->id;
}
if (null !== $model->orders[$index10]->delivery->data->packages[$index52]->items[$index71]->orderProduct->externalId) {
    $jsonData["orders"][$index10]["delivery"]["data"]["packages"][$index52]["items"][$index71]["orderProduct"]["externalId"] = $model->orders[$index10]->delivery->data->packages[$index52]->items[$index71]->orderProduct->externalId;
}
if (null !== $model->orders[$index10]->delivery->data->packages[$index52]->items[$index71]->orderProduct->externalIds) {
    $jsonData["orders"][$index10]["delivery"]["data"]["packages"][$index52]["items"][$index71]["orderProduct"]["externalIds"] = [];
foreach (array_keys($model->orders[$index10]->delivery->data->packages[$index52]->items[$index71]->orderProduct->externalIds) as $index112) {
    $jsonData["orders"][$index10]["delivery"]["data"]["packages"][$index52]["items"][$index71]["orderProduct"]["externalIds"][$index112] = [];
if (null !== $model->orders[$index10]->delivery->data->packages[$index52]->items[$index71]->orderProduct->externalIds[$index112]->code) {
    $jsonData["orders"][$index10]["delivery"]["data"]["packages"][$index52]["items"][$index71]["orderProduct"]["externalIds"][$index112]["code"] = $model->orders[$index10]->delivery->data->packages[$index52]->items[$index71]->orderProduct->externalIds[$index112]->code;
}
if (null !== $model->orders[$index10]->delivery->data->packages[$index52]->items[$index71]->orderProduct->externalIds[$index112]->value) {
    $jsonData["orders"][$index10]["delivery"]["data"]["packages"][$index52]["items"][$index71]["orderProduct"]["externalIds"][$index112]["value"] = $model->orders[$index10]->delivery->data->packages[$index52]->items[$index71]->orderProduct->externalIds[$index112]->value;
}

if (0 === \count($jsonData["orders"][$index10]["delivery"]["data"]["packages"][$index52]["items"][$index71]["orderProduct"]["externalIds"][$index112])) {
    $jsonData["orders"][$index10]["delivery"]["data"]["packages"][$index52]["items"][$index71]["orderProduct"]["externalIds"][$index112] = $emptyObject;
}

}

}

if (0 === \count($jsonData["orders"][$index10]["delivery"]["data"]["packages"][$index52]["items"][$index71]["orderProduct"])) {
    $jsonData["orders"][$index10]["delivery"]["data"]["packages"][$index52]["items"][$index71]["orderProduct"] = $emptyObject;
}

}
if (null !== $model->orders[$index10]->delivery->data->packages[$index52]->items[$index71]->quantity) {
    $jsonData["orders"][$index10]["delivery"]["data"]["packages"][$index52]["items"][$index71]["quantity"] = $model->orders[$index10]->delivery->data->packages[$index52]->items[$index71]->quantity;
}

if (0 === \count($jsonData["orders"][$index10]["delivery"]["data"]["packages"][$index52]["items"][$index71])) {
    $jsonData["orders"][$index10]["delivery"]["data"]["packages"][$index52]["items"][$index71] = $emptyObject;
}

}

}

if (0 === \count($jsonData["orders"][$index10]["delivery"]["data"]["packages"][$index52])) {
    $jsonData["orders"][$index10]["delivery"]["data"]["packages"][$index52] = $emptyObject;
}

}

}
if (null !== $model->orders[$index10]->delivery->data->returnExternalId) {
    $jsonData["orders"][$index10]["delivery"]["data"]["returnExternalId"] = $model->orders[$index10]->delivery->data->returnExternalId;
}
if (null !== $model->orders[$index10]->delivery->data->deliveryName) {
    $jsonData["orders"][$index10]["delivery"]["data"]["deliveryName"] = $model->orders[$index10]->delivery->data->deliveryName;
}
if (null !== $model->orders[$index10]->delivery->data->price) {
    $jsonData["orders"][$index10]["delivery"]["data"]["price"] = $model->orders[$index10]->delivery->data->price;
}
if (null !== $model->orders[$index10]->delivery->data->insurancePrice) {
    $jsonData["orders"][$index10]["delivery"]["data"]["insurancePrice"] = $model->orders[$index10]->delivery->data->insurancePrice;
}
if (null !== $model->orders[$index10]->delivery->data->tariffType) {
    $jsonData["orders"][$index10]["delivery"]["data"]["tariffType"] = $model->orders[$index10]->delivery->data->tariffType;
}
if (null !== $model->orders[$index10]->delivery->data->receiverCity) {
    $jsonData["orders"][$index10]["delivery"]["data"]["receiverCity"] = $model->orders[$index10]->delivery->data->receiverCity;
}
if (null !== $model->orders[$index10]->delivery->data->services) {
    $jsonData["orders"][$index10]["delivery"]["data"]["services"] = [];
foreach (array_keys($model->orders[$index10]->delivery->data->services) as $index52) {
    $jsonData["orders"][$index10]["delivery"]["data"]["services"] = $model->orders[$index10]->delivery->data->services;
}

}
if (null !== $model->orders[$index10]->delivery->data->packageNumber) {
    $jsonData["orders"][$index10]["delivery"]["data"]["packageNumber"] = $model->orders[$index10]->delivery->data->packageNumber;
}
if (null !== $model->orders[$index10]->delivery->data->comment) {
    $jsonData["orders"][$index10]["delivery"]["data"]["comment"] = $model->orders[$index10]->delivery->data->comment;
}
if (null !== $model->orders[$index10]->delivery->data->deliveryCode) {
    $jsonData["orders"][$index10]["delivery"]["data"]["deliveryCode"] = $model->orders[$index10]->delivery->data->deliveryCode;
}
if (null !== $model->orders[$index10]->delivery->data->notes) {
    $jsonData["orders"][$index10]["delivery"]["data"]["notes"] = $model->orders[$index10]->delivery->data->notes;
}
if (null !== $model->orders[$index10]->delivery->data->id) {
    $jsonData["orders"][$index10]["delivery"]["data"]["id"] = $model->orders[$index10]->delivery->data->id;
}
if (null !== $model->orders[$index10]->delivery->data->firstName) {
    $jsonData["orders"][$index10]["delivery"]["data"]["firstName"] = $model->orders[$index10]->delivery->data->firstName;
}
if (null !== $model->orders[$index10]->delivery->data->lastName) {
    $jsonData["orders"][$index10]["delivery"]["data"]["lastName"] = $model->orders[$index10]->delivery->data->lastName;
}
if (null !== $model->orders[$index10]->delivery->data->patronymic) {
    $jsonData["orders"][$index10]["delivery"]["data"]["patronymic"] = $model->orders[$index10]->delivery->data->patronymic;
}
if (null !== $model->orders[$index10]->delivery->data->active) {
    $jsonData["orders"][$index10]["delivery"]["data"]["active"] = $model->orders[$index10]->delivery->data->active;
}
if (null !== $model->orders[$index10]->delivery->data->email) {
    $jsonData["orders"][$index10]["delivery"]["data"]["email"] = $model->orders[$index10]->delivery->data->email;
}
if (null !== $model->orders[$index10]->delivery->data->phone) {
    $jsonData["orders"][$index10]["delivery"]["data"]["phone"] = [];
if (null !== $model->orders[$index10]->delivery->data->phone->number) {
    $jsonData["orders"][$index10]["delivery"]["data"]["phone"]["number"] = $model->orders[$index10]->delivery->data->phone->number;
}

if (0 === \count($jsonData["orders"][$index10]["delivery"]["data"]["phone"])) {
    $jsonData["orders"][$index10]["delivery"]["data"]["phone"] = $emptyObject;
}

}
if (null !== $model->orders[$index10]->delivery->data->description) {
    $jsonData["orders"][$index10]["delivery"]["data"]["description"] = $model->orders[$index10]->delivery->data->description;
}
if (null !== $model->orders[$index10]->delivery->data->courierId) {
    $jsonData["orders"][$index10]["delivery"]["data"]["courierId"] = $model->orders[$index10]->delivery->data->courierId;
}
if (null !== $model->orders[$index10]->delivery->data->serviceType) {
    $jsonData["orders"][$index10]["delivery"]["data"]["serviceType"] = $model->orders[$index10]->delivery->data->serviceType;
}
if (null !== $model->orders[$index10]->delivery->data->pickuppoint) {
    $jsonData["orders"][$index10]["delivery"]["data"]["pickuppoint"] = $model->orders[$index10]->delivery->data->pickuppoint;
}
if (null !== $model->orders[$index10]->delivery->data->receiverWarehouseTypeRef) {
    $jsonData["orders"][$index10]["delivery"]["data"]["receiverWarehouseTypeRef"] = $model->orders[$index10]->delivery->data->receiverWarehouseTypeRef;
}
if (null !== $model->orders[$index10]->delivery->data->statusName) {
    $jsonData["orders"][$index10]["delivery"]["data"]["statusName"] = $model->orders[$index10]->delivery->data->statusName;
}
if (null !== $model->orders[$index10]->delivery->data->receiverCityRef) {
    $jsonData["orders"][$index10]["delivery"]["data"]["receiverCityRef"] = $model->orders[$index10]->delivery->data->receiverCityRef;
}
if (null !== $model->orders[$index10]->delivery->data->receiverStreet) {
    $jsonData["orders"][$index10]["delivery"]["data"]["receiverStreet"] = $model->orders[$index10]->delivery->data->receiverStreet;
}
if (null !== $model->orders[$index10]->delivery->data->receiverStreetRef) {
    $jsonData["orders"][$index10]["delivery"]["data"]["receiverStreetRef"] = $model->orders[$index10]->delivery->data->receiverStreetRef;
}
if (null !== $model->orders[$index10]->delivery->data->seatsAmount) {
    $jsonData["orders"][$index10]["delivery"]["data"]["seatsAmount"] = $model->orders[$index10]->delivery->data->seatsAmount;
}
if (null !== $model->orders[$index10]->delivery->data->cargoType) {
    $jsonData["orders"][$index10]["delivery"]["data"]["cargoType"] = $model->orders[$index10]->delivery->data->cargoType;
}
if (null !== $model->orders[$index10]->delivery->data->cargoDescription) {
    $jsonData["orders"][$index10]["delivery"]["data"]["cargoDescription"] = $model->orders[$index10]->delivery->data->cargoDescription;
}
if (null !== $model->orders[$index10]->delivery->data->cashPayerType) {
    $jsonData["orders"][$index10]["delivery"]["data"]["cashPayerType"] = $model->orders[$index10]->delivery->data->cashPayerType;
}
if (null !== $model->orders[$index10]->delivery->data->paymentForm) {
    $jsonData["orders"][$index10]["delivery"]["data"]["paymentForm"] = $model->orders[$index10]->delivery->data->paymentForm;
}
if (null !== $model->orders[$index10]->delivery->data->ownershipForm) {
    $jsonData["orders"][$index10]["delivery"]["data"]["ownershipForm"] = $model->orders[$index10]->delivery->data->ownershipForm;
}
if (null !== $model->orders[$index10]->delivery->data->accompanyingDocument) {
    $jsonData["orders"][$index10]["delivery"]["data"]["accompanyingDocument"] = $model->orders[$index10]->delivery->data->accompanyingDocument;
}
if (null !== $model->orders[$index10]->delivery->data->preferredDeliveryDate) {
    $jsonData["orders"][$index10]["delivery"]["data"]["preferredDeliveryDate"] = $model->orders[$index10]->delivery->data->preferredDeliveryDate->format('Y-m-d H:i:s');;
}
if (null !== $model->orders[$index10]->delivery->data->timeInterval) {
    $jsonData["orders"][$index10]["delivery"]["data"]["timeInterval"] = $model->orders[$index10]->delivery->data->timeInterval;
}
if (null !== $model->orders[$index10]->delivery->data->saturdayDelivery) {
    $jsonData["orders"][$index10]["delivery"]["data"]["saturdayDelivery"] = $model->orders[$index10]->delivery->data->saturdayDelivery;
}
if (null !== $model->orders[$index10]->delivery->data->deliveryDate) {
    $jsonData["orders"][$index10]["delivery"]["data"]["deliveryDate"] = $model->orders[$index10]->delivery->data->deliveryDate;
}
if (null !== $model->orders[$index10]->delivery->data->denieReason) {
    $jsonData["orders"][$index10]["delivery"]["data"]["denieReason"] = $model->orders[$index10]->delivery->data->denieReason;
}
if (null !== $model->orders[$index10]->delivery->data->backwardDelivery) {
    $jsonData["orders"][$index10]["delivery"]["data"]["backwardDelivery"] = $model->orders[$index10]->delivery->data->backwardDelivery;
}
if (null !== $model->orders[$index10]->delivery->data->backwardDeliveryCargoType) {
    $jsonData["orders"][$index10]["delivery"]["data"]["backwardDeliveryCargoType"] = $model->orders[$index10]->delivery->data->backwardDeliveryCargoType;
}
if (null !== $model->orders[$index10]->delivery->data->backwardDeliveryPayerType) {
    $jsonData["orders"][$index10]["delivery"]["data"]["backwardDeliveryPayerType"] = $model->orders[$index10]->delivery->data->backwardDeliveryPayerType;
}
if (null !== $model->orders[$index10]->delivery->data->backwardDeliveryRedeliveryString) {
    $jsonData["orders"][$index10]["delivery"]["data"]["backwardDeliveryRedeliveryString"] = $model->orders[$index10]->delivery->data->backwardDeliveryRedeliveryString;
}
if (null !== $model->orders[$index10]->delivery->data->afterpaymentOnGoodsCost) {
    $jsonData["orders"][$index10]["delivery"]["data"]["afterpaymentOnGoodsCost"] = $model->orders[$index10]->delivery->data->afterpaymentOnGoodsCost;
}
if (null !== $model->orders[$index10]->delivery->data->declaredValue) {
    $jsonData["orders"][$index10]["delivery"]["data"]["declaredValue"] = $model->orders[$index10]->delivery->data->declaredValue;
}
if (null !== $model->orders[$index10]->delivery->data->sendDate) {
    $jsonData["orders"][$index10]["delivery"]["data"]["sendDate"] = $model->orders[$index10]->delivery->data->sendDate->format('Y-m-d H:i:s');;
}
if (null !== $model->orders[$index10]->delivery->data->deliveryType) {
    $jsonData["orders"][$index10]["delivery"]["data"]["deliveryType"] = $model->orders[$index10]->delivery->data->deliveryType;
}
if (null !== $model->orders[$index10]->delivery->data->pickupType) {
    $jsonData["orders"][$index10]["delivery"]["data"]["pickupType"] = $model->orders[$index10]->delivery->data->pickupType;
}
if (null !== $model->orders[$index10]->delivery->data->pickuppointDescription) {
    $jsonData["orders"][$index10]["delivery"]["data"]["pickuppointDescription"] = $model->orders[$index10]->delivery->data->pickuppointDescription;
}
if (null !== $model->orders[$index10]->delivery->data->placesCount) {
    $jsonData["orders"][$index10]["delivery"]["data"]["placesCount"] = $model->orders[$index10]->delivery->data->placesCount;
}
if (null !== $model->orders[$index10]->delivery->data->service) {
    $jsonData["orders"][$index10]["delivery"]["data"]["service"] = $model->orders[$index10]->delivery->data->service;
}

if (0 === \count($jsonData["orders"][$index10]["delivery"]["data"])) {
    $jsonData["orders"][$index10]["delivery"]["data"] = $emptyObject;
}

}
if (null !== $model->orders[$index10]->delivery->service) {
    $jsonData["orders"][$index10]["delivery"]["service"] = [];
if (null !== $model->orders[$index10]->delivery->service->name) {
    $jsonData["orders"][$index10]["delivery"]["service"]["name"] = $model->orders[$index10]->delivery->service->name;
}
if (null !== $model->orders[$index10]->delivery->service->code) {
    $jsonData["orders"][$index10]["delivery"]["service"]["code"] = $model->orders[$index10]->delivery->service->code;
}
if (null !== $model->orders[$index10]->delivery->service->active) {
    $jsonData["orders"][$index10]["delivery"]["service"]["active"] = $model->orders[$index10]->delivery->service->active;
}

if (0 === \count($jsonData["orders"][$index10]["delivery"]["service"])) {
    $jsonData["orders"][$index10]["delivery"]["service"] = $emptyObject;
}

}
if (null !== $model->orders[$index10]->delivery->cost) {
    $jsonData["orders"][$index10]["delivery"]["cost"] = $model->orders[$index10]->delivery->cost;
}
if (null !== $model->orders[$index10]->delivery->netCost) {
    $jsonData["orders"][$index10]["delivery"]["netCost"] = $model->orders[$index10]->delivery->netCost;
}
if (null !== $model->orders[$index10]->delivery->date) {
    $jsonData["orders"][$index10]["delivery"]["date"] = $model->orders[$index10]->delivery->date->format('Y-m-d');;
}
if (null !== $model->orders[$index10]->delivery->time) {
    $jsonData["orders"][$index10]["delivery"]["time"] = [];
if (null !== $model->orders[$index10]->delivery->time->from) {
    $jsonData["orders"][$index10]["delivery"]["time"]["from"] = $model->orders[$index10]->delivery->time->from->format('H:i');;
}
if (null !== $model->orders[$index10]->delivery->time->to) {
    $jsonData["orders"][$index10]["delivery"]["time"]["to"] = $model->orders[$index10]->delivery->time->to->format('H:i');;
}
if (null !== $model->orders[$index10]->delivery->time->custom) {
    $jsonData["orders"][$index10]["delivery"]["time"]["custom"] = $model->orders[$index10]->delivery->time->custom;
}

if (0 === \count($jsonData["orders"][$index10]["delivery"]["time"])) {
    $jsonData["orders"][$index10]["delivery"]["time"] = $emptyObject;
}

}
if (null !== $model->orders[$index10]->delivery->address) {
    $jsonData["orders"][$index10]["delivery"]["address"] = [];
if (null !== $model->orders[$index10]->delivery->address->id) {
    $jsonData["orders"][$index10]["delivery"]["address"]["id"] = $model->orders[$index10]->delivery->address->id;
}
if (null !== $model->orders[$index10]->delivery->address->index) {
    $jsonData["orders"][$index10]["delivery"]["address"]["index"] = $model->orders[$index10]->delivery->address->index;
}
if (null !== $model->orders[$index10]->delivery->address->countryIso) {
    $jsonData["orders"][$index10]["delivery"]["address"]["countryIso"] = $model->orders[$index10]->delivery->address->countryIso;
}
if (null !== $model->orders[$index10]->delivery->address->region) {
    $jsonData["orders"][$index10]["delivery"]["address"]["region"] = $model->orders[$index10]->delivery->address->region;
}
if (null !== $model->orders[$index10]->delivery->address->regionId) {
    $jsonData["orders"][$index10]["delivery"]["address"]["regionId"] = $model->orders[$index10]->delivery->address->regionId;
}
if (null !== $model->orders[$index10]->delivery->address->city) {
    $jsonData["orders"][$index10]["delivery"]["address"]["city"] = $model->orders[$index10]->delivery->address->city;
}
if (null !== $model->orders[$index10]->delivery->address->cityId) {
    $jsonData["orders"][$index10]["delivery"]["address"]["cityId"] = $model->orders[$index10]->delivery->address->cityId;
}
if (null !== $model->orders[$index10]->delivery->address->cityType) {
    $jsonData["orders"][$index10]["delivery"]["address"]["cityType"] = $model->orders[$index10]->delivery->address->cityType;
}
if (null !== $model->orders[$index10]->delivery->address->street) {
    $jsonData["orders"][$index10]["delivery"]["address"]["street"] = $model->orders[$index10]->delivery->address->street;
}
if (null !== $model->orders[$index10]->delivery->address->streetId) {
    $jsonData["orders"][$index10]["delivery"]["address"]["streetId"] = $model->orders[$index10]->delivery->address->streetId;
}
if (null !== $model->orders[$index10]->delivery->address->streetType) {
    $jsonData["orders"][$index10]["delivery"]["address"]["streetType"] = $model->orders[$index10]->delivery->address->streetType;
}
if (null !== $model->orders[$index10]->delivery->address->building) {
    $jsonData["orders"][$index10]["delivery"]["address"]["building"] = $model->orders[$index10]->delivery->address->building;
}
if (null !== $model->orders[$index10]->delivery->address->flat) {
    $jsonData["orders"][$index10]["delivery"]["address"]["flat"] = $model->orders[$index10]->delivery->address->flat;
}
if (null !== $model->orders[$index10]->delivery->address->floor) {
    $jsonData["orders"][$index10]["delivery"]["address"]["floor"] = $model->orders[$index10]->delivery->address->floor;
}
if (null !== $model->orders[$index10]->delivery->address->block) {
    $jsonData["orders"][$index10]["delivery"]["address"]["block"] = $model->orders[$index10]->delivery->address->block;
}
if (null !== $model->orders[$index10]->delivery->address->house) {
    $jsonData["orders"][$index10]["delivery"]["address"]["house"] = $model->orders[$index10]->delivery->address->house;
}
if (null !== $model->orders[$index10]->delivery->address->housing) {
    $jsonData["orders"][$index10]["delivery"]["address"]["housing"] = $model->orders[$index10]->delivery->address->housing;
}
if (null !== $model->orders[$index10]->delivery->address->metro) {
    $jsonData["orders"][$index10]["delivery"]["address"]["metro"] = $model->orders[$index10]->delivery->address->metro;
}
if (null !== $model->orders[$index10]->delivery->address->text) {
    $jsonData["orders"][$index10]["delivery"]["address"]["text"] = $model->orders[$index10]->delivery->address->text;
}
if (null !== $model->orders[$index10]->delivery->address->notes) {
    $jsonData["orders"][$index10]["delivery"]["address"]["notes"] = $model->orders[$index10]->delivery->address->notes;
}

if (0 === \count($jsonData["orders"][$index10]["delivery"]["address"])) {
    $jsonData["orders"][$index10]["delivery"]["address"] = $emptyObject;
}

}
if (null !== $model->orders[$index10]->delivery->vatRate) {
    $jsonData["orders"][$index10]["delivery"]["vatRate"] = $model->orders[$index10]->delivery->vatRate;
}

if (0 === \count($jsonData["orders"][$index10]["delivery"])) {
    $jsonData["orders"][$index10]["delivery"] = $emptyObject;
}

}
if (null !== $model->orders[$index10]->marketplace) {
    $jsonData["orders"][$index10]["marketplace"] = [];
if (null !== $model->orders[$index10]->marketplace->code) {
    $jsonData["orders"][$index10]["marketplace"]["code"] = $model->orders[$index10]->marketplace->code;
}
if (null !== $model->orders[$index10]->marketplace->orderId) {
    $jsonData["orders"][$index10]["marketplace"]["orderId"] = $model->orders[$index10]->marketplace->orderId;
}

if (0 === \count($jsonData["orders"][$index10]["marketplace"])) {
    $jsonData["orders"][$index10]["marketplace"] = $emptyObject;
}

}
if (null !== $model->orders[$index10]->site) {
    $jsonData["orders"][$index10]["site"] = $model->orders[$index10]->site;
}
if (null !== $model->orders[$index10]->status) {
    $jsonData["orders"][$index10]["status"] = $model->orders[$index10]->status;
}
if (null !== $model->orders[$index10]->statusComment) {
    $jsonData["orders"][$index10]["statusComment"] = $model->orders[$index10]->statusComment;
}
if (null !== $model->orders[$index10]->source) {
    $jsonData["orders"][$index10]["source"] = [];
if (null !== $model->orders[$index10]->source->source) {
    $jsonData["orders"][$index10]["source"]["source"] = $model->orders[$index10]->source->source;
}
if (null !== $model->orders[$index10]->source->medium) {
    $jsonData["orders"][$index10]["source"]["medium"] = $model->orders[$index10]->source->medium;
}
if (null !== $model->orders[$index10]->source->campaign) {
    $jsonData["orders"][$index10]["source"]["campaign"] = $model->orders[$index10]->source->campaign;
}
if (null !== $model->orders[$index10]->source->keyword) {
    $jsonData["orders"][$index10]["source"]["keyword"] = $model->orders[$index10]->source->keyword;
}
if (null !== $model->orders[$index10]->source->content) {
    $jsonData["orders"][$index10]["source"]["content"] = $model->orders[$index10]->source->content;
}

if (0 === \count($jsonData["orders"][$index10]["source"])) {
    $jsonData["orders"][$index10]["source"] = $emptyObject;
}

}
if (null !== $model->orders[$index10]->items) {
    $jsonData["orders"][$index10]["items"] = [];
foreach (array_keys($model->orders[$index10]->items) as $index29) {
    $jsonData["orders"][$index10]["items"][$index29] = [];
if (null !== $model->orders[$index10]->items[$index29]->externalId) {
    $jsonData["orders"][$index10]["items"][$index29]["externalId"] = $model->orders[$index10]->items[$index29]->externalId;
}
if (null !== $model->orders[$index10]->items[$index29]->markingCodes) {
    $jsonData["orders"][$index10]["items"][$index29]["markingCodes"] = [];
foreach (array_keys($model->orders[$index10]->items[$index29]->markingCodes) as $index55) {
    $jsonData["orders"][$index10]["items"][$index29]["markingCodes"] = $model->orders[$index10]->items[$index29]->markingCodes;
}

}
if (null !== $model->orders[$index10]->items[$index29]->id) {
    $jsonData["orders"][$index10]["items"][$index29]["id"] = $model->orders[$index10]->items[$index29]->id;
}
if (null !== $model->orders[$index10]->items[$index29]->externalIds) {
    $jsonData["orders"][$index10]["items"][$index29]["externalIds"] = [];
foreach (array_keys($model->orders[$index10]->items[$index29]->externalIds) as $index54) {
    $jsonData["orders"][$index10]["items"][$index29]["externalIds"][$index54] = [];
if (null !== $model->orders[$index10]->items[$index29]->externalIds[$index54]->code) {
    $jsonData["orders"][$index10]["items"][$index29]["externalIds"][$index54]["code"] = $model->orders[$index10]->items[$index29]->externalIds[$index54]->code;
}
if (null !== $model->orders[$index10]->items[$index29]->externalIds[$index54]->value) {
    $jsonData["orders"][$index10]["items"][$index29]["externalIds"][$index54]["value"] = $model->orders[$index10]->items[$index29]->externalIds[$index54]->value;
}

if (0 === \count($jsonData["orders"][$index10]["items"][$index29]["externalIds"][$index54])) {
    $jsonData["orders"][$index10]["items"][$index29]["externalIds"][$index54] = $emptyObject;
}

}

}
if (null !== $model->orders[$index10]->items[$index29]->priceType) {
    $jsonData["orders"][$index10]["items"][$index29]["priceType"] = [];
if (null !== $model->orders[$index10]->items[$index29]->priceType->code) {
    $jsonData["orders"][$index10]["items"][$index29]["priceType"]["code"] = $model->orders[$index10]->items[$index29]->priceType->code;
}

if (0 === \count($jsonData["orders"][$index10]["items"][$index29]["priceType"])) {
    $jsonData["orders"][$index10]["items"][$index29]["priceType"] = $emptyObject;
}

}
if (null !== $model->orders[$index10]->items[$index29]->initialPrice) {
    $jsonData["orders"][$index10]["items"][$index29]["initialPrice"] = $model->orders[$index10]->items[$index29]->initialPrice;
}
if (null !== $model->orders[$index10]->items[$index29]->discountManualAmount) {
    $jsonData["orders"][$index10]["items"][$index29]["discountManualAmount"] = $model->orders[$index10]->items[$index29]->discountManualAmount;
}
if (null !== $model->orders[$index10]->items[$index29]->discountManualPercent) {
    $jsonData["orders"][$index10]["items"][$index29]["discountManualPercent"] = $model->orders[$index10]->items[$index29]->discountManualPercent;
}
if (null !== $model->orders[$index10]->items[$index29]->discountTotal) {
    $jsonData["orders"][$index10]["items"][$index29]["discountTotal"] = $model->orders[$index10]->items[$index29]->discountTotal;
}
if (null !== $model->orders[$index10]->items[$index29]->prices) {
    $jsonData["orders"][$index10]["items"][$index29]["prices"] = [];
foreach (array_keys($model->orders[$index10]->items[$index29]->prices) as $index49) {
    $jsonData["orders"][$index10]["items"][$index29]["prices"][$index49] = [];
if (null !== $model->orders[$index10]->items[$index29]->prices[$index49]->price) {
    $jsonData["orders"][$index10]["items"][$index29]["prices"][$index49]["price"] = $model->orders[$index10]->items[$index29]->prices[$index49]->price;
}
if (null !== $model->orders[$index10]->items[$index29]->prices[$index49]->quantity) {
    $jsonData["orders"][$index10]["items"][$index29]["prices"][$index49]["quantity"] = $model->orders[$index10]->items[$index29]->prices[$index49]->quantity;
}

if (0 === \count($jsonData["orders"][$index10]["items"][$index29]["prices"][$index49])) {
    $jsonData["orders"][$index10]["items"][$index29]["prices"][$index49] = $emptyObject;
}

}

}
if (null !== $model->orders[$index10]->items[$index29]->vatRate) {
    $jsonData["orders"][$index10]["items"][$index29]["vatRate"] = $model->orders[$index10]->items[$index29]->vatRate;
}
if (null !== $model->orders[$index10]->items[$index29]->createdAt) {
    $jsonData["orders"][$index10]["items"][$index29]["createdAt"] = $model->orders[$index10]->items[$index29]->createdAt->format('Y-m-d H:i:s');;
}
if (null !== $model->orders[$index10]->items[$index29]->quantity) {
    $jsonData["orders"][$index10]["items"][$index29]["quantity"] = $model->orders[$index10]->items[$index29]->quantity;
}
if (null !== $model->orders[$index10]->items[$index29]->status) {
    $jsonData["orders"][$index10]["items"][$index29]["status"] = $model->orders[$index10]->items[$index29]->status;
}
if (null !== $model->orders[$index10]->items[$index29]->comment) {
    $jsonData["orders"][$index10]["items"][$index29]["comment"] = $model->orders[$index10]->items[$index29]->comment;
}
if (null !== $model->orders[$index10]->items[$index29]->offer) {
    $jsonData["orders"][$index10]["items"][$index29]["offer"] = [];
if (null !== $model->orders[$index10]->items[$index29]->offer->displayName) {
    $jsonData["orders"][$index10]["items"][$index29]["offer"]["displayName"] = $model->orders[$index10]->items[$index29]->offer->displayName;
}
if (null !== $model->orders[$index10]->items[$index29]->offer->id) {
    $jsonData["orders"][$index10]["items"][$index29]["offer"]["id"] = $model->orders[$index10]->items[$index29]->offer->id;
}
if (null !== $model->orders[$index10]->items[$index29]->offer->externalId) {
    $jsonData["orders"][$index10]["items"][$index29]["offer"]["externalId"] = $model->orders[$index10]->items[$index29]->offer->externalId;
}
if (null !== $model->orders[$index10]->items[$index29]->offer->xmlId) {
    $jsonData["orders"][$index10]["items"][$index29]["offer"]["xmlId"] = $model->orders[$index10]->items[$index29]->offer->xmlId;
}
if (null !== $model->orders[$index10]->items[$index29]->offer->name) {
    $jsonData["orders"][$index10]["items"][$index29]["offer"]["name"] = $model->orders[$index10]->items[$index29]->offer->name;
}
if (null !== $model->orders[$index10]->items[$index29]->offer->article) {
    $jsonData["orders"][$index10]["items"][$index29]["offer"]["article"] = $model->orders[$index10]->items[$index29]->offer->article;
}
if (null !== $model->orders[$index10]->items[$index29]->offer->vatRate) {
    $jsonData["orders"][$index10]["items"][$index29]["offer"]["vatRate"] = $model->orders[$index10]->items[$index29]->offer->vatRate;
}
if (null !== $model->orders[$index10]->items[$index29]->offer->unit) {
    $jsonData["orders"][$index10]["items"][$index29]["offer"]["unit"] = [];
if (null !== $model->orders[$index10]->items[$index29]->offer->unit->code) {
    $jsonData["orders"][$index10]["items"][$index29]["offer"]["unit"]["code"] = $model->orders[$index10]->items[$index29]->offer->unit->code;
}
if (null !== $model->orders[$index10]->items[$index29]->offer->unit->name) {
    $jsonData["orders"][$index10]["items"][$index29]["offer"]["unit"]["name"] = $model->orders[$index10]->items[$index29]->offer->unit->name;
}
if (null !== $model->orders[$index10]->items[$index29]->offer->unit->sym) {
    $jsonData["orders"][$index10]["items"][$index29]["offer"]["unit"]["sym"] = $model->orders[$index10]->items[$index29]->offer->unit->sym;
}

if (0 === \count($jsonData["orders"][$index10]["items"][$index29]["offer"]["unit"])) {
    $jsonData["orders"][$index10]["items"][$index29]["offer"]["unit"] = $emptyObject;
}

}
if (null !== $model->orders[$index10]->items[$index29]->offer->barcode) {
    $jsonData["orders"][$index10]["items"][$index29]["offer"]["barcode"] = $model->orders[$index10]->items[$index29]->offer->barcode;
}
if (null !== $model->orders[$index10]->items[$index29]->offer->properties) {
    $jsonData["orders"][$index10]["items"][$index29]["offer"]["properties"] = [];
foreach (array_keys($model->orders[$index10]->items[$index29]->offer->properties) as $index62) {
    $jsonData["orders"][$index10]["items"][$index29]["offer"]["properties"] = $model->orders[$index10]->items[$index29]->offer->properties;
}

}

if (0 === \count($jsonData["orders"][$index10]["items"][$index29]["offer"])) {
    $jsonData["orders"][$index10]["items"][$index29]["offer"] = $emptyObject;
}

}
if (null !== $model->orders[$index10]->items[$index29]->order) {
    $jsonData["orders"][$index10]["items"][$index29]["order"] = [];
if (null !== $model->orders[$index10]->items[$index29]->order->id) {
    $jsonData["orders"][$index10]["items"][$index29]["order"]["id"] = $model->orders[$index10]->items[$index29]->order->id;
}

if (0 === \count($jsonData["orders"][$index10]["items"][$index29]["order"])) {
    $jsonData["orders"][$index10]["items"][$index29]["order"] = $emptyObject;
}

}
if (null !== $model->orders[$index10]->items[$index29]->productName) {
    $jsonData["orders"][$index10]["items"][$index29]["productName"] = $model->orders[$index10]->items[$index29]->productName;
}
if (null !== $model->orders[$index10]->items[$index29]->isCanceled) {
    $jsonData["orders"][$index10]["items"][$index29]["isCanceled"] = $model->orders[$index10]->items[$index29]->isCanceled;
}
if (null !== $model->orders[$index10]->items[$index29]->properties) {
    if (0 === \count($model->orders[$index10]->items[$index29]->properties)) {
    $jsonData["orders"][$index10]["items"][$index29]["properties"] = $emptyHashmap;
} else {
    foreach (array_keys($model->orders[$index10]->items[$index29]->properties) as $index53) {
        $jsonData["orders"][$index10]["items"][$index29]["properties"][$index53] = [];
if (null !== $model->orders[$index10]->items[$index29]->properties[$index53]->code) {
    $jsonData["orders"][$index10]["items"][$index29]["properties"][$index53]["code"] = $model->orders[$index10]->items[$index29]->properties[$index53]->code;
}
if (null !== $model->orders[$index10]->items[$index29]->properties[$index53]->name) {
    $jsonData["orders"][$index10]["items"][$index29]["properties"][$index53]["name"] = $model->orders[$index10]->items[$index29]->properties[$index53]->name;
}
if (null !== $model->orders[$index10]->items[$index29]->properties[$index53]->value) {
    $jsonData["orders"][$index10]["items"][$index29]["properties"][$index53]["value"] = $model->orders[$index10]->items[$index29]->properties[$index53]->value;
}

if (0 === \count($jsonData["orders"][$index10]["items"][$index29]["properties"][$index53])) {
    $jsonData["orders"][$index10]["items"][$index29]["properties"][$index53] = $emptyObject;
}

    }
}

}
if (null !== $model->orders[$index10]->items[$index29]->purchasePrice) {
    $jsonData["orders"][$index10]["items"][$index29]["purchasePrice"] = $model->orders[$index10]->items[$index29]->purchasePrice;
}

if (0 === \count($jsonData["orders"][$index10]["items"][$index29])) {
    $jsonData["orders"][$index10]["items"][$index29] = $emptyObject;
}

}

}
if (null !== $model->orders[$index10]->fullPaidAt) {
    $jsonData["orders"][$index10]["fullPaidAt"] = $model->orders[$index10]->fullPaidAt->format('Y-m-d H:i:s');;
}
if (null !== $model->orders[$index10]->payments) {
    $jsonData["orders"][$index10]["payments"] = [];
foreach (array_keys($model->orders[$index10]->payments) as $index32) {
    $jsonData["orders"][$index10]["payments"][$index32] = [];
if (null !== $model->orders[$index10]->payments[$index32]->id) {
    $jsonData["orders"][$index10]["payments"][$index32]["id"] = $model->orders[$index10]->payments[$index32]->id;
}
if (null !== $model->orders[$index10]->payments[$index32]->status) {
    $jsonData["orders"][$index10]["payments"][$index32]["status"] = $model->orders[$index10]->payments[$index32]->status;
}
if (null !== $model->orders[$index10]->payments[$index32]->type) {
    $jsonData["orders"][$index10]["payments"][$index32]["type"] = $model->orders[$index10]->payments[$index32]->type;
}
if (null !== $model->orders[$index10]->payments[$index32]->externalId) {
    $jsonData["orders"][$index10]["payments"][$index32]["externalId"] = $model->orders[$index10]->payments[$index32]->externalId;
}
if (null !== $model->orders[$index10]->payments[$index32]->amount) {
    $jsonData["orders"][$index10]["payments"][$index32]["amount"] = $model->orders[$index10]->payments[$index32]->amount;
}
if (null !== $model->orders[$index10]->payments[$index32]->paidAt) {
    $jsonData["orders"][$index10]["payments"][$index32]["paidAt"] = $model->orders[$index10]->payments[$index32]->paidAt->format('Y-m-d H:i:s');;
}
if (null !== $model->orders[$index10]->payments[$index32]->comment) {
    $jsonData["orders"][$index10]["payments"][$index32]["comment"] = $model->orders[$index10]->payments[$index32]->comment;
}

if (0 === \count($jsonData["orders"][$index10]["payments"][$index32])) {
    $jsonData["orders"][$index10]["payments"][$index32] = $emptyObject;
}

}

}
if (null !== $model->orders[$index10]->fromApi) {
    $jsonData["orders"][$index10]["fromApi"] = $model->orders[$index10]->fromApi;
}
if (null !== $model->orders[$index10]->weight) {
    $jsonData["orders"][$index10]["weight"] = $model->orders[$index10]->weight;
}
if (null !== $model->orders[$index10]->length) {
    $jsonData["orders"][$index10]["length"] = $model->orders[$index10]->length;
}
if (null !== $model->orders[$index10]->width) {
    $jsonData["orders"][$index10]["width"] = $model->orders[$index10]->width;
}
if (null !== $model->orders[$index10]->height) {
    $jsonData["orders"][$index10]["height"] = $model->orders[$index10]->height;
}
if (null !== $model->orders[$index10]->shipmentStore) {
    $jsonData["orders"][$index10]["shipmentStore"] = $model->orders[$index10]->shipmentStore;
}
if (null !== $model->orders[$index10]->shipmentDate) {
    $jsonData["orders"][$index10]["shipmentDate"] = $model->orders[$index10]->shipmentDate->format('Y-m-d');;
}
if (null !== $model->orders[$index10]->shipped) {
    $jsonData["orders"][$index10]["shipped"] = $model->orders[$index10]->shipped;
}
if (null !== $model->orders[$index10]->dialogId) {
    $jsonData["orders"][$index10]["dialogId"] = $model->orders[$index10]->dialogId;
}
if (null !== $model->orders[$index10]->customFields) {
    $jsonData["orders"][$index10]["customFields"] = [];
foreach (array_keys($model->orders[$index10]->customFields) as $index36) {
    $jsonData["orders"][$index10]["customFields"] = $model->orders[$index10]->customFields;
}

}
if (null !== $model->orders[$index10]->clientId) {
    $jsonData["orders"][$index10]["clientId"] = $model->orders[$index10]->clientId;
}
if (null !== $model->orders[$index10]->loyaltyEventId) {
    $jsonData["orders"][$index10]["loyaltyEventId"] = $model->orders[$index10]->loyaltyEventId;
}

if (0 === \count($jsonData["orders"][$index10])) {
    $jsonData["orders"][$index10] = $emptyObject;
}

}

}

if (0 === \count($jsonData)) {
    $jsonData = $emptyObject;
}


    return $jsonData;
}
