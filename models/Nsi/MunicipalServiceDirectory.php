<?php

namespace startuplab\gisgkh\common\models\Nsi;

use startuplab\gisgkh\common\models\Nsi\common\GisNsiDirectory;

/**
 * Справочник №3 "Вид коммунтальной услуги"
 * @package startuplab\gisgkh\common\models\Nsi
 */
class MunicipalServiceDirectory extends GisNsiDirectory
{

    /**
     * @inheritDoc
     */
    function getRegisterNumber()
    {
        return 3;
    }

    /**
     * @inheritDoc
     */
    function getEntryClassName()
    {
        return MunicipalService::className();
    }
}