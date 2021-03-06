##Coderlytics Installation Guide
 =======================
 
 Introduction
 ------------
 Coderlytics is built using [Laravel 5.3 PHP Framework](http://laravel.com/)</a>:
 
 System Requirements
 -----------------------
 
 This section outlines the requirements used when developing the Coderlytics platform.
 The "AMP" (Apache, Mysql, PHP) Stack
 
 * PHP >= 5.6
 * OpenSSL PHP Extension
 * PDO PHP Extension
 * Mbstring PHP Extension
 * Tokenizer PHP Extension
 
 * MySQL version 5.0 or greater
 * An HTTP Server. Laravel, which Coderlytics is built on is known to work with the following web servers:
 * Apache 1.3+
 * Apache2.0+
 * Unicode support in the operating system
 
 Laravel utilizes [Composer](http://getcomposer.org/)</a> to manage its dependencies. So, before using Laravel, make sure you have Composer installed on your machine.
 
 Required PHP Extensions
 --------------------------
 The following is a list of PHP extensions that must be installed on the server in order to run Coderlytics:
 
 * [PCRE](http://php.net/pcre) must be compiled with --enable-utf8 and --enableunicode-properties for UTF-8 functions to work properly.
 * [cURL](http://php.net/curl) which is used to access remote sites.
 * [MySQL](http://php.net/mysql) is required for database access.
 * php mcrypt
 **TIP:** Need to figure out what extensions you already have installed on your server? Here are instructions to do just that http://jontangerine.com/silo/php/phpinfo/
 
 Installation
 ------------
 Assuming you have php, mysql and apache server installed on your computer
 
 1.  clone the repo git clone git clone https://github.com/le-yo/coderlytics.git into your www folder
 2.  From terminal and while at the root dir for this project run composer install
 3.  Also from root, cp .env.example .env and edit the file .env as per your new db and credentials
 //copy the env example
 $ sudo cp .env.example .env
 //edit the .env. changing the mysql database, host and password as per your exact credentials
 $ sudo nano .env
 
 4.  Run php artisan migrate (to populate your database with the tables)
 5.  Run php artisan db:seed (to populate your tables with data)
 6.  chmod 775 storage, sometimes it works with chmod 777
 7.  php artisan key:generate
 8.  You are almost done,but just one more thing. You need to set up  a virtual host; things works best when you have a virtual host
 
     If you are using linux ubuntu, this digital ocean tutorial explains the process of setting up virtual host very well
     https://www.digitalocean.com/community/articles/how-to-set-up-apache-virtual-hosts-on-ubuntu-12-04-lts
 
     On the other hand if you are using windows, this looks like a good one
     http://austin.passy.co/2012/setting-up-virtual-hosts-wordpress-multisite-with-xampp-on-windows-7/
 
     This came up as the first result(http://davidwalsh.name/create-virtual-host) when I searched for setting up a virtual host in mac but I do beleive there is a much better and smoother way to do this. Will update when I find a better way
 
     After setting up the virtual hosts, make sure you have restarted the server
 
     • with ubuntu run the command sudo service apache2 restart
 
     • windows do it from the server icon in the notification area of your taskbar
 
     • mac guys will use this sudo apachectl restart
 
 if you do not have php, mysql database and apache server installed
 
 Linux Ubuntu users
 
 Digital ocean has given a step by step procedure on how to go about this in a very simple and easy to follow way.
 The tutorial is meant for users who are setting up in their virtual machine but it also applies to local
 machines as the virtual machine simulates the local machine
 https://www.digitalocean.com/community/articles/how-to-install-linux-apache-mysql-php-lamp-stack-on-ubuntu
 
 Windows users
 
 If you download xammp for windows, it comes with all the three
 https://www.apachefriends.org/download.html
 
 Apple users
 
 https://www.apachefriends.org/download.html
 
 
 Ensure you point your root to public
 
 Recommendation:
 
 As the system continues increasing in complexity, it is good to have a dashboard and a notification for tests failures. Tests should also be integrated to the deployment process i.e. add hooks for deployment to staging/live if and only if certain threshold tests are passed.
