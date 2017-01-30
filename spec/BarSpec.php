<?php

namespace AppSpec;

use App\Bar;
use function App\Bar;

describe('Bar', function () {

    describe('doFoo()', function () {

        it('return "Foo"', function () {

            $obj = new Bar();
            $actual = $obj->doFoo();
            expect($actual)->toBe('foo');

        });

    });

});
