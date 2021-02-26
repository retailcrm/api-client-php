<?php

function serialize_RetailCrm_Api_Model_Entity_Integration_Payment_Actions(RetailCrm\Api\Model\Entity\Integration\Payment\Actions $model, bool $useStdClass = true)
{
    $emptyHashmap = $useStdClass ? new \stdClass() : [];
    $emptyObject = $useStdClass ? new \stdClass() : [];

    $jsonData = [];
if (null !== $model->create) {
    $jsonData["create"] = $model->create;
}
if (null !== $model->approve) {
    $jsonData["approve"] = $model->approve;
}
if (null !== $model->cancel) {
    $jsonData["cancel"] = $model->cancel;
}
if (null !== $model->refund) {
    $jsonData["refund"] = $model->refund;
}

if (0 === \count($jsonData)) {
    $jsonData = $emptyObject;
}


    return $jsonData;
}
