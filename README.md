# yii2-yee-dashboard

##Yee CMS - Dashboard Module

####Backend dashboard module

This module is part of Yee CMS (based on Yii2 Framework).

Dashboard module lets you easily create dashboard page in the admin panel. 

Installation
------------

- Either run

```
composer require --prefer-dist yeesoft/yii2-yee-dashboard "~0.2.0"
```

or add

```
"yeesoft/yii2-yee-dashboard": "~0.2.0"
```

to the require section of your `composer.json` file.

- Run migrations

```php
yii migrate --migrationPath=@vendor/yeesoft/yii2-yee-dashboard/migrations/
```

Configuration
------
- In your backend config file

```php
'modules'=>[
    'dashboard' => [
        'class' => 'yeesoft\dashboard\DashboardModule',
    ],
],
```