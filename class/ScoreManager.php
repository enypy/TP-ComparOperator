<?php

namespace class;

class ScoreManager
{
    private \PDO $db;
    
    public function __construct(\PDO $db)
    {
        $this->db = $db;
    }

}
