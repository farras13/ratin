
<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
            <h2>Antrian C</h2>
            <div class="scrollable">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">No Antrian</th>
                            <th scope="col">Tanggal</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($antrianc as $an){?>
                            <tr>
                                <td><?= $an['no_antric']?></td>
                                <td><?= $an['tanggal']?></td>
                                <td>
                                    <a href=""
                                    class="badge badge-primary fas fa-info-circle ml-2 mr-2">Panggil</a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="col-md-6">
            <a class="tombolreset" href="<?php echo base_url(); ?>antric/reset_noc/">Reset</a>                
        </div>
    </div>
</div>