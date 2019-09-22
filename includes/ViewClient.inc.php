<?php

/**
 * This class is responsible for viewing functionality of the
 * Client class.
 */
class ViewClient extends Client
{
    /**
     * This function is responsible for showing all of the
     * clients from clients table.
     */
    public function showAllClients()
    {
        $datas = $this->getAllClients();
        foreach ($datas as $data) {
            echo $data['name'];
        }
    }

    /**
     * This function is responsible for showing number of the
     * clients from clients table.
     */
    public function showAllClientCount()
    {
        $client_number = $this->getAllClientCount();
    }
}
