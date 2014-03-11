<?php 
$data['card_details'] = $this->model_auth->card_details_id($id,$this->session->userdata['logged_data']['member_id']);
/*prints something like:
Array
(
    [0] => stdClass Object
        (
            [id] => 540
            [fkUserId] => 29
        )
)*/
foreach($data['card_details'] as $val)
    {
        
    }
$columns = get_object_vars($val);

foreach($columns as $val=>$row)
    {
        $data[$val] = $this->input->post($val) ? $this->input->post($val) :  $row;
    } 			
		
?>