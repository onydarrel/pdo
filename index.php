<?php include "database.php"; ?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <title>CRUD PDO</title>
  <style>
    @import "assets/css/font.css";

    body {
      font-family: 'Poppins', sans-serif;
    }

    .container {
      width: 100%;
      padding-right: 5px;
      padding-left: 5px;
      margin-right: auto;
      margin-left: auto;
    }
  </style>
</head>

<body class="bg-light">
  <div class="container">
    <div class="py-5 text-center">
      <img class="d-block mx-auto mb-4 rounded-circle" src="assets/img/ony_logo_2.png" alt="" width="72" height="72">
      <h2>CRUD dengan PDO</h2>
      <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis facere voluptatem voluptates eligendi ut mollitia ad. Vel minima quibusdam architecto!</p>
    </div>

    <div class="container">
      <form action="input.php" method="POST">
        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="firstName">Nama</label>
            <input type="text" name="nama" class="form-control" placeholder="nama" required>
            <div class="invalid-feedback">Valid Nama is required.</div>
          </div>
          <div class="col-md-6 mb-3">
            <label for="lastName">Alamat</label>
            <input type="text" name="alamat" class="form-control" placeholder="alamat" required>
            <div class="invalid-feedback">Valid Alamat is required.</div>
          </div>
          <div class="col-md-6 mb-3">
            <button class="btn btn-primary btn-sm" type="submit">Kirim
              <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-arrow-down-circle" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                <path fill-rule="evenodd" d="M4.646 7.646a.5.5 0 0 1 .708 0L8 10.293l2.646-2.647a.5.5 0 0 1 .708.708l-3 3a.5.5 0 0 1-.708 0l-3-3a.5.5 0 0 1 0-.708z" />
                <path fill-rule="evenodd" d="M8 4.5a.5.5 0 0 1 .5.5v5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5z" />
              </svg>
            </button>
          </div>
        </div>
      </form>

      <table class="table table-bordered table-hover table-sm mt-3">
        <tr class="table-active text-center">
          <th>No.</th>
          <th>Nama</th>
          <th>Alamat</th>
          <th colspan="2">Opsi</th>
        </tr>

        <?php
        $query = "SELECT * FROM orang";
        $data = $konek->prepare($query);
        $data->execute();
        $no = 1;
        while ($orang = $data->fetch(PDO::FETCH_OBJ)) {
        ?>

          <tr>
            <td class="text-center" style="width: 5%;"><?php echo $no++; ?></td>
            <td><?php echo $orang->nama; ?></td>
            <td><?php echo $orang->alamat; ?></td>
            <td class="text-center" style="width: 5%;">
              <div class="btn-group btn-group-sm" role="group">
                <button type="button" class="btn"><a href="edit_form.php?id=<?php echo $orang->id; ?>">
                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-pencil-square" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                      <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456l-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                      <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                    </svg>
                  </a></button>

              </div>
            </td>
            <td class="text-center" style="width: 5%;">
              <button type="button" class="btn"><a href="hapus.php?id=<?php echo $orang->id; ?>">
                  <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-trash" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z" />
                    <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z" />
                  </svg>
                </a></button>
            </td>
          </tr>
        <?php } ?>
      </table>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>