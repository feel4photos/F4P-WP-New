<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/admin-page/css/custom-theme.css" />

<!--<script src="../js/jquerymin.js" type="text/javascript"></script>-->

<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<style type="text/css">
/* Cutom Style */




h3 {
	margin: 30px 0 0;
}
img {
	outline: none;
	border: none;
}
#customTheme input.resetBotton, #customTheme input.resetBotton:focus {
	background: #2EA2CC !important;
	border: solid 1px #0074A2;
	box-shadow: 0 1px 0 rgba(120, 200, 230, 0.5) inset, 0 1px 0 rgba(0, 0, 0, 0.15);
	color: #FFFFFF;
	text-decoration: none;
	padding: 0 10px;
}
.form-table td {
	padding: 10px;
}
.preview {
	float: left;
}
</style>
<title>Untitled Document</title>
<script type="text/javascript">

function append_tr()

	{

		var get_lasttr=$("#socialicon_table").find('tr:last').attr('id');

		get_lasttr=get_lasttr.split('').reverse();

		//alert(get_lasttr);

		get_lasttr=parseInt(get_lasttr[0])+parseInt(1);

		$("#socialicon_table").append('<tr id="soc_tr'+get_lasttr+'"><td width="50%">Enter Icon <input type="file" name="userfile[]" /><input type="hidden" name="hidSocial[]" value="" /></td><td width="50%">Enter Link <input type="text" name="social_link[]" style="width: 75%;" /><a href="javascript:void(0);" id="anchor_'+get_lasttr+'" onclick="remove_tr(this.id)">Remove</a></td></tr>');

		//cnt++;

	}

	function remove_tr(getid)

	{

		var get_id=getid.toString().split('_');

		get_id='soc_tr'+get_id[1];

		//alert(get_id);

		$("#"+get_id).remove();

	}

</script>
</head>

<body>
<?php

$social_img=get_option('social_img');

$social_link=get_option('social_link');

//echo $social_img.'---------------------'.$social_link;

 if(empty($social_img))

{

add_option('social_img','');

}

if(empty($social_link))

{

add_option('social_link','');

 }

?>
<form method="post" action="#" id="customTheme" enctype="multipart/form-data">
  <h3>Favicon</h3>
  <table class="form-table freeWidth">
      <tr>
         <td width="25%">Favicon :</td>
         <td width="25%"><input type="file" class="file3" name="blogheaderimg" id="uploadfile3" value="" onchange="readURL(this,3);" /></td>
         <td width="50%"><div class="preview"><img id="blah3" src="<?php echo get_option( 'blog_header_img' ); ?>" alt="No Image" class="blahblah" /></div></td>
      </tr>
  </table>
  <h3>Logo</h3>
  <table class="form-table">
    <tr>
      <td width="25%"> Logo : </td>
      <td width="25%"><input type="file" class="file1" name="logo" id="uploadfile1" value="" onchange="readURL(this,1);" /></td>
      <td width="50%"><div class="preview"><img id="blah1" src="<?php echo get_option( 'header_logo' ); ?>" alt="No Image" class="blahblah" /></div></td>
    </tr>
    <tr>
      <td width="25%"> Logo for Footer : </td>
      <td width="25%"><input type="file" class="file2" name="mobilelogo" id="uploadfile2" value="" onchange="readURL(this,2);" /></td>
      <td width="50%"><div class="preview"><img id="blah2" src="<?php echo get_option( 'logo_mobile' ); ?>" alt="No Image" class="blahblah" /></div></td>
    </tr>
    <tr>
      <td width="25%"> Logo Black : </td>
      <td width="25%"><input type="file" class="file3" name="blacklogo" id="uploadfile5" value="" onchange="readURL(this,3);" /></td>
      <td width="50%"><div class="preview"><img id="blah5" src="<?php echo get_option( 'logo_black' ); ?>" alt="No Image" class="blahblah" /></div></td>
    </tr>
  </table>
  <h3>Personal Information</h3>
  <table class="form-table">
  	<tr>
      <td>Name</td>
      <td colspan="4"><input type="text" name="cName" id="cName" value="<?php echo get_option('clntName');?>" placeholder="Client name" style="width: 80%; margin-bottom: 10px;" />
      </td>
    </tr>
    <tr>
      <td>Short Information</td>
      <td colspan="4">
      	<div style="height:300px; overflow:hidden;">
          <?php
			$editor_settings = array('media_buttons' => false);
			wp_editor(stripslashes(get_option('shortInfo')),'shortInfo', $editor_settings); ?>
        </div>
      </td>
    </tr>
    <tr>
      <td>Residence</td>
      <td colspan="4">
      	<div style="height:300px; overflow:hidden;">
          <?php
			$editor_settings = array('media_buttons' => false);
			wp_editor(stripslashes(get_option('residence')),'residence', $editor_settings); ?>
        </div>
      </td>
    </tr>
    <tr>
      <td>Phone Number</td>
      <td><input type="text" name="phoneno" id="phoneno" value="<?php echo get_option('phoneNumber');?>" style="width: 80%;" /></td>
      <td>Phone Number to link</td>
      <td><input type="text" name="phonelink" id="phonelink" value="<?php echo get_option('phoneNumberLink');?>" style="width: 80%;" /></td>
    </tr>

    <tr>
      <td>Mobile Number 1st</td>
      <td><input type="text" name="mobno1" id="mobno1" value="<?php echo get_option('mobileNumber1');?>" style="width: 80%;" /></td>
      <td>Mobile Number 1st to link</td>
      <td><input type="text" name="moblink1" id="moblink1" value="<?php echo get_option('mobileNumber1Link');?>" style="width: 80%;" /></td>
    </tr>

    <tr>
      <td>Mobile Number 2nd</td>
      <td><input type="text" name="mobno2" id="mobno2" value="<?php echo get_option('mobileNumber2');?>" style="width: 80%;" /></td>
      <td>Mobile Number 2nd to link</td>
      <td><input type="text" name="moblink2" id="moblink2" value="<?php echo get_option('mobileNumber2Link');?>" style="width: 80%;" /></td>
    </tr>

    <tr>
      <td>Email ID 1st</td>
      <td><input type="text" name="email1st" id="email1st" value="<?php echo get_option('emailLink1');?>" style="width: 80%;" /></td>
      <td>Email ID 2nd</td>
      <td><input type="text" name="email2nd" id="email2nd" value="<?php echo get_option('emailLink2');?>" style="width: 80%;" /></td>
    </tr>
    <tr>
      <td>Website</td>
      <td colspan="4"><input type="text" name="website" id="website" value="<?php echo get_option('webLink');?>" placeholder="Website" style="width: 80%; margin-bottom: 10px;" />
      </td>
    </tr>
  </table>

  <?php /*?><h3>Social Icons</h3>
  <table class="form-table" id="socialicon_table">
    <?php

	    $fetchAllicons=json_decode(get_option('social_img'));

	    $fetchAlllinks=json_decode(get_option('social_link'));

	    $countrow=0;

		//print_r($fetchAllicons);

		if(count($fetchAllicons)>0)

		{

	    foreach($fetchAllicons as $fetchicon)

	    {

	    	?>
    <tr id="soc_tr<?php echo $countrow+1; ?>">
      <td width="50%"> Enter Icon
        <input type="file" name="userfile[]" />
        <img src="<?php echo site_url(); ?>/wp-content/uploads/social_icon/<?php echo $fetchicon; ?>" width="30" />
        <input type="hidden" name="hidSocial[]" value="<?php echo $fetchicon; ?>" /></td>
      <td width="50%"> Enter Link
        <input type="text" name="social_link[]" style="width: 75%;" value="<?php echo $fetchAlllinks[$countrow]; ?>" />
        <?php

	            if($countrow>0)

	            {

	            	?>
        <a href="javascript:void(0);" id="anchor_<?php echo $countrow+1; ?>" onclick="remove_tr(this.id)">Remove</a>
        <?php

	            }

	            ?></td>
    </tr>
    <?php

	        $countrow++;

	    }

		}else

		{

	    ?>
    <tr id="soc_tr1">
      <td width="50%"> Enter Icon
        <input type="file" name="userfile[]">
        <input type="hidden" value="" name="hidSocial[]"></td>
      <td width="50%"> Enter Link
        <input type="text" value="" style="width: 75%;" name="social_link[]"></td>
    </tr>
    <?php

		}

		?>
  </table>
  <a href="javascript:void(0);" onclick="append_tr();">Add More Social Links</a><?php */?>

  <h3>Social Icons</h3>
  <table class="form-table" id="socialicon_table">
  	<tr>
      <td>Facebook</td>
      <td colspan="4"><input type="text" name="facebooklink" id="facebooklink" value="<?php echo get_option('facebook_link');?>" placeholder="Facebook link" style="width: 80%; margin-bottom: 10px;" />
      </td>
    </tr>
    <tr>
      <td>Instagram</td>
      <td colspan="4"><input type="text" name="instagramlink" id="instagramlink" value="<?php echo get_option('instagram_link');?>" placeholder="Instagram link" style="width: 80%; margin-bottom: 10px;" />
      </td>
    </tr>
    <tr>
      <td>Pinterest</td>
      <td colspan="4"><input type="text" name="pinterestlink" id="pinterestlink" value="<?php echo get_option('pinterest_link');?>" placeholder="Pinterest link" style="width: 80%; margin-bottom: 10px;" />
      </td>
    </tr>
    <tr>
      <td>Behance</td>
      <td colspan="4"><input type="text" name="behancelink" id="behancelink" value="<?php echo get_option('behance_link');?>" placeholder="Behance link" style="width: 80%; margin-bottom: 10px;" />
      </td>
    </tr>
  </table>

  <h3>Photography Courtesy Info</h3>
  <table class="form-table">
    <tr>
      <td>Photography Courtesy</td>
      <td colspan="4"><div style="height:300px; overflow:hidden;">
          <?php

            	$editor_settings = array('media_buttons' => false);

            	wp_editor(stripslashes(get_option('photo_curt')),'photo_curt', $editor_settings); ?>
        </div></td>
    </tr>
    <tr>
      <td colspan="5"></td>
    </tr>
  </table>

  <h3>Design & Development Credit Info</h3>
  <table class="form-table">
    <tr>
      <td>Design & Development Credit</td>
      <td colspan="4"><div style="height:300px; overflow:hidden;">
          <?php

            	$editor_settings = array('media_buttons' => false);

            	wp_editor(stripslashes(get_option('footer_copyright_bottom')),'footer_copyright_bottom', $editor_settings); ?>
        </div></td>
    </tr>
    <tr>
      <td colspan="5"></td>
    </tr>
  </table>
  <input type="submit" id="submit" name="submit1" value="Save Changes" class="button button-primary" />
  <input type="reset" id="reset" name="reset" value="Reset Changes" class="button button-primary resetBotton" />
</form>
<?php



	//Design & development credit editor

	$fetchoption=get_option('footer_copyright_bottom');
	if(empty($fetchoption))
	{
		add_option('footer_copyright_bottom','');
	}


	$fetchoption2=get_option('footer_lftcont');
	if(empty($fetchoption2))
	{
		add_option('footer_lftcont','');
	}


	$fetchoption3=get_option('photo_curt');
	if(empty($fetchoption3))
	{
		add_option('photo_curt','');
	}


	$fetchoption4=get_option('shortInfo');
	if(empty($fetchoption4))
	{
		add_option('shortInfo','');
	}

	$fetchoption5=get_option('residence');
	if(empty($fetchoption5))
	{
		add_option('residence','');
	}

	if(isset($_POST['submit1'])) {

		//repeter code

		extract( $_POST );

		$getAlllinks=json_encode($_POST['social_link']);

		$getHid=$_POST['hidSocial'];

		update_option('social_link',$getAlllinks);

		$socialfile=$_FILES['userfile'];

		$getfile=array();

		for($i=0;$i<count($socialfile['name']);$i++)

		{

			if($socialfile['name'][$i]!='')

			{

			$new_file=uniqid().'_'.str_replace(' ','_',$socialfile['name'][$i]);

			$getfile[]=$new_file;

            move_uploaded_file($socialfile['tmp_name'][$i],'../wp-content/uploads/social_icon/'.$new_file);

			}

			else

			{

				$getfile[]=$getHid[$i];

			}

		}

		//print_r($getfile);

		//exit;

		$getfile=json_encode($getfile);

		update_option('social_img',$getfile);


		//Design & development credit editor

		update_option('footer_copyright_bottom',$_POST['footer_copyright_bottom']);
		update_option('footer_lftcont',$_POST['footer_lftcont']);
		update_option('photo_curt',$_POST['photo_curt']);
		update_option('shortInfo',$_POST['shortInfo']);
		update_option('residence',$_POST['residence']);


		/* $getAlllinks=json_encode($_POST['social_link']);

		$getHid=$_POST['hidSocial'];

		update_option('social_link',$getAlllinks);

		$socialfile=$_FILES['userfile'];

		$getfile=array();

		for($i=0;$i<count($socialfile['name']);$i++)

		{

			if($socialfile['name'][$i]!='')

			{

			$new_file=uniqid().'_'.str_replace(' ','_',$socialfile['name'][$i]);

			$getfile[]=$new_file;

            move_uploaded_file($socialfile['tmp_name'][$i],'../wp-content/uploads/social_icon/'.$new_file);

			}

			else

			{

				$getfile[]=$getHid[$i];

			}

		}

		//print_r($getfile);

		//exit;

		$getfile=json_encode($getfile);

		update_option('social_img',$getfile); */



		//echo $logofile['url'];

		/* Image Uploding */

		if ( ! function_exists( 'wp_handle_upload' ) )

			require_once( ABSPATH . 'wp-admin/includes/file.php' );

		$logoimage = $_FILES['logo'];
		$logomobile = $_FILES['mobilelogo'];
        $logoblack = $_FILES['blacklogo'];
		$blogHdrImg = $_FILES['blogheaderimg'];
		$siteFvIc = $_FILES['siteFavIcon'];
		$upload_overrides = array( 'test_form' => false );

		$movefile1 = wp_handle_upload( $logoimage, $upload_overrides ); //file uploaded

		$movefile2 = wp_handle_upload( $logomobile, $upload_overrides ); //file uploaded

		$movefile3 = wp_handle_upload( $blogHdrImg, $upload_overrides ); //file uploaded

		$movefile4 = wp_handle_upload( $siteFvIc, $upload_overrides ); //file uploaded

        $movefile5 = wp_handle_upload( $logoblack, $upload_overrides ); //file uploaded


		if(!empty($siteFvIc['name']))

		{

			$siteFav_val = get_option( 'site_favicon' );

			if((!empty($siteFvIc['name'])) && ($siteFav_val == ''))

			{

				add_option( 'site_favicon', $movefile4['url'] );

			}

			else if(!empty($siteFvIc['name']) && ($siteFav_val!= ''))

			{

			   update_option( 'site_favicon', $movefile4['url'] );

			}

		}



		if(!empty($logoimage['name']))

		{

			$logo_val = get_option( 'header_logo' );

			if((!empty($logoimage['name'])) && ($logo_val == ''))

			{

				add_option( 'header_logo', $movefile1['url'] );

			}

			else if(!empty($logoimage['name']) && ($logo_val!= ''))

			{

			   update_option( 'header_logo', $movefile1['url'] );

			}

		}



		if(!empty($logomobile['name']))

		{

			$logomobile_val = get_option( 'logo_mobile' );

			if((!empty($logomobile['name'])) && ($logomobile_val == ''))

			{

				add_option( 'logo_mobile', $movefile2['url'] );

			}

			else if(!empty($logomobile['name']) && ($logomobile_val!= ''))

			{

			   update_option( 'logo_mobile', $movefile2['url'] );

			}

		}




        if(!empty($logoblack['name']))

        {

            $logoblack_val = get_option( 'logo_black' );

            if((!empty($logoblack['name'])) && ($logoblack_val == ''))

            {

                add_option( 'logo_black', $movefile5['url'] );

            }

            else if(!empty($logoblack['name']) && ($logoblack_val!= ''))

            {

               update_option( 'logo_black', $movefile5['url'] );

            }

        }



		if(!empty($blogHdrImg['name']))

		{

			$blghdrimage_val = get_option( 'blog_header_img' );

			if((!empty($blogHdrImg['name'])) && ($blghdrimage_val == ''))

			{

				add_option( 'blog_header_img', $movefile3['url'] );

			}

			else if(!empty($blogHdrImg['name']) && ($blghdrimage_val!= ''))

			{

			   update_option( 'blog_header_img', $movefile3['url'] );

			}

		}


		$fb_link = get_option( 'facebook_link' );
		$twitt_link = get_option( 'twitt_link' );
		$instagram_link = get_option( 'instagram_link' );
		$pin_link = get_option( 'pinterest_link' );
		$ytube_link = get_option( 'youtube_link' );
        $bhance_link = get_option( 'behance_link' );

		$clientName = get_option ('clntName');

		$phoneNo = get_option ('phoneNumber');
		$phoneNoLnk = get_option ('phoneNumberLink');
		$mobNo1 = get_option ('mobileNumber1');
		$mobNo1Lnk = get_option ('mobileNumber1Link');
		$mobNo2 = get_option ('mobileNumber2');
		$mobNo2Lnk = get_option ('mobileNumber2Link');

		$emailid1 = get_option ('emailLink1');
		$emailid2 = get_option ('emailLink2');

		$weblink = get_option ('webLink');


		if(empty($fb_link)) {
			delete_option( 'facebook_link' );
			add_option( 'facebook_link', $facebooklink, '', 'yes' );
		} else {
			update_option( 'facebook_link', $facebooklink );

			   }

		if(empty($twitt_link)) {

			delete_option( 'twitt_link' );

			add_option( 'twitt_link', $twittlink, '', 'yes' );

		} else {

					update_option( 'twitt_link', $twittlink );

			   }

		if(empty($instagram_link)) {

			delete_option( 'instagram_link' );

			add_option( 'instagram_link', $instagramlink, '', 'yes' );

		} else {

					update_option( 'instagram_link', $instagramlink );

			   }

		if(empty($pin_link)) {

			delete_option( 'pinterest_link' );

			add_option( 'pinterest_link', $pinterestlink, '', 'yes' );

		} else {

					update_option( 'pinterest_link', $pinterestlink );

			   }

        if(empty($bhance_link)) {

            delete_option( 'behance_link' );

            add_option( 'behance_link', $behancelink, '', 'yes' );

        } else {

                    update_option( 'behance_link', $behancelink );

               }

		if(empty($ytube_link)) {
			delete_option( 'youtube_link' );
			add_option( 'youtube_link', $youtubelink, '', 'yes' );
		} else {
			update_option( 'youtube_link', $youtubelink );

			   }

		if(empty($clientName)) {
			delete_option( 'clntName' );
			add_option( 'clntName', $cName, '', 'yes' );
		} else {
			update_option( 'clntName', $cName );

		}

		if(empty($phoneNo)) {
		delete_option( 'phoneNumber' );
			add_option( 'phoneNumber', $phoneno, '', 'yes' );
		} else {
			update_option( 'phoneNumber', $phoneno );
		}

		if(empty($phoneNoLnk)) {
			delete_option( 'phoneNumberLink' );
			add_option( 'phoneNumberLink', $phonelink, '', 'yes' );
		} else {
			update_option( 'phoneNumberLink', $phonelink );
		}

		if(empty($mobNo1)) {
			delete_option( 'mobileNumber1' );
			add_option( 'mobileNumber1', $mobno1, '', 'yes' );
		} else {
			update_option( 'mobileNumber1', $mobno1 );
		}

		if(empty($mobNo1Lnk)) {
			delete_option( 'mobileNumber1Link' );
			add_option( 'mobileNumber1Link', $moblink1, '', 'yes' );
		} else {
			update_option( 'mobileNumber1Link', $moblink1 );
		}

		if(empty($mobNo2)) {
			delete_option( 'mobileNumber2' );
			add_option( 'mobileNumber2', $mobno2, '', 'yes' );
		} else {
			update_option( 'mobileNumber2', $mobno2 );
		}

		if(empty($mobNo2Lnk)) {
			delete_option( 'mobileNumber2Link' );
			add_option( 'mobileNumber2Link', $moblink2, '', 'yes' );
		} else {
			update_option( 'mobileNumber2Link', $moblink2 );
		}

		if(empty($emailid1)) {
			delete_option( 'emailLink1' );
			add_option( 'emailLink1', $email1st, '', 'yes' );
		} else {
			update_option( 'emailLink1', $email1st );
		}

		if(empty($emailid2)) {
			delete_option( 'emailLink2' );
			add_option( 'emailLink2', $email2nd, '', 'yes' );
		} else {
			update_option( 'emailLink2', $email2nd );
		}

		if(empty($weblink)) {
			delete_option( 'webLink' );
			add_option( 'webLink', $website, '', 'yes' );
		} else {
			update_option( 'webLink', $website );
		}


		$location = site_url()."/wp-admin/themes.php?page=custom_theme"; //meta refresh

		echo "<meta http-equiv=\"Refresh\" content=\"0;url=".$location."\">";

	}


	if( isset($_POST['submit_fb']) ){

		update_option( 'facebook_link', '' );

		$location = site_url()."/wp-admin/themes.php?page=custom_theme"; //meta refresh

		echo "<meta http-equiv=\"Refresh\" content=\"0;url=".$location."\">";

	}



?>
</body>
</html>
