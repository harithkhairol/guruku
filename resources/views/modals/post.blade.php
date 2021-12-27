<!-- post modal -->
<div class="modal fade" id="aboutPost" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="mediumModalLabel">Create a post</h5>

                
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <form id="formPost" action="" method="POST">
                @csrf

                <div class="modal-body">
                    <div class="col-12">
                        <textarea name="post" id="post" rows="9" placeholder="Write your post here...." class="form-control" required></textarea>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary" id="btnPost" value="">Save</button>
                </div>

            </form>
        </div>
    </div>
</div>

<script>

    $('#btnPost').click(function(){
    
        let post = $("#post").val();

        $('#formPost').attr("action", '/post');

    });

</script>