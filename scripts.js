
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
            alert(result);
        }
    });
   
    return false;
}


//show all records in database 
function showResult() {   
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
     var str = 'del_id=' + id;   
    if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {          
                if (this.readyState == 4 && this.status == 200) {
                    alert(this.responseText);
                }            
        };
        xmlhttp.open("GET","deleteRecord.php?"+str,true);
        xmlhttp.send(); 
}

function fillEditForm(){
    var e = $(this);
    alert($(this).parent().parent().find('td').text());
   // e.prev().css({"color": "red"});
}