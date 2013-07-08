<?php
namespace IntaroCrm;

class RestApi
{
    protected static $jsonReplaceSource = array(
        '\u0410','\u0430','\u0411','\u0431','\u0412','\u0432','\u0413','\u0433',
        '\u0414','\u0434','\u0415','\u0435','\u0401','\u0451','\u0416','\u0436',
        '\u0417','\u0437','\u0418','\u0438','\u0419','\u0439','\u041a','\u043a',
        '\u041b','\u043b','\u041c','\u043c','\u041d','\u043d','\u041e','\u043e',
        '\u041f','\u043f','\u0420','\u0440','\u0421','\u0441','\u0422','\u0442',
        '\u0423','\u0443','\u0424','\u0444','\u0425','\u0445','\u0426','\u0446',
        '\u0427','\u0447','\u0428','\u0448','\u0429','\u0449','\u042a','\u044a',
        '\u042b','\u044b','\u042c','\u044c','\u042d','\u044d','\u042e','\u044e',
        '\u042f','\u044f'
      );

    protected static $jsonReplaceTarget = array(
        'А', 'а', 'Б', 'б', 'В', 'в', 'Г', 'г',
        'Д', 'д', 'Е', 'е', 'Ё', 'ё', 'Ж', 'ж',
        'З', 'з', 'И', 'и', 'Й', 'й', 'К', 'к',
        'Л', 'л', 'М', 'м', 'Н', 'н', 'О', 'о',
        'П', 'п', 'Р', 'р', 'С', 'с', 'Т', 'т',
        'У', 'у', 'Ф', 'ф', 'Х', 'х', 'Ц', 'ц',
        'Ч', 'ч', 'Ш', 'ш', 'Щ', 'щ', 'Ъ', 'ъ',
        'Ы', 'ы', 'Ь', 'ь', 'Э', 'э', 'Ю', 'ю',
        'Я', 'я'
      );


    protected $apiUrl;
    protected $apiKey;
    protected $apiVersion = '1';
    protected $lastError;
    protected $statusCode;

    /**
     * @param string $crmUrl - адрес CRM
     * @param string $apiKey - ключ для работы с api
     */
    public function __construct($crmUrl, $apiKey)
    {
        $this->apiUrl = $crmUrl.'/api/v'.$this->apiVersion.'/';
        $this->apiKey = $apiKey;
    }


    public function getStatusCode()
    {
        return $this->statusCode;
    }

    /* Получение кода статуса и сообщения об ошибке */
    public function getLastError()
    {
        if (!is_null($this->lastError))
            return $this->statusCode . ' ' . $this->lastError;
        else
            return null;
    }

    /* Псообщения об ошибке */
    public function getLastErrorMessage()
    {
        return $this->lastError;
    }


    /* Методы для работы с заказами */
    /**
     * Получение заказа по id
     *
     * @param string $id - идентификатор заказа
     * @return array - информация о заказе
     */
    public function orderGet($id)
    {
        $url = $this->apiUrl.'orders/'.$id;
        $result = $this->curlRequest($url);
        return $result;
    }

    /**
     * Создание заказа
     *
     * @param array $order- информация о заказе
     * @return array
     */
    public function orderCreate($order)
    {
        $dataJson = json_encode($order);
        $dataJson = str_replace(self::$jsonReplaceSource, self::$jsonReplaceTarget,
            $dataJson);
        $parameters = array();
        $parameters['order'] = $dataJson;

        $url = $this->apiUrl.'orders/create';
        $result = $this->curlRequest($url, $parameters, 'POST');
        return $result;
    }

    /**
     * Изменение заказа
     *
     * @param array $order- информация о заказе
     * @return array
     */
    public function orderEdit($order)
    {
        $dataJson = json_encode($order);
        $dataJson = str_replace(self::$jsonReplaceSource, self::$jsonReplaceTarget,
            $dataJson);
        $parameters = array();
        $parameters['order'] = $dataJson;

        $url = $this->apiUrl.'orders/'.$order['id'].'/edit';
        $result = $this->curlRequest($url, $parameters, 'POST');
        return $result;
    }

    /**
     * Загрузка нескольких заказов
     *
     * @param array $orders - массив заказов
     * @return array
     */
    public function orderUpload($orders)
    {
        $dataJson = json_encode($orders);
        $dataJson = str_replace(self::$jsonReplaceSource, self::$jsonReplaceTarget,
            $dataJson);
        $parameters = array();
        $parameters['orders'] = $dataJson;

        $url = $this->apiUrl.'orders/upload';
        $result = $this->curlRequest($url, $parameters, 'POST');
        return $result;
    }

    /**
     * Удаление заказа
     *
     * @param string $id - идентификатор заказа
     * @return array
     */
    public function orderDelete($id)
    {
        $url = $this->apiUrl.'orders/'.$id.'/delete';
        $result = $this->curlRequest($url, array(), 'POST');
        return $result;
    }

    /**
     * Получение последних измененных заказов
     *
     * @param DateTime $startDate - начальная дата выборки
     * @param DateTime $endDate - конечная дата
     * @param int $limit - ограничение на размер выборки
     * @param int $offset - сдвиг
     * @return array - массив заказов
     */
    public function orderHistory($startDate = null, $endDate = null, $limit = 100, $offset = 0)
    {
        $url = $this->apiUrl.'orders/history';
        $parameters = array();
        $parameters['startDate'] = $startDate;
        $parameters['endDate'] = $endDate;
        $parameters['limit'] = $limit;
        $parameters['offset'] = $offset;

        $result = $this->curlRequest($url, $parameters);
        return $result;
    }


    /* Методы для работы с клиентами */
    /**
     * Получение клиента по id
     *
     * @param string $id - идентификатор
     * @return array - информация о клиенте
     */
    public function customerGet($id)
    {
        $url = $this->apiUrl.'customers/'.$id;
        $result = $this->curlRequest($url);
        return $result;
    }

    /**
     * Создание клиента
     *
     * @param array $customer - информация о клиенте
     * @return array
     */
    public function customerCreate($customer)
    {
        $dataJson = json_encode($customer);
        $dataJson = str_replace(self::$jsonReplaceSource, self::$jsonReplaceTarget,
            $dataJson);
        $parameters = array();
        $parameters['customer'] = $dataJson;

        $url = $this->apiUrl.'customers/create';
        $result = $this->curlRequest($url, $parameters, 'POST');
        return $result;
    }

    /**
     * Редактирование клиента
     *
     * @param array $customer - информация о клиенте
     * @return array
     */
    public function customerEdit($customer)
    {
        $dataJson = json_encode($customer);
        $dataJson = str_replace(self::$jsonReplaceSource, self::$jsonReplaceTarget,
            $dataJson);
        $parameters = array();
        $parameters['customer'] = $dataJson;

        $url = $this->apiUrl.'customers/'.$customer['id'].'/edit';
        $result = $this->curlRequest($url, $parameters, 'POST');
        return $result;
    }

    /**
     * Удаление клиента
     *
     * @param string $id - идентификатор
     * @return array
     */
    public function customerDelete($id)
    {
        $url = $this->apiUrl.'customers/'.$id.'/delete';
        $result = $this->curlRequest($url, array(), 'POST');
        return $result;
    }

    /**
     * Получение списка заказов клиента
     *
     * @param string $id - идентификатор клиента
     * @param DateTime $startDate - начальная дата выборки
     * @param DateTime $endDate - конечная дата
     * @param int $limit - ограничение на размер выборки
     * @param int $offset - сдвиг
     * @return array - массив заказов
     */
    public function customerOrdersList($id, $startDate = null, $endDate = null,
        $limit = 100, $offset = 0)
    {
        $url = $this->apiUrl.'customers/'.$id.'/orders';
        $parameters = array();
        $parameters['startDate'] = $startDate;
        $parameters['endDate'] = $endDate;
        $parameters['limit'] = $limit;
        $parameters['offset'] = $offset;

        $result = $this->curlRequest($url, $parameters);
        return $result;
    }

    /* Методы для работы со справочниками */
    /**
     * Получение списка типов доставки
     *
     * @return array - массив типов доставки
     */
    public function deliveryTypesList()
    {
        $url = $this->apiUrl.'reference/delivery-types';
        $result = $this->curlRequest($url);
        return $result;
    }

    /**
     * Редактирование типа доставки
     *
     * @param array $deliveryType - информация о типе доставки
     * @return array
     */
    public function deliveryTypeEdit($deliveryType)
    {
        $dataJson = json_encode($deliveryType);
        $dataJson = str_replace(self::$jsonReplaceSource, self::$jsonReplaceTarget,
            $dataJson);
        $parameters = array();
        $parameters['deliveryType'] = $dataJson;

        $url = $this->apiUrl.'delivery-types/'.$deliveryType['code'].'/edit';
        $result = $this->curlRequest($url, $parameters, 'POST');
        return $result;
    }


    /**
     * Получение списка типов оплаты
     *
     * @return array - массив типов оплаты
     */
    public function paymentTypesList()
    {
        $url = $this->apiUrl.'reference/payment-types';
        $result = $this->curlRequest($url);
        return $result;
    }

    /**
     * Редактирование типа оплаты
     *
     * @param array $paymentType - информация о типе оплаты
     * @return array
     */
    public function paymentTypesEdit($paymentType)
    {
        $dataJson = json_encode($paymentType);
        $dataJson = str_replace(self::$jsonReplaceSource, self::$jsonReplaceTarget,
            $dataJson);
        $parameters = array();
        $parameters['paymentType'] = $dataJson;

        $url = $this->apiUrl.'payment-types/'.$paymentType['code'].'/edit';
        $result = $this->curlRequest($url, $parameters, 'POST');
        return $result;
    }


    /**
     * Получение списка статусов оплаты
     *
     * @return array - массив статусов оплаты
     */
    public function paymentStatusesList()
    {
        $url = $this->apiUrl.'reference/payment-statuses';
        $result = $this->curlRequest($url);
        return $result;
    }

    /**
     * Редактирование статуса оплаты
     *
     * @param array $paymentStatus - информация о статусе оплаты
     * @return array
     */
    public function paymentStatusesEdit($paymentStatus)
    {
        $dataJson = json_encode($paymentStatus);
        $dataJson = str_replace(self::$jsonReplaceSource, self::$jsonReplaceTarget,
            $dataJson);
        $parameters = array();
        $parameters['paymentStatus'] = $dataJson;

        $url = $this->apiUrl.'payment-statuses/'.$paymentStatus['code'].'/edit';
        $result = $this->curlRequest($url, $parameters, 'POST');
        return $result;
    }


    /**
     * Получение списка типов заказа
     *
     * @return array - массив типов заказа
     */
    public function orderTypesList()
    {
        $url = $this->apiUrl.'reference/order-types';
        $result = $this->curlRequest($url);
        return $result;
    }

    /**
     * Редактирование типа заказа
     *
     * @param array $orderType - информация о типе заказа
     * @return array
     */
    public function orderTypesEdit($orderType)
    {
        $dataJson = json_encode($orderType);
        $dataJson = str_replace(self::$jsonReplaceSource, self::$jsonReplaceTarget,
            $dataJson);
        $parameters = array();
        $parameters['orderType'] = $dataJson;

        $url = $this->apiUrl.'order-types/'.$orderType['code'].'/edit';
        $result = $this->curlRequest($url, $parameters, 'POST');
        return $result;
    }

    /**
     * Получение списка статусов заказа
     *
     * @return array - массив статусов заказа
     */
    public function orderStatusesList()
    {
        $url = $this->apiUrl.'reference/statuses';
        $result = $this->curlRequest($url);
        return $result;
    }

    /**
     * Редактирование статуса заказа
     *
     * @param array $status - информация о статусе заказа
     * @return array
     */
    public function orderStatusEdit($status)
    {
        $dataJson = json_encode($status);
        $dataJson = str_replace(self::$jsonReplaceSource, self::$jsonReplaceTarget,
            $dataJson);
        $parameters = array();
        $parameters['status'] = $dataJson;

        $url = $this->apiUrl.'statuses/'.$status['code'].'/edit';
        $result = $this->curlRequest($url, $parameters, 'POST');
        return $result;
    }


    /**
     * Получение списка групп статусов заказа
     *
     * @return array - массив групп статусов заказа
     */
    public function orderStatusGroupsList()
    {
        $url = $this->apiUrl.'reference/status-groups';
        $result = $this->curlRequest($url);
        return $result;
    }




    protected function curlRequest($url, $parameters = null, $method = 'GET', $format = 'json')
    {
        $parameters['apiKey'] = $this->apiKey;

        if ($method == 'GET' && !is_null($parameters))
            $url .= '?'.http_build_query($parameters);

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_FAILONERROR, FALSE);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);// allow redirects
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); // return into a variable
        curl_setopt($ch, CURLOPT_TIMEOUT, 3); // times out after 3s

        if ($method == 'POST')
        {
            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $parameters);
        }

        $response = curl_exec($ch);
        $this->statusCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);

        if (curl_errno($ch))
        {
            $this->lastError = 'Curl error: ' . curl_error($ch);
            return null;
        }
        curl_close($ch);

        $result = (array)json_decode($response, true);
        if ($result['success'] == false)
        {
            $this->lastError = $result['errorMsg'];
            return null;
        }

        $this->lastError = null;
        unset($result['success']);
        if (count($result) == 0)
            return true;
        return reset($result);
    }
}

?>