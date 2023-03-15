<?php

namespace App\Filters;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

trait Filterable
{


    public function scopeFilter(Builder $builder, $request, array $filters = [])
    {

        if ($request->select) {
            $builder->select($request->select);
        }
        if ($request->with) {
            $builder->with($request->with);
        }
        $builder-> where(function ($query) use ($request) {
            foreach ($request->only($this->filters) as $filter => $value) {
                $this->resolveFilter($filter, $query, $value);
            }
        });
        
        /* if ($request->skip) {
            $builder->skip($request->skip);
        }
        if ($request->take) {
            $builder->take($request->take);
        } */
        if ($request->orders) {
            foreach ($request->orders as $index => $column) {
                $order=explode('.',$column);
                if(count($order)==""){
                $builder->orderBy($order[0], $order[1]);
                }
            }
        }
    }

    public function addFilters(array $filters)
    {
        $this->filters = array_merge($this->filters, $filters);

        return $this;
    }
    public function addFilter(array $filters)
    {
        $this->filters = array_push($this->filters, $filters);

        return $this;
    }

    public function resolveFilter($filter, $builder, $value)
    {
        if (!is_array($value)) {
            return $builder->where($filter, $value);
        } else if (is_object($value)) {
            //recursividad
            return (new $value)->filter($builder,$value);//se llama a si mismo para recorrer mas filters
        } else if (count($value) == 2) {
            //return $builder->where('name', 'like', '%a%');// se requiere cambiar los espacios por %
            //dd($value);
            return $builder->where($filter, $value[0], $value[1]);
        }
    }
}
