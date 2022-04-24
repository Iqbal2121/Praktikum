<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Praktikum Web 2</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    </head>

    <body>
        <br>
        <br>
    <div class="container">
        <div class="row">
            <div class="col-sm-8">
                <h3>Belanja Online <hr/></h3>
                <form method="POST" action="">
                    <div class="form-group row">
                        <label for="customer" class="col-4 col-form-label">Nama Pembeli</label> 
                        <div class="col-8">
                        <div class="input-group">
                            <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fa fa-address-card"></i>
                            </div>
                            </div> 
                            <input id="customer" name="customer" placeholder="Nama Lengkap" type="text" class="form-control">
                        </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-4">Pilihan Produk</label> 
                        <div class="col-8">
                        <div class="custom-control custom-radio custom-control-inline">
                            <input name="produk" id="produk_0" type="radio" class="custom-control-input" value="4399000"> 
                            <label for="produk_0" class="custom-control-label">TV</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input name="produk" id="produk_1" type="radio" class="custom-control-input" value="12450000"> 
                            <label for="produk_1" class="custom-control-label">Air Cooler</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input name="produk" id="produk_2" type="radio" class="custom-control-input" value="34500000"> 
                            <label for="produk_2" class="custom-control-label">Laptop</label>
                        </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="sum_produk" class="col-4 col-form-label">Jumlah Produk</label> 
                        <div class="col-8">
                        <input id="sum_produk" name="jumlah" placeholder="Jumlah" type="number" class="form-control">
                        </div>
                    </div> 
                    <div class="form-group row">
                        <div class="offset-4 col-8">
                        <button name="submit" type="submit" class="btn btn-primary" name="proses">Kirim</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-sm-4">
                <div class="table-responsive" id="sailorTableArea">
                    <table id="sailorTable" class="table table-striped table-bordered" width="100%">
                            <tr>
                                <td>
                                    Daftar Harga
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Televisi    : Rp4.399.000
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Air Cooler  : Rp12.450.000
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Laptop  : Rp34.500.000
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Harga dapat berubah setiap saat!!!
                                </td>
                            </tr>
                    </table>
            </div>
        </div>
    </div>
    <hr>
    <br>
    <?php
        // $proses = $_POST['proses'];
        $customer = $_POST['customer'];
        $produk = $_POST['produk'];
        $jumlah = $_POST['jumlah'];
        $TotalSemua = $_POST['jumlah']*$_POST['produk'];


        echo 'Nama Customer : '.$customer;
        
        echo '<br>Produk Pilihan : '.$produk;
        
        echo '<br>Jumlah Pembelian : '.$jumlah;
        
        echo '<br>Total Belanja : '.$TotalSemua;

    ?>

</html>
