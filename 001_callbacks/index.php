<?php

function userFunction(): void
{
    echo 'Callable userFunction';
}

class UserClass
{
    public function __invoke(): void
    {
        echo 'Callable __invoke method';
    }

    public function method(): void
    {
        echo 'Callable method';
    }

    public static function staticMethod(): void
    {
        echo 'Callable staticMethod';
    }
}

$classInstance = new UserClass();

# 1 Functions

// 1.1 Build-in function

echo 'time'() . '<br>';

// 1.2 User function

echo 'userFunction'() . '<br>';

# 2 Object methods

// 2.1 Object method (accepts array)

echo [$classInstance, 'method']() . '<br>';

// 2.2 Class static method (accepts string 'Class::staticMethod')

echo 'UserClass::staticMethod'() . '<br>';

# 3 Closures

// 3.1 Anonymous function

$f = function() {return 'Callable Anonymous Function';};
echo $f() . '<br>';

// 3.2 Arrow function

$variable = 'Callable Arrow function';

$f = fn () => $variable;
echo $f() . '<br>';

# 4 Objects with __invoke() method

echo $classInstance() . '<br>';