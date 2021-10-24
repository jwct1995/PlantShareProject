<html>
	<head>
		<meta charset="utf-8">
		<title>Plant's Info</title>
		<link rel="stylesheet" href="style.css" type="text/css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	</head>
    <style>
    .CPointer
    {
        cursor: pointer;
    }
    #canvas
    {
        position: fixed;
        z-index: 1;
        padding-top: 100px;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        overflow: auto;
        background-color: rgba(0,0,0,0.8);
        color:white;
    }
    .divCenter
    {
        margin: auto;
        display: block;
        width: 80%;
        max-width: 700px;
        text-align: center;
        color: #ccc;
        padding: 10px 0;
        height: 150px;
    }
    #canvas,#divUpload,#divShowInfo{display: none;}

    #canvas
    {
        animation-name: fadein;
        animation-duration: 0.3s;
    }
    @keyframes fadein
    {
        from {transform:scale(0)}
        to {transform:scale(1)}
    }
    #btnCloseCanvas
    {
        position: fixed;
        top: 10px;
        right: 10px;
        text-decoration: underline;
    }
    #divBanner
    {
        width: 100%;
        /*height: 45px;*/
        padding: 0px 10px 0px 10px;
    }
    .divMenu
    {
        background-color: green;
        width:70px;
        height: 40px;
        /*border-style: solid;
        border-width: 2px;*/
        display: inline-block;
        text-align: center;
        vertical-align: middle;
        line-height: 40px;
    }
    img
    {
        width: 200px;
    }
    </style>
    <script>
    $(function()
    {
        //alert(window.location.origin);
    });
    $(document).ready(function()
    {
        $("#menuHomeBtn").click(function()
        {
            //$("#canvas").css("display","unset");
            //window.location.href = window.location.origin+"//PlantShareProject/";
            window.location.href ="http://localhost:8080/php/github/PlantShareProject/";
        });
//#divUpload,#divShowInfo
        $("#menuUploadBtn").click(function()
        {
            $("#canvas").css("display","block");
            $("#divUpload").css("display","table");
        });



        $("#btnCloseCanvas").click(function()
        {
            $("#canvas, #divUpload, #divShowInfo").css("display","none");
        });

    });
    var openFile = function(file)
    {
        var input = file.target;

        var reader = new FileReader();
        reader.onload = function()
        {
          var dataURL = reader.result;
          var output = document.getElementById('AddNewPlantImg');
          output.src = dataURL;
        };
        reader.readAsDataURL(input.files[0]);
      };
    </script>
    <body style="margin:0px;padding:0px;">

<!--

        <div id="myModal" class="modal">
          <span class="close">&times;</span>
          <img class="modal-content" id="img01">
          <div id="caption"></div>
        </div>
-->
        <div id="canvas">
            <div id="btnCloseCanvas" class="CPointer"> close X </div>
            <div id="divUpload" class="divCenter" style="background-color:white;">
                <h3>Add New Plant</h3>
                <div style="display: inline-block;">
                    <table>
                        <tr>
                            <td>
                                <center>
                                    <img id="AddNewPlantImg" src="//upload.wikimedia.org/wikipedia/commons/thumb/5/59/-127wiki.jpg/479px--127wiki.jpg">
                                    <input type='file' id='mimg' name='mimg' accept='image/png, image/jpeg, image/jpg' onchange='openFile(event)'>
                                </center>

                            </td>
                            <td style="vertical-align: top;">
                                <table>
                                    <!--<tr>
                                        <td rowspan="9">
                                            <img src="//upload.wikimedia.org/wikipedia/commons/thumb/5/59/-127wiki.jpg/479px--127wiki.jpg">
                                        </td>
                                    </tr>-->
                                    <tr>
                                        <td>Name : </td>
                                        <td><input type="text" id="inName"></td>
                                    </tr>
                                    <tr>
                                        <td>Size : </td>
                                        <td>
                                            <select>
                                                <option>qwe</option>
                                                <option>asd</option>
                                                <option>zxc</option>
                                                <option>edc</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Description : </td>
                                        <td><textarea id="inDesc"></textarea></td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="99">
                                <center>
                                    <input id="btnAddNewPlant" type="button" value="Submit">
                                    <input id="btnResetNewPlant" type="button" value="Reset">
                                </center>
                            </td>
                        </tr>
                    </table>


                </div>
            </div>
            <div id="divShowInfo" class="divCenter">
                show info
            </div>
        </div>


        <div id="divBanner" style="background-color:pink;">
            menu
            <div id="menuHomeBtn"  class="divMenu CPointer">Home</div>
            <div id="menuUploadBtn" class="divMenu CPointer">Upload</div>
            <div id="menuEditBtn" class="divMenu CPointer">Edit</div>
        </div>


        <div id="divBody" style="background-color:blue;">
            <div id="divMain">
                main
            </div>

        </div>
    </body>

</html>
