<?php
namespace App\Models;
use App\Cores\Model;
use App\Cores\Cacheable;

class Media extends Model
{
    protected $table = 'medias';
    protected $fillable = ['full_name','base_name','alt','base_link','full_link','ext','file_size','upload_dir'];
}

