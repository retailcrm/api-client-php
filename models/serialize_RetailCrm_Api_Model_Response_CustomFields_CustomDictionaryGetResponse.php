<?php

function serialize_RetailCrm_Api_Model_Response_CustomFields_CustomDictionaryGetResponse(RetailCrm\Api\Model\Response\CustomFields\CustomDictionaryGetResponse $model, bool $useStdClass = true)
{
    $emptyHashmap = $useStdClass ? new \stdClass() : [];
    $emptyObject = $useStdClass ? new \stdClass() : [];

    $jsonData = [];
if (null !== $model->success) {
    $jsonData["success"] = $model->success;
}
if (null !== $model->customDictionary) {
    $jsonData["customDictionary"] = [];
if (null !== $model->customDictionary->name) {
    $jsonData["customDictionary"]["name"] = $model->customDictionary->name;
}
if (null !== $model->customDictionary->code) {
    $jsonData["customDictionary"]["code"] = $model->customDictionary->code;
}
if (null !== $model->customDictionary->elements) {
    $jsonData["customDictionary"]["elements"] = [];
foreach (array_keys($model->customDictionary->elements) as $index32) {
    $jsonData["customDictionary"]["elements"][$index32] = [];
if (null !== $model->customDictionary->elements[$index32]->name) {
    $jsonData["customDictionary"]["elements"][$index32]["name"] = $model->customDictionary->elements[$index32]->name;
}
if (null !== $model->customDictionary->elements[$index32]->code) {
    $jsonData["customDictionary"]["elements"][$index32]["code"] = $model->customDictionary->elements[$index32]->code;
}
if (null !== $model->customDictionary->elements[$index32]->ordering) {
    $jsonData["customDictionary"]["elements"][$index32]["ordering"] = $model->customDictionary->elements[$index32]->ordering;
}

if (0 === \count($jsonData["customDictionary"]["elements"][$index32])) {
    $jsonData["customDictionary"]["elements"][$index32] = $emptyObject;
}

}

}

if (0 === \count($jsonData["customDictionary"])) {
    $jsonData["customDictionary"] = $emptyObject;
}

}

if (0 === \count($jsonData)) {
    $jsonData = $emptyObject;
}


    return $jsonData;
}
