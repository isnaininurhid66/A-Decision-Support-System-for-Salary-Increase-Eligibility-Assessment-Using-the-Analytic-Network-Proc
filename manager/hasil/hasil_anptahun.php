<div class="col-12">
<div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Hasil Seleksi Berdasarkan Tahun ANP</h4>
                            </div>
                            
                            
<div class="card-body">
<div class="panel-heading">
<form class="form-inline">
    <input type="hidden" name="page" value="hasil/hasil_anptahun" />
    <div class="form-group">
        <select class="form-control" name="kode_kriteria" onchange="this.form.submit()">
        <option value="">Pilih Periode</option>
        <?= get_periode_option($_GET['id']) ?>
        </select>
    </div>
</form>
</div>
<div class="panel-body">
<?php 
    $data = get_hasilperiode($_GET['kode_kriteria']); 
    $tahun = get_tahun($_GET['kode_kriteria']); 
    if ($data):
        ?>
        <h2>Tahun <?=$tahun?></h2>
        <div class="table-responsive">
        <table class="table table-bordered table-hover table-striped">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Rank</th>
                <th>Nilai</th>
            </tr>
        </thead>
        <?php
        $no=0;
        foreach($data as $row){?>
        <tr>
                <td><?=++$no ?></td>
                <td><?=$row->nama_alternatif?></td>
                <td><?=$row->rank?></td>
                <td><?=round($row->total * 100, 2)?> %</td>
             </tr>
            
        <?php }
    ?>
     </table>
    </div>
    <?php endif?>

</div>

</div>
</div>
</div>