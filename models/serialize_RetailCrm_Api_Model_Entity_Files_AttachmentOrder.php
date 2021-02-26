<?php

function serialize_RetailCrm_Api_Model_Entity_Files_AttachmentOrder(RetailCrm\Api\Model\Entity\Files\AttachmentOrder $model, bool $useStdClass = true)
{
    $emptyHashmap = $useStdClass ? new \stdClass() : [];
    $emptyObject = $useStdClass ? new \stdClass() : [];

    $jsonData = [];
if (null !== $model->id) {
    $jsonData["id"] = $model->id;
}
if (null !== $model->number) {
    $jsonData["number"] = $model->number;
}
if (null !== $model->externalId) {
    $jsonData["externalId"] = $model->externalId;
}
if (null !== $model->site) {
    $jsonData["site"] = $model->site;
}

if (0 === \count($jsonData)) {
    $jsonData = $emptyObject;
}


    return $jsonData;
}
