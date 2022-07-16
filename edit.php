<?php
session_start();
include "include/header.php"
?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card mt-4">
                <div class="card-header">
                    <h3>Edit Dan Update Data Firebase php Crud
                        <a href="index.php" class="btn btn-danger float-end">Cancel</a>
                    </h3>
                </div>  
                <div class="card-body">
                    <div class="row justify-content-center">
                        <div class="col-md 6">
                            <?php
                            include "dbcon.php";
                            $id = $_GET['id'];
                            $ref_table = "Data Lahan";
                            $editdata = $database->getReference($ref_table)->getChild($id)->getValue();
                            ?>
                            <form action="proses.php" method="post">
                                <input type="hidden" name="id" value="<?= $id; ?>">
                                <div class="form-group mb-3">
                                    <input type="text" name="catagori_lahan" class="form-control" value="<?= $editdata['Catagori_Lahan']; ?>" placeholder="Category">
                                </div>
                                <div class="form-group mb-3">
                                    <input type="text" name="deskripsi" class="form-control" value="<?= $editdata['Deskripsi']; ?>" placeholder="Deskripsi">
                                </div>
                                <div class="form-group mb-3">
                                    <input type="text" name="Image" class="form-control" value="<?= $editdata['Image']; ?>" placeholder="Image">
                                </div>
                                <div class="form-group mb-3">
                                    <input type="text" name="kordinat" class="form-control" value="<?= $editdata['Kordinat']; ?>" placeholder="Kordinat">
                                </div>
                                <div class="form-group mb-3">
                                    <input type="text" name="lokasi" class="form-control" value="<?= $editdata['Lokasi']; ?>" placeholder="Lokasi">
                                </div>
                                <div class="form-group mb-3">
                                    <input type="text" name="pemilik_lahan" class="form-control" value="<?= $editdata['Pemilik_Lahan']; ?>" placeholder="Category">
                                </div>
                                <div class="form-group mb-3">
                                    <input type="date" name="tanggal" class="form-control" value="<?= $editdata['Tanggal']; ?>" placeholder="Tanggal">
                                </div>
                                <div class="form-group mb-3">
                                    <input type="text" name="waktu" class="form-control" value="<?= $editdata['Waktu']; ?>" placeholder="waktu">
                                </div>
                                <div class="form-group mb-3">
                                    <button type="submit" name="update_data" class="btn btn-primary float-end"> Update</button>
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