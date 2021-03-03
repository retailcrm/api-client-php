<?php

function serialize_RetailCrm_Api_Model_Response_References_LegalEntitiesResponse(RetailCrm\Api\Model\Response\References\LegalEntitiesResponse $model, bool $useStdClass = true)
{
    $emptyHashmap = $useStdClass ? new \stdClass() : [];
    $emptyObject = $useStdClass ? new \stdClass() : [];

    $jsonData = [];
if (null !== $model->success) {
    $jsonData["success"] = $model->success;
}
if (null !== $model->legalEntities) {
    $jsonData["legalEntities"] = [];
foreach (array_keys($model->legalEntities) as $index17) {
    $jsonData["legalEntities"][$index17] = [];
if (null !== $model->legalEntities[$index17]->contragentType) {
    $jsonData["legalEntities"][$index17]["contragentType"] = $model->legalEntities[$index17]->contragentType;
}
if (null !== $model->legalEntities[$index17]->legalName) {
    $jsonData["legalEntities"][$index17]["legalName"] = $model->legalEntities[$index17]->legalName;
}
if (null !== $model->legalEntities[$index17]->legalAddress) {
    $jsonData["legalEntities"][$index17]["legalAddress"] = $model->legalEntities[$index17]->legalAddress;
}
if (null !== $model->legalEntities[$index17]->INN) {
    $jsonData["legalEntities"][$index17]["INN"] = $model->legalEntities[$index17]->INN;
}
if (null !== $model->legalEntities[$index17]->OKPO) {
    $jsonData["legalEntities"][$index17]["OKPO"] = $model->legalEntities[$index17]->OKPO;
}
if (null !== $model->legalEntities[$index17]->KPP) {
    $jsonData["legalEntities"][$index17]["KPP"] = $model->legalEntities[$index17]->KPP;
}
if (null !== $model->legalEntities[$index17]->OGRN) {
    $jsonData["legalEntities"][$index17]["OGRN"] = $model->legalEntities[$index17]->OGRN;
}
if (null !== $model->legalEntities[$index17]->OGRNIP) {
    $jsonData["legalEntities"][$index17]["OGRNIP"] = $model->legalEntities[$index17]->OGRNIP;
}
if (null !== $model->legalEntities[$index17]->certificateNumber) {
    $jsonData["legalEntities"][$index17]["certificateNumber"] = $model->legalEntities[$index17]->certificateNumber;
}
if (null !== $model->legalEntities[$index17]->certificateDate) {
    $jsonData["legalEntities"][$index17]["certificateDate"] = $model->legalEntities[$index17]->certificateDate->format('Y-m-d H:i:s');;
}
if (null !== $model->legalEntities[$index17]->BIK) {
    $jsonData["legalEntities"][$index17]["BIK"] = $model->legalEntities[$index17]->BIK;
}
if (null !== $model->legalEntities[$index17]->bank) {
    $jsonData["legalEntities"][$index17]["bank"] = $model->legalEntities[$index17]->bank;
}
if (null !== $model->legalEntities[$index17]->bankAddress) {
    $jsonData["legalEntities"][$index17]["bankAddress"] = $model->legalEntities[$index17]->bankAddress;
}
if (null !== $model->legalEntities[$index17]->corrAccount) {
    $jsonData["legalEntities"][$index17]["corrAccount"] = $model->legalEntities[$index17]->corrAccount;
}
if (null !== $model->legalEntities[$index17]->bankAccount) {
    $jsonData["legalEntities"][$index17]["bankAccount"] = $model->legalEntities[$index17]->bankAccount;
}
if (null !== $model->legalEntities[$index17]->code) {
    $jsonData["legalEntities"][$index17]["code"] = $model->legalEntities[$index17]->code;
}
if (null !== $model->legalEntities[$index17]->countryIso) {
    $jsonData["legalEntities"][$index17]["countryIso"] = $model->legalEntities[$index17]->countryIso;
}
if (null !== $model->legalEntities[$index17]->vatRate) {
    $jsonData["legalEntities"][$index17]["vatRate"] = $model->legalEntities[$index17]->vatRate;
}

if (0 === \count($jsonData["legalEntities"][$index17])) {
    $jsonData["legalEntities"][$index17] = $emptyObject;
}

}

}

if (0 === \count($jsonData)) {
    $jsonData = $emptyObject;
}


    return $jsonData;
}
