
var LoadArray=new Array();

$(function()
{
    generateDivMainAry();
});
$(document).ready(function()
{


    //////////////////////////////////////////////////////////
    //L1//
    //////////////////////////////////////////////////////////
    $("#btnLike").click(function()
    {
        AjaxLikePlant();
    });

    $("#btnL , #btnR").click(function()
    {
        setShowDetail($(this));
    });
    $("#divMain").on("click", "[name='divMainAry']", function()
    {

        setShowDetail($(this));
    });

    $("#btnShowAll").click(function()
    {
        $(".displaySlot").each(function()
        {
            $(this).removeClass();
            $(this).addClass("displaySlot");
        });

        $("#btnShowAll").fadeOut( "slow", function()
        {
            $("#btnShowAll").css("display","none");
        });

    });


    //////////////////////////////////////////////////////////
    //L2//
    //////////////////////////////////////////////////////////

    $("#btnEditPlant").click(function()
    {
        var num=parseInt($(this).attr("num"));

        ////reset
        $("#ShowImg").attr("src","no-image.jpg");
        //$("#inSlc").val($("#inSlc option:first").val());
        $("#inName , #inDesc , #img_file").val("");

        $("#btnUpdatePlant").attr("pid", LoadArray[num]["pid"] );

        //set current set
        $("#ShowImg").attr("src",LoadArray[num]["pimg"]);
        $("#inName").val(LoadArray[num]["pname"]);
        $("#inSlc").find("option:contains('"+LoadArray[num]["psize"]+"')").attr('selected', 'selected');
        $("#inDesc").val(LoadArray[num]["pdesc"]);

        //show & hide canvas element
        $("#showTitle").text("Edit Plant");
        $("#ShowImg").css("display","block");
        $("#Img_form").css("display","block");
        $("#divSocialMedia").css("display","none");
        $("#trBtnLR").css("display","none");
        $("#trBtnEdit").css("display","none");
        $("#trDName").css("display","none");
        $("#trIName").css("display","block");
        $("#trDSize").css("display","none");
        $("#trISlc").css("display","block");
        $("#trDDesc").css("display","none");
        $("#trIDescL").css("display","block");
        $("#trIDesc").css("display","block");
        $("#btnAddPlant").css("display","none");
        $("#btnUpdatePlant").css("display","unset");
        $("#btnReset").css("display","none");
        /*$("#").css("display","none""block");
        $("#").css("display","none""block");*/
        $("#canvas").css("display","block");
    });

    $("#menuUploadBtn").click(function()
    {
        //reset
        $("#ShowImg").attr("src","no-image.jpg");
        $("#inSlc").val($("#inSlc option:first").val());
        $("#inName , #inDesc , #img_file").val("");

        //show & hide canvas element
        $("#showTitle").text("Upload New Plant");
        $("#ShowImg").css("display","block");
        $("#Img_form").css("display","block");
        $("#divSocialMedia").css("display","none");
        $("#trBtnLR").css("display","none");
        $("#trBtnEdit").css("display","none");
        $("#trDName").css("display","none");
        $("#trIName").css("display","block");
        $("#trDSize").css("display","none");
        $("#trISlc").css("display","block");
        $("#trDDesc").css("display","none");
        $("#trIDescL").css("display","block");
        $("#trIDesc").css("display","block");
        $("#btnAddPlant").css("display","unset");
        $("#btnUpdatePlant").css("display","none");
        $("#btnReset").css("display","unset");
        /*$("#").css("display","none""block");
        $("#").css("display","none""block");*/
        $("#canvas").css("display","block");
    });

    $("#btnCloseCanvas").click(function()
    {
        $("#canvas").css("display","none");
    });

    //////////////////////////////////////////////////////////
    //L3//
    //////////////////////////////////////////////////////////

    $("#btnUpdatePlant").click(function()
    {
        AjaxUpdatePlant();
    });

    $("#btnAddPlant").click(function()
    {
        AjaxRegPlant();
    });

    $("#btnReset").click(function()
    {
        $("#ShowImg").attr("src","no-image.jpg");
        $("#inSlc").val($("#inSlc option:first").val());
        $("#inName , #inDesc , #img_file").val("");
    });

    //////////////////////////////////////////////////////////
    /////////////////////////////////////////////////////////


    $("#menuHomeBtn").click(function()
    {
        //$("#canvas").css("display","unset");
        //window.location.href = window.location.origin+"//PlantShareProject/";
        window.location.href ="http://localhost:8080/php/github/PlantShareProject/";
    });
});

function setShowDetail(ele)
{
    var num=ele.attr("num");

    //set show data
    $("#ShowImg").attr("src",LoadArray[num]["pimg"]);
    $("#lblName").text(LoadArray[num]["pname"]);
    $("#lblSize").text("Size : "+LoadArray[num]["psize"]);
    $("#lblDesc").text("Description : "+LoadArray[num]["pdesc"]);
    $("#btnLike").text(LoadArray[num]["plikecount"]+" Like");
    $("#btnLike").attr("pid",LoadArray[num]["pid"]);

    //set btn LR
    var inum= parseInt(num);
    var leng=LoadArray.length;

    var l=inum-1;
    var r=inum+1;
    if(inum==0)
    {
        l=0;
        r=1;
        $("#btnL").css("display","none");
        $("#btnR").css("display","unset");
    }
    else if(inum==leng-1)
    {
        l=leng-2;
        r=leng-1;
        $("#btnL").css("display","unset");
        $("#btnR").css("display","none");
    }
    else
    {
        $("#btnL").css("display","unset");
        $("#btnR").css("display","unset");
    }

    $("#btnL").attr("num",l);
    $("#btnR").attr("num",r);

    //set edit
    $("#btnEditPlant").attr("num",num);

    //show & hide canvas element
    $("#showTitle").text("Show Detail");
    $("#ShowImg").css("display","block");
    $("#Img_form").css("display","none");
    $("#divSocialMedia").css("display","block");
    $("#trBtnLR").css("display","revert");
    $("#trBtnEdit").css("display","revert");
    $("#trDName").css("display","block");
    $("#trIName").css("display","none");
    $("#trDSize").css("display","block");
    $("#trISlc").css("display","none");
    $("#trDDesc").css("display","block");
    $("#trIDescL").css("display","none");
    $("#trIDesc").css("display","none");
    $("#btnAddPlant").css("display","none");
    $("#btnUpdatePlant").css("display","none");
    $("#btnReset").css("display","none");
    /*$("#").css("display","none""block");
    $("#").css("display","none""block");*/
    $("#canvas").css("display","block");
}

function generateDivMainAry()
{
    LoadArray=[];
    LoadArray=AjaxLoadAry();
    $("#divMain").html("");

    $("#btnShowAll").css("display","unset");

    $.each( LoadArray, function( i, val )
    {
        var pId,c=0;
        var div=$("<div></div>");
        div.attr({"id":val["pid"],"name":"divMainAry","num":i});
        if(i>=5)
            div.addClass("displaySlot displaynone");
        else
            div.addClass("displaySlot");
        $("#divMain").append(div);

        var img=$("<img>");
        img.addClass("mainImg");
        img.attr("src",val["pimg"]);
        div.append(img);

        var h4=$("<h4></h4>");
        h4.text(val["pname"]);
        div.append(h4);
    });

}


var openFile = function(file)
{
    var input = file.target;

    var reader = new FileReader();
    reader.onload = function()
    {
      var dataURL = reader.result;
      var output = document.getElementById('ShowImg');
      output.src = dataURL;
    };
    reader.readAsDataURL(input.files[0]);
  };



////////ajax


function AjaxLikePlant()
{

    var pid=$("#btnLike").attr("pid");


    $.ajax(
    {
        type:"POST",
        dataType:"json",
        url:"function.php",
        data:{post:"Like",pid:pid},
        async:false,
        beforeSend: function()
        {},
        complete:function()
        {},
        success: function (data)
        {
            if(data==1)
            {
                alert("Like Success");
                generateDivMainAry();
            }
            else
            {
                alert("Like Fail");
            }
        },
        error: function ()
        {
            alert("Error! Like");
        },
    });
}

function AjaxUpdatePlant()
{

    var pid=$("#btnUpdatePlant").attr("pid");
    var pname=$("#inName").val();
    var psize=$("#inSlc").find(":selected").text();
    var pdesc=$("#inDesc").val();
    var pimg;

    var fileInput = $.trim($("#img_file").val());
    if (fileInput && fileInput !== '')
    {
        pimg=uploadFile($("#Img_form"));
    }
    else
    {
        pimg=0;
    }

    $.ajax(
    {
        type:"POST",
        dataType:"json",
        url:"function.php",
        data:{post:"Upd",pid:pid,pname:pname,psize:psize,pdesc:pdesc,pimg:pimg},
        async:false,
        beforeSend: function()
        {},
        complete:function()
        {},
        success: function (data)
        {
            if(data==1)
            {
                alert("Update Success");
                generateDivMainAry();
            }
            else
            {
                alert("Update Fail");
            }
        },
        error: function ()
        {
            alert("Error! Update");
        },
    });
}
function AjaxRegPlant()
{

    var pname=$("#inName").val();
    var psize=$("#inSlc").find(":selected").text();
    var pdesc=$("#inDesc").val();
    var pimg=uploadFile($("#Img_form"));
    $.ajax(
    {
        type:"POST",
        dataType:"json",
        url:"function.php",
        data:{post:"Reg",pname:pname,psize:psize,pdesc:pdesc,pimg:pimg},
        async:false,
        beforeSend: function()
        {},
        complete:function()
        {},
        success: function (data)
        {
            if(data==1)
            {
                alert("Upload Success");
                generateDivMainAry();
            }
            else
            {
                alert("Upload Fail");
            }
        },
        error: function ()
        {
            alert("Error! Upload");
        },
    });
}

function AjaxLoadAry()
{
	var rdata;
	$.ajax(
    {
        type:"POST",
        dataType:"json",
        url:"function.php",
        data:{post:"LoadAry"},
        async:false,
        beforeSend: function()
        {},
        complete:function()
        {},
        success: function (data)
        {
			rdata=data;
        },
        error: function ()
        {

        },
    });
	return rdata;
}

//////////////Upload file
function uploadFile(ele)
{
    var rtn=0;
    $.ajax(
    {
        type: 'POST',
        cache: false,
        data: new FormData(ele[0]),
        processData: false,
        contentType: false,
        url: "uploadFunction.php",
        async:false,
        beforeSend: function()
        {},
        complete:function()
        {},
        success: function(data)
        {
            if(data==0)
            {
            }
            else if(data==2)
            {
                alert("fail upload");
            }
            data=data.replace(/\\\/|\/\\/g, "/");
            rtn= data.replace(/"/g, "");
        },
        error: function ()
        {
			rtn=2;
            alert("Error! Upload");
        },
    });

    return rtn;
}
