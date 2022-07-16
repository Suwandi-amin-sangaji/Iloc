<?php
session_start();
include "include/header.php"
?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card mt-4">
                <div class="card-header">
                    <h3>Input Data Firebase php Crud
                        <a href="index.php" class="btn btn-danger float-end">Cancel</a>
                    </h3>
                </div>
                <?php
                if (isset($_SESSION['status']) && $_SESSION['status'] != '') {
                ?>
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>mantap</strong> <?php echo $_SESSION['status']; ?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                <?php
                    unset($_SESSION['status']);
                }
                ?>
                <div class="card-body">
                    <div class="row justify-content-center">
                        <div class="col-md 6">
                            <form action="proses.php" method="post">
                           
                                <div class="form-group mb-3">
                                    <input type="text" name="categori_lahan" class="form-control"  placeholder="Category">
                                </div>
                                <div class="form-group mb-3">
                                    <input type="text" name="deskripsi" class="form-control" placeholder="Deskripsi">
                                </div>
                                <div class="form-group mb-3">
                                    <input type="file" name="Image" class="form-control" placeholder="Image">
                                </div>
                                <div class="form-group mb-3">
                                    <input type="text" name="kordinat" class="form-control" placeholder="Kordinat">
                                </div>
                                <div class="form-group mb-3">
                                    <input type="text" name="lokasi" class="form-control" placeholder="Lokasi">
                                </div>
                                <div class="form-group mb-3">
                                    <input type="text" name="pemilik_lahan" class="form-control"  placeholder="nama pemilik">
                                </div>
                                <div class="form-group mb-3">
                                    <input type="date" name="tanggal" class="form-control"  placeholder="Tanggal">
                                </div>
                                <div class="form-group mb-3">
                                    <input type="time" name="waktu" class="form-control"  placeholder="waktu">
                                </div>
                                <div class="form-group mb-3">
                                    <button type="submit" name="submit" class="btn btn-primary float-end"> Simpan</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include "include/footer.php" ?>