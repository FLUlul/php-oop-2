<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>live-coding</title>

    <!--  
      Definire classe Persona:
     *          - ATTRIBUTI (private):
     *              - nome
     *              - cognome
     *              - dataNascita (stringa)
     *          - METODI:
     *              - costruttore che accetta nome e cognome
     *              - setter/getter per ogni variabile
     *              - printFullPerson: che stampa "nome cognome: dataNascita"
     *              - toString: che ritorna "nome cognome: dataNascita"
     * 
     * 
     Definire classe Employee che eredita da Persona:
     *          - ATTRIBUTI (private):
     *              - stipendio
     *              - dataAssunzione
     *          - METODI:
     *              - costruttore che accetta nome, cognome e stipendio
     *              - setter/getter per variabili 
     *              - printFullEmployee: che stampa "nome cognome: stipendio (dataAssunzione)"
     *              - toString: che ritorna "nome cognome: stipendio (dataAssunzione)"
    -->
    <?php
        class Persona {
            private $nome;
            private $cognome;
            private $dataNascita;

            public function __construct($nome, $cognome) {
                $this -> setNome($nome);
                $this -> setCognome($cognome);
            }

            public function setNome($nome) {
                $this -> nome = $nome;
            }
            public function getNome() {
                return $this -> nome;
            }
            public function setCognome($cognome) {
                $this -> cognome = $cognome;
            }
            public function getCognome() {
                return $this -> cognome;
            }
            public function setDataNascita($dataNascita) {
                $this -> dataNascita = $dataNascita;
            }
            public function getDataNascita() {
                return $this -> dataNascita;
            }

            public function printFullPerson() {
                return $this->getNome() . " " . $this->getCognome() . ": " . $this->getDataNascita();
            }
            public function __toString() {
                return $this->getNome() . " " . $this->getCognome() . ": " . $this->getDataNascita();
            }
        }

        class Employee extends Persona {
            private $stipendio;
            private $dataAssunzione;

            public function __construct($nome, $cognome, $stipendio){
                parent::__construct($nome, $cognome);
                $this->setStipendio($stipendio);
            }

            public function setStipendio($stipendio) {
                $this -> stipendio = $stipendio;
            }
            public function getStipendio() {
                return $this -> stipendio;
            }
            public function setDataAssunzione($dataAssunzione) {
                $this -> dataAssunzione = $dataAssunzione;
            }
            public function getDataAssunzione() {
                return $this -> dataAssunzione;
            }

            public function printFullEmployee() {
                return $this->getNome() . " " . $this->getCognome() . ": " . $this->getStipendio() . " || " . $this->getDataAssunzione();
            }
            public function __toString() {
                return $this->getNome() . " " . $this->getCognome() . ": " . $this->getStipendio() . " || " . $this->getDataAssunzione();
            }
        }

        $persona1 = new Persona("Valerio", "Massi");
        $persona1 -> setDataNascita("31/01/1994");
        $emp1 = new Employee("Valerio", "Massi", "1500 euro");
        $emp1 -> setDataAssunzione("01/01/2022");
    ?>
</head>
<body>
    <?php
        echo "<h1>Print Full Person</h1>";
        echo $persona1 -> printFullPerson();
        echo "<h1>Print __toString</h1>";
        echo $persona1;
        echo "<br><br>";
        echo "<h1>Print Full Employee</h1>";
        echo $emp1 -> printFullEmployee();
        echo "<h1>Print __toString</h1>";
        echo $emp1;
    ?>
</body>
</html>