<!DOCTYPE html>
<html lang="en">
<head>
 <title>Bootstrap Example</title>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet"
href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 <script
src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 <script
src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
 <div class="container">
 <div class="jumbotron">
 <h1>Naslov</h1>
 </div>
 <div class="modal fade" id="modals" tabindex="-1" role="dialog" aria-labelledby=""
aria-hidden="true">
 <div class="modal-dialog">
 <div class="modal-content"></div>
 </div>
</div>
<div>
<button onclick="GetModal('modals.php?modal_id=new_employee')" class="btn btn-default btn-lg btn-block">Dodaj Zaposlenika</button>
</div>

 <div class="row">
 <table class="table" id="tableEmp"> 
 <thead> 
    <tr> 
        <th>#</th> 
        <th>Id</th>
        <th>Birth date</th> 
        <th>First name</th> 
        <th>Last Name</th> 
        <th>Gender</th>
        <th>Hire date</th>
        <th><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></th>
        <th><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></th>
    </tr> 
    </thead> 
    <tbody> 

    </tbody> 
</table>
 </div>
 </div>
 <script src="js/zaposlenici.js"></script>
 <script src="js/global.js"></script>
</body>
</html>