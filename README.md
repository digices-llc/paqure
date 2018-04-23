# PaQuRe #

_Object-Oriented Parse-Query-Reply Library for PHP_

- **Author:** Roderic Linguri <linguri@digices.com>
- **Version:** 0.6.0
- **Copyright:** 2012-2018 Digices LLC

### Installing with Composer ###

_Include the following in the root level of your composer.json:_

```JSON
{
    "repositories": [
        {
            "url": "https://github.com/digices-llc/paqure",
            "type": "vcs"
        }
    ],
    "require": {
        "digices/paqure": ">=0.6.1"
    }
}

```

_Then run `composer install` to include the library in your project._

###### CLASS REFERENCE ######
## Date ##

_Example Implementation:_

Create a date object using current date and time:
```PHP
date_default_timezone_set('America/Denver');
$date_object = new \digices\paqure\Date();
```

Create a date object using posix (integer):
```PHP
date_default_timezone_set('America/Denver');
$date_object = new \digices\paqure\Date(1524061833);
```

Create a date object using mysql datetime string:
```PHP
date_default_timezone_set('America/Denver');
$date_object = new \digices\paqure\Date('2018-04-18 08:30:33');
```

---
_Available Properties:_

### posix ###
- Scope: Public
- Type: Integer
- Descr: Seconds since 1/1/1970 GMT
```PHP
$integer = $date->posix;
```

### mysql ###
- Scope: Public
- Type: String
- Descr: MySQL datetime string
```PHP
$string = $date->mysql;
```

### offset ###
- Scope: Public
- Type: Integer
- Descr: Offset from UTC in seconds
```PHP
$signed_int = $date->offset;
```

### iso8601 ###
- Scope: Public
- Type: String
- Descr: UTC Time in ISO8601 Format
```PHP
$iso_string = $date->iso8601;
```

---
_Available Methods:_

---
_JSON Encode Example_

```JSON
{
    "posix": 1524061833,
    "mysql": "2018-04-18 08:30:33",
    "offset": -21600,
    "iso8601": "2018-04-18T14:30:33+00:00"
}
```
