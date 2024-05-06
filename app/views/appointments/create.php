<?php require_once APPROOT . '/views/includes/header.php'; ?>
    <div class="container">
        <div class="row mt-3">
            <div class="col-3"></div>
            <div class="col-6">
                <h3><?= $data['title']; ?></h3>
            </div>
            <div class="col-3"></div>
        </div>

        <div class="row mt-3">
            <div class="col-3">
            </div>
            <div class="col-6">
                <form action="<?= URLROOT; ?>/appointments/create" method="post">
                    <div class="mb-3">
                        <label for="inputNameColors" class="form-label">Kies 4 basiskleuren voor uw nagels:</label>
                        <input name="kleur1" type="color" class="form-control" id="inputNameColors" placeholder="#ffc0cb"> 
                        <input name="kleur2" type="color" class="form-control" id="inputNameColors"> 
                        <input name="kleur3" type="color" class="form-control" id="inputNameColors"> 
                        <input name="kleur4" type="color" class="form-control" id="inputNameColors">
                    </div>
                    
                    <div class="mb-3">
                        <label for="inputNamePhoneNumber" class="form-label">Uw telefoonnummer:</label>
                        <input name="telefoonNummer" type="tel" class="form-control" id="inputNamePhoneNumber" placeholder="+31 6 2570 51 41">
                    </div>

                    <div class="mb-3">
                        <label for="inputNameEmail" class="form-label"> Uw e-mailadres:</label>
                        <input name="emailAdres" type="email" class="form-control" id="inputNameEmail" placeholder="randomguy@nowhere.com">
                    </div>

                    <div class="mb-3">
                        <label for="inputTimeAppointment" class="form-label">Afspraak datum:</label>
                        <input name="datumAfspraak" type="datetime-local" class="form-control" id="inputTimeAppointment">
                    </div>

                    <div class="mb-3">
                        <label for="selectTreatment" class="form-label">Soort behandeling:</label>
                        <input name="behandeling" type="checkbox" class="form-control" id="selectTreatment"> Nagelbijt arrangement (termijnbetaling mogelijk) €180
                        <input name="behandeling" type="checkbox" class="form-control" id="selectTreatment"> Luxe manicure (massage en handpakking) €30,00
                        <input name="behandeling" type="checkbox" class="form-control" id="selectTreatment"> Nagelreparatie per nagel (in eerste week gratis) €5,00
                    </div>

                    <div class="d-grid">
                        <button type="submit" class="btn btn-primary">Sla Op</button>
                        <button type="reset" class="btn btn-primary">Reset</button>
                    </div>
                </form>
            </div>
            <div class="col-3">
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-3"></div>
            <div class="col-6">
                <a href="<?= URLROOT; ?>/homepages/index">Homepage</a>
            </div>
            <div class="col-3"></div>
        </div>
    </div>
<?php require_once APPROOT . '/views/includes/footer.php'; ?>