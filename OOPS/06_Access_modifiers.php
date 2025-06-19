<!-- What is Access Modifiers -->
<!-- Access Modifiers in PHP are used to control the visibility of class members -->
<?php

class Teacher
{

    public  function QuestionPaper(){
        echo "Student QuestionPaper";
    }

    private function allMarks(){
        echo "All Marks";
    }

    function marksReview(){
        $this->allMarks();
    }

    protected function Marks(){
          echo "Private marks";
    }
}

class Management extends Teacher{
    function hiddenMarks(){
        $this->Marks();
    }
}

$t1 = new Teacher;
// $t1->QuestionPaper();
// $t1->marksReview();

$m1 = new Management;
$m1->hiddenMarks();
?>