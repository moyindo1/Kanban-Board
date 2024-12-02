<div class="container">
    <div class="card mt-4">
        <div class="card-header">
            <strong> Spalte erstellen</strong>
        </div>
        <div class="card-body">
            <form>

                <div class="row">
                    <label class="col-sm-2" for="bezeichnung">Spalten-Bezeichnung</label>
                    <div class=" col-sm-10 ">
                        <input class="form-control" type="text" id="bezeichnung" name="bezeichnung">
                    </div>
                </div>

                <div class="row mt-3">
                    <label class="col-sm-2" for="beschreibung">Spalten-Beschreibung</label>
                    <div class=" col-sm-10 ">
                        <textarea class="form-control" id="beschreibung" name="beschreibung"></textarea>
                    </div>
                </div>

                <div class="row mt-3">
                    <label class="col-sm-2" for="id">Sortid</label>
                    <div class=" col-sm-10 ">
                        <input class="form-control" type="text" id="id" name="id">
                    </div>
                </div>

                <div class="row mt-3">
                    <label class="col-sm-2" for="auswahl">Board auswählen</label>
                    <div class="col-sm-10">
                        <select class="form-select text-center" id="auswahl" name="auswahl">
                            <option selected>Allgemeine Todos</option>
                            <option value="1">Option 1</option>
                            <option value="2">Option 2</option>
                            <option value="3">Option 3</option>
                        </select>
                    </div>
                </div>

                <div class="row mt-4 ms-0">
                    <button class="btn btn-success border col-sm-1" type="submit">Speichern</button>
                    <a class="btn btn-secondary border col-sm-1" href="/Spalten">Abbrechen</a>
                </div>

            </form>
        </div>
    </div>

</div>
