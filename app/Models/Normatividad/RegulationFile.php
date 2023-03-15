<?php

namespace App\Models\Normatividad;

use Illuminate\Database\Eloquent\Model;
use App\Filters\Filterable;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class RegulationFile extends Model
{
    use Filterable;
    
    protected $connection = 'normatividad';
    
    protected $fillable=[
        'file_ruta',
        'file_tomo',
        'file_nro_tipo',
        'file_status',
        'file_statusfile',
        'file_size',
        'file_name',
        'file_type',
        'file_md5',
        'reg_num'
    ];
    
    protected $visible=[
        'id',
        'file_idregulation',
        'file_tomo',
        'file_nro_tipo',
        'file_status',
        'file_statusfile',
        'file_size',
        'file_name',
        'file_name',
        'reg_num'
    ];
    public function regulation():BelongsTo {
        return $this->belongsto(Regulation::class, 'file_idregulation','id');
    }
    public function getSizeFormated(){
        //dd($this->file_size);
        if($this->file_size<1024){
            return $this->file_size.' bytes';
        }else if($this->file_size<1048576){
            return round($this->file_size/1024,2).' Kb';
        }else{
            return round($this->file_size/1048576,2).' Mb';
        }
    }
}
