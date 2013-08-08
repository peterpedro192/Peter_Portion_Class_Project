<?php include('includes/head.inc');?>
  <title>Arrow Photography's testimonials</title>
    <!--Styles go here, Links then embedded -->
  <link rel="stylesheet" href="css/mycore.css"/>
  <!-- inherits the centering from the style sheet spec for h2+p, but changes the width to 300px to match the single photo -->
  <style>
      h2+p{
          width: 300px; 
      }
  </style>
  <script src="js/modernizr.min.js"></script>
</head>
<body>
<div id="wrapper">    
    <!-- Header starts -->
    <div id="header">
        <h1>Arrow Photography</h1>
        <?php include('includes/nav.inc');?>
    </div>
    <!-- Header ends -->
    
    <!-- Content starts -->
    <div id="content">
        <h2>Arrow Photography Testimonials</h2>
        <p>
            <img src="images/rings.jpg" alt="Wedding flowers and rings image" width="300" height="450" />
        </p>
        <blockquote>
            <h3>We were so pleased we chose Arrow Photography</h3>
            <p>
                Curabitur pretium tincidunt lacus. Nulla gravida orci a odio. Nullam varius, turpis et commodo pharetra, est eros bibendum elit, nec luctus magna felis sollicitudin mauris. Integer in mauris eu nibh euismod gravida. Duis ac tellus et risus vulputate vehicula. Donec lobortis risus a elit. Etiam tempor. Ut ullamcorper, ligula eu tempor congue, eros est euismod turpis, id tincidunt sapien risus a quam. Maecenas fermentum consequat mi. Donec fermentum. Pellentesque malesuada nulla a mi. Duis sapien sem, aliquet nec, commodo eget, consequat quis, neque. Aliquam faucibus, elit ut dictum aliquet, felis nisl adipiscing sapien, sed malesuada diam lacus eget erat. Cras mollis scelerisque nunc. Nullam arcu. Aliquam consequat. Curabitur augue lorem, dapibus quis, laoreet et, pretium ac, nisi. Aenean magna nisl, mollis quis, molestie eu, feugiat in, orci. In hac habitasse platea dictumst.
            </p>
            <cite>Graza and Teresa Green, Littlehampton, West Sussex</cite>
        </blockquote>
        <blockquote>
            <h3>Arrow Photography were efficient and professional</h3>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>
            <cite>Rose and Lavender Bush, Rye, East Sussex</cite>
        </blockquote>
    </div>
    <!-- Content ends -->
    
    <?php include('includes/foot.inc');?>
</div>   
</body>
</html>