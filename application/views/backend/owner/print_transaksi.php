<head>
    <!-- Bootstrap -->
    <link href="<?= base_url('assets/backend/'); ?>vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
<!-- Datatables -->
    <link href="<?= base_url('assets/backend/'); ?>vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url('assets/backend/'); ?>vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url('assets/backend/'); ?>vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url('assets/backend/'); ?>vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url('assets/backend/'); ?>vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">

    <script src="<?= base_url('assets/backend/'); ?>vendors/jquery/dist/jquery-3.3.1.js"></script>

    <link href="<?= base_url('assets/css/'); ?>morris.css" rel="stylesheet">
    <!-- Custom Theme Style -->
    <!--<link href="<?= base_url('assets/backend/'); ?>build/css/custom.min.css" rel="stylesheet">-->
    <link href="<?= base_url('assets/backend/'); ?>build/css/jquery-ui.css" rel="stylesheet">
</head>

<div class="clearfix"></div>
<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="container">
                <h4> <?php echo $title ?></h4>
                <h5> <?php echo $subtitle ?></h5>
                <hr>
                <br>

                <table id="order_data" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nomor Nota</th>
                                        <th>Status</th>
                                        <th>Nama Pelanggan</th>
                                        <th>Paket</th>
                                        <th>Jenis Barang</th>
                                        <th>Tanggal Selesai</th>
                                        <th>Pembayaran</th>
                                        <th>Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php  
                                $no=1; 
                                $saldo = 0;

                                foreach($transaksi as $data) :
                                ?>

                                        <tr>
                                            <td><?= $no++ ;?></td>
                                            <td><?= $data->no_nota ?></td>
                                            <td><?= $data->status ?></td>
                                            <td><?= $data->nama ?></td>
                                            <td><?= $data->nama_paket ?></td>
                                            <td><?= $data->nama_barang ?></td>
                                            <td><?= $data->tgl_selesai ?></td>
                                            <td><?= $data->Pembayaran ?></td>
                                            <td>Rp. <?= number_format($data->total);?></td>
                                    </tr>
                                <?php 
                                $saldo += $data->total;
                            endforeach ;?>
                                </tbody>
                                <tr>
                                    <th colspan="4"><center><h2>Total</h2></center></th>

                                    <td colspan="2"><b><h2>Rp.<?= number_format($saldo) ;?></h2></b></td>
                                </tr>
                            </table>
            </div>  
        </div>
    </div>
    <script>
    window.print();
</script>