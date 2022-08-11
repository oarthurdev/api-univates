<?php
class Person extends TRecord
{
    const TABLENAME = 'person';
    const PRIMARYKEY= 'id';
    const IDPOLICY =  'max'; // {max, serial}
    public function __construct($ID = NULL, $callObjectLoad = TRUE)
    {
        parent::__construct($ID, $callObjectLoad);
        parent::addAttribute('name');
        parent::addAttribute('birth_date');
        parent::addAttribute('cpf');
        parent::addAttribute('sex');
        parent::addAttribute('phone');
        parent::addAttribute('email');
    }
}
?>