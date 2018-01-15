<style>
    body,html{
        height:100%;

    }
    .container{
        width: 100%;
        height : 200%;
    }
    .seoul_view{
        margin: 0 auto;
        width: 90%;
        height: 100%;
    }
    .photo_view{
        margin: 0 auto;
        width: 25%;
        float: left;
    }
    .seoul_view img{
        width: 100%;
        padding: 10px 10px;
        box-sizing: border-box;
    }
    .photo_view{
        object-fit: contain;
        -webkit-transition: all 0.2s ease-in;
        transition: all 0.2s ease-in;

    }
    .photo_view2{
        -webkit-transition: all 0.2s ease-in;
        transition: all 0.2s ease-in;
    }
    .photo_view2:hover{
        filter: grayscale(100%);
    }
    .btn_div{
        width: 100%;
    }
    .btn{
        width: 100%;
        margin: 0 auto;
        background: transparent;
        border: transparent;

    }


    .photo_modal{
        display: none;
        position: fixed;
        z-index: 1;
        left:0;
        top:0;
        width:100%;
        height: 100%;
        overflow: hidden;
        background-color: rgb(0,0,0);
        background-color: rgba(0,0,0,0.4);

    }

    .modal_content{
        background-color: rgba(255, 255, 255, 0.8);
        margin: 1% auto;
        padding: 20px;
        border: 0 solid #888;
        width: 80%;
        height: 90%;
        overflow: hidden;
        -webkit-animation-name: animatetop;
        -webkit-animation-duration: 0.8s;
        animation-name: animatetop;
        animation-duration: 0.8s
    }


    .photo_img{
        width: 80%;
        height: 65%;
    }
    /* Add Animation */
    @-webkit-keyframes animatetop {
        from {top: -300px; opacity: 0}
        to {top: 0; opacity: 1}
    }

    @keyframes animatetop {
        from {top: -300px; opacity: 0}
        to {top: 0; opacity: 1}
    }
    .photo_subject{
        border-bottom: 1px solid;
    }
    .photo_img img{
        padding: 10px;
        width: 100%;
        height: 100%;
        float: left;
    }
    .photo_comment{

    }

</style>
<div class="btn_div">
    <button onclick="location.href='fileupdate/index/Seoul'" class="btn">
        <img src="../img/img_upload.png" >
    </button>
</div>

<div class="container">
    <div id="seoul_view" class="seoul_view">
        <div id="photo_view1" class="photo_view"></div>
        <div id="photo_view2" class="photo_view"></div>
        <div id="photo_view3" class="photo_view"></div>
        <div id="photo_view4" class="photo_view"></div>
    </div>
</div>
<div id="photo_view" class="photo_modal"><!--Modal-->
    <div class="modal_content" id="modal_content">
        <!--Login Form 作成  -->
        <div class="modal_input_text">
            <div id="photo_img" class="photo_img"></div>
            <div id="photo_subject" class="photo_subject" ></div>
            <div id="photo_comment" class="photo_comment"></div>
        </div>
    </div>
</div>
<script>
    var view1 = document.getElementById("photo_view1");
    var view2 = document.getElementById("photo_view2");
    var view3 = document.getElementById("photo_view3");
    var view4 = document.getElementById("photo_view4");
</script>
<script>
    <?php
    $i=1;
    foreach ($list as $value): ?>
    <?php if($i==1){ ?>

    view1.innerHTML +="<div class='photo_view2' onclick='photo_see" +
        "(\"<?php echo $value->board_subject ?>\",\"<?php echo $value->img_url ?>\",\"<?php echo $value->board_comment ?>\",\"<?php echo $value->board_date ?>\")'>" +
        "<img src='../dataimg/<?php echo $value->img_url ?>' "+
        " id='<?php echo $value->board_subject ?>' ></div>";

    <?php $i++; }else if($i==2){ ?>

    view2.innerHTML +="<div class='photo_view2' onclick='photo_see" +
        "(\"<?php echo $value->board_subject ?>\",\"<?php echo $value->img_url ?>\",\"<?php echo $value->board_comment ?>\",\"<?php echo $value->board_date ?>\")'>" +
        "<img src='../dataimg/<?php echo $value->img_url ?>' "+
        " id='<?php echo $value->board_subject ?>' ></div>";
    <?php $i++; }else if($i==3){ ?>

    view3.innerHTML +=  "<div class='photo_view2' onclick='photo_see" +
        "(\"<?php echo $value->board_subject ?>\",\"<?php echo $value->img_url ?>\",\"<?php echo $value->board_comment ?>\",\"<?php echo $value->board_date ?>\")'>" +
        "<img src='../dataimg/<?php echo $value->img_url ?>' "+
        " id='<?php echo $value->board_subject ?>' ></div>";

    <?php $i++; }else if($i==4){ ?>

    view4.innerHTML += "<div class='photo_view2' onclick='photo_see" +
        "(\"<?php echo $value->board_subject ?>\",\"<?php echo $value->img_url ?>\",\"<?php echo $value->board_comment ?>\",\"<?php echo $value->board_date ?>\")'>" +
        "<img src='../dataimg/<?php echo $value->img_url ?>' "+
        " id='<?php echo $value->board_subject ?>' ></div>";

    <?php $i=1; } ?>

    <?php endforeach; ?>


</script>

<script>
    var modal_height =document.getElementById("modal_content");
    var modal = document.getElementById('photo_view');
    var photo_subject = document.getElementById("photo_subject");
    var photo_img = document.getElementById("photo_img");
    var photo_comment = document.getElementById("photo_comment");

    function photo_see(subject,img,comment,day) {
        photo_subject.innerHTML = "<h2>"+ subject+ "</h2><br>"+day+"";
        photo_img.innerHTML = "<img src='../dataimg/"+img+"' id='"+img+"'>";
        photo_comment.innerHTML = comment;

        var img_height = document.getElementById(img);
        var temp_img_height = img_height.height;
        var temp_img_width  = img_height.width;

        modal_height.style.height=temp_img_height/1.8+"px";
        modal_height.style.width=temp_img_width/2+"px";
        modal.style.display="block";
    }

    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
</script>



