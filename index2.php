<select class="js-example-basic-multiple" name="states[]" multiple="multiple">
  <option value="AL">Alabama</option>
    ...
  <option value="WY">Wyoming</option>
</select>
<script>
$(document).ready(function(){
    $('.js-example-basic-multiple').select2({tags:true, tokenSeparators:[' ',',']});
});
</script>
