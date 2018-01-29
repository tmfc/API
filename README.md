# API 
[![Download](https://img.shields.io/packagist/dt/botstan/API.svg?style=for-the-badge)](https://github.com/botstan/API) [![Version](https://img.shields.io/badge/version-V1.0.0-yellogreen.svg?style=for-the-badge)](https://github.com/botstan/API) [![API Version](https://img.shields.io/badge/api%20version-V3.5-orange.svg?style=for-the-badge)](https://github.com/botstan/API) [![Stars](https://img.shields.io/github/stars/botstan/API.svg?style=for-the-badge&label=Like)](https://github.com/botstan/API)

## Introduction
The API is an HTTP-based interface created for developers keen on building bots for Telegram.

> To learn how to create and set up a bot, please consult out [Introduction to Bots](https://core.telegram.org/bots) and [Bot FAQ](https://core.telegram.org/bots/faq);

### Requirements
1. PHP 5.5+
2. [Composer](https://getcomposer.org/) - Dependency Manager for PHP
3. [yiisoft/yii2](https://packagist.org/packages/yiisoft/yii2) - Yii PHP Framework Version 2
4. [Bot Token](https://core.telegram.org/bots#3-how-do-i-create-a-bot) - Telegram Bot API Access Token

### Installation
Install this package through [Composer](https://getcomposer.org/). Edit your project's `composer.json` file to require `"botstan/api": "*"` Or run this command in your command line:

```shell
composer require botstan/api
```

## Usage
The usual way to use the API is, creating an object of `api\base\API`.

```php
$token = '12345678:your_real_token';
$api = new \api\base\API($token);
```

### Methods
You could see all methods in [Telegram documentation](https://core.telegram.org/bots/api).

#### Make a request
To make a request we use `api\base\Request`, the result of this way is an array and we could validate response by `ok` field.

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

#### Make a response
The API library also bring us a Response object to make easy response validation. To doing this we should use Method object.

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
To make an object for all methods, we should create an object of API object.

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

### Helpers
Helpers is used to assist in providing some functionality, which isn't the main goal of the library.

#### Actions
Chat Actions let you broadcast a type of action depending on what the user is about to receive. The status is set for 5 seconds or less (when a message arrives from your bot, Telegram clients clear its typing status).

```php
use api\Actions;
use api\response\Error;
use api\method\sendChatAction;

$method = new sendChatAction('<token>');
$method->chat_id = '<chat_id>';
$method->action = Actions::TYPING;

$response = $method->send();
if ($response instanceof Error) {
    // request failed
}
```

#### Formatting
The Bot API supports basic formatting for messages. You can use bold and italic text, as well as inline links and pre-formatted code in your bots' messages. Telegram clients will render them accordingly. You can use either markdown-style or HTML-style formatting.
> Telegram clients will display an alert to the user before opening an inline link (‘Open this link?’ together with the full URL).

```php
use api\ParseMode;
use api\response\Error;
use api\method\sendMessage;

$method = new sendMessage('<token>');
$method->chat_id = '<chat_id>';
$method->text = '*bold text*';
$method->parse_mode = ParseMode::MARKDOWN;

$response = $method->send();
if ($response instanceof Error) {
    // request failed
}
```

#### InputFile
This object represents the contents of a file to be uploaded.

```php
use api\InputFile;
use api\response\Error;
use api\method\sendPhoto;

$file = new InputFile('@photos/cats.jpg');
$method = new sendPhoto('<token>');
$method->chat_id = '<chat_id>';
$method->photo = $file;

$response = $method->send();
if ($response instanceof Error) {
    // request failed
}
```

### InputMedia
This object represents the content of a media message to be sent.

```php
use api\InputFile;
use api\response\Error;
use api\method\sendMediaGroup;
use api\media\InputMediaPhoto;

$album[] = (new InputMediaPhoto())
    ->setCaption('sent by file id')
    ->setMedia('AgADBAADg6sxG8UOyFB7g58NMLgVu-tA9RkABE');

$album[] = (new InputMediaPhoto())
    ->setCaption('sent by url')
    ->setMedia('http://example.com/photos/dogs.jpg');

$album[] = (new InputMediaPhoto())
    ->setCaption('sent by InputFile')
    ->setMedia(new InputFile('@photos/cats.jpg'));

$method = new sendMediaGroup('<token>');
$method->chat_id = '<chat_id>';
$method->media = $album;

$response = $method->send();
if ($response instanceof Error) {
    // request failed
}
```

### Events
API object has four Events.

- AfterSend - `API::EVENT_AFTER_SEND`
- BeforeSend - `API::EVENT_BEFORE_SEND`
- RequestFailed - `API::EVENT_REQUEST_FAILED`
- RequestSucceed - `API::EVENT_REQUEST_SUCCEED`

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
