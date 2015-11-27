<?php
echo '
	<br><br><br>		
	<h2>Comments:</h2>
	<form role="form">
		<div class="form-group">
			<!--<input type="text" class="form-control" id="comment" placeholder="Enter comment"><br>-->
			<textarea class="form-control" rows="3" id="comment" placeholder="This feature is still being developed."></textarea><br>
			<!--<button type="submit" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Submit</button>-->
			<button type="button" class="btn btn-info btn-default" data-toggle="modal" data-target="#myModal">Submit</button>
		</div>
	</form><br>

 <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Comment unsuccessful</h4>
        </div>
        <div class="modal-body">
		  <p>Still, thanks for taking out your time.</p>
		  <p>Psst, its a feature, not a bug ;) </p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>

'
?>
