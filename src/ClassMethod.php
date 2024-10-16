<?php

namespace Clean\PhpAtlas;

class ClassMethod {
    private object $method;
    private string $classMethod;
    private static $metadata;

    public function __construct($classMethod) {
        $this->classMethod = $classMethod;
				if(str_contains($classMethod, '::')){
	      	$this->method = new \ReflectionMethod($classMethod);
				} else if(\function_exists($classMethod)) {
					$this->method = new \stdClass;
					$this->method->name = $classMethod;
					$this->method->class = 'function';
				} else {
					$this->method = new \stdClass;
					$this->method->name = 'ERROR';
					$this->method->class = 'ERROR';
				}
        self::$metadata = require(__DIR__.'/data.php');
    }

    public function getMethodShortDescription() {
        if(isset(self::$metadata[$this->classMethod])) {
            return self::$metadata[$this->classMethod];
        }
        return '';
    }

    public function getMethodPHPDocLink($lng='en') {
				$mname = str_replace(['__','_'], ['','-'], $this->method->name);
        return strtolower(sprintf('https://www.php.net/manual/%s/%s.%s.php', $lng, $this->method->class, $mname));
    }

		private function getPHPMethodClass(){
				return $this->method->class ?? 'function';
		}
		private function getPHPMethodName(){
				return str_replace(['__','_'], ['','-'], $this->method->name);
		}
}
