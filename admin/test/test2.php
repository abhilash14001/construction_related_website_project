<script src="../assets/libs/jquery/dist/jquery.min.js"></script>
<div id = "keyup">
<input type =  "text" id  = "firstnum">
<input type =  "text" id  = "secnum">
<input type =  "text" id  = "result">
</div>
<script>
$('#keyup').keyup(function(){	
	var first = $('#firstnum').val();
var second = $('#secnum').val();
if(second != "" && first != ""){
var result = parseFloat(first) + parseFloat(second);
$('#result').val(result);
}
});

	</script>