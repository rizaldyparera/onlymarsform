<?php include 'sendemail.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OnlyMARS Form</title>
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<div class="main">
    <!--SURVEY FORM-->
    <!--HEADING-->
    <div class="section-title">
        <h1 class="heading">OnlyMARS Form</h1>
    </div>
    <div class="container">
        <a href="../" class="back-btn">Kembali  <i class='bx bx-arrow-back'></i></a>
        <select id="cd-dropdown" class="cd-select" onchange="javascript:handleSelect(this)">
            <option disable selected>IND</option>
            <option value="index">ENG</option>
        </select>
    </div>
    <!--FORM-->
     <!--alert messages start-->
     <?php echo $alert; ?>
    <!--alert messages end-->
    <div class="surveyform">
            <form action="" method="POST" class="form">
                <label for="name">Nama Lengkap</label>
                <input type="text" id="name" name="name" placeholder="Nama Lengkap">
                <label for="email">Email</label>
                <input type="text" id="email" name="email" placeholder="example@gmail.com">
                <label for="fwebsite">Darimana anda mengetahui website ini ?</label>
                <select name="fwebsite" id="fwebsite">
                    <option value="instagram">Instagram</option>
                    <option value="facebook">Facebook</option>
                    <option value="facebook">Iklan</option>
                    <option value="facebook">Mesin Pencari</option>
                    <option value="facebook">Yang Lain</option>
                </select>
                <label for="browser">Browser apa yang sedang anda gunakan ?</label>
                <select name="browser" id="browser">
                    <option value="chrome">Chrome</option>
                    <option value="firefox">Mozila Firefox</option>
                    <option value="edge">IE</option>
                    <option value="opera">Opera</option>
                    <option value="safari">Safari</option>
                </select>
                <label for="device">Perangkat apa yang anda gunakan untuk mengakses website ini ?</label>
                <select name="device" id="device">
                    <option value="laptop">Laptop</option>
                    <option value="ipad">Ipad</option>
                    <option value="mobile">Mobile</option>
                </select>
                <label for="rate">Berikan nilai untuk website ini</label>
                <span class="rate">
                    <input type="radio" id="star5" name="rate" value="5" />
                    <label for="star5" title="text">5 stars</label>
                    <input type="radio" id="star4" name="rate" value="4" />
                    <label for="star4" title="text">4 stars</label>
                    <input type="radio" id="star3" name="rate" value="3" />
                    <label for="star4" title="text">3 stars</label>
                    <input type="radio" id="star2" name="rate" value="2" />
                    <label for="star4" title="text">2 stars</label>
                    <input type="radio" id="star1" name="rate" value="1" />
                    <label for="star4" title="text">1 stars</label>
                </span>
                <label for="message">Berikan saran anda</label>
                <textarea name="message" id="message" cols="60" rows="10" placeholder="Ketik disini...."></textarea>
                <button type="submit" name="submit" id="submit">Kirim</button>
            </form>
    </div>
</div>
    <!--FOOTER-->
    <!--END SURVEY FORM-->
<script type="text/javascript">
        function handleSelect(elm)
  {
     window.location = elm.value+".php";
  }
</script>
</body>
</html>