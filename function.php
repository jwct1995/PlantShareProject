<?php
include "db.php";

$post=$_POST["post"];

if($post=="LoadAry")
{
    $c=0;
    $rtn=array();
	$query="SELECT * FROM tblPlant ORDER BY pId Desc ";
	$sql=mysqli_query($mysqli,$query)or die(mysql_error());

	while ($row = mysqli_fetch_array($sql, MYSQLI_BOTH))
	{
		$rtn[$c]=array("pid"=>$row["pId"],"pname"=>$row["pName"],"psize"=>$row["pSize"],"pdesc"=>$row["pDesc"],"pimg"=>$row["pImg"],"plikecount"=>$row["pLikeCount"]);
        $c++;
	}
	echo json_encode($rtn);
}

else if($post=="Like")
{
    $pid=mysqli_real_escape_string($mysqli,trim($_POST["pid"]));

    $query="UPDATE tblPlant SET pLikeCount = pLikeCount + 1  WHERE pId='".$pid."'";

    $result=mysqli_query($mysqli,$query);
    if($result==true)
    	$rtn=1;
    else
        $rtn=2;
    echo json_encode($rtn);
}

else if($post=="Upd")
{
    $pid=mysqli_real_escape_string($mysqli,trim($_POST["pid"]));
    $pname=mysqli_real_escape_string($mysqli,trim($_POST["pname"]));
    $psize=mysqli_real_escape_string($mysqli,trim($_POST["psize"]));
    $pdesc=mysqli_real_escape_string($mysqli,trim($_POST["pdesc"]));
    $pimg=mysqli_real_escape_string($mysqli,trim($_POST["pimg"]));

    $query="UPDATE tblPlant SET pName='".$pname."',pSize='".$psize."',pDesc='".$pdesc."' ";
    if($pimg!=0)
        $query.= ",pImg='".$pimg."' ";
    $query.=" WHERE pId='".$pid."'";

    $result=mysqli_query($mysqli,$query);
    if($result==true)
    	$rtn=1;
    else
        $rtn=2;
    echo json_encode($rtn);
}
else if($post=="Reg")
{
    $pname=mysqli_real_escape_string($mysqli,trim($_POST["pname"]));
    $psize=mysqli_real_escape_string($mysqli,trim($_POST["psize"]));
    $pdesc=mysqli_real_escape_string($mysqli,trim($_POST["pdesc"]));
    $pimg=mysqli_real_escape_string($mysqli,trim($_POST["pimg"]));

	$id=DateTimeForId();

	$query=	"INSERT INTO tblPlant(pId, pName, pSize, pDesc, pImg, pLikeCount)
	VALUES (
        'p".$id."','".$pname."','".$psize."','".$pdesc."','".$pimg."',0
    )";

	$result=mysqli_query($mysqli,$query);
	if($result==true)
	{
		$rtn=1;
	}
	else
		$rtn=2;
	echo json_encode($rtn);
}

function DateTimeForId()
{
	$t = microtime(true);
	$micro = sprintf("%06d",($t - floor($t)) * 1000000);
	$d = new DateTime( date('Y-m-d H:i:s.'.$micro, $t) );
	return $d->format("YmdHisu");
}
function DateTime()
{
	$t = microtime(true);
	$micro = sprintf("%06d",($t - floor($t)) * 1000000);
	$d = new DateTime( date('Y-m-d H:i:s.'.$micro, $t) );
	return $d->format("Y-m-d~H:i:s.u");
}


?>
