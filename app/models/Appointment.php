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
                    FROM   Afspraak
                    ORDER BY Datum_afspraak DESC';

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

        $this->db->bind(':kleur1', $postArrayData['kleur1'], PDO::PARAM_STR);
        $this->db->bind(':kleur2', $postArrayData['kleur2'], PDO::PARAM_STR);
        $this->db->bind(':kleur3', $postArrayData['kleur3'], PDO::PARAM_STR);
        $this->db->bind(':kleur4', $postArrayData['kleur4'], PDO::PARAM_STR);
        $this->db->bind(':telefoonnummer', $postArrayData['telefoonNummer'], PDO::PARAM_STR);
        $this->db->bind(':emailadres', $postArrayData['emailAdres'], PDO::PARAM_STR);
        $this->db->bind(':datumafspraak', $postArrayData['datumAfspraak'], PDO::PARAM_STR);
        $this->db->bind(':behandeling', $postArrayData['behandeling'], PDO::PARAM_STR);

        return $this->db->execute();
    }

}