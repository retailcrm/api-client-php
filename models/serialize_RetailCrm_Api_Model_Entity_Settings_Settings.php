<?php

function serialize_RetailCrm_Api_Model_Entity_Settings_Settings(RetailCrm\Api\Model\Entity\Settings\Settings $model, bool $useStdClass = true)
{
    $emptyHashmap = $useStdClass ? new \stdClass() : [];
    $emptyObject = $useStdClass ? new \stdClass() : [];

    $jsonData = [];
if (null !== $model->defaultCurrency) {
    $jsonData["default_currency"] = [];
if (null !== $model->defaultCurrency->value) {
    $jsonData["default_currency"]["value"] = $model->defaultCurrency->value;
}
if (null !== $model->defaultCurrency->updatedAt) {
    $jsonData["default_currency"]["updated_at"] = $model->defaultCurrency->updatedAt->format('Y-m-d H:i:s');;
}

if (0 === \count($jsonData["default_currency"])) {
    $jsonData["default_currency"] = $emptyObject;
}

}
if (null !== $model->systemLanguage) {
    $jsonData["system_language"] = [];
if (null !== $model->systemLanguage->value) {
    $jsonData["system_language"]["value"] = $model->systemLanguage->value;
}
if (null !== $model->systemLanguage->updatedAt) {
    $jsonData["system_language"]["updated_at"] = $model->systemLanguage->updatedAt->format('Y-m-d H:i:s');;
}

if (0 === \count($jsonData["system_language"])) {
    $jsonData["system_language"] = $emptyObject;
}

}
if (null !== $model->timezone) {
    $jsonData["timezone"] = [];
if (null !== $model->timezone->value) {
    $jsonData["timezone"]["value"] = $model->timezone->value;
}
if (null !== $model->timezone->updatedAt) {
    $jsonData["timezone"]["updated_at"] = $model->timezone->updatedAt->format('Y-m-d H:i:s');;
}

if (0 === \count($jsonData["timezone"])) {
    $jsonData["timezone"] = $emptyObject;
}

}

if (0 === \count($jsonData)) {
    $jsonData = $emptyObject;
}


    return $jsonData;
}
