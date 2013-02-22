<?php
// wcf imports
require_once(WCF_DIR.'lib/data/message/bbcode/BBCodeParser.class.php');
require_once(WCF_DIR.'lib/data/message/bbcode/BBCode.class.php');

/**
 * Parses the [usk] bbcode tag, which inserts a defined USK Logo.
 *
 * @author	Cetheus
 * @copyright	2011 Cetheus.net <http://www.cetheus.net>
 * @license	Creative Commons BY-ND <http://creativecommons.org/licenses/by-nd/3.0/de/>
 * @package	net.cetheus.wcf.data.message.bbcode.usk
 * @subpackage	data.message.bbcode
 * @category 	Community Framework
 */
class UskBBCode implements BBCode {
	/**
	 * @see BBCode::getParsedTag()
	 */
	public function getParsedTag($openingTag, $content, $closingTag, BBCodeParser $parser) {
		// default values
		$age = '';
		$size = '64';  // Standard Size of 64 px width if no value given
		$output = '';
		
		// get attributes
		if (isset($openingTag['attributes'][0])) $age = $openingTag['attributes'][0];
		if (isset($openingTag['attributes'][1])) $size = $openingTag['attributes'][1];
		
		// display BBCode
		if ($parser->getOutputType() == 'text/html') {
			$output = '<img src="'.RELATIVE_WCF_DIR.'images/usk/usk_'.$age.'.svg" style="width: '.$size.'px;" />'; // USK Age Rating		
		}
		else if ($parser->getOutputType() == 'text/plain') {
			$output = 'Rated: USK '.$age;
		}
		return $output;
	}
}
?>