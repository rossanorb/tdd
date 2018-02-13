<?php

namespace QueryBuilder\Mysql;

class Filters
{
  private $sql = [];

  public function where(string $field, string $condition, $value):Filters
  {
      $where = 'WHERE %s%s%s';
      $this->sql[] = sprintf($where, $field, $condition, $value );
      return $this;
  }

  public function getSql():string
  {
      return implode(' ', $this->sql);
  }

  public function orderBy(string $field, string $order):Filters
  {
      $this->sql[] = 'ORDER BY created desc';
      return $this;

  }

}
