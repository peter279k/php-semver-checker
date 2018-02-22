<?php

namespace PHPSemVerChecker\Operation;

class TraitAdded extends TraitOperationUnary
{
	/**
	 * @var string
	 */
	protected $code = 'V046';
	/**
	 * @var string
	 */
	protected $reason = 'Trait was added.';
}
