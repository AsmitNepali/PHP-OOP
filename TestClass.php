<?php
    class TestClass{
        public static function greeting($param) {
            return new static($param);
        }

        public function showGreeting() {
            var_dump(self::greeting("hello"));
        }

        public function showMessage() {
            return "Good Morning";
        }

        public function checkParam(...$param) {
            var_dump($param[1][0]);
        }
    }

    $obj = new TestClass();
    $obj->checkParam('Heros',['SipderMan', 'Hulk', 'Thor']);