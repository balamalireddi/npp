 <!-- At the bottom of your page but inside of the body tag -->
      <ol class="joyride-list" data-joyride>
         <li data-id="0-Stop" data-text="Next" data-options="tip_animation:fade">
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
        <li data-id="createnotice" data-button="End" data-options="tip_location:top">
          <b>Step #11</b>
          <p>Click here to create online notice.</p>
        </li>
      </ol>

      <script src="../foundation-5.2.1/js/vendor/jquery.js"></script>
      <script src="../foundation-5.2.1/js/foundation.min.js"></script> 
      <!-- script src="foundation-4.3.2/js/foundation/foundation.magellan.js"></script -->
      <!-- script src="foundation-5.2.1/js/foundation/foundation.topbar.js"></script -->
      <!-- script src="foundation-5.2.1/js/foundation/foundation.joyride.js"></script -->
      <!-- script src="foundation-5.2.1/js/vendor/jquery.cookie.js"></script --> <!-- Optional --> 
      <!-- foundation datepicker start -->
      <script src="../js/foundation-datepicker.js"></script>
      <script src="../js/jquery.placeholder.js"></script>
      <link rel="stylesheet" href="./css/foundation-datepicker.css">    
      <link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
      <link href="http://netdna.bootstrapcdn.com/font-awesome/3.0.2/css/font-awesome-ie7.css" rel="stylesheet">
      <!-- foundation datepicker end -->
      

      <script src="js/dpnc-mobile.js"></script> 
      <script>
        $(document).foundation();
        $( document ).ready(function() {
            $('input[type=text], textarea').placeholder();
          });
      </script>