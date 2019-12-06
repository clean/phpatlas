<?php namespace Clean\PhpAtlas;

class ClassMethod {
    private $method;
    private $classMethod;
    private static $metadata;

    public function __construct($classMethod) {
        $this->classMethod = $classMethod;
        $this->method = new \ReflectionMethod($classMethod);
        self::$metadata = require(__DIR__.'/data.php');
    }

    public function getMethodShortDescription() {
        if(isset(self::$metadata[$this->classMethod])) {
            return self::$metadata[$this->classMethod];
        }
        return '';
    }

    public function getMethodPHPDocLink($lng='en') {
        return strtolower(sprintf('https://secure.php.net/manual/%s/%s.%s.php', $lng, $this->method->class, $this->method->name));
    }
}
