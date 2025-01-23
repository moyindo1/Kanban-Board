
<div class="container">
    <div class="card mt-4">
        <div class="card-header">
            <strong>Personen</strong>
        </div>
        <div class="card-body">

            <div id="toolbar" >
                <a href="<?=base_url('/personen/ced_edit/0/0/')?>">
                    <button class="btn btn-primary mb-2" type="button" name="btnNeu" id="btnNeu">
                        <i class="fas fa-plus-square"></i> Neu</button>
                </a>
            </div>

            <div class="table-responsive">
                <table class="table table-bordered table-striped table-hover">
                    <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Vorname</th>
                        <th scope="col">Nachname</th>
                        <th scope="col">E-Mail</th>
                        <th scope="col"></th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($personen as $person): ?>
                        <tr>
                            <td><?= $person['id'] ?></td>
                            <td><?= $person['vorname'] ?></td>
                            <td><?= $person['name'] ?></td>
                            <td><?= $person['email'] ?></td>
                            <td>
                                <div class="btn-group">
                                    <a href="<?=base_url('/personen/ced_edit/' . $person['id'] . '/1/')?>">
                                        <button type='button' name='btnBearbeiten' id='btnBearbeiten' class='btn'><i style="color: Dodgerblue;" class="fas fa-edit"></i></button>
                                    </a>
                                    <a href="<?=base_url('/personen/ced_edit/' . $person['id'] . '/2/')?>">
                                        <button type='submit' name='btnLoeschen' id='btnLoeschen' class='btn'><i style="color: Dodgerblue;" class="fas fa-trash"></i></button>
                                    </a>
                                </div>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</div>