<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Modal Example</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<!-- Button to trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Open Modal</button>

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Modal Header</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        <div class="comment">
          <!-- Comment Avatar -->
          <div class="comment-avatar">
            <img src="../asset/image/user_img/" alt="User Avatar">
          </div>
          <!-- Comment Box -->
          <div class="comment-box">
            <div class="comment-text">
              <!-- Comment Info -->
              <div class="comment-footer">
                <div class="comment-info" style="display: flex;">
                  <span class="comment-author">
                    <h6 style="margin-top: 7px;">User Name</h6>
                  </span>
                  <span class="comment-date">Date</span>
                </div>
                <!-- Comment Actions -->
                <div class="comment-actions" style="display: flex;">
                  <a href="#" id="toggleReply" style="padding-right:15%">Reply</a>
                  <button class="deleteButton" name="delete" onclick="return confirm('Are you sure you want to remove comment?')">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 50 59" class="bin">
                      <!-- SVG Paths for delete icon -->
                    </svg>
                    <span class="tooltip">Delete</span>
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
