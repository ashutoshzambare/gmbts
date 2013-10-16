<?php

class Magazine{
    
    function getMagazine() {
   /* $sql = "SELECT 	ProfileID, 
	MaritalStatus, 
	Height, 
	Complexion, 
	Caste, 
	EducationIn, 
	Profession, 
	CityID, 
	AnnualIncome 
	 
	FROM 
	user_profile 
	LIMIT 0, 30";*///
    try {
        $users = R::getAll('select ProfileID,MaritalStatus, Height, Complexion, Caste, EducationIn, Profession, CityID, AnnualIncome from user_profile');
        if ($users) {
            echo json_encode($users);
        } else {
            echo "error";
        }
    } catch (PDOException $e) {
        echo '{"error":{"text":' . $e->getMessage() . '}}';
    }

}
    
    
}
?>
