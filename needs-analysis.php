<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Needs Analysis</title>

    <!-- Bootstrap core CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for reports -->
    <link href="report.css" rel="stylesheet">

    <!-- Custom styles for nav bar -->
    <link href="nav.css" rel="stylesheet">
  </head>

  <body>

    <div class="container">
      <!--Include the nav bar-->
      <?php include("nav.php"); ?>


      <div class="row">

          <div class="report">
            <h1>Needs Analysis</h1>
            <p class="date">September 28, 2014</p>

            <h2>Problem Description</h2>

            <p>People like to save money and will buy groceries that are on sale. But most people will not use coupons because they are painful to find, clip, and use. Coupons are a great source for savings, yet require too much effort most days. How can we make using coupons easier for our users?</p>

            <h2>Personas</h2>

            <p>We created two personas that represent our users. Both personas keep deals in mind while shopping, but have different overall goals for grocery shopping.</p>
            <h3>Partially Planned Paul</h3>
            <p>Paul is 22 and he shops only for himself. He goes into the store with a vague plan for a meal, but tends to organize the details of his shopping while in the store. He pays attention to different deals he sees in a store and uses them to his advantage, but isn’t organized enough to use coupons effectively. He considers price while he shops, but doesn’t rigorously keep track of budget. However, he does consciously try to spend less on groceries as he shops. </p>
            <img src="images/PersonaPaul.jpg" alt="Partially Planned Paul" height="500px"/>
            <img src="images/PersonaTammy.jpg" alt="Food on the Table Tammy" height="500px"/>
            <h3>Food on the Table Tammy</h3>
            <p>Tammy shops for her family and wants to accomplish this chore quickly and efficiently so that she can get home to be with her family. She uses a grocery list and is very focused in her shopping. She values taste and brand reputation over budget while shopping but appreciates a good deal. She doesn’t have time to use coupons in order to save more.</p>
            <h2>Scenarios</h2>
            <p>The following two scenarios we have describe how our personas go through the shopping experience. It shows the motivations, and inspirations, for the decisions they would make. It’s important to note how both personas use sales to shop opportunistically, but do not bring coupons to the store.</p>
            <img src="images/SequenceModel1.jpg" alt="Sequence Model 1" width="500px"/>
            <img src="images/SequenceModel2.jpg" alt="Sequence Model 2" width="500px"/>
            <h2>Motivations</h2>
            <p>The poster describes what motivates our personas in each part of the process. The process here is broken into “Plan meal” which includes finding recipes and formulating meals, “plan item” which includes choosing what specific foods will go into each meal (Tammy does this at home, but Paul does this in the store), and “buy item” which is the process of choosing the actual item off the shelf in the store. The main motivations we thought about are nutrition, price, deliciousness, getting a deal, and convenience. Because getting a deal doesn’t occur to our personas until they are in the grocery store, they don’t invest the time to get the most out of coupons before they go.</p>
            <img src="images/MotivationGraph.jpg" alt="Shopping motivations" width="500px"/>
            <h2>Solution Outline</h2>
            <p>We plan to make an app that will find coupons that are relevant to you based on your current shopping list, and may suggest alternative purchases based on savings. We hope to make coupon usage effortless.</p>
            <h2>Impact</h2>
            <p>This app should allow our users to save money while using minimum effort. They will be able to take advantage of several coupons that they would not have known about otherwise. </p>
            <img src="images/SuperCoupon.png" alt="SuperCoupon" height = "500"/>
          </div>

          <ul class="pager">
            <li><a href="project-brief-new.html">Previous</a></li>
            <li><a href="#">Next</a></li>
          </ul>


      </div><!-- /.row -->

    </div><!-- /.container -->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
