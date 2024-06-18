<?php
include 'function.php';
// Your PHP code here.

// Home Page template below.
?>

<?=template_header('Home')?>

<!DOCTYPE html>
<html>
<head>
  <title>Website CRUD Saya</title>
  <style>
    body {
      font-family: 'Poppins', sans-serif; /* Font modern */
      margin: 0;
      background-color: #f0f5f9; /* Warna latar belakang lembut */
    }

    .hero {
      text-align: center;
      padding: 100px 0;
      background-image: url('path/to/your/background.jpg'); /* Ganti dengan path foto latar belakang */
      background-size: cover;
      color: white; /* Warna teks agar terlihat di atas latar belakang */
    }

    h1 {
      font-size: 3em;
      margin-bottom: 20px;
	  color: #333333;
    }

    .profile-photo {
      width: 150px;
      height: 150px;
      border-radius: 50%;
      object-fit: cover;
      margin-bottom: 10px;
    }

	span {
		font-size: 1em;
      	margin-bottom: 20px;
		color: #FF8826;
	}
  </style>
</head>
<body>
  <section class="hero">
    <h1>WELLCOME ADMIN PERPUSTAKAAN</h1>
    <p>Nama Saya</p>
  </section>
  <br/>
  <br/>
  <br/>
  <br/>
  <br/>
  <br/>
</body>
</html>


<?=template_footer()?>