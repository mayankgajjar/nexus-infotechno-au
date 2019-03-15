<?php

include_once 'config/database.php';
//session_start();

class Action
{

    public $app_url = 'http://nexusinfotechno.com.au/';

    function __construct()
    {
        
    }

    public function getDBConnection(){
        $database = new Database();
        return $database->getConnection();
    }

    function callAPI($method, $url, $data){
       $curl = curl_init();

       switch ($method){
          case "POST":
             curl_setopt($curl, CURLOPT_POST, 1);
             if ($data)
                curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
             break;
          case "PUT":
             curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "PUT");
             if ($data)
                curl_setopt($curl, CURLOPT_POSTFIELDS, $data);                              
             break;
          default:
             if ($data)
                $url = sprintf("%s?%s", $url, http_build_query($data));
       }

       // OPTIONS:
       curl_setopt($curl, CURLOPT_URL, $url);
       curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
       curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
       curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0); // On dev server only!

       // EXECUTE:
       $result = curl_exec($curl);
       if(!$result){die("Connection Failure");}
       curl_close($curl);
       return $result;
    }

    public function addContactInquiry($data = null){
        if($data != null){
            //$db = $this->getDBConnection();

            $name = $data['txt_name'];
            $email = $data['txt_email'];
            $contact = $data['txt_contact'];
            $subject = $data['txt_subject'];
            $message = $data['txt_message'];
            $data['type'] = 'contact_inquiry';

            $method = "POST";
            $url = $this->app_url.'smtptest/script/contact_inq.php';
            $result = $this->callAPI($method, $url, $data);

            /*$query = "INSERT INTO contact_inquiry (name, email, contact_number, subject, message) VALUES 
            ('".$name."', '".$email."', '".$contact."', '".$subject."', '".$message."');";
            $result = mysqli_query($db,$query);*/

            if($result){
                $respons = array('success' => '1', 'data' => array(), 'massage' => 'Inquiry has been Added.');
                return json_encode($respons);
            } else {
                $respons = array('success' => '0', 'data' => $result, 'massage' => 'Inquiry Not Added.');
                return json_encode($respons);
            }

        }
    }

    public function addQuoteInquiry($data = null){
        if($data != null){
            //$db = $this->getDBConnection();

            $name = $data['qtxt_name'];
            $email = $data['qtxt_email'];
            $message = $data['qtxt_message'];
            $data['type'] = 'quote_inquiry';

            $method = "POST";
            $url = $this->app_url.'smtptest/script/contact_inq.php';
            $result = $this->callAPI($method, $url, $data);

            /*$query = "INSERT INTO quote_inquiry (name, email, message) VALUES ('".$name."', '".$email."', '".$message."');";
            $result = mysqli_query($db,$query);*/

            if($result){
                $respons = array('success' => '1', 'data' => array(), 'massage' => 'Inquiry has been Added.');
                return json_encode($respons);
            } else {
                $respons = array('success' => '0', 'data' => array(), 'massage' => 'Inquiry Not Added.');
                return json_encode($respons);
            }
        }
    }

    public function addSeoInquiry($data = null){
        if($data != null){
            //$db = $this->getDBConnection();

            $name = $data['stxt_name'];
            $website = $data['stxt_website'];
            $contact = $data['stxt_contact'];
            $email = $data['stxt_email'];
            $data['type'] = 'seo_inquiry';

            $method = "POST";
            $url = $this->app_url.'smtptest/script/contact_inq.php';
            $result = $this->callAPI($method, $url, $data);

            /*$query = "INSERT INTO seo_inquiry (name, email, contact_number, website) VALUES ('".$name."', '".$email."', '".$contact."', '".$website."')";
            $result = mysqli_query($db,$query);*/

            if($result){
                $respons = array('success' => '1', 'data' => array(), 'massage' => 'Inquiry has been Added.');
                return json_encode($respons);
            } else {
                $respons = array('success' => '0', 'data' => array(), 'massage' => 'Inquiry Not Added.');
                return json_encode($respons);
            }
        }
    }

    public function addDesignInquiry($data = null){
        if($data != null){
            //$db = $this->getDBConnection();

            $name = $data['dtxt_name'];
            $website = $data['dtxt_website'];
            $contact = $data['dtxt_contact'];
            $email = $data['dtxt_email'];
            $data['type'] = 'design_inquiry';

            $method = "POST";
            $url = $this->app_url.'smtptest/script/contact_inq.php';
            $result = $this->callAPI($method, $url, $data);

            /*$query = "INSERT INTO designer_inquiry (name, email, contact_number, website) VALUES ('".$name."', '".$email."', '".$contact."', '".$website."')";
            $result = mysqli_query($db,$query);*/

            if($result){
                $respons = array('success' => '1', 'data' => array(), 'massage' => 'Inquiry has been Added.');
                return json_encode($respons);
            } else {
                $respons = array('success' => '0', 'data' => array(), 'massage' => 'Inquiry Not Added.');
                return json_encode($respons);
            }

        }
    }


    public function addAppInquiry($data = null){
      if($data != null){
          //$db = $this->getDBConnection();

          $name = $data['atxt_name'];
          $website = $data['atxt_website'];
          $contact = $data['atxt_contact'];
          $email = $data['atxt_email'];
          $data['type'] = 'app_inquiry';

          $method = "POST";
          $url = $this->app_url.'smtptest/script/contact_inq.php';
          $result = $this->callAPI($method, $url, $data);

          /*$query = "INSERT INTO app_inquiry (name, email, contact_number, website) VALUES ('".$name."', '".$email."', '".$contact."', '".$website."')";
          $result = mysqli_query($db,$query);*/

          if($result){
              $respons = array('success' => '1', 'data' => array(), 'massage' => 'Inquiry has been Added.');
              return json_encode($respons);
          } else {
              $respons = array('success' => '0', 'data' => array(), 'massage' => 'Inquiry Not Added.');
              return json_encode($respons);
          }
      }
    }

    public function addBettingInquiry($data = null){
        if($data != null){
            //$db = $this->getDBConnection();
            $name = $data['etxt_name'];
            $contact = $data['etxt_contact'];
            $email = $data['etxt_email'];
            $company = $data['etxt_company'];
            $country = $data['etxt_country'];
            $state = $data['etxt_state'];
            $message = $data['etxt_message'];
            $data['type'] = 'betting_inquiry';

            $method = "POST";
            $url = $this->app_url.'smtptest/script/contact_inq.php';
            $result = $this->callAPI($method, $url, $data);


            /*$query = "INSERT INTO betting_inquiry (name, email, contact_number, company, country, state, message) VALUES ('".$name."', '".$email."', '".$contact."', '".$company."', '".$country."', '".$state."', '".$message."')";
            $result = mysqli_query($db,$query);*/

            if($result){
                $respons = array('success' => '1', 'data' => array(), 'massage' => 'Inquiry has been Added.');
                return json_encode($respons);
            } else {
                $respons = array('success' => '0', 'data' => array(), 'massage' => 'Inquiry Not Added.');
                return json_encode($respons);
            }


        }
    }

}


?>
