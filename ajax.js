//insert section start here

$(".btn").click(function (e) {
    e.preventDefault();
    var name = $("#name").val();
    var email = $("#email").val();
    var pass = $("#pass").val();

    $.ajax({
        method:"POST",
        url:"insert.php",
        data:{name:name,email:email,pass:pass},
        success:function () {
            read();
        }
    });
});
//insert section end here

//reading section start here
function read() {
    var read = "";
    $.ajax({
        method:"POST",
        url:"read.php",
        data:{read:read},
        success:function (data) {
            $("#tbody").html(data);
        }
    });

}
//reading section end here

//delete section start here

function Delete(userId){
   $con = confirm("Are you sure you want to delete");

   if ($con==true) {
    $.ajax({
        url:"delete.php",
        method:"POST",
        data:{userId:userId},
        success:function () {
            read();
        }
    });
   }
}
//delete section end here

//edit section start here
function Edit(userId){
    $.ajax({
        url:"edit.php",
        method:"GET",
        data:{userId:userId},
        success:function (data) {
            $("body").html(data);
        }
    });
}
//read section start here
$(".readbtn").click(function(e){
    e.preventDefault();
    var read = "";
    $.ajax({
        method:"POST",
        url:"read.php",
        data:{read:read},
        success:function (data) {
            $("#tbody").html(data);
        }
    });
});

//update section start here
function Update(userId){
    var name = $("#name").val();
    var email = $("#email").val();
    var pass = $("#pass").val();

    $.ajax({
        url:"update.php",
        method:"GET",
        data:{name:name,email:email,pass:pass,userId:userId},
        success:function (data) {
            alert(data);
        }
    });
}