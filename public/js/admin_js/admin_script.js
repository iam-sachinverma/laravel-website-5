$(document).ready(function(){
    // Check Current Admin Password 
    $("#current_pwd").keyup(function(){
        var current_pwd = $("#current_pwd").val();
        //alert(current_pwd);
        $.ajax({
            type:'post',
            url:'/admin/check-current-pwd',
            data:{current_pwd:current_pwd},
            success:function(resp){
                if(resp=="false"){
                    $("#chkCurrentPwd").html("<font color=red>Current Password is incorrect</font>");
                }else if(resp=="true"){
                    $("#chkCurrentPwd").html("<font color=green>Current Password is correct</font>");
                }   
            },error:function(){
                alert("Error");
            }
        });
    });

  
    // SweetAlert (Confirm Deletion of any record)
    $(document).on("click",".confirmDelete",function(){
        var record = $(this).attr("record");
        var recordid = $(this).attr("recordid");
        Swal.fire({
            title: "Are you sure?",
            text: "Once deleted, you will not be able to recover this file!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
          })
          .then((result) => {
            if (result.isConfirmed) {
              window.location.href="/admin/delete-"+record+"/"+recordid;
            } 
          });

    });
    
 
  
    
});



