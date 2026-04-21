<?php

class ContextualClass
{
    protected $context;

    public function __construct($context = 'default')
    {
        $this->context = $context;
    }

    public function execute()
    {
        if ($this->context === 'admin') {
            return "Admin context logic executed.";
        } elseif ($this->context === 'user') {
            return "User context logic executed.";
        } else {
            return "Default context logic executed.";
        }
    }
}

// Usage
$obj = new ContextualClass('admin');
echo $obj->execute();