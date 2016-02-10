# PHPActiveRecordBundle

Installation
============

Step 1: Download the Bundle
---------------------------

Add PHPActiveRecord repository to your composer.json:

```js
        {
            "type":"package",
            "package":{
                "name":"phpactiverecord",
                "version":"1.1.0",
                "source" : {
                    "type":"git",
                    "url":"https://github.com/jpfuentes2/php-activerecord/",
                    "reference":"master"
                },
                "autoload":{
                    "files":["ActiveRecord.php"]
                }
            }
        }

```

Open a command console, enter your project directory and execute the
following command to download the latest stable version of this bundle:

```bash
$ composer require officeutils/phpactivrecordbundle "~1"
```

This command requires you to have Composer installed globally, as explained
in the [installation chapter](https://getcomposer.org/doc/00-intro.md)
of the Composer documentation.

Step 2: Enable the Bundle
-------------------------

Then, enable the bundle by adding it to the list of registered bundles
in the `app/AppKernel.php` file of your project:

```php
<?php
// app/AppKernel.php

// ...
class AppKernel extends Kernel
{
    public function registerBundles()
    {
        $bundles = array(
            // ...

            new OfficeUtils\ActiveRecordBundle\OfficeUtilsActiveRecordBundle(),
        );

        // ...
    }

    // ...
}
```

Step 3: Add database configuration to app/Resources/config.yml

```yml
    ar_service.db:
        connections:
            mysql: 'mysql://username:password@localhost/development'
            pgsql: 'pgsql://username:password@localhost/development'
        default_connection: mysql
        model_directory: '%kernel.root_dir%/../path/to/your/model_directory'
        sql_logging: 1
        sql_log_file: '%kernel.root_dir%/var/logs/sql.log'
```

Step 4: Get service at your code

```php
        $ar = $this->get('ar_service');
        $user = User::find(1);
```