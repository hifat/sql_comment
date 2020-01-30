<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>Comment</title>
</head>

<body>
   <nav>
      <a href="?food_id=1">page_1</a>
      <a href="?food_id=2">page_2</a>
      <a href="?food_id=3">page_3</a>
   </nav>
   <div>
      <form id="create-comment">
         <input type="hidden" name="food_id" id="food-id" value="<?= $_GET['food_id'] ?>">
         <div>
            <label for="comment-detail">Comment</label>
            <input type="text" name="comment_detail" id="comment-detail">
         </div>
      </form>
   </div>

   <div id="comment">
      <ul id="comment-content">

      </ul>
   </div>

   <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
   <script src="assets/app.js"></script>
</body>

</html>