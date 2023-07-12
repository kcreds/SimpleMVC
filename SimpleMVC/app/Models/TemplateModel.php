<?php

class TemplateModel
{
    use Model;

    protected $table = 'table_name';
    protected $allowedColumns = [
        'name',
    ];
}
