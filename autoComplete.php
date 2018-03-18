<select class="js-example-basic-multiple" name="states[]" multiple="multiple"
	style="
		 width:100%;
	"
>
  <option>Size:8</option>
  <option>Local Pickup:Pensacola</option>
  <option>Shipping available</option>
</select>
<script>
$(document).ready(function(){
    $('.js-example-basic-multiple')
		.select2({
			tags:true, 
			tokenSeparators:[' ',',']
		});
});
</script>
