<?php require 'header.php' ?>
<?php
$city = $_GET['city'];// || $_SESSION['city'] || 'Knoxville';
$state = $_GET['state'];//|| $_SESSION['state'] || 'Tennessee';
$keyword = str_replace('-', ' ', $_GET['keyword']);
?>

    <section id="banner" class="marginCancel">
        <article class="full">
            <div class="row">
                <div class="one-half padding5em mobile-full-width flexCenter">
                    <div class="flexContent">
                        <div class="content">
                            <h1>If you or a loved one has been injured in an accident, you may be entitled to compensation!   </h1>
                            <div class="wrapper90">
                                <div class="box-action">

                                    <div class="row clear">
                                        <div class="first">
                                            <ul>
                                                <li>If you have been injured in an accident, we can help!</li>
                                                <li>There is NO Obligation - simply speak to one of our attorneys to find out what we can do for you</li>
                                                <li>No Fee Ever. Unless We Win.</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <a href="tel:8553467575" class="button big color-red fly">CALL NOW: (855) 346-7575</a>
                                </div>
                                <p class="text-center"><strong>97% Success Rate</strong></p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="one-half padding4emV mobile-full-width marginLeft mobile-marginLeft-cancel content-center height-map-relative" id="formArea">
                    <div class="one-sixth mobileHide"></div>
                    <div class="two-thirds box-default mobile-full-width">
                        <div class="form-contact">
                            <form action="phpmail.php" method="post">
                                <div class="form" id="step1">
                                    <div class="form_heading">
                                        <h4>See if you qualify. <br>Only takes 30 seconds!</h4>
                                    </div>
                                    <div class="fields">
                                        <div class="input-wrap">
                                            <p>Have you or a loved one been hospitalized or seen a doctor due to an injury?</p>
                                            <select name="hospitalized" id="hospitalized" class="select_field">
                                                <option value="">Select Yes or No</option>
                                                <option value="yes">Yes</option>
                                                <option value="no">No</option>
                                            </select>
                                        </div>
                                        <div class="input-wrap">
                                            <p>Is an attorney representing you for this case already?</p>
                                            <select name="representing" id="representing" class="select_field">
                                                <option value="">Select Yes or No</option>
                                                <option value="no">No</option>
                                                <option value="yes">Yes</option>
                                            </select>
                                        </div>
                                        <div class="input-wrap">
                                            <input type="button" name="next" value="Next" id="btn_form" class="btn_form">
                                        </div>
                                    </div>

                                </div>

                                <div class="form" id="step2">
                                    <div class="form_heading">
                                        <h4>What caused your injury?</h4>
                                    </div>
                                    <div class="fields">
                                        <div id="accident-type-checkboxes">
                                            <div class="input-wrap">
                                                <input type="checkbox" id="car" name="car" value="Car Accident" class="checkbox"><label for="car">Car Accident</label>
                                            </div>
                                            <div class="input-wrap">
                                                <input type="checkbox" id="motorcycle" name="motorcycle" value="Motorcycle Accident" class="checkbox"><label for="motorcycle">Motorcycle Accident</label>
                                            </div>
                                            <div class="input-wrap">
                                                <input type="checkbox" id="truck" name="truck" value="Truck Accident" class="checkbox"><label for="truck">Truck Accident</label>
                                            </div>
                                            <div class="input-wrap">
                                                <input type="checkbox" id="medical" name="medical" value="Medical Malpractice" class="checkbox"><label for="medical">Medical Malpractice</label>
                                            </div>
                                            <div class="input-wrap">
                                                <input type="checkbox" id="work" name="work" value="Work Related Injury" class="checkbox"><label for="work">Work Related Injury</label>
                                            </div>
                                            <div class="input-wrap">
                                                <input type="checkbox" id="slip" name="slip" value="Slip and Fall" class="checkbox"><label for="slip">Slip and Fall</label>
                                            </div>
                                            <div class="input-wrap">
                                                <input type="checkbox" id="prod_lia" name="prod_lia" value="Product Liability/Defect" class="checkbox"><label for="prod_lia">Product Liability/Defect</label>
                                            </div>
                                        </div>
                                        <div class="input-wrap">
                                            <select name="year" id="year" class="select_field">
                                                <option value="">Year of Injury:</option>
                                                <option value="2017">2017</option>
                                                <option value="2016">2016</option>
                                                <option value="2015">2015</option>
                                                <option value="2014">2014</option>
                                            </select>
                                        </div>
                                        <div class="input-wrap">
                                            <input type="button" name="next" value="Next" id="btn_form2" class="btn_form">
                                        </div>
                                    </div>
                                </div>

                                <div class="form" id="step3">
                                    <div class="form_heading">
                                        <h4>About you</h4>
                                    </div>
                                    <div class="fields">
                                        <div class="input-wrap">
                                            <p>Tell us about your accident for a free, confidential review by an experienced attorney.</p>
                                        </div>

                                        <div class="input-wrap">
                                            <div class="half_field halfSizeFieldLeft"><input type="text" placeholder="First Name" name="fname" id="fname" class="input_field"></div>
                                            <div class="half_field2 halfSizeFieldRight"><input type="text" placeholder="Last Name" name="lname" id="lname" class="input_field"></div>
                                        </div>
                                        <div class="input-wrap">
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
                                            <div class="half_field2 halfSizeFieldLeft"><input type="text" placeholder="Zip Code" name="zipcode" id="zipcode" class="input_field"></div>
                                            <div class="half_field2 halfSizeFieldRight"><input type="text" placeholder="Phone Number" name="phone" id="phone" class="input_field"></div>
                                        </div>
                                        <div class="input-wrap">
                                            <div class="half_field"><input type="text" placeholder="Email" name="email" id="email" class="input_field"></div>

                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="input-wrap">
                                            <p>Briefly describe any other details (important):</p>
                                            <input type="text" placeholder="Description..." name="description" id="description" class="input_field2">
                                        </div>
                                        <div class="input-wrap">
                                            <p class="smallPrint">By submitting your request, you grant permission for up to three of our premier partners to contact you using the phone number or email address that you have provided so we may assist you with your request for a free case evaluation. You agree that the matched partner may use an automatic telephone dialing system even if the number you provided is a wireless phone number. You understand that consent to being contacted is not a condition of purchase or acceptance of services of any kind.</p>

                                            <input type="button" name="next" value="Submit" id="btn_form3" class="btn_form">
                                        </div>
                                    </div>

                                </div>


                                <!-- <div class="row min-space-bottom">
                                   <h6 class="yellowText">See if you qualify. Only takes 30 seconds!</h6>
                                </div>
                                <div class="row">
                                    <div class="twelfth">
                                        <div class="input-wrap">
                                            <input type="text" name="" placeholder="Name">
                                        </div>
                                        <div class="input-wrap">
                                            <input type="text" name="" placeholder="Phone">
                                        </div>
                                        <div class="input-wrap">
                                            <input type="text" name="" placeholder="Email">
                                        </div>
                                        <div class="input-wrap">
                                            <input type="submit" value="Have an Attorney Call Me">
                                        </div>

                                    </div>
                                </div>
                                <div class="clear"></div> -->
                            </form>


                        </div>
                    </div>
                </div>

                <!-- <div class="one-half padding2em mobile-full-width flexBottom">
                    <div class="flexContent">
                        <div class="caption float-right">
                            <strong>WARNING:</strong> If you or a loved one have been injured in an accident… STOP! Saying the wrong thing to the opposing party or the insurance company can absolutely DESTROY your case and reduce or even eliminate your settlement
                            amount.
                        </div>
                    </div>
                </div> -->
            </div>
        </article>
    </section>

<!---->
<!--    <!-- Start features -->-->
<!--    <div class="heading space-bottom alignCenter">-->
<!--        <div class="wrapper">-->
<!--            <h3>What to expect when dealing with <br> insurance companies on your own:-->
<!--                <img src="/assets/img/white-arrow.svg">-->
<!--            </h3>-->
<!--        </div>-->
<!--    </div>-->
<!---->
<!--    <section class="section-2 space-bottom">-->
<!--        <article class="full">-->
<!--            <div class="infoBox colored text-center">-->
<!--                <div class="row flex">-->
<!--                    <div class="one-third-min-gutter feature-item mobile-full-width">-->
<!--                        <img class="icon" src="/assets/img/icon1.svg">-->
<!--                        <h4>They never pick <br>up the phone</h4>-->
<!--                        <p>Expect to spend a lot of time trying to reach your adjuster - and having your-->
<!--                            messages & requests ignored most of the time.</p>-->
<!--                    </div>-->
<!--                    <div class="one-third-min-gutter feature-item mobile-full-width">-->
<!--                        <img class="icon" src="/assets/img/icon2.svg">-->
<!--                        <h4>They offer less than <br>what you deserve</h4>-->
<!--                        <p>Insurance companies work eagerly to reduce the pay-out of real claims.</p>-->
<!--                    </div>-->
<!--                    <div class="one-third-min-gutter feature-item mobile-full-width">-->
<!--                        <img class="icon" src="/assets/img/icon3.svg">-->
<!--                        <h4>They will <br> trick you</h4>-->
<!--                        <p>Insurance companies will ask questions worded in such a way that they trap or trick-->
<!--                            you into responses that hurt your case.</p>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </article>-->
<!--    </section>-->
<!--    <!-- End features -->-->
<!---->
<!--    <!-- Start features -->-->
<!--    <div class="heading space-bottom alignCenter">-->
<!--        <div class="wrapper">-->
<!--            <h3>What we can do for you:-->
<!--                <img src="/assets/img/white-arrow.svg">-->
<!--            </h3>-->
<!--        </div>-->
<!--    </div>-->
<!---->
<!--    <section class="section-2 space-bottom">-->
<!--        <article class="full">-->
<!--            <div class="infoBox white text-center">-->
<!--                <div class="row flex">-->
<!--                    <div class="one-third-min-gutter feature-item mobile-full-width">-->
<!--                        <img class="icon" src="/assets/img/icon4.svg">-->
<!--                        <h4>Stop wasting <br>your time</h4>-->
<!--                        <p>We’ve helped thousand of injured victims get their life back on track. With our-->
<!--                            experience, we can protect your rights.</p>-->
<!--                    </div>-->
<!--                    <div class="one-third-min-gutter feature-item mobile-full-width">-->
<!--                        <img class="icon" src="/assets/img/icon5.svg">-->
<!--                        <h4>Get what <br>you deserve</h4>-->
<!--                        <p>With our 97% success rate, we can help you get your car fixed, get you medical-->
<!--                            treatment, and we’ll fight for the money that you missed out on work.</p>-->
<!--                    </div>-->
<!--                    <div class="one-third-min-gutter feature-item mobile-full-width">-->
<!--                        <img class="icon" src="/assets/img/icon6.svg">-->
<!--                        <h4>Get a free <br>rental car</h4>-->
<!--                        <p>You may be qualify for a rental car free of charge while you car is being repaired.-->
<!--                        </p>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </article>-->
<!--    </section>-->
    <!-- End features -->

    <!-- Start sponsor -->
    <!--
                <section class="section-3">
                    <article class="full">
                        <div class="sponsor normal-padding">
                            <div class="row">
                               <div class="five-sixths box-center text-center mobile-full-width">
                                    <div class="row">
                                       <div class="one-sixth mobile-one-third">
                                           <img class="seal" src="./assets/img/sponsor.png">
                                       </div>
                                       <div class="one-sixth mobile-one-third">
                                           <img class="seal" src="./assets/img/sponsor.png">
                                       </div>
                                       <div class="one-sixth mobile-one-third">
                                           <img class="seal" src="./assets/img/sponsor.png">
                                       </div>
                                       <div class="one-sixth mobile-one-third">
                                           <img class="seal" src="./assets/img/sponsor.png">
                                       </div>
                                       <div class="one-sixth mobile-one-third">
                                           <img class="seal" src="./assets/img/sponsor.png">
                                       </div>
                                       <div class="one-sixth mobile-one-third">
                                           <img class="seal" src="./assets/img/sponsor.png">
                                       </div>
                                    </div>
                               </div>
                           </div>
                           <div class="clear-responsive"></div>
                       </div>
                    </article>
                </section>
                -->
    <!-- End sponsor -->
    <!-- Start testimonial -->
    <section class="section-5 space-bottom">
        <article class="full">
            <div class="testimonial">
                <div class="row testimonial-wrap">
                    <div class="one-third mobile-full-width">
                        <div class="flexContent padding3em">
                            <h4>Personal Injury Settlement</h4>
                            <p>Personal injury cases are legal disputes that arise when a person, who’s not at fault, suffers harm from an accident or injury. A personal injury case can be resolved through an informal settlement, filing before any lawsuit, or civil court, where there is a court judgement to legally find others at fault.</p>
                            <p>Any potential personal injury case requires a detailed understanding of the facts, the processes, and the law. If an accident has impacted your life, you want to seek legal council to see if you should pursue a lawsuit.</p>
                        </div>
                    </div>
                    <div class="one-third mobile-full-width">
                        <div class="testimonial-item">
                            <div class="text-center">
                                <img src="./assets/img/testimonial-1.png">
                            </div>
                            <p>The insurance company offered me $10,000 to settle my case, I didn't feel that was enough. My lawyer was able to get me $1.5 millon for my accident</p>
                            <h6>Joseph M.</h6>
                        </div>
                    </div>
                    <div class="one-third mobile-full-width">
                        <div class="testimonial-item">
                            <div class="text-center">
                                <img src="./assets/img/testimonial-2.png">
                            </div>
                            <p>Me and my family want to thank you for all of the work you did on our case. I appreciate the way you took the time to explain the process to me and to espond to all of my questions. There was not a day that I could not get a hold of you. We are very pleased with the result. I plan on recommending your firm to everyone!</p>
                            <h6>Mary S.</h6>
                        </div>
                    </div>
                </div>
            </div>
        </article>
    </section>
    <!-- End testimonial -->


    <!-- Start Pre-footer -->
    <section class="section-6">
        <article class="full">
            <div class="pre-fotter">
                <div class="row content-center">
                    <div class="whole border-left mobile-full-width">
                        <div class="box-default">

                            <div class="row">
                                <div class="one-third mobile-full-width padding3em">
                                    <div class="flexContent">
                                        <h3>Find out if you are eligible for a large settlement</h3>
                                    </div>
                                </div>
                                <div class="one-third mobile-full-width padding3em mobileAddBorderTop">
                                    <ul>
                                        <li><span>1</span>97% Success Rate</li>
                                        <li><span>2</span>Million Recovered</li>
                                        <li><span>3</span>No Fee Unless We Win</li>
                                    </ul>
                                </div>
                                <div class="one-third mobile-full-width padding3em alignCenter info mobileAddBorderTop">
                                    <div class="flexContent">
                                        <img src="./assets/img/telf.png">
                                        <p><strong>DON'T LET THE INSURANCE <br>COMPANIES INTIMIDATE YOU</strong></p>
                                        <h2><a href="tel:855346-7575">(855) 346-7575</a></h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="one-third mobile-full-width mobile-full-width twitter paddingLeft3em mobilePaddingLeft3emCancel">
                        <div class="row title-twitter content-center">
                            <div class="one-half">
                                <h4>Lastet Tweets</h4>
                            </div>
                            <div class="one-half">
                                <a href="" class="button button-follow">Follow Us ></a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="twelve tweets">
                                <div class="content-center">
                                    <div class="one-sixth"><img src="./assets/img/twitter-tweets.png"></div>
                                    <div class="five-sixths"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam et scelerisque velit. Mauris feugiat purus nec velit sollicitudin massa nunc.</p></div>
                                </div>
                                 <div class="content-center">
                                    <div class="one-sixth"><img src="./assets/img/twitter-tweets.png"></div>
                                    <div class="five-sixths"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam et scelerisque velit. Mauris feugiat purus nec velit sollicitudin massa nunc.</p></div>
                                </div>
                                 <div class="content-center">
                                    <div class="one-sixth"><img src="./assets/img/twitter-tweets.png"></div>
                                    <div class="five-sixths"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam et scelerisque velit. Mauris feugiat purus nec velit sollicitudin massa nunc.</p></div>
                                </div>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
        </article>
    </section>
    <!-- End Pre-footer -->
    </div>
<!--    <section class="section-5 space-bottom">-->
<!--        <article class="full">-->
<!--            <div class="infoBox white text-center">-->
<!--                <div class="row flex">-->
<!--                    <div class="one-third-min-gutter mobile-full-width">-->
<!--                        <div class="map">-->
<!--                            <iframe src="https://www.google.com/maps/d/embed?mid=1IBTfU6Nv4dIAOke1YUnhIVadWOdzs20"-->
<!--                                    width="100%" id="googleMap"></iframe>-->
<!--                            <div class="text-map"><strong>Serving Illinois and Tennessee in:</strong> Peoria, Chicago,-->
<!--                                Champaign, Springfield, Bloomington, Knoxville, Nashville, Memphis-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="two-thirds-min-gutter mobile-full-width">-->
<!---->
<!--                        <div class="flexContent padding3em alignCenter whiteBG">-->
<!--                            <h3>Don't take our word for it. <br>Success stories from real clients</h3>-->
<!--                        </div>-->
<!---->
<!--                        <div class="testimonial">-->
<!--                            <div class="row testimonial-wrap">-->
<!--                                <div class="one-half mobile-full-width">-->
<!--                                    <div class="testimonial-item">-->
<!--                                        <div class="text-center">-->
<!--                                            <img src="/assets/img/testimonial-1.png"/>-->
<!--                                        </div>-->
<!--                                        <p>The insurance company offered me $10,000 to settle my case, I didn't feel-->
<!--                                            that was enough. My lawyer was able to get me $1.5 million for my-->
<!--                                            accident.</p>-->
<!--                                        <small><strong>S.R.</strong></small>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                                <div class="one-half mobile-full-width">-->
<!--                                    <div class="testimonial-item">-->
<!--                                        <div class="text-center">-->
<!--                                            <img src="/assets/img/testimonial-2.png"/>-->
<!--                                        </div>-->
<!--                                        <p>Me and my family want to thank you for all of the work you did on our case. I-->
<!--                                            appreciate the way you took the time to explain the process to me and to-->
<!--                                            respond to all of my questions. There was not a day that I could not get a-->
<!--                                            hold of you. We are very pleased with the result. I plan on recommending-->
<!--                                            your firm to everyone!</p>-->
<!--                                        <small><strong>M.S.</strong></small>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!---->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </article>-->
<!--    </section>-->



<?php require 'footer.php' ?>