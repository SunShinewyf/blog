$(function(){
	$("#change-form").submit(function(){
		var password=$("#password");
		  var repassword=$("#repassword");
		  if(password.val()=="")
		  {
		      $("#msg").text("请填写新密码!");
			      password.focus();
			      return false;
			  }
		  else if(repassword.val()=="")
		  {
		      $("#msg").text("请填写确认密码!");
			      repassword.focus();
			      return false;
			  }
		  else if(!(password.val()==repassword.val()))
			  {
			      $("#msg").text("两次填写的密码信息不一致，请重新填写");
				      repassword.focus();
				      return false;
				  }
		return true;
	}); 
});


//模块添加的部分
$(function(){
		$("#module-form").submit(function(){
		var nickname=$("#nickname");
		var desc=$("#desc");
		if(nickname.val()=="")
			{
			   $("#msg").text("请填写模块名");
			   nickname.focus();
			   return  false;
			}
		else if(desc.val()=="")
			{
			　　$("#msg").text("请填写模块信息");
			    desc.focus();
			    return false;
			}
		return true;
	});
});


//文章添加的部分
$(function(){
	  $("#article-form").submit(function(){
		  var title = $("#title");
		  var author = $('#author');
		  var mname = $("#mname");
		  
		  if(title.val()=="")
			  {
			     $("#msg").text("请填写文章标题!");
			     title.focus();
			     return false;
			  }
		  else if(author.val()==""){
			  $("#msg").text("请填写文章作者!");
			  author.focus();
			  return false;
		  }
		  else if(mname.val() =="0")
			  {
			     $("#msg").text("请选择文章所属模块!");
			     mname.focus();
			     return false;
			     
			  }
		
		  var ue = UE.getEditor('editor');
		   
		   if(ue.hasContents()==false)
		   {
		      //alert('ff');
			   $("#msg").text("请加入文章!");
			  ue.focus();
			  return false;
		   }
		  return true;
		  
	  });
});