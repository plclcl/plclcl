<?php
use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;
use Illuminate\Database\Eloquent\SoftDeletingTrait;

class Docente extends Eloquent implements UserInterface, RemindableInterface{

	use UserTrait, RemindableTrait;

	protected $table = 'docente';
	public $timestamps = false;

	use SoftDeletingTrait;

	protected $dates = ['deleted_at'];
	protected $hidden = array('password', 'remember_token');

	public function departamento()
	{
		return $this->belongsTo('Departamento');
	}

	public function planificacion()
	{
		return $this->hasMany('Planificacion', 'fk_profesor');
	}

	public function rol()
	{
		return $this->belongsToMany('Rol');
	}

    public static function validate($input){
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