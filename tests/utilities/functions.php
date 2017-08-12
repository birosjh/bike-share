<?php
// Simplifies the model factory functions
// Model Factoryの関数を使いやすくする

function create($class, $attributes = [], $times = null)
{
    return factory($class, $times)->create($attributes);
}
function make($class, $attributes = [], $times = null)
{
    return factory($class, $times)->make($attributes);
}
