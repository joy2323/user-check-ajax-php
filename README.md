

When registering users in a database table, you want to make sure that each user's email address or username is unique.
This can be doone using JQuery and Ajax, without submitting the form or reloading the page.


### How it Works!

The user visits the register page, enters their username, email and password. When the cursor leaves the username field (an event referred to in JavaScript as onblur,  a username check is done in the background through an ajax call to the server without the user even clicking the submit button. If a user with the provided username already exists in the database, a validation message with appropriate styling is displayed right away.


# In register.php 

The last two lines specify the javascript files that are used in this application. 

#First is JQuery which you can download from 
     https://jquery.com/download/

or copy the entire code from
    https://code.jquery.com/jquery-3.6.0.min.js
       

##And there is also the script.js file where we will write our own JavaScript code. 

###Create a jquery file in the root directory of th application - jquery-3.6.0.min.js. 

####Copy and paste the code gotten from https://code.jquery.com/jquery-3.6.0.min.js in the file
