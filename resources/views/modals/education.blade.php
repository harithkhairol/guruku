<!-- education modal -->
<div class="modal fade" id="educationModal" tabindex="-1" role="dialog" aria-labelledby="scrollmodalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="scrollmodalLabel">Add education</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <form id="formEducation" action="{{ route('user.education.store') }}" method="POST">
                @csrf
                
                <div class="modal-body">

                    <div class="form-group">
                        <label for="nf-email" class=" form-control-label">School*</label>
                        <input type="text" id="schoolEducation" name="schoolEducation" placeholder="Ex: University Teknologi" class="form-control" required>
                        <!-- <span class="help-block">Please enter your email</span> -->
                    </div>

                    <div class="form-group">
                        <label for="nf-email" class=" form-control-label">Degree</label>
                        <input type="text" id="degreeEducation" name="degreeEducation" placeholder="Ex: Bachelor's" class="form-control">
                        <!-- <span class="help-block">Please enter your email</span> -->
                    </div>

                    <div class="form-group">
                        <label for="nf-email" class=" form-control-label">Field of study</label>
                        <input type="text" id="fosEducation" name="fosEducation" placeholder="Ex: IT" class="form-control">
                        <!-- <span class="help-block">Please enter your email</span> -->
                    </div>

                    <div class="form-group">
                        <label for="nf-email" class=" form-control-label">Start date*</label>
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <select class="form-control" id="monthEducation" name="monthEducation" required>
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
                                    <select class="form-control" id="yearEducation" name="yearEducation" required>
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
                                    <select class="form-control" id="endMonthEducation" name="endMonthEducation" required>
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
                                    <select class="form-control" id="endYearEducation" name="endYearEducation" required>
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
                        <input type="text" id="gradeEducation" name="gradeEducation" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="nf-email" class=" form-control-label">Activities and societies</label>
                        <textarea name="activitiesEducation" id="activitiesEducation" rows="9" placeholder="Ex: Volleyball, Swimming" class="form-control"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="nf-email" class=" form-control-label">Description</label>
                        <textarea name="descriptionEducation" id="descriptionEducation" rows="9" placeholder="Enter Description....." class="form-control"></textarea>
                    </div>
                    
                </div>
                <div class="modal-footer">
                
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary" id="btnCreateEducation" value="">Save</button>
                
                </div>

            </form>

        </div>
    </div>
</div>
