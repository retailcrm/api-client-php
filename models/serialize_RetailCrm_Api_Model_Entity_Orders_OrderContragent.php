<?php

function serialize_RetailCrm_Api_Model_Entity_Orders_OrderContragent(RetailCrm\Api\Model\Entity\Orders\OrderContragent $model, bool $useStdClass = true)
{
    $emptyHashmap = $useStdClass ? new \stdClass() : [];
    $emptyObject = $useStdClass ? new \stdClass() : [];

    $jsonData = [];
if (null !== $model->contragentType) {
    $jsonData["contragentType"] = $model->contragentType;
}
if (null !== $model->legalName) {
    $jsonData["legalName"] = $model->legalName;
}
if (null !== $model->legalAddress) {
    $jsonData["legalAddress"] = $model->legalAddress;
}
if (null !== $model->INN) {
    $jsonData["INN"] = $model->INN;
}
if (null !== $model->OKPO) {
    $jsonData["OKPO"] = $model->OKPO;
}
if (null !== $model->KPP) {
    $jsonData["KPP"] = $model->KPP;
}
if (null !== $model->OGRN) {
    $jsonData["OGRN"] = $model->OGRN;
}
if (null !== $model->OGRNIP) {
    $jsonData["OGRNIP"] = $model->OGRNIP;
}
if (null !== $model->certificateNumber) {
    $jsonData["certificateNumber"] = $model->certificateNumber;
}
if (null !== $model->certificateDate) {
    $jsonData["certificateDate"] = $model->certificateDate->format('Y-m-d H:i:s');;
}
if (null !== $model->BIK) {
    $jsonData["BIK"] = $model->BIK;
}
if (null !== $model->bank) {
    $jsonData["bank"] = $model->bank;
}
if (null !== $model->bankAddress) {
    $jsonData["bankAddress"] = $model->bankAddress;
}
if (null !== $model->corrAccount) {
    $jsonData["corrAccount"] = $model->corrAccount;
}
if (null !== $model->bankAccount) {
    $jsonData["bankAccount"] = $model->bankAccount;
}

if (0 === \count($jsonData)) {
    $jsonData = $emptyObject;
}


    return $jsonData;
}
