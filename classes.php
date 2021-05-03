<?php


class Studom 
{


    private $studenti = array();
    private $sobe = array();

    public function __construct($studenti, $sobe)
    {

        $this->studenti = $studenti;
        $this->sobe = $sobe;
    }
    
    public function GetDataForStudent()
    {
        include 'connection.php';

        $queryStudenti = "SELECT stud.JMBAG,Ime,Prezime,Adresa,PostanskiBroj,GodinaStudija, OstvareniECTSBodovi, ProsjekOcjena, Naziv FROM studenti stud 
        LEFT JOIN studentdodatnipodaci dodstud ON stud.JMBAG=dodstud.JMBAG 
        LEFT JOIN studentpodacistudija podstud on dodstud.JMBAG=podstud.JMBAG 
        LEFT JOIN studentsoba ss on ss.JMBAG= podstud.JMBAG 
        LEFT JOIN sobe on ss.IdSobe  = sobe.Id;";
        $ResultStudenti = $oConnection->query($queryStudenti);
        $rows = array();
        while($oRow = $ResultStudenti->fetch(PDO::FETCH_BOTH)) 
        {
            $rows[] = $oRow;
        }

        return $rows; 
        // echo json_encode($rows);
    }


    public function GetDataForSobe()
    {
        include 'connection.php';

        $queryStudenti = "SELECT Naziv,Opis,Kat, GROUP_CONCAT(Ime, ' ', Prezime separator ', ') as Studenti FROM sobe 
        INNER JOIN studentsoba ss on sobe.Id=ss.IdSobe 
        INNER JOIN studenti stud on ss.JMBAG=stud.JMBAG 
        group by sobe.Id;";

        $ResultStudenti = $oConnection->query($queryStudenti);
        $rows = array();
        while($oRow = $ResultStudenti->fetch(PDO::FETCH_BOTH)) 
        {
            $rows[] = $oRow;
        }

        return $rows; 
    }
}


class Student
{
    private $Ime = "";
    private $Prezime = "";
    private $JMBAG = "";
    private $Adresa = "";
    private $PostanskiBroj = "";
    private $Grad = "";
    private $GodinaStudija ="";
    private $OstvareniECTSbodovi = "";
    private $ProsjekOcjena = "";
    private $Soba = "";


    public function __construct($Ime, $Prezime, $JMBAG, $Adresa, $PostanskiBroj, $Grad, $GodinaStudija, $OstvareniECTSbodovi,$ProsjekOcjena, Soba $Soba)
    {
        $this->Ime = $Ime;
        $this->Prezime = $Prezime;
        $this->JMBAG = $JMBAG;
        $this->Adresa = $Adresa;
        $this->PostanskiBroj = $PostanskiBroj;
        $this->Grad = $Grad;
        $this->GodinaStudija = $GodinaStudija;
        $this->OstvareniECTSbodovi = $OstvareniECTSbodovi;
        $this->ProsjekOcjena = $ProsjekOcjena;
        $this->Soba = $Soba;
    }

}


class Soba
{
    private $Id = "";
    private $Naziv = "";
    private $Opis = "";
    private $Kat = "";
    private $Studenti = array();

    public function __construct($id, $Naziv, $Opis, $Kat, $Studenti)
    {
        $this->Id = $Id;
        $this->Naziv = $Ime;
        $this->Opis = $Opis;
        $this->Kat = $Kat;
        $this->Studenti = $Studenti;
    }


}


?>