<!-- post modal -->
<div class="modal fade" id="deletePost" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="mediumModalLabel">Delete post</h5>

                
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <form id="formPostDelete" action="" method="POST">
                @csrf

                <div class="modal-body">

                    <div class="form-group">
                        <p>Are you sure you want to delete this post?</p>
                    </div>

                    <div id="divPostPictureDelete" class="form-group" style="display:none;">
                        <img width="537px" name="postPictureDelete" id="postPictureDelete" src="" alt="">
                    </div>

                    <div id="divPostVideoDelete" class="form-group" style="display:none;">
                        <div class="embed-responsive embed-responsive-4by3">
                            <video name="postVideoDelete" id="postVideoDelete" src=""></video>
                            <!-- <iframe name="postVideoDelete" id="postVideoDelete" class="embed-responsive-item" src=""></iframe> -->
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <textarea name="postDelete" id="postDelete" rows="9" placeholder="Write your post here...." class="form-control" disabled></textarea>
                    </div>
                    
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-danger" id="btnPostDelete" value="">Delete</button>
                </div>

            </form>
        </div>
    </div>
</div>

<script>

    $('#deletePost').on('show.bs.modal', function (event) {
        
        let post = $(event.relatedTarget).data('post');
        let post_picture = $(event.relatedTarget).data('picture');
        let post_video = $(event.relatedTarget).data('video');
        let post_delete = $(event.relatedTarget).data('delete');

        $('#postDelete').text(post);

        if(post_picture === ""){

            $('#divPostPictureDelete').hide();

        }

        else{

            $('#divPostPictureDelete').show();
            $('#postPictureDelete').attr('src', "/storage/img/post/"+ post_picture);

        }

        if(post_video === ""){

            $('#divPostVideoDelete').hide();

        }

        else{

            $('#divPostVideoDelete').show();
            $('#postVideoDelete').attr('src', "/storage/video/post/"+ post_video);

        }

        $('#postDelete').text(post);

        $('#btnPostDelete').val(post_delete);

    });

    $('#btnPostDelete').click(function(){
    
        let post_delete = $("#btnPostDelete").val();

        $('#formPostDelete').attr("action", '/post/'+ post_delete +'/delete');

    });

</script>

