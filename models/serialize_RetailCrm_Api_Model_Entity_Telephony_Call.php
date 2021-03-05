<?php

function serialize_RetailCrm_Api_Model_Entity_Telephony_Call(RetailCrm\Api\Model\Entity\Telephony\Call $model, bool $useStdClass = true)
{
    $emptyHashmap = $useStdClass ? new \stdClass() : [];
    $emptyObject = $useStdClass ? new \stdClass() : [];

    $jsonData = [];
if (null !== $model->date) {
    $jsonData["date"] = $model->date->format('Y-m-d H:i:s');;
}
if (null !== $model->type) {
    $jsonData["type"] = $model->type;
}
if (null !== $model->phone) {
    $jsonData["phone"] = $model->phone;
}
if (null !== $model->code) {
    $jsonData["code"] = $model->code;
}
if (null !== $model->userId) {
    $jsonData["userId"] = $model->userId;
}
if (null !== $model->result) {
    $jsonData["result"] = $model->result;
}
if (null !== $model->duration) {
    $jsonData["duration"] = $model->duration;
}
if (null !== $model->durationWaiting) {
    $jsonData["durationWaiting"] = $model->durationWaiting;
}
if (null !== $model->externalId) {
    $jsonData["externalId"] = $model->externalId;
}
if (null !== $model->recordUrl) {
    $jsonData["recordUrl"] = $model->recordUrl;
}
if (null !== $model->source) {
    $jsonData["source"] = [];
if (null !== $model->source->source) {
    $jsonData["source"]["source"] = $model->source->source;
}
if (null !== $model->source->medium) {
    $jsonData["source"]["medium"] = $model->source->medium;
}
if (null !== $model->source->campaign) {
    $jsonData["source"]["campaign"] = $model->source->campaign;
}
if (null !== $model->source->keyword) {
    $jsonData["source"]["keyword"] = $model->source->keyword;
}
if (null !== $model->source->content) {
    $jsonData["source"]["content"] = $model->source->content;
}

if (0 === \count($jsonData["source"])) {
    $jsonData["source"] = $emptyObject;
}

}
if (null !== $model->externalPhone) {
    $jsonData["externalPhone"] = $model->externalPhone;
}
if (null !== $model->site) {
    $jsonData["site"] = $model->site;
}
if (null !== $model->clientId) {
    $jsonData["clientId"] = $model->clientId;
}

if (0 === \count($jsonData)) {
    $jsonData = $emptyObject;
}


    return $jsonData;
}
