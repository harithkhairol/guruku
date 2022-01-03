<!-- delete property photo modal -->
<div class="modal fade" id="editExperienceModal" tabindex="-1" role="dialog" aria-labelledby="scrollmodalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="scrollmodalLabel">Edit experience</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <form id="formEditExperience" action="" method="POST">
                @csrf
                
                <div class="modal-body">

                    <div class="form-group">
                        <label for="nf-email" class=" form-control-label">Title</label>
                        <input type="text" id="editTitleExperience" name="editTitleExperience" placeholder="Enter Title.." class="form-control">
                        <!-- <span class="help-block">Please enter your email</span> -->
                    </div>
                    
                    <div class="form-group">
                        <label for="nf-email" class=" form-control-label">Employment type</label>
                        <select class="form-control" id="editTypeExperience" name="editTypeExperience">
                            <option selected disabled>Please select</option>
                            <option value="Full-time">Full-time</option>
                            <option value="Part-time">Part-time</option>
                            <option value="Self-employed">Self-employed</option>
                            <option value="Freelance">Freelance</option>
                            <option value="Contract">Contract</option>
                            <option value="Internship">Internship</option>
                            <option value="Apprenticeship">Apprenticeship</option>
                            <option value="Seasonal">Seasonal</option>
                        </select>
                        <!-- <span class="help-block">Country-specific employment types</span> -->
                    </div>

                    <div class="form-group">
                        <label for="nf-email" class=" form-control-label">Company name*</label>
                        <input type="text" id="editCompanyExperience" name="editCompanyExperience" placeholder="Enter Company Name.." class="form-control">
                        <!-- <span class="help-block">Please enter your email</span> -->
                    </div>

                    <div class="form-group">
                        <label for="nf-email" class=" form-control-label">Location</label>
                        <input type="text" id="editLocationExperience" name="editLocationExperience" placeholder="Enter Location.." class="form-control">
                        <!-- <span class="help-block">Please enter your email</span> -->
                    </div>

                    <div class="form-check mb-2">
                        <div class="checkbox">
                            <label for="checkbox1" class="form-check-label ">
                                <input onclick="editCurrent()" type="checkbox" id="editCurrentExperience" name="editCurrentExperience" value="1" class="form-check-input">Currently Working In This Role
                            </label>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="nf-email" class=" form-control-label">Start date*</label>
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <select class="form-control" id="editMonthExperience" name="editMonthExperience">
                                        <option selected disabled>Month</option>
                                        <option value="1">January</option>
                                        <option value="2">February</option>
                                        <option value="3">March</option>
                                        <option value="4">April</option>
                                        <option value="5">May</option>
                                        <option value="6">June</option>
                                        <option value="7">July</option>
                                        <option value="8">August</option>
                                        <option value="9">September</option>
                                        <option value="10">October</option>
                                        <option value="11">November</option>
                                        <option value="12">December</option>
                                    </select>
                                    <!-- <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span> -->
                                </div>
                            </div>
                            <div class="col-6">
                                <!-- <label for="x_card_code" class="control-label mb-1">Security code</label> -->
                                <div class="form-group">
                                    <select class="form-control" id="editYearExperience" name="editYearExperience">
                                        <option value="" selected disabled>Year</option>

                                            @foreach (range(date('Y'), date('Y')  - 100) as $year)
                                                <option value="{{ $year }}">{{ $year }}</option>
                                            @endforeach
                                        
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="nf-email" class=" form-control-label">End date*</label>
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <select class="form-control" id="editEndMonthExperience" name="editEndMonthExperience">
                                        <option value="" selected disabled>Month</option>
                                        <option value="1">January</option>
                                        <option value="2">February</option>
                                        <option value="3">March</option>
                                        <option value="4">April</option>
                                        <option value="5">May</option>
                                        <option value="6">June</option>
                                        <option value="7">July</option>
                                        <option value="8">August</option>
                                        <option value="9">September</option>
                                        <option value="10">October</option>
                                        <option value="11">November</option>
                                        <option value="12">December</option>
                                    </select>
                                    <!-- <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span> -->
                                </div>
                            </div>
                            <div class="col-6">
                                <!-- <label for="x_card_code" class="control-label mb-1">Security code</label> -->
                                <div class="form-group">
                                    <select class="form-control" id="editEndYearExperience" name="editEndYearExperience">
                                        <option selected disabled>Year</option>

                                        @foreach (range(date('Y'), date('Y')  - 100) as $year)
                                            <option value="{{ $year }}">{{ $year }}</option>
                                        @endforeach

                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="nf-email" class=" form-control-label">Description</label>
                        <textarea name="editDescriptionExperience" id="editDescriptionExperience" rows="9" placeholder="Enter Description....." class="form-control"></textarea>
                    </div>
                    
                </div>
                <div class="modal-footer" style="display: block;">

                    <button type="submit" class="btn btn-danger" id="btnDeleteExperience" value="">Delete</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal" style="float:right;">Cancel</button>
                    <button type="submit" class="btn btn-primary" id="btnEditExperience" value="" style="float:right;">Save</button>
                
                </div>

            </form>

        </div>
    </div>
</div>

<script>

    $('#editExperienceModal').on('show.bs.modal', function (event) {
        
        let editExperience = $(event.relatedTarget).data('update');

        let editTitleExperience = $(event.relatedTarget).data('title');

        let editTypeExperience = $(event.relatedTarget).data('type');

        let editCompanyExperience = $(event.relatedTarget).data('company');

        let editLocationExperience = $(event.relatedTarget).data('location');

        let editCurrentExperience = $(event.relatedTarget).data('current');

        let editMonthExperience = $(event.relatedTarget).data('startmonth');

        let editYearExperience = $(event.relatedTarget).data('startyear');

        let editEndMonthExperience = $(event.relatedTarget).data('endmonth');

        let editEndYearExperience = $(event.relatedTarget).data('endyear');

        let editDescriptionExperience = $(event.relatedTarget).data('desc');

        $('#editTitleExperience').val(editTitleExperience);

        $('#editTypeExperience').val(editTypeExperience);

        $('#editCompanyExperience').val(editCompanyExperience);

        $('#editLocationExperience').val(editLocationExperience);

        // $('#editCurrentExperience').val(editCurrentExperience);

        $('#editMonthExperience').val(parseInt(editMonthExperience));

        $('#editYearExperience').val(editYearExperience);

        if(editCurrentExperience == 1){

            $( "#editCurrentExperience" ).prop( "checked", true );
            
            $("select#editEndMonthExperience").index(0); 

            $("select#editEndYearExperience").index(0);

            $("#editEndMonthExperience").prop('disabled', true);

            $("#editEndYearExperience").prop('disabled', true);

            $('#editEndMonthExperience').prop('required',false);

            $('#editEndYearExperience').prop('required',false);

        }

        else{

            $( "#editCurrentExperience" ).prop( "checked", false );

            $("#editEndMonthExperience").prop('disabled', false);

            $("#editEndYearExperience").prop('disabled', false);

            $('#editEndMonthExperience').prop('required',true);

            $('#editEndYearExperience').prop('required',true);

            $('#editEndMonthExperience').val(parseInt(editEndMonthExperience));

            $('#editEndYearExperience').val(editEndYearExperience);

        }

        $('#editDescriptionExperience').val(editDescriptionExperience);

        $('#btnEditExperience').val(editExperience);
        $('#btnDeleteExperience').val(editExperience);

    });


    $('#btnEditExperience').click(function(){

        let experience_edit = $("#btnEditExperience").val();
    
        $('#formEditExperience').attr("action", '/experience/'+ experience_edit +'/update/');

    });

    $('#btnDeleteExperience').click(function(){

        let experience_delete = $("#btnDeleteExperience").val();

        let experience_company = $("#editCompanyExperience").val();

        if(!confirm('Do you really want to delete experience at '+ experience_company +'?')){
            
            return false;
        
        }

        else{

            $('#formEditExperience').attr("action", '/experience/'+ experience_delete +'/delete');
            $('#formEditExperience').attr("method", "post");
            
        }

    });

    

    function editCurrent(){

        $("#editEndMonthExperience").prop('disabled', function (_, val) { return ! val; });

        $("#editEndYearExperience").prop('disabled', function (_, val) { return ! val; });

        $("#editEndMonthExperience").prop('required', function (_, val) { return ! val; });

        $("#editEndYearExperience").prop('required', function (_, val) { return ! val; });

    }

</script>