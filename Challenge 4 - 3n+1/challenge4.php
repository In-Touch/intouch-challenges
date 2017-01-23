<?PHP

function algorithm($n){
    do{
        switch($n % 2){
            case 0:
                $n = $n / 2;
                print_r($n . "<br />");
                break;
            default:
                $n = ($n*3)+1;
                print_r($n . "<br />");
                break;
        }
    } while($n != 1);
}

algorithm(57);

?>