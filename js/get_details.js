//Found issue: POST is getting stuck. The PHP is refreshing that  file before it
//recieves the POST data.
//Needs Restructure to solve isssue.
//THerefore, this is 'Succedding' in the way that it is handled by JS/ajax
//Maybe use a  ext. Lib
$( document ).ready(function() {

$("select").change(function(self){//Submit form on change
var value = $(this).val();

var values = {value: value};

$.ajax({
  dataType: 'text',
url: "inc/getuser.php",
method: "POST",
data: values,

success: function(result){
//document.getElementById('userID').innerHTML = value;
console.log(value);
}
});


});
});
