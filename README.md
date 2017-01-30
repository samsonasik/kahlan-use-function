Run :

```
composer install
vendor/bin/kahlan --coverage=4
```

Result:

```
vendor/bin/kahlan --coverage=4 
            _     _
  /\ /\__ _| |__ | | __ _ _ __
 / //_/ _` | '_ \| |/ _` | '_ \
/ __ \ (_| | | | | | (_| | | | |
\/  \/\__,_|_| |_|_|\__,_|_| |_|

The PHP Test Framework for Freedom, Truth and Justice.

Working Directory: /Users/samsonasik/www/kahlan-use-function

.                                                                   1 / 1 (100%)



Expectations   : 1 Executed
Specifications : 0 Pending, 0 Excluded, 0 Skipped

Passed 1 of 1 PASS in 0.024 seconds (using 2Mo)

Coverage Summary
----------------
                 Lines           %

 \               1 / 1     100.00%
└── App\         1 / 1     100.00%
   └── Foo()     1 / 1     100.00%

Total: 100.00% (1/1)

Coverage collected in 0.002 seconds (using an additionnal 11Ko)
```
