var selected_Row = null;
function onFormSubmit(){
	if (validation()){
		var formData = readFormData();
		if (selected_Row == null)
						 insertNewRecord(formData);
				 else
						 updateRecord(formData);
				 resetForm();
		}
}
function readFormData(){
	// For Radio-Button
	var rd_value = "";
	if(document.getElementById('radio_1').checked){
			rd_value = document.getElementById('radio_1').value;

	}else if(document.getElementById('radio_2').checked){
			rd_value = document.getElementById('radio_2').value;

	}else if(document.getElementById('radio_3').checked){
			rd_value = document.getElementById('radio_3').value;
	}
	// For Checkbox
	var selected_items = [];
	var items = document.querySelectorAll('input[type=checkbox]:checked');
	var it_len = items.length;
	for (var i = 0; i < it_len; i++) {
		selected_items.push(items[i].value);
	}

	var formData = {};
	formData["name"] = document.getElementById('Name').value;
	formData["email"] = document.getElementById('Email').value;
	formData["password"] = document.getElementById('Password').value;
	formData["dob"] = document.getElementById('Dob').value;
	formData["gender"] = rd_value;
	formData["hobby"] = selected_items;

	return formData;
}
function insertNewRecord(data) {
	  var table = document.getElementById("myTable").getElementsByTagName('tbody')[0];
		console.log(table);
		var tab_len = table.length;
		var newRow = table.insertRow(tab_len);
		cell1 = newRow.insertCell(0);
		cell1.innerHTML = data.name;
		cell1 = newRow.insertCell(1);
		cell1.innerHTML = data.email;
		cell2 = newRow.insertCell(2);
		cell2.innerHTML = data.password;
		cell3 = newRow.insertCell(3);
		cell3.innerHTML = data.dob;
		cell4 = newRow.insertCell(4);
		cell4.innerHTML = data.gender;
		cell5 = newRow.insertCell(5);
		cell5.innerHTML = data.hobby;
		cell6 = newRow.insertCell(6);
		cell6.innerHTML = `<a onClick="onEdit(this)">Edit</a>
                    <a onClick="onDelete(this)">Delete</a>`;
}
function resetForm() {
	document.getElementById('Name').value = "";
	document.getElementById('Email').value = "";
	document.getElementById('Password').value = "";
	document.getElementById('Dob').value = "";
	selected_Row = null;
}
function onEdit(td) {
	selected_Row = td.parentElement.parentElement;
	document.getElementById('Name').value = selected_Row.cells[0].innerHTML;
	document.getElementById('Email').value = selected_Row.cells[1].innerHTML;
	document.getElementById('Password').value = selected_Row.cells[2].innerHTML;
	document.getElementById('Dob').value = selected_Row.cells[3].innerHTML;
	rd_value = selected_Row.cells[4].innerHTML;
	selected_items = selected_Row.cells[5].innerHTML;;
}
function updateRecord(formData) {
    selected_Row.cells[0].innerHTML = formData.name;
    selected_Row.cells[1].innerHTML = formData.email;
    selected_Row.cells[2].innerHTML = formData.password;
    selected_Row.cells[3].innerHTML = formData.dob;
		selected_Row.cells[4].innerHTML = formData.gender;
		selected_Row.cells[5].innerHTML = formData.hobby;
		resetForm();
}

function onDelete(td) {
    if (confirm('Want to Delete?')) {
        row = td.parentElement.parentElement;
        document.getElementById("myTable").deleteRow(row.rowIndex);
        resetForm();
    }
}
function validation(val){
				var myuser=document.querySelector(".name").value;
        var mymail=document.querySelector(".email").value;
				var mypass=document.querySelector(".password").value;
        var mydob = document.querySelector(".dob").value;
        var rd_btn = document.getElementsByName('gender');
        var rd_len = rd_btn.length;
        var check = document.getElementsByName('check');
        var ch_len = check.length;
        var hasClicked = false;
        var hasChecked = false;
				// For table
				var usercheck=/^[A-Za-z]{3,30}$/;
				var passcheck=/^(?=.*[0-9])(?=.*[!@#$%^&*])[A-Za-z0-9!@#$%^&*]{3,30}$/;
				var mailcheck=/^[A-Za-z0-9._]{3,30}@[A-Za-z]{3,}[.]{1}[A-Za-z.]{2,6}$/;

				var	isValid = true;
			  if(usercheck.test(myuser)) {
					document.querySelector(".usrerror").innerHTML=" ";
				}
				else{
					document.querySelector(".usrerror").innerHTML="Please enter valid username";
					return isValid = false;
				}
        if(mailcheck.test(mymail)) {
          document.querySelector(".emailerror").innerHTML=" ";
        }
				else{
          document.querySelector(".emailerror").innerHTML="Please enter valid email";
					return isValid = false;
        }
				if(passcheck.test(mypass)) {
					document.querySelector(".pwerror").innerHTML=" ";
				}
				else{
					document.querySelector(".pwerror").innerHTML="Please enter valid password";
					return isValid = false;
				}
				var d = new Date();
				var birthDate = new Date(mydob);
				var age = d.getFullYear() - birthDate.getFullYear();
        if(mydob == "" || age < 18){
					document.querySelector(".doberror").innerHTML="Please enter your date-of-birth";
					return isValid = false;
        }
				else{
					document.querySelector(".doberror").innerHTML=" ";
        }

        for (var i = 0; i < rd_len; i++) {
              if (rd_btn[i].checked) {
                hasClicked = true;
                break;
              }
            }
            if (hasClicked == false) {
              document.querySelector(".rderror").innerHTML="Please choose your gender";
							return isValid = false;
    				}
						else{
    					document.querySelector(".rderror").innerHTML=" ";
            }
            // For CheckBox Validation
            for (var j = 0; j < ch_len; j++) {
              if (check[j].checked) {
                hasChecked = true;
                break;
              }
            }
            if (hasChecked == false) {
              document.querySelector(".checkerror").innerHTML="Please select your hobbies";
              return isValid = false;
            }
						else{
              document.querySelector(".checkerror").innerHTML =" ";
            }
						return isValid ;
			}
