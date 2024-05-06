<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Read Zone</title>


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!--Normalize-->
    <!--Normalize-->
    <link href="https://cdn.bootcdn.net/ajax/libs/normalize/8.0.1/normalize.css" rel="stylesheet">
    <!-- Google Font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Akshar:wght@300;500&family=Cairo:wght@300;400;700&family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">

<style>
    /*Start Global Rules*/
   *{
       -webkit-box-sizing: border-box;
       -moz-box-sizing: border-box;
       box-sizing: border-box;
   }

   :root {
       --main-color:#2196F3;
       --main-color-alt:#1787e0;
       --main-transition: 0.3s;
       --main-padding-top: 100px;
       --main-padding-bottom: 100px;
       --section-background: #ececec;
   }

   html{
       scroll-behavior: smooth;
   }

   body {
       font-family: 'Cairo', sans-serif;
   }

   a{
       text-decoration: none;
   }

   ul {
       list-style: none;
       margin: 0;
       padding: 0;
   }


   .container {
       padding-left: 15px;
       padding-right: 15px;
       margin-left: auto;
       margin-right: auto;
     }

     /* Small */
     @media (min-width: 768px) {
       .container {
         width: 750px;
       }
     }

     /* Medium */
     @media (min-width: 992px) {
       .container {
         width: 970px;
       }
     }

     /* Large */
     @media (min-width: 1200px) {
       .container {
         width: 1170px;
       }
     }

     .main-title {
       text-transform: uppercase;
       margin: 0 auto 80px;
       border: 2px solid black;
       padding: 10px 20px;
       font-size: 30px;
       width: fit-content;
       position: relative;
       z-index: 1;
       transition: var(--main-transition);
   }
   .main-title::before,
   .main-title::after {
       content: "";
       width: 12px;
       height: 12px;
       background-color: var(--main-color);
       position: absolute;
       border-radius: 50%;
       top: 50%;
       transform: translateY(-50%);

   }

   .main-title::before {
       left: -30px;
   }
   .main-title::after {
       right: -30px;
   }
   .main-title:hover::before {
       z-index: -1;
       animation: left-move 0.5s linear forwards;
   }
   .main-title:hover::after {
       z-index: -1;
       animation: right-move 0.5s linear forwards;
   }
   .main-title:hover {
       color: white;
       border: 2px solid white;
       transition-delay: 0.5s;
   }

   .spikes {
       position: relative;
       background: white;
       height: 1vh;
   }

   .spikes::after {
       content: '';
       position: absolute;
       right: 0;
       left: -0%;
       top: 100%;
       z-index: 10;
       display: block;
       height: 50px;
       background-size: 25px 100%;
       background-image: linear-gradient(135deg, white 25%, transparent 25%), linear-gradient(225deg, white 25%, transparent 25%);
       background-position: 0 0;
   }

   .dots {
       background-image:url("photo/dots.png") ;
       height: 186px;
       width: 204px;
       background-repeat: no-repeat;
       position: absolute;
   }

   .dots-up {
       top: 80px;
       right: 0;
   }

   .dots-down {
       bottom: 80px;
       left: 0;
   }

   ::-webkit-scrollbar {
    width: 8px;
}

::-webkit-scrollbar-track {
    background-color: #f6f6f6;
}

::-webkit-scrollbar-thumb {
    border-radius: 12px;
    background-color: var(--main-color-alt);
}

::-webkit-scrollbar-thumb:hover {
    background-color: var(--main-color);
}

   /*End Global Rules*/
   /*Start Header*/
   .header {
       background-color: white;
       position: relative;
       -webkit-box-shadow: 0 0 10px #DDD;
       -moz-box-shadow: 0 0 10px #DDD;
       box-shadow: 0 0 10px #DDD;
   }

   .header .container {
       display: flex;
       justify-content: space-between;
       align-items: center;
       flex-wrap: wrap;
       position: relative;
   }

   .header .logo {
       color: var(--main-color);
       font-size: 26px;
       font-weight: bold;
       height: 72px;
       display: flex;
       justify-content: center;
       align-items: center;
   }

   @media (max-width: 767px) {
       .header .logo{
           width: 100%;
           height: 50px;
       }
   }

   .header .main-nav {
       display: flex;
   }

   @media (max-width: 767px) {
       .header .main-nav {
           margin: auto;
       }
   }

   .header .main-nav > li:hover .mega-menu {
       opacity: 1;
       z-index: 100;
       top: calc(100% + 1px);
   }

   .header .main-nav > li > a {
       display: flex;
       justify-content: center;
       align-items: center;
       height: 72px;
       position: relative;
       color: black;
       padding: 0 30px;
       overflow: hidden;
       transition: var(--main-transition);
   }

   @media (max-width: 767px) {
       .header .main-nav > li > a {
           padding: 10px;
           font-size: 14px;
           height: 40px;
       }
   }

   .header .main-nav > li > a::before {
       content: "";
       position: absolute;
       width: 100%;
       height: 4px;
       background-color: var(--main-color);
       top: 0;
       left: -100%;
       transition: var(--main-transition);
   }

   .header .main-nav > li > a:hover {
       color: var(--main-color);
       background-color: #FAFAFA;
   }

   .header .main-nav > li > a:hover::before {
       left: 0;
   }

   .header .mega-menu {
       position: absolute;
       width: 100%;
       left: 0;
       padding: 30px;
       background-color: white;
       border-bottom: 3px solid var(--main-color);
       z-index: -1;
       display: flex;
       gap: 40px;
       top: calc(100% + 50px);
       opacity: 0;
       transition: top var(--main-transition), opacity var(--main-transition);

   }

   @media(max-width: 767px) {
       .header .mega-menu {
           flex-direction: column;
           gap: 0;
           padding: 5px;
       }
   }

   .header .mega-menu .image img {
       max-width: 100%;
   }

   @media (max-width: 991px) {
       .header .mega-menu .image {
           display: none;
       }
   }

   .header .mega-menu .links {
       min-width: 250px;
       flex: 1;
   }

   .header .mega-menu .links li {
       position: relative;

   }

   .header .mega-menu .links li:not(:last-child) {
       border-bottom: 1px solid #e9e6e6 ;
   }

   @media (max-width: 767px) {
       .header .mega-menu .links:first-of-type li:last-child {
           border-bottom: 1px solid #e9e6e6 ;
       }
   }

   .header .mega-menu .links li::before {
       content: "";
       position: absolute;
       left: 0;
       top: 0;
       width: 0;
       height: 100%;
       background-color: #f7f1f1;
       z-index: -1;
       transition: var(--main-transition);
   }
   .header .mega-menu .links li:hover::before {
       width: 100%;
   }

   .header .mega-menu .links li a {
       color: var(--main-color);
       padding: 15px;
       display: block;
       font-size: 18px;
       font-weight: bold;
   }

   .header .mega-menu .links li  a i {
       margin-right: 10px;
   }

   /*End Header*/

   /*Start Landing*/
   .landing {
       position: relative;
   }

   .landing::before {
       content: "";
       position: absolute;
       left: 0;
       top: -40px;
       width: 100%;
       height: 100%;
       background-color: #ECECEC;
       z-index: -1;
       transform: skewY(-6deg);
       transform-origin: top left;
   }

   .landing .container {
       min-height: calc(100vh - 72px);
       display: flex;
       align-items: center;
       padding-bottom: 120px;
   }

   .landing .text {
       flex: 1;
   }

   @media (max-width: 991px) {
       .landing .text {
           text-align: center;
       }
   }

   .landing .text h1 {
       font-size: 40px;
       margin: 0;
       letter-spacing: -2px;
   }

   @media (max-width: 767px) {
       .landing .text h1{
           font-size: 28px;
       }
   }

   .landing .text p {
       font-size: 23px;
       line-height: 1.7;
       margin: 5px 0 0;
       color: #666;
       max-width: 500px;
   }

   @media (max-width: 991px) {
       .landing .text p {
           margin: 10px auto;
       }
   }

   @media (max-width: 767px) {
       .landing .text p {
           font-size: 18px;
       }
   }

   .landing .image img {
       width: 600px;
       animation: up-and-down 5s linear infinite;

   }

   @media (max-width: 991px) {
       .landing .image {
           display: none;
       }
   }
/*
   .landing .go-down {
       color: var(--main-color);
       position: absolute;
       bottom: 30px;
       left: 50%;
       transform: translateX(-50%);
       transition: var(--main-transition);
   }

   .landing .go-down:hover {
       color: var(--main-color-alt);
   }

   .landing .go-down i {
       animation: bouncing 1.5s infinite;
   }
   /*End Landing*/

   /*Start Search Bar*/
   /*End Search Bar*/

   /*Start Books*/
   .books {
       padding-top: var(--main-padding-top) ;
       padding-bottom: var(--main-padding-bottom);
       position: relative;
   }

   .books .container {
       display: grid;
       grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
       gap: 40px;
   }

   .books .box {
       box-shadow: 0 2px 15px rgb(0 0 0 / 10%);
       background-color: white;
       border-radius: 6px;
       overflow: hidden;
       transition: transform var(--main-transition), box-shadow var(--main-transition);
   }

   .books .box:hover {
       transform: translateY(-10px);
       box-shadow: 0 2px 15px rgb(0 0 0 / 20%);
   }

   .books .box img {
       height: 68%;
       width: 100%;
       max-width: 100%;
   }

   .books .box .content {
       padding: 20px;
   }

   .books .box .content h3 {
       margin: 0;
   }

   .books .box .content p {
       margin: 10px 0 0;
       line-height: 1.5;
       color: #777;
   }

   .books .box .info {
       padding: 20px;
       border-top: 1px solid #E6E6E7;
       display: flex;
       justify-content: space-between;
       align-items: center;
   }

   .books .box .info a {
       color: var(--main-color);
       font-weight: bold;
   }

   .books .box .info i {
       color: var(--main-color);
   }

   .books .box:hover .info i {
       animation: moving-arrow 0.6s linear infinite;
     }
   /*End Books*/

   /* Start events */
   .events {
       padding-top: var(--main-padding-top);
       background-color:var(--section-background) ;
       padding-bottom: var(--main-padding-bottom);
       position: relative;
   }

   .events .container {
       display: flex;
       align-items: center;
       flex-wrap:wrap;
   }

   .events img {
       max-width: 450px;
   }

   @media (max-width: 991px) {
       .events img {
       display: none;
       }
   }

   .events .info {
       flex: 1;
   }

   .events .info .time {
       display: flex;
       align-items: center;
       margin: 20px auto;
       gap: 10px;
       justify-content: center;
   }
   .events .info .time .unit {
       border: 1px solid #d4d4d4;
       border-radius: 6px;
       text-align: center;
       width: 75px;
       transition: var(--main-transition);
   }
   .events .info .time .unit span {
       display: block;
       transition: var(--main-transition);
   }

   .events .info .time .unit span:first-child {
       font-size: 35px;
       padding: 15px;
       color: var(--main-color);
       font-weight: bold;
   }
   .events .info .time .unit span:last-child {
       padding: 8px 10px;
       font-size: 13px;
       border-top: 1px solid #d4d4d4;
   }
   .events .info .time .unit:hover,
   .events .info .time .unit:hover span:last-child {
       border-color: var(--main-color);
   }
   .events .title {
       text-align: center;
       margin: 40px 0 0;
       font-size: 30px;
   }
   .events .description {
       text-align: center;
       line-height: 1.7;
       font-size: 19px;
       color: #777;
   }

   /* End events */

   /* Start comment*/
   .comment {
       position: relative;
       min-height: 100vh;
       display: flex;
       flex-wrap: wrap;
   }

   .comment .content{
       text-align: center;
       padding: 0 20px;
   }

   .comment .content h2 {
       font-size: 40px;
       letter-spacing: -2px;
       color: var(--main-color);
   }

   .comment .form {
       display: flex;
       align-items: center;
       justify-content: center;
       flex-basis: 150%  ;
   }

   .comment .form .input {
       display: block;
       width: 350px;
       margin-bottom: 25px;
       padding: 15px;
       border: none;
       border-bottom: 1px solid #ccc;
       background-color: #f9f9f9;
       caret-color: var(--main-color);
   }

   .comment .form textarea.input {
       resize: none;
       height: 200px;
   }

   .comment .form .input:focus {
       outline: none;
   }

   .comment .form [type="submit"] {
       display: block;
       width: 100%;
       padding: 15px;
       background-color: var(--main-color);
       color: white;
       font-weight: bold;
       font-size: 20px;
       border: none;
       cursor: pointer;
       transition: var(--main-transition);
   }

   .comment .form [type="submit"]:hover {
       background-color: var(--main-color-alt);
   }

   /* End comment*/

   /*Start Team Members*/
   .team {
       padding-top: var(--main-padding-top);
       padding-bottom: var(--main-padding-bottom);
       position: relative;
       background-color: var(--section-background);
   }

   .team .container {
       display: grid;
       grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
       gap: 40px;
   }

   .team .box{
    padding: 20px;
    background-color: white;
    box-shadow: 0 2px 4px rgb(0 0 0 / 7%);
    border-radius: 6px;
    position: relative;
   }

   .team .box img{
       position: absolute;
       right: -10px;
       top: -50px;
       width: 100px;
       height: 100px;
       border-radius: 50%;
       border: 10px solid var(--section-background);
   }

   .team .box h3 {
       margin: 0 0 10px;
       color: var(--main-color);
   }

   .team .box .title {
       color: #777;
       margin-bottom: 10px;
       display: block;
   }

   .team .box .rate .filled {
       color: #ffc107;
   }

   .team .box p {
       line-height: 1.5;
       color: rgb(173, 162, 162);
       margin-top: 10px;
       margin-bottom: 0;
   }
   /*End Team Members*/
   /*Start footer*/
   .footer {
       background-color: #191919;
       padding: 70px 0 0;
   }

   .footer .container {
       display: grid;
       grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
       gap: 40px;
   }

   .footer .box h3{
       color: white;
       font-size: 50px;
       margin: 0 0 20px;
   }

   .footer .box .social {
       display: flex;
   }

   .footer .box .social li {
       margin-right: 10px;
   }

   .footer .box .social li a {
       background-color: #313131;
       color: #b9b9b9;
       display: inline-flex;
       justify-content: center;
       align-items: center;
       width: 50px;
       height: 50px;
       font-size: 20px;
       transition: var(--main-transition);
   }

   .footer .box .social .facebook:hover {
       background-color: #1877f2;
   }

   .footer .box .social .twitter:hover {
       background-color: #1da1f2;
   }

   .footer .box .social .instagram:hover {
       background-color: #833ab4;
   }

   .footer .box .text {
       line-height: 2;
       color: #b9b9b9;
   }

   .footer .box .line {
       display: flex;
       align-items: center;
       color: #b9b9b9;
       margin-bottom: 30px;
   }

   .footer .box .line i {
       font-size: 25px;
       color: var(--main-color);
       margin-right: 10px;
   }

   .footer .box .line .info {
       line-height: 1.7;
       flex: 1;
   }

   /*End footer*/
   /*Start Animation*/
   @keyframes up-and-down {
       0%,
       100% {
         transform:translateY(0) ;
       }
       50% {
           transform:translateY(-6%) ;
       }
     }

   @keyframes bouncing {
       0%,
       10%,
       20%,
       50%,
       80%,
       100%{
           transform: translateY(0);
       }
       40%,
       60%{
           transform: translateY(-15px);
       }
   }

   @keyframes left-move {
       50% {
           left: 0;
           width: 12px;
           height: 12px;
       }
       100% {
           left: 0;
           border-radius: 0;
           width: 50.25%;
           height: 100%;
       }
   }

   @keyframes right-move {
       50% {
           right: 0;
           width: 12px;
           height: 12px;
       }
       100% {
           right: 0;
           border-radius: 0;
           width: 50.25%;
           height: 100%;
       }
   }

   @keyframes moving-arrow {
       50% {
           transform: translateY(-5px);

       }
       100% {
           transform: translateY(5px);
       }
   }
   /*End Animation*/

   .go .go-up {
    color: var(--main-color);
    position: absolute;
    bottom: 30px;
    left: 50%;
    transform: translateX(-50%);
    transition: var(--main-transition);
}

.go .go-up:hover {
    color: var(--main-color-alt);
}

.go .go-up i {
    animation: bouncing 1.5s infinite;
}
   </style>
   </head>
   <body>

    @yield('content')
   <script src="{{URL::asset('assets/js/main.js')}}"></script>

   <script src="JS/script.js"></script>
</body>
</html>
