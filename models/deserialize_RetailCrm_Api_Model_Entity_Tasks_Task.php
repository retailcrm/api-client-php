<?php

function deserialize_RetailCrm_Api_Model_Entity_Tasks_Task(array $jsonData): RetailCrm\Api\Model\Entity\Tasks\Task
{
    
$model = new RetailCrm\Api\Model\Entity\Tasks\Task();
if (isset($jsonData['id'])) {
    $model->id = $jsonData['id'];

}
if (isset($jsonData['text'])) {
    $model->text = $jsonData['text'];

}
if (isset($jsonData['commentary'])) {
    $model->commentary = $jsonData['commentary'];

}
if (isset($jsonData['datetime'])) {
    $model->datetime = \DateTime::createFromFormat('Y-m-d H:i', $jsonData['datetime']);

}
if (isset($jsonData['createdAt'])) {
    $model->createdAt = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['createdAt']);

}
if (isset($jsonData['complete'])) {
    $model->complete = $jsonData['complete'];

}
if (isset($jsonData['creator'])) {
    $model->creator = $jsonData['creator'];

}
if (isset($jsonData['performer'])) {
    $model->performer = $jsonData['performer'];

}
if (isset($jsonData['performerId'])) {
    $model->performerId = $jsonData['performerId'];

}
if (isset($jsonData['performerType'])) {
    $model->performerType = $jsonData['performerType'];

}
if (isset($jsonData['customer'])) {
    
$model->customer = new RetailCrm\Api\Model\Entity\Tasks\AbstractCustomer();
if (isset($jsonData['customer']['type'])) {
    $model->customer->type = $jsonData['customer']['type'];

}
if (isset($jsonData['customer']['id'])) {
    $model->customer->id = $jsonData['customer']['id'];

}
if (isset($jsonData['customer']['externalId'])) {
    $model->customer->externalId = $jsonData['customer']['externalId'];

}
if (isset($jsonData['customer']['site'])) {
    $model->customer->site = $jsonData['customer']['site'];

}


}
if (isset($jsonData['order'])) {
    
$model->order = new RetailCrm\Api\Model\Entity\Tasks\Order();
if (isset($jsonData['order']['id'])) {
    $model->order->id = $jsonData['order']['id'];

}
if (isset($jsonData['order']['number'])) {
    $model->order->number = $jsonData['order']['number'];

}
if (isset($jsonData['order']['externalId'])) {
    $model->order->externalId = $jsonData['order']['externalId'];

}
if (isset($jsonData['order']['site'])) {
    $model->order->site = $jsonData['order']['site'];

}


}
if (isset($jsonData['phone'])) {
    $model->phone = $jsonData['phone'];

}
if (isset($jsonData['phoneSite'])) {
    $model->phoneSite = $jsonData['phoneSite'];

}
if (isset($jsonData['completedAt'])) {
    $model->completedAt = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['completedAt']);

}



    return $model;
}
