<?php

namespace startuplab\gisgkh\common\exceptions;

use yii\base\Exception;

class GisgkhException extends Exception
{
    public function getName()
    {
        return 'Ошибка взаимодействия с ГИС ЖКХ';
    }
}