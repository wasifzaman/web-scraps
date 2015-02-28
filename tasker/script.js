function show_task() {
    //var form_input = $('.show_task_form').serializeArray();
    //console.log(form_input);

    $('#response').html("Test");

    xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange=function() {
        if (xmlhttp.readyState==4 && xmlhttp.status==200) {
            document.getElementById("response").innerHTML=xmlhttp.responseText;
        }
    }
    xmlhttp.open("GET","show_task.php?task_id=1",true);
    xmlhttp.send();
}