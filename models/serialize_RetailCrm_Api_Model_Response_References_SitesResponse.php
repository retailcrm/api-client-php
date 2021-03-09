<?php

function serialize_RetailCrm_Api_Model_Response_References_SitesResponse(RetailCrm\Api\Model\Response\References\SitesResponse $model, bool $useStdClass = true)
{
    $emptyHashmap = $useStdClass ? new \stdClass() : [];
    $emptyObject = $useStdClass ? new \stdClass() : [];

    $jsonData = [];
if (null !== $model->success) {
    $jsonData["success"] = $model->success;
}
if (null !== $model->sites) {
    $jsonData["sites"] = [];
foreach (array_keys($model->sites) as $index9) {
    $jsonData["sites"][$index9] = [];
if (null !== $model->sites[$index9]->name) {
    $jsonData["sites"][$index9]["name"] = $model->sites[$index9]->name;
}
if (null !== $model->sites[$index9]->url) {
    $jsonData["sites"][$index9]["url"] = $model->sites[$index9]->url;
}
if (null !== $model->sites[$index9]->code) {
    $jsonData["sites"][$index9]["code"] = $model->sites[$index9]->code;
}
if (null !== $model->sites[$index9]->description) {
    $jsonData["sites"][$index9]["description"] = $model->sites[$index9]->description;
}
if (null !== $model->sites[$index9]->phones) {
    $jsonData["sites"][$index9]["phones"] = $model->sites[$index9]->phones;
}
if (null !== $model->sites[$index9]->address) {
    $jsonData["sites"][$index9]["address"] = $model->sites[$index9]->address;
}
if (null !== $model->sites[$index9]->zip) {
    $jsonData["sites"][$index9]["zip"] = $model->sites[$index9]->zip;
}
if (null !== $model->sites[$index9]->defaultForCrm) {
    $jsonData["sites"][$index9]["defaultForCrm"] = $model->sites[$index9]->defaultForCrm;
}
if (null !== $model->sites[$index9]->ymlUrl) {
    $jsonData["sites"][$index9]["ymlUrl"] = $model->sites[$index9]->ymlUrl;
}
if (null !== $model->sites[$index9]->loadFromYml) {
    $jsonData["sites"][$index9]["loadFromYml"] = $model->sites[$index9]->loadFromYml;
}
if (null !== $model->sites[$index9]->catalogUpdatedAt) {
    $jsonData["sites"][$index9]["catalogUpdatedAt"] = $model->sites[$index9]->catalogUpdatedAt->format('Y-m-d H:i:s');;
}
if (null !== $model->sites[$index9]->catalogLoadingAt) {
    $jsonData["sites"][$index9]["catalogLoadingAt"] = $model->sites[$index9]->catalogLoadingAt->format('Y-m-d H:i:s');;
}
if (null !== $model->sites[$index9]->contragent) {
    $jsonData["sites"][$index9]["contragent"] = [];
if (null !== $model->sites[$index9]->contragent->contragentType) {
    $jsonData["sites"][$index9]["contragent"]["contragentType"] = $model->sites[$index9]->contragent->contragentType;
}
if (null !== $model->sites[$index9]->contragent->legalName) {
    $jsonData["sites"][$index9]["contragent"]["legalName"] = $model->sites[$index9]->contragent->legalName;
}
if (null !== $model->sites[$index9]->contragent->legalAddress) {
    $jsonData["sites"][$index9]["contragent"]["legalAddress"] = $model->sites[$index9]->contragent->legalAddress;
}
if (null !== $model->sites[$index9]->contragent->INN) {
    $jsonData["sites"][$index9]["contragent"]["INN"] = $model->sites[$index9]->contragent->INN;
}
if (null !== $model->sites[$index9]->contragent->OKPO) {
    $jsonData["sites"][$index9]["contragent"]["OKPO"] = $model->sites[$index9]->contragent->OKPO;
}
if (null !== $model->sites[$index9]->contragent->KPP) {
    $jsonData["sites"][$index9]["contragent"]["KPP"] = $model->sites[$index9]->contragent->KPP;
}
if (null !== $model->sites[$index9]->contragent->OGRN) {
    $jsonData["sites"][$index9]["contragent"]["OGRN"] = $model->sites[$index9]->contragent->OGRN;
}
if (null !== $model->sites[$index9]->contragent->OGRNIP) {
    $jsonData["sites"][$index9]["contragent"]["OGRNIP"] = $model->sites[$index9]->contragent->OGRNIP;
}
if (null !== $model->sites[$index9]->contragent->certificateNumber) {
    $jsonData["sites"][$index9]["contragent"]["certificateNumber"] = $model->sites[$index9]->contragent->certificateNumber;
}
if (null !== $model->sites[$index9]->contragent->certificateDate) {
    $jsonData["sites"][$index9]["contragent"]["certificateDate"] = $model->sites[$index9]->contragent->certificateDate->format('Y-m-d H:i:s');;
}
if (null !== $model->sites[$index9]->contragent->BIK) {
    $jsonData["sites"][$index9]["contragent"]["BIK"] = $model->sites[$index9]->contragent->BIK;
}
if (null !== $model->sites[$index9]->contragent->bank) {
    $jsonData["sites"][$index9]["contragent"]["bank"] = $model->sites[$index9]->contragent->bank;
}
if (null !== $model->sites[$index9]->contragent->bankAddress) {
    $jsonData["sites"][$index9]["contragent"]["bankAddress"] = $model->sites[$index9]->contragent->bankAddress;
}
if (null !== $model->sites[$index9]->contragent->corrAccount) {
    $jsonData["sites"][$index9]["contragent"]["corrAccount"] = $model->sites[$index9]->contragent->corrAccount;
}
if (null !== $model->sites[$index9]->contragent->bankAccount) {
    $jsonData["sites"][$index9]["contragent"]["bankAccount"] = $model->sites[$index9]->contragent->bankAccount;
}
if (null !== $model->sites[$index9]->contragent->code) {
    $jsonData["sites"][$index9]["contragent"]["code"] = $model->sites[$index9]->contragent->code;
}
if (null !== $model->sites[$index9]->contragent->countryIso) {
    $jsonData["sites"][$index9]["contragent"]["countryIso"] = $model->sites[$index9]->contragent->countryIso;
}
if (null !== $model->sites[$index9]->contragent->vatRate) {
    $jsonData["sites"][$index9]["contragent"]["vatRate"] = $model->sites[$index9]->contragent->vatRate;
}

if (0 === \count($jsonData["sites"][$index9]["contragent"])) {
    $jsonData["sites"][$index9]["contragent"] = $emptyObject;
}

}
if (null !== $model->sites[$index9]->contragentCode) {
    $jsonData["sites"][$index9]["contragentCode"] = $model->sites[$index9]->contragentCode;
}
if (null !== $model->sites[$index9]->countryIso) {
    $jsonData["sites"][$index9]["countryIso"] = $model->sites[$index9]->countryIso;
}

if (0 === \count($jsonData["sites"][$index9])) {
    $jsonData["sites"][$index9] = $emptyObject;
}

}

}

if (0 === \count($jsonData)) {
    $jsonData = $emptyObject;
}


    return $jsonData;
}
