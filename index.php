<?php
include"config.php";
$query ="SELECT * FROM `tb_note`";
$sql=mysqli_query($conn,$query);

$no=0;
// var_dump($result);
// die();

?>
<!doctype html>
<html lang="en">
    <head>
       <meta charset="utf-8">
       <meta name="viewport" content="width=device-width, initial-scale=1">
       <title>WEB BOOK</title>
       <!-- LINK CSS BOOSTRAP -->
       <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
          <h3 class="text-warning">
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-journals" viewBox="0 0 16 16">
              <path d="M5 0h8a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2 2 2 0 0 1-2 2H3a2 2 0 0 1-2-2h1a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1H1a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v9a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H5a1 1 0 0 0-1 1H3a2 2 0 0 1 2-2z"/>
              <path d="M1 6v-.5a.5.5 0 0 1 1 0V6h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0V9h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 2.5v.5H.5a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1H2v-.5a.5.5 0 0 0-1 0z"/>
                </svg>
              Buku Harian
            </h3>
        </div>
        <div class="container">
        <a href="tambahkan.php" class="btn btn-success text-white mt-3" type="submit">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-plus-fill" viewBox="0 0 16 16">
         <path d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0M9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1M8.5 7v1.5H10a.5.5 0 0 1 0 1H8.5V11a.5.5 0 0 1-1 0V9.5H6a.5.5 0 0 1 0-1h1.5V7a.5.5 0 0 1 1 0"/>
        </svg>
        Tambahkan
        </a>
        </div>
    <?php
    while ($result=mysqli_fetch_assoc($sql)) {         
    ?>
    <div class="container">
      <div class="card mt-5 bg-warning">
        <h5 class="card-header text-white"><?php echo ++$no ?></h5>
        <div class="card-body">
          <h5 class="card-title"><?php echo $result['title_note'];?></h5>
            <p class="card-text"><?php echo $result['note_note'];?></p>
            <a href="update.php?edit=<?php echo $result['id_note']?>" class="btn btn-info">EDIT</a>
            <a href="delete.php?delete=<?php echo $result['id_note']?>" class="btn btn-danger">Hapus</a>
          </div>
      </div>
    </div>
    <?php
    }
    ?>
   <!-- link js boostrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>