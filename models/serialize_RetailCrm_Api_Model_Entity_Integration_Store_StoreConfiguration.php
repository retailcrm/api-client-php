<?php

function serialize_RetailCrm_Api_Model_Entity_Integration_Store_StoreConfiguration(RetailCrm\Api\Model\Entity\Integration\Store\StoreConfiguration $model, bool $useStdClass = true)
{
    $emptyHashmap = $useStdClass ? new \stdClass() : [];
    $emptyObject = $useStdClass ? new \stdClass() : [];

    $jsonData = [];
if (null !== $model->actions) {
    $jsonData["actions"] = [];
foreach (array_keys($model->actions) as $index11) {
    $jsonData["actions"][$index11] = [];
if (null !== $model->actions[$index11]->code) {
    $jsonData["actions"][$index11]["code"] = $model->actions[$index11]->code;
}
if (null !== $model->actions[$index11]->url) {
    $jsonData["actions"][$index11]["url"] = $model->actions[$index11]->url;
}
if (null !== $model->actions[$index11]->callPoints) {
    $jsonData["actions"][$index11]["callPoints"] = $model->actions[$index11]->callPoints;
}

if (0 === \count($jsonData["actions"][$index11])) {
    $jsonData["actions"][$index11] = $emptyObject;
}

}

}

if (0 === \count($jsonData)) {
    $jsonData = $emptyObject;
}


    return $jsonData;
}
