<?php
$q=$_POST['p'];

if($q=='planet'){
    echo '
    <select name="planet" id="planet">
    <option value="mercury">Mercury</option>
    <option value="venus">Venus</option>
    <option value="earth">Earth</option>
    <option value="mars">Mars</option>
    <option value="jupiter">jupiter</option>
    <option value="saturn">saturn</option>
    <option value="uranus">uranus</option>
    <option value="neptune">neptune</option>
   </select> ';
}
else if($q=='car'){
    echo '
    <select name="car" id="car">
    <option value="mercury">BMW</option>
    <option value="venus">Jaguar</option>
    <option value="earth">Audi</option>
    <option value="mars">shift</option>
    </select>';
}
else if($q=='flower'){
    echo '
    <select name="flower" id="flower">
    <option value="mercury">Lily</option>
    <option value="venus">Sun flower</option>
    <option value="earth">Lotus</option>
    <option value="mars">tulip</option>
    </select>';
}
else if($q=='animal'){
    echo '
    <select name="animal" id="animal">
    <option value="mercury">tiger</option>
    <option value="venus">Cow</option>
    <option value="earth">snake</option>
    <option value="mars">you</option>
    </select>';
}
else{
    echo ' choose the vaild option';
}
?>