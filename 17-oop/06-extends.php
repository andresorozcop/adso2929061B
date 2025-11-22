
<?php 
    $title       = '06- Extends';
    $description = 'Keyword for a class to inherit properties and methods from another.';

    include 'template/header.php';

    class Operation {
        protected $num1;    
        protected $num2;

        public function __construct($num1, $num2) {
            $this->num1 = $num1;
            $this->num2 = $num2;

        }
    }

    class Addition extends Operation {
        public function showResult() {
            $result = $this->num1 + $this->num2;
            return "<ul>
                        <li>{$this->num1} + {$this->num2} = {$result}</li>
                    </ul>";
        }
    }
    class Substraction extends Operation {
        public function showResult() {
            $result = $this->num1 - $this->num2;
            return "<ul>
                        <li>{$this->num1} - {$this->num2} = {$result}</li>
                    </ul>";
        }
    } 


    $op1 = new Addition(128, 256);
    echo $op1->showResult();

    $op1 = new Substraction(128, 256);
    echo $op1->showResult();




    include 'template/footer.php';