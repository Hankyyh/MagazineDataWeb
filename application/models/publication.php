<?php

class Publication extends MY_Model {
    
    const DB_TABLE = 'publications';
    const DB_TABLE_PK = 'publication_id';
    
    /**
     * Publication unique identifier.
     * @var int
     */
    public $publication_id;
    
    /**
     * Publication name.
     * @var string
     */
    public $publication_name;
}