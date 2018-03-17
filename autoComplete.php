<select class="js-example-basic-multiple" name="states[]" multiple="multiple"
	style="
		 width:100%;
	"
>
  <option value="AL">Alabama</option>
  <option value="TX">Texas</option>
  <option value="WY">Wyoming</option>
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
