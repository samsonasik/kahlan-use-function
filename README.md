Run :

```
composer install
vendor/bin/kahlan --coverage=4
```

Result:

```
$ vendor/bin/kahlan --coverage=4  --istanbul=coverage.json && istanbul report
            _     _
  /\ /\__ _| |__ | | __ _ _ __
 / //_/ _` | '_ \| |/ _` | '_ \
/ __ \ (_| | | | | | (_| | | | |
\/  \/\__,_|_| |_|_|\__,_|_| |_|

The PHP Test Framework for Freedom, Truth and Justice.

Working Directory: /Users/samsonasik/www/kahlan-use-function

..                                                                  2 / 2 (100%)



Expectations   : 2 Executed
Specifications : 0 Pending, 0 Excluded, 0 Skipped

Passed 2 of 2 PASS in 0.033 seconds (using 2Mo)

Coverage Summary
----------------
                           Lines           %

 \                         2 / 2     100.00%
└── App\                   2 / 2     100.00%
   ├── Foo()               1 / 1     100.00%
   └── Bar                 1 / 1     100.00%
      └── Bar::doFoo()     1 / 1     100.00%

Total: 100.00% (2/2)

Coverage collected in 0.002 seconds (using an additionnal 112Ko)
```
