$(document).ready(function(){
  //alert('test');
  $("#NewPass").click(function(){
  	var OldPass = $("#OldPass").val();
  	$.ajax({
  		type: 'get',
  		url: '/admin/chkPass',
  		data:{OldPass:OldPass},
  		success:function(resp){
  			alert(resp);
  		},error:function(){
  			alert("Error");
  		}
  	});
  });
});