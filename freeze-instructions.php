<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Design Development</title>

    <!-- Bootstrap core CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for reports -->
    <link href="report.css" rel="stylesheet">

    <!-- Custom styles for nav bar -->
    <link href="nav.css" rel="stylesheet">
  </head>

  <body>

    <div class="container">
        <?php include("nav.php"); ?>


      <div class="row">

          <div class="report">
            <h1>Prototype Instructions</h1>
            <p class="date">November 7, 2014</p>
            <h2>Mealz 4 Dealz</h2>
            <p>Mealz 4 Deals is an app to help you save money while grocery shopping by finding coupons for items you put on your grocery list. The app is centered around a shopping list and you can add individual items to your list or you can add a full meal from the cookbook. The cookbook will suggest meals to you based on coupons available for the meal or you can create and save your own meals. Add ingredients from a meal to your list, shop as you normally do, and when you're ready to check out, the coupons will be available in the app for scanning. Be sure to use the menu for easy navigation between the list and cookbook, as well as to set your preferences so that the app can suggest relevant meals and coupons.</p>
            <p>Thank you for testing out our prototype! Please note the instructions in bold, as they will help you avoid navigating to pages that don't exist yet.</p>

            <h2>Task 1: Create a Shopping List From a Meal</h2>
             <ol>
              <li>Open the menu</li>
              <li>Go to Cookbook. Optional: Sort by what you want</li>
              <li>Look through meals, <b>choose Stovetop Lasagna</b></li>
              <li>Click add to list</li>
              <li>Click the plus signs next to the ingredients when you want them to be added to the list.<b>You already have Kosher Salt, Olive Oil, and Red Pepper Flakes at home</b></li>
              <li>Go to the list</li>
            </ol> 

            <h2>Task 2: Shop and Check Out</h2>
             <ol>
              <li>Go to list page.</li>
              <li>Check off items as if you are shopping in the store. <b>Currently you cannot un-check items after they have been checked except by refreshing the page or hitting remove crossed out items.</b></li>
              <li>Hit check out button</li>
              <li>Go through coupons to be scanned</li>
              <li>Go to the list</li>
            </ol> 
           

            <h2>Task 3: Cook a Meal from the Cookbook</h2>
             <ol>
              <li>Go to cookbook</li>
              <li>Optional: Sort meals</li>
              <li>Click on meal name/picture to see complete recipe.<b>Please choose Stovetop Lasagna.</b></li>
            </ol> 

            <h2>Task 4: Add Your Own Recipe</h2>
             <ol>
              <li>From the cookbook, hit add recipe.</li>
              <li>Enter details of your recipe</li>
              <li>Hit add recipe button.<b>This does not add a meal to the cookbook currently.</b></li>
            </ol> 

            <h2>Task 5: Set Your Preferences</h2>
             <ol>
              <li>Go to Preferences from the menu</li>
              <li>Set the preferences you desire.<b> Your choices will not stay after you leave the page.</b></li>
            </ol> 




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
