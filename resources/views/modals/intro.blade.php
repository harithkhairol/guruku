<!-- delete property photo modal -->
<div class="modal fade" id="introModal" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="mediumModalLabel">Edit intro</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <form id="formIntro" action="{{ route('user.intro.update') }}" method="POST">
                @csrf

                <div class="modal-body">

                    <div class="form-group">
                        <label for="nf-email" class=" form-control-label">Name*</label>
                        <input type="text" id="nameIntro" name="nameIntro" class="form-control" value="{{ $user_name }}" required>
                    </div>

                    <div class="form-group">
                        <label for="nf-email" class=" form-control-label">Headline</label>
                        <input type="text" id="headlineIntro" name="headlineIntro" class="form-control" value="{{ $user_intro->headline }}">
                    </div>

                    <div class="form-group">
                        <label for="nf-email" class=" form-control-label">Industry</label>
                        <input type="text" id="industryIntro" name="industryIntro" class="form-control" value="{{ $user_intro->industry }}">
                    </div>
                    
                    <div class="form-group">
                        <label for="nf-email" class=" form-control-label">City/District</label>
                        <input type="text" id="cityIntro" name="cityIntro" class="form-control" value="{{ $user_intro->city }}">
                    </div>
                    
                    

                </div>
                <div class="modal-footer">            
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary" id="btnUpdateIntro" value="">Save</button>
                </div>

            </form>

            
        </div>
    </div>
</div>
