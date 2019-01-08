<?php
namespace App\Models;
use App\Cores\Model;
use App\Cores\Cacheable;

class Post extends Model
{
    protected $table = 'post';
    protected $fillable = ['name','slug','category_id','ordering','image','content','is_host','is_home','status'];
}
