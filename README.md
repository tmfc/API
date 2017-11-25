# API [![Yii2](https://img.shields.io/badge/framework-yii2-green.svg?style=for-the-badge)](http://www.yiiframework.com/) [![Download](https://img.shields.io/packagist/dt/botstan/API.svg?style=for-the-badge)](https://github.com/botstan/API) [![Version](https://img.shields.io/badge/version-V3.4-blue.svg?style=for-the-badge)](https://packagist.org/packages/botstan/API) [![Stars](https://img.shields.io/github/stars/botstan/API.svg?style=for-the-badge&label=Like)](https://github.com/botstan/API)
The Bot API is an HTTP-based interface created for developers keen on building bots for Telegram.
> To learn how to create and set up a bot, please consult our [Introduction to Bots](https://core.telegram.org/bots) and [Bot FAQ](https://core.telegram.org/bots/faq).


This library help developers write their programs easy and fast.

### Requirements
1. PHP 5.5+
2. Composer
3. yiisoft/yii2
4. Telegram Bot API Access Token - Talk to [@BotFather](https://t.me/botfather) and generate one.

### Installation
Install this package through [Composer](https://getcomposer.org/). Edit your project's `composer.json` file to require `"botstan/api": "*"` Or run this command in your command line:
```
composer require botstan/api
```

> Any issues, feedback, suggestions or questions please use issue tracker [here](https://github.com/botstan/API/issues).

## Usage
Create a new Object of API object, get us all telegram bot methods.
```php
$token = '12345678:your_real_token';
$api = new \api\base\API($token);
```

### Methods
You could see all methods in [Telegram documentation](https://core.telegram.org/bots/api). To send a request we have three options.

#### Request object
Very simple way, response is an array.
```php
use api\base\Request;

$request = new Request('<token>', [
    'method' => 'sendMessage',
    'chat_id' => '<chat_id>',
    'text' => 'Hello !!'
]);

$response = $request->send();
if ($response['ok'] && isset($response['result'])) {
    $message_id = $response['result']['message_id'];
    // request succeed
}
```

#### Method object
The most important difference between this way and previous way that response is a Response object.
```php
use api\response\Message;
use api\method\sendMessage;

$request = new sendMessage('<token>');
$request->chat_id = '<chat_id>';
$request->text = 'Hello !!';

$response = $request->send();
if ($response instanceof Message) {
    $message_id = $response->message_id;
    // request succeed
}
```

#### API object
Like previous way it's work but in this way create an object for all methods.
```php
use api\base\API;
use api\response\Error;

$api = new API('<token>');
$response = $api->sendMessage()
    ->setChatId('<chat_id>')
    ->setText('Hello !!')
    ->send();

if ($response instanceof Error) {
    // request failed
}
```

### InputFile
This object represents the contents of a file to be uploaded.
```php
use api\base\API;
use api\InputFile;
use api\response\Error;

$api = new API('<token>');
$file = new InputFile('@webroot/favicon.ico');

$response = $api->sendPhoto()
    ->setChatId('<chat_id>')
    ->setPhoto($file)
    ->send();

if ($response instanceof Error) {
    // request failed
}
```

### Events
API object has four Events.

* AfterSend - `API::EVENT_AFTER_SEND`
* BeforeSend - `API::EVENT_BEFORE_SEND`
* RequestFailed - `API::EVENT_REQUEST_FAILED`
* RequestSucceed - `API::EVENT_REQUEST_SUCCEED`

```php
use api\method\sendMessage;
use api\event\RequestFailed;

API::on(API::EVENT_REQUEST_FAILED, function (RequestFailed $event) {
    $error = $event->error;
    $method = $event->method;
    $code = $error->error_code;
    $description = $error->description;
    $message = '[' . $code . '] ' . $description;

    if ($method->has('chat_id')) {
        $token = $event->token;
        $chat_id = $method->get('chat_id');
        (new sendMessage($token))
            ->setChatId($chat_id)
            ->setText($message)
            ->send();
    }
});
```

## Disclaimer
This project and its author is neither associated or affiliated with Telegram in any way.

## License
This project is released under the [MIT License](https://github.com/botstan/API/blob/master/LICENSE).
