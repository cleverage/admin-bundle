<?php declare(strict_types=1);
/*
 * This file is part of the CleverAge/OAuthApiBundle package.
 *
 * Copyright (C) 2017-2019 Clever-Age
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CleverAge\OAuthApiBundle\Client;

use CleverAge\OAuthApiBundle\Request\ApiRequestInterface;

/**
 * Base logic used to query a remote API
 *
 * @author Vincent Chalnot <vchalnot@clever-age.com>
 */
interface ApiClientInterface
{
    /**
     * @param ApiRequestInterface $request
     *
     * @return object
     */
    public function query(ApiRequestInterface $request);
}
