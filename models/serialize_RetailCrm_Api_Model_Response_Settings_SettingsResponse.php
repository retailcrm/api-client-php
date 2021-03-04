<?php

function serialize_RetailCrm_Api_Model_Response_Settings_SettingsResponse(RetailCrm\Api\Model\Response\Settings\SettingsResponse $model, bool $useStdClass = true)
{
    $emptyHashmap = $useStdClass ? new \stdClass() : [];
    $emptyObject = $useStdClass ? new \stdClass() : [];

    $jsonData = [];
if (null !== $model->success) {
    $jsonData["success"] = $model->success;
}
if (null !== $model->settings) {
    $jsonData["settings"] = [];
if (null !== $model->settings->defaultCurrency) {
    $jsonData["settings"]["default_currency"] = [];
if (null !== $model->settings->defaultCurrency->value) {
    $jsonData["settings"]["default_currency"]["value"] = $model->settings->defaultCurrency->value;
}
if (null !== $model->settings->defaultCurrency->updatedAt) {
    $jsonData["settings"]["default_currency"]["updated_at"] = $model->settings->defaultCurrency->updatedAt->format('Y-m-d H:i:s');;
}

if (0 === \count($jsonData["settings"]["default_currency"])) {
    $jsonData["settings"]["default_currency"] = $emptyObject;
}

}
if (null !== $model->settings->systemLanguage) {
    $jsonData["settings"]["system_language"] = [];
if (null !== $model->settings->systemLanguage->value) {
    $jsonData["settings"]["system_language"]["value"] = $model->settings->systemLanguage->value;
}
if (null !== $model->settings->systemLanguage->updatedAt) {
    $jsonData["settings"]["system_language"]["updated_at"] = $model->settings->systemLanguage->updatedAt->format('Y-m-d H:i:s');;
}

if (0 === \count($jsonData["settings"]["system_language"])) {
    $jsonData["settings"]["system_language"] = $emptyObject;
}

}
if (null !== $model->settings->timezone) {
    $jsonData["settings"]["timezone"] = [];
if (null !== $model->settings->timezone->value) {
    $jsonData["settings"]["timezone"]["value"] = $model->settings->timezone->value;
}
if (null !== $model->settings->timezone->updatedAt) {
    $jsonData["settings"]["timezone"]["updated_at"] = $model->settings->timezone->updatedAt->format('Y-m-d H:i:s');;
}

if (0 === \count($jsonData["settings"]["timezone"])) {
    $jsonData["settings"]["timezone"] = $emptyObject;
}

}

if (0 === \count($jsonData["settings"])) {
    $jsonData["settings"] = $emptyObject;
}

}

if (0 === \count($jsonData)) {
    $jsonData = $emptyObject;
}


    return $jsonData;
}
