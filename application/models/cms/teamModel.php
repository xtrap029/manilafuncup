<?php

class teamModel extends CI_Model{

    function __construct(){
        parent::__construct();
    }

    function showTeam($sort){
    	if($sort == 'all'){
    		return $this->db->query("SELECT * FROM team ORDER BY date_created")->result();
    	}
    }

    function getTeam($id){
    	return $this->db->query("SELECT * FROM team WHERE id = '".$id."' AND (date_deleted IS NULL)")->row();
    }

    function getTeamPlayers($id){
    	return $this->db->query("SELECT * FROM player WHERE team_id = '".$id."' AND date_deleted IS NULL ORDER BY player_name")->result();
    }

    function updateTeam($id,$team_name,$division,$address,$landline,$mobile,$email,$notes,$status,$team_coach,$team_coach_email,$team_coach_contact,$team_captain,$team_captain_contact,$team_captain_email,$team_captain2,$team_captain_contact2,$team_captain_email2){
        return $this->db->query("UPDATE team SET team_name = '".$team_name."' , division = '".$division."' , address = '".$address."' , landline = '".$landline."' , mobile = '".$mobile."' , email = '".$email."' , notes = '".$notes."' , status = '".$status."' , team_coach = '".$team_coach."' , team_coach_contact = '".$team_coach_contact."' , team_coach_email = '".$team_coach_email."' , team_captain = '".$team_captain."' , team_captain_contact = '".$team_captain_contact."' , team_captain_email = '".$team_captain_email."' , team_captain_2 = '".$team_captain2."' , team_captain_2_contact = '".$team_captain_contact2."' , team_captain_2_email = '".$team_captain_email2."' WHERE id = '".$id."'");
    }

    function updatePlayer($name,$contact,$email,$id){
        $this->db->query("UPDATE player SET player_name = '".$name."', contact = '".$contact."', email = '".$email."' WHERE id = '".$id."'");
    }

    function storePlayer($playername,$contact,$playeremail,$id){
        return $this->db->query("INSERT INTO player(
                                            player_name,
                                            contact,
                                            email,
                                            team_id,
                                            status)
                                        VALUES(
                                            '".$playername."',
                                            '".$contact."',
                                            '".$playeremail."',
                                            '".$id."',
                                            'active')
                                ");
    }


    function deletePlayer($id){
        return $this->db->query("UPDATE player SET date_deleted = NOW() WHERE id = '".$id."'");
    }

    function showDivision($div){
        return $this->db->query("SELECT * FROM team WHERE division = '".$div."' AND status = 'approved' AND date_deleted IS NULL ORDER BY team_name")->result();
    }

    function countStatus($status){
        return $this->db->query("SELECT COUNT(id) AS id FROM team WHERE status = '".$status."' AND date_deleted IS NULL")->row();
    }

    function countPlayers($status){
        return $this->db->query("SELECT COUNT(p.id) AS id FROM player p LEFT JOIN team t ON p.team_id = t.id WHERE t.status = '".$status."' AND t.date_deleted IS NULL")->row();
    }

    function latestRegistration(){
        return $this->db->query("SELECT * FROM team WHERE date_deleted IS NULL ORDER BY id DESC LIMIT 1")->row();
    }

    function getLatestTeam(){
        return $this->db->query("SELECT * FROM team WHERE date_deleted IS NULL ORDER BY id DESC LIMIT 5")->result();
    }
}

?>