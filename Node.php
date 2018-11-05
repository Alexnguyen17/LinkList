<?php
/**
 * Created by PhpStorm.
 * User: alexnguyen
 * Date: 05/11/2018
 * Time: 08:36
 */
class Node
{
    /* Node data */
    public $data;
    /* Link to next node */
    public $next;
    function __construct($data)
    {
        $this->data = $data;
        $this->next = NULL;
    }
    function readNode()
    {
        return $this->data;
    }
}