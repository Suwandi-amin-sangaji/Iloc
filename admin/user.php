<?= include "include/header.php";?>
<?= include "include/navbar.php"; ?>
<main id="main" class="main">

<div class="pagetitle">
  <h1>Data Lahan</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.php">Home</a></li>
      <li class="breadcrumb-item active">Data Lahan</li>
    </ol>
  </nav>
</div><!-- End Page Title -->

<section class="section">
  <div class="row">
    <div class="col-lg-12">

      <div class="card">
        <div class="card-body">
          <!-- Table with stripped rows -->
          <table class="table datatable">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">No Hp</th>
                <th scope="col">Password</th>
                <th scope="col">Aksi</th>
              </tr>
            </thead>
            <tbody>
            <?php
            include('../dbcon.php');
            // nama table di firebase
            $ref_table = "Users";
            $fetchdata = $database->getReference($ref_table)->getValue();

            if ($fetchdata > 0) {
                $no = 1;
                foreach ($fetchdata as $key => $row) {
            ?>
                    <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $row['nama']; ?></td>
                        <td><?= $row['nomor']; ?></td>
                        <td>
                        <div class="col-md-6">
                            <input type="password" class="form-control" id="inputPassword5" value="<?= $row['password']; ?>" readonly>
                        </div>
                        </td>
                        <!-- <td ><?= $row['password']; ?></td> -->
                        <td>
                         
                            <form action="proses.php" method="POST">
                            <a href="edit.php?id=<?= $key; ?>" class="btn btn-primary mb-1"><i class='bx bx-edit-alt'></i></a>
                                    <input type="hidden" name="id_key" value="<?= $key; ?>">
                                    <button type="button" name="hapus_data" class="btn btn-danger"><i class='bx bx-trash'></i></button>
                            </form>
                        </td>
                    </tr>
                <?php
                }
            } else {
                ?>
                <tr>
                    <td rowspan="6">Data Tidak Ditemukan</td>
                </tr>
            <?php
            }

            ?>
            </tbody>
          </table>
          <!-- End Table with stripped rows -->

        </div>
      </div>

    </div>
  </div>
</section>

</main><!-- End #main -->

<?= include "include/footer.php"?>