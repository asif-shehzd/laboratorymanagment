<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gallery</title>
  <style>
  *
{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins', sans-serif;
}
.container
{
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  text-align: center;
  margin: 40px 20px 0 20px;
}
.container .heading
{
  width: 50%;
  padding-bottom: 50px;
}
.container .heading h3
{
  font-size: 3em;
  font-weight: bolder;
  padding-bottom: 10px;
  border-bottom: 3px solid #222;
}
.container .heading h3 span
{
  font-weight: 100;
  color: gray;
  font-size: 39px;
}
.container .box
{
  display: flex;
  flex-direction: row;
  justify-content: space-between;
  
}
.container .box .dream
{
  display: flex;
  flex-direction: column;
  width: 32.5%;
}
.container .box .dream img
{
  width: 100%;
  padding-bottom: 15px;
  border-radius: 5px;
}
.container .btn
{
  margin: 40px 0 70px 0;
  background: #222;
  padding: 15px 40px;
  border-radius: 5px;
}
.container .btn a
{
  color: #fff;
  font-size: 1.2em;
  text-decoration: none;
  font-weight: bolder;
  letter-spacing: 3px;
}
@media only screen and (max-width: 769px){
  .container .box{
    flex-direction: column;
  }
  .container .box .dream
  {
    width: 100%;
  }
}
@media only screen and (max-width: 643px){
  .container .heading
  {
    width: 100%;
  }
  .container .heading h3
  {
    font-size: 1em;
  }
}
  </style>
</head>
<body>
  <div class="container">
    <div class="heading">
      <h3>Photo<span>Gallery</span></h3>
    </div>
    <div class="box">
      <div class="dream">
        <img src="images/ap1.jpg">
        <img src="images/ap2.jpg">
        <img src="images/ap3.jpg">
        <img src="images/ap4.jpg">
        <img src="images/ap5.jpg">
      </div>

      <div class="dream">
        <img src="images/ap6.jpg">
        <img src="images/ap7.jpg">
        <img src="images/ap8.jpg">
        <img src="images/ap9.jpg">
        <img src="images/ap10.jpg">
      </div>

      <div class="dream">
        <img src="images/ap1.jpg">
        <img src="images/ap2.jpg">
        <img src="images/ap3.jpg">
        <img src="images/ap4.jpg">
        <img src="images/ap5.jpg">
      </div>

    </div>
    <div class="btn">
      <a href="">More</a></div>
  </div>
</body>
</html>