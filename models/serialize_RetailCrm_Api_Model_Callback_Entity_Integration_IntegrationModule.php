<?php

function serialize_RetailCrm_Api_Model_Callback_Entity_Integration_IntegrationModule(RetailCrm\Api\Model\Callback\Entity\Integration\IntegrationModule $model, bool $useStdClass = true)
{
    $emptyHashmap = $useStdClass ? new \stdClass() : [];
    $emptyObject = $useStdClass ? new \stdClass() : [];

    $jsonData = [];
if (null !== $model->active) {
    $jsonData["active"] = $model->active;
}
if (null !== $model->freeze) {
    $jsonData["freeze"] = $model->freeze;
}

if (0 === \count($jsonData)) {
    $jsonData = $emptyObject;
}


    return $jsonData;
}
