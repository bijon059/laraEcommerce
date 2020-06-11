$(function() {
  // Initialize form validation on the registration form.
  // It has the name attribute "registration"
  $("#form").validate({
    // Specify validation rules
    rules: {
      // The key name on the left side is the name attribute
      // of an input field. Validation rules are defined
      // on the right side
      title: {required:true, rangelength: [3, 100]},
      price: {required:true, number: true, rangelength: [2, 7]},
      quantity: {required:true, number: true, rangelength: [1, 5]},
      "product_image[]": {
            "required": true,
            "extension": "jpg|jpeg|png|ico|bmp",
        }
    },
    // Specify validation error messages
    messages: {
      title: {
            required: "Please Enter Title.",
            rangelength: "Title Should Be More Than 3 words."
        },
      price: {
            required: "Please Enter price.",
            number: "Price Should Be Numeric."
        },
      quantity: {
            required: "Please Enter Number Of Quantity.",
            number: "Quantity Should Be Numeric."
        },
      "product_image[]": {
            "required": "Please upload file.",

            "extension": "Please upload file in these format only (jpg, jpeg, png, ico, bmp).",
        }
    },
    // Make sure the form is submitted to the destination defined
    // in the "action" attribute of the form when valid
    submitHandler: function(form) {
      form.submit();
    }
  });
});

$(document).ready(function() {
    var max_fields      = 10; //maximum input boxes allowed
    var wrapper       = $("#dinamic"); //Fields wrapper
    var add_button      = $("#add"); //Add button ID

    var x = 1; //initlal text box count
    $('#add').click(function(e){
   //on add input button click
      e.preventDefault();
      if(x < max_fields){
        //max input box allowed
        var html = ''
        html += '<div class="row" id="rem'+x+'" style="margin-top:10px;">'
        html += '<div class="col-md-6"  >'
        html += '<input type="file" class="form-control"  name="product_image[]" >'
        html += '</div>'
        html += '<div class="col-md-3">'
        html += '<a href="#" class="remove_field fa fa-minus-square" style="color:red; margin-top:10px;"> Remove</a>'
        html += '</div></div>'
        x++; //text box increment
      //   $(wrapper).append('<div id="rem"> <div class="col-md-9" ><input type="file" class="form-control"  name="product_image[]" > <div class="col-md-3"><a href="#" class="remove_field pull-right">X</a></div></div> </div>'); //add input box
      $('#dinamic').append(html);
      }
    });

    $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
      e.preventDefault();
      var remove_id = $(this).parent().parent().attr('id');
      $('#'+remove_id).remove();
      x--;
    })
  });
