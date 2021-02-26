<?php

function serialize_RetailCrm_Api_Model_Entity_Integration_Bot_BotConfiguration(RetailCrm\Api\Model\Entity\Integration\Bot\BotConfiguration $model, bool $useStdClass = true)
{
    $emptyHashmap = $useStdClass ? new \stdClass() : [];
    $emptyObject = $useStdClass ? new \stdClass() : [];

    $jsonData = [];
if (null !== $model->isActive) {
    $jsonData["isActive"] = $model->isActive;
}
if (null !== $model->logo) {
    $jsonData["logo"] = $model->logo;
}
if (null !== $model->token) {
    $jsonData["token"] = $model->token;
}
if (null !== $model->name) {
    $jsonData["name"] = $model->name;
}

if (0 === \count($jsonData)) {
    $jsonData = $emptyObject;
}


    return $jsonData;
}
