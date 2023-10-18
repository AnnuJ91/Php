<?php
    include 'Database_oops.php';
    $obj=new Database_oops();

   // $obj->insert('test1',['NAME'=>'shravanti','EMAIL'=>'shrav@gmail.com','MOBILE'=>'98765433','SALARY'=>'20000']);
    //echo "Insert result is: ";
 //   print_r($obj->getResult());

    //$obj->update('test1',['NAME'=>'prashanti','EMAIL'=>'prashanti@gmail.com','MOBILE'=>'98765433','SALARY'=>'20000'],'ID="7"');
    //echo "<br>Update result is: ";
   // print_r($obj->getResult());

  // $obj->delete('test1','ID="7"');
  //  echo "<br>Delete result is: ";
  //  print_r($obj->getResult());

    $obj->select('test1','*',null,null,null,null);
    echo "<br>SELECT result is: ";
    echo "<pre>";
    print_r($obj->getResult());
    echo "</pre>";
?>