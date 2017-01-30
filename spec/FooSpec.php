<?php

namespace AppSpec;

use function App\Foo;

describe('Foo', function () {

    describe('Foo()', function () {

        it('return "foo"', function () {

            $actual = Foo();
            expect($actual)->toBe('foo');

        });

    });

});
