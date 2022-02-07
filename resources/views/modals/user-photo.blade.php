<!-- delete property photo modal -->
<div class="modal fade" id="userPhotoModal" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="mediumModalLabel">Upload profile photo</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <form id="formProfilePhoto" action="{{ route('user.image') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="modal-body">

                    <div class="form-group">
                        <label for="nf-email" class=" form-control-label">Image</label>
                        <input class="form-control" style="height: auto;" type="file" id="uploadProfileImage" name="uploadProfileImage" accept="image/*" required>
                    </div>

                    <div class="form-group" id="preview"></div>
                    <div id='outputImage'></div>

                    <div class="form-group" id="progressDivId" style="display:none;">
                        <div class="progress">
                            <div id="progressBarPhoto" class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%"></div>
                        </div>
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

    $("#uploadProfileImage").change(function(){

        $('#preview').html("");
        $('#preview').append('<img width="537px" src="'+URL.createObjectURL(event.target.files[0])+'">');

    });

</script>

<script src="{{ asset('vendor/jquery.form.min.js') }}"></script>

<script>
    $(function () {
        $(document).ready(function () {

            var url_user_photo = window.location.href;

            $('#formProfilePhoto').ajaxForm({

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
                    window.location.href = url_user_photo+"?upload=success";
                }
            });

        });
    });
</script>