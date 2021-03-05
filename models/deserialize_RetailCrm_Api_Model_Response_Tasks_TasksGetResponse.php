<?php

function deserialize_RetailCrm_Api_Model_Response_Tasks_TasksGetResponse(array $jsonData): RetailCrm\Api\Model\Response\Tasks\TasksGetResponse
{
    
$model = new RetailCrm\Api\Model\Response\Tasks\TasksGetResponse();
if (isset($jsonData['success'])) {
    $model->success = $jsonData['success'];

}
if (isset($jsonData['task'])) {
    
$model->task = new RetailCrm\Api\Model\Entity\Tasks\Task();
if (isset($jsonData['task']['id'])) {
    $model->task->id = $jsonData['task']['id'];

}
if (isset($jsonData['task']['text'])) {
    $model->task->text = $jsonData['task']['text'];

}
if (isset($jsonData['task']['commentary'])) {
    $model->task->commentary = $jsonData['task']['commentary'];

}
if (isset($jsonData['task']['datetime'])) {
    $model->task->datetime = \DateTime::createFromFormat('Y-m-d H:i', $jsonData['task']['datetime']);

}
if (isset($jsonData['task']['createdAt'])) {
    $model->task->createdAt = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['task']['createdAt']);

}
if (isset($jsonData['task']['complete'])) {
    $model->task->complete = $jsonData['task']['complete'];

}
if (isset($jsonData['task']['creator'])) {
    $model->task->creator = $jsonData['task']['creator'];

}
if (isset($jsonData['task']['performer'])) {
    $model->task->performer = $jsonData['task']['performer'];

}
if (isset($jsonData['task']['performerId'])) {
    $model->task->performerId = $jsonData['task']['performerId'];

}
if (isset($jsonData['task']['performerType'])) {
    $model->task->performerType = $jsonData['task']['performerType'];

}
if (isset($jsonData['task']['customer'])) {
    
$model->task->customer = new RetailCrm\Api\Model\Entity\Tasks\AbstractCustomer();
if (isset($jsonData['task']['customer']['type'])) {
    $model->task->customer->type = $jsonData['task']['customer']['type'];

}
if (isset($jsonData['task']['customer']['id'])) {
    $model->task->customer->id = $jsonData['task']['customer']['id'];

}
if (isset($jsonData['task']['customer']['externalId'])) {
    $model->task->customer->externalId = $jsonData['task']['customer']['externalId'];

}
if (isset($jsonData['task']['customer']['site'])) {
    $model->task->customer->site = $jsonData['task']['customer']['site'];

}


}
if (isset($jsonData['task']['order'])) {
    
$model->task->order = new RetailCrm\Api\Model\Entity\Tasks\Order();
if (isset($jsonData['task']['order']['id'])) {
    $model->task->order->id = $jsonData['task']['order']['id'];

}
if (isset($jsonData['task']['order']['number'])) {
    $model->task->order->number = $jsonData['task']['order']['number'];

}
if (isset($jsonData['task']['order']['externalId'])) {
    $model->task->order->externalId = $jsonData['task']['order']['externalId'];

}
if (isset($jsonData['task']['order']['site'])) {
    $model->task->order->site = $jsonData['task']['order']['site'];

}


}
if (isset($jsonData['task']['phone'])) {
    $model->task->phone = $jsonData['task']['phone'];

}
if (isset($jsonData['task']['phoneSite'])) {
    $model->task->phoneSite = $jsonData['task']['phoneSite'];

}
if (isset($jsonData['task']['completedAt'])) {
    $model->task->completedAt = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['task']['completedAt']);

}


}



    return $model;
}
