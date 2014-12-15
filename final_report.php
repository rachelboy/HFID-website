<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Final Report</title>

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
            <h1>Final Report</h1>
            <p class="date">December 15, 2014</p>

            <h2>What is our app?</h2>

            <p>Mealz for Dealz is a mobile app for helping shoppers effortlessly save money by automatically incorporating coupons into the grocery planning process. This design uses the process of constructing a shopping list as a vehicle to find and deliver savings opportunities. When the user add items to their list, the app automatically finds and saves appropriate coupons, which are accessible when they checkout. This brings the savings directly to users without any extra effort on their part.</p>

            <h2>Who will use it?</h2>

            <p>Mealz for Dealz is targeted at frequent shoppers, who could benefit from the savings coupons provide but don’t have the time to find them. We focused on one prototypical user, Tammy. Tammy is a working mother, who views grocery shopping as a “mom of the house chore”. She wants to get shopping done as quickly and painlessly as possible. The energy she does devote to shopping goes into making sure she gets the food that her family enjoys and will satisfy her family’s nutritional needs. As an experienced shopper, Tammy has developed distinctive shopping habits. Tammy would like to save, but is not willing to deviate from her routine and expend additional effort to realize savings.</p>

            <h2>What are their needs?</h2>
            <p>Tammy needs an effortless way to secure savings. The current ways to retrieve coupons require considerable time and effort.  As a working mother, Tammy does not have the time to rummage through websites and coupon books. She desires a way to save on grocery shopping without any change to her current shopping routine.</p>

            <h2>How do we meet those needs?</h2>
            <p>In creating this design, we’ve focused primarily on making sure that Tammy can get the best price possible on the food she wants to buy. The app is designed to embrace the distinct habits of each user. The flexibility in creating shopping list highlights this emphasis. Tammy can create a shopping list by adding items individually and/or by adding the items part of a meal.</p>

            <p>Tammy has her own system for balancing the factors she cares about, like nutrition and deliciousness, and she doesn’t want an app to interfere with her routine. Tammy almost certainly already uses a shopping list, so we centered the app around creating that list. To accommodate the wide range of specific routines Tammy may have, we designed the list creation process to be as flexible as possible. We use the process of constructing a shopping list as a vehicle to find and deliver savings opportunities. In this manner, Tammy can continue to focus on her values as she would without the app, but now she also gets the added benefit of automatic savings. </p>

            <h2>What is our final product?</h2>

            <p>We have created a works-like and looks-like-prototype of our app. The prototype demonstrates the key functionality of constructing a shopping list from meals or individual items, and retrieving the relevant coupons to use while checking out. Additionally, the app demonstrates how users would set preferences, add a recipe for a meal, and view a recipe for a meal. (A fuller documentation of the app’s features can be found in the appendix).</p>

            <p>To construct a shopping list, users can either add individual items or add items from meals found in the cookbook. We support both methods because interviews with users gave us strong evidence that in order for any assistance with the grocery shopping process to be useful, it has to be flexible enough to adapt to how they already shop.  For instance, one user told us that though they really appreciated the convenience of a service that constructed lists for them on the basis of a few meals, they stopped using it after about a month. Their reason was that it didn’t give them fine enough control over their grocery list, to modify the ingredients or exclude ones they already had. Yet users also found the ability to add the items needed for an entire meal at once convenient.</p>

            <p>The choice to put all of the recipes on a single cookbook page was also made after careful deliberation. Our original design included several pages for recipes: one for recipes suggested by the app, one for user favorites, and one for recently bought recipes.  However, during paper prototype testing, we found that testers tended to find one of the recipe pages and use only that, even when we gave them tasks better completed on another recipe page. We realized two things: first, that having multiple pages was unnecessarily complex and confusing, and second, that users were internally making an analogy between our collection of recipes and a cookbook. To address this, we combined the functionalities into a single page, called “cookbook”, from which users could access all available recipes, sort by various criteria, and search for specific ones they wanted (as well as view more information about any recipe or add its ingredients to the list). By matching the design with the user’s conceptual model we considerably simplified navigation.</p>

            <img src="images/cookbook_prog.png" alt="Progression of the Cookbook" height="300px"/>

            <p>We went through several iterations of the design for adding ingredients from a meal to the shopping list. Originally, we by default added every item, then made users uncheck items they already had. We realized during user testing that most recipes are primarily made up of ingredients users already have at home, and so it would save time and make more sense to present all of the ingredients without adding them, and have users add the ones they wanted. Once we implemented this, however, we discovered that users were confused about whether simply hitting the “plus” sign next to an ingredient added it to the list, or if they needed to do some confirmation step.  To address this, we added labelling to the buttons, as shown in the figures below.</p>

            <img src="images/add_ingredients_prog.png" alt="Progression of Add Ingredients" height="300px"/>

            <p>For the process of adding individual items, we decided to use a simple search bar at the top of the list page. Once we added default text saying “add an item”, users were able to easily identify how to add the items they wanted. In order to support our goal of providing effortless savings, the app automatically suggests specific items that may be on sale, based on what the user enters. However, we found during paper prototype testing that forcing the user to pick a specific item that our app was able to suggest did not give them enough autonomy in creating their grocery list. For many items, shoppers would rather make specific decisions about brand while at the store. Additionally, forcing the user to only add items our app knows about makes it more difficult for users to work around gaps in our app’s knowledge. Because of these concerns, we always provide the option of adding exactly the text the user has typed in, in addition to selecting the app’s suggestions. This balances the need to maximize potential savings with a respect for user autonomy and control, and allows all users to make their lists how they choose.</p>

            <img src="images/individual_item_add.png" alt="Adding individual item" height="300px"/>

            <p>Once a user has finished shopping, they must then be able to find their coupons and use them to checkout. To do this, they use a button at the bottom of the shopping list, which brings them to all of the relevant coupons for the items on their list. Because this is the core of the value our app provides, we paid special attention to making this interaction as seamless as possible. It is placed at the bottom of the list page, so that just as users finish shopping they can easily access coupons. We also devoted attention to the labelling of the button. Originally, it was labeled “checkout”, and this worked well in all of our paper prototype studies. However, during our heuristic evaluation, the evaluators brought up concerns that this labelling might be confusing. To evaluate this, we conducted a formal usability study in which we compared a version of the app using the label ‘checkout’ to one using the label ‘coupons’. We found that when we did not explicitly use the word “checkout” to describe what we wanted the users to do, then they never used the checkout button, instead using direct links to the coupons for each item. On the basis of these results, we use the label “see coupons” in the current version of our app.</p>

            <img src="images/checkout_v_coupons.png" alt="Checkout vs Coupons" height="300px"/>

            <p>Our current prototype does not, however, reflect every design decision we made, simply because we ran out of implementation time. For instance, one of the more consistent pieces of feedback was that many users sort their grocery list by area of the store, or type of food, or some other criteria. At the moment, our prototype allows no sorting of the grocery list at all. One step up from this would be automatically sorting the list by aisle of the store, as this was what users most commonly reported doing themselves. Even better, however, would be allowing users to choose how to sort the list themselves, possibly by dynamically adding headers and dragging list items around.</p>

            <p>The interactions on our current prototype are also universally clicking, rather than swiping or dragging, which does not take full advantage of the interaction possibilities on a mobile phone. This happened because much of our initial development occurred on laptops, however in future we would like to implement touchscreen gestures. For instance, letting users swipe left or right to navigate between the shopping list and the cookbook would provide a handy shortcut for power users. Letting users swipe an item off the screen to delete it from the grocery list would simplify our deletion process. And letting users swipe left or right to scroll between coupons would more closely match the interactions they expect from a touchscreen.</p>
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
