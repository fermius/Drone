<?php

namespace Pleets\Mvc;

abstract class AbstractionModel
{
	private $entityManager;

	public function __construct()
	{
		$this->entityManager = include("bootstrap.php");
	}

	/* Getters */
	public function getEntityManager() { return $this->entityManager; }

	public function __destruct()
	{
		// $this->getEntityManager()->flush();
	}
}