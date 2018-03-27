<?php
include_once"konek.php";
function AcakId($panjang)
    {
        $karakter = "QWERTYUIOPASDFGHJKLZXCVBNM1234567890";
        $string = "";

        for($i=0;$i<$panjang;$i++)
        {
            $pos = rand(0, strlen($karakter)-1);
            $string .= $karakter{$pos};
        }
        return $string;
    }

for($id=2;$id<42;$id++)
{
    $csm = AcakId(8);
    $query = "UPDATE csm SET csm_id = :csm WHERE id=:id";
    $stmt = $kon->prepare($query);
    $stmt->bindParam('csm',$csm);
    $stmt->bindParam('id',$id);
    $stmt->execute();               
}