
# Data live Service infrastructure

Description
--------------------

php component to connect applications with stripe


Installation / Usage
--------------------


## Via Composer

``` bash
$ composer require wnmd1987/serviceinfrastructure
```
## After installing via composer, run the migration command



Requirements
------------

- PHP 7.1.3
- Laravel 5.6 or higher



Usage
---------


``` php

namespace App\Http\Controllers;


use wnmd1987\serviceinfrastructure\Infrastructure;

class UserController extends Controller
{
    public function findService(Request $request)
    {
    	$service = new Infrastructure;
    	$keys = $service->getService($account_id,$service,$field);
    }
}

```


Methods
---------

##createConstumer

-code 


``` php
		$wallet = new Infrastructure;
    	$customer = $service->setService($account_id,$service,$data,$field)
```

- params


	- account_id: Local identifier of the account to which you want to link the customer stripe
	- service: service that is storing
	- data: array that includes the keys of external applications
	- field (optional): field that is being saved is optional by default is saved as authorization

##getCostumerId

-code 
	

``` php
		$service = new Infrastructure;
    	$service->getService($account_id,$service,$field);
```

- params
	

	- account_id: Local identifier of the account.

- return 
	
	- the customer identifier in stripe


##getDataCustomer
-code 
	

``` php
		$wallet = new Infrastructure;
    	$key = $service->getDataCustomer($user->id);
```

- params
	

	- account_id: Local identifier of the account.
	- service: service you want to consult
	- field (optional): field of the service to consult the default value is authorization 

- return 
	
	- array with all the stored data

