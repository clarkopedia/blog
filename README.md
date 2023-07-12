Overview
The Blog project is a responsive blogging application developed with PHP MySQL. 
It offers a wide range of features, such as the ability for Administrators to post blogs under different categories, as well as the ability to add categories, post, and view statistics under the dashboard. 
This project provides a comprehensive blogging site for users, with a homepage from which users can access the most recent blogs, as well as a Sub-Navbar with all the necessary credentials from the Admin dashboard.

To run the project on your pc/laptop :

Download the .zip file and extract the files from it.
Paste the folder inside the xampp/htdocs folder.
Open the includes folder inside the main folder, you will find a blog.sql file. Import the .sql file in your database.
Open your project in an editor and setup your database connection in following path: admin/config/dbcon.php
Goto includes/config.php => change your domain path in base_url functing for Correct page call.
Goto dot htaccess file to ErrorDocument and update your domain path for 404 Page Error.
Open your browser and paste "localhost/php-blog/" in the browser. Your project will be running successfully.
For the Super_Admin & Admin login, go to given url in the browser: http://localhost/php-blog/

You will directed to the login page.

The Credential for SuperAdmin & Admin login details are given in the readme.txt file in your project.
