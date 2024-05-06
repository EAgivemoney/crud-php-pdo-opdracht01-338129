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
                        <div class="col">
                            <label for="inputNameColors" class="form-label">Kies 4 basiskleuren voor uw nagels:</label>                            
                        </div>
                        <div class="col">
                            <input name="kleur1" type="color" class="form-control" id="inputNameColors">                     
                        </div>
                        <div class="col">
                            <input name="kleur2" type="color" class="form-control" id="inputNameColors">                            
                        </div>
                        <div class="col">
                            <input name="kleur3" type="color" class="form-control" id="inputNameColors">                            
                        </div>
                        <div class="col">
                            <input name="kleur4" type="color" class="form-control" id="inputNameColors">                            
                        </div>
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
                        <label class="form-label">Soort behandeling:</label>
                        <div class="form-check">
                            <input name="behandeling" type="checkbox" class="form-check-input" id="treatment1"> 
                            <label class="form-check-label" for="treatment1">Nagelbijt arrangment (termijnbetaling mogelijk) €180</div>                           
                            <input name="behandeling" type="checkbox" class="form-check-input" id="treatment2">
                            <label class="form-check-label" for="treatment2">Luxe manicure (massage en handpakking) €30,00</div>       
                            <input name="behandeling" type="checkbox" class="form-check-input" id="treatment3">
                            <label class="form-check-label" for="treatment3">Nagelreparatie per nagel (in eerste week gratis) €5,00</div>   
                        </div>
                    </div>

                        <div class="col-md-6">
                            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                <button type="submit" class="btn btn-primary me-md-4">Sla Op</button>
                                <button type="reset" class="btn btn-primary ">Reset</button>
                            </div>
                        </div>
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