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
}