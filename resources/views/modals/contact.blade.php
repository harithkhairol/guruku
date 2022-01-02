<!-- delete property photo modal -->
<div class="modal fade" id="contactModal" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="mediumModalLabel">{{ $user_name }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">

                <div class="form-group">
                    <label for="nf-email" class=" form-control-label">Email</label>
                    <input type="text" id="nameIntro" name="nameIntro" class="form-control" value="{{ $user_email }}" disabled>
                </div>


            </div>


        </div>
    </div>
</div>
