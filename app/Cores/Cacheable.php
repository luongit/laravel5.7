<?php 
namespace App\Cores;
use QueryCache;
trait Cacheable
{
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

    protected function cacheTime()
    {
        return property_exists($this, 'cacheTime') ? $this->cacheTime : 0;
    }
}
