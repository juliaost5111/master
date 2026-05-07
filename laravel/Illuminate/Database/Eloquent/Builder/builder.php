<?php 
        use Illuminate\Database\Eloquent\Builder  
        use Illuminate\Database\Eloquent\Model  
  
public function apply(Builder $builder, Model $model)
{
    $builder->whereNull($model->getQualifiedDeletedAtColumn());

    $this->extend($builder);
}

public function remove(Builder $builder, Model $model)
{
    $column = $model->getQualifiedDeletedAtColumn();

    $query = $builder->getQuery();

    foreach ((array) $query->wheres as $key => $where)
    {
        
        if ($this->isSoftDeleteConstraint($where, $column))
        {
            unset($query->wheres[$key]);

            $query->wheres = array_values($query->wheres);
        }
    }
}
?>