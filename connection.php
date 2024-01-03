<?php
include('connect.php');
class database extends connect
{
    // insert query
    public function insert($data)
    {
            $conn = $this->connect();
            $ins = mysqli_query($conn,"INSERT INTO `globiz_data`( `name`, `email`, `email_otp`, `password`, `phone_number`, `phone_number_otp`)
            VALUES('$data[name]','$data[email]','$data[email_otp]','$data[pass]','$data[num]','$data[num_otp]')") or die(mysqli_error($conn));
            session_start();
            return true;
            
    }
    // select query
    public  function select($data)
    {
        $conn = $this->connect();
        $select = mysqli_query($conn,"SELECT * FROM `globiz_data` WHERE  `email` = '$data[email]'") or die(mysqli_error($conn));


        if($fetch = mysqli_fetch_assoc($select))
        {
            // session_start();
                $_SESSION['id1'] = $fetch['id'];
                $_SESSION['name1'] = $fetch['name'];
                $_SESSION['email1'] = $fetch['email'];
            if($fetch['email'] == $data['email'])
            {
                return true;
                echo "khijh";
            } 
            else
            {
                return false;
            }
        }
    }
    // confirm password
    public function confirm_pass($data)
    {
        if($data['pass'] == $data['confirm_pass'])
        {
            return true;
        }
        else
        {
            return false;
        }
    }
    // OTP verification
    public function otp_verify($otpnum)
    {
        $conn = $this->connect();
        $otp_select = mysqli_query($conn,"SELECT * FROM `globiz_data` WHERE `email_otp` = '$otpnum'") or die(mysqli_error($conn));
        if($otp_fetch = mysqli_fetch_assoc($otp_select))
        {
            if($otp_fetch['email_otp'] == $otpnum)
            {
                return true;
            }
            else
            {
                return false;
            }
        }
    }
    // login query
    public function login($data)
    {
        $conn = $this->connect();
        $log = mysqli_query($conn,"SELECT * FROM `globiz_data` WHERE `email` = '$data[mail]' AND `password` = '$data[pwd]'");
        if($log)
        {
            if(mysqli_num_rows($log)==1)
            {
                if($fetch_log = mysqli_fetch_assoc($log))
                {
                    if($fetch_log['email'] == $data['mail'] && $fetch_log['password'] == $data['pwd'])
                    {
                        // session_start();
                        $_SESSION['id1'] = $fetch_log['id'];
                        $_SESSION['email1'] = $fetch_log['email'];
                        $_SESSION['name1'] = $fetch_log['name'];
                        return true;
                    }
                    else
                    {
                        return false;
                    }
                }
            }
        }
        else
        {
            echo "query not run";
        }
    }
    // update query name
    public function update($data,$fetch_id)
    {
        $conn = $this->connect();
        $up = mysqli_query($conn, "UPDATE `globiz_data` SET `name` = '$data'  WHERE `id` = '$fetch_id'");
        if($up)
        {
            return true;
        }
        else
        {
            return false;
        }
    }
    // update password
    public function update_pass($new_password,$fetch_id)
    {
        $conn = $this->connect();
        $up = mysqli_query($conn, "UPDATE `globiz_data` SET `password` = '$new_password' WHERE `id` = '$fetch_id'");
        // print_r($new_password);
        if($up)
        {
            return true;
        }
        else
        {
            return false;
        }
    }
    // update otp
    public function update_otp($data,$fetch_id)
    {
        $conn = $this->connect();
        // $sel = mysqli_query($conn, "SELECT * FROM  `globiz_data` WHERE `email` = '$data[mail]'");
        // if($sel)
        // {
        //     if($n = mysqli_num_rows($sel) == 1)
        //     {

        //         if($ft = mysqli_fetch_assoc($sel))
        //         {
        //             $_SESSION['iden'] = $ft['id'];

                    $up = mysqli_query($conn, "UPDATE `globiz_data` SET `email_otp` = '$data[otp]' WHERE `id` = '$fetch_id'");
                    if($up)
                    {
                        return true;
                    }
        //         }
        //     }
        // }
        else
        {
            return false;
        }

    }
    // delete query
    public function delete($fetch_id)
    {
        $conn = $this->connect();
        $del = mysqli_query($conn,"DELETE FROM `globiz_data` WHERE `id` = $fetch_id");
        if($del)
        {
            return true;
        }
        else
        {
            return false;
        }
    }
    // forgot password email
    public function sent_email($data)
    {
        $conn = $this->connect();
        $e_mail = mysqli_query($conn,"SELECT * FROM `globiz_data` WHERE `email` = '$data[mail]'");
        if($e_mail)
        {
            if(mysqli_num_rows($e_mail)==1)
            {
                if($fetch = mysqli_fetch_assoc($e_mail))
                {
                    if($fetch['email'] == $data['mail'])
                    {
                        $to=$data['mail'];
                        $subject="Verification for OTP";
                        $msg="Your OTP verification for forgot password is : ".$data['otp'];
                        $from="dhruv.sharmaldh02@gmail.com";
                        $headers="MIME-Version:1.0" . "\r\n";
                        $headers="Content-type:text/html;charset=UTF-8" . "\r\n";
                        $headers="From: $from";
                        if(mail($to, $subject, $msg, $headers))
                        {
                            return true;
                        }
                        else
                        {
                            return false;
                        }
                    }
                }
            }
        }

    }
    

    
}

