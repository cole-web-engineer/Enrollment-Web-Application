<div class="tab-pane" id="childdetails">
    <h4 class="info-text">Now Fill In the Child's Details </h4>
    <div class="col-sm-6">
        <div class="input-group">
												<span class="input-group-addon">
													<i class="material-icons">account_circle</i>
												</span>
            <div class="form-group label-floating">
                <label class="control-label">Child First Name</label>
                <input name="childfirstname" type="text" class="form-control" required>
            </div>
        </div>
        <div class="input-group">
												<span class="input-group-addon">
													<i class="material-icons">account_box</i>
												</span>
            <div class="form-group label-floating">
                <label class="control-label">Child Surname</label>
                <input name="childlastname" type="text" class="form-control" required>
            </div>
        </div>
        <div class="input-group">
												<span class="input-group-addon">
													<i class="material-icons">date_range</i>
												</span>
            <div class="form-group label-floating">
                <label class="control-label">Date of Birth</label>
                <input class="form-control" id="datepicker" name="DOB" type="text" required>
                <!-- test code -->

                <!-- end of test -->
            </div>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="input-group">
												<span class="input-group-addon">
													<i class="material-icons">school</i>
												</span>
            <div class="form-group label-floating">
                <label class="control-label">Education Level</label>
                <select name="education_level" class="form-control" required>
                    <option disabled="" selected=""></option>
                    <option value="PreSchool"> PreSchool </option>
                    <option value="Primary School"> Primary School </option>
                    <option value="High School"> High School </option>
                </select>
            </div>
        </div>
        <div class="input-group">
												<span class="input-group-addon">
													<i class="material-icons">grade</i>
												</span>
            <div class="form-group label-floating">
                <label class="control-label">Grade</label>
                <select name="grade" class="form-control" required>
                    <option disabled="" selected=""></option>
                    <option value="daycare">Day Care</option>
                    <option value="R">R</option>
                    <option value="RR">RR</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                </select>
            </div>
        </div>
        <div class="input-group">
												<span class="input-group-addon">
													<i class="material-icons">wc</i>
												</span>
            <div class="form-group label-floating">
                <label class="control-label">Gender</label>
                <select name="gender" class="form-control" required>
                    <option disabled="" selected=""></option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                </select>
            </div>
        </div>
    </div>
</div>