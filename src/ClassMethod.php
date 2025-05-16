<?php

namespace Clean\PhpAtlas;

/**
 * Class ClassMethod
 *
 * This class reflects a class method or function and provides metadata and PHP documentation links.
 *
 * Example:
 * ```
 * $method = new ClassMethod('MyClass::myMethod');
 * echo $method->getMethodShortDescription();
 * echo $method->getMethodPHPDocLink('en');
 * ```
 */
class ClassMethod {
	/**
	 * @var object Reflection or placeholder object for method or function
	 */
	private object $method;

	/**
	 * @var string Name of the class method or function
	 */
	private string $classMethod;

	/**
	 * @var array|null Metadata for methods, loaded from an external file
	 */
	private static ?array $metadata = null;

	/**
	 * ClassMethod constructor.
	 *
	 * @param string $classMethod The class method or function to reflect (e.g., 'MyClass::myMethod').
	 */
	public function __construct(string $classMethod) {
		$this->classMethod = $classMethod;

		// Check if the provided method is a class method or function
		if (str_contains($classMethod, '::')) {
      // Split the class and method name
      [$class, $method] = explode('::', $classMethod);
			$this->method = new \ReflectionMethod($class, $method);
		} elseif (\function_exists($classMethod)) {
			$this->method = new \stdClass();
			$this->method->name = $classMethod;
			$this->method->class = 'function';
		} else {
			$this->method = new \stdClass();
			$this->method->name = 'ERROR';
			$this->method->class = 'ERROR';
		}

		// Load metadata from the external data file
    if (self::$metadata === null) {
      self::$metadata = require(__DIR__ . '/data.php');
    }
	}

	/**
	 * Get the short description of the method from the metadata.
	 *
	 * @return string The short description of the method, or an empty string if not found.
	 */
	public function getMethodShortDescription(): string {
		return self::$metadata[$this->classMethod] ?? '';
	}

	/**
	 * Get the link to the PHP manual for the method or function.
	 *
	 * @param string $lng Language code for the PHP documentation link (default is 'en').
	 * @return string The URL to the PHP manual for the method or function.
	 */
	public function getMethodPHPDocLink(string $lng = 'en'): string {
		$mname = $this->getPHPMethodName();
		$class = $this->getPHPMethodClass();

		return strtolower(sprintf('https://www.php.net/manual/%s/%s.%s.php', $lng, $class, $mname));
	}

	/**
	 * Get the class name of the PHP method or 'function' for standalone functions.
	 *
	 * @return string The class name of the method or 'function'.
	 */
	private function getPHPMethodClass(): string {
		return $this->method->class ?? 'function';
	}

	/**
	 * Get the PHP method or function name, formatted for a URL (removing underscores).
	 *
	 * @return string The method or function name, formatted for URLs.
	 */
	private function getPHPMethodName(): string {
		return str_replace(['__', '_'], ['', '-'], $this->method->name);
	}
}
