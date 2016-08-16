# BillJellesma.com
## Table of contents
* [Quick Start](#quick-start)
* [Technologies](#technologies)
* [Editing Guide](#editing-guide)
## <a name="quick-start">Quick Start</a>
<p>To render this website in your own environment, the following steps are recommended for a windows environment:
  1. Download and install [WampServer](http://www.wampserver.com/en/)
  2. Start WampServer and wait for the icon to turn from red to yellow to green
  3. Download or clone this repository into C:\Wamp\www\
  4. Open a web browser and navigate to localhost\BillJellesmaHelpDesk in the address bar
  5. Download and install [nodejs](https://nodejs.org/en/download/)
  6. Use Node to install Grunt<br>
  `npm install -g grunt-cli`
  7. install the grunt sass taskrunner with <br>
  `npm install grunt-sass-contrib --save-dev`
  8. Download and install composer from The official website
  9. Migrate the current database over using `php artisan migrate`
## <a name="technologies">Technologies</a></h2>
<p>I have used several technologies in this project in order to help my workflow. I've outlined these technologies here
* [Gruntjs](http://gruntjs.com/)
  <p>Gruntjs is a taskrunner that I've used to help compile my sass code into css that the browser can interpret</p>
* [Bootstrap](http://getbootstrap.com/)
  <p>Bootstrap is an HTML5/CSS3 framework that I use to help structure my website</p>
* [PHPMailer](https://github.com/PHPMailer/PHPMailer)
  <p>PHPMailer is used as a secure way to send email</p>
## <a name="editing-guide">Editing Guide</a></h2>
<p>To make edits, please use the following guide</p>
* To make any changes to the front end, please check [Bootstrap's documentation](http://getbootstrap.com/) to see if the task can be accomplished that way
* When looking to make changes to the styles of the website, please use the .scss files in the css directory and compile into .css files if possible
* To create any page, make sure to make the page with the php file extention and include the head.php file
