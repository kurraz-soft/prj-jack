Project Jack
============================
18+ slave master game
web port of Jack-o-nine tails game (qsp)


DIRECTORY STRUCTURE
-------------------

      assets/             contains assets definition
      commands/           contains console commands (controllers)
      components/         contains custom components
      config/             contains application configurations
      controllers/        contains Web controller classes
      gii/                contains modified templates for gii generator
      mail/               contains view files for e-mails
      messages/           contains i18n messages for Yii:t()
      migrations/         contains db migrations
      models/             contains model classes
      runtime/            contains files generated during runtime
      tests/              contains various tests for the basic application
      vendor/             contains dependent 3rd-party packages
      views/              contains view files for the Web application
      web/                contains the entry script and Web resources



REQUIREMENTS
------------

The minimum requirement by this project template that your Web server supports PHP 5.4.0.

Composer

INSTALLATION
------------

Run
```
composer install
./yii rbac init
```

CONFIGURATION
-------------

### Database

Copy file .env.example to .env

Edit the file `/.env` with real data, for example:

```php
YII_DEBUG=true
YII_ENV=dev

DB_HOST=localhost
DB_NAME=db_name
DB_USER=db_user
DB_PASS=123456
```

**NOTES:**
- Yii won't create the database for you, this has to be done manually before you can access it.
- Check and edit the other files in the `config/` directory to customize your application as required.
- Refer to the README in the `tests` directory for information specific to basic application tests.

**RUN MIGRATIONS**
```
./yii migrate
```

### Create admin users
```
./yii user/new <login> <password> <role:admin|manager>
```

TESTING
-------

Tests are located in `tests` directory. They are developed with [Codeception PHP Testing Framework](http://codeception.com/).
By default there are 3 test suites:

- `unit`
- `functional`
- `acceptance`

Tests can be executed by running

```
composer exec codecept run
``` 
