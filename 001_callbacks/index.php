<?php

function userFunction(): void
{
    echo 'Callable userFunction()';
}

class UserClass
{
    private string $privateProperty = 'privatePropertyInitialValue';

    public function __invoke(): void
    {
        echo 'Callable __invoke() method';
    }

    public function method(): void
    {
        echo 'Callable method';
    }

    public static function staticMethod(): void
    {
        echo 'Callable staticMethod()';
    }
}

$classInstance = new UserClass();

# 1 Functions

// 1.1 Build-in function

echo call_user_func('time') . '<br>';

// 1.2 User function

echo call_user_func('userFunction') . '<br>';

# 2 Object methods

// 2.1 Class method (accepts array)

echo call_user_func([$classInstance, 'method']) . '<br>';

// 2.2 Class static method (accepts string 'Class::staticMethod')

echo call_user_func('UserClass::staticMethod') . '<br>';

# 3 Closures

// 3.1 Anonymous function

echo call_user_func(function()
{
    echo 'Callable Anonymous Function';
}) . '<br>';

// 3.2 Arrow function

$variable = 'Callable Arrow function';

echo call_user_func(fn () => $variable) . '<br>';

# 4 Objects with __invoke() method

echo call_user_func($classInstance) . '<br>';