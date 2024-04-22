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
        $appointments = $this->appointmentModel->getCountries();

        $dataRows = "";

        foreach ($appointments as $appointment) {
            $dataRows .= "<tr>
                            <td>{$appointment->Name}</td>
                            <td>{$appointment->CapitalCity}</td>
                            <td>{$appointment->Continent}</td>
                            <td>" . number_format($appointment->Population, 0, ",", ".") . "</td>            
                        </tr>";
        }

        $data = [
            'title' => 'Landen van de Wereld',
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

            header("Refresh:6; url=" . URLROOT . "/countries/index");
        }

        $data = [
            'title' => 'Nieuw land toevoegen'
        ];

        $this->view('appointment/create', $data);
    }
}