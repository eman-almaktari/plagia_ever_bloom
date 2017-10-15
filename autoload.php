<?PHP

namespace Core;

class Autoload
{
    private $base;

    /*
    @ version: 1.0
    */
    public function __construct()
    {
        $this->base = __DIR__ . '/';
        $this->register();
    }

    /*
    @ version: 1.0
    */
    public function register()
    {
        spl_autoload_register(null, false);
        spl_autoload_register(array($this, 'load'));
    }

    /*
    @ version: 1.0
    */
    public function unregister()
    {
        spl_autoload_unregister(array($this, 'load'));
    }

    /*
    @ version: 1.2
    */
    public function load($class)
    {
        if (empty($class) || is_null($class) || !is_string($class)) {
            $this->invalidArguments();
        }
        $class = strtolower($class);
        $class = str_replace('\\', '/', $class);
        $class = $this->base . $class . '.php';
        if (file_exists($class) && is_file($class)) {
            require($class);
            return true;
        }
        return false;
    }

    /*
    @ version: 1.0
    */
    private function invalidArguments()
    {
        throw new \InvalidArgumentException('Invalid Arguments');
    }

    /*
    @ version: 1.0
    */
    public function destroy()
    {
        $this->base = null;
        $this->unregister();
    }
}
