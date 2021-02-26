<?php

function serialize_RetailCrm_Api_Model_Response_CustomersCorporate_CustomersCorporateAddressesResponse(RetailCrm\Api\Model\Response\CustomersCorporate\CustomersCorporateAddressesResponse $model, bool $useStdClass = true)
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

if (0 === \count($jsonData)) {
    $jsonData = $emptyObject;
}


    return $jsonData;
}
