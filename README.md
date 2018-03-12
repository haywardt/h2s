# h2s
HTML2SQL bridge

Generation Five!

Made for use with an embedded WYSIWYG editor. Controls each have an associated class. Parameters are stored in data- tag value

Components
------- -------------------------------

table	sets the name of the table or view for all following columns until the next table tag

row		identifies the div that is to be replicated for each row in the result 

col		sets the name of the column from which to retrieve the data

	edit	makes the col updatable 

	auto	makes the col updatable and autocomplete

	
	
	
ToDo::

	Figure out the template language
	
		What editor will you create in?
		
		Is it based on HTML? Yes, it doesn't need a templating language when it has a built in HTML WYSIWYG editor.
		
	
	Figure out the client side. Its very tempting to make the server just return javascript to be executed.

	

3/10/2018 created build environment (github, atom, xampp)

c3a279ce2cb71b6be3225cce340f92f7  ckeditor4.html
1940720278742495d5f23ded69be4bd1  ckeditor5.html
46334a6851fe88faf87b6a9c78200d73  index.php
06b9b3b17c7ad3d553421c972a6a327f  lib.php
2ec44667f451c92465189b612488b18e  README.md


