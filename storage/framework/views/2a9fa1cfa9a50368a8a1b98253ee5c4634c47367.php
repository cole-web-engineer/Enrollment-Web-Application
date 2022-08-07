<div class="tab-pane" id="enrollment">
    <div class="row">
        <h4 class="info-text"> Enrollment Options <div class="text-primary">Boarding Only Available at Highlighted Branches</div> </h4>
    </div>

     <div class="col-sm-6">

        <div class="input-group">
                                                <span class="input-group-addon">
                                                    <i class="material-icons">location_on</i>
                                                </span>
            <div class="form-group label-floating">
                <label class="control-label">School Branch</label>
                <select name="school_branch" class="form-control" required>
                    <option disabled="" selected=""></option>
                    <option value="Midrand" class="text-primary">TaalNET Midrand (Day School & Boys Boarding) </option>
                    <option value="Randburg">TaalNET Randburg </option>
                    <option value="Kempton_Park">TaalNET Kempton Park </option>
                    <option value="Roodepoort">TaalNET Roodepoort </option>
                    <option value="Turffontein">TaalNET Turffontein </option>
                    <option value="Germiston" class="text-primary">TaalNET Beula Park (Day School & Girls Boarding) </option>
                    <!-- <option value="Virtual">TaalNET Virtual School </option> -->
                    <option value="Pretoria">TaalNET Pretoria </option>
                    <option value="Hazyview">TaalNET Hazyview </option>
                    <option value="Glendale" class="text-primary">TaalNET Zim Glendale (Boys & Girls Boarding) </option>
                    <option value="Eastview">TaalNET Zim Eastview </option>
                    <option value="Mvurwi">TaalNET Zim Mvurwi</option>
                    <!--<option value="Online">TaalNET Online / Virtual School</option> -->
                </select>
            </div>
        </div>

        <div class="input-group">
                                                <span class="input-group-addon">
                                                    <i class="material-icons">dns</i>
                                                </span>
            <div class="form-group label-floating">
                <label class="control-label">Enrollment Type</label>
                <select name="enrol_type" class="form-control" required>
                    <option disabled="" selected=""></option>
                    <option value="Day_Scholar"> Day Scholar </option>
                    <option value="Boarder"> Boarder </option>
                    <option value="Virtual">Online / Virtual</option>
                </select>
            </div>
        </div>

    </div>
    <div class="col-sm-6">
        <div class="input-group">
												<span class="input-group-addon">
													<i class="material-icons">date_range</i>
												</span>
            <div class="form-group label-floating">
                <label class="control-label">Start Year</label>
                <select name="startyear" class="form-control" required>
                    <option disabled="" selected=""></option>
                    <option value="2021">2021</option>
                    <option value="2022">2022</option>
                </select>
            </div>
        </div>
        <div class="input-group">
												<span class="input-group-addon">
													<i class="material-icons">school</i>
												</span>
            <div class="form-group label-floating">
                <label class="control-label">Previous School</label>
                <input name="previous_school" type="text" class="form-control">
            </div>
        </div>
    </div>
</div>