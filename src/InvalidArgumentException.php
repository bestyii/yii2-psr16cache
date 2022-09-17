<?php

namespace bestyii\psr16cache;

use yii\base\InvalidArgumentException as YiiInvalidArgumentException;

class InvalidArgumentException extends YiiInvalidArgumentException implements \Psr\SimpleCache\InvalidArgumentException
{

}