
<div class="container">
    <div class="card mt-4">
        <div class="card-header">
            <strong>Boards</strong>
        </div>
        <div class="card-body">


            <a href="<?=base_url('boards/ced_edit')?>" class="btn btn-primary mb-2">
                <i class="fas fa-edit"></i>
                Erstellen
            </a>

            <div class="table-responsive">
                <table class="table table-bordered table-striped table-hover">
                    <thead>


                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Board</th>
                        <th scope="col">Bearbeiten</th>
                    </tr>

                    </thead>
                    <tbody>
                    <?php foreach ($boards as $item):?>
                        <tr>
                            <td><?= $item['id']?></td>
                            <td><?= $item['board']?></td>
                            <td>
                                <div class="btn-group">
                                    <a href="<?=base_url('boards/ced_edit/' . $item['id'] . '/1/')?>">
                                        <button type='button' name='btnBearbeiten' id='btnBearbeiten' class='btn'><i style="color: Dodgerblue;" class="fas fa-edit"></i></button>
                                    </a>
                                    <a href="<?=base_url('boards/ced_edit/' . $item['id'] . '/2/')?>">
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
