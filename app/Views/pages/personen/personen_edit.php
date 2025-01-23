<div class="container">
    <div class="card mt-3">
        <div class="card-header">
            <div class="h5"><strong>Datensatz <?= isset($_POST['btnLoeschen']) ? ' löschen' : ' bearbeiten oder neu erstellen'?></strong></div>

        </div>


        <div class="card-body">
            <form action="<?= base_url('personen/submit_edit') ?>" method='post'>

                <div class="row mb-3">
                    <label for="vorname" class="col-sm-2 col-form-label">Vorname</label>
                    <div class="col-sm-10">
                        <input type="hidden" id="id" name="id" value="<?=isset($personen['id']) ? $personen['id'] : '' ?>">
                        <input
                            type="text"
                            name="vorname"
                            id="vorname"
                            class="form-control"
                            placeholder="Max"
                            required
                        >
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="name" class="col-sm-2 col-form-label">Nachname</label>
                    <div class="col-sm-10">
                        <input
                            type="text"
                            name="name"
                            id="name"
                            class="form-control"
                            placeholder="Mustermann"
                            required
                        >
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="email" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                        <input
                            type="text"
                            name="email"
                            id="email"
                            class="form-control"
                            placeholder="max-mustermann@web.de"
                            required
                        >
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="password" class="col-sm-2 col-form-label">Passwort</label>
                    <div class="col-sm-10">
                        <input
                            type="password"
                            name="password"
                            id="password"
                            class="form-control"
                            placeholder=""
                            required
                        >
                    </div>
                </div>

                <div class="col-sm-8">


                    <?php if($todo == 0) : ?>
                        <button type="submit" class="btn btn-success mb-2 mr-2" name="btnSpeichern" id="btnSpeichern"><i class="far fa-plus-square"></i> Erstellen</button>
                    <?php endif ?>

                    <?php if($todo == 1) : ?>
                        <button type="submit" class="btn btn-success mb-2 mr-2" name="btnSpeichern" id="btnSpeichern"><i class="far fa-save"></i> Speichern</button>
                    <?php endif ?>

                    <?php if($todo == 2) : ?>
                        <button type="submit" class="btn btn-danger mb-2 mr-2" name="btnLoeschen" id="btnbtnLoeschen"><i class="fas fa-trash"></i> Löschen</button>
                    <?php endif ?>


                    <a href=" <?= base_url('personen/')?>" class="btn btn-primary mb-2" name="btnAbbrechen" id="btnAbbrechen">
                        <i class="far fa-window-close"></i> Abbrechen
                    </a>


                </div>
            </form>
        </div>
    </div>
</div>
