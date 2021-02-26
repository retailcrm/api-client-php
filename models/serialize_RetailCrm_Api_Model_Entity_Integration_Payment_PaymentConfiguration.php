<?php

function serialize_RetailCrm_Api_Model_Entity_Integration_Payment_PaymentConfiguration(RetailCrm\Api\Model\Entity\Integration\Payment\PaymentConfiguration $model, bool $useStdClass = true)
{
    $emptyHashmap = $useStdClass ? new \stdClass() : [];
    $emptyObject = $useStdClass ? new \stdClass() : [];

    $jsonData = [];
if (null !== $model->actions) {
    $jsonData["actions"] = [];
if (null !== $model->actions->create) {
    $jsonData["actions"]["create"] = $model->actions->create;
}
if (null !== $model->actions->approve) {
    $jsonData["actions"]["approve"] = $model->actions->approve;
}
if (null !== $model->actions->cancel) {
    $jsonData["actions"]["cancel"] = $model->actions->cancel;
}
if (null !== $model->actions->refund) {
    $jsonData["actions"]["refund"] = $model->actions->refund;
}

if (0 === \count($jsonData["actions"])) {
    $jsonData["actions"] = $emptyObject;
}

}
if (null !== $model->currencies) {
    $jsonData["currencies"] = $model->currencies;
}
if (null !== $model->invoiceTypes) {
    $jsonData["invoiceTypes"] = $model->invoiceTypes;
}
if (null !== $model->shops) {
    $jsonData["shops"] = [];
foreach (array_keys($model->shops) as $index9) {
    $jsonData["shops"][$index9] = [];
if (null !== $model->shops[$index9]->code) {
    $jsonData["shops"][$index9]["code"] = $model->shops[$index9]->code;
}
if (null !== $model->shops[$index9]->name) {
    $jsonData["shops"][$index9]["name"] = $model->shops[$index9]->name;
}
if (null !== $model->shops[$index9]->active) {
    $jsonData["shops"][$index9]["active"] = $model->shops[$index9]->active;
}

if (0 === \count($jsonData["shops"][$index9])) {
    $jsonData["shops"][$index9] = $emptyObject;
}

}

}

if (0 === \count($jsonData)) {
    $jsonData = $emptyObject;
}


    return $jsonData;
}
