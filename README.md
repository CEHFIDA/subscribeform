# Laravel 5 subscribeform
subscribeform - a package serves as a subscription to notifications

## How to install

Install via composer
```
composer require selfreliance/subscribeform
```

Config, migrations and javascript
```php
php artisan vendor:publish --provider="Selfreliance\subscribeform\SubscribeFormServiceProvider" --force
```

Connect javascript
```html
<script src="{{ asset('js/core.js') }}"></script>
```

And do not forget about 
```php 
php artisan migrate 
```

## Functions

```php
use Selfreliance\subscribeform\SubscribeFormController;

SubscribeFormController::subscribed('example@gmail.com'); // check if subscribed return true or false
```

## Usage

```
	Transimt data to url (/subscribe or from config subscribeform) - method POST:
		- email (required)
```
