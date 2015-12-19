<?php
/*
 * This file is part of the nettob component rdw package.
 *
 * (c) Nico Borghuis <nico@nicoborghuis.nl>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Nettob\Component\Rdw\Repository;

use GuzzleHttp\Client;

/**
 * Abstract Repository.
 *
 * @author Nico Borghuis <nico@nicoborghuis.nl>
 */
abstract class AbstractRepository
{
    /**
     * @var string
     */
    protected $apiUrl;

    /**
     * @var \GuzzleHttp\Client
     */
    protected $client;

    public function __construct()
    {
        $this->client = new Client(
            array(
                'base_uri' => $this->apiUrl
            )
        );
    }

    /**
     * @param int $limit
     * @param int $offset
     *
     * @return array|null
     *
     * @throws \Exception
     */
    public function findAll($limit = 100, $offset = 0)
    {
        $query = array(
            '$limit' => $limit,
            '$offset' => $offset
        );

        return $this->find($query);
    }

    /**
     * @param string $key
     * @param string $value
     * @param string $type
     * @param int    $limit
     * @param int    $offset
     *
     * @return array|null
     *
     * @throws \Exception
     */
    public function findBy($key, $value, $limit = 100, $offset = 0)
    {
        $query = array(
            '$limit' => $limit,
            '$offset' => $offset,
            $key => $value
        );

        return $this->find($query);
    }

    /**
     * @param string $key
     * @param string $value
     * @param string $type
     * @param int    $limit
     * @param int    $offset
     *
     * @return array|null
     *
     * @throws \Exception
     */
    public function findOneBy($key, $value)
    {
        return $this->findBy($key, $value, 1, 0);
    }
}
