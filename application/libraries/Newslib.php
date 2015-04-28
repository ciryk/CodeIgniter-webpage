<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class Newslib {

	protected $title = '';
    protected $content = '';
    protected $date    = '';

    public function __construct($params)
    {

    	$this->title = element('title', $params);
    	$this->content = element('content', $params);
    	$this->date = element('date', $params);
    	
    }

    public function __toString()
    {
    	$newspost = "<h1>".$this->title."</h1>"."<p>".$this->content."</p>"."<small>Posted on:".$this->date."</small>";
        return $newspost;
    }
}