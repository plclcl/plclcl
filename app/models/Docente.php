<?php

use Illuminate\Database\Eloquent\SoftDeletingTrait;
use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class Docente extends Eloquent  implements UserInterface, RemindableInterface{

	protected $table = 'docentes';
	public $timestamps = false;
    use UserTrait, RemindableTrait;
	use SoftDeletingTrait;

	protected $dates = ['deleted_at'];

    protected $hidden = array('password', 'remember_token');

    public static $rules=array(
        'rut'=>'required',
        'password'=>'required'
    );

    /**
     * Get the unique identifier for the user.
     *
     * @return mixed
     */
    public function getAuthIdentifier()
    {
        return $this->getKey();
    }

    /**
     * Get the password for the user.
     *
     * @return string
     */
    public function getAuthPassword()
    {
        return $this->password;
    }

    /**
     * Get the e-mail address where password reminders are sent.
     *
     * @return string
     */
    public function getReminderEmail()
    {
        return $this->email;
    }

    public static function validaLogin($data) {
        return Validator::make($data,static::$rules);
    }

	public function departamento()
	{
		return $this->belongsTo('Departamentos');
	}

	public function planificacion()
	{
		return $this->hasMany('Planificaciones', 'fk_profesor');
	}

	public function rol()
	{
		return $this->belongsToMany('Roles');
	}

    public static function validaDocente($input){
        $reglas= array(

            'rut'=>'required|min:10',
            'departamento'=>'required',
            'nombre'=> 'required | alpha|min:4',
            'apellidopaterno'=>'required |alpha|min:3',
            'apellidomaterno'=>'required |alpha|min:3',
            'departamento'=>'required',
            'genero'=>'required',
            'email'=>'email',
        );
        return Validator::make($input, $reglas);

    }

}