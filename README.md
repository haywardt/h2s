# h2s
HTML2SQL bridge

ToDo:
	Write the first test. The demo page.
	A CKEditor field
	
	
Generation Five!

Is a php and javascript preprocessor that converts template language into html/css/javascript.

First convert {{component:}} to php statements, then include this php to execute it. The code is sent to the client where javascript runs a substitution of its own

file.h2 ----- server side substitution ----> file.php

file.php ------ included ------------------> headers HTML, Javascript, CSS to the client

HTML ----------- Javascript sub engine ----> HTML with javascript runs when body or inner elements are updated.

	Its a set of server services(get view:cols, update:cols,index,value)
	returns the number of rows: starting at page: of the return set.
	The preprocessor consists of a set of regex expressions

----

Made for use with an embedded WYSIWYG editor. Controls each have an associated class. Parameters are stored in data- tag value

Components
------- -------------------------------

view	{view:viewname}

		sets the name of the table or view for all following columns until the next table tag

row		<td {row:pageSize}
		identifies the div that is to be replicated for each row in the result 

page   	{page:pageNumber}
		identifies the page number

col		{col:columnName}
		or {{columnName}}
		sets the name of the column from which to retrieve the data
		
edit	{edit:colunmName}
		editable colunm

auto	{auto:columnName}
		autocomplete item. adds the html, javascript, and 
		
exec	{runtime} execution timer

index	{index} index of this row


The first iteration could be blocks of code interspersed with the {} that are replaced with inline code processed by javascript.

The substitution process takes place on the body element at document.ready. Substitution of the row and cell items takes place at http.response.  
The blocks are embedded in HTML but it is possible that the entire interface will consist of blocks at some point. 


	
	
	
ToDo::

	Figure out the template language
	
		What editor will you create in?
		
		Is it based on HTML? Yes, it doesn't need a templating language when it has a built in HTML WYSIWYG editor.
		
	
	Figure out the client side. Its very tempting to make the server just return javascript to be executed.

	

3/10/2018 created build environment (github, atom, xampp)

