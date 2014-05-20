<?php

	class PlayerController extends BaseController {
		public function showProfile() {
			
			
			$Parsedown = new Parsedown();
			$mrk = $Parsedown->text('Hello _Parsedown_! player');
			
			/* solution 1 -> with */
			//return View::make('player')->with('page_markdown', $mrk);
			
			
			/* solution 2 -> array */
			$data = [
				'page_markdown' => $mrk 
			];
			return View::make('player', $data);
		}
	}


?>