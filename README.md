# Laravel 5 subscribeform
subscribeform - a package serves as a subscription to notifications

## How to install

Install via composer
```
composer require selfreliance/subscribeform
```

Config, migrations and javascript
```php
php artisan vendor:publish --provider="Selfreliance\Subscribeform\SubscribeFormServiceProvider" --force
```

And do not forget about 
```php 
php artisan migrate 
```

Connect javascript
```html
<script src="{{ asset('js/core.js') }}"></script>
```

## Usage

```
	Transimt data to url (/subscribe) - method POST:
		- email (required)
```
