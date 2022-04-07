<?php
namespace SmartyConfig\Common;

class SmartyConfig
{
    public static function configDir()
    {
        $dirArray = array(
            S_ROOT.'vendor/qixinyun/tongbai-share-config/src/SmartyConfig/Tb',
            S_ROOT.'vendor/qixinyun/tongbai-share-config/src/SmartyConfig/Common',
            S_ROOT.'vendor/qixinyun/tongbai-share-config/src/SmartyConfig/',
        );

        return $dirArray;
    }
}
