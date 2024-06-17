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
        <div class="slider-container">
        <div class="slider">
          <img src="images/1.jpg" alt="Image 1">
          <img src="images/2.jpg" alt="Image 2">
          <img src="images/3.jpg" alt="Image 3">
        </div>
        <div class="arrow left-arrow">&lt;</div>
        <div class="arrow right-arrow">&gt;</div>
        <div class="dots">
          <span class="dot"></span>
          <span class="dot"></span>
          <span class="dot"></span>
        </div>
      </div>
      <div class="services_section">
 
        <div class="srvices_card">
          <img src="images/4.jpg">
          <div class="srvices_card_data">
            <h3>cermony</h3>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. 
              Tempora nisi vel beatae quos saepe 
              sapiente.</p>
             <a href="about.php" class="btn">about us</a>
          </div>
        </div>
        <div class="srvices_card">
          <img src="images/7.jpg">
          <div class="srvices_card_data">
            <h3>cermony</h3>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. 
              Tempora nisi vel beatae quos saepe 
              sapiente.</p>
             <a href="about.php" class="btn">about us</a>
          </div>
        </div>
        <div class="srvices_card">
          <img src="images/5.jpg">
          <div class="srvices_card_data">
            <h3>cermony</h3>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. 
              Tempora nisi vel beatae quos saepe 
              sapiente.</p>
             <a href="about.php" class="btn">about us</a>
          </div>
        </div>
        
      </div>
        <?php include 'footer.php';?>
    </div>
    
    <script src="script.js"></script>
</body>
</html>