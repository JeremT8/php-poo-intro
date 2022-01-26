<?php

class QueryBuilder {

    private string $select;

    private string $from;

    private string $where;

    public function select(string $select): self{
        $select = str_replace(['`', ";"], ["", ""], $select);
        $selectParts = explode(',',$select );
        $selectParts = array_map(function($item){
            return "`".trim($item)."`";
        }, $selectParts);

        $this->select = implode(", ", $selectParts);
        return $this;
    }

    public function from (string $tableName): self{
        $tableName = str_replace(['`', ";"], ["", ""], $tableName);
        $this->from = "`{$tableName}`";
        return $this;
    }

    public function where (string $colName, string $operator, string $value): self{
        $colName = str_replace(['`', ";"], ["", ""], $colName);
        $value = str_replace(['`', ";"], ["", ""], $value);
        $operator = str_replace(['`', ";"], ["", ""], $operator);

        $this->where = "`{$colName}` {$operator} '{$value}'";
        return $this;
    }

    public function getSQL(): string{
        $sql = "SELECT {$this->select} FROM {$this->from} ";
        if(! empty($this->where)){
            $sql .= " WHERE {$this->where}";
        }
        return $sql;
    }


}