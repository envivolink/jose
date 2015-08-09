<?php

/*
 * The MIT License (MIT)
 *
 * Copyright (c) 2014 Spomky-Labs
 *
 * This software may be modified and distributed under the terms
 * of the MIT license.  See the LICENSE file for details.
 */

namespace SpomkyLabs\Jose\Algorithm\Signature;

use Mdanter\Ecc\EccFactory;

/**
 */
class ES512 extends ECDSA
{
    /**
     * @return \Mdanter\Ecc\CurveFp
     */
    protected function getCurve()
    {
        return EccFactory::getNistCurves()->curve521();
    }

    /**
     * @return \Mdanter\Ecc\GeneratorPoint
     */
    protected function getGenerator()
    {
        return EccFactory::getNistCurves()->generator521();
    }

    /**
     * @return string
     */
    protected function getHashAlgorithm()
    {
        return 'SHA512';
    }

    /**
     * @return int
     */
    protected function getSignaturePartLength()
    {
        return 132;
    }

    /**
     * @return string
     */
    public function getAlgorithmName()
    {
        return 'ES512';
    }
}
