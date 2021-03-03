<?php

function deserialize_RetailCrm_Api_Model_Entity_References_Site(array $jsonData): RetailCrm\Api\Model\Entity\References\Site
{
    
$model = new RetailCrm\Api\Model\Entity\References\Site();
if (isset($jsonData['name'])) {
    $model->name = $jsonData['name'];

}
if (isset($jsonData['url'])) {
    $model->url = $jsonData['url'];

}
if (isset($jsonData['code'])) {
    $model->code = $jsonData['code'];

}
if (isset($jsonData['description'])) {
    $model->description = $jsonData['description'];

}
if (isset($jsonData['phones'])) {
    $model->phones = $jsonData['phones'];

}
if (isset($jsonData['address'])) {
    $model->address = $jsonData['address'];

}
if (isset($jsonData['zip'])) {
    $model->zip = $jsonData['zip'];

}
if (isset($jsonData['defaultForCrm'])) {
    $model->defaultForCrm = $jsonData['defaultForCrm'];

}
if (isset($jsonData['ymlUrl'])) {
    $model->ymlUrl = $jsonData['ymlUrl'];

}
if (isset($jsonData['loadFromYml'])) {
    $model->loadFromYml = $jsonData['loadFromYml'];

}
if (isset($jsonData['catalogUpdatedAt'])) {
    $model->catalogUpdatedAt = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['catalogUpdatedAt']);

}
if (isset($jsonData['catalogLoadingAt'])) {
    $model->catalogLoadingAt = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['catalogLoadingAt']);

}
if (isset($jsonData['contragent'])) {
    
$model->contragent = new RetailCrm\Api\Model\Entity\References\LegalEntity();
if (isset($jsonData['contragent']['contragentType'])) {
    $model->contragent->contragentType = $jsonData['contragent']['contragentType'];

}
if (isset($jsonData['contragent']['legalName'])) {
    $model->contragent->legalName = $jsonData['contragent']['legalName'];

}
if (isset($jsonData['contragent']['legalAddress'])) {
    $model->contragent->legalAddress = $jsonData['contragent']['legalAddress'];

}
if (isset($jsonData['contragent']['INN'])) {
    $model->contragent->INN = $jsonData['contragent']['INN'];

}
if (isset($jsonData['contragent']['OKPO'])) {
    $model->contragent->OKPO = $jsonData['contragent']['OKPO'];

}
if (isset($jsonData['contragent']['KPP'])) {
    $model->contragent->KPP = $jsonData['contragent']['KPP'];

}
if (isset($jsonData['contragent']['OGRN'])) {
    $model->contragent->OGRN = $jsonData['contragent']['OGRN'];

}
if (isset($jsonData['contragent']['OGRNIP'])) {
    $model->contragent->OGRNIP = $jsonData['contragent']['OGRNIP'];

}
if (isset($jsonData['contragent']['certificateNumber'])) {
    $model->contragent->certificateNumber = $jsonData['contragent']['certificateNumber'];

}
if (isset($jsonData['contragent']['certificateDate'])) {
    $model->contragent->certificateDate = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['contragent']['certificateDate']);

}
if (isset($jsonData['contragent']['BIK'])) {
    $model->contragent->BIK = $jsonData['contragent']['BIK'];

}
if (isset($jsonData['contragent']['bank'])) {
    $model->contragent->bank = $jsonData['contragent']['bank'];

}
if (isset($jsonData['contragent']['bankAddress'])) {
    $model->contragent->bankAddress = $jsonData['contragent']['bankAddress'];

}
if (isset($jsonData['contragent']['corrAccount'])) {
    $model->contragent->corrAccount = $jsonData['contragent']['corrAccount'];

}
if (isset($jsonData['contragent']['bankAccount'])) {
    $model->contragent->bankAccount = $jsonData['contragent']['bankAccount'];

}
if (isset($jsonData['contragent']['code'])) {
    $model->contragent->code = $jsonData['contragent']['code'];

}
if (isset($jsonData['contragent']['countryIso'])) {
    $model->contragent->countryIso = $jsonData['contragent']['countryIso'];

}
if (isset($jsonData['contragent']['vatRate'])) {
    $model->contragent->vatRate = $jsonData['contragent']['vatRate'];

}


}
if (isset($jsonData['countryIso'])) {
    $model->countryIso = $jsonData['countryIso'];

}



    return $model;
}
