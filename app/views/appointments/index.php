<?php require_once APPROOT . '/views/includes/header.php'; ?>
    <div class="container">
        <div class="row">
            <div class="col-3"></div>
            <div class="col-6">
                <h3><?= $data['title']; ?></h3>
                <p><a href="<?= URLROOT; ?>/appointments/create">Nieuwe afspraak maken</a></p>
            </div>
            <div class="col-3"></div>
        </div>
    </div>
    <div class="row">
        <div class="col-3"></div>
        <div class="col-6">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Kleur 1</th>
                        <th>Kleur 2</th>
                        <th>Kleur 3</th>
                        <th>Kleur 4</th>
                        <th>Telefoon Nummer</th>
                        <th>Email Adres</th>
                        <th>Datum Afspraak</th>
                        <th>Soort Behandeling</th>                          
                    </tr>
                </thead>
                <tbody>
                    <?= $data['dataRows']; ?>
                </tbody>
            </table>
            <a href="<?= URLROOT; ?>/homepages/index">Homepage</a>
        </div>
        <div class="col-3"></div>
    </div>
<?php require_once APPROOT . '/views/includes/footer.php'; ?>