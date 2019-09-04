<!DOCTYPE html>
<html lang="en" >

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Semesta - Login</title>
    <link rel="shortcut icon" sizes="196x196" href="<?php echo base_url('assets/images/location-pin.png'); ?>">

    <style type="text/css">


        @media only screen and (max-width: 768px) {
          /* For mobile phones: */
          .login {
            width: 100%;
          }
        }

        * {
          box-sizing: border-box;
        }

        body {
          /* Permalink - use to edit and share this gradient: http://colorzilla.com/gradient-editor/#0c1019+0,0b0b0e+100 */
          background: #0c1019;
          /* Old browsers */
          /* FF3.6-15 */
          /* Chrome10-25,Safari5.1-6 */
          background: radial-gradient(ellipse at center, #0c1019 0%, #0b0b0e 100%);
          /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
          filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#0c1019', endColorstr='#0b0b0e',GradientType=1 );
          /* IE6-9 fallback on horizontal gradient */
          font-family: montserrat;
          text-align: center;
          margin: 0;
          padding: 0;
          overflow: hidden;
          height: 100vh;
        }
        body .container_inner {
          width: 300px;
          margin: 0 auto;
        }
        body .container_inner__login {
          /*height: 100vh;*/
          margin-top: 100%;
          -webkit-perspective: 800px;
                  perspective: 800px;
        }
        body .container_inner__login .tip {
          color: #81AECE;
          opacity: 0;
          transition: all .4s;
          font-size: 10px;
          position: relative;
          font-weight: 100;
          height: 0px;
          overflow: hidden;
          top: -27px;
          line-height: 14px;
        }
        .loginfo {
          color: #FF133D;
          -webkit-animation: pop .5s 2.5s forwards;
                  animation: pop .5s 2.5s forwards;
          position: relative;
          opacity: 0;
        }
           
        body .container_inner__login .tick {
          -webkit-transform: scale(0) translateY(-50%);
                  transform: scale(0) translateY(-50%);
          transition: all 0.35s cubic-bezier(0.65, 1.88, 0.51, 0.69);
          position: absolute;
          left: 0;
          top: 50%;
          right: 0;
          margin: auto;
        }
        body .container_inner__login .tick img {
          width: 50px;
        }
        body .container_inner__login .hide {
          opacity: 0 !important;
        }
        body .container_inner__login .bulge {
          -webkit-transform: scale(1) !important;
                  transform: scale(1) !important;
          top: 50px !important;
          transition: all .4s;
          -webkit-animation: bulge 1s .25s forwards !important;
                  animation: bulge 1s .25s forwards !important;
        }
        body .container_inner__login .login_check {
          font-size: 11px;
          text-align: center;
          line-height: 20px;
          color: white;
          color: #BFBFCE;
          position: absolute;
          display: none;
          left: -26px;
          top: 160px;
          height: 280px;
          width: 278px;
          margin: auto;
          right: 0;
        }
        body .container_inner__login .login_check img {
          opacity: 0.9;
          width: 140px;
          margin-bottom: 30px;
        }
        body .container_inner__login .login_check span {
          color: #FF133D;
          line-height: 20px;
        }
        body .container_inner__login .login {
          position: absolute;
          left: 0;
          top: 50%;
          transition: all .2s;
          width: 220px;
          -webkit-transform-origin: 110px -30px;
                  transform-origin: 110px -30px;
          margin: auto;
          -webkit-transform: scale(1) translateY(-50%) rotatex(360deg) rotatey(360deg);
                  transform: scale(1) translateY(-50%) rotatex(360deg) rotatey(360deg);
          right: 0;
        }
        body .container_inner__login .login .center {
          top: 100px !important;
        }
        body .container_inner__login .login_profile {
          //border-radius: 100px;
          height: 70px;
          width: 60px;
          //background: white;
          margin-bottom: 40px;
          margin: 0 auto;
          position: relative;
          top: 0px;
          -webkit-transform: scale(0);
                  transform: scale(0);
          -webkit-animation: logo_in 1s .9s forwards;
                  animation: logo_in 1s .9s forwards;
        }
        body .container_inner__login .login_profile img {
          position: relative;
          top: 18px;
        }
        body .container_inner__login .login_profile .logo {
          z-index: 2;
        }
        body .container_inner__login .login_profile .pulse {
          width: 160px;
          position: relative;
          top: -85px;
          display: none;
          left: -42px;
          z-index: 1;
        }
        body .container_inner__login .login_desc {
          color: #BFBFCE;
          font-size: 10px;
          margin-top: 20px;
          -webkit-animation: pop .5s 1.3s forwards;
                  animation: pop .5s 1.3s forwards;
          position: relative;
          opacity: 0;
        }
        body .container_inner__login .login_desc h3 {
          font-weight: 500;
        }
        body .container_inner__login .login_desc span {
          color: #FF133D;
          font-weight: 600;
        }
        body .container_inner__login .login_inputs {
          margin-top: 50px;
        }
        body .container_inner__login .login_inputs form {
          margin: 0;
          padding: 0;
        }
        body .container_inner__login .login_inputs form input {
          width: 100%;
          padding: 10px;
          color: #141416;
          border: none;
          border-radius: 3px;
          text-align: left;
          -webkit-animation: pop .5s 1.6s forwards;
                  animation: pop .5s 1.6s forwards;
          position: relative;
          opacity: 0;
          font-size: 13px;
          outline: none;
        }
        body .container_inner__login .login_inputs form input[type="submit"] {
          margin-top: 12px;
          cursor: pointer;
          border: 1px solid #FF133D;
          text-transform: uppercase;
          letter-spacing: 1px;
          padding: 10px 10px;
          -webkit-animation: pop .5s 1.9s forwards;
                  animation: pop .5s 1.9s forwards;
          position: relative;
          opacity: 0;
          position: relative;
          font-weight: 100;
          color: white;
          font-family: montserrat;
          background: #D61134;
          box-shadow: 0px 2px #69091A, 0px 0px 3px rgba(2, 2, 2, 0.17), 0px 0px rgba(255, 255, 255, 0.13) inset;
          font-size: 11px;
          transition: all .24s;
        }
        body .container_inner__login .login_inputs a {
          color: #fff;
          text-decoration: none;
          font-weight: 100;
          -webkit-animation: pop .5s 2.2s forwards;
                  animation: pop .5s 2.2s forwards;
          position: relative;
          opacity: 0;
          font-size: 12px;
          display: inline-block;
          margin-top: 20px;
          transition: all .24s;
        }
        body .container_inner__login .login_inputs a:hover {
          color: #FF133D;
        }

        @-webkit-keyframes brightflash {
          0% {
            background: #141416;
          }
          50% {
            background: white;
          }
          100% {
            background: #141416;
          }
        }

        @keyframes brightflash {
          0% {
            background: #141416;
          }
          50% {
            background: white;
          }
          100% {
            background: #141416;
          }
        }
        @-webkit-keyframes bulge {
          0% {
            width: 60px;
          }
          20% {
            width: 110px;
          }
          40% {
            width: 67px;
          }
          60% {
            width: 84px;
          }
          80% {
            width: 78px;
          }
          100% {
            width: 80px;
          }
        }
        @keyframes bulge {
          0% {
            width: 60px;
          }
          20% {
            width: 110px;
          }
          40% {
            width: 67px;
          }
          60% {
            width: 84px;
          }
          80% {
            width: 78px;
          }
          100% {
            width: 80px;
          }
        }
        @-webkit-keyframes logo_in {
          0% {
            -webkit-transform: scale(0);
                    transform: scale(0);
          }
          20% {
            -webkit-transform: scale(1.1);
                    transform: scale(1.1);
          }
          40% {
            -webkit-transform: scale(0.98);
                    transform: scale(0.98);
          }
          60% {
            -webkit-transform: scale(1.012);
                    transform: scale(1.012);
          }
          80% {
            -webkit-transform: scale(0.995);
                    transform: scale(0.995);
          }
          100% {
            -webkit-transform: scale(1);
                    transform: scale(1);
          }
        }
        @keyframes logo_in {
          0% {
            -webkit-transform: scale(0);
                    transform: scale(0);
          }
          20% {
            -webkit-transform: scale(1.1);
                    transform: scale(1.1);
          }
          40% {
            -webkit-transform: scale(0.98);
                    transform: scale(0.98);
          }
          60% {
            -webkit-transform: scale(1.012);
                    transform: scale(1.012);
          }
          80% {
            -webkit-transform: scale(0.995);
                    transform: scale(0.995);
          }
          100% {
            -webkit-transform: scale(1);
                    transform: scale(1);
          }
        }
        @-webkit-keyframes pop {
          0% {
            opacity: 0;
            top: 4px;
          }
          100% {
            opacity: 1;
            top: 0px;
          }
        }
        @keyframes pop {
          0% {
            opacity: 0;
            top: 4px;
          }
          100% {
            opacity: 1;
            top: 0px;
          }
        }
        /*

        */
        .column {
          color: white;
          opacity: 0.1;
          float: left;
          position: relative;
        }
        .column:nth-of-type(1) {
          top: -186px;
        }
        .column:nth-of-type(2) {
          top: -154px;
        }
        .column:nth-of-type(3) {
          top: -34px;
        }
        .column:nth-of-type(4) {
          top: -239px;
        }
        .column:nth-of-type(5) {
          top: -234px;
        }
        .column:nth-of-type(6) {
          top: -166px;
        }
        .column:nth-of-type(7) {
          top: -24px;
        }
        .column:nth-of-type(8) {
          top: -300px;
        }
        .column:nth-of-type(9) {
          top: -155px;
        }
        .column:nth-of-type(10) {
          top: -194px;
        }
        .column:nth-of-type(11) {
          top: -13px;
        }
        .column:nth-of-type(12) {
          top: -39px;
        }
        .column:nth-of-type(13) {
          top: -116px;
        }
        .column:nth-of-type(14) {
          top: -147px;
        }
        .column:nth-of-type(15) {
          top: -156px;
        }
        .column:nth-of-type(16) {
          top: -277px;
        }
        .column:nth-of-type(17) {
          top: -255px;
        }
        .column:nth-of-type(18) {
          top: -267px;
        }
        .column:nth-of-type(19) {
          top: -55px;
        }
        .column:nth-of-type(20) {
          top: -219px;
        }
        .column:nth-of-type(21) {
          top: -43px;
        }
        .column:nth-of-type(22) {
          top: -202px;
        }
        .column:nth-of-type(23) {
          top: -53px;
        }
        .column:nth-of-type(24) {
          top: -236px;
        }
        .column:nth-of-type(25) {
          top: -258px;
        }
        .column:nth-of-type(26) {
          top: -49px;
        }
        .column:nth-of-type(27) {
          top: -7px;
        }
        .column:nth-of-type(28) {
          top: -223px;
        }
        .column:nth-of-type(29) {
          top: -204px;
        }
        .column:nth-of-type(30) {
          top: -135px;
        }
        .column:nth-of-type(31) {
          top: -79px;
        }
        .column:nth-of-type(32) {
          top: -84px;
        }
        .column:nth-of-type(33) {
          top: -287px;
        }
        .column:nth-of-type(34) {
          top: -112px;
        }
        .column:nth-of-type(35) {
          top: -186px;
        }
        .column:nth-of-type(36) {
          top: -110px;
        }
        .column:nth-of-type(37) {
          top: -29px;
        }
        .column:nth-of-type(38) {
          top: -250px;
        }
        .column:nth-of-type(39) {
          top: -285px;
        }
        .column:nth-of-type(40) {
          top: -281px;
        }
        .column:nth-of-type(41) {
          top: -163px;
        }
        .column:nth-of-type(42) {
          top: -145px;
        }
        .column:nth-of-type(43) {
          top: -209px;
        }
        .column:nth-of-type(44) {
          top: -27px;
        }
        .column:nth-of-type(45) {
          top: -1px;
        }
        .column:nth-of-type(46) {
          top: -69px;
        }
        .column:nth-of-type(47) {
          top: -67px;
        }
        .column:nth-of-type(48) {
          top: -247px;
        }
        .column:nth-of-type(49) {
          top: -172px;
        }
        .column:nth-of-type(50) {
          top: -265px;
        }
        .column:nth-of-type(51) {
          top: -32px;
        }
        .column:nth-of-type(52) {
          top: -62px;
        }
        .column:nth-of-type(53) {
          top: -161px;
        }
        .column:nth-of-type(54) {
          top: -259px;
        }
        .column:nth-of-type(55) {
          top: -30px;
        }
        .column:nth-of-type(56) {
          top: -185px;
        }
        .column:nth-of-type(57) {
          top: -153px;
        }
        .column:nth-of-type(58) {
          top: -104px;
        }
        .column:nth-of-type(59) {
          top: -73px;
        }
        .column:nth-of-type(60) {
          top: -120px;
        }
        .column:nth-of-type(61) {
          top: -80px;
        }
        .column:nth-of-type(62) {
          top: -267px;
        }
        .column:nth-of-type(63) {
          top: -280px;
        }
        .column:nth-of-type(64) {
          top: -171px;
        }
        .column:nth-of-type(65) {
          top: -64px;
        }
        .column:nth-of-type(66) {
          top: -121px;
        }
        .column:nth-of-type(67) {
          top: -183px;
        }
        .column:nth-of-type(68) {
          top: -230px;
        }
        .column:nth-of-type(69) {
          top: -99px;
        }
        .column:nth-of-type(70) {
          top: -96px;
        }
        .column:nth-of-type(71) {
          top: -275px;
        }
        .column:nth-of-type(72) {
          top: -70px;
        }
        .column:nth-of-type(73) {
          top: -94px;
        }
        .column:nth-of-type(74) {
          top: -260px;
        }
        .column:nth-of-type(75) {
          top: -98px;
        }
        .column:nth-of-type(76) {
          top: -251px;
        }
        .column:nth-of-type(77) {
          top: -210px;
        }
        .column:nth-of-type(78) {
          top: -102px;
        }
        .column:nth-of-type(79) {
          top: -107px;
        }
        .column:nth-of-type(80) {
          top: -228px;
        }
        .column:nth-of-type(81) {
          top: -52px;
        }
        .column:nth-of-type(82) {
          top: -105px;
        }
        .column:nth-of-type(83) {
          top: -232px;
        }
        .column:nth-of-type(84) {
          top: -204px;
        }
        .column:nth-of-type(85) {
          top: -102px;
        }
        .column:nth-of-type(86) {
          top: -181px;
        }
        .column:nth-of-type(87) {
          top: -140px;
        }
        .column:nth-of-type(88) {
          top: -25px;
        }
        .column:nth-of-type(89) {
          top: -198px;
        }
        .column:nth-of-type(90) {
          top: -93px;
        }
        .column:nth-of-type(91) {
          top: -233px;
        }
        .column:nth-of-type(92) {
          top: -201px;
        }
        .column:nth-of-type(93) {
          top: -77px;
        }
        .column:nth-of-type(94) {
          top: -255px;
        }
        .column:nth-of-type(95) {
          top: -282px;
        }
        .column:nth-of-type(96) {
          top: -146px;
        }
        .column:nth-of-type(97) {
          top: -72px;
        }
        .column:nth-of-type(98) {
          top: -265px;
        }
        .column:nth-of-type(99) {
          top: -193px;
        }
        .column:nth-of-type(100) {
          top: -253px;
        }
        .column .row {
          height: 10px;
          margin-left: 130px;
          margin-top: 20px;
          font-size: 10px;
          position: relative;
          margin-bottom: -10px;
          opacity: 0.1;
          color: white;
        }
        .column .row:nth-of-type(1) {
          -webkit-animation: fade 4s 0.25s infinite;
          -moz-animation: fade 4s 0.25s infinite;
          -o-animation: fade 4s 0.25s infinite;
        }
        .column .row:nth-of-type(2) {
          -webkit-animation: fade 4s 0.5s infinite;
          -moz-animation: fade 4s 0.5s infinite;
          -o-animation: fade 4s 0.5s infinite;
        }
        .column .row:nth-of-type(3) {
          -webkit-animation: fade 4s 0.75s infinite;
          -moz-animation: fade 4s 0.75s infinite;
          -o-animation: fade 4s 0.75s infinite;
        }
        .column .row:nth-of-type(4) {
          -webkit-animation: fade 4s 1s infinite;
          -moz-animation: fade 4s 1s infinite;
          -o-animation: fade 4s 1s infinite;
        }
        .column .row:nth-of-type(5) {
          -webkit-animation: fade 4s 1.25s infinite;
          -moz-animation: fade 4s 1.25s infinite;
          -o-animation: fade 4s 1.25s infinite;
        }
        .column .row:nth-of-type(6) {
          -webkit-animation: fade 4s 1.5s infinite;
          -moz-animation: fade 4s 1.5s infinite;
          -o-animation: fade 4s 1.5s infinite;
        }
        .column .row:nth-of-type(7) {
          -webkit-animation: fade 4s 1.75s infinite;
          -moz-animation: fade 4s 1.75s infinite;
          -o-animation: fade 4s 1.75s infinite;
        }
        .column .row:nth-of-type(8) {
          -webkit-animation: fade 4s 2s infinite;
          -moz-animation: fade 4s 2s infinite;
          -o-animation: fade 4s 2s infinite;
        }
        .column .row:nth-of-type(9) {
          -webkit-animation: fade 4s 2.25s infinite;
          -moz-animation: fade 4s 2.25s infinite;
          -o-animation: fade 4s 2.25s infinite;
        }
        .column .row:nth-of-type(10) {
          -webkit-animation: fade 4s 2.5s infinite;
          -moz-animation: fade 4s 2.5s infinite;
          -o-animation: fade 4s 2.5s infinite;
        }
        .column .row:nth-of-type(11) {
          -webkit-animation: fade 4s 2.75s infinite;
          -moz-animation: fade 4s 2.75s infinite;
          -o-animation: fade 4s 2.75s infinite;
        }
        .column .row:nth-of-type(12) {
          -webkit-animation: fade 4s 3s infinite;
          -moz-animation: fade 4s 3s infinite;
          -o-animation: fade 4s 3s infinite;
        }
        .column .row:nth-of-type(13) {
          -webkit-animation: fade 4s 3.25s infinite;
          -moz-animation: fade 4s 3.25s infinite;
          -o-animation: fade 4s 3.25s infinite;
        }
        .column .row:nth-of-type(14) {
          -webkit-animation: fade 4s 3.5s infinite;
          -moz-animation: fade 4s 3.5s infinite;
          -o-animation: fade 4s 3.5s infinite;
        }
        .column .row:nth-of-type(15) {
          -webkit-animation: fade 4s 3.75s infinite;
          -moz-animation: fade 4s 3.75s infinite;
          -o-animation: fade 4s 3.75s infinite;
        }
        .column .row:nth-of-type(16) {
          -webkit-animation: fade 4s 4s infinite;
          -moz-animation: fade 4s 4s infinite;
          -o-animation: fade 4s 4s infinite;
        }
        .column .row:nth-of-type(17) {
          -webkit-animation: fade 4s 4.25s infinite;
          -moz-animation: fade 4s 4.25s infinite;
          -o-animation: fade 4s 4.25s infinite;
        }
        .column .row:nth-of-type(18) {
          -webkit-animation: fade 4s 4.5s infinite;
          -moz-animation: fade 4s 4.5s infinite;
          -o-animation: fade 4s 4.5s infinite;
        }
        .column .row:nth-of-type(19) {
          -webkit-animation: fade 4s 4.75s infinite;
          -moz-animation: fade 4s 4.75s infinite;
          -o-animation: fade 4s 4.75s infinite;
        }
        .column .row:nth-of-type(20) {
          -webkit-animation: fade 4s 5s infinite;
          -moz-animation: fade 4s 5s infinite;
          -o-animation: fade 4s 5s infinite;
        }
        .column .row:nth-of-type(21) {
          -webkit-animation: fade 4s 5.25s infinite;
          -moz-animation: fade 4s 5.25s infinite;
          -o-animation: fade 4s 5.25s infinite;
        }
        .column .row:nth-of-type(22) {
          -webkit-animation: fade 4s 5.5s infinite;
          -moz-animation: fade 4s 5.5s infinite;
          -o-animation: fade 4s 5.5s infinite;
        }
        .column .row:nth-of-type(23) {
          -webkit-animation: fade 4s 5.75s infinite;
          -moz-animation: fade 4s 5.75s infinite;
          -o-animation: fade 4s 5.75s infinite;
        }
        .column .row:nth-of-type(24) {
          -webkit-animation: fade 4s 6s infinite;
          -moz-animation: fade 4s 6s infinite;
          -o-animation: fade 4s 6s infinite;
        }
        .column .row:nth-of-type(25) {
          -webkit-animation: fade 4s 6.25s infinite;
          -moz-animation: fade 4s 6.25s infinite;
          -o-animation: fade 4s 6.25s infinite;
        }
        .column .row:nth-of-type(26) {
          -webkit-animation: fade 4s 6.5s infinite;
          -moz-animation: fade 4s 6.5s infinite;
          -o-animation: fade 4s 6.5s infinite;
        }
        .column .row:nth-of-type(27) {
          -webkit-animation: fade 4s 6.75s infinite;
          -moz-animation: fade 4s 6.75s infinite;
          -o-animation: fade 4s 6.75s infinite;
        }
        .column .row:nth-of-type(28) {
          -webkit-animation: fade 4s 7s infinite;
          -moz-animation: fade 4s 7s infinite;
          -o-animation: fade 4s 7s infinite;
        }
        .column .row:nth-of-type(29) {
          -webkit-animation: fade 4s 7.25s infinite;
          -moz-animation: fade 4s 7.25s infinite;
          -o-animation: fade 4s 7.25s infinite;
        }
        .column .row:nth-of-type(30) {
          -webkit-animation: fade 4s 7.5s infinite;
          -moz-animation: fade 4s 7.5s infinite;
          -o-animation: fade 4s 7.5s infinite;
        }
        .column .row:nth-of-type(31) {
          -webkit-animation: fade 4s 7.75s infinite;
          -moz-animation: fade 4s 7.75s infinite;
          -o-animation: fade 4s 7.75s infinite;
        }
        .column .row:nth-of-type(32) {
          -webkit-animation: fade 4s 8s infinite;
          -moz-animation: fade 4s 8s infinite;
          -o-animation: fade 4s 8s infinite;
        }
        .column .row:nth-of-type(33) {
          -webkit-animation: fade 4s 8.25s infinite;
          -moz-animation: fade 4s 8.25s infinite;
          -o-animation: fade 4s 8.25s infinite;
        }
        .column .row:nth-of-type(34) {
          -webkit-animation: fade 4s 8.5s infinite;
          -moz-animation: fade 4s 8.5s infinite;
          -o-animation: fade 4s 8.5s infinite;
        }
        .column .row:nth-of-type(35) {
          -webkit-animation: fade 4s 8.75s infinite;
          -moz-animation: fade 4s 8.75s infinite;
          -o-animation: fade 4s 8.75s infinite;
        }
        .column .row:nth-of-type(36) {
          -webkit-animation: fade 4s 9s infinite;
          -moz-animation: fade 4s 9s infinite;
          -o-animation: fade 4s 9s infinite;
        }
        .column .row:nth-of-type(37) {
          -webkit-animation: fade 4s 9.25s infinite;
          -moz-animation: fade 4s 9.25s infinite;
          -o-animation: fade 4s 9.25s infinite;
        }
        .column .row:nth-of-type(38) {
          -webkit-animation: fade 4s 9.5s infinite;
          -moz-animation: fade 4s 9.5s infinite;
          -o-animation: fade 4s 9.5s infinite;
        }
        .column .row:nth-of-type(39) {
          -webkit-animation: fade 4s 9.75s infinite;
          -moz-animation: fade 4s 9.75s infinite;
          -o-animation: fade 4s 9.75s infinite;
        }
        .column .row:nth-of-type(40) {
          -webkit-animation: fade 4s 10s infinite;
          -moz-animation: fade 4s 10s infinite;
          -o-animation: fade 4s 10s infinite;
        }
        .column .row:nth-of-type(41) {
          -webkit-animation: fade 4s 10.25s infinite;
          -moz-animation: fade 4s 10.25s infinite;
          -o-animation: fade 4s 10.25s infinite;
        }
        .column .row:nth-of-type(42) {
          -webkit-animation: fade 4s 10.5s infinite;
          -moz-animation: fade 4s 10.5s infinite;
          -o-animation: fade 4s 10.5s infinite;
        }
        .column .row:nth-of-type(43) {
          -webkit-animation: fade 4s 10.75s infinite;
          -moz-animation: fade 4s 10.75s infinite;
          -o-animation: fade 4s 10.75s infinite;
        }
        .column .row:nth-of-type(44) {
          -webkit-animation: fade 4s 11s infinite;
          -moz-animation: fade 4s 11s infinite;
          -o-animation: fade 4s 11s infinite;
        }
        .column .row:nth-of-type(45) {
          -webkit-animation: fade 4s 11.25s infinite;
          -moz-animation: fade 4s 11.25s infinite;
          -o-animation: fade 4s 11.25s infinite;
        }
        .column .row:nth-of-type(46) {
          -webkit-animation: fade 4s 11.5s infinite;
          -moz-animation: fade 4s 11.5s infinite;
          -o-animation: fade 4s 11.5s infinite;
        }
        .column .row:nth-of-type(47) {
          -webkit-animation: fade 4s 11.75s infinite;
          -moz-animation: fade 4s 11.75s infinite;
          -o-animation: fade 4s 11.75s infinite;
        }
        .column .row:nth-of-type(48) {
          -webkit-animation: fade 4s 12s infinite;
          -moz-animation: fade 4s 12s infinite;
          -o-animation: fade 4s 12s infinite;
        }
        .column .row:nth-of-type(49) {
          -webkit-animation: fade 4s 12.25s infinite;
          -moz-animation: fade 4s 12.25s infinite;
          -o-animation: fade 4s 12.25s infinite;
        }
        .column .row:nth-of-type(50) {
          -webkit-animation: fade 4s 12.5s infinite;
          -moz-animation: fade 4s 12.5s infinite;
          -o-animation: fade 4s 12.5s infinite;
        }
        .column .row:nth-of-type(51) {
          -webkit-animation: fade 4s 12.75s infinite;
          -moz-animation: fade 4s 12.75s infinite;
          -o-animation: fade 4s 12.75s infinite;
        }
        .column .row:nth-of-type(52) {
          -webkit-animation: fade 4s 13s infinite;
          -moz-animation: fade 4s 13s infinite;
          -o-animation: fade 4s 13s infinite;
        }
        .column .row:nth-of-type(53) {
          -webkit-animation: fade 4s 13.25s infinite;
          -moz-animation: fade 4s 13.25s infinite;
          -o-animation: fade 4s 13.25s infinite;
        }
        .column .row:nth-of-type(54) {
          -webkit-animation: fade 4s 13.5s infinite;
          -moz-animation: fade 4s 13.5s infinite;
          -o-animation: fade 4s 13.5s infinite;
        }
        .column .row:nth-of-type(55) {
          -webkit-animation: fade 4s 13.75s infinite;
          -moz-animation: fade 4s 13.75s infinite;
          -o-animation: fade 4s 13.75s infinite;
        }
        .column .row:nth-of-type(56) {
          -webkit-animation: fade 4s 14s infinite;
          -moz-animation: fade 4s 14s infinite;
          -o-animation: fade 4s 14s infinite;
        }
        .column .row:nth-of-type(57) {
          -webkit-animation: fade 4s 14.25s infinite;
          -moz-animation: fade 4s 14.25s infinite;
          -o-animation: fade 4s 14.25s infinite;
        }
        .column .row:nth-of-type(58) {
          -webkit-animation: fade 4s 14.5s infinite;
          -moz-animation: fade 4s 14.5s infinite;
          -o-animation: fade 4s 14.5s infinite;
        }
        .column .row:nth-of-type(59) {
          -webkit-animation: fade 4s 14.75s infinite;
          -moz-animation: fade 4s 14.75s infinite;
          -o-animation: fade 4s 14.75s infinite;
        }
        .column .row:nth-of-type(60) {
          -webkit-animation: fade 4s 15s infinite;
          -moz-animation: fade 4s 15s infinite;
          -o-animation: fade 4s 15s infinite;
        }
        .column .row:nth-of-type(61) {
          -webkit-animation: fade 4s 15.25s infinite;
          -moz-animation: fade 4s 15.25s infinite;
          -o-animation: fade 4s 15.25s infinite;
        }
        .column .row:nth-of-type(62) {
          -webkit-animation: fade 4s 15.5s infinite;
          -moz-animation: fade 4s 15.5s infinite;
          -o-animation: fade 4s 15.5s infinite;
        }
        .column .row:nth-of-type(63) {
          -webkit-animation: fade 4s 15.75s infinite;
          -moz-animation: fade 4s 15.75s infinite;
          -o-animation: fade 4s 15.75s infinite;
        }
        .column .row:nth-of-type(64) {
          -webkit-animation: fade 4s 16s infinite;
          -moz-animation: fade 4s 16s infinite;
          -o-animation: fade 4s 16s infinite;
        }
        .column .row:nth-of-type(65) {
          -webkit-animation: fade 4s 16.25s infinite;
          -moz-animation: fade 4s 16.25s infinite;
          -o-animation: fade 4s 16.25s infinite;
        }
        .column .row:nth-of-type(66) {
          -webkit-animation: fade 4s 16.5s infinite;
          -moz-animation: fade 4s 16.5s infinite;
          -o-animation: fade 4s 16.5s infinite;
        }
        .column .row:nth-of-type(67) {
          -webkit-animation: fade 4s 16.75s infinite;
          -moz-animation: fade 4s 16.75s infinite;
          -o-animation: fade 4s 16.75s infinite;
        }
        .column .row:nth-of-type(68) {
          -webkit-animation: fade 4s 17s infinite;
          -moz-animation: fade 4s 17s infinite;
          -o-animation: fade 4s 17s infinite;
        }
        .column .row:nth-of-type(69) {
          -webkit-animation: fade 4s 17.25s infinite;
          -moz-animation: fade 4s 17.25s infinite;
          -o-animation: fade 4s 17.25s infinite;
        }
        .column .row:nth-of-type(70) {
          -webkit-animation: fade 4s 17.5s infinite;
          -moz-animation: fade 4s 17.5s infinite;
          -o-animation: fade 4s 17.5s infinite;
        }
        .column .row:nth-of-type(71) {
          -webkit-animation: fade 4s 17.75s infinite;
          -moz-animation: fade 4s 17.75s infinite;
          -o-animation: fade 4s 17.75s infinite;
        }
        .column .row:nth-of-type(72) {
          -webkit-animation: fade 4s 18s infinite;
          -moz-animation: fade 4s 18s infinite;
          -o-animation: fade 4s 18s infinite;
        }
        .column .row:nth-of-type(73) {
          -webkit-animation: fade 4s 18.25s infinite;
          -moz-animation: fade 4s 18.25s infinite;
          -o-animation: fade 4s 18.25s infinite;
        }
        .column .row:nth-of-type(74) {
          -webkit-animation: fade 4s 18.5s infinite;
          -moz-animation: fade 4s 18.5s infinite;
          -o-animation: fade 4s 18.5s infinite;
        }
        .column .row:nth-of-type(75) {
          -webkit-animation: fade 4s 18.75s infinite;
          -moz-animation: fade 4s 18.75s infinite;
          -o-animation: fade 4s 18.75s infinite;
        }
        .column .row:nth-of-type(76) {
          -webkit-animation: fade 4s 19s infinite;
          -moz-animation: fade 4s 19s infinite;
          -o-animation: fade 4s 19s infinite;
        }
        .column .row:nth-of-type(77) {
          -webkit-animation: fade 4s 19.25s infinite;
          -moz-animation: fade 4s 19.25s infinite;
          -o-animation: fade 4s 19.25s infinite;
        }
        .column .row:nth-of-type(78) {
          -webkit-animation: fade 4s 19.5s infinite;
          -moz-animation: fade 4s 19.5s infinite;
          -o-animation: fade 4s 19.5s infinite;
        }
        .column .row:nth-of-type(79) {
          -webkit-animation: fade 4s 19.75s infinite;
          -moz-animation: fade 4s 19.75s infinite;
          -o-animation: fade 4s 19.75s infinite;
        }
        .column .row:nth-of-type(80) {
          -webkit-animation: fade 4s 20s infinite;
          -moz-animation: fade 4s 20s infinite;
          -o-animation: fade 4s 20s infinite;
        }
        .column .row:nth-of-type(81) {
          -webkit-animation: fade 4s 20.25s infinite;
          -moz-animation: fade 4s 20.25s infinite;
          -o-animation: fade 4s 20.25s infinite;
        }
        .column .row:nth-of-type(82) {
          -webkit-animation: fade 4s 20.5s infinite;
          -moz-animation: fade 4s 20.5s infinite;
          -o-animation: fade 4s 20.5s infinite;
        }
        .column .row:nth-of-type(83) {
          -webkit-animation: fade 4s 20.75s infinite;
          -moz-animation: fade 4s 20.75s infinite;
          -o-animation: fade 4s 20.75s infinite;
        }
        .column .row:nth-of-type(84) {
          -webkit-animation: fade 4s 21s infinite;
          -moz-animation: fade 4s 21s infinite;
          -o-animation: fade 4s 21s infinite;
        }
        .column .row:nth-of-type(85) {
          -webkit-animation: fade 4s 21.25s infinite;
          -moz-animation: fade 4s 21.25s infinite;
          -o-animation: fade 4s 21.25s infinite;
        }
        .column .row:nth-of-type(86) {
          -webkit-animation: fade 4s 21.5s infinite;
          -moz-animation: fade 4s 21.5s infinite;
          -o-animation: fade 4s 21.5s infinite;
        }
        .column .row:nth-of-type(87) {
          -webkit-animation: fade 4s 21.75s infinite;
          -moz-animation: fade 4s 21.75s infinite;
          -o-animation: fade 4s 21.75s infinite;
        }
        .column .row:nth-of-type(88) {
          -webkit-animation: fade 4s 22s infinite;
          -moz-animation: fade 4s 22s infinite;
          -o-animation: fade 4s 22s infinite;
        }
        .column .row:nth-of-type(89) {
          -webkit-animation: fade 4s 22.25s infinite;
          -moz-animation: fade 4s 22.25s infinite;
          -o-animation: fade 4s 22.25s infinite;
        }
        .column .row:nth-of-type(90) {
          -webkit-animation: fade 4s 22.5s infinite;
          -moz-animation: fade 4s 22.5s infinite;
          -o-animation: fade 4s 22.5s infinite;
        }
        .column .row:nth-of-type(91) {
          -webkit-animation: fade 4s 22.75s infinite;
          -moz-animation: fade 4s 22.75s infinite;
          -o-animation: fade 4s 22.75s infinite;
        }
        .column .row:nth-of-type(92) {
          -webkit-animation: fade 4s 23s infinite;
          -moz-animation: fade 4s 23s infinite;
          -o-animation: fade 4s 23s infinite;
        }
        .column .row:nth-of-type(93) {
          -webkit-animation: fade 4s 23.25s infinite;
          -moz-animation: fade 4s 23.25s infinite;
          -o-animation: fade 4s 23.25s infinite;
        }
        .column .row:nth-of-type(94) {
          -webkit-animation: fade 4s 23.5s infinite;
          -moz-animation: fade 4s 23.5s infinite;
          -o-animation: fade 4s 23.5s infinite;
        }
        .column .row:nth-of-type(95) {
          -webkit-animation: fade 4s 23.75s infinite;
          -moz-animation: fade 4s 23.75s infinite;
          -o-animation: fade 4s 23.75s infinite;
        }
        .column .row:nth-of-type(96) {
          -webkit-animation: fade 4s 24s infinite;
          -moz-animation: fade 4s 24s infinite;
          -o-animation: fade 4s 24s infinite;
        }
        .column .row:nth-of-type(97) {
          -webkit-animation: fade 4s 24.25s infinite;
          -moz-animation: fade 4s 24.25s infinite;
          -o-animation: fade 4s 24.25s infinite;
        }
        .column .row:nth-of-type(98) {
          -webkit-animation: fade 4s 24.5s infinite;
          -moz-animation: fade 4s 24.5s infinite;
          -o-animation: fade 4s 24.5s infinite;
        }
        .column .row:nth-of-type(99) {
          -webkit-animation: fade 4s 24.75s infinite;
          -moz-animation: fade 4s 24.75s infinite;
          -o-animation: fade 4s 24.75s infinite;
        }
        .column .row:nth-of-type(100) {
          -webkit-animation: fade 4s 25s infinite;
          -moz-animation: fade 4s 25s infinite;
          -o-animation: fade 4s 25s infinite;
        }

        @-webkit-keyframes fade {
          0% {
            opacity: 0;
          }
          20% {
            opacity: 1;
          }
          50% {
            opacity: 0;
          }
          100% {
            opacity: 0;
          }
        }

        .logo {
          width: 60%;
        }

    </style>
</head>

<body>
    <div class='column'>
  <div class='row'>
    <p>&#8487;</p>
  </div>
  <div class='row'>
    <p>&#x02135;</p>
  </div>
  <div class='row'>
    <p>&#x02041;</p>
  </div>
  <div class='row'>
    <p>&#x0210F;</p>
  </div>
  <div class='row'>
    <p>&#x0210C;</p>
  </div>
  <div class='row'>
    <p>&#x02111;;</p>
  </div>
  <div class='row'>
    <p>&#x02130;</p>
  </div>
  <div class='row'>
    <p>&#x00427;</p>
  </div>
  <div class='row'>
    <p>&#8713;</p>
  </div>
  <div class='row'>
    <p>&#8721;</p>
  </div>
  <div class='row'>
    <p>&#8776;</p>
  </div>
  <div class='row'>
    <p>&#8836;</p>
  </div>
  <div class='row'>
    <p>&#950;</p>
  </div>
  <div class='row'>
    <p>&#958;</p>
  </div>
  <div class='row'>
    <p>&#977;</p>
  </div>
  <div class='row'>
    <p>&#8487;</p>
  </div>
  <div class='row'>
    <p>&#x02135;</p>
  </div>
  <div class='row'>
    <p>&#x02041;</p>
  </div>
  <div class='row'>
    <p>&#x0210F;</p>
  </div>
  <div class='row'>
    <p>&#x0210C;</p>
  </div>
  <div class='row'>
    <p>&#x02111;;</p>
  </div>
  <div class='row'>
    <p>&#x02130;</p>
  </div>
  <div class='row'>
    <p>&#x00427;</p>
  </div>
  <div class='row'>
    <p>&#8713;</p>
  </div>
  <div class='row'>
    <p>&#8721;</p>
  </div>
  <div class='row'>
    <p>&#8776;</p>
  </div>
  <div class='row'>
    <p>&#8836;</p>
  </div>
  <div class='row'>
    <p>&#950;</p>
  </div>
  <div class='row'>
    <p>&#958;</p>
  </div>
  <div class='row'>
    <p>&#977;</p>
  </div>
  <div class='row'>
    <p>&#8487;</p>
  </div>
  <div class='row'>
    <p>&#x02135;</p>
  </div>
  <div class='row'>
    <p>&#x02041;</p>
  </div>
  <div class='row'>
    <p>&#x0210F;</p>
  </div>
  <div class='row'>
    <p>&#x0210C;</p>
  </div>
  <div class='row'>
    <p>&#x02111;;</p>
  </div>
  <div class='row'>
    <p>&#x02130;</p>
  </div>
  <div class='row'>
    <p>&#x00427;</p>
  </div>
  <div class='row'>
    <p>&#8713;</p>
  </div>
  <div class='row'>
    <p>&#8721;</p>
  </div>
  <div class='row'>
    <p>&#8776;</p>
  </div>
  <div class='row'>
    <p>&#8836;</p>
  </div>
  <div class='row'>
    <p>&#950;</p>
  </div>
  <div class='row'>
    <p>&#958;</p>
  </div>
  <div class='row'>
    <p>&#977;</p>
  </div>
</div>
<div class='column'>
  <div class='row'>
    <p>&#8487;</p>
  </div>
  <div class='row'>
    <p>&#x02135;</p>
  </div>
  <div class='row'>
    <p>&#x02041;</p>
  </div>
  <div class='row'>
    <p>&#x0210F;</p>
  </div>
  <div class='row'>
    <p>&#x0210C;</p>
  </div>
  <div class='row'>
    <p>&#x02111;;</p>
  </div>
  <div class='row'>
    <p>&#x02130;</p>
  </div>
  <div class='row'>
    <p>&#x00427;</p>
  </div>
  <div class='row'>
    <p>&#8713;</p>
  </div>
  <div class='row'>
    <p>&#8721;</p>
  </div>
  <div class='row'>
    <p>&#8776;</p>
  </div>
  <div class='row'>
    <p>&#8836;</p>
  </div>
  <div class='row'>
    <p>&#950;</p>
  </div>
  <div class='row'>
    <p>&#958;</p>
  </div>
  <div class='row'>
    <p>&#977;</p>
  </div>
  <div class='row'>
    <p>&#8487;</p>
  </div>
  <div class='row'>
    <p>&#x02135;</p>
  </div>
  <div class='row'>
    <p>&#x02041;</p>
  </div>
  <div class='row'>
    <p>&#x0210F;</p>
  </div>
  <div class='row'>
    <p>&#x0210C;</p>
  </div>
  <div class='row'>
    <p>&#x02111;;</p>
  </div>
  <div class='row'>
    <p>&#x02130;</p>
  </div>
  <div class='row'>
    <p>&#x00427;</p>
  </div>
  <div class='row'>
    <p>&#8713;</p>
  </div>
  <div class='row'>
    <p>&#8721;</p>
  </div>
  <div class='row'>
    <p>&#8776;</p>
  </div>
  <div class='row'>
    <p>&#8836;</p>
  </div>
  <div class='row'>
    <p>&#950;</p>
  </div>
  <div class='row'>
    <p>&#958;</p>
  </div>
  <div class='row'>
    <p>&#977;</p>
  </div>
  <div class='row'>
    <p>&#8487;</p>
  </div>
  <div class='row'>
    <p>&#x02135;</p>
  </div>
  <div class='row'>
    <p>&#x02041;</p>
  </div>
  <div class='row'>
    <p>&#x0210F;</p>
  </div>
  <div class='row'>
    <p>&#x0210C;</p>
  </div>
  <div class='row'>
    <p>&#x02111;;</p>
  </div>
  <div class='row'>
    <p>&#x02130;</p>
  </div>
  <div class='row'>
    <p>&#x00427;</p>
  </div>
  <div class='row'>
    <p>&#8713;</p>
  </div>
  <div class='row'>
    <p>&#8721;</p>
  </div>
  <div class='row'>
    <p>&#8776;</p>
  </div>
  <div class='row'>
    <p>&#8836;</p>
  </div>
  <div class='row'>
    <p>&#950;</p>
  </div>
  <div class='row'>
    <p>&#958;</p>
  </div>
  <div class='row'>
    <p>&#977;</p>
  </div>
</div>
<div class='column'>
  <div class='row'>
    <p>&#8487;</p>
  </div>
  <div class='row'>
    <p>&#x02135;</p>
  </div>
  <div class='row'>
    <p>&#x02041;</p>
  </div>
  <div class='row'>
    <p>&#x0210F;</p>
  </div>
  <div class='row'>
    <p>&#x0210C;</p>
  </div>
  <div class='row'>
    <p>&#x02111;;</p>
  </div>
  <div class='row'>
    <p>&#x02130;</p>
  </div>
  <div class='row'>
    <p>&#x00427;</p>
  </div>
  <div class='row'>
    <p>&#8713;</p>
  </div>
  <div class='row'>
    <p>&#8721;</p>
  </div>
  <div class='row'>
    <p>&#8776;</p>
  </div>
  <div class='row'>
    <p>&#8836;</p>
  </div>
  <div class='row'>
    <p>&#950;</p>
  </div>
  <div class='row'>
    <p>&#958;</p>
  </div>
  <div class='row'>
    <p>&#977;</p>
  </div>
  <div class='row'>
    <p>&#8487;</p>
  </div>
  <div class='row'>
    <p>&#x02135;</p>
  </div>
  <div class='row'>
    <p>&#x02041;</p>
  </div>
  <div class='row'>
    <p>&#x0210F;</p>
  </div>
  <div class='row'>
    <p>&#x0210C;</p>
  </div>
  <div class='row'>
    <p>&#x02111;;</p>
  </div>
  <div class='row'>
    <p>&#x02130;</p>
  </div>
  <div class='row'>
    <p>&#x00427;</p>
  </div>
  <div class='row'>
    <p>&#8713;</p>
  </div>
  <div class='row'>
    <p>&#8721;</p>
  </div>
  <div class='row'>
    <p>&#8776;</p>
  </div>
  <div class='row'>
    <p>&#8836;</p>
  </div>
  <div class='row'>
    <p>&#950;</p>
  </div>
  <div class='row'>
    <p>&#958;</p>
  </div>
  <div class='row'>
    <p>&#977;</p>
  </div>
  <div class='row'>
    <p>&#8487;</p>
  </div>
  <div class='row'>
    <p>&#x02135;</p>
  </div>
  <div class='row'>
    <p>&#x02041;</p>
  </div>
  <div class='row'>
    <p>&#x0210F;</p>
  </div>
  <div class='row'>
    <p>&#x0210C;</p>
  </div>
  <div class='row'>
    <p>&#x02111;;</p>
  </div>
  <div class='row'>
    <p>&#x02130;</p>
  </div>
  <div class='row'>
    <p>&#x00427;</p>
  </div>
  <div class='row'>
    <p>&#8713;</p>
  </div>
  <div class='row'>
    <p>&#8721;</p>
  </div>
  <div class='row'>
    <p>&#8776;</p>
  </div>
  <div class='row'>
    <p>&#8836;</p>
  </div>
  <div class='row'>
    <p>&#950;</p>
  </div>
  <div class='row'>
    <p>&#958;</p>
  </div>
  <div class='row'>
    <p>&#977;</p>
  </div>
</div>
<div class='column'>
  <div class='row'>
    <p>&#8487;</p>
  </div>
  <div class='row'>
    <p>&#x02135;</p>
  </div>
  <div class='row'>
    <p>&#x02041;</p>
  </div>
  <div class='row'>
    <p>&#x0210F;</p>
  </div>
  <div class='row'>
    <p>&#x0210C;</p>
  </div>
  <div class='row'>
    <p>&#x02111;;</p>
  </div>
  <div class='row'>
    <p>&#x02130;</p>
  </div>
  <div class='row'>
    <p>&#x00427;</p>
  </div>
  <div class='row'>
    <p>&#8713;</p>
  </div>
  <div class='row'>
    <p>&#8721;</p>
  </div>
  <div class='row'>
    <p>&#8776;</p>
  </div>
  <div class='row'>
    <p>&#8836;</p>
  </div>
  <div class='row'>
    <p>&#950;</p>
  </div>
  <div class='row'>
    <p>&#958;</p>
  </div>
  <div class='row'>
    <p>&#977;</p>
  </div>
  <div class='row'>
    <p>&#8487;</p>
  </div>
  <div class='row'>
    <p>&#x02135;</p>
  </div>
  <div class='row'>
    <p>&#x02041;</p>
  </div>
  <div class='row'>
    <p>&#x0210F;</p>
  </div>
  <div class='row'>
    <p>&#x0210C;</p>
  </div>
  <div class='row'>
    <p>&#x02111;;</p>
  </div>
  <div class='row'>
    <p>&#x02130;</p>
  </div>
  <div class='row'>
    <p>&#x00427;</p>
  </div>
  <div class='row'>
    <p>&#8713;</p>
  </div>
  <div class='row'>
    <p>&#8721;</p>
  </div>
  <div class='row'>
    <p>&#8776;</p>
  </div>
  <div class='row'>
    <p>&#8836;</p>
  </div>
  <div class='row'>
    <p>&#950;</p>
  </div>
  <div class='row'>
    <p>&#958;</p>
  </div>
  <div class='row'>
    <p>&#977;</p>
  </div>
  <div class='row'>
    <p>&#8487;</p>
  </div>
  <div class='row'>
    <p>&#x02135;</p>
  </div>
  <div class='row'>
    <p>&#x02041;</p>
  </div>
  <div class='row'>
    <p>&#x0210F;</p>
  </div>
  <div class='row'>
    <p>&#x0210C;</p>
  </div>
  <div class='row'>
    <p>&#x02111;;</p>
  </div>
  <div class='row'>
    <p>&#x02130;</p>
  </div>
  <div class='row'>
    <p>&#x00427;</p>
  </div>
  <div class='row'>
    <p>&#8713;</p>
  </div>
  <div class='row'>
    <p>&#8721;</p>
  </div>
  <div class='row'>
    <p>&#8776;</p>
  </div>
  <div class='row'>
    <p>&#8836;</p>
  </div>
  <div class='row'>
    <p>&#950;</p>
  </div>
  <div class='row'>
    <p>&#958;</p>
  </div>
  <div class='row'>
    <p>&#977;</p>
  </div>
</div>
<div class='column'>
  <div class='row'>
    <p>&#8487;</p>
  </div>
  <div class='row'>
    <p>&#x02135;</p>
  </div>
  <div class='row'>
    <p>&#x02041;</p>
  </div>
  <div class='row'>
    <p>&#x0210F;</p>
  </div>
  <div class='row'>
    <p>&#x0210C;</p>
  </div>
  <div class='row'>
    <p>&#x02111;;</p>
  </div>
  <div class='row'>
    <p>&#x02130;</p>
  </div>
  <div class='row'>
    <p>&#x00427;</p>
  </div>
  <div class='row'>
    <p>&#8713;</p>
  </div>
  <div class='row'>
    <p>&#8721;</p>
  </div>
  <div class='row'>
    <p>&#8776;</p>
  </div>
  <div class='row'>
    <p>&#8836;</p>
  </div>
  <div class='row'>
    <p>&#950;</p>
  </div>
  <div class='row'>
    <p>&#958;</p>
  </div>
  <div class='row'>
    <p>&#977;</p>
  </div>
  <div class='row'>
    <p>&#8487;</p>
  </div>
  <div class='row'>
    <p>&#x02135;</p>
  </div>
  <div class='row'>
    <p>&#x02041;</p>
  </div>
  <div class='row'>
    <p>&#x0210F;</p>
  </div>
  <div class='row'>
    <p>&#x0210C;</p>
  </div>
  <div class='row'>
    <p>&#x02111;;</p>
  </div>
  <div class='row'>
    <p>&#x02130;</p>
  </div>
  <div class='row'>
    <p>&#x00427;</p>
  </div>
  <div class='row'>
    <p>&#8713;</p>
  </div>
  <div class='row'>
    <p>&#8721;</p>
  </div>
  <div class='row'>
    <p>&#8776;</p>
  </div>
  <div class='row'>
    <p>&#8836;</p>
  </div>
  <div class='row'>
    <p>&#950;</p>
  </div>
  <div class='row'>
    <p>&#958;</p>
  </div>
  <div class='row'>
    <p>&#977;</p>
  </div>
  <div class='row'>
    <p>&#8487;</p>
  </div>
  <div class='row'>
    <p>&#x02135;</p>
  </div>
  <div class='row'>
    <p>&#x02041;</p>
  </div>
  <div class='row'>
    <p>&#x0210F;</p>
  </div>
  <div class='row'>
    <p>&#x0210C;</p>
  </div>
  <div class='row'>
    <p>&#x02111;;</p>
  </div>
  <div class='row'>
    <p>&#x02130;</p>
  </div>
  <div class='row'>
    <p>&#x00427;</p>
  </div>
  <div class='row'>
    <p>&#8713;</p>
  </div>
  <div class='row'>
    <p>&#8721;</p>
  </div>
  <div class='row'>
    <p>&#8776;</p>
  </div>
  <div class='row'>
    <p>&#8836;</p>
  </div>
  <div class='row'>
    <p>&#950;</p>
  </div>
  <div class='row'>
    <p>&#958;</p>
  </div>
  <div class='row'>
    <p>&#977;</p>
  </div>
</div>
<div class='column'>
  <div class='row'>
    <p>&#8487;</p>
  </div>
  <div class='row'>
    <p>&#x02135;</p>
  </div>
  <div class='row'>
    <p>&#x02041;</p>
  </div>
  <div class='row'>
    <p>&#x0210F;</p>
  </div>
  <div class='row'>
    <p>&#x0210C;</p>
  </div>
  <div class='row'>
    <p>&#x02111;;</p>
  </div>
  <div class='row'>
    <p>&#x02130;</p>
  </div>
  <div class='row'>
    <p>&#x00427;</p>
  </div>
  <div class='row'>
    <p>&#8713;</p>
  </div>
  <div class='row'>
    <p>&#8721;</p>
  </div>
  <div class='row'>
    <p>&#8776;</p>
  </div>
  <div class='row'>
    <p>&#8836;</p>
  </div>
  <div class='row'>
    <p>&#950;</p>
  </div>
  <div class='row'>
    <p>&#958;</p>
  </div>
  <div class='row'>
    <p>&#977;</p>
  </div>
  <div class='row'>
    <p>&#8487;</p>
  </div>
  <div class='row'>
    <p>&#x02135;</p>
  </div>
  <div class='row'>
    <p>&#x02041;</p>
  </div>
  <div class='row'>
    <p>&#x0210F;</p>
  </div>
  <div class='row'>
    <p>&#x0210C;</p>
  </div>
  <div class='row'>
    <p>&#x02111;;</p>
  </div>
  <div class='row'>
    <p>&#x02130;</p>
  </div>
  <div class='row'>
    <p>&#x00427;</p>
  </div>
  <div class='row'>
    <p>&#8713;</p>
  </div>
  <div class='row'>
    <p>&#8721;</p>
  </div>
  <div class='row'>
    <p>&#8776;</p>
  </div>
  <div class='row'>
    <p>&#8836;</p>
  </div>
  <div class='row'>
    <p>&#950;</p>
  </div>
  <div class='row'>
    <p>&#958;</p>
  </div>
  <div class='row'>
    <p>&#977;</p>
  </div>
  <div class='row'>
    <p>&#8487;</p>
  </div>
  <div class='row'>
    <p>&#x02135;</p>
  </div>
  <div class='row'>
    <p>&#x02041;</p>
  </div>
  <div class='row'>
    <p>&#x0210F;</p>
  </div>
  <div class='row'>
    <p>&#x0210C;</p>
  </div>
  <div class='row'>
    <p>&#x02111;;</p>
  </div>
  <div class='row'>
    <p>&#x02130;</p>
  </div>
  <div class='row'>
    <p>&#x00427;</p>
  </div>
  <div class='row'>
    <p>&#8713;</p>
  </div>
  <div class='row'>
    <p>&#8721;</p>
  </div>
  <div class='row'>
    <p>&#8776;</p>
  </div>
  <div class='row'>
    <p>&#8836;</p>
  </div>
  <div class='row'>
    <p>&#950;</p>
  </div>
  <div class='row'>
    <p>&#958;</p>
  </div>
  <div class='row'>
    <p>&#977;</p>
  </div>
</div>
<div class='column'>
  <div class='row'>
    <p>&#8487;</p>
  </div>
  <div class='row'>
    <p>&#x02135;</p>
  </div>
  <div class='row'>
    <p>&#x02041;</p>
  </div>
  <div class='row'>
    <p>&#x0210F;</p>
  </div>
  <div class='row'>
    <p>&#x0210C;</p>
  </div>
  <div class='row'>
    <p>&#x02111;;</p>
  </div>
  <div class='row'>
    <p>&#x02130;</p>
  </div>
  <div class='row'>
    <p>&#x00427;</p>
  </div>
  <div class='row'>
    <p>&#8713;</p>
  </div>
  <div class='row'>
    <p>&#8721;</p>
  </div>
  <div class='row'>
    <p>&#8776;</p>
  </div>
  <div class='row'>
    <p>&#8836;</p>
  </div>
  <div class='row'>
    <p>&#950;</p>
  </div>
  <div class='row'>
    <p>&#958;</p>
  </div>
  <div class='row'>
    <p>&#977;</p>
  </div>
  <div class='row'>
    <p>&#8487;</p>
  </div>
  <div class='row'>
    <p>&#x02135;</p>
  </div>
  <div class='row'>
    <p>&#x02041;</p>
  </div>
  <div class='row'>
    <p>&#x0210F;</p>
  </div>
  <div class='row'>
    <p>&#x0210C;</p>
  </div>
  <div class='row'>
    <p>&#x02111;;</p>
  </div>
  <div class='row'>
    <p>&#x02130;</p>
  </div>
  <div class='row'>
    <p>&#x00427;</p>
  </div>
  <div class='row'>
    <p>&#8713;</p>
  </div>
  <div class='row'>
    <p>&#8721;</p>
  </div>
  <div class='row'>
    <p>&#8776;</p>
  </div>
  <div class='row'>
    <p>&#8836;</p>
  </div>
  <div class='row'>
    <p>&#950;</p>
  </div>
  <div class='row'>
    <p>&#958;</p>
  </div>
  <div class='row'>
    <p>&#977;</p>
  </div>
  <div class='row'>
    <p>&#8487;</p>
  </div>
  <div class='row'>
    <p>&#x02135;</p>
  </div>
  <div class='row'>
    <p>&#x02041;</p>
  </div>
  <div class='row'>
    <p>&#x0210F;</p>
  </div>
  <div class='row'>
    <p>&#x0210C;</p>
  </div>
  <div class='row'>
    <p>&#x02111;;</p>
  </div>
  <div class='row'>
    <p>&#x02130;</p>
  </div>
  <div class='row'>
    <p>&#x00427;</p>
  </div>
  <div class='row'>
    <p>&#8713;</p>
  </div>
  <div class='row'>
    <p>&#8721;</p>
  </div>
  <div class='row'>
    <p>&#8776;</p>
  </div>
  <div class='row'>
    <p>&#8836;</p>
  </div>
  <div class='row'>
    <p>&#950;</p>
  </div>
  <div class='row'>
    <p>&#958;</p>
  </div>
  <div class='row'>
    <p>&#977;</p>
  </div>
</div>
<div class='column'>
  <div class='row'>
    <p>&#8487;</p>
  </div>
  <div class='row'>
    <p>&#x02135;</p>
  </div>
  <div class='row'>
    <p>&#x02041;</p>
  </div>
  <div class='row'>
    <p>&#x0210F;</p>
  </div>
  <div class='row'>
    <p>&#x0210C;</p>
  </div>
  <div class='row'>
    <p>&#x02111;;</p>
  </div>
  <div class='row'>
    <p>&#x02130;</p>
  </div>
  <div class='row'>
    <p>&#x00427;</p>
  </div>
  <div class='row'>
    <p>&#8713;</p>
  </div>
  <div class='row'>
    <p>&#8721;</p>
  </div>
  <div class='row'>
    <p>&#8776;</p>
  </div>
  <div class='row'>
    <p>&#8836;</p>
  </div>
  <div class='row'>
    <p>&#950;</p>
  </div>
  <div class='row'>
    <p>&#958;</p>
  </div>
  <div class='row'>
    <p>&#977;</p>
  </div>
  <div class='row'>
    <p>&#8487;</p>
  </div>
  <div class='row'>
    <p>&#x02135;</p>
  </div>
  <div class='row'>
    <p>&#x02041;</p>
  </div>
  <div class='row'>
    <p>&#x0210F;</p>
  </div>
  <div class='row'>
    <p>&#x0210C;</p>
  </div>
  <div class='row'>
    <p>&#x02111;;</p>
  </div>
  <div class='row'>
    <p>&#x02130;</p>
  </div>
  <div class='row'>
    <p>&#x00427;</p>
  </div>
  <div class='row'>
    <p>&#8713;</p>
  </div>
  <div class='row'>
    <p>&#8721;</p>
  </div>
  <div class='row'>
    <p>&#8776;</p>
  </div>
  <div class='row'>
    <p>&#8836;</p>
  </div>
  <div class='row'>
    <p>&#950;</p>
  </div>
  <div class='row'>
    <p>&#958;</p>
  </div>
  <div class='row'>
    <p>&#977;</p>
  </div>
  <div class='row'>
    <p>&#8487;</p>
  </div>
  <div class='row'>
    <p>&#x02135;</p>
  </div>
  <div class='row'>
    <p>&#x02041;</p>
  </div>
  <div class='row'>
    <p>&#x0210F;</p>
  </div>
  <div class='row'>
    <p>&#x0210C;</p>
  </div>
  <div class='row'>
    <p>&#x02111;;</p>
  </div>
  <div class='row'>
    <p>&#x02130;</p>
  </div>
  <div class='row'>
    <p>&#x00427;</p>
  </div>
  <div class='row'>
    <p>&#8713;</p>
  </div>
  <div class='row'>
    <p>&#8721;</p>
  </div>
  <div class='row'>
    <p>&#8776;</p>
  </div>
  <div class='row'>
    <p>&#8836;</p>
  </div>
  <div class='row'>
    <p>&#950;</p>
  </div>
  <div class='row'>
    <p>&#958;</p>
  </div>
  <div class='row'>
    <p>&#977;</p>
  </div>
</div>
<div class='column'>
  <div class='row'>
    <p>&#8487;</p>
  </div>
  <div class='row'>
    <p>&#x02135;</p>
  </div>
  <div class='row'>
    <p>&#x02041;</p>
  </div>
  <div class='row'>
    <p>&#x0210F;</p>
  </div>
  <div class='row'>
    <p>&#x0210C;</p>
  </div>
  <div class='row'>
    <p>&#x02111;;</p>
  </div>
  <div class='row'>
    <p>&#x02130;</p>
  </div>
  <div class='row'>
    <p>&#x00427;</p>
  </div>
  <div class='row'>
    <p>&#8713;</p>
  </div>
  <div class='row'>
    <p>&#8721;</p>
  </div>
  <div class='row'>
    <p>&#8776;</p>
  </div>
  <div class='row'>
    <p>&#8836;</p>
  </div>
  <div class='row'>
    <p>&#950;</p>
  </div>
  <div class='row'>
    <p>&#958;</p>
  </div>
  <div class='row'>
    <p>&#977;</p>
  </div>
  <div class='row'>
    <p>&#8487;</p>
  </div>
  <div class='row'>
    <p>&#x02135;</p>
  </div>
  <div class='row'>
    <p>&#x02041;</p>
  </div>
  <div class='row'>
    <p>&#x0210F;</p>
  </div>
  <div class='row'>
    <p>&#x0210C;</p>
  </div>
  <div class='row'>
    <p>&#x02111;;</p>
  </div>
  <div class='row'>
    <p>&#x02130;</p>
  </div>
  <div class='row'>
    <p>&#x00427;</p>
  </div>
  <div class='row'>
    <p>&#8713;</p>
  </div>
  <div class='row'>
    <p>&#8721;</p>
  </div>
  <div class='row'>
    <p>&#8776;</p>
  </div>
  <div class='row'>
    <p>&#8836;</p>
  </div>
  <div class='row'>
    <p>&#950;</p>
  </div>
  <div class='row'>
    <p>&#958;</p>
  </div>
  <div class='row'>
    <p>&#977;</p>
  </div>
  <div class='row'>
    <p>&#8487;</p>
  </div>
  <div class='row'>
    <p>&#x02135;</p>
  </div>
  <div class='row'>
    <p>&#x02041;</p>
  </div>
  <div class='row'>
    <p>&#x0210F;</p>
  </div>
  <div class='row'>
    <p>&#x0210C;</p>
  </div>
  <div class='row'>
    <p>&#x02111;;</p>
  </div>
  <div class='row'>
    <p>&#x02130;</p>
  </div>
  <div class='row'>
    <p>&#x00427;</p>
  </div>
  <div class='row'>
    <p>&#8713;</p>
  </div>
  <div class='row'>
    <p>&#8721;</p>
  </div>
  <div class='row'>
    <p>&#8776;</p>
  </div>
  <div class='row'>
    <p>&#8836;</p>
  </div>
  <div class='row'>
    <p>&#950;</p>
  </div>
  <div class='row'>
    <p>&#958;</p>
  </div>
  <div class='row'>
    <p>&#977;</p>
  </div>
</div>
<div class='column'>
  <div class='row'>
    <p>&#8487;</p>
  </div>
  <div class='row'>
    <p>&#x02135;</p>
  </div>
  <div class='row'>
    <p>&#x02041;</p>
  </div>
  <div class='row'>
    <p>&#x0210F;</p>
  </div>
  <div class='row'>
    <p>&#x0210C;</p>
  </div>
  <div class='row'>
    <p>&#x02111;;</p>
  </div>
  <div class='row'>
    <p>&#x02130;</p>
  </div>
  <div class='row'>
    <p>&#x00427;</p>
  </div>
  <div class='row'>
    <p>&#8713;</p>
  </div>
  <div class='row'>
    <p>&#8721;</p>
  </div>
  <div class='row'>
    <p>&#8776;</p>
  </div>
  <div class='row'>
    <p>&#8836;</p>
  </div>
  <div class='row'>
    <p>&#950;</p>
  </div>
  <div class='row'>
    <p>&#958;</p>
  </div>
  <div class='row'>
    <p>&#977;</p>
  </div>
  <div class='row'>
    <p>&#8487;</p>
  </div>
  <div class='row'>
    <p>&#x02135;</p>
  </div>
  <div class='row'>
    <p>&#x02041;</p>
  </div>
  <div class='row'>
    <p>&#x0210F;</p>
  </div>
  <div class='row'>
    <p>&#x0210C;</p>
  </div>
  <div class='row'>
    <p>&#x02111;;</p>
  </div>
  <div class='row'>
    <p>&#x02130;</p>
  </div>
  <div class='row'>
    <p>&#x00427;</p>
  </div>
  <div class='row'>
    <p>&#8713;</p>
  </div>
  <div class='row'>
    <p>&#8721;</p>
  </div>
  <div class='row'>
    <p>&#8776;</p>
  </div>
  <div class='row'>
    <p>&#8836;</p>
  </div>
  <div class='row'>
    <p>&#950;</p>
  </div>
  <div class='row'>
    <p>&#958;</p>
  </div>
  <div class='row'>
    <p>&#977;</p>
  </div>
  <div class='row'>
    <p>&#8487;</p>
  </div>
  <div class='row'>
    <p>&#x02135;</p>
  </div>
  <div class='row'>
    <p>&#x02041;</p>
  </div>
  <div class='row'>
    <p>&#x0210F;</p>
  </div>
  <div class='row'>
    <p>&#x0210C;</p>
  </div>
  <div class='row'>
    <p>&#x02111;;</p>
  </div>
  <div class='row'>
    <p>&#x02130;</p>
  </div>
  <div class='row'>
    <p>&#x00427;</p>
  </div>
  <div class='row'>
    <p>&#8713;</p>
  </div>
  <div class='row'>
    <p>&#8721;</p>
  </div>
  <div class='row'>
    <p>&#8776;</p>
  </div>
  <div class='row'>
    <p>&#8836;</p>
  </div>
  <div class='row'>
    <p>&#950;</p>
  </div>
  <div class='row'>
    <p>&#958;</p>
  </div>
  <div class='row'>
    <p>&#977;</p>
  </div>
</div>
<div class='column'>
  <div class='row'>
    <p>&#8487;</p>
  </div>
  <div class='row'>
    <p>&#x02135;</p>
  </div>
  <div class='row'>
    <p>&#x02041;</p>
  </div>
  <div class='row'>
    <p>&#x0210F;</p>
  </div>
  <div class='row'>
    <p>&#x0210C;</p>
  </div>
  <div class='row'>
    <p>&#x02111;;</p>
  </div>
  <div class='row'>
    <p>&#x02130;</p>
  </div>
  <div class='row'>
    <p>&#x00427;</p>
  </div>
  <div class='row'>
    <p>&#8713;</p>
  </div>
  <div class='row'>
    <p>&#8721;</p>
  </div>
  <div class='row'>
    <p>&#8776;</p>
  </div>
  <div class='row'>
    <p>&#8836;</p>
  </div>
  <div class='row'>
    <p>&#950;</p>
  </div>
  <div class='row'>
    <p>&#958;</p>
  </div>
  <div class='row'>
    <p>&#977;</p>
  </div>
  <div class='row'>
    <p>&#8487;</p>
  </div>
  <div class='row'>
    <p>&#x02135;</p>
  </div>
  <div class='row'>
    <p>&#x02041;</p>
  </div>
  <div class='row'>
    <p>&#x0210F;</p>
  </div>
  <div class='row'>
    <p>&#x0210C;</p>
  </div>
  <div class='row'>
    <p>&#x02111;;</p>
  </div>
  <div class='row'>
    <p>&#x02130;</p>
  </div>
  <div class='row'>
    <p>&#x00427;</p>
  </div>
  <div class='row'>
    <p>&#8713;</p>
  </div>
  <div class='row'>
    <p>&#8721;</p>
  </div>
  <div class='row'>
    <p>&#8776;</p>
  </div>
  <div class='row'>
    <p>&#8836;</p>
  </div>
  <div class='row'>
    <p>&#950;</p>
  </div>
  <div class='row'>
    <p>&#958;</p>
  </div>
  <div class='row'>
    <p>&#977;</p>
  </div>
  <div class='row'>
    <p>&#8487;</p>
  </div>
  <div class='row'>
    <p>&#x02135;</p>
  </div>
  <div class='row'>
    <p>&#x02041;</p>
  </div>
  <div class='row'>
    <p>&#x0210F;</p>
  </div>
  <div class='row'>
    <p>&#x0210C;</p>
  </div>
  <div class='row'>
    <p>&#x02111;;</p>
  </div>
  <div class='row'>
    <p>&#x02130;</p>
  </div>
  <div class='row'>
    <p>&#x00427;</p>
  </div>
  <div class='row'>
    <p>&#8713;</p>
  </div>
  <div class='row'>
    <p>&#8721;</p>
  </div>
  <div class='row'>
    <p>&#8776;</p>
  </div>
  <div class='row'>
    <p>&#8836;</p>
  </div>
  <div class='row'>
    <p>&#950;</p>
  </div>
  <div class='row'>
    <p>&#958;</p>
  </div>
  <div class='row'>
    <p>&#977;</p>
  </div>
</div>
<div class='column'>
  <div class='row'>
    <p>&#8487;</p>
  </div>
  <div class='row'>
    <p>&#x02135;</p>
  </div>
  <div class='row'>
    <p>&#x02041;</p>
  </div>
  <div class='row'>
    <p>&#x0210F;</p>
  </div>
  <div class='row'>
    <p>&#x0210C;</p>
  </div>
  <div class='row'>
    <p>&#x02111;;</p>
  </div>
  <div class='row'>
    <p>&#x02130;</p>
  </div>
  <div class='row'>
    <p>&#x00427;</p>
  </div>
  <div class='row'>
    <p>&#8713;</p>
  </div>
  <div class='row'>
    <p>&#8721;</p>
  </div>
  <div class='row'>
    <p>&#8776;</p>
  </div>
  <div class='row'>
    <p>&#8836;</p>
  </div>
  <div class='row'>
    <p>&#950;</p>
  </div>
  <div class='row'>
    <p>&#958;</p>
  </div>
  <div class='row'>
    <p>&#977;</p>
  </div>
  <div class='row'>
    <p>&#8487;</p>
  </div>
  <div class='row'>
    <p>&#x02135;</p>
  </div>
  <div class='row'>
    <p>&#x02041;</p>
  </div>
  <div class='row'>
    <p>&#x0210F;</p>
  </div>
  <div class='row'>
    <p>&#x0210C;</p>
  </div>
  <div class='row'>
    <p>&#x02111;;</p>
  </div>
  <div class='row'>
    <p>&#x02130;</p>
  </div>
  <div class='row'>
    <p>&#x00427;</p>
  </div>
  <div class='row'>
    <p>&#8713;</p>
  </div>
  <div class='row'>
    <p>&#8721;</p>
  </div>
  <div class='row'>
    <p>&#8776;</p>
  </div>
  <div class='row'>
    <p>&#8836;</p>
  </div>
  <div class='row'>
    <p>&#950;</p>
  </div>
  <div class='row'>
    <p>&#958;</p>
  </div>
  <div class='row'>
    <p>&#977;</p>
  </div>
  <div class='row'>
    <p>&#8487;</p>
  </div>
  <div class='row'>
    <p>&#x02135;</p>
  </div>
  <div class='row'>
    <p>&#x02041;</p>
  </div>
  <div class='row'>
    <p>&#x0210F;</p>
  </div>
  <div class='row'>
    <p>&#x0210C;</p>
  </div>
  <div class='row'>
    <p>&#x02111;;</p>
  </div>
  <div class='row'>
    <p>&#x02130;</p>
  </div>
  <div class='row'>
    <p>&#x00427;</p>
  </div>
  <div class='row'>
    <p>&#8713;</p>
  </div>
  <div class='row'>
    <p>&#8721;</p>
  </div>
  <div class='row'>
    <p>&#8776;</p>
  </div>
  <div class='row'>
    <p>&#8836;</p>
  </div>
  <div class='row'>
    <p>&#950;</p>
  </div>
  <div class='row'>
    <p>&#958;</p>
  </div>
  <div class='row'>
    <p>&#977;</p>
  </div>
</div>
<div class='column'>
  <div class='row'>
    <p>&#8487;</p>
  </div>
  <div class='row'>
    <p>&#x02135;</p>
  </div>
  <div class='row'>
    <p>&#x02041;</p>
  </div>
  <div class='row'>
    <p>&#x0210F;</p>
  </div>
  <div class='row'>
    <p>&#x0210C;</p>
  </div>
  <div class='row'>
    <p>&#x02111;;</p>
  </div>
  <div class='row'>
    <p>&#x02130;</p>
  </div>
  <div class='row'>
    <p>&#x00427;</p>
  </div>
  <div class='row'>
    <p>&#8713;</p>
  </div>
  <div class='row'>
    <p>&#8721;</p>
  </div>
  <div class='row'>
    <p>&#8776;</p>
  </div>
  <div class='row'>
    <p>&#8836;</p>
  </div>
  <div class='row'>
    <p>&#950;</p>
  </div>
  <div class='row'>
    <p>&#958;</p>
  </div>
  <div class='row'>
    <p>&#977;</p>
  </div>
  <div class='row'>
    <p>&#8487;</p>
  </div>
  <div class='row'>
    <p>&#x02135;</p>
  </div>
  <div class='row'>
    <p>&#x02041;</p>
  </div>
  <div class='row'>
    <p>&#x0210F;</p>
  </div>
  <div class='row'>
    <p>&#x0210C;</p>
  </div>
  <div class='row'>
    <p>&#x02111;;</p>
  </div>
  <div class='row'>
    <p>&#x02130;</p>
  </div>
  <div class='row'>
    <p>&#x00427;</p>
  </div>
  <div class='row'>
    <p>&#8713;</p>
  </div>
  <div class='row'>
    <p>&#8721;</p>
  </div>
  <div class='row'>
    <p>&#8776;</p>
  </div>
  <div class='row'>
    <p>&#8836;</p>
  </div>
  <div class='row'>
    <p>&#950;</p>
  </div>
  <div class='row'>
    <p>&#958;</p>
  </div>
  <div class='row'>
    <p>&#977;</p>
  </div>
  <div class='row'>
    <p>&#8487;</p>
  </div>
  <div class='row'>
    <p>&#x02135;</p>
  </div>
  <div class='row'>
    <p>&#x02041;</p>
  </div>
  <div class='row'>
    <p>&#x0210F;</p>
  </div>
  <div class='row'>
    <p>&#x0210C;</p>
  </div>
  <div class='row'>
    <p>&#x02111;;</p>
  </div>
  <div class='row'>
    <p>&#x02130;</p>
  </div>
  <div class='row'>
    <p>&#x00427;</p>
  </div>
  <div class='row'>
    <p>&#8713;</p>
  </div>
  <div class='row'>
    <p>&#8721;</p>
  </div>
  <div class='row'>
    <p>&#8776;</p>
  </div>
  <div class='row'>
    <p>&#8836;</p>
  </div>
  <div class='row'>
    <p>&#950;</p>
  </div>
  <div class='row'>
    <p>&#958;</p>
  </div>
  <div class='row'>
    <p>&#977;</p>
  </div>
</div>
<div class='column'>
  <div class='row'>
    <p>&#8487;</p>
  </div>
  <div class='row'>
    <p>&#x02135;</p>
  </div>
  <div class='row'>
    <p>&#x02041;</p>
  </div>
  <div class='row'>
    <p>&#x0210F;</p>
  </div>
  <div class='row'>
    <p>&#x0210C;</p>
  </div>
  <div class='row'>
    <p>&#x02111;;</p>
  </div>
  <div class='row'>
    <p>&#x02130;</p>
  </div>
  <div class='row'>
    <p>&#x00427;</p>
  </div>
  <div class='row'>
    <p>&#8713;</p>
  </div>
  <div class='row'>
    <p>&#8721;</p>
  </div>
  <div class='row'>
    <p>&#8776;</p>
  </div>
  <div class='row'>
    <p>&#8836;</p>
  </div>
  <div class='row'>
    <p>&#950;</p>
  </div>
  <div class='row'>
    <p>&#958;</p>
  </div>
  <div class='row'>
    <p>&#977;</p>
  </div>
  <div class='row'>
    <p>&#8487;</p>
  </div>
  <div class='row'>
    <p>&#x02135;</p>
  </div>
  <div class='row'>
    <p>&#x02041;</p>
  </div>
  <div class='row'>
    <p>&#x0210F;</p>
  </div>
  <div class='row'>
    <p>&#x0210C;</p>
  </div>
  <div class='row'>
    <p>&#x02111;;</p>
  </div>
  <div class='row'>
    <p>&#x02130;</p>
  </div>
  <div class='row'>
    <p>&#x00427;</p>
  </div>
  <div class='row'>
    <p>&#8713;</p>
  </div>
  <div class='row'>
    <p>&#8721;</p>
  </div>
  <div class='row'>
    <p>&#8776;</p>
  </div>
  <div class='row'>
    <p>&#8836;</p>
  </div>
  <div class='row'>
    <p>&#950;</p>
  </div>
  <div class='row'>
    <p>&#958;</p>
  </div>
  <div class='row'>
    <p>&#977;</p>
  </div>
  <div class='row'>
    <p>&#8487;</p>
  </div>
  <div class='row'>
    <p>&#x02135;</p>
  </div>
  <div class='row'>
    <p>&#x02041;</p>
  </div>
  <div class='row'>
    <p>&#x0210F;</p>
  </div>
  <div class='row'>
    <p>&#x0210C;</p>
  </div>
  <div class='row'>
    <p>&#x02111;;</p>
  </div>
  <div class='row'>
    <p>&#x02130;</p>
  </div>
  <div class='row'>
    <p>&#x00427;</p>
  </div>
  <div class='row'>
    <p>&#8713;</p>
  </div>
  <div class='row'>
    <p>&#8721;</p>
  </div>
  <div class='row'>
    <p>&#8776;</p>
  </div>
  <div class='row'>
    <p>&#8836;</p>
  </div>
  <div class='row'>
    <p>&#950;</p>
  </div>
  <div class='row'>
    <p>&#958;</p>
  </div>
  <div class='row'>
    <p>&#977;</p>
  </div>
</div>
<div class='column'>
  <div class='row'>
    <p>&#8487;</p>
  </div>
  <div class='row'>
    <p>&#x02135;</p>
  </div>
  <div class='row'>
    <p>&#x02041;</p>
  </div>
  <div class='row'>
    <p>&#x0210F;</p>
  </div>
  <div class='row'>
    <p>&#x0210C;</p>
  </div>
  <div class='row'>
    <p>&#x02111;;</p>
  </div>
  <div class='row'>
    <p>&#x02130;</p>
  </div>
  <div class='row'>
    <p>&#x00427;</p>
  </div>
  <div class='row'>
    <p>&#8713;</p>
  </div>
  <div class='row'>
    <p>&#8721;</p>
  </div>
  <div class='row'>
    <p>&#8776;</p>
  </div>
  <div class='row'>
    <p>&#8836;</p>
  </div>
  <div class='row'>
    <p>&#950;</p>
  </div>
  <div class='row'>
    <p>&#958;</p>
  </div>
  <div class='row'>
    <p>&#977;</p>
  </div>
  <div class='row'>
    <p>&#8487;</p>
  </div>
  <div class='row'>
    <p>&#x02135;</p>
  </div>
  <div class='row'>
    <p>&#x02041;</p>
  </div>
  <div class='row'>
    <p>&#x0210F;</p>
  </div>
  <div class='row'>
    <p>&#x0210C;</p>
  </div>
  <div class='row'>
    <p>&#x02111;;</p>
  </div>
  <div class='row'>
    <p>&#x02130;</p>
  </div>
  <div class='row'>
    <p>&#x00427;</p>
  </div>
  <div class='row'>
    <p>&#8713;</p>
  </div>
  <div class='row'>
    <p>&#8721;</p>
  </div>
  <div class='row'>
    <p>&#8776;</p>
  </div>
  <div class='row'>
    <p>&#8836;</p>
  </div>
  <div class='row'>
    <p>&#950;</p>
  </div>
  <div class='row'>
    <p>&#958;</p>
  </div>
  <div class='row'>
    <p>&#977;</p>
  </div>
  <div class='row'>
    <p>&#8487;</p>
  </div>
  <div class='row'>
    <p>&#x02135;</p>
  </div>
  <div class='row'>
    <p>&#x02041;</p>
  </div>
  <div class='row'>
    <p>&#x0210F;</p>
  </div>
  <div class='row'>
    <p>&#x0210C;</p>
  </div>
  <div class='row'>
    <p>&#x02111;;</p>
  </div>
  <div class='row'>
    <p>&#x02130;</p>
  </div>
  <div class='row'>
    <p>&#x00427;</p>
  </div>
  <div class='row'>
    <p>&#8713;</p>
  </div>
  <div class='row'>
    <p>&#8721;</p>
  </div>
  <div class='row'>
    <p>&#8776;</p>
  </div>
  <div class='row'>
    <p>&#8836;</p>
  </div>
  <div class='row'>
    <p>&#950;</p>
  </div>
  <div class='row'>
    <p>&#958;</p>
  </div>
  <div class='row'>
    <p>&#977;</p>
  </div>
</div>
<div class='column'>
  <div class='row'>
    <p>&#8487;</p>
  </div>
  <div class='row'>
    <p>&#x02135;</p>
  </div>
  <div class='row'>
    <p>&#x02041;</p>
  </div>
  <div class='row'>
    <p>&#x0210F;</p>
  </div>
  <div class='row'>
    <p>&#x0210C;</p>
  </div>
  <div class='row'>
    <p>&#x02111;;</p>
  </div>
  <div class='row'>
    <p>&#x02130;</p>
  </div>
  <div class='row'>
    <p>&#x00427;</p>
  </div>
  <div class='row'>
    <p>&#8713;</p>
  </div>
  <div class='row'>
    <p>&#8721;</p>
  </div>
  <div class='row'>
    <p>&#8776;</p>
  </div>
  <div class='row'>
    <p>&#8836;</p>
  </div>
  <div class='row'>
    <p>&#950;</p>
  </div>
  <div class='row'>
    <p>&#958;</p>
  </div>
  <div class='row'>
    <p>&#977;</p>
  </div>
  <div class='row'>
    <p>&#8487;</p>
  </div>
  <div class='row'>
    <p>&#x02135;</p>
  </div>
  <div class='row'>
    <p>&#x02041;</p>
  </div>
  <div class='row'>
    <p>&#x0210F;</p>
  </div>
  <div class='row'>
    <p>&#x0210C;</p>
  </div>
  <div class='row'>
    <p>&#x02111;;</p>
  </div>
  <div class='row'>
    <p>&#x02130;</p>
  </div>
  <div class='row'>
    <p>&#x00427;</p>
  </div>
  <div class='row'>
    <p>&#8713;</p>
  </div>
  <div class='row'>
    <p>&#8721;</p>
  </div>
  <div class='row'>
    <p>&#8776;</p>
  </div>
  <div class='row'>
    <p>&#8836;</p>
  </div>
  <div class='row'>
    <p>&#950;</p>
  </div>
  <div class='row'>
    <p>&#958;</p>
  </div>
  <div class='row'>
    <p>&#977;</p>
  </div>
  <div class='row'>
    <p>&#8487;</p>
  </div>
  <div class='row'>
    <p>&#x02135;</p>
  </div>
  <div class='row'>
    <p>&#x02041;</p>
  </div>
  <div class='row'>
    <p>&#x0210F;</p>
  </div>
  <div class='row'>
    <p>&#x0210C;</p>
  </div>
  <div class='row'>
    <p>&#x02111;;</p>
  </div>
  <div class='row'>
    <p>&#x02130;</p>
  </div>
  <div class='row'>
    <p>&#x00427;</p>
  </div>
  <div class='row'>
    <p>&#8713;</p>
  </div>
  <div class='row'>
    <p>&#8721;</p>
  </div>
  <div class='row'>
    <p>&#8776;</p>
  </div>
  <div class='row'>
    <p>&#8836;</p>
  </div>
  <div class='row'>
    <p>&#950;</p>
  </div>
  <div class='row'>
    <p>&#958;</p>
  </div>
  <div class='row'>
    <p>&#977;</p>
  </div>
</div>
<div class='container'>
  <div class='container_inner'>
    <div class='container_inner__login'>
      <div class='login'>
        <div class='login_profile'>
          <img class="logo" src="<?php echo base_url('assets/images/location-pin.svg'); ?>">
        </div>
        <div class='login_desc'>
          <h3>Welcome to <span>Semesta</span></h3>
        </div>
        <div class='login_inputs'>
          <form action="<?php echo base_url('user/login');?>" method="POST">
            <!-- <div class='tip'>Your password will have been emailed to you along with this development link.</div> -->
            <div class="loginfo" style="margin-bottom: 1.5rem; font-size: .85rem;"><?php echo $loginfo; ?></div>
            <input id="username" name="username" placeholder='Username' required='required' type='text' style="margin-bottom: 12px;">
            <input id="password" name="password" placeholder='Password' required='required' type='password'>
            <input id="auth_submit" type='submit' value='Log in' style="text-align: center;">
          </form>
          <div class='forgotten'>
            <a href='#'>Informasi lebih lanjut hubungi Subbagian Dukungan Teknis BCSH</a>
          </div>
          <div class='login_check'>
            <br/>Logging in to your client area
            <br/> <span>please wait</span>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>
  <script src="<?php echo base_url('assets/libs/auth/jquery.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/libs/auth/jquery-ui.min.js'); ?>"></script>
</body>

</html>
