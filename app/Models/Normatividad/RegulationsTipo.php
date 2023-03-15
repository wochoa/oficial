<?php

namespace App\Models\Normatividad;

use Illuminate\Database\Eloquent\Model;
use App\Filters\Filterable;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Http\Request;

class RegulationsTipo extends Model
{
    use Filterable;
    
    protected $connection = 'normatividad';
    
    protected $fillable = [
        'tip_description',
        'tip_show',
        'tip_show_portal',
        'tip_uso_obras',
        'tip_autoincrement',
        'tip_adenda'
    ];

    protected $filters = [
        'tip_description'
    ];
    

    protected $casts = [
        'tip_show' => 'boolean',
        'tip_show_portal' => 'boolean',
        'tip_uso_obras' => 'boolean',
        'tip_autoincrement' => 'boolean',
        'tip_adenda' => 'boolean'
    ];

    public function tip_siglas():HasMany {
        return $this->hasMany(RegulationsTiposSigla::class);
    }
    public function regulations():HasMany {
        return $this->hasMany(Regulation::class,'reg_type','id');
    }

    public function syncSiglas($siglas){
        foreach($siglas as $id=>$sigla){
            $r1= new Request($sigla);
            if(isset($r1->id)){
                $s=RegulationsTiposSigla::find($r1->id);
            }else{
                $s = new RegulationsTiposSigla();
            }
            $s->regulations_tipo_id=$this->id;
            $s->fill($r1->only($s->getFillable()));
            $s->save();
        }
    }
    
    public static function getTipoAsArray()
    {
        $tipos = [];        
        $esp = RegulationsTipo::all();
        foreach ($esp as $data){
            $tipos[str_pad($data->id,3,'0',STR_PAD_LEFT)]=$data;
        }
        return $tipos;
    }
    public static function getTipoForSelect()
    {
        $tipos = [];
        foreach (RegulationsTipo::all() as $dato)
        {
            $tipos[$dato->id]=$dato->tip_description; 
        }
        return $tipos;
    }
}
