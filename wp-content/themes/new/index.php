<!--Formerly frontpage.html-->

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="icon" href="">
    <title> Innovation Portal - UC San Diego </title>

    <!--Bootstrap CSS-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

    <!-- My CSS & JS -->
    <link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/frontpage.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
</head>

<body>

  <div class="header">
    <div class="header-background">
      <h1 class="header-text">Get Involved On Campus</h1>
      <hr class="header-line">
      <p class="header-text">Explore UCSD's innovation and entrepreneurship programs</p>
    </div>
  </div>

  <div class="identify">
    <h4 class="ident-user">Who are you?</h4>
    <form>
      <ul class="ident-user user-cards">
        <div class="cards">
          <li class="ident-user"><input type="image" name="alumniFriends" src="<?php echo get_bloginfo('template_directory'); ?>/img/alumni.svg"></li>
          <p>Alumni & Friends</p>
        </div>

        <div class="cards">
          <li class="ident-user"><input type="image" name="Faculty" src="<?php echo get_bloginfo('template_directory'); ?>/img/faculty.svg"></li>
          <p>Faculty & Postdocs</p>
        </div>

        <div class="cards">
          <li class="ident-user"><input type="image" name="Students" src="<?php echo get_bloginfo('template_directory'); ?>/img/student.svg"></li>
          <p>Students</p>
        </div>
      </ul>
      <h4 class="ident-user">What are you looking for?</h4>
      <ul class="ident-topic">
       	<li class="ident-topic"><input type="checkbox"> Professional Development</li>
       	<li class="ident-topic"><input type="checkbox"> Funding or Competitions</li>
       	<li class="ident-topic"><input type="checkbox"> Commercialization</li>
       	<li class="ident-topic"><input type="checkbox"> Networking &amp; Events</li>
       	<li class="ident-topic"><input type="checkbox"> Mentor and Volunteer</li>
       	<li class="ident-topic"><input type="checkbox"> Recruiting</li>
      </ul>
    </form>
  </div>

  <div class="topics">
    <div class="tabs">
      <button type="button" disabled>All Topics</button>
      <!--
      <button type="button" class="tablinks">Topic 1</button>
      <button type="button" class="tablinks">Topic 2</button>
      <button type="button" class="tablinks">Topic 3</button>
      <button type="button" class="tablinks">Topic 4</button>
      -->
    </div>

    <div id="AllTopics" class="tabcontent">
      <!--  <img class="topic-background" src="./img/ucsdlibrary.png" alt="">-->
        <a href="<?php echo get_bloginfo('template_directory'); ?>/resource.php" class="resource">
          <img class="resource-img" src="<?php echo get_bloginfo('template_directory'); ?>/img/placeholder.png">
          <div class="overlay"><h2>RESOURCE NAME</h2><p>description</p></div>
        </a>
        <a href="<?php echo get_bloginfo('template_directory'); ?>/resource.php" class="resource">
          <img class="resource-img" src="<?php echo get_bloginfo('template_directory'); ?>/img/placeholder.png">
          <div class="overlay">
            <h2>RESOURCE NAME</h2>
            <p>description</p>
          </div>
        </a>
        <a href="<?php echo get_bloginfo('template_directory'); ?>/resource.php" class="resource">
          <img class="resource-img" src="<?php echo get_bloginfo('template_directory'); ?>/img/placeholder.png">
          <div class="overlay"><h2>RESOURCE NAME</h2><p>description</p></div>
        </a>
        <a href="<?php echo get_bloginfo('template_directory'); ?>/resource.php" class="resource">
          <img class="resource-img" src="<?php echo get_bloginfo('template_directory'); ?>/img/placeholder.png">
          <div class="overlay"><h2>RESOURCE NAME</h2><p>description</p></div>
        </a>
    </div>
  </div>

  <div class="gifts identify">
    <h3>Support UC San Diego's Innovation Initiative!</h3>
    <p>By supporting the Office of Innovation, you are a part of the Campaign for UC San Diego. Help us make waves — here and across the globe.</p>
    <button type="button" class="gifts">Give to UC San Diego!
    </button>
  </div>

  <div class="message">
    <h4>Didn't find the resource you were looking for? Let us know how we can help you!</h4>
    <form>
      <input type="text" name="name" placeholder="NAME"><input type="email" name="email" placeholder="EMAIL">
      <textarea name="message" placeholder="MESSAGE" cols="35"></textarea>
      <input type="submit" value="SEND MESSAGE">
    </form>
  </div>

  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
  <script src="http://localhost:35729/livereload.js"></script>
</body>
</html
