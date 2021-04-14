<div class="container">
    <div class="row">
        <div class="col-8">
            <h2 class="mt-3">Form Tambah Data Turnamen</h2>
            <form action="/turnamen/save" method="post">
                <?= csrf_field(); ?>
                <div class="row mb-3">
                    <label for="team" class="col-sm-2 col-form-label">Team</label>
                    <div class="col-sm-10">
                        <input type="text"
                            class="form-control <?= ($validation->hasError('team')) ? 'is-invalid' : ''; ?>" id="team"
                            name="team" autofocus value="<?= old('team'); ?>">
                        <div id="validationServer03Feedback" class="invalid-feedback">
                            <?= $validation->getError('team'); ?>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="menang" class="col-sm-2 col-form-label">Menang</label>
                    <div class="col-sm-10">
                        <input type="num" class="form-control" id="menang" name="menang" value="<?= old('menang'); ?>">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="kalah" class="col-sm-2 col-form-label">Kalah</label>
                    <div class="col-sm-10">
                        <input type="num" class="form-control" id="kalah" name="kalah" value="<?= old('kalah'); ?>">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="poin" class="col-sm-2 col-form-label">Poin</label>
                    <div class="col-sm-10">
                        <input type="num" class="form-control" id="poin" name="poin" value="<?= old('poin'); ?>">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Tambah Data</button>
            </form>
        </div>
    </div>
</div>