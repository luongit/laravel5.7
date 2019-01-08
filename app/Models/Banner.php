<?php
namespace App\Models;
use App\Cores\Model;


class Banner extends Model
{
    protected $table = 'banner';
    protected $fillable = ['name','link','image','ordering','status'];
}
