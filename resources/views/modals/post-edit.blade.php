<!-- post modal -->
<div class="modal fade" id="editPost" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="mediumModalLabel">Edit post</h5>

                
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <form id="formPostUpdate" action="" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="modal-body">


                    <div id="updateDeleteTextDiv" class="form-group" >
                        <p>Delete post media to upload new image / video</p>
                    </div>

                    <div id="divPostPictureUpdate" class="form-group" style="display:none;">
                        <img width="537px" name="postPictureUpdate" id="postPictureUpdate" src="" alt="">
                    </div>

                    <div id="divPostVideoUpdate" class="form-group" style="display:none;">
                        <div class="embed-responsive embed-responsive-4by3">
                            <video name="postVideoUpdate" id="postVideoUpdate" src=""></video>
                        </div>
                    </div>

                    <div id="updateDeleteUploadDiv" class="form-check mb-2">
                        <div class="checkbox">
                            <label for="checkbox1" class="form-check-label ">
                                <input type="checkbox" id="deleteUpload" name="deleteUpload" value="1" class="form-check-input">Delete post media
                            </label>
                        </div>
                    </div>

                    <div id="mediaUploadDiv" class="form-group">
                        <label class=" form-control-label">Upload</label>
                        <div class="form-check">

                            <div class="radio">
                                <label for="radio1" class="form-check-label ">
                                    <input type="radio" id="radioNoMedia" name="radiosUpdateMedia" value="" class="form-check-input" checked>No Media
                                </label>
                            </div>
                            <div class="radio">
                                <label for="radio1" class="form-check-label ">
                                    <input type="radio" id="radioPicture" name="radiosUpdateMedia" value="picture" class="form-check-input">Image
                                </label>
                            </div>
                            <div class="radio">
                                <label for="radio2" class="form-check-label ">
                                    <input type="radio" id="radioVideo" name="radiosUpdateMedia" value="video" class="form-check-input">Video
                                </label>
                            </div>
                        </div>
                    </div>

                    <div id="updateUploadImageDiv" class="form-group" style="display:none;">
                        <label for="nf-email" class=" form-control-label">Image</label>
                        <input class="form-control" style="height: auto;" type="file" id="updateUploadImage" name="updateUploadImage" accept="image/*">
                    </div>

                    <div id="updateUploadVideoDiv" class="form-group" style="display:none;">
                        <label for="nf-email" class=" form-control-label">Video</label>
                        <input class="form-control" style="height: auto;" type="file" id="updateUploadVideo" name="updateUploadVideo" accept="video/*">
                    </div>

                    <div class="form-group">
                        <label for="nf-email" class=" form-control-label">Post</label>
                        <textarea name="postUpdate" id="postUpdate" rows="9" placeholder="Write your post here...." class="form-control"></textarea>
                    </div>
                    
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary" id="btnPostUpdate" value="">Save</button>
                </div>

            </form>
        </div>
    </div>
</div>

<script>

    $('input[name=radiosUpdateMedia]').change(function() {
        
        if(document.getElementById('radioPicture').checked) {
                
            $('#updateUploadImageDiv').show();
            $('#updateUploadVideoDiv').hide();
            $('#updateUploadVideo').val("");

        }
        else if(document.getElementById('radioVideo').checked) {

            $('#updateUploadImageDiv').hide();
            $('#updateUploadVideoDiv').show();
            $('#updateUploadImage').val("");
            
        }

        else{

            $('#updateUploadImageDiv').hide();
            $('#updateUploadVideoDiv').hide();
            $('#updateUploadVideo').val("");
            $('#updateUploadImage').val("");

        }
        
    });

    $('#editPost').on('show.bs.modal', function (event) {
        
        let post = $(event.relatedTarget).data('post');
        let post_picture = $(event.relatedTarget).data('picture');
        let post_video = $(event.relatedTarget).data('video');
        let post_edit = $(event.relatedTarget).data('edit');

        $('#postUpdate').text(post);

        if(post_picture !== "" || post_video !== "" ){

            $('#updateDeleteTextDiv').show();
            $('#updateDeleteUploadDiv').show();
            $('#mediaUploadDiv').hide();

        }

        else{

            $('#updateDeleteTextDiv').hide();
            $('#updateDeleteUploadDiv').hide();
            $('#mediaUploadDiv').show();

        }

        if(post_picture === ""){

            $('#divPostPictureUpdate').hide();

        }

        else{

            $('#divPostPictureUpdate').show();
            $('#postPictureUpdate').attr('src', "/storage/img/post/"+ post_picture);

        }

        if(post_video === ""){

            $('#divPostVideoUpdate').hide();

        }

        else{

            $('#divPostVideoUpdate').show();
            $('#postVideoUpdate').attr('src', "/storage/video/post/"+ post_video);

        }

        $('#postUpdate').text(post);

        $('#btnPostUpdate').val(post_edit);

    });

    $('#btnPostUpdate').click(function(){
    
        let post_edit = $("#btnPostUpdate").val();

        $('#formPostUpdate').attr("action", '/post/'+ post_edit +'/update');

    });

</script>

