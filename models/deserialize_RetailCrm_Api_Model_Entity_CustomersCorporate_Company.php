<?php

function deserialize_RetailCrm_Api_Model_Entity_CustomersCorporate_Company(array $jsonData): RetailCrm\Api\Model\Entity\CustomersCorporate\Company
{
    
$model = new RetailCrm\Api\Model\Entity\CustomersCorporate\Company();
if (isset($jsonData['id'])) {
    $model->id = $jsonData['id'];

}
if (isset($jsonData['isMain'])) {
    $model->isMain = $jsonData['isMain'];

}
if (isset($jsonData['externalId'])) {
    $model->externalId = $jsonData['externalId'];

}
if (isset($jsonData['active'])) {
    $model->active = $jsonData['active'];

}
if (isset($jsonData['name'])) {
    $model->name = $jsonData['name'];

}
if (isset($jsonData['brand'])) {
    $model->brand = $jsonData['brand'];

}
if (isset($jsonData['site'])) {
    $model->site = $jsonData['site'];

}
if (isset($jsonData['createdAt'])) {
    $model->createdAt = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['createdAt']);

}
if (isset($jsonData['customer'])) {
    
$model->customer = new RetailCrm\Api\Model\Entity\CustomersCorporate\SerializedEntityCustomer();
if (isset($jsonData['customer']['site'])) {
    $model->customer->site = $jsonData['customer']['site'];

}
if (isset($jsonData['customer']['id'])) {
    $model->customer->id = $jsonData['customer']['id'];

}
if (isset($jsonData['customer']['externalId'])) {
    $model->customer->externalId = $jsonData['customer']['externalId'];

}
if (isset($jsonData['customer']['type'])) {
    $model->customer->type = $jsonData['customer']['type'];

}


}
if (isset($jsonData['contragent'])) {
    
$model->contragent = new RetailCrm\Api\Model\Entity\Customers\CustomerContragent();
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


}
if (isset($jsonData['address'])) {
    
$model->address = new RetailCrm\Api\Model\Entity\Customers\CustomerAddress();
if (isset($jsonData['address']['id'])) {
    $model->address->id = $jsonData['address']['id'];

}
if (isset($jsonData['address']['name'])) {
    $model->address->name = $jsonData['address']['name'];

}
if (isset($jsonData['address']['isMain'])) {
    $model->address->isMain = $jsonData['address']['isMain'];

}
if (isset($jsonData['address']['index'])) {
    $model->address->index = $jsonData['address']['index'];

}
if (isset($jsonData['address']['countryIso'])) {
    $model->address->countryIso = $jsonData['address']['countryIso'];

}
if (isset($jsonData['address']['region'])) {
    $model->address->region = $jsonData['address']['region'];

}
if (isset($jsonData['address']['regionId'])) {
    $model->address->regionId = $jsonData['address']['regionId'];

}
if (isset($jsonData['address']['city'])) {
    $model->address->city = $jsonData['address']['city'];

}
if (isset($jsonData['address']['cityId'])) {
    $model->address->cityId = $jsonData['address']['cityId'];

}
if (isset($jsonData['address']['cityType'])) {
    $model->address->cityType = $jsonData['address']['cityType'];

}
if (isset($jsonData['address']['street'])) {
    $model->address->street = $jsonData['address']['street'];

}
if (isset($jsonData['address']['streetId'])) {
    $model->address->streetId = $jsonData['address']['streetId'];

}
if (isset($jsonData['address']['streetType'])) {
    $model->address->streetType = $jsonData['address']['streetType'];

}
if (isset($jsonData['address']['building'])) {
    $model->address->building = $jsonData['address']['building'];

}
if (isset($jsonData['address']['flat'])) {
    $model->address->flat = $jsonData['address']['flat'];

}
if (isset($jsonData['address']['floor'])) {
    $model->address->floor = $jsonData['address']['floor'];

}
if (isset($jsonData['address']['block'])) {
    $model->address->block = $jsonData['address']['block'];

}
if (isset($jsonData['address']['house'])) {
    $model->address->house = $jsonData['address']['house'];

}
if (isset($jsonData['address']['housing'])) {
    $model->address->housing = $jsonData['address']['housing'];

}
if (isset($jsonData['address']['metro'])) {
    $model->address->metro = $jsonData['address']['metro'];

}
if (isset($jsonData['address']['notes'])) {
    $model->address->notes = $jsonData['address']['notes'];

}
if (isset($jsonData['address']['text'])) {
    $model->address->text = $jsonData['address']['text'];

}
if (isset($jsonData['address']['externalId'])) {
    $model->address->externalId = $jsonData['address']['externalId'];

}


}
if (isset($jsonData['customFields'])) {
    $model->customFields = [];
foreach (array_keys($jsonData['customFields']) as $index25) {
    $model->customFields[$index25] = $jsonData['customFields'][$index25];

}

}
if (isset($jsonData['marginSumm'])) {
    $model->marginSumm = (float) $jsonData['marginSumm'];

}
if (isset($jsonData['totalSumm'])) {
    $model->totalSumm = (float) $jsonData['totalSumm'];

}
if (isset($jsonData['averageSumm'])) {
    $model->averageSumm = (float) $jsonData['averageSumm'];

}
if (isset($jsonData['ordersCount'])) {
    $model->ordersCount = $jsonData['ordersCount'];

}
if (isset($jsonData['costSumm'])) {
    $model->costSumm = (float) $jsonData['costSumm'];

}



    return $model;
}
