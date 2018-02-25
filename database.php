<?php
class Database
{
	//private static $host='rutvi.db.9462939.hostedresource.com';
	//private static $uname='rutvi';
	//private static $pwd='Demo9@1212';
	//private static $con=NULL;
	
	private static $host='localhost';
	private static $uname='root';
	private static $pwd='';
	private static $con=NULL;
	
	public static function connect()
	{
		self::$con=mysql_connect(self::$host,self::$uname,self::$pwd);
		mysql_select_db('Daily_Expences',self::$con);
		return self::$con;
	 }
	
	// public function getsub()
	// {		$con=database::connect();
	// 		$res=mysql_query("select * from sub_tbl",$con);
	// 		return $res;
	// 		database::disconnect();
	// }
	// public function getquedis()
	// {		$con=database::connect();
	// 		$res=mysql_query("select e.*,c.*,u.* from expences_tbl as u,category_tbl as c,user_tbl as u where u.u.user_email='$email'",$con);
	// 		return $res;
	// 		database::disconnect();
	// }
	// 	public function getallquedis()
	// {		$con=database::connect();
	// 		$res=mysql_query("select * from que_tbl where que_flag='1'",$con);
	// 		return $res;
	// 		database::disconnect();
	// }

	// public function getuser($email_id)
	// {		$con=database::connect();
	// 		$res=mysql_query("select * from user_tbl where pk_email_id='$email_id' ",$con);
	// 		return $res;
	// 		database::disconnect();
	// }
	// public function history($email_id)
	// {		$con=database::connect();
	// 		$res=mysql_query("select * from que_tbl where fk_email_id='$email_id' and que_flag='1'",$con);
	// 		return $res;
	// 		database::disconnect();
	// }
	// public function addque($que_title,$que_des,$que_img,$que_date,$email_id,$sub_id,$que_cnt,$que_flag,$que_like)
	// {		$con=database::connect();
	// 		$res=mysql_query("insert into que_tbl values(Null,'$que_title','$que_des','$que_img','$que_date','$email_id','$sub_id','$que_cnt','$que_flag','$que_like')",$con);
	// 		return $res;
	// 		database::disconnect();
	// }
	// public function disans($que_id)
	// {		$con=database::connect();
	// 		$res=mysql_query("select a.*,q.* from ans_tbl as a,que_tbl as q where a.fk_que_id=q.pk_que_id and fk_que_id='$que_id'",$con);
	// 		return $res;
	// 		database::disconnect();
	// }
	
	
	// public function getlike($que_id)
	// {		$con=database::connect();
	// 		$res=mysql_query("select * from que_tbl where pk_que_id='$que_id' ",$con);
	// 		return $res;
	// 		database::disconnect();
	// }
	// public function getlikeupdate($que_id,$cnt)
	// {		$con=database::connect();
	// 		$res=mysql_query("update que_tbl set que_like='$cnt' where pk_que_id='$que_id' ",$con);
	// 		return $res;
	// 		database::disconnect();
	// }
	// public function getcntupdate($que_id,$cnt)
	// {		$con=database::connect();
	// 		$res=mysql_query("update que_tbl set que_cnt='$cnt' where pk_que_id='$que_id' ",$con);
	// 		return $res;
	// 		database::disconnect();
	// }
	// public function aprove($que_id)
	// {		$con=database::connect();
	// 		$res=mysql_query("update que_tbl set que_flag='1' where pk_que_id='$que_id' ",$con);
	// 		return $res;
	// 		database::disconnect();
	// }

	// public function reject($que_id)
	// {		$con=database::connect();
	// 		$res=mysql_query("update que_tbl set que_flag='2' where pk_que_id='$que_id' ",$con);
	// 		return $res;
	// 		database::disconnect();
	// }

	// public function getanswerinsert($que_id,$desc,$email,$date)
	// {		$con=database::connect();
	// 		$res=mysql_query("insert into ans_tbl values(NULL,'$desc','$email','$que_id','$date',NULL)",$con);
	// 		return $res;
	// 		database::disconnect();
	// }
	// public function disquebyid($id)
	// {
	// 	$con=database::connect();
	// 		$res=mysql_query("select * from que_tbl where pk_que_id='$id'",$con);
	// 		return $res;
	// 		database::disconnect();
	// }
	// public function disque1()
	// {
	// 	$con=database::connect();
	// 		$res=mysql_query("select * from que_tbl as q,user_tbl as u where q.fk_email_id=u.pk_email_id and que_flag='1'",$con);
	// 		return $res;
	// 		database::disconnect();
		
	// }
	// public function cntans($id)
	// {
	// 	$con=database::connect();
	// 		$res=mysql_query("select * from ans_tbl where fk_que_id='$id'",$con);
	// 		return $res;
	// 		database::disconnect();
		
	// }
	// public function expDel($exp_id)
	// {
	// 	$con=database::connect();
	// 		$res=mysql_query("delete from expences_tbl where expences_id='$exp_id'",$con);
	// 		return $res;
	// 		database::disconnect();
		
	// }

	// public function getquedel($id)
	// {
	// 	$con=database::connect();
	// 		$res=mysql_query("delete from que_tbl where pk_que_id='$id'",$con);
	// 		$res=mysql_query("delete from ans_tbl where fk_que_id='$id'",$con);
	// 		return $res;
	// 		database::disconnect();
		
	// }
	
	// public function disviewbysub($id)
	// {		$con=database::connect();
	// 		$res=mysql_query("select * from que_tbl as q,user_tbl as u where q.fk_email_id=u.pk_email_id and q.fk_sub_id='$id' and que_flag='1'",$con);
	// 		return $res;
	// 		database::disconnect();
	// }
	
	// public function listAll($email)
	// {
	// 	$con=database::connect();
	// 	$res=mysql_query("SELECT u.*,c.*,e.* from user_tbl as u,expences_tbl as e,cat_tbl as c where c.cat_id=e.fk_cat_id and u.user_id=e.fk_user_id and user_email='$email'",$con);
	// 	return $res;
	// database::disconnect();
	// }
	// public function checkpwd($email_id,$pass)
	// {
	// 	$con=database::connect();
	// 	$res=mysql_query("select * from user_tbl where pk_email_id='$email_id' and user_password='$pass'",$con);
	// 	return $res;
	// database::disconnect();
	// }
	// public function changepwd($email_id,$pass)
	// {
	// 	$con=database::connect();
	// 	$res=mysql_query("update user_tbl set user_password='$pass' where pk_email_id='$email_id'",$con);
	// 	return $res;
	// database::disconnect();
	// }
	// public function queupdate($id,$title,$desc,$cat,$photo)
	// {
	// 	$con=database::connect();
	// 	$res=mysql_query("update que_tbl set que_title='$title',que_desc='$desc',fk_sub_id='$cat',que_img='$photo' where pk_que_id='$id' ",$con);
	// 	return $res;
	// database::disconnect();
	// }
	public function signup($name,$email,$phone,$pass)
	{
		$con=database::connect();
		$res=mysql_query("insert into user_tbl values(NULL,'$name','$email','$phone','$pass')",$con);
		return $res;
	database::disconnect();
	}
	public function login($email,$pass)
	{
		$con=database::connect();
		$res=mysql_query("select * from user_tbl where User_gmail='$email' and User_password='$pass'",$con);
		return $res;
	database::disconnect();
	}
	public function changeprof($email)
	{
		$con=database::connect();
		$res=mysql_query("select * from user_tbl where pk_email_id='$email'",$con);
		return $res;
	database::disconnect();
	}
	public function changeprofedit($photo,$name,$mobile,$email_id)
	{
		$con=database::connect();
	$res=mysql_query("update user_tbl set user_photo='$photo',user_name='$name',user_mobile='$mobile' where pk_email_id='$email_id' ",$con);
	return $res;
	database::disconnect();
	}
	public static function disconnect()
	{
		mysql_close(self::$con);
		self::$con=NULL;
	}
	public function expDel($exp_id)
	{
		$con=database::connect();
			$res=mysql_query("delete from expences where expences_id='$exp_id'",$con);
			return $res;
			database::disconnect();
		
	}
	public function getid($email)
	{		$con=database::connect();
			$res=mysql_query("select * from user_tbl where User_gmail='$email'",$con);
			return $res;
			database::disconnect();
	}
	public function addExpences($user_id,$cat,$amount,$day,$month,$name)
	{	
			$con=database::connect();
			$res=mysql_query("insert into expences values ('$user_id','$cat','$amount','$day','$month','$name',NULL)",$con);
			return $res;
			database::disconnect();
	}
	public function getAllCat()
	{		$con=database::connect();
			$res=mysql_query("select * from category ",$con);
			return $res;
			database::disconnect();
	}
	public function getTodayExpences($user_id,$day)
	{		$con=database::connect();
			$res=mysql_query("select * from expences where User_Id='$user_id' and Day='$day'",$con);
			return $res;
			database::disconnect();
	}
	public function getThisMonthExpences($user_id,$month)
	{		$con=database::connect();
			$res=mysql_query("select * from expences where User_Id='$user_id' and Month='$month'",$con);
			return $res;
			database::disconnect();
	}
	public function getTotalExpences($user_id)
	{		$con=database::connect();
			$res=mysql_query("select * from expences where User_Id='$user_id'",$con);
			return $res;
			database::disconnect();
	}
	public function getExpenceByMonth($user_id)
	{		$con=database::connect();
			$res=mysql_query("select * from expences where User_Id='$user_id' ",$con);
			return $res;
			database::disconnect();
	}
	public function getCategoryByExpence($user_id)
	{		$con=database::connect();
			$res=mysql_query("select e.*,c.* from expences as e,category as c where e.User_Id='$user_id' and c.Category_id=e.Category_id",$con);
			return $res;
			database::disconnect();
	}
	public function listAllByDay($email,$day)
	{		$con=database::connect();
			$res=mysql_query("SELECT u.*,c.*,e.* from user_tbl as u,expences as e,category as c where c.Category_id=e.Category_id and u.User_Id=e.User_Id and User_gmail='$email' and e.Day='$day'",$con);
			return $res;
			database::disconnect();
	}
	public function checkpassword($email,$password)
	{		$con=database::connect();
			$res=mysql_query("select * from user_tbl where User_gmail='$email' and User_password='$password'",$con);
			return $res;
			database::disconnect();
	}
	public function changepassword($email,$newpass)
	{		$con=database::connect();
			$res=mysql_query("update user_tbl set User_password='$newpass' where User_gmail='$email' ",$con);
			return $res;
			database::disconnect();
	}
	public function getUserByEmail($email)
	{		$con=database::connect();
			$res=mysql_query("select * from user_tbl where User_gmail='$email'",$con);
			return $res;
			database::disconnect();
	}
	public function changeprofile($email,$tname,$phn)
	{		$con=database::connect();
			$res=mysql_query("update user_tbl set User_name='$tname' , User_phone_number='$phn' where User_gmail='$email' ",$con);
			return $res;
			database::disconnect();
	}
	public function listAllByMonth($email,$month)
	{		$con=database::connect();
			$res=mysql_query("SELECT u.*,c.*,e.* from user_tbl as u,expences as e,category as c where c.Category_id=e.Category_id and u.User_Id=e.User_Id and User_gmail='$email' and e.Month='$month'",$con);
			return $res;
			database::disconnect();
	}
	public function listAll($email)
	{
		$con=database::connect();
		$res=mysql_query("SELECT u.*,c.*,e.* from user_tbl as u,expences as e,category as c where c.Category_id=e.Category_id and u.User_id=e.User_id and User_gmail='$email'",$con);
		return $res;
	database::disconnect();
	}
}
?>