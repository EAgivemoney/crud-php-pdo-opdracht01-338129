<?php

class Appointment
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function getCountries()
    {
        try {
            $sql = 'SELECT Id
                          ,Kleur1
                          ,Kleur2
                          ,Kleur3
                          ,Kleur4
                          ,Telefoon_nummer
                          ,Email_adres
                          ,Datum_afspraak
                          ,Behandeling
                    FROM   Afspraak';

            $this->db->query($sql);

            return $this->db->resultSet();
        } catch (Exception $e) {
            echo 'Er is een fout opgetreden: ' . $e->getMessage();
        }
    }

    public function createAppointment($postArrayData) 
    {
        $sql = 'INSERT INTO Country (Name
                                    ,CapitalCity
                                    ,Continent
                                    ,Population)
                     VALUES     (:name
                                ,:capitalcity
                                ,:continent
                                ,:population)';

        $this->db->query($sql);

        $this->db->bind(':name', $postArrayData['country'], PDO::PARAM_STR);
        $this->db->bind(':capitalcity', $postArrayData['capitalCity'], PDO::PARAM_STR);
        $this->db->bind(':continent', $postArrayData['continent'], PDO::PARAM_STR);
        $this->db->bind(':population', $postArrayData['population'], PDO::PARAM_INT);

        return $this->db->execute();
    }

}