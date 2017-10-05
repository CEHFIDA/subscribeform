# Laravel 5 subscribeform
subscribeform - a package to newsletter subscription

## How to install

Install via composer
```
composer require selfreliance/subscribeform
```

Config, migrations and javascript
```php
php artisan vendor:publish --provider="Selfreliance\Subscribeform\SubscribeFormServiceProvider" --tag="config"
php artisan vendor:publish --provider="Selfreliance\Subscribeform\SubscribeFormServiceProvider" --tag="migrations" --force
php artisan vendor:publish --provider="Selfreliance\Subscribeform\SubscribeFormServiceProvider" --tag="javascript" --force
```

And do not forget about 
```php 
php artisan migrate 
```

Connect javascript
```html
<script src="{{ asset('vendor/subscribeform/subscribe.js') }}"></script>
```

## Usage

```
	Transimt data to url (/subscribe) - method POST:
		- email (required)
```

Do not forget about result
```html
	<div id = "result"></div>
```
