<div class="container">
    <div class="card mt-3">
        <div class="card-header">
            <div class="h5"><strong>Datensatz <?= isset($_POST['btnLoeschen']) ? ' löschen' : ' bearbeiten oder neu erstellen'?></strong></div>

        </div>


        <div class="card-body">
            <form action="<?= base_url('boards/submit_edit') ?>" method='post'>

                <div class="row mb-3">
                    <label for="board" class="col-sm-2 col-form-label">Board-Bezeichnung</label>
                    <div class="col-sm-10">
                        <input type="hidden" id="id" name="id" value="<?=isset($items['id']) ? $items['id'] : '' ?>">
                        <input
                            type="text"
                            name="board"
                            id="board"
                            class="form-control"
                            placeholder="Name des Boards"
                            value="<?= isset($items['board']) ? $items['board'] : "" ?>"
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


                    <a href=" <?= base_url('boards/')?>" class="btn btn-primary mb-2" name="btnAbbrechen" id="btnAbbrechen">
                        <i class="far fa-window-close"></i> Abbrechen
                    </a>


                </div>
            </form>
        </div>
    </div>
</div>

