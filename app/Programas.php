<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Programas extends Model
{
    //
    protected $fillable = ['idPrograma',
    					   'NombrePrograma',
    					   'UsuarioPrograma',
    					   'ClavePrograma',
    					   'PlataformaPrograma',
    					   'VersionPrograma',
    					   'LinkDescargaPrograma'];
}
