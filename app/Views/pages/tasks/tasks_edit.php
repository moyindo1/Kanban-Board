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

                <input type="hidden" id="id" name="id" value="<?=isset($items['id']) ? $items['id'] : '' ?>">
                <input type="hidden" id="sortid" name="sortid" value="<?=isset($items['sortid']) ? $items['sortid'] : '100' ?>">
                <input type="hidden" id="erstelldatum" name="erstelldatum" value="<?=isset($items['erstelldatum']) ? $items['erstelldatum'] : '2025-01-14' ?>">
                <input type="hidden" id="erinnerung" name="erinnerung" value="<?=isset($items['erinnerung']) ? $items['erinnerung'] : '3' ?>">
                <input type="hidden" id="erledigt" name="erledigt" value="<?=isset($items['erledigt']) ? $items['erledigt'] : '3' ?>">
                <input type="hidden" id="geloescht" name="geloescht" value="<?=isset($items['geloescht']) ? $items['geloescht'] : '0' ?>">


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
                                    value="<?= isset($items[$field]) ? (new DateTime($items[$field]))->format('Y-m-d'): ''?>"

                            >
                        <?php elseif($field === 'notizen') :?>
                            <textarea
                                    name="<?= $field?>"
                                    id="<?= $field?>"
                                    class="form-control <?= inputClass($error, $field) ?>"
                                    placeholder="<?= $label?>"
                                    ><?= isset($items[$field]) ? $items[$field]: ''?></textarea>



                        <?php elseif($field == 'personenid'):?>
                            <select class="form-select text-center <?= inputClass($error, 'personenid') ?>" id="personenid"
                                    name="personenid">
                                <option value="">Bitte auswählen</option>
                                <?php foreach ($personen as $person) : ?>
                                    <option value="<?= $person['id'] ?>" <?= (isset($items['personenid']) && $items['personenid'] == $person['id']) ? 'selected' : '' ?>>
                                        <?= $person['vorname'].' '.$person['name']?>
                                    </option>
                                <?php endforeach; ?>
                            </select>

                        <?php else :?>
                            <input
                                    type="text"
                                    name="<?= $field?>"
                                    id="<?= $field?>"
                                    class="form-control <?= inputClass($error, $field) ?>"
                                    placeholder="<?= $label?>"
                                    value="<?= isset($items[$field]) ? $items[$field]: ''?>"

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

<script>
    document.querySelector("form").addEventListener("submit", function(event) {
        let taskInput = document.getElementById("tasks");
        let personenInput = document.getElementById("personenid");

        if (!taskInput.value.trim()) {
            taskInput.classList.add("is-invalid");
            event.preventDefault();
        }

        if (!personenInput.value) {
            personenInput.classList.add("is-invalid");
            event.preventDefault();
        }
    });

</script>
