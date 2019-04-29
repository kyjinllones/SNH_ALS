

			$(function(){
			var lib=new Object();
	$("#asubmit).click(function(){

		
		lib["Type"]=$("#Type").val();
		lib["lrnInput"]=$("#lrnInput").val();
		lib["lfnameInput"]=$("#fnameInput").val();
		lib["addressInput"]=$("#addressInput").val();
		 $("input").val("");


	

})
$("#Submit").click(function(){
	 $("#Display").append("<tr>")   	
				for(x in lib)
				{
	
			$("#Display").append("<td>"+lib[x]+"</td>")
				}
		     $("#Display").append("</tr>")  				 	 			
			})

	
	





	


 
 	
	
	
 	







})

 


	



		</script>
