<?php
/**
 * DemoOOp
 * 
 * @package  demoOOP
 * @access public
 */
class DemoOOP
{
    public $colorProduct;
    public $sizeProduct;
    public $nameProduct;
    /**
     * __construct 
     */
    public function __construct($nameProductInput, $colorProductInput, $sizeProductInput)
    {
        $this->colorProduct = $colorProductInput;
        $this->sizeProduct = $sizeProductInput;
        $this->nameProduct = $nameProductInput;
    }

    /**
     * GetProduct List product
     * 
     * @return void List the name, the color, the size of product
     */
    public function GetProduct()
    {
        echo $this->nameProduct;
        echo $this->colorProduct;
        echo $this->sizeProduct;
    }

}
/**
 * @package  demoOOP
 * @access public
 */
class Shirt extends DemoOOP
{
	public $colorProduct = "White";
    public $sizeProduct = "M";
    public $nameProduct = "T-Shirt";
    /**
     * __construct
     */
    public function __construct()
    {
        
    }

    /**
     * GetProduct Get list product
     * 
     * @return void List name product
     */
    public function GetProduct()
    {
    	echo $this->nameProduct;
    }
}

/**
 * AbsProduct
 * 
 * @package demoOOP
 * @access public
 */
abstract class AbsProduct
{
    /**
     * __construct
     */
    public function __construct()
    {
        
    }
}

