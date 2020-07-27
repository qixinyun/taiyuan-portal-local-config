<?php
namespace SmartyConfig\Common;

class SmartyConfig
{
    public static function configDir()
    {
        $dirArray = array(
            APP_ROOT.'vendor/qixinyun/taiyuan-portal-config/src/SmartyConfig/Ty',
            APP_ROOT.'vendor/qixinyun/taiyuan-portal-config/src/SmartyConfig/Common',
            APP_ROOT.'vendor/qixinyun/taiyuan-portal-config/src/SmartyConfig'
        );

        return $dirArray;
    }
}
