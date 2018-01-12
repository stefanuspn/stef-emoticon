<?php

/** Stef-Emoticon
 * Create By Stefanus Prasetyo Nugroho
 * v -0.1 Beta
 * 25 Emoticons
 */
require_once 'expression.php';

class Stef_Emot
{

// Main function, the text will be entered here
  public function emot($text){
    $text = $this->scanning($text);
    return $text;
  }

/*Scanning function detects,
* Whether there is a code in the text emoticons.
*/
  private function scanning($text)
  {
    $text = $this->happy($text);
    $text = $this->eyeblink($text);
    $text = $this->bigsmile($text);
    $text = $this->laugh1($text);
    $text = $this->laugh2($text);
    $text = $this->bighug($text);
    $text = $this->dance($text);
    $text = $this->party($text);
    $text = $this->roftl($text);
    return $text;
  }

//This is just special for happy emoticon code = :)
  private function happy($text)
  {
    
      global $expression;
      global $replacement;
      $text = str_replace($expression["happy"], $replacement["01"], $text);
 
  return $text;
  
  }

//This is just special for eye blink emoticon code = ;)
  private function eyeblink($text)
  {
       global $expression;
       global $replacement;
       $text = str_replace($expression["eyeblink"], $replacement["02"], $text);
 
        return $text;
      
  }

  //This is just special for big smile emoticon code = :D
  private function bigsmile($text)
  {
       global $expression;
       global $replacement;
       $text = str_replace($expression["bigsmile"], $replacement["03"], $text);
        return $text;
    
  }
  //This is just special for laugh1 emoticon code  =)
  private function laugh1($text)
  {
       global $expression;
       global $replacement;
       $text = str_replace($expression["laugh1"], $replacement["04"], $text);

        return $text;
  
  }

  // This is just special for laugh2 emoticon code =-)
  private function laugh2($text)
  {
       global $expression;
       global $replacement;
       $text = str_replace($expression["laugh2"], $replacement["05"], $text);
    return $text;
  }

  //This is just special for big hug emoticon code ({})

  private function bighug($text)
  {
     global $expression;
       global $replacement;
       $text = str_replace($expression["bighug"], $replacement["06"], $text);

    return $text;
  }

  // This is just special for dance emoticon code \=D/
  private function dance($text)
  {
    global $expression;
       global $replacement;
       $text = str_replace($expression["dance"], $replacement["07"], $text);

    return $text;
  }
  // This is just special for party emoticon code <=-P and *party*
  private function party($text)
  {
   global $expression;
       global $replacement;
       $text = str_replace($expression["party"], $replacement["08"], $text);

    return $text;
  }

  //This is just special for roftl emoticon code  =)
  private function roftl($text)
  {
   global $expression;
       global $replacement;
       $text = str_replace($expression["roftl"], $replacement["09"], $text);

    return $text;
  
  }
}

//$emot = new Stef_Emot();
//echo $emot->emot("*happy* *eyeblink* *bigsmile* *laugh1* *laugh2* *bighug* *dance* *party* *roftl*");
?>
