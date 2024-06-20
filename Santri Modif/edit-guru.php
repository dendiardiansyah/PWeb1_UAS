<?php

include ('koneksi.php');

$id = $_GET['id'];

$query = "SELECT * FROM tbl_guru WHERE nuptk = $id LIMIT 1";

$result = mysqli_query($connection, $query);

$row = mysqli_fetch_array($result);

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>Edit Guru</title>
</head>

<body>

    <div class="container" style="margin-top: 80px">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header">
                        EDIT GURU
                    </div>
                    <div class="card-body">
                        <form action="update-guru.php" method="POST">

                            <div class="form-group">
                                <label>NUPTK</label>
                                <input type="number" name="nuptk" value="<?php echo $row['nuptk'] ?>"
                                    placeholder="Masukkan NUPTK" class="form-control" readonly>
                                <input type="hidden" name="id" value="<?php echo $row['nuptk'] ?>">
                            </div>

                            <div class="form-group">
                                <label>Nama</label>
                                <input type="text" name="nama" value="<?php echo $row['nama'] ?>"
                                    placeholder="Masukkan Nama" class="form-control">
                            </div>

                            <div class="form-group">
                                <label>Golongan</label>
                                <select name="golongan" id="" class="form-control">
                                    <option value="III/A" <?php echo ($row['golongan'] == 'III/A') ? 'selected' : ''; ?>>
                                        III/A</option>
                                    <option value="III/B" <?php echo ($row['golongan'] == 'III/B') ? 'selected' : ''; ?>>
                                        III/B</option>
                                    <option value="III/C" <?php echo ($row['golongan'] == 'III/C') ? 'selected' : ''; ?>>
                                        III/C</option>
                                    <option value="III/D" <?php echo ($row['golongan'] == 'III/D') ? 'selected' : ''; ?>>
                                        III/D</option>
                                    <option value="IV/A" <?php echo ($row['golongan'] == 'IV/A') ? 'selected' : ''; ?>>
                                        IV/A
                                    </option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Jenis Kelamin</label><br>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="jenis_kelamin" <?php echo ($row['jenis_kelamin'] == 'L') ? 'checked' : '' ?> value="L">
                                    <label>Laki-laki</label><br>
                                    <input class="form-check-input" type="radio" name="jenis_kelamin" <?php echo ($row['jenis_kelamin'] == 'P') ? 'checked' : '' ?> value="P">
                                    <label>Perempuan</label>
                                </div>

                                <button type="submit" class="btn btn-success">UPDATE</button>
                                <button type="reset" class="btn btn-warning">RESET</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>

</html>