<?php
namespace App\Cores;

use Illuminate\Database\Eloquent\Model as BaseModel;
use QueryCache;

class Model extends BaseModel
{
    use Cacheable;
    protected $cacheTime = 10;
    protected function newBaseQueryBuilder()
    {
        $connection = $this->getConnection();
 
        return new QueryCache(
            $connection,
            $connection->getQueryGrammar(),
            $connection->getPostProcessor(),
            $this->cacheTime()
        );
    }

    public function scopeS($query){
        if(request()->name){
            return $query->where('name','like','%'.request()->name.'%');
        }else{
            return $query;
        }
    }
}
