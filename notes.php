<?php
require("database.php");
$result = mysqli_query($conn, "SELECT * FROM note");

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <!-- Font Awesome -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
  rel="stylesheet"
/>
<!-- Google Fonts -->
<link
  href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
  rel="stylesheet"
/>
<!-- MDB -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.css"
  rel="stylesheet"
/>
</head>
<body>
<?php require("navbar.php")?>

<?php
while($rows = mysqli_fetch_assoc($result)) :?>
<div class="row">
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title"><?= $rows['title']?></h5>
        <p class="card-text"><?= substr(htmlentities($rows['body']),0,200).'...'?></p>
        <a href="/note?id=<?= $rows['note_id'] ?>" class="btn btn-primary">Go Detail</a>
      </div>
    </div>
  </div>
</div>
<?php endwhile; ?>

<script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.js"
></script>
</body>
</html>