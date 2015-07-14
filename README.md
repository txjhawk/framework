[![Build Status](https://travis-ci.org/grassroot2013/grassrootsMVC.svg?branch=master)](https://travis-ci.org/grassroot2013/grassrootsMVC)
## GrassRoots MVC

#### Author: Anthony Allen
---
#### Requirements

* Composer
* PHP 5.3 or later

---
#### Description

A simple PHP MVC framework using composer and doctrine.

##### Usage

Create your project directory something like this.

```sh
    - src/
    -   app/
    -   composer.json
```

To use this framework with composer create your composer file and add this code.

```sh
{
  "name": "Skeleton App",
  "homepage": "https://url",
  "license": "MIT",
  "author": [
    {
      "name": "Your Name"
    }
  ],
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/grassroot2013/grassrootsMVC"

    }
  ],
  "require":{
      "grassroot2013/grassrootsMVC": "dev-master"
    },
  "autoload": {
      "psr-4": {
          "app\\": "app",
          "grassrootsMVC\\": "grassroots2013/grassrootsMVC/"
        }
      }
}
```

After running command "composer install" you should get somthing similar to this.

```sh
    - src/
    -   app/
    -   vendor/
    -       bin/
    -       composer/
    -       doctrine/
    -       grassroot2013/grassrootsMVC/
    -       symfony/
    -       autoload.php
    -   composer.json
```

##### Todo
* Add vagrant
* Add The worlds most awesome front end framework Zurbs Foundation.
* Create some useful libs.

##### Sample App in progress.
* https://github.com/grassroot2013/grassroots-mvc-app



