<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Books</title>
    

    <!----Custom css link---->
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <link rel="stylesheet"
    href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

</head>
<body>

    <!----header start---->
    <header>
        <a href="index.php" class="logo" >Portal</a>
        <div class="bx bx-menu" id="menu-icon"></div>

        <ul class="navbar">
            <li><a href="#">School Diary</a></li>
            <li><a href="#">School News Letter</a>
            <li><a href="./Newsletter/newsletter.html">Study Materials</a></li>
            <li><a href="#">Our Technology</a>
        </li>

        </ul>
       

        
    </header>

    <style type="text/css">
        *{
          margin: 0;
          padding: 0;
          font-family: cursive;
          box-sizing: border-box;
        }
        .flex-container{
          width: 100%;
          height: auto;
          display: flex;
          flex-direction: row;
          flex-wrap: wrap;
          justify-content: flex-start;
          align-items: center;
          background-image: url(images/e-books);
        }
        .flex-box{
          width: 200px;
          height: 200px;
          background: linear-gradient(skyblue,white);
          color: white;
          font-size: 25px;
          text-align: center;
          line-height: 200px;
          border-radius: 20px;
          margin: 10px;
        }
      
      </style>
      
      <div class="flex-container">
        <div class="flex-box">
       <a href="">Grade 4</a>
      </div>
      <div class="flex-container">
        <div class="flex-box">
        <a href="">Grade 5</a>
        </div>
      </div>
      <div class="flex-container">
        <div class="flex-box">
        <a href="grade 6.php">Grade 6</a>
        </div>
      </div>
      <div class="flex-container">
        <div class="flex-box">
        <a href="grade 7.php">Grade 7</a>
        </div>
      </div>
      
        </div>
      </div>
    </section>

    <!----about start---->
    <section class="about" id="about">
        <div class="about-content">
         <h2>About</h2>
         <p> today a household name in the education domain. We are the world’s leading learning company, creating vibrant and enriching digital and offline learning experiences designed for a real-life impact. Our presence is in nearly 200 countries where we serve customers with digital content, assessments, qualifications and data. </p>
        </div>

    </section>
   
            
        </div>
    </section>
    <div class="last">
     <p>2023 by Kekana. Proudly created with Matebele IT Solutions</p>
    </div>
    <!----custom js link---->
    <script src="js/script.js"></script>
    
</body>
</html>