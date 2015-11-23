<?php

class ThemeHouse_SortNoPrefix_Listener_LoadClass extends ThemeHouse_Listener_LoadClass
{

    protected function _getExtendedClasses()
    {
        return array(
            'ThemeHouse_SortNoPrefix' => array(
                'model' => array(
                    'XenForo_Model_Thread'
                ), /* END 'model' */
            ), /* END 'ThemeHouse_SortNoPrefix' */
        );
    } /* END _getExtendedClasses */

    public static function loadClassModel($class, array &$extend)
    {
        $extend = self::createAndRun('ThemeHouse_SortNoPrefix_Listener_LoadClass', $class, $extend, 'model');
    } /* END loadClassModel */
}