<?php 
class Device {
    private $Name;
    private $Infor ;
    const BR = '<br />';

    public function __construct($name, $Infor ) {
        $this->Name = $name;
        $this->Infor  = $Infor ;    
    }
    public function getNameandInfor () {
        return $this->Name . '-' . $this->Infor .self::BR;
    }
}
class DeviceFactory {
    public static function create($name, $Infor ) {
        return new Device($name, $Infor );
    }
}
?>
