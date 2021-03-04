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
    $jsonData["sites"][$index9]['contragent'] = $model->sites[$index9]->contragent->code;
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
