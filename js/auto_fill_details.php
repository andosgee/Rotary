

<script type="text/javascript">
//Auto fills the form with the details of the user



function autoFillForm() {

  autoFillField('cgn_details_name_f',);

}

function autoFillField(fieldName,value){
  return document.getElementsByName(fieldName).item(0).setAttribute("value",value);
}

</script>
