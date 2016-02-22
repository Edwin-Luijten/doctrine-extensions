<?php

namespace MediaMonks\Doctrine\Transformable\Transformer;

abstract class AbstractTransformer implements TransformerInterface
{
    /**
     * @param string $value
     * @return mixed
     */
    public function transform($value)
    {
        return $value;
    }

    /**
     * @param mixed $value
     * @return string
     */
    public function reverseTransform($value)
    {
        return $value;
    }
}