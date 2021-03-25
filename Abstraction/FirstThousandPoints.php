<?php

use App\Achievements\Models\Achievement;
use Mockery\Expectation;

abstract class AchievementType {
        private $className = "Achievement Type";
        public function name() {
            $this->className =  (new ReflectionClass($this))->getShortName();
            return trim(preg_replace('/[A-Z]/',' $0',$this->className));
        }

        public function icon() {
            return str_replace(' ', '-', $this->className);
        }

        abstract public function qualifire($user);

    }

    class FirstThousandPoints extends AchievementType {

        public function qualifire($user) {

        }
    }


    class FirstBestAnswer extends AchievementType {
    
        public function qualifire($user)
        {
            
        }
    }

    // Cannot instantiate abstract class
    // $achievement = new AchievementType();
    $obj = new FirstBestAnswer();
    echo($obj->qualifire('user'));