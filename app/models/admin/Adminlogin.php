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

class Adminlogin extends Eloquent implements UserInterface, RemindableInterface {

    use UserTrait, RemindableTrait;

    protected $table='admin';
    public $timestamps = false;
    public function Validation($input)
    {
        $rule=array(
            'username'=>'required',
            'password'=>'required'
        );
        $messages = array(
            'required' =>'This field cannot be empty'
        );
        $v=Validator::make($input,$rule,$messages);
        return $v;
    }



}
