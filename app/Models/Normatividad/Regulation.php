<?php

namespace App\Models\Normatividad;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Http\Request;
use App\Models\Normatividad\RegulationFile;
use Illuminate\Support\Facades\Storage;

use Illuminate\Database\Eloquent\Model;
use App\Filters\Filterable;

class Regulation extends Model
{
    use Filterable;
    
    protected $connection = 'normatividad';
    
    protected $fillable=[
        'regulations_tipo',
        'regulations_tipos_sigla_id',
        'reg_title',
        'reg_ofic',
        'reg_description',
        'reg_observation',
        'reg_date',
        'reg_status',
        'reg_year',
        'reg_num',
        'reg_proyecto'
    ];
    protected $filters =[
        'regulations_tipo',
        'reg_year',
        'reg_type',
        'reg_title',
        'reg_description',
        'reg_observation',
        'reg_proyecto'

    ];
    
    protected $casts = [
        'reg_date' => 'date:Y-m-d',
        'reg_status' => 'boolean',
    ];
    public function files():HasMany {
        return $this->hasMany(RegulationFile::class,'file_idregulation','id');
    }
    public function regulationTipo():BelongsTo {
        return $this->belongsto(RegulationsTipo::class, 'reg_type','id');
    }
    public function sincFiles($files){
        foreach($files as $id=>$file){
            $r1= new Request($file);
            if(isset($r1->id)){
                $file=RegulationFile::find($r1->id);
                $file->fill($r1->only($file->getFillable()));
            }else{
                $file = new RegulationFile();
                $sigla= RegulationsTiposSigla::find($this->regulations_tipos_sigla_id);
                $file->fill($r1->only($file->getFillable()));
                $extension = pathinfo($file->file_ruta)['extension'];
                $pathtostore=$this->reg_year."/".str_pad($sigla->sig_codigo, 3, "0", STR_PAD_LEFT)."/";
                $filenametostore=str_pad($this->reg_type, 3, "0", STR_PAD_LEFT).str_pad($file->file_tomo, 2, "0", STR_PAD_LEFT).str_pad($file->file_nro_tipo, 2, "0", STR_PAD_LEFT);
                $filenametostore.=str_pad($this->reg_num, 6, "0", STR_PAD_LEFT).$this->reg_year."_".(string)time().".".$extension;
                //dd('hola');
                $contents = Storage::disk('local')->get($file->file_ruta);
                Storage::disk('ftp_destino')->makeDirectory($pathtostore);
                Storage::disk('ftp_destino')->put($pathtostore.$filenametostore, $contents);
                $file->file_ruta=$pathtostore.$filenametostore;
            }
            $file->file_idregulation=$this->id;
            $file->file_status=1;
            $file->file_user=1;

            //Storage::disk('ftp_destino')->writeStream($filenametostore, Storage::disk('local')->readStream($file->file_ruta));
            //Storage::disk('ftp_destino')->put($newruta, $contents);
            $file->save();
        }
    }
}
