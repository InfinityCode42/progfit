<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VideoAulas extends Model
{
    protected $table = 'videoAulas';
    protected $primaryKey = 'id';
    protected $fillable = ['nome_video', 'descricao_video', 'link_video', 'status', 'data_envio'];
    public $timestamps = false;


}
