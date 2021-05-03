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
 <div class="row">
                <div class="col-sm-6">
                    <h1>Studenti</h1>
                </div>
                <div class="col-sm-2 col-sm-offset-4" style="margin-top: 2%;">
                    <a class="btn btn-primary btn-lg" href="index.php" role="button">Početna</a>
                </div>
            </div>
 </div>
 <!-- <div class="modal fade" id="modals" tabindex="-1" role="dialog" aria-labelledby=""
aria-hidden="true">
 <div class="modal-dialog">
 <div class="modal-content"></div>
 </div>
</div>
<div>
<button onclick="GetModal('modals.php?modal_id=new_employee')" class="btn btn-default btn-lg btn-block">Dodaj Zaposlenika</button>
</div> -->

 <div class="row">
 <table class="table" id="tableStudenti"> 
 <thead> 
    <tr> 
        <th>#</th> 
        <th>JMBAG</th>
        <th>Ime</th> 
        <th>Prezime</th> 
        <th>Adresa</th> 
        <th>Poštanski broj</th>
        <th>Godina studija</th>
        <th>Ostvareni ECTS bodovi studija</th>
        <th>Prosjek ocjena</th>
        <th>Naziv sobe</th>
        <!-- <th><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></th> -->
        <!-- <th><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></th> -->
    </tr> 
    </thead> 
    <tbody> 
            <?php
            
            include 'classes.php';

            $StudomRe = new Studom(array(),array());

            $resultStudent =  $StudomRe->GetDataForStudent();
            
            $rbr = 1;


            foreach($resultStudent as $student)
            {
                echo '<tr>
                    <td>'.$rbr++.'</td>
                    <td>'.$student['JMBAG'].'</td>
                    <td>'.$student['Ime'].'</td>
                    <td>'.$student['Prezime'].'</td>
                    <td>'.$student['Adresa'].'</td>
                    <td>'.$student['PostanskiBroj'].'</td>
                    <td>'.$student['GodinaStudija'].'</td>
                    <td>'.$student['OstvareniECTSBodovi'].'</td>
                    <td>'.$student['ProsjekOcjena'].'</td>
                    <td>'.$student['Naziv'].'</td>
                </tr>';
            }

            
            ?>
    </tbody> 
</table>
 </div>
 </div>
 <script src="js/zaposlenici.js"></script>
 <script src="js/global.js"></script>
</body>
</html>