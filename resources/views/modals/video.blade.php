<!-- post modal -->
<div class="modal fade" id="postVideo" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="mediumModalLabel">Create a post</h5>

                
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <form id="formPostVideo" action="{{ route('post.video') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="modal-body">

                    <div class="form-group">
                        <label for="nf-email" class=" form-control-label">Video</label>
                        <input class="form-control" style="height: auto;" type="file" id="uploadVideo" name="uploadVideo" accept="video/*" required>
                    </div>

                    <div class="form-group" id="previewVideo"></div>

                    <div class="form-group" id="progressDivVideoId" style="display:none;">
                        <div class="progress">
                            <div id="progressBarVideo" class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%"></div>
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

    $("#uploadVideo").change(function(){

        $('#previewVideo').html("");
        $('#previewVideo').append('<video width="537px" src="'+URL.createObjectURL(event.target.files[0])+'" controls></video>');

    });

</script>

<script>
    $(function () {
        $(document).ready(function () {

            $('#formPostVideo').ajaxForm({

                beforeSend: function () {
                    $("#progressDivVideoId").css("display", "block");
                    var percentage = '0';
                },
                uploadProgress: function (event, position, total, percentComplete) {
                    var percentage = percentComplete;
                    $('#progressBarVideo').css("width", percentage+'%', function() {
                        return $(this).attr("aria-valuenow", percentage) + "%";
                    })
                },
                complete: function (xhr) {
                    console.log('File has uploaded');
                    window.location.href = "/feed?post=success";
                }
            });

        });
    });
</script>