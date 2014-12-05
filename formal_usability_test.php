<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Formal Usability Test</title>

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
            <h1>Formal Usability Test</h1>
            <p class="date">December 5, 2014</p>

            <h2>Problem</h2>

            <p>There is a button that brings up all the coupons from your shopping list. Which label for this button will users find more intuitive: “checkout” or “coupon”?</p>

            <h2>Hypothesis</h2>

            <p>We think “checkout” will be a more intuitive label because the need to view all coupons arises as a shopper checks out. In this way, the interface will match the mental state of our users as they are progressing through the shopping process.</p>
            <h2>Independent Variables</h2>
            <p>A button with either the word checkout or the word coupons. The "checkout" version can be viewed <a href="computer_prototype_a/shopping_list.html">here</a>, and the "coupons" version can be viewed <a href="computer_prototype_b/shopping_list.html">here</a></p>
            <h2>Dependent Variables</h2>
            <ul>
                <li>How long it takes users to figure out which button to push to get to the coupons</li>
                <li>Which method people use to view their coupons</li>
            </ul>
            <h2>Testing Process</h2>
            <ul>
                <li>We would ideally test 30 people, but are testing 2 people. Half of them will be given <a href="computer_prototype_a/shopping_list.html">one version of the app</a> (with the label “checkout”), and half will be given <a href="computer_prototype_b/shopping_list.html">the other version</a> (with the label “coupons”).</li>
                <li> Setup:
                    <ul>
                        <li>The testing area will be set up as a small mock grocery store. The “store” will be a small area containing representations of the foods on the list (possibly labelled post-it notes), and a tester to act as a “cashier”.</li>
                        <li>We will have a phone with the app loaded, already on the list page and with a short list already created</li>
                    </ul>
                </li>
                <li> Testing:
                    <ul>
                        <li>We will ask the user to do their grocery shopping, starting with arriving at the store with the list made, and ending when they are out of the store and ready to load their groceries in their car. (We will not use the word “checkout”). </li>
                        <li>We will time how long it takes from when they pull out their phone at the cashier until they get to their coupons. We will also pay attention to how they get to their coupons - by pressing the appropriate button, or by clicking on one of the individual item coupons. If they do not get the coupons on their own, the “cashier” should prompt them by asking if they have any coupons.</li>
                    </ul>
                </li>
            </ul>
          </div>


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
