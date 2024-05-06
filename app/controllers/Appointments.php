<?php

class Appointments extends BaseController
{
    private $appointmentModel;

    public function __construct()
    {
        $this->appointmentModel = $this->model('Appointment');
    }

    public function index()
    {
        $appointments = $this->appointmentModel->getAppointment();

        $dataRows = "";

        foreach ($appointments as $appointment) {
            $dataRows .= "<tr>
                            <td>{$appointment->Kleur1}</td>
                            <td>{$appointment->Kleur2}</td>
                            <td>{$appointment->Kleur3}</td>
                            <td>{$appointment->Kleur4}</td>
                            <td>{$appointment->Telefoon_nummer}</td>
                            <td>{$appointment->Email_adres}</td>
                            <td>{$appointment->Datum_afspraak}</td> 
                            <td>{$appointment->Behandeling}</td>       
                        </tr>";
        }

        $data = [
            'title' => 'Bling Bling Nail Studio Chantal',
            'dataRows' => $dataRows
        ];

        $this->view('appointments/index', $data);
    }

    /**
     * Creates a new country.
     *
     * This method is responsible for rendering the create view and passing the necessary data to it.
     *
     * @return void
     */
    public function create()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_FULL_SPECIAL_CHARS);

            $result = $this->appointmentModel->createAppointment($_POST);

            echo '<div class="alert alert-success" role="alert">
                    Uw gegevens zijn opgeslagen. U wordt doorgestuurd naar de index-pagina.
                  </div>';

            header("Refresh:6; url=" . URLROOT . "/appointments/index");
        }

        $data = [
            'title' => 'Nieuwe Afspraak'
        ];

        $this->view('appointment/create', $data);
    }
}