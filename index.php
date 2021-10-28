<html>
	<head>
		<meta charset="utf-8">
		<title>Plant's Info</title>
		<link rel="stylesheet" href="css.css" type="text/css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script src="js.js"></script>
	</head>
    <style>

    </style>
    <script>

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
            <div class="divCenter" style="background-color:white; display:table;">
                <h3 id="showTitle">Add New Plant</h3>
                <div style="display: inline-block;">
                    <table>
                        <tr>
                            <td>
                                <center>
                                    <img id="ShowImg" style="max-width: 200px;max-height: 300px;" src="no-image.jpg">
									<br>



									<form id="Img_form" type="post" enctype="multipart/form-data">
										<input type="file" id="img_file" name="img_file" onchange="openFile(event)">
									</form>
                                    <!--<input type='file' id='inImg' name='inImg' accept='image/png, image/jpeg, image/jpg' onchange='openFile(event)'>-->
									<div id="divSocialMedia">
										<div id="btnLike" class="SocialMedia" >Like</div>
										<div class="SocialMedia">Share</div>
									</div>
                                </center>

                            </td>
                            <td style="vertical-align: top;">
                                <table>
                                    <!--<tr>
                                        <td rowspan="9">
                                            <img src="//upload.wikimedia.org/wikipedia/commons/thumb/5/59/-127wiki.jpg/479px--127wiki.jpg">
                                        </td>
                                    </tr>-->
									<tr id="trBtnLR">
										<td colspan="2">
											<arw id="btnL"class="CPointer" style=""> << </arw>
											<!--<div style="position: fixed;right: 10px;"> >> </div>-->
										</td>
										<td><arw id="btnR" class="CPointer" style="left: -25px;position: relative;"> >> </arw></td>
									</tr>
									<tr id="trBtnEdit">
										<td colspan="2">
											<!--<input id="btnEditPlant" type="button" value="Edit">-->
										</td>
										<td>
											<input id="btnEditPlant" type="button" value="Edit" style="position: relative;left: -50px;">
										</td>
									</tr>

									<tr id="trDName">
										<td colspan="2"><h2 id="lblName" style="min-width: 150px;">Show Name hello plant</h2></td>
									</tr>
                                    <tr id="trIName">
                                        <td style="text-align: right;">Name : </td>
                                        <td><input type="text" id="inName"></td>
                                    </tr>
									<tr id="trDSize">
										<td colspan="2"><h5 id="lblSize">Show Size 99XL</h5></td>
									</tr>
                                    <tr id="trISlc">
                                        <td style="text-align: right;">Size : </td>
                                        <td>
                                            <select id="inSlc">
                                                <option>99XL</option>
                                                <option>asd</option>
                                                <option>zxc</option>
                                                <option>edc</option>
                                            </select>
                                        </td>
                                    </tr>
									<tr id="trDDesc">
										<td colspan="2"><p id="lblDesc">Show desc asdasdasdasdasdasdads</p></td>
									</tr>
                                    <tr id="trIDescL">
                                        <td>Description : </td>
                                    </tr>
									<tr id="trIDesc">
										<td colspan="2" ><textarea id="inDesc" style="width:100%; height:180px;"></textarea></td>
									</tr>
									<tr id="trBtnRow">
										<td colspan="99">
											<center>
												<input id="btnAddPlant" type="button" value="Submit">
												<input id="btnUpdatePlant" type="button" value="Update">
		                                    	<input id="btnReset" type="button" value="Reset">
											</center>
										</td>
									</tr>
                                </table>
                            </td>
                        </tr>
                        <!--<tr>
                            <td colspan="99">
                                <center>
                                    <input id="btnAddNewPlant" type="button" value="Submit">
                                    <input id="btnResetNewPlant" type="button" value="Reset">
                                </center>
                            </td>
                        </tr>-->
                    </table>


                </div>
            </div>
			<!--
            <div id="divShowInfo" class="divCenter" style="background-color:white;">
				<h3>Show Plant Info</h3>
				<div style="display: inline-block;">
                	<table>
						<tr>
							<td>

							</td>
							<td></td>
						</tr>
					</table>
				</div>
            </div>-->
        </div>


        <div id="divBanner" style="background-color:#0f4a21;">
            <div id="menuHomeBtn"  class="divMenu CPointer">Home</div>
            <div id="menuUploadBtn" class="divMenu CPointer">Upload</div>
            <!--<div id="menuEditBtn" class="divMenu CPointer">Edit</div>
			<div name="btnShowInfo" class="divMenu CPointer">Show</div>-->
        </div>


        <div id="divBody" style="background-color:white;">
            <div id="divMain" style="text-align: center;">
                <div name="divMainAry" class="displaySlot">
					<img class="mainImg" src="http://qnimate.com/wp-content/uploads/2014/03/images2.jpg">
					<h4>Name 1</h4>
				</div>
				<div name="divMainAry" class="displaySlot">
					<img class="mainImg" src="http://qnimate.com/wp-content/uploads/2014/03/images2.jpg">
					<h4>Name 2</h4>
				</div>
				<div name="divMainAry" class="displaySlot">
					<img class="mainImg" src="http://qnimate.com/wp-content/uploads/2014/03/images2.jpg">
					<h4>Name 3</h4>
				</div>
				<div name="divMainAry" class="displaySlot">
					<img class="mainImg" src="http://qnimate.com/wp-content/uploads/2014/03/images2.jpg">
					<h4>Name 4</h4>
				</div>
				<div id="aa" name="divMainAry" class="displaySlot haha huhu">
					<img class="mainImg" src="http://qnimate.com/wp-content/uploads/2014/03/images2.jpg">
					<h4>Name 5</h4>
				</div>


		    </div>
			<div id="divMainShowAllBtn">
				<center>
					<div id="btnShowAll">
						Show All
					</div>
				</center>
			</div>

        </div>
    </body>

</html>
