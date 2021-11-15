<div class="right_col" role="main">
    <h1 align="center" class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
    <div class="judul" data-judul="<?= $title; ?>"></div>
    <div class="flash-data" data-flashdata="<?= $this->session->flashdata('message'); ?>"></div>
    <?= form_error('menu', '<div class="alert alert-danger" role="alert">', '</div>'); ?>

    <!-- <?= $this->session->flashdata('message'); ?> -->


    <div class="col-md-6 col-sm-6 col-xs-12">
        <div class="x_panel">
            <h2>Laporan Berdasarkan Tanggal</h2>
                <div class="x_title"></div>
                    <form class="form-horizontal" action="<?= base_url('owner/filtertransaksi') ;?>" method="POST" target='_blank'>
                        <input type="hidden" name="nilaifilter" value="1">
                        <div class="x_content">
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Tanggal Awal</label>
                                <div class="col-sm-8">
                                    <input type="date" class="form-control" name="tanggalawal" required>
                                </div>
                            </div>
                        </div>
                        <div class="x_content">
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Tanggal Akhir</label>
                                <div class="col-sm-8">
                                    <input type="date" class="form-control" name="tanggalakhir" required>
                                </div>
                            </div>
                        </div>
                        <input type="submit" value="Print" class="btn btn-info form-control" />
                    </form>
        </div>
    </div>

    <div class="col-md-6 col-sm-6 col-xs-12">
        <div class="x_panel">
            <h2>Laporan Berdasarkan Tahun</h2>
                <div class="x_title"></div>
                    <form class="form-horizontal" action="<?= base_url('owner/filtertransaksi') ;?>" method="POST" target='_blank'>
                        <input type="hidden" name="nilaifilter" value="3">
                        <div class="x_content">
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Pilih Tahun</label>
                                <div class="col-sm-4">
                                    <select name="tahun2" class="form-control show-tick" required="">
                                    <?php foreach ($tahun as $data): ?>
                                        <option value="">--Pilih Tahun--</option>
                                        <option value="<?php echo $data->tahun ?>"><?php echo $data->tahun ?></option>
                                        
                                    <?php endforeach ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <input type="submit" value="Print" class="btn btn-warning form-control" />
                    </form>
        </div>
    </div>

    <div class="col-md">
        <div class="x_panel">
            <h2>Laporan Berdasarkan Bulan</h2>
                <div class="x_title"></div>
                    <form class="form-horizontal" action="<?= base_url('owner/filtertransaksi') ;?>" method="POST" target='_blank'>
                        <input type="hidden" name="nilaifilter" value="2">
                        <div class="x_content">
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Pilih Tahun</label>
                                <div class="col-sm-4">
                                    <select name="tahun1" class="form-control show-tick" required="">
                                    <?php foreach ($tahun as $data): ?>
                                        <option value="">--Pilih Tahun--</option>
                                        <option value="<?php echo $data->tahun ?>"><?php echo $data->tahun ?></option>
                                        
                                    <?php endforeach ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="x_content">
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Bulan Awal</label>
                                <div class="col-sm-6">
                                    <select name="bulanawal" class="form-control show-tick" required="">
                                        <option value="">--Pilih Bulan--</option>
                                        <option value="1">Januari</option>
                                        <option value="2">Februari</option>
                                        <option value="3">Maret</option>
                                        <option value="4">April</option>
                                        <option value="5">Mei</option>
                                        <option value="6">Juni</option>
                                        <option value="7">Juli</option>
                                        <option value="8">Agustus</option>
                                        <option value="9">September</option>
                                        <option value="10">Oktober</option>
                                        <option value="11">November</option>
                                        <option value="12">Desember</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="x_content">
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Bulan Akhir</label>
                                <div class="col-sm-6">
                                    <select name="bulanakhir" class="form-control show-tick" required="">
                                        <option value="">--Pilih Bulan--</option>
                                        <option value="1">Januari</option>
                                        <option value="2">Februari</option>
                                        <option value="3">Maret</option>
                                        <option value="4">April</option>
                                        <option value="5">Mei</option>
                                        <option value="6">Juni</option>
                                        <option value="7">Juli</option>
                                        <option value="8">Agustus</option>
                                        <option value="9">September</option>
                                        <option value="10">Oktober</option>
                                        <option value="11">November</option>
                                        <option value="12">Desember</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <input type="submit" value="Print" class="btn btn-success form-control" />
                    </form>
        </div>
    </div>
</div>