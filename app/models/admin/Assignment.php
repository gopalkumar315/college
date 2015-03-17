<?php
/**
 * Created by PhpStorm.
 * User: john
 * Date: 8/14/14
 * Time: 10:53 PM
 */
use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class Assignment extends Eloquent implements UserInterface, RemindableInterface {

    use UserTrait, RemindableTrait;
    protected $table='assignment';
    public $timestamps = false;


}
