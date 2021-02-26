<?php

function serialize_RetailCrm_Api_Model_Entity_CustomersCorporate_CustomerContact(RetailCrm\Api\Model\Entity\CustomersCorporate\CustomerContact $model, bool $useStdClass = true)
{
    $emptyHashmap = $useStdClass ? new \stdClass() : [];
    $emptyObject = $useStdClass ? new \stdClass() : [];

    $jsonData = [];
if (null !== $model->id) {
    $jsonData["id"] = $model->id;
}
if (null !== $model->isMain) {
    $jsonData["isMain"] = $model->isMain;
}
if (null !== $model->customer) {
    $jsonData["customer"] = [];
if (null !== $model->customer->id) {
    $jsonData["customer"]["id"] = $model->customer->id;
}
if (null !== $model->customer->externalId) {
    $jsonData["customer"]["externalId"] = $model->customer->externalId;
}
if (null !== $model->customer->browserId) {
    $jsonData["customer"]["browserId"] = $model->customer->browserId;
}
if (null !== $model->customer->site) {
    $jsonData["customer"]["site"] = $model->customer->site;
}
if (null !== $model->customer->companies) {
    $jsonData["customer"]["companies"] = [];
foreach (array_keys($model->customer->companies) as $index25) {
    $jsonData["customer"]["companies"][$index25] = [];
if (null !== $model->customer->companies[$index25]->id) {
    $jsonData["customer"]["companies"][$index25]["id"] = $model->customer->companies[$index25]->id;
}
if (null !== $model->customer->companies[$index25]->externalId) {
    $jsonData["customer"]["companies"][$index25]["externalId"] = $model->customer->companies[$index25]->externalId;
}
if (null !== $model->customer->companies[$index25]->company) {
    $jsonData["customer"]["companies"][$index25]["company"] = [];
if (null !== $model->customer->companies[$index25]->company->id) {
    $jsonData["customer"]["companies"][$index25]["company"]["id"] = $model->customer->companies[$index25]->company->id;
}
if (null !== $model->customer->companies[$index25]->company->externalId) {
    $jsonData["customer"]["companies"][$index25]["company"]["externalId"] = $model->customer->companies[$index25]->company->externalId;
}
if (null !== $model->customer->companies[$index25]->company->name) {
    $jsonData["customer"]["companies"][$index25]["company"]["name"] = $model->customer->companies[$index25]->company->name;
}

if (0 === \count($jsonData["customer"]["companies"][$index25]["company"])) {
    $jsonData["customer"]["companies"][$index25]["company"] = $emptyObject;
}

}

if (0 === \count($jsonData["customer"]["companies"][$index25])) {
    $jsonData["customer"]["companies"][$index25] = $emptyObject;
}

}

}

if (0 === \count($jsonData["customer"])) {
    $jsonData["customer"] = $emptyObject;
}

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
