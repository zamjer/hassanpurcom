<?php
/**
 * Copyright (c) 2010 Mujtaba Hassanpur.
 * 
 * Permission is hereby granted, free of charge, to any person
 * obtaining a copy of this software and associated documentation
 * files (the "Software"), to deal in the Software without
 * restriction, including without limitation the rights to use,
 * copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the
 * Software is furnished to do so, subject to the following
 * conditions:
 * 
 * The above copyright notice and this permission notice shall be
 * included in all copies or substantial portions of the Software.
 * 
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND,
 * EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES
 * OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND
 * NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT
 * HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY,
 * WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING
 * FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR
 * OTHER DEALINGS IN THE SOFTWARE.
 */
?>

<?php
  // get the command
  $command = $_REQUEST['command'];
  
  // determine which command will be run
  if($command == "getAnimalList") {
    // return a list of animals
    echo "bird,dog,cat,cow,sheep";
  } else if($command == "getAnimalSound") {
    // get the animal parameter and send the right response
    $animal = $_REQUEST['animal'];
    if($animal == "bird") {
      echo "Chirp, Chirp";
    } else if($animal == "dog") {
      echo "Woof, Woof";
    } else if($animal == "cat") {
      echo "Meow, Meow";
    } else if($animal == "cow") {
      echo "Moo, Moo";
    } else if($animal == "sheep") {
      echo "Baa, Baa";
    } else {
      echo "I don't know.";
    }
  } else {
    echo "";
  }
?>