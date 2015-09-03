    <div class="main" ng-controller="contact_form_controller">

     

                 <div class="two">
                        <div class="register">
                        <div class="lebel01">
                    <input type="button" name="button2" class="btn btn-primary btn-danger right"  value="X" ng-click="$close('no');">
                </div>
                            <h3>Contact Us</h3>
                         
                            <form id="reg-form1" role="form" class="contact_form" method="post">
                                <div>
                                    <!-- <label for="name1">Name</label> -->
                                    <input type="text" id="name1" spellcheck="false" placeholder="Enter your name here..." ng-model="query.name"/>
                                </div>
                                <div>
                                   <!--  <label for="email1">Email</label> -->
                                    <input type="text" id="email1" spellcheck="false" placeholder="Enter your Email Id..(Optional)" ng-model="query.email"/>
                                </div>
                                <div>
                                   <!--  <label for="username1">Username</label> -->
                                    <input type="text" id="username1" spellcheck="false" placeholder="Enter Your Contact number.." ng-model="query.c_number"/>
                                </div>
                                <div>
                                   <!--  <label for="username1">Username</label> -->
                                    <input type="text" id="username1" spellcheck="false" placeholder="Enter Your Shootings date.." ng-model="query.shoot_date" />
                                </div>
                               <div>
                                   <textarea placeholder="Type your query or messages" rows="4" cols="20" class="message_01" ng-model="query.message"></textarea>
                                </div> 
                            


                                <div>
                                    
                                    <input type="submit" value="Submit" id="create-account1" class="button" ng-click="submitQuery()"/>
                                </div>
                                 <span id="msg"></span>
                            </form>
                     
                            <div class="sep">
                                <span class="or">OR</span>
                            </div>
                         <!--    <div class="connect">
                                <div class="fb_icon">
                                    <img src="Images/fbook.jpg" class="img-responsive instagram_icon" />
                                </div>
                                 <div class="inst_icon">
                                    <img src="Images/instagram.png" class="img-responsive instagram_icon" />
                              </div>
                               
                            </div> -->
                        </div>
                    </div>
    </div>  
