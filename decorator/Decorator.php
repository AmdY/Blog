<?php
namespace Blog;

class Decorator
{
    protected $class;

    public function __construct($class)
    {
        $this->class = $class;
    }

    public function __get($name)
    {
        return $this->class->{$name};
    }

    public function __set($name, $value)
    {
        $this->class->{$name} = $value;
    }

    public function __call($method, $arguments = [])
    {
        return call_user_func_array([$this->class, $method], $arguments);

    }
    public function render()
    {
        return 'decorator ' . $this->class->render();
    }

    public function decoratorOnlyMethod()
    {
        return true;
    }
}
