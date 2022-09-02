html {
    scroll-behavior: smooth;
}
body{
    margin: 0;
    padding: 0;
    font-family:Poppins;
}
h1{
    font-size: 50px;
    font-family:Audiowide;
}
p{
    font-size: 24px;
    line-height: 50px;
}
.navbar{
    position: fixed;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: row;
    flex-wrap: wrap;
    background-color: #D4D7DE;
    width: 100%;
    height: 70px;
    z-index: 1;
}
.nav{
    display: flex;
    justify-content: right;
    list-style: none;
    margin-right: 15%;
}
.logo {
    flex: 1 1 auto;
    margin-left: 10%;
    text-transform: uppercase;
    letter-spacing: 1px;
    font-weight: bold;
    font-size: 35px;
}
img{
    width: 20%;
}
a{
    margin: 15px;
    color: #000;
    text-decoration: none;
    text-transform: uppercase;
}
a:hover{
    color: #000;
}
.banner-area{
    position: relative;
    background-image: url(https://images.unsplash.com/photo-1534438327276-14e5300c3a48?ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8Z3ltfGVufDB8fDB8fA%3D%3D&ixlib=rb-1.2.1&w=1000&q=80);
    width: 100%;
    height: 100vh;
    background-repeat: no-repeat;
    background-size: cover;
}

.about-area, .registration-page, .service-area, .login{
    position: relative;
    display: flex;
    justify-content: space-around;
    align-items: center;
    flex-wrap: wrap;
    flex-direction: row;
    width: 100%;
    height: 700px;
}
.text-part{
    width: 65%;
    height: 80%;
}        
.about-area{
    background-color: #fefefe;
}
.registration-page{
    background-color: #262626;
    color: #fff;
}
.service-area{
    background-color: #fefefe;
}
.login{
    background-color: #262626;
    color: #fff;
}
* {
    box-sizing: border-box;
  }
  
  .columns {
    float: left;
    width: 33.3%;
    padding: 15px;
    height: 15vh;
  }
  
  .price {
    list-style-type: none;
    border: 1px solid #eee;
    margin: 0;
    padding: 0;
    -webkit-transition: 0.3s;
    transition: 0.3s;
  }
  
  .price:hover {
    box-shadow: 0 8px 12px 0 rgba(0,0,0,0.2)
  }
  
  .price .header {
    background-color: #111;
    color: white;
    font-size: 25px;
  }
  
  .price li {
    border-bottom: 1px solid #eee;
    padding: 20px;
    text-align: center;
  }
  
  .price .grey {
    background-color: #eee;
    font-size: 20px;
  }
  
  .button {
    background-color: #04AA6D;
    border: none;
    color: white;
    padding: 10px 25px;
    text-align: center;
    text-decoration: none;
    font-size: 18px;
  }
  .img{
    position: relative;
    height: 50vh;
    width:100%;
  }
  @media only screen and (max-width: 600px) {
    .columns {
      width: 100%;
    }
  }
  