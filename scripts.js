
//add data about employee
function addRecord() {
    //get data from fields
    var name = $("#name").val();
    var age = $("#age").val();
    var salary = $("#salary").val();
   
    var dataString = 
    'name='+ name + 
    '&age='+ age + 
    '&salary='+ salary;
   
    // AJAX Code To Submit Form.
    $.ajax({
        type: "POST",
        url: "addRecordToDB.php",
        data: dataString,
        cache: false,
        success: function(result){
            $('#table').html('');
             showAllRecords();
        }
    });
   
    return false;
}

//show all records in database 
function showAllRecords() {   
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {          
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("table").innerHTML = this.responseText;
                }            
        };
        xmlhttp.open("GET","showAllRecords.php",true);
        xmlhttp.send();    
}

function deleteThisRecord(id){          
    var dataString =      
    'del_id='+ id;
   
    // AJAX Code To Submit Form.
    $.ajax({
        type: "POST",
        url: "deleteRecord.php",
        data: dataString,
        cache: false,
        success: function(result){
            $('#table').html('');
           showAllRecords();
        }
    });
   
    return false;
}

function fillEditForm(obj) {
    $('#editBlock').css('visibility', 'visible');
    var salary = $(obj).prev().text();
    var age = $(obj).prev().prev().text();
    var name = $(obj).prev().prev().prev().text();
    var id = $(obj).prev().prev().prev().prev().text();
    console.log($(obj).prev().text());
    $('#editId').val(id);
    $('#editName').val(name);
    $('#editAge').val(age);
    $('#editSalary').val(salary);
}

//edit data about employee
function editRecord() {
    //get data from fields
    var id = $("#editId").val();
    var name = $("#editName").val();
    var age = $("#editAge").val();
    var salary = $("#editSalary").val();
   
    var dataString = 
    'name='+ name + 
    '&age='+ age + 
    '&salary='+ salary+
    '&id='+ id;
   
    // AJAX Code To Submit Form.
    $.ajax({
        type: "POST",
        url: "editRecordInDB.php",
        data: dataString,
        cache: false,
        success: function(result){
           $('#table').html('');
            showAllRecords();
        }
    });
   
    return false;
}

//edit data about employee
function findRecordsBySalary() {
    //get data from fields
    var salary = $("#searchSalary").val();   
    var dataString =      
    'salary='+ salary;
   
    // AJAX Code To Submit Form.
    $.ajax({
        type: "POST",
        url: "findRecordsBySalary.php",
        data: dataString,
        cache: false,
        success: function(result){
            $('#table').html('');
            $('#table').html(result);
        }
    });
   
    return false;
}
//check all checkboxes is they are checked 
//and deletes all checked records
function deleteWithCheckBoxes(){
    var collection = $('.delCb');
    collection.each(function() {  
    if($(this).is(":checked")){        
        deleteThisRecord($(this).attr('myid'));       
    }
 });
}