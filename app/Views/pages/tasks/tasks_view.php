
<?php

    // Wenn $selectedBoard nicht gesetzt oder null ist, wird der Wert von $boards[0] verwendet.
    // Falls auch $boards[0] nicht existiert, wird null gesetzt.
    $selectedBoard = $selectedBoard ?? ($boards[0] ?? null);
?>


<div class="container mb-4 mt-4">
    <div class="card">
        <div class="card-header bg-light">
            <div class="d-flex justify-content-between">
                <span class="h3">Tasks</span>
                <!-- Board Dropdown-Button -->
                <div class="dropdown">
                <button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <?= $selectedBoard['board']?></button>
                    <ul class="dropdown-menu">
                        <?php foreach($boards as $board):?>
                        <li class="dropdown-item"><a href="<?= base_url("tasks/".$board['id'])?>"><?= $board['board']?></a></li>
                        <?php endforeach;?>
                    </ul>
                </div>
            </div>

        </div>
        <div class="card-body">

            <!-- Erstellen eines neuen Tasks -->
            <a href='<?=base_url('Tasks/ced_edit/0/0/0')?>' class="btn btn-primary mb-2">
                <i class="fas fa-edit"></i>
                Erstellen
            </a>
            <!-- Horizontales scrollen / Kollone -->

            <div class="d-flex flex-row flex-nowrap overflow-auto">
                <?php foreach($spalten as $spalte):
                        if($spalte['boardsid'] !== $selectedBoard['id']) continue;?>
                    <!-- Einzelne Taskkarte -->
                    <div class="card mb-3 me-3 customCard">
                        <div class="card-header bg-light">
                            <h3 class="card-title h5">
                                <?= $spalte['spalte']?>
                            </h3>
                            <small class=" text-muted">
                                <?= $spalte['spaltenbeschreibung']?>
                            </small>
                        </div> <!-- card header ende -->
                        <div class="card-body">
                            <!-- Abgerundeter Container für den Task Inhalt -->
                            <?php foreach($items as $task):
                                    if($task['spaltenid'] == $spalte['id']):?>
                            <div class="mb-3 border rounded p-2">
                                <!-- Erste Zeile: Titel + Dropdown -->
                                <div class="d-flex justify-content-between">
                                    <?php foreach($taskarten as $taskart): ?>
                                    <?php if($taskart['id'] == $task['taskartenid']):?>
                                    <a href="<?= base_url("tasks/ced_edit/{$task['id']}/1/{$spalte['id']}")?>"><i class="<?= $taskart['taskartenicon']?>" title="Besuch"></i> <?= $task['tasks']?></a>
                                    <?php endif;?>
                                    <?php endforeach; ?>
                                    <!--Dropdown-Menü für Aktionen -->
                                    <div class="dropdown position-static">
                                        <button class="btn p-0" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="fas fa-caret-square-down text-primary"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><h6 class="dropdown-header">Action</h6></li>
                                            <li><div class="dropdown-divider"></div></li>
                                            <li> <a class="dropdown-item" href="#"><i class="fas fa-copy text-primary"></i> Text kopieren</a></li>
                                            <li><a class="dropdown-item" href="<?= base_url("tasks/ced_edit/{$task['id']}/1/0")?>"><i class="fas fa-edit text-primary"></i> Bearbeiten</a></li>
                                            <li><a class="dropdown-item" href="<?= base_url("tasks/ced_edit/{$task['id']}/2/0")?>"><i class="fas fa-trash text-primary"></i> Löschen</a></li>
                                        </ul>
                                    </div>
                                </div>

                                <!-- Zweite Zeile: Datum & Erinnerung -->
                                <div class="d-flex justify-content-between">
                                    <p class="text-secondary"><i class="fa-regular fa-calendar fa-fw"></i> <?= $task['erinnerungsdatum']?></p>
                                    <p class="text-secondary"><i class="fa-regular fa-bell fa-fw text-danger"></i> 12.12.2025</p>
                                </div>

                                <!-- Dritte Zeile: Initialien der Verantwortlichen Person -->
                                <div class="d-flex justify-content-between">
                                    <div></div>
                                    <?php foreach ($personen as $person): ?>
                                        <?php if ($person['id'] == $task['personenid']): ?>
                                            <span class="rounded-circle text-xs personenkuerzel" title="<?= $person['name'] ?>" style="color: #FFFFFF; background: #0a58ca;">
                                             <?= substr($person['name'], 0, 2) ?>
                                            </span>
                                        <?php endif; ?>
                                    <?php endforeach; ?>

                                </div>
                            </div> <!-- Abgerundeter Container Ende -->

                            <?php   endif;
                                endforeach;?>


                            <!-- Erstellen Button -->
                            <div>
                                <a href='<?=base_url("Tasks/ced_edit/0/0/{$spalte['id']}")?>' class="btn btn-primary mt-4 mb-2 w-100">
                                    <i class="fas fa-edit"></i>
                                    Erstellen
                                </a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>