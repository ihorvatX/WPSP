(function()
{
    LoadEmployees();

    $("#tableEmp").on('click',".glyphicon-edit",function() {
        var $row = $(this).closest("tr");    
        console.log($row)
        var $tds = $row.find("td");


        $.each($tds, function() {
            console.log($(this));
        });
        
    });
  


})();


function LoadEmployees()
{
    $.ajax(
        {
            url: "LV4/json.php?json_id=get_all_employees",
            type: "GET",
            success: function (oData)
            {
                var obj = JSON.parse(oData);
                
                obj.forEach((element, index) => {
                    $('#tableEmp > tbody').append(`<tr> 
                    <td>${index}</td> 
                    <td id="emp_no">${element["emp_no"]}</td> 
                    <td>${element["birth_date"]}</td> 
                    <td>${element["first_name"]}</td> 
                    <td>${element["last_name"]}</td> 
                    <td>${element["gender"]}</td> 
                    <td>${element["hire_date"]}</td> 
                    <td><span class="glyphicon glyphicon-edit" aria-hidden="true"></td>
                    <td><span class="glyphicon glyphicon-remove" aria-hidden="true"></td>
                    </tr>`);
                });

            }
        }
    )
}

