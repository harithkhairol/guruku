<!-- about modal -->
<div class="modal fade" id="aboutModal" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="mediumModalLabel">Edit about</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <form id="formAbout" action="{{ route('user.about.update') }}" method="POST">
                @csrf

                <div class="modal-body">
                    
                    <div class="col-12">
                        <p id="textAbout">Description</p>
                        <textarea name="about" id="about" rows="9" placeholder="Write about yourself here....." class="form-control">{{ $profile->about }}</textarea>
                    </div>
                </div>
                <div class="modal-footer">            
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary" id="btnUpdateAbout" value="">Save</button>
                </div>

            </form>

            
        </div>
    </div>
</div>