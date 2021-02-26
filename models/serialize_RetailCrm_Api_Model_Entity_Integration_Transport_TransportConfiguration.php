<?php

function serialize_RetailCrm_Api_Model_Entity_Integration_Transport_TransportConfiguration(RetailCrm\Api\Model\Entity\Integration\Transport\TransportConfiguration $model, bool $useStdClass = true)
{
    $emptyHashmap = $useStdClass ? new \stdClass() : [];
    $emptyObject = $useStdClass ? new \stdClass() : [];

    $jsonData = [];
if (null !== $model->token) {
    $jsonData["token"] = $model->token;
}
if (null !== $model->isActive) {
    $jsonData["isActive"] = $model->isActive;
}
if (null !== $model->webhookUrl) {
    $jsonData["webhookUrl"] = $model->webhookUrl;
}
if (null !== $model->endpointUrl) {
    $jsonData["endpointUrl"] = $model->endpointUrl;
}

if (0 === \count($jsonData)) {
    $jsonData = $emptyObject;
}


    return $jsonData;
}
