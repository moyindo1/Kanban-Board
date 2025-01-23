<div class="container">
    <div class="card mt-3">
        <div class="card-header">
            Task erstellen
        </div>


        <div class="card-body">

            <?php
            $error = $error ?? [];
            function inputClass($error, $field){

                return isset($error[$field]) ? 'is-invalid' : '';
            }

            function displayError($error, $field){
                return isset($error[$field]) ? $error[$field] : '';
            }
            ?>
            <form action="<?= base_url('tasks/submit_edit') ?>" method="post">

                <input type="hidden" id="id" name="id" value="<?=isset($tasks['id']) ? $tasks['id'] : '' ?>">
                <input type="hidden" id="sortid" name="sortid" value="<?=isset($tasks['sortid']) ? $tasks['sortid'] : '100' ?>">
                <input type="hidden" id="erstelldatum" name="erstelldatum" value="<?=isset($tasks['erstelldatum']) ? $tasks['erstelldatum'] : '2025-01-14' ?>">
                <input type="hidden" id="erinnerung" name="erinnerung" value="<?=isset($tasks['erinnerung']) ? $tasks['erinnerung'] : '3' ?>">
                <input type="hidden" id="erledigt" name="erledigt" value="<?=isset($tasks['erledigt']) ? $tasks['erledigt'] : '3' ?>">
                <input type="hidden" id="geloescht" name="geloescht" value="<?=isset($tasks['geloescht']) ? $tasks['geloescht'] : '0' ?>">


                <?php

                $fields = [
                        'tasks' => 'Task Bezeichnung',
                        'taskartenid' => 'ID der Taskart',
                        'personenid' => 'ID der Person',
                        'spaltenid' => 'ID der Spalten',
                        'erinnerungsdatum' => 'Erinnerungsdatum',
                        'notizen' => 'Notiz',
                ];

                foreach($fields as $field => $label): ?>
                <div class="row mb-3">
                    <label for="<?= $field?>" class="col-sm-2 col-form-label"><?= $label?></label>
                    <div class="col-sm-10">
                        <?php if($field === 'erinnerungsdatum'): ?>
                            <input
                                    type="date"
                                    name="<?= $field?>"
                                    id="<?= $field?>"
                                    class="form-control  <?= inputClass($error, $field) ?> "
                                    placeholder="<?= $label?>"
                                    value="<?= isset($tasks[$field]) ? (new DateTime($tasks[$field]))->format('Y-m-d'): ''?>"

                            >
                        <?php elseif($field === 'notizen') :?>
                            <textarea
                                    name="<?= $field?>"
                                    id="<?= $field?>"
                                    class="form-control <?= inputClass($error, $field) ?>"
                                    placeholder="<?= $label?>"
                                    ><?= isset($tasks[$field]) ? $tasks[$field]: ''?></textarea>

                        <?php else :?>
                            <input
                                    type="text"
                                    name="<?= $field?>"
                                    id="<?= $field?>"
                                    class="form-control <?= inputClass($error, $field) ?>"
                                    placeholder="<?= $label?>"
                                    value="<?= isset($tasks[$field]) ? $tasks[$field]: ''?>"

                            >
                        <?php endif;?>
                        <div class="invalid-feedback">
                            <?= displayError($error, $field) ?>
                        </div>
                    </div>
                </div>

                <?php endforeach; ?>

                <div class="col-sm-8">


                    <?php if($todo == 0) : ?>
                        <button type="submit" class="btn btn-success mb-2 mr-2" name="btnSpeichern" id="btnSpeichern"><i class="far fa-plus-square"></i> Erstellen</button>
                    <?php endif ?>

                    <?php if($todo == 1) : ?>
                        <button type="submit" class="btn btn-success mb-2 mr-2" name="btnSpeichern" id="btnSpeichern"><i class="far fa-save"></i> Speichern</button>
                    <?php endif ?>

                    <?php if($todo == 2) : ?>
                        <button type="submit" class="btn btn-danger mb-2 mr-2" name="btnLoeschen" id="btnLoeschen"><i class="fas fa-trash"></i> Löschen</button>
                    <?php endif ?>


                    <a href=" <?= base_url('tasks/')?>" class="btn btn-primary mb-2" name="btnAbbrechen" id="btnAbbrechen">
                        <i class="far fa-window-close"></i> Abbrechen
                    </a>


                </div>
            </form>
        </div>
    </div>
</div>
