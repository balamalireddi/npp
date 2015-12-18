<!DOCTYPE html>
    <!--[if IE 9]><html class="lt-ie10" lang="en" > <![endif]-->
    <html class="no-js" lang="en" >
    <head>
	<?php include 'header.php'; ?>
	<title>Digital Privacy Notice - Create NPP for Health Plan - English</title>

    </head>
   
      <body>

      <!-- body content here -->
  <div class="row">
    <div class="row" id="pageTop"></div>
    <div class="large-12 columns">
      <?php include 'topbarnav.php'; ?>


  <form id="mydpnForm" action="nppcreator.php" method="post">

    <div class="row" id="mainMsgRow" style="display:none">
      <div class="small-9 large-centered columns">
        <div data-alert="" class="alert-box radius text-center" id="mainMsgDiv"></div>
        <!-- div data-alert="" class="alert-box alert radius text-center" style="display:none" id="mainMsgAlert"></div -->
      </div>
    </div>

    <div class="row">
      <div class="medium-5 large-5 columns">
          <div class="panel callout radius">
            <div id="1-Stop">
              <label id="label-InstaA"><b>Instruction A:</b>
                <input type="text" id="instA" name="instA" placeholder="Insert the health plan's name" style="font-size:16px;font-weight:bold; height: 3.780rem !important;" tabindex="1" />
              </label>
              <small class="error" id="msg-InstaA" style="display:none">Insert the health plan's name</small>
            </div>
          </div>  
      </div>
      <div class="medium-7 large-7 columns">
          <div class="panel callout radius">
            <div id="2-Stop">
              <label><b>Instruction B:</b>
                <textarea id="instB" name="instB" placeholder="Insert the covered entity's address, web site and privacy official's phone, email address, and other contact information." rows="2"  tabindex="2"></textarea> 
              </label>
            </div>  
          </div>  
      </div>
    </div>

  <!-- Intro -->
  <div class="row collapse panel radius">
    <div class="medium-6 large-4 columns">
      <h4>Your Information</h4>
      <h4>Your Rights</h4>
      <h4>Your Responsibilities</h4>
    </div>
    <div class="medium-6 large-8 columns">
        <p>This notice describes how medical information about you may be used and disclosed and how you can get access to this information.<br><b> Please review it carefully.</b></p>
    </div>
  </div>

  <div class="row collapse">
    <div class="medium-6 large-9 columns">
      <p></p>
    </div>
  </div>   

  <!-- Your Rights -->
  <a name="your-rights"></a> 
  <span class="alert label radius" data-magellan-destination="your-rights" style="background:#ef5121"><h3>Your Rights</h3></span>

  <section class="panel callout radius">

    <div class="row collapse">
      <div class="medium-12 large-12 columns">
      <p><b>When it comes to your health information, you have certain rights.</b> This section explains your rights and some of our responsibilities to help you.</p>
      </div>
      <hr> 
    </div>

    <div class="row">
        <div class="medium-6 large-4 columns"><b>Get a copy of your health and claims records</b></div>
        <div class="medium-6 large-8 columns">
          <ul class="disc">
            <li>You can ask to see or get a copy of your health and claims records and other health information we have about you. Ask us how to do this.</li>
            <li>We will provide a copy or a summary of your health and claims records, usually within 30 days of your request. We may charge a reasonable, cost-based fee.</li>
          </ul>  
        </div>
        <hr>
    </div>

    <div class="row">
        <div class="medium-6 large-4 columns"><b>Ask us to correct health and claims records</b></div>
        <div class="medium-6 large-8 columns">
          <ul class="disc">
            <li>You can ask us to correct your health and calims records if you think they are incorrect or incomplete. Ask us how to do this.</li>
            <li>We may say "no" to your request, but we’ll tell you why in writing within 60 days.</li>
          </ul>  
        </div>
        <hr>
    </div>

    <div class="row">
        <div class="medium-6 large-4 columns"><b>Request confidential communications</b></div>
        <div class="medium-6 large-8 columns">
          <ul class="disc">
            <li>You can ask us to contact you in a specific way (for example, home or office phone) or to send mail to a different address.</li>
            <li>We will consider all reasonable requests, and must say "yes" if you tell us you would be in danger if we do not.</li>
          </ul>  
        </div>
        <hr>
    </div>

    <div class="row">
        <div class="medium-6 large-4 columns"><b>Ask us to limit what we use or share</b></div>
        <div class="medium-6 large-8 columns">
          <ul class="disc">
            <li>You can ask us <b>not</b> to use or share certain health information for treatment, payment, or our operations. We are not required to agree to your request, and we may say "no" if it would affect your care.</li>
            <li>If you pay for a service or health care item out-of-pocket in full, you can ask us not to share that information for the purpose of payment or our operations with your health insurer. We will say "yes" unless a law requires us to share that information.</li>
          </ul>  
        </div>
        <hr>
    </div>

    <div class="row">
        <div class="medium-6 large-4 columns"><b>Get a list of those with whom we've shared information</b></div>
        <div class="medium-6 large-8 columns">
          <ul class="disc">
            <li>You can ask for a list (accounting) of the times we've shared your health information for six years prior to the date you ask, who we shared it with, and why.</li>
            <li>We will include all the disclosures except for those about treatment, payment, and health care operations, and certain other disclosures (such as any you asked us to make). We’ll provide one accounting a year for free but will charge a reasonable, cost-based fee if you ask for another one within 12 months.</li>
          </ul>  
        </div>
        <hr>
    </div>

    <div class="row">
        <div class="medium-6 large-4 columns"><b>Get a copy of this privacy notice</b></div>
        <div class="medium-6 large-8 columns">
          <ul class="disc">
            <li>You can ask for a paper copy of this notice at any time, even if you have agreed to receive the notice electronically. We will provide you with a paper copy promptly.</li>
          </ul>  
        </div>
        <hr>
    </div>

    <div class="row">
        <div class="medium-6 large-4 columns"><b>Choose someone to act for you</b></div>
        <div class="medium-6 large-8 columns">
          <ul class="disc">
            <li>If you have given someone medical power of attorney or if someone is your legal guardian, that person can exercise your rights and make choices about your health information.</li>
            <li>We will make sure the person has this authority and can act for you before we take any action.</li>
          </ul>  
        </div>
        <hr>
    </div>

     <div class="row">
        <div class="medium-6 large-4 columns"><b>File a complaint if you feel your rights are violated</b></div>
        <div class="medium-6 large-8 columns">
          <ul class="disc">
            <li>You can complain if you feel we have violated your rights by contacting us using the information.</li>
            <li>You can file a complaint with the U.S. Department of Health and Human Services Office for Civil Rights by sending a letter to 200 Independence Avenue, S.W., Washington, D.C. 20201, calling 1-877-696-6775, or visiting <a href="http://www.hhs.gov/ocr/privacy/hipaa/complaints/"><b>www.hhs.gov/ocr/privacy/hipaa/complaints/</b></a></li>
            <li>We will not retaliate against you for filing a complaint.</li>
          </ul>  
        </div>
    </div>
  </section>

  <!-- Your Choices -->

  <a name="your-choices"></a> 
  <span class="alert label radius" data-magellan-destination="your-choices" style="background:#7cba01"><h3>Your Choices</h3></span>

  <section class="collapse panel radius">
    <div class="row">
      <div class="medium-12 large-12 columns">  
        <p><b>For certain health information, you can tell us your choices about what we share.</b> If you have a clear preference for how we share your information in the situations described below, talk to us. Tell us what you want us to do, and we will follow your instructions.</p>
      </div>
       <hr> 
    </div>

    <div class="row">
      <div class="medium-6 large-4 columns"><b>In these cases, you have both the right and choice to tell us to:</b></div>
      <div class="medium-6 large-8 columns">
        <ul class="disc">
          <li>Share information with your family, close friends, or others involved in your care</li>
          <li>Share information in a disaster relief situation</li>
          <li>Contact you for fundraising efforts</li>
        </ul>
        <p><i>If you are not able to tell us your preference, for example if you are unconscious, we may go ahead and share your information if we believe it is in your best interest. We may also share your information when needed to lessen a serious and imminent threat to health or safety.</i></p>  
      </div>
      <hr>
   </div>

    <div class="row">
        <div class="medium-6 large-4 columns"><b>In these cases we never share your information unless you give us written permission:</b></div>
        <div class="medium-6 large-8 columns">
          <ul class="disc">
            <li>Marketing purposes</li>
            <li>Sale of your information</li>
          </ul>  
        </div>
        <hr>
    </div> 

  </section>

  <a name="our-uses"></a>
  <span class="alert label radius" data-magellan-destination="our-uses" style="background:#00a6f0"><h3>Our Uses and Disclosures</h3></span>

  <section class="collapse panel callout radius">

    <div class="row">
      <div class="medium-12 large-12 columns">  
        <p><b>How do we typically use or share your health information?</b><br> We typically use or share your health information in the following ways.</p>
      </div>
       <hr> 
    </div>

    <div class="row">
      <div class="medium-2 large-2 columns"><b>Help manage the health care treatment you receive</b></div>
      <div class="medium-5 large-5 columns">
        <ul class="disc">
          <li>We can use your health information and share it with other professionals who are treating you.</li>
        </ul>  
      </div>
      <div class="medium-5 large-5 columns"><p><i><b>Example:</b>A doctor sends us information about your diagnosis and treatment plan so we can arrange additional services.</i></p></div>
      <hr>
    </div>

     <div class="row">
      <div class="medium-2 large-2 columns"><b>Run our organization</b></div>
      <div class="medium-5 large-5 columns">
        <ul class="disc">
          <li>We can use and disclose your information to run our orgnigation and contact you when necessary.</li>
          <li><b>We are not allowed to use genetic information to decide whether we will give you coverage and the price of that coverage.</b> This does not apply to long term care plans.</li>
        </ul>  
      </div>
      <div class="medium-5 large-5 columns"><p><i><b>Example:</b> We use health information about you to develope better services for you</i></p></div>
      <hr>
    </div>

     <div class="row">
      <div class="medium-2 large-2 columns"><b>Pay for your health services</b></div>
      <div class="medium-5 large-5 columns">
        <ul class="disc">
          <li>We can use and disclose your health information as we pay for your health services.</li>
        </ul>  
      </div>
      <div class="medium-5 large-5 columns"><p><i><b>Example:</b> We share information about you with your dental plan to coordinate payment for your dental work.</i></p></div>
      <hr>
    </div>

     <div class="row">
      <div class="medium-2 large-2 columns"><b>Administer your plan</b></div>
      <div class="medium-5 large-5 columns">
        <ul class="disc">
          <li>We may disclose your health information to your health plan sponsor for plan administration.</li>
        </ul>  
      </div>
      <div class="medium-5 large-5 columns"><p><i><b>Example:</b> Your company contracts with us to provide a health plan, and we provide your company with certain statistics to explain the premiums we charge.</i></p></div>
      <hr>
    </div>

     <div class="row">
      <div class="medium-12 large-12 columns">  
        <p><b>How else can we use or share your health information?</b>
           We are allowed or required to share your information in other ways – usually in ways that contribute to the public good, such as public health and research. We have to meet many conditions in the law before we can share your information for these purposes. For more information see: <a href="http://www.hhs.gov/ocr/privacy/hipaa/understanding/consumers/index.html"><b>www.hhs.gov/ocr/privacy/hipaa/understanding/consumers/index.html</b></a>.
        </p>
      </div>
       <hr> 
    </div>

    <div class="row">
      <div class="medium-6 large-4 columns"><b>Help with public health and safety issues</b></div>
      <div class="medium-6 large-8 columns">
        <ul class="disc">
          <li>We can share health information about you for certain situations such as:
              <ul class="disc">
                <li>Preventing disease</li>
                <li>Helping with product recalls</li>
                <li>Reporting adverse reactions to medications</li>
                <li>Reporting suspected abuse, neglect, or domestic violence</li>
                <li>Preventing or reducing a serious threat to anyone's health or safety</li>
              </ul>
          </li>
        </ul>  
      </div>
      <hr>
    </div>

    <div class="row">
      <div class="medium-6 large-4 columns"><b>Do research</b></div>
      <div class="medium-6 large-8 columns">
        <ul class="disc">
          <li>We can use or share your information for health research.</li>
        </ul>  
      </div>
      <hr>
    </div>

    <div class="row">
      <div class="medium-6 large-4 columns"><b>Comply with the law</b></div>
      <div class="medium-6 large-8 columns">
        <ul class="disc">
          <li>We will share information about you if state or federal laws require it, including with the Department of Health and Human Services if it wants to see that we’re complying with federal privacy law.</li>
        </ul>  
      </div>
      <hr>
  </div>

  <div class="row">
      <div class="medium-6 large-4 columns"><b>Respond to organ and tissue donation requests and work with a medical examiner or funeral director</b></div>
      <div class="medium-6 large-8 columns">
        <ul class="disc">
          <li>We can share health information about you with organ procurement organizations.</li>
          <li>We can share health information with a coroner, medical examiner, or funeral director when an individual dies.</li>
        </ul>  
      </div>
      <hr>
  </div>

  <div class="row">
      <div class="medium-6 large-4 columns"><b>Address workers' compensation, law enforcement, and other government requests</b></div>
      <div class="medium-6 large-8 columns">
        <ul class="disc">
            <li>We can use or share health information about you:
                <ul class="disc">
                  <li>For workers' compensation claims</li>
                  <li>For law enforcement purposes or with a law enforcement official</li>
                  <li>With health oversight agencies for activities authorized by law</li>
                  <li>For special government functions such as military, national security, and presidential protective services</li>
                </ul>
            </li>
        </ul>      
      </div>
      <hr>
  </div>

  <div class="row">
      <div class="medium-6 large-4 columns"><b>Respond to lawsuits and legal actions</b></div>
      <div class="medium-6 large-8 columns">
        <ul class="disc">
          <li>We can share health information about you in response to a court or administrative order, or in response to a subpoena.</li>
        </ul>  
      </div>
      <hr>
  </div>

  <div class="row">
      <div class="medium-12 large-12 columns">
        <div id="3-Stop">
          <textarea id="instC" name="instC" placeholder="Instruction C: Insert any special nots that apply to your entity's practices such as 'we do not create or manage a hospital directory' or 'we do not create or maintain psychotherapy notes at this practice.'" rows="3" tabindex="3" ></textarea>
        </div>  
      </div>
      <hr>
  </div>

  <div class="row">
      <div class="medium-12 large-12 columns">
        <div id="4-Stop">
          <textarea id="instD" name="instD" placeholder="Instruction D: The Privacy Rule requires you to describe any state or other laws that require greater limits on disclosures. For example, 'we will never share any substance abuse treatment records without your written permission.' Insert this type of information here. If no laws with greater limits apply to your entity, no information needs to be added." rows="3"  tabindex="4" ></textarea>
        </div>  
      </div>
      <hr>
  </div>

    <div class="row">
      <div class="medium-12 large-12 columns">
        <div id="5-Stop">
          <textarea id="instE" name="instE" placeholder="Instruction E: If your entity provides patients with access to their health information via the Blue Button Protocol, you may want to insert a reference to it here." rows="3" tabindex="5" ></textarea>
        </div>  
      </div>
      <hr>
  </div>

  </section>

  <!-- Our Responsibilities -->

  <a name="our-resp"></a>
  <span class="alert label radius" data-magellan-destination="our-resp" style="background:#ffb901"><h3>Our Responsibilities</h3></span>

  <section class="collapse panel radius">

    <div class="row">
      <div class="medium-12 large-12 columns">  
        <ul class="disc">
          <li>We are required by law to maintain the privacy and security of your protected health information.</li>
          <li>We will let you know promptly if a breach occurs that may have compromised the privacy or security of your information.</li>
          <li> We must follow the duties and privacy practices described in this notice and give you a copy of it.</li>
          <li>We will not use or share your information other than as described here unless you tell us we can in writing. If you tell us we can, you may change your mind at any time. Let us know in writing if you change your mind.</li>
        </ul>
        <p>For more information see: <a href="http://www.hhs.gov/ocr/privacy/hipaa/understanding/consumers/noticepp.html"><b>www.hhs.gov/ocr/privacy/hipaa/understanding/consumers/noticepp.html.</b></a></p>
            <p><b>Changes to the Terms of this Notice</b><br> We can change the terms of this notice, and the changes will apply to all information we have about you. The new notice will be available upon request, in our office, and on our web site.
        </p>
      </div>
       <hr> 
    </div>
    <div class="row" id="6-Stop">
      <div class="large-6 columns left">
          <input type="text" id="instF" name="instF" placeholder="Instruction F: Insert Effective Date of Notice here."  tabindex="6"/>
      </div>  
    </div>   
  </section>

  <section class="panel callout radius">
    <p><b>This Notice of Privacy Practices applies to the following organizations.</b></p>
    <div id="7-Stop">
      <textarea id="instG" name="instG" placeholder="Instruction G: If your entity is part of an OHCA(organized health care arrangement) that has agreed to a joint notice, use this space to inform your patients of how you share information within the ohca (such as for treatment, payment, and operations related to the OHCA). Also, describe the other entities covered by this notice and their service locations. For example, 'This notice applies to Grace Community Hospitals and Emergency Services Incorporated which operate the emrgency services within all Grace hospitals in the greater Dayton area." rows="5" tabindex="7" ></textarea>
    </div>   
  </section>

  <section class="panel radius">
    <div id="8-Stop">
      <textarea type="text" id="instH" name="instH" placeholder="Instruction H: Insert name or title of the privacy official (or other privacy contact) and his/her email address and phone number." tabindex="8"></textarea>
    </div>  
  </section>

  <section class="panel callout radius">
    <div class="row">
      <div class="large-10 columns left">
        <div id="9-Stop">
          <label>Enter Filename <i>(The file is saved as an HTML file. So you don't need to add a extension in the name)</i>
          </label>
        </div>  
      </div>
    </div>
        <div class="row">
      <div class="large-6 columns left">
          <input type="text" name="dpnFilename" id="dpnFilename" placeholder="Enter Filename" tabindex="9">
        </div>  
      </div>
      <div class="large-6 columns"> 
      </div>
    </div>
  </section>
<div ><br><br><br><br><br> </div>
  <section>
    <div class="row">    
        <div class="large-6 medium-6 small-6 columns"><!-- a href="javascript:search();" tabindex="10" id="downloadify" class="right ieCreateButton" alt="Create Notice" title="Create Notice" onkeypress="return runKeyPressCreateNotice1(event);">
            You must have Flash 10 installed to download this file.
            </a -->
            <a href="#" tabindex="10" id="downloadify" class="right ieCreateButton" alt="Create Notice" title="Create Notice">
            You must have Flash 10 installed to download this file.
            </a>
        </div>
        <div class="large-6 medium-6 small-6 columns">
          <!-- input type="reset" class="button radius" id="resetButton" /-->
          <!-- a href="javascript:search();" id="resetButton" class="button radius" tabindex="11" onkeypress="return runKeyPressCreateNotice2(event);">Reset</a -->
          <a href="#" id="resetButton" class="button radius" tabindex="11">Reset</a>
        </div>
      </div> 
  </section>

   
</form>

    <!-- End Thumbnails -->
    </div>
  </div>
 
    <!-- Footer -->
      <footer class="row">
        <div class="large-12 columns">
          <hr />
          <div class="row">
            <div class="large-6 columns">
            </div>
          </div>
        </div>
      </footer>
 
    <!-- End Footer -->
 
    </div>
  </div>

        <!-- At the bottom of your page but inside of the body tag -->
      <ol class="joyride-list" data-joyride>
         <li data-text="Next" data-options="tip_animation:fade">
           <p><b>Welcome to the Digital Privacy Notice System!</b></p>
          <p>This a simple-to-use online application for generating privacy notice for your practice. Each fillable field includes instructions for 
          what information to add. The detail instructions are listed in the corresponding sections. If instructions are not needed, the field may be left blank. <br><br>Take step-by-step tour of the system by clicking "Next" button.</p>
        </li>
        <li data-id="1-Stop" data-text="Next" data-options="tip_animation:fade">
          <b>Step #1</b>
          <p>Insert the covered entity's name</p>
        </li>
        <li data-id="2-Stop" data-text="Next" data-options="tip_animation:fade">
          <b>Step #2</b>
          <p>Insert the covered entity's address, web site and privacy official's phone, email address, and other contact information.</p>
        </li>
        <li data-id="3-Stop" data-button="Next" data-options="tip_animation:fade">
          <b>Step #3</b>
          <p>Insert any special nots that apply to your entity's practices such as 'we do not create or manage a hospital directory' or 'we do not create or maintain psychotherapy notes at this practice.</p>
        </li>
        <li data-id="4-Stop" data-button="Next" data-options="tip_animation:fade">
          <b>Stop #4</b>
          <p>The Privacy Rule requires you to describe any state or other laws that require greater limits on disclosures. For example, 'we will never share any substance abuse treatment records without your written permission.' Insert this type of information here. If no laws with greater limits apply to your entity, no information needs to be added.</p>
        </li>
         <li data-id="5-Stop" data-button="Next" data-options="tip_animation:fade">
          <b>Step #5</b>
          <p>If your entity provides patients with access to their health information via the Blue Button Protocol, you may want to insert a reference to it here.</p>
        </li>
         <li data-id="6-Stop" data-button="Next" data-options="tip_animation:fade">
          <b>Step #6</b>
          <p>Insert Effective Date of Notice here.</p>
        </li>
        <li data-id="7-Stop" data-button="Next" data-options="tip_animation:fade">
          <b>Step #7</b>
          <p>If your entity is part of an OHCA(organized health care arrangement) that has agreed to a joint notice, use this space to inform your patients of how you share information within the ohca (such as for treatment, payment, and operations related to the OHCA). Also, describe the other entities covered by this notice and their service locations. For example, 'This notice applies to Grace Community Hospitals and Emergency Services Incorporated which operate the emrgency services within all Grace hospitals in the greater Dayton area.</p>
        </li>
        <li data-id="8-Stop" data-button="Next" data-options="tip_animation:fade">
          <b>Step #8</b>
          <p>Insert name or title of the privacy official (or other privacy contact) and his/her email address and phone number.</p>
        </li>
        <li data-id="9-Stop" data-button="Next" data-options="tip_animation:fade">
          <b>Step #9</b>
          <p>Enter a Filename</p>
        </li>
        <li data-id="10-Stop" data-button="Next" data-options="tip_animation:fade; tip_location:bottom">
          <b>Step #10</b>
          <p>Choose a file format/extension</p>
        </li>
        <li data-id="downloadify" data-button="End" data-options="tip_location:top">
          <b>Step #11</b>
          <p>Click here to save the notice</p>
        </li>
      </ol>

      <script src="foundation-5.2.1/js/vendor/jquery.js"></script>
      <script src="foundation-5.2.1/js/foundation.min.js"></script> 
      <!-- script src="foundation-4.3.2/js/foundation/foundation.magellan.js"></script -->
      <!-- script src="foundation-5.2.1/js/foundation/foundation.topbar.js"></script -->
      <!-- script src="foundation-5.2.1/js/foundation/foundation.joyride.js"></script -->
      <!-- script src="foundation-5.2.1/js/vendor/jquery.cookie.js"></script --> <!-- Optional --> 
      <!-- foundation datepicker start -->
      <script src="js/foundation-datepicker.js"></script>
      <script src="js/jquery.placeholder.js"></script>
      <link rel="stylesheet" href="css/foundation-datepicker.css">    
      <link href="http://netdna.bootstrapcdn.com/font-awesome/3.0.2/css/font-awesome.css" rel="stylesheet">
      <link href="http://netdna.bootstrapcdn.com/font-awesome/3.0.2/css/font-awesome-ie7.css" rel="stylesheet">
      <!-- foundation datepicker end -->
      

      <script src="js/dpnc.js"></script> 
      <script>
        $(document).foundation();
        $( document ).ready(function() {
            //alert( "The DOM is now loaded and can be manipulated." );
            loadTemplate("temp-hp-eng");
            init();
          });
        $('input[type=text], textarea').placeholder();
          
        //$(document).foundation().foundation('joyride', 'start');
      </script>



    </body>
    </html>