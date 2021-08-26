

When registering users in a database table, you want to make sure that each user's email address or username is unique.
This can be doone using JQuery and Ajax, without submitting the form or reloading the page.


### 

The user visits the register page, enters their username, email and password. When the cursor leaves the username field (an event referred to in JavaScript as onblur,  a username check is done in the background through an ajax call to the server without the user even clicking the submit button. If a user with the provided username already exists in the database, a validation message with appropriate styling is displayed right away.
