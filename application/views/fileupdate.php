<style>
    .upload_div1{
        display: table;
        width: 100%;

    }
    .upload_div2{
        width: 50%;
        margin: 0 auto;
        font-size: 200%;
        text-align: center;
    }
    .table_style{

        margin: 0 auto;
    }
    .titles,.naiyo{
        width: 97%;
        line-height: normal;
        padding: .8em .5em;

    }
    td{
        border-bottom: solid 1px;
    }
    .naiyo{
        height: 200px;
    }

    .filebox{
        overflow: hidden;
        display:inline-block;
        padding: .5em .10em;
        font-size: 100%;
        line-height: normal;
        vertical-align: middle;
        cursor: pointer;
        border-radius: .10em;
        color: #000000;
        border-color: #ffffff;
    }
    .btn{
        border: 0;
        outline:  0;
        border-radius: .20em;
        background: transparent;
        font-size: 100%;
        color: #ffffff;
        height: auto;
        font-family: HY얕은샘물M
    }

</style>
<!--写真をコントロールに送る-->
<div class="upload_div1">
    <div class="upload_div2">
        <table class="table_style">
    <form enctype='multipart/form-data' action='<?php echo site_url("fileupdate/upload/{$where}") ?>' method='post'>
        <tr><td>タイトル</td><td> <input type="text" name="submit_input" class="titles"></td></tr>
        <tr><td>内容</td><td><textarea name="submit_input2" class="naiyo"></textarea></td></tr>
        <tr><td>ファイル </td><td> <input type='file' name='files' class="filebox"></td></tr>
        <tr><td colspan="2" ><button class="btn"><img src="http://rkdtkddns1.cafe24.com/img/upload.png"></button></td></tr>
    </form>
        </table>
    </div>
</div>

