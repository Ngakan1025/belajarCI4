<div class="container">
    <div class="row">
        <div class="col">
            <a href="/turnamen/create" class="btn btn-primary">Tambah Data Turnamen</a>
            <h1 class="mt-2">Daftar Turnamen</h1>
            <?php if (session()->getFlashdata('pesan')) : ?>
            <div class="alert alert-success" role="alert">
                <?= session()->getFlashdata('pesan'); ?>
            </div>
            <?php endif ?>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Rank</th>
                        <th scope="col">Team</th>
                        <th scope="col">Menang</th>
                        <th scope="col">Kalah</th>
                        <th scope="col">Poin</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($turnamen as $k) : ?>
                    <tr>
                        <th scope="row"><?= $i++; ?></th>
                        <td><?= $k['team']; ?></td>
                        <td><?= $k['menang']; ?></td>
                        <td><?= $k['kalah']; ?></td>
                        <td><?= $k['poin']; ?></td>
                        <td>
                            <a href="/turnamen/<?= $k['slug']; ?>" class="btn btn-success">Detail</a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <label for="total" class="ml-4">Total Data: <b><?= $total; ?></b></label>
        </div>
    </div>
</div>