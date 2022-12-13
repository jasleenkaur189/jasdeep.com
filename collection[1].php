<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>collection</title>
<!-- styling of collection.php page  -->
<style>
  body{
    background-color:#ac8679;
  }
  h1{
    font-size:2.1rem;
    line-height:1.4;
    text-align:center;
    color:white;
    margin-top:50px;
  }

  .maindiv{
    width:70%;
    height:600px;
    position:absolute;
    left:50%; 
    top:80%;
    transform:translate(-50%,-80%);
    background-image:url('images/tp1.jpg');
    background-size:cover;
    box-shadow:1px 2px 10px 5px black;
    animation:slider 8s infinite linear;
    
  }
@keyframes slider{
  0%{background-image:url('images/tp1.jpg'); }
  
  35%{ background-image:url('images/tp2.jpg');}
  
  75%{ background-image:url ('images/tp4.jpg');}
}

  
  .link{
  margin-top:100px;
   display: flex;   

  margin-right:25px;
  width:2em; 
   background:linear-gradient(45deg, #a67c6e,#614f48); 
   border-radius: 6px; 
   box-sizing: border-box; 
   box-shadow: 3px 8px 22px rgba(94,28,68,0.15); 
  }
  
</style>
<!--  ending of CSS  -->
</head>
  
<body>
  
  <h1>COLLECTION</h1>
<!--   DIV CLASS="MAIN DIV" USE FOR IMAGES REPRESENTATION -->
  <div class="maindiv">
  </div>
<!-- DIV CLASS="LINK" USE TO ADD LINKS OF FORWARD AND BACKWARD PAGE  -->
   <div class="link">
    <a href= "description.php"> &#8592; </a>
     <br>
    <a href="contact.php">&#10140;</a> 
  </div>
</body>
  </html>



    
  







































  
