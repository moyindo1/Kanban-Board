<div class="container">
    <div class="card mt-4">
        <div class="card-header">
            <div class="h5"><strong>Datensatz <?= ($todo == 2) ? ' löschen' : ' bearbeiten oder neu erstellen'?></strong></div>
        </div>
        <div class="card-body">


            <?php
            $error = $error ?? [];
            function inputClass($error, $field)
            {
                return isset($error[$field]) ? 'is-invalid' : '';
            }

            function displayError($error, $field)
            {
                return isset($error[$field]) ? $error[$field] : '';
            }
            ?>


            <?php

            $readonly = ($todo == 2) ? 'readonly' : '';

            ?>

            <form action="<?= base_url('spalten/submit_edit') ?>" method='post'>
                <input type="hidden" id="id" name="id" value="<?= isset($spalten['id'])? $spalten['id'] : '' ?>">

                <!-- Form Group -->
                <?php
                $fields = [
                    'spalte' => 'Spalten-Bezeichnung',
                    'spaltenbeschreibung' => 'Spalten-Beschreibung',
                    'sortid' => 'Sortid',
                ];
                foreach ($fields as $field => $label) : ?>
                    <div class="row mt-3">
                        <label class="col-sm-2" for="<?= $field ?>"><?= $label ?></label>
                        <div class="col-sm-10">
                            <?php if ($field === 'spaltenbeschreibung') : ?>
                                <textarea
                                        class="form-control <?= inputClass($error, $field) ?>"
                                        id="<?= $field ?>"
                                        name="<?= $field ?>" <?= $readonly ?>><?= esc($spalten[$field] ?? '') ?></textarea>
                            <?php else : ?>
                                <input
                                        class="form-control <?= inputClass($error, $field) ?>"
                                        type="text"
                                        id="<?= $field ?>"
                                        name="<?= $field ?>"
                                        value="<?= esc($spalten[$field] ?? '') ?>" <?= $readonly ?>>
                            <?php endif; ?>
                            <div class="invalid-feedback">
                                <?= displayError($error, $field) ?>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>


                <!-- Select Field -->
                <div class="row mt-3">
                    <label class="col-sm-2" for="boardsid">Board auswählen</label>
                    <div class="col-sm-10">
                        <select class="form-select text-center <?= inputClass($error, 'boardsid') ?>" id="boardsid"
                                name="boardsid" <?= $readonly ?>>
                            <option value="">Bitte auswählen</option>
                            <?php for ($i = 1; $i <= 3; $i++) : ?>
                                <option value="<?= $i ?>" <?= (isset($spalten['boardsid']) && $spalten['boardsid'] == $i) ? 'selected' : '' ?>>Option <?= $i ?></option>
                            <?php endfor; ?>
                        </select>
                        <div class="invalid-feedback"><?= displayError($error, 'boardsid') ?></div>
                    </div>
                </div>



                <div class="col-sm-8 mt-5">


                    <?php if($todo == 0) : ?>
                        <button type="submit" class="btn btn-success mb-2 mr-2" name="btnSpeichern" id="btnSpeichern"><i class="far fa-plus-square"></i> Erstellen</button>
                    <?php endif ?>

                    <?php if($todo == 1) : ?>
                        <button type="submit" class="btn btn-success mb-2 mr-2" name="btnSpeichern" id="btnSpeichern"><i class="far fa-save"></i> Speichern</button>
                    <?php endif ?>

                    <?php if($todo == 2) : ?>
                        <button type="submit" class="btn btn-danger mb-2 mr-2" name="btnLoeschen" id="btnbtnLoeschen"><i class="fas fa-trash"></i> Löschen</button>
                    <?php endif ?>


                    <a href=" <?= base_url('spalten/')?>" class="btn btn-primary mb-2" name="btnAbbrechen" id="btnAbbrechen">
                        <i class="far fa-window-close"></i> Abbrechen
                    </a>


                </div>

            </form>
        </div>
    </div>

</div>
