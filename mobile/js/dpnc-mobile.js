var template;
var myfile;

  $('#createnotice').click(function(){
    validateForm();
  });


  function changeExtension(ext){
    var fname = $('#dpnFilename').val().split('.')[0];
    $('#dpnFilename').val(fname+'.'+ext);
  };

  function validateForm(){
    //alert($('#instA').val());
    //template = "";
    if (($('#instA').val() == "") || ($('#instA').val() == "Insert the covered entity's name")){
      $('#label-InstaA').addClass('error');
      $('#msg-InstaA').css('display','visible');
      //$('#instA').focus();
    } else {
      $('#mainMsgRow').css('display','visible');
      $('#mainMsgDiv').html("Just a moment, we are generating your notice....");
      $('#mydpnForm').submit();  
      }                
    };

  //preserve line breaks
  function preserveNewLine(val){
    var newVal;
    newVal = val.replace(/\n/g, '<br>');
    return newVal;
  };

  // keyup activities on Instruction-A field
  $('#instA').keyup(function(){
    $('#label-InstaA').removeClass('error');
    $('#msg-InstaA').css('display','none');

    myfile = $('#instA').val();

    $('#dpnFilename').val(myfile);  

     //clean up any alert msgs at the top of the page
    $('#mainMsgRow').css('display','none');
    $('#mainMsgDiv').html();
  });

  $('#resetButton').click(function(){
    //$(this).closest('form').find("input[type=text], textarea").val("");
    //$('#mydpnForm')[0].reset();
    $('#mainMsgRow').css('display','none');
    //$('#instA').focus();
    location.reload(true);
  });
 

  //filename handler
    //special char validation on all textareas
  $('#dpnFilename').keyup(function() {
     myfile = $('#dpnFilename').val();
  });

  //special char validation on all textareas
  $('textarea').keyup(function() {
    validateFormInput(this);
  });

  //special char validation on all textareas
  $('input').keyup(function() {
    validateFormInput(this);
  });

  //start joyride
  $('#guidemeDiv').click(function(){
    $(document).foundation('joyride', 'start');
  });
  
  //Foundation Datepicker
  $('#instF').fdatepicker({
    format: 'mm-dd-yyyy'
  });


  function validateFormInput(ele){
    var charecterReg;
    if ($(ele).is("input")){
      //charecterReg = /[<>\\"'+;~!@{}[\]|$%^&*\s/.,()#:+=]/g;
      charecterReg = /[<>\\"'+;~!@{}[\]|$%^&*/.,()#:+=]/g;
    } else {
      charecterReg = /[<>\\"+;~!{}[\]|$%^&*]/g;
    }
    var $th = $(ele);
    $th.val( $th.val().replace(charecterReg, function(str) {  
      return ''; 
    }));
  }

  