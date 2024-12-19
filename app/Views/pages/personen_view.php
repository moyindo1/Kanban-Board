
<div class="container">
    <div class="card mt-4">
        <div class="card-header">
            <strong>Personen</strong>
        </div>
        <div class="card-body">

            <div class="table-responsive">
                <table class="table table-bordered table-striped table-hover">
                    <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Vorname</th>
                        <th scope="col">Nachname</th>
                        <th scope="col">E-Mail</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($data as $person): ?>
                        <tr>
                            <td><?= $person['id'] ?></td>
                            <td><?= $person['vorname'] ?></td>
                            <td><?= $person['name'] ?></td>
                            <td><?= $person['email'] ?></td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</div>