     $(function(){
    	 var tent = $('.title-list li');
    	// alert(tent.length);
    	if(tent.length==0)
    		{
    		    $.get("__URL__/tui",function(data){
    		        $(".title-list").empty();
			        var count = data.length;
                    var i = 0;
                    var b="";
                       for(i=0;i<count;i++){
                           b += '<li><a href="__URL__/detail/e/'+data[i].aid+'">'+ data[i].atitle +'</a></li>';
                       }
                    $(".title-list").append(b);
    		    });
    		}
    	
    	 $("#hot").mouseover(function(){
    		 $.ajax({
    			 url: "__URL__/hot",
    			 type: "post",
    			 success: function(data){
    				    $(".title-list").empty();
    			        var count = data.length;
                        var i = 0;
                        var b="";
                           for(i=0;i<count;i++){
                               b += '<li><a href="__URL__/detail/e/'+data[i].aid+'">'+ data[i].atitle +'</a></li>';
                           }
                        $(".title-list").append(b);
    			 }
    		 });
    	 });
    	 
    	 $("#tui").mouseover(function(){
    		 $.ajax({
    			 url: "__URL__/tui",
    			 type: "post",
    			 success: function(data){
    				    $(".title-list").empty();
    			        var count = data.length;
                        var i = 0;
                        var b="";
                           for(i=0;i<count;i++){
                               b += '<li><a href="__URL__/detail/e/'+data[i].aid+'">'+ data[i].atitle +'</a></li>';
                           }
                        $(".title-list").append(b);
    			 }
    		 });
    	 })
    	 
     });
