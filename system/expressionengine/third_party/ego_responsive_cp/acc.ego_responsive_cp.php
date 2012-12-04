<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Ego Responsive CP Accessory
 *
 * @package		Ego Responsive CP
 * @category	Accessory
 * @author		Dave O'Brien
 * @link		https://github.com/egocreative/ego_responsive_cp
 */
 

class Ego_responsive_cp_acc
{
	var $name	 		= 'Ego Responsive CP';
	var $id	 			= 'ego_responsive_cp';
	var $version	 	= '0.1.1';
	var $description	= "Makes CP theme responsive, based on Ben Croker's (http://www.putyourlightson.net/) masterpiece - but worked in with override.css";
	var $sections	 	= array();
	
	// --------------------------------------------------------------------
	
	/**
	 * Constructor
	 */
	function __construct()
	{
		$this->EE =& get_instance();
	} 

	// --------------------------------------------------------------------
	
	/**
	* Set Sections
	*/
	function set_sections()
	{
		// hide accessory
		$this->sections[] = '<script type="text/javascript">$("#accessoryTabs a.ego_responsive_cp").parent().remove();</script>';

		// get theme folder
		$theme_folder_url = URL_THIRD_THEMES.'ego_responsive_cp/';

		// add meta tag
		$this->EE->cp->add_to_head('<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1" />');
		
		// link css file
		$this->EE->cp->add_to_head('<link rel="stylesheet" type="text/css" href="'.$theme_folder_url.'css/ego_responsive_cp.css" media="screen" />');
				
		// insert all images in logos folder
		// $logo_path = PATH_THIRD_THEMES.'responsive_cp/logos/';		
		// 
		// if ($files = @scandir($logo_path))
		// {
		// 	$images = array();
		// 	
		// 	foreach ($files as $file)
		// 	{
		// 		// if file exists and is an image
		// 		if (is_file($logo_path.$file) AND getimagesize($logo_path.$file))
		// 		{
		// 			$images[] = '<img src="'.$theme_folder_url.'logos/'.$file.'" />';					
		// 		}
		// 	}
		// 	
		// 	if (count($images))
		// 	{
		// 		$js = '$("#footer").prepend(\''.implode(' ', $images).'<br/><br/>\');';
		// 		$this->EE->cp->add_to_foot('<script type="text/javascript">'.$js.'</script>');		
		// 	}
		// }
	}

}
// END CLASS

/* End of file acc.ego_responsive_cp.php */
/* Location: ./system/expressionengine/third_party/ego_responsive_cp/acc.ego_responsive_cp.php */