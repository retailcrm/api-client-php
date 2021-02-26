<?php

function serialize_RetailCrm_Api_Model_Entity_CustomersCorporate_SerializedRelationAbstractCustomer(RetailCrm\Api\Model\Entity\CustomersCorporate\SerializedRelationAbstractCustomer $model, bool $useStdClass = true)
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
if (null !== $model->browserId) {
    $jsonData["browserId"] = $model->browserId;
}
if (null !== $model->site) {
    $jsonData["site"] = $model->site;
}
if (null !== $model->companies) {
    $jsonData["companies"] = [];
foreach (array_keys($model->companies) as $index13) {
    $jsonData["companies"][$index13] = [];
if (null !== $model->companies[$index13]->id) {
    $jsonData["companies"][$index13]["id"] = $model->companies[$index13]->id;
}
if (null !== $model->companies[$index13]->externalId) {
    $jsonData["companies"][$index13]["externalId"] = $model->companies[$index13]->externalId;
}
if (null !== $model->companies[$index13]->company) {
    $jsonData["companies"][$index13]["company"] = [];
if (null !== $model->companies[$index13]->company->id) {
    $jsonData["companies"][$index13]["company"]["id"] = $model->companies[$index13]->company->id;
}
if (null !== $model->companies[$index13]->company->externalId) {
    $jsonData["companies"][$index13]["company"]["externalId"] = $model->companies[$index13]->company->externalId;
}
if (null !== $model->companies[$index13]->company->name) {
    $jsonData["companies"][$index13]["company"]["name"] = $model->companies[$index13]->company->name;
}

if (0 === \count($jsonData["companies"][$index13]["company"])) {
    $jsonData["companies"][$index13]["company"] = $emptyObject;
}

}

if (0 === \count($jsonData["companies"][$index13])) {
    $jsonData["companies"][$index13] = $emptyObject;
}

}

}

if (0 === \count($jsonData)) {
    $jsonData = $emptyObject;
}


    return $jsonData;
}
