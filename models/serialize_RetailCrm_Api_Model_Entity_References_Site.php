<?php

function serialize_RetailCrm_Api_Model_Entity_References_Site(RetailCrm\Api\Model\Entity\References\Site $model, bool $useStdClass = true)
{
    $emptyHashmap = $useStdClass ? new \stdClass() : [];
    $emptyObject = $useStdClass ? new \stdClass() : [];

    $jsonData = [];
if (null !== $model->name) {
    $jsonData["name"] = $model->name;
}
if (null !== $model->url) {
    $jsonData["url"] = $model->url;
}
if (null !== $model->code) {
    $jsonData["code"] = $model->code;
}
if (null !== $model->description) {
    $jsonData["description"] = $model->description;
}
if (null !== $model->phones) {
    $jsonData["phones"] = $model->phones;
}
if (null !== $model->address) {
    $jsonData["address"] = $model->address;
}
if (null !== $model->zip) {
    $jsonData["zip"] = $model->zip;
}
if (null !== $model->defaultForCrm) {
    $jsonData["defaultForCrm"] = $model->defaultForCrm;
}
if (null !== $model->ymlUrl) {
    $jsonData["ymlUrl"] = $model->ymlUrl;
}
if (null !== $model->loadFromYml) {
    $jsonData["loadFromYml"] = $model->loadFromYml;
}
if (null !== $model->catalogUpdatedAt) {
    $jsonData["catalogUpdatedAt"] = $model->catalogUpdatedAt->format('Y-m-d H:i:s');;
}
if (null !== $model->catalogLoadingAt) {
    $jsonData["catalogLoadingAt"] = $model->catalogLoadingAt->format('Y-m-d H:i:s');;
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
if (null !== $model->contragent->code) {
    $jsonData["contragent"]["code"] = $model->contragent->code;
}
if (null !== $model->contragent->countryIso) {
    $jsonData["contragent"]["countryIso"] = $model->contragent->countryIso;
}
if (null !== $model->contragent->vatRate) {
    $jsonData["contragent"]["vatRate"] = $model->contragent->vatRate;
}

if (0 === \count($jsonData["contragent"])) {
    $jsonData["contragent"] = $emptyObject;
}

}
if (null !== $model->countryIso) {
    $jsonData["countryIso"] = $model->countryIso;
}

if (0 === \count($jsonData)) {
    $jsonData = $emptyObject;
}


    return $jsonData;
}
