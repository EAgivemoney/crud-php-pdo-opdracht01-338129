<?php

class Appointment
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function getAppointment()
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
        $sql = 'INSERT INTO Afspraak (Kleur1
                                    ,Kleur2
                                    ,Kleur3
                                    ,Kleur4
                                    ,Telefoon_nummer
                                    ,Email_adres
                                    ,Datum_afspraak
                                    ,Behandeling)
                     VALUES     (:kleur1
                                ,:kleur2
                                ,:kleur3
                                ,:kleur4
                                ,:telefoonnummer
                                ,:emailadres
                                ,:datumafspraak
                                ,:behandeling)';

        $this->db->query($sql);

        $this->db->bind(':kleur1', $postArrayData['country'], PDO::PARAM_STR);
        $this->db->bind(':kleur2', $postArrayData['country'], PDO::PARAM_STR);
        $this->db->bind(':kleur3', $postArrayData['country'], PDO::PARAM_STR);
        $this->db->bind(':kleur4', $postArrayData['country'], PDO::PARAM_STR);
        $this->db->bind(':telefoonnummer', $postArrayData['country'], PDO::PARAM_STR);
        $this->db->bind(':emailadres', $postArrayData['capitalCity'], PDO::PARAM_STR);
        $this->db->bind(':datumafspraak', $postArrayData['continent'], PDO::PARAM_STR);
        $this->db->bind(':behandeling', $postArrayData['population'], PDO::PARAM_INT);

        return $this->db->execute();
    }

}