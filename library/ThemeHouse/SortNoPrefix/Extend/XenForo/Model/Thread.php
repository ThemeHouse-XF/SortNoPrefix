<?php

/**
 *
 * @see XenForo_Model_Thread
 */
class ThemeHouse_SortNoPrefix_Extend_XenForo_Model_Thread extends XFCP_ThemeHouse_SortNoPrefix_Extend_XenForo_Model_Thread {
	
	/**
	 *
	 * @see XenForo_Model_Thread::prepareThreadConditions()
	 */
	public function prepareThreadConditions(array $conditions, array &$fetchOptions) {
	    
	    if (isset ( $conditions ['prefix_id'] )) {
	    	if ($conditions ['prefix_id'] == '92999') {
	    	    $conditions['prefix_id'] = -1;
	    	    return parent::prepareThreadConditions ( $conditions, $fetchOptions );
	    	}
	    }
		return parent::prepareThreadConditions ( $conditions, $fetchOptions );
	} /* END prepareThreadConditions */
}