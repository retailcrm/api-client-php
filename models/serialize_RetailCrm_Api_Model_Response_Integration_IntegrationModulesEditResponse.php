<?php

function serialize_RetailCrm_Api_Model_Response_Integration_IntegrationModulesEditResponse(RetailCrm\Api\Model\Response\Integration\IntegrationModulesEditResponse $model, bool $useStdClass = true)
{
    $emptyHashmap = $useStdClass ? new \stdClass() : [];
    $emptyObject = $useStdClass ? new \stdClass() : [];

    $jsonData = [];
if (null !== $model->success) {
    $jsonData["success"] = $model->success;
}
if (null !== $model->info) {
    $jsonData["info"] = [];
if (null !== $model->info->mgTransport) {
    $jsonData["info"]["mgTransport"] = [];
if (null !== $model->info->mgTransport->token) {
    $jsonData["info"]["mgTransport"]["token"] = $model->info->mgTransport->token;
}
if (null !== $model->info->mgTransport->isActive) {
    $jsonData["info"]["mgTransport"]["isActive"] = $model->info->mgTransport->isActive;
}
if (null !== $model->info->mgTransport->webhookUrl) {
    $jsonData["info"]["mgTransport"]["webhookUrl"] = $model->info->mgTransport->webhookUrl;
}
if (null !== $model->info->mgTransport->endpointUrl) {
    $jsonData["info"]["mgTransport"]["endpointUrl"] = $model->info->mgTransport->endpointUrl;
}

if (0 === \count($jsonData["info"]["mgTransport"])) {
    $jsonData["info"]["mgTransport"] = $emptyObject;
}

}
if (null !== $model->info->mgBot) {
    $jsonData["info"]["mgBot"] = [];
if (null !== $model->info->mgBot->isActive) {
    $jsonData["info"]["mgBot"]["isActive"] = $model->info->mgBot->isActive;
}
if (null !== $model->info->mgBot->logo) {
    $jsonData["info"]["mgBot"]["logo"] = $model->info->mgBot->logo;
}
if (null !== $model->info->mgBot->token) {
    $jsonData["info"]["mgBot"]["token"] = $model->info->mgBot->token;
}
if (null !== $model->info->mgBot->name) {
    $jsonData["info"]["mgBot"]["name"] = $model->info->mgBot->name;
}

if (0 === \count($jsonData["info"]["mgBot"])) {
    $jsonData["info"]["mgBot"] = $emptyObject;
}

}
if (null !== $model->info->notExistUsersIds) {
    $jsonData["info"]["notExistUsersIds"] = $model->info->notExistUsersIds;
}
if (null !== $model->info->notExistSiteCodes) {
    $jsonData["info"]["notExistSiteCodes"] = $model->info->notExistSiteCodes;
}

if (0 === \count($jsonData["info"])) {
    $jsonData["info"] = $emptyObject;
}

}

if (0 === \count($jsonData)) {
    $jsonData = $emptyObject;
}


    return $jsonData;
}
