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

.detail-page, .diet-plan, .contact-area{
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

.detail-page{
    background-color: #262626;
    color: #fff;
}
.diet-plan{
    background-color: #fefefe;

}
.contact-area{
    background-color: #262626;
    color: #fff;
}
.diet-plan{
    position: relative;
    background-image: url(https://dg0qqklufr26k.cloudfront.net/wp-content/uploads/2020/09/pcos-d2-chart.png);
    width: 100%;
    height: 250vh;
    background-repeat: no-repeat;
    background-size: cover;
}
