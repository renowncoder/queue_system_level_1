<?php

/**
 * This class is responsible for all client interactions of the
 * application.
 */
class Client extends Dbh
{
    /**
     * This function is responsible for getting all of the
     * clients from clients table.
     */
    protected function getAllClients()
    {
        $sql = 'SELECT * FROM clients ORDER BY 1 ASC LIMIT 0,1';
        $result = $this->connect()->query($sql);
        $numRows = $result->num_rows;
        if ($numRows > 0) {
            while ($row = $result->fetch_assoc()) {
                $data[] = $row;
            }

            return $data;
        }
    }

    /**
     * This function is responsible for getting the count of the
     * clients from clients table.
     */
    protected function getAllClientCount()
    {
        $sql = 'SELECT * FROM clients';
        $result = $this->connect()->query($sql);
        $numRows = $result->num_rows;
        echo $numRows;
    }
}
