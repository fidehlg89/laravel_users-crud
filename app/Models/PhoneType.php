abstract class shipmenttype extends Enum {
    const envio = "ENVIO";
    const ena = "ENA";
}

abstract class Enum {
    static function getKeys(){
        $class = new ReflectionClass(get_called_class());
        return array_keys($class->getConstants());
    }
}