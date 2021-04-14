<div class="container">
    <div class="row">
        <div class="col">
            <h2 class="mt-2">Klasemen Turnamen</h2>
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title"><?= $turnamen['team']; ?></h5>
                            <p class="card-text"><b>Menang : </b> <?= $turnamen['menang']; ?></p>
                            <p class="card-text"><small class="text-muted"><b>Kalah : </b>
                                    <?= $turnamen['kalah']; ?></small></p>
                            <a href="/turnamen/edit/<?= $turnamen['slug']; ?>" class="btn btn-warning">Edit</a>

                            <form action="/turnamen/<?= $turnamen['id']; ?>" method="post" class="d-inline">
                                <?= csrf_field(); ?>
                                <input type="hidden" name="_method" value="Delete">
                                <button type="submit" class="btn btn-danger"
                                    onclick="return confirm('apakan anda yakin?');">Delete</button>
                            </form>
                            <br><br>
                            <a href="/turnamen">Kembali ke daftar turnamen</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>