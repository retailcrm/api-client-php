<?php

function deserialize_RetailCrm_Api_Model_Entity_Telephony_Call(array $jsonData): RetailCrm\Api\Model\Entity\Telephony\Call
{
    
$model = new RetailCrm\Api\Model\Entity\Telephony\Call();
if (isset($jsonData['date'])) {
    $model->date = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['date']);

}
if (isset($jsonData['type'])) {
    $model->type = $jsonData['type'];

}
if (isset($jsonData['phone'])) {
    $model->phone = $jsonData['phone'];

}
if (isset($jsonData['code'])) {
    $model->code = $jsonData['code'];

}
if (isset($jsonData['userId'])) {
    $model->userId = $jsonData['userId'];

}
if (isset($jsonData['result'])) {
    $model->result = $jsonData['result'];

}
if (isset($jsonData['duration'])) {
    $model->duration = $jsonData['duration'];

}
if (isset($jsonData['durationWaiting'])) {
    $model->durationWaiting = $jsonData['durationWaiting'];

}
if (isset($jsonData['externalId'])) {
    $model->externalId = $jsonData['externalId'];

}
if (isset($jsonData['recordUrl'])) {
    $model->recordUrl = $jsonData['recordUrl'];

}
if (isset($jsonData['source'])) {
    
$model->source = new RetailCrm\Api\Model\Entity\Source();
if (isset($jsonData['source']['source'])) {
    $model->source->source = $jsonData['source']['source'];

}
if (isset($jsonData['source']['medium'])) {
    $model->source->medium = $jsonData['source']['medium'];

}
if (isset($jsonData['source']['campaign'])) {
    $model->source->campaign = $jsonData['source']['campaign'];

}
if (isset($jsonData['source']['keyword'])) {
    $model->source->keyword = $jsonData['source']['keyword'];

}
if (isset($jsonData['source']['content'])) {
    $model->source->content = $jsonData['source']['content'];

}


}
if (isset($jsonData['externalPhone'])) {
    $model->externalPhone = $jsonData['externalPhone'];

}
if (isset($jsonData['site'])) {
    $model->site = $jsonData['site'];

}
if (isset($jsonData['clientId'])) {
    $model->clientId = $jsonData['clientId'];

}



    return $model;
}
