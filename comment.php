<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script>
$(document).ready(function(){
  $("#comment").hide();
  $("#seemore").click(function(){
    $("#comment").slideToggle("slow");
  });
});
    </script>

    <style>
        *{
            color: black;
            font-weight: 500;
        }

.text-right{ text-align: right; }

.comments-app{
  margin: 50px 12%;
  max-width: 900px;
  padding: 0 50px;
  width: 100%;
}

.comments-app h1{
  color: #191919;
  margin-bottom: 1.5em;
  text-align: center;
  text-shadow: 0 0 2px rgba(152, 152, 152, 1);
}


.comment-form .form{ margin-left: 100px; }

.comment-form .form .form-row{ margin-bottom: 10px; }
.comment-form .form .form-row:last-child{ margin-bottom: 0; }

.comment-form .form .input{
  background-color: #fcfcfc;
  border: none;
  border-radius: 4px;
  box-shadow: 0 1px 1px rgba(0, 0, 0, .15);
  color: #555f77;
  font-family: inherit;
  font-size: 14px;
  padding: 5px 10px;
  outline: none;
  width: 100%;

  -webkit-transition: 350ms box-shadow;
  -moz-transition: 350ms box-shadow;
  -ms-transition: 350ms box-shadow;
  -o-transition: 350ms box-shadow;
  transition: 350ms box-shadow;
}

.comment-form .form textarea.input{
  height: 100px;
  padding: 15px;
}

.comment-form .form label{
  color: #555f77;
  font-family: inherit;
  font-size: 14px;
}

.comment-form .form input[type=submit]{
  background-color: #14494b;
  border: none;
  border-radius: 4px;
  box-shadow: 0 1px 1px rgba(0, 0, 0, .15);
  color: #fff;
  cursor: pointer;
  display: block;
  margin-left: auto;
  outline: none;
  padding: 6px 15px;

  -webkit-transition: 350ms box-shadow;
  -moz-transition: 350ms box-shadow;
  -ms-transition: 350ms box-shadow;
  -o-transition: 350ms box-shadow;
  transition: 350ms box-shadow;
}

.comment-form .form .input:focus,
.comment-form .form input[type=submit]:focus,
.comment-form .form input[type=submit]:hover{
  box-shadow: 0 2px 6px rgba(121, 137, 148, .55);
}

.comment-form .form.ng-submitted .input.ng-invalid,
.comment-form .form .input.ng-dirty.ng-invalid{
  box-shadow: 0 2px 6px rgba(212, 47, 47, .55) !important;
}

.comment-form .form .input.disabled {
    background-color: #E8E8E8;
}

.comment-form,
.comment{
  margin-bottom: 20px;
  position: relative;
  z-index: 0;
  margin-left: 13%;
}

.comment-form .comment-avatar,
.comment .comment-avatar{
  border: 2px solid #fff;
    border-radius: 50%;
    box-shadow: 0 1px 2px rgba(0, 0, 0, .2);
    height: 46px;
    left: 45px;
    overflow: hidden;
    position: absolute;
    top: 0;
    width: 45px;
}

.comment-form .comment-avatar img,
.comment .comment-avatar img{
  display: block;
  width: 100%;
  height: 100%;
}

.comment .comment-box{
  background-color: #fcfcfc;
  border-radius: 4px;
  box-shadow: 0 1px 1px rgba(0, 0, .15, .15);
  margin-left: 100px;
  min-height: 60px;
  position: relative;
  padding: 15px;
}

.comment .comment-box:before,
.comment .comment-box:after{
  border-width: 10px 10px 10px 0;
  border-style: solid;
  border-color: transparent #FCFCFC;
  content: "";
  left: -10px;
  position: absolute;
  top: 20px;
}

.comment .comment-box:before{
  border-color: transparent rgba(0, 0, 0, .05);
   top: 22px;
}

.comment .comment-text{
  color: #555f77;
  font-size: 15px;
  margin-bottom: 25px;
}

.comment .comment-footer{
  color: #acb4c2;
  font-size: 13px;
}

.comment .comment-footer:after{
  content: "";
  display: table;
  clear: both;
}

.comment .comment-footer a{
  color: #acb4c2;
  text-decoration: none;

  -webkit-transition: 350ms color;
  -moz-transition: 350ms color;
  -ms-transition: 350ms color;
  -o-transition: 350ms color;
  transition: 350ms color;
}

.comment .comment-footer a:hover{
  color: #555f77;
  text-decoration: underline;
}

.comment .comment-info{
  float: left;
  width: 85%;
}

.comment .comment-date:before{
  content: "|";
  margin: 0 10px;
}

.comment-actions{
  float: left;
  text-align: right;
  width: 15%;
}


/*delete*/
.deleteButton {
  margin-left: -24%;
  margin-top: -20%;
  width: 40px;
  height: 40px;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  gap: 3px;
  background-color: transparent;
  border: none;
  border-radius: 8px;
  cursor: pointer;
  transition: all 0.2s;
  position: relative;
  overflow: hidden;
}
.deleteButton svg {
  width: 44%;
}
.deleteButton:hover {
  background-color: rgb(237, 56, 56);
  overflow: visible;
}
.bin path {
  transition: all 0.2s;
}
.deleteButton:hover .bin path {
  fill: #fff;
}
.deleteButton:active {
  transform: scale(0.98);
}
.tooltip {
  --tooltip-color: rgb(41, 41, 41);
  position: absolute;
  top: -40px;
  background-color: var(--tooltip-color);
  color: white;
  border-radius: 5px;
  font-size: 12px;
  padding: 8px 12px;
  font-weight: 600;
  box-shadow: 0px 10px 10px rgba(0, 0, 0, 0.105);
  display: flex;
  align-items: center;
  justify-content: center;
  opacity: 0;
  transition: all 0.5s;
}
.tooltip::before {
  position: absolute;
  width: 10px;
  height: 10px;
  transform: rotate(45deg);
  content: "";
  background-color: var(--tooltip-color);
  bottom: -10%;
}
.deleteButton:hover .tooltip {
  opacity: 1;
}

.comment textarea :hover{
  border: none;
  box-shadow: 1px 2px gray;
}
</style>
</head>

<body>

<div class="comments-app" ng-app="commentsApp" ng-controller="CommentsController as cmntCtrl">
  <h2 style="text-align: center; margin-left: 29%;">Comment</h2>
  
  <!-- From -->
  <div class="comment-form">
    <?php
  $sql = "SELECT * from user where user_id = '".$_SESSION['user']['loguser_id']."'";
				if ($result = mysqli_query($conn, $sql)) 
				{
					if (mysqli_num_rows($result) > 0) 
					{
					  while($row = mysqli_fetch_array($result))
					  {
			?>
    <!-- Comment Avatar -->
    <div class="comment-avatar">
      <img src="asset/image/user_img/<?php echo $row["thumb_image"]; ?>" height="100%">
    </div>
    <?php
          }}}
        ?>

    <form class="form insert" method="post" action="commtinsert.php" id="commentform" name="form" novalidate>
      <div class="form-row">
        <textarea
                  class="input"
                  ng-model="cmntCtrl.comment.text"
                  placeholder="Add comment..."
                  name="comments"
                  required></textarea>
      </div>

      <div class="form-row text-right">
		<input type="hidden" name="std_id" value="<?php echo $std_id; ?>" />
        <input
               id="comment-anonymous"
               ng-change="cmntCtrl.anonymousChanged()"
               ng-model="cmntCtrl.comment.anonymous"
               type="checkbox" 
               name="anonymous">
        <label for="comment-anonymous">Anonymous</label>
      </div>

      <div class="form-row">
        <input type="submit" value="Add Comment" name="addcomment">
      </div>
    </form>
  </div>
 
<div class="seemore" id="seemore" style="margin-left: 20%;
    margin-bottom: 4%;">
    <?php
			  $tot_com = 0;
			  
                    $sql = "SELECT count(comment_id) AS tot_com FROM comment 
                    where std_id = '".$std_id."'";
                    $result = mysqli_query($conn, $sql);
    
                    if ( $result) {
                      // output data of each row
                      $row_com = mysqli_fetch_assoc($result); 
					  $tot_com =  $row_com['tot_com'];
					}
          ?>
    <a style="color: #191919;">See more <?php echo $tot_com;?> comment <img src="asset/image/scrolldown.png" alt="" height="10px"></a>
  </div>

  <div class="commentsection" id="comment">
  <?php	
            $sql = "SELECT comment.*, user.user_name, user.thumb_image 
            FROM comment 
            LEFT JOIN user ON comment.user_id = user.user_id
            where std_id = '".$std_id."'";
                     if ($result = mysqli_query($conn, $sql)) 
                     {
                       if (mysqli_num_rows($result) > 0) 
                       {
                      while($row = mysqli_fetch_array($result)){     
                   ?>

    <!-- Comment - Dummy -->
    <div class="comment">
  

      <!-- Comment Avatar -->
      <div class="comment-avatar">
        <img src="asset/image/user_img/<?php echo ($row['anonymous']==1)?"boy.png":$row['thumb_image']; ?>">
      </div>

      <!-- Comment Box -->
      <div class="comment-box">
        <div class="comment-text"><?php echo $row['comments']; ?></div>
        <div class="comment-footer">
          <div class="comment-info" style="display: flex;">
            <span class="comment-author">
              <h6 style="margin-top: 7px;"><?php echo ($row['anonymous']==1)?"Anonymous User":$row['user_name']; ?></h6>
            </span>
            <span class="comment-date"><?php echo $row['lastupdated_date']; ?></span>
          </div>

          <div class="comment-actions" style="display: flex;">

          <?php if(isset($_SESSION['user']['loguser_id']) && $_SESSION['user']['loguser_id'] == $row['user_id']): ?>
             <a href="commtinsert.php?comment_id=<?php echo $row['comment_id']; ?>" onclick="return confirm('Are you sure you want to remove comment?')">
              <button class="deleteButton" name="delete">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  fill="none"
                  viewBox="0 0 50 59"
                  class="bin"
                >
                  <path
                    fill="#B5BAC1"
                    d="M0 7.5C0 5.01472 2.01472 3 4.5 3H45.5C47.9853 3 50 5.01472 50 7.5V7.5C50 8.32843 49.3284 9 48.5 9H1.5C0.671571 9 0 8.32843 0 7.5V7.5Z"
                  ></path>
                  <path
                    fill="#B5BAC1"
                    d="M17 3C17 1.34315 18.3431 0 20 0H29.3125C30.9694 0 32.3125 1.34315 32.3125 3V3H17V3Z"
                  ></path>
                  <path
                    fill="#B5BAC1"
                    d="M2.18565 18.0974C2.08466 15.821 3.903 13.9202 6.18172 13.9202H43.8189C46.0976 13.9202 47.916 15.821 47.815 18.0975L46.1699 55.1775C46.0751 57.3155 44.314 59.0002 42.1739 59.0002H7.8268C5.68661 59.0002 3.92559 57.3155 3.83073 55.1775L2.18565 18.0974ZM18.0003 49.5402C16.6196 49.5402 15.5003 48.4209 15.5003 47.0402V24.9602C15.5003 23.5795 16.6196 22.4602 18.0003 22.4602C19.381 22.4602 20.5003 23.5795 20.5003 24.9602V47.0402C20.5003 48.4209 19.381 49.5402 18.0003 49.5402ZM29.5003 47.0402C29.5003 48.4209 30.6196 49.5402 32.0003 49.5402C33.381 49.5402 34.5003 48.4209 34.5003 47.0402V24.9602C34.5003 23.5795 33.381 22.4602 32.0003 22.4602C30.6196 22.4602 29.5003 23.5795 29.5003 24.9602V47.0402Z"
                    clip-rule="evenodd"
                    fill-rule="evenodd"
                  ></path>
                  <path fill="#B5BAC1" d="M2 13H48L47.6742 21.28H2.32031L2 13Z"></path>
                  </svg>
                 <span class="tooltip">Delete</span>
                </button>
              </a> 
              <?php endif; ?>
          </div>

        </div>
      </div>
<!-- <textarea name="reply" id="reply" cols="70" rows="1" placeholder="Add to Reply..." style=" margin-left: 15%;
    border: none;
    border-bottom: 2px solid;
    font-size: 14px;" class="reply"></textarea>-->
    </div>
    <?php
          }}}
        ?>
        </div>
  </div>
</div>

<script>
    (function(){
  'use strict';
  
  angular
    .module('commentsApp', [])
    .controller('CommentsController', CommentsController);
  
  // Inject $scope dependency.
  CommentsController.$inject = ['$scope'];
  
  // Declare CommentsController.
  function CommentsController($scope) {
    var vm = this;
    
    // Current comment.
    vm.comment = {};

    // Array where comments will be.
    vm.comments = [];

    // Fires when form is submited.
    vm.addComment = function() {
      // Fixed img.
      vm.comment.avatarSrc = 'http://lorempixel.com/200/200/people/';

      // Add current date to the comment.
      vm.comment.date = Date.now();

      vm.comments.push( vm.comment );
      vm.comment = {};

      // Reset clases of the form after submit.
      $scope.form.$setPristine();
    }

    // Fires when the comment change the anonymous state.
    vm.anonymousChanged = function(){
      if(vm.comment.anonymous)
        vm.comment.author = "";
    }
  }

})();

</script>
<!--
<script>
   document.getElementById('reply').style.display = 'none';
    document.getElementById('toggleReply').addEventListener('click', function(event) {
        event.preventDefault(); // Prevent default link behavior
        var replyTextarea = document.querySelector('.reply');
        if (replyTextarea.style.display === 'none') {
            replyTextarea.style.display = 'block';
        } else {
            replyTextarea.style.display = 'none';
        }
    });
</script>-->


<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script>
    $(document).ready(function(){

        $('#commentform').submit(function(event){
            
            event.preventDefault();
            // Serialize form data
            var formData = $(this).serialize();
            
            $.ajax({
                type: 'POST',
                url: 'commtinsert.php',
                data: formData,
                success: function(response){
                    console.log(response);
                   },
                error: function(xhr, status, error){
                    console.error(xhr.responseText); 
                   }
            });
        });
    });
</script>-->

</body>
</html>