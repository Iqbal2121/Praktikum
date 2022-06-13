 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Blank Page</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Blank Page</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Title</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <div class="card-body">
        <!DOCTYPE html>
        <html lang="en">
            <head>
                <meta charset="utf-8">
                <meta name="viewport" content="width=device-width, initial-scale=1">
                <title>Daftar Mahasiswa</title>
                <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
                <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
            </head>
            <body>
                <div class="container mt-5 mx-auto ">
                    <h1><strong>Daftar Mahasiswa</strong></h1>
                </div>
                <div class="container mt-3 mx-auto ">
                    <div class="table-responsive">
                        <table class="table table-light table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">Nomor</th>
                                        <th scope="col">NIM</th>
                                        <th scope="col">Nama</th>
                                        <!-- <th scope="col">Prodi</th> -->
                                        <th scope="col">Ipk</th>
                                        <th scope="col">Predikat</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $nomor = 1;
                                    foreach($list_mahasiswa as $obj){
                                    ?>
                                        <tr>
                                            <th scope="row"><?= $nomor ?></th>
                                            <td><?= $obj->id ?></td>
                                            <td><?= $obj->nama ?></td>
                                            <!-- <td><?= $obj->prodi ?></td> -->
                                            <td><?= $obj->ipk ?></td>
                                            <td><?= $obj->predikat() ?></td>
                                        </tr>

                                    <?php
                                    $nomor++;
                                    }?>
                                </tbody>
                        </table>
                    </div>
                </div>
            </body>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          Footer
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
