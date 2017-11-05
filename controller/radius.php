<?php
require_once('../radius.class.php');
$radius=new Radius('192.168.1.99','root');
$radius->SetNasPort('812');
$radius->SetNasIpAddress('192.168.1.2');
if($radius->AccessRequest('kevin','hello'))
{
    echo "exito";
}
else
{
    echo "fallido";
}
echo $radius->GetReadableReceivedAttributes();

/*$comando = "ping 192.168.1.99";
$output = shell_exec($comando);
echo $output;*/
?>