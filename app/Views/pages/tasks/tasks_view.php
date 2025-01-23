
<div class="container">
    <div class="card mt-4">
        <div class="card-header">
            <strong>Tasks</strong>
        </div>
        <div class="card-body">


            <a href='<?=base_url('Tasks/ced_edit/0/0')?>' class="btn btn-primary mb-2">
                <i class="fas fa-edit"></i>
                Erstellen
            </a>

            <div class="table-responsive">
                <table class="table table-bordered table-striped table-hover">
                    <thead>
                    <tr>
                        <th scope="col">Bezeichnung</th>
                        <th scope="col">Notiz</th>
                        <th scope="col">Errinerungsdatum</th>
                        <th scope="col">Bearbeiten</th>
                    </tr>
                    </thead>
                    <tbody>

                        <?php foreach ($tasks as $item): ?>
                    <tr>
                        <td><?= $item['tasks'] ?></td>
                        <td><?= $item['notizen'] ?></td>
                        <td><?= $item['erinnerungsdatum'] ?></td>
                        <td>
                            <div class="btn-group">
                                <a href="<?=base_url('/tasks/ced_edit/' . $item['id'] . '/1/')?>">
                                    <button type='button' name='btnBearbeiten' id='btnBearbeiten' class='btn'><i style="color: Dodgerblue;" class="fas fa-edit"></i></button>
                                </a>
                                <a href="<?=base_url('/tasks/ced_edit/' . $item['id'] . '/2/')?>">
                                    <button type='submit' name='btnLoeschen' id='btnLoeschen' class='btn'><i style="color: Dodgerblue;" class="fas fa-trash"></i></button>
                                </a>
                            </div>

                        </td>
                    </tr>
                    <?php endforeach; ?>

                    </tr>

                    </tbody>
                </table>
            </div>

        </div>
    </div>
</div>