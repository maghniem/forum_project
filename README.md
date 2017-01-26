# forum_project

This website was created as the final project for 03-60-334 for Summer 2016.


README

******** Setup Instructions ********

Extract web application in localhost server directory.

Before using the website, you are required to install a MySQL database stable release version 5.0 or higher, and php version 5.0.

phpMyAdmin was used to create a database called 334project with the following information:
username: pj_user
password: 123

If you wish to setup your own username and password and databse name,
Modify files below with SQL the information:

1. Go to file 'utils.php', line 169 and modify dbname,dbuser,dbpassword.
Note: comments in the code will provide any additional instructions that you might need.

2. Go to file 'connect.php', line 5 and modify dbname,dbuser,dbpassword.
Note: comments in the code will provide any additional instructions that you might need.

3. Go to file 'add_topic.php', line 5 and modify $host, $username, $password, $db_name.
Note: comments in the code will provide any additional instructions that you might need.

4. Go to file 'add_answer.php', line 5 and modify $host, $username, $password, $db_name.
Note: comments in the code will provide any additional instructions that you might need.

5. Go to file 'forums.php', line 8 and modify $host, $username, $password, $db_name.
Note: comments in the code will provide any additional instructions that you might need.

6. Go to file 'view_topics.php', line 3 and modify $host, $username, $password, $db_name.
Note: comments in the code will provide any additional instructions that you might need.




TinyMCE is a portable HTML editor included as a site editor tool for the admin of the site to
edit the information page when logged in

******** How to Install ********
once the datebase is setup:

load localhost or the website name with /install.php

localhost/install.php

install.php is the script that will create the tables using the database setup above
and prepopulate them.

install.php will auto redirect to index.php once complete. 

ONLY RUN INSTALL.PHP ONCE

******** User Walkthrough ********
Afet installing using above instructions, 

A user must enable cookies to use the site
1) he/she can browse the information pages, history wiki and picture pages without an account
2) if the user wishes to take part in the forum he/she must register an account
3) once registered the user can view and create a topic in the forum
4) the user logged in can upload a picture and wait for admin to allow it
5) if the user is the admin of the site, he/she can edit the history pages and information page
