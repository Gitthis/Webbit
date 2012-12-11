<?php
    /**
    * Holding a instance of CWebbit to enable use of $this in subclasses.
    *
    * @package WebbitCore
    */
    class CObject {

       public $config;
       public $request;
       public $data;

       /**
        * Constructor
        */
       protected function __construct() {
        $ly = CWebbit::Instance();
        $this->config   = &$ly->config;
        $this->request  = &$ly->request;
        $this->data     = &$ly->data;
      }

    }
