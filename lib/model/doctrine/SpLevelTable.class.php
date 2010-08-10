<?php


class SpLevelTable extends Doctrine_Table
{
    
    public static function getInstance()
    {
        return Doctrine_Core::getTable('SpLevel');
    }
}