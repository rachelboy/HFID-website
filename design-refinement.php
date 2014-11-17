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
            <h1>Design Development</h1>
            <p class="date">November 16, 2014</p>

            <h2>What is it?</h2>
            <p>Mealz for Dealz is a mobile app for helping shoppers save passively by automatically incorporating coupons into the grocery planning process. This design uses the process of constructing a shopping list as a vehicle to find and deliver savings opportunities. The shopping list is the central page of the app and can be populated by either adding individual items or full meals. When you add items to your list, the app automatically finds and saves appropriate coupons, which are accessible when you check out. This brings the savings directly to the user without any extra effort on their part.
            </p>

            <p>In designing the app, we focused on one prototypical user, Tammy. Tammy is a working mother, who views grocery shopping as a “mom of the house chore”. She wants to get shopping done as quickly and painlessly as possible, and she’s developed habits that make her a pro at grocery shopping. The energy she does devote to shopping goes into making sure she gets the food that her family enjoys and will satisfy their nutritional needs. Tammy would like to save, but she is only going to focus on getting the food that meet her families requirements. In creating this design, we’ve focused primarily on making sure that Tammy can get the best price possible on the food she wants to buy. A crucial part of this app is that it allows Tammy to shop in her own way while finding savings that work with her existing habits.
            </p>
            
            <h2>See Our Work</h2>


            <p><a href="wireframes.php"><p>Here is our wireframe</p></a>
            <a href="prototype/shopping_list.html"><p>Here is our prototype</p></a>
            </p>
            
            <h2> What Changed?</h2>
            <p>Between the paper prototype and the online version, we made a number of changes. Some were simply a byproduct of trying to implement something functional in limited time. For instance, in preferences we changed sliding “on/off” switches to radio buttons. Radio buttons were initially easier to implement, but sliding switches are more visible and easier to use. We plan to incorporate sliding switches in the next phase. We also changed some of our interaction to accommodate a computer interface, rather than the smartphone touchscreen we actually want to design for. Upon further discussion with our professors, we realized that we can use a mobile browser to simulate an mobile app environment. In the coming month,  we incorporate swiping and sliding gestures into our prototype.
            </p>

            <p>We realized that some of intended components of our interface are unreasonable to implement. Our initial intention was to display the price to make a meal for the given number of servings, but instead we decided to show the number and value of coupons available because accurately describing the price to make a meal is unworkable. The reason that it is infeasible is the quantities items are sold in do not directly correspond to the quantities needed for a recipe. For instance, if a recipe requires 3 tablespoons of olive oil there is no way to adjust the total meal price for this because olive oil is sold in large bottles. The user also probably has grocery staples in their pantry, and our app does not store this information.</p>


            <p>Other changes were motivated by concerns about the scope of our project. From our observations in prototyping, it seemed like the ability to save different shopping lists, rather than just meals would be useful to several of our users. But because this would be an entirely new feature for our interface, and our app has already grown considerably since its inception, we decided to focus on the core functionality we had already prototyped rather than expanding for the sake of keeping up with the schedule of the course.</p>

            <p>Many of our changes, however, were motivated by genuine design improvements. When we worked with our users, we got a lot of valuable feedback on which sections of our application would be used, and what structures needed retooling to be made more visible or usable. One of our more significant observations was that the amount of real estate in the app devoted to meals did not reflect the amount that users need this information. We realized that many people don’t use meals, and the people who do were confused by all the different pages in different places, so we decided to consolidate all the meal pages into one cookbook page.</p>

            <p>
                <img src="images/design-refinement/menu_comparison.png" alt="Menu Comparison" height="300px"/>
            </p>


            <p>We also changed the experience of adding individual items to the list.  In the paper prototype, we suggested a number of brands for each term the user typed into the search bar. But in prototyping, we realized that because each user is their own expert, they don’t need to specify which brand to buy - “yogurt” is enough.  We therefore decided to only suggest brands with coupons attached, and make the text the user enters the default.</p>

            <p>Finally, we decided to change our word choice in preferences. For example, we realized that the phrase “humane meat” might be offensive to users who select no because the implication is that they eat inhumane meat. In addition, our users are already accustomed to look for certain labels such as “free-range” and “antibiotic free”. With these modifications we strived to make our preferences more respectful and intuitive. </p>

            <p><img src="images/design-refinement/preferences_wording_comparison.png" alt="Preferences" style="height:200px"/></p>







            <h2> Heuristic Evaluation Response</h2>



            <p>The recommendations from the heuristic evaluation on our interface broke into two main types - those that dealt with functionality that we envisioned, but forgot to actually implement, and those that suggested deeper design concerns or considerations. </p>

            <p>In the first category are features such as the ability to add a picture and edit ingredients when adding a recipe, the ability to edit existing recipes, functionality issues such as the top menu being broken on one page, and labelling the “serving size” field in creating a recipe so that it’s clear that the app is looking for number of people served. They also include features that are natural on a touch interface, but that were not implemented in the prototype because we built the prototype for the web.  We have since realized that we can simulate a mobile app environment using the web by taking advantage of mobile browsers  We now plan going back and implementing features like clicking away from menus to close them, and swiping left and right to navigate coupons.</p>

            <p>n the second category are a number of useful suggestions that we previously had not considered, but are now planning on implementing into our prototype. For instance, our evaluators suggested that it might be useful to be able to first, easily add all items for a recipe at once rather than going through them individually, and second, easily remove all items from a recipe if you decided not to make it anymore. Adding all the items at once is a helpful shortcut that will be easy to design in. Making it possible to remove an entire recipe from your grocery list won’t be a trivial feature to add, but we think it’s an important enough feature that we’re going to implement it. Finally, though they did not suggest it, all this talk of adding and removing items made us realize that users should be able to easily select or unselect all items in their list, to get the most out of the ‘remove checked items” button.</p>

            <p> <img src="images/design-refinement/ListWithMeals.png" alt="Menu Comparison" height="500px"/> </p>

            <p>They also suggested having shortcuts that don’t require opening the menu every time for common navigation. We think this is a great place to add features for advanced users, especially in the navigation from the cookbook to the grocery list. To address this, we are planning to add the ability to swipe left from meals to get to the list, and right from the list to get to meals.</p>

            <p>The process of adding meals to the grocery list has undergone a number of changes at every step of our process, and the heuristic evaluation was no exception. The evaluators told us that it was unclear whether each item was added to the list when the plus sign was hit, or if the user needed to check each item and then go to the list to confirm the addition. To clarify this (our intention is that each item will be added when the plus sign is hit), we will add the words “added to list” below the check mark that appears.</p>

            <p><img src="images/design-refinement/IngredientsAdd.png" alt="New Add Ingredients" height="500px"/></p>

            <p>The evaluators also discovered that our button to email a recipe gives the user no feedback about whether the email was sent - a major flaw in that functionality.  Our improved design responds to a user clicking the email button by bringing up an email dialog box allow users to confirm their email and hit a “send” button”.</p>

            <p>Despite the huge amounts of valuable feedback we got, we did disagree with two of the suggestions from our evaluators. First, they pointed out we only offered minutes and hours as units of time for how long a recipe takes, but that sometimes a recipe can take days to prepare. While this is true, we don’t want to add a field for days into our recipe because we think it is unnecessary and potentially misleading. The personas who use this are unlikely to cook exceptionally complex meals, and even if a recipe has to sit for multiple days, it is unlikely to involve multiple days of actual prep time. Finally, if they really want to create a meal that cooks for multiple days, they can input the number of hours it will take very easily.</p>


            <p>The second disagreement we had with our evaluators was the naming of our checkout button. We think that calling it checkout makes sense in the context of being at a store using this app. They believe that we should call it Coupons instead. A brief conversation with a potential user on the issue suggests that while they find “checkout” to be a natural labelling for the button, they’d like to have additional labelling to assure them that it will bring up their coupons, rather than clearing their list or doing something else. This could also be pointed out in an intro tour of the app, something we have been planning on creating. We may also set up a usability test around this question during the next phase in order to gather more data. </p>


           
            <h2> Cooking and Grocery Shopping are Complex Processes</h2>
            <p>Cooking and grocery shopping are complex processes. Users make rapid choices based on specific and detailed preferences and plans for cooking. These intricacies are difficult to account for in a mobile application because they rely on so much external information about both the food sold and the user’s habits.
            </p>
            

            <h2> Everyone is Their Own Expert</h2>
            <p>Tammy has grown into an expert at shopping for her family. She is sensitive to the needs and wants of her family to a degree that an application cannot replicate. The knowledge to shop effectively rests in Tammy’s head. Through many years of experience, Tammy has developed the intuition to rapidly make grocery shopping decisions. 

            </p>

            <h2> Autonomy</h2>
            <p>The Tammys of the the world have each developed their own distinctive habits. The habits that work for one user may not translate well to others. To enable this wide variety of effective habits, we need to give our users autonomy. The app needs to allow Tammy to shop with all the habits she’s developed without getting in her way.</p>

            <h2>Shortcomings and Questions</h2>

            <p>The bulk of our efforts have gone into make it trivial to construct a shopping list. By introducing a cookbook which provides Tammy with the capability to easily add the ingredients needed for a particular meal we have made it much easier to create a shopping list. However, introducing meals as a unit begets challenges in editing this list. Users want extensive control over how their list is presented, for instance by visibly grouping items that belong to one meal or maintaining the order of the list according to grocery store section (i.e produce, dairy). Our app doesn’t currently do a great job of supporting this kind of customization.</p>

            <p>During our paper prototype usability test, we discovered that Tammy’s shopping list is mostly consistent from week to week. To accommodate this tendency, we are trying to introduce a seamless way to preserve last week’s list. The current solution we have in mind is to allow Tammy to uncheck all the items after her trip to grocery store, and have her list appear anew. However, this solution makes it harder to make small changes to the list. We are introducing the ability for each item to be deleted individually, but that takes two clicks. The trouble is our solutions force us to battle the hazy distinction between a deleted item and a checked off item. We have tried to introduce clarity to this situation, but are finding it difficult given our limited screen real estate to visibly provide a checkoff and delete button. </p>

            <p>The limited screen real estate engenders a few other challenges. We want to make the delete button for a single item easily accessible and visible. A clear way accomplish this is to make this delete button large and immediately available, however, this runs the risk of Tammy accidentally deleting an item off her list. One way to mitigate this risk is introduce a confirm box.  We are unsure of how harmful it would be to accidentally delete an item off your list, versus how annoying it would be to have a confirmation to delete items. According to Cooper, it is advisable to trust your user, but Nielsen's heuristics assert that error prevention is also crucially important. We’re still working on finding a balance between preventing errors and respecting the user’s actions. Our hope is that we can find a way to prevent these errors in an unobtrusive manner. </p>



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