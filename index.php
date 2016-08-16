<?php
require 'head.php';
?>
  <div class="row">
    <div class="col-md-6">
      <picture>
        <img id="wj_main_pic" src="images/profile-pic.jpg" alt="main picture" />
      </picture>
      <div id="wj_summary">
        <h2 class="h2">Who is Bill Jellesma?</h2>
        <p>I am a full stack engineer located in the Worcester, Massachusetts area.
          I have a clear passion in technology as well as the technical prowess to apply it.
          My goal is to use my knowledge to help create and further applications that will benefit society.
          If you're interested in projects I've accomplished and want to learn more, please read on!
        </p>
      </div>
    </div>
    <div class="col-md-6">
      <section id="wj_recent_work">
        <h2 class="h2">Recent Work</h2>
        <div class="wj_recent_work_item">
          <a href="https://github.com/bjellesma/BillJellesmaHelpDesk"><img alt="PyChat" src="images/PyChat-1.PNG">
          PyChat</a>
          <p>A chat program written in Python</p>
        </div>
        <div class="wj_recent_work_item">
          <a href="https://github.com/bjellesma/Java-Chat-and-Bot"><img alt="Java Chat" src="images/Java-Chat-1.PNG">
          Java Chat and Bot</a>
          <p>Written in Java, this program will connect you to a database via JDBC where you can talk with other friends or with a friendly bot named Steve.</p>
        </div>
        <div class="wj_recent_work_item">
          <a href="https://github.com/bjellesma/Udacity-FSND-Movie-Trailer-Website"><img alt="Movie Trailer Website" src="images/Movie-Trailer-Website-1.PNG">
          Movie Trailer Website</a>
          <p>A mini python web server used to build a database of your favorite movie. Also makes use of IMDB's python API to grab metadata. Clicking on the items will bring up a youtube trailer.</p>
        </div>
        <div class="wj_recent_work_item">
          <a href="https://github.com/bjellesma/PhpPalette"><img alt="Php Palette" src="images/PhpPalette-1.PNG">
          PhpPalette</a>
          <p>A netbeans plugin to assist in the learning of PHP.</p>
        </div>
      </section>
    </div>
  </div>
<?php
  require 'footer.php';
?>
