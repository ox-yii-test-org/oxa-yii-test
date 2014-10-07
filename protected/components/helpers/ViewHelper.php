<?php

class ViewHelper
{
    public static function getMaleStatus($status)
    {
        switch($status) {
            case '1':
                return 'Active';
            case '2':
                return 'Inactive';
            default:
                return '';
        }
    }
}
