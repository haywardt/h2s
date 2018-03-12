# h2s
HTML2SQL bridge

Generation Five!

Is a javascript or php preprocessor that converts template language into html/css/javascript.

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
		sets the name of the column from which to retrieve the data
		
edit	{edit:colunmName}
		editable colunm

auto	{auto:columnName}
		autocomplete item
		
exec	{timer} execution timer



The first iteration could be blocks of code interspersed with the {:} that are replaced with inline code processed by either php or javascript.
The blocks are embedded in HTML but it is possible that the entire interface will consist of blocks at some point. 


	
	
	
ToDo::

	Figure out the template language
	
		What editor will you create in?
		
		Is it based on HTML? Yes, it doesn't need a templating language when it has a built in HTML WYSIWYG editor.
		
	
	Figure out the client side. Its very tempting to make the server just return javascript to be executed.

	

3/10/2018 created build environment (github, atom, xampp)

