<?php

class registerModel extends CI_Model{

    function __construct(){
        parent::__construct();
    }

    function storeTeam($teamname,$division,$address,$landline,$mobile,$email,$teamcoach,$coachcontact,$coachemail,$teamcaptain,$teamcaptaincontact,$teamcaptainemail,$teamcaptain2,$teamcaptaincontact2,$teamcaptainemail2){

        return $this->db->query("INSERT INTO team(
                                            team_name,
                                            division,
                                            address,
                                            landline,
                                            mobile,
                                            email,
                                            team_coach,
                                            team_coach_contact,
                                            team_coach_email,
                                            team_captain,
                                            team_captain_contact,
                                            team_captain_email,
                                            team_captain_2,
                                            team_captain_2_contact,
                                            team_captain_2_email,
                                            status)

                                        VALUES(
                                            '".$teamname."',
                                            '".$division."',
                                            '".$address."',
                                            '".$landline."',
                                            '".$mobile."',
                                            '".$email."',
                                            '".$teamcoach."',
                                            '".$coachcontact."',
                                            '".$coachemail."',
                                            '".$teamcaptain."',
                                            '".$teamcaptaincontact."',
                                            '".$teamcaptainemail."',
                                            '".$teamcaptain2."',
                                            '".$teamcaptaincontact2."',
                                            '".$teamcaptainemail2."',
                                            'new')
                                ");
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
}

?>