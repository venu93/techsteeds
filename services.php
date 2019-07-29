<?php 
    include 'header.php';
?> 
          
      <div class="home" id="home">
          <section class="home-section height_100 bg-dark-30 bg_career" id="home">
            <img src="assets/images/carrer_banner.jpg">
          </section>
      </div>

        
        <div class="services_main_top row_padding">
            <div class="container">
                <div class="row">
                   
                    <div class="col-md-12">
                        
                        <div class="col-md-3">
                            <div class="services_content_inn">
                                <img src="assets/images/web-hosting.png">
                                <h5> Web Hosting </h5>
                                
                                <div class="services_content_inn_overlay">
                                    <p> 
                                        Web hosting is a service that allows organizations and individuals to post a website or web page onto the Internet
                                    </p>
                                    <a href="contact.php"> contact us <i class="fa fa-angle-right"></i> </a>
                                </div>
                                
                            </div>
                        </div>
                        
                        <div class="col-md-3">
                            <div class="services_content_inn">
                                <img src="assets/images/domain.png">
                                <h5> Domain </h5>
                                
                                <div class="services_content_inn_overlay">
                                    <p> 
                                        The Domain Access project is a suite of modules that provide tools for running a group of affiliated sites.
                                    </p>
                                    <a href="contact.php"> contact us <i class="fa fa-angle-right"></i> </a>
                                </div>
                                
                            </div>
                        </div>
                        
                        <div class="col-md-3">
                            <div class="services_content_inn">
                                <img src="assets/images/support.png">
                                <h5> Best Support </h5>
                                
                                <div class="services_content_inn_overlay">
                                    <p> 
                                        Techsteeds give Best Support to Client side and Server side.
                                    </p>
                                    <a href="contact.php"> contact us <i class="fa fa-angle-right"></i> </a>
                                </div>
                                
                            </div>
                        </div>
                        
                        <div class="col-md-3">
                            <div class="services_content_inn">
                                <img src="assets/images/mailing.png">
                                <h5> SMS & E-Mail </h5>
                                
                                <div class="services_content_inn_overlay">
                                    <p> 
                                        We are provide E-mail accounts and SMS Services. 
                                    </p>
                                    <a href="contact.php"> contact us <i class="fa fa-angle-right"></i> </a>
                                </div>
                                
                            </div>
                        </div>
                        
                    </div>
                    
                </div>
            </div>
        </div>
        
        
        <div class="services_main row_padding">
            <div class="container">
                <div class="row">
                    
                    <div class="col-md-12">
                        <h2 class="module-title font-alt">Our Services</h2>	
                    </div>
                    
                    <div class="col-md-12">
                        
                        <div class="col-md-4">
                            <div class="services_part_inn">
                                <img src="assets/images/bg.jpg">
                                <h5> Our Profile </h5>
                                <p>
                                    TechSteeds Global Services is a one stop for IT solutions in Software Development, Customer Support Services, HR and IT Staffing in India.
                                </p>
                                <br>
                                <br>
                                <a href="servicer.php"> readmore </a>
                            </div>
                            
                            <div class="services_part_inn">
                                <h5> Salesforce </h5>
                                <p>
                                    TechSteeds helps business of any size with Salesforce.com CRM implementation and deployment in their organizations. 
                                </p>
                                <a href="salesforce.php"> readmore </a>
                            </div>
                            
                        </div>
                        
                        <div class="col-md-4">
                            <div class="services_part_inn">
                                <h5> Web Designing </h5>
                                <p>
                                    Creation of professional web sites that leaves user informed and impressed with your image and your understanding of their needs.
                                </p>
                                <a href="web-designing.php"> readmore </a>
                            </div>
                            
                            <div class="services_part_inn">
                                <h5> Web Development </h5>
                                <p>
                                    Creation of professional web Development that leaves user informed and impressed with your Functionality of their Structure.
                                </p>
                                <a href="web-development.php"> readmore </a>
                            </div>
                            
                            <div class="services_part_inn">
                                <h5> SAP </h5>
                                <p>
                                    SAP is a software which allows organizations to manage business operations, and usually refers to suite of modular applications
                                </p>
                                <a href="web-development.php"> readmore </a>
                            </div>
                        </div>
                        
                        <div class="col-md-4">
                            <div class="services_part_inn">
                                <h5> Digital Marketing </h5>
                                <p>
                                    For a Digital Marketing Campaign to be successful, different channels that reaches your customers has to be employed.
                                </p>
                                <a href="digital-marketing.php"> readmore </a>
                            </div>
                            
                            <div class="services_part_inn">
                                <h5> Mobile Application </h5>
                                <p>
                                    All Mobile (Android, IOS) versions are completely changing the way that people run their lives.
                                </p>
                                <a href="mobile-application.php"> readmore </a>
                            </div>
                        </div>
                        
                    </div>
                    
                </div>
            </div>
        </div>
        
        
        
        <section class="index_form module bg-dark-60" style="padding: 30px 0px; background-image: url(&quot;assets/images/explore-business.jpg&quot;);" data-background="assets/images/explore-business.jpg" alt="call back">
          <div class="container">
            <div class="row">
             
              <div class="col-sm-12">
                <div class="row">
                    
<!--                    <h2 class="font-alt index_form_heading">Request a call back</h2>-->
                    
                  <form class="form rqst-form" id="requestACall" role="form" method="post" action="php/request_call.php">
                      
                    <div class="form-group col-md-3">
                      <input class="form-control input-lg" type="text" name="name" placeholder="Name">
                    </div>
                      
                    <div class="form-group  col-md-3">
                      <select class="form-control input-lg" name="subject">
                        <option value="subject1" disabled="" selected="">Subject</option>
                        <option value="BusinessConsulting">Business consulting</option>
                        <option value="MarketingStrategy">Marketing Strategy</option>
                        <option value="TaxesAdvisory">Taxes Advisory</option>
                        <option value="InvestmentPlanning">Investment Planning</option>
                        <option value="ITManagement">IT Management</option>
                        <option value="DataAnalytics">Data Analytics</option>
                      </select>
                    </div>
                    <div class="form-group  col-md-3">
                      <input class="form-control input-lg" type="text" name="phone" placeholder="Phone Number">
                    </div>
                    <div class="form-group  col-md-3">
                      <button class="btn btn-border-w btn-circle btn-block" id="racSubmit" type="submit"><i class="fa fa-paper-plane-o"></i> Submit</button>
                    </div>
                    <div id="requestFormResponse"></div>
                  </form>
                </div>
              </div>
                
            </div>
          </div>
        </section>
        

        <div class="clients" id="clients">
        <br>
        <section class="module-extra-small">
          <div class="container">
            <div class="row client">
            <h2 class="module-title font-alt">Our Clients</h2>	
              <div class="owl-carousel text-center" data-items="6" data-pagination="false" data-navigation="false">
                <div class="owl-item">
                    
                    
                  <div class="col-sm-12">
                    <div class="client-logo"><img src="assets/images/clients/client-1.png" alt="Client Logo1"/></div>
                  </div>
                </div>
                  
                <div class="owl-item">
                  <div class="col-sm-12">
                    <div class="client-logo"><img src="assets/images/clients/client-2.jpg" alt="Client Logo2"/></div>
                  </div>
                </div>
                  
                <div class="owl-item">
                  <div class="col-sm-12">
                    <div class="client-logo"><img src="assets/images/clients/client-3.png" alt="Client Logo3"/></div>
                  </div>
                </div>
                  
                <div class="owl-item">
                  <div class="col-sm-12">
                    <div class="client-logo"><img src="assets/images/clients/client-4.png" alt="Client Logo4"/></div>
                  </div>
                </div>
                  
                <div class="owl-item">
                  <div class="col-sm-12">
                    <div class="client-logo"><img src="assets/images/clients/client-5.png" alt="Client Logo5"/></div>
                  </div>
                </div>
                  
                <div class="owl-item">
                  <div class="col-sm-12">
                    <div class="client-logo"><img src="assets/images/clients/client-6.png" alt="Client Logo6"/></div>
                  </div>
                </div>
                  
                <div class="owl-item">
                  <div class="col-sm-12">
                    <div class="client-logo"><img src="assets/images/clients/client-7.png" alt="Client Logo7"/></div>
                  </div>
                </div>
                  
                <div class="owl-item">
                  <div class="col-sm-12">
                    <div class="client-logo"><img src="assets/images/clients/client-8.png" alt="Client Logo8"/></div>
                  </div>
                </div>
                  
                <div class="owl-item">
                  <div class="col-sm-12">
                    <div class="client-logo"><img src="assets/images/clients/client-9.png" alt="Client Logo9"/></div>
                  </div>
                </div>
                  
                  <div class="owl-item">
                  <div class="col-sm-12">
                    <div class="client-logo"><img src="assets/images/clients/client-10.png" alt="Client Logo9"/></div>
                  </div>
                </div>
                  
              </div>
            </div>
          </div>
        </section>
        </div>

      
<?php
    include 'footer.php'
?>