<?php
include('connect.php');
// declaring class
class data extends connect
{
    // function __construct(){
    //     Parent::__construct();
    //     Self::
    // }
    // insert query
    public function insert($resume)
    {
        $conn = $this->connect();
        $insert = mysqli_query( $conn,  
            "INSERT INTO `resume`(
                `name`,
                `email`,
                `contact_no`,
                `address`,
                `img`,
                `skill`,
                `skill1`,
                `skill2`,
                `qual`,
                `qual1`,
                `qual2`,
                `achie`,
                `achie2`,
                `achie3`,
                `exp`,
                `exp1`
                )
                VALUES (
                    '$resume[name]' ,
                    '$resume[email]' ,
                    '$resume[contact]' ,
                    '$resume[address]' ,
                    '$resume[img]' ,
                    '$resume[skill]' ,
                    '$resume[skill1]' ,
                    '$resume[skill2]' ,
                    '$resume[qual]' ,
                    '$resume[qual1]' ,
                    '$resume[qual2]' ,
                    '$resume[achie]' ,
                    '$resume[achie1]' ,
                    '$resume[achie2]' ,
                    '$resume[exp]' ,
                    '$resume[exp1]'
            )
            ");

        return $insert;
    }
    // img uploades and display
    public function image($resume,$tmp)
    {
        $move = move_uploaded_file($tmp, "uplodimg/".$resume);
        if($move)
        {
            return true;
        }
        else
        {
            return false;
        }

    }
    // select query
    public function select($id)
    {
        $conn = $this->connect();
        $select = mysqli_query($conn , " SELECT * FROM `resume` WHERE `id` = '$id'");
        if($select)
        {
            if(mysqli_num_rows($select)==1)
            {
                $fetch = mysqli_fetch_assoc($select);
                if($fetch)
                {
                    // session_start();
                    // $_SESSION['id'] = $fetch['id'];
                    $_SESSION['name'] = $fetch['name'];
                    $_SESSION['address'] = $fetch['address'];
                    $_SESSION['email'] = $fetch['email'];
                    $_SESSION['contact'] = $fetch['contact_no'];
                    $_SESSION['skill'] = $fetch['skill'];
                    $_SESSION['skill1'] = $fetch['skill1'];
                    $_SESSION['skill2'] = $fetch['skill2'];
                    $_SESSION['qual'] = $fetch['qual'];
                    $_SESSION['qual1'] = $fetch['qual1'];
                    $_SESSION['qual2'] = $fetch['qual2'];
                    $_SESSION['achie'] = $fetch['achie'];
                    $_SESSION['achie2'] = $fetch['achie2'];
                    $_SESSION['achie3'] = $fetch['achie3'];
                    $_SESSION['exp'] = $fetch['exp'];
                    $_SESSION['exp1'] = $fetch['exp1'];
                    // $_SESSION['exp2'] = $fetch['exp2'];

                    // echo "$id";
                }
            }
        }
    }
    // image display
    public function display($id)
    {
        $conn = $this->connect();
        // $id = $_SESSION['id'];
        $dis = mysqli_query($conn , "SELECT * FROM `resume` WHERE `id` = '$id'");
        if($dis)
        {
            if(mysqli_num_rows($dis)==1)
            {
                $fetc = mysqli_fetch_assoc($dis);
                $img =  '<img src = "uplodimg/'.$fetc['img'].'" width = 150px; height = 150px; >';
                echo $img;
            }
            else
            {
                echo "dont work";
            }
        }
    }
    // display image for pdf
    public function disp($id)
    {
        $conn = $this->connect();
        // $id = $_SESSION['id'];
        $dis = mysqli_query($conn , "SELECT * FROM `resume` WHERE `id` = '$id'");
        if($dis)
        {
            if(mysqli_num_rows($dis)==1)
            {
                $fetc = mysqli_fetch_assoc($dis);
                $img =  '<img src = "uplodimg/'.$fetc['img'].'" style = "
                width:150px;
                height:150px;
                object-fit:cover;
                overflow:hidden;
                   " >';
                echo $img;
                return true;
            }
            else
            {
                echo "dont work";
            }
        }
    }
    // update query of resume
    public function update_resume($id,$data,$tmp)
    {
        // print_r($data); die;
        $conn = $this->connect();
        if(!empty($data['img']))
        {
            foreach($data as $key => $value)
            {
                $arar[] ="`$key` = '$value'";
            }
            $r =  implode(",",$arar);
            $upd = "UPDATE `resume` SET  $r  WHERE `id` = $id";

            $update = mysqli_query($conn ,$upd);
                   
            if($update)
            {
                if(move_uploaded_file($tmp, "uplodimg/".$data['img']))
                {
                    // echo "uploaded";
                    // if(isset($data['img']) && $data['img'])
                    // {
                    //     $data = "uplodimg/".$data['img'];
                    // }
                    // else
                    // {
                    //     unlink($data['img']);
                    // }
                    // unset($data['img']);
                    // echo "uploaded";
                }
                else
                {
                    echo "error";
                }
            }
            return true;
        }
        else
        {
            $update = mysqli_query($conn ,"
            UPDATE `resume` SET 
            `name`='$data[name]',
            `skill`='$data[skill]',
            `skill1`='$data[skill1]',
            `skill2`='$data[skill2]',
            `exp`='$data[exp]',
            `exp1`='$data[exp1]',
            `qual`='$data[qual]',
            `qual1`='$data[qual1]',
            `qual2`='$data[qual2]',
            `achie`='$data[achie]',
            `achie2`='$data[achie2]',
            `achie3`='$data[achie3]',
            `email`='$data[email]',
            `address`='$data[address]',
            `contact_no`='$data[contact_no]'
            WHERE `id` = '$id'       
            ");
            // echo "updated without image";
            return $update;
        }
    }

    

    // // update skill
    //  public function update_skill($id,$skill)
    //  {
    //      $conn = $this->connect();
    //      $update = mysqli_query($conn ,"
    //      UPDATE `resume` SET 
    //      `skill`='$skill'
    //      WHERE `id` = '$id'       
    //      ");
    //      return true;
    //  }
    // // update skill1
    // public function update_skill1($id,$skill1)
    // {
    //     $conn = $this->connect();
    //     $update = mysqli_query($conn ,"
    //     UPDATE `resume` SET 
    //     `skill1`='$skill1'
    //     WHERE `id` = '$id'       
    //     ");
    //     return true;
    // }
    // // update skill2
    // public function update_skill2($id,$skill2)
    // {
    //     $conn = $this->connect();
    //     $update = mysqli_query($conn ,"
    //     UPDATE `resume` SET 
    //     `skill2`='$skill2'
    //     WHERE `id` = '$id'       
    //     ");
    //     return true;
    // }
    // // update exp
    // public function update_exp($id,$exp)
    // {
    //     $conn = $this->connect();
    //     $update = mysqli_query($conn ,"
    //     UPDATE `resume` SET 
    //     `exp`='$exp'
    //     WHERE `id` = '$id'       
    //     ");
    //     return true;
    // }
    //  // update exp1
    //  public function update_exp1($id,$exp1)
    // {
    //     $conn = $this->connect();
    //     $update = mysqli_query($conn ,"
    //     UPDATE `resume` SET 
    //     `exp1`='$exp1'
    //     WHERE `id` = '$id'       
    //     ");
    //     return true;
    // }
    // //  update qual
    //  public function update_qual($id,$qual)
    // {
    //     $conn = $this->connect();
    //     $update = mysqli_query($conn ,"
    //     UPDATE `resume` SET 
    //     `qual`='$qual'
    //     WHERE `id` = '$id'       
    //     ");
    //     return true;
    // }
    // //  update qual1
    // public function update_qual1($id,$qual1)
    // {
    //     $conn = $this->connect();
    //     $update = mysqli_query($conn ,"
    //     UPDATE `resume` SET 
    //     `qual1`='$qual1'
    //     WHERE `id` = '$id'       
    //     ");
    //     return true;
    // }
    // //  update qual2
    // public function update_qual2($id,$qual2)
    // {
    //     $conn = $this->connect();
    //     $update = mysqli_query($conn ,"
    //     UPDATE `resume` SET 
    //     `qual2`='$qual2'
    //     WHERE `id` = '$id'       
    //     ");
    //     return true;
    // }
    // //  update achie
    // public function update_achie($id,$achie)
    // {
    //     $conn = $this->connect();
    //     $update = mysqli_query($conn ,"
    //     UPDATE `resume` SET 
    //     `achie`='$achie'
    //     WHERE `id` = '$id'       
    //     ");
    //     return true;
    // }
    // //  update achie2
    // public function update_achie1($id,$achie1)
    // {
    //     $conn = $this->connect();
    //     $update = mysqli_query($conn ,"
    //     UPDATE `resume` SET 
    //     `achie2`='$achie1'
    //     WHERE `id` = '$id'       
    //     ");
    //     return true;
    // }
    // //  update achie2
    // public function update_achie2($id,$achie2)
    // {
    //     $conn = $this->connect();
    //     $update = mysqli_query($conn ,"
    //     UPDATE `resume` SET 
    //     `achie3`='$achie2'
    //     WHERE `id` = '$id'       
    //     ");
    //     return true;
    // }
    // // update email
    // public function update_email($id,$email)
    // {
    //     $conn = $this->connect();
    //     $update = mysqli_query($conn ,"
    //     UPDATE `resume` SET 
    //     `email`='$email'
    //     WHERE `id` = '$id'       
    //     ");
    //     return true;
    // }
    // // update address
    // public function update_add($id,$address)
    // {
    //     $conn = $this->connect();
    //     $update = mysqli_query($conn ,"
    //     UPDATE `resume` SET 
    //     `address`='$address'
    //     WHERE `id` = '$id'       
    //     ");
    //     return true;
    // }
    // // update contact
    // public function update_contact($id,$contact)
    // {
    //     $conn = $this->connect();
    //     $update = mysqli_query($conn ,"
    //     UPDATE `resume` SET 
    //     `contact_no`='$contact'
    //     WHERE `id` = '$id'       
    //     ");
    //     return true;
    // }
    // // update image
    // public function update_img($id,$data)
    // {
    //     $conn = $this->connect();
    //     $update = mysqli_query($conn, "
    //     UPDATE `resume` SET 
    //     `img` = '$data[img]'
    //     WHERE `id` = '$id'
    //     ");
    //     if($update)
    //     {
    //         if(move_uploaded_file($data['tmp'], "uplodimg/".$data['img']))
    //         {
    //             // echo "uploaded";
    //         }
    //         else
    //         {
    //             echo "error";
    //         }
    //     }
    //     return true;
    // }
}

// $data = new data();
// $data->

// data::functionName()

?>
