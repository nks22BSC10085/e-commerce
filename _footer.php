<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        *{
            pad: 0;
            margin: 0;
        }
        /* footer css start */

footer {
  background-color: #111;
  color: #fff;
  height: 45vmin;
}

.footIcon {
  display: flex;
}

footer .companyInfoBox .companyInfo1 {
  width: 20%;
  display: grid;
  justify-content: left;
  gap: 1.5vmin;
}

footer .companyInfoBox {
  display: flex;
  height: 30vmin;
  align-items: baseline;
  justify-content: space-evenly;
}

.footIcon {
  width: 100%;
  display: flex;
  justify-content: space-between;
}

.footIcon img {
  max-height: 40%;
}

.footLink {
  font-size: 2.8vmin;
}

.companyInfo1 .impoLink {
  font-size: 4vmin;
}

.companyInfo1 .footLogo {
  font-size: 6.5vmin;
}

.companyInfo1 h4 {
  font-size: 3.7vmin;
}

/* footer css end */
    </style>
    <title>Document</title>
</head>
<body>
<footer>
      <div class="companyInfoBox">
        <div class="companyInfo1">
          <h4 class="footLogo">Logo</h4>
          <p class="impoLink">About us</p>
            <p class="footLink">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo
              voluptatum a quae fuga, commodi non labore
            </p>
        </div>
        <div class="companyInfo1">
          <div class="impoLink">Importent links</div>
          <p class="footLink">About us</p>
          <p class="footLink">Contact us</p>
          <p class="footLink">Privacy policy</p>
          <p class="footLink">Term of use</p>
          <p class="footLink">Resfund policy</p>
        </div>
        <div class="companyInfo1">
          <p class="impoLink">Contact</p>
          <p class="footLink">nks854338@gmail.com</p>
          <p class="footLink">+91 976543210</p>
        </div>
        <div class="companyInfo1">
          <p class="impoLink">follow us</p>
          <div class="footIcon">
            <div class="footiconImg"><img
              src="image/facebook.png"
              
              alt=""
            />
          </div>
          <div class="footiconImg">
            <img
              src="image/instagram.png"
              
              alt=""
            />
          </div>
            <div class="footiconImg">
            <img
              src="image/whatsapp.png"
              
              alt=""
            />
          </div>
            <div class="footiconImg">
            <img
              src="image/youtube.png"
              
              alt=""
            />
          </div>
          </div>
        </div>
        </div>
      </div>
    </footer>
</body>
</html>