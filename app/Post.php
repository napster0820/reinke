<?php
/*versionNuevaAly*/
namespace App;
use Illuminate\Database\Eloquent\Model;
class Post extends Model
{
    protected $fillable = [
        'periodo', 'Sistema Riego', 'Inversión Cultivo', 'Energia', 
        'Mantenimiento', 'Ingreso', 'Liquidación', 'Flujo Periodo', 'Acumulado'
    ];
    /*No Borrar
    protected $fillable = [
        'Periodo', 'Capital Sistema Riego', 'Saldo Insoluto', 
        'Interes Sis Riego', 'Inversion cultivo','Energia', 
        'Mantenimiento', 'Ingreso', 'Liquidación', 'Flujo Periodo', 'Acumulado'
    ];*/
}