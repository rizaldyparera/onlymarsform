<?php include 'sendemail.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OnlyMARS Form</title>
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/css/select2.css" />
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
        <a href="../" class="back-btn">Back  <i class='bx bx-arrow-back'></i></a>
        <select id="cd-dropdown" class="cd-select"  onchange="javascript:handleSelect(this)">
            <option disable selected class="eng">ENG</option>
            <option value="indexid" class="id">IND</option>
        </select>
    </div>
    <!--FORM-->
     <!--alert messages start-->
     <?php echo $alert; ?>
    <!--alert messages end-->
    <div class="surveyform">
            <form action="" method="POST" class="form">
                <label for="name">Full Name</label>
                <input type="text" id="name" name="name" placeholder="Full Name">
                <label for="email">Email</label>
                <input type="text" id="email" name="email" placeholder="example@gmail.com">
                <label for="fwebsite">How did you hear about this website?</label>
                <select name="fwebsite" id="fwebsite">
                    <option value="instagram">Instagram</option>
                    <option value="facebook">Facebook</option>
                    <option value="facebook">Advertise</option>
                    <option value="facebook">Search Engine</option>
                    <option value="facebook">Other</option>
                </select>
                <label for="browser">What browser do you use ?</label>
                <select name="browser" id="browser">
                    <option value="chrome">Chrome</option>
                    <option value="firefox">Mozila Firefox</option>
                    <option value="edge">IE</option>
                    <option value="opera">Opera</option>
                    <option value="safari">Safari</option>
                </select>
                <label for="device">Which device did you use to access the website?</label>
                <select name="device" id="device">
                    <option value="laptop">Laptop</option>
                    <option value="ipad">Ipad</option>
                    <option value="mobile">Mobile</option>
                </select>
                <label for="rate">Rate This Website</label>
                <span class="rate">
                    <input type="radio" id="star5" name="rate" value="5" />
                    <label for="star5" title="text">5 stars</label>
                    <input type="radio" id="star4" name="rate" value="4" />
                    <label for="star4" title="text">4 stars</label>
                    <input type="radio" id="star3" name="rate" value="3" />
                    <label for="star3" title="text">3 stars</label>
                    <input type="radio" id="star2" name="rate" value="2" />
                    <label for="star2" title="text">2 stars</label>
                    <input type="radio" id="star1" name="rate" value="1" />
                    <label for="star1" title="text">1 star</label>
                </span>
                <label for="message">Please Give Your Advice</label>
                <textarea name="message" id="message" cols="60" rows="10" placeholder="Type here...."></textarea>
                <button type="submit" name="submit" id="submit">Submit</button>
            </form>
    </div>
</div>
    <!--FOOTER-->
    <!--END SURVEY FORM-->
<script src="https://unpkg.com/boxicons@2.0.9/dist/boxicons.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript">
         function handleSelect(elm)
  {
     window.location = elm.value+".php";
  }
</script>
</body>
</html>