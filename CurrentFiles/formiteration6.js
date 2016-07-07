var allPeople = [];

function regBirth() {
    'use strict';
    var myArray = {};

    var actualDob = myArray.actualBirthDate;
    actualDob = document.getElementById('birthDate').value

    allPeople.push(myArray);

    var inputForm = document.getElementById("inputFrom").reset();
    var tabularForm = document.createDocumentFragment();
    var tablerow = document.createElement('tr'); 

    var dob = document.createElement('td');
    dob.innerHTML = actualDob;
    tablerow.appendChild(dob);

    tabularForm.appendChild(tablerow); 
    document.getElementById("details").appendChild(tabularForm);

    var totalPeople = allPeople.length;

    document.getElementById("count").innerHTML=totalPeople;


$(document).ready(function() {

    $('input[type=password]').keyup(function() { 
        
        // set password variable
        var pswd = $(this).val();
        
        //validate the length
        if ( pswd.length < 8 ) {
            $('#length').removeClass('valid').addClass('invalid');
        } else {
            $('#length').removeClass('invalid').addClass('valid');
        }
        
        //validate letter
        if ( pswd.match(/[A-z]/) ) {
            $('#letter').removeClass('invalid').addClass('valid');
        } else {
            $('#letter').removeClass('valid').addClass('invalid');
        }
        
        //validate uppercase letter
        if ( pswd.match(/[A-Z]/) ) {
            $('#capital').removeClass('invalid').addClass('valid');
        } else {
            $('#capital').removeClass('valid').addClass('invalid');
        }
        
        //validate number
        if ( pswd.match(/\d/) ) {
            $('#number').removeClass('invalid').addClass('valid');
        } else {
            $('#number').removeClass('valid').addClass('invalid');
        }
        
    }).focus(function() {
        $('#pswd_info').show();
    }).blur(function() {
        $('#pswd_info').hide();
    });
    
});


}