
<html>
<meta charset="UTF-8">
<style>
    @import url(http://fonts.googleapis.com/earlyaccess/kopubbatang.css);
    body,html{
        height:100%; margin:0; padding:0;
        font-family: 'KoPub Batang', serif;

    }

    input[type=submit] {
        width: 97%;
        height: 50%;
        -webkit-appearance:none;
        background: #231815;
        border: transparent;
        font-size: 200%;
        color : #ffffff;

    }
    .login_logo{
        margin: 5% auto;
        height: 611px;
        width: 904px;
    }
    .login
    {
        margin: 0 auto;
        height: 100%;
        width: 100%;
        -webkit-transition: 1s;
        transition:  1s;
        font-size: 200%;
        text-align: center;
    }
    .login:hover{
        filter: blur(5px);
        -webkit-filter: blur(5px);
    }

    .photo_modal{
        display: none;
        position: fixed;
        z-index: 1;
        left:0;
        top:0;
        width:100%;
        height: 100%;
        overflow: auto;
        background-color: rgb(0,0,0);
        background-color: rgba(0,0,0,0.4);

    }
    .modal_content{
        background-color: rgba(189, 130, 127, 0.8);
        margin: 15% auto;
        padding: 20px;
        border: 1px solid #888;
        width: 30%;
        height: 30%;
        -webkit-animation-name: animatetop;
        -webkit-animation-duration: 0.4s;
        animation-name: animatetop;
        animation-duration: 0.4s
    }
    .modal_content input{
        margin: 0 auto;

    }
    .modal_input_text{
        margin: 8%;
    }
    .inputBox{
        width: 97%;
        line-height: normal;
        padding: .8em .5em;

    /* Add Animation */
    @-webkit-keyframes animatetop {
        from {top: -300px; opacity: 0}
        to {top: 0; opacity: 1}
    }

    @keyframes animatetop {
        from {top: -300px; opacity: 0}
        to {top: 0; opacity: 1}
    }
    .login_text{
        color: #000000;
        font-size: 250%;
    }

    }
</style>
<head>

    <title>302km</title>
    <meta name="viewport" content="width=device-width">

</head>
<body>
    <div class="login" >
        <div class="login_logo" id="login">
        <img src="http://rkdtkddns1.cafe24.com/img/logo_img_free.png"  >
        </div>
            <div class="login_text">
            私たちの距離
            <br><br>
            「302km」
        </div>
    </div>

    <div id="login_modal" class="photo_modal"><!--Modal-->
        <div class="modal_content">
            <!--Login Form 作成  -->
            <div class="modal_input_text">
<!--                <form action="--><?php //echo site_url("login/loginProcess") ?><!--" method="post">-->
                <form action="index.php/login/loginProcess" method="post">
                <input type="text" name="user[id]" placeholder="自分の名前" class="inputBox">
                <br>
                <input type="text" name="user[pw]" placeholder="相手の名前" class="inputBox">
                <input type="submit" class="btn" value="Login">
            </form>

            </div>
        </div>
    </div>
<script>
    //LOGINのデザイン
    var modal = document.getElementById('login_modal');
    var btn = document.getElementById('login');
    btn.onclick = function () {
        modal.style.display="block";
    };
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
</script>
</body>
</html>