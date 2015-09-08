#! /bin/bash

# This is a little CGI program


###################################################################
# The following are environment variables that are available to you
#
# CONTENT_TYPE:      The MIME type of associated with the option body of the HTTP request.
# CONTENT_LENGTH:    The length of the query information.
# GATEWAT_INTERFACE: Currently CGI/1.1
# HTTP_HOST:         The name of the vhost of the server.  
# HTTP_USER_AGENT:   Information about the browser/client that made requested.
# QUERY_STRING:      The query string.
# REQUEST_METHOD:    The method used to make the request. The most common methods are GET and POST.
# REQUEST_URI:       The URI of the request
# SERVER_PROTOCOL:   Currently HTTP/1.1
# SCRIPT_FILENAME:   The full path to the CGI script.
# SCRIPT_NAME:       The name (i.e., URI) of the CGI script.
# SERVER_NAME:       The server's hostname or IP Address
# SERVER_PORT:       The port of the server


#      Added a content type and a blank line

echo "X-Cit-160: hello again steve!"
echo "Content-type: text/html"
echo ""

	
echo "<HTML>"
echo "<HEAD>"
echo "<link rel="stylesheet" type="text/css" href="../css/style.css">"
echo "<TITLE>CGI COMP490</TITLE>"
echo "<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js\"></script>";
echo '<link rel="stylesheet" type="text/css" href="css/style.css">';
echo "</HEAD>"
echo "<BODY>"
echo "<div class="mainWrapper">"
echo "<div class="navigation">"            
echo "<ul>" 
echo "<li><a href="../index.php">About</a></li>"              
echo "<li><a href="simple.cgi?simple.cgi">Simple CGI </a></li>"                    
echo "<li id="active"><a href="../signup.php">Sign up</a></li>"
echo " </ul>"                    
echo "</div>"
echo "<div class="content">"                    


     name="$(echo $QUERY_STRING|cut -d\& -f1|cut -d= -f2)"
	 email="$(echo $QUERY_STRING|cut -d\& -f2|cut -d= -f2)"
	 username="$(echo $QUERY_STRING|cut -d\& -f3|cut -d= -f2)"
     echo "Thank you " $name
	 echo "<br/>"
     echo "You have registred weith us under" $username
     echo "."	 
     echo "<br/>"
	 echo "We will contact you shortly via your registered email address "$email  
  
              
               



		echo "</div>"
	    echo "</DIV>"
	    echo "</BODY>"
	    echo "</HTML>"

	    exit 0
