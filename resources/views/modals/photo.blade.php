<!-- post modal -->
<div class="modal fade" id="postPicture" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="mediumModalLabel">Create a post</h5>

                
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <form id="formPostPhoto" action="{{ route('post.image') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="modal-body">

                    <div class="form-group">
                        <label for="nf-email" class=" form-control-label">Image</label>
                        <input class="form-control" style="height: auto;" type="file" id="uploadImage" name="uploadImage" accept="image/*" required>
                    </div>

                    <div class="form-group" id="preview"></div>
                    <div id='outputImage'></div>

                    <div class="form-group" id="progressDivId" style="display:none;">
                    <!-- <div class="form-group" id="progressDivId"> -->
                        <div class="progress">
                            <div id="progressBarPhoto" class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%"></div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="nf-email" class=" form-control-label">Post</label>
                        <textarea class="form-control" name="post" id="post" rows="9" placeholder="Write your post here...." class="form-control" required></textarea>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary" id="btnPost" name="btnPost" value="">Save</button>
                </div>

            </form>
        </div>
    </div>
</div>

<script>

    $("#uploadImage").change(function(){

        $('#preview').html("");
        $('#preview').append('<img width="537px" src="'+URL.createObjectURL(event.target.files[0])+'">');

    });

</script>

<script>
    $(function () {
        $(document).ready(function () {

            var url = window.location.href;    

            $('#formPostPhoto').ajaxForm({

                beforeSend: function () {
                    $("#progressDivId").css("display", "block");
                    var percentage = '0';
                },
                uploadProgress: function (event, position, total, percentComplete) {
                    var percentage = percentComplete;
                    $('#progressBarPhoto').css("width", percentage+'%', function() {
                        return $(this).attr("aria-valuenow", percentage) + "%";
                    })
                },
                complete: function (xhr) {

                    console.log('File has uploaded');
                    window.location.href = url+"?post=success";
                }
            });

        });
    });
</script>