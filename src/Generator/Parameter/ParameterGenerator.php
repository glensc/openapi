<?php

namespace Joli\Jane\Swagger\Generator\Parameter;

use PhpParser\Node;
use PhpParser\Parser;

abstract class ParameterGenerator
{
    /**
     * @var Parser
     */
    protected $parser;

    public function __construct(Parser $parser)
    {
        $this->parser = $parser;
    }

    /**
     * @param $parameter
     *
     * @return Node\Param|null
     */
    public function generateMethodParameter($parameter)
    {
        return null;
    }

    /**
     * @param $parameter
     *
     * @return string
     */
    public function generateDocParameter($parameter)
    {
        return '';
    }

    /**
     * @param $defaults
     * @param $required
     * @param $formParameters
     * @param $headerParameters
     *
     */
    public function populateQueryParam(&$defaults, &$required, &$formParameters, &$headerParameters)
    {
    }
} 
