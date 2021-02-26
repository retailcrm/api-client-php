<?php

function serialize_RetailCrm_Api_Model_Response_CustomersCorporate_CustomersCorporateContactsResponse(RetailCrm\Api\Model\Response\CustomersCorporate\CustomersCorporateContactsResponse $model, bool $useStdClass = true)
{
    $emptyHashmap = $useStdClass ? new \stdClass() : [];
    $emptyObject = $useStdClass ? new \stdClass() : [];

    $jsonData = [];
if (null !== $model->success) {
    $jsonData["success"] = $model->success;
}
if (null !== $model->pagination) {
    $jsonData["pagination"] = [];
if (null !== $model->pagination->limit) {
    $jsonData["pagination"]["limit"] = $model->pagination->limit;
}
if (null !== $model->pagination->totalCount) {
    $jsonData["pagination"]["totalCount"] = $model->pagination->totalCount;
}
if (null !== $model->pagination->currentPage) {
    $jsonData["pagination"]["currentPage"] = $model->pagination->currentPage;
}
if (null !== $model->pagination->totalPageCount) {
    $jsonData["pagination"]["totalPageCount"] = $model->pagination->totalPageCount;
}

if (0 === \count($jsonData["pagination"])) {
    $jsonData["pagination"] = $emptyObject;
}

}
if (null !== $model->contacts) {
    $jsonData["contacts"] = [];
foreach (array_keys($model->contacts) as $index12) {
    $jsonData["contacts"][$index12] = [];
if (null !== $model->contacts[$index12]->id) {
    $jsonData["contacts"][$index12]["id"] = $model->contacts[$index12]->id;
}
if (null !== $model->contacts[$index12]->isMain) {
    $jsonData["contacts"][$index12]["isMain"] = $model->contacts[$index12]->isMain;
}
if (null !== $model->contacts[$index12]->customer) {
    $jsonData["contacts"][$index12]["customer"] = [];
if (null !== $model->contacts[$index12]->customer->id) {
    $jsonData["contacts"][$index12]["customer"]["id"] = $model->contacts[$index12]->customer->id;
}
if (null !== $model->contacts[$index12]->customer->externalId) {
    $jsonData["contacts"][$index12]["customer"]["externalId"] = $model->contacts[$index12]->customer->externalId;
}
if (null !== $model->contacts[$index12]->customer->browserId) {
    $jsonData["contacts"][$index12]["customer"]["browserId"] = $model->contacts[$index12]->customer->browserId;
}
if (null !== $model->contacts[$index12]->customer->site) {
    $jsonData["contacts"][$index12]["customer"]["site"] = $model->contacts[$index12]->customer->site;
}
if (null !== $model->contacts[$index12]->customer->companies) {
    $jsonData["contacts"][$index12]["customer"]["companies"] = [];
foreach (array_keys($model->contacts[$index12]->customer->companies) as $index47) {
    $jsonData["contacts"][$index12]["customer"]["companies"][$index47] = [];
if (null !== $model->contacts[$index12]->customer->companies[$index47]->id) {
    $jsonData["contacts"][$index12]["customer"]["companies"][$index47]["id"] = $model->contacts[$index12]->customer->companies[$index47]->id;
}
if (null !== $model->contacts[$index12]->customer->companies[$index47]->externalId) {
    $jsonData["contacts"][$index12]["customer"]["companies"][$index47]["externalId"] = $model->contacts[$index12]->customer->companies[$index47]->externalId;
}
if (null !== $model->contacts[$index12]->customer->companies[$index47]->company) {
    $jsonData["contacts"][$index12]["customer"]["companies"][$index47]["company"] = [];
if (null !== $model->contacts[$index12]->customer->companies[$index47]->company->id) {
    $jsonData["contacts"][$index12]["customer"]["companies"][$index47]["company"]["id"] = $model->contacts[$index12]->customer->companies[$index47]->company->id;
}
if (null !== $model->contacts[$index12]->customer->companies[$index47]->company->externalId) {
    $jsonData["contacts"][$index12]["customer"]["companies"][$index47]["company"]["externalId"] = $model->contacts[$index12]->customer->companies[$index47]->company->externalId;
}
if (null !== $model->contacts[$index12]->customer->companies[$index47]->company->name) {
    $jsonData["contacts"][$index12]["customer"]["companies"][$index47]["company"]["name"] = $model->contacts[$index12]->customer->companies[$index47]->company->name;
}

if (0 === \count($jsonData["contacts"][$index12]["customer"]["companies"][$index47]["company"])) {
    $jsonData["contacts"][$index12]["customer"]["companies"][$index47]["company"] = $emptyObject;
}

}

if (0 === \count($jsonData["contacts"][$index12]["customer"]["companies"][$index47])) {
    $jsonData["contacts"][$index12]["customer"]["companies"][$index47] = $emptyObject;
}

}

}

if (0 === \count($jsonData["contacts"][$index12]["customer"])) {
    $jsonData["contacts"][$index12]["customer"] = $emptyObject;
}

}
if (null !== $model->contacts[$index12]->companies) {
    $jsonData["contacts"][$index12]["companies"] = [];
foreach (array_keys($model->contacts[$index12]->companies) as $index35) {
    $jsonData["contacts"][$index12]["companies"][$index35] = [];
if (null !== $model->contacts[$index12]->companies[$index35]->id) {
    $jsonData["contacts"][$index12]["companies"][$index35]["id"] = $model->contacts[$index12]->companies[$index35]->id;
}
if (null !== $model->contacts[$index12]->companies[$index35]->externalId) {
    $jsonData["contacts"][$index12]["companies"][$index35]["externalId"] = $model->contacts[$index12]->companies[$index35]->externalId;
}
if (null !== $model->contacts[$index12]->companies[$index35]->company) {
    $jsonData["contacts"][$index12]["companies"][$index35]["company"] = [];
if (null !== $model->contacts[$index12]->companies[$index35]->company->id) {
    $jsonData["contacts"][$index12]["companies"][$index35]["company"]["id"] = $model->contacts[$index12]->companies[$index35]->company->id;
}
if (null !== $model->contacts[$index12]->companies[$index35]->company->externalId) {
    $jsonData["contacts"][$index12]["companies"][$index35]["company"]["externalId"] = $model->contacts[$index12]->companies[$index35]->company->externalId;
}
if (null !== $model->contacts[$index12]->companies[$index35]->company->name) {
    $jsonData["contacts"][$index12]["companies"][$index35]["company"]["name"] = $model->contacts[$index12]->companies[$index35]->company->name;
}

if (0 === \count($jsonData["contacts"][$index12]["companies"][$index35]["company"])) {
    $jsonData["contacts"][$index12]["companies"][$index35]["company"] = $emptyObject;
}

}

if (0 === \count($jsonData["contacts"][$index12]["companies"][$index35])) {
    $jsonData["contacts"][$index12]["companies"][$index35] = $emptyObject;
}

}

}

if (0 === \count($jsonData["contacts"][$index12])) {
    $jsonData["contacts"][$index12] = $emptyObject;
}

}

}

if (0 === \count($jsonData)) {
    $jsonData = $emptyObject;
}


    return $jsonData;
}
