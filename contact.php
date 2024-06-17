<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
    <?php include 'styles.css' ?>
  </style>
    <title>Document</title>
</head>
<body>
    <div class="main_section" class="section">
        <?php include 'header.php';?>
        <h1>contact us</h1>
       <form action="" method="post" class="contact">
        <div class="input_area">
        <label for="name">Your name</label>
        <input name="name" type="text" id="name" placeholder="enter your name" required>
        </div>
        <div class="input_area">
        <label for="number">Your number</label>
        <input name="number" type="text" id="number" placeholder="enter your number">
        </div>
        <div class="input_area">
        <label for="email">Your email</label>
        <input type="email" id="email" name="email" placeholder="enter your email" required >
        </div>
        <div class="input_area">
        <label for="plan">Your plan</label>
        <input type="text" id="plan" name="plane" placeholder="your plane" required>
        </div>
        <div class="input_area">
        <label for="address">Your address</label>
        <textarea name="address" id="address" placeholder="write your address" > </textarea>
        </div>
        <div class="input_area">
        <label for="message">Your message</label>
        <textarea name="message" id="message" placeholder="write your message"></textarea>
        </div>
        <button type="submit">send message</button>
       </form>
        <?php include 'footer.php';?>
    </div>
    
    <script src="script.js"></script>
</body>
</html>