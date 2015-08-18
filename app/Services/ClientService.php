<?php

namespace CodeProject\Services;

use CodeProject\Repositories\ClientRepository;

class ClientService
{
    /**
     * @var ClientRepository
     */
    protected $repository;

    /**
     * @param ClientRepository $repository
     */
    public function __construct(ClientRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * @param array $data
     * @return mixed
     */
    public function create(array $data)
    {
        return $this->repository->create($data);
    }

    /**
     * @param array $data
     * @param $id
     * @return mixed
     */
    public function update(array $data, $id)
    {
        return $this->repository->update($data, $id);
    }

}