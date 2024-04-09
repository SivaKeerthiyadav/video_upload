<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Video Upload</title>
</head>
<body>
    <!-- Your navigation and other HTML elements go here -->

    <!-- Button to trigger the modal 
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#form_modal">Upload Video</button> -->

    <!-- Modal -->
    <div class="modal fade" id="form_modal" aria-hidden="true">
        <div class="modal-dialog">
            <form action="save_video.php" method="POST" enctype="multipart/form-data">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="col-md-3"></div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Title</label> <br>
                                <input type="text" name="title" class="form-control"/>
                            </div>
                            <div class="form-group">
                                <label>Description</label>
                                <input type="text" name="description" class="form-control"/>
                            </div>
                            <div class="form-group">
                                <label>Video File</label>
                                <input type="file" name="video" class="form-control-file"/>
                            </div>
                        </div>
                    </div>
                    <div style="clear:both;"></div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Close</button>
                        <button name="save" class="btn btn-primary"><span class="glyphicon glyphicon-save"></span> Save</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <!-- Your video listing section -->
    <div id="video-list">
        <!-- Video details will be displayed here -->
    </div>
    
    <!-- Include Bootstrap and jQuery scripts -->
</body>
</html>
