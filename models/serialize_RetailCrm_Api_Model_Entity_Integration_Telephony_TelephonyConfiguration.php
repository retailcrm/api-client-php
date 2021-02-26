<?php

function serialize_RetailCrm_Api_Model_Entity_Integration_Telephony_TelephonyConfiguration(RetailCrm\Api\Model\Entity\Integration\Telephony\TelephonyConfiguration $model, bool $useStdClass = true)
{
    $emptyHashmap = $useStdClass ? new \stdClass() : [];
    $emptyObject = $useStdClass ? new \stdClass() : [];

    $jsonData = [];
if (null !== $model->makeCallUrl) {
    $jsonData["makeCallUrl"] = $model->makeCallUrl;
}
if (null !== $model->allowEdit) {
    $jsonData["allowEdit"] = $model->allowEdit;
}
if (null !== $model->inputEventSupported) {
    $jsonData["inputEventSupported"] = $model->inputEventSupported;
}
if (null !== $model->outputEventSupported) {
    $jsonData["outputEventSupported"] = $model->outputEventSupported;
}
if (null !== $model->hangupEventSupported) {
    $jsonData["hangupEventSupported"] = $model->hangupEventSupported;
}
if (null !== $model->changeUserStatusUrl) {
    $jsonData["changeUserStatusUrl"] = $model->changeUserStatusUrl;
}
if (null !== $model->additionalCodes) {
    $jsonData["additionalCodes"] = [];
foreach (array_keys($model->additionalCodes) as $index19) {
    $jsonData["additionalCodes"][$index19] = [];
if (null !== $model->additionalCodes[$index19]->userId) {
    $jsonData["additionalCodes"][$index19]["userId"] = $model->additionalCodes[$index19]->userId;
}
if (null !== $model->additionalCodes[$index19]->code) {
    $jsonData["additionalCodes"][$index19]["code"] = $model->additionalCodes[$index19]->code;
}

if (0 === \count($jsonData["additionalCodes"][$index19])) {
    $jsonData["additionalCodes"][$index19] = $emptyObject;
}

}

}
if (null !== $model->externalPhones) {
    $jsonData["externalPhones"] = [];
foreach (array_keys($model->externalPhones) as $index18) {
    $jsonData["externalPhones"][$index18] = [];
if (null !== $model->externalPhones[$index18]->siteCode) {
    $jsonData["externalPhones"][$index18]["siteCode"] = $model->externalPhones[$index18]->siteCode;
}
if (null !== $model->externalPhones[$index18]->externalPhone) {
    $jsonData["externalPhones"][$index18]["externalPhone"] = $model->externalPhones[$index18]->externalPhone;
}

if (0 === \count($jsonData["externalPhones"][$index18])) {
    $jsonData["externalPhones"][$index18] = $emptyObject;
}

}

}

if (0 === \count($jsonData)) {
    $jsonData = $emptyObject;
}


    return $jsonData;
}
