<div class="form_bg">
    <form action="phpmail.php" method="post" id="leadForm">
        <div class="form" id="step1">
            <div class="form_heading">
                <h4>See if you qualify. Only takes 30 seconds!</h4>
            </div>
            <div class="fields">
                <div class="form_control">
                    <p>Have you or a loved one been hospitalized or seen a doctor due to an injury?</p>
                    <select name="hospitalized" id="hospitalized" class="select_field">
                        <option value="">Select Yes or No</option>
                        <option value="yes">Yes</option>
                        <option value="no">No</option>
                    </select>
                </div>
                <div class="form_control">
                    <p>Is an attorney representing you for this case already?</p>
                    <select name="representing" id="representing" class="select_field">
                        <option value="">Select Yes or No</option>
                        <option value="no">No</option>
                        <option value="yes">Yes</option>
                    </select>
                </div>
                <div class="form_control">
                    <input type="button" name="next" value="" id="btn_form" class="btn_form">
                </div>
            </div>
            <img src="/assets/images/step1_bg.png" alt="step" class="step1_bg">
        </div>

        <div class="form" id="step2">
            <div class="form_heading">
                <h4>See if you qualify. Only takes 30 seconds!</h4>
            </div>
            <div class="fields">
                <div class="form_control">
                    <p>What caused your injury? (Select all that apply)</p>
                </div>
                <div id="accident-type-checkboxes">
                    <div class="form_control">
                        <input type="checkbox" id="car" name="car" value="Car Accident"
                               class="checkbox"><label for="car">Car Accident</label>
                    </div>
                    <div class="form_control">
                        <input type="checkbox" id="motorcycle" name="motorcycle"
                               value="Motorcycle Accident" class="checkbox"><label for="motorcycle">Motorcycle
                            Accident</label>
                    </div>
                    <div class="form_control">
                        <input type="checkbox" id="truck" name="truck" value="Truck Accident"
                               class="checkbox"><label for="truck">Truck Accident</label>
                    </div>
                    <div class="form_control">
                        <input type="checkbox" id="medical" name="medical" value="Medical Malpractice"
                               class="checkbox"><label for="medical">Medical Malpractice</label>
                    </div>
                    <div class="form_control">
                        <input type="checkbox" id="work" name="work" value="Work Related Injury"
                               class="checkbox"><label for="work">Work Related Injury</label>
                    </div>
                    <div class="form_control">
                        <input type="checkbox" id="slip" name="slip" value="Slip and Fall"
                               class="checkbox"><label for="slip">Slip and Fall</label>
                    </div>
                    <div class="form_control">
                        <input type="checkbox" id="prod_lia" name="prod_lia"
                               value="Product Liability/Defect" class="checkbox"><label for="prod_lia">Product
                            Liability/Defect</label>
                    </div>
                </div>
                <div class="form_control">
                    <p>Year of Injury:</p>
                    <select name="year" id="year" class="select_field">
                        <option value="">Select Answer</option>
                        <option value="2022">2022</option>
                        <option value="2021">2021</option>
                        <option value="2020">2020</option>
                    </select>
                </div>
                <div class="form_control">
                    <input type="button" name="next" value="" id="btn_form2" class="btn_form">
                </div>
            </div>
            <img src="/assets/images/step2_bg.png" alt="step" class="step1_bg">
        </div>

        <div class="form" id="step3">
            <div class="form_heading">
                <h4>Find out how much your case is worth!</h4>
            </div>
            <div class="fields">
                <div class="form_control">
                    <p>Tell us about your accident for a free, confidential review by an experienced
                        attorney.</p>
                </div>

                <div class="form_control">
                    <div class="half_field"><input type="text" placeholder="First Name" name="fname"
                                                   id="fname" class="input_field"></div>
                    <div class="half_field2"><input type="text" placeholder="Last Name" name="lname"
                                                    id="lname" class="input_field"></div>
                    <div class="clearfix"></div>
                </div>
                <div class="form_control">
                    <div class="half_field">
                        <select name="state" id="state" class="select_field2">
                            <option value="">State</option>
                            <option value="AL">Alabama</option>
                            <option value="AK">Alaska</option>
                            <option value="AZ">Arizona</option>
                            <option value="AR">Arkansas</option>
                            <option value="CA">California</option>
                            <option value="CO">Colorado</option>
                            <option value="CT">Connecticut</option>
                            <option value="DE">Delaware</option>
                            <option value="DC">District Of Columbia</option>
                            <option value="FL">Florida</option>
                            <option value="GA">Georgia</option>
                            <option value="HI">Hawaii</option>
                            <option value="ID">Idaho</option>
                            <option value="IL">Illinois</option>
                            <option value="IN">Indiana</option>
                            <option value="IA">Iowa</option>
                            <option value="KS">Kansas</option>
                            <option value="KY">Kentucky</option>
                            <option value="LA">Louisiana</option>
                            <option value="ME">Maine</option>
                            <option value="MD">Maryland</option>
                            <option value="MA">Massachusetts</option>
                            <option value="MI">Michigan</option>
                            <option value="MN">Minnesota</option>
                            <option value="MS">Mississippi</option>
                            <option value="MO">Missouri</option>
                            <option value="MT">Montana</option>
                            <option value="NE">Nebraska</option>
                            <option value="NV">Nevada</option>
                            <option value="NH">New Hampshire</option>
                            <option value="NJ">New Jersey</option>
                            <option value="NM">New Mexico</option>
                            <option value="NY">New York</option>
                            <option value="NC">North Carolina</option>
                            <option value="ND">North Dakota</option>
                            <option value="OH">Ohio</option>
                            <option value="OK">Oklahoma</option>
                            <option value="OR">Oregon</option>
                            <option value="PA">Pennsylvania</option>
                            <option value="RI">Rhode Island</option>
                            <option value="SC">South Carolina</option>
                            <option value="SD">South Dakota</option>
                            <option value="TN">Tennessee</option>
                            <option value="TX">Texas</option>
                            <option value="UT">Utah</option>
                            <option value="VT">Vermont</option>
                            <option value="VA">Virginia</option>
                            <option value="WA">Washington</option>
                            <option value="WV">West Virginia</option>
                            <option value="WI">Wisconsin</option>
                            <option value="WY">Wyoming</option>
                        </select>
                    </div>
                    <div class="half_field2"><input type="text" placeholder="Zip Code" name="zipcode"
                                                    id="zipcode" class="input_field"></div>
                    <div class="clearfix"></div>
                </div>
                <div class="form_control">
                    <div class="half_field"><input type="text" placeholder="Email" name="email"
                                                   id="email" class="input_field"></div>
                    <div class="half_field2"><input type="text" placeholder="Phone Number" name="phone"
                                                    id="phone" class="input_field"></div>
                    <div class="clearfix"></div>
                </div>
                <div class="form_control">
                    <p>Briefly describe any other details (important):</p>
                    <input type="text" placeholder="Description..." name="description" id="description"
                           class="input_field2">
                </div>
                <div class="form_control">
                    <p>By submitting your request, you grant permission for up to three of our premier
                        partners to contact you using the phone number or email address that you have
                        provided so we may assist you with your request for a free case evaluation. You
                        agree that the matched partner may use an automatic telephone dialing system
                        even if the number you provided is a wireless phone number. You understand that
                        consent to being contacted is not a condition of purchase or acceptance of
                        services of any kind.</p>

                    <input type="button" name="next" value="" id="btn_form3" class="btn_form">
                </div>
            </div>
            <img src="/assets/images/step3_bg.png" alt="step" class="step1_bg">
        </div>
    </form>
</div>

<!--<form method="post" id="leadForm">-->
<!--  <div class="form" id="step1">-->
<!--    <div>-->
<!--      <h5>See How Much Your Case Is Worth in <strong>Minutes</strong></h5>-->
<!--    </div>-->
<!--    <div class="fields">-->
<!--      <div class="steps">-->
<!--        <div class="input-wrap" v-if="step===1">-->
<!--          <div class="cols-2">-->
<!--            <div>-->
<!--              <input type="number" name="zip_code" placeholder="Zip Code" required>-->
<!--            </div>-->
<!--            <div>-->
<!--              <select name="injury_type" required>-->
<!--                <option value="" disabled="" hidden="" selected>Select a injury type</option>-->
<!--                <option value="Car Accident">Car Accident</option>-->
<!--                  <option value="Truck Accident">Truck Accident</option>-->
<!--                  <option value="Motorcycle Accident">Motorcycle Accident</option>-->
<!--                  <option value="Dog Accident">Dog Accident</option>-->
<!--                  <option value="Accidental Death">Accidental Death</option>-->
<!--              </select>-->
<!--            </div>-->
<!---->
<!--          </div>-->
<!--        </div>-->
<!---->
<!--        <div class="input-wrap" v-if="step===2">-->
<!--          <div class="cols-2">-->
<!--            <div>-->
<!--              <input type="text" name="name" placeholder="Name" required>-->
<!--            </div>-->
<!--            <div>-->
<!--              <input type="tel" name="phone" placeholder="Phone" required>-->
<!--            </div>-->
<!--          </div>-->
<!--        </div>-->
<!--        <div class="input-wrap" v-if="step==3">-->
<!--          <input type="email" name="email" placeholder="Email" required>-->
<!--          <div class="row">-->
<!--            <div style="padding-right: 20px;">-->
<!--              <input type="checkbox" style="zoom:2;position:relative;top:3px" id="agree">-->
<!--            </div>-->
<!--            <div>-->
<!--              <label for="agree">-->
<!--                <p class="agrement">By submitting your request you are accepting the <br> <a href="privacy.php" target="_blank">privacy policy.</a></p>-->
<!--              </label>-->
<!--            </div>-->
<!--          </div>-->
<!--        </div>-->
<!--      </div>-->
<!--      <div class="input-wrap">-->
<!--        <input @click="goForward" type="button" v-if="step==0 && step !=3" value="Have an Attorney Call Me" />-->
<!--        <input @click="goForward" type="button" v-if="step!=0 && step !=3" value="Next" />-->
<!--        <input @click="testSubmit" type="submit" v-if="step==3" value="Get The Call" />-->
<!--      </div>-->
<!--    </div>-->
<!---->
<!--  </div>-->
<!--</form>-->

