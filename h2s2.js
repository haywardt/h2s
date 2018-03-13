/* -------- Generation:Five --------
{{col}} for static replacement directly after page

	{edit:col} replaces with HTML required for an edit field
	{view:name,lpp} returns lpp results starting at {Page}
	{view:name} returns a single result


data-tbl=table|view name.
data-col=column name.
data-row=max child div,span,td,ul.li,ol.li repeats for each row in the 
            result set up to max times. goes on the parent item. The text of this
            field represents the page number such that the LIMIT clause is:
                LIMIT (text-1)*max,max
data-row return total result set(really 999)
missing data-row return 1 result

*/
/* global $ */
// on document ready
$(document).ready(function(){
    
//  foreach data-tbl tags 
    $("[data-tbl]").each(function(){
        var tblElement=this;
        
//      get the table name
        var table = $(this).attr("data-tbl");
        
//      get the max row (default to 1 if no data-row tag)
        var rowSel=$(tblElement).find("[data-row]");
        if($(rowSel).length==0) { // no data-row selector
            var rows=1;
            var page=1;
        } else {                    // has a data-row selector
            
            var rows = $(rowSel).attr("data-row");
            if(rows=="") {          //      data-row selector with no value
                rows=999;page=1     //  default to 999 rows
                
            } else {                // data row selector with value
                var page = parseInt($(rowSel).text());
                if(!page) page=1;  // invalid or missing page number
                                    // should move to a data-page tag
            }
            
        }
        
//      foreach data-col
        var columns=new Array(0);
        $(tblElement).find("[data-col]").each(function(){
//          get the column names
            columns.push($(this).attr("data-col"));
        })
//      next col
//      submit the ajax get
        var data=JSON.stringify({"table":table,"page":page,"rows":rows,"columns":columns})
        console.log('Requested:')
        console.dir(data)
        var request = $.get('h2s2.php',{"q":data})
        .done(function(response){
            console.log("success:\n\r"+response);
            processResults(response);
        })
        .fail(function(response){ //      if(401) pop up modal login box, exit

            if( response.status==401){
                window.location="login.html"
            }
            
            
        });
//  next tbl
    });
});
//
//  function results
function processResults(response){
//  if a single row is returned just update the row elements    
    replaceStatic();
//  empty all data-rows of data-tbl except first one
    var responseArray = JSON.parse(response);
    $('[data-tbl='+ responseArray[0][0][0] +']  [data-row='+ responseArray[0][0][2] +']').not(':first').remove();

//  foreach row in the result set(one row per html field)
for(var j=0;j<responseArray.length;j++){
    var rowArray=responseArray[j];
    for (var i=0;i<rowArray.length;i++){
        var item=rowArray[i];
            // item[0] = table name
            // item[1] = key
            // item[2] = column name
            // item[3] = value
            // item[4] = editable
            var elementStr ="[data-tbl="+item[0]+"]  [data-col="+item[2]+"]:last";
            var element =  $(elementStr);
            $(element).text(item[3]);
            $(element).data('key',item[0]+' '+item[2]+' '+item[1]);
            $(element).attr('contenteditable',true);
            $(element).on('blur',updateSql);
            $(element).on('focus',saveValue);

    }
    // next item
    // clone a new row
			replaceElements();
            var rowSelector='[data-tbl='+item[0]+']  [data-row]:last';
            $(rowSelector).after($(rowSelector).clone());
      }
//      next item

//  remove the last cloned, but unused row
      $(rowSelector).last().remove();
//      create an insert button
}
//  end function
//
var fieldValue='';
function saveValue(){
    fieldValue=$(this).text();
}
function updateSql(){
//      if no change return
        if(fieldValue==$(this).text()) return;
//      generate ajax load.post(key,value)
        var post = {k:$(this).data("key"),v:$(this).text()}
        $(this).load('h2s2.php',post)
}
// 
//
//	replace all {} elements using regex
function replaceStatic(){
	
}
//	replace the HTML inside tags using regex
function replaceElements(){
	
}
//  function loginButton
//      generate ajax.post(database,user,password)
//      clear modal
//  end function
