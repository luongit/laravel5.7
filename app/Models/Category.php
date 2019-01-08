<?php
namespace App\Models;
use App\Cores\Model;
use App\Cores\Cacheable;

class Category extends Model
{
    protected $table = 'category';
    protected $fillable = ['name','slug','parent','ordering','status'];
}
