<!-- delete experience photo modal -->
<div class="modal fade" id="experienceModal" tabindex="-1" role="dialog" aria-labelledby="scrollmodalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="scrollmodalLabel">Add <span id="titleExperience"></span></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <form id="formExperience" action="" method="POST">
                @csrf
                
                <div class="modal-body">

                    <div class="form-group">
                        <label for="nf-email" class=" form-control-label">Title</label>
                        <input type="text" id="titleExperience" name="titleExperience" placeholder="Enter Title.." class="form-control">
                        <!-- <span class="help-block">Please enter your email</span> -->
                    </div>
                    
                    <div class="form-group">
                        <label for="nf-email" class=" form-control-label">Employment type</label>
                        <select class="form-control" id="typeExperience" name="typeExperience">
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
                        <input type="text" id="companyExperience" name="companyExperience" placeholder="Enter Company Name.." class="form-control">
                        <!-- <span class="help-block">Please enter your email</span> -->
                    </div>

                    <div class="form-group">
                        <label for="nf-email" class=" form-control-label">Location</label>
                        <input type="text" id="locationExperience" name="locationExperience" placeholder="Enter Location.." class="form-control">
                        <!-- <span class="help-block">Please enter your email</span> -->
                    </div>

                    <div class="form-check mb-2">
                        <div class="checkbox">
                            <label for="checkbox1" class="form-check-label ">
                                <input onclick="current()" type="checkbox" id="currentExperience" name="currentExperience" value="1" class="form-check-input">Currently Working In This Role
                            </label>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="nf-email" class=" form-control-label">Start date*</label>
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <select class="form-control" id="monthExperience" name="monthExperience">
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
                                    <select class="form-control" id="yearExperience" name="yearExperience">
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
                        <label for="nf-email" class=" form-control-label">End date*</label>
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <select class="form-control" id="endMonthExperience" name="endMonthExperience">
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
                                    <select class="form-control" id="endYearExperience" name="endYearExperience">
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
                        <textarea name="descriptionExperience" id="descriptionExperience" rows="9" placeholder="Enter Description....." class="form-control"></textarea>
                    </div>
                    
                </div>
                <div class="modal-footer">
                
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary" id="btnCreateExperience" value="">Save</button>
                
                </div>

            </form>

        </div>
    </div>
</div>

<script>

    $('#experienceModal').on('show.bs.modal', function (event) {
        
        let descAbout = $(event.relatedTarget).data('desc');
        let titleExperience = $(event.relatedTarget).data('title');
        
        $('#titleExperience').text(titleExperience);
        $('#textAbout').text('Description');

    });


    $('#btnCreateExperience').click(function(){
    
        $('#formExperience').attr("action", '/experience/store/');

    });

    function current(){
   
        $("#endMonthExperience").prop('disabled', function (_, val) { return ! val; });

        $("#endYearExperience").prop('disabled', function (_, val) { return ! val; });

    }


    // $('#monthExperience').prop('disabled');

</script>