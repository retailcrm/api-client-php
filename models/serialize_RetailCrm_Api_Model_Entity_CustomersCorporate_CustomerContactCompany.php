<?php

function serialize_RetailCrm_Api_Model_Entity_CustomersCorporate_CustomerContactCompany(RetailCrm\Api\Model\Entity\CustomersCorporate\CustomerContactCompany $model, bool $useStdClass = true)
{
    $emptyHashmap = $useStdClass ? new \stdClass() : [];
    $emptyObject = $useStdClass ? new \stdClass() : [];

    $jsonData = [];
if (null !== $model->id) {
    $jsonData["id"] = $model->id;
}
if (null !== $model->externalId) {
    $jsonData["externalId"] = $model->externalId;
}
if (null !== $model->company) {
    $jsonData["company"] = [];
if (null !== $model->company->id) {
    $jsonData["company"]["id"] = $model->company->id;
}
if (null !== $model->company->externalId) {
    $jsonData["company"]["externalId"] = $model->company->externalId;
}
if (null !== $model->company->name) {
    $jsonData["company"]["name"] = $model->company->name;
}

if (0 === \count($jsonData["company"])) {
    $jsonData["company"] = $emptyObject;
}

}

if (0 === \count($jsonData)) {
    $jsonData = $emptyObject;
}


    return $jsonData;
}
