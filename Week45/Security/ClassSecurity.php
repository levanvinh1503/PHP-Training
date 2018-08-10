<?php
require_once __DIR__."/../Transaction/ClassTransaction.php";
/**
 * summary
 */
class ClassSecurity extends ClassTransaction
{
	/**
     * @var string $hostName
     * @var string $usernameDb
     * @var string $passwordDb
     * @var strign $nameDb
     */
	public $hostName = "localhost";
	public $usernameDb = "root";
	public $passwordDb = "";
	public $nameDb = "db_demoex";
    /**
     * _construct
     */
    public function __construct()
    {

    }
}