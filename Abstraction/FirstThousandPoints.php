<?php

use App\Achievements\Models\Achievement;

class AchievementType {
        private $className = "Achievement Type";
        public function name() {
            $this->className =  (new ReflectionClass($this))->getShortName();
            return trim(preg_replace('/[A-Z]/',' $0',$this->className));
        }

        public function icon() {
            return str_replace(' ', '-', $this->className);
           
        }

    }

    class FirstThousandPoints {
        public function name() {

        }

        public function icon() {

        }

        public function qualifire() {

        }
    }


    class FirstBestAnswer {
        public function name() {
            return "First Best Answer";
        }

        public function icon() {
            return "php-oop.png";
        }

        public function qualifire() {

        }
    }

    $achievement = new AchievementType();
    // $achievement->name();
    echo($achievement->icon());