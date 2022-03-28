$last_matches=DB::table('player_records')
    	            	
    	            	->select('player_records.match_id','player_records.team_id')
    	            	->orderBy('player_records.id','DESC')
    	            	/*->distinct('player_records.match_id')*/
    	            	/*->limit(2)*/
				    	->get();
		$last_matches=$last_matches->toArray();
   		 /*dd($last_matches);*/
		 /*dd($last_matches[0]->match_id);*/
		 echo $last_matches[0]->match_id;
		 echo '<br>';
		 echo $last_matches[0]->team_id;
		 dd($last_matches[0]);



//it printed distinct match_no and team_id

$last_matches=DB::table('player_records')
    	            	->distinct('player_records.match_id')
    	            	->select('player_records.match_id','player_records.team_id')
    	            	->orderBy('player_records.match_id','DESC')
    	            	
				    	->get();
		dd($last_matches);
		$match_id= $last_matches->match_id;
		$team_id= $last_matches->team_id;
		echo $match_id;
		echo '<br>';
		echo $team_id;
		echo '<br>';

		dd($last_matches);
		$last_matches=$last_matches->toArray();
		 echo $last_matches[0]->match_id;
		 echo '<br>';
		 echo $last_matches[0]->team_id;
		 dd($last_matches[0]);