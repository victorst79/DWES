<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <form action="#" method="POST" enctype="multipart/form-data">
        <input type="text" name="nombre">
        <input type="text" name="surname">
        <input type="date" name="date">
        <input type="submit">
        <input type="reset">
    </form>
    
    <?php
        class Person{
            private $firstName;
            private $lastName;
            private $dateOfBirth;

            function __construct($firstName = 'John', $lastName = 'Doe', $dateOfBirth = '1959-01-01'){
                $this->firstName = $firstName;
                $this->lastName = $lastName;
                $this->dateOfBirth = $dateOfBirth;
            }

            function getDateOfBirth(){
                return $this->dateOfBirth;
            }
        
            public function setDateOfBirth($date){
                $this->dateOfBirth = $date;
            }

            public function fullName(){
                return "{$this->firstName} {$this->lastName}";
            }

            public function age(){
                $today = date('Y-m-d');
                $diff = strtotime($today) - strtotime($this->dateOfBirth);
                $years = floor($diff / (365*60*60*24));
                return $years;
            }
        }
    ?>
</body>
</html>