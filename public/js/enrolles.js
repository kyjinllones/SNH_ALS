$(function(){
			var enrol=new Object();
	$("#addword").click(function(){

		
		enrol["lrn"]=$("#lrn").val();
		enrol["name"]=$("#name").val();
		enrol["address"]=$("#address").val();
		enrol["age"]=$("#age").val();
		enrol["birthdate"]=$("#birthdate").val();
		enrol["sex"]=$("#sex").val();
		enrol["civil"]=$("#civil").val();
		enrol["level"]=$("#level").val();
		 $("input").val("");


	

})
$("#Submit").click(function(){
	 $("#addword").append("<tr>")   	
				for(x in enrol)
				{
	
			$("#addword").append("<td>"+enrol[x]+"</td>")
				}
		     $("#addword").append("</tr>")  				 	 			
			})