<?
/**
 * sfMisRetrator
 *
 * @package    symfony 
 * @author     mic
 * @version    0.1
 */
class MisRetratos
{
	static public function slugify($text)
  	{
	    // replace all non letters or digits by -
	    $text = preg_replace('/\W+/', '-', $text); 
	    // trim and lowercase
	    $text = strtolower(trim($text, '-')); 
	    return $text;
	 }
  
}// fin de clase
