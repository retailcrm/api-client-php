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
    $jsonData['contragent'] = $model->contragent->code;
}
if (null !== $model->countryIso) {
    $jsonData["countryIso"] = $model->countryIso;
}

if (0 === \count($jsonData)) {
    $jsonData = $emptyObject;
}


    return $jsonData;
}
