<?php

function serialize_RetailCrm_Api_Model_Entity_Integration_IntegrationModuleEditInfo(RetailCrm\Api\Model\Entity\Integration\IntegrationModuleEditInfo $model, bool $useStdClass = true)
{
    $emptyHashmap = $useStdClass ? new \stdClass() : [];
    $emptyObject = $useStdClass ? new \stdClass() : [];

    $jsonData = [];
if (null !== $model->mgTransport) {
    $jsonData["mgTransport"] = [];
if (null !== $model->mgTransport->token) {
    $jsonData["mgTransport"]["token"] = $model->mgTransport->token;
}
if (null !== $model->mgTransport->isActive) {
    $jsonData["mgTransport"]["isActive"] = $model->mgTransport->isActive;
}
if (null !== $model->mgTransport->webhookUrl) {
    $jsonData["mgTransport"]["webhookUrl"] = $model->mgTransport->webhookUrl;
}
if (null !== $model->mgTransport->endpointUrl) {
    $jsonData["mgTransport"]["endpointUrl"] = $model->mgTransport->endpointUrl;
}

if (0 === \count($jsonData["mgTransport"])) {
    $jsonData["mgTransport"] = $emptyObject;
}

}
if (null !== $model->mgBot) {
    $jsonData["mgBot"] = [];
if (null !== $model->mgBot->isActive) {
    $jsonData["mgBot"]["isActive"] = $model->mgBot->isActive;
}
if (null !== $model->mgBot->logo) {
    $jsonData["mgBot"]["logo"] = $model->mgBot->logo;
}
if (null !== $model->mgBot->token) {
    $jsonData["mgBot"]["token"] = $model->mgBot->token;
}
if (null !== $model->mgBot->name) {
    $jsonData["mgBot"]["name"] = $model->mgBot->name;
}

if (0 === \count($jsonData["mgBot"])) {
    $jsonData["mgBot"] = $emptyObject;
}

}
if (null !== $model->notExistUsersIds) {
    $jsonData["notExistUsersIds"] = $model->notExistUsersIds;
}
if (null !== $model->notExistSiteCodes) {
    $jsonData["notExistSiteCodes"] = $model->notExistSiteCodes;
}

if (0 === \count($jsonData)) {
    $jsonData = $emptyObject;
}


    return $jsonData;
}
