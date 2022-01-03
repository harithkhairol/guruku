<!-- delete property photo modal -->
<div class="modal fade" id="editEducationModal" tabindex="-1" role="dialog" aria-labelledby="scrollmodalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="scrollmodalLabel">Edit education</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <form id="formEditEducation" action="" method="POST">
                @csrf
                
                <div class="modal-body">

                    <div class="form-group">
                        <label for="nf-email" class=" form-control-label">School*</label>
                        <input type="text" id="editSchoolEducation" name="editSchoolEducation" placeholder="Ex: University Teknologi" class="form-control" required>
                        <!-- <span class="help-block">Please enter your email</span> -->
                    </div>

                    <div class="form-group">
                        <label for="nf-email" class=" form-control-label">Degree</label>
                        <input type="text" id="editDegreeEducation" name="editDegreeEducation" placeholder="Ex: Bachelor's" class="form-control">
                        <!-- <span class="help-block">Please enter your email</span> -->
                    </div>

                    <div class="form-group">
                        <label for="nf-email" class=" form-control-label">Field of study</label>
                        <input type="text" id="editFosEducation" name="editFosEducation" placeholder="Ex: IT" class="form-control">
                        <!-- <span class="help-block">Please enter your email</span> -->
                    </div>

                    <div class="form-group">
                        <label for="nf-email" class=" form-control-label">Start date*</label>
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <select class="form-control" id="editMonthEducation" name="editMonthEducation" required>
                                        <option selected disabled value="">Month</option>
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
                                    <select class="form-control" id="editYearEducation" name="editYearEducation" required>
                                        <option selected disabled value="">Year</option>

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
                                    <select class="form-control" id="editEndMonthEducation" name="editEndMonthEducation" required>
                                        <option selected disabled value="">Month</option>
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
                                    <select class="form-control" id="editEndYearEducation" name="editEndYearEducation" required>
                                        <option selected disabled value="">Year</option>

                                        @foreach (range(date('Y'), date('Y')  - 100) as $year)
                                            <option value="{{ $year }}">{{ $year }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="nf-email" class=" form-control-label">Grade</label>
                        <input type="text" id="editGradeEducation" name="editGradeEducation" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="nf-email" class=" form-control-label">Activities and societies</label>
                        <textarea name="editActivitiesEducation" id="editActivitiesEducation" rows="9" placeholder="Ex: Volleyball, Swimming" class="form-control"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="nf-email" class=" form-control-label">Description</label>
                        <textarea name="editDescriptionEducation" id="editDescriptionEducation" rows="9" placeholder="Enter Description....." class="form-control"></textarea>
                    </div>
                    
                </div>
                <div class="modal-footer" style="display: block;">

                    <button type="submit" class="btn btn-danger" id="btnDeleteEducation" value="">Delete</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal" style="float:right;">Cancel</button>
                    <button type="submit" class="btn btn-primary" id="btnEditEducation" value="" style="float:right;">Save</button>
                
                </div>

            </form>

        </div>
    </div>
</div>

<script>

    $('#editEducationModal').on('show.bs.modal', function (event) {
        
        let editEducation = $(event.relatedTarget).data('update');

        let editSchoolEducation = $(event.relatedTarget).data('school');

        let editDegreeEducation = $(event.relatedTarget).data('degree');

        let editFosEducation = $(event.relatedTarget).data('fos');

        let editMonthEducation = $(event.relatedTarget).data('startmonth');

        let editYearEducation = $(event.relatedTarget).data('startyear');

        let editEndMonthEducation = $(event.relatedTarget).data('endmonth');

        let editEndYearEducation = $(event.relatedTarget).data('endyear');

        let editGradeEducation = $(event.relatedTarget).data('grade');

        let editActivitiesEducation = $(event.relatedTarget).data('activities');

        let editDescriptionEducation = $(event.relatedTarget).data('desc');

        //

        $('#editSchoolEducation').val(editSchoolEducation);

        $('#editDegreeEducation').val(editDegreeEducation);

        $('#editFosEducation').val(editFosEducation);

        $('#editMonthEducation').val(parseInt(editMonthEducation));

        $('#editYearEducation').val(editYearEducation);

        $('#editEndMonthEducation').val(parseInt(editEndMonthEducation));

        $('#editEndYearEducation').val(editEndYearEducation);

        $('#editGradeEducation').val(editGradeEducation);

        $('#editActivitiesEducation').val(editActivitiesEducation);

        $('#editDescriptionEducation').val(editDescriptionEducation);

        $('#btnEditEducation').val(editEducation);
        $('#btnDeleteEducation').val(editEducation);

    });


    $('#btnEditEducation').click(function(){

        let education_edit = $("#btnEditEducation").val();
    
        $('#formEditEducation').attr("action", '/education/'+ education_edit +'/update');
        $('#formEditEducation').attr("method", "post");

    });

    $('#btnDeleteEducation').click(function(){

        let education_delete = $("#btnDeleteEducation").val();

        let education_school = $("#editSchoolEducation").val();

        if(!confirm('Do you really want to delete education at '+ education_school +'?')){
            
            return false;
        
        }

        else{

            $('#formEditEducation').attr("action", '/education/'+ education_delete +'/delete');
            $('#formEditEducation').attr("method", "post");

        }

    });


</script>